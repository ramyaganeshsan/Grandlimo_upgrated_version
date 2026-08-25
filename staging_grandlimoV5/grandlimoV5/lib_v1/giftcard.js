var axios = require('axios');


exports.cardRedemption= function(q,req){
  var deferred = q.defer();
  const giftcards_url = global.settings.gift_card_url;
  const tokenStr = global.settings.gift_card_token;
  const config = {
  headers: { "Authorization" : `Bearer ${tokenStr}`}
  };

  let data = {"giftcard":{
    "card_number":req.card_number,
    "redemption_amount":req.redemption_amount,
    "store_id":global.settings.gift_card_store_id,
    "card_pin":"",
    "email":req.email,
    "first_name":req.first_name,
    "Last_name":req.last_name,
    "Phone":""
  }};
  console.log("data",data)
    axios.post(giftcards_url+'/spend', data, config)
      .then(function (response) {
       console.log("response",response.data);
        deferred.resolve(response);
				deferred.makeNodeResolver()
				response=null;
      })
      .catch(function (error) {
        console.log("err",error.response);
        deferred.reject(error);
				deferred.makeNodeResolver()
				response=null;
      });
    return deferred.promise;
}

exports.getCardBalance= function(q,req){
  const giftcards_url = global.settings.gift_card_url;
  const tokenStr = global.settings.gift_card_token;
  const config = {
  headers: { "Authorization" : `Bearer ${tokenStr}`}
  };

  console.log(giftcards_url);

  var deferred = q.defer();
try {
    axios.get(giftcards_url+'/balance_check?card_number='+req.promocode,config)
      .then(function (response) {
        console.log("fetching get card balance response");
       // console.log("response",response);
        deferred.resolve(response);
				deferred.makeNodeResolver()
				response=null;
      })
      .catch(function (error) {
        console.log("fetching error");
        console.log("err",error);
        deferred.reject(error);
				deferred.makeNodeResolver()
				response=null;
      });
    } catch(err)
    {
      console.log(err);
    }
    return deferred.promise;
}

exports.cancelTransaction= function(q,req){

  const giftcards_url = global.settings.gift_card_url;
  const tokenStr = global.settings.gift_card_token;
  const config = {
  headers: { "Authorization" : `Bearer ${tokenStr}`}
  };

  let data = {
    "store_id":global.settings.gift_card_store_id,
    "transaction_id":req.transaction_id
  };
  console.log("data",data);

  var deferred = q.defer();

    axios.post(giftcards_url+'/cancel_transaction', data, config)
      .then(function (response) {
       // console.log("response",response);
        deferred.resolve(response);
				deferred.makeNodeResolver()
				response=null;
      })
      .catch(function (error) {
        //console.log("err",error);
        deferred.reject(error);
				deferred.makeNodeResolver()
				response=null;
      });
    return deferred.promise;
}