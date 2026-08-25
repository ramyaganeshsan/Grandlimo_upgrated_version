var express = require('express'),
    router = express.Router();

var app = require('../app');
var apimodel = require('../models/passapimodel');
var apilib = require('../lib/passenger/api');
var registerlib = require('../lib/passenger/register');
var homelib = require('../lib/passenger/home');
var favlib = require('../lib/passenger/favourites');
var profilelib = require('../lib/passenger/profile');
var searchlib = require('../lib/passenger/search_drivers');
var tripdetailslib = require('../lib/passenger/tripdetail');
var fareupdatelib = require('../lib/passenger/fareupdate');
var walletlib = require('../lib/passenger/wallet');
var placeslib = require('../lib/passenger/places');
var ratingslib = require('../lib/passenger/ratings');
var promocodelib = require('../lib/passenger/promocode');
var notificationslib = require('../lib/passenger/notifications');
var pageslib = require('../lib/passenger/pages');
var cancellib = require('../lib/passenger/cancel');
var common = require('../lib/common');
var distancelib = require('../lib/passenger/distance_calculation');

//const logs = require('../utils/logger').logs;

// var i18n = require('i18n');

// var plang = {};
 
// i18n.configure({
//   locales: ['en', 'ar'],
//   register: plang
// });

var q= require('q');

//module.exports = function (app,io) {
module.exports = function (app) {

	var io = app.io;

	router.param('key', function (req, res, next, id) {
		var company_key = req.params.key;
		console.log('herree',company_key);
		var decrypt_key = app.encrypt_decrypt('decrypt',company_key);
		if(decrypt_key != '')
		{
			apimodel.getCompanyKey(q,decrypt_key).then(function(results){

				if(results.length > 0)
				{
					apimodel.SiteSettings(q).then(function(siteinforesults){
						if(siteinforesults.length > 0)
						{
							global.settings = siteinforesults[0];
						}
						else
						{
							global.settings = {};
						}
						next();
					})
					
				}
				else
				{
					var message = {'message':'invalid_company','status':8};
					res.type('text/json');
					res.send(message);
				}

			});
		}
		else
		{
			var message = {'message':'invalid_company','status':8};
			res.type('text/json');
			res.send(message);
		}

		//next();
	});

  // router.get('/:key/type=getcoreconfig', function (req, res) {
  //    apimodel.getSiteInfo(q).then(function(results){
  //       let message = {'message':"Success",'details':results,'status':1}
  //       res.type('text/json');
  //       res.send(message);
  //    });     
  // });

  router.get('/:key/', function (req, res) {

         var type = req.query.type;
         var lang = req.query.lang;
         ////req.i18n = i18n;
        // req.plang = plang;

		 //req.i18n.setLocale(lang);
		 if(lang != '')
		 req.setLocale(lang);
		 else
		 req.setLocale('en');


         console.log(type);
         console.log("pass hererere");

         req.io = app.io;

         console.log(type);
         var starttime = new Date();
		 console.log(type+" "+starttime); 

		 let jsondata = { 'request':req.body,'type':type};

		//logs(JSON.stringify(jsondata));

		if(type == 'getcoreconfig')
		{ 
			apilib[type](q,req).then(function(results){
					var time = new Date();
					var endtime =time.getTime();
					var execution_time = endtime-starttime;
					results.execution_time = execution_time+" ms";
					common.infologger(results);
					res.send(results);
			 });
		}
		else if(type == 'dynamic_page')
		{ 
			pageslib[type](q,req).then(function(results){
					var time = new Date();
					var endtime =time.getTime();
					var execution_time = endtime-starttime;
					results.execution_time = execution_time+" ms";
					//logs(JSON.stringify(results));

					if(results.status == 1)
					{
						console.log(results.detail.device_type);

						if(results.detail.device_type == 2)
						{	
							common.infologger(results);
							res.send(results);
						}
						else
						{
							var content = results.detail.content
							res.type('text/html');
							res.send(content);
						}
					}
					else
					{
						res.send(results);
					}
			 });
		}
		else
		{
			var message = {'message':req.__('invalid_company'),'status':8};
			common.infologger(message);
			res.type('text/json');
			res.send(message);
		}

  });  


  router.post('/:key/', function (req, res) {
         var type = req.query.type;
         var lang = req.query.lang;
         //req.i18n = i18n;
		 //req.plang = plang;
		 
		 req.setLocale(lang);

         req.io = app.io;

         var time = new Date();
         var starttime =time.getTime();
		 console.log(type +"  "+ starttime );

		let jsondata = { 'request':req.body,'type':type,'response':''};
		
		common.infologger(type);
		common.infologger(req.body);

		//logs(JSON.stringify(jsondata));
		if(type == 'passenger_account_registration_step1' || type == 'resend_otp' || type == 'passenger_account_registration_step2'  || type == 'passenger_account_registration_step3')
		{ 
			registerlib[type](q,req).then(function(results){
				var time = new Date();
				var endtime =time.getTime();
				var execution_time = endtime-starttime;
				results.execution_time = execution_time+" ms";
				common.infologger(results);
				res.send(results);
			 });
		}
		else if(type == 'passenger_later_bookings' || type == 'check_confirmed_status' || type == 'passenger_update_drop_location')
		{ 
			homelib[type](q,req).then(function(results){
				var time = new Date();
				var endtime =time.getTime();
				var execution_time = endtime-starttime;
				results.execution_time = execution_time+" ms";
				common.infologger(results);
				res.send(results);
			 });
		}
		else if(type == 'get_favourite_list' || type == 'add_favourite' || type == 'edit_favourite' || type == 'delete_favourite')
		{ 
			favlib[type](q,req).then(function(results){
				var time = new Date();
				var endtime =time.getTime();
				var execution_time = endtime-starttime;
				results.execution_time = execution_time+" ms";
				common.infologger(results);
				res.send(results);
			 });
		}
		else if(type == 'passenger_profile' || type == 'edit_passenger_profile' || type == 'update_language')
		{ 
			profilelib[type](q,req).then(function(results){
				var time = new Date();
				var endtime =time.getTime();
				var execution_time = endtime-starttime;
				results.execution_time = execution_time+" ms";
				common.infologger(results);
				res.send(results);
			 });
		}
		else if(type == 'nearestdriver_list' || type == 'savebooking' || type == 'get_driver_reply')
		{ 
			searchlib[type](q,req).then(function(results){
				var time = new Date();
				var endtime =time.getTime();
				var execution_time = endtime-starttime;
				results.execution_time = execution_time+" ms";
				common.infologger(results);
				res.send(results);
			 });
		}
		else if(type == 'get_trip_detail'  || type == 'passenger_trips_list')
		{ 
			tripdetailslib[type](q,req).then(function(results){
				var time = new Date();
				var endtime =time.getTime();
				var execution_time = endtime-starttime;
				results.execution_time = execution_time+" ms";
				common.infologger(results);
				res.send(results);
			 });
		}
		else if(type == 'wallet_add_money' || type == 'passenger_wallet_history' || type == 'redeem_rewards' )
		{ 
			walletlib[type](q,req).then(function(results){
				var time = new Date();
				var endtime =time.getTime();
				var execution_time = endtime-starttime;
				results.execution_time = execution_time+" ms";
				common.infologger(results);
				res.send(results);
			 });
		}
		else if(type == 'added_promocode_list' || type == 'add_promocode')
		{ 
			promocodelib[type](q,req).then(function(results){
				var time = new Date();
				var endtime =time.getTime();
				var execution_time = endtime-starttime;
				results.execution_time = execution_time+" ms";
				common.infologger(results);
				res.send(results);
			 });
		}
		else if(type == 'get_passenger_notifications' || type == 'update_notify_logs')
		{ 
			notificationslib[type](q,req).then(function(results){
				var time = new Date();
				var endtime =time.getTime();
				var execution_time = endtime-starttime;
				results.execution_time = execution_time+" ms";
				common.infologger(results);
				res.send(results);
			 });
		}
		else if(type == 'cancel_trip')
		{ 
			cancellib[type](q,req).then(function(results){
				var time = new Date();
				var endtime =time.getTime();
				var execution_time = endtime-starttime;
				results.execution_time = execution_time+" ms";
				common.infologger(results);
				res.send(results);
			 });
		}
		else if(type == 'update_ratings_comments')
		{ 
			ratingslib[type](q,req).then(function(results){
				var time = new Date();
				var endtime =time.getTime();
				var execution_time = endtime-starttime;
				results.execution_time = execution_time+" ms";
				common.infologger(results);
				res.send(results);
			 });
		}
		else if(type == 'past_booking_places' || type == 'recent_trip_places' || type == 'get_recent_places')
		{ 
			placeslib[type](q,req).then(function(results){
				var time = new Date();
				var endtime =time.getTime();
				var execution_time = endtime-starttime;
				results.execution_time = execution_time+" ms";
				common.infologger(results);
				res.send(results);
			 });
		}
		else if(type == 'tripfare_update')
		{ 
			fareupdatelib[type](q,req).then(function(results){
				var time = new Date();
				var endtime =time.getTime();
				var execution_time = endtime-starttime;
				results.execution_time = execution_time+" ms";
				common.infologger(results);
				res.send(results);
			 });
		}
		else if(type == 'dynamic_page')
		{ 
			pageslib[type](q,req).then(function(results){
					var time = new Date();
					var endtime =time.getTime();
					var execution_time = endtime-starttime;
					results.execution_time = execution_time+" ms";
					//logs(JSON.stringify(results));

					if(results.status == 1)
					{
						console.log(results.detail.device_type);

						if(results.detail.device_type == 2)
						{	
							common.infologger(results);
							res.send(results);
						}
						else
						{
							var content = results.detail.content
							res.type('text/html');
							res.send(content);
						}
					}
					else
					{
						res.send(results);
					}
			 });
		}
		else if(type == 'get_distance_calculation')
		{ 
			distancelib[type](q,req).then(function(results){
					
				var time = new Date();
				var endtime =time.getTime();
				var execution_time = endtime-starttime;
				results.execution_time = execution_time+" ms";
				common.infologger(results);
				res.send(results);
			
			 });
		}
		else
		{
			var message = {'message':req.__('invalid_request'),'status':-1};
			res.type('text/json');
			res.send(message);
		}

  });

  return router;
};
