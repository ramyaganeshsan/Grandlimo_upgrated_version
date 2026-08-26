var apimodel = require('../../models/passapimodel');
var moment = require("moment-timezone");
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
var common=require('../../lib/common.js');
var urlencode = require('urlencode');




exports.passenger_account_registration_step1= function(q,req){

	//let inputParams = JSON.parse(req.rawBody);
	let inputParams = req.body;

	var deferred = q.defer();

	let message = {
		message:'',
		status:0
	};

	var validate_error  = ValidateSignupStep1(q,inputParams);

	//console.log(validate_error);

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
		var device_id = inputParams.deviceid;
		var device_token = inputParams.devicetoken;
		var device_type = inputParams.device_type;
		var country_code = inputParams.country_code;
		var phone = inputParams.phone;

		//console.log("heree0001");

		check_passenger_phone(q,phone).then(function(status_results){

			var status_result = status_results.status;
			//console.log("heree0002",status_result);

			if(status_result == 'PB')
			{
				message.message = req.__('not_allowed_register');
				message.status = -1;
				deferred.resolve(message);
				deferred.makeNodeResolver()
				message=null;
			}
			else if(status_result == 'A' || status_result == 'I' )
			{
				var otp = randomstring.generate({
				length: 4,
				charset: 'numeric'
				});
				let update_array = {
					'otp' : otp,
					'device_id' : device_id,
					'device_token' : device_token,
					'device_type' : parseInt(device_type),
					'country_code' : country_code,
				};


				apimodel.update_passenger_by_phone(q,phone,update_array).then(function(status_result){

					if(device_type == 1)
					{
						//sms send
						var replace_array = {
						'sitename':global.settings.app_name,
						'otp':otp
						};

						common.send_sms(q,phone,13,replace_array).then(function(checkresults){
						});	
					}
					else
					{	
						var replace_array = {
						'sitename':global.settings.app_name,
						'otp':otp,
						};
						common.send_sms(q,phone,23,replace_array).then(function(checkresults){
						});	
					}
					message.message = req.__('verification_code_sent');
					message.status = 3;
					deferred.resolve(message);
					deferred.makeNodeResolver()
					message=null;
				});
			}
			else
			{
				add_passenger(q,inputParams).then(function(status_result){

					if(status_result.status == 1)
					{
						message.message = req.__('verification_code_sent');
						message.status = 2;
						deferred.resolve(message);
						deferred.makeNodeResolver();
						message=null;
					}
					else
					{
						message.message = req.__('verification_code_already_sent');
						message.status = 2;
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

exports.resend_otp= function(q,req){

	//let inputParams = JSON.parse(req.rawBody);
	let inputParams = req.body;

	var deferred = q.defer();

	let message = {
		message:'',
		status:0
	};

	var validate_error  = ValidateResendOtp(q,inputParams);

	//console.log(validate_error);

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
		var device_type = inputParams.device_type;
		var country_code = inputParams.country_code;
		var phone = inputParams.phone;

		//console.log("heree0001");

		check_passenger_phone(q,phone).then(function(status_results){

			var status_result = status_results.status;
			if(status_result != 0)
			{
				var otp = randomstring.generate({
				length: 4,
				charset: 'numeric'
				});

				let update_array = {
					'otp' : otp,
					'updated_date' : new Date()
				};

				apimodel.update_passenger_by_phone(q,phone,update_array).then(function(status_result){

					try 
					{

					if(status_result.modifiedCount == 1)
					{
						var detail = {};
						detail.phone = phone; 
						var passenger_phone = country_code+phone;

						if(device_type == 1)
						{
							//sms send
							var replace_array = {
							'sitename':global.settings.app_name,
							'otp':otp
							};

							common.send_sms(q,passenger_phone,13,replace_array).then(function(checkresults){
								message.message = req.__('verification_code_sent');
								message.detail = detail;
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
							'otp':otp,
							};
							common.send_sms(q,passenger_phone,23,replace_array).then(function(checkresults){
								message.message = req.__('verification_code_sent');
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
						message.message = req.__('try_again');
						message.status = 4;
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

exports.passenger_account_registration_step2= function(q,req){

	//let inputParams = JSON.parse(req.rawBody);
	let inputParams = req.body;

	var hostname = global.settings.base_url; 

	var deferred = q.defer();

	let message = {
		message:'',
		status:0
	};

	var validate_error  = ValidateSignupStep2(q,inputParams);

	//console.log(validate_error);

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
		var verification_code = inputParams.verification_code;
		var country_code = inputParams.country_code;
		var phone = inputParams.phone;


		apimodel.passenger_verify_otp(q,phone,verification_code).then(function(verify_results){

			if(verify_results.length > 0)
			{

				details = verify_results[0];

				var passenger_profile = verify_results[0].profile_image;
				var passenger_name = verify_results[0].name;
				var passenger_email = verify_results[0].email;

                details.passenger_image = get_passenger_profile(passenger_profile,hostname);

				var update_array =
				{
					'user_status':'A'
				}; 

				apimodel.update_passenger_by_phone(q,phone,update_array).then(function(status_result){
					try 
					{
						//if(status_result.modifiedCount == 1)
						//{
							if(details.user_status == 'A' && passenger_name != '' && passenger_email != '')
							{
								message.message = req.__('valid_verification_code');
								message.details = details;
								message.status = 1;
								deferred.resolve(message);
								deferred.makeNodeResolver()
								message=null;
							}
							else
							{
								message.message = req.__('valid_verification_code');
								message.status = 1;
								deferred.resolve(message);
								deferred.makeNodeResolver()
								message=null;
							}
						// }
						// else
						// {
						// 	message.message = req.__('try_again');
						// 	message.status = -1;
						// 	deferred.resolve(message);
						// 	deferred.makeNodeResolver()
						// 	message=null;
						// }
					}
					catch(err)
					{
						console.log(err);
					}
					
				});
			}
			else
			{
				message.message = req.__('invalid_verification_code');
				message.status = -1;
				deferred.resolve(message);
				deferred.makeNodeResolver();
				message=null;
			}

		});
	}

	return deferred.promise;
}

exports.passenger_account_registration_step3= function(q,req){

	//let inputParams = JSON.parse(req.rawBody);
	let inputParams = req.body;

	var hostname = global.settings.base_url; 

	var deferred = q.defer();

	let message = {
		message:'',
		status:0
	};

	var validate_error  = ValidateSignupStep3(q,inputParams);

	//console.log(validate_error);

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
		var firstname = inputParams.firstname;
		var email = inputParams.email;
		var country_code = inputParams.country_code;
		var phone = inputParams.phone;
		var lastname = inputParams.lastname;

		apimodel.passenger_email_exists(q,email).then(function(email_exists){

			//console.log('email exists',email_exists);

			if(email_exists == 0)
			{
				apimodel.passenger_profile_by_phone(q,phone).then(function(passenger_profile){

					if(passenger_profile.length > 0)
					{
						var details = {};

						let update_array = {
							'name' : urlencode.decode(firstname),
							'salutation' : '',
							'lastname' : urlencode.decode(lastname),			
							'email' : urlencode.decode(email),			
							'creditcard_no' : '',
							'creditcard_cvv' : '',
							'expdatemonth' : '',
							'expdateyear' : '',
							'cardholder_name' : '',
							'civilid_front' : '',
							'civilid_back' : '',
							'civilid_front_thumb' : '',
							'civilid_back_thumb' : '',
							'civilid' : '',
							'updated_date' : new Date(),
							'activation_status' : parseInt(1),
							'login_status' : 'S',
							'skip_credit_card' : parseInt(2),
							'creditcard_details' : [],						
							'user_status' : 'A',	
						};

						details = passenger_profile[0];

						var passenger_profile = passenger_profile[0].profile_image;

						details.passenger_image = get_passenger_profile(passenger_profile,hostname);
						details.profile_image = get_passenger_profile(passenger_profile,hostname);

						apimodel.update_passenger_by_phone(q,phone,update_array).then(function(status_result){
							try 
							{
								if(status_result.modifiedCount == 1)
								{
									var replace_array = {
									'sitename':global.settings.app_name,
									};
									var passenger_phone = country_code+phone;
									common.send_sms(q,passenger_phone,1,replace_array).then(function(checkresults){
										message.message = req.__('account_saved');
										message.details = details;
										message.status = 1;
										deferred.resolve(message);
										deferred.makeNodeResolver()
										message=null;
									});
								}
								else
								{
									message.message = req.__('try_again');
									message.status = 4;
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
						message.message = req.__('invalid_user');
						message.status = -1;
						deferred.resolve(message);
						deferred.makeNodeResolver();
						message=null;
					}
				});
			}
			else
			{
				message.message = req.__('email_exists');
				message.status = -1;
				deferred.resolve(message);
				deferred.makeNodeResolver();
				message=null;
			}

		});
	}

	return deferred.promise;
}



function ValidateSignupStep1(q,input)
{
	var constraints = {
		country_code: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		phone: {
			presence:{allowEmpty: false,message:"not empty"},

		},
		device_type: {
			presence:{allowEmpty: false,message:"not empty"},
		},
		deviceid: {
			presence:{allowEmpty: false,message:"not empty"},
		},
		devicetoken: {
			presence:{allowEmpty: false,message:"not empty"},
		}
	};
	validate.options = {format: "flat"};
	var result = validate(input, constraints);
	return result;
}

function ValidateSignupStep2(q,input)
{
	var constraints = {
		phone: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		verification_code: {
			presence:{allowEmpty: false,message:"not empty"},

		},
		// country_code: {
		// 	presence:{allowEmpty: false,message:"not empty"},

		// }
	};
	validate.options = {format: "flat"};
	var result = validate(input, constraints);
	return result;
}
function ValidateSignupStep3(q,input)
{
	var constraints = {
		phone: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		firstname: {
			presence:{allowEmpty: false,message:"not empty"},

		},
		country_code: {
			presence:{allowEmpty: false,message:"not empty"},

		},
		email: {
			presence:{allowEmpty: false,message:"not empty"},

		}
	};
	validate.options = {format: "flat"};
	var result = validate(input, constraints);
	return result;
}

function ValidateResendOtp(q,input)
{
	var constraints = {
		country_code: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		phone: {
			presence:{allowEmpty: false,message:"not empty"},

		},
		user_type: {
			presence:{allowEmpty: false,message:"not empty"},

		},
		device_type: {
			presence:{allowEmpty: false,message:"not empty"},

		}
	};
	validate.options = {format: "flat"};
	var result = validate(input, constraints);
	return result;
}

function check_passenger_phone(q,phone)
{
	var deferred = q.defer();

	var details = {};
	//console.log("here003");
	apimodel.check_phone_passengers(q,phone).then(function(results){
		//console.log("here004");
		if(results.length > 0 )
		{
			var user_status = results[0].user_status;
			details.status = user_status;
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

function add_passenger(q,input_array)
{
	var deferred = q.defer();
	let details = {};

	apimodel.get_auto_id(q,t.MDB_PASSENGERS).then(function(results){
		//console.log("here005");

		if(results.length > 0)
		{
			//console.log("here006");

			try
			{
			var inc_id = results[0]._id + 1;
			var password = randomstring.generate({
			length: 6,
			charset: 'alphabetic'
			});

			var otp = randomstring.generate({
			length: 4,
			charset: 'numeric'
			});

			var phone = input_array.phone;
			var device_id = input_array.device_id;
			var device_token = input_array.device_token;
			var device_type = input_array.device_type;
			var country_code = input_array.country_code;

			var current_time = new Date();

			var insert_array = {
				'_id':inc_id,
				'parent_id' : 0,
				'account_type' : '',					 
				'salutation' : '',
				'name' : '',
				'lastname' : '',			
				'email' : '',			
				'password' : md5(password),
				'org_password' : password,
				'profile_image' : '',
				'otp' : otp,
				'country_code' :country_code,
				'address' : '',
				'phone' : phone,
				'referral_code' : '',
				'referral_code_amount' : parseInt(0),
				'referral_code_limit' : parseInt(0),
				'wallet_amount' : parseFloat(0),
				'referral_earned_amount' : parseInt(0),
				'referrer_earned' : parseInt(0),
				'discount' : parseFloat(0),
				'creditcard_no' : '',
				'creditcard_cvv' : '',
				'expdatemonth' : '',
				'expdateyear' : '',
				'cardholder_name' : '',
				'civilid' : '',
				'civilid_front' : '',
				'civilid_back' : '',
				'civilid_front_thumb' : '',
				'civilid_back_thumb' : '',			
				'fb_user_id' : '',
				'fb_access_token' : '',
				'device_id' : device_id,
				'device_token' : device_token,
				'device_type' : parseInt(device_type),
				'activation_key' : '',
				'activation_status' : parseInt(0),
				'login_from' : parseInt(0),			
				'created_date' : current_time,
				'updated_date' : current_time,
				'last_login' : '',
				'login_status' : 'N',
				'referred_by' : parseInt(0),
				'passenger_cid' : parseInt(0),
				'skip_credit_card' : parseInt(0),
				'loc' : [],
				'creditcard_details' : [],						
				'user_status' : 'I',
				'child_exist' : parseInt(0),
				'allow_creditcard' : parseInt(0),
				'trip_alert' : parseInt(0),
				'profile_thumb_image' :'',
				'pay_by' : parseInt(3),
				'lateral_start_date' : '',
				'lateral_end_date' : ''
			};
			}
			catch(err)
			{
				console.log(err);
			}
						//console.log("here008");
			try
			{

			apimodel.insert_passenger_details(q,insert_array).then(function(insertresults){
			//console.log("here007",insertresults.result);

				if(insertresults.modifiedCount == 1)
				{
					var passenger_phone = country_code+phone;
					if(device_type == 1)
					{
						//sms send
						var replace_array = {
						'sitename':global.settings.app_name,
						'otp':otp
						};

						common.send_sms(q,passenger_phone,13,replace_array).then(function(checkresults){
							details.status = 1;
							deferred.resolve(details);
							deferred.makeNodeResolver()
							details=null;
						});	
					}
					else
					{	
						var replace_array = {
						'sitename':global.settings.app_name,
						'otp':otp,
						};
						common.send_sms(q,passenger_phone,23,replace_array).then(function(checkresults){
							details.status = 1;
							deferred.resolve(details);
							deferred.makeNodeResolver()
							details=null;
						});	
					}
				}
				else
				{
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
		console.log(err);
	}

}

function get_passenger_profile(profile,hostname)
{
	try{
		if (fs.existsSync(appRoot+'public/uploads/passenger/'+profile)) {
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

function zeropadding(a)
{
	h = (a < 10) ? ("0" + a) : a;

	return h;
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
