var apimodel = require("../models/apimodel");
var apimodel_two = require("../models/apimodel_v1");

var favicon = require("../config/favicon.json");
var config = require("../config/common_config.json");
var q = require("q");
var appRoot = require("app-root-path");
var validator = require("validator");
var fs = require("fs");
var validate = require("validate.js");
var dateFormat = require("dateformat");
var time = require("time");
//var passenger_i18n = require('i18n');
var t = require("../config/table_config.json");
var common = require("../lib/common.js");
var uniqid = require("uniqid");
var axios = require("axios");
var giftCard = require("../lib_v1/giftcard");
var pushNotification = require("../utils/encryption.js");

/* Sasidharan apr 16 - 2022 */
var shared = require("../utils/shared");

/* Sasidharan May 06 2024 */
const {
  deductMoneyFromCustomerAccount,
  getCustomerInfo,
} = require("../utils/tapPaymentGateway.js");
const { getDefaultCard } = require("../modules/hesabe/hesabe.model.js");
const { createMercharntTransaction } = require("../modules/hesabe/hesabe.js");

// Sasidharan Jan 17 2024
const {
  updatePassengerCouponPoints,
  updateLastCouponTripId,
} = require("../models/coupon.js");

// passenger_i18n.configure({
//  locales: ['en', 'ar'],

//  directory: __dirname + '/../locales',
//   defaultLocale: 'en',
//  updateFiles: false,
//    autoReload: true,
//  });

exports.complete_trip = function (q, req) {
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

  //console.log('inputParams',inputParams);

  let message = {
    message: "",
    status: 0,
  };

  var validate_error = validateCompleteTrip(q, inputParams);

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
    var drop_latitude = inputParams.drop_latitude;
    var drop_longitude = inputParams.drop_longitude;
    var drop_location = inputParams.drop_location;
    var input_waiting_hours = inputParams.waiting_hours;

    //console.log("completee0001");

    apimodel
      .get_trip_detail_complete(q, trip_id)
      .then(function (detailsresults) {
        if (detailsresults.length > 0) {
          var travel_status = detailsresults[0].travel_status;
          var driver_id = detailsresults[0].driver_id;
          var driver_name = detailsresults[0].driver_name;
          var driver_status = detailsresults[0].driver_status;
          var passenger_id = detailsresults[0].passengers_id;
          var distance = detailsresults[0].distance;
          var coordinates = detailsresults[0].coordinates;
          var bearing = detailsresults[0].bearing;
          var accuracy = detailsresults[0].accuracy;
          //ramya feb 4 2026
          var model_base_fare = detailsresults[0].model_base_fare;
          var model_base_min = detailsresults[0].model_base_min;
          if (distance == "") {
            distance = 0;
          }
          var actual_distance_data = distance;
          var trans_id = detailsresults[0].trans_id;
          var actual_pickup_time = detailsresults[0].actual_pickup_time;
          //console.log('actual_pickup_time',actual_pickup_time);
          var current_drop_time = detailsresults[0].drop_time;
          var airport_pickup = detailsresults[0].airport_pickup;
          var taxi_modelid = detailsresults[0].taxi_modelid;
          var airport_type = detailsresults[0].airport_type;
          var taxi_model_name = detailsresults[0].taxi_model_name;

          var zone_fare_type = detailsresults[0].zone_fare_type;
          var zone_fare_applicable = detailsresults[0].zone_fare_applicable;
          var zone_id = detailsresults[0].zone_id;
          var zone_fare = detailsresults[0].zone_fare;

          var arrived_time = detailsresults[0].arrived_time;
          var promocode = detailsresults[0].promocode;
          var passenger_phone = detailsresults[0].passenger_phone;
          var device_token = detailsresults[0].device_token;
          var passenger_email = detailsresults[0].passenger_email;
          var passenger_first_name = detailsresults[0].passenger_name;
          var passenger_last_name = detailsresults[0].passenger_lastname
            ? detailsresults[0].passenger_lastname
            : "";

          /* Sasidharan May 06 2024 */
          var cardDetails = detailsresults[0].cardDetails
            ? detailsresults[0].cardDetails
            : [];

          /* Sasidharan Aug 5 2024 change ternary operator value [], "" */
          var customerTapPaymentId = detailsresults[0].customerTapPaymentId
            ? detailsresults[0].customerTapPaymentId
            : "";

          /* Sasidharan Aug 5 2024 */
          let premiumCustomer = detailsresults[0].premiumCustomer
            ? detailsresults[0].premiumCustomer
            : 0;

          var passenger_wallet_amount =
            detailsresults[0].passenger_wallet_amount;
          var passenger_discount_wallet =
            detailsresults[0].discount_wallet_amount;
          var passenger_id = detailsresults[0].passengers_id;
          var vip_user = detailsresults[0].vip_user;
          var model_id = detailsresults[0].taxi_modelid;
          var pickup_location = detailsresults[0].pickup_location;
          var drop_location_old = detailsresults[0].drop_location;
          var pickup_latitude = detailsresults[0].pickup_latitude;
          var pickup_longitude = detailsresults[0].pickup_longitude;
          var company_id = detailsresults[0].company_id;
          var driver_image = detailsresults[0].driver_image;
          var hourly_booking = detailsresults[0].hourly_booking;
          var pickup_hrs_time = detailsresults[0].actual_pickup_hrs;
          var total_waiting_time = detailsresults[0].total_waiting_time;
          var start_waiting_time = detailsresults[0].start_waiting_time;
          var fixed_estimate_fare_type =
            detailsresults[0].fixed_estimate_fare_type;
          var fixed_estimate_result = detailsresults[0].fixed_estimate_result;
          var gift_card_status = detailsresults[0].gift_card_status;

          var tax = global.settings.tax;
          var waiting_free = detailsresults[0].waiting_free;

          /* Sasidharan apr 29 2022 */
          var applied_corporate_promocode =
            typeof detailsresults[0].applied_corporate_promocode != "undefined"
              ? detailsresults[0].applied_corporate_promocode
              : 0;

          /* Sasidharan oct 04 2022 */
          var additionalMinFare = 0;
          var baseMinsFare = 0;

          // 03 Feb 2020
          var surge_price = 0;

          // Sasidharan Jan 17 2025;
          let couponAmount =
            typeof detailsresults[0].couponAmount != "undefined"
              ? detailsresults[0].couponAmount
              : 0;
          let lastCouponTripId =
            typeof detailsresults[0].lastCouponTripId != "undefined"
              ? detailsresults[0].lastCouponTripId
              : 0;
          let showCouponBox = 0;
          let numberOfCoupons = 0;

          if (global.settings.surge_pricing == 1) {
            var surge_price_status =
              typeof detailsresults[0].surge_price_status !== "undefined"
                ? detailsresults[0].surge_price_status
                : 0;
            var surge_price_percentage =
              typeof detailsresults[0].surge_price_percentage !== "undefined"
                ? detailsresults[0].surge_price_percentage
                : 0;
            console.log("global.settings", global.settings.surge_pricing);
          }
          // 03 Feb 2020

          try {
            var passenger_lang =
              typeof detailsresults[0].passenger_lang !== "undefined"
                ? detailsresults[0].passenger_lang
                : "en";
            req.app.locals.passenger_i18n.setLocale(passenger_lang);
            //console.log("passenger_lang",passenger_lang);
          } catch (err) {
            //console.log(err);
          }

          //console.log("completee0002");

          if (
            (travel_status == 1 && trans_id != "" && trans_id != undefined) ||
            (travel_status == 2 && trans_id != "" && trans_id != undefined) ||
            (travel_status == 5 && trans_id != "" && trans_id != undefined)
          ) {
            var update_trip_array = {
              travel_status: parseInt(1),
              driver_reply: "A",
              msg_status: "R",
            };

            var update_request_array = {
              status: parseInt(7),
            };

            //console.log("completee0003");

            apimodel
              .update_trip(q, update_trip_array, trip_id)
              .then(function (checkresults) {
                apimodel
                  .update_request_details(q, update_request_array, trip_id)
                  .then(function (checkresults) {
                    message.message = req.__("trip_fare_and_status_updated");
                    message.status = -1;
                    deferred.resolve(message);
                    deferred.makeNodeResolver();
                    message = null;
                  });
              });
          } else if (travel_status == 2 || travel_status == 5) {
            console.log("completee0004");
            //try
            //{
            //console.log(drop_location_old,'drop_location_old------>');

            /** Google calculation start **/
            /*var DistanceParams = {'pickup_latitude':pickup_latitude,'pickup_longitude':pickup_longitude,'drop_latitude':drop_latitude,'drop_longitude':drop_longitude};
          GetGoogleMatrixDistance(q,DistanceParams).then(function(placeresults){

            if(placeresults.status==1 && drop_location_old != ''){

              var distance_data = placeresults.google_result[0].elements[0].distance;
              var duration_data = placeresults.google_result[0].elements[0].duration;
              var distance_km = parseFloat(distance_data.value/1000).toFixed(2);
              //console.log(distance_km,'-------in_g_distance');
              if(distance_km > 0){
                distance = distance_km;
              }
            } */
            var waiting_minutes = 0;
            var waiting_hours = 0;

            if (actual_pickup_time != "" && arrived_time != "") {
              waiting_minutes =
                actual_pickup_time.getTime() - arrived_time.getTime();
              waiting_minutes = waiting_minutes / 1000;
              waiting_minutes = waiting_minutes / 60;
              if (waiting_minutes > waiting_free) {
                waiting_minutes = waiting_minutes - waiting_free;
              } else {
                waiting_minutes = 0;
              }

              //Trip In progress Waiting Time calculation
              waiting_minutes = waiting_minutes + start_waiting_time / 60000;

              waiting_hours = waiting_minutes / 60;
            }

            if (global.settings.q8taxi_enable == 1) {
              waiting_hours = input_waiting_hours;
            }
            // }
            // catch(err)
            // {
            //  console.log(err);
            // }

            ////console.log("heree0001");
            //gift card feature
            getGifCardDetails(q, promocode, gift_card_status).then(function (
              giftCardApiResponse
            ) {
              update_complete_status(
                q,
                travel_status,
                current_drop_time,
                actual_pickup_time,
                distance,
                tax,
                drop_latitude,
                drop_longitude,
                drop_location,
                waiting_hours,
                trip_id,
                actual_distance_data,
                passenger_wallet_amount
              ).then(function (completeresults) {
                ////console.log('completeresults',completeresults);
                if (completeresults < 0) {
                  completeresults = 0;
                }
                //console.log("heree0002");

                var timeinterval = completeresults;

                var minutes = timeinterval / 60;
                minutes = Math.ceil(minutes);

                /* Sasidharan oct 04 2022 add async */
                apimodel
                  .model_fare_details(q, model_id)
                  .then(async function (fareresults) {
                    //console.log("heree0006");

                    if (fareresults.length > 0) {
                      try {
                        base_fare = fareresults[0].base_fare;
                        min_km_range = fareresults[0].min_km;
                        min_km = fareresults[0].min_km;
                        min_fare = fareresults[0].min_fare;
                        cancellation_fare = fareresults[0].cancellation_fare;
                        below_above_km_range = fareresults[0].below_above_km;
                        below_km = fareresults[0].below_km;
                        above_km = fareresults[0].above_km;
                        night_charge = fareresults[0].night_charge;
                        night_timing_from = fareresults[0].night_timing_from;
                        night_timing_to = fareresults[0].night_timing_to;
                        night_fare_per = fareresults[0].night_fare;
                        evening_charge = fareresults[0].evening_charge;
                        evening_timing_from =
                          fareresults[0].evening_timing_from;
                        evening_timing_to = fareresults[0].evening_timing_to;
                        evening_fare_per = fareresults[0].evening_fare;
                        waiting_per_hour = fareresults[0].waiting_time;
                        minutes_cost = fareresults[0].minutes_fare;
                        time = fareresults[0].time;
                        //waiting_free         = fareresults[0].waiting_free;
                        waiting_cost_min = fareresults[0].waiting_time;
                        airport_pickup_fare =
                          fareresults[0].airport_pickup_fare;
                        airport_drop_fare = fareresults[0].airport_drop_fare;
                        hourly_fare_list = fareresults[0].hourly_fare_list;
                        grace_waiting_time = fareresults[0].grace_waiting_time;
                        grace_km = fareresults[0].grace_km;
                        per_min_time = fareresults[0].per_min_time;
                        per_minutes_fare = fareresults[0].per_minutes_fare;
                        nightfare_applicable = 0;
                        evefare_applicable = 0;
                      } catch (err) {
                        //console.log(err);
                      }
                    } else {
                      hourly_fare_list = "";
                      //base_fare=min_km_range=min_fare=cancellation_fare=below_above_km_range=below_km=above_km=night_charge=night_timing_from =night_timing_to=night_fare=evening_charge=evening_timing_from=evening_timing_to=evening_fare=waiting_per_hour=minutes_cost=minutes_fare=time=waiting_free=corporate_fare=discount_fare=nightfare_applicable=evefare_applicable= airport_drop_fare=airport_pickup_fare=night_fare_per=evening_fare_per=0;
                      base_fare =
                        min_km_range =
                        min_fare =
                        cancellation_fare =
                        below_above_km_range =
                        below_km =
                        above_km =
                        night_charge =
                        night_timing_from =
                        night_timing_to =
                        night_fare =
                        evening_charge =
                        evening_timing_from =
                        evening_timing_to =
                        evening_fare =
                        waiting_per_hour =
                        minutes_cost =
                        minutes_fare =
                        time =
                        waiting_free =
                        corporate_fare =
                        discount_fare =
                        nightfare_applicable =
                        evefare_applicable =
                        airport_drop_fare =
                        airport_pickup_fare =
                        night_fare_per =
                        evening_fare_per =
                        grace_km =
                        grace_waiting_time =
                          0;
                    }

                    //var total_fare =tripfare=distance_fare=minute_per_time=minutes_fare=waiting_cost=passenger_pending_amt=tax_amount=passenger_discount = corporate_discount =payment_mod_id=advance_payment=driver_edit_status=roundtrip=credit_card_sts=payment_type=gateway_details=nightfare=eveningfare=waiting_cost=wallet_amount_used=0;
                    var total_fare =
                      (tripfare =
                      distance_fare =
                      minute_per_time =
                      minutes_fare =
                      waiting_cost =
                      passenger_pending_amt =
                      tax_amount =
                      passenger_discount =
                      corporate_discount =
                      payment_mod_id =
                      advance_payment =
                      driver_edit_status =
                      roundtrip =
                      credit_card_sts =
                      payment_type =
                      gateway_details =
                      nightfare =
                      eveningfare =
                      waiting_cost =
                      wallet_amount_used =
                      apply_estimate_fare =
                      actual_fare =
                      total_without_discount =
                        0);
                    var gateway_details = [];
                    var additionalMins = 0;

                    console.error("total_fare 1 : ", total_fare);

                    /* Sasidharan nov 16 2022 */
                    let corporatePromocode = 0;
                    let corporateGroup = "";
                    let airportTripCount = 0;

                    /* Sasidharan Nov 24 2022 */
                    var completedAirportTripCount = 0;
                    var isCorporateFreeAirportTrip = false;

                    // if(airport_pickup == 1)
                    // {
                    //  if(airport_type == 1)
                    //  {
                    //    total_fare = trip_fare = airport_pickup_fare;
                    //  }
                    //  else
                    //  {
                    //    total_fare = trip_fare = airport_drop_fare;
                    //  }
                    // }
                    // else
                    // {
                    var fare_calculation_type =
                      global.settings.fare_calculation_type;
                    try {
                      if (
                        minutes <= time &&
                        global.settings.fare_calculation_type == 2
                      ) {
                        total_fare = minutes_fare = base_fare;
                        total_without_discount = minutes_fare = base_fare;
                      }
                      console.error("total_fare 2 : ", total_fare);

                      if (
                        global.settings.fare_calculation_type == 1 ||
                        global.settings.fare_calculation_type == 3
                      ) {
                        if (distance <= min_km) {
                          total_fare = min_fare;
                          total_without_discount = min_fare;
                          distance_fare = min_fare;
                        } else {
                          if (distance < below_above_km_range) {
                            distance_fare = (distance - min_km) * below_km;
                            total_fare = base_fare + distance_fare;
                            total_without_discount = base_fare + distance_fare;
                          } else {
                            distance_fare = (distance - min_km) * above_km;
                            total_fare = base_fare + distance_fare;
                            total_without_discount = base_fare + distance_fare;
                          }

                          distance_fare = total_fare;
                        }
                        console.error("total_fare 3 : ", total_fare);
                      }

                      //console.log("minutes",minutes);

                      // console.log("minutes",minutes);
                      // console.log("time",time);
                      // console.log("total_fare",total_fare);

                      if (
                        global.settings.fare_calculation_type == 2 ||
                        global.settings.fare_calculation_type == 3
                      ) {
                        if (minutes > 0 && minutes > time) {
                          //minute_per_time = Math.ceil(minutes/time);
                          minute_per_time = Math.ceil(minutes - time);
                          additionalMins = minute_per_time;
                          //minutes_cost = minute_per_time*minutes_cost;

                          /* Sasidharan oct 04 2022 */
                          additionalMinFare =
                            minute_per_time * per_minutes_fare;
                          baseMinsFare = minutes_cost;
                          // await apimodel.updateAdditionalMinsFare(
                          //   trip_id,
                          //   additionalMinFare,
                          //   baseMinsFare
                          // );

                          let cost = +minute_per_time * +per_minutes_fare;
                          minutes_cost = +minutes_cost + cost;
                          c_fare = +total_fare + +minutes_cost;
                          console.error(
                            "_________additionalMinFare _______________ : ",
                            additionalMinFare
                          );
                          additionalMinFare = Number(
                            parseFloat(additionalMinFare).toFixed(2)
                          );
                          console.error("total_fare 4 : ", total_fare);

                          await apimodel.updateAdditionalMinsFare(
                            trip_id,
                            additionalMinFare,
                            baseMinsFare,
                            additionalMins,
                            c_fare,
                            min_fare,
                            minutes_cost
                          );

                          if (Number(c_fare) < Number(min_fare)) {
                            total_fare = minutes_fare = roundUp(min_fare, 1);
                            total_without_discount = minutes_fare = roundUp(
                              min_fare,
                              1
                            );
                          } else {
                            total_fare = minutes_fare = roundUp(c_fare, 1);
                            total_without_discount = minutes_fare = roundUp(
                              c_fare,
                              1
                            );
                          }
                          console.error("total_fare 5: ", total_fare);
                        }
                      }
                      console.log("total_fare 6", total_fare);

                      minutes_traveled = minutes;

                      if (waiting_minutes > 0) {
                        //deduct_minutes = waiting_minutes -waiting_free;

                        //deduct_minutes = deduct_minutes/60;

                        deduct_minutes = waiting_minutes / 60;

                        waiting_cost = deduct_minutes * waiting_cost_min;

                        total_fare = total_fare + waiting_cost;
                        total_without_discount =
                          total_without_discount + waiting_cost;
                      }

                      ////console.log("total_fare waiting",total_fare);
                      console.error("total_fare 7: ", total_fare);

                      waiting_time = waiting_minutes;

                      trip_fare = total_fare;
                      console.log("trip_faresss", trip_fare);
                      console.error("total_fare 8 : ", total_fare);

                      if (global.settings.q8taxi_enable == 1) {
                        tax_amount = (tax / 100) * total_fare;
                        total_fare = total_fare + tax_amount;
                        total_without_discount =
                          total_without_discount + tax_amount;
                      }
                      //console.log("heree0007");
                    } catch (err) {
                      //console.log("calc error",err);
                    }
                    console.error("total_fare 9: ", total_fare);

                    // 03 Feb 2020
                    if (global.settings.surge_pricing == 1) {
                      if (surge_price_status == 1) {
                        surge_price =
                          (surge_price_percentage / 100) * total_fare;
                        //console.log("evening fare calculation....",nightfare);
                        surge_price = parseFloat(surge_price).toFixed(2);
                        total_fare =
                          parseFloat(total_fare) + parseFloat(surge_price);

                        total_without_discount =
                          parseFloat(total_without_discount) +
                          parseFloat(surge_price);
                      }
                    }
                    console.error("total_fare 10 : ", total_fare);

                    // 03 Feb 2020

                    calculate_discount(q, promocode, total_fare).then(
                      async function (fareresults) {
                        /* Sasidharan June 22 2023 */
                        // let disableNormalPromocodeUsage = applied_corporate_promocode;
                        // if ((fareresults.passenger_discount > 0 || fareresults.corporate_discount > 0) && (!disableNormalPromocodeUsage || promocode == "KFH10")) {
                        if (
                          fareresults.passenger_discount > 0 ||
                          fareresults.corporate_discount > 0
                        ) {
                          var passenger_discount =
                            fareresults.passenger_discount;
                          var corporate_discount =
                            fareresults.corporate_discount;

                          // console.log('passenger_discount',passenger_discount);
                          // console.log('corporate_discount',corporate_discount);

                          if (isNaN(passenger_discount)) {
                            //console.log("herecheck");
                            passenger_discount = 0;
                          }
                          if (isNaN(corporate_discount)) {
                            corporate_discount = 0;
                          }

                          total_fare = total_fare - passenger_discount;
                        } else {
                          passenger_discount = corporate_discount = 0;
                        }

                        if (airport_pickup != 1) {
                          //evening fare calculation
                        }

                        if (
                          zone_fare_applicable != 0 &&
                          zone_id != 0 &&
                          zone_fare != 0
                        ) {
                          total_fare = trip_fare = zone_fare;
                          total_without_discount = zone_fare;
                        }

                        if (airport_type == 1 || airport_pickup == 1) {
                          total_fare = trip_fare = airport_pickup_fare;
                          total_without_discount = airport_pickup_fare;

                          // 03 Feb 2020
                          surge_price = 0;
                          if (
                            global.settings.surge_pricing == 1 &&
                            global.settings.surge_pricing_airport == 1
                          ) {
                            if (surge_price_status == 1) {
                              surge_price =
                                (surge_price_percentage / 100) * total_fare;
                              //console.log("evening fare calculation....",nightfare);
                              surge_price = parseFloat(surge_price).toFixed(2);
                              total_fare =
                                parseFloat(total_fare) +
                                parseFloat(surge_price);
                              total_without_discount =
                                parseFloat(total_without_discount) +
                                parseFloat(surge_price);
                            }
                          }
                          // 03 Feb 2020
                        }

                        if (airport_type == 2) {
                          total_fare = trip_fare = airport_drop_fare;
                          total_without_discount = airport_drop_fare;
                          surge_price = 0;
                          // 03 Feb 2020
                          if (
                            global.settings.surge_pricing == 1 &&
                            global.settings.surge_pricing_airport == 1
                          ) {
                            if (surge_price_status == 1) {
                              surge_price =
                                (surge_price_percentage / 100) * total_fare;
                              //console.log("evening fare calculation....",nightfare);
                              surge_price = parseFloat(surge_price).toFixed(2);
                              total_fare =
                                parseFloat(total_fare) +
                                parseFloat(surge_price);
                              total_without_discount =
                                parseFloat(total_without_discount) +
                                parseFloat(surge_price);
                            }
                          }
                          console.error("total_fare 1 : ", total_fare);

                          // 03 Feb 2020
                        }

                        if (hourly_booking == 1 && minutes_traveled) {
                          if (hourly_fare_list) {
                            var add_fare_hours = (total_fare = 0);

                            var add_fare_hours = (total_without_discount = 0);

                            fare_hours_fixed = minutes_traveled / 60;

                            var fare_hours = Math.floor(fare_hours_fixed);

                            var float_times = (fare_hours_fixed % 1).toFixed(2);

                            //Fixed above 0.25 percent ex: 1.20 hrs means 2 hrs round
                            if (float_times > 0.25) {
                              var add_fare_hours = 1;
                            }

                            //due to below 15 min only, then assign 1 hr fare
                            if (fare_hours == 0 && add_fare_hours == 0) {
                              fare_hours = 1;
                            }

                            final_hours = fare_hours + add_fare_hours;

                            console.log(
                              final_hours,
                              "final_hours----minite->",
                              float_times
                            );

                            if (hourly_fare_list[final_hours]) {
                              total_fare = trip_fare =
                                hourly_fare_list[final_hours];
                              total_without_discount =
                                hourly_fare_list[final_hours];

                              fare_calculation_type = parseInt(2);
                            }
                          }
                        }

                        /**Fixed Estimate calculation only on KM Fare**/
                        console.error("total_fare_before", total_fare);

                        //if(hourly_booking==0 && fixed_estimate_fare_type==1 && typeof(fixed_estimate_result) == 'object' && fixed_estimate_result.estimate_model == model_id && global.settings.fare_calculation_type == 1 ){
                        actual_fare = total_fare;
                        /*
                  if(hourly_booking==0 && fixed_estimate_fare_type==1 && typeof(fixed_estimate_result) == 'object' && fixed_estimate_result.estimate_model == model_id){
                  console.log('fixed estimate fare---->innn',fixed_estimate_result);

                  var estimate_km = parseFloat(fixed_estimate_result.estimate_km);
                  var estimate_fare = fixed_estimate_result.estimate_fare;
                  var differance_km = distance - estimate_km;
                  if(estimate_km !=0 && distance >= estimate_km && grace_km >= differance_km ){

                  if(total_fare < estimate_fare) {
                  total_fare = total_fare;
                  } else {
                  total_fare = estimate_fare;
                  distance_fare = 0;
                  }

                  waiting_cost= 0;

                  if( parseInt(waiting_minutes) > parseInt(grace_waiting_time) )
                  {
                  deduct_minutes = waiting_minutes - grace_waiting_time;

                  deduct_minutes = deduct_minutes/60;

                  waiting_cost = deduct_minutes*waiting_cost_min;

                  total_fare = total_fare + waiting_cost;
                  }

                  trip_fare = total_fare;

                  if(passenger_discount){

                  total_fare = total_fare - passenger_discount;
                  }

                  fare_calculation_type = parseInt(2);
                  apply_estimate_fare = 1;
                  }
                  }*/

                        /**Fixed Estimate calculation end**/
                        console.error("total_fare_after", total_fare);

                        if (global.settings.pending_payment_enable == 1) {
                          if (passenger_wallet_amount < 0) {
                            passenger_pending_amt = Math.abs(
                              passenger_wallet_amount
                            );

                            total_fare = passenger_pending_amt + total_fare;
                          }
                        } else {
                          if (passenger_wallet_amount < 0) {
                            passenger_pending_amt = Math.abs(
                              passenger_wallet_amount
                            );
                          }
                        }

                        try {
                          // night_timing_from = '10:00:00';
                          // night_timing_to = '23:00:00';

                          //night_fare_per = -15;

                          //var current_date = calcTimeZone('+3');

                          var t1 = night_timing_from.split(":");
                          var t2 = night_timing_to.split(":");

                          var d = new Date();
                          if (t1 > t2) {
                            d.setDate(d.getDate() + 1);
                          }

                          //console.log('t1',t1);
                          //console.log('t2',t2);
                          //console.log('d',d);
                          //console.log('hourly_booking',hourly_booking);
                          //console.log('airport_pickup',airport_pickup);

                          var current_date = common.date_format(
                            new Date(),
                            "yyyy-mm-dd"
                          );
                          var next_date = common.date_format(d, "yyyy-mm-dd");
                          var time_from = convert_date_to_iso(
                            current_date + " " + night_timing_from
                          );
                          var time_to = convert_date_to_iso(
                            next_date + " " + night_timing_to
                          );

                          //console.log('time_to',time_to);

                          actual_pickup_time =
                            convert_timezone(actual_pickup_time);

                          //console.log('current_date',current_date);
                          //console.log('night_fare_per',night_fare_per);
                          //console.log('night_charge',night_charge);
                          //console.log('pickup_hrs_time',actual_pickup_time);
                          //console.log('time_from',time_from);
                          //console.log('time_to',time_to);

                          if (
                            typeof night_fare_per != "undefined" &&
                            night_charge == 1 &&
                            hourly_booking != 1 &&
                            airport_pickup != 1 &&
                            zone_fare_applicable != 1 &&
                            apply_estimate_fare != 1
                          ) {
                            //console.log('pickup_hrs_time parse',actual_pickup_time.getTime());
                            //console.log('time from parse',time_from.getTime());
                            //console.log('time to parse',time_to.getTime());

                            if (
                              actual_pickup_time.getTime() >=
                                time_from.getTime() &&
                              actual_pickup_time.getTime() <= time_to.getTime()
                            ) {
                              try {
                                if (night_fare_per < 0) {
                                  try {
                                    //console.log("night fare calculation....");
                                    nightfare =
                                      (Math.abs(night_fare_per) / 100) *
                                      total_fare;
                                    //console.log("evening fare calculation....",nightfare);
                                    nightfare =
                                      parseFloat(nightfare).toFixed(2);
                                    total_fare =
                                      parseFloat(total_fare) -
                                      parseFloat(nightfare);
                                    nightfare_applicable = 1;
                                    nightfare = -nightfare;
                                  } catch (err) {
                                    //console.log(err);
                                  }
                                } else {
                                  //console.log("night fare calculation....");

                                  nightfare =
                                    (Math.abs(night_fare_per) / 100) *
                                    total_fare;
                                  //console.log("evening fare calculation....",nightfare);
                                  nightfare = parseFloat(nightfare).toFixed(2);
                                  total_fare =
                                    parseFloat(total_fare) +
                                    parseFloat(nightfare);
                                  nightfare_applicable = 1;
                                }
                              } catch (err) {
                                //console.log(err);
                              }
                            }
                          }

                          // evening_timing_from = '10:00:00';
                          //                            evening_timing_to = '23:00:00';

                          /*var current_date = common.date_format(new Date(),'dd/mmm/yyyy');

                    console.log("evening_fare_per",evening_fare_per);
                    console.log("evening_charge",evening_charge);

                    var even_time_from = new Date(current_date+' '+evening_timing_from);
                    var even_time_to = new Date(current_date+' '+evening_timing_to);*/

                          var e1 = evening_timing_from.split(":");
                          var e2 = evening_timing_to.split(":");

                          var ed = new Date();
                          if (e1 > e2) {
                            ed.setDate(ed.getDate() + 1);
                          }

                          var current_date = common.date_format(
                            new Date(),
                            "yyyy-mm-dd"
                          );
                          var next_date = common.date_format(ed, "yyyy-mm-dd");
                          var even_time_from = convert_date_to_iso(
                            current_date + " " + evening_timing_from
                          );
                          var even_time_to = convert_date_to_iso(
                            next_date + " " + evening_timing_to
                          );

                          if (
                            typeof evening_fare_per != "undefined" &&
                            evening_charge == 1 &&
                            hourly_booking != 1 &&
                            airport_pickup != 1 &&
                            zone_fare_applicable != 1 &&
                            apply_estimate_fare != 1
                          ) {
                            //console.log("herreree");

                            //console.log('actual timestamp',actual_pickup_time.getTime());
                            //console.log('evening_time_from',even_time_from.getTime());
                            //console.log('evening_time_to',even_time_to.getTime());

                            try {
                              if (
                                actual_pickup_time.getTime() >=
                                  even_time_from.getTime() &&
                                actual_pickup_time.getTime() <=
                                  even_time_to.getTime()
                              ) {
                                //console.log("herreree123456");

                                if (evening_fare_per < 0) {
                                  //console.log("evening fare calculation....");
                                  //console.log("evening fare calculation....",evening_fare_per);
                                  //console.log("evening fare calculation total_fare....",total_fare);
                                  eveningfare =
                                    (Math.abs(evening_fare_per) / 100) *
                                    total_fare;
                                  //console.log("evening fare calculation....",eveningfare);
                                  eveningfare =
                                    parseFloat(eveningfare).toFixed(2);
                                  total_fare =
                                    parseFloat(total_fare) -
                                    parseFloat(eveningfare);
                                  eveningfare = -eveningfare;

                                  evefare_applicable = 1;
                                } else {
                                  //console.log("evening fare calculation....");
                                  //console.log("evening fare calculation....",evening_fare_per);
                                  //console.log("evening fare calculation total_fare....",total_fare);
                                  eveningfare =
                                    (evening_fare_per / 100) * total_fare;
                                  //console.log("evening fare calculation....",eveningfare);
                                  eveningfare =
                                    parseFloat(eveningfare).toFixed(2);
                                  total_fare =
                                    parseFloat(eveningfare) +
                                    parseFloat(total_fare);
                                  evefare_applicable = 1;
                                }
                              }
                            } catch (err) {
                              //console.log(err);
                            }
                          }
                        } catch (err) {
                          //console.log(err);
                        }

                        //sms send
                        var replace_array = {
                          sitename: global.settings.app_name,
                        };
                        common
                          .send_sms(q, passenger_phone, 11, replace_array)
                          .then(function (checkresults) {});

                        try {
                          waiting_time = convsecstoformat(waiting_time * 60);
                          total_fare = parseFloat(total_fare).toFixed(2);
                          console.error("total_fare 12: ", total_fare);

                          total_without_discount = parseFloat(
                            total_without_discount
                          ).toFixed(2);
                          actual_fare = parseFloat(actual_fare).toFixed(2);
                          trip_fare = parseFloat(trip_fare).toFixed(2);
                          waiting_cost = parseFloat(waiting_cost).toFixed(2);
                          minutes_fare = parseFloat(minutes_fare).toFixed(2);
                          distance = parseFloat(distance).toFixed(2);
                          //trip_fare = parseFloat(trip_fare).toFixed(2);
                          minutes_traveled =
                            parseFloat(minutes_traveled).toFixed(2);

                          if (
                            typeof promocode != "undefined" &&
                            promocode != ""
                          ) {
                            let corporatePromocodeDetails =
                              await apimodel.getPromocodeDetails(promocode);
                            if (
                              corporatePromocodeDetails &&
                              typeof corporatePromocodeDetails[0] != "undefined"
                            ) {
                              if (
                                typeof corporatePromocodeDetails[0][
                                  "corporate_promocode"
                                ] != "undefined"
                              ) {
                                corporatePromocode =
                                  corporatePromocodeDetails[0][
                                    "corporate_promocode"
                                  ];
                              }
                              if (
                                typeof corporatePromocodeDetails[0][
                                  "total_airport_trips"
                                ] != "undefined"
                              ) {
                                airportTripCount =
                                  corporatePromocodeDetails[0][
                                    "total_airport_trips"
                                  ];
                              }
                              if (
                                typeof corporatePromocodeDetails[0][
                                  "corporate_group"
                                ] != "undefined"
                              ) {
                                corporateGroup =
                                  corporatePromocodeDetails[0][
                                    "corporate_group"
                                  ];
                              }
                            }
                            /* Sasidharan Nov 24 2022 */
                            if (
                              (airport_type == 1 ||
                                airport_type == 2 ||
                                airport_pickup == 1) &&
                              corporatePromocode
                            ) {
                              completedAirportTripCount =
                                await apimodel.getAirportTripCount(
                                  passenger_id,
                                  promocode
                                );
                              if (
                                completedAirportTripCount < airportTripCount
                              ) {
                                isCorporateFreeAirportTrip = true;
                              } else if (corporatePromocode) {
                                let fareresults =
                                  await shared.calculate_discount(
                                    q,
                                    promocode,
                                    total_fare
                                  );
                                if (fareresults.passenger_discount > 0) {
                                  passenger_discount =
                                    fareresults.passenger_discount;
                                  if (isNaN(passenger_discount)) {
                                    passenger_discount = 0;
                                  }
                                  total_fare = total_fare - passenger_discount;
                                }
                              }
                            }
                          }
                          console.error("total_fare 13 : ", total_fare);

                          // Sasidharan Jan 17 2025
                          // Update coupon amount
                          // let totalTripFare = +total_fare + +passenger_discount;
                          let totalTripFare = +trip_fare;
                          let startDate = global.settings.couponStartDate
                            .toISOString()
                            .substring(0, 10);
                          let endDate = global.settings.couponEndDate
                            .toISOString()
                            .substring(0, 10);
                          let isValidCoupon = shared.isCurrentDateBetween(
                            startDate,
                            endDate
                          );
                          if (
                            !isNaN(totalTripFare) &&
                            global.settings.couponStatus &&
                            isValidCoupon &&
                            +lastCouponTripId != +trip_id
                          ) {
                            couponAmount = +couponAmount + totalTripFare;
                            if (
                              +couponAmount >=
                              global.settings.couponRedeemAmount
                            ) {
                              showCouponBox = 1;
                              numberOfCoupons = Math.floor(
                                couponAmount /
                                  global.settings.couponRedeemAmount
                              );
                            }
                            // await updatePassengerCouponPoints(
                            //   passenger_id,
                            //   totalTripFare
                            // );
                            await Promise.all([
                              updatePassengerCouponPoints(
                                passenger_id,
                                totalTripFare
                              ),
                              updateLastCouponTripId(passenger_id, trip_id),
                            ]);
                          }
                          // END
                          passenger_discount = Number(
                            parseFloat(passenger_discount).toFixed(2)
                          );

                          //ramya feb 5 2026 updatePassDisInPassLog for get the value from pass log
                          await apimodel.updatePassDisInPassLog(
                            trip_id,
                            passenger_discount
                          );
                          console.error("total_fare ## : ", total_fare);

                          var details = {
                            trip_id: trip_id,
                            pass_id: passenger_id,
                            distance: distance,
                            trip_fare: parseFloat(trip_fare),
                            referdiscount: 0,
                            promo_discount_per: 0,
                            promodiscount_amount: 0,
                            total_without_discount: total_without_discount,

                            /* Sasidharan aug 12 2022 */
                            passenger_discount:
                              parseFloat(passenger_discount).toFixed(2),
                            // "passenger_discount": passenger_discount,

                            corporate_discount: corporate_discount,
                            nightfare_applicable: nightfare_applicable,
                            nightfare: parseFloat(nightfare),
                            eveningfare_applicable: evefare_applicable,
                            eveningfare: parseFloat(eveningfare),
                            waiting_time: waiting_time,
                            waiting_cost: waiting_cost,
                            tax_amount: 0,
                            subtotal_fare: total_fare,
                            total_fare: total_fare,
                            gateway_details: gateway_details,
                            pickup: pickup_location,
                            drop: drop_location,
                            pickup_latitude: pickup_latitude,
                            pickup_longitude: pickup_longitude,
                            drop_latitude: drop_latitude,
                            drop_longitude: drop_longitude,
                            company_tax: tax,
                            waiting_per_hour: waiting_per_hour,
                            roundtrip: roundtrip,
                            minutes_traveled: minutes_traveled,
                            minutes_fare: minutes_fare,
                            metric: "km",
                            gift_card_status: gift_card_status,
                            gift_card_discount: 0,
                            credit_card_status: credit_card_sts,
                            wallet_amount_used: 0,
                            airport_pickup: airport_pickup,
                            airport_type: airport_type,
                            zone_fare_applicable: zone_fare_applicable,
                            additionalMinsFare: additionalMinFare,
                            model_base_fare: model_base_fare,
                            model_base_min: model_base_min,
                            additionalMins: additionalMins,
                            payment_type: payment_type,
                            taxi_model_name: taxi_model_name,
                            passenger_wallet_amount: passenger_wallet_amount,
                            passenger_pending_amt: passenger_pending_amt,
                            fare_calculation_type: fare_calculation_type,
                            distance_fare: distance_fare,
                            apply_estimate_fare: apply_estimate_fare,
                            actual_fare: actual_fare,
                            promo_code: promocode,
                            surge_price: surge_price,

                            // Sasidharan Jan 17 2025;
                            showCouponBox: showCouponBox,
                            numberOfCoupons: numberOfCoupons,
                          };

                          var insert_trans_array = {
                            passengers_log_id: parseInt(trip_id),
                            total_without_discount: total_without_discount,
                            distance: parseFloat(distance),
                            actual_distance: parseFloat(distance),
                            distance_unit: "km",
                            tripfare: parseFloat(trip_fare),
                            fare: parseFloat(total_fare),
                            tips: 0,
                            waiting_cost: parseFloat(waiting_cost),
                            passenger_discount: parseFloat(passenger_discount),
                            corporate_amount: parseFloat(corporate_discount),
                            company_tax: parseFloat(tax_amount),
                            waiting_time: waiting_time,
                            trip_minutes: parseFloat(minutes_traveled),
                            minutes_fare: minutes_fare,
                            remarks: "-",
                            payment_type: parseInt(payment_mod_id),
                            amt: parseFloat(total_fare),
                            nightfare_applicable:
                              parseInt(nightfare_applicable),
                            nightfare: parseFloat(nightfare),
                            eveningfare_applicable:
                              parseInt(evefare_applicable),
                            eveningfare: parseFloat(eveningfare),
                            distance_fare: parseFloat(distance_fare),
                            // "admin_amount" : admin_commission,
                            // "company_amount" : company_commission,
                            //"trans_packtype" : trans_packtype,
                            payment_basis: parseInt(0),
                            notify_status: parseInt(0),
                            advance_payment: parseInt(advance_payment),
                            wallet_amount_used: parseFloat(wallet_amount_used),
                            current_date: new Date(),
                            driver_edit_status: parseInt(driver_edit_status),
                            fare_calculation_type: parseInt(
                              fare_calculation_type
                            ),
                            apply_estimate_fare: apply_estimate_fare,
                            surge_price: parseFloat(surge_price),
                          };
                          var current_time = new Date();
                        } catch (err) {
                          //console.log(err);
                        }

                        ////console.log("heree0011");
                        try {
                          console.log(
                            "giftcardAPIResponse",
                            giftCardApiResponse
                          );
                          console.log(
                            "giftcardAPIResponse",
                            giftCardApiResponse.remaining_value,
                            total_fare,
                            giftCardApiResponse.remaining_value >= total_fare
                          );
                          console.log(
                            "giftcardAPIResponse",
                            parseFloat(giftCardApiResponse.remaining_value) >=
                              total_fare
                          );
                          console.log(
                            "giftcardAPIResponse",
                            global.settings.gift_card_enable
                          );
                        } catch (err) {
                          console.log(err);
                        }

                        /* Sasidharan apr 15 2022 */
                        /* Check if the promocode is corporate if it is corporate then complete the trip with wallet amount even if the wallet amount is lesser then actual amount */

                        let applyCorporateAirportDiscount = false;
                        let corporatePromoCodeDetails = {};

                        /* Sasidharan Nov 24 2022 */
                        if (
                          corporatePromocode &&
                          (airport_type == 1 ||
                            airport_type == 2 ||
                            airport_pickup == 1) &&
                          isCorporateFreeAirportTrip
                        ) {
                          // logger.debug("Corporate promocode trip");
                          try {
                            var used_wallet_amount = 0;
                            total_fare = total_fare;
                            details.wallet_amount_used = 0;
                            details.discount_wallet_amount_used = 0;

                            if (
                              vip_user == 1 &&
                              passenger_wallet_amount >=
                                global.settings.wallet_advance_limit &&
                              passenger_wallet_amount < 0
                            ) {
                              advance_payment = 1;
                            }

                            var admin_commission =
                              global.settings.admin_commission * total_fare;
                            var company_commission =
                              total_fare - admin_commission;
                            var trans_packtype = "N";

                            /* Check if it is airport and give discount */
                            var airportTrip = 0;
                            let passenger_discount = 0;
                            let total_fare_backup = 0;
                            let appliedAirportDiscount = 0;

                            /* Sasidharan Nov 24 2022 */
                            let makeTripFareZero = false;

                            if (makeTripFareZero) {
                              airportTrip = 1;
                              total_fare_backup = total_fare;
                              total_fare = 0;
                            } else {
                              airportTrip = 1;
                              appliedAirportDiscount = 1;
                              let fareresults = await shared.calculate_discount(
                                q,
                                promocode,
                                total_fare
                              );
                              if (fareresults.passenger_discount > 0) {
                                passenger_discount =
                                  fareresults.passenger_discount;
                                insert_trans_array.passenger_discount =
                                  fareresults.passenger_discount;
                                if (isNaN(passenger_discount)) {
                                  passenger_discount = 0;
                                }
                                total_fare = total_fare - passenger_discount;
                              }
                            }

                            /* Sasidharan Nov 28 2022 */
                            // insert_trans_array.pending_amt = parseFloat(total_fare);
                            insert_trans_array.pending_amt = 0;

                            insert_trans_array.driver_edit_status =
                              parseFloat(1);
                            insert_trans_array.discount_wallet_amount_used =
                              parseFloat(0);
                            insert_trans_array.wallet_amount_used =
                              parseFloat(used_wallet_amount);
                            insert_trans_array.fare = parseFloat(0);
                            insert_trans_array.payment_type = parseInt(1);
                            insert_trans_array.admin_amount = admin_commission;
                            insert_trans_array.company_amount =
                              company_commission;
                            insert_trans_array.trans_packtype = trans_packtype;

                            if (advance_payment == 1) {
                              insert_trans_array.driver_edit_status =
                                parseInt(3);
                              insert_trans_array.advance_payment = parseInt(1);
                            }

                            await apimodel.update_admin_balance(
                              q,
                              admin_commission
                            );
                            await apimodel.update_company_balance(
                              q,
                              company_commission,
                              company_id
                            );
                            await shared.update_transaction(
                              q,
                              insert_trans_array,
                              trip_id
                            );

                            let logInfo = {
                              passengerId: parseInt(passenger_id),
                              promocode: promocode,
                              tripId: parseInt(trip_id),
                              discount: parseFloat(passenger_discount),
                              trip_amount: parseFloat(total_fare),
                              airport_trip: airportTrip,
                              createdAt: new Date(),
                              corporate_id: corporateGroup,
                              total_fare_backup: total_fare_backup,
                              is_airport_discount_applied:
                                appliedAirportDiscount,
                            };
                            let response =
                              await apimodel.createCorporatePendingPaymentLog(
                                logInfo
                              );

                            var update_trip_array = {
                              travel_status: parseInt(1),
                              discount_wallet_amount_used: 0,
                            };

                            var update_shift_array = {
                              status: "F",
                            };

                            var update_request_array = {
                              status: parseInt(8),
                            };

                            await apimodel.update_trip(
                              q,
                              update_trip_array,
                              trip_id
                            );
                            await apimodel.update_driver_shift(
                              q,
                              update_shift_array,
                              driver_id
                            );
                            await apimodel.update_request_details(
                              q,
                              update_request_array,
                              trip_id
                            );

                            if (advance_payment == 1) {
                              payment_array = {
                                add_amt: 0,
                                cash_pay: 0,
                                card_pay: 0,
                                knet_pay: 0,
                                /* Sasidharan Nov 28 2022 */
                                // 'pending_pay': parseFloat(total_fare),
                                pending_pay: 0,
                                wallet_pay: 0,
                                fare_note: "",
                                discount_wallet_pay: parseFloat(0),
                                corporate_amount: parseFloat(total_fare),
                              };
                            } else {
                              payment_array = {
                                add_amt: 0,
                                cash_pay: 0,
                                card_pay: 0,
                                knet_pay: 0,
                                /* Sasidharan Nov 28 2022 */
                                // 'pending_pay': parseFloat(total_fare),
                                pending_pay: 0,
                                wallet_pay: 0,
                                fare_note: "",
                                discount_wallet_pay: parseFloat(0),
                                corporate_amount: parseFloat(total_fare),
                              };
                            }
                            await apimodel.update_payentry(
                              q,
                              payment_array,
                              trip_id
                            );
                            // await apimodel.updateCorporateAirportTrips(q,corporatePromoCodeDetails[0]['_id']);
                            await apimodel.update_promocode(q, promocode);
                            await common.update_completed_trip_det(q, trip_id);

                            if (
                              typeof applied_corporate_promocode !=
                                "undefined" &&
                              applied_corporate_promocode != 1
                            ) {
                              common
                                .add_trip_reward(
                                  q,
                                  passenger_id,
                                  reward_per_trip
                                )
                                .then(function (checkresults) {});
                            }

                            if (advance_payment == 1) {
                              try {
                                var replace_array = {
                                  sitename: global.settings.app_name,
                                  wallet_amt:
                                    passenger_wallet_amount -
                                    used_wallet_amount,
                                };
                                console.log("replace_array", replace_array);
                                common
                                  .send_sms(
                                    q,
                                    passenger_phone,
                                    24,
                                    replace_array
                                  )
                                  .then(function (checkresults) {});
                              } catch (err) {
                                console.log("trip complete sms err", err);
                              }
                            } else {
                              var replace_array = {
                                sitename: global.settings.app_name,
                              };
                              common
                                .send_sms(q, passenger_phone, 5, replace_array)
                                .then(function (checkresults) {});
                            }

                            await apimodel.insert_trip_pay_details(q, details);
                            let ratingsresults =
                              await apimodel.get_ratings_info(q);

                            var ratings_info = [];
                            if (ratingsresults.length > 0) {
                              ratings_info = ratingsresults;
                            }
                            var trip_details = [];
                            trip_details["trip_id"] = trip_id;
                            trip_details["cash_amount_used"] = shared.roundUp(
                              0,
                              2
                            );
                            trip_details["card_amount_used"] = shared.roundUp(
                              0,
                              2
                            );

                            var actual_fare = parseFloat(total_fare).toFixed(3);
                            var socket_msg = {
                              message: "trip_fare_updated",
                              detail: trip_details,
                              driver_latitute: coordinates[1],
                              driver_longitude: coordinates[0],
                              bearing: bearing,
                              accuracy: accuracy,
                              fare: insert_trans_array.fare,
                              trip_id: trip_id,
                              base_fare: 0,
                              actual_fare: actual_fare,
                              passenger_discount:
                                insert_trans_array.passenger_discount,
                              payment_type: insert_trans_array.payment_type,
                              journey_date:
                                common.convert_timezone(actual_pickup_time),
                              driver_name: driver_name,
                              driver_image: shared.get_driver_profile(
                                appRoot,
                                driver_image,
                                hostname
                              ),
                              pickup: pickup_location,
                              drop: drop_location,
                              ratings_info: ratings_info,
                              promo_code: promocode,
                              discount_wallet_amount_used: parseFloat(0),
                              wallet_amount_used:
                                parseFloat(wallet_amount_used),
                              cash_amount_used: shared.roundUp(0, 2),
                              card_amount_used: shared.roundUp(0, 2),
                              display: 1,
                              // Sasidharan Jan 17 2025;
                              showCouponBox: showCouponBox,
                              numberOfCoupons: numberOfCoupons,
                              status: 5,
                            };
                            common.emitPassenger(passenger_id, socket_msg);
                            common.emitDispatcher(req.io);

                            /* Sasi */
                            // let pushMessage = req.__('fare_update_wallet') + ' Fare : KWD ' + total_fare;
                            let pushMessage = req.__("trip_fare_updated");
                            common.sendPush(passenger_id, pushMessage);
                            let message = {
                              message: "",
                              status: 0,
                            };
                            // message.message = req.__('fare_update_wallet') + ' Fare : KWD ' + total_fare;
                            message.message =
                              req.__("trip_fare_updated") +
                              " Fare : KWD " +
                              total_fare;
                            message.details = details;
                            message.status = 5;
                            // logger.debug("Final Complete Message 2");
                            // logger.debug(message);
                            deferred.resolve(message);
                            deferred.makeNodeResolver();
                            message = null;
                            return deferred.promise;
                          } catch (err) {
                            console.log(err);
                            throw new Error(err.message);
                          }
                        } else {
                          let discount_wallet_amount_used = 0;

                          /* Sasi */
                          let fullyPaidWithDiscountWallet = 0;
                          details.wallet_and_discount_wallet = 0;
                          details.discount_wallet_amount_used =
                            discount_wallet_amount_used;

                          if (
                            passenger_discount_wallet > 0 &&
                            passenger_discount_wallet >= total_fare &&
                            global.settings.discount_wallet_enable == 1
                          ) {
                            // logger.debug("Discount Wallet....." + total_fare)
                            try {
                              /* Sasi */
                              fullyPaidWithDiscountWallet = 1;

                              total_fare = total_fare;
                              discount_wallet_amount_used = total_fare;
                              details.discount_wallet_amount_used = total_fare;

                              var admin_commission =
                                global.settings.admin_commission * total_fare;
                              var company_commission =
                                total_fare - admin_commission;
                              var trans_packtype = "N";

                              insert_trans_array.discount_wallet_amount_used =
                                parseFloat(discount_wallet_amount_used);
                              insert_trans_array.discount_wallet_used_status =
                                parseInt(1);
                              insert_trans_array.fare = parseFloat(0);
                              insert_trans_array.payment_type = parseInt(6);
                              insert_trans_array.admin_amount =
                                admin_commission;
                              insert_trans_array.company_amount =
                                company_commission;
                              insert_trans_array.trans_packtype =
                                trans_packtype;

                              await apimodel.update_admin_balance(
                                q,
                                admin_commission
                              );
                              await apimodel.update_company_balance(
                                q,
                                company_commission,
                                company_id
                              );
                              await shared.update_transaction(
                                q,
                                insert_trans_array,
                                trip_id
                              );

                              var update_trip_array = {
                                travel_status: parseInt(1),
                                discount_wallet_used_status: parseInt(1),
                                discount_wallet_amount_used:
                                  discount_wallet_amount_used,
                              };

                              var update_shift_array = {
                                status: "F",
                              };

                              var update_request_array = {
                                status: parseInt(8),
                              };

                              await apimodel.update_trip(
                                q,
                                update_trip_array,
                                trip_id
                              );
                              await apimodel.update_driver_shift(
                                q,
                                update_shift_array,
                                driver_id
                              );
                              await apimodel.update_request_details(
                                q,
                                update_request_array,
                                trip_id
                              );

                              payment_array = {
                                add_amt: 0,
                                cash_pay: 0,
                                card_pay: 0,
                                knet_pay: 0,
                                pending_pay: 0,
                                wallet_pay: 0,
                                fare_note: "Fare update by Discount Wallet",
                                discount_wallet_pay: parseFloat(
                                  discount_wallet_amount_used
                                ),
                              };
                              await apimodel.update_payentry(
                                q,
                                payment_array,
                                trip_id
                              );
                              await shared.update_discount_wallet_logs(
                                q,
                                passenger_id,
                                discount_wallet_amount_used,
                                1,
                                trip_id,
                                4
                              );
                              await common.update_completed_trip_det(
                                q,
                                trip_id
                              );

                              var replace_array = {
                                sitename: global.settings.app_name,
                              };
                              common
                                .send_sms(q, passenger_phone, 5, replace_array)
                                .then(function (checkresults) {});

                              /* Sasidharan apr 29 - 2022 */
                              if (
                                typeof applied_corporate_promocode !=
                                  "undefined" &&
                                applied_corporate_promocode != 1
                              ) {
                                common
                                  .add_trip_reward(
                                    q,
                                    passenger_id,
                                    reward_per_trip
                                  )
                                  .then(function (checkresults) {});
                              }
                              await apimodel.insert_trip_pay_details(
                                q,
                                details
                              );
                              let ratingsresults =
                                await apimodel.get_ratings_info(q);

                              var ratings_info = [];
                              if (ratingsresults.length > 0) {
                                ratings_info = ratingsresults;
                              }
                              var trip_details = [];
                              trip_details["trip_id"] = trip_id;
                              trip_details["cash_amount_used"] = shared.roundUp(
                                0,
                                2
                              );
                              trip_details["card_amount_used"] = shared.roundUp(
                                0,
                                2
                              );

                              /* Sasidharan june 18 2022 */
                              var actual_fare = parseFloat(
                                Number(trip_fare) + Number(surge_price)
                              ).toFixed(3);
                              console.error("Socket actual fare Start");
                              console.error(
                                "Socket actual fare",
                                trip_fare,
                                surge_price,
                                actual_fare
                              );
                              console.error("Socket actual fare End");

                              /* Sasidharan aug 11 2022 */
                              let passengerWalletAmount =
                                await apimodel.get_passenger_wallet_amount(
                                  passenger_id
                                );
                              passengerWalletAmount =
                                typeof passengerWalletAmount[0].wallet_amount !=
                                "undefined"
                                  ? parseFloat(
                                      passengerWalletAmount[0].wallet_amount
                                    ).toFixed(2)
                                  : 0;

                              var socket_msg = {
                                message: "trip_fare_updated",
                                detail: trip_details,
                                driver_latitute: coordinates[1],
                                driver_longitude: coordinates[0],
                                bearing: bearing,
                                accuracy: accuracy,
                                fare: insert_trans_array.fare,
                                trip_id: trip_id,
                                base_fare: base_fare,
                                actual_fare: actual_fare,
                                passenger_discount:
                                  insert_trans_array.passenger_discount,
                                payment_type: insert_trans_array.payment_type,
                                journey_date:
                                  common.convert_timezone(actual_pickup_time),
                                driver_name: driver_name,
                                driver_image: shared.get_driver_profile(
                                  appRoot,
                                  driver_image,
                                  hostname
                                ),
                                pickup: pickup_location,
                                drop: drop_location,
                                ratings_info: ratings_info,
                                promo_code: promocode,
                                discount_wallet_amount_used: parseFloat(
                                  discount_wallet_amount_used
                                ),
                                wallet_amount_used: 0,
                                cash_amount_used: shared.roundUp(0, 2),
                                card_amount_used: shared.roundUp(0, 2),

                                /* Sasidharan aug 11 2022 */
                                corporate_promocode:
                                  applied_corporate_promocode,
                                passenger_wallet_amount: passengerWalletAmount,

                                display: 1,
                                // Sasidharan Jan 17 2025;
                                showCouponBox: showCouponBox,
                                numberOfCoupons: numberOfCoupons,
                                status: 5,
                              };
                              //console.log('socket_msgA',socket_msg);
                              //console.log('insert_trans_array',insert_trans_array);
                              //var socket_pass_id = 'P-'+passenger_id;
                              //if(typeof global.socketobj[socket_pass_id] !=='undefined'){
                              //global.socketobj[socket_pass_id].emit('update_trip_status',socket_msg);
                              common.emitPassenger(passenger_id, socket_msg);
                              common.emitDispatcher(req.io);
                              common.sendPush(
                                passenger_id,
                                req.__("fare_update_discount_wallet") +
                                  " Fare : KWD " +
                                  total_fare
                              );

                              // } else {
                              //  console.log("Socket missing...");
                              // }

                              detail = {
                                fare: total_fare,
                                pickup: pickup_location,
                                jobreferral: trip_id,
                                trip_id: trip_id,
                              };
                              message.message =
                                req.__("fare_update_discount_wallet") +
                                " Fare : KWD " +
                                total_fare;
                              message.details = details;
                              message.status = 5;
                              // logger.debug("Final Complete Message 1");
                              // logger.debug(message);
                              deferred.resolve(message);
                              deferred.makeNodeResolver();
                              message = null;
                              return deferred.promise;
                            } catch (err) {
                              console.log(err);
                              throw new Error(err.message);
                            }
                          } else if (
                            passenger_discount_wallet != 0 &&
                            passenger_discount_wallet > 0 &&
                            global.settings.discount_wallet_enable == 1
                          ) {
                            console.log("Discount Wallet.....2");
                            try {
                              discount_wallet_amount_used =
                                passenger_discount_wallet;
                              remaining_amount =
                                total_fare - discount_wallet_amount_used;
                              total_fare = remaining_amount.toFixed(2);
                              subtotal_fare = remaining_amount;
                              details.total_fare = total_fare;
                              details.subtotal_fare = subtotal_fare;
                              details.discount_wallet_amount_used =
                                discount_wallet_amount_used;
                              details.gift_card_status = gift_card_status;
                              details.gift_card_discount = 0;
                              if (
                                discount_wallet_amount_used &&
                                discount_wallet_amount_used > 0
                              ) {
                                details.discount_wallet_amount_used =
                                  discount_wallet_amount_used;
                              }
                              var pass_gateway_details = [];
                              var pay_details = [];
                              var update_trip_array = {
                                discount_wallet_amount_used:
                                  discount_wallet_amount_used,
                              };

                              /* Sasi */
                              // insert_trans_array.discount_wallet_amount_used = parseFloat(discount_wallet_amount_used);
                              // insert_trans_array.discount_wallet_used_status = parseInt(1);
                              // await shared.update_transaction(q, insert_trans_array, trip_id);
                              await apimodel
                                .update_trip(q, update_trip_array, trip_id)
                                .then(function (checkresults) {});
                            } catch (err) {
                              console.log(err);
                              throw new Error(err.message);
                            }
                          }
                          if (
                            (passenger_wallet_amount >= total_fare &&
                              passenger_wallet_amount != 0 &&
                              passenger_wallet_amount > 0 &&
                              global.settings.wallet_enable == 1) ||
                            (vip_user == 1 &&
                              passenger_wallet_amount >=
                                global.settings.wallet_advance_limit &&
                              current_time.getTime() <
                                lateral_end_date.getTime() &&
                              global.settings.wallet_enable == 1)
                          ) {
                            //console.log("heree0015");

                            var update_trip_array = {};

                            try {
                              var used_wallet_amount = 0;
                              total_fare = total_fare;
                              used_wallet_amount = total_fare;
                              details.wallet_amount_used = total_fare;
                              if (
                                discount_wallet_amount_used &&
                                discount_wallet_amount_used > 0
                              ) {
                                details.discount_wallet_amount_used =
                                  discount_wallet_amount_used;
                              }

                              if (
                                vip_user == 1 &&
                                passenger_wallet_amount >=
                                  global.settings.wallet_advance_limit &&
                                passenger_wallet_amount < 0
                              ) {
                                advance_payment = 1;
                              }

                              var admin_commission =
                                global.settings.admin_commission * total_fare;
                              var company_commission =
                                total_fare - admin_commission;
                              var trans_packtype = "N";

                              insert_trans_array.wallet_amount_used =
                                parseFloat(used_wallet_amount);
                              insert_trans_array.fare = parseFloat(0);
                              insert_trans_array.payment_type = parseInt(6);
                              insert_trans_array.admin_amount =
                                admin_commission;
                              insert_trans_array.company_amount =
                                company_commission;
                              insert_trans_array.trans_packtype =
                                trans_packtype;

                              if (advance_payment == 1) {
                                insert_trans_array.driver_edit_status =
                                  parseInt(3);
                                insert_trans_array.advance_payment =
                                  parseInt(1);
                              }

                              /* Sasi */
                              if (!fullyPaidWithDiscountWallet) {
                                if (discount_wallet_amount_used > 0) {
                                  insert_trans_array.discount_wallet_amount_used =
                                    parseFloat(discount_wallet_amount_used);
                                  insert_trans_array.discount_wallet_used_status =
                                    parseInt(1);
                                }
                              }

                              var update_trip_array = {
                                travel_status: parseInt(1),
                                discount_wallet_amount_used:
                                  discount_wallet_amount_used,
                              };
                            } catch (err) {
                              //console.log(err);
                            }

                            apimodel
                              .update_admin_balance(q, admin_commission)
                              .then(function (updatetransresults) {
                                //console.log("sadfjsgf098");
                                apimodel
                                  .update_company_balance(
                                    q,
                                    company_commission,
                                    company_id
                                  )
                                  .then(function (updatetransresults) {
                                    //console.log("sadfjsgf099");

                                    update_transaction(
                                      q,
                                      insert_trans_array,
                                      trip_id
                                    ).then(function (updatetransresults) {
                                      //console.log("sadfjsgf100");

                                      var update_trip_array = {
                                        travel_status: parseInt(1),
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
                                        .then(function (checkresults) {
                                          //console.log('here0016');
                                          apimodel
                                            .update_driver_shift(
                                              q,
                                              update_shift_array,
                                              driver_id
                                            )
                                            .then(function (checkresults) {
                                              //console.log('here0016');

                                              apimodel
                                                .update_request_details(
                                                  q,
                                                  update_request_array,
                                                  trip_id
                                                )
                                                .then(function (checkresults) {
                                                  //console.log('here0017');

                                                  /* Sasi */
                                                  let actualWalletAmountUsed =
                                                    used_wallet_amount;
                                                  if (
                                                    fullyPaidWithDiscountWallet
                                                  ) {
                                                    actualWalletAmountUsed = 0;
                                                  }

                                                  if (advance_payment == 1) {
                                                    payment_array = {
                                                      add_amt: 0,
                                                      cash_pay: 0,
                                                      card_pay: 0,
                                                      knet_pay: 0,
                                                      pending_pay: parseFloat(
                                                        actualWalletAmountUsed
                                                      ),
                                                      wallet_pay: 0,
                                                      fare_note: "",
                                                      discount_wallet_pay:
                                                        parseFloat(
                                                          discount_wallet_amount_used
                                                        ),
                                                    };
                                                  } else {
                                                    payment_array = {
                                                      add_amt: 0,
                                                      cash_pay: 0,
                                                      card_pay: 0,
                                                      knet_pay: 0,
                                                      pending_pay: 0,
                                                      wallet_pay: parseFloat(
                                                        actualWalletAmountUsed
                                                      ),
                                                      fare_note: "",
                                                      discount_wallet_pay:
                                                        parseFloat(
                                                          discount_wallet_amount_used
                                                        ),
                                                    };
                                                  }
                                                  apimodel
                                                    .update_payentry(
                                                      q,
                                                      payment_array,
                                                      trip_id
                                                    )
                                                    .then(async function (
                                                      checkresults
                                                    ) {
                                                      try {
                                                        //console.log('herer020');
                                                        update_wallet_logs(
                                                          q,
                                                          passenger_id,
                                                          used_wallet_amount,
                                                          1,
                                                          trip_id,
                                                          4
                                                        ).then(function (
                                                          checkresults
                                                        ) {
                                                          //console.log('herer025');
                                                          common
                                                            .update_completed_trip_det(
                                                              q,
                                                              trip_id
                                                            )
                                                            .then(
                                                              async function (
                                                                checkresults
                                                              ) {
                                                                if (
                                                                  advance_payment ==
                                                                  1
                                                                ) {
                                                                  try {
                                                                    var replace_array =
                                                                      {
                                                                        sitename:
                                                                          global
                                                                            .settings
                                                                            .app_name,
                                                                        wallet_amt:
                                                                          passenger_wallet_amount -
                                                                          used_wallet_amount,
                                                                      };
                                                                    console.log(
                                                                      "replace_array",
                                                                      replace_array
                                                                    );
                                                                    common
                                                                      .send_sms(
                                                                        q,
                                                                        passenger_phone,
                                                                        24,
                                                                        replace_array
                                                                      )
                                                                      .then(
                                                                        function (
                                                                          checkresults
                                                                        ) {}
                                                                      );
                                                                  } catch (err) {
                                                                    console.log(
                                                                      "trip complete sms err",
                                                                      err
                                                                    );
                                                                  }
                                                                } else {
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
                                                                }

                                                                /* Sasi */
                                                                if (
                                                                  !fullyPaidWithDiscountWallet
                                                                ) {
                                                                  // await shared.update_wallet_logs(q, passenger_id, used_wallet_amount, 1, trip_id, 4);
                                                                  if (
                                                                    discount_wallet_amount_used >
                                                                    0
                                                                  ) {
                                                                    //logger.debug("updating discount logs...");
                                                                    await shared.update_discount_wallet_used_amount(
                                                                      q,
                                                                      passenger_id,
                                                                      discount_wallet_amount_used,
                                                                      trip_id
                                                                    );
                                                                  }

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
                                                                }

                                                                apimodel
                                                                  .insert_trip_pay_details(
                                                                    q,
                                                                    details
                                                                  )
                                                                  .then(
                                                                    function (
                                                                      checkresults
                                                                    ) {}
                                                                  );

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
                                                                            trip_fare +
                                                                              surge_price
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
                                                                            fare: insert_trans_array.fare,
                                                                            trip_id:
                                                                              trip_id,
                                                                            base_fare:
                                                                              base_fare,
                                                                            actual_fare:
                                                                              actual_fare,
                                                                            passenger_discount:
                                                                              insert_trans_array.passenger_discount,
                                                                            discount_wallet_amount_used:
                                                                              parseFloat(
                                                                                discount_wallet_amount_used
                                                                              ),
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
                                                                            promo_code:
                                                                              promocode,
                                                                            display: 1,
                                                                            // Sasidharan Jan 17 2025;
                                                                            showCouponBox:
                                                                              showCouponBox,
                                                                            numberOfCoupons:
                                                                              numberOfCoupons,
                                                                            status: 5,
                                                                          };
                                                                        //console.log('socket_msgA',socket_msg);
                                                                        //console.log('insert_trans_array',insert_trans_array);
                                                                        //var socket_pass_id = 'P-'+passenger_id;
                                                                        //if(typeof global.socketobj[socket_pass_id] !=='undefined'){
                                                                        //global.socketobj[socket_pass_id].emit('update_trip_status',socket_msg);
                                                                        common.emitPassenger(
                                                                          passenger_id,
                                                                          socket_msg
                                                                        );
                                                                        common.emitDispatcher(
                                                                          req.io
                                                                        );

                                                                        /* Sasi */
                                                                        let pushMessage =
                                                                          req.__(
                                                                            "fare_update_wallet"
                                                                          ) +
                                                                          " Fare : KWD " +
                                                                          total_fare;
                                                                        if (
                                                                          discount_wallet_amount_used &&
                                                                          discount_wallet_amount_used >
                                                                            0
                                                                        ) {
                                                                          // let walletAndDiscount = shared.roundUp(parseFloat(total_fare),2) + shared.roundUp(parseFloat(discount_wallet_amount_used),2);
                                                                          let walletAndDiscount =
                                                                            shared.roundUp(
                                                                              parseFloat(
                                                                                total_fare
                                                                              ).toFixed(
                                                                                2
                                                                              ),
                                                                              2
                                                                            ) +
                                                                            shared.roundUp(
                                                                              parseFloat(
                                                                                discount_wallet_amount_used
                                                                              ).toFixed(
                                                                                2
                                                                              ),
                                                                              2
                                                                            );
                                                                          pushMessage =
                                                                            req.__(
                                                                              "wallet_and_discount_wallet"
                                                                            ) +
                                                                            " Fare : KWD " +
                                                                            walletAndDiscount;
                                                                        }

                                                                        common.sendPush(
                                                                          passenger_id,
                                                                          pushMessage
                                                                        );

                                                                        // common.sendPush(passenger_id, req.__('fare_update_wallet') + ' Fare : KWD ' + total_fare);

                                                                        // } else {
                                                                        //  console.log("Socket missing...");
                                                                        // }
                                                                      } catch (err) {
                                                                        //console.log(err);
                                                                      }

                                                                      detail = {
                                                                        fare: total_fare,
                                                                        pickup:
                                                                          pickup_location,
                                                                        jobreferral:
                                                                          trip_id,
                                                                        trip_id:
                                                                          trip_id,
                                                                      };

                                                                      /* Sasi */
                                                                      let message =
                                                                        {
                                                                          message:
                                                                            "",
                                                                          status: 0,
                                                                        };
                                                                      if (
                                                                        discount_wallet_amount_used &&
                                                                        discount_wallet_amount_used >
                                                                          0
                                                                      ) {
                                                                        // let walletAndDiscount = shared.roundUp(parseFloat(total_fare),2) + shared.roundUp(parseFloat(discount_wallet_amount_used),2);
                                                                        let walletAndDiscount =
                                                                          shared.roundUp(
                                                                            parseFloat(
                                                                              total_fare
                                                                            ).toFixed(
                                                                              2
                                                                            ),
                                                                            2
                                                                          ) +
                                                                          shared.roundUp(
                                                                            parseFloat(
                                                                              discount_wallet_amount_used
                                                                            ).toFixed(
                                                                              2
                                                                            ),
                                                                            2
                                                                          );
                                                                        message.message =
                                                                          req.__(
                                                                            "wallet_and_discount_wallet"
                                                                          ) +
                                                                          " Fare : KWD " +
                                                                          walletAndDiscount;
                                                                      } else {
                                                                        message.message =
                                                                          req.__(
                                                                            "fare_update_wallet"
                                                                          ) +
                                                                          " Fare : KWD " +
                                                                          total_fare;
                                                                      }

                                                                      message.message =
                                                                        req.__(
                                                                          "fare_update_wallet"
                                                                        ) +
                                                                        " Fare : KWD " +
                                                                        total_fare;
                                                                      message.details =
                                                                        details;
                                                                      message.status = 5;
                                                                      deferred.resolve(
                                                                        message
                                                                      );
                                                                      deferred.makeNodeResolver();
                                                                      message =
                                                                        null;
                                                                    }
                                                                  );
                                                              }
                                                            );
                                                        });
                                                      } catch (err) {
                                                        //console.log(err);
                                                      }
                                                    });
                                                });
                                            });
                                        });
                                    });
                                  });
                              });
                          } else if (
                            parseFloat(giftCardApiResponse.remaining_value) >=
                              total_fare &&
                            global.settings.gift_card_enable == 1
                          ) {
                            ////console.log("heree0015");
                            try {
                              var used_wallet_amount = 0;
                              total_fare = total_fare;
                              used_wallet_amount = total_fare;
                              details.gift_card_discount = total_fare;
                              details.passenger_discount = total_fare;

                              if (
                                discount_wallet_amount_used &&
                                discount_wallet_amount_used > 0
                              ) {
                                details.discount_wallet_amount_used =
                                  discount_wallet_amount_used;
                              }

                              var admin_commission =
                                global.settings.admin_commission * total_fare;
                              var company_commission =
                                total_fare - admin_commission;
                              var trans_packtype = "N";

                              insert_trans_array.gift_card_discount =
                                parseFloat(used_wallet_amount);
                              insert_trans_array.fare = parseFloat(0);
                              insert_trans_array.payment_type = parseInt(6);
                              insert_trans_array.admin_amount =
                                admin_commission;
                              insert_trans_array.company_amount =
                                company_commission;
                              insert_trans_array.trans_packtype =
                                trans_packtype;

                              /* Sasi */
                              if (!fullyPaidWithDiscountWallet) {
                                if (discount_wallet_amount_used > 0) {
                                  insert_trans_array.discount_wallet_amount_used =
                                    parseFloat(discount_wallet_amount_used);
                                  insert_trans_array.discount_wallet_used_status =
                                    parseInt(1);
                                }
                              }
                            } catch (err) {
                              ////console.log(err);
                            }

                            giftCardRedemption(
                              q,
                              promocode,
                              total_fare,
                              1,
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
                                insert_trans_array.redemption_amount =
                                  redemptionResults.transaction_amount;
                                insert_trans_array.redemption_trans_id =
                                  redemptionResults.reference_no;
                                insert_trans_array.redemption_type =
                                  redemptionResults.transaction_type;

                                apimodel
                                  .update_admin_balance(q, admin_commission)
                                  .then(function (updatetransresults) {
                                    ////console.log("sadfjsgf098");
                                    apimodel
                                      .update_company_balance(
                                        q,
                                        company_commission,
                                        company_id
                                      )
                                      .then(function (updatetransresults) {
                                        ////console.log("sadfjsgf099");

                                        update_transaction(
                                          q,
                                          insert_trans_array,
                                          trip_id
                                        ).then(function (updatetransresults) {
                                          ////console.log("sadfjsgf100");

                                          var update_trip_array = {
                                            travel_status: parseInt(1),
                                            gift_card_discount:
                                              details.gift_card_discount,
                                            discount_wallet_amount_used:
                                              discount_wallet_amount_used,
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
                                            .then(function (checkresults) {
                                              ////console.log('here0016');
                                              apimodel
                                                .update_driver_shift(
                                                  q,
                                                  update_shift_array,
                                                  driver_id
                                                )
                                                .then(function (checkresults) {
                                                  ////console.log('here0016');

                                                  apimodel
                                                    .update_request_details(
                                                      q,
                                                      update_request_array,
                                                      trip_id
                                                    )
                                                    .then(function (
                                                      checkresults
                                                    ) {
                                                      ////console.log('here0017');

                                                      payment_array = {
                                                        add_amt: 0,
                                                        cash_pay: 0,
                                                        card_pay: 0,
                                                        knet_pay: 0,
                                                        pending_pay: 0,
                                                        wallet_pay: 0,
                                                        fare_note:
                                                          "Discount By GiftCard - " +
                                                          used_wallet_amount +
                                                          " KWD",
                                                        discount_wallet_pay:
                                                          parseFloat(
                                                            discount_wallet_amount_used
                                                          ),
                                                      };

                                                      apimodel
                                                        .update_payentry(
                                                          q,
                                                          payment_array,
                                                          trip_id
                                                        )
                                                        .then(function (
                                                          checkresults
                                                        ) {
                                                          try {
                                                            update_gift_card_logs(
                                                              q,
                                                              passenger_id,
                                                              used_wallet_amount,
                                                              trip_id
                                                            ).then(function (
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
                                                                  apimodel
                                                                    .insert_trip_pay_details(
                                                                      q,
                                                                      details
                                                                    )
                                                                    .then(
                                                                      function (
                                                                        checkresults
                                                                      ) {}
                                                                    );

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
                                                                              trip_fare +
                                                                                surge_price
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
                                                                              fare: insert_trans_array.fare,
                                                                              trip_id:
                                                                                trip_id,
                                                                              base_fare:
                                                                                base_fare,
                                                                              actual_fare:
                                                                                actual_fare,
                                                                              passenger_discount:
                                                                                insert_trans_array.passenger_discount,
                                                                              gift_card_discount:
                                                                                parseFloat(
                                                                                  insert_trans_array.transaction_amount
                                                                                ),
                                                                              gift_card_status: 1,
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
                                                                              discount_wallet_amount_used:
                                                                                parseFloat(
                                                                                  discount_wallet_amount_used
                                                                                ),
                                                                              promo_code:
                                                                                promocode,
                                                                              display: 1,
                                                                              // Sasidharan Jan 17 2025;
                                                                              showCouponBox:
                                                                                showCouponBox,
                                                                              numberOfCoupons:
                                                                                numberOfCoupons,
                                                                              status: 5,
                                                                            };
                                                                          console.log(
                                                                            "socket_msgA",
                                                                            socket_msg
                                                                          );
                                                                          //var socket_pass_id = 'P-'+passenger_id;
                                                                          //if(typeof global.socketobj[socket_pass_id] !=='undefined'){
                                                                          //global.socketobj[socket_pass_id].emit('update_trip_status',socket_msg);
                                                                          common.emitPassenger(
                                                                            passenger_id,
                                                                            socket_msg
                                                                          );
                                                                          common.emitDispatcher(
                                                                            req.io
                                                                          );
                                                                          common.sendPush(
                                                                            passenger_id,
                                                                            req.__(
                                                                              "fare_update_giftcard"
                                                                            ) +
                                                                              " Fare : KWD " +
                                                                              total_fare
                                                                          );

                                                                          // } else {
                                                                          //  ////console.log("Socket missing...");
                                                                          // }
                                                                        } catch (err) {
                                                                          ////console.log(err);
                                                                        }

                                                                        detail =
                                                                          {
                                                                            fare: total_fare,
                                                                            pickup:
                                                                              pickup_location,
                                                                            jobreferral:
                                                                              trip_id,
                                                                            trip_id:
                                                                              trip_id,
                                                                          };
                                                                        message.message =
                                                                          req.__(
                                                                            "fare_update_giftcard"
                                                                          ) +
                                                                          " Fare : KWD " +
                                                                          total_fare;
                                                                        message.details =
                                                                          details;
                                                                        message.status = 5;
                                                                        deferred.resolve(
                                                                          message
                                                                        );
                                                                        deferred.makeNodeResolver();
                                                                        message =
                                                                          null;
                                                                      }
                                                                    );
                                                                });
                                                            });
                                                          } catch (err) {
                                                            ////console.log(err);
                                                          }
                                                        });
                                                    });
                                                });
                                            });
                                        });
                                      });
                                  });
                              } else {
                                message.message = req.__("try_again");
                                message.status = -1;
                                deferred.resolve(message);
                                deferred.makeNodeResolver();
                                message = null;
                              }
                            });
                          } else if (
                            global.settings.hesabe_status &&
                            !applied_corporate_promocode
                          ) {
                            try {
                              let walletAmount =
                                (passenger_wallet_amount &&
                                  passenger_wallet_amount > 0 &&
                                  global.settings.wallet_enable) > 0
                                  ? passenger_wallet_amount
                                  : 0;
                              let discountWalletAmountUsed =
                                discount_wallet_amount_used &&
                                discount_wallet_amount_used > 0
                                  ? discount_wallet_amount_used
                                  : 0;
                              let giftcardAmount =
                                parseFloat(
                                  giftCardApiResponse.remaining_value
                                ) > 0 && global.settings.gift_card_enable
                                  ? parseFloat(
                                      giftCardApiResponse.remaining_value
                                    )
                                  : 0;

                              let totalFare =
                                total_fare - (+walletAmount + +giftcardAmount);
                              console.error("totalFare : ", totalFare);
                              console.error("walletAmount : ", walletAmount);
                              details.wallet_and_discount_wallet =
                                +walletAmount + +discountWalletAmountUsed;
                              total_fare = total_fare;
                              details.total_fare = totalFare;
                              details.wallet_amount_used = walletAmount;
                              details["discount_wallet_amount_used"] =
                                discountWalletAmountUsed;
                              details["giftcardAmount"] = giftcardAmount;

                              let updateArray = {
                                paymentInProgress: 1,
                              };
                              await apimodel.changePaymentProcessStatus(
                                trip_id,
                                updateArray
                              );

                              let processingPayment = {
                                status: 11,
                                message: "Processing payment.",
                                loading: 1,
                              };
                              common.emitPassenger(
                                passenger_id,
                                processingPayment
                              );

                              let customerCardDetails = await getDefaultCard(
                                passenger_id
                              );
                              let paymentResponse = null;
                              if (
                                customerCardDetails &&
                                Object.keys(customerCardDetails).length > 0 &&
                                customerCardDetails.token
                              ) {
                                let token = customerCardDetails.token;
                                paymentResponse =
                                  await createMercharntTransaction({
                                    cardToken: token,
                                    amount: totalFare,
                                    orderReferenceNumber: `${Date.now()}_${passenger_id}`,
                                  });
                              } else {
                                let updateArray = {
                                  paymentInProgress: 0,
                                };
                                await apimodel.changePaymentProcessStatus(
                                  trip_id,
                                  updateArray
                                );
                              }

                              if (
                                paymentResponse &&
                                paymentResponse.status &&
                                Object.keys(paymentResponse.data).length > 0
                              ) {
                                paymentResponse = paymentResponse.data;
                                details["discount_wallet_amount_used"] =
                                  discountWalletAmountUsed;
                                details["wallet_amount_used"] = walletAmount;

                                var admin_commission =
                                  global.settings.admin_commission * total_fare;
                                var company_commission =
                                  total_fare - admin_commission;
                                var trans_packtype = "N";

                                insert_trans_array[
                                  "discount_wallet_amount_used"
                                ] = parseFloat(discountWalletAmountUsed);
                                insert_trans_array.discount_wallet_used_status =
                                  parseInt(1);
                                insert_trans_array.fare = parseFloat(totalFare);
                                insert_trans_array.payment_type = parseInt(3);
                                insert_trans_array.admin_amount =
                                  admin_commission;
                                insert_trans_array.company_amount =
                                  company_commission;
                                insert_trans_array.trans_packtype =
                                  trans_packtype;
                                insert_trans_array.hesabeAutoPayment = 1;

                                await apimodel.update_admin_balance(
                                  q,
                                  admin_commission
                                );
                                await apimodel.update_company_balance(
                                  q,
                                  company_commission,
                                  company_id
                                );
                                await shared.update_transaction(
                                  q,
                                  insert_trans_array,
                                  trip_id
                                );

                                var update_trip_array = {
                                  travel_status: 1,
                                  hesabeAutoPayment: 1,
                                  paymentInProgress: 0,
                                  hesabePaymentToken: paymentResponse.token,
                                  hesabePaymentId: paymentResponse.paymentId,
                                  deductedAmountFromHesabe:
                                    typeof paymentResponse.amount != "undefined"
                                      ? paymentResponse.amount
                                      : 0,
                                  card: {
                                    cardNumber: customerCardDetails.id,
                                  },
                                };

                                if (discountWalletAmountUsed > 0) {
                                  update_trip_array[
                                    "discount_wallet_used_status"
                                  ] = 1;
                                  update_trip_array[
                                    "discount_wallet_amount_used"
                                  ] = discountWalletAmountUsed;
                                }
                                if (giftcardAmount > 0) {
                                  update_trip_array["giftcardStatus"] = 1;
                                  update_trip_array["giftcardAmount"] =
                                    giftcardAmount;
                                }

                                var update_shift_array = { status: "F" };
                                var update_request_array = {
                                  status: parseInt(8),
                                };

                                // console.error(
                                //   "===================== ISSUE ===================="
                                // );
                                await apimodel.update_trip(
                                  q,
                                  update_trip_array,
                                  trip_id
                                );
                                await apimodel.update_driver_shift(
                                  q,
                                  update_shift_array,
                                  driver_id
                                );
                                await apimodel.update_request_details(
                                  q,
                                  update_request_array,
                                  trip_id
                                );

                                payment_array = {
                                  add_amt: 0,
                                  cash_pay: 0,
                                  card_pay: totalFare,
                                  knet_pay: 0,
                                  pending_pay: 0,
                                  wallet_pay: walletAmount,
                                  fare_note:
                                    "Fare updated by hesabe payment gateway",
                                  discount_wallet_pay: parseFloat(
                                    discountWalletAmountUsed
                                  ),
                                };

                                // console.error(payment_array, "payment_array");

                                await apimodel.update_payentry(
                                  q,
                                  payment_array,
                                  trip_id
                                );

                                if (discountWalletAmountUsed > 0) {
                                  await shared.update_discount_wallet_logs(
                                    q,
                                    passenger_id,
                                    discount_wallet_amount_used,
                                    1,
                                    trip_id,
                                    4
                                  );
                                }

                                if (walletAmount > 0) {
                                  await update_wallet_logs(
                                    q,
                                    passenger_id,
                                    walletAmount,
                                    1,
                                    trip_id,
                                    4
                                  );
                                }

                                if (giftcardAmount > 0) {
                                  try {
                                    await giftCardRedemption(
                                      q,
                                      promocode,
                                      giftcardAmount,
                                      1,
                                      passenger_email,
                                      passenger_first_name,
                                      passenger_last_name,
                                      passenger_id,
                                      trip_id
                                    );
                                  } catch (err) {
                                    console.error(err);
                                  }
                                }

                                await common.update_completed_trip_det(
                                  q,
                                  trip_id
                                );

                                var replace_array = {
                                  sitename: global.settings.app_name,
                                };
                                common
                                  .send_sms(
                                    q,
                                    passenger_phone,
                                    5,
                                    replace_array
                                  )
                                  .then(function (checkresults) {});

                                /* Sasidharan apr 29 - 2022 */
                                if (
                                  typeof applied_corporate_promocode !=
                                    "undefined" &&
                                  applied_corporate_promocode != 1
                                ) {
                                  common
                                    .add_trip_reward(
                                      q,
                                      passenger_id,
                                      reward_per_trip
                                    )
                                    .then(function (checkresults) {});
                                }
                                await apimodel.insert_trip_pay_details(
                                  q,
                                  details
                                );
                                let ratingsresults =
                                  await apimodel.get_ratings_info(q);

                                var ratings_info = [];
                                if (ratingsresults.length > 0) {
                                  ratings_info = ratingsresults;
                                }
                                var trip_details = {};
                                trip_details["trip_id"] = trip_id;
                                trip_details["cash_amount_used"] =
                                  shared.roundUp(0, 2);
                                trip_details["card_amount_used"] =
                                  shared.roundUp(0, 2);

                                var actual_fare = parseFloat(
                                  Number(trip_fare) + Number(surge_price)
                                ).toFixed(3);

                                let passengerWalletAmount =
                                  await apimodel.get_passenger_wallet_amount(
                                    passenger_id
                                  );

                                passengerWalletAmount =
                                  typeof passengerWalletAmount[0]
                                    .wallet_amount != "undefined"
                                    ? parseFloat(
                                        passengerWalletAmount[0].wallet_amount
                                      ).toFixed(2)
                                    : 0;

                                var socket_msg = {
                                  message: "trip_fare_updated",
                                  detail: trip_details,
                                  driver_latitute: coordinates[1],
                                  driver_longitude: coordinates[0],
                                  bearing: bearing,
                                  accuracy: accuracy,
                                  fare: insert_trans_array.fare,
                                  trip_id: trip_id,
                                  base_fare: base_fare,
                                  base_fare: base_fare,
                                  actual_fare: +actual_fare,
                                  deductedNegativeWalletAmount: 0,
                                  actual_fare: actual_fare,
                                  passenger_discount:
                                    insert_trans_array.passenger_discount,
                                  payment_type: insert_trans_array.payment_type,
                                  journey_date:
                                    common.convert_timezone(actual_pickup_time),
                                  driver_name: driver_name,
                                  driver_image: shared.get_driver_profile(
                                    appRoot,
                                    driver_image,
                                    hostname
                                  ),
                                  pickup: pickup_location,
                                  drop: drop_location,
                                  ratings_info: ratings_info,
                                  promo_code: promocode,
                                  discount_wallet_amount_used: parseFloat(
                                    discount_wallet_amount_used
                                  ),
                                  wallet_amount_used: 0,
                                  cash_amount_used: shared.roundUp(0, 2),
                                  card_amount_used: shared.roundUp(0, 2),
                                  corporate_promocode:
                                    applied_corporate_promocode,
                                  passenger_wallet_amount:
                                    passengerWalletAmount,
                                  display: 1,
                                  // Sasidharan Jan 17 2025;
                                  showCouponBox: showCouponBox,
                                  numberOfCoupons: numberOfCoupons,
                                  status: 5,
                                };

                                // console.error("SOCKET MSG", socket_msg);

                                common.emitPassenger(passenger_id, socket_msg);
                                common.emitDispatcher(req.io);
                                common.sendPush(
                                  passenger_id,
                                  req.__("fare_updated_through_tap") +
                                    " Fare : KWD " +
                                    total_fare
                                );

                                detail = {
                                  fare: total_fare,
                                  pickup: pickup_location,
                                  jobreferral: trip_id,
                                  trip_id: trip_id,
                                };
                                message.message =
                                  req.__("fare_updated_through_tap") +
                                  " Fare : KWD " +
                                  total_fare;

                                // console.error("Reached END");

                                message.details = details;
                                message.status = 5;
                                deferred.resolve(message);
                                deferred.makeNodeResolver();
                                message = null;
                              } else {
                                let updateArray = {
                                  paymentInProgress: 0,
                                  paymentResponse: paymentResponse,
                                };
                                await apimodel.changePaymentProcessStatus(
                                  trip_id,
                                  updateArray
                                );
                                var pass_gateway_details = [];
                                var pay_details = [];

                                apimodel
                                  .gateway_details(q)
                                  .then(async function (fareresults) {
                                    i = 0;
                                    fareresults.forEach(function (val) {
                                      var pay_mode_name = val.pay_mod_name;
                                      var pay_mode_id = val._id;
                                      pay_mode_name = pay_mode_name
                                        .replace("_", "")
                                        .toLowerCase();
                                      fareresults[i]["image_normal"] =
                                        hostname +
                                        "/" +
                                        "public/images/" +
                                        pay_mode_name +
                                        "_normal.png";
                                      fareresults[i]["image_active"] =
                                        hostname +
                                        "/" +
                                        "public/images/" +
                                        pay_mode_name +
                                        "_active.png";

                                      if (
                                        pay_mode_id == 3 ||
                                        pay_mode_id == 6
                                      ) {
                                        pass_gateway_details.push(
                                          fareresults[i]
                                        );
                                      }
                                      i++;
                                    });
                                    details.gateway_details = fareresults;
                                    if (
                                      discount_wallet_amount_used &&
                                      discount_wallet_amount_used > 0
                                    ) {
                                      details["discount_wallet_amount_used"] =
                                        discount_wallet_amount_used;
                                    }

                                    if (travel_status != 5) {
                                      try {
                                        var trip_details = [];
                                        trip_details["trip_id"] = trip_id;

                                        details.total_fare = shared.roundUp(
                                          details.total_fare,
                                          2
                                        );
                                        details.trip_fare = shared.roundUp(
                                          details.trip_fare,
                                          2
                                        );
                                        details.discount_wallet_amount_used =
                                          shared.roundUp(
                                            details.discount_wallet_amount_used,
                                            2
                                          );
                                        details.wallet_amount_used =
                                          shared.roundUp(
                                            details.wallet_amount_used,
                                            2
                                          );

                                        pay_details = details;

                                        pay_details.gateway_details = [];

                                        pay_details.gateway_details =
                                          pass_gateway_details;
                                        console.error(
                                          "******************************************"
                                        );
                                        console.error(
                                          "pay_details frist : ",
                                          pay_details
                                        );
                                        console.error(
                                          "******************************************"
                                        );

                                        var socket_msg = {
                                          message:
                                            req.app.locals.passenger_i18n.__(
                                              "trip_completed"
                                            ),
                                          detail: trip_details,
                                          trip_pay_details: pay_details,
                                          driver_latitute: coordinates[1],
                                          driver_longitude: coordinates[0],
                                          bearing: bearing,
                                          accuracy: accuracy,
                                          finished_fare: total_fare,
                                          trip_id: trip_id,
                                          display: 1,
                                          status: 4,
                                        };

                                        //console.log('socket_msg',socket_msg);

                                        var socket_pass_id =
                                          "P-" + passenger_id;

                                        //console.log('socket_pass_id',socket_pass_id);

                                        //if(active_passengers.includes(socket_pass_id))
                                        // if(typeof global.socketobj[socket_pass_id] !=='undefined'){
                                        // global.socketobj[socket_pass_id].emit('update_trip_status',socket_msg);
                                        // } else {
                                        //  console.log("Socket missing...");
                                        // }
                                      } catch (err) {
                                        //console.log(err);
                                      }
                                      //console.log("herefghafddfs",details);

                                      common.emitPassenger(
                                        passenger_id,
                                        socket_msg
                                      );

                                      common.emitDispatcher(req.io);

                                      /* Sasidharan aug 11 2022 added async */
                                      apimodel
                                        .insert_trip_pay_details(q, details)
                                        .then(async function (checkresults) {
                                          message.message = req.__(
                                            "trip_completed_driver"
                                          );

                                          /* Sasidharan aug 11 2022 */
                                          let passengerWalletAmount =
                                            await apimodel.get_passenger_wallet_amount(
                                              passenger_id
                                            );
                                          passengerWalletAmount =
                                            typeof passengerWalletAmount[0]
                                              .wallet_amount != "undefined"
                                              ? parseFloat(
                                                  passengerWalletAmount[0]
                                                    .wallet_amount
                                                ).toFixed(2)
                                              : 0;

                                          if (passengerWalletAmount > 0) {
                                            passengerWalletAmount =
                                              parseFloat(0.0).toFixed(2);
                                          }

                                          details.passenger_wallet_amount =
                                            passengerWalletAmount;
                                          details.corporate_promocode =
                                            applied_corporate_promocode;

                                          message.details = details;
                                          message.status = 4;
                                          deferred.resolve(message);
                                          deferred.makeNodeResolver();
                                          message = null;
                                        });
                                    } else {
                                      message.message = req.__(
                                        "trip_completed_driver"
                                      );

                                      /* Sasidharan aug 11 2022 */
                                      let passengerWalletAmount =
                                        await apimodel.get_passenger_wallet_amount(
                                          passenger_id
                                        );
                                      passengerWalletAmount =
                                        typeof passengerWalletAmount[0]
                                          .wallet_amount != "undefined"
                                          ? parseFloat(
                                              passengerWalletAmount[0]
                                                .wallet_amount
                                            ).toFixed(2)
                                          : 0;

                                      if (passengerWalletAmount > 0) {
                                        passengerWalletAmount =
                                          parseFloat(0.0).toFixed(2);
                                      }

                                      details.passenger_wallet_amount =
                                        passengerWalletAmount;
                                      details.corporate_promocode =
                                        applied_corporate_promocode;

                                      message.details = details;
                                      message.status = 4;
                                      deferred.resolve(message);
                                      deferred.makeNodeResolver();
                                      message = null;
                                    }
                                  });
                              }
                            } catch (err) {
                              console.log(err);
                              throw new Error(err.message);
                            }
                          } else if (
                            global.settings.tapPaymentGatewayStatus &&
                            global.settings.isCardDetailsMandatory &&
                            !applied_corporate_promocode &&
                            customerTapPaymentId && // Sasidharan Aug 5 2024 added customerTapPaymentId filter.
                            !premiumCustomer
                          ) {
                            /* Sasidharan May 06 2024 */
                            try {
                              let walletAmount =
                                (passenger_wallet_amount &&
                                  passenger_wallet_amount > 0 &&
                                  global.settings.wallet_enable) > 0
                                  ? passenger_wallet_amount
                                  : 0;
                              let discountWalletAmountUsed =
                                discount_wallet_amount_used &&
                                discount_wallet_amount_used > 0
                                  ? discount_wallet_amount_used
                                  : 0;
                              let giftcardAmount =
                                parseFloat(
                                  giftCardApiResponse.remaining_value
                                ) > 0 && global.settings.gift_card_enable
                                  ? parseFloat(
                                      giftCardApiResponse.remaining_value
                                    )
                                  : 0;

                              let totalFare =
                                total_fare - (+walletAmount + +giftcardAmount);

                              /* Sasidharan Sep 9 2024 */
                              let deductedNegativeWalletAmount = 0;
                              if (
                                +passenger_wallet_amount < 0 &&
                                +passenger_wallet_amount >=
                                  global.settings
                                    .maximumNegativeWalletAmountToDeduct
                              ) {
                                deductedNegativeWalletAmount = +parseFloat(
                                  passenger_wallet_amount
                                ).toFixed(2);
                                let positiveNum = +Math.abs(
                                  deductedNegativeWalletAmount
                                ).toFixed(2);
                                totalFare += positiveNum;
                              }

                              console.error("========== ERROR ============");
                              console.error(deductedNegativeWalletAmount);
                              console.error(totalFare);
                              console.error(
                                global.settings
                                  .maximumNegativeWalletAmountToDeduct
                              );
                              console.error(+passenger_wallet_amount);
                              console.error(
                                "========== ERROR END ============"
                              );

                              /* Sasidharan May 13 2024 */
                              details.wallet_and_discount_wallet =
                                +walletAmount + +discountWalletAmountUsed;

                              total_fare = total_fare;
                              details.total_fare = totalFare;
                              details.wallet_amount_used = walletAmount;
                              details["discount_wallet_amount_used"] =
                                discountWalletAmountUsed;
                              details["giftcardAmount"] = giftcardAmount;

                              /* Sasidharan May 13 2024 */

                              /* Sasidharan sep 16 2024 */
                              let updateArray = {
                                paymentInProgress: 1,
                              };
                              await apimodel.changePaymentProcessStatus(
                                trip_id,
                                updateArray
                              );

                              let processingPayment = {
                                status: 11,
                                message: "Processing payment.",
                                loading: 1,
                              };
                              common.emitPassenger(
                                passenger_id,
                                processingPayment
                              );

                              let customerCardDetails = await getCustomerInfo(
                                customerTapPaymentId
                              );
                              let paymentResponse = null;

                              console.error(customerCardDetails);

                              if (
                                customerCardDetails &&
                                Object.keys(customerCardDetails).length > 0 &&
                                customerCardDetails.payment_agreements &&
                                customerCardDetails.payment_agreements.length >
                                  0 &&
                                customerCardDetails.cards &&
                                customerCardDetails.cards.length > 0
                              ) {
                                let cardPaymentAgreements =
                                  customerCardDetails.payment_agreements;
                                let customerSavedCards =
                                  customerCardDetails.cards;
                                let defaultCard = customerSavedCards[0];

                                customerSavedCards.forEach((card) => {
                                  if (card.default.toString() === "true") {
                                    defaultCard = card;
                                  }
                                });

                                let paymentAgreementId = "";
                                for (
                                  let i = 0;
                                  i < cardPaymentAgreements.length;
                                  i++
                                ) {
                                  if (
                                    cardPaymentAgreements[i]["contract"][
                                      "id"
                                    ] === defaultCard.id
                                  ) {
                                    paymentAgreementId =
                                      cardPaymentAgreements[i]["id"];
                                  }
                                }

                                let card = {
                                  id: defaultCard.id,
                                  paymentAgreementId: paymentAgreementId,
                                };

                                paymentResponse =
                                  await deductMoneyFromCustomerAccount(
                                    { customerTapPaymentId },
                                    {
                                      tripFare: totalFare,
                                      metadata: {
                                        tripId: trip_id,
                                        amount: totalFare,
                                        distance: distance,
                                        type: "trip",
                                        minutes:
                                          typeof minutes_traveled != "undefined"
                                            ? parseFloat(minutes_traveled)
                                            : 0,
                                        waitingCost:
                                          typeof minutes_traveled != "undefined"
                                            ? parseFloat(waiting_cost).toFixed(
                                                2
                                              )
                                            : 0,
                                      },
                                    },
                                    card
                                  );
                              } else {
                                /* Sasidharan May 13 2024 */

                                /* Sasidharan sep 16 2024 */
                                let updateArray = {
                                  paymentInProgress: 0,
                                };
                                await apimodel.changePaymentProcessStatus(
                                  trip_id,
                                  updateArray
                                );
                              }

                              if (
                                paymentResponse &&
                                Object.keys(paymentResponse).length > 0 &&
                                paymentResponse.status == "CAPTURED"
                              ) {
                                var sourceObj = paymentResponse.source
                                  ? paymentResponse.source
                                  : {};
                                var cardObj = paymentResponse.card
                                  ? paymentResponse.card
                                  : {};
                                var amt =
                                  typeof paymentResponse.amount != "undefined"
                                    ? paymentResponse.amount
                                    : 0;
                                var insert_array = {
                                  passenger_id: parseInt(passenger_id),
                                  change_amount: parseFloat(amt),
                                  wallet_amount: parseFloat(0),
                                  created_date: new Date(),
                                  created_by: parseInt(passenger_id),
                                  recharge_type: parseInt(4),
                                  trip_id: trip_id,
                                  paid_status: parseInt(1),
                                  payment_source: sourceObj,
                                  card_details: cardObj,
                                  debit: debit,
                                };

                                apimodel_two
                                  .insert_wallet_logs(q, insert_array)
                                  .then(function (detailresults) {});

                                details["discount_wallet_amount_used"] =
                                  discountWalletAmountUsed;
                                details["wallet_amount_used"] = walletAmount;

                                var admin_commission =
                                  global.settings.admin_commission * total_fare;
                                var company_commission =
                                  total_fare - admin_commission;
                                var trans_packtype = "N";

                                insert_trans_array[
                                  "discount_wallet_amount_used"
                                ] = parseFloat(discountWalletAmountUsed);
                                insert_trans_array.discount_wallet_used_status =
                                  parseInt(1);
                                insert_trans_array.fare = parseFloat(totalFare);
                                insert_trans_array.payment_type = parseInt(3);
                                insert_trans_array.admin_amount =
                                  admin_commission;
                                insert_trans_array.company_amount =
                                  company_commission;
                                insert_trans_array.trans_packtype =
                                  trans_packtype;
                                insert_trans_array.tapAutoPayment = 1;

                                await apimodel.update_admin_balance(
                                  q,
                                  admin_commission
                                );
                                await apimodel.update_company_balance(
                                  q,
                                  company_commission,
                                  company_id
                                );
                                await shared.update_transaction(
                                  q,
                                  insert_trans_array,
                                  trip_id
                                );

                                var update_trip_array = {
                                  travel_status: 1,
                                  tapAutoPayment: 1,
                                  chargeId: paymentResponse.id,
                                  /* Sasidharan May 13 2024 */
                                  paymentInProgress: 0,
                                  /* Sasidharan May 17 2024 */

                                  /* Sasidharan Sep 9 2024 */
                                  deductedNegativeWalletAmount:
                                    deductedNegativeWalletAmount,

                                  card:
                                    typeof paymentResponse.card != "undefined"
                                      ? paymentResponse.card
                                      : {},
                                  deductedAmountFromTap:
                                    typeof paymentResponse.amount != "undefined"
                                      ? paymentResponse.amount
                                      : 0,
                                };

                                /* Sasidharan Sep 9 2024 */
                                if (
                                  deductedNegativeWalletAmount != 0 &&
                                  deductedNegativeWalletAmount < 0
                                ) {
                                  await apimodel.updateWalletAmount(
                                    passenger_id,
                                    +Math.abs(passenger_wallet_amount)
                                  );
                                }

                                if (discountWalletAmountUsed > 0) {
                                  update_trip_array[
                                    "discount_wallet_used_status"
                                  ] = 1;
                                  update_trip_array[
                                    "discount_wallet_amount_used"
                                  ] = discountWalletAmountUsed;
                                }
                                if (giftcardAmount > 0) {
                                  update_trip_array["giftcardStatus"] = 1;
                                  update_trip_array["giftcardAmount"] =
                                    giftcardAmount;
                                }

                                var update_shift_array = { status: "F" };
                                var update_request_array = {
                                  status: parseInt(8),
                                };

                                await apimodel.update_trip(
                                  q,
                                  update_trip_array,
                                  trip_id
                                );
                                await apimodel.update_driver_shift(
                                  q,
                                  update_shift_array,
                                  driver_id
                                );
                                await apimodel.update_request_details(
                                  q,
                                  update_request_array,
                                  trip_id
                                );

                                payment_array = {
                                  add_amt: 0,
                                  cash_pay: 0,
                                  card_pay: 0,
                                  knet_pay: totalFare,
                                  pending_pay: 0,
                                  wallet_pay: walletAmount,
                                  fare_note:
                                    "Fare updated by tap payment gateway",
                                  discount_wallet_pay: parseFloat(
                                    discountWalletAmountUsed
                                  ),
                                };
                                await apimodel.update_payentry(
                                  q,
                                  payment_array,
                                  trip_id
                                );

                                if (discountWalletAmountUsed > 0) {
                                  await shared.update_discount_wallet_logs(
                                    q,
                                    passenger_id,
                                    discount_wallet_amount_used,
                                    1,
                                    trip_id,
                                    4
                                  );
                                }

                                if (walletAmount > 0) {
                                  await update_wallet_logs(
                                    q,
                                    passenger_id,
                                    walletAmount,
                                    1,
                                    trip_id,
                                    4
                                  );
                                }

                                if (giftcardAmount > 0) {
                                  try {
                                    await giftCardRedemption(
                                      q,
                                      promocode,
                                      giftcardAmount,
                                      1,
                                      passenger_email,
                                      passenger_first_name,
                                      passenger_last_name,
                                      passenger_id,
                                      trip_id
                                    );
                                  } catch (err) {
                                    console.error(err);
                                  }
                                }

                                await common.update_completed_trip_det(
                                  q,
                                  trip_id
                                );

                                var replace_array = {
                                  sitename: global.settings.app_name,
                                };
                                await common.send_sms(
                                  q,
                                  passenger_phone,
                                  5,
                                  replace_array
                                );

                                /* Sasidharan apr 29 - 2022 */
                                if (
                                  typeof applied_corporate_promocode !=
                                    "undefined" &&
                                  applied_corporate_promocode != 1
                                ) {
                                  await common.add_trip_reward(
                                    q,
                                    passenger_id,
                                    reward_per_trip
                                  );
                                }
                                await apimodel.insert_trip_pay_details(
                                  q,
                                  details
                                );
                                let ratingsresults =
                                  await apimodel.get_ratings_info(q);

                                var ratings_info = [];
                                if (ratingsresults.length > 0) {
                                  ratings_info = ratingsresults;
                                }
                                var trip_details = {};
                                trip_details["trip_id"] = trip_id;
                                trip_details["cash_amount_used"] =
                                  shared.roundUp(0, 2);
                                trip_details["card_amount_used"] =
                                  shared.roundUp(0, 2);

                                var actual_fare = parseFloat(
                                  Number(trip_fare) + Number(surge_price)
                                ).toFixed(3);

                                var socket_msg = {
                                  message: "trip_fare_updated",
                                  detail: trip_details,
                                  driver_latitute: coordinates[1],
                                  driver_longitude: coordinates[0],
                                  bearing: bearing,
                                  accuracy: accuracy,
                                  fare: insert_trans_array.fare,
                                  trip_id: trip_id,

                                  /* Sasidharan sep 16 2024 */
                                  base_fare: base_fare,
                                  actual_fare:
                                    +actual_fare +
                                    +Math.abs(
                                      deductedNegativeWalletAmount
                                    ).toFixed(2),
                                  deductedNegativeWalletAmount: +Math.abs(
                                    passenger_wallet_amount
                                  ),

                                  passenger_discount:
                                    insert_trans_array.passenger_discount,
                                  payment_type: insert_trans_array.payment_type,
                                  journey_date:
                                    common.convert_timezone(actual_pickup_time),
                                  driver_name: driver_name,
                                  driver_image: shared.get_driver_profile(
                                    appRoot,
                                    driver_image,
                                    hostname
                                  ),
                                  pickup: pickup_location,
                                  drop: drop_location,
                                  ratings_info: ratings_info,
                                  promo_code: promocode,
                                  discount_wallet_amount_used: parseFloat(
                                    discount_wallet_amount_used
                                  ),
                                  wallet_amount_used: walletAmount,
                                  cash_amount_used: shared.roundUp(0, 2),
                                  card_amount_used: shared.roundUp(
                                    totalFare,
                                    2
                                  ),
                                  corporate_promocode:
                                    applied_corporate_promocode,
                                  passenger_wallet_amount: walletAmount,
                                  display: 1,
                                  // Sasidharan Jan 17 2025;
                                  showCouponBox: showCouponBox,
                                  numberOfCoupons: numberOfCoupons,
                                  status: 5,
                                };

                                console.error("-===============-");
                                console.error(socket_msg);
                                console.error("-===============-");

                                common.emitPassenger(passenger_id, socket_msg);
                                common.emitDispatcher(req.io);
                                common.sendPush(
                                  passenger_id,
                                  req.__("fare_updated_through_tap") +
                                    " Fare : KWD " +
                                    total_fare
                                );

                                detail = {
                                  fare: total_fare,
                                  pickup: pickup_location,
                                  jobreferral: trip_id,
                                  trip_id: trip_id,
                                };
                                message.message =
                                  req.__("fare_updated_through_tap") +
                                  " Fare : KWD " +
                                  total_fare;

                                message.details = details;
                                message.status = 5;
                                deferred.resolve(message);
                                deferred.makeNodeResolver();
                                message = null;
                              } else {
                                /* Sasidharan May 13 2024 */

                                /* Sasidharan sep 16 2024 */
                                let updateArray = {
                                  paymentInProgress: 0,
                                };

                                if (
                                  paymentResponse &&
                                  Object.keys(paymentResponse).length > 0
                                ) {
                                  updateArray = {
                                    paymentInProgress: 0,
                                    isAutoDuductionFailed: 1,
                                    tapPaymentId: "",
                                    tapPaymentStatus: "DECLINED",
                                    tapPaymentResponse: {},
                                  };

                                  if (
                                    typeof paymentResponse.gateway !=
                                      "undefined" &&
                                    typeof paymentResponse.gateway.response !=
                                      "undefined"
                                  ) {
                                    updateArray["tapPaymentResponse"] =
                                      paymentResponse.gateway.response;
                                  }
                                  if (
                                    typeof paymentResponse.status != "undefined"
                                  ) {
                                    updateArray["tapPaymentStatus"] =
                                      paymentResponse.status;
                                  }
                                  if (
                                    typeof paymentResponse.id != "undefined"
                                  ) {
                                    updateArray["tapPaymentId"] =
                                      paymentResponse.id;
                                  }
                                }
                                let failedLog = {
                                  paymentId: updateArray["tapPaymentId"],
                                  tripId: +trip_id,
                                  passengerId: +passenger_id,
                                  driverId: +driver_id,
                                  totalFare: +total_fare,
                                };
                                if (paymentResponse) {
                                  await apimodel.insertTapPaymentFailedLog(
                                    failedLog
                                  );
                                }
                                await apimodel.changePaymentProcessStatus(
                                  trip_id,
                                  updateArray
                                );

                                var pass_gateway_details = [];
                                var pay_details = [];

                                /* Sasidharan aug 11 2022 added async */
                                apimodel
                                  .gateway_details(q)
                                  .then(async function (fareresults) {
                                    i = 0;
                                    fareresults.forEach(function (val) {
                                      var pay_mode_name = val.pay_mod_name;
                                      var pay_mode_id = val._id;
                                      pay_mode_name = pay_mode_name
                                        .replace("_", "")
                                        .toLowerCase();
                                      fareresults[i]["image_normal"] =
                                        hostname +
                                        "/" +
                                        "public/images/" +
                                        pay_mode_name +
                                        "_normal.png";
                                      fareresults[i]["image_active"] =
                                        hostname +
                                        "/" +
                                        "public/images/" +
                                        pay_mode_name +
                                        "_active.png";

                                      if (
                                        pay_mode_id == 3 ||
                                        pay_mode_id == 6
                                      ) {
                                        pass_gateway_details.push(
                                          fareresults[i]
                                        );
                                      }
                                      i++;
                                    });
                                    details.gateway_details = fareresults;
                                    if (
                                      discount_wallet_amount_used &&
                                      discount_wallet_amount_used > 0
                                    ) {
                                      details["discount_wallet_amount_used"] =
                                        discount_wallet_amount_used;
                                    }

                                    if (travel_status != 5) {
                                      try {
                                        var trip_details = [];
                                        trip_details["trip_id"] = trip_id;

                                        details.total_fare = shared.roundUp(
                                          details.total_fare,
                                          2
                                        );
                                        details.trip_fare = shared.roundUp(
                                          details.trip_fare,
                                          2
                                        );
                                        details.discount_wallet_amount_used =
                                          shared.roundUp(
                                            details.discount_wallet_amount_used,
                                            2
                                          );
                                        details.wallet_amount_used =
                                          shared.roundUp(
                                            details.wallet_amount_used,
                                            2
                                          );

                                        pay_details = details;

                                        pay_details.gateway_details = [];

                                        pay_details.gateway_details =
                                          pass_gateway_details;

                                        //console.log('pass_gateway_details',pay_details);
                                        //console.log('fareresults details',details);

                                        console.error(
                                          "******************************************"
                                        );
                                        console.error(
                                          "pay_details second : ",
                                          pay_details
                                        );
                                        console.error(
                                          "******************************************"
                                        );

                                        var socket_msg = {
                                          message:
                                            req.app.locals.passenger_i18n.__(
                                              "trip_completed"
                                            ),
                                          detail: trip_details,
                                          trip_pay_details: pay_details,
                                          driver_latitute: coordinates[1],
                                          driver_longitude: coordinates[0],
                                          bearing: bearing,
                                          accuracy: accuracy,
                                          finished_fare: total_fare,
                                          trip_id: trip_id,
                                          display: 1,
                                          status: 4,
                                        };

                                        //console.log('socket_msg',socket_msg);

                                        var socket_pass_id =
                                          "P-" + passenger_id;

                                        //console.log('socket_pass_id',socket_pass_id);

                                        //if(active_passengers.includes(socket_pass_id))
                                        // if(typeof global.socketobj[socket_pass_id] !=='undefined'){
                                        // global.socketobj[socket_pass_id].emit('update_trip_status',socket_msg);
                                        // } else {
                                        //  console.log("Socket missing...");
                                        // }
                                      } catch (err) {
                                        //console.log(err);
                                      }
                                      //console.log("herefghafddfs",details);

                                      common.emitPassenger(
                                        passenger_id,
                                        socket_msg
                                      );

                                      common.emitDispatcher(req.io);

                                      /* Sasidharan aug 11 2022 added async */
                                      apimodel
                                        .insert_trip_pay_details(q, details)
                                        .then(async function (checkresults) {
                                          message.message = req.__(
                                            "trip_completed_driver"
                                          );

                                          /* Sasidharan aug 11 2022 */
                                          let passengerWalletAmount =
                                            await apimodel.get_passenger_wallet_amount(
                                              passenger_id
                                            );
                                          passengerWalletAmount =
                                            typeof passengerWalletAmount[0]
                                              .wallet_amount != "undefined"
                                              ? parseFloat(
                                                  passengerWalletAmount[0]
                                                    .wallet_amount
                                                ).toFixed(2)
                                              : 0;

                                          if (passengerWalletAmount > 0) {
                                            passengerWalletAmount =
                                              parseFloat(0.0).toFixed(2);
                                          }

                                          details.passenger_wallet_amount =
                                            passengerWalletAmount;
                                          details.corporate_promocode =
                                            applied_corporate_promocode;

                                          message.details = details;
                                          message.status = 4;
                                          deferred.resolve(message);
                                          deferred.makeNodeResolver();
                                          message = null;
                                        });
                                    } else {
                                      message.message = req.__(
                                        "trip_completed_driver"
                                      );

                                      /* Sasidharan aug 11 2022 */
                                      let passengerWalletAmount =
                                        await apimodel.get_passenger_wallet_amount(
                                          passenger_id
                                        );
                                      passengerWalletAmount =
                                        typeof passengerWalletAmount[0]
                                          .wallet_amount != "undefined"
                                          ? parseFloat(
                                              passengerWalletAmount[0]
                                                .wallet_amount
                                            ).toFixed(2)
                                          : 0;

                                      if (passengerWalletAmount > 0) {
                                        passengerWalletAmount =
                                          parseFloat(0.0).toFixed(2);
                                      }

                                      details.passenger_wallet_amount =
                                        passengerWalletAmount;
                                      details.corporate_promocode =
                                        applied_corporate_promocode;

                                      message.details = details;
                                      message.status = 4;
                                      deferred.resolve(message);
                                      deferred.makeNodeResolver();
                                      message = null;
                                    }
                                  });
                              }
                            } catch (err) {
                              console.error(err);
                              throw new Error(err.message);
                            }
                          } else if (
                            passenger_wallet_amount != 0 &&
                            passenger_wallet_amount > 0 &&
                            global.settings.wallet_enable == 1
                          ) {
                            used_wallet_amount = passenger_wallet_amount;
                            remaining_amount =
                              total_fare - passenger_wallet_amount;
                            total_fare = remaining_amount.toFixed(2);
                            subtotal_fare = remaining_amount;
                            details.total_fare = total_fare;

                            /* Sasi */
                            details.wallet_and_discount_wallet = shared.roundUp(
                              used_wallet_amount,
                              2
                            );
                            if (
                              discount_wallet_amount_used &&
                              discount_wallet_amount_used > 0
                            ) {
                              details.wallet_and_discount_wallet +=
                                shared.roundUp(discount_wallet_amount_used, 2);
                            }

                            details.subtotal_fare = subtotal_fare;
                            details.wallet_amount_used = used_wallet_amount;
                            details.gift_card_status = gift_card_status;
                            details.gift_card_discount = 0;

                            if (
                              discount_wallet_amount_used &&
                              discount_wallet_amount_used > 0
                            ) {
                              details.discount_wallet_amount_used =
                                discount_wallet_amount_used;
                            }

                            var update_trip_array = {
                              discount_wallet_amount_used:
                                discount_wallet_amount_used,
                            };
                            await apimodel
                              .update_trip(q, update_trip_array, trip_id)
                              .then(function (checkresults) {});

                            var pass_gateway_details = [];
                            var pay_details = [];

                            /* Sasidharan aug 11 2022 added async */
                            apimodel
                              .gateway_details(q)
                              .then(async function (fareresults) {
                                i = 0;
                                fareresults.forEach(function (val) {
                                  var pay_mode_name = val.pay_mod_name;
                                  var pay_mode_id = val._id;
                                  pay_mode_name = pay_mode_name
                                    .replace("_", "")
                                    .toLowerCase();
                                  fareresults[i]["image_normal"] =
                                    hostname +
                                    "/" +
                                    "public/images/" +
                                    pay_mode_name +
                                    "_normal.png";
                                  fareresults[i]["image_active"] =
                                    hostname +
                                    "/" +
                                    "public/images/" +
                                    pay_mode_name +
                                    "_active.png";

                                  if (pay_mode_id == 3 || pay_mode_id == 6) {
                                    pass_gateway_details.push(fareresults[i]);
                                  }
                                  i++;
                                });
                                details.gateway_details = fareresults;

                                if (travel_status != 5) {
                                  try {
                                    var trip_details = [];
                                    trip_details["trip_id"] = trip_id;

                                    pay_details = details;

                                    pay_details.gateway_details = [];

                                    pay_details.gateway_details =
                                      pass_gateway_details;

                                    //console.log('pass_gateway_details',pay_details);
                                    //console.log('fareresults details',details);

                                    console.error(
                                      "******************************************"
                                    );
                                    console.error(
                                      "pay_details third : ",
                                      pay_details
                                    );
                                    console.error(
                                      "******************************************"
                                    );

                                    var socket_msg = {
                                      message:
                                        req.app.locals.passenger_i18n.__(
                                          "trip_completed"
                                        ),
                                      detail: trip_details,
                                      trip_pay_details: pay_details,
                                      driver_latitute: coordinates[1],
                                      driver_longitude: coordinates[0],
                                      bearing: bearing,
                                      accuracy: accuracy,
                                      finished_fare: total_fare,
                                      trip_id: trip_id,
                                      display: 1,
                                      status: 4,
                                    };

                                    //console.log('socket_msg',socket_msg);

                                    // var socket_pass_id = 'P-'+passenger_id;

                                    // console.log('socket_pass_id',socket_pass_id);

                                    // //if(active_passengers.includes(socket_pass_id))
                                    // if(typeof global.socketobj[socket_pass_id] !=='undefined'){
                                    // global.socketobj[socket_pass_id].emit('update_trip_status',socket_msg);
                                    // } else {
                                    //  console.log("Socket missing...");
                                    // }
                                  } catch (err) {
                                    ////console.log(err);
                                  }
                                  common.emitPassenger(
                                    passenger_id,
                                    socket_msg
                                  );
                                  common.emitDispatcher(req.io);
                                  common.sendPush(
                                    passenger_id,
                                    req.app.locals.passenger_i18n.__(
                                      "trip_completed"
                                    )
                                  );

                                  apimodel
                                    .insert_trip_pay_details(q, details)
                                    .then(async function (checkresults) {
                                      message.message = req.__(
                                        "trip_completed_driver"
                                      );

                                      /* Sasidharan aug 11 2022 */
                                      let passengerWalletAmount =
                                        await apimodel.get_passenger_wallet_amount(
                                          passenger_id
                                        );
                                      passengerWalletAmount =
                                        typeof passengerWalletAmount[0]
                                          .wallet_amount != "undefined"
                                          ? parseFloat(
                                              passengerWalletAmount[0]
                                                .wallet_amount
                                            ).toFixed(2)
                                          : 0;

                                      if (passengerWalletAmount > 0) {
                                        passengerWalletAmount =
                                          parseFloat(0.0).toFixed(2);
                                      }

                                      details.passenger_wallet_amount =
                                        passengerWalletAmount;
                                      details.corporate_promocode =
                                        applied_corporate_promocode;

                                      message.details = details;
                                      message.status = 4;
                                      deferred.resolve(message);
                                      deferred.makeNodeResolver();
                                      message = null;
                                    });
                                } else {
                                  message.message = req.__(
                                    "trip_completed_driver"
                                  );

                                  /* Sasidharan aug 11 2022 */
                                  let passengerWalletAmount =
                                    await apimodel.get_passenger_wallet_amount(
                                      passenger_id
                                    );
                                  passengerWalletAmount =
                                    typeof passengerWalletAmount[0]
                                      .wallet_amount != "undefined"
                                      ? parseFloat(
                                          passengerWalletAmount[0].wallet_amount
                                        ).toFixed(2)
                                      : 0;

                                  if (passengerWalletAmount > 0) {
                                    passengerWalletAmount =
                                      parseFloat(0.0).toFixed(2);
                                  }

                                  details.passenger_wallet_amount =
                                    passengerWalletAmount;
                                  details.corporate_promocode =
                                    applied_corporate_promocode;

                                  message.details = details;
                                  message.status = 4;
                                  deferred.resolve(message);
                                  deferred.makeNodeResolver();
                                  message = null;
                                }
                              });
                          } else if (
                            parseFloat(giftCardApiResponse.remaining_value) !=
                              0 &&
                            giftCardApiResponse.remaining_value > 0 &&
                            global.settings.gift_card_enable == 1
                          ) {
                            used_wallet_amount = parseFloat(
                              giftCardApiResponse.remaining_value
                            );
                            console.log(
                              "used_wallet_amount",
                              used_wallet_amount
                            );
                            remaining_amount =
                              total_fare -
                              parseFloat(giftCardApiResponse.remaining_value);
                            console.log("remaining_amount", total_fare);
                            console.log("remaining_amount", remaining_amount);

                            total_fare = remaining_amount.toFixed(2);
                            subtotal_fare = remaining_amount;
                            details.total_fare = total_fare;
                            details.subtotal_fare = subtotal_fare;
                            details.gift_card_status = 1;
                            details.gift_card_discount = used_wallet_amount;
                            details.passenger_discount = used_wallet_amount;
                            if (
                              discount_wallet_amount_used &&
                              discount_wallet_amount_used > 0
                            ) {
                              details.discount_wallet_amount_used =
                                discount_wallet_amount_used;
                            }
                            var update_trip_array = {
                              gift_card_discount: details.gift_card_discount,
                              discount_wallet_amount_used:
                                discount_wallet_amount_used,
                            };
                            apimodel
                              .update_trip(q, update_trip_array, trip_id)
                              .then(function (checkresults) {});

                            var pass_gateway_details = [];
                            var pay_details = [];

                            /* Sasidharan aug 11 2022 added async */
                            apimodel
                              .gateway_details(q)
                              .then(async function (fareresults) {
                                i = 0;
                                fareresults.forEach(function (val) {
                                  var pay_mode_name = val.pay_mod_name;
                                  var pay_mode_id = val._id;
                                  pay_mode_name = pay_mode_name
                                    .replace("_", "")
                                    .toLowerCase();
                                  fareresults[i]["image_normal"] =
                                    hostname +
                                    "/" +
                                    "public/images/" +
                                    pay_mode_name +
                                    "_normal.png";
                                  fareresults[i]["image_active"] =
                                    hostname +
                                    "/" +
                                    "public/images/" +
                                    pay_mode_name +
                                    "_active.png";

                                  if (pay_mode_id == 3 || pay_mode_id == 6) {
                                    pass_gateway_details.push(fareresults[i]);
                                  }
                                  i++;
                                });
                                details.gateway_details = fareresults;

                                if (travel_status != 5) {
                                  try {
                                    var trip_details = [];
                                    trip_details["trip_id"] = trip_id;

                                    pay_details = details;

                                    pay_details.gateway_details = [];

                                    pay_details.gateway_details =
                                      pass_gateway_details;

                                    ////console.log('pass_gateway_details',pay_details);
                                    ////console.log('fareresults details',details);
                                    console.error(
                                      "******************************************"
                                    );
                                    console.error(
                                      "pay_details fourth : ",
                                      pay_details
                                    );
                                    console.error(
                                      "******************************************"
                                    );

                                    var socket_msg = {
                                      message:
                                        req.app.locals.passenger_i18n.__(
                                          "trip_completed"
                                        ),
                                      detail: trip_details,
                                      trip_pay_details: pay_details,
                                      driver_latitute: coordinates[1],
                                      driver_longitude: coordinates[0],
                                      bearing: bearing,
                                      accuracy: accuracy,
                                      finished_fare: total_fare,
                                      trip_id: trip_id,
                                      display: 1,
                                      status: 4,
                                    };

                                    ////console.log('socket_msg',socket_msg);

                                    // var socket_pass_id = 'P-'+passenger_id;

                                    // ////console.log('socket_pass_id',socket_pass_id);

                                    // //if(active_passengers.includes(socket_pass_id))
                                    // if(typeof global.socketobj[socket_pass_id] !=='undefined'){
                                    // global.socketobj[socket_pass_id].emit('update_trip_status',socket_msg);
                                    // } else {
                                    //  ////console.log("Socket missing...");
                                    // }
                                  } catch (err) {
                                    ////console.log(err);
                                  }
                                  common.emitPassenger(
                                    passenger_id,
                                    socket_msg
                                  );
                                  common.emitDispatcher(req.io);
                                  common.sendPush(
                                    passenger_id,
                                    req.app.locals.passenger_i18n.__(
                                      "trip_completed"
                                    )
                                  );

                                  /* Sasidharan aug 11 2022 added async */
                                  apimodel
                                    .insert_trip_pay_details(q, details)
                                    .then(async function (checkresults) {
                                      message.message = req.__(
                                        "trip_completed_driver"
                                      );
                                      message.details = details;

                                      /* Sasidharan aug 11 2022 */
                                      let passengerWalletAmount =
                                        await apimodel.get_passenger_wallet_amount(
                                          passenger_id
                                        );
                                      passengerWalletAmount =
                                        typeof passengerWalletAmount[0]
                                          .wallet_amount != "undefined"
                                          ? parseFloat(
                                              passengerWalletAmount[0]
                                                .wallet_amount
                                            ).toFixed(2)
                                          : 0;
                                      if (passengerWalletAmount > 0) {
                                        passengerWalletAmount =
                                          parseFloat(0.0).toFixed(2);
                                      }
                                      details.passenger_wallet_amount =
                                        passengerWalletAmount;
                                      details.corporate_promocode =
                                        applied_corporate_promocode;

                                      message.status = 4;
                                      deferred.resolve(message);
                                      deferred.makeNodeResolver();
                                      message = null;
                                    });
                                } else {
                                  message.message = req.__(
                                    "trip_completed_driver"
                                  );

                                  /* Sasidharan aug 11 2022 */
                                  let passengerWalletAmount =
                                    await apimodel.get_passenger_wallet_amount(
                                      passenger_id
                                    );
                                  passengerWalletAmount =
                                    typeof passengerWalletAmount[0]
                                      .wallet_amount != "undefined"
                                      ? parseFloat(
                                          passengerWalletAmount[0].wallet_amount
                                        ).toFixed(2)
                                      : 0;

                                  if (passengerWalletAmount > 0) {
                                    passengerWalletAmount =
                                      parseFloat(0.0).toFixed(2);
                                  }

                                  details.passenger_wallet_amount =
                                    passengerWalletAmount;
                                  details.corporate_promocode =
                                    applied_corporate_promocode;

                                  message.details = details;
                                  message.status = 4;
                                  deferred.resolve(message);
                                  deferred.makeNodeResolver();
                                  message = null;
                                }
                              });
                          } else {
                            var pass_gateway_details = [];
                            var pay_details = [];

                            /* Sasidharan aug 11 2022 added async */
                            apimodel
                              .gateway_details(q)
                              .then(async function (fareresults) {
                                i = 0;
                                fareresults.forEach(function (val) {
                                  var pay_mode_name = val.pay_mod_name;
                                  var pay_mode_id = val._id;
                                  pay_mode_name = pay_mode_name
                                    .replace("_", "")
                                    .toLowerCase();
                                  fareresults[i]["image_normal"] =
                                    hostname +
                                    "/" +
                                    "public/images/" +
                                    pay_mode_name +
                                    "_normal.png";
                                  fareresults[i]["image_active"] =
                                    hostname +
                                    "/" +
                                    "public/images/" +
                                    pay_mode_name +
                                    "_active.png";

                                  if (pay_mode_id == 3 || pay_mode_id == 6) {
                                    pass_gateway_details.push(fareresults[i]);
                                  }
                                  i++;
                                });
                                details.gateway_details = fareresults;
                                if (
                                  discount_wallet_amount_used &&
                                  discount_wallet_amount_used > 0
                                ) {
                                  details.discount_wallet_amount_used =
                                    discount_wallet_amount_used;
                                }

                                if (travel_status != 5) {
                                  try {
                                    var trip_details = [];
                                    trip_details["trip_id"] = trip_id;

                                    details.total_fare = shared.roundUp(
                                      details.total_fare,
                                      2
                                    );
                                    details.trip_fare = shared.roundUp(
                                      details.trip_fare,
                                      2
                                    );
                                    details.discount_wallet_amount_used =
                                      shared.roundUp(
                                        details.discount_wallet_amount_used,
                                        2
                                      );
                                    details.wallet_amount_used = shared.roundUp(
                                      details.wallet_amount_used,
                                      2
                                    );

                                    pay_details = details;

                                    pay_details.gateway_details = [];

                                    pay_details.gateway_details =
                                      pass_gateway_details;

                                    //console.log('pass_gateway_details',pay_details);
                                    //console.log('fareresults details',details);
                                    console.error(
                                      "******************************************"
                                    );
                                    console.error(
                                      "pay_details fifth : ",
                                      pay_details
                                    );
                                    console.error(
                                      "******************************************"
                                    );

                                    var socket_msg = {
                                      message:
                                        req.app.locals.passenger_i18n.__(
                                          "trip_completed"
                                        ),
                                      detail: trip_details,
                                      trip_pay_details: pay_details,
                                      driver_latitute: coordinates[1],
                                      driver_longitude: coordinates[0],
                                      bearing: bearing,
                                      accuracy: accuracy,
                                      finished_fare: total_fare,
                                      trip_id: trip_id,
                                      display: 1,
                                      status: 4,
                                    };

                                    //console.log('socket_msg',socket_msg);

                                    var socket_pass_id = "P-" + passenger_id;

                                    //console.log('socket_pass_id',socket_pass_id);

                                    //if(active_passengers.includes(socket_pass_id))
                                    // if(typeof global.socketobj[socket_pass_id] !=='undefined'){
                                    // global.socketobj[socket_pass_id].emit('update_trip_status',socket_msg);
                                    // } else {
                                    //  console.log("Socket missing...");
                                    // }
                                  } catch (err) {
                                    //console.log(err);
                                  }
                                  //console.log("herefghafddfs",details);

                                  common.emitPassenger(
                                    passenger_id,
                                    socket_msg
                                  );

                                  common.emitDispatcher(req.io);

                                  /* Sasidharan aug 11 2022 added async */
                                  apimodel
                                    .insert_trip_pay_details(q, details)
                                    .then(async function (checkresults) {
                                      message.message = req.__(
                                        "trip_completed_driver"
                                      );

                                      /* Sasidharan aug 11 2022 */
                                      let passengerWalletAmount =
                                        await apimodel.get_passenger_wallet_amount(
                                          passenger_id
                                        );
                                      passengerWalletAmount =
                                        typeof passengerWalletAmount[0]
                                          .wallet_amount != "undefined"
                                          ? parseFloat(
                                              passengerWalletAmount[0]
                                                .wallet_amount
                                            ).toFixed(2)
                                          : 0;

                                      if (passengerWalletAmount > 0) {
                                        passengerWalletAmount =
                                          parseFloat(0.0).toFixed(2);
                                      }

                                      details.passenger_wallet_amount =
                                        passengerWalletAmount;
                                      details.corporate_promocode =
                                        applied_corporate_promocode;

                                      message.details = details;
                                      message.status = 4;
                                      deferred.resolve(message);
                                      deferred.makeNodeResolver();
                                      message = null;
                                    });
                                } else {
                                  message.message = req.__(
                                    "trip_completed_driver"
                                  );

                                  /* Sasidharan aug 11 2022 */
                                  let passengerWalletAmount =
                                    await apimodel.get_passenger_wallet_amount(
                                      passenger_id
                                    );
                                  passengerWalletAmount =
                                    typeof passengerWalletAmount[0]
                                      .wallet_amount != "undefined"
                                      ? parseFloat(
                                          passengerWalletAmount[0].wallet_amount
                                        ).toFixed(2)
                                      : 0;

                                  if (passengerWalletAmount > 0) {
                                    passengerWalletAmount =
                                      parseFloat(0.0).toFixed(2);
                                  }

                                  details.passenger_wallet_amount =
                                    passengerWalletAmount;
                                  details.corporate_promocode =
                                    applied_corporate_promocode;

                                  message.details = details;
                                  message.status = 4;
                                  deferred.resolve(message);
                                  deferred.makeNodeResolver();
                                  message = null;
                                }
                              });
                          }
                        }
                      }
                    );

                    //}
                  });
                //}
              });
            });

            //}); //Google calculation end
          }

          try {
            var deviceToken = device_token;

            const pushmessage = {
              message: "You Journey Completed\nاكتملت رحلتك",
              trip_id: trip_id,
              status: 1,
            };

            var title = "New Notification";

            pushNotification
              .sendAndroidPush(deviceToken, pushmessage, title)
              .then(function (checkresults) {});

            pushNotification
              .sendIosPush(deviceToken, pushmessage)
              .then(function (checkresults) {});
          } catch (error) {
            console.error("error when send push notification : ", error);
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

function validateCompleteTrip(q, input) {
  //{"trip_id":"105693","drop_latitude":"29.3053256","drop_longitude":"47.9668757","drop_location":"Block%203%2C%20Kuwait%2C%20null%2C%20null","distance":"","actual_distance":"","waiting_hour":""}

  var constraints = {
    trip_id: {
      presence: {
        allowEmpty: false,
        message: "must not empty",
      },
    },
    drop_latitude: {
      presence: {
        allowEmpty: false,
        message: "must not empty",
      },
    },
    drop_longitude: {
      presence: {
        allowEmpty: false,
        message: "must not empty",
      },
    },
    drop_location: {
      presence: {
        allowEmpty: false,
        message: "must not empty",
      },
    },
    // actual_distance: {
    // presence: {allowEmpty: false,message:"must not empty"},
    // },
    // waiting_hour: {
    // presence: {allowEmpty: false,message:"must not empty"},
    // },
  };
  validate.options = {
    format: "flat",
  };
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
  trip_id,
  actual_distance_data,
  passenger_wallet_amount
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
        haversine_distance: actual_distance_data,
        wallet_amt_before_payment: passenger_wallet_amount,
      };

      var update_request_array = {
        status: parseInt(7),
      };

      // var drop_time = new Date();

      //   try
      //   {

      //    var now = new time.Date();
      // now.setTimezone(global.settings.timezone);
      // var drop_time=new Date(now.toLocaleDateString());
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
      //console.log(err);
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
              console.error("passenger_commission : ", passenger_commission);
              console.error("corporate_commission : ", corporate_commission);
              //console.log("promocode004");

              if (total_applied < promo_limit) {
                var passenger_discount =
                  parseFloat(total_fare) *
                  parseFloat(passenger_commission / 100);
                var corporate_discount =
                  parseFloat(total_fare) *
                  parseFloat(corporate_commission / 100);
                console.error("passenger_discount : ", passenger_discount);
                console.error("corporate_discount : ", corporate_discount);
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

                console.error("passenger_discount 1 : ", passenger_discount);
                console.error("corporate_discount 1 : ", corporate_discount);

                details.passenger_discount = passenger_discount;
                details.corporate_discount = corporate_discount;
                deferred.resolve(details);
                deferred.makeNodeResolver();
                time_interval = null;
              } else {
                //console.log("promocode005");

                details.passenger_discount = 0;
                details.corporate_discount = 0;
                deferred.resolve(details);
                deferred.makeNodeResolver();
                time_interval = null;
              }
            } else {
              //console.log("promocode006");

              details.passenger_discount = 0;
              details.corporate_discount = 0;
              deferred.resolve(details);
              deferred.makeNodeResolver();
              time_interval = null;
            }
          });
      } else {
        //  console.log("promocode007");

        details.passenger_discount = 0;
        details.corporate_discount = 0;
        deferred.resolve(details);
        deferred.makeNodeResolver();
        time_interval = null;
      }
    });

  return deferred.promise;
}

function update_transaction(q, update_array, trip_id) {
  var deferred = q.defer();

  var details = {};

  apimodel.get_auto_id(q, t.MDB_TRANS).then(function (autoidresults) {
    if (autoidresults.length > 0) {
      var last_insert_id = autoidresults[0]._id + 1;

      update_array._id = last_insert_id;

      apimodel.check_trans_exists(q, trip_id).then(function (transresults) {
        if (transresults.length > 0) {
          apimodel
            .update_transaction(q, update_array, trip_id)
            .then(function (updateresults) {
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
              deferred.resolve(details);
              deferred.makeNodeResolver();
              time_interval = null;
            });
        }
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

function update_wallet_logs(
  q,
  passenger_id,
  add_amt,
  negative,
  trip_id,
  recharge_type
) {
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
            update_wallet_amt = current_wallet_amount - add_amt;
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
              paymentType: "wallet deduct for trip complete",
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

function update_gift_card_logs(q, passenger_id, trip_id, promo_code) {
  var deferred = q.defer();

  var details = {};

  var insert_array = {
    passenger_id: parseInt(passenger_id),
    gift_card_number: promo_code,
    status_description: "Used promocode in complete trip",
    status: parseInt(1),
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

function convsecstoformat(secs) {
  // try
  // {
  // var hours = secs/3600;
  // hours = hours.toFixed(0);
  // if(hours  < 0)
  // {
  //  hours =0;
  // }
  // var minutes = (secs -(hours*3600))/60;
  // minutes = minutes.toFixed(0);
  // if(minutes  < 0)
  // {
  //  minutes =0;
  // }
  // var seconds = (secs -(hours*3600 + minutes*60));
  // seconds = seconds.toFixed(0);
  // if(seconds  < 0)
  // {
  //  seconds =0;
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

function convert_timezone(pickup_time) {
  try {
    var current_time = new Date();

    if (current_time.getTimezoneOffset() == "-330")
      pickup_time = pickup_time.getTime() - 9000000;
    else pickup_time = pickup_time.getTime() + 10800000;

    return new Date(pickup_time);
  } catch (err) {
    //console.log(err);
  }
}

function convert_date_to_iso(pickup_time) {
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
}

function calcTimeZone(offset) {
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
}

function GetGoogleMatrixDistance(q, input) {
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
}

function getGifCardDetails(q, promocode, gift_card_status) {
  var deferred = q.defer();
  let giftCardApiResponse = {};
  if (gift_card_status == 1 && global.settings.gift_card_enable == 1) {
    giftCard
      .getCardBalance(q, {
        promocode: promocode,
      })
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

function roundUp(num, precision) {
  precision = Math.pow(10, precision);
  return Math.ceil(num * precision) / precision;
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
      details.status = 1;
      deferred.resolve(details);
      deferred.makeNodeResolver();
      time_interval = null;
    });
  return deferred.promise;
}
