var express = require("express"),
  router = express.Router();

var app = require("../app");
var apimodel = require("../models/passapimodel_v1");
var apilib = require("../lib_v1/passenger/api");
var registerlib = require("../lib_v1/passenger/register");
var homelib = require("../lib_v1/passenger/home");
var favlib = require("../lib_v1/passenger/favourites");
var cardlib = require("../lib_v1/passenger/cards"); // Customization
var airportlib = require("../lib_v1/passenger/airport"); // Customization
var profilelib = require("../lib_v1/passenger/profile");
var searchlib = require("../lib_v1/passenger/search_drivers");
var tripdetailslib = require("../lib_v1/passenger/tripdetail");
var fareupdatelib = require("../lib_v1/passenger/fareupdate");
var walletlib = require("../lib_v1/passenger/wallet");
var placeslib = require("../lib_v1/passenger/places");
var ratingslib = require("../lib_v1/passenger/ratings");
var promocodelib = require("../lib_v1/passenger/promocode");
var notificationslib = require("../lib_v1/passenger/notifications");
var pageslib = require("../lib_v1/passenger/pages");
var cancellib = require("../lib_v1/passenger/cancel");
var common = require("../lib_v1/common");
var distancelib = require("../lib_v1/passenger/distance_calculation");
// Ramya 2025 june
var upload = require("../utils/multerFileUpload");
// Ramya 2025 july
var passV1Common = require("../lib_v1/passenger/common");

//const logs = require('../utils/logger').logs;

// var i18n = require('i18n');

// var plang = {};

// i18n.configure({
//   locales: ['en', 'ar'],
//   register: plang
// });

var q = require("q");

module.exports = function (app, io) {
  var io = app.io;

  router.param("key", function (req, res, next, id) {
    var company_key = req.params.key;
    //console.log('herree',company_key);
    var decrypt_key = app.encrypt_decrypt("decrypt", company_key);
    if (decrypt_key != "") {
      apimodel.getCompanyKey(q, decrypt_key).then(function (results) {
        if (results.length > 0) {
          apimodel.SiteSettings(q).then(function (siteinforesults) {
            if (siteinforesults.length > 0) {
              global.settings = siteinforesults[0];
            } else {
              global.settings = {};
            }
            next();
          });
        } else {
          var message = { message: "invalid_company", status: 8 };
          res.type("text/json");
          res.send(message);
        }
      });
    } else {
      var message = { message: "invalid_company", status: 8 };
      res.type("text/json");
      res.send(message);
    }

    //next();
  });

  // router.get('/:key/type=getcoreconfig', function (req, res) {
  //    apimodel.getSiteInfo(q).then(function(results){
  //       let message = {'message':"Success",'details':results,'status':1}
  //       res.type('text/json');
  //       res.send(message);
  //    });
  // });

  router.get("/:key/", function (req, res) {
    var type = req.query.type;
    var lang = req.query.lang;
    ////req.i18n = i18n;
    // req.plang = plang;

    //req.i18n.setLocale(lang);
    if (lang != "") req.setLocale(lang);
    else req.setLocale("en");

    //console.log(type);
    //console.log("pass hererere");

    req.io = app.io;

    console.log(type);
    var starttime = new Date();
    //console.log(type+" "+starttime);

    let jsondata = { request: req.body, type: type };

    //global.settings.fare_calculation_type = 1;

    //logs(JSON.stringify(jsondata));

    if (type == "getcoreconfig") {
      apilib[type](q, req).then(function (results) {
        var time = new Date();
        var endtime = time.getTime();
        var execution_time = endtime - starttime;
        results.execution_time = execution_time + " ms";
        common.infologger(results);
        res.send(results);
      });
    } else if (type == "dynamic_page") {
      pageslib[type](q, req).then(function (results) {
        var time = new Date();
        var endtime = time.getTime();
        var execution_time = endtime - starttime;
        results.execution_time = execution_time + " ms";
        //logs(JSON.stringify(results));

        if (results.status == 1) {
          if (results.detail.device_type == 2) {
            common.infologger(results);
            res.send(results);
          } else {
            var content = results.detail.content;
            res.type("text/html");
            res.send(content);
          }
        } else {
          res.send(results);
        }
      });
    } else {
      var message = { message: req.__("invalid_company"), status: 8 };
      common.infologger(message);
      res.type("text/json");
      res.send(message);
    }
  });

  router.post("/:key/", function (req, res) {
    //global.settings.fare_calculation_type = 1;

    var type = req.query.type;
    var lang = req.query.lang;
    //req.i18n = i18n;
    //req.plang = plang;

    req.setLocale(lang);

    req.io = app.io;

    var time = new Date();
    var starttime = time.getTime();
    //console.log(type +"  "+ starttime );return false;

    let jsondata = { request: req.body, type: type, response: "" };
    //logs(JSON.stringify(jsondata));

    common.infologger(req.body);

    if (
      type == "passenger_account_registration_step1" ||
      type == "resend_otp" ||
      type == "passenger_account_registration_step2" ||
      type == "passenger_account_registration_step3" ||
      type == "passenger_email_registration_step1"
    ) {
      registerlib[type](q, req).then(function (results) {
        var time = new Date();
        var endtime = time.getTime();
        var execution_time = endtime - starttime;
        results.execution_time = execution_time + " ms";
        common.infologger(results);
        res.send(results);
      });
      // Ramya 2025 july
    } else if (type == "estimated_fare_api") {
      passV1Common[type](q, req).then(function (results) {
        var time = new Date();
        var endtime = time.getTime();
        var execution_time = endtime - starttime;
        results.execution_time = execution_time + " ms";
        common.infologger(results);
        res.send(results);
      });
    } else if (
      type == "passenger_later_bookings" ||
      type == "check_confirmed_status" ||
      type == "passenger_update_drop_location" ||
      type == "update_passenger_device_token"
    ) {
      homelib[type](q, req).then(function (results) {
        var time = new Date();
        var endtime = time.getTime();
        var execution_time = endtime - starttime;
        results.execution_time = execution_time + " ms";
        common.infologger(results);
        res.send(results);
      });
    } else if (
      type == "get_favourite_list" ||
      type == "add_favourite" ||
      type == "edit_favourite" ||
      type == "delete_favourite"
    ) {
      favlib[type](q, req).then(function (results) {
        var time = new Date();
        var endtime = time.getTime();
        var execution_time = endtime - starttime;
        results.execution_time = execution_time + " ms";
        common.infologger(results);
        res.send(results);
      });
    } else if (type == "edit_passenger_profile") {
      upload.single("profile_image")(req, res, function (err) {
        if (err) {
          return res.status(400).json({ status: -1, message: err.message });
        }

        profilelib[type](q, req).then(function (results) {
          console.log(results);

          var time = new Date();
          var endtime = time.getTime();
          var execution_time = endtime - starttime;
          results.execution_time = execution_time + " ms";
          common.infologger(results);
          return res.send(results);
        });
      });
    } else if (
      type == "passenger_profile" ||
      type == "update_language" ||
      type == "update_notifications" ||
      type == "delete_my_account"
    ) {
      profilelib[type](q, req).then(function (results) {
        var time = new Date();
        var endtime = time.getTime();
        var execution_time = endtime - starttime;
        results.execution_time = execution_time + " ms";
        common.infologger(results);
        res.send(results);
      });
    } else if (
      type == "nearestdriver_list" ||
      type == "savebooking" ||
      type == "editbooking" ||
      type == "get_driver_reply" ||
      type == "gift_card_balance" ||
      type == "cancel_gift_redemption" ||
      type == "get_fare_info" ||
      type == "get_passengerId_from_phone"
    ) {
      searchlib[type](q, req).then(function (results) {
        var time = new Date();
        var endtime = time.getTime();
        var execution_time = endtime - starttime;
        results.execution_time = execution_time + " ms";
        common.infologger(results);
        res.send(results);
      });
    } else if (
      type == "get_trip_detail" ||
      type == "passenger_trips_list" ||
      type == "passenger_complete_trips" ||
      type == "passenger_completed_list" ||
      type == "passenger_inprogress_list" ||
      type == "passenger_upcoming_list" ||
      type == "email_invoice" ||
      type == "check_passenger_trip_available"
    ) {
      // Customization
      tripdetailslib[type](q, req).then(function (results) {
        var time = new Date();
        var endtime = time.getTime();
        var execution_time = endtime - starttime;
        results.execution_time = execution_time + " ms";
        //common.infologger(results);
        res.send(results);
      });
    } else if (
      type == "wallet_add_money" ||
      type == "passenger_wallet_history" ||
      type == "passenger_wallet_history_credit_debit" ||
      type == "redeem_rewards" ||
      type == "estimate_fare_payment" ||
      type == "wallet_card_list" ||
      type == "payment_initiate_by_source" ||
      type == "trip_complete_payment_initiate_by_source" ||
      type == "wallet_add_money_appleSdk" ||
      type == "checkout_tap_sdk_wallet" ||
      type == "New_phone_number_update" ||
      type == "block_new_number_ifExists" ||
      type == "estimated_fare_savecard_checkoutsdk" ||
      type == "hesabe_wallet_recharge" ||
      type == "hesabe_save_card_api" ||
      type == "get_tap_success_failed_status"
    ) {
      // Customization
      walletlib[type](q, req).then(function (results) {
        var time = new Date();
        var endtime = time.getTime();
        var execution_time = endtime - starttime;
        results.execution_time = execution_time + " ms";
        common.infologger(results);
        res.send(results);
      });
    } else if (type == "added_promocode_list" || type == "add_promocode") {
      promocodelib[type](q, req).then(function (results) {
        var time = new Date();
        var endtime = time.getTime();
        var execution_time = endtime - starttime;
        results.execution_time = execution_time + " ms";
        common.infologger(results);
        res.send(results);
      });
    } else if (
      type == "get_passenger_notifications" ||
      type == "update_notify_logs"
    ) {
      notificationslib[type](q, req).then(function (results) {
        var time = new Date();
        var endtime = time.getTime();
        var execution_time = endtime - starttime;
        results.execution_time = execution_time + " ms";
        common.infologger(results);
        res.send(results);
      });
    } else if (type == "cancel_trip") {
      cancellib[type](q, req).then(function (results) {
        var time = new Date();
        var endtime = time.getTime();
        var execution_time = endtime - starttime;
        results.execution_time = execution_time + " ms";
        common.infologger(results);
        res.send(results);
      });
    } else if (type == "update_ratings_comments") {
      ratingslib[type](q, req).then(function (results) {
        var time = new Date();
        var endtime = time.getTime();
        var execution_time = endtime - starttime;
        results.execution_time = execution_time + " ms";
        common.infologger(results);
        res.send(results);
      });
    } else if (type == "past_booking_places" || type == "get_recent_places") {
      placeslib[type](q, req).then(function (results) {
        var time = new Date();
        var endtime = time.getTime();
        var execution_time = endtime - starttime;
        results.execution_time = execution_time + " ms";
        common.infologger(results);
        res.send(results);
      });
    } else if (type == "tripfare_update") {
      fareupdatelib[type](q, req).then(function (results) {
        var time = new Date();
        var endtime = time.getTime();
        var execution_time = endtime - starttime;
        results.execution_time = execution_time + " ms";
        common.infologger(results);
        res.send(results);
      });
    } else if (type == "dynamic_page") {
      pageslib[type](q, req).then(function (results) {
        var time = new Date();
        var endtime = time.getTime();
        var execution_time = endtime - starttime;
        results.execution_time = execution_time + " ms";
        //logs(JSON.stringify(results));

        if (results.status == 1) {
          console.log(results.detail.device_type);

          if (results.detail.device_type == 2) {
            common.infologger(results);
            res.send(results);
          } else {
            var content = results.detail.content;
            res.type("text/html");
            res.send(content);
          }
        } else {
          res.send(results);
        }
      });
    } else if (type == "get_distance_calculation") {
      distancelib[type](q, req).then(function (results) {
        var time = new Date();
        var endtime = time.getTime();
        var execution_time = endtime - starttime;
        results.execution_time = execution_time + " ms";
        common.infologger(results);
        res.send(results);
      });
    } // Customization
    else if (
      type == "get_card_list" ||
      type == "add_card" ||
      type == "view_card" ||
      type == "delete_card"
    ) {
      cardlib[type](q, req).then(function (results) {
        var time = new Date();
        var endtime = time.getTime();
        var execution_time = endtime - starttime;
        results.execution_time = execution_time + " ms";
        common.infologger(results);
        res.send(results);
      });
    } else if (
      type == "check_airport_zone" ||
      type == "validate_airport_zone"
    ) {
      airportlib[type](q, req).then(function (results) {
        var time = new Date();
        var endtime = time.getTime();
        var execution_time = endtime - starttime;
        results.execution_time = execution_time + " ms";
        common.infologger(results);
        res.send(results);
      });
    } // Customization
    else {
      var message = { message: req.__("invalid_request"), status: -1 };
      res.type("text/json");
      res.send(message);
    }
  });

  return router;
};
