<?php
defined('SYSPATH') OR die("No direct access allowed.");
//print_r($site_settings);

$home_page = isset($website_content['home_page'])?$website_content['home_page']:array();
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
                        <td valign="top" width="20%"><label>Vehicle type </label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="vehicle_type" id="vehicle_type" maxlength="1000" value="<?php echo isset($home_page['vehicle_type']) &&!array_key_exists('vehicle_type',$postvalue)? trim($home_page['vehicle_type']):$postvalue['vehicle_type']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('vehicle_type',$errors)){ echo "<span class='error'>".ucfirst($errors['vehicle_type'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Vehicle type Arabic </label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="vehicle_type_arabic" id="vehicle_type_arabic" maxlength="1000" value="<?php echo isset($home_page['vehicle_type_arabic']) &&!array_key_exists('vehicle_type_arabic',$postvalue)? trim($home_page['vehicle_type_arabic']):$postvalue['vehicle_type_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('vehicle_type_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['vehicle_type_arabic'])."</span>";}?>
                    </tr>

                    <tr>
                        <td valign="top" width="20%"><label>Vehicle Description</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><textarea type="text" name="vehicle_description" id="vehicle_description" rows="7" cols="35" style="resize:none;"><?php echo isset($home_page['vehicle_description']) && (!array_key_exists('vehicle_description', $errors)) ? trim($home_page['vehicle_description']) : trim($validator['vehicle_description']); ?></textarea></div>
                            <span class="error"><?php echo isset($errors['vehicle_description']) ? $errors['vehicle_description'] : ''; ?></span>
                        </td>

                    </tr> 

                     <tr>
                        <td valign="top" width="20%"><label>Vehicle Description Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><textarea type="text" name="vehicle_description_arabic" id="vehicle_description_arabic" rows="7" cols="35" style="resize:none;"><?php echo isset($home_page['vehicle_description_arabic']) && (!array_key_exists('vehicle_description_arabic', $errors)) ? trim($home_page['vehicle_description_arabic']) : trim($validator['vehicle_description_arabic']); ?></textarea></div>
                            <span class="error"><?php echo isset($errors['vehicle_description_arabic']) ? $errors['vehicle_description_arabic'] : ''; ?></span>
                        </td>
                    </tr>

                    <tr>
                        <td valign="top" width="20%"><label>Meet our driver</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="meet_driver" id="meet_driver" maxlength="1000" value="<?php echo isset($home_page['meet_driver']) &&!array_key_exists('meet_driver',$postvalue)? trim($home_page['meet_driver']):$postvalue['meet_driver']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('meet_driver',$errors)){ echo "<span class='error'>".ucfirst($errors['meet_driver'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Meet our driver Arabic </label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="meet_driver_arabic" id="meet_driver_arabic" maxlength="1000" value="<?php echo isset($home_page['meet_driver_arabic']) &&!array_key_exists('meet_driver_arabic',$postvalue)? trim($home_page['meet_driver_arabic']):$postvalue['meet_driver_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('meet_driver_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['meet_driver_arabic'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Meet our driver Description</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="meet_driver_description" id="meet_driver_description" maxlength="1000" value="<?php echo isset($home_page['meet_driver_description']) &&!array_key_exists('meet_driver_description',$postvalue)? trim($home_page['meet_driver_description']):$postvalue['meet_driver_description']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('meet_driver_description',$errors)){ echo "<span class='error'>".ucfirst($errors['meet_driver_description'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Meet our driver Description Arabic </label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="meet_driver_description_arabic" id="meet_driver_description_arabic" maxlength="1000" value="<?php echo isset($home_page['meet_driver_description_arabic']) &&!array_key_exists('meet_driver_description_arabic',$postvalue)? trim($home_page['meet_driver_description_arabic']):$postvalue['meet_driver_description_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('meet_driver_description_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['meet_driver_description_arabic'])."</span>";}?>
                    </tr>


                     <tr>
                        <td valign="top" width="20%"><label>Banner title</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="banner_title" id="banner_title" maxlength="1000" value="<?php echo isset($home_page['banner_title']) &&!array_key_exists('banner_title',$postvalue)? trim($home_page['banner_title']):$postvalue['banner_title']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('banner_title',$errors)){ echo "<span class='error'>".ucfirst($errors['banner_title'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Banner title Arabic </label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="banner_title_arabic" id="banner_title_arabic" maxlength="1000" value="<?php echo isset($home_page['banner_title_arabic']) &&!array_key_exists('banner_title_arabic',$postvalue)? trim($home_page['banner_title_arabic']):$postvalue['banner_title_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('banner_title_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['banner_title_arabic'])."</span>";}?>
                    </tr>

                    <tr>
                        <td valign="top" width="20%"><label>Banner Description</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="banner_description" id="banner_description" maxlength="1000" value="<?php echo isset($home_page['banner_description']) &&!array_key_exists('banner_description',$postvalue)? trim($home_page['banner_description']):$postvalue['banner_description']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('banner_description',$errors)){ echo "<span class='error'>".ucfirst($errors['banner_description'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Banner Description Arabic </label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="banner_description_arabic" id="banner_description_arabic" maxlength="1000" value="<?php echo isset($home_page['banner_description_arabic']) &&!array_key_exists('banner_description_arabic',$postvalue)? trim($home_page['banner_description_arabic']):$postvalue['banner_description_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('banner_description_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['banner_description_arabic'])."</span>";}?>
                    </tr>

                    <tr>
                        <td valign="top" width="20%"><label>Pick at spot</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="pick_at_title" id="pick_at_title" maxlength="1000" value="<?php echo isset($home_page['pick_at_title']) &&!array_key_exists('pick_at_title',$postvalue)? trim($home_page['pick_at_title']):$postvalue['pick_at_title']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('pick_at_title',$errors)){ echo "<span class='error'>".ucfirst($errors['pick_at_title'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Pick at spot Arabic </label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="pick_at_title_arabic" id="pick_at_title_arabic" maxlength="1000" value="<?php echo isset($home_page['pick_at_title_arabic']) &&!array_key_exists('pick_at_title_arabic',$postvalue)? trim($home_page['pick_at_title_arabic']):$postvalue['pick_at_title_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('pick_at_title_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['pick_at_title_arabic'])."</span>";}?>
                    </tr>

                    <tr>
                        <td valign="top" width="20%"><label>Pick at spot description</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="pick_at_description" id="pick_at_description" maxlength="1000" value="<?php echo isset($home_page['pick_at_description']) &&!array_key_exists('pick_at_description',$postvalue)? trim($home_page['pick_at_description']):$postvalue['pick_at_description']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('pick_at_description',$errors)){ echo "<span class='error'>".ucfirst($errors['pick_at_description'])."</span>";}?>
                    </tr>

                    <tr>
                        <td valign="top" width="20%"><label>Pick at spot description arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="pick_at_description_arabic" id="pick_at_description_arabic" maxlength="1000" value="<?php echo isset($home_page['pick_at_description_arabic']) &&!array_key_exists('pick_at_description_arabic',$postvalue)? trim($home_page['pick_at_description_arabic']):$postvalue['pick_at_description_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('pick_at_description_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['pick_at_description_arabic'])."</span>";}?>
                    </tr>

                    <tr>
                        <td valign="top" width="20%"><label>Card Payment</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="card_payment" id="card_payment" maxlength="1000" value="<?php echo isset($home_page['card_payment']) &&!array_key_exists('card_payment',$postvalue)? trim($home_page['card_payment']):$postvalue['card_payment']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('card_payment',$errors)){ echo "<span class='error'>".ucfirst($errors['card_payment'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Card Payment Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="card_payment_arabic" id="card_payment_arabic" maxlength="1000" value="<?php echo isset($home_page['card_payment_arabic']) &&!array_key_exists('card_payment_arabic',$postvalue)? trim($home_page['card_payment_arabic']):$postvalue['card_payment_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('card_payment_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['card_payment_arabic'])."</span>";}?>
                    </tr>


                    <tr>
                        <td valign="top" width="20%"><label>Card Description</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="card_description" id="card_description" maxlength="1000" value="<?php echo isset($home_page['card_description']) &&!array_key_exists('card_description',$postvalue)? trim($home_page['card_description']):$postvalue['card_description']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('card_description',$errors)){ echo "<span class='error'>".ucfirst($errors['card_description'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Card Description Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="card_description_arabic" id="card_description_arabic" maxlength="1000" value="<?php echo isset($home_page['card_description_arabic']) &&!array_key_exists('card_description_arabic',$postvalue)? trim($home_page['card_description_arabic']):$postvalue['card_description_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('card_description_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['card_description_arabic'])."</span>";}?>
                    </tr>

                    
                    <tr>
                        <td valign="top" width="20%"><label>Secure title</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="secure_title" id="secure_title" maxlength="1000" value="<?php echo isset($home_page['secure_title']) &&!array_key_exists('secure_title',$postvalue)? trim($home_page['secure_title']):$postvalue['secure_title']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('secure_title',$errors)){ echo "<span class='error'>".ucfirst($errors['secure_title'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Secure title Arabic </label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="secure_title_arabic" id="secure_title_arabic" maxlength="1000" value="<?php echo isset($home_page['secure_title_arabic']) &&!array_key_exists('secure_title_arabic',$postvalue)? trim($home_page['secure_title_arabic']):$postvalue['secure_title_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('secure_title_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['secure_title_arabic'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Secure Description</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="secure_description" id="secure_description" maxlength="1000" value="<?php echo isset($home_page['secure_description']) &&!array_key_exists('secure_description',$postvalue)? trim($home_page['secure_description']):$postvalue['secure_description']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('secure_description',$errors)){ echo "<span class='error'>".ucfirst($errors['secure_description'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Secure Description Arabic </label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="secure_description_arabic" id="secure_description_arabic" maxlength="1000" value="<?php echo isset($home_page['secure_description_arabic']) &&!array_key_exists('secure_description_arabic',$postvalue)? trim($home_page['secure_description_arabic']):$postvalue['secure_description_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('secure_description_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['secure_description_arabic'])."</span>";}?>
                    </tr>


                    <tr>
                        <td valign="top" width="20%"><label>Address one</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="address" id="address"  title="<?php echo __('enter_phone_number'); ?>" maxlength="100" value="<?php echo ADDRESS_ONE; ?>"></div>
                            <span class="error"><?php echo isset($errors['address']) ? $errors['address'] : ''; ?></span></td>
                    </tr> 

                     <tr>
                        <td valign="top" width="20%"><label>Address one Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="address_arabic" id="address_arabic" maxlength="100" value="<?php echo ADDRESS_ONE_ARABIC; ?>"></div>
                            <span class="error"><?php echo isset($errors['address_arabic']) ? $errors['address_arabic'] : ''; ?></span></td>
                    </tr> 

                     <tr>
                        <td valign="top" width="20%"><label>Address two</label><span class="star"></span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="address_two" id="address_two" maxlength="100" value="<?php echo ADDRESS_TWO; ?>"></div>
                            <span class="error"><?php echo isset($errors['address_two']) ? $errors['address_two'] : ''; ?></span></td>
                    </tr> 

                     <tr>
                        <td valign="top" width="20%"><label>Address two Arabic</label><span class="star"></span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="address_two_arabic" id="address_two_arabic" maxlength="100" value="<?php echo ADDRESS_TWO_ARABIC; ?>"></div>
                            <span class="error"><?php echo isset($errors['address_two_arabic']) ? $errors['address_two_arabic'] : ''; ?></span></td>
                    </tr>                  

                    <tr>
                        <td valign="top" width="20%"><label>Country </label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="country" id="country" maxlength="100" value="<?php echo WEB_COUNTRY; ?>"></div>
                            <span class="error"><?php echo isset($errors['country']) ? $errors['country'] : ''; ?></span></td>
                    </tr>

                    <tr>
                        <td valign="top" width="20%"><label>Country Arabic </label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="country_arabic" id="country_arabic" maxlength="100" value="<?php echo WEB_COUNTRY_ARABIC; ?>"></div>
                            <span class="error"><?php echo isset($errors['country_arabic']) ? $errors['country_arabic'] : ''; ?></span></td>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Contact Number</label><span class="star"></span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="web_phone" id="web_phone" maxlength="100" value="<?php echo WEB_PHONE; ?>"></div>
                            <span class="error"><?php echo isset($errors['web_phone']) ? $errors['web_phone'] : ''; ?></span></td>
                    </tr> 

                     <tr>
                        <td valign="top" width="20%"><label>Contact Email</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="web_email_contact" id="web_email_contact" maxlength="100" value="<?php echo WEB_EMAIL_CONTACT; ?>"></div>
                            <span class="error"><?php echo isset($errors['web_email_contact']) ? $errors['web_email_contact'] : ''; ?></span></td>
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

