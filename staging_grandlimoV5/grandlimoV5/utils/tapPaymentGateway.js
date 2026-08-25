const axios = require("axios");

const BASE_URL = "https://api.tap.company";
const VERSION_2 = `${BASE_URL}/v2/`;
const getURL = (url, version = 2) => {
  if (version === 2) {
    return `${VERSION_2}${url}`;
  }
  return `${BASE_URL}${url}`;
};

exports.createCardToken = async (cardDetails) => {
  try {
    const SECRECT_KEY =
      global.settings.tapPaymentGatewayMode === "L"
        ? global.settings.tapPaymentGatewayLiveSecrectKey
        : global.settings.tapPaymentGatewayTestSecrectKey;

    const HEADERS = {
      Authorization: `Bearer ${SECRECT_KEY}`,
      accept: "application/json",
      "content-type": "application/json",
    };

    // cardDetails = { number, exp_month, exp_year, cvc, name }
    let payload = {
      type: "CARD",
      number: cardDetails.number,
      exp_month: cardDetails.exp_month,
      exp_year: cardDetails.exp_year,
      cvc: cardDetails.cvc,
      name: cardDetails.name,
      currency: global.settings.site_currency,

      // optional:
      // currency: cardDetails.currency || "KWD"
    };

    let response = await axios.post(getURL("tokens/cards"), payload, {
      headers: HEADERS,
    });

    if (response.data) {
      return response.data; // contains token.id and card.id
    }

    return {};
  } catch (err) {
    if (err.response) {
      console.error("Tap createCardToken error:", err.response.data);
    } else {
      console.error("Tap createCardToken error:", err.message);
    }
    return {};
  }
};

exports.attachCardToCustomer = async (customerId, tokenId) => {
  try {
    const SECRET_KEY =
      global.settings.tapPaymentGatewayMode === "L"
        ? global.settings.tapPaymentGatewayLiveSecrectKey
        : global.settings.tapPaymentGatewayTestSecrectKey;

    const HEADERS = {
      Authorization: `Bearer ${SECRET_KEY}`,
      accept: "application/json",
      "content-type": "application/json",
    };

    const payload = {
      source: { id: tokenId }, // ✅ Correct field per Tap docs
    };

    const response = await axios.post(
      getURL(`customers/${customerId}/cards`),
      payload,
      { headers: HEADERS }
    );

    return response.data || {};
  } catch (err) {
    if (err.response)
      console.error("attachCardToCustomer error:", err.response.data);
    else console.error("attachCardToCustomer error:", err.message);
    return {};
  }
};

exports.createCustomer = async (passengerDetails) => {
  try {
    const SECRECT_KEY =
      global.settings.tapPaymentGatewayMode === "L"
        ? global.settings.tapPaymentGatewayLiveSecrectKey
        : global.settings.tapPaymentGatewayTestSecrectKey;

    const HEADERS = {
      Authorization: `Bearer ${SECRECT_KEY}`,
      accept: "application/json",
      "content-type": "application/json",
    };

    let countryCode = passengerDetails.country_code;
    let phoneNumber = passengerDetails.phone;
    // if (phoneNumber.length > 8) {
    //   countryCode = "+91";
    // }

    let customerDetails = {
      first_name: passengerDetails.name,
      last_name: passengerDetails.lastname,
      middle_name: "",
      currency: global.settings.site_currency,
      email: passengerDetails.email,
      // phone: {
      //   country_code: passengerDetails.country_code,
      //   number: passengerDetails.phone,
      // },
      phone: {
        country_code: countryCode,
        number: phoneNumber,
      },
      metadata: {
        passengerId: passengerDetails._id,
      },
    };

    let response = await axios.post(getURL("customers"), customerDetails, {
      headers: HEADERS,
    });
    if (response.data) {
      return response.data;
    }
    return {};
  } catch (err) {
    if (err.response) {
      console.error(err.response.data);
    } else {
      console.error(err.message);
    }
    return {};
  }
};

exports.createCharge = async ({ amount, metadata, customer, redirectUrl }) => {
  try {
    const SECRECT_KEY =
      global.settings.tapPaymentGatewayMode === "L"
        ? global.settings.tapPaymentGatewayLiveSecrectKey
        : global.settings.tapPaymentGatewayTestSecrectKey;

    const HEADERS = {
      Authorization: `Bearer ${SECRECT_KEY}`,
      accept: "application/json",
      "content-type": "application/json",
    };
    let chargeInfo = {
      amount: amount,
      currency: global.settings.site_currency,
      customer_initiated: true,
      threeDSecure: true,
      save_card: true,
      customer: {
        id: customer.customerTapPaymentId,
      },
      metadata: metadata,
      source: {
        id: global.settings.tapPaymentGatewaySource,
      },
      redirect: {
        url: redirectUrl,
      },
    };

    let response = await axios.post(getURL("charges"), chargeInfo, {
      headers: HEADERS,
    });

    if (response.data) {
      return response.data;
    }

    return {};
  } catch (err) {
    if (err.response) {
      console.error(err.response.data);
    }
    return {};
  }
};

exports.getChargeDetails = async (tapId) => {
  try {
    const SECRECT_KEY =
      global.settings.tapPaymentGatewayMode === "L"
        ? global.settings.tapPaymentGatewayLiveSecrectKey
        : global.settings.tapPaymentGatewayTestSecrectKey;

    const HEADERS = {
      Authorization: `Bearer ${SECRECT_KEY}`,
      accept: "application/json",
      "content-type": "application/json",
    };
    let response = await axios.get(getURL(`charges/${tapId}`), {
      headers: HEADERS,
    });
    if (response && response.data) {
      return response.data;
    }

    return {};
  } catch (err) {
    if (err.response) {
      console.error(err.response.data);
    }
    return {};
  }
};

/* Sasidharan April 23 2024 */
exports.getMyCards = async (customerId, start = 0, limit = 10) => {
  try {
    const SECRECT_KEY =
      global.settings.tapPaymentGatewayMode === "L"
        ? global.settings.tapPaymentGatewayLiveSecrectKey
        : global.settings.tapPaymentGatewayTestSecrectKey;

    const HEADERS = {
      Authorization: `Bearer ${SECRECT_KEY}`,
      accept: "application/json",
      "content-type": "application/json",
    };
    let response = await axios.get(
      getURL(`card/${customerId}?limit=${limit}&starting_after=${start}`),
      {
        headers: HEADERS,
      }
    );
    if (response && response.data) {
      let cards = response.data;
      return cards;
    }
  } catch (err) {
    if (err.response) {
      console.error(err.response.data);
    } else {
      console.error(err.message);
    }
  }
  return {};
};

exports.deleteMyCard = async (customerId, cardId) => {
  try {
    const SECRECT_KEY =
      global.settings.tapPaymentGatewayMode === "L"
        ? global.settings.tapPaymentGatewayLiveSecrectKey
        : global.settings.tapPaymentGatewayTestSecrectKey;

    const HEADERS = {
      Authorization: `Bearer ${SECRECT_KEY}`,
      accept: "application/json",
      "content-type": "application/json",
    };
    let response = await axios.delete(getURL(`card/${customerId}/${cardId}`), {
      headers: HEADERS,
    });
    if (response && response.data) {
      let cards = response.data;
      return cards;
    }
  } catch (err) {
    if (err.response) {
      console.error(err.response.data);
    } else {
      console.error(err.message);
    }
  }
  return {};
};

/* Sasidharan May 06 2024 */
const generateToken = async (cardId, customerId) => {
  try {
    const SECRECT_KEY =
      global.settings.tapPaymentGatewayMode === "L"
        ? global.settings.tapPaymentGatewayLiveSecrectKey
        : global.settings.tapPaymentGatewayTestSecrectKey;

    const HEADERS = {
      Authorization: `Bearer ${SECRECT_KEY}`,
      accept: "application/json",
      "content-type": "application/json",
    };

    let tokenInfo = {
      saved_card: {
        card_id: cardId,
        customer_id: customerId,
      },
    };
    let response = await axios.post(getURL("tokens"), tokenInfo, {
      headers: HEADERS,
    });
    if (response.data) {
      response = response.data;
      return response.id;
    }
    return "";
  } catch (err) {
    if (err.response) {
      console.error(err.response.data);
    } else {
      console.error(err.message);
    }
    return "";
  }
};

const createChargeWithToken = async ({
  token,
  tripFare,
  customerId,
  metadata,
  paymentAgreementId,
}) => {
  try {
    const SECRECT_KEY =
      global.settings.tapPaymentGatewayMode === "L"
        ? global.settings.tapPaymentGatewayLiveSecrectKey
        : global.settings.tapPaymentGatewayTestSecrectKey;

    const HEADERS = {
      Authorization: `Bearer ${SECRECT_KEY}`,
      accept: "application/json",
      "content-type": "application/json",
    };

    // Create customer response object.
    let authorizeInfo = {
      amount: tripFare,
      currency: global.settings.site_currency,
      customer_initiated: false,
      threeDSecure: false,
      customer: {
        id: customerId,
      },
      metadata: metadata,
      source: {
        id: token,
      },
      payment_agreement: {
        id: paymentAgreementId,
      },
      redirect: {
        url: global.settings.tapPaymentGatewayTripURL,
      },
    };
    let response = await axios.post(getURL("charges"), authorizeInfo, {
      headers: HEADERS,
    });
    if (response.data) {
      response = response.data;
      return response;
    }
    return {};
  } catch (err) {
    if (err.response) {
      console.error(err.response.data);
    } else {
      console.error(err.message);
    }
    return {};
  }
};

/* Auto payment deduction */
exports.deductMoneyFromCustomerAccount = async (
  passengerDetails,
  tripDetails,
  cardDetails
) => {
  // return {};

  /* Generate Token */
  let token = await generateToken(
    cardDetails.id,
    passengerDetails.customerTapPaymentId
  );
  if (!token) return {};

  /* Process payment */
  let payment = await createChargeWithToken({
    token,
    tripFare: tripDetails.tripFare,
    metadata: tripDetails.metadata,
    customerId: passengerDetails.customerTapPaymentId,
    paymentAgreementId: cardDetails.paymentAgreementId,
  });

  if (!payment || Object.keys(payment).length <= 0) return {};
  return payment;
};

exports.getCustomerInfo = async (customerID) => {
  try {
    const SECRECT_KEY =
      global.settings.tapPaymentGatewayMode === "L"
        ? global.settings.tapPaymentGatewayLiveSecrectKey
        : global.settings.tapPaymentGatewayTestSecrectKey;

    const HEADERS = {
      Authorization: `Bearer ${SECRECT_KEY}`,
      accept: "application/json",
      "content-type": "application/json",
    };
    let response = await axios.get(getURL(`customers/${customerID}`), {
      headers: HEADERS,
    });
    if (response.data) {
      response = response.data;
      return response;
    }
  } catch (err) {
    if (err.response) {
      console.error(err.response.data);
    } else {
      console.error(err.message);
    }
  }
  return {};
};

exports.updateCustomerDefaultCard = async (customerID, cardId) => {
  try {
    // console.error("======== UPDATING DEFAULT CARD ========");
    // console.error(customerID, cardId);
    // console.error("======== UPDATING DEFAULT CARD END ========");

    const SECRECT_KEY =
      global.settings.tapPaymentGatewayMode === "L"
        ? global.settings.tapPaymentGatewayLiveSecrectKey
        : global.settings.tapPaymentGatewayTestSecrectKey;

    const HEADERS = {
      Authorization: `Bearer ${SECRECT_KEY}`,
      accept: "application/json",
      "content-type": "application/json",
    };
    let response = await axios.put(
      getURL(`customers/${customerID}`),
      {
        id: customerID,
        card: {
          id: cardId,
          mode: "DEFAULT",
        },
      },
      {
        headers: HEADERS,
      }
    );
    if (response.data) {
      response = response.data;
      return response;
    }
  } catch (err) {
    if (err.response) {
      console.error(err.response.data);
    } else {
      console.error(err.message);
    }
  }
  return {};
};

/* Sasidharan Aug 5 2024 */
exports.checkIfUserHasACard = async (customerId) => {
  if (!customerId) return false;

  try {
    const SECRECT_KEY =
      global.settings.tapPaymentGatewayMode === "L"
        ? global.settings.tapPaymentGatewayLiveSecrectKey
        : global.settings.tapPaymentGatewayTestSecrectKey;

    const HEADERS = {
      Authorization: `Bearer ${SECRECT_KEY}`,
      accept: "application/json",
      "content-type": "application/json",
    };
    let response = await axios.get(getURL(`card/${customerId}`), {
      headers: HEADERS,
    });
    if (response && response.data) {
      response = response.data;
      let cards = typeof response.data != "undefined" ? response.data : [];
      return cards && cards.length > 0 ? true : false;
    }
  } catch (err) {
    if (err.response) {
      console.error(err.response.data);
    } else {
      console.error(err.message);
    }
  }
  return false;
};
