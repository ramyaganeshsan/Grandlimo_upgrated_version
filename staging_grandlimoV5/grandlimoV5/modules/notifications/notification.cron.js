const cron = require("node-cron");
const {
  fetchPromitionalPushNotification,
  getPassengers,
  revertPromotionPassengerNotificationStatus,
  updatePromotionPushNotification,
  updatePromotionalPassengerNotificationStatus,
  createPromotionalNotificationLog,
} = require("./notification.model");
const {
  sendNotification,
  generateAccessToken,
  sendPassengerAndroidPushNotification,
} = require("./utils");

let task = null;

const sendPromotionalPushNotification = async () => {
  try {
    let notification = await fetchPromitionalPushNotification();
    if (!notification || notification.length <= 0) {
      stopCron();
      return;
    }

    let title = notification.title;
    let message = notification.message;
    let type = notification.type ? notification.type : "all";

    let passengers = await getPassengers(0, 500, type);
    if (!passengers || !passengers.length) {
      await Promise.all([
        // stopCron(),
        revertPromotionPassengerNotificationStatus(),
        updatePromotionPushNotification(notification._id, {
          sent_status: 1,
        }),
      ]);
      return;
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

    if (type == "all" || type == "android") {
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
    }

    if (type == "all" || type == "ios") {
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
    }

    let passengerIds = passengers.map((passenger) => +passenger._id);
    let passengerPhone = passengers.map((passenger) => passenger.phone);

    // console.error("======================");
    // console.error(passengerIds);
    // console.error("========= END ========");

    // await updatePromotionalPassengerNotificationStatus(passengerIds);
    await Promise.all([
      updatePromotionalPassengerNotificationStatus(passengerIds),
      createPromotionalNotificationLog(
        passengerPhone,
        +notification._id,
        passengerIds
      ),
    ]);
  } catch (err) {
    console.error(err);
  }
};

exports.startJob = () => {
  if (!task) {
    console.error("Cron job has started");
    task = cron.schedule("*/30 * * * * *", () => {
      sendPromotionalPushNotification();
    });
    task.start();
  }
};

const stopCron = async () => {
  if (task) {
    task.stop();
    task = null;
    console.error("Cron job stopped");
  }
};
