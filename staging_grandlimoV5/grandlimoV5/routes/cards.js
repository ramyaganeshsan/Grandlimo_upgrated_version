var express = require("express");
var router = express.Router();
var apimodel = require("../models/apimodel.js");
const tapPaymentGateway = require("../utils/tapPaymentGateway.js");
const shared = require("../utils/shared.js");
const walletlibv1 = require("../lib_v1/passenger/wallet.js");
const axios = require("axios");
var i18n = require("i18n");

const getImage = (name) => {
  var url = `${global.settings.base_url}/public/images/defaultcard.png`;
  if (!name) return url;

  try {
    name = name.split(" ").join("").toLowerCase();

    if (name.includes("visa")) {
      url = `${global.settings.base_url}/public/images/visa.png`;
    } else if (name.includes("mastercard") || name.includes("maestro")) {
      url = `${global.settings.base_url}/public/images/mastercard.png`;
    } else if (name.includes("americanexpress") || name.includes("amex")) {
      url = `${global.settings.base_url}/public/images/americanexpress.png`;
    } else if (name.includes("mada")) {
      url = `${global.settings.base_url}/public/images/mada.png`;
    } else if (name.includes("knet")) {
      url = `${global.settings.base_url}/public/images/knettap.png`;
    }
  } catch (err) {
    console.error(err);
  }

  return url;
};

module.exports = function (app) {
  /* Get all user cards */
  router.get("/getMyCards", async (req, res) => {
        if (req && req.query && req.query.lang) req.setLocale(req.query.lang);

    let { passenger_id, start = 0, end = 10 } = req.query;

    start = isNaN(start) ? 0 : +start;
    end = isNaN(end) ? 10 : +end;

    if (!passenger_id) {
      return res.send({
        status: 0,
        message: req.__("invalid_request") || "Invalid request",
        data: [],
      });
    }

    let passengerDetails = await apimodel.getPassengerCustomerId(passenger_id);
    if (!passengerDetails) {
      return res.send({
        status: 0,
        message: req.__("passenger_not") || "Passenger details not found.",
        data: [],
      });
    }

    if (passengerDetails && !passengerDetails["customerTapPaymentId"]) {
      passengerDetails = await shared.getPassengerId(passenger_id);
      if (passengerDetails && Object.keys(passengerDetails).length > 0) {
        return res.send({
          status: -1,
          message: "",
          data: [],
          customerId: passengerDetails["customerTapPaymentId"],
        });
      } else {
        return res.send({
          status: 0,
          message: req.__("customer_id_not") || "Failed to generate customer ID.",
          data: [],
        });
      }
    }

    /* Sasidharan May 06 2024 */
    let cardDetails = await tapPaymentGateway.getCustomerInfo(
      passengerDetails["customerTapPaymentId"],
      start,
      end
    );

    if (!cardDetails || !cardDetails.cards) {
      cardDetails = [];
    } else {
      cardDetails = cardDetails.cards;
    }
    // let cardDetails = await tapPaymentGateway.getMyCards(
    //   passengerDetails["customerTapPaymentId"],
    //   start,
    //   end
    // );
    // if (!cardDetails || !cardDetails.data) {
    //   cardDetails = [];
    // } else {
    //   cardDetails = cardDetails.data;
    // }
    // cardDetails = cardDetails.map((card) => {
    //   return {
    //     id: card.id,
    //     type: card.brand,
    //     number: card.last_four,
    //     image: getImage(card.brand),
    //   };
    // });

    if (cardDetails.length == 1) {
      cardDetails = cardDetails.map((card) => {
        return {
          id: card.id,
          type: card.brand,
          number: card.last_four,
          default: card.default.toString() === "true" ? 1 : 0,
expiryMonth: card.expiry.month,
          expiryYear: card.expiry.year,
          image: getImage(card.brand),
        };
      });
    } else {
      cardDetails = cardDetails.map((card) => {
        return {
          id: card.id,
          type: card.brand,
          number: card.last_four,
          default: card.default.toString() === "true" ? 1 : 0,
expiryMonth: card.expiry.month,
          expiryYear: card.expiry.year,
          image: getImage(card.brand),
        };
      });
    }

    // console.error("======== CUSTOMER CARD DETAILS ========");
    // console.error(cardDetails);
    // console.error("======== CUSTOMER CARD DETAILS END ========");

    // let cardDetails = await apimodel.getCustomerCards(passenger_id);
    // if (!cardDetails) {
    //   cardDetails = [];
    // }

    // cardDetails = cardDetails.map((card) => {
    //   return {
    //     id: card.id,
    //     type: card.type,
    //     number: card.number,
    //     image: getImage(card.type),
    //   };
    // });

    if (cardDetails.length > 0) {
      cardDetails.sort((a, b) => b.default - a.default);
    }

    res.send({
      status: cardDetails.length > 0 ? 1 : -1,
      message: "",
      data: cardDetails,
      customerId: passengerDetails["customerTapPaymentId"],
    });
  });

  

router.post("/deleteMyCard", async (req, res) => {
  try {
    console.error("req.query.lang:", req.query.lang);

    // ✅ Force-set the locale based on query param (?lang=ar or ?lang=en)
    if (req && req.query && req.query.lang) {
  req.setLocale(req.query.lang);
}

    // ✅ Debug current locale
    console.error("Active locale:", req.getLocale());

    const { passengerId, cardId } = req.body;

    // ✅ Validate input
    if (!passengerId || !cardId) {
      return res.send({
        status: 0,
        message: req.__("invalid_request") || "Invalid request",
        data: [],
      });
    }

    // ✅ Get passenger details
    const passengerDetails = await apimodel.getPassengerCustomerId(passengerId);
    if (!passengerDetails) {
      return res.send({
        status: 0,
        message: req.__("passenger_not_found") || "Passenger details not found.",
      });
    }

    // ✅ Validate Tap Payment ID
    if (!passengerDetails["customerTapPaymentId"]) {
      return res.send({
        status: 0,
        message: req.__("invalid_request") || "Invalid request",
      });
    }

    // ✅ Call Tap Payment Gateway delete method
    const response = await tapPaymentGateway.deleteMyCard(
      passengerDetails["customerTapPaymentId"],
      cardId
    );

    // ✅ Success response
    if (response && response.deleted) {
      // await apimodel.deleteCard(passengerId, cardId); // optional
      return res.send({
        status: 1,
        message: req.__("card_deleted") || "Card deleted successfully.",
      });
    }

    // ❌ Failed response
    return res.send({
      status: 0,
      message: req.__("card_deleted_failed") || "Failed to delete your card details.",
    });
  } catch (err) {
    console.error("Error in /deleteMyCard:", err);
    return res.send({
      status: 0,
      message: req.__("something_went_wrong") || "Something went wrong. Please try again.",
    });
  }
});


// router.post("/deleteMyCard", async (req, res) => {
  //   console.error("req.query.lang : ", req.query.lang);
  //   let { passengerId, cardId } = req.body;
  //   if (!passengerId || !cardId) {
  //     return res.send({
  //       status: 0,
  //       message: "Invalid request",
  //       data: [],
  //     });
  //   }

  //   let passengerDetails = await apimodel.getPassengerCustomerId(passengerId);
  //   if (!passengerDetails) {
  //     return res.send({
  //       status: 0,
  //       message: "Passenger details not found.",
  //     });
  //   }

  //   if (passengerDetails && !passengerDetails["customerTapPaymentId"]) {
  //     return res.send({
  //       status: 0,
  //       message: "Invalid request",
  //     });
  //   }

  //   let response = await tapPaymentGateway.deleteMyCard(
  //     passengerDetails["customerTapPaymentId"],
  //     cardId
  //   );

  //   if (response && response.deleted) {
  //     /* Sasidharan May 06 2024 */
  //     // await apimodel.deleteCard(passengerId, cardId);

  //     return res.send({
  //       status: 1,
  //       message: req.__("card_deleted"),
  //     });
  //   }

  //   return res.send({
  //     status: 0,
  //     // message: "Failed to delete your card details. Please try again later.",
  //     message: req.__("card_deleted_failed"),
  //   });
  // });



    router.post("/addCard", async (req, res) => {
    try {
      let { passengerId, cardDetails, customerId } = req.body;

      if (!cardDetails.id) {
        return res.send({
          status: 0,
          message: req.__("invalid_request"),
        });
      }

      let customer = await tapPaymentGateway.getCustomerInfo(customerId);
      console.error("customer : ", customer);
      if (!customer || Object.keys(customer).length <= 0) {
        await tapPaymentGateway.deleteMyCard(customerId, cardDetails.id);
        return res.send({
          status: 0,
          message: "Failed to add your card details.",
        });
      }

      // let paymentAgreementId = "";
      // if (customer && customer.payment_agreements) {
      //   customer.payment_agreements.map((card) => {
      //     if (card.contract.id === cardDetails.id) {
      //       paymentAgreementId = card.id;
      //       cardDetails["paymentAgreementId"] = paymentAgreementId;
      //     }
      //   });
      // }

      // if (!paymentAgreementId) {
      //   await tapPaymentGateway.deleteMyCard(customerId, cardDetails.id);
      //   return res.send({
      //     status: 0,
      //     message: "Failed to add your card details.",
      //   });
      // }

      // let response = await apimodel.addCard(passengerId, cardDetails);
      // if (response)
      //   return res.send({
      //     status: 1,
      //     message: "Your card details has been successfully added.",
      //   });
      // return res.send({
      //   status: 0,
      //   message: "Failed to add your card details.",
      // });

      // console.error("============ CUSTOMER ============");
      // console.error(customer.cards);
      // console.error("============ END CUSTOMER ============");

      let isAlreadyHaveDefaultCard = true;
      let cards = Array.isArray(customer.cards) ? customer.cards : [];
      isAlreadyHaveDefaultCard = cards.some(
        (card) => card.default.toString() == "true"
      );

      // console.error(cards, isAlreadyHaveDefaultCard);

      if (!isAlreadyHaveDefaultCard) {
        let response = await tapPaymentGateway.updateCustomerDefaultCard(
          customerId,
          cardDetails.id
        );

        await apimodel.updateCardStatus(customerId);

        if (response && Object.keys(response).length > 0)
          return res.send({
            status: 1,
            message: "Your card details has been successfully added.",
          });
        else await tapPaymentGateway.deleteMyCard(customerId, cardDetails.id);
        console.error(response);
        return res.send({
          status: 0,
          message: "Failed to add your card details.",
        });
      }

      // if (
      //   customer &&
      //   ((customer.cards && customer.cards.length == 0) ||
      //     typeof customer.cards === "undefined" ||
      //     (customer.cards && customer.cards.length == 1))
      // ) {
      //   let response = await tapPaymentGateway.updateCustomerDefaultCard(
      //     customerId,
      //     cardDetails.id
      //   );
      //   if (response && Object.keys(response).length > 0)
      //     return res.send({
      //       status: 1,
      //       message: "Your card details has been successfully added.",
      //     });
      //   else await tapPaymentGateway.deleteMyCard(customerId, cardDetails.id);
      //   return res.send({
      //     status: 0,
      //     message: "Failed to add your card details.",
      //   });
      // }
      return res.send({
        status: 1,
        message: "Your card details has been successfully added.",
      });
    } catch (err) {
      console.error(err);
      res.send({
        status: 0,
        message: "Failed to add your card details.",
      });
    }
  });

// ramya save card flow for new ios sdk

    router.post("/savecard", async (req, res) => {
      try {
        const { passengerId, customerId, tokenId, amount = 1 } = req.body;

        if (!customerId || !tokenId)
          return res.status(400).json({
            status: 0,
            message: "Customer ID and Token ID are required",
          });

        // ----------------------------
        // Inline saveCardWithCharge
        // ----------------------------
        const saveCardWithCharge = async () => {
          try {
            const SECRET_KEY =
              global.settings.tapPaymentGatewayMode === "L"
                ? global.settings.tapPaymentGatewayLiveSecrectKey
                : global.settings.tapPaymentGatewayTestSecrectKey;

            const HEADERS = {
              Authorization: `Bearer ${SECRET_KEY}`,
              "content-type": "application/json",
            };

            const payload = {
              amount,
              currency: "KWD",
              threeDSecure: true,
              save_card: true,
              description: "Card Save Authorization",
              statement_descriptor: "MyApp SaveCard",
              customer: { id: customerId },
              source: { id: tokenId },
              auto: {
                type: "VOID",
                time: 1,
              },
              redirect: {
                url: `${global.settings.tapPaymentGatewayPaymentBaseURL}/processPayment/walletInitiateAuth`,
              },
              post: {
                url: `${global.settings.tapPaymentGatewayPaymentBaseURL}/processPayment/walletInitiateSaveCard`,
              },
              metadata: {
                purpose: "save_card",
                passengerId,
                amount,
                customerId,
              },
            };

            const authorizeRes = await axios.post(
              "https://api.tap.company/v2/authorize",
              payload,
              { headers: HEADERS }
            );
  console.error("authrizeREs : ", authorizeRes)
            const data = authorizeRes.data;
  console.error("data : ", data)
            if (data && data.transaction && data.transaction.url) {
              return {
                status: 1,
                message:
                  "Card saved successfully. your amount will be refunded within 1 hour",
                redirect_url: data.transaction.url,
              };
            } else {
              return {
                status: -1,
                message:
                  "Card saved successfully. your amount will be refunded within 1 hour",
                response: data,
              };
            }
          } catch (err) {
            console.error(
              "saveCardWithCharge error:",
              (err.response && err.response.data) || err.message
            );

            return {
              status: 0,
              message: "Failed to save card",
              error: (err.response && err.response.data) || err.message,
            };
          }
        };

        // Call the inline function
        const result = await saveCardWithCharge();
        return res.status(result.status ? 200 : 400).json(result);
      } catch (err) {
        console.error("Save card route error:", err);
        return res
          .status(500)
          .json({ status: 0, message: "Failed to add your card details." });
      }
    });

  router.post("/creditcard_trip_request_sdk", async (req, res) => {
    try {
      const { passengerId,  customerId, tokenId, amount } = req.body;

      if (!customerId || !tokenId) {
        return res.status(400).json({
          status: 0,
          message: "Customer ID and Token ID are required",
        });
      }

      const SECRET_KEY =
        global.settings.tapPaymentGatewayMode === "L"
          ? global.settings.tapPaymentGatewayLiveSecrectKey
          : global.settings.tapPaymentGatewayTestSecrectKey;

      const HEADERS = {
        Authorization: `Bearer ${SECRET_KEY}`,
        "content-type": "application/json",
      };

      const payload = {
        amount,
        currency: "KWD",
        threeDSecure: true,
        save_card: false, // ❌ No card saving
        description: "Trip Payment Charge",
        statement_descriptor: "grandlimo Trip  request Payment",
        customer: { id: customerId },
        source: { id: tokenId },
        redirect: {
          url: `${global.settings.tapPaymentGatewayPaymentBaseURL}/processPayment/walletInitiateRedirect`,
        },
        post: {
          url: `${global.settings.tapPaymentGatewayPaymentBaseURL}/processPayment/walletInitiate`,
        },
        metadata: {
          purpose: "trip_payment",
          passengerId,
          amount,
          customerId,
         
        },
      };

      const response = await axios.post(
        "https://api.tap.company/v2/charges",
        payload,
        {
          headers: HEADERS,
        }
      );

      // If 3DS required
      if (response.data.transaction && response.data.transaction.url) {
        return res.status(200).json({
          status: 1,
          message: "Redirect user for 3DS authentication",
          redirect_url: response.data.transaction.url,
          charge_id: response.data.id,
        });
      }

      // Non-3DS charge completed
      return res.status(200).json({
        status: 1,
        message: "Payment charged successfully",
        charge: response.data,
      });
    } catch (err) {
      console.error(
        "saveCardWithCharge error:",
        (err.response && err.response.data) || err.message
      );

      return {
        status: 0,
        message: "Failed to save card",
        error: (err.response && err.response.data) || err.message,
      };
    }
  });

  // ramya oct 27 2025
  router.post("/creditcard_trip_complete_sdk", async (req, res) => {
    try {
      const { passengerId, trip_id,  customerId, tokenId, amount } = req.body;

      if (!customerId || !tokenId) {
        return res.status(400).json({
          status: 0,
          message: "Customer ID and Token ID are required",
        });
      }

      const SECRET_KEY =
        global.settings.tapPaymentGatewayMode === "L"
          ? global.settings.tapPaymentGatewayLiveSecrectKey
          : global.settings.tapPaymentGatewayTestSecrectKey;

      const HEADERS = {
        Authorization: `Bearer ${SECRET_KEY}`,
        "content-type": "application/json",
      };

      const payload = {
        amount,
        currency: "KWD",
        threeDSecure: true,
        save_card: false,
        description: "Trip Payment Charge",
        statement_descriptor: "grandlimo Trip Payment",
        customer: { id: customerId },
        source: { id: tokenId },
        redirect: {
          url: `${global.settings.tapPaymentGatewayPaymentBaseURL}/processPayment/walletInitiate`,
        },
        post: {
          url: `${global.settings.tapPaymentGatewayPaymentBaseURL}/processPayment/walletInitiateCompleteTrip`,
        },
        metadata: {
          purpose: "trip_payment",
          passengerId,
trip_id,
          amount,
          customerId,
        },
      };

      const response = await axios.post(
        "https://api.tap.company/v2/charges",
        payload,
        {
          headers: HEADERS,
        }
      );

      // If 3DS required
      if (response.data.transaction && response.data.transaction.url) {
        return res.status(200).json({
          status: 1,
          message: "Redirect user for 3DS authentication",
          redirect_url: response.data.transaction.url,
          charge_id: response.data.id,
        });
      }

      // Non-3DS charge completed
      return res.status(200).json({
        status: 1,
        message: "Payment charged successfully",
        charge: response.data,
      });
    } catch (err) {
      console.error(
        "saveCardWithCharge error:",
        (err.response && err.response.data) || err.message
      );

      return {
        status: 0,
        message: "Failed to save card",
        error: (err.response && err.response.data) || err.message,
      };
    }
  });


  /* Sasidharan May 06 2024 */
    // router.post("/updateDefaultCard", async (req, res) => {
  //   try {
  //     let { customerId, cardId } = req.body;

  //     let response = await tapPaymentGateway.updateCustomerDefaultCard(
  //       customerId,
  //       cardId
  //     );
  //     if (response && Object.keys(response).length > 0)
  //       return res.send({
  //         status: 1,
  //         message: req.__("card_updated_successfully"),
  //       });
  //     return res.send({
  //       status: 0,
  //       message: req.__("card_updated_failed"),
  //     });
  //   } catch (err) {
  //     console.error(err);
  //     res.send({
  //       status: 0,
  //       message: req.__("card_updated_failed"),
  //     });
  //   }
  // });

  router.post("/updateDefaultCard", async (req, res) => {
    try {
      console.error("req.query.lang:", req.query.lang);

      // ✅ Set language dynamically (Node v8 compatible)
      if (req && req.query && req.query.lang) req.setLocale(req.query.lang);

      // ✅ Debug
      console.log("Active locale:", req.getLocale());

      const { customerId, cardId } = req.body;

      // ✅ Validate input
      if (!customerId || !cardId) {
        return res.send({
          status: 0,
          message: req.__("invalid_request") || "Invalid request",
          data: [],
        });
      }

      // ✅ Call Tap API to update default card
      const response = await tapPaymentGateway.updateCustomerDefaultCard(
        customerId,
        cardId
      );

      // ✅ If successful
      if (response && Object.keys(response).length > 0) {
        return res.send({
          status: 1,
          message:
            req.__("card_updated_successfully") || "Card updated successfully.",
        });
      }

      // ❌ If failed
      return res.send({
        status: 0,
        message: req.__("card_updated_failed") || "Failed to update card.",
      });
    } catch (err) {
      console.error("Error in /updateDefaultCard:", err);
      return res.send({
        status: 0,
        message:
          req.__("something_went_wrong") ||
          "Something went wrong. Please try again.",
      });
    }
  });
  return router;
};

