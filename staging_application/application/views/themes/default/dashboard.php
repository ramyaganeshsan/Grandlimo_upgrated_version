<?php 
	defined('SYSPATH') OR die('No direct access allowed.'); 
	foreach($dashstyles as $file => $type)
	{ 
	   echo HTML::style($file, ['media' => $type]); 
	}    
	foreach($dashscripts as $file => $type)
	{ 
	   echo HTML::script($type); 
	}   
 ?>
			<!-- Navigation Start -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					  <?php echo new View(USERVIEW."/passenger_sidebar"); ?>
				</div><!--/.well -->
			</div><!--/span-->
			<!-- Navigation End -->
			
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=<?php echo GOOGLE_MAP_API_KEY; ?>&sensor=false"></script>
<script type ="text/javascript" src="<?php echo SCRIPTPATH; ?>move_cursor.js"></script>
<script type="text/javascript">
  
  var map;
  var directionDisplay;
  var directionsService;
  var stepDisplay;
  var markerArray = [];
  var position;
  var marker = null;
  var polyline = null;
  var poly2 = null;
  var speed = 0.000005, wait = 1;
  var infowindow = null;
  var s=0;
    var myPano;   
    var panoClient;
    var nextPanoId;
  var timerHandle = null;

function createMarker(latlng, label, html) {
// alert("createMarker("+latlng+","+label+","+html+","+color+")");
var drivername = $("#drivername").val();
    var contentString = '<b>'+drivername+'</b><br>'+html;
    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        icon: SrcPath+'public/images/car.png',
        title: label,
        zIndex: Math.round(latlng.lat()*-100000)<<5
        });
        marker.myname = label;
        // gmarkers.push(marker);

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(contentString); 
        infowindow.open(map,marker);
        });
    return marker;
}


function initialize(start) {
  infowindow = new google.maps.InfoWindow(
    { 
      size: new google.maps.Size(150,50)
    });
    // Instantiate a directions service.
    directionsService = new google.maps.DirectionsService();
    
    // Create a map and center it on Manhattan.
    var myOptions = {
      zoom: 13,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);

    address = start;
   // alert(start);
    geocoder = new google.maps.Geocoder();
	geocoder.geocode( { 'address': address}, function(results, status) {
       map.setCenter(results[0].geometry.location);
	});
    
    // Create a renderer for directions and bind it to the map.
    var rendererOptions = {
      map: map
    }
    directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions);
    
    // Instantiate an info window to hold step text.
    stepDisplay = new google.maps.InfoWindow();

    polyline = new google.maps.Polyline({
	path: [],
	strokeColor: '#FF0000',
	strokeWeight: 3
    });
    poly2 = new google.maps.Polyline({
	path: [],
	strokeColor: '#FF0000',
	strokeWeight: 3
    });
  }

  
  
	var steps = []

	function calcRoute(start_place,end_place){


if (timerHandle) { clearTimeout(timerHandle); }
if (marker) { marker.setMap(null);}
polyline.setMap(null);
poly2.setMap(null);
directionsDisplay.setMap(null);
    polyline = new google.maps.Polyline({
	path: [],
	strokeColor: '#FF0000',
	strokeWeight: 3
    });
    poly2 = new google.maps.Polyline({
	path: [],
	strokeColor: '#FF0000',
	strokeWeight: 3
    });
    // Create a renderer for directions and bind it to the map.
    var rendererOptions = {
      map: map
    }
directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions);

	    var start = start_place;
	    var end = end_place;
		var travelMode = google.maps.DirectionsTravelMode.DRIVING

	    var request = {
	        origin: start,
	        destination: end,
	        travelMode: travelMode
	    };

		// Route the directions and pass the response to a
		// function to create markers for each step.
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK){
	directionsDisplay.setDirections(response);

        var bounds = new google.maps.LatLngBounds();
        var route = response.routes[0];
        startLocation = new Object();
        endLocation = new Object();

        // For each route, display summary information.
	var path = response.routes[0].overview_path;
	var legs = response.routes[0].legs;
        for (i=0;i<legs.length;i++) {
          if (i == 0) { 
            startLocation.latlng = legs[i].start_location;
            startLocation.address = legs[i].start_address;
            // marker = google.maps.Marker({map:map,position: startLocation.latlng});
            marker = createMarker(legs[i].start_location,"start",legs[i].start_address,"green");
          }
          endLocation.latlng = legs[i].end_location;
          endLocation.address = legs[i].end_address;
          var steps = legs[i].steps;
          for (j=0;j<steps.length;j++) {
            var nextSegment = steps[j].path;
            for (k=0;k<nextSegment.length;k++) {
              polyline.getPath().push(nextSegment[k]);
              bounds.extend(nextSegment[k]);



            }
          }
        }

        polyline.setMap(map);
        map.fitBounds(bounds);
//        createMarker(endLocation.latlng,"end",endLocation.address,"red");
	map.setZoom(18);
	//startAnimation();
	FetchData();
    }                                                    
 });
}
  

  
      var step = 50; // 5; // metres
      var tick = 100; // milliseconds
      var eol;
      var k=0;
      var stepnum=0;
      var speed = "";
      var lastVertex = 1;


//=============== animation functions ======================
      function updatePoly(d) {
        // Spawn a new polyline every 20 vertices, because updating a 100-vertex poly is too slow
        if (poly2.getPath().getLength() > 20) {
          poly2=new google.maps.Polyline([polyline.getPath().getAt(lastVertex-1)]);
          // map.addOverlay(poly2)
        }

        if (polyline.GetIndexAtDistance(d) < lastVertex+2) {
           if (poly2.getPath().getLength()>1) {
             poly2.getPath().removeAt(poly2.getPath().getLength()-1)
           }
           poly2.getPath().insertAt(poly2.getPath().getLength(),polyline.GetPointAtDistance(d));
        } else {
          poly2.getPath().insertAt(poly2.getPath().getLength(),endLocation.latlng);
        }
      }


      function animate(d) {
// alert("animate("+d+")");
        if (d>eol) {
          map.panTo(endLocation.latlng);
          marker.setPosition(endLocation.latlng);
          return;
        }
        var p = polyline.GetPointAtDistance(d);
        map.panTo(p);
        marker.setPosition(p);
        updatePoly(d);
        timerHandle = setTimeout("animate("+(d+step)+")", tick);
      }


/*function startAnimation() {
        eol=polyline.Distance();
        map.setCenter(polyline.getPath().getAt(0));
        // map.addOverlay(new google.maps.Marker(polyline.getAt(0),G_START_ICON));
        // map.addOverlay(new GMarker(polyline.getVertex(polyline.getVertexCount()-1),G_END_ICON));
        //marker = new google.maps.Marker({location:polyline.getPath().getAt(0)} ,{icon:car});
        // map.addOverlay(marker);
       // poly2 = new google.maps.Polyline({path: [polyline.getPath().getAt(0)], strokeColor:"#0000FF", strokeWeight:10});
        // map.addOverlay(poly2);
        setTimeout("animate(50)",1000);  // Allow time for the initial map display
}
*/
function change_pos(lat,lng) {
	//alert(lat+'yes'+lng);
    var LatLong = new google.maps.LatLng(lat,lng);
    marker.setPosition(LatLong);
}
var g=0;
function FetchData() {
	var driverid = $('#driverid').val(); 
lat_lng=new Array();
var lng1="";
var lat1="";
	jQuery.ajax({
	
	//url:'track.php?track_user='+i,
	url:'track_location?track_user='+g+'&driverid='+driverid,
	type :'POST',
	success:function(data){		
		lat_lng = data.split("[BR]");
		lat1 = lat_lng[0];
		lng1 = lat_lng[1];

		change_pos(lat1,lng1);
	}
				
	});
	g++;
	 

}
//setInterval(FetchData, 2000);
//=============== ~animation funcitons =====================

//google.maps.event.addDomListener(window, 'load', initialize);
//google.maps.event.addDomListener(window, 'load', calcRoute);
</script>



<div id="content" class="span10">
	 <?php
//For Notice Messages
								//===================
								$sucessful_message=Message::display();
//echo $sucessful_message;		
//$Message->message;
		    if($sucessful_message) { ?>

				<div id="messagedisplay">
					<div class="alert alert-success">
                        <div class="success_float_tt">
							<button type="button" class="close" data-dismiss="alert">×</button>
		                    <label style="float: left; margin: 4px 0 0 6px;"><?php echo $sucessful_message; ?></label>
                        </div>
                    </div>
			    </div>
								<?php } ?>    
		<!-- content starts -->	
		<div class="bread_crumb_holder">
			<ul class="breadcrumb">
				<li>
					<a href="<?php echo URL_BASE; ?>"><?php echo __('home_breadcrumb'); ?></a> <span class="divider">/</span>
				</li>
				<li>
					<a href="#"><?php echo __('dashboard'); ?></a>
				</li>
			</ul>
		</div>
		
				<div class="row-fluid sortable ui-sortable">
				<div class="box span12">					 
					<div class="box-header well" data-original-title>
						<h2><i class="icon icon-blue icon-refresh "></i><?php echo " ".__('currently_booked_journey'); ?></h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							
						</div>
					</div>													
					<div class="box-content">
						 <?php //print_r($passengers_current);
						 if(count($passengers_current) > 0){ ?>
						<table class="table table-hover table-bordered">		
							<tr>
								<td>#</td>
								<td><b><?php echo __('Current_Location'); ?></b></td>
								<td><b><?php echo __('Drop_Location'); ?></b></td>
								<?php /* <td><b><?php echo __('No_Passengers'); ?></b></td> */ ?>
								<td><b><?php echo __('pictup_date');?></b></td>
								<td><b><?php echo __('pictup_time');?></b></td>
								<!-- <td><b><?php echo __('waiting_time');?></b></td>
								<td><b><?php echo __('driver_name');?></b></td>			 -->	
									<td><?php echo __('booking_type');?></td>
							<td><?php echo __('model_name');?></td>
							<td><?php echo __('payment_type');?></td>
								 <td><b><?php echo __('Status');?></b></td>									
							</tr>
							<?php 
							$i=1;
							//print_r($passengers_inprogress);
							foreach($passengers_current as $values)
							{
								if($i <= 5 ){
								$pickup_date = Commonfunction::convertphpdate('d/m/Y',$values['pickup_time']);
								$pickup_time = Commonfunction::convertphpdate('h:i:s a',$values['pickup_time']);
								$travel_status = $values['travel_status'];
							?>
							<tr>			
								<td><?php echo $i;?></td>
								<td><?php echo $values['current_location'];?></td>
								<td><?php echo (isset($values['drop_location'])=="")?'-':$values['drop_location']; ?></td>
							<?php /*	<td><?php echo (isset($values['no_passengers'])=="0")?'-':$values['no_passengers'];?></td>*/?>
								<td><?php echo $pickup_date;?></td>
								<td><?php echo $pickup_time;?></td>
								<td><?php echo $values['book_type'];?> </td>
								<td><?php echo $values['model_name'];?> </td>
								<td><?php echo ($values['payment_type'] == 1)?'Cash':(($values['payment_type'] == 2)?'Credit Card':'Knet');?> </td>
								<!-- <td><?php echo isset($values['waitingtime'])?$values['waitingtime']:'0'.' Mins';?></td> 
								<td><?php //$name = $this->get_driver_name($values['driver_id']);//
								echo isset($values['drivername'])?$values['drivername']:'--';
								$comments = isset($values['comments'])?htmlentities($values['comments']):'';?></td>-->
								<td class="cancel_journey" id="<?php echo $values['_id'];?>"><?php if($travel_status == 0 || $travel_status == 9 || $travel_status == 3 )
								{
									//echo __('time_to_reach').'  '.__('mins');
									echo '<div class="btn btn-small btn-inverse" onclick=canceltrip('.$values['_id'].')>'.__('cancel_trip_by_passenger').' <i class="icon-chevron-right icon-white"></i></div>';
								}
								else if($values['travel_status'] == 2 )
								{
									echo __('passenger_in_journey');
								}
								?><br>
								<?php if(SHOW_MAP !=2) { ?>
								<a href=javascript:show_map("<?php echo str_replace(" ","",$values['current_location']) ?>","<?php echo str_replace(" ","",$values['drop_location']) ?>","<?php echo $values['driver_id'] ?>","<?php echo str_replace(" ","",$values['drivername']) ?>","<?php echo $values['pickup_latitude'] ?>","<?php echo $values['pickup_longitude'] ?>","<?php echo $values['drop_latitude'] ?>","<?php echo $values['drop_longitude'] ?>")><?php echo __('View'); ?></a>
								<?php } ?>
								</td>
								<!--<a href=javascript:getLocation("<?php //echo str_replace(" ","",$values['current_location']) ?>","<?php //echo str_replace(" ","",$values['drop_location']) ?>","<?php //echo $values['driver_id'] ?>","<?php //echo str_replace(" ","",$values['drivername']) ?>","<?php //echo $values['pickup_latitude'] ?>","<?php //echo $values['pickup_longitude'] ?>","<?php //echo $values['drop_latitude'] ?>","<?php //echo $values['drop_longitude'] ?>")><?php //echo __('View'); ?></a></td>-->
								
								</tr>
							<?php $i=$i+1;} } ?>
						</table>
							<?php
						 if(count($passengers_current)>5){
							echo '<div class="view_more_completed_journey" ><a href="'.URL_BASE.'passengers/memberstrip?type=passenger" class="imgclass">View More</a></div>';
						 }  
						
						?>
						
						<?php } else { echo __('no_data');} ?>
					</div>
				</div><!-- Passenger currently booked Status -->
				</div>
			<div class="row-fluid sortable ui-sortable">
				<?php if(count($passengers_booked)>0){?>
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon icon-blue icon-home "></i><?php echo " ".__('book_status'); ?></h2>

						<div class="box-icon">						
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					
						<div class="box-content box-content1">
						
						<table class="table table-hover table-bordered">
						
						<tr>
							<td>#</td>
							<td><b><?php echo __('Current_Location'); ?></b></td>
							<td><b><?php echo __('Drop_Location'); ?></b></td>
							<td><b><?php echo __('No_Passengers'); ?></b></td>
							<td><b><?php echo __('pictup_time');?></b></td>
							<td><b><?php echo __('driver_name');?></b></td>						
							<td><b><?php echo __('status_label');?></b></td>								
						</tr>
						<?php 
						$i=1;
						foreach($passengers_booked as $values)
						{
							$driver_reply = $values['driver_reply'];
						?>
						<tr>			
							<td><?php echo $i;?></td>
							<td><?php echo $values['current_location'];?></td>
								<td><?php echo ($values['drop_location'])==""?'-':$values['drop_location']; ?></td>
								<td><?php echo ($values['no_passengers'])=="0"?'-':$values['no_passengers'];?></td>
							<td><?php echo date('h:i:s A', strtotime($values['pickup_time']));?></td>
							<td><?php //$name = $this->get_driver_name($values['driver_id']);
							echo $values['drivername']; $comments = htmlentities($values['comments']);?></td>
							<td><?php if($driver_reply != 'C' && $driver_reply != 'R') { ?>
							<?php //print_r($_SESSION['siteinfo'][0]['notification_settings']);?>
							<script>
								var secs = <?php echo ADMIN_NOTIFICATION_TIME;?>;
								
								$(document).ready(function(){
								$(".kkcount-down-<?php echo $i;?>")
									.attr('data-seconds', secs)
									.kkcountdown({
									minutesText	: ':',
									secondsText	: '',
									timeout: 60000,
									displayZeroDays : false,
									textAfterCount: '',//'Waiting for driver response',
									callback	: changedriver_status<?php echo $i;?>,
									addClass : 'errors',
								});
								$('.kkcount-down-<?php echo $i;?>').append('<br>Waiting for driver response');
							});
							setTimeout(function() 
							{
								getdriver_status<?php echo $i;?>()

							}, 5000);
								function getdriver_status<?php echo $i;?>()
								  {
										//alert(<?php echo $values['passengers_log_id'];?>);
										var dataS = "value="+<?php echo $values['passengers_log_id'];?>;
										var response;
										//$('.kkcount-down-<?php echo $i;?>').html('<img alt="ajax-loading" width="16px" height="11px" src="'+SrcPath+'/public/css/img/ajax-loaders/ajax-loader-1.gif" />');
												$.ajax
												({ 			
													type: "POST",
													url: SrcPath+"passengers/getdriver_status", 
													data: dataS, 
													cache: false, 
													dataType: 'html',
													success: function(response) 
													{ 		
			
													$('.kkcount-down-<?php echo $i;?>').html(response);	
													} 
													 
												});	
								   }
								function changedriver_status<?php echo $i;?>()
								  { 
										//alert(<?php echo $values['passengers_log_id'];?>);
										var dataS = "value="+<?php echo $values['passengers_log_id'];?>;
										var response;
										//$('.kkcount-down-<?php echo $i;?>').html('<img width="16px" height="11px" alt="ajax-loading" src="'+SrcPath+'/public/css/img/ajax-loaders/ajax-loader-1.gif" />');
												$.ajax
												({ 			
													type: "POST",
													url: SrcPath+"passengers/changedriver_status", 
													data: dataS, 
													cache: false, 
													dataType: 'html',
													success: function(response) 
													{ 		
					
															$('.kkcount-down-<?php echo $i;?>').html(response);	
													} 
													 
												});	
								   }
							</script>
							<span data-seconds="60" class="kkcount-down-<?php echo $i;?>"></span>
							<?php } else { echo __("request_canceled_passenger").'<br><div class="btn btn-small btn-inverse" onclick=gettaxi("'.$values['passengers_log_id'].'","Yes")>'.__('get_taxi').' <i class="icon-chevron-right icon-white"></i></div>';
							 } ?>
							</td>
							</tr>
						<?php $i=$i+1;} ?>
						</table>
						

						
						
						<input type="hidden" name="userid" id="userid" value="<?php echo $userid;?>" />
						</div>
				</div>
				<?php }  ?>
				<!-- Passenger Status End -->
				
			</div><!--/span-->
			
			<div class="row-fluid sortable ui-sortable">
				<div class="box span7" >
					<div class="box-header well">
						<h2><i class="icon icon-blue icon-sent"></i> <?php echo __('recent_travel'); ?></h2>
						<div class="box-icon">							
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					
					<div class="box-content">
						<?php if(count($passengers_all_compl) > 0){ ?>
						<ul class="dashboard-list" style="max-height:470px;overflow-y:auto;">	
						<?php 
						 					
							foreach($passengers_all_compl as $values)
							{ 
								?>
								<li>	
										<i class="icon-arrow-right "></i>
										<?php echo $values['current_location']; ?> 
										<br/>
										<i class="icon-arrow-left"></i> 
										<?php echo isset($values['droplocation'])?$values['droplocation']:'-'; ?> 
								</li>
								<?php
								
							}							
						?>
						</ul>
						<?php 
							//if($passengers_total_all_compl[0]['co_nt']>REC_PER_PAGE){
							//echo '<div class="view_more_completed_journey" ><a href="'.URL_BASE.'passengers/recenttravel" class="imgclass">View More</a></div>';
						//}
						 } else { echo __('no_data');} ?>						
					</div>											
				</div><!--/span-->
				<!--Passengers Details -->
				<!--edit profile details -->  
				
				<div class="box span5" style="">
					<div class="box-header well" data-original-title="">
						<h2><i class="icon icon-blue icon-messages"></i> <?php echo __('profile_details'); ?></h2>
						<div class="box-icon">							
							<a --href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<?php if(count($passengers_profile) > 0){ ?>
						<div class="dashboard-list" >	
						<?php 
						 		$values =$passengers_profile;	
							//foreach($passengers_profile as $values)
							//{ 
															 	
								?>
								
									<?php 
										if(!empty($values['profile_image']) && (file_exists($_SERVER['DOCUMENT_ROOT'].'/public/uploads/passenger/thumb_'.$values['profile_image']))){
											echo '<span class="right_class"><img src="'.URL_BASE.'public/uploads/passenger/thumb_'.$values['profile_image'].'" class="img-polaroid alt="profile"/></span>';
										}else{
											echo '<span class="right_class"><img src="'.URL_BASE.'public/images/noimages.jpg" alt="profile" class="img-polaroid"/></span>';
										}
										echo '<strong><span class="smoke">'.ucfirst(__('name')).' : </span><span class="smoke">'.ucfirst($values['name']).'</span></strong><br/>';
										echo '<strong><span class="smoke">'.ucfirst(__('phone')).' : </span><span class="smoke">'.$values['phone'].'</span></strong><br/>';
										echo '<strong><span class="smoke">'.ucfirst(__('email')).' : </span><span class="smoke">'.$values['email'].'</span></strong><br/>';
										/*echo '<strong><span class="smoke">'.ucfirst(__('address')).' : </span><span class="smoke">'.$values['address'].'</span></strong><br/>';
										echo '<strong><span class="smoke">'.ucfirst(__('credit_card_no')).' : </span><span class="smoke">';
										if($values['creditcard_no'] != "")
										{
											//echo $values['creditcard_no'];exit;
											$creditcard_no = encrypt_decrypt('decrypt',$values['creditcard_no']);
											echo $ccNumber = repeatx($creditcard_no,'X',4); 
											echo '</span></strong><br/>';
										} */
										/*echo '<strong><span class="smoke">'.ucfirst(__('credit_card_cvv')).' : </span><span class="smoke">'.$values['creditcard_cvv'].'</span></strong><br/>';
										echo '<strong><span class="smoke">'.ucfirst(__('credit_card_expirydate')).' : </span><span class="smoke">'.$values['expdatemonth'].' / '.$values['expdateyear'].'</span></strong><br/>';*/


										echo '<a href="'.URL_BASE.'passengers/editprofile" class="imgclass">'.__("edit_profile").'</a>';
									?> 
								
								<?php
								
						//	}
						?>
						</div>
						<?php } else { echo __('no_data');} ?>
					</div>
					
					
				</div>
				
				  
				<!--Recent Comments to Drivers -->  
				
				<?php /* <div class="box span6" style="width: 555px; height: auto; margin: 0;"> 
					<div class="box-header well" data-original-title="">
						<h2><i class="icon icon-blue icon-messages"></i> <?php echo __('recent_comments_to_driver'); ?></h2>
						<div class="box-icon">							
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<?php if(count($passengers_all_compl) > 0){ ?>
						<ul class="dashboard-list" style="max-height:250px;overflow-y:auto;">	
						<?php 
						 					
							foreach($passengers_all_compl as $values)
							{ 
								?>
								<li>
									<?php 
										echo '<strong><span class="green">'.ucfirst($values['drivername']).'</span></strong><br/>';
										$comments = htmlentities($values['comments']);
										
										if(strlen($comments)>0)
											echo $comments;
										else
											echo __('no_comments');
									?> 										 
								</li>
								<?php
								
							}							
						?>
						</ul>
						<?php } else { echo __('no_data');} ?>
					</div>	
					
					
				</div> */?>
				
				<!--Recent Comments to Drivers -->  
				
				
				
				<!--edit profile details -->  
			
				<!--/span-->
				
			</div>
			

			

				
		<div  id="comments_ratings">
		
		<!-- Starting Map -->
		
			<div class="box span6" style="margin:5px 0 5px 100px;width:75%;float:left;display:none;" id="map-container"> 
				<div class="box-header well" data-original-title> 
					<h2><i class="icon icon-blue icon-lightbulb "></i><?php echo " ".__('current_driver_loca'); ?></h2>
					<div class="box-icon">						
						<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
					</div>
				</div>
				<div id="tools">			
					<input type="hidden" name="start" id="start" value="Palakad, Kerala" />	
					<input type="hidden" name="end" id="end" value="Ganapathy, Coimbatore" />			
				</div>
				<div id="map-canvas" style="width:100%;height:300px;display:none;"></div>
				<!--<div id="map" style="height:300px;"></div>
				<div id="info"></div>-->
				<input type="hidden" name="driverid" id="driverid" value="" />
				<input type="hidden" name="drivername" id="drivername" value="" />
				<input type="hidden" name="location1" id="location1" value="" />
				<input type="hidden" name="location2" id="location2" value="" />
				<input type="hidden" name="picklat" id="picklat" value="" />
				<input type="hidden" name="picklon" id="picklon" value="" />
				<input type="hidden" name="droplat" id="droplat" value="" />
				<input type="hidden" name="droplon" id="droplon" value="" />
				<!--<input type="button" onclick="change_pos()"; value="Trackme">-->
			</div>	
		
		<!-- Ending Map -->
		
		
		<div class="row-fluid sortable">
			<div class="box span12">
				<div class="box-header well" data-original-title>
					<h2><i class="icon icon-blue icon-home "></i><?php echo " ".__('completed_journey'); ?></h2>

					<div class="box-icon">						
						<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
					</div>
				</div>
				
					<div class="box-content ">
						<?php if(count($passengers_all_compl_trans) > 0){ ?>
						<table class="table table-hover table-bordered">
						
						<tr>
							<td>#</td>
							<td><b><?php echo __('Current_Location'); ?></b></td>
							<td><b><?php echo __('Drop_Location'); ?></b></td>
							<td><b><?php echo __('pic_date_time');?></b></td>
							<!--<td><b><?php //echo __('pictup_time');?></b></td>-->
							<td><b><?php echo __('driver_name');?></b></td>	
							<?php /* <td><b><?php echo __('distance_km');?></b></td>		
							<td><b><?php echo str_replace('%currency%',CURRENCY,__('taxi_fare_km'));?></b></td>		*/ ?>
							<td><b><?php echo __('trip_total_fare').'('.CURRENCY.')';?></b></td>	
							<!--<td><b><?php //echo __('transaction_id');?></b></td>	-->
							<td><b><?php echo __('payment_type');?></b></td>	
							<td><b><?php echo __('action');?></b></td>		
						</tr>
						<?php 
						
						$i=1;
						$total_fare = "";
						//echo '<pre>';print_r($passengers_all_compl_trans);exit;
						foreach($passengers_all_compl_trans as $values) 
						{
							
							$pickup_date = Commonfunction::convertphpdate('d/m/Y',$values['pickup_time']);
								$pickup_time = Commonfunction::convertphpdate('h:i:s a',$values['pickup_time']); 
							//print_r($values);
							$distance = round($values['distance'],2);
							$current_fare = round((isset($values['fare'])?$values['fare']:0),2);
							$fare_km = 0;
							if(isset($values['fare']) && ($current_fare > 0) && ($distance > 0) )
							{
								$fare_km = $current_fare/$distance;
							}
							$total_fare = $current_fare+$total_fare;
							$track_id = $values['_id'];
						?>
						<tr>			
							<td><?php echo $i;?></td>
							<td><?php echo $values['current_location'];?></td>
								<td><?php echo (isset($values['droplocation'])=="")?'-':$values['droplocation']; ?></td>
							<!--	<td><?php echo ($values['no_passengers'])=="0"?'-':$values['no_passengers'];?></td> -->
							<td><?php echo $pickup_date.' '.$pickup_time;?></td>
							<!--<td><?php //echo date('h:i:s a', strtotime($values['pickup_time']));?></td>-->
							<td><?php
							echo isset($values['drivername'])?$values['drivername']:'';
							$comments = isset($values['comments'])?htmlentities($values['comments']):'';?></td>
							<?php /* <td><?php echo $distance;?></td>
							<td><?php echo round($fare_km,2);?></td> */ ?>
							<td><?php echo $current_fare;?></td>
							<!--<td><a style="cursor:pointer;" onclick="transactiondetailspopup('<?php //echo $values['transaction_id']; ?>','<?php //echo $values['correlation_id'];?>','<?php //echo $values['amt'];?>','<?php //echo $values['payment_status']; ?>');"><?php //echo $values['transaction_id'];?></a></td>-->
							<td><?php if($values['payment_type'] == 2) { echo 'Credit Card Using Paypal'; } else { echo 'Cash'; } ?></td>
							<td style="text-align:center;">
								<?php if(isset($values['payment_type']) == 2) { $pay_mode = 'Credit Card Using Paypal'; } else { $pay_mode = 'Cash'; } ?>
								<?php if(isset($values['rating']) && $values['rating'] != 0){?>
								<input type="button" class="btn btn-inverse view_icon" value="<?php echo __('view_label');?>" title="<?php echo __('view_label');?>" onclick="commentsdetailspopup('<?php echo $values['drivername'];?>','<?php echo $values['driver_id'];?>','<?php echo $values['_id'];?>','<?php echo $comments?>','<?php echo $meta_title; ?>','<?php echo URL_BASE;?>','<?php echo $values['current_location'];?>','<?php echo isset($values['drop_location'])?$values['drop_location']:'';?>');" />
								<?php }else {?>
								<input type="button" class="btn btn-inverse comment_icon" value="<?php echo __('comments');?>" title="<?php echo __('comments');?>" onclick="showcommentspopup('<?php echo $values['drivername'];?>','<?php echo $values['driver_id'];?>','<?php echo $values['_id'];?>','<?php echo $comments?>');" />
								<?php } ?>
								<br />
								
								
								</td>
							</tr>
						<?php $i=$i+1;} ?>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td><?php echo __('total'); ?>(<?php echo CURRENCY;?>)</td>
							<td><?php echo $total_fare;?></td>							
						</tr>
						</table>
						<?php
						 if(count($passengers_all_total_compl_trans)>2){
							echo '<div class="view_more_completed_journey" ><a href="'.URL_BASE.'passengers/completedjourney" class="imgclass">View More</a></div>';
						 }?>
						<?php } else { echo __('no_data');} ?>
					</div>
				</div>
				
			</div>
		</div>
        <!-- content starts -->		
        
        <div class="row-fluid sortable">
			<div class="box span12">
				<div class="box-header well" data-original-title>
					<h2><i class="icon icon-blue icon-home "></i><?php echo " ".__('cancel_journey'); ?></h2>

					<div class="box-icon">						
						<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
					</div>
				</div>
				
					<div class="box-content ">
						<?php if(count($all_transaction_list) > 0){ ?>
						<table class="table table-hover table-bordered">
						
						<tr>
							<td>#</td>
							<td><b><?php echo __('Current_Location'); ?></b></td>
							<td><b><?php echo __('Drop_Location'); ?></b></td>
							<td><b><?php echo __('pic_date_time');?></b></td>
							<!--<td><b><?php //echo __('pictup_time');?></b></td>-->
							<?php /* <td><b><?php echo __('driver_name');?></b></td>	
							<td><b><?php echo __('distance_km');?></b></td>		
							<td><b><?php echo __('No_Passengers');?></b></td>	
							<td><b><?php echo __('cancel_fare').'('.CURRENCY.')';?></b></td>	 */ ?>	
	
	
						</tr>
						<?php 
						$i=1;
						//$total_fare = "";
						$tot="";
						
						foreach($all_transaction_list as $values) 
						{ 
							$pickup_date = Commonfunction::convertphpdate('d/m/Y',$values['pickup_time']);
								$pickup_time = Commonfunction::convertphpdate('h:i:s a',$values['pickup_time']);
							//print_r($values);
							$distance = round($values['distance'],2);
							//$current_fare = round($values['fare'],2);
						//	$fare_km = 0;
							//if(isset($values['fare']) && ($current_fare > 0) && ($distance > 0) )
							//{
								//$fare_km = $current_fare/$distance;
							//}
						//	$total_fare = $current_fare+$total_fare;
							//$track_id = $values['id'];
						?>
						<tr>			
							<td><?php echo $i;?></td>
							<td><?php echo $values['current_location'];?></td>
									<td><?php echo (isset($values['droplocation'])=="")?'-':$values['droplocation']; ?></td>
							<!--	<td><?php echo ($values['no_passengers'])=="0"?'-':$values['no_passengers'];?></td> -->
							<td><?php echo $pickup_date;?><br /><?php echo 
                                    $pickup_time ?></td>
							<!--<td><?php //echo date('h:i:s a', strtotime($values['pickup_time']));?></td>-->
							<?php /* <td><?php
							echo $values['driver_name'];
							//$comments = htmlentities($values['comments']);?></td>
							<td><?php echo $distance;?></td>
							<td><?php echo $values['no_passengers'];?></td> */ ?>
						<?php /*	<td><?php 
							$cancel_fare = $values['fare'];
							
							if($cancel_fare != "")
							{
								echo $cancel_fare;
							}
							else
							{
								echo 0;
							} ?></td> */?>
							
							</tr>
						<?php 
						//$tot += $values['fare'];
						$i=$i+1;} ?>
						<?php /* <tr>			
							<td></td>
							<td></td>
							<td></td>							
							<td></td>
							<td><?php echo __('total'); ?>(<?php echo CURRENCY;?>)</td>
							<td><?php echo $tot; ?></td>
							
							</tr> */?>
							<?php }
							 else { echo __('no_data');} 
							 ?>
						</table>
						<?php
						 if(count($tot_all_transaction_list)>2){
							echo '<div class="view_more_completed_journey" ><a href="'.URL_BASE.'passengers/transactionlog" class="imgclass">View More</a></div>';
						 }  
						
						?>
						
					</div>
				</div>
				
			</div>
		</div>
		
		</div>
        	
	</div>	
                                <input type="hidden" name="rating_driver_id" id="rating_driver_id" value="">
                                <input type="hidden" name="log_id" id="log_id" value="">
		<!-- Rating -->
		<div id="rating_pop">
               <h2><?php echo __('comments');?></h2>               
               <div class="login_total">                                               
                        <div class="login_form">
                            <ul>
				<li><span><?php echo __('rate_driver');?>:</span>
				<div id="outer">
					<div id="inner">
							
					</div>
				</div>
				</li>
                               <?php /* <li><span><?php echo __('comments');?>:</span><textarea name="comments" id="comments" /></textarea></li> */?>
                                <li><span><?php echo __('driver_name');?>:</span><span id="driver_name"></span>
</li>
				  <span id="c_result"></span>
				  <li><span></span>
				<input name="submit_rating" class="btn btn-inverse" type="button" title="<?php echo __('submit');?>" value="<?php echo __('submit');?>" onclick="savecomments()" /></li>
                            </ul>                      
		       </div>
        </div>
		<a id="close_x" class="close sprited left_rtg" href="#" onclick="popup_close('rating_pop');"><?php echo __('close');?></a>

</div>
	<!-- View Details -->
	<div id="details_pop">
				   <h2><?php echo __('comments');?></h2>               
				   <div class="login_total">                                               
							<div class="login_form">
								<ul>
					<li><span><?php echo __('rating_points');?>:</span>
					<div id="outer">
						<div id="v_inner">
								
						</div>
						<input type="hidden" name="rval" id="rval" value="" />
					</div>
					</li>
									<?php /* <li><span><?php echo __('comments');?>:</span><span id="v_comments" /></span></li> */?>
									<li><span><?php echo __('driver_name');?>:</span><span id="v_driver_name"></span>
									<?php //print_r($data); ?>
					<?php /*  <li><span></span>	
					  <?php 
					  $login_from = $user_det['login_from'];
					  if($login_from=='3')
					  {
					  ?> 
					 <li><a id="fb_id" href="http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $meta_title; ?>&amp;p[comments]=summary&amp;p[url]=<?php echo URL_BASE; ?>" target="_blank" title="Share on Facebook">
						<img src="<?php echo URL_BASE; ?>public/admin/images/facebook_share.png" alt="Facebook Share" />
						</a>
					</li>	
					<?php
				}
				?>	*/?>
								</ul>                      
				   </div>
					  </div>
	<a id="close_x" class="close sprited left_rtg" href="#" onclick="popup_close('details_pop');"><?php echo __('close');?></a>

	</div>
	
	
		<!--Transaction View Details -->
	<div id="transaction_details_pop">
				   <h2><?php echo __('transactiondet');?></h2>               
				   <div class="login_total">                                               
							<div class="login_form">
								<ul>
									<li><span><?php echo __('trans_amt');?>:</span><span id="trans_amt"></span>
									<li><span><?php echo __('pay_mode');?>:</span><span id="pay_mode"></span>
									
									<?php //print_r($data); ?>
					  <li><span></span>	
					  <?php 
					  $login_from = $user_det['login_from'];
					  if($login_from=='3')
					  {
					  ?> 
					 <li><a id="fb_id" href="http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $meta_title; ?>&amp;p[comments]=summary&amp;p[url]=<?php echo URL_BASE; ?>" target="_blank" title="Share on Facebook">
						<img src="<?php echo URL_BASE; ?>public/admin/images/facebook_share.png" alt="Facebook Share" />
						</a>
					</li>	
					<?php
				}
				?>	
								</ul>                      
				   </div>
					  </div>
	<a id="close_x" class="close sprited left_rtg" href="#" onclick="popup_close('transaction_details_pop');"><?php echo __('close');?></a>

	</div>
	
	
			<!--Transaction View Details -->
	<div id="transaction_details_pop_card">
				   <h2><?php echo __('transactiondet');?></h2>               
				   <div class="login_total">                                               
							<div class="login_form">
								<ul>
									<li><span><?php echo __('trans_id');?>:</span><span id="transaction_id" /></span></li>
									<li><span><?php echo __('correlationid');?>:</span><span id="correlation_id"></span>
									<li><span><?php echo __('trans_amt');?>:</span><span id="trans_amt1"></span>
									<li><span><?php echo __('pay_mode');?>:</span><span id="pay_mode"></span>
									<li><span><?php echo __('trans_payment_status');?>:</span><span id="trans_payment_status"></span>
									<?php //print_r($data); ?>
					  <li><span></span>	
					  <?php 
					  $login_from = $user_det['login_from'];
					  if($login_from=='3')
					  {
					  ?> 
					 <li><a id="fb_id" href="http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $meta_title; ?>&amp;p[comments]=summary&amp;p[url]=<?php echo URL_BASE; ?>" target="_blank" title="Share on Facebook">
						<img src="<?php echo URL_BASE; ?>public/admin/images/facebook_share.png" alt="Facebook Share" />
						</a>
					</li>	
					<?php
				}
				?>	
								</ul>                      
				   </div>
					  </div>
	<a id="close_x" class="close sprited left_rtg" href="#" onclick="popup_close('transaction_details_pop_card');"><?php echo __('close');?></a>

	</div>
	
	<script>
	  function gettaxi(log_id,restrict){
		//alert(log_id);
		var dataS = "value="+log_id+"&restrict="+restrict;
		var response;
		$.ajax
		({ 			
			type: "POST",
			url: SrcPath+"passengers/gettaxi", 
			data: dataS, 
			cache: false, 
			dataType: 'html',
			success: function(response) 
			{ 		
				//alert(response);		
					document.location.href='<?php echo URL_BASE;?>advance-search.html';
			} 
			 
		});	
     }
     //Cancel Trip
       function canceltrip(log_id){
		//alert(log_id);
		var canceltrip = confirm('If you are cancel the trip cancellation fee will be deducted from your card!!');   
			if (canceltrip) 
			{
				$('#'+log_id).html('<img width="16px" height="11px" alt="ajax-loading" src="'+SrcPath+'/public/css/img/ajax-loaders/ajax-loader-1.gif" />');	
				var dataS = "value="+log_id;
				var response;
				$.ajax
				({ 			
					type: "POST",
					url: SrcPath+"passengers/canceltrip", 
					data: dataS, 
					cache: false, 
					dataType: 'html',
					success: function(response) 
					{ 						
							$('#'+log_id).html(response);
					} 
					 
				});	
			 }
         }
         
    function popup_close(popup_block){
      $('#'+popup_block).hide();    
      $('.lb_overlay').hide();
      $('div#fade').remove();
   }
    </script>
	



