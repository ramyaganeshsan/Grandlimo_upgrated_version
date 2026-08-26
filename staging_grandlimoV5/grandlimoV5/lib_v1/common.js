var querystring = require("querystring");
var apimodel = require("../models/apimodel_v1");
var passapimodel = require("../models/passapimodel_v1");
var push = require("../lib_v1/push/push");
var axios = require("axios");
var t = require("../config/table_config.json");
var i18n = require("i18n");
var GoogleMapsAPI = require("googlemaps");
var fs = require("fs");
var q = require("q");

exports.send_sms = function (
  q,
  to,
  id,
  replace_array,
  countryCode = global.settings.default_country_code
) {
  var deferred = q.defer();

  var passenger_app_version, passenger_device_type, ios_version;
  apimodel.get_passenger_details_by_phone(q, to).then(function (data) {
    passenger_app_version = data[0].app_version;
    passenger_device_type = data[0].device_type;
  });
  apimodel.get_latestapp_version(q).then(function (data) {
    ios_version = data[0].ios_version;
  });
  var app_update_message = "";
  if (
    parseFloat(passenger_app_version) < parseFloat(ios_version) &&
    parseInt(passenger_device_type) == 2
  ) {
    app_update_message =
      "There is a new app version available.Please download it from app store.";
  }

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
            // if( id==13 ) {
            // 	msg="<#> "+msg+" \n"+global.settings.android_otp_key;
            // }
          }
        } catch (err) {
          //console.log('sms error');
        }

        if (to.indexOf("+") < 0) {
          // to = global.settings.default_country_code + to;
          to = countryCode + to;
        }
        try {
          // 	to = '917708259410';
          // /** Test indian no purpose */
          // console.log(to,'------<tooooo');
          // const postData = querystring.stringify({
          // 	'companyId':'ZOLVEN3',
          // 	'pword':'ZOLVEN3',
          // 	'smsMessage':msg,
          // 	'phoneNumber':to
          // });
          // console.log('http://119.235.1.63:4050/Sms.svc/SendSms?'+postData);
          //  axios.get('http://119.235.1.63:4050/Sms.svc/SendSms?'+postData)
          // 	  .then(response => {
          // 	    //console.log(response,'---------response');
          // 	  })
          // 	  .catch(error => {
          // 	    console.log(error,'--------error----->111');
          // 	  });

          // const postData = querystring.stringify({
          // 	'username': global.settings.smsbox_username,
          // 	'password': global.settings.smsbox_password,
          // 	'customerid': global.settings.smsbox_customerid,
          // 	'sendertext': global.settings.smsbox_senderid,
          // 	'messagebody': msg,
          // 	'recipientnumbers': to,
          // 	'defdate': '',
          // 	'isblink': 'false',
          // 	'isflash': 'false'
          // });

          // axios.get('http://www.smsbox.com/smsgateway/services/messaging.asmx/Http_SendSMS?' + postData)
          // 	.then(response => {
          // 		//console.log(response.data.url);
          // 		//console.log(response.data.explanation);
          // 		//console.log(response);
          // 	})
          // 	.catch(error => {
          // 		//console.log(error);
          // 	});

          /* Sasidharan Jan 25 2023 */
          /* Please move this details into DB */
          const postData = querystring.stringify({
            username: "GrandLimo",
            password: "@1234Cas",
            type: "0",
            dlr: "0",
            // 'destination' : '+919488338868',
            // 'destination' : '+96566324783',
            destination: to,
            source: "GRAND LIMO",
            message: msg,
          });
          axios
            .get("https://api.rmlconnect.net:8443/bulksms/bulksms?" + postData)
            .then((response) => {
              // console.error(response.data);
              // console.error(response);
            })
            .catch((error) => {
              //console.log(error);
            });

          deferred.resolve("success");
          deferred.makeNodeResolver();
          response = null;
        } catch (err) {
          //console.log(err);
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

exports.hesabe_pay_wallet = function (
  q,
  passenger_id,
  amount,
  hostname,
  protocol
) {
  var deferred = q.defer();

  var details = {};

  //console.log('fare009',amount);

  apimodel.knet_details(q).then(function (detailsresults) {
    passapimodel
      .passenger_profile_by_id(q, passenger_id)
      .then(function (passengerDetails) {
        if (detailsresults.length > 0) {
          //console.log('fare0011');
          try {
            amount = amount.toFixed(3);
            //success_url=hostname+"/knet_wallet_response.html";
            //failure_url=hostname+"/knet_wallet_response.html";

            success_url = protocol + hostname + "/knet_v1/wallet_response";
            failure_url = protocol + hostname + "/knet_v1/wallet_response";

            knet_alias = detailsresults[0].knet_alias;
            payment_method = detailsresults[0].payment_method;

            if (payment_method == "L") {
              url = "https://www.hesabe.com/authpost";
            } else {
              url = "http://demo.hesabe.com/authpost";
            }

            //console.log(url)

            //var success_url=failure_url=global.settings.base_url+"/knet/wallet_response";
            var success_url = (failure_url =
              protocol + hostname + "/knet_v1/wallet_response");

            //console.log('success url ',success_url);

            var data = {
              MerchantCode: knet_alias,
              Amount: amount,
              SuccessUrl: success_url,
              FailureUrl: failure_url,
              Variable1: amount,
              Variable2: parseInt(passenger_id),
              name: passengerDetails[0].name ? passengerDetails[0].name : "",
              email: passengerDetails[0].email ? passengerDetails[0].email : "",
              mobile_number: passengerDetails[0].phone
                ? passengerDetails[0].phone
                : "",
              Method: "1",
            };
          } catch (err) {
            //console.log(err);
          }
          try {
            console.log("KNETURL", url);
            console.log("Data", data);
            axios
              .post(url, data)
              .then((response) => {
                console.log("success_coming");

                var data = {};
                var payment_response = {};

                // //console.log('response',response.data.data);

                // if(typeof(response.data.data.token) != 'undefined')
                // data.token = response.data.data.token;

                // if(typeof(response.data.data.paymenturl) != 'undefined')
                // data.paymenturl = response.data.data.paymenturl;

                // if(typeof(response.data.data.payment_url) != 'undefined')
                // data.paymenturl = response.data.data.payment_url;

                // if(typeof(response.data.message) != 'undefined')
                // payment_response.message = response.data.message;

                // if(typeof(response.data.status) != 'undefined')
                // payment_response.status = response.data.status;

                // payment_response.data = data;

                // //console.log('payment_response',payment_response);

                details.response = response.data;
                details.status = 1;
                deferred.resolve(details);
                deferred.makeNodeResolver();
                response = null;

                ////console.log(response.data.explanation);
              })
              .catch((error) => {
                console.log("failure_coming");
                console.log("axios", error);
                details.error = error;
                details.status = 0;
                deferred.resolve(details);
                deferred.makeNodeResolver();
                response = null;
              });
          } catch (err) {
            //console.log(err);
          }
        } else {
          details.status = 0;
          console.log("failure_coming");
          deferred.resolve(details);
          deferred.makeNodeResolver();
          response = null;
        }
      });
  });

  return deferred.promise;
};

exports.hesabe_pay = function (
  q,
  trip_id,
  amount,
  distance,
  trip_minutes,
  waiting_cost,
  hostname,
  protocol
) {
  var deferred = q.defer();

  var details = {};

  //console.log('fare009',amount);

  apimodel.knet_details(q).then(function (detailsresults) {
    if (detailsresults.length > 0) {
      //console.log('fare0011');
      try {
        amount = amount.toFixed(3);
        success_url = protocol + hostname + "/knet_v1/payment_response";
        failure_url = protocol + hostname + "/knet_v1/payment_response";

        knet_alias = detailsresults[0].knet_alias;
        payment_method = detailsresults[0].payment_method;

        if (payment_method == "L") {
          url = "https://www.hesabe.com/authpost";
        } else {
          url = "http://demo.hesabe.com/authpost";
        }

        //console.log(url)

        //var success_url=failure_url=global.settings.base_url+"/knet_response.html";
        var success_url = (failure_url =
          protocol + hostname + "/knet_v1/payment_response");

        //console.log('success url ',success_url);

        var data = {
          MerchantCode: knet_alias,
          Amount: amount,
          SuccessUrl: success_url,
          FailureUrl: failure_url,
          Variable1: parseInt(trip_id),
          Variable2: amount,
          Variable3: distance,
          Variable4: trip_minutes,
          Variable5: waiting_cost,
          Method: "1",
        };
      } catch (err) {
        //console.log(err);
      }
      try {
        //console.log('fare012',url,data);

        axios
          .post(url, data)
          .then((response) => {
            ////console.log(response.data);

            var data = {};
            var payment_response = {};

            // //console.log('response',response.data.data);

            // if(typeof(response.data.data.token) != 'undefined')
            // data.token = response.data.data.token;

            // if(typeof(response.data.data.paymenturl) != 'undefined')
            // data.paymenturl = response.data.data.paymenturl;

            // if(typeof(response.data.data.payment_url) != 'undefined')
            // data.paymenturl = response.data.data.payment_url;

            // if(typeof(response.data.message) != 'undefined')
            // payment_response.message = response.data.message;

            // if(typeof(response.data.status) != 'undefined')
            // payment_response.status = response.data.status;

            // payment_response.data = data;

            // //console.log('payment_response',payment_response);

            details.response = response.data;
            details.status = 1;
            deferred.resolve(details);
            deferred.makeNodeResolver();
            response = null;

            ////console.log(response.data.explanation);
          })
          .catch((error) => {
            //console.log('axios',error);
            details.error = error;
            details.status = 0;
            deferred.resolve(details);
            deferred.makeNodeResolver();
            response = null;
          });
      } catch (err) {
        //console.log(err);
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

/////KFAST/////
exports.kfast_pay_wallet = function (
  q,
  passenger_id,
  amount,
  hostname,
  protocol
) {
  var deferred = q.defer();
  var details = {};
  apimodel.get_passenger_details(q, passenger_id).then(function (passenger) {
    if (passenger.length > 0) {
      try {
        amount = amount.toFixed(3);

        name = passenger[0].name;
        email = passenger[0].email;
        mobile_number = passenger[0].phone;

        url = "http://35.224.51.2/kfast/payment.php";

        var success_url = (failure_url =
          protocol + hostname + "/knet_v1/wallet_response");

        var data = {
          passenger_id: passenger_id,
          name: name,
          email: email,
          mobile_number: mobile_number,
          amount: amount,
          type: "wallet_pay",
          success_url: success_url,
          failure_url: failure_url,
        };

        console.log("KNETURL", url);
        console.log("Data", data);
        axios
          .post(url, data)
          .then((response) => {
            var data = {};
            var payment_response = {};
            console.log("KFAST response", response);
            details.response = response.data;
            details.status = 1;
            deferred.resolve(details);
            deferred.makeNodeResolver();
            response = null;
          })
          .catch((error) => {
            console.log("failure_coming");
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
      console.log("failure_coming");
      deferred.resolve(details);
      deferred.makeNodeResolver();
      response = null;
    }
  });
  return deferred.promise;
};

exports.kfast_hesabe_pay = function (
  q,
  passenger_id,
  trip_id,
  amount,
  distance,
  trip_minutes,
  waiting_cost,
  hostname,
  protocol
) {
  var deferred = q.defer();
  var details = {};
  apimodel.get_passenger_details(q, passenger_id).then(function (passenger) {
    if (passenger.length > 0) {
      try {
        amount = amount.toFixed(3);

        name = passenger[0].name;
        email = passenger[0].email;
        mobile_number = passenger[0].phone;

        url = "http://35.224.51.2/kfast/payment.php";

        var success_url = (failure_url =
          protocol + hostname + "/knet_v1/payment_response");

        var data = {
          passenger_id: passenger_id,
          name: name,
          email: email,
          mobile_number: mobile_number,
          amount: amount,
          type: "trip_pay",
          trip_id: parseInt(trip_id),
          distance: distance,
          trip_minutes: trip_minutes,
          waiting_cost: waiting_cost,
          success_url: success_url,
          failure_url: failure_url,
        };

        console.log("TRIPKNETURL", url);
        console.log("Data", data);
        axios
          .post(url, data)
          .then((response) => {
            var data = {};
            var payment_response = {};

            details.response = response.data;
            details.status = 1;
            deferred.resolve(details);
            deferred.makeNodeResolver();
            response = null;
          })
          .catch((error) => {
            console.log("failure_coming");
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
      console.log("failure_coming");
      deferred.resolve(details);
      deferred.makeNodeResolver();
      response = null;
    }
  });
  return deferred.promise;
};
/////KFAST/////

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

exports.change_driver_status = function (q, trip_id, driverReply) {
  var deferred = q.defer();

  var table_name = t.MDB_PASSENGERSLOG;
  var changearr;

  if (driverReply == "A") {
    changearr = {
      driver_reply: driverReply,
      msg_status: "R",
      travel_status: 9,
      driver_comments: i18n.__("confirmed"),
    };
  } else if (driverReply == "R") {
    changearr = {
      driver_reply: driverReply,
      msg_status: "R",
      travel_status: 10,
      driver_comments: i18n.__("missed"),
    };
  } else {
    changearr = {
      driver_reply: driverReply,
      msg_status: "R",
      travel_status: 6,
      driver_comments: "",
    };
  }

  apimodel
    .cancel_trip_update_driver_status(q, trip_id, changearr)
    .then(function (updateresults) {
      var message = {};
      deferred.resolve(message);
      deferred.makeNodeResolver();
      message = null;
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

      if (statisticsresults && statisticsresults.length > 0) {
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

exports.trip_details = function (q, trip_id) {
  var deferred = q.defer();

  apimodel.get_trip_detail(q, trip_id).then(function (tripresults) {
    var tripdetails = {};

    if (tripresults.length > 0) {
      tripdetails = tripresults;
      deferred.resolve(tripdetails);
      deferred.makeNodeResolver();
      message = null;
    } else {
      deferred.resolve(tripdetails);
      deferred.makeNodeResolver();
      message = null;
    }
  });

  return deferred.promise;
};

exports.passenger_update_drop_location = function (q, trip_id, update_array) {
  var deferred = q.defer();

  apimodel.get_trip_detail(q, trip_id).then(function (tripdetails) {
    try {
      //console.log('drop0001'+tripdetails.length);

      if (tripdetails.length > 0) {
        //console.log('drop0002');

        var driver_id = tripdetails[0].driver_id;
        var passenger_id = tripdetails[0].passengers_id;
        passapimodel
          .passenger_update_drop_location(q, trip_id, update_array)
          .then(function (update_drop) {
            //console.log('drop0003');

            try {
              var tripdetails = {};

              if (update_drop.result.nModified == 1) {
                //console.log('drop0004');

                tripdetails.details = {
                  message: i18n.__("drop_location_update_sucessfully"),
                  driver_id: driver_id,
                  passenger_id: passenger_id,
                  status: 1,
                };
                tripdetails.status = parseInt(1);
                deferred.resolve(tripdetails);
                deferred.makeNodeResolver();
                message = null;
              } else {
                //console.log('drop0005');

                tripdetails.details = {
                  message: i18n.__("drop_location_already_update"),
                  driver_id: driver_id,
                  passenger_id: passenger_id,
                  status: -1,
                };
                tripdetails.status = parseInt(0);
                deferred.resolve(tripdetails);
                deferred.makeNodeResolver();
                message = null;
              }
            } catch (err) {
              //console.log(err);
            }
          });
      } else {
        tripdetails.details = {
          message: i18n.__("trip_not_found"),
          driver_id: driver_id,
          passenger_id: passenger_id,
          status: -1,
        };
        tripdetails.status = parseInt(0);
        deferred.resolve(tripdetails);
        deferred.makeNodeResolver();
        message = null;
      }
    } catch (err) {
      //console.log(err);
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

var convert_secs_format = function (secs) {
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

var convert_timezone_format = function (givenDate, format) {
  if (givenDate == "") return " - ";
  var dateFormat = require("dateformat");
  return dateFormat(
    new Date(
      new Date(givenDate).toLocaleString("en-US", {
        timeZone: global.settings.timezone,
      })
    ),
    format
  );
};

exports.trip_notification = function (q, trip_id) {
  var deferred = q.defer();

  var details = {};
  var trip_details = {};
  var notes_driver = "";
  var taxi_min_speed = "";
  var estimated_time = "";
  var notification_minutes = 0;
  var notification_seconds = 0;

  var message = { status: 0 };

  apimodel.get_trip_detail(q, trip_id).then(function (tripresults) {
    if (tripresults.length > 0) {
      var updateArray = {
        status: parseInt(1),
      };
      apimodel
        .update_request_details(q, updateArray, trip_id)
        .then(function (updateresults) {
          try {
            trip_details = tripresults[0];
            notes_driver = tripresults[0].notes_driver;
            taxi_min_speed = tripresults[0].taxi_min_speed;
            estimated_time = tripresults[0].time_to_reach_passen;

            var notification_time = global.settings.notification_settings;

            if (notification_time > 60) {
              notification_minutes = notification_time / 60;
              notification_minutes = notification_minutes.toFixed(0);
              notification_seconds =
                notification_time - notification_minutes * 60;
            } else {
              notification_seconds = notification_time;
            }

            details.booking_details = trip_details;
            details.estimated_time = estimated_time;
            details.notification_time = notification_time;
            details.notification_minutes = notification_minutes;
            details.notification_seconds = notification_seconds;
            details.notes = notes_driver;
            details.belowspeed_mins = taxi_min_speed;

            message.status = 1;
            message.details = details;

            //console.log('request',message);

            deferred.resolve(message);
            deferred.makeNodeResolver();
            message = null;
          } catch (err) {
            //console.log('erree',err);
          }
        });
    } else {
      message.status = 0;
      deferred.resolve(message);
      deferred.makeNodeResolver();
      message = null;
    }
  });
  return deferred.promise;
};

exports.emitDriver = function (driver_id, socketMsg) {
  var socket_driver_id = "D-" + driver_id;
  //console.log("Driver socketMsg",socket_driver_id,socketMsg);
  if (typeof global.socketobj[socket_driver_id] !== "undefined") {
    //console.log('socket.....emit...',socket_driver_id,socketMsg);
    global.socketobj[socket_driver_id].emit("location_update_res", socketMsg);
  } else {
    console.log("Socket missing...");
  }
};

exports.emitLocDriver = function (socket_driver_id, socketMsg) {
  //console.log("update driver...",socket_driver_id);
  if (typeof global.socketobj[socket_driver_id] !== "undefined") {
    //console.log('socket.....emit...',socket_driver_id,socketMsg);
    global.socketobj[socket_driver_id].emit("location_update_res", socketMsg);
  } else {
    console.log("Socket missing...");
  }
};
//ramya dec 2025
exports.emitPassenger = function (passenger_id, socketMsg) {
  var socket_pass_id = "P-" + passenger_id;
  var socket = global.socketobj[socket_pass_id];

  if (typeof global.socketobj[socket_pass_id] !== "undefined") {
    console.error(
      "socket.handshake.query.lang : ",
      socket.handshake.query.lang
    );

    i18n.setLocale(socket.handshake.query.lang || "en");

    var messageText = socketMsg.message ? i18n.__(socketMsg.message) : "";

    if (
      socketMsg.taxi_colour ||
      socketMsg.taxi_manufacturer ||
      socketMsg.taxi_no
    ) {
      var template = messageText;

      template = template
        .replace("##COLOR##", socketMsg.taxi_colour || "")
        .replace("##MANUFACTURE##", socketMsg.taxi_manufacturer || "")
        .replace("##NUMBER##", socketMsg.taxi_no || "");

      socketMsg.message = template;
    } else {
      socketMsg.message = messageText;
    }

    console.error("socketMsg : ", socketMsg);

    global.socketobj[socket_pass_id].emit("update_trip_status", socketMsg);
  } else {
    console.error("Socket missing...");
  }
  return 1;
};

// exports.emitPassenger = function (passenger_id, socketMsg) {
//   var socket_pass_id = "P-" + passenger_id;
//   //console.log("Passenger socketMsg",socket_pass_id,socketMsg);
//   if (typeof global.socketobj[socket_pass_id] !== "undefined") {
//     //console.log("socket_pass_id  "+socket_pass_id,socketMsg);
//     global.socketobj[socket_pass_id].emit("update_trip_status", socketMsg);
//   } else {
//     console.log("Socket missing...");
//   }
//   return 1;
// };

exports.infologger = function (msg) {
  var current_time = this.convert_timezone(new Date());
  //console.log(current_time,JSON.stringify(msg));
};

exports.errorlogger = function (msg) {
  var current_time = this.convert_timezone(new Date());
  console.log(current_time, msg);
};

exports.emitCommon = function (user_id, socketMsg, emit, user_type) {
  //console.log('socketMsg',socketMsg);
  //console.log('user_id',user_id);
  //console.log('user_type',user_type);
  if (user_type == "P") {
    var socket_pass_id = "P-" + user_id;
    if (typeof global.socketobj[socket_pass_id] !== "undefined") {
      //console.log("socket_pass_id  "+socket_pass_id,socketMsg);
      global.socketobj[socket_pass_id].emit(emit, socketMsg);
    } else {
      console.log("Socket missing...");
    }
  } else {
    var socket_driver_id = "D-" + user_id;
    if (typeof global.socketobj[socket_driver_id] !== "undefined") {
      //console.log("socket_driver_id  "+socket_driver_id,socketMsg);
      global.socketobj[socket_driver_id].emit(emit, socketMsg);
    } else {
      console.log("Socket missing...");
    }
  }
};

exports.emitDispatcher = function (io) {
  //console.log("herreeeee emit");
  io.of("/dispatcher").emit("serverEmit");
};

exports.free_driver = function (q, driver_id) {
  var deferred = q.defer();

  var details = {};

  apimodel.driver_pending_trips(q, driver_id).then(function (tripdetails) {
    try {
      //console.log('tripdetails length',tripdetails.length);
      if (tripdetails.length == 0) {
        details.details = {
          message: i18n.__("Driver is free now"),
          driver_id: driver_id,
          driver_status: "F",
          status: 1,
        };
        details.status = parseInt(1);
        //console.log('details',details);
        deferred.resolve(details);
        deferred.makeNodeResolver();
        details = null;
      } else {
        details.details = {
          message: i18n.__("driver_in_trip"),
          driver_id: driver_id,
          driver_status: "F",
          status: -1,
        };
        details.status = parseInt(0);
        //console.log('details',details);
        deferred.resolve(details);
        deferred.makeNodeResolver();
        details = null;
      }
    } catch (err) {
      //console.log(err);
    }
  });

  return deferred.promise;
};

exports.check_valid_user = function (q, userid, user_type) {
  var deferred = q.defer();
  var details = {};

  apimodel.check_valid_user(q, userid, user_type).then(function (userresults) {
    if (userresults.length > 0) {
      details.status = 1;
      deferred.resolve(details);
      deferred.makeNodeResolver();
      message = null;
    } else {
      details.status = 0;
      deferred.resolve(details);
      deferred.makeNodeResolver();
      message = null;
    }
  });

  return deferred.promise;
};

exports.add_trip_reward = function (q, userid, reward_points) {
  var deferred = q.defer();
  var details = {};

  if (reward_points) {
    var update_array = { $inc: { reward_points: parseFloat(reward_points) } };
    passapimodel
      .update_trip_reward(q, update_array, userid)
      .then(function (update_drop) {
        details.status = 1;
        deferred.resolve(details);
        deferred.makeNodeResolver();
      });
  } else {
    details.status = 0;
    deferred.resolve(details);
    deferred.makeNodeResolver();
  }

  return deferred.promise;
};

exports.convert_timezone = function (givenDate) {
  if (givenDate == "") return " - ";
  var dateFormat = require("dateformat");
  return dateFormat(
    new Date(
      new Date(givenDate).toLocaleString("en-US", {
        timeZone: global.settings.timezone,
      })
    ),
    "dd-mmm-yyyy hh:MM TT"
  );
};
exports.convert_timezone_wallet_history = function (givenDate) {
  if (givenDate == "") return " - ";
  var dateFormat = require("dateformat");
  return dateFormat(
    new Date(
      new Date(givenDate).toLocaleString("en-US", {
        timeZone: global.settings.timezone,
      })
    ),
    "yyyy-mm-dd hh:MM:ss TT"
  );
};

exports.convert_timezone_format = function (givenDate, format) {
  if (givenDate == "") return " - ";
  var dateFormat = require("dateformat");
  return dateFormat(
    new Date(
      new Date(givenDate).toLocaleString("en-US", {
        timeZone: global.settings.timezone,
      })
    ),
    format
  );
};

exports.date_format = function (givenDate, format) {
  if (givenDate == "") return " - ";
  var dateFormat = require("dateformat");
  return dateFormat(
    new Date(new Date(givenDate).toLocaleString("en-US")),
    format
  );
};

exports.convert_timezone_time = function (givenDate) {
  if (givenDate == "") return " - ";
  var dateFormat = require("dateformat");
  return dateFormat(
    new Date(
      new Date(givenDate).toLocaleString("en-US", {
        timeZone: global.settings.timezone,
      })
    ),
    "hh:MM TT"
  );
};

exports.convert_timezone_date = function (givenDate) {
  if (givenDate == "") return " - ";
  var dateFormat = require("dateformat");
  return dateFormat(
    new Date(
      new Date(givenDate).toLocaleString("en-US", {
        timeZone: global.settings.timezone,
      })
    ),
    "mmm dd, yyyy"
  );
};

exports.convert_timezone_start = function (givenDate) {
  if (givenDate == "") return " - ";
  var dateFormat = require("dateformat");
  return dateFormat(
    new Date(
      new Date(givenDate).toLocaleString("en-US", {
        timeZone: global.settings.timezone,
      })
    ),
    "dd-mmm-yyyy 00:00:00"
  );
};
exports.convert_timezone_isodate = function (givenDate) {
  if (givenDate == "") return " - ";
  var dateFormat = require("dateformat");
  return dateFormat(
    new Date(
      new Date(givenDate).toISOString("en-US", {
        timeZone: global.settings.timezone,
      })
    )
  );
};

exports.ApproximateDuration = function (q, pickup, drop) {
  var deferred = q.defer();
  var details = {};
  var duration = 0;

  if (pickup != "" && drop != "") {
    try {
      pickup = pickup.replace(", ", ",");
      drop = drop.replace(", ", ",");

      pickup = pickup.split(" ").join("+");
      drop = drop.split(" ").join("+");

      ////console.log('https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins='+pickup+'&destinations='+drop+'&key=AIzaSyDlbQ4S-nmzbAy35zICKpry57INUqKS3SM');
      var google_api_key = global.settings.node_google_key;

      var google_url =
        "https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=" +
        pickup +
        "&destinations=" +
        drop;

      if (google_api_key != "")
        var google_url =
          "https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=" +
          pickup +
          "&destinations=" +
          drop +
          "&key=" +
          google_api_key;

      //console.log(google_url);

      axios
        .get(google_url)
        .then((response) => {
          try {
            ////console.log('response',res.rows.elements[0]);

            var res = response.data;

            ////console.log('response',res.rows[0].elements[0].duration.value);

            //console.log(res.status);

            if (res.status === "OK") {
              if (res.rows[0].elements[0].status == "OK")
                duration = res.rows[0].elements[0].duration.value;
              else duration = 0;
            } else {
              duration = 0;
            }
            //console.log(duration);
            deferred.resolve(duration);
            deferred.makeNodeResolver();
            response = null;
          } catch (err) {
            //console.log(err);
          }
        })
        .catch((error) => {
          //console.log(error);
        });
    } catch (err) {
      //console.log(err);
    }
  }

  return deferred.promise;
};

exports.ApproximateDurationLatLang = function (
  q,
  driver_id,
  trip_id,
  drop_lat,
  drop_lng,
  type
) {
  var deferred = q.defer();
  var details = {};
  var duration = 1;
  deferred.resolve(duration);
  deferred.makeNodeResolver();
  return deferred.promise;

  //console.log("approx duration ...");
  /*apimodel.driver_current_details(q,driver_id).then(function(details){
	
	if(details.length > 0)
	{
	try
	{
	var coordinates = details[0].coordinates;
	var pick_lat = coordinates[1];
	var pick_lng = coordinates[0];
	
	if(pick_lat != '' && typeof(pick_lat) != 'undefined' && pick_lng !=  '' && typeof(pick_lng) != 'undefined' && drop_lat != '' && typeof(drop_lat) != 'undefined' && drop_lng != '')
	{
	
	var google_api_key = global.settings.node_google_key;
	var google_url = 'https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins='+pick_lat+','+pick_lng+'&destinations='+drop_lat+','+drop_lng
	
	if(google_api_key != '')
	google_url =  'https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins='+pick_lat+','+pick_lng+'&destinations='+drop_lat+','+drop_lng+'&key='+google_api_key;
	
	try
	{
	axios.get(google_url)
	  .then(response => {
	
	try
	{
	////console.log('response',res.rows.elements[0]);
	
	var res =  response.data;
	
	////console.log('response',res.rows[0].elements[0].duration.value);
	
	
	//console.log(res.status);
	
	if(res.status  === 'OK')
	{
	////console.log('element status',elements[0].status)
	
	if(res.rows[0].elements[0].status == 'OK')
	duration = res.rows[0].elements[0].duration.value;
	else
	duration  = 0;
	
	var update_estimate_array = {
	'approx_duration':parseInt(duration),
	'duration_update_time':new Date(),
	'remain_time_update':parseInt(type)
	};
	
	//console.log('update_estimate_array',update_estimate_array);
	
	apimodel.update_trip(q,update_estimate_array,trip_id).then(function(updateresults){	
	
	//console.log(duration);
	deferred.resolve(duration);
	deferred.makeNodeResolver()
	response=null;
	
	});
	
	}
	else
	{
	duration  = 0;
	//console.log(duration);
	deferred.resolve(duration);
	deferred.makeNodeResolver()
	response=null;
	}	
	
	}
	catch(err)
	{
	//console.log(err);
	}
	
	  })
	  .catch(error => {
		//console.log(error);
	  });
	
	}
	catch(err)
	{
	//console.log(err);
	}
	
	}
	}
	catch(err)
	{
	//console.log(err);
	}
	}
	});
	
	return deferred.promise;*/
};

exports.update_performance_status = function (
  q,
  pickup_time,
  created_time,
  trip_id,
  model_id,
  dispatcher_id,
  latitude,
  longitude
) {
  var deferred = q.defer();

  // if(trip_id == 1794)
  // {
  try {
    var performance_status = 0;
    var driver_active_status = 0;
    //console.log('trip id...............',trip_id);
    //console.log('pickup_time',pickup_time);
    var pickup_time = new Date(pickup_time);
    pickup_time = pickup_time.getTime(); //10800000
    //console.log('pickup_time',pickup_time);
    //console.log('created_time',created_time);
    //console.log('new_time',new Date());

    var created_time = new Date(created_time);
    created_time = created_time.getTime();
    //console.log('created_time',created_time);

    var current_time = new Date();

    current_time = current_time.getTime();
    //console.log('new_time',current_time);

    var time_difference = pickup_time - created_time;
    var current_time_difference = pickup_time - current_time;
    //console.log('time difference',time_difference);
    //console.log('current time difference', current_time_difference );
  } catch (err) {
    //console.log(err);
  }

  if (time_difference >= 0 && current_time_difference > 0) {
    var late_time = calculate_percentage(
      time_difference,
      global.settings.dispatcher_performance.late
    );
    var toolate_time = calculate_percentage(
      time_difference,
      global.settings.dispatcher_performance.toolate
    );
    var ontime_time = calculate_percentage(
      time_difference,
      global.settings.dispatcher_performance.ontime
    );
    var missed_time = calculate_percentage(
      time_difference,
      global.settings.dispatcher_performance.missed
    );

    apimodel
      .free_driver_list(q, model_id, latitude, longitude)
      .then(function (driverresults) {
        //console.log('driverresults',driverresults);
        if (driverresults.length > 0) {
          driver_active_status = 1;
        }

        //driver_active_status=1;

        //console.log('late_time',late_time);
        //console.log('toolate_time',toolate_time);
        //console.log('ontime_time',ontime_time);
        //console.log('missed_time',missed_time);
        //console.log('time difference',time_difference);
        //console.log('current time difference',current_time_difference);
        //console.log('driver_active_status',driver_active_status);

        try {
          //ontime
          if (current_time_difference > ontime_time) {
            //console.log("ontime...........");
            performance_status = 3;
          }
          //late
          if (
            current_time_difference < ontime_time &&
            current_time_difference >= late_time
          ) {
            //console.log("late...........");

            if (driver_active_status == 1) performance_status = 1;
            else performance_status = 3;
          }
          //toolate
          if (
            current_time_difference < late_time &&
            current_time_difference >= toolate_time
          ) {
            //console.log("toolate...........");

            if (driver_active_status == 1) performance_status = 2;
            else performance_status = 3;
          }
          //toolate
          if (
            current_time_difference < toolate_time &&
            current_time_difference >= missed_time
          ) {
            //console.log("toolate...........");

            if (driver_active_status == 1) performance_status = 2;
            else performance_status = 3;
          }
          //missed
          if (current_time_difference < missed_time) {
            if (driver_active_status == 1) performance_status = 4;
            else performance_status = 3;
          }

          var updateArray = {
            performance_status: parseInt(performance_status),
            dispatcher_id: parseInt(dispatcher_id),
          };

          //console.log(updateArray);
          apimodel
            .update_trip(q, updateArray, trip_id)
            .then(function (fetchresults) {
              var message = {};
              deferred.resolve(message);
              deferred.makeNodeResolver();
              message = null;
            });
        } catch (err) {
          //console.log(err);
        }
      });
  } else {
    performance_status = 4;

    var updateArray = {
      performance_status: parseInt(performance_status),
      dispatcher_id: parseInt(dispatcher_id),
    };
    apimodel.update_trip(q, updateArray, trip_id).then(function (fetchresults) {
      var message = {};
      deferred.resolve(message);
      deferred.makeNodeResolver();
      message = null;
    });
  }

  // }
  var deferred = q.defer();

  return deferred.promise;
};

exports.update_waiting_timer = function (q, data) {
  var deferred = q.defer();

  //console.log('timer data --',data);

  var trip_id = data.trip_id;

  apimodel.get_trip_detail(q, trip_id).then(function (tripdetails) {
    //console.log('tripdetails',tripdetails.length);
    try {
      if (tripdetails.length > 0) {
        //console.log('waiting0001',data.waiting_timer_status);

        try {
          var driver_id = tripdetails[0].driver_id;
          var passenger_id = tripdetails[0].passengers_id;
          var actual_pickup_time = tripdetails[0].actual_pickup_time;
          var arrived_time = tripdetails[0].arrived_time;
          var existing_start_waiting_time = tripdetails[0].start_waiting_time;
          var existing_total_waiting_time = tripdetails[0].total_waiting_time;
          var start_timer = tripdetails[0].start_timer;
          var coordinates = tripdetails[0].coordinates;
          var bearing = tripdetails[0].bearing;
          var accuracy = tripdetails[0].accuracy;
          var distance = tripdetails[0].distance;
          var start_status = data.waiting_timer_status;
          var arrived_waiting_time =
            (calc_waiting_time =
            total_waiting_time =
            start_waiting_time =
              0);
          var update_timer_array = "";

          var update_array = {
            waiting_start_status: parseInt(start_status),
          };

          if (actual_pickup_time != "" && arrived_time != "") {
            arrived_waiting_time =
              actual_pickup_time.getTime() - arrived_time.getTime();
            //arrived_waiting_time = waiting_minutes/1000;
          }

          if (start_status == 1) {
            update_array.start_timer = new Date();
            update_array.end_timer = "";
            update_timer_array = "";
          }

          if (start_status == 2) {
            var current_time = new Date();
            update_array.end_timer = current_time;

            if (start_timer != "" && current_time != "") {
              calc_waiting_time =
                current_time.getTime() - start_timer.getTime();
              //calc_waiting_time = calc_waiting_time/1000;
            }

            start_waiting_time =
              calc_waiting_time + existing_start_waiting_time;

            update_array.start_waiting_time = start_waiting_time;
            total_waiting_time =
              calc_waiting_time + existing_total_waiting_time;
            update_array.total_waiting_time = total_waiting_time;
            update_timer_array = {};
            update_timer_array.start = start_timer;
            update_timer_array.end = current_time;
          }
        } catch (err) {
          console.log(err);
        }
        //console.log("waiting0003...",update_array,update_timer_array);

        apimodel
          .update_waiting_timer(q, trip_id, update_array)
          .then(function (update_timer) {
            apimodel
              .update_waiting_timer_list(q, trip_id, update_timer_array)
              .then(function (update_timer_list) {
                //console.log("waiting0002...");

                try {
                  var tripdetails = {};

                  var current_time = new Date();
                  var running_time = convert_secs_format(
                    (current_time.getTime() - actual_pickup_time.getTime()) /
                      1000
                  );

                  var socket_msg = {
                    message: i18n.__("timer_started"),
                    detail: [],
                    driver_latitute: coordinates[1],
                    driver_longitude: coordinates[0],
                    bearing: bearing,
                    accuracy: accuracy,
                    distance: distance,
                    runningtime: running_time,
                    total_waiting_time: total_waiting_time,
                    waiting_start_status: start_status,
                    driver_id: driver_id,
                    passenger_id: passenger_id,
                    pickup_time: convert_timezone_format(
                      actual_pickup_time,
                      "dd-mmm-yyyy HH:mm:ss"
                    ),
                    taxi_min_speed: 0,
                    display: 0,
                    status: 3,
                  };

                  if (update_timer.result.nModified == 1) {
                    if (start_status == 1) {
                      socket_msg.message = i18n.__("timer_started");
                      socket_msg.total_waiting_time =
                        existing_total_waiting_time;
                      socket_msg.start_waiting_time =
                        existing_start_waiting_time;
                      tripdetails.details = socket_msg;
                    } else {
                      socket_msg.message = i18n.__("timer_stopped");
                      tripdetails.details = socket_msg;
                    }

                    tripdetails.status = parseInt(1);
                    deferred.resolve(tripdetails);
                    deferred.makeNodeResolver();
                    message = null;
                  } else {
                    tripdetails.details = {
                      message: i18n.__("timer_not_update"),
                      driver_id: driver_id,
                      passenger_id: passenger_id,
                      status: -1,
                    };
                    tripdetails.status = parseInt(0);
                    deferred.resolve(tripdetails);
                    deferred.makeNodeResolver();
                    message = null;
                  }
                } catch (err) {
                  console.log(err);
                }
              });
          });
      } else {
        tripdetails.details = {
          message: i18n.__("trip_not_found"),
          driver_id: driver_id,
          passenger_id: passenger_id,
          status: -1,
        };
        tripdetails.status = parseInt(0);
        deferred.resolve(tripdetails);
        deferred.makeNodeResolver();
        message = null;
      }
    } catch (err) {
      //console.log(err);
    }
  });

  return deferred.promise;
};

exports.generate_static_maps = function (q, trip_id) {
  // }
  var deferred = q.defer();

  var docroot = global.settings.docroot;
  var base_url = global.settings.base_url;

  console.log("Q", base_url);

  apimodel.get_trip_detail(q, trip_id).then(function (tripresults) {
    apimodel.get_location_history(q, trip_id).then(function (locationresults) {
      if (tripresults.length > 0) {
        var pickup_location = tripresults[0].current_location;
        var drop_location = tripresults[0].drop_location;
        var pickup_latitude = tripresults[0].pickup_latitude;
        var pickup_longitude = tripresults[0].pickup_longitude;
        var drop_latitude = tripresults[0].drop_latitude;
        var drop_longitude = tripresults[0].drop_longitude;
        var location_data = [];

        if (locationresults.length > 0) {
          location_data = locationresults[0].loc.coordinates;
        }

        var location_array = [];

        location_data.forEach(function (element) {
          var location = element[1] + "," + element[0];
          location_array.push(location);
        });

        try {
          var publicConfig = {
            key: global.settings.node_google_key,
            stagger_time: 1000, // for elevationPath
            encode_polylines: false,
            secure: true, // use https
            proxy: "", // optional, set a proxy for HTTP requests
          };

          //var static_map_width = global.settings.static_map_width;
          var static_map_width = 400;
          //var static_map_height = global.settings.static_map_height;
          var static_map_height = 150;

          var gmAPI = new GoogleMapsAPI(publicConfig);

          //var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
          var iconBase = "http://www.q8grandlimo.com/public/images/";

          var params = {
            //center: pickup_location,
            // zoom: 10,
            size: static_map_width + "x" + static_map_height,
            maptype: "roadmap",
            markers: [
              {
                location: pickup_location,
                icon: iconBase + "pickup_icon.png",
                //icon: iconBase + 'parking_lot_maps.png',
                //label   : 'A',
                //color   : 'green',
              },
              {
                location: drop_location,
                icon: iconBase + "drop_icon.png",
                //icon: iconBase + 'library_maps.png',
                //label   : 'B',
                //color   : 'blue',
              },
            ],
            style: [
              {
                feature: "road",
                element: "all",
                rules: {
                  hue: "0x3f51b5",
                },
              },
            ],
          };
          //gmAPI.staticMap(params); // return static map URL
          gmAPI.staticMap(params, function (err, binaryImage) {
            var buf = Buffer.from(binaryImage, "binary");
            fs.writeFile(
              docroot + "/public/uploads/static_maps/" + trip_id + ".png",
              buf,
              function (err) {
                if (err) {
                  return;
                }
                deferred.resolve("files saved");
                deferred.makeNodeResolver();
              }
            );
          });
        } catch (err) {
          //console.log(err);
        }
      }
    });
  });

  return deferred.promise;
};

exports.sendPush = function (passenger_id, msg) {
  //console.log("send push",passenger_id,msg);
  passapimodel
    .passenger_profile_by_id(q, passenger_id)
    .then(function (profileResults) {
      if (profileResults.length > 0) {
        //console.log(profileResults);
        var device_type = profileResults[0].devicetype;
        var device_token = profileResults[0].devicetoken;

        if (device_type == 1) {
          push.androidPushnotification(msg, device_token);
        } else {
          push.iosPushnotification(msg, device_token);
        }
      }
    });
};

function getBeforeTwoDays(timezone, date_format) {
  var d = new time.Date();
  d.setTimezone(timezone);
  //var d = new Date();
  var before_days = d.setDate(d.getDate() - 2);
  ////////console.log(d.getTimezone(),'-------->time zone');
  return new Date(before_days);
  ////////console.log(new Date(before_days),'------------dayssss');
  //return dateFormat(new Date(now.toLocaleDateString()),"yyyy-mm-dd 00:00:00");
}

function calculate_percentage(secs_diff, percentage) {
  //console.log('seces',secs_diff,percentage);
  try {
    var percentage_secs = (secs_diff * percentage) / 100;
  } catch (err) {
    //console.log(err);
  }

  return percentage_secs;
}

exports.GetGoogleDistance = function (q, input) {
  var deferred = q.defer();

  var details = {};

  //console.log(input);return false;

  //https://maps.googleapis.com/maps/api/distancematrix/json?units=metric&origins=11.0210,76.9663&destinations=11.0238,77.0197&key=AIzaSyDmXZoMyv0iswTL9duMdeWmLRAnPITm_OM

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

  console.log(map_url, "----->map url");

  axios
    .get(map_url)
    .then((response) => {
      if (response.status == 200) {
        //console.log(response.data.rows[0].elements[0].status); return false;

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
