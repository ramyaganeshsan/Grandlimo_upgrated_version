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
var urlencode = require('urlencode');
var common=require('../../lib/common.js');
var mime = require('mime');


//urlencode.decode(

exports.passenger_profile= function(q,req){

	//let inputParams = JSON.parse(req.rawBody);
	let inputParams = req.body;

	var deferred = q.defer();

	let message = {
		message:'',
		status:0
	};

	var hostname = global.settings.base_url; 

	var validate_error  = ValidatePassengerProfile(q,inputParams);


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

		//console.log("heree0001");
		apimodel.passenger_profile_by_id(q,passenger_id).then(function(profile_results){
			//console.log("heree0002");
			var passenger_details = [];
			if(profile_results.length > 0)
			{
				passenger_details = profile_results[0];
				passenger_details.profile_image = get_passenger_profile(profile_results[0].profile_image,hostname)
			
				message.message = req.__('success');
				message.detail = passenger_details;
				message.status = 1;
				deferred.resolve(message);
				deferred.makeNodeResolver();
				message=null;	
			}
			else
			{
				message.message = req.__('invalid_user');
				message.details = details;
				message.status = -1;
				deferred.resolve(message);
				deferred.makeNodeResolver();
				message=null;	
			}		
		});
	}

	return deferred.promise;
}

exports.edit_passenger_profile= function(q,req){

	var deferred = q.defer();

	let inputParams = req.body;

	var hostname = global.settings.base_url; 


	//console.log(inputParams);
	
	let message = {
		message:'',
		status:0
	};

	var validate_error  = ValidateEditPassengerProfile(q,inputParams);

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
			message.message = i18n.__('validation_error');
			message.status = -1;
			deferred.resolve(message);
			deferred.makeNodeResolver()
			message=null;
		}
	}
	else
	{
		var userid = inputParams.passenger_id;
		var phone = inputParams.phone;
		var firstname = inputParams.firstname;
		var email = inputParams.email;
		var profile_picture = inputParams.profile_image;
		
		apimodel.passenger_profile_by_id(q,userid).then(function(checkresults){

			//console.log("herere0001");

			if(checkresults.length > 0)
			{
					try
					{
						appRoot = global.settings.docroot;

						var mime_type = base64MimeType(profile_picture);
						if(mime_type == '' || mime_type == undefined)
						{
							mime_type ='png';
						}

						var image_name= uniqid()+"_"+userid+'.'+mime_type;
						var upload_path = appRoot+'/public/uploads/passenger/';

						let updateArray = {
							'email':email,
							//'phone':phone,
							//'password':md5(password),
							//'org_password':password,
							//'lastname':lastname,
							'name':firstname
							};

						if(profile_picture != '')
						{
							profile_picture = profile_picture.replace(/^data:image\/png;base64,/, "");

							fs.writeFile(upload_path+image_name, profile_picture, 'base64', function(err) {

							console.log('image error',err);
								if(err != ''  && err != undefined)
								{
									message.message = req.__('image_not_upload');
									message.status = -1;
									deferred.resolve(message);
									deferred.makeNodeResolver()
									message=null;
								}
								else
								{	
									if(profile_picture != '')
									{
										updateArray.profile_image = image_name;
									}

									apimodel.update_passenger_details(q,userid,updateArray).then(function(drivercheckresults){
												message.message = req.__('profile_updated');
												message.profile_image = get_passenger_profile(image_name,hostname);
												message.status = 1;
												deferred.resolve(message);
												deferred.makeNodeResolver()
												message=null;
									});
				
								}
							});
						}
						else
						{
								apimodel.update_passenger_details(q,userid,updateArray).then(function(drivercheckresults){
												message.message = req.__('profile_updated');
												message.profile_image = get_passenger_profile(image_name,hostname);
												message.status = 1;
												deferred.resolve(message);
												deferred.makeNodeResolver()
												message=null;
									});
						}
					}
					catch(err)
					{
						console.log(err);
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


exports.update_language= function(q,req){

	//let inputParams = JSON.parse(req.rawBody);
	let inputParams = req.body;

	var deferred = q.defer();

	let message = {
		message:'',
		status:0
	};

	var appRoot = global.settings.docroot;

	var hostname = global.settings.base_url; 

	var validate_error  = ValidatePassengerLang(q,inputParams);

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
		var lang = inputParams.lang;

		apimodel.passenger_profile_by_id(q,passenger_id).then(function(profile_results){
			if(profile_results.length > 0)
			{
				apimodel.update_passenger_language(q,passenger_id,lang).then(function(update_results){
					if(update_results.result.nModified == 1)
					{
						if(typeof global.passengerObj['P-'+passenger_id] !== 'undefined') {
							global.passengerObj['P-'+passenger_id].lang=lang;
						}
						
						message.message = req.__('success');
						message.status = 1;
						deferred.resolve(message);
						deferred.makeNodeResolver();
						message=null;	
					}
					else
					{
						message.message = req.__('try_again');
						message.status = -1;
						deferred.resolve(message);
						deferred.makeNodeResolver();
						message=null;
					}
				});
			}
			else
			{
				message.message = req.__('invalid_user');
				message.status = -1;
				deferred.resolve(message);
				deferred.makeNodeResolver();
				message=null;	
			}		
		});
	}

	return deferred.promise;
}

function ValidatePassengerLang(q,input)
{
	var constraints = {
		passenger_id: {
			presence: {allowEmpty: false,message:"not empty"},
		}
	};
	validate.options = {format: "flat"};
	var result = validate(input, constraints);
	return result;
}
function ValidatePassengerProfile(q,input)
{
	var constraints = {
		passenger_id: {
			presence: {allowEmpty: false,message:"not empty"},
		}
	};
	validate.options = {format: "flat"};
	var result = validate(input, constraints);
	return result;
}

function ValidateEditPassengerProfile(q,input)
{
	var constraints = {
		passenger_id: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		firstname: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		phone: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		email: {
			presence: {allowEmpty: false,message:"not empty"},
		}
	};
	validate.options = {format: "flat"};
	var result = validate(input, constraints);
	return result;
}

function base64MimeType(encoded) {
  var result = null;

  if (typeof encoded !== 'string') {
    return result;
  }

  var mime = encoded.match(/data:([a-zA-Z0-9]+\/[a-zA-Z0-9-.+]+).*,.*/);

  if (mime && mime.length) {
    result = mime[1];
    mime_type = result.split('/');
    result =mime_type[1];
  }

  console.log('mime',result);

  return result;
}


function get_passenger_profile(profile,hostname)
{
	var appRoot = global.settings.docroot;

	console.log(appRoot+'/public/uploads/passenger/'+profile);

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
