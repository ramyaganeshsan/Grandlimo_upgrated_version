var apimodel = require('../../models/passapimodel');
var favicon = require('../../config/favicon.json');
var config = require('../../config/common_config.json');
var q= require('q');
var appRoot = require('app-root-path');
var validator = require('validator');
var fs = require('fs');
var validate = require("validate.js");
var dateFormat = require('dateformat');	
var md5 = require('md5');	
//var i18n = require('i18n');
var t=require('../../config/table_config.json');
var uniqid = require('uniqid');
var randomstring = require('randomstring');
var dateformatter = require('date-format-php');
var urlencode = require('urlencode');
var common=require('../../lib/common.js');
var mime = require('mime');
var urlencode = require('urlencode');
var moment = require('moment-timezone');



exports.nearestdriver_list= function(q,req){

	//let inputParams = JSON.parse(req.rawBody);
	let inputParams = req.body;

	var deferred = q.defer();

	let message = {
		message:'',
		status:0
	};

	var hostname = global.settings.base_url; 

	var validate_error  = ValidateNearestDrivers(q,inputParams);


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
		var passenger_id = inputParams.passenger_id;
		var latitude = inputParams.latitude;
		var longitude = inputParams.longitude;
		var motor_model = inputParams.motor_model;

		apimodel.passenger_current_trips(q,passenger_id).then(function(current_trips){

			if(current_trips.length > 0)
			{
				message.message = req.__('success');
				message.detail = current_trips[0];
				message.current_time = new Date();
				message.status = 4;
				deferred.resolve(message);
				deferred.makeNodeResolver();
				message=null;
			}
			else
			{
				apimodel.nearest_drivers(q,motor_model,latitude,longitude).then(function(driver_list){
					var driver_details = [];
					//console.log('driver_list',driver_list);

					var time_range = getStartingDateAndEndingDate(global.settings.timezone);
					if(driver_list.length > 0)
					{
						var i = 0;
						driver_list.forEach(function(element) {

							try
							{

							var driver_id = element._id.driver_id;

							var booking_limit = 0;
							if(element._id.booking_limit != undefined)
							booking_limit = element._id.booking_limit;
							//apimodel.currentday_booking_count(q,driver_id,time_range).then(function(count_results)
							//{
								// if(count_results.length > 0)
								// {
								// 	if(count_results[0].trip_count < booking_limit )
								// 	{
								// 		driver_details[i] = element._id;
								// 		i++;
								// 	}
								// }
								// else
								// {
									driver_details[i] = element._id;
									i++;
								//}
							//});
							}
							catch(err)
							{
								console.log(err);
							}

						});

						//console.log('driver_details',driver_details);

						apimodel.model_fare_details(q,motor_model).then(function(model_details){
							var fare_details = [];
							if(model_details.length > 0)
							{
								fare_details = model_details[0];
								fare_details.fare_calculation_type = global.settings.fare_calculation_type;
							}
							message.message = req.__('success');
							message.detail = driver_details;
							message.fare_details = fare_details;
							message.driver_around_miles = global.settings.default_mile;
							message.metric = global.settings.default_mile;
							message.status = 1;
							var current_time = new Date();
							message.current_time = current_time.format('Y-m-d H:i:s');
							deferred.resolve(message);
							deferred.makeNodeResolver();
							message=null;
						});
					}
					else
					{
						message.message = req.__('no_vehicle_msg');
						message.status = -1;
						var current_time = new Date();
						message.current_time = current_time.format('Y-m-d H:i:s');
						deferred.resolve(message);
						deferred.makeNodeResolver();
						message=null;	
					}		
				});
			}
		});
	}

	return deferred.promise;
}

exports.savebooking= function(q,req){

	//let inputParams = JSON.parse(req.rawBody);
	let inputParams = req.body;

	var deferred = q.defer();

	let message = {
		message:'',
		status:0
	};

	var hostname = global.settings.base_url; 



	var validate_error  = ValidateSavebooking(q,inputParams);


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
		var passenger_id = inputParams.passenger_id;
		var latitude = inputParams.latitude;
		var longitude = inputParams.longitude;
		var motor_model = inputParams.motor_model;
		//var promocode = inputParams.promocode;
		var promocode = inputParams.promo_code;
		var phone = inputParams.phone;
		var now_after = inputParams.now_after;
		var pickup_time = urlencode.decode(inputParams.pickup_time);
		var pickupDate = new Date(inputParams.pickup_time);
		if (isNaN(pickupDate.getTime()) && pickup_time) {
			pickupDate = new Date(pickup_time);
		}
		var createdDate = new Date();

		if (isNaN(pickupDate.getTime()) || pickupDate.getTime() < createdDate.getTime()) {
			message.message =
				"Pickup time should be greater than current time. Please choose a later pickup time.";
			message.status = -1;
			deferred.resolve(message);
			deferred.makeNodeResolver();
			return deferred.promise;
		}

		if (parseInt(now_after, 10) === 1) {
			var bookLaterMinutes = parseInt(global.settings.book_later_time, 10);
			if (!isNaN(bookLaterMinutes) && bookLaterMinutes > 0) {
				var minPickupMs = createdDate.getTime() + bookLaterMinutes * 60 * 1000;
				if (pickupDate.getTime() < minPickupMs) {
					message.message =
						"For schedule trip,your booking time should be greater than " +
						bookLaterMinutes +
						" minutes from now. Please choose a later pickup time.";
					message.status = -1;
					deferred.resolve(message);
					deferred.makeNodeResolver();
					return deferred.promise;
				}
			}
		}

		apimodel.passenger_profile_by_id(q,passenger_id).then(function(profile_results){

			if(profile_results.length > 0)
			{
				var user_status =  profile_results[0].user_status;
				var wallet_amount =  profile_results[0].wallet_amount;
				var wallet_block =  profile_results[0].wallet_block;
				var vip_user =  profile_results[0].vip_user;
				var phone =  profile_results[0].phone;
				var country_code =  profile_results[0].country_code;
				var admin_notes =  profile_results[0].notes;

				if(user_status == 'A')
				{
					check_promocode(q,promocode,phone,passenger_id).then(function(checkpromo_results){
						//console.log("savee001");
						
						if(checkpromo_results.status == 3)
						{
							message.message = req.__('invalid_promocode');
							message.status = 3;
							deferred.resolve(message);
							deferred.makeNodeResolver()
							message=null;
						}
						else if(checkpromo_results.status == 4)
						{
							message.message = req.__('promo_code_expired');
							message.status = 3;
							deferred.resolve(message);
							deferred.makeNodeResolver()
							message=null;
						}
						else if(checkpromo_results.status == 2)
						{
							message.message = req.__('promo_code_limit_exceed');
							message.status = 3;
							deferred.resolve(message);
							deferred.makeNodeResolver()
							message=null;
						}
						else if(checkpromo_results.status == 0)
						{
							message.message = req.__('invalid_promocode');
							message.status = 3;
							deferred.resolve(message);
							deferred.makeNodeResolver()
							message=null;
						}
						else
						{
							//console.log("savee002");

							try
							{
							if(wallet_amount <= global.settings.wallet_negative_limit && vip_user != 1)
							{
								message.message = req.__('wallet_limit_exceeded');
								message.status = 3;
								deferred.resolve(message);
								deferred.makeNodeResolver()
								message=null;
							}
							else if(vip_user == 1 && wallet_amount <= global.settings.wallet_advance_limit)
							{
								message.message = req.__('wallet_limit_exceeded');
								message.status = 3;
								deferred.resolve(message);
								deferred.makeNodeResolver()
								message=null;
							}
							else
							{
								//console.log("savee003");

								apimodel.check_passenger_trips(q,passenger_id).then(function(checktrip_results){

									if(checktrip_results.length > 0)
									{
										//console.log("savee005");

										message.message = req.__('passenger_in_journey');
										message.status = 3;
										deferred.resolve(message);
										deferred.makeNodeResolver()
										message=null;
									}
									else
									{
										//console.log("savee006");

										nearest_drivers_list(q,motor_model,latitude,longitude).then(function(driver_results){
											//console.log('driver_results123',driver_results);
												//console.log("savee007");
												try
												{

											if(driver_results.status == 1)
											{
													var driver_details = driver_results.driver_details;
													inputParams.driver_id  =driver_details[0].driver_id;
													inputParams.taxi_id  =driver_details[0].taxi_id;
													inputParams.company_id  =driver_details[0].company_id;
											}
											else
											{
												inputParams.driver_id  = parseInt(0);
												inputParams.taxi_id  =  parseInt(0);
												inputParams.company_id  = parseInt(0);
											}
												inputParams.pickup_latitude  = inputParams.latitude ;
												inputParams.pickup_longitude  = inputParams.longitude ;
												inputParams.no_passengers  = 0 ;
												inputParams.max_luggage  = 0 ;
												inputParams.airport_flight_number  = '' ;
												inputParams.airport_flight_time  = '' ;
												inputParams.airport_notes  = '' ;
												//inputParams.approx_distance = 0;
												//inputParams.approx_fare = 0;
												inputParams.distance_away = 0;
												//inputParams.distance = 0;
												inputParams.pickupdrop = '';
												inputParams.fixedprice = '';
												inputParams.passenger_admin_notes = admin_notes;
												
												if(inputParams.approx_fare && inputParams.approx_fare!=''){
													inputParams.approx_fare = inputParams.approx_fare;
												}else{
													inputParams.approx_fare = 0;
												}

												if(inputParams.distance && inputParams.distance!=''){
													inputParams.distance = inputParams.distance;
												}else{
													inputParams.distance = 0;
												}

												var driver_count = driver_results.length;
												var notification_time = global.settings.notification_settings;
												var total_notification_time = parseInt(notification_time)+parseInt(25);
												//console.log("savee008");
												}
												catch(err)
												{
													console.log(err);
												}

												savebooking_entry(q,inputParams).then(function(booking_results){
														//console.log("savee009",booking_results);


													if(now_after == 0 && booking_results.status == 1)
													{
														//console.log("savee010",driver_results.status);

														if(driver_results.status == 1)
														{

															apimodel.get_auto_id(q,t.MDB_DRIVER_REQUEST_DETAILS).then(function(autoid_results){
																//console.log("savee0101",autoid_results);

																if(autoid_results.length > 0)
																{
																	try
																	{
																	var inc_id = autoid_results[0]._id+1;
																	var insert_array = {
							                                        "_id" : parseInt(inc_id),
							                                        "trip_id" : booking_results.trip_id,
							                                        "available_drivers" : parseInt(inputParams.driver_id),
							                                        "total_drivers" : parseInt(inputParams.driver_id),
							                                        "selected_driver" : parseInt(inputParams.driver_id),
							                                        "status" : 0,
							                                        "rejected_timeout_drivers" : null,
							                                        "createdate" : new Date()
							                                    	}

							                                    	//driver emit
							          //                           	common.trip_notification(q,booking_results.trip_id).then(function(tripresults){

							          //                           		var status = tripresults.status;
																	// 	console.log('tripresults status',status);

																	// if(status == 1)
																	// 	{
																	// 		var details = checkresults.details;
																	// 		message.message = req.__('api_request_confirmed_passenger');
																	// 		message.status = 5;
																	// 		message.details = details;
																			
																	// 		var socket_driver_id = 'D-'+inputParams.driver_id;

																	// 		global.socketobj[socket_driver_id].emit("location_update_res",message);
																			//common.emitLocDriver(socket_driver_id,message)

																	// 	} else {
																	// 		console.log("Save Booking driver emit...else");
																	// 	}
							          //                           		});

																	var detail       = {
																	"passenger_tripid" :parseInt(booking_results.trip_id),
																	"notification_time" : notification_time,
																	"total_request_time" : total_notification_time,
																	"credit_card_status" : global.settings.skip_credit_card,
																	"model_id" : parseInt(motor_model),
																	"exists_flag" :0 
																	};

							                                    	apimodel.insert_request_details(q,insert_array).then(function(insert_results){

							                                    			common.emitDispatcher(req.io);

							                                    			message.message = req.__('api_request_confirmed_passenger');
																			message.status = 1;
																			message.travel_msg = req.__('dispatcher_confirmed');
																			message.detail = detail;
																			deferred.resolve(message);
																			deferred.makeNodeResolver()
																			message=null;
							                                    	});
							                                    	}
							                                    	catch(err)
							                                    	{
							                                    		console.log(err);
							                                    	}
																}

															});
														}
														else
														{
															try
															{
																var replace_array = {
																	'sitename':global.settings.app_name,
																	};

																pickup_time = new Date(pickup_time);

																var detail = {
																	"passenger_tripid" : booking_results.trip_id,
																	"exists_flag" :0 ,
																	"passenger_pickup_time": pickup_time.format('Y-m-d h:i:s A')
																	};
																var confirm_flag = 0
																var passenger_phone = country_code+phone;
																var msgtxt = req.__('api_request_disapatcher');
																apimodel.check_passenger_in_book_now(q,passenger_id,booking_results.trip_id).then(function(nowresults){
																	if(nowresults.length > 0)
																	{
																		var confirm_flag = nowresults[0].confirm_flag;
																		if(confirm_flag == 1)
																		{
																			detail.exists_flag  = parseInt(2);
																		}
																		else
																		{
																			msgtxt = req.__('nxt_no_driver');
																			detail.exists_flag  = parseInt(1);
																		}
																	}

																	common.emitDispatcher(req.io);

																	common.send_sms(q,passenger_phone,21,replace_array).then(function(checkresults){
																			message.message = msgtxt;
																			message.detail = detail;
																			message.travel_msg = req.__('await_confirmation');
																			message.status = 7;
																			deferred.resolve(message);
																			deferred.makeNodeResolver()
																			message=null;
																	});
																});
															}
															catch(err)
															{
																console.log(err);
															}
														}
													}
													else if(now_after == 1)
													{
														//console.log("savee011");

														if( booking_results.status == 1)
														{
															var replace_array = {
															'sitename':global.settings.app_name,
															};

															pickup_time = new Date(pickup_time);

															var detail = {
															"passenger_tripid" : booking_results.trip_id,
															"exists_flag" :0 ,
															"notification_time" : notification_time,
															"total_request_time" : total_notification_time,
															"credit_card_status" : global.settings.skip_credit_card,
															"passenger_pickup_time": pickup_time.format('Y-m-d h:i:s A')
															};

															common.emitDispatcher(req.io);

															var passenger_phone = country_code+phone;
															common.send_sms(q,passenger_phone,21,replace_array).then(function(checkresults){
																message.message = req.__('api_request_disapatcher');
																message.detail = detail;
																message.travel_msg = req.__('dispatcher_confirmed');
																message.status = 1;
																deferred.resolve(message);
																deferred.makeNodeResolver()
																message=null;
															});
														}
														else
														{
															var replace_array = {
															'sitename':global.settings.app_name,
															};

															pickup_time = new Date(pickup_time);

															var detail = {
															"passenger_tripid" : booking_results.trip_id,
															"exists_flag" :0 ,
															"notification_time" : notification_time,
															"total_request_time" : total_notification_time,
															"credit_card_status" : global.settings.skip_credit_card,
															"passenger_pickup_time": pickup_time.format('Y-m-d h:i:s A')
															};

															common.emitDispatcher(req.io);

															var passenger_phone = country_code+phone;
															common.send_sms(q,passenger_phone,21,replace_array).then(function(checkresults){

																if(airport_type == 1)
																{
																	message.message = req.__('api_request_disapatcher');
																}
																else
																{
																	message.message = req.__('api_response_no_driver');
																}

																message.detail = detail;
																message.status = 1;
																deferred.resolve(message);
																deferred.makeNodeResolver()
																message=null;
															});
														}

													}
													else
													{
														//console.log("savee012");

														message.message = req.__('try_again');
														message.status = 2;
														deferred.resolve(message);
														deferred.makeNodeResolver()
														message=null;
													}

												});

											//}

										});
									}
								});
							}

						}
						catch(err)
						{
							console.log(err);
						}
						}
					});
				}
				else
				{
					message.message = req.__('account_blocked');
					message.status = -1;
					deferred.resolve(message);
					deferred.makeNodeResolver()
					message=null;
				}
			}
			else
			{

			}

		});
	}

	return deferred.promise;
}

function nearest_drivers_list(q,motor_model,latitude,longitude)
{
	var deferred = q.defer();

	var details = {};

	try 
	{
		//console.log("nearest0001");
	apimodel.nearest_drivers(q,motor_model,latitude,longitude).then(function(drivers_results){
		var driver_details = [];
		var time_range = getStartingDateAndEndingDate(global.settings.timezone);
		if(drivers_results.length > 0)
		{
			//console.log("nearest0003");

			var i = 0;
			drivers_results.forEach(function(element) {
				var driver_id = element._id.driver_id;

				var booking_limit = 0;
				if(element._id.booking_limit != undefined)
				booking_limit = element._id.booking_limit;
				//apimodel.currentday_booking_count(q,driver_id,time_range).then(function(count_results)
				//{
					// if(count_results.length > 0)
					// {
					// 	console.log(count_results[0].trip_count);
					// 	if(count_results[0].trip_count < booking_limit )
					// 	{
					// 		driver_details[i] = element._id;
					// 		i++;
					// 	}
					// }
					// else
					// {
						driver_details[i] = element._id;
						i++;
					//}
				//});
			});

			details.status = 1;
			details.driver_details = driver_details;
			deferred.resolve(details);
			deferred.makeNodeResolver();
			details=null;
		}
		else
		{
			details.status = 0;
			deferred.resolve(details);
			deferred.makeNodeResolver();
			details=null;	
		}		

	});
	}
	catch(err)
	{
		console.log(err);
	}

	return deferred.promise;	

}
function save_nearest_drivers_list(q,motor_model,latitude,longitude)
{
	var deferred = q.defer();

	var details = {};

	try 
	{
		//console.log("nearest0001");
	apimodel.nearest_drivers(q,motor_model,latitude,longitude).then(function(drivers_results){
		var driver_details = [];
		var time_range = getStartingDateAndEndingDate(global.settings.timezone);
		if(drivers_results.length > 0)
		{
			//console.log("nearest0003");

			var i = 0;
			drivers_results.forEach(function(element) {
				var driver_id = element._id.driver_id;

				var booking_limit = 0;
				if(element._id.booking_limit != undefined)
				booking_limit = element._id.booking_limit;
				apimodel.check_trip_request_exists(q,driver_details[0].driver_id).then(function(existsresults){
					apimodel.check_trip_exists(q,driver_details[0].driver_id).then(function(tripexistsresults){

					//apimodel.currentday_booking_count(q,driver_id,time_range).then(function(count_results)
					//{
						// if(count_results.length > 0)
						// {
						// 	console.log(count_results[0].trip_count);
						// 	if(count_results[0].trip_count < booking_limit )
						// 	{
						// 		driver_details[i] = element._id;
						// 		i++;
						// 	}
						// }
						// else
						// {
							if(existsresults.length == 0 && tripexistsresults.length == 0)
							{
								driver_details[i] = element._id;
								i++;
							}
						//}
					//});

					});
				});
			});

			details.status = 1;
			details.driver_details = driver_details;
			deferred.resolve(details);
			deferred.makeNodeResolver();
			details=null;
		}
		else
		{
			details.status = 0;
			deferred.resolve(details);
			deferred.makeNodeResolver();
			details=null;	
		}		

	});
	}
	catch(err)
	{
		console.log(err);
	}

	return deferred.promise;	

}

function get_city_id(q,cityname)
{
	var deferred = q.defer();

	var details = {};
	apimodel.city_details_by_name(q,cityname).then(function(city_results){
		apimodel.default_city_details(q).then(function(city_results2){
			if(city_results2.length > 0 || city_results.length > 0)
			{
				var city_details = {};
				if(city_results.length > 0)
				{
					city_details = city_results[0];
				}

				if(city_results2.length > 0)
				{
					city_details = city_results2[0];
				}

				//console.log('city_details',city_details)

				var city_id = city_details.city_id;
				
					details.city_id = city_id;
					details.status = 1;
					deferred.resolve(details);
					deferred.makeNodeResolver()
					details=null
			}
			else
			{
				details.status = 0;
				deferred.resolve(details);
				deferred.makeNodeResolver()
				details=null
			}
		});
	});
	
	return deferred.promise;	

}

function savebooking_entry(q,input_data)
{
	//console.log('input data',input_data);

	var deferred = q.defer();

	var details = {};

	var cityname = input_data.cityname;

	//console.log('savebooking_entry001');
	get_city_id(q,cityname).then(function(city_results){
			//console.log('savebooking_entry002');

		var booking_key = randomstring.generate(10);

		booking_key = booking_key.toUpperCase();

		var search_cityid = 0;
		var company_id =1;
		var hourly_booking=airport_pickup=hourly_booking_hrs=fixed_estimate_fare_type=fixed_estimate_fare=0;
		var fixed_estimate_result = {};
		
		if(input_data.company_id != undefined && input_data.company_id  != 0)
		{
			 company_id =input_data.company_id;
		}

 		if(city_results.status == 1)
		{
			search_cityid = city_results.city_id;
		}

		if(input_data.hourly_booking && input_data.hourly_booking==1){
			hourly_booking=1;
		}
		
		if(input_data.airport_pickup){
			airport_pickup = input_data.airport_pickup;
		}		

		if(typeof(input_data.airport_type) == 'undefined' || input_data.airport_type == '' )
		{
			input_data.airport_type = 0;
		}

		if(input_data.hourly_booking_hrs){
			hourly_booking_hrs = input_data.hourly_booking_hrs;
		}
		
        if(typeof(input_data.approx_duration) == 'undefined' || input_data.approx_duration == '' )
		{
			input_data.approx_duration = 0;
		}

        try{
		if(input_data.fixed_estimate_fare_type && input_data.fixed_estimate_fare_type == 1 && hourly_booking==0 && airport_pickup==0 && input_data.approx_fare > 0){
			fixed_estimate_fare_type = 1;
			fixed_estimate_fare = parseFloat(input_data.approx_fare).toFixed(3);
			fixed_estimate_km = parseFloat(input_data.approx_distance).toFixed(2);
			fixed_estimate_duration = parseInt(input_data.approx_duration);
			fixed_estimate_model = parseInt(input_data.motor_model);

			fixed_estimate_result = {'estimate_fare':fixed_estimate_fare,'estimate_km':fixed_estimate_km,'estimate_duration':fixed_estimate_duration,'estimate_model':fixed_estimate_model,'update_type':0};
		}else{
			//console.log(hourly_booking,'else fixed_estimate_fare_type----------->',airport_pickup,'-------->appfare--->',input_data.approx_fare);
		}
		}catch(err){
			console.log(err,'----->err');
		}
		
		
		var sub_logid = input_data.sub_logid;
		//console.log('savebooking_entry003');

		apimodel.get_sublogid(q,sub_logid).then(function(sublog_results){
		//console.log('savebooking_entry004');

		if(sublog_results.length > 0)
		{
			var sub_log_id = sublog_results[0].sub_logid;
		}
			//console.log('savebooking_entry005');

			apimodel.get_driver_availability(q,cityname).then(function(availablity_results){
				//console.log('savebooking_entry006');

				if(availablity_results.length  == 0)
				{
					apimodel.get_last_logid(q,cityname).then(function(logid_results){
							//console.log('savebooking_entry007');

						try 
						{

						if(logid_results.length > 0 )
						{
							var inc_id = logid_results[0].last_logid + 1;
							var roundtrip = input_data.roundtrip;
							var now_after = input_data.now_after;
							var sub_logid = 0;
							//var pickup_time =  new Date();
							var pickupdrop = 0;
							var company_tax =0;
							if(roundtrip == 'true')
							{
								pickupdrop = parseInt(1);
							}
							var waitingtime = 0;

							var input_array = {
								'_id' :parseInt(inc_id),
								'passengers_id' : parseInt(input_data.passenger_id),
								'driver_id' : parseInt(input_data.driver_id),
								'booking_key' : booking_key,
								//'driver_reply' :"",
								'msg_status' : "",
								'company_id' : parseInt(company_id),
								'current_location' : urlencode.decode(input_data.pickupplace),
								'pickup_latitude' : input_data.pickup_latitude,
								'pickup_longitude' :input_data.pickup_longitude,
								'drop_location' : urlencode.decode(input_data.dropplace),
								'drop_latitude' : input_data.drop_latitude,
								'drop_longitude' : input_data.drop_longitude,
								'no_passengers' : parseInt(input_data.no_passengers),
								'max_luggage' : parseInt(input_data.max_luggage),
								'luggage' : parseInt(input_data.max_luggage),
								'hourly_booking' : parseInt(hourly_booking),
								'hourly_booking_hrs' : parseInt(hourly_booking_hrs),
								'airport_pickup' : parseInt(airport_pickup),
								'airport_flight_number' :input_data.airport_flight_number,
								'airport_flight_time' : input_data.airport_flight_time,
								'airport_notes' : input_data.airport_notes,
								'approx_distance' : parseFloat(input_data.approx_distance),
								'approx_duration' : parseInt(input_data.approx_duration),
								'approx_fare' : parseFloat(input_data.approx_fare),
								'time_to_reach_passen' : parseFloat(input_data.distance_away),
								'pickup_time' : new Date(input_data.pickup_time),
								'actual_pickup_time' : new Date(input_data.pickup_time),
								'waitingtime' : waitingtime,
								'createdate' : new Date(),
								'taxi_modelid' : parseInt(input_data.motor_model),
								'taxi_id' : parseInt(input_data.taxi_id),
								'booking_from' : 1,
								'search_city' : parseInt(search_cityid),
								'sub_logid' : parseInt(sub_logid),
								'notes_driver' : input_data.notes,
								'booking_from_cid' : parseInt(company_id),
								'company_tax' : parseFloat(company_tax),
								'bookingtype' : parseInt(1),
								'bookby' : parseInt(1),
								'travel_status' : 0,
								'promocode' : input_data.promo_code,
								'distance' : input_data.distance,
								'pickupdrop' : input_data.pickupdrop,
								'fixedprice' : input_data.fixedprice,
								'now_after' : parseInt(0),
								'book_type' : 'Book Now',
								'book_tag' : 'N',
								'payment_type' : input_data.payment_type,
								'rating' :0,
								'drop_time' :"",
								'driver_reply' :"",
								'driver_comments' :"",
								"payment_chosen_flag" : '0',
								"os_ver" : input_data.os_ver,
								"app_ver" : input_data.app_ver,
								"mod_ver" : input_data.mod_ver,
								"bookedby" : input_data.bookedby,
			        			"moved" : parseInt(0),
			                    "passenger_admin_notes":input_data.passenger_admin_notes,
			                    "fixed_estimate_fare_type":fixed_estimate_fare_type,
			                    "fixed_estimate_result":fixed_estimate_result,		
							};

							if(now_after == 0)
							{
								input_array.book_type = 'Book Now';
								input_array.book_tag = 'N';
								input_array.now_after =parseInt(0);
								input_array.pickup_time = add_extra_time(input_data.pickup_time);
								input_array.actual_pickup_time = add_extra_time(input_data.pickup_time);
								input_array.bookingtype = parseInt(1);
								input_array.bookby = parseInt(1);
							}
							else if(now_after == 1 && input_data.all_dates != '')
							{
								input_array.book_type = 'Schedule Trip',
								input_array.book_tag ='R',
								input_array.driver_id =parseInt(0),
								input_array.now_after =parseInt(1);
								input_array.recurrent_type =parseInt(0);
							 	input_array.pickup_time = convert_date_to_iso(input_data.pickup_time);
								input_array.actual_pickup_time = convert_date_to_iso(input_data.pickup_time);
								input_array.bookingtype = parseInt(2);
								input_array.bookby = parseInt(2);
								input_array.operator_id = parseInt(0);
								input_array.faretype = parseInt(0);
								input_array.travel_status = parseInt(0);
							}
							else
							{
								input_array.book_type = 'Book Later',
								input_array.book_tag ='N',
								input_array.now_after =parseInt(1);
								input_array.recurrent_type =parseInt(0);
								input_array.airport_type = parseInt(urlencode.decode(input_data.airport_type));
							 	input_array.pickup_time = convert_date_to_iso(input_data.pickup_time);
								input_array.actual_pickup_time = convert_date_to_iso(input_data.pickup_time);
								input_array.bookby = parseInt(2);
								input_array.bookingtype = parseInt(2);
								input_array.faretype = parseInt(0);
								input_array.operator_id = parseInt(0);
								input_array.travel_status = parseInt(0);
								input_array.driver_id =parseInt(0);
								input_array.taxi_id =parseInt(0);
							}

							if(hourly_booking==1){
								input_array.book_type = 'Hourly';
							}

							//console.log(input_array);

							apimodel.insert_passengers_logs(q,input_array).then(function(logid_results){
								//console.log('savebooking_entry008');

								var update_array ={
									'last_logid':inc_id
								}

								console.log(update_array);

								apimodel.update_siteinfo(q,update_array).then(function(logid_results){
									//console.log('savebooking_entry009');

									var update_sublog_array = {
										'sub_logid':parseInt(sub_logid)
									};

									apimodel.update_sublog_id(q,update_sublog_array,inc_id).then(function(logid_results){
													//console.log('savebooking_entry010');

										details.trip_id = inc_id;
										details.status = 1;
										deferred.resolve(details);
										deferred.makeNodeResolver()
										details=null
									});
								});
							});
						}
						}
						catch(err)
						{
							console.log(err);
						}
					});
				}
				else
				{
					details.status = 0;
					deferred.resolve(details);
					deferred.makeNodeResolver()
					details=null	
				}
			});
		});
	});
	
	return deferred.promise;	
}

/*
function check_promocode(q,promocode,phone,passenger_id)
{
	var deferred = q.defer();

	var details = {};
	try
	{
	if(promocode != '' && promocode != undefined)
	{
	apimodel.promocode_details(q,promocode).then(function(promo_results){
		apimodel.promocode_details_by_phone(q,passenger_id).then(function(promo_results2){
			if(promo_results2.length > 0 || promo_results.length > 0)
			{
				var promocode_details = {};
				if(promo_results.length > 0)
				{
					promocode_details = promo_results[0];

				}

				if(promo_results2.length > 0)
				{
					promocode_details = promo_results2[0];
				}

				var promo_start = promocode_details.start_date;
				var promo_end = promocode_details.expire_date;
				var total_applied = promocode_details.total_applied;
				var promo_limit = promocode_details.promo_limit;
				var current_date = new Date();
				var current_time =  current_date.getTime();
				var promo_starttime =  promo_start.getTime();
				var promo_endtime =  promo_end.getTime();

				if(promo_starttime > current_time)
				{
					details.status = 3;
					deferred.resolve(details);
					deferred.makeNodeResolver()
					details=null
				}
				else if(promo_endtime > current_time)
				{
					details.status = 4;
					deferred.resolve(details);
					deferred.makeNodeResolver()
					details=null	
				}
				else
				{
					if(total_applied > promo_limit)
					{
						details.status = 2;
						deferred.resolve(details);
						deferred.makeNodeResolver()
						details=null
					}
					else
					{
						details.status = 1;
						deferred.resolve(details);
						deferred.makeNodeResolver()
						details=null
					}
				}
			}
			else
			{
				details.status = 0;
				deferred.resolve(details);
				deferred.makeNodeResolver()
				details=null
			}
		});
	});
	}
	else
	{
		details.status = 1;
		deferred.resolve(details);
		deferred.makeNodeResolver()
		details=null
	}
	}
	catch(err)
	{
		console.log(err);
	}
	
	return deferred.promise;	

}
*/

function check_promocode(q,promocode,phone,passenger_id)
{
	var deferred = q.defer();

	var details = {};
	
	try
	{
	if(promocode != '' && promocode != undefined)
	{
		
	apimodel.promocode_details(q,promocode).then(function(promo_results){
		apimodel.promocode_count(q,promocode,passenger_id).then(function(promo_results2){
		
		console.log("promo_results",promo_results2.length)
		//return false;	
			
			if(promo_results2.length > 0 || promo_results.length > 0)
			{
				var promocode_details = {};
				if(promo_results.length > 0)
				{
					promocode_details = promo_results[0];

				}

				if(promo_results2.length > 0)
				{
					//promocode_details = promo_results2[0];
				}

				var promo_start = new Date(promocode_details.start_date);
				var promo_end = new Date(promocode_details.expire_date);
				var total_applied = promocode_details.total_applied;
				var promo_limit = promocode_details.promo_limit;
				var current_date = new Date();
				
				console.log('promo_starttime',promo_start);
				console.log('promo_endtime',promo_end);
				console.log('current_time',current_date);
				console.log('limit',promo_results2.length);
				
				if(promo_start < current_date && promo_end < current_date)
				{
					console.log('A');
					details.status = 4;
					deferred.resolve(details);
					deferred.makeNodeResolver()
					details=null
				}
				else if(promo_start > current_date && promo_end > current_date)
				{
					console.log('B');
					details.status = 3;
					deferred.resolve(details);
					deferred.makeNodeResolver()
					details=null	
				}
				else {
					
					if(promo_results2.length >= promo_limit)
					{
						console.log('D');
						details.status = 2;
						deferred.resolve(details);
						deferred.makeNodeResolver()
						details=null
					}
					else
					{
						console.log('E');
						details.status = 1;
						deferred.resolve(details);
						deferred.makeNodeResolver()
						details=null
					}
				}

			}
			else
			{
				details.status = 0;
				deferred.resolve(details);
				deferred.makeNodeResolver()
				details=null
			}
		});
	});
	}
	else
	{
		details.status = 1;
		deferred.resolve(details);
		deferred.makeNodeResolver()
		details=null
	}
	}
	catch(err)
	{
		console.log(err);
	}
	
	return deferred.promise;	

}


exports.get_driver_reply= function(q,req){

	//let inputParams = JSON.parse(req.rawBody);
	let inputParams = req.body;

	var deferred = q.defer();

	let message = {
		message:'',
		status:0
	};

	var hostname = global.settings.base_url; 

	var validate_error  = ValidateSavebookingGetDriverReply(q,inputParams);


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
		 	apimodel.get_trip_detail(q,inputParams.trip_id).then(function(tripresults){
			var message={};	
			var detail	 ={};	     
				if(tripresults.length > 0)
				{
					var driver_reply= tripresults[0].driver_reply; 

					 if (driver_reply == 'A') {
                               detail.trip_id=inputParams.trip_id;
                               detail.driverdetails = "";
                                
                               message.message=req.__("request_confirmed_passenger");
                               message.detail=detail;
                               message.status= 1;

                               deferred.resolve(message);
							   deferred.makeNodeResolver();
							   message=null;
                                
                            } else {
                  
                           common.update_cancel_trip_det(q,inputParams.trip_id).then(function(updateCancelTripResults){
                            	common.change_driver_status(q,inputParams.trip_id,'C').then(function(changeDriverResults){
							    	var update_trip_array = {
                                    		"status" : 4
                                			}

                            		apimodel.update_driver_status(q,update_trip_array,inputParams.trip_id).then(function(updateresults){
                              			message.message=req.__("request_canceled_passenger");
                              			message.status=3;
										deferred.resolve(message);
										deferred.makeNodeResolver();
										message=null;

									});
                            			
                            		});

                            		});

                            }
																			
					} else {
					message.message = req.__('invalid_trip');
					message.status = -1;
					deferred.resolve(message);
					deferred.makeNodeResolver()
					message=null;
					}
				});
	}

	return deferred.promise;
}

function ValidateNearestDrivers(q,input)
{
	var constraints = {
		passenger_id: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		latitude: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		longitude: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		motor_model: {
			presence: {allowEmpty: false,message:"not empty"},
		}
	};
	validate.options = {format: "flat"};
	var result = validate(input, constraints);
	return result;
}

function ValidateSavebooking(q,input)
{
	//{"cityname":"","motor_model":"1","approx_duration":"","drop_latitude":"","airport_pickup":"1","mod_ver":"iPhone%20Plus","passenger_id":"7855",
	//"latitude":"29.240021","flag":"1","drop_longitude":"","pickup_time":"2018-06-23%2009:20:10","sub_logid":"","now_after":"1",
	//"os_ver":"11.4","payment_type":"1","promo_code":"","longitude":"47.971424","dropplace":"","app_ver":"4.4",
	//"pickupplace":"Kuwait%20Airport,%20Al%20Farwaniyah%20Governorate,%20Kuwait","all_dates":"","notes":"","bookedby":"7855","airport_type":"1"}
	var constraints = {
		motor_model: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		mod_ver: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		passenger_id: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		latitude: {
			presence: {allowEmpty: false,message:"not empty"},
			exclusion: {within: [0],message: "'%{value}' is not allowed"}
		},
		longitude: {
			presence: {allowEmpty: false,message:"not empty"},
			exclusion: {within: [0],message: "'%{value}' is not allowed"}

		},
		pickup_time: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		now_after: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		os_ver: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		app_ver: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		pickupplace: {
			presence: {allowEmpty: false,message:"not empty"},
		}
	};
	validate.options = {format: "flat"};
	var result = validate(input, constraints);
	return result;
}




function ValidateSavebookingGetDriverReply(q,input)
{
	var constraints = {
		trip_id: {
			presence: {allowEmpty: false,message:"not empty"},
		}
	};
	validate.options = {format: "flat"};
	var result = validate(input, constraints);
	return result;
}

function add_extra_time(pickup_time)
{
	var pickup_time = new Date(urlencode.decode(pickup_time));

	 var current_time = new Date();

	if(current_time.getTimezoneOffset() == '-330')
    pickup_time = pickup_time.getTime()+9090000;
	else
    pickup_time = pickup_time.getTime()-10710000;

    return new Date(pickup_time);
}

function convert_date_to_iso(pickup_time)
{
	var pickup_time = new Date(urlencode.decode(pickup_time));

	var current_time = new Date();

	if(current_time.getTimezoneOffset() == '-330')
    pickup_time = pickup_time.getTime()+9000000;
	else
    pickup_time = pickup_time.getTime()-10800000;


    return new Date(pickup_time);
}

function getCurrentDate(timezone, date_format) {
  return moment.tz(timezone || "UTC").format("YYYY-MM-DD");
}

function getStartingDateAndEndingDate(timezone) {
  var zone = timezone || "UTC";
  var start = moment.tz(zone).startOf("day").toDate();
  var end = moment.tz(zone).hour(23).minute(59).second(59).millisecond(0).toDate();
  return [start, end];
}
