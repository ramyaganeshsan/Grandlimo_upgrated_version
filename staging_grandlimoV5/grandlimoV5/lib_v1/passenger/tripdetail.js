var apimodel = require("../../models/passapimodel_v1");
var common = require("../../lib_v1/common");
var favicon = require("../../config/favicon.json");
var config = require("../../config/common_config.json");
var q = require("q");
var appRoot = require("app-root-path");
var validator = require("validator");
var fs = require("fs");
var validate = require("validate.js");
var dateFormat = require("dateformat");
var time = require("time");
//var i18n = require('i18n');
var t = require("../../config/table_config.json");
var uniqid = require("uniqid");
var sort = require("sort-array-objects");
var shared = require("../../utils/shared");
var mailer = require("../../lib_v1/email/mailer");

exports.passenger_trips_list = function (q, req) {
  var deferred = q.defer();

  let inputParams = req.body;

  let message = {
    message: "",
    status: 0,
  };

  //var hostname = req.headers.host;
  var hostname = global.settings.base_url;
  var appRoot = global.settings.docroot;

  var validate_error = validateBookingList(q, inputParams);

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
    var userid = inputParams.passenger_id;
    var start = inputParams.start;
    var limit = inputParams.limit;

    apimodel.passenger_profile_by_id(q, userid).then(function (checkresults) {
      if (checkresults.length > 0) {
        var details = {};
        apimodel
          .passenger_trips_completed(q, userid)
          .then(function (completed_tripresults) {
            apimodel
              .passenger_trips_cancelled(q, userid)
              .then(function (cancelled_tripresults) {
                apimodel
                  .passenger_trips_missed(q, userid)
                  .then(function (missed_tripresults) {
                    apimodel
                      .passenger_trips_rejected(q, userid)
                      .then(function (rejected_tripresults) {
                        apimodel
                          .passenger_trips_upcoming(q, userid)
                          .then(function (upcoming_tripresults) {
                            try {
                              //console.log('completed.....',completed_tripresults.length);
                              //console.log('cancelled.....',cancelled_tripresults.length);
                              //console.log('missed....',missed_tripresults.length);
                              //console.log('rejected....',rejected_tripresults.length);
                              //console.log('Upcoming....',upcoming_tripresults.length);

                              var tripresults = [];
                              var completed_trips = [];
                              if (completed_tripresults.length > 0) {
                                completed_trips = completed_tripresults;
                              }
                              var cancelled_trips = [];
                              if (cancelled_tripresults.length > 0) {
                                cancelled_trips = cancelled_tripresults;
                              }
                              var missed_trips = [];
                              if (missed_tripresults.length > 0) {
                                missed_trips = missed_tripresults;
                              }
                              var rejected_trips = [];
                              if (rejected_tripresults.length > 0) {
                                rejected_trips = rejected_tripresults;
                              }

                              var upcomingTrips = [];
                              if (upcoming_tripresults.length > 0) {
                                upcomingTrips = upcoming_tripresults;
                              }

                              tripresults = tripresults
                                .concat(completed_trips)
                                .concat(cancelled_trips)
                                .concat(missed_trips)
                                .concat(rejected_trips)
                                .concat(upcomingTrips);

                              var props = ["_id"];
                              tripresults = sort.default(tripresults, props, 1);
                              //console.log('completed_trips',completed_trips);
                              //console.log('upcomingTrips',upcomingTrips);
                              //console.log('cancelled_trips',cancelled_trips);
                              //console.log('rejected_trips',rejected_trips);

                              tripresults = tripresults.splice(
                                start * limit,
                                limit
                              );
                              //console.log('trip results..',tripresults.length);
                            } catch (err) {
                              console.log(err);
                            }

                            if (tripresults.length > 0) {
                              var i = 0;
                              tripresults.forEach(function (element) {
                                //console.log("6666666666666",tripresults);
                                try {
                                  tripresults[i].profile_image =
                                    get_passenger_profile(
                                      appRoot,
                                      element.passenger_profile_image,
                                      hostname
                                    );
                                  tripresults[i].driver_image =
                                    get_driver_profile(
                                      appRoot,
                                      element.driver_image,
                                      hostname
                                    );

                                  var payment_type = element.payment_type;
                                  var wallet_amount_used =
                                    element.wallet_used_amount;
                                  var pending_amt = element.pending_amt;
                                  var advance_payment = element.advance_payment;
                                  var driver_edit_status =
                                    element.driver_edit_status;
                                  var add_amt = element.add_amt;
                                  var driver_firstname = element.drivername;
                                  var driver_lastname = element.driver_lastname;
                                  var driver_reply = element.driver_reply;
                                  var travel_status = element.travel_status;

                                  tripresults[i].drivername =
                                    driver_firstname + " " + driver_lastname;
                                  tripresults[i].payment_type =
                                    get_payment_message(
                                      req,
                                      payment_type,
                                      wallet_amount_used,
                                      pending_amt,
                                      advance_payment,
                                      driver_edit_status,
                                      add_amt
                                    );
                                  tripresults[i].travel_msg = get_travel_msg(
                                    req,
                                    travel_status,
                                    driver_reply
                                  );

                                  if (element.distance != "") {
                                    var distance = parseFloat(element.distance);
                                    tripresults[i].distance =
                                      distance.toFixed(2);
                                  } else {
                                    tripresults[i].distance = 0;
                                  }

                                  //console.log('pickup time',element.actual_pickup_time);
                                  //console.log('trip id',element._id);

                                  if (element.pickup_time != "") {
                                    var pickup_time = new Date(
                                      element.pickup_time
                                    );
                                    tripresults[i].pickup_time =
                                      common.convert_timezone(
                                        element.pickup_time
                                      );
                                    tripresults[i].pickuptime =
                                      common.convert_timezone(
                                        element.pickup_time
                                      );
                                  } else {
                                    tripresults[i].pickup_time = "";
                                    tripresults[i].pickuptime = "";
                                  }

                                  if (element.actual_pickup_time != "") {
                                    var actual_pickup_time = new Date(
                                      element.actual_pickup_time
                                    );
                                    tripresults[i].actual_pickup_time =
                                      common.convert_timezone(
                                        element.actual_pickup_time
                                      );
                                  } else {
                                    tripresults[i].actual_pickup_time = "";
                                  }

                                  if (element.drop_time != "") {
                                    var drop_time = new Date(element.drop_time);
                                    tripresults[i].drop_time =
                                      common.convert_timezone(
                                        element.drop_time
                                      );
                                    tripresults[i].droptime =
                                      common.convert_timezone(
                                        element.drop_time
                                      );
                                  } else {
                                    tripresults[i].drop_time = "";
                                    tripresults[i].droptime = "";
                                  }

                                  i++;
                                } catch (err) {
                                  console.log(err);
                                }
                              });

                              message.message = req.__("success");
                              message.detail = tripresults;
                              message.status = 1;
                              deferred.resolve(message);
                              deferred.makeNodeResolver();
                              message = null;
                            } else {
                              message.detail = [];
                              message.message = req.__("no_data");
                              message.status = 0;
                              deferred.resolve(message);
                              deferred.makeNodeResolver();
                              message = null;
                            }
                          });
                      });
                  });
              });
          });
      } else {
        message.message = req.__("invalid_user_driver");
        message.status = -1;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        message = null;
      }
    });
  }

  return deferred.promise;
};

// Customization
exports.passenger_completed_list = function (q, req) {
  var deferred = q.defer();

  let inputParams = req.body;

  let message = {
    message: "",
    status: 0,
  };

  var hostname = global.settings.base_url;
  var appRoot = global.settings.docroot;

  var validate_error = validateBookingList(q, inputParams);

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
    var userid = inputParams.passenger_id;
    var start = inputParams.start;
    var limit = inputParams.limit;

    apimodel.passenger_profile_by_id(q, userid).then(function (checkresults) {
      console.error("checkresults : ", checkresults);
      if (checkresults.length > 0) {
        var details = {};

        apimodel
          .passenger_trips_completed(q, userid)
          .then(function (completed_tripresults) {
            console.error("completed_tripresults : ", completed_tripresults);
            apimodel
              .passenger_trips_cancelled(q, userid)
              .then(function (cancelled_tripresults) {
                apimodel
                  .passenger_trips_missed(q, userid)
                  .then(function (missed_tripresults) {
                    apimodel
                      .passenger_trips_rejected(q, userid)
                      .then(function (rejected_tripresults) {
                        try {
                          var tripresults = [];
                          var completed_trips = [];
                          if (completed_tripresults.length > 0) {
                            completed_trips = completed_tripresults;
                          }
                          var cancelled_trips = [];
                          if (cancelled_tripresults.length > 0) {
                            cancelled_trips = cancelled_tripresults;
                          }
                          var missed_trips = [];
                          if (missed_tripresults.length > 0) {
                            missed_trips = missed_tripresults;
                          }
                          var rejected_trips = [];
                          if (rejected_tripresults.length > 0) {
                            rejected_trips = rejected_tripresults;
                          }

                          //tripresults = tripresults.concat(completed_trips).concat(cancelled_trips).concat(missed_trips).concat(rejected_trips);
                          tripresults = tripresults
                            .concat(completed_trips)
                            .concat(cancelled_trips);

                          var props = ["_id"];
                          tripresults = sort.default(tripresults, props, 1);
                          tripresults = tripresults.splice(
                            start * limit,
                            limit
                          );
                        } catch (err) {
                          console.log(err);
                        }

                        if (tripresults.length > 0) {
                          var i = 0;
                          tripresults.forEach(function (element) {
                            //console.log('element',element);
                            try {
                              tripresults[i].profile_image =
                                get_passenger_profile(
                                  appRoot,
                                  element.passenger_profile_image,
                                  hostname
                                );
                              tripresults[i].driver_image = get_driver_profile(
                                appRoot,
                                element.driver_image,
                                hostname
                              );

                              var payment_type = element.payment_type;
                              var wallet_amount_used =
                                element.wallet_used_amount;
                              var pending_amt = element.pending_amt;
                              var advance_payment = element.advance_payment;
                              var driver_edit_status =
                                element.driver_edit_status;
                              var add_amt = element.add_amt;
                              var driver_firstname = element.drivername;
                              var driver_lastname = element.driver_lastname;
                              var driver_reply = element.driver_reply;
                              var travel_status = element.travel_status;

                              tripresults[i].drivername =
                                driver_firstname + " " + driver_lastname;
                              tripresults[i].payment_type = get_payment_message(
                                req,
                                payment_type,
                                wallet_amount_used,
                                pending_amt,
                                advance_payment,
                                driver_edit_status,
                                add_amt
                              );
                              tripresults[i].travel_msg = get_travel_msg(
                                req,
                                travel_status,
                                driver_reply
                              );
                              tripresults[i].static_map = check_map_image(
                                appRoot,
                                element._id,
                                hostname
                              );

                              // Sasidharan May 9 2025
                              tripresults[i].model_image = model_image_exists(
                                hostname,
                                appRoot,
                                element.model_image
                              );

                              if (element.distance != "") {
                                var distance = parseFloat(element.distance);
                                tripresults[i].distance = distance.toFixed(2);
                              } else {
                                tripresults[i].distance = 0;
                              }

                              if (element.pickup_time != "") {
                                var pickup_time = new Date(element.pickup_time);
                                tripresults[i].pickup_time =
                                  common.convert_timezone(element.pickup_time);
                                tripresults[i].pickuptime =
                                  common.convert_timezone(element.pickup_time);
                              } else {
                                tripresults[i].pickup_time = "";
                                tripresults[i].pickuptime = "";
                              }

                              if (element.actual_pickup_time != "") {
                                var actual_pickup_time = new Date(
                                  element.actual_pickup_time
                                );
                                tripresults[i].actual_pickup_time =
                                  common.convert_timezone(
                                    element.actual_pickup_time
                                  );
                              } else {
                                tripresults[i].actual_pickup_time = "";
                              }

                              if (element.drop_time != "") {
                                var drop_time = new Date(element.drop_time);
                                tripresults[i].drop_time =
                                  common.convert_timezone(element.drop_time);
                                tripresults[i].droptime =
                                  common.convert_timezone(element.drop_time);
                              } else {
                                tripresults[i].drop_time = "";
                                tripresults[i].droptime = "";
                              }

                              i++;
                            } catch (err) {
                              console.log(err);
                            }
                          });

                          message.message = req.__("success");
                          message.detail = tripresults;
                          message.status = 1;
                          deferred.resolve(message);
                          deferred.makeNodeResolver();
                          message = null;
                        } else {
                          message.detail = [];
                          message.message = req.__("no_data");
                          message.status = 0;
                          deferred.resolve(message);
                          deferred.makeNodeResolver();
                          message = null;
                        }
                      });
                  });
              });
          });
      } else {
        message.message = req.__("invalid_user_driver");
        message.status = -1;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        message = null;
      }
    });
  }

  return deferred.promise;
};

exports.passenger_upcoming_list = function (q, req) {
  var deferred = q.defer();

  let inputParams = req.body;

  let message = {
    message: "",
    status: 0,
  };

  var hostname = global.settings.base_url;
  var appRoot = global.settings.docroot;

  var validate_error = validateBookingList(q, inputParams);

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
    var userid = inputParams.passenger_id;
    var start = inputParams.start;
    var limit = inputParams.limit;

    apimodel.passenger_profile_by_id(q, userid).then(function (checkresults) {
      if (checkresults.length > 0) {
        var details = {};

        apimodel
          .passenger_trips_upcoming(q, userid)
          .then(function (upcoming_tripresults) {
            try {
              //console.log('upcoming_tripresults.....',upcoming_tripresults.length);
              var tripresults = [];
              var upcomingTrips = [];

              //before
              // if (upcoming_tripresults.length > 0) {
              //   upcomingTrips = upcoming_tripresults;
              // }

              //filter current date with time
              // if (upcoming_tripresults.length > 0) {
              //   const now = new Date();
              //   upcomingTrips = upcoming_tripresults.filter((trip) => {
              //     const pickup = new Date(trip.pickup_time);
              //     return pickup >= now;
              //   });
              // }

              // filter current
              const today = new Date();
              today.setHours(0, 0, 0, 0);

              upcomingTrips = upcoming_tripresults.filter((trip) => {
                const pickup = new Date(trip.pickup_time);
                pickup.setHours(0, 0, 0, 0);
                return pickup >= today;
              });

              tripresults = upcomingTrips;

              var props = ["_id"];
              tripresults = sort.default(upcomingTrips, props, 1);
              tripresults = upcomingTrips.splice(start * limit, limit);
            } catch (err) {
              console.log(err);
            }

            if (tripresults.length > 0) {
              var i = 0;
              tripresults.forEach(function (element) {
                try {
                  tripresults[i].profile_image = get_passenger_profile(
                    appRoot,
                    element.passenger_profile_image,
                    hostname
                  );
                  tripresults[i].driver_image = get_driver_profile(
                    appRoot,
                    element.driver_image,
                    hostname
                  );

                  var payment_type = element.payment_type;
                  var wallet_amount_used = element.wallet_used_amount;
                  var pending_amt = element.pending_amt;
                  var advance_payment = element.advance_payment;
                  var driver_edit_status = element.driver_edit_status;
                  var add_amt = element.add_amt;
                  var driver_firstname = element.drivername;
                  var driver_lastname = element.driver_lastname;
                  var driver_reply = element.driver_reply;
                  var travel_status = element.travel_status;

                  tripresults[i].drivername =
                    driver_firstname + " " + driver_lastname;
                  tripresults[i].payment_type = get_payment_message(
                    req,
                    payment_type,
                    wallet_amount_used,
                    pending_amt,
                    advance_payment,
                    driver_edit_status,
                    add_amt
                  );
                  tripresults[i].travel_msg = get_travel_msg(
                    req,
                    travel_status,
                    driver_reply
                  );
                  tripresults[i].static_map = check_map_image(
                    appRoot,
                    element._id,
                    hostname
                  );

                  // Sasidharan May 9 2025
                  tripresults[i].model_image = model_image_exists(
                    hostname,
                    appRoot,
                    element.model_image
                  );

                  if (element.distance != "") {
                    var distance = parseFloat(element.distance);
                    tripresults[i].distance = distance.toFixed(2);
                  } else {
                    tripresults[i].distance = 0;
                  }

                  if (element.pickup_time != "") {
                    var pickup_time = new Date(element.pickup_time);
                    tripresults[i].pickup_time = common.convert_timezone(
                      element.pickup_time
                    );
                    tripresults[i].pickuptime = common.convert_timezone(
                      element.pickup_time
                    );
                  } else {
                    tripresults[i].pickup_time = "";
                    tripresults[i].pickuptime = "";
                  }

                  if (element.actual_pickup_time != "") {
                    var actual_pickup_time = new Date(
                      element.actual_pickup_time
                    );
                    tripresults[i].actual_pickup_time = common.convert_timezone(
                      element.actual_pickup_time
                    );
                  } else {
                    tripresults[i].actual_pickup_time = "";
                  }

                  if (element.drop_time != "") {
                    var drop_time = new Date(element.drop_time);
                    tripresults[i].drop_time = common.convert_timezone(
                      element.drop_time
                    );
                    tripresults[i].droptime = common.convert_timezone(
                      element.drop_time
                    );
                  } else {
                    tripresults[i].drop_time = "";
                    tripresults[i].droptime = "";
                  }

                  i++;
                } catch (err) {
                  console.log(err);
                }
              });

              message.message = req.__("success");
              message.detail = tripresults;
              message.status = 1;
              deferred.resolve(message);
              deferred.makeNodeResolver();
              message = null;
            } else {
              message.detail = [];
              message.message = req.__("no_data");
              message.status = 0;
              deferred.resolve(message);
              deferred.makeNodeResolver();
              message = null;
            }
          });
      } else {
        message.message = req.__("invalid_user_driver");
        message.status = -1;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        message = null;
      }
    });
  }

  return deferred.promise;
};

exports.passenger_inprogress_list = function (q, req) {
  var deferred = q.defer();

  let inputParams = req.body;

  let message = {
    message: "",
    status: 0,
  };

  var hostname = global.settings.base_url;
  var appRoot = global.settings.docroot;

  var validate_error = validateBookingList(q, inputParams);

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
    var userid = inputParams.passenger_id;
    var start = inputParams.start;
    var limit = inputParams.limit;

    apimodel.passenger_profile_by_id(q, userid).then(function (checkresults) {
      if (checkresults.length > 0) {
        var details = {};

        apimodel
          .passenger_trips_inprogress(q, userid)
          .then(function (inprogress_tripresults) {
            try {
              //console.log('inprogress_tripresults.....',inprogress_tripresults.length);
              var tripresults = [];
              var inprogressTrips = [];
              if (inprogress_tripresults.length > 0) {
                inprogressTrips = inprogress_tripresults;
              }

              tripresults = inprogressTrips;

              var props = ["_id"];
              tripresults = sort.default(inprogressTrips, props, 1);
              tripresults = inprogressTrips.splice(start * limit, limit);
            } catch (err) {
              console.log(err);
            }

            if (tripresults.length > 0) {
              var i = 0;
              tripresults.forEach(function (element) {
                try {
                  tripresults[i].profile_image = get_passenger_profile(
                    appRoot,
                    element.passenger_profile_image,
                    hostname
                  );
                  tripresults[i].driver_image = get_driver_profile(
                    appRoot,
                    element.driver_image,
                    hostname
                  );

                  var payment_type = element.payment_type;
                  var wallet_amount_used = element.wallet_used_amount;
                  var pending_amt = element.pending_amt;
                  var advance_payment = element.advance_payment;
                  var driver_edit_status = element.driver_edit_status;
                  var add_amt = element.add_amt;
                  var driver_firstname = element.drivername;
                  var driver_lastname = element.driver_lastname;
                  var driver_reply = element.driver_reply;
                  var travel_status = element.travel_status;

                  tripresults[i].drivername =
                    driver_firstname + " " + driver_lastname;
                  tripresults[i].payment_type = get_payment_message(
                    req,
                    payment_type,
                    wallet_amount_used,
                    pending_amt,
                    advance_payment,
                    driver_edit_status,
                    add_amt
                  );
                  tripresults[i].travel_msg = get_travel_msg(
                    req,
                    travel_status,
                    driver_reply
                  );
                  tripresults[i].static_map = check_map_image(
                    appRoot,
                    element._id,
                    hostname
                  );

                  // Sasidharan May 9 2025
                  tripresults[i].model_image = model_image_exists(
                    hostname,
                    appRoot,
                    element.model_image
                  );

                  if (element.distance != "") {
                    var distance = parseFloat(element.distance);
                    tripresults[i].distance = distance.toFixed(2);
                  } else {
                    tripresults[i].distance = 0;
                  }

                  if (element.pickup_time != "") {
                    var pickup_time = new Date(element.pickup_time);
                    tripresults[i].pickup_time = common.convert_timezone(
                      element.pickup_time
                    );
                    tripresults[i].pickuptime = common.convert_timezone(
                      element.pickup_time
                    );
                  } else {
                    tripresults[i].pickup_time = "";
                    tripresults[i].pickuptime = "";
                  }

                  if (element.actual_pickup_time != "") {
                    var actual_pickup_time = new Date(
                      element.actual_pickup_time
                    );
                    tripresults[i].actual_pickup_time = common.convert_timezone(
                      element.actual_pickup_time
                    );
                  } else {
                    tripresults[i].actual_pickup_time = "";
                  }

                  if (element.drop_time != "") {
                    var drop_time = new Date(element.drop_time);
                    tripresults[i].drop_time = common.convert_timezone(
                      element.drop_time
                    );
                    tripresults[i].droptime = common.convert_timezone(
                      element.drop_time
                    );
                  } else {
                    tripresults[i].drop_time = "";
                    tripresults[i].droptime = "";
                  }

                  i++;
                } catch (err) {
                  console.log(err);
                }
              });

              message.message = req.__("success");
              message.detail = tripresults;
              message.status = 1;
              deferred.resolve(message);
              deferred.makeNodeResolver();
              message = null;
            } else {
              message.detail = [];
              message.message = req.__("no_data");
              message.status = 0;
              deferred.resolve(message);
              deferred.makeNodeResolver();
              message = null;
            }
          });
      } else {
        message.message = req.__("invalid_user_driver");
        message.status = -1;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        message = null;
      }
    });
  }

  return deferred.promise;
};

//Ramya Aug 19 2026 - for ios track trip functionality

exports.check_passenger_trip_available = function (q, req) {
  var deferred = q.defer();

  let inputParams = req.body;

  let message = {
    message: "",
    status: 0,
    isTripAvailable: 0,
    detail: [],
  };

  var hostname = global.settings.base_url;
  var appRoot = global.settings.docroot;

  var validate_error = validateBookingList(q, inputParams);

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
    var userid = inputParams.passenger_id;

    apimodel
      .get_passenger_trip_by_status(q, userid)
      .then(function (checkresults) {
        try {
          if (checkresults.length > 0) {
            message.message = req.__("success");
            message.status = 1;
            message.isTripAvailable = 1;

            message.detail = checkresults;
            deferred.resolve(message);
            deferred.makeNodeResolver();
            message = null;
          } else {
            message.detail = [];
            message.isTripAvailable = 0;
            message.message = req.__("no_data");
            message.status = 0;
            deferred.resolve(message);
            deferred.makeNodeResolver();
            message = null;
          }
        } catch (error) {
          console.error("Error while processing trip results:", error);

          message.message = error.message || "Something went wrong";
          message.status = -1;
          message.isTripAvailable = 0;
          message.detail = [];

          deferred.resolve(message);
          deferred.makeNodeResolver();
          message = null;
        }
      })
      .catch(function (error) {
        console.error("Error getting passenger trip:", error);

        message.message = error.message || "Something went wrong";
        message.status = -1;
        message.isTripAvailable = 0;
        message.detail = [];

        deferred.resolve(message);
        deferred.makeNodeResolver();
        message = null;
      });
  }

  return deferred.promise;
};

// Customization

exports.get_trip_detail = function (q, req) {
  var deferred = q.defer();

  let inputParams = req.body;

  let message = {
    message: "",
    status: 0,
  };

  //var hostname = req.headers.host;
  var hostname = global.settings.base_url;
  var appRoot = global.settings.docroot;

  var validate_error = validateTripDetail(q, inputParams);

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
    var details = {};

    apimodel.get_trip_detail(q, trip_id).then(function (tripdetailresults) {
      console.error("tripdetailresults : ", tripdetailresults);
      apimodel
        .get_completed_trip_detail(q, trip_id)
        .then(function (completedtripdetailresults) {
          apimodel.trip_pay_details(q, trip_id).then(function (trippayresults) {
            apimodel.get_ratings_info(q).then(function (ratingsinforesults) {
              //console.log('trippayresults',trippayresults);

              if (completedtripdetailresults.length > 0) {
                tripdetailresults = completedtripdetailresults;
              }

              var trip_pay_details = {};
              if (trippayresults.length > 0) {
                trip_pay_details = trippayresults[0];
              }
              var ratingsinfo = [];
              if (ratingsinforesults.length > 0) {
                ratingsinfo = ratingsinforesults;
              }

              if (tripdetailresults.length > 0) {
                try {
                  var i = 0;
                  tripdetailresults.forEach(function (element) {
                    // console.log('tripinfo',element);
                    try {
                      /* Sasi */
                      /* Added discount wallet amount with wallet */
                      if (
                        typeof element.discount_wallet_amount_used !=
                        "undefined"
                      ) {
                        if (element.discount_wallet_amount_used > 0) {
                          element.wallet_used_amount +=
                            element.discount_wallet_amount_used;
                        } else if (
                          typeof element.discount_wallet_passenger_log !=
                          "undefined"
                        ) {
                          if (element.discount_wallet_passenger_log > 0) {
                            element.wallet_used_amount +=
                              element.discount_wallet_passenger_log;
                          }
                        }
                      } else if (
                        typeof element.discount_wallet_passenger_log !=
                        "undefined"
                      ) {
                        if (element.discount_wallet_passenger_log > 0) {
                          element.wallet_used_amount +=
                            element.discount_wallet_passenger_log;
                        }
                      }

                      /* Added cash and card payment details */
                      if (
                        typeof element.payment_array != "undefined" &&
                        element.payment_array.length > 0
                      ) {
                        let cashPayment =
                          typeof element.payment_array[0].value != "undefined"
                            ? shared.roundUp(element.payment_array[0].value, 2)
                            : 0;
                        let cardPayment =
                          typeof element.payment_array[1].value != "undefined"
                            ? shared.roundUp(element.payment_array[1].value, 2)
                            : 0;
                        tripdetailresults[i].cash_amount_used = cashPayment;
                        tripdetailresults[i].card_amount_used = cardPayment;
                        delete tripdetailresults[i]["payment_array"];
                      } else {
                        tripdetailresults[i].cash_amount_used = 0;
                        tripdetailresults[i].card_amount_used = 0;
                      }

                      /* Sasi july 22 2022 */
                      trip_pay_details.cash_amount_used =
                        tripdetailresults[i].cash_amount_used;
                      trip_pay_details.card_amount_used =
                        tripdetailresults[i].card_amount_used;

                      var payment_type = element.payment_type;
                      var wallet_amount_used = element.wallet_used_amount;
                      var pending_amt = element.pending_amt;
                      var advance_payment = element.advance_payment;
                      var driver_edit_status = element.driver_edit_status;
                      var driver_name =
                        element.driver_name + " " + element.driver_lastname;
                      var add_amt = element.add_amt;
                      var travel_status = element.travel_status;
                      var waiting_secs = element.waiting_hours * 3600;
                      var trip_secs = element.trip_minutes * 60;

                      //console.log('trip travel_status:',travel_status);
                      //console.log('trip paydet:',trip_pay_details);

                      tripdetailresults[i].trip_fare = element.fare;
                      tripdetailresults[i].paid_amt = element.fare;

                      /* Sasidharan May 13 2024 */
                      if (
                        travel_status != 1 &&
                        element.passengers_id &&
                        +element.paymentInProgress
                      ) {
                        let processingPayment = {
                          status: 11,
                          message: "Processing payment.",
                          loading: 1,
                        };
                        common.emitPassenger(
                          element.passengers_id,
                          processingPayment
                        );
                      }

                      // Client Feedback
                      var driver_reply = element.driver_reply;
                      tripdetailresults[i].travel_msg = get_travel_msg(
                        req,
                        travel_status,
                        driver_reply
                      );
                      tripdetailresults[i].approx_fare = element.approx_fare;
                      // Client Feedback

                      tripdetailresults[i].surge_price_percentage =
                        typeof element.surge_price_percentage !== "undefined"
                          ? element.surge_price_percentage
                          : 0;

                      tripdetailresults[i].static_map = check_map_image(
                        appRoot,
                        trip_id,
                        hostname
                      );
                      tripdetailresults[i].trip_duration_mins =
                        convsecstoformat(trip_secs);
                      tripdetailresults[i].used_wallet_amount =
                        element.wallet_used_amount;

                      if (element.fixed_estimate_fare_type) {
                        tripdetailresults[i].fixed_estimate_fare_type =
                          element.fixed_estimate_fare_type;
                      } else {
                        tripdetailresults[i].fixed_estimate_fare_type = 0;
                      }

                      if (element.fixed_estimate_result) {
                        var t = element.fixed_estimate_result;
                        if (t.constructor.name == "Array") {
                          t = t.reduce(function (o, val) {
                            o[val] = val;
                            return o;
                          }, {});
                        }
                        tripdetailresults[i].fixed_estimate_result = t;
                      } else {
                        tripdetailresults[i].fixed_estimate_result = {};
                      }

                      if (element.pickup_time != "") {
                        var pickup_time = new Date(element.pickup_time);
                        tripdetailresults[i].pickuptime = tripdetailresults[
                          i
                        ].pickup_time = common.convert_timezone(
                          element.pickup_time
                        );
                      } else {
                        tripdetailresults[i].pickup_time = "";
                        tripdetailresults[i].pickuptime = "";
                      }

                      if (element.actual_pickup_time != "") {
                        var actual_pickup_time = new Date(
                          element.actual_pickup_time
                        );
                        tripdetailresults[i].actual_pickup_time =
                          common.convert_timezone(element.actual_pickup_time);
                      } else {
                        tripdetailresults[i].actual_pickup_time = "";
                      }

                      if (element.drop_time != "") {
                        var drop_time = new Date(element.drop_time);
                        tripdetailresults[i].drop_time =
                          common.convert_timezone(element.drop_time);
                        tripdetailresults[i].droptime = common.convert_timezone(
                          element.drop_time
                        );
                      } else {
                        tripdetailresults[i].drop_time = "";
                        tripdetailresults[i].droptime = "";
                      }

                      if (element.fare_calculation_type == 0) {
                        tripdetailresults[i].fare_calculation_type =
                          global.settings.fare_calculation_type;
                      }

                      if (element.waiting_start_status == 1) {
                        var start_waiting_timer = element.start_timer;
                        var current_time = new Date();

                        if (start_waiting_timer != "")
                          tripdetailresults[i].total_waiting_time =
                            current_time.getTime() -
                            start_waiting_timer.getTime() +
                            element.total_waiting_time;
                        else
                          tripdetailresults[i].total_waiting_time =
                            element.total_waiting_time;
                      } else {
                        tripdetailresults[i].total_waiting_time =
                          element.total_waiting_time;
                      }

                      tripdetailresults[i].payment_type = get_payment_message(
                        req,
                        payment_type,
                        wallet_amount_used,
                        pending_amt,
                        advance_payment,
                        driver_edit_status,
                        add_amt
                      );

                      if (element.distance != "") {
                        var distance = parseFloat(element.distance);
                        tripdetailresults[i].distance = distance.toFixed(2);
                      } else {
                        tripdetailresults[i].distance = 0;
                      }

                      tripdetailresults[i].passenger_image =
                        get_passenger_profile(
                          appRoot,
                          element.passenger_profile_image,
                          hostname
                        );
                      tripdetailresults[i].driver_image = get_driver_profile(
                        appRoot,
                        element.driver_image,
                        hostname
                      );
                      tripdetailresults[i].model_image_new = get_model_image(
                        appRoot,
                        element.model_image_new,
                        hostname
                      );
                      trip_pay_details.driver_image = get_driver_profile(
                        appRoot,
                        element.driver_image,
                        hostname
                      );
                      trip_pay_details.driver_name = driver_name;

                      trip_pay_details.airport_pickup =
                        typeof element.airport_pickup !== "undefined"
                          ? element.airport_pickup
                          : 0;

                      trip_pay_details.airport_type =
                        typeof element.airport_type !== "undefined"
                          ? element.airport_type
                          : "";

                      trip_pay_details.zone_fare_applicable =
                        typeof element.zone_fare_applicable !== "undefined"
                          ? element.zone_fare_applicable
                          : "";

                      // trip_pay_details.additionalMinsFare =
                      //   typeof element.additionalMinsFare !== "undefined"
                      //     ? element.additionalMinsFare
                      //     : 0;
                      trip_pay_details.additionalMinsFare =
                        element.additionalMinsFare != null
                          ? parseFloat(element.additionalMinsFare)
                          : parseFloat(trip_pay_details.additionalMinsFare) ||
                            0;

                      trip_pay_details.additionalMins =
                        element.additionalMins != null
                          ? parseFloat(element.additionalMins)
                          : parseFloat(trip_pay_details.additionalMins) || 0;

                      trip_pay_details.passenger_discount =
                        typeof element.passenger_discount !== "undefined"
                          ? element.passenger_discount
                          : 0;

                      trip_pay_details.taxi_model_name =
                        typeof element.taxi_model_name !== "undefined"
                          ? element.taxi_model_name
                          : "";
                      trip_pay_details.passenger_wallet_amount =
                        typeof element.passenger_wallet_amount !== "undefined"
                          ? element.passenger_wallet_amount
                          : "";

                      if (element.pay_mod_id == 6) {
                        //trip_pay_details.fare = element.tripfare;
                        trip_pay_details.base_fare = element.tripfare;
                      } else {
                        //trip_pay_details.fare = element.fare;
                        trip_pay_details.base_fare = element.fare;
                      }
                      trip_pay_details.fare = element.fare;
                      // trip_pay_details.passenger_discount =
                      //   trip_pay_details.promodiscount_amount;
                      trip_pay_details.payment_type = element.pay_mod_id;
                      //trip_pay_details.journey_date = tripdetailresults[i].droptime;
                      //trip_pay_details.journey_date = common.convert_timezone(new Date());
                      trip_pay_details.journey_date =
                        tripdetailresults[i].actual_pickup_time;
                      trip_pay_details.gift_card_status =
                        tripdetailresults[i].gift_card_status;
                      trip_pay_details.gift_card_discount =
                        tripdetailresults[i].gift_card_discount;

                      // 03 Feb 2020
                      tripdetailresults[i].surge_price =
                        typeof tripdetailresults[i].surge_price !== "undefined"
                          ? tripdetailresults[i].surge_price.toFixed(3)
                          : 0;
                      tripdetailresults[i].passenger_discount =
                        typeof tripdetailresults[i].passenger_discount !==
                        "undefined"
                          ? tripdetailresults[i].passenger_discount.toFixed(3)
                          : 0;
                      tripdetailresults[i].corporate_amount =
                        typeof tripdetailresults[i].corporate_amount !==
                        "undefined"
                          ? tripdetailresults[i].corporate_amount.toFixed(3)
                          : 0;
                      // 03 Feb 2020

                      /* Sasidharan May 13 2024 */
                      if (
                        travel_status == 1 ||
                        travel_status == 5 ||
                        travel_status == 4
                      ) {
                        tripdetailresults[i].trip_pay_details =
                          trip_pay_details;
                        tripdetailresults[i].trip_pay_details.ratings_info =
                          ratingsinfo;
                      } else {
                        tripdetailresults[i].trip_pay_details = {};
                      }
                    } catch (err) {
                      console.log(err);
                    }

                    i++;
                  });
                  details = tripdetailresults[0];
                  message.message = req.__("success");
                  message.detail = details;
                  message.status = 1;
                  deferred.resolve(message);
                  deferred.makeNodeResolver();
                  message = null;
                } catch (err) {
                  console.log(err);
                }
              } else {
                message.message = req.__("invalid_trip");
                message.status = -1;
                deferred.resolve(message);
                deferred.makeNodeResolver();
                message = null;
              }
            });
          });
        });
    });
  }

  return deferred.promise;
};

exports.passenger_complete_trips = function (q, req) {
  var deferred = q.defer();

  let inputParams = req.body;

  let message = {
    message: "",
    status: 0,
  };

  //var hostname = req.headers.host;
  var hostname = global.settings.base_url;
  var appRoot = global.settings.docroot;

  var validate_error = validateBookingList(q, inputParams);

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
    var userid = inputParams.passenger_id;
    var start = inputParams.start;
    var limit = inputParams.limit;

    apimodel.passenger_profile_by_id(q, userid).then(function (checkresults) {
      if (checkresults.length > 0) {
        var sort_arr = { skip: start, limit: limit };
        apimodel
          .passenger_trips_completed_without_hourly(q, userid, sort_arr)
          .then(function (completed_tripresults) {
            tripresults = completed_tripresults;

            if (tripresults.length > 0) {
              var i = 0;
              tripresults.forEach(function (element) {
                //console.log("6666666666666",tripresults);
                try {
                  tripresults[i].profile_image = get_passenger_profile(
                    appRoot,
                    element.passenger_profile_image,
                    hostname
                  );
                  tripresults[i].driver_image = get_driver_profile(
                    appRoot,
                    element.driver_image,
                    hostname
                  );

                  var payment_type = element.payment_type;
                  var wallet_amount_used = element.wallet_used_amount;
                  var pending_amt = element.pending_amt;
                  var advance_payment = element.advance_payment;
                  var driver_edit_status = element.driver_edit_status;
                  var add_amt = element.add_amt;
                  var driver_firstname = element.drivername;
                  var driver_lastname = element.driver_lastname;
                  var driver_reply = element.driver_reply;
                  var travel_status = element.travel_status;

                  tripresults[i].drivername =
                    driver_firstname + " " + driver_lastname;
                  tripresults[i].payment_type = get_payment_message(
                    req,
                    payment_type,
                    wallet_amount_used,
                    pending_amt,
                    advance_payment,
                    driver_edit_status,
                    add_amt
                  );
                  tripresults[i].travel_msg = get_travel_msg(
                    req,
                    travel_status,
                    driver_reply
                  );

                  if (element.distance != "") {
                    var distance = parseFloat(element.distance);
                    tripresults[i].distance = distance.toFixed(2);
                  } else {
                    tripresults[i].distance = 0;
                  }

                  if (element.pickup_time != "") {
                    var pickup_time = new Date(element.pickup_time);
                    tripresults[i].pickup_time = common.convert_timezone(
                      element.pickup_time
                    );
                    tripresults[i].pickuptime = common.convert_timezone(
                      element.pickup_time
                    );
                  } else {
                    tripresults[i].pickup_time = "";
                    tripresults[i].pickuptime = "";
                  }

                  if (element.actual_pickup_time != "") {
                    var actual_pickup_time = new Date(
                      element.actual_pickup_time
                    );
                    tripresults[i].actual_pickup_time = common.convert_timezone(
                      element.actual_pickup_time
                    );
                  } else {
                    tripresults[i].actual_pickup_time = "";
                  }

                  if (element.drop_time != "") {
                    var drop_time = new Date(element.drop_time);
                    tripresults[i].drop_time = common.convert_timezone(
                      element.drop_time
                    );
                    tripresults[i].droptime = common.convert_timezone(
                      element.drop_time
                    );
                  } else {
                    tripresults[i].drop_time = "";
                    tripresults[i].droptime = "";
                  }

                  i++;
                } catch (err) {
                  console.log(err);
                }
              });

              message.message = req.__("success");
              message.detail = tripresults;
              message.status = 1;
              deferred.resolve(message);
              deferred.makeNodeResolver();
              message = null;
            } else {
              message.detail = [];
              message.message = req.__("no_data");
              message.status = 0;
              deferred.resolve(message);
              deferred.makeNodeResolver();
              message = null;
            }
          });
      } else {
        message.message = req.__("invalid_user_driver");
        message.status = -1;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        message = null;
      }
    });
  }

  return deferred.promise;
};

exports.email_invoice = function (q, req) {
  var deferred = q.defer();

  let inputParams = req.body;

  let message = {
    message: "",
    status: 0,
  };

  //var hostname = req.headers.host;
  var hostname = global.settings.base_url;
  var appRoot = global.settings.docroot;

  var validate_error = validateEmailInvoice(q, inputParams);

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
    var email = inputParams.email;
    apimodel.get_trip_detail(q, trip_id).then(function (tripdetailresults) {
      //console.log('surge_info',tripdetailresults);
      if (tripdetailresults.length > 0) {
        try {
          var fare = tripdetailresults[0].fare;
          var trip_fare = tripdetailresults[0].trip_fare;
          var passenger_discount = tripdetailresults[0].passenger_discount;
          var minutes_fare =
            global.settings.site_currency +
            " " +
            tripdetailresults[0].minutes_fare;
          var waiting_cost =
            global.settings.site_currency +
            " " +
            tripdetailresults[0].waiting_cost;
          var waiting_time = tripdetailresults[0].waiting_time;
          var eveningfare =
            global.settings.site_currency +
            " " +
            tripdetailresults[0].eveningfare;
          var nightfare =
            global.settings.site_currency +
            " " +
            tripdetailresults[0].nightfare;
          var metric = tripdetailresults[0].metric;
          var distance = tripdetailresults[0].distance + " " + metric;
          var pay_mod_id = tripdetailresults[0].pay_mod_id;
          var trip_minutes = tripdetailresults[0].trip_minutes;
          var sub_total =
            global.settings.site_currency + " " + tripdetailresults[0].amt;
          var current_location = tripdetailresults[0].current_location;
          var drop_location = tripdetailresults[0].drop_location;
          var surge_price = tripdetailresults[0].surge_price; // 03 Feb 2020

          switch (pay_mod_id) {
            case 1:
              payment_type = "Cash";
              break;
            case 2:
              payment_type = "Card";
              break;
            case 3:
              payment_type = "Knet";
              break;
            case 6:
              payment_type = "Wallet";
              break;
            default:
              payment_type = "Cash";
              break;
          }

          var txt =
            "<tr><td>" +
            req.__("trip_id") +
            "</td><td> : " +
            trip_id +
            "</td></tr>";
          if (passenger_discount != 0) {
            txt +=
              "<tr><td>" +
              req.__("discount") +
              "</td><td> : " +
              passenger_discount +
              "</td></tr>";
          }
          txt +=
            "<tr><td>" +
            req.__("total_fare") +
            "</td><td> : " +
            fare +
            "</td></tr>";

          var passenger_name = tripdetailresults[0].passenger_name;
          var sitename = global.settings.app_name;
          var siteemail = global.settings.email_id;
          var site_copyrights = global.settings.site_copyrights;
          var map_url = check_map_image(appRoot, trip_id, hostname);
          if (req.language == "en") {
            var template_url =
              appRoot + "/public/emailtemplate/tripinvoice-mail.html";
            var eveningLabel = "Evening Fare";
            var nightLabel = "Night Fare";
            var surgeLabel = "Surge Price";
          } else {
            var template_url =
              appRoot +
              "/public/emailtemplate/" +
              req.language +
              "/tripinvoice-mail-" +
              req.language +
              ".html";
            var eveningLabel = "أجرة المساء";
            var nightLabel = "ليلة الأجرة";
            var surgeLabel = "زيادة السعر";
          }

          var eveningfare_html = "";
          if (tripdetailresults[0].eveningfare != 0) {
            eveningfare_html +=
              '<tr><td><p style="font:normal 15px/18px arial;margin:0;color:#333">' +
              eveningLabel +
              '</p></td><td><p style="font:normal 14px/18px arial;margin:0;color:#000">' +
              global.settings.site_currency +
              " " +
              eveningfare +
              "</p></td></tr>";
          }

          var nightfare_html = "";
          if (tripdetailresults[0].nightfare != 0) {
            nightfare_html +=
              '<tr><td><p style="font:normal 15px/18px arial;margin:0;color:#333">' +
              nightLabel +
              '</p></td><td><p style="font:normal 14px/18px arial;margin:0;color:#000">' +
              global.settings.site_currency +
              " " +
              nightfare +
              "</p></td></tr>";
          }

          var surgefare_html = "";
          if (surge_price != 0) {
            surgefare_html +=
              '<tr><td><p style="font:normal 15px/18px arial;margin:0;color:#333">' +
              surgeLabel +
              '</p></td><td><p style="font:normal 14px/18px arial;margin:0;color:#000">' +
              global.settings.site_currency +
              " " +
              surge_price +
              "</p></td></tr>";
          }

          var contents = fs.readFileSync(template_url).toString();
          var search = [
            "##USERNAME##",
            "##SITENAME##",
            "##SITEURL##",
            "##MAPURL##",
            "##SITEEMAIL##",
            "##COPYRIGHTS##",
            "##TOTALFARE##",
            "##PAYMODE##",
            "##DISTANCE##",
            "##TRIPDURATION##",
            "##MINUTESFARE##",
            "##WAITINGCOST##",
            "##WAITINGTIME##",
            "##EVENINGFARE##",
            "##NIGHTFARE##",
            "##SURGEFARE##",
            "##SUBTOTAL##",
            "##PICKUPLOCATION##",
            "##DROPLOCATION##",
          ];
          var replacement = [
            passenger_name,
            sitename,
            hostname,
            map_url,
            siteemail,
            site_copyrights,
            sub_total,
            payment_type,
            distance,
            trip_minutes,
            minutes_fare,
            waiting_cost,
            waiting_time,
            eveningfare_html,
            nightfare_html,
            surgefare_html,
            sub_total,
            current_location,
            drop_location,
          ];

          String.prototype.replaceArray = function (find, replace) {
            var replaceString = this;
            for (var i = 0; i < find.length; i++) {
              replaceString = replaceString.replace(
                new RegExp(find[i], "g"),
                replace[i]
              );
            }
            return replaceString;
          };
          var replaced = contents.replaceArray(search, replacement);
          console.error("contents : ", contents);
          mailer.sendEmail(email, req.__("trip_invoice"), replaced);

          message.message = req.__("invoice_sent_success");
          message.status = 1;
          deferred.resolve(message);
          deferred.makeNodeResolver();
          message = null;
        } catch (err) {
          console.log(err);
          message.message = req.__("invalid_trip");
          message.status = -1;
          deferred.resolve(message);
          deferred.makeNodeResolver();
          message = null;
        }
      } else {
        message.message = req.__("invalid_trip");
        message.status = -1;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        message = null;
      }

      /**/

      //
    });
  }

  return deferred.promise;
};

function validateEmailInvoice(q, input) {
  var constraints = {
    trip_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    email: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function validateBookingList(q, input) {
  var constraints = {
    passenger_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function validateTripDetail(q, input) {
  var constraints = {
    trip_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function convsecstoformat(secs) {
  if (secs >= 0) {
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
  } else {
    return "00:00:00";
  }
}

function zeropadding(a) {
  h = a < 10 ? "0" + a : a;

  return h;
}

// function get_payment_type(payment_type)
// {
// 	var payment_type_msg ='';
// 	switch(payment_type)
// 	{
// 		case 1:
// 		payment_type_msg = req.__('cash_label');
// 		break;
// 		case 2:
// 		payment_type_msg = req.__('card_label');
// 		break;
// 		case 3:
// 		payment_type_msg = req.__('knet_label');
// 		break;
// 		case 6:
// 		payment_type_msg = req.__('wallet_label');
// 		break;
// 		default:
// 		payment_type_msg = req.__('cash_label');
// 		break;
// 	}

// 	return payment_type_msg;
// }
function get_travel_msg(req, travel_status, driver_reply) {
  var travel_msg = "";
  try {
    switch (parseInt(travel_status)) {
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
        if (driver_reply == "A") travel_msg = req.__("trip_confirmed_label");
        break;

      case 0:
        travel_msg = req.__("dispatcher_confirmed");
        break;

      default:
        travel_msg = req.__("yet_assigned_label");
        break;
    }
  } catch (err) {
    console.log(err);
  }

  return travel_msg;
}

function get_payment_message(
  req,
  payment_type,
  wallet_amount_used,
  pending_amt,
  advance_payment,
  driver_edit_status,
  add_amt = ""
) {
  //console.log(payment_type,wallet_amount_used,pending_amt,advance_payment,driver_edit_status,add_amt);
  var payment_type_msg = "";
  switch (parseInt(payment_type)) {
    case 1:
      try {
        payment_type_msg = req.__("cash_label");
        if (wallet_amount_used > 0)
          payment_type_msg = req.__("wallet_cash_label");

        if (pending_amt > 0) {
          if (driver_edit_status == 1) {
            payment_type_msg = req.__("pending_label");
          } else {
            payment_type_msg = req.__("fixed_label");
          }
        }

        if (add_amt != "" && add_amt != 0) {
          payment_type_msg = req.__("fixed_label");
        }
      } catch (err) {
        console.log(err);
      }

      break;

    case 2:
      payment_type_msg = req.__("card_label");
      if (wallet_amount_used > 0)
        payment_type_msg = req.__("wallet_card_label");

      if (pending_amt > 0) {
        if (driver_edit_status == 1) {
          payment_type_msg = req.__("pending_label");
        } else {
          payment_type_msg = req.__("fixed_label");
        }
      }

      if (add_amt != "" && add_amt != 0) {
        payment_type_msg = req.__("fixed_label");
      }

      break;

    case 3:
      payment_type_msg = req.__("knet_label");

      if (wallet_amount_used > 0)
        payment_type_msg = req.__("wallet_knet_label");

      if (pending_amt > 0) {
        if (driver_edit_status == 1) {
          payment_type_msg = req.__("pending_label");
        } else {
          payment_type_msg = req.__("fixed_label");
        }
      }

      if (add_amt != "" && add_amt != 0) {
        payment_type_msg = req.__("fixed_label");
      }

      break;

    case 6:
      payment_type_msg = req.__("wallet_label");
      // if(advance_payment > 0)
      // payment_type_msg = req.__('advance_label');

      if (add_amt != "" && add_amt != 0) {
        payment_type_msg = req.__("fixed_label");
      }
      break;
  }
  return payment_type_msg;
}

function get_passenger_profile(appRoot, profile, hostname) {
  try {
    if (
      fs.existsSync(appRoot + "/" + "public/uploads/passenger/" + profile) &&
      profile != ""
    ) {
      return hostname + "/" + "public/uploads/passenger/" + profile;
    } else {
      return hostname + "/" + config.NO_IMAGE;
    }
  } catch (ex) {
    console.log("error", ex);
  }
}

function get_driver_profile(appRoot, profile, hostname) {
  try {
    if (
      fs.existsSync(appRoot + "/" + "public/uploads/driver_image/" + profile) &&
      profile != ""
    ) {
      return hostname + "/" + "public/uploads/driver_image/" + profile;
    } else {
      return hostname + "/" + config.NO_IMAGE;
    }
  } catch (ex) {
    console.log("error", ex);
  }
}

function get_model_image(appRoot, profile, hostname) {
  try {
    if (
      fs.existsSync(appRoot + "/" + "public/uploads/model_image/" + profile) &&
      profile != ""
    ) {
      return hostname + "/" + "public/uploads/model_image/" + profile;
    } else {
      return hostname + "/" + config.NO_IMAGE;
    }
  } catch (ex) {
    console.log("error", ex);
  }
}

function check_map_image(appRoot, trip_id, hostname) {
  try {
    if (
      fs.existsSync(
        appRoot + "/" + "public/uploads/static_maps/" + trip_id + ".png"
      ) &&
      trip_id != ""
    ) {
      return hostname + "/" + "public/uploads/static_maps/" + trip_id + ".png";
    } else {
      return hostname + "/" + config.NO_MAP_IMAGE;
    }
  } catch (ex) {
    console.log("error", ex);
  }
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

// Sasidharan May 9 2025
function model_image_exists(hostname, appRoot, val) {
  try {
    if (fs.existsSync(appRoot + "/" + config.MODEL_IMGPATH + val)) {
      return hostname + "/" + config.MODEL_IMGPATH + val;
    } else {
      return hostname + "/" + config.NO_IMAGE;
    }
  } catch (ex) {
    console.log("error", ex);
  }
}
