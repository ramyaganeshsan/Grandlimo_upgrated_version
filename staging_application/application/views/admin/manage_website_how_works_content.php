<?php
defined('SYSPATH') OR die("No direct access allowed.");
//print_r($site_settings);

$home_page = isset($website_content['how_its_work_page'])?$website_content['how_its_work_page']:array();
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
                        <td valign="top" width="20%"><label>How its work </label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="how_its_work" id="how_its_work" maxlength="1000" value="<?php echo isset($home_page['how_its_work']) &&!array_key_exists('how_its_work',$postvalue)? trim($home_page['how_its_work']):$postvalue['how_its_work']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('how_its_work',$errors)){ echo "<span class='error'>".ucfirst($errors['how_its_work'])."</span>";}?>
                    </tr>

                    <tr>
                        <td valign="top" width="20%"><label>How its work Arabic </label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="how_its_work_arabic" id="how_its_work_arabic" maxlength="1000" value="<?php echo isset($home_page['how_its_work_arabic']) &&!array_key_exists('how_its_work_arabic',$postvalue)? trim($home_page['how_its_work_arabic']):$postvalue['how_its_work_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('how_its_work_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['how_its_work_arabic'])."</span>";}?>
                    </tr>

                    <tr>
                        <td valign="top" width="20%"><label>How its work Description </label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="how_its_work_description" id="how_its_work_description" maxlength="1000" value="<?php echo isset($home_page['how_its_work_description']) &&!array_key_exists('how_its_work_description',$postvalue)? trim($home_page['how_its_work_description']):$postvalue['how_its_work_description']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('how_its_work_description',$errors)){ echo "<span class='error'>".ucfirst($errors['how_its_work_description'])."</span>";}?>
                    </tr>  

                    <tr>
                        <td valign="top" width="20%"><label>How its work Description Arabic </label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="how_its_work_description_arabic" id="how_its_work_description_arabic" maxlength="1000" value="<?php echo isset($home_page['how_its_work_description_arabic']) &&!array_key_exists('how_its_work_description_arabic',$postvalue)? trim($home_page['how_its_work_description_arabic']):$postvalue['how_its_work_description_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('how_its_work_description_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['how_its_work_description_arabic'])."</span>";}?>
                    </tr>                   


                    <tr>
                        <td valign="top" width="20%"><label>Booking</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="booking" id="booking" maxlength="1000" value="<?php echo isset($home_page['booking']) &&!array_key_exists('booking',$postvalue)? trim($home_page['booking']):$postvalue['booking']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('booking',$errors)){ echo "<span class='error'>".ucfirst($errors['booking'])."</span>";}?>
                    </tr> 

                     <tr>
                        <td valign="top" width="20%"><label>Booking Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="booking_arabic" id="booking_arabic" maxlength="1000" value="<?php echo isset($home_page['booking_arabic']) &&!array_key_exists('booking_arabic',$postvalue)? trim($home_page['booking_arabic']):$postvalue['booking_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('booking_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['booking_arabic'])."</span>";}?>
                    </tr> 
                                        

                    <tr>
                        <td valign="top" width="20%"><label>Booking description </label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="booking_description" id="booking_description" maxlength="1000" value="<?php echo isset($home_page['booking_description']) &&!array_key_exists('booking_description',$postvalue)? trim($home_page['booking_description']):$postvalue['booking_description']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('booking_description',$errors)){ echo "<span class='error'>".ucfirst($errors['booking_description'])."</span>";}?>
                    </tr>

                    <tr>
                        <td valign="top" width="20%"><label>Booking description Arabic </label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="booking_description_arabic" id="booking_description_arabic" maxlength="1000" value="<?php echo isset($home_page['booking_description_arabic']) &&!array_key_exists('booking_description_arabic',$postvalue)? trim($home_page['booking_description_arabic']):$postvalue['booking_description_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('booking_description_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['booking_description_arabic'])."</span>";}?>
                    </tr>


                     <tr>
                        <td valign="top" width="20%"><label>Select car</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="select_car" id="select_car" maxlength="1000" value="<?php echo isset($home_page['select_car']) &&!array_key_exists('select_car',$postvalue)? trim($home_page['select_car']):$postvalue['select_car']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('select_car',$errors)){ echo "<span class='error'>".ucfirst($errors['select_car'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Select car Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="select_car_arabic" id="select_car_arabic" maxlength="1000" value="<?php echo isset($home_page['select_car_arabic']) &&!array_key_exists('select_car_arabic',$postvalue)? trim($home_page['select_car_arabic']):$postvalue['select_car_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('select_car_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['select_car_arabic'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Select car Description</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="select_car_description" id="select_car_description" maxlength="1000" value="<?php echo isset($home_page['select_car_description']) &&!array_key_exists('select_car_description',$postvalue)? trim($home_page['select_car_description']):$postvalue['select_car_description']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('select_car_description',$errors)){ echo "<span class='error'>".ucfirst($errors['select_car_description'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Select car Description Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="select_car_description_arabic" id="select_car_description_arabic" maxlength="1000" value="<?php echo isset($home_page['select_car_description_arabic']) &&!array_key_exists('select_car_description_arabic',$postvalue)? trim($home_page['select_car_description_arabic']):$postvalue['select_car_description_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('select_car_description_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['select_car_description_arabic'])."</span>";}?>
                    </tr>

                    <tr>
                        <td valign="top" width="20%"><label>Airport pickup</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="airport_pickup" id="airport_pickup" maxlength="1000" value="<?php echo isset($home_page['airport_pickup']) &&!array_key_exists('airport_pickup',$postvalue)? trim($home_page['airport_pickup']):$postvalue['airport_pickup']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('airport_pickup',$errors)){ echo "<span class='error'>".ucfirst($errors['airport_pickup'])."</span>";}?>
                    </tr>

                    <tr>
                        <td valign="top" width="20%"><label>Airport pickup Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="airport_pickup_arabic" id="airport_pickup_arabic" maxlength="1000" value="<?php echo isset($home_page['airport_pickup_arabic']) &&!array_key_exists('airport_pickup_arabic',$postvalue)? trim($home_page['airport_pickup_arabic']):$postvalue['airport_pickup_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('airport_pickup_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['airport_pickup_arabic'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Airport pickup description</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="airport_pickup_description" id="airport_pickup_description" maxlength="1000" value="<?php echo isset($home_page['airport_pickup_description']) &&!array_key_exists('airport_pickup_description',$postvalue)? trim($home_page['airport_pickup_description']):$postvalue['airport_pickup_description']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('airport_pickup_description',$errors)){ echo "<span class='error'>".ucfirst($errors['airport_pickup_description'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Airport pickup description Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="airport_pickup_description_arabic" id="airport_pickup_description_arabic" maxlength="1000" value="<?php echo isset($home_page['airport_pickup_description_arabic']) &&!array_key_exists('airport_pickup_description_arabic',$postvalue)? trim($home_page['airport_pickup_description_arabic']):$postvalue['airport_pickup_description_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('airport_pickup_description_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['airport_pickup_description_arabic'])."</span>";}?>
                    </tr>


                     <tr>
                        <td valign="top" width="20%"><label>Fare</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="fare" id="fare" maxlength="1000" value="<?php echo isset($home_page['fare']) &&!array_key_exists('fare',$postvalue)? trim($home_page['fare']):$postvalue['fare']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('fare',$errors)){ echo "<span class='error'>".ucfirst($errors['fare'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Fare Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="fare_arabic" id="fare_arabic" maxlength="1000" value="<?php echo isset($home_page['fare_arabic']) &&!array_key_exists('fare_arabic',$postvalue)? trim($home_page['fare_arabic']):$postvalue['fare_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('fare_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['fare_arabic'])."</span>";}?>
                    </tr>


                     <tr>
                        <td valign="top" width="20%"><label>Fare Description </label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="fare_description" id="fare_description" maxlength="1000" value="<?php echo isset($home_page['fare_description']) &&!array_key_exists('fare_description',$postvalue)? trim($home_page['fare_description']):$postvalue['fare_description']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('fare_description',$errors)){ echo "<span class='error'>".ucfirst($errors['fare_description'])."</span>";}?>
                    </tr>

                    <tr>
                        <td valign="top" width="20%"><label>Fare Description Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="fare_description_arabic" id="fare_description_arabic" maxlength="1000" value="<?php echo isset($home_page['fare_description_arabic']) &&!array_key_exists('fare_description_arabic',$postvalue)? trim($home_page['fare_description_arabic']):$postvalue['fare_description_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('fare_description_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['fare_description_arabic'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Ride confirm</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="ride_confirm" id="ride_confirm" maxlength="1000" value="<?php echo isset($home_page['ride_confirm']) &&!array_key_exists('ride_confirm',$postvalue)? trim($home_page['ride_confirm']):$postvalue['ride_confirm']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('ride_confirm',$errors)){ echo "<span class='error'>".ucfirst($errors['ride_confirm'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Ride confirm Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="ride_confirm_arabic" id="ride_confirm_arabic" maxlength="1000" value="<?php echo isset($home_page['ride_confirm_arabic']) &&!array_key_exists('ride_confirm_arabic',$postvalue)? trim($home_page['ride_confirm_arabic']):$postvalue['ride_confirm_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('ride_confirm_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['ride_confirm_arabic'])."</span>";}?>
                    </tr>


                     <tr>
                        <td valign="top" width="20%"><label>Ride confirm Description</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="ride_confirm_description" id="ride_confirm_description" maxlength="1000" value="<?php echo isset($home_page['ride_confirm_description']) &&!array_key_exists('ride_confirm_description',$postvalue)? trim($home_page['ride_confirm_description']):$postvalue['ride_confirm_description']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('ride_confirm_description',$errors)){ echo "<span class='error'>".ucfirst($errors['ride_confirm_description'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Ride confirm Description Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="ride_confirm_description_arabic" id="ride_confirm_description_arabic" maxlength="1000" value="<?php echo isset($home_page['ride_confirm_description_arabic']) &&!array_key_exists('ride_confirm_description_arabic',$postvalue)? trim($home_page['ride_confirm_description_arabic']):$postvalue['ride_confirm_description_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('ride_confirm_description_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['ride_confirm_description_arabic'])."</span>";}?>
                    </tr>

                    <tr>
                        <td valign="top" width="20%"><label>Ride complete</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="ride_complete" id="ride_complete" maxlength="1000" value="<?php echo isset($home_page['ride_complete']) &&!array_key_exists('ride_complete',$postvalue)? trim($home_page['ride_complete']):$postvalue['ride_complete']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('ride_complete',$errors)){ echo "<span class='error'>".ucfirst($errors['ride_complete'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Ride complete Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="ride_complete_arabic" id="ride_complete_arabic" maxlength="1000" value="<?php echo isset($home_page['ride_complete_arabic']) &&!array_key_exists('ride_complete_arabic',$postvalue)? trim($home_page['ride_complete_arabic']):$postvalue['ride_complete_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('ride_complete_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['ride_complete_arabic'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Ride complete description </label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="ride_complete_description" id="ride_complete_description" maxlength="1000" value="<?php echo isset($home_page['ride_complete_description']) &&!array_key_exists('ride_complete_description',$postvalue)? trim($home_page['ride_complete_description']):$postvalue['ride_complete_description']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('ride_complete_description',$errors)){ echo "<span class='error'>".ucfirst($errors['ride_complete_description'])."</span>";}?>
                    </tr>

                    <tr>
                        <td valign="top" width="20%"><label>Ride complete description Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="ride_complete_description_arabic" id="ride_complete_description_arabic" maxlength="1000" value="<?php echo isset($home_page['ride_complete_description_arabic']) &&!array_key_exists('ride_complete_description_arabic',$postvalue)? trim($home_page['ride_complete_description_arabic']):$postvalue['ride_complete_description_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('ride_complete_description_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['ride_complete_description_arabic'])."</span>";}?>
                    </tr>


                     <tr>
                        <td valign="top" width="20%"><label>Rate driver</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="rate_driver" id="rate_driver" maxlength="1000" value="<?php echo isset($home_page['rate_driver']) &&!array_key_exists('rate_driver',$postvalue)? trim($home_page['rate_driver']):$postvalue['rate_driver']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('rate_driver',$errors)){ echo "<span class='error'>".ucfirst($errors['rate_driver'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Rate driver Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="rate_driver_arabic" id="rate_driver_arabic" maxlength="1000" value="<?php echo isset($home_page['rate_driver_arabic']) &&!array_key_exists('rate_driver_arabic',$postvalue)? trim($home_page['rate_driver_arabic']):$postvalue['rate_driver_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('rate_driver_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['rate_driver_arabic'])."</span>";}?>
                    </tr>



                     <tr>
                        <td valign="top" width="20%"><label>Rate driver description</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="rate_driver_description" id="rate_driver_description" maxlength="1000" value="<?php echo isset($home_page['rate_driver_description']) &&!array_key_exists('rate_driver_description',$postvalue)? trim($home_page['rate_driver_description']):$postvalue['rate_driver_description']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('rate_driver_description',$errors)){ echo "<span class='error'>".ucfirst($errors['rate_driver_description'])."</span>";}?>
                    </tr>

                     <tr>
                        <td valign="top" width="20%"><label>Rate driver Arabic</label><span class="star">*</span></td>   
                        <td><div class="new_input_field" style="width:400px;"><input type="text" name="rate_driver_description_arabic" id="rate_driver_description_arabic" maxlength="1000" value="<?php echo isset($home_page['rate_driver_description_arabic']) &&!array_key_exists('rate_driver_description_arabic',$postvalue)? trim($home_page['rate_driver_description_arabic']):$postvalue['rate_driver_description_arabic']; ?>"></div>
                    <?php if(isset($errors) && array_key_exists('rate_driver_description_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['rate_driver_description_arabic'])."</span>";}?>
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

