<?php defined('SYSPATH') OR die('No direct access allowed.');?>
<?php
	$lang="en";
	$lang=isset($_SESSION['lang'])?$_SESSION['lang']:"en";
	$play_store = COMMON_ANDROID_PASSENGER_APP;
	$app_store = COMMON_IOS_PASSENGER_APP; 
	
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
	/* print "<pre>";
	 print_r($home_interval);
	 print_r($mobile_interval);
	 print_r($home_slider);
	 print_r($mobile_slider);
	 exit;*/
	/////// Slider /////////
?>



<section class="banner">
	<div class="banner_img">
		<img src="<?php echo URL_BASE;?>/public/images/home_banner.png" class="img-responsive">
		<div class="home_banner_content visible-xs visible-sm">
			<h2>Welcome to</h2>
			<small>GrandLimo</small>
		</div>
	</div>
	<div class="banner_content">
		<div class="container">
			<div class="banner_content_inner">
				<div class="col-md-12">
					<ul class="nav nav-pills">
					    <li class="active"><a data-toggle="pill" href="#picknow" title="Airport  Pickup/Drop Off" class="picknow"><i class="picknow_ico"></i>Airport  Pickup/Drop Off</a></li>
					    <li><a data-toggle="pill" href="#picklater" title="Pickup Later" class="picklater"><i class="picklater_ico"></i>Pickup Later</a></li>
					</ul>
	  
					<div class="tab-content">
						<div id="picknow" class="tab-pane fade in active">
						  	<form>
								<div class="form-group width_fifty">
									<i class="hpickup_ico"></i>
									<input type="text" name="pickup" class="form-control" placeholder="Pick up location">
								</div>
								<div class="form-group width_fifty">
									<i class="hdrop_ico"></i>
									<input type="text" name="drop" class="form-control" placeholder="Drop location">
								</div>
								<div class="form-group width_thirty">
									<i class="hphone_ico"></i>
									<input type="text" name="drop" class="form-control" placeholder="Phone Number">
								</div>
								<div class="form-group width_thirty">
									<i class="hemail_ico"></i>
									<input type="text" name="drop" class="form-control hemail" placeholder="Email">
								</div>
								<div class="form-group width_thirty">
									<i class="hcartype_ico"></i>
									<input type="text" name="drop" class="form-control hcartype" data-toggle="modal" data-target="#cartype_modal" placeholder="Car type">
								</div>
								<div class="form-group width_twenty">
									<i class="hdate_ico"></i>
									<input type="text" name="drop" class="form-control hdate" placeholder="Date">
								</div>
								<div class="form-group width_twenty">
									<i class="htime_ico"></i>
									<input type="text" name="drop" class="form-control htime" placeholder="Time">
								</div>
								<div class="form-group width_twenty">
									<i class="hpsngr_ico"></i>
									<input type="text" name="drop" class="form-control hpsngr" placeholder="No of Passengers">
								</div>
								<div class="form-group width_twenty">
									<i class="hbag_ico"></i>
									<input type="text" name="drop" class="form-control hbag" placeholder="No of Baggage">
								</div>
								<div class="form-group width_twenty">
									<i class="hplane_ico"></i>
									<input type="text" name="drop" class="form-control hplane" placeholder="Flight No">
								</div>
								<div class="form-group width_twenty">
									<label class="required_field">*<i>Required Field</i></label>
								</div>
								<div class="form-group">
									<input type="submit" name="booknow" value="Book Now" title="Book Now" class="btn btn-primary">
								</div>

							</form>
						</div>
						<div id="picklater" class="tab-pane fade">
						  <form>
								<div class="form-group">
									<input type="text" name="pickup" class="form-control" placeholder="Pick up location">
								</div>
								<div class="form-group">
									<input type="text" name="drop" class="form-control" placeholder="Drop location">
								</div>
							</form>
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
				<h2>Vehicle Type</h2>
				<small>One tap and a car comes directly to you. Hope in your driver knows exactly where to go. </small>
			</div>
		</div>
		<div class="col-md-12">
			<div class="vehicle_tab_container">
				<ul class="nav nav-pills">
				    <li><a data-toggle="tab" href="#type_business" title="Business">Business</a></li>
				    <li class="active"><a data-toggle="tab" href="#type_suv" title="SUV">SUV</a></li>
				    <li><a data-toggle="tab" href="#type_grand" title="Grand">Grand</a></li>
				    <li><a data-toggle="tab" href="#type_luxury" title="Luxury">Luxury</a></li>
				</ul>
  
				<div class="tab-content">
					<div id="type_business" class="tab-pane fade">
						<div class="vehic_desc_blocks">
							<div class="veh_desc_lft">
								<h4>Business</h4>
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
					</div>
					<div id="type_suv" class="tab-pane fade in active">
						<div class="vehic_desc_blocks">
							<div class="veh_desc_lft">
								<h4>Escalade</h4>
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
					</div>
					<div id="type_grand" class="tab-pane fade">
						<div class="vehic_desc_blocks">
							<div class="veh_desc_lft">
								<h4>Grand</h4>
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
					</div>
					<div id="type_luxury" class="tab-pane fade">
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
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="meet_drivers_container">
	<div class="container">
		<div class="col-md-12">
			<div class="blk_title text-center">
				<h2>Meet our Drivers</h2>
				<small>One tap and a car comes directly to you. Hope in your driver knows exactly where to go. </small>
				<a href="javascript:;" title="View More" class="view_more">View More</a>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-4">
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
		</div>
	</div>
</section>
<section class="app_container">
	<div class="container">
		<div class="col-md-6">
			<div class="app_container_lft">
				<h2>Book GrandLimo from the App</h2>
				<p>One tap and a car comes directly to you. Hope in your driver knows exactly where to go. </p>
				<ul>
		            <li><a href="javascript:;" title="" class="footer_app_icon footer_iapp_icon"></a></li>
		            <li><a href="javascript:;" title="" class="footer_app_icon footer_gapp_icon"></a></li>
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
				<h3>Pick at Spot</h3>
				<p>Book the Vehicle through our Smartphone App and Enjoy your Chauffeured Experience. </p>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4">
			<div class="widgets_blk text-center">
				<i class="widget_ico w_ico2"></i>
				<h3>Card Payment</h3>
				<p>Your Payment is Guaranteed to be Handled Securely and safely via your Choice of Credit or Debit Card. </p>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4">
			<div class="widgets_blk text-center">
				<i class="widget_ico w_ico3"></i>
				<h3>Secured</h3>
				<p>The App Securely Manages your Content Safely with the Proper Handling Procedures of your Banking Cards.</p>
			</div>
		</div>
	</div>
</section>
<section class="testimonial_container">
	<a href="javascript:;" class="testi_insta"></a>
	<div class="container">
		<div class="testimonial_inner_container">
			<div class="owl-carousel owl-theme">
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
				</div>	
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
	        	<h4 class="modal-title">Select Car Type</h4>
	      	</div>
	      	<div class="modal-body">
	        	<ul>
	        		<li>
	        			<div class="car_type_lft">
	        				<div class="car_type_lft_cont">
	        					<h4>business</h4>
	        					<p>
	        						<span>Chrysler or Similar</span>
	        						<i>KWD 2.00</i>
	        						<small>Fare per 10 minutes</small>
	        					</p>
	        				</div>
	        				<div class="car_type_lft_img">
	        					<img src="public/images/car_business.png" alt="Car type" class="img-responsive">
	        				</div>
	        			</div>
	        			<div class="car_type_rgt">
	        				<div class="radio_style">
	        					<input type="radio" name="car_type">
	        					<label></label>
	        				</div>
	        			</div>
	        		</li>
	        		<li>
	        			<div class="car_type_lft">
	        				<div class="car_type_lft_cont">
	        					<h4>SUV</h4>
	        					<p>
	        						<span>Escalade or Similar</span>
	        						<i>KWD 2.00</i>
	        						<small>Fare per 10 minutes</small>
	        					</p>
	        				</div>
	        				<div class="car_type_lft_img">
	        					<img src="public/images/car_suv.png" alt="Car type" class="img-responsive">
	        				</div>
	        			</div>
	        			<div class="car_type_rgt">
	        				<div class="radio_style">
	        					<input type="radio" name="car_type">
	        					<label></label>
	        				</div>
	        			</div>
	        		</li>
	        		<li>
	        			<div class="car_type_lft">
	        				<div class="car_type_lft_cont">
	        					<h4>Grand</h4>
	        					<p>
	        						<span>Impala or Similar</span>
	        						<i>KWD 5.00</i>
	        						<small>Fare per 10 minutes</small>
	        					</p>
	        				</div>
	        				<div class="car_type_lft_img">
	        					<img src="public/images/car_grand.png" alt="Car type" class="img-responsive">
	        				</div>
	        			</div>
	        			<div class="car_type_rgt">
	        				<div class="radio_style">
	        					<input type="radio" name="car_type">
	        					<label></label>
	        				</div>
	        			</div>
	        		</li>
	        		<li>
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
	        		</li>
	        	</ul>
	      	</div>
	    </div>
  	</div>
</div>
<!-- car type modal -->

<script type="text/javascript">	 
	$(document).ready(function() {
		$('.owl-carousel').owlCarousel({
		    loop: true,
		    margin: 0,
		    <?php //if($lang == 'ar') {  ?>
		    //rtl:true,
		    <?php //} ?>
          	mouseDrag: false,
		    responsiveClass: true,
		    autoplay:true,
		    smartSpeed : 500,
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
</script>
