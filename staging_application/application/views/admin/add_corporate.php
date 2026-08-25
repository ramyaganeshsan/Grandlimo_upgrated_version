<?php defined('SYSPATH') OR die("No direct access allowed."); ?>
<link rel="stylesheet" href="<?php echo URL_BASE;?>public/js/datetimepicker/jquery-ui.css" />
<script src="<?php echo URL_BASE;?>public/js/datetimepicker/jquery-1.9.1.js"></script>
<script src="<?php echo URL_BASE;?>public/js/datetimepicker/jquery-ui.js"></script>
<script src="http://maps.google.com/maps/api/js?key=<?php echo GOOGLE_MAP_API_KEY; ?>&libraries=places,geometry" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/gmaps.js"></script>
<script>

  function initialize(){
	
	var pickupplace = document.getElementById("address");
	var options = {componentRestrictions: {country: ''}};//Restrictions based country wise
	var pickupplace_autocomplete=new google.maps.places.Autocomplete(pickupplace);//pickupplace
	google.maps.event.addListener(pickupplace_autocomplete, 'place_changed', function () {
		var pickupplace_place = pickupplace_autocomplete.getPlace();//Get a place lat&long
	   /***************Get a pickupplace Latitude and Longitude  ***********/
		document.getElementById('latitude').value = pickupplace_place.geometry.location.lat();//initialized latitude
		document.getElementById('longitude').value = pickupplace_place.geometry.location.lng();//initialized longitude
			/***************End of Get a pickupplace Latitude and Longitude ***********/
		});
		//pickupplace based autocomplete
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	/*********End of Google map and autocomplete part*************/
	
	</script>
<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle">   
       <form name="registration_form" id="registration_form" class="form" action="" method="post" enctype="multipart/form-data">
       <table border="0" cellpadding="5" cellspacing="0" width="100%">            

	<tr>
	<td><b><?php echo ucfirst(__('personalinform')); ?></b></td>
	<td></td>	          
	</tr>	

	<tr>
	<td valign="top" width="20%"><label><?php echo __('firstname'); ?></label><span class="star">*</span></td>        
	<td>
	<div class="new_input_field">
              <input type="text"  maxlength="30" minlength="4"  title="<?php echo __('enterfirstname'); ?>" id="firstname" name="firstname" value="<?php if(isset($postvalue) && array_key_exists('firstname',$postvalue)){ echo $postvalue['firstname']; }?>" />
              <?php if(isset($errors) && array_key_exists('firstname',$errors)){ echo "<span class='error'>".ucfirst($errors['firstname'])."</span>";}?>
	</div>
	</td>   	
	</tr>
	
	<tr>
	<td valign="top" width="20%"><label><?php echo __('lastname'); ?></label><span class="star">*</span></td>        
	<td>
	<div class="new_input_field">
              <input type="text"  maxlength="30" minlength="1" title="<?php echo __('enterlastname'); ?>" id="lastname" name="lastname" value="<?php if(isset($postvalue) && array_key_exists('lastname',$postvalue)){ echo $postvalue['lastname']; }?>" />
              <?php if(isset($errors) && array_key_exists('lastname',$errors)){ echo "<span class='error'>".ucfirst($errors['lastname'])."</span>";}?>
	</div>
	</td>   	
	</tr>
	

	<tr>
	<td valign="top" width="20%"><label><?php echo __('email'); ?></label><span class="star">*</span></td>        
	<td>
	<div class="new_input_field">
              <input type="text"  title="<?php echo __('enteremailaddress'); ?>" id="email" name="email" value="<?php if(isset($postvalue) && array_key_exists('email',$postvalue)){ echo $postvalue['email']; }?>" maxlength="50" /><br>
              <?php if(isset($errors) && array_key_exists('email',$errors)){ echo "<span class='error'>".ucfirst($errors['email'])."</span>";}?>
	</div>
	</td>   	
	</tr>

           <tr>
           <td valign="top" width="20%"><label><?php echo __('password'); ?></label><span class="star">*</span></td>        
	   <td>
		   <div class="new_input_field">
              <input type="password" title="<?php echo __('enterpassword'); ?>" name="password" id="password" value="<?php if(isset($postvalue) && array_key_exists('password',$postvalue)){ echo $postvalue['password']; }?>"  minlength="4" maxlength="20" />
              <?php if(isset($errors) && array_key_exists('password',$errors)){ echo "<span class='error'>".ucfirst($errors['password'])."</span>";}?>
		   </div>
           </td>   	
           </tr>

            <tr>
           <td valign="top" width="20%"><label><?php echo __('confirm_password_label'); ?></label><span class="star">*</span></td>        
	   <td>
		   <div class="new_input_field">
		   	              <input type="password" title="<?php echo __('entertheconfirmpassword'); ?>" name="repassword" id="repassword" value="<?php if(isset($postvalue) && array_key_exists('repassword',$postvalue)){ echo $postvalue['repassword']; }?>"  minlength="2" maxlength="30" />
		      <?php if(isset($errors) && array_key_exists('repassword',$errors)){ echo "<span class='error'>".ucfirst($errors['repassword'])."</span>";}?>
		   </div>
           </td>   	
           </tr>


		
	<tr>
	<td valign="top" width="20%"><label><?php echo __('mobile'); ?></label><span class="star">*</span></td>        
	<td>
	<div class="new_input_field">
              <input type="text" title="<?php echo __('entermobileno'); ?>" id="phone" name="phone" value="<?php if(isset($postvalue) && array_key_exists('phone',$postvalue)){ echo $postvalue['phone']; }?>" minlength="7" maxlength="20" />
              <?php if(isset($errors) && array_key_exists('phone',$errors)){ echo "<span class='error'>".ucfirst($errors['phone'])."</span>";}?>
	</div>
	</td>   	
	</tr>
	
	<tr>
	<td valign="top" width="20%"><label><?php echo __('address'); ?></label><span class="star">*</span></td>        
	<td>
	<div class="new_input_field">
		<input type="text" name="address" id="address"  class="required" value="<?php if(isset($postvalue) && array_key_exists('address',$postvalue)){ echo $postvalue['address']; }?>"  title="<?php echo __('enteraddress'); ?>" />
		 <?php if(isset($errors) && array_key_exists('address',$errors)){ echo "<span class='error'>".ucfirst($errors['address'])."</span>";}?>
		  <input type="hidden" name="latitude" value=""  id="latitude"/>
		  <input type="hidden" name="longitude" value=""  id="longitude"/>
 	</div>
	</td>   	
	</tr>
	<tr>
	<td valign="top" width="20%"><label><?php echo __('photo_label'); ?></label><span class="star">*</span></td>        
	<td>
	<div class="new_input_field">
              <input type="file" title="<?php echo __('profile_image_content'); ?>" id="photo" name="photo" value="<?php if(isset($postvalue) && array_key_exists('photo',$postvalue)){ echo $postvalue['photo']; }?>"  />
              <?php if(isset($errors) && array_key_exists('photo',$errors)){ echo "<span class='error'>".__('Errors.photo.Upload::type')."</span>";}?>
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
                            <br />
                    
                            <div class="button blackB">     <input type="button" value="<?php echo __('button_back'); ?>" onclick="window.history.go(-1)" /></div>
                            <div class="button dredB">   <input type="reset" onclick="change_state('<?php echo DEFAULT_COUNTRY; ?>','<?php echo DEFAULT_STATE; ?>');change_city('<?php echo DEFAULT_COUNTRY; ?>','<?php echo DEFAULT_STATE; ?>','<?php echo DEFAULT_CITY; ?>')" value="<?php echo __('button_reset'); ?>" title="<?php echo __('button_reset'); ?>" /></div>
                            <div class="button greenB">  <input type="submit" value="<?php echo __('submit' );?>" name="submit_corporate" title="<?php echo __('submit' );?>" /></div>
                            <div class="clr">&nbsp;</div>
                        </td>
                    </tr> 


                </table>
        </form>
        </div>
        <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt"></div></div>
    </div>
</div>  
