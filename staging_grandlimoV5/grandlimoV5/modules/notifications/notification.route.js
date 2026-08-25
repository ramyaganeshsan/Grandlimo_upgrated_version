const express = require("express");
const pushNotificationRoutes = express.Router();

const {
  sendIosPushNotofication,
  sendAndroidPushNotification,
  sendPromotionalPushNotification,
  sendPushNotification,
  handleSendPushNotification,
} = require("./notification.controller");

pushNotificationRoutes.get(
  "/sendPushNoticationsForAppleDevice",
  sendIosPushNotofication
);

pushNotificationRoutes.get(
  "/sendPushNoticationsForAndroidDevice",
  sendAndroidPushNotification
);

pushNotificationRoutes.get(
  "/sendPromotionalPushNotification",
  sendPromotionalPushNotification
);

pushNotificationRoutes.get("/sendPushNotification", sendPushNotification);

pushNotificationRoutes.post(
  "/handleSendPushNotification",
  handleSendPushNotification
);

module.exports = pushNotificationRoutes;
