var db = require('../config/dbconnection');
var t=require('../config/table_config.json');
var md5 = require('md5');


exports.GetBookingList= function(q,data,time_range,two_days_before){
console.log("model V1 GetBookingList")
	var deferred = q.defer();


    try
    {

    //console.log('trip filter data',data);
	
	//data.travel_status = '0,1,2,3';
	//data.manage_status = 0;
	data.taxi_company =1;
	//var travel_status=data.travel_status.split(", ");
	//var manage_status=data.manage_status;
	//var taxi_company=data.taxi_company;
	var manage_status =data.manage_status;// data.manage_status;
	
	var d = new Date();
	//var two_days_before = d.setDate(d.getDate() - 2);

    var match_arr = {};
	var match_array = [];
	if(manage_status==0){	
		
		match_array.push({'pickup_time':{'$gte' : two_days_before }});
	}	

    //console.log(data.trip_type);

    if(data.trip_type != '' && typeof(data.trip_type) != 'undefined')
    {
        if(data.trip_type != 'Airport' && data.trip_type != 'Hourly' && data.trip_type != 'Zone')
        {
            match_array.push({'book_type':data.trip_type});
            match_array.push({'airport_pickup':{'$ne':parseInt(1)}});
            match_array.push({'hourly_booking':{'$ne':parseInt(1)}});
            match_array.push({'zone_fare_applicable':{'$ne':parseInt(1)}});

           // match_arr.airport_pickup = parseInt(0);
        }else if(data.trip_type == 'Hourly')
        {
            match_array.push({'hourly_booking':parseInt(1)});
           // match_arr.airport_pickup = parseInt(0);
        }
        else if(data.trip_type == 'Zone')
        {
            match_array.push({'zone_fare_applicable':parseInt(1)});
        }
        else
        {
            match_array.push({'airport_pickup':parseInt(1)});
        }
    }

    /* Sasidharan aug 29 2022 */
    let keywordMatch = {};
    if(data.keyword != '' && typeof(data.keyword) != 'undefined')
    {
        //var keyword = new RegExp(data.keyword,'i');
        var keyword = data.keyword;

        // match_array.push({ '$or': [ { 'people.name': { $regex: keyword, $options: 's' } }, { 'passengers.name' : { $regex: keyword, $options: 's' } } ,{ '_id' : parseInt(keyword) } ] });
        /* Sasidharan aug 29 2022 */
        // match_array.push({ '$or': [ { 'people.name': { $regex: keyword, $options: 'is' } }, { 'passengers.name' : { $regex: keyword, $options: 'is' } } ,{ '_id' : parseInt(keyword) } ] });
        keywordMatch = { 
            '$or': [ 
                { '_id' : parseInt(keyword) },
                { 'people.name': { $regex: keyword, $options: 'is' } }, 
                { 'people.phone': { $regex: keyword, $options: 'is' } }, 
                { 'people.driver_code': { $regex: keyword, $options: 'is' } }, 
                { 'passengers.phone': { $regex: keyword, $options: 'is' } }, 
                { 'passengers.name' : { $regex: keyword, $options: 'is' } },
            ] 
        };
    }

    if(data.search_location != '' && typeof(data.search_location) != 'undefined')
    {
        var search_location = new RegExp(data.search_location,'i');
        search_location = { $regex: search_location, $options: 'i' };

        match_array.push({ '$or': [ { 'current_location' : search_location },{ 'drop_location' : search_location } ] });
    }

    if(typeof(data.filter_date) != 'undefined' && typeof(data.to_date) != 'undefined')
    {
        if(data.filter_date != '' && data.to_date != '')
        {
         match_array.push({ 'actual_pickup_time': {'$gte':new Date(data.filter_date),'$lt':new Date(data.to_date)} });
        }
    }

    if(typeof(data.status_color) != 'undefined' && JSON.stringify(data.status_color) != '{}')
    {
        var cancel_arr = [] ;

        if(data.status_color.includes(8) == true )
        {
            cancel_arr= cancel_arr.concat(['C','R']);
            data.status_color = data.status_color.concat([4]); 
        } 

        if(data.status_color.includes(0) == true  || data.status_color.includes(7) == true  )
        {
            cancel_arr= cancel_arr.concat(['']);
        } 

        if(data.status_color.includes(11) == true )
        {
            var status_eleven = [6,7,10];
           data.status_color = data.status_color.concat(status_eleven); 
        }

        if(data.status_color.includes(9) == true || data.status_color.includes(1) == true || data.status_color.includes(2) == true || data.status_color.includes(3) == true || data.status_color.includes(5) == true)
        {
           cancel_arr= cancel_arr.concat(['A']);
        }

        if(data.status_color.includes(0) == true)
        match_array.push({'$or':[{'driver_reply':{'$in':cancel_arr}},{'driver_reply':{'$exists':false}}]}); 
        else
        match_array.push({'driver_reply':{'$in':cancel_arr}}); 

        match_array.push({'travel_status':{'$in':data.status_color}});
   }
   else  
   {
        match_array.push({'travel_status':{'$in':[0,6,7,10,1,0,9,3,2,1,5,8,4]}});
   }

   //console.log('match array',JSON.stringify(match_array))


    //match_arr['pickup_time'] = {'$gte':two_days_before} ;

    if(typeof(data.skip) != 'undefined')
    {      
        var skip_data = parseInt(data.skip*5);
    }else{
        var skip_data = 0;
    }

    if(typeof(data.limit) != 'undefined')
    {        
        var limit_data = parseInt(data.limit);
    }else{
        var limit_data = 5;
    }

	arguments = [
            {'$match':{ '$and' : match_array}},
            {'$sort':{"_id":-1}},
            // {'$skip' : skip_data },
            // {'$limit' : limit_data },
            {'$lookup':{
                    'from' : 'people',
                    'localField' : 'driver_id',
                    'foreignField' : "_id",
                    'as' : "people"
             }},
            {'$unwind' : {"path":  '$people',"preserveNullAndEmptyArrays": true }},
            {'$lookup':{
                    'from' : 'company',
                    'localField' : 'company_id',
                    'foreignField' : "_id",
                    'as' : "company"
            }},
            {'$unwind' : {"path":  '$company',"preserveNullAndEmptyArrays": true }},
            {'$unwind' : {"path":  '$company.dispatch_algorithm',"preserveNullAndEmptyArrays": true }},    
            {'$lookup':{
                    'from' : 'passengers',
                    'localField' : 'passengers_id',
                    'foreignField' : "_id",
                    'as' : "passengers"
            }},           
            {'$unwind' : {"path":  '$passengers',"preserveNullAndEmptyArrays": true }},

            /* Sasidharan apr - 16 -2022 */
            {'$lookup':{
                    'from' : 'passengers_promo',
                    'localField' : 'promocode',
                    'foreignField' : "promocode",
                    'as' : "promocodeDetails"
            }},  
            {'$unwind' : {"path":  '$promocodeDetails',"preserveNullAndEmptyArrays": true }},

            {'$lookup':{
                    'from' : 'motor_model',
                    'localField' : 'taxi_modelid',
                    'foreignField' : "_id",
                    'as' : "motormodel"
            }},
            {'$unwind' : '$motormodel'},
            {'$lookup':{
                    'from' : 'transaction',
                    'localField' : '_id',
                    'foreignField' : "passengers_log_id",
                    'as' : "trans"
            }},
            {'$unwind' : {"path":  '$trans',"preserveNullAndEmptyArrays": true }},

            /* Sasidharan aug 29 2022 */
            {'$match' : keywordMatch},

            {
                    '$project':{'_id':1, 
                    'companyId':'$company_id' ,      
                    'companyName':  { $ifNull : ['$company.companydetails.company_name','']},        
                    'pickupTime':'$pickup_time',
                    'createDate':'$createdate',
                    'actual_pickup_time' : {'$dateToString': { 'format': "%d-%m-%Y %H:%M:%S", 'date':{'$add':['$actual_pickup_time',3 * 60 * 60 * 1000]} }},                   
                    'currentLocation':'$current_location',
                    'dropLocation':'$drop_location',
                    "pickupLatitude" : "$pickup_latitude",
                    "pickupLongitude" : "$pickup_longitude",
                    "dropLatitude" : "$drop_latitude",
                    "dropLongitude" : "$drop_longitude",
                    'actPickuptime' : '$actual_pickup_time',
                    'travelStatus':'$travel_status',
                    'driverReply':'$driver_reply',
                    'tripId':'$_id',
                    'passengerId' : '$passengers_id',
                    'passengerName':'$passengers.name',
                    'driverId':{ $ifNull : ['$people._id',0]},
                    'driverName': { $ifNull : ['$people.name','']},
                    'driverPhone': { $ifNull : ['$people.phone','']},
                    'driverCode': { $ifNull : ['$people.driver_code','']},
                    'createdate' : '$createdate',
                    'modelName':'$motormodel.model_name',
                    'modelId':'$motormodel._id',
                    'modelBaseFare':'$motormodel.base_fare',
                    'modelMinKm':'$motormodel.min_km',
                    'modelMinFare':'$motormodel.min_fare',                    
                    'passengerPhone':'$passengers.phone',
                    //'passengerWalletAmount':'$passengers.wallet_amount',
                    'passengerWalletAmount':{ $ifNull : ['$passengers.wallet_amount',0]},
                    'passenger_country_code':'$passengers.country_code',
                   // 'passenger_email':'$passengers.email',
                    'driverReply' : '$driver_reply',
                    'airportPickup' : '$airport_pickup',
                    'zoneFareApplicable' : { $ifNull : ['$zone_fare_applicable',0]},
                    'dispatchTime' : '$dispatch_time',
                    'airportFlightNumber' : '$airport_flight_number',
                    'dispatch_type': '$company.dispatch_algorithm.labelname',
                    //'org_fare':'$trans.fare',
                   // 'org_distance':'$trans.distance',
                   'approxDistance':'$approx_distance',
                   // 'approx_fare':'$approx_fare',
                    'bookingtype':'$bookingtype',
                    'notes':'$notes_driver',
                    'bookby':'$bookby',
                    'confirmFlag' : { $ifNull : ['$confirm_flag',0]},
                    'now_after' : '$now_after',
                    'driverid':'$driver_id',
                    'trip_type':'$trip_type',
                    'createdUser':{ $ifNull : ['$createdby_username',0]},
                    'adminNotes':'$passenger_admin_notes',
                    'bookTag':'$book_tag',
                    'airportFlightNumber':'$airport_flight_number',
                    'bookingKey':'$booking_key',
                    'bookType':'$book_type',
                    'approxDuration':'$approx_duration',
                    'hourly_booking':'$hourly_booking',
                    'hourly_booking_hrs':'$hourly_booking_hrs',
                    'fare':{ $ifNull : ['$trans.fare',0]},
                    'paymentType':{ $ifNull : ['$trans.payment_type',0]},
                    'advancePayment':{ $ifNull : ['$trans.advance_payment',0]},
                    'pendingAmt':{ $ifNull : ['$trans.pending_amt',0]},
                    'walletAmountUsed':{ $ifNull : ['$trans.wallet_amount_used',0]},
                    'driverEditStatus':'$driver_edit_status',
                    'actualPaidAmt':{ $ifNull : ['$trans.actual_paid_amt',0]},
                    'addAmt':{ $ifNull : ['$trans.add_amt',0]},
                    'passengerPendingAmt':{ $ifNull : ['$trans.passenger_pending_amt',0]},
                    'tripMinutes':{ $ifNull : ['$trans.trip_minutes',0]},
                    'tripDistance':{ $ifNull : ['$trans.distance',0]},
                    'durationUpdatetime':{ $ifNull : ['$duration_update_time','']},
                    'modelId':{ $ifNull : ['$taxi_modelid',0]},
                    'performanceStatus':{ $ifNull : ['$performance_status','']},
                    'editFare':'$fare_detail.value',
                    'fareCalculationType' :{'$ifNull':['$trans.fare_calculation_type',2]},
                    'distanceUnit' :{'$ifNull':['$trans.distance_unit',2]},
                    'apply_estimate_fare' :{'$ifNull':['$trans.apply_estimate_fare',0]},
                    'remain_time_update' :{'$ifNull':['$remain_time_update',0]},
                    'promo_fixed_fare_apply' :{'$ifNull':['$trans.promo_fixed_fare_apply',0]},
                    /* Sasidharan apr - 16 -2022 */
                    'corporate_promocode':{ '$ifNull' : ['$promocodeDetails.corporate_promocode',0]},
                    'promocode':{ $ifNull : ['$promocode',"-"]},
                    'passenger_discount' :{'$ifNull':['$trans.passenger_discount',0]},

                    /* Sasidharan aug 15 2022 */
                    'surge_price_status':{ $ifNull : ['$surge_price_status',0]},
                    'surge_price_percentage':{ $ifNull : ['$surge_price_percentage',0]},
                    'taxi_modelid':{ $ifNull : ['$taxi_modelid',0]},

                    /* Sasidharan sep 26 2022 */
                    'surge_price' :{'$ifNull':['$trans.surge_price',0]},

                    /* Sasidharan july 19 2023 */
                    'cancelation_time_string' :{'$ifNull':['$cancelation_time_string',"-"]},
                    }                        
            },
            {'$sort':{"_id":-1}},            
                
        ];

    // if(typeof(data.skip) != 'undefined')
    // {
    //     arguments.push({ '$skip' : parseInt(data.skip*5) });
    // }

    // if(typeof(data.limit) != 'undefined')
    // {
    //     arguments.push({ '$limit' : parseInt(data.limit) });
    // }

    ////console.log('query data',JSON.stringify(arguments));
	
	if(manage_status==2)
    {
        var table_name = t.MDB_LOGS_COMPLETED
    }
    else
    {
        var table_name = t.MDB_PASSENGERSLOG
    }	

    //console.log('table name',table_name);
	var collection = db.get().collection(table_name);
	collection.aggregate(arguments).toArray(function(err, results) {
		//console.log('err',err);

        //console.log('dispatcher results....count ---',results.length);

	 	deferred.resolve(results);
		deferred.makeNodeResolver()
		result=null;
	  });

    }
    catch(err)
    {
        //console.log(err);
    }

	 return deferred.promise;
}



exports.GetDriverList= function(q,data,time_range,two_days_before){
    
    var deferred = q.defer();
    var match_query = {};
    var match_model_query = {};

   //console.log('model id',data);

    if(typeof(data.model_id) != 'undefined' && data.model_id != '')
    {
        match_model_query={
        'model._id':parseInt(data.model_id)
        }
    }

    //console.log("match erre",match_model_query);

    arguments = [         
                {
                    '$lookup' : {
                        'from' : t.MDB_PEOPLE,
                        'localField' : '_id',
                        'foreignField' : "_id",
                        'as' : "people"
                    }
                },
                {
                    '$unwind' : '$people'
                },
                {
                    '$lookup' : {
                        'from' : t.MDB_TAXIMAPPING,
                        'localField' : '_id',
                        'foreignField' : "mapping_driverid",
                        'as' : "taxi_driver_mapping"
                    }
                },
                {
                    '$unwind' : '$taxi_driver_mapping'
                },
                {'$match' : {'taxi_driver_mapping.mapping_status':'A'}},
                {
                    '$lookup' : {
                        'from' : t.MDB_TAXI,
                        'localField' : 'taxi_driver_mapping.mapping_taxiid',
                        'foreignField' : "_id",
                        'as' : "taxi"
                    }
                },
                {
                    '$unwind' : '$taxi'
                },
                //{'$match' : {'taxi.taxi_model':(int) $taxi_model}},
                {'$lookup' : {
                    'from' : t.MDB_MOTOR_MODEL,
                    'localField' : "taxi.taxi_model",          
                    'foreignField' : "_id",
                    'as' : "model"
                }
            },
            {'$unwind' : '$model'},
            {
                '$match' : match_model_query
            },
            {
                '$project' : {
                    'driver_id' : '$people._id',
                    'name' : '$people.name',
                    'driver_code' : '$people.driver_code',
                    'taxi_no' : '$taxi.taxi_no',
                    'driver_status' : '$status',
                     'gps_enable' : {'$ifNull':['$gps_enable',1]},
                    'loc' : '$loc.coordinates',
                    'lng' : { '$arrayElemAt': [ "$loc.coordinates", 0 ] },
                    'lat' : { '$arrayElemAt': [ "$loc.coordinates", 1 ] },
                    'latitude' : { '$arrayElemAt': [ "$loc.coordinates", 0 ] },
                    'longitude' : { '$arrayElemAt': [ "$loc.coordinates", 1 ] },
                    'shift_status' : '$shift_status',
                    'bearing' : {'$ifNull':['$bearing',0]},
                    'status' : '$status',
                    //'update_date' : '$update_date',
                    'model_name':{'$ifNull':['$model.model_name','']},
                    'taxi_no':{'$ifNull':['$taxi.taxi_no','']},
                    'update_date':'$update_date',
                    'trip_remaining_time':{'$ifNull':['$trip_remaining_time',0]},
                    'profile_picture':'$people.profile_picture',
                    'updatetime_difference' :  { '$divide' : [{'$subtract' :[new Date(),'$update_date']}, 1000]},
                    'model_id':{'$ifNull':['$model._id','']},//26 feb 2021
                }
            },
            {'$sort': {driver_status:1} }                 
        ];
    
            
    var collection = db.get().collection(t.MDB_DRIVER_INFO);
    collection.aggregate(arguments).toArray(function(err, results) {
        //console.log('results',results);
        deferred.resolve(results);
        deferred.makeNodeResolver()
        result=null;
      });

     return deferred.promise;
}

//26 feb 2021
exports.UpdateTotalDriver= function(q,id,update_array){
    var deferred = q.defer();

    var collection = db.get().collection(t.MDB_MOTOR_MODEL);

    collection.update({'_id':parseInt(id)},{'$set':update_array},{'$upsert':false},function(err,data){
        //console.log('err2',err);
        deferred.resolve(data);
        deferred.makeNodeResolver()
        data=null;
        });

     return deferred.promise;
}
//26 feb 2021


