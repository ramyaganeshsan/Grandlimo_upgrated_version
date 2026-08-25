var apimodel = require('../models/apimodel_v1');
var favicon = require('../config/favicon.json');
var config = require('../config/common_config.json');
var q= require('q');
var appRoot = require('app-root-path');
var validator = require('validator');
var fs = require('fs');
var validate = require("validate.js");
var dateFormat = require('dateformat');	
var time = require('time');
//var i18n = require('i18n');
var t=require('../config/table_config.json');
var uniqid = require('uniqid');
var common=require('../lib_v1/common.js');


exports.driver_shift_status= function(q,req){

	var deferred = q.defer();

	let inputParams = req.body;
	
	let message = {
		message:'',
		status:0
	};

	var time_range = getStartingDateAndEndingDate(config.TIMEZONE);

	var validate_error  = validateDriverShift(q,inputParams);

	if(validate_error != undefined)
	{
		if(validate_error[0])
		{
			message.message = validate_error[0];
			message.status = -1;
			deferred.resolve(message);
			deferred.makeNodeResolver()
			message=null;
		}
		else
		{
			message.message = req.__('validation_error');
			message.status = -1;
			deferred.resolve(message);
			deferred.makeNodeResolver()
			message=null;
		}
	}
	else
	{
		var userid = inputParams.driver_id;
		var reason = inputParams.reason;

		apimodel.get_driver_status(q,userid).then(function(checkresults){

			if(checkresults.length > 0)
			{
				var login_status = checkresults[0].login_status;
				var user_status = checkresults[0].status;
				var userid = checkresults[0]._id;

				if(user_status == 'B' || user_status == 'T')
				{
					message.message = req.__('user_blocked');
					message.status = -7;
					deferred.resolve(message);
					deferred.makeNodeResolver()
					message=null;
				}

				if(login_status == 'S')
				{
					var time_range = getStartingDateAndEndingDate(config.TIMEZONE);

					apimodel.driver_taxi_assign(q,userid,time_range).then(function(assignresults){

						if(assignresults.length > 0 )
						{

							var shiftstatus = inputParams.shiftstatus;
							var updateShiftArray = {
								'shift_status':shiftstatus,
								'status':'F'
							};

							
							var taxi_id = assignresults[0].taxi_id;
							var taxi_start_km= assignresults[0].starting_km;
							var current_shift_status= assignresults[0].shift_status;
							var current_status= assignresults[0].status;
	
							//console.log("here");
							//Shift Condition Start
							if(shiftstatus == 'IN')
							{
								//Shift In Update
								apimodel.update_driver_shift(q,updateShiftArray,userid).then(function(assignresults){
								
									apimodel.get_auto_id(q,t.MDB_SHIFT_HISTORY).then(function(autoidresults){

										if(autoidresults.length > 0 )
										{

											var last_insert_id = autoidresults[0]._id+1;
											var km_reach_status = 0;
											var taxi_service_id = 0;

											apimodel.ifTaxiReachService(q,taxi_start_km).then(function(taxiserviceresults){

												if(taxiserviceresults.length > 0)
												{
													km_reach_status = 1;
													taxi_service_id = taxiserviceresults[0]._id;
												}
											
												 let insertArray = {
			                                            "_id":last_insert_id,
			                                            "driver_shift_id" : parseInt(userid),
			                                            "taxi_id" : taxi_id,
			                                            "shift_start" : new Date(),
			                                            "shift_end" : "",
			                                            "reason" : reason,
			                                            "createdate" : new Date(),
			                                            "start_km" : parseInt(taxi_start_km),
														"end_km" : parseInt(0),
														"km_reach_status" : parseInt(km_reach_status),
														"taxi_service_id" : parseInt(taxi_service_id),
														"service_status" : "D",
														"status" : "Shift IN",
														"driver_id" : parseInt(userid),
			                                        };

		                                       apimodel.insert_shift_history(q,insertArray).then(function(insertresults){

		                                       		message.message = req.__('driver_shift');
													message.detail = {'update_id':last_insert_id};
													message.status = 1;
													deferred.resolve(message);
													deferred.makeNodeResolver()
													message=null;

		                                       });
		                                   });
										}
										else
										{
											message.message = req.__('try_again');
											message.status = -2;
											deferred.resolve(message);
											deferred.makeNodeResolver()
											message=null;
										}

									});
								});

							}
							else
							{
								if(current_status != 'F')
								{
									message.message = req.__('trip_in_future');
									message.status = -4;
									deferred.resolve(message);
									deferred.makeNodeResolver()
									message=null;
								}

								apimodel.driver_pending_trips(q,userid).then(function(pendingresults){

									if(pendingresults.length == 0)
									{
										//Shift OUT Update
										updateShiftArray.shift_status = 'OUT';
										var shift_update_id = inputParams.update_id;

										apimodel.update_driver_shift(q,updateShiftArray,userid).then(function(assignresults){

											 let insertArray = {
		    											"shift_end":new Date(),
                               							"status":"Shift OUT",
		                                        };

	                                       apimodel.update_shift_history(q,insertArray,shift_update_id).then(function(insertresults){

	                                       	message.message = req.__('driver_shift_out');
											message.status = 1;
											deferred.resolve(message);
											deferred.makeNodeResolver()
											message=null;

	                                       });
				                         
										});
									}
									else
									{
										message.message = req.__('trip_in_future');
										message.status = -4;
										deferred.resolve(message);
										deferred.makeNodeResolver()
										message=null;
									}

								});
							}
							//Shift Condition End

						}
						else
						{
							message.message = req.__('taxi_not_assigned');
							message.status = -3;
							deferred.resolve(message);
							deferred.makeNodeResolver()
							message=null;
						}
					});
				}
				else
				{
					message.message = req.__('driver_not_login');
					message.status = -1;
					deferred.resolve(message);
					deferred.makeNodeResolver()
					message=null;
				}
			}
			else
			{
				message.message = req.__('invalid_user_driver');
				message.status = -1;
				deferred.resolve(message);
				deferred.makeNodeResolver()
				message=null;
			}

		});
	}

	return deferred.promise;	
}


exports.driver_statistics= function(q,req){

	var deferred = q.defer();

	let inputParams = req.body;
	
	let message = {
		message:'',
		status:0
	};

	var validate_error  = validateDriverStatistics(q,inputParams);

	if(validate_error != undefined)
	{
		if(validate_error[0])
		{
			message.message = validate_error[0];
			message.status = -1;
			deferred.resolve(message);
			deferred.makeNodeResolver()
			message=null;
		}
		else
		{
			message.message = req.__('validation_error');
			message.status = -1;
			deferred.resolve(message);
			deferred.makeNodeResolver()
			message=null;
		}
	}
	else
	{
		var userid = inputParams.driver_id;
		apimodel.get_driver_status(q,userid).then(function(checkresults){

			if(checkresults.length > 0)
			{
				var login_status = checkresults[0].login_status;
				
//console.log('login_status',login_status);
				var userid = checkresults[0]._id;

				if(login_status == 'S')
				{
					apimodel.driver_profile(q,userid).then(function(profileresults){

					if(profileresults.length > 0 )
					{
						var driver_name = profileresults[0].name;
						var statistics = {};

						var time_range = getStartingDateAndEndingDate(config.TIMEZONE);

						apimodel.driver_statistics(q,userid,time_range).then(function(statisticsresults){

							if(statisticsresults.length > 0 )
							{
								var total_waiting_time = 0;

								try
								{
								statistics = statisticsresults[0];

								//console.log(statistics,'statistics-->');

								var time_driver_array = statisticsresults[0].waiting_time;

									time_driver_array.forEach(function(val) {

									 	if(val != '')
									 	{
											var waitingtime = val.split(':');

											if(waitingtime[0] != '' && waitingtime[0] != undefined)
											{
												total_waiting_time += parseInt(waitingtime[0])*60;
											}

											if(waitingtime[1] != '' && waitingtime[0] != undefined)
											{
												total_waiting_time += parseInt(waitingtime[1]);
											}
										}

									});

								if(statistics.total_km && statistics.total_km>0){
									statistics.total_km = parseFloat(statistics.total_km).toFixed(2);
								}

								statistics.waiting_time = convsecstoformat(total_waiting_time);
								statistics.today_earnings = statisticsresults[0].today_earnings.toFixed(2);
								if(statisticsresults[0].time_driven && statisticsresults[0].time_driven >0 ){
									var total_sec_driven = statisticsresults[0].time_driven * 60;
								}else{
									var total_sec_driven = 0;
								}
								//console.log(total_sec_driven,'total_sec_driven---');
								statistics.time_driven = convsecstoformatSec(total_sec_driven);
								}
								catch(err)
								{
									//console.log('error',err);
								}

								var app_version = inputParams.version_no;

								var updateShiftArray = {'app_version':app_version};

								apimodel.update_driver_shift(q,updateShiftArray,userid).then(function(assignresults){
									apimodel.driver_current_trip(q,userid).then(function(current_trip){

									var current_trip_id = 0;
									var current_travel_status = 0;
									if(current_trip.length > 0)
									{
									current_trip_id = current_trip[0]._id;
									current_travel_status = current_trip[0].travel_status;
									}


									message.message = req.__('success');
									statistics.driver_name =driver_name;
							 		message.detail = statistics;
							 		message.current_trip_id = current_trip_id;
							 		message.current_travel_status = current_travel_status;
							 		message.status = 1;
							 		deferred.resolve(message);
									deferred.makeNodeResolver()
									message=null;

									});
								});
							}
							else
							{
								var app_version = inputParams.version_no;

								var updateShiftArray = {'app_version':app_version};

								apimodel.update_driver_shift(q,updateShiftArray,userid).then(function(assignresults){
									apimodel.driver_current_trip(q,userid).then(function(current_trip){

									var current_trip_id = 0;
									var current_travel_status = 0;
									if(current_trip.length > 0)
									{
									current_trip_id = current_trip[0]._id;
									current_travel_status = current_trip[0].travel_status;

									}

									statistics.driver_name =driver_name;
									statistics.total_trip =0;
									statistics.completed_trip =0;
									statistics.total_earnings =0;
									statistics.overall_rejected_trips =0;
									statistics.cancelled_trips =0;
									statistics.today_earnings =0;
									statistics.total_km =0;
									statistics.shift_status ='IN';
									statistics.time_driven ="00:00";
									statistics.waiting_time ="00:00";
									statistics.status =1;

									message.message = req.__('success');
							 		message.detail = statistics;
							 		message.current_trip_id = current_trip_id;
							 		message.current_travel_status = current_travel_status;
							 		message.status = 1;
							 		deferred.resolve(message);
									deferred.makeNodeResolver()
									message=null;
								});
								});
							}
						});

					}
					else
					{
						message.message = req.__('invalid_user_driver');
						message.status = -1;
						deferred.resolve(message);
						deferred.makeNodeResolver()
						message=null;
					}
					});
				}
				else
				{
					message.message = req.__('driver_not_login');
					message.status = 15;
					deferred.resolve(message);
					deferred.makeNodeResolver()
					message=null;
				}
			}
			else
			{
				message.message = req.__('invalid_user_driver');
				message.status = -1;
				deferred.resolve(message);
				deferred.makeNodeResolver()
				message=null;
			}

		});
	}

	return deferred.promise;	
}


exports.send_sms_app= function(q,req){

	var deferred = q.defer();

	let inputParams = req.body;
	
	let message = {
		message:'',
		status:0
	};

	var validate_error  = validateSendSMS(q,inputParams);

	if(validate_error != undefined)
	{
		if(validate_error[0])
		{
			message.message = validate_error[0];
			message.status = -1;
			deferred.resolve(message);
			deferred.makeNodeResolver()
			message=null;
		}
		else
		{
			message.message = req.__('validation_error');
			message.status = -1;
			deferred.resolve(message);
			deferred.makeNodeResolver()
			message=null;
		}
	}
	else
	{
		var to  = inputParams.to;

		apimodel.check_passenger_phone(q,to).then(function(phoneresults){

			if(phoneresults.length > 0)
			{
				var replace_array = {
				'sitename':global.settings.sitename,
				'from':inputParams.from,
				'message':inputParams.content,
				};
				 common.send_sms(q,to,17,replace_array).then(function(checkresults){
					message.message = 'SMS sent succesfully';
					message.status = 1;
					deferred.resolve(message);
					deferred.makeNodeResolver()
					message=null;
				 });
			}
			else
			{
				message.message = req.__('invalid_user_driver');
				message.status = -1;
				deferred.resolve(message);
				deferred.makeNodeResolver()
				message=null;
			}
		});

	}

	return deferred.promise;	
}

function validateSendSMS(q,input)
{
	var constraints = {
		fromname: {
		presence: {allowEmpty: false,message:"not empty"},
	},		
	to: {
		presence: {allowEmpty: false,message:"not empty"},
	},
	content: {
		presence: {allowEmpty: false,message:"not empty"},
	},	
	app: {
		presence: {allowEmpty: false,message:"not empty"},
	}
	};
	validate.options = {format: "flat"};
	var result = validate(input, constraints);
	return result;
}


function validateDriverShift(q,input)
{
	var constraints = {
		driver_id: {
		presence: {allowEmpty: false,message:"not empty"},
	},		
	shiftstatus: {
		presence: {allowEmpty: false,message:"not empty"},
	}
	};
	validate.options = {format: "flat"};
	var result = validate(input, constraints);
	return result;
}

function validateDriverStatistics(q,input)
{
	var constraints = {
		driver_id: {
		presence: {allowEmpty: false,message:"not empty"},
		}
	};
	validate.options = {format: "flat"};
	var result = validate(input, constraints);
	return result;
}

function model_image_exists(hostname,val)
{
	try{
	if (fs.existsSync(appRoot+config.MODEL_IMGPATH+val)) {
 		return  hostname+'/'+config.MODEL_IMGPATH.val;
 	}
 	else
 	{
 		return  hostname+'/'+config.NO_IMAGE;
 	}
 	}
 	catch(ex)
 	{
 		//console.log('error',ex);
 	}
}


function convsecstoformat(secs)
{
	try
	{
	var hours = secs/3600;
	var minutes = (secs -(hours*3600))/60;
	var seconds = (secs -(hours*3600 + minutes*60));

	hours= zeropadding(hours.toFixed(0));
	minutes = zeropadding(minutes.toFixed(0));
	seconds = zeropadding(seconds.toFixed(0));

	if(hours == '00' && hours == '')
	{
		return minutes+":"+seconds;
	}
	else
	{
		return hours+":"+minutes+":"+seconds;
	}
	}
	catch(err)
	{
		//console.log(err);
	}

}

function zeropadding(a)
{
	h = (a < 10) ? ("0" + a) : a;

	return h;
}

function getCurrentDate(timezone,date_format){

	var now = new time.Date();
	now.setTimezone(timezone);						
	return dateFormat(new Date(now.toLocaleDateString()),"yyyy-mm-dd");			
}

function getStartingDateAndEndingDate(timezone){
	var now = new time.Date();
	now.setTimezone(timezone);							
	start_date=dateFormat(new Date(now.toLocaleDateString()),"yyyy-mm-dd 00:00:00");		
	ending_date=dateFormat(new Date(now.toLocaleDateString()),"yyyy-mm-dd 23:59:59");

	var start_date = new time.Date(start_date, timezone);			
	var ending_date = new time.Date(ending_date, timezone);			
	return [new Date(start_date.toLocaleString()), new Date(ending_date.toLocaleString())]		
}

function convsecstoformatSec(secs)
{
	var sec_num = parseInt(secs, 10); // don't forget the second param
    var hours   = Math.floor(sec_num / 3600);
    var minutes = Math.floor((sec_num - (hours * 3600)) / 60);
    var seconds = sec_num - (hours * 3600) - (minutes * 60);

    if (hours   < 10) {hours   = "0"+hours;}
    if (minutes < 10) {minutes = "0"+minutes;}
    if (seconds < 10) {seconds = "0"+seconds;}
    return hours+':'+minutes+':'+seconds;

}