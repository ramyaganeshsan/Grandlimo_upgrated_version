var apimodel = require("../../models/passapimodel_v1");
var moment = require("moment-timezone");
var apimodel_two = require("../../models/apimodel_v1");
var apimodel_three = require("../../models/apimodel");

var favicon = require("../../config/favicon.json");
var config = require("../../config/common_config.json");
var q = require("q");
var appRoot = require("app-root-path");
var validator = require("validator");
var fs = require("fs");
var validate = require("validate.js");
var dateFormat = require("dateformat");
var md5 = require("md5");
var i18n = require("i18n");
var t = require("../../config/table_config.json");
var uniqid = require("uniqid");
var randomstring = require("randomstring");
var dateformatter = require("date-format-php");
var urlencode = require("urlencode");
const axios = require("axios");

var common = require("../../lib_v1/common.js");

/* Sasidharan April 05 2024 */
const shared = require("../../utils/shared.js");
const tapPaymentGateway = require("../../utils/tapPaymentGateway.js");

/* Sasidharan Nov 20 2024 */
var hesabe = require("../../modules/hesabe/hesabe.js");
var hesabeModel = require("../../modules/hesabe/hesabe.model.js");

function cc_format(value) {
  var v = value.replace(/\s+/g, "").replace(/[^0-9]/gi, "");
  var matches = v.match(/\d{4,16}/g);
  var match = (matches && matches[0]) || "";
  var parts = [];
  var card_no = "";
  for (i = 0, len = match.length; i < len; i += 4) {
    parts.push(match.substring(i, i + 4));
  }
  if (parts.length) {
    card_no += parts.join(" ");
  } else {
    card_no += value;
  }
  return card_no.replace(/\d{4}(?= \d{4})/g, "xxxx");
}

//ramya may 11 2026 - hesabe payment gateway for wallet recharge API
exports.hesabe_wallet_recharge = async (q, req) => {
  let inputParams = req.body;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  //var hostname = global.settings.base_url;
  var hostname = req.headers.host;
  var protocol = req.headers.protocol;

  //console.log('protocol',protocol);

  if (protocol == undefined) protocol = "http://";

  var validate_error = ValidateWalletRecharge(q, inputParams);

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
      var amount = inputParams.amount;
      var customerId = inputParams.customerId;
      var variable1 = inputParams.variable1;
      var variable2 = inputParams.variable2;

      let data = {
        merchantCode: "842217",
        amount: amount,
        currency: "KWD",
        paymentType: 2,
        saveCard: false,
        version: "3.0",
        customer_id: customerId,
        channel: "mobile",
        responseUrl: global.settings.hesabe_success_url,
        failureUrl: global.settings.hesabe_failure_url,
        variable1: variable1,
        variable2: variable2,
      };
      let encrypted_results = hesabe.encrypteData(data);
      console.error("encrypt :", encrypted_results);

      let headers = {
        accessCode: "c333729b-d060-4b74-a49d-7686a8353481",
        Accept: "application/json",
        "Content-Type": "application/json",
      };
      let response = await axios.post(
        "https://sandbox.hesabe.com/checkout",
        { data: encrypted_results },
        { headers }
      );

      console.error("response : ", response);

      if (response && response.data) {
        let decrypted = hesabe.decrypteData(response.data);
        console.error("decrypted : ", decrypted.webviewUrl);

        var insert_array = {
          passenger_id: parseInt(variable2),
          change_amount: parseFloat(amount),
          wallet_amount: parseFloat(0),
          created_date: new Date(),
          created_by: parseInt(variable2),
          recharge_type: parseInt(10),
          trip_id: "",
          paid_status: parseInt(0),
          // requestData: logDetails,
          initiated_payment: 1,
          hesabePaymentGayeway: 1,
        };

        apimodel_two
          .insert_wallet_logs(q, insert_array)
          .then(function (detailresults) {});

        message.message = "Success";
        message.status = 1;
        message.hesabewebviewUrl = decrypted.webviewUrl;
        deferred.resolve(message);
        return deferred.promise;
      } else {
        message.message = "Failed to generate payment URL.";
        message.detail = {};
        message.status = 0;
        deferred.resolve(message);
        return deferred.promise;
      }
    } catch (err) {
      message.message = "something went worng! please try again.";
      message.detail = {};
      message.status = 0;
      deferred.resolve(message);
      return deferred.promise;
    }
  }
  return deferred.promise;
};

//ramya may 14 2026 - hesabe save card
exports.hesabe_save_card_api = async (q, req) => {
  var deferred = q.defer();

  let inputParams = req.body;

  let message = {
    message: "",
    status: 0,
  };

  var validate_error = ValidateSaveCard(q, inputParams);

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
      var passengerId = inputParams.passengerId;
      var customerId = inputParams.customerId;

      let data = {
        merchantCode: "842217",
        amount: "0.000",
        currency: "KWD",
        paymentType: 2,
        saveCard: true,
        version: "3.0",
        customer_id: customerId,
        channel: "mobile",
        responseUrl: "http://34.28.184.113:4000/hesabe/saveCardSuccess",
        failureUrl: "http://34.28.184.113:4000/hesabe/saveCardFailed",
        variable1: passengerId,
      };
      let encrypted_results = hesabe.encrypteData(data);
      console.error("encrypt :", encrypted_results);

      let headers = {
        accessCode: "c333729b-d060-4b74-a49d-7686a8353481",
        Accept: "application/json",
        "Content-Type": "application/json",
      };
      let response = await axios.post(
        "https://sandbox.hesabe.com/checkout",
        { data: encrypted_results },
        { headers }
      );

      console.error("response : ", response);
      if (response && response.data) {
        let decrypted = hesabe.decrypteData(response.data);
        console.error("decrypted : ", decrypted.webviewUrl);

        message.message = "Success";
        message.status = 1;
        message.hesabewebviewUrl = decrypted.webviewUrl;
        deferred.resolve(message);
        return deferred.promise;
      } else {
        message.message = "Failed to generate payment URL.";
        message.detail = {};
        message.status = 0;
        deferred.resolve(message);
        return deferred.promise;
      }
    } catch (err) {
      console.error(err.message);
      console.error(err.response);
      if (err && err.response && err.response.data) {
        console.error(err.data);
        message.detail = {};
        message.status = 0;
        deferred.resolve(message);
        return deferred.promise;
      }
    }
  }
  return deferred.promise;
};

//ramya  july 21 2026 - api for reloading issue
exports.get_tap_success_failed_status = async (q, req) => {
  var deferred = q.defer();

  let inputParams = req.body;

  let message = {
    message: "",
    status: 0,
    tapStatus: "",
    tapResponse: {},
  };

  var validate_error = ValidatetapId(q, inputParams);

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
      var tapId = inputParams.tapId;
      const isCharge = Number(inputParams.isCharge || 0);
      const isAuth = Number(inputParams.isAuth || 0);

      const SECRECT_KEY =
        global.settings.tapPaymentGatewayMode === "L"
          ? global.settings.tapPaymentGatewayLiveSecrectKey
          : global.settings.tapPaymentGatewayTestSecrectKey;

      const HEADERS = {
        Authorization: `Bearer ${SECRECT_KEY}`,
        "Content-Type": "application/json",
        Accept: "application/json",
      };

      let url = "";

      if (isCharge === 1) {
        url = `https://api.tap.company/v2/charges/${tapId}`;
      } else if (isAuth === 1) {
        url = `https://api.tap.company/v2/authorize/${tapId}`;
      } else {
        message.message = "Please pass either isCharge=1 or isAuth=1.";
        message.status = -1;

        deferred.resolve(message);
        return deferred.promise;
      }

      // Now verify the charge status
      const response = await axios.get(url, {
        headers: HEADERS,
      });

      const tapData = response.data;

      console.error("Tap Response:", tapData);

      message.tapStatus = tapData.status;
      message.tapResponse = tapData;

      const successStatuses = [
        "CAPTURED",
        "SUCCESS",
        "AUTHORIZED",
        "INITIATED",
      ];

      if (successStatuses.includes(tapData.status)) {
        message.message = "Success";
        message.status = 1;
      } else {
        // Everything else from Tap is treated as non-success
        message.message = "Failed";
        message.status = 0;
      }

      deferred.resolve(message);
      return deferred.promise;
    } catch (err) {
      console.error("Tap Error:", err.message);

      message.status = 0;

      if (err.response && err.response.data) {
        message.message =
          err.response.data.description ||
          err.response.data.error ||
          "Tap API Error";

        message.tapStatus = err.response.data.status || err.response.status;

        message.tapResponse = err.response.data;
      } else {
        message.message = err.message;
        message.tapStatus = "UNKNOWN_ERROR";
      }

      deferred.resolve(message);
      return deferred.promise;
    }
  }
};

/* Sasidharan April 05 2024 added async */
exports.wallet_add_money = async function (q, req) {
  let inputParams = req.body;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  //var hostname = global.settings.base_url;
  var hostname = req.headers.host;
  var protocol = req.headers.protocol;

  //console.log('protocol',protocol);

  if (protocol == undefined) protocol = "http://";

  var validate_error = ValidateAddWallet(q, inputParams);

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
      var amt = inputParams.amt;
      var tap_sourceId = inputParams.tap_sourceId;

      /* Sasidharan Mar 27 2025 */
      var cardId = inputParams.cardId ? inputParams.cardId : null;
      if (global.settings.hesabe_status && false) {
        if (cardId) {
          // let defaultCardResponse = await hesabeModel.getDefaultCard(
          //   passenger_id
          // );
          /* Sasidharan Mar 27 2025 */
          let defaultCardResponse = await hesabeModel.getCardToken(
            passenger_id,
            +cardId
          );

          if (defaultCardResponse && defaultCardResponse.token) {
            let cardToken = defaultCardResponse.token;
            let orderReferenceNumber = `${Date.now()}_${passenger_id}`;
            let amount = amt;
            try {
              let mercharntTransactionresponse =
                await hesabe.createMercharntTransaction({
                  cardToken,
                  amount,
                  orderReferenceNumber,
                });

              if (mercharntTransactionresponse.status) {
                let UpdateWalletMoneyResponse =
                  await hesabeModel.updatePassengerWalletAmount(
                    passenger_id,
                    amount
                  );
                if (
                  UpdateWalletMoneyResponse &&
                  UpdateWalletMoneyResponse.status
                ) {
                  let walletAmout = UpdateWalletMoneyResponse.wallet_amount;
                  let paymentToken = mercharntTransactionresponse.data.token;
                  let paymentId = mercharntTransactionresponse.data.PaymentID;
                  // Success
                  let insert_array = {
                    passenger_id: parseInt(passenger_id),
                    change_amount: parseFloat(amount),
                    wallet_amount: parseFloat(walletAmout),
                    created_date: new Date(),
                    created_by: parseInt(passenger_id),
                    recharge_type: 15,
                    trip_id: "",
                    paid_status: parseInt(1),
                    hesabe: 1,
                    paymentToken: paymentToken,
                    paymentId: paymentId,
                  };

                  await hesabeModel.insertLog(insert_array);

                  message.message =
                    "Your wallet has been successfully recharged.";
                  message.status = 1;
                  deferred.resolve(message);
                  deferred.makeNodeResolver();
                  return deferred.promise;
                } else {
                  message.message = "wallet amount not updated";
                  message.status = 0;
                  deferred.resolve(message);
                  deferred.makeNodeResolver();
                  return deferred.promise;
                }
              } else {
                // Failure
                message.message = "Payment failed. Please try again.";
                message.status = 0;
                deferred.resolve(message);
                deferred.makeNodeResolver();
                return deferred.promise;
              }
            } catch (error) {
              console.error(error);

              message.message = "Error during payment initiation.";
              message.status = 0;
              deferred.resolve(message);
              deferred.makeNodeResolver();
              return deferred.promise;
            }
          }
        }

        let orderReferenceNumber = `${Date.now()}_${passenger_id}`;
        let amount = amt;
        let passengerDetails = await hesabeModel.getPassengerDetails(
          passenger_id
        );
        let name = passengerDetails.name;
        let email = passengerDetails.email;
        let mobile_number = passengerDetails.phone;
        let variable1 = "WALLET";
        let variable2 = JSON.stringify({
          passengerId: toString(passenger_id),
          amount: toString(amount),
        });

        let transactionResponse = await hesabe.createTransaction({
          amount,
          variable1,
          variable2,
          orderReferenceNumber,
          name,
          mobile_number,
          email,
        });

        if (transactionResponse) {
          message.message = "Your payment url has been generated.";
          message.url = transactionResponse;
          message.status = 2;
          deferred.resolve(message);
          deferred.makeNodeResolver();
          return deferred.promise;
        } else {
          message.message = "Transaction initialization failed.";
          message.status = 0;
          deferred.resolve(message);
          deferred.makeNodeResolver();
          return deferred.promise;
        }
      }

      /* Sasidharan April 05 2024 */
      if (global.settings.tapPaymentGatewayStatus || true) {
        let passengerInfo = await shared.getPassengerId(passenger_id);
        if (
          !passengerInfo ||
          Object.keys(passengerInfo).length <= 0 ||
          !passengerInfo.hasOwnProperty("customerTapPaymentId")
        ) {
          message.message = "Failed to generate payment URL.";
          message.detail = {};
          message.status = 0;
          deferred.resolve(message);
          deferred.makeNodeResolver();
          message = null;
          return deferred.promise;
        }
        // let metadata = {
        //   amount: parseFloat(amt),
        //   passengerId: passenger_id,
        //   type: "wallet",
        // };

        /* For local testing */
        // global.settings.base_url = "http://localhost:4000";

        // let chargeDetails = await tapPaymentGateway.createCharge({
        //   customer: passengerInfo,
        //   metadata,
        //   amount: parseFloat(amt),
        //   redirectUrl: `${global.settings.tapPaymentGatewayPaymentBaseURL}/processPayment/wallet`,
        // });

        // if (!chargeDetails || Object.keys(chargeDetails).length <= 0) {
        //   message.message = "Failed to generate payment URL.";
        //   message.detail = {};
        //   message.status = 0;
        //   deferred.resolve(message);
        //   deferred.makeNodeResolver();
        //   message = null;
        //   return deferred.promise;
        // }

        // let transaction = chargeDetails.transaction;
        // let logDetails = {
        //   chargeId: chargeDetails.id,
        //   transaction: transaction,
        //   metadata: metadata,
        // };

        var insert_array = {
          passenger_id: parseInt(passenger_id),
          change_amount: parseFloat(amt),
          wallet_amount: parseFloat(0),
          created_date: new Date(),
          created_by: parseInt(passenger_id),
          recharge_type: parseInt(10),
          trip_id: "",
          paid_status: parseInt(0),
          // requestData: logDetails,
          initiated_payment: 1,
          tapPaymentGayeway: 1,
        };

        apimodel_two
          .insert_wallet_logs(q, insert_array)
          .then(function (detailresults) {});

        message.message = req.__("payment_initiate");

        /* April 18 2024 */
        message.detail = passengerInfo;

        message.status = 1;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        message = null;
        return deferred.promise;
      }

      common
        .kfast_pay_wallet(q, passenger_id, parseFloat(amt), hostname, protocol)
        .then(function (hesaberesults) {
          console.log("success_coming", hesaberesults);
          if (hesaberesults.response.status == true) {
            try {
              var insert_array = {
                passenger_id: parseInt(passenger_id),
                change_amount: parseFloat(amt),
                wallet_amount: parseFloat(0),
                created_date: new Date(),
                created_by: parseInt(passenger_id),
                recharge_type: parseInt(10),
                trip_id: "",
                paid_status: parseInt(0),
                requestData: hesaberesults,

                /* Sasidharan Nov 10 2022 */
                initiated_payment: 1,
              };

              apimodel_two
                .insert_wallet_logs(q, insert_array)
                .then(function (detailresults) {});
            } catch (error) {
              console.log("wallet log error", error);
            }

            /////KFAST/////
            var details = hesaberesults.response.detail;

            message.message = hesaberesults.response.message;
            //message.driver_statistics = driver_statistics;
            message.detail = details;
            message.status = 1;
            deferred.resolve(message);
            deferred.makeNodeResolver();
            message = null;
          } else {
            message.message = hesaberesults.response.message;
            //message.driver_statistics = driver_statistics;
            message.status = -1;
            deferred.resolve(message);
            deferred.makeNodeResolver();
            message = null;
          }
        });
      /////KFAST/////
    } catch (err) {
      console.error(err);
    }
  }

  return deferred.promise;
};

// Ramya sept 17 2025 2nd flow
exports.payment_initiate_by_source = async function (q, req) {
  let inputParams = req.body;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  //var hostname = global.settings.base_url;
  var hostname = req.headers.host;
  var protocol = req.headers.protocol;

  //console.log('protocol',protocol);

  if (protocol == undefined) protocol = "http://";

  var validate_error = ValidateAddWallet(q, inputParams);

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
      var amt = inputParams.amt;
      var tap_sourceId = inputParams.tap_sourceId;

      if (global.settings.tapPaymentGatewayStatus || true) {
        let passengerInfo = await shared.getPassengerId(passenger_id);
        if (
          !passengerInfo ||
          Object.keys(passengerInfo).length <= 0 ||
          !passengerInfo.hasOwnProperty("customerTapPaymentId")
        ) {
          message.message = "Failed to generate payment URL.";
          message.detail = {};
          message.status = 0;
          deferred.resolve(message);
          deferred.makeNodeResolver();
          message = null;
          return deferred.promise;
        }

        //START Ramya Aug 28 2025 create tap charge api for kent AND apple pay.
        try {
          const SECRECT_KEY =
            global.settings.tapPaymentGatewayMode === "L"
              ? global.settings.tapPaymentGatewayLiveSecrectKey
              : global.settings.tapPaymentGatewayTestSecrectKey;

          const HEADERS = {
            Authorization: `Bearer ${SECRECT_KEY}`,
            "Content-Type": "application/json",
            Accept: "application/json",
          };

          // Prepare charge payload
          const chargePayload = {
            amount: amt,
            currency: global.settings.site_currency || "KWD",
            threeDSecure: true,
            save_card: false,
            description: `Payment for wallet`,
            statement_descriptor: "grand limo",
            customer: {
              id: passengerInfo.customerTapPaymentId,
            },
            metadata: {
              passengerId: passenger_id,
              amount: amt,
            },
            source: {
              id: tap_sourceId,
            },
            redirect: {
              url: `${global.settings.tapPaymentGatewayPaymentBaseURL}/processPayment/walletInitiate`,
            },
            post: {
              url: `${global.settings.tapPaymentGatewayPaymentBaseURL}/processPayment/walletInitiate`,
            },
          };

          console.error("chargePayload : ", chargePayload);

          const response = await axios.post(
            "https://api.tap.company/v2/charges",
            chargePayload,
            {
              headers: HEADERS,
            }
          );
          console.error("response : ", response);
          console.error("response.data : ", response.data);
          if (response.data.transaction.url) {
            message.tapSourceUrl = response.data.transaction.url;
          } else {
            message.message = "Failed to generate payment URL.";
            message.detail = {};
            message.status = 0;
            deferred.resolve(message);
            return deferred.promise;
          }
        } catch (err) {
          message.message = "something went worng! please try again.";
          message.detail = {};
          message.status = 0;
          deferred.resolve(message);
          return deferred.promise;
        }
        // END Ramya Aug 28 2025 create tap charge api for kent AND apple pay.

        var insert_array = {
          passenger_id: parseInt(passenger_id),
          change_amount: parseFloat(amt),
          wallet_amount: parseFloat(0),
          created_date: new Date(),
          created_by: parseInt(passenger_id),
          recharge_type: parseInt(10),
          trip_id: "",
          paid_status: parseInt(0),
          // requestData: logDetails,
          initiated_payment: 1,
          tapPaymentGayeway: 1,
        };

        apimodel_two
          .insert_wallet_logs(q, insert_array)
          .then(function (detailresults) {});

        message.message = req.__("payment_initiate");

        /* April 18 2024 */
        message.detail = passengerInfo;

        message.status = 1;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        message = null;
        return deferred.promise;
      }

      common
        .kfast_pay_wallet(q, passenger_id, parseFloat(amt), hostname, protocol)
        .then(function (hesaberesults) {
          console.log("success_coming", hesaberesults);
          if (hesaberesults.response.status == true) {
            try {
              var insert_array = {
                passenger_id: parseInt(passenger_id),
                change_amount: parseFloat(amt),
                wallet_amount: parseFloat(0),
                created_date: new Date(),
                created_by: parseInt(passenger_id),
                recharge_type: parseInt(10),
                trip_id: "",
                paid_status: parseInt(0),
                requestData: hesaberesults,

                /* Sasidharan Nov 10 2022 */
                initiated_payment: 1,
              };

              apimodel_two
                .insert_wallet_logs(q, insert_array)
                .then(function (detailresults) {});
            } catch (error) {
              console.log("wallet log error", error);
            }

            /////KFAST/////
            var details = hesaberesults.response.detail;

            message.message = hesaberesults.response.message;
            //message.driver_statistics = driver_statistics;
            message.detail = details;
            message.status = 1;
            deferred.resolve(message);
            deferred.makeNodeResolver();
            message = null;
          } else {
            message.message = hesaberesults.response.message;
            //message.driver_statistics = driver_statistics;
            message.status = -1;
            deferred.resolve(message);
            deferred.makeNodeResolver();
            message = null;
          }
        });
      /////KFAST/////
    } catch (err) {
      console.error(err);
    }
  }

  return deferred.promise;
};

exports.trip_complete_payment_initiate_by_source = async function (q, req) {
  console.error("calling API");
  let inputParams = req.body;
  console.error("inputParams : ", inputParams);
  console.error("req.query.lang  :", req.query.lang);
  const lang = req.query.lang ? req.query.lang : "en";
  console.error("lang : ", lang);

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  //var hostname = global.settings.base_url;
  var hostname = req.headers.host;
  var protocol = req.headers.protocol;

  //console.log('protocol',protocol);

  if (protocol == undefined) protocol = "http://";

  var validate_error = ValidateAddWallet(q, inputParams);

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
      var amt = inputParams.amt;
      var trip_id = inputParams.trip_id;
      var tap_sourceId = inputParams.tap_sourceId;

      /* Sasidharan Mar 27 2025 */
      var cardId = inputParams.cardId ? inputParams.cardId : null;

      if (global.settings.tapPaymentGatewayStatus || true) {
        let passengerInfo = await shared.getPassengerId(passenger_id);
        if (
          !passengerInfo ||
          Object.keys(passengerInfo).length <= 0 ||
          !passengerInfo.hasOwnProperty("customerTapPaymentId")
        ) {
          message.message = "Failed to generate payment URL.";
          message.detail = {};
          message.status = 0;
          deferred.resolve(message);
          deferred.makeNodeResolver();
          message = null;
          return deferred.promise;
        }

        try {
          const SECRECT_KEY =
            global.settings.tapPaymentGatewayMode === "L"
              ? global.settings.tapPaymentGatewayLiveSecrectKey
              : global.settings.tapPaymentGatewayTestSecrectKey;

          const HEADERS = {
            Authorization: `Bearer ${SECRECT_KEY}`,
            "Content-Type": "application/json",
            Accept: "application/json",
          };

          // Prepare charge payload
          const chargePayload = {
            amount: amt,
            currency: global.settings.site_currency || "KWD",
            threeDSecure: true,
            save_card: false,
            description: `Payment for wallet`,
            statement_descriptor: "grand limo",
            customer: {
              id: passengerInfo.customerTapPaymentId,
            },
            metadata: {
              passengerId: passenger_id,
              amount: amt,
              trip_id: trip_id,
            },
            source: {
              id: tap_sourceId,
            },
            redirect: {
              url: `${global.settings.tapPaymentGatewayPaymentBaseURL}/processPayment/TripInitiate`,
            },
            post: {
              url: `${global.settings.tapPaymentGatewayPaymentBaseURL}/processPayment/TripInitiate`,
            },
          };

          console.error("chargePayload : ", chargePayload);

          const response = await axios.post(
            "https://api.tap.company/v2/charges",
            chargePayload,
            {
              headers: HEADERS,
            }
          );
          console.error("response.data : ", response.data);
          console.error(
            ")))))))))))))))))))))))))))))))))))))))))))))))))))))))))))_______________________"
          );
          console.error(
            "response.data.transaction : ",
            response.data.transaction
          );
          if (response.data.transaction.url) {
            message.tapSourceUrl = response.data.transaction.url;
          } else {
            message.message = "Failed to generate payment URL.";
            message.detail = {};
            message.status = 0;
            deferred.resolve(message);
            return deferred.promise;
          }
        } catch (err) {
          message.message = "something went worng! please try again.";
          message.detail = {};
          message.status = 0;
          deferred.resolve(message);
          return deferred.promise;
        }

        var insert_array = {
          passenger_id: parseInt(passenger_id),
          change_amount: parseFloat(amt),
          wallet_amount: parseFloat(0),
          created_date: new Date(),
          created_by: parseInt(passenger_id),
          recharge_type: parseInt(10),
          trip_id: trip_id,
          paid_status: parseInt(0),
          // requestData: logDetails,
          initiated_payment: 1,
          tapPaymentGayeway: 1,
        };

        apimodel_two
          .insert_wallet_logs(q, insert_array)
          .then(function (detailresults) {});

        message.message = req.__("payment_initiate");

        /* April 18 2024 */
        message.detail = passengerInfo;

        message.status = 1;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        message = null;
        return deferred.promise;
      }

      /////KFAST/////
    } catch (err) {
      console.error(err);
    }
  }

  return deferred.promise;
};

//Ramya sept 17 2025 update in jan 2026 with token

exports.wallet_add_money_appleSdk = async function (q, req) {
  let inputParams = req.body;
  console.error(
    "@#############$$$$$$$$$$$%%%%%%%%%^^^^^^^^^^&&&&&&&&&&********@@@@@@@@@@@"
  );
  console.error("inputParams : ", inputParams);
  console.error(
    "@#############$$$$$$$$$$$%%%%%%%%%^^^^^^^^^^&&&&&&&&&&********@@@@@@@@@@@"
  );

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  var validate_error = ValidateAddWallet(q, inputParams);

  if (validate_error != undefined) {
    if (validate_error[0]) {
      message.message = validate_error[0];
      message.status = -1;
      deferred.resolve(message);
      return deferred.promise;
    } else {
      message.message = req.__("validation_error");
      message.status = -1;
      deferred.resolve(message);
      return deferred.promise;
    }
  } else {
    try {
      var passenger_id = inputParams.passenger_id;
      var amt = inputParams.amt;
      var tokenStr = inputParams.applePayToken;

      if (!tokenStr) {
        message.message = req.__("appleTokenMissing");
        message.status = 0;
        deferred.resolve(message);
        return deferred.promise;
      }

      // if (tokenStr.startsWith("'") && tokenStr.endsWith("'")) {
      //   tokenStr = tokenStr.slice(1, -1);
      // }
      // const applePayToken = JSON.parse(tokenStr);

      if (global.settings.tapPaymentGatewayStatus) {
        let passengerInfo = await shared.getPassengerId(passenger_id);
        if (
          !passengerInfo ||
          Object.keys(passengerInfo).length <= 0 ||
          !passengerInfo.hasOwnProperty("customerTapPaymentId")
        ) {
          message.message = req.__("noCustomerId");
          message.status = 0;
          deferred.resolve(message);
          return deferred.promise;
        }

        const SECRET_KEY =
          global.settings.tapPaymentGatewayMode === "L"
            ? global.settings.tapPaymentGatewayLiveSecrectKey
            : global.settings.tapPaymentGatewayTestSecrectKey;

        // const SECRET_KEY = "sk_live_UVOCZAbztd4TxePcFSpaWLQY";

        const HEADERS = {
          Authorization: `Bearer ${SECRET_KEY}`,
          "Content-Type": "application/json",
          Accept: "application/json",
        };
        const applePayToken = JSON.parse(tokenStr);

        const tokenPayload = {
          type: "applepay",
          token_data: applePayToken,
        };

        const tokenResponse = await axios.post(
          "https://api.tap.company/v2/tokens",
          tokenPayload,
          { headers: HEADERS }
        );

        if (!tokenResponse.data || !tokenResponse.data.id) {
          message.message = "Failed to create Tap Apple Pay token";
          message.status = 0;
          deferred.resolve(message);
          return deferred.promise;
        }

        const tapTokenId = tokenResponse.data.id;

        const chargePayload = {
          amount: parseFloat(amt),
          currency: "KWD",
          customer_initiated: true,
          threeDSecure: true,
          save_card: false,
          description: "apple pay payment",
          receipt: {
            email: false,
            sms: false,
          },
          customer: {
            id: passengerInfo.customerTapPaymentId,
          },
          merchant: {
            id: "32475487",
          },
          source: {
            id: tapTokenId,
          },
          metadata: {
            passenger_id,
            amount: amt,
            payment_type: "APPLE_PAY",
          },
        };

        const response = await axios.post(
          "https://api.tap.company/v2/charges",
          chargePayload,
          { headers: HEADERS }
        );

        if (response.data.status === "CAPTURED") {
          const chargeData = response.data;

          const paymentToken = chargeData.id;
          const paymentId = chargeData.reference.track;

          var sourceObj = response.data.source ? response.data.source : {};
          var cardObj = response.data.card ? response.data.card : {};

          const walletUpdate = await update_wallet_logs(
            q,
            parseInt(passenger_id),
            parseFloat(amt),
            0,
            "",
            8,
            paymentToken,
            paymentId,
            sourceObj,
            cardObj
          );
          if (walletUpdate.status === 1) {
            message.message = req.__("PaymentSuceesWalletUpdate");
            message.status = 1;
          } else {
            message.message = req.__("PaymentSuccessNoWallet");
            message.status = -1;
          }

          deferred.resolve(message);
          return deferred.promise;
        } else {
          message.message = "Apple Pay payment failed";
          message.status = 0;
          message.detail = response.data;
          deferred.resolve(message);
          return deferred.promise;
        }
      }

      message.message = "Payment gateway disabled";
      message.status = 0;
      deferred.resolve(message);
      return deferred.promise;
    } catch (err) {
      console.error("Apple Pay ERROR:", err);

      message.message = "Apple Pay payment failed";
      message.status = 0;

      deferred.resolve(message);
      return deferred.promise;
    }
  }
};

exports.checkout_tap_sdk_wallet = async function (q, req) {
  let inputParams = req.body;
  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  //var hostname = global.settings.base_url;
  var hostname = req.headers.host;
  var protocol = req.headers.protocol;

  //console.log('protocol',protocol);

  if (protocol == undefined) protocol = "http://";

  var validate_error = ValidateAddWallet(q, inputParams);

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
      var amt = inputParams.amt;
      var tapTransactionId = inputParams.tapTransactionId;
      var paymentType = inputParams.paymentType;

      if (global.settings.tapPaymentGatewayStatus) {
        let passengerInfo = await shared.getPassengerId(passenger_id);
        console.error("passengerInfo : ", passengerInfo);
        if (
          !passengerInfo ||
          Object.keys(passengerInfo).length <= 0 ||
          !passengerInfo.hasOwnProperty("customerTapPaymentId")
        ) {
          message.message =
            "Failed to update. customerTapPaymentId is missing.";
          message.detail = {};
          message.status = 0;
          deferred.resolve(message);
          return deferred.promise;
        }

        var payType =
          paymentType === "wallet"
            ? "direct wallet recharge"
            : "trip requested recharge";

        update_wallet_logs(
          q,
          parseInt(passenger_id),
          parseFloat(amt),
          0,
          "",
          8,
          payType,
          tapTransactionId
        )
          .then(function (walletupdateresults) {
            message.message = "Wallet recharged successfully";
            message.status = 1;
            deferred.resolve(message);
          })
          .catch((err) => {
            message.message = "Wallet update failed";
            message.status = 0;
            deferred.resolve(message);
          });

        return deferred.promise;
      }
    } catch (err) {
      message.message = "Something went wrong! Please try again.";
      message.status = 0;
      deferred.resolve(message);
      return deferred.promise;
    }
  }
};

//Ramya july 23 2024

function update_wallet_logs(
  q,
  passenger_id,
  add_amt,
  negative,
  trip_id,
  recharge_type,
  paymentType = "",
  tapTransactionId = "",
  sourceObj = {},
  cardObj = {}
) {
  console.error("calling");
  var deferred = q.defer();
  var details = {};
  apimodel_three
    .get_passenger_details(q, passenger_id)
    .then(function (detailresults) {
      if (detailresults.length > 0) {
        try {
          var current_wallet_amount =
            typeof detailresults[0].wallet_amount != "undefined"
              ? detailresults[0].wallet_amount
              : 0;
          var update_wallet_amt = 0;
          var additional_amt = 0;

          // console.error(current_wallet_amount);

          if (negative == 1) {
            update_wallet_amt = current_wallet_amount - add_amt;
            additional_amt = -add_amt;
          } else {
            update_wallet_amt = current_wallet_amount + add_amt;
            additional_amt = add_amt;
          }

          var updateArray = {
            wallet_amount: parseFloat(update_wallet_amt),
            last_wallet_update: new Date(),
          };
        } catch (err) {
          console.log(err);
        }

        apimodel_three
          .update_passenger(q, updateArray, passenger_id)
          .then(function (detailresults) {
            if (recharge_type == "") {
              recharge_type = 4;
            }
            var insert_array = {
              passenger_id: parseInt(passenger_id),
              change_amount: parseFloat(add_amt),
              wallet_amount: parseFloat(update_wallet_amt),
              created_date: new Date(),
              created_by: parseInt(passenger_id),
              recharge_type: parseInt(recharge_type),
              trip_id: trip_id ? parseInt(trip_id) : "",
              paid_status: parseInt(1),
            };

            /* Sasidharan Nov 3 2022 */
            if (paymentType != "" && tapTransactionId != "") {
              insert_array["paymentType"] = paymentType;
              insert_array["tapTransactionId"] = tapTransactionId;
            }
            //ramya march 2 2026
            if (sourceObj && Object.keys(sourceObj).length > 0) {
              insert_array["payment_source"] = sourceObj;
            }

            if (cardObj && Object.keys(cardObj).length > 0) {
              insert_array["card_details"] = cardObj;
            }

            apimodel_three
              .insert_wallet_logs(q, insert_array)
              .then(function (detailresults) {
                details.status = 1;
                deferred.resolve(details);
                deferred.makeNodeResolver();
                time_interval = null;
              });
          });
      } else {
        details.status = 0;
        deferred.resolve(details);
        deferred.makeNodeResolver();
        time_interval = null;
      }
    });

  return deferred.promise;
}

// Ramya July 22 2025 estimate fare wallet recharge
exports.estimate_fare_payment = async function (q, req) {
  let inputParams = req.body;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  var validate_error = ValidateEstimateFarePayment(q, inputParams);

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
      const { estimate_fare, passenger_id } = inputParams;
      const amount = parseFloat(estimate_fare);

      if (!global.settings.tapPaymentGatewayStatus) {
        message.message = "Tap Payment Gateway is disabled.";
        message.status = -1;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        return deferred.promise;
      }
      let customerIdRes = await apimodel_three.getPassengerCustomerId(
        passenger_id
      );
      let customerId = customerIdRes.customerTapPaymentId;

      if (!customerId) {
        message.message = req.__("customerNotFound");
        message.status = -1;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        return deferred.promise;
      }

      const SECRET_KEY =
        global.settings.tapPaymentGatewayMode === "L"
          ? global.settings.tapPaymentGatewayLiveSecrectKey
          : global.settings.tapPaymentGatewayTestSecrectKey;

      const HEADERS = {
        Authorization: `Bearer ${SECRET_KEY}`,
        accept: "application/json",
        "content-type": "application/json",
      };

      // STEP 1: Get customer (includes saved cards & agreements)
      const customerURL = `https://api.tap.company/v2/customers/${customerId}`;
      const customerRes = await axios.get(customerURL, { headers: HEADERS });
      const customer = customerRes.data;

      if (!customer) {
        message.message = req.__("customerNotFound");
        message.status = -1;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        return deferred.promise;
      }
      if (!customer.cards) {
        message.message = req.__("NoSavedCard");
        message.status = -1;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        return deferred.promise;
      }

      // Use the default card
      const defaultCard = customer.cards.find((c) => c.default);
      if (!defaultCard) {
        message.message = req.__("NODefaultCard");
        message.status = -1;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        return deferred.promise;
      }

      // Get latest payment_agreement
      let paymentAgreementId = "";
      if (customer && customer.payment_agreements) {
        customer.payment_agreements.map((card) => {
          console.log("card : ", card);
          console.error("card.contract.id : ", card.contract.id);
          console.error("customer.cards.id : ", defaultCard.id);
          if (card.contract.id === defaultCard.id) {
            paymentAgreementId = card.id;
          }
        });
      }
      if (!paymentAgreementId) {
        message.message = req.__("NoAgreementId");
        message.status = -1;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        return deferred.promise;
      }

      // STEP 2: Create a one-time token from saved card (MIT requires token, not card ID)
      let tokenInfo = {
        saved_card: {
          card_id: defaultCard.id,
          customer_id: customerId,
        },
      };
      const tokenRes = await axios.post(
        "https://api.tap.company/v2/tokens",
        tokenInfo,
        { headers: HEADERS }
      );
      const tokenId = tokenRes.data.id;
      console.log("______________________tokenId : ", tokenId);
      if (!tokenId) throw new Error("Failed to create token from saved card.");

      // STEP 3: Perform MIT charge
      let reqData = {
        amount: amount,
        currency: global.settings.site_currency,
        customer_initiated: false,
        save_card: false,
        source: { id: tokenId },
        customer: { id: customerId },
        payment_agreement: { id: paymentAgreementId },
        metadata: {
          amount: amount,
          passengerId: passenger_id,
          type: "wallet",
        },
      };
      console.error("req data  : ", reqData);
      const chargeRes = await axios.post(
        "https://api.tap.company/v2/charges",
        reqData,
        { headers: HEADERS }
      );

      const chargeData = chargeRes.data;
      console.error("chargeData : ", chargeData);
      if (
        chargeData.status !== "CAPTURED" &&
        chargeData.status !== "AUTHORIZED"
      ) {
        message.message =
          "Payment failed: " +
          ((chargeData.response && chargeData.response.message) ||
            "Unknown error");
        message.status = 0;
        deferred.resolve(message);
        return deferred.promise;
      }

      // STEP 4: Update wallet
      const paymentToken = chargeData.id;
      const paymentId = chargeData.reference.track;
      var sourceObj = chargeData.source ? chargeData.source : {};
      var cardObj = chargeData.card ? chargeData.card : {};

      const walletUpdate = await update_wallet_logs(
        q,
        parseInt(passenger_id),
        parseFloat(amount),
        0,
        "",
        8,
        paymentToken,
        paymentId,
        sourceObj,
        cardObj
      );
      console.log("walletUpdate : ", walletUpdate);

      if (walletUpdate.status === 1) {
        message.message = req.__("PaymentSuceesWalletUpdate");
        message.status = 1;
      } else {
        message.message = req.__("PaymentSuccessNoWallet");
        message.status = -1;
      }
      deferred.resolve(message);
      return deferred.promise;
    } catch (err) {
      console.error(
        "MIT Wallet Error:",
        (err.response && err.response.data) || err.message
      );
      message.message = "Payment failed due to system error.";
      message.status = -1;
      deferred.resolve(message);
      return deferred.promise;
    }
  }
};

exports.passenger_wallet_history = function (q, req) {
  var deferred = q.defer();

  let inputParams = req.body;

  let message = {
    message: "",
    status: 0,
  };

  //var hostname = req.headers.host;
  var hostname = global.settings.base_url;
  var appRoot = global.settings.docroot;

  var validate_error = validateWalletHistory(q, inputParams);

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
    console.error("input params : ", inputParams);
    apimodel.passenger_profile_by_id(q, userid).then(function (checkresults) {
      console.error("checkresults : ", checkresults);
      if (checkresults.length > 0) {
        var wallet_amount = checkresults[0].wallet_amount;
        var last_wallet_update = checkresults[0].last_wallet_update;
        var reward_points = checkresults[0].reward_points;

        /* Sasidharan May 24 2023 */
        var discount_wallet = checkresults[0].discount_wallet;

        var wallet_amount_list = [5, 10, 20, 30];

        var details = {};
        apimodel
          .getPassengerWalletLog(q, userid, start, limit)
          .then(function (walletresults) {
            console.error("walletresults : ", walletresults);
            if (walletresults.length > 0) {
              var i = 0;
              walletresults.forEach(function (element) {
                try {
                  walletresults[i].recharge_type = recharge_type_msg(
                    req,
                    element.recharge_type
                  );
                  walletresults[i].created_date =
                    element.created_date.format("Y-m-d h:i:s A");
                  walletresults[i].paid_status = req.__("success");
                  walletresults[i].paid = parseInt(1);

                  if (element.created_by == 1)
                    walletresults[i].created_by = req.__("admin_label");
                  else walletresults[i].created_by = req.__("yourself_label");

                  delete walletresults[i]._id;
                  delete walletresults[i].id;

                  i++;
                } catch (err) {
                  console.log(err);
                }
              });
              console.error("------ calling sucess ----");
              message.message = req.__("success");
              message.detail = walletresults;
              message.wallet_amount = wallet_amount;
              message.last_wallet_update = last_wallet_update;
              message.wallet_amount_list = wallet_amount_list;
              message.reward_points = reward_points;
              message.discount_wallet = discount_wallet;
              message.status = 1;
              deferred.resolve(message);
              deferred.makeNodeResolver();
              message = null;
            } else {
              message.detail = [];
              message.wallet_amount = wallet_amount;
              message.last_wallet_update = last_wallet_update;
              message.wallet_amount_list = wallet_amount_list;
              message.reward_points = reward_points;
              message.discount_wallet = discount_wallet;
              message.message = req.__("no_data");
              message.status = 1;
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

// ramya mar 2 2026 -  this API is for new UI design with all transaction, cerdit , debit tabs.
exports.passenger_wallet_history_credit_debit = function (q, req) {
  var deferred = q.defer();

  let inputParams = req.body;

  let message = {
    message: "",
    status: 0,
  };

  //var hostname = req.headers.host;
  var hostname = global.settings.base_url;
  var appRoot = global.settings.docroot;

  var validate_error = validateWalletHistory(q, inputParams);

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
    var transaction_type = inputParams.transaction_type; // added now. value 0 means all transaction, 1 means credit,  2 means debit

    apimodel.passenger_profile_by_id(q, userid).then(function (checkresults) {
      console.error("checkresults : ", checkresults);
      if (checkresults.length > 0) {
        var wallet_amount = checkresults[0].wallet_amount;
        var last_wallet_update = checkresults[0].last_wallet_update;
        var reward_points = checkresults[0].reward_points;

        /* Sasidharan May 24 2023 */
        var discount_wallet = checkresults[0].discount_wallet;

        var wallet_amount_list = [5, 10, 20, 30];

        var details = {};
        apimodel
          .getPassengerWalletLogCreditDbeit(
            q,
            userid,
            start,
            limit,
            transaction_type
          )
          .then(function (walletresults) {
            console.error("walletresults : ", walletresults);
            if (walletresults.length > 0) {
              var i = 0;
              walletresults.forEach(function (element) {
                try {
                  walletresults[i].recharge_type = recharge_type_msg(
                    req,
                    element.recharge_type
                  );
                  walletresults[i].created_date =
                    common.convert_timezone_wallet_history(
                      element.created_date
                    );
                  walletresults[i].paid_status = req.__("success");
                  walletresults[i].paid = parseInt(1);

                  if (element.created_by == 1)
                    walletresults[i].created_by = req.__("admin_label");
                  else walletresults[i].created_by = req.__("yourself_label");

                  delete walletresults[i]._id;
                  delete walletresults[i].id;

                  i++;
                } catch (err) {
                  console.log(err);
                }
              });
              console.error("------ calling sucess ----");
              message.message = req.__("success");
              message.detail = walletresults;
              message.wallet_amount = wallet_amount;
              message.last_wallet_update = last_wallet_update;
              message.wallet_amount_list = wallet_amount_list;
              message.reward_points = reward_points;
              message.discount_wallet = discount_wallet;
              message.status = 1;
              deferred.resolve(message);
              deferred.makeNodeResolver();
              message = null;
            } else {
              message.detail = [];
              message.wallet_amount = wallet_amount;
              message.last_wallet_update = last_wallet_update;
              message.wallet_amount_list = wallet_amount_list;
              message.reward_points = reward_points;
              message.discount_wallet = discount_wallet;
              message.message = req.__("no_data");
              message.status = 1;
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

exports.redeem_rewards = function (q, req) {
  let inputParams = req.body;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };
  //var hostname = global.settings.base_url;

  var validate_error = ValidateRedeemRewards(q, inputParams);

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
      var reward_kwd = global.settings.reward_kwd;
      var minimum_reward_request = global.settings.minimum_reward_request;

      var passenger_id = inputParams.passenger_id;
      var redeem_points = inputParams.redeem_points;

      apimodel
        .passenger_profile_by_id(q, passenger_id)
        .then(function (checkresults) {
          if (checkresults.length > 0) {
            var reward_points = checkresults[0].reward_points;
            var wallet_amount = checkresults[0].wallet_amount;
            var discount_wallet = checkresults[0].discount_wallet;
            //var last_wallet_update =checkresults[0].last_wallet_update;

            if (
              reward_points >= minimum_reward_request &&
              redeem_points >= minimum_reward_request &&
              reward_points >= redeem_points
            ) {
              var wallet_money = redeem_points * reward_kwd;
              add_wallet_money = wallet_money.toFixed(2);

              //console.log(wallet_amount,'-----');

              // var update_wallet_amt = parseFloat(wallet_amount) + parseFloat(add_wallet_money);

              // var update_array = {'$inc':{'wallet_amount':parseFloat(add_wallet_money),'reward_points': -redeem_points },'$set':{'last_wallet_update':new Date()}};

              var discount_wallet_with_reedem_amount =
                parseFloat(discount_wallet) + parseFloat(add_wallet_money);
              var update_discount_wallet = parseFloat(add_wallet_money);

              var update_array = {
                $inc: {
                  discount_wallet: parseFloat(update_discount_wallet),
                  reward_points: -redeem_points,
                },
                $set: { last_discount_wallet_update: new Date() },
              };

              //console.log(update_array);
              apimodel
                .update_trip_reward(q, update_array, passenger_id)
                .then(function (result) {
                  var insert_array = {
                    passenger_id: parseInt(passenger_id),
                    change_amount: parseFloat(add_wallet_money),
                    // "wallet_amount":parseFloat(update_wallet_amt),

                    wallet_amount: parseFloat(
                      discount_wallet_with_reedem_amount
                    ),
                    discount_wallet_status: parseInt(1),

                    created_date: new Date(),
                    created_by: parseInt(passenger_id),

                    /* June 12 2023 */
                    recharge_type: parseInt(12),
                    paid_status: parseInt(1),
                    redeem_points: parseInt(redeem_points),
                    trip_id: 0,
                  };

                  //console.log(insert_array,'------');
                  apimodel_two
                    .insert_wallet_logs(q, insert_array)
                    .then(function (detailresults) {
                      //message.detail = detailresults;
                      message.status = 1;
                      message.message = req.__("redeem_sucessfully");
                      deferred.resolve(message);
                      deferred.makeNodeResolver();
                    });
                });
            } else {
              message.message = req.__("your_redeem_points_too_low");
              message.status = -1;
              deferred.resolve(message);
              deferred.makeNodeResolver();
              message = null;
            }
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

// Customization
exports.wallet_card_list = function (q, req) {
  var deferred = q.defer();

  let inputParams = req.body;

  let message = {
    message: "",
    status: 0,
  };

  //var hostname = req.headers.host;
  var hostname = global.settings.base_url;
  var appRoot = global.settings.docroot;

  var validate_error = validateWalletHistory(q, inputParams);

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

    apimodel.passenger_profile_by_id(q, userid).then(function (checkresults) {
      if (checkresults.length > 0) {
        var wallet_amount = checkresults[0].wallet_amount;
        var card_details = checkresults[0].creditcard_details;

        var default_carddetails = [];
        var all_carddetails = [];

        if (card_details.length > 0) {
          var i = 0;
          card_details.forEach(function (element) {
            let buff = Buffer.from(element.creditcard_no, "base64");
            let card_no = buff.toString("ascii");
            if (element.default_card == 1) {
              default_carddetails.push({
                passenger_cardid: element.passenger_cardid,
                plain_creditcard_no: cc_format(card_no),
                card_holder_name: element.card_holder_name,
              });
              return default_carddetails;
            } else {
              all_carddetails.push({
                passenger_cardid: element.passenger_cardid,
                plain_creditcard_no: cc_format(card_no),
                card_holder_name: element.card_holder_name,
              });
              return all_carddetails;
            }
            i++;
          });
          message.message = req.__("success");
          message.default_carddetails = default_carddetails;
          message.all_carddetails = all_carddetails;
          message.wallet_amount = wallet_amount;
          message.status = 1;
          deferred.resolve(message);
          deferred.makeNodeResolver();
          message = null;
        } else {
          message.message = req.__("no_data");
          message.default_carddetails = [];
          message.all_carddetails = [];
          message.wallet_amount = wallet_amount;
          message.status = 1;
          deferred.resolve(message);
          deferred.makeNodeResolver();
          message = null;
        }
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

exports.New_phone_number_update = async function (q, req) {
  let inputParams = req.body;
  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  var validate_error = ValidateNewNumberUpdate(q, inputParams);

  if (validate_error != undefined) {
    if (validate_error[0]) {
      message.message = validate_error[0];
      message.status = -1;
      deferred.resolve(message);
      deferred.makeNodeResolver();
      message = null;
      return deferred.promise;
    } else {
      message.message = req.__("validation_error");
      message.status = -1;
      deferred.resolve(message);
      deferred.makeNodeResolver();
      message = null;
      return deferred.promise;
    }
  }

  try {
    const { new_number, existing_number } = inputParams;

    // 1️ check if new number already exists
    let newNumberExists = await apimodel_three.check_new_number_exists(
      new_number
    );

    if (newNumberExists) {
      message.message = "New number already exists.";
      message.status = -1;
      deferred.resolve(message);
      return deferred.promise;
    }

    // 2️ Check if existing number exists
    let existingNumberData = await apimodel_three.check_existing_number_exists(
      existing_number
    );

    if (!existingNumberData) {
      message.message = "Existing number not found.";
      message.status = -1;
      deferred.resolve(message);
      return deferred.promise;
    }

    // 3 Update passenger phone number
    let updateStatus = await apimodel_three.update_passenger_phone(
      existing_number,
      new_number
    );

    if (updateStatus.modifiedCount > 0) {
      message.message = "Phone number updated successfully.";
      message.status = 1;
    } else {
      message.message =
        "No changes made. Please check the details / Contact our technical team.";
      message.status = 0;
    }

    deferred.resolve(message);
    return deferred.promise;
  } catch (err) {
    console.error(
      "update error:",
      (err.response && err.response.data) || err.message
    );
    message.message =
      "Updation failed due to a system error. Please contact the technical team.";
    message.status = -1;
    deferred.resolve(message);
    return deferred.promise;
  }
};

// ramya oct 15 2025 (block user and update number)
exports.block_new_number_ifExists = async function (q, req) {
  let inputParams = req.body;
  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  var validate_error = ValidateNewNumberUpdate(q, inputParams);

  if (validate_error != undefined) {
    if (validate_error[0]) {
      message.message = validate_error[0];
      message.status = -1;
      deferred.resolve(message);
      deferred.makeNodeResolver();
      message = null;
      return deferred.promise;
    } else {
      message.message = req.__("validation_error");
      message.status = -1;
      deferred.resolve(message);
      deferred.makeNodeResolver();
      message = null;
      return deferred.promise;
    }
  }

  try {
    const { new_number, existing_number } = inputParams;

    // 1️ Check if new number exists
    let newNumberPassenger = await apimodel_three.check_new_number_exists(
      new_number
    );

    if (newNumberPassenger) {
      // 2️ If new number already exists, set user_status = "PB"
      await apimodel_three.block_passenger_with_number(new_number);
    }

    // 3️ Check if existing number exists
    let existingPassenger = await apimodel_three.check_existing_number_exists(
      existing_number
    );

    if (!existingPassenger) {
      message.message = "Existing number not found.";
      message.status = -1;
      deferred.resolve(message);
      return deferred.promise;
    }

    // 4️ Update existing passenger phone number with the new number
    let updateStatus = await apimodel_three.update_passenger_phone(
      existing_number,
      new_number
    );

    if (updateStatus.modifiedCount > 0) {
      message.message = "Phone number updated successfully.";
      message.status = 1;
    } else {
      message.message =
        "No changes made. Please check the details / Contact our technical team.";
      message.status = 0;
    }

    deferred.resolve(message);
    return deferred.promise;
  } catch (err) {
    console.error(
      "update error:",
      (err.response && err.response.data) || err.message
    );
    message.message =
      "Updation failed due to a system error. Please contact the technical team.";
    message.status = -1;
    deferred.resolve(message);
    return deferred.promise;
  }
};

exports.estimated_fare_savecard_checkoutsdk = async function (q, req) {
  let inputParams = req.body;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  var validate_error = ValidateSavecardCheckoutsdk(q, inputParams);

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
      const { amt, passenger_id, customerTapPaymentId, card_id } = inputParams;
      let trip_id = inputParams.trip_id ? inputParams.trip_id : 1234;

      const amount = parseFloat(amt);

      if (!global.settings.tapPaymentGatewayStatus) {
        message.message = "Tap Payment Gateway is disabled.";
        message.status = -1;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        return deferred.promise;
      }

      let customerId = customerTapPaymentId;

      const SECRET_KEY =
        global.settings.tapPaymentGatewayMode === "L"
          ? global.settings.tapPaymentGatewayLiveSecrectKey
          : global.settings.tapPaymentGatewayTestSecrectKey;

      const HEADERS = {
        Authorization: `Bearer ${SECRET_KEY}`,
        accept: "application/json",
        "content-type": "application/json",
      };

      // STEP 1: Get customer (includes saved cards & agreements)
      const customerURL = `https://api.tap.company/v2/customers/${customerId}`;
      const customerRes = await axios.get(customerURL, { headers: HEADERS });
      const customer = customerRes.data;

      if (!customer) {
        message.message = req.__("customerNotFound");
        message.status = -1;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        return deferred.promise;
      }
      if (!customer.cards) {
        message.message = req.__("NoSavedCard");
        message.status = -1;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        return deferred.promise;
      }

      // Get latest payment_agreement
      let paymentAgreementId = "";
      if (customer && customer.payment_agreements) {
        customer.payment_agreements.map((card) => {
          console.log("card : ", card);
          console.error("card.contract.id : ", card.contract.id);
          console.error("customer.cards.id : ");
          if (card.contract.id === card_id) {
            paymentAgreementId = card.id;
          }
        });
      }
      if (!paymentAgreementId) {
        message.message = req.__("NoAgreementId");
        message.status = -1;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        return deferred.promise;
      }

      // STEP 2: Create a one-time token from saved card
      let tokenInfo = {
        saved_card: {
          card_id: card_id,
          customer_id: customerId,
        },
      };
      const tokenRes = await axios.post(
        "https://api.tap.company/v2/tokens",
        tokenInfo,
        { headers: HEADERS }
      );
      const tokenId = tokenRes.data.id;
      console.log("______________________tokenId : ", tokenId);
      if (!tokenId) throw new Error("Failed to create token from saved card.");

      // STEP 3: Perform MIT charge
      let reqData = {
        amount: amount,
        currency: global.settings.site_currency,
        customer_initiated: false,
        save_card: false,
        source: { id: tokenId },
        customer: { id: customerId },
        payment_agreement: { id: paymentAgreementId },
        metadata: {
          amount: amount,
          passengerId: passenger_id,
          type: "wallet",
        },
      };
      console.error("req data  : ", reqData);
      const chargeRes = await axios.post(
        "https://api.tap.company/v2/charges",
        reqData,
        { headers: HEADERS }
      );

      const chargeData = chargeRes.data;
      console.error("chargeData : ", chargeData);
      if (
        chargeData.status !== "CAPTURED" &&
        chargeData.status !== "AUTHORIZED"
      ) {
        message.message =
          "Payment failed: " +
          ((chargeData.response && chargeData.response.message) ||
            "Unknown error");
        message.status = 0;
        deferred.resolve(message);
        return deferred.promise;
      }

      // STEP 4: Update wallet
      const paymentToken = chargeData.id;
      const paymentId = chargeData.reference.track;
      var sourceObj = chargeData.source ? chargeData.source : {};
      var cardObj = chargeData.card ? chargeData.card : {};

      // const walletUpdate = await update_wallet_logs(
      //   q,
      //   parseInt(passenger_id),
      //   parseFloat(amount),
      //   0,
      //   "",
      //   8,
      //   paymentToken,
      //   paymentId
      // );
      // console.log("walletUpdate : ", walletUpdate);

      // if (walletUpdate.status === 1) {
      //   message.message = req.__("PaymentSuceesWalletUpdate");
      //   message.status = 1;
      // } else {
      //   message.message = req.__("PaymentSuccessNoWallet");
      //   message.status = -1;
      // }

      var insert_array = {
        passenger_id: parseInt(passenger_id),
        change_amount: parseFloat(amt),
        wallet_amount: parseFloat(0),
        created_date: new Date(),
        created_by: parseInt(passenger_id),
        recharge_type: parseInt(4),
        trip_id: trip_id,
        paid_status: parseInt(0),
        paymentToken: paymentToken,
        paymentId: paymentId,
        payment_source: sourceObj,
        card_details: cardObj,
      };

      apimodel_two
        .insert_wallet_logs(q, insert_array)
        .then(function (detailresults) {});

      message.message = req.__("PaymentSuceesWalletUpdate");
      message.status = 1;
      deferred.resolve(message);
      return deferred.promise;
    } catch (err) {
      console.error(
        "MIT Wallet Error:",
        (err.response && err.response.data) || err.message
      );
      message.message = "Payment failed due to system error.";
      message.status = -1;
      deferred.resolve(message);
      return deferred.promise;
    }
  }
};

// exports.saveCardWithCharge = async function (
//   passenger_id,
//   customerId,
//   tokenId,
//   amount = 1
// ) {
//   try {
//     const SECRET_KEY =
//       global.settings.tapPaymentGatewayMode === "L"
//         ? global.settings.tapPaymentGatewayLiveSecrectKey
//         : global.settings.tapPaymentGatewayTestSecrectKey;

//     const HEADERS = {
//       Authorization: `Bearer ${SECRET_KEY}`,
//       "content-type": "application/json",
//     };

//     const payload = {
//       amount: amount,
//       currency: "KWD",
//       threeDSecure: true,
//       save_card: true,
//       description: "Card Save Authorization",
//       statement_descriptor: "MyApp SaveCard",
//       customer: {
//         id: customerId,
//       },
//       source: {
//         id: tokenId,
//       },
//       redirect: {
//         url: `${global.settings.tapPaymentGatewayPaymentBaseURL}/processPayment/walletInitiate`,
//       },
//       post: {
//         url: `${global.settings.tapPaymentGatewayPaymentBaseURL}/processPayment/walletInitiateSaveCard`,
//       },
//       metadata: {
//         purpose: "save_card",
//         passenger_id: passenger_id,
//         amount: amount,
//       },
//     };

//     const response = await axios.post(
//       "https://api.tap.company/v2/charges",
//       payload,
//       { headers: HEADERS }
//     );

//     if (response.data.transaction && response.data.transaction.url) {
//       return {
//         status: 1,
//         message: "Redirect user for 3DS authentication",
//         redirect_url: response.data.transaction.url,
//         charge_id: response.data.id,
//       };
//     }

//     // If charge is successful immediately
//     return {
//       status: 1,
//       message: "Card saved successfully",
//       charge: response.data,
//     };
//   } catch (err) {
//     console.error(
//       "saveCardWithCharge error:",
//       err.response?.data || err.message
//     );
//     return {
//       status: 0,
//       message: "Failed to save card",
//       error: err.response?.data || err.message,
//     };
//   }
// };

function ValidateNewNumberUpdate(q, input) {
  var constraints = {
    new_number: {
      presence: { allowEmpty: false, message: "not empty" },
    },

    existing_number: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function ValidateSaveCard(q, input) {
  var constraints = {
    customerId: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    passengerId: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function ValidateWalletRecharge(q, input) {
  var constraints = {
    amount: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    customerId: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    variable1: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    variable2: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function ValidateEstimateFarePayment(q, input) {
  var constraints = {
    passenger_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },

    estimate_fare: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

//ramya july 21 2026
function ValidatetapId(q, input) {
  var constraints = {
    tapId: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function ValidateSavecardCheckoutsdk(q, input) {
  var constraints = {
    passenger_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },

    amt: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    customerTapPaymentId: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    card_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function ValidateRedeemRewards(q, input) {
  var constraints = {
    passenger_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    redeem_points: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function ValidateAddWallet(q, input) {
  var constraints = {
    passenger_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    amt: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function validateWalletHistory(q, input) {
  var constraints = {
    passenger_id: {
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
      // recharge_type_msg = req.__("knet_payment");
      /* Sasidharan June 28 2024 */
      recharge_type_msg = req.__("online_payment");
      break;
    case 12:
      recharge_type_msg = req.__("points_redeem");
      break;
    default:
      recharge_type_msg = req.__("manual_pay");
      break;
  }

  return recharge_type_msg;
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
