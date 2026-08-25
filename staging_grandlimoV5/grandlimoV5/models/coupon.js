var db = require("../config/dbconnection");
var t = require("../config/table_config.json");

const tableName = "driverIssuedCoupons";

exports.checkIfCouponIsExists = (coupon) => {
  let filter = {
    coupon: coupon,
  };
  let collection = db.get().collection(tableName);
  let result = collection.findOne(filter);
  return result;
};

exports.getPassengerDetails = (passengerID) => {
  let filter = {
    _id: +passengerID,
  };
  let projection = {
    couponAmount: 1,
    user_status: 1,
  };
  let collection = db.get().collection(t.MDB_PASSENGERS);
  let result = collection.findOne(filter, { projection });
  return result;
};

exports.getTripDetails = (tripId) => {
  let filter = {
    _id: +tripId,
  };
  let projection = {
    passengers_id: 1,
    driver_id: 1,
    travel_status: 1,
    couponCode: 1,
  };
  let collection = db.get().collection(t.MDB_PASSENGERSLOG);
  let result = collection.findOne(filter, { projection });
  return result;
};

exports.addCoupon = async (couponDetails) => {
  let collection = db.get().collection(tableName);
  let response = await collection.insertOne(couponDetails);
  if (!response) {
    return null;
  }
  return response.insertedId;
};

exports.deleteCoupon = async (code) => {
  let collection = db.get().collection(tableName);
  let response = await collection.deleteOne({ code: code });
  if (!response) {
    return false;
  }
  return true;
};

exports.updatePassengerCouponPoints = async (passengerId, points) => {
  let collection = db.get().collection(t.MDB_PASSENGERS);
  let match = {
    _id: +passengerId,
    couponAmount: { $gte: global.settings.couponRedeemAmount },
  };
  let response = await collection.updateOne(match, {
    $inc: { couponAmount: +points },
  });
  console.error(response);
  if (!response) return false;
  return response.modifiedCount > 0;
};
