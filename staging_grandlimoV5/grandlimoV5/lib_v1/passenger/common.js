var querystring = require("querystring");
var apimodel = require("../../models/passapimodel_v1");
var axios = require("axios");
var time = require("time");
var async = require("async");
var dateFormat = require("dateformat");
var dateformatter = require("date-format-php");
var t = require("../../config/table_config.json");
var passenger_socket_i18n = require("i18n");
var db = require("../../config/dbconnection");

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
          const postData = querystring.stringify({
            username: global.settings.smsbox_username,
            password: global.settings.smsbox_password,
            customerid: global.settings.smsbox_customerid,
            sendertext: global.settings.smsbox_senderid,
            messagebody: msg,
            recipientnumbers: to,
            defdate: "",
            isblink: "false",
            isflash: "false",
          });

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

// Ramya 2025 july ----Start-----
exports.estimated_fare_api = function (q, req) {
  var {
    motor_model,
    latitude,
    longitude,
    passenger_id,
    timeinterval,
    drop_latitude,
    drop_longitude,
  } = req.body;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  if (passenger_id) {
    var model_info = [];
    var fare_details = [];
    var fare_list = [];

    apimodel
      .passenger_profile_by_id(q, passenger_id)
      .then(function (profile_results) {
        if (profile_results.length > 0) {
          calculateZoneFare(
            q,
            longitude,
            latitude,
            drop_longitude,
            drop_latitude
          )
            .then(function (zone_fare_list) {
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
                      airport_pickup_fare = element.airport_pickup_fare;
                      airport_drop_fare = element.airport_drop_fare;
                      hourly_fare_list = element.hourly_fare_list;
                      grace_waiting_time = element.grace_waiting_time;
                      grace_km = element.grace_km;
                      per_min_time = element.per_min_time;
                      per_minutes_fare = element.per_minutes_fare;
                      nightfare_applicable = 0;
                      evefare_applicable = 0;

                      var minutes = timeinterval / 60;
                      // var minutes = timeinterval;

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
                            minutes_cost + minute_per_time * per_minutes_fare;

                          //console.log("minutes_cost",minutes_cost);
                          //console.log("minute_per_time",minute_per_time);
                          c_fare = total_fare + minutes_cost;
                          if (c_fare < min_fare) {
                            total_fare = minutes_fare = roundUp(min_fare, 1);
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
                      filterZoneFareByModel(q, zone_fare_list, element).then(
                        function (zoneFareDetails) {
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
                              j++;

                              //26 feb 2021
                              if (
                                element.surge_pricing_status == "A" &&
                                zone_fare_applicable != 1
                              ) {
                                var surge_pricing_status = "A";
                              } else {
                                var surge_pricing_status = "I";
                              }
                              var free_drivers = driver_list.length;
                              var total_drivers = element.total_drivers;
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
                              var model_info = [];

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

                              var arr = {
                                model_id: element.model_id,
                                priority: element.priority,
                                approx_fare: parseFloat(total_fare).toFixed(2),
                                surge_pricing_status: surge_pricing_status,
                                surge_pricing_fare_list:
                                  element.surge_pricing_fare_list,
                                surge_pricing_fare_info: surge_pricing_info,
                                zone_fare_applicable: zone_fare_applicable,
                                zone_fare_type: zone_fare_type,
                                zone_fare: zone_fare,
                                zone_id: zone_id,
                              };

                              //26 feb 2021

                              model_info.push(arr);

                              if (model_details.length == j) {
                                try {
                                  sortByKeyAsc(model_info, "priority");
                                  var k = 0;
                                  model_info.forEach(function (element) {
                                    model_info[k].approx_fare =
                                      fare_list[k].approx_fare;
                                    k++;
                                  });

                                  if (element.model_id == motor_model) {
                                    fare_details = element;
                                  }
                                  var message = {};

                                  /* Sasidharan Aug 31 2024 */
                                  // let status =
                                  //   typeof profile_results[0]["user_status"] !=
                                  //   "undefined"
                                  //     ? profile_results[0]["user_status"]
                                  //     : "A";
                                  // message.passenger = {
                                  //   showPopup: 0,
                                  //   status: status,
                                  //   message: "",
                                  // };
                                  // if (status == "T" || status == "PB") {
                                  //   message.passenger.showPopup = 1;
                                  //   message.passenger.message =
                                  //     "Your account has been deleted. If you have any questions or require further information, please don't hesitate to contact our customer support team.";
                                  // }

                                  message.message = "success";

                                  message.model_info = model_info;

                                  message.status = 1;

                                  message.current_time = moment()
                                    .tz("Asia/Kuwait")
                                    .format("YYYY-MM-DD HH:mm:ss");
                                  deferred.resolve(message);
                                  deferred.makeNodeResolver();
                                  message = null;
                                } catch (err) {
                                  console.log(err);
                                }
                              }
                            });
                        }
                      );
                    })
                    .catch((err) => {
                      console.log(err);
                    });
                });
            })
            .catch((err) => {
              console.log(err);
            });
        } else {
          message.message = "invalid_user";
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
  } else {
    console.error("Rejected!!!!");
    message.message = "Request rejected!";
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
// Ramya 2025 july ----end-----

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
      if (time_difference >= 2000) {
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
  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  // console.error(
  //   "&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&7"
  // );
  // console.error("timeinterval : ", timeinterval);
  // console.error(
  //   "&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&7"
  // );
  if (!passengerObj.has(passenger_id) || update_time_difference(passenger_id)) {
    passengerObj.set(passenger_id, { last_update_time: new Date() });
    var hostname = global.settings.base_url;

    var model_info = [];
    var result_array = [];
    var driver_details = [];
    var driver_info = [];
    var fare_info = "";
    var fare_details = [];
    var fare_list = [];

    let profile_results = await apimodel.passenger_profile_by_id(
      q,
      passenger_id
    );

    if (profile_results.length > 0) {
      let zone_fare_list = await calculateZoneFare(
        q,
        longitude,
        latitude,
        drop_longitude,
        drop_latitude,
        version_no
      );
      // console.error("zone_fare_list : ", zone_fare_list);
      let driver_list = await apimodel.nearest_drivers(
        q,
        motor_model,
        latitude,
        longitude
      );

      let [pickupAirport, dropAirport] = await Promise.all([
        isAirportZone(longitude, latitude),
        isAirportZone(drop_longitude, drop_latitude),
      ]);
      // console.error(
      //   "@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@"
      // );
      // console.error("pickupAirport : ", pickupAirport);
      // console.error("dropAirport : ", dropAirport);
      // console.error(
      //   "@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@"
      // );

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

      let model_details = await apimodel.all_model_fare_details(q, "");

      var tax = global.settings.tax;
      var j = 0;
      // model_details
      //   .forEach(async function (element) {

      for (let i = 0; i < model_details.length; i++) {
        let element = model_details[i];
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
        // var minutes = timeinterval;

        minutes = Math.ceil(minutes);

        console.error(
          "&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&7"
        );
        console.error("minutes : ", minutes);
        console.error(
          "&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&7"
        );
        console.error(
          "&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&7"
        );
        console.error("time : ", time);
        console.error(
          "&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&7"
        );
        if (minutes <= time && global.settings.fare_calculation_type == 2) {
          total_fare = minutes_fare = base_fare;
        }

        if (
          global.settings.fare_calculation_type == 2 ||
          global.settings.fare_calculation_type == 3
        ) {
          if (minutes > 0 && minutes > time) {
            minute_per_time = Math.ceil(minutes - time);
            // console.error(
            //   "______________minute_per_time______________ : ",
            //   minute_per_time
            // );
            // console.error("per_minutes_fare : ", per_minutes_fare);
            minutes_cost = minutes_cost + minute_per_time * per_minutes_fare;
            // console.error(
            //   "minutes_cost : ",
            //   "____________________________ : ",
            //   minutes_cost
            // );
            c_fare = total_fare + minutes_cost;
            if (c_fare < min_fare) {
              total_fare = minutes_fare = roundUp(min_fare, 1);
            } else {
              total_fare = minutes_fare = roundUp(c_fare, 1);
            }
          }
        }
        // console.error("total_fare : ", total_fare);
        trip_fare = total_fare;

        if (global.settings.q8taxi_enable == 1) {
          tax_amount = (tax / 100) * total_fare;
          total_fare = total_fare + tax_amount;
        }
        let zoneFareDetails = await filterZoneFareByModel(
          q,
          zone_fare_list,
          element
        );
        console.error(
          "&&&&&&&&*********$$$$$$$@@@@@@@@@$$$$$$$$#####%%%%%%%%%%!!!!!!!!^^^^^^^^^"
        );
        console.error("zoneFareDetails : ", zoneFareDetails);
        console.error(
          "&&&&&&&&*********$$$$$$$@@@@@@@@@$$$$$$$$#####%%%%%%%%%%!!!!!!!!^^^^^^^^^"
        );

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
          console.error("zone_fare : ", zone_fare);

          airport_pickup_fare = zoneFareDetails.total_fare;
          airport_drop_fare = zoneFareDetails.total_fare;
        }
        if (
          zoneFareDetails.zone_fare_applicable &&
          zoneFareDetails.zone_fare_applicable != ""
        ) {
          zone_fare_applicable = zoneFareDetails.zone_fare_applicable;
        }
        if (
          zoneFareDetails.zone_fare_type &&
          zoneFareDetails.zone_fare_type != ""
        ) {
          zone_fare_type = zoneFareDetails.zone_fare_type;
        }
        if (zoneFareDetails.zone_id && zoneFareDetails.zone_id != "") {
          zone_id = zoneFareDetails.zone_id;
        }

        fare_details.fare_calculation_type =
          global.settings.fare_calculation_type;

        let driver_list = await apimodel.nearest_drivers(
          q,
          element.model_id,
          latitude,
          longitude
        );
        j++;
        console.error(
          " 1 &&&&&&&&*********$$$$$$$@@@@@@@@@$$$$$$$$#####%%%%%%%%%%!!!!!!!!^^^^^^^^^"
        );

        console.error(
          "airport_pickup_fare and airport_drop_fare :  ",
          airport_pickup_fare,
          airport_drop_fare
        );
        console.error(
          "&&&&&&&&*********$$$$$$$@@@@@@@@@$$$$$$$$#####%%%%%%%%%%!!!!!!!!^^^^^^^^^"
        );

        // let driver_list_test = await apimodel.nearest_drivers_test(
        //   q,
        //   element.model_id,
        //   latitude,
        //   longitude
        // );
        // j++;
        // console.error("driver_list_test : ", driver_list_test);
        // console.error("driver_list : ", driver_list);

        if (element.surge_pricing_status == "A" && zone_fare_applicable != 1) {
          var surge_pricing_status = "A";
        } else {
          var surge_pricing_status = "I";
        }

        var total_drivers = element.total_drivers;
        var free_drivers = driver_list.length;
        console.error("free_drivers : ", free_drivers);
        var free_drivers_percentage =
          (parseInt(free_drivers) / parseInt(total_drivers)) * 100;
        var surge_pricing_interval = element.surge_pricing_interval;

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
          if (parseFloat(curr.from) == parseFloat(applied_percentage)) {
            surge_fare = curr.fare;
            surge_display_fare = curr.display_fare;
          }
        });

        var book_later_fare = element.book_later_fare;
        var book_later_display_fare = element.book_later_display_fare;
        var book_later_time_interval = element.book_later_time_interval;

        var surge_pricing_info = [
          {
            fare: surge_fare,
            display_fare: surge_display_fare,
            book_later_fare: book_later_fare,
            book_later_display_fare: book_later_display_fare,
            book_later_time_interval: book_later_time_interval,
            default: 1,
          },
        ];

        console.error("surge_pricing_info : ", surge_pricing_info);

        /* Sasidharan Feb 06 2023 */
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

        const currentDate = new Date();
        let day = weekday[currentDate.getDay()];
        let surgePriceStatus = surgePriceToday[day];
        let surge_price = 0;
        if (surgePriceStatus == 0) {
          surge_pricing_status = "I";
        } else {
          surge_price = (surge_fare / 100) * total_fare;
          surge_price = parseFloat(surge_price).toFixed(2);
          console.error(
            "&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&7"
          );
          console.error("surge_price : ", surge_price);
          console.error(
            "&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&7"
          );
          total_fare = parseFloat(total_fare) + parseFloat(surge_price);
        }

        /* Sasidharan Sep 24 2024 */
        let walletBalance = profile_results[0]["wallet_amount"];
        let name = profile_results[0]["name"];
        let requiredWalletBalance =
          +parseFloat(total_fare).toFixed(2) -
          parseFloat(walletBalance).toFixed(2);
        requiredWalletBalance =
          requiredWalletBalance > 0 ? Math.ceil(requiredWalletBalance) : 0;

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

        let c = passenger_socket_i18n.__("wallet_recharge_message");
        let walletBalanceMessage =
          "Dear ##PASSENGER##, please recharge your wallet with at least ##WALLET_AMOUNT## to proceed with the booking. Thank you!";
        walletBalanceMessage = walletBalanceMessage.replace(
          "##PASSENGER##",
          name
        );
        walletBalanceMessage = walletBalanceMessage.replace(
          "##WALLET_AMOUNT##",
          amountStr
        );
        let airportPickupWalletBalanceMessage = passenger_socket_i18n.__(
          "wallet_recharge_message"
        );
        airportPickupWalletBalanceMessage =
          airportPickupWalletBalanceMessage.replace("##PASSENGER##", name);
        airportPickupWalletBalanceMessage =
          airportPickupWalletBalanceMessage.replace(
            "##WALLET_AMOUNT##",
            amountStrAirportPickup
          );
        let airportDropWalletBalanceMessage = passenger_socket_i18n.__(
          "wallet_recharge_message"
        );
        airportDropWalletBalanceMessage =
          airportDropWalletBalanceMessage.replace("##PASSENGER##", name);
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

        if (driver_list.length != 0) {
          var arr = {
            model_id: element.model_id,
            priority: element.priority,
            approx_fare: parseFloat(total_fare).toFixed(2),
            driver_status: 1,
            surge_pricing_status: surge_pricing_status,
            surge_pricing_fare_list: element.surge_pricing_fare_list,
            surge_pricing_fare_info: surge_pricing_info,
            surge_price: surge_price,
            zone_fare_applicable: zone_fare_applicable,
            zone_fare_type: zone_fare_type,
            zone_fare: zone_fare,
            zone_id: zone_id,
            requiredWalletBalance: requiredWalletBalance,
            walletBalanceMessage,
            airportPickupRequiredBalance,
            airportDropRequiredBalance,
            airport_pickup_fare,
            airport_drop_fare,
            airportDropWalletBalanceMessage,
            airportPickupWalletBalanceMessage,
          };
        } else {
          var arr = {
            model_id: element.model_id,
            priority: element.priority,
            approx_fare: parseFloat(total_fare).toFixed(2),
            driver_status: -1,
            surge_pricing_status: surge_pricing_status,
            surge_pricing_fare_list: element.surge_pricing_fare_list,
            surge_pricing_fare_info: surge_pricing_info,
            surge_price: surge_price,
            zone_fare_applicable: zone_fare_applicable,
            zone_fare_type: zone_fare_type,
            zone_fare: zone_fare,
            zone_id: zone_id,
            requiredWalletBalance: requiredWalletBalance,
            walletBalanceMessage,
            airportPickupRequiredBalance,
            airportDropRequiredBalance,
            airport_pickup_fare,
            airport_drop_fare,
            airportDropWalletBalanceMessage,
            airportPickupWalletBalanceMessage,
          };
        }
        console.error("model_info with est fare : ", arr);
        model_info.push(arr);

        var final_fare = {
          model_id: element.model_id,
          approx_fare: parseFloat(total_fare).toFixed(2),
        };

        // if (
        //   (pickupAirport && pickupAirport.length) ||
        //   (dropAirport && dropAirport.length)
        // ) {
        //   if (pickupAirport && pickupAirport.length) {
        //     final_fare.approx_fare = parseFloat(
        //       element.airport_pickup_fare
        //     ).toFixed(2);
        //   } else {
        //     final_fare.approx_fare = parseFloat(
        //       element.airport_drop_fare
        //     ).toFixed(2);
        //   }
        // }

        if (
          (pickupAirport && pickupAirport.length) ||
          (dropAirport && dropAirport.length)
        ) {
          if (pickupAirport && pickupAirport.length) {
            final_fare.approx_fare = parseFloat(airport_pickup_fare).toFixed(2);
          } else {
            final_fare.approx_fare = parseFloat(airport_drop_fare).toFixed(2);
          }
        }

        console.error(
          " 2 &&&&&&&&*********$$$$$$$@@@@@@@@@$$$$$$$$#####%%%%%%%%%%!!!!!!!!^^^^^^^^^"
        );

        console.error(
          "airport_pickup_fare and airport_drop_fare :  ",
          airport_pickup_fare,
          airport_drop_fare
        );
        console.error(
          "&&&&&&&&*********$$$$$$$@@@@@@@@@$$$$$$$$#####%%%%%%%%%%!!!!!!!!^^^^^^^^^"
        );

        fare_list.push(final_fare);

        if (model_details.length == j) {
          try {
            sortByKeyAsc(model_info, "priority");
            var k = 0;
            model_info.forEach(function (element) {
              model_info[k].approx_fare = fare_list[k].approx_fare;
              k++;
            });

            if (element.model_id == motor_model) {
              fare_details = element;
            } else if (motor_model == "") {
              fare_details = element;
            }
            // var message = {};
            // console.error("fare_list : ", fare_list);
            let status =
              typeof profile_results[0]["user_status"] != "undefined"
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
            console.error(
              "##################################################################################################################################"
            );
            console.error(
              "model_details[motor_model - 1] : ",
              model_details[motor_model - 1]
            );
            console.error("driver_details : ", driver_details);
            console.error("fare_list : ", fare_list);
            console.error("fare_details : ", model_details);

            console.error("model_info : ", model_info);

            message.message = passenger_socket_i18n.__("success");
            message.detail = driver_details;
            message.fare_details = model_details[motor_model - 1];

            //message.all_fare_details = model_details;
            message.model_info = model_info;
            message.fare_info = fare_list;
            // console.error("fare_details : ", fare_details);

            /* Sasidharan may 28 2025 */
            message.passenger = {
              wallet_amount:
                typeof profile_results[0]["wallet_amount"] != "undefined"
                  ? profile_results[0]["wallet_amount"]
                  : 0,
            };

            message.driver_around_miles = global.settings.default_mile;
            message.metric = global.settings.default_mile;
            //ramya 2023
            message.passengerSettings = {
              push_notification: profile_results[0].push_notification,
              perferred_temparature: profile_results[0].perferred_temparature,
              conversation: profile_results[0].conversation,
              door_assistance: profile_results[0].door_assistance,
              notes_for_driver: profile_results[0].notes_for_driver,
              bookForSomeone: profile_results[0].bookForSomeone,
            };
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
        }
        // })
      }
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
    console.error("THROTTLED REJECTION — passenger", passenger_id);
  } else {
    console.error("Rejected!!!!");
    console.error("nearestdriverslist-end-rejected", passenger_id, new Date());
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
  // console.error(
  //   "3######################################calling calcluate xone fare"
  // );
  let zoneFareList = {};
  let zoneDetails = await apimodel.search_zone_service(
    q,
    longitude,
    latitude,
    false
  );
  // console.error("zoneDetails : ", zoneDetails);
  if (zoneDetails && zoneDetails.length > 0) {
    const zone_id = zoneDetails[0]._id ? zoneDetails[0]._id : 0;
    if (zone_id != 0) {
      let zoneFare = await apimodel.get_zone_fare(q, zone_id, "");
      // console.error("zoneFare : ", zoneFare);
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

const isAirportZone = function (longitude, latitude) {
  if (!latitude || !longitude) return [];

  let match_array = {
    is_airport: 1,
    status: "A",
    loc: {
      $near: {
        $geometry: {
          type: "Point",
          coordinates: [parseFloat(longitude), parseFloat(latitude)],
        },
        $maxDistance: 1000,
      },
    },
  };
  var collection = db.get().collection(t.MDB_ZONES);
  let results = collection
    .find(match_array, { projection: { _id: 1, zone_name: 1 } })
    .limit(1)
    .toArray();
  return results;
};
