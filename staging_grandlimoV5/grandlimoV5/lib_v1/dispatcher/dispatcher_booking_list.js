var dispatchermodel = require('../../models/dispatchermodel_v1');
var apimodel = require('../../models/apimodel_v1');
var common = require('../../lib_v1/common');
var q = require('q');
var haversine = require('haversine');
var validate = require("validate.js");
var i18n = require('i18n');
var config = require('../../config/common_config.json');
var time = require('time');
var dateFormat = require('dateformat');
var config = require('../../config/common_config.json');
var forEach = require('async-foreach').forEach;

exports.AllBookingList = function (q, data) {
    console.log('v1 AllBookingList')
    var deferred = q.defer();

    try {

        var time_range = getStartingDateAndEndingDate(config.TIMEZONE);
        var before_two_date = getBeforeTwoDays(config.TIMEZONE);

        var before_two_date = common.convert_timezone_start(new Date());

        before_two_date = new Date(before_two_date);


        var d = new Date();
        var before_days = d.setDate(d.getDate() - 2);
        var base_url = global.settings.base_url;

        var manage_status = data.manage_status;
        var dispatcherId = data.userid;


        dispatchermodel.GetBookingList(q, data, time_range, before_two_date).then(function (tripresults) {
            console.log("v1 GetBookingList")
            var tripObj = [];
            var tripObjHtml = '';
            var i = 0;

            if (tripresults.length > 0) {
                //tripresults.forEach(function(element) {
                forEach(tripresults, function (element, index) {
                    var done = this.async();
                    try {

                        var trcolor = 'oddtr';
                        i++;
                        if (i % 2) {
                            trcolor_class = "show_tr_one";
                        } else {
                            trcolor_class = "show_tr_two";
                        }

                        tripObj[i] = {};

                        tripObj[i] = element;

                        var created_date = new Date(element.createDate);
                        var pickup_time = new Date(element.pickupTime);
                        var pickup_link = "https://www.google.com/maps/search/?api=1&query=" + element.pickupLatitude + "," + element.pickupLongitude;

                        if (element.dropLatitude != 0 && element.dropLongitude)
                            var drop_link = "https://www.google.com/maps/search/?api=1&query=" + element.dropLatitude + "," + element.dropLongitude;
                        else
                            var drop_link = ''

                        var passenger_link = base_url + "/manage/passengerinfo/" + element.passengerId;

                        var status_color = '';
                        var tr_icon_class = '';
                        var tr_icon_title = '';
                        var travel_status = '';
                        var status_button = '';
                        var status_button = '';
                        var status_button = '';
                        var edit_tab_display = '';
                        var edit = '';
                        var cancel = '';

                        var tripId = element.tripId;
                        var companyId = element.companyId;
                        var driverId = element.driverId;
                        var travelStatus = element.travelStatus;
                        var driverReply = element.driverReply;
                        var bookTag = element.bookTag;
                        var airportPickup = element.airportPickup;
                        var zoneFareApplicable = element.zoneFareApplicable;
                        var confirmFlag = element.confirmFlag;
                        var bookType = element.bookType;
                        var paymentType = element.paymentType;
                        var advancePayment = element.advancePayment;
                        var pendingAmt = element.pendingAmt;
                        var walletAmountUsed = element.walletAmountUsed;
                        var driverEditStatus = element.driverEditStatus;
                        var actualPaidAmt = element.actualPaidAmt;
                        var addAmt = element.addAmt;
                        var passengerPendingAmt = element.passengerPendingAmt;
                        var passengerWalletAmount = element.passengerWalletAmount.toFixed('2');

                        var driverCode = element.driverCode;
                        var currentLocation = element.currentLocation;
                        var dropLocation = element.dropLocation;
                        var bookType = element.bookType;
                        var airportFlightNumber = element.airportFlightNumber;
                        var tripMinutes = element.tripMinutes;
                        var created_date = element.createDate;
                        var pickup_time = element.pickupTime;
                        var actPickuptime = element.actPickuptime;
                        var durationUpdatetime = element.durationUpdatetime;
                        var approxDuration = element.approxDuration;
                        var dropLatitude = element.dropLatitude;
                        var dropLongitude = element.dropLongitude;
                        var modelId = element.modelId;
                        var performanceStatus = element.performanceStatus;
                        var fareCalculationType = element.fareCalculationType;
                        var tripDistance = element.tripDistance;
                        if (tripDistance == '') {
                            tripDistance = 0;
                        }
                        var distanceUnit = element.distanceUnit;
                        var taxiCompanyId = element.companyId;
                        var currentTime = new Date();
                        var estimateTime = 0;
                        var estimateTimeRemaining = 0;
                        var confirmStatus = 0;
                        var apply_estimate_fare = element.apply_estimate_fare;
                        var remain_time_update = element.remain_time_update;
                        var promo_fixed_fare_apply = element.promo_fixed_fare_apply;
                        var passenger_discount = element.passenger_discount;

                        if (travelStatus == 0 && performanceStatus != 4) {
                            //common.update_performance_status(q,pickup_time,created_date,tripId,modelId,dispatcherId,element.pickupLatitude,element.pickupLongitude).then(function(updatePerformanceStatus){
                            //});
                        }

                        try {
                            if (durationUpdatetime != '') {
                                estimateTime = currentTime.getTime() - durationUpdatetime.getTime();
                                estimateTime = estimateTime / 1000;
                            }
                            else {
                                estimateTime = 0;
                            }
                            //console.log(!isNaN(approxDuration),'!isNaN(approxDuration)',tripId);
                            if (travelStatus == 2) {
                                estimateTimeRemaining = 0;
                            } else {
                                estimateTimeRemaining = '';
                            }

                            if (travelStatus == 2 && approxDuration != 0) {
                                //console.log('approxDuration.......',approxDuration);
                                //console.log(remain_time_update,'estimateTime.......',estimateTime);

                                if (!isNaN(approxDuration)) {
                                    estimateTimeRemaining = approxDuration - estimateTime;
                                } else {
                                    estimateTimeRemaining = 0;
                                }
                                //console.log('estimateTimeRemaining.......',estimateTimeRemaining);
                                if (remain_time_update == 0) {

                                    try {
                                        common.ApproximateDurationLatLang(q, driverId, tripId, dropLatitude, dropLongitude, 1).then(function (approxDurationResult) {
                                            ////console.log('approxDurationResult',approxDurationResult);
                                            //estimateTimeRemaining = approxDurationResult - estimateTime ;
                                            estimateTimeRemaining = approxDurationResult;
                                            if (estimateTimeRemaining > 0)
                                                estimateTimeRemaining = "<span class='pending_payment_class'>" + convsecstoformat(estimateTimeRemaining) + "</span>";
                                            else
                                                estimateTimeRemaining = "<span class='pending_payment_class'>" + convsecstoformat(3) + "</span>";
                                        });
                                    } catch (err) {  ////console.log(err);
                                    }

                                } else if (remain_time_update == 1) {

                                    //console.log(estimateTimeRemaining,'remain_time_update---innn');
                                    if (estimateTimeRemaining < 400) {
                                        try {
                                            //console.log(estimateTimeRemaining,'remain_time_update');
                                            common.ApproximateDurationLatLang(q, driverId, tripId, dropLatitude, dropLongitude, 2).then(function (approxDurationResult) {
                                                //console.log('approxDurationResult',approxDurationResult);
                                                //estimateTimeRemaining = approxDurationResult - estimateTime ;
                                                estimateTimeRemaining = approxDurationResult;
                                                if (estimateTimeRemaining > 0)
                                                    estimateTimeRemaining = "<span class='pending_payment_class'>" + convsecstoformat(estimateTimeRemaining) + "</span>";
                                                else
                                                    estimateTimeRemaining = "<span class='pending_payment_class'>" + convsecstoformat(3) + "</span>";
                                            });
                                        } catch (err) {  ////console.log(err);
                                        }
                                    } else {
                                        estimateTimeRemaining = "<span class='pending_payment_class'>" + convsecstoformat(estimateTimeRemaining) + "</span>";
                                    }
                                } else if (estimateTimeRemaining > 0) {
                                    //console.log(estimateTimeRemaining,'estimateTimeRemaining----');
                                    estimateTimeRemaining = "<span class='pending_payment_class'>" + convsecstoformat(estimateTimeRemaining) + "</span>";
                                } else {
                                    estimateTimeRemaining = '-';
                                }
                            }
                        } catch (err) {
                            ////console.log(err);
                        }

                        var payment_type_msg = '';
                        var fare_edit = '';

                        if (travelStatus == 0) {
                            status_color = "#1298ff";
                            tr_icon_class = "assign_icon";
                            tr_icon_title = i18n.__('assign');
                            travel_status = '<div style="color:red;">' + i18n.__('assign') + '</div>';
                            status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs update_dispatch" name="update_dispatch" id="update_dispatch_' + tripId + '_' + companyId + '" value="' + i18n.__('dispatch') + '" >' + i18n.__('dispatch') + '</button>';
                            edit = '<a href="javascript:;" class="edit-ico status ' + trcolor + '" name="edit" id="addtr_' + tripId + '" value="' + i18n.__('dispatch') + '" ><i class="glyphicon glyphicon-edit">&nbsp;</i></a>';
                            cancel = '<a href="javascript:;" class="remove-ico status cancelBtn" name="cancel" id="cancel_' + tripId + '_' + driverId + '" value="' + i18n.__('dispatch') + '" ><i class="glyphicon glyphicon-remove">&nbsp;</i></a>';
                        } else if (travelStatus == 1) {
                            status_color = "#07841e";
                            tr_icon_class = "complete_icon";
                            tr_icon_title = i18n.__('completed');
                            travel_status = '<div style="color:' + status_color + '">' + i18n.__('completed') + '</div>';
                            fare_edit = '<a href="javascript:;" class="edit-ico status ' + trcolor + '" name="edit" id="addtrfare_' + tripId + '" value="' + i18n.__('dispatch') + '" ><i class="glyphicon glyphicon-edit">&nbsp;</i></a>';
                            status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs completed" name="update_dispatch" id="update_dispatch_' + tripId + '" value="' + i18n.__('dispatch') + '" >' + i18n.__('completed') + '</button>';
                        } else if (travelStatus == 2) {
                            status_color = "#ff9600";
                            tr_icon_class = "inprogress_icon";
                            tr_icon_title = i18n.__('inprogress');
                            travel_status = '<div style="color:' + status_color + ';">' + i18n.__('inprogress') + '</div>';
                            status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs inprogress" name="update_dispatch" id="update_dispatch_' + tripId + '" value="' + i18n.__('dispatch') + '" >' + i18n.__('inprogress') + '</button>';
                            //edit_tab_display = "<script>('.edit_booking_"+tripId+"').hide();('#add_booking_tab').html('Add Booking');</script>";
                            edit_tab_display = '';
                        } else if (travelStatus == 3) {
                            status_color = "#f9c213";
                            tr_icon_class = "start_to_pickup_icon";
                            tr_icon_title = i18n.__('start_to_pickup');
                            travel_status = '<div style="color:' + status_color + ';">' + i18n.__('start_to_pickup') + '</div>';
                            status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs inprogress" name="update_dispatch" id="update_dispatch_' + tripId + '" value="' + i18n.__('dispatch') + '" >' + i18n.__('start_to_pickup') + '</button>';
                            cancel = '<a href="javascript:;" class="remove-ico status cancelBtn" name="cancel" id="cancel_' + tripId + '_' + driverId + '" value="' + i18n.__('dispatch') + '" ><i class="glyphicon glyphicon-remove">&nbsp;</i></a>';
                        } else if (travelStatus == 4) {
                            status_color = "#844d06";
                            tr_icon_class = "cancel_icon";

                            /* Sasidharan july 19 2023 */
                            let cancelation_time_string = ( typeof element.cancelation_time_string != undefined && element.cancelation_time_string) ? element.cancelation_time_string : "-";

                            tr_icon_title = i18n.__('cancel_by_passenger');
                            travel_status = '<div style="color:' + status_color + ';">' + i18n.__('cancel_by_passenger') + '</div>';
                            status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs cancelled" name="update_dispatch" id="update_dispatch_' + tripId + '" value="' + i18n.__('dispatch') + '" ' + 'title="'+ cancelation_time_string + '" >' + i18n.__('cancelled') + '</button>';
                        } else if (travelStatus == 5) {
                            status_color = "#f91313";
                            tr_icon_class = "waiting_payment_icon";
                            tr_icon_title = i18n.__('waiting_payment');
                            travel_status = '<div style="color:' + status_color + '">' + i18n.__('waiting_payment') + '</div>';
                            status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs cancelled" name="update_dispatch" id="update_dispatch_' + tripId + '" value="' + i18n.__('dispatch') + '" >' + i18n.__('waiting_payment') + '</button>';
                        } else if (travelStatus == 6) {
                            status_color = "#1339f9";
                            tr_icon_class = "reassign_icon";
                            tr_icon_title = i18n.__('reassign');
                            travel_status = '<div style="color:' + status_color + ';">' + i18n.__('reassign') + '</div>';
                            status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs update_dispatch" name="update_dispatch" id="update_dispatch_' + tripId + '_' + companyId + '" value="' + i18n.__('dispatch') + '" >' + i18n.__('dispatch') + '</button>';
                            cancel = '<a href="javascript:;" class="remove-ico status cancelBtn" name="cancel" id="cancel_' + tripId + '_' + driverId + '" value="' + i18n.__('dispatch') + '" ><i class="glyphicon glyphicon-remove">&nbsp;</i></a>';
                        } else if (travelStatus == 7) {

                            status_color = "#eb13f9";
                            name_color = "#eb13f9";
                            tr_icon_class = "waiting_response_icon";
                            tr_icon_title = i18n.__('dispatched');
                            travel_status = '<div style="color:' + status_color + ';">' + i18n.__('dispatched') + '</div>';
                            status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs waiting_response" name="update_dispatch" id="update_dispatch_' + tripId + '" value="' + i18n.__('dispatched') + '" >' + i18n.__('dispatched') + '</button>';
                        } else if (travelStatus == 7 && (driverReply == 'C' || driverReply == 'R')) {
                            status_color = "#844d06";
                            tr_icon_class = "cancel_icon";
                            tr_icon_title = i18n.__('cancelled');
                            travel_status = '<div style="color:' + status_color + ';">' + i18n.__('cancelled') + '</div>';
                            status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs cancelled" name="update_dispatch" id="update_dispatch_' + tripId + '" value="' + i18n.__('dispatch') + '" >' + i18n.__('cancelled') + '</button>';
                        } else if (travelStatus == 7) {
                            status_color = "#1339f9";
                            tr_icon_class = "reassign_icon";
                            tr_icon_title = i18n.__('reassign');
                            travel_status = '<div style="color:' + status_color + ';">' + i18n.__('reassign') + '</div>';
                            status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs update_dispatch" name="update_dispatch" id="update_dispatch_' + tripId + '_' + companyId + '" value="' + i18n.__('dispatch') + '" >' + i18n.__('dispatch') + '</button>';
                            cancel = '<a href="javascript:;" class="remove-ico status cancelBtn" name="cancel" id="cancel_' + tripId + '_' + driverId + '" value="' + i18n.__('dispatch') + '" ><i class="glyphicon glyphicon-remove">&nbsp;</i></a>';
                        } else if (travelStatus == 8) {
                            status_color = "#844d06";
                            tr_icon_class = "cancel_icon";
                            //tr_icon_class = "reassign_icon";
                            tr_icon_title = i18n.__('cancelled');
                            travel_status = '<div style="color:' + status_color + ';">' + i18n.__('cancelled') + '</div>';
                            status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs cancelled" name="update_dispatch" id="update_dispatch_' + tripId + '" value="' + i18n.__('dispatch') + '" >' + i18n.__('cancelled') + '</button>';
                        } else if (travelStatus == 9 && driverReply == 'A') {
                            status_color = "#12ff00";
                            tr_icon_class = "confirm_icon";
                            tr_icon_title = i18n.__('confirmed');
                            travel_status = '<div style="color:' + status_color + ';">' + i18n.__('confirmed') + '</div>';
                            status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs inprogress" name="update_dispatch" id="update_dispatch_' + tripId + '" value="' + i18n.__('dispatch') + '" >' + i18n.__('confirmed') + '</button><button type="submit" class="btn btn-outline btn-primary btn-xs update_dispatch" style="margin-top:5px" name="update_dispatch" id="update_dispatch_' + tripId + '_' + taxiCompanyId + '" value="' + i18n.__('dispatch') + '" >' + i18n.__('reassign') + '</button>';
                            cancel = '<a href="javascript:;" class="remove-ico status cancelBtn" name="cancel" id="cancel_' + tripId + '_' + driverId + '" value="' + i18n.__('dispatch') + '" ><i class="glyphicon glyphicon-remove">&nbsp;</i></a>';
                        } else if (travelStatus == 9 && (driverReply == 'C' || driverReply == 'R')) {
                            status_color = "#844d06";
                            tr_icon_class = "cancel_icon";
                            tr_icon_title = i18n.__('cancelled');
                            travel_status = '<div style="color:' + status_color + ';">' + i18n.__('cancelled') + '</div>';
                            status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs cancelled" name="update_dispatch" id="update_dispatch_' + tripId + '" value="' + i18n.__('dispatch') + '" >' + i18n.__('cancelled') + '</button>';
                            edit = '<button type="submit" class="btn btn-outline btn-primary btn-xs update_dispatch" name="update_dispatch" id="update_dispatch_' + tripId + '_' + COMPANY_ID + '" value="' + i18n.__('dispatch') + '" >' + i18n.__('reassign') + '</button>';
                        } else if (travelStatus == 10) {
                            status_color = "#1339f9";
                            tr_icon_class = "reassign_icon";
                            tr_icon_title = i18n.__('reassign');
                            travel_status = '<div style="color:' + status_color + ';">' + i18n.__('reassign') + '</div>';
                            status_button = '<button type="submit" class="btn btn-outline btn-primary btn-xs update_dispatch" name="update_dispatch" id="update_dispatch_' + tripId + '_' + taxiCompanyId + '" value="' + i18n.__('dispatch') + '" >' + i18n.__('reassign') + '</button>';
                            edit = '<a href="javascript:;" class="edit-ico status ' + trcolor + '" name="edit" id="addtr_' + tripId + '" value="' + i18n.__('dispatch') + '" ><i class="glyphicon glyphicon-edit">&nbsp;</i></a>';
                            cancel = '<a href="javascript:;" class="remove-ico status cancelBtn" name="cancel" id="cancel_' + tripId + '_' + driverId + '" value="' + i18n.__('dispatch') + '" ><i class="glyphicon glyphicon-remove">&nbsp;</i></a>';
                        }


                        class_tag = '';
                        bgstyle = '';

                        ////////console.log('bookTag',bookTag);

                        if (bookTag == "N") {

                            try {

                                ////////console.log("herreee booktag");

                                tag = i18n.__("normal_book");
                                link = bookType;
                                if (zoneFareApplicable == 1) {
                                    class_tag = "style='color: #f91313;'";
                                    link = i18n.__('zone') + '<br>';
                                }
                                else if (airportPickup == 1) {
                                    class_tag = "style='color: #ff9600;'";
                                    link = i18n.__('airport') + '<br>';
                                    //$airport_info = 'FN :'.$airport_flight_number.'\nP :'.$no_passengers.'\nL :'.$max_luggage;
                                    var airport_info = airportFlightNumber;
                                    if (airportFlightNumber != "") {
                                        link += '<a href="javascript:void(0)" style="color:#000;text-decoration:none;cursor:default;" title="' + airport_info + '"><img src="' + base_url + '/public/images/notes.jpg"></a>';
                                    }
                                }
                                else {
                                    ////////console.log("herreee booktag else",driverId,travelStatus,confirmFlag,link);

                                    if (apply_estimate_fare == 1) {
                                        link += ' (Estimate fare applied)';
                                    }

                                    class_tag = (link == i18n.__('book_later')) ? "style='color: #1298ff;'" : "style='color: #07841e;'";

                                    if (driverId == 0) {
                                        var bgstyle = (link == i18n.__('book_later')) ? "" : "style='background: #c6ecc6;'";
                                        if (travelStatus == 0 && confirmFlag == 0 && link != i18n.__('book_later')) {

                                            status_button = '<button style="background:green;cursor:pointer" type="submit" class="btn btn-outline btn-primary btn-xs confirmBtn"  name="update_confirm" id="confirm_' + tripId + '_' + companyId + '" value="' + i18n.__('confirm') + '" >' + i18n.__('confirm') + '</button>';
                                        }

                                    }
                                }
                            }
                            catch (err) {
                                ////////console.log(err);
                            }

                        } else {
                            tag = i18n.__("recurrent_book");
                            link = '<a href="' + base_url + '/taxidispatchnode/recurrent_booking?booking_key=' + bookingKey + '">' + bookType + '</a>';
                        }

                        if (promo_fixed_fare_apply == 1 && passenger_discount > 0) {
                            paymentTypeMsg = i18n.__('fixed_promo_code');
                        } else {

                            paymentTypeMsg = get_payment_message(paymentType, walletAmountUsed, pendingAmt, advancePayment, driverEditStatus, addAmt);
                        }

                        if (pendingAmt == 0) {
                            pendingAmt = '';
                        }

                        var notes = element.notes;
                        var fare = element.fare;
                        var bookingKey = element.bookingKey;
                        var createdUser = element.createdUser;
                        var fixedPrice = fare + walletAmountUsed;

                        ////////console.log('fare',fare);
                        ////////console.log('walletAmountUsed',walletAmountUsed);

                        //console.log(element.editFare);

                        if (typeof (element.editFare) != 'undefined') {
                            var editFare = parseFloat(element.editFare[0]) + parseFloat(element.editFare[1]) + parseFloat(element.editFare[2]) + parseFloat(element.editFare[3]);
                            var actualPending = parseFloat(element.editFare[5]);
                        }
                        else {
                            var editFare = 0;
                            var actualPending = 0;
                        }

                        ////////console.log('edit fare',editFare);

                        var editFareText = "";
                        if (editFare > 0)
                            editFareText = "(" + editFare + ")";


                        if (travelStatus == 1) {
                            if (addAmt != '' && addAmt != 0) {
                                fixedAmt = addAmt + fixedPrice;
                                fixedEditFare = "<span class='fixed_payment_class'>(" + fixedAmt.toFixed(2) + ")</span>";
                            }
                            else {
                                fixedEditFare = "<span class='fixed_payment_class'>(" + actualPaidAmt.toFixed(2) + ")</span>";
                            }

                            if (promo_fixed_fare_apply == 1 && passenger_discount > 0) {
                                fixedPrice = passenger_discount;
                            }


                            pendingEditFare = "<span class='pending_payment_class'>(" + actualPending.toFixed(2) + ")</span>";
                            editFare = fixedEditFare + ' ' + pendingEditFare;

                        }
                        else {
                            editFare = '';
                            fixedEditFare = '';
                            pendingEditFare = '';
                            paymentTypeMsg = '';
                        }

                        passengerPendingAmtTxt = '';
                        // if(passengerPendingAmtTxt > 0)
                        // {
                        //    passengerPendingAmtTxt = "<span class='pass_pend_payment_class'>("+passengerPendingAmt+")</span>";
                        // }


                        trifare_text = '<td width="10%" id = "fare_' + tripId + '">' + '<span>' + fixedPrice.toFixed(2) + '</span>' + editFare + "</br>" + fare_edit + '</td>';

                        if (passengerWalletAmount < 0) {
                            passengerPendingAmtTxt = "<span class='pending_payment_class'>(" + passengerWalletAmount + ")</span>";
                        }
                        else {
                            passengerPendingAmtTxt = "<span class='fixed_payment_class'>(" + passengerWalletAmount + ")</span>";
                        }

                        // if(bookTag == "N") {
                        //     tag = i18n.__("normal_book");
                        //     link = bookTag;
                        // } else {
                        //     tag = i18n.__("recurrent_book");
                        //     link = '<a href="'+ base_url +'taxidispatch/recurrent_booking?booking_key='+bookingKey+'">'+bookTag+'</a>';
                        // }


                        var notesImg = '';

                        if (notes != '' && typeof (notes) != 'undefined')
                            notesImg = '<a href="javascript:void(0)" style="color:#000;text-decoration:none;cursor:default;" title="' +notes+'"><img src="' + base_url + '/public/images/notes.jpg"></a>';

                        try {
                            // var bookingTime = created_date.format('d-M-Y h:i:s A');
                            var bookingTime = common.convert_timezone(created_date);
                            //////console.log('created_date........',created_date);
                            //////console.log('pickup_time.........',pickup_time);
                            //var bookingTime = date.format(created_date,'DD MMM YYYY HH:mm:ss');
                            //             tripObj[i].booking_time = created_date.format('d-M-Y h:i:s A');
                            // tripObj[i].pickup_time =  pickup_time.format('d-M-Y h:i:s A');
                            //var pickupTime =  pickup_time.format('d-M-Y h:i:s A');
                            var pickupTime = common.convert_timezone(pickup_time);
                            //var pickupTime =  date.format(pickup_time,'DD MMM YYYY HH:mm:ss');
                            var driverName = Ucfirst(element.driverName);
                            var driverPhone = element.driverPhone;
                            var modelName = element.modelName;
                            var passengerPhone = element.passengerPhone;

                            /* Sasidharan apr 16 - 2022 */
                            if(typeof element.corporate_promocode != "undefined" && element.corporate_promocode) {
                                let promocode = typeof element.promocode != "undefined" ? element.promocode : "-";
                                passengerPhone = passengerPhone + " ("+promocode+")";
                                // passengerPhone = passengerPhone + "("+"CORP"+")";
                            }
                        }
                        catch (err) {
                            ////console.log(err);
                        }

                        //////console.log("trip minutes..........",tripMinutes*3600);
                        var tripMinutesLabel = '';
                        if (travelStatus == 1) {
                            tripMinutesLabel = "<span class='fixed_payment_class'>" + convsecstoformat(tripMinutes * 60) + "</span>";
                            if (tripDistance && tripDistance > 0) {
                                tripMinutesLabel += ' (' + parseFloat(tripDistance).toFixed(2) + ' ' + distanceUnit + ')';
                            }
                        }


                        tripObj[i].pickup_anchor = '<a target="blank" href="' + pickup_link + '">' + element.pickupLatitude + ',<br/>' + element.pickupLongitude + '</a>';
                        var pickupAnchor = '<a target="blank" href="' + pickup_link + '"><span>' + element.pickupLatitude + ',</span><br/><span>' + element.pickupLongitude + '</span></a>';

                        var dropAnchor = '';
                        if (element.dropLatitude != 0 && element.dropLongitude) {
                            tripObj[i].drop_anchor = '<a target="blank" href="' + drop_link + '">' + element.dropLatitude + ',<br/>' + element.dropLongitude + '</a>';
                            dropAnchor = '<a target="blank" href="' + drop_link + '"><span>' + element.dropLatitude + ',</span><br/><span>' + element.dropLongitude + '</span></a>';
                        }


                        if (element.adminNotes != '' && typeof (element.adminNotes) != 'undefined') {
                            tripObj[i].passengerText = '<a href="' + passenger_link + '"><a href="javascript:void(0)" style="color:#000;text-decoration:none;cursor:default;" title="' + element.adminNotes + '"><img src="' + base_url + '/public/images/passenger-notes.png">' + element.passengerName + '</a>';
                            passengerText = '<a href="' + passenger_link + '">' + Ucfirst(element.passengerName) + '</a><br/><a href="javascript:void(0)" title="' + element.adminNotes + '"><img src="' + base_url + '/public/images/passenger-notes.png"></a>';
                        }
                        else {
                            tripObj[i].passengerText = '<a href="' + passenger_link + '">' + Ucfirst(element.passengerName) + '</a>';
                            passengerText = '<a href="' + passenger_link + '">' + Ucfirst(element.passengerName) + '</a>';
                        }

                        //////console.log('passenger text..'+passengerText);
                        // tripObj[i].trColorClass =  entities.encode(trcolor_class);
                        // tripObj[i].trIconClass =  entities.encode(tr_icon_class);
                        // tripObj[i].statusColor =  entities.encode(status_color);
                        // tripObj[i].passengerPendingAmtTxt =  entities.encode(passengerPendingAmtTxt);
                        // tripObj[i].trIconTitle =  entities.encode(tr_icon_title);
                        // tripObj[i].editTabDisplay =  entities.encode(edit_tab_display);
                        // tripObj[i].edit =  entities.encode(edit);
                        // tripObj[i].tag =  entities.encode(tag);
                        // tripObj[i].link =  entities.encode(link);
                        // tripObj[i].notesImg =  entities.encode(notesImg);
                        // tripObj[i].statusButton =  entities.encode(status_button);


                        tripObjHtml += '<tr ' + bgstyle + '   align="center" class="' + trcolor_class + '  ' + tr_icon_class + '" id="addtr_' + tripId + '">';
                        tripObjHtml += '<td width="10%" style="border-left:5px solid ' + status_color + ';">' + bookingTime + '</td>';
                        tripObjHtml += '<td width="10%" >' + pickupTime + '</td>';

                        /* Sasidharan july 28 2022 */
                        let bookedBy = createdUser != "0" ? "W" : "A";

                        /* Sasidharan aug 15 2022 */
                        let surge_price_text = "";
                        let surge_price_status = typeof element.surge_price_status != "undefined" ? element.surge_price_status : 0;
                        let surge_price_percentage = typeof element.surge_price_percentage != "undefined" ? element.surge_price_percentage : 0;
                        if(surge_price_status == 1){
                          surge_price_text = '<br/><a href="javascript:void(0)" class="surge_price_applied" title="Surge Price Applied -'
                            +surge_price_percentage+
                            ' %" style="color:#000;text-decoration:none;cursor:default;" ><img src="http://www.q8grandlimo.com/public/images/surge-price.png"></a>';
                        }

                        if (travelStatus == 1) {
                            tripObjHtml += '<td width="5%" style="color:blue;text-decoration:none;"><a style="text-decoration:none;" target="_blank" href="' + base_url + '/transaction/transaction_details/' + tripId + '">' + tripId + "("+ bookedBy +")" +surge_price_text+'</a></td>';
                        } else {
                            tripObjHtml += '<td width="5%" style="color:blue;">' + tripId + "("+ bookedBy +")" +surge_price_text+'</td>';
                        }
                        tripObjHtml += '<td width="7%"><span>' + passengerText + '</span>' + passengerPendingAmtTxt + '</td>';

                        if (driverName != '') {
                            tripObjHtml += '<td width="7%">' + driverName + '</br>(' + driverPhone + ')</br>(' + driverCode + ')</td>';
                        } else {
                            /* Sasidharan aug 15 2022 */
                            let passenger_last_four_drivers = '';
                            let passenger_id = typeof element.passengerId != "undefined" ? element.passengerId : "";
                            if(passenger_id != '') {
                              let taxi_model_id = element.taxi_modelid != "undefined" ? element.taxi_modelid : 0;
                              passenger_last_four_drivers ='&nbsp;<a href="javascript:void(0)" class="view_last_four_drivers" title="Click to view last four drivers" id="passengerdrivers_'+passenger_id+'_'+tripId+'_'+taxi_model_id+'" style="color:#000;text-decoration:none;cursor:default;" ><img src="http://www.q8grandlimo.com/public/images/passenger-notes.png"></a>';
                            }
                            tripObjHtml += '<td width="7%">No Driver'+passenger_last_four_drivers+'</td>';
                        }


                        tripObjHtml += '<td width="5%">' + modelName + '</td>';
                        tripObjHtml += '<td width="5%">' + passengerPhone + '</td>';

                        if (manage_status == 0) {
                            tripObjHtml += '<td width="5%">' + currentLocation + '</br>' + pickupAnchor + '</td>';
                            tripObjHtml += '<td width="5%">' + dropLocation + '</br>' + dropAnchor + '</td>';
                        }
                        else {

                            if (currentLocation.length > 30) {
                                tripObjHtml += '<td width="5%">' + currentLocation.substring(0, 30); +'</td>';
                            }
                            else {
                                tripObjHtml += '<td width="5%">' + currentLocation; +'</td>';
                            }


                            if (dropLocation.length > 30) {
                                tripObjHtml += '<td width="5%">' + dropLocation.substring(0, 30); +'</td>';
                            }
                            else {
                                tripObjHtml += '<td width="5%">' + dropLocation; +'</td>';
                            }
                        }

                        //if(estimateTimeRemaining.search('/<span>/'))
                        // {
                        try {
                            /*if(fareCalculationType == 2)
                            tripObjHtml +='<td width="5%">'+tripMinutesLabel+'  <br>'+estimateTimeRemaining+'</td>';
                            else
                            tripObjHtml +='<td width="5%">'+parseFloat(tripDistance).toFixed(2)+' '+distanceUnit+'<br>'+estimateTimeRemaining+'</td>';*/

                            tripObjHtml += '<td width="5%">' + tripMinutesLabel + '<br>' + estimateTimeRemaining + '</td>';
                        }
                        catch (err) {
                            console.log(err);
                        }
                        // }
                        // else
                        // {
                        //     tripObjHtml +='<td width="5%">'+tripMinutes+'<br>00:00:00</td>';
                        // }


                        if (paymentTypeMsg != '')
                            tripObjHtml += '<td width="5%">' + paymentTypeMsg + '</td>';
                        else
                            tripObjHtml += '<td width="5%">-</td>';


                        tripObjHtml += trifare_text;

                        if (createdUser != 0)
                            tripObjHtml += '<td width="5%">' + createdUser + '</td>';
                        else
                            tripObjHtml += '<td width="5%">-</td>';

                        tripObjHtml += '<td width="6%" title="' + tr_icon_title + '">' + travel_status + '</td>';
                        // if(bookTag == "N") {
                        //     tag = i18n.__("normal_book");
                        //     link = bookType;
                        // } else {
                        //     tag = i18n.__("recurrent_book");
                        //     link = '<a href="'+base_url+'taxidispatch/recurrent_booking?booking_key='+bookingKey+'">'+bookTag+'</a>';
                        // }

                        /* Sasidharan oct 01 2022 */
                        let fareImage = "";
                        if(travelStatus == 1) {
                          fareImage = '<img data-id=' + tripId + ' class='+"fare_info_image" +' src="http://www.q8grandlimo.com/public/images/passenger-notes.png">';
                        }

                        tripObjHtml += '<td width="5%" title="' + tag + '"><span>' + link + '</span></td>';
                        tripObjHtml += '<td width="5%">' + notesImg + '</td>';
                        tripObjHtml += '<td colspan="2"><span>' + edit + cancel + '</span></td>';

                        /* Sasidharan oct 01 2022 added fareImage */
                        // tripObjHtml += '<td width="5%"><span>' + status_button + '</span></td>';
                        tripObjHtml += '<td width="5%"><span>' + status_button + fareImage +'</span></td>';
                        
                        tripObjHtml += edit_tab_display;
                        tripObjHtml += '</tr>';

                        done();


                        ////console.log('trip id',tripId);

                    }
                    catch (err) {
                        ////////console.log(err);
                    }

                });
            }
            else {

                tripObjHtml = "<div class='nodata'><p>No Trips Found</p></div>";
            }

            deferred.resolve(tripObjHtml);
            deferred.makeNodeResolver()
            message = null;
        });

    }
    catch (err) {
        //////console.log(err);
    }

    return deferred.promise;
}

exports.AllDriverList = function (q, data) {
    var deferred = q.defer();

    try {

        var base_url = global.settings.base_url;

        //////console.log("filter data",data);

        dispatchermodel.GetDriverList(q, data).then(function (driverresults) {

            var driverObj = [];
            var i = 0;
            //26 feb 2021
            var model_array = [];
            var counts = {};
            //26 feb 2021

            //console.log('length',driverresults.length);
            //console.log("driverresults",driverresults);
            if (driverresults.length > 0) {
                driverresults.forEach(function (element) {

                    //////////console.log('driver results status',((element.driver_status == 'A' && element.updatetime_difference <  global.settings.location_update_seconds) || (element.driver_status == 'B' && element.updatetime_difference <  global.settings.location_update_seconds) || (element.driver_status == 'F') ));

                    if ((element.driver_status == 'A' && element.updatetime_difference < global.settings.location_update_seconds) || (element.driver_status == 'B' && element.updatetime_difference < global.settings.location_update_seconds) || (element.driver_status == 'F')) {
                        //driverObj[i] = {};
                        try {
                            //console.log("element",element);
                            driverObj[i] = element;
                            var update_date = new Date(element.update_date);
                            update_date = update_date.format('Y-m-d h:i A');;

                            var driver_status_text = 'Free In';
                            var gps_text = 'GPS - OFF';
                            var markerColor = '';


                            if (element.gps_enable == 1)
                                gps_text = 'GPS - ON';

                            if (element.driver_status == 'F' && element.shift_status == 'IN') {
                                driver_status_text = 'Free IN';
                                markerColor = "#06841f";

                            }
                            else if (element.driver_status == 'A' && element.shift_status == 'IN') {
                                driver_status_text = 'Active';
                                markerColor = "#fb9705";

                            }
                            else if (element.driver_status == 'F' && element.shift_status == 'OUT') {
                                driver_status_text = 'Free OUT';
                                markerColor = "#337ab7";
                            }
                            else if (element.driver_status == 'B') {
                                driver_status_text = 'Busy';
                                markerColor = "#bf0401";

                            }

                            //26 feb 2021
                            if (element.shift_status != 'OUT') {
                                if (!counts.hasOwnProperty(element.model_id)) {
                                    counts[element.model_id] = 1;
                                } else {
                                    counts[element.model_id]++;
                                }
                                model_array.push(element.model_id);
                            }
                            //26 feb 2021

                            var isnum = /^\d+$/.test(element.trip_remaining_time);
                            if (element.driver_status == 'A' && isnum) {
                                driverObj[i].trip_remaining_time = convsecstoformat(element.trip_remaining_time * 60);
                            }

                            //console.log('bearinf',element.bearing);

                            driverObj[i].update_date = update_date;
                            driverObj[i].bearing = element.bearing;
                            driverObj[i].markerColor = markerColor;
                            driverObj[i].info = '<div class="info_drivercontent"><span class="info-content"><p>' + Ucfirst(element.name) + '</a> - ' + element.driver_code + '</p><p style="color:GoldenRod;">' + element.model_name + '</p><p style="color:GoldenRod;">' + gps_text + '</p><p style="color:green">' + driver_status_text + '</p><p>' + update_date + '</span></p></div>';
                            i++;
                        }
                        catch (err) {
                            ////////console.log(err)
                        }
                    }
                });

                //26 feb 2021
                console.log('model_array', model_array);
                console.log('counts', counts);
                var countsLength = Object.keys(counts).length;

                if (countsLength > 0) {
                    for (var key of Object.keys(counts)) {
                        console.log(key + " -> " + counts[key]);
                        var update_array = {
                            'total_drivers': parseInt(counts[key])
                        };
                        dispatchermodel.UpdateTotalDriver(q, key, update_array).then(function (updateresults) {
                            //console.log('updateresults',updateresults);
                        });
                    }
                }
                //26 feb 2021

                //let message = {'message':"Success",'results':results,'status':1}
                //////////console.log(driverresults);

                //////////console.log('driverObj',driverObj);
                deferred.resolve(driverObj);
                deferred.makeNodeResolver()
                driverObj = null;
            }
            else {
                ////////console.log('driverObj',driverObj);

                deferred.resolve(driverObj);
                deferred.makeNodeResolver()
                driverObj = null;
            }

        });
    }
    catch (err) {
        //////console.log(err);
    }

    return deferred.promise;
}

exports.BookingList = function (q, data) {

    var deferred = q.defer();

    try {

        var time_range = getStartingDateAndEndingDate(config.TIMEZONE);
        var before_two_date = getBeforeTwoDays(config.TIMEZONE);
        var d = new Date();
        var before_days = d.setDate(d.getDate() - 2);
        var base_url = global.settings.base_url;

        var manage_status = data.manage_status;


        dispatchermodel.GetBookingList(q, data, time_range, before_two_date).then(function (tripresults) {

            var tripObj = [];
            var tripObjHtml = '';
            var i = 0;

            if (tripresults.length > 0) {
                tripresults.forEach(function (element) {

                    try {

                        var trcolor = 'oddtr';
                        i++;
                        if (i % 2) {
                            trcolor_class = "show_tr_one";
                        } else {
                            trcolor_class = "show_tr_two";
                        }

                        var bgcolor = '';
                        var paymentType = element.paymentType;
                        var advancePayment = element.advancePayment;
                        var pendingAmt = element.pendingAmt;
                        var walletAmountUsed = element.walletAmountUsed;
                        var driverEditStatus = element.driverEditStatus;
                        var actualPaidAmt = element.actualPaidAmt;
                        var addAmt = element.addAmt;
                        var passengerPendingAmt = element.passengerPendingAmt;
                        var travelStatus = element.travelStatus;
                        var driverReply = element.driverReply;
                        var passengerWalletAmount = element.passengerWalletAmount.toFixed('2');
                        var tripId = element.tripId;
                        var companyId = element.companyId;
                        var driverId = element.driverId;
                        var travelStatus = element.travelStatus;
                        var driverReply = element.driverReply;
                        var bookTag = element.bookTag;
                        var airportPickup = element.airportPickup;
                        var zoneFareApplicable = element.zoneFareApplicable;
                        var confirmFlag = element.confirmFlag;
                        var bookType = element.bookType;
                        var created_date = new Date(element.createDate);
                        var pickup_time = new Date(element.pickupTime);
                        var actPickuptime = element.actPickuptime;
                        var approxDuration = element.approxDuration;
                        var currentTime = new Date();
                        var fare = element.fare;
                        var status_color = '';
                        var tr_icon_class = '';
                        var tr_icon_title = '';
                        var edit = 0;
                        var cancel = 0;
                        var fareEdit = 0;
                        var estimateTime = 0;
                        var estimateTimeRemaining = 0;
                        var confirmStatus = 0;

                        estimateTime = actPickuptime.getTime() - currentTime.getTime();
                        estimateTime = estimateTime / 1000;

                        estimateTimeRemaining = estimateTime - currentTime;

                        if (travelStatus == 0) {
                            status_color = "#1298ff";
                            tr_icon_class = "assign_icon";
                            tr_icon_title = i18n.__('assign');
                        } else if (travelStatus == 1) {
                            status_color = "#07841e";
                            tr_icon_class = "complete_icon";
                            tr_icon_title = i18n.__('completed');
                        } else if (travelStatus == 2) {
                            status_color = "#ff9600";
                            tr_icon_class = "inprogress_icon";
                            tr_icon_title = i18n.__('inprogress');
                        } else if (travelStatus == 3) {
                            status_color = "#f9c213";
                            tr_icon_class = "start_to_pickup_icon";
                            tr_icon_title = i18n.__('start_to_pickup');
                        } else if (travelStatus == 4) {
                            status_color = "#844d06";
                            tr_icon_class = "cancel_icon";
                            tr_icon_title = i18n.__('cancelled');
                        } else if (travelStatus == 5) {
                            status_color = "#f91313";
                            tr_icon_class = "waiting_payment_icon";
                            tr_icon_title = i18n.__('waiting_payment');
                        } else if (travelStatus == 6) {
                            status_color = "#1339f9";
                            tr_icon_class = "reassign_icon";
                            tr_icon_title = i18n.__('reassign');
                        } else if (travelStatus == 7) {
                            status_color = "#eb13f9";
                            tr_icon_class = "waiting_response_icon";
                            tr_icon_title = i18n.__('dispatched');
                        } else if (travelStatus == 7 && (driverReply == 'C' || driverReply == 'R')) {
                            status_color = "#844d06";
                            tr_icon_class = "cancel_icon";
                            tr_icon_title = i18n.__('cancelled');
                        } else if (travelStatus == 7) {
                            status_color = "#1339f9";
                            tr_icon_class = "reassign_icon";
                            tr_icon_title = i18n.__('reassign');
                        } else if (travelStatus == 8) {
                            status_color = "#844d06";
                            tr_icon_class = "cancel_icon";
                            tr_icon_title = i18n.__('cancelled');
                        } else if (travelStatus == 9 && driverReply == 'A') {
                            status_color = "#12ff00";
                            tr_icon_class = "confirm_icon";
                            tr_icon_title = i18n.__('confirmed');
                        } else if (travelStatus == 9 && (driverReply == 'C' || driverReply == 'R')) {
                            status_color = "#844d06";
                            tr_icon_class = "cancel_icon";
                            tr_icon_title = i18n.__('cancelled');
                        } else if (travelStatus == 10) {
                            status_color = "#1339f9";
                            tr_icon_class = "reassign_icon";
                            tr_icon_title = i18n.__('reassign');
                        }


                        tripObj[i] = element;

                        tripObj[i].trColorClass = trcolor_class;
                        tripObj[i].bgColor = bgcolor;

                        var pickupLink = "https://www.google.com/maps/search/?api=1&query=" + element.pickupLatitude + "," + element.pickupLongitude;

                        if (element.dropLatitude != 0 && element.dropLongitude != 0)
                            var dropLink = "https://www.google.com/maps/search/?api=1&query=" + element.dropLatitude + "," + element.dropLongitude;
                        else
                            var dropLink = '';

                        tripObj[i].pickupLink = pickupLink;
                        tripObj[i].dropLink = dropLink;

                        var paymentTypeMsg = get_payment_message(paymentType, walletAmountUsed, pendingAmt, advancePayment, driverEditStatus, addAmt);


                        if (bookTag == "N") {

                            try {

                                tag = i18n.__("normal_book");
                                link = bookType;
                                if (zoneFareApplicable == 1) {
                                    class_tag = "style='color: #f91313;'";
                                    link = i18n.__('zone') + '<br>';
                                }
                                else if (airportPickup == 1) {
                                    class_tag = "style='color: #ff9600;'";
                                    link = i18n.__('airport') + '<br>';
                                    //$airport_info = 'FN :'.$airport_flight_number.'\nP :'.$no_passengers.'\nL :'.$max_luggage;
                                    // var airport_info = airportFlightNumber;
                                    // if(airportFlightNumber != "") {
                                    //     link  += '<a href="javascript:void(0)" style="color:#000;text-decoration:none;cursor:default;" title="'+airport_info+'"><img src="'+base_url+'/public/images/notes.jpg"></a>';
                                    // }
                                }
                                else {
                                    ////////console.log("herreee booktag else",driverId,travelStatus,confirmFlag,link);

                                    class_tag = (link == i18n.__('book_later')) ? "style='color: #1298ff;'" : "style='color: #07841e;'";

                                    if (driverId == 0) {
                                        var bgstyle = (link == i18n.__('book_later')) ? "" : "style='background: #c6ecc6;'";
                                        if (travelStatus == 0 && confirmFlag == 0 && link != i18n.__('book_later')) {

                                            //status_button = '<button style="background:green;cursor:pointer" type="submit" class="btn btn-outline btn-primary btn-xs confirmBtn"  name="update_confirm" id="confirm_'+tripId+'_'+companyId+'" value="'+i18n.__('confirm')+'" >'+i18n. __('confirm')+'</button>';
                                            confirmStatus = 1;
                                            trIconTitle = i18n.__('confirm');

                                        }

                                    }
                                }
                            }
                            catch (err) {
                            }

                        } else {
                            tag = i18n.__("recurrent_book");
                            link = '<a href="' + base_url + '/taxidispatchnode/recurrent_booking?booking_key=' + bookingKey + '">' + bookType + '</a>';
                        }

                        if (typeof (element.editFare) != 'undefined') {
                            var editFare = parseFloat(element.editFare[0]) + parseFloat(element.editFare[1]) + parseFloat(element.editFare[2]) + parseFloat(element.editFare[3]);
                            var actualPending = parseFloat(element.editFare[5]);
                        }
                        else {
                            var editFare = 0;
                            var actualPending = 0;
                        }

                        ////////console.log('edit fare',editFare);

                        var editFareText = "";
                        if (editFare > 0)
                            editFareText = "(" + editFare + ")";


                        if (travelStatus == 1) {
                            if (addAmt != '' && addAmt != 0) {
                                fixedAmt = addAmt + fixedPrice;
                                //fixedEditFare = "<span class='fixed_payment_class'>("+fixedAmt+")</span>";
                                fixedEditFare = fixedAmt;
                            }
                            else {
                                //fixedEditFare = "<span class='fixed_payment_class'>("+actualPaidAmt+")</span>"; 
                                fixedEditFare = actualPaidAmt;
                            }

                            pendingEditFare = actualPending;
                            //editFare = fixedEditFare+' '+pendingEditFare;

                        }
                        else {
                            editFare = '';
                            fixedEditFare = '';
                            pendingEditFare = '';
                            paymentTypeMsg = '';
                        }



                        tripObj[i].paymentTypeMsg = paymentTypeMsg;
                        tripObj[i].statusColor = status_color;
                        tripObj[i].trIconClass = tr_icon_class;
                        tripObj[i].trIconTitle = tr_icon_title;
                        tripObj[i].tag = tag;
                        tripObj[i].link = link;
                        tripObj[i].edit = edit;
                        tripObj[i].cancel = cancel;
                        tripObj[i].fareEdit = fareEdit;
                        tripObj[i].bookingTime = created_date.format('d-M-Y h:i:s A');
                        tripObj[i].pickupTime = pickup_time.format('d-M-Y h:i:s A');
                        tripObj[i].editFare = editFare;
                        tripObj[i].fare = fare;
                        tripObj[i].fixedEditFare = fixedEditFare;
                        tripObj[i].pendingEditFare = pendingEditFare;
                        tripObj[i].estimateTimeRemaining = estimateTimeRemaining;
                        tripObj[i].confirmStatus = confirmStatus;

                        ////console.log("created user.............",createdUser);

                    }
                    catch (err) {
                        ////////console.log(err);
                    }

                });
            }
            else {

                tripObj = [];
            }

            deferred.resolve(tripObj);
            deferred.makeNodeResolver()
            message = null;
        });

    }
    catch (err) {
        //////console.log(err);
    }

    return deferred.promise;
}


function getBeforeTwoDays(timezone, date_format) {

    var d = new time.Date();
    d.setTimezone(timezone);
    //var d = new Date();
    var before_days = d.setDate(d.getDate() - 2);
    //////////console.log(d.getTimezone(),'-------->time zone');
    return new Date(before_days);
    //////////console.log(new Date(before_days),'------------dayssss');						
    //return dateFormat(new Date(now.toLocaleDateString()),"yyyy-mm-dd 00:00:00");			
}

function getCurrentDate(timezone, date_format) {

    var now = new time.Date();
    now.setTimezone(timezone);
    return dateFormat(new Date(now.toLocaleDateString()), "yyyy-mm-dd");
}

function getStartingDateAndEndingDate(timezone) {
    var now = new time.Date();
    now.setTimezone(timezone);
    start_date = dateFormat(new Date(now.toLocaleDateString()), "yyyy-mm-dd 00:00:00");
    ending_date = dateFormat(new Date(now.toLocaleDateString()), "yyyy-mm-dd 23:59:59");

    var start_date = new time.Date(start_date, timezone);
    var ending_date = new time.Date(ending_date, timezone);
    return [new Date(start_date.toLocaleString()), new Date(ending_date.toLocaleString())]
}

function calcTimeZone(offset) {
    // create Date object for current location
    var d = new Date();

    // convert to msec
    // subtract local time zone offset
    // get UTC time in msec
    var utc = d.getTime() + (d.getTimezoneOffset() * 60000);

    // create new Date object for different city
    // using supplied offset
    var nd = new Date(utc + (3600000 * offset));

    var rt_date = dateFormat(new Date(nd.toLocaleString()), "dd/mm/yyyy ");

    return rt_date;
    // return time as a string
    //return "The local time for "+ nd.toLocaleString();
}

function get_payment_message(payment_type, wallet_amount_used, pending_amt, advance_payment, driver_edit_status, add_amt = "", req) {
    ////////console.log(payment_type,wallet_amount_used,pending_amt,advance_payment,driver_edit_status,add_amt);
    var payment_type_msg = '';
    switch (parseInt(payment_type)) {
        case 1:
            try {
                payment_type_msg = i18n.__('cash_label');
                if (wallet_amount_used > 0)
                    payment_type_msg = i18n.__('wallet_cash_label');

                if (pending_amt > 0) {
                    if (driver_edit_status == 1) {
                        payment_type_msg = i18n.__('pending_label');
                    }
                    else {
                        payment_type_msg = i18n.__('fixed_label');
                    }
                }

                if (add_amt != '' && add_amt != 0) {
                    payment_type_msg = i18n.__('fixed_label');
                }
            }
            catch (err) {
                ////////console.log(err);
            }

            break;

        case 2:

            payment_type_msg = i18n.__('card_label');
            if (wallet_amount_used > 0)
                payment_type_msg = i18n.__('wallet_card_label');

            if (pending_amt > 0) {
                if (driver_edit_status == 1) {
                    payment_type_msg = i18n.__('pending_label');
                }
                else {
                    payment_type_msg = i18n.__('fixed_label');
                }
            }

            if (add_amt != '' && add_amt != 0) {
                payment_type_msg = i18n.__('fixed_label');
            }

            break;

        case 3:

            payment_type_msg = i18n.__('knet_label');

            if (wallet_amount_used > 0)
                payment_type_msg = i18n.__('wallet_knet_label');

            if (pending_amt > 0) {

                if (driver_edit_status == 1) {
                    payment_type_msg = i18n.__('pending_label');
                }
                else {
                    payment_type_msg = i18n.__('fixed_label');
                }
            }

            if (add_amt != '' && add_amt != 0) {
                payment_type_msg = i18n.__('fixed_label');
            }

            break;


        case 6:

            payment_type_msg = i18n.__('wallet_label');
            // if(advance_payment > 0)
            // payment_type_msg = i18n.__('advance_label');

            if (add_amt != '' && add_amt != 0) {
                payment_type_msg = i18n.__('fixed_label');
            }
            break;

    }
    ////////console.log(payment_type_msg);
    return payment_type_msg;
}


function convsecstoformat(secs) {
    // try
    // {
    // var hours = secs/3600;
    // hours = hours;
    // if(hours  < 0)
    // {
    // 	hours =0;
    // }
    //    if(hours  < 1)
    //    {
    //      hours = 0 ;
    //    }
    //    hours = hours.toFixed(0);

    //    ////console.log("hours.."+hours);

    // var minutes = (secs -(hours*3600))/60;
    // minutes = minutes.toFixed(0);
    //    ////console.log("minutes.."+minutes);

    // if(minutes  < 0)
    // {
    // 	minutes =0;
    // }

    //    if(minutes  < 1)
    //    {
    //      minutes = 0 ;
    //    }
    // var seconds = (secs -(hours*3600 + minutes*60));
    //    ////console.log("seconds1..",secs);
    //    ////console.log("seconds2..",(hours*3600 + minutes*60));
    //    ////console.log("seconds3.."+seconds);
    // seconds = seconds;
    // if(seconds  < 0)
    // {
    // 	seconds =0;
    // }

    //    if(minutes  < 1)
    //    {
    //      minutes = 0 ;
    //    }
    // hours= zeropadding(hours);
    // minutes = zeropadding(minutes);
    // seconds = zeropadding(seconds);

    // if(hours == '00' && hours == '')
    // {
    //   return minutes+":"+seconds ;
    // }
    // else
    // {
    //   return hours+":"+minutes+":"+seconds;
    // }
    // }
    // catch(err)
    // {
    //   //////console.log(err);
    //   return "00:00:00";

    // }

    if (secs >= 0) {

        var sec_num = parseInt(secs, 10); // don't forget the second param
        var hours = Math.floor(sec_num / 3600);

        var minutes = Math.floor((sec_num - (hours * 3600)) / 60);

        var seconds = sec_num - (hours * 3600) - (minutes * 60);


        if (hours < 10) { hours = "0" + hours; }
        if (minutes < 10) { minutes = "0" + minutes; }
        if (seconds < 10) { seconds = "0" + seconds; }
        return hours + ':' + minutes + ':' + seconds;
    }
    else {
        return '00:00:00';
    }

}

function zeropadding(a) {
    h = (a < 10) ? ("0" + a) : a;

    return h;
}


function Ucfirst(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}




