<?php defined('SYSPATH') OR die('No direct access allowed.');?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
<link rel="shortcut icon" href="<?php echo URL_BASE; ?>public/uploads/favicon/<?php echo $footer_contents['site_favicon'];?>" --type="image/x-icon" />
<title><?php echo $page_title.' | '.SITENAME;?></title>

<link type="text/css" href="<?php echo URL_BASE; ?>public/admin/css/bootstrap.css" rel="stylesheet" />

<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE; ?>public/css/dashboard/jquery.noty.css" />
<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE; ?>public/css/dashboard/noty_theme_default.css" />
<link type="text/css" href="<?php echo URL_BASE; ?>public/admin/css/admin_style.css" rel="stylesheet" />
<link type="text/css" href="<?php echo URL_BASE; ?>public/admin/css/admin_reset.css" rel="stylesheet" />

<!--Start to Include the tab menu css -->

<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE; ?>public/admin/css/glowtabs.css" />
<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE; ?>public/admin/css/admin_new/fullcalendar.css" />
<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE; ?>public/admin/css/admin_new/ui_custom.css" />
<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE; ?>public/admin/css/admin_new/media_style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE; ?>public/admin/css/easy-autocomplete.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE; ?>public/admin/css/alertify.css" />
<script type="text/javascript" src="<?php echo NODE_URL; ?>/socket.io/socket.io.js"></script>


<!--[if lte IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE; ?>public/admin/css/ie8.css" />
<![endif]-->

<!--End-->
<?php if(isset($_SESSION['userid'] )) { ?>
<script>
	 var language = <?php echo $js_language; ?>
</script>
<?php } ?>
<?php if($action =='transaction_details') { 
	if(SHOW_MAP !=1) {
	?>
	<?php /*<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=<?php //echo GOOGLE_MAP_API_KEY; ?>&sensor=true"></script> */	?>
	<script src="http://maps.google.com/maps/api/js?client=<?php echo GOOGLE_CLIENT_KEY; ?>&libraries=places,geometry&amp;sensor=false" type="text/javascript"></script>
	<?php } ?>
	<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/gmaps.js"></script>
<?php }
?>
<?php 

$alert_message = ['email_exists' => 'Email already exists','phone_exists'=>'Phone number already exists'];
$encoded_message = json_encode($alert_message);
// Common Variable For TDispatch ?>
<script>
	var URL_BASE = "<?php echo URL_BASE;?>";
	var IMGPATH = "<?php echo IMGPATH;?>";
	var SHOW_MAP = "<?php echo SHOW_MAP;?>";
	var ACTION = "<?php echo $action; ?>";
	var LOCATION_LATI = "<?php echo LOCATION_LATI;?>";
	var LOCATION_LONG = "<?php echo LOCATION_LONG;?>";
	var ALERT_MESSAGES = '<?php echo $encoded_message;?>';
	var URL_NODE = '<?php echo NODE_URL;?>';


	var socket = io.connect(URL_NODE, {
	reconnection: true,    reconnectionDelay: 1000,    reconnectionDelayMax : 5000,    reconnectionAttempts: Infinity   });
	
</script>

</head>
<body <?php if($action == 'login' || $action == 'forgot_password' && $action != "location") { echo 'class="nobg loginPage"'; } ?>>
<input type="hidden" name="baseurl" id="baseurl" value="<?php echo URL_BASE; ?>">
		
	<?php  if($action == 'login' || $action == 'forgot_password' && $action != "location") { echo new View("admin/header"); } ?>

		  <?php  if(($action != 'login' && $action != 'forgot_password' && $action != "location") ): ?>
		  <?php  if($action != 'login' && $action != "location") { 
			  echo new View("admin/header_inner"); 
		  
		  } ?>
		<div id="container"><!-- Content container -->
		  <?php  echo new View("admin/admin_menu"); ?>
			 <!-- Content -->
			 
			<div id="content" <?php if($controller=="tdispatch"){ ?>class="dispatch_content"<?php } ?> >
		
		    <!-- Content wrapper -->
		    <div class="wrapper">
					<!-- Breadcrumbs line -->
			    <div class="crumbs">
		            <ul id="breadcrumbs" class="breadcrumb">
		                <li>
		                <?php 
		                if($usertype == 'C') {
							$link = URL_BASE.'company/dashboard';
						} else if($usertype == 'M') {
							$link = URL_BASE.'manager/dashboard';
						} else if($usertype == 'O') {
								$link = URL_BASE.'corporate/dashboard';
						}else{
							$link = URL_BASE.'admin/dashboard';
						}
		                
						$atag_start='<a href='.$link.' title='.$link.'>'; 
						$atag_end='</a>';?>	
						<?php echo $atag_start. __('home_breadcrumb').$atag_end;?>
		                </li>
		                <li class="active"><a title=""><?php echo $page_title; ?></a></li>
		            </ul>
			        <?php /*if($_SESSION['user_type'] == 'C' || $_SESSION['user_type'] == 'M') {
						if($controller=='tdispatch' && ($action=='managebooking' || $action=='recurrentbooking' || $action=='frequent_location' || $action=='frequent_journey' || $action=='tdispatch_settings')) {?>
							<div class="button blackB" style="float:right;margin:5px;"> 
									<input type="button" name="add_booking_popup" style="padding: 7px 18px 8px;" id="add_booking_popup" value="<?php echo __('add_booking'); ?>" title="<?php echo __('add_booking'); ?>" >
							</div>
					<?php } } */?>
			    </div>
			    <!-- /breadcrumbs line -->
			    
			    
			    <!-- General form elements -->
						<div id="map12"> </div>
                                                <div class="right_lay">
                                               
						<div class="widget row-fluid <?php if($action == "dashboard"){ ?>dash_home<?php } ?>">
                                                    <?php if($action != "dashboard"){ ?>
						    <div class="navbar">
						        <div class="navbar-inner">
								
								<?php /*if($action =='company' || $action =='manager' || $action =='companydetails'|| $action =='managerdetails'|| $action =='driverinfo'|| $action =='driver' ) { */
									
								if($controller =='manage') {?>
									<div class='button blackB' style="float:right;margin:10px 10px">
									<input type="button" value="Back" onclick="window.history.go(-1)"></div>
						        <?php }
						        if($action =='wallet_logs') {?>
									<button type="button" style="float:right;margin:10px 10px" class="btn btn-primary wallet_btn" data-toggle="modal" data-target="#mywallet" data-backdrop="static" data-keyboard="false">Add wallet</button>
						        <?php } 
						        	

						         ?>
						        
						        

						            <h6><i class="icon-align-justify"></i><?php echo $page_title; if(COMPANY_CID==1 || SUBDOMAIN=='demo') 
		{ //echo ' (Trash and Block option not work for demo users )';
			}?></h6>
						        </div>
						        
						        
						    </div>
                                                    <?php } else { ?>
                                                    <div class="title_bar">
                                                        <h1><?php echo $page_title; if(COMPANY_CID==1 || SUBDOMAIN=='demo') 
		{ //echo ' (Trash and Block option not work for demo users )';
			}?></h1>
                                                    </div>
                                                    <?php } ?>

                      <div class="container_content">
                          				        <?php endif; 
								//For Notice Messages
								//===================
								$sucessful_message=Message::display();
								if($sucessful_message) { ?>

									<div id="messagedisplay">
										 <div style="width:570px; margin:0 auto;">
											<?php echo $sucessful_message; ?>
										 </div>
									</div>
								<?php } ?>    				   
    				        <?php echo $content;  
    				        ?>
    				        
    				  </div>
            
			</div>
                                                </div>
		    <!-- /content wrapper -->

		</div>
		<!-- /content -->
</div>

	</div>
	<!-- /content container -->

 <?php  echo new View("admin/footer"); ?>   

<?php if(isset($_SESSION['userid'] )) { ?>
<script type="text/javascript">
	$(document).ready(function () {
		if($('#messagedisplay')){
		  $('#messagedisplay').animate({opacity: 1.0}, 2000)
		  $('#messagedisplay').fadeOut('slow');
		}
		
		<?php /* if($controller=="tdispatch"){ ?>
			$.ajax({
				url: SrcPath+"tdispatch/addbooking", 
				cache: false, 
				dataType: 'html',
				success: function(response) 
				{
					$('#map12').html(response);
					var center = map.getCenter();
					google.maps.event.trigger(map, "resize");
					map.setCenter(center);
					//$('.widget.addbooking_widget').slideToggle("slow");
					$('.widget.addbooking_widget').show();
					$('.widget.addbooking_widget').hide();
				} 
			});
		<?php } */ ?>
	});
		/*For Top right Menu Add booking popup
		$("#add_booking_popup").click(function(){
			var count = 100000,
			$btn = $('#add_booking_popup'); 
			$btn.val($btn.val());
			
			$btn.val($btn.val().replace(count,count-1));
			count--;
			if(count%2) {
				//$('#map12').html('<img src="'+SrcPath+'/public/admin/images/loader.gif" />');

				$('.widget.addbooking_widget').slideToggle("slow");
				if( typeof(map) != 'undefined'){
					var center = map.getCenter();
					google.maps.event.trigger(map, "resize");
					map.setCenter(center);
				}
				
				$('#append_result').html("");
				// For append script 
				jQuery(function($) {
					var scrpt = document.createElement("script");
					scrpt.type = "text/javascript";
					scrpt.src = "<?php echo URL_BASE; ?>public/js/tdispatch_addbooking.js";
					$("#append_result").append(scrpt);
				});

			}else{
				$('#append_result').html("");
				// For append script 
				jQuery(function($) {
					var scrpt = document.createElement("script");
					scrpt.type = "text/javascript";
					scrpt.src = "<?php echo URL_BASE; ?>public/js/tdispatch_addbooking.js";
					$("#append_result").append(scrpt);
				});
				$('.widget.addbooking_widget').slideToggle("slow");
			}
		});
		
		//For Side Menu Add booking popup
		var count_li = 100000,
		$btn_li = $('#add_booking_popup_li'); 
		$btn_li.val($btn_li.val());
		
		$btn_li.click(function(){
			$btn_li.val($btn_li.val().replace(count_li,count_li-1));
			count_li--;
			if(count_li%2) {
				//$('#map12').html('<img src="'+SrcPath+'/public/admin/images/loader.gif" />');
				$('.widget.addbooking_widget').slideToggle("slow");
				if( typeof(map) != 'undefined'){
					var center = map.getCenter();
					google.maps.event.trigger(map, "resize");
					map.setCenter(center);
				}
			}else{
				$('.widget.addbooking_widget').slideToggle("slow");
			}
		});
		
	}); */
	
</script>

	 	
<script type="text/javascript">

//===== Hide/show Menubar =====//
	$('.fullview').click(function(){
		
		/*** This is used for load the map with out hidden *****
			var center = map.getCenter();
			google.maps.event.trigger(map, "resize");
			map.setCenter(center);
		/*** This is used for load the map with out hidden *****/
	    $("body").toggleClass("clean");
	    $('#sidebar').toggleClass("show-sidebar mobile-sidebar");
	    $('#content').toggleClass("full-content");
	});
	
	function toggle(ids){

	  /* $(".toggleul_"+ids).slideToggle();
		var imgSrc= $("#left_menubutton_"+ids).attr("src");
		var findimg = imgSrc.split('/').pop();
		
		//For Replacing the Menu Images
		//==============================
		var toggle_image=IMGPATH+"minus_but.png";
		if(findimg == "minus_but.png")
	   
		  var toggle_image=IMGPATH+"plus_but.png";
	   
		 $("#left_menubutton_"+ids).attr({src:toggle_image});*/
	}

</script>  
<?php } ?>  
</body>
</html>
