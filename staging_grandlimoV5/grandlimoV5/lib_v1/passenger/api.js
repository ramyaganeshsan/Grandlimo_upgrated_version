var apimodel = require("../../models/passapimodel_v1");
var favicon = require("../../config/favicon.json");
var config = require("../../config/common_config.json");
var q = require("q");
var validator = require("validator");
var fs = require("fs");
var validate = require("validate.js");
var dateFormat = require("dateformat");
var time = require("time");
var i18n = require("i18n");
var t = require("../../config/table_config.json");
var uniqid = require("uniqid");

exports.getcoreconfig = function (q, req) {
  var deferred = q.defer();
  io = req.io;
  //var hostname = req.headers.host;

  var hostname = global.settings.base_url;

  var appRoot = global.settings.docroot;
  const lang = req.query.lang;

  //console.log('approot',appRoot);

  //console.log(hostname,'------------>---------',appRoot);

  // var airport_terminals = [];
  //    apimodel.get_airport_terminals(q).then(function(airport_result){
  //    	airport_terminals = airport_result;
  //    });

  apimodel.getSiteInfo(q).then(function (results) {
    //console.log(results);
    var details = {};
    if (results.length > 0) {
      details = results[0];

      if (lang === "ar") {
        details.conversation = details.conversation_ar;
        details.door_assistance = details.door_assistance_ar;
        details.airportSignOptions = details.airportSignOptions_arr;
      }

      delete details.conversation_ar;
      delete details.door_assistance_ar;
      delete details.airportSignOptions_arr;
      // ramya 21 nov 2023
      details.max_passengers_limit = details.max_passengers_limit;
      // details.door_assistance = details.door_assistance || [];
      // details.conversation = details.conversation || [];
      // details.airportSignOptions = details.airportSignOptions || [];
      details.noimage_base = hostname + "/public/images/noimages109.png";
      details.image_base = hostname + "/pubic/images/";
      details.driver_image = hostname + "/public/uploads/driver_image/";
      details.site_logo = hostname + "/public/uploads/site_logo/logo.png";
      details.sitead_image = "";
      details.fav_icons = favicon;
      details.child_account_types = [];
      details.recent_location = [];
      details.q8taxi_enable = parseInt(global.settings.q8taxi_enable);
      details.asset_key = config.ASSET_KEY;
      details.int_key = config.INT_KEY;

      details.drivers_unavailable_msg = req.__("drivers_unavailable_msg");
      details.luxury_model_msg = req.__("luxury_model_msg");
      details.no_service_title = req.__("no_service_title");
      details.no_service_tagline1 = req.__("no_service_tagline1");
      details.no_service_tagline2 = req.__("no_service_tagline2");

      details.drivers_unavailable_msg_ar = req.__("drivers_unavailable_msg_ar");
      details.luxury_model_msg_ar = req.__("luxury_model_msg_ar");
      details.no_service_title_ar = req.__("no_service_title_ar");
      details.no_service_tagline1_ar = req.__("no_service_tagline1_ar");
      details.no_service_tagline2_ar = req.__("no_service_tagline2_ar");

      apimodel.cmsPages(q).then(function (cmsresults) {
        //console.log(cmsresults);
        if (cmsresults.length > 0) details.cms_pages = cmsresults;

        apimodel.company_model_details(q).then(async function (modelresults) {
          if (modelresults.length > 0) {
            var i = 0;

            modelresults.forEach(function (val) {
              // console.log(val.hourly_fare_list[1],'<-- 1 hrs fare--->',val._id);
              // var hourly_fare_list = val.hourly_fare_list;
              // var minutes_traveled = 76;
              // if(hourly_fare_list){
              // 	var add_fare_hours=total_fare = 0;
              // 	fare_hours_fixed = (minutes_traveled/60);
              // 	var fare_hours = Math.floor(fare_hours_fixed);
              // 	var float_times = (fare_hours_fixed % 1).toFixed(2);
              // 	//Fixed above 0.25 percent ex: 1.20 hrs means 2 hrs round
              // 	if(float_times>0.25){
              // 		var add_fare_hours = 1;
              // 	}

              // 	//due to below 15 min only, then assign 1 hr fare
              // 	if(fare_hours == 0 && add_fare_hours==0){
              // 		fare_hours = 1;
              // 	}

              // 	final_hours = fare_hours + add_fare_hours;
              // 	console.log(final_hours,'final_hours----minite->',float_times);
              // 	if(hourly_fare_list[final_hours]){
              // 		total_fare = trip_fare = hourly_fare_list[final_hours];
              // 	}
              // 	console.log(total_fare,'---tot fare');
              // }

              modelresults[i].model_image_2 = model_image_exists(
                hostname,
                appRoot,
                val.model_image_2
              );
              modelresults[i].model_image = model_image_exists(
                hostname,
                appRoot,
                val.model_image
              );
              modelresults[i].model_image_new = model_image_exists(
                hostname,
                appRoot,
                val.model_image_new
              );
              modelresults[i].model_image_fare = model_image_exists_fare(
                hostname,
                appRoot,
                val.model_fare_image
              );
              modelresults[i].model_image_thumb = model_image_exists(
                hostname,
                appRoot,
                val.model_image_thumb
              );
              modelresults[i].model_image_unfocus = model_image_exists(
                hostname,
                appRoot,
                val.model_image_unfocus
              );
              i++;
              if (lang === "ar") {
                val.model_name = val.model_name_ar;
                val.category_name = val.category_name_ar;
              }

              delete val.model_name_ar;
              delete val.category_name_ar;

              return val;
            });

            details.model_details = modelresults;
          } else {
            details.model_details = [];
          }

          let ratings = await apimodel.get_ratings_info(q);
          details.ratings = ratings;

          apimodel.get_cancellation_reasons(q).then(function (cancel_result) {
            if (cancel_result.length > 0) {
              var cancellation_reasons = cancel_result;
            } else {
              var cancellation_reasons = [];
            }
            details.cancellation_reasons = cancellation_reasons;

            apimodel.get_airport_terminals(q).then(function (airport_result) {
              if (results.length > 0) {
                var airport_terminals = airport_result;
              } else {
                var airport_terminals = [];
              }

              details.airport_terminals = airport_terminals;

              let message = {
                message: req.__("success"),
                detail: details,
                status: 1,
              };
              deferred.resolve(message);
              deferred.makeNodeResolver();
              result = null;
            });
          });
        });
      });

      //console.log(details);
    }
  });

  return deferred.promise;
};

function model_image_exists(hostname, appRoot, val) {
  //console.log('appRoot',appRoot+'/'+config.MODEL_IMGPATH+val);
  try {
    if (fs.existsSync(appRoot + "/" + config.MODEL_IMGPATH + val)) {
      return hostname + "/" + config.MODEL_IMGPATH + val;
    } else {
      return hostname + "/" + config.NO_IMAGE;
    }
  } catch (ex) {
    console.log("error", ex);
  }
}

/* Sasidharan oct 27 2022 */
function model_image_exists_fare(hostname, appRoot, val) {
  //console.log('appRoot',appRoot+'/'+config.MODEL_IMGPATH+val);
  try {
    if (fs.existsSync(appRoot + "/" + config.MODEL_IMGPATH + val)) {
      return (
        hostname + "/" + config.MODEL_IMGPATH + val + "?time=updated_image"
      );
    } else {
      return hostname + "/" + config.NO_IMAGE;
    }
  } catch (ex) {
    console.log("error", ex);
  }
}

function convsecstoformat(secs) {
  try {
    var hours = secs / 3600;
    var minutes = (secs - hours * 3600) / 60;
    var seconds = secs - (hours * 3600 + minutes * 60);

    hours = zeropadding(hours.toFixed(0));
    minutes = zeropadding(minutes.toFixed(0));
    seconds = zeropadding(seconds.toFixed(0));

    if (hours == "00" && hours == "") {
      return minutes + ":" + seconds;
    } else {
      return hours + ":" + minutes + ":" + seconds;
    }
  } catch (err) {
    console.log(err);
  }
}

function zeropadding(a) {
  h = a < 10 ? "0" + a : a;

  return h;
}

function getCurrentDate(timezone, date_format) {
  var now = new time.Date();
  now.setTimezone(timezone);
  return dateFormat(new Date(now.toLocaleDateString()), "yyyy-mm-dd");
}

function getStartingDateAndEndingDate(timezone) {
  var now = new time.Date();
  now.setTimezone(timezone);
  start_date = dateFormat(
    new Date(now.toLocaleDateString()),
    "yyyy-mm-dd 00:00:00"
  );
  ending_date = dateFormat(
    new Date(now.toLocaleDateString()),
    "yyyy-mm-dd 23:59:59"
  );

  var start_date = new time.Date(start_date, timezone);
  var ending_date = new time.Date(ending_date, timezone);
  return [
    new Date(start_date.toLocaleString()),
    new Date(ending_date.toLocaleString()),
  ];
}
