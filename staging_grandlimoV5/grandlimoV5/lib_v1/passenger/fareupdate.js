// var apimodel = require("../../models/passapimodel_v1");
var apimodel = require("../../models/apimodel_v1");
var moment = require("moment-timezone");
var apimodel_two = require("../../models/apimodel_v1");

var favicon = require("../../config/favicon.json");
var config = require("../../config/common_config.json");
var q = require("q");
var appRoot = require("app-root-path");
var validator = require("validator");
var fs = require("fs");
var validate = require("validate.js");
var dateFormat = require("dateformat");
//var i18n = require('i18n');
var t = require("../../config/table_config.json");
var common = require("../../lib_v1/common.js");
var common_one = require("../../lib/common.js");
var uniqid = require("uniqid");
var i18n = require("i18n");

/* Sasidharan April 05 2024 */
var shared = require("../../utils/shared.js");
var tapPaymentGateway = require("../../utils/tapPaymentGateway.js");

/* Sasidharan Nov 20 2024 */
const { getPassengerDetails } = require("../../modules/hesabe/hesabe.model.js");
const hesabe = require("../../modules/hesabe/hesabe.js");

exports.tripfare_update = async function (q, req) {
  console.error("yes calling far eu pdate");
  var deferred = q.defer();

  var hostname = req.headers.host;
  var protocol = req.headers.protocol;

  var reward_per_trip = global.settings.reward_per_trip;
  if (reward_per_trip) {
    reward_per_trip = reward_per_trip;
  } else {
    reward_per_trip = 0;
  }

  if (protocol == undefined) protocol = "http://";

  //var hostname = global.settings.base_url;

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
    var actual_paid_amt = 0;
    //var edit_status = inputParams.edit_status;
    var forceclose_status = inputParams.forceclose_status;
    var wallet_amount_used = inputParams.wallet_amount_used;
    var driver_edit_status = 0;
    var waiting_cost = inputParams.waiting_cost;
    var distance_fare = inputParams.distance_fare;
    var fare_calculation_type = inputParams.fare_calculation_type;
    var apply_estimate_fare = inputParams.apply_estimate_fare;
    var gift_card_status = inputParams.gift_card_status;
    var gift_card_discount = inputParams.gift_card_discount;
    var tapTransactionId = inputParams.tapTransactionId;
    var remainning_amt = inputParams.remainning_amt;
    var device_type = inputParams.device_type;

    // 03 Feb 2020
    var surge_price =
      typeof inputParams.surge_price !== "undefined"
        ? inputParams.surge_price
        : 0;
    inputParams.surge_price =
      typeof inputParams.surge_price !== "undefined"
        ? inputParams.surge_price
        : 0;
    // 03 Feb 2020

    //console.log("faree000");

    /* Sasidharan April 05 2024 added async */
    apimodel
      .get_trip_detail_complete(q, trip_id)
      .then(async function (detailsresults) {
        console.error("detailsresults : ", detailsresults);
        //console.log("faree001");
        if (detailsresults.length > 0) {
          //console.log("faree002");

          var travel_status = detailsresults[0].travel_status;
          var driver_id = detailsresults[0].driver_id;
          var driver_status = detailsresults[0].driver_status;
          var passenger_id = detailsresults[0].passengers_id;
          var distance = detailsresults[0].distance;
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
          var passenger_email = detailsresults[0].passenger_email;
          var passenger_first_name = detailsresults[0].passenger_name;
          var passenger_last_name = detailsresults[0].passenger_lastname
            ? detailsresults[0].passenger_lastname
            : "";
          var passenger_wallet_amount =
            detailsresults[0].passenger_wallet_amount;
          var passenger_id = detailsresults[0].passengers_id;
          var vip_user = detailsresults[0].vip_user;
          var model_id = detailsresults[0].taxi_modelid;
          var pickup_location = detailsresults[0].pickup_location;
          //var drop_location = detailsresults[0].drop_location;
          var pickup_latitude = detailsresults[0].pickup_latitude;
          var pickup_longitude = detailsresults[0].pickup_longitude;
          var company_id = detailsresults[0].company_id;
          var tax = global.settings.tax;

          /* Sasidharan May 24 2023 */
          var discount_wallet_amount_used =
            detailsresults[0].discount_wallet_amount_used;

          /* Sasidharan jan 10 2023 */
          gift_card_status = detailsresults[0].gift_card_status;
          gift_card_discount = detailsresults[0].gift_card_discount;

          /* Sasidharan apr 29 2022 */
          var applied_corporate_promocode =
            typeof detailsresults[0].applied_corporate_promocode != "undefined"
              ? detailsresults[0].applied_corporate_promocode
              : 0;
          console.error("calling 1");
          if (
            (travel_status == 1 && trans_id != "" && trans_id != undefined) ||
            (travel_status == 2 && trans_id != "" && trans_id != undefined) ||
            (travel_status == 5 && trans_id != "" && trans_id != undefined)
          ) {
            //console.log("faree003");

            try {
              var update_trip_array = {
                travel_status: parseInt(1),
                driver_reply: "A",
                msg_status: "R",
              };

              var update_request_array = {
                status: parseInt(7),
              };
            } catch (err) {
              //console.log(err);
            }
            console.error("calling 2");

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
                      console.error("calling 3");

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
                          console.error("calling 4");

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
            console.error("calling 5");
          } else {
            //console.log("faree006");
            console.error("calling 6");

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
            console.error("calling 7");

            if (pay_mod_id == 1 || pay_mod_id == 2 || pay_mod_id == 6) {
              //console.log("faree0021");
              console.error("calling 8");

              try {
                var insert_trans_array = {
                  passengers_log_id: parseInt(trip_id),
                  distance: parseFloat(distance),
                  actual_distance: parseFloat(distance),
                  distance_unit: "km",
                  tripfare: parseFloat(trip_fare),
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

                  /* Sasidharan May 24 2023 */
                  discount_wallet_amount_used: parseFloat(
                    discount_wallet_amount_used
                  ),

                  surge_price: parseFloat(surge_price), // 03 Feb 2020
                };
              } catch (err) {
                //console.log(err);
              }
              giftCardRedemption(
                q,
                promocode,
                gift_card_discount,
                gift_card_status,
                passenger_email,
                passenger_first_name,
                passenger_last_name,
                passenger_id,
                trip_id
              ).then(function (redemptionResults) {
                if (redemptionResults.code && redemptionResults.code == 200) {
                  insert_trans_array.gift_card_discount = gift_card_discount;
                  insert_trans_array.redemption_amount =
                    redemptionResults.transaction_amount;
                  insert_trans_array.redemption_trans_id =
                    redemptionResults.reference_no;
                  insert_trans_array.redemption_type =
                    redemptionResults.transaction_type;
                }

                update_transaction(
                  q,
                  insert_trans_array,
                  trip_id,
                  company_id
                ).then(function (transupdateresults) {
                  //console.log("faree0022");

                  update_promocode(q, promocode).then(function (
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
                                  discount_wallet_pay: parseFloat(
                                    discount_wallet_amount_used
                                  ),
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
                                  discount_wallet_pay: parseFloat(
                                    discount_wallet_amount_used
                                  ),
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
                                  discount_wallet_pay: parseFloat(
                                    discount_wallet_amount_used
                                  ),
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
                                  discount_wallet_pay: parseFloat(
                                    discount_wallet_amount_used
                                  ),
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
                                  discount_wallet_pay: parseFloat(
                                    discount_wallet_amount_used
                                  ),
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

                                                /* Sasidharan apr 29 - 2022 */
                                                if (
                                                  typeof applied_corporate_promocode !=
                                                    "undefined" &&
                                                  applied_corporate_promocode !=
                                                    1
                                                ) {
                                                  common
                                                    .add_trip_reward(
                                                      q,
                                                      passenger_id,
                                                      reward_per_trip
                                                    )
                                                    .then(function (
                                                      checkresults
                                                    ) {});
                                                }

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

                                                    try {
                                                      var trip_details = [];
                                                      trip_details["trip_id"] =
                                                        trip_id;

                                                      var socket_msg = {
                                                        message:
                                                          "trip_fare_updated",

                                                        details: details,
                                                        status: 21,
                                                      };

                                                      common.emitDriver(
                                                        driver_id,
                                                        socket_msg
                                                      );
                                                    } catch (err) {
                                                      //console.log(err);
                                                    }

                                                    if (
                                                      statisticsresults.length >
                                                      0
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
                        } catch (err) {
                          //console.log(err);
                        }
                      });
                    });
                  });
                });
              });
            } else if (pay_mod_id == 3 && device_type == 1) {
              console.error("calling here");
              if (global.settings.tapPaymentGatewayStatus) {
                try {
                  let passengerInfo = await shared.getPassengerId(passenger_id);
                  if (
                    !passengerInfo ||
                    Object.keys(passengerInfo).length <= 0 ||
                    !passengerInfo.hasOwnProperty("customerTapPaymentId")
                  ) {
                    message.message = "Failed to generate payment URL.";
                    message.detail = {};
                    message.status = -1;
                    deferred.resolve(message);
                    deferred.makeNodeResolver();
                    message = null;
                    return deferred.promise;
                  }

                  inputParams.token = "tapPaymentToken" + trip_id;
                  inputParams.discount_wallet_amount_used =
                    discount_wallet_amount_used;

                  apimodel
                    .insert_temp_logs(q, inputParams)
                    .then(function (insertresults) {});

                  message.message = req.__("payment_initiate");

                  /* Sasidharan April 18 2024 */
                  message.detail = passengerInfo;

                  message.status = 1;
                  deferred.resolve(message);
                  deferred.makeNodeResolver();
                  message = null;
                  return deferred.promise;
                } catch (err) {
                  message.message = "Failed to generate payment URL.";
                  message.detail = {};
                  message.status = -1;
                  deferred.resolve(message);
                  deferred.makeNodeResolver();
                  message = null;
                  return deferred.promise;
                }
              }

              common
                .kfast_hesabe_pay(
                  q,
                  passenger_id,
                  trip_id,
                  parseFloat(fare),
                  distance,
                  minutes_traveled,
                  waiting_cost,
                  hostname,
                  protocol
                )
                .then(function (hesaberesults) {
                  //console.log('hesabe',hesaberesults);

                  if (hesaberesults.response.status == true) {
                    var details = hesaberesults.response.detail;
                    var token =
                      hesaberesults.response.detail.orderReferenceNumber.toString();

                    console.log("hesabeToken", token);
                    console.log("hesabe", hesaberesults.response);

                    try {
                      inputParams.token = token;

                      /* Sasidharan May 24 2023 */
                      inputParams.discount_wallet_amount_used =
                        discount_wallet_amount_used;

                      apimodel
                        .insert_temp_logs(q, inputParams)
                        .then(function (insertresults) {
                          //console.log('fare014')

                          message.message = hesaberesults.response.message;
                          //message.driver_statistics = driver_statistics;
                          message.detail = details;
                          message.status = 1;
                          console.log("yesyes", message);
                          deferred.resolve(message);
                          deferred.makeNodeResolver();
                          message = null;
                        });
                    } catch (err) {
                      //console.log(err);
                    }
                  } else {
                    message.message = hesaberesults.response.message;
                    //message.driver_statistics = driver_statistics;
                    message.status = -1;
                    deferred.resolve(message);
                    deferred.makeNodeResolver();
                    message = null;
                  }
                });
            } else if (pay_mod_id == 3 && device_type == 2) {
              console.error("yes calling type 2 mode 3");
              /* Sasidharan Nov 20 2024 */

              /* Sasidharan April 05 2024 */

              if (global.settings.tapPaymentGatewayStatus) {
                try {
                  let passengerInfo = await shared.getPassengerId(passenger_id);

                  if (
                    !passengerInfo ||
                    Object.keys(passengerInfo).length <= 0 ||
                    !passengerInfo.hasOwnProperty("customerTapPaymentId")
                  ) {
                    message.message = "Failed to generate payment URL.";
                    message.detail = {};
                    message.status = -1;
                    deferred.resolve(message);
                    deferred.makeNodeResolver();
                    message = null;
                    return deferred.promise;
                  }

                  apimodel
                    .get_trip_detail_complete(q, trip_id)
                    .then(async function (tripdetailsresults) {
                      console.error(
                        "tripdetailsresults : ",
                        tripdetailsresults
                      );
                      if (tripdetailsresults.length > 0) {
                        try {
                          var travel_status =
                            tripdetailsresults[0].travel_status;
                          var driver_id = tripdetailsresults[0].driver_id;
                          var driver_status =
                            tripdetailsresults[0].driver_status;
                          var driver_image = tripdetailsresults[0].driver_image;
                          var driver_name = tripdetailsresults[0].driver_name;
                          var passenger_id =
                            tripdetailsresults[0].passengers_id;
                          var coordinates = tripdetailsresults[0].coordinates;
                          var accuracy = tripdetailsresults[0].accuracy;
                          var bearing = tripdetailsresults[0].bearing;
                          var distance = tripdetailsresults[0].distance;
                          if (distance == "") {
                            distance = 0;
                          }
                          var trans_id = tripdetailsresults[0].trans_id;
                          /* Sasidharan April 05 2024 */
                          var actualTotalFare = tripdetailsresults[0].fare;
                          var discountAmountUsed =
                            tripdetailsresults[0].discount_wallet_amount_used;
                          var actual_pickup_time =
                            tripdetailsresults[0].actual_pickup_time;
                          var current_drop_time =
                            tripdetailsresults[0].drop_time;
                          var airport_pickup =
                            tripdetailsresults[0].airport_pickup;
                          var taxi_modelid = tripdetailsresults[0].taxi_modelid;
                          var airport_type = tripdetailsresults[0].airport_type;
                          var arrived_time = tripdetailsresults[0].arrived_time;
                          var promocode = tripdetailsresults[0].promocode;
                          var gift_card_status =
                            tripdetailsresults[0].gift_card_status;
                          var passenger_phone =
                            tripdetailsresults[0].passenger_phone;
                          var passenger_email =
                            tripdetailsresults[0].passenger_email;
                          var passenger_first_name =
                            tripdetailsresults[0].passenger_first_name;
                          var passenger_last_name = tripdetailsresults[0]
                            .passenger_last_name
                            ? tripdetailsresults[0].passenger_last_name
                            : "";
                          var passenger_wallet_amount =
                            tripdetailsresults[0].passenger_wallet_amount;
                          var passenger_id =
                            tripdetailsresults[0].passengers_id;
                          var vip_user = tripdetailsresults[0].vip_user;
                          var model_id = tripdetailsresults[0].taxi_modelid;
                          var pickup_location =
                            tripdetailsresults[0].pickup_location;
                          var drop_location =
                            tripdetailsresults[0].drop_location;
                          var pickup_latitude =
                            tripdetailsresults[0].pickup_latitude;
                          var pickup_longitude =
                            tripdetailsresults[0].pickup_longitude;
                          var company_id = tripdetailsresults[0].company_id;
                          var tax = global.settings.tax;
                          var driver_edit_status = 4;
                          var pending_wallet_amt = passenger_pending_amt;
                          var tripfare =
                            parseFloat(wallet_amount_used) +
                            parseFloat(knetfare);
                          /* Sasidharan apr 29 2022 */
                          var applied_corporate_promocode =
                            typeof tripdetailsresults[0]
                              .applied_corporate_promocode != "undefined"
                              ? tripdetailsresults[0]
                                  .applied_corporate_promocode
                              : 0;
                        } catch (err) {
                          console.log(err);
                        }

                        var country_code = tripdetailsresults[0].country_code;

                        try {
                          var passenger_lang =
                            typeof tripdetailsresults[0].passenger_lang !==
                            "undefined"
                              ? tripdetailsresults[0].passenger_lang
                              : "en";
                          req.app.locals.passenger_i18n.setLocale(
                            passenger_lang
                          );
                        } catch (err) {
                          console.log(err);
                        }

                        try {
                          var insert_trans_array = {
                            passengers_log_id: parseInt(trip_id),
                            distance: parseFloat(distance),
                            actual_distance: parseFloat(distance),
                            distance_unit: "km",
                            tripfare: parseFloat(trip_fare),
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
                            nightfare_applicable:
                              parseInt(nightfare_applicable),
                            nightfare: parseFloat(nightfare),
                            eveningfare_applicable:
                              parseInt(evefare_applicable),
                            eveningfare: parseFloat(eveningfare),
                            payment_basis: parseInt(0),
                            notify_status: parseInt(0),
                            advance_payment: parseInt(advance_payment),
                            wallet_amount_used: parseFloat(wallet_amount_used),
                            actual_paid_amt: parseFloat(actual_paid_amt),
                            add_amt: parseFloat(add_amt),
                            passenger_pending_amt: parseFloat(
                              passenger_pending_amt
                            ),
                            pending_amt: parseFloat(pending_wallet_amt),
                            current_date: new Date(),
                            driver_edit_status: parseInt(driver_edit_status),
                            forceclose_status: parseInt(forceclose_status),
                            reward_point: parseInt(reward_per_trip),
                            fare_calculation_type: parseInt(
                              fare_calculation_type
                            ),
                            apply_estimate_fare: parseInt(apply_estimate_fare),
                            tapTransactionId:
                              tapTransactionId /* Sasidharan May 24 2023 */,
                            discount_wallet_amount_used: parseFloat(
                              discount_wallet_amount_used
                            ),
                            surge_price: parseFloat(surge_price), // 03 Feb 2020
                          };
                        } catch (err) {
                          console.error(err);
                        }

                        try {
                          if (discount_wallet_amount_used > 0) {
                            await shared.update_discount_wallet_used_amount(
                              q,
                              passenger_id,
                              discount_wallet_amount_used,
                              trip_id
                            );
                          }

                          giftCardRedemption(
                            q,
                            promocode,
                            gift_card_discount,
                            gift_card_status,
                            passenger_email,
                            passenger_first_name,
                            passenger_last_name,
                            passenger_id,
                            trip_id
                          ).then(function (redemptionResults) {
                            if (
                              redemptionResults.code &&
                              redemptionResults.code == 200
                            ) {
                              insert_trans_array.gift_card_discount =
                                gift_card_discount;
                              insert_trans_array.redemption_amount =
                                redemptionResults.transaction_amount;
                              insert_trans_array.redemption_trans_id =
                                redemptionResults.reference_no;
                              insert_trans_array.redemption_type =
                                redemptionResults.transaction_type;
                            }

                            update_transaction(
                              q,
                              insert_trans_array,
                              trip_id,
                              company_id
                            )
                              .then(function (transupdateresults) {
                                console.error(
                                  "transupdateresults : ",
                                  transupdateresults
                                );
                                update_promocode(q, promocode, passenger_phone)
                                  .then(function (transupdateresults) {
                                    update_wallet_used_amount(
                                      q,
                                      passenger_id,
                                      wallet_amount_used,
                                      trip_id
                                    )
                                      .then(function (transupdateresults) {
                                        update_passenger_pending_amt(
                                          q,
                                          passenger_id,
                                          passenger_pending_amt,
                                          add_amt,
                                          driver_edit_status,
                                          trip_id
                                        )
                                          .then(function (transupdateresults) {
                                            update_pending_amt(
                                              q,
                                              passenger_id,
                                              pending_wallet_amt,
                                              driver_edit_status,
                                              trip_id
                                            )
                                              .then(function (
                                                transupdateresults
                                              ) {
                                                var pending_amt =
                                                  pending_wallet_amt;

                                                try {
                                                  payment_array = {
                                                    add_amt: 0,
                                                    cash_pay: 0,
                                                    card_pay: 0,
                                                    knet_pay:
                                                      parseFloat(
                                                        remainning_amt
                                                      ),
                                                    pending_pay: 0,
                                                    wallet_pay:
                                                      parseFloat(
                                                        wallet_amount_used
                                                      ),
                                                    fare_note: "",
                                                    discount_wallet_pay:
                                                      parseFloat(
                                                        discount_wallet_amount_used
                                                      ),
                                                  };
                                                } catch (err) {
                                                  console.error(err);
                                                }

                                                apimodel
                                                  .update_payentry(
                                                    q,
                                                    payment_array,
                                                    trip_id
                                                  )
                                                  .then(function (
                                                    transupdateresults
                                                  ) {
                                                    var update_trip_array = {
                                                      travel_status:
                                                        parseInt(1),
                                                      payment_status:
                                                        parseInt(1),
                                                      fare_update_status:
                                                        parseInt(0),
                                                    };
                                                    var update_shift_array = {
                                                      status: "F",
                                                    };
                                                    var update_request_array = {
                                                      status: parseInt(8),
                                                    };

                                                    apimodel
                                                      .update_trip(
                                                        q,
                                                        update_trip_array,
                                                        trip_id
                                                      )
                                                      .then(function (
                                                        checkresults
                                                      ) {
                                                        apimodel
                                                          .update_driver_shift(
                                                            q,
                                                            update_shift_array,
                                                            driver_id
                                                          )
                                                          .then(function (
                                                            checkresults
                                                          ) {
                                                            apimodel
                                                              .update_request_details(
                                                                q,
                                                                update_request_array,
                                                                trip_id
                                                              )
                                                              .then(function (
                                                                checkresults
                                                              ) {
                                                                common
                                                                  .update_completed_trip_det(
                                                                    q,
                                                                    trip_id
                                                                  )
                                                                  .then(
                                                                    function (
                                                                      checkresults
                                                                    ) {
                                                                      // sms send
                                                                      var replace_array =
                                                                        {
                                                                          sitename:
                                                                            global
                                                                              .settings
                                                                              .app_name,
                                                                        };
                                                                      common
                                                                        .send_sms(
                                                                          q,
                                                                          passenger_phone,
                                                                          5,
                                                                          replace_array,
                                                                          country_code
                                                                        )
                                                                        .then(
                                                                          function () {
                                                                            // nothing required here
                                                                          }
                                                                        );

                                                                      /* Sasidharan apr 29 - 2022 */
                                                                      if (
                                                                        typeof applied_corporate_promocode !=
                                                                          "undefined" &&
                                                                        applied_corporate_promocode !=
                                                                          1
                                                                      ) {
                                                                        common
                                                                          .add_trip_reward(
                                                                            q,
                                                                            passenger_id,
                                                                            reward_per_trip
                                                                          )
                                                                          .then(
                                                                            function () {
                                                                              // nothing required here
                                                                            }
                                                                          );
                                                                      }

                                                                      var SocketMsg =
                                                                        {
                                                                          message:
                                                                            "trip_fare_updated",

                                                                          status: 21,
                                                                        };
                                                                      var SocketDriver =
                                                                        "D-" +
                                                                        driver_id;
                                                                      common.emitLocDriver(
                                                                        SocketDriver,
                                                                        SocketMsg
                                                                      );

                                                                      var appRoot =
                                                                        global
                                                                          .settings
                                                                          .docroot;
                                                                      var hostname =
                                                                        global
                                                                          .settings
                                                                          .base_url;

                                                                      apimodel
                                                                        .get_ratings_info(
                                                                          q
                                                                        )
                                                                        .then(
                                                                          function (
                                                                            ratingsresults
                                                                          ) {
                                                                            var ratings_info =
                                                                              [];
                                                                            if (
                                                                              ratingsresults.length >
                                                                              0
                                                                            ) {
                                                                              ratings_info =
                                                                                ratingsresults;
                                                                            }

                                                                            try {
                                                                              var trip_details =
                                                                                [];
                                                                              trip_details[
                                                                                "trip_id"
                                                                              ] =
                                                                                trip_id;
                                                                              /* Sasidharan april 20 2024 */
                                                                              var actual_fare =
                                                                                parseFloat(
                                                                                  +tripfare +
                                                                                    +discount_wallet_amount_used
                                                                                ).toFixed(
                                                                                  3
                                                                                );

                                                                              var socket_msg =
                                                                                {
                                                                                  message:
                                                                                    "trip_fare_updated",
                                                                                  detail:
                                                                                    trip_details,
                                                                                  driver_latitute:
                                                                                    coordinates[1],
                                                                                  driver_longitude:
                                                                                    coordinates[0],
                                                                                  bearing:
                                                                                    bearing,
                                                                                  accuracy:
                                                                                    accuracy,
                                                                                  fare: actual_paid_amt,
                                                                                  trip_id:
                                                                                    trip_id,
                                                                                  passenger_discount:
                                                                                    insert_trans_array.passenger_discount,
                                                                                  payment_type:
                                                                                    insert_trans_array.payment_type,
                                                                                  journey_date:
                                                                                    common.convert_timezone(
                                                                                      current_drop_time
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
                                                                                  actual_fare:
                                                                                    actual_fare,
                                                                                  promo_code:
                                                                                    promocode,
                                                                                  discount_wallet_amount_used:
                                                                                    parseFloat(
                                                                                      discountAmountUsed
                                                                                    ),
                                                                                  wallet_amount_used:
                                                                                    parseFloat(
                                                                                      wallet_amount_used
                                                                                    ),
                                                                                  cash_amount_used:
                                                                                    shared.roundUp(
                                                                                      0,
                                                                                      2
                                                                                    ),
                                                                                  card_amount_used:
                                                                                    shared.roundUp(
                                                                                      actual_paid_amt,
                                                                                      2
                                                                                    ),
                                                                                  display: 1,
                                                                                  status: 5,
                                                                                };

                                                                              common.emitPassenger(
                                                                                passenger_id,
                                                                                socket_msg
                                                                              );
                                                                              common.emitDispatcher(
                                                                                app.io
                                                                              );
                                                                            } catch (err) {
                                                                              console.error(
                                                                                err
                                                                              );
                                                                            }
                                                                          }
                                                                        )
                                                                        .catch(
                                                                          (
                                                                            err
                                                                          ) => {
                                                                            console.error(
                                                                              err
                                                                            );
                                                                          }
                                                                        );

                                                                      message =
                                                                        "trip_fare_updated";
                                                                      // let redirect_url =
                                                                      //   protocol +
                                                                      //   hostnameRedirect +
                                                                      //   "/processPayment/success";
                                                                      // res.redirect(
                                                                      //   url.format(
                                                                      //     {
                                                                      //       pathname:
                                                                      //         redirect_url,
                                                                      //       query:
                                                                      //         {
                                                                      //           message:
                                                                      //             message,
                                                                      //         },
                                                                      //     }
                                                                      //   )
                                                                      // );
                                                                    }
                                                                  )
                                                                  .catch(
                                                                    (err) => {
                                                                      console.error(
                                                                        err
                                                                      );
                                                                    }
                                                                  );
                                                              })
                                                              .catch((err) => {
                                                                console.error(
                                                                  err
                                                                );
                                                              });
                                                          })
                                                          .catch((err) => {
                                                            console.error(err);
                                                          });
                                                      })
                                                      .catch((err) => {
                                                        console.error(err);
                                                      });
                                                  })
                                                  .catch((err) => {
                                                    console.error(err);
                                                  });
                                              })
                                              .catch((err) => {
                                                console.error(err);
                                              });
                                          })
                                          .catch((err) => {
                                            console.error(err);
                                          });
                                      })
                                      .catch((err) => {
                                        console.error(err);
                                      });
                                  })
                                  .catch((err) => {
                                    console.error(err);
                                  });
                              })
                              .catch((err) => {
                                console.error(err);
                              });
                          });
                        } catch (err) {
                          console.error(err);
                        }
                      }
                    })
                    .catch((err) => {
                      console.error(err);
                    });
                } catch (err) {
                  message.message = "Failed to update fare";
                  message.detail = {};
                  message.status = -1;
                  deferred.resolve(message);
                  deferred.makeNodeResolver();
                  message = null;
                  return deferred.promise;
                }
              }

              common
                .kfast_hesabe_pay(
                  q,
                  passenger_id,
                  trip_id,
                  parseFloat(fare),
                  distance,
                  minutes_traveled,
                  waiting_cost,
                  hostname,
                  protocol
                )
                .then(function (hesaberesults) {
                  //console.log('hesabe',hesaberesults);

                  if (hesaberesults.response.status == true) {
                    var details = hesaberesults.response.detail;
                    var token =
                      hesaberesults.response.detail.orderReferenceNumber.toString();

                    console.log("hesabeToken", token);
                    console.log("hesabe", hesaberesults.response);

                    try {
                      inputParams.token = token;

                      /* Sasidharan May 24 2023 */
                      inputParams.discount_wallet_amount_used =
                        discount_wallet_amount_used;

                      apimodel
                        .insert_temp_logs(q, inputParams)
                        .then(function (insertresults) {
                          //console.log('fare014')

                          message.message = hesaberesults.response.message;
                          //message.driver_statistics = driver_statistics;
                          message.detail = details;
                          message.status = 1;
                          console.log("yesyes", message);
                          deferred.resolve(message);
                          deferred.makeNodeResolver();
                          message = null;
                        });
                    } catch (err) {
                      //console.log(err);
                    }
                  } else {
                    message.message = hesaberesults.response.message;
                    //message.driver_statistics = driver_statistics;
                    message.status = -1;
                    deferred.resolve(message);
                    deferred.makeNodeResolver();
                    message = null;
                  }
                });
              /////KFAST/////
            } else {
              message.message = "payment failed due to system error";
              message.status = -1;
              deferred.resolve(message);
              deferred.makeNodeResolver();
              message = null;
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

exports.trip_complete_appleSdk = async function (q, req) {
  let inputParams = req.body;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };
  console.error("calling  1 ");
  var validate_error = ValidateAddWallet(q, inputParams);

  if (validate_error != undefined) {
    if (validate_error[0]) {
      message.message = validate_error[0];
      message.status = -1;
      deferred.resolve(message);
      return deferred.promise;
    } else {
      message.message = req.__("validation_error");
      message.status = -1;
      deferred.resolve(message);
      return deferred.promise;
    }
  } else {
    try {
      var passenger_id = inputParams.passenger_id;
      var amt = inputParams.amt;
      var tokenStr = inputParams.applePayToken;
      var trip_id = inputParams.trip_id ? inputParams.trip_id : 1234;
      if (!tokenStr) {
        message.message = req.__("appleTokenMissing");
        message.status = -1;
        deferred.resolve(message);
        return deferred.promise;
      }

      if (global.settings.tapPaymentGatewayStatus) {
        let passengerInfo = await shared.getPassengerId(passenger_id);
        if (
          !passengerInfo ||
          Object.keys(passengerInfo).length <= 0 ||
          !passengerInfo.hasOwnProperty("customerTapPaymentId")
        ) {
          message.message = req.__("noCustomerId");
          message.status = -1;
          deferred.resolve(message);
          return deferred.promise;
        }

        const SECRET_KEY =
          global.settings.tapPaymentGatewayMode === "L"
            ? global.settings.tapPaymentGatewayLiveSecrectKey
            : global.settings.tapPaymentGatewayTestSecrectKey;

        // const SECRET_KEY = "sk_live_UVOCZAbztd4TxePcFSpaWLQY";

        const HEADERS = {
          Authorization: `Bearer ${SECRET_KEY}`,
          "Content-Type": "application/json",
          Accept: "application/json",
        };
        const applePayToken = JSON.parse(tokenStr);
        const tokenPayload = {
          type: "applepay",
          token_data: applePayToken,
        };

        const tokenResponse = await axios.post(
          "https://api.tap.company/v2/tokens",
          tokenPayload,
          { headers: HEADERS }
        );

        if (!tokenResponse.data || !tokenResponse.data.id) {
          message.message = "Failed to create Tap Apple Pay token";
          message.status = -1;
          deferred.resolve(message);
          return deferred.promise;
        }

        const tapTokenId = tokenResponse.data.id;

        const chargePayload = {
          amount: parseFloat(amt),
          currency: "KWD",
          customer_initiated: true,
          threeDSecure: true,
          save_card: false,
          description: "apple pay payment",
          receipt: {
            email: false,
            sms: false,
          },

          customer: {
            id: passengerInfo.customerTapPaymentId,
          },
          merchant: {
            id: "32475487",
          },

          source: {
            id: tapTokenId,
          },
          metadata: {
            passenger_id,
            amount: amt,
            payment_type: "APPLE_PAY",
          },
        };

        const response = await axios.post(
          "https://api.tap.company/v2/charges",
          chargePayload,
          { headers: HEADERS }
        );
        if (response.data.status === "CAPTURED") {
          const chargeData = response.data;

          const paymentToken = chargeData.id;
          const paymentId = chargeData.reference.track;

          var sourceObj = response.data.source ? response.data.source : {};
          var cardObj = response.data.card ? response.data.card : {};

          var insert_array = {
            passenger_id: parseInt(passenger_id),
            change_amount: parseFloat(amt),
            wallet_amount: parseFloat(0),
            created_date: new Date(),
            created_by: parseInt(passenger_id),
            recharge_type: parseInt(4),
            trip_id: trip_id,
            paid_status: parseInt(1),
            paymentToken: paymentToken,
            paymentId: paymentId,
            payment_source: sourceObj,
            card_details: cardObj,
            debit: 1,
          };

          apimodel_two
            .insert_wallet_logs(q, insert_array)
            .then(function (detailresults) {});

          message.message = req.__("applePaySuccess");
          message.status = 1;
          message.detail = response.data;
        } else {
          message.message = "Apple Pay payment failed";
          message.status = -1;
          message.detail = response.data;
        }

        deferred.resolve(message);
        return deferred.promise;
      }

      message.message = "Payment gateway disabled";
      message.status = -1;
      deferred.resolve(message);
      return deferred.promise;
    } catch (err) {
      console.error("Apple Pay ERROR:", err);
      message.message = "Apple Pay payment failed";
      message.status = -1;
      deferred.resolve(message);
      return deferred.promise;
    }
  }
};
function get_driver_profile(appRoot, profile, hostname) {
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

function ValidateAddWallet(q, input) {
  var constraints = {
    passenger_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    amt: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

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
    // paid_amt: {
    // presence: {allowEmpty: false,message:"must not empty"},
    // },
    // edit_status: {
    // presence: {allowEmpty: false,message:"must not empty"},
    // },
    // passenger_pending_amt: {
    // presence: {allowEmpty: false,message:"must not empty"},
    // },
    // forceclose_status: {
    // presence: {allowEmpty: false,message:"must not empty"},
    // },
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
          var current_wallet_amount = detailresults[0].wallet_amount;
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
    var minutes = (secs - hours * 3600) / 60;
    var seconds = secs - (hours * 3600 + minutes * 60);

    hours = zeropadding(hours.toFixed(0));
    minutes = zeropadding(minutes.toFixed(0));
    seconds = zeropadding(seconds.toFixed(0));

    if (hours == "00" && hours == "") {
      return minutes + ":" + seconds;
    } else {
      return hours + ":" + minutes + ":" + seconds;
    }
  } catch (err) {
    //console.log(err);
  }
}

function update_promocode(q, promocode) {
  var deferred = q.defer();
  var details = {};

  if (promocode != "") {
    apimodel.update_promocode(q, promocode).then(function (promoupdateresults) {
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

function zeropadding(a) {
  h = a < 10 ? "0" + a : a;

  return h;
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

function giftCardRedemption(
  q,
  promocode,
  total_amt,
  gift_card_status,
  email,
  first_name,
  last_name,
  passenger_id,
  trip_id
) {
  console.log("giftcard redemption...");
  var deferred = q.defer();
  let giftCardApiResponse = {};
  console.log(
    "giftcard redemption...",
    gift_card_status,
    global.settings.gift_card_enable
  );

  if (gift_card_status == 1 && global.settings.gift_card_enable == 1) {
    console.log("giftcard redemption... enabled");

    giftCard
      .cardRedemption(q, {
        card_number: promocode,
        redemption_amount: total_amt,
        email: email,
        first_name: first_name,
        Last_name: last_name,
      })
      .then(function (giftCardResponse) {
        try {
          console.log("gift card response", giftCardResponse);

          if (
            giftCardResponse &&
            giftCardResponse.data &&
            giftCardResponse.data.data
          ) {
            let httpCode = giftCardResponse.data.code;
            let response = giftCardResponse.data.data;
            console.log("gift card response", response);
            console.log("spend", response.data.spend);
            console.log("transaction", response.transaction);
            if (
              httpCode == "200" &&
              response.data &&
              response.data.spend &&
              response.transaction
            ) {
              if (
                response.transaction.transaction_type == "REDEMPTION" &&
                response.transaction.reference_no
              ) {
                giftCardApiResponse.remaining_value =
                  response.data.spend.remaining_value;
                giftCardApiResponse.transaction_type =
                  response.transaction.transaction_type;
                giftCardApiResponse.transaction_amount =
                  response.transaction.transaction_amount;
                giftCardApiResponse.reference_no =
                  response.transaction.reference_no;
                giftCardApiResponse.code = 200;
                update_gift_card_logs(
                  q,
                  passenger_id,
                  trip_id,
                  promocode,
                  {
                    card_number: promocode,
                    redemption_amount: total_amt,
                    email: email,
                    first_name: first_name,
                    Last_name: last_name,
                  },
                  giftCardResponse.data,
                  1
                ).then(function (updateLogs) {
                  console.log("update gift cards");
                });
                console.log("redemption response", giftCardApiResponse);
                deferred.resolve(giftCardApiResponse);
                deferred.makeNodeResolver();
                message = null;
              } else {
                update_gift_card_logs(
                  q,
                  passenger_id,
                  trip_id,
                  promocode,
                  {
                    card_number: promocode,
                    redemption_amount: total_amt,
                    email: email,
                    first_name: first_name,
                    Last_name: last_name,
                  },
                  {},
                  0
                ).then(function (updateLogs) {
                  console.log("update gift cards");
                });
                giftCardApiResponse.code = 400;
                deferred.resolve(giftCardApiResponse);
                deferred.makeNodeResolver();
                message = null;
              }
            } else {
              update_gift_card_logs(
                q,
                passenger_id,
                trip_id,
                promocode,
                {
                  card_number: promocode,
                  redemption_amount: total_amt,
                  email: email,
                  first_name: first_name,
                  Last_name: last_name,
                },
                {},
                0
              ).then(function (updateLogs) {
                console.log("update gift cards");
              });
              giftCardApiResponse.code = 400;
              deferred.resolve(giftCardApiResponse);
              deferred.makeNodeResolver();
              message = null;
            }
          } else {
            update_gift_card_logs(
              q,
              passenger_id,
              trip_id,
              promocode,
              {
                card_number: promocode,
                redemption_amount: total_amt,
                email: email,
                first_name: first_name,
                Last_name: last_name,
              },
              {},
              0
            ).then(function (updateLogs) {
              console.log("update gift cards");
            });
            giftCardApiResponse.code = 400;
            deferred.resolve(giftCardApiResponse);
            deferred.makeNodeResolver();
            message = null;
          }
        } catch (err) {
          console.log("gift card error", err);
        }
      })
      .catch(function (error) {
        giftCardApiResponse.code = 400;
        let errorRes = {};
        if (error.response) {
          console.log("giftcard api error ", error.response.data);
          errorRes = error.response.data;
        }
        update_gift_card_logs(
          q,
          passenger_id,
          trip_id,
          promocode,
          {
            card_number: promocode,
            redemption_amount: total_amt,
            email: email,
            first_name: first_name,
            Last_name: last_name,
          },
          errorRes,
          0
        ).then(function (updateLogs) {
          console.log("update gift cards");
        });
        deferred.resolve(giftCardApiResponse);
        deferred.makeNodeResolver();
        message = null;
      });
  } else {
    giftCardApiResponse.code = 400;
    deferred.resolve(giftCardApiResponse);
    deferred.makeNodeResolver();
    message = null;
  }

  return deferred.promise;
}

function update_gift_card_logs(
  q,
  passenger_id,
  trip_id,
  promo_code,
  requestData,
  responseData,
  status
) {
  var deferred = q.defer();

  var details = {};

  var insert_array = {
    passenger_id: parseInt(passenger_id),
    gift_card_number: promo_code,
    trip_id: parseInt(trip_id),
    status_description: "Used promocode in driver - tripfare trip",
    status: parseInt(status),
    type: parseInt(1),
    input_data: requestData,
    output_data: responseData,
    created_date: new Date(),
  };

  apimodel
    .insert_gift_card_logs(q, insert_array)
    .then(function (detailresults) {
      details.status = 1;
      deferred.resolve(details);
      deferred.makeNodeResolver();
      time_interval = null;
    });
  return deferred.promise;
}
