var apn = require("apn");
var util = require("util");
var encryption = require("../../utils/encryption");

var options = {
  token: {
    key: "AuthKey_7Z6DJ2T5LA.p8",
    keyId: "7Z6DJ2T5LA",
    teamId: "FDG4PBGHHM",
  },
  production: false,
};

exports.iosPushnotification = function (msg, deviceToken) {
  console.log("IOS Push notification...................");

  var apnProvider = new apn.Provider(options);

  var data = { alert: msg, status: 1, badge: 1 };
  var note = new apn.Notification();
  note.payload = data;
  note.alert = data.alert;
  note.sound = "default";
  note.badge = 1;
  note.status = 1;
  note.aps.status = 1;
  note.topic = "com.grandlimo.passenger";
  console.log("note", note);
  console.log("data", data);
  apnProvider.send(note, deviceToken).then((result) => {
    console.log(
      util.inspect(result, {
        showHidden: false,
        depth: null,
      })
    );
  });
};

exports.androidPushnotification = function (msg, deviceToken) {
  console.log(
    "Android Push notification...................",
    global.settings && global.settings.customer_android_key_new
  );
  var pushmessage =
    msg && typeof msg === "object"
      ? msg
      : {
          message: msg,
          trip_id: "",
          status: 13,
        };
  encryption
    .sendAndroidPush(deviceToken, pushmessage, "Grandlimo")
    .then(function (response) {
      console.log("Successfully sent with response: ", response);
    })
    .catch(function (err) {
      console.log("Something has gone wrong!", err);
    });
};
