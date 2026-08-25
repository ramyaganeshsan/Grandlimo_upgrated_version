var express = require("express"),
  router = express.Router();

var app = require("../app");
var apimodel = require("../models/apimodel_v1");
var t = require("../config/table_config.json");
var common = require("../lib_v1/common.js");
var config = require("../config/common_config.json");
var giftCard = require("../lib_v1/giftcard");
var shared = require("../utils/shared");

var i18n = require("i18n");
var q = require("q");
var fs = require("fs");
const url = require("url");

module.exports = function (app) {
  //http://192.168.1.73:4000/knet/payment_success?Status=1&PaymentToken=1533886676&PaymentId=5285449381082220&PaidOn=2018-08-10%2010%3A38%3A47&Variable1=1626&Variable2=4.000&Variable3=0.0015272944967283&Variable4=19&Variable5=0.00&Method=1&AdministrativeCharge=0  router.get('/payment_response', function (req, res) {
  router.get("/payment_response", function (req, res) {
    var hostname = req.headers.host;
    var protocol = req.headers.protocol;

    if (protocol == undefined) protocol = "http://";

    var query = req.query;
    var PaymentId = req.query.PaymentId;
    var Status = req.query.Status;

    console.log("payment_response----->start");
    console.log(query);
    console.log("payment_response----->end");

    var redirect_url = "";
    var response_query = {};

    if (typeof Status != undefined && Status != 0) {
      // PaymentID = req.query.PaymentId;
      // presult   = req.query.Status;
      // postdate  = req.query.PaidOn;
      // token     = req.query.PaymentToken;
      // tranid    = req.query.tranid;
      // auth      = req.query.auth;
      // ref       = req.query.ref;
      // trackid   = req.query.trackid;
      // udf1      = req.query.Variable1;
      // udf2      = req.query.Variable2;
      // udf3      = req.query.Variable3;
      // udf4      = req.query.Variable4;
      // udf5      = req.query.Variable5;

      response_query = req.query;

      redirect_url = protocol + hostname + "/knet/tap_success";
    } else {
      redirect_url = protocol + hostname + "/knet/tap_error";
    }

    console.log("redirecturl", redirect_url);
    console.log("response_query", response_query);
    res.redirect(url.format({ pathname: redirect_url, query: response_query }));
  });

  router.get("/tap_error", function (req, res) {
    var knet_trip_id = req.query.UDF1;
    if (
      typeof knet_trip_id == undefined ||
      knet_trip_id == "" ||
      knet_trip_id == null
    ) {
      knet_trip_id = req.query.Variable1;
    }

    if (knet_trip_id != "" && typeof knet_trip_id != undefined) {
      var update_trip_array = {
        travel_status: parseInt(5),
        payment_status: parseInt(0),
      };

      apimodel
        .update_trip(q, update_trip_array, knet_trip_id)
        .then(function (checkresults) {
          var message = "Payment Failed";
          res.type("text/json");
          res.send(message);
        });
    }
  });

  router.get("/tap_success", function (req, res) {
    var reward_per_trip = global.settings.reward_per_trip;
    if (reward_per_trip) {
      reward_per_trip = reward_per_trip;
    } else {
      reward_per_trip = 0;
    }

    console.log("tap_success--->knet", req.query);
    //var token = req.query.PaymentToken;
    /////KFAST/////
    var token = req.query.OrderReferenceNumber;
    /////KFAST/////

    console.log(token, "tap_success--->knet");

    var knet_trip_id = req.query.UDF1;
    if (
      typeof knet_trip_id == undefined ||
      knet_trip_id == "" ||
      knet_trip_id == null
    ) {
      knet_trip_id = req.query.Variable1;
    }

    var knetfare = req.query.UDF2;
    if (typeof knetfare == undefined || knetfare == "" || knetfare == null) {
      knetfare = req.query.Variable2;
    }

    var knet_distance = req.query.UDF3;
    if (
      typeof knet_distance == undefined ||
      knet_distance == "" ||
      knet_distance == null
    ) {
      knet_distance = req.query.Variable3;
    }

    var knet_minutes = req.query.UDF4;
    if (
      typeof knet_minutes == undefined ||
      knet_minutes == "" ||
      knet_minutes == null
    ) {
      knet_minutes = req.query.Variable4;
    }

    var knet_waiting_cost = req.query.UDF5;
    if (
      typeof knet_waiting_cost == undefined ||
      knet_waiting_cost == "" ||
      knet_waiting_cost == null
    ) {
      knet_waiting_cost = req.query.Variable5;
    }

    console.log(
      "tap_success--->End",
      knet_trip_id +
        "X" +
        knetfare +
        "X" +
        knet_distance +
        "X" +
        knet_minutes +
        "X" +
        knet_waiting_cost
    );

    try {
      apimodel.get_log_temp(q, token).then(function (logtempresults) {
        console.log("pay00002", logtempresults);

        if (logtempresults.length > 0) {
          console.log("pay00003");

          var passenger_discount = logtempresults[0].passenger_discount;
          var corporate_discount = logtempresults[0].corporate_discount;
          var gift_card_discount = parseFloat(
            logtempresults[0].gift_card_discount
          );

          var tax_amount = logtempresults[0].tax_amount;
          var waiting_time = logtempresults[0].waiting_time;
          var minutes_fare = logtempresults[0].minutes_fare;
          var nightfare_applicable = logtempresults[0].nightfare_applicable;
          var nightfare = logtempresults[0].nightfare;
          var evefare_applicable = logtempresults[0].eveningfare_applicable;

          var eveningfare = logtempresults[0].eveningfare;
          var actual_paid_amt = logtempresults[0].actual_paid_amt;
          var pending_amt = logtempresults[0].pending_amt;
          var passenger_pending_amt = logtempresults[0].passenger_pending_amt;
          var wallet_amount_used = logtempresults[0].wallet_amount_used;
          var discount_wallet_amount_used =
            logtempresults[0].discount_wallet_amount_used;
          var add_amt = logtempresults[0].add_amt;
          var distance_fare = logtempresults[0].distance_fare;
          var fare_calculation_type = logtempresults[0].fare_calculation_type;
          var trip_id = knet_trip_id;
          var apply_estimate_fare = logtempresults[0].apply_estimate_fare;
          var minutes_traveled = logtempresults[0].minutes_traveled;
          if (minutes_traveled && minutes_traveled > 0) {
            knet_minutes = minutes_traveled; //parseFloat(minutes_traveled).toFixed(2);
          }

          // 03 Feb 2020
          var surge_price =
            typeof logtempresults[0].surge_price !== "undefined"
              ? logtempresults[0].surge_price
              : 0;
          // 03 Feb 2020

          console.log("evefare_applicable", evefare_applicable);
          console.log("eveningfare", eveningfare);
          console.log("actual_paid_amt", actual_paid_amt);
          console.log("pending_amt", pending_amt);
          console.log("add_amt", add_amt);
          console.log("passenger_pending_amt", passenger_pending_amt);
          console.log("pending_amt", pending_amt);

          // 03 Feb 2020
          console.log("surge_price", surge_price);
          // 03 Feb 2020
          console.log("pay00004");

          apimodel
            .get_trip_detail_complete(q, knet_trip_id)
            .then(async function (tripdetailsresults) {
              if (tripdetailsresults.length > 0) {
                console.log("pay00005");

                try {
                  var travel_status = tripdetailsresults[0].travel_status;
                  var driver_id = tripdetailsresults[0].driver_id;
                  var driver_status = tripdetailsresults[0].driver_status;
                  var driver_image = tripdetailsresults[0].driver_image;
                  var driver_name = tripdetailsresults[0].driver_name;
                  var passenger_id = tripdetailsresults[0].passengers_id;
                  var coordinates = tripdetailsresults[0].coordinates;
                  var accuracy = tripdetailsresults[0].accuracy;
                  var bearing = tripdetailsresults[0].bearing;
                  var distance = tripdetailsresults[0].distance;
                  if (distance == "") {
                    distance = 0;
                  }
                  var trans_id = tripdetailsresults[0].trans_id;
                  var actual_pickup_time =
                    tripdetailsresults[0].actual_pickup_time;
                  var current_drop_time = tripdetailsresults[0].drop_time;
                  var airport_pickup = tripdetailsresults[0].airport_pickup;
                  var taxi_modelid = tripdetailsresults[0].taxi_modelid;
                  var airport_type = tripdetailsresults[0].airport_type;
                  var arrived_time = tripdetailsresults[0].arrived_time;
                  var promocode = tripdetailsresults[0].promocode;
                  var gift_card_status = tripdetailsresults[0].gift_card_status;
                  var passenger_phone = tripdetailsresults[0].passenger_phone;
                  var passenger_email = tripdetailsresults[0].passenger_email;
                  var passenger_first_name =
                    tripdetailsresults[0].passenger_first_name;
                  var passenger_last_name = tripdetailsresults[0]
                    .passenger_last_name
                    ? tripdetailsresults[0].passenger_last_name
                    : "";

                  var passenger_wallet_amount =
                    tripdetailsresults[0].passenger_wallet_amount;
                  var passenger_id = tripdetailsresults[0].passengers_id;
                  var vip_user = tripdetailsresults[0].vip_user;
                  var model_id = tripdetailsresults[0].taxi_modelid;
                  var pickup_location = tripdetailsresults[0].pickup_location;
                  var drop_location = tripdetailsresults[0].drop_location;
                  var pickup_latitude = tripdetailsresults[0].pickup_latitude;
                  var pickup_longitude = tripdetailsresults[0].pickup_longitude;
                  var company_id = tripdetailsresults[0].company_id;
                  //var distance_fare = tripdetailsresults[0].distance_fare;
                  //var fare_calculation_type = tripdetailsresults[0].fare_calculation_type;
                  var tax = global.settings.tax;
                  var driver_edit_status = 4;
                  var pending_wallet_amt = passenger_pending_amt;
                  var tripfare =
                    parseFloat(wallet_amount_used) + parseFloat(knetfare);
                  console.log("Knet tripfare", tripfare);

                  /* Sasidharan apr 29 2022 */
                  var applied_corporate_promocode =
                    typeof tripdetailsresults[0].applied_corporate_promocode !=
                    "undefined"
                      ? tripdetailsresults[0].applied_corporate_promocode
                      : 0;
                } catch (err) {
                  console.log(err);
                }

                try {
                  var passenger_lang =
                    typeof tripdetailsresults[0].passenger_lang !== "undefined"
                      ? tripdetailsresults[0].passenger_lang
                      : "en";
                  req.app.locals.passenger_i18n.setLocale(passenger_lang);
                } catch (err) {
                  console.log(err);
                }

                console.log("faree0021");
                try {
                  var insert_trans_array = {
                    passengers_log_id: parseInt(knet_trip_id),
                    distance: parseFloat(knet_distance),
                    actual_distance: parseFloat(knet_distance),
                    distance_unit: "km",
                    tripfare: parseFloat(tripfare),
                    fare: parseFloat(knetfare),
                    tips: 0,
                    credits_used: 0,
                    waiting_cost: parseFloat(knet_waiting_cost),
                    passenger_discount: parseFloat(passenger_discount),
                    corporate_amount: parseFloat(corporate_discount),
                    company_tax: parseFloat(tax_amount),
                    waiting_time: waiting_time,
                    trip_minutes: parseFloat(knet_minutes),
                    minutes_fare: parseFloat(minutes_fare),
                    remarks: "-",
                    payment_type: parseInt(3),
                    amt: parseFloat(knetfare),
                    nightfare_applicable: parseInt(nightfare_applicable),
                    nightfare: parseFloat(nightfare),
                    eveningfare_applicable: parseInt(evefare_applicable),
                    eveningfare: parseFloat(eveningfare),
                    payment_basis: parseInt(0),
                    notify_status: parseInt(0),
                    advance_payment: parseInt(0),
                    wallet_amount_used: parseFloat(wallet_amount_used),
                    actual_paid_amt: parseFloat(actual_paid_amt),
                    add_amt: parseFloat(add_amt),
                    passenger_pending_amt: parseFloat(passenger_pending_amt),
                    pending_amt: parseFloat(pending_amt),
                    current_date: new Date(),
                    fare_update_status: parseInt(0),
                    driver_edit_status: parseInt(driver_edit_status),
                    forceclose_status: parseInt(0),
                    distance_fare: parseInt(distance_fare),
                    reward_point: parseInt(reward_per_trip),
                    fare_calculation_type: parseInt(fare_calculation_type),
                    apply_estimate_fare: parseInt(apply_estimate_fare),
                    surge_price: parseFloat(surge_price), // 03 Feb 2020
                    discount_wallet_amount_used: parseFloat(
                      discount_wallet_amount_used
                    ),
                  };
                } catch (err) {
                  console.log(err);
                }

                console.log("fare001111", insert_trans_array);

                try {
                  console.log("giftcard redemption v0....");
                  console.log("promocode", promocode);
                  console.log("gift_card_status", gift_card_status);
                  console.log("gift_card_discount", gift_card_discount);

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
                    ).then(function (transupdateresults) {
                      console.log("faree0022");

                      update_promocode(q, promocode, passenger_phone).then(
                        function (transupdateresults) {
                          console.log("faree0023");

                          update_wallet_used_amount(
                            q,
                            passenger_id,
                            wallet_amount_used,
                            trip_id
                          ).then(function (transupdateresults) {
                            console.log("faree0024");

                            update_passenger_pending_amt(
                              q,
                              passenger_id,
                              passenger_pending_amt,
                              add_amt,
                              driver_edit_status,
                              trip_id
                            ).then(function (transupdateresults) {
                              console.log("faree0025");
                              try {
                                update_pending_amt(
                                  q,
                                  passenger_id,
                                  pending_wallet_amt,
                                  driver_edit_status,
                                  trip_id
                                ).then(function (transupdateresults) {
                                  console.log("faree0026");
                                  var pending_amt = pending_wallet_amt;
                                  try {
                                    payment_array = {
                                      add_amt: 0,
                                      cash_pay: 0,
                                      card_pay: 0,
                                      knet_pay: parseFloat(knetfare),
                                      pending_pay: 0,
                                      wallet_pay:
                                        parseFloat(wallet_amount_used),
                                      fare_note: "",
                                      discount_wallet_pay: parseFloat(
                                        discount_wallet_amount_used
                                      ),
                                    };
                                  } catch (err) {
                                    console.log(err);
                                  }
                                  console.log("faree0027");

                                  apimodel
                                    .update_payentry(q, payment_array, trip_id)
                                    .then(function (transupdateresults) {
                                      var update_trip_array = {
                                        travel_status: parseInt(1),
                                        payment_status: parseInt(1),
                                        fare_update_status: parseInt(0),
                                      };

                                      var update_shift_array = {
                                        status: "F",
                                      };

                                      var update_request_array = {
                                        status: parseInt(8),
                                      };
                                      console.log("faree0028");

                                      apimodel
                                        .update_trip(
                                          q,
                                          update_trip_array,
                                          trip_id
                                        )
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
                                                  console.log("faree0029");
                                                  common
                                                    .update_completed_trip_det(
                                                      q,
                                                      trip_id
                                                    )
                                                    .then(function (
                                                      checkresults
                                                    ) {
                                                      console.log("faree0030");
                                                      //sms send
                                                      var replace_array = {
                                                        sitename:
                                                          global.settings
                                                            .app_name,
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

                                                      var SocketMsg = {
                                                        message:
                                                          i18n.__(
                                                            "trip_fare_updated"
                                                          ),
                                                        status: 21,
                                                      };
                                                      var SocketDriver =
                                                        "D-" + driver_id;

                                                      common.emitLocDriver(
                                                        SocketDriver,
                                                        SocketMsg
                                                      );

                                                      var appRoot =
                                                        global.settings.docroot;
                                                      var hostname =
                                                        global.settings
                                                          .base_url;

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
                                                            var trip_details =
                                                              [];
                                                            trip_details[
                                                              "trip_id"
                                                            ] = trip_id;

                                                            var actual_fare =
                                                              parseFloat(
                                                                tripfare +
                                                                  surge_price
                                                              ).toFixed(3);

                                                            var socket_msg = {
                                                              message:
                                                                req.app.locals.passenger_i18n.__(
                                                                  "trip_fare_updated"
                                                                ),
                                                              detail:
                                                                trip_details,
                                                              driver_latitute:
                                                                coordinates[1],
                                                              driver_longitude:
                                                                coordinates[0],
                                                              bearing: bearing,
                                                              accuracy:
                                                                accuracy,
                                                              fare: knetfare,
                                                              trip_id:
                                                                knet_trip_id,
                                                              base_fare:
                                                                base_fare,
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
                                                              display: 1,
                                                              status: 5,
                                                            };

                                                            //console.log('socket_msg6', socket_msg);
                                                            // 	var socket_pass_id = 'P-'+passenger_id;
                                                            // 	if(typeof global.socketobj[socket_pass_id] !=='undefined'){
                                                            // 	global.socketobj[socket_pass_id].emit('update_trip_status',socket_msg);
                                                            // } else {
                                                            // 	console.log("Socket missing...");
                                                            // }

                                                            common.emitPassenger(
                                                              passenger_id,
                                                              socket_msg
                                                            );
                                                            common.emitDispatcher(
                                                              app.io
                                                            );
                                                          } catch (err) {
                                                            console.log(err);
                                                          }
                                                        });

                                                      message =
                                                        i18n.__(
                                                          "trip_fare_updated"
                                                        );
                                                      res.type("text/json");
                                                      res.send(message);
                                                    });
                                                });
                                            });
                                        });
                                    });
                                });
                              } catch (err) {
                                console.log(err);
                              }
                            });
                          });
                        }
                      );
                    });
                  });
                } catch (err) {
                  console.log(err);
                }
              }
            });
        }
      });
    } catch (err) {
      console.log(err);
    }
  });

  //http://192.168.1.33:1011/knet/wallet_response?Status=1&PaymentToken=1533558542&PaymentId=6054486291582180&PaidOn=2018-08-06+15%3A31%3A04&Variable1=23.000&Variable2=161&Variable3=&Variable4=&Variable5=&Method=1&AdministrativeCharge=0
  router.get("/wallet_response", function (req, res) {
    var hostname = req.headers.host;
    var query = req.query;
    var PaymentId = req.query.PaymentId;
    var Status = req.query.Status;

    var protocol = req.headers.protocol;

    if (protocol == undefined) protocol = "http://";

    var redirect_url = "";
    var response_query = {};

    console.log("wallet_response---->start");
    // console.log('REQUEST',req);
    // console.log('RESPONSE',res);
    //console.log('query',req.query);
    console.log("Status", Status);
    console.log("PaymentId", PaymentId);
    console.log("wallet_response---->end");

    if (typeof Status != undefined && Status != 0) {
      // PaymentID = req.query.PaymentId;
      // presult   = req.query.Status;
      // postdate  = req.query.PaidOn;
      // token     = req.query.PaymentToken;
      // tranid    = req.query.tranid;
      // auth      = req.query.auth;
      // ref       = req.query.ref;
      // trackid   = req.query.trackid;
      // udf1      = req.query.Variable1;
      // udf2      = req.query.Variable2;
      // udf3      = req.query.Variable3;
      // udf4      = req.query.Variable4;
      // udf5      = req.query.Variable5;

      response_query = req.query;

      console.log("response_query", response_query);

      redirect_url = protocol + hostname + "/knet/wallet_success";
    } else {
      redirect_url = protocol + hostname + "/knet/wallet_cancel";
    }

    res.redirect(url.format({ pathname: redirect_url, query: response_query }));
  });

  router.get("/wallet_cancel", function (req, res) {
    var type = req.query.type;
    var message = "Wallet recharge cancelled";
    res.type("text/json");
    res.send(message);
  });

  router.get("/wallet_success", function (req, res) {
    var PaymentID = req.query.PaymentID;
    var postdate = req.query.PostDate;
    var tranid = req.query.TranID;
    var auth = req.query.Auth;
    var presult = req.query.Result;
    var ref = req.query.Ref;
    var trackid = req.query.TrackID;
    var passenger_id = req.query.UDF2;

    console.log("wallet_success---->start");
    console.log(req.query);
    console.log("wallet_success---->end");

    if (
      typeof passenger_id == undefined ||
      passenger_id == "" ||
      passenger_id == null
    ) {
      passenger_id = req.query.Variable2;
    }

    var add_amt = req.query.UDF1;

    if (typeof add_amt == undefined || add_amt == "" || add_amt == null) {
      add_amt = req.query.Variable1;
    }

    update_wallet_logs(
      q,
      parseInt(passenger_id),
      parseFloat(add_amt),
      0,
      "",
      8
    ).then(function (walletupdateresults) {
      var message = "Wallet recharged succesfully";
      res.type("text/json");
      res.send(message);
    });
  });

  return router;
};

function update_transaction(q, update_array, trip_id, company_id) {
  var deferred = q.defer();

  try {
    var details = {};

    var admin_commission = global.settings.admin_commission * update_array.fare;
    var company_commission = update_array.fare - admin_commission;
    var trans_packtype = "N";

    console.log("trans001");

    apimodel
      .update_admin_balance(q, admin_commission)
      .then(function (updatetransresults) {
        console.log("trans002");

        apimodel
          .update_company_balance(q, company_commission, company_id)
          .then(function (updatetransresults) {
            console.log("trans003");

            try {
              update_array.admin_amount = parseFloat(admin_commission);
              update_array.company_amount = parseFloat(company_commission);
              update_array.trans_packtype = trans_packtype;

              apimodel
                .get_auto_id(q, t.MDB_TRANS)
                .then(function (autoidresults) {
                  console.log("trans004");

                  if (autoidresults.length > 0) {
                    var last_insert_id = autoidresults[0]._id + 1;

                    update_array._id = last_insert_id;
                    console.log("trans005");

                    apimodel
                      .check_trans_exists(q, trip_id)
                      .then(function (transresults) {
                        console.log("trans006");

                        if (transresults.length > 0) {
                          apimodel
                            .update_transaction(q, update_array, trip_id)
                            .then(function (updateresults) {
                              console.log("trans007");

                              details.admin_commission = admin_commission;
                              details.company_commission = company_commission;
                              details.trans_packtype = trans_packtype;
                              details.status = 1;
                              deferred.resolve(details);
                              deferred.makeNodeResolver();
                              time_interval = null;
                            });
                        } else {
                          console.log("trans008");

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
            } catch (err) {
              console.log(err);
            }
          });
      });
  } catch (err) {
    console.log(err);
  }

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

  console.log(passenger_id, add_amt, negative, trip_id, recharge_type);
  //72 14.5 0 1555 6

  var details = {};

  console.log("herer021");

  console.log("passenger_id", passenger_id);

  apimodel
    .get_passenger_details(q, passenger_id)
    .then(function (detailresults) {
      console.log("detailresults", detailresults.length);

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

          console.log();

          var updateArray = {
            wallet_amount: parseFloat(update_wallet_amt),
            last_wallet_update: new Date(),
          };
        } catch (err) {
          console.log(err);
        }
        console.log("herer022");

        apimodel
          .update_passenger(q, updateArray, passenger_id)
          .then(function (detailresults) {
            console.log("herer023");

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
                console.log("herer024");

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
    console.log(err);
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

  console.log(passenger_pending_amt, add_amt, driver_edit_status, trip_id);

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
    console.log("error", ex);
  }
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
    status_description: "Used giftcard in Knet v1 trip",
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
