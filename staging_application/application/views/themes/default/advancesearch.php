<?php defined('SYSPATH') OR die('No direct access allowed.');?>
<?php 
//$ip=$_SERVER['SERVER_ADDR'];
//echo $api_link = 'http://api.ipinfodb.com/v3/ip-city/?key='.IPINFOAPI_KEY.'&ip='.$ip.'&format=json';
/******** Current Time **************/
$current_time = convert_timezone('now',TIMEZONE); 
$currentDate = strtotime($current_time);
$futureDate = $currentDate+(60*5);
$nowtime = date("h:i A", $futureDate);
/************************************/
$field_count = count($additional_fields);
$json_data = json_decode($data_address);	
if($json_data->latitude != 0){ $latitude = $json_data->latitude;}else{ $latitude = LOCATION_LATI;} ; 
if($json_data->longitude != 0){ $longitude = $json_data->longitude;}else{ $longitude = LOCATION_LONG;}

?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=<?php echo GOOGLE_MAP_API_KEY; ?>&sensor=false&libraries=places"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/easyslider/bjqs-1.3.min.js"></script>
<link href="<?php echo URL_BASE;?>public/js/easyslider/bjqs.css" rel="stylesheet" type="text/css" media="screen" />	
<link href="<?php echo URL_BASE;?>public/js/easyslider/demo.css" rel="stylesheet" type="text/css" media="screen" />

<?php

if(COMPANY_CID == 0)
	{
		$company_phone_no='000-000-000';
	}
	else
	{
		$company_phone_no=COMPANY_CONTACT_PHONE_NUMBER;
	}

if(isset($_SESSION['search_city'])){
	$address = $_SESSION['search_city'];
	if($address !='')
	{
	$prepAddr = str_replace(' ','+',$address);
	
	$geocode = file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');

	$json_data = json_decode($geocode);
		if(!empty($json_data->results))
		{		
		$latitude = $json_data->results[0]->geometry->location->lat;
		$longitude = $json_data->results[0]->geometry->location->lng;
		}
	}

}
else if($_POST){


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
?>
<script>$('#gettaxi_change').html('<a  title="Get Taxi" href="<?php echo URL_BASE; ?>advance-search.html" >Get Taxi</a>');</script>
<?php
}

if(isset($_SESSION['search_country']))
{
	$prepAddr = str_replace(' ','+',$_SESSION['search_city']);
	$geocode = file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
	$json_data = json_decode($geocode);
	if(!empty($json_data->results))
	{	
	$latitude = $json_data->results[0]->geometry->location->lat;
	$longitude = $json_data->results[0]->geometry->location->lng;
	}
}
?>
	
 <div class="slider_common">
            <div class="slider_inner">
                <div class="slider_inner_common">
	 	<div id="panel">
	 	<?php if(isset($content[0]['content'])) { echo $content[0]['content']; } ?>
		<form name="form_field" id="form_field" class="form">
		<div class="dl-horizontal">
			<div><label for="current_location"><?php echo __('Current_Location'); ?></label><input id="current_location" type="text" class="input-xxlarge" value="<?php echo isset($current_location)?$current_location:'';?>" placeholder="Left Click on the Map to get the Pick Up Location" ></div>
			<div><label for="drop_location"><?php echo __('Drop_Location'); ?></label><input id="drop_location" type="text" class="input-xxlarge" value="<?php echo isset($drop_location)?$drop_location:'';?>" placeholder="Right Click on the Map to get the Drop Up Location" /></div>
				<div class="dl-horizontal-left">
					<div style="width: 100%;clear:both !important"><label for="taxi_capacity"><?php echo __('No_Passengers'); ?></label>
					<input id="no_passengers" type="number" min="1" max="99" maxlength="2" title="<?php echo __('no_passengers'); ?>" value="<?php echo isset($no_passengers)?$no_passengers:'';?>">
					<!-- <input type="hidden" name="miles" id="miles" value="100">-->
					</div> 
	
					<div style="width: 100%;clear:both !important;"><label for="taxi_capacity"><?php echo __('no_miles'); ?></label>
					<select name="miles" id="miles" title="<?php echo __('no_miles'); ?>">
					<?php 						
						foreach($getMiles as $key)
						{ ?>
							<option value="<?php echo $key['mile_name']; ?>" <?php  if($miles==$key['mile_name']) { echo 'selected'; } ?> ><?php echo $key['mile_name']." ".__('miles'); ?></option>
						<?php }
					?>		
					</select></div>
				


					<?php /*<div style="width: 100%;clear:both !important"><label for="pick_up_time"><?php echo __('pick_up_time');?></label><div class="input-append bootstrap-timepicker"><input id="timepicker1" type="text" title="<?php echo __('pickuptime_error');?>" class="input-small" value="<?php echo isset($pickup_time)?$pickup_time:'';?>"><span class="add-on"><i class="icon-time"></i></span></div><br><span id="pickuptime_error" style="color:red"></span></div>  */ ?>
					<div style="width: 100%;clear:both !important;margin-bottom:10px;"><label for="pick_up_time"><?php echo __('pick_up_time');?></label>
						<input type="radio" title="<?php echo __('now'); ?>" name="ptime" id="ptime" value="Now" checked onclick="show_hidetime(this.value)" />&nbsp;&nbsp;<?php echo __('now'); ?>
						<input type="radio" title="<?php echo __('after'); ?>" name="ptime" id="ptime" value="After" onclick="show_hidetime(this.value)"/>&nbsp;&nbsp;<?php echo __('after'); ?>
						<br>
						<!-- <div id="nowtime" class="input-append bootstrap-timepicker" style="visibility:none"> 							
							<input type="text" id="timepicker1" class="input-small" value="<?php //echo $nowtime;?>" readonly>
							<span class="add-on"><i class="icon-time"></i></span>
						</div> -->
						
						 <div id="aftertime" style="display:none" class="input-append bootstrap-timepicker"> 
							<input type="text" id="timepicker1" class="input-small timepicker" value="<?php echo $nowtime;?>" ><span class="add-on"><i class="icon-time"></i></span>
						</div>
						
					<br><span id="pickuptime_error" style="color:red"></span></div>
					
				</div>
				<div class="dl-horizontal-left">
					<input type="hidden" name="taxi_type" id="taxi_type" value="1">
					<!--<div><label><?php //echo __('taxi_type'); ?></label>
					<select name="taxi_type" id="taxi_type" >
						<option value=""><?php //echo __('select_label'); ?></option>
						<?php //foreach($motor_details as $listings) { ?>
						<option value="<?php //echo $listings['motor_id']; ?>" ><?php //echo $listings['motor_name']; ?></option>
						<?php //} ?>
					</select></div> -->
					<div id="taxi_model"><label><?php echo __('taxi_model'); ?></label>
					<select name="taxi_model" id="taxi_model" title="<?php echo __('select_the_taximodel'); ?>">
						<option value=""><?php echo __('select_label'); ?></option>
						<?php foreach($model_details as $listings) { ?>
						<option value="<?php echo $listings['model_id']; ?>" ><?php echo $listings['model_name']; ?></option>
						<?php } ?>
					</select></div>
					<!--<div><label><?php //echo str_replace('%currency%',CURRENCY,__('taxi_fare_km')); ?></label><input type="text" title="<?php //echo __('enter_taxi_fare_km'); ?>" id="taxi_fare_km" name="taxi_fare_km" value="" maxlength="4" /></div>-->
					<!--<input type="hidden" id="taxi_fare_km" name="taxi_fare_km" value="" maxlength="4" />
					<input type="hidden" id="taxi_min_fare" name="taxi_min_fare" value="" maxlength="4" />-->
					<input type="hidden" name="pass_logid" id="pass_logid" value="<?php if($pass_log_id !='') { echo $pass_log_id; }?>">
					<!--<div><label><?php //echo str_replace('%currency%',CURRENCY,__('taxi_min_fare')); ?></label><input type="text" title="<?php //echo __('enter_taxi_min_fare'); ?>" id="taxi_min_fare" name="taxi_min_fare" value="" maxlength="4" /></div> -->
					<input type="hidden" id="taxi_min_fare" name="taxi_min_fare" value="" maxlength="4" />
					<div><label><?php echo __('maximum_luggage'); ?></label><input type="text" title="<?php echo __('maximum_luggage'); ?>" id="maximum_luggage" name="maximum_luggage" value="" maxlength="4"/></div>
				</div>
			</div>
					
			<div class="dl-horizontal">
				<?
				if($field_count > 0)
				{	
					$j = 0;
					for($i=0; $i<$field_count; $i++)
					{ 
						$j = $i%2;
						if($j==0)
						{
							$class = "class='dl-horizontal-left'";
						}else{
							$class = "class='dl-horizontal-right'";
						}
						?>
						<div <?php echo $class; ?>>
							<div>
								<label><?php echo $additional_fields[$i]['field_labelname']; ?></label>
								<?php
								$field_name = $additional_fields[$i]['field_name'];
								if($additional_fields[$i]['field_type'] == 'Textbox'){
									echo "<input type='text' title='".__('enter_the').' '.$field_name."' id='".$field_name."' name='".$field_name."' value='' maxlength='20' class='vcall' />";
								}elseif($additional_fields[$i]['field_type'] == 'Checkbox'){
									$field_chkvalue = ''; 
									if(isset($postvalue) && array_key_exists($field_name,$postvalue)){ $field_chkvalue =  $postvalue[$field_name]; }
									$field_value = explode(',',$additional_fields[$i]['field_value']);
									foreach($field_value as $key => $value)
									{ 
									?>
								<input type="checkbox" title="<?php echo __('select_the').' '.$field_name; ?>"  name="<?php echo $field_name; ?>" id="<?php echo $value; ?>" value="<?php echo $value; ?>" <?php if($field_chkvalue == $value) { echo 'checked'; } ?> class="vcall" />&nbsp;&nbsp;<?php echo $value; ?>
									<?php  
									}
								}elseif($additional_fields[$i]['field_type'] == 'Radio'){
									$field_radvalue = ''; 
									if(isset($postvalue) && array_key_exists($field_name,$postvalue)){ $field_radvalue =  $postvalue[$field_name]; }
								 
									$field_value = explode(',',$additional_fields[$i]['field_value']);
									?>
									<?php
									foreach($field_value as $key => $value)
									{ 
									?>
									&nbsp;<input type="radio" title="<?php echo __('select_the').' '.$field_name; ?>" name="<?php echo $field_name; ?>"  id="<?php echo $field_name; ?>" value="<?php echo $value; ?>" <?php if($field_radvalue == $value) { echo 'checked'; } ?>  class="vcall" />&nbsp;&nbsp;<?php echo $value; ?>	                 	
									<?php 
									}
								}elseif($additional_fields[$i]['field_type'] == 'Select'){
									//
									 $field_selvalue =''; 
									 if(isset($postvalue) && array_key_exists($field_name,$postvalue)){ $field_selvalue =  $postvalue[$field_name]; }
										$field_value = explode(',',$additional_fields[$i]['field_value']);
										?>
										<select name="<?php echo $field_name; ?>" title="<?php echo __('select_the').' '.$additional_fields[$i]['field_labelname']; ?>" id="<?php echo $field_name; ?>" class="vcall">
										<option value=""><?php echo __('select_label'); ?></option>
										<?php
										foreach($field_value as $key => $value)
										{ 
										?>
										<option value="<?php echo $value; ?>" <?php  if($field_selvalue == $value) { echo 'selected=selected'; } ?> ><?php echo $value; ?></option>
										<?php 
										}
										?>
										</select>
									<?php 	
									//
								}
								?>
							</div>
						</div>
						<?php
					}
				}
				?>
		</div>
		<input type="hidden" name="cancel_rejected_driver_id" id="cancel_rejected_driver_id" value="<?php echo $cancel_rejected_driver_id;?>">
		<input type="hidden" name="passenger_id" id="passenger_id" value="<?php echo $usrid;?>">
		</form>
	 <dl class="dl-horizontal">
      <dt>
      <div id="hidden_inputs"></div>  </dt> 
	<input type="hidden" name="lat" id="lat" value="<?php echo isset($lat)?$lat:'';?>">
	<input type="hidden" name="lng" id="lng" value="<?php echo isset($lng)?$lng:'';?>">
      <dd><button id="search_btn" class="btn ml10" title="<?php echo __('button_search'); ?>"><?php echo __('button_search'); ?></button>   </dd>   
	 </dl> 
 					 </div>
                </div>
            </div>
        </div>

 <div class="banner_part" style="margin-top:0;height:auto"> 

 <input id="cancel_current_location" name="cancel_current_location" type="hidden" value="<?php echo isset($post_values['current_location'])?$post_values['current_location']:'';?>" >
 <input id="cancel_drop_location" name="cancel_drop_location" type="hidden" value="<?php echo isset($post_values['drop_location'])?$post_values['drop_location']:'';?>" >
 <!--Start : Driver Details in Tabular Column -->
 
	
 <div id="taxi_detail"></div>		
 <?php if(SHOW_MAP !=2) { ?>
  <div class="left_content_taxi1" style="margin:0;background:#EEEEEE;">
	
	<div class="left_content_taxi_mid1">
		<div class="left_apps">	    
			<div class="loader"><img src="<?php echo URL_BASE .'public/img/loader.gif'?>"></div>
		 	<div id="driver_details">
				<div class="left_apps_inner_comm">
					<div class="left_apps_inner">
						<span>&nbsp;</span>
					</div>
					<p style="margin:0;color:#000;"><?php echo __('greastest_mobile_app');?></p>
				</div>  			                                   
			</div>			
		</div>
	</div>
 </div>
<?php } 
else { ?>
 <div class="left_content_taxi2" style="margin:0;background:#EEEEEE;">
	
	<div class="left_content_taxi_mid1">
		<div class="left_apps">	    
			<div class="loader"><img src="<?php echo URL_BASE .'public/img/loader.gif'?>"></div>
		 	<div id="driver_details">
				<div class="left_apps_inner_comm2">
					<div class="left_apps_inner">
						<span>&nbsp;</span>
					</div>
					<p style="margin:0;color:#000;"><?php echo __('greastest_mobile_app');?></p>
				</div>  			                                   
			</div>			
		</div>
	</div>
 </div>
<?php } ?>
 <!--End : Driver Details in Tabular Column -->
 <!-- Book Now Section 

 <!-- Book Now End -->

 <div id="map-canvas" style="height:500px;"></div>

   </div>
<?php $current_time = convert_timezone('now',TIMEZONE); 
      $hrs_time =date('h:i A', strtotime($current_time));
?> 


<script>			
		$(document).ready(function(){
				//	$('div.slider_common').hide();
					$('.get_taxi_model_top_bar').click(function(){
                    $('div.slider_common').slideToggle(1050);
                    $(this).find('a').toggleClass('active');
                });
            });

var infowindow = new google.maps.InfoWindow();
var marker;
var geocoder;


function initialize() {
	
	geocoder = new google.maps.Geocoder();
	
	var jsArray = <?php echo json_encode($driver_details); ?>; 
	var markersArray = [];
	var markers = [];
	
	var miles= $('#miles').val();		
	
    var myLatlng = new google.maps.LatLng('<?php echo $latitude; ?>', '<?php echo $longitude; ?>');
    var myOptions = {
        zoom: 13,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    
    var show_map = "<?php echo SHOW_MAP; ?>";
    if(show_map !=2)
	{
      var map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);
    }
        
    var input = /** @type {HTMLInputElement} */(document.getElementById('current_location'));
    var input2 = /** @type {HTMLInputElement} */(document.getElementById('drop_location'));
    
	var autocomplete = new google.maps.places.Autocomplete(input);
	var autocomplete1 = new google.maps.places.Autocomplete(input2);
	
	google.maps.event.addListener(map, 'click', function(event) {
    addMarker(event.latLng);
  });
  
// Instantiate a directions service.
  directionsService = new google.maps.DirectionsService();

  // Create a renderer for directions and bind it to the map.
  var rendererOptions = {
	map: map
  }
  directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions)
  
  // Instantiate an info window to hold step text.
  stepDisplay = new google.maps.InfoWindow();
	
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
	
	
	if(show_map !=2)
	{
	google.maps.event.addListener(map, "click", function(event) 
	{
		var lat = event.latLng.lat();
		var lng = event.latLng.lng();	
		$('#current_location').blur();		
		codeLatLng(lat,lng,'current_location');	
		set_hidden(lat,lng);
			
	});
	google.maps.event.addListener(map, "rightclick", function(event) 
	{
		var lat = event.latLng.lat();
		var lng = event.latLng.lng();	 
		$('#drop_location').blur();
		codeLatLng(lat,lng,'drop_location');
		clearMarkers();		
			
	});
	}
	
	$('#search_btn').click(function(){
		
		//var currentTime = '<?php echo date('h:i:s A');?>';//hours+':'+(minutes<10?'0':'') + minutes+':'+seconds;
		var currentTime = '<?php echo $hrs_time; ?>';
		/*var amPM ='';
	       	var todayDate = new Date();
	        var hours = todayDate.getHours();
		var mins = todayDate.getMinutes();
		var secs = todayDate.getSeconds();	
	 	
		amPM = hours > 11 ? "PM" : "AM";
		hours = hours % 12;
		hours = hours ? hours : 12; // zero = 12				
		mins = mins > 9 ? mins : "0" + mins;
		secs = secs > 9 ? secs : "0" + secs;
		hours = hours > 9 ? hours: "0" + hours;
	        var currentTime = hours + ":" + mins + ":" + secs + " " + amPM;
		*/
		
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
		
		if(drop_loc == cur_loc)
		{
			$("#drop_location").css("border","1px solid red");
			alert('Pickup Location and Drop Location should not be the same Address!!');
			return false;
		}
		else
		{
			$("#drop_location").css("border","");
		}
		
		/*if(no_pass==""){
			$("#no_passengers").css("border","1px solid red");
			return false;
		}else if(no_pass.length>2)
		{
			$("#no_passengers").css("border","1px solid red");
			return false;			
		}
		else{
			$("#no_passengers").css("border","");
		}*/
		//alert(cur_loc);
		/*if(lat != "" && lng != "" && no_pass != "")
		{*/

	
		var s = pickuptime;
		var e = currentTime;

		var base = "Aug 09, 1995 ";

		var pickuptime_d = Date.parse(base+s.substr(0, 5)+s.substr(5));
		var currentTime_d = Date.parse(base+e.substr(0, 5)+e.substr(5));
		

			/*if(pickuptime_d > currentTime_d )
			

			//if(pickuptime > currentTime )
			{*/
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
				//$("#pickuptime_error").html('');
			/*}
			else
			{
				$("#pickuptime_error").html('<?php echo __('pickuptime_error');?>');
			}*/
		/*}*/
	});

	/*$('.vcall').on('click', function() {
		var lat = $('#lat').val();
		var lng = $('#lng').val();
		if(lat != null && lng != null)
			change_loc(lat,lng);
	});*/

	//var attempts = 0;
	function codeLatLng(lat,lng,id) 
	{	  
		  var latlng = new google.maps.LatLng(lat, lng);
		  geocoder.geocode({'latLng': latlng}, function(results, status) {
			  console.log(results);
			if (status == google.maps.GeocoderStatus.OK) {
				//alert(google.maps.GeocoderStatus);
			  if (results[1]) 
			  {		  
				 $('#'+id).val(results[1].formatted_address); 
				 pickup_drop_location_marker(results[1].formatted_address,id,latlng)
							
			  } else {
				alert('No results found');
			  }
			  attempts = 0;
			}
			else if (status === google.maps.GeocoderStatus.OVER_QUERY_LIMIT) {
				  setTimeout(function() {
						codeLatLng(lat,lng,id);
				  }, 200); 
			}
			 else {
			  alert('Geocoder failed due to: ' + status);
			  attempts = 0;
			}
		  });
		  
	}
		function pickup_drop_location_marker(place,id,latlng)
	{

		var iconBase = '<?php echo PUBLIC_IMGPATH.'/' ; ?>';
		if(id=='drop_location')
		{
			end = latlng;
		}
		if(id=='current_location')
		{
			start = latlng;
		}
		  // First, remove any existing markers from the map.
  for (var i = 0; i < markerArray.length; i++) {
    markerArray[i].setMap(null);
  }
  markerArray = [];
  var request = {
      origin: start,
      destination: end,
      travelMode: google.maps.TravelMode.DRIVING
  };
clearMarkers();
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      //var warnings = document.getElementById('warnings_panel');
      //warnings.innerHTML = '<b>' + response.routes[0].warnings + '</b>';
      directionsDisplay.setDirections(response);
      showSteps(response);
    }
  });
			 
		
	}
	
function addMarker(location) {
clearMarkers();
  var marker = new google.maps.Marker({
    position: location,
    map: map
  });
  markers.push(marker);
}

// Sets the map on all markers in the array.
function setAllMap(map) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
}

// Removes the markers from the map, but keeps them in the array.
function clearMarkers() {
  setAllMap(null);
}

// Shows any markers currently in the array.
function showMarkers() {
  setAllMap(map);
}

// Deletes all markers in the array by removing references to them.
function deleteMarkers() {
  clearMarkers();
  markers = [];
}
	
	//Function Used to bind the places
	function change_loc(latitude,longitude)
	{
		var infowindow = new google.maps.InfoWindow();
		var marker = new google.maps.Marker();	
		
		var cur_loc = $("#current_location").val();
		var drop_loc = $("#drop_location").val();
		var taxi_min_fare = $("#taxi_min_fare").val(); 
		var passenger_id = $('#passenger_id').val();
		
		if(passenger_id == "")
		{
			showpopup_signin('','0');
			exit;
		}
		
		clearOverlays();
		infowindow.close();
		marker.setVisible(true);		
		
		var miles = $('#miles').val(); 		
		var taxi_type = $('#taxi_type').val(); 		
		var taxi_model = $('#taxi_model').val(); 		
		var taxi_min_fare = $('#taxi_fare_km').val(); 		
		var values = $('#form_field').serialize();
		//alert(values);
		var show_map = "<?php echo SHOW_MAP; ?>";
		if(show_map !=2)
		{
			map.setZoom(12);      // This will trigger a zoom_changed on the map
			map.setCenter(new google.maps.LatLng(latitude,longitude));
			map.setMapTypeId(google.maps.MapTypeId.ROADMAP);
		}
		
		var no_passengers = $('#no_passengers').val(); 
		
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
			$('.loader').show();
			var dataS = "latitude="+latitude+"&longitude="+longitude+"&no_passengers="+no_passengers+"&miles="+miles+"&bookingtime="+bookingtime+"&passenger_id="+passenger_id+"&cur_loc="+cur_loc+"&drop_loc="+drop_loc+"&taxi_min_fare="+taxi_min_fare;			
			/*if(taxi_type){
				dataS = dataS+"&taxi_type="+taxi_type;
			}
			if(taxi_model){
				dataS = dataS+"&taxi_model="+taxi_model;
			}
			
			if(taxi_fare_km){
				dataS = dataS+"&taxi_fare_km="+taxi_fare_km;
			}
			*/
			dataS = dataS+"&val="+values;
			var response;
			$('div.slider_common').slideToggle(1050);
		        $(this).find('a').toggleClass('active');

			$.ajax
			({		
				type: "POST",
				url: "<?php echo URL_BASE;?>find/search_driver_location", 
				data: dataS, 
				cache: false, 
				dataType: 'json',
				success: function(response) 
				{ 	
					if(response['status'] == '1')
					{	
						window.location.href = "<?php echo URL_BASE;?>passengers/dashboard";
					}

					var show_map = "<?php echo SHOW_MAP; ?>";
					if(show_map !=2)
					{
						set_marker(response);	
					}
						
					$('#driver_details').html('');
					$('.loader').hide();		
					if(response.length == 0)
					{
						 $('#driver_details').append('<div class="no_vehicle_found"><p><?php echo __("no_vehicle_msg").$company_phone_no;?></p><br><div class="fl"><?php echo __("tips_broaden");?></div></div>');
					}
					else
					{
						
						<?php echo Message::success(__("driver_found_response")); ?>
						window.location.href = "<?php echo URL_BASE;?>passengers/dashboard";
						//render_data(response);								
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
	function set_marker(jsArray)
	{
		var cancel_rejected_driver_id= $('#cancel_rejected_driver_id').val();
		var cancel_current_location = $('#cancel_current_location').val();
		var cancel_drop_location = $('#cancel_drop_location').val();
		var current_location = $('#current_location').val();
		var drop_location = $('#drop_location').val();	
		var temp = new Array();
		temp = cancel_rejected_driver_id.split(",");
		//console.log(jsArray);
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
							
							if(jsArray[i].d_photo){
								
								var img = "<?php echo URL_BASE."/public/uploads/driver_image/"; ?>"+jsArray[i].d_photo;
								if(file_exists(img)){
									var img = "<?php echo URL_BASE."/public/uploads/driver_image/"; ?>"+jsArray[i].d_photo;
								}else{
									var img = "<?php echo URL_BASE."/public/uploads/driver_image/no-image.jpg";?>";
								}
							}else{
								var img = "<?php echo URL_BASE."/public/uploads/driver_image/no-image.jpg";?>";
							}

							if(jsArray[i].cancellation_nfree == 0) { jsArray[i].cancellation_fare = 'No'; } else { jsArray[i].cancellation_fare = '<?php echo CURRENCY ?> '+jsArray[i].cancellation_fare; } 
							
							var miles_to_km = Math.round(jsArray[i].distance_miles * 1.609344);
							var driver_away_in_km =  Math.ceil(miles_to_km * 100)/100;							
							
							//var content = firstToUpperCase(jsArray[i].name)+"<br><i>"+jsArray[i].phone+"</i>";
							//var content = "<div class='taxt_response'><div class='taxi_response_img'><img src='"+img+"' class='img-polaroid' /></div><div class='taxi_respsone_content' style='padding-left:5px;'><div class='company_name'>"+firstToUpperCase(jsArray[i].company_name)+"</div><div class='taxi_number'><?php echo __('taxi_number');?>: "+jsArray[i].taxi_no+"</div><div class='taxi_price_seat'><div class='taxi_price'><?php echo __('taxi_per_km');?><br><?php echo CURRENCY ?> "+jsArray[i].taxi_fare+"</div><div class='taxi_seat'><?php echo __('taxi_seat');?><br>"+jsArray[i].taxi_capacity+"</div></div></div></div>";
							var content = "<div class='taxt_response'><div class='taxi_response_img'><img src='"+img+"' class='img-polaroid' /></div><div class='taxi_respsone_content' style='padding-left:5px;'><div class='company_name'>"+firstToUpperCase(jsArray[i].company_name)+"</div><div class='taxi_head_content'><?php echo __('distance_km');?>: "+driver_away_in_km+"</div><div class='taxi_head_content'><?php echo __('taxi_number');?>: "+jsArray[i].taxi_no+"<div class='taxi_head_content'><?php echo __('taxi_seat');?>: "+jsArray[i].taxi_capacity+"</div><div class='taxi_head_contents'><?php echo __('basefare');?>:<?php echo CURRENCY ?> "+jsArray[i].base_fare+"</div><div class='taxi_price_seat'><div class='taxi_fields'><?php echo __('min_fare');?><br><?php echo CURRENCY ?> "+jsArray[i].min_fare+"</div><div class='taxi_cfare'><?php echo __('cancellation_fare');?><br>"+jsArray[i].cancellation_fare+"</div><div class='taxi_fields'><?php echo __('belowkm');?><br><?php echo __('common_km');?><br><?php echo CURRENCY ?> "+jsArray[i].below_km+"</div><div class='taxi_abovekm'><?php echo __('abovekm');?><br> <?php echo __('common_km');?><br><?php echo CURRENCY ?> "+jsArray[i].above_km+"</div></div></div></div></div>";
							//alert("1"+content);
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
				if(temp != null)
				{
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
							
							if(jsArray[i].d_photo){
								
								var img = "<?php echo URL_BASE."/public/uploads/driver_image/"; ?>"+jsArray[i].d_photo;
								if(file_exists(img)){
									var img = "<?php echo URL_BASE."/public/uploads/driver_image/"; ?>"+jsArray[i].d_photo;
								}else{
									var img = "<?php echo URL_BASE."/public/uploads/driver_image/no-image.jpg";?>";
								}
							}else{
								var img = "<?php echo URL_BASE."/public/uploads/driver_image/no-image.jpg";?>";
							}

							if(jsArray[i].cancellation_nfree == 0) { jsArray[i].cancellation_fare = 'No'; } else { jsArray[i].cancellation_fare = '<?php echo CURRENCY ?> '+jsArray[i].cancellation_fare; } 


							
							//var content = firstToUpperCase(jsArray[i].name)+"<br><i>"+jsArray[i].phone+"</i>";
							//var content = "<div class='taxt_response'><div class='taxi_response_img'><img src='"+img+"' class='img-polaroid' /></div><div class='taxi_respsone_content' style='padding-left:5px;'><div class='company_name'>"+firstToUpperCase(jsArray[i].company_name)+"</div><div class='taxi_number'><?php echo __('taxi_number');?>: "+jsArray[i].taxi_no+"</div><div class='taxi_price_seat'><div class='taxi_price'><?php echo __('taxi_per_km');?><br><?php echo CURRENCY ?> "+jsArray[i].taxi_fare+"</div><div class='taxi_seat'><?php echo __('taxi_seat');?><br>"+jsArray[i].taxi_capacity+"</div></div></div></div>";

					var miles_to_km = Math.round(jsArray[i].distance_miles * 1.609344);
					var driver_away_in_km =  Math.ceil(miles_to_km * 100)/100;

							var content = "<div class='taxt_response'><div class='taxi_response_img'><img src='"+img+"' class='img-polaroid' /></div><div class='taxi_respsone_content' style='padding-left:5px;'><div class='company_name'>"+firstToUpperCase(jsArray[i].company_name)+"</div><div class='taxi_head_content'><?php echo __('distance_km');?>: "+driver_away_in_km+"</div><div class='taxi_head_content'><?php echo __('taxi_number');?>: "+jsArray[i].taxi_no+"</div><div class='taxi_head_content'><?php echo __('taxi_seat');?>: "+jsArray[i].taxi_capacity+"</div><div class='taxi_head_contents'><?php echo __('basefare');?>:<?php echo CURRENCY ?>  "+jsArray[i].base_fare+"</div><div class='taxi_price_seat'><div class='taxi_fields'><?php echo __('min_fare');?><br><?php echo CURRENCY ?> "+jsArray[i].min_fare+"</div><div class='taxi_cfare'><?php echo __('cancellation_fare');?><br>"+jsArray[i].cancellation_fare+"</div><div class='taxi_fields'><?php echo __('belowkm');?><br><?php echo __('common_km');?><br><?php echo CURRENCY ?> "+jsArray[i].below_km+"</div><div class='taxi_abovekm'><?php echo __('abovekm');?><br><?php echo __('common_km');?><br><?php echo CURRENCY ?> "+jsArray[i].above_km+"</div></div></div></div></div>";
							//alert("2"+content);
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
					} // In Driver condition End
				}
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
					
			if(jsArray[i].d_photo){				
			var img = "<?php echo URL_BASE."/public/uploads/driver_image/"; ?>"+jsArray[i].d_photo;
			if(file_exists(img)){
			var img = "<?php echo URL_BASE."/public/uploads/driver_image/"; ?>"+jsArray[i].d_photo;
				}else{
				var img = "<?php echo URL_BASE."/public/uploads/driver_image/no-image.jpg";?>";
				}
				}else{
				var img = "<?php echo URL_BASE."/public/uploads/driver_image/no-image.jpg";?>";
				}

				if(jsArray[i].cancellation_nfree == 0) { jsArray[i].cancellation_fare = 'No'; } else { jsArray[i].cancellation_fare = '<?php echo CURRENCY ?> '+jsArray[i].cancellation_fare; } 
				
				var miles_to_km = Math.round(jsArray[i].distance_miles * 1.609344);
				var driver_away_in_km =  Math.ceil(miles_to_km * 100)/100;
					
			//var content = firstToUpperCase(jsArray[i].name)+"<br><i>"+jsArray[i].phone+"</i>";
			var content = "<div class='taxt_response'><div class='taxi_response_img'><img src='"+img+"' class='img-polaroid' /></div><div class='taxi_respsone_content' style='padding-left:5px;'><div class='company_name'>"+firstToUpperCase(jsArray[i].name)+"</div><div class='taxi_head_content'><?php echo __('distance_km');?>: "+driver_away_in_km+"</div><div class='taxi_head_content'><?php echo __('taxi_number');?>: "+jsArray[i].taxi_no+"</div><div class='taxi_head_content'><?php echo __('taxi_seat');?>: "+jsArray[i].taxi_capacity+"</div><div class='taxi_head_contents'><?php echo __('basefare');?>: <?php echo CURRENCY ?>  "+jsArray[i].base_fare+"</div><div class='taxi_price_seat'><div class='taxi_fields'><?php echo __('min_fare');?><br><?php echo CURRENCY ?> "+jsArray[i].min_fare+"</div><div class='taxi_cfare'><?php echo __('cancellation_fare');?><br>"+jsArray[i].cancellation_fare+"</div><div class='taxi_fields'><?php echo __('belowkm');?><br> <?php echo __('common_km');?><br><?php echo CURRENCY ?> "+jsArray[i].below_km+"</div><div class='taxi_abovekm'><?php echo __('abovekm');?><br> <?php echo __('common_km');?><br><?php echo CURRENCY ?> "+jsArray[i].above_km+"</div></div></div></div></div>";
			//alert("3"+content);
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
			var passenger_id = $('#passenger_id').val();
			//alert(passenger_id);
			//alert(val.d_photo);
			var driver_name = firstToUpperCase(val.name);
			if(val.d_photo){
				var img = "<?php echo URL_BASE."public/uploads/driver_image/"; ?>"+val.d_photo;

				if(file_exists(img)){
					var img = "<?php echo URL_BASE."public/uploads/driver_image/"; ?>"+val.d_photo;
				}else{
					var img = "<?php echo URL_BASE."public/uploads/driver_image/no-image.jpg";?>";
				}
			}else{
				var img = "<?php echo URL_BASE."public/uploads/driver_image/no-image.jpg";?>";
			}

			if(passenger_id == "")
			{

				if(val.cancellation_nfree == 0) { val.cancellation_fare = 'No'; } else { val.cancellation_fare = val.cancellation_fare; } 

				var isbooking='1';
				//"<div class='taxt_response'><div class='taxi_response_img'><img src='"+img+"' class='img-polaroid' /></div><div class='taxi_respsone_content' style='padding-left:5px;'><div class='company_name'>"+firstToUpperCase(jsArray[i].company_name)+"</div><div class='taxi_number'><?php echo __('taxi_number');?>: "+jsArray[i].taxi_no+" <?php echo __('taxi_seat');?>: "+jsArray[i].taxi_capacity+"</div><div class='taxi_price_seat'><div class='taxi_fields'><?php echo __('basefare');?><br>"+jsArray[i].base_fare+"</div><div class='taxi_cfare'><?php echo __('cancellation_fare');?><br>"+jsArray[i].cancellation_fare+"</div><div class='taxi_fields'><?php echo __('belowkm');?><br> "+jsArray[i].below_km+"</div><div class='taxi_abovekm'><?php echo __('abovekm');?><br><?php echo CURRENCY ?> "+jsArray[i].above_km+"</div></div></div></div>";
				
				var show_map = "<?php echo SHOW_MAP; ?>";
				var taxi_class_content = '';
				var taxi_image_class = '';				
				var taxi_response_content ='';

				if(show_map ==2)
				{
					taxi_class_content ='fl wd46';
					taxi_image_class = 'ml100';	
					taxi_response_content = 'mr100';
				}
				var miles_to_km = Math.round(val.distance_miles * 1.609344);
				var driver_away_in_km =  Math.ceil(miles_to_km * 100)/100;
							
				$('#driver_details').append('<div class="taxt_response_det '+taxi_class_content+'"><div class="taxi_response_img '+taxi_image_class+'"><a class="thumbnail" href=javascript:get_driver_details("'+replace(val.company_name)+'",'+val.driver_id+') ><img src="'+img+'" style="width:inherit; max-width:100%;height:100px;" /></a></div><div class="taxi_respsone_content '+taxi_response_content+'"><div class="company_name">'+firstToUpperCase(driver_name)+'</div><div class="taxi_head_det"><?php echo __('distance_km');?>:  '+driver_away_in_km+'</div><div class="taxi_head_det"><?php echo __('taxi_number');?>: '+val.taxi_no+'</div><div class="taxi_head_det"><?php echo __('taxi_seat');?>: '+val.taxi_capacity+'</div><div class="taxi_number"><?php echo __('base_fare');?>:<?php echo CURRENCY ?>  '+val.base_fare+'</div><div class="taxi_price_seat"><div class="taxi_fields"><?php echo __('minfare');?><br><?php echo CURRENCY ?> '+val.min_fare+'</div><div class="taxi_cfare"><?php echo __('cancellation_fare');?><br>'+val.cancellation_fare+'</div><div class="taxi_fields"><?php echo __('belowkm');?><br/> <?php echo __('common_km');?><br><?php echo CURRENCY ?> '+val.below_km+'</div><div class="taxi_abovekm"><?php echo __('abovekm');?><br/> <?php echo __('common_km');?><br><?php echo CURRENCY ?> '+val.above_km+'</div></div><div class="book_btn"><div class="taxi_book_now"><input type="button" class="btn btn-warning" id="driver_'+val.driver_id+'" value="Book Now" title="Book now" onclick="showpopup('+val.driver_id+','+isbooking+','+name_driver+','+val.taxi_id+')"/></div><div class="taxi_view_detail"><a href=javascript:get_driver_details("'+replace(val.company_name)+'",'+val.driver_id+') ><?php echo __('features');?></a></div></div></div></div>');
				//alert("1");
			}
			else
			{
				if(cancel_rejected_driver_id != "")
				{	
					if((cancel_current_location != current_location) || (cancel_drop_location != drop_location ))
					{

						if(val.cancellation_nfree == 0) { val.cancellation_fare = 'No'; } else { val.cancellation_fare = val.cancellation_fare; } 
						
						var show_map = "<?php echo SHOW_MAP; ?>";
						var taxi_class_content = '';
						var taxi_image_class = '';				
						var taxi_response_content ='';

						if(show_map ==2)
						{
							taxi_class_content ='fl wd46';
							taxi_image_class = 'ml100';	
							taxi_response_content = 'mr100';
						}
				
						temp = null;	
						//$('#driver_details').append('<div class="taxt_response_det '+taxi_class_content+'"><div class="taxi_response_img '+taxi_image_class+'"><a class="thumbnail" href=javascript:get_driver_details("'+replace(driver_name)+'",'+val.driver_id+') ><img src="'+img+'" style="width:inherit; max-width:100%;height:100px;" /></a></div><div class="taxi_respsone_content '+taxi_response_content+'"><div class="company_name">'+firstToUpperCase(val.company_name)+'</div><div class="taxi_head_det"><?php echo __('taxi_number');?>: '+val.taxi_no+'</div><div class="taxi_head_det"><?php echo __('taxi_seat');?>: '+val.taxi_capacity+'</div><div class="taxi_number"><?php echo __('base_fare');?>:<?php echo CURRENCY ?> '+val.base_fare+'</div><div class="taxi_price_seat"><div class="taxi_fields"><?php echo __('minfare');?><br><?php echo CURRENCY ?> '+val.min_fare+'</div><div class="taxi_cfare"><?php echo __('cancellation_fare');?><br>'+val.cancellation_fare+'</div><div class="taxi_fields"><?php echo __('belowkm');?><br><?php echo CURRENCY ?> '+val.below_km+'</div><div class="taxi_abovekm"><?php echo __('abovekm');?><br><?php echo CURRENCY ?> '+val.above_km+'</div></div><div class="book_btn"><div class="taxi_book_now"><input type="button" class="btn btn-warning" id="driver_'+val.driver_id+'" value="Book Now" title="Book now" onclick="showpopup('+val.driver_id+','+isbooking+','+name_driver+','+val.taxi_id+')"/></div><div class="taxi_view_detail"><a href=javascript:get_driver_details("'+replace(driver_name)+'",'+val.driver_id+') ><?php echo __('features');?></a></div></div></div></div>');
						var miles_to_km = Math.round(val.distance_miles * 1.609344);
						var driver_away_in_km =  Math.ceil(miles_to_km * 100)/100;
						
						$('#driver_details').append('<div class="taxt_response_det '+taxi_class_content+'"><div class="taxi_response_img '+taxi_image_class+'"><a class="thumbnail" href=javascript:get_driver_details("'+replace(val.company_name)+'",'+val.driver_id+') ><img src="'+img+'" style="width:inherit; max-width:100%;height:100px;" /></a></div><div class="taxi_respsone_content '+taxi_response_content+'"><div class="company_name">'+firstToUpperCase(driver_name)+'</div><div class="taxi_head_det"><?php echo __('distance_miles');?>:  '+driver_away_in_km+'</div><div class="taxi_head_det"><?php echo __('taxi_number');?>: '+val.taxi_no+'</div><div class="taxi_head_det"><?php echo __('taxi_seat');?>: '+val.taxi_capacity+'</div><div class="taxi_number"><?php echo __('base_fare');?>:<?php echo CURRENCY ?> '+val.base_fare+'</div><div class="taxi_price_seat"><div class="taxi_fields"><?php echo __('minfare');?><br><?php echo CURRENCY ?> '+val.min_fare+'</div><div class="taxi_cfare"><?php echo __('cancellation_fare');?><br>'+val.cancellation_fare+'</div><div class="taxi_fields"><?php echo __('belowkm');?><br/> <?php echo __('common_km');?><br><?php echo CURRENCY ?> '+val.below_km+'</div><div class="taxi_abovekm"><?php echo __('abovekm');?><br/><?php echo __('common_km');?><br><?php echo CURRENCY ?> '+val.above_km+'</div></div><div class="book_btn"><div class="taxi_book_now"><input type="button" class="btn btn-warning" id="driver_'+val.driver_id+'" value="Book Now" title="Book now" onclick="booknow('+val.driver_id+','+name_driver+','+val.taxi_id+','+driver_away_in_km+')"/></div><div class="taxi_view_detail"><a href=javascript:get_driver_details("'+replace(val.company_name)+'",'+val.driver_id+') ><?php echo __('features');?></a></div></div></div></div>');
						//alert("2");
					}	
					if(temp != null)
					{		
						//alert(val.driver_id);
						if(inArray(val.driver_id,temp))
						{

					if(val.cancellation_nfree == 0) { val.cancellation_fare = 'No'; } else { val.cancellation_fare = val.cancellation_fare; } 
					
					var show_map = "<?php echo SHOW_MAP; ?>";
					var taxi_class_content = '';
					var taxi_image_class = '';				
					var taxi_response_content ='';

					if(show_map ==2)
					{
						taxi_class_content ='fl wd46';
						taxi_image_class = 'ml100';	
						taxi_response_content = 'mr100';
					}

							//$('#driver_details').append('<div class="taxt_response_det"><div class="taxi_response_img"><a class="thumbnail" href=javascript:get_driver_details("'+replace(driver_name)+'",'+val.driver_id+') ><img src="'+img+'" style="width:inherit; max-width:100%;height:100px;" /></a></div><div class="taxi_respsone_content"><div class="company_name">'+firstToUpperCase(val.company_name)+'</div><div class="taxi_head_det"><?php echo __('taxi_number');?>: '+val.taxi_no+'</div><div class="taxi_head_det"><?php echo __('taxi_seat');?>: '+val.taxi_capacity+'</div><div class="taxi_number"><?php echo __('base_fare');?>:<?php echo CURRENCY ?> '+val.base_fare+'</div><div class="taxi_price_seat"><div class="taxi_fields"><?php echo __('minfare');?><br><?php echo CURRENCY ?> '+val.min_fare+'</div><div class="taxi_cfare"><?php echo __('cancellation_fare');?><br>'+val.cancellation_fare+'</div><div class="taxi_fields"><?php echo __('belowkm');?><br><?php echo CURRENCY ?> '+val.below_km+'</div><div class="taxi_abovekm"><?php echo __('abovekm');?><br><?php echo CURRENCY ?> '+val.above_km+'</div></div><div class="book_btn"><div class="taxi_book_now"><input type="button" class="btn btn-warning" id="driver_'+val.driver_id+'" value="Book Now" title="Book now" onclick="showpopup('+val.driver_id+','+isbooking+','+name_driver+','+val.taxi_id+')"/></div><div class="taxi_view_detail"><a href=javascript:get_driver_details("'+replace(driver_name)+'",'+val.driver_id+') ><?php echo __('features');?></a></div></div></div></div>');
							var miles_to_km = Math.round(val.distance_miles * 1.609344);
							var driver_away_in_km =  Math.ceil(miles_to_km * 100)/100;							
							
							$('#driver_details').append('<div class="taxt_response_det '+taxi_class_content+'"><div class="taxi_response_img '+taxi_image_class+'"><a class="thumbnail" href=javascript:get_driver_details("'+replace(val.company_name)+'",'+val.driver_id+') ><img src="'+img+'" style="width:inherit; max-width:100%;height:100px;" /></a></div><div class="taxi_respsone_content '+taxi_response_content+'"><div class="company_name">'+firstToUpperCase(driver_name)+'</div><div class="taxi_head_det"><?php echo __('distance_km');?>:  '+driver_away_in_km+'</div><div class="taxi_head_det"><?php echo __('taxi_number');?>: '+val.taxi_no+'</div><div class="taxi_head_det"><?php echo __('taxi_seat');?>: '+val.taxi_capacity+'</div><div class="taxi_number"><?php echo __('base_fare');?>:<?php echo CURRENCY ?> '+val.base_fare+'</div><div class="taxi_price_seat"><div class="taxi_fields"><?php echo __('minfare');?><br><?php echo CURRENCY ?> '+val.min_fare+'</div><div class="taxi_cfare"><?php echo __('cancellation_fare');?><br>'+val.cancellation_fare+'</div><div class="taxi_fields"><?php echo __('belowkm');?><br/> <?php echo __('common_km');?><br><?php echo CURRENCY ?> '+val.below_km+'</div><div class="taxi_abovekm"><?php echo __('abovekm');?><br/> <?php echo __('common_km');?><br><?php echo CURRENCY ?> '+val.above_km+'</div></div><div class="book_btn"><div class="taxi_book_now"><input type="button" class="btn btn-warning" id="driver_'+val.driver_id+'" value="Book Now" title="Book now" onclick="booknow('+val.driver_id+','+name_driver+','+val.taxi_id+','+driver_away_in_km+')"/></div><div class="taxi_view_detail"><a href=javascript:get_driver_details("'+replace(val.company_name)+'",'+val.driver_id+') ><?php echo __('features');?></a></div></div></div></div>');
							//alert("3");
						}
					}
				}
				else
				{	if(val.cancellation_nfree == 0) { val.cancellation_fare = 'No'; } else { val.cancellation_fare = val.cancellation_fare; } 
				
					var show_map = "<?php echo SHOW_MAP; ?>";
					var taxi_class_content = '';
					var taxi_image_class = '';				
					var taxi_response_content ='';

					if(show_map ==2)
					{
						taxi_class_content ='fl wd46';
						taxi_image_class = 'ml100';	
						taxi_response_content = 'mr100';
					}
				
					//$('#driver_details').append('<div class="taxt_response_det"><div class="taxi_response_img"><a class="thumbnail" href=javascript:get_driver_details("'+replace(driver_name)+'",'+val.driver_id+') ><img src="'+img+'" style="width:inherit; max-width:100%;height:100px;" /></a></div><div class="taxi_respsone_content"><div class="company_name">'+firstToUpperCase(val.company_name)+'</div><div class="taxi_head_det"><?php echo __('taxi_number');?>: '+val.taxi_no+'</div><div class="taxi_head_det"><?php echo __('taxi_seat');?>: '+val.taxi_capacity+'</div><div class="taxi_number"><?php echo __('base_fare');?>:<?php echo CURRENCY ?> '+val.base_fare+'</div><div class="taxi_price_seat"><div class="taxi_fields"><?php echo __('minfare');?><br><?php echo CURRENCY ?> '+val.min_fare+'</div><div class="taxi_cfare"><?php echo __('cancellation_fare');?><br>'+val.cancellation_fare+'</div><div class="taxi_fields"><?php echo __('belowkm');?><br><?php echo CURRENCY ?> '+val.below_km+'</div><div class="taxi_abovekm"><?php echo __('abovekm');?><br><?php echo CURRENCY ?> '+val.above_km+'</div></div><div class="book_btn"><div class="taxi_book_now"><input type="button" class="btn btn-warning" id="driver_'+val.driver_id+'" value="Book Now" title="Book now" onclick="showpopup('+val.driver_id+','+isbooking+','+name_driver+','+val.taxi_id+')"/></div><div class="taxi_view_detail"><a href=javascript:get_driver_details("'+replace(driver_name)+'",'+val.driver_id+') ><?php echo __('features');?></a></div></div></div></div>');
					var miles_to_km = Math.round(val.distance_miles * 1.609344);
					var driver_away_in_km =  Math.ceil(miles_to_km * 100)/100;	
									
					$('#driver_details').append('<div class="taxt_response_det '+taxi_class_content+'"><div class="taxi_response_img '+taxi_image_class+'"><a class="thumbnail" href=javascript:get_driver_details("'+replace(val.company_name)+'",'+val.driver_id+') ><img src="'+img+'" style="width:inherit; max-width:100%;height:100px;" /></a></div><div class="taxi_respsone_content '+taxi_response_content+'"><div class="company_name">'+firstToUpperCase(driver_name)+'</div><div class="taxi_head_det"><?php echo __('distance_km');?>:  '+driver_away_in_km+'</div><div class="taxi_head_det"><?php echo __('taxi_number');?>: '+val.taxi_no+'</div><div class="taxi_head_det"><?php echo __('taxi_seat');?>: '+val.taxi_capacity+'</div><div class="taxi_number"><?php echo __('base_fare');?>:<?php echo CURRENCY ?> '+val.base_fare+'</div><div class="taxi_price_seat"><div class="taxi_fields"><?php echo __('minfare');?><br><?php echo CURRENCY ?> '+val.min_fare+'</div><div class="taxi_cfare"><?php echo __('cancellation_fare');?><br>'+val.cancellation_fare+'</div><div class="taxi_fields"><?php echo __('belowkm');?><br/> <?php echo __('common_km');?><br><?php echo CURRENCY ?> '+val.below_km+'</div><div class="taxi_abovekm"><?php echo __('abovekm');?><br/> <?php echo __('common_km');?><br><?php echo CURRENCY ?> '+val.above_km+'</div></div><div class="book_btn"><div class="taxi_book_now"><input type="button" class="btn btn-warning" id="driver_'+val.driver_id+'" value="Book Now" title="Book now" onclick="booknow('+val.driver_id+','+name_driver+','+val.taxi_id+','+driver_away_in_km+')" /></div><div class="taxi_view_detail"><a href=javascript:get_driver_details("'+replace(val.company_name)+'",'+val.driver_id+') ><?php echo __('features');?></a></div></div></div></div>');

					//$('#driver_details').append('<div class="taxt_response" ><div class="taxi_response_img"><a class="thumbnail" href=javascript:get_driver_details("'+replace(driver_name)+'",'+val.driver_id+') ><img src="'+img+'" style="width:inherit; max-width:100%;height:100px;" /></a></div><div class="taxi_respsone_content"><div class="company_name">'+firstToUpperCase(val.company_name)+'</div><div class="taxi_number"><?php echo __('taxi_number');?>: '+val.taxi_no+'</div><div class="taxi_price_seat"><div class="taxi_price"><?php echo __('taxi_per_km');?><br><?php echo CURRENCY ?> '+val.taxi_fare+'</div><div class="taxi_seat"><?php echo __('taxi_seat');?><br>'+val.taxi_capacity+'</div></div><div class="book_btn"><div class="taxi_book_now"><input type="button" class="btn btn-warning" id="driver_'+val.driver_id+'" value="Book Now" title="Book now" onclick="booknow('+val.driver_id+','+name_driver+','+val.taxi_id+')"/></div><div class="taxi_view_detail"><a href=javascript:get_driver_details("'+replace(driver_name)+'",'+val.driver_id+') >View More</a></div></div></div></div>');
					//alert("4");
				}
			}
		});	
		if( $('#driver_details').is(':empty') ) 
		{
			$('#driver_details').append('<div class="no_vehicle_found"><p><?php echo __("no_vehicle_msg").$company_phone_no;?></p><br><p class="tip_around"><?php echo __("tips_broaden");?></p></div>');
		}
	}
	
	function set_hidden(lat,lng)
	{		
		//$('#hidden_inputs').html('<input type="hidden" id="lat" value='+lat+'><input type="hidden" id="lng" value='+lng+'>');
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

google.maps.event.addDomListener(window, 'load', initialize);


$("#taxi_type").change(function() {

      		var motorid= $("#taxi_type").val();
      		var modelid= $("#model_id").val();

		  $.ajax({
			url:"<?php echo URL_BASE;?>find/getmodellist",
			type:"get",
			data:"motor_id="+motorid+"&model_id="+modelid,
			success:function(data){
			$('#model_list').html();
			$('#model_list').html(data);
			},
			error:function(data)
			{
				//alert(cid);
			}
		});	
});

$(document).ready(function(){
	$("#current_location").blur(function(){
		var cur_loc = $("#current_location").val();
		if(cur_loc==""){
			$("#current_location").css("border","1px solid red");
		}else{
			$("#current_location").css("border","");
		}
	});
	/*$("#drop_location").blur(function(){
		var drop_loc = $("#drop_location").val();
		if(drop_loc==""){
			$("#drop_location").css("border","1px solid red");
		}else{
			$("#drop_location").css("border","");
		}
	});
	*/
});

function file_exists (url) {
	// Returns true if filename exists
	//alert(url);
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
/*** Check value Not in Array for find except drivers **/
function inArray(needle, haystack) {
    var length = haystack.length;
    for(var i = 0; i < length; i++) {
        if(haystack[i] == needle) return false;
    }
    return true;
}
/*****************/
$("#no_passengers").keypress(function(event) { return checkisNumber(event) });
  $("#maximum_luggage").keydown(function(event) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ( $.inArray(event.keyCode,[46,8,9,27,13,190]) !== -1 ||
             // Allow: Ctrl+A
            (event.keyCode == 65 && event.ctrlKey === true) || 
             // Allow: home, end, left, right
            (event.keyCode >= 35 && event.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        else {
            // Ensure that it is a number and stop the keypress
            if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
                event.preventDefault(); 
            }   
        }
    });	
    
    function show_hidetime(timers)
{
	var ttype = timers;
	//alert(ttype);
	if(ttype == 'Now')
	{	
		//$('#nowtime').css('display','inline');
		$('#aftertime').css('display','none');	
	}
	else
	{
		$('#nowtime').css('display','none');
		$('#aftertime').css('display','inline');
	}
}
</script>

<script>
var map;
var directionsDisplay;
var directionsService;
var stepDisplay;
var markerArray = [];

function calcRoute() {
  // First, remove any existing markers from the map.
  for (var i = 0; i < markerArray.length; i++) {
    markerArray[i].setMap(null);
  }
  // Now, clear the array itself.
  markerArray = [];
  // Retrieve the start and end locations and create
  // a DirectionsRequest using WALKING directions.
  var start = document.getElementById('current_location').value;
  var end = document.getElementById('drop_location').value;
  var request = {
      origin: start,
      destination: end,
      travelMode: google.maps.TravelMode.WALKING
  };

  // Route the directions and pass the response to a
  // function to create markers for each step.
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      //var warnings = document.getElementById('warnings_panel');
      //warnings.innerHTML = '<b>' + response.routes[0].warnings + '</b>';
      directionsDisplay.setDirections(response);
      showSteps(response);
    }
  });
}

function showSteps(directionResult) {
  // For each step, place a marker, and add the text to the marker's
  // info window. Also attach the marker to an array so we
  // can keep track of it and remove it when calculating new
  // routes.
  // Now, clear the array itself.
  markerArray = [];
  var myRoute = directionResult.routes[0].legs[0];
  for (var i = 0; i < myRoute.steps.length; i++) {
    var marker = new google.maps.Marker({
      position: myRoute.steps[i].start_location,
      map: map
    });
    clearMarkers();
    attachInstructionText(marker, myRoute.steps[i].instructions);
    markerArray[i] = marker;
  }
}

function attachInstructionText(marker, text) {
  google.maps.event.addListener(marker, 'click', function() {
    // Open an info window when the marker is clicked on,
    // containing the text of the step.
    stepDisplay.setContent(text);
    stepDisplay.open(map, marker);
  });
}
  
</script>
