var apimodel = require('../../models/passapimodel');
var favicon = require('../../config/favicon.json');
var config = require('../../config/common_config.json');
var q= require('q');
var validator = require('validator');
var validate = require("validate.js");
var dateFormat = require('dateformat');	
var time = require('time');
//var i18n = require('i18n');
var t=require('../../config/table_config.json');
var uniqid = require('uniqid');
var randomstring = require('randomstring');
var dateformatter = require('date-format-php');
var urlencode = require('urlencode');

var common=require('../../lib/common.js');

exports.update_ratings_comments= function(q,req){
	//let inputParams = JSON.parse(req.rawBody);
	let inputParams = req.body;

	var deferred = q.defer();

	let message = {
		message:'',
		status:0
	};

	var hostname = global.settings.base_url; 

	var validate_error  = ValidateUpdateRatings(q,inputParams);


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
		var ratings = inputParams.ratings;
		var driver_tags = urlencode.decode(inputParams.driver_tags);
		var comments = urlencode.decode(inputParams.comments);

		apimodel.get_trip_detail(q,trip_id).then(function(trip_results){

			if(trip_results.length > 0)
			{	
				try
				{
				if(driver_tags != '')
				{
					driver_tags = driver_tags.split(',');
				}
				var update_array = {
					'comments':comments,
					'rating':parseInt(ratings),
					'driver_tags':driver_tags
				};

				apimodel.update_ratings(q,trip_id,update_array).then(function(update_ratings){
					apimodel.update_ratings_completed(q,trip_id,update_array).then(function(update_ratings_completed){
						//if(update_ratings.result.nModified == 1 && update_ratings_completed.result.nModified == 1)
						//{
							message.message = req.__('rate_comment_updated');
							message.status = 1;
							deferred.resolve(message);
							deferred.makeNodeResolver();
							message=null;
						// }
						// else
						// {
						// 	message.message = req.__('try_again');
						// 	message.status = -1;
						// 	deferred.resolve(message);
						// 	deferred.makeNodeResolver();
						// 	message=null;
						// }
					});
				});
				}
				catch(err)
				{
					console.log(err);
				}
			}
			else
			{
				message.message = req.__('invalid_trip');
				message.status = -1;
				deferred.resolve(message);
				deferred.makeNodeResolver();
				message=null;
			}
		});
	}

	return deferred.promise;
}


function ValidateUpdateRatings(q,input)
{
	var constraints = {
		trip_id: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		ratings: {
			presence: {allowEmpty: false,message:"not empty"},
			numericality: {lessThanOrEqualTo: 5,message:"not greater than 5"},
		}
	};
	validate.options = {format: "flat"};
	var result = validate(input, constraints);
	return result;
}



// function get_travel_msg(travel_status)
// {
// 	var travel_msg = '';
// 	switch(travel_status)
// 	{
// 		case 1:
// 		travel_msg = req.__('fare_update_label');
// 		break;

// 		case 2:
// 		travel_msg = req.__('inprogress_label');
// 		break;

// 		case 3:
// 		travel_msg = req.__('arrived_label');
// 		break;

// 		case 5:
// 		travel_msg = req.__('completed_label');
// 		break;

// 		case 9:
// 		travel_msg = req.__('trip_confirmed_label');
// 		break;

// 		default:
// 		travel_msg = req.__('yet_assigned_label');
// 	}

// 	return travel_msg;
// }

// function getCurrentDate(timezone,date_format){

// 	var now = new time.Date();
// 	now.setTimezone(timezone);						
// 	return dateFormat(new Date(now.toLocaleDateString()),"yyyy-mm-dd");			
// }

// function getStartingDateAndEndingDate(timezone){
// 	var now = new time.Date();
// 	now.setTimezone(timezone);							
// 	start_date=dateFormat(new Date(now.toLocaleDateString()),"yyyy-mm-dd 00:00:00");		
// 	ending_date=dateFormat(new Date(now.toLocaleDateString()),"yyyy-mm-dd 23:59:59");

// 	var start_date = new time.Date(start_date, timezone);			
// 	var ending_date = new time.Date(ending_date, timezone);			
// 	return [new Date(start_date.toLocaleString()), new Date(ending_date.toLocaleString())]		
// }