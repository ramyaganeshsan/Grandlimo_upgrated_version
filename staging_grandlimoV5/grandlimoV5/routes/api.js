var express = require("express"),
  router = express.Router();

var app = require("../app");

console.log("api here");

var apimodel = require("../models/apimodel");
var apilib = require("../lib/api");
var loginlib = require("../lib/login");
var profilelib = require("../lib/profile");
var homelib = require("../lib/home");
var extraslib = require("../lib/extras");
var logoutlib = require("../lib/logout");
var tripdetaillib = require("../lib/tripdetail");
var upcominglib = require("../lib/upcoming");
var tripstartlib = require("../lib/tripstart");
var completetriplib = require("../lib/tripcomplete");
var fareupdatelib = require("../lib/fareupdate");
var ratingslib = require("../lib/ratings");
var common = require("../lib/common");

var pass_homelib = require("../lib/passenger/home");
//var winston = require('winston');

//var logs = require('../utils/logger').Logger;
// const logger = winston.createLogger({
//   level: 'info',
//   format: winston.format.json(),
//   transports: [
//     //
//     // - Write to all logs with level `info` and below to `combined.log`
//     // - Write all logs error (and below) to `error.log`.
//     //
//     new winston.transports.File({ filename: 'error.log', level: 'error' }),
//     new winston.transports.File({ filename: 'combined.log' })
//   ]
// });

// var loggerObj = {
//   level: 'info',
//   message: 'What time is the testing at?'
// };

var i18n = require("i18n");

var q = require("q");

module.exports = function (app) {
  var io = app.io;

  router.param("key", function (req, res, next, id) {
    var company_key = req.params.key;
    console.log(company_key);
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

    req.io = io;
    req.app.locales = app.locales;

    var starttime = new Date();
    console.log(type + " " + starttime);

    let jsondata = { request: req.body, type: type };

    //loggerObj.message =  JSON.stringify(jsondata);
    //logger.log(loggerObj);

    common.infologger(jsondata);

    if (type == "getcoreconfig" || type == "send_push_notification_ios") {
      apilib[type](q, req).then(function (results) {
        var time = new Date();
        var endtime = time.getTime();
        var execution_time = endtime - starttime;
        results.execution_time = execution_time + " ms";
        common.infologger(results);
        res.send(results);
      });
    } else {
      var message = { message: "invalid_company", status: 8 };
      common.infologger(results);

      res.type("text/json");
      res.send(message);
    }
  });

  router.post("/:key/", function (req, res) {
    var type = req.query.type;
    var time = new Date();
    var starttime = time.getTime();
    console.log(type + "  " + starttime);

    req.io = io;

    req.app.locals = app.locals;

    let jsondata = { request: req.body, type: type, response: "" };
    //logs(JSON.stringify(jsondata));
    common.infologger(req.body);
    if (
      type == "driver_login" ||
      type == "taxiqr_scan" ||
      type == "update_taxi_info" ||
      type == "forgot_password"
    ) {
      loginlib[type](q, req).then(function (results) {
        var time = new Date();
        var endtime = time.getTime();
        var execution_time = endtime - starttime;
        results.execution_time = execution_time + " ms";
        common.infologger(results);
        res.send(results);
      });
    } else if (type == "driver_profile" || type == "edit_driver_profile") {
      profilelib[type](q, req).then(function (results) {
        var time = new Date();
        var endtime = time.getTime();
        var execution_time = endtime - starttime;
        results.execution_time = execution_time + " ms";
        common.infologger(results);

        res.send(results);
      });
    } else if (
      type == "driver_statistics" ||
      type == "driver_shift_status" ||
      type == "send_sms_app"
    ) {
      homelib[type](q, req).then(function (results) {
        var time = new Date();
        var endtime = time.getTime();
        var execution_time = endtime - starttime;
        results.execution_time = execution_time + " ms";
        common.infologger(results);

        //logs(JSON.stringify(jsondata));

        res.send(results);
      });
    } else if (type == "update_pass_id_image") {
      extraslib[type](q, req).then(function (results) {
        var time = new Date();
        var endtime = time.getTime();
        var execution_time = endtime - starttime;
        results.execution_time = execution_time + " ms";
        common.infologger(results);
        res.send(results);
      });
    } else if (type == "user_logout") {
      logoutlib[type](q, req).then(function (results) {
        var time = new Date();
        var endtime = time.getTime();
        var execution_time = endtime - starttime;
        results.execution_time = execution_time + " ms";
        common.infologger(results);
        res.send(results);
      });
    } else if (type == "driver_booking_list" || type == "get_trip_detail") {
      tripdetaillib[type](q, req).then(function (results) {
        var time = new Date();
        var endtime = time.getTime();
        var execution_time = endtime - starttime;
        results.execution_time = execution_time + " ms";
        common.infologger(results);
        res.send(results);
      });
    } else if (type == "driver_reply" || type == "reject_trip") {
      upcominglib[type](q, req).then(function (results) {
        var time = new Date();
        var endtime = time.getTime();
        var execution_time = endtime - starttime;
        results.execution_time = execution_time + " ms";
        common.infologger(results);
        res.send(results);
      });
    } else if (
      type == "driver_arrived" ||
      type == "start_trip" ||
      type == "send_push_notification_ios"
    ) {
      tripstartlib[type](q, req).then(function (results) {
        var time = new Date();
        var endtime = time.getTime();
        var execution_time = endtime - starttime;
        results.execution_time = execution_time + " ms";
        common.infologger(results);
        res.send(results);
      });
    } else if (type == "complete_trip") {
      completetriplib[type](q, req).then(function (results) {
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
    } else if (type == "update_ratings_comments") {
      ratingslib[type](q, req).then(function (results) {
        var time = new Date();
        var endtime = time.getTime();
        var execution_time = endtime - starttime;
        results.execution_time = execution_time + " ms";
        common.infologger(results);
        res.send(results);
      });
    } else if (type == "passenger_update_drop_location") {
      pass_homelib[type](q, req).then(function (results) {
        var time = new Date();
        var endtime = time.getTime();
        var execution_time = endtime - starttime;
        results.execution_time = execution_time + " ms";
        common.infologger(results);
        res.send(results);
      });
    } else {
      var message = { message: i18n.__("invalid_request"), status: -1 };
      res.type("text/json");
      res.send(message);
    }
  });

  return router;
};
