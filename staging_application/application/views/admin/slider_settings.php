<?php defined('SYSPATH') OR die("No direct access allowed.");
//$tagcount = count($site_info_settings);

$no_image=URL_BASE.'public/images/no-image.png';
?>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery-1.6.3.min.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery.validate.js"></script>
<script type='text/javascript'>
        function addFields(){
            // Number of inputs to create
            var number = document.getElementById("member").value;
            // Container <div> where dynamic content will be placed
            var container = document.getElementById("inputfields");
            // Clear previous contents of the container
            while (container.hasChildNodes()) {
                container.removeChild(container.lastChild);
            }
            if(number<=5){
		    for (i=0;i<number;i++){
			// Append a node with a random text
			container.appendChild(document.createTextNode("Enter site tags description " + (i+1)));
			// Create an <input> element, set its type and name attributes
			var input = document.createElement("input");
			input.type = "text";
			input.name = "member" + i;
			container.appendChild(input);
			// Append a line break 
			container.appendChild(document.createElement("br"));
		    }
		}else
		{
			alert('The total no of tags not greater than 5');
		}
        }
</script>
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
					<?php foreach($array as $key => $value) { ?>				
					<tr>
						<td valign="top" width="20%">
							<label><?php echo __($value); ?></label><span class="star">*</span>
						</td>        
						<td>
						
							<div class="new_input_field">
							<input type="file" class=" imageonly" name="<?php echo $value; ?>" title="<?php echo __($value); ?>" value="<?php if(count($site_settings) >0){ echo isset($site_settings) &&!array_key_exists($value,$postvalue)? trim($site_settings[0][$value]):$postvalue[$value];} ?>">
							<?php if($type == 1) { ?>
								<span><?php echo __('home_image_resolution'); ?></span>
							<?php } ?>
							<?php if($type == 2) { ?>
								<span><?php echo __('mobile_image_resolution'); ?></span>
							<?php } ?>
							<span class="error"><?php echo isset($errors[$value]) ? $errors[$value] : ''; ?></span>
							</div>
							<?php if($type == 1) { $path = HOME_SLIDER_IMGPATH; } else { $path = MOBILE_SLIDER_IMGPATH; } ?>
							<?php if(count($site_settings) >0){
								if(file_exists(DOCROOT.$path.$site_settings[0][$value])){
									$image=URL_BASE.$path.$site_settings[0][$value];
								}else{
									$image=$no_image;
								}
							?>
							<div class="site_logo" style="float: left;width: 100%;">
								<img height="200" width="200" style="max-height:100%;" src="<?php echo $image;?>">
							</div>
							<?php } ?>
						</td>
					</tr>
					<?php } ?>
					
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
<div class="clr">&nbsp;</div>
<script type="text/javascript">
 $(document).ready(function(){

var field_val = $("#member0").val();
$("#member0").focus().val("").val(field_val);
	jQuery("#managerating_form").validate();
	 
	toggle(3);
	//~ $.validator.addMethod( "imageonly", function(value,element){
		//~ var pathLength = value.length; 
		//~ var lastDot = value.lastIndexOf( "."); 
		//~ var fileType = value.substring(lastDot,pathLength).toLowerCase(); 
		//~ return this.optional(element) || fileType.match(/(?:.jpg|.jpeg|.png)$/) 
	//~ }, "Please upload image(jpg,jpeg,png) files only");

});   

</script>
