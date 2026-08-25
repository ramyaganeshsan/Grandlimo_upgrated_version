const axios = require("axios");
const path = require("path");
const {
  fetchNotifications,
  updatePassengerNotificationStatus,
  revertPassengerNotificationStatus,
  updatePushNotification,
  getPassengersDetails,
  getPassengers,
  revertPromotionPassengerNotificationStatus,
  updatePromotionalPassengerNotificationStatus,
  fetchPromitionalPushNotification,
  updatePromotionPushNotification,
  get_auto_id,
  savePushNotification,
} = require("./notification.model");
const {
  sendNotification,
  generateAccessToken,
  sendPassengerAndroidPushNotification,
} = require("./utils");
const { startJob } = require("./notification.cron");

exports.sendIosPushNotofication = async (req, res) => {
  try {
    /* Fetch the notification */
    let notification = await fetchNotifications();
    if (!notification) {
      res.send({ success: 0, failed: 0 });
    }

    let deviceType = 2;
    let title = notification.title;
    let sub_title = notification.sub_title;
    let code = notification.code ? notification.code : "";
    let created_date = notification.created_date;
    let message = notification.message;
    let image = `http://104.197.36.40/public/uploads/notification_image/ios/${notification.image}`;
    // let image = `http://34.28.184.113/public/uploads/notification_image/ios/${notification.image}`;

    let passengers = await getPassengersDetails(deviceType, 0, 500);
    if (!passengers || !passengers.length) {
      await Promise.all([
        revertPassengerNotificationStatus(),
        updatePushNotification(notification._id, {
          sent_status: 1,
        }),
      ]);
      res.send({ success: 0, failed: 0 });
    }

    // let deviceTokens = passengers.map((passenger) => passenger.device_token);
    let deviceTokens = [
      "00012f2f2fa576844fd5ab2b821a700de77f8eff5ff77af8e46f49a9acc48c19",
    ];
    let passengerIds = passengers.map((passenger) => passenger._id);

    let payload = {
      status: 22,
      _id: notification._id,
      title: title,
      sub_title: sub_title,
      message: message,
      image: image,
      code: code,
      created_date: created_date,
    };
    let alert = {
      title: title,
      body: message,
    };

    let response = await sendNotification(deviceTokens, {
      alert,
      status: 22,
      payload,
    });
    await updatePassengerNotificationStatus(passengerIds);

    res.send(response);
  } catch (err) {
    console.error(err);
    res.send("Something went wrong.");
  }
};

exports.sendAndroidPushNotification = async (req, res, next) => {
  try {
    /* Fetch the notification */
    let notification = await fetchNotifications();
    if (!notification) {
      res.send({ success: 0, failed: 0 });
    }

    let deviceType = 1;
    let passengers = await getPassengersDetails(deviceType, 0, 500);
    if (!passengers || !passengers.length) {
      await Promise.all([
        revertPassengerNotificationStatus(),
        updatePushNotification(notification._id, {
          sent_status: 1,
        }),
      ]);
      res.send({ success: 0, failed: 0 });
    }

    // let deviceTokens = passengers.map((passenger) => passenger.device_token);
    let deviceTokens = [
      "eXuYUjrYQe-mJPJ9vOis3_:APA91bGY9J978p9D9yBfAxFRaZxOhMZ3oQu6AvTYvGxRZyNZh5TsDlUjNGNN0CwGPKuV_mIiJ1xN_vYPTEzdGhbpJvqnnQMibsohcTktWNX_whgRtcdkhOM",
      "cGt3O_d8RD6RIrILNAdk-E:APA91bHBuE2uXGNrL2k4Hpv4Y0L6KxlDsb-3z_WFwdxCWS--y2AcbfIG21gqnn3k1jgyqPAvrCxwR4hgtMKVPMBm3N0Ff2I-4A9Vr46zUowosMRsNmLRJss",
    ];
    let message = {
      message: notification.title,
      title: notification.message,
      image: "",
      status: "38",
    };
    let token = generateAccessToken();
    if (!token)
      return res.send({
        success: 0,
        failed: 0,
        message: "Failed to generate GCP token.",
      });
    let response = await sendPassengerAndroidPushNotification(
      deviceTokens,
      message,
      token
    );

    let passengerIds = passengers.map((passenger) => passenger._id);
    await updatePassengerNotificationStatus(passengerIds);

    res.send(response);
  } catch (err) {
    console.error(err);
    next(err);
  }
};

exports.sendPromotionalPushNotification = async (req, res, next) => {
  try {
    let notification = await fetchPromitionalPushNotification();
    if (!notification || notification.length <= 0) {
      return res.send({
        success: 0,
        failed: 0,
        message: "No notification's found.",
      });
    }

    let title = notification.title;
    let message = notification.message;

    let passengers = await getPassengers(0, 1000);
    if (!passengers || !passengers.length) {
      await Promise.all([
        revertPromotionPassengerNotificationStatus(),
        updatePromotionPushNotification(notification._id, {
          sent_status: 1,
        }),
      ]);
      return res.send({
        success: 0,
        failed: 0,
        message: "Notification is send to all customer's",
      });
    }

    let android = [];
    let ios = [];

    passengers.forEach((passenger) => {
      if (passenger.device_type == 1) {
        android.push(passenger.device_token);
      } else {
        ios.push(passenger.device_token);
      }
    });

    let response = {
      android: {},
      ios: {},
    };
    if (android && android.length) {
      let push_message = {
        message: title,
        title: message,
        image: "",
        status: "50",
      };
      let token = await generateAccessToken();
      if (!token) {
        response["android"] = {};
      } else {
        response["android"] = await sendPassengerAndroidPushNotification(
          android,
          push_message,
          token
        );
      }
    }

    if (ios && ios.length) {
      let payload = {
        status: "50",
        _id: notification._id,
        title: title,
        message: message,
      };

      let alert = {
        title: title,
        body: message,
      };
      response["ios"] = await sendNotification(ios, {
        alert,
        status: 50,
        payload,
      });
    }

    let passengerIds = passengers.map((passenger) => passenger._id);
    await updatePromotionalPassengerNotificationStatus(passengerIds);
    res.send(response);
  } catch (err) {
    console.error(err);
    next(err);
  }
};

exports.sendPushNotification = (req, res, next) => {
  return res.sendFile(
    path.join(__dirname, "../../views", "push_notification.html")
  );
};

exports.handleSendPushNotification = async (req, res, next) => {
  const { body } = req;
  const { title, description, passkey, type } = body;

  if (passkey == "" || passkey != "cryonETImerI") {
    return res.send({ status: 0, message: "Invalid passkey." });
  }

  let pushNotification = {
    sent_status: 0,
    message: description,
    title: title,
    created_date: new Date(),
    code: "",
    type: type, // all, android, ios
  };

  let id = await get_auto_id("promotional_push_notifications");
  pushNotification["_id"] = id;

  let response = savePushNotification(pushNotification);
  if (response) {
    startJob();
  }

  return res.send({
    status: 1,
    message:
      "Push notification has added into queue soon it will be delivered to all your customers.",
    url: "http://104.197.36.40/manage/promotion_push_notification",
  });
};
