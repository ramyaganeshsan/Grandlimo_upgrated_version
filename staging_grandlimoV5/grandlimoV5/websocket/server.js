global.socketobj = {};
global.passengerObj = {};
global.socketevents = [];
var q = require("q");
var locationService = require("../lib_v1/driver_location_service");
var passcommon = require("../lib_v1/passenger/common");
var common = require("../lib_v1/common");
var dispatcher = require("../lib_v1/dispatcher/dispatcher_booking_list");
var validate = require("validate.js");
var i18n = require("i18n");
var active_drivers = [];
var active_passengers = [];

//const logs = require('../utils/logger').logs;

module.exports = function (io) {
  // Emit welcome message on connection
  io.on("connection", function (socket) {
    var connection = io.engine.clientsCount;

    console.error("socket connections............", connection);
    console.log(socket.id + " - connected..");

    // io.use(function(socket, next) {
    //   var handshakeData = socket.request;
    //   var userid = '';
    //   var usertype = '';

    //  if(socket.handshake.query.driverid != undefined)
    //  {
    // 	 userid = socket.handshake.query.driverid;
    // 	 usertype = 'D';
    //  }

    // if(socket.handshake.query.passengerid != undefined)
    // {
    //   	userid = socket.handshake.query.passengerid;
    //   	usertype = 'P';
    // }

    // common.check_valid_user(q,userid,usertype).then(function(userstatus){

    // 	////console.log('validate status',userstatus.status);
    // 	if(userstatus.status == 0)
    // 	{
    // 		//console.log("Invalid user");
    // 		next(new Error('not authorized'));
    // 	}
    // 	else
    // 	{
    // 		//console.log("Valid user");
    // 		next();
    // 	}

    // 	});

    // });

    ////console.log( socket.handshake);
    console.log(
      "socket.handshake.query.driverid...." + socket.handshake.query.driverid
    );
    var sessiondriver =
      socket.handshake.query.driverid != undefined
        ? "D-" + socket.handshake.query.driverid
        : "";
    var sessionpassenger =
      socket.handshake.query.passengerid != undefined
        ? "P-" + socket.handshake.query.passengerid
        : "";

    var passengerlanguage = "";

    if (sessiondriver != 0) {
      active_drivers.push(sessiondriver);
    }

    if (sessionpassenger != 0) {
      active_passengers.push(sessionpassenger);
    }

    //console.log('active_passengers',active_passengers);
    //console.log('active_drivers',active_drivers);

    //intialize driver
    if (sessiondriver != "") global.socketobj[sessiondriver] = socket;

    //intialize passenger
    console.error("sessionpassenger............", sessionpassenger);
    if (sessionpassenger != "") {
      console.error("sessionpassenger............is not empty");

      passengerlanguage =
        socket.handshake.query.lang !== undefined
          ? socket.handshake.query.lang
          : "en";
      global.socketobj[sessionpassenger] = socket;
      global.passengerObj[sessionpassenger] = new Passenger(passengerlanguage);
      i18n.setLocale(passengerlanguage);
      console.error("query.lang............", socket.handshake.query.lang);
      console.error("passengerlanguage............", passengerlanguage);
    }

    // var dspio = io.of('/dispatcher');

    // dspio.on('connection', function(socket){
    // 	console.log('someone connected');
    // });

    socket.on("connect", function () {
      if (type(sessionpassenger) != "undefined") {
        console.log("passenger connected ...." + sessionpassenger);
        global.socketobj[sessionpassenger] = socket;
      }

      if (type(sessiondriver) != "undefined") {
        console.log("passenger connected ...." + sessiondriver);
        global.socketobj[sessiondriver] = socket;
      }
    });

    //			AllBookingList()

    var message = {};

    //notification for driver logout
    socket.on("driver_logout_admin", function (data) {
      //console.log('driver_logout_admin')

      message.message = i18n.__("driver_logout_via_admin");
      message.status = 15;

      if (active_drivers.includes(data))
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
      //console.log('refresh_driver'+data)

      message.message = i18n.__("refresh_driver");
      message.status = 18;

      if (active_drivers.includes(data))
        global.socketobj[data].emit("refresh_driver", message);
    });

    //Notification for Dispatcher Cancel
    socket.on("dispatcher_cancel", function (data) {
      //console.log('dispatcher_cancel....'+data);

      message.message = i18n.__("dispatcher_trip_cancelled");
      message.status = 10;

      // if(active_drivers.includes(data))
      // global.socketobj[data].emit('location_update_res',message);
      var sessiondriver = "D-" + data;
      common.emitLocDriver(sessiondriver, message);
    });

    if (global.socketobj[sessiondriver] != undefined) {
      global.socketobj[sessiondriver].on("location_update", function (data) {
        console.error("calling driver location update socket");
        let message = {};

        let lang = global.socketobj[sessiondriver].handshake.query.lang || "en";
        i18n.setLocale(lang);
        //console.log("driverlocationupdate-start",sessiondriver,new Date());

        var validate_error = validateLocationUpdate(q, data);

        if (validate_error != undefined) {
          if (validate_error[0]) {
            message.message = validate_error[0];
            message.status = -1;

            ////console.log(message);
            if (global.socketobj[sessiondriver] != "");
            common.emitLocDriver(sessiondriver, message);
          } else {
            message.message = i18n.__("validation_error");
            message.status = -1;
            //global.socketobj[sessiondriver].emit("location_update_res",message);
            common.emitLocDriver(sessiondriver, message);
          }
        } else {
          let outputData;

          message.message = i18n.__("location_updated");
          message.status = 1;

          locationService
            .check_trip_request(q, data)
            .then(function (checkresults) {
              var driver_status = data.status;

              var status = checkresults.status;

              //console.log('driver check status',status);

              if (status == 1) {
                var details = checkresults.details;
                message.message = i18n.__("api_request_confirmed_passenger");
                message.status = 5;
                message.details = details;
                //console.log("check trip request .................................",sessiondriver);
                //socket.emit("location_update_res",message);
              } else if (status == 20 && driver_status == "B") {
                var details = checkresults.details;
                message.message = i18n.__("dispatcher_trip_cancelled");
                message.status = 10;
                message.details = details;

                ////console.log(message);
                //socket.emit("location_update_res",message);
              } else if (status == 4 && driver_status == "B") {
                var details = checkresults.details;
                message.message = i18n.__("passenger_trip_cancelled");
                message.status = 7;
                message.details = details;
                ////console.log(message);
                //socket.emit("location_update_res",message);
              }
              // else if(status == 8 && driver_status == 'B')
              // {
              // 	var details = checkresults.details;
              // 	message.message = i18n.__('trip_fare_updated');
              // 	message.status = 21;
              // 	message.details = details;
              // 	////console.log(message);
              // 	//socket.emit("location_update_res",message);
              // }
              else {
                message.message = i18n.__("location_updated");
                message.status = 1;
                message.details = [];
              }

              locationService
                .updateLocation(q, data)
                .then(function (updateresults) {
                  try {
                    //	console.log('global.socketobj',global.socketobj);

                    if (data.status == "A") {
                      locationService
                        .saveLocation(q, data)
                        .then(function (results) {
                          ////console.log(message);
                          //message.distance = 0;
                          message.runningtime = "00:00:00";
                          //global.socketobj[sessiondriver].emit("location_update_res",message);
                          common.emitLocDriver(sessiondriver, message);
                        });
                    } else {
                      //console.log("driverlocationupdate-end",sessiondriver,new Date());
                      ////console.log(message);
                      //global.socketobj[sessiondriver].emit("location_update_res",message);
                      common.emitLocDriver(sessiondriver, message);
                    }
                  } catch (err) {
                    console.log("driver location error", err);
                  }
                });
            });
        }
      });

      global.socketobj[sessiondriver].on("error", function (error) {
        //console.log( 'Error - ' + JSON.stringify(error) );
      });

      global.socketobj[sessiondriver].on("disconnect", function (event_name) {
        console.log("disconnect ... " + sessiondriver);
        //delete global.socketobj[sessiondriver];
      });
    }

    socket.on("disconnect", function () {
      if (sessionpassenger) {
        active_passengers = removeArray(active_passengers, sessionpassenger);
        //console.log("active passengers",active_passengers);
        console.log("Passenger Got disconnected!", sessionpassenger);
        //delete global.socketobj[sessionpassenger];
        //delete global.passengerObj[sessionpassenger];
      } else {
        active_drivers = removeArray(active_drivers, sessiondriver);
        //console.log("active drivers",active_drivers);
        console.log("Driver Got disconnected!", sessiondriver);
        //delete global.socketobj[sessiondriver];
      }
    });

    socket.on("nearest_driver", function (data) {
      const startTime = Date.now();
      var message = {};

      var passenger_id = data.passenger_id;

      var motor_model =
        typeof data.motor_model == "undefined" || data.motor_model == ""
          ? ""
          : data.motor_model;

      var latitude = data.latitude;
      var longitude = data.longitude;
      var drop_latitude = data.drop_lat;
      var drop_longitude = data.drop_lng;
      var version_no = data.version_no ? parseInt(data.version_no) : 0;

      var lang = typeof data.lang !== "undefined" ? data.lang : "en";

      var minutes =
        typeof data.minutes !== "undefined" ? parseInt(data.minutes) : 0;

      passcommon
        .nearestdriverslist(
          q,
          motor_model,
          latitude,
          longitude,
          passenger_id,
          lang,
          minutes,
          drop_latitude,
          drop_longitude,
          version_no
        )
        .then(function (driverresults) {
          message = driverresults;
          var passengerid = "P-" + passenger_id;

          console.error("------------- NEAREST DRIVER -------------------");
          if (Array.isArray(message.model_info)) {
            message.model_info.forEach((item, index) => {
              console.error(
                `Model ${index + 1} - driver_status:`,
                item.driver_status
              );
            });
          } else {
            console.error(
              "model_info is not an array or is missing.",
              message.model_info
            );
          }
          global.socketobj[passengerid].emit(
            "nearest_driver_emit",
            message,
            (response) => {
              console.error("SOcker acknowledgement");
              console.error(response.status); // ok
              console.error(response); // ok
              console.error("SOcker acknowledgement");
            }
          );
          const endTime = Date.now(); // log end time
          console.error(
            `Response time for passenger ${passenger_id}: ${
              endTime - startTime
            } ms`
          );
        });

      //});
    });

    // socket.on("nearest_driver", async function (data) {
    //   try {
    //     var passenger_id = data.passenger_id;
    //     var motor_model = data.motor_model;
    //     var latitude = data.latitude;
    //     var longitude = data.longitude;
    //     var drop_latitude = data.drop_lat;
    //     var drop_longitude = data.drop_lng;
    //     var version_no = data.version_no ? parseInt(data.version_no) : 0;
    //     var lang = typeof data.lang !== "undefined" ? data.lang : "en";
    //     var minutes =
    //       typeof data.minutes !== "undefined" ? parseInt(data.minutes) : 0;
    //     var passengerid = "P-" + passenger_id;

    //     const driverresults = await passcommon.nearestdriverslist(
    //       q,
    //       motor_model,
    //       latitude,
    //       longitude,
    //       passenger_id,
    //       lang,
    //       minutes,
    //       drop_latitude,
    //       drop_longitude,
    //       version_no
    //     );
    //     const localMessage = { ...driverresults };

    //     console.error("------------- NEAREST DRIVER -------------------");
    //     if (Array.isArray(localMessage.model_info)) {
    //       localMessage.model_info.forEach((item, index) => {
    //         console.error(
    //           `Model ${index + 1} - driver_status:`,
    //           item.driver_status
    //         );
    //       });
    //     } else {
    //       console.error("model_info is not an array or is missing.");
    //     }

    //     if (global.socketobj[passengerid]) {
    //       global.socketobj[passengerid].emit(
    //         "nearest_driver_emit",
    //         localMessage,
    //         (response) => {
    //           console.error("SOCKET acknowledgement");
    //           console.error(response?.status);
    //           console.error(response);
    //           console.error("SOCKET acknowledgement");
    //         }
    //       );
    //     } else {
    //       console.warn("Socket not found for:", passengerid);
    //     }
    //   } catch (error) {
    //     console.error("Error in nearest_driver socket handler:", error);
    //   }
    // });

    //Dispatcher Cancel Notification
    socket.on("check_trip_status", function (data) {
      //console.log('emit check_trip_status.................................');

      var trip_id = data.trip_id;
      var status = data.status;

      common.trip_details(q, trip_id).then(function (tripresults) {
        console.error(
          "tripresults[0].passenger_lang : ",
          tripresults[0].passenger_lang
        );
        var passenger_lang =
          typeof tripresults[0].passenger_lang !== "undefined"
            ? tripresults[0].passenger_lang
            : "en";
        console.error("passenger_lang : ", passenger_lang);
        io.passenger_i18n.setLocale(passenger_lang);

        if (tripresults.length > 0) {
          try {
            var coordinates = tripresults[0].coordinates;
            var passenger_id = tripresults[0].passengers_id;
            var driver_id = tripresults[0].driver_id;
            var bearing = tripresults[0].bearing;
            var accuracy = tripresults[0].accuracy;

            if (status == 21) {
              var socket_msg = {
                message: io.passenger_i18n.__("fare_update_wallet"),
                detail: [],
                status: 21,
              };
              var socket_driver_id = "D-" + driver_id;

              //console.log(socket_driver_id);

              //global.socketobj[socket_pass_id].emit('update_trip_status',socket_msg);
              io.passenger_i18n.setLocale(passengerlanguage);
              common.emitDriver(socket_driver_id, socket_msg);
            }
          } catch (err) {
            //console.log(err);
          }
        }
      });
    });

    socket.on("passenger_update_drop_location", function (data) {
      //console.log('emit passenger_update_drop_location.................................');

      var trip_id = data.trip_id;
      var drop_location = data.drop_location;
      var drop_latitude = data.drop_latitude;
      var drop_longitude = data.drop_longitude;

      var update_array = {
        drop_location: drop_location,
        drop_latitude: drop_latitude,
        drop_longitude: drop_longitude,
      };

      common
        .passenger_update_drop_location(q, trip_id, update_array)
        .then(function (update_status) {
          //console.log('status....'+update_status.status);

          if (update_status.status == 1) {
            var driver_id = update_status.details.driver_id;
            var passenger_id = update_status.details.passenger_id;
            var socket_driver_id = "D-" + driver_id;
            var socket_pass_id = "P-" + passenger_id;
            //console.log('socket_driver_id',socket_driver_id);
            //console.log('socket_pass_id',socket_pass_id);
            update_status.details.status = 28;

            common.emitPassenger(passenger_id, socket_msg);
            common.emitDriver(driver_id, socket_msg);

            //global.socketobj[socket_driver_id].emit('location_update_res',update_status.details);
            //global.socketobj[socket_pass_id].emit('passenger_update_drop_location_res',update_status.details);
          } else {
            try {
              var passenger_id = update_status.details.passenger_id;
              var socket_pass_id = "P-" + passenger_id;
              //global.socketobj[socket_pass_id].emit('passenger_update_drop_location_res',update_status.details);
              common.emitPassenger(passenger_id, update_status.details);
            } catch (err) {
              //console.log(err);
            }
          }
        });
    });

    socket.on("free_driver", function (data) {
      var driver_id = data.driver_id;
      var driver_status = data.status;

      //console.log("free driver.........");

      common.free_driver(q, driver_id).then(function (details) {
        if (details.status == 1) {
          socket.emit("web_response", details.details.message);
          //common.emitCommon(driver_id,details.message,'change_driver_status','D');
          common.emitCommon(
            driver_id,
            details.details,
            "change_driver_status",
            "D"
          );
        } else {
          //console.log("driver msg",details.details.message);
          socket.emit("web_response", details.details.message);
        }
      });
    });

    // dspio.on('connection', function(socket){
    // 	////console.log('someone connected');
    // });

    // socket.on('dispatcher_new_booking', function(data){

    // 	 	common.trip_notification(q,data.trip_id).then(function(tripresults){
    // 	 			var message={};
    // 			        var status = tripresults.status;

    // if(status == 1)
    // {
    // 	var details = tripresults.details;
    // 	message.message = i18n.__('api_request_confirmed_passenger');
    // 	message.status = 5;
    // 	message.details = details;

    // 		var socket_driver_id = 'D-'+data.driver_id;

    // 	global.socketobj[socket_driver_id].emit("location_update_res",message);
    // 	} else {
    // 			//console.log("Save Booking driver emit...else");
    // 			}
    // 	});

    // });

    socket.on("update_waiting_timer", function (data) {
      //console.log('emit waiting timer.................................');

      try {
        var trip_id = data.trip_id;
        var start_status = data.waiting_timer_status;

        common.update_waiting_timer(q, data).then(function (update_status) {
          try {
            //console.log('update_status',update_status);

            if (update_status.status == 1) {
              var driver_id = update_status.details.driver_id;
              var passenger_id = update_status.details.passenger_id;
              var socket_driver_id = "D-" + driver_id;
              var socket_pass_id = "P-" + passenger_id;
              //update_status.details.status =;

              var socket_msg = update_status.details;

              if (start_status == 1)
                socket_msg.message = io.passenger_i18n.__("timer_started");
              else socket_msg.message = io.passenger_i18n.__("timer_stopped");

              common.emitPassenger(passenger_id, socket_msg);

              socket_msg.status = 29;
              common.emitDriver(driver_id, socket_msg);
            } else {
              try {
                var driver_id = update_status.details.driver_id;

                socket_msg.message = io.passenger_i18n.__("timer_not_update");
                common.emitDriver(driver_id, socket_msg);

                //common.emitPassenger(passenger_id,update_status.details);
              } catch (err) {
                //console.log(err);
              }
            }
          } catch (err) {
            console.log(err);
          }
        });
      } catch (err) {
        console.log(err);
      }
    });
  });

  io.of("/dispatcher").on("connection", function (socket) {
    let clientip = "";
    if (socket && socket.handshake) {
      clientip = socket.handshake.address;
    }
    socket.on("connect", function (data) {
      console.log("dispatcher connected", data);
    });

    socket.on("clientEmit", function (data) {
      console.log("dispatcher emit", clientip, new Date());
      socket.emit("serverEmit");
    });

    socket.on("dispatcher_cancel", function (data) {
      var message = {};
      //console.log('dispatcher_cancel....'+data);

      message.message = i18n.__("dispatcher_trip_cancelled");
      message.status = 10;

      // if(active_drivers.includes(data))
      // global.socketobj[data].emit('location_update_res',message);
      var sessiondriver = "D-" + data;
      common.emitLocDriver(sessiondriver, message);
    });

    socket.on("update_booking_list", function (data) {
      console.log("update_booking_list", clientip, new Date());
      //console.log("update booking list emitted",data);

      dispatcher.AllBookingList(q, data).then(function (tripresults) {
        if (tripresults.length > 0) {
          socket.emit("RealtimeBookingList", tripresults);
          //console.log("true...............emit");
        } else {
          socket.emit("RealtimeBookingList", []);
          //console.log("false...............emit");
        }
      });
    });

    socket.on("update_driver_list", function (data) {
      //console.log("update driver list emitted");

      dispatcher.AllDriverList(q, data).then(function (tripresults) {
        if (tripresults.length > 0) {
          //console.log("true...............emit");
          socket.emit("RealtimeDriverList", tripresults);
        } else {
          //console.log("false...............emit");
          socket.emit("RealtimeDriverList", []);
        }
      });

      //console.log("false...............emit");
      socket.emit("RealtimeDriverList", []);
    });

    //Dispatcher Cancel Notification
    socket.on("check_trip_status", function (data) {
      //console.log('emit check_trip_status.................................');

      var trip_id = data.trip_id;
      var status = data.status;

      common.trip_details(q, trip_id).then(function (tripresults) {
        console.error(
          "tripresults[0].passenger_lang : ",
          tripresults[0].passenger_lang
        );
        var passenger_lang =
          typeof tripresults[0].passenger_lang !== "undefined"
            ? tripresults[0].passenger_lang
            : "en";
        console.error("passenger_lang : ", passenger_lang);

        io.passenger_i18n.setLocale(passenger_lang);

        //console.log("passenger_lang..........",passenger_lang);

        //console.log('length',tripresults.length);

        if (tripresults.length > 0) {
          try {
            var coordinates = tripresults[0].coordinates;
            var passenger_id = tripresults[0].passengers_id;
            var driver_id = tripresults[0].driver_id;
            var bearing = tripresults[0].bearing;
            var accuracy = tripresults[0].accuracy;
            if (status == 10) {
              var socket_msg = {
                message: io.passenger_i18n.__("trip_cancelled"),
                detail: [],
                driver_latitute: "",
                driver_longitude: "",
                bearing: 0,
                accuracy: 0,
                status: 10,
                display: 1,
              };

              var socket_pass_id = "P-" + passenger_id;

              //global.socketobj[socket_pass_id].emit('update_trip_status',socket_msg);
              io.passenger_i18n.setLocale(passenger_lang);
              common.emitPassenger(passenger_id, socket_msg);
            } else if (status == 25) {
              var socket_msg = {
                message: io.passenger_i18n.__("trip_confirmed_dispatcher"),
                detail: [],
                driver_latitute: "",
                driver_longitude: "",
                bearing: 0,
                accuracy: 0,
                travel_msg: io.passenger_i18n.__("dispatcher_confirmed"),
                status: 25,
                display: 1,
              };
              var socket_pass_id = "P-" + passenger_id;

              //console.log(socket_pass_id);

              //global.socketobj[socket_pass_id].emit('update_trip_status',socket_msg);
              io.passenger_i18n.setLocale(passenger_lang);
              common.emitPassenger(passenger_id, socket_msg);
            }
          } catch (err) {
            //console.log(err);
          }
        }
      });
    });

    socket.on("disconnect", function (data) {
      console.log("dispatcher disconnected");
    });
  });
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

function Passenger(language) {
  this.lang = language;
}

function removeArray(arr, val) {
  var index = arr.indexOf(val);

  if (index > -1) {
    arr.splice(index, 1);
  }

  return arr;
}
