var db = require("../../config/dbconnection");
var t = require("../../config/table_config.json");

exports.getPassengerDetails = async (passengerId) => {
  var passengerCollection = db.get().collection(t.MDB_PASSENGERS);
  let response = await passengerCollection.findOne(
    { _id: +passengerId },
    {
      projection: {
        _id: 0,
        name: 1,
        phone: 1,
        email: 1,
      },
    }
  );
  return response || {};
};

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
        "hesabeCards.cardType": 1,
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

exports.getDefaultCard = async (passengerId) => {
  let passengerCollection = db.get().collection(t.MDB_PASSENGERS);
  let response = await passengerCollection.findOne(
    {
      _id: +passengerId,
    },
    { projection: { hesabeCards: { $elemMatch: { default: 1 } } } }
  );
  return response && response.hesabeCards && response.hesabeCards.length > 0
    ? response.hesabeCards[0]
    : null;
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

exports.checkIfPaymentTokenExists = async (paymentToken) => {
  var collection = db.get().collection(t.MDB_PASSENGER_WALLET_LOG);
  let filter = {
    paymentToken: paymentToken,
    paid_status: { $in: [1, 2] }, // 0 - Processing, 1 - Success 2 - Failed.
  };
  let project = {
    projection: {
      _id: 0,
      passenger_id: 1,
      paymentToken: 1,
      paymentId: 1,
    },
  };
  let walletLog = await collection.findOne(filter, project);
  return walletLog && Object.keys(walletLog).length > 0 ? true : false;
};

exports.updateTransactionStatus = async (paymentToken, updatedValues) => {
  var collection = db.get().collection(t.MDB_PASSENGER_WALLET_LOG);
  let filter = {
    paymentToken: paymentToken,
  };
  await collection.updateOne(filter, { $set: updatedValues });
};

exports.updatePassengerWalletAmount = async (passengerId, walletAmount) => {
  let filter = {
    _id: +passengerId,
  };
  var collection = db.get().collection(t.MDB_PASSENGERS);
  let passenger = await collection.findOne(filter, {
    projection: { wallet_amount: 1 },
  });

  if (!passenger) {
    return { status: false, wallet_amount: 0 };
  }

  let updateResponse = await collection.updateOne(filter, {
    $inc: { wallet_amount: +walletAmount },
  });
  if (updateResponse && updateResponse.modifiedCount > 0) {
    return {
      status: true,
      wallet_amount: +passenger.wallet_amount + +walletAmount,
    };
  }
  return { status: false, wallet_amount: 0 };
};

/*
  var insert_array = {
    passenger_id: parseInt(passengerId),
    change_amount: parseFloat(walletAmount),
    wallet_amount: parseFloat(update_wallet_amt),
    created_date: new Date(),
    created_by: parseInt(passengerId),
    recharge_type: 15,
    trip_id: trip_id ? parseInt(trip_id) : "",
    paid_status: parseInt(1),
    hesabe : 1,
    paymentToken : "",
    paymentId : ""
  };
*/
exports.insertLog = async (logDetails) => {
  var collection = db.get().collection(t.MDB_PASSENGER_WALLET_LOG);
  let response = await collection.insertOne(logDetails);
  return response;
};

exports.insertErrorLog = async (logDetails) => {
  var collection = db.get().collection("passenger_wallet_error_log_hesabe");
  let response = await collection.insertOne(logDetails);
  return response;
};

exports.isTransactionAlreadyCompleted = async (orderReferenceNumber) => {
  var collection = db.get().collection("passengers_wallet_log");
  let response = await collection.countDocuments({
    paid_status: 1,
    orderReferenceNumber: orderReferenceNumber,
  });
  return response;
};

exports.getCardToken = async (passengerId, cardId) => {
  let passengerCollection = db.get().collection(t.MDB_PASSENGERS);
  let response = await passengerCollection.findOne(
    {
      _id: +passengerId,
    },
    { projection: { hesabeCards: { $elemMatch: { id: +cardId } } } }
  );
  return response && response.hesabeCards && response.hesabeCards.length > 0
    ? response.hesabeCards[0]
    : null;
};
