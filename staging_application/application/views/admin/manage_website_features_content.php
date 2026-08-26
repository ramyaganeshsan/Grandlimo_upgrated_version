<?php
defined('SYSPATH') OR die("No direct access allowed.");
//print_r($site_settings);

$home_page = isset($website_content['features_page'])?$website_content['features_page']:[];
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
                        <td valign="top" width="20%"><label>Feature name </label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="feature_title" id="feature_title" maxlength="1000" value="<?php echo isset($home_page['feature_title']) &&!array_key_exists('feature_title',$postvalue)? trim($home_page['feature_title']):$postvalue['feature_title']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('feature_title',$errors)){ echo "<span class='error'>".ucfirst($errors['feature_title'])."</span>";}?>
                    </tr>

                    <tr>
                        <td valign="top" width="20%"><label>Feature name Arabic </label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="feature_title_arabic" id="feature_title_arabic" maxlength="1000" value="<?php echo isset($home_page['feature_title_arabic']) &&!array_key_exists('feature_title_arabic',$postvalue)? trim($home_page['feature_title_arabic']):$postvalue['feature_title_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('feature_title_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['feature_title_arabic'])."</span>";}?>
                    </tr>                    


                    <tr>
                        <td valign="top" width="20%"><label>Feature Description</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><textarea type="text" name="feature_description" id="feature_description" rows="7" cols="35" style="resize:none;"><?php echo isset($home_page['feature_description']) && (!array_key_exists('feature_description', $errors)) ? trim($home_page['feature_description']) : ''; ?></textarea></div>
                            <span class="error"><?php echo isset($errors['feature_description']) ? $errors['feature_description'] : ''; ?></span>
                        </td>
                    </tr> 

                     <tr>
                        <td valign="top" width="20%"><label>Feature Description Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><textarea type="text" name="feature_description_arabic" id="feature_description_arabic" rows="7" cols="35" style="resize:none;"><?php echo isset($home_page['feature_description_arabic']) && (!array_key_exists('feature_description_arabic', $errors)) ? trim($home_page['feature_description_arabic']) : ''; ?></textarea></div>
                            <span class="error"><?php echo isset($errors['feature_description_arabic']) ? $errors['feature_description_arabic'] : ''; ?></span>
                        </td>

                    </tr> 
                    

                    <tr>
                        <td valign="top" width="20%"><label>GPS </label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="gps" id="gps" maxlength="1000" value="<?php echo isset($home_page['gps']) &&!array_key_exists('gps',$postvalue)? trim($home_page['gps']):$postvalue['gps']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('gps',$errors)){ echo "<span class='error'>".ucfirst($errors['gps'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>GPS Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="gps_arabic" id="gps_arabic" maxlength="1000" value="<?php echo isset($home_page['gps_arabic']) &&!array_key_exists('gps_arabic',$postvalue)? trim($home_page['gps_arabic']):$postvalue['gps_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('gps_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['gps_arabic'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>GPS Description</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="gps_description" id="gps_description" maxlength="1000" value="<?php echo isset($home_page['gps_description']) &&!array_key_exists('gps_description',$postvalue)? trim($home_page['gps_description']):$postvalue['gps_description']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('gps_description',$errors)){ echo "<span class='error'>".ucfirst($errors['gps_description'])."</span>";}?>
                    </tr>

                    <tr>
                        <td valign="top" width="20%"><label>GPS Description Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="gps_description_arabic" id="gps_description_arabic" maxlength="1000" value="<?php echo isset($home_page['gps_description_arabic']) &&!array_key_exists('gps_description_arabic',$postvalue)? trim($home_page['gps_description_arabic']):$postvalue['gps_description_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('gps_description_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['gps_description_arabic'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Fare quote</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="fare_quote" id="fare_quote" maxlength="1000" value="<?php echo isset($home_page['fare_quote']) &&!array_key_exists('fare_quote',$postvalue)? trim($home_page['fare_quote']):$postvalue['fare_quote']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('fare_quote',$errors)){ echo "<span class='error'>".ucfirst($errors['fare_quote'])."</span>";}?>
                    </tr>


                     <tr>
                        <td valign="top" width="20%"><label>Fare quote Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="fare_quote_arabic" id="fare_quote_arabic" maxlength="1000" value="<?php echo isset($home_page['fare_quote_arabic']) &&!array_key_exists('fare_quote_arabic',$postvalue)? trim($home_page['fare_quote_arabic']):$postvalue['fare_quote_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('fare_quote_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['fare_quote_arabic'])."</span>";}?>
                    </tr>


                     <tr>
                        <td valign="top" width="20%"><label>Fare quote Description </label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="fare_quote_description" id="fare_quote_description" maxlength="1000" value="<?php echo isset($home_page['fare_quote_description']) &&!array_key_exists('fare_quote_description',$postvalue)? trim($home_page['fare_quote_description']):$postvalue['fare_quote_description']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('fare_quote_description',$errors)){ echo "<span class='error'>".ucfirst($errors['fare_quote_description'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Fare quote Description Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="fare_quote_description_arabic" id="fare_quote_description_arabic" maxlength="1000" value="<?php echo isset($home_page['fare_quote_description_arabic']) &&!array_key_exists('fare_quote_description_arabic',$postvalue)? trim($home_page['fare_quote_description_arabic']):$postvalue['fare_quote_description_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('fare_quote_description_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['fare_quote_description_arabic'])."</span>";}?>
                    </tr>


                     <tr>
                        <td valign="top" width="20%"><label>Social share</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="social_share" id="social_share" maxlength="1000" value="<?php echo isset($home_page['social_share']) &&!array_key_exists('social_share',$postvalue)? trim($home_page['social_share']):$postvalue['social_share']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('social_share',$errors)){ echo "<span class='error'>".ucfirst($errors['social_share'])."</span>";}?>
                    </tr>

                    <tr>
                        <td valign="top" width="20%"><label>Social share Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="social_share_arabic" id="social_share_arabic" maxlength="1000" value="<?php echo isset($home_page['social_share_arabic']) &&!array_key_exists('social_share_arabic',$postvalue)? trim($home_page['social_share_arabic']):$postvalue['social_share_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('social_share_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['social_share_arabic'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Social share description </label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="social_share_description" id="social_share_description" maxlength="1000" value="<?php echo isset($home_page['social_share_description']) &&!array_key_exists('social_share_description',$postvalue)? trim($home_page['social_share_description']):$postvalue['social_share_description']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('social_share_description',$errors)){ echo "<span class='error'>".ucfirst($errors['social_share_description'])."</span>";}?>
                    </tr>


                     <tr>
                        <td valign="top" width="20%"><label>Social share description Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="social_share_description_arabic" id="social_share_description_arabic" maxlength="1000" value="<?php echo isset($home_page['social_share_description_arabic']) &&!array_key_exists('social_share_description_arabic',$postvalue)? trim($home_page['social_share_description_arabic']):$postvalue['social_share_description_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('social_share_description_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['social_share_description_arabic'])."</span>";}?>
                    </tr>


                    <tr>
                        <td valign="top" width="20%"><label>Rate your driver</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="rate_your_driver" id="rate_your_driver" maxlength="1000" value="<?php echo isset($home_page['rate_your_driver']) &&!array_key_exists('rate_your_driver',$postvalue)? trim($home_page['rate_your_driver']):$postvalue['rate_your_driver']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('rate_your_driver',$errors)){ echo "<span class='error'>".ucfirst($errors['rate_your_driver'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Rate your driver Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="rate_your_driver_arabic" id="rate_your_driver_arabic" maxlength="1000" value="<?php echo isset($home_page['rate_your_driver_arabic']) &&!array_key_exists('rate_your_driver_arabic',$postvalue)? trim($home_page['rate_your_driver_arabic']):$postvalue['rate_your_driver_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('rate_your_driver_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['rate_your_driver_arabic'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Rate your driver description</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="rate_your_driver_description" id="rate_your_driver_description" maxlength="1000" value="<?php echo isset($home_page['rate_your_driver_description']) &&!array_key_exists('rate_your_driver_description',$postvalue)? trim($home_page['rate_your_driver_description']):$postvalue['rate_your_driver_description']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('rate_your_driver_description',$errors)){ echo "<span class='error'>".ucfirst($errors['rate_your_driver_description'])."</span>";}?>
                    </tr>

                    <tr>
                        <td valign="top" width="20%"><label>Rate your driver description Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="rate_your_driver_description_arabic" id="rate_your_driver_description_arabic" maxlength="1000" value="<?php echo isset($home_page['rate_your_driver_description_arabic']) &&!array_key_exists('rate_your_driver_description_arabic',$postvalue)? trim($home_page['rate_your_driver_description_arabic']):$postvalue['rate_your_driver_description_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('rate_your_driver_description_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['rate_your_driver_description_arabic'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Reliability </label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="reliability" id="reliability" maxlength="1000" value="<?php echo isset($home_page['reliability']) &&!array_key_exists('reliability',$postvalue)? trim($home_page['reliability']):$postvalue['reliability']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('reliability',$errors)){ echo "<span class='error'>".ucfirst($errors['reliability'])."</span>";}?>
                    </tr>


                     <tr>
                        <td valign="top" width="20%"><label>Reliability Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="reliability_arabic" id="reliability_arabic" maxlength="1000" value="<?php echo isset($home_page['reliability_arabic']) &&!array_key_exists('reliability_arabic',$postvalue)? trim($home_page['reliability_arabic']):$postvalue['reliability_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('reliability_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['reliability_arabic'])."</span>";}?>
                    </tr>

                    <tr>
                        <td valign="top" width="20%"><label>Reliability description</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="reliability_description" id="reliability_description" maxlength="1000" value="<?php echo isset($home_page['reliability_description']) &&!array_key_exists('reliability_description',$postvalue)? trim($home_page['reliability_description']):$postvalue['reliability_description']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('reliability_description',$errors)){ echo "<span class='error'>".ucfirst($errors['reliability_description'])."</span>";}?>
                    </tr>

                      <tr>
                        <td valign="top" width="20%"><label>Reliability description Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="reliability_description_arabic" id="reliability_description_arabic" maxlength="1000" value="<?php echo isset($home_page['reliability_description_arabic']) &&!array_key_exists('reliability_description_arabic',$postvalue)? trim($home_page['reliability_description_arabic']):$postvalue['reliability_description_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('reliability_description_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['reliability_description_arabic'])."</span>";}?>
                    </tr>

                    <tr>
                        <td valign="top" width="20%"><label>Schedule ride</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="schedule_ride" id="schedule_ride" maxlength="1000" value="<?php echo isset($home_page['schedule_ride']) &&!array_key_exists('schedule_ride',$postvalue)? trim($home_page['schedule_ride']):$postvalue['schedule_ride']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('schedule_ride',$errors)){ echo "<span class='error'>".ucfirst($errors['schedule_ride'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Schedule ride Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="schedule_ride_arabic" id="schedule_ride_arabic" maxlength="1000" value="<?php echo isset($home_page['schedule_ride_arabic']) &&!array_key_exists('schedule_ride_arabic',$postvalue)? trim($home_page['schedule_ride_arabic']):$postvalue['schedule_ride_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('schedule_ride_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['schedule_ride_arabic'])."</span>";}?>
                    </tr>


                    <tr>
                        <td valign="top" width="20%"><label>Schedule ride description</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="schedule_ride_decription" id="schedule_ride_decription" maxlength="1000" value="<?php echo isset($home_page['schedule_ride_decription']) &&!array_key_exists('schedule_ride_decription',$postvalue)? trim($home_page['schedule_ride_decription']):$postvalue['schedule_ride_decription']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('schedule_ride_decription',$errors)){ echo "<span class='error'>".ucfirst($errors['schedule_ride_decription'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Schedule ride description Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="schedule_ride_decription_arabic" id="schedule_ride_decription_arabic" maxlength="1000" value="<?php echo isset($home_page['schedule_ride_decription_arabic']) &&!array_key_exists('schedule_ride_decription_arabic',$postvalue)? trim($home_page['schedule_ride_decription_arabic']):$postvalue['schedule_ride_decription_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('schedule_ride_decription_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['schedule_ride_decription_arabic'])."</span>";}?>
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

