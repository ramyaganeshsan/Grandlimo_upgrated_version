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
const { encode } = require('html-entities');



var common=require('../../lib_v1/common.js');


exports.dynamic_page= function(q,req){

	let inputParams = req.query;

	var deferred = q.defer();

	let message = {
		message:'',
		status:0
	};

	var hostname = global.settings.base_url; 

	var validate_error  = ValidateDynamicPage(q,inputParams);


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
		var page_name = inputParams.pagename;
		var device_type = inputParams.device_type;
		var details = {};

		apimodel.get_cms_content(q,page_name).then(function(cmsresults){

    		if(cmsresults.length > 0)
    		{
    			if(device_type == 2)
    			{
    				details.content  = encode(cmsresults[0].content);
    			}
    			else
    			{
    				details.content  = cmsresults[0].content ;
    			}
    			details.title  = cmsresults[0].menu ;
    			details.device_type  = device_type ;
				message.message = req.__('success');
				message.detail = details;
				message.status = 1;
				deferred.resolve(message);
				deferred.makeNodeResolver()
				message=null;
    		}
    		else
    		{
    			message.message = req.__('page_not_found');
				message.status = 2;
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

function ValidateDynamicPage(q,input)
{
	var constraints = {
		pagename: {
			presence: {allowEmpty: false,message:"not empty"},
		},	
		device_type: {
			presence: {allowEmpty: false,message:"not empty"},
		}
	};
	validate.options = {format: "flat"};
	var result = validate(input, constraints);
	return result;
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