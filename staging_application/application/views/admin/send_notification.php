<?php defined('SYSPATH') OR die("No direct access allowed."); 
//echo html::script('public/ckeditor/ckeditor.js'); 
?>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery-1.6.3.min.js"></script>
<link rel="stylesheet" href="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/css/ui-lightness/jquery-ui-1.8.11.custom.css" />
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/js/jquery-1.5.1.min.js"></script>
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/js/jquery-ui-1.8.11.custom.min.js"></script>
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-timepicker-addon.js"></script>
<style>
.slider {
	float: left;
    border: 1px solid #ccc;
    padding: 5px;
    height: 262px;
    width: 100%; 
    overflow: auto;
}
.slider img {
	margin : 7px 10px 7px 15px;
	cursor: pointer;
}
.slider p {
    background: #111;
    padding: 5px;
    color: #fff;
    font-size: 14px;
    opacity: 0.3;
    position: relative;
    top: 150px;
    left: 15px;
    float: left;
    width: 81%;
    text-align: center;
    font-family: sans-serif;
    cursor: pointer;
    font-weight: bold;
    z-index: 9999;
}
.slider_div {
	float:left;
	width:25%;	
	margin-top: -30px;
}
.slider span:before {
 	content: '\2713';
    display: inline-block;
    color: #fff;
    padding: 2px 3px 2px 3px;
    position: relative;
    top: 25px;
    background: #111;
    border-radius: 30px;
    font-size: 22px;
    font-weight: bold;
    opacity: 0.5;
 }

</style>
<script type="text/javascript">
	$(document).ready(function() {
		$(".geeks").click(function(){
			$(".tick").remove();
			$(this).find('.banner_title').after('<span class="tick"></span>');
			var template = $(this).attr('data-id');
			$("#template").val(template);
		});

		$('#start_date, #expire_date').datepicker({
			dateFormat: 'yy-mm-dd',			
			changeMonth: true,
			changeYear: true,
			yearRange: new Date().getFullYear()+':+100',
			minDate: 0,
			maxDate: new Date(2100, 1,18)
		});
	});

</script>
<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle">    
         <form name="edit_sms_template" id="edit_sms_template" class="form" action="" method="post" enctype="multipart/form-data">
			<table border="0" cellpadding="5" cellspacing="0" width="100%">

				<tr>
					<td valign="top" width="20%"><label><?php echo __('Title'); ?></label><span class="star">*</span></td>
					<td>
						<div class="new_input_field2" style="width:50%">
						<input type="text"  maxlength="30" minlength="2"  title="Enter Title" placeholder="Enter Title" id="title" name="title" value="<?php echo isset($post_values['title'])?$post_values['title']:''; ?>" />
              <?php if(isset($errors) && array_key_exists('title',$errors)){ echo "<span class='error'>".ucfirst($errors['title'])."</span>";}?>
						</div>
					</td>
				</tr>

				<tr>
					<td valign="top" width="20%"><label><?php echo __('Sub Title'); ?></label><span class="star">*</span></td>
					<td>
						<div class="new_input_field2" style="width:50%">
						<input type="text"  maxlength="30" minlength="2"  title="Enter Sub Title" placeholder="Enter Sub Title" id="sub_title" name="sub_title" value="<?php echo isset($post_values['sub_title'])?$post_values['sub_title']:''; ?>" />
              <?php if(isset($errors) && array_key_exists('sub_title',$errors)){ echo "<span class='error'>".ucfirst($errors['sub_title'])."</span>";}?>
						</div>
					</td>
				</tr>

				<tr>
					<td valign="top" width="20%"><label><?php echo __('Content'); ?></label><span class="star">*</span></td>
					<td>
						<div class="new_input_field2">
						<textarea rows="7" cols="35" style="width: 50% !important;" placeholder="Please enter text within 700 characters" maxlength="700" name="content" id="admin_push_message" title="<?php echo __('sms_message'); ?>" rows="7" cols="35"><?php echo isset($post_values['content'])?$post_values['content']:'';?></textarea>
						<?php if(isset($errors) && array_key_exists('content',$errors)){ echo "<span class='error'>".ucfirst($errors['content'])."</span>";}?>
						</div>
					</td>
				</tr>

				<tr>
    <td valign="top" width="20%"><label><?php echo __('Title Arabic'); ?></label><span class="star">*</span></td>
    <td>
        <div class="new_input_field2" style="width:50%">
        <input type="text"  maxlength="30" minlength="2"  title="Enter Title Arabic" placeholder="Enter Title Arabic" id="title_arabic" name="title_arabic" value="<?php echo isset($post_values['title_arabic'])?$post_values['title_arabic']:''; ?>" />
        <?php if(isset($errors) && array_key_exists('title_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['title_arabic'])."</span>";}?>
        </div>
    </td>
</tr>

<tr>
    <td valign="top" width="20%"><label><?php echo __('Sub Title Arabic'); ?></label><span class="star">*</span></td>
    <td>
        <div class="new_input_field2" style="width:50%">
        <input type="text"  maxlength="30" minlength="2"  title="Enter Sub Title Arabic" placeholder="Enter Sub Title Arabic" id="sub_title_arabic" name="sub_title_arabic" value="<?php echo isset($post_values['sub_title_arabic'])?$post_values['sub_title_arabic']:''; ?>" />
        <?php if(isset($errors) && array_key_exists('sub_title_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['sub_title_arabic'])."</span>";}?>
        </div>
    </td>
</tr>

<tr>
    <td valign="top" width="20%"><label><?php echo __('Content Arabic'); ?></label><span class="star">*</span></td>
    <td>
        <div class="new_input_field2">
        <textarea rows="7" cols="35" style="width: 50% !important;" placeholder="Please enter Arabic content within 700 characters" maxlength="700" name="content_arabic" id="content_arabic" title="<?php echo __('sms_message_arabic'); ?>" rows="7" cols="35"><?php echo isset($post_values['content_arabic'])?$post_values['content_arabic']:'';?></textarea>
        <?php if(isset($errors) && array_key_exists('content_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['content_arabic'])."</span>";}?>
        </div>
    </td>
</tr>

				
				<tr>
					<td valign="top" width="20%"><label><?php echo __('Select Template'); ?></label><span class="star">*</span></td>
					<td>
						<div class="new_input_field2">
						<div class="slider">	
						<?php 
							$dir = "/var/www/html/public/uploads/notification_image/banner/320*480/";

							if ($handle = opendir($dir)) {
							 
							    while (false !== ($entry = readdir($handle))) {
							        $files[] = $entry;
							    }
							    $images = preg_grep('/\.png$/i', $files);
							    sort($images);
								
								foreach($images as $image)
							    {
							      echo '<div class="slider_div geeks" data-id="'.$image.'">';	
							      echo '<p class="banner_title">Template - '.str_replace(".png","",$image).'</p>';							      
							      echo '<img name="notification_image" src="'.URL_BASE.'/public/uploads/notification_image/banner/320*480/'.$image.'" width="170" height="200" value="'.$image.'"/>'; // List all Images							      
							      echo '</div>';
							    }

							    closedir($handle);
							}							
						?>	
						<input type="hidden" name="template" id="template" value="" />
						</div>						
						<span>Click to Select Template</span>
						<?php if(isset($errors) && array_key_exists('template',$errors)){ echo "<span class='error'>".ucfirst($errors['template'])."</span>";}?>
						</div>
					</td>
				</tr>	

				<tr>
					<td valign="top" width="20%"><label><?php echo __('Start Date'); ?></label><span class="star">*</span></td>
					<td>
						<div class="new_input_field2" style="width:50%">
						<input type="text" readonly="readonly" title="Select Start Date"  id="start_date" name="start_date" value="<?php echo isset($post_values['start_date'])?$post_values['start_date']:''; ?>" />
              <?php if(isset($errors) && array_key_exists('start_date',$errors)){ echo "<span class='error'>".ucfirst($errors['start_date'])."</span>";}?>
						</div>
					</td>
				</tr>

				<tr>
					<td valign="top" width="20%"><label><?php echo __('Expire Date'); ?></label><span class="star">*</span></td>
					<td>
						<div class="new_input_field2" style="width:50%">
						<input type="text" readonly="readonly" title="Select Expire Date"  id="expire_date" name="expire_date" value="<?php echo isset($post_values['expire_date'])?$post_values['expire_date']:''; ?>" />
              <?php if(isset($errors) && array_key_exists('expire_date',$errors)){ echo "<span class='error'>".ucfirst($errors['expire_date'])."</span>";}?>
						</div>
					</td>
				</tr>

				<tr>
					<td valign="top" width="20%"><label><?php echo __('image'); ?> ( 1030 * 512 )</label></td>
					<td>
						<div class="new_input_field2">
						<input type="file" name="notification_image" accept="image/*">						
						<?php if(isset($errors) && array_key_exists('notification_image',$errors)){ echo "<span class='error'>".ucfirst($errors['notification_image'])."</span>";}?>
						</div>
					</td>
				</tr>	

				<td valign="top" width="20%"><label><?php echo __('image_only'); ?></label></td>
                <td>
                  <div class="new_input_field new_input_field_source_location" >
                      <input id="image_only" name="image_only" class="controls" value="1" type="checkbox" />                      
                </td>
            </tr>

				
				<tr>
					<td>&nbsp;</td>
					<td colspan="" class="star">*<?php echo __('required_label'); ?></td>
				</tr>                         
				<tr>
					<td>&nbsp;</td>
					<td colspan="">
						<div class="button blackB"><input type="button" value="<?php echo __('button_back'); ?>" onclick="window.history.go(-1)" /></div>
						<div class="button dredB"><input type="reset" value="<?php echo __('button_reset'); ?>" title="<?php echo __('button_reset'); ?>" /></div>
						<div class="button greenB"><input type="submit" value="<?php echo __('submit' );?>" name="submit_admin_pnotification" title="<?php echo __('submit' );?>" /></div>
						<div class="clr">&nbsp;</div>
					</td>
				</tr>
            </table>
        </form>
        </div>
        <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt"></div></div>
    </div>
</div>
