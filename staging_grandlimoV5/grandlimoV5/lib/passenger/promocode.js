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


exports.added_promocode_list= function(q,req){

	let inputParams = req.body;

	var deferred = q.defer();

	let message = {
		message:'',
		status:0
	};

	var hostname = global.settings.base_url; 

	var validate_error  = ValidateAddedList(q,inputParams);


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

		apimodel.get_added_promocodes(q,passenger_id).then(function(promoresults){

			//console.log('promoresults',promoresults);

    		if(promoresults.length > 0)
    		{
    			i=0;
    			promoresults.forEach(function(element) {

    				var current_time = new Date();
    				var expiry_date = element.expiry_date;
    				var promo_limit = element.promo_limit;
    				var total_applied = element.total_applied;

    				if(total_applied >= promo_limit ||  expiry_date.getTime() < current_time.getTime())
    				{
    					promoresults[i].expiry_status = 1;
    				}
    				else
    				{
    					promoresults[i].expiry_status = 0;
    				}

    				delete promoresults[i]._id;

    				i++;
    			})

				message.message = req.__('success');
				message.detail = promoresults;
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
			console.log(err);
		}
	}

	return deferred.promise;
}

exports.add_promocode= function(q,req){

	let inputParams = req.body;

	var deferred = q.defer();

	let message = {
		message:'',
		status:0
	};

	var hostname = global.settings.base_url; 

	var validate_error  = ValidateAddPromocode(q,inputParams);


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
		var promo_code = inputParams.promo_code;
		var phone_number = inputParams.phone_number;

		apimodel.passenger_profile_by_id(q,passenger_id).then(function(profile_results){
			//console.log('add00001');
    		if(profile_results.length > 0)
    		{	
    						//console.log('add00002');
    			apimodel.check_already_promocode_added(q,passenger_id).then(function(addpromoresults){

    				if(addpromoresults.length == 0)
    				{
    					//console.log('add00003');
		    			check_promocode(q,promo_code,phone_number,passenger_id).then(function(checkpromo_results){
								//console.log("savee001",checkpromo_results);
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
									//console.log('add00004');

									var promocode_id = checkpromo_results.promocode_id;
									apimodel.get_auto_id(q,t.MDB_PASSENGERS_ADDED_PROMO).then(function(autoresults){
										if(autoresults.length > 0)
										{
											try
											{
											//console.log('add00005');
											var inc_id = autoresults[0]._id + 1;

											var insert_array = {
												'_id':parseInt(inc_id),
												'passenger_id':parseInt(passenger_id),
												'promocode_id':parseInt(promocode_id),
												'promo_code':promo_code,
												'created_date':new Date()
											}

											apimodel.insert_passenger_added_promocode(q,insert_array).then(function(insertresults){

												message.message = req.__('promo_applied_successfully');
												message.detail = [];
												message.status = 1;
												deferred.resolve(message);
												deferred.makeNodeResolver()
												message=null;
											})
											}
											catch(err)
											{
												console.log(err);
											}
										}
									})
								}
						});
	    			}
	    			else
	    			{
	    				message.message = req.__('already_you_added_promocode');
						message.details = [];
						message.status = -1;
						deferred.resolve(message);
						deferred.makeNodeResolver()
						message=null;
	    			}
				});
    		}
    		else
    		{
    			message.message = req.__('invalid_user');
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

function ValidateAddedList(q,input)
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

function ValidateAddPromocode(q,input)
{
	var constraints = {
		passenger_id: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		promo_code: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		phone_number: {
			presence: {allowEmpty: false,message:"not empty"},
		}
	};
	validate.options = {format: "flat"};
	var result = validate(input, constraints);
	return result;
}


function recharge_type_msg(req,recharge_type)
{
	var recharge_type_msg ='';

        switch(recharge_type)
        {
            case 1:
            recharge_type_msg = req.__('manual_pay'); 
            break;
            case 2:
            recharge_type_msg = req.__('credit_pay');
            break;
            case 3:
            recharge_type_msg = req.__('pending_pay');
            break;
            case 4:
            recharge_type_msg = req.__('trip_payment');
            break;
            case 5:
            recharge_type_msg = req.__('trip_pending_payment');
            break; 
            case 6:
            recharge_type_msg = req.__('pending_repayment');
            break;
            case 7:
            recharge_type_msg = req.__('dispatcher_alteration');
            break;
            case 8:
            recharge_type_msg = req.__('knet_payment');
            break;
            default:
            recharge_type_msg = req.__('manual_pay'); 
            break;
        }

        return recharge_type_msg;
}

function check_promocode(q,promocode,phone,passenger_id)
{
	var deferred = q.defer();

	var details = {};
	try
	{
	if(promocode != '' && promocode != undefined)
	{
	apimodel.promocode_details(q,promocode).then(function(promo_results){
		//console.log("check0001");
		apimodel.promocode_details_by_phone(q,passenger_id).then(function(promo_results2){
					//console.log("check0002");

					//console.log(promo_results2.length);
					//console.log(promo_results.length);
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

				var promo_id = promocode_details._id;
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
				else if(promo_endtime < current_time)
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
						details.promocode_id = promo_id;
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
