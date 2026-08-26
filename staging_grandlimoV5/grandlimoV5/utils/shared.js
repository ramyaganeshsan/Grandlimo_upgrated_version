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
var uniqid = require("uniqid");
var axios = require("axios");
var giftCard = require("../lib_v1/giftcard");
var hesabe = require("../modules/hesabe/hesabe");

// var logger = require('../utils/logger');

/* Sasidharan April 05 2024 */
const tapPaymentGateway = require("./tapPaymentGateway.js");

exports.getGifCardDetails = function (q, promocode, gift_card_status) {
  var deferred = q.defer();
  let giftCardApiResponse = {};
  // logger.debug("getGifCardDetails "+promocode+" "+gift_card_status);
  if (gift_card_status == 1 && global.settings.gift_card_enable == 1) {
    giftCard
      .getCardBalance(q, { promocode: promocode })
      .then(function (giftCardResponse) {
        try {
          console.log("gift card response", giftCardResponse.data);
          // logger.debug(giftCardResponse.data);

          if (giftCardResponse && giftCardResponse.data) {
            let response = giftCardResponse.data;
            // logger.debug(response);
            console.log("gift card response", response);
            if (response.code == "200" && response.data) {
              if (response.data.remaining_value > 0) {
                giftCardApiResponse.remaining_value =
                  response.data.remaining_value;
                deferred.resolve(giftCardApiResponse);
                deferred.makeNodeResolver();
                message = null;
              } else {
                giftCardApiResponse.remaining_value = 0;
                deferred.resolve(giftCardApiResponse);
                deferred.makeNodeResolver();
                message = null;
              }
            } else {
              giftCardApiResponse.remaining_value = 0;
              deferred.resolve(giftCardApiResponse);
              deferred.makeNodeResolver();
              message = null;
            }
          } else {
            giftCardApiResponse.remaining_value = 0;
            deferred.resolve(giftCardApiResponse);
            deferred.makeNodeResolver();
            message = null;
          }
        } catch (err) {
          console.log("gift card error", err);
        }
      })
      .catch(function (error) {
        if (error.response) {
          console.log("giftcard api error ", error.response.data);
          // logger.debug(error.response.data);
        }
        giftCardApiResponse.remaining_value = 0;
        deferred.resolve(giftCardApiResponse);
        deferred.makeNodeResolver();
        message = null;
      });
  } else {
    giftCardApiResponse.remaining_value = 0;
    deferred.resolve(giftCardApiResponse);
    deferred.makeNodeResolver();
    message = null;
  }

  return deferred.promise;
};

exports.giftCardRedemption = function (
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
  // logger.debug("giftCardRedemption"+promocode+" "+total_amt+" "+gift_card_status+" "+email+" "+first_name+" "+last_name+" "+passenger_id+" "+trip_id);
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
                this.update_gift_card_logs(
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
                this.update_gift_card_logs(
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
              this.update_gift_card_logs(
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
            this.update_gift_card_logs(
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
        this.update_gift_card_logs(
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
};

exports.roundUp = function (num, precision) {
  precision = Math.pow(10, precision);
  return Math.ceil(num * precision) / precision;
};

exports.update_gift_card_logs = function (
  q,
  passenger_id,
  trip_id,
  promo_code,
  requestData,
  responseData,
  status
) {
  // logger.debug("start update_gift_card_logs"+passenger_id+" "+trip_id+" "+promo_code+" "+requestData+" "+responseData+" "+status)
  var deferred = q.defer();

  var details = {};

  var insert_array = {
    passenger_id: parseInt(passenger_id),
    gift_card_number: promo_code,
    trip_id: parseInt(trip_id),
    status_description: "Used giftcard in complete trip",
    status: parseInt(status),
    type: parseInt(1),
    input_data: requestData,
    output_data: responseData,
    created_date: new Date(),
  };

  apimodel
    .insert_gift_card_logs(q, insert_array)
    .then(function (detailresults) {
      // logger.debug("End update_gift_card_logs")
      details.status = 1;
      deferred.resolve(details);
      deferred.makeNodeResolver();
      time_interval = null;
    });
  return deferred.promise;
};

exports.update_complete_status = function (
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
  trip_id,
  actual_distance_data,
  passenger_wallet_amount
) {
  var deferred = q.defer();
  // logger.debug("Start update_complete_status"+trip_id)

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
        haversine_distance: actual_distance_data,
        wallet_amt_before_payment: passenger_wallet_amount,
      };

      var update_request_array = {
        status: parseInt(7),
      };

      // var drop_time = new Date();

      //   try
      //   {

      //    var now = moment();
      // now.tz(global.settings.timezone);
      // var drop_time=new Date(now.format("M/D/YYYY"));
      // }
      // catch(err)
      // {
      // }

      var drop_time = new Date();

      //console.log('droptime....',drop_time);
      //console.log('actual_pickup_time....',actual_pickup_time);
      //console.log('droptime....',drop_time.getTime());
      //console.log('actual....',actual_pickup_time.getTime());

      //console.log('drop time........',drop_time);
      apimodel
        .update_trip(q, update_trip_array, trip_id)
        .then(function (checkresults) {
          //console.log("heere006");
          apimodel
            .update_request_details(q, update_request_array, trip_id)
            .then(function (checkresults) {
              //console.log("heere007");

              var time_interval =
                drop_time.getTime() - actual_pickup_time.getTime();

              console.log(time_interval);

              time_interval = time_interval / 1000;

              deferred.resolve(time_interval);
              deferred.makeNodeResolver();
              time_interval = null;
            });
        });
    } catch (err) {
      // logger.debug(err);
    }
  } else {
    //console.log('droptime....',drop_time);
    //console.log('actual_pickup_time....',actual_pickup_time);
    //console.log('droptime....',drop_time.getTime());
    //console.log('actual....',actual_pickup_time.getTime());
    //console.log("heeere004");
    try {
      var time_interval = drop_time.getTime() - actual_pickup_time.getTime();

      time_interval = time_interval / 1000;

      deferred.resolve(time_interval);
      deferred.makeNodeResolver();
      time_interval = null;
    } catch (err) {
      //console.log(err);
    }
  }

  return deferred.promise;
};

exports.calculate_discount = function (q, promocode, total_fare) {
  var deferred = q.defer();
  // logger.debug("Start calculate_discount")

  var details = {};

  if (promocode == "") {
    details.passenger_discount = 0;
    details.corporate_discount = 0;
    // logger.debug("end 1 calculate_discount")

    deferred.resolve(details);
    deferred.makeNodeResolver();
    time_interval = null;
  }

  apimodel
    .get_promocode_details(q, promocode)
    .then(function (promocoderesults) {
      //console.log("promocode001");

      if (promocoderesults.length > 0) {
        var package = promocoderesults[0].package;
        var promo_limit = promocoderesults[0].promo_limit;
        var total_applied = promocoderesults[0].total_applied;

        //console.log("promocode002",promocoderesults);

        apimodel
          .coupon_package_details(q, package)
          .then(function (packageresults) {
            //console.log("promocode003",packageresults.length);

            if (packageresults.length > 0) {
              var passenger_commission = packageresults[0].passenger_commission;
              var corporate_commission = packageresults[0].corporate_commission;

              //console.log("promocode004");

              if (total_applied < promo_limit) {
                var passenger_discount =
                  parseFloat(total_fare) *
                  parseFloat(passenger_commission / 100);
                var corporate_discount =
                  parseFloat(total_fare) *
                  parseFloat(corporate_commission / 100);

                //console.log('passenger_discount',passenger_discount);
                //console.log('corporate_discount',corporate_discount);
                // logger.debug("end 2 calculate_discount")

                /* sasidharan july 13 2022 */
                var isFixedPromocode =
                  typeof packageresults[0].fixed_fare_apply != "undefined"
                    ? packageresults[0].fixed_fare_apply
                    : 0;
                var fixedAmount =
                  typeof promocoderesults[0].fixed_fare_amt != "undefined"
                    ? promocoderesults[0].fixed_fare_amt
                    : 0;

                if (isFixedPromocode) {
                  if (fixedAmount >= total_fare) {
                    passenger_discount = total_fare;
                  } else {
                    passenger_discount = fixedAmount;
                  }
                }

                details.passenger_discount = passenger_discount;
                details.corporate_discount = corporate_discount;
                deferred.resolve(details);
                deferred.makeNodeResolver();
                time_interval = null;
              } else {
                //console.log("promocode005");
                // logger.debug("end 3 calculate_discount")

                details.passenger_discount = 0;
                details.corporate_discount = 0;
                deferred.resolve(details);
                deferred.makeNodeResolver();
                time_interval = null;
              }
            } else {
              //console.log("promocode006");
              // logger.debug("end 4 calculate_discount")

              details.passenger_discount = 0;
              details.corporate_discount = 0;
              deferred.resolve(details);
              deferred.makeNodeResolver();
              time_interval = null;
            }
          });
      } else {
        //	console.log("promocode007");
        // logger.debug("End 5 calculate_discount")

        details.passenger_discount = 0;
        details.corporate_discount = 0;
        deferred.resolve(details);
        deferred.makeNodeResolver();
        time_interval = null;
      }
    });

  return deferred.promise;
};

exports.update_transaction = async function (q, update_array, trip_id) {
  var deferred = q.defer();
  // logger.debug("Start update_transaction "+trip_id);

  try {
    var details = {};

    let autoidresults = await apimodel.get_auto_id(q, t.MDB_TRANS);

    if (autoidresults.length > 0) {
      var last_insert_id = autoidresults[0]._id + 1;

      update_array._id = last_insert_id;

      let transresults = await apimodel.check_trans_exists(q, trip_id);

      if (transresults.length > 0) {
        apimodel
          .update_transaction(q, update_array, trip_id)
          .then(function (updateresults) {
            // logger.debug("END 1 update_transaction "+trip_id);
            details.status = 1;
            deferred.resolve(details);
            deferred.makeNodeResolver();
            time_interval = null;
          });
      } else {
        apimodel
          .insert_transaction(q, update_array, trip_id)
          .then(function (updateresults) {
            // logger.debug("END 2 update_transaction "+trip_id);
            details.status = 1;
            deferred.resolve(details);
            deferred.makeNodeResolver();
            time_interval = null;
          });
      }
    } else {
      details.status = 0;
      // logger.debug("END 3 update_transaction "+trip_id);
      deferred.resolve(details);
      deferred.makeNodeResolver();
      time_interval = null;
    }
  } catch (err) {
    console.log(err);
    // logger.debug(err)
    // logger.debug("ERROR update_transaction "+trip_id);
  }
  return deferred.promise;
};

exports.update_wallet_logs = function (
  q,
  passenger_id,
  add_amt,
  negative,
  trip_id,
  recharge_type
) {
  // logger.debug("Start update_wallet_logs "+passenger_id+" "+trip_id);

  var deferred = q.defer();

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
                // logger.debug("END 1 update_wallet_logs "+passenger_id+" "+trip_id);

                details.status = 1;
                deferred.resolve(details);
                deferred.makeNodeResolver();
                time_interval = null;
              });
          });
      } else {
        // logger.debug("END 2 update_wallet_logs "+passenger_id+" "+trip_id);

        details.status = 0;
        deferred.resolve(details);
        deferred.makeNodeResolver();
        time_interval = null;
      }
    });
  return deferred.promise;
};

exports.update_discount_wallet_logs = function (
  q,
  passenger_id,
  add_amt,
  negative,
  trip_id,
  recharge_type
) {
  // logger.debug("Start update_discount_wallet_logs "+passenger_id+" "+trip_id);

  var deferred = q.defer();

  var details = {};

  // logger.debug("update_discount_wallet_logs...");
  //console.log('herer021');

  //console.log('passenger_id',passenger_id);

  apimodel
    .get_passenger_details(q, passenger_id)
    .then(function (detailresults) {
      //console.log('detailresults',detailresults.length);

      if (detailresults.length > 0) {
        try {
          var current_wallet_amount = detailresults[0].discount_wallet;
          var update_wallet_amt = 0;
          var additional_amt = 0;

          if (negative == 1) {
            update_wallet_amt = current_wallet_amount - add_amt;
            additional_amt = -add_amt;
          } else {
            update_wallet_amt = current_wallet_amount - add_amt;
            additional_amt = add_amt;
          }

          var updateArray = {
            discount_wallet: parseFloat(update_wallet_amt),
            last_discount_wallet_update: new Date(),
          };
        } catch (err) {
          //console.log(err);
        }
        //console.log('herer022');

        apimodel
          .update_passenger(q, updateArray, passenger_id)
          .then(function (detailresults) {
            //console.log('herer023');

            if (negative == 1) {
              recharge_type = 12;
            } else {
              recharge_type = 13;
            }

            var insert_array = {
              passenger_id: parseInt(passenger_id),
              change_amount: parseFloat(add_amt),
              wallet_amount: parseFloat(update_wallet_amt),
              created_date: new Date(),
              created_by: parseInt(passenger_id),
              recharge_type: parseInt(recharge_type),
              trip_id: parseInt(trip_id),
              discount_wallet_status: parseInt(1),
              paid_status: parseInt(1),
            };

            // logger.debug("discount wallet logs params "+trip_id);
            // logger.debug(insert_array);
            apimodel
              .insert_wallet_logs(q, insert_array)
              .then(function (detailresults) {
                //console.log('herer024');
                // logger.debug("END 1 update_discount_wallet_logs "+passenger_id+" "+trip_id);

                details.status = 1;
                deferred.resolve(details);
                deferred.makeNodeResolver();
                time_interval = null;
              });
          });
      } else {
        details.status = 0;
        // logger.debug("END 2 update_discount_wallet_logs "+passenger_id+" "+trip_id);
        deferred.resolve(details);
        deferred.makeNodeResolver();
        time_interval = null;
      }
    });
  return deferred.promise;
};

// exports.update_gift_card_logs = function (q, passenger_id, trip_id, promo_code) {
// 	var deferred = q.defer();

// 	var details = {};

// 	var insert_array = {
// 		'passenger_id': parseInt(passenger_id),
// 		'gift_card_number': promo_code,
// 		'status_description': "Used promocode in complete trip",
// 		'status': parseInt(1),
// 		'type': parseInt(1),
// 		'input_data': requestData,
// 		'output_data': responseData,
// 		'created_date': new Date()
// 	}

// 	apimodel.insert_gift_card_logs(q, insert_array).then(function (detailresults) {

// 		details.status = 1;
// 		deferred.resolve(details);
// 		deferred.makeNodeResolver()
// 		time_interval = null;

// 	});
// 	return deferred.promise;
// }

exports.convsecstoformat = function (secs) {
  // try
  // {
  // var hours = secs/3600;
  // hours = hours.toFixed(0);
  // if(hours  < 0)
  // {
  // 	hours =0;
  // }
  // var minutes = (secs -(hours*3600))/60;
  // minutes = minutes.toFixed(0);
  // if(minutes  < 0)
  // {
  // 	minutes =0;
  // }
  // var seconds = (secs -(hours*3600 + minutes*60));
  // seconds = seconds.toFixed(0);
  // if(seconds  < 0)
  // {
  // 	seconds =0;
  // }
  // hours= zeropadding(hours);
  // minutes = zeropadding(minutes);
  // seconds = zeropadding(seconds);

  // if(hours == '00' && hours == '')
  // {
  //   return minutes+":"+seconds;
  // }
  // else
  // {
  //   return hours+":"+minutes+":"+seconds;
  // }
  // }
  // catch(err)
  // {
  //   console.log(err);
  //   return "00:00:00";

  // }

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
};

exports.get_driver_profile = function (appRoot, profile, hostname) {
  try {
    if (fs.existsSync(appRoot + "public/uploads/driver_image/" + profile)) {
      return hostname + "/" + "public/uploads/driver_image/" + profile;
    } else {
      return hostname + "/" + config.NO_IMAGE;
    }
  } catch (ex) {
    //console.log('error',ex);
  }
};

exports.zeropadding = function (a) {
  h = a < 10 ? "0" + a : a;

  return h;
};

exports.getCurrentDate = function (timezone, date_format) {
  return moment.tz(timezone || "UTC").format("YYYY-MM-DD");
};

exports.getStartingDateAndEndingDate = function (timezone) {
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
};

exports.convert_timezone = function (pickup_time) {
  try {
    var current_time = new Date();

    if (current_time.getTimezoneOffset() == "-330")
      pickup_time = pickup_time.getTime() - 9000000;
    else pickup_time = pickup_time.getTime() + 10800000;

    return new Date(pickup_time);
  } catch (err) {
    //console.log(err);
  }
};

exports.convert_date_to_iso = function (pickup_time) {
  try {
    var pickup_time = new Date(pickup_time);

    var current_time = new Date();

    if (current_time.getTimezoneOffset() == "-330")
      pickup_time = pickup_time.getTime() + 9000000;
    else pickup_time = pickup_time.getTime();

    return new Date(pickup_time);
  } catch (err) {
    //console.log(err);
  }
};

exports.calcTimeZone = function (offset) {
  // create Date object for current location
  var d = new Date();

  // convert to msec
  // subtract local time zone offset
  // get UTC time in msec
  var utc = d.getTime() + d.getTimezoneOffset() * 60000;

  // create new Date object for different city
  // using supplied offset
  var nd = new Date(utc + 3600000 * offset);

  var rt_date = dateFormat(new Date(nd.toLocaleString()), "dd/mm/yyyy ");

  return rt_date;
  // return time as a string
  //return "The local time for "+ nd.toLocaleString();
};

exports.GetGoogleMatrixDistance = function (q, input) {
  var deferred = q.defer();

  var details = {};

  var params =
    "origins=" +
    input.pickup_latitude +
    "," +
    input.pickup_longitude +
    "&destinations=" +
    input.drop_latitude +
    "," +
    input.drop_longitude +
    "&key=" +
    global.settings.node_google_key;

  var map_url =
    "https://maps.googleapis.com/maps/api/distancematrix/json?units=metric&" +
    params;

  //console.log(map_url,'----->map url');

  axios
    .get(map_url)
    .then((response) => {
      //console.log(response,'--------->');

      if (response.status == 200) {
        if (
          response.data.rows &&
          typeof response.data.rows[0].elements[0].status != "undefined" &&
          response.data.rows[0].elements[0].status == "OK"
        ) {
          details.status = 1;
          details.google_result = response.data.rows;
          deferred.resolve(details);
          deferred.makeNodeResolver();
        } else {
          details.status = 0;
          deferred.resolve(details);
          deferred.makeNodeResolver();
        }
      } else {
        details.status = 0;
        deferred.resolve(details);
        deferred.makeNodeResolver();
      }

      //console.log(response.data);
    })
    .catch((error) => {
      console.log(error);
      details.status = 0;
      deferred.resolve(details);
      deferred.makeNodeResolver();
    });

  return deferred.promise;
};

exports.update_promocode = function (q, promocode) {
  // logger.debug("Start update_promocode "+promocode)

  var deferred = q.defer();
  var details = {};

  if (promocode != "") {
    apimodel.update_promocode(q, promocode).then(function (promoupdateresults) {
      // logger.debug("END 1 update_promocode "+promocode)

      details.status = 1;
      deferred.resolve(details);
      deferred.makeNodeResolver();
      time_interval = null;
    });
  } else {
    // logger.debug("END 2 update_promocode "+promocode)
    details.status = 0;
    deferred.resolve(details);
    deferred.makeNodeResolver();
    time_interval = null;
  }
  return deferred.promise;
};

exports.update_wallet_used_amount = function (
  q,
  passenger_id,
  wallet_used_amount,
  trip_id
) {
  var deferred = q.defer();
  // logger.debug("Start update_wallet_used_amount "+trip_id)

  var details = {};
  try {
    if (wallet_used_amount != "" && wallet_used_amount != 0) {
      this.update_wallet_logs(
        q,
        passenger_id,
        wallet_used_amount,
        1,
        trip_id,
        4
      ).then(function (walletupdateresults) {
        // logger.debug("END 1 update_wallet_used_amount "+trip_id)

        details.status = 1;
        deferred.resolve(details);
        deferred.makeNodeResolver();
        time_interval = null;
      });
    } else {
      // logger.debug("END 2 update_wallet_used_amount "+trip_id)

      details.status = 0;
      deferred.resolve(details);
      deferred.makeNodeResolver();
      time_interval = null;
    }
  } catch (err) {
    console.log(err);
  }
  return deferred.promise;
};

exports.update_discount_wallet_used_amount = function (
  q,
  passenger_id,
  wallet_used_amount,
  trip_id
) {
  var deferred = q.defer();
  // logger.debug("Start update_discount_wallet_used_amount "+trip_id)

  var details = {};
  try {
    if (wallet_used_amount != "" && wallet_used_amount != 0) {
      // logger.debug("update_discount_wallet_used_amount...");

      this.update_discount_wallet_logs(
        q,
        passenger_id,
        wallet_used_amount,
        1,
        trip_id,
        4
      ).then(function (walletupdateresults) {
        // logger.debug("END 1 update_discount_wallet_used_amount "+trip_id);

        details.status = 1;
        deferred.resolve(details);
        deferred.makeNodeResolver();
        time_interval = null;
      });
    } else {
      // logger.debug("END 2 update_discount_wallet_used_amount "+trip_id);

      details.status = 0;
      deferred.resolve(details);
      deferred.makeNodeResolver();
      time_interval = null;
    }
  } catch (err) {
    console.log(err);
    // logger.debug("ERROR update_discount_wallet_used_amount "+trip_id);
    // logger.debug(err);
  }
  return deferred.promise;
};

exports.update_passenger_pending_amt = function (
  q,
  passenger_id,
  passenger_pending_amt,
  add_amt,
  driver_edit_status,
  trip_id
) {
  var deferred = q.defer();
  var details = {};
  // logger.debug("Start update_passenger_pending_amt "+trip_id)

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

    this.update_wallet_logs(q, passenger_id, update_amt, 0, trip_id, 6).then(
      function (walletupdateresults) {
        // logger.debug("End 1 update_passenger_pending_amt "+trip_id)

        details.status = 1;
        deferred.resolve(details);
        deferred.makeNodeResolver();
        time_interval = null;
      }
    );
  } else {
    // logger.debug("End 2 update_passenger_pending_amt "+trip_id)

    details.status = 0;
    deferred.resolve(details);
    deferred.makeNodeResolver();
    time_interval = null;
  }
  return deferred.promise;
};

exports.update_pending_amt = function (
  q,
  passenger_id,
  pending_amt,
  driver_edit_status,
  trip_id
) {
  var deferred = q.defer();
  // logger.debug("Start update_pending_amt "+trip_id)

  var details = {};

  if (pending_amt > 0 && driver_edit_status == 1) {
    this.update_wallet_logs(q, passenger_id, pending_amt, 1, trip_id, 5).then(
      function (walletupdateresults) {
        details.status = 1;
        // logger.debug("END 1 update_pending_amt "+trip_id)
        deferred.resolve(details);
        deferred.makeNodeResolver();
        time_interval = null;
      }
    );
  } else {
    // logger.debug("END 2 update_pending_amt "+trip_id)
    details.status = 0;
    deferred.resolve(details);
    deferred.makeNodeResolver();
    time_interval = null;
  }
  return deferred.promise;
};

exports.getGifCardDetails = function (q, promocode, gift_card_status) {
  // logger.debug("Start update_wallet_failed_logs")

  var deferred = q.defer();
  let giftCardApiResponse = {};
  if (gift_card_status == 1 && global.settings.gift_card_enable == 1) {
    giftCard
      .getCardBalance(q, { promocode: promocode })
      .then(function (giftCardResponse) {
        try {
          console.log("gift card response", giftCardResponse.data);

          if (giftCardResponse && giftCardResponse.data) {
            let response = giftCardResponse.data;
            console.log("gift card response", response);
            if (response.code == "200" && response.data) {
              if (response.data.remaining_value > 0) {
                giftCardApiResponse.remaining_value =
                  response.data.remaining_value;
                // logger.debug("END 1 update_wallet_failed_logs")
                // logger.debug("giftCardApiResponse");
                // logger.debug(giftCardApiResponse);
                deferred.resolve(giftCardApiResponse);
                deferred.makeNodeResolver();
                message = null;
              } else {
                giftCardApiResponse.remaining_value = 0;
                // logger.debug("END 2 update_wallet_failed_logs")
                deferred.resolve(giftCardApiResponse);
                deferred.makeNodeResolver();
                message = null;
              }
            } else {
              // logger.debug("END 3 update_wallet_failed_logs")
              giftCardApiResponse.remaining_value = 0;
              deferred.resolve(giftCardApiResponse);
              deferred.makeNodeResolver();
              message = null;
            }
          } else {
            // logger.debug("END 4 update_wallet_failed_logs")
            giftCardApiResponse.remaining_value = 0;
            deferred.resolve(giftCardApiResponse);
            deferred.makeNodeResolver();
            message = null;
          }
        } catch (err) {
          console.log("gift card error", err);
          // logger.debug("Gift Card Error");
          // logger.debug(err);
        }
      })
      .catch(function (error) {
        if (error.response) {
          console.log("giftcard api error ", error.response.data);
          // logger.debug("Gift Card Error");
          // logger.debug(err);
        }
        giftCardApiResponse.remaining_value = 0;
        deferred.resolve(giftCardApiResponse);
        deferred.makeNodeResolver();
        message = null;
      });
  } else {
    // logger.debug("END 5 update_wallet_failed_logs")
    giftCardApiResponse.remaining_value = 0;
    deferred.resolve(giftCardApiResponse);
    deferred.makeNodeResolver();
    message = null;
  }

  return deferred.promise;
};

exports.update_wallet_failed_logs = async function (
  q,
  passenger_id,
  add_amt,
  negative,
  trip_id,
  recharge_type,
  requestData
) {
  var deferred = q.defer();
  // logger.debug("Start update_wallet_failed_logs"+passenger_id+" "+trip_id+" "+recharge_type)
  console.log(passenger_id, add_amt, negative, trip_id, recharge_type);
  var details = {};
  let detailresults = await apimodel.get_passenger_details(q, passenger_id);
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
    } catch (err) {
      console.log(err);
      // logger.debug("ERROR")
      // logger.debug(err);
    }

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
      paid_status: parseInt(0),
      requestData: requestData,
    };

    apimodel.insert_wallet_logs(q, insert_array).then(function (detailresults) {
      // logger.debug("END 1 update_wallet_failed_logs")
      details.status = 1;
      deferred.resolve(details);
      deferred.makeNodeResolver();
      time_interval = null;
    });
  } else {
    // logger.debug("END 2 update_wallet_failed_logs")
    details.status = 0;
    deferred.resolve(details);
    deferred.makeNodeResolver();
    time_interval = null;
  }

  return deferred.promise;
};

exports.log = function (method, log) {
  try {
    console.log(method, JSON.stringify(log));
  } catch (err) {
    console.log("error in logger", err);
  }
};

const update_discount_wallet_logs_new = function (
  q,
  passenger_id,
  add_amt,
  negative,
  trip_id,
  recharge_type
) {
  // logger.debug("Start update_discount_wallet_logs "+passenger_id+" "+trip_id);

  var deferred = q.defer();

  var details = {};

  // logger.debug("update_discount_wallet_logs...");
  //console.log('herer021');

  //console.log('passenger_id',passenger_id);

  apimodel
    .get_passenger_details(q, passenger_id)
    .then(function (detailresults) {
      //console.log('detailresults',detailresults.length);

      if (detailresults.length > 0) {
        try {
          var current_wallet_amount = detailresults[0].discount_wallet;
          var update_wallet_amt = 0;
          var additional_amt = 0;

          if (negative == 1) {
            update_wallet_amt = current_wallet_amount - add_amt;
            additional_amt = -add_amt;
          } else {
            update_wallet_amt = current_wallet_amount - add_amt;
            additional_amt = add_amt;
          }

          var updateArray = {
            discount_wallet: parseFloat(update_wallet_amt),
            last_discount_wallet_update: new Date(),
          };
        } catch (err) {
          //console.log(err);
        }
        //console.log('herer022');

        apimodel
          .update_passenger(q, updateArray, passenger_id)
          .then(function (detailresults) {
            //console.log('herer023');

            if (negative == 1) {
              recharge_type = 12;
            } else {
              recharge_type = 13;
            }

            var insert_array = {
              passenger_id: parseInt(passenger_id),
              change_amount: parseFloat(add_amt),
              wallet_amount: parseFloat(update_wallet_amt),
              created_date: new Date(),
              created_by: parseInt(passenger_id),
              recharge_type: parseInt(recharge_type),
              trip_id: parseInt(trip_id),
              discount_wallet_status: parseInt(1),
              paid_status: parseInt(1),
            };

            // logger.debug("discount wallet logs params "+trip_id);
            // logger.debug(insert_array);
            apimodel
              .insert_wallet_logs(q, insert_array)
              .then(function (detailresults) {
                //console.log('herer024');
                // logger.debug("END 1 update_discount_wallet_logs "+passenger_id+" "+trip_id);

                details.status = 1;
                deferred.resolve(details);
                deferred.makeNodeResolver();
                time_interval = null;
              });
          });
      } else {
        details.status = 0;
        // logger.debug("END 2 update_discount_wallet_logs "+passenger_id+" "+trip_id);
        deferred.resolve(details);
        deferred.makeNodeResolver();
        time_interval = null;
      }
    });
  return deferred.promise;
};

/* Sasidharan April 05 2024 */
exports.getPassengerId = async (passengerId) => {
  let passengerInfo = await apimodel.getPassengerCustomerId(passengerId);
  if (passengerInfo) {
    let customerTapPaymentId = passengerInfo.customerTapPaymentId
      ? passengerInfo.customerTapPaymentId
      : "";
    if (!customerTapPaymentId) {
      let response = await tapPaymentGateway.createCustomer(passengerInfo);
      if (!response || Object.keys(response).length <= 0) {
        return {};
      }
      customerTapPaymentId = response.id;
      await apimodel.updatePassenger(passengerId, {
        customerTapPaymentId: customerTapPaymentId,
      });
      passengerInfo["customerTapPaymentId"] = customerTapPaymentId;
    }
    return passengerInfo;
  }
  return {};
};

exports.oldVersion_getPassengerId = function (passengerId) {
  const q = require("q");
  const deferred = q.defer();
  console.error("callng");
  apimodel
    .getPassengerCustomerId(passengerId)
    .then((passengerInfo) => {
      if (!passengerInfo) return deferred.resolve({});
      console.error("passengerInfo passengerInfo : ", passengerInfo);
      // If Tap ID exists, return immediately
      if (passengerInfo.customerTapPaymentId) {
        console.error("calling rewtwerw");
        return deferred.resolve(passengerInfo);
      }

      console.error("Creating Tap customer for passenger:", passengerInfo);

      // Create Tap customer if not exists
      tapPaymentGateway
        .createCustomer(passengerInfo)
        .then((response) => {
          if (!response || !response.id) return deferred.resolve({});

          const customerTapPaymentId = response.id;

          // Save Tap customer ID in DB
          apimodel
            .updatePassenger(passengerId, { customerTapPaymentId })
            .then(() => {
              passengerInfo.customerTapPaymentId = customerTapPaymentId;
              deferred.resolve(passengerInfo);
            })
            .catch((err) => {
              console.error("Error updating passenger with Tap ID:", err);
              deferred.resolve({});
            });
        })
        .catch((err) => {
          console.error("Error creating Tap customer:", err);
          deferred.resolve({});
        });
    })
    .catch((err) => {
      console.error("Error fetching passenger info:", err);
      deferred.resolve({});
    });

  return deferred.promise;
};

//ramya may15 2026 - create customer in hesabe
exports.getHesabeCustomerPaymentId = function (passengerId) {
  const q = require("q");
  const deferred = q.defer();
  console.error("callng");
  apimodel
    .getHesabeCustomerId(passengerId)
    .then((passengerInfo) => {
      if (!passengerInfo) return deferred.resolve({});
      console.error("passengerInfo passengerInfo : ", passengerInfo);
      // If hesabe ID exists, return immediately
      if (passengerInfo.hesabeCustomerPaymentId) {
        console.error("calling rewtwerw");
        return deferred.resolve(passengerInfo);
      }

      console.error("Creating hesabe customer for passenger:", passengerInfo);

      // Create hesabe customer if not exists
      hesabe
        .createHesabeCustomer(passengerInfo)
        .then((response) => {
          console.error("response in the shared : ", response);
          if (!response || !response.customer_id) return deferred.resolve({});

          const hesabeCustomerPaymentId = response.customer_id;

          // Save Tap customer ID in DB
          apimodel
            .updatePassenger(passengerId, { hesabeCustomerPaymentId })
            .then(() => {
              passengerInfo.hesabeCustomerPaymentId = hesabeCustomerPaymentId;
              deferred.resolve(passengerInfo);
            })
            .catch((err) => {
              console.error("Error updating passenger with Tap ID:", err);
              deferred.resolve({});
            });
        })
        .catch((err) => {
          console.error("Error creating Tap customer:", err);
          deferred.resolve({});
        });
    })
    .catch((err) => {
      console.error("Error fetching passenger info:", err);
      deferred.resolve({});
    });

  return deferred.promise;
};

// Sasidharan Jan 17 2025
exports.isCurrentDateBetween = (startDate, endDate) => {
  const currentDate = new Date();
  const start = new Date(startDate);
  const end = new Date(endDate);
  return currentDate >= start && currentDate <= end;
};
