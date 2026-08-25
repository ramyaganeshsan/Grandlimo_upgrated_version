<?php defined('SYSPATH') OR die("No direct access allowed."); 
//echo html::script('public/ckeditor/ckeditor.js'); 
?>
<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle">    
         <form name="edit_sms_template" id="edit_sms_template" class="form" action="" method="post" enctype="multipart/form-data">
			<table border="0" cellpadding="5" cellspacing="0" width="100%">

				<tr>
					<td valign="top" width="20%"><label><?php echo __('Name'); ?></label><span class="star">*</span></td>
					<td>
						<div class="new_input_field2" style="width:50%">
						<input type="hidden" name="id" value="<?php echo $testimonial_details['_id'];?>"/>
						<input type="text"  maxlength="30" minlength="2"  title="Enter the name" placeholder="Enter the name" name="name" value="<?php echo isset($testimonial_details['name'])?$testimonial_details['name']:''; ?>" required/>
              <?php if(isset($errors) && array_key_exists('name',$errors)){ echo "<span class='error'>".ucfirst($errors['name'])."</span>";}?>
						</div>
					</td>
				</tr>

				<tr>
					<td valign="top" width="20%"><label>Skype or Email</label><span class="star">*</span></td>
					<td>
						<div class="new_input_field2" style="width:50%">
						<input type="text"  maxlength="30" minlength="2"  title="Enter skype detail" placeholder="Enter skype detail" id="skype" name="skype" value="<?php echo isset($testimonial_details['skype'])?$testimonial_details['skype']:''; ?>" required/>
              <?php if(isset($errors) && array_key_exists('skype',$errors)){ echo "<span class='error'>".ucfirst($errors['skype'])."</span>";}?>
						</div>
					</td>
				</tr>
				
				<tr>
					<td valign="top" width="20%"><label>Description</label><span class="star">*</span></td>
					<td>
						<div class="new_input_field2">
						<textarea rows="7" cols="35" style="width: 50% !important;" placeholder="Please enter text within 200 characters" maxlength="200" required name="description" id="description" rows="7" cols="35"><?php echo isset($testimonial_details['description'])?$testimonial_details['description']:'';?></textarea>
						<?php if(isset($errors) && array_key_exists('description',$errors)){ echo "<span class='error'>".ucfirst($errors['description'])."</span>";}?>
						</div>
					</td>
				</tr>

				<tr>
					<td valign="top" width="20%"><label>Description Arabic</label><span class="star">*</span></td>
					<td>
						<div class="new_input_field2">
						<textarea rows="7" cols="35" style="width: 50% !important;" placeholder="Please enter text within 200 characters" maxlength="200" required name="description_arabic" id="description_arabic" rows="7" cols="35"><?php echo isset($testimonial_details['description_arabic'])?$testimonial_details['description_arabic']:'';?></textarea>
						<?php if(isset($errors) && array_key_exists('description_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['description_arabic'])."</span>";}?>
						</div>
					</td>
				</tr>

				<tr>
					<td><label><?php echo __('image'); ?> (380 * 341) </label></td>
					<td>
						<?php if(!empty($testimonial_details['image']) && file_exists(DOCROOT.'public/uploads/testimonial/'.$testimonial_details['image'])){ ?>
							<input type="hidden" name="web_image_old" value="<?php echo $testimonial_details['image']; ?>" />
								<img src="<?php echo URL_BASE.'public/uploads/testimonial/'.$testimonial_details['image'];?>" height="140px" width="140px" class="img-polaroid">
							<?php }else{ ?>
								<img height="140px" width="140px" src="<?php echo URL_BASE;?>public/uploads/driver_image/no-image.jpg" class="img-polaroid">
								<input type="hidden" name="web_image_old" value=""/>
						<?php } ?>
					</td>
				</tr>


				<tr>
					<td valign="top" width="20%"><label></td>
					<td>
						<div class="new_input_field2">
						<input type="file" name="image" accept="image/*">						
						<?php if(isset($errors) && array_key_exists('image',$errors)){ echo "<span class='error'>".ucfirst($errors['image'])."</span>";}?>
						</div>
					</td>
				</tr>

			<?php 
				if(isset($testimonial_details['status']) && $testimonial_details['status'] ==1 ){
					$status = 'checked';
				}else{
					$status = '';
				}

			?>
			<tr>
			<td valign="top" width="20%"><label><?php echo __('status'); ?></label><span class="star"></span></td>        
			<td>
			<div class="new_input_field">
		             <input type="checkbox" id="status" name="status" value="1" <?php echo $status; ?>>
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
