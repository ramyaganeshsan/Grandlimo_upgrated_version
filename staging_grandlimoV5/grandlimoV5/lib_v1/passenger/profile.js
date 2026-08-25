var apimodel = require("../../models/passapimodel_v1");
var favicon = require("../../config/favicon.json");
var config = require("../../config/common_config.json");
var q = require("q");
var appRoot = require("app-root-path");
var validator = require("validator");
var fs = require("fs");
var validate = require("validate.js");
var dateFormat = require("dateformat");
var md5 = require("md5");
var time = require("time");
//var i18n = require('i18n');
var t = require("../../config/table_config.json");
var uniqid = require("uniqid");
var randomstring = require("randomstring");
var dateformatter = require("date-format-php");
var urlencode = require("urlencode");
var common = require("../../lib_v1/common.js");
var mime = require("mime");

//urlencode.decode(

exports.passenger_profile = function (q, req) {
  //let inputParams = JSON.parse(req.rawBody);
  let inputParams = req.body;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  var hostname = global.settings.base_url;

  var validate_error = ValidatePassengerProfile(q, inputParams);

  if (validate_error != undefined) {
    if (validate_error[0]) {
      message.message = validate_error[0];
      message.status = -1;
      deferred.resolve(message);
      deferred.makeNodeResolver();
      message = null;
    } else {
      message.message = req.__("validation_error");
      message.status = -1;
      deferred.resolve(message);
      deferred.makeNodeResolver();
      message = null;
    }
  } else {
    var passenger_id = inputParams.passenger_id;

    //console.log("heree0001");
    apimodel
      .passenger_profile_by_id(q, passenger_id)
      .then(function (profile_results) {
        //console.log("heree0002");
        var passenger_details = [];
        if (profile_results.length > 0) {
          passenger_details = profile_results[0];
          passenger_details.profile_image = get_passenger_profile(
            profile_results[0].profile_image,
            hostname
          );

          passenger_details["delete_text"] =
            "Your account is currently in the process of being deleted. For further support, kindly contact " +
            global.settings.phone_number +
            ".";

          passenger_details["delete_text_ar"] =
            "حسابك حاليًا في طور الحذف. لمزيد من الدعم، يرجى الاتصال على الرقم " +
            global.settings.phone_number +
            ".";

          message.message = req.__("success");
          message.detail = passenger_details;
          message.status = 1;
          deferred.resolve(message);
          deferred.makeNodeResolver();
          message = null;
        } else {
          message.message = req.__("invalid_user");
          message.details = details;
          message.status = -1;
          deferred.resolve(message);
          deferred.makeNodeResolver();
          message = null;
        }
      });
  }

  return deferred.promise;
};

// exports.edit_passenger_profile = async function (q, req) {
//   var deferred = q.defer();

//   let inputParams = req.body;

//   var hostname = global.settings.base_url;

//   //console.log(inputParams);

//   let message = {
//     message: "",
//     status: 0,
//   };

//   let validate_error = {};
//   if (req.query.updateType === "payment") {
//     validate_error = ValidateEditPassengerProfileForPayment(q, inputParams);
//   } else if (req.query.updateType === "settings") {
//     validate_error = ValidateEditPassengerProfileForSettings(q, inputParams);
//   } else if (req.query.updateType === "deleteBookForSomeoneDetails") {
//     validate_error = ValidateEditPassengerProfileForDelete(q, inputParams);
//   } else {
//     validate_error = ValidateEditPassengerProfile(q, inputParams);
//   }
//   if (validate_error != undefined) {
//     if (validate_error[0]) {
//       message.message = validate_error[0];
//       message.status = -1;
//       deferred.resolve(message);
//       deferred.makeNodeResolver();
//       message = null;
//     } else {
//       message.message = i18n.__("validation_error");
//       message.status = -1;
//       deferred.resolve(message);
//       deferred.makeNodeResolver();
//       message = null;
//     }
//   } else {
//     if (req.query.updateType === "settings") {
//       var userid = inputParams.passenger_id;
//       var push_notification = parseInt(inputParams.push_notification);
//       var perferred_temparature = parseInt(inputParams.perferred_temparature);
//       var conversation = parseInt(inputParams.conversation);
//       var door_assistance = parseInt(inputParams.door_assistance);
//       var notes_for_driver = inputParams.notes_for_driver;
//       var device_type = inputParams.device_type;

//       var updateData = {
//         push_notification: push_notification,
//         perferred_temparature: perferred_temparature,
//         conversation: conversation,
//         door_assistance: door_assistance,
//         notes_for_driver: notes_for_driver,
//         device_type: device_type,
//       };
//       let updateSettingsResult = await apimodel.updatePassengersSettings(
//         q,
//         userid,
//         updateData
//       );

//       message.message = req.__("update_failed");
//       message.status = -1;
//       if (updateSettingsResult) {
//         message.message = req.__("success");
//         message.status = 1;
//       }

//       deferred.resolve(message);
//       deferred.makeNodeResolver();
//       message = null;
//       return deferred.promise;
//     }
//     var userid = inputParams.passenger_id;
//     var phone = inputParams.phone;
//     var firstname = inputParams.firstname;
//     var email = inputParams.email;
//     var profile_picture = inputParams.profile_image;

//     apimodel.passenger_profile_by_id(q, userid).then(function (checkresults) {
//       //console.log("herere0001");

//       if (checkresults.length > 0) {
//         try {
//           appRoot = global.settings.docroot;

//           var mime_type = base64MimeType(profile_picture);
//           if (mime_type == "" || mime_type == undefined) {
//             mime_type = "png";
//           }

//           var image_name = uniqid() + "_" + userid + "." + mime_type;
//           var upload_path = appRoot + "/public/uploads/passenger/";

//           let updateArray = {
//             email: email,
//             //'phone':phone,
//             //'password':md5(password),
//             //'org_password':password,
//             //'lastname':lastname,
//             name: firstname,
//           };

//           if (profile_picture != "") {
//             profile_picture = profile_picture.replace(
//               /^data:image\/png;base64,/,
//               ""
//             );

//             fs.writeFile(
//               upload_path + image_name,
//               profile_picture,
//               "base64",
//               function (err) {
//                 //console.log('image error',err);
//                 if (err != "" && err != undefined) {
//                   message.message = req.__("image_not_upload");
//                   message.status = -1;
//                   deferred.resolve(message);
//                   deferred.makeNodeResolver();
//                   message = null;
//                 } else {
//                   if (profile_picture != "") {
//                     updateArray.profile_image = image_name;
//                   }

//                   apimodel
//                     .update_passenger_details(q, userid, updateArray)
//                     .then(function (drivercheckresults) {
//                       message.message = req.__("profile_updated");
//                       message.profile_image = get_passenger_profile(
//                         image_name,
//                         hostname
//                       );
//                       message.status = 1;
//                       deferred.resolve(message);
//                       deferred.makeNodeResolver();
//                       message = null;
//                     });
//                 }
//               }
//             );
//           } else {
//             apimodel
//               .update_passenger_details(q, userid, updateArray)
//               .then(function (drivercheckresults) {
//                 message.message = req.__("profile_updated");
//                 message.profile_image = get_passenger_profile(
//                   image_name,
//                   hostname
//                 );
//                 message.status = 1;
//                 deferred.resolve(message);
//                 deferred.makeNodeResolver();
//                 message = null;
//               });
//           }
//         } catch (err) {
//           console.log(err);
//         }
//       } else {
//         message.message = req.__("invalid_user_driver");
//         message.status = -1;
//         deferred.resolve(message);
//         deferred.makeNodeResolver();
//         message = null;
//       }
//     });
//   }

//   return deferred.promise;
// };

exports.edit_passenger_profile = async function (q, req) {
  var deferred = q.defer();

  let inputParams = req.body;

  var hostname = global.settings.base_url;

  // Ramya june 2025
  var file = req.file;

  let message = {
    message: "",
    status: 0,
  };

  let validate_error = {};
  if (req.query.updateType === "payment") {
    validate_error = ValidateEditPassengerProfileForPayment(q, inputParams);
  } else if (req.query.updateType === "settings") {
    validate_error = ValidateEditPassengerProfileForSettings(q, inputParams);
  } else if (req.query.updateType === "deleteBookForSomeoneDetails") {
    validate_error = ValidateEditPassengerProfileForDelete(q, inputParams);
  } else {
    validate_error = ValidateEditPassengerProfile(q, inputParams);
  }
  if (validate_error != undefined) {
    if (validate_error[0]) {
      message.message = validate_error[0];
      message.status = -1;
      deferred.resolve(message);
      deferred.makeNodeResolver();
      message = null;
    } else {
      message.message = i18n.__("validation_error");
      message.status = -1;
      deferred.resolve(message);
      deferred.makeNodeResolver();
      message = null;
    }
  } else {
    if (req.query.updateType === "settings") {
      var userid = inputParams.passenger_id;
      var push_notification = parseInt(inputParams.push_notification);
      var perferred_temparature = parseInt(inputParams.perferred_temparature);
      var conversation = parseInt(inputParams.conversation);
      var door_assistance = parseInt(inputParams.door_assistance);
      var notes_for_driver = inputParams.notes_for_driver;
      var device_type = inputParams.device_type;

      var updateData = {
        push_notification: push_notification,
        perferred_temparature: perferred_temparature,
        conversation: conversation,
        door_assistance: door_assistance,
        notes_for_driver: notes_for_driver,
        device_type: device_type,
      };
      let updateSettingsResult = await apimodel.updatePassengersSettings(
        q,
        userid,
        updateData
      );

      message.message = req.__("update_failed");
      message.status = -1;
      if (updateSettingsResult) {
        message.message = req.__("success");
        message.status = 1;
      }

      deferred.resolve(message);
      deferred.makeNodeResolver();
      message = null;
      return deferred.promise;
    }
    if (req.query.updateType === "deleteBookForSomeoneDetails") {
      var userid = inputParams.passenger_id;
      apimodel
        .getBookForSomeoneDetails(q, userid)
        .then(function (checkresults) {
          if (checkresults && checkresults.length > 0) {
            var bookForSomeoneDetails = checkresults;
            if (bookForSomeoneDetails && Array.isArray(bookForSomeoneDetails)) {
              var indexToDelete = bookForSomeoneDetails.findIndex(
                (detail) => detail.id == inputParams.id
              );

              if (indexToDelete !== -1) {
                bookForSomeoneDetails.splice(indexToDelete, 1);

                for (let i = 0; i < bookForSomeoneDetails.length; i++) {
                  bookForSomeoneDetails[i].id = i + 1;
                }

                apimodel
                  .update_passenger_details(q, userid, {
                    bookForSomeone: bookForSomeoneDetails,
                  })
                  .then(function (updateResult) {
                    if (updateResult) {
                      message.message = "Detail deleted successfully";
                      message.status = 1;
                    } else {
                      message.message = "Failed to delete detail";

                      message.status = -1;
                    }
                    deferred.resolve(message);
                  });
              } else {
                message.message = "Detail not found";
                message.status = -1;
                deferred.resolve(message);
              }
            } else {
              message.message = "Invalid bookForSomeone details";
              message.status = -1;
              deferred.resolve(message);
            }
          } else {
            message.message = req.__("Details Not Found!");
            message.status = -1;
            deferred.resolve(message);
            deferred.makeNodeResolver();
            message = null;
          }
        })
        .catch((err) => {
          console.log(err);
        });

      return deferred.promise;
    }

    if (
      inputParams.bookForSomeone &&
      typeof inputParams.bookForSomeone === "object" &&
      Object.keys(inputParams.bookForSomeone).length > 0
    ) {
      var validateBookForSomeoneResult = ValidateBookForSomeoneProfile(
        q,
        inputParams.bookForSomeone
      );
      if (validateBookForSomeoneResult != undefined) {
        if (validateBookForSomeoneResult[0]) {
          message.message = validateBookForSomeoneResult[0];
          message.status = -1;
          deferred.resolve(message);
          deferred.makeNodeResolver();
          message = null;
          return deferred.promise;
        } else {
          message.message = i18n.__("validation_error");
          message.status = -1;
          deferred.resolve(message);
          deferred.makeNodeResolver();
          message = null;
          return deferred.promise;
        }
      }
    }

    var userid = inputParams.passenger_id;
    var phone = inputParams.phone;
    var firstname = inputParams.firstname;
    var email = inputParams.email;
    // var profile_picture = inputParams.profile_image;

    apimodel.passenger_profile_by_id(q, userid).then(function (checkresults) {
      //console.log("herere0001");

      if (checkresults.length > 0) {
        try {
          appRoot = global.settings.docroot;
          //ramya nov_2023
          var bookForSomeone =
            checkresults[0].bookForSomeone &&
            Array.isArray(checkresults[0].bookForSomeone)
              ? checkresults[0].bookForSomeone
              : [];

          let updateArray = {
            email: email,

            name: firstname,
          };
          var editedBookData;
          if (
            inputParams.bookForSomeone &&
            Object.keys(inputParams.bookForSomeone).length > 0
          ) {
            var max_passengers_limit = global.settings["max_passengers_limit"];
            if (inputParams.bookForSomeone.is_edited == 1) {
              if (!inputParams.bookForSomeone.id) {
                message.message = "Invaild Request";
                message.status = -1;
                deferred.resolve(message);
                return deferred.promise;
              }

              let isValidId = bookForSomeone.some(
                (entry) => entry.id === inputParams.bookForSomeone.id
              );

              if (!isValidId) {
                message.message = "Detail not found";
                message.status = -1;
                deferred.resolve(message);
                return deferred.promise;
              }

              var editedIndex = -1;

              isDuplicate = bookForSomeone.some(
                (entry) =>
                  entry.phone_number ===
                    inputParams.bookForSomeone.phone_number &&
                  entry.id !== inputParams.bookForSomeone.id
              );

              editedIndex = bookForSomeone.findIndex(
                (entry) => entry.id == inputParams.bookForSomeone.id
              );

              if (!isDuplicate && editedIndex !== -1) {
                editedBookData = inputParams.bookForSomeone;
                bookForSomeone[editedIndex].name = editedBookData.name;
                bookForSomeone[editedIndex].phone_number =
                  editedBookData.phone_number;
                bookForSomeone[editedIndex].email = editedBookData.email_id;
              } else {
                message.message = isDuplicate
                  ? "Phone number already exists."
                  : "Detail not found";
                message.status = -1;
                deferred.resolve(message);
                return deferred.promise;
              }
            } else {
              if (bookForSomeone.length < max_passengers_limit) {
                var idCounter =
                  bookForSomeone.length > 0 ? bookForSomeone.length : 0;
                var newName = inputParams.bookForSomeone.name;
                var newPhone = inputParams.bookForSomeone.phone_number;

                var isDuplicate = bookForSomeone.some(
                  (entry) => entry.phone_number === newPhone
                );

                if (!isDuplicate) {
                  var bookData = {
                    id: idCounter + 1,
                    name: newName,
                    phone_number: newPhone,
                    email: inputParams.bookForSomeone.email_id || "",
                  };
                  bookForSomeone.push(bookData);
                } else {
                  message.message = "Phone number already exists.";
                  message.status = -1;
                  deferred.resolve(message);
                  deferred.makeNodeResolver();
                  return deferred.promise;
                }
              } else {
                message.message = `Maximum members limit ${max_passengers_limit} reached`;
                message.status = -1;
                deferred.resolve(message);
                deferred.makeNodeResolver();
                return deferred.promise;
              }
            }

            updateArray["bookForSomeone"] = bookForSomeone;
          }
          // var mime_type = base64MimeType(profile_picture);
          // if (mime_type == "" || mime_type == undefined) {
          //   mime_type = "png";
          // }

          var image_name = "";
          // var upload_path = appRoot + "/public/uploads/passenger/";

          if (file && file.filename) {
            updateArray.profile_image = file.filename;
            image_name = file.filename;
          }

          // if (profile_picture != "") {
          // profile_picture = profile_picture.replace(
          //   /^data:image\/png;base64,/,
          //   ""
          // );

          // fs.writeFile(
          //   upload_path + image_name,
          //   profile_picture,
          //   "base64",
          //   function (err) {
          //     //console.log('image error',err);
          //     if (err != "" && err != undefined) {
          //       message.message = req.__("image_not_upload");
          //       message.status = -1;
          //       deferred.resolve(message);
          //       deferred.makeNodeResolver();
          //       message = null;
          //     } else {
          //       if (profile_picture != "") {
          //         updateArray.profile_image = image_name;
          //       }

          apimodel
            .update_passenger_details(q, userid, updateArray)
            .then(function (drivercheckresults) {
              message.message = req.__("profile_updated");
              message.profile_image = get_passenger_profile(
                image_name,
                hostname
              );
              message.familyAndFriends = updateArray["bookForSomeone"]
                ? updateArray["bookForSomeone"]
                : [];
              message.status = 1;
              deferred.resolve(message);
              deferred.makeNodeResolver();
              message = null;
            })
            .catch((err) => {
              console.error(err);
            });
          //     }
          //   }
          // );
          // } else {
          //   apimodel
          //     .update_passenger_details(q, userid, updateArray)
          //     .then(function (drivercheckresults) {
          //       message.message = req.__("profile_updated");
          //       message.profile_image = get_passenger_profile(
          //         image_name,
          //         hostname
          //       );
          //       message.familyAndFriends = updateArray["bookForSomeone"]
          //         ? updateArray["bookForSomeone"]
          //         : [];
          //       message.status = 1;
          //       deferred.resolve(message);
          //       deferred.makeNodeResolver();
          //       message = null;
          //     });
          // }
        } catch (err) {
          console.log(err);
          message.message = "Server error";
          message.status = -1;
          deferred.resolve(message);
        }
      } else {
        message.message = req.__("invalid_user_driver");
        message.status = -1;
        deferred.resolve(message);
        deferred.makeNodeResolver();
        message = null;
      }
    });
  }

  return deferred.promise;
};

exports.update_language = function (q, req) {
  //let inputParams = JSON.parse(req.rawBody);
  let inputParams = req.body;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  var appRoot = global.settings.docroot;

  var hostname = global.settings.base_url;

  var validate_error = ValidatePassengerLang(q, inputParams);

  if (validate_error != undefined) {
    if (validate_error[0]) {
      message.message = validate_error[0];
      message.status = -1;
      deferred.resolve(message);
      deferred.makeNodeResolver();
      message = null;
    } else {
      message.message = req.__("validation_error");
      message.status = -1;
      deferred.resolve(message);
      deferred.makeNodeResolver();
      message = null;
    }
  } else {
    var passenger_id = inputParams.passenger_id;
    var lang = inputParams.lang;

    apimodel
      .passenger_profile_by_id(q, passenger_id)
      .then(function (profile_results) {
        if (profile_results.length > 0) {
          apimodel
            .update_passenger_language(q, passenger_id, lang)
            .then(function (update_results) {
              if (update_results.result.nModified == 1) {
                if (
                  typeof global.passengerObj["P-" + passenger_id] !==
                  "undefined"
                ) {
                  global.passengerObj["P-" + passenger_id].lang = lang;
                }

                message.message = req.__("success");
                message.status = 1;
                deferred.resolve(message);
                deferred.makeNodeResolver();
                message = null;
              } else {
                message.message = req.__("try_again");
                message.status = -1;
                deferred.resolve(message);
                deferred.makeNodeResolver();
                message = null;
              }
            });
        } else {
          message.message = req.__("invalid_user");
          message.status = -1;
          deferred.resolve(message);
          deferred.makeNodeResolver();
          message = null;
        }
      });
  }

  return deferred.promise;
};

exports.update_notifications = function (q, req) {
  //let inputParams = JSON.parse(req.rawBody);
  let inputParams = req.body;

  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  var appRoot = global.settings.docroot;

  var hostname = global.settings.base_url;

  var validate_error = ValidateUpdateNotification(q, inputParams);

  if (validate_error != undefined) {
    if (validate_error[0]) {
      message.message = validate_error[0];
      message.status = -1;
      deferred.resolve(message);
      deferred.makeNodeResolver();
      message = null;
    } else {
      message.message = req.__("validation_error");
      message.status = -1;
      deferred.resolve(message);
      deferred.makeNodeResolver();
      message = null;
    }
  } else {
    var passenger_id = inputParams.passenger_id;
    var update_notification_time = new Date(inputParams.notification_time);
    var notification_id = inputParams.notification_id;

    apimodel
      .passenger_profile_by_id(q, passenger_id)
      .then(function (profile_results) {
        if (profile_results.length > 0) {
          var update_array = {
            banner_notification_status: parseInt(1),
            banner_notification_id: notification_id,
            banner_notification_update_time: update_notification_time,
          };
          apimodel
            .update_passenger_notification(q, passenger_id, update_array)
            .then(function (update_results) {
              if (update_results.result.nModified == 1) {
                message.message = req.__("success");
                message.status = 1;
                deferred.resolve(message);
                deferred.makeNodeResolver();
                message = null;
              } else {
                message.message = req.__("try_again");
                message.status = -1;
                deferred.resolve(message);
                deferred.makeNodeResolver();
                message = null;
              }
            });
        } else {
          message.message = req.__("invalid_user");
          message.status = -1;
          deferred.resolve(message);
          deferred.makeNodeResolver();
          message = null;
        }
      });
  }

  return deferred.promise;
};

function ValidateUpdateNotification(q, input) {
  var constraints = {
    passenger_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    notification_time: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    notification_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function ValidatePassengerLang(q, input) {
  var constraints = {
    passenger_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}
function ValidatePassengerProfile(q, input) {
  var constraints = {
    passenger_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

// Ramya 21 nov 2023
function ValidateEditPassengerProfileForPayment(q, input) {
  var constraints = {
    passenger_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    push_notification: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    perferred_temparature: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    conversation: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    door_assistance: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    notes_for_driver: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function ValidateEditPassengerProfileForSettings(q, input) {
  var constraints = {
    passenger_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    push_notification: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    perferred_temparature: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    conversation: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    door_assistance: {
      presence: { allowEmpty: false, message: "not empty" },
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function ValidateEditPassengerProfile(q, input) {
  var constraints = {
    passenger_id: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    firstname: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    phone: {
      presence: { allowEmpty: false, message: "not empty" },
    },
    email: {
      presence: { allowEmpty: false, message: "not empty" },
      email: true,
    },
  };
  validate.options = { format: "flat" };
  var result = validate(input, constraints);
  return result;
}

function base64MimeType(encoded) {
  var result = null;

  if (typeof encoded !== "string") {
    return result;
  }

  var mime = encoded.match(/data:([a-zA-Z0-9]+\/[a-zA-Z0-9-.+]+).*,.*/);

  if (mime && mime.length) {
    result = mime[1];
    mime_type = result.split("/");
    result = mime_type[1];
  }

  //console.log('mime',result);

  return result;
}

function get_passenger_profile(profile, hostname) {
  var appRoot = global.settings.docroot;

  //console.log(appRoot+'/public/uploads/passenger/'+profile);

  try {
    if (
      fs.existsSync(appRoot + "/public/uploads/passenger/" + profile) &&
      profile != ""
    ) {
      return hostname + "/" + "public/uploads/passenger/" + profile;
    } else {
      return hostname + "/" + config.NO_IMAGE;
    }
  } catch (ex) {
    console.log("error", ex);
  }
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

/* Delete my account */
exports.delete_my_account = async function (q, req) {
  let inputParams = req.body;
  var deferred = q.defer();

  let message = {
    message: "",
    status: 0,
  };

  var appRoot = global.settings.docroot;
  var hostname = global.settings.base_url;

  if (!inputParams.passengerId) {
    message.message = "Passenger ID should not be empty.";
    deferred.resolve(message);
    deferred.makeNodeResolver();
    return deferred.promise;
  } else {
    /* Check if he is a valid user or already he is requested to delete his/her account. */
    let accountDetails = {
      passengerId: +inputParams.passengerId,
      reason: inputParams.reason ? inputParams.reason : "",
      status: 0,
      createdAt: new Date(),
    };

    let [isDeleted, isAlreadyRequested] = await Promise.all([
      apimodel.is_account_already_deleted(inputParams.passengerId),
      apimodel.is_customer_already_requested(inputParams.passengerId),
    ]);

    if (isDeleted) {
      message.message = req.__("your_account_already_deleted");
      message.status = 0;
      deferred.resolve(message);
      deferred.makeNodeResolver();
      return deferred.promise;
    }

    if (isAlreadyRequested) {
      message.message =
        req.__("already_delete_in_process") +
        global.settings.phone_number +
        ".";
      message.status = 0;
      deferred.resolve(message);
      deferred.makeNodeResolver();
      return deferred.promise;
    }

    let inserted = await apimodel.insert_passenger_account_delete_request(
      accountDetails
    );
    await apimodel.update_delete_request_on_passenger(inputParams.passengerId);
    if (inserted) {
      message.status = 1;
      message.message =
        req.__("get_delete_request") + global.settings.phone_number + ".";
    } else {
      message.status = 0;
      message.message = "Something went wrong, kindly try again.";
    }
  }
  deferred.resolve(message);
  deferred.makeNodeResolver();
  return deferred.promise;
};
