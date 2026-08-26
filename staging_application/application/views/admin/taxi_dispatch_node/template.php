<?php defined('SYSPATH') OR die('No direct access allowed.');?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="shortcut icon" href="<?php echo URL_BASE; ?>public/uploads/favicon/<?php echo SITE_FAVICON;?>" --type="image/x-icon" />
		<title><?php echo $page_title.' | '.SITENAME;?></title>

		<!-- jQuery library -->
			<?php 
			if($action=="dashboard" || $action=="booking"){ ?>
				<!-- <script src="http://maps.google.com/maps/api/js?key=AIzaSyDlbQ4S-nmzbAy35zICKpry57INUqKS3SM&libraries=places,geometry" type="text/javascript"></script> -->
				<script src="http://maps.google.com/maps/api/js?key=AIzaSyBxP4UEHJFGCbF-1inY3w79p1Kj95swe8Y&libraries=places,geometry" type="text/javascript"></script>
				<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/gmaps.js"></script>
			<?php } else if($action=="manage_booking") { ?>
				<!-- <script src="http://maps.google.com/maps/api/js?key=AIzaSyDlbQ4S-nmzbAy35zICKpry57INUqKS3SM&libraries=places,geometry" type="text/javascript"></script> -->
				<script src="http://maps.google.com/maps/api/js?key=AIzaSyBxP4UEHJFGCbF-1inY3w79p1Kj95swe8Y&libraries=places,geometry" type="text/javascript"></script>
			<?php } ?>
			<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/jquery1.11.0.js"></script>
			<script type="text/javascript" src="<?php echo URL_BASE;?>public/bootstrap-3.2.0/vendor/bootstrap/js/jquery.min.js"></script>

			<script type="text/javascript" src="<?php echo NODE_URL; ?>/socket.io/socket.io.js"></script>
			<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/angular/plugins/moment.js"></script>


			<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/angular/plugins/angular.js"></script>

			<script type="text/javascript" src="<?php echo URL_BASE;?>/public/js/angular/plugins/angular-animate.min.js"></script>
			<script type="text/javascript" src="<?php echo URL_BASE;?>/public/js/angular/plugins/angular-aria.min.js"></script>
			<script type="text/javascript" src="<?php echo URL_BASE;?>/public/js/angular/plugins/angular-messages.min.js"></script>
			<script type="text/javascript" src="<?php echo URL_BASE;?>/public/js/angular/plugins/angular-material.min.js"></script>

			<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/angular/plugins/angular-socket.min.js"></script>
			<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/angular/plugins/angular.infinitescroll.js"></script>
			<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/angular/plugins/angular-sanitize.js"></script>
			<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/angular/plugins/angular-checkmodel.js"></script>
			<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/angular/plugins/angular-ngtable.js"></script>

			<script src="<?php echo URL_BASE;?>public/js/angular/plugins/angular-moment.js"></script>
			<script src="<?php echo URL_BASE;?>public/js/angular/plugins/angular-datepicker.js"></script>
			<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/angular/app.js"></script>
			<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/angular/header.js"></script>
			<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/angular/manage_booking.js"></script>


		<!-- jQuery library -->
		<?php /*
		<script>
			var language = <?php echo $js_language; ?>
		</script>
		*/ ?>
		<?php 
			$alert_message = ['email_exists' => 'Email already exists','phone_exists'=>'Phone number already exists'];
			$encoded_message = json_encode($alert_message);
		?>
		
		<script>
			var MAP_COUNTRY ="<?php echo MAP_COUNTRY;?>";
			var URL_BASE = "<?php echo URL_BASE;?>";
			var IMGPATH = "<?php echo IMGPATH;?>";
			var SHOW_MAP = "<?php echo SHOW_MAP;?>";
			var ACTION = "<?php echo $action; ?>";
			var LOCATION_LATI = "<?php echo LOCATION_LATI;?>";
			var LOCATION_LONG = "<?php echo LOCATION_LONG;?>";
			var ALERT_MESSAGES = '<?php echo $encoded_message;?>';
			var CUR_DATE_TIME = '<?php echo $company_all_currenttimestamp;?>';
			var COMPANY_ID = '<?php echo $_SESSION['company_id'];?>';
			var URL_NODE = '<?php echo NODE_URL;?>';
			var USER_TYPE = '<?php echo $_SESSION['user_type'];?>';
			var BASE_URL = '<?php echo URL_BASE; ?>';
			var USER_ID= '<?php echo $_SESSION['userid'];?>';

			var socket = io.connect(URL_NODE+'/dispatcher', {
		    reconnection: true,    reconnectionDelay: 1000,    reconnectionDelayMax : 5000,    reconnectionAttempts: Infinity   });
		    
		    console.log("neww date",new Date());

		    
		</script>
	</head>
	<body ng-app="grandlimoApp">
		<input type="hidden" name="baseurl" id="baseurl" value="<?php echo URL_BASE; ?>">
		
		<?php  echo new View("admin/taxi_dispatch_node/header"); ?>
			<div id="content">
				<div class="container_content">
					<?php  //For Notice Messages
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
		<?php echo new View("admin/taxi_dispatch_node/footer"); ?> 
	</body>
</html>

