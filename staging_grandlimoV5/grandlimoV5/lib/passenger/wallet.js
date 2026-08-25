var apimodel = require('../../models/passapimodel');
var apimodel_two = require('../../models/apimodel');
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
var i18n = require('i18n');
var t=require('../../config/table_config.json');
var uniqid = require('uniqid');
var randomstring = require('randomstring');
var dateformatter = require('date-format-php');
var urlencode = require('urlencode');

var common=require('../../lib/common.js');


exports.wallet_add_money= function(q,req){

	let inputParams = req.body;

	var deferred = q.defer();

	let message = {
		message:'',
		status:0
	};

	//var hostname = global.settings.base_url; 
	var hostname = req.headers.host; 
	var protocol = req.headers.protocol;


	console.log('protocol',protocol);

	if(protocol == undefined)
	protocol = 'http://';

	var validate_error  = ValidateAddWallet(q,inputParams);


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
		var amt = inputParams.amt;

		common.hesabe_pay_wallet(q,passenger_id,parseFloat(amt),hostname,protocol).then(function(hesaberesults){

	   // console.log(hesaberesults);

    		if(hesaberesults.response.status == 'success')
    		{

    		var details = hesaberesults.response.data;

				message.message = hesaberesults.response.message;
				//message.driver_statistics = driver_statistics;
				message.detail = details;
				message.status = 1;
				deferred.resolve(message);
				deferred.makeNodeResolver()
				message=null;
    		}
    		else
    		{
    			message.message = hesaberesults.response.message;
				//message.driver_statistics = driver_statistics;
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


exports.passenger_wallet_history= function(q,req){

	var deferred = q.defer();

	let inputParams = req.body;
	
	let message = {
		message:'',
		status:0
	};

	//var hostname = req.headers.host; 
	var hostname = global.settings.base_url; 
	var appRoot = global.settings.docroot; 

	var validate_error  = validateWalletHistory(q,inputParams);

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
		var userid = inputParams.passenger_id;
		var start = inputParams.start;
		var limit = inputParams.limit;
		
		apimodel.passenger_profile_by_id(q,userid).then(function(checkresults){

			if(checkresults.length > 0)
			{
				var wallet_amount =checkresults[0].wallet_amount;
				var last_wallet_update =checkresults[0].last_wallet_update;
				var reward_points = checkresults[0].reward_points;
				var wallet_amount_list = [5,10,20,30];
				
				var details = {};
					apimodel.passengers_wallet_logs(q,userid,start,limit).then(function(walletresults){
						if(walletresults.length > 0)
						{
							var i = 0
							walletresults.forEach(function(element) {

								try
								{

								walletresults[i].recharge_type =recharge_type_msg(req,element.recharge_type);
								walletresults[i].created_date =element.created_date.format('Y-m-d h:i:s A');
								walletresults[i].paid_status = req.__('success');
								walletresults[i].paid = parseInt(1);
								
								if(element.created_by == 1)
								walletresults[i].created_by =req.__('admin_label');
								else
								walletresults[i].created_by =req.__('yourself_label');
							
								delete walletresults[i]._id;
								delete walletresults[i].id;


								i++;
								}
								catch(err)
								{
									console.log(err);
								}
							});

							message.message = req.__('success');
							message.detail = walletresults;
							message.wallet_amount = wallet_amount;
							message.last_wallet_update = last_wallet_update;
							message.wallet_amount_list = wallet_amount_list;
							message.reward_points = reward_points;
							message.status = 1;
							deferred.resolve(message);
							deferred.makeNodeResolver()
							message=null;	
						}
						else
						{
							message.detail =[];
							message.wallet_amount = wallet_amount;
							message.last_wallet_update = last_wallet_update;
							message.wallet_amount_list = wallet_amount_list;
							message.reward_points = reward_points;
							message.message = req.__('no_data');
							message.status = 0;
							deferred.resolve(message);
							deferred.makeNodeResolver()
							message=null;	
						}

					});
				
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

exports.redeem_rewards= function(q,req){

	let inputParams = req.body;

	var deferred = q.defer();

	let message = {
		message:'',
		status:0
	};
	//var hostname = global.settings.base_url; 	

	var validate_error  = ValidateRedeemRewards(q,inputParams);


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
			var reward_kwd = global.settings.reward_kwd;
			var minimum_reward_request = global.settings.minimum_reward_request;

			var passenger_id = inputParams.passenger_id;
			var redeem_points = inputParams.redeem_points;

			apimodel.passenger_profile_by_id(q,passenger_id).then(function(checkresults){

				if(checkresults.length > 0)
				{
					var reward_points =checkresults[0].reward_points;
					var wallet_amount =checkresults[0].wallet_amount;
					//var last_wallet_update =checkresults[0].last_wallet_update;

					if(reward_points >= minimum_reward_request && redeem_points >= minimum_reward_request && reward_points >= redeem_points){

						var wallet_money = redeem_points * reward_kwd;
						add_wallet_money = wallet_money.toFixed(2);

						//console.log(wallet_amount,'-----');

						var update_wallet_amt = parseFloat(wallet_amount) + parseFloat(add_wallet_money);

						var update_array = {'$inc':{'wallet_amount':parseFloat(add_wallet_money),'reward_points': -redeem_points },'$set':{'last_wallet_update':new Date()}};

						//console.log(update_array);
						apimodel.update_trip_reward(q,update_array,passenger_id).then(function(result){

							var insert_array      = {
				            "passenger_id":parseInt(passenger_id),
				            "change_amount":parseFloat(add_wallet_money),
				            "wallet_amount":parseFloat(update_wallet_amt),
				            "created_date" : new Date(),
				            "created_by" : parseInt(passenger_id),
				            "recharge_type" :parseInt(9),				            
				            "paid_status" :parseInt(1),
				            "redeem_points":parseInt(redeem_points),
				            };

				            console.log(insert_array,'------');
							apimodel_two.insert_wallet_logs(q,insert_array).then(function(detailresults){

								//message.detail = detailresults;
								message.status = 1;
								message.message=req.__('redeem_sucessfully');
								deferred.resolve(message);
								deferred.makeNodeResolver()			

							});

						});

					}else{

						message.message = req.__('your_redeem_points_too_low');
						message.status = -1;
						deferred.resolve(message);
						deferred.makeNodeResolver()
						message=null;
					}

				}else{

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

function ValidateRedeemRewards(q,input)
{
	var constraints = {
		passenger_id: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		redeem_points: {
			presence: {allowEmpty: false,message:"not empty"},
		}
	};
	validate.options = {format: "flat"};
	var result = validate(input, constraints);
	return result;
}

function ValidateAddWallet(q,input)
{
	var constraints = {
		passenger_id: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		amt: {
			presence: {allowEmpty: false,message:"not empty"},
		}
	};
	validate.options = {format: "flat"};
	var result = validate(input, constraints);
	return result;
}

function validateWalletHistory(q,input)
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
