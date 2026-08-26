<?php  defined('SYSPATH') OR die("No direct access allowed."); 

$lang=isset($_SESSION['lang'])?$_SESSION['lang']:"en";
if($lang=='ar'){           
    $address_one = ADDRESS_ONE_ARABIC;
    $address_two = ADDRESS_TWO_ARABIC;
    $country = WEB_COUNTRY_ARABIC;
}else{           
    $address_one = ADDRESS_ONE;
    $address_two = ADDRESS_TWO;
    $country = WEB_COUNTRY;
}

$how_its_work_pages = isset($how_its_work_page[0])?$how_its_work_page[0]:[];
?>
<!-- <script type="text/javascript" src="public/js/fullpage.js"></script> -->
<link rel='stylesheet'   href='public/css/animate.min.css?ver=4.9.3' type='text/css' media='all' />
  <link rel='stylesheet'   href='public/css/scroll_jquery.fullPage.css?ver=4.9.3' type='text/css' media='all' />
  
  <script type='text/javascript' src='public/js/jquery.min.js?ver=1.11.3'></script>
  <script src="public/js/js?key=AIzaSyDMTkQBXnO8FzQdIEkSU_suAa8TX9WTqlU&libraries=places"></script>
<div class="inner_page_container">
	<div id="fullpage" class="how_it_works_container">
		<div class="section app-features-slider fp-auto-height" id="section0">
			<section class="howitworks_banner_container">
				<div class="innerpage_banner">
					<img src="public/images/how_it_works_banner.png" alt="How it works" class="img-responsive">
					<div class="innerpage_banner_cont">
						<p><?php echo $how_its_work_pages['banner_content']; ?></p>
						<a href="javascript:;" title="Book Now">Book Now</a>
					</div>
				</div>
			</section>
			<div class="container">
				<div class="col-md-12">
					<div class="blk_title text-center">
						<h2><?php echo $how_its_work_pages['how_its_work']; ?></h2>
						<small><?php echo $how_its_work_pages['how_its_work_description']; ?></small>
					</div>
				</div>	
			</div>
		</div>
		<div class="howitworks_blocks section app-features-slider fp-auto-height scroll_steps scrll_stp1" id="section1">
			<div id="slide1" class="slide">			
				<div class="container">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="howitworks_block_lft">
							<i>#1</i>
							<h2><?php echo $how_its_work_pages['booking']; ?></h2>
							<p><?php echo $how_its_work_pages['booking_description']; ?></p>
							<img src="public/images/how_steps_lftimg1.png" alt="">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="howitworks_block_rgt">
							<img src="public/images/how_steps_img1.png" class="img-responsive" alt="Escalade">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="howitworks_blocks section app-features-slider scroll_steps scrll_stp2" id="section2">
			<div id="slide2" class="slide">		
				<div class="container">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="howitworks_block_lft">
							<i>#2</i>
							<h2><?php echo $how_its_work_pages['select_car']; ?></h2>
							<p><?php echo $how_its_work_pages['select_car_description']; ?></p>
							<img src="public/images/how_steps_lftimg2.png" alt="">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="howitworks_block_rgt">
							<img src="public/images/how_steps_img2.png" class="img-responsive" alt="Escalade">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="howitworks_blocks section app-features-slider scroll_steps scrll_stp3" id="section3">
			<div id="slide3" class="slide">
				<div class="container">
					<div class="col-md-12 visible-md visible-lg">
						<div class="howitworks_block_lft" style="<?php if($lang == 'ar') { ?>background: url(public/images/how_steps_ar_img3.png) no-repeat right center;<?php } else{ ?> background: url(public/images/how_steps_img3.png) no-repeat right center; <?php } ?> background-size: contain;">
							<i>#3</i>
							<h2><?php echo $how_its_work_pages['airport_pickup']; ?></h2>
							<p><?php echo $how_its_work_pages['airport_pickup_description']; ?></p>
							<!-- <img src="public/images/how_steps_lftimg3.png" alt=""> -->
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-6 col-md-6 hidden-md hidden-lg">
						<div class="howitworks_block_lft">
							<i>#3</i>
							<h2><?php echo $how_its_work_pages['airport_pickup']; ?></h2>
							<p><?php echo $how_its_work_pages['airport_pickup_description']; ?></p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 hidden-md hidden-lg">
						<div class="howitworks_block_rgt">
							<img src="public/images/how_steps_img3-old.png" class="img-responsive" alt="Escalade">
						</div>
					</div> 
				</div>
			</div>
		</div>
		<div class="howitworks_blocks section app-features-slider scroll_steps scrll_stp4" id="section4">
			<div id="slide4" class="slide">
				<div class="container">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="howitworks_block_lft">
							<i>#4</i>
							<h2><?php echo $how_its_work_pages['fare']; ?></h2>
							<p><?php echo $how_its_work_pages['fare_description']; ?></p>
							<img src="public/images/how_steps_lftimg4.png" alt="">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="howitworks_block_rgt">
							<img src="public/images/how_steps_img4.png" class="img-responsive" alt="Escalade">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="howitworks_blocks section app-features-slider scroll_steps scrll_stp5" id="section5">
			<div id="slide5" class="slide">
				<div class="container">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="howitworks_block_lft">
							<i>#5</i>
							<h2><?php echo $how_its_work_pages['ride_confirm']; ?></h2>
							<p><?php echo $how_its_work_pages['ride_confirm_description']; ?></p>
							<img src="public/images/how_steps_lftimg5.png" alt="">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="howitworks_block_rgt">
							<img src="public/images/how_steps_img5.png" class="img-responsive" alt="Escalade">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="howitworks_blocks section app-features-slider scroll_steps scrll_stp6" id="section6">
			<div id="slide6" class="slide">
				<div class="container">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="howitworks_block_lft">
							<i>#6</i>
							<h2><?php echo $how_its_work_pages['ride_complete']; ?></h2>
							<p><?php echo $how_its_work_pages['ride_complete_description']; ?></p>
							<img src="public/images/how_steps_lftimg6.png" alt="">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="howitworks_block_rgt">
							<img src="public/images/how_steps_img6.png" class="img-responsive" alt="Escalade">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="howitworks_blocks section app-features-slider scroll_steps scrll_stp7" id="section7">
			<div id="slide7" class="slide">
				<div class="container">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="howitworks_block_lft">
							<i>#7</i>
							<h2><?php echo $how_its_work_pages['rate_driver']; ?></h2>
							<p><?php echo $how_its_work_pages['rate_driver_description']; ?></p>
							<img src="public/images/how_steps_lftimg7.png" alt="">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="howitworks_block_rgt">
							<img src="public/images/how_steps_img7.png" class="img-responsive" alt="Escalade">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section app-features-slider fp-auto-height" id="section8">
			<footer>
			    <div class="footer_top">
			        <div class="container">
			            <div class="footer_top_inner">
			                <div class="col-xs-6 col-sm-6 col-md-3">
			                    <h4>Company</h4>
			                    <ul>
			                        <li><a href="<?php echo URL_BASE; ?>" title="Home"><?php echo __('home'); ?></a></li>
			                        <li><a href="<?php echo URL_BASE; ?>features.html" title="Features"><?php echo __('features'); ?></a></li>
			                        <li><a href="<?php echo URL_BASE; ?>how_it_works.html" title="How it Works"><?php echo __('how_it_works'); ?></a></li>
			                        <li><a href="<?php echo URL_BASE; ?>pricing.html" title="Pricing"><?php echo __('pricing'); ?></a></li>
			                    </ul>
			                </div>
			                <div class="col-xs-6 col-sm-6 col-md-3">
			                    <h4>Learn more</h4>
			                    <ul>
			                        <li><a href="<?php echo URL_BASE; ?>about-us.html" title="<?php echo __('about_us');?>"><?php echo __('about_us');?></a></li>
			                        <li><a href="<?php echo URL_BASE; ?>careers.html" title="<?php echo __('careers');?>"><?php echo __('careers');?></a></li>
			                        <li><a href="<?php echo URL_BASE; ?>blog.html" title="<?php echo __('blog');?>"><?php echo __('blog');?></a></li>
			                        <li><a href="<?php echo URL_BASE; ?>terms-and-conditions.html" title="<?php echo __('terms_conditions');?>"><?php echo __('terms_conditions');?></a></li>
			                    </ul>
			                </div>
			                <div class="col-xs-6 col-sm-6 col-md-4">
			                    <h4>Social</h4>
			                    <div class="social-links">
			                        <ul>
			                            <?php if(COMPANY_CID==1 || SUBDOMAIN=='demo') { ?>
			                            <li><a class="facebook2" href="<?php echo FB_SHARE; ?>" title="Facebook" rel="nofollow" target="_blank"></a></li>
			                            <li><a class="twitter" href="<?php echo TW_SHARE; ?>" title="Twitter" rel="nofollow" target="_blank"></a></li>
			                            <li><a class="google" href="<?php echo GOOGLE_SHARE; ?>" title="Google+" rel="nofollow" target="_blank"></a></li>
			                            <li><a class="linked_in" href="<?php echo LINKEDIN_SHARE; ?>" title="LinkedIn" rel="nofollow" target="_blank"></a></li>
			                            <?php } else{  ?>
			                             <li><a class="facebook2" href="<?php echo COMPANY_FACEBOOK_LINK; ?>" title="Facebook" rel="nofollow" target="_blank"></a></li>
			                            <li><a class="twitter" href="<?php echo COMPANY_TWITTER_LINK; ?>" title="Twitter" rel="nofollow" target="_blank"></a></li>
			                            <li><a class="google" href="<?php echo COMPANY_GOOGLE_LINK; ?>" title="Google+" rel="nofollow" target="_blank"></a></li>
			                            <li><a class="linked_in" href="<?php echo COMPANY_LINKED_LINK; ?>" title="LinkedIn" rel="nofollow" target="_blank"></a></li>
			                            <?php } ?>                                
			                        </ul>
			                    </div>
			                </div>
			                <div class="col-xs-6 col-sm-6 col-md-2">
			                    <h4>Contact us</h4>
			                    <div class="cont_address">
			                       <p><?php echo $address_one; ?><br><?php if($address_two!=''){ echo $address_two.'<br>';} ?><?php echo $country; ?><br><?php echo WEB_PHONE; ?><br><a href="mailto:<?php echo WEB_EMAIL_CONTACT; ?>"><?php echo WEB_EMAIL_CONTACT; ?></a></p>
			                    </div>
			                    <div class="footer_logo">
			                        <a href="javascript:;" title="GRAND LIMO"><img src="<?php echo URL_BASE.SITE_LOGO_IMGPATH.'logo.png'; ?>" alt="footer logo"></a>
			                    </div>
			                </div>
			                <div class="col-md-12">
			                    <div class="footer_btmtop">
			                        <ul>
			                            <li><a href="javascript:;" title="" class="footer_app_icon footer_iapp_icon"></a></li>
			                            <li><a href="javascript:;" title="" class="footer_app_icon footer_gapp_icon"></a></li>
			                        </ul>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div>
			    <div class="clearfix"></div>
			    <div class="footer_btm">
			        <div class="container">
			            <div class="col-md-12">
			                <p class="copy_r">Copyright © 2018 GrandLimo. All Rights Reserved.
			                    <?php //if(COMPANY_CID != 0) { echo (COMPANY_COPYRIGHT == "")? '@'.date('Y').$footer_contents['site_copyrights'] : '@'.date('Y').' '.COMPANY_NAME.' '.__('all_rights'); } else { echo $footer_contents['site_copyrights']; }?>
			                </p>
			            </div>
			        </div>        
			    </div>
			</footer>
		</div>		
	</div>
</div>
<script type="text/javascript">
	
</script>
<script src="public/js/scroll_jquery.fullPage.js"></script>
<script src="public/js/scroll_moment.min.js"></script>
<!-- <script src="public/js/scroll_bootstrap-datetimepicker.min.js"></script> -->
<script src="public/js/scroll_owl.carousel.min.js"></script>
<script src="public/js/scroll_wow.min.js"></script>
<script src="public/js/scroll_jquery.custom.js"></script>