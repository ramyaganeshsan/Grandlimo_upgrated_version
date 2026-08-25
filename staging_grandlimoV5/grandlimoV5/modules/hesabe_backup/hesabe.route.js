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
} = require("./hesabe.model");

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

      /* Call delete card api */
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

module.exports = hesabeRoutes;
