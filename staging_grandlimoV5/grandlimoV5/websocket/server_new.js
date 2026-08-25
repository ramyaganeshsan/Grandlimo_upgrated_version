global.socketobj = {};
global.socketevents = [];
var q = require("q");
var locationService = require("../lib/driver_location_service");
var validate = require("validate.js");
var i18n = require("i18n");
global.active_drivers = [];

//const logs = require('../utils/logger').logs;

module.exports = function (io) {
  // Emit welcome message on connection

  io.on("connection", function (socket) {
    console.log(socket.id + " - connected..");

    console.log(socket.handshake.query);
    var sessiondriver =
      socket.handshake.query.driverid != undefined
        ? "D-" + socket.handshake.query.driverid
        : "";
    var sessionpassenger =
      socket.handshake.query.passengerid != undefined
        ? "P-" + socket.handshake.query.passengerid
        : "";

    if (sessiondriver != "") global.socketobj[sessiondriver] = socket;

    if (sessionpassenger != "") global.socketobj[sessionpassenger] = socket;

    if (global.socketobj[sessiondriver] != undefined) {
      //global.socketobj[sessiondriver].on('reconnect', function(event)
      //{
      var driver_array = { driver_id: sessiondriver };

      // locationService.get_driver_data(q,sessiondriver).then(function(checkresults){
      // 	try
      // 	{
      // 	if(checkresults.length > 0)
      // 	{
      //driver_array.model_id = checkresults[0].model_id;
      global.active_drivers[socketobj[sessiondriver].id] = driver_array;
      console.log("global.active_drivers", global.active_drivers);
      // 	}
      // 	}
      // 	catch(err)
      // 	{
      // 		console.log(err);
      // 	}
      // });
      //console.log(event);

      //});
    }

    if (global.socketobj[sessiondriver] != undefined) {
      global.socketobj[sessiondriver].on("disconnect", function (event_name) {
        console.log("Disconnected.. - " + socketobj[sessiondriver].id);
        global.active_drivers.splice(socket.id, 1);
        console.log("global.active_drivers", global.active_drivers);
        //console.log( event_name );
      });
    }

    var message = {};

    socket.on("driver_logout_admin", function (data) {
      console.log("driver_logout_admin");

      message.message = i18n.__("driver_logout_via_admin");
      message.status = 15;

      if (global.active_drivers.includes(data))
        global.socketobj[data].emit("location_update_res", message);
    });

    socket.on("site_settings_change", function (data) {
      apimodel.SiteSettings(q).then(function (siteinforesults) {
        if (siteinforesults.length > 0) {
          global.settings = siteinforesults[0];
        } else {
          global.settings = {};
        }
      });
    });

    socket.on("refresh_driver", function (data) {
      console.log("refresh_driver" + data);

      message.message = i18n.__("refresh_driver");
      message.status = 18;

      if (global.active_drivers.includes(data))
        global.socketobj[data].emit("refresh_driver", message);
    });

    socket.on("dispatcher_cancel", function (data) {
      console.log("dispatcher_cancel...." + data);

      message.message = i18n.__("dispatcher_trip_cancelled");
      message.status = 10;

      if (global.active_drivers.includes(data))
        global.socketobj[data].emit("location_update_res", message);
    });
    //if(global.socketobj[sessiondriver] != undefined)
    //{

    socket.on("location_update", function (data) {
      var validate_error = validateLocationUpdate(q, data);

      if (validate_error != undefined) {
        if (validate_error[0]) {
          message.message = validate_error[0];
          message.status = -1;

          //console.log(message);
          global.socketobj[sessiondriver].emit("location_update_res", message);
        } else {
          message.message = i18n.__("validation_error");
          message.status = -1;
          global.socketobj[sessiondriver].emit("location_update_res", message);
        }
      } else {
        let outputData;

        //outputData.message = 'driver_update'+data.driver_id;
        // outputData.status = 1;

        message.message = i18n.__("location_updated");
        message.status = 1;

        locationService
          .check_trip_request(q, data)
          .then(function (checkresults) {
            var driver_status = data.status;

            console.log(driver_status);

            console.log("checkresults", checkresults);

            var status = checkresults.status;

            console.log("checkresults status", status);

            if (status == 1) {
              var details = checkresults.details;
              message.message = i18n.__("api_request_confirmed_passenger");
              message.status = 5;
              message.details = details;
              //console.log(message);
              //socket.emit("location_update_res",message);
            } else if (status == 20 && driver_status == "B") {
              var details = checkresults.details;
              message.message = i18n.__(-"dispatcher_trip_cancelled");
              message.status = 10;
              message.details = details;

              //console.log(message);
              //socket.emit("location_update_res",message);
            } else if (status == 4 && driver_status == "B") {
              var details = checkresults.details;
              message.message = i18n.__("passenger_trip_cancelled");
              message.status = 7;
              message.details = details;
              //console.log(message);
              //socket.emit("location_update_res",message);
            } else if (status == 8) {
              var details = checkresults.details;
              message.message = i18n.__("trip_fare_updated");
              message.status = 21;
              message.details = details;
              //console.log(message);
              //socket.emit("location_update_res",message);
            } else {
              message.message = i18n.__("location_updated");
              message.status = 1;
              message.details = [];
            }

            locationService
              .updateLocation(q, data)
              .then(function (updateresults) {
                try {
                  console.log("status", data.status);

                  if (data.status == "A") {
                    locationService
                      .saveLocation(q, data)
                      .then(function (results) {
                        //console.log(message);
                        //message.distance = 0;
                        message.runningtime = "00:00:00";
                        global.socketobj[sessiondriver].emit(
                          "location_update_res",
                          message
                        );
                      });
                  } else {
                    console.log("active drivers", global.active_drivers);

                    locationService
                      .get_driver_data(q, sessiondriver)
                      .then(function (checkresults) {
                        try {
                          if (checkresults.length > 0) {
                            driver_array.model_id = checkresults[0].model_id;
                            global.active_drivers[socketobj[sessiondriver].id] =
                              driver_array;
                            console.log(
                              "global.active_drivers",
                              global.active_drivers
                            );
                          }
                        } catch (err) {
                          console.log(err);
                        }
                      });
                    socket.broadcast.emit(
                      "nearest_driver_list",
                      global.active_drivers
                    );
                    console.log("emited");
                    global.socketobj[sessiondriver].emit(
                      "location_update_res",
                      message
                    );
                  }
                } catch (err) {
                  console.log(err);
                }
              });
          });
      }
    });

    if (global.socketobj[sessiondriver] != undefined) {
      global.socketobj[sessiondriver].removeAllListeners("connect");

      // //Sending Data to users on connect
      // global.socketobj[sessiondriver].emit(
      // 				'broadcast_data',
      // 				{
      // 					message: 'Welcome!',
      // 					id: socket.id
      // 				}
      // 			);

      global.socketobj[sessiondriver].on("error", function (error) {
        console.log("Error - " + JSON.stringify(error));
      });
    }
  });

  // var pass_io = io.of('/passenger');

  // pass_io.on('connection', function(socket){

  // });

  // var web_io = io.of('/web');

  // web_io.on('connection', function(socket){
  // 	console.log('someone connected');

  // });
};

function validateLocationUpdate(q, input) {
  var constraints = {
    driver_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    status: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    bearing: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    accuracy: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    locations: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}
