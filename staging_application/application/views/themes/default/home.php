<?php defined('SYSPATH') OR die('No direct access allowed.');?>

<link rel="stylesheet" href="<?php echo URL_BASE; ?>public/build/css/intlTelInput.css">
<script src="<?php echo URL_BASE; ?>public/build/js/intlTelInput.js"></script>
<?php
	$lang="en";
	$lang=isset($_SESSION['lang'])?$_SESSION['lang']:"en";
	$play_store = COMMON_ANDROID_PASSENGER_APP;
	$app_store = COMMON_IOS_PASSENGER_APP; 

	require_once(DOCROOT . 'includes/Mobile-Detect/Mobile_Detect.php');
	$detect = new Mobile_Detect;	
	
	$home_page_contents = isset($home_page_content[0])?$home_page_content[0]:array();
	/////// Slider /////////
	$home_slider = $mobile_slider = $slider = array(); 
	$home_interval = $mobile_interval = $slide_interval =0;
	/*foreach($slider_settings[0] as $key => $value) { 
		if (preg_match('/^home_/', $key)) {
			if($key == 'home_slide_interval') {
				$home_interval = $value;
			} else {
				if($lang == 'ar') {
					if (preg_match('/'.$lang.'/', $key)) {
						$home_slider[$key] = $value; 
					}
				} else {
					if (preg_match('#^((?!ar).)*$#', $key)) {
						$home_slider[$key] = $value; 
					}
				}
			}
		}
		if (preg_match('/^mobile_/', $key)) {
			if($key == 'mobile_slide_interval') {
				$mobile_interval = $value;
			} else {
				if($lang == 'ar') {
					if (preg_match('/'.$lang.'/', $key)) {
						$mobile_slider[$key] = $value;
					}
				} else {
					if (preg_match('#^((?!ar).)*$#', $key)) {
						$mobile_slider[$key] = $value; 
					}
				}
			}
			
		}
	}*///exit;
	$home_interval = $slider_settings[0]['slider_interval'];
	$mobile_interval = $slider_settings[0]['slider_interval'];
	if($lang == 'ar') {
			$home_slider = $slider_settings[0]['image_ar'];
			$mobile_slider = $slider_settings[0]['mob_image_ar']; 
		
	} else {
		$home_slider = $slider_settings[0]['image_en'];
		$mobile_slider = $slider_settings[0]['mob_image_en']; 
	}

	$mobile_device=0;
	if($detect->isMobile()) { 		
		$home_slider = $mobile_slider;
		$mobile_device=1;		
	}
	/* print "<pre>";
	 print_r($home_interval);
	 print_r($mobile_interval);
	 print_r($home_slider);*/
	 //print_r($mobile_slider); exit;
	/////// Slider /////////
?>

<?php /*<link href="<?php echo URL_BASE;?>public/datepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/> 
<script src="<?php echo URL_BASE;?>public/datepicker/js/moment.js"></script> 
<script src="<?php echo URL_BASE;?>public/datepicker/js/bootstrap-datetimepicker.min.js"></script> 
<script type="text/javascript">
 $(function () {
        $('#p_date').datepicker();
    });  
</script> */?>
<?php /*<link rel="stylesheet" href="<?php echo URL_BASE;?>public/datepicker/jquery.timepicker.min.css">
<script src="<?php echo URL_BASE;?>public/datepicker/jquery.timepicker.min.js"></script>*/?>
<style>
.banner .form_control_outer {
	margin-bottom:0px!important;
}
.cartype_modal .car_type_lft .car_type_lft_cont {
	    width: calc(92% - 150px) !important;
}
</style>
  <link rel="stylesheet" href="<?php echo URL_BASE;?>public/datepicker/jquery-ui.css">
  <script src="<?php echo URL_BASE;?>public/datepicker/jquery-ui.js"></script>

  <link rel="stylesheet" href="<?php echo URL_BASE;?>public/timepicker/jquery.timepicker.css">
  <script src="<?php echo URL_BASE;?>public/timepicker/jquery.timepicker.js"></script>
  <script>
  $(function() {

  	var current_date = new Date();
    var current_hrs = current_date.getHours();

    $("#p_date").datepicker({minDate: 0,dateFormat: 'dd-mm-yy',});

    //$('#p_time').timepicker({});

  });

  $(document).ready(function(){
    	$('#p_time').timepicker({'step': 15});
  });
  </script>

<section class="banner">
	<div class="banner_img">
		<div class="owl-carousel home_slider owl-theme">
		<?php if(count($home_slider)){
			if($mobile_device==1){
				$path = MOBILE_SLIDER_IMGPATH;
			}else{
				$path = HOME_SLIDER_IMGPATH;
			} 
			
			foreach($home_slider as $slider_img){ 

				if(file_exists(DOCROOT.$path.$slider_img)){ ?>
					<div class="item">
						<img src="<?php echo URL_BASE.$path.$slider_img;?>" class="img-responsive">
					</div>

		<?php } } }else{ ?>
			<div class="item">
				<img src="<?php echo URL_BASE;?>/public/images/home_banner.png" class="img-responsive">
			</div>
			<div class="item">
				<img src="<?php echo URL_BASE;?>/public/images/home_banner.png" class="img-responsive">
			</div>
		<?php } ?>
		</div>		
		<div class="home_banner_content visible-xs visible-sm">
			<h2>Welcome to</h2>
			<small>GrandLimo</small>
		</div>
	</div>
	<div class="banner_content">
		<div class="container">
			<div class="banner_content_inner">
				<div class="col-md-12">
				 <?php $sucessful_message=Message::get();
              		if(isset($sucessful_message->message) && $sucessful_message->message) { ?>
					<div class="alert alert-success">
						<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
			  			<p><?php echo $sucessful_message->message; ?></p>
					</div>
					<?php Session::instance()->delete('flash_message');
					} ?>
				</div>
				<div class="col-md-6 tab_content_right">
					<div class="tab_content_right_inner">
					<!-- <ul class="nav nav-pills">
					    <li class="active"><a data-toggle="pill" href="#picknow" title="<?php echo __('airport_pickup_drop');?>" class="picknow" onclick="ChangeForm(1);"><i class="picknow_ico"></i><?php echo __('airport_pickup_drop');?></a></li>
					    <li><a data-toggle="pill" href="#picknow" title="<?php echo __('pickup_later');?>" class="picklater" onclick="ChangeForm(2);"><i class="picklater_ico"></i><?php echo __('pickup_later');?></a></li>
					</ul>  -->   
					<div class="tab_outer">
					<div class="tab-content">
						<div id="picknow" class="tab-pane fade in active">
						  	<form name="booking_form" id="booking_form" method="get" action="<?php echo URL_BASE.'users/booking_request'; ?>">
								<div class="form-group">
									<i class="hpickup_ico"></i>
									<span class="star">*</span>
									<div class="form_control_outer"><input type="text" name="pickup" id="pickup_loc" class="form-control" placeholder="<?php echo __('pickup_location');?>"></div>
									<input type="hidden" name="pickup_lat" id="pickup_lat" class="form-control">
									<input type="hidden" name="pickup_lng" id="pickup_lng" class="form-control">
									<label class="required_field" id="pickup_loc_error"></label>
								</div>
								<div class="form-group width_forteen_six2">
									<i class="hdrop_ico"></i>
									<span class="star">*</span>
									<div class="form_control_outer"><input type="text" name="drop" id="drop_loc" class="form-control drop_loc" placeholder="<?php echo __('drop_location');?>"></div>
									<input type="hidden" name="drop_lat" id="drop_lat" class="form-control">
									<input type="hidden" name="drop_lng" id="drop_lng" class="form-control">
									<label class="required_field" id="drop_loc_error"></label>
								</div>
								<!-- <div class="form-group">-->
									<!-- <div class="drop_checkbox"><input type="checkbox" class=""> </div> -->
									<!-- <div class="checkbox drop_checkbox">
										<label><input type="checkbox" id="drop_default_add" onclick="change_drop_address(this)" value=""><img src="<?php echo URL_BASE; ?>/public/images/klm.png" style="margin:-12px 0px 3px 0px" /></label>
									</div>
								</div>-->
								<div class="form-group with_phone_code">
									<i class="hphone_ico"></i>
									<i class="hphone_ico_txt"><input type="tel" id="cc_flag" placeholder="" maxlength="5"></i>
									<span class="star">*</span>
									<div class="form_control_outer"><input type="text" name="phone" id="phone_num" class="form-control" placeholder="<?php echo __('phone_no');?>" maxlength="10" onkeypress="return isNumber();"></div>
									<label class="required_field" id="phone_num_error"></label>
								</div>

								<!-- Sasidharan july 28 2022 -->
								<div class="form-group">
									<i class="hemail_ico"></i>
									<span class="star">*</span>									
									<div class="form_control_outer"><input type="text" name="pass_name" id="pass_name" class="form-control hemail" placeholder="<?php echo __('name');?>"></div>
									<label class="required_field" id="pass_name_error"></label>
								</div>

								<div class="form-group">
									<i class="hemail_ico"></i>									
									<div class="form_control_outer"><input type="text" name="email" id="email_book" class="form-control hemail" placeholder="<?php echo __('email_label');?>"></div>
									<label class="required_field" id="email_book_error"></label>
								</div>
								<div class="form-group">
									<i class="hcartype_ico"></i>
									<span class="star">*</span>
									<input type="hidden" name="car_model" id="car_model">
									<div class="form_control_outer"><input type="text" name="car_type" id="car_type" class="form-control hcartype" data-toggle="modal" data-target="#cartype_modal" placeholder="<?php echo __('car_type');?>" onkeypress="return false;"></div>
									<label class="required_field" id="car_type_error"></label>
								</div>
								<div class="row">
									<div class="col-md-6">
								<div class="form-group addwidth">
									<i class="hdate_ico"></i>
									<span class="star">*</span>
									<div class="form_control_outer"><input type="text" name="p_date" id="p_date" class="form-control hdate" placeholder="<?php echo __('date');?>"></div>
									<label class="required_field" id="p_date_error"></label>
								</div>
								</div>
								<div class="col-md-6">
								<div class="form-group addwidth">
									<i class="htime_ico"></i>
									<span class="star">*</span>
									<div class="form_control_outer"><input type="text" name="p_time" id="p_time" class="form-control htime" placeholder="<?php echo __('pick_up_time');?>" onkeypress="return false;"></div>
									<input type="hidden" name="booking_type" id="booking_type" value="1">
									<label class="required_field" id="p_time_error"></label>
								</div>
								</div>
								</div>
								<input type="hidden" name="passenger" id="passenger" class="form-control hpsngr" placeholder="<?php echo __('no_of_passenger');?>" onkeypress="return isNumber();" value="0">
								<input type="hidden" name="baggage" id="baggage" class="form-control hbag" placeholder="<?php echo __('no_of_baggage');?>" onkeypress="return isNumber();"  value="0">
								<!-- <div class="form-group addwidth">
									<i class="hpsngr_ico"></i>
									<span class="star">*</span>
									<input type="hidden" name="passenger" id="passenger" class="form-control hpsngr" placeholder="<?php echo __('no_of_passenger');?>" onkeypress="return isNumber();" value="0">
									<label class="required_field" id="passenger_error"></label>
								</div>
								<div class="form-group addwidth">
									<i class="hbag_ico"></i>
									<input type="hidden" name="baggage" id="baggage" class="form-control hbag" placeholder="<?php echo __('no_of_baggage');?>" onkeypress="return isNumber();"  value="0">
									<label class="required_field" id="baggage_error"></label>
								</div> -->
								<div class="form-group flight_no_div">
									<i class="hplane_ico"></i>
									<div class="form_control_outer"><input type="text" name="flight_no" id="flight_no" class="form-control hplane" placeholder="<?php echo __('flight_no');?>"></div>
									<label class="required_field" id="flight_no_error"></label>
								</div>
								<!-- <div class="form-group hauto">
									<label class="required_note">*<i><?php echo __('required_field');?></i></label>
								</div> -->

								<!--  Sasidharan july 28 2022 added id -->
								<div class="form-group btn_block hauto">
									<input type="button" id="submit_button" name="booknow" value="<?php echo __('book_now');?>" title="<?php echo __('book_now');?>" class="btn btn-primary" onclick="ValidateBooking();">
								</div>

							</form>
						</div>
						<?php /*<div id="picklater" class="tab-pane fade">
						  	<form name="booking_form" id="booking_form" method="get" action="<?php echo URL_BASE.'users/booking_request'; ?>">
								<div class="form-group width_fifty">
									<i class="hpickup_ico"></i>
									<span class="star">*</span>
									<input type="text" name="pickup" id="pickup_loc" class="form-control" placeholder="Pick up location">
									<label class="required_field" id="pickup_loc_error"></label>
								</div>
								<div class="form-group width_fifty">
									<i class="hdrop_ico"></i>
									<span class="star">*</span>
									<input type="text" name="drop" id="drop_loc" class="form-control" placeholder="Drop location">
									<label class="required_field" id="drop_loc_error"></label>
								</div>
								<div class="form-group width_thirty">
									<i class="hphone_ico"></i>
									<span class="star">*</span>
									<input type="text" name="phone" id="phone_num" class="form-control" placeholder="Phone Number" maxlength="10">
									<label class="required_field" id="phone_num_error"></label>
								</div>
								<div class="form-group width_thirty">
									<i class="hemail_ico"></i>									
									<input type="text" name="email" id="email_book" class="form-control hemail" placeholder="Email">
									<label class="required_field" id="email_book_error"></label>
								</div>
								<div class="form-group width_thirty">
									<i class="hcartype_ico"></i>
									<span class="star">*</span>
									<input type="hidden" name="car_model" id="car_model">
									<input type="text" name="car_type" id="car_type" class="form-control hcartype" data-toggle="modal" data-target="#cartype_modal" placeholder="Car type" onkeypress="return false;">
									<label class="required_field" id="car_type_error"></label>
								</div>
								<div class="form-group width_twenty_five">
									<i class="hdate_ico"></i>
									<span class="star">*</span>
									<input type="text" name="p_date" id="p_date" class="form-control hdate" placeholder="Date">
									<label class="required_field" id="p_date_error"></label>
								</div>
								<div class="form-group width_twenty_five">
									<i class="htime_ico"></i>
									<span class="star">*</span>
									<input type="text" name="p_time" id="p_time" class="form-control htime" placeholder="Time">
									<label class="required_field" id="p_time_error"></label>
								</div>
								<div class="form-group width_twenty_five">
									<i class="hpsngr_ico"></i>
									<span class="star">*</span>
									<input type="text" name="passenger" id="passenger" class="form-control hpsngr" placeholder="No of Passengers" onkeypress="return isNumber();">
									<label class="required_field" id="passenger_error"></label>
								</div>
								<div class="form-group width_twenty_five">
									<i class="hbag_ico"></i>
									<input type="text" name="baggage" id="baggage" class="form-control hbag" placeholder="No of Baggage" onkeypress="return isNumber();">
									<label class="required_field" id="baggage_error"></label>
								</div>
								<div class="form-group width_twenty hauto">
									<label class="required_field">*<i>Required Field</i></label>
								</div>
								<div class="form-group width_twenty btn_block hauto">
									<input type="button" name="booknow" value="Book Now" title="Book Now" class="btn btn-primary" onclick="ValidateBooking();">
								</div>

							</form>
						</div>*/ ?>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</section>
<section class="vehicles_container">
	<div class="container">
		<div class="col-md-12">
			<div class="blk_title text-center">
				<h2><?php echo $home_page_contents['vehicle_type'];?></h2>
				<small><?php echo $home_page_contents['vehicle_description'];?></small>
			</div>
		</div>
		<div class="col-md-12">
			<div class="vehicle_tab_container">
				<ul class="nav nav-pills">
				<?php if(count($model_list)){ 

						foreach($model_list as $key=>$model){

							if($lang == 'ar') {
								$model_name = $model['model_name_ar'];
							}else{
								$model_name = $model['model_name'];
							}

							if($key==0){
								$active = 'class="active"';
							}else{
								$active = '';
							}?>

						<li <?php echo $active; ?> ><a data-toggle="tab" href="#<?php echo $model_name; ?>" title="<?php echo $model_name; ?>"><?php echo $model_name; ?></a></li>

				<?php } } ?>
				   
				</ul>
  
				<div class="tab-content">

					<?php if(count($model_list)){ 

						foreach($model_list as $key=>$model){

							if($lang == 'ar') {
								$model_name = $model['model_name_ar'];
							}else{
								$model_name = $model['model_name'];
							}

							if($key==0){
								$fade_active = 'in active';
							}else{
								$fade_active = '';
							}

							if(file_exists($_SERVER["DOCUMENT_ROOT"].'/public/uploads/model_image/'.$model['website_model_image']) && !empty($model['website_model_image']) ){

								$image_path = URL_BASE.'public/uploads/model_image/'.$model['website_model_image'];
							}else{
								$image_path = URL_BASE.'public/images/car_esclade.png';
							}

							?>

						<div id="<?php echo $model_name; ?>" class="tab-pane fade <?php echo $fade_active; ?>">
						<div class="vehic_desc_blocks">
							<div class="veh_desc_lft">
								<h4><?php if($mobile_device==0){ echo $model_name; } ?></h4>
								<span><?php echo CURRENCY.' '.number_format((float)$model['base_fare'], 2, '.', ''); ?></span>
								<!--<a href="javascript:;" title="View More">View More</a>-->
							</div>
							<div class="veh_desc_middle">
								<img src="<?php echo $image_path; ?>" alt="<?php echo $model_name; ?>">
							</div>
							<div class="veh_desc_rgt">
								<ul>
									
									<?php if(SITE_FARE_CALCULATION_TYPE==1) { ?> 
										<li><?php echo __('base_fare');?><span><?php echo $model['base_fare_data'].' '.CURRENCY; ?></span></li>
										<li><?php echo str_replace('%min%',$model['min_km'],__('fare_per_min_km') );?><span><?php echo $model['min_fare_data'].' '.CURRENCY; ?> </span></li>

									<?php }else{ ?>
										<li><?php echo __('base_fare');?><span><?php echo $model['base_fare'].' '.CURRENCY; ?></span></li>
										<li><?php echo str_replace('%min%',$model['base_mins'],__('fare_per_min') );?><span><?php echo $model['minutes_fare'].' '.CURRENCY; ?> </span></li>

									<?php } ?>
									
									<li><?php echo __('waiting_charge_web');?><span><?php echo $model['waiting_cost_per_hour'].' '.CURRENCY; ?></span></li>
									<li><?php echo __('luggage');?><span><?php echo $model['max_luggage']; ?></span></li>
									<li><?php echo __('passengers');?><span><?php echo $model['model_size']; ?></span></li>
								</ul>
							</div>
						</div>
					</div>

				<?php } } ?>

					
					<!--<div id="type_luxury" class="tab-pane fade">
						<div class="vehic_desc_blocks">
							<div class="veh_desc_lft">
								<h4>Luxury</h4>
								<span>KWD 2.00</span>
								<a href="javascript:;" title="View More">View More</a>
							</div>
							<div class="veh_desc_middle">
								<img src="public/images/car_esclade.png" alt="Esclade">
							</div>
							<div class="veh_desc_rgt">
								<ul>
									<li>Base Fare<span>2 KWD</span></li>
									<li>Fare per 10 minutes<span>2 KWD</span></li>
									<li>Waiting charge per (hr)<span>6 KWD</span></li>
									<li>Luggage<span>2</span></li>
									<li>Model Size<span>5</span></li>
								</ul>
							</div>
						</div>
					</div>-->
				</div>
			</div>
		</div>
	</div>
</section>
<section class="meet_drivers_container">
	<div class="container">
		<div class="col-md-12">
			<div class="blk_title text-center">
				<h2><?php echo $home_page_contents['meet_driver'];?></h2>
				<small><?php echo $home_page_contents['meet_driver_description'];?></small>
				<?php /* <a href="<?php echo URL_BASE; ?>meet_our_drivers.html" title="View More" class="view_more"><?php echo __('view_more');?></a> */ ?>
			</div>
		</div>
		<?php 
		if(count($home_page_drivers)){

			foreach ($home_page_drivers as $key => $driver) { 


				 if(!empty($driver['web_image_name']) && file_exists(DOCROOT.'public/uploads/driver_image/website/'.$driver['web_image_name'])){

				 	$image_url = URL_BASE.'public/uploads/driver_image/website/'.$driver['web_image_name'];
				 }else{
				 	$image_url = URL_BASE.'public/images/driver1.png';
				 }

				 $description = $driver['driver_description'];

				 if($description){
				 	$description=$description;
				 }else{
				 	$description = __('driver_description_data');
				 }

				 if(strlen($description)>200){
					$pos=strpos($description, ' ', 200);
					$description_data = substr($description,0,$pos );
				}else{
					$description_data = $description;
				}

				/*$string = strip_tags($description);
				if (strlen($string) > 500) {

				    // truncate string
				    $stringCut = substr($string, 0, 500);
				    $endPoint = strrpos($stringCut, ' ');

				    //if the string doesn't contain any space then it will cut without word basis.
				    $string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
				    //$string .= '... <a href="/this/story">Read More</a>';
				}*/
	?>

				<div class="col-xs-6 col-sm-6 col-md-4">
					<div class="driver_blks">
						<div class="drv_img">
							<img src="<?php echo $image_url; ?>" alt="">
						</div>
						<div class="drv_cont">
							<h3><?php echo ucfirst($driver['name']); ?></h3>
							<p><?php echo $description_data; ?></p>
							<ul class="drv_soclinks">
								<?php if($driver['facebook_account']){ ?>
									<li><a href="<?php echo $driver['facebook_account']; ?>" title="Facebook" class="drv_fb" target="_blank"></a></li>
								<?php } ?>
								<?php if($driver['instagram_account']){ ?>
									<li><a href="<?php echo $driver['instagram_account']; ?>" title="Instagram" class="drv_insta" target="_blank"></a></li>
								<?php } ?>
								<?php if($driver['twitter_account']){ ?>
									<li><a href="<?php echo $driver['twitter_account']; ?>" title="Twitter" class="drv_twitter" target="_blank"></a></li>
								<?php } ?>								
							</ul>
						</div>
					</div>
				</div>

				
		<?php	}
		} ?>


		<!--<div class="col-xs-6 col-sm-6 col-md-4">
			<div class="driver_blks">
				<div class="drv_img">
					<img src="public/images/driver1.png" alt="">
				</div>
				<div class="drv_cont">
					<h3>Shabeek</h3>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
					<ul class="drv_soclinks">
						<li><a href="" title="Facebook" class="drv_fb"></a></li>
						<li><a href="" title="Instagram" class="drv_insta"></a></li>
						<li><a href="" title="Twitter" class="drv_twitter"></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-4">
			<div class="driver_blks">
				<div class="drv_img">
					<img src="public/images/driver2.png" alt="">
				</div>
				<div class="drv_cont">
					<h3>Deepak</h3>
					<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born.</p>
					<ul class="drv_soclinks">
						<li><a href="" title="Facebook" class="drv_fb"></a></li>
						<li><a href="" title="Instagram" class="drv_insta"></a></li>
						<li><a href="" title="Twitter" class="drv_twitter"></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-4 hidden-xs hidden-sm">
			<div class="driver_blks">
				<div class="drv_img">
					<img src="public/images/driver3.png" alt="">
				</div>
				<div class="drv_cont">
					<h3>Nishad</h3>
					<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled.</p>
					<ul class="drv_soclinks">
						<li><a href="" title="Facebook" class="drv_fb"></a></li>
						<li><a href="" title="Instagram" class="drv_insta"></a></li>
						<li><a href="" title="Twitter" class="drv_twitter"></a></li>
					</ul>
				</div>
			</div>
		</div>-->
	</div>
</section>

<section class="meet_drivers_container">
	<div class="container">
		<div class="col-md-12">
			<div class="blk_title text-center">
				<h2><?php echo $home_page_contents['website_certificate'];?></h2>
				<small><?php echo $home_page_contents['website_certificate_description'];?></small>				
			</div>
		</div>
		<?php 
		if(count($home_page_certificate)){

			foreach ($home_page_certificate as $key => $certificate) { 


				 if(!empty($certificate['image']) && file_exists(DOCROOT.'public/uploads/certificates/'.$certificate['image'])){

				 	$image_url = URL_BASE.'public/uploads/certificates/'.$certificate['image'];
				 }else{
				 	$image_url = URL_BASE.'public/uploads/certificates/no-img.jpg';
				 }

				 $description = $certificate['certificate_description'];
				 

				 if(strlen($description)>200){
					$pos=strpos($description, ' ', 200);
					$description_data = substr($description,0,$pos );
				}else{
					$description_data = $description;
				}

				/*$string = strip_tags($description);
				if (strlen($string) > 500) {

				    // truncate string
				    $stringCut = substr($string, 0, 500);
				    $endPoint = strrpos($stringCut, ' ');

				    //if the string doesn't contain any space then it will cut without word basis.
				    $string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
				    //$string .= '... <a href="/this/story">Read More</a>';
				}*/
	?>

				<div class="col-xs-6 col-sm-6 col-md-4">
					<div class="driver_blks">
						<div class="drv_img">
							<img src="<?php echo $image_url; ?>" alt="">
						</div>
						<div class="drv_cont">
							<h3><?php echo ucfirst($certificate['certificate_name']); ?></h3>
							<p><?php echo $description_data; ?></p>							
						</div>
					</div>
				</div>

				
		<?php	}
		} ?>
	</div>
</section>


<section class="app_container">
	<div class="container">
		<div class="col-md-6">
			<div class="app_container_lft">
				<h2><?php echo $home_page_contents['banner_title'];?></h2>
				<p><?php echo $home_page_contents['banner_description'];?> </p>
				<ul>
		            <li><a href="<?php echo COMMON_IOS_PASSENGER_APP; ?>" title="" target="_blank" class="footer_app_icon footer_iapp_icon"></a></li>
		            <li><a href="<?php echo COMMON_ANDROID_PASSENGER_APP; ?>" title="" target="_blank" class="footer_app_icon footer_gapp_icon"></a></li>
		        </ul>
		    </div>
		</div>
		<div class="col-md-6">
			<div class="app_container_rgt">
				<img src="public/images/app_cont_screen.png" alt="">
			</div>
		</div>
	</div>
</section>
<section class="widgets_btm_container">
	<div class="container">
		<div class="col-xs-12 col-sm-12 col-md-4">
			<div class="widgets_blk text-center">
				<i class="widget_ico w_ico1"></i>
				<h3><?php echo $home_page_contents['pick_at_title'];?></h3>
				<p><?php echo $home_page_contents['pick_at_description'];?> </p>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4">
			<div class="widgets_blk text-center">
				<i class="widget_ico w_ico2"></i>
				<h3><?php echo $home_page_contents['card_payment'];?></h3>
				<p><?php echo $home_page_contents['card_description'];?></p>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4">
			<div class="widgets_blk text-center">
				<i class="widget_ico w_ico3"></i>
				<h3><?php echo $home_page_contents['secure_title'];?></h3>
				<p><?php echo $home_page_contents['secure_description'];?></p>
			</div>
		</div>
	</div>
</section>


<section class="testimonial_container">
	<a href="javascript:;" class="testi_insta"></a>
	<div class="container">
		<div class="testimonial_inner_container">
			<div class="owl-carousel1 owl-carousel owl-theme">

			<?php if(count($testimonials)){
				foreach($testimonials as $testimonial_details){ 

					if(!empty($testimonial_details['image']) && file_exists(DOCROOT.'public/uploads/testimonial/'.$testimonial_details['image'])){

						$userimage = URL_BASE.'public/uploads/testimonial/'.$testimonial_details['image'];
					}else{
						$userimage = URL_BASE.'public/images/testi1.png';
					}?>
					<div class="item">
					<div class="testi_blks">
							<div class="testi_img_blk">
								<img src="<?php echo $userimage; ?>" class="testi_img" alt="">
							</div>
							<h4><?php echo ucfirst($testimonial_details['name']); ?></h4>
							<small><?php echo ucfirst($testimonial_details['skype']); ?></small>
							<p><?php echo ucfirst($testimonial_details['description']); ?></p>
						</div>
					</div>	

			<?php	}
			} ?>

			<?php /*
				<div class="item">
					<div class="testi_blks">
						<div class="testi_img_blk">
							<img src="public/images/testi1.png" class="testi_img" alt="">
						</div>
						<h4>Khalid bin waleed</h4>
						<small>@khalidbinwaleed</small>
						<p>Anyone who is running a company should look into @tint! Great tool that allows companies to compile their social media presence in 1 place</p>
					</div>
				</div>	
				<div class="item">
					<div class="testi_blks">
						<div class="testi_img_blk">
							<img src="public/images/testi1.png" class="testi_img" alt="">
						</div>
						<h4>Khalid bin</h4>
						<small>@khalidbinwaleed</small>
						<p>Anyone who is running a company should look into @tint! Great tool that allows companies to compile their social media presence in 1 place</p>
					</div>
				</div>	
				<div class="item">
					<div class="testi_blks">
						<div class="testi_img_blk">
							<img src="public/images/testi1.png" class="testi_img" alt="">
						</div>
						<h4>Khalid waleed</h4>
						<small>@khalidbinwaleed</small>
						<p>Anyone who is running a company should look into @tint! Great tool that allows companies to compile their social media presence in 1 place</p>
					</div>
				</div>*/?>	
			</div>
		</div>
	</div>
</section>
<!-- car type modal -->
<div id="cartype_modal" class="modal fade cartype_modal" role="dialog">
  	<div class="modal-dialog">
	    <div class="modal-content">
	      	<div class="modal-header">
	        	<button type="button" class="close" data-dismiss="modal">&times;</button>
	        	<h4 class="modal-title"><?php echo __('select_car_type'); ?></h4>
	      	</div>
	      	<div class="modal-body">
	        	<ul>

	        		<?php if(count($model_list)){ 

						foreach($model_list as $key=>$model){

							if($lang == 'ar') {
								$model_name = $model['model_name_ar'];
							}else{
								$model_name = $model['model_name'];
							}

							if(file_exists($_SERVER["DOCUMENT_ROOT"].'/public/uploads/model_image/'.$model['website_model_image']) && !empty($model['website_model_image']) ){

								$image_path = URL_BASE.'public/uploads/model_image/'.$model['website_model_image'];
							}else{
								$image_path = URL_BASE.'public/images/car_business.png';
							}

							?>

	        		<li>
	        			<div class="car_type_lft">
	        				<div class="car_type_lft_cont">
	        					<h4><?php echo $model_name; ?></h4>
	        					<p>
	        						<span><?php echo $model['category_name']; ?></span>
	        						<i class="airport_price"><?php echo CURRENCY.' '.number_format((float)$model['airport_pickup_fare'], 2, '.', '').' (Fixed)'; ?></i>

	        						<p class="normal_price" style="display:none;">
	        						<i><?php echo CURRENCY.' '.number_format((float)$model['minutes_fare'], 2, '.', ''); ?></i>  						
	        						<small><?php echo str_replace('%min%',$model['base_mins'],__('fare_per_min') );?></small>
	        						<p>
	        					</p>
	        				</div>
	        				<div class="car_type_lft_img">
	        					<img src="<?php echo $image_path; ?>" alt="Car type" class="img-responsive">
	        				</div>
	        			</div>
	        			<div class="car_type_rgt">
	        				<div class="radio_style">
	        					<input type="radio" name="car_type" value="<?php echo $model['model_id']; ?>" onclick="update_car_model('<?php echo $model['model_id']; ?>','<?php echo $model_name; ?>');" >
	        					<label></label>
	        				</div>
	        			</div>
	        		</li>
	        		
	        		<?php } } ?>
	        		<!--<li>
	        			<div class="car_type_lft">
	        				<div class="car_type_lft_cont">
	        					<h4>Luxury</h4>
	        					<p>
	        						<span>Mercedez Benz or Similar</span>
	        						<i>KWD 10.00</i>
	        						<small>Fare per 10 minutes</small>
	        					</p>
	        				</div>
	        				<div class="car_type_lft_img">
	        					<img src="public/images/car_luxury.png" alt="Car type" class="img-responsive">
	        				</div>
	        			</div>
	        			<div class="car_type_rgt">
	        				<div class="radio_style">
	        					<input type="radio" name="car_type">
	        					<label></label>
	        				</div>
	        			</div>
	        		</li>-->
	        	</ul>
	      	</div>
	    </div>
  	</div>
</div>
<!-- car type modal -->

<script src="https://maps.google.com/maps/api/js?key=<?php echo GOOGLE_MAP_API_KEY; ?>&libraries=places,geometry" type="text/javascript"></script>
<script type="text/javascript">

function ChangeForm(type){
	//alert('333');
	$("#booking_form")[0].reset();
	$('.required_field').text('');
	$("input[name=car_type]").prop("checked",false);
	if(type==1){
		$('.addwidth').addClass('width_twenty');
		$('.addwidth').removeClass('width_twenty_five');
		//$('.addwidth').removeClass('width_thirty');
		$('.airport_price').show();
		$('.normal_price').hide();		
		$('.flight_no_div').show();
		$('#booking_type').val(1);
	}else{
		$('.addwidth').addClass('width_twenty_five'); 
		//$('.addwidth').addClass('width_thirty');
		$('.addwidth').removeClass('width_twenty');
		$('.airport_price').hide();	
		$('.normal_price').show();	
		$('.flight_no_div').hide();
		$('#booking_type').val(2);
	}

}
function update_car_model(id,model_name){
	//alert(id);
	if(id && model_name){

		$('#car_model').val(id);
		$('#car_type').val(model_name);

		$('#cartype_modal').modal('hide');
	}
}

$('#car_type').click(function(){	
	$('#car_type').blur();
});

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

/* Sasidharan july 28 2022 */
$('#phone_num').change( () => {
	$("#pass_name").prop('disabled', true);
	$("#pass_name").val("");
	$("#submit_button").prop("disabled", true);

	if($('#phone_num').val() && $('#phone_num').val() != "") {
		var country_code = $("#cc_flag").intlTelInput("getNumber")[0].value.trim();
		let data = {
			phone : $('#phone_num').val(),
			country_code : country_code
		};
		$.ajax({
	    url:"<?php echo URL_BASE;?>users/get_passenger_details",
	    method: 'POST',
	    data: data,
	    dataType:'json',
	    success:function(data){
	    	$("#submit_button").prop("disabled", false);
	    	if(data?.name && data.name != "") {
	    		$("#pass_name").val(data.name);
	    	} else {
	    		$("#pass_name").prop('disabled', false);
	    	}
	    },
	    error : function(err){
	    	$("#submit_button").prop("disabled", false);
	    	return false;
        alert("Server connection error.Please try again");
        location.reload();
	    }
		})
	}
});

function ValidateBooking(){

	var pickup = $('#pickup_loc').val();
	var drop = $('#drop_loc').val();
	
	var phone = $('#phone_num').val();
	var email = $('#email_book').val();

	/* Sasidharan july 28 2022 */
	var pass_name = $('#pass_name').val();
	
	var car_type = $('#car_type').val();
	var p_date = $('#p_date').val();
	var p_time = $('#p_time').val();
	var passenger = $('#passenger').val();
	var baggage = $('#baggage').val();
	var flight_no = $('#flight_no').val();
	var country_code = $("#cc_flag").intlTelInput("getNumber")[0].value.trim();

	//if(pickup =='' || drop =='' || phone == '' || email == '' || car_type == '' || p_date == '' || p_time == '' || passenger == '' ){

		//alert('Please enter all require fields');
		$('.required_field').text('');
		$('#pickup_loc').removeClass('error_pickup_loc');
		$('#drop_loc').removeClass('error_drop_loc');
		$('#phone_num').removeClass('error_phone_num');
		$('#car_type').removeClass('error_car_type');
		$('#p_date').removeClass('error_p_date');
		$('#p_time').removeClass('error_p_time');
		$('#email_book').removeClass('error_email_book');

		/* Sasidharan july 28 2022 */
		$('#pass_name').removeClass('error_email_book');
		
		var error = 1;
		if(pickup == '' || pickup.length <4 ){
			error = 0;
			$('#pickup_loc').addClass('error_pickup_loc');
			$('#pickup_loc_error').text("<?php echo __('enter_pickup_loc');?>");
		}
		if(drop == '' || drop.length <4){
			error = 0;
			$('#drop_loc').addClass('error_drop_loc');
			$('#drop_loc_error').text("<?php echo __('enter_drop_loc');?>");
		}
		if(phone == '' || phone.length <4){
			error = 0;
			$('#phone_num').addClass('error_phone_num');
			$('#phone_num_error').text("<?php echo __('enter_phone');?>");
		}
		/*if(email == '' || email.length <4 ){
			error = 0;
			$('#email_book_error').text("<?php echo __('enter_email');?>");
		}*/
		if(car_type == ''){
			error = 0;
			$('#car_type').addClass('error_car_type');
			$('#car_type_error').text("<?php echo __('enter_car_type');?>");
		}
		if(p_date == ''){
			error = 0;
			$('#p_date').addClass('error_p_date');
			$('#p_date_error').text("<?php echo __('enter_pickup_date');?>");
		}
		if(p_time == ''){
			error = 0;
			$('#p_time').addClass('error_p_time');
			$('#p_time_error').text("<?php echo __('enter_pickup_time');?>");
		}
		if(passenger == ''){
			error = 0;
			$('#passenger_error').text("<?php echo __('enter_passenger');?>");
		}

		if (email!='' && !validateEmail(email)) {
			error = 0;
			$('#email_book').addClass('error_email_book');
			$('#email_book_error').text("<?php echo __('enter_valid_email');?>");
		}

		if (pass_name == '') {
			error = 0;
			$('#pass_name').addClass('error_email_book');
			$('#pass_name_error').text("<?php echo __('enter_name');?>");
		}
		
		

		if(error==0){
			return false;
		}else{
			/*$('.loader').show();
			$('#booking_form').submit(); */

			$('.loader').show();
	          var form = $('#booking_form')[0];
	          $('#booking_form').append('<input type="hidden" name="country_code" value="'+country_code+'" />');

	          var data = new FormData(form);
	          console.log("data",data);
	          $.ajax({
	            url:"<?php echo URL_BASE;?>users/save_booking_request",            
	            cache: false,
	            contentType: false,
	            processData: false,
	            method: 'POST',
	            data: data,
	            dataType:'json',
	            success:function(data){ 
	                console.log(data);//return false;
	                $('.loader').hide();
	                if(data.status==200){
	                  //alert('Resume submit successfully');
	                  //location.reload();
	                  window.location = "<?php echo URL_BASE.'booking-success.html'; ?>";
	                }else if(data.status==401){
	                  //alert('Some data are missing');

	                  /*$.each(data.error,function(k,v){
	                    //console.log('#'+k+'_error');
	                    $('#'+k+'_error').text(v);
	                  });*/

	                  var first_msg = Object.keys(data.error)[0];
	                  //console.log(data.error[first_msg],'inside----->');
	                  alert('Warning!!! '+data.error[first_msg]);
	                  $('.loader').hide();
	                  return false;
	                }
	            },
	            error:function(data)
	            {
	              $('.loader').hide();
	              return false;
	              alert("Server connection error.Please try again");
	              location.reload();
	            }

	          });
		}

	
	
}

	$(document).ready(function() {
		$('.owl-carousel1').owlCarousel({
		    loop: true,
		    margin: 0,
		    <?php if($lang == 'ar') {  ?>
		    rtl:true,
		    <?php } ?>
          	mouseDrag: false,
		    responsiveClass: true,
		    autoplay:true,
		    autoplayTimeout:30000,
		    nav: false,
		    dots: true,
		    responsive: {
			0: {
			    items: 1,
			    mouseDrag: false
			},
			600: {
			    items: 1,
			    mouseDrag: false
			},
			1000: {
			    items: 1,
			    loop: true,
			    mouseDrag: false,
			    margin: 0
			}
		    }
		});
		$('.home_slider').owlCarousel({
		    loop: true,
		    margin: 0,
		    <?php if($lang == 'ar') {  ?>
		    rtl:true,
		    <?php } ?>
          	mouseDrag: false,
		    responsiveClass: true,
		    autoplay:true,
		    autoplayTimeout:3000,
		    nav: false,
		    dots: true,
		    responsive: {
			0: {
			    items: 1,
			    mouseDrag: false
			},
			600: {
			    items: 1,
			    mouseDrag: false
			},
			1000: {
			    items: 1,
			    loop: true,
			    mouseDrag: false,
			    margin: 0
			}
		    }
		});
		
	});


  var bounds = new google.maps.LatLngBounds();
  var markers = [];
  var map; 
  var start;
  var end;
  var autocomplete, toAutocomplete;
  var directionsService = new google.maps.DirectionsService;
  var directionsDisplay = new google.maps.DirectionsRenderer({suppressMarkers: true});
  
  function initMap()
  {    
    /** google autocomplete functionality in add booking **/
    //var options = {types: [] };
    /* Restrictions to load only particular country */

    var options = {types: [] };//{types: [],componentRestrictions: {country: "kw"} };
    
    autocomplete = new google.maps.places.Autocomplete(document.getElementById('pickup_loc'), options);
    toAutocomplete = new google.maps.places.Autocomplete(document.getElementById('drop_loc'), options);

    /*********/
    google.maps.event.addListener(autocomplete, 'place_changed', function() {
      var place = autocomplete.getPlace();
      var lat = place.geometry.location.lat();
      var lng = place.geometry.location.lng();
      var placeId = place.place_id;      
      console.log(lat,'lat------',lng);
      $('#pickup_lat').val(lat);
      $('#pickup_lng').val(lng);
      // to set city name, using the locality param
      /*var componentForm = {
        locality: 'short_name',
      };
      for (var i = 0; i < place.address_components.length; i++) {
        var addressType = place.address_components[i].types[0];
        if (componentForm[addressType]) {
          var val = place.address_components[i][componentForm[addressType]];
          //document.getElementById("city").value = val;
        }
      }*/      
      //document.getElementById("latitude").value = lat;document.getElementById("longitude").value = lng;document.getElementById("location_id").value = placeId;
    });

    google.maps.event.addListener(toAutocomplete, 'place_changed', function() {
      var place = toAutocomplete.getPlace();
      var lat = place.geometry.location.lat();
      var lng = place.geometry.location.lng();
      var placeId = place.place_id;
      $('#drop_lat').val(lat);
      $('#drop_lng').val(lng);

      console.log(lat,'lat------',lng);      
    });

    /***********/
    //google.maps.event.addDomListener(document.getElementById('pickup_loc'), 'focus', geolocate);
    //google.maps.event.addDomListener(document.getElementById('drop_loc'), 'focus', geolocate);  

  }

  function change_drop_address(input){
  	if($(input).is(":checked")){
  		$('#pickup_lat').val("29.2404414");
      	$('#pickup_lng').val("47.9688518");
      	$('#pickup_loc').val('Kuwait International Airport Terminal');
      	$("#pickup_loc").attr("readonly", "readonly");
  	}else{
  		$('#pickup_lat').val("");
      	$('#pickup_lng').val("");
      	$('#pickup_loc').val('');
      	$("#pickup_loc").removeAttr("readonly");
  	}
  }

function geolocate() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
        var geolocation = new google.maps.LatLng(
            position.coords.latitude, position.coords.longitude);
        var circle = new google.maps.Circle({
            center: geolocation,
            radius: position.coords.accuracy
        });
        autocomplete.setBounds(circle.getBounds());
        // Log autocomplete bounds here
        console.log(autocomplete.getBounds());
    });
  }
}
google.maps.event.addDomListener(window, "load", initMap);

    </script>
<script type="text/javascript">
	$(document).ready(function(){
    	//document.getElementById('banner-video').play();
    	$("#cc_flag").intlTelInput();
    	$("#cc_flag").intlTelInput("getNumber");
  });
</script>
