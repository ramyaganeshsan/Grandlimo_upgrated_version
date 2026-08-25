var db = require("../../config/dbconnection");
var t = require("../../config/table_config.json");

exports.getCards = async (passengerId) => {
  var passengerCollection = db.get().collection(t.MDB_PASSENGERS);
  let response = await passengerCollection.findOne(
    { _id: +passengerId },
    {
      projection: {
        _id: 0,
        "hesabeCards.cardNumber": 1,
        "hesabeCards.default": 1,
        "hesabeCards.id": 1,
      },
    }
  );
  return response && response.hesabeCards ? response.hesabeCards : [];
};

exports.getCardCount = async (passengerId) => {
  let passengerCollection = db.get().collection(t.MDB_PASSENGERS);
  let response = await passengerCollection
    .aggregate([
      {
        $match: {
          _id: +passengerId,
        },
      },
      {
        $project: {
          cardsCount: { $size: { $ifNull: ["$hesabeCards", []] } },
        },
      },
    ])
    .toArray();
  return response && response.length > 0 && response[0]["cardsCount"]
    ? response[0]["cardsCount"]
    : 0;
};

exports.addCard = async (passengerId, cardInfo) => {
  let passengerCollection = db.get().collection(t.MDB_PASSENGERS);
  let response = await passengerCollection.updateOne(
    {
      _id: +passengerId,
      "hesabeCards.id": { $ne: cardInfo.id },
    },
    { $addToSet: { hesabeCards: cardInfo } }
  );

  return response;
};

exports.deleteCard = async (passengerId, cardNumber) => {
  let passengerCollection = db.get().collection(t.MDB_PASSENGERS);
  let response = await passengerCollection.updateOne(
    {
      _id: +passengerId,
    },
    { $pull: { hesabeCards: { cardNumber: cardNumber } } }
  );

  return response;
};

exports.getCard = async (passengerId, cardNumber) => {
  let passengerCollection = db.get().collection(t.MDB_PASSENGERS);
  let response = await passengerCollection.findOne(
    {
      _id: +passengerId,
      "hesabeCards.cardNumber": cardNumber,
    },
    { projection: { hesabeCards: { $elemMatch: { cardNumber: cardNumber } } } }
  );
  return response && response.hesabeCards ? response.hesabeCards : [];
};

exports.updateDefaultCard = async (passengerId, cardNumber) => {
  let passengerCollection = db.get().collection(t.MDB_PASSENGERS);
  let removeDefaultStatus = await passengerCollection.updateOne(
    {
      _id: +passengerId,
      "hesabeCards.default": 1,
    },
    { $set: { "hesabeCards.$.default": 0 } }
  );

  if (removeDefaultStatus) {
    let response = await passengerCollection.updateOne(
      {
        _id: +passengerId,
        "hesabeCards.cardNumber": cardNumber,
      },
      { $set: { "hesabeCards.$.default": 1 } }
    );
    if (response) {
      return true;
    }
  }

  return false;
};
