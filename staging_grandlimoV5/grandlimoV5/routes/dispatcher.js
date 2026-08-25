var express = require('express'),
    router = express.Router();

var app = require('../app');
var apimodel = require('../models/apimodel');
var t=require('../config/table_config.json');
var common=require('../lib/common.js');
var config = require('../config/common_config.json');



var i18n = require('i18n');
var q= require('q');
var fs= require('fs');
const url = require('url');    


module.exports = function (app) {

  router.get('/edit_fare', function (req, res) {

  	var data = req.query;

    var payment_array ={
        'add_amt':parseFloat(data.add_amt),
        'cash_pay':parseFloat(data.pending_amt),
        'card_pay':parseFloat(data.card_pay),
        'knet_pay':parseFloat(data.knet_pay),
        'pending_pay':parseFloat(data.pending_pay),
        'wallet_pay':parseFloat(data.wallet_pay),
        'fare_note':parseFloat(data.fare_note)
        }; 

	     apimodel.update_payentry(q,payment_array,trip_id).then(function(transupdateresults){
	                    
	        deferred.resolve();
	        deferred.makeNodeResolver()
	        message=null;   
	    });    
     
  });

  return router;
};