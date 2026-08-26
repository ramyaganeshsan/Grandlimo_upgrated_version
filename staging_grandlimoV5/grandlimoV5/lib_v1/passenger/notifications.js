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
//var i18n = require('i18n');
var t = require("../../config/table_config.json");
var uniqid = require("uniqid");
var randomstring = require("randomstring");
var dateformatter = require("date-format-php");
var urlencode = require("urlencode");

var common = require("../../lib_v1/common.js");

exports.get_passenger_notifications = function (q, req) {
  let inputParams = req.body;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  var hostname = global.settings.base_url;
  var appRoot = global.settings.docroot;

  var validate_error = ValidateNotificationsList(q, inputParams);

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
      apimodel
        .get_passenger_notifications(q)
        .then(function (notificationresults) {
          //console.log('notificationresults',notificationresults);
          var notifications_list = [];
          if (notificationresults.length > 0) {
            i = 0;
            notifications_list = notificationresults;
            notificationresults.forEach(function (element) {
              var notifyimage = element.image;
              var created_date = element.created_date;

              notificationresults[i].image = get_notification_image(
                appRoot,
                notifyimage,
                hostname
              );
              notificationresults[i].created_date =
                created_date.format("Y-m-d H:i:s");

              notifications_list[i]._id = element._id;
              notifications_list[i].title = element.title;
              notifications_list[i].sub_title = element.sub_title;
              notifications_list[i].message = element.message;
              notifications_list[i].title_ar = element.title_ar;
              notifications_list[i].sub_title_ar = element.sub_title_ar;
              notifications_list[i].message_ar = element.message_ar;
              notifications_list[i].color_code = element.color_code;
              notifications_list[i].image_only = element.image_only;
              notifications_list[i].notification_type =
                element.notification_type;
              notifications_list[i].image_size_1 =
                hostname +
                "/" +
                "public/uploads/notification_image/banner/240*320/" +
                notifyimage;
              notifications_list[i].image_size_2 =
                hostname +
                "/" +
                "public/uploads/notification_image/banner/320*480/" +
                notifyimage;
              notifications_list[i].image_size_3 =
                hostname +
                "/" +
                "public/uploads/notification_image/banner/480*800/" +
                notifyimage;
              notifications_list[i].image_size_4 =
                hostname +
                "/" +
                "public/uploads/notification_image/banner/720*1280/" +
                notifyimage;
              notifications_list[i].image = get_notification_image(
                appRoot,
                notifyimage,
                hostname
              );
              notifications_list[i].created_date =
                created_date.format("Y-m-d H:i:s");

              i++;
            });

            message.message = req.__("success");
            message.detail = notifications_list;
            message.status = 1;
            deferred.resolve(message);
            deferred.makeNodeResolver();
            message = null;
          } else {
            message.message = req.__("no_data");
            message.status = -1;
            deferred.resolve(message);
            deferred.makeNodeResolver();
            message = null;
          }
        });
    } catch (err) {
      //console.log(err);
    }
  }

  return deferred.promise;
};

exports.update_notify_logs = function (q, req) {
  let inputParams = req.body;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  var hostname = global.settings.base_url;
  var appRoot = global.settings.docroot;

  var validate_error = ValidateNotificationsLogs(q, inputParams);

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
      var insertArray = {
        passenger_id: parseInt(inputParams.passenger_id),
        notification_id: parseInt(inputParams.notification_id),
        type: parseInt(1),
      };

      apimodel
        .update_notification_logs(q, insertArray)
        .then(function (notificationresults) {
          message.message = req.__("success");
          message.status = 1;
          deferred.resolve(message);
          deferred.makeNodeResolver();
          message = null;
        });
    } catch (err) {
      //console.log(err);
    }
  }

  return deferred.promise;
};

function ValidateNotificationsList(q, input) {
  var constraints = {
    // passenger_id: {
    // 	presence: {allowEmpty: false,message:"not empty"},
    // }
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function ValidateNotificationsLogs(q, input) {
  var constraints = {
    passenger_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    notification_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function get_notification_image(appRoot, image, hostname) {
  try {
    //console.log("approot",appRoot+'/'+'public/uploads/notification_image/'+image)
    if (
      fs.existsSync(
        appRoot + "/" + "public/uploads/notification_image/" + image
      )
    ) {
      return hostname + "/" + "public/uploads/notification_image/" + image;
    } else {
      return hostname + "/" + config.NO_IMAGE;
    }
  } catch (ex) {
    //console.log('error',ex);
  }
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
