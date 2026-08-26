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

var common = require("../../lib_v1/common.js");

exports.get_favourite_list = function (q, req) {
  //let inputParams = JSON.parse(req.rawBody);
  let inputParams = req.body;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  var hostname = global.settings.base_url;

  var validate_error = ValidateFavouriteList(q, inputParams);

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

      apimodel
        .get_favourite_list(q, passenger_id)
        .then(function (favourite_results) {
          var details = [];
          if (favourite_results.length > 0) {
            details = favourite_results;

            var i = 0;
            favourite_results.forEach(function (element) {
              details[i].p_fav_latitude = element.p_fav_latitude;
              details[i].p_fav_longtitute = element.p_fav_longtitute;
              i++;
            });

            message.message = req.__("success");
            message.detail = details;
            message.status = 1;
            deferred.resolve(message);
            deferred.makeNodeResolver();
            message = null;
          } else {
            message.message = req.__("no_favourite_trips");
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

exports.add_favourite = function (q, req) {
  //let inputParams = JSON.parse(req.rawBody);
  let inputParams = req.body;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  var hostname = global.settings.base_url;

  var validate_error = ValidateAddFavourite(q, inputParams);

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
      var fav_comments = inputParams.fav_comments;
      var p_favourite_place = inputParams.p_favourite_place;
      var p_fav_latitude = inputParams.p_fav_latitude;
      var p_fav_longtitute = inputParams.p_fav_longtitute;
      var d_favourite_place = inputParams.d_favourite_place;
      var d_fav_latitude = inputParams.d_fav_latitude;
      var d_fav_longtitute = inputParams.d_fav_longtitute;
      var p_fav_locationtype = inputParams.p_fav_locationtype;
      var fav_icon = inputParams.fav_icon;
      var notes = inputParams.notes;

      //New Start

      if (
        fav_icon == "3" &&
        (p_fav_locationtype.toLowerCase() == "home" ||
          p_fav_locationtype.toLowerCase() == "work")
      ) {
        message.message = req.__("enter_other_fav_type");
        message.status = -1;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        message = null;
      } else {
        apimodel
          .check_fav_type_exists(q, inputParams)
          .then(function (check_favtype) {
            //console.log('len',check_favtype.length);

            if (check_favtype.length == 0) {
              //console.log("hereee002");
              apimodel
                .check_fav_exists(q, inputParams)
                .then(function (check_fav) {
                  //console.log(check_fav.length);
                  //return false;
                  if (check_fav.length == 0) {
                    apimodel
                      .get_auto_id(q, t.MDB_PASSENGERS_FAVOURITES)
                      .then(function (autoid_results) {
                        //console.log("hereee004");

                        if (autoid_results.length > 0) {
                          //console.log("hereee005");
                          var inc_id = autoid_results["0"]._id + 1;
                          var input_array = {
                            _id: parseInt(inc_id),
                            passenger_id: parseInt(passenger_id),
                            p_favourite_place:
                              urlencode.decode(p_favourite_place),
                            p_fav_latitude: p_fav_latitude,
                            p_fav_longtitute: p_fav_longtitute,
                            d_favourite_place:
                              urlencode.decode(d_favourite_place),
                            d_fav_latitude: d_fav_latitude,
                            d_fav_longtitute: d_fav_longtitute,
                            fav_comments: urlencode.decode(fav_comments),
                            status: "A",
                            notes: urlencode.decode(notes),
                            fav_loction_type:
                              urlencode.decode(p_fav_locationtype),
                            fav_icon: urlencode.decode(fav_icon),
                          };

                          apimodel
                            .add_favourite(q, input_array)
                            .then(function (check_fav) {
                              message.message = req.__("mark_fav");
                              message.status = 1;
                              deferred.resolve(message);
                              deferred.makeNodeResolver();
                              message = null;
                            });
                        }
                      });
                  } else {
                    message.message = req.__("fav_already_exist");
                    message.status = -1;
                    deferred.resolve(message);
                    deferred.makeNodeResolver();
                    message = null;
                  }
                });
            } else {
              message.message = req.__("fav_already_exist_type");
              message.status = -1;
              deferred.resolve(message);
              deferred.makeNodeResolver();
              message = null;
            }
          });
      }
    } catch (err) {
      //console.log(err);
    }
  }

  return deferred.promise;
};

exports.edit_favourite = function (q, req) {
  //let inputParams = JSON.parse(req.rawBody);
  let inputParams = req.body;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  var hostname = global.settings.base_url;

  var validate_error = ValidateEditFavourite(q, inputParams);

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
      var fav_comments = inputParams.fav_comments;
      var p_favourite_place = inputParams.p_favourite_place;
      var p_fav_latitude = inputParams.p_fav_latitude;
      var p_fav_longtitute = inputParams.p_fav_longtitute;
      var d_favourite_place = inputParams.d_favourite_place;
      var d_fav_latitude = inputParams.d_fav_latitude;
      var d_fav_longtitute = inputParams.d_fav_longtitute;
      var p_fav_locationtype = inputParams.p_fav_locationtype;
      var p_favourite_id = inputParams.p_favourite_id;
      var fav_icon = inputParams.fav_icon;
      var notes = inputParams.notes;

      //New Start

      if (
        fav_icon == "3" &&
        (p_fav_locationtype.toLowerCase() == "home" ||
          p_fav_locationtype.toLowerCase() == "work")
      ) {
        message.message = req.__("enter_other_fav_type");
        message.status = -1;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        message = null;
      } else {
        apimodel
          .check_fav_type_exists(q, inputParams)
          .then(function (check_favtype) {
            //console.log(check_favtype.length);
            if (check_favtype.length == 0) {
              //console.log("hereee002");
              apimodel
                .check_fav_exists(q, inputParams)
                .then(function (check_fav) {
                  //console.log("hereee003");
                  if (check_fav.length == 0) {
                    var input_array = {
                      passenger_id: parseInt(passenger_id),
                      p_favourite_place: urlencode.decode(p_favourite_place),
                      p_fav_latitude: p_fav_latitude,
                      p_fav_longtitute: p_fav_longtitute,
                      d_favourite_place: urlencode.decode(d_favourite_place),
                      d_fav_latitude: d_fav_latitude,
                      d_fav_longtitute: d_fav_longtitute,
                      fav_comments: urlencode.decode(fav_comments),
                      status: "A",
                      notes: urlencode.decode(notes),
                      fav_loction_type: urlencode.decode(p_fav_locationtype),
                      fav_icon: urlencode.decode(fav_icon),
                    };
                    apimodel
                      .update_favourites(q, p_favourite_id, input_array)
                      .then(function (update_fav) {
                        if (update_fav.modifiedCount == 1) {
                          message.message = req.__("edit_mark_fav");
                          message.status = 1;
                        } else if (
                          update_fav.matchedCount == 1 &&
                          update_fav.modifiedCount == 0
                        ) {
                          message.message = req.__("edit_mark_fav");
                          message.status = 1;
                        } else {
                          message.message = req.__("try_again");
                          message.status = -1;
                        }
                        deferred.resolve(message);
                        deferred.makeNodeResolver();
                        message = null;
                      });
                  } else {
                    message.message = req.__("fav_already_exist");
                    message.status = -1;
                    deferred.resolve(message);
                    deferred.makeNodeResolver();
                    message = null;
                  }
                });
            } else {
              message.message = req.__("fav_already_exist_type");
              message.status = -1;
              deferred.resolve(message);
              deferred.makeNodeResolver();
              message = null;
            }
          });
      }
    } catch (err) {
      //console.log(err);
    }
  }

  return deferred.promise;
};

exports.delete_favourite = function (q, req) {
  //let inputParams = JSON.parse(req.rawBody);
  let inputParams = req.body;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  var hostname = global.settings.base_url;

  var validate_error = ValidateDeleteFavourite(q, inputParams);

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
      var p_favourite_id = inputParams.p_favourite_id;

      apimodel
        .check_fav_exists_id(q, p_favourite_id)
        .then(function (check_fav) {
          if (check_fav.length > 0) {
            apimodel
              .delete_favourites(q, p_favourite_id)
              .then(function (delete_fav) {
                //console.log(delete_fav)
                if (delete_fav.deletedCount == 1) {
                  message.message = req.__("favourite_deleted");
                  message.status = 1;
                  deferred.resolve(message);
                  deferred.makeNodeResolver();
                  message = null;
                } else {
                  message.message = req.__("try_again");
                  message.status = -1;
                  deferred.resolve(message);
                  deferred.makeNodeResolver();
                  message = null;
                }
              });
          } else {
            message.message = req.__("no_favourite");
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

function ValidateFavouriteList(q, input) {
  var constraints = {
    passenger_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function ValidateAddFavourite(q, input) {
  var constraints = {
    passenger_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    // p_favourite_place: {
    // 	presence: {allowEmpty: false,message:"not empty"},
    // },
    // p_fav_latitude: {
    // 	presence: {allowEmpty: false,message:"not empty"},
    // },
    // p_fav_longtitute: {
    // 	presence: {allowEmpty: false,message:"not empty"},
    // },
    // d_favourite_place: {
    // 	presence: {allowEmpty: false,message:"not empty"},
    // },
    // d_fav_latitude: {
    // 	presence: {allowEmpty: false,message:"not empty"},
    // },
    // d_fav_longtitute: {
    // 	presence: {allowEmpty: false,message:"not empty"},
    // },
    p_fav_locationtype: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function ValidateEditFavourite(q, input) {
  var constraints = {
    passenger_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    // p_favourite_place: {
    // 	presence: {allowEmpty: false,message:"not empty"},
    // },
    // p_fav_latitude: {
    // 	presence: {allowEmpty: false,message:"not empty"},
    // },
    // p_fav_longtitute: {
    // 	presence: {allowEmpty: false,message:"not empty"},
    // },
    // d_favourite_place: {
    // 	presence: {allowEmpty: false,message:"not empty"},
    // },
    // d_fav_latitude: {
    // 	presence: {allowEmpty: false,message:"not empty"},
    // },
    // d_fav_longtitute: {
    // 	presence: {allowEmpty: false,message:"not empty"},
    // },
    p_fav_locationtype: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    p_favourite_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function ValidateDeleteFavourite(q, input) {
  var constraints = {
    p_favourite_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function get_travel_msg(travel_status) {
  var travel_msg = "";
  switch (travel_status) {
    case 1:
      travel_msg = req.__("fare_update_label");
      break;

    case 2:
      travel_msg = req.__("inprogress_label");
      break;

    case 3:
      travel_msg = req.__("arrived_label");
      break;

    case 5:
      travel_msg = req.__("completed_label");
      break;

    case 9:
      travel_msg = req.__("trip_confirmed_label");
      break;

    default:
      travel_msg = req.__("yet_assigned_label");
  }

  return travel_msg;
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
