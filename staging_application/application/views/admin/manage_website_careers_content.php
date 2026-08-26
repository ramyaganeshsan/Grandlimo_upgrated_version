<?php
defined('SYSPATH') OR die("No direct access allowed.");
//print_r($site_settings);

$home_page = isset($website_content['careers_page'])?$website_content['careers_page']:[];
//print_r($home_page);exit;
?>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery-1.6.3.min.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery.validate.js"></script>
<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle"> 
            <form method="POST" enctype="multipart/form-data" class="form" action="" name="settings" id="settings" >


                <table class="0" cellpadding="5" cellspacing="0" width="85%">
                    <tr>
                        <td valign="top" width="20%"><label>Banner Content </label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="banner_content" id="banner_content" maxlength="1000" value="<?php echo isset($home_page['banner_content']) &&!array_key_exists('banner_content',$postvalue)? trim($home_page['banner_content']):$postvalue['banner_content']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('banner_content',$errors)){ echo "<span class='error'>".ucfirst($errors['banner_content'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Banner Content Arabic </label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="banner_content_arabic" id="banner_content_arabic" maxlength="1000" value="<?php echo isset($home_page['banner_content_arabic']) &&!array_key_exists('banner_content_arabic',$postvalue)? trim($home_page['banner_content_arabic']):$postvalue['banner_content_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('banner_content_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['banner_content_arabic'])."</span>";}?>
                    </tr>

                    <tr>
                        <td valign="top" width="20%"><label>Career</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="career" id="career" maxlength="1000" value="<?php echo isset($home_page['career']) &&!array_key_exists('career',$postvalue)? trim($home_page['career']):$postvalue['career']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('career',$errors)){ echo "<span class='error'>".ucfirst($errors['career'])."</span>";}?>
                    </tr>

                    <tr>
                        <td valign="top" width="20%"><label>Career Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="career_arabic" id="career_arabic" maxlength="1000" value="<?php echo isset($home_page['career_arabic']) &&!array_key_exists('career_arabic',$postvalue)? trim($home_page['career_arabic']):$postvalue['career_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('career_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['career_arabic'])."</span>";}?>
                    </tr>


                    <tr>
                        <td valign="top" width="20%"><label>Career Description</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="career_description" id="career_description" maxlength="1000" value="<?php echo isset($home_page['career_description']) &&!array_key_exists('career_description',$postvalue)? trim($home_page['career_description']):$postvalue['career_description']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('career_description',$errors)){ echo "<span class='error'>".ucfirst($errors['career_description'])."</span>";}?>
                    </tr>

                    <tr>
                        <td valign="top" width="20%"><label>Pricing Description Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="career_description_arabic" id="career_description_arabic" maxlength="1000" value="<?php echo isset($home_page['career_description_arabic']) &&!array_key_exists('career_description_arabic',$postvalue)? trim($home_page['career_description_arabic']):$postvalue['career_description_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('career_description_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['career_description_arabic'])."</span>";}?>
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

