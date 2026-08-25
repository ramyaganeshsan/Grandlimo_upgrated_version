<?php defined('SYSPATH') OR die("No direct access allowed.");?>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=<?php echo GOOGLE_MAP_API_KEY; ?>&sensor=true"></script> 
<link rel="stylesheet" href="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/css/ui-lightness/jquery-ui-1.8.11.custom.css" />
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/js/jquery-ui-1.8.11.custom.min.js"></script>
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery.validate.js"></script>
<?php
$driver_name = isset($driver_profile['name'])?$driver_profile['name']:'';
$notification_setting = isset($driver_profile['notification_setting'])?$driver_profile['notification_setting']:0;
$company_id = isset($driver_profile['company_id'])?$driver_profile['company_id']:0;
$company_currency = CURRENCY_SYMB;
if($notification_setting == '1')
{
	$not_setting = "ON";
}
else
{
	$not_setting = "OFF";
}
if($get_transaction){
	  $fare = array();
	  $month = array();
	foreach($get_transaction as $vl)
	{
		if($vl['fare'] != NULL){
			$fare[] = $vl['fare'];
			$month[] = "'".$vl['date']." ".Commonfunction::date_month_details($vl['month'])."'";
		}
	}
	if($fare != NULL){
		$fare = implode(",",$fare);
	}
	if($month != NULL){
		$month = implode(",",$month);
	}
	$display ="display:block;";
}else{
	$fare = array();
	$month = array();
	$display ="display:none;";
}
?>
<?php 
if((!empty($get_trip_statitics['completed_trips']))||(!empty($get_trip_statitics['rejected_trips']))|| (!empty($get_trip_statitics['cancelled_trips']))){
	  $createdate = array();
	  $reject_trips = array();
	  $cancelled_trips = array();
	  $completed_trips = array();
	  $display_trip ='';
	  $a=0;
	  $b=0;
	  $date_conv='';
	$end=(date('M-d'));
	while($a<=7)
	{
		$end=date('M-d', mktime(0, 0, 0, date("m") , date("d")-$a, date("Y")));
		$createdate[]= "'$end'";
		$a++;
	}
	while($b < count($get_trip_statitics['cancelled_trips']))
	{
	if(isset($get_trip_statitics['cancelled_trips'][$b]['cancelled_count']))
	{
		foreach($createdate as $ct)
		{
			$date_conv=date('M-d',strtotime($get_trip_statitics['cancelled_trips'][$b]['createdate']));
			$ct = str_replace("'","",$ct);
			if($ct == $date_conv)
			{
				$cancelled_trips[]=$get_trip_statitics['cancelled_trips'][$b]['cancelled_count'];
			}
			else
			{
				//$cancelled_trips[]=0;
			}
		}
	}
	else
	{
		//$cancelled_trips[]=0;
	}
	$b++;
	}
	$b=0;
	while($b < count($get_trip_statitics['rejected_trips']))
	{
	if(isset($get_trip_statitics['rejected_trips'][$b]['rejected_count']))
	{
		foreach($createdate as $ct)
		{
			$date_conv=date('M-d',strtotime($get_trip_statitics['rejected_trips'][$b]['createdate']));
			$ct = str_replace("'","",$ct);
			if($ct == $date_conv)
			{
				$reject_trips[]=$get_trip_statitics['rejected_trips'][$b]['rejected_count'];
			}
			else
			{
				//$reject_trips[]=0;
			}
		}
	}
	else
	{
		//$reject_trips[]=0;
	}
	$b++;
	}
	$b=0;
	while($b < count($get_trip_statitics['completed_trips']))
	{
	if(isset($get_trip_statitics['completed_trips'][$b]['completed_count']))
	{
		foreach($createdate as $ct)
		{
			$date_conv=date('M-d',strtotime($get_trip_statitics['completed_trips'][$b]['createdate']));
			$ct = str_replace("'","",$ct);
			if($ct == $date_conv)
			{
				$completed_trips[]=$get_trip_statitics['completed_trips'][$b]['completed_count'];
			}
			else
			{
				//$completed_trips[]=0;
			}
		}
	}
	else
	{
		//$completed_trips[]=0;
	}
	$b++;
	}
	  $reject_trips = implode(",",$reject_trips);
	  $cancelled_trips = implode(",",$cancelled_trips);
	  $completed_trips = implode(",",$completed_trips);
	  $createdate=implode(",",$createdate);

	$display_trip ="display:block;";
}else{
	$createdate = array();
	$reject_trips = array();
	$cancelled_trips = array();
	$completed_trips = array();
	$display_trip ="display:none;";
}
?>
<?php if(SHOW_MAP !=1 ) { ?>
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
	map = new google.maps.Map(document.getElementById('map-canvas'),
		  mapOptions);
      
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
</script>
<?php } ?>
<script type="text/javascript">
push_notification('<?php echo $user_details1['id']; ?>');
setInterval(function() 
{
	push_notification('<?php echo $user_details1['id']; ?>');
	   
}, 60000);


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
			var text_to_get = test_str.substring(start_pos,end_pos)
			
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
			else
			{
				
			}
		} 
		 
	});	
}


</script>
<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle">
		   
			<table border="0" cellpadding="5" cellspacing="0" width="100%">
			<tr>
			<?php /*
			<td class="titlebold" colspan="2" style="text-transform:uppercase;" ><?php echo $user_details1['name'].' -  '.ucfirst(__('driver_info')); ?></td>
			*/ ?>
			<td></td>	          
			</tr>
			<tr>
			<td class="titlebold"><?php echo ucfirst(__('personalinform')); ?></td>
			<td></td>	          
			</tr>
			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('firstname'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if(isset($user_details1['name'])) { echo ucfirst($user_details1['name']); } else { echo ''; } ?>
				   </div>
			   </td>
			   </tr>
			<?php if(isset($user_details1['lastname']) && !empty($user_details1['lastname'])) { ?>		   
			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('lastname'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if(isset($user_details1['lastname'])) { echo $user_details1['lastname']; } ?>	
				   </div>
			   </td>   	
			   </tr> 
			   <?php } ?>
			   
			   <?php if(isset($user_details1['driver_code']) && !empty($user_details1['driver_code'])) { ?>		   
			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('driver_code'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if(isset($user_details1['driver_code'])) { echo $user_details1['driver_code']; } ?>	
				   </div>
			   </td>   	
			   </tr> 
			   <?php } ?>
			   
			   <?php if(isset($user_details1['email']) && !empty($user_details1['email'])) { ?>
			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('email'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">	
				   <?php if(isset($user_details1['email'])) { echo $user_details1['email']; } ?>	
				   </div>
			   </td>   	
			   </tr> 
			    <?php } ?>
			    
			   <?php if(isset($user_details1['gender']) && !empty($user_details1['gender'])) { ?>
			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('gender'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if(isset($user_details1['gender'])) { echo $user_details1['gender']; } ?>	
				   </div>
			   </td>   	
			   </tr>
			   <?php } ?>
			   
			   <?php if(isset($user_details1['phone']) && !empty($user_details1['phone'])) { ?>
			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('mobile'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if(isset($user_details1['phone'])) { echo $user_details1['phone']; } ?>	
				   </div>
			   </td>   	
			   </tr>  
			   <?php } ?>                     		   
			 
			 <?php if(isset($user_details1['address']) && !empty($user_details1['address'])) { ?>  
			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('address'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if(isset($user_details1['address'])) { echo $user_details1['address']; } ?>		
				   </div>
			   </td>   	
			   </tr>
			  <?php } ?>
			  
			 <?php if(isset($user_details1['dob']) && $user_details1['dob'] != '0000-00-00' ) { ?>             
			<tr>
			   <td valign="top" width="20%"><label><?php echo __('date_of_birth'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if(isset($user_details1['dob'])) { echo commonfunction::convertphpdate('d-M-Y',$user_details1['dob']); } ?>
				   </div>
			   </td>   	
			</tr> 
			<?php } ?>
			
			 <?php if($user_details1['user_type'] != 'N') { ?>  
			 <?php if(isset($user_details1['driver_license_id']) && !empty($user_details1['driver_license_id'])) { ?> 
			<tr>
			   <td valign="top" width="20%"><label><?php echo __('driver_license_id'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if(isset($user_details1['driver_license_id'])) { echo $user_details1['driver_license_id']; } ?>
				   </div>
			   </td>   	
			</tr> 
			<?php } ?>
			
			 <?php if(isset($user_details1['driver_license_expire_date']) && !empty($user_details1['driver_license_expire_date'])) { ?> 
			<tr>
			   <td valign="top" width="20%"><label><?php echo __('driver_license_expire_date'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if(isset($user_details1['driver_license_expire_date'])) { echo commonfunction::convertphpdate('d-M-Y',$user_details1['driver_license_expire_date']); } ?>
				   </div>
			   </td>   	
			</tr> 
			<?php } ?>
			
			 <?php if(isset($user_details1['driver_pco_license_number']) && !empty($user_details1['driver_pco_license_number'])) { ?> 			
			<tr>
			   <td valign="top" width="20%"><label><?php echo __('driver_pco_license_number'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if(isset($user_details1['driver_pco_license_number'])) { echo $user_details1['driver_pco_license_number']; } ?>
				   </div>
			   </td>   	
			</tr> 
			<?php } ?>
			
			 <?php if(isset($user_details1['driver_pco_license_expire_date']) && !empty($user_details1['driver_pco_license_expire_date'])) { ?> 
			<tr>
			   <td valign="top" width="20%"><label><?php echo __('driver_pco_license_expire_date'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if(isset($user_details1['driver_pco_license_expire_date'])) { echo commonfunction::convertphpdate('d-M-Y',$user_details1['driver_pco_license_expire_date']); } ?>
				   </div>
			   </td>   	
			</tr> 
			<?php } ?>
			
			<?php if(isset($user_details1['driver_insurance_number']) && !empty($user_details1['driver_insurance_number'])) { ?> 
			<tr>
			   <td valign="top" width="20%"><label><?php echo __('driver_insurance_number'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if(isset($user_details1['driver_insurance_number'])) { echo $user_details1['driver_insurance_number']; } ?>
				   </div>
			   </td>   	
			</tr> 
			<?php } ?>
			
			<?php if(isset($user_details1['driver_insurance_expire_date']) && !empty($user_details1['driver_insurance_expire_date'])) { ?> 
			<tr>
			   <td valign="top" width="20%"><label><?php echo __('driver_insurance_expire_date'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if(isset($user_details1['driver_insurance_expire_date'])) { echo commonfunction::convertphpdate('d-M-Y',$user_details1['driver_insurance_expire_date']); } ?>
				   </div>
			   </td>   	
			</tr> 
			<?php } ?>
			
			<?php if(isset($user_details1['driver_national_insurance_number']) && !empty($user_details1['driver_national_insurance_number'])) { ?> 
			<tr>
			   <td valign="top" width="20%"><label><?php echo __('driver_national_insurance_number'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if(isset($user_details1['driver_national_insurance_number'])) { echo $user_details1['driver_national_insurance_number']; } ?>
				   </div>
			   </td>   	
			</tr> 
			<?php } ?>
			
			<?php if(isset($user_details1['driver_national_insurance_expire_date']) && !empty($user_details1['driver_national_insurance_expire_date'])) { ?>
			<tr>
			   <td valign="top" width="20%"><label><?php echo __('driver_national_insurance_expire_date'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if(isset($user_details1['driver_national_insurance_expire_date'])) { echo commonfunction::convertphpdate('d-M-Y',$user_details1['driver_national_insurance_expire_date']); } ?>
				   </div>
			   </td>   	
			</tr> 
			<?php } ?>
			<?php if(isset($user_details1['driver_app_version']) && !empty($user_details1['driver_app_version'])) { ?>
			<tr>
			   <td valign="top" width="20%"><label><?php echo __('app_v'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php echo $user_details1['driver_app_version'];  ?>
				   </div>
			   </td>   	
			</tr> 
			<?php } ?>
				<?php } ?> 
			   			<tr>
			   <td valign="top" width="20%"><label><?php echo __('booking_limit_per_day'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if(isset($user_details1['booking_limit'])) { echo $user_details1['booking_limit']; } ?>
				   </div>
			   </td>   	
			</tr> 
			
			<tr>
			   <td valign="top" width="20%"><label><?php echo __('rating_points'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if(count($get_tot_ratings_driver) > 0) { 
					   $rate = $get_tot_ratings_driver[0]['total_ratings']/$get_tot_ratings_driver[0]['trip_cnt']; 
					   echo number_format($rate,1)." Out of 5";
					 } else {
						 echo "0 Out of 5";
					 }
					 
					 ?>
				   </div>
			   </td>   	
			</tr> 
			</table>
			<?php if(is_array($drivershift) && !empty($drivershift) && isset($drivershift['shift_status'])) { ?>
			<h1><?php echo __('driver_shift_status'); ?></h1>
			
				<?php if($drivershift['shift_status'] == 'OUT') { ?>
				<?php $btn = 'ON'; $shift = 'IN';?>
				<?php } else { ?>
				<?php $btn = 'OFF'; $shift = 'OUT';} ?>
				<div class="btn-group" id="">
				
				<button type="button"  class="btn <?php if($btn == 'OFF'){ ?>	btn-info <?php } ?>" <?php if($btn != 'OFF'){ ?>data-id="<?php echo $drivershift['_id']; ?>" data-shift-status="<?php echo $shift; ?>" id="btnnew" <?php } ?>>ON</button>
				<button type="button" class="btn <?php if($btn == 'ON'){ ?>	btn-info <?php } ?>" <?php if($btn != 'ON'){ ?> data-id="<?php echo $drivershift['_id']; ?>" data-shift-status="<?php echo $shift; ?>" id="btnnew"<?php } ?>>OFF</button>
				
				
				</div>
				
				
					
				
			<?php } ?>
			<?php /* ?>
			<?php if($usertype == 'A') { ?>
			<table border="0" cellpadding="5" cellspacing="0" width="100%">
		       <?php if($user_details1['user_type'] != 'N') { ?>   
				  
			   <tr>
				<!--<td class="titlebold"><?php echo ucfirst(__('companyinformation')); ?></td>-->
				<td class="titlebold"><?php echo ucfirst(__('companyinformation')); ?></td>
				<td></td>	          
			   </tr>       
		       
		       
		 
			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('companyname'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if(isset($user_details1['company_name'])) { echo ucfirst($user_details1['company_name']); } ?>			
				   </div>
			   </td>   	
			   </tr>  
						   
			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('companyaddress'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if(isset($user_details1['company_address'])) { echo $user_details1['company_address']; } ?>				
				   </div>
			   </td>   	
			   </tr>  	          

			<?php  /* <tr>

			<td valign="top" width="20%"><label><?php echo __('country_label'); ?></label>:</td>        
			<td>
				   <div class="new_input_field">
				   <?php if(isset($user_details1['country_name'])) { echo $user_details1['country_name']; } ?>				
				   </div>
			</td>   	
			</tr>

			<tr>
			<td valign="top" width="20%"><label><?php echo __('state_label'); ?></label>:</td>
			<td>
				   <div class="new_input_field">
				   <?php if(isset($user_details1['state_name'])) { echo $user_details1['state_name']; } ?>				
				   </div>
			</td>      
			</tr> */ ?>
			<?php /* ?>
			<tr>
			<td valign="top" width="20%"><label><?php echo __('city_label'); ?></label>:</td>        
			<td>
				   <div class="new_input_field">
				   <?php if(isset($user_details1['city_name'])) { echo $user_details1['city_name']; } ?>				
				   </div>
			</td>   	
			</tr>
			<?php } ?>
			
		</table> 
		<?php }  ?>
<?php */ ?>
		<!--- Transaction Chart--->
			<div class="widget margin-bottom" >
			<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" />
			<h6><?php echo __('transactions'); ?></h6>
			<?php if($get_tot_trans_driver > 0) { ?> 
			 <form  action="" method="post" name="" id="" >
			 <div class="title" align="right">
				 <?php echo __('startdate');?>
				 <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_details1['id']; ?>">
				 <input type="hidden" name="user_name" id="user_name" value="<?php echo $driver_name; ?>">
				  <input type="hidden" name="user_type" id="user_type" value="D">
				 <input type="text"  readonly title="<?php echo __('select_datetime'); ?>"  id="transstartdate" name="transstartdate" value=""  />
				 <span id="tstartdate_error" class="errors" style="display:none;"></span>
				 <?php echo __('enddate');?>
				 <input type="text"  readonly title="<?php echo __('select_datetime'); ?>"  id="transenddate" name="transenddate" value=""  />
				 <span id="tenddate_error" class="errors" style="display:none;"></span>
				 <div class="button blackB"> 
				 <input type="hidden" name="type_export" id="type_export" value="">
				 <input type="button" name="search_transaction" id="search_transaction" value="GO" title="Go" >
				 
				 </div>
				 </div>	
			</form>
			<?php } ?>
			</div>
		<div id="driver_transactions">
			<?php if($display == 'display:none;'){ echo "<div class='no_data'>".__('no_data')."</div>"; } ?>
		<div id="transaction_chart" style="min-width: 400px; height: 400px; margin: 0 auto;<?php echo $display;?>"></div>
		</div>
		
		</div>
		
		<!--- Transaction Chart--->
		
		<!--Current Status of The Driver -->
		<div class="widget margin-bottom" >
			<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" /><h6><?php echo __('Current Status of Driver'); ?></h6>
				<?php if(($_SESSION["user_type"]=='C' || $_SESSION["user_type"]=='A') && $user_details1['login_status']=='S') {  ?> <div class="title" align="right"><div class="button blackB">
					<input type="button" name="logout" id="driver_logout"  onclick="d_logout('<?php echo $user_details1['id']; ?>','<?php echo $user_details1['company_id']; ?>')" value="logout" title="logout" >
					</div></div><?php } ?>
				<div style="width:auto; float:right; margin: 0px -1px;">		
				<!--<div class="title"><?php echo __('notification_setting')." : ";?><span class='btn btn-mini btn-primary'><?php echo $not_setting;?></span></div>-->
				</div>
			</div>
			<div id="on_going_trip_map" >
				<div class="ongoing">
					<div id="on_going_trip"></div>
					<div id="on_going_place"></div>
				</div>
				<?php if(SHOW_MAP !=1) { ?>
					<div id="map-canvas" style="width:100%;height:250px;"></div>
				<?php } ?>
			</div>
		</div>

		<!--Current Status of The Driver -->

	<!-- Last Three Trips Driver Map -->
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

	<!-- Last Three Trips Driver Map ends -->
		<!---Trip Charts-->
		<div class="widget margin-bottom" >
			<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" />
			<h6><?php echo __('trip_statitics'); ?></h6>
			<?php if($total_trip_statitics > 0) { ?>
			 <form  action="#" method="post" name="" id="" >
			 <div class="title" align="right">
				 <?php echo __('startdate');?>
				 <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_details1['id']; ?>">
				 <input type="hidden" name="user_name" id="user_name" value="<?php echo $driver_name; ?>">
				  <input type="hidden" name="user_type" id="user_type" value="D">
				 <input type="text"  readonly title="<?php echo __('select_datetime'); ?>"  id="tripstartdate" name="transstartdate" value="<?php echo date('Y-m-d', mktime(0, 0, 0, date("m") , date("d")-7, date("Y"))).' 00:00:00'; ?>"  />
				 <span id="tripstartdate_error" class="errors" style="display:none;"></span>
				 <?php echo __('enddate');?>
				 <input type="text"  readonly title="<?php echo __('select_datetime'); ?>"  id="tripsenddate" name="transenddate" value="<?php echo date('Y-m-d').' 23:59:59'; ?>"  />
				 <span id="tripenddate_error" class="errors" style="display:none;"></span>
				 <div class="button blackB"> 
				 <input type="hidden" name="type_export" id="type_export" value="">
				 <input type="button" name="search_transaction" id="search_statistics" value="GO" title="Go" >
				 
				 </div>
				 </div>	
			</form>
			<?php } ?>
			</div>
		<div id="driver_statistics">
		<?php if($display_trip == 'display:none;'){ echo "<div class='no_data'>".__('no_data')."</div>"; } ?>
		<div id="trip_statitics" style="min-width: 400px; height: 400px; margin: 0 auto;<?php echo $display_trip;?>"></div>
		</div>
		
		</div>
		<!---Trip Charts-->
		<!-- Upcoming Journey -->
		<!--<div class="widget margin-bottom" >
			<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" /><h6><?php echo __('Upcoming Journey'); ?></h6>
				<div style="width:auto; float:right; margin: 4px 3px;">		
					<div class="button greyishB"> </div>              

				</div>
			</div>
			<div>
				
					<?php if(count($driver_logs_upcoming)>0) { ?>
					<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">
						
						<thead>
						<tr>
							<td>#</td>
							<td><?php echo __('passenger_name'); ?></td>
							<td><b><?php echo __('Current_Location'); ?></b></td>
							<td><b><?php echo __('Drop_Location'); ?></b></td>
							<td><b><?php echo __('No_Passengers'); ?></b></td>
							<td><b><?php echo __('pictup_date');?></b></td>
							<td><b><?php echo __('pictup_time');?></b></td>
							
							</tr>
						</tr>
						</thead>					
						
						<?php 
						$i=1;
						($i%2 == 1)?$class="eventr":$class="oddtr";
					
							foreach($driver_logs_upcoming as $values)
							{
									
								?>
								<tr class="<?php echo $class; ?>">	
									<td><?php echo $i;?></td>
									<td><?php echo ucfirst($values->name); ?></td>
									<td><?php echo $values->current_location;?></td>
									<td><?php echo $values->drop_location;?></td>
									<td><?php echo $values->no_passengers;?></td>
									<td><?php echo date('d/m/Y',strtotime($values->pickup_time));?></td>
									<td><?php echo date('h:i:s', strtotime($values->pickup_time));?></td>
									
								
								</tr>
								
								<?php $i++;
							}
						 ?>
						</table>
					<?php }else {
							echo "<div class='no_data'>".__('no_data')."</div>"; 
							
						}?>					
				
				</div>
		</div>		-->
		<!-- Upcoming Journey -->
		
		<!-- Ongoing Journey -->
		<div class="widget margin-bottom" >
			<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" /><h6><?php echo __('Ongoing Journey'); ?></h6>
				<div style="width:auto; float:right; margin: 4px 3px;">		
				<div class="button greyish"></div>

				</div>
			</div>
			<div>
				
					<?php if(count($driver_logs_progress)>0) { ?>
					<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">
						
						<thead>
						<tr>
							<td>#</td>
							<td><?php echo __('passenger_name'); ?></td>
							<td><b><?php echo __('Current_Location'); ?></b></td>
							<td><b><?php echo __('Drop_Location'); ?></b></td>
							<td><b><?php echo __('No_Passengers'); ?></b></td>
							<td><b><?php echo __('pictup_date');?></b></td>
							<td><b><?php echo __('pictup_time');?></b></td>							
							
							</tr>
						</tr>
						</thead>					
						
						<?php 
						$i=1;
						($i%2 == 1)?$class="eventr":$class="oddtr";
							foreach($driver_logs_progress as $values)
							{
								?>
								<tr class="<?php echo $class; ?>">	
									<td><?php echo $i;?></td>
									<td><?php echo ucfirst($values->name); ?></td>
									<td><?php echo $values->current_location;?></td>
									<td><?php echo $values->drop_location;?></td>
									<td><?php echo $values->no_passengers;?></td>
									<td><?php echo date('d/m/Y',strtotime($values->pickup_time));?></td>
									<td><?php echo date('h:i:s', strtotime($values->pickup_time));?></td>
									
								
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
		
		<!-- Ongoing Journey -->
		
		<!-- Completed  Journey -->
		<div class="widget margin-bottom" >
			<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" />
			<h6><?php echo __('completed_journey'); ?></h6>
			<?php if($get_tot_trans_driver > 0) { ?>
			 <form  action="<?php echo URL_BASE;?>manage/genpdf" method="post" name="drivermgmt" id="drivermgmt" >
			 <div class="title" align="right">
				 <?php echo __('startdate');?>
				 <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_details1['id']; ?>">
				 <input type="hidden" name="user_name" id="user_name" value="<?php echo $driver_name; ?>">
				  <input type="hidden" name="user_type" id="user_type" value="D">
				 <input type="text"  readonly title="<?php echo __('select_datetime'); ?>" id="userstartdate" name="userstartdate" value="<?php echo date('Y-m-d').' 00:00:01'; ?>"  />
				 <span id="startdate_error" class="errors" style="display:none;"></span>
				 <?php echo __('enddate');?>
				 <input type="text"  readonly title="<?php echo __('select_datetime'); ?>" id="userenddate" name="userenddate" value="<?php echo date('Y-m-d').' 23:59:59'; ?>"  />
				 <span id="enddate_error" class="errors" style="display:none;"></span>
				 <div class="button blackB"> 
				 <input type="hidden" name="type_export" id="type_export" value="">
				 <input type="button" name="change_usercompany" id="change_usercompany" value="GO" title="Go" >
				 
				 </div>				
			</div>
			</form>
			<?php } ?>
			</div>
			<div id="drivercompleted_logs">
				<?php if(count($driver_logs_completed_transaction)>0) { ?>
				<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">
					<thead>
						<tr>
							<td>#</td>
							<td><?php echo __('trip_id'); ?></td>
							<td><?php echo __('passenger_name'); ?></td>
							<td><b><?php echo __('pickuploc_droploc'); ?></b></td>
							<td><b><?php echo __('pictup_date');?></b></td>
							<td><b><?php echo __('distance');?></b></td>
							<td><b><?php echo str_replace('%currency%',CURRENCY,__('fare'));?></b></td>
							<td><b><?php echo __('tax');?></b></td>
							<td><b><?php echo __('trip_total_fare').'('.CURRENCY.')';?></b></td>
							<td><b><?php echo __('equivalent_to_usd').CURRENCY_FORMAT; ?></b></td>
						</tr>
						</tr>
					</thead>
					<?php 
						$i=1;
						($i%2 == 1)?$class="eventr":$class="oddtr";
						foreach($driver_logs_completed_transaction as $values)
						{
							$distance = round($values['distance'],2).' '.$values['distance_unit'];
							$current_fare = round($values['fare'],2);
							$company_tax = $values['company_tax'];
							$percentvalue = ($company_tax/100)*$current_fare;
							$currtotal = $current_fare - $percentvalue;
							$travel_status = $values['travel_status'];
						if($_SESSION['company_id'] != 0){
							$company_currency = findcompany_currency($_SESSION['company_id']);
						}else{
							$company_currency = findcompany_currency($values['company_id']);
						}
							$company_currency_format = findcompany_currencyformat($values['company_id']);
							$convet_amt = currency_conversion($company_currency_format,$current_fare);
							$convet_amt = round($convet_amt,2);
						if($travel_status == 0) { $status = __('critical'); $row_solor = 'style="color:#00FF00;"';  } elseif($travel_status == 1) { $status = __('completed'); $row_solor = 'style="color:#00FF00;"'; }  elseif($travel_status == 2) { $status = __('inprogress'); $row_solor = 'style="color:#0000FF;"'; }  if($travel_status == 3) { $status = __('start_to_pickup'); $row_solor = 'style="color:#FFFF00;"'; } elseif($travel_status == 4) { $status = __('cancel_by_passenger'); $row_solor = 'style="color:#990066;"';} elseif($travel_status== 5) { $status = __('waiting_payment'); $row_solor = 'style="color:#00FFFF;"';} elseif($travel_status == 6) { $status = __('missed'); $row_solor = 'style="color:#FF6633;"';} elseif($travel_status == 7) { $status = __('dispatched'); $row_solor = 'style="color:#003333;"'; }  elseif($travel_status == 8) { $status = __('cancelled'); $row_solor = 'style="color:#990000;"';} 		//echo $row_solor;
					?>
					<tr class="<?php echo $class; ?>">
						<td><?php echo $i;?></td>
						<td><?php echo $values['_id']; ?></td>
						<td><?php echo (isset($values['name'][0]))?ucfirst($values['name'][0]):""; ?></td>
						<td>
							<p <?php echo $row_solor;?>><?php echo $values['current_location']; ?></p>
							<p><?php echo $values['drop_location']; ?></p>
						</td>
						<td><?php echo date('d/m/Y',strtotime($values['pickup_time'])).' '.__('at').'<br>'.date('h:i:s A', strtotime($values['pickup_time']));?></td>
						<td><?php echo $distance;?></td>
						<td><?php echo $currtotal;?></td>
						<td><?php echo $company_tax;?></td>
						<td><?php echo $current_fare;?></td>
						<td><?php echo $convet_amt; ?></td>
					</tr>
					<?php $i++;
						}
					?>
				</table>
				<div align="left" class="button blackB"> 
					<input type="button" name="gen_pdf" id="gen_pdf" value="<?php echo __('gen_pdf');?>" title="<?php echo __('gen_pdf');?>" onclick="gen_pdf()">
				</div>
				<?php }else {
					echo "<div class='no_data'>".__('no_data')."</div>"; 							
					}
				?>
			</div>
 
		</div>
		
		<!-- Completed Journey -->
		
		<!-- Shift Time Journey Start -->
		<div class="widget margin-bottom" >
			<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" />
			<h6><?php echo __('shift_history'); ?></h6>
				<div style="width:auto; float:right; margin: 4px 3px;">		
				<?php if(count($get_driver_shift_logs) > 0) {  ?>
					 <div class="small_butt"><a class="export_me_menu" href="<?php echo URL_BASE; ?>manage/drivershifthistory/<?php echo $user_details1['id']; ?>?order=desc"><?php echo __('view_all'); ?></a></div>
				<?php	
				}
				else
				{ 
				?>
				<div class="button greyish"></div>
				<?php } ?>        

				</div>
			</div>
			<div>
				
					<?php $tdvalue = array(); if(count($get_driver_shift_logs)>0) { ?>
					<?php 
					$temp=""; $i = 0; $j = 1;
					foreach($get_driver_shift_logs as $key => $values) { ?>
						<?php 
							$shift_start_date = date('Y-m-d', $values['shift_start']->sec);
							$shift_start_time = date('h:i:s A', $values['shift_start']->sec);
							$shift_end_date = $shift_end_time = "--";
							$shift_end_date = ($values['shift_end']!= "") ? date('Y-m-d', $values['shift_end']->sec) : "--";
							$shift_end_time = ($values['shift_end']!= "") ? date('H:i:s', $values['shift_end']->sec) : "--";
							if($shift_start_date != $temp)  {         
								$temp = $shift_start_date;
								$j = 1;
								$shift_history[$temp] = $j;												
							} else {
								$shift_history[$temp] = $j+1;
								//$j = $j+1;
								$j++;
							}										
						?>
					<?php } ?>	
					<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">
						
						<thead>
						<tr>
							<td>#</td>
<!--
							<td><?php //echo __('Date'); ?></td>
-->
							<td><?php echo __('taxi_no'); ?></td>
							<!--<td><b><?php //echo __('status');?></b></td><td><b><?php //echo __('time');?></b></td>-->
							<td><b><?php echo __('shift_startdate');?></b></td>
							<td><b><?php echo __('shift_endtime');?></b></td>
							<td><b><?php echo __('shift_time');?></b></td>
<!--
							<td><b><?php //echo __('Total Hours');?></b></td>
-->
							<!--
							<td><b><?php //echo __('start_km');?></b></td>
							<td><b><?php //echo __('end_km');?></b></td>
							<td><b><?php //echo __('run_km');?></b></td>							
							-->
						</tr>
						</thead>					
						
						<?php 
						$i=1;
						($i%2 == 1)?$class="eventr":$class="oddtr"; $tempT= $tempD =""; 
							$day = $hour = $minute = $second = $totalday = $totalhour = $totalminute = $totalsecond = $total_hr_min_sec = 0;
							foreach($get_driver_shift_logs as $values)
							{	
								$shift_start_date = date('Y-m-d', $values['shift_start']->sec);
						?>
								<tr class="<?php echo $class; ?>">	
								<td><?php echo $i;?></td>
								<?php //if($shift_start_date != $tempT){
									 //$tempT = $shift_start_date;
								?>
<!--
									<td rowspan="<?php //echo $shift_history[$shift_start_date]; ?>"><?php echo $i;?></td>
									<td rowspan="<?php //echo $shift_history[$shift_start_date]; ?>"><?php echo $shift_start_date;?></td>
-->
								<?php //$i++; 
								//} 
								?>
								<td>
									<a href="<?php echo URL_BASE.'manage/taxiinfo/'.$values['taxi_id'];?>">
								<?php echo ucfirst($values['taxi_no']); ?></a>
								</td>
								<!--
								<td><?php //echo isset($values['shift_status']) ? $values['shift_status'] : '-'; ?></td>
								<td>
									<?php 
										//if($values['shift_status'] == "Login / Shift IN" || $values['shift_status'] == "Shift IN" ) {
											//echo date('h:i:s A', $values['shift_start']->sec);
										//} else {
											//echo ($values['shift_end']!= "") ? date('h:i:s A', $values['shift_end']->sec) : '--';
										//}
									 ?>
								</td>
								-->			
								<td><?php echo date('Y-m-d h:i:s A', $values['shift_start']->sec);?></td>
								<td><?php  echo ($values['shift_end']!= "") ? date('Y-m-d h:i:s A', $values['shift_end']->sec) : '--';?></td>
								<td>
								<?php 
								$to_time=strtotime(date('Y-m-d H:i:s', $values['shift_start']->sec));
								$from_time= ($values['shift_end'] != "") ? strtotime(date('Y-m-d H:i:s', $values['shift_end']->sec)) : 0;
									if($from_time > $to_time)
									{
										$seconds = $from_time - $to_time;
										$day     = floor($seconds / 86400);
										echo $days    = floor($seconds / 86400). " Day ";
										$hour    = floor(($seconds - ($days * 86400)) / 3600);
										echo $hours   = floor(($seconds - ($days * 86400)) / 3600)." Hr ";
										$minute  = floor(($seconds - ($days * 86400) - ($hours * 3600))/60);
										echo $minutes = floor(($seconds - ($days * 86400) - ($hours * 3600))/60)." Min ";
										$second  = floor(($seconds - ($days * 86400) - ($hours * 3600) - ($minutes*60)));		
										echo $tdseconds = floor(($seconds - ($days * 86400) - ($hours * 3600) - ($minutes*60)))." Sec ";		
									}else {
										 echo __('shift_in');  $day = $hour = $minute = $second =  0;
									}	
								 ?>	
								</td>
								
								<?php /* if($shift_start_date != $tempD)  { $tempD = $shift_start_date; $k = $shift_history[$shift_start_date];?>
									<?php $totalday = $day; $totalhour = $hour; $totalminute = $minute; $totalsecond = $second; ?>
									<?php	$totalhours = $totalday. " Day ".$totalhour. " Hr ".$totalminute. " Min ".$totalsecond. " Sec "; ?>
									<td id="tddata-<?php echo $shift_start_date; ?>" rowspan="<?php echo $shift_history[$shift_start_date]; ?>">				
									</td>
									<?php if($shift_history[$shift_start_date] == 1) { ?>
										<?php $tdvalue[$shift_start_date] = $totalhours; ?>
									<?php } ?>
								<?php } else { ?>
									<?php $totalday += $day; $totalhour += $hour; $totalminute += $minute; $totalsecond += $second; ?>
										<?php $totalhours = $totalday. " Day ".$totalhour. " Hr ".$totalminute. " Min ".$totalsecond. " Sec "; ?>				
									<?php if($k == 1) { ?>
										<?php $tdvalue[$shift_start_date] = $totalhours; ?>	
									<?php } ?>
								<?php } */?>								
								<!--
								<td><?php //echo $values['start_km']; ?></td>
								<td><?php //echo ($values['end_km'] != 0) ? $values['end_km'] : '--'; ?></td>
								<td><?php //echo ($values['end_km'] != 0) ? $values['end_km'] - $values['start_km'] : '--'; ?></td>
								-->
								</tr>								
								<?php //$k--; ?><?php $i++; } ?>
						</table>
					<?php }else {
							echo "<div class='no_data'>".__('no_data')."</div>"; 
							
						}?>					
				
				</div>
		</div>
		
		<!-- Service Time Journey -->
			<div class="widget">
				<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" />
					<h6><?php echo $page_title." - ".ucfirst($driver_name); ?></h6>
				</div>
				
			<?php
			if(count($user_details)>0){
				$user_id = $user_details[0]['id'];
			 foreach($user_details as $res){
				//echo "<pre>";print_r($res); exit;
                                $res_rating = isset($res['rating'])?$res['rating']:0;
				if($res_rating != 0) {
				if($res['profile_image'])
				{
					$img1 = $res['profile_image'];
					$img = URL_BASE.'public/uploads/passenger/'.$img1;
					if(file_exists($img)) {
						$img = URL_BASE.'public/uploads/passenger/'.$img1;
					} else {
						$img = URL_BASE."public/images/noimages.jpg";
					}
				}else{
					$img = URL_BASE."public/images/noimages.jpg";
				}
				switch($res_rating){
					case 1: $star = "one";
							break;
					case 2: $star = "two";
							break;
					case 3: $star = "three";
							break;
					case 4: $star = "four";
							break;
					case 5: $star = "five";
							break;
					default: $star = "";
							break;
				}
			?>
			<div class="review" />
				<div class="review-head">
					<div style="float:left;" class="review-title"><?php echo (isset($res['name'][0]) )?ucfirst($res['name']):"";?></div>
					<div style="float:right;"><?php echo commonfunction::convertphpdate("M-d, Y",strtotime($res['createdate']));?></div>
				</div>
				<div class="review-text">
					<div class="reviewerprofile" style="float:left;">
						<div id="revimg">
							<img src="<?php echo $img;?>" width="50" height="50"/>
						</div>
						<div id="reviewer">
							<span class="review-owner" style="text-align:center;"><?php //echo $res->name;?></span>
						</div>
						<div id="revdate"></div>
					</div>
					<div style="float:right;width:92%;">
						<p class="rating <?php echo $star;?>"></p>
						<?php //if($res->comments){echo $res->comments;}else{echo __('no_comments');} ?>
					</div>
				</div>
			</div>
			<?php }
			}
			}else{
				$user_id = "";
				echo "<div class='nodata'>".__('no_data')."</div>";
			}
			 ?>
		</div>
        </div>
        <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt"></div></div>
    </div>
</div>

</div>
<input type="hidden" name="driver_id" id="driver_id" value="<?php echo $user_id; ?>">
<script src="<?php echo SCRIPTPATH; ?>highcharts.js"></script>
<script type="text/javascript" language="javascript">
//function to delete driver
function d_logout(driver_id,company_id)
{
   var answer = confirm("<?php echo __('Are you sure want to logout');?>");
	if (answer){
		$.ajax({
			url:"<?php echo URL_BASE;?>manage/driver_logout",
			type:"get",
			data:"driver_id="+driver_id+"&company_id="+company_id,
			success:function(data){
				//console.log(data);return false;
				if(data==1)
				{
					alert('<?php echo __('logout_success'); ?>');
					socket.emit('driver_logout_admin',driver_id);
					window.location=SrcPath+'manage/driverinfo/'+driver_id;
				}else{
					alert('<?php echo __('driver_in_trip'); ?>');
				}
			}
		});	
	}
	return false;  
}  
$(document).ready(function() {
	<?php foreach($tdvalue as $key => $value) { ?>
		var tddata = "#tddata-<?php echo $key; ?>";
		$("#tddata-<?php echo $key; ?>").append('<?php echo $value; ?>');	
	<?php } ?>
	$('#btnnew').click(function() {
		var id = $(this).data('id');
		var shift = $(this).data('shift-status');
		var parameter = JSON.stringify({ "driver_id":id,"shiftstatus":shift,"reason":"","update_id":id});
		var url = "<?php echo URL_BASE.MOB_API_URL;?>?type=driver_shift_status";
		var posting = $.post( url,parameter );
		posting.done(function( data ) {
			var res = jQuery.parseJSON(data);
			if (res.status == 1) {
				var html = '<div id="messagedisplay" style="opacity: 1;"><div style="width:570px; margin:0 auto;"><ul id="message" class="success_flash fl"><li>'+res.message+'</li></ul></div></div>';
            } else {
				var html = '<div id="messagedisplay" style="opacity: 1;"><div style="width:570px; margin:0 auto;"><ul id="message" class="success_flash fl"><li>'+res.message+'</li></ul></div></div>';
			}
			window.location.href = "<?php echo URL_BASE; ?>manage/driverinfo/"+id+"?status="+res.message+"&code="+res.status;
			//$('#response').append(html);
		}); 		
	});
	toggle(7);
	//change_driver_rating();
	$("#userstartdate").datetimepicker( {
		showTimepicker:true,
		showSecond: true,
		timeFormat: 'hh:mm:ss',
		dateFormat: 'yy-mm-dd',
		stepHour: 1,
		stepMinute: 1,
		maxDateTime : new Date(),
		stepSecond: 1
	} );
	$("#transstartdate,#tripstartdate").datetimepicker( {
		showTimepicker:true,
		showSecond: true,
		timeFormat: 'hh:mm:ss',
		dateFormat: 'yy-mm-dd',
		stepHour: 1,
		stepMinute: 1,
		maxDateTime : new Date(),
		stepSecond: 1
	} );

	$("#userenddate").datetimepicker( {
		showTimepicker:true,
		showSecond: true,
		timeFormat: 'hh:mm:ss',
		dateFormat: 'yy-mm-dd',
		stepHour: 1,
		stepMinute: 1,
		maxDateTime : new Date(), 
		stepSecond: 1
	} );
	$("#transenddate,#tripsenddate").datetimepicker( {
		showTimepicker:true,
		showSecond: true,
		timeFormat: 'hh:mm:ss',
		dateFormat: 'yy-mm-dd',
		stepHour: 1,
		stepMinute: 1,
		maxDateTime : new Date(), 
		stepSecond: 1
	} );
});

function change_driver_rating()
{
      		var driver_id = $("#driver_id").val();

		var page_no = '1';
		  $.ajax({
			url:"<?php echo URL_BASE;?>manage/getdriverratinglist",
			type:"get",
			data:"driver_id="+driver_id+"&page="+page_no,
			success:function(data){
			$('#driver_ratings').html();
			$('#driver_ratings').html(data);
			},
			error:function(data)
			{
				//alert(cid);
			}
		});	
    
}

function pagin_driver_rating(page_no)
{
	var driver_id = $("#driver_id").val();

	  $.ajax({
		url:"<?php echo URL_BASE;?>manage/getdriverratinglist",
		type:"get",
		data:"driver_id="+driver_id+"&page="+page_no,
		success:function(data){
		$('#driver_ratings').html();
		$('#driver_ratings').html(data);
		},
		error:function(data)
		{
			//alert(cid);
		}
	});	
}
 $("#change_usercompany").click(function(){
 	var startdate = $("#userstartdate").val();
	var enddate = $("#userenddate").val();
	var driver_id = $("#user_id").val();
	if(startdate ==''){
		$("#startdate_error").html("<?php echo __('select_startdate'); ?>");
		$("#startdate_error").show();
	} else {
		$("#startdate_error").html("");
		$("#startdate_error").hide();
	}
	if(enddate =='') {
		$("#enddate_error").html("<?php echo __('select_enddate'); ?>");
		$("#enddate_error").show();
	} else {
		$("#enddate_error").hide("");
		$("#enddate_error").hide();
	}
	if(startdate !='' && enddate!='')
	{
		if(startdate > enddate) {
			$("#startdate_error").html("<?php echo __('startdate_greater'); ?>");
			$("#startdate_error").show();
		} else {
			$('#drivercompleted_logs').html('<img alt="ajax-loading" src="'+SrcPath+'/public/css/img/ajax-loaders/ajax-loader-1.gif" />');	
			$("#startdate_error").html("");
			$("#startdate_error").hide();
			var dataS = "startdate="+startdate+"&enddate="+enddate+"&driver_id="+driver_id;
			$.ajax
			({ 			
				type: "POST",
				url: SrcPath+"manage/driver_completed_logs", 
				data: dataS, 
				cache: false, 
				dataType: 'html',
				success: function(response) 
				{ 	
					$('#drivercompleted_logs').html(response);
				}
			});
		}
	}
 });
 $("#search_transaction").click(function(){
 	var startdate = $("#transstartdate").val();
	var enddate = $("#transenddate").val();
	var driver_id = $("#user_id").val();
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
	} else {
		$("#tenddate_error").hide("");
		$("#tenddate_error").hide();
	}
	if(startdate !='' && enddate!=''){
		if(startdate > enddate) {
			$("#tstartdate_error").html("<?php echo __('startdate_greater'); ?>");
			$("#tstartdate_error").show();
		} else {
			$('#driver_transactions').html('<img alt="ajax-loading" src="'+SrcPath+'/public/css/img/ajax-loaders/ajax-loader-1.gif" />');
			$("#tstartdate_error").html("");
			$("#tstartdate_error").hide();
			var dataS = "startdate="+startdate+"&enddate="+enddate+"&driver_id="+driver_id;
			//var dataS = "{'startdate':'"+startdate+"','enddate':'"+enddate+"','driver_id':'"+driver_id+"'}";alert(dataS);
			$.ajax({
				type: "POST",
				url: SrcPath+"manage/driver_transaction_search", 
				data: dataS, 
				cache: false, 
				dataType: 'html',
				success: function(response) 
				{
					$('#driver_transactions').html(response);
				}
			});
		}
	}
 });
 
 $("#search_statistics").click(function(){
 	var startdate = $("#tripstartdate").val();
	var enddate = $("#tripsenddate").val();
	var driver_id = $("#user_id").val();
	if(startdate ==''){
		$("#tripstartdate_error").html("<?php echo __('select_startdate'); ?>");
		$("#tripstartdate_error").show();
	} else {
		$("#tripstartdate_error").html("");
		$("#tripstartdate_error").hide();
	}
	if(enddate =='') {
		$("#tripenddate_error").html("<?php echo __('select_enddate'); ?>");
		$("#tripenddate_error").show();
	} else {
		$("#tripenddate_error").hide("");
		$("#tripenddate_error").hide();
	}
	if(startdate !='' && enddate!=''){
		if(startdate > enddate){
			$("#tripstartdate_error").html("<?php echo __('startdate_greater'); ?>");
			$("#tripstartdate_error").show();
		} else {
			$('#driver_statistics').html('<img alt="ajax-loading" src="'+SrcPath+'/public/css/img/ajax-loaders/ajax-loader-1.gif" />');
			$("#tripstartdate_error").html("");
			$("#tripstartdate_error").hide();
			var dataS = "startdate="+startdate+"&enddate="+enddate+"&driver_id="+driver_id;
			//var dataS = "{'startdate':'"+startdate+"','enddate':'"+enddate+"','driver_id':'"+driver_id+"'}";alert(dataS);
			$.ajax({
				type: "POST",
				url: SrcPath+"manage/driver_statistics_search", 
				data: dataS, 
				cache: false, 
				dataType: 'html',
				success: function(response) 
				{ 	
					$('#driver_statistics').html(response);
				}
			});
		}
	}
 });
 
function gen_pdf(type)
{
	//alert(type);
 	var startdate = $("#userstartdate").val();
	var enddate = $("#userenddate").val();
	var driver_id = $("#drivers_id").val();
	var driver_name = $('#driver_name').val();	
	$('#type_export').val(type);
	if(startdate ==''){
		$("#startdate_error").html("<?php echo __('select_startdate'); ?>");
		$("#startdate_error").show();
	} else {
		$("#startdate_error").html("");
		$("#startdate_error").hide();
	}
	if(enddate =='') {
		$("#enddate_error").html("<?php echo __('select_enddate'); ?>");
		$("#enddate_error").show();
	} else {
		$("#enddate_error").hide("");
		$("#enddate_error").hide();
	}
	if(startdate !='' && enddate!='') {
		if(startdate > enddate) {
			$("#startdate_error").html("<?php echo __('startdate_greater'); ?>");
			$("#startdate_error").show();
		} else {
			$("#startdate_error").html("");
			$("#startdate_error").hide();
			document.forms['drivermgmt'].submit();
		}
	}
 }
<?php if(count($month) > 0 && count($fare) > 0) { ?>
$('#transaction_chart').highcharts({
	title: {
		text: 'Last 7 days Transaction',
		x: -20 //center
	},
	subtitle: {
		text: '',
		x: -20
	},
	xAxis: {
		categories: [<?php echo $month;?>]
	},
	yAxis: {
		title: {
			text: 'Amount (Rs)'
		},
		plotLines: [{
			value: 0,
			width: 1,
			color: '#808080'
		}]
	},
	tooltip: {
		valueSuffix: ''
	},
	legend: {
		layout: 'vertical',
		align: 'right',
		verticalAlign: 'middle',
		borderWidth: 0
	},
	series: [{
		name: 'Transaction',
		data: [<?php echo $fare;?>]
	}]
});
<?php } ?>
</script>
<?php if(count($createdate) > 0 && count($reject_trips) > 0 && count($cancelled_trips) > 0 && count($completed_trips) > 0) { ?>
<script>
$(function () {
	$('#trip_statitics').highcharts({
		chart: {
			type: 'column'
		},
		title: {
			text: '<?php echo __('trip_statitics'); ?>'
		},
		subtitle: {
			text: ''
		},
		xAxis: {
			categories: [<?php echo $createdate; ?>]
		},
		yAxis: {
			min: 0,
			title: {
				text: 'Trip Counts'
			}
		},
		tooltip: {
			headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
			pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
				'<td style="padding:0"><b>{point.y:.1f} Trips</b></td></tr>',
			footerFormat: '</table>',
			shared: true,
			useHTML: true
		},
		plotOptions: {
			column: {
				pointPadding: 0.2,
				borderWidth: 0
			}
		},
		series: [{
			name: 'Rejected Trips',
			data: [<?php echo $reject_trips; ?>]

		}, {
			name: 'Cancelled Trips',
			data: [<?php echo $cancelled_trips; ?>]

		}, {
			name: 'Completed Trips',
			data: [<?php echo $completed_trips; ?>]

		}]
	});
});
</script>
<?php } ?>
