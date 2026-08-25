const axios = require("axios");
const aesjs = require("aes-js");
const hesabeCrypt = require("./hesabeCrypt");

//ramya may 12 2026
exports.encrypteData = (data) => {
  let secret_key = "PkW64zMe5NVdrlPVNnjo2Jy9nOb7v1Xg";
  let iv_key = "5NVdrlPVNnjo2Jy9";

  if (data) {
    let secret = secret_key;
    let ivCode = iv_key;

    let key = aesjs.utils.utf8.toBytes(secret);
    let iv = aesjs.utils.utf8.toBytes(ivCode);

    let instance = new hesabeCrypt(key, iv);

    let text = data;
    let encrypted = instance.encryptAes(JSON.stringify(text));
    let encrypted_data = encrypted;

    return encrypted_data;
  }
};

//ramya may 12 2026
exports.decrypteData = (value) => {
  let secret_key = "PkW64zMe5NVdrlPVNnjo2Jy9nOb7v1Xg";
  let iv_key = "5NVdrlPVNnjo2Jy9";
  if (value) {
    let secret = secret_key; // merchant secret key
    let ivCode = iv_key; // merchant iv code

    let key = aesjs.utils.utf8.toBytes(secret);
    let iv = aesjs.utils.utf8.toBytes(ivCode);

    let instance = new hesabeCrypt(key, iv);

    let text = value;
    let decrypted = instance.decryptAes(text);
    let decrypted_data = JSON.parse(decrypted);

    return decrypted_data;
  }
};

//ramya may 11 2026 - modified for hesabe updated version
exports.createTransaction = async (req, res) => {
  console.error("req body :", req.body);
  const { amount, variable1, customerId } = req.body;
  try {
    let data = {
      merchantCode: "842217",
      amount: amount,
      currency: "KWD",
      paymentType: 2,
      saveCard: true,
      version: "3.0",
      customer_id: customerId,
      channel: "mobile",
      responseUrl: global.settings.hesabe_success_url,
      failureUrl: global.settings.hesabe_failure_url,
      variable1: variable1,
    };
    let encrypted_results = this.encrypteData(data);
    console.error("encrypt :", encrypted_results);

    let headers = {
      accessCode: "c333729b-d060-4b74-a49d-7686a8353481",
      Accept: "application/json",
      "Content-Type": "application/json",
    };
    let response = await axios.post(
      "https://sandbox.hesabe.com/checkout",
      { data: encrypted_results },
      { headers }
    );

    console.error("response : ", response);
    if (response && response.data) {
      let decrypted = this.decrypteData(response.data);
      console.error("decrypted : ", decrypted.webviewUrl);
    } else {
      return null;
    }
  } catch (err) {
    console.error(err.message);
    console.error(err.response);
    if (err && err.response && err.response.data) {
      console.error(err.data);
    }
    return null;
  }
};

//ramya may 14 2026
exports.createHesabeCustomer = async (passengerDetails) => {
  console.error("calling create hesabe customer");
  try {
    const merchantCode = "842217";
    const accessCode = "c333729b-d060-4b74-a49d-7686a8353481";

    const payload = {
      merchantCode: merchantCode,
      name: passengerDetails.name,
      email: passengerDetails.email,
      mobile_number: passengerDetails.phone,
    };

    console.error("payload : ", payload);

    let encrypted_results = this.encrypteData(payload);
    console.error("encrypted_results : ", encrypted_results);
    const headers = {
      accessCode: accessCode,
      Accept: "application/json",
      "Content-Type": "application/json",
    };

    const response = await axios.post(
      "https://sandbox.hesabe.com/api/direct-payment/customer",
      {
        data: encrypted_results,
      },
      {
        headers,
      }
    );

    console.error("response:", response);
    if (response && response.data) {
      let decrypted = this.decrypteData(response.data);
      console.error("decrypted : ", decrypted);
      console.error("decrypted : ", decrypted.response);

      return decrypted.response;
    }
  } catch (err) {
    if (err.response) {
      console.error("ERROR  :", err.response);

      console.error("ERROR RESPONSE :", err.response.data);

      let decryptErr = this.decrypteData(err.response.data);
      console.error("decryptErr : ", decryptErr);
    } else {
      console.error("ERROR :", err.message);
    }

    return {};
  }
};
