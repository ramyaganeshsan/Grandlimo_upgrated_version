var db = require("../config/dbconnection");
var t = require("../config/table_config.json");
var md5 = require("md5");

exports.getSiteInfo = async function (q) {
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
      },
    },
  ];
    try {
    const results = await collection.aggregate(arguments).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.cmsPages = async function (q) {
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
    try {
    const results = await collection.aggregate(arguments).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.company_model_details = async function (q) {
  var deferred = q.defer();
  var collection = db.get().collection(t.MDB_MOTOR_MODEL);
  var arguments = [
    //{'$unwind':'$hourly_fare_list'},
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
      },
    },
  ];
    try {
    const results = await collection.aggregate(arguments).toArray();
        //console.log('err',result);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }
  return deferred.promise;
};

exports.SiteSettings = async function (q) {
  var deferred = q.defer();
  var collection = db.get().collection(t.MDB_SITEINFO);
    try {
    const results = await collection.find({ _id: parseInt(1) }).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.getCompanyKey = async function (q, key) {
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
    try {
    const results = await collection.aggregate(arguments).toArray();
        //console.log('company key err',err);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.check_phone_passengers = async function (q, phone) {
  var deferred = q.defer();

  let match_array = {
    phone: phone,
  };

  var collection = db.get().collection(t.MDB_PASSENGERS);
    try {
    const results = await collection
    .find(match_array, { phone: 1, user_status: 1 }).toArray();
          deferred.resolve(results);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_passenger_by_phone = async function (q, phone, update_array) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERS);

  
    try {
    const data = await collection.updateOne(
    { phone: phone },
    { $set: update_array },
    { upsert: false });
          deferred.resolve(data);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_passenger_by_id = async function (q, id, update_array) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERS);

  
    try {
    const data = await collection.updateOne(
    { _id: parseInt(id) },
    { $set: update_array },
    { upsert: false });
          deferred.resolve(data);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.get_auto_id = async function (q, table_name) {
  var deferred = q.defer();

  var collection = db.get().collection(table_name);
    try {
    const results = await collection
    .find({}, { _id: -1 })
    .sort({ _id: -1 })
    .limit(1).toArray();
          if (results.length > 0) {
            results = results;
          } else {
            results = [{ _id: 0 }];
          }
          deferred.resolve(results);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.insert_passenger_details = async function (q, insertArray) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERS);
  
    try {
    const results = await collection.insertOne(insertArray);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.passenger_profile_by_phone = async function (q, phone) {
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
      },
    },
  ];
    try {
    const results = await collection.aggregate(arguments).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.passenger_profile_by_id = async function (q, id) {
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
        //'devicetype': { $ifNull : ['$devicetype',0]},
        devicetype: { $ifNull: ["$device_type", 0] },
        child_exist: { $ifNull: ["$child_exist", 0] },
        allow_creditcard: { $ifNull: ["$allow_creditcard", 0] },
        login_status: { $ifNull: ["$login_status", 0] },
        profile_image: { $ifNull: ["$profile_image", 0] },
        wallet_amount: { $ifNull: ["$wallet_amount", 0] },
        wallet_block: { $ifNull: ["$wallet_block", 0] },
        vip_user: { $ifNull: ["$vip_user", 0] },
        notes: { $ifNull: ["$notes", 0] },
        lang: { $ifNull: ["$lang", "en"] },
        app_version: { $ifNull: ["$app_version", 0] },
        //'last_wallet_update': { $ifNull : ['$last_wallet_update',0]},
        reward_points: { $ifNull: ["$reward_points", 0] },
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
      },
    },
  ];
    try {
    const results = await collection.aggregate(arguments).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.passenger_verify_otp = async function (q, phone, otp) {
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
      },
    },
  ];
    try {
    const results = await collection.aggregate(arguments).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.passenger_email_exists = async function (q, email) {
  var deferred = q.defer();

  let match_array = {
    email: email,
  };

  var collection = db.get().collection(t.MDB_PASSENGERS);
    try {
    const results = await collection.countDocuments(match_array);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.passenger_email_exists_id = async function (q, id, email) {
  var deferred = q.defer();

  let match_array = {
    email: email,
    _id: { $ne: parseInt(id) },
  };

  var collection = db.get().collection(t.MDB_PASSENGERS);
    try {
    const results = await collection.countDocuments(match_array);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.passenger_pending_list = async function (q, passenger_id, timerange) {
  try {
    var deferred = q.defer();

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
          taxi_no: { $ifNull: ["$taxi.taxi_no", "-"] },
          taxi_manufacturer: { $ifNull: ["$taxi.taxi_manufacturer", "-"] },
          distance: "$distance",
          account_type: "$passenger.account_type",
          account_type_name: "$account.account_type",
          metric: "$trans.distance_unit",
          drivername: { $ifNull: ["$people.name", ""] },
          driverlastname: { $ifNull: ["$people.lastname", ""] },
          confirm_flag: { $ifNull: ["$confirm_flag", 0] },
          now_after: { $ifNull: ["$now_after", 0] },
        },
      },
      { $sort: { _id: -1 } },
    ];
        try {
      const results = await collection.aggregate(arguments).toArray();
            //console.log('company key err',err);
            deferred.resolve(results);
    
    } catch (err) {
      console.log(err);
      throw err;
    }
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.passenger_current_trip = async function (q, passenger_id) {
  var deferred = q.defer();

  let match_array = {
    passengers_id: parseInt(passenger_id),
    travel_status: {
      $in: [parseInt(5), parseInt(3), parseInt(2), parseInt(9)],
    },
    driver_reply: "A",
  };

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);
    try {
    const results = await collection.find(match_array, {}).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.get_passenger_added_promocode = async function (q, passenger_id) {
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
    { $match: match_array },
    {
      $project: {
        promo_code: "$promo_code",
        passenger_commission: "$coupon.passenger_commission",
        expiry_date: "$promo.expire_date",
        total_used: "$promo.total_used",
        total_applied: "$promo.total_applied",
        promo_limit: "$promo.promo_limit",
      },
    },
  ];
    try {
    const results = await collection.aggregate(arguments).toArray();
        //console.log('company key err',err);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.get_favourite_list = async function (q, passenger_id) {
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
        try {
      const results = await collection.aggregate(arguments).toArray();
            //console.log('company key err',err);
            deferred.resolve(results);
    
    } catch (err) {
      console.log(err);
      throw err;
    }
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.add_favourite = async function (q, insertArray) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERS_FAVOURITES);
  
    try {
    const results = await collection.insertOne(insertArray);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.check_fav_exists = async function (q, input_array) {
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

  var collection = db.get().collection(t.MDB_PASSENGERS_FAVOURITES);
    try {
    const results = await collection.find(match_array, {}).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.check_fav_type_exists = async function (q, input_array) {
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
    try {
    const results = await collection.find(match_array, {}).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_favourites = async function (q, id, update_array) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERS_FAVOURITES);

  
    try {
    const data = await collection.updateOne(
    { _id: parseInt(id) },
    { $set: update_array },
    { upsert: false });
          deferred.resolve(data);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.delete_favourites = async function (q, id) {
  var deferred = q.defer();

  let match_array = {
    _id: parseInt(id),
  };

  var collection = db.get().collection(t.MDB_PASSENGERS_FAVOURITES);
  
    try {
    const results = await collection.deleteOne(match_array);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.check_fav_exists_id = async function (q, id) {
  var deferred = q.defer();

  let match_array = {
    _id: parseInt(id),
  };

  var collection = db.get().collection(t.MDB_PASSENGERS_FAVOURITES);
    try {
    const results = await collection.find(match_array, {}).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.nearest_drivers = async function (q, model_id, latitude, longitude) {
  try {
    var deferred = q.defer();
    var up_time_milli = global.settings.location_update_seconds * 1000;

    var match1 = {
      "people.login_status": "S",
      status: "F",
      shift_status: "IN",
    };

    var match2 = {
      //'tmap.mapping_startdate' : {'$gte': new MongoDate(strtotime($start_time))),
      //'tmap.mapping_enddate' : {'$lte':new MongoDate(strtotime($end_time))),
      "tmap.mapping_status": "A",
      updatetime_difference: { $lte: parseInt(up_time_milli) },
      "taxi.taxi_model": parseInt(model_id),
    };

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
            d_photo: "$people.profile_picture",
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
            taxi_image: "$taxi.taxi_image",
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
        try {
      const results = await collection.aggregate(arguments).toArray();
            //console.log('company key err',err);
            //console.log('search results',results);
            deferred.resolve(results);
    
    } catch (err) {
      console.log(err);
      throw err;
    }
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.model_fare_details = async function (q, model_id) {
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
        model_fare_image: "$model_fare_image",
      },
    },
  ];
    try {
    const results = await collection.aggregate(arguments).toArray();
        //console.log('err',result);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }
  return deferred.promise;
};

exports.passenger_current_trips = async function (q, id) {
  var deferred = q.defer();

  let match_array = {
    passengers_id: parseInt(id),
    travel_status: { $in: [parseInt(2), parseInt(3), parseInt(9)] },
  };

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);
    try {
    const results = await collection.find(match_array, {}).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.currentday_booking_count = async function (q, driver_id, time_range) {
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
    try {
    const results = await collection.aggregate(arguments).toArray();
        console.log("results", results);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.promocode_details = async function (q, promocode) {
  var deferred = q.defer();

  //~ let match_array = {
  //~ "promocode":promocode,
  //~ "promo_type":'1'
  //~ };

  let match_array = {
    promocode: promocode,
  };

  var collection = db.get().collection(t.MDB_PASSENGER_PROMO);
    try {
    const results = await collection
    .find(match_array, {
      promocode: 1,
      promo_discount: 1,
      promo_used: 1,
      start_date: 1,
      expire_date: 1,
      promo_limit: 1,
      total_applied: 1,
      total_used: 1,
    }).toArray();
          deferred.resolve(results);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.promocode_details_by_phone = async function (q, promocode, phone) {
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

  var collection = db.get().collection(t.MDB_PASSENGER_PROMO);
    try {
    const results = await collection
    .find(match_array, {
      promocode: 1,
      promo_discount: 1,
      promo_used: 1,
      start_date: 1,
      expire_date: 1,
      promo_limit: 1,
      total_applied: 1,
      total_used: 1,
    }).toArray();
          deferred.resolve(results);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.promocode_count = async function (q, promocode, passengers_id) {
  var deferred = q.defer();

  let match_array = {
    promocode: promocode,
    passengers_id: parseInt(passengers_id),
    travel_status: parseInt(1),
  };
  console.log(match_array);

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);
    try {
    const results = await collection
    .find(match_array, { promocode: 1 }).toArray();
          deferred.resolve(results);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.check_passenger_trips = async function (q, id) {
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
    try {
    const results = await collection.find(match_array, {}).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.city_details_by_name = async function (q, city_name) {
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
    try {
    const results = await collection.aggregate(arguments).toArray();
        console.log("results", results);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.default_city_details = async function (q) {
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
    try {
    const results = await collection.aggregate(arguments).toArray();
        console.log("results", results);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.get_driver_availability = async function (q, driver_id, pickup_time) {
  var deferred = q.defer();

  let match_array = {
    pickup_time: pickup_time,
    driver_id: parseInt(driver_id),
    travel_status: parseInt(9),
  };

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);
    try {
    const results = await collection
    .find(match_array, {
      promocode: 1,
      promo_discount: 1,
      promo_used: 1,
      start_date: 1,
      expire_date: 1,
      promo_limit: 1,
      total_applied: 1,
      total_used: 1,
    }).toArray();
          deferred.resolve(results);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_passengers_logs = async function (q, id, update_array) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);

  
    try {
    const data = await collection.updateOne(
    { _id: parseInt(id) },
    { $set: update_array },
    { upsert: false });
          deferred.resolve(data);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.insert_passengers_logs = async function (q, insertArray) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);
  
    try {
    const results = await collection.insertOne(insertArray);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_siteinfo = async function (q, update_array) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_SITEINFO);

  
    try {
    const data = await collection.updateOne(
    { _id: parseInt(1) },
    { $set: update_array },
    { upsert: false });
          deferred.resolve(data);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.get_last_logid = async function (q) {
  var deferred = q.defer();

  let match_array = {
    _id: parseInt(1),
  };

  var collection = db.get().collection(t.MDB_SITEINFO);
    try {
    const results = await collection
    .find(match_array, { last_logid: 1 }).toArray();
          deferred.resolve(results);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.get_sublogid = async function (q, sublog_id) {
  var deferred = q.defer();

  let match_array = {
    _id: parseInt(sublog_id),
  };

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);
    try {
    const results = await collection
    .find(match_array, { sub_logid: 1 }).toArray();
          deferred.resolve(results);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_sublog_id = async function (q, update_array, id) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);

  
    try {
    const data = await collection.updateOne(
    { _id: parseInt(id) },
    { $set: update_array },
    { upsert: false });
          deferred.resolve(data);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_request_details = async function (q, id, update_array) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_DRIVER_REQUEST_DETAILS);

  
    try {
    const data = await collection.updateOne(
    { _id: parseInt(id) },
    { $set: update_array },
    { upsert: false });
          deferred.resolve(data);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.insert_request_details = async function (q, insertArray) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_DRIVER_REQUEST_DETAILS);
  
    try {
    const results = await collection.insertOne(insertArray);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.get_trip_detail = async function (q, trip_id) {
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
        driver_latitude: { $arrayElemAt: ["$driverinfo.loc.coordinates", 0] },
        driver_longitude: { $arrayElemAt: ["$driverinfo.loc.coordinates", 1] },
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
        // Sasidharan Jan 17 2025;
        couponAmount: { $ifNull: ["$passengers.couponAmount", 0] },
        eveningfare: { $ifNull: ["$trans.eveningfare", 0] },
      },
    },
    {
      $sort: {
        _id: -1,
      },
    },
  ];
  var collection = db.get().collection(t.MDB_PASSENGERSLOG);
    try {
    const results = await collection.aggregate(arguments).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.past_trip_places = async function (q, id) {
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
    try {
    const results = await collection.aggregate(arguments).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.recent_trip_places = async function (
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
    try {
    const results = await collection.aggregate(arguments).toArray();
        //console.log(results);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_ratings = async function (q, id, update_array) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);

  
    try {
    const data = await collection.updateOne(
    { _id: parseInt(id) },
    { $set: update_array },
    { upsert: false });
          deferred.resolve(data);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_ratings_completed = async function (q, id, update_array) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_LOGS_COMPLETED);

  
    try {
    const data = await collection.updateOne(
    { _id: parseInt(id) },
    { $set: update_array },
    { upsert: false });
          deferred.resolve(data);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.passenger_trips_completed = async function (q, userid) {
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
        fare_calculation_type: { $ifNull: ["$trans.fare_calculation_type", 2] },
        distance_fare: { $ifNull: ["$trans.distance_fare", 0] },
        driver_image: { $ifNull: ["$people.profile_picture", ""] },
        passenger_image: { $ifNull: ["$passenger.profile_image", ""] },
        notes: "$notes_driver",
      },
    },
    {
      $sort: {
        _id: -1,
      },
    },
  ];
  var collection = db.get().collection(t.MDB_LOGS_COMPLETED);
    try {
    const results = await collection.aggregate(arguments).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.passenger_trips_cancelled = async function (q, userid) {
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
        notes: "$notes_driver",
        driver_image: { $ifNull: ["$people.profile_picture", ""] },
        profile_image: { $ifNull: ["$passenger.profile_image", ""] },
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
    try {
    const results = await collection.aggregate(arguments).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.passenger_trips_missed = async function (q, userid) {
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
        notes: "$notes_driver",
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
    try {
    const results = await collection.aggregate(arguments).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};
exports.passenger_trips_rejected = async function (q, userid) {
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
    try {
    const results = await collection.aggregate(arguments).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.check_passenger_in_book_now = async function (
  q,
  passenger_id,
  current_trip_id
) {
  var deferred = q.defer();

  let match_array = {
    passengers_id: parseInt(passenger_id),
    now_after: parseInt(0),
    travel_status: parseInt(0),
    _id: { $ne: parseInt(current_trip_id) },
  };

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);
    try {
    const results = await collection
    .find(match_array, { pickup_time: 1, _id: 1, confirm_flag: 1 }).toArray();
          deferred.resolve(results);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.get_ratings_info = async function (q) {
  var deferred = q.defer();

  let match_array = {};

  var collection = db.get().collection(t.MDB_RATINGS);
    try {
    const results = await collection
    .find(match_array, {
      ratings_no: 1,
      ratings_title: 1,
      ratings_title_ar: 1,
      ratings_tags: 1,
      ratings_tags_ar: 1,
    }).toArray();
          deferred.resolve(results);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.trip_pay_details = async function (q, trip_id) {
  var deferred = q.defer();

  let match_array = {
    trip_id: parseInt(trip_id),
  };

  var collection = db.get().collection(t.MDB_PAYDETAILS);
    try {
    const results = await collection.find(match_array, {}).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.check_confirmed_status = async function (q, trip_id) {
  var deferred = q.defer();

  let match_array = {
    _id: parseInt(trip_id),
  };

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);
    try {
    const results = await collection
    .find(match_array, {
      travel_status: 1,
      confirm_flag: 1,
      book_type: 1,
      driver_reply: 1,
    }).toArray();
          deferred.resolve(results);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.passenger_update_drop_location = async function (q, trip_id, update_array) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);

  
    try {
    const data = await collection.updateOne(
    { _id: parseInt(trip_id) },
    { $set: update_array },
    { upsert: false });
          deferred.resolve(data);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.passengers_wallet_logs = async function (q, userid, start, limit) {
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
    try {
    const results = await collection.aggregate(arguments).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.get_added_promocodes = async function (q, userid) {
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
        expiry_date: "$promo.expire_date",
        total_used: "$promo.total_used",
        total_applied: "$promo.total_applied",
        promo_limit: "$promo.promo_limit",
      },
    },
    { $sort: { _id: -1 } },
  ];
  var collection = db.get().collection(t.MDB_PASSENGERS_ADDED_PROMO);
    try {
    const results = await collection.aggregate(arguments).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.get_passenger_notifications = async function (q) {
  var deferred = q.defer();

  let arguments = [
    { $match: { sent_status: { $ne: 0 } } },
    {
      $project: {
        title: { $ifNull: ["$title", ""] },
        sub_title: { $ifNull: ["$sub_title", ""] },
        message: "$message",
        image: "$image",
        created_date: "$created_date",
      },
    },
    { $sort: { _id: -1 } },
  ];
  var collection = db.get().collection(t.MDB_NOTIFICATIONS);
    try {
    const results = await collection.aggregate(arguments).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.check_already_promocode_added = async function (q, passenger_id) {
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
        passenger_commission: "$coupon.passenger_commission",
        expiry_date: "$promo.expire_date",
        total_used: "$promo.total_used",
        total_applied: "$promo.total_applied",
        promo_limit: "$promo.promo_limit",
      },
    },
  ];

  var collection = db.get().collection(t.MDB_PASSENGERS_ADDED_PROMO);
    try {
    const results = await collection.aggregate(arguments).toArray();
        //console.log('chcek promocode',results);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.get_cancellation_fare = async function (q, trip_id) {
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
    try {
    const results = await collection.aggregate(arguments).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.insert_passenger_added_promocode = async function (q, insertArray) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERS_ADDED_PROMO);
  
    try {
    const results = await collection.insertOne(insertArray);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.get_cms_content = async function (q, menu) {
  var deferred = q.defer();

  var match_array = { menu_link: menu };

  var collection = db.get().collection(t.MDB_CMS);
    try {
    const results = await collection.find(match_array, {}).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_driver_status = async function (q, id, update_array) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_DRIVER_INFO);

  
    try {
    const data = await collection.updateOne(
    { _id: parseInt(id) },
    { $set: update_array },
    { upsert: false });
          deferred.resolve(data);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_request_details = async function (q, id, update_array) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_DRIVER_REQUEST_DETAILS);

  
    try {
    const data = await collection.updateOne(
    { _id: parseInt(id) },
    { $set: update_array },
    { upsert: false });
          deferred.resolve(data);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_log_details = async function (q, id, update_array) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);

  
    try {
    const data = await collection.updateOne(
    { _id: parseInt(id) },
    { $set: update_array },
    { upsert: false });
          deferred.resolve(data);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_passenger_wallet = async function (q, id, update_array) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERS);

  
    try {
    const data = await collection.updateOne(
    { _id: parseInt(id) },
    { $set: update_array },
    { upsert: false });
          deferred.resolve(data);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.insert_transaction_details = async function (q, insertArray) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_TRANS);
  
    try {
    const results = await collection.insertOne(insertArray);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_passenger_language = async function (q, id, lang) {
  var deferred = q.defer();

  var update_array = {
    lang: lang,
  };

  var collection = db.get().collection(t.MDB_PASSENGERS);

  
    try {
    const data = await collection.updateOne(
    { _id: parseInt(id) },
    { $set: update_array },
    { upsert: false });
          deferred.resolve(data);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_passenger_details = async function (q, id, update_array) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERS);

  
    try {
    const data = await collection.updateOne(
    { _id: parseInt(id) },
    { $set: update_array },
    { upsert: false });
          deferred.resolve(data);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.passenger_trips_upcoming = async function (q, userid) {
  var deferred = q.defer();

  var match_array1 = {
    passengers_id: parseInt(userid),
    driver_reply: "",
    travel_status: parseInt(0),
  };

  var match_array2 = {
    passengers_id: parseInt(userid),
    driver_reply: "A",
    travel_status: parseInt(9),
  };

  var match_array3 = {
    passengers_id: parseInt(userid),
    driver_reply: "A",
    travel_status: parseInt(3),
  };

  var match_array = {
    $or: [match_array1, match_array2, match_array3],
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
        account_type_name: "$account.account_type",
        metric: { $ifNull: ["$trans.distance_unit", ""] },
        taxi_manufacturer: { $ifNull: ["$taxi.taxi_manufacturer", "-"] },
        fare_calculation_type: { $ifNull: ["$trans.fare_calculation_type", 2] },
        driver_image: { $ifNull: ["$people.profile_picture", ""] },
        profile_image: { $ifNull: ["$passenger.profile_image", ""] },
      },
    },
    {
      $sort: {
        _id: -1,
      },
    },
  ];
  var collection = db.get().collection(t.MDB_PASSENGERSLOG);
    try {
    const results = await collection.aggregate(arguments).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.get_trip_detail_complete = async function (q, trip_id) {
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
      },
    },
    {
      $sort: {
        _id: -1,
      },
    },
  ];
  var collection = db.get().collection(t.MDB_PASSENGERSLOG);
    try {
    const results = await collection.aggregate(arguments).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.insert_temp_logs = async function (q, insertArray) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERS_LOGS_TEMP);
  
    try {
    const results = await collection.insertOne(insertArray);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_trip = async function (q, updateArray, trip_id) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);

  
    try {
    const data = await collection.updateOne(
    { _id: parseInt(trip_id) },
    { $set: updateArray },
    { upsert: false });
          deferred.resolve(data);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_trip_reward = async function (q, updateArray, id) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERS);

  
    try {
    const data = await collection.updateOne(
    { _id: parseInt(id) },
    updateArray,
    { upsert: false });
          deferred.resolve(data);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.get_completed_trip_detail = async function (q, trip_id) {
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
        driver_latitude: { $arrayElemAt: ["$driverinfo.loc.coordinates", 0] },
        driver_longitude: { $arrayElemAt: ["$driverinfo.loc.coordinates", 1] },
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
        eveningfare_applicable: {
          $ifNull: ["$trans.eveningfare_applicable", 0],
        },
        eveningfare: { $ifNull: ["$trans.eveningfare", 0] },
      },
    },
    {
      $sort: {
        _id: -1,
      },
    },
  ];
  var collection = db.get().collection(t.MDB_LOGS_COMPLETED);
    try {
    const results = await collection.aggregate(arguments).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_notification_logs = async function (q, insertArray) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_LOGS);
  
    try {
    const results = await collection.insertOne(insertArray);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.all_model_fare_details = async function (q, model_id) {
  var deferred = q.defer();
  var collection = db.get().collection(t.MDB_MOTOR_MODEL);

  if (model_id) {
    match_array = { _id: parseInt(model_id) };
  } else {
    match_array = { model_status: "A" };
  }

  arguments = [
    {
      $match: match_array,
    },
    {
      $project: {
        model_id: "$_id",
        model_name: "$model_name",
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
      },
    },
  ];
    try {
    const results = await collection.aggregate(arguments).toArray();
        //console.log('db err',err);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_estimate_fare = async function (q, id, estimate_fare) {
  var deferred = q.defer();
  update_array = { approx_fare: parseFloat(estimate_fare) };
  //condition = {'_id':parseInt(id),'travel_status':3};

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);

  
    try {
    const data = await collection.updateOne(
    { _id: parseInt(id) },
    { $set: update_array },
    { upsert: false });
          deferred.resolve(data);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.get_airport_terminals = async function (q) {
  var deferred = q.defer();
  var collection = db.get().collection(t.MDB_AIRPORTS);
    try {
    const results = await collection.find({}).toArray();
        //console.log(results,'results----->')
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};
