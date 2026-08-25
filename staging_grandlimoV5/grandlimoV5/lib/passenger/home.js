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
var time = require('time');
//var i18n = require('i18n');
var t=require('../../config/table_config.json');
var uniqid = require('uniqid');
var randomstring = require('randomstring');
var dateformatter = require('date-format-php');

var common=require('../../lib/common.js');

var moment = require('moment-timezone');


exports.passenger_later_bookings= function(q,req){

	//let inputParams = JSON.parse(req.rawBody);
	let inputParams = req.body;

	var deferred = q.defer();

	let message = {
		message:'',
		status:0
	};

	var hostname = global.settings.base_url; 
	var iOS_Version_Number = global.settings.iOS_Version_Number; 
	var version_name = global.settings.version_name; 
	
	var vip_customer_limit = global.settings.wallet_advance_limit;
	var normal_customer_limit = global.settings.wallet_negative_limit; 

	var validate_error  = ValidateLaterBookings(q,inputParams);


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
			//console.log(config.TIMEZONE,'time------------------->');
		var timerange = getStartingDateAndEndingDate(config.TIMEZONE); //global.settings.timezone
		
		var passenger_id = inputParams.passenger_id;
		var device_type = inputParams.device_type; 
		var app_version = inputParams.app_ver; 
		var os_version = inputParams.os_ver; 
		var model_version = inputParams.mod_ver; 

		//console.log("heree0001");
		apimodel.passenger_profile_by_id(q,passenger_id).then(function(profile_results){
			//console.log("heree0002");
			var passenger_details = [];
			var current_app_version = '0.0';
			if(profile_results.length > 0)
			{
				passenger_details = profile_results[0];
				current_app_version = profile_results[0].app_version;
				passenger_details.profile_image = get_passenger_profile(profile_results[0].profile_image,hostname);
				if(passenger_details.vip_user && passenger_details.vip_user==1){
					if(passenger_details.wallet_amount < vip_customer_limit){
						passenger_details.wallet_limit_exceeded = 1;
					}
				}else{
					if(passenger_details.wallet_amount < normal_customer_limit){
						passenger_details.wallet_limit_exceeded = 1;
					}
				}

				passenger_details.profile_image = get_passenger_profile(profile_results[0].profile_image,hostname);
			}
			//console.log("heree0003");
			
			//console.log("heree0004========================>",timerange);
			apimodel.passenger_pending_list(q,passenger_id,timerange).then(function(pending_lists){
				//console.log("heree0004");
				var details = [];
				if(pending_lists.length > 0)
				{
					details = pending_lists;

					try
					{
					var current_date =  new Date();
					current_date = common.convert_timezone_date(current_date);

					var tomorrow = new Date();
					next_date = new Date(tomorrow.setDate(tomorrow.getDate()+1));

					//console.log(next_date);
					next_date = common.convert_timezone_date(next_date);


					var i = 0;
					pending_lists.forEach(function(element) {
						
						var confirm_flag = element.confirm_flag;
						var now_after = element.now_after;
						
						var pickup_time = element.pickup_time;
						if(current_date == common.convert_timezone_date(pickup_time))
						{
							details[i].pickup_day_text = req.__('today_label') ;

						}
						else if(next_date == common.convert_timezone_date(pickup_time))
						{
							details[i].pickup_day_text = req.__('tommorrow_label') ;
						}
						else
						{
							details[i].pickup_day_text = common.convert_timezone_date(pickup_time);
						}

						var pickup_time = element.pickup_time;

						details[i].pickup_date_text = common.convert_timezone_date(pickup_time);

						var pickup_time = element.pickup_time;

						details[i].pickup_time_text = common.convert_timezone_time(pickup_time);

						if(element.drop_time != '')
						details[i].drop_time = common.convert_timezone_date(element.drop_time);
						else
						details[i].drop_time = '';

						details[i].drivername = element.drivername+" "+element.driverlastname;
						details[i].driver_image = get_driver_profile(element.driver_image,hostname);
						details[i].travel_msg = get_travel_msg(req,element.travel_msg);
						details[i].pickup_time = common.convert_timezone(element.pickup_time);
						details[i].actual_pickup_time =common.convert_timezone(element.actual_pickup_time);

						////console.log("confirm_flag",confirm_flag);
						////console.log("now_after",now_after);
						
						if(confirm_flag == 0 && now_after == 0)
						details[i].travel_msg =req.__('await_confirmation');
						else if(confirm_flag == 0 && now_after == 0)
						details[i].travel_msg =req.__('dispatcher_confirmed');
						else
						details[i].travel_msg =req.__('dispatcher_confirmed');



						i++;
					});
					}
					catch(err)
					{
						console.log(err);
					}
				}
				//console.log("heree0005");
				apimodel.passenger_current_trip(q,passenger_id).then(function(current_trip){

					apimodel.get_passenger_added_promocode(q,passenger_id).then(function(promo_results){
						var promo_code = '';
						if(promo_results.length > 0 )
						 {
						 	promo_code = promo_results[0].promo_code;
						 }

						 passenger_details.promo_code = promo_code;

						var current_trip_id = '';
						if(current_trip.length > 0)
						{
							current_trip_id = current_trip[0]._id;
						}


						if(current_app_version != app_version)
						{
							var updateArray = {
								'app_version':app_version,
								'os_version':os_version,
								'model_version':model_version,
							};
							apimodel.update_passenger_details(q,passenger_id,updateArray).then(function(updateresults){
							});

						}

						message.message = req.__('success');
						message.detail = details;
						message.passenger_details = passenger_details;
						message.current_trip_id = current_trip_id;
						//var current_time = new Date();
						//message.current_time = current_time.format('Y-m-d H:i:s');
						message.current_time = moment().tz("Asia/Kuwait").format('YYYY-MM-DD HH:mm:ss');
						message.status = 1;
						deferred.resolve(message);
						deferred.makeNodeResolver();
						message=null;
					});
				});
			});
			
		});
	}

	return deferred.promise;
}



exports.check_confirmed_status= function(q,req){

	//let inputParams = JSON.parse(req.rawBody);

	let inputParams = req.body;

	var deferred = q.defer();

	let message = {
		message:'',
		status:0
	};

	var hostname = global.settings.base_url; 

	var validate_error  = ValidateConfirmedStatus(q,inputParams);


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
		var trip_id = inputParams.trip_id;

		//console.log("heree0001");
		apimodel.check_confirmed_status(q,trip_id).then(function(trip_results){

			if(trip_results.length > 0)
			{
				var travel_status = trip_results[0].travel_status;
				var confirm_flag = trip_results[0].confirm_flag;
				var book_type = trip_results[0].book_type;

				var message  ={};

				if(travel_status == 0 && confirm_flag == 1 && book_type != "Book Later")
				{
                        message = {
                            "message" : req.__('trip_confirmed_dispatcher'),
                            "status" : 1
                        }; 
                }
                else if(travel_status == 2 || travel_status == 3 || travel_status == 5 || (travel_status == 9 && driver_reply == 'A'))
                {
                     message = {
                        "message" : req.__('trip_confirmed_driver'),
                        "status" : 2
                    }; 
                }
                else if(travel_status == 6 || travel_status == 8 ||(travel_status == 9 && driver_reply == 'C'))
                {
                     message = {
                        "message" : req.__('trip_cancelled'),
                        "status" : 3
                    }; 
                }
                else
                {
                    message = {
                        "message" : req.__('trip_yet_confirmed_dispatcher'),
                        "status" : 0
                    };  
                }
				deferred.resolve(message);
				deferred.makeNodeResolver();
				message=null;
			}
			else
			{
				message = {
                        "message" : req.__('invalid_trip'),
                        "status" : -1
                    }; 
				deferred.resolve(message);
				deferred.makeNodeResolver();
				message=null;
			}
			
		});
	}

	return deferred.promise;
}


exports.passenger_update_drop_location= function(q,req){

	//let inputParams = JSON.parse(req.rawBody);

	let inputParams = req.body;

	var deferred = q.defer();

	let message = {
		message:'',
		status:0
	};

	var hostname = global.settings.base_url; 

	var validate_error  = ValidateUpdateDrop(q,inputParams);


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
		var trip_id = inputParams.trip_id;
		var drop_location = inputParams.drop_location;
		var drop_latitude = inputParams.drop_latitude;
		var drop_longitude = inputParams.drop_longitude;
		var user_type = inputParams.user_type;

		apimodel.get_trip_detail(q,trip_id).then(function(trip_results){

			try
			{

			if(trip_results.length > 0)
			{
				
				var driver_id = trip_results[0].driver_id;
				var passenger_id = trip_results[0].passengers_id;
				var pickup_location = trip_results[0].pickup_location;

                var pickup_latitude = trip_results[0].pickup_latitude;
				var pickup_longitude = trip_results[0].pickup_longitude;
				var taxi_modelid = trip_results[0].taxi_modelid;
				var actual_pickup_time = trip_results[0].actual_pickup_time;
				var fixed_estimate_fare_type = trip_results[0].fixed_estimate_fare_type;
				var hourly_booking = trip_results[0].hourly_booking;
				var airport_type = trip_results[0].airport_type;


				var loca_array = {'pickup_latitude':pickup_latitude,'pickup_longitude':pickup_longitude,'drop_latitude':drop_latitude,'drop_longitude':drop_longitude,'model_id':taxi_modelid,'actual_pickup_time':actual_pickup_time};

            	var update_array = {
					'drop_location':drop_location,
					'drop_latitude':drop_latitude,
					'drop_longitude':drop_longitude
				};

				apimodel.passenger_update_drop_location(q,trip_id,update_array).then(function(update_drop){
	                //console.log(trip_id,'-------------update_drop--->',update_drop.result.nModified);
							try
							{
							var tripdetails = {};

								if(update_drop.result.nModified == 1)
								{	

									//common.ApproximateDuration(q,pickup_location,drop_location).then(function(durationresults){	
									GetTripFareDurations(q,loca_array).then(function(durationresults){	

										//console.log(durationresults,'------------------>');

										try{
										estimate_fare = 0;
										if(durationresults.status==1){

											if(user_type && user_type=='P'){
												update_type = 1;
											}else{
												update_type = 2;
											}

											var duration_data = durationresults.google_result.duration.value;			

											//fixed apply KM fare only
											if(global.settings.fare_calculation_type ==  1 && ( ( fixed_estimate_fare_type && fixed_estimate_fare_type==1 ) || ( hourly_booking == 0 && airport_type == 0 ) ) ) {

												var estimate_fare = durationresults.model_fares[0].estimate_fare;

												var distance = durationresults.distance;

												estimate_fare = parseFloat(estimate_fare).toFixed(3);
												distance = parseFloat(distance).toFixed(2);

												var travel_min = Math.round(duration_data/60); //seconds to minities				
												var minutes = parseInt(travel_min);
												var fixed_estimate_model = parseInt(taxi_modelid);

												//update type 0- booking, 1- passenger, 2- driver
												var fixed_estimate_result = {'estimate_fare':estimate_fare,'estimate_km':distance,'estimate_duration':minutes,'estimate_model':fixed_estimate_model,'update_type':update_type};
												var update_estimate_array = {
													'approx_duration':parseInt(duration_data),
													'approx_fare':estimate_fare,
													'approx_distance':distance,
													'fixed_estimate_fare_type':1,
													'fixed_estimate_result':fixed_estimate_result
												};
											}else{

												var update_estimate_array = {'approx_duration':parseInt(duration_data)};
											}					

											//console.log('update_estimate_array',update_estimate_array);											
											apimodel.update_trip(q,update_estimate_array,trip_id).then(function(updateresults){	
											});											
										}
										}
										catch(err){
											console.log('err---->',err);
										}
										
											//console.log('drop0004');
										
										message = {'message':req.__('drop_location_update_sucessfully'),'driver_id':driver_id,'passenger_id':passenger_id,'status':1};

										var socket_driver_id = driver_id;
										var socket_passenger_id = passenger_id;
										//console.log('socket_pass_id',socket_pass_id);

                                        if(user_type && user_type=='P'){
												var SocketMsg = {'message':req.__('drop_location_update_sucessfully'),'driver_id':driver_id,'passenger_id':passenger_id,'trip_id':trip_id,'estimate_fare':estimate_fare,'status':28};
												common.emitDriver(socket_driver_id,SocketMsg);
											}else{
												var SocketMsg = {'message':req.__('drop_location_update_sucessfully'),'driver_id':driver_id,'passenger_id':passenger_id,'trip_id':trip_id,'estimate_fare':estimate_fare,'status':26};
												common.emitPassenger(socket_passenger_id,SocketMsg);
										}
									
										//console.log("SocketMsg",SocketMsg);		
											
										deferred.resolve(message);
										deferred.makeNodeResolver()
										message=null;
										
									});
								}
								else
								{
									message = {'message':req.__('drop_location_already_update'),'driver_id':driver_id,'passenger_id':passenger_id,'status':-1};
									deferred.resolve(message);
									deferred.makeNodeResolver()
									message=null;
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
				message = {
                        "message" : req.__('invalid_trip'),
                        "status" : -1
                    }; 
				deferred.resolve(message);
				deferred.makeNodeResolver();
				message=null;
			}

			}
			catch(err)
			{
				console.log(err);
			}
			
		});
	}

	return deferred.promise;
}


function promocode_add_list(q,passenger_id)
{
	var deferred = q.defer();

	var details = {};
	apimodel.get_passenger_added_promocode(q,passenger_id).then(function(promo_results){
		if(promo_results.length > 0 )
		{
			var user_status = results[0].user_status;
			promo_results.forEach(function(element) {

				var total_applied = element.total_applied;
				var promo_code = element.promo_code;
				var promo_limit = element.promo_limit;

				if(total_applied < promo_limit)
				{
					details.promo_code = promo_code;
					details.status = parseInt(1);
					deferred.resolve(details);
					deferred.makeNodeResolver()
					details=null;
				}

			});
			details.status = parseInt(0);
			deferred.resolve(details);
			deferred.makeNodeResolver()
			details=null;

		}
		else
		{
			details.status = 0;
			deferred.resolve(details);
			deferred.makeNodeResolver()
			details=null;
		}

	});

	return deferred.promise;

}


function ValidateLaterBookings(q,input)
{
	var constraints = {
		passenger_id: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		device_type: {
			presence:{allowEmpty: false,message:"not empty"},

		}
	};
	validate.options = {format: "flat"};
	var result = validate(input, constraints);
	return result;
}


function ValidateUpdateDrop(q,input)
{
	var constraints = {
		trip_id: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		drop_location: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		drop_latitude: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		drop_longitude: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		user_type: {
			presence: {allowEmpty: false,message:"not empty"},
		},
	};
	validate.options = {format: "flat"};
	var result = validate(input, constraints);
	return result;
}


function ValidateConfirmedStatus(q,input)
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

function get_passenger_profile(profile,hostname)
{
		var appRoot = global.settings.docroot;

	try{
		if (fs.existsSync(appRoot+'/public/uploads/passenger/'+profile) && profile != '') {
	 		return  hostname+'/'+'public/uploads/passenger/'+profile;
	 	}
	 	else
	 	{
	 		return  hostname+'/'+config.NO_IMAGE;
	 	}
 	}
 	catch(ex)
 	{
 		console.log('error',ex);
 	}
}

function get_driver_profile(profile,hostname)
{
	var appRoot = global.settings.docroot;

	try{
		if (fs.existsSync(appRoot+'/public/uploads/driver_image/'+profile) && profile != '' ) {
	 		return  hostname+'/'+'public/uploads/driver_image/'+profile;
	 	}
	 	else
	 	{
	 		return  hostname+'/'+config.NO_IMAGE;
	 	}
 	}
 	catch(ex)
 	{
 		console.log('error',ex);
 	}
}

function get_travel_msg(req,travel_status)
{
	var travel_msg = '';
	switch(travel_status)
	{
		case 1:
		travel_msg = req.__('fare_update_label');
		break;

		case 2:
		travel_msg = req.__('inprogress_label');
		break;

		case 3:
		travel_msg = req.__('arrived_label');
		break;

		case 5:
		travel_msg = req.__('completed_label');
		break;

		case 9:
		travel_msg = req.__('trip_confirmed_label');
		break;

		default:
		travel_msg = req.__('yet_assigned_label');
	}

	return travel_msg;
}

function getCurrentDate(timezone,date_format){

	var now = new time.Date();
	now.setTimezone(timezone);						
	return dateFormat(new Date(now.toLocaleDateString()),"yyyy-mm-dd");			
}

function getStartingDateAndEndingDate(timezone){
	try{
	var time = require('time');
	var now = new time.Date();
	now.setTimezone(timezone);							
	start_date=dateFormat(new Date(now.toLocaleDateString()),"yyyy-mm-dd 00:00:00");		
	ending_date=dateFormat(new Date(now.toLocaleDateString()),"yyyy-mm-dd 23:59:59");

	var start_date = new time.Date(start_date, timezone);			
	var ending_date = new time.Date(ending_date, timezone);			
	return [new Date(start_date.toLocaleString()), new Date(ending_date.toLocaleString())];
	}catch(err){
		console.log('getStartingDateAndEndingDate errr',err);
	}		
}

function convert_timezone(pickup_time)
{
	try
	{
	var current_time = new Date();

	if(current_time.getTimezoneOffset() == '-330')
    pickup_time = pickup_time.getTime()-9000000;
	else
    pickup_time = pickup_time.getTime()+10800000;


    return new Date(pickup_time);
	}
	catch(err)
	{
		//console.log(err);
	}
}

function convert_date_to_iso(pickup_time)
{
	try
	{
	var pickup_time = new Date(pickup_time);

	var current_time = new Date();

	if(current_time.getTimezoneOffset() == '-330')
    pickup_time = pickup_time.getTime()+9000000;
	else
    pickup_time = pickup_time.getTime();


    return new Date(pickup_time);
    }
	catch(err)
	{
		//console.log(err);
	}
}

function GetTripFareDurations(q,input){

	//var loca_array = {'pickup_latitude':pickup_latitude,'pickup_longitude':pickup_longitude,'drop_latitude':drop_latitude,'drop_longitude':drop_longitude,'model_id':taxi_modelid};
	var deferred = q.defer();

	let message = {
		message:'',
		status:0
	};

	var user_model_id = input.model_id;
	common.GetGoogleDistance(q,input).then(function(placeresults){	

		//console.log('res-->google',placeresults);
		if(placeresults.status==1){

				try{

				//console.log('res-->google',placeresults.google_result);

				var distance_data = placeresults.google_result[0].elements[0].distance;
				var duration_data = placeresults.google_result[0].elements[0].duration;

				
				var distance_km = parseFloat(distance_data.value/1000).toFixed(2); //meter to km conversion

				var travel_min = Math.round(duration_data.value/60); //seconds to minities

				var distance = distance_km;
				var minutes = parseInt(travel_min);
				var fare_result = [];
				}catch(err){
					console.log('errr',err);
				}
				//console.log('res-->google',distance_km);
				apimodel.all_model_fare_details(q,user_model_id).then(function(modelresults){

					//console.log(modelresults);

					if(modelresults.length > 0)
					{
						var i=0;

						var current_date_now = new Date();
						//Local to Kuwait time conversion
						if(current_date_now.getTimezoneOffset() == '-330')
					    	current_time = current_date_now.getTime()+9000000;
						else
					    	current_time = current_date_now.getTime();


						modelresults.forEach(function(fareresults) {

							try
							{
									base_fare            = fareresults.base_fare;
                                    min_km_range         = fareresults.min_km;
                                    min_km               = fareresults.min_km;
                                    min_fare             = fareresults.min_fare;
                                    cancellation_fare    = fareresults.cancellation_fare;
                                    below_above_km_range = fareresults.below_above_km;
                                    below_km             = fareresults.below_km;
                                    above_km             = fareresults.above_km;
                                    night_charge         = fareresults.night_charge;
                                    night_timing_from    = fareresults.night_timing_from;
                                    night_timing_to      = fareresults.night_timing_to;
                                    night_fare_per       = fareresults.night_fare;
                                    evening_charge       = fareresults.evening_charge;
                                    evening_timing_from  = fareresults.evening_timing_from;
                                    evening_timing_to    = fareresults.evening_timing_to;
                                    evening_fare_per     = fareresults.evening_fare;
                                    waiting_per_hour     = fareresults.waiting_time;
                                    minutes_cost         = fareresults.minutes_fare;
                                    time                 = fareresults.time;
                                    waiting_free         = fareresults.waiting_free;
                                    waiting_cost_min     = fareresults.waiting_time;
                                    airport_pickup_fare  = fareresults.airport_pickup_fare;
                                    airport_drop_fare    = fareresults.airport_drop_fare;
                                    hourly_fare_list     = fareresults.hourly_fare_list;
                                    nightfare_applicable = 0;
                                    evefare_applicable  = 0;

                                    //console.log(fareresults.model_id,'----> model iddd');
							}
							catch(err)
							{
								//console.log(err);
							}

							var total_fare = 0,distance_fare=nightfare=eveningfare=0;
							var fare_calculation_type = global.settings.fare_calculation_type;

							if(minutes <= time && global.settings.fare_calculation_type ==  2){
                                total_fare = base_fare;    
                            }

                            /**KM Fare calculation**/
                            if(global.settings.fare_calculation_type ==  1 || global.settings.fare_calculation_type == 3 )
                            {
                            	if(distance <= min_km)
                            	{
                            		total_fare = min_fare;
                            		distance_fare = min_fare;
                            	}
                            	else
                            	{
                            		if(distance < below_above_km_range)
                            		{
                                		distance_fare = (distance-min_km) * below_km;
                                		total_fare = base_fare + distance_fare;
                            		}
                            		else
                            		{
                            			distance_fare = (distance-min_km) * above_km;
                                		total_fare = base_fare + distance_fare;
                            		}
                            	}
                            }

                            /**Minites fare calculation**/
                            if(global.settings.fare_calculation_type ==  2 || global.settings.fare_calculation_type == 3)
                            {
                            	if(minutes > 0 && minutes > time)
                            	{
                            		//console.log('minutes-inn------>',minutes);
                            		minute_per_time = Math.ceil(minutes/time);

                            		minutes_cost = minute_per_time*minutes_cost;

                            		total_fare = total_fare + minutes_cost;
                            	}
                            }                                     

                            trip_fare =total_fare;

                            /**Night fare calculation **/
                            try
                            {
                            	// night_timing_from = '10:00:00';
                            	// night_timing_to = '23:00:00';
                            	//night_fare_per = -15;                            	

                            	var t1 = night_timing_from.split(":");
								var t2 = night_timing_to.split(":");

								var d = new Date();
								if(t1 > t2)
								{
								  d.setDate(d.getDate() + 1);
								}

								// console.log('t1',t1);
								// console.log('t2',t2);
								// console.log('d',d);

                            	var current_date = common.date_format(new Date(),'yyyy-mm-dd');
                            	var next_date = common.date_format(d,'yyyy-mm-dd');
                                var time_from = convert_date_to_iso(current_date+' '+night_timing_from);
								var time_to = convert_date_to_iso(next_date+' '+night_timing_to);

								//console.log('time_to',time_to);

								actual_pickup_time = convert_timezone(input.actual_pickup_time);

                                //console.log(current_time <= time_to.getTime(),'current_time----- ',current_time >= time_from.getTime());
                                if(typeof(night_fare_per) != 'undefined'  && night_charge == 1){								

									if(actual_pickup_time.getTime() >= time_from.getTime() && current_time <= time_to.getTime() ){

										//console.log('inside--> n fare');

										try
										{										
											if(night_fare_per < 0)
											{											
												//console.log("night fare calculation....");
												nightfare = (Math.abs(night_fare_per)/100)*total_fare;
												//console.log("evening fare calculation....",nightfare);
												nightfare = parseFloat(nightfare).toFixed(2);
												total_fare  = parseFloat(total_fare) - parseFloat(nightfare);
												nightfare_applicable = 1;
												nightfare  =  -nightfare;												
											}
											else
											{
												nightfare = (Math.abs(night_fare_per)/100)*total_fare;
												//console.log("evening fare calculation....",nightfare);
												nightfare = parseFloat(nightfare).toFixed(2);
												total_fare  = parseFloat(total_fare) + parseFloat(nightfare);
												nightfare_applicable = 1;
											}
										}
										catch(err)
										{
											console.log('calc2 error---->',err);
										}
									}									
								}           
										
							}
							catch(err)
							{
								console.log("night calc error",err);
							}
							/**Night fare calculation end **/


							/**Evening fare calculation**/
							var e1 = evening_timing_from.split(":");
							var e2 = evening_timing_to.split(":");

							var ed = new Date();
							if(e1 > e2)
							{
							  ed.setDate(ed.getDate() + 1);
							}

							var current_date = common.date_format(new Date(),'yyyy-mm-dd');
							var next_date = common.date_format(ed,'yyyy-mm-dd');
                            var even_time_from = convert_date_to_iso(current_date+' '+evening_timing_from);
							var even_time_to = convert_date_to_iso(next_date+' '+evening_timing_to);
                            
                            if(typeof(evening_fare_per) != 'undefined' && evening_charge == 1){
                            	
                            	try{
								
									if( actual_pickup_time.getTime() >= even_time_from.getTime() && actual_pickup_time.getTime() <= even_time_to.getTime() ){										

										if(evening_fare_per < 0)
										{										
											eveningfare = (Math.abs(evening_fare_per)/100)*total_fare;
											////console.log("evening fare calculation....",eveningfare);
											eveningfare = parseFloat(eveningfare).toFixed(2);
											total_fare  = parseFloat(total_fare) - parseFloat(eveningfare);
											eveningfare  =  -eveningfare;

											evefare_applicable = 1;
										}
										else
										{										
											eveningfare = (evening_fare_per/100)*total_fare;
											////console.log("evening fare calculation....",eveningfare);
											eveningfare = parseFloat(eveningfare).toFixed(2);
											total_fare  = parseFloat(eveningfare) + parseFloat(total_fare);
											evefare_applicable = 1;
										}
									}
								}
								catch(err)
								{
									console.log('eveing err---->',err);
								}
							}							
							/**Evening fare calculation end**/

							
							//var fare_obj = {};
							//total_fare = parseFloat(total_fare).toFixed(2);
							//,'nightfare':nightfare,'eveningfare':eveningfare

							total_fare_new = roundUp(total_fare,1); //Round up the fare ex: 10.58 means 10.600

							total_fare = parseFloat(total_fare_new).toFixed(3);

                            fare_result[i] = {'model_id':fareresults.model_id,'model_name':fareresults.model_name,'estimate_fare':total_fare};
					
							i++;


						});//model list foreach	
						
						message.distance = distance_km;
						message.duration = travel_min;
						message.model_fares = fare_result;
						message.google_result = placeresults.google_result[0].elements[0];
						message.status = 1;
						deferred.resolve(message);
						deferred.makeNodeResolver()
						message=null;

					} //end modelresults length
					else{						
						message.status = -1;
						deferred.resolve(message);
						deferred.makeNodeResolver()
						message=null;
					}
				}); //end model list query

			} //end google distance avail
			else{				
				message.status = -1;
				deferred.resolve(message);
				deferred.makeNodeResolver()
				message=null;
			}
	})

	return deferred.promise;

}

function roundUp(num, precision) {
  precision = Math.pow(10, precision);
  return Math.ceil(num * precision) / precision;
}


