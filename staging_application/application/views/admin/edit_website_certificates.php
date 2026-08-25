<?php
defined('SYSPATH') OR die("No direct access allowed.");
//print_r($site_settings);

$home_page = isset($website_content['home_page'])?$website_content['home_page']:array();

$website_certificate = isset($website_certificates[0])?$website_certificates[0]:array();
//print_r($website_certificates);exit;
?>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery-1.6.3.min.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery.validate.js"></script>
<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle"> 
            <form method="POST" enctype="multipart/form-data" class="form" action="" name="settings" id="settings" >


                <table class="0" cellpadding="5" cellspacing="0" width="85%">
                    <tr>
                        <td valign="top" width="20%"><label>Certificate name</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="certificate_name" id="certificate_name" maxlength="1000" value="<?php echo isset($website_certificate['certificate_name']) &&!array_key_exists('certificate_name',$postvalue)? trim($website_certificate['certificate_name']):$postvalue['certificate_name']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('certificate_name',$errors)){ echo "<span class='error'>".ucfirst($errors['certificate_name'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Certificate name arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="certificate_name_arabic" id="certificate_name_arabic" maxlength="1000" value="<?php echo isset($website_certificate['certificate_name_arabic']) &&!array_key_exists('certificate_name_arabic',$postvalue)? trim($website_certificate['certificate_name_arabic']):$postvalue['certificate_name_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('certificate_name_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['certificate_name_arabic'])."</span>";}?>
                    </tr>

                    <tr>
                        <td valign="top" width="20%"><label>Certificate Description</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><textarea type="text" name="certificate_description" id="certificate_description" rows="7" cols="35" style="resize:none;"><?php echo isset($website_certificate['certificate_description']) && (!array_key_exists('certificate_description', $errors)) ? trim($website_certificate['certificate_description']) : trim($validator['certificate_description']); ?></textarea></div>
                            <span class="error"><?php echo isset($errors['certificate_description']) ? $errors['certificate_description'] : ''; ?></span>
                        </td>

                    </tr> 

                     <tr>
                        <td valign="top" width="20%"><label>Certificate Description Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><textarea type="text" name="certificate_description_arabic" id="certificate_description_arabic" rows="7" cols="35" style="resize:none;"><?php echo isset($website_certificate['certificate_description_arabic']) && (!array_key_exists('certificate_description_arabic', $errors)) ? trim($website_certificate['certificate_description_arabic']) : trim($validator['certificate_description_arabic']); ?></textarea></div>
                            <span class="error"><?php echo isset($errors['certificate_description_arabic']) ? $errors['certificate_description_arabic'] : ''; ?></span>
                        </td>
                    </tr>

                    <tr>
                        <td><label><?php echo __('website_photo_label'); ?> (380 * 341) </label></td>
                        <td>
                            <?php if(!empty($website_certificate['image']) && file_exists(DOCROOT.'public/uploads/certificates/'.$website_certificate['image'])){ ?>
                                <input type="hidden" name="web_image_old" value="<?php echo $website_certificate['image']; ?>" />
                                    <img src="<?php echo URL_BASE.'public/uploads/certificates/'.$website_certificate['image'];?>" height="140px" width="140px" class="img-polaroid">
                                <?php }else{ ?>
                                    <img height="140px" width="140px" src="<?php echo URL_BASE;?>public/uploads/driver_image/no-image.jpg" class="img-polaroid">
                                    <input type="hidden" name="web_image_old" value=""/>
                            <?php } ?>
                        </td>
                    </tr>

                    <tr>
                        <td valign="top" width="20%"><label></td>        
                        <td>
                        <div class="new_input_field">
                                  <input type="file" title="<?php echo __('profile_image_content'); ?>" id="website_photo" name="website_photo" value="<?php if(isset($postvalue) && array_key_exists('website_photo',$postvalue)){ echo $postvalue['website_photo']; }?>"  accept="image/*" />
                                  <?php if(isset($errors) && array_key_exists('website_photo',$errors)){ echo "<span class='error'>".__('Errors.website_photo.Upload::type')."</span>";}?>                  
                        </div>
                        </td>       
                    </tr>

                    <?php 
                        if(isset($website_certificate['status']) && $website_certificate['status'] ==1 ){
                            $web_status = 'checked';
                        }else{
                            $web_status = '';
                        }

                    ?>
                    <tr>
                    <td valign="top" width="20%"><label><?php echo __('website_show'); ?></label><span class="star"></span></td>        
                    <td>
                    <div class="new_input_field">
                             <input type="checkbox" id="website_show" name="website_show" value="1" <?php echo $web_status; ?>>
                    </div>
                    </td>       
                    </tr>


                    
                    <tr>
						<td>&nbsp;</td>
                        <td colspan="" class="star">*<?php echo __('required_label'); ?></td>
                    </tr>
                    
                    <tr>
                        <td valign="top">&nbsp;</td>
                        <td style="padding-left:0px;">
                            <div class="button dredB"> <input type="reset" name="editsettings_reset" title="<?php echo __('button_reset'); ?>" value="<?php echo __('button_reset'); ?>"></div>
                            <div class="button greenB">  <input type="submit" name="editsettings_submit" title ="<?php echo __('button_update'); ?>" value="<?php echo __('button_update'); ?>"></div>
                            <?php /*<div class="button greenB">  <input type="submit" name="editsettings_submit" <?php if($email==SUPERADMIN_EMAIL) { ?> id="disable" <?php } ?> title ="<?php echo __('button_update'); ?>" value="<?php echo __('button_update'); ?>"></div> */ ?>

                        </td>
					</tr>
                </table>
            </form>
        </div>
        <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt" ></div></div>
    </div>
</div>

