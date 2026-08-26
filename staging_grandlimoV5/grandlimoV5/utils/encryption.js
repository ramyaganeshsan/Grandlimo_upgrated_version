var CryptoJS = require("crypto-js");
var jsonwebtoken = require("jsonwebtoken");
var { JWT } = require("google-auth-library");
var axios = require("axios");
var serviceAccount = require("./grandlimopassenger-firebase-adminsdk-omr13-ac3adbf040.json");
var apn = require("apn");
const path = require("path");

const encryptionScrectKey = "06e484bd048beeda5117bf9a6d9cf734"; // grandlimoAccessTokenF2DBF97AAEB4B
const tokenScrectKey = "06e484bd048beeda5117bf9a6d9cf734"; // grandlimoAccessTokenF2DBF97AAEB4B

exports.encrypt = (obj) => {
  try {
    var ciphertext = CryptoJS.AES.encrypt(
      JSON.stringify(obj),
      encryptionScrectKey
    ).toString();
    return ciphertext;
  } catch (err) {
    return null;
  }
};
exports.generateToken = async (value) => {
  try {
    var token = await jsonwebtoken.sign(value, tokenScrectKey);
    return token;
  } catch (err) {
    return null;
  }
};

const decrypt = (key) => {
  try {
    var bytes = CryptoJS.AES.decrypt(key, encryptionScrectKey);
    var decryptedData = JSON.parse(bytes.toString(CryptoJS.enc.Utf8));
    return decryptedData;
  } catch (err) {
    return null;
  }
};
const validateToken = async (token) => {
  try {
    let decoded = await jsonwebtoken.verify(token, tokenScrectKey);
    return decoded;
  } catch (err) {
    return null;
  }
};

exports.tokenValidatoinMiddleware = async (req, res, next) => {
  if (global.settings.disableTokenValidation) return next();

  // if(!req.headers.authorization) next();

  let cardsRoutes = ["/getMyCards", "/deleteMyCard", "/addCard"];
  let publicTypes = [
    "passenger_account_registration_step1",
    "passenger_account_registration_step2",
    "passenger_account_registration_step3",
    "getcoreconfig",
    "passenger_later_bookings",
    "update_passenger_device_token",
  ];
  let path = req.path;
  let type = req.query.type;

  /* Sasidharan Nov 20 2024 */
  if (path == "/failed" || path == "/success") {
    return next();
  }

  if (publicTypes.includes(type)) {
    return next();
  }

  let authHeader =
    req.headers && req.headers.authorization ? req.headers.authorization : "";
  console.error(authHeader);
  if (!authHeader) {
    var message = { message: "authorization failed", status: 8 };
    res.type("text/json");
    return res.send(message);
  }

  if (cardsRoutes.includes(path)) {
    let decryptedToken = await validateToken(authHeader);
    if (!decryptedToken) {
      var message = { message: "authorization failed", status: 8 };
      res.type("text/json");
      return res.send(message);
    }

    let decryptedPassengerInfo = decrypt(decryptedToken);
    if (!decryptedPassengerInfo) {
      var message = { message: "authorization failed", status: 8 };
      res.type("text/json");
      return res.send(message);
    }

    if (path === "/getMyCards") {
      req.query.passenger_id = decryptedPassengerInfo.passengerId;
    } else {
      req.body.passengerId = decryptedPassengerInfo.passengerId;
    }
  } else if (!publicTypes.includes(type)) {
    let decryptedToken = await validateToken(authHeader);
    if (!decryptedToken) {
      var message = { message: "authorization failed", status: 8 };
      res.type("text/json");
      return res.send(message);
    }

    let decryptedPassengerInfo = decrypt(decryptedToken);
    if (!decryptedPassengerInfo) {
      var message = { message: "authorization failed", status: 8 };
      res.type("text/json");
      return res.send(message);
    }

    /* Sasidharan Nov 20 2024 */
    req.userInfo = decryptedPassengerInfo;

    req.query.passenger_id = decryptedPassengerInfo.passengerId;
    req.body.passenger_id = decryptedPassengerInfo.passengerId;
    req.query.passengerid = decryptedPassengerInfo.passengerId;
    req.body.passengerid = decryptedPassengerInfo.passengerId;
    req.query.passengerId = decryptedPassengerInfo.passengerId;
    req.body.passengerId = decryptedPassengerInfo.passengerId;
  } else {
    console.error("Accessing Public Routes.", path, type);
  }

  next();
};
// ramya jan 28 2026 updated push notification code for ios and andriod
async function getFirebaseAccessToken() {
  const jwtClient = new JWT({
    email: serviceAccount.client_email,
    key: serviceAccount.private_key,
    scopes: ["https://www.googleapis.com/auth/firebase.messaging"],
  });
  const tokens = await jwtClient.authorize();
  return tokens.access_token;
}

exports.sendAndroidPush = async (deviceToken, pushmessage, title) => {
  try {
    const accessToken = await getFirebaseAccessToken();
    const payload = {
      message: {
        token: deviceToken,
        notification: {
          title: title || "Notification",
          body: pushmessage.message,
        },
        data: {
          payload: JSON.stringify({
            trip_id: String(pushmessage.trip_id || ""),
            status: String(pushmessage.status || ""),
            app_ver: String(pushmessage.app_ver || ""),
            message: String(pushmessage.message || ""),
          }),
        },
      },
    };

    const response = await axios.post(
      "https://fcm.googleapis.com/v1/projects/grandlimopassenger/messages:send",
      payload,
      {
        headers: {
          Authorization: `Bearer ${accessToken}`,
          "Content-Type": "application/json",
        },
      }
    );
    console.log("FCM RESPONSE:", response.data);
    return response.data;
  } catch (err) {
    console.error(err);
    throw err;
  }
};

const apnProvider = new apn.Provider({
  token: {
    key: path.join(__dirname, "AuthKey_C6DSLF5LTG.p8"),
    keyId: "C6DSLF5LTG",
    teamId: "FDG4PBGHHM",
  },
  production: true,
});

exports.sendIosPush = (deviceToken, pushmessage) => {
  let note = new apn.Notification();
  note.topic = "com.grandlimo.passenger";
  note.alert = pushmessage.message;
  note.sound = "default";

  note.payload = {
    trip_id: pushmessage.trip_id || "",
    status: pushmessage.status || "",
  };

  apnProvider.send(note, deviceToken).then((result) => {
    console.log(result);
  });
};
