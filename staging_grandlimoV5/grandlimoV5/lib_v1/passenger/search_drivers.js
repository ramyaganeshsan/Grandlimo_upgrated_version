var apimodel = require("../../models/passapimodel_v1");
var apimodel_old = require("../../models/apimodel.js");
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
//var i18n = require('i18n');
var t = require("../../config/table_config.json");
var uniqid = require("uniqid");
var randomstring = require("randomstring");
var dateformatter = require("date-format-php");
var urlencode = require("urlencode");
var common = require("../../lib_v1/common.js");
var giftCard = require("../../lib_v1/giftcard.js");
var mime = require("mime");
var urlencode = require("urlencode");
var moment = require("moment-timezone");

//25 May 2021
var passcommon = require("../../lib_v1/passenger/common");
//25 May 2021

/* Sasidharan April 30 2024 */
const {
  getMyCards,
  checkIfUserHasACard,
} = require("../../utils/tapPaymentGateway.js");

exports.gift_card_balance = function (q, req) {
  console.log("gift_card_balance");

  let inputParams = req.body;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  var hostname = global.settings.base_url;
  var appRoot = global.settings.docroot;

  var validate_error = ValidateGiftCardBalance(q, inputParams);

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
    try {
      getGifCardDetails(q, inputParams.promocode, 1).then(function (
        giftCardApiResponse
      ) {
        message.message = req.__("success");
        message.detail = giftCardApiResponse;
        message.status = 1;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        message = null;
      });
    } catch (err) {
      console.log(err);
    }
  }

  return deferred.promise;
};

exports.cancel_gift_redemption = function (q, req) {
  console.log("cancel_gift_redemption");

  let inputParams = req.body;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  var hostname = global.settings.base_url;
  var appRoot = global.settings.docroot;

  var validate_error = ValidateCancelGiftRedemption(q, inputParams);

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
    try {
      cancelGiftRedemption(q, inputParams.transaction_id, 1).then(function (
        giftCardApiResponse
      ) {
        message.message = req.__("success");
        message.detail = giftCardApiResponse;
        message.status = 1;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        message = null;
      });
    } catch (err) {
      message.message = req.__("failed");
      message.detail = err;
      message.status = -1;
      deferred.resolve(message);
      deferred.makeNodeResolver();
      message = null;
    }
  }

  return deferred.promise;
};

function getGifCardDetails(q, promocode, gift_card_status) {
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
}

function cancelGiftRedemption(q, transaction_id, gift_card_status) {
  var deferred = q.defer();
  let giftCardApiResponse = {};
  console.log("cancelGiftRedemption");
  if (gift_card_status == 1 && global.settings.gift_card_enable == 1) {
    giftCard
      .cancelTransaction(q, { transaction_id: transaction_id })
      .then(function (giftCardResponse) {
        try {
          console.log("here");
          //console.log("gift card response",giftCardResponse);
          deferred.resolve(giftCardResponse.data);
          deferred.makeNodeResolver();
          message = null;
        } catch (err) {
          console.log("here2", err);

          deferred.resolve(err);
          deferred.makeNodeResolver();
          message = null;
        }
      })
      .catch(function (error) {
        deferred.resolve(error);
        deferred.makeNodeResolver();
        message = null;
      });
  } else {
    deferred.resolve("empty");
    deferred.makeNodeResolver();
    message = null;
  }

  return deferred.promise;
}

exports.nearestdriver_list = function (q, req) {
  //let inputParams = JSON.parse(req.rawBody);
  let inputParams = req.body;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  var hostname = global.settings.base_url;

  var validate_error = ValidateNearestDrivers(q, inputParams);

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
    var passenger_id = inputParams.passenger_id;
    var latitude = inputParams.latitude;
    var longitude = inputParams.longitude;
    var motor_model = inputParams.motor_model;

    apimodel
      .passenger_current_trips(q, passenger_id)
      .then(function (current_trips) {
        if (current_trips.length > 0) {
          message.message = req.__("success");
          message.detail = current_trips[0];
          message.current_time = new Date();
          message.status = 4;
          deferred.resolve(message);
          deferred.makeNodeResolver();
          message = null;
        } else {
          apimodel
            .nearest_drivers(q, motor_model, latitude, longitude)
            .then(function (driver_list) {
              var driver_details = [];
              //console.log('driver_list',driver_list);

              var time_range = getStartingDateAndEndingDate(
                global.settings.timezone
              );
              if (driver_list.length > 0) {
                var i = 0;
                driver_list.forEach(function (element) {
                  try {
                    var driver_id = element._id.driver_id;

                    var booking_limit = 0;
                    if (element._id.booking_limit != undefined)
                      booking_limit = element._id.booking_limit;
                    //apimodel.currentday_booking_count(q,driver_id,time_range).then(function(count_results)
                    //{
                    // if(count_results.length > 0)
                    // {
                    // 	if(count_results[0].trip_count < booking_limit )
                    // 	{
                    // 		driver_details[i] = element._id;
                    // 		i++;
                    // 	}
                    // }
                    // else
                    // {
                    driver_details[i] = element._id;
                    i++;
                    //}
                    //});
                  } catch (err) {
                    console.log(err);
                  }
                });

                //console.log('driver_details',driver_details);

                apimodel
                  .model_fare_details(q, motor_model)
                  .then(function (model_details) {
                    var fare_details = [];
                    if (model_details.length > 0) {
                      fare_details = model_details[0];
                      fare_details.fare_calculation_type =
                        global.settings.fare_calculation_type;
                    }
                    message.message = req.__("success");
                    message.detail = driver_details;
                    message.fare_details = fare_details;
                    message.driver_around_miles = global.settings.default_mile;
                    message.metric = global.settings.default_mile;
                    message.status = 1;
                    var current_time = new Date();
                    message.current_time = current_time.format("Y-m-d H:i:s");
                    deferred.resolve(message);
                    deferred.makeNodeResolver();
                    message = null;
                  });
              } else {
                message.message = req.__("no_vehicle_msg");
                message.status = -1;
                var current_time = new Date();
                message.current_time = current_time.format("Y-m-d H:i:s");
                deferred.resolve(message);
                deferred.makeNodeResolver();
                message = null;
              }
            });
        }
      });
  }

  return deferred.promise;
};

exports.savebooking = function (q, req) {
  //let inputParams = JSON.parse(req.rawBody);
  let inputParams = req.body;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };
  var hostname = global.settings.base_url;

  var validate_error = ValidateSavebooking(q, inputParams);

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
    var passenger_id = inputParams.passenger_id;
    var latitude = inputParams.latitude;
    var longitude = inputParams.longitude;
    var motor_model = inputParams.motor_model;
    var promocode = inputParams.promo_code;
    var phone = inputParams.phone;
    var now_after = inputParams.now_after;
    var pickup_time = urlencode.decode(inputParams.pickup_time);
    var pickupTime = inputParams.pickup_time;
    // //ramya
    var pickupDate = new Date(pickupTime);
    var createdDate = new Date();

    console.error("pickupDate : ", pickupDate);
    console.error("createdDate : ", createdDate);
    console.error("pickupTime : ", pickupTime);
    console.error("pickup_time : ", pickup_time);

    // console.error("pickupDate.getTime() : ", pickupDate.getTime());
    // console.error("createdDate.getTime() : ", createdDate.getTime());

    // if (isNaN(pickupDate.getTime())) {
    //   message.message = req.__("previous_time");
    //   message.status = -1;
    //   deferred.resolve(message);
    //   deferred.makeNodeResolver();
    //   return deferred.promise;
    // }

    // // Check if pickup time is before created date/time ramya
    // if (pickupDate.getTime() < createdDate.getTime()) {
    //   message.message = req.__("previous_time");
    //   message.status = -1;
    //   deferred.resolve(message);
    //   deferred.makeNodeResolver();
    //   return deferred.promise;
    // }

    // // ---------- NOW / AFTER AUTO-DETECTION (AUTHORITATIVE) ---------- ramya
    // if (parseInt(now_after) === 0) {
    //   const THIRTY_MINUTES_MS = 30 * 60 * 1000;

    //   const timeDiff = pickupDate.getTime() - createdDate.getTime();

    //   // If pickup time is 30 minutes or more in the future
    //   if (timeDiff >= THIRTY_MINUTES_MS) {
    //     inputParams.now_after = 1;
    //     now_after = 1;

    //     console.error(
    //       "[AUTO NOW_AFTER] Pickup is > 30 mins ahead. Overriding now_after = 1"
    //     );
    //   }
    // }
    // ---------------------------------------------------------------

    /* Sasidharan oct 04 2022 */
    inputParams.surge_display_fare = "";

    /* Sasidharan aug 6 2022 */
    // if(motor_model && parseInt(motor_model) == 1)
    // {
    // 	message.message = req.__('Grand is not available');
    // 	message.status = -1;
    // 	deferred.resolve(message);
    // 	deferred.makeNodeResolver()
    // 	message = null;
    // }

    // 03 Feb 2020
    var pickup_address =
      typeof inputParams.pickupplace !== "undefined"
        ? inputParams.pickupplace
        : "";
    var drop_address =
      typeof inputParams.dropplace !== "undefined" ? inputParams.dropplace : "";
    var surge_price_percentage =
      typeof inputParams.surge_price_percentage !== "undefined"
        ? inputParams.surge_price_percentage
        : 0;
    var surge_price_status = 0;
    if (surge_price_percentage != 0) {
      surge_price_status = 1;
    }
    inputParams.surge_price_status = surge_price_status;
    inputParams.surge_price_percentage = surge_price_percentage;
    // 03 Feb 2020

    /* Sasidharan apr 29 - 2022 */
    inputParams.applied_corporate_promocode = 0;

    /* Sasidharan April 30 2024 added async */
    apimodel
      .passenger_profile_by_id(q, passenger_id)
      .then(async function (profile_results) {
        if (profile_results.length > 0) {
          var user_status = profile_results[0].user_status;
          var wallet_amount = profile_results[0].wallet_amount;
          var wallet_block = profile_results[0].wallet_block;
          var vip_user = profile_results[0].vip_user;
          var phone = profile_results[0].phone;
          var country_code = profile_results[0].country_code;
          var admin_notes = profile_results[0].notes;

          // if (wallet_amount < 0 && vip_user != 1) {
          //   message.message =
          //     "Sorry, You have a pending amount. \n Please recharge your wallet and try again. \n Thank you.";
          //   message.status = 3;
          //   deferred.resolve(message);
          //   deferred.makeNodeResolver();
          //   return deferred.promise;
          // }  // commanded ramya sept 17 2025

          // var calculatedEstimateFare =
          //   inputParams.approx_fare && inputParams.approx_fare != ""
          //     ? inputParams.approx_fare
          //     : 0;
          // if (
          //   +parseFloat(calculatedEstimateFare).toFixed(2) >
          //     +parseFloat(wallet_amount).toFixed(2) &&
          //   !vip_user
          // ) {
          //   let name = profile_results[0]["name"];
          //   let requiredWalletBalance =
          //     +parseFloat(calculatedEstimateFare).toFixed(2) -
          //     parseFloat(wallet_amount).toFixed(2);
          //   requiredWalletBalance =
          //     requiredWalletBalance > 0
          //       ? +parseFloat(requiredWalletBalance).toFixed(2)
          //       : 0;
          //   let amountStr = `${requiredWalletBalance} ${global.settings.currency_format}`;
          //   let walletBalanceMessage = req.__("wallet_recharge_message");
          //   walletBalanceMessage = walletBalanceMessage.replace(
          //     "##PASSENGER##",
          //     name
          //   );
          //   walletBalanceMessage = walletBalanceMessage.replace(
          //     "##WALLET_AMOUNT##",
          //     amountStr
          //   );

          //   message.requiredWalletBalance = requiredWalletBalance;
          //   message.walletBalanceMessage = walletBalanceMessage;
          //   message.status = 10;
          //   deferred.resolve(message);
          //   deferred.makeNodeResolver();
          //   return deferred.promise;
          // }

          if (user_status == "A") {
            validateGiftCard(q, promocode).then(function (giftCardResponse) {
              console.log("giftCardResponse", giftCardResponse);

              /* Sasidharan june 20 2022 */
              check_promocode(
                q,
                promocode,
                phone,
                passenger_id,
                giftCardResponse,
                profile_results[0]
              ).then(async function (checkpromo_results) {
                //console.log("savee001");
                if (giftCardResponse == 0) {
                  message.message = req.__("invalid_giftcard");
                  message.status = 3;
                  deferred.resolve(message);
                  deferred.makeNodeResolver();
                  message = null;
                } else if (checkpromo_results.status == 3) {
                  message.message = req.__("invalid_promocode");
                  message.status = 3;
                  deferred.resolve(message);
                  deferred.makeNodeResolver();
                  message = null;
                } else if (checkpromo_results.status == 4) {
                  message.message = req.__("promo_code_expired");
                  message.status = 3;
                  deferred.resolve(message);
                  deferred.makeNodeResolver();
                  message = null;
                } else if (checkpromo_results.status == 2) {
                  message.message = req.__("promo_code_limit_exceed");
                  message.status = 3;
                  deferred.resolve(message);
                  deferred.makeNodeResolver();
                  message = null;
                } else if (checkpromo_results.status == 0) {
                  message.message = req.__("invalid_promocode");
                  message.status = 3;
                  deferred.resolve(message);
                  deferred.makeNodeResolver();
                  message = null;
                } else {
                  //console.log("savee002");

                  /* Sasidharan apr 16 - 2022 */
                  let checkWalletBalance = true;

                  /* Sasidharan June 12 2024 */
                  let skipCard = 0;
                  if (
                    typeof checkpromo_results.skipCard != "undefined" &&
                    checkpromo_results.skipCard == 1
                  ) {
                    skipCard = 1;
                  }

                  if (
                    typeof checkpromo_results.corporate_promocode != "" &&
                    checkpromo_results.corporate_promocode == 1
                  ) {
                    checkWalletBalance = false;

                    /* Sasidharan apr 29 - 2022 */
                    inputParams.applied_corporate_promocode = 1;
                  }

                  let customerTapPaymentId =
                    profile_results[0].customerTapPaymentId;
                  /* Sasidharan Aug 5 2024 added wallet condition comment the card required feature.  */
                  /* Sasidharan April 30 2024 Check if card is exists */
                  // let customerTapPaymentId =
                  //   profile_results[0].customerTapPaymentId;
                  /* Sasidharan May 22 2024 added condition. */

                  if (
                    (typeof inputParams.proceedWithoutCard == "undefined" ||
                      !+inputParams.proceedWithoutCard) &&
                    !inputParams.applied_corporate_promocode &&
                    !skipCard
                  ) {
                    if (global.settings.isCardDetailsMandatory) {
                      if (!customerTapPaymentId) {
                        // message.message =
                        //   "As per our recent policy change, we are now requesting credit card details for trip reservations. This step ensures smoother booking processes and enhances security measures. Please provide the following credit card details. For more information, please contact us.";
                        message.message = req.__("tap_card_required_message");
                        message.status = 5;
                        deferred.resolve(message);
                        deferred.makeNodeResolver();
                        message = null;
                        return deferred.promise;
                      } else {
                        let cardDetails = await getMyCards(
                          customerTapPaymentId,
                          0,
                          2
                        );
                        if (!cardDetails || !cardDetails.data) {
                          cardDetails = [];
                        } else {
                          cardDetails = cardDetails.data;
                        }
                        if (cardDetails.length <= 0) {
                          // message.message =
                          //   "As per our recent policy change, we are now requesting credit card details for trip reservations. This step ensures smoother booking processes and enhances security measures. Please provide the following credit card details. For more information, please contact us.";
                          message.message = req.__("tap_card_required_message");
                          message.status = 5;
                          deferred.resolve(message);
                          deferred.makeNodeResolver();
                          message = null;
                          return deferred.promise;
                        }
                      }
                    }
                  }

                  /* Sasidharan Aug 5 2024 */
                  /* Sasidharan sep 16 2024 */
                  let premiumCustomer = profile_results[0].premiumCustomer;
                  let hasCard = profile_results[0].hasCard;
                  let isCustomerHasCard = false;
                  if (
                    customerTapPaymentId != "" &&
                    !premiumCustomer &&
                    !hasCard &&
                    wallet_amount < global.settings.wallet_positive_limit
                  ) {
                    isCustomerHasCard = await checkIfUserHasACard(
                      customerTapPaymentId
                    );
                    if (isCustomerHasCard) {
                      await apimodel_old.updateCardStatus(customerTapPaymentId);
                    }
                  }

                  try {
                    if (
                      wallet_amount <= global.settings.wallet_negative_limit &&
                      vip_user != 1 &&
                      !global.settings.disableWalletLimitCheck &&
                      checkWalletBalance
                      // &&
                      // !isCustomerHasCard &&
                      // !premiumCustomer
                    ) {
                      message.message = req.__("wallet_limit_exceeded");
                      message.status = 3;
                      deferred.resolve(message);
                      deferred.makeNodeResolver();
                      message = null;
                    } else if (
                      vip_user == 1 &&
                      wallet_amount <= global.settings.wallet_advance_limit &&
                      !global.settings.disableWalletLimitCheck &&
                      checkWalletBalance
                      // &&
                      // !isCustomerHasCard &&
                      // !premiumCustomer
                    ) {
                      message.message = req.__("wallet_limit_exceeded");
                      message.status = 3;
                      deferred.resolve(message);
                      deferred.makeNodeResolver();
                      message = null;
                    } else {
                      //console.log("savee003");

                      apimodel
                        .check_passenger_trips(q, passenger_id)
                        .then(function (checktrip_results) {
                          if (checktrip_results.length > 0) {
                            //console.log("savee005");

                            message.message = req.__("passenger_in_journey");
                            message.status = 3;
                            deferred.resolve(message);
                            deferred.makeNodeResolver();
                            message = null;
                          } else {
                            //console.log("savee006");

                            nearest_drivers_list(
                              q,
                              motor_model,
                              latitude,
                              longitude
                            ).then(function (driver_results) {
                              //console.log('driver_results123',driver_results);
                              //console.log("savee007");
                              //26 feb 2021
                              //try {

                              var total_drivers = 0;
                              var surge_details = [];
                              if (
                                !(
                                  inputParams.app_ver == "2.7.0" ||
                                  inputParams.app_ver == "5.7"
                                )
                              ) {
                                console.log("API surge price calculation....");

                                apimodel
                                  .model_fare_details(q, motor_model)
                                  .then(function (model_details) {
                                    //console.log('yes',model_details);
                                    if (model_details.length > 0) {
                                      try {
                                        surge_details = model_details[0];
                                        total_drivers =
                                          surge_details.total_drivers;
                                        console.log(
                                          "total_drivers",
                                          total_drivers
                                        );
                                        console.log(
                                          "surge_details",
                                          surge_details
                                        );
                                        if (
                                          surge_details.surge_pricing_status ==
                                          "A"
                                        ) {
                                          var surge_pricing_status = 1;
                                        } else {
                                          var surge_pricing_status = 0;
                                        }
                                        if (
                                          driver_results &&
                                          driver_results.driver_details &&
                                          driver_results.driver_details.length >
                                            0
                                        ) {
                                          var total_drivers =
                                            surge_details.total_drivers;
                                          var free_drivers =
                                            driver_results.driver_details
                                              .length;
                                        } else {
                                          var total_drivers =
                                            surge_details.total_drivers;
                                          var free_drivers = 0;
                                        }
                                        //var free_drivers = 3;

                                        var free_drivers_percentage =
                                          (parseInt(free_drivers) /
                                            parseInt(total_drivers)) *
                                          100;
                                        var surge_pricing_interval =
                                          surge_details.surge_pricing_interval;

                                        var percentage_arr = [];
                                        surge_pricing_interval.forEach(
                                          function (curr) {
                                            percentage_arr.push(curr.from);
                                          }
                                        );

                                        var applied_percentage = closest(
                                          percentage_arr,
                                          free_drivers_percentage
                                        );
                                        console.log(
                                          "savebooking_applied_percentage",
                                          applied_percentage
                                        );
                                        var surge_fare =
                                          (surge_display_fare = 0);
                                        surge_pricing_interval.forEach(
                                          function (curr) {
                                            if (
                                              parseFloat(curr.from) ==
                                              parseFloat(applied_percentage)
                                            ) {
                                              surge_fare = curr.fare;
                                              surge_display_fare =
                                                curr.display_fare;

                                              /* Sasidharan oct 04 2022 add inputParams. before the surge_display_fare */
                                              // surge_display_fare = curr.display_fare;
                                              inputParams.surge_display_fare =
                                                curr.display_fare;
                                              console.log(
                                                "surge_display_fare in loop",
                                                surge_display_fare
                                              );
                                            }
                                          }
                                        );
                                        console.log(
                                          "surge_passenger id",
                                          passenger_id
                                        );
                                        console.log(
                                          "free_drivers",
                                          free_drivers
                                        );
                                        console.log(
                                          "total_drivers",
                                          total_drivers
                                        );
                                        console.log(
                                          "free_drivers_percentage",
                                          free_drivers_percentage
                                        );

                                        /*if(free_drivers == 0) {
													inputParams.surge_price_status = 0;
													inputParams.surge_price_percentage = 0;
													surge_price_percentage = 0;
													} else {
													inputParams.surge_price_status = surge_pricing_status;
													inputParams.surge_price_percentage = surge_fare;
													surge_price_percentage = surge_fare;
													}*/

                                        inputParams.surge_price_status =
                                          surge_pricing_status;
                                        inputParams.surge_price_percentage =
                                          surge_fare;
                                        surge_price_percentage = surge_fare;

                                        /* Sasidharan nov 15 2022 */
                                        if (
                                          inputParams.applied_corporate_promocode !=
                                          0
                                        ) {
                                          inputParams.surge_price_status = 0;
                                          inputParams.surge_price_percentage = 0;
                                          inputParams.surge_display_fare = "-";
                                          surge_price_percentage = 0;
                                        }

                                        /* Sasidharan Feb 06 2023 */
                                        let surgePriceToday =
                                          global.settings.surge_on_week_days;
                                        const weekday = [
                                          "Sunday",
                                          "Monday",
                                          "Tuesday",
                                          "Wednesday",
                                          "Thursday",
                                          "Friday",
                                          "Saturday",
                                        ];
                                        const currentDate = new Date(
                                          pickup_time
                                        );
                                        let day = weekday[currentDate.getDay()];
                                        let surgePriceStatus =
                                          surgePriceToday[day];
                                        if (surgePriceStatus == 0) {
                                          inputParams.surge_price_status = 0;
                                          inputParams.surge_price_percentage = 0;
                                          inputParams.surge_display_fare = "-";
                                          surge_price_percentage = 0;
                                        }
                                      } catch (error) {
                                        console.log(
                                          "surcharge calculation..",
                                          error
                                        );
                                      }
                                    }
                                  });
                              } else {
                                console.log("APP surge price calculation....");
                              }

                              console.error("surge_details : ".surge_details);

                              //console.log('inputParams',inputParams);
                              //26 feb 2021

                              try {
                                if (driver_results.status == 1) {
                                  var driver_details =
                                    driver_results.driver_details;
                                  inputParams.driver_id =
                                    driver_details[0].driver_id;
                                  inputParams.taxi_id =
                                    driver_details[0].taxi_id;
                                  inputParams.company_id =
                                    driver_details[0].company_id;
                                } else {
                                  inputParams.driver_id = parseInt(0);
                                  inputParams.taxi_id = parseInt(0);
                                  inputParams.company_id = parseInt(0);
                                }
                                if (
                                  typeof inputParams.airport_flight_number ==
                                    "undefined" ||
                                  inputParams.airport_flight_number == ""
                                ) {
                                  inputParams.airport_flight_number = "";
                                } else {
                                  inputParams.airport_flight_number =
                                    inputParams.airport_flight_number;
                                }
                                if (
                                  typeof inputParams.sign_plate ==
                                    "undefined" ||
                                  inputParams.sign_plate == ""
                                ) {
                                  inputParams.sign_plate = "";
                                } else {
                                  inputParams.sign_plate =
                                    inputParams.sign_plate;
                                }
                                if (
                                  typeof inputParams.max_luggage ==
                                    "undefined" ||
                                  inputParams.max_luggage == ""
                                ) {
                                  inputParams.max_luggage = "";
                                } else {
                                  inputParams.max_luggage =
                                    inputParams.max_luggage;
                                }

                                inputParams.pickup_latitude =
                                  inputParams.latitude;
                                inputParams.pickup_longitude =
                                  inputParams.longitude;
                                inputParams.no_passengers = 0;
                                //inputParams.max_luggage  = 0 ;
                                //inputParams.airport_flight_number  = '' ;
                                inputParams.airport_flight_time = "";
                                inputParams.airport_notes = "";
                                //inputParams.approx_distance = 0;
                                //inputParams.approx_fare = 0;
                                inputParams.distance_away = 0;
                                //inputParams.distance = 0;
                                inputParams.pickupdrop = "";
                                inputParams.fixedprice = "";
                                inputParams.passenger_admin_notes = admin_notes;

                                if (
                                  inputParams.approx_fare &&
                                  inputParams.approx_fare != ""
                                ) {
                                  inputParams.approx_fare =
                                    inputParams.approx_fare;
                                } else {
                                  inputParams.approx_fare = 0;
                                }

                                if (
                                  inputParams.distance &&
                                  inputParams.distance != ""
                                ) {
                                  inputParams.distance = inputParams.distance;
                                } else {
                                  inputParams.distance = 0;
                                }

                                if (giftCardResponse == 1) {
                                  inputParams.gift_card_status = 1;
                                } else {
                                  inputParams.gift_card_status = 0;
                                }

                                var driver_count = driver_results.length;
                                var notification_time =
                                  global.settings.notification_settings;
                                var total_notification_time =
                                  parseInt(notification_time) + parseInt(25);
                                //console.log("savee008");
                              } catch (err) {
                                console.log(err);
                              }

                              savebooking_entry(q, inputParams).then(function (
                                booking_results
                              ) {
                                //console.log("savee009",booking_results);

                                /* Sasidharan Feb 08 2023 */
                                let surgePriceToday =
                                  global.settings.surge_on_week_days;
                                const weekday = [
                                  "Sunday",
                                  "Monday",
                                  "Tuesday",
                                  "Wednesday",
                                  "Thursday",
                                  "Friday",
                                  "Saturday",
                                ];
                                const currentDate = new Date(pickup_time);
                                let day = weekday[currentDate.getDay()];
                                let surgePriceStatus = surgePriceToday[day];
                                if (surgePriceStatus == 0) {
                                  surge_price_percentage = 0;
                                }

                                if (
                                  booking_results &&
                                  booking_results.trip_id
                                ) {
                                  console.log(
                                    "savebooking-trip_id",
                                    booking_results.trip_id
                                  );
                                }
                                if (
                                  now_after == 0 &&
                                  booking_results.status == 1
                                ) {
                                  //console.log("savee010",driver_results.status);
                                  console.log(
                                    "exist trip driver",
                                    parseInt(inputParams.driver_id)
                                  );
                                  apimodel
                                    .check_trip_request_exists(
                                      q,
                                      parseInt(inputParams.driver_id)
                                    )
                                    .then(function (exist_trip_id) {
                                      console.log(
                                        "exist_trip_id" +
                                          booking_results.trip_id,
                                        exist_trip_id.length
                                      );

                                      /* Sasidharan Aug 13 2024 */
                                      exist_trip_id = [];

                                      if (
                                        driver_results.status == 1 &&
                                        exist_trip_id.length == 0
                                      ) {
                                        //if (driver_results.status == 1) {

                                        apimodel
                                          .get_auto_id(
                                            q,
                                            t.MDB_DRIVER_REQUEST_DETAILS
                                          )
                                          .then(function (autoid_results) {
                                            //console.log("savee0101",autoid_results);

                                            if (autoid_results.length > 0) {
                                              try {
                                                var inc_id =
                                                  autoid_results[0]._id + 1;
                                                var insert_array = {
                                                  _id: parseInt(inc_id),
                                                  trip_id:
                                                    booking_results.trip_id,
                                                  available_drivers: parseInt(
                                                    inputParams.driver_id
                                                  ),
                                                  total_drivers: parseInt(
                                                    inputParams.driver_id
                                                  ),
                                                  selected_driver: parseInt(
                                                    inputParams.driver_id
                                                  ),
                                                  status: 0,
                                                  rejected_timeout_drivers:
                                                    null,
                                                  createdate: new Date(),
                                                };

                                                //driver emit
                                                //                           	common.trip_notification(q,booking_results.trip_id).then(function(tripresults){

                                                //                           		var status = tripresults.status;
                                                // 	console.log('tripresults status',status);

                                                // if(status == 1)
                                                // 	{
                                                // 		var details = checkresults.details;
                                                // 		message.message = req.__('api_request_confirmed_passenger');
                                                // 		message.status = 5;
                                                // 		message.details = details;

                                                // 		var socket_driver_id = 'D-'+inputParams.driver_id;

                                                // 		global.socketobj[socket_driver_id].emit("location_update_res",message);
                                                //common.emitLocDriver(socket_driver_id,message)

                                                // 	} else {
                                                // 		console.log("Save Booking driver emit...else");
                                                // 	}
                                                //                           		});

                                                var detail = {
                                                  passenger_tripid: parseInt(
                                                    booking_results.trip_id
                                                  ),
                                                  notification_time:
                                                    notification_time,
                                                  total_request_time:
                                                    total_notification_time,
                                                  credit_card_status:
                                                    global.settings
                                                      .skip_credit_card,
                                                  model_id:
                                                    parseInt(motor_model),
                                                  pickup_address:
                                                    pickup_address,
                                                  drop_address: drop_address,
                                                  approx_fare: parseFloat(
                                                    inputParams.approx_fare
                                                  ).toFixed(2),
                                                  surge_price_percentage:
                                                    parseFloat(
                                                      surge_price_percentage
                                                    ),
                                                  exists_flag: 0,
                                                };

                                                common
                                                  .generate_static_maps(
                                                    q,
                                                    booking_results.trip_id
                                                  )
                                                  .then(function (
                                                    checkresults
                                                  ) {});

                                                apimodel
                                                  .insert_request_details(
                                                    q,
                                                    insert_array
                                                  )

                                                  .then(function (
                                                    insert_results
                                                  ) {
                                                    common.emitDispatcher(
                                                      req.io
                                                    );

                                                    message.message = req.__(
                                                      "api_request_confirmed_passenger"
                                                    );
                                                    message.status = 1;
                                                    message.travel_msg = req.__(
                                                      "dispatcher_confirmed"
                                                    );
                                                    message.detail = detail;
                                                    deferred.resolve(message);
                                                    deferred.makeNodeResolver();
                                                    message = null;
                                                  });
                                              } catch (err) {
                                                console.log(err);
                                              }
                                            }
                                          });
                                      } else {
                                        try {
                                          var replace_array = {
                                            sitename: global.settings.app_name,
                                          };

                                          pickup_time = new Date(pickup_time);

                                          var detail = {
                                            passenger_tripid:
                                              booking_results.trip_id,
                                            exists_flag: 0,
                                            pickup_address: pickup_address,
                                            drop_address: drop_address,
                                            approx_fare: parseFloat(
                                              inputParams.approx_fare
                                            ).toFixed(2),
                                            surge_price_percentage: parseFloat(
                                              surge_price_percentage
                                            ),
                                            passenger_pickup_time:
                                              pickup_time.format(
                                                "Y-m-d h:i:s A"
                                              ),
                                          };
                                          var confirm_flag = 0;
                                          var passenger_phone =
                                            country_code + phone;
                                          var msgtxt = req.__(
                                            "api_request_disapatcher"
                                          );

                                          apimodel
                                            .check_passenger_in_book_now(
                                              q,
                                              passenger_id,
                                              booking_results.trip_id
                                            )
                                            .then(function (nowresults) {
                                              console.error(
                                                "nowresults : ",
                                                nowresults
                                              );

                                              if (nowresults.length > 0) {
                                                var confirm_flag =
                                                  nowresults[0].confirm_flag;
                                                if (confirm_flag == 1) {
                                                  detail.exists_flag =
                                                    parseInt(2);
                                                } else {
                                                  msgtxt =
                                                    req.__("nxt_no_driver");
                                                  detail.exists_flag =
                                                    parseInt(1);
                                                }
                                              }

                                              common.emitDispatcher(req.io);

                                              common
                                                .send_sms(
                                                  q,
                                                  passenger_phone,
                                                  21,
                                                  replace_array
                                                )
                                                .then(function (checkresults) {
                                                  message.message = msgtxt;
                                                  message.detail = detail;
                                                  message.travel_msg =
                                                    req.__(
                                                      "await_confirmation"
                                                    );
                                                  message.status = 7;
                                                  deferred.resolve(message);
                                                  deferred.makeNodeResolver();
                                                  message = null;
                                                });
                                            });
                                        } catch (err) {
                                          console.error(err);
                                        }
                                      }
                                    });
                                } else if (now_after == 1) {
                                  //console.log("savee011");

                                  if (booking_results.status == 1) {
                                    var replace_array = {
                                      sitename: global.settings.app_name,
                                    };

                                    pickup_time = new Date(pickup_time);

                                    var detail = {
                                      passenger_tripid: booking_results.trip_id,
                                      exists_flag: 0,
                                      notification_time: notification_time,
                                      total_request_time:
                                        total_notification_time,
                                      credit_card_status:
                                        global.settings.skip_credit_card,
                                      pickup_address: pickup_address,
                                      drop_address: drop_address,
                                      approx_fare: parseFloat(
                                        inputParams.approx_fare
                                      ).toFixed(2),
                                      surge_price_percentage: parseFloat(
                                        surge_price_percentage
                                      ),
                                      passenger_pickup_time:
                                        pickup_time.format("Y-m-d h:i:s A"),
                                    };

                                    common
                                      .generate_static_maps(
                                        q,
                                        booking_results.trip_id
                                      )
                                      .then(function (checkresults) {});

                                    common.emitDispatcher(req.io);

                                    var passenger_phone = country_code + phone;
                                    common
                                      .send_sms(
                                        q,
                                        passenger_phone,
                                        21,
                                        replace_array
                                      )
                                      .then(function (checkresults) {
                                        message.message = req.__(
                                          "api_request_disapatcher"
                                        );
                                        message.detail = detail;
                                        message.travel_msg = req.__(
                                          "dispatcher_confirmed"
                                        );
                                        message.status = 1;
                                        deferred.resolve(message);
                                        deferred.makeNodeResolver();
                                        message = null;
                                      });
                                  } else {
                                    var replace_array = {
                                      sitename: global.settings.app_name,
                                    };

                                    pickup_time = new Date(pickup_time);

                                    var detail = {
                                      passenger_tripid: booking_results.trip_id,
                                      exists_flag: 0,
                                      notification_time: notification_time,
                                      total_request_time:
                                        total_notification_time,
                                      credit_card_status:
                                        global.settings.skip_credit_card,
                                      pickup_address: pickup_address,
                                      drop_address: drop_address,
                                      approx_fare: parseFloat(
                                        inputParams.approx_fare
                                      ).toFixed(2),
                                      surge_price_percentage: parseFloat(
                                        surge_price_percentage
                                      ),
                                      passenger_pickup_time:
                                        pickup_time.format("Y-m-d h:i:s A"),
                                    };

                                    common
                                      .generate_static_maps(
                                        q,
                                        booking_results.trip_id
                                      )
                                      .then(function (checkresults) {});

                                    common.emitDispatcher(req.io);

                                    var passenger_phone = country_code + phone;
                                    common
                                      .send_sms(
                                        q,
                                        passenger_phone,
                                        21,
                                        replace_array
                                      )
                                      .then(function (checkresults) {
                                        if (airport_type == 1) {
                                          message.message = req.__(
                                            "api_request_disapatcher"
                                          );
                                        } else {
                                          message.message = req.__(
                                            "api_response_no_driver"
                                          );
                                        }

                                        message.detail = detail;
                                        message.status = 1;
                                        deferred.resolve(message);
                                        deferred.makeNodeResolver();
                                        message = null;
                                      });
                                  }
                                } else {
                                  //console.log("savee012");

                                  message.message = req.__("try_again");
                                  message.status = 2;
                                  deferred.resolve(message);
                                  deferred.makeNodeResolver();
                                  message = null;
                                }
                              });

                              //26 feb 2021
                              //});
                              //26 feb 2021

                              //}

                              //26 feb 2021
                              //});
                              //26 feb 2021
                            });
                          }
                        });
                    }
                  } catch (err) {
                    console.log(err);
                  }
                }
              });
            });
          } else {
            message.message = req.__("account_blocked");
            message.status = -1;
            deferred.resolve(message);
            deferred.makeNodeResolver();
            message = null;
          }
        } else {
        }
      });
  }

  return deferred.promise;
};
// Ramya july 31 2025
exports.editbooking = async function (q, req) {
  let inputParams = req.body;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };
  var validate_error = ValidateEditbooking(q, inputParams);

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
    var pickup_latitude = inputParams.pickup_latitude;
    var pickup_longitude = inputParams.pickup_longitude;
    var current_location = inputParams.current_location;
    var drop_latitude = inputParams.drop_latitude;
    var drop_longitude = inputParams.drop_longitude;
    var drop_location = inputParams.drop_location;
    var pickup_time = urlencode.decode(inputParams.pickup_time);
    var taxi_modelid = inputParams.taxi_modelid;
    console.error("((((((((((((((((((((((((((((((((((((((((((((((((((((");
    console.error("pickup_time : ", pickup_time);
    try {
      const updateFields = {
        ...(current_location && { current_location }),
        ...(pickup_latitude && { pickup_latitude }),
        ...(pickup_longitude && { pickup_longitude }),
        ...(drop_location && { drop_location }),
        ...(drop_latitude && { drop_latitude }),
        ...(drop_longitude && { drop_longitude }),
        ...(pickup_time && {
          pickup_time: new Date(pickup_time),
        }),
        ...(taxi_modelid && { taxi_modelid }),
      };
      console.error("updateFields : ", updateFields);
      const tripExists = await apimodel.isTripExists(trip_id);
      if (!tripExists) {
        message.message = req.__("invalid_trip");
        message.status = -1;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        return deferred.promise;
      }
      const result = await apimodel.updateTrip(trip_id, updateFields);
      if (result && result.modifiedCount > 0) {
        message.message = req.__("TripUpdated");
        message.status = 1;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        return deferred.promise;
      } else {
        message.message = null;
        message.status = 0;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        return deferred.promise;
      }
    } catch (err) {
      console.log(err);
    }
    return deferred.promise;
  }
};

//ramya sept 15 2025
exports.get_passengerId_from_phone = async function (q, req) {
  let inputParams = req.body;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };
  var validate_error = ValidatePhone(q, inputParams);

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
    var phone = inputParams.phone;

    const phoneExists = await apimodel.getIdByPhone(phone);
    console.error("phoneExists : ", phoneExists);
    if (!phoneExists || phoneExists.length === 0) {
      message.message = req.__("phone does not exists");
      message.status = -1;
      deferred.resolve(message);
      deferred.makeNodeResolver();
      return deferred.promise;
    }
    let passenger_id = phoneExists[0].passenger_id;

    message.message = req.__("success");
    message.status = 1;
    message.passenger_id = passenger_id;
    deferred.resolve(message);
    deferred.makeNodeResolver();
    return deferred.promise;
  }
};

function nearest_drivers_list(q, motor_model, latitude, longitude) {
  var deferred = q.defer();

  var details = {};

  try {
    //console.log("nearest0001");
    apimodel
      .nearest_drivers(q, motor_model, latitude, longitude)
      .then(function (drivers_results) {
        var driver_details = [];
        var time_range = getStartingDateAndEndingDate(global.settings.timezone);
        if (drivers_results.length > 0) {
          //console.log("nearest0003");

          var i = 0;
          drivers_results.forEach(function (element) {
            var driver_id = element._id.driver_id;

            var booking_limit = 0;
            if (element._id.booking_limit != undefined)
              booking_limit = element._id.booking_limit;
            //apimodel.currentday_booking_count(q,driver_id,time_range).then(function(count_results)
            //{
            // if(count_results.length > 0)
            // {
            // 	console.log(count_results[0].trip_count);
            // 	if(count_results[0].trip_count < booking_limit )
            // 	{
            // 		driver_details[i] = element._id;
            // 		i++;
            // 	}
            // }
            // else
            // {
            driver_details[i] = element._id;
            i++;
            //}
            //});
          });

          details.status = 1;
          details.driver_details = driver_details;
          deferred.resolve(details);
          deferred.makeNodeResolver();
          details = null;
        } else {
          details.status = 0;
          deferred.resolve(details);
          deferred.makeNodeResolver();
          details = null;
        }
      });
  } catch (err) {
    console.log(err);
  }

  return deferred.promise;
}
function save_nearest_drivers_list(q, motor_model, latitude, longitude) {
  var deferred = q.defer();

  var details = {};

  try {
    //console.log("nearest0001");
    apimodel
      .nearest_drivers(q, motor_model, latitude, longitude)
      .then(function (drivers_results) {
        var driver_details = [];
        var time_range = getStartingDateAndEndingDate(global.settings.timezone);
        if (drivers_results.length > 0) {
          //console.log("nearest0003");

          var i = 0;
          drivers_results.forEach(function (element) {
            var driver_id = element._id.driver_id;

            var booking_limit = 0;
            if (element._id.booking_limit != undefined)
              booking_limit = element._id.booking_limit;
            apimodel
              .check_trip_request_exists(q, driver_details[0].driver_id)
              .then(function (existsresults) {
                apimodel
                  .check_trip_exists(q, driver_details[0].driver_id)
                  .then(function (tripexistsresults) {
                    //apimodel.currentday_booking_count(q,driver_id,time_range).then(function(count_results)
                    //{
                    // if(count_results.length > 0)
                    // {
                    // 	console.log(count_results[0].trip_count);
                    // 	if(count_results[0].trip_count < booking_limit )
                    // 	{
                    // 		driver_details[i] = element._id;
                    // 		i++;
                    // 	}
                    // }
                    // else
                    // {
                    if (
                      existsresults.length == 0 &&
                      tripexistsresults.length == 0
                    ) {
                      driver_details[i] = element._id;
                      i++;
                    }
                    //}
                    //});
                  });
              });
          });

          details.status = 1;
          details.driver_details = driver_details;
          deferred.resolve(details);
          deferred.makeNodeResolver();
          details = null;
        } else {
          details.status = 0;
          deferred.resolve(details);
          deferred.makeNodeResolver();
          details = null;
        }
      });
  } catch (err) {
    console.log(err);
  }

  return deferred.promise;
}

function get_city_id(q, cityname) {
  var deferred = q.defer();

  var details = {};
  apimodel.city_details_by_name(q, cityname).then(function (city_results) {
    apimodel.default_city_details(q).then(function (city_results2) {
      if (city_results2.length > 0 || city_results.length > 0) {
        var city_details = {};
        if (city_results.length > 0) {
          city_details = city_results[0];
        }

        if (city_results2.length > 0) {
          city_details = city_results2[0];
        }

        //console.log('city_details',city_details)

        var city_id = city_details.city_id;

        details.city_id = city_id;
        details.status = 1;
        deferred.resolve(details);
        deferred.makeNodeResolver();
        details = null;
      } else {
        details.status = 0;
        deferred.resolve(details);
        deferred.makeNodeResolver();
        details = null;
      }
    });
  });

  return deferred.promise;
}

function savebooking_entry(q, input_data) {
  //console.log('input data',input_data);

  var deferred = q.defer();

  var details = {};

  var cityname = input_data.cityname;

  //console.log('savebooking_entry001');
  get_city_id(q, cityname).then(function (city_results) {
    //console.log('savebooking_entry002');

    var booking_key = randomstring.generate(10);

    booking_key = booking_key.toUpperCase();
    // Ramya
    var perferred_temparature = 0;
    var conversation = 0;
    var door_assistance = 0;
    var isBookForSomeone = 0;
    var bookforsomeone_id = 0;
    var bookforsomeone_name = "";
    var bookforsomeone_phone = "";
    var airport_sign = 0;
    var airportSignName = "";

    var search_cityid = 0;
    var company_id = 1;
    var hourly_booking =
      (airport_pickup =
      hourly_booking_hrs =
      fixed_estimate_fare_type =
      fixed_estimate_fare =
      wallet_deduction =
        0);
    var fixed_estimate_result = {};
    // Ramya 24_nov_2023
    if (
      input_data.perferred_temparature != undefined &&
      input_data.perferred_temparature != 0
    ) {
      perferred_temparature = input_data.perferred_temparature;
    }

    if (input_data.conversation != undefined && input_data.conversation != 0) {
      conversation = input_data.conversation;
    }

    if (
      input_data.door_assistance != undefined &&
      input_data.door_assistance != 0
    ) {
      door_assistance = input_data.door_assistance;
    }

    if (input_data.airport_sign != undefined && input_data.airport_sign != 0) {
      airport_sign = input_data.airport_sign;
    }
    if (
      input_data.airportSignName != undefined &&
      input_data.airportSignName != 0
    ) {
      airportSignName = input_data.airportSignName;
    }

    if (input_data.company_id != undefined && input_data.company_id != 0) {
      company_id = input_data.company_id;
    }

    if (city_results.status == 1) {
      search_cityid = city_results.city_id;
    }

    if (input_data.hourly_booking && input_data.hourly_booking == 1) {
      hourly_booking = 1;
    }

    if (input_data.airport_pickup) {
      airport_pickup = input_data.airport_pickup;
    }

    if (
      typeof input_data.airport_type == "undefined" ||
      input_data.airport_type == ""
    ) {
      input_data.airport_type = 0;
    }

    if (input_data.hourly_booking_hrs) {
      hourly_booking_hrs = input_data.hourly_booking_hrs;
    }

    if (
      typeof input_data.approx_duration == "undefined" ||
      input_data.approx_duration == ""
    ) {
      input_data.approx_duration = 0;
    }

    if (
      typeof input_data.zone_fare_applicable == "undefined" ||
      input_data.zone_fare_applicable == ""
    ) {
      input_data.zone_fare_applicable = 0;
    }

    if (
      typeof input_data.zone_fare == "undefined" ||
      input_data.zone_fare == ""
    ) {
      input_data.zone_fare = 0;
    }

    if (typeof input_data.zone_id == "undefined" || input_data.zone_id == "") {
      input_data.zone_id = 0;
    }

    if (
      typeof input_data.zone_fare_type == "undefined" ||
      input_data.zone_fare_type == ""
    ) {
      input_data.zone_fare_type = 0;
    }

    if (input_data.wallet_deduction && input_data.wallet_deduction == 1) {
      wallet_deduction = 1;
    }

    if (
      typeof input_data.sign_plate == "undefined" ||
      input_data.sign_plate == ""
    ) {
      input_data.sign_plate = "";
    } else {
      input_data.sign_plate = input_data.sign_plate;
    }

    // 03 Feb 2020
    if (
      typeof input_data.surge_price_status == "undefined" ||
      input_data.surge_price_status == 0
    ) {
      input_data.surge_price_status = 0;
    } else {
      input_data.surge_price_status = input_data.surge_price_status;
    }

    if (
      typeof input_data.surge_price_percentage == "undefined" ||
      input_data.surge_price_percentage == 0
    ) {
      input_data.surge_price_percentage = 0;
    } else {
      input_data.surge_price_percentage = input_data.surge_price_percentage;
    }

    if (
      typeof input_data.gift_card_status == "undefined" ||
      input_data.gift_card_status == 0
    ) {
      input_data.gift_card_status = 0;
    } else {
      input_data.gift_card_status = input_data.gift_card_status;
    }
    // 03 Feb 2020

    /* Sasidharan apr 29 2022 */
    let applied_corporate_promocode = 0;
    if (
      typeof input_data.applied_corporate_promocode == "undefined" ||
      input_data.applied_corporate_promocode == 1
    ) {
      applied_corporate_promocode = 1;

      /* Sasidharan Nov 15 2022 */
      input_data.surge_price_percentage = 0;
      input_data.surge_price_status = 0;
    }

    /* Sasidharan oct 04 2022 2022 */
    let surge_display_fare = "";
    if (
      typeof input_data.surge_display_fare == "undefined" ||
      input_data.surge_display_fare != ""
    ) {
      surge_display_fare = input_data.surge_display_fare;
    }

    /* Sasidharan Feb 08 2022 */
    let surgePriceToday = global.settings.surge_on_week_days;
    const weekday = [
      "Sunday",
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
    ];
    const currentDate = new Date(input_data.pickup_time);
    let day = weekday[currentDate.getDay()];
    let surgePriceStatus = surgePriceToday[day];
    if (surgePriceStatus == 0) {
      input_data.surge_price_percentage = 0;
      input_data.surge_price_status = 0;
      surge_display_fare = "";
    }

    try {
      if (
        input_data.fixed_estimate_fare_type &&
        input_data.fixed_estimate_fare_type == 1 &&
        hourly_booking == 0 &&
        airport_pickup == 0 &&
        input_data.approx_fare > 0
      ) {
        fixed_estimate_fare_type = 1;
        fixed_estimate_fare = parseFloat(input_data.approx_fare).toFixed(3);
        fixed_estimate_km = parseFloat(input_data.approx_distance).toFixed(2);
        fixed_estimate_duration = parseInt(input_data.approx_duration);
        fixed_estimate_model = parseInt(input_data.motor_model);

        fixed_estimate_result = {
          estimate_fare: fixed_estimate_fare,
          estimate_km: fixed_estimate_km,
          estimate_duration: fixed_estimate_duration,
          estimate_model: fixed_estimate_model,
          update_type: 0,
        };
      } else {
        //console.log(hourly_booking,'else fixed_estimate_fare_type----------->',airport_pickup,'-------->appfare--->',input_data.approx_fare);
      }
    } catch (err) {
      console.log(err, "----->err");
    }

    var sub_logid = input_data.sub_logid;
    //console.log('savebooking_entry003');

    apimodel.get_sublogid(q, sub_logid).then(function (sublog_results) {
      //console.log('savebooking_entry004');

      if (sublog_results.length > 0) {
        var sub_log_id = sublog_results[0].sub_logid;
      }
      //console.log('savebooking_entry005');

      apimodel
        .get_driver_availability(q, cityname)
        .then(function (availablity_results) {
          //console.log('savebooking_entry006');

          if (availablity_results.length == 0) {
            apimodel.get_last_logid(q, cityname).then(function (logid_results) {
              //console.log('savebooking_entry007');

              try {
                // 03 Feb 2020
                var t = fixed_estimate_result;
                if (t.constructor.name == "Array") {
                  t = t.reduce(function (o, val) {
                    o[val] = val;
                    return o;
                  }, {});
                }
                // 03 Feb 2020
                if (logid_results.length > 0) {
                  var inc_id = logid_results[0].last_logid + 1;
                  var roundtrip = input_data.roundtrip;
                  var now_after = input_data.now_after;
                  var sub_logid = 0;
                  //var pickup_time =  new Date();
                  var pickupdrop = 0;
                  var company_tax = 0;
                  if (roundtrip == "true") {
                    pickupdrop = parseInt(1);
                  }
                  var waitingtime = 0;

                  var temp_pickup_time = new Date(input_data.pickup_time);
                  console.log(
                    "*****************start pickup time validation*********************"
                  );
                  console.log("input_data.pickup_time", input_data.pickup_time);
                  console.log("temp_pickup_time", temp_pickup_time);
                  var currentCheckTime = new Date("2021-01-01 03:00:00");
                  console.log("timestamp", temp_pickup_time.getTime());
                  console.log("timestamp current", currentCheckTime.getTime());
                  if (
                    temp_pickup_time == "Invalid Date" ||
                    temp_pickup_time.getTime() < currentCheckTime.getTime()
                  ) {
                    temp_pickup_time = new Date();
                  }
                  console.log("after temp_pickup_time", temp_pickup_time);
                  console.log(
                    "*****************end pickup time validation*********************"
                  );

                  let n_estimate_fare = 0;
                  if (input_data.approx_fare) {
                    estimate_fare = parseFloat(input_data.approx_fare).toFixed(
                      3
                    );
                  }
                  let n_estimate_distance = 0;
                  if (input_data.approx_distance) {
                    estimate_distance = parseFloat(
                      input_data.approx_distance
                    ).toFixed(3);
                  }
                  let n_estimate_duration = 0;
                  if (input_data.approx_duration) {
                    estimate_duration = parseFloat(
                      input_data.approx_duration
                    ).toFixed(3);
                  }

                  var input_array = {
                    _id: parseInt(inc_id),

                    n_estimate_fare: n_estimate_fare,
                    n_estimate_distance: n_estimate_distance,
                    n_estimate_duration: n_estimate_duration,

                    passengers_id: parseInt(input_data.passenger_id),
                    driver_id: parseInt(input_data.driver_id),
                    booking_key: booking_key,
                    //'driver_reply' :"",
                    msg_status: "",
                    company_id: parseInt(company_id),
                    current_location: urlencode.decode(input_data.pickupplace),
                    pickup_latitude: input_data.pickup_latitude,
                    pickup_longitude: input_data.pickup_longitude,
                    drop_location: urlencode.decode(input_data.dropplace),
                    drop_latitude: input_data.drop_latitude,
                    drop_longitude: input_data.drop_longitude,
                    no_passengers: parseInt(input_data.no_passengers),
                    max_luggage: parseInt(input_data.max_luggage),
                    luggage: parseInt(input_data.max_luggage),
                    hourly_booking: parseInt(hourly_booking),
                    hourly_booking_hrs: parseInt(hourly_booking_hrs),
                    airport_pickup: parseInt(airport_pickup),
                    airport_flight_number: input_data.airport_flight_number,
                    airport_flight_time: input_data.airport_flight_time,
                    airport_notes: input_data.airport_notes,
                    approx_distance: parseFloat(input_data.approx_distance),
                    approx_duration: parseInt(input_data.approx_duration),
                    approx_fare: parseFloat(input_data.approx_fare),
                    time_to_reach_passen: parseFloat(input_data.distance_away),
                    pickup_time: temp_pickup_time,
                    actual_pickup_time: temp_pickup_time,
                    waitingtime: waitingtime,
                    createdate: new Date(),
                    taxi_modelid: parseInt(input_data.motor_model),
                    taxi_id: parseInt(input_data.taxi_id),
                    booking_from: 1,
                    search_city: parseInt(search_cityid),
                    sub_logid: parseInt(sub_logid),
                    notes_driver: input_data.notes,
                    booking_from_cid: parseInt(company_id),
                    company_tax: parseFloat(company_tax),
                    bookingtype: parseInt(1),
                    bookby: parseInt(1),
                    travel_status: 0,
                    promocode: input_data.promo_code,
                    distance: input_data.distance,
                    pickupdrop: input_data.pickupdrop,
                    fixedprice: input_data.fixedprice,
                    now_after: parseInt(0),
                    book_type: "Book Now",
                    book_tag: "N",
                    payment_type: input_data.payment_type,
                    rating: 0,
                    drop_time: "",
                    driver_reply: "",
                    driver_comments: "",
                    payment_chosen_flag: "0",
                    os_ver: input_data.os_ver,
                    app_ver: input_data.app_ver,
                    mod_ver: input_data.mod_ver,
                    bookedby: input_data.bookedby,
                    moved: parseInt(0),
                    passenger_admin_notes: input_data.passenger_admin_notes,
                    fixed_estimate_fare_type: fixed_estimate_fare_type,
                    fixed_estimate_result: t, // 03 Feb 2020
                    wallet_deduction: parseInt(wallet_deduction),
                    sign_plate: input_data.sign_plate,
                    surge_price_status: parseInt(input_data.surge_price_status), //26 feb 2020
                    surge_price_percentage: parseFloat(
                      input_data.surge_price_percentage
                    ), //26 feb 2020
                    zone_fare_type: parseInt(input_data.zone_fare_type),
                    zone_fare_applicable: parseInt(
                      input_data.zone_fare_applicable
                    ),
                    zone_fare: parseFloat(input_data.zone_fare),
                    zone_id: parseInt(input_data.zone_id),
                    gift_card_status: parseInt(input_data.gift_card_status),

                    /* Sasidharan apr 29 2022 */
                    applied_corporate_promocode: parseInt(
                      applied_corporate_promocode
                    ),

                    /* Sasidharan oct 04 2022 */
                    surge_display_fare: surge_display_fare,
                    // Ramya 24_nov_2023
                    perferred_temparature: perferred_temparature,
                    conversation: conversation,
                    door_assistance: door_assistance,
                    airportSignName: airportSignName,
                    airport_sign: airport_sign,

                    /* Sasidharan May 13 2024 */
                    paymentInProgress: 0,
                  };

                  if (now_after == 0) {
                    input_array.book_type = "Book Now";
                    input_array.book_tag = "N";
                    input_array.now_after = parseInt(0);
                    input_array.pickup_time = add_extra_time(
                      input_data.pickup_time
                    );
                    input_array.actual_pickup_time = add_extra_time(
                      input_data.pickup_time
                    );
                    input_array.bookingtype = parseInt(1);
                    input_array.bookby = parseInt(1);
                  } else if (now_after == 1 && input_data.all_dates != "") {
                    (input_array.book_type = "Schedule Trip"),
                      (input_array.book_tag = "R"),
                      (input_array.driver_id = parseInt(0)),
                      (input_array.now_after = parseInt(1));
                    input_array.recurrent_type = parseInt(0);
                    input_array.pickup_time = convert_date_to_iso(
                      input_data.pickup_time
                    );
                    input_array.actual_pickup_time = convert_date_to_iso(
                      input_data.pickup_time
                    );
                    input_array.bookingtype = parseInt(2);
                    input_array.bookby = parseInt(2);
                    input_array.operator_id = parseInt(0);
                    input_array.faretype = parseInt(0);
                    input_array.travel_status = parseInt(0);
                  } else {
                    (input_array.book_type = "Book Later"),
                      (input_array.book_tag = "N"),
                      (input_array.now_after = parseInt(1));
                    input_array.recurrent_type = parseInt(0);
                    input_array.airport_type = parseInt(
                      urlencode.decode(input_data.airport_type)
                    );
                    input_array.pickup_time = convert_date_to_iso(
                      input_data.pickup_time
                    );
                    input_array.actual_pickup_time = convert_date_to_iso(
                      input_data.pickup_time
                    );
                    input_array.bookby = parseInt(2);
                    input_array.bookingtype = parseInt(2);
                    input_array.faretype = parseInt(0);
                    input_array.operator_id = parseInt(0);
                    input_array.travel_status = parseInt(0);
                    input_array.driver_id = parseInt(0);
                    input_array.taxi_id = parseInt(0);
                  }

                  if (hourly_booking == 1) {
                    input_array.book_type = "Hourly";
                  }

                  //console.log(input_array);

                  apimodel
                    .insert_passengers_logs(q, input_array)
                    .then(function (logid_results) {
                      //console.log('savebooking_entry008');

                      var update_array = {
                        last_logid: inc_id,
                      };

                      //console.log(update_array);

                      apimodel
                        .update_siteinfo(q, update_array)
                        .then(function (logid_results) {
                          //console.log('savebooking_entry009');

                          var update_sublog_array = {
                            sub_logid: parseInt(sub_logid),
                          };

                          apimodel
                            .update_sublog_id(q, update_sublog_array, inc_id)
                            .then(function (logid_results) {
                              //console.log('savebooking_entry010');

                              details.trip_id = inc_id;
                              details.status = 1;
                              deferred.resolve(details);
                              deferred.makeNodeResolver();
                              details = null;
                            });
                        });
                    });
                }
              } catch (err) {
                console.log(err);
              }
            });
          } else {
            details.status = 0;
            deferred.resolve(details);
            deferred.makeNodeResolver();
            details = null;
          }
        });
    });
  });

  return deferred.promise;
}

function validateGiftCard(q, promocode) {
  var deferred = q.defer();
  if (global.settings.gift_card_enable == 1) {
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
                deferred.resolve(1);
                deferred.makeNodeResolver();
                message = null;
              } else {
                deferred.resolve(0);
                deferred.makeNodeResolver();
                message = null;
              }
            } else {
              deferred.resolve(-1);
              deferred.makeNodeResolver();
              message = null;
            }
          } else {
            deferred.resolve(-1);
            deferred.makeNodeResolver();
            message = null;
          }
        } catch (err) {
          console.log("gift card error", err);
        }
      })
      .catch(function (error) {
        console.log("giftcard api error ", error.response.data);
        deferred.resolve(-1);
        deferred.makeNodeResolver();
        message = null;
      });
  } else {
    deferred.resolve(-1);
    deferred.makeNodeResolver();
    message = null;
  }

  return deferred.promise;
}

/* Sasidharan june 20 2022 */
function check_promocode(
  q,
  promocode,
  phone,
  passenger_id,
  giftCardResponse,
  passenger_details = {}
) {
  console.log("promocode", promocode);
  console.log("giftCardResponse", giftCardResponse);

  var deferred = q.defer();

  /* Sasidharan apr 16 - 2022 */
  var details = {
    corporate_promocode: 0,
    skipCard: 0,
  };
  try {
    if (promocode != "" && promocode != undefined && giftCardResponse == -1) {
      /* Sasidharan july 16 2022 added async */
      apimodel
        .promocode_details(q, promocode)
        .then(async function (promo_results) {
          if (
            promo_results.length > 0 &&
            typeof promo_results[0].register_promocode != "undefined" &&
            typeof passenger_details.created_date != "undefined" &&
            promo_results[0].register_promocode
          ) {
            var promocode_details = {};
            promocode_details = promo_results[0];

            /* Sasidharan June 12 2024 */
            var skipCard =
              typeof promocode_details.skipCard != "undefined"
                ? promocode_details.skipCard
                : 0;
            details.skipCard = skipCard;

            var promo_start = promocode_details.start_date;
            var promo_end = promocode_details.expire_date;
            var total_applied = promocode_details.total_applied;
            var promo_limit = promocode_details.promo_limit;
            var current_date = new Date();
            var current_time = current_date.getTime();
            var promo_starttime = promo_start.getTime();
            var promo_endtime = promo_end.getTime();

            /* Sasidharan june 20 2022 */
            /* Check with passenger registered date which means created date */
            let register_promocode_date =
              global.settings.register_promocode.getTime();

            /* Sasidharan May 22 2024 */
            let passenger_registered_date = new Date(
              passenger_details.created_date
            ).getTime();
            // let passenger_registered_date =
            //   passenger_details.created_date.getTime();

            if (passenger_registered_date < register_promocode_date) {
              details.status = 4;
              deferred.resolve(details);
              deferred.makeNodeResolver();
              details = null;
            } else {
              if (total_applied > promo_limit) {
                details.status = 2;
                deferred.resolve(details);
                deferred.makeNodeResolver();
                details = null;
              } else {
                /* Sasidharan apr 16 - 2022 */
                if (
                  typeof promocode_details.corporate_promocode != "undefined" &&
                  promocode_details.corporate_promocode == 1
                ) {
                  details.corporate_promocode = 1;
                }

                /* Sasidharan july 16 2022 */
                let applyUserLimit =
                  typeof promocode_details.apply_user_limit != "undefined"
                    ? promocode_details.apply_user_limit
                    : 0;
                let userLimit =
                  typeof promocode_details.maximum_allowed_limit != "undefined"
                    ? promocode_details.maximum_allowed_limit
                    : 0;

                if (applyUserLimit && userLimit > 0) {
                  let totalCount = await apimodel.getPromocodeUsedCount(
                    promocode,
                    passenger_id
                  );
                  if (totalCount >= userLimit) {
                    details.status = 2;
                    deferred.resolve(details);
                    deferred.makeNodeResolver();
                    details = null;
                  } else {
                    details.status = 1;
                    deferred.resolve(details);
                    deferred.makeNodeResolver();
                    details = null;
                  }
                } else {
                  details.status = 1;
                  deferred.resolve(details);
                  deferred.makeNodeResolver();
                  details = null;
                }
              }
            }
          } else {
            /* Sasidharan july 16 2022 added async */
            apimodel
              .promocode_details_by_phone(q, promocode, phone)
              .then(async function (promo_results2) {
                if (promo_results2.length > 0 || promo_results.length > 0) {
                  var promocode_details = {};
                  if (promo_results.length > 0) {
                    console.log("promo1");
                    promocode_details = promo_results[0];
                  }

                  if (promo_results2.length > 0) {
                    console.log("promo2");
                    promocode_details = promo_results2[0];
                  }

                  /* Sasidharan June 12 2024 */
                  var skipCard =
                    typeof promocode_details.skipCard != "undefined"
                      ? promocode_details.skipCard
                      : 0;
                  details.skipCard = skipCard;

                  var promo_start = promocode_details.start_date;
                  var promo_end = promocode_details.expire_date;
                  console.log("promo_start", promo_start);
                  console.log("promo_end", promo_end);
                  var total_applied = promocode_details.total_applied;
                  var promo_limit = promocode_details.promo_limit;
                  var current_date = new Date();
                  var current_time = current_date.getTime();
                  var promo_starttime = promo_start.getTime();
                  var promo_endtime = promo_end.getTime();
                  console.log("promo_starttime", promo_starttime);
                  console.log("promo_endtime", promo_endtime);
                  console.log("current_time", current_time);
                  if (promo_starttime > current_time) {
                    details.status = 3;
                    deferred.resolve(details);
                    deferred.makeNodeResolver();
                    details = null;
                  } else if (promo_endtime < current_time) {
                    console.log("promo status 4");
                    details.status = 4;
                    deferred.resolve(details);
                    deferred.makeNodeResolver();
                    details = null;
                  } else {
                    if (total_applied > promo_limit) {
                      details.status = 2;
                      deferred.resolve(details);
                      deferred.makeNodeResolver();
                      details = null;
                    } else {
                      /* Sasidharan apr 16 - 2022 */
                      if (
                        typeof promocode_details.corporate_promocode !=
                          "undefined" &&
                        promocode_details.corporate_promocode == 1
                      ) {
                        details.corporate_promocode = 1;
                      }

                      /* Sasidharan july 16 2022 */
                      let applyUserLimit =
                        typeof promocode_details.apply_user_limit != "undefined"
                          ? promocode_details.apply_user_limit
                          : 0;
                      let userLimit =
                        typeof promocode_details.maximum_allowed_limit !=
                        "undefined"
                          ? promocode_details.maximum_allowed_limit
                          : 0;

                      if (applyUserLimit && userLimit > 0) {
                        let totalCount = await apimodel.getPromocodeUsedCount(
                          promocode,
                          passenger_id
                        );
                        if (totalCount >= userLimit) {
                          details.status = 2;
                          deferred.resolve(details);
                          deferred.makeNodeResolver();
                          details = null;
                        } else {
                          details.status = 1;
                          deferred.resolve(details);
                          deferred.makeNodeResolver();
                          details = null;
                        }
                      } else {
                        details.status = 1;
                        deferred.resolve(details);
                        deferred.makeNodeResolver();
                        details = null;
                      }
                    }
                  }
                } else {
                  details.status = 0;
                  deferred.resolve(details);
                  deferred.makeNodeResolver();
                  details = null;
                }
              });
          }
        });
    } else {
      details.status = 1;
      deferred.resolve(details);
      deferred.makeNodeResolver();
      details = null;
    }
  } catch (err) {
    console.log(err);
  }

  return deferred.promise;
}

exports.get_driver_reply = function (q, req) {
  //let inputParams = JSON.parse(req.rawBody);
  let inputParams = req.body;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  var hostname = global.settings.base_url;

  var validate_error = ValidateSavebookingGetDriverReply(q, inputParams);

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
    apimodel
      .get_trip_detail(q, inputParams.trip_id)
      .then(function (tripresults) {
        var message = {};
        var detail = {};
        if (tripresults.length > 0) {
          var driver_reply = tripresults[0].driver_reply;

          if (driver_reply == "A") {
            detail.trip_id = inputParams.trip_id;
            detail.driverdetails = "";

            message.message = req.__("request_confirmed_passenger");
            message.detail = detail;
            message.status = 1;

            deferred.resolve(message);
            deferred.makeNodeResolver();
            message = null;
          } else {
            common
              .update_cancel_trip_det(q, inputParams.trip_id)
              .then(function (updateCancelTripResults) {
                common
                  .change_driver_status(q, inputParams.trip_id, "C")
                  .then(function (changeDriverResults) {
                    var update_trip_array = {
                      status: 4,
                    };

                    apimodel
                      .update_driver_status(
                        q,
                        update_trip_array,
                        inputParams.trip_id
                      )
                      .then(function (updateresults) {
                        message.message = req.__("request_canceled_passenger");
                        message.status = 3;
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

//25 May 2021
exports.get_fare_info = function (q, req) {
  console.log("get_fare_info");

  let inputParams = req.body;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  var hostname = global.settings.base_url;
  var appRoot = global.settings.docroot;

  var validate_error = ValidateNearestDrivers(q, inputParams);

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
    try {
      var passenger_id = inputParams.passenger_id;
      var motor_model = inputParams.motor_model;
      var latitude = inputParams.latitude;
      var longitude = inputParams.longitude;
      var drop_latitude = inputParams.drop_lat;
      var drop_longitude = inputParams.drop_lng;
      var lang =
        typeof inputParams.lang !== "undefined" ? inputParams.lang : "en";
      var minutes =
        typeof inputParams.minutes !== "undefined"
          ? parseInt(inputParams.minutes)
          : 0;

      passcommon
        .nearestdriverslist(
          q,
          motor_model,
          latitude,
          longitude,
          passenger_id,
          lang,
          minutes,
          drop_latitude,
          drop_longitude
        )
        .then(function (driverresults) {
          message.message = req.__("success");
          message.detail = driverresults;
          message.status = 1;
          deferred.resolve(message);
          deferred.makeNodeResolver();
          message = null;
        });
    } catch (err) {
      console.log(err);
    }
  }

  return deferred.promise;
};
//25 May 2021

function ValidateNearestDrivers(q, input) {
  var constraints = {
    passenger_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    latitude: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    longitude: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    motor_model: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function ValidateGiftCardBalance(q, input) {
  var constraints = {
    promocode: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function ValidateCancelGiftRedemption(q, input) {
  var constraints = {
    transaction_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function ValidateSavebooking(q, input) {
  //{"cityname":"","motor_model":"1","approx_duration":"","drop_latitude":"","airport_pickup":"1","mod_ver":"iPhone%20Plus","passenger_id":"7855",
  //"latitude":"29.240021","flag":"1","drop_longitude":"","pickup_time":"2018-06-23%2009:20:10","sub_logid":"","now_after":"1",
  //"os_ver":"11.4","payment_type":"1","promo_code":"","longitude":"47.971424","dropplace":"","app_ver":"4.4",
  //"pickupplace":"Kuwait%20Airport,%20Al%20Farwaniyah%20Governorate,%20Kuwait","all_dates":"","notes":"","bookedby":"7855","airport_type":"1"}
  var constraints = {
    motor_model: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    mod_ver: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    passenger_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    latitude: {
      presence: { allowEmpty: false, message: "not empty" },
      exclusion: { within: [0], message: "'%{value}' is not allowed" },
    },
    longitude: {
      presence: { allowEmpty: false, message: "not empty" },
      exclusion: { within: [0], message: "'%{value}' is not allowed" },
    },
    pickup_time: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    now_after: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    os_ver: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    app_ver: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    pickupplace: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

// Ramya july 31 2025
function ValidateEditbooking(q, input) {
  var constraints = {
    trip_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

//ramya sept 15 2025
function ValidatePhone(q, input) {
  var constraints = {
    phone: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function ValidateSavebookingGetDriverReply(q, input) {
  var constraints = {
    trip_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function add_extra_time(pickup_time) {
  console.log(
    "*****************start pickup time validation- add_extra_time*********************"
  );
  console.log("input_data.pickup_time", pickup_time);
  var pickup_time = new Date(urlencode.decode(pickup_time));
  console.log("pickup_time", pickup_time);
  var currentCheckTime = new Date("2021-01-01 03:00:00");
  console.log("timestamp", pickup_time.getTime());
  console.log("timestamp current", currentCheckTime.getTime());
  if (
    pickup_time == "Invalid Date" ||
    pickup_time.getTime() < currentCheckTime.getTime()
  ) {
    pickup_time = new Date();
  }
  console.log("after pickup_time", pickup_time);
  console.log(
    "*****************end pickup time validation- add_extra_time*********************"
  );

  var current_time = new Date();

  if (current_time.getTimezoneOffset() == "-330")
    pickup_time = pickup_time.getTime() + 9090000;
  else pickup_time = pickup_time.getTime() - 10710000;

  return new Date(pickup_time);
}

function convert_date_to_iso(pickup_time) {
  console.log(
    "*****************start pickup time validation- convert_date_to_iso*********************"
  );
  console.log("input_data.pickup_time", pickup_time);
  var pickup_time = new Date(urlencode.decode(pickup_time));
  console.log("pickup_time", pickup_time);
  var currentCheckTime = new Date("2021-01-01 03:00:00");
  console.log("timestamp", pickup_time.getTime());
  console.log("timestamp current", currentCheckTime.getTime());
  if (
    pickup_time == "Invalid Date" ||
    pickup_time.getTime() < currentCheckTime.getTime()
  ) {
    pickup_time = new Date();
  }
  console.log("after pickup_time", pickup_time);
  console.log(
    "*****************end pickup time validation- convert_date_to_iso*********************"
  );

  var current_time = new Date();

  if (current_time.getTimezoneOffset() == "-330")
    pickup_time = pickup_time.getTime() + 9000000;
  else pickup_time = pickup_time.getTime() - 10800000;

  return new Date(pickup_time);
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

//26 feb 2021
function closest(array, num) {
  var i = 0;
  var minDiff = 1000;
  var ans;
  for (i in array) {
    var m = Math.abs(num - array[i]);
    if (m < minDiff) {
      minDiff = m;
      ans = array[i];
    }
  }
  return ans;
}
//26 feb 2021
