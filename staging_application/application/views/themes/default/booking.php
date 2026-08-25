<?php defined('SYSPATH') OR die('No direct access allowed.'); 
$chk_cnt_fav = count($favourite_list);

?>
<!-- Multiple Date Picker -->
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/simpledatetimepicker/MultiDatesPicker v1.6.3/js/jquery-ui-1.11.1.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE;?>public/js/simpledatetimepicker/MultiDatesPicker v1.6.3/css/mdp.css">
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/simpledatetimepicker/MultiDatesPicker v1.6.3/jquery-ui.multidatespicker.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/jquery.ddslick.min.js"></script>
<!-- Multiple Date Picker -->
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
	<div class="bookin_section">
		<div class="contact_us_block" id="contact_block_show">                 
				<div class="key_block booking_heading text-center">                    
					 <!--<h1><?php echo __('book_now'); ?></h1>  -->
					<?php 
					$lang="en";$lang=isset($_SESSION['lang'])?$_SESSION['lang']:"en";
					if($lang == 'en') { ?>
					<h1>You have choice to Select Cars</h1>
					<small>And <span>Book a Taxi</span> any occasion</small>
					<?php } else { ?>
						<h1>لديك اختيار لتحديد السيارات وحجز سيارات أجرة لأي مناسبة</h1>
					<?php } ?>
				</div>                 
			</div>     
		    <div class="contact_us_outer">
		        <div class="key_block book_sec">
					<!-- Nav tabs -->
					<div class="booking_tab text-center">

					    <ul class="nav nav-tabs text-center <?php if($get_child_count == 0 ) { ?>child_trip_ul <?php } ?>" id="myTabs" role="tablist"> 
					    	<li role="presentation" class="active"><a  id="1" href="#normaltrip" aria-controls="normaltrip" role="tab" data-toggle="tab"><?php echo __('normal_trip_booking'); ?></a></li>
					    	<?php if($get_child_count > 0 ) { ?>
					    	<li  role="presentation"><a id="2" href="#childtrip" aria-controls="childtrip" role="tab" data-toggle="tab"><?php echo __('child_trip_booking'); ?></a></li>
					    	<?php } ?>
					    	<!--<li role="presentation"><a id="3"  href="#airporttrip" aria-controls="airporttrip" role="tab" data-toggle="tab"><?php echo __('airport_trip_booking'); ?></a></li>-->
					    </ul>

					  <!-- Tab panes -->
					    <form method="POST" name="frmlogin" id="booking" action=""  >
							<div class="registration mt30"  style="width:100%;">
								<div class="clearfix"></div>
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="normaltrip">
									
									<div class="input_bx selectings">
										<select name="payment_type" id="payment_type">
										<option value=""><?php echo __('payment_type');?></option>
										<option value="1"><?php echo __('cash');?></option>
										<option value="2"><?php echo __('credit_card');?></option>
										<option value="3"><?php echo __('pay_by_knet');?></option>
								
										</select>
										<label class="control-group err"><span  style="cursor:text;" id="payment_type_error"></span></label>
									</div>
									<!-- PROMO CODE -->
									<div class="input_bx">
											<input class="form-control" type="text" name="promocode_normal" id="promocode_normal"  placeholder="<?php echo __('promocode'); ?>" value=""/>
											<label class="control-group err"><span style="cursor:text;" id="promocode_normal_error"></span></label>
										</div>	
									
									<!-- PROMO CODE -->
									
									
									</div>
									<div role="tabpanel" class="tab-pane" id="childtrip">
										<div class="input_bx selectings">
										<select name="payment_type_child" id="payment_type_child">
										<option value=""><?php echo __('payment_type');?></option>
										<option value="1"><?php echo __('cash');?></option>
										<option value="2"><?php echo __('credit_card');?></option>
										<option value="3"><?php echo __('pay_by_knet');?></option>
								
										</select>
										<label class="control-group err"><span  style="cursor:text;" id="payment_type_child_error"></span></label>
									</div>
									<!-- PROMO CODE -->
									<div class="input_bx">
											<input class="form-control" type="text" name="promocode_child" id="promocode_child"  placeholder="<?php echo __('promocode'); ?>" value=""/>
											<label class="control-group err"><span style="cursor:text;" id="promocode_child_error"></span></label>
										</div>	
									<!-- PROMO CODE -->
										<div class="input_bx selectings">
											<select name="member_type" id="member_type" onchange='change_member_type(this.value);'>
												  <option value=''>Choose Member Type</option>
												  <?php foreach($member_type as $member) { ?>
													   <option value="<?php echo $member['_id'];?>"><?php echo $member['account_type'];?></option>
												
													  <?php } ?>
											</select>	  
											<label class="control-group err"><span style="cursor:text;" id="member_type_error"><?php if(isset($errors)){ echo array_key_exists("member_type",$errors)?$errors["member_type"]:""; } ?> </span></label>
										
										</div> 
										
										 <div class="input_bx member_list_div selectings" style="display:none">
											 
										 </div> 
									</div>
									<div role="tabpanel" class="tab-pane" id="airporttrip">
										<div class="input_bx selectings">
										<select name="payment_type_air" id="payment_type_air">
										<option value=""><?php echo __('payment_type');?></option>
										<option value="1"><?php echo __('cash');?></option>
										<option value="2"><?php echo __('credit_card');?></option>
										<option value="3"><?php echo __('pay_by_knet');?></option>
								
										</select>
										<label class="control-group err"><span  style="cursor:text;" id="payment_type_air_error"></span></label>
									</div>
									<!-- PROMO CODE -->
									<div class="input_bx">
											<input class="form-control" type="text" name="promocode_airport" id="promocode_airport"  placeholder="<?php echo __('promocode'); ?>" value=""/>
											<label class="control-group err"><span style="cursor:text;" id="promocode_airport_error"></span></label>
										</div>	
									<!-- PROMO CODE -->
									
										<div class="input_bx">
											<input class="form-control" type="text" name="airport_flight_number" id="airport_flight_number"  placeholder="<?php echo __('airport_flight_number'); ?>" value=""/>
											<label class="control-group err"><span style="cursor:text;" id="airport_flight_number_error"></span></label>
										</div> 
											
										<div class="input_bx">
											<input class="form-control" type="text" name="airport_flight_time" id="airport_flight_time"  placeholder="<?php echo __('airport_flight_time'); ?>" value=""/>
											<label class="control-group err"><span style="cursor:text;" id="airport_flight_time_error"></span></label>
										</div> 
										<div class="input_bx">
											<input class="form-control" type="text" name="no_passengers" id="no_passengers"  placeholder="<?php echo __('no_passengers'); ?>" value=""/>
											<label class="control-group err"><span style="cursor:text;" id="no_passengers_error">
										</div> 
										 
										<div class="input_bx">
											 <input class="form-control" type="text" name="max_luggage" id="max_luggage"  placeholder="<?php echo __('max_luggage'); ?>" value=""/>
											 <label class="control-group err"><span style="cursor:text;" id="max_luggage_error"></span></label>
										</div> 
										
										<div class="input_bx air_notes">
											<input class="form-control" type="text" name="airport_notes" id="airport_notes"  placeholder="<?php echo __('airport_notes'); ?>" value=""/>
											<label class="control-group err"><span style="cursor:text;" id="airport_notes_error"></span></label>
										</div>	
										
									</div>	
									
									<div class="clearfix"></div>
									<div class="outer_picks">
									<div class="input_bx">
										<input type="text" name="pickupplace" value="" id="pickupplace" placeholder="<?php echo __('pickupplace'); ?>"/> <span id="pick_fav" class="fav_white"> favorite</span>
										<input type="hidden" name="latitude" value="" placeholder="latitude" id="latitude"/>
										<input type="hidden" name="longitude" value=""  id="longitude"/>
											<?php /*  <input type="text" class="form-control" id="pickupplace" name="pickupplace" autocomplete="off"  placeholder="<?php echo __('enter_currentlocation'); ?>" /> */?>
										<label class="control-group err"> <span style="cursor:text;" id="pickupplace_error"><?php if(isset($errors)){ echo array_key_exists("pickupplace",$errors)?$errors["pickupplace"]:""; } ?> </span></label>
									</div> 
											
                                    <div class="input_bx">
										 <?php /* <input type="text" class="form-control" id="dropplace" name="dropplace" autocomplete="off" placeholder="<?php echo __('enter_drop_location'); ?>" /> */ ?>
										 
										 <input type="text" name="dropplace" value="" id="dropplace" placeholder="<?php echo __('dropplace'); ?>" /><span id="drop_fav" class="fav_white"> favorite</span>
										<input type="hidden" name="drop_latitude" value="" placeholder="latitude" id="drop_latitude"/>
										<input type="hidden" name="drop_longitude" value="" placeholder="longitude" id="drop_longitude"/>
										<label class="control-group err"><span style="cursor:text;" id="dropplace_error"><?php if(isset($errors)){ echo array_key_exists("dropplace",$errors)?$errors["dropplace"]:""; } ?> </span></label>
									</div> 
									</div> 
									<!-- Book Now -->
									<div class="pickup_time_out0">
									<div class="input_bx pickup_time_div0">
												<input type="text" id="pick_ntime" name="pick_ntime" value="" placeholder="<?php echo __('pickup_time'); ?>">
												<label class="control-group err"><span style="cursor:text;" id="pick_ntime_error"><?php if(isset($errors)){ echo array_key_exists("pick_ntime_error",$errors)?$errors["pick_ntime"]:""; } ?> </span></label>
										</div>
									</div> 
									<!-- Book Now -->
								
									<!--- Book Later -->
									<div class="pickup_time_out1">
									
									  <div class="input_bx pickup_time_div" style="display:none;">
											  <input class="form-control" type="text" name="pickup_date" id="pickup_date"  placeholder="<?php echo __('pickup_date_time'); ?>" value="">
												
											<label class="control-group err"><span style="cursor:text;" id="pickup_time_error"><?php if(isset($errors)){ echo array_key_exists("pickup_time",$errors)?$errors["dropplace"]:""; } ?> </span></label>
											
									</div> 
									</div> 
									<!--- Book Later -->
										<!--- Book Recurrent -->
									<div class="pickup_time_out">
										<div class="input_bx pickup_time_div2" style="display:none;">
												<input type="text" id="pick_rtime" name="pick_rtime" value="" placeholder="<?php echo __('pickup_time'); ?>">
												<label class="control-group err"><span style="cursor:text;" id="pick_rtime_error"><?php if(isset($errors)){ echo array_key_exists("pick_rtime_error",$errors)?$errors["pick_rtime"]:""; } ?> </span></label>
										</div> 
									
										<div class="input_bx pickup_time_div2" style="display:none;">
											<input class="form-control" type="text" name="pickup_date2" id="pickup_date2"  placeholder="<?php echo __('pickup_date'); ?>" value="">
												
											<label class="control-group err"><span style="cursor:text;" id="pickup_date2_error"><?php if(isset($errors)){ echo array_key_exists("pickup_date2_error",$errors)?$errors["pickup_date2"]:""; } ?> </span></label>
									</div>
									</div>
									
									<!--- Book Later -->
									
									
									
									
									
									
									<!-- For Booking Need Some Additional Fields -->
									<input type="hidden" name="pickup_time" id="pickup_time" value="<?php echo date('Y-m-d');?>" />
									<input type="hidden" name="passenger_id" id="passenger_id" value="<?php echo $userid;?>" />
									<input type="hidden" name="motor_model" id="motor_model" value="" />
									<input type="hidden" name="now_after" id="now_after" value="0" />
									<input type="hidden" name="sub_logid" id="sub_logid" value="" />
									<input type="hidden" name="cityname" id="cityname" value="" />
									<input type="hidden" name="frm_type" id="frm_type" value="" />
									
									<input type="hidden" name="chos_child" id="chos_child" value="0" />
									<input type="hidden" name="chos_child1" id="chos_child1" value="0" />
									<input type="hidden" name="trip_type" id="trip_type" value="1" />
									<input type="hidden" name="airport_trip" id="airport_trip" value="0" />
									
									
									<input type="hidden" name="fav_from" id="fav_from" value="0" />
									<input type="hidden" name="fav_from_plist" id="fav_from_plist" value="0" />
									<input type="hidden" name="fav_from_dlist" id="fav_from_dlist" value="0" />
									
									
									
									<!-- For Booking Need Some Additional Fields -->
									
									<ul class="bookin_type bookin_type<?php echo count($model_list);?>">
									<?php foreach($model_list as $model) { ?>
										<li id="<?php echo $model['_id'];?>">
											<div class="block">
												<a href="#" class="c<?php echo $model['_id'];?>"></a>
											</div>
											<span><?php $lang="en";$lang=isset($_SESSION['lang'])?$_SESSION['lang']:"en";
					 echo ($lang == 'en')?$model['model_name']:$model['model_name_ar'];?></span>
										</li>
										
									<?php } ?>
									<label class="control-group err"><span style="cursor:text;" id="model_error"> </span></label>

									</ul>
									
									
									<div class="confirm text-center">
										<input type="hidden" name="budget" value="" >
										
										<button  name="submit_booknow" onclick="contact_validations(1);" id="submit_booknow" class="btn btn-inverse booking" type="button" title="<?php echo __('book_now');?>"><?php echo __('book_now');?></button>
										<button  name="submit_booklater" onclick="contact_validations(2);" id="submit_booklater" class="btn btn-inverse booking" type="button" title="<?php echo __('book_later');?>" ><?php echo __('book_later');?></button>
										<!--<button  name="submit_bookrecurring" onclick="contact_validations(3);" id="submit_bookrecurring" class="btn btn-inverse booking" type="button" title="<?php echo __('book_recurrent');?>" ><?php echo __('book_recurrent');?></button>-->
										<?php /*<input  name="reset_company" class="btn btn-inverse" type="reset" title="<?php echo __('button_reset');?>" value="<?php echo __('button_reset');?>" />*/?>
									</div>
								</div>				    
					</div>
					<!-- Nav tabs ends -->
					

					</div>
                </div>
            </div>
        </div>    
 <!-- POPUP FOR FAV -->
<div id="rating_pop">
    <h2><?php echo __('favourites'); ?></h2>               
    <div class="login_total">                                               
        <div class="login_form">
            <ul>
                <li><span><?php echo __('fav_type'); ?>:</span>	<input type="text" name="type" id="type" value=""></li>
                 <li><div class="fav_icons_left"><?php echo __('fav_icon'); ?>:</div>
				 <select id="fav_icon" name="fav_icon">
				  <?php foreach($favarray as $value) { ?>
					<option value="<?php echo $value; ?>" data-imagesrc="<?php echo URL_BASE.'public/images/'.ucfirst($value).'.png'; ?>"><?php echo ucfirst($value); ?></option>        
				 <?php } ?>
				</select>
                 
                 </li> 
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
                 <?php 
                 if(count($favourite_list)>0){
                 foreach($favourite_list as $fav) {
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
												 <li class="<?php echo $fav['fav_icon']; ?>">
												 <?php 
												 $file_path = DOCROOT.PUBLIC_IMAGES_FOLDER.ucfirst($fav['fav_icon']).".png";
											
												 if(file_exists($file_path)) { ?>
												 <img src="<?php echo URL_BASE.PUBLIC_IMAGES_FOLDER.ucfirst($fav['fav_icon']).".png";?>">
												 <?php }else { ?>
													 <img src="<?php echo URL_BASE.PUBLIC_IMAGES_FOLDER;?><?php echo "Others.png"; ?>">
												<?php } ?>
												 <a onclick="change_fav_location('<?php echo $sel_lat_lng;?>')"><?php echo $get_place;?></a></li>
												
												 
											 <?php } }else { echo "Sorry!! No Favourites Right Now";}?>
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
	 $('#airport_flight_time').appendDtpicker({
		"closeButton": true,
		"autodateOnStart": false,
		"futureOnly": true
	});

	$('.bookin_type li').click(function() {
		var model_id=$(this).attr('id');
		$('.bookin_type li').removeClass( "active" )
		$(this).addClass( "active" )
		$('#motor_model').val(model_id);
		$('#model_error').html('')

		
	});
		function toTimestamp(year,month,day,hour,minute,second){
		 var datum = new Date(Date.UTC(year,month-1,day,hour,minute,second));
		 return datum.getTime()/1000;
		}
		var dt = new Date();
		var sum = 1;
		var lateral_time = <?php echo BOOK_LATERAL_TIME;?>;
		var twoDigitMonth1 = dt.getMonth()+"";
		sum += parseInt(twoDigitMonth1);sum="0"+sum;
		var twoDigitDate = dt.getDate()+"";if(twoDigitDate.length==1)	twoDigitDate="0" +twoDigitDate;
		//var later_time = dt.getFullYear()+"-"+sum+"-"+twoDigitDate+" "+(dt.getHours() + lateral_time ) + ":" + dt.getMinutes();
		var later_end_time = (dt.getHours() + lateral_time ) + ":" + dt.getMinutes();
		//alert(later_end_time);
		var book_later_time = toTimestamp(dt.getFullYear(),sum,twoDigitDate,(dt.getHours() + lateral_time ),dt.getMinutes(),dt.getSeconds());
		$('#pick_fav').click(function() {
		$('#fav_from').val(1);	
		/* UPDATE FAV */
		if($('#latitude').val() != '' && $('#longitude').val() !='') {
		var dataS = "passenger_id="+$('#passenger_id').val()+"&d_fav_latitude="+$('#latitude').val()+"&d_fav_longtitute="+$('#longitude').val()+"&type=1";
		var response;
		$.ajax
				({ 			
					type: "POST",
					url: SrcPath+"passengers/check_fav_based_search", 
					data: dataS, 
					cache: false, 
					dataType: 'html',
					success: function(response) 
					{
						if(response == 1){
							$('#details_pop').hide(); 
							$('#type').val('');
							fav_pop();
						}else{
							fav_pop_list();
						}
						
					}
				});
		}else{
			fav_pop_list();
			
		}										
		/* UPDATE FAV */
		
		/*var fav_from_plist = $('#fav_from_plist').val();	
		if($('#latitude').val() == '' && $('#longitude').val() =='') {
		
		fav_pop_list();
		}else if(fav_from_plist == 1){
			fav_pop_list();
		}else { // Add Favourite
			$('#type').val('');
			fav_pop();
		
		} */
	}); 
	$('#drop_fav').click(function() {
		$('#fav_from').val(2);
		/* UPDATE FAV */
		if($('#drop_latitude').val() != '' && $('#drop_longitude').val() !='') {
		var dataS = "passenger_id="+$('#passenger_id').val()+"&d_fav_latitude="+$('#drop_latitude').val()+"&d_fav_longtitute="+$('#drop_longitude').val()+"&type=2";
		var response;
		$.ajax
				({ 			
					type: "POST",
					url: SrcPath+"passengers/check_fav_based_search", 
					data: dataS, 
					cache: false, 
					dataType: 'html',
					success: function(response) 
					{
						if(response == 1){
							$('#details_pop').hide(); 
							$('#type').val('');
							fav_pop();
						}else{
							fav_pop_list();
						}
						
					}
				});
		}else{
			
			
			fav_pop_list();
			
		}									
		/* UPDATE FAV */
		
			
		/*var fav_from_dlist = $('#fav_from_dlist').val();	
		if($('#drop_latitude').val() == '' && $('#drop_longitude').val() =='') {
		
		fav_pop_list();
		}else if(fav_from_dlist == 2){
			fav_pop_list();
		}else { // Add Favourite
			$('#type').val('');
			fav_pop();
		}*/
		
	});
	function change_member_type(val){
	url = '<?php echo URL_BASE;?>/passengers/get_members_list';
	var posting = $.post( url, { passenger_id: $('#passenger_id').val(), account_type: val } );
	posting.done(function( data ) {
		if(data != '0'){
		$('.member_list_div').show();$('#chos_child').val(1);
		$( ".member_list_div" ).html( data );
		
		}
		else{$('.member_list_div').hide();$('#chos_child').val(0)}
		}); 




	} 
	function set_passenger(new_id){
		$('#passenger_id').val(new_id);
	}
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
				$( "#pick_fav" ).removeClass( "fav_white" );
				$( "#pick_fav" ).addClass( "fav_yellow" );
				$('#fav_from_plist').val(1);
				}if(loc == 2){
				$('#drop_latitude').val(str_array[1]);
				$('#drop_longitude').val(str_array[2]);
				$('#dropplace').val(str_array[3]);
				$( "#drop_fav" ).removeClass( "fav_white" );
				$( "#drop_fav" ).addClass( "fav_yellow" );
				$('#fav_from_dlist').val(2);
				}
				/*if(str_array[0] != 'P' &&  str_array[0] != 'D' ){
				 $( "#pick_fav" ).removeClass( "fav_white" );
				 $( "#drop_fav" ).removeClass( "fav_white" );
					$( "#pick_fav" ).addClass( "fav_yellow" );
					$( "#drop_fav" ).addClass( "fav_yellow" );
			    $('#latitude').val(str_array[0]);
				$('#longitude').val(str_array[1]);	
				$('#drop_latitude').val(str_array[2]);
				$('#drop_longitude').val(str_array[3]);
				$('#pickupplace').val(str_array[4]);
				$('#dropplace').val(str_array[5]);
			}*/
		}
	
	$('#pickup_date').appendDtpicker({
		"closeButton": true,
		"autodateOnStart": false,
		"futureOnly": true
		//"minTime":later_time
	});
	$('#pickup_date2').multiDatesPicker({
	minDate: 1
});
	$('#pick_rtime').appendDtpicker({
		"timeOnly": true,
		
		//"minTime":later_time,
		//"futureOnly": true,
		"autodateOnStart": false,
		"closeButton": true
	});
	$('#pick_ntime').appendDtpicker({
		"timeOnly": true,
		"maxTime":later_end_time,
		"futureOnly": true,
		"autodateOnStart": false,
		"closeButton": true
	});
	
	function contact_validations(value){
		
		var cloc= document.frmlogin.pickupplace.value.trim();
		var dloc= document.frmlogin.dropplace.value.trim();
		var pickup_date= document.frmlogin.pickup_date.value.trim();
		var pickup_date2= document.frmlogin.pickup_date2.value.trim();
		var pick_rtime= document.frmlogin.pick_rtime.value.trim();
		var pick_ntime= document.frmlogin.pick_ntime.value.trim();
		var motor_model= document.frmlogin.motor_model.value.trim();
		
		
		
		
		var is_child = $('#chos_child').val();
		var trip_type = $('#trip_type').val();
		
		var r=b=a=e=f=g=s=t=v=0;
		if(trip_type == 2){ //is_child == 1  && 
			$('#chos_child').val(1);
		
		var kk = document.getElementById("member_type");
		var member_type = kk.options[kk.selectedIndex].value;
		if(member_type == ''){
            $("#member_type_error").html("<?php echo __('choose_member_type');?>");
        }
        else{
            $("#member_type_error").html(""); e=3;
        }
		var mm = document.getElementById("member_list");
		var member_list = mm.options[mm.selectedIndex].value;
		//alert(member_list);
		if(member_list == ''){
            $("#member_list_error").html("<?php echo __('choose_member_list');?>");
        }
        else{
            $("#member_list_error").html(""); f=4;
        }
        var ll1 = document.getElementById("payment_type_child");
		var payment_type1 = ll1.options[ll1.selectedIndex].value;
		if(payment_type1 == ''){
			  $("#payment_type_child_error").html("<?php echo __('choose_payment_type');?>");
        }
        else{
            $("#payment_type_child_error").html(""); b=2;
        }
        /* PROMOCODE CHILD TRIP */
        
		/*var promocode1 = document.frmlogin.promocode_child.value.trim();
		if(promocode1 == ''){
			  $("#promocode_child_error").html("<?php echo __('choose_promocode');?>");
        }
        else{
            $("#promocode_child_error").html(""); r=14;
        }*/
        /* PROMOCODE CHILD TRIP */
        
        
		if(b==2 && e==3 && f==4 /*&& r==14*/) {
			$('#chos_child1').val(1);
		}
											
		}//Child Trip
		if(trip_type == 3){
			var flight_number = document.frmlogin.airport_flight_number.value.trim();
			var flight_time = document.frmlogin.airport_flight_time.value.trim();
			var no_passengers = document.frmlogin.no_passengers.value.trim();
			var max_luggage = document.frmlogin.max_luggage.value.trim();
			var airport_notes = document.frmlogin.airport_notes.value.trim();
			var  m=n=o=p=q=x=y=0;
			if(flight_number == ''){
				$("#airport_flight_number_error").html("<?php echo __('enter_flight_number');?>");
			}else{
				 $("#airport_flight_number_error").html("");m=1;
			}
			if(flight_time == ''){
				$("#airport_flight_time_error").html("<?php echo __('enter_flight_time');?>");
			}else{
				 $("#airport_flight_time_error").html("");n=2;
			}
			  if(no_passengers == '' || no_passengers == 0){
				$("#no_passengers_error").html("<?php echo __('enter_no_passengers');?>");
			}
			else if(isNaN(no_passengers)){
				$("#no_passengers_error").html("<?php echo __('enter_no_passengers');?>");	
			}
			else{
				$("#no_passengers_error").html(""); o=3;
			}
			if(max_luggage == '' || max_luggage == 0){
				$("#max_luggage_error").html("<?php echo __('max_luggage');?>");
			}else if(isNaN(max_luggage)){
				$("#max_luggage_error").html("<?php echo __('max_luggage');?>");	
			}
			else{
				$("#max_luggage_error").html(""); p=4;
			}
			if(airport_notes == ''){
				$("#airport_notes_error").html("<?php echo __('airport_notes');?>");
			}
			else{
				$("#airport_notes_error").html(""); x=5;
			}
			var ll2 = document.getElementById("payment_type_air");
			var payment_type2 = ll2.options[ll2.selectedIndex].value;
			if(payment_type2 == ''){
			  $("#payment_type_air_error").html("<?php echo __('choose_payment_type');?>");
			}
			else{
				$("#payment_type_air_error").html(""); b=2;
			}
			
			/** PROMOCODE AIRPORT **/
			/*var promocode2 = document.frmlogin.promocode_airport.value.trim();
			if(promocode2 == ''){
			  $("#promocode_airport_error").html("<?php echo __('choose_promocode');?>");
			}
			else{
				$("#promocode_airport_error").html(""); r=14;
			}*/
			
			
			/** PROMOCODE AIRPORT **/
			if(b==2 && m==1 && n==2 && o==3 && p==4 && x==5 /*&& r==14*/){
				$('#airport_trip').val(1);
			}
		}
		var ll0 = document.getElementById("payment_type");
		var payment_type0 = ll0.options[ll0.selectedIndex].value;
		if(payment_type0 == ''){
		  $("#payment_type_error").html("<?php echo __('choose_payment_type');?>");
		}
		else{
			$("#payment_type_error").html(""); b=2;
		}
		
		/*	var promocode0 = document.frmlogin.promocode_normal.value.trim();
			if(promocode0 == ''){
			  $("#promocode_normal_error").html("<?php echo __('choose_promocode');?>");
			}
			else{
				$("#promocode_normal_error").html(""); r=14;
			}
			*/
		if(motor_model == ''){
			$('#model_error').html('Choose Any Type of  taxi model here');
			
		}else{
			
			$('#model_error').html('');a=1;
		}
		
		if(cloc == ''){
            $("#pickupplace_error").html("<?php echo __('enter_pickupplace');?>");
        }
        else{
            $("#pickupplace_error").html(""); t=6;
        }
		if(dloc == ''){
            $("#dropplace_error").html("<?php echo __('enter_dropplace');?>");
        }
        else{
            $("#dropplace_error").html(""); v=7;
        }
       /* if(payment_type == ''){
			  $("#payment_type_error").html("<?php echo __('choose_payment_type');?>");
        }
        else{
            $("#payment_type_error").html(""); b=2;
        } */
        if(value == 1){
			$('.pickup_time_div0').show();
			$('.pickup_time_div').hide();
			$('.pickup_time_div2').hide();
			$('.pickup_time_out').hide();
			$('.pickup_time_out1').hide();
			$('.pickup_time_out0').show();
			
			/*************/
			   
			   
			   if(pick_ntime == '' ){
				  $("#pick_ntime_error").html("<?php echo __('pickup_time');?>");
				}else if(pick_ntime != ''){// && (pickup_date.getTime() >= book_later_time)
				
				 var ptime = $('#pick_ntime').val()+':00';
			   var picktime = $('#pickup_time').val();
			   var str_array = picktime.split('-');
			   var pickup_date = str_array[0]+'-'+str_array[1]+'-'+str_array[2]+' '+ptime;
				
				var split_date2 = pickup_date.split(' ');
				var split_date1 = split_date2[0];
				var split_date = split_date1.split('-');
				var split_time1 = split_date2[1];
				var split_time = split_time1.split(':');
				
			   var pickup_date_time = toTimestamp(split_date[0],split_date[1],split_date[2],split_time[0],split_time[1],'00');
			if(pickup_date_time >= book_later_time){
			$("#pick_ntime_error").html("<?php echo __('valid_date_time_new');?>");
			}else {
				$("#pick_ntime_error").html(""); z=10;
			}
			}
			else {
				$("#pick_ntime_error").html(""); z=10;
			}
			/*************/
			
			
			
			if(b== 2 && a== 1 && t==6 && v==7 && z==10){
				var chk_bef_sub = $('#chos_child1').val();
				var chk_bef_sub2 = $('#airport_trip').val();
				if(is_child == 0){
					$('form#booking').submit();
				}else{
					if(chk_bef_sub == 1 && is_child == 1){
						$('form#booking').submit();
					}
					else if(chk_bef_sub2 == 1 && trip_type == 3){
						$('form#booking').submit();
					}
					
				}
			}
		
        }else if(value == 2){
			$('.pickup_time_div0').hide();
			$('.pickup_time_div').show();
			$('.pickup_time_div2').hide();
			$('.pickup_time_out').hide();
			$('.pickup_time_out1').show();
			$('.pickup_time_out0').hide();
			
			$('#frm_type').val('2')
			if(pickup_date == '' ){
				  $("#pickup_time_error").html("<?php echo __('pickup_date_time');?>");
			}else if(pickup_date != ''){// && (pickup_date.getTime() >= book_later_time)
				//var dt = new Date(pickup_date);
				//2016-06-27 17:30
				var split_date2 = pickup_date.split(' ');
				var split_date1 = split_date2[0];
				var split_date = split_date1.split('-');
				var split_time1 = split_date2[1];
				var split_time = split_time1.split(':');
				
			   var pickup_date_time = toTimestamp(split_date[0],split_date[1],split_date[2],split_time[0],split_time[1],'00');
			if(pickup_date_time <= book_later_time){
			$("#pickup_time_error").html("<?php echo __('valid_date_time');?>");
			}else {
				$("#pickup_time_error").html(""); s=5;
			}
			}
			else {
				$("#pickup_time_error").html(""); s=5;
			}
			if(b== 2 && a== 1 && t==6 && v==7 && s==5){
				var chk_bef_sub = $('#chos_child1').val();
				var chk_bef_sub2 = $('#airport_trip').val();
				
				if(is_child == 0 && trip_type != 3 ){
					$('form#booking').submit();
				}else{
					if(chk_bef_sub == 1 && is_child == 1){
						$('form#booking').submit();
					}else if(chk_bef_sub2 == 1 && trip_type == 3){
						$('form#booking').submit();
					}
					
				}
				
				
				
			}
		}else if(value == 3){
			$('.pickup_time_div0').hide();
			$('.pickup_time_div2').show();
			$('.pickup_time_div').hide();
			$('.pickup_time_out1').hide();
			$('.pickup_time_out0').hide();
			$('.pickup_time_out').show();
		
			$('#frm_type').val('3')
			if(pickup_date2 == '' ){
				  $("#pickup_date2_error").html("<?php echo __('pickup_date');?>");
			}else {
				$("#pickup_date2_error").html(""); g=4;
			}
			if(pick_rtime == '' ){
				  $("#pick_rtime_error").html("<?php echo __('pickup_time');?>");
			}else {
				$("#pick_rtime_error").html(""); g=4;
			}
			if(b== 2 && a== 1 && t==6 && v==7 && g==4 ){
				var chk_bef_sub = $('#chos_child1').val();
				var chk_bef_sub2 = $('#airport_trip').val();
				if(is_child == 0 && trip_type != 3 ){
					$('form#booking').submit();
				}else{
					if(chk_bef_sub == 1 && is_child == 1){
						$('form#booking').submit();
					}
					else if(chk_bef_sub2 == 1 && trip_type == 3){
						$('form#booking').submit();
					}
					
				}
				
			}
			
		}else{
			if(b== 2 && a== 1 && t==6 && v==7){
				var chk_bef_sub = $('#chos_child1').val();
				var chk_bef_sub2 = $('#airport_trip').val();
				if(is_child == 0){
					$('form#booking').submit();
				}else{
					if(chk_bef_sub == 1 && is_child == 1){
						$('form#booking').submit();
					}
					else if(chk_bef_sub2 == 1 && trip_type == 3){
						$('form#booking').submit();
					}
					
				}
			}
		}
	}

	$('form#booking').submit(function(e){
		var picktimenew='';
		var pay_type='';
		var promo_type='';
		var arr1 = [];
          url = '<?php echo URL_BASE.MOB_API_URL;?>/?type=savebooking';
		  var trip_type = $('#trip_type').val();
		  
		  var val = $('#frm_type').val();
		 	   
         if(val == 2){
			  var picktime = $('#pickup_date').val()+':00';
			  var now_after = "1";
		  }
		  else if(val == 3){
			  var now_after = "1";
			  var ptime = $('#pick_rtime').val()+':00';
			  var picktime = $('#pickup_date2').val();
			  var str_array = picktime.split(', ');
			  for(var i=0; i<str_array.length;i++){
				  var pick1 = str_array[i];
				  var pick2 = pick1.split('/'); 
				  var pick3 = pick2[2]+'-'+pick2[0]+'-'+pick2[1]+' '+ptime;
				  arr1.push(pick3);
			  }
			   
			   var picktimenew = arr1.toString();
			   var picktime = $('#pickup_time').val()  
			   
		  }
		  else{
			 var now_after = "0";
			    var ptime = $('#pick_ntime').val()+':00';
			   var picktime = $('#pickup_time').val();
			   var str_array = picktime.split('-');
			   var picktime = str_array[0]+'-'+str_array[1]+'-'+str_array[2]+' '+ptime;
			  // alert(picktime);
			 //var picktime = $('#pickup_time').val()  
		  }
		if(trip_type == 1 ){ pay_type = $('#payment_type').val();promo_type = $('#promocode_normal').val();}else if(trip_type == 2 ){ pay_type = $('#payment_type_child').val();promo_type = $('#promocode_child').val(); }
		
		
      /* Send the data using post with element id name and name2*/
      if(trip_type == 3 ){
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
													{ 		var response_array = response.split('||');
														
														if( parseInt($('#no_passengers').val()) > parseInt(response_array[0])){
															  
																$('#no_passengers_error').html('<?php echo __('sel_passenger_should');?>'+response_array[0]);
																$('#no_passengers').focus();
															}
														if(parseInt($('#max_luggage').val()) > parseInt(response_array[1])){
															
															$('#max_luggage_error').html('<?php echo __('sel_luggage_should');?>'+response_array[1]);
															$('#max_luggage').focus();
														}
														if(parseInt($('#no_passengers').val()) <= parseInt(response_array[0]) && parseInt($('#max_luggage').val()) <= parseInt(response_array[1])){
														
														
															
															
															 /* Send the data using post with element id name and name2*/
    
    var parameter = JSON.stringify({ "passenger_id":$('#passenger_id').val(),"latitude":$('#latitude').val(),"longitude":$('#longitude').val(),"motor_model":$('#motor_model').val(),"pickup_time":picktime,"pickupplace":$('#pickupplace').val(),"dropplace":$('#dropplace').val(),"drop_latitude":$('#drop_latitude').val(),"drop_longitude":$('#drop_longitude').val(),"cityname":$('#cityname').val(),"sub_logid":$('#sub_logid').val(),"now_after": now_after,"all_dates":picktimenew,"no_passengers":$('#no_passengers').val(),"max_luggage":$('#max_luggage').val(),"airport_pickup":"1","airport_flight_number":$('#airport_flight_number').val(),"airport_flight_time":picktime,"airport_notes":$('#airport_notes').val(),"payment_type":$('#payment_type_air').val(),"promo_code":$("promocode_airport").val(),"flag":''
});
    // alert(" airposr")
    // alert(parameter);
  var posting = $.post( url,parameter );

      posting.done(function( data ) {
		  var obj = $.parseJSON(data);
			if(obj.status== 1){
				alert(obj.message);	 
				 window.location.href = "<?php echo URL_BASE; ?>passengers/dashboard";
			 }else {
				alert(obj.message);	 
			}
			
		}); 
	
	
														}
													} 
													 
												});	
		
		  }
	else{
			var parameter = JSON.stringify({ "passenger_id":$('#passenger_id').val(),"latitude":$('#latitude').val(),"longitude":$('#longitude').val(),"motor_model":$('#motor_model').val(),"pickup_time":picktime,"pickupplace":$('#pickupplace').val(),"dropplace":$('#dropplace').val(),"drop_latitude":$('#drop_latitude').val(),"drop_longitude":$('#drop_longitude').val(),"cityname":$('#cityname').val(),"sub_logid":$('#sub_logid').val(),"now_after": now_after,"payment_type":pay_type,"all_dates":picktimenew,"promo_code":promo_type,"flag":''
});
			//  alert("not airposr")
		 // alert(parameter);
  var posting = $.post( url,parameter );

     posting.done(function( data ) {
		  var obj = $.parseJSON(data);
			if(obj.status== 1){
				 alert(obj.message);	 
				 window.location.href = "<?php echo URL_BASE; ?>passengers/memberstrip?type=passenger";
			 }else {
				alert(obj.message);	 
			}
			
		}); 
	}
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
$('#myTabs a').click(function (e) {
  e.preventDefault()
  $('.err span').text('');
 var id=$(this).attr('id');
  $(this).tab('show')
   $('#trip_type').val(id)
  
})

$('#fav_icon').ddslick({
    width: 170,
    imagePosition: "left",
    selectText: "Select your favorite",
    onSelected: function (data) {
        $('#fav_icon').val(data.selectedData.value);
    }
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
						markers[<?php echo $a; ?>][<?php echo $b; ?>]=<?php echo $v['coordinates'][1]; ?>;
					<?php }
					if($b==1)
					{ ?>
						markers[<?php echo $a; ?>][<?php echo $b; ?>]=<?php echo $v['coordinates'][0]; ?>;
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
