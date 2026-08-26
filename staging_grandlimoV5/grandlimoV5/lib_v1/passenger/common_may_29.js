var apimodel = require("../../models/passapimodel_v1");
var axios = require("axios");
var async = require("async");
var dateFormat = require("dateformat");
var dateformatter = require("date-format-php");
var t = require("../../config/table_config.json");
var passenger_socket_i18n = require("i18n");

passenger_socket_i18n.configure({
  locales: ["en", "ar"],

  directory: __dirname + "/../../locales",
  defaultLocale: "en",
  updateFiles: false,
  autoReload: true,
});

var moment = require("moment-timezone");
var passengerObj = new Map();

exports.send_sms = function (
  q,
  to,
  id,
  replace_array,
  countryCode = global.settings.default_country_code
) {
  var deferred = q.defer();

  apimodel.sms_template(q, id).then(function (detailsresults) {
    if (global.settings.sms_enable == 1) {
      if (detailsresults.length > 0) {
        try {
          var msg = detailsresults[0].sms_description;

          if (replace_array.sitename != undefined) {
            msg = msg.replace("##SITE_NAME##", replace_array.sitename);
          }

          if (replace_array.taxi_colour != undefined) {
            msg = msg.replace("##COLOR##", replace_array.taxi_colour);
          }

          if (replace_array.taxi_manufacturer != undefined) {
            msg = msg.replace(
              "##MANUFACTURE##",
              replace_array.taxi_manufacturer
            );
          }

          if (replace_array.taxi_no != undefined) {
            msg = msg.replace("##NUMBER##", replace_array.taxi_no);
          }

          if (replace_array.trip_id != undefined) {
            msg = msg.replace("##booking_key##", replace_array.trip_id);
          }
          if (replace_array.from != undefined) {
            msg = msg.replace("##FROM##", replace_array.from);
          }
          if (replace_array.message != undefined) {
            msg = msg.replace("##MESSAGE##", replace_array.message);
          }
          if (replace_array.otp != undefined) {
            msg = msg.replace("##VERIFY_CODE##", replace_array.otp);
          }
        } catch (err) {
          console.log("sms error");
        }

        if (to.indexOf("+") < 0) {
          // to = global.settings.default_country_code + to;
          to = countryCode + to;
        }
        try {
          const postData = new URLSearchParams({
            username: global.settings.smsbox_username,
            password: global.settings.smsbox_password,
            customerid: global.settings.smsbox_customerid,
            sendertext: global.settings.smsbox_senderid,
            messagebody: msg,
            recipientnumbers: to,
            defdate: "",
            isblink: "false",
            isflash: "false",
          }).toString();

          // axios.get('http://www.smsbox.com/smsgateway/services/messaging.asmx/Http_SendSMS?'+postData)
          //   .then(response => {
          //     console.log(response.data.url);
          //     console.log(response.data.explanation);
          //   })
          //   .catch(error => {
          //     console.log(error);
          //   });

          deferred.resolve("success");
          deferred.makeNodeResolver();
          response = null;
        } catch (err) {
          console.log(err);
        }
      }
    } else {
      deferred.resolve("failure");
      deferred.makeNodeResolver();
      response = null;
    }
  });

  return deferred.promise;
};

exports.hesabe_pay = function (q, passenger_id, amount, hostname) {
  var deferred = q.defer();

  var details = {};

  console.log("fare009", amount);

  apimodel.knet_details(q).then(function (detailsresults) {
    if (detailsresults.length > 0) {
      console.log("fare0011");
      try {
        amount = amount.toFixed(3);
        success_url = hostname + "'knet_wallet_response.html";
        failure_url = hostname + "/knet_wallet_response.html";

        knet_alias = detailsresults[0].knet_alias;
        payment_method = detailsresults[0].payment_method;

        if (payment_method == "L") {
          url = "https://www.hesabe.com/authpost";
        } else {
          url = "http://demo.hesabe.com/authpost";
        }

        console.log(url);

        var success_url = (failure_url =
          global.settings.base_url + "/knet_wallet_response.html");

        console.log("success url ", success_url);

        var data = {
          MerchantCode: knet_alias,
          Amount: amount,
          SuccessUrl: success_url,
          FailureUrl: failure_url,
          Variable1: amount,
          Variable2: parseInt(passenger_id),
          Method: "1",
        };
      } catch (err) {
        console.log(err);
      }
      try {
        console.log("fare012", url, data);

        axios
          .post(url, data)
          .then((response) => {
            //console.log(response.data);

            details.response = response.data;
            details.status = 1;
            deferred.resolve(details);
            deferred.makeNodeResolver();
            response = null;

            //console.log(response.data.explanation);
          })
          .catch((error) => {
            console.log("axios", error);
            details.error = error;
            details.status = 0;
            deferred.resolve(details);
            deferred.makeNodeResolver();
            response = null;
          });
      } catch (err) {
        console.log(err);
      }
    } else {
      details.status = 0;

      deferred.resolve(details);
      deferred.makeNodeResolver();
      response = null;
    }
  });

  return deferred.promise;
};

exports.update_cancel_trip_det = function (q, trip_id) {
  var deferred = q.defer();

  var table_name = t.MDB_LOGS_CANCELLED;

  apimodel.trip_exists(q, trip_id, table_name).then(function (tripresults) {
    if (tripresults.length == 0) {
      apimodel.fetch_all_logs(q, trip_id).then(function (fetchresults) {
        if (fetchresults.length > 0) {
          apimodel
            .insert_all_logs(q, fetchresults, table_name)
            .then(function (insertresults) {
              apimodel.update_moved(q, trip_id).then(function (fetchresults) {
                var message = {};
                deferred.resolve(message);
                deferred.makeNodeResolver();
                message = null;
              });
            });
        }
      });
    }
  });

  return deferred.promise;
};

exports.update_reject_trip_det = function (q, trip_id) {
  var deferred = q.defer();

  var table_name = t.MDB_LOGS_REJECTED;

  apimodel.trip_exists(q, trip_id, table_name).then(function (tripresults) {
    if (tripresults.length == 0) {
      apimodel.fetch_all_logs(q, trip_id).then(function (fetchresults) {
        if (fetchresults > 0) {
          apimodel
            .insert_all_logs(q, fetchresults, table_name)
            .then(function (fetchresults) {
              apimodel.update_moved(q, trip_id).then(function (fetchresults) {
                var message = {};
                deferred.resolve(message);
                deferred.makeNodeResolver();
                message = null;
              });
            });
        }
      });
    }
  });

  return deferred.promise;
};

exports.update_completed_trip_det = function (q, trip_id) {
  var deferred = q.defer();

  var table_name = t.MDB_LOGS_COMPLETED;

  apimodel.trip_exists(q, trip_id, table_name).then(function (tripresults) {
    if (tripresults.length == 0) {
      apimodel.fetch_all_logs(q, trip_id).then(function (fetchresults) {
        //console.log('fetch_results',fetchresults);
        //console.log('fetch_results length',fetchresults.length);

        if (fetchresults.length > 0) {
          apimodel
            .insert_all_logs(q, fetchresults, table_name)
            .then(function (fetchresults) {
              apimodel.update_moved(q, trip_id).then(function (fetchresults) {
                var message = {};
                deferred.resolve(message);
                deferred.makeNodeResolver();
                message = null;
              });
            });
        }
      });
    }
  });

  return deferred.promise;
};

exports.driver_statistics = function (q, userid, time_range) {
  var deferred = q.defer();

  apimodel
    .driver_statistics(q, userid, time_range)
    .then(function (statisticsresults) {
      var statistics = {};

      if (statisticsresults.length > 0) {
        statistics = statisticsresults[0];
        deferred.resolve(statistics);
        deferred.makeNodeResolver();
        message = null;
      } else {
        statistics.total_trip = 0;
        statistics.completed_trip = 0;
        statistics.total_earnings = 0;
        statistics.overall_rejected_trips = 0;
        statistics.cancelled_trips = 0;
        statistics.today_earnings = 0;
        statistics.shift_status = "IN";
        statistics.time_driven = 0;
        statistics.waiting_time = 0;
        statistics.status = 1;
        deferred.resolve(statistics);
        deferred.makeNodeResolver();
        message = null;
      }
    });

  return deferred.promise;
};

exports.nearestdrivers = function (
  q,
  motor_model,
  latitude,
  longitude,
  passenger_id,
  lang
) {
  passenger_socket_i18n.setLocale(lang);

  //let inputParams = JSON.parse(req.rawBody);

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  //var hostname = global.settings.base_url;

  // var passenger_id = inputParams.passenger_id;
  // var latitude = inputParams.latitude;
  // var longitude = inputParams.longitude;
  // var motor_model = inputParams.motor_model;

  apimodel
    .passenger_profile_by_id(q, passenger_id)
    .then(function (profile_results) {
      if (profile_results.length > 0) {
        apimodel
          .nearest_drivers(q, motor_model, latitude, longitude)
          .then(function (driver_list) {
            try {
              var driver_details = [];

              var time_range = getStartingDateAndEndingDate(
                global.settings.timezone
              );
              if (driver_list.length > 0) {
                var i = 0;
                driver_list.forEach(function (element) {
                  try {
                    var driver_id = element._id.driver_id;

                    driver_details[i] = element._id;

                    driver_details[i].latitude = element._id.loc[1];
                    driver_details[i].longitude = element._id.loc[0];
                    i++;
                  } catch (err) {
                    console.log(err);
                  }
                });

                apimodel
                  .model_fare_details(q, motor_model)
                  .then(function (model_details) {
                    console.log("model_list", model_details);

                    var fare_details = [];

                    if (model_details.length > 0) {
                      fare_details = model_details[0];
                      fare_details.fare_calculation_type =
                        global.settings.fare_calculation_type;
                    }
                    //console.log("nearest00012");
                    try {
                      message.message = passenger_socket_i18n.__("success");
                      message.detail = driver_details;
                      message.fare_details = fare_details;
                      message.driver_around_miles =
                        global.settings.default_mile;
                      message.metric = global.settings.default_mile;
                      message.status = 1;
                      var current_time = new Date();
                      message.current_time = moment()
                        .tz("Asia/Kuwait")
                        .format("YYYY-MM-DD HH:mm:ss");
                      deferred.resolve(message);
                      deferred.makeNodeResolver();
                      message = null;
                    } catch (err) {
                      console.log(err);
                    }
                  });
              } else {
                message.message = passenger_socket_i18n.__("no_vehicle_msg");
                message.status = -1;
                var current_time = new Date();
                message.current_time = moment()
                  .tz("Asia/Kuwait")
                  .format("YYYY-MM-DD HH:mm:ss");
                deferred.resolve(message);
                deferred.makeNodeResolver();
                message = null;
              }
            } catch (err) {
              console.log(err);
            }
          });
      } else {
        message.message = passenger_socket_i18n.__("invalid_user");
        message.model_info = [];
        message.status = -1;
        var current_time = new Date();
        message.current_time = moment()
          .tz("Asia/Kuwait")
          .format("YYYY-MM-DD HH:mm:ss");
        deferred.resolve(message);
        deferred.makeNodeResolver();
        message = null;
      }
    });

  return deferred.promise;
};

function update_time_difference(passenger_id) {
  try {
    //console.log("start time_difference ");
    let currentTime = new Date();
    let time_difference = 0;
    //console.log("has", passengerObj.get(passenger_id));
    if (
      passengerObj.has(passenger_id) &&
      passengerObj.get(passenger_id).last_update_time
    ) {
      time_difference =
        currentTime.getTime() -
        passengerObj.get(passenger_id).last_update_time.getTime();
      //console.log("time_difference", time_difference);
      if (time_difference >= 3000) {
        //console.log("true!!!!!!!!!!!1");
        return true;
      } else {
        //console.log("false!!!!!!!!!!1 ");
        return false;
      }
    } else {
      //console.log("true!!!!!!!!!");
      return true;
    }
  } catch (error) {
    console.log("update time diffe error", error);
    return true;
  }
}

exports.nearestdriverslist = async function (
  q,
  motor_model,
  latitude,
  longitude,
  passenger_id,
  lang,
  timeinterval,
  drop_latitude,
  drop_longitude,
  version_no
) {
  passenger_socket_i18n.setLocale(lang);

  //let inputParams = JSON.parse(req.rawBody);
  //console.log("nearestdriverslist-start", passenger_id, new Date());

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  //console.log("passengerObj", passengerObj.size);

  if (!passengerObj.has(passenger_id) || update_time_difference(passenger_id)) {
    //console.log("Accepted!!!!");
    passengerObj.set(passenger_id, { last_update_time: new Date() });

    //console.log("moving next step!!!!-", passenger_id);

    var hostname = global.settings.base_url;

    var model_info = [];
    var result_array = [];
    var driver_details = [];
    var driver_info = [];
    var fare_info = "";
    var fare_details = [];
    var fare_list = [];

    let profile_results = await apimodel.passenger_profile_by_id(q, passenger_id);
      
        if (profile_results.length > 0) {
          let zone_fare_list = await calculateZoneFare(
            q,
            longitude,
            latitude,
            drop_longitude,
            drop_latitude,
            version_no
          )
          
              let driver_list = await apimodel
                .nearest_drivers(q, motor_model, latitude, longitude)
            
                  var i = 0;
                  driver_list.forEach(function (element) {
                    try {
                      var driver_id = element._id.driver_id;

                      driver_details[i] = element._id;

                      driver_details[i].latitude = element._id.loc[1];
                      driver_details[i].longitude = element._id.loc[0];
                      i++;
                    } catch (err) {
                      console.log(err);
                    }
                  });

                  apimodel
                    .all_model_fare_details(q, "")
                    .then(function (model_details) {
                      //console.log("model_list",model_details);
                      //~ var total_fare =tripfare=distance_fare=minute_per_time=minutes_fare=waiting_cost=passenger_pending_amt=tax_amount=passenger_discount = corporate_discount =payment_mod_id=advance_payment=driver_edit_status=roundtrip=credit_card_sts=payment_type=gateway_details=nightfare=eveningfare=waiting_cost=wallet_amount_used=apply_estimate_fare=promo_trip_fare=0;

                      var tax = global.settings.tax;
                      var j = 0;
                      model_details
                        .forEach(function (element) {
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
                            promo_trip_fare =
                              0);

                          //console.log('model_id',element.model_id);
                          base_fare = element.base_fare;
                          min_km_range = element.min_km;
                          min_km = element.min_km;
                          min_fare = element.min_fare;
                          cancellation_fare = element.cancellation_fare;
                          below_above_km_range = element.below_above_km;
                          below_km = element.below_km;
                          above_km = element.above_km;
                          night_charge = element.night_charge;
                          night_timing_from = element.night_timing_from;
                          night_timing_to = element.night_timing_to;
                          night_fare_per = element.night_fare;
                          evening_charge = element.evening_charge;
                          evening_timing_from = element.evening_timing_from;
                          evening_timing_to = element.evening_timing_to;
                          evening_fare_per = element.evening_fare;
                          waiting_per_hour = element.waiting_time;
                          minutes_cost = element.minutes_fare;
                          time = element.time;
                          waiting_cost_min = element.waiting_time;

                          /* Sasidharan Sep 24 2024 */
                          let airport_pickup_fare = element.airport_pickup_fare;
                          let airport_drop_fare = element.airport_drop_fare;

                          hourly_fare_list = element.hourly_fare_list;
                          grace_waiting_time = element.grace_waiting_time;
                          grace_km = element.grace_km;
                          per_min_time = element.per_min_time;
                          per_minutes_fare = element.per_minutes_fare;
                          nightfare_applicable = 0;
                          evefare_applicable = 0;

                          var minutes = timeinterval / 60;

                          minutes = Math.ceil(minutes);
                          //console.log('ftotal_fare',total_fare);

                          if (
                            minutes <= time &&
                            global.settings.fare_calculation_type == 2
                          ) {
                            total_fare = minutes_fare = base_fare;
                          }

                          if (
                            global.settings.fare_calculation_type == 2 ||
                            global.settings.fare_calculation_type == 3
                          ) {
                            //console.log('total_mins',minutes);
                            //console.log('time',time);

                            if (minutes > 0 && minutes > time) {
                              //minute_per_time = Math.ceil(minutes/time);
                              minute_per_time = Math.ceil(minutes - time);
                              //minutes_cost = minute_per_time*minutes_cost;
                              minutes_cost =
                                minutes_cost +
                                minute_per_time * per_minutes_fare;

                              //console.log("minutes_cost",minutes_cost);
                              //console.log("minute_per_time",minute_per_time);
                              c_fare = total_fare + minutes_cost;
                              if (c_fare < min_fare) {
                                total_fare = minutes_fare = roundUp(
                                  min_fare,
                                  1
                                );
                              } else {
                                total_fare = minutes_fare = roundUp(c_fare, 1);
                              }
                            }
                          }

                          trip_fare = total_fare;
                          //console.log('tax',tax);

                          if (global.settings.q8taxi_enable == 1) {
                            tax_amount = (tax / 100) * total_fare;
                            //console.log('tax_amount',tax_amount);
                            total_fare = total_fare + tax_amount;
                          }
                          filterZoneFareByModel(
                            q,
                            zone_fare_list,
                            element
                          ).then(function (zoneFareDetails) {
                            var zone_fare_applicable = 0;
                            var zone_fare_type = 0;
                            var zone_id = 0;
                            var zone_fare = 0;
                            if (
                              zoneFareDetails.total_fare &&
                              zoneFareDetails.total_fare != "" &&
                              zoneFareDetails.total_fare != 0
                            ) {
                              total_fare = zoneFareDetails.total_fare;
                              zone_fare = zoneFareDetails.total_fare;
                            }
                            if (
                              zoneFareDetails.zone_fare_applicable &&
                              zoneFareDetails.zone_fare_applicable != ""
                            ) {
                              zone_fare_applicable =
                                zoneFareDetails.zone_fare_applicable;
                            }
                            if (
                              zoneFareDetails.zone_fare_type &&
                              zoneFareDetails.zone_fare_type != ""
                            ) {
                              zone_fare_type = zoneFareDetails.zone_fare_type;
                            }
                            if (
                              zoneFareDetails.zone_id &&
                              zoneFareDetails.zone_id != ""
                            ) {
                              zone_id = zoneFareDetails.zone_id;
                            }

                            var final_fare = {
                              model_id: element.model_id,
                              approx_fare: parseFloat(total_fare).toFixed(2),
                            };
                            fare_list.push(final_fare);

                            //console.log('total_fare model_id-'+element.model_id,total_fare);

                            //~ if(element.model_id == motor_model) {
                            //~ fare_details = element;
                            //~ return fare_details;
                            //~ }

                            fare_details.fare_calculation_type =
                              global.settings.fare_calculation_type;

                            apimodel
                              .nearest_drivers(
                                q,
                                element.model_id,
                                latitude,
                                longitude
                              )
                              .then(function (driver_list) {

                                // console.error("============ DRIVERS LIST 2 ============")
                                // console.error(driver_list);
                                // console.error("============ DRIVERS LIST END ============")

                                j++;
                                //03 Feb 2020

                                //console.log('manual_status',element.manual_status);
                                //console.log('custom_status',element.custom_status);

                                /*
										if(element.surge_pricing_status == 'A' && zone_fare_applicable != 1) {
											if(element.custom_status.length > 0) { // Custom Default Interval Available
												if(element.surge_pricing_custom_interval.length > 0) {
													var surge_pricing_status = 'A';
												} else {
													var surge_pricing_status = 'I';
												}											
											} else if(element.custom_status_inactive.length > 0) { // Custom No Default Interval Available
												var surge_pricing_status = 'I';											
											} else { // Manual Default Interval Available
												if(element.surge_pricing_manual_interval.length > 0) {
													var surge_pricing_status = 'A';
												} else {
													var surge_pricing_status = 'I';
												}
											}
										} else {
											var surge_pricing_status = 'I';
										}*/

                                //26 feb 2021
                                if (
                                  element.surge_pricing_status == "A" &&
                                  zone_fare_applicable != 1
                                ) {
                                  var surge_pricing_status = "A";
                                } else {
                                  var surge_pricing_status = "I";
                                }

                                var total_drivers = element.total_drivers;
                                var free_drivers = driver_list.length;
                                //var free_drivers = 3;

                                var free_drivers_percentage =
                                  (parseInt(free_drivers) /
                                    parseInt(total_drivers)) *
                                  100;
                                var surge_pricing_interval =
                                  element.surge_pricing_interval;

                                var percentage_arr = [];
                                surge_pricing_interval.forEach(function (curr) {
                                  percentage_arr.push(curr.from);
                                });

                                var applied_percentage = closest(
                                  percentage_arr,
                                  free_drivers_percentage
                                );

                                var surge_fare = (surge_display_fare = 0);
                                surge_pricing_interval.forEach(function (curr) {
                                  if (
                                    parseFloat(curr.from) ==
                                    parseFloat(applied_percentage)
                                  ) {
                                    surge_fare = curr.fare;
                                    surge_display_fare = curr.display_fare;
                                  }
                                });

                                //console.log('interval',surge_pricing_interval);
                                //console.log('total_drivers',total_drivers);
                                //console.log('free_drivers',free_drivers);
                                //console.log('free_drivers_percentage',free_drivers_percentage);
                                //console.log('percentage_arr',percentage_arr);
                                //console.log('applied_percentage',applied_percentage);
                                //console.log('surge_fare',surge_fare);
                                //console.log('surge_display_fare',surge_fare);
                                var book_later_fare = element.book_later_fare;
                                var book_later_display_fare =
                                  element.book_later_display_fare;
                                var book_later_time_interval =
                                  element.book_later_time_interval;

                                var surge_pricing_info = [
                                  {
                                    fare: surge_fare,
                                    display_fare: surge_display_fare,
                                    book_later_fare: book_later_fare,
                                    book_later_display_fare:
                                      book_later_display_fare,
                                    book_later_time_interval:
                                      book_later_time_interval,
                                    default: 1,
                                  },
                                ];

                                if (free_drivers == 0) {
                                  //surge_pricing_status = 'I';
                                  //surge_pricing_info = [{"fare":0,"display_fare":"0x","default":1}];
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
                                const currentDate = new Date();
                                let day = weekday[currentDate.getDay()];
                                let surgePriceStatus = surgePriceToday[day];
                                if (surgePriceStatus == 0) {
                                  surge_pricing_status = "I";
                                }

                                /* Sasidharan Sep 24 2024 */
                                let walletBalance =
                                  profile_results[0]["wallet_amount"];
                                let name = profile_results[0]["name"];
                                let requiredWalletBalance =
                                  +parseFloat(total_fare).toFixed(2) -
                                  parseFloat(walletBalance).toFixed(2);
                                requiredWalletBalance =
                                  requiredWalletBalance > 0
                                    ? Math.ceil(requiredWalletBalance)
                                    : 0;

                                let airportPickupRequiredBalance =
                                  +parseFloat(airport_pickup_fare).toFixed(2) -
                                  parseFloat(walletBalance).toFixed(2);
                                let airportDropRequiredBalance =
                                  +parseFloat(airport_drop_fare).toFixed(2) -
                                  parseFloat(walletBalance).toFixed(2);

                                airportPickupRequiredBalance =
                                  airportPickupRequiredBalance > 0
                                    ? Math.ceil(airportPickupRequiredBalance)
                                    : 0;
                                airportDropRequiredBalance =
                                  airportDropRequiredBalance > 0
                                    ? Math.ceil(airportDropRequiredBalance)
                                    : 0;

                                let amountStr = `${requiredWalletBalance} ${global.settings.currency_format}`;
                                let amountStrAirportPickup = `${airportPickupRequiredBalance} ${global.settings.currency_format}`;
                                let amountStrAirportDrop = `${airportDropRequiredBalance} ${global.settings.currency_format}`;

                                let walletBalanceMessage =
                                  passenger_socket_i18n.__(
                                    "wallet_recharge_message"
                                  );
                                // let walletBalanceMessage = "Dear ##PASSENGER##, please recharge your wallet with at least ##WALLET_AMOUNT## to proceed with the booking. Thank you!";
                                walletBalanceMessage =
                                  walletBalanceMessage.replace(
                                    "##PASSENGER##",
                                    name
                                  );
                                walletBalanceMessage =
                                  walletBalanceMessage.replace(
                                    "##WALLET_AMOUNT##",
                                    amountStr
                                  );
                                let airportPickupWalletBalanceMessage =
                                  passenger_socket_i18n.__(
                                    "wallet_recharge_message"
                                  );
                                airportPickupWalletBalanceMessage =
                                  airportPickupWalletBalanceMessage.replace(
                                    "##PASSENGER##",
                                    name
                                  );
                                airportPickupWalletBalanceMessage =
                                  airportPickupWalletBalanceMessage.replace(
                                    "##WALLET_AMOUNT##",
                                    amountStrAirportPickup
                                  );
                                let airportDropWalletBalanceMessage =
                                  passenger_socket_i18n.__(
                                    "wallet_recharge_message"
                                  );
                                airportDropWalletBalanceMessage =
                                  airportDropWalletBalanceMessage.replace(
                                    "##PASSENGER##",
                                    name
                                  );
                                airportDropWalletBalanceMessage =
                                  airportDropWalletBalanceMessage.replace(
                                    "##WALLET_AMOUNT##",
                                    amountStrAirportDrop
                                  );
                                let isVipUser = profile_results[0]["vip_user"];
                                if (isVipUser) {
                                  requiredWalletBalance = 0;
                                  airportPickupRequiredBalance = 0;
                                  airportDropRequiredBalance = 0;
                                }

                                //console.log('surge_pricing_info',surge_pricing_info);
                                if (driver_list.length != 0) {
                                  //var arr = { "model_id": element.model_id, "approx_fare": parseFloat(total_fare).toFixed(2), "driver_status": 1, "surge_pricing_status": surge_pricing_status,"surge_pricing_fare_list": element.surge_pricing_fare_list,"surge_pricing_fare_info": element.surge_pricing_fare_info,"zone_fare_applicable":zone_fare_applicable,"zone_fare_type":zone_fare_type,"zone_fare":zone_fare,"zone_id":zone_id};
                                  var arr = {
                                    model_id: element.model_id,
                                    priority: element.priority,
                                    approx_fare:
                                      parseFloat(total_fare).toFixed(2),
                                    driver_status: 1,
                                    surge_pricing_status: surge_pricing_status,
                                    surge_pricing_fare_list:
                                      element.surge_pricing_fare_list,
                                    surge_pricing_fare_info: surge_pricing_info,
                                    zone_fare_applicable: zone_fare_applicable,
                                    zone_fare_type: zone_fare_type,
                                    zone_fare: zone_fare,
                                    zone_id: zone_id,
                                    /* Sasidharan Sep 24 2024 */
                                    requiredWalletBalance:
                                      requiredWalletBalance,
                                    walletBalanceMessage,
                                    airportPickupRequiredBalance,
                                    airportDropRequiredBalance,
                                    airport_pickup_fare,
                                    airport_drop_fare,
                                    airportDropWalletBalanceMessage,
                                    airportPickupWalletBalanceMessage,
                                  };
                                } else {
                                  //var arr = { "model_id": element.model_id, "approx_fare": parseFloat(total_fare).toFixed(2), "driver_status": 0, "surge_pricing_status": surge_pricing_status,"surge_pricing_fare_list": element.surge_pricing_fare_list,"surge_pricing_fare_info": element.surge_pricing_fare_info,"zone_fare_applicable":zone_fare_applicable,"zone_fare_type":zone_fare_type,"zone_fare":zone_fare,"zone_id":zone_id};
                                  var arr = {
                                    model_id: element.model_id,
                                    priority: element.priority,
                                    approx_fare:
                                      parseFloat(total_fare).toFixed(2),
                                    driver_status: 0,
                                    surge_pricing_status: surge_pricing_status,
                                    surge_pricing_fare_list:
                                      element.surge_pricing_fare_list,
                                    surge_pricing_fare_info: surge_pricing_info,
                                    zone_fare_applicable: zone_fare_applicable,
                                    zone_fare_type: zone_fare_type,
                                    zone_fare: zone_fare,
                                    zone_id: zone_id,
                                    /* Sasidharan Sep 24 2024 */
                                    requiredWalletBalance:
                                      requiredWalletBalance,
                                    walletBalanceMessage,
                                    airportPickupRequiredBalance,
                                    airportDropRequiredBalance,
                                    airport_pickup_fare,
                                    airport_drop_fare,
                                    airportDropWalletBalanceMessage,
                                    airportPickupWalletBalanceMessage,
                                  };
                                }

                                // console.error("===================");
                                // console.error(
                                //   "Wallet Amount",
                                //   parseFloat(
                                //     profile_results[0]["wallet_amount"]
                                //   ).toFixed(2)
                                // );
                                // console.error(
                                //   "airport_pickup_fare",
                                //   airport_pickup_fare
                                // );
                                // console.error(
                                //   "airport_drop_fare",
                                //   airport_drop_fare
                                // );
                                // console.error("===================");

                                //26 feb 2021

                                model_info.push(arr);
                                //console.log('count',model_details.length);
                                //console.log('model_id',element.model_id);
                                //console.log('count j',j);

                                // if (model_details.length == j) {
                                  try {
                                    sortByKeyAsc(model_info, "priority");
                                    var k = 0;
                                    model_info.forEach(function (element) {
                                      model_info[k].approx_fare =
                                        fare_list[k].approx_fare;
                                      k++;
                                    });

                                    // console.error(
                                    //   "========== MODEL INFO =========="
                                    // );
                                    // console.error(model_info);
                                    // console.error(
                                    //   "========== MODEL INFO END =========="
                                    // );

                                    //console.log('info',model_info);

                                    //console.log('Element',element);
                                    if (element.model_id == motor_model) {
                                      //console.log('result',element);
                                      fare_details = element;
                                      //return fare_details;
                                    } else if(motor_model == "") {
                                      fare_details = element;
                                    }
                                    var message = {};

                                    /* Sasidharan Aug 31 2024 */
                                    let status =
                                      typeof profile_results[0][
                                        "user_status"
                                      ] != "undefined"
                                        ? profile_results[0]["user_status"]
                                        : "A";
                                    message.passenger = {
                                      showPopup: 0,
                                      status: status,
                                      message: "",
                                    };
                                    if (status == "T" || status == "PB") {
                                      message.passenger.showPopup = 1;
                                      message.passenger.message =
                                        "Your account has been deleted. If you have any questions or require further information, please don't hesitate to contact our customer support team.";
                                    }

                                    message.message =
                                      passenger_socket_i18n.__("success");
                                    message.detail = driver_details;
                                    message.fare_details =
                                      model_details[motor_model - 1];
                                    //message.all_fare_details = model_details;
                                    message.model_info = model_info;
                                    message.fare_info = fare_list;

                                    /* Sasidharan may 28 2025 */
                                    message.passenger = {
                                      wallet_amount : typeof profile_results[0][
                                        "wallet_amount"
                                      ] != "undefined"
                                        ? profile_results[0]["wallet_amount"]
                                        : 0
                                    }

                                    message.driver_around_miles =
                                      global.settings.default_mile;
                                    message.metric =
                                      global.settings.default_mile;
                                    message.status = 1;
                                    //console.log('result',message);
                                    //console.log("nearestdriverslist-end", passenger_id, new Date());
                                    var current_time = new Date();
                                    message.current_time = moment()
                                      .tz("Asia/Kuwait")
                                      .format("YYYY-MM-DD HH:mm:ss");
                                    deferred.resolve(message);
                                    deferred.makeNodeResolver();
                                    message = null;
                                  } catch (err) {
                                    console.log(err);
                                  }
                                // }
                              });
                          });
                        })
                        .catch((err) => {
                          console.log(err);
                        });
                    });
        } else {
          message.message = passenger_socket_i18n.__("invalid_user");
          message.model_info = [];
          message.status = -1;
          var current_time = new Date();
          message.current_time = moment()
            .tz("Asia/Kuwait")
            .format("YYYY-MM-DD HH:mm:ss");
          deferred.resolve(message);
          deferred.makeNodeResolver();
          message = null;
        }
      
  } else {
    console.log("Rejected!!!!");
    console.log("nearestdriverslist-end-rejected", passenger_id, new Date());
    message.message = passenger_socket_i18n.__("no_vehicle_msg");
    message.status = -1;
    var current_time = new Date();
    message.current_time = moment()
      .tz("Asia/Kuwait")
      .format("YYYY-MM-DD HH:mm:ss");
    deferred.resolve(message);
    deferred.makeNodeResolver();
    message = null;
  }

  return deferred.promise;
};

var calculateZoneFare = async function (
  q,
  longitude,
  latitude,
  drop_longitude,
  drop_latitude
) {
  let zoneFareList = {};
  let zoneDetails = await apimodel.search_zone_service(
    q,
    longitude,
    latitude,
    false
  );
  if (zoneDetails.length > 0) {
    const zone_id = zoneDetails[0]._id ? zoneDetails[0]._id : 0;
    if (zone_id != 0) {
      let zoneFare = await apimodel.get_zone_fare(q, zone_id, "");
      if (zoneFare.length > 0) {
        zoneFareList.zoneFare = zoneFare;
        zoneFareList.zone_fare_type = parseInt(1);
      }
    }
  }
  console.log(drop_latitude, drop_longitude);
  if (
    drop_latitude &&
    drop_longitude &&
    drop_latitude != "" &&
    drop_longitude != ""
  ) {
    console.log("heeeree");
    let zoneDetails = await apimodel.search_zone_service(
      q,
      drop_longitude,
      drop_latitude,
      true
    );
    if (zoneDetails.length > 0) {
      const zone_id = zoneDetails[0]._id ? zoneDetails[0]._id : 0;
      console.log("drop zone id", zone_id);
      if (zone_id != 0) {
        let zoneFare = await apimodel.get_zone_fare(q, zone_id, "");
        if (zoneFare.length > 0) {
          zoneFareList.zoneFare = zoneFare;
          zoneFareList.zone_fare_type = parseInt(2);
        }
      }
    }
  }
  return zoneFareList;
};

var filterZoneFareByModel = async function (q, zone_fare_list, element) {
  let zoneFareDetails = {};
  if (zone_fare_list && zone_fare_list.zoneFare) {
    let zoneFare = zone_fare_list.zoneFare.filter((item) => {
      return item.model_id === element.model_id;
    });

    if (zoneFare.length > 0) {
      zoneFareDetails.zone_fare_applicable = parseInt(1);
      zoneFareDetails.zone_fare_type = zone_fare_list.zone_fare_type;
      zoneFareDetails.zone_id = zoneFare[0].zone_id ? zoneFare[0].zone_id : 0;
      zoneFareDetails.total_fare = zoneFare[0].zone_fixed_fare
        ? zoneFare[0].zone_fixed_fare
        : 0;
    }
  }
  return zoneFareDetails;
};

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

function sortByKeyAsc(array, key) {
  return array.sort(function (a, b) {
    var x = a[key];
    var y = b[key];
    return x < y ? -1 : x > y ? 1 : 0;
  });
}

function check_time_between(startTime, endTime) {
  currentDate = new Date();

  startDate = new Date(currentDate.getTime());
  startDate.setHours(startTime.split(":")[0]);
  startDate.setMinutes(startTime.split(":")[1]);
  startDate.setSeconds(0);

  endDate = new Date(currentDate.getTime());
  endDate.setHours(endTime.split(":")[0]);
  endDate.setMinutes(endTime.split(":")[1]);
  endDate.setSeconds(0);

  valid = startDate < currentDate && endDate > currentDate;
  console.log("startTime", startTime);
  console.log("endTime", endTime);
  console.log("check", valid);

  if (valid == true) {
    return 1;
  } else {
    return 0;
  }
}

function roundUp(num, precision) {
  precision = Math.pow(10, precision);
  return Math.ceil(num * precision) / precision;
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
