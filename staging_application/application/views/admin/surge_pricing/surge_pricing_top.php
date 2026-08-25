<!---surge price popup button-->
<a href="#" title="Surge Price" class="normal_surprice surge_price_popup surprice_added_plus"><?php echo __('surge_price'); ?><span class="add_plusbtn"></span></a>
<!---surge price popup button end-->
<?php
$count = 0; 
foreach($surge_price_model_detailss as $key => $value) {
	if($value['surge_pricing_status'] == 'A') {
		$count++;
	}
}
?>
<!---surge price details dropdown button-->
  <div class="surprice_added_plus_outer">
  <?php if($count > 0) { ?>
	  <?php /* ?>	  
		<a href="#" title="Surge Price" class="normal_surprice surprice_added_plus" id="surprice_added_plus"><?php echo __('surge_price'); ?><span class="add_plusbtn"></span></a>
		<?php */ ?>	   
  <?php } ?>		
	<!---surge price details dropdown end-->
	  <ul class="surprice_added_dropdown">
		<?php foreach($surge_price_model_detailss as $key => $value) { ?>
			<?php $from = $to = ""; ?> 
			<?php if($value['surge_pricing_status'] == 'A') { ?>
				<?php $skey = array_search(1, array_column($value['surge_pricing_fare'], 'default'));?>
				<?php if(isset($value['surge_pricing_custom_interval']) && !empty($value['surge_pricing_custom_interval'])) { ?>
						<?php $interval = $value['surge_pricing_custom_interval']; ?>
				<?php } else { ?>
						<?php $interval = $value['surge_pricing_manual_interval']; ?>
				<?php } ?>				  				
				<li>
					<div class="surg_price_dropdown_list">
						<div class="dropbx_car_model"><img src="<?php echo URL_BASE; ?>public/uploads/model_image/<?php echo strtolower($value['model_name']); ?>.png">
						</div>
						<div class="dropbx_car_type">
						  <p class="dropbx_top"><span class="model_size_val"><?php echo $value['model_name'].' '.$value['surge_pricing_fare'][$skey]['fare']; ?> X</span><span class="model_date_val"><?php  echo date("d/m/Y");?></span></p>
						  <?php foreach($interval as $k => $v) { ?>
								<?php if($v['default'] == 1) { ?>
									<?php $from = Commonfunction::convert_seconds_to_hours($v['from']); $to = Commonfunction::convert_seconds_to_hours($v['to']); ?>
									<p class="dropbx_btm"><?php echo $from; ?> to <?php echo $to; ?></p>
								<?php } ?>	
						<?php } ?>						  
						</div>
					</div>
				</li>
			<?php } ?>
		<?php } ?>		   
	</ul>
</div> 
