const express = require("express");
const hesabeRoutes = express.Router();
const { tokenValidatoinMiddleware } = require("../../utils/encryption");
const {
  getCards,
  addCard,
  deleteCard,
  getCardCount,
  updateDefaultCard,
  getCard,
  checkIfPaymentTokenExists,
  updateTransactionStatus,
  insertErrorLog,
  insertLog,
} = require("./hesabe.model");
const {
  cancelCard,
  authorizeTransaction,
  createMercharntTransaction,
  createTransaction,
  decrypteData,
} = require("./hesabe");

const checkPassengerId = (req, res, next) => {
  let { passengerId } = req.userInfo;
  if (!passengerId) {
    return res.send({
      status: 0,
      message: "Invalid request",
    });
  }
  return next();
};

hesabeRoutes.get(
  "/cards",
  tokenValidatoinMiddleware,
  checkPassengerId,
  async (req, res) => {
    let response = {
      status: 0,
      cards: [],
    };
    try {
      let { passengerId } = req.userInfo;
      let cards = await getCards(passengerId);

      response["status"] = 1;
      response["cards"] = cards;
      res.send(response);
    } catch (err) {
      console.error(err);
      res.send(response);
    }
  }
);

hesabeRoutes.post(
  "/cards",
  tokenValidatoinMiddleware,
  checkPassengerId,
  async (req, res) => {
    let response = {
      status: 0,
      message: "Failed to add your card details.",
    };
    try {
      let { passengerId } = req.userInfo;
      let { body: cardDetails } = req;

      /* We are using JWT but our old api's directly access passenger from response so we need delete old params  */
      delete cardDetails.passengerId;
      delete cardDetails.passenger_id;
      delete cardDetails.passengerid;

      let totalCards = await getCardCount(passengerId);
      if (totalCards <= 0) {
        cardDetails["default"] = 1;
      } else {
        cardDetails["default"] = 0;
      }
      let updateResponse = await addCard(passengerId, cardDetails);

      if (
        updateResponse &&
        (updateResponse.modifiedCount > 0 || updateResponse.matchedCount > 0)
      ) {
        response["status"] = 1;
        response["message"] = "The card has been successfully saved.";
        return res.send(response);
      }
      return res.send(response);
    } catch (err) {
      console.error(err);
      res.send(response);
    }
  }
);

hesabeRoutes.delete(
  "/cards",
  tokenValidatoinMiddleware,
  checkPassengerId,
  async (req, res) => {
    let response = {
      status: 0,
      message: "Failed to delete your card details.",
    };
    try {
      let { passengerId } = req.userInfo;
      let { cardNumber } = req.body;

      let cardDetails = await getCard(passengerId, cardNumber);
      if (!cardDetails || cardDetails.length <= 0) {
        response["message"] = "Card details not found.";
        return res.send(response);
      }

      /* Call delete card api */
      let token = cardDetails[0]["token"];
      let isCardDeleted = await cancelCard(token);
      if (!isCardDeleted) {
        response["message"] = "Failed to delete your card details.";
        return res.send(response);
      }

      let updateResponse = await deleteCard(passengerId, cardNumber);
      if (updateResponse && updateResponse.modifiedCount > 0) {
        response["status"] = 1;
        response["message"] = "The card has been deleted successfully.";
        return res.send(response);
      }
      return res.send(response);
    } catch (err) {
      console.error(err);
      res.send(response);
    }
  }
);

hesabeRoutes.post(
  "/defaultCard",
  tokenValidatoinMiddleware,
  checkPassengerId,
  async (req, res) => {
    let response = {
      status: 0,
      message: "Failed to change your default card details.",
    };
    try {
      let { passengerId } = req.userInfo;
      let { cardNumber } = req.body;

      let card = await getCard(passengerId, cardNumber);
      if (card && card.length > 0) {
        let updateResponse = await updateDefaultCard(passengerId, cardNumber);
        if (updateResponse) {
          response["status"] = 1;
          response["message"] =
            "The default card has been successfully updated.";
          return res.send(response);
        }
      } else {
        response["message"] = "Your card details not found.";
      }

      return res.send(response);
    } catch (err) {
      console.error(err);
      res.send(response);
    }
  }
);
/* 
  hesabeRoutes.post("/test", async (req, res) => {
    try {
      let response = await createMercharntTransaction({
        cardToken: "84221717326169949763378365633",
        amount: 1,
        orderReferenceNumber: "12345678",
      });
      let responseTransaction = await createTransaction({
        amount: 1,
        name: "Sasidharan",
        mobile_number: "8778185933",
        email: "sasi@gmail.com",
        orderReferenceNumber: "12345678",
        variable1: "WALLET",
        variable2: JSON.stringify({
          passengerId: 123,
          amount: 1,
        }),
      });
      if (response) {
        return res.send({ status: 1, url: response });
      }
      res.send({ status: 0, url: "" });
    } catch (err) {
      console.error(err);
      res.send("Failed");
    }
  });
*/

hesabeRoutes.get("/success", async (req, res) => {
  if (!req.query.data) return res.send("failed");

  let data = req.query.data;
  const decrypted = decrypteData(data);

  let responseMessage = "Invalid transaction. Please contact our support team.";
  if (!decrypted) {
    res.type("text/json");
    return res.send(responseMessage);
  }

  let response = decrypted.response;
  let { paymentToken, variable1, variable2, paymentId } = response;
  let transactionDetails = JSON.parse(variable2);

  if (variable1 === "WALLET") {
    let isExists = await checkIfPaymentTokenExists(paymentToken);
    if (!isExists) {
      let amount = +transactionDetails.amount;
      let passengerId = transactionDetails.passengerId;
      let { status, wallet_amount } = await updatePassengerWalletAmount(
        passengerId,
        amount
      );
      if (status) {
        let walletLog = {
          passenger_id: parseInt(passengerId),
          change_amount: parseFloat(amount),
          wallet_amount: parseFloat(wallet_amount),
          created_date: new Date(),
          created_by: parseInt(passengerId),
          recharge_type: 15,
          trip_id: "",
          paid_status: parseInt(1),
          hesabe: 1,
          paymentToken: paymentToken,
          paymentId: paymentId,
        };
        await insertLog(walletLog);
        responseMessage = "Your wallet has been successfully recharged.";
      }
    } else {
      responseMessage = "Your transaction is already processed.";
    }
  }

  res.type("text/json");
  return res.send(responseMessage);
});

hesabeRoutes.get("/failed", async (req, res) => {
  if (!req.query.data) return res.send("failed");

  let data = req.query.data;
  const decrypted = decrypteData(data);

  if (!decrypted) {
    let message = "Invalid transaction. Please contact our support team.";
    res.type("text/json");
    return res.send(message);
  }

  let response = decrypted.response;
  let { code, message } = decrypted;
  let { paymentToken, variable1, variable2 } = response;
  variable2 = JSON.parse(variable2);

  if (variable1 === "WALLET" || variable1 === "TRIP") {
    let isExists = await checkIfPaymentTokenExists(paymentToken);
    if (!isExists) {
      let updatedValues = {
        ...response,
        ...variable2,
        paid_status: 2, // Failed.
        status_code: code,
        paymentMessage: message,
      };
      // await updateTransactionStatus(paymentToken, updatedValues);
      await insertErrorLog(updatedValues);
    }
  }

  message = "Transaction failed. Please try again later.";
  res.type("text/json");
  return res.send(message);
});

module.exports = hesabeRoutes;
