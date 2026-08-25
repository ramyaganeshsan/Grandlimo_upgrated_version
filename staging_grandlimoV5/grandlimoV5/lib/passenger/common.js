var querystring = require("querystring");
var apimodel = require("../../models/passapimodel");
var axios = require("axios");
var time = require("time");
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
            response = null; //console.log(response.data.explanation);
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

  var hostname = global.settings.base_url;

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
              //console.log('driver_list',driver_list);

              var time_range = getStartingDateAndEndingDate(
                global.settings.timezone
              );
              if (driver_list.length > 0) {
                var i = 0;
                driver_list.forEach(function (element) {
                  try {
                    var driver_id = element._id.driver_id;

                    //var booking_limit = 0;
                    //if(element._id.booking_limit != undefined)
                    //booking_limit = element._id.booking_limit;
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

                    driver_details[i].latitude = element._id.loc[1];
                    driver_details[i].longitude = element._id.loc[0];
                    i++;
                    //}
                    //});
                  } catch (err) {
                    console.log(err);
                  }
                });

                //console.log('driver_details',driver_details);
                //

                //console.log("nearest00010");
                apimodel
                  .model_fare_details(q, motor_model)
                  .then(function (model_details) {
                    console.log("nearest00011");

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
                      //message.current_time = current_time.format('Y-m-d H:i:s');
                      message.current_time = moment()
                        .tz("Asia/Kuwait")
                        .format("YYYY-MM-DD HH:mm:ss");

                      //console.log("nearest00013");

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
                //message.current_time = current_time.format('Y-m-d H:i:s');
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
