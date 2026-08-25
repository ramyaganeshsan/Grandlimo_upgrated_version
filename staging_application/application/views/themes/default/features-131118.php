<?php  defined('SYSPATH') OR die("No direct access allowed."); 

$pricing_page_content = isset($pricing_page[0])?$pricing_page[0]:array();

?>
<div class="inner_page_container">
	<section class="pricing_container">
		<div class="innerpage_banner">
			<img src="public/images/pricing_banner.png" alt="Pricing" class="img-responsive">
			<div class="innerpage_banner_cont">
				<p><?php echo $pricing_page_content['banner_content']; ?></p>
			</div>
		</div>
	</section>
	<section class="pricing_block_container">

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
						$image_path = URL_BASE.'public/images/pricing_block_img1.png';
					}

					?>				


				<div class="pricing_blocks">
					<div class="container">

					<?php if($key==0) { ?> 
						<div class="col-md-12">
							<div class="blk_title text-center">
								<h2><?php echo $pricing_page_content['pricing']; ?></h2>
								<small><?php echo $pricing_page_content['pricing_description']; ?></small>
							</div>
						</div>
					<?php } ?>


						<div class="col-md-12">
							<div class="pricing_block_lft">
								<h4><?php echo $model_name; ?><small></small></h4>
								<span><?php echo CURRENCY.' '.number_format((float)$model['base_fare'], 2, '.', ''); ?></span>
								<ul>
									<li><span class="pric_capt"><i>Base Fare</i></span><span><?php echo $model['base_fare'].' '.CURRENCY; ?></span></li>
									<li><span class="pric_capt"><i>Fare per <?php echo $model['base_mins']; ?> minutes</i></span><span><?php echo $model['minutes_fare'].' '.CURRENCY; ?></span></li>
									<li><span class="pric_capt"><i>Waiting charge per (hr)</i></span><span><?php echo $model['waiting_cost_per_hour'].' '.CURRENCY; ?></span></li>
									<li><span class="pric_capt"><i>Luggage</i></span><span><?php echo $model['max_luggage']; ?></span></li>
									<li><span class="pric_capt"><i>Model Size</i></span><span><?php echo $model['model_size']; ?></span></li>
								</ul>
								<a href="<?php echo URL_BASE; ?>" title="<?php echo __('book_now'); ?>"><?php echo __('book_now'); ?></a>

							</div>
							<div class="pricing_block_rgt">
								<img src="<?php echo $image_path; ?>" class="img-responsive" alt="<?php echo $model_name; ?>">
							</div>
						</div>
					</div>
				</div>

				<?php } } ?>
		

	</section>
</div>
 
