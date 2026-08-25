var FCM = require('fcm-push');
var request = require('request');
var apn = require('apn'),
util = require('util');
var options = {
token: {
key: "AuthKey_7Z6DJ2T5LA.p8",
keyId: '7Z6DJ2T5LA',
teamId:'FDG4PBGHHM'
},
production: false
};


exports.iosPushnotification = function(msg,deviceToken)
{
	console.log("IOS Push notification...................");

	var apnProvider = new apn.Provider(options);

	//var deviceToken ='0a37a17f316a4efafaee668ab2d19f3fb23e26229a7c63997debd49cfc14a898';
	var data = {'alert':msg,'status':1,'badge':1};
	var note = new apn.Notification();
	note.payload =data;
	note.alert = data.alert;
	note.sound = 'default';
	note.badge = 1;
	note.status = 1;
	note.aps.status = 1;
	note.topic = "com.grandlimo.passenger";
	console.log('note',note);
	console.log('data',data);
	apnProvider.send(note, deviceToken).then((result) => {
		console.log(util.inspect(result, {
			showHidden: false,
			depth: null
		}));
	});

}

exports.androidPushnotification = function(msg,deviceToken)
{
	console.log("Android Push notification...................",global.settings.customer_android_key_new);
	//var serverkey = global.settings.customer_android_key_new;
	var serverkey = 'AIzaSyBx-tbgdPRI4qft8ehS9MqPPOfTSf0pyzc';
	var fcm = new FCM(serverkey);
	  var message = {
	    //to: 'dBW3OjDTFMo:APA91bF7HJeLaRguWx8DPy88msPUfztuZbpotM-29ZkwO2y3UkZCPpHLg6hx-K4gnrtMd7Dxxc1zrTDPxYe3_dqQ6dOqXLosemheoN4uYDW0BL6eGR_2mBlAAyxtkak0jz2UVyAmyx9c',
	    to: deviceToken,
	    priority: 'high',
	    notification: {
	      title: "Grandlimo",
	      body: msg,
	      message: msg,
	      sound: "default",
	      badge: 1,
	      type: 1,
	      status:13
	    },
	    data: {
		  title: "Grandlimo",
	      message: {
			  title: "Grandlimo",
			  message: msg,
			  body: msg,
			  sound: "default",
			  badge: 1,
			  type: 1,
			  status:13	
		  },
	      sound: "default",
	      badge: 1,
	      type: 1,
	      status:13	
		}
	  };

	  console.log(message);

	fcm.send(message)
	.then(function(response){
	console.log("Successfully sent with response: ", response);
	})
	.catch(function(err){
	console.log("Something has gone wrong!", err); 
	})
}
