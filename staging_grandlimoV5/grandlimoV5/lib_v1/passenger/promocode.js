var apimodel = require("../../models/passapimodel_v1");
var favicon = require("../../config/favicon.json");
var config = require("../../config/common_config.json");
var q = require("q");
var appRoot = require("app-root-path");
var validator = require("validator");
var fs = require("fs");
var validate = require("validate.js");
var dateFormat = require("dateformat");
var md5 = require("md5");
var time = require("time");
//var i18n = require('i18n');
var t = require("../../config/table_config.json");
var uniqid = require("uniqid");
var randomstring = require("randomstring");
var dateformatter = require("date-format-php");
var urlencode = require("urlencode");
var giftCard = require("../giftcard");

var common = require("../../lib_v1/common.js");

/* Sasidharan july 13 2022 added async */
exports.added_promocode_list = async function (q, req) {
  let inputParams = req.body;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  var hostname = global.settings.base_url;

  var validate_error = ValidateAddedList(q, inputParams);

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
      var phone = inputParams.phone;

      //apimodel.get_added_promocodes(q,passenger_id).then(function(promoresults){

      /* Sasidharan july 13 2022 */
      let passengerDetails = await apimodel.getPassengerRegistrationDate(
        passenger_id
      );
      if (typeof passengerDetails[0] != "undefined") {
        passengerDetails = passengerDetails[0];
      } else {
        passengerDetails = {};
      }

      /* Sasidharan july 13 2022 passed to this function */
      apimodel
        .get_promocodes_list(q, passenger_id, passengerDetails)
        .then(function (promoresults) {
          //console.log('promoresults',promoresults);
          if (promoresults.length > 0) {
            i = 0;
            var promocodelist = [];
            promoresults.forEach(function (element) {
              var current_time = new Date();
              var expiry_date = element.expiry_date;
              var promo_limit = element.promo_limit;
              var total_applied = element.total_applied;

              //console.log('currenttime',current_time);

              if (typeof element.customer_number == "undefined") {
                element.customer_number = phone;
              }
              //console.log('element.customer_number',element.customer_number);
              if (
                total_applied >= promo_limit ||
                expiry_date.getTime() < current_time.getTime()
              ) {
                promoresults[i].expiry_status = 1;
              } else {
                promoresults[i].expiry_status = 0;
                if (
                  typeof element.customer_number != "undefined" &&
                  element.customer_number == phone
                ) {
                  promocodelist.push({
                    _id: element._id,
                    promo_code: element.promo_code,
                    passenger_commission: element.passenger_commission,
                    promocode_title: element.promocode_title,
                    promocode_title_ar: element.promocode_title_ar,
                    promocode_description: element.promocode_description,
                    promocode_description_ar: element.promocode_description_ar,
                    expiry_date: element.expiry_date,
                    total_used: element.total_used,
                    total_applied: element.total_applied,
                    promo_limit: element.promo_limit,
                    expiry_status: 0,
                  });
                }
              }

              delete promoresults[i]._id;

              i++;
            });

            /* Sasidharan july 15 2022 */
            apimodel
              .check_already_promocode_added_new(q, passenger_id)
              .then(function (addpromoresults) {
                message.message = req.__("success");
                message.detail = promocodelist;
                message.applied_promo_details = addpromoresults;
                message.status = 1;
                deferred.resolve(message);
                deferred.makeNodeResolver();
                message = null;
              });
          } else {
            message.message = req.__("no_data");
            message.status = -1;
            deferred.resolve(message);
            deferred.makeNodeResolver();
            message = null;
          }
        });
    } catch (err) {
      console.log(err);
    }
  }

  return deferred.promise;
};

exports.add_promocode = function (q, req) {
  let inputParams = req.body;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  var hostname = global.settings.base_url;

  var validate_error = ValidateAddPromocode(q, inputParams);

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
      var promo_code = inputParams.promo_code;
      var phone_number = inputParams.phone_number;
      var is_menu_call = inputParams.is_menu_call
        ? inputParams.is_menu_call
        : 0;

      apimodel
        .passenger_profile_by_id(q, passenger_id)
        .then(function (profile_results) {
          //console.log('add00001');
          if (profile_results.length > 0) {
            //console.log('add00002');
            validateGiftCard(q, promo_code).then(function (giftCardResponse) {
              console.log("giftCardResponse", giftCardResponse);

              /* Sasidharan july 15 2022 */
              // apimodel.check_already_promocode_added(q, passenger_id).then(function (addpromoresults) {

              /* Sasidharan july 15 2022 */
              let addpromoresults = [];

              if (addpromoresults.length == 0 || giftCardResponse == 1) {
                //console.log('add00003');

                /* Sasidharan june 20 2022 added passenger_result to check promocode */

                check_promocode(
                  q,
                  promo_code,
                  phone_number,
                  passenger_id,
                  giftCardResponse,
                  profile_results[0]
                ).then(function (checkpromo_results) {
                  //console.log("savee001",checkpromo_results);
                  if (giftCardResponse == 0) {
                    message.message = req.__("invalid_giftcard");
                    message.status = 3;
                    deferred.resolve(message);
                    deferred.makeNodeResolver();
                    message = null;
                  } else if (giftCardResponse == 1 && is_menu_call == 1) {
                    message.message = req.__("gift_card_not_added");
                    message.status = 3;
                    deferred.resolve(message);
                    deferred.makeNodeResolver();
                    message = null;
                  } else if (checkpromo_results.status == 3) {
                    message.message = req.__("invalid_promocode");
                    message.status = 3;
                    deferred.resolve(message);
                    deferred.makeNodeResolver();
                    message = null;
                  } else if (checkpromo_results.status == 4) {
                    message.message = req.__("promo_code_expired");
                    message.status = 3;
                    deferred.resolve(message);
                    deferred.makeNodeResolver();
                    message = null;
                  } else if (checkpromo_results.status == 2) {
                    message.message = req.__("promo_code_limit_exceed");
                    message.status = 3;
                    deferred.resolve(message);
                    deferred.makeNodeResolver();
                    message = null;
                  } else if (checkpromo_results.status == 0) {
                    message.message = req.__("invalid_promocode");
                    message.status = 3;
                    deferred.resolve(message);
                    deferred.makeNodeResolver();
                    message = null;
                  } else {
                    //console.log('add00004');
                    if (is_menu_call == 0 && giftCardResponse == 1) {
                      var insert_array = {
                        passenger_id: parseInt(passenger_id),
                        gift_card_number: promo_code,
                        status_description: "Added from add_promocode - home",
                        status: parseInt(1),
                        created_date: new Date(),
                      };

                      apimodel
                        .insert_gift_card_logs(q, insert_array)
                        .then(function (insertresults) {
                          message.message = req.__("gift_applied_successfully");
                          message.detail = [];
                          message.status = 1;
                          deferred.resolve(message);
                          deferred.makeNodeResolver();
                          message = null;
                        });
                    } else {
                      var promocode_id = checkpromo_results.promocode_id;
                      apimodel
                        .get_auto_id(q, t.MDB_PASSENGERS_ADDED_PROMO)
                        .then(function (autoresults) {
                          if (autoresults.length > 0) {
                            try {
                              //console.log('add00005');
                              var inc_id = autoresults[0]._id + 1;

                              var insert_array = {
                                _id: parseInt(inc_id),
                                passenger_id: parseInt(passenger_id),
                                promocode_id: parseInt(promocode_id),
                                promo_code: promo_code,
                                created_date: new Date(),
                              };

                              apimodel
                                .insert_passenger_added_promocode(
                                  q,
                                  insert_array
                                )
                                .then(async function (insertresults) {
                                  let promo_discount_percentage =
                                    await apimodel.get_discount_percentage(
                                      promo_code
                                    );

                                  message.message = req.__(
                                    "promo_applied_successfully"
                                  );
                                  message.promo_discount_percentage =
                                    promo_discount_percentage;
                                  message.detail = [];
                                  message.status = 1;
                                  deferred.resolve(message);
                                  deferred.makeNodeResolver();
                                  message = null;
                                });
                            } catch (err) {
                              console.log(err);
                            }
                          }
                        });
                    }
                  }
                });
                //});
              } else {
                let current_promocode = "";
                if (
                  addpromoresults.length > 0 &&
                  addpromoresults[0] &&
                  addpromoresults[0].promo_code
                )
                  current_promocode = addpromoresults[0].promo_code;

                message.message = req
                  .__("promo_exist_add")
                  .replace("##PROMO##", current_promocode);
                message.details = [];
                if (is_menu_call == 0 && current_promocode == promo_code) {
                  message.status = 2;
                } else {
                  message.status = -1;
                }
                deferred.resolve(message);
                deferred.makeNodeResolver();
                message = null;
              }
            });
            /* Sasidharan july 15 2022 */
            // });
          } else {
            message.message = req.__("invalid_user");
            message.status = -1;
            deferred.resolve(message);
            deferred.makeNodeResolver();
            message = null;
          }
        });
    } catch (err) {
      console.log(err);
    }
  }

  return deferred.promise;
};

function ValidateAddedList(q, input) {
  var constraints = {
    passenger_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function ValidateAddPromocode(q, input) {
  var constraints = {
    passenger_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    promo_code: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    phone_number: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function recharge_type_msg(req, recharge_type) {
  var recharge_type_msg = "";

  switch (recharge_type) {
    case 1:
      recharge_type_msg = req.__("manual_pay");
      break;
    case 2:
      recharge_type_msg = req.__("credit_pay");
      break;
    case 3:
      recharge_type_msg = req.__("pending_pay");
      break;
    case 4:
      recharge_type_msg = req.__("trip_payment");
      break;
    case 5:
      recharge_type_msg = req.__("trip_pending_payment");
      break;
    case 6:
      recharge_type_msg = req.__("pending_repayment");
      break;
    case 7:
      recharge_type_msg = req.__("dispatcher_alteration");
      break;
    case 8:
      recharge_type_msg = req.__("knet_payment");
      break;
    default:
      recharge_type_msg = req.__("manual_pay");
      break;
  }

  return recharge_type_msg;
}

/* Sasidharan june 20 2022 */
function check_promocode(
  q,
  promocode,
  phone,
  passenger_id,
  giftCardResponse,
  passenger_details = {}
) {
  var deferred = q.defer();

  var details = {};
  try {
    if (promocode != "" && promocode != undefined && giftCardResponse == -1) {
      /* Sasidharan july 16 2022 added async */
      apimodel
        .promocode_details(q, promocode)
        .then(async function (promo_results) {
          /* Sasidharan nov 19 2022 */
          if (
            promo_results.length > 0 &&
            typeof promo_results[0].corporate_promocode != "undefined" &&
            promo_results[0].corporate_promocode != "" &&
            promo_results[0].corporate_promocode != 0
          ) {
            /* Check if the promocode already in use */
            let usedByAnathorUser =
              await apimodel.checkIfPromocodeUsedByAnathorUser(
                promocode,
                passenger_id
              );
            if (usedByAnathorUser) {
              details.status = 0;
              deferred.resolve(details);
              deferred.makeNodeResolver();
              details = null;
            }
          }

          /* Sasidharan june 20 2022 */
          if (
            promo_results.length > 0 &&
            typeof promo_results[0].register_promocode != "undefined" &&
            typeof passenger_details.created_date != "undefined" &&
            promo_results[0].register_promocode
          ) {
            var promocode_details = {};
            promocode_details = promo_results[0];

            var promo_id = promocode_details._id;
            var promo_start = promocode_details.start_date;
            var promo_end = promocode_details.expire_date;
            var total_applied = promocode_details.total_applied;
            var promo_limit = promocode_details.promo_limit;
            var current_date = new Date();
            var current_time = calcTime("Kuwait", "+3");
            var now = new time.Date();
            var promo_starttime = promo_start.getTime();
            var promo_endtime = promo_end.getTime();

            /* Sasidharan june 20 2022 */
            /* Check with passenger registered date which means created date */

            let register_promocode_date =
              global.settings.register_promocode.getTime();
            let passenger_registered_date =
              passenger_details.created_date.getTime();

            if (passenger_registered_date < register_promocode_date) {
              details.status = 4;
              deferred.resolve(details);
              deferred.makeNodeResolver();
              details = null;
            } else {
              if (total_applied > promo_limit) {
                details.status = 2;
                deferred.resolve(details);
                deferred.makeNodeResolver();
                details = null;
              } else {
                /* Sasidharan july 16 2022 */
                let applyUserLimit =
                  typeof promo_results[0].apply_user_limit != "undefined"
                    ? promo_results[0].apply_user_limit
                    : 0;
                let userLimit =
                  typeof promo_results[0].maximum_allowed_limit != "undefined"
                    ? promo_results[0].maximum_allowed_limit
                    : 0;

                if (applyUserLimit && userLimit > 0) {
                  let totalCount = await apimodel.getPromocodeUsedCount(
                    promocode,
                    passenger_id
                  );
                  if (totalCount >= userLimit) {
                    details.status = 2;
                    deferred.resolve(details);
                    deferred.makeNodeResolver();
                    details = null;
                  } else {
                    details.status = 1;
                    details.promocode_id = promo_id;
                    deferred.resolve(details);
                    deferred.makeNodeResolver();
                    details = null;
                  }
                } else {
                  details.status = 1;
                  details.promocode_id = promo_id;
                  deferred.resolve(details);
                  deferred.makeNodeResolver();
                  details = null;
                }
              }
            }
          } else {
            console.log("check promo check0001");
            /* Sasidharan july 16 2022 added async */
            apimodel
              .promocode_details_by_phone(q, promocode, phone)
              .then(async function (promo_results2) {
                // console.log("check promo check0002");

                // console.log(promo_results2.length);
                // console.log(promo_results.length);
                if (promo_results2.length > 0 || promo_results.length > 0) {
                  var promocode_details = {};
                  if (promo_results.length > 0) {
                    promocode_details = promo_results[0];
                  }

                  if (promo_results2.length > 0) {
                    promocode_details = promo_results2[0];
                  }

                  var promo_id = promocode_details._id;
                  var promo_start = promocode_details.start_date;
                  var promo_end = promocode_details.expire_date;
                  var total_applied = promocode_details.total_applied;
                  var promo_limit = promocode_details.promo_limit;
                  var current_date = new Date();
                  //var current_time =  current_date.getTime();
                  var current_time = calcTime("Kuwait", "+3");
                  var now = new time.Date();
                  //console.log("current_time1",current_time);
                  //console.log("current_time2",current_date);
                  //console.log("promo_start",promo_start);
                  //console.log("Bombay",promocode_details);
                  var promo_starttime = promo_start.getTime();
                  var promo_endtime = promo_end.getTime();

                  if (promo_starttime > current_time) {
                    details.status = 3;
                    deferred.resolve(details);
                    deferred.makeNodeResolver();
                    details = null;
                  } else if (promo_endtime < current_time) {
                    details.status = 4;
                    deferred.resolve(details);
                    deferred.makeNodeResolver();
                    details = null;
                  } else {
                    if (total_applied > promo_limit) {
                      details.status = 2;
                      deferred.resolve(details);
                      deferred.makeNodeResolver();
                      details = null;
                    } else {
                      /* Sasidharan july 16 2022 */
                      let applyUserLimit =
                        typeof promo_results[0].apply_user_limit != "undefined"
                          ? promo_results[0].apply_user_limit
                          : 0;
                      let userLimit =
                        typeof promo_results[0].maximum_allowed_limit !=
                        "undefined"
                          ? promo_results[0].maximum_allowed_limit
                          : 0;

                      if (applyUserLimit && userLimit > 0) {
                        let totalCount = await apimodel.getPromocodeUsedCount(
                          promocode,
                          passenger_id
                        );
                        if (totalCount >= userLimit) {
                          details.status = 2;
                          deferred.resolve(details);
                          deferred.makeNodeResolver();
                          details = null;
                        } else {
                          details.status = 1;
                          details.promocode_id = promo_id;
                          deferred.resolve(details);
                          deferred.makeNodeResolver();
                          details = null;
                        }
                      } else {
                        details.status = 1;
                        details.promocode_id = promo_id;
                        deferred.resolve(details);
                        deferred.makeNodeResolver();
                        details = null;
                      }
                    }
                  }
                } else {
                  details.status = 0;
                  deferred.resolve(details);
                  deferred.makeNodeResolver();
                  details = null;
                }
              });
          }
        });
    } else {
      details.status = 1;
      deferred.resolve(details);
      deferred.makeNodeResolver();
      details = null;
    }
  } catch (err) {
    console.log(err);
  }

  return deferred.promise;
}

function getCurrentDate(timezone, date_format) {
  var now = new time.Date();
  now.setTimezone(timezone);
  return dateFormat(new Date(now.toLocaleDateString()), "yyyy-mm-dd");
}

function validateGiftCard(q, promocode) {
  var deferred = q.defer();
  if (global.settings.gift_card_enable == 1) {
    giftCard
      .getCardBalance(q, { promocode: promocode })
      .then(function (giftCardResponse) {
        try {
          console.log("gift card response", giftCardResponse.data);

          if (giftCardResponse && giftCardResponse.data) {
            let response = giftCardResponse.data;
            console.log("gift card response", response);
            if (response.code == "200" && response.data) {
              if (response.data.remaining_value > 0) {
                deferred.resolve(1);
                deferred.makeNodeResolver();
                message = null;
              } else {
                deferred.resolve(0);
                deferred.makeNodeResolver();
                message = null;
              }
            } else {
              deferred.resolve(-1);
              deferred.makeNodeResolver();
              message = null;
            }
          } else {
            deferred.resolve(-1);
            deferred.makeNodeResolver();
            message = null;
          }
        } catch (err) {
          console.log("gift card error", err);
        }
      })
      .catch(function (error) {
        console.log("giftcard api error ", error.response.data);
        deferred.resolve(-1);
        deferred.makeNodeResolver();
        message = null;
      });
  } else {
    deferred.resolve(-1);
    deferred.makeNodeResolver();
    message = null;
  }

  return deferred.promise;
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

function calcTime(city, offset) {
  // create Date object for current location
  var d = new Date();

  // convert to msec
  // subtract local time zone offset
  // get UTC time in msec
  var utc = d.getTime() + d.getTimezoneOffset() * 60000;

  // create new Date object for different city
  // using supplied offset
  var nd = new Date(utc + 3600000 * offset);

  // return time as a string
  return nd.getTime();
}
