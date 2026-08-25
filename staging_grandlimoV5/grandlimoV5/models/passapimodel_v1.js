var db = require("../config/dbconnection");
var t = require("../config/table_config.json");
var md5 = require("md5");

/* Sasidharan April 30 2024 */
const { createCustomer } = require("../utils/tapPaymentGateway");
const apimodel = require("./apimodel");

exports.getSiteInfo = function (q) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_SITEINFO);
  arguments = [
    //{
    // 	'$match': {
    // 		'companyinfo.company_api_key':key,
    // 		'companydetails.company_status':'A',
    // 	},
    // },
    {
      $lookup: {
        from: t.MDB_CSC,
        localField: "site_country",
        foreignField: "_id",
        as: "csc",
      },
    },
    { $unwind: "$csc" },
    {
      $project: {
        app_name: "$app_name",
        customer_support: "$phone_number",
        site_country: "$csc.country_name",
        site_currency: "$site_currency",
        iOS_Version_Number: "$iOS_Version_Number",
        currency_symbol: "$csc.currency_symbol",
        currency_code: "$csc.currency_code",
        aboutpage_description_ar: "$aboutpage_description_ar",
        aboutpage_description: "$aboutpage_description",
        admin_email: "$admin_email",
        skip_credit: { $ifNull: ["$skip_credit", 0] },
        book_later_interval: { $ifNull: ["$book_later_time", 0] },
        book_now_interval: { $ifNull: ["$book_now_time", 0] },
        airport_trip_interval: { $ifNull: ["$airport_trip_time", 0] },
        repeat_trip_interval: { $ifNull: ["$repeat_trip_time", 0] },
        airport_pick_up: { $ifNull: ["$airport_pick_up", 0] },
        airport_drop: { $ifNull: ["$airport_drop", 0] },
        default_country_code: { $ifNull: ["$csc.country_code", 0] },
        cancellation_setting: { $ifNull: ["$cancellation_fare_setting", 0] },
        facebook_share: { $ifNull: ["$facebook_share", 0] },
        twitter_share: { $ifNull: ["$twitter_share", 0] },
        instagram_share: { $ifNull: ["$instagram_share", 0] },
        facebook_key: { $ifNull: ["$facebook_key", 0] },
        version_code: { $ifNull: ["$version_code", 0] },
        version_name: { $ifNull: ["$version_name", 0] },
        is_mandatory_update: { $ifNull: ["$is_mandatory_update", 0] },
        iOS_Version_Number: { $ifNull: ["$iOS_Version_Number", 0] },
        reward_per_trip: { $ifNull: ["$reward_per_trip", 0] },
        reward_kwd: { $ifNull: ["$reward_kwd", 0] },
        minimum_reward_request: { $ifNull: ["$minimum_reward_request", 0] },
        aboutpage_description_ar: { $ifNull: ["$app_description_ar", 0] },
        aboutpage_description: { $ifNull: ["$app_description", 0] },
        fare_calculation_type: { $ifNull: ["$fare_calculation_type", 2] },
        nearestdriver_api_interval: {
          $ifNull: ["$nearestdriver_api_interval", 1],
        }, //10 Jun 2021
        directions_api_interval: { $ifNull: ["$directions_api_interval", 1] }, //10 Jun 2021
        //'fare_calculation_type': { $ifNull : ['$fare_calculation_type_version1',1]},

        /* Sasidharan july 15 2022 */
        luggage_count: { $ifNull: ["$luggage_count", 5] },
        conversation: { $ifNull: ["$conversation", []] },
        door_assistance: { $ifNull: ["$door_assistance", []] },
        airportSignOptions: { $ifNull: ["$airportSignOptions", []] },
        conversation_ar: { $ifNull: ["$conversation_ar", []] },
        door_assistance_ar: { $ifNull: ["$door_assistance_ar", []] },
        airportSignOptions_arr: { $ifNull: ["$airportSignOptions_arr", []] },

        max_passengers_limit: "$max_passengers_limit",
        new_ios_app_version: "$new_ios_app_version",

        /* Sasidharan April 05 2024 */
        tapPaymentGatewayStatus: { $ifNull: ["$tapPaymentGatewayStatus", 0] },

        /* Sasidharan April 16 2024 */
        tapPaymentGatewayMobileTestSecretKey: {
          $ifNull: ["$tapPaymentGatewayMobileTestSecretKey", ""],
        },
        tapPaymentGatewayMobileLiveSecretKey: {
          $ifNull: ["$tapPaymentGatewayMobileLiveSecretKey", ""],
        },
        tapPaymentGatewayMode: { $ifNull: ["$tapPaymentGatewayMode", "T"] },

        /* Sasidharan May 02 2024  */
        tapPaymentGatewayWalletURL: {
          $ifNull: ["$tapPaymentGatewayWalletURL", ""],
        },
        tapPaymentGatewayTripURL: {
          $ifNull: ["$tapPaymentGatewayTripURL", ""],
        },
        tapPaymentGatewayTestAndroidSecretKey: {
          $ifNull: ["$tapPaymentGatewayTestAndroidSecretKey", ""],
        },
        tapPaymentGatewayTestAndroidPublicKey: {
          $ifNull: ["$tapPaymentGatewayTestAndroidPublicKey", ""],
        },
        tapPaymentGatewayLiveAndroidSecretKey: {
          $ifNull: ["$tapPaymentGatewayLiveAndroidSecretKey", ""],
        },
        tapPaymentGatewayLiveAndroidPublicKey: {
          $ifNull: ["$tapPaymentGatewayLiveAndroidPublicKey", ""],
        },
        displayPassengerAccountDeleteOption: {
          $ifNull: ["$displayPassengerAccountDeleteOption", 0],
        },
        timezone: "$timezone",
      },
    },
  ];

  collection.aggregate(arguments).toArray(function (err, results) {
    //console.log('err',err);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.cmsPages = function (q) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_CMS);
  arguments = [
    {
      $match: {
        content_status: { $eq: 1 },
      },
    },
    {
      $project: {
        id: "$_id",
        menu_name: "$menu_name",
        menu_link: "$menu_link",
      },
    },
  ];

  //console.log(arguments);
  collection.aggregate(arguments).toArray(function (err, results) {
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.company_model_details = function (q) {
  var deferred = q.defer();
  var collection = db.get().collection(t.MDB_MOTOR_MODEL);
  var arguments = [
    //{'$unwind':'$hourly_fare_list'},
    {
      $match: {
        model_status: "A",
      },
    },
    {
      $project: {
        model_id: "$_id",
        model_name: "$model_name",
        model_name_ar: "$model_name_ar",
        category_name: "$category_name",
        category_name_ar: "$category_name_ar",
        model_size: "$model_size",
        max_luggage: "$max_luggage",
        model_image: "$model_image",
        model_image_new: "$model_image_new",
        model_image_unfocus: "$model_image_unfocus",
        iconic_image: "$iconic_image",
        model_image_thumb: "$model_image_thumb",
        model_image_unfocus_thumb: "$model_image_unfocus_thumb",
        iconic_image_thumb: "$iconic_image_thumb",
        base_fare: "$minutes_fare",
        min_fare: "$base_fare",
        base_mins: "$time",
        waiting_cost_per_hour: "$waiting_time",
        airport_pickup_fare: "$airport_pickup_fare",
        airport_drop_fare: "$airport_drop_fare",
        waiting_free: "$waiting_free",
        //'hourly_fare' : '$hourly_fare',
        min_fare: "$min_fare",
        min_km: "$min_km",
        below_above_km: "$below_above_km",
        below_km: "$below_km",
        above_km: "$above_km",
        cancellation_fare: "$cancellation_fare",
        night_charge: "$night_charge",
        night_timing_from: "$night_timing_from",
        night_timing_to: "$night_timing_to",
        night_fare: "$night_fare",
        evening_charge: "$evening_charge",
        evening_timing_from: "$evening_timing_from",
        night_fare: "$night_fare",
        evening_charge: "$evening_charge",
        evening_timing_from: "$evening_timing_from",
        evening_timing_to: "$evening_timing_to",
        evening_fare: "$evening_fare",
        priority: "$priority",
        model_image_2: "$model_image_2",
        model_fare_image: "$model_fare_image",
        hourly_fare_list: "$hourly_fare_list",
        per_min_time: "$per_min_time",
        per_minutes_fare: "$per_minutes_fare",
      },
    },
    {
      $sort: {
        priority: 1,
      },
    },
  ];

  collection.aggregate(arguments).toArray(function (err, results) {
    //console.log('err',result);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    results = null;
  });
  return deferred.promise;
};

exports.SiteSettings = function (q) {
  var deferred = q.defer();
  var collection = db.get().collection(t.MDB_SITEINFO);
  collection.find({ _id: parseInt(1) }).toArray(function (err, results) {
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.getCompanyKey = function (q, key) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_COMPANY);
  arguments = [
    {
      $match: {
        "companyinfo.company_api_key": key,
        "companydetails.company_status": "A",
      },
    },
    {
      $project: {
        company_cid: "$_id",
        company_currency: "$companyinfo.company_currency",
        company_app_description: "$companyinfo.company_app_description",
      },
    },
  ];

  collection.aggregate(arguments).toArray(function (err, results) {
    //console.log('company key err',err);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

/* Sasidharan Sep 03 2024 added showOTPOnApp key */
exports.check_phone_passengers = function (q, phone) {
  var deferred = q.defer();

  let match_array = {
    phone: phone,
  };

  var collection = db.get().collection(t.MDB_PASSENGERS);
  collection
    .find(match_array, {
      _id: 1,
      phone: 1,
      user_status: 1,
      showOTPOnApp: 1,
    })
    .toArray(function (err, results) {
      deferred.resolve(results);
      deferred.makeNodeResolver();
      result = null;
    });

  return deferred.promise;
};

exports.update_passenger_by_phone = function (q, phone, update_array) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERS);

  collection.update(
    { phone: phone },
    { $set: update_array },
    { $upsert: false },
    function (err, data) {
      //console.log('err2',err);
      deferred.resolve(data);
      deferred.makeNodeResolver();
      data = null;
    }
  );

  return deferred.promise;
};

//Ramya aug 21 2025
exports.update_passenger_by_email = function (q, email, update_array) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERS);

  collection.update(
    { email: email },
    { $set: update_array },
    { $upsert: false },
    function (err, data) {
      //console.log('err2',err);
      deferred.resolve(data);
      deferred.makeNodeResolver();
      data = null;
    }
  );

  return deferred.promise;
};

exports.update_passenger_by_id = function (q, id, update_array) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERS);

  collection.update(
    { _id: parseInt(id) },
    { $set: update_array },
    { $upsert: false },
    function (err, data) {
      //console.log('err2',err);
      deferred.resolve(data);
      deferred.makeNodeResolver();
      data = null;
    }
  );

  return deferred.promise;
};

// exports.get_auto_id = function (q, table_name) {
//   var deferred = q.defer();

//   var collection = db.get().collection(table_name);
//   collection
//     .find({}, { _id: -1 })
//     .sort({ _id: -1 })
//     .limit(1)
//     .toArray(function (err, results) {
//       //console.log('err',err);
//       if (results.length > 0) {
//         results = results;
//       } else {
//         results = [{ _id: 0 }];
//       }
//       deferred.resolve(results);
//       deferred.makeNodeResolver();
//       result = null;
//     });

//   return deferred.promise;
// };

exports.get_auto_id = async function (q, table_name) {
  try {
    const collection = db.get().collection(table_name);

    const result = await collection
      .find({
        $or: [
          { _id: { $type: 16 } }, // int32
          { _id: { $type: 18 } }, // int64
        ],
      })
      .sort({ _id: -1 })
      .limit(1)
      .project({ _id: 1 })
      .toArray();
    console.error("result : ", result);
    if (result.length > 0) {
      return result;
    } else {
      return 0;
    }
  } catch (err) {
    console.error("Error fetching auto ID:", err);
    throw err;
  }
};

//Ramya july 31 2025
exports.updateTrip = async function (trip_id, updateFields) {
  let collection = db.get().collection(t.MDB_PASSENGERSLOG);
  const result = await collection.updateOne(
    { _id: trip_id },
    { $set: updateFields }
  );
  console.error("result : ", result);
  return result;
};
// Ramya July 31 2025
exports.isTripExists = async function (trip_id) {
  try {
    let collection = db.get().collection(t.MDB_PASSENGERSLOG);
    const trip = await collection.findOne({ _id: trip_id });
    return trip ? true : false;
  } catch (err) {
    console.error("Error in isTripExists:", err);
    return false;
  }
};

/* Sasidharan April 30 2024 */
const createCustomerIdIfNotExists = async (customer, passengerID) => {
  let passengerDetails = {
    name: customer.name,
    lastname: customer.lastname,
    email: customer.email,
    country_code: customer.country_code,
    phone: customer.phone,
    _id: passengerID,
  };

  let customerTapDetails = await createCustomer(passengerDetails);
  if (customerTapDetails && Object.keys(customerTapDetails).length > 0) {
    await apimodel.updatePassenger(passengerID, {
      customerTapPaymentId: customerTapDetails.id,
    });

    return customerTapDetails.id;
  }
  return "";
};

exports.insert_passenger_details = function (q, insertArray) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERS);
  collection.insert(insertArray, function (err, results) {
    console.error("insert err", err);
    console.error("results : ", results);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.passenger_profile_by_phone = function (q, phone) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERS);

  var arguments = [
    {
      $match: {
        phone: phone,
      },
    },
    {
      $project: {
        _id: "$_id",
        salutation: { $ifNull: ["$salutation", ""] },
        name: { $ifNull: ["$name", ""] },
        lastname: { $ifNull: ["$lastname", ""] },
        email: { $ifNull: ["$email", ""] },
        phone: { $ifNull: ["$phone", ""] },
        deviceid: { $ifNull: ["$deviceid", ""] },
        devicetoken: { $ifNull: ["$devicetoken", ""] },
        devicetype: { $ifNull: ["$devicetype", 0] },
        devicetype: { $ifNull: ["$devicetype", ""] },
        child_exist: { $ifNull: ["$child_exist", 0] },
        allow_creditcard: { $ifNull: ["$allow_creditcard", 0] },
        login_status: { $ifNull: ["$login_status", 0] },
        profile_image: { $ifNull: ["$profile_image", 0] },
        wallet_amount: { $ifNull: ["$wallet_amount", 0] },
        wallet_block: { $ifNull: ["$wallet_block", 0] },
        vip_user: { $ifNull: ["$vip_user", 0] },
        /* Sasidharan April 30 2024 */
        customerTapPaymentId: { $ifNull: ["$customerTapPaymentId", ""] },
        /* Sasidharan Aug 5 2024 */
        premiumCustomer: { $ifNull: ["$premiumCustomer", 0] },
      },
    },
  ];

  collection.aggregate(arguments).toArray(function (err, results) {
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

/* Sasidharan April 30 2024 */
exports.passenger_profile_by_phone_with_tap_id = function (
  q,
  phone,
  passengerDetails
) {
  var deferred = q.defer();
  var collection = db.get().collection(t.MDB_PASSENGERS);

  var arguments = [
    {
      $match: {
        phone: phone,
      },
    },
    {
      $project: {
        _id: "$_id",
        salutation: { $ifNull: ["$salutation", ""] },
        name: { $ifNull: ["$name", ""] },
        lastname: { $ifNull: ["$lastname", ""] },
        email: { $ifNull: ["$email", ""] },
        phone: { $ifNull: ["$phone", ""] },
        deviceid: { $ifNull: ["$deviceid", ""] },
        devicetoken: { $ifNull: ["$devicetoken", ""] },
        devicetype: { $ifNull: ["$devicetype", 0] },
        devicetype: { $ifNull: ["$devicetype", ""] },
        child_exist: { $ifNull: ["$child_exist", 0] },
        allow_creditcard: { $ifNull: ["$allow_creditcard", 0] },
        login_status: { $ifNull: ["$login_status", 0] },
        profile_image: { $ifNull: ["$profile_image", 0] },
        wallet_amount: { $ifNull: ["$wallet_amount", 0] },
        wallet_block: { $ifNull: ["$wallet_block", 0] },
        vip_user: { $ifNull: ["$vip_user", 0] },
        /* Sasidharan April 30 2024 */
        customerTapPaymentId: { $ifNull: ["$customerTapPaymentId", ""] },
        /* Sasidharan Aug 5 2024 */
        premiumCustomer: { $ifNull: ["$premiumCustomer", 0] },
      },
    },
  ];

  /* Sasidharan April 30 2024 added async */
  collection.aggregate(arguments).toArray(async function (err, results) {
    /* Sasidharan April 30 2024 */
    if (results && results.length > 0) {
      let customer = results[0];
      let id = customer._id;
      customer = {
        ...customer,
        name: passengerDetails.firstname,
        lastname:
          passengerDetails.lastname != "" ? passengerDetails.lastname : "-",
        email: passengerDetails.email,
        country_code: passengerDetails.country_code,
        phone: passengerDetails.phone,
      };
      if (
        !customer.hasOwnProperty("customerTapPaymentId") ||
        !customer["customerTapPaymentId"]
      ) {
        results[0]["customerTapPaymentId"] = await createCustomerIdIfNotExists(
          customer,
          id
        );
      }
    }

    deferred.resolve(results);
    deferred.makeNodeResolver();
    results = null;
  });

  return deferred.promise;
};
//Ramya Aug 21 2025
exports.passenger_profile_by_email_with_tap_id = function (
  q,
  email,
  passengerDetails
) {
  var deferred = q.defer();
  var collection = db.get().collection(t.MDB_PASSENGERS);

  var arguments = [
    {
      $match: {
        email: email,
      },
    },
    {
      $project: {
        _id: "$_id",
        salutation: { $ifNull: ["$salutation", ""] },
        name: { $ifNull: ["$name", ""] },
        lastname: { $ifNull: ["$lastname", ""] },
        email: { $ifNull: ["$email", ""] },
        phone: { $ifNull: ["$phone", ""] },
        deviceid: { $ifNull: ["$deviceid", ""] },
        devicetoken: { $ifNull: ["$devicetoken", ""] },
        devicetype: { $ifNull: ["$devicetype", 0] },
        devicetype: { $ifNull: ["$devicetype", ""] },
        child_exist: { $ifNull: ["$child_exist", 0] },
        allow_creditcard: { $ifNull: ["$allow_creditcard", 0] },
        login_status: { $ifNull: ["$login_status", 0] },
        profile_image: { $ifNull: ["$profile_image", 0] },
        wallet_amount: { $ifNull: ["$wallet_amount", 0] },
        wallet_block: { $ifNull: ["$wallet_block", 0] },
        vip_user: { $ifNull: ["$vip_user", 0] },
        /* Sasidharan April 30 2024 */
        customerTapPaymentId: { $ifNull: ["$customerTapPaymentId", ""] },
        /* Sasidharan Aug 5 2024 */
        premiumCustomer: { $ifNull: ["$premiumCustomer", 0] },
      },
    },
  ];

  /* Sasidharan April 30 2024 added async */
  collection.aggregate(arguments).toArray(async function (err, results) {
    /* Sasidharan April 30 2024 */
    if (results && results.length > 0) {
      let customer = results[0];
      let id = customer._id;
      customer = {
        ...customer,
        name: passengerDetails.firstname,
        lastname:
          passengerDetails.lastname != "" ? passengerDetails.lastname : "-",
        email: passengerDetails.email,
        country_code: passengerDetails.country_code,
        phone: passengerDetails.phone,
      };
      if (
        !customer.hasOwnProperty("customerTapPaymentId") ||
        !customer["customerTapPaymentId"]
      ) {
        results[0]["customerTapPaymentId"] = await createCustomerIdIfNotExists(
          customer,
          id
        );
      }
    }

    deferred.resolve(results);
    deferred.makeNodeResolver();
    results = null;
  });

  return deferred.promise;
};
exports.passenger_profile_by_id = function (q, id) {
  var deferred = q.defer();

  let match_array = {
    _id: parseInt(id),
  };

  var collection = db.get().collection(t.MDB_PASSENGERS);

  var arguments = [
    {
      $match: {
        _id: parseInt(id),
      },
    },
    {
      $project: {
        _id: "$_id",

        /* Sasidharan june 20 2022 */
        created_date: { $ifNull: ["$created_date", ""] },

        //ramya nov 23 2023
        push_notification: { $ifNull: ["$push_notification", 10] },
        perferred_temparature: { $ifNull: ["$perferred_temparature", 0] },
        conversation: { $ifNull: ["$conversation", 0] },
        door_assistance: { $ifNull: ["$door_assistance", 0] },
        notes_for_driver: { $ifNull: ["$notes_for_driver", ""] },

        salutation: { $ifNull: ["$salutation", ""] },
        name: { $ifNull: ["$name", ""] },
        lastname: { $ifNull: ["$lastname", ""] },
        email: { $ifNull: ["$email", ""] },
        phone: { $ifNull: ["$phone", ""] },
        //Ramya apr 16 2024
        country_code: { $ifNull: ["$country_code", ""] },
        deviceid: { $ifNull: ["$device_id", ""] },
        devicetoken: { $ifNull: ["$device_token", ""] },
        user_status: { $ifNull: ["$user_status", ""] },
        devicetype: { $ifNull: ["$device_type", 0] },
        child_exist: { $ifNull: ["$child_exist", 0] },
        allow_creditcard: { $ifNull: ["$allow_creditcard", 0] },
        login_status: { $ifNull: ["$login_status", 0] },
        profile_image: { $ifNull: ["$profile_image", 0] },
        wallet_amount: { $ifNull: ["$wallet_amount", 0] },
        wallet_block: { $ifNull: ["$wallet_block", 0] },
        vip_user: { $ifNull: ["$vip_user", 0] },
        notes: { $ifNull: ["$notes", 0] },
        discount_wallet: { $ifNull: ["$discount_wallet", 0] },
        lang: { $ifNull: ["$lang", "en"] },
        app_version: { $ifNull: ["$app_version", 0] },
        banner_notification_status: {
          $ifNull: ["$banner_notification_status", 0],
        },
        //'last_wallet_update': { $ifNull : ['$last_wallet_update',0]},
        reward_points: { $ifNull: ["$reward_points", 0] },
        wallet_max_limit_check: { $ifNull: ["$wallet_max_limit_check", 0] },
        creditcard_details: { $ifNull: ["$creditcard_details", []] },
        last_wallet_update: {
          $cond: [
            { $ne: ["$last_wallet_update", ""] },
            {
              $dateToString: {
                format: "%d-%m-%Y",
                date: { $add: ["$last_wallet_update", 3 * 60 * 60 * 1000] },
              },
            },
            "",
          ],
        },
        /* Sasidharan April 30 2024 */
        customerTapPaymentId: { $ifNull: ["$customerTapPaymentId", ""] },
        hesabeCustomerPaymentId: { $ifNull: ["$hesabeCustomerPaymentId", ""] },

        /* Sasidharan Aug 5 2024 */
        premiumCustomer: { $ifNull: ["$premiumCustomer", 0] },

        /* Sasidharan sep 16 2024 */
        hasCard: { $ifNull: ["$hasCard", 0] },

        isRequestedForAccountDelete: {
          $ifNull: ["$isRequestedForAccountDelete", 0],
        },
      },
    },
  ];

  /* Sasidharan April 30 2024 added async */
  collection.aggregate(arguments).toArray(async function (err, results) {
    /* Sasidharan April 30 2024 */
    if (results && results.length > 0) {
      let customer = results[0];
      if (
        !customer.hasOwnProperty("customerTapPaymentId") ||
        !customer["customerTapPaymentId"]
      ) {
        results[0]["customerTapPaymentId"] = await createCustomerIdIfNotExists(
          customer,
          id
        );
      }
    }

    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.passenger_verify_otp = function (q, phone, otp) {
  var deferred = q.defer();

  let match_array = {
    phone: phone,
    otp: otp,
  };

  var collection = db.get().collection(t.MDB_PASSENGERS);

  var arguments = [
    {
      $match: match_array,
    },
    {
      $project: {
        _id: "$_id",
        salutation: { $ifNull: ["$salutation", ""] },
        name: { $ifNull: ["$name", ""] },
        lastname: { $ifNull: ["$lastname", ""] },
        email: { $ifNull: ["$email", ""] },
        phone: { $ifNull: ["$phone", ""] },
        deviceid: { $ifNull: ["$deviceid", ""] },
        devicetoken: { $ifNull: ["$devicetoken", ""] },
        devicetype: { $ifNull: ["$devicetype", 0] },
        devicetype: { $ifNull: ["$devicetype", ""] },
        child_exist: { $ifNull: ["$child_exist", 0] },
        allow_creditcard: { $ifNull: ["$allow_creditcard", 0] },
        login_status: { $ifNull: ["$login_status", 0] },
        profile_image: { $ifNull: ["$profile_image", 0] },
        wallet_amount: { $ifNull: ["$wallet_amount", 0] },
        wallet_block: { $ifNull: ["$wallet_block", 0] },
        vip_user: { $ifNull: ["$vip_user", 0] },
        user_status: { $ifNull: ["$user_status", 0] },
        customerTapPaymentId: { $ifNull: ["$customerTapPaymentId", ""] },
        hesabeCustomerPaymentId: { $ifNull: ["$hesabeCustomerPaymentId", ""] },
      },
    },
  ];

  collection.aggregate(arguments).toArray(function (err, results) {
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.passenger_email_exists = function (q, email) {
  var deferred = q.defer();

  let match_array = {
    email: email,
  };

  var collection = db.get().collection(t.MDB_PASSENGERS);
  collection.find(match_array).count(function (err, results) {
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};
//Ramya Aug 21 2025
exports.update_passenger_phone_by_email = function (q, email, phone) {
  var deferred = q.defer();
  var collection = db.get().collection(t.MDB_PASSENGERS);

  collection.findOneAndUpdate(
    { email: email },
    { $set: { phone: phone } },
    { returnDocument: "after" },
    function (err, result) {
      if (err) {
        deferred.reject(err);
      } else {
        if (!result.value) {
          deferred.resolve({ success: false, message: "Email not found" });
        } else {
          deferred.resolve({
            success: true,
            message: "Phone updated successfully",
            passenger: result.value,
          });
        }
      }
    }
  );

  return deferred.promise;
};

// ramya Aug 22 2025
exports.get_passenger_by_unique_id = function (q, uniqueID) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERS);

  var arguments = [
    {
      $match: {
        uniqueID: uniqueID,
      },
    },
    {
      $project: {
        phone: { $ifNull: ["$phone", ""] },
        country_code: { $ifNull: ["$country_code", ""] },
        email: { $ifNull: ["$email", ""] },
      },
    },
  ];

  collection.aggregate(arguments).toArray(function (err, results) {
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

// ramya sep 15 2025
exports.getIdByPhone = async function (phone) {
  const collection = db.get().collection(t.MDB_PASSENGERS);

  const pipeline = [
    { $match: { phone } },
    { $project: { passenger_id: { $ifNull: ["$_id", 0] } } },
  ];

  const results = await collection.aggregate(pipeline).toArray();
  return results;
};

// ramya Aug 21 2025
exports.passenger_verified = function (q, phone) {
  var deferred = q.defer();

  let match_array = {
    phone: phone,
  };

  var collection = db.get().collection(t.MDB_PASSENGERS);

  var arguments = [
    {
      $match: match_array,
    },
    {
      $project: {
        _id: "$_id",
        salutation: { $ifNull: ["$salutation", ""] },
        name: { $ifNull: ["$name", ""] },
        lastname: { $ifNull: ["$lastname", ""] },
        email: { $ifNull: ["$email", ""] },
        phone: { $ifNull: ["$phone", ""] },
        deviceid: { $ifNull: ["$deviceid", ""] },
        devicetoken: { $ifNull: ["$devicetoken", ""] },
        devicetype: { $ifNull: ["$devicetype", 0] },
        devicetype: { $ifNull: ["$devicetype", ""] },
        child_exist: { $ifNull: ["$child_exist", 0] },
        allow_creditcard: { $ifNull: ["$allow_creditcard", 0] },
        login_status: { $ifNull: ["$login_status", 0] },
        profile_image: { $ifNull: ["$profile_image", 0] },
        wallet_amount: { $ifNull: ["$wallet_amount", 0] },
        wallet_block: { $ifNull: ["$wallet_block", 0] },
        vip_user: { $ifNull: ["$vip_user", 0] },
        user_status: { $ifNull: ["$user_status", 0] },
      },
    },
  ];

  collection.aggregate(arguments).toArray(function (err, results) {
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.get_passenger_email_by_phone = function (q, phone) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERS);

  var arguments = [
    {
      $match: {
        phone: phone,
      },
    },
    {
      $project: {
        _id: 1,

        email: { $ifNull: ["$email", ""] },
      },
    },
  ];

  collection.aggregate(arguments).toArray(function (err, results) {
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};
exports.passenger_phone_exists = function (q, phone) {
  var deferred = q.defer();

  let match_array = {
    phone: phone,
  };

  var collection = db.get().collection(t.MDB_PASSENGERS);
  collection.find(match_array).count(function (err, results) {
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.get_passenger_phone_by_email = function (q, email) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERS);

  var arguments = [
    {
      $match: {
        email: email,
      },
    },
    {
      $project: {
        phone: { $ifNull: ["$phone", ""] },
        country_code: { $ifNull: ["$country_code", ""] },
      },
    },
  ];

  collection.aggregate(arguments).toArray(function (err, results) {
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.passenger_email_exists_id = function (q, id, email) {
  var deferred = q.defer();

  let match_array = {
    email: email,
    _id: { $ne: parseInt(id) },
  };

  var collection = db.get().collection(t.MDB_PASSENGERS);
  collection.find(match_array).count(function (err, results) {
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.passenger_pending_list = function (q, passenger_id, timerange) {
  try {
    var deferred = q.defer();
    var hostname = global.settings.base_url;

    var match_query = {
      travel_status: { $in: [parseInt(0), parseInt(7)] },
      passengers_id: parseInt(passenger_id),
      pickup_time: { $gte: timerange[0] },
    };

    var collection = db.get().collection(t.MDB_PASSENGERSLOG);

    let arguments = [
      { $match: match_query },
      {
        $lookup: {
          from: t.MDB_PASSENGERS,
          localField: "passengers_id",
          foreignField: "_id",
          as: "passenger",
        },
      },
      { $unwind: "$passenger" },
      {
        $lookup: {
          from: t.MDB_TAXI,
          localField: "taxi_id",
          foreignField: "_id",
          as: "taxi",
        },
      },
      {
        $unwind: { path: "$taxi", preserveNullAndEmptyArrays: true },
      },
      {
        $lookup: {
          from: t.MDB_PEOPLE,
          localField: "driver_id",
          foreignField: "_id",
          as: "people",
        },
      },
      {
        $unwind: { path: "$people", preserveNullAndEmptyArrays: true },
      },
      {
        $lookup: {
          from: t.MDB_MOTOR_MODEL,
          localField: "taxi_modelid",
          foreignField: "_id",
          as: "model",
        },
      },
      {
        $unwind: { path: "$model", preserveNullAndEmptyArrays: true },
      },
      {
        $project: {
          _id: 0,
          passengers_log_id: "$_id",
          passengers_id: "$passengers_id",
          now_after: "$now_after",
          confirm_flag: "$confirm_flag",
          pickup_location: "$current_location",
          drop_location: "$drop_location",
          pickup_longitude: "$pickup_longitude",
          pickup_latitude: "$pickup_latitude",
          drop_longitude: "$drop_longitude",
          drop_latitude: "$drop_latitude",
          pickup_time: "$pickup_time",
          travel_status: "$travel_status",
          pickup_location: "$current_location",
          drop_location: "$drop_location",
          trip_notes: "$notes_driver",
          airport_pickup: "$airport_pickup",
          airport_type: "$airport_type",
          promocode: "$promocode",
          passenger_name: "$passenger.name", //newely added for child
          passenger_image: "$passenger.profile_image", //newely added for child
          passenger_id: "$passenger._id", //newely added for child
          passengers_log_id: "$_id",
          driver_id: { $ifNull: ["$people._id", "0"] },
          notes_driver: "$passenger.notes_driver",
          name: { $ifNull: ["$people.name", ""] },
          lastname: { $ifNull: ["$people.lastname", ""] },
          drop_time: { $ifNull: ["$drop_time", ""] },
          driver_reply: { $ifNull: ["$driver_reply", ""] },
          actual_pickup_time: "$actual_pickup_time",
          driver_image: { $ifNull: ["$people.profile_picture", ""] },
          model_id: { $ifNull: ["$model._id", 0] },
          model_name: { $ifNull: ["$model.model_name", "-"] },
          model_name_ar: { $ifNull: ["$model.model_name_ar", "-"] },
          luggage: { $ifNull: ["$model.max_luggage", "-"] },
          model_size: { $ifNull: ["$model.model_size", "-"] },
          category: { $ifNull: ["$model.category_name", "-"] },
          category_ar: { $ifNull: ["$model.category_name_ar", "-"] },
          model_image: {
            $cond: {
              if: { $ifNull: ["$model.model_image", false] },
              then: {
                $concat: [
                  hostname,
                  "/public/uploads/model_image/",
                  "$model.model_image",
                ],
              },
              else: "",
            },
          },

          taxi_no: { $ifNull: ["$taxi.taxi_no", "-"] },
          taxi_manufacturer: { $ifNull: ["$taxi.taxi_manufacturer", "-"] },
          taxi_modelid: "$taxi_modelid",
          distance: "$distance",
          account_type: "$passenger.account_type",
          account_type_name: "$account.account_type",
          metric: "$trans.distance_unit",
          drivername: { $ifNull: ["$people.name", ""] },
          driverlastname: { $ifNull: ["$people.lastname", ""] },
          confirm_flag: { $ifNull: ["$confirm_flag", 0] },
          now_after: { $ifNull: ["$now_after", 0] },
          approx_fare: { $ifNull: ["$approx_fare", 0] }, // Client Feedback
          surge_price_percentage: { $ifNull: ["$surge_price_percentage", 0] }, // Client Feedback
        },
      },
      { $sort: { _id: -1 } },
    ];

    collection.aggregate(arguments).toArray(function (err, results) {
      //console.log('company key err',err);
      deferred.resolve(results);
      deferred.makeNodeResolver();
      result = null;
    });
  } catch (err) {
    console.log(err);
  }

  return deferred.promise;
};

exports.passenger_current_trip = function (q, passenger_id) {
  var deferred = q.defer();

  let match_array = {
    passengers_id: parseInt(passenger_id),
    travel_status: {
      $in: [parseInt(5), parseInt(3), parseInt(2), parseInt(9)],
    },
    driver_reply: "A",
  };

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);
  collection.find(match_array, {}).toArray(function (err, results) {
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.get_passenger_added_promocode = function (q, passenger_id) {
  var deferred = q.defer();

  var match_array = {
    passenger_id: parseInt(passenger_id),
    "promo.start_date": { $lte: new Date() },
    "promo.expire_date": { $gte: new Date() },
  };

  var collection = db.get().collection(t.MDB_PASSENGERS_ADDED_PROMO);

  var arguments = [
    {
      $lookup: {
        from: t.MDB_PASSENGERS_PROMO,
        localField: "promocode_id",
        foreignField: "_id",
        as: "promo",
      },
    },
    { $unwind: "$promo" },

    /* Sasidharan july 15 2022 */
    {
      $sort: { _id: -1 },
    },
    {
      $limit: 1,
    },

    { $match: match_array },
    {
      $project: {
        promo_code: "$promo_code",
        passenger_commission: "$coupon.passenger_commission",
        expiry_date: "$promo.expire_date",
        total_used: "$promo.total_used",
        total_applied: "$promo.total_applied",
        promo_limit: "$promo.promo_limit",
        /* Sasidharan apr 18 - 2022 */
        corporate_promocode: "$promo.corporate_promocode",
        /* Sasidharan july 16 2022 */
        apply_user_limit: "$promo.apply_user_limit",
        maximum_allowed_limit: "$promo.maximum_allowed_limit",
      },
    },
  ];
  collection.aggregate(arguments).toArray(function (err, results) {
    //console.log('company key err',err);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.get_promocode_limit = function (q, passenger_id, promo_code) {
  var deferred = q.defer();

  var match_array = {
    passengers_id: parseInt(passenger_id),
    travel_status: parseInt(1),
    promocode: promo_code,
  };

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);

  var arguments = [
    { $match: match_array },
    {
      $lookup: {
        from: t.MDB_PASSENGERS_ADDED_PROMO,
        localField: "promocode",
        foreignField: "promo_code",
        as: "promo",
      },
    },
    { $unwind: "$promo" },
    {
      $project: {
        promocode: "$promocode",
      },
    },
  ];
  //console.log('match_array',arguments);
  collection.aggregate(arguments).toArray(function (err, results) {
    //console.log('count',results);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.get_favourite_list = function (q, passenger_id) {
  try {
    var deferred = q.defer();

    var match_array = {
      passenger_id: parseInt(passenger_id),
      status: "A",
    };

    var collection = db.get().collection(t.MDB_PASSENGERS_FAVOURITES);

    var arguments = [
      { $match: match_array },
      {
        $project: {
          p_favourite_id: "$_id",
          passenger_id: "$passenger_id",
          p_favourite_place: "$p_favourite_place",
          p_fav_latitude: "$p_fav_latitude",
          p_fav_longtitute: "$p_fav_longtitute",
          d_favourite_place: "$d_favourite_place",
          d_fav_latitude: "$d_fav_latitude",
          d_fav_longtitute: "$d_fav_longtitute",
          fav_comments: "$fav_comments",
          fav_icon: "$fav_icon",
          notes: "$notes",
          fav_loction_type: "$fav_loction_type",
        },
      },
    ];
    collection.aggregate(arguments).toArray(function (err, results) {
      //console.log('company key err',err);
      deferred.resolve(results);
      deferred.makeNodeResolver();
      result = null;
    });
  } catch (err) {
    console.log(err);
  }

  return deferred.promise;
};

exports.add_favourite = function (q, insertArray) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERS_FAVOURITES);
  collection.insert(insertArray, function (err, results) {
    //console.log('insert err',err);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.check_fav_exists = function (q, input_array) {
  var deferred = q.defer();

  var p_fav_place = input_array.p_favourite_place;
  var d_fav_place = input_array.d_favourite_place;
  var passenger_id = input_array.passenger_id;

  let match_array = {
    passenger_id: parseInt(passenger_id),
  };

  if (p_fav_place != "" && p_fav_place != undefined) {
    var p_fav_place = new RegExp(p_fav_place, "i");
    match_array.p_favourite_place = { $regex: p_fav_place, $options: "i" };
  }

  if (d_fav_place != "" && d_fav_place != undefined) {
    var d_fav_place = new RegExp(d_fav_place, "i");
    match_array.d_favourite_place = { $regex: d_fav_place, $options: "i" };
  }

  if (
    input_array.p_favourite_id != "" &&
    input_array.p_favourite_id != undefined
  ) {
    match_array._id = { $ne: parseInt(input_array.p_favourite_id) };
  }
  //console.log('match',match_array);
  var collection = db.get().collection(t.MDB_PASSENGERS_FAVOURITES);
  collection.find(match_array, {}).toArray(function (err, results) {
    //console.log('fav err',results);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.check_fav_type_exists = function (q, input_array) {
  var deferred = q.defer();

  var p_fav_locationtype = input_array.p_fav_locationtype;
  var passenger_id = input_array.passenger_id;

  let match_array = {
    passenger_id: parseInt(passenger_id),
    fav_loction_type: p_fav_locationtype,
  };

  if (
    input_array.p_favourite_id != "" &&
    input_array.p_favourite_id != undefined
  ) {
    match_array._id = { $ne: parseInt(input_array.p_favourite_id) };
  }

  var collection = db.get().collection(t.MDB_PASSENGERS_FAVOURITES);
  collection.find(match_array, {}).toArray(function (err, results) {
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.update_favourites = function (q, id, update_array) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERS_FAVOURITES);

  collection.update(
    { _id: parseInt(id) },
    { $set: update_array },
    { $upsert: false },
    function (err, data) {
      //console.log('err2',err);
      deferred.resolve(data);
      deferred.makeNodeResolver();
      data = null;
    }
  );

  return deferred.promise;
};

exports.delete_favourites = function (q, id) {
  var deferred = q.defer();

  let match_array = {
    _id: parseInt(id),
  };

  var collection = db.get().collection(t.MDB_PASSENGERS_FAVOURITES);
  collection.remove(match_array, function (err, results) {
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.check_fav_exists_id = function (q, id) {
  var deferred = q.defer();

  let match_array = {
    _id: parseInt(id),
  };

  var collection = db.get().collection(t.MDB_PASSENGERS_FAVOURITES);
  collection.find(match_array, {}).toArray(function (err, results) {
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.nearest_drivers = function (q, model_id, latitude, longitude) {
  try {
    var deferred = q.defer();
    var up_time_milli = global.settings.location_update_seconds * 1000;
    var base_url = global.settings.base_url;
    var TAXI_IMG_URL = `${base_url}/public/uploads/taxi_image/`;
    var DRIVER_IMG_URL = `${base_url}/public/uploads/driver_image/`;

    var match1 = {
      "people.login_status": "S",
      status: "F",
      shift_status: "IN",
    };

    var match2 = {
      //'tmap.mapping_startdate' : {'$gte': new MongoDate(strtotime($start_time))),
      //'tmap.mapping_enddate' : {'$lte':new MongoDate(strtotime($end_time))),

      /* Sasidharan May 26 2025 uncomment below two lines for testing purpose we are showing all drivers. */
      "tmap.mapping_status": "A",
      updatetime_difference: { $lte: parseInt(up_time_milli) },

      // Sasidharan May 16 2025
      // "taxi.taxi_model": parseInt(model_id),
      "taxi.taxi_model": { $in: [2, 3, 4] },

      //'taxi.taxi_model': {'$in':[parseInt(1),parseInt(2),parseInt(3),parseInt(4)]}
    };

    // Sasidharan May 16 2025
    if (model_id) {
      match2["taxi.taxi_model"] = parseInt(model_id);
    }

    var collection = db.get().collection(t.MDB_DRIVER_INFO);
    var distance = global.settings.default_mile;

    if (distance != "") {
      //match1.distance = {'$lte':distance};
    }

    //match1.taxi.taxi_model = parseInt(model_id);

    if (global.settings.default_unit == 0) {
      geonear = {
        near: {
          type: "Point",
          coordinates: [parseFloat(longitude), parseFloat(latitude)],
        },
        distanceField: "distance",
        maxDistance: distance * 1000,
        spherical: true,
        distanceMultiplier: 0.001,
        num: 1000000,
      };
    } else {
      //Get the result In Miles
      geonear = {
        near: {
          type: "Point",
          coordinates: [parseFloat(longitude), parseFloat(latitude)],
        },
        distanceField: "distance",
        maxDistance: distance * 1000,
        spherical: true,
        distanceMultiplier: 0.000621371192237,
        num: 1000000,
      };
    }

    arguments = [
      { $geoNear: geonear },
      {
        $lookup: {
          from: t.MDB_PEOPLE,
          localField: "_id",
          foreignField: "_id",
          as: "people",
        },
      },
      { $unwind: "$people" },
      { $match: match1 },
      {
        $project: {
          _id: 1,
          distance: "$distance",
          shift_status: "$shift_status",
          bearing: "$bearing",
          status: "$status",
          loc: "$loc.coordinates",
          people: 1,
          updatetime_difference: { $subtract: [new Date(), "$update_date"] },
        },
      },
      {
        $lookup: {
          from: t.MDB_TAXIMAPPING,
          localField: "_id",
          foreignField: "mapping_driverid",
          as: "tmap",
        },
      },
      { $unwind: "$tmap" },
      {
        $match: {
          "tmap.mapping_status": "A",
        },
      },
      {
        $lookup: {
          from: t.MDB_TAXI,
          localField: "tmap.mapping_taxiid",
          foreignField: "_id",
          as: "taxi",
        },
      },
      { $unwind: "$taxi" },
      {
        $lookup: {
          from: t.MDB_MOTOR_MODEL,
          localField: "taxi.taxi_model",
          foreignField: "_id",
          as: "model",
        },
      },
      { $unwind: "$model" },
      {
        $lookup: {
          from: t.MDB_COMPANY,
          localField: "tmap.mapping_companyid",
          foreignField: "_id",
          as: "comp",
        },
      },
      { $unwind: "$comp" },
      { $match: match2 },
      {
        $group: {
          _id: {
            driver_id: "$_id",
            name: "$people.name",
            model_name: "$model.model_name",
            phone: "$people.phone",
            booking_limit: "$people.booking_limit",
            d_photo: {
              $concat: [DRIVER_IMG_URL, "$people.profile_picture"],
            },
            id: "$people._id",
            loc: "$loc",
            status: "$status",
            bearing: "$bearing",
            distance: "$distance",
            distance_miles: "$distance",
            updatetime_difference: "$updatetime_difference",
            company_name: "$comp.company_name",
            get_companyid: "$comp._id",
            cancellation_nfree: "$comp.companyinfo.cancellation_fare",
            company_tax: "$comp.companyinfo.company_tax",
            taxi_no: "$taxi.taxi_no",
            taxi_image: {
              $concat: [TAXI_IMG_URL, "$taxi.taxi_image"],
            },
            taxi_capacity: "$taxi.taxi_capacity",
            taxi_id: "$taxi._id",
            taxi_speed: "$taxi.taxi_speed",
            taxi_min_speed: "$taxi.taxi_min_speed",
            taxi_model: "$taxi.taxi_model",
          },
        },
      },
      { $sort: { "_id.distance": 1 } },
    ];

    // if(!model_id || model_id == 3) {
    //   console.error("=================================");
    //   console.error(JSON.stringify(arguments));
    //   console.error("=================================");
    // }

    collection.aggregate(arguments).toArray(function (err, results) {
      //console.log('company key err',err);
      //console.log('search results',results);
      deferred.resolve(results);
      deferred.makeNodeResolver();
      result = null;
    });
  } catch (err) {
    console.log(err);
  }

  return deferred.promise;
};

exports.nearest_drivers_test = function (q, model_id, latitude, longitude) {
  try {
    var deferred = q.defer();
    var up_time_milli = global.settings.location_update_seconds * 1000;
    var base_url = global.settings.base_url;
    var TAXI_IMG_URL = `${base_url}/public/uploads/taxi_image/`;
    var DRIVER_IMG_URL = `${base_url}/public/uploads/driver_image/`;

    var match1 = {
      "people.login_status": "S",
      status: "F",
      shift_status: "IN",
    };

    var match2 = {
      //'tmap.mapping_startdate' : {'$gte': new MongoDate(strtotime($start_time))),
      //'tmap.mapping_enddate' : {'$lte':new MongoDate(strtotime($end_time))),

      /* Sasidharan May 26 2025 uncomment below two lines for testing purpose we are showing all drivers. */
      "tmap.mapping_status": "A",
      updatetime_difference: { $lte: parseInt(up_time_milli) },

      // Sasidharan May 16 2025
      // "taxi.taxi_model": parseInt(model_id),
      "taxi.taxi_model": { $in: [2, 3, 4] },

      //'taxi.taxi_model': {'$in':[parseInt(1),parseInt(2),parseInt(3),parseInt(4)]}
    };

    // Sasidharan May 16 2025
    if (model_id) {
      match2["taxi.taxi_model"] = parseInt(model_id);
    }

    var collection = db.get().collection(t.MDB_DRIVER_INFO);
    var distance = global.settings.default_mile;

    if (distance != "") {
      //match1.distance = {'$lte':distance};
    }

    //match1.taxi.taxi_model = parseInt(model_id);

    const pipeline = [
      {
        $lookup: {
          from: t.MDB_PEOPLE,
          localField: "_id",
          foreignField: "_id",
          as: "people",
        },
      },
      { $unwind: "$people" },

      // MATCH 1
      { $match: match1 },

      {
        $project: {
          _id: 1,
          shift_status: "$shift_status",
          bearing: "$bearing",
          status: "$status",
          loc: "$loc.coordinates",
          people: 1,
          updatetime_difference: { $subtract: [new Date(), "$update_date"] },
        },
      },

      {
        $lookup: {
          from: t.MDB_TAXIMAPPING,
          localField: "_id",
          foreignField: "mapping_driverid",
          as: "tmap",
        },
      },
      { $unwind: "$tmap" },

      {
        $match: {
          "tmap.mapping_status": "A",
        },
      },

      {
        $lookup: {
          from: t.MDB_TAXI,
          localField: "tmap.mapping_taxiid",
          foreignField: "_id",
          as: "taxi",
        },
      },
      { $unwind: "$taxi" },

      {
        $lookup: {
          from: t.MDB_MOTOR_MODEL,
          localField: "taxi.taxi_model",
          foreignField: "_id",
          as: "model",
        },
      },
      { $unwind: "$model" },

      {
        $lookup: {
          from: t.MDB_COMPANY,
          localField: "tmap.mapping_companyid",
          foreignField: "_id",
          as: "comp",
        },
      },
      { $unwind: "$comp" },

      // MATCH 2
      { $match: match2 },

      {
        $group: {
          _id: {
            driver_id: "$_id",
            name: "$people.name",
            model_name: "$model.model_name",
            phone: "$people.phone",
            booking_limit: "$people.booking_limit",
            d_photo: {
              $concat: [DRIVER_IMG_URL, "$people.profile_picture"],
            },
            id: "$people._id",
            loc: "$loc",
            status: "$status",
            bearing: "$bearing",
            updatetime_difference: "$updatetime_difference",
            company_name: "$comp.company_name",
            get_companyid: "$comp._id",
            cancellation_nfree: "$comp.companyinfo.cancellation_fare",
            company_tax: "$comp.companyinfo.company_tax",
            taxi_no: "$taxi.taxi_no",
            taxi_image: {
              $concat: [TAXI_IMG_URL, "$taxi.taxi_image"],
            },
            taxi_capacity: "$taxi.taxi_capacity",
            taxi_id: "$taxi._id",
            taxi_speed: "$taxi.taxi_speed",
            taxi_min_speed: "$taxi.taxi_min_speed",
            taxi_model: "$taxi.taxi_model",
          },
        },
      },

      { $sort: { "_id.name": 1 } }, // you can change sorting here
    ];
    arguments = pipeline;

    // if(!model_id || model_id == 3) {
    //   console.error("=================================");
    //   console.error(JSON.stringify(arguments));
    //   console.error("=================================");
    // }

    collection.aggregate(arguments).toArray(function (err, results) {
      //console.log('company key err',err);
      //console.log('search results',results);
      deferred.resolve(results);
      deferred.makeNodeResolver();
      result = null;
    });
  } catch (err) {
    console.log(err);
  }

  return deferred.promise;
};

exports.model_fare_details = function (q, model_id) {
  var deferred = q.defer();

  var match_array = {
    _id: parseInt(model_id),
  };

  var collection = db.get().collection(t.MDB_MOTOR_MODEL);
  var arguments = [
    { $match: match_array },
    {
      $project: {
        model_id: "$_id",
        model_name: "$model_name",
        model_name_ar: "$model_name_ar",
        category_name: "$category_name",
        model_size: "$model_size",
        max_luggage: "$max_luggage",
        model_image: "$model_image",
        model_image_new: "$model_image_new",
        model_image_unfocus: "$model_image_unfocus",
        iconic_image: "$iconic_image",
        model_image_thumb: "$model_image_thumb",
        model_image_unfocus_thumb: "$model_image_unfocus_thumb",
        iconic_image_thumb: "$iconic_image_thumb",
        base_fare: "$minutes_fare",
        min_fare: "$base_fare",
        base_mins: "$time",
        waiting_cost_per_hour: "$waiting_time",
        airport_pickup_fare: "$airport_pickup_fare",
        airport_drop_fare: "$airport_drop_fare",
        waiting_free: "$waiting_free",
        //'min_fare' : '$min_fare',
        //'min_km' : '$min_km',
        //'below_above_km' : '$below_above_km',
        //'below_km' : '$below_km',
        //'above_km' : '$above_km',
        //'cancellation_fare' : '$cancellation_fare',
        night_charge: "$night_charge",
        night_timing_from: "$night_timing_from",
        night_timing_to: "$night_timing_to",
        night_fare: "$night_fare",
        evening_charge: "$evening_charge",
        evening_timing_from: "$evening_timing_from",
        night_fare: "$night_fare",
        evening_charge: "$evening_charge",
        evening_timing_from: "$evening_timing_from",
        evening_timing_to: "$evening_timing_to",
        evening_fare: "$evening_fare",
        priority: "$priority",
        model_image_2: "$model_image_2",
        model_fare_image: "$model_fare_image", //26 feb 2021
        surge_pricing_status: "$surge_pricing_status",
        surge_pricing_interval: "$surge_pricing_interval",
        total_drivers: "$total_drivers",
        //26 feb 2021
      },
    },
  ];

  collection.aggregate(arguments).toArray(function (err, results) {
    //console.log('err',result);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    results = null;
  });
  return deferred.promise;
};
exports.updatePassengersSettings = async function (q, userid, updateData) {
  const collection = db.get().collection(t.MDB_PASSENGERS);

  try {
    await collection.updateOne({ _id: parseInt(userid) }, { $set: updateData });
    return 1;
  } catch (error) {
    return 0;
  }
};

exports.passenger_current_trips = function (q, id) {
  var deferred = q.defer();

  let match_array = {
    passengers_id: parseInt(id),
    travel_status: { $in: [parseInt(2), parseInt(3), parseInt(9)] },
  };

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);
  collection.find(match_array, {}).toArray(function (err, results) {
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.currentday_booking_count = function (q, driver_id, time_range) {
  var deferred = q.defer();

  var match_array = {
    driver_id: parseInt(driver_id),
    actual_pickup_time: { $lte: time_range[0], $gte: time_range[1] },
  };

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);
  var arguments = [
    { $match: match_array },
    {
      $group: {
        _id: "$driver_id",
        trip_count: { $sum: 1 },
      },
    },
  ];

  collection.aggregate(arguments).toArray(function (err, results) {
    //console.log('results',results);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.promocode_details = function (q, promocode) {
  var deferred = q.defer();

  let match_array = {
    promocode: promocode,
    promo_type: "1",
  };

  /* 
		Sasidharan apr - 16 - 2022 
		* Added 'corporate_promocode' key 
	*/

  var collection = db.get().collection(t.MDB_PASSENGER_PROMO);
  collection
    .find(match_array, {
      promocode: 1,
      promo_discount: 1,
      promo_used: 1,
      start_date: 1,
      expire_date: 1,
      promo_limit: 1,
      total_applied: 1,
      total_used: 1,
      corporate_promocode: 1,
      /* Sasidharan June 12 2024 */
      skipCard: 1,
    })
    .toArray(function (err, results) {
      deferred.resolve(results);
      deferred.makeNodeResolver();
      result = null;
    });

  return deferred.promise;
};

exports.promocode_details_by_phone = function (q, promocode, phone) {
  var deferred = q.defer();

  //~ let match_array = {
  //~ "promocode":promocode,
  //~ "promo_type":'1',
  //~ "customer_number":phone
  //~ };

  let match_array = {
    promocode: promocode,
    customer_number: phone,
  };

  /* 
		Sasidharan apr - 16 - 2022 
		* Added 'corporate_promocode' key 
	*/

  var collection = db.get().collection(t.MDB_PASSENGER_PROMO);
  collection
    .find(match_array, {
      promocode: 1,
      promo_discount: 1,
      promo_used: 1,
      start_date: 1,
      expire_date: 1,
      promo_limit: 1,
      total_applied: 1,
      total_used: 1,
      corporate_promocode: 1,
      /* Sasidharan June 12 2024 */
      skipCard: 1,
    })
    .toArray(function (err, results) {
      deferred.resolve(results);
      deferred.makeNodeResolver();
      result = null;
    });

  return deferred.promise;
};

exports.check_passenger_trips = function (q, id) {
  var deferred = q.defer();

  var current_date = new Date();

  let match_array = {
    passengers_id: parseInt(id),
    travel_status: { $in: [parseInt(2), parseInt(3), parseInt(9)] },
    pickup_time: { $gte: current_date },
    now_after: parseInt(0),
    driver_reply: "A",
  };

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);
  collection.find(match_array, {}).toArray(function (err, results) {
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.city_details_by_name = function (q, city_name) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);

  var city_name = new RegExp(city_name, "i");

  var arguments = [
    { $unwind: "$stateinfo" },
    { $unwind: "$stateinfo.cityinfo" },
    {
      $match: {
        "stateinfo.cityinfo.city_name": city_name,
      },
    },
    { $project: { city_id: "$stateinfo.cityinfo.city_id" } },
    { $limit: 1 },
  ];

  collection.aggregate(arguments).toArray(function (err, results) {
    //console.log('results',results);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.default_city_details = function (q) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);

  var city_name = new RegExp(city_name, "i");

  var arguments = [
    { $unwind: "$stateinfo" },
    { $unwind: "$stateinfo.cityinfo" },
    {
      $match: {
        default: 1,
        "stateinfo.default": 1,
        "stateinfo.cityinfo.default": 1,
      },
    },
    { $project: { city_id: "$stateinfo.cityinfo.city_id" } },
    { $limit: 1 },
  ];

  collection.aggregate(arguments).toArray(function (err, results) {
    //console.log('results',results);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.get_driver_availability = function (q, driver_id, pickup_time) {
  var deferred = q.defer();

  let match_array = {
    pickup_time: pickup_time,
    driver_id: parseInt(driver_id),
    travel_status: parseInt(9),
  };

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);
  collection
    .find(match_array, {
      promocode: 1,
      promo_discount: 1,
      promo_used: 1,
      start_date: 1,
      expire_date: 1,
      promo_limit: 1,
      total_applied: 1,
      total_used: 1,
    })
    .toArray(function (err, results) {
      deferred.resolve(results);
      deferred.makeNodeResolver();
      result = null;
    });

  return deferred.promise;
};

exports.update_passengers_logs = function (q, id, update_array) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);

  collection.update(
    { _id: parseInt(id) },
    { $set: update_array },
    { $upsert: false },
    function (err, data) {
      //console.log('err2',err);
      deferred.resolve(data);
      deferred.makeNodeResolver();
      data = null;
    }
  );

  return deferred.promise;
};

exports.insert_passengers_logs = function (q, insertArray) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);
  collection.insert(insertArray, function (err, results) {
    //console.log('insert err',err);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.update_siteinfo = function (q, update_array) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_SITEINFO);

  collection.update(
    { _id: parseInt(1) },
    { $set: update_array },
    { $upsert: false },
    function (err, data) {
      //console.log('err2',err);
      deferred.resolve(data);
      deferred.makeNodeResolver();
      data = null;
    }
  );

  return deferred.promise;
};

exports.get_last_logid = function (q) {
  var deferred = q.defer();

  let match_array = {
    _id: parseInt(1),
  };

  var collection = db.get().collection(t.MDB_SITEINFO);
  collection
    .find(match_array, { last_logid: 1 })
    .toArray(function (err, results) {
      deferred.resolve(results);
      deferred.makeNodeResolver();
      result = null;
    });

  return deferred.promise;
};

exports.get_sublogid = function (q, sublog_id) {
  var deferred = q.defer();

  let match_array = {
    _id: parseInt(sublog_id),
  };

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);
  collection
    .find(match_array, { sub_logid: 1 })
    .toArray(function (err, results) {
      deferred.resolve(results);
      deferred.makeNodeResolver();
      result = null;
    });

  return deferred.promise;
};

exports.update_sublog_id = function (q, update_array, id) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);

  collection.update(
    { _id: parseInt(id) },
    { $set: update_array },
    { $upsert: false },
    function (err, data) {
      //console.log('err2',err);
      deferred.resolve(data);
      deferred.makeNodeResolver();
      data = null;
    }
  );

  return deferred.promise;
};

exports.update_request_details = function (q, id, update_array) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_DRIVER_REQUEST_DETAILS);

  collection.update(
    { _id: parseInt(id) },
    { $set: update_array },
    { $upsert: false },
    function (err, data) {
      //console.log('err2',err);
      deferred.resolve(data);
      deferred.makeNodeResolver();
      data = null;
    }
  );

  return deferred.promise;
};

exports.insert_request_details = function (q, insertArray) {
  console.error("insert_request_details");
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_DRIVER_REQUEST_DETAILS);
  collection.insert(insertArray, function (err, results) {
    console.error("insert err", err);
    console.error("results : ", results);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.get_trip_detail = function (q, trip_id) {
  var deferred = q.defer();

  var match_array = {
    _id: parseInt(trip_id),
  };

  let arguments = [
    {
      $match: match_array,
    },
    {
      $lookup: {
        from: t.MDB_PASSENGERS,
        localField: "passengers_id",
        foreignField: "_id",
        as: "passengers",
      },
    },
    {
      $unwind: "$passengers",
    },
    {
      $lookup: {
        from: t.MDB_TRANS,
        localField: "_id",
        foreignField: "passengers_log_id",
        as: "trans",
      },
    },
    {
      $unwind: {
        path: "$trans",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $lookup: {
        from: t.MDB_TAXI,
        localField: "taxi_id",
        foreignField: "_id",
        as: "taxi",
      },
    },
    {
      $unwind: {
        path: "$taxi",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $lookup: {
        from: t.MDB_DRIVER_INFO,
        localField: "driver_id",
        foreignField: "_id",
        as: "driverinfo",
      },
    },
    {
      $unwind: {
        path: "$driverinfo",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $lookup: {
        from: t.MDB_MOTOR_MODEL,
        localField: "taxi_modelid",
        foreignField: "_id",
        as: "model",
      },
    },
    {
      $unwind: {
        path: "$model",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $lookup: {
        from: t.MDB_PEOPLE,
        localField: "driver_id",
        foreignField: "_id",
        as: "people",
      },
    },
    {
      $unwind: {
        path: "$people",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $project: {
        amt: {
          $cond: [
            { $gt: ["$trans.driver_edit_status", 0] },
            { $sum: ["$trans.tripfare", "$trans.add_amt"] },
            {
              $sum: [
                "$trans.actual_paid_amt",
                "$trans.add_amt",
                ,
                "$trans.discount_wallet_amount_used",
                "$trans.wallet_amount_used",
              ],
            },
          ],
        },
        pickup_time: {
          $dateToString: { format: "%d-%m-%Y %H:%M:%S", date: "$pickup_time" },
        },
        actual_pickup_time: {
          $dateToString: {
            format: "%d-%m-%Y %H:%M:%S",
            date: { $add: ["$actual_pickup_time", 3 * 60 * 60 * 1000] },
          },
        },
        drop_time: {
          $dateToString: {
            format: "%d-%M-%Y %H:%m:%S",
            date: { $add: ["$drop_time", 3 * 60 * 60 * 1000] },
          },
        },
        notes: { $ifNull: ["$notes_driver", ""] },
        distance: { $ifNull: ["$distance", 0] },
        waiting_hour: "$waitingtime",
        //'trip_duration' : {'$divide':[{'$subtract':['$drop_time','$actual_pickup_time']},60000]},
        wallet_amount: "$used_wallet_amount",
        waiting_cost: { $ifNull: ["$trans.waiting_cost", 0] },
        passenger_discount: { $ifNull: ["$passenger_discount", 0] }, // Customization
        fare: { $ifNull: ["$trans.fare", 0] },
        wallet_used_amount: { $ifNull: ["$trans.wallet_amount_used", 0] },
        add_amt: { $ifNull: ["$trans.add_amt", 0] },
        driver_edit_status: { $ifNull: ["$trans.driver_edit_status", 0] },
        discount_wallet_amount_used: {
          $ifNull: ["$trans.discount_wallet_amount_used", 0],
        },
        total_without_discount: {
          $ifNull: ["$trans.total_without_discount", 0],
        },
        actual_paid_amt: { $ifNull: ["$trans.actual_paid_amt", 0] },
        tripfare: { $ifNull: ["$trans.tripfare", 0] },
        o_fare: {
          $cond: [
            { $gt: ["$trans.driver_edit_status", 0] },
            {
              $sum: [
                "$trans.fare",
                "$trans.wallet_amount_used",
                "$trans.add_amt",
                "$trans.discount_wallet_amount_used",
              ],
            },
            { $sum: ["$trans.actual_paid_amt", "$trans.wallet_amount_used"] },
          ],
        },
        trip_duration: {
          $cond: [
            { $eq: ["$trans.drop_time", true] },
            {
              $divide: [
                { $subtract: ["$drop_time", "$actual_pickup_time"] },
                60000,
              ],
            },
            0,
          ],
        },
        coordinates: "$driverinfo.loc.coordinates",
        driver_latitude: { $arrayElemAt: ["$driverinfo.loc.coordinates", 1] },
        driver_longitude: { $arrayElemAt: ["$driverinfo.loc.coordinates", 0] },
        bearing: "$driverinfo.bearing",
        accuracy: "$driverinfo.accuracy",
        driver_status: "$driverinfo.status",
        amt: { $sum: "$trans.amt" },
        trans_id: { $ifNull: ["$trans._id", ""] },
        airport_pickup: { $ifNull: ["$airport_pickup", ""] },
        airport_type: { $ifNull: ["$airport_type", 0] },
        trip_minutes: { $ifNull: ["$trans.trip_minutes", 0] },
        waiting_time: { $ifNull: ["$trans.waiting_time", "00:00:00"] },
        minutes_fare: { $ifNull: ["$trans.minutes_fare", 0] },
        //'actual_distance': {'$sum':'$trans.distance'),
        //'metric' : {'$sum':'$trans.distance_unit'),
        //'job_ref' : {'$sum':'$trans.job_ref'),
        //'payment_type' : {'$sum':'$trans.payment_type'),
        actual_distance: { $ifNull: ["$trans.distance", 0] },
        metric: { $ifNull: ["$trans.distance_unit", 0] },
        job_ref: { $ifNull: ["$trans.job_ref", 0] },
        payment_type: { $ifNull: ["$trans.payment_type", 0] },
        pay_mod_id: { $ifNull: ["$trans.payment_type", 0] },
        gift_card_status: { $ifNull: ["$gift_card_status", 0] },
        gift_card_discount: { $ifNull: ["$gift_card_discount", 0] },
        passengers_id: "$passengers_id",
        passengers_log_id: "$_id",
        current_location: "$current_location",
        no_passengers: "$no_passengers",
        pickup_time: "$pickup_time",
        actual_pickup_time: { $ifNull: ["$actual_pickup_time", ""] },
        additionalMinsFare: { $ifNull: ["$additionalMinsFare", 0] },
        additionalMins: { $ifNull: ["$additionalMins", 0] },

        drop_time: { $ifNull: ["$drop_time", ""] },
        arrived_time: { $ifNull: ["$arrived_time", ""] },
        rating: "$rating",
        notes_driver: { $ifNull: ["$notes_driver", ""] },
        travel_status: "$travel_status",
        driver_reply: "$driver_reply",
        city_id: "$search_city",
        pickup_location: "$current_location",
        pickup_latitude: "$pickup_latitude",
        pickup_longitude: "$pickup_longitude",
        drop_location: "$drop_location",
        drop_latitude: "$drop_latitude",
        drop_longitude: "$drop_longitude",
        taxi_modelid: "$taxi_modelid",
        taxi_model_name: "$model.model_name",
        model_base_fare: "$model.base_fare",
        model_base_min: "$model.time",
        model_image: "$model.model_image",
        model_image_new: "$model.model_image_new",
        time_to_reach_passen: { $ifNull: ["$time_to_reach_passen", "0"] },
        notification_status: "$notification_status",
        used_wallet_amount: "$used_wallet_amount",
        bookby: "$bookby",
        passenger_name: "$passengers.name",
        passenger_phone: "$passengers.phone",
        country_code: "$passengers.country_code",

        passenger_image: "$passengers.profile_image",
        lateral_end_date: "$passengers.lateral_end_date",
        passenger_wallet_amount: { $ifNull: ["$passengers.wallet_amount", 0] },
        driver_name: { $ifNull: ["$people.name", ""] },
        driver_lastname: { $ifNull: ["$people.lastname", ""] },
        driver_image: { $ifNull: ["$people.profile_picture", ""] },
        driver_id: { $ifNull: ["$people._id", ""] },
        driver_phone: { $ifNull: ["$people.phone", ""] },
        driver_login_status: { $ifNull: ["$people.login_status", ""] },
        taxi_no: "$taxi.taxi_no",
        taxi_number: "$taxi.taxi_no",
        taxi_speed: "$taxi.taxi_speed",
        taxi_min_speed: "$taxi.taxi_min_speed",
        taxi_id: "$taxi._id",
        taxi_manufacturer: "$taxi.taxi_manufacturer",
        taxi_colour: "$taxi.taxi_colour",
        //'waiting_time' : '$waitingtime',
        //'distance' : '$distance',
        drop_location: "$drop_location",
        book_tag: "$book_tag",
        pas_pay_by: "$passengers.pay_by",
        pas_pay_lmt: "$passengers.trip_amt_limit",
        pass_id_image: "$passengers.id_image",
        tags: "$driver_tags",
        hourly_booking: { $ifNull: ["$hourly_booking", 0] },
        hourly_booking_hrs: { $ifNull: ["$hourly_booking_hrs", 0] },
        ratings: "$rating",
        fare_calculation_type: { $ifNull: ["$trans.fare_calculation_type", 0] },
        distance_fare: { $ifNull: ["$trans.distance_fare", 0] },
        total_waiting_time: { $ifNull: ["$total_waiting_time", 0] },
        start_waiting_time: { $ifNull: ["$start_waiting_time", 0] },
        start_timer: { $ifNull: ["$start_timer", ""] },
        end_timer: { $ifNull: ["$end_timer", ""] },
        waiting_start_status: { $ifNull: ["$waiting_start_status", 2] },
        fixed_estimate_fare_type: { $ifNull: ["$fixed_estimate_fare_type", 0] },
        fixed_estimate_result: "$fixed_estimate_result",
        nightfare_applicable: { $ifNull: ["$trans.nightfare_applicable", 0] },
        nightfare: { $ifNull: ["$trans.nightfare", 0] },
        eveningfare_applicable: {
          $ifNull: ["$trans.eveningfare_applicable", 0],
        },
        eveningfare: { $ifNull: ["$trans.eveningfare", 0] },
        surge_price_percentage: { $ifNull: ["$surge_price_percentage", 0] },
        surge_price: { $ifNull: ["$trans.surge_price", 0] },
        zone_fare_applicable: { $ifNull: ["$zone_fare_applicable", 0] },
        zone_fare_type: { $ifNull: ["$zone_fare_type", 0] },
        zone_fare: { $ifNull: ["$zone_fare", 0] },
        approx_fare: { $ifNull: ["$approx_fare", 0] },
        payment_array: { $ifNull: ["$fare_detail", []] },
        discount_wallet_passenger_log: {
          $ifNull: ["$discount_wallet_amount_used", 0],
        },

        n_estimate_fare: {
          $ifNull: ["$n_estimate_fare", 0],
        },
        n_estimate_distance: {
          $ifNull: ["$n_estimate_distance", 0],
        },
        n_estimate_duration: {
          $ifNull: ["$n_estimate_duration", 0],
        },

        /* Sasidharan May 13 2024 */
        paymentInProgress: { $ifNull: ["$paymentInProgress", 0] },
        applied_corporate_promocode: {
          $ifNull: ["$applied_corporate_promocode", 0],
        },
        driver_license: { $ifNull: ["$people.driver_license_id", ""] },
        deductedAmountFromTap: { $ifNull: ["$deductedAmountFromTap", 0] },
        last_four: { $ifNull: ["$card.last_four", ""] },
        card_type: { $ifNull: ["$card.brand", ""] },
        tapPaymentGatewayToken: {
          $ifNull: ["$trans.tapPaymentGatewayToken", ""],
        },
        tap_fare: { $ifNull: ["$trans.fare", 0] },
      },
    },
    {
      $sort: {
        _id: -1,
      },
    },
  ];
  var collection = db.get().collection(t.MDB_PASSENGERSLOG);
  collection.aggregate(arguments).toArray(function (err, results) {
    //console.log('err trip',err);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.get_passenger_trip = function (q, id) {
  var deferred = q.defer();

  let match_array = {
    passengers_id: parseInt(id),
  };

  var collection = db.get().collection(t.MDB_LOGS_COMPLETED);
  collection.find(match_array).count(function (err, results) {
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.past_trip_places = function (q, id) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_LOGS_COMPLETED);

  var arguments = [
    {
      $match: {
        passengers_id: parseInt(id),
      },
    },
    {
      $project: {
        passengers_id: "$passengers_id",
        current_location: "$current_location",
        drop_location: "$drop_location",
        pickup_latitude: "$pickup_latitude",
        pickup_longitude: "$pickup_longitude",
        drop_latitude: "$drop_latitude",
        drop_longitude: "$drop_longitude",
      },
    },
    { $skip: parseInt(0) },
    { $limit: parseInt(15) },
  ];

  collection.aggregate(arguments).toArray(function (err, results) {
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.recent_trip_places = function (
  q,
  passenger_id,
  place_type,
  pending_fav
) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);

  var match_array = {};
  var project = {};

  if (place_type == 0) {
    match_array = {
      passengers_id: parseInt(passenger_id),
      travel_status: parseInt(1),
      pickup_latitude: { $ne: 0 },
      pickup_longitude: { $ne: 0 },
      current_location: { $ne: "" },
    };

    project = {
      log_id: "$_id",
      //'location_count' : '$current_location',
      p_favourite_place: "$current_location",
      p_fav_latitude: "$pickup_latitude",
      p_fav_longtitute: "$pickup_longitude",
      fav_loction_type: "$current_location",
    };
  } else {
    match_array = {
      passengers_id: parseInt(passenger_id),
      travel_status: parseInt(1),
      drop_latitude: { $ne: 0 },
      drop_longitude: { $ne: 0 },
      drop_location: { $ne: "" },
    };

    project = {
      log_id: "$_id",
      //'location_count' : '$current_location',
      p_favourite_place: "$drop_location",
      p_fav_latitude: "$drop_latitude",
      p_fav_longtitute: "$drop_longitude",
      fav_loction_type: "$current_location",
    };
  }

  var arguments = [
    {
      $match: match_array,
    },
    { $project: project },
    {
      $group: {
        _id: { p_favourite_place: "$p_favourite_place" },
        log_id: { $first: "$log_id" },
        lat: { $first: "$p_fav_latitude" },
        lng: { $first: "$p_fav_longtitute" },
        loc: { $first: "$p_favourite_place" },
      },
    },
    { $sort: { log_id: -1 } },
    { $limit: parseInt(pending_fav) },
  ];

  //console.log(match_array);

  collection.aggregate(arguments).toArray(function (err, results) {
    //console.log(results);

    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.update_ratings = function (q, id, update_array) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);

  collection.update(
    { _id: parseInt(id) },
    { $set: update_array },
    { $upsert: false },
    function (err, data) {
      //console.log('err2',err);
      deferred.resolve(data);
      deferred.makeNodeResolver();
      data = null;
    }
  );

  return deferred.promise;
};

exports.update_ratings_completed = function (q, id, update_array) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_LOGS_COMPLETED);

  collection.update(
    { _id: parseInt(id) },
    { $set: update_array },
    { $upsert: false },
    function (err, data) {
      //console.log('err2',err);
      deferred.resolve(data);
      deferred.makeNodeResolver();
      data = null;
    }
  );

  return deferred.promise;
};

exports.passenger_trips_completed = function (q, userid) {
  var deferred = q.defer();
  var match_array = {
    passengers_id: parseInt(userid),
    msg_status: "R",
    driver_reply: "A",
    travel_status: parseInt(1),
  };

  let arguments = [
    {
      $match: match_array,
    },
    {
      $lookup: {
        from: t.MDB_PASSENGERS,
        localField: "passengers_id",
        foreignField: "_id",
        as: "passengers",
      },
    },
    {
      $unwind: "$passengers",
    },
    {
      $lookup: {
        from: t.MDB_TRANS,
        localField: "_id",
        foreignField: "passengers_log_id",
        as: "trans",
      },
    },
    {
      $unwind: "$trans",
    },
    {
      $lookup: {
        from: t.MDB_PAYDETAILS,
        localField: "_id",
        foreignField: "trip_id",
        as: "paydetails",
      },
    },
    {
      $unwind: "$paydetails",
    },
    {
      $lookup: {
        from: t.MDB_PEOPLE,
        localField: "driver_id",
        foreignField: "_id",
        as: "people",
      },
    },
    {
      $unwind: "$people",
    },
    {
      $lookup: {
        from: t.MDB_TAXI,
        localField: "taxi_id",
        foreignField: "_id",
        as: "taxi",
      },
    },
    {
      $unwind: {
        path: "$taxi",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $lookup: {
        from: t.MDB_MOTOR_MODEL,
        localField: "taxi_modelid",
        foreignField: "_id",
        as: "model",
      },
    },
    {
      $unwind: {
        path: "$model",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $project: {
        pickup_time: "$pickup_time",
        pickup_longitude: "$pickup_longitude",
        pickup_latitude: "$pickup_latitude",
        drop_latitude: "$drop_latitude",
        drop_longitude: "$drop_longitude",
        travel_status: "$travel_status",
        amt: {
          $cond: [
            { $gt: ["$trans.driver_edit_status", 0] },
            { $sum: ["$trans.tripfare", "$trans.add_amt"] },
            {
              $sum: [
                "$trans.actual_paid_amt",
                "$trans.add_amt",
                "$trans.wallet_amount_used",
              ],
            },
          ],
        },
        //'pickup_time' : {'$dateToString': { 'format': "%d-%m-%Y %H:%M:%S", 'date': "$pickup_time" }},
        pickup_time: "$pickup_time",
        actual_pickup_time: "$actual_pickup_time",
        arrived_time: "$arrived_time",
        drop_time: "$drop_time",
        notes: "$notes_driver",
        distance: "$distance",
        waiting_hour: "$trans.waitingtime",
        total_without_discount: "$trans.total_without_discount",
        actual_fare: "$paydetails.actual_fare",
        trip_duration: {
          $divide: [
            { $subtract: ["$drop_time", "$actual_pickup_time"] },
            60000,
          ],
        },

        bookby: "$bookby",
        drivername: "$people.name",
        driver_lastname: "$people.lastname",
        passenger_name: "$passengers.name",
        passenger_id: "$passengers._id",
        passenger_profile_image: "$passengers.profile_image",
        passengers_log_id: "$_id",
        pickup_location: "$current_location",
        drop_location: { $ifNull: ["$drop_location", 0] },
        travel_status: "$travel_status",
        ratings: { $ifNull: ["$rating", 0] },
        tags: { $ifNull: ["$driver_tags", 0] },
        //'wallet_amount' : '$used_wallet_amount',
        payment_type: { $ifNull: ["$trans.payment_type", 0] },
        waiting_cost: { $ifNull: ["$trans.waiting_cost", 0] },
        pending_amt: { $ifNull: ["$trans.pending_amt", 0] },
        advance_payment: { $ifNull: ["$trans.advance_payment", 0] },
        fare: { $ifNull: ["$trans.fare", 0] },
        wallet_used_amount: { $ifNull: ["$trans.wallet_amount_used", 0] },
        add_amt: { $ifNull: ["$trans.add_amt", 0] },
        driver_edit_status: { $ifNull: ["$trans.driver_edit_status", 0] },
        actual_paid_amt: { $ifNull: ["$trans.actual_paid_amt", 0] },
        account_type: "$passenger.account_type",
        account_type_name: "$account.account_type",
        metric: { $ifNull: ["$trans.distance_unit", ""] },
        driver_reply: { $ifNull: ["$driver_reply", ""] },
        taxi_manufacturer: { $ifNull: ["$taxi.taxi_manufacturer", "-"] },
        trip_fare: { $ifNull: ["$trans.tripfare", 0] },
        pickup_location: "$current_location",
        drop_location: { $ifNull: ["$drop_location", 0] },
        passengers_log_id: "$_id",
        taxi_no: { $ifNull: ["$taxi.taxi.taxi_no", "-"] },
        model_name: { $ifNull: ["$model.model_name", ""] },
        model_id: { $ifNull: ["$taxi_modelid", ""] },
        taxi_modelid: { $ifNull: ["$taxi_modelid", ""] },
        fare_calculation_type: { $ifNull: ["$trans.fare_calculation_type", 2] },
        distance_fare: { $ifNull: ["$trans.distance_fare", 0] },
        driver_image: { $ifNull: ["$people.profile_picture", ""] },
        passenger_image: { $ifNull: ["$passenger.profile_image", ""] },
        notes: "$notes_driver",
        surge_price: { $ifNull: ["$trans.surge_price", 0] },
        discount_wallet_amount_used: {
          $ifNull: ["$trans.discount_wallet_amount_used", 0],
        },
      },
    },
    {
      $sort: {
        _id: -1,
      },
    },
  ];
  var collection = db.get().collection(t.MDB_LOGS_COMPLETED);
  collection.aggregate(arguments).toArray(function (err, results) {
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.passenger_trips_cancelled = function (q, userid) {
  var deferred = q.defer();

  var match_array = {
    passengers_id: parseInt(userid),
    //'msg_status':'R',
    //'driver_reply':'A',
    travel_status: parseInt(4),
  };

  let arguments = [
    {
      $match: match_array,
    },
    {
      $lookup: {
        from: t.MDB_PASSENGERS,
        localField: "passengers_id",
        foreignField: "_id",
        as: "passengers",
      },
    },
    {
      $unwind: "$passengers",
    },
    {
      $lookup: {
        from: t.MDB_TRANS,
        localField: "_id",
        foreignField: "passengers_log_id",
        as: "trans",
      },
    },
    {
      $unwind: { preserveNullAndEmptyArrays: true, path: "$trans" },
    },
    {
      $lookup: {
        from: t.MDB_PEOPLE,
        localField: "driver_id",
        foreignField: "_id",
        as: "people",
      },
    },
    {
      $unwind: { preserveNullAndEmptyArrays: true, path: "$people" },
    },
    {
      $lookup: {
        from: t.MDB_TAXI,
        localField: "taxi_id",
        foreignField: "_id",
        as: "taxi",
      },
    },
    {
      $unwind: {
        path: "$taxi",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $lookup: {
        from: t.MDB_MOTOR_MODEL,
        localField: "taxi_modelid",
        foreignField: "_id",
        as: "model",
      },
    },
    {
      $unwind: {
        path: "$model",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $project: {
        pickup_time: "$pickup_time",
        pickup_longitude: "$pickup_longitude",
        pickup_latitude: "$pickup_latitude",
        drop_latitude: "$drop_latitude",
        drop_longitude: "$drop_longitude",
        travel_status: "$travel_status",
        amt: {
          $cond: [
            { $gt: ["$trans.driver_edit_status", 0] },
            { $sum: ["$trans.tripfare", "$trans.add_amt"] },
            {
              $sum: [
                "$trans.actual_paid_amt",
                "$trans.add_amt",
                "$trans.wallet_amount_used",
              ],
            },
          ],
        },
        //'pickup_time' : {'$dateToString': { 'format': "%d-%m-%Y %H:%M:%S", 'date': "$pickup_time" }},
        pickup_time: "$pickup_time",
        actual_pickup_time: "$actual_pickup_time",
        drop_time: "$drop_time",
        notes: "$notes_driver",
        distance: "$distance",
        waiting_hour: "$trans.waitingtime",
        trip_duration: { $ifNull: ["$trans.trip_minutes", 0] },
        bookby: "$bookby",
        drivername: { $ifNull: ["$people.name", ""] },
        driver_lastname: { $ifNull: ["$people.lastname", ""] },
        passenger_name: "$passengers.name",
        passenger_id: "$passengers._id",
        passenger_profile_image: "$passengers.profile_image",
        passengers_log_id: "$_id",
        pickup_location: "$current_location",
        drop_location: { $ifNull: ["$drop_location", 0] },
        travel_status: "$travel_status",
        ratings: { $ifNull: ["$rating", 0] },
        tags: { $ifNull: ["$driver_tags", 0] },
        //'wallet_amount' : '$used_wallet_amount',
        payment_type: { $ifNull: ["$trans.payment_type", 0] },
        waiting_cost: { $ifNull: ["$trans.waiting_cost", 0] },
        pending_amt: { $ifNull: ["$trans.pending_amt", 0] },
        advance_payment: { $ifNull: ["$trans.advance_payment", 0] },
        fare: { $ifNull: ["$trans.fare", 0] },
        wallet_used_amount: { $ifNull: ["$trans.wallet_amount_used", 0] },
        add_amt: { $ifNull: ["$trans.add_amt", 0] },
        driver_edit_status: { $ifNull: ["$trans.driver_edit_status", 0] },
        actual_paid_amt: { $ifNull: ["$trans.actual_paid_amt", 0] },
        account_type: "$passenger.account_type",
        account_type_name: "$account.account_type",
        metric: { $ifNull: ["$trans.distance_unit", ""] },
        driver_reply: { $ifNull: ["$driver_reply", ""] },
        taxi_manufacturer: { $ifNull: ["$taxi.taxi_manufacturer", "-"] },
        trip_fare: { $ifNull: ["$trans.tripfare", 0] },
        pickup_location: "$current_location",
        drop_location: { $ifNull: ["$drop_location", 0] },
        passengers_log_id: "$_id",
        taxi_no: { $ifNull: ["$taxi.taxi.taxi_no", "-"] },
        model_name: { $ifNull: ["$model.model_name", ""] },
        fare_calculation_type: { $ifNull: ["$trans.fare_calculation_type", 2] },
        distance_fare: { $ifNull: ["$trans.distance_fare", 0] },
        taxi_modelid: "$taxi_modelid",
        notes: "$notes_driver",
        driver_image: { $ifNull: ["$people.profile_picture", ""] },
        profile_image: { $ifNull: ["$passenger.profile_image", ""] },
        // Sasidharan May 9 2025
        model_image: { $ifNull: ["$model.model_image", ""] },
        //  'pickup_time' : {'$cond':[
        // 	{'$ne':['$pickup_time','']},
        // 	{'$dateToString': { 'format': "%d-%m-%Y %H:%M:%S", 'date':'$pickup_time' }},
        // 	''
        // 	]
        // },
        // 'actual_pickup_time' : {'$cond':[
        // 	{'$ne':['$actual_pickup_time','']},
        // 	{'$dateToString': { 'format': "%d-%m-%Y %H:%M:%S", 'date':{'$add':['$drop_time',3 * 60 * 60 * 1000]} }},
        // 	''
        // 	]
        // },
        // 'drop_time' : {'$cond':[
        // 	{'$ne':['$drop_time','']},
        // 	{'$dateToString': { 'format': "%d-%m-%Y %H:%M:%S", 'date':{'$add':['$drop_time',3 * 60 * 60 * 1000]} }},
        // 	''
        // 	]
        // },
        // 'arrived_time' : {'$cond':[
        // 	{'$ne':['$arrived_time','']},
        // 	{'$dateToString': { 'format': "%d-%m-%Y %H:%M:%S", 'date':{'$add':['$arrived_time',3 * 60 * 60 * 1000]} }},
        // 	''
        // 	]
        // }
      },
    },
    {
      $sort: {
        _id: -1,
      },
    },
  ];
  var collection = db.get().collection(t.MDB_LOGS_CANCELLED);
  collection.aggregate(arguments).toArray(function (err, results) {
    //console.log('err',err);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.passenger_trips_missed = function (q, userid) {
  var deferred = q.defer();

  var match_array = {
    passengers_id: parseInt(userid),
    //'msg_status':'R',
    //'driver_reply':'A',
    //'travel_status':parseInt(1)
  };

  let arguments = [
    {
      $match: match_array,
    },
    {
      $lookup: {
        from: t.MDB_PASSENGERS,
        localField: "passengers_id",
        foreignField: "_id",
        as: "passengers",
      },
    },
    {
      $unwind: "$passengers",
    },
    {
      $lookup: {
        from: t.MDB_TRANS,
        localField: "_id",
        foreignField: "passengers_log_id",
        as: "trans",
      },
    },
    {
      $unwind: { preserveNullAndEmptyArrays: true, path: "$trans" },
    },
    {
      $lookup: {
        from: t.MDB_PEOPLE,
        localField: "driver_id",
        foreignField: "_id",
        as: "people",
      },
    },
    {
      $unwind: { preserveNullAndEmptyArrays: true, path: "$people" },
    },
    {
      $lookup: {
        from: t.MDB_TAXI,
        localField: "taxi_id",
        foreignField: "_id",
        as: "taxi",
      },
    },
    {
      $unwind: {
        path: "$taxi",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $lookup: {
        from: t.MDB_MOTOR_MODEL,
        localField: "taxi_modelid",
        foreignField: "_id",
        as: "model",
      },
    },
    {
      $unwind: {
        path: "$model",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $project: {
        pickup_time: "$pickup_time",
        pickup_longitude: "$pickup_longitude",
        pickup_latitude: "$pickup_latitude",
        drop_latitude: "$drop_latitude",
        drop_longitude: "$drop_longitude",
        travel_status: "$travel_status",
        amt: {
          $cond: [
            { $gt: ["$trans.driver_edit_status", 0] },
            { $sum: ["$trans.tripfare", "$trans.add_amt"] },
            {
              $sum: [
                "$trans.actual_paid_amt",
                "$trans.add_amt",
                "$trans.wallet_amount_used",
              ],
            },
          ],
        },
        //'pickup_time' : {'$dateToString': { 'format': "%d-%m-%Y %H:%M:%S", 'date': "$pickup_time" }},
        pickup_time: "$pickup_time",
        actual_pickup_time: "$actual_pickup_time",
        drop_time: "$drop_time",
        notes: "$notes_driver",
        distance: "$distance",
        waiting_hour: "$trans.waitingtime",
        trip_duration: { $ifNull: ["$trans.trip_minutes", 0] },
        bookby: "$bookby",
        drivername: "$people.name",
        driver_lastname: "$people.lastname",
        passenger_name: "$passengers.name",
        passenger_id: "$passengers._id",
        passenger_profile_image: "$passengers.profile_image",
        passengers_log_id: "$_id",
        pickup_location: "$current_location",
        drop_location: { $ifNull: ["$drop_location", 0] },
        travel_status: "$travel_status",
        ratings: { $ifNull: ["$rating", 0] },
        tags: { $ifNull: ["$driver_tags", 0] },
        //'wallet_amount' : '$used_wallet_amount',
        payment_type: { $ifNull: ["$trans.payment_type", 0] },
        waiting_cost: { $ifNull: ["$trans.waiting_cost", 0] },
        pending_amt: { $ifNull: ["$trans.pending_amt", 0] },
        advance_payment: { $ifNull: ["$trans.advance_payment", 0] },
        fare: { $ifNull: ["$trans.fare", 0] },
        wallet_used_amount: { $ifNull: ["$trans.wallet_amount_used", 0] },
        add_amt: { $ifNull: ["$trans.add_amt", 0] },
        driver_edit_status: { $ifNull: ["$trans.driver_edit_status", 0] },
        actual_paid_amt: { $ifNull: ["$trans.actual_paid_amt", 0] },
        account_type: "$passenger.account_type",
        account_type_name: "$account.account_type",
        metric: { $ifNull: ["$trans.distance_unit", ""] },
        driver_reply: { $ifNull: ["$driver_reply", ""] },
        taxi_manufacturer: { $ifNull: ["$taxi.taxi_manufacturer", "-"] },
        trip_fare: { $ifNull: ["$trans.tripfare", 0] },
        taxi_no: { $ifNull: ["$taxi.taxi.taxi_no", "-"] },
        model_name: { $ifNull: ["$model.model_name", ""] },
        fare_calculation_type: { $ifNull: ["$trans.fare_calculation_type", 2] },
        distance_fare: { $ifNull: ["$trans.distance_fare", 0] },
        driver_image: { $ifNull: ["$people.profile_picture", ""] },
        profile_image: { $ifNull: ["$passenger.profile_image", ""] },
        taxi_modelid: "$taxi_modelid",
        notes: "$notes_driver",
        // Sasidharan May 9 2025
        model_image: { $ifNull: ["$model.model_image", ""] },
        // 'pickup_time' : {'$cond':[
        // 	{'$ne':['$pickup_time','']},
        // 	{'$dateToString': { 'format': "%d-%m-%Y %H:%M:%S", 'date':'$pickup_time' }},
        // 	''
        // 	]
        // },
        // 'actual_pickup_time' : {'$cond':[
        // 	{'$ne':['$actual_pickup_time','']},
        // 	{'$dateToString': { 'format': "%d-%m-%Y %H:%M:%S", 'date':{'$add':['$drop_time',3 * 60 * 60 * 1000]} }},
        // 	''
        // 	]
        // },
        // 'drop_time' : {'$cond':[
        // 	{'$ne':['$drop_time','']},
        // 	{'$dateToString': { 'format': "%d-%m-%Y %H:%M:%S", 'date':{'$add':['$drop_time',3 * 60 * 60 * 1000]} }},
        // 	''
        // 	]
        // },
        // 'arrived_time' : {'$cond':[
        // 	{'$ne':['$arrived_time','']},
        // 	{'$dateToString': { 'format': "%d-%m-%Y %H:%M:%S", 'date':{'$add':['$arrived_time',3 * 60 * 60 * 1000]} }},
        // 	''
        // 	]
        // }
      },
    },
    {
      $sort: {
        _id: -1,
      },
    },
  ];
  var collection = db.get().collection(t.MDB_LOGS_MISSED);
  collection.aggregate(arguments).toArray(function (err, results) {
    //console.log('err',err);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};
exports.passenger_trips_rejected = function (q, userid) {
  var deferred = q.defer();

  var match_array = {
    passengers_id: parseInt(userid),
    //'msg_status':'R',
    //'driver_reply':'A',
    //'travel_status':parseInt(1)
  };

  let arguments = [
    {
      $match: match_array,
    },
    {
      $lookup: {
        from: t.MDB_PASSENGERS,
        localField: "passengers_id",
        foreignField: "_id",
        as: "passengers",
      },
    },
    {
      $unwind: "$passengers",
    },
    {
      $lookup: {
        from: t.MDB_TRANS,
        localField: "_id",
        foreignField: "passengers_log_id",
        as: "trans",
      },
    },
    {
      $unwind: { preserveNullAndEmptyArrays: true, path: "$trans" },
    },
    {
      $lookup: {
        from: t.MDB_PEOPLE,
        localField: "driver_id",
        foreignField: "_id",
        as: "people",
      },
    },
    {
      $unwind: { preserveNullAndEmptyArrays: true, path: "$people" },
    },
    {
      $lookup: {
        from: t.MDB_TAXI,
        localField: "taxi_id",
        foreignField: "_id",
        as: "taxi",
      },
    },
    {
      $unwind: {
        path: "$taxi",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $lookup: {
        from: t.MDB_MOTOR_MODEL,
        localField: "taxi_modelid",
        foreignField: "_id",
        as: "model",
      },
    },
    {
      $unwind: {
        path: "$model",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $project: {
        pickup_time: "$pickup_time",
        pickup_longitude: "$pickup_longitude",
        pickup_latitude: "$pickup_latitude",
        drop_latitude: "$drop_latitude",
        drop_longitude: "$drop_longitude",
        travel_status: "$travel_status",
        amt: {
          $cond: [
            { $gt: ["$trans.driver_edit_status", 0] },
            { $sum: ["$trans.tripfare", "$trans.add_amt"] },
            {
              $sum: [
                "$trans.actual_paid_amt",
                "$trans.add_amt",
                "$trans.wallet_amount_used",
              ],
            },
          ],
        },
        //'pickup_time' : {'$dateToString': { 'format': "%d-%m-%Y %H:%M:%S", 'date': "$pickup_time" }},
        pickup_time: "$pickup_time",
        actual_pickup_time: "$actual_pickup_time",
        drop_time: "$drop_time",
        notes: "$notes_driver",
        distance: "$distance",
        waiting_hour: "$trans.waitingtime",
        trip_duration: { $ifNull: ["$trans.trip_minutes", 0] },
        bookby: "$bookby",
        drivername: "$people.name",
        driver_lastname: "$people.lastname",
        passenger_name: "$passengers.name",
        passenger_id: "$passengers._id",
        passenger_profile_image: "$passengers.profile_image",
        passengers_log_id: "$_id",
        pickup_location: "$current_location",
        drop_location: { $ifNull: ["$drop_location", 0] },
        travel_status: "$travel_status",
        ratings: { $ifNull: ["$rating", 0] },
        tags: { $ifNull: ["$driver_tags", 0] },
        //'wallet_amount' : '$used_wallet_amount',
        payment_type: { $ifNull: ["$trans.payment_type", 0] },
        waiting_cost: { $ifNull: ["$trans.waiting_cost", 0] },
        pending_amt: { $ifNull: ["$trans.pending_amt", 0] },
        advance_payment: { $ifNull: ["$trans.advance_payment", 0] },
        fare: { $ifNull: ["$trans.fare", 0] },
        wallet_used_amount: { $ifNull: ["$trans.wallet_amount_used", 0] },
        add_amt: { $ifNull: ["$trans.add_amt", 0] },
        driver_edit_status: { $ifNull: ["$trans.driver_edit_status", 0] },
        actual_paid_amt: { $ifNull: ["$trans.actual_paid_amt", 0] },
        account_type: "$passenger.account_type",
        account_type_name: "$account.account_type",
        metric: { $ifNull: ["$trans.distance_unit", ""] },
        driver_reply: { $ifNull: ["$driver_reply", ""] },
        taxi_manufacturer: { $ifNull: ["$taxi.taxi_manufacturer", "-"] },
        trip_fare: { $ifNull: ["$trans.tripfare", 0] },
        taxi_no: { $ifNull: ["$taxi.taxi.taxi_no", "-"] },
        model_name: { $ifNull: ["$model.model_name", ""] },
        fare_calculation_type: { $ifNull: ["$trans.fare_calculation_type", 2] },
        notes: "$notes_driver",
        distance_fare: { $ifNull: ["$trans.distance_fare", 0] },
        driver_image: { $ifNull: ["$people.profile_picture", ""] },
        profile_image: { $ifNull: ["$passenger.profile_image", ""] },
        taxi_modelid: "$taxi_modelid",
        // Sasidharan May 9 2025
        model_image: { $ifNull: ["$model.model_image", ""] },
        // 'pickup_time' : {'$cond':[
        // 	{'$ne':['$pickup_time','']},
        // 	{'$dateToString': { 'format': "%d-%m-%Y %H:%M:%S", 'date':'$pickup_time' }},
        // 	''
        // 	]
        // },
        // 'actual_pickup_time' : {'$cond':[
        // 	{'$ne':['$actual_pickup_time','']},
        // 	{'$dateToString': { 'format': "%d-%m-%Y %H:%M:%S", 'date':{'$add':['$drop_time',3 * 60 * 60 * 1000]} }},
        // 	''
        // 	]
        // },
        // 'drop_time' : {'$cond':[
        // 	{'$ne':['$drop_time','']},
        // 	{'$dateToString': { 'format': "%d-%m-%Y %H:%M:%S", 'date':{'$add':['$drop_time',3 * 60 * 60 * 1000]} }},
        // 	''
        // 	]
        // },
        // 'arrived_time' : {'$cond':[
        // 	{'$ne':['$arrived_time','']},
        // 	{'$dateToString': { 'format': "%d-%m-%Y %H:%M:%S", 'date':{'$add':['$arrived_time',3 * 60 * 60 * 1000]} }},
        // 	''
        // 	]
        // }
      },
    },
    {
      $sort: {
        _id: -1,
      },
    },
  ];
  var collection = db.get().collection(t.MDB_LOGS_REJECTED);
  collection.aggregate(arguments).toArray(function (err, results) {
    //console.log('err',err);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

//ramya aug 19 2026

exports.get_passenger_trip_by_status = function (q, userid) {
  var deferred = q.defer();

  try {
    var match_array = {
      passengers_id: parseInt(userid),
      travel_status: {
        $nin: [1, 4, 8],
      },
    };

    var collection = db.get().collection(t.MDB_PASSENGERSLOG);

    var arguments = [
      {
        $match: match_array,
      },
      {
        $project: {
          _id: 1,
          travel_status: 1,
        },
      },
    ];

    collection.aggregate(arguments).toArray(function (err, results) {
      if (err) {
        console.error("Error getting passenger trip:", err);
        deferred.reject(err);
        return;
      }

      deferred.resolve(results);
      deferred.makeNodeResolver();
    });
  } catch (error) {
    console.error("Error in get_passenger_trip_by_status:", error);
    deferred.reject(error);
  }

  return deferred.promise;
};

exports.check_passenger_in_book_now = function (
  q,
  passenger_id,
  current_trip_id
) {
  var deferred = q.defer();
  console.error("calling check_passenger_in_book_now");
  let match_array = {
    passengers_id: parseInt(passenger_id),
    now_after: parseInt(0),
    travel_status: parseInt(0),
    _id: { $ne: parseInt(current_trip_id) },
  };

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);
  collection
    .find(match_array, { pickup_time: 1, _id: 1, confirm_flag: 1 })
    .toArray(function (err, results) {
      console.error("err : ", err);
      console.error("results : ", results);
      deferred.resolve(results);
      deferred.makeNodeResolver();
      result = null;
    });

  return deferred.promise;
};

exports.get_ratings_info = function (q) {
  var deferred = q.defer();

  let match_array = {};

  var collection = db.get().collection(t.MDB_RATINGS);
  collection
    .find(match_array, {
      ratings_no: 1,
      ratings_title: 1,
      ratings_title_ar: 1,
      ratings_tags: 1,
      ratings_tags_ar: 1,
    })
    .toArray(function (err, results) {
      deferred.resolve(results);
      deferred.makeNodeResolver();
      result = null;
    });

  return deferred.promise;
};

exports.trip_pay_details = function (q, trip_id) {
  var deferred = q.defer();

  let match_array = {
    trip_id: parseInt(trip_id),
  };

  var collection = db.get().collection(t.MDB_PAYDETAILS);
  collection.find(match_array, {}).toArray(function (err, results) {
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.check_confirmed_status = function (q, trip_id) {
  var deferred = q.defer();

  let match_array = {
    _id: parseInt(trip_id),
  };

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);
  collection
    .find(match_array, {
      travel_status: 1,
      confirm_flag: 1,
      book_type: 1,
      driver_reply: 1,
    })
    .toArray(function (err, results) {
      deferred.resolve(results);
      deferred.makeNodeResolver();
      result = null;
    });

  return deferred.promise;
};

exports.passenger_update_drop_location = function (q, trip_id, update_array) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);

  collection.update(
    { _id: parseInt(trip_id) },
    { $set: update_array },
    { $upsert: false },
    function (err, data) {
      //console.log('err2',err);
      deferred.resolve(data);
      deferred.makeNodeResolver();
      data = null;
    }
  );

  return deferred.promise;
};

exports.passengers_wallet_logs = function (q, userid, start, limit) {
  var deferred = q.defer();

  var match_array = {
    passenger_id: parseInt(userid),
  };

  let arguments = [
    {
      $lookup: {
        from: t.MDB_PASSENGERS,
        localField: "passenger_id",
        foreignField: "_id",
        as: "pass",
      },
    },
    {
      $unwind: "$pass",
    },
    {
      $match: match_array,
    },
    {
      $project: {
        id: "$pass._id",
        passenger_email: "$pass.email",
        passenger_id: "$pass._id",
        change_amount: "$change_amount",
        current_wallet_amount: "$wallet_amount",
        created_date: "$created_date",
        created_by: "$created_by",
        recharge_type: "$recharge_type",
        transaction_id: "$transaction_id",
        trip_id: "$trip_id",
      },
    },
    {
      $sort: {
        created_date: -1,
      },
    },
    { $skip: parseInt(start) },
    { $limit: parseInt(limit) },
  ];

  //console.log(arguments);
  var collection = db.get().collection(t.MDB_PASSENGER_WALLET_LOG);
  collection.aggregate(arguments).toArray(function (err, results) {
    //console.log('err',err);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.get_added_promocodes = function (q, userid) {
  var deferred = q.defer();

  var match_array = {
    passenger_id: parseInt(userid),
  };

  let arguments = [
    {
      $lookup: {
        from: t.MDB_PASSENGERS_PROMO,
        localField: "promocode_id",
        foreignField: "_id",
        as: "promo",
      },
    },
    { $unwind: "$promo" },
    {
      $lookup: {
        from: t.MDB_COUPON_PACKAGE,
        localField: "promo.package",
        foreignField: "_id",
        as: "coupon",
      },
    },
    { $unwind: "$coupon" },
    { $match: match_array },
    {
      $project: {
        promo_code: "$promo_code",
        passenger_commission: "$coupon.passenger_commission",
        promocode_title: "$coupon.coupon_package_name",
        promocode_description: "$coupon.coupon_package_description",
        expiry_date: "$promo.expire_date",
        total_used: "$promo.total_used",
        total_applied: "$promo.total_applied",
        promo_limit: "$promo.promo_limit",
      },
    },
    { $sort: { _id: -1 } },
  ];
  var collection = db.get().collection(t.MDB_PASSENGERS_ADDED_PROMO);
  collection.aggregate(arguments).toArray(function (err, results) {
    //console.log('err',err);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.get_passenger_notifications = function (q) {
  var deferred = q.defer();

  // 07 Aug 2020

  var match_array1 = {
    sent_status: { $ne: 0 },
    notification_type: 4,
  };

  var match_array2 = {
    sent_status: { $ne: 0 },
    notification_type: 5,
    start_date: {
      $lte: new Date(),
    },
    expire_date: {
      $gte: new Date(),
    },
  };

  var match_array = {
    $or: [match_array1, match_array2],
  };

  // 07 Aug 2020

  //console.log('Query coming',match_array);
  let arguments = [
    { $match: match_array }, // 07 Aug 2020
    {
      $project: {
        title: { $ifNull: ["$title", ""] },
        code: { $ifNull: ["$code", ""] },
        sub_title: { $ifNull: ["$sub_title", ""] },
        message: "$message",
        title_ar: { $ifNull: ["$title_ar", ""] },
        sub_title_ar: { $ifNull: ["$sub_title_ar", ""] },
        message_ar: "$message_ar",
        image: "$image",
        notification_type: "$notification_type", // 07 Aug 2020
        created_date: "$created_date",
        color_code: { $ifNull: ["$color_code", ""] },
        image_only: { $ifNull: ["$image_only", 0] },
      },
    },
    { $sort: { _id: -1 } },
  ];
  var collection = db.get().collection(t.MDB_NOTIFICATIONS);
  collection.aggregate(arguments).toArray(function (err, results) {
    //console.log('err',err);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.check_already_promocode_added = function (q, passenger_id) {
  var deferred = q.defer();

  var match_array = {
    passenger_id: parseInt(passenger_id),
    "promo.start_date": {
      $lte: new Date(),
    },
    "promo.expire_date": {
      $gte: new Date(),
    },
  };

  let arguments = [
    {
      $lookup: {
        from: t.MDB_PASSENGER_PROMO,
        localField: "promocode_id",
        foreignField: "_id",
        as: "promo",
      },
    },
    { $unwind: "$promo" },
    { $match: match_array },
    {
      $project: {
        promocode: "$promocode",
        promo_code: "$promo_code",
        passenger_commission: "$coupon.passenger_commission",
        expiry_date: "$promo.expire_date",
        total_used: "$promo.total_used",
        total_applied: "$promo.total_applied",
        promo_limit: "$promo.promo_limit",
      },
    },
  ];

  var collection = db.get().collection(t.MDB_PASSENGERS_ADDED_PROMO);
  collection.aggregate(arguments).toArray(function (err, results) {
    //console.log('err',err);
    //console.log('chcek promocode',results);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

/* Sasidharan july 15 2022 */
exports.check_already_promocode_added_new = function (q, passenger_id) {
  var deferred = q.defer();

  var match_array = {
    passenger_id: parseInt(passenger_id),
    "promo.start_date": {
      $lte: new Date(),
    },
    "promo.expire_date": {
      $gte: new Date(),
    },
  };

  let arguments = [
    {
      $lookup: {
        from: t.MDB_PASSENGER_PROMO,
        localField: "promocode_id",
        foreignField: "_id",
        as: "promo",
      },
    },
    { $unwind: "$promo" },
    { $match: match_array },
    {
      $lookup: {
        from: t.MDB_COUPON_PACKAGE,
        localField: "promo.package",
        foreignField: "_id",
        as: "coupon",
      },
    },
    { $unwind: "$coupon" },
    /* Sasidharan july 15 2022 */
    {
      $sort: { _id: -1 },
    },
    {
      $limit: 1,
    },
    {
      $project: {
        promocode: "$promocode",
        promo_code: "$promo_code",
        passenger_commission: "$coupon.passenger_commission",
        promocode_title: "$coupon.coupon_package_name",
        promocode_description: "$coupon.coupon_package_description",
        expiry_date: "$promo.expire_date",
        total_used: "$promo.total_used",
        total_applied: "$promo.total_applied",
        promo_limit: "$promo.promo_limit",
      },
    },
  ];

  var collection = db.get().collection(t.MDB_PASSENGERS_ADDED_PROMO);
  collection.aggregate(arguments).toArray(function (err, results) {
    //console.log('err',err);
    //console.log('chcek promocode',results);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.get_cancellation_fare = function (q, trip_id) {
  var deferred = q.defer();

  let arguments = [
    {
      $lookup: {
        from: t.MDB_TAXI,
        localField: "taxi_id",
        foreignField: "_id",
        as: "taxi",
      },
    },
    { $unwind: "$taxi" },
    {
      $lookup: {
        from: t.MDB_MOTOR_MODEL,
        localField: "taxi.taxi_model",
        foreignField: "_id",
        as: "mm",
      },
    },
    { $unwind: "$mm" },
    { $match: { _id: parseInt(trip_id) } },
    {
      $project: {
        Passenger_log_id: "$_id",
        cancellation_fare: "$mm.cancellation_fare",
      },
    },
  ];

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);
  collection.aggregate(arguments).toArray(function (err, results) {
    //console.log('err',err);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.insert_passenger_added_promocode = function (q, insertArray) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERS_ADDED_PROMO);
  collection.insert(insertArray, function (err, results) {
    //console.log('insert err',err);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.insert_gift_card_logs = function (q, insertArray) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_GIFT_CARD_LOG);
  collection.insert(insertArray, function (err, results) {
    //console.log('insert err',err);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.get_cms_content = function (q, menu) {
  var deferred = q.defer();

  var match_array = { menu_link: menu };

  var collection = db.get().collection(t.MDB_CMS);
  collection.find(match_array, {}).toArray(function (err, results) {
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.update_driver_status = function (q, id, update_array) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_DRIVER_INFO);

  collection.update(
    { _id: parseInt(id) },
    { $set: update_array },
    { $upsert: false },
    function (err, data) {
      //console.log('err2',err);
      deferred.resolve(data);
      deferred.makeNodeResolver();
      data = null;
    }
  );

  return deferred.promise;
};

exports.update_request_details = function (q, id, update_array) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_DRIVER_REQUEST_DETAILS);

  collection.update(
    { _id: parseInt(id) },
    { $set: update_array },
    { $upsert: false },
    function (err, data) {
      //console.log('err2',err);
      deferred.resolve(data);
      deferred.makeNodeResolver();
      data = null;
    }
  );

  return deferred.promise;
};

exports.update_log_details = function (q, id, update_array) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);

  collection.update(
    { _id: parseInt(id) },
    { $set: update_array },
    { $upsert: false },
    function (err, data) {
      //console.log('err2',err);
      deferred.resolve(data);
      deferred.makeNodeResolver();
      data = null;
    }
  );

  return deferred.promise;
};

exports.update_passenger_wallet = function (q, id, update_array) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERS);

  collection.update(
    { _id: parseInt(id) },
    { $set: update_array },
    { $upsert: false },
    function (err, data) {
      //console.log('err2',err);
      deferred.resolve(data);
      deferred.makeNodeResolver();
      data = null;
    }
  );

  return deferred.promise;
};

exports.insert_transaction_details = function (q, insertArray) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_TRANS);
  collection.insert(insertArray, function (err, results) {
    //console.log('insert err',err);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.update_passenger_language = function (q, id, lang) {
  var deferred = q.defer();

  var update_array = {
    lang: lang,
  };

  var collection = db.get().collection(t.MDB_PASSENGERS);

  collection.update(
    { _id: parseInt(id) },
    { $set: update_array },
    { $upsert: false },
    function (err, data) {
      //console.log('err2',err);
      deferred.resolve(data);
      deferred.makeNodeResolver();
      data = null;
    }
  );

  return deferred.promise;
};

exports.update_passenger_notification = function (q, id, update_array) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERS);

  collection.update(
    { _id: parseInt(id) },
    { $set: update_array },
    { $upsert: false },
    function (err, data) {
      //console.log('err2',err);
      deferred.resolve(data);
      deferred.makeNodeResolver();
      data = null;
    }
  );

  return deferred.promise;
};

exports.update_passenger_details = function (q, id, update_array) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERS);

  collection.update(
    { _id: parseInt(id) },
    { $set: update_array },
    { $upsert: false },
    function (err, data) {
      //console.log('err2',err);
      deferred.resolve(data);
      deferred.makeNodeResolver();
      data = null;
    }
  );

  return deferred.promise;
};

exports.passenger_trips_upcoming = function (q, userid) {
  var deferred = q.defer();

  var match_array1 = {
    passengers_id: parseInt(userid),
    //'driver_reply':'',
    travel_status: parseInt(0),
  };

  var match_array = {
    $or: [match_array1],
  };

  let arguments = [
    {
      $match: match_array,
    },
    {
      $lookup: {
        from: t.MDB_PASSENGERS,
        localField: "passengers_id",
        foreignField: "_id",
        as: "passengers",
      },
    },
    {
      $unwind: "$passengers",
    },
    {
      $lookup: {
        from: t.MDB_TRANS,
        localField: "_id",
        foreignField: "passengers_log_id",
        as: "trans",
      },
    },
    {
      $unwind: { preserveNullAndEmptyArrays: true, path: "$trans" },
    },
    {
      $lookup: {
        from: t.MDB_PEOPLE,
        localField: "driver_id",
        foreignField: "_id",
        as: "people",
      },
    },
    {
      $unwind: { preserveNullAndEmptyArrays: true, path: "$people" },
    },
    {
      $lookup: {
        from: t.MDB_TAXI,
        localField: "taxi_id",
        foreignField: "_id",
        as: "taxi",
      },
    },
    {
      $unwind: {
        path: "$taxi",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $lookup: {
        from: t.MDB_MOTOR_MODEL,
        localField: "taxi_modelid",
        foreignField: "_id",
        as: "model",
      },
    },
    {
      $unwind: {
        path: "$model",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $project: {
        pickup_time: "$pickup_time",
        pickup_longitude: "$pickup_longitude",
        pickup_latitude: "$pickup_latitude",
        drop_latitude: "$drop_latitude",
        drop_longitude: "$drop_longitude",
        travel_status: "$travel_status",
        driver_reply: "$driver_reply",
        airport_pickup: "$airport_pickup",
        airport_type: "$airport_type",
        promocode: "$promocode",
        amt: {
          $cond: [
            { $gt: ["$trans.driver_edit_status", 0] },
            { $sum: ["$trans.tripfare", "$trans.add_amt"] },
            {
              $sum: [
                "$trans.actual_paid_amt",
                "$trans.add_amt",
                "$trans.wallet_amount_used",
              ],
            },
          ],
        },
        //'pickup_time' : {'$dateToString': { 'format': "%d-%m-%Y %H:%M:%S", 'date': "$pickup_time" }},
        pickup_time: "$pickup_time",
        actual_pickup_time: "$actual_pickup_time",
        drop_time: "$drop_time",
        notes: "$notes_driver",
        distance: "$distance",
        waiting_hour: "$trans.waitingtime",
        trip_duration: { $ifNull: ["$trans.trip_minutes", 0] },
        bookby: "$bookby",
        drivername: "$people.name",
        driver_lastname: "$people.lastname",
        passenger_name: "$passengers.name",
        passenger_id: "$passengers._id",
        passenger_profile_image: "$passengers.profile_image",
        model_name: { $ifNull: ["$model.model_name", ""] },
        model_size: { $ifNull: ["$model.model_size", ""] },
        luggage: { $ifNull: ["$model.max_luggage", ""] },
        category: { $ifNull: ["$model.category_name", ""] },
        taxi_no: { $ifNull: ["$taxi.taxi.taxi_no", "-"] },
        passengers_log_id: "$_id",
        pickup_location: "$current_location",
        drop_location: { $ifNull: ["$drop_location", 0] },
        travel_status: "$travel_status",
        ratings: { $ifNull: ["$rating", 0] },
        tags: { $ifNull: ["$driver_tags", 0] },
        //'wallet_amount' : '$used_wallet_amount',
        payment_type: { $ifNull: ["$trans.payment_type", 0] },
        waiting_cost: { $ifNull: ["$trans.waiting_cost", 0] },
        pending_amt: { $ifNull: ["$trans.pending_amt", 0] },
        advance_payment: { $ifNull: ["$trans.advance_payment", 0] },
        fare: { $ifNull: ["$trans.fare", 0] },
        trip_fare: { $ifNull: ["$trans.tripfare", 0] },
        wallet_used_amount: { $ifNull: ["$trans.wallet_amount_used", 0] },
        add_amt: { $ifNull: ["$trans.add_amt", 0] },
        driver_edit_status: { $ifNull: ["$trans.driver_edit_status", 0] },
        actual_paid_amt: { $ifNull: ["$trans.actual_paid_amt", 0] },
        account_type: "$passenger.account_type",
        taxi_modelid: "$taxi_modelid",
        account_type_name: "$account.account_type",
        metric: { $ifNull: ["$trans.distance_unit", ""] },
        taxi_manufacturer: { $ifNull: ["$taxi.taxi_manufacturer", "-"] },
        fare_calculation_type: { $ifNull: ["$trans.fare_calculation_type", 2] },
        driver_image: { $ifNull: ["$people.profile_picture", ""] },
        approx_fare: { $ifNull: ["$approx_fare", 0] }, // Client Feedback
        surge_price_percentage: { $ifNull: ["$surge_price_percentage", 0] }, // Client Feedback
        profile_image: { $ifNull: ["$passenger.profile_image", ""] },
        new_approx_fare: "$approx_fare",
        // Sasidharan May 9 2025
        model_image: { $ifNull: ["$model.model_image", ""] },
      },
    },
    {
      $sort: {
        _id: -1,
      },
    },
  ];
  var collection = db.get().collection(t.MDB_PASSENGERSLOG);
  collection.aggregate(arguments).toArray(function (err, results) {
    //console.log('err',err);

    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

// Customization
exports.passenger_trips_inprogress = function (q, userid) {
  var deferred = q.defer();

  var match_array1 = {
    passengers_id: parseInt(userid),
    driver_reply: "A",
    travel_status: parseInt(2),
  };

  var match_array2 = {
    passengers_id: parseInt(userid),
    driver_reply: "A",
    travel_status: parseInt(5),
  };

  var match_array3 = {
    passengers_id: parseInt(userid),
    driver_reply: "A",
    travel_status: parseInt(9),
  };

  var match_array4 = {
    passengers_id: parseInt(userid),
    driver_reply: "A",
    travel_status: parseInt(3),
  };

  var match_array = {
    $or: [match_array1, match_array2, match_array3, match_array4],
  };

  let arguments = [
    {
      $match: match_array,
    },
    {
      $lookup: {
        from: t.MDB_PASSENGERS,
        localField: "passengers_id",
        foreignField: "_id",
        as: "passengers",
      },
    },
    {
      $unwind: "$passengers",
    },
    {
      $lookup: {
        from: t.MDB_TRANS,
        localField: "_id",
        foreignField: "passengers_log_id",
        as: "trans",
      },
    },
    {
      $unwind: { preserveNullAndEmptyArrays: true, path: "$trans" },
    },
    {
      $lookup: {
        from: t.MDB_PEOPLE,
        localField: "driver_id",
        foreignField: "_id",
        as: "people",
      },
    },
    {
      $unwind: { preserveNullAndEmptyArrays: true, path: "$people" },
    },
    {
      $lookup: {
        from: t.MDB_TAXI,
        localField: "taxi_id",
        foreignField: "_id",
        as: "taxi",
      },
    },
    {
      $unwind: {
        path: "$taxi",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $lookup: {
        from: t.MDB_MOTOR_MODEL,
        localField: "taxi_modelid",
        foreignField: "_id",
        as: "model",
      },
    },
    {
      $unwind: {
        path: "$model",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $project: {
        pickup_time: "$pickup_time",
        pickup_longitude: "$pickup_longitude",
        pickup_latitude: "$pickup_latitude",
        drop_latitude: "$drop_latitude",
        drop_longitude: "$drop_longitude",
        travel_status: "$travel_status",
        driver_reply: "$driver_reply",
        amt: {
          $cond: [
            { $gt: ["$trans.driver_edit_status", 0] },
            { $sum: ["$trans.tripfare", "$trans.add_amt"] },
            {
              $sum: [
                "$trans.actual_paid_amt",
                "$trans.add_amt",
                "$trans.wallet_amount_used",
              ],
            },
          ],
        },
        //'pickup_time' : {'$dateToString': { 'format': "%d-%m-%Y %H:%M:%S", 'date': "$pickup_time" }},
        pickup_time: "$pickup_time",
        actual_pickup_time: "$actual_pickup_time",
        drop_time: "$drop_time",
        notes: "$notes_driver",
        distance: "$distance",
        waiting_hour: "$trans.waitingtime",
        trip_duration: { $ifNull: ["$trans.trip_minutes", 0] },
        bookby: "$bookby",
        drivername: "$people.name",
        driver_lastname: "$people.lastname",
        passenger_name: "$passengers.name",
        passenger_id: "$passengers._id",
        passenger_profile_image: "$passengers.profile_image",
        model_name: { $ifNull: ["$model.model_name", ""] },
        taxi_no: { $ifNull: ["$taxi.taxi.taxi_no", "-"] },
        passengers_log_id: "$_id",
        pickup_location: "$current_location",
        drop_location: { $ifNull: ["$drop_location", 0] },
        travel_status: "$travel_status",
        ratings: { $ifNull: ["$rating", 0] },
        tags: { $ifNull: ["$driver_tags", 0] },
        //'wallet_amount' : '$used_wallet_amount',
        payment_type: { $ifNull: ["$trans.payment_type", 0] },
        waiting_cost: { $ifNull: ["$trans.waiting_cost", 0] },
        pending_amt: { $ifNull: ["$trans.pending_amt", 0] },
        advance_payment: { $ifNull: ["$trans.advance_payment", 0] },
        fare: { $ifNull: ["$trans.fare", 0] },
        trip_fare: { $ifNull: ["$trans.tripfare", 0] },
        wallet_used_amount: { $ifNull: ["$trans.wallet_amount_used", 0] },
        add_amt: { $ifNull: ["$trans.add_amt", 0] },
        driver_edit_status: { $ifNull: ["$trans.driver_edit_status", 0] },
        actual_paid_amt: { $ifNull: ["$trans.actual_paid_amt", 0] },
        account_type: "$passenger.account_type",
        taxi_modelid: "$taxi_modelid",
        account_type_name: "$account.account_type",
        metric: { $ifNull: ["$trans.distance_unit", ""] },
        taxi_manufacturer: { $ifNull: ["$taxi.taxi_manufacturer", "-"] },
        fare_calculation_type: { $ifNull: ["$trans.fare_calculation_type", 2] },
        driver_image: { $ifNull: ["$people.profile_picture", ""] },
        profile_image: { $ifNull: ["$passenger.profile_image", ""] },

        // Sasidharan May 9 2025
        model_image: { $ifNull: ["$model.model_image", ""] },
        driver_address: { $ifNull: ["$people.address", ""] },
        driver_address_2: { $ifNull: ["$people.address_2", ""] },
        driver_license: { $ifNull: ["$people.driver_license_id", ""] },
      },
    },
    {
      $sort: {
        _id: -1,
      },
    },
  ];
  var collection = db.get().collection(t.MDB_PASSENGERSLOG);
  collection.aggregate(arguments).toArray(function (err, results) {
    //console.log('err',err);

    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};
// Customization

exports.get_trip_detail_complete = function (q, trip_id) {
  var deferred = q.defer();

  var match_array = {
    _id: parseInt(trip_id),
  };

  let arguments = [
    {
      $match: match_array,
    },
    {
      $lookup: {
        from: t.MDB_PASSENGERS,
        localField: "passengers_id",
        foreignField: "_id",
        as: "passengers",
      },
    },
    {
      $unwind: "$passengers",
    },
    {
      $lookup: {
        from: t.MDB_TRANS,
        localField: "_id",
        foreignField: "passengers_log_id",
        as: "trans",
      },
    },
    {
      $unwind: {
        path: "$trans",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $lookup: {
        from: t.MDB_TAXI,
        localField: "taxi_id",
        foreignField: "_id",
        as: "taxi",
      },
    },
    {
      $unwind: {
        path: "$taxi",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $lookup: {
        from: t.MDB_DRIVER_INFO,
        localField: "driver_id",
        foreignField: "_id",
        as: "driverinfo",
      },
    },
    {
      $unwind: {
        path: "$driverinfo",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $lookup: {
        from: t.MDB_MOTOR_MODEL,
        localField: "taxi_modelid",
        foreignField: "_id",
        as: "model",
      },
    },
    {
      $unwind: {
        path: "$model",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $lookup: {
        from: t.MDB_PEOPLE,
        localField: "driver_id",
        foreignField: "_id",
        as: "people",
      },
    },
    {
      $unwind: {
        path: "$people",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $project: {
        amt: {
          $cond: [
            { $gt: ["$trans.driver_edit_status", 0] },
            { $sum: ["$trans.tripfare", "$trans.add_amt"] },
            {
              $sum: [
                "$trans.actual_paid_amt",
                "$trans.add_amt",
                "$trans.wallet_amount_used",
              ],
            },
          ],
        },
        notes: { $ifNull: ["$notes_driver", ""] },
        distance: { $ifNull: ["$distance", 0] },
        waiting_hour: "$waitingtime",
        //'trip_duration' : {'$divide':[{'$subtract':['$drop_time','$actual_pickup_time']},60000]},
        wallet_amount: "$used_wallet_amount",
        waiting_cost: { $ifNull: ["$trans.waiting_cost", 0] },
        fare: { $ifNull: ["$trans.fare", 0] },
        wallet_used_amount: { $ifNull: ["$trans.wallet_amount_used", 0] },
        add_amt: { $ifNull: ["$trans.add_amt", 0] },
        driver_edit_status: { $ifNull: ["$trans.driver_edit_status", 0] },
        actual_paid_amt: { $ifNull: ["$trans.actual_paid_amt", 0] },
        total_without_discount: {
          $ifNull: ["$trans.total_without_discount", 0],
        },

        gift_card_status: { $ifNull: ["$gift_card_status", 0] },
        gift_card_discount: { $ifNull: ["$gift_card_discount", 0] },

        passenger_name: "$passengers.name",
        passenger_phone: "$passengers.phone",
        passenger_email: "$passengers.email",
        passenger_lastname: "$passengers.lastname",
        tripfare: { $ifNull: ["$trans.tripfare", 0] },
        o_fare: {
          $cond: [
            { $gt: ["$trans.driver_edit_status", 0] },
            {
              $sum: [
                "$trans.fare",
                "$trans.wallet_amount_used",
                "$trans.add_amt",
              ],
            },
            { $sum: ["$trans.actual_paid_amt", "$trans.wallet_amount_used"] },
          ],
        },
        trip_duration: {
          $cond: [
            { $eq: ["$trans.drop_time", true] },
            {
              $divide: [
                { $subtract: ["$drop_time", "$actual_pickup_time"] },
                60000,
              ],
            },
            0,
          ],
        },
        coordinates: "$driverinfo.loc.coordinates",
        bearing: "$driverinfo.bearing",
        accuracy: "$driverinfo.accuracy",
        driver_status: "$driverinfo.status",
        amt: { $sum: "$trans.amt" },
        trans_id: { $ifNull: ["$trans._id", ""] },
        airport_pickup: { $ifNull: ["$airport_pickup", ""] },
        airport_type: { $ifNull: ["$airport_type", 0] },
        //'actual_distance': {'$sum':'$trans.distance'),
        //'metric' : {'$sum':'$trans.distance_unit'),
        //'job_ref' : {'$sum':'$trans.job_ref'),
        //'payment_type' : {'$sum':'$trans.payment_type'),
        actual_distance: { $ifNull: ["$trans.distance", 0] },
        metric: { $ifNull: ["$trans.distance_unit", 0] },
        job_ref: { $ifNull: ["$trans.job_ref", 0] },
        payment_type: { $ifNull: ["$trans.payment_type", 0] },
        discount_wallet_amount_used: {
          $ifNull: ["$discount_wallet_amount_used", 0],
        },
        passengers_id: "$passengers_id",
        passengers_log_id: "$_id",
        current_location: "$current_location",
        no_passengers: "$no_passengers",
        pickup_time: "$pickup_time",
        actual_pickup_time: { $ifNull: ["$actual_pickup_time", ""] },
        drop_time: { $ifNull: ["$drop_time", ""] },
        arrived_time: { $ifNull: ["$arrived_time", ""] },
        rating: "$rating",
        notes_driver: { $ifNull: ["$notes_driver", ""] },
        travel_status: "$travel_status",
        driver_reply: "$driver_reply",
        city_id: "$search_city",
        pickup_location: "$current_location",
        pickup_latitude: "$pickup_latitude",
        pickup_longitude: "$pickup_longitude",
        drop_location: "$drop_location",
        drop_latitude: "$drop_latitude",
        drop_longitude: "$drop_longitude",
        taxi_modelid: "$taxi_modelid",
        taxi_model_name: "$model.model_name",
        model_image: "$model.model_image",
        model_image_new: "$model.model_image_new",
        time_to_reach_passen: { $ifNull: ["$time_to_reach_passen", "0"] },
        notification_status: "$notification_status",
        used_wallet_amount: "$used_wallet_amount",
        bookby: "$bookby",
        passenger_name: "$passengers.name",
        passenger_phone: "$passengers.phone",
        passenger_lang: "$passengers.lang",
        passenger_image: "$passengers.profile_image",
        lateral_end_date: "$passengers.lateral_end_date",
        passenger_wallet_amount: { $ifNull: ["$passengers.wallet_amount", 0] },
        driver_name: { $ifNull: ["$people.name", ""] },
        driver_image: { $ifNull: ["$people.profile_picture", ""] },
        driver_id: { $ifNull: ["$people._id", ""] },
        driver_phone: { $ifNull: ["$people.phone", ""] },
        driver_login_status: { $ifNull: ["$people.login_status", ""] },
        taxi_no: "$taxi.taxi_no",
        taxi_speed: "$taxi.taxi_speed",
        taxi_min_speed: "$taxi.taxi_min_speed",
        taxi_id: "$taxi._id",
        taxi_manufacturer: "$taxi.taxi_manufacturer",
        taxi_colour: "$taxi.taxi_colour",
        waiting_time: { $ifNull: ["$trans.waiting_time", "00:00:00"] },
        //'distance' : '$distance',
        drop_location: "$drop_location",
        book_tag: "$book_tag",
        pas_pay_by: "$passengers.pay_by",
        pas_pay_lmt: "$passengers.trip_amt_limit",
        pass_id_image: "$passengers.id_image",
        tags: "$driver_tags",
        ratings: "$rating",
        /* Sasidharan apr 29 - 2022 */
        applied_corporate_promocode: {
          $ifNull: ["$applied_corporate_promocode", 0],
        },
        /* Sasidharan May 13 2024 */
        paymentInProgress: { $ifNull: ["$paymentInProgress", 0] },
      },
    },
    {
      $sort: {
        _id: -1,
      },
    },
  ];
  var collection = db.get().collection(t.MDB_PASSENGERSLOG);
  collection.aggregate(arguments).toArray(function (err, results) {
    //console.log('err trip',err);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.insert_temp_logs = function (q, insertArray) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERS_LOGS_TEMP);
  collection.insert(insertArray, function (err, results) {
    //console.log('err',err);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.update_trip = function (q, updateArray, trip_id) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);

  collection.update(
    { _id: parseInt(trip_id) },
    { $set: updateArray },
    { $upsert: false },
    function (err, data) {
      //console.log('err2',err);
      deferred.resolve(data);
      deferred.makeNodeResolver();
      data = null;
    }
  );

  return deferred.promise;
};

exports.update_trip_reward = function (q, updateArray, id) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERS);

  collection.update(
    { _id: parseInt(id) },
    updateArray,
    { $upsert: false },
    function (err, data) {
      //console.log('err2',err);
      deferred.resolve(data);
      deferred.makeNodeResolver();
      data = null;
    }
  );

  return deferred.promise;
};

exports.get_completed_trip_detail = function (q, trip_id) {
  var deferred = q.defer();

  var match_array = {
    _id: parseInt(trip_id),
  };

  let arguments = [
    {
      $match: match_array,
    },
    {
      $lookup: {
        from: t.MDB_PASSENGERS,
        localField: "passengers_id",
        foreignField: "_id",
        as: "passengers",
      },
    },
    {
      $unwind: "$passengers",
    },
    {
      $lookup: {
        from: t.MDB_TRANS,
        localField: "_id",
        foreignField: "passengers_log_id",
        as: "trans",
      },
    },
    {
      $unwind: {
        path: "$trans",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $lookup: {
        from: t.MDB_TAXI,
        localField: "taxi_id",
        foreignField: "_id",
        as: "taxi",
      },
    },
    {
      $unwind: {
        path: "$taxi",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $lookup: {
        from: t.MDB_DRIVER_INFO,
        localField: "driver_id",
        foreignField: "_id",
        as: "driverinfo",
      },
    },
    {
      $unwind: {
        path: "$driverinfo",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $lookup: {
        from: t.MDB_MOTOR_MODEL,
        localField: "taxi_modelid",
        foreignField: "_id",
        as: "model",
      },
    },
    {
      $unwind: {
        path: "$model",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $lookup: {
        from: t.MDB_PEOPLE,
        localField: "driver_id",
        foreignField: "_id",
        as: "people",
      },
    },
    {
      $unwind: {
        path: "$people",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $project: {
        amt: {
          $cond: [
            { $gt: ["$trans.driver_edit_status", 0] },
            { $sum: ["$trans.tripfare", "$trans.add_amt"] },
            {
              $sum: [
                "$trans.actual_paid_amt",
                "$trans.add_amt",
                "$trans.wallet_amount_used",
                "$trans.discount_wallet_amount_used",
              ],
            },
          ],
        },
        pickup_time: {
          $dateToString: {
            format: "%d-%m-%Y %H:%M:%S",
            date: { $add: ["$pickup_time", 3 * 60 * 60 * 1000] },
          },
        },
        actual_pickup_time: {
          $dateToString: {
            format: "%d-%m-%Y %H:%M:%S",
            date: { $add: ["$actual_pickup_time", 3 * 60 * 60 * 1000] },
          },
        },
        drop_time: {
          $dateToString: {
            format: "%d-%M-%Y %H:%m:%S",
            date: { $add: ["$drop_time", 3 * 60 * 60 * 1000] },
          },
        },
        notes: { $ifNull: ["$notes_driver", ""] },
        distance: { $ifNull: ["$distance", 0] },
        waiting_hour: "$waitingtime",
        //'trip_duration' : {'$divide':[{'$subtract':['$drop_time','$actual_pickup_time']},60000]},
        wallet_amount: "$used_wallet_amount",
        waiting_cost: { $ifNull: ["$trans.waiting_cost", 0] },
        fare: { $ifNull: ["$trans.fare", 0] },
        wallet_used_amount: { $ifNull: ["$trans.wallet_amount_used", 0] },
        add_amt: { $ifNull: ["$trans.add_amt", 0] },
        driver_edit_status: { $ifNull: ["$trans.driver_edit_status", 0] },
        actual_paid_amt: { $ifNull: ["$trans.actual_paid_amt", 0] },
        discount_wallet_amount_used: {
          $ifNull: ["$trans.discount_wallet_amount_used", 0],
        },
        tripfare: { $ifNull: ["$trans.tripfare", 0] },
        o_fare: {
          $cond: [
            { $gt: ["$trans.driver_edit_status", 0] },
            {
              $sum: [
                "$trans.fare",
                "$trans.wallet_amount_used",
                "$trans.add_amt",
                "$trans.discount_wallet_amount_used",
              ],
            },
            { $sum: ["$trans.actual_paid_amt", "$trans.wallet_amount_used"] },
          ],
        },
        trip_duration: {
          $cond: [
            { $eq: ["$drop_time", true] },
            {
              $divide: [
                { $subtract: ["$drop_time", "$actual_pickup_time"] },
                60000,
              ],
            },
            0,
          ],
        },
        coordinates: "$driverinfo.loc.coordinates",
        driver_latitude: { $arrayElemAt: ["$driverinfo.loc.coordinates", 1] },
        driver_longitude: { $arrayElemAt: ["$driverinfo.loc.coordinates", 0] },
        bearing: "$driverinfo.bearing",
        accuracy: "$driverinfo.accuracy",
        driver_status: "$driverinfo.status",
        amt: { $sum: "$trans.amt" },
        trans_id: { $ifNull: ["$trans._id", ""] },
        airport_pickup: { $ifNull: ["$airport_pickup", ""] },
        airport_type: { $ifNull: ["$airport_type", 0] },
        trip_minutes: { $ifNull: ["$trans.trip_minutes", 0] },
        waiting_time: { $ifNull: ["$trans.waiting_time", "00:00:00"] },
        minutes_fare: { $ifNull: ["$trans.minutes_fare", 0] },
        //'actual_distance': {'$sum':'$trans.distance'),
        //'metric' : {'$sum':'$trans.distance_unit'),
        //'job_ref' : {'$sum':'$trans.job_ref'),
        //'payment_type' : {'$sum':'$trans.payment_type'),
        actual_distance: { $ifNull: ["$trans.distance", 0] },
        metric: { $ifNull: ["$trans.distance_unit", 0] },
        job_ref: { $ifNull: ["$trans.job_ref", 0] },
        payment_type: { $ifNull: ["$trans.payment_type", 0] },
        pay_mod_id: { $ifNull: ["$trans.payment_type", 0] },
        passengers_id: "$passengers_id",
        passengers_log_id: "$_id",
        current_location: "$current_location",
        no_passengers: "$no_passengers",
        pickup_time: "$pickup_time",
        actual_pickup_time: { $ifNull: ["$actual_pickup_time", ""] },
        drop_time: { $ifNull: ["$drop_time", ""] },
        arrived_time: { $ifNull: ["$arrived_time", ""] },
        rating: "$rating",
        notes_driver: { $ifNull: ["$notes_driver", ""] },
        travel_status: "$travel_status",
        driver_reply: "$driver_reply",
        city_id: "$search_city",
        pickup_location: "$current_location",
        pickup_latitude: "$pickup_latitude",
        pickup_longitude: "$pickup_longitude",
        drop_location: "$drop_location",
        drop_latitude: "$drop_latitude",
        drop_longitude: "$drop_longitude",
        taxi_modelid: "$taxi_modelid",
        taxi_model_name: "$model.model_name",
        model_image: "$model.model_image",
        model_image_new: "$model.model_image_new",
        time_to_reach_passen: { $ifNull: ["$time_to_reach_passen", "0"] },
        notification_status: "$notification_status",
        used_wallet_amount: "$used_wallet_amount",
        bookby: "$bookby",
        passenger_name: "$passengers.name",
        passenger_phone: "$passengers.phone",
        passenger_image: "$passengers.profile_image",
        lateral_end_date: "$passengers.lateral_end_date",
        passenger_wallet_amount: { $ifNull: ["$passengers.wallet_amount", 0] },
        driver_name: { $ifNull: ["$people.name", ""] },
        driver_lastname: { $ifNull: ["$people.lastname", ""] },
        driver_image: { $ifNull: ["$people.profile_picture", ""] },
        driver_id: { $ifNull: ["$people._id", ""] },
        driver_phone: { $ifNull: ["$people.phone", ""] },
        driver_login_status: { $ifNull: ["$people.login_status", ""] },
        taxi_no: "$taxi.taxi_no",
        taxi_number: "$taxi.taxi_no",
        taxi_speed: "$taxi.taxi_speed",
        taxi_min_speed: "$taxi.taxi_min_speed",
        taxi_id: "$taxi._id",
        taxi_manufacturer: "$taxi.taxi_manufacturer",
        taxi_colour: "$taxi.taxi_colour",
        //'waiting_time' : '$waitingtime',
        //'distance' : '$distance',
        drop_location: "$drop_location",
        book_tag: "$book_tag",
        pas_pay_by: "$passengers.pay_by",
        pas_pay_lmt: "$passengers.trip_amt_limit",
        pass_id_image: "$passengers.id_image",
        tags: "$driver_tags",
        hourly_booking: { $ifNull: ["$hourly_booking", 0] },
        hourly_booking_hrs: { $ifNull: ["$hourly_booking_hrs", 0] },
        ratings: "$rating",
        fare_calculation_type: { $ifNull: ["$trans.fare_calculation_type", 2] },
        distance_fare: { $ifNull: ["$trans.distance_fare", 0] },
        start_waiting_time: { $ifNull: ["$start_waiting_time", 0] },
        total_waiting_time: { $ifNull: ["$total_waiting_time", 0] },
        start_timer: { $ifNull: ["$start_timer", ""] },
        end_timer: { $ifNull: ["$end_timer", ""] },
        waiting_start_status: { $ifNull: ["$waiting_start_status", 2] },
        fixed_estimate_fare_type: { $ifNull: ["$fixed_estimate_fare_type", 0] },
        fixed_estimate_result: "$fixed_estimate_result",
        nightfare_applicable: { $ifNull: ["$trans.nightfare_applicable", 0] },
        nightfare: { $ifNull: ["$trans.nightfare", 0] },
        additionalMinsFare: { $ifNull: ["$additionalMinsFare", 0] },
        additionalMins: { $ifNull: ["$additionalMins", 0] },

        eveningfare_applicable: {
          $ifNull: ["$trans.eveningfare_applicable", 0],
        },
        eveningfare: { $ifNull: ["$trans.eveningfare", 0] },
        surge_price: { $ifNull: ["$trans.surge_price", 0] }, // 03 Feb 2020
        surge_price_percentage: { $ifNull: ["$surge_price_percentage", 0] }, // 03 Feb 2020
        passenger_discount: { $ifNull: ["$trans.passenger_discount", 0] }, // 03 Feb 2020
        corporate_amount: { $ifNull: ["$trans.corporate_amount", 0] }, // 03 Feb 2020
        zone_fare_applicable: { $ifNull: ["$zone_fare_applicable", 0] },
        zone_fare_type: { $ifNull: ["$zone_fare_type", 0] },
        zone_fare: { $ifNull: ["$zone_fare", 0] },
        payment_array: { $ifNull: ["$fare_detail", []] },
        discount_wallet_amount_used: {
          $ifNull: ["$trans.discount_wallet_amount_used", 0],
        },
        /* Sasidharan May 13 2024 */
        paymentInProgress: { $ifNull: ["$paymentInProgress", 0] },
        applied_corporate_promocode: {
          $ifNull: ["$applied_corporate_promocode", 0],
        },
        driver_license: { $ifNull: ["$people.driver_license_id", ""] },
        deductedAmountFromTap: { $ifNull: ["$deductedAmountFromTap", 0] },
        // card : { $ifNull: ["$card", {}] },
        last_four: { $ifNull: ["$card.last_four", ""] },
        card_type: { $ifNull: ["$card.brand", ""] },
        tapPaymentGatewayToken: {
          $ifNull: ["$trans.tapPaymentGatewayToken", ""],
        },
        tap_fare: { $ifNull: ["$trans.fare", 0] },
      },
    },
    {
      $sort: {
        _id: -1,
      },
    },
  ];
  var collection = db.get().collection(t.MDB_LOGS_COMPLETED);
  collection.aggregate(arguments).toArray(function (err, results) {
    //console.log('err trip',err);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.update_notification_logs = function (q, insertArray) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_LOGS);
  collection.insert(insertArray, function (err, results) {
    //console.log('err',err);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.all_model_fare_details = function (q, model_id) {
  var deferred = q.defer();
  var collection = db.get().collection(t.MDB_MOTOR_MODEL);

  if (model_id) {
    match_array = { _id: parseInt(model_id) };
  } else {
    match_array = { model_status: "A" };
  }

  var aestTime = new Date().toLocaleString("en-US", {
    timeZone: "Asia/Kuwait",
  });

  var new_current_time = new Date(aestTime);
  var hours = new_current_time.getHours() * 3600;
  var minutes = new_current_time.getMinutes() * 60;
  var seconds = 0;
  var total_time = hours + minutes + seconds;
  //console.log('total_time',total_time);
  //console.log('new_current_time',new_current_time);

  arguments = [
    {
      $match: match_array,
    },
    {
      $project: {
        model_id: "$_id",
        model_name: "$model_name",
        model_name_ar: "$model_name_ar",
        base_fare: "$base_fare",
        min_fare: "$min_fare",
        minutes_fare: "$minutes_fare",
        cancellation_fare: "$cancellation_fare",
        below_km: "$below_km",
        above_km: "$above_km",
        minutes_fare: "$minutes_fare",
        night_charge: "$night_charge",
        night_timing_from: "$night_timing_from",
        night_timing_to: "$night_timing_to",
        night_fare: "$night_fare",
        evening_charge: "$evening_charge",
        evening_timing_from: "$evening_timing_from",
        evening_timing_to: "$evening_timing_to",
        evening_fare: "$evening_fare",
        waiting_time: "$waiting_time",
        min_km: "$min_km",
        below_above_km: "$below_above_km",
        time: "$time",
        waiting_free: "$waiting_free",
        airport_pickup_fare: "$airport_pickup_fare",
        airport_drop_fare: "$airport_drop_fare",
        hourly_fare_list: "$hourly_fare_list",
        grace_waiting_time: "$grace_waiting_time",
        grace_km: "$grace_km",
        per_min_time: "$per_min_time",
        per_minutes_fare: "$per_minutes_fare",
        surge_pricing_status: "$surge_pricing_status", //03 Feb 2020
        surge_pricing_fare_list: "$surge_pricing_fare",
        surge_pricing_manual_interval: {
          $filter: {
            input: "$surge_pricing_manual_interval",
            as: "surge_fare_manual",
            cond: {
              $and: [
                { $eq: ["$$surge_fare_manual.default", 1] },
                { $lte: ["$$surge_fare_manual.from", total_time] },
                { $gte: ["$$surge_fare_manual.to", total_time] },
              ],
            },
          },
        },
        surge_pricing_custom_interval: {
          $filter: {
            input: "$surge_pricing_custom_interval",
            as: "surge_fare_custom",
            cond: {
              $and: [
                { $eq: ["$$surge_fare_custom.default", 1] },
                { $lte: ["$$surge_fare_custom.from", total_time] },
                { $gte: ["$$surge_fare_custom.to", total_time] },
              ],
            },
          },
        },
        manual_status: {
          $filter: {
            input: "$surge_pricing_manual_interval",
            as: "manual_status",
            cond: { $eq: ["$$manual_status.default", 1] },
          },
        },
        custom_status: {
          $filter: {
            input: "$surge_pricing_custom_interval",
            as: "custom_status",
            cond: { $eq: ["$$custom_status.default", 1] },
          },
        },
        custom_status_inactive: {
          $filter: {
            input: "$surge_pricing_custom_interval",
            as: "custom_status_inactive",
            cond: { $eq: ["$$custom_status_inactive.default", 0] },
          },
        },
        surge_pricing_fare_info: {
          $filter: {
            input: "$surge_pricing_fare",
            as: "surge_fare",
            cond: { $eq: ["$$surge_fare.default", 1] },
          },
        }, //26 feb 2021
        surge_pricing_interval: "$surge_pricing_interval",
        total_drivers: "$total_drivers",
        book_later_fare: "$book_later_fare",
        book_later_display_fare: "$book_later_display_fare",
        book_later_time_interval: "$book_later_time_interval",
        priority: "$priority",
        //26 feb 2021
      },
    },
    {
      $sort: {
        priority: 1,
      },
    },
  ];
  //console.log('arguments',JSON.stringify(arguments));
  collection.aggregate(arguments).toArray(function (err, results) {
    //console.log('db err',err);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.update_estimate_fare = function (q, id, estimate_fare) {
  var deferred = q.defer();
  update_array = { approx_fare: parseFloat(estimate_fare) };
  //condition = {'_id':parseInt(id),'travel_status':3};

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);

  collection.update(
    { _id: parseInt(id) },
    { $set: update_array },
    { $upsert: false },
    function (err, data) {
      //console.log('err2',err);
      deferred.resolve(data);
      deferred.makeNodeResolver();
      data = null;
    }
  );

  return deferred.promise;
};

exports.get_airport_terminals = function (q) {
  var deferred = q.defer();
  var collection = db.get().collection(t.MDB_AIRPORTS);
  collection.find({}).toArray(function (err, results) {
    //console.log(results,'results----->')
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

// Customization
exports.get_cancellation_reasons = function (q) {
  var deferred = q.defer();
  var collection = db.get().collection(t.MDB_CANCELLATION_REASONS);
  collection.find({}).toArray(function (err, results) {
    //console.log(results,'results----->')
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};
// Customization

exports.complete_trip_available = function (q, passenger_id) {
  var deferred = q.defer();

  let match_array = {
    passengers_id: parseInt(passenger_id),
    travel_status: 1,
    driver_reply: "A",
  };

  var collection = db.get().collection(t.MDB_LOGS_COMPLETED);
  collection
    .find(match_array, { _id: 1 })
    .limit(1)
    .toArray(function (err, results) {
      deferred.resolve(results);
      deferred.makeNodeResolver();
      result = null;
    });

  return deferred.promise;
};

exports.passenger_trips_completed_without_hourly = function (
  q,
  userid,
  sort_arr
) {
  var deferred = q.defer();

  var match_array = {
    passengers_id: parseInt(userid),
    msg_status: "R",
    driver_reply: "A",
    travel_status: parseInt(1),
    hourly_booking: { $ne: 1 },
  };

  let arguments = [
    {
      $match: match_array,
    },
    {
      $lookup: {
        from: t.MDB_PASSENGERS,
        localField: "passengers_id",
        foreignField: "_id",
        as: "passengers",
      },
    },
    {
      $unwind: "$passengers",
    },
    {
      $lookup: {
        from: t.MDB_TRANS,
        localField: "_id",
        foreignField: "passengers_log_id",
        as: "trans",
      },
    },
    {
      $unwind: "$trans",
    },
    {
      $lookup: {
        from: t.MDB_PEOPLE,
        localField: "driver_id",
        foreignField: "_id",
        as: "people",
      },
    },
    {
      $unwind: "$people",
    },
    {
      $lookup: {
        from: t.MDB_TAXI,
        localField: "taxi_id",
        foreignField: "_id",
        as: "taxi",
      },
    },
    {
      $unwind: {
        path: "$taxi",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $lookup: {
        from: t.MDB_MOTOR_MODEL,
        localField: "taxi_modelid",
        foreignField: "_id",
        as: "model",
      },
    },
    {
      $unwind: {
        path: "$model",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $project: {
        pickup_time: "$pickup_time",
        pickup_longitude: "$pickup_longitude",
        pickup_latitude: "$pickup_latitude",
        drop_latitude: "$drop_latitude",
        drop_longitude: "$drop_longitude",
        travel_status: "$travel_status",
        amt: {
          $cond: [
            { $gt: ["$trans.driver_edit_status", 0] },
            { $sum: ["$trans.tripfare", "$trans.add_amt"] },
            {
              $sum: [
                "$trans.actual_paid_amt",
                "$trans.add_amt",
                "$trans.wallet_amount_used",
              ],
            },
          ],
        },
        //'pickup_time' : {'$dateToString': { 'format': "%d-%m-%Y %H:%M:%S", 'date': "$pickup_time" }},
        pickup_time: "$pickup_time",
        actual_pickup_time: "$actual_pickup_time",
        arrived_time: "$arrived_time",
        drop_time: "$drop_time",
        notes: "$notes_driver",
        distance: "$distance",
        waiting_hour: "$trans.waitingtime",
        trip_duration: {
          $divide: [
            { $subtract: ["$drop_time", "$actual_pickup_time"] },
            60000,
          ],
        },
        bookby: "$bookby",
        drivername: "$people.name",
        driver_lastname: "$people.lastname",
        passenger_name: "$passengers.name",
        passenger_id: "$passengers._id",
        passenger_profile_image: "$passengers.profile_image",
        passengers_log_id: "$_id",
        pickup_location: "$current_location",
        drop_location: { $ifNull: ["$drop_location", 0] },
        travel_status: "$travel_status",
        ratings: { $ifNull: ["$rating", 0] },
        tags: { $ifNull: ["$driver_tags", 0] },
        //'wallet_amount' : '$used_wallet_amount',
        payment_type: { $ifNull: ["$trans.payment_type", 0] },
        waiting_cost: { $ifNull: ["$trans.waiting_cost", 0] },
        pending_amt: { $ifNull: ["$trans.pending_amt", 0] },
        advance_payment: { $ifNull: ["$trans.advance_payment", 0] },
        fare: { $ifNull: ["$trans.fare", 0] },
        wallet_used_amount: { $ifNull: ["$trans.wallet_amount_used", 0] },
        add_amt: { $ifNull: ["$trans.add_amt", 0] },
        driver_edit_status: { $ifNull: ["$trans.driver_edit_status", 0] },
        actual_paid_amt: { $ifNull: ["$trans.actual_paid_amt", 0] },
        account_type: "$passenger.account_type",
        account_type_name: "$account.account_type",
        metric: { $ifNull: ["$trans.distance_unit", ""] },
        driver_reply: { $ifNull: ["$driver_reply", ""] },
        taxi_manufacturer: { $ifNull: ["$taxi.taxi_manufacturer", "-"] },
        trip_fare: { $ifNull: ["$trans.tripfare", 0] },
        pickup_location: "$current_location",
        drop_location: { $ifNull: ["$drop_location", 0] },
        passengers_log_id: "$_id",
        taxi_no: { $ifNull: ["$taxi.taxi.taxi_no", "-"] },
        model_name: { $ifNull: ["$model.model_name", ""] },
        model_id: { $ifNull: ["$taxi_modelid", ""] },
        fare_calculation_type: { $ifNull: ["$trans.fare_calculation_type", 2] },
        distance_fare: { $ifNull: ["$trans.distance_fare", 0] },
        driver_image: { $ifNull: ["$people.profile_picture", ""] },
        passenger_image: { $ifNull: ["$passenger.profile_image", ""] },
        notes: "$notes_driver",
        // Sasidharan May 9 2025
        model_image: { $ifNull: ["$model.model_image", ""] },
      },
    },
    {
      $sort: {
        _id: -1,
      },
    },
    { $skip: parseInt(sort_arr.skip) },
    { $limit: parseInt(sort_arr.limit) },
  ];
  var collection = db.get().collection(t.MDB_LOGS_COMPLETED);
  collection.aggregate(arguments).toArray(function (err, results) {
    //console.log('err',err);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.get_trip_detail_complete_table = function (q, trip_id) {
  var deferred = q.defer();

  var match_array = {
    _id: parseInt(trip_id),
  };

  let arguments = [
    {
      $match: match_array,
    },
    {
      $lookup: {
        from: t.MDB_PASSENGERS,
        localField: "passengers_id",
        foreignField: "_id",
        as: "passengers",
      },
    },
    {
      $unwind: "$passengers",
    },
    {
      $lookup: {
        from: t.MDB_TRANS,
        localField: "_id",
        foreignField: "passengers_log_id",
        as: "trans",
      },
    },
    {
      $unwind: {
        path: "$trans",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $lookup: {
        from: t.MDB_TAXI,
        localField: "taxi_id",
        foreignField: "_id",
        as: "taxi",
      },
    },
    {
      $unwind: {
        path: "$taxi",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $lookup: {
        from: t.MDB_DRIVER_INFO,
        localField: "driver_id",
        foreignField: "_id",
        as: "driverinfo",
      },
    },
    {
      $unwind: {
        path: "$driverinfo",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $lookup: {
        from: t.MDB_MOTOR_MODEL,
        localField: "taxi_modelid",
        foreignField: "_id",
        as: "model",
      },
    },
    {
      $unwind: {
        path: "$model",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $lookup: {
        from: t.MDB_PEOPLE,
        localField: "driver_id",
        foreignField: "_id",
        as: "people",
      },
    },
    {
      $unwind: {
        path: "$people",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $project: {
        amt: {
          $cond: [
            { $gt: ["$trans.driver_edit_status", 0] },
            { $sum: ["$trans.tripfare", "$trans.add_amt"] },
            {
              $sum: [
                "$trans.actual_paid_amt",
                "$trans.add_amt",
                "$trans.wallet_amount_used",
              ],
            },
          ],
        },
        pickup_time: {
          $dateToString: { format: "%d-%m-%Y %H:%M:%S", date: "$pickup_time" },
        },
        actual_pickup_time: {
          $dateToString: {
            format: "%d-%m-%Y %H:%M:%S",
            date: { $add: ["$actual_pickup_time", 3 * 60 * 60 * 1000] },
          },
        },
        drop_time: {
          $dateToString: {
            format: "%d-%M-%Y %H:%m:%S",
            date: { $add: ["$drop_time", 3 * 60 * 60 * 1000] },
          },
        },
        notes: { $ifNull: ["$notes_driver", ""] },
        distance: { $ifNull: ["$distance", 0] },
        waiting_hour: "$waitingtime",
        //'trip_duration' : {'$divide':[{'$subtract':['$drop_time','$actual_pickup_time']},60000]},
        wallet_amount: "$used_wallet_amount",
        waiting_cost: { $ifNull: ["$trans.waiting_cost", 0] },
        fare: { $ifNull: ["$trans.fare", 0] },
        wallet_used_amount: { $ifNull: ["$trans.wallet_amount_used", 0] },
        add_amt: { $ifNull: ["$trans.add_amt", 0] },
        driver_edit_status: { $ifNull: ["$trans.driver_edit_status", 0] },
        actual_paid_amt: { $ifNull: ["$trans.actual_paid_amt", 0] },
        tripfare: { $ifNull: ["$trans.tripfare", 0] },
        o_fare: {
          $cond: [
            { $gt: ["$trans.driver_edit_status", 0] },
            {
              $sum: [
                "$trans.fare",
                "$trans.wallet_amount_used",
                "$trans.add_amt",
              ],
            },
            { $sum: ["$trans.actual_paid_amt", "$trans.wallet_amount_used"] },
          ],
        },
        trip_duration: {
          $cond: [
            { $eq: ["$trans.drop_time", true] },
            {
              $divide: [
                { $subtract: ["$drop_time", "$actual_pickup_time"] },
                60000,
              ],
            },
            0,
          ],
        },
        coordinates: "$driverinfo.loc.coordinates",
        driver_latitude: { $arrayElemAt: ["$driverinfo.loc.coordinates", 1] },
        driver_longitude: { $arrayElemAt: ["$driverinfo.loc.coordinates", 0] },
        bearing: "$driverinfo.bearing",
        accuracy: "$driverinfo.accuracy",
        driver_status: "$driverinfo.status",
        amt: { $sum: "$trans.amt" },
        trans_id: { $ifNull: ["$trans._id", ""] },
        airport_pickup: { $ifNull: ["$airport_pickup", ""] },
        airport_type: { $ifNull: ["$airport_type", 0] },
        trip_minutes: { $ifNull: ["$trans.trip_minutes", 0] },
        waiting_time: { $ifNull: ["$trans.waiting_time", "00:00:00"] },
        minutes_fare: { $ifNull: ["$trans.minutes_fare", 0] },
        actual_distance: { $ifNull: ["$trans.distance", 0] },
        metric: { $ifNull: ["$trans.distance_unit", 0] },
        job_ref: { $ifNull: ["$trans.job_ref", 0] },
        payment_type: { $ifNull: ["$trans.payment_type", 0] },
        pay_mod_id: { $ifNull: ["$trans.payment_type", 0] },
        passengers_id: "$passengers_id",
        passengers_log_id: "$_id",
        current_location: "$current_location",
        no_passengers: "$no_passengers",
        pickup_time: "$pickup_time",
        actual_pickup_time: { $ifNull: ["$actual_pickup_time", ""] },
        drop_time: { $ifNull: ["$drop_time", ""] },
        arrived_time: { $ifNull: ["$arrived_time", ""] },
        rating: "$rating",
        notes_driver: { $ifNull: ["$notes_driver", ""] },
        travel_status: "$travel_status",
        driver_reply: "$driver_reply",
        city_id: "$search_city",
        pickup_location: "$current_location",
        pickup_latitude: "$pickup_latitude",
        pickup_longitude: "$pickup_longitude",
        drop_location: "$drop_location",
        drop_latitude: "$drop_latitude",
        drop_longitude: "$drop_longitude",
        taxi_modelid: "$taxi_modelid",
        taxi_model_name: "$model.model_name",
        model_image: "$model.model_image",
        model_image_new: "$model.model_image_new",
        time_to_reach_passen: { $ifNull: ["$time_to_reach_passen", "0"] },
        notification_status: "$notification_status",
        used_wallet_amount: "$used_wallet_amount",
        bookby: "$bookby",
        passenger_name: "$passengers.name",
        passenger_phone: "$passengers.phone",
        passenger_image: "$passengers.profile_image",
        lateral_end_date: "$passengers.lateral_end_date",
        passenger_wallet_amount: { $ifNull: ["$passengers.wallet_amount", 0] },
        driver_name: { $ifNull: ["$people.name", ""] },
        driver_lastname: { $ifNull: ["$people.lastname", ""] },
        driver_image: { $ifNull: ["$people.profile_picture", ""] },
        driver_id: { $ifNull: ["$people._id", ""] },
        driver_phone: { $ifNull: ["$people.phone", ""] },
        driver_login_status: { $ifNull: ["$people.login_status", ""] },
        taxi_no: "$taxi.taxi_no",
        taxi_number: "$taxi.taxi_no",
        taxi_speed: "$taxi.taxi_speed",
        taxi_min_speed: "$taxi.taxi_min_speed",
        taxi_id: "$taxi._id",
        taxi_manufacturer: "$taxi.taxi_manufacturer",
        taxi_colour: "$taxi.taxi_colour",
        drop_location: "$drop_location",
        book_tag: "$book_tag",
        pas_pay_by: "$passengers.pay_by",
        pas_pay_lmt: "$passengers.trip_amt_limit",
        pass_id_image: "$passengers.id_image",
        tags: "$driver_tags",
        hourly_booking: { $ifNull: ["$hourly_booking", 0] },
        hourly_booking_hrs: { $ifNull: ["$hourly_booking_hrs", 0] },
        ratings: "$rating",
        fare_calculation_type: { $ifNull: ["$trans.fare_calculation_type", 0] },
        distance_fare: { $ifNull: ["$trans.distance_fare", 0] },
        total_waiting_time: { $ifNull: ["$total_waiting_time", 0] },
        start_waiting_time: { $ifNull: ["$start_waiting_time", 0] },
        start_timer: { $ifNull: ["$start_timer", ""] },
        end_timer: { $ifNull: ["$end_timer", ""] },
        waiting_start_status: { $ifNull: ["$waiting_start_status", 2] },
        fixed_estimate_fare_type: { $ifNull: ["$fixed_estimate_fare_type", 0] },
        fixed_estimate_result: "$fixed_estimate_result",
        nightfare_applicable: { $ifNull: ["$trans.nightfare_applicable", 0] },
        nightfare: { $ifNull: ["$trans.nightfare", 0] },
        eveningfare_applicable: {
          $ifNull: ["$trans.eveningfare_applicable", 0],
        },
        eveningfare: { $ifNull: ["$trans.eveningfare", 0] },
        applied_corporate_promocode: {
          $ifNull: ["$applied_corporate_promocode", 0],
        },
      },
    },
    {
      $sort: {
        _id: -1,
      },
    },
  ];
  var collection = db.get().collection(t.MDB_LOGS_COMPLETED);
  collection.aggregate(arguments).toArray(function (err, results) {
    //console.log('err trip',err);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.recent_trip_places_complete = function (
  q,
  passenger_id,
  place_type,
  pending_fav
) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_LOGS_COMPLETED);

  var match_array = {};
  var project = {};

  if (place_type == 0) {
    match_array = {
      passengers_id: parseInt(passenger_id),
      //'travel_status' : parseInt(1),
      pickup_latitude: { $ne: 0 },
      pickup_longitude: { $ne: 0 },
      current_location: { $ne: "" },
    };

    project = {
      log_id: "$_id",
      //'location_count' : '$current_location',
      p_favourite_place: "$current_location",
      p_fav_latitude: "$pickup_latitude",
      p_fav_longtitute: "$pickup_longitude",
      fav_loction_type: "$current_location",
    };
  } else {
    match_array = {
      passengers_id: parseInt(passenger_id),
      //'travel_status' : parseInt(1),
      drop_latitude: { $ne: 0 },
      drop_longitude: { $ne: 0 },
      drop_location: { $ne: "" },
    };

    project = {
      log_id: "$_id",
      //'location_count' : '$current_location',
      p_favourite_place: "$drop_location",
      p_fav_latitude: "$drop_latitude",
      p_fav_longtitute: "$drop_longitude",
      fav_loction_type: "$current_location",
    };
  }

  var arguments = [
    {
      $match: match_array,
    },
    { $project: project },
    {
      $group: {
        _id: { p_favourite_place: "$p_favourite_place" },
        log_id: { $first: "$log_id" },
        lat: { $first: "$p_fav_latitude" },
        lng: { $first: "$p_fav_longtitute" },
        loc: { $first: "$p_favourite_place" },
      },
    },
    { $sort: { log_id: -1 } },
    { $limit: parseInt(pending_fav) },
  ];

  //console.log(match_array);

  collection.aggregate(arguments).toArray(function (err, results) {
    //console.log(results);

    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

////////////////////////// GrandLimo CR //////////////////////////
exports.get_card_list = function (q, passenger_id) {
  try {
    var deferred = q.defer();

    var match_array = {
      _id: parseInt(passenger_id),
    };

    var collection = db.get().collection(t.MDB_PASSENGERS);

    var arguments = [
      { $match: match_array },
      {
        $project: {
          passenger_id: "$passenger_id",
          creditcard_details: "$creditcard_details",
        },
      },
    ];
    collection.aggregate(arguments).toArray(function (err, results) {
      deferred.resolve(results);
      deferred.makeNodeResolver();
      result = null;
    });
  } catch (err) {
    console.log(err);
  }

  return deferred.promise;
};

exports.get_card_detail = function (q, passenger_id, passenger_cardid) {
  try {
    var deferred = q.defer();
    var match_array = {
      _id: parseInt(passenger_id),
      "creditcard_details.passenger_cardid": parseInt(passenger_cardid),
    };

    var collection = db.get().collection(t.MDB_PASSENGERS);

    var arguments = [
      { $unwind: "$creditcard_details" },
      { $match: match_array },
      {
        $project: {
          passenger_cardid: "$creditcard_details.passenger_cardid",
          creditcard_no: "$creditcard_details.creditcard_no",
          card_holder_name: "$creditcard_details.card_holder_name",
          card_nick_name: "$creditcard_details.card_nick_name",
          expdatemonth: "$creditcard_details.expdatemonth",
          expdateyear: "$creditcard_details.expdateyear",
          default_card: "$creditcard_details.default_card",
          card_type_description: "$creditcard_details.card_type_description",
        },
      },
    ];

    collection.aggregate(arguments).toArray(function (err, results) {
      deferred.resolve(results);
      deferred.makeNodeResolver();
      result = null;
    });
  } catch (err) {
    console.log(err);
  }
  return deferred.promise;
};

exports.delete_card = function (
  q,
  passenger_id,
  passenger_cardid,
  update_array
) {
  //console.log(update_array);
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERS);

  collection.update(
    { _id: parseInt(passenger_id) },
    update_array,
    { $upsert: false },
    function (err, data) {
      deferred.resolve(data);
      deferred.makeNodeResolver();
      data = null;
    }
  );
  return deferred.promise;
};

exports.check_airport_zone = function (q, longitude, latitude) {
  var deferred = q.defer();

  let match_array = {
    is_airport: parseInt(1),
    loc: {
      $near: {
        $geometry: { type: "Point", coordinates: [longitude, latitude] },
        //$minDistance: 1000,
        $maxDistance: 1000,
      },
    },
  };

  var collection = db.get().collection(t.MDB_ZONES);
  collection
    .find(match_array, { _id: 1 })
    .limit(1)
    .toArray(function (err, results) {
      deferred.resolve(results);
      deferred.makeNodeResolver();
      result = null;
    });

  return deferred.promise;
};

exports.check_zone_service = function (q, longitude, latitude) {
  var deferred = q.defer();

  let match_array = {
    is_airport: parseInt(0),
    loc: {
      $near: {
        $geometry: {
          type: "Point",
          coordinates: [parseFloat(longitude), parseFloat(latitude)],
        },
        //$minDistance: 1000,
        $maxDistance: 1000,
      },
    },
  };

  var collection = db.get().collection(t.MDB_ZONES);
  collection
    .find(match_array, { _id: 1 })
    .limit(1)
    .toArray(function (err, results) {
      deferred.resolve(results);
      deferred.makeNodeResolver();
      result = null;
    });

  return deferred.promise;
};

exports.search_zone_service = function (q, longitude, latitude, is_drop) {
  var deferred = q.defer();

  let match_array = {
    is_airport: parseInt(0),
    status: "A",
    loc: {
      $near: {
        $geometry: {
          type: "Point",
          coordinates: [parseFloat(longitude), parseFloat(latitude)],
        },
        //$minDistance: 1000,
        $maxDistance: 1000,
      },
    },
  };

  if (is_drop) {
    match_array.is_drop = parseInt(1);
  } else {
    match_array.is_pickup = parseInt(1);
  }

  var collection = db.get().collection(t.MDB_ZONES);
  collection
    .find(match_array, { _id: 1 })
    .limit(1)
    .toArray(function (err, results) {
      deferred.resolve(results);
      deferred.makeNodeResolver();
      result = null;
    });

  return deferred.promise;
};

// exports.search_zone_service = function (q, longitude, latitude, is_drop) {
//   var deferred = q.defer();

//   console.error("longitude:", longitude, "latitude:", latitude);

//   match_array = {
//     is_airport: 0,
//     status: "A",
//   };
//   if (is_drop) {
//     match_array.is_drop = 1;
//   } else {
//     match_array.is_pickup = 1;
//   }

//   match_array.loc = {
//     $geoIntersects: {
//       $geometry: {
//         type: "Point",
//         coordinates: [parseFloat(longitude), parseFloat(latitude)],
//       },
//     },
//   };

//   console.error("match_array:", match_array);

//   var collection = db.get().collection(t.MDB_ZONES);
//   collection
//     .find(match_array, { _id: 1 })
//     .limit(1)
//     .toArray(function (err, results) {
//       if (err) console.error(err);
//       deferred.resolve(results);
//     });

//   return deferred.promise;
// };

exports.get_zone_fare = function (q, zone_id, model_id) {
  var deferred = q.defer();

  let match_array = {
    zone_id: parseInt(zone_id),
    status: "A",
  };

  if (model_id != "") {
    match_array.model_id = parseInt(model_id);
  }
  console.error("match_array : ", match_array);
  var collection = db.get().collection(t.MDB_ZONE_FARE);
  collection
    .find(match_array, { _id: 1, zone_fixed_fare: 1 })
    .toArray(function (err, results) {
      deferred.resolve(results);
      deferred.makeNodeResolver();
      result = null;
    });
  return deferred.promise;
};

/* Sasidharan july 13 2022 */
exports.get_promocodes_list = function (q, userid, passengerDetails = {}) {
  var deferred = q.defer();

  var match_array = {
    corporate_promocode: { $ne: 1 },

    /* Sasidharan Feb 10 2022 */
    hide_from_passsenger_app: { $ne: 1 },

    company_id: parseInt(1),
    auto_generated_promocode: { $ne: parseInt(1) },
    promocode_status: { $ne: "D" },
  };

  /* Sasidharan july 13 2022 */
  if (typeof passengerDetails.created_date != "undefined") {
    let register_promocode_date = global.settings.register_promocode.getTime();
    // let passenger_registered_date = passengerDetails.created_date.getTime();

    let passenger_registered_date = "";
    try {
      passenger_registered_date = passengerDetails.created_date.getTime();
    } catch (err) {
      passenger_registered_date = new Date(
        passengerDetails.created_date
      ).getTime();
    }

    if (passenger_registered_date < register_promocode_date) {
      match_array["register_promocode"] = { $ne: 1 };
    }
  } else {
    match_array["register_promocode"] = { $ne: 1 };
  }

  let arguments = [
    {
      $lookup: {
        from: t.MDB_COUPON_PACKAGE,
        localField: "package",
        foreignField: "_id",
        as: "coupon",
      },
    },
    { $unwind: "$coupon" },
    { $match: match_array },
    {
      $project: {
        _id: "$_id",
        promo_code: "$promocode",
        passenger_commission: "$coupon.passenger_commission",
        promocode_title: "$coupon.coupon_package_name",
        promocode_description: "$coupon.coupon_package_description",
        promocode_title_ar: "$coupon.coupon_package_name_ar",
        promocode_description_ar: "$coupon.coupon_package_description_ar",
        expiry_date: "$expire_date",
        customer_number: "$customer_number",
        total_used: "$total_used",
        total_applied: "$total_applied",
        promo_limit: "$promo_limit",
      },
    },
    { $sort: { _id: -1 } },
  ];
  var collection = db.get().collection(t.MDB_PASSENGERS_PROMO);
  collection.aggregate(arguments).toArray(function (err, results) {
    //console.log('err',err);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

//07 Aug 2020
exports.get_banner_notifications = function (q, passenger_id) {
  var deferred = q.defer();

  var match_array = {
    sent_status: { $ne: 0 },
    notification_type: parseInt(5),
    start_date: {
      $lte: new Date(),
    },
    expire_date: {
      $gte: new Date(),
    },
  };

  let arguments = [
    { $match: match_array },
    {
      $project: {
        title: { $ifNull: ["$title", ""] },
        sub_title: { $ifNull: ["$sub_title", ""] },
        message: "$message",
        image: "$image",
        banner_image: { $ifNull: ["$banner_image", ""] },
        created_date: "$created_date",
        color_code: { $ifNull: ["$color_code", ""] },
        image_only: { $ifNull: ["$image_only", 0] },
      },
    },
    { $sort: { _id: -1 } },
  ];
  var collection = db.get().collection(t.MDB_NOTIFICATIONS);
  collection.aggregate(arguments).toArray(function (err, results) {
    //console.log('err',err);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.insert_track_logs = function (q, insertArray) {
  var deferred = q.defer();
  console.log("herererer");
  var collection = db.get().collection(t.MDB_PASSENGER_TRACK_LOGS);
  collection.insert(insertArray, function (err, results) {
    console.log("insert err", err);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

exports.check_trip_request_exists = function (q, driver_id) {
  var deferred = q.defer();
  var up_time_milli = 300 * 1000;
  arguments = [
    {
      $match: {
        selected_driver: parseInt(driver_id),
        status: { $in: [1, 3, 0] },
      },
    },
    {
      $project: {
        _id: 1,
        updatetime_difference: { $subtract: [new Date(), "$createdate"] },
      },
    },
    {
      $match: {
        updatetime_difference: { $lte: parseInt(up_time_milli) },
      },
    },
  ];

  var collection = db.get().collection(t.MDB_DRIVER_REQUEST_DETAILS);
  collection.aggregate(arguments).toArray(function (err, results) {
    console.log("check_trip_request_exists results", results);
    deferred.resolve(results);
    deferred.makeNodeResolver();
    result = null;
  });

  return deferred.promise;
};

/* Sasi */
exports.get_passenger_group_details = function (q, passenger_id) {
  var deferred = q.defer();
  let filter = {
    members: parseInt(passenger_id),
  };
  var collection = db.get().collection(t.MDB_CORPORATE_GROUP_NEW);
  collection.find(filter, {}).toArray(function (err, results) {
    deferred.resolve(results);
    deferred.makeNodeResolver();
    results = null;
  });
  return deferred.promise;
};

/* Sasidharan july 14 2022 */
exports.getPassengerRegistrationDate = async (passengerId) => {
  try {
    let passengerCollection = await db.get().collection(t.MDB_PASSENGERS);
    let passengerDetails = await passengerCollection
      .find(
        { _id: parseInt(passengerId) },
        {
          projection: {
            created_date: 1,
          },
        }
      )
      .toArray();
    return passengerDetails;
  } catch (err) {
    console.log(err);
    return [];
  }
};

/* Sasidharan july 16 2022 */
exports.getPromocodeUsedCount = async (promocode, passengerId) => {
  try {
    let passengerLogCollection = await db
      .get()
      .collection(t.MDB_LOGS_COMPLETED);
    let filter = {
      promocode: promocode,
      passengers_id: parseInt(passengerId),
      travel_status: 1,
    };
    let totalTrips = await passengerLogCollection.count(filter);
    return totalTrips;
  } catch (err) {
    console.log(err);
    return 0;
  }
};

/* Sasidharan Nov 19 2022 */
exports.checkIfPromocodeUsedByAnathorUser = async (promocode, passengerId) => {
  let passengerAddedPromocodeCollection = await db
    .get()
    .collection(t.MDB_PASSENGERS_ADDED_PROMO);
  let filter = {
    promo_code: promocode,
  };
  let response = await passengerAddedPromocodeCollection
    .find(filter)
    .sort({ _id: -1 })
    .limit(1)
    .toArray();
  if (
    response.length > 0 &&
    typeof response[0]["passenger_id"] != "undefined" &&
    response[0]["passenger_id"] != passengerId
  ) {
    return true;
  }
  return false;
};

//ramya jan 2026
exports.get_discount_percentage = async (promo_code) => {
  try {
    let passengersPromoCol = await db.get().collection(t.MDB_PASSENGERS_PROMO);
    let couponPackageCol = await db.get().collection(t.MDB_COUPON_PACKAGE);

    const promoDoc = await passengersPromoCol.findOne(
      { promocode: promo_code },
      { projection: { package: 1 } }
    );
    console.error("promoDoc : ", promoDoc);
    if (!promoDoc || !promoDoc.package) {
      return 0;
    }

    const packageDoc = await couponPackageCol.findOne(
      { _id: promoDoc.package },
      { projection: { passenger_commission: 1 } }
    );
    console.error("packageDoc : ", packageDoc);
    if (!packageDoc || typeof packageDoc.passenger_commission === "undefined") {
      return 0;
    }
    console.error("passenger_commission: : ", packageDoc.passenger_commission);
    return packageDoc.passenger_commission;
  } catch (error) {
    console.error("get_discount_percentage error:", error);
    return 0;
  }
};

exports.update_payentry = function (q, updateArray, trip_id) {
  var deferred = q.defer();

  /* Sasidharan Nov 28 2022 */
  let corporateAmount =
    typeof updateArray.corporate_amount != "undefined"
      ? updateArray.corporate_amount
      : 0;

  var update_array = {
    fare_detail: [
      { key: "1", value: updateArray.cash_pay },
      { key: "6", value: updateArray.card_pay },
      { key: "3", value: updateArray.knet_pay },
      { key: "additional amount", value: updateArray.add_amt },
      { key: "wallet", value: updateArray.wallet_pay },
      { key: "pending", value: updateArray.pending_pay },
      { key: "fare_note", value: updateArray.fare_note },
      { key: "discount_wallet", value: updateArray.discount_wallet_pay },

      /* Sasidharan Nov 28 2022 */
      { key: "corporate_amount", value: corporateAmount },
    ],
  };

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);

  collection.update(
    { _id: parseInt(trip_id) },
    { $set: update_array },
    { $upsert: true },
    function (err, data) {
      console.log("err2", err);
      deferred.resolve(data);
      deferred.makeNodeResolver();
      data = null;
    }
  );
  return deferred.promise;
};

// Sasidharan May 26 2023
exports.getPassengerWalletLog = async function (q, userid, start, limit) {
  var deferred = q.defer();

  let filter = {
    passenger_id: parseInt(userid),
  };
  let project = {
    change_amount: "$change_amount",
    current_wallet_amount: "$wallet_amount",
    created_date: "$created_date",
    created_by: "$created_by",
    recharge_type: "$recharge_type",
    transaction_id: "$transaction_id",
    trip_id: "$trip_id",
  };
  var collection = db.get().collection(t.MDB_PASSENGER_WALLET_LOG);
  let response = await collection
    .find(filter)
    .project(project)
    .sort({ created_date: -1 })
    .skip(parseInt(start))
    .limit(parseInt(limit))
    .toArray();

  deferred.resolve(response);
  deferred.makeNodeResolver();
  return deferred.promise;
};

exports.getPassengerWalletLogCreditDbeit = async function (
  q,
  userid,
  start,
  limit,
  transaction_type
) {
  var deferred = q.defer();

  let filter = {
    passenger_id: parseInt(userid),
    initiated_payment: { $ne: 1 }, // Always omit initiated_payment = 1
  };

  // Transaction type filtering
  if (parseInt(transaction_type) === 1) {
    // CREDIT → trip_id empty or null
    filter.$or = [
      { trip_id: { $exists: false } },
      { trip_id: "" },
      { trip_id: 0 },
      { trip_id: null },
    ];
  } else if (parseInt(transaction_type) === 2) {
    // DEBIT → trip_id not empty
    filter.trip_id = { $nin: ["", null, 0] };
  }
  // if transaction_type = 0 → no extra filter (fetch all)

  let project = {
    change_amount: 1,
    wallet_amount: 1,
    created_date: 1,
    created_by: 1,
    recharge_type: 1,
    transaction_id: 1,
    trip_id: 1,
    payment_source: 1,
    card_details: 1,
    redeem_points: 1,
    discount_wallet_status: 1,
  };

  var collection = db.get().collection(t.MDB_PASSENGER_WALLET_LOG);

  let response = await collection
    .find(filter)
    .project(project)
    .sort({ created_date: -1 })
    .skip(parseInt(start) * parseInt(limit))
    .limit(parseInt(limit))
    .toArray();

  deferred.resolve(response);
  deferred.makeNodeResolver();
  return deferred.promise;
};

exports.insert_trip_complete_log = async (tripDetails) => {
  try {
    let logCollection = db.get().collection("test_trip_complete_log");
    let response = await logCollection.insert(tripDetails);
    if (
      typeof response != "undefined" &&
      typeof response.insertedCount != "undefined"
    )
      return true;
    else return false;
  } catch (err) {
    console.log(err);
    return false;
  }
};

/* Sasidharan Aug 31 2024 */
exports.insert_passenger_account_delete_request = async (accountDetails) => {
  try {
    let logCollection = db
      .get()
      .collection("passenger_account_delete_requests");
    let response = await logCollection.insert(accountDetails);
    if (
      typeof response != "undefined" &&
      typeof response.insertedCount != "undefined"
    ) {
      return true;
    } else {
      return false;
    }
  } catch (err) {
    console.log(err);
    return false;
  }
};
exports.is_customer_already_requested = async (passengerId) => {
  try {
    let logCollection = db
      .get()
      .collection("passenger_account_delete_requests");
    let response = await logCollection.count({ passengerId: +passengerId });
    return response && response > 0 ? true : false;
  } catch (err) {
    console.error(err);
    return false;
  }
};
exports.is_account_already_deleted = async (passengerId) => {
  try {
    let logCollection = db.get().collection(t.MDB_PASSENGERS);
    let response = await logCollection.count({
      _id: +passengerId,
      isDeleted: 1,
    });
    return response && response > 0 ? true : false;
  } catch (err) {
    console.error(err);
    return false;
  }
};
exports.update_delete_request_on_passenger = async (passengerId) => {
  try {
    let logCollection = db.get().collection(t.MDB_PASSENGERS);
    let response = await logCollection.update(
      {
        _id: +passengerId,
      },
      { $set: { isRequestedForAccountDelete: 1 } }
    );
    return response ? true : false;
  } catch (err) {
    console.error(err);
    return false;
  }
};

exports.update_new_valid_device_token = async (
  passengerId,
  newDeviceToken,
  device_type
) => {
  try {
    let passengerCollection = db.get().collection(t.MDB_PASSENGERS);

    let passenger = await passengerCollection.findOne({ _id: +passengerId });
    console.error("passenger : ", passenger);
    if (!passenger) {
      console.log(`Passenger with ID ${passengerId} not found`);
      return false;
    }

    let response = await passengerCollection.updateOne(
      { _id: +passengerId },
      { $set: { device_token: newDeviceToken, device_type: device_type } }
    );
    console.error("response : ", response);
    return response.matchedCount > 0 || response.modifiedCount > 0;
  } catch (err) {
    console.error(err);
    return false;
  }
};
