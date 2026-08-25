<?php defined('SYSPATH') OR die("No direct access allowed.");
//$tagcount = count($site_info_settings);

$no_image=URL_BASE.'public/images/no-image.png';
?>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery-1.6.3.min.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery.validate.js"></script>
<style ="text/css">
.inputfields .form input[type="text"]
{
width:350px;
}
</style>

<div class="container_content fl clr">
	<div class="cont_container mt15 mt10">
		<div class="content_middle"> 
			<form method="post" enctype="multipart/form-data" class="form" name="managerating_form" id="managerating_form" action="" >
   
				<div class="widget">
					<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" />
						<h6><?php echo $slider_title; ?></h6>
					</div>
					<table border="0" cellpadding="5" cellspacing="0" width="100%">
					<tr>
						<td></td>
					</tr>	
					<tr>
						<td valign="top" width="20%">
							<label><?php echo __($slider_interval).' (seconds)'; ?></label><span class="star">*</span>
						</td>  
						<td>
							<div class="new_input_field">
								<input type="text" name="<?php echo $slider_interval; ?>" id="<?php echo $slider_interval; ?>" title="<?php echo __($slider_interval); ?>" maxlength="2" value="<?php if(count($site_settings) >0){ echo isset($site_settings) &&!array_key_exists($slider_interval,$postvalue)? trim($site_settings[0][$slider_interval]):$postvalue[$slider_interval];} ?>">
								<span class="error"><?php echo isset($errors[$slider_interval]) ? $errors[$slider_interval] : ''; ?></span>
							</div>
						</td>
					</tr>
					<tr>
						<td valign="top" width="20%">
							<label><?php echo __('select_banner_image_english'); ?></label><span class="star">*</span>
						</td>        
						<td>
							<div class="new_input_field banner_en">
							<input type="file" class=" imageonly" name="mobile_slider_en_0" id="banner_slider_en_0" title="<?php echo __('image_english'); ?>">
							<input style="width:7%;float:right;" type="button" id="drop_button" value="+Drop" onclick="add_banner_en();"/>
							<span class="error"><?php echo isset($errors['mobile_slider_en_0']) ? $errors['mobile_slider_en_0'] : ''; ?></span>
							</div>
							
							<div class="add_banner_en">
								<?php 
									foreach ($files as $key => $file) {
										$id_num = explode("_",$key);//print_r($id_num);exit;
										$id = $id_num[3];
										if($id_num[2] == "en" && $id>0)
										{?>
										
											<tr id="banner_row_en_<?php echo $id;?>">
												<td></td>
												<div class="new_input_field banner_en">
												<td>
													
														<input type="file" class=" imageonly" name="mobile_slider_en_<?php echo $id;?>" id="banner_slider_en_<?php echo $id;?>" title="<?php echo __('image_english');?>">
													
												</td>
												<td>
													<input style="width:7%" type="button" id="drop_button" value="-Drop" onclick="delete_banner_en(<?php echo $id; ?>);"/>
												</td>
												</div>
												<td><span class="error"><?php echo isset($errors["mobile_slider_en_".$id]) ? $errors["mobile_slider_en_".$id] : ''?></span></td>
											</tr>

									<?php } }
									?>								
							</div>
						</td>
					</tr>
					<tr>
						<td valign="top" width="20%">
							<label><?php echo __('select_banner_image_arabic'); ?></label><span class="star">*</span>
						</td>        
						<td>
							<div class="new_input_field banner_ar">
							<input type="file" class=" imageonly" name="mobile_slider_ar_0" id="banner_slider_ar_0" title="<?php echo __('image_arabic'); ?>">
							<input style="width:7%;float:right;" type="button" value="+Drop" onclick="add_banner_ar();"/>
							<span class="error"><?php echo isset($errors['mobile_slider_ar_0']) ? $errors['mobile_slider_ar_0'] : ''; ?></span>
							</div>
							
							<div class="add_banner_ar">
								<?php 
									foreach ($files as $key => $file) {
										$id_num = explode("_",$key);//print_r($id_num);exit;
										$id = $id_num[3];
										if($id_num[2] == "ar" && $id>0)
										{?>
										
											<tr id="banner_row_ar_<?php echo $id;?>">
												<td></td>
												<div class="new_input_field banner_ar">
												<td>
													
														<input type="file" class=" imageonly" name="mobile_slider_ar_<?php echo $id;?>" id="banner_slider_ar_<?php echo $id;?>" title="<?php echo __('image_arabic');?>">
													
												</td>
												<td>
													<input style="width:7%" type="button" value="-Drop" onclick="delete_banner_ar(<?php echo $id; ?>);"/>
												</td>
												</div>
												<td><span class="error"><?php echo isset($errors["mobile_slider_ar_".$id]) ? $errors["mobile_slider_ar_".$id] : ''?></span></td>
											</tr>

									<?php } }
									?>								
							</div>
						</td>
					</tr>
					<input type="hidden" id="total_banner_en" name="total_banner_en" value=1>
					<input type="hidden" id="total_banner_ar" name="total_banner_ar" value=1>
					<tr>
						<td valign="top" width="20%">
							<label>&nbsp;</span>
						</td> 
						<td style="padding-bottom:15px;">
							<div class="button dredB">   <input type="reset" value="<?php echo __('button_reset'); ?>" title="<?php echo __('button_reset'); ?>" /></div>
							<div class="button greenB">  <input type="submit" value="<?php echo __('submit' );?>" name="submit_modules" title="<?php echo __('submit' );?>" /></div>
						</td>
					</tr>
					</table>
					<div id="inputfields" class="new_input_field"></div>
				</div>
			</form>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
var num = $(".banner_en").length;
$("#total_banner_en").val(num);
var num = $(".banner_ar").length;
$("#total_banner_ar").val(num);
});
	function add_banner_en() {
		var count_banner = $("#total_banner_en").val();
		++count_banner;
		$(".add_banner_en").append('<tr id="banner_row_en_'+count_banner+'"><td></td><div class="new_input_field banner_en"><td><input type="file" class=" imageonly" name="mobile_slider_en_'+count_banner+'" id="banner_slider_en_'+count_banner+'" title="<?php echo __("image_english"); ?>"></td><td><input style="width:7%" type="button" id="drop_button" value="-Drop" onclick="delete_banner_en('+count_banner+');"/></td></div></tr>');
		$("#total_banner_en").val(count_banner);
	}
	function delete_banner_en(rowid) {
        $("#banner_row_en_"+rowid).remove();
        return false;
    }

    function add_banner_ar() {
		var count_banner = $("#total_banner_ar").val();
		++count_banner;
		$(".add_banner_ar").append('<tr id="banner_row_ar_'+count_banner+'"><td></td><div class="new_input_field banner_ar"><td><input type="file" class=" imageonly" name="mobile_slider_ar_'+count_banner+'" id="banner_slider_ar_'+count_banner+'" title="<?php echo __("image_arabic"); ?>"></td><td><input style="width:7%" type="button" id="drop_button" value="-Drop" onclick="delete_banner_ar('+count_banner+');"/></td></div></tr>');
		$("#total_banner_ar").val(count_banner);
	}
	function delete_banner_ar(rowid) {
        $("#banner_row_ar_"+rowid).remove();
        return false;
    }
</script>