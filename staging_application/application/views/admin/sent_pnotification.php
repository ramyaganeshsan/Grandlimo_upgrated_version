<?php defined('SYSPATH') OR die("No direct access allowed."); 
//echo html::script('public/ckeditor/ckeditor.js'); 
?>
<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle">    
         <form name="edit_sms_template" id="edit_sms_template" class="form" action="" method="post" enctype="multipart/form-data">
			<table border="0" cellpadding="5" cellspacing="0" width="100%">

				<tr>
					<td valign="top" width="20%"><label><?php echo __('admin_push_title'); ?></label><span class="star">*</span></td>
					<td>
						<div class="new_input_field2" style="width:50%">
						<input type="text"  maxlength="30" minlength="2"  title="Enter push title" placeholder="Enter push title" id="push_title" name="push_title" value="<?php echo isset($post_values['push_title'])?$post_values['push_title']:''; ?>" />
              <?php if(isset($errors) && array_key_exists('push_title',$errors)){ echo "<span class='error'>".ucfirst($errors['push_title'])."</span>";}?>
						</div>
					</td>
				</tr>

				<tr>
					<td valign="top" width="20%"><label><?php echo __('admin_push_sub_title'); ?></label><span class="star">*</span></td>
					<td>
						<div class="new_input_field2" style="width:50%">
						<input type="text"  maxlength="60" minlength="2"  title="Enter push sub title" placeholder="Enter push sub title" id="push_sub_title" name="push_sub_title" value="<?php echo isset($post_values['push_sub_title'])?$post_values['push_sub_title']:''; ?>" />
              <?php if(isset($errors) && array_key_exists('push_sub_title',$errors)){ echo "<span class='error'>".ucfirst($errors['push_sub_title'])."</span>";}?>
						</div>
					</td>
				</tr>

				<tr>
					<td valign="top" width="20%"><label><?php echo __('admin_push_message'); ?></label><span class="star">*</span></td>
					<td>
						<div class="new_input_field2">
						<textarea rows="7" cols="35" style="width: 50% !important;" placeholder="Please enter text within 200 characters" maxlength="200" required name="admin_push_message" id="admin_push_message" title="<?php echo __('sms_message'); ?>" rows="7" cols="35"><?php echo isset($post_values['admin_push_message'])?$post_values['admin_push_message']:'';?></textarea>
						<?php if(isset($errors) && array_key_exists('admin_push_message',$errors)){ echo "<span class='error'>".ucfirst($errors['admin_push_message'])."</span>";}?>
						</div>
					</td>
				</tr>

				<tr>
					<td valign="top" width="20%"><label><?php echo __('Code'); ?></label></td>
					<td>
						<div class="new_input_field2" style="width:50%">
						<input type="text"  maxlength="60" minlength="2"  title="Enter the promocode" placeholder="Enter promocode (optional)" id="code" name="code" value="<?php echo isset($post_values['code'])?$post_values['code']:''; ?>" />
              				<?php if(isset($errors) && array_key_exists('code',$errors)){ echo "<span class='error'>".ucfirst($errors['code'])."</span>";}?>
						</div>
					</td>
				</tr>
				
				<tr>
					<td valign="top" width="20%"><label><?php echo __('image'); ?> ( 1030 * 512 )</label><span class="star">*</span></td>
					<td>
						<div class="new_input_field2">
						<input type="file" name="notification_image" accept="image/*">						
						<?php if(isset($errors) && array_key_exists('notification_image',$errors)){ echo "<span class='error'>".ucfirst($errors['notification_image'])."</span>";}?>
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
