<?php defined('SYSPATH') OR die("No direct access allowed."); 
//echo html::script('public/ckeditor/ckeditor.js'); 
?>
<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle">    
         <form name="add_careers" id="add_careers" class="form" action="" method="post" enctype="multipart/form-data">
			<table border="0" cellpadding="5" cellspacing="0" width="100%">
				

				<tr>
					<td valign="top" width="20%"><label><?php echo __('title'); ?></label><span class="star">*</span></td>
					<td>
						<div class="new_input_field">
						<input type="text" style="width: 217% !important;" placeholder="Please enter title " maxlength="400" required name="title" id="title" title="<?php echo __('description'); ?>" value="<?php if(isset($postvalue['title'])){ echo $postvalue['title'];}?>">
						<?php if(isset($errors) && array_key_exists('title',$errors)){ echo "<span class='error'>".ucfirst($errors['title'])."</span>";}?>
						</div>
					</td>
				</tr>

				<tr>
					<td valign="top" width="20%"><label><?php echo __('title_ar'); ?></label><span class="star">*</span></td>
					<td>
						<div class="new_input_field">
						<input type="text" style="width: 217% !important;" placeholder="Please enter title arabic" maxlength="400" required name="title_ar" id="title" title="<?php echo __('title_ar'); ?>" value="<?php if(isset($postvalue['title_ar'])){ echo $postvalue['title_ar'];}?>">
						<?php if(isset($errors) && array_key_exists('title_ar',$errors)){ echo "<span class='error'>".ucfirst($errors['title_ar'])."</span>";}?>
						</div>
					</td>
				</tr>

				<tr>
					<td valign="top" width="20%"><label><?php echo __('description'); ?></label><span class="star">*</span></td>
					<td>
						<div class="new_input_field2">
						<textarea style="width: 50% !important;" placeholder="Please enter description " maxlength="500" required name="description" id="description" title="<?php echo __('description'); ?>" rows="7" cols="35"></textarea>
						<?php if(isset($errors) && array_key_exists('description',$errors)){ echo "<span class='error'>".ucfirst($errors['description'])."</span>";}?>
						</div>
					</td>
				</tr>

				<tr>
					<td valign="top" width="20%"><label><?php echo __('description_ar'); ?></label><span class="star">*</span></td>
					<td>
						<div class="new_input_field2">
						<textarea style="width: 50% !important;" placeholder="Please enter description arabic" maxlength="200" required name="description_ar" id="description_ar" title="<?php echo __('description_ar'); ?>" rows="7" cols="35"></textarea>
						<?php if(isset($errors) && array_key_exists('description_ar',$errors)){ echo "<span class='error'>".ucfirst($errors['description_ar'])."</span>";}?>
						</div>
					</td>
				</tr>

				<?php 
				if(isset($postvalue['status']) && $postvalue['status']=='A')
				{
					$status  = 1;
				}
				else
				{
					$status = 0;
				}
				?>

				<tr>
					<td valign="top" width="20%"><label><?php echo __('status'); ?></label></td>        
					   <td>
					   <div class="new_input_field">	
			              <input type="checkbox" id="status" name="status" <?php if($status == 1){ echo "checked"; } ?> value="1" />
			              <?php if(isset($errors) && array_key_exists('status',$errors)){ echo "<span class='error'>".ucfirst($errors['status'])."</span>";}?>
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
						<div class="button greenB"><input type="submit" value="<?php echo __('submit' );?>" name="submit_addcareer" title="<?php echo __('submit' );?>" /></div>
						<div class="clr">&nbsp;</div>
					</td>
				</tr>
            </table>
        </form>
        </div>
        <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt"></div></div>
    </div>
</div>
