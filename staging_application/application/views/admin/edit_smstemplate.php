<?php defined('SYSPATH') OR die("No direct access allowed."); 
//echo html::script('public/ckeditor/ckeditor.js'); 
?>
<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle">    
         <form name="edit_sms_template" id="edit_sms_template" class="form" action="" method="post" enctype="multipart/form-data">
			<table border="0" cellpadding="5" cellspacing="0" width="100%">
				<tr>
					<td valign="top" width="20%"><label><?php echo __('sms_title'); ?></label><span class="star">*</span></td>
					<td>
						<div class="new_input_field2">
						<label><?php echo ucwords(str_replace('_',' ',$sms_template['sms_title'])); ?></label>
						</div>
					</td>
				</tr>
				<tr>
					<td valign="top" width="20%"><label><?php echo __('sms_message'); ?></label><span class="star">*</span></td>
					<td>
						<div class="new_input_field2">
						<textarea name="sms_description" id="sms_description" title="<?php echo __('sms_message'); ?>" rows="7" cols="35"><?php echo isset($sms_template['sms_description']) || !array_key_exists('sms_description',$postvalue)? trim($sms_template['sms_description']):$postvalue['sms_description'];  ?></textarea>
						<?php if(isset($errors) && array_key_exists('sms_description',$errors)){ echo "<span class='error'>".ucfirst($errors['sms_description'])."</span>";}?>
						</div>
					</td>
				</tr>
				<tr>
					<td valign="top" width="20%"><label><?php echo __('arabic_sms_message'); ?></label><span class="star">*</span></td>
					<td>
						<div class="new_input_field2">
						<textarea name="arabic_sms_description" id="arabic_sms_description" title="<?php echo __('arabic_sms_message'); ?>" rows="7" cols="35"><?php echo isset($sms_template['arabic_sms_description']) || !array_key_exists('arabic_sms_description',$postvalue)? trim($sms_template['arabic_sms_description']):$postvalue['arabic_sms_description'];  ?></textarea>
						<?php if(isset($errors) && array_key_exists('arabic_sms_description',$errors)){ echo "<span class='error'>".ucfirst($errors['arabic_sms_description'])."</span>";}?>
						</div>
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
						<div class="button dredB"><input type="button" value="<?php echo __('button_reset'); ?>" title="<?php echo __('button_reset'); ?>" onclick="resetvalues();" /></div>
						<div class="button greenB"><input type="submit" value="<?php echo __('submit' );?>" name="submit_edit_template" title="<?php echo __('submit' );?>" /></div>
						<div class="clr">&nbsp;</div>
					</td>
				</tr>
            </table>
        </form>
        </div>
        <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt"></div></div>
    </div>
</div>  
<script type="text/javascript">
 $(document).ready(function(){
 $("#sms_description").focus(); 
 toggle(3);
});   
</script>