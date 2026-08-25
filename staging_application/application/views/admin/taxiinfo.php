<?php defined('SYSPATH') OR die("No direct access allowed.");
if(SHOW_MAP !=1 ) {?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=<?php echo GOOGLE_MAP_API_KEY; ?>&sensor=false&v=3.25"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/easyslider/bjqs-1.3.min.js"></script>
<link rel="stylesheet" href="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/css/ui-lightness/jquery-ui-1.8.11.custom.css" />
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/js/jquery-ui-1.8.11.custom.min.js"></script>
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-timepicker-addon.js"></script>
<link href="<?php echo URL_BASE;?>public/js/easyslider/bjqs.css" rel="stylesheet" type="text/css" media="screen" />	
<style>
ul.bjqs-controls.v-centered li a:hover {
background: #000;
color: #fff;
}
ul.bjqs-controls.v-centered li a {
display: block;
padding: 5px;
background: #fff;
color: #000;
text-decoration: none;
}
</style>
<script>
// Enable the visual refresh
google.maps.visualRefresh = true;
var map;
function showPosition(lat,lng)
{
	var latlng = new google.maps.LatLng(lat,lng);
	var mapOptions = {
	  zoom: 15,
	  center: latlng,
	  mapTypeId: google.maps.MapTypeId.ROADMAP
	 };
	map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);      
    var iconBase = '<?php echo PUBLIC_IMGPATH.'/' ; ?>';
    var latlng=new google.maps.LatLng(lat,lng);
    var marker = new google.maps.Marker({
            position: latlng,
            map: map,           
            animation: google.maps.Animation.DROP,
            icon: iconBase + 'car.png'            
    });
    geocoder = new google.maps.Geocoder();
    geocoder.geocode({'latLng': latlng}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        if (results[1]) {         
          $('#on_going_place').html("My Current Location : "+results[1].formatted_address);
         }
      } else {
        alert("Geocoder failed due to: " + status);
      } 
   });
}
</script>
<?php }
if($taxi_driver){ ?>
<script type="text/javascript">
push_notification('<?php echo $user_details1['id']; ?>');
setInterval(function() 
{
	push_notification('<?php echo $user_details1['id']; ?>');  
}, 30000);
function push_notification(driver_id)
{
	var dataS = "&type=1&driver_id="+driver_id;
	var SrcPath = "<?php echo URL_BASE; ?>";
	var response;
	$.ajax
	({ 			
		type: "POST",
		url: SrcPath+"driver/adminpush_notification/1", 
		data: dataS, 
		cache: false, 
		dataType: 'html',
		success: function(response) 
		{
			var test_str = response;
			var start_pos = test_str.indexOf('|') + 1;
			var end_pos = test_str.indexOf('|',start_pos);
			var text_to_get = test_str.substring(start_pos,end_pos);
			if(text_to_get.length > 1){
				response = response.substr(text_to_get.length+4);
				$('#on_going_trip_btn').html(text_to_get);
				loadPage();
				console.log(text_to_get);
			}
			$('#on_going_trip').html(response);
			var lat = $('#latitude').val();
			var lng = $('#longitude').val();
			var show_map = "<?php echo SHOW_MAP; ?>";
			if(show_map !=1)
			{
				showPosition(lat,lng);
				var latlng = new google.maps.LatLng(lat,lng);	
				geocoder = new google.maps.Geocoder();
				geocoder.geocode({'latLng': latlng}, function(results, status) {
					if (status == google.maps.GeocoderStatus.OK) {
						if (results[1]) {         
							$('#on_going_place').html("My Current Location : "+results[1].formatted_address);
						}
					} else if (status === google.maps.GeocoderStatus.OVER_QUERY_LIMIT) {
						setTimeout(function() {
							codeLatLng(lat,lng,id);
						}, 200); 
					} else {
						alert('Geocoder failed due to: ' + status);
						attempts = 0;
					}
				});
			}
		} 
	});	
}
</script>
<?php } ?>
<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle">
         <table border="0" cellpadding="5" cellspacing="0" width="100%">
	 <tr>
		 <td class="titlebold" colspan="2" style="text-transform:uppercase;"><?php echo $taxi_details[0]['taxi_no'].'   -  '.ucfirst(__('taxi_inform')); ?></td>
	 </tr>
	<tr>
		<td></td> 
		<td></td> 
	<td rowspan="10">
	<?php
	$result = $taxi_details;
	//echo '<pre>'; 
	//print_r($taxi_details);
	//exit;
	if(count($result) > 0){
		if(isset($result[0]) && count($result[0]) > 0)
		{
			$output ='<ul class="bjqs">';
			$taxi_image = $_SERVER['DOCUMENT_ROOT'].'/'.TAXI_IMG_IMGPATH.$result[0]['taxi_image'];
			if(file_exists($taxi_image) && $result[0]['taxi_image'] !='')
			{
				$taxi_image = URL_BASE.TAXI_IMG_IMGPATH.$result[0]['taxi_image'];
			}else{
				$taxi_image = URL_BASE."/public/uploads/taxi_image/no-image.jpg";
			}
			$output .='<li><img src="'.$taxi_image.'" ></li>';	

			$count = $result[0]['taxi_sliderimage'];
			$taxi_id = $result[0]['taxi_id'];
			if($count > 0)
			{
				for ($i = 0; $i < $count; $i++)
				{
					if(file_exists($_SERVER["DOCUMENT_ROOT"].'public/uploads/taxi_image/'.$taxi_id.'_'.$i.'.png'))
					{
						$image_path = URL_BASE.'/public/uploads/taxi_image/'.$taxi_id.'_'.$i.'.png';
						$output .='<li><img src="'.$image_path.'" ></li>';	
					}
				}
			}
			
			
			$output .='</ul>';
			echo "<div id='banner-fade'>".$output."</div>";
		}  
	}?>
		</td> 

	</tr>
	<tr>
	<td valign="top" width="20%"><label><?php echo __('taxi_no'); ?></label></td>        
	<td  width="20%">
	<div class="new_input_field">
		<?php if(isset($taxi_details[0]['taxi_no'])) { echo $taxi_details[0]['taxi_no']; } else { echo ''; } ?>
	</div>
	</td>   	
	</tr> 
	
	<tr>
	<td valign="top" width="20%"><label><?php echo __('taxi_owner_name'); ?></label></td>        
	<td>
	<div class="new_input_field">
	<?php if(isset($taxi_details[0]['taxi_owner_name'])) { echo $taxi_details[0]['taxi_owner_name']; } else { echo ''; } ?>
	<div class="new_input_field"> 	
	</tr>
	
	<tr>
	<td valign="top" width="20%"><label><?php echo __('taxi_fare_km'); ?></label></td>        
	<td>
	<div class="new_input_field">
	<?php if(isset($taxi_details[0]['taxi_fare_km'])) { echo $taxi_details[0]['taxi_fare_km']; } else { echo ''; } ?>
	<div class="new_input_field"> 	
	</tr>
	<tr>
	<td valign="top" width="20%"><label><?php echo __('company_name'); ?></label></td>        
	<td>
	<div class="new_input_field">
	<?php if(isset($taxi_details[0]['company_name'])) { echo $taxi_details[0]['company_name']; } else { echo ''; } ?>
	<div class="new_input_field"> 	
	</tr>

	<tr>
	<td valign="top" width="20%"><label><?php echo __('taxi_model'); ?></label></td>        
	<td>
	<div class="new_input_field">
	<?php if(isset($taxi_details[0]['model_name'])) { echo $taxi_details[0]['model_name']; } else { echo ''; } ?>
	</div> 
	</td>   	
	</tr>
	
	<?php /*<tr>
	<td valign="top" width="20%"><label><?php echo __('taxi_capacity'); ?></label></td>        
	<td>
	<div class="new_input_field">
	<?php if(isset($taxi_details[0]['taxi_capacity'])) { echo $taxi_details[0]['taxi_capacity']; } else { echo ''; } ?>
	</div>
	</td>   	
	</tr> */ ?>
		
	<tr>
	<td valign="top" width="20%"><label><?php echo __('taxi_speed'); ?></label></td>        
	<td>
	<div class="new_input_field">
		<?php if(isset($taxi_details[0]['taxi_speed'])) { echo $taxi_details[0]['taxi_speed']; } else { echo ''; } ?>
	</div>
	</td>   	
	</tr>
	<tr>
	<td valign="top" width="20%"><label><?php echo __('taxi_min_speed'); ?></label></td>        
	<td>
	<div class="new_input_field">
		<?php echo (isset($taxi_details[0]['taxi_min_speed']))?$taxi_details[0]['taxi_min_speed']:'-';?>
	</div>
	</td>   	
	</tr>
 	<tr>
	<td valign="top" width="20%"><label><?php echo __('maximum_luggage'); ?></label></td>        
	<td>
	<div class="new_input_field">
		<?php if(isset($taxi_details[0]['max_luggage'])) { echo $taxi_details[0]['max_luggage']; } else { echo ''; } ?>
	</div>
	</td>   	
	</tr>
	<tr>
	<td valign="top" width="20%"><label><?php echo __('taxi_manufacturer'); ?></label></td>        
	<td>
	<div class="new_input_field">
		<?php echo (isset($taxi_details[0]['taxi_manufacturer']))?$taxi_details[0]['taxi_manufacturer']:'-';?>
	</div>
	</td>   	
	</tr>
	<tr>
	<td valign="top" width="20%"><label><?php echo __('taxi_colour'); ?></label></td>        
	<td>
	<div class="new_input_field">
		<?php echo (isset($taxi_details[0]['taxi_colour']))?$taxi_details[0]['taxi_colour']:'-';?>
	</div>
	</td>   	
	</tr>
	<tr>
	<td valign="top" width="20%"><label><?php echo __('taxi_motor_expire_date'); ?></label></td>        
	<td>
	<div class="new_input_field">
		<?php echo (isset($taxi_details[0]['taxi_motor_expire_date']))?$taxi_details[0]['taxi_motor_expire_date']:'-';?>
	</div>
	</td>   	
	</tr>
	<tr>
	<td valign="top" width="20%"><label><?php echo __('taxi_insurance_number'); ?></label></td>        
	<td>
	<div class="new_input_field">
		<?php echo (isset($taxi_details[0]['taxi_insurance_number']))?$taxi_details[0]['taxi_insurance_number']:'-';?>
	</div>
	</td>   	
	</tr>
	<tr>
	<td valign="top" width="20%"><label><?php echo __('taxi_insurance_expire_date'); ?></label></td>        
	<td>
	<div class="new_input_field">
		<?php echo (isset($taxi_details[0]['taxi_insurance_expire_date_time']))?$taxi_details[0]['taxi_insurance_expire_date_time']:'-';?>
	</div>
	</td>   	
	</tr>
	<tr>
	<td valign="top" width="20%"><label><?php echo __('taxi_pco_licence_number'); ?></label></td>        
	<td>
	<div class="new_input_field">
		<?php echo (isset($taxi_details[0]['taxi_pco_licence_number']))?$taxi_details[0]['taxi_pco_licence_number']:'-';?>
	</div>
	</td>   	
	</tr>
	<tr>
	<td valign="top" width="20%"><label><?php echo __('taxi_pco_licence_expire_date'); ?></label></td>        
	<td>
	<div class="new_input_field">
		<?php echo (isset($taxi_details[0]['taxi_pco_licence_expire_date']))?$taxi_details[0]['taxi_pco_licence_expire_date']:'-';?>
	</div>
	</td>
	<tr>
	<td valign="top" width="20%"><label><?php echo __('qr_code'); ?></label></td>        
	<td>
		<div class="new_input_field">
		<?php
		if(isset($result[0]['qr_image_path'])){
		 $qr_path = URL_BASE.TAXI_IMG_IMGPATH.'/qrcode/'.$result[0]['qr_image_path'];
		echo $output ='<img src="'.$qr_path.'" >';
		echo '<a href="'.$qr_path.'" download >'.__('download').'</a>';
		} else echo '-';	?>
		
			</div>
	</td>   	
	</tr>
		</table>

		<!--- Transaction Chart--->
			<div class="widget margin-bottom" >
			<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" />
			<h6><?php echo __('transactions'); ?></h6>
				<?php $startdate = date('Y-m-01 00:00:00');
		$enddate  = date('Y-m-t 12:59:59'); $display="";?>
			 <form  action="" method="post" name="" id="trans_search_form" >
			 <div class="title" align="right">
				
				 <?php echo __('startdate');?>
				 <input type="hidden" name="user_id" id="user_id" value="<?php echo $taxi_details[0]['taxi_id']; ?>">
				 <input type="hidden" name="user_name" id="user_name" value="<?php  echo isset($taxi_details[0]['motor_name'])?$taxi_details[0]['motor_name']:0; ?>">
				  <input type="hidden" name="user_type" id="user_type" value="D">
				 <input type="text"  readonly title="<?php echo __('select_datetime'); ?>"  id="transstartdate" name="transstartdate" value="<?php echo $startdate; ?>"  />
				 <span id="tstartdate_error" class="errors" style="display:none;"></span>
				 <?php echo __('enddate');?>
				 <input type="text"  readonly title="<?php echo __('select_datetime'); ?>"  id="transenddate" name="transenddate" value="<?php echo $enddate; ?>"  />
				 <span id="tenddate_error" class="errors" style="display:none;"></span>
				 <div class="button blackB"> 
				 <input type="hidden" name="type_export" id="type_export" value="">
				 <input type="button" name="search_transaction" id="search_transaction" value="GO" title="Go" >
				 
				 </div>
				 </div>
			</div>
			</form>
			
		<div id="driver_transactions">
			<?php  if($display == 'display:none;'){ echo "<div class='no_data'>".__('no_data')."</div>"; } ?>
		<div id="transaction_chart" style="min-width: 400px; height: 400px; margin: 0 auto;<?php echo $display;?>"></div>
		</div>
		
		</div>
		
		<!--- Transaction Chart--->

		<!--Current Status of The Taxi -->
		<div class="widget margin-bottom" >
			<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" /><h6><?php echo __('Current Status of Taxi'); ?></h6>
				<div style="width:auto; float:right; margin: 4px 3px;">		
				          
					
				</div>
			</div>
			<div id="on_going_trip_map" >
				<?php 
				if($taxi_driver){
				?>
				<div class="ongoing">
					<div id="on_going_trip"></div>
					<div id="on_going_place"></div>
				</div>
				<?php if(SHOW_MAP !=1) { ?>
					<div id="map-canvas" style="width:100%;height:250px;"></div>
					<?php } ?>
				<?php }else{
					echo "<div class='no_data'>".__('no_data')."</div>";
				} ?>
			</div>
		</div>
		<!--Current Status of The Driver -->
		
			<!-- Last Three Trips taxi Map -->
<script type="text/javascript" src="/public/js/gmaps.js"></script>
	<div class="widget margin-bottom" >
			<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" /><h6><?php echo __('trip_route_map'); ?></h6>
				<div style="width:auto; float:right; margin: 4px 3px;">		
				<div class="button greyish"></div>
				</div>
			</div>
			<div id="on_going_trip_map" >
				
					  <?php if(count($driver_tracking) > 0) { ?> <div id="map"></div> <?php }else{ echo "<div class='no_data'>".__('no_data')."</div>";} ?>
			</div>
		</div>

<?php 
if(count($driver_tracking) > 0) {
	/** Take the starting and ending points **/
	
	if(isset($driver_tracking[0]['active_record'])){
		$json_arr = json_encode($driver_tracking[0]['active_record']['coordinates']);
		$driver_latlog = $json_arr;
		//$driver_latlog1 = "[".$driver_tracking[0]['active_record'].']';
		$driver_default = explode(',',$driver_latlog);
		$count =  count($driver_default);
		
		$driver_centerlat = str_replace('[','',$driver_default[0]);
		$driver_centerlng = str_replace(']','',$driver_default[1]);
		
		$last_value=$driver_default[$count-1];
		if($last_value==""){
				$driver_endlat = str_replace('[','',$driver_default[$count-3]);
				$driver_endlng = str_replace(']','',$driver_default[$count-2]);
		}else{
				$driver_endlat = str_replace('[','',$driver_default[$count-2]);
				$driver_endlng = str_replace(']','',$driver_default[$count-1]);
		}
	
		
		$driver_route_start  = '[['.$driver_centerlng.','.$driver_centerlat.'],';
		$limit = $count-3;
		$driver_route_lng='';
		//exit;
		for($i=2;$i<=$limit;$i++){
			$even = $i % 2;
			if($even == 0){
			$driver_route_lng = str_replace('[','',$driver_default[$i]);	
			}else{
				$driver_route_lat = str_replace(']','',$driver_default[$i]);
				$driver_route_start .= '['.$driver_route_lat.','.$driver_route_lng.'],';
			}
			
		}
		
		 $driver_route_start .= '['.$driver_endlng.','.$driver_endlat.']]';//exit;
		
		//$driver_endlat = str_replace('[','',$driver_default[$count-2]);
		//$driver_endlng = str_replace(']','',$driver_default[$count-1]);
		//echo $driver_latlog.'='.$driver_centerlat.'='.$driver_centerlng.'='.$driver_endlat.'='.$driver_endlng.'<br>';
	}
	
	if(isset($driver_tracking[1]['active_record'])){
		$json_arr = json_encode($driver_tracking[1]['active_record']['coordinates']);
		$driver_latlog1 = $json_arr;
		//$driver_latlog1 = "[".$driver_tracking[1]['active_record'].']';
		$driver_default1 = explode(',',$driver_latlog1);
		$count =  count($driver_default1);
		$driver_centerlat1 = str_replace('[','',$driver_default1[0]);
		$driver_centerlng1 = str_replace(']','',$driver_default1[1]);
		
		$last_value=$driver_default1[$count-1];
		if($last_value==""){
				$driver_endlat1 = str_replace('[','',$driver_default1[$count-3]);
				$driver_endlng1 = str_replace(']','',$driver_default1[$count-2]);
		}else{
				$driver_endlat1 = str_replace('[','',$driver_default1[$count-2]);
				$driver_endlng1 = str_replace(']','',$driver_default1[$count-1]);
		}
	
		
		$driver_route_start1  = '[['.$driver_centerlng1.','.$driver_centerlat1.'],';
		$limit = $count-3;
		$driver_route_lng='';
		//exit;
		for($i=2;$i<=$limit;$i++){
			$even = $i % 2;
			if($even == 0){
			$driver_route_lng = str_replace('[','',$driver_default1[$i]);	
			}else{
				$driver_route_lat = str_replace(']','',$driver_default1[$i]);
				$driver_route_start1 .= '['.$driver_route_lat.','.$driver_route_lng.'],';
			}
			
		}
		
		 $driver_route_start1 .= '['.$driver_endlng1.','.$driver_endlat1.']]';//exit;
		//$driver_endlat1 = str_replace('[','',$driver_default1[$count-2]);
		//$driver_endlng1 = str_replace(']','',$driver_default1[$count-1]);
		//echo $driver_latlog1.'='.$driver_centerlat1.'='.$driver_centerlng1.'='.$driver_endlat1.'='.$driver_endlng1;exit;
	}
	
	if(isset($driver_tracking[2]['active_record'])){
		$json_arr = json_encode($driver_tracking[2]['active_record']['coordinates']);
		$driver_latlog2 = $json_arr;
		//$driver_latlog2 = "[".$driver_tracking[2]['active_record'].']';
		$driver_default2 = explode(',',$driver_latlog2);
		$count =  count($driver_default2);
		$driver_centerlat2 = str_replace('[','',$driver_default2[0]);
		$driver_centerlng2 = str_replace(']','',$driver_default2[1]);
		
		$last_value=$driver_default2[$count-1];
		if($last_value==""){
				$driver_endlat2 = str_replace('[','',$driver_default2[$count-3]);
				$driver_endlng2 = str_replace(']','',$driver_default2[$count-2]);
		}else{
				$driver_endlat2 = str_replace('[','',$driver_default2[$count-2]);
				$driver_endlng2 = str_replace(']','',$driver_default2[$count-1]);
		}
	
		
		$driver_route_start2  = '[['.$driver_centerlng2.','.$driver_centerlat2.'],';
		$limit = $count-3;
		$driver_route_lng='';
		//exit;
		for($i=2;$i<=$limit;$i++){
			$even = $i % 2;
			if($even == 0){
			$driver_route_lng = str_replace('[','',$driver_default2[$i]);	
			}else{
				$driver_route_lat = str_replace(']','',$driver_default2[$i]);
				$driver_route_start2 .= '['.$driver_route_lat.','.$driver_route_lng.'],';
			}
			
		}
		
		$driver_route_start2 .= '['.$driver_endlng2.','.$driver_endlat2.']]';//exit;
		 
		//$driver_endlat2 = str_replace('[','',$driver_default2[$count-2]);
		//$driver_endlng2 = str_replace(']','',$driver_default2[$count-1]);
		//echo $driver_latlog2.'='.$driver_centerlat2.'='.$driver_centerlng2.'='.$driver_endlat2.'='.$driver_endlng2;
	}
/** Take the starting and ending points ends **/
?>
<script type="text/javascript">
var map;
$(document).ready(function(){
    toggle(25);
	map = new GMaps({
		el: '#map',
		lat: <?php echo $driver_centerlng; ?>,
		lng: <?php echo $driver_centerlat; ?>,
		click: function(e){
		  console.log(e);
		}
	});
	 var iconBase = '<?php echo PUBLIC_IMGPATH.'/' ; ?>';
   /** Make Marker for three paths **/
	<?php if(isset($driver_tracking[0]['active_record'])){ ?>
		map.addMarker({
			lat: <?php echo $driver_centerlng; ?>,
			lng: <?php echo $driver_centerlat; ?>,
		   // title: 'Start Point-1',
			title: '<?php echo $driver_tracking[0]['current_location']; ?>',
			icon: iconBase + 'driver_one.png',
			details: {
			  database_id: 42,
			  author: 'HPNeo'
			},
		});
		map.addMarker({
			lat: <?php echo $driver_endlng; ?>,
			lng: <?php echo $driver_endlat; ?>,
			//title: 'End Point-1',
			title: '<?php echo $driver_tracking[0]['drop_location']; ?>',
			icon: iconBase + 'driver_one.png',
		});
		path = <?php echo $driver_route_start; ?>;
		map.drawPolyline({
			path: path,
			strokeColor: 'green',
			strokeOpacity: 0.6,
			strokeWeight: 6
		});
	<?php }
	if(isset($driver_tracking[1]['active_record'])){ ?>
		map.addMarker({
			lat: <?php echo $driver_centerlng1; ?>,
			lng: <?php echo $driver_centerlat1; ?>,
			title: '<?php echo $driver_tracking[1]['current_location']; ?>',
			icon: iconBase + 'driver_two.png',
			details: {
				database_id: 421,
				author: 'HPNeo1'
			},
		});
		map.addMarker({
			lat: <?php echo $driver_endlng1; ?>,
			lng: <?php echo $driver_endlat1; ?>,
			title: '<?php echo $driver_tracking[1]['drop_location']; ?>',
			icon: iconBase + 'driver_two.png',
		});
		path1 = <?php echo $driver_route_start1; ?>;
		map.drawPolyline({
			path: path1,
			strokeColor: 'red',
			strokeOpacity: 0.6,
			strokeWeight: 6
      	});
	<?php }
	if(isset($driver_tracking[2]['active_record'])){ ?>
		map.addMarker({
			lat: <?php echo $driver_centerlng2; ?>,
			lng: <?php echo $driver_centerlat2; ?>,
			title: '<?php echo $driver_tracking[2]['current_location']; ?>',
			icon: iconBase + 'driver_three.png',
			details: {
				database_id: 43,
				author: 'HPNeo2'
			},
		});
		map.addMarker({
			lat: <?php echo $driver_endlng2; ?>,
			lng: <?php echo $driver_endlat2; ?>,
			title: '<?php echo $driver_tracking[2]['drop_location']; ?>',
			icon: iconBase + 'driver_three.png',
			/*infoWindow: {
			content: '<p>HTML Content</p>'
			}*/
		});
		path2 = <?php echo $driver_route_start2; ?>;
		map.drawPolyline({
			path: path2,
			strokeColor: 'blue',
			strokeOpacity: 0.6,
			strokeWeight: 6
		});
   <?php } ?>
	/** Create Path and its colour's for three paths ends **/
});
</script>
<style>
#map{
  display: block;
  width: 100%;
  height: 500px;
  margin-top:20px;	
  margin: 0 auto;
  -moz-box-shadow: 0px 5px 20px #ccc;
  -webkit-box-shadow: 0px 5px 20px #ccc;
  box-shadow: 0px 5px 20px #ccc;
}
#map.large{
  height:500px;
}
</style>
<?php } ?>
	<!-- Last Three Trips Taxi Map ends -->

		

		<!-- Completed  Journey -->
		<?php 
		//echo '<pre>'; 
		//print_r($count_taxi_logs_completed_transaction); 
		//exit;
		?>
		<div class="widget margin-bottom" >
			<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" />
			<h6><?php echo __('Completed Journey'); ?></h6>
				<div style="width:auto; float:right; margin: 4px 3px;">		
				<?php if($count_taxi_logs_completed_transaction > REC_PER_PAGE) {  ?>
					<?php if($_SESSION['user_type'] == 'A') { ?> 
					<div class="button greyish">
					<a href="<?php echo URL_BASE ?>transaction/admintransaction/all?filter_company=All&manager_id=&taxiid=<?php echo $taxi_details[0]['taxi_id']; ?>All&startdate=&enddate=&transaction_id=&payment_type=&passengerid=All&driver_id="><?php echo __('view_all'); ?></a>
					</div>
					<?php } 
					else if($_SESSION['user_type'] == 'C')
					{ 
						//<?php echo date('Y-m-d'); 23:59:59?>
					<div class="button greyish">
					<a href="<?php echo URL_BASE ?>transaction/companytransaction_list/all/?manager_id=All&taxiid=<?php echo $taxi_details[0]['taxi_id']; ?>&driver_id=All&passengerid=All&startdate=&enddate=&transaction_id=&payment_type=All&search_user="><?php echo __('view_all'); ?></a>
					</div>
					<?php }
					else if($_SESSION['user_type'] == 'M')
					{ 
					?>
					<div class="button greyish"><a href="<?php echo URL_BASE; ?>transaction/managertransaction_list/all/?taxiid=<?php echo $taxi_details[0]['taxi_id']; ?>&driver_id=All&passengerid=All&transaction_id=&startdate=2014-01-29+00%3A00%3A00&enddate=2014-01-29+14%3A47%3A35&payment_type=All&search_user="><?php echo __('view_all'); ?></a></div>
					<?php }
				}
				else
				{ ?>            
				<div class="button greyish"></div>
				<?php } ?>
				</div>
			</div>
			<div>
					<?php if(count($taxi_logs_completed_transaction)>0) { ?>
					<table cellspacing="1" cellpadding="11" width="100%" align="center" class="sTable responsive">
						<thead>
						<tr>
							<td>#</td>
							<td><?php echo __('passenger_name'); ?></td>
							<td><b><?php echo __('Current_Location'); ?></b></td>
							<td><b><?php echo __('Drop_Location'); ?></b></td>
							<!--<td><b><?php echo __('No_Passengers'); ?></b></td>-->
							<td><b><?php echo __('pictup_date');?></b></td>
							<td><b><?php echo __('pictup_time');?></b></td>
							<td><b><?php echo __('distance');?></b></td>		
							<td><b><?php echo __('trip_total_fare');?></b></td>
							<?php if($_SESSION['user_type'] == 'A') { ?> <td><b><?php echo __('equivalent_to_usd').CURRENCY_FORMAT;?></b></td> <?php } ?>
							</tr>
						</tr>
						</thead>
						<?php 
						$i=1;
						($i%2 == 1)?$class="eventr":$class="oddtr";
					
							foreach($taxi_logs_completed_transaction as $values)
							{
								$distance = round($values['distance'],2).' '.$values['distance_unit'];
								$current_fare = round($values['fare'],2);
								$fare_km = 0;
								if(isset($values['fare']) && ($current_fare > 0) && ($distance > 0 ))
								{
									$fare_km = $current_fare/$distance;
								}
								?>
								<tr class="<?php echo $class; ?>">	
								<td><?php echo $i;?></td>
								<td><?php echo ucfirst($values['name']); ?></td>
								<td><?php echo $values['current_location'];?></td>
								<td><?php echo $values['drop_location'];?></td>
								<!--<td><?php echo $values['no_passengers'];?></td>-->
								<td><?php echo commonfunction::convertphpdate('Y-m-d h:i:s a',$values['pickup_time']); //date('d/m/Y',strtotime($values['pickup_time']));?></td>
								<td><?php echo commonfunction::convertphpdate('Y-m-d h:i:s a',$values['pickup_time']); //date('h:i:s', strtotime($values['pickup_time']));?></td>
								<td><?php echo $distance;?></td>
								<td><?php
								if($_SESSION['company_id'] != 0)
								{
									$company_currency = findcompany_currency($_SESSION['company_id']);
								}
								else
								{
									$company_currency = findcompany_currency($taxi_details[0]['taxi_company']);
								}
								echo $company_currency.$current_fare;?></td>
								<?php if($_SESSION['user_type'] == 'A') { ?>
								 <td>
									<?php 
									$company_currency_format = findcompany_currencyformat($taxi_details[0]['taxi_company']);
									$convet_amt = currency_conversion($company_currency_format,$current_fare);
									echo round($convet_amt,2); ?>
								</td>
								 <?php } ?>
								</tr>
						<?php $i++;
							}
						 ?>
						</table>
					<?php }else {
							echo "<div class='no_data'>".__('no_data')."</div>";
						}?>
			</div>
		</div>
		<!-- Completed Journey -->
        </div>
        <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt"></div></div>
    </div>
</div>
<script src="<?php echo SCRIPTPATH; ?>highcharts.js"></script>
<script type="text/javascript" language="javascript">
$(document).ready(function() {
	toggle(6);
	$("#transstartdate").datetimepicker({
		showTimepicker:true,
		showSecond: true,
		timeFormat: 'hh:mm:ss',
		dateFormat: 'yy-mm-dd',
		stepHour: 1,
		stepMinute: 1,
		maxDateTime : new Date(),
		stepSecond: 1
	});

	$("#transenddate").datetimepicker({
		showTimepicker:true,
		showSecond: true,
		timeFormat: 'hh:mm:ss',
		dateFormat: 'yy-mm-dd',
		stepHour: 1,
		stepMinute: 1,
		maxDateTime : new Date(), 
		stepSecond: 1
	});
	$('#banner-fade').bjqs({
	  height      : 250,
	  width       : 400,
		  left	: 20,	
	  responsive  : true
	});
	onload_chart();
});

function onload_chart()
{ 
	var startdate = $("#transstartdate").val();
	var enddate = $("#transenddate").val();
	var driver_id = $("#user_id").val();
	var taxi_name = $("#user_name").val();
	var dataS = "startdate="+startdate+"&enddate="+enddate+"&driver_id="+driver_id+"&taxi_name="+taxi_name;
	$.ajax({
		type: "POST",
		url: SrcPath+"manage/taxi_transaction_search", 
		data: dataS, 
		cache: false, 
		success: function(response) 
		{
			var datArr = response.split('~');
			var transCount = datArr[1];
			$('#driver_transactions').html(datArr[0]);
			if(transCount == 0) {
				$("#trans_search_form").hide();
			}
		}
	});
}

$("#search_transaction").click(function(){
 	var startdate = $("#transstartdate").val();
	var enddate = $("#transenddate").val();
	var driver_id = $("#user_id").val();
	var taxi_name = $("#user_name").val();
	if(startdate =='') {
		$("#tstartdate_error").html("<?php echo __('select_startdate'); ?>");
		$("#tstartdate_error").show();
	} else {
		$("#tstartdate_error").html("");
		$("#tstartdate_error").hide();
	}
	if(enddate =='') {
		$("#tenddate_error").html("<?php echo __('select_enddate'); ?>");
		$("#tenddate_error").show();
	} else{
		$("#tenddate_error").hide("");
		$("#tenddate_error").hide();
	}
	if(startdate !='' && enddate!='')
	{
		$('#driver_transactions').html('<img alt="ajax-loading" src="'+SrcPath+'/public/css/img/ajax-loaders/ajax-loader-1.gif" />');	
		if(startdate > enddate) {
			$("#tstartdate_error").html("<?php echo __('startdate_greater'); ?>");
			$("#tstartdate_error").show();
		} else {
			$("#tstartdate_error").html("");
			$("#tstartdate_error").hide();
			var dataS = "startdate="+startdate+"&enddate="+enddate+"&driver_id="+driver_id+"&taxi_name="+taxi_name;
			//var dataS = "{'startdate':'"+startdate+"','enddate':'"+enddate+"','driver_id':'"+driver_id+"'}";alert(dataS);
			$.ajax({
				type: "POST",
				url: SrcPath+"manage/taxi_transaction_search", 
				data: dataS, 
				cache: false, 
				dataType: 'html',
				success: function(response) 
				{
					var datArr = response.split("~");
					$('#driver_transactions').html(datArr[0]);
				} 
				 
			});
		}
	}
 });
</script>
