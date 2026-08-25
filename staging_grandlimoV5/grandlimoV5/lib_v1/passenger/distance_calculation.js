var apimodel = require('../../models/passapimodel_v1');
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
var urlencode = require('urlencode');
var haversine = require( 'haversine' );

var axios = require('axios');
var common=require('../../lib_v1/common.js');


exports.get_distance_calculation = function(q,req){

	let inputParams = req.body;

	var io = req.io;

	var deferred = q.defer();

	let message = {
		message:'',
		status:0
	};

	var hostname = global.settings.base_url; 

	var validate_error  = ValidateDistanceMatrix(q,inputParams);

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
		//console.log(inputParams);return false;

		var trip_id = inputParams.trip_id;

		if(inputParams.model_id){
			var user_model_id = inputParams.model_id;
		}else{
			var user_model_id = 0;	
		}

		if(inputParams.pickup_time){
			//inputParams.pickup_time = '2018-10-31 20:00:00';
			var pickup_time = convert_date_to_iso(inputParams.pickup_time);
		}else{
			var pickup_time = convert_date_to_iso(new Date());	
		}

		//console.log(pickup_time.getTime(),'pickup timeeeeee---->');


		GetGoogleMatrixDistance(q,inputParams).then(function(placeresults){
			
			console.error(placeresults)

			if(placeresults.status==1){

				//console.log(placeresults.google_result);


				var distance_data = placeresults.google_result[0].elements[0].distance;
				var duration_data = placeresults.google_result[0].elements[0].duration;

				var distance_km = parseFloat(distance_data.value/1000).toFixed(2); //meter to km conversion

				var travel_min = Math.round(duration_data.value/60); //seconds to minities

				var distance = distance_km;
				var minutes = parseInt(travel_min);
				var fare_result = [];

				apimodel.all_model_fare_details(q,user_model_id).then(function(modelresults){

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
                            		//~ //console.log('minutes-inn------>',minutes);
                            		//~ minute_per_time = Math.ceil(minutes/time);

                            		//~ minutes_cost = minute_per_time*minutes_cost;

                            		//~ total_fare = total_fare + minutes_cost;
                            		
                            		//minute_per_time = Math.ceil(minutes/time);
									minute_per_time = Math.ceil(minutes-time);
									//minutes_cost = minute_per_time*minutes_cost;                                    		
									minutes_cost = minutes_cost + (minute_per_time * per_minutes_fare);                                  		
									
									console.log("minutes_cost",minutes_cost);
									console.log("minute_per_time",minute_per_time);
									c_fare = total_fare + minutes_cost;
									if(c_fare < min_fare) {
										total_fare = minutes_fare = min_fare;
									} else {
										total_fare = minutes_fare = c_fare;	
									}
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

								//console.log('current_date---->',time_from.getTime());

								actual_pickup_time = pickup_time;//convert_timezone(actual_pickup_time);

                                //console.log(current_time <= time_to.getTime(),'current_time----- ',current_time >= time_from.getTime());
                                if(typeof(night_fare_per) != 'undefined'  && night_charge == 1){								

									if(actual_pickup_time.getTime() >= time_from.getTime() && actual_pickup_time.getTime() <= time_to.getTime() ){

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
											//console.log('calc2 error---->',err);
										}
									}									
								}           
										
							}
							catch(err)
							{
								//console.log("night calc error",err);
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
									//console.log('eveing err---->',err);
								}
							}							
							/**Evening fare calculation end**/


							if(global.settings.q8taxi_enable == 1)
                            {
                            	tax_amount = (tax/100)*total_fare;
                            	total_fare = total_fare +tax_amount;
                            }

							//var fare_obj = {};							
							//,'nightfare':nightfare,'eveningfare':eveningfare

							total_fare_new = roundUp(total_fare,1); //Round up the fare ex: 10.58 means 10.600

							total_fare = parseFloat(total_fare_new).toFixed(3);

							//console.log(total_fare_new,'---------->total_fare_new');

                            fare_result[i] = {'model_id':fareresults.model_id,'model_name':fareresults.model_name,'estimate_fare':total_fare,'nightfare':nightfare};
					
							i++;


						});//model list foreach


						// Update approxmate fare on change drop lat & long
						// try
						// {
						// 	if(trip_id && user_model_id && fare_result[0].model_id == user_model_id){
						// 		console.log(trip_id,'---------->trip_id');

						// 		 approx_fare = fare_result[0].estimate_fare;
						// 		 apimodel.update_estimate_fare(q,trip_id,approx_fare).then(function(updateresults){
						// 		 });

						// 	}else{
						// 		console.log('---------->no trip_id');
						// 	}
						// }catch(err){
						// 	console.log('tripp update err---->',err);
						// }

						message.message = req.__('estimate_fares');
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
						message.message = req.__('model_not_found');
						message.status = -1;
						deferred.resolve(message);
						deferred.makeNodeResolver()
						message=null;
					}
				}); //end model list query

			} //end google distance avail
			else{

				message.message = req.__('distance_not_found');
				message.status = -1;
				deferred.resolve(message);
				deferred.makeNodeResolver()
				message=null;
			}

		}) //call google distance

	}

	return deferred.promise;

}


function ValidateDistanceMatrix(q,input)
{
	var constraints = {		
		pickup_latitude: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		pickup_longitude: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		drop_latitude: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		drop_longitude: {
			presence: {allowEmpty: false,message:"not empty"},
		}
	};
	validate.options = {format: "flat"};
	var result = validate(input, constraints);
	return result;
}

function GetGoogleMatrixDistance(q,input){

	var deferred = q.defer();

	var details = {};

	//console.log(input);return false;

	//https://maps.googleapis.com/maps/api/distancematrix/json?units=metric&origins=11.0210,76.9663&destinations=11.0238,77.0197&key=AIzaSyDmXZoMyv0iswTL9duMdeWmLRAnPITm_OM
	//config.DISTANCE_MATRIX_MAP_KEY

	var params = 'origins='+input.pickup_latitude+','+input.pickup_longitude+'&destinations='+input.drop_latitude+','+input.drop_longitude+'&key='+global.settings.node_google_key;

	var map_url = 'https://maps.googleapis.com/maps/api/distancematrix/json?units=metric&'+params;

	//console.log(map_url,'----->map url');

	console.error(global.settings.node_google_key)

	  axios.get(map_url)
	  .then(response => {

		console.error(response);
		if(response.status==200){

			if(response.data.rows && typeof(response.data.rows[0].elements[0].status) != 'undefined' && response.data.rows[0].elements[0].status == 'OK'){

				details.status = 1;
				details.google_result = response.data.rows;
				deferred.resolve(details);
				deferred.makeNodeResolver();

			}else{
				details.status = 0;
				deferred.resolve(details);
				deferred.makeNodeResolver();				
			}
		}else{

			details.status = 0;
			deferred.resolve(details);
			deferred.makeNodeResolver();
		}
	    
		//console.log(response.data);
	  })
	  .catch(error => {
	    console.error(error);
		details.status = 0;
		deferred.resolve(details);
		deferred.makeNodeResolver();
	  });

	return deferred.promise;
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

function convert_date_to_iso_user(pickup_time)
{
	var pickup_time = new Date(urlencode.decode(pickup_time));

	var current_time = new Date();

	if(current_time.getTimezoneOffset() == '-330')
    pickup_time = pickup_time.getTime()+9000000;
	else
    pickup_time = pickup_time.getTime()-10800000;


    return new Date(pickup_time);
}


function roundUp(num, precision) {
  precision = Math.pow(10, precision);
  return Math.ceil(num * precision) / precision;
}
