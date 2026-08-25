<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<?php 	$json_data = json_decode($data_address); 
$latitude = $json_data->latitude; 
$longitude = $json_data->longitude; ?>
<?php //print_r($driver_details);?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/easyslider/bjqs-1.3.min.js"></script>
<link href="<?php echo URL_BASE;?>public/js/easyslider/bjqs.css" rel="stylesheet" type="text/css" media="screen" />	
<link href="<?php echo URL_BASE;?>public/js/easyslider/demo.css" rel="stylesheet" type="text/css" media="screen" />	
<?php

if($_POST){


	$address = isset($_POST['search_city']) ? $_POST['search_city'] : ""; 

	if(isset($_POST['search_country']))
	{	
		$_SESSION['search_country'] = $_POST['search_country'];
		$_SESSION['search_city'] = $_POST['search_city'];

	}

	if($address !='')
	{
	$prepAddr = str_replace(' ','+',$address);
	$geocode = file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
	$json_data = json_decode($geocode);

	$latitude = $json_data->results[0]->geometry->location->lat;
	$longitude = $json_data->results[0]->geometry->location->lng;
	}

	$drop_location =  isset($_POST['drop_location']) ? $_POST['drop_location'] : "";
	$current_location = isset($_POST['current_location']) ? $_POST['current_location'] : "";
	$no_passengers = isset($_POST['no_passengers']) ? $_POST['no_passengers'] : "";
	$miles = isset($_POST['miles']) ? $_POST['miles'] : "";
	$pickup_time = isset($_POST['pick_up_time']) ? $_POST['pick_up_time'] : "";
	$lat = isset($_POST['lat']) ? $_POST['lat'] : "";
	$lng = isset($_POST['lng']) ? $_POST['lng'] : "";
}
?>
 <div class="slider_common">
            <div class="slider_inner">
                <div class="slider_inner_common">
                    <div id="panel">
                        <div class="advance_search_common">
                    <?php if(isset($content[0]['content'])) { echo $content[0]['content']; } ?>
						<form name="place_search" id="place_search" method="post" action="<?php echo URL_BASE.'advance-search.html'; ?>">
							 <dl class="dl-horizontal">
								 <dt><label for="current_location"><?php echo __('Current_Location'); ?></label></dt>
								 <dd><input id="current_location" name="current_location" type="text" class="input-xxlarge" value="<?php echo isset($current_location)?$current_location:'';?>" placeholder="<?php echo __('pickup_place_holder'); ?>" > </dd>
								 
								 <dt><label for="drop_location"><?php echo __('Drop_Location'); ?></label></dt>
								 <dd><input id="drop_location" name="drop_location" type="text" class="input-xxlarge" value="<?php echo isset($drop_location)?$drop_location:'';?>" placeholder="<?php echo __('drop_place_holder'); ?>"></dd>
								 
								 <dt><label for="no_passengers"><?php echo __('No_Passengers'); ?></label></dt>
								 <dd><input min="1" max="10" name="no_passengers" id="no_passengers" type="number" size="2" value="<?php echo isset($no_passengers)?$no_passengers:'';?>"></dd>
								 
								 <dt><label for="pick_up_time"><?php echo __('pick_up_time');?></label></dt>
								 <dd>
									<div class="input-append bootstrap-timepicker">
										<input id="timepicker1" name="pick_up_time" value="<?php echo isset($pickup_time)?$pickup_time:'';?>" type="text" class="input-small" >
										<span class="add-on"><i class="icon-time"></i></span>
									</div>
									<span id="pickuptime_error" style="color:red"></span>
									<?php //echo $time_in_24_hour_format  = DATE("H:i:s", STRTOTIME("01:30:46 PM"));
									//  $date = date('Y-m-d H:i:s');echo $date;    echo date('h:i:s a', strtotime($date));?>
								</dd>
								
								 <dt><label for="no_passengers"><?php echo __('no_miles'); ?></label></dt>
								 <dd>
									 <select name="miles" id="miles">
										<?php 
											foreach($getMiles as $key)
											{ ?>
												<option value="<?php echo $key['mile_name']; ?>" <?php  if($miles==$key['mile_name']) { echo 'selected'; } ?> ><?php echo $key['mile_name']." ".__('miles'); ?></option>
											<?php }
										?>		
									</select>
								 </dd>
								 
							  <dt>
								<input type="hidden" name="lat" id="lat" value="<?php echo isset($lat)?$lat:'';?>"><input type="hidden" name="lng" id="lng" value="<?php echo isset($lng)?$lng:'';?>">
								  <input type="button" onclick="SubmitForm()" class="btn btn-info" value="<?php echo __('Advance Search'); ?>">
								 
								  <input type="hidden" name="passenger_id" id="passenger_id" value="<?php echo $usrid;?>">
								  <input type="hidden" name="cancel_rejected_driver_id" id="cancel_rejected_driver_id" value="<?php echo $cancel_rejected_driver_id;?>">
								  <div id="hidden_inputs"></div>   
							  </dt>
							  <dd> 
								  <button type="button" id="search_btn" class="btn"><?php echo __('button_search'); ?></button> 
							  </dd>     
								 
							</dl>	     
						</form>
					
                    </div>
                </div>
            </div>
        </div>
 </div>
   <div class="banner_part"> 
 <div class="bg">&nbsp;</div> 
  <input id="cancel_current_location" name="cancel_current_location" type="hidden" value="<?php echo isset($current_location)?$current_location:'';?>" >
 <input id="cancel_drop_location" name="cancel_drop_location" type="hidden" value="<?php echo isset($drop_location)?$drop_location:'';?>" >
 <!--Start : Driver Details in Tabular Column -->
 
	
 <div id="taxi_detail"></div>		
 
 <div class="left_content_taxi1" style="margin:0;background:#EEE;">
	
	<div class="left_content_taxi_mid1">
		<div class="left_apps">	 
			<div class="loader"><img src="<?php echo URL_BASE .'public/img/loader.gif'?>"></div>
		 	<div class="text_feeld" id="driver_details">
				<div class="left_apps_inner_comm">
					<div class="left_apps_inner">
						<span>&nbsp;</span>
					</div>
					<p style="margin:0;color:#000;"><?php echo __('greastest_mobile_app'); ?></p>
					
				</div>  			                                   
			</div>			
		</div>
	</div>
 </div>
 <!--End : Driver Details in Tabular Column -->

<!--        <script type="text/javascript">
			
		$(document).ready(function(){
		
					<?php //if(empty($pickup_time)){?>
					//$('div.slider_common').hide();
					<?php // } ?>
					$('.get_taxi_model_top_bar').click(function(){
                    $('div.slider_common').slideToggle(1050);
                    $(this).find('.yello_mid a').toggleClass('active');
                });
            });
    </script>-->

    <div class="roling_common">
 <div id="panel">
	<div id="map-canvas" style="height:500px;margin-top:-30px;"></div>
 </div>
    </div>
 
 </div>     
 
<script>
	
var infowindow = new google.maps.InfoWindow();
var marker;
var geocoder;

function initialize() {
	
	geocoder = new google.maps.Geocoder();
	
	var jsArray = <?php echo json_encode($driver_details); ?>; 
	var markersArray = [];
	
	var miles= $('#miles').val();		
	
    var myLatlng = new google.maps.LatLng('<?php echo $latitude; ?>', <?php echo $longitude; ?>);
    var marker1;
    var myOptions = {
        zoom: 12,
        center: myLatlng,
        
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);
    
		/*marker = new google.maps.Marker({ 
            position: myLatlng,
            map: map
        });        
        
        infowindow = new google.maps.InfoWindow({
            content: "<html><b>YOU ARE HERE</b></html>"
        });
        
		infowindow.open(map,marker);

        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map,marker);
        }); 
        */
        
    var input = /** @type {HTMLInputElement} */(document.getElementById('current_location'));
    var input2 = /** @type {HTMLInputElement} */(document.getElementById('drop_location'));
    
	var autocomplete = new google.maps.places.Autocomplete(input);
	var autocomplete1 = new google.maps.places.Autocomplete(input2);

	google.maps.event.addListener(autocomplete, 'place_changed', function() {		
		var place = autocomplete.getPlace();
		if (!place.geometry) {
		  // Inform the user that the place was not found and return.
		  input.className = 'notfound';
		  return;
		}
		
		//Assinging the Locations While Auto Suggestions			
		var lat = place.geometry.location.lat();
		var lng = place.geometry.location.lng();
		
		set_hidden(lat,lng);
		
	});
	
	
	
	google.maps.event.addListener(map, "click", function(event) 
	{
		var lat = event.latLng.lat();
		var lng = event.latLng.lng();	

		codeLatLng(lat,lng,'current_location');	
		
		set_hidden(lat,lng);
			
	});
	google.maps.event.addListener(map, "rightclick", function(event) 
	{
		var lat = event.latLng.lat();
		var lng = event.latLng.lng();	 
		
		codeLatLng(lat,lng,'drop_location');	
			
	});

	$('#search_btn').click(function(){

		var Timeobject = new Date()
		var hours = Timeobject.getHours()
		var minutes = Timeobject.getMinutes()
		var seconds  = Timeobject.getSeconds()	
		var currentTime = '<?php echo date('h:i:s a');?>';//hours+':'+(minutes<10?'0':'') + minutes+':'+seconds;
		//alert(currentTime);
		var lat = $('#lat').val();
		var lng = $('#lng').val();
		
		var cur_loc = $("#current_location").val();
		var drop_loc = $("#drop_location").val();
		var pickuptime = $("#timepicker1").val();
		

		var no_pass = $("#no_passengers").val();
		if(cur_loc==""){
			$("#current_location").css("border","1px solid red");
			return false;
		}else{
			if(cur_loc=='Left Click on the Map to get the Pick Up Location'){
				$("#current_location").css("border","1px solid red");
				return false;
			}else{
				$("#current_location").css("border","");
			}
		}
		
		if(drop_loc==""){			
			$("#drop_location").css("border","1px solid red");
			return false;
		}else{
			if(drop_loc=='Right Click on the Map to get the Drop Location'){
				$("#drop_location").css("border","1px solid red");
				return false;
			}else{
				$("#drop_location").css("border","");
			}
		}
		
		if(no_pass==""){
			$("#no_passengers").css("border","1px solid red");
			return false;
		}else{
			$("#no_passengers").css("border","");
		}

		
		//alert(cur_loc);
		/*if(lat != "" && lng != "" && no_pass != "")
		{*/
			if(pickuptime > currentTime )
			{
				if(lat ==""  && lng =="")
				{
				geocoder = new google.maps.Geocoder();
				geocoder.geocode( { 'address': cur_loc}, function(results, status) {
				   lat = results[0].geometry.location.lat();
				   lng = results[0].geometry.location.lng();
				   
				  change_loc(lat,lng);	
				  set_hidden(lat,lng);    
				});
				}
				else
				{	
					change_loc(lat,lng);
					set_hidden(lat,lng);	
				}
				$("#pickuptime_error").html('');
			}
			else
			{
				$("#pickuptime_error").html('<?php echo __('pickuptime_error');?>');
			}
		/*}*/
		
	});
	
	function codeLatLng(lat,lng,id) 
	{	  
		  var latlng = new google.maps.LatLng(lat, lng);
		  geocoder.geocode({'latLng': latlng}, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
			  if (results[1]) 
			  {		  
				 $('#'+id).val(results[1].formatted_address); 
							
			  } else {
				alert('No results found');
			  }
			} else {
			  alert('Geocoder failed due to: ' + status);
			}
		  });
	}


	//Function Used to bind the places
	function change_loc(latitude,longitude)
	{
		var infowindow = new google.maps.InfoWindow();
		var marker = new google.maps.Marker();	
		
		clearOverlays();
		infowindow.close();
		marker.setVisible(true);		
		
		var miles= $('#miles').val(); 		
		
		map.setZoom(11);      // This will trigger a zoom_changed on the map
		map.setCenter(new google.maps.LatLng(latitude,longitude));
		map.setMapTypeId(google.maps.MapTypeId.ROADMAP);
		
		var no_passengers= $('#no_passengers').val(); 
		
		var bookingtime = $('#timepicker1').val(); 
		
		
		
		/*var citymap = {};
		citymap['place'] = {
		  center: new google.maps.LatLng(latitude, longitude),
		  population: 250
		};
		var cityCircle;

		 for (var city in citymap) {			
			var populationOptions = {
			  strokeColor: '#FF0000',
			  strokeOpacity: 0.8,
			  strokeWeight: 2,
			  fillColor: '#FF0000',
			  fillOpacity: 0.35,
			  map: map,
			  center: citymap[city].center,
			  radius: citymap[city].population 
			};
			cityCircle = new google.maps.Circle(populationOptions);
		  }*/
		
		if(latitude != null && longitude != null)
		{
			var passenger_id = $('#passenger_id').val();			
			var cur_loc = $("#current_location").val();
			var drop_loc = $("#drop_location").val();
			
			$('.loader').show();
			var dataS = "latitude="+latitude+"&longitude="+longitude+"&no_passengers="+no_passengers+"&miles="+miles+"&bookingtime="+bookingtime+"&passenger_id="+passenger_id+"&cur_loc="+cur_loc+"&drop_loc="+drop_loc;	

			var response;
			$('div.slider_common').slideToggle(1050);
            $(this).find('a').toggleClass('active');
			$.ajax
			({		
				type: "POST",
				url: "<?php echo URL_BASE;?>find/get_driver_location", 
				data: dataS, 
				cache: false, 
				dataType: 'json',
				success: function(response) 
				{ 	
					//alert(response);
					set_marker(response);	
					$('#driver_details').html('');		
					$('.loader').hide();
					if(response.length == 0)
					{
						 $('#driver_details').append('<div class="no_vehicle_found"><p><?php echo __("no_vehicle_found");?></p><br><div class="fl"><?php echo __("tips_broaden");?></div></div>');
					}
					else
					{
						render_data(response);								
					}		
				}, 
				error: function()
				{ 
					alert("Loading failed");
				} 
			});	
		}

    

		
		for(var i=0;i<jsArray.length;i++)
		{
			
			var iconBase = 'https://maps.google.com/mapfiles/kml/pal4/';
			var latlng=new google.maps.LatLng(jsArray[i].latitude,jsArray[i].longitude);
		   
			var marker = new google.maps.Marker({
				position: latlng,
				map: map,
				
				animation: google.maps.Animation.DROP,
				icon: iconBase + 'icon15.png',
				//icon: new google.maps.MarkerImage("http://gmap3.net/skin/gmap/magicshow.png"),
				title: jsArray[i].name
			});
			
			var infowindow = new google.maps.InfoWindow();
			
			var content = firstToUpperCase(jsArray[i].name);		
			
			markersArray.push(marker);
			google.maps.event.addListener(marker,'mouseover', (function(marker,content){ 				
					return function() {				   
					   infowindow.close();				  
					   infowindow.setContent(content);
					   infowindow.open(map,marker);
					  
					};
				})(marker,content)); 
			clearOverlays();
		}
    
	}   


$(document).ready(function(){


		<?php if(empty($pickup_time)){?>
					//$('div.slider_common').hide();
					<?php } ?>
					$('.get_taxi_model_top_bar').click(function(){
                    $('div.slider_common').slideToggle(1050);
                    $(this).find('.yello_mid').toggleClass('active');
                });
	
	//Function Used to bind the places
	function change_loc1(latitude,longitude)
	{
		var infowindow = new google.maps.InfoWindow();
		var marker = new google.maps.Marker();	
		
		clearOverlays();
		infowindow.close();
		marker.setVisible(true);		
		
		var miles= $('#miles').val(); 		
		
		map.setZoom(11);      // This will trigger a zoom_changed on the map
		map.setCenter(new google.maps.LatLng(latitude,longitude));
		map.setMapTypeId(google.maps.MapTypeId.ROADMAP);
		
		var no_passengers= $('#no_passengers').val(); 
		
		var bookingtime = $('#timepicker1').val(); 
		
		
		
		/*var citymap = {};
		citymap['place'] = {
		  center: new google.maps.LatLng(latitude, longitude),
		  population: 250
		};
		var cityCircle;

		 for (var city in citymap) {			
			var populationOptions = {
			  strokeColor: '#FF0000',
			  strokeOpacity: 0.8,
			  strokeWeight: 2,
			  fillColor: '#FF0000',
			  fillOpacity: 0.35,
			  map: map,
			  center: citymap[city].center,
			  radius: citymap[city].population 
			};
			cityCircle = new google.maps.Circle(populationOptions);
		  }*/
		
		if(latitude != null && longitude != null)
		{
			var passenger_id = $('#passenger_id').val();			
			var cur_loc = $("#current_location").val();
			var drop_loc = $("#drop_location").val();
			
			$('.loader').show();
			var dataS = "latitude="+latitude+"&longitude="+longitude+"&no_passengers="+no_passengers+"&miles="+miles+"&bookingtime="+bookingtime+"&passenger_id="+passenger_id+"&cur_loc="+cur_loc+"&drop_loc="+drop_loc;	

			var response;
			$('div.slider_common').slideToggle(1050);
            $(this).find('a').toggleClass('active');
			$.ajax
			({		
				type: "POST",
				url: "<?php echo URL_BASE;?>find/get_driver_location", 
				data: dataS, 
				cache: false, 
				dataType: 'json',
				success: function(response) 
				{ 	
					//alert(response);
					set_marker(response);	
					$('#driver_details').html('');		
					$('.loader').hide();
					if(response.length == 0)
					{
						 $('#driver_details').append('<div class="no_vehicle_found"><p><?php echo __("no_vehicle_found");?></p><br><div class="fl"><?php echo __("tips_broaden");?></div></div>');
					}
					else
					{
						render_data(response);								
					}		
				}, 
				error: function()
				{ 
					alert("Loading failed");
				} 
			});	
		}

    

		
		for(var i=0;i<jsArray.length;i++)
		{
			
			var iconBase = 'https://maps.google.com/mapfiles/kml/pal4/';
			var latlng=new google.maps.LatLng(jsArray[i].latitude,jsArray[i].longitude);
		   
			var marker = new google.maps.Marker({
				position: latlng,
				map: map,
				
				animation: google.maps.Animation.DROP,
				icon: iconBase + 'icon15.png',
				//icon: new google.maps.MarkerImage("http://gmap3.net/skin/gmap/magicshow.png"),
				title: jsArray[i].name
			});
			
			var infowindow = new google.maps.InfoWindow();
			
			var content = firstToUpperCase(jsArray[i].name);		
			
			markersArray.push(marker);
			google.maps.event.addListener(marker,'mouseover', (function(marker,content){ 				
					return function() {				   
					   infowindow.close();				  
					   infowindow.setContent(content);
					   infowindow.open(map,marker);
					  
					};
				})(marker,content)); 
			clearOverlays();
		}
    
	}   


	function submit_headerform()
	{

			var Timeobject = new Date()
			var hours = Timeobject.getHours()
			var minutes = Timeobject.getMinutes()
			var seconds  = Timeobject.getSeconds()	
			var currentTime = '<?php echo date('h:i:s a');?>';//hours+':'+(minutes<10?'0':'') + minutes+':'+seconds;
			//alert(currentTime);
			var lat = $('#lat').val();
			var lng = $('#lng').val();
		
			var cur_loc = $("#current_location").val();
			var drop_loc = $("#drop_location").val();
			var pickuptime = $("#timepicker1").val();
		
		
			var no_pass = $("#no_passengers").val();
			if(cur_loc==""){
				$("#current_location").css("border","1px solid red");
				return false;
			}else{
				if(cur_loc=='Left Click on the Map to get the Pick Up Location'){
					$("#current_location").css("border","1px solid red");
					return false;
				}else{
					$("#current_location").css("border","");
				}
			}
		
			if(drop_loc==""){			
				$("#drop_location").css("border","1px solid red");
				return false;
			}else{
				if(drop_loc=='Right Click on the Map to get the Drop Location'){
					$("#drop_location").css("border","1px solid red");
					return false;
				}else{
					$("#drop_location").css("border","");
				}
			}
		
			if(no_pass==""){
				$("#no_passengers").css("border","1px solid red");
				return false;
			}else{
				$("#no_passengers").css("border","");
			}

			if(lat != "" && lng != "" && no_pass != "")
			{
				if(pickuptime > currentTime )
				{
					if(lat == undefined && lng == undefined)
					{
					geocoder = new google.maps.Geocoder();
					geocoder.geocode( { 'address': cur_loc}, function(results, status) {
					   lat = results[0].geometry.location.lat();
					   lng = results[0].geometry.location.lng();
					   
					  change_loc1(lat,lng);	   
					});
					}
					else
					{
						change_loc1(lat,lng);
					}
					$("#pickuptime_error").html('');
				}
				else
				{
					$("#pickuptime_error").html('<?php echo __('pickuptime_error');?>');
				}
			}

	}





	<?php if((!empty($drop_location)) && (!empty($current_location)) && (!empty($no_passengers))){ ?>
	submit_headerform();
<?php } ?>		
});
	
	function set_marker(jsArray)
	{
		var cancel_rejected_driver_id= $('#cancel_rejected_driver_id').val();
		var cancel_current_location = $('#cancel_current_location').val();
		var cancel_drop_location = $('#cancel_drop_location').val();
		var current_location = $('#current_location').val();
		var drop_location = $('#drop_location').val();	
		var temp = new Array();
		temp = cancel_rejected_driver_id.split(",");
		
		for(var i=0;i<jsArray.length;i++)
		{
			
			
			if(cancel_rejected_driver_id != "")
			{
				
				if((cancel_current_location != current_location) || (cancel_drop_location != drop_location ))
					{
						temp=null;
						var iconBase = '<?php echo PUBLIC_IMGPATH.'/' ; ?>';
						var latlng=new google.maps.LatLng(jsArray[i].latitude,jsArray[i].longitude);
				   
						var marker = new google.maps.Marker({
							position: latlng,
							map: map,
							animation: google.maps.Animation.DROP,
							icon: iconBase + 'car.png'
							//icon: new google.maps.MarkerImage("http://gmap3.net/skin/gmap/magicshow.png"),
						});
						
						if(jsArray[i].taxi_image){
							
							var img = "<?php echo URL_BASE."/public/uploads/taxi_image/"; ?>"+jsArray[i].taxi_image;
							if(file_exists(img)){
								var img = "<?php echo URL_BASE."/public/uploads/taxi_image/"; ?>"+jsArray[i].taxi_image;
							}else{
								var img = "<?php echo URL_BASE."/public/uploads/taxi_image/no-image.jpg";?>";
							}
						}else{
							var img = "<?php echo URL_BASE."/public/uploads/taxi_image/no-image.jpg";?>";
						}
						
						//var content = firstToUpperCase(jsArray[i].name)+"<br><i>"+jsArray[i].phone+"</i>";
						var content = "<div class='taxt_response'><div class='taxi_response_img'><img src='"+img+"' class='img-polaroid' /></div><div class='taxi_respsone_content' style='padding-left:5px;'><div class='company_name'>"+firstToUpperCase(jsArray[i].company_name)+"</div><div class='taxi_number'><?php echo __('taxi_number');?>: "+jsArray[i].taxi_no+"</div><div class='taxi_price_seat'><div class='taxi_price'><?php echo __('taxi_per_km');?><br><?php echo CURRENCY ?> "+jsArray[i].taxi_fare+"</div><div class='taxi_seat'><?php echo __('taxi_seat');?><br>"+jsArray[i].taxi_capacity+"</div></div></div></div>";
						markersArray.push(marker);
						
						 var infowindow = new google.maps.InfoWindow(
						 { content:content
							});
						
						google.maps.event.addListener(marker,'mouseover', (function(marker,content){ 				
								return function() {				   
								   infowindow.close();			  
								   infowindow.setContent(content);
								   infowindow.open(map,marker);
								   //var l = $('.taxt_response').parent().parent().parent().siblings();
								   //alert(l.length);
									/*for (var i = 0; i < l.length; i++) {
										if($(l[i]).css('z-index') == 'auto') {
											$(l[i]).css('border-radius', '16px 16px 16px 16px');
											$(l[i]).css('border', '2px solid red');
										}
									}*/
								};

							})(marker,content));  
						}
				if(temp != null){
				if(inArray(jsArray[i].driver_id,temp))
				{		
					var iconBase = '<?php echo PUBLIC_IMGPATH.'/' ; ?>';
					var latlng=new google.maps.LatLng(jsArray[i].latitude,jsArray[i].longitude);
				   
					var marker = new google.maps.Marker({
						position: latlng,
						map: map,
						animation: google.maps.Animation.DROP,
						icon: iconBase + 'car.png'
						//icon: new google.maps.MarkerImage("http://gmap3.net/skin/gmap/magicshow.png"),
					});
					
					if(jsArray[i].taxi_image){
						
						var img = "<?php echo URL_BASE."/public/uploads/taxi_image/"; ?>"+jsArray[i].taxi_image;
						if(file_exists(img)){
							var img = "<?php echo URL_BASE."/public/uploads/taxi_image/"; ?>"+jsArray[i].taxi_image;
						}else{
							var img = "<?php echo URL_BASE."/public/uploads/taxi_image/no-image.jpg";?>";
						}
					}else{
						var img = "<?php echo URL_BASE."/public/uploads/taxi_image/no-image.jpg";?>";
					}
					
					//var content = firstToUpperCase(jsArray[i].name)+"<br><i>"+jsArray[i].phone+"</i>";
					var content = "<div class='taxt_response'><div class='taxi_response_img'><img src='"+img+"' class='img-polaroid' /></div><div class='taxi_respsone_content' style='padding-left:5px;'><div class='company_name'>"+firstToUpperCase(jsArray[i].company_name)+"</div><div class='taxi_number'><?php echo __('taxi_number');?>: "+jsArray[i].taxi_no+"</div><div class='taxi_price_seat'><div class='taxi_price'><?php echo __('taxi_per_km');?><br><?php echo CURRENCY ?> "+jsArray[i].taxi_fare+"</div><div class='taxi_seat'><?php echo __('taxi_seat');?><br>"+jsArray[i].taxi_capacity+"</div></div></div></div>";
					markersArray.push(marker);
					
					 var infowindow = new google.maps.InfoWindow(
					 { content:content
						});
					
					google.maps.event.addListener(marker,'mouseover', (function(marker,content){ 				
							return function() {				   
							   infowindow.close();			  
							   infowindow.setContent(content);
							   infowindow.open(map,marker);
							   //var l = $('.taxt_response').parent().parent().parent().siblings();
							   //alert(l.length);
								/*for (var i = 0; i < l.length; i++) {
									if($(l[i]).css('z-index') == 'auto') {
										$(l[i]).css('border-radius', '16px 16px 16px 16px');
										$(l[i]).css('border', '2px solid red');
									}
								}*/
							};

						})(marker,content));  
			} }// In Driver condition End
		} 
		else
		{
			var iconBase = '<?php echo PUBLIC_IMGPATH.'/' ; ?>';
			var latlng=new google.maps.LatLng(jsArray[i].latitude,jsArray[i].longitude);
				   
			var marker = new google.maps.Marker({
					position: latlng,
					map: map,
					animation: google.maps.Animation.DROP,
					icon: iconBase + 'car.png'
					//icon: new google.maps.MarkerImage("http://gmap3.net/skin/gmap/magicshow.png"),
				});
					
			if(jsArray[i].taxi_image){				
			var img = "<?php echo URL_BASE."/public/uploads/taxi_image/"; ?>"+jsArray[i].taxi_image;
			if(file_exists(img)){
			var img = "<?php echo URL_BASE."/public/uploads/taxi_image/"; ?>"+jsArray[i].taxi_image;
				}else{
				var img = "<?php echo URL_BASE."/public/uploads/taxi_image/no-image.jpg";?>";
				}
				}else{
				var img = "<?php echo URL_BASE."/public/uploads/taxi_image/no-image.jpg";?>";
				}
					
			//var content = firstToUpperCase(jsArray[i].name)+"<br><i>"+jsArray[i].phone+"</i>";
			var content = "<div class='taxt_response'><div class='taxi_response_img'><img src='"+img+"' class='img-polaroid' /></div><div class='taxi_respsone_content' style='padding-left:5px;'><div class='company_name'>"+firstToUpperCase(jsArray[i].company_name)+"</div><div class='taxi_number'><?php echo __('taxi_number');?>: "+jsArray[i].taxi_no+"</div><div class='taxi_price_seat'><div class='taxi_price'><?php echo __('taxi_per_km');?><br><?php echo CURRENCY ?> "+jsArray[i].taxi_fare+"</div><div class='taxi_seat'><?php echo __('taxi_seat');?><br>"+jsArray[i].taxi_capacity+"</div></div></div></div>";
			markersArray.push(marker);
					
			var infowindow = new google.maps.InfoWindow(
			 { content:content
				});
					
			google.maps.event.addListener(marker,'mouseover', (function(marker,content){ 				
					return function() {				   
			   infowindow.close();			  
			   infowindow.setContent(content);
			   infowindow.open(map,marker);
				   //var l = $('.taxt_response').parent().parent().parent().siblings();
				   //alert(l.length);
					/*for (var i = 0; i < l.length; i++) {
					if($(l[i]).css('z-index') == 'auto') {
					$(l[i]).css('border-radius', '16px 16px 16px 16px');
					$(l[i]).css('border', '2px solid red');
					}
					}*/
				};

				})(marker,content));  
			}
		} //For loop End
		
		
	}	
	
	function clearOverlays() 
	{
	  for (var i = 0; i < markersArray.length; i++ ) {
		markersArray[i].setMap(null);
	  }
	  markersArray = [];
	}  
	
	function firstToUpperCase( str ) {
		return str.substr(0, 1).toUpperCase() + str.substr(1);
	}
	function replace( str ) {
		return str.replace(/\s+/g, '');
	}

	function file_exists (url) {
	// Returns true if filename exists
	 
	var req = this.window.ActiveXObject ? new ActiveXObject("Microsoft.XMLHTTP") : new XMLHttpRequest();
	if (!req) {throw new Error('XMLHttpRequest not supported');}
	// HEAD Results are usually shorter (faster) than GET
	req.open('HEAD', url, false);
	req.send(null);
	if (req.status == 200){
	return 1;
	}
	return 0;
	}
	
	/*Function used to render the data in the DIV #driver_details*/
	function render_data(response)
	{
		var cancel_rejected_driver_id= $('#cancel_rejected_driver_id').val();
		var cancel_current_location = $('#cancel_current_location').val();
		var cancel_drop_location = $('#cancel_drop_location').val();
		var current_location = $('#current_location').val();
		var drop_location = $('#drop_location').val();		
		
		var temp = new Array();
		temp = cancel_rejected_driver_id.split(",");
		//alert(temp);
		$.each(response, function(key, val) {	
			var name_driver = "'"+val.name+"'";
			//alert(name_driver);
			var passenger_id= $('#passenger_id').val();
			var driver_name = firstToUpperCase(val.name);
			if(val.taxi_image){
				var img = "<?php echo URL_BASE."public/uploads/taxi_image/"; ?>"+val.taxi_image;

				if(file_exists(img)){
					var img = "<?php echo URL_BASE."public/uploads/taxi_image/"; ?>"+val.taxi_image;
				}else{
					var img = "<?php echo URL_BASE."public/uploads/taxi_image/no-image.jpg";?>";
				}
			}else{
				var img = "<?php echo URL_BASE."public/uploads/taxi_image/no-image.jpg";?>";
			}
			
			if(passenger_id == "")
			{
				var isbooking='1';
				$('#driver_details').append('<div class="taxt_response"><div class="taxi_response_img"><a class="thumbnail " href=javascript:get_driver_details("'+replace(driver_name)+'",'+val.driver_id+') ><img src="'+img+'" style="width:inherit; max-width:100%;height:100px;" /></a></div><div class="taxi_respsone_content"><div class="company_name">'+firstToUpperCase(val.company_name)+'</div><div class="taxi_number"><?php echo __('taxi_number');?>: '+val.taxi_no+'</div><div class="taxi_price_seat"><div class="taxi_price"><?php echo __('taxi_per_km');?><br><?php echo CURRENCY ?> '+val.taxi_fare+'</div><div class="taxi_seat"><?php echo __('taxi_seat');?><br>'+val.taxi_capacity+'</div></div><div class="book_btn"><div class="taxi_book_now"><input type="button" class="btn btn-warning" id="driver_'+val.driver_id+'" value="Book Now" title="Book now" onclick="showpopup('+val.driver_id+','+isbooking+','+name_driver+','+val.taxi_id+')"/></div><div class="taxi_view_detail"><a href=javascript:get_driver_details("'+replace(driver_name)+'",'+val.driver_id+') ><?php echo __('features');?></a></div></div></div></div>');
			}
			else
			{
				
				if(cancel_rejected_driver_id != "")
				{
					if((cancel_current_location != current_location) || (cancel_drop_location != drop_location ))
					{
						temp = null;
						$('#driver_details').append('<div class="taxt_response" ><div class="taxi_response_img"><a class="thumbnail" href=javascript:get_driver_details("'+replace(driver_name)+'",'+val.driver_id+') ><img src="'+img+'" style="width:inherit;max-width:100%;height:100px;" /></a></div><div class="taxi_respsone_content"><div class="company_name">'+firstToUpperCase(val.company_name)+'</div><div class="taxi_number"><?php echo __('taxi_number');?>: '+val.taxi_no+'</div><div class="taxi_price_seat"><div class="taxi_price"><?php echo __('taxi_per_km');?><br><?php echo CURRENCY ?> '+val.taxi_fare+'</div><div class="taxi_seat"><?php echo __('taxi_seat');?><br>'+val.taxi_capacity+'</div></div><div class="book_btn"><div class="taxi_book_now"><input type="button" class="btn btn-warning" id="driver_'+val.driver_id+'" value="Book Now" title="Book now" onclick="booknow('+val.driver_id+','+name_driver+','+val.taxi_id+')"/></div><div class="taxi_view_detail"><a href=javascript:get_driver_details("'+replace(driver_name)+'",'+val.driver_id+') ><?php echo __('features');?></a></div></div></div></div>');
					}
					if(temp != null)
					{
						if(inArray(val.driver_id,temp))
						{
							
							$('#driver_details').append('<div class="taxt_response" ><div class="taxi_response_img"><a class="thumbnail" href=javascript:get_driver_details("'+replace(driver_name)+'",'+val.driver_id+') ><img src="'+img+'" style="width:inherit; max-width:100%;height:100px;" /></a></div><div class="taxi_respsone_content"><div class="company_name">'+firstToUpperCase(val.company_name)+'</div><div class="taxi_number"><?php echo __('taxi_number');?>: '+val.taxi_no+'</div><div class="taxi_price_seat"><div class="taxi_price"><?php echo __('taxi_per_km');?><br><?php echo CURRENCY ?> '+val.taxi_fare+'</div><div class="taxi_seat"><?php echo __('taxi_seat');?><br>'+val.taxi_capacity+'</div></div><div class="book_btn"><div class="taxi_book_now"><input type="button" class="btn btn-warning" id="driver_'+val.driver_id+'" value="Book Now" title="Book now" onclick="booknow('+val.driver_id+','+name_driver+','+val.taxi_id+')"/></div><div class="taxi_view_detail"><a href=javascript:get_driver_details("'+replace(driver_name)+'",'+val.driver_id+') ><?php echo __('features');?></a></div></div></div></div>');
						}
						
					}
				}
				else
				{
					$('#driver_details').append('<div class="taxt_response" ><div class="taxi_response_img"><a class="thumbnail" href=javascript:get_driver_details("'+replace(driver_name)+'",'+val.driver_id+') ><img src="'+img+'" style="width:inherit; max-width:100%;height:100px;" /></a></div><div class="taxi_respsone_content"><div class="company_name">'+firstToUpperCase(val.company_name)+'</div><div class="taxi_number"><?php echo __('taxi_number');?>: '+val.taxi_no+'</div><div class="taxi_price_seat"><div class="taxi_price"><?php echo __('taxi_per_km');?><br><?php echo CURRENCY ?> '+val.taxi_fare+'</div><div class="taxi_seat"><?php echo __('taxi_seat');?><br>'+val.taxi_capacity+'</div></div><div class="book_btn"><div class="taxi_book_now"><input type="button" class="btn btn-warning" id="driver_'+val.driver_id+'" value="Book Now" title="Book now" onclick="booknow('+val.driver_id+','+name_driver+','+val.taxi_id+')"/></div><div class="taxi_view_detail"><a href=javascript:get_driver_details("'+replace(driver_name)+'",'+val.driver_id+') ><?php echo __('features');?></a></div></div></div></div>');
				}
			}
		});	
		
		if( $('#driver_details').is(':empty') ) 
		{
			$('#driver_details').append('<div class="no_vehicle_found"><p><?php echo __("no_vehicle_found");?></p><br><p class="tip_around"><?php echo __("tips_broaden");?></p></div>');
		}
		
	}
	
	function set_hidden(lat,lng)
	{		
		$('#lat').val(lat);
		$('#lng').val(lng);
	}	

}

function get_driver_details(driver_name,id)
{
	var dataS = "driver_id="+id;			
	var response;
	$.ajax
	({ 			
		type: "POST",
		url: "<?php echo URL_BASE;?>find/get_driver_details", 
		data: dataS, 
		cache: false,		
		success: function(response) 
		{ 						
			$('#taxi_detail').html('');				
			$('#taxi_detail').append("<a class='pull-right' href=javascript:close();><i class='icon-remove'></i></a><br/>");		
			$('#taxi_detail').append("<h3>"+driver_name + "</h3><br/>");		
			$('#taxi_detail').append(response);		
			 var hidden = $('#taxi_detail');
			if (hidden.hasClass('visible')){
				hidden.animate({"left":"-1000px"}, "slow").removeClass('visible');
			} else {
				hidden.animate({"left":"0px"}, "slow").addClass('visible');
			}	
									
		}, 
		error: function()
		{ 
			alert("Loading failed");
		} 
	});	
}

function close()
{
	var hidden = $('#taxi_detail');
	if (hidden.hasClass('visible')){
		hidden.animate({"left":"-1000px"}, "slow").removeClass('visible');
	} else {
		hidden.animate({"left":"0px"}, "slow").addClass('visible');
	}			
}

$(document).ready(function(){
	$("#current_location").blur(function(){
		var cur_loc = $("#current_location").val();
		if(cur_loc==""){
			$("#current_location").css("border","1px solid red");
		}else{
			$("#current_location").css("border","");
		}
	});
	$("#drop_location").blur(function(){
		var drop_loc = $("#drop_location").val();
		if(drop_loc==""){
			$("#drop_location").css("border","1px solid red");
		}else{
			$("#drop_location").css("border","");
		}
	});
	$("#no_passengers").blur(function(){
		var no_pass = $("#no_passengers").val();
		if(no_pass==""){
			$("#no_passengers").css("border","1px solid red");
		}else{
			$("#no_passengers").css("border","");
		}
	});

});


google.maps.event.addDomListener(window, 'load', initialize);

/*** Check value Not in Array for find except drivers **/
function inArray(needle, haystack) {
    var length = haystack.length;
    for(var i = 0; i < length; i++) {
        if(haystack[i] == needle) return false;
    }
    return true;
}
/*****************/
function SubmitForm()
{
  document.forms['place_search'].submit() ;
}


</script>


