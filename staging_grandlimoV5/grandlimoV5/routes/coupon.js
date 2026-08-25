const couponRoutes = require("express").Router();
const {
  checkIfCouponIsExists,
  getTripDetails,
  addCoupon,
  getPassengerDetails,
  deleteCoupon,
  updatePassengerCouponPoints,
} = require("../models/coupon");
const { isCurrentDateBetween } = require("../utils/shared");

couponRoutes.post("/add", async (req, res) => {
  if (
    !req.body ||
    !req.body.tripId ||
    !req.body.couponCode ||
    !req.body.driverId
  ) {
    return res.send({
      status: -1,
      message: "Invalid request.",
    });
  }

  let startDate = global.settings.couponStartDate
    .toISOString()
    .substring(0, 10);
  let endDate = global.settings.couponEndDate.toISOString().substring(0, 10);
  let isValidCoupon = isCurrentDateBetween(startDate, endDate);

  if (!global.settings.couponStatus || !isValidCoupon) {
    return res.send({
      status: 0,
      message: "These coupons are no longer valid.",
    });
  }

  let tripId = req.body.tripId;
  let couponCode = req.body.couponCode;
  let driverId = req.body.driverId;

  let [coupon, tripDetails] = await Promise.all([
    checkIfCouponIsExists(couponCode),
    getTripDetails(tripId),
  ]);

  if (coupon) {
    return res.send({
      status: 0,
      message: "Coupon is already distributed.",
    });
  }

  if (
    !tripDetails ||
    Object.keys(tripDetails).length < 0 ||
    !tripDetails.driver_id
  ) {
    return res.send({
      status: 0,
      message: "Trip details not found.",
    });
  }

  if (tripDetails.driver_id != driverId) {
    return res.send({
      status: 0,
      message: "Your are not allowed to give coupon code for this trip.",
    });
  }

  let couponDetails = {
    coupon: couponCode,
    givenAt: new Date(),
    driverId: +driverId,
    passengerId: +tripDetails.passengers_id,
    deductedPoints: +global.settings.couponRedeemAmount,
    tripId: +tripId,
  };

  let passengerDetails = await getPassengerDetails(tripDetails.passengers_id);
  if (!passengerDetails) {
    return res.send({
      status: 0,
      message: "Passenger not found.",
    });
  }

  let couponAmount =
    typeof passengerDetails.couponAmount != "undefined"
      ? +passengerDetails.couponAmount
      : 0;
  if (couponAmount < global.settings.couponRedeemAmount) {
    return res.send({
      status: 0,
      message: "This passenger is not eligible for this coupon code.",
    });
  }

  let [isDeducted, couponId] = await Promise.all([
    updatePassengerCouponPoints(
      tripDetails.passengers_id,
      -global.settings.couponRedeemAmount
    ),
    addCoupon(couponDetails),
  ]);

  if (isDeducted && couponId) {
    return res.send({
      status: 1,
      message: "Coupon is saved.",
    });
  }

  await Promise.all([
    updatePassengerCouponPoints(
      tripDetails.passengers_id,
      global.settings.couponRedeemAmount
    ),
    deleteCoupon(couponCode),
  ]);

  return res.send({
    status: 1,
    message: "Failed to save coupon details.",
  });
});

module.exports = couponRoutes;
