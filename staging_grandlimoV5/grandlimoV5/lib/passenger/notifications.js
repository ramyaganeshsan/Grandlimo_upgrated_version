var apimodel = require('../../models/passapimodel');
var favicon = require('../../config/favicon.json');
var config = require('../../config/common_config.json');
var q= require('q');
var appRoot = require('app-root-path');
var validator = require('validator');
var fs = require('fs');
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


exports.get_passenger_notifications= function(q,req){

	let inputParams = req.body;

	var deferred = q.defer();

	let message = {
		message:'',
		status:0
	};

	var hostname = global.settings.base_url; 
	var appRoot = global.settings.docroot; 

	var validate_error  = ValidateNotificationsList(q,inputParams);


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

		apimodel.get_passenger_notifications(q).then(function(notificationresults){

			//console.log('notificationresults',notificationresults);

    		if(notificationresults.length > 0)
    		{
    			i=0;
    			notificationresults.forEach(function(element) {

    				var notifyimage = element.image;
    				var created_date = element.created_date;

    				notificationresults[i].image = get_notification_image(appRoot,notifyimage,hostname);
    				notificationresults[i].created_date = created_date.format('Y-m-d H:i:s');

    				i++;
    			})

				message.message = req.__('success');
				message.detail = notificationresults;
				message.status = 1;
				deferred.resolve(message);
				deferred.makeNodeResolver()
				message=null;
    		}
    		else
    		{
    			message.message = req.__('no_data');
				message.status = -1;
				deferred.resolve(message);
				deferred.makeNodeResolver()
				message=null;
    		}

	    });
		}
		catch(err)
		{
			//console.log(err);
		}
	}

	return deferred.promise;
}


exports.update_notify_logs= function(q,req){

	let inputParams = req.body;

	var deferred = q.defer();

	let message = {
		message:'',
		status:0
	};

	var hostname = global.settings.base_url; 
	var appRoot = global.settings.docroot; 

	var validate_error  = ValidateNotificationsLogs(q,inputParams);


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

		var insertArray = {
			'passenger_id':parseInt(inputParams.passenger_id),
			'notification_id':parseInt(inputParams.notification_id),
			'type':parseInt(1)
		};

		apimodel.update_notification_logs(q,insertArray).then(function(notificationresults){

				message.message = req.__('success');
				message.status = 1;
				deferred.resolve(message);
				deferred.makeNodeResolver()
				message=null;

	    });
		}
		catch(err)
		{
			//console.log(err);
		}
	}

	return deferred.promise;
}

function ValidateNotificationsList(q,input)
{
	var constraints = {
		// passenger_id: {
		// 	presence: {allowEmpty: false,message:"not empty"},
		// }
	};
	validate.options = {format: "flat"};
	var result = validate(input, constraints);
	return result;
}

function ValidateNotificationsLogs(q,input)
{
	var constraints = {
		passenger_id: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		notification_id: {
			presence: {allowEmpty: false,message:"not empty"},
		}

	};
	validate.options = {format: "flat"};
	var result = validate(input, constraints);
	return result;
}

function get_notification_image(appRoot,image,hostname)
{
	try{
		if (fs.existsSync(appRoot+'/'+'public/uploads/notification_image/'+image)) {
	 		return  hostname+'/'+'public/uploads/notification_image/'+image;
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