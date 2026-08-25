var db = require("../../config/dbconnection");

exports.fetchNotifications = async () => {
  var collection = db.get().collection("notifications");
  let match = {
    sent_status: 2,
  };

  let response = await collection.findOne(match, {
    projection: {
      _id: 1,
      title: 1,
      sub_title: 1,
      message: 1,
      image: 1,
      created_date: 1,
      code: 1,
    },
  });

  return response;
};

exports.fetchPromitionalPushNotification = async () => {
  var collection = db.get().collection("promotional_push_notifications");
  let match = {
    sent_status: 0,
  };

  let response = await collection.findOne(match, {
    projection: {
      _id: 1,
      title: 1,
      message: 1,
      type: 1,
    },
  });

  return response;
};

exports.getPassengersDetails = async (deviceType = 2, skip, limit) => {
  const collection = db.get().collection("passengers");

  const match = {
    user_status: "A",
    device_type: deviceType,
    phone: {
      $in: ["9894199925", "66324783"],
    },
    $or: [
      { push_notification: { $exists: false } },
      { push_notification: { $ne: 2 } },
    ],
    $nor: [
      { device_token: null },
      { device_token: "" },
      { device_token: "null" },
      { device_token: "123456789" },
      { device_token: { $regex: /^\{length/ } },
      { device_token: { $regex: /^\s*$/ } },
    ],
  };

  const response = await collection
    .find(match)
    .project({
      _id: 1,
      device_token: 1,
    })
    // .skip(Number(skip))
    .limit(Number(limit))
    .toArray();

  return response;
};

exports.getPassengers = async (skip, limit, device_type) => {
  const collection = db.get().collection("passengers");

  const match = {
    user_status: "A",
    // phone: {
    //   $in: ["9894199925"],
    // },
    // push_test_users: 1,
    $or: [
      { promotion_push_notification: { $exists: false } },
      { promotion_push_notification: { $ne: 5 } },
    ],
    $nor: [
      { device_token: null },
      { device_token: "" },
      { device_token: "null" },
      { device_token: "123456789" },
      { device_token: { $regex: /^\{length/ } },
      { device_token: { $regex: /^\s*$/ } },
    ],
  };

  console.error("match : ", match);

  if (device_type == "android") {
    match["device_type"] = 1;
  } else if (device_type == "ios") {
    match["device_type"] = { $ne: 1 };
  }

  const response = await collection
    .find(match)
    .project({
      _id: 1,
      device_token: 1,
      device_type: 1,
      phone: 1,
    })
    // .skip(Number(skip))
    .limit(Number(limit))
    .toArray();
  console.error("response : ", response);
  return response;
};

exports.updatePushNotification = async (notificationId, updatedValues) => {
  const collection = db.get().collection("notifications");
  let match = {
    _id: +notificationId,
  };
  let response = await collection.updateOne(match, {
    $set: updatedValues,
  });
  return response;
};

exports.updatePromotionPushNotification = async (
  notificationId,
  updatedValues
) => {
  const collection = db.get().collection("promotional_push_notifications");
  let match = {
    _id: +notificationId,
  };
  let response = await collection.updateOne(match, {
    $set: updatedValues,
  });
  return response;
};

exports.updatePassengerNotificationStatus = async (
  passengerIds,
  device_type = 2
) => {
  const collection = db.get().collection("passengers");

  let match = {
    _id: { $in: passengerIds },
    device_type: device_type,
    user_status: "A",
  };
  let updatedValues = {
    push_notification: 2,
  };
  let response = await collection.updateMany(match, {
    $set: updatedValues,
  });
  return response;
};

exports.updatePromotionalPassengerNotificationStatus = async (passengerIds) => {
  const collection = db.get().collection("passengers");

  let match = {
    _id: { $in: passengerIds },
    user_status: "A",
  };
  let updatedValues = {
    promotion_push_notification: 5,
  };
  let response = await collection.updateMany(match, {
    $set: updatedValues,
  });

  // console.error("Update response.....");
  // console.error(response)
  // console.error("Update response end.....");

  return response;
};

exports.revertPromotionPassengerNotificationStatus = async () => {
  const collection = db.get().collection("passengers");
  let match = {
    user_status: "A",
  };
  let updatedValues = {
    promotion_push_notification: 0,
  };
  let response = await collection.updateMany(match, {
    $set: updatedValues,
  });
  return response;
};

exports.revertPassengerNotificationStatus = async (device_token = 2) => {
  const collection = db.get().collection("passengers");
  let match = {
    device_type: device_token,
    user_status: "A",
  };
  let updatedValues = {
    push_notification: 0,
  };
  let response = await collection.updateMany(match, {
    $set: updatedValues,
  });
  return response;
};

exports.get_auto_id = async function (table_name) {
  var collection = db.get().collection(table_name);

  let id = 1;
  let response = await collection.findOne(
    {},
    { projection: { _id: 1 }, sort: { _id: -1 } }
  );

  if (response && response._id) {
    return +response._id + 1;
  }

  return id;
};

exports.savePushNotification = async (notification) => {
  var collection = db.get().collection("promotional_push_notifications");
  let response = await collection.insertOne(notification);
  return response;
};

exports.createPromotionalNotificationLog = async (
  phoneNumbers,
  notificationId,
  passengerIds
) => {
  let log = {
    passengers: passengerIds,
    notificationId: notificationId,
    passengerPhone: phoneNumbers,
    sendAt: new Date(),
  };
  var collection = db.get().collection("promotional_push_notifications_log");
  let response = await collection.insertOne(log);

  // console.error("Logging");
  // console.error(log);
  // console.error(response);
  // console.error("Logging");

  return response;
};
