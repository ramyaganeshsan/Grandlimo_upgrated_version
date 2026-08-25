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


var common=require('../../lib_v1/common.js');


exports.past_booking_places= function(q,req){

	let inputParams = req.body;

	var io = req.io;

	var deferred = q.defer();

	let message = {
		message:'',
		status:0
	};

	var hostname = global.settings.base_url; 

	var validate_error  = ValidatePastBookingPlaces(q,inputParams);


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
		try
		{
		var passenger_id = inputParams.passenger_id;
		var latitude = inputParams.latitude;
		var longitude = inputParams.longitude;

		get_recent_trip_places(q,passenger_id,latitude,longitude).then(function(placeresults){

    		if(placeresults.status == 1)
    		{
    			var details = placeresults.detail;
				message.message = req.__('success');
				message.detail = details;
				message.status = 1;
				deferred.resolve(message);
				deferred.makeNodeResolver()
				message=null;
    		}
    		else
    		{
    			message.message = req.__('no_data');;
				message.status = -1;
				deferred.resolve(message);
				deferred.makeNodeResolver()
				message=null;
    		}

	    });
		}
		catch(err)
		{
			console.log(err);
		}
	}

	return deferred.promise;
}

exports.get_recent_places= function(q,req){

	let inputParams = req.body;

	var io = req.io;

	var deferred = q.defer();

	let message = {
		message:'',
		status:0
	};

	var hostname = global.settings.base_url; 

	var validate_error  = ValidateRecentPlaces(q,inputParams);


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
		try
		{
		var passenger_id = inputParams.passenger_id;
		var place_type = inputParams.place_type; // 0 - pickup, 1- drop location
		var pending_fav = 10;

		// console.log("socket connection..........",io);
		// try
		// {
		// io.emit('recent_trip',{});
		// }
		// catch(err)
		// {
		// 	console.log(err);
		// }

		apimodel.recent_trip_places(q,passenger_id,place_type,pending_fav).then(function(placeresults){

			//apimodel.recent_trip_places_complete(q,passenger_id,place_type,pending_fav).then(function(placeresults2){

			//console.log(placeresults2,'--->')

				if(placeresults.length > 0)
				{
					var details = placeresults;
					//var details = placeresults2.concat(placeresults);
					message.message = req.__('success');
					message.detail = details;
					message.status = 1;
					deferred.resolve(message);
					deferred.makeNodeResolver()
					message=null;
				}
				else
				{
					message.message = req.__('no_data');;
					message.status = -1;
					deferred.resolve(message);
					deferred.makeNodeResolver()
					message=null;
				}

			//});
		});
		}
		catch(err)
		{
			console.log(err);
		}
	}

	return deferred.promise;
}


function ValidatePastBookingPlaces(q,input)
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
		}
	};
	validate.options = {format: "flat"};
	var result = validate(input, constraints);
	return result;
}

function ValidateRecentPlaces(q,input)
{
	var constraints = {
		passenger_id: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		place_type: {
			presence: {allowEmpty: false,message:"not empty"},
		}
	};
	validate.options = {format: "flat"};
	var result = validate(input, constraints);
	return result;
}

function get_recent_trip_places(q,passenger_id,current_lat,current_lng)
{
	var deferred = q.defer();

	var details = {};

	try
	{

	apimodel.past_trip_places(q,passenger_id).then(function(place_results){
		//console.log("recentplace0001");
		if(place_results.length > 0)
		{	
			//console.log("recentplace0002");

			var place_list = [];
			var checkplace = [];
			var i=0;
			place_results.forEach(function(element) {

				//console.log('loop-'+i);

				try
				{

				var pickup_lat = element.pickup_latitude;
				var pickup_lng = element.pickup_longitude;
				var pickup_place = element.current_location;

				var drop_lat = element.drop_latitude;
				var drop_lng = element.drop_longitude;
				var drop_place = element.drop_location;

				var current_array = [current_lng,current_lat];
				var pickup_array = [pickup_lng,pickup_lat];
				var drop_array = [drop_lng,drop_lat];

				var options = {
					unit:'km',
					format:'[lon,lat]'
				};
				var distance = haversine(current_array,pickup_array,options);

				//console.log('place list',place_list);
				//console.log('pickup_place',pickup_place);
				//console.log('check',place_list.includes(pickup_place));
				//console.log('checkplace',checkplace);
				//console.log('checkplace status',checkplace.includes(pickup_place));
				//console.log('pickup place',pickup_place);

				if(distance > 1 && (checkplace.includes(pickup_place))  == false )
				{
					var place = {'place':pickup_place,'latitude':pickup_lat,'longitude':pickup_lng};
					place_list.push(place);
					checkplace.push(pickup_place);

				}

				if(place_list.length > 2)
				{
					details.detail = place_list;
					details.status = 1;
					deferred.resolve(details);
					deferred.makeNodeResolver()
				}

				var distance = haversine(current_array,drop_array,options);

				//console.log('checkplace drop status',checkplace.includes(drop_place));
				//console.log('drop place',drop_place);


				if(distance > 1 && (checkplace.includes(drop_place)) == false)
				{
					var place = {'place':drop_place,'latitude':drop_lat,'longitude':drop_lng};
					place_list.push(place);
					checkplace.push(drop_place);
				}

				if(place_list.length > 2)
				{
					details.detail = place_list;
					details.status = 1;
					deferred.resolve(details);
					deferred.makeNodeResolver()
				}
				}
				catch(err)
				{
					console.log(err);
				}
				i++;

			});
				details.detail = place_list;
				details.status = 1;
				deferred.resolve(details);
				deferred.makeNodeResolver()
		}
		else
		{
			//console.log("recentplace0003");

			details.status = 0;
			deferred.resolve(details);
			deferred.makeNodeResolver()
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
