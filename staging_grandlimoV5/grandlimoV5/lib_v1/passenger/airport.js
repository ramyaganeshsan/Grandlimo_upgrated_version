var apimodel = require("../../models/passapimodel_v1");
var moment = require("moment-timezone");
var favicon = require("../../config/favicon.json");
var config = require("../../config/common_config.json");
var q = require("q");
var appRoot = require("app-root-path");
var validator = require("validator");
var fs = require("fs");
var validate = require("validate.js");
var dateFormat = require("dateformat");
var md5 = require("md5");
//var i18n = require('i18n');
var t = require("../../config/table_config.json");
var uniqid = require("uniqid");
var randomstring = require("randomstring");
var dateformatter = require("date-format-php");
var urlencode = require("urlencode");
var async = require("async");

var common = require("../../lib_v1/common.js");

exports.validate_airport_zone = function (q, req) {
  let inputParams = req.body;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  var hostname = global.settings.base_url;

  var validate_error = ValidateAirport(q, inputParams);

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
      var pickup_latitude = inputParams.pickup_latitude;
      var pickup_longitude = inputParams.pickup_longitude;
      var drop_latitude = inputParams.drop_latitude;
      var drop_longitude = inputParams.drop_longitude;

      var result_array = {};
      var zone_array = {};
      zone_array.pickup = 0;
      zone_array.drop = 0;
      var details = [];
      apimodel
        .check_zone_service(q, pickup_longitude, pickup_latitude)
        .then(function (pickup_zone) {
          console.log("pickup_zone", pickup_zone.length);
          if (pickup_zone.length > 0) {
            zone_array.pickup = 1;
          }
          apimodel
            .check_zone_service(q, drop_longitude, drop_latitude)
            .then(function (drop_zone) {
              console.log("drop_zone", drop_zone.length);
              if (drop_zone.length > 0) {
                zone_array.drop = 1;
              }
            });
        });
      apimodel
        .check_airport_zone(q, pickup_longitude, pickup_latitude)
        .then(function (check_results) {
          console.log("check_results", check_results);

          if (check_results.length > 0) {
            details = check_results;
            result_array.pickup = 1;

            apimodel
              .check_airport_zone(q, drop_longitude, drop_latitude)
              .then(function (check_results1) {
                console.log("zone_array", zone_array);
                if (check_results1.length > 0) {
                  result_array.drop = 1;
                  message.message = req.__("success");
                  message.detail = result_array;
                  message.zone_details = zone_array;
                  message.status = 1;
                  deferred.resolve(message);
                  deferred.makeNodeResolver();
                  message = null;
                } else {
                  result_array.drop = 0;
                  message.message = req.__("success");
                  message.detail = result_array;
                  message.zone_details = zone_array;
                  message.status = 1;
                  deferred.resolve(message);
                  deferred.makeNodeResolver();
                  message = null;
                }
              });
          } else {
            result_array.pickup = 0;
            apimodel
              .check_airport_zone(q, drop_longitude, drop_latitude)
              .then(function (check_results2) {
                console.log("zone_array", zone_array);
                if (check_results2.length > 0) {
                  result_array.drop = 1;
                  message.message = req.__("success");
                  message.detail = result_array;
                  message.zone_details = zone_array;
                  message.status = 1;
                  deferred.resolve(message);
                  deferred.makeNodeResolver();
                  message = null;
                } else {
                  result_array.drop = 0;
                  message.message = req.__("success");
                  message.detail = result_array;
                  message.zone_details = zone_array;
                  message.status = 1;
                  deferred.resolve(message);
                  deferred.makeNodeResolver();
                  message = null;
                }
              });
          }
        });
    } catch (err) {
      //console.log(err);
    }
  }

  return deferred.promise;
};

exports.check_airport_zone = function (q, req) {
  let inputParams = req.body;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  var hostname = global.settings.base_url;

  var validate_error = ValidateAirport(q, inputParams);

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
      var pickup_latitude = inputParams.pickup_latitude;
      var pickup_longitude = inputParams.pickup_longitude;
      var drop_latitude = inputParams.drop_latitude;
      var drop_longitude = inputParams.drop_longitude;

      var result_array = {};
      var zone_array = {};
      zone_array.pickup = 0;
      zone_array.drop = 0;
      var details = [];

      apimodel
        .check_zone_service(q, pickup_longitude, pickup_latitude)
        .then(function (pickup_zone) {
          console.log("pickup_zone", pickup_zone.length);
          if (pickup_zone.length > 0) {
            zone_array.pickup = 1;
            console.error("zone_array in pickup: ", zone_array);
          }
          apimodel
            .check_zone_service(q, drop_longitude, drop_latitude)
            .then(function (drop_zone) {
              console.log("drop_zone", drop_zone.length);
              if (drop_zone.length > 0) {
                zone_array.drop = 1;
                console.error("zone_array in drop: ", zone_array);
              }

              /* Sasidharan Aug 16 2023 added if condition and move all the code into else part */
              if (
                (pickup_zone.length > 0 &&
                  pickup_zone[0] &&
                  pickup_zone[0]["status"] &&
                  pickup_zone[0]["status"] == "A" &&
                  pickup_zone[0]["is_pickup"]) ||
                (drop_zone.length > 0 &&
                  drop_zone[0] &&
                  drop_zone[0]["status"] &&
                  drop_zone[0]["status"] == "A" &&
                  drop_zone[0]["is_drop"])
              ) {
                console.error("zone_array: ", zone_array);

                result_array.drop = 0;
                result_array.pickup = 0;
                message.message = req.__("success");
                message.detail = result_array;
                message.zone_details = zone_array;
                message.status = 1;
                deferred.resolve(message);
                deferred.makeNodeResolver();
                message = null;
              } else {
                apimodel
                  .check_airport_zone(q, pickup_longitude, pickup_latitude)
                  .then(function (check_results) {
                    console.log("check_results", check_results);

                    if (check_results.length > 0) {
                      details = check_results;
                      result_array.pickup = 1;

                      apimodel
                        .check_airport_zone(q, drop_longitude, drop_latitude)
                        .then(function (check_results1) {
                          console.log("zone_array", zone_array);
                          if (check_results1.length > 0) {
                            result_array.drop = 1;
                            message.message = req.__("success");
                            message.detail = result_array;
                            message.zone_details = zone_array;
                            message.status = 1;
                            deferred.resolve(message);
                            deferred.makeNodeResolver();
                            message = null;
                          } else {
                            result_array.drop = 0;
                            message.message = req.__("success");
                            message.detail = result_array;
                            message.zone_details = zone_array;
                            message.status = 1;
                            deferred.resolve(message);
                            deferred.makeNodeResolver();
                            message = null;
                          }
                        });
                    } else {
                      result_array.pickup = 0;
                      apimodel
                        .check_airport_zone(q, drop_longitude, drop_latitude)
                        .then(function (check_results2) {
                          console.log("zone_array", zone_array);
                          if (check_results2.length > 0) {
                            result_array.drop = 1;
                            message.message = req.__("success");
                            message.detail = result_array;
                            message.zone_details = zone_array;
                            message.status = 1;
                            deferred.resolve(message);
                            deferred.makeNodeResolver();
                            message = null;
                          } else {
                            result_array.drop = 0;
                            message.message = req.__("success");
                            message.detail = result_array;
                            message.zone_details = zone_array;
                            message.status = 1;
                            deferred.resolve(message);
                            deferred.makeNodeResolver();
                            message = null;
                          }
                        });
                    }
                  });
              }
            });
        });
    } catch (err) {
      console.log(err);
    }
  }

  return deferred.promise;
};

function ValidateAirport(q, input) {
  var constraints = {
    pickup_latitude: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    pickup_longitude: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

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
