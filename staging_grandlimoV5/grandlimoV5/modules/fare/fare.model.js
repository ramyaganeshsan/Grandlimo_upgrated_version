var apimodel = require("../../models/passapimodel_v1");
var db = require("../../config/dbconnection");
var t = require("../../config/table_config.json");

exports.calculateFare = async (
  q,
  motor_model,
  latitude,
  longitude,
  drop_latitude,
  drop_longitude,
  timeinterval,
  version_no
) => {
  var fare_details = [];
  var fare_list = [];

  let model_details = await apimodel.all_model_fare_details(q, "");
  let zone_fare_list = await calculateZoneFare(
    q,
    longitude,
    latitude,
    drop_longitude,
    drop_latitude,
    version_no
  );
  let [pickupAirport, dropAirport] = await Promise.all([
    isAirportZone(longitude, latitude),
    isAirportZone(drop_longitude, drop_latitude),
  ]);

  if (
    (pickupAirport && pickupAirport.length) ||
    (dropAirport && dropAirport.length)
  ) {
    model_details.forEach((element) => {
      var final_fare = {
        model_id: element._id,
        approx_fare: 0,
        surge_display_fare: 0,
        surge_fare: 0,
        zone_fare_applicable: 0,
        zone_id: 0,
        zone_fare_type: "",
        airport : 1,
      };

      if (pickupAirport && pickupAirport.length) {
        final_fare.approx_fare = parseFloat(
          element.airport_pickup_fare
        ).toFixed(2);
        final_fare.airport_pickup = 1;
      } else {
        final_fare.approx_fare = parseFloat(element.airport_drop_fare).toFixed(
          2
        );
        final_fare.airport_drop = 1;
      }

      fare_list.push(final_fare);
    });

    return fare_list;
  }

  var tax = global.settings.tax;
  var j = 0;
  for (let i = 0; i < model_details.length; i++) {
    let element = model_details[i];

    let total_fare = 0;
    let minute_per_time = 0;
    let minutes_fare = 0;
    let tax_amount = 0;

    let base_fare = element.base_fare;
    let min_fare = element.min_fare;
    let minutes_cost = element.minutes_fare;
    let time = element.time;
    let per_minutes_fare = element.per_minutes_fare;

    var minutes = timeinterval / 60;
    minutes = Math.ceil(minutes);

    if (minutes <= time && global.settings.fare_calculation_type == 2) {
      total_fare = minutes_fare = base_fare;
    }

    if (
      global.settings.fare_calculation_type == 2 ||
      global.settings.fare_calculation_type == 3
    ) {
      if (minutes > 0 && minutes > time) {
        minute_per_time = Math.ceil(minutes - time);
        minutes_cost = minutes_cost + minute_per_time * per_minutes_fare;
        c_fare = total_fare + minutes_cost;
        if (c_fare < min_fare) {
          total_fare = minutes_fare = roundUp(min_fare, 1);
        } else {
          total_fare = minutes_fare = roundUp(c_fare, 1);
        }
      }
    }

    trip_fare = total_fare;
    if (global.settings.q8taxi_enable == 1) {
      tax_amount = (tax / 100) * total_fare;
      total_fare = total_fare + tax_amount;
    }

    let zoneFareDetails = await filterZoneFareByModel(
      q,
      zone_fare_list,
      element
    );
    var zone_fare_applicable = 0;
    var zone_fare_type = 0;
    var zone_id = 0;
    var zone_fare = 0;
    if (
      zoneFareDetails.total_fare &&
      zoneFareDetails.total_fare != "" &&
      zoneFareDetails.total_fare != 0
    ) {
      total_fare = zoneFareDetails.total_fare;
      zone_fare = zoneFareDetails.total_fare;
    }

    if (
      zoneFareDetails.zone_fare_applicable &&
      zoneFareDetails.zone_fare_applicable != ""
    ) {
      zone_fare_applicable = zoneFareDetails.zone_fare_applicable;
    }

    if (
      zoneFareDetails.zone_fare_type &&
      zoneFareDetails.zone_fare_type != ""
    ) {
      zone_fare_type = zoneFareDetails.zone_fare_type;
    }

    if (zoneFareDetails.zone_id && zoneFareDetails.zone_id != "") {
      zone_id = zoneFareDetails.zone_id;
    }

    fare_details.fare_calculation_type = global.settings.fare_calculation_type;

    let driver_list = await apimodel.nearest_drivers(
      q,
      element.model_id,
      latitude,
      longitude
    );

    j++;

    let surge_pricing_status = "A";
    if (element.surge_pricing_status == "A" && zone_fare_applicable != 1) {
      surge_pricing_status = "A";
    } else {
      surge_pricing_status = "I";
    }

    var total_drivers = element.total_drivers;
    var free_drivers = driver_list.length;

    var free_drivers_percentage =
      (parseInt(free_drivers) / parseInt(total_drivers)) * 100;
    var surge_pricing_interval = element.surge_pricing_interval;

    var percentage_arr = [];
    surge_pricing_interval.forEach(function (curr) {
      percentage_arr.push(curr.from);
    });

    var applied_percentage = closest(percentage_arr, free_drivers_percentage);

    var surge_fare = 0;
    var surge_display_fare = 0;
    surge_pricing_interval.forEach(function (curr) {
      if (parseFloat(curr.from) == parseFloat(applied_percentage)) {
        surge_fare = curr.fare;
        surge_display_fare = curr.display_fare;
      }
    });

    let surgePriceToday = global.settings.surge_on_week_days;
    const weekday = [
      "Sunday",
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
    ];
    const currentDate = new Date();
    let day = weekday[currentDate.getDay()];
    let surgePriceStatus = surgePriceToday[day];
    let surge_price = 0;

    var final_fare = {
      model_id: element.model_id,
      approx_fare: total_fare,
      surge_display_fare,
      surge_fare: surge_price,
      zone_fare_applicable,
      zone_id,
      zone_fare_type,
      airport : 0,
      airport_pickup : 0,
      airport_drop : 0
    };

    if (surgePriceStatus == 0) {
      surge_pricing_status = "I";
      surge_display_fare = 0;
    } else {
      surge_price = (surge_fare / 100) * total_fare;
      surge_price = parseFloat(surge_price).toFixed(2);
      final_fare.surge_fare = surge_price;
      final_fare.total_fare = parseFloat(total_fare) + parseFloat(surge_price);
    }

    fare_list.push(final_fare);
  }
  return fare_list;
};

var calculateZoneFare = async function (
  q,
  longitude,
  latitude,
  drop_longitude,
  drop_latitude
) {
  let zoneFareList = {};
  let zoneDetails = await apimodel.search_zone_service(
    q,
    longitude,
    latitude,
    false
  );
  if (zoneDetails.length > 0) {
    const zone_id = zoneDetails[0]._id ? zoneDetails[0]._id : 0;
    if (zone_id != 0) {
      let zoneFare = await apimodel.get_zone_fare(q, zone_id, "");
      if (zoneFare.length > 0) {
        zoneFareList.zoneFare = zoneFare;
        zoneFareList.zone_fare_type = parseInt(1);
      }
    }
  }

  if (
    drop_latitude &&
    drop_longitude &&
    drop_latitude != "" &&
    drop_longitude != ""
  ) {
    let zoneDetails = await apimodel.search_zone_service(
      q,
      drop_longitude,
      drop_latitude,
      true
    );
    if (zoneDetails.length > 0) {
      const zone_id = zoneDetails[0]._id ? zoneDetails[0]._id : 0;
      if (zone_id != 0) {
        let zoneFare = await apimodel.get_zone_fare(q, zone_id, "");
        if (zoneFare.length > 0) {
          zoneFareList.zoneFare = zoneFare;
          zoneFareList.zone_fare_type = parseInt(2);
        }
      }
    }
  }
  return zoneFareList;
};

var filterZoneFareByModel = async function (q, zone_fare_list, element) {
  let zoneFareDetails = {};
  if (zone_fare_list && zone_fare_list.zoneFare) {
    let zoneFare = zone_fare_list.zoneFare.filter((item) => {
      return item.model_id === element.model_id;
    });

    if (zoneFare.length > 0) {
      zoneFareDetails.zone_fare_applicable = parseInt(1);
      zoneFareDetails.zone_fare_type = zone_fare_list.zone_fare_type;
      zoneFareDetails.zone_id = zoneFare[0].zone_id ? zoneFare[0].zone_id : 0;
      zoneFareDetails.total_fare = zoneFare[0].zone_fixed_fare
        ? zoneFare[0].zone_fixed_fare
        : 0;
    }
  }
  return zoneFareDetails;
};

function closest(array, num) {
  var i = 0;
  var minDiff = 1000;
  var ans;
  for (i in array) {
    var m = Math.abs(num - array[i]);
    if (m < minDiff) {
      minDiff = m;
      ans = array[i];
    }
  }
  return ans;
}

function roundUp(num, precision) {
  precision = Math.pow(10, precision);
  return Math.ceil(num * precision) / precision;
}

const isAirportZone = function (longitude, latitude) {
  let match_array = {
    is_airport: 1,
    status: "A",
    loc: {
      $near: {
        $geometry: {
          type: "Point",
          coordinates: [parseFloat(longitude), parseFloat(latitude)],
        },
        $maxDistance: 1000,
      },
    },
  };
  var collection = db.get().collection(t.MDB_ZONES);
  let results = collection
    .find(match_array, { _id: 1, zone_name: 1 })
    .limit(1)
    .toArray();
  return results;
};
