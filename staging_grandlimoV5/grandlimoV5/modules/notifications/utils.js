var apn = require("apn");
const crypto = require("crypto");
const axios = require("axios");
const { URLSearchParams } = require("url");
const path = require("path");

var options = {
  token: {
    key: path.resolve(__dirname, "../notifications/AuthKey_7Z6DJ2T5LA.p8"),
    keyId: "7Z6DJ2T5LA",
    teamId: "FDG4PBGHHM",
  },
  production: true,
};

exports.sendNotification = async (deviceTokens, { payload, alert, status }) => {
  var apnProvider = new apn.Provider(options);

  var pushNotification = new apn.Notification();

  pushNotification.badge = 1;
  pushNotification.topic = "com.grandlimo.passenger";
  pushNotification.sound = "default";
  pushNotification.payload = payload;
  pushNotification.data = payload;
  pushNotification.alert = alert;
  pushNotification.status = status;
  pushNotification.aps.status = status;

  let response = await apnProvider.send(pushNotification, deviceTokens);
  // console.error(response);
  return response;
};

exports.generateAccessToken = async () => {
  const serviceJson = {
    type: "service_account",
    project_id: "grandlimopassenger",
    private_key_id: "e268a573e44f534e5e4aaa23c8581e9185207426",
    private_key:
      "-----BEGIN PRIVATE KEY-----\nMIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQDMPnnKa2WaPHDC\nBHu5bp/sIC5MGMZrH7/2VMKi4nRGirQ4YMA1v3uPU7AiyTnhzYUYuHRzaA1qhMJF\n1phhLZU6btjs03dIF8q9cZezy4R+ClBBpTHoEmqmnH0K17h+2Z0JUuFoWvs4Sf/f\nTzWPLrofZTDkyk7rq1OqKqMsLdzZ1za/t/tCW3JiBKZsWVHuhA152ASHJS2TIWbz\nUg2nPsJ2UNs0GYQClenvZrAouoiDt6GTkPTMgXDXSfifpD5wBijq4Dw1QnYFQSNS\nNaBjo61DAU613D2dTwKT1f9aun2ZNcsrWtLjOqxiLIa7msLIHoKd2KiaWOrnTcu4\nPmqPghX7AgMBAAECggEACAtt60sk9VjsGA2VJ030KUNwj2QVF02+LIr/dOr2ftDN\nHcCx0WwkBxaExC9TgvwAAg6XMknRkssn28MCvXvOJOm4zEXdV47trV3hW8joWbk4\n8AenBOe0y7CI5vnC3+bdCJZQdTZ1hAIQ0friC9cLUwaT+8RRgiF9aiEZIY8COTzu\nw2E1OuyOpZEuwkvFRk+WDmmjKv5wj9I+NEQe7iTm2OyMkYiVwqkyeidadgaGU6A4\ntkba9Qi4lFpwQZeMMBrbH1avONfKVbd5AsyRsIXslBiFJpPZUNLzoW0q8o1Icpj6\nBcqExB0DgQDC6IKgCMtnJyHCfh6LMZqMD3DvFPfOAQKBgQD35YNXIsHUb/8Uk9xc\nj4YGIwpOXl0rWdaRjRgrejG+mBwj2poGFqKgKesXjEfjN51hVHfFUxK3HtyXQz0Z\ngqOs5sL3zMUY8hpuuH8ADVkVEAqPSbCdzG64tDeXkrzuG2+1ELAKxCukZlNd2sYS\n29UIF8FNeMsJT7SC2RC30czj9wKBgQDS66m81m5aj6iUJTIoeG12nKbxd/Xv4kU2\nE3uupUQOqYFlBwDiXC+a5MW3jHt4Y8ihdAiql77UdPRUAKddStW8EBm1Hb6inH4a\nuOVBazjmA+mqWuGV1PLjW07lsXz/oqhF1GYIQcqSwk0iq2O1IzgHftw4O+XRLk1Z\n3Vxj3+8VHQKBgQDZfhFkssbydqyKxkuRHg8NdVLGfT4rGbAKlYr+IkBgox4VSubV\nrqhR81UinN45eQLocO6APqlt5nLNd520swydVvz54juO7mLIf7BVQGDG/QL2wkVl\nvQXroZogrwp5sbKpXpHFcGWF4I0GDDq6MwtOBWGAchlY+wg5wO5NCJJF8wKBgFwI\n8y7wToT7zK6gMGvSaMlp/7q8Arfi/xpilASYHsNbGZgw3yTm3uryyoeWKEZXHDO/\nQwzVXDKuufJxupYN0ofWarFKQmYIbUpRxc+u7swHhw2LzIWpvzaQIDRAJ3AQ1OZr\nkP4nXzJ80FXBfaeLr6YtqABtupF1Z9E/s1HtZBDNAoGAZYsE/lOkuHDb1gopJI4n\nzEgish6nAIBGrWPsYzYB7m9u9mbxuDaang9YAHa+61L5fL9s0JBRFnxEcS3rtuwP\npa/W4UBdE+wt7hYYR3a+eJEQbTmdvq9D1P9Va2fDatkZl/SZNL9xCZwq1kRtLbv2\nOZdycNFBIi5KtOsw+Zs5CL0=\n-----END PRIVATE KEY-----\n",
    client_email:
      "firebase-adminsdk-omr13@grandlimopassenger.iam.gserviceaccount.com",
  };

  const { client_email, private_key } = serviceJson;

  const iat = Math.floor(Date.now() / 1000);
  const exp = iat + 3600;

  const header = {
    alg: "RS256",
    typ: "JWT",
  };

  const payload = {
    iss: client_email,
    scope: "https://www.googleapis.com/auth/firebase.messaging",
    aud: "https://oauth2.googleapis.com/token",
    iat,
    exp,
  };

  const base64UrlEncode = (obj) => {
    return Buffer.from(JSON.stringify(obj))
      .toString("base64")
      .replace(/=/g, "")
      .replace(/\+/g, "-")
      .replace(/\//g, "_");
  };

  const encodedHeader = base64UrlEncode(header);
  const encodedPayload = base64UrlEncode(payload);
  const dataToSign = `${encodedHeader}.${encodedPayload}`;

  const sign = crypto.createSign("RSA-SHA256");
  sign.update(dataToSign);
  sign.end();
  const signature = sign
    .sign(private_key, "base64")
    .replace(/=/g, "")
    .replace(/\+/g, "-")
    .replace(/\//g, "_");

  const jwt = `${encodedHeader}.${encodedPayload}.${signature}`;

  const url = "https://oauth2.googleapis.com/token";
  const data = new URLSearchParams({
    grant_type: "urn:ietf:params:oauth:grant-type:jwt-bearer",
    assertion: jwt,
  });

  try {
    const response = await axios.post(url, data.toString(), {
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
    });

    if (response.data.access_token) {
      return response.data.access_token;
    } else {
      console.error(response.data);
      return "";
    }
  } catch (error) {
    console.error(
      "Error generating access token:",
      error.response ? error.response.data : error.message
    );
    return "";
  }
};

exports.sendPassengerAndroidPushNotification = async (
  dDeviceTokens = [],
  pushMessage = {},
  token = ""
) => {
  if (!dDeviceTokens.length || !pushMessage || !token) {
    console.error("Missing required parameters.");
    return false;
  }

  const url =
    "https://fcm.googleapis.com/v1/projects/grandlimopassenger/messages:send";
  const headers = {
    Authorization: `Bearer ${token}`,
    "Content-Type": "application/json",
  };

  const responses = {};

  for (const deviceToken of dDeviceTokens) {
    const fields = {
      message: {
        token: deviceToken,
        notification: {
          title: pushMessage.title || "Default Title",
          body: pushMessage.message || "Default Body",
        },
        data: {
          title: pushMessage.title,
          body: pushMessage.message,
        },
      },
    };

    try {
      const response = await axios.post(url, fields, { headers });
      // console.log(
      //   `Push notification sent successfully to token ${deviceToken}!`
      // );
      responses[deviceToken] = response.data;
    } catch (error) {
      const errorMessage = error.response ? error.response.data : error.message;
      // console.error(`FCM Error for token ${deviceToken}:`, errorMessage);
      responses[deviceToken] = errorMessage;
    }
  }

  return responses;
};
