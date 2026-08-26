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
        currency_symbol: "$csc.currency_symbol",
        currency_code: "$csc.currency_code",
        aboutpage_description_ar: "$aboutpage_description_ar",
        aboutpage_description: "$aboutpage_description",
        admin_email: "$admin_email",
        skip_credit: { $ifNull: ["$skip_credit", 0] },
        book_later_interval: { $ifNull: ["$book_later_interval", 0] },
        book_now_interval: { $ifNull: ["$book_now_interval", 0] },
        airport_trip_interval: { $ifNull: ["$airport_trip_interval", 0] },
        repeat_trip_interval: { $ifNull: ["$repeat_trip_interval", 0] },
        airport_pick_up: { $ifNull: ["$airport_pick_up", 0] },
        airport_drop: { $ifNull: ["$airport_drop", 0] },
        default_country_code: { $ifNull: ["$csc.country_code", 0] },
        cancellation_setting: { $ifNull: ["$cancellation_setting", 0] },
        facebook_share: { $ifNull: ["$facebook_share", 0] },
        twitter_share: { $ifNull: ["$twitter_share", 0] },
        instagram_share: { $ifNull: ["$instagram_share", 0] },
        facebook_key: { $ifNull: ["$facebook_key", 0] },
        version_code: { $ifNull: ["$version_code", 0] },
        version_name: { $ifNull: ["$version_name", 0] },
        is_mandatory_update: { $ifNull: ["$is_mandatory_update", 0] },
        app_description_ar: { $ifNull: ["$app_description_ar", 0] },
        app_description: { $ifNull: ["$app_description", 0] },
        fare_calculation_type: { $ifNull: ["$fare_calculation_type", 2] },
        //'fare_calculation_type': { $ifNull : ['$fare_calculation_type_version1',1]},
        conversation: { $ifNull: ["$conversation", []] },
        door_assistance: { $ifNull: ["$door_assistance", []] },
        airportSignOptions: { $ifNull: ["$airportSignOptions", []] },
        max_passengers_limit: "$max_passengers_limit",
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

exports.updateLocation = async function (q, logData) {
  var d = q.defer();

  var collection = db.get().collection(t.MDB_DRIVER_INFO);

  var locationdata = logData.locations;
  //locationdata.split('')
  var update_array = {};

  if (locationdata != undefined) {
    if (
      logData.status &&
      logData.status == "A" &&
      logData.trip_remaining_time &&
      logData.trip_remaining_time != ""
    ) {
      update_array.trip_remaining_time = logData.trip_remaining_time;
    } else {
      update_array.trip_remaining_time = "-";
    }

    locations = locationdata.split("|");
    var arrlen = locations.length - 1;
    if (locations[arrlen] != "") {
      var locs = locations[arrlen].split(",");
      logData.latitude = locs[0];
      logData.longitude = locs[1];
    } else {
      var locs = locations[arrlen - 1].split(",");
      logData.latitude = locs[0];
      logData.longitude = locs[1];
    }

    //if(logData.longitude != '' && logData.latitude != '')
    //{
    let loc = {};
    loc.type = "Point";
    loc.coordinates = [
      parseFloat(logData.longitude),
      parseFloat(logData.latitude),
    ];

    //}

    update_array.status = logData.status;
    update_array.update_date = new Date();
    update_array.loc = loc;
    update_array.bearing = logData.bearing;
    update_array.accuracy = logData.accuracy;
    update_array.gps_enable = logData.gps_enable;

    
        try {
      const data = await collection.updateOne(
      { _id: parseInt(logData.driver_id) },
      { $set: update_array },
      { upsert: false });
              //	console.log('err',err);
              d.resolve(data);
      
    } catch (err) {
      console.log(err);
      throw err;
    }
  }
  return d.promise;
};

exports.check_phone_people = async function (q, data) {
  var deferred = q.defer();

  let match_array = {
    phone: data.phone,
    user_type: "D",
    //"company_id":data.company_id
  };

  var collection = db.get().collection(t.MDB_PEOPLE);
    try {
    const results = await collection.find(match_array).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.driver_login = async function (q, data) {
  var deferred = q.defer();

  let match_array = {
    phone: data.phone,
    password: md5(data.password),
    user_type: "D",
    //"company_id":data.company_id
  };

  if (global.settings.q8taxi_enable == 0) {
    match_array.driver_code = data.driver_code;
  }

  let project = {
    status: 1,
    login_status: 1,
    login_from: 1,
    device_token: 1,
    device_id: 1,
    company_id: 1,
    _id: 1,
  };

  var collection = db.get().collection(t.MDB_PEOPLE);
    try {
    const results = await collection.find(match_array, { projection: project }).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.driver_profile = async function (q, userid) {
  var deferred = q.defer();
  let arguments = [
    {
      $match: {
        _id: userid,
        user_type: "D",
        //'taxi_driver_mapping.mapping_status':'A'
      },
    },
    {
      $lookup: {
        from: t.MDB_COMPANY,
        localField: "company_id",
        foreignField: "_id",
        as: "company",
      },
    },
    { $unwind: "$company" },

    {
      $lookup: {
        from: t.MDB_TAXIMAPPING,
        localField: "_id",
        foreignField: "mapping_driverid",
        as: "taxi_driver_mapping",
      },
    },
    {
      $unwind: {
        path: "$taxi_driver_mapping",
        preserveNullAndEmptyArrays: true,
      },
    },
    // {'$match':{
    // 	"taxi_driver_mapping.mapping_status":"A"
    // }},
    {
      $lookup: {
        from: t.MDB_TAXI,
        localField: "taxi_driver_mapping.mapping_taxiid",
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
        localField: "taxi.taxi_model",
        foreignField: "_id",
        as: "motor_model",
      },
    },
    {
      $unwind: {
        path: "$motor_model",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $lookup: {
        from: t.MDB_DRIVER_INFO,
        localField: "taxi_driver_mapping.mapping_driverid",
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
      $project: {
        //'salutation' : '$salutation',
        name: "$name",
        driver_code: "$driver_code",
        company_address: "$company.companydetails.company_address",
        //'name' : '$name',
        lastname: "$lastname",
        email: "$email",
        phone: "$phone",
        userid: "$_id",
        address: "$address",
        password: "$org_password",
        otp: "$otp",
        photo: "$photo",
        starting_km: { $ifNull: ["$taxi.starting_km", ""] },
        device_type: "$device_type",
        device_token: "$device_token",
        login_status: "$login_status",
        user_type: "$user_type",
        driver_referral_code: "$driver_referral_code",
        notification_setting: "$notification_setting",
        company_id: "$company_id",
        driver_license_id: "$driver_license_id",
        profile_picture: "$profile_picture",
        driver_status: "$driverinfo.status",
        shift_status: "$driverinfo.shift_status",
        bankname: "$company.companydetails.bankname",
        bankaccount_no: "$company.companydetails.bankaccount_no",
        company_ownerid: "$company.companydetails.userid",
        taxi_no: { $ifNull: ["$taxi.taxi_no", 0] },
        taxi_id: { $ifNull: ["$taxi._id", 0] },
        //'mapping_startdate':'$taxi_driver_mapping.mapping_startdate',
        //'mapping_enddate':'$taxi_driver_mapping.mapping_enddate',
        model_name: { $ifNull: ["$motor_model.model_name", 0] },
        model_id: { $ifNull: ["$motor_model._id", 0] },
      },
    },
  ];

  var collection = db.get().collection(t.MDB_PEOPLE);
    try {
    const results = await collection.aggregate(arguments).toArray();
        //console.log('profile err',err);
        //console.log('profile res',results);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.driver_profile_details = async function (q, userid) {
  var deferred = q.defer();
  let arguments = [
    {
      $match: {
        _id: parseInt(userid),
        user_type: "D",
        //'taxi_driver_mapping.mapping_status':'A'
      },
    },
    {
      $lookup: {
        from: t.MDB_COMPANY,
        localField: "company_id",
        foreignField: "_id",
        as: "company",
      },
    },
    { $unwind: "$company" },

    {
      $lookup: {
        from: t.MDB_TAXIMAPPING,
        localField: "_id",
        foreignField: "mapping_driverid",
        as: "taxi_driver_mapping",
      },
    },
    {
      $unwind: {
        path: "$taxi_driver_mapping",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $match: {
        "taxi_driver_mapping.mapping_status": "A",
      },
    },
    {
      $lookup: {
        from: t.MDB_TAXI,
        localField: "taxi_driver_mapping.mapping_taxiid",
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
        localField: "taxi.taxi_model",
        foreignField: "_id",
        as: "motor_model",
      },
    },
    {
      $unwind: {
        path: "$motor_model",
        preserveNullAndEmptyArrays: true,
      },
    },
    {
      $lookup: {
        from: t.MDB_DRIVER_INFO,
        localField: "taxi_driver_mapping.mapping_driverid",
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
      $project: {
        //'salutation' : '$salutation',
        name: "$name",
        driver_code: "$driver_code",
        company_address: "$company.companydetails.company_address",
        //'name' : '$name',
        lastname: "$lastname",
        email: "$email",
        phone: "$phone",
        userid: "$_id",
        address: "$address",
        password: "$org_password",
        otp: "$otp",
        photo: "$photo",
        starting_km: { $ifNull: ["$taxi.starting_km", ""] },
        device_type: "$device_type",
        device_token: "$device_token",
        login_status: "$login_status",
        user_type: "$user_type",
        driver_referral_code: "$driver_referral_code",
        notification_setting: "$notification_setting",
        company_id: "$company_id",
        driver_license_id: "$driver_license_id",
        profile_picture: "$profile_picture",
        driver_status: "$driverinfo.status",
        shift_status: "$driverinfo.shift_status",
        bankname: "$company.companydetails.bankname",
        bankaccount_no: "$company.companydetails.bankaccount_no",
        company_ownerid: "$company.companydetails.userid",
        taxi_no: { $ifNull: ["$taxi.taxi_no", ""] },
        taxi_id: { $ifNull: ["$taxi._id", ""] },
        //'mapping_startdate':'$taxi_driver_mapping.mapping_startdate',
        //'mapping_enddate':'$taxi_driver_mapping.mapping_enddate',
        model_name: { $ifNull: ["$motor_model.model_name", ""] },
        model_id: { $ifNull: ["$motor_model._id", ""] },
      },
    },
  ];

  var collection = db.get().collection(t.MDB_PEOPLE);
    try {
    const results = await collection.aggregate(arguments).toArray();
        //console.log('profile err',err);
        //console.log('profile res',results);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_driver_phone = async function (q, updateArray, userid) {
  var deferred = q.defer();

  let match_array = {
    _id: userid,
  };
  var collection = db.get().collection(t.MDB_PEOPLE);
  
    try {
    const results = await collection.updateOne(
    match_array,
    { $set: updateArray });
          //console.log('err',err);
          deferred.resolve("Updated Successfully");
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.driver_statistics = async function (q, driver_id, time_range) {
  var deferred = q.defer();
  let arguments = [
    {
      $match: {
        driver_id: driver_id,
        actual_pickup_time: { $gte: time_range[0], $lte: time_range[1] },
        drop_time: { $gte: time_range[0] },
      },
    },
    {
      $lookup: {
        from: t.MDB_TRANS,
        localField: "_id",
        foreignField: "passengers_log_id",
        as: "trans",
      },
    },
    { $unwind: { path: "$trans", preserveNullAndEmptyArrays: true } },
    {
      $project: {
        fare: {
          $cond: {
            if: { $eq: ["$travel_status", 1] },
            then: {
              $sum: [
                "$trans.fare",
                "$trans.wallet_used_amount",
                "$trans.add_amt",
                "$trans.passenger_pending_amt",
              ],
            },
            else: 0,
          },
        },
        completed: {
          $cond: { if: { $eq: ["$travel_status", 1] }, then: 1, else: 0 },
        },
        cancelled: {
          $cond: { if: { $eq: ["$travel_status", 4] }, then: 1, else: 0 },
        },
        cancelled2: {
          $cond: { if: { $eq: ["$travel_status", 8] }, then: 1, else: 0 },
        },
        cancelled3: {
          $cond: { if: { $eq: ["$travel_status", 6] }, then: 1, else: 0 },
        },
        rejected: {
          $cond: { if: { $eq: ["$driver_reply", "R"] }, then: 1, else: 0 },
        },
        waiting_time: {
          $cond: {
            if: { $eq: ["$travel_status", 1] },
            then: "$trans.waiting_time",
            else: 0,
          },
        },
        time_driven: {
          $cond: {
            if: { $eq: ["$travel_status", 1] },
            then: { $subtract: ["$drop_time", "$actual_pickup_time"] },
            else: 0,
          },
        },
        distance_travel: {
          $cond: {
            if: { $eq: ["$travel_status", 1] },
            then: "$trans.actual_distance",
            else: 0,
          },
        },
        trip_minutes: {
          $cond: {
            if: { $eq: ["$travel_status", 1] },
            then: "$trans.trip_minutes",
            else: 0,
          },
        },
      },
    },
    {
      $group: {
        _id: "$driver_id",
        today_earnings: { $sum: "$fare" },
        completed_trip: { $sum: "$completed" },
        overall_rejected_trips: { $sum: "$rejected" },
        cancelled: {
          $sum: { $sum: ["$cancelled", "$cancelled2", "$cancelled3"] },
        },
        //"time_driven":{'$sum':'$time_driven'},
        time_driven: { $sum: "$trip_minutes" },
        waiting_time: { $push: "$waiting_time" },
        total_trip: { $sum: 1 },
        total_km: { $sum: "$distance_travel" },
      },
    },
  ];

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);
    try {
    const results = await collection.aggregate(arguments).toArray();
        //console.log('statisticsresults',results);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.check_qr_scan = async function (q, code) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_TAXI);
  arguments = [
    {
      $lookup: {
        from: t.MDB_MOTOR_MODEL,
        localField: "taxi_model",
        foreignField: "_id",
        as: "model",
      },
    },
    {
      $unwind: "$model",
    },
    {
      $match: { qrencodeString: code },
    },
    {
      $project: {
        taxi_id: "$_id",
        taxi_no: "$taxi_no",
        taxi_model: "$taxi_model",
        starting_km: "$starting_km",
        model_name: "$model.model_name",
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

exports.tabTokenUpdate = async function (q, taxi_id, token) {
  var deferred = q.defer();

  let match_array = {
    _id: taxi_id,
  };
  let updateArray = {
    tab_token: token,
  };
  var collection = db.get().collection(t.MDB_TAXI);
  
    try {
    const results = await collection.updateOne(
    match_array,
    { $set: updateArray });
          deferred.resolve("Updated Successfully");
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.getVideoURL = async function (q) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_SITEINFO);
    try {
    const results = await collection
    .find({}, { projection: { tab_video: 1, version: 1 } }).toArray();
          //console.log('results',results);
          deferred.resolve(results);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.get_driver_status = async function (q, driver_id) {
  var deferred = q.defer();
  var collection = db.get().collection(t.MDB_PEOPLE);
    try {
    const results = await collection
    .find({ _id: parseInt(driver_id), user_type: "D" }, { projection: { _id: 1, login_status: 1, status: 1 } }).toArray();
          //console.log('status',results);
          deferred.resolve(results);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.get_driver_ratings = async function (q, driver_id) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_LOGS_COMPLETED);

  arguments = [
    {
      $match: { driver_id: driver_id },
    },
    {
      $group: {
        _id: "$driver_id",
        total_rating: { $sum: "$rating" },
        count: { $sum: 1 },
      },
    },
  ];
    try {
    const results = await collection.aggregate(arguments).toArray();
        //console.log('results',results);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.check_driver_location_update = async function (q, trip_id) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_DRIVER_LOCATION_HISTORY);
    try {
    const results = await collection
    .find({ trip_id: parseInt(trip_id) }, { projection: { "loc.coordinates": 1, distance: 1, _id: 1 } }).toArray();
          //console.log('resultscheck',results);
          deferred.resolve(results);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.last_driver_location_update = async function (q) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_DRIVER_LOCATION_HISTORY);
    try {
    const results = await collection
    .find({})
    .sort({ _id: -1 })
    .limit(1).toArray();
          deferred.resolve(results);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.insert_driver_location_update = async function (q, insertArray) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_DRIVER_LOCATION_HISTORY);
  
    try {
    const results = await collection.insertOne(insertArray);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_distance = async function (q, total_distance, trip_id, status) {
  var deferred = q.defer();

  let updateArray = {
    distance: parseFloat(total_distance),
    status: status,
  };

  var collection = db.get().collection(t.MDB_DRIVER_LOCATION_HISTORY);
  
    try {
    const data = await collection.updateOne(
    { trip_id: parseInt(trip_id) },
    { $set: updateArray },
    { upsert: false });
          deferred.resolve(data);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_logs_distance = async function (q, total_distance, trip_id) {
  var deferred = q.defer();

  let updateArray = {
    distance: parseFloat(total_distance),
  };

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

exports.push_driver_location = async function (q, location_data, trip_id) {
  var deferred = q.defer();

  //console.log('location_data',location_data);
  var collection = db.get().collection(t.MDB_DRIVER_LOCATION_HISTORY);
  
    try {
    const data = await collection.updateOne(
    { trip_id: parseInt(trip_id) },
    { $push: { "loc.coordinates": { $each: location_data } } },
    { upsert: false });
          deferred.resolve(data);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.driver_taxi_assign = async function (q, userid, time_range) {
  var deferred = q.defer();

  let match = {
    mapping_driverid: parseInt(userid),
    //'mapping_startdate':'',
    //'mapping_enddate':'',
  };

  let arguments = [
    {
      $lookup: {
        from: t.MDB_TAXI,
        localField: "mapping_taxiid",
        foreignField: "_id",
        as: "taxi",
      },
    },
    { $unwind: "$taxi" },
    {
      $lookup: {
        from: t.MDB_COMPANY,
        localField: "mapping_companyid",
        foreignField: "_id",
        as: "companyinfo",
      },
    },
    { $unwind: "$companyinfo" },
    {
      $lookup: {
        from: t.MDB_PEOPLE,
        localField: "mapping_driverid",
        foreignField: "_id",
        as: "people",
      },
    },
    { $unwind: "$people" },
    {
      $lookup: {
        from: t.MDB_DRIVER_INFO,
        localField: "mapping_driverid",
        foreignField: "_id",
        as: "driverinfo",
      },
    },
    { $unwind: "$driverinfo" },
    {
      $lookup: {
        from: t.MDB_CSC,
        localField: "mapping_stateid",
        foreignField: "stateinfo.state_id",
        localField: "mapping_cityid",
        foreignField: "stateinfo.cityinfo.city_id",
        as: "csc",
      },
    },
    {
      $unwind: {
        path: "$csc",
        preserveNullAndEmptyArrays: true,
      },
    },
    { $sort: { mapping_startdate: 1 } },
    { $match: match },
    {
      $project: {
        mapping_taxiid: "$_id",
        taxi_id: "$taxi._id",
        starting_km: "$taxi.starting_km",
        shift_status: "$driverinfo.shift_status",
        status: "$driverinfo.status",
      },
    },
  ];

  var collection = db.get().collection(t.MDB_TAXIMAPPING);
    try {
    const results = await collection.aggregate(arguments).toArray();
        //console.log('assign res',results);
        deferred.resolve(results);
  
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
    let results = await collection
    .find({})
    .sort({ _id: -1 })
    .limit(1).toArray();
          if (!results.length) {
            results = [{ _id: 0 }];
          }
          deferred.resolve(results);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_driver_shift = async function (q, updateArray, userid) {
  var deferred = q.defer();

  let match_array = {
    _id: parseInt(userid),
  };

  //console.log(match_array);
  var collection = db.get().collection(t.MDB_DRIVER_INFO);
  
    try {
    const results = await collection.updateOne(
    match_array,
    { $set: updateArray });
          deferred.resolve(results);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.insert_shift_history = async function (q, insertArray) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_SHIFT_HISTORY);
  
    try {
    const results = await collection.insertOne(insertArray);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_shift_history = async function (q, updateArray, shift_id) {
  var deferred = q.defer();

  let match_array = {
    _id: parseInt(shift_id),
  };
  var collection = db.get().collection(t.MDB_SHIFT_HISTORY);
  
    try {
    const results = await collection.updateOne(
    match_array,
    { $set: updateArray });
          deferred.resolve("Updated Successfully");
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.ifTaxiReachService = async function (q, km) {
  var deferred = q.defer();

  var condition = { status: "A", km: { $lte: km } };

  var collection = db.get().collection(t.MDB_TAXI_SERVICE_RANGE);
    try {
    const results = await collection
    .find(condition, { projection: { km: 1, label: 1, _id: 1 } }).toArray();
          //console.log('results',results);
          deferred.resolve(results);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

// exports.driver_pending_trips= function(q,userid){
// 	try
// 	{
// 	var deferred = q.defer();

// 	var condition = {'driver_id':parseInt(userid),'travel_status':{'$in':[2,3,5,9]},'driver_reply':'A'};
// 	}
// 	catch(err)
// 	{
// 		console.log(err);
// 	}

// 	var collection = db.get().collection(t.MDB_PASSENGERSLOG);
// 	collection.find(condition,{'_id':1}).toArray(function(err, results) {
// 		console.log('err',err);
// 	 	deferred.resolve(results);
// 		deferred.makeNodeResolver()
// 		result=null;
// 	  });

// 	 return deferred.promise;
// }

exports.insert_mapping_taxi = async function (q, insertArray) {
  var deferred = q.defer();

  //console.log(insertArray);
  var collection = db.get().collection(t.MDB_TAXIMAPPING);
  
    try {
    const results = await collection.insertOne(insertArray);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.check_taxi_assign = async function (q, taxi_id) {
  var deferred = q.defer();

  var condition = { mapping_taxiid: parseInt(taxi_id), mapping_status: "A" };

  var collection = db.get().collection(t.MDB_TAXIMAPPING);
    try {
    const results = await collection.find(condition, { projection: { _id: 1 } }).toArray();
        //console.log('results',results);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.check_driver_assign = async function (q, driver_id) {
  var deferred = q.defer();

  var condition = {
    mapping_driverid: parseInt(driver_id),
    mapping_status: "A",
  };

  var collection = db.get().collection(t.MDB_TAXIMAPPING);
    try {
    const results = await collection.find(condition, { projection: { _id: 1 } }).toArray();
        //console.log('results',results);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_driver_profile = async function (q, updateArray, userid) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PEOPLE);
  
    try {
    const data = await collection.updateOne(
    { _id: parseInt(userid) },
    { $set: updateArray },
    { upsert: false });
          //console.log('err1',err);
          deferred.resolve(data);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_taxi_km = async function (q, taxikm, taxi_id) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_TAXI);
  
    try {
    const data = await collection.updateOne(
    { _id: parseInt(taxi_id) },
    { $set: { starting_km: taxikm } },
    { upsert: false });
          deferred.resolve(data);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_taxi = async function (q, updateArray, taxi_id) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_TAXI);
  
    try {
    const data = await collection.updateOne(
    { _id: parseInt(taxi_id) },
    { $set: updateArray },
    { upsert: false });
          deferred.resolve(data);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.get_passenger_status = async function (q, userid) {
  var deferred = q.defer();
  var collection = db.get().collection(t.MDB_PASSENGERS);
    try {
    const results = await collection
    .find({ _id: parseInt(userid), user_status: "A" }, { projection: { _id: 1, login_status: 1, status: 1 } }).toArray();
          //console.log('status',results);
          deferred.resolve(results);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.taxino_isValid = async function (q, taxi_no) {
  var deferred = q.defer();
  var collection = db.get().collection(t.MDB_TAXI);

  //console.log(taxi_no);
    try {
    const results = await collection
    .find({ taxi_no: taxi_no }, { projection: { _id: 1, starting_km: 1 } }).toArray();
          //console.log('status',results);
          deferred.resolve(results);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.taxi_details = async function (q, taxi_id) {
  var deferred = q.defer();
  var collection = db.get().collection(t.MDB_TAXI);
    try {
    const results = await collection
    .find({ _id: parseInt(taxi_id) }, { projection: { _id: 1, starting_km: 1 } }).toArray();
          //console.log('status',results);
          deferred.resolve(results);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_passenger_profile = async function (q, updateArray, userid) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERS);
  
    try {
    const data = await collection.updateOne(
    { _id: parseInt(userid) },
    { $set: updateArray },
    { upsert: false });
          //console.log('err1',err);
          deferred.resolve(data);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.insert_driver_feedback = async function (q, insertArray) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_DRIVER_FEEDBACK);
  
    try {
    const results = await collection.insertOne(insertArray);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_people = async function (q, updateArray, userid) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PEOPLE);
  
    try {
    const data = await collection.updateOne(
    { _id: parseInt(userid) },
    { $set: updateArray },
    { upsert: false });
          deferred.resolve(data);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_mapping = async function (q, updateArray, id) {
  var deferred = q.defer();
  //console.log('updateArray',updateArray);
  //console.log('id',id);
  var collection = db.get().collection(t.MDB_TAXIMAPPING);
  
    try {
    const data = await collection.updateOne(
    { mapping_driverid: parseInt(id), mapping_status: "A" },
    { $set: updateArray },
    { upsert: true });
          //console.log('success data',data);
          deferred.resolve(data);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.driver_info_details = async function (q, userid) {
  var deferred = q.defer();
  let arguments = [
    {
      $match: {
        _id: parseInt(userid),
        user_type: "D",
        status: "A",
      },
    },
    {
      $lookup: {
        from: t.MDB_DRIVER_INFO,
        localField: "_id",
        foreignField: "_id",
        as: "driverinfo",
      },
    },
    { $unwind: "$driverinfo" },
    {
      $project: {
        driver_status: "$driverinfo.status",
        status: "$status",
        login_status: "$login_status",
      },
    },
  ];

  //console.log(arguments);

  var collection = db.get().collection(t.MDB_PEOPLE);
    try {
    const results = await collection.aggregate(arguments).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.driver_pending_trips = async function (q, userid) {
  var deferred = q.defer();

  var match_array = {
    driver_id: parseInt(userid),
    //'msg_status':'R',
    driver_reply: "A",
    travel_status: { $in: [9, 2, 5, 3] },
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
      $project: {
        pickup_time: "$pickup_time",
        actual_pickup_time: "$actual_pickup_time",
        pickup_longitude: "$pickup_longitude",
        pickup_latitude: "$pickup_latitude",
        drop_latitude: "$drop_latitude",
        drop_longitude: "$drop_longitude",
        travel_status: "$travel_status",
        notes: "$notes_driver",
        distance: "$distance",
        waiting_hour: { $ifNull: ["$trans.waiting_time", 0] },
        bookby: "$bookby",
        drivername: "$people.name",
        passenger_name: "$passengers.name",
        passenger_id: "$passengers._id",
        passenger_profile_image: "$passengers.profile_image",
        passengers_log_id: "$_id",
        pickup_location: "$current_location",
        drop_location: { $ifNull: ["$drop_location", 0] },
        travel_status: { $ifNull: ["$travel_status", 0] },
        ratings: "$rating",
        tags: "$driver_tags",
        fare_calculation_type: { $ifNull: ["$trans.fare_calculation_type", 2] },
        distance_fare: { $ifNull: ["$trans.distance_fare", 0] },
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

exports.driver_past_trips = async function (q, userid, start, limit) {
  //Kumaresh

  //console.log("heree");
  var deferred = q.defer();

  var match_array = {
    driver_id: parseInt(userid),
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
      $project: {
        pickup_longitude: "$pickup_longitude",
        pickup_latitude: "$pickup_latitude",
        drop_latitude: "$drop_latitude",
        drop_longitude: "$drop_longitude",
        travel_status: "$travel_status",
        amt: {
          $cond: [
            { $gt: ["$trans.driver_edit_status", 0] },
            /* Sasidharan sep 27 2022 */
            // {'$sum':['$trans.tripfare','$trans.add_amt','$trans.surge_price']},
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
        //'pickup_time' : {'$dateToString': { 'format': "%d-%m-%Y %H:%M:%S", 'date': "$pickup_time" }},
        pickup_time: "$pickup_time",
        actual_pickup_time: "$actual_pickup_time",
        drop_time: "$drop_time",
        trip_duration: {
          $cond: [
            { $ne: ["$drop_time", ""] },
            {
              $divide: [
                { $subtract: ["$drop_time", "$actual_pickup_time"] },
                60000,
              ],
            },
            0,
          ],
        },
        // 'pickup_time' : {'$cond':[
        //                       {'$ne':['$pickup_time','']},
        //                       {'$dateToString': { 'format': "%d-%m-%Y %H:%M:%S",'date':'$pickup_time'}},
        //                       ''
        //                        ]
        //                  },
        //                  'actual_pickup_time' : {'$cond':[
        //                       {'$ne':['$actual_pickup_time','']},
        //                       {'$dateToString': { 'format': "%d-%m-%Y %H:%M:%S",'date':{'$add':['$actual_pickup_time',3 * 60 * 60 * 1000]} }},
        //                       ''
        //                        ]
        //                  },
        //                  'drop_time' : {'$cond':[
        //                       {'$ne':['$drop_time','']},
        //                       {'$dateToString': { 'format': "%d-%m-%Y %H:%M:%S",'date':{'$add':['$drop_time',3 * 60 * 60 * 1000]}}},
        //                       ''
        //                        ]
        //                  },
        //'pickup_time' : '$pickup_time',
        //'actual_pickup_time' : '$actual_pickup_time',
        //'drop_time' : '$drop_time',
        notes: "$notes_driver",
        distance: "$distance",
        waiting_hour: { $ifNull: ["$trans.waiting_time", "00:00:00"] },
        bookby: "$bookby",
        drivername: "$people.name",
        passenger_name: "$passengers.name",
        passenger_id: "$passengers._id",
        passenger_profile_image: "$passengers.profile_image",
        passengers_log_id: "$_id",
        pickup_location: "$current_location",
        drop_location: { $ifNull: ["$drop_location", 0] },
        travel_status: "$travel_status",
        ratings: "$rating",
        tags: "$driver_tags",
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
        fare_calculation_type: { $ifNull: ["$trans.fare_calculation_type", 2] },
        distance_fare: { $ifNull: ["$trans.distance_fare", 0] },
        trip_minutes: { $ifNull: ["$trans.trip_minutes", 0] },
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
    { $skip: parseInt(start) }, //Kumaresh
    { $limit: parseInt(limit) }, //Kumaresh
  ];
  //console.log('driver_booking_list',arguments);
  var collection = db.get().collection(t.MDB_LOGS_COMPLETED);
    try {
    const results = await collection.aggregate(arguments).toArray();
        //console.log('results',results);
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
                "$trans.discount_wallet_amount_used",
              ],
            },
          ],
        },
        notes: { $ifNull: ["$notes_driver", ""] },
        distance: { $ifNull: ["$distance", 0] },
        gift_card_status: { $ifNull: ["$gift_card_status", 0] },
        gift_card_discount: { $ifNull: ["$gift_card_discount", 0.0] },
        waiting_hour: "$waitingtime",
        discount_wallet_amount_used: {
          $ifNull: ["$trans.discount_wallet_amount_used", 0],
        },
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
                "$trans.discount_wallet_amount_used",
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
        waiting_free: "$model.waiting_free",
        time_to_reach_passen: { $ifNull: ["$time_to_reach_passen", "0"] },
        notification_status: "$notification_status",
        used_wallet_amount: "$used_wallet_amount",
        bookby: "$bookby",
        passenger_name: "$passengers.name",
        passenger_phone: "$passengers.phone",
        country_code: "$passengers.country_code",
        passenger_lang: "$passengers.lang",
        device_token: "$passengers.device_token",
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
        fare_calculation_type: { $ifNull: ["$trans.fare_calculation_type", 0] },
        previous_driver_id: { $ifNull: ["$previous_driver_id", 0] },
        distance_fare: { $ifNull: ["$trans.distance_fare", 0] },
        total_waiting_time: { $ifNull: ["$total_waiting_time", 0] },
        start_waiting_time: { $ifNull: ["$start_waiting_time", 0] },
        start_timer: { $ifNull: ["$start_timer", ""] },
        end_timer: { $ifNull: ["$end_timer", ""] },
        waiting_start_status: { $ifNull: ["$waiting_start_status", 0] },
        hourly_booking: { $ifNull: ["$hourly_booking", 0] },
        fixed_estimate_fare_type: { $ifNull: ["$fixed_estimate_fare_type", 0] },
        fixed_estimate_result: "$fixed_estimate_result",
        promo_code: "$promocode",
        airport_flight_number: "$airport_flight_number",
        sign_plate: "$sign_plate",
        passenger_pending_amt: { $ifNull: ["$passengers.wallet_amount", 0] },

        /* Sasidharan aug 13 2022 */
        corporate_promocode: { $ifNull: ["$applied_corporate_promocode", 0] },

        //Ramya 24_nov_2034
        perferred_temparature: { $ifNull: ["$perferred_temparature", 0] },
        conversation: { $ifNull: ["$conversation", 0] },
        door_assistance: { $ifNull: ["$door_assistance", 0] },

        //'pickup_time' : {'$dateToString': { 'format': "%d-%m-%Y %H:%M:%S", 'date':{'$add':['$pickup_time',3 * 60 * 60 * 1000]}}},
        //'actual_pickup_time' : {'$ifNull':[{'$dateToString': { 'format': "%d-%m-%Y %H:%M:%S", 'date':{'$add':['$actual_pickup_time',3 * 60 * 60 * 1000]} }},'']},
        // 'pickup_time' : {'$cond':[
        //                        {'$ne':['$pickup_time','']},
        //                        {'$dateToString': { 'format': "%d-%m-%Y %H:%M:%S", 'date':'$pickup_time' }},
        //                        ''
        //                         ]
        //                    },
        //                 'actual_pickup_time' : {'$cond':[
        //                        {'$ne':['$actual_pickup_time','']},
        //                        {'$dateToString': { 'format': "%d-%m-%Y %H:%M:%S", 'date':{'$add':['$actual_pickup_time',3 * 60 * 60 * 1000]} }},
        //                        ''
        //                         ]
        //                    },
        //                   'drop_time' : {'$cond':[
        //                        {'$ne':['$drop_time','']},
        //                        {'$dateToString': { 'format': "%d-%m-%Y %H:%M:%S", 'date':{'$add':['$drop_time',3 * 60 * 60 * 1000]} }},
        //                        ''
        //                         ]
        //                    },
        //                  'arrived_time' : {'$cond':[
        //                        {'$ne':['$arrived_time','']},
        //                        {'$dateToString': { 'format': "%d-%m-%Y %H:%M:%S", 'date':{'$add':['$arrived_time',3 * 60 * 60 * 1000]} }},
        //                        ''
        //                         ]
        //                    }
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

exports.update_driver_reply = async function (q, updateArray, trip_id) {
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

// Ramya oct 14 2025 (new number update api for group)

exports.check_new_number_exists = async (new_number) => {
  const collection = db.get().collection(t.MDB_PASSENGERS);
  const passenger = await collection.findOne({ phone: new_number });
  return passenger ? true : false;
};

exports.check_existing_number_exists = async (existing_number) => {
  const collection = db.get().collection(t.MDB_PASSENGERS);
  const passenger = await collection.findOne({ phone: existing_number });
  return passenger;
};

exports.update_passenger_phone = async (existing_number, new_number) => {
  var collection = db.get().collection(t.MDB_PASSENGERS);
  let result = await collection.updateOne(
    { phone: existing_number },
    { $set: { phone: new_number } }
  );
  return result;
};
exports.block_passenger_with_number = async (phone_number) => {
  const collection = db.get().collection(t.MDB_PASSENGERS);
  const result = await collection.updateOne(
    { phone: phone_number },
    { $set: { user_status: "PB" } }
  );
  return result;
};

exports.update_request_details = async function (q, updateArray, trip_id) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_REQUEST_HISTORY);
  
    try {
    const data = await collection.updateOne(
    { trip_id: parseInt(trip_id) },
    { $set: updateArray },
    { upsert: false });
          deferred.resolve(data);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_reject_trip_det = async function (q, updateArray, trip_id) {
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

exports.trip_exists = async function (q, trip_id, table_name) {
  var deferred = q.defer();

  let match_array = {
    trip_id: parseInt(trip_id),
  };

  var collection = db.get().collection(table_name);
    try {
    const results = await collection.find(match_array).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.fetch_all_logs = async function (q, trip_id) {
  var deferred = q.defer();

  let match_array = {
    _id: parseInt(trip_id),
  };

  //console.log(match_array);

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);
    try {
    const results = await collection.find(match_array).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.insert_all_logs = async function (q, insertArray, table_name) {
  var deferred = q.defer();

  var collection = db.get().collection(table_name);
  
    try {
    const results = await collection.insertOne(insertArray);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_moved = async function (q, trip_id) {
  var deferred = q.defer();

  let updateArray = {
    moved: parseInt(2),
  };

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

exports.cancel_trip_update_driver_status = async function (q, trip_id, updateArray) {
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

exports.update_driver_status = async function (q, updateArray, trip_id) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_REQUEST_HISTORY);
  
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

exports.sms_template = async function (q, sms_id) {
  var deferred = q.defer();
  var collection = db.get().collection(t.MDB_SMS_TEMPLATES);

  lang = "en";

  arguments = [
    {
      $match: {
        _id: parseInt(sms_id),
      },
    },
    {
      $project: {
        id: "$_id",
        sms_title: {
          $cond: {
            if: { $eq: [lang, "en"] },
            then: "$sms_title",
            else: "$arabic_sms_title",
          },
        },
        sms_description: {
          $cond: {
            if: { $eq: [lang, "en"] },
            then: "$sms_description",
            else: "$arabic_sms_description",
          },
        },
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

exports.update_payentry = async function (q, updateArray, trip_id) {
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

  
    try {
    const data = await collection.updateOne(
    { _id: parseInt(trip_id) },
    { $set: update_array },
    { upsert: true });
          deferred.resolve(data);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.model_fare_details = async function (q, model_id) {
  var deferred = q.defer();
  var collection = db.get().collection(t.MDB_MOTOR_MODEL);

  arguments = [
    {
      $match: {
        _id: parseInt(model_id),
      },
    },
    {
      $project: {
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

exports.check_new_request = async function (
  q,
  driver_id,
  trip_id,
  driver_status,
  start_date
) {
  var deferred = q.defer();
  var collection = db.get().collection(t.MDB_DRIVER_REQUEST_DETAILS);

  if (driver_status == "F" || driver_status == "B") {
    var match_array = { selected_driver: parseInt(driver_id) };
  } else {
    var match_array = { trip_id: parseInt(trip_id) };
  }

  //console.log(match_array);

  var arguments = [
    {
      $match: match_array,
    },
    {
      $project: {
        trip_id: "$trip_id",
        available_drivers: "$available_drivers",
        status: "$status",
      },
    },
    { $sort: { _id: -1 } },
    { $limit: 1 },
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

exports.get_promocode_details = async function (q, promocode) {
  var deferred = q.defer();
  //console.log('chcek promocode',promocode);
  var collection = db.get().collection(t.MDB_PASSENGERS_PROMO);
    try {
    const results = await collection
    .find({ promocode: promocode }, { projection: {
        promocode: 1,
        package: 1,
        promo_used: 1,
        promo_limit: 1,
        total_used: 1,
        total_applied: 1,
      } }).toArray();
          deferred.resolve(results);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.coupon_package_details = async function (q, package) {
  var deferred = q.defer();
  var collection = db.get().collection(t.MDB_COUPON_PACKAGE);
    try {
    const results = await collection
    .find({ _id: package }, { projection: { passenger_commission: 1, corporate_commission: 1 } }).toArray();
          deferred.resolve(results);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_admin_balance = async function (q, admin_amt) {
  var deferred = q.defer();

  var updateArray = {
    account_balance: admin_amt,
  };

  var collection = db.get().collection(t.MDB_PEOPLE);
  
    try {
    const data = await collection.updateOne(
    { user_type: "A" },
    { $inc: updateArray },
    { upsert: false });
          deferred.resolve(data);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_company_balance = async function (q, company_amt, company_id) {
  var deferred = q.defer();

  var updateArray = {
    account_balance: company_amt,
  };

  var collection = db.get().collection(t.MDB_PEOPLE);
  
    try {
    const data = await collection.updateOne(
    { user_type: "C", company_id: parseInt(company_id) },
    { $inc: updateArray },
    { upsert: false });
          deferred.resolve(data);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.check_trans_exists = async function (q, trip_id) {
  var deferred = q.defer();
  var collection = db.get().collection(t.MDB_TRANS);
    try {
    const results = await collection
    .find({ passengers_log_id: parseInt(trip_id) }).toArray();
          deferred.resolve(results);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.gateway_details = async function (q) {
  var deferred = q.defer();
  var collection = db.get().collection(t.MDB_PAYMENT_MODULES);
    try {
    const results = await collection
    .find({ _id: { $in: [6, 1, 3] } }, { projection: { _id: 1, pay_mod_name: 1, pay_mod_default: 1 } })
    .sort({ _id: 1 }).toArray();
          deferred.resolve(results);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.insert_transaction = async function (q, insertArray) {
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

exports.insert_wallet_logs = async function (q, insertArray) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGER_WALLET_LOG);
  
    try {
    const results = await collection.insertOne(insertArray);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.insert_gift_card_logs = async function (q, insertArray) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_GIFT_CARD_LOG);
  
    try {
    const results = await collection.insertOne(insertArray);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_transaction = async function (q, updateArray, trip_id) {
  try {
    var deferred = q.defer();

    /* Sasidharan April 05 2023 */
    let match_array = {
      _id: parseInt(trip_id),
    };

    var collection = db.get().collection(t.MDB_TRANS);
    
        try {
      const results = await collection.updateOne(
      match_array,
      { $set: updateArray });
              deferred.resolve("Updated Successfully");

              /* Sasidharan April 05 2023 */
      
    } catch (err) {
      console.log(err);
      throw err;
    }
    return deferred.promise;
  } catch (e) {
    console.error(e);
    var deferred = q.defer();
    deferred.resolve("Updated failed");
    deferred.makeNodeResolver();
    return deferred.promise;
  }
};

exports.insert_trip_pay_details = async function (q, insertArray) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PAYDETAILS);
  
    try {
    const results = await collection.insertOne(insertArray);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.insert_temp_logs = async function (q, insertArray) {
  var deferred = q.defer();
  if (insertArray.trip_id) {
    insertArray.id = insertArray.trip_id;
  }
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

exports.update_passenger = async function (q, updateArray, id) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_PASSENGERS);

  
    try {
    const data = await collection.updateOne(
    { _id: parseInt(id) },
    { $set: updateArray },
    { upsert: false });
          deferred.resolve(data);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.get_passenger_details = async function (q, userid) {
  var deferred = q.defer();
  var collection = db.get().collection(t.MDB_PASSENGERS);
    try {
    const results = await collection.find({ _id: parseInt(userid) }).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_promocode = async function (q, promocode) {
  var deferred = q.defer();

  let match_array = {
    promocode: promocode,
    promo_type: "1",
  };
  var collection = db.get().collection(t.MDB_PASSENGER_PROMO);
  
    try {
    const results = await collection.updateOne(
    match_array,
    { $inc: { total_applied: 1 } });
          deferred.resolve(results);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.knet_details = async function (q) {
  var deferred = q.defer();

  let match_array = {
    payment_gatway: "KNET",
    company_id: parseInt(1),
    payment_status: "A",
  };

  var collection = db.get().collection(t.MDB_PAYMENT_GATEWAYS);
    try {
    const results = await collection
    .find(match_array, { projection: {
      _id: 1,
      knet_alias: 1,
      payment_method: 1,
      knet_response_url: 1,
      knet_error_url: 1,
    } }).toArray();
          deferred.resolve(results);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.check_valid_phone_code = async function (q, data) {
  var deferred = q.defer();

  let match_array = {
    phone: data.phone,
    user_type: "D",
  };

  if (global.settings.q8taxi_enable == 0) {
    match_array.driver_code = data.driver_code;
  }

  var collection = db.get().collection(t.MDB_PEOPLE);
    try {
    const results = await collection.find(match_array).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.get_driver_request = async function (q, trip_id) {
  var deferred = q.defer();

  let match_array = {
    trip_id: parseInt(trip_id),
  };

  var collection = db.get().collection(t.MDB_DRIVER_REQUEST_DETAILS);
    try {
    const results = await collection.find(match_array).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};
exports.get_driver_taxi = async function (q, driver_id) {
  var deferred = q.defer();

  let match_array = {
    mapping_driverid: parseInt(driver_id),
    mapping_status: "A",
  };

  var collection = db.get().collection(t.MDB_TAXIMAPPING);
    try {
    const results = await collection.find(match_array).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.insert_rejection_history = async function (q, insertArray) {
  var deferred = q.defer();

  var collection = db.get().collection(t.MDB_REJECTION_HISTORY);
  
    try {
    const results = await collection.insertOne(insertArray);
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.current_driver_request = async function (q, trip_id, driver_id) {
  var deferred = q.defer();

  let match_array = {
    trip_id: parseInt(trip_id),
    selected_driver: parseInt(driver_id),
    status: { $ne: parseInt(4) },
  };
  //console.log(match_array);

  var collection = db.get().collection(t.MDB_DRIVER_REQUEST_DETAILS);
    try {
    const results = await collection
    .find(match_array, { projection: {
      _id: 1,
      available_drivers: 1,
      total_drivers: 1,
      rejected_timeout_drivers: 1,
      status: 1,
    } }).toArray();
          deferred.resolve(results);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.check_driver_phone = async function (q, phone) {
  var deferred = q.defer();

  let match_array = {
    phone: phone,
    user_type: "D",
  };

  //console.log(match_array);

  var collection = db.get().collection(t.MDB_PEOPLE);
    try {
    const results = await collection.find(match_array).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.check_passenger_phone = async function (q, phone) {
  var deferred = q.defer();

  let match_array = {
    phone: phone,
  };

  var collection = db.get().collection(t.MDB_PASSENGERS);
    try {
    const results = await collection.find(match_array).toArray();
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
    .find(match_array, { projection: {
      ratings_no: 1,
      ratings_title: 1,
      ratings_title_ar: 1,
      ratings_tags: 1,
      ratings_tags_ar: 1,
    } }).toArray();
          deferred.resolve(results);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.log_detail = async function (q, trip_id) {
  var deferred = q.defer();
  var collection = db.get().collection(t.MDB_PASSENGERSLOG);

  var match_array = { _id: parseInt(trip_id) };

  var arguments = [
    {
      $match: match_array,
    },
    {
      $project: {
        travel_status: "$travel_status",
        passengers_id: "$passengers_id",
        actual_pickup_time: "$actual_pickup_time",
        distance: "$distance",
        waiting_start_status: { $ifNull: ["$waiting_start_status", 0] },
        total_waiting_time: { $ifNull: ["$total_waiting_time", 0] },
        start_timer: { $ifNull: ["$start_timer", ""] },
        end_timer: { $ifNull: ["$end_timer", ""] },
      },
    },
    { $sort: { _id: -1 } },
    { $limit: 1 },
  ];
    try {
    const results = await collection.aggregate(arguments).toArray();
        //console.log('err',err);
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

  var aestTime = new Date().toLocaleString("en-US", {
    timeZone: "Asia/Kuwait",
  });

  var new_current_time = new Date(aestTime);

  var hours = new_current_time.getHours() * 3600;
  var minutes = new_current_time.getMinutes() * 60;
  var seconds = 0;
  var total_time = hours + minutes + seconds;
  console.log("total_time", total_time);

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

        gift_card_status: { $ifNull: ["$gift_card_status", 0] },
        gift_card_discount: { $ifNull: ["$gift_card_discount", 0] },

        waiting_hour: "$waitingtime",
        actual_pickup_hrs: {
          $dateToString: {
            format: "%d/%m/%Y %H:%M:%S",
            date: { $add: ["$actual_pickup_time", 3 * 60 * 60 * 1000] },
          },
        },
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
        zone_fare_type: { $ifNull: ["$zone_fare_type", 0] },
        zone_fare_applicable: { $ifNull: ["$zone_fare_applicable", 0] },
        zone_id: { $ifNull: ["$zone_id", 0] },
        zone_fare: { $ifNull: ["$zone_fare", 0] },

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
        model_base_fare: "$model.base_fare",
        model_base_min: "$model.time",
        model_image: "$model.model_image",
        model_image_new: "$model.model_image_new",
        waiting_free: "$model.waiting_free",
        time_to_reach_passen: { $ifNull: ["$time_to_reach_passen", "0"] },
        notification_status: "$notification_status",
        used_wallet_amount: "$used_wallet_amount",
        bookby: { $ifNull: ["$bookby", "2"] },
        additionalMinsFare: { $ifNull: ["$additionalMinsFare", 0] },
        passenger_name: "$passengers.name",
        country_code: "$passengers.country_code",
        passenger_phone: "$passengers.phone",
        passenger_email: "$passengers.email",
        passenger_lastname: "$passengers.lastname",
        passenger_lang: "$passengers.lang",
        device_token: "$passengers.device_token",
        passenger_image: "$passengers.profile_image",
        lateral_end_date: "$passengers.lateral_end_date",
        passenger_wallet_amount: { $ifNull: ["$passengers.wallet_amount", 0] },
        discount_wallet_amount: { $ifNull: ["$passengers.discount_wallet", 0] },
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
        discount_wallet_amount_used: {
          $ifNull: ["$discount_wallet_amount_used", 0],
        },
        //'distance' : '$distance',
        drop_location: "$drop_location",
        promocode: "$promocode",
        book_tag: "$book_tag",
        pas_pay_by: "$passengers.pay_by",
        pas_pay_lmt: "$passengers.trip_amt_limit",
        pass_id_image: "$passengers.id_image",
        tags: "$driver_tags",
        ratings: "$rating",
        hourly_booking: { $ifNull: ["$hourly_booking", 0] },
        total_waiting_time: { $ifNull: ["$total_waiting_time", 0] },
        start_waiting_time: { $ifNull: ["$start_waiting_time", 0] },
        fixed_estimate_fare_type: { $ifNull: ["$fixed_estimate_fare_type", 0] },
        fixed_estimate_result: "$fixed_estimate_result",
        wallet_deduction: { $ifNull: ["$wallet_deduction", 1] },
        surge_price_status: { $ifNull: ["$surge_price_status", 0] },
        surge_price_percentage: { $ifNull: ["$surge_price_percentage", 0] },

        // Sasidharan Jan 17 2025
        couponAmount: { $ifNull: ["$passengers.couponAmount", 0] },
        lastCouponTripId: { $ifNull: ["$passengers.lastCouponTripId", 0] },

        /* Sasidharan apr 29 - 2022 */
        applied_corporate_promocode: {
          $ifNull: ["$applied_corporate_promocode", 0],
        },
        /* Sasidharan May 06 2024 */
        cardDetails: { $ifNull: ["$passengers.cardDetails", []] },
        customerTapPaymentId: {
          $ifNull: ["$passengers.customerTapPaymentId", ""],
        },
        /* Sasidharan Aug 5 2024 */
        premiumCustomer: {
          $ifNull: ["$passengers.premiumCustomer", 0],
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

exports.check_valid_user = async function (q, id, user_type) {
  var deferred = q.defer();

  let match_array = {
    _id: parseInt(id),
  };

  var table_name = t.MDB_PEOPLE;

  if (user_type == "P") table_name = t.MDB_PASSENGERS;

  //console.log("user type",user_type)
  //console.log("table",table_name)

  var collection = db.get().collection(table_name);
    try {
    const results = await collection.find(match_array).toArray();
        //console.log('results',results)
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

// exports.get_log_temp= function(q,token){
// 	var deferred = q.defer();

// 	let match_array = {
// 	"token":parseInt(token)
// 	};

// 	console.log('log temp',match_array);
// 	var collection = db.get().collection(t.MDB_PASSENGERS_LOGS_TEMP);
// 	collection.find(match_array,{'trip_id':1,'distance':1,'actual_distance':1,'actual_amount':1,'trip_fare':1,'fare':1,'tips':1,'passenger_discount':1,'tax_amount':1,'remarks':1,'nightfare_applicable':1,'nightfare':1,'eveningfare_applicable':1,'eveningfare':1,'waiting_time':1,'waiting_cost':1,'minutes_traveled':1,'minutes_fare':1,'pay_mod_id':1,'token':1,'passenger_discount':1,'corporate_amount':1,'pending_amt':1,'driver_edit_status':1,'actual_paid_amt':1,'passenger_pending_amt':1,'wallet_amount_used':1}).toArray(function(err, results) {
// 	 	deferred.resolve(results);
// 		deferred.makeNodeResolver()
// 		result=null;
// 	  });

// 	 return deferred.promise;
// }

exports.get_log_temp = async function (q, token) {
  console.log("getlog_temp");
  try {
    var deferred = q.defer();

    let arguments = [
      {
        $match: { token: token },
      },
      {
        $project: {
          trip_id: { $ifNull: ["$trip_id", 0] },
          distance: { $ifNull: ["$distance", 0] },
          actual_distance: { $ifNull: ["$actual_distance", 0] },
          actual_amount: { $ifNull: ["$actual_amount", 0] },

          /* Sasidharan Feb 27 2023 */
          gift_card_status: { $ifNull: ["$gift_card_status", 0] },
          gift_card_discount: { $ifNull: ["$gift_card_discount", 0] },

          trip_fare: { $ifNull: ["$trip_fare", 0] },
          fare: { $ifNull: ["$fare", 0] },
          tips: { $ifNull: ["$tips", 0] },
          passenger_discount: { $ifNull: ["$passenger_discount", 0] },
          tax_amount: { $ifNull: ["$tax_amount", 0] },
          remarks: { $ifNull: ["$remarks", ""] },
          nightfare_applicable: { $ifNull: ["$nightfare_applicable", 0] },
          nightfare: { $ifNull: ["$nightfare", 0] },
          eveningfare_applicable: { $ifNull: ["$eveningfare_applicable", 0] },
          eveningfare: { $ifNull: ["$eveningfare", 0] },
          waiting_time: { $ifNull: ["$waiting_time", 0] },
          waiting_cost: { $ifNull: ["$waiting_cost", 0] },
          minutes_traveled: { $ifNull: ["$minutes_traveled", 0] },
          minutes_fare: { $ifNull: ["$minutes_fare", 0] },
          pay_mod_id: { $ifNull: ["$pay_mod_id", 0] },
          token: { $ifNull: ["$token", 0] },
          corporate_discount: { $ifNull: ["$corporate_discount", 0] },
          add_amt: { $ifNull: ["$add_amt", 0] },
          pending_amt: { $ifNull: ["$pending_amt", 0] },
          driver_edit_status: { $ifNull: ["$driver_edit_status", 0] },
          actual_paid_amt: { $ifNull: ["$actual_paid_amt", 0] },
          passenger_pending_amt: { $ifNull: ["$passenger_pending_amt", 0] },
          wallet_amount_used: { $ifNull: ["$wallet_amount_used", 0] },
          distance_fare: { $ifNull: ["$distance_fare", 0] },
          fare_calculation_type: { $ifNull: ["$fare_calculation_type", 0] },
          apply_estimate_fare: { $ifNull: ["$apply_estimate_fare", 0] },
          surge_price: { $ifNull: ["$surge_price", 0] },
          /* Sasidharan April 20 2024 */
          discount_wallet_amount_used: {
            $ifNull: ["$discount_wallet_amount_used", 0],
          },
        },
      },
    ];
    console.log("getlogstemp", arguments);
    var collection = db.get().collection(t.MDB_PASSENGERS_LOGS_TEMP);
        try {
      const results = await collection.aggregate(arguments).toArray();
            deferred.resolve(results);
    
    } catch (err) {
      console.log(err);
      throw err;
    }

    return deferred.promise;
  } catch (err) {
    console.log(err);
    throw err;
  }
};

/* Sasidharan April 16 2024 */
exports.get_log_temp_tap_payment_gateway = async function (q, id) {
  try {
    var deferred = q.defer();

    let arguments = [
      {
        $match: { trip_id: id },
      },
      {
        $project: {
          trip_id: { $ifNull: ["$trip_id", 0] },
          distance: { $ifNull: ["$distance", 0] },
          actual_distance: { $ifNull: ["$actual_distance", 0] },
          actual_amount: { $ifNull: ["$actual_amount", 0] },

          /* Sasidharan Feb 27 2023 */
          gift_card_status: { $ifNull: ["$gift_card_status", 0] },
          gift_card_discount: { $ifNull: ["$gift_card_discount", 0] },

          trip_fare: { $ifNull: ["$trip_fare", 0] },
          fare: { $ifNull: ["$fare", 0] },
          tips: { $ifNull: ["$tips", 0] },
          passenger_discount: { $ifNull: ["$passenger_discount", 0] },
          tax_amount: { $ifNull: ["$tax_amount", 0] },
          remarks: { $ifNull: ["$remarks", ""] },
          nightfare_applicable: { $ifNull: ["$nightfare_applicable", 0] },
          nightfare: { $ifNull: ["$nightfare", 0] },
          eveningfare_applicable: { $ifNull: ["$eveningfare_applicable", 0] },
          eveningfare: { $ifNull: ["$eveningfare", 0] },
          waiting_time: { $ifNull: ["$waiting_time", 0] },
          waiting_cost: { $ifNull: ["$waiting_cost", 0] },
          minutes_traveled: { $ifNull: ["$minutes_traveled", 0] },
          minutes_fare: { $ifNull: ["$minutes_fare", 0] },
          pay_mod_id: { $ifNull: ["$pay_mod_id", 0] },
          token: { $ifNull: ["$token", 0] },
          corporate_discount: { $ifNull: ["$corporate_discount", 0] },
          add_amt: { $ifNull: ["$add_amt", 0] },
          pending_amt: { $ifNull: ["$pending_amt", 0] },
          driver_edit_status: { $ifNull: ["$driver_edit_status", 0] },
          actual_paid_amt: { $ifNull: ["$actual_paid_amt", 0] },
          passenger_pending_amt: { $ifNull: ["$passenger_pending_amt", 0] },
          wallet_amount_used: { $ifNull: ["$wallet_amount_used", 0] },
          distance_fare: { $ifNull: ["$distance_fare", 0] },
          fare_calculation_type: { $ifNull: ["$fare_calculation_type", 0] },
          apply_estimate_fare: { $ifNull: ["$apply_estimate_fare", 0] },
          surge_price: { $ifNull: ["$surge_price", 0] },
          /* Sasidharan April 20 2024 */
          discount_wallet_amount_used: {
            $ifNull: ["$discount_wallet_amount_used", 0],
          },
        },
      },
      {
        $sort: {
          _id: -1,
        },
      },
      {
        $limit: 1,
      },
    ];

    var collection = db.get().collection(t.MDB_PASSENGERS_LOGS_TEMP);
        try {
      const results = await collection.aggregate(arguments).toArray();
            deferred.resolve(results);
    
    } catch (err) {
      console.log(err);
      throw err;
    }
    return deferred.promise;
  } catch (err) {
    console.log(err);
    throw err;
  }
};

exports.driver_current_details = async function (q, driver_id) {
  //console.log("approx duration ...");

  var deferred = q.defer();

  var match_array = {
    _id: parseInt(driver_id),
  };

  let arguments = [
    {
      $match: match_array,
    },
    {
      $project: {
        coordinates: "$loc.coordinates",
        bearing: "$bearing",
        accuracy: "$accuracy",
        driver_status: "$status",
      },
    },
  ];
  var collection = db.get().collection(t.MDB_DRIVER_INFO);
    try {
    const results = await collection.aggregate(arguments).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.trip_lists = async function (q, two_days_before) {
  var deferred = q.defer();

  var d = new Date();
  var match_array = [];
  match_array.push({ pickup_time: { $gte: two_days_before } });
  match_array.push({ travel_status: { $in: [0] } });

  arguments = [
    { $match: { $and: match_array } },
    { $sort: { _id: -1 } },
    {
      $project: {
        _id: 1,
        pickupTime: "$pickup_time",
        createDate: "$createdate",
        actPickuptime: "$actual_pickup_time",
        confirmFlag: "$confirm_flag",
        travelStatus: "$travel_status",
      },
    },
    { $sort: { _id: -1 } },
  ];

  var table_name = t.MDB_PASSENGERSLOG;

  var collection = db.get().collection(table_name);
    try {
    const results = await collection.aggregate(arguments).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.free_driver_list = async function (q, model_id, latitude, longitude) {
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

exports.check_trip_request_exists = async function (q, driver_id) {
  var deferred = q.defer();

  let match_array = {
    selected_driver: parseInt(driver_id),
    status: parseInt(1),
  };

  var collection = db.get().collection(t.MDB_DRIVER_REQUEST_DETAILS);
    try {
    const results = await collection.find(match_array).toArray();
        //console.log('results',results)
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.check_trip_exists = async function (q, driver_id) {
  var deferred = q.defer();

  let match_array = {
    driver_id: parseInt(driver_id),
    travel_status: { $in: [9, 2, 5, 3] },
    driver_reply: "A",
  };

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);
    try {
    const results = await collection.find(match_array).toArray();
        //console.log('results',results)
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.get_location_history = async function (q, trip_id) {
  var deferred = q.defer();

  let match_array = {
    trip_id: parseInt(trip_id),
  };

  var collection = db.get().collection(t.MDB_DRIVER_LOCATION_HISTORY);
    try {
    const results = await collection.find(match_array).toArray();
        //console.log('results',results)
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.driver_current_trip = async function (q, driver_id) {
  var deferred = q.defer();

  let match_array = {
    driver_id: parseInt(driver_id),
    travel_status: {
      $in: [parseInt(5), parseInt(3), parseInt(2), parseInt(9)],
    },
    driver_reply: "A",
  };

  var collection = db.get().collection(t.MDB_PASSENGERSLOG);
    try {
    const results = await collection
    .find(match_array)
    .limit(1).toArray();
          //console.log('results',results);
          deferred.resolve(results);
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};

exports.update_waiting_timer = async function (
  q,
  trip_id,
  update_array,
  update_timer_array
) {
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

exports.update_waiting_timer_list = async function (q, trip_id, update_timer_array) {
  var deferred = q.defer();

  if (update_timer_array != "") {
    var collection = db.get().collection(t.MDB_PASSENGERSLOG);

    
        try {
      const data = await collection.updateOne(
      { _id: parseInt(trip_id) },
      { $push: { waiting_timer_list: update_timer_array } },
      { upsert: false });
              deferred.resolve(data);
      
    } catch (err) {
      console.log(err);
      throw err;
    }
  } else {
    deferred.resolve("");
    deferred.makeNodeResolver();
  }

  return deferred.promise;
};

/* Sasidharan apr 15 - 2022 */
exports.getCorporatePromoCode = async function (q, promocode) {
  var deferred = q.defer();
  let filter = {
    promocode: promocode,
    corporate_promocode: 1,
    total_airport_trips: { $gt: 0 },
  };
  let project = {
    projection: {
      _id: 1,
      corporate_promocode: 1,
      total_airport_trips: 1,
    },
  };
  var collection = db.get().collection(t.MDB_PASSENGER_PROMO);
    try {
    const results = await collection.find(filter, project).toArray();
        deferred.resolve(results);
  
  } catch (err) {
    console.log(err);
    throw err;
  }
  return deferred.promise;
};

exports.updateCorporateAirportTrips = async function (q, id) {
  var deferred = q.defer();
  var details = {};
  let filter = {
    _id: id,
  };
  let project = {
    projection: {
      _id: 1,
      corporate_promocode: 1,
      total_airport_trips: 1,
    },
  };
  var collection = db.get().collection(t.MDB_PASSENGER_PROMO);
    try {
    const results = await collection.find(filter, project).toArray();
        if (results.length > 0) {
          try {
            let remainingAirportTrips = results[0].total_airport_trips - 1;
            let updateArray = { total_airport_trips: remainingAirportTrips };
            
                        try {
              const data = await collection.updateOne(
              { _id: parseInt(id) },
              { $set: updateArray },
              { upsert: false });
                              details.status = 1;
                              deferred.resolve(details);
              
            } catch (err) {
              console.log(err);
              throw err;
            }
          } catch (err) {
          }
        } else {
          details.status = 0;
          deferred.resolve(details);
          time_interval = null;
        }
  
  } catch (err) {
    console.log(err);
    throw err;
  }
  return deferred.promise;
};

/* Sasidharan aug 11 2022 */
exports.get_passenger_wallet_amount = async function (passengerId) {
  var collection = db.get().collection(t.MDB_PASSENGERS);
  let filter = {
    _id: parseInt(passengerId),
  };
  let project = {
    projection: {
      _id: 0,
      wallet_amount: 1,
    },
  };
  let passengerWalletAmount = await collection.find(filter, project).toArray();
  return passengerWalletAmount;
};

/* 
  Sasidharan oct 04 2022 
  exports.updateAdditionalMinsFare = async (
    tripId,
    additionalMinsFare,
    baseMinFare
  ) => {
    var collection = db.get().collection(t.MDB_PASSENGERSLOG);
    let filter = {
      _id: parseInt(tripId),
    };
    let updateArray = {
      additionalMinsFare: parseFloat(additionalMinsFare),
      baseMinsFare: parseFloat(baseMinFare),
    };
    let response = await collection.updateOne(
      filter,
      { $set: updateArray },
      { upsert: false }
    );
  };
*/

/* Sasidharan oct 04 2022 */
exports.updateAdditionalMinsFare = async (
  tripId,
  additionalMinsFare,
  baseMinFare,
  additionalMins,
  c_fare,
  min_fare,
  minutes_cost
) => {
  var collection = db.get().collection(t.MDB_PASSENGERSLOG);
  let filter = {
    _id: parseInt(tripId),
  };
  let updateArray = {
    additionalMinsFare: parseFloat(additionalMinsFare),
    baseMinsFare: parseFloat(baseMinFare),
    c_fare: c_fare,
    additionalMins: additionalMins,
    min_fare: min_fare,
    minutes_cost_calculated: minutes_cost,
  };
  console.error("updateArray : ", updateArray);

  let response = await collection.updateOne(
    filter,
    { $set: updateArray },
    { upsert: false }
  );
};

//ramya feb 5 2026
exports.updatePassDisInPassLog = async (tripId, passenger_discount) => {
  var collection = db.get().collection(t.MDB_PASSENGERSLOG);
  let filter = {
    _id: parseInt(tripId),
  };
  let updateArray = {
    passenger_discount: parseFloat(passenger_discount),
  };

  let response = await collection.updateOne(
    filter,
    { $set: updateArray },
    { upsert: false }
  );
};

/* Sasidharan Nov 03 2022 */
exports.checkIfPaymentTokenExists = async (paymentToken) => {
  var collection = db.get().collection(t.MDB_PASSENGER_WALLET_LOG);
  let filter = {
    paymentToken: paymentToken,
    paid_status: 1,
  };
  let project = {
    projection: {
      _id: 0,
      passenger_id: 1,
      paymentToken: 1,
      paymentId: 1,
    },
  };
  let walletLog = await collection.find(filter, project).toArray();
  return walletLog;
};

/* Sasidharan Nov 16 2022 */
exports.createCorporatePendingPaymentLog = async (logInfo) => {
  try {
    let logFilter = { tripId: logInfo.tripId };
    let logValues = { $set: logInfo };
    let logOptions = { upsert: true };

    let logCollection = db.get().collection(t.MDB_CORPORATE_PAYMENT_LOG);
    let response = await logCollection.updateOne(logFilter, logValues, logOptions);
    return true;
  } catch (err) {
    console.log(err);
    return false;
  }
};

/* Sasidharan Nov 16 2022 added corporate_group in projection */
exports.getPromocodeDetails = async function (promocode) {
  let filter = {
    promocode: promocode,
    corporate_promocode: 1,
  };
  let project = {
    projection: {
      _id: 1,
      corporate_promocode: 1,
      total_airport_trips: 1,
      corporate_group: 1,
    },
  };
  var collection = db.get().collection(t.MDB_PASSENGER_PROMO);
  let promocodeDetails = await collection.find(filter, project).toArray();
  return promocodeDetails;
};

exports.getAirportTripCount = async function (passengerId, promocode) {
  const currentDate = new Date();
  let year = currentDate.getFullYear();
  let startDate = year + "-01-01";
  let endDate = year + "-12-31";

  let filter = {
    passengers_id: parseInt(passengerId),
    promocode: promocode,
    travel_status: 1,
    actual_pickup_time: {
      $gte: new Date(startDate),
      $lte: new Date(endDate),
    },
    $or: [
      {
        airport_pickup: 1,
      },
      {
        airport_type: 1,
      },
      {
        airport_type: 2,
      },
    ],
  };

  var collection = db.get().collection(t.MDB_LOGS_COMPLETED);
  let aiportTripCount = await collection.countDocuments(filter);
  return aiportTripCount;
};

/* Sasidharan April 2024 */
exports.getPassengerCustomerId = async (passengerId) => {
  let match = {
    _id: parseInt(passengerId),
  };
  var collection = db.get().collection(t.MDB_PASSENGERS);
  let passengerDetails = await collection.findOne(match, {
    projection: {
      _id: 1,
      name: 1,
      lastname: 1,
      email: 1,
      country_code: 1,
      phone: 1,
      customerTapPaymentId: 1,
    },
  });
  return passengerDetails;
};

// ramya may 14 2026
exports.getHesabeCustomerId = async (passengerId) => {
  let match = {
    _id: parseInt(passengerId),
  };
  var collection = db.get().collection(t.MDB_PASSENGERS);
  let passengerDetails = await collection.findOne(match, {
    projection: {
      _id: 1,
      name: 1,
      email: 1,
      phone: 1,
      hesabeCustomerPaymentId: 1,
    },
  });
  return passengerDetails;
};
/* Sasidharan April 2024 */
exports.updatePassenger = async (passengerId, fieldsToUpdate) => {
  let match = {
    _id: parseInt(passengerId),
  };
  console.error("calling update");
  var collection = db.get().collection(t.MDB_PASSENGERS);
  let passengerDetails = await collection.updateOne(match, {
    $set: fieldsToUpdate,
  });
  return passengerDetails;
};

/* Sasidharan May 06 2024 */
exports.getCustomerCards = async (passengerID) => {
  let filter = {
    _id: parseInt(passengerID),
  };
  var collection = db.get().collection(t.MDB_PASSENGERS);
  let passengerDetails = await collection.findOne(filter, {
    projection: {
      _id: 1,
      customerCards: 1,
    },
  });
  return passengerDetails && passengerDetails.customerCards
    ? passengerDetails.customerCards
    : [];
};

/* Sasidharan May 13 2024 */
/* Sasidharan Sep 16 2024 */
exports.changePaymentProcessStatus = async (tripId, updateArray) => {
  let collection = db.get().collection(t.MDB_PASSENGERSLOG);
  let updateResponse = await collection.updateOne(
    { _id: parseInt(tripId) },
    { $set: updateArray }
  );
  return updateResponse;
};

exports.updateCardStatus = async (customerId) => {
  let collection = db.get().collection(t.MDB_PASSENGERS);
  let updateResponse = await collection.updateOne(
    { customerTapPaymentId: customerId },
    { $set: { hasCard: 1 } }
  );
  return updateResponse;
};

/* Sasidharan sep 16 2024 */
exports.updateTapPaymetFailure = async (tripId, failureDetails) => {
  let collection = db.get().collection(t.MDB_PASSENGERSLOG);
  let updateResponse = await collection.updateOne(
    { _id: parseInt(tripId) },
    { $set: failureDetails }
  );
  return updateResponse;
};

exports.updateWalletAmount = async (passengerId, amountToDeduct) => {
  let collection = db.get().collection(t.MDB_PASSENGERS);
  let updateResponse = await collection.updateOne(
    { _id: parseInt(passengerId) },
    { $inc: { wallet_amount: +amountToDeduct } }
  );
  return updateResponse;
};

/* Sasidharan sep 16 2024 */
exports.insertTapPaymentFailedLog = async (log) => {
  let collection = db.get().collection("tapPaymentGatewayFailedLog");
  let insertResponse = await collection.insertOne(log);
  return insertResponse;
};

exports.update_promocode_new = async function (q, promocode, passenger_phone) {
  var deferred = q.defer();
  let match_array = { promocode: promocode, promo_type: "1" };
  var collection = db.get().collection(t.MDB_PASSENGER_PROMO);
  
    try {
    const promo_results = await collection.updateOne(
    match_array,
    { $inc: { total_applied: 1 } });

          if (promo_results.modifiedCount == 0) {
            let match_array2 = {
              promocode: promocode,
              customer_number: passenger_phone,
            };
            
                        try {
              const promo_results2 = await collection.updateOne(
              match_array2,
              { $inc: { total_applied: 1 } });
                              deferred.resolve(promo_results2);
              
            } catch (err) {
              console.log(err);
              throw err;
            }
          } else {
            deferred.resolve(promo_results);
          }
    
  } catch (err) {
    console.log(err);
    throw err;
  }

  return deferred.promise;
};
