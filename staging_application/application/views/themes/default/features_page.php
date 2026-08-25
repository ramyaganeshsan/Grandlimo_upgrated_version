<?php  defined('SYSPATH') OR die("No direct access allowed."); 

$features_page_contents = isset($features_page_content[0])?$features_page_content[0]:array();

?>
<div class="inner_page_container">
	<section class="features_container">
		<div class="innerpage_banner">
			<img src="public/images/features_banner.png" alt="Pricing" class="img-responsive">
			<div class="innerpage_banner_cont">
				<p> <?php echo $features_page_contents['banner_content']; ?></p>
				<a href="<?php echo URL_BASE; ?>" title="<?php echo __('book_now'); ?>"><?php echo __('book_now'); ?></a>
			</div>
		</div>
	</section>
	<section class="features_widgets_container">
		<div class="container">
			<div class="col-md-12">
					<div class="blk_title text-center">
						<h2><?php echo $features_page_contents['feature_title']; ?></h2>
						<small><?php echo $features_page_contents['feature_description']; ?></small>
					</div>
				</div>
			<div class="col-md-4">
				<div class="features_widgets_blk text-center">
					<i class="fwidget_ico fw_ico1"></i>
					<h3><?php echo $features_page_contents['gps']; ?></h3>
					<p><?php echo $features_page_contents['gps_description']; ?> </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="features_widgets_blk text-center">
					<i class="fwidget_ico fw_ico2"></i>
					<h3><?php echo $features_page_contents['fare_quote']; ?></h3>
					<p><?php echo $features_page_contents['fare_quote_description']; ?></p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="features_widgets_blk text-center">
					<i class="fwidget_ico fw_ico3"></i>
					<h3><?php echo $features_page_contents['social_share']; ?></h3>
					<p><?php echo $features_page_contents['social_share_description']; ?></p>
				</div>
			</div>
		</div>
	</section>
	<section class="features_app_container">
		<div class="container">
			<div class="col-md-6">
				<div class="features_app_container_lft">
					<h2><?php echo $features_page_contents['rate_your_driver']; ?></h2>
					<p><?php echo $features_page_contents['rate_your_driver_description']; ?></p>
					<a href="javascript:;" class="rating_ico"></a>
			    </div>
			</div>
			<div class="col-md-6">
				<div class="features_app_container_rgt">
					<img src="public/images/features_app_screen.png" alt="">
				</div>
			</div>
		</div>
	</section>
	<section class="features_btmwdgts_container">
		<div class="container">
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="features_btmwdgts_blk">
					<i class="fbwidget_ico fbw_ico1"></i>
					<div class="fbwidget_cont">
						<h3><?php echo $features_page_contents['reliability']; ?></h3>
						<p><?php echo $features_page_contents['reliability_description']; ?></p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="features_btmwdgts_blk">
					<i class="fbwidget_ico fbw_ico2"></i>
					<div class="fbwidget_cont">
						<h3><?php echo $features_page_contents['schedule_ride']; ?></h3>
						<p><?php echo $features_page_contents['schedule_ride_decription']; ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>