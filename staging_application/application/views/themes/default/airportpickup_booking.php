<?php defined('SYSPATH') OR die('No direct access allowed.'); 
$chk_cnt_fav = count($favourite_list);

?>

  <script>

  function initialize(){
	
	var pickupplace = document.getElementById("pickupplace");
	var dropplace = document.getElementById("dropplace");
	var options = {componentRestrictions: {country: ''}};//Restrictions based country wise
			
	var pickupplace_autocomplete=new google.maps.places.Autocomplete(pickupplace);//pickupplace
	var dropplace_autocomplete=new google.maps.places.Autocomplete(dropplace);//dropplace


		//dropplace based autocomplete.
		
	google.maps.event.addListener(dropplace_autocomplete, 'place_changed', function () {
		var dropplace_place = dropplace_autocomplete.getPlace();//Get a place lat&long
		/*************** Get a LocationB Latitude and Longitude ***********/
		document.getElementById('drop_latitude').value = dropplace_place.geometry.location.lat();//initialized latitude
		document.getElementById('drop_longitude').value = dropplace_place.geometry.location.lng();//initialized longitude
		/********* End of Get a LocationB Latitude and Longitude ***********/
	});
		//End of dropplace autocomplete.

	
	
			//pickupplace based autocomplete.
	google.maps.event.addListener(pickupplace_autocomplete, 'place_changed', function () {
		var pickupplace_place = pickupplace_autocomplete.getPlace();//Get a place lat&long
	   
			/***************Get a pickupplace Latitude and Longitude  ***********/
		document.getElementById('latitude').value = pickupplace_place.geometry.location.lat();//initialized latitude
		document.getElementById('longitude').value = pickupplace_place.geometry.location.lng();//initialized longitude
			/***************End of Get a pickupplace Latitude and Longitude ***********/
		});
		//pickupplace based autocomplete
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	/*********End of Google map and autocomplete part*************/
	
	</script>

	<div class="contact_us_block" id="contact_block_show">                 
				<div class="key_block">                    
					 <h1><?php echo __('book_now'); ?></h1>                                  
				</div>                 
			</div>     
		    <div class="contact_us_outer">
		        <div class="key_block">
			
					<form method="POST" name="frmlogin" id="booking" action=""  >
						<div class="registration mt30"  style="width:100%;">
							<div class="clearfix">								 								 								      
								<div class="reg_form_left">
									 <div class="input_bx pickup_time_div">
											 <input class="form-control" type="text" name="airport_flight_number" id="airport_flight_number"  placeholder="<?php echo __('airport_flight_number'); ?>" value=""></input>
											 <label class="control-group err"><span style="cursor:text;" id="airport_flight_number_error">
										 </div> 
										   <div class="input_bx pickup_time_div">
											 <input class="form-control" type="text" name="pickup_date" id="pickup_date"  placeholder="<?php echo __('airport_flight_time'); ?>" value=""></input>
											 <label class="control-group err"><span style="cursor:text;" id="pickup_time_error">
										 </div> 
										
										<!-- MAIN -->
										<?php /* if($chk_cnt_fav > 0) { ?>	
										<?php   <div class="input_bx">
											
											 <select name="fav_location" id="fav_location" onchange='change_fav_location(this.value);'>
												 
												 <option value=''>Choose Favourite Location</option>
											 <?php foreach($favourite_list as $fav) {
											 if($fav['p_favourite_place'] != '' && $fav['d_favourite_place'] != '') {
												$get_place =  $fav['p_favourite_place']. ' <b> To</b> '.$fav['d_favourite_place'];
												$sel_lat_lng = $fav['p_fav_latitude'].'||'.$fav['p_fav_longtitute'].'||'.$fav['d_fav_latitude'].'||'.$fav['d_fav_longtitute']."||".$fav['p_favourite_place'].'||'.$fav['d_favourite_place'];
											 }else{
												if($fav['p_favourite_place']){
													$get_place = $fav['p_favourite_place'];
													 $sel_lat_lng = "P||".$fav['p_fav_latitude'].'||'.$fav['p_fav_longtitute'].'||'.$fav['p_favourite_place'];
													 }else{
														 $get_place = $fav['d_favourite_place']; 
														 $sel_lat_lng = "D||".$fav['d_fav_latitude'].'||'.$fav['d_fav_longtitute'].'||'.$fav['d_favourite_place'];
														}
												 
												
												 }	 
											?>
												 <option value="<?php echo $sel_lat_lng;?>"><?php echo $get_place;?></option>
												
												 
											 <?php } ?>
											 </select>
											    
												<input type="hidden"  name="fav_plocation_lat" value="" placeholder="latitude" id="fav_plocation_lat"/>
												<input type="hidden" name="fav_plocation_long" value="" placeholder="longitude" id="fav_plocation_long"/>
												<input type="hidden" name="fav_dlocation_lat" value="" placeholder="latitude" id="fav_dlocation_lat"/>
												<input type="hidden" name="fav_dlocation_long" value="" placeholder="longitude" id="fav_dlocation_long"/>
											<label class="control-group err"><span style="cursor:text;" id="fav_location_error"><?php if(isset($errors)){ echo array_key_exists("fav_location",$errors)?$errors["fav_location"]:""; } ?> </span></label>
											
										</div> 
									<?php } */ ?>	
									
									
									
											<div class="input_bx">
												  <input type="text" name="pickupplace" value="" id="pickupplace"/><span id="pick_fav"> favorite</span>
												  <input type="hidden" name="latitude" value="" placeholder="latitude" id="latitude"/>
												  <input type="hidden" name="longitude" value=""  id="longitude"/>
											<?php /*  <input type="text" class="form-control" id="pickupplace" name="pickupplace" autocomplete="off"  placeholder="<?php echo __('enter_currentlocation'); ?>" /> */?>
											<label class="control-group err"> <span style="cursor:text;" id="pickupplace_error"><?php if(isset($errors)){ echo array_key_exists("pickupplace",$errors)?$errors["pickupplace"]:""; } ?> </span></label>
											
											</div> 
                                            <div class="input_bx">
											 <?php /* <input type="text" class="form-control" id="dropplace" name="dropplace" autocomplete="off" placeholder="<?php echo __('enter_drop_location'); ?>" /> */ ?>
											 
											   <input type="text" name="dropplace" value="" id="dropplace" /><span id="drop_fav"> favorite</span>
												<input type="hidden" name="drop_latitude" value="" placeholder="latitude" id="drop_latitude"/>
												<input type="hidden" name="drop_longitude" value="" placeholder="longitude" id="drop_longitude"/>
											<label class="control-group err"><span style="cursor:text;" id="dropplace_error"><?php if(isset($errors)){ echo array_key_exists("dropplace",$errors)?$errors["dropplace"]:""; } ?> </span></label>
											
									</div> 
									
										<!-- MAIN -->
									
									
										<div class="input_bx pickup_time_div">
											 <input class="form-control" type="text" name="no_passengers" id="no_passengers"  placeholder="<?php echo __('no_passengers'); ?>" value=""></input>
											 <label class="control-group err"><span style="cursor:text;" id="no_passengers_error">
										 </div> 
										 
										 <div class="input_bx pickup_time_div">
											 <input class="form-control" type="text" name="max_luggage" id="max_luggage"  placeholder="<?php echo __('max_luggage'); ?>" value=""></input>
											 <label class="control-group err"><span style="cursor:text;" id="max_luggage_error">
										 </div> 
									
										 <div class="input_bx pickup_time_div">
											 <input class="form-control" type="text" name="airport_notes" id="airport_notes"  placeholder="<?php echo __('airport_notes'); ?>" value=""></input>
											 <label class="control-group err"><span style="cursor:text;" id="airport_notes_error">
										 </div> 
									
									<!-- For Booking Need Some Additional Fields -->
									<input type="hidden" name="pickup_time" id="pickup_time" value="<?php echo date('Y-m-d H:i:s');?>" />
									<input type="hidden" name="passenger_id" id="passenger_id" value="<?php echo $userid;?>" />
									<input type="hidden" name="motor_model" id="motor_model" value="1" />
									<input type="hidden" name="now_after" id="now_after" value="0" />
									<input type="hidden" name="sub_logid" id="sub_logid" value="" />
									<input type="hidden" name="cityname" id="cityname" value="" />
									<input type="hidden" name="fav_from" id="fav_from" value="0" />
								
									
									
									
									<!-- For Booking Need Some Additional Fields -->
									
									
									
									
									
									<div class="confirm">
										<input type="hidden" name="budget" value="" >
										
										<button  name="submit_booknow" onclick="contact_validations(1);" id="submit_booknow" class="btn btn-inverse booking" type="button" title="<?php echo __('book_now');?>"  ><?php echo __('book_now');?></button>
										
									</div>
								</div>
							</div>
						</div>
					</form>
                </div>
            </div>
            
            
             <!-- POPUP FOR FAV -->
<div id="rating_pop">
    <h2><?php echo __('favourites'); ?></h2>               
    <div class="login_total">                                               
        <div class="login_form">
            <ul>
                <li><span><?php echo __('fav_type'); ?>:</span>	<input type="text" name="type" id="type" value=""></li>
                <span id="c_result"></span>
                <li><span></span>
                    <input name="add_fav_sub"  id="add_fav_sub" class="btn btn-inverse" type="button" title="<?php echo __('submit'); ?>" value="<?php echo __('submit'); ?>" onclick="savefav()" /></li>
            </ul>                      
        </div>
    </div>
    <a id="close_x" class="close sprited left_rtg" href="#" onclick="popup_close('rating_pop');" ><?php echo __('close'); ?></a>
</div>
<div id="details_pop">
    <h2><?php echo __('favourites'); ?></h2>               
    <div class="login_total">                                               
        <div class="login_form">
            <ul>
                 <?php foreach($favourite_list as $fav) {
											 if($fav['p_favourite_place'] != '' && $fav['d_favourite_place'] != '') {
												$get_place =  $fav['p_favourite_place']. ' <b> To</b> '.$fav['d_favourite_place'];
												$sel_lat_lng = $fav['p_fav_latitude'].'||'.$fav['p_fav_longtitute'].'||'.$fav['d_fav_latitude'].'||'.$fav['d_fav_longtitute']."||".$fav['p_favourite_place'].'||'.$fav['d_favourite_place'];
											 }else{
												if($fav['p_favourite_place']){
													$get_place = $fav['p_favourite_place'];
													 $sel_lat_lng = "P||".$fav['p_fav_latitude'].'||'.$fav['p_fav_longtitute'].'||'.$fav['p_favourite_place'];
													 }else{
														 $get_place = $fav['d_favourite_place']; 
														 $sel_lat_lng = "D||".$fav['d_fav_latitude'].'||'.$fav['d_fav_longtitute'].'||'.$fav['d_favourite_place'];
														}
												 
												
												 }	 
											?>
												 <li><a onclick="change_fav_location('<?php echo $sel_lat_lng;?>')"><?php echo $get_place;?></a></li>
												
												 
											 <?php } ?>
            </ul>                      
        </div>
    </div>
    <a id="close_x" class="close sprited left_rtg" href="#" onclick="popup_close('details_pop');"><?php echo __('close'); ?></a>
</div>


<!--POPUP FOR FAV-->
              <div class="key_block_outer support_block_outer clearfix">
			<?php /** Map **/ ?>    
			<?php if(count($all_company_map_list) > 0) {	?>
			<div class="service_block service_block_abou">
                            <div class="service_block_inner">                    
			<div id="map-canvas" style="width:100%;height:350px;"></div>
			</div>
			</div> <?php } else { ?><div id="map-canvas" style="display:none;"> </div> <?php } ?>
			<?php /** Map **/ ?>



 
 <script type="text/javascript">
	$('#pick_fav').click(function() {
		if($('#latitude').val() == '' && $('#longitude').val() =='') {
		$('#fav_from').val(1);	
		fav_pop_list();
		}else { // Add Favourite
			fav_pop();
		
		}
	}); 
	$('#drop_fav').click(function() {
		if($('#drop_latitude').val() == '' && $('#drop_longitude').val() =='') {
		$('#fav_from').val(2);	
		fav_pop_list();
		}else { // Add Favourite
			fav_pop();
		}
		
	});
 function change_fav_location(val){
	  $('#details_pop').hide();    
      $('.lb_overlay').hide();
      $('div#fade').remove();
		var str_array = val.split('||');
		
			var loc = $('#fav_from').val();
					if(loc == 1  ){
				
				$('#latitude').val(str_array[1]);
				$('#longitude').val(str_array[2]);
				$('#pickupplace').val(str_array[3]);
				$( "#pick_fav" ).addClass( "fav_yellow" );
				}if(loc == 2){
				$('#drop_latitude').val(str_array[1]);
				$('#drop_longitude').val(str_array[2]);
				$('#dropplace').val(str_array[3]);
				$( "#drop_fav" ).addClass( "fav_yellow" );
				}
				if(str_array[0] != 'P' &&  str_array[0] != 'D' ){
					$( "#pick_fav" ).addClass( "fav_yellow" );
					$( "#drop_fav" ).addClass( "fav_yellow" );
			    $('#latitude').val(str_array[0]);
				$('#longitude').val(str_array[1]);	
				$('#drop_latitude').val(str_array[2]);
				$('#drop_longitude').val(str_array[3]);
				$('#pickupplace').val(str_array[4]);
				$('#dropplace').val(str_array[5]);
			}
		}
	
	$('#pickup_date').appendDtpicker({
		"closeButton": true,
		"autodateOnStart": false
	});

	
	
	function contact_validations(value){
		var flight_number = document.frmlogin.airport_flight_number.value.trim();
		var pickup_date= document.frmlogin.pickup_date.value.trim();
		var cloc= document.frmlogin.pickupplace.value.trim();
		var dloc= document.frmlogin.dropplace.value.trim();
		var no_passengers = document.frmlogin.no_passengers.value.trim();
		var max_luggage = document.frmlogin.max_luggage.value.trim();
		var airport_notes = document.frmlogin.airport_notes.value.trim();
		var motor_model = document.frmlogin.motor_model.value.trim();
		//if(motor_model != '' ){
		var  a=b=c=d=e=f=g=0;
		if(flight_number == ''){
			 $("#airport_flight_number_error").html("<?php echo __('enter_flight_number');?>");
		}else{
			 $("#airport_flight_number_error").html("");a=1;
		}
		
		if(pickup_date == '' ){
			  $("#pickup_time_error").html("<?php echo __('pickup_time');?>");
		}else {
			$("#pickup_time_error").html(""); b=2;
		}
		
		if(cloc == ''){
            $("#pickupplace_error").html("<?php echo __('enter_pickupplace');?>");
        }
        else{
            $("#pickupplace_error").html(""); c=3;
        }
		if(dloc == ''){
            $("#dropplace_error").html("<?php echo __('enter_dropplace');?>");
        }
        else{
            $("#dropplace_error").html(""); d=4;
        }
        
        
        if(no_passengers == ''){
            $("#no_passengers_error").html("<?php echo __('enter_no_passengers');?>");
        }
        else{
            $("#no_passengers_error").html(""); e=5;
        }
        if(max_luggage == ''){
            $("#max_luggage_error").html("<?php echo __('max_luggage');?>");
        }
        else{
            $("#max_luggage_error").html(""); f=6;
        }
        if(airport_notes == ''){
            $("#airport_notes_error").html("<?php echo __('airport_notes');?>");
        }
        else{
            $("#airport_notes_error").html(""); g=7;
        }
        
		if(a==1 && b==2 && c==3 && d==4 && e==5 && f==6 && g==7){
			$('form#booking').submit();
		}
		/*}else{
		
		alert("Please Choose model type first !!" );
		
		}*/
		
	}

	$('form#booking').submit(function(e){
		
		url = '<?php echo URL_BASE.MOB_API_URL;?>/?type=savebooking';
		var picktime = $('#pickup_date').val()+':00';
	    var now_after = "1";
	
		/** Check model based allowed person and luggage **/
		var chosen_model = $('#motor_model').val();
		var dataS = "motor_model="+chosen_model+"&max_luggage="+$('#max_luggage').val()+"&no_passengers="+$('#no_passengers').val();
										var response;
										$.ajax
												({ 			
													type: "POST",
													url: SrcPath+"passengers/check_model_based_search", 
													data: dataS, 
													cache: false, 
													dataType: 'html',
													success: function(response) 
													{ 		
														if(response == 0){
															//$('#motor_model').val('');
															alert("Please Choose another model");
															
															
														}else{
															//alert("HI");
															 /* Send the data using post with element id name and name2*/
    
     var parameter = JSON.stringify({ "passenger_id":$('#passenger_id').val(),"latitude":$('#latitude').val(),"longitude":$('#longitude').val(),"motor_model":$('#motor_model').val(),"pickup_time":picktime,"pickupplace":$('#pickupplace').val(),"dropplace":$('#dropplace').val(),"drop_latitude":$('#drop_latitude').val(),"drop_longitude":$('#drop_longitude').val(),"cityname":$('#cityname').val(),"sub_logid":$('#sub_logid').val(),"now_after": now_after,"no_passengers":$('#no_passengers').val(),"max_luggage":$('#max_luggage').val(),"airport_pickup":"1","airport_flight_number":$('#airport_flight_number').val(),"airport_flight_time":picktime,"airport_notes":$('#airport_notes').val()});
     alert(parameter);
     var posting = $.post( url,parameter );

      posting.done(function( data ) {
		  var obj = $.parseJSON(data);
			if(obj.status== 1){
				 window.location.href = "<?php echo URL_BASE; ?>passengers/dashboard";
			 }else {
				alert(obj.message);	 
			}
			
		});
	
	
														}
													} 
													 
												});	
		
		/** Check model based allowed person and luggage **/
			
     
        return false;
    });
 

    
</script>

<script>
jQuery(function($) {
    // Asynchronously Load the map API 
    var script = document.createElement('script');  
    script.src = "https://maps.googleapis.com/maps/api/js?key=<?php echo GOOGLE_MAP_API_KEY; ?>&amp;sensor=false&callback=initialize&libraries=places";
    document.body.appendChild(script);
});

function initialize() 
	{ 	var map;
		var bounds = new google.maps.LatLngBounds();
			var markers=[];
		var mapOptions = {
			mapTypeId: 'roadmap'
		};
		
			 <?php if(count($all_company_map_list)>0) {
		$a=0;
		$b=5 ;	
			 foreach($all_company_map_list as $v)
			{ 
				for($b=0;$b<6;$b++)
				{
					if($b==0)
					{  ?>
						markers [<?php echo $a; ?>] = new Array(5);
						markers[<?php echo $a; ?>][<?php echo $b; ?>]=<?php echo $v['coordinates'][0]; ?>;
					<?php }
					if($b==1)
					{ ?>
						markers[<?php echo $a; ?>][<?php echo $b; ?>]=<?php echo $v['coordinates'][1]; ?>;
					<?php }
					if($b==2)
					{ ?>
						markers[<?php echo $a; ?>][<?php echo $b; ?>]='<?php echo '<div class="info_content"><b>'.__('driver_name').'</b> : '.$v['name']; ?>';
					<?php }
					if($b==3)
					{  if(!empty($v['profile_picture']) && file_exists(DOCROOT.'public/uploads/driver_image/'.$v['profile_picture'])){ ?>//$driver_status =($v['driver_status']=='F')?__('Free'):(($v['driver_status']=='A')?"<span>".__('Hired')."</span>":(($v['driver_status']=='B')?__('break_in'):__('service_in')));
						markers[<?php echo $a; ?>][<?php echo $b; ?>]='<?php echo '&nbsp&nbsp&nbsp<img width=40 height=40 src="'.URL_BASE.'/public/uploads/driver_image/'.$v['profile_picture'].'" >';?>';
						<?php } else { ?>
								markers[<?php echo $a; ?>][<?php echo $b; ?>]='<?php echo '&nbsp&nbsp&nbsp<img width=25 height=25 src="'.URL_BASE.'/public/images/no_image.png" >';?>';
						
					<?php } }
					if($b==4)
					{ $shift_status=($v['shift_status']=='IN')?__('in'):__('out');?>
						//markers[<?php echo $a; ?>][<?php echo $b; ?>]='<?php echo '<b style="color:#0F9ED6;">'.$shift_status.'</b></p></div></div>'; ?>';
					<?php }
					if($b==5){
					if($v['driver_status']=='F' && $v['shift_status']=='OUT'){ ?>
						markers[<?php echo $a; ?>][<?php echo $b; ?>]='<?php echo PUBLIC_IMGPATH.'/caricon.png'; ?>';
					<?php }elseif($v['driver_status']=='A'){ ?>
						markers[<?php echo $a; ?>][<?php echo $b; ?>]='<?php echo PUBLIC_IMGPATH.'/caricon.png'; ?>';
					<?php }else{ ?>
						markers[<?php echo $a; ?>][<?php echo $b; ?>]='<?php echo PUBLIC_IMGPATH.'/caricon.png'; ?>';
					<?php }
					}
				}
				$a++;
			 }
		}
		?>   
		    
		// Display a map on the page
		map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
		map.setTilt(45);
		if(markers != "")
		{
			  for( i = 0; i < markers.length; i++ ) { 
			// Display multiple markers on a map
			var infoWindow = new google.maps.InfoWindow(), marker, i;
			var iconBase = '<?php echo PUBLIC_IMGPATH.'/' ; ?>';
				   
			// Loop through our array of markers & place each one on the map  
		   
				var position = new google.maps.LatLng(markers[i][0], markers[i][1]);
				bounds.extend(position);
				marker = new google.maps.Marker({
					position: position,
					map: map,
					animation: google.maps.Animation.DROP,
					//icon: iconBase + 'car.png',
					icon: markers[i][5],
					//closeclick:true,
					//title: markers[i][2]
				});
				// Allow each marker  to have an info window
				google.maps.event.addListener(marker, 'click', (function(marker, i) {
					return function() {
						infoWindow.setContent(markers[i][2]+markers[i][3]);//+'		'+markers[i][4]);
						infoWindow.open(map, marker);
					}
				})(marker, i));
				;
				// Automatically center the map fitting all markers on the screen
				map.fitBounds(bounds);
				
				
			}
		}
		else
		{
			$('#on_going_trip_map').html('No drivers found');	
		}
		
		// Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
		var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
			//this.setZoom(12);
			google.maps.event.removeListener(boundsListener);
		});
		
		var input2 = document.getElementById('drop_location');
		var input1 = document.getElementById('pickup_location');

		var autocomplete1 = new google.maps.places.Autocomplete(input2);
		var autocomplete = new google.maps.places.Autocomplete(input1);

		google.maps.event.addListener(autocomplete1, 'place_changed', function() {		
			var place = autocomplete1.getPlace();

			if (!place.geometry) {
			  // Inform the user that the place was not found and return.
			  input.className = 'notfound';
			  return;
			}
			
			//Assinging the Locations While Auto Suggestions			
			
		});
		google.maps.event.addListener(autocomplete, 'place_changed', function() {		
			var place = autocomplete.getPlace();

			if (!place.geometry) {
			  // Inform the user that the place was not found and return.
			  input.className = 'notfound';
			  return;
			}
			
			//Assinging the Locations While Auto Suggestions			
			
		});


		
	}
	
	
</script>
