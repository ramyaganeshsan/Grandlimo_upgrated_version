var express = require("express");
var router = express.Router();
var apimodel = require("../models/apimodel");
var t = require("../config/table_config.json");
var common = require("../lib/common.js");
var config = require("../config/common_config.json");
var giftCard = require("../lib_v1/giftcard");
var shared = require("../utils/shared");
const tapPaymentGateway = require("../utils/tapPaymentGateway.js");

var i18n = require("i18n");
var q = require("q");
var fs = require("fs");
const url = require("url");

const getMessage = (status, statusCode) => {
  if (status === "Cancelled")
    return "Your transaction has been successfully cancelled";
  if (status === "Expired") return "Your transaction is expired.";
  if (status === "Failed") return "Your transaction is failed.";
  if (status === "Timed Out") return "Transaction timeout.";

  statusCode = Number(statusCode);
  if (statusCode > 400 && statusCode <= 499) {
    return "Your transaction is failed.";
  }

  if (statusCode > 500 && statusCode <= 699) {
    return "Your transaction is declined.";
  }

  return "Invalid transaction";
};

module.exports = function (app) {
  router.get("/wallet", async function (req, res) {
    var hostname = req.headers.host;
    var protocol = req.headers.protocol;
    if (protocol == undefined) protocol = "http://";

    let paymentToken = req.query.tap_id;
    if (!paymentToken) {
      var message = "Invalid transaction. Please contact our support team.";
      res.type("text/json");
      return res.send(message);
    }

    let chargeDetails = await tapPaymentGateway.getChargeDetails(paymentToken);

    if (!chargeDetails || Object.keys(chargeDetails).length <= 0) {
      var message = "Invalid transaction. Please contact our support team.";
      res.type("text/json");
      return res.send(message);
    }

    let response = chargeDetails.response;
    let status = response.message;
    let code = response.code;
    let metadata = chargeDetails.metadata;
    let reference = chargeDetails.reference;

    if (status === "Captured" || status === "Authorized") {
      var passenger_id = metadata.passengerId;
      var add_amt = metadata.amount;

      var paymentId = reference.track;

      apimodel
        .checkIfPaymentTokenExists(paymentToken)
        .then(function (walletLog) {
          let existingPaymentToken = "";
          if (typeof walletLog[0] != "undefined") {
            if (typeof walletLog[0]["paymentToken"] != "undefined") {
              existingPaymentToken = walletLog[0]["paymentToken"];
            }
          }
          if (walletLog.length > 0 && existingPaymentToken != "") {
            let redirect_url = protocol + hostname + "/processPayment/failed";
            return res.redirect(
              url.format({
                pathname: redirect_url,
                query: { message: "Transaction already completed." },
              })
            );
            // var message = ;
            // res.type("text/json");
            // return res.send(message);
          } else {
            update_wallet_logs(
              q,
              parseInt(passenger_id),
              parseFloat(add_amt),
              0,
              "",
              8,
              paymentToken,
              paymentId
            ).then(function (walletupdateresults) {
              let redirect_url =
                protocol + hostname + "/processPayment/success";
              return res.redirect(
                url.format({
                  pathname: redirect_url,
                  query: { message: "Wallet recharged succesfully" },
                })
              );
              // var message = "Wallet recharged succesfully";
              // res.type("text/json");
              // return res.send(message);
            });
          }
        });
    } else {
      var message = getMessage(status, code);
      // res.type("text/json");
      // return res.send(message);
      let redirect_url = protocol + hostname + "/processPayment/failed";
      return res.redirect(
        url.format({ pathname: redirect_url, query: { message: message } })
      );
    }
  });

  /* Router success */
  router.get("/success", function (req, res) {
    var message = req.query.message;
    res.type("text/json");
    return res.send(message);
  });

  /* Router failed */
  router.get("/failed", function (req, res) {
    var message = req.query.message;
    res.type("text/json");
    return res.send(message);
  });

  router.get("/trip", async function (req, res) {
    var hostnameRedirect = req.headers.host;
    var protocol = req.headers.protocol;
    if (protocol == undefined) protocol = "http://";

    var reward_per_trip = global.settings.reward_per_trip;
    if (reward_per_trip) {
      reward_per_trip = reward_per_trip;
    } else {
      reward_per_trip = 0;
    }

    var token = req.query.tap_id;

    if (!token) {
      var message = "Invalid transaction. Please contact our support team.";
      let redirect_url = protocol + hostnameRedirect + "/processPayment/failed";
      res.redirect(
        url.format({ pathname: redirect_url, query: { message: message } })
      );
    }

    let chargeDetails = await tapPaymentGateway.getChargeDetails(token);

    // let chargeDetails = {
    //   id: "chg_TS02A2020240859Tq7g0904708",
    //   object: "charge",
    //   live_mode: false,
    //   customer_initiated: true,
    //   api_version: "V2",
    //   method: "GET",
    //   status: "CAPTURED",
    //   amount: 8.5,
    //   currency: "KWD",
    //   threeDSecure: true,
    //   card_threeDSecure: false,
    //   save_card: false,
    //   product: "GOSELL",
    //   description: "",
    //   metadata: {
    //     tripId: "6834",
    //     amount: "8.5",
    //     distance: "0",
    //     type: "trip",
    //     minutes: "1.00",
    //     waitingCost: "0",
    //   },
    //   order: { id: "ord_U3Xm2424751TKh96gX3P359" },
    //   transaction: {
    //     authorization_id: "070559",
    //     timezone: "UTC+03:00",
    //     created: "1712400704438",
    //     expiry: { period: 30, type: "MINUTE" },
    //     asynchronous: false,
    //     amount: 8.5,
    //     currency: "KWD",
    //   },
    //   reference: {
    //     track: "tck_TS06A0920241051Kw3p0604643",
    //     payment: "0906241051046436547",
    //     gateway: "123456789",
    //     acquirer: "409707070559",
    //   },
    //   response: { code: "000", message: "Captured" },
    //   security: {
    //     threeDSecure: { id: "3ds_TS05A4420241051Oo7j0604440", status: "Y" },
    //   },
    //   acquirer: { response: { code: "00", message: "Approved" } },
    //   gateway: { response: { code: "0", message: "Transaction Approved" } },
    //   card: {
    //     object: "card",
    //     first_six: "512345",
    //     first_eight: "51234500",
    //     scheme: "MASTERCARD",
    //     brand: "MASTERCARD",
    //     last_four: "0008",
    //   },
    //   receipt: { id: "201006241051041429", email: true, sms: true },
    //   customer: {
    //     id: "cus_TS03A2520241023b4J80604464",
    //     first_name: "Shruthy",
    //     email: "shr@gmail.com",
    //     phone: { country_code: "+91", number: "8870869322" },
    //   },
    //   merchant: { country: "KW", currency: "KWD", id: "32475487" },
    //   source: {
    //     object: "token",
    //     type: "CARD_NOT_PRESENT",
    //     payment_type: "CREDIT",
    //     payment_method: "MASTERCARD",
    //     channel: "INTERNET",
    //     id: "tok_jeJt42247512HJj6nN3s118",
    //     on_file: false,
    //   },
    //   redirect: {
    //     status: "SUCCESS",
    //     url: "http://localhost:4000/processPayment/trip",
    //   },
    //   activities: [
    //     {
    //       id: "activity_TS05A4420241051La340604903",
    //       object: "activity",
    //       created: 1712400704438,
    //       status: "INITIATED",
    //       currency: "KWD",
    //       amount: 8.5,
    //       remarks: "charge - created",
    //       txn_id: "chg_TS03A0920241051e7N30604596",
    //     },
    //     {
    //       id: "activity_TS01A1220241052Ma5g0604298",
    //       object: "activity",
    //       created: 1712400732298,
    //       status: "CAPTURED",
    //       currency: "KWD",
    //       amount: 8.5,
    //       remarks: "charge - captured",
    //       txn_id: "chg_TS03A0920241051e7N30604596",
    //     },
    //   ],
    //   auto_reversed: false,
    // };

    if (!chargeDetails || Object.keys(chargeDetails).length <= 0) {
      var message = "Invalid transaction. Please contact our support team.";
      let redirect_url = protocol + hostnameRedirect + "/processPayment/failed";
      res.redirect(
        url.format({ pathname: redirect_url, query: { message: message } })
      );
    }

    let response = chargeDetails.response;
    let status = response.message;
    let code = response.code;
    let metadata = chargeDetails.metadata;

    if (status === "Captured" || status === "Authorized") {
      var knet_trip_id = Number(metadata.tripId);
      var knetfare = parseFloat(metadata.amount);
      var knet_distance = metadata.distance;
      var knet_minutes = metadata.minutes;
      var knet_waiting_cost = metadata.waitingCost;

      try {
        apimodel.get_log_temp(q, token).then(function (logtempresults) {
          if (logtempresults.length > 0) {
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

            var surge_price =
              typeof logtempresults[0].surge_price !== "undefined"
                ? logtempresults[0].surge_price
                : 0;

            apimodel
              .get_trip_detail_complete(q, knet_trip_id)
              .then(async function (tripdetailsresults) {
                if (tripdetailsresults.length > 0) {
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

                    /* Sasidharan April 05 2024 */
                    var actualTotalFare = tripdetailsresults[0].fare;
                    var discountAmountUsed =
                      tripdetailsresults[0].discount_wallet_amount_used;

                    var actual_pickup_time =
                      tripdetailsresults[0].actual_pickup_time;
                    var current_drop_time = tripdetailsresults[0].drop_time;
                    var airport_pickup = tripdetailsresults[0].airport_pickup;
                    var taxi_modelid = tripdetailsresults[0].taxi_modelid;
                    var airport_type = tripdetailsresults[0].airport_type;
                    var arrived_time = tripdetailsresults[0].arrived_time;
                    var promocode = tripdetailsresults[0].promocode;
                    var gift_card_status =
                      tripdetailsresults[0].gift_card_status;
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
                    var pickup_longitude =
                      tripdetailsresults[0].pickup_longitude;
                    var company_id = tripdetailsresults[0].company_id;
                    var tax = global.settings.tax;
                    var driver_edit_status = 4;
                    var pending_wallet_amt = passenger_pending_amt;
                    var tripfare =
                      parseFloat(wallet_amount_used) + parseFloat(knetfare);

                    /* Sasidharan apr 29 2022 */
                    var applied_corporate_promocode =
                      typeof tripdetailsresults[0]
                        .applied_corporate_promocode != "undefined"
                        ? tripdetailsresults[0].applied_corporate_promocode
                        : 0;
                  } catch (err) {
                    console.log(err);
                  }

                  try {
                    var passenger_lang =
                      typeof tripdetailsresults[0].passenger_lang !==
                      "undefined"
                        ? tripdetailsresults[0].passenger_lang
                        : "en";
                    req.app.locals.passenger_i18n.setLocale(passenger_lang);
                  } catch (err) {
                    console.log(err);
                  }

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
                                      try {
                                        update_pending_amt(
                                          q,
                                          passenger_id,
                                          pending_wallet_amt,
                                          driver_edit_status,
                                          trip_id
                                        )
                                          .then(function (transupdateresults) {
                                            var pending_amt =
                                              pending_wallet_amt;
                                            try {
                                              payment_array = {
                                                add_amt: 0,
                                                cash_pay: 0,
                                                card_pay: 0,
                                                knet_pay: parseFloat(knetfare),
                                                pending_pay: 0,
                                                wallet_pay:
                                                  parseFloat(
                                                    wallet_amount_used
                                                  ),
                                                fare_note: "",
                                                discount_wallet_pay: parseFloat(
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
                                                  travel_status: parseInt(1),
                                                  payment_status: parseInt(1),
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
                                                              .then(function (
                                                                checkresults
                                                              ) {
                                                                //sms send
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
                                                                    replace_array
                                                                  )
                                                                  .then(
                                                                    function (
                                                                      checkresults
                                                                    ) {}
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
                                                                      function (
                                                                        checkresults
                                                                      ) {}
                                                                    );
                                                                }

                                                                var SocketMsg =
                                                                  {
                                                                    message:
                                                                      i18n.__(
                                                                        "trip_fare_updated"
                                                                      ),
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

                                                                        var actual_fare =
                                                                          parseFloat(
                                                                            tripfare +
                                                                              surge_price
                                                                          ).toFixed(
                                                                            3
                                                                          );

                                                                        var socket_msg =
                                                                          {
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
                                                                            bearing:
                                                                              bearing,
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

                                                                            /* Sasidharan April 05 2024 */
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
                                                                                knetfare,
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
                                                                        console.log(
                                                                          err
                                                                        );
                                                                      }
                                                                    }
                                                                  )
                                                                  .catch(
                                                                    (err) => {
                                                                      console.error(
                                                                        err
                                                                      );
                                                                    }
                                                                  );

                                                                message =
                                                                  i18n.__(
                                                                    "trip_fare_updated"
                                                                  );

                                                                let redirect_url =
                                                                  protocol +
                                                                  hostnameRedirect +
                                                                  "/processPayment/success";
                                                                res.redirect(
                                                                  url.format({
                                                                    pathname:
                                                                      redirect_url,
                                                                    query: {
                                                                      message:
                                                                        message,
                                                                    },
                                                                  })
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
                                      } catch (err) {
                                        console.error(err);
                                      }
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
              });
          }
        });
      } catch (err) {
        console.error(err);
      }
    } else {
      var message = getMessage(status, code);
      // res.type("text/json");
      // return res.send(message);
      let redirect_url = protocol + hostnameRedirect + "/processPayment/failed";
      res.redirect(
        url.format({ pathname: redirect_url, query: { message: message } })
      );
    }
  });

  return router;
};

function update_wallet_logs(
  q,
  passenger_id,
  add_amt,
  negative,
  trip_id,
  recharge_type,
  paymentToken = "",
  paymentId = ""
) {
  var deferred = q.defer();
  var details = {};
  apimodel
    .get_passenger_details(q, passenger_id)
    .then(function (detailresults) {
      if (detailresults.length > 0) {
        try {
          var current_wallet_amount =
            typeof detailresults[0].wallet_amount != "undefined"
              ? detailresults[0].wallet_amount
              : 0;
          var update_wallet_amt = 0;
          var additional_amt = 0;

          // console.error(current_wallet_amount);

          if (negative == 1) {
            update_wallet_amt = current_wallet_amount - add_amt;
            additional_amt = -add_amt;
          } else {
            update_wallet_amt = current_wallet_amount + add_amt;
            additional_amt = add_amt;
          }

          var updateArray = {
            wallet_amount: parseFloat(update_wallet_amt),
            last_wallet_update: new Date(),
          };

          // console.error(updateArray);
        } catch (err) {
          console.log(err);
        }

        apimodel
          .update_passenger(q, updateArray, passenger_id)
          .then(function (detailresults) {
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
              trip_id: trip_id ? parseInt(trip_id) : "",
              paid_status: parseInt(1),
            };

            /* Sasidharan Nov 3 2022 */
            if (paymentToken != "" && paymentId != "") {
              insert_array["paymentToken"] = paymentToken;
              insert_array["paymentId"] = paymentId;
            }

            apimodel
              .insert_wallet_logs(q, insert_array)
              .then(function (detailresults) {
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

function update_transaction(q, update_array, trip_id, company_id) {
  var deferred = q.defer();

  try {
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
            try {
              update_array.admin_amount = parseFloat(admin_commission);
              update_array.company_amount = parseFloat(company_commission);
              update_array.trans_packtype = trans_packtype;

              apimodel
                .get_auto_id(q, t.MDB_TRANS)
                .then(function (autoidresults) {
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
                            })
                            .catch((err) => {
                              console.error(err);
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
                            })
                            .catch((err) => {
                              console.error(err);
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
                })
                .catch((err) => {
                  console.error(err);
                });
            } catch (err) {
              console.error(err);
            }
          })
          .catch((err) => {
            console.error(err);
          });
      });
  } catch (err) {
    console.error(err);
  }

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
  var deferred = q.defer();
  let giftCardApiResponse = {};

  if (gift_card_status == 1 && global.settings.gift_card_enable == 1) {
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
          if (
            giftCardResponse &&
            giftCardResponse.data &&
            giftCardResponse.data.data
          ) {
            let httpCode = giftCardResponse.data.code;
            let response = giftCardResponse.data.data;

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
