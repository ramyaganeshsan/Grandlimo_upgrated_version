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

var common=require('../../lib_v1/common.js');

function cc_format(value) {
  var v = value.replace(/\s+/g, '').replace(/[^0-9]/gi, '')
  var matches = v.match(/\d{4,16}/g);
  var match = matches && matches[0] || ''
  var parts = []
  var card_no = '';
  for (i=0, len=match.length; i<len; i+=4) {
    parts.push(match.substring(i, i+4))
  }
  if (parts.length) {
    card_no += parts.join(' ');
  } else {
    card_no += value;
  }
  return card_no.replace(/\d{4}(?= \d{4})/g, "xxxx");
}

function credit_card_mask(card_no) {
	return card_no.replace(/\d(?=\d{4})/g, "x");			
}

exports.get_card_list= function(q,req){


	//let inputParams = JSON.parse(req.rawBody);
	let inputParams = req.body;

	var deferred = q.defer();

	let message = {
		message:'',
		status:0
	};

	var hostname = global.settings.base_url; 

	var validate_error  = ValidateCardList(q,inputParams);

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

		apimodel.get_card_list(q,passenger_id).then(function(cards_results){
				var details =[]
				if(cards_results[0].creditcard_details.length > 0)
				{
					details = cards_results[0].creditcard_details;

					var i = 0;
					cards_results[0].creditcard_details.forEach(function(element) {
						let buff = new Buffer(element.creditcard_no, 'base64');
						let card_no = buff.toString('ascii');
						details[i].plain_creditcard_no = cc_format(card_no);
						details[i].creditcard_cvv = "xxx";
						i++;
					});

					message.message = req.__('success');
					message.detail = details;
					message.status = 1;
					deferred.resolve(message);
					deferred.makeNodeResolver();
					message=null;
				}
				else
				{
					message.message = req.__('no_cards');
					message.status = -1;
					deferred.resolve(message);
					deferred.makeNodeResolver();
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

exports.view_card= function(q,req){


	//let inputParams = JSON.parse(req.rawBody);
	let inputParams = req.body;

	var deferred = q.defer();

	let message = {
		message:'',
		status:0
	};

	var hostname = global.settings.base_url; 

	var validate_error  = ValidateViewCardList(q,inputParams);

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
		var passenger_cardid = inputParams.passenger_cardid;

		apimodel.get_card_detail(q,passenger_id,passenger_cardid).then(function(cards_results){
				var details =[]
				
				if(cards_results.length > 0)
				{
					details = cards_results;

					var i = 0;
					cards_results.forEach(function(element) {
						let buff = new Buffer(element.creditcard_no, 'base64');
						let card_no = buff.toString('ascii');
						details[i].plain_creditcard_no = cc_format(card_no);
						details[i].creditcard_cvv = "xxx";
						i++;
					});

					message.message = req.__('success');
					message.detail = details;
					message.status = 1;
					deferred.resolve(message);
					deferred.makeNodeResolver();
					message=null;
				}
				else
				{
					message.message = req.__('no_cards');
					message.status = -1;
					deferred.resolve(message);
					deferred.makeNodeResolver();
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

exports.add_card= function(q,req){


	//let inputParams = JSON.parse(req.rawBody);
	let inputParams = req.body;

	var deferred = q.defer();

	let message = {
		message:'',
		status:0
	};

	var hostname = global.settings.base_url; 

	var validate_error  = ValidateAddFavourite(q,inputParams);


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
		var fav_comments = inputParams.fav_comments;
		var p_favourite_place = inputParams.p_favourite_place;
		var p_fav_latitude = inputParams.p_fav_latitude;
		var p_fav_longtitute = inputParams.p_fav_longtitute;
		var d_favourite_place = inputParams.d_favourite_place;
		var d_fav_latitude = inputParams.d_fav_latitude;
		var d_fav_longtitute = inputParams.d_fav_longtitute;
		var p_fav_locationtype = inputParams.p_fav_locationtype;
		var fav_icon = inputParams.fav_icon;
		var notes = inputParams.notes;

		apimodel.check_fav_type_exists(q,inputParams).then(function(check_favtype){
			//console.log(check_favtype.length);
			if(check_favtype.length == 0)
			{
				//console.log("hereee002");
				apimodel.check_fav_exists(q,inputParams).then(function(check_fav){
									//console.log("hereee003");
					if(check_fav.length == 0)
					{
						apimodel.get_auto_id(q,t.MDB_PASSENGERS_FAVOURITES).then(function(autoid_results){
									//console.log("hereee004");

							if(autoid_results.length > 0)
							{
								//console.log("hereee005");
								var inc_id = autoid_results['0']._id+1;
								var input_array = {
									'_id' : parseInt(inc_id),
									'passenger_id' : parseInt(passenger_id),
									'p_favourite_place' : urlencode.decode(p_favourite_place),
									'p_fav_latitude' : p_fav_latitude,
									'p_fav_longtitute' : p_fav_longtitute,
									'd_favourite_place' : urlencode.decode(d_favourite_place),
									'd_fav_latitude' : d_fav_latitude,
									'd_fav_longtitute' : d_fav_longtitute,
									'fav_comments' : urlencode.decode(fav_comments),
									'status' : 'A',
									'notes' : urlencode.decode(notes),
									'fav_loction_type' : urlencode.decode(p_fav_locationtype),
									'fav_icon' : urlencode.decode(fav_icon)
								};

								apimodel.add_favourite(q,input_array).then(function(check_fav){
									message.message = req.__('mark_fav');
									message.status = 1;
									deferred.resolve(message);
									deferred.makeNodeResolver();
									message=null;
								});
							}
						})
					}
					else
					{
						message.message = req.__('fav_already_exist');
						message.status = -1;
						deferred.resolve(message);
						deferred.makeNodeResolver();
						message=null;
					}			
				});
			}
			else
			{
				message.message = req.__('fav_already_exist_type');
				message.status = -1;
				deferred.resolve(message);
				deferred.makeNodeResolver();
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

exports.edit_card= function(q,req){
	let inputParams = req.body;

	var deferred = q.defer();

	let message = {
		message:'',
		status:0
	};

	var hostname = global.settings.base_url; 

	var validate_error  = ValidateEditFavourite(q,inputParams);


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
		var fav_comments = inputParams.fav_comments;
		var p_favourite_place = inputParams.p_favourite_place;
		var p_fav_latitude = inputParams.p_fav_latitude;
		var p_fav_longtitute = inputParams.p_fav_longtitute;
		var d_favourite_place = inputParams.d_favourite_place;
		var d_fav_latitude = inputParams.d_fav_latitude;
		var d_fav_longtitute = inputParams.d_fav_longtitute;
		var p_fav_locationtype = inputParams.p_fav_locationtype;
		var p_favourite_id = inputParams.p_favourite_id;
		var fav_icon = inputParams.fav_icon;
		var notes = inputParams.notes;

		apimodel.check_fav_type_exists(q,inputParams).then(function(check_favtype){
			//console.log(check_favtype.length);
			if(check_favtype.length == 0)
			{
				//console.log("hereee002");
				apimodel.check_fav_exists(q,inputParams).then(function(check_fav){
									//console.log("hereee003");
					if(check_fav.length == 0)
					{
						var input_array = {
							'passenger_id' : parseInt(passenger_id),
							'p_favourite_place' : urlencode.decode(p_favourite_place),
							'p_fav_latitude' : p_fav_latitude,
							'p_fav_longtitute' : p_fav_longtitute,
							'd_favourite_place' : urlencode.decode(d_favourite_place),
							'd_fav_latitude' : d_fav_latitude,
							'd_fav_longtitute' : d_fav_longtitute,
							'fav_comments' : urlencode.decode(fav_comments),
							'status' : 'A',
							'notes' : urlencode.decode(notes),
							'fav_loction_type' : urlencode.decode(p_fav_locationtype),
							'fav_icon' : urlencode.decode(fav_icon)
						};

						apimodel.update_favourites(q,p_favourite_id,input_array).then(function(update_fav){
							if(update_fav.result.nModified == 1)
							{
								message.message = req.__('edit_mark_fav');
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
						message.message = req.__('fav_already_exist');
						message.status = -1;
						deferred.resolve(message);
						deferred.makeNodeResolver();
						message=null;
					}			
				});
			}
			else
			{
				message.message = req.__('fav_already_exist_type');
				message.status = -1;
				deferred.resolve(message);
				deferred.makeNodeResolver();
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


exports.delete_card= function(q,req){
	let inputParams = req.body;

	var deferred = q.defer();

	let message = {
		message:'',
		status:0
	};

	var hostname = global.settings.base_url; 

	var validate_error  = ValidateDeleteCard(q,inputParams);


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
		var passenger_cardid = inputParams.passenger_cardid;

		apimodel.get_card_detail(q,passenger_id,passenger_cardid).then(function(check_card){
			if(check_card.length > 0)
			{
				var input_array = {
							'$pull' : {'creditcard_details':{'passenger_cardid':parseInt(passenger_cardid)}}
						}
				apimodel.delete_card(q,passenger_id,passenger_cardid,input_array).then(function(delete_card){
					console.log(delete_card);
					
					if(delete_card.result.n == 1)
					{
						message.message = req.__('card_deleted');
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
				message.message = req.__('no_cards');
				message.status = -1;
				deferred.resolve(message);
				deferred.makeNodeResolver();
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


function ValidateCardList(q,input)
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

function ValidateViewCardList(q,input)
{
	var constraints = {
		passenger_id: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		passenger_cardid: {
			presence: {allowEmpty: false,message:"not empty"},
		}
	};
	validate.options = {format: "flat"};
	var result = validate(input, constraints);
	return result;
}


function ValidateAddCard(q,input)
{
	var constraints = {
		passenger_id: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		p_fav_locationtype: {
			presence: {allowEmpty: false,message:"not empty"},
		}
	};
	validate.options = {format: "flat"};
	var result = validate(input, constraints);
	return result;
}

function ValidateEditCard(q,input)
{
	var constraints = {
		passenger_id: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		p_fav_locationtype: {
			presence: {allowEmpty: false,message:"not empty"},
		},		
		p_favourite_id: {
			presence: {allowEmpty: false,message:"not empty"},
		}
	};
	validate.options = {format: "flat"};
	var result = validate(input, constraints);
	return result;
}


function ValidateDeleteCard(q,input)
{
	var constraints = {
		passenger_id: {
			presence: {allowEmpty: false,message:"not empty"},
		},
		passenger_cardid: {
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
