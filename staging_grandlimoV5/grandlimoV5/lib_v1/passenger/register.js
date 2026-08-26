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
var common = require("../../lib_v1/common.js");
var urlencode = require("urlencode");
var shared = require("../../utils/shared");
var tapPaymentGateway = require("../../utils/tapPaymentGateway");
var hesabe = require("../../modules/hesabe/hesabe");

/* Sasidharan sep 30 2024 */
var { encrypt, generateToken } = require("../../utils/encryption");

exports.passenger_account_registration_step1 = function (q, req) {
  let inputParams = req.body;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
    showOTPOnApp: 0,
  };

  var validate_error = ValidateSignupStep1(q, inputParams);

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
    var device_id = inputParams.deviceid;
    var device_token = inputParams.devicetoken;
    var device_type = inputParams.device_type;
    var country_code = inputParams.country_code;
    var phone = inputParams.phone;
    var is_email_login = inputParams.is_email_login
      ? inputParams.is_email_login
      : 0;
    var email = inputParams.email ? inputParams.email : "";

    if (is_email_login == 1) {
      apimodel.passenger_phone_exists(q, phone).then(function (phone_exists) {
        if (phone_exists == 0) {
          apimodel
            .update_passenger_phone_by_email(q, email, phone)
            .then(function (update_result) {
              if (!update_result.success) {
                message.message = "Email id not found!";
                message.status = -1;
                deferred.resolve(message);
                deferred.makeNodeResolver();
                message = null;
                return;
              }

              let passenger_id = update_result.passenger._id;

              shared
                .oldVersion_getPassengerId(passenger_id)
                .then(function (passengerInfo) {
                  if (!passengerInfo || !passengerInfo.customerTapPaymentId) {
                    message.message = "Failed to generate Tap customer Id.";
                    message.detail = {};
                    message.status = -1;
                    deferred.resolve(message);
                    deferred.makeNodeResolver();
                    message = null;
                    return;
                  }
                  check_passenger_phone(q, phone).then(function (
                    status_results
                  ) {
                    var status_result = status_results.status;

                    /* Sasidharan Sep 03 2024 */
                    if (status_results.showOTPOnApp) {
                      var showOTPOnApp = status_results.showOTPOnApp;
                      message.showOTPOnApp = showOTPOnApp;
                    }

                    if (status_result == "PB") {
                      message.message = req.__("not_allowed_register");
                      message.status = -1;
                      deferred.resolve(message);
                      deferred.makeNodeResolver();
                      message = null;
                    } else if (status_result == "A" || status_result == "I") {
                      var otp = randomstring.generate({
                        length: 4,
                        charset: "numeric",
                      });
                      let update_array = {
                        otp: otp,
                        device_id: device_id,
                        device_token: device_token,
                        device_type: parseInt(device_type),
                        country_code: country_code,
                        customerTapPaymentId:
                          passengerInfo.customerTapPaymentId,
                      };

                      apimodel
                        .update_passenger_by_phone(q, phone, update_array)
                        .then(function (status_result) {
                          if (device_type == 1) {
                            //sms send
                            var replace_array = {
                              sitename: global.settings.app_name,
                              otp: otp,
                            };

                            common
                              .send_sms(
                                q,
                                phone,
                                13,
                                replace_array,
                                country_code
                              )
                              .then(function (checkresults) {});
                          } else {
                            var replace_array = {
                              sitename: global.settings.app_name,
                              otp: otp,
                            };
                            common
                              .send_sms(
                                q,
                                phone,
                                23,
                                replace_array,
                                country_code
                              )
                              .then(function (checkresults) {});
                          }
                          message.message = req.__("verification_code_sent");
                          message.otp = otp;
                          message.status = 3;
                          deferred.resolve(message);
                          deferred.makeNodeResolver();
                          message = null;
                        });
                    }
                  });
                });
            });
        } else {
          apimodel
            .get_passenger_email_by_phone(q, phone)
            .then(function (email_result) {
              if (email_result.length > 0) {
                let dbEmail = email_result[0].email;
                let passenger_id = email_result[0]._id;

                if (dbEmail.toLowerCase() === inputParams.email.toLowerCase()) {
                  check_passenger_phone(q, phone).then(function (
                    status_results
                  ) {
                    var status_result = status_results.status;

                    /* Sasidharan Sep 03 2024 */
                    if (status_results.showOTPOnApp) {
                      var showOTPOnApp = status_results.showOTPOnApp;
                      message.showOTPOnApp = showOTPOnApp;
                    }

                    if (status_result == "PB") {
                      message.message = req.__("not_allowed_register");
                      message.status = -1;
                      deferred.resolve(message);
                      deferred.makeNodeResolver();
                      message = null;
                    } else if (status_result == "A" || status_result == "I") {
                      var otp = randomstring.generate({
                        length: 4,
                        charset: "numeric",
                      });

                      shared
                        .oldVersion_getPassengerId(passenger_id)
                        .then(function (passengerInfo) {
                          if (
                            !passengerInfo ||
                            !passengerInfo.customerTapPaymentId
                          ) {
                            message.message =
                              "Failed to generate Tap customer Id.";
                            message.detail = {};
                            message.status = -1;
                            deferred.resolve(message);
                            deferred.makeNodeResolver();
                            message = null;
                            return;
                          }
                          let customerTapPaymentId =
                            passengerInfo.customerTapPaymentId;

                          shared
                            .getHesabeCustomerPaymentId(passenger_id)
                            .then(function (passengerInfos) {
                              if (
                                !passengerInfos ||
                                !passengerInfos.hesabeCustomerPaymentId
                              ) {
                                message.message =
                                  "Failed to generate Hesabe customer Id.";
                                message.detail = {};
                                message.status = -1;
                                deferred.resolve(message);
                                deferred.makeNodeResolver();
                                message = null;
                                return;
                              }

                              let hesabeCustomerPaymentId =
                                passengerInfos.hesabeCustomerPaymentId;

                              let update_array = {
                                otp: otp,
                                device_id: device_id,
                                device_token: device_token,
                                device_type: parseInt(device_type),
                                country_code: country_code,
                                customerTapPaymentId: customerTapPaymentId,
                                hesabeCustomerPaymentId:
                                  hesabeCustomerPaymentId,
                              };

                              apimodel
                                .update_passenger_by_phone(
                                  q,
                                  phone,
                                  update_array
                                )
                                .then(function (status_result) {
                                  if (device_type == 1) {
                                    //sms send
                                    var replace_array = {
                                      sitename: global.settings.app_name,
                                      otp: otp,
                                    };

                                    common
                                      .send_sms(
                                        q,
                                        phone,
                                        13,
                                        replace_array,
                                        country_code
                                      )
                                      .then(function (checkresults) {});
                                  } else {
                                    var replace_array = {
                                      sitename: global.settings.app_name,
                                      otp: otp,
                                    };
                                    common
                                      .send_sms(
                                        q,
                                        phone,
                                        23,
                                        replace_array,
                                        country_code
                                      )
                                      .then(function (checkresults) {});
                                  }

                                  message.message = req.__(
                                    "verification_code_sent"
                                  );
                                  message.otp = otp;
                                  message.customerTapPaymentId =
                                    customerTapPaymentId;
                                  message.hesabeCustomerPaymentId =
                                    hesabeCustomerPaymentId;
                                  message.status = 3;
                                  message.deferred.resolve(message);
                                  deferred.makeNodeResolver();
                                  message = null;
                                });
                            });
                        });
                    }
                  });
                } else {
                  message.message = `phone number not assigned to this ${inputParams.email} email id`;
                  message.status = -1;
                  deferred.resolve(message);
                  deferred.makeNodeResolver();
                  message = null;
                  return;
                }
              } else {
                message.message = "Email id not found!";
                message.status = -1;
                deferred.resolve(message);
                deferred.makeNodeResolver();
                message = null;
                return;
              }
            });
        }
      });
    } else {
      check_passenger_phone(q, phone).then(function (status_results) {
        var status_result = status_results.status;
        var passenger_id = status_results.passenger_id;

        /* Sasidharan Sep 03 2024 */
        if (status_results.showOTPOnApp) {
          var showOTPOnApp = status_results.showOTPOnApp;
          message.showOTPOnApp = showOTPOnApp;
        }
        console.error("status_result : ", status_result);
        if (status_result == "PB") {
          message.message = req.__("not_allowed_register");
          message.status = -1;
          deferred.resolve(message);
          deferred.makeNodeResolver();
          message = null;
        } else if (status_result == "A") {
          var otp = randomstring.generate({
            length: 4,
            charset: "numeric",
          });

          shared
            .oldVersion_getPassengerId(passenger_id)
            .then(function (passengerInfo) {
              if (!passengerInfo || !passengerInfo.customerTapPaymentId) {
                message.message = "Failed to generate Tap customer Id.";
                message.detail = {};
                message.status = -1;
                deferred.resolve(message);
                deferred.makeNodeResolver();
                message = null;
                return;
              }
              shared
                .getHesabeCustomerPaymentId(passenger_id)
                .then(function (passengerInfos) {
                  if (
                    !passengerInfos ||
                    !passengerInfos.hesabeCustomerPaymentId
                  ) {
                    message.message = "Failed to generate Hesabe customer Id.";
                    message.detail = {};
                    message.status = -1;
                    deferred.resolve(message);
                    deferred.makeNodeResolver();
                    message = null;
                    return;
                  }

                  let update_array = {
                    otp: otp,
                    device_id: device_id,
                    device_token: device_token,
                    device_type: parseInt(device_type),
                    country_code: country_code,
                    customerTapPaymentId: passengerInfo.customerTapPaymentId,
                    hesabeCustomerPaymentId:
                      passengerInfos.hesabeCustomerPaymentId,
                  };
                  apimodel
                    .update_passenger_by_phone(q, phone, update_array)
                    .then(function (status_result) {
                      if (device_type == 1) {
                        //sms send
                        var replace_array = {
                          sitename: global.settings.app_name,
                          otp: otp,
                        };

                        common
                          .send_sms(q, phone, 13, replace_array, country_code)
                          .then(function (checkresults) {});
                      } else {
                        var replace_array = {
                          sitename: global.settings.app_name,
                          otp: otp,
                        };
                        common
                          .send_sms(q, phone, 23, replace_array, country_code)
                          .then(function (checkresults) {});
                      }
                      message.message = req.__("verification_code_sent");
                      message.otp = otp; // Customization
                      message.customerTapPaymentId =
                        passengerInfo.customerTapPaymentId;
                      message.hesabeCustomerPaymentId =
                        passengerInfos.hesabeCustomerPaymentId;
                      message.status = 3;
                      deferred.resolve(message);
                      deferred.makeNodeResolver();
                      message = null;
                    });
                });
            });
        } else if (status_result == "I") {
          console.error("entered into here");
          var otp = randomstring.generate({
            length: 4,
            charset: "numeric",
          });

          let update_array = {
            otp: otp,
            device_id: device_id,
            device_token: device_token,
            device_type: parseInt(device_type),
            country_code: country_code,
            customerTapPaymentId: "",
            hesabeCustomerPaymentId: "",
          };
          apimodel
            .update_passenger_by_phone(q, phone, update_array)
            .then(function (status_result) {
              if (device_type == 1) {
                //sms send
                var replace_array = {
                  sitename: global.settings.app_name,
                  otp: otp,
                };

                common
                  .send_sms(q, phone, 13, replace_array, country_code)
                  .then(function (checkresults) {});
              } else {
                var replace_array = {
                  sitename: global.settings.app_name,
                  otp: otp,
                };
                common
                  .send_sms(q, phone, 23, replace_array, country_code)
                  .then(function (checkresults) {});
              }
              message.message = req.__("verification_code_sent");
              message.otp = otp; // Customization
              message.customerTapPaymentId = "";
              message.hesabeCustomerPaymentId = "";
              message.status = 3;
              deferred.resolve(message);
              deferred.makeNodeResolver();
              message = null;
            });
        } else {
          add_passenger(q, inputParams).then(function (status_result) {
            if (status_result.status == 1) {
              message.message = req.__("verification_code_sent");
              message.otp = status_result.otp; // Customization
              message.showOTPOnApp = 0;
              message.customerTapPaymentId = "";
              message.hesabeCustomerPaymentId = "";
              message.status = 2;
              deferred.resolve(message);
              deferred.makeNodeResolver();
              message = null;
            } else {
              message.message = req.__("verification_code_already_sent");
              message.otp = status_result.otp; // Customization
              message.status = 2;
              message.customerTapPaymentId = "";
              message.hesabeCustomerPaymentId = "";
              message.showOTPOnApp = 0;
              deferred.resolve(message);
              deferred.makeNodeResolver();
              message = null;
            }
          });
        }
      });
    }
  }

  return deferred.promise;
};

exports.passenger_email_registration_step1 = function (q, req) {
  let inputParams = req.body;
  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
    details: {},
  };

  var hostname = global.settings.base_url;

  var validate_error = ValidateEmailSignupStep1(q, inputParams);

  if (validate_error !== undefined) {
    if (validate_error[0]) {
      message.message = validate_error[0];
      message.status = -1;
    } else {
      message.message = req.__("validation_error");
      message.status = -1;
    }
    deferred.resolve(message);
    return deferred.promise;
  }

  var email = inputParams.email ? inputParams.email : "";
  var device_id = inputParams.deviceid;
  var device_type = inputParams.device_type;
  var is_apple_login = inputParams.is_apple_login
    ? inputParams.is_apple_login
    : 0;
  var uniqueID = inputParams.uniqueID ? inputParams.uniqueID : "";

  if (is_apple_login == 1) {
    if (email) {
      return apimodel
        .passenger_email_exists(q, email)
        .then(function (email_exists) {
          if (email_exists == 0) {
            return add_email_passenger(q, inputParams).then(function (
              status_result
            ) {
              if (status_result.status == 1) {
                message.status = 1;
                message.message = "Social user created successfully";
              } else {
                message.status = 0;
                message.message = "Something went wrong! Failed to create user";
              }
              deferred.resolve(message);
              return deferred.promise;
            });
          } else {
            return apimodel
              .get_passenger_phone_by_email(q, email)
              .then(function (number_result) {
                if (number_result && number_result.length > 0) {
                  let phone = number_result[0].phone;
                  if (phone) {
                    apimodel
                      .passenger_verified(q, phone)
                      .then(function (verify_results) {
                        if (verify_results.length > 0) {
                          details = verify_results[0];

                          var passenger_profile =
                            verify_results[0].profile_image;
                          var passenger_name = verify_results[0].name;
                          var passenger_email = verify_results[0].email;

                          details.passenger_image = get_passenger_profile(
                            passenger_profile,
                            hostname
                          );

                          let passenger_id = details._id;

                          shared
                            .oldVersion_getPassengerId(passenger_id)
                            .then(function (passengerInfo) {
                              if (
                                !passengerInfo ||
                                !passengerInfo.customerTapPaymentId
                              ) {
                                message.message =
                                  "Failed to generate Tap customer Id.";
                                message.status = -1;
                                deferred.resolve(message);
                                deferred.makeNodeResolver();
                                message = null;
                                return;
                              }
                              let customerTapPaymentId =
                                passengerInfo.customerTapPaymentId;

                              shared
                                .getHesabeCustomerPaymentId(passenger_id)
                                .then(function (passengerInfos) {
                                  if (
                                    !passengerInfos ||
                                    !passengerInfos.hesabeCustomerPaymentId
                                  ) {
                                    message.message =
                                      "Failed to generate Hesabe customer Id.";

                                    message.status = -1;
                                    deferred.resolve(message);
                                    deferred.makeNodeResolver();
                                    message = null;
                                    return;
                                  }

                                  let hesabeCustomerPaymentId =
                                    passengerInfos.hesabeCustomerPaymentId;

                                  var update_array = {
                                    user_status: "A",
                                    customerTapPaymentId: customerTapPaymentId,
                                    hesabeCustomerPaymentId:
                                      hesabeCustomerPaymentId,
                                  };
                                  apimodel
                                    .update_passenger_by_phone(
                                      q,
                                      phone,
                                      update_array
                                    )
                                    .then(function (status_result) {
                                      if (status_result) {
                                        if (
                                          details.phone != "" &&
                                          passenger_name != "" &&
                                          passenger_email != ""
                                        ) {
                                          message.status = 3;
                                          message.message = "User verified";
                                          message.details = details;
                                          message.customerTapPaymentId =
                                            customerTapPaymentId;
                                          message.hesabeCustomerPaymentId =
                                            hesabeCustomerPaymentId;
                                        } else {
                                          message.message =
                                            req.__("invalid_user");
                                          message.status = 1;
                                        }
                                      }
                                      deferred.resolve(message);
                                    });
                                });
                            })
                            .catch(function (err) {
                              console.error("Error updating passenger:", err);
                              message.status = -1;
                              message.message = req.__("update_failed");
                              deferred.resolve(message);
                            });
                        } else {
                          message.message = req.__("invalid_user");
                          message.status = -1;
                          deferred.resolve(message);
                          deferred.makeNodeResolver();
                          message = null;
                        }
                      });
                  } else {
                    message.status = 1;
                    deferred.resolve(message);
                  }
                } else {
                  message.status = 1;
                  deferred.resolve(message);
                }
              });
          }
        })
        .catch(function (err) {
          console.error("Error checking email for Apple login:", err);
          message.status = 0;
          message.message = "Internal Server Error";
          deferred.resolve(message);
          return deferred.promise;
        });
    } else {
      return apimodel
        .get_passenger_by_unique_id(q, uniqueID)
        .then(function (user_result) {
          if (user_result && user_result.length > 0) {
            let phone = user_result[0].phone;
            if (phone) {
              return apimodel
                .passenger_verified(q, phone)
                .then(function (verify_results) {
                  if (verify_results.length > 0) {
                    details = verify_results[0];

                    var passenger_profile = verify_results[0].profile_image;
                    var passenger_name = verify_results[0].name;
                    var passenger_email = verify_results[0].email;

                    details.passenger_image = get_passenger_profile(
                      passenger_profile,
                      hostname
                    );
                    let passenger_id = details._id;

                    shared
                      .oldVersion_getPassengerId(passenger_id)
                      .then(function (passengerInfo) {
                        if (
                          !passengerInfo ||
                          !passengerInfo.customerTapPaymentId
                        ) {
                          message.message =
                            "Failed to generate Tap customer Id.";
                          message.status = -1;
                          deferred.resolve(message);
                          deferred.makeNodeResolver();
                          message = null;
                          return;
                        }
                        let customerTapPaymentId =
                          passengerInfo.customerTapPaymentId;

                        shared
                          .getHesabeCustomerPaymentId(passenger_id)
                          .then(function (passengerInfos) {
                            if (
                              !passengerInfos ||
                              !passengerInfos.hesabeCustomerPaymentId
                            ) {
                              message.message =
                                "Failed to generate Hesabe customer Id.";

                              message.status = -1;
                              deferred.resolve(message);
                              deferred.makeNodeResolver();
                              message = null;
                              return;
                            }

                            let hesabeCustomerPaymentId =
                              passengerInfos.hesabeCustomerPaymentId;

                            var update_array = {
                              user_status: "A",
                              customerTapPaymentId: customerTapPaymentId,
                              hesabeCustomerPaymentId: hesabeCustomerPaymentId,
                            };

                            return apimodel
                              .update_passenger_by_phone(q, phone, update_array)
                              .then(async function (status_result) {
                                if (status_result) {
                                  console.error(
                                    "verify_results[0] : ",
                                    verify_results[0]
                                  );
                                  if (
                                    details.phone != "" &&
                                    passenger_name != "" &&
                                    passenger_email != ""
                                  ) {
                                    let userDetails = {
                                      passengerId: details._id,
                                      name: details.name,
                                    };
                                    let encryptedDetails = encrypt(userDetails);
                                    let token = await generateToken(
                                      encryptedDetails
                                    );

                                    message.status = 3;
                                    message.message = "User verified";
                                    message.details = details;
                                    message.token = token;
                                    message.customerTapPaymentId =
                                      customerTapPaymentId;
                                    message.hesabeCustomerPaymentId =
                                      hesabeCustomerPaymentId;
                                  } else {
                                    message.message = req.__("invalid_user");
                                    message.status = 1;
                                  }
                                }
                                deferred.resolve(message);
                                return deferred.promise;
                              });
                          });
                      })
                      .catch(function (err) {
                        console.error("Error updating passenger:", err);
                        message.status = -1;
                        message.message = req.__("update_failed");
                        deferred.resolve(message);
                      });
                  } else {
                    message.message = req.__("invalid_user");
                    message.status = -1;
                    deferred.resolve(message);
                    deferred.makeNodeResolver();
                    message = null;
                  }
                })
                .catch(function (err) {
                  console.error("Error verifying passenger:", err);
                  message.status = 0;
                  message.message = "Internal Server Error";
                  deferred.resolve(message);
                  return deferred.promise;
                });
            } else {
              message.status = 1;
              deferred.resolve(message);
              return deferred.promise;
            }
          } else {
            message.status = 1;
            deferred.resolve(message);
            return deferred.promise;
          }
        })
        .catch(function (err) {
          console.error("Error fetching passenger by unique ID:", err);
          message.status = 0;
          message.message = "Internal Server Error";
          deferred.resolve(message);
          return deferred.promise;
        });
    }
  } else {
    if (email) {
      apimodel
        .passenger_email_exists(q, email)
        .then(function (email_exists) {
          if (email_exists == 0) {
            return add_email_passenger(q, inputParams).then(function (
              status_result
            ) {
              if (status_result.status == 1) {
                message.status = 1;
                message.message = "Social user created successfully";
              } else {
                message.status = 0;
                message.message = "Something went wrong! Failed to create user";
              }
              deferred.resolve(message);
            });
          }

          if (email_exists == 1) {
            return apimodel
              .get_passenger_phone_by_email(q, email)
              .then(function (number_result) {
                if (number_result && number_result.length > 0) {
                  let phone = number_result[0].phone;
                  if (phone) {
                    apimodel
                      .passenger_verified(q, phone)
                      .then(function (verify_results) {
                        if (verify_results.length > 0) {
                          details = verify_results[0];

                          var passenger_profile =
                            verify_results[0].profile_image;
                          var passenger_name = verify_results[0].name;
                          var passenger_email = verify_results[0].email;

                          details.passenger_image = get_passenger_profile(
                            passenger_profile,
                            hostname
                          );

                          let passenger_id = details._id;

                          shared
                            .oldVersion_getPassengerId(passenger_id)
                            .then(function (passengerInfo) {
                              if (
                                !passengerInfo ||
                                !passengerInfo.customerTapPaymentId
                              ) {
                                message.message =
                                  "Failed to generate Tap customer Id.";
                                message.status = -1;
                                deferred.resolve(message);
                                deferred.makeNodeResolver();
                                message = null;
                                return;
                              }
                              let customerTapPaymentId =
                                passengerInfo.customerTapPaymentId;

                              shared
                                .getHesabeCustomerPaymentId(passenger_id)
                                .then(function (passengerInfos) {
                                  if (
                                    !passengerInfos ||
                                    !passengerInfos.hesabeCustomerPaymentId
                                  ) {
                                    message.message =
                                      "Failed to generate Hesabe customer Id.";
                                    message.status = -1;
                                    deferred.resolve(message);
                                    deferred.makeNodeResolver();
                                    message = null;
                                    return;
                                  }

                                  let hesabeCustomerPaymentId =
                                    passengerInfos.hesabeCustomerPaymentId;

                                  var update_array = {
                                    user_status: "A",
                                    customerTapPaymentId: customerTapPaymentId,
                                    hesabeCustomerPaymentId:
                                      hesabeCustomerPaymentId,
                                  };

                                  apimodel
                                    .update_passenger_by_phone(
                                      q,
                                      phone,
                                      update_array
                                    )
                                    .then(async function (status_result) {
                                      if (status_result) {
                                        if (
                                          details.phone != "" &&
                                          passenger_name != "" &&
                                          passenger_email != ""
                                        ) {
                                          let userDetails = {
                                            passengerId: details._id,
                                            name: details.name,
                                          };
                                          let encryptedDetails =
                                            encrypt(userDetails);
                                          let token = await generateToken(
                                            encryptedDetails
                                          );

                                          message.status = 3;
                                          message.message = "User verified";
                                          message.details = details;
                                          message.token = token;
                                          message.customerTapPaymentId =
                                            customerTapPaymentId;
                                          message.hesabeCustomerPaymentId =
                                            hesabeCustomerPaymentId;
                                        } else {
                                          message.message =
                                            req.__("invalid_user");
                                          message.status = 1;
                                        }
                                      }
                                      deferred.resolve(message);
                                    });
                                });
                            })
                            .catch(function (err) {
                              console.error("Error updating passenger:", err);
                              message.status = -1;
                              message.message = req.__("update_failed");
                              deferred.resolve(message);
                            });
                        } else {
                          message.message = req.__("invalid_user");
                          message.status = -1;
                          deferred.resolve(message);
                          deferred.makeNodeResolver();
                          message = null;
                        }
                      });
                  } else {
                    message.status = 1;
                    deferred.resolve(message);
                  }
                } else {
                  message.status = 1;
                  deferred.resolve(message);
                }
              });
          }
        })
        .catch((err) => {
          console.error("Error in passenger_email_registration_step1:", err);
          message.status = 0;
          message.message = "Internal Server Error";
          deferred.resolve(message);
        });
    } else {
      message.message = req.__("email should not be empty");
      message.status = -1;
      deferred.resolve(message);
      deferred.makeNodeResolver();
      message = null;
    }
  }

  return deferred.promise;
};
exports.resend_otp = function (q, req) {
  //let inputParams = JSON.parse(req.rawBody);
  let inputParams = req.body;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  var validate_error = ValidateResendOtp(q, inputParams);

  //console.log(validate_error);

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
    var device_type = inputParams.device_type;
    var country_code = inputParams.country_code;
    var phone = inputParams.phone;

    //console.log("heree0001");

    check_passenger_phone(q, phone).then(function (status_results) {
      var status_result = status_results.status;
      if (status_result != 0) {
        var otp = randomstring.generate({
          length: 4,
          charset: "numeric",
        });

        let update_array = {
          otp: otp,
          updated_date: new Date(),
        };

        apimodel
          .update_passenger_by_phone(q, phone, update_array)
          .then(function (status_result) {
            try {
              if (status_result.modifiedCount == 1) {
                var detail = {};
                detail.phone = phone;
                var passenger_phone = country_code + phone;

                if (device_type == 1) {
                  //sms send
                  var replace_array = {
                    sitename: global.settings.app_name,
                    otp: otp,
                  };

                  common
                    .send_sms(q, passenger_phone, 13, replace_array)
                    .then(function (checkresults) {
                      message.message = req.__("verification_code_sent");
                      message.detail = detail;
                      message.otp = otp; // Customization
                      message.status = 1;
                      deferred.resolve(message);
                      deferred.makeNodeResolver();
                      message = null;
                    });
                } else {
                  var replace_array = {
                    sitename: global.settings.app_name,
                    otp: otp,
                  };
                  common
                    .send_sms(q, passenger_phone, 23, replace_array)
                    .then(function (checkresults) {
                      message.message = req.__("verification_code_sent");
                      message.detail = detail;
                      message.otp = otp; // Customization
                      message.status = 1;
                      deferred.resolve(message);
                      deferred.makeNodeResolver();
                      message = null;
                    });
                }
              } else {
                message.message = req.__("try_again");
                message.status = 4;
                deferred.resolve(message);
                deferred.makeNodeResolver();
                message = null;
              }
            } catch (err) {
              console.log(err);
            }
          });
      } else {
        message.message = req.__("invalid_user");
        message.status = -1;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        message = null;
      }
    });
  }

  return deferred.promise;
};

exports.passenger_account_registration_step2 = function (q, req) {
  //let inputParams = JSON.parse(req.rawBody);
  let inputParams = req.body;

  var hostname = global.settings.base_url;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  var validate_error = ValidateSignupStep2(q, inputParams);

  //console.log(validate_error);

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
    var verification_code = inputParams.verification_code;
    var country_code = inputParams.country_code;
    var phone = inputParams.phone;
    var is_email_login = inputParams.is_email_login
      ? inputParams.is_email_login
      : 0;

    apimodel
      .passenger_verify_otp(q, phone, verification_code)
      .then(function (verify_results) {
        if (verify_results.length > 0) {
          details = verify_results[0];

          var passenger_profile = verify_results[0].profile_image;
          var passenger_name = verify_results[0].name;
          var passenger_email = verify_results[0].email;
          var customerTapPaymentId = verify_results[0].customerTapPaymentId;
          var passenger_id = verify_results[0]._id;

          shared
            .getHesabeCustomerPaymentId(passenger_id)
            .then(function (passengerInfos) {
              if (!passengerInfos || !passengerInfos.hesabeCustomerPaymentId) {
                message.message = "Failed to generate Hesabe customer Id.";
                message.detail = {};
                message.status = -1;
                deferred.resolve(message);
                deferred.makeNodeResolver();
                message = null;
                return;
              }

              details.passenger_image = get_passenger_profile(
                passenger_profile,
                hostname
              );

              var update_array = {
                user_status: "A",
              };

              details.hesabeCustomerPaymentId =
                passengerInfos.hesabeCustomerPaymentId;

              /* Sasidharan sep 30 2024 added async */
              apimodel
                .update_passenger_by_phone(q, phone, update_array)
                .then(async function (status_result) {
                  try {
                    //if(status_result.modifiedCount == 1)
                    //{
                    if (
                      details.user_status == "A" &&
                      passenger_name != "" &&
                      passenger_email != ""
                    ) {
                      /* Sasidharan sep 30 2024 */
                      let userDetails = {
                        passengerId: details._id,
                        name: details.name,
                      };
                      let encryptedDetails = encrypt(userDetails);
                      let token = await generateToken(encryptedDetails);

                      message.message = req.__("valid_verification_code");
                      message.details = details;
                      message.token = token;
                      message.customerTapPaymentId = customerTapPaymentId;
                      message.hesabeCustomerPaymentId =
                        passengerInfos.hesabeCustomerPaymentId;
                      message.status = 1;
                      deferred.resolve(message);
                      deferred.makeNodeResolver();
                      message = null;
                    } else if (is_email_login === 1) {
                      let userDetails = {
                        passengerId: details._id,
                        name: details.name,
                      };
                      let encryptedDetails = encrypt(userDetails);
                      let token = await generateToken(encryptedDetails);

                      message.message = req.__(
                        "Code Verification Success for email login "
                      );
                      message.details = details;
                      message.token = token;
                      message.customerTapPaymentId = customerTapPaymentId;
                      message.hesabeCustomerPaymentId =
                        passengerInfos.hesabeCustomerPaymentId;
                      message.status = 1;
                      deferred.resolve(message);
                      deferred.makeNodeResolver();
                      message = null;
                    } else {
                      message.message = req.__("valid_verification_code");
                      message.status = 1;
                      message.customerTapPaymentId = customerTapPaymentId;
                      message.hesabeCustomerPaymentId =
                        passengerInfos.hesabeCustomerPaymentId;
                      deferred.resolve(message);
                      deferred.makeNodeResolver();
                      message = null;
                    }
                    // }
                    // else
                    // {
                    // 	message.message = req.__('try_again');
                    // 	message.status = -1;
                    // 	deferred.resolve(message);
                    // 	deferred.makeNodeResolver()
                    // 	message=null;
                    // }
                  } catch (err) {
                    console.log(err);
                  }
                });
            });
        } else {
          message.message = req.__("invalid_verification_code");
          message.status = -1;
          deferred.resolve(message);
          deferred.makeNodeResolver();
          message = null;
        }
      });
  }

  return deferred.promise;
};

exports.passenger_account_registration_step3 = async function (q, req) {
  //let inputParams = JSON.parse(req.rawBody);
  let inputParams = req.body;

  var hostname = global.settings.base_url;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  var validate_error = ValidateSignupStep3(q, inputParams);

  //console.log(validate_error);

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
    var firstname = inputParams.firstname;
    var email = inputParams.email;
    var country_code = inputParams.country_code;
    var phone = inputParams.phone;
    var lastname = inputParams.lastname;

    let passengerInfo = {
      name: firstname,
      lastname: lastname,
      email: email,
      country_code: country_code,
      phone: phone,
    };

    let passengerInfos = {
      name: firstname,
      email: email,
      phone: phone,
    };

    let customerId_response = await tapPaymentGateway.createCustomer(
      passengerInfo
    );
    if (!customerId_response || Object.keys(customerId_response).length <= 0) {
      message.message = "Failed to generate customer TAP paymentID.";
      message.detail = {};
      message.status = -1;
      deferred.resolve(message);
      deferred.makeNodeResolver();
      message = null;
      return deferred.promise;
    }
    var customerTapPaymentId = customerId_response.id;

    let hesabe_customerId_response = await hesabe.createHesabeCustomer(
      passengerInfos
    );
    if (
      !hesabe_customerId_response ||
      Object.keys(hesabe_customerId_response).length <= 0
    ) {
      message.message = "Failed to generate hesabe customer ID.";
      message.detail = {};
      message.status = -1;
      deferred.resolve(message);
      deferred.makeNodeResolver();
      message = null;
      return deferred.promise;
    }

    let hesabeCustomerPaymentId = hesabe_customerId_response.customer_id;

    apimodel.passenger_email_exists(q, email).then(function (email_exists) {
      if (email_exists == 0) {
        apimodel
          .passenger_profile_by_phone_with_tap_id(q, phone, inputParams)
          .then(function (
            passenger_profile
          ) /* Sasidharan April 30 changed passenger_profile_by_phone_with_tap_id and added input params */ {
            if (passenger_profile.length > 0) {
              var details = {};

              let update_array = {
                name: urlencode.decode(firstname),
                salutation: "",
                lastname: urlencode.decode(lastname),
                email: urlencode.decode(email),
                phone: phone,
                customerTapPaymentId: customerTapPaymentId,
                hesabeCustomerPaymentId: hesabeCustomerPaymentId,
                creditcard_no: "",
                creditcard_cvv: "",
                expdatemonth: "",
                expdateyear: "",
                cardholder_name: "",
                civilid_front: "",
                civilid_back: "",
                civilid_front_thumb: "",
                civilid_back_thumb: "",
                civilid: "",
                updated_date: new Date(),
                activation_status: parseInt(1),
                login_status: "S",
                skip_credit_card: parseInt(2),
                creditcard_details: [],
                user_status: "A",
              };

              details = passenger_profile[0];
              details.customerTapPaymentId = customerTapPaymentId;
              details.hesabeCustomerPaymentId = hesabeCustomerPaymentId;

              var passenger_profile = passenger_profile[0].profile_image;

              details.passenger_image = get_passenger_profile(
                passenger_profile,
                hostname
              );
              details.profile_image = get_passenger_profile(
                passenger_profile,
                hostname
              );
              console.error("details : ", details);
              apimodel
                .update_passenger_by_phone(q, phone, update_array)
                .then(function (status_result) {
                  try {
                    if (status_result.modifiedCount == 1) {
                      var replace_array = {
                        sitename: global.settings.app_name,
                      };
                      var passenger_phone = country_code + phone;
                      common

                        .send_sms(q, passenger_phone, 1, replace_array)
                        .then(function () {
                          message.message = req.__("account_saved");
                          message.details = details;
                          message.status = 1;
                          deferred.resolve(message);
                          deferred.makeNodeResolver();
                          message = null;
                        });
                    } else {
                      message.message = req.__("try_again");
                      message.status = 4;
                      message.customerTapPaymentId = "";
                      message.hesabeCustomerPaymentId = "";
                      deferred.resolve(message);
                      deferred.makeNodeResolver();
                      message = null;
                    }
                  } catch (err) {
                    console.log(err);
                  }
                });
            } else {
              message.message = req.__("invalid_user");
              message.status = -1;
              deferred.resolve(message);
              deferred.makeNodeResolver();
              message = null;
            }
          });
      } else {
        message.message = req.__("email_exists");
        message.status = -1;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        message = null;
      }
    });
  }

  return deferred.promise;
};

function ValidateSignupStep1(q, input) {
  var constraints = {
    country_code: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    phone: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    device_type: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    deviceid: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  /*
	,
		devicetoken: {
			presence:{allowEmpty: false,message:"not empty"},
		}
	*/
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function ValidateEmailSignupStep1(q, input) {
  var constraints = {
    device_type: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    deviceid: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };

  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function ValidateSignupStep2(q, input) {
  var constraints = {
    phone: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    verification_code: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    // country_code: {
    // 	presence:{allowEmpty: false,message:"not empty"},

    // }
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}
function ValidateSignupStep3(q, input) {
  var constraints = {
    phone: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    firstname: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    country_code: {
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

function ValidateResendOtp(q, input) {
  var constraints = {
    country_code: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    phone: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    user_type: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    device_type: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function check_passenger_phone(q, phone) {
  var deferred = q.defer();

  var details = {};
  //console.log("here003");
  apimodel.check_phone_passengers(q, phone).then(function (results) {
    //console.log("here004");
    if (results.length > 0) {
      var user_status = results[0].user_status;
      var passenger_id = results[0]._id;

      /* Sasidharan Sep 03 2024 */
      var showOTPOnApp =
        typeof results[0].showOTPOnApp != "undefined"
          ? results[0].showOTPOnApp
          : 0;
      details.showOTPOnApp = showOTPOnApp;

      details.status = user_status;
      details.passenger_id = passenger_id;
      deferred.resolve(details);
      deferred.makeNodeResolver();
      details = null;
    } else {
      details.status = 0;
      deferred.resolve(details);
      deferred.makeNodeResolver();
      details = null;
    }
  });

  return deferred.promise;
}

function add_passenger(q, input_array) {
  var deferred = q.defer();
  let details = {};

  apimodel.get_auto_id(q, t.MDB_PASSENGERS).then(function (results) {
    //console.log("here005");

    if (results.length > 0) {
      //console.log("here006");

      try {
        var inc_id = results[0]._id + 1;
        var password = randomstring.generate({
          length: 6,
          charset: "alphabetic",
        });

        var otp = randomstring.generate({
          length: 4,
          charset: "numeric",
        });

        var phone = input_array.phone;
        var device_id = input_array.device_id;
        var device_token = input_array.device_token;
        var device_type = input_array.device_type;
        var country_code = input_array.country_code;
        var current_time = new Date();

        var insert_array = {
          _id: inc_id,
          parent_id: 0,
          account_type: "",
          salutation: "",
          name: "",
          lastname: "",
          email: "",
          password: md5(password),
          org_password: password,
          profile_image: "",
          otp: otp,
          country_code: country_code,
          address: "",
          phone: phone,
          referral_code: "",
          referral_code_amount: parseInt(0),
          referral_code_limit: parseInt(0),
          wallet_amount: parseFloat(0),
          referral_earned_amount: parseInt(0),
          referrer_earned: parseInt(0),
          discount: parseFloat(0),
          creditcard_no: "",
          creditcard_cvv: "",
          expdatemonth: "",
          expdateyear: "",
          cardholder_name: "",
          civilid: "",
          civilid_front: "",
          civilid_back: "",
          civilid_front_thumb: "",
          civilid_back_thumb: "",
          fb_user_id: "",
          fb_access_token: "",
          device_id: device_id,
          device_token: device_token,
          device_type: parseInt(device_type),
          activation_key: "",
          activation_status: parseInt(0),
          login_from: parseInt(0),
          created_date: current_time,
          updated_date: current_time,
          last_login: "",
          login_status: "N",
          referred_by: parseInt(0),
          passenger_cid: parseInt(0),
          skip_credit_card: parseInt(0),
          loc: [],
          creditcard_details: [],
          user_status: "I",
          child_exist: parseInt(0),
          allow_creditcard: parseInt(0),
          trip_alert: parseInt(0),
          profile_thumb_image: "",
          pay_by: parseInt(3),
          lateral_start_date: "",
          lateral_end_date: "",
        };
      } catch (err) {
        console.log(err);
      }
      //console.log("here008");
      try {
        apimodel
          .insert_passenger_details(q, insert_array)
          .then(function (insertresults) {
            //console.log("here007",insertresults.result);
            if (insertresults.modifiedCount == 1) {
              var passenger_phone = country_code + phone;
              if (device_type == 1) {
                //sms send
                var replace_array = {
                  sitename: global.settings.app_name,
                  otp: otp,
                };

                common
                  .send_sms(q, passenger_phone, 13, replace_array)
                  .then(function (checkresults) {
                    details.otp = otp; // Customization
                    details.status = 1;
                    deferred.resolve(details);
                    deferred.makeNodeResolver();
                    details = null;
                  });
              } else {
                var replace_array = {
                  sitename: global.settings.app_name,
                  otp: otp,
                };
                common
                  .send_sms(q, passenger_phone, 23, replace_array)
                  .then(function (checkresults) {
                    details.otp = otp; // Customization
                    details.status = 1;
                    deferred.resolve(details);
                    deferred.makeNodeResolver();
                    details = null;
                  });
              }
            } else {
              details.otp = otp; // Customization
              details.status = 0;
              deferred.resolve(details);
              deferred.makeNodeResolver();
              details = null;
            }
          });
      } catch (err) {
        console.log(err);
      }
    } else {
      details.status = 0;
      deferred.resolve(details);
      deferred.makeNodeResolver();
      details = null;
    }
  });

  return deferred.promise;
}

function add_email_passenger(q, input_array) {
  var deferred = q.defer();
  let details = {};

  apimodel
    .get_auto_id(q, t.MDB_PASSENGERS)
    .then(function (results) {
      if (!results || results.length === 0) {
        details.status = 0;
        return deferred.resolve(details);
      }

      try {
        var inc_id = results[0]._id + 1;
        var password = randomstring.generate({
          length: 6,
          charset: "alphabetic",
        });

        var email = input_array.email;
        var uniqueID = input_array.uniqueID;
        var phone = input_array.phone || "";
        var firstname = input_array.firstname || "user";
        var lastname = input_array.lastname || "name";
        var device_id = input_array.device_id;
        var device_token = input_array.device_token || "";
        var device_type = input_array.device_type;

        var current_time = new Date();

        var insert_array = {
          _id: inc_id,
          isRegisterViaEmail: 1,
          uniqueID: uniqueID,
          parent_id: 0,
          account_type: "",
          salutation: "",
          name: firstname,
          lastname: lastname,
          email: email,
          phone: phone,
          password: md5(password),
          org_password: password,
          profile_image: "",
          address: "",
          referral_code: "",
          referral_code_amount: 0,
          referral_code_limit: 0,
          wallet_amount: 0,
          referral_earned_amount: 0,
          referrer_earned: 0,
          discount: 0,
          creditcard_no: "",
          creditcard_cvv: "",
          expdatemonth: "",
          expdateyear: "",
          cardholder_name: "",
          civilid: "",
          civilid_front: "",
          civilid_back: "",
          civilid_front_thumb: "",
          civilid_back_thumb: "",
          fb_user_id: "",
          fb_access_token: "",
          device_id: device_id,
          device_token: device_token,
          device_type: device_type,
          activation_key: "",
          activation_status: 0,
          login_from: 0,
          created_date: current_time,
          updated_date: current_time,
          last_login: "",
          login_status: "N",
          referred_by: 0,
          passenger_cid: 0,
          skip_credit_card: 0,
          loc: [],
          creditcard_details: [],
          user_status: "I",
          child_exist: 0,
          allow_creditcard: 0,
          trip_alert: 0,
          profile_thumb_image: "",
          pay_by: 3,
          lateral_start_date: "",
          lateral_end_date: "",
        };

        apimodel
          .insert_passenger_details(q, insert_array)
          .then(function (insertresults) {
            if (
              insertresults &&
              (insertresults.insertedCount === 1 || insertresults.acknowledged)
            ) {
              details.status = 1;
              details.passenger = {
                id: inc_id,
                firstname,
                lastname,
                phone,
                email,
              };
              deferred.resolve(details);
            } else {
              details.status = 0;
              deferred.resolve(details);
            }
          })
          .catch(function (err) {
            console.error("Insert error: ", err);
            details.status = 0;
            deferred.resolve(details);
          });
      } catch (err) {
        console.error("Processing error: ", err);
        details.status = 0;
        deferred.resolve(details);
      }
    })
    .catch(function (err) {
      console.error("Auto ID error: ", err);
      details.status = 0;
      deferred.resolve(details);
    });

  return deferred.promise;
}

function convsecstoformat(secs) {
  try {
    var hours = secs / 3600;
    var minutes = (secs - hours * 3600) / 60;
    var seconds = secs - (hours * 3600 + minutes * 60);

    hours = zeropadding(hours.toFixed(0));
    minutes = zeropadding(minutes.toFixed(0));
    seconds = zeropadding(seconds.toFixed(0));

    if (hours == "00" && hours == "") {
      return minutes + ":" + seconds;
    } else {
      return hours + ":" + minutes + ":" + seconds;
    }
  } catch (err) {
    console.log(err);
  }
}

function get_passenger_profile(profile, hostname) {
  try {
    if (fs.existsSync(appRoot + "public/uploads/passenger/" + profile)) {
      return hostname + "/" + "public/uploads/passenger/" + profile;
    } else {
      return hostname + "/" + config.NO_IMAGE;
    }
  } catch (ex) {
    console.log("error", ex);
  }
}

function zeropadding(a) {
  h = a < 10 ? "0" + a : a;

  return h;
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
