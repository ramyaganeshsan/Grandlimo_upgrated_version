<?php defined('SYSPATH') OR die("No direct access allowed.");  ?>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery-1.6.3.min.js"></script>
<!-- time picker start-->
<link rel="stylesheet" href="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/css/ui-lightness/jquery-ui-1.8.11.custom.css" />
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/js/jquery-1.5.1.min.js"></script>
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/js/jquery-ui-1.8.11.custom.min.js"></script>
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery.validate.js"></script>
<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle"> 
         <form name="editmotor_form" class="form" id="editmotor_form" action="" method="post" enctype="multipart/form-data">
	<table border="0" cellpadding="5" cellspacing="0" width="100%">                             
	<tr>
		<td><input type="hidden" name="companyname" value="1"</td>
	</tr>
	
	<tr>
	<td valign="top" width="20%"><label><?php echo __('model_name'); ?></label><span class="star">*</span></td>        
	<td>
	<div class="new_input_field">
              <input type="text"  maxlength="30" minlength="2"  title="<?php echo __('entermodelname'); ?>" id="model_name" name="model_name" value="<?php echo isset($model_details['model_name']) &&!array_key_exists('model_name',$postvalue)? trim($model_details['model_name']):$postvalue['model_name']; ?>" />
              <?php if(isset($errors) && array_key_exists('model_name',$errors)){ echo "<span class='error'>".ucfirst($errors['model_name'])."</span>";}?>
	</div>
	</td>   	
	</tr>
	<!-- Arabic Name -->
	<tr>
	<td valign="top" width="20%"><label><?php echo __('model_name_ar'); ?></label><span class="star">*</span></td>        
	<td>
	<div class="new_input_field">
              <input type="text"  maxlength="30" minlength="2"  title="<?php echo __('entermodelname'); ?>" id="model_name_ar" name="model_name_ar" value="<?php echo isset($model_details['model_name_ar']) &&!array_key_exists('model_name_ar',$postvalue)? trim($model_details['model_name_ar']):$postvalue['model_name_ar']; ?>" />
              <?php if(isset($errors) && array_key_exists('model_name_ar',$errors)){ echo "<span class='error'>".ucfirst($errors['model_name_ar'])."</span>";}?>
	</div>
	</td>   	
	</tr>
	<!-- Arabic Name -->
	
	<!---- Category Name------->
	<tr>
	<td valign="top" width="20%"><label><?php echo __('category_name'); ?></label><span class="star">*</span></td>        
	<td>
	<div class="new_input_field">
              <input type="text"  maxlength="50" minlength="2"  title="<?php echo __('entercategory_name'); ?>" id="category_name" name="category_name" value="<?php echo isset($model_details['category_name']) &&!array_key_exists('category_name',$postvalue)? trim($model_details['category_name']):$postvalue['category_name']; ?>" />
              <?php if(isset($errors) && array_key_exists('category_name',$errors)){ echo "<span class='error'>".ucfirst($errors['category_name'])."</span>";}?>
	</div>
	</td>   	
	</tr>
	<!---- Category Name------->
	
	<tr>
	<td valign="top" width="20%"><label><?php echo __('model_size'); ?></label><span class="star">*</span></td>        
	<td>
	<div class="new_input_field">
              <input type="text"  title="<?php echo __('entermodelsize'); ?>" id="model_size" name="model_size" value="<?php echo isset($model_details['model_size']) &&!array_key_exists('model_size',$postvalue)? trim($model_details['model_size']):$postvalue['model_size']; ?>" maxlength="3" />
              <?php if(isset($errors) && array_key_exists('model_size',$errors)){ echo "<span class='error'>".ucfirst($errors['model_size'])."</span>";}?>
	</div>
	</td>   	
	</tr>
	<!-- IMAGES -->
				 <tr>
			<td valign="top" width="20%"><label><?php echo __('model_image_label'); ?> </label><span class="star">*</span></td>   
			<td width="30%"> 
				<div class="new_input_field">
					<input type="file" class="imageonly" name="model_image" id="model_image" title="<?php echo __('select_taxi_image'); ?>" value="<?php echo isset($model_details) &&!array_key_exists('model_image',$postvalue)? trim($model_details['model_image']):$postvalue['model_image']; ?>">
					<span><?php echo __('model_image_hint'); ?></span>
				</div>
			</td>
			<td>	
				<div class="site_logo" >
					<input type="hidden" name="model_old_img" id="model_old_img" value="<?php echo $model_details['model_image']; ?>" >
					<?php if(file_exists($_SERVER["DOCUMENT_ROOT"].'/public/uploads/model_image/'.$model_details['model_image']) && !empty($model_details['model_image']) ){ ?>
						<img width="75" height="75" src="<?php echo URL_BASE.MODEL_IMGPATH.$model_details['model_image'];?>"/>
					<?php }else{ ?>
						<img width="75" height="75"  src="<?php echo URL_BASE;?>public/images/no_image.png"/>
					<?php } ?>
				</div><br />
				<?php if(isset($errors) && array_key_exists('model_image',$errors)){ echo "<span class='error'>".ucfirst($errors['model_image'])."</span>";}?>
                        </td></tr>
                                 <tr>
			<td valign="top" width="20%"><label><?php echo __('model_image_unfocus'); ?> </label><span class="star">*</span></td>   
			<td width="30%"> 
				<div class="new_input_field">
					<input type="file" class="imageonly" name="model_image_unfocus" id="model_image_unfocus" title="<?php echo __('select_taxi_image'); ?>" value="<?php echo isset($model_details) &&!array_key_exists('model_image_unfocus',$postvalue)? trim($model_details['model_image_unfocus']):$postvalue['model_image_unfocus']; ?>">
					<span><?php echo __('model_image_hint'); ?></span>
				</div>
			</td>
			<td>	
                            <div class="site_logo" >
                                    <input type="hidden" name="model_image_unfocus_old" id="model_image_unfocus_old" value="<?php echo $model_details['model_image_unfocus']; ?>" >
                                    <?php if(file_exists($_SERVER["DOCUMENT_ROOT"].'/public/uploads/model_image/'.$model_details['model_image_unfocus']) && !empty($model_details['model_image_unfocus']) ){ ?>
                                            <img width="75" height="75" src="<?php echo URL_BASE.MODEL_IMGPATH.$model_details['model_image_unfocus'];?>"/>
                                    <?php }else{ ?>
                                            <img width="75" height="75"  src="<?php echo URL_BASE;?>public/images/no_image.png"/>
                                    <?php } ?>
                            </div><br />
                            <?php if(isset($errors) && array_key_exists('model_image_unfocus',$errors)){ echo "<span class='error'>".ucfirst($errors['model_image_unfocus'])."</span>";}?>
			</td>		


	</tr>
	<tr>
			<td valign="top" width="20%"><label><?php echo __('iconic_image_label'); ?> </label><span class="star">*</span></td>   
			<td width="30%"> 
				<div class="new_input_field">
					<input type="file" class="imageonly" name="iconic_image" id="iconic_image" title="<?php echo __('select_taxi_image'); ?>" value="<?php echo isset($model_details) &&!array_key_exists('iconic_image',$postvalue)? trim($model_details['iconic_image']):$postvalue['iconic_image']; ?>">
					
				</div>
			</td>
			<td>	
				<div class="site_logo" >
					<input type="hidden" name="iconic_old_img" id="iconic_old_img" value="<?php echo $model_details['iconic_image']; ?>" >
					<?php if(file_exists($_SERVER["DOCUMENT_ROOT"].'/public/uploads/model_image/'.$model_details['iconic_image']) && !empty($model_details['iconic_image']) ){ ?>
						<img width="75" height="75" src="<?php echo URL_BASE.MODEL_IMGPATH.$model_details['iconic_image'];?>"/>
					<?php }else{ ?>
						<img width="75" height="75"  src="<?php echo URL_BASE;?>public/images/no_image.png"/>
					<?php } ?>
				</div><br />
				<?php if(isset($errors) && array_key_exists('iconic_image',$errors)){ echo "<span class='error'>".ucfirst($errors['iconic_image'])."</span>";}?>
			</td>
	</tr>

	<tr>
		<td valign="top" width="20%"><label><?php echo __('model_image_label').'('.__('confirmation').')'; ?> </label><span class="star">*</span></td>   
			<td width="30%"> 
				<div class="new_input_field">
					<input type="file" class="imageonly" name="model_image_2" id="model_image_2" title="<?php echo __('select_taxi_image'); ?>" value="">
					<span><?php echo __('model_image_hint'); ?></span>
				</div>
			</td>
			<td>	
				<div class="site_logo" >
					<input type="hidden" name="model_old_img" id="model_old_img" value="<?php echo $model_details['model_image_2']; ?>" >
					<?php if(file_exists($_SERVER["DOCUMENT_ROOT"].'/public/uploads/model_image/'.$model_details['model_image_2']) && !empty($model_details['model_image_2']) ){ ?>
						<img width="75" height="75" src="<?php echo URL_BASE.MODEL_IMGPATH.$model_details['model_image_2'];?>"/>
					<?php }else{ ?>
						<img width="75" height="75"  src="<?php echo URL_BASE;?>public/images/no_image.png"/>
						<?php } ?>
				</div><br />
				<?php if(isset($errors) && array_key_exists('model_image_2',$errors)){ echo "<span class='error'>".ucfirst($errors['model_image_2'])."</span>";}?>
            </td>
    </tr>

    <tr>
		<td valign="top" width="20%"><label><?php echo __('model_image_unfocus').'('.__('confirmation').')'; ?> </label><span class="star">*</span></td>   
			<td width="30%"> 
				<div class="new_input_field">
					<input type="file" class="imageonly" name="model_image_unfocus_2" id="model_image_unfocus_2" title="<?php echo __('select_taxi_image'); ?>" value="">
					<span><?php echo __('model_image_hint'); ?></span>
				</div>
			</td>
			<td>	
				<div class="site_logo" >
					<input type="hidden" name="model_image_unfocus_old_2" id="model_image_unfocus_old_2" value="<?php echo $model_details['model_image_unfocus_2']; ?>" >
					<?php if(file_exists($_SERVER["DOCUMENT_ROOT"].'/public/uploads/model_image/'.$model_details['model_image_unfocus_2']) && !empty($model_details['model_image_unfocus_2']) ){ ?>
						<img width="75" height="75" src="<?php echo URL_BASE.MODEL_IMGPATH.$model_details['model_image_unfocus_2'];?>"/>
					<?php }else{ ?>
						<img width="75" height="75"  src="<?php echo URL_BASE;?>public/images/no_image.png"/>
						<?php } ?>
				</div><br />
				<?php if(isset($errors) && array_key_exists('model_image_unfocus_2',$errors)){ echo "<span class='error'>".ucfirst($errors['model_image_unfocus_2'])."</span>";}?>
            </td>
    </tr>

    <tr>
		<td valign="top" width="20%"><label><?php echo __('iconic_image_label').'('.__('confirmation').')'; ?> </label><span class="star">*</span></td>   
			<td width="30%"> 
				<div class="new_input_field">
					<input type="file" class="imageonly" name="iconic_image_2" id="iconic_image_2" title="<?php echo __('select_taxi_image'); ?>" value="">
				</div>
			</td>
			<td>	
				<div class="site_logo" >
					<input type="hidden" name="iconic_old_img_2" id="iconic_old_img_2" value="<?php echo $model_details['iconic_image_2']; ?>" >
					<?php if(file_exists($_SERVER["DOCUMENT_ROOT"].'/public/uploads/model_image/'.$model_details['iconic_image_2']) && !empty($model_details['iconic_image_2']) ){ ?>
						<img width="75" height="75" src="<?php echo URL_BASE.MODEL_IMGPATH.$model_details['iconic_image_2'];?>"/>
					<?php }else{ ?>
						<img width="75" height="75"  src="<?php echo URL_BASE;?>public/images/no_image.png"/>
						<?php } ?>
				</div><br />
				<?php if(isset($errors) && array_key_exists('iconic_image_2',$errors)){ echo "<span class='error'>".ucfirst($errors['iconic_image_2'])."</span>";}?>
            </td>
    </tr>


    		<tr>
			<td valign="top" width="20%"><label><?php echo __('website_model_image'); ?></label><span class="star">*</span></td>   
			<td width="30%"> 
				<div class="new_input_field">
					<input type="file" class="imageonly" name="website_model_image" id="website_model_image" title="<?php echo __('select_taxi_image'); ?>" value="<?php echo isset($model_details) &&!array_key_exists('website_model_image',$postvalue)? trim($model_details['website_model_image']):$postvalue['website_model_image']; ?>">
					<span>(706 * 306)</span>
				</div>
			</td>
			<td>	
				<div class="site_logo" >
					<input type="hidden" name="website_model_old_img" id="website_model_old_img" value="<?php echo $model_details['website_model_image']; ?>" >
					<?php if(file_exists($_SERVER["DOCUMENT_ROOT"].'/public/uploads/model_image/'.$model_details['website_model_image']) && !empty($model_details['website_model_image']) ){ ?>
						<img width="75" height="75" src="<?php echo URL_BASE.MODEL_IMGPATH.$model_details['website_model_image'];?>"/>
					<?php }else{ ?>
						<img width="75" height="75"  src="<?php echo URL_BASE;?>public/images/no_image.png"/>
					<?php } ?>
				</div><br />
				<?php if(isset($errors) && array_key_exists('website_model_image',$errors)){ echo "<span class='error'>".ucfirst($errors['website_model_image'])."</span>";}?>
                </td>
            </tr>
				 <!-- IMAGES -->
	<!--Fare Details start-->
	  <tr>
	   <td><?php echo ucfirst(__('fare_details')); ?></td>
	   <td></td>	          
           </tr>

            <tr>
			   <td><?php echo ucfirst(__('distance_fare')); ?></td>
			   <td></td>	          
		    </tr>

           <!--Distance Fare Calculation start -->
           
           <tr>
           <td valign="top" width="20%"><label><?php echo __('base_fare'); ?>(<?php echo CURRENCY; ?>)</label><span class="star">*</span></td>        
	       <td>			   
		   <div class="new_input_field">
              <input type="text" title="<?php echo __('enterthebase_fare'); ?>" class="required numbersdots" name="base_fare" id="base_fare" value="<?php echo isset($model_details['base_fare']) &&!array_key_exists('base_fare',$postvalue)? trim($model_details['base_fare']):$postvalue['base_fare']; ?>"  minlength="1" maxlength="30"  />
              <?php if(isset($errors) && array_key_exists('base_fare',$errors)){ echo "<span class='error'>".ucfirst($errors['base_fare'])."</span>";}?>
		   </div>
           </td>   	
           </tr>
           
           <tr>
           <td valign="top" width="20%"><label><?php echo __('taxi_min_km'); ?></label><span class="star">*</span></td>        
	       <td>			   
		   <div class="new_input_field">
              <input type="text" title="<?php echo __('enter_min_km'); ?>" class="required numbersdots" name="min_km" id="min_km" value="<?php echo isset($model_details['min_km']) &&!array_key_exists('min_km',$postvalue)? trim($model_details['min_km']):$postvalue['base_fare']; ?>"  minlength="1" maxlength="7"  />
              <?php if(isset($errors) && array_key_exists('min_km',$errors)){ echo "<span class='error'>".ucfirst($errors['min_km'])."</span>";}?>
		   </div>
           </td>   	
           </tr>   
           
            <tr>
           <td valign="top" width="20%"><label><?php echo __('min_fare'); ?>(<?php echo CURRENCY; ?>)</label><span class="star">*</span></td>        
	       <td>
		   <div class="new_input_field">
              <input type="text" title="<?php echo __('enterthemin_fare'); ?>" class="required numbersdots" name="min_fare" id="min_fare" value="<?php echo isset($model_details['min_fare']) &&!array_key_exists('min_fare',$postvalue)? trim($model_details['min_fare']):$postvalue['min_fare']; ?>"  minlength="1" maxlength="30"  />
              <?php if(isset($errors) && array_key_exists('min_fare',$errors)){ echo "<span class='error'>".ucfirst($errors['min_fare'])."</span>";}?>
		   </div>
           </td>   	
           </tr>  
           
           
          
           
           <tr>
           <td valign="top" width="20%"><label><?php echo __('below_and_above_km'); ?></label><span class="star">*</span></td>        
	       <td>			   
		   <div class="new_input_field">
              <input type="text" title="<?php echo __('enter_below_and_above_km'); ?>" class="required onlynumbers" name="below_and_above_km" id="below_and_above_km" value="<?php echo isset($model_details['below_above_km']) &&!array_key_exists('below_and_above_km',$postvalue)? trim($model_details['below_above_km']):$postvalue['below_and_above_km']; ?>"  minlength="1" maxlength="7"  />
              <?php if(isset($errors) && array_key_exists('below_and_above_km',$errors)){ echo "<span class='error'>".ucfirst($errors['below_and_above_km'])."</span>";}?>
		   </div>
           </td>   	
           </tr>   
           
           <tr>
           <td valign="top" width="20%"><label><?php echo sprintf(__('below_km'),''); ?>(<?php echo CURRENCY; ?>)</label><span class="star">*</span></td>        
	       <td>
		   <div class="new_input_field">
              <input type="text" title="<?php echo __('enterthebelow_km'); ?>" class="required numbersdots" name="below_km" id="below_km" value="<?php echo isset($model_details['below_km']) &&!array_key_exists('below_km',$postvalue)? trim($model_details['below_km']):$postvalue['below_km']; ?>"  minlength="1" maxlength="30"  />
              <?php if(isset($errors) && array_key_exists('below_km',$errors)){ echo "<span class='error'>".ucfirst($errors['below_km'])."</span>";}?>
		   </div>
           </td>   	
           </tr>   
           
           <tr>
           <td valign="top" width="20%"><label><?php echo sprintf(__('above_km'),''); ?>(<?php echo CURRENCY; ?>)</label><span class="star">*</span></td>        
	       <td>
		   <div class="new_input_field">
              <input type="text" title="<?php echo __('entertheabove_km'); ?>" class="required numbersdots" name="above_km" id="above_km" value="<?php echo isset($model_details['above_km']) &&!array_key_exists('above_km',$postvalue)? trim($model_details['above_km']):$postvalue['above_km']; ?>"  minlength="1" maxlength="30"  />
              <?php if(isset($errors) && array_key_exists('above_km',$errors)){ echo "<span class='error'>".ucfirst($errors['above_km'])."</span>";}?>
		   </div>
           </td>   	
           </tr>  

         <!--Distance Fare Calculation end -->

        
          <tr>
           <td valign="top" width="20%"><label><?php echo __('cancellation_fare'); ?>(<?php echo CURRENCY; ?>)</label><span class="star">*</span></td>        
	       <td>
		   <div class="new_input_field">
              <input type="text" title="<?php echo __('enterthecancellation_fare'); ?>" class="required" name="cancellation_fare" id="cancellation_fare" value="<?php echo isset($model_details['cancellation_fare']) &&!array_key_exists('cancellation_fare',$postvalue)? trim($model_details['cancellation_fare']):$postvalue['cancellation_fare']; ?>"  minlength="1" maxlength="10"  />
              <?php if(isset($errors) && array_key_exists('cancellation_fare',$errors)){ echo "<span class='error'>".ucfirst($errors['cancellation_fare'])."</span>";}?>
		   </div>
           </td>   	
           </tr>

          <tr>
           <td valign="top" width="20%"><label><?php echo __('airport_pickup_fare'); ?>(<?php echo CURRENCY; ?>)</label><span class="star">*</span></td>        
	       <td>
		   <div class="new_input_field">
              <input type="text" title="<?php echo __('enterairport_pickup_fare'); ?>" class="required" name="airport_pickup_fare" id="airport_pickup_fare" value="<?php echo isset($model_details['airport_pickup_fare']) &&!array_key_exists('airport_pickup_fare',$postvalue)? trim($model_details['airport_pickup_fare']):$postvalue['airport_pickup_fare']; ?>"  minlength="1" maxlength="10"  />
              <?php if(isset($errors) && array_key_exists('airport_pickup_fare',$errors)){ echo "<span class='error'>".ucfirst($errors['airport_pickup_fare'])."</span>";}?>
		   </div>
           </td>   	
           </tr>
           
          <tr>
           <td valign="top" width="20%"><label><?php echo __('airport_drop_fare'); ?>(<?php echo CURRENCY; ?>)</label><span class="star">*</span></td>        
	       <td>
		   <div class="new_input_field">
              <input type="text" title="<?php echo __('enterairport_drop_fare'); ?>" class="required" name="airport_drop_fare" id="airport_drop_fare" value="<?php echo isset($model_details['airport_drop_fare']) &&!array_key_exists('airport_drop_fare',$postvalue)? trim($model_details['airport_drop_fare']):$postvalue['airport_drop_fare']; ?>"  minlength="1" maxlength="10"  />
              <?php if(isset($errors) && array_key_exists('airport_drop_fare',$errors)){ echo "<span class='error'>".ucfirst($errors['airport_drop_fare'])."</span>";}?>
		   </div>
           </td>   	
           </tr>
           
           <tr>
           <td valign="top" width="20%"><label><?php echo __('waiting_charge_ph'); ?>(<?php echo CURRENCY; ?>)</label><span class="star">*</span></td>        
	   <td>
		   <div class="new_input_field">	
              <input type="text"  class="required numbersdots" title="<?php echo __('enterwaiting_charge'); ?>" id="waiting_time" name="waiting_time" value="<?php echo isset($model_details['waiting_time']) &&!array_key_exists('waiting_time',$postvalue)? trim($model_details['waiting_time']):$postvalue['waiting_time']; ?>" minlength="1" maxlength="20" />
              <?php if(isset($errors) && array_key_exists('waiting_time',$errors)){ echo "<span class='error'>".ucfirst($errors['waiting_time'])."</span>";}?>
		   </div>
	   </td>   	
           </tr>
		   
		   <tr>
           <td valign="top" width="20%"><label><?php echo __('waiting_free'); ?></label><span class="star">*</span></td>        
	   <td>
		   <div class="new_input_field">	
              <input type="text"  class="required numbersdots" title="<?php echo __('enterwaiting_free'); ?>" id="waiting_free" name="waiting_free" value="<?php echo isset($model_details['waiting_free']) &&!array_key_exists('waiting_free',$postvalue)? trim($model_details['waiting_free']):$postvalue['waiting_free']; ?>" minlength="1" maxlength="20" />
              <?php if(isset($errors) && array_key_exists('waiting_free',$errors)){ echo "<span class='error'>".ucfirst($errors['waiting_free'])."</span>";}?>
		   </div>
	   </td>   	
           </tr>


        <!--Minutes Fare Calculation Start -->

        <tr>
		   <td><?php echo ucfirst(__('minutes_fare')); ?></td>
		   <td></td>	          
	    </tr>

		   
		   <tr>
           <td valign="top" width="20%"><label><?php echo __('time_selection'); ?></label><span class="star">*</span> ( Minimum minutes )</td>        
	   <td>
		<?php $time =''; $time =  isset($model_details['time']) &&!array_key_exists('time',$postvalue)? trim($model_details['time']):$postvalue['time']; ?>
		   <div class="new_input_field">
              <div class="time_select" id="">
				<select name="time" id="time" class="required" title="<?php echo __('entertime'); ?>">
				 <option value="">--Select--</option>
				<option value="1" <?php if($time == '1') { echo 'selected=selected'; } ?>>1 Minutes</option>
				<option value="5" <?php if($time == '5') { echo 'selected=selected'; } ?>>5 Minutes</option>
				<option value="10" <?php if($time == '10') { echo 'selected=selected'; } ?>>10 Minutes</option>
				<option value="15" <?php if($time == '15') { echo 'selected=selected'; } ?>>15 Minutes</option>
				<option value="20" <?php if($time == '20') { echo 'selected=selected'; } ?>>20 Minutes</option>
				<option value="30" <?php if($time == '30') { echo 'selected=selected'; } ?>>30 Minutes</option>
				<option value="60" <?php if($time == '60') { echo 'selected=selected'; } ?>>60 Minutes</option>
				</select>
			  </div>
                                         
		   </div>
				<?php if(isset($errors) && array_key_exists('time',$errors)){ print '<pre>'; print_r($errors); echo "<span class='error'>".ucfirst($errors['time'])."</span>";}?>
           </td>	   
           </tr>
		   
             <tr>
           <td valign="top" width="20%"><label>Fare per <span class="minrange"></span> minutes(<?php echo CURRENCY; ?>)</label><span class="star">*</span></td>        
	   <td>
		   <div class="new_input_field">	
              <input type="text"  class="required numbersdots" title="<?php echo __('enter_fare_per_minute'); ?>" id="minutes_fare" name="minutes_fare" value="<?php echo isset($model_details['minutes_fare']) &&!array_key_exists('minutes_fare',$postvalue)? trim($model_details['minutes_fare']):$postvalue['minutes_fare']; ?>" minlength="1" maxlength="6" />
              <?php if(isset($errors) && array_key_exists('minutes_fare',$errors)){ echo "<span class='error'>".ucfirst($errors['minutes_fare'])."</span>";}?>
		   </div>
	   </td></tr>

	    <tr>
           <td valign="top" width="20%"><label><?php echo __('time_per_min_selection'); ?></label><span class="star">*</span>(Apply for after minimum minutes traveled )</td>        
	   <td>
		<?php $per_min_time =''; $per_min_time =  isset($model_details['per_min_time']) &&!array_key_exists('per_min_time',$postvalue)? trim($model_details['per_min_time']):$postvalue['per_min_time']; ?>
		   <div class="new_input_field">
              <div class="time_select" id="">
				<select name="per_min_time" id="per_min_time" class="required" title="<?php echo __('entertime'); ?>">
				 <option value="">--Select--</option>
				<option value="1" <?php if($per_min_time == '1') { echo 'selected=selected'; } ?>>1 Minute</option>
				<option value="2" <?php if($per_min_time == '2') { echo 'selected=selected'; } ?>>2 Minutes</option>
				<option value="3" <?php if($per_min_time == '3') { echo 'selected=selected'; } ?>>3 Minutes</option>
				<option value="4" <?php if($per_min_time == '4') { echo 'selected=selected'; } ?>>4 Minutes</option>
				<option value="5" <?php if($per_min_time == '5') { echo 'selected=selected'; } ?>>5 Minutes</option>
				</select>
			  </div>
                                         
		   </div>
				<?php if(isset($errors) && array_key_exists('per_min_time',$errors)){ print '<pre>'; print_r($errors); echo "<span class='error'>".ucfirst($errors['per_min_time'])."</span>";}?>
           </td>	   
           </tr>

            <tr>
           <td valign="top" width="20%"><label>Fare per <span class="per_minrange"></span> minutes(<?php echo CURRENCY; ?>)</label><span class="star">*</span></td>        
	   <td>
		   <div class="new_input_field">	
              <input type="text"  class="required numbersdots" title="<?php echo __('enter_fare_per_minute'); ?>" id="per_minutes_fare" name="per_minutes_fare" value="<?php echo isset($model_details['per_minutes_fare']) &&!array_key_exists('per_minutes_fare',$postvalue)? trim($model_details['per_minutes_fare']):$postvalue['per_minutes_fare']; ?>" minlength="1" maxlength="6" />
              <?php if(isset($errors) && array_key_exists('per_minutes_fare',$errors)){ echo "<span class='error'>".ucfirst($errors['per_minutes_fare'])."</span>";}?>
		   </div>
	   </td> 

        <?php /*   </tr>
        <tr>
           <td valign="top" width="20%"><label><?php echo __('base_fare');?> </label><span class="star">*</span></td>        
		   <td>
			   <div class="new_input_field">	
	              <input type="text"  class="required numbersdots" title="<?php echo __('enter_base_fare'); ?>" id="base_fare" name="base_fare" value="<?php echo isset($model_details['base_fare']) &&!array_key_exists('base_fare',$postvalue)? trim($model_details['base_fare']):$postvalue['base_fare']; ?>" minlength="1" maxlength="6" />
	              <?php if(isset($errors) && array_key_exists('base_fare',$errors)){ echo "<span class='error'>".ucfirst($errors['base_fare'])."</span>";}?>
			   </div>
		   </td>   	
        </tr>
        */ ?>

        <!-- Minutes Fare Calculation end -->

			 
           	<tr>
           <td valign="top" width="20%"><label><?php echo __('maximum_luggage'); ?></label><span class="star">*</span></td>        
	   <td>
		   <div class="new_input_field">
              <input type="text" title="<?php echo __('enter_minimum_luggage'); ?>" class="required onlynumbers" name="max_luggage" id="max_luggage" value="<?php echo isset($model_details['max_luggage']) &&!array_key_exists('max_luggage',$postvalue)? trim($model_details['max_luggage']):$postvalue['max_luggage']; ?>" maxlength="4"  />
              <?php if(isset($errors) && array_key_exists('max_luggage',$errors)){ echo "<span class='error'>".ucfirst($errors['max_luggage'])."</span>";}?>                            
		   </div>
           </td>   	
           </tr> 


          <tr>
		<td valign="top" width="20%"><label><?php echo __('Hourly Fare'); ?></label></span></td>        
		<td>
		</tr>

          <?php  $hourly_fare_list = $model_details['hourly_fare_list'];

		   	foreach($hourly_fare_list as $key=>$val)
		   	{
		   		?>
		  
		  
          <tr>
           <td valign="top" width="20%"><label><?php echo $key."-hour" ?></label><span class="star">*</span></td>        
	   <td>
		   <div class="new_input_field">
              <input type="text" title="<?php echo __('Enter Fare'); ?>" class="required" name="hourly_fare_list[]" id="hourly_fare_list" value="<?php echo $val; ?>" maxlength="4"  />
		   </div>
           </td>   	
           </tr> 
           <?php
            	}
		   	?>


		<tr>
		<td valign="top" width="20%"><label><?php echo __('Fixed estimate fare'); ?></label></span></td>        
			
		<tr>
           <td valign="top" width="20%"><label>Grace KM allowed Drop </label><span class="star">*</span></td>        
		   <td>
			   <div class="new_input_field">
	              <input type="text" title="<?php echo __('Enter grace km'); ?>" class="required" name="grace_km" id="grace_km" value="<?php echo isset($model_details['grace_km']) &&!array_key_exists('grace_km',$postvalue)? trim($model_details['grace_km']):$postvalue['grace_km']; ?>" maxlength="2"  onkeypress="return isNumber(event)" />
	              <?php if(isset($errors) && array_key_exists('grace_km',$errors)){ echo "<span class='error'>".ucfirst($errors['grace_km'])."</span>";}?>
			   </div>
           </td>   	
        </tr>

        <tr>
           <td valign="top" width="20%"><label>Grace waiting time (Minutes) </label><span class="star">*</span></td>        
		   <td>
			   <div class="new_input_field">
	              <input type="text" title="<?php echo __('Enter grace waiting time'); ?>" class="required" name="grace_waiting_time" id="grace_waiting_time" value="<?php echo isset($model_details['grace_waiting_time']) &&!array_key_exists('grace_waiting_time',$postvalue)? trim($model_details['grace_waiting_time']):$postvalue['grace_waiting_time']; ?>" maxlength="3"  onkeypress="return isNumber(event)" />
	              <?php if(isset($errors) && array_key_exists('grace_waiting_time',$errors)){ echo "<span class='error'>".ucfirst($errors['grace_waiting_time'])."</span>";}?>
			   </div>
           </td>   	
        </tr>

        <!--26 feb 2021-->
        <tr style="display:none;">
           <td valign="top" width="20%"><label>Book Later Interval for Surge Price (Minutes) </label><span class="star">*</span></td>        
		   <td>
			   <div class="new_input_field">
	              <input type="text" title="<?php echo __('Enter book later interval time'); ?>" class="required" name="book_later_time_interval" id="book_later_time_interval" value="<?php echo isset($model_details['book_later_time_interval']) &&!array_key_exists('book_later_time_interval',$postvalue)? trim($model_details['book_later_time_interval']):$postvalue['book_later_time_interval']; ?>" maxlength="5"  onkeypress="return isNumber(event)" />
	              <?php if(isset($errors) && array_key_exists('book_later_time_interval',$errors)){ echo "<span class='error'>".ucfirst($errors['book_later_time_interval'])."</span>";}?>
			   </div>
           </td>   	
        </tr>

        <tr style="display:none;">
           <td valign="top" width="20%"><label>Book Later Fare for Surge Price</label><span class="star">*</span></td>        
		   <td>
			   <div class="new_input_field">
	              <input type="number" title="<?php echo __('Enter book later fare'); ?>" class="required" name="book_later_fare" id="book_later_fare" value="<?php echo isset($model_details['book_later_fare']) &&!array_key_exists('book_later_fare',$postvalue)? trim($model_details['book_later_fare']):$postvalue['book_later_fare']; ?>" maxlength="5"  onkeypress="return isNumberic(event)" style="width: 183px;border: 1px solid #ccc;" />
	              <?php if(isset($errors) && array_key_exists('book_later_fare',$errors)){ echo "<span class='error'>".ucfirst($errors['book_later_fare'])."</span>";}?>
			   </div>
           </td>   	
        </tr>

        <tr style="display:none;">
           <td valign="top" width="20%"><label>Book Later Display Fare for Surge Price</label><span class="star">*</span></td>        
		   <td>
			   <div class="new_input_field">
	              <input type="text" title="<?php echo __('Enter book later display fare'); ?>" class="required" name="book_later_display_fare" id="book_later_display_fare" value="<?php echo isset($model_details['book_later_display_fare']) &&!array_key_exists('book_later_display_fare',$postvalue)? trim($model_details['book_later_display_fare']):$postvalue['book_later_display_fare']; ?>" maxlength="10" />
	              <?php if(isset($errors) && array_key_exists('book_later_display_fare',$errors)){ echo "<span class='error'>".ucfirst($errors['book_later_display_fare'])."</span>";}?>
			   </div>
           </td>   	
        </tr>
        <!--26 feb 2021-->

		</tr>



          
            <tr>
           <td valign="top" width="20%"><label><?php echo __('night_charge'); ?></label><span class="star">*</span></td>        
	       <td>
			   <?php $nfield_type =''; $nfield_type =  isset($model_details['night_charge']) &&!array_key_exists('night_charge',$postvalue)? trim($model_details['night_charge']):$postvalue['night_charge']; ?>
		    <div class="formRight">
			<div class="selector" id="uniform-user_type">
		      <select name="night_charge" id="night_charge" class="required" title="<?php echo __('enterthenight_charge'); ?>">
		       <option value="">--Select--</option>
              <option value="1" <?php if($nfield_type == '1') { echo 'selected=selected'; } ?>>Yes</option>
              <option value="0" <?php if($nfield_type == '0') { echo 'selected=selected'; } ?>>No</option>
              </select>
            </div>
		   </div>
		   <div class="new_input_field">
              <label for="night_charge" generated="true" style="display:none;" class="errorvalid"><?php echo __('enterthenight_charge'); ?></label>	
              <?php if(isset($errors) && array_key_exists('night_charge',$errors)){ echo "<span class='error'>".ucfirst($errors['night_charge'])."</span>";}?>
              </div>
           </td>   	
           </tr> 
           </table>
              <?php if(isset($postvalue['night_charge'])) { $nyt_charge = $postvalue['night_charge']; }else{ $nyt_charge=""; } ?>
            
			   <?php  $nc = $model_details['night_charge']; ?>
		<div  id="charge_det" <?php if($nc==1 || $nyt_charge==1){ ?> style="display:block;padding-left:5px;" <?php }else if($nc==0 || $nyt_charge==0 || $nyt_charge==""){ ?> style="display:none;padding-left:5px;" <?php } ?>>
           <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
           <td valign="top" width="20%"><label><?php echo __('night_timing_from'); ?></label><span class="star">*</span></td>        
	       <td>
		   <div class="new_input_field_charge">
              <input type="text" readonly title="<?php echo __('enterthenight_timing_from'); ?>" class="required" name="night_timing_from" id="night_timing_from" value="<?php echo isset($model_details['night_timing_from']) &&!array_key_exists('night_timing_from',$postvalue)? trim($model_details['night_timing_from']):$postvalue['night_timing_from']; ?>"  minlength="7" maxlength="30"  />
              <?php if(isset($errors) && array_key_exists('night_timing_from',$errors)){ echo "<span class='error'>".ucfirst($errors['night_timing_from'])."</span>";}?>
		   </div>
           </td>   	
           </tr>            
           <tr>
           <td></td>        
	       <td id="valid_from" style="display:none">
			    <div class="new_input_field_charge errorvalid">
			    Kindly select the time greater than or equal to <?php echo NIGHT_FROM;?>
			   </div>
			   </td>
	       </tr>
           <tr>
           <td valign="top" width="20%"><label><?php echo __('night_timing_to'); ?></label><span class="star">*</span></td>        
	       <td>
		   <div class="new_input_field_charge">
              <input type="text" readonly title="<?php echo __('enterthenight_timing_to'); ?>" class="required" name="night_timing_to" id="night_timing_to" value="<?php echo isset($model_details['night_timing_to']) &&!array_key_exists('night_timing_to',$postvalue)? trim($model_details['night_timing_to']):$postvalue['night_timing_to']; ?>"  minlength="7" maxlength="30"  />
              <?php if(isset($errors) && array_key_exists('night_timing_to',$errors)){ echo "<span class='error'>".ucfirst($errors['night_timing_to'])."</span>";}?>
		   </div>
           </td>   	
           </tr> 
           <tr>
           <td></td>        
	       <td id="valid_to" style="display:none">
			    <div class="new_input_field_charge errorvalid">
			    Kindly select the time less than or equal to <?php echo NIGHT_TO;?>
			   </div>
			   </td>
	       </tr>
           <tr>
           <td></td>        
	       <td id="valid" style="display:none">
			    <div class="new_input_field_charge errorvalid">
			   End Time Always Greater then Start Time
			   </div>
			   </td>
	       </tr>
           
           <tr>
           <td valign="top" width="20%"><label><?php echo __('night_fare'); ?></label><span class="star">*</span></td>        
	       <td>
		   <div class="new_input_field_charge">
              <input type="text" title="<?php echo __('enterthenight_fare'); ?>" class="required" name="night_fare" id="night_fare" value="<?php echo isset($model_details['night_fare']) &&!array_key_exists('night_fare',$postvalue)? trim($model_details['night_fare']):$postvalue['night_fare']; ?>"  minlength="1" maxlength="30"  />
              <?php if(isset($errors) && array_key_exists('night_fare',$errors)){ echo "<span class='error'>".ucfirst($errors['night_fare'])."</span>";}?>
		   </div>
           </td>   	
           </tr> 
	  </table>
	  </div>
	  <!--Fare Details end-->
	  
	  <!-- evening fare details start -->
	   <table border="0" cellpadding="0" cellspacing="0" width="100%">
		   <tr>
			   <td valign="top" width="20%"><label><?php echo __('evening_charge'); ?></label><span class="star">*</span></td>        
			   <td style="padding:5px;">
				   <?php $efield_type =''; $efield_type =  isset($model_details['evening_charge']) &&!array_key_exists('evening_charge',$postvalue)? trim($model_details['evening_charge']):$postvalue['evening_charge']; ?>
			   <div class="formRight">
				<div class="selector" id="uniform-user_type">
				  <select name="evening_charge" id="evening_charge" class="required" title="<?php echo __('entertheevening_charge'); ?>">
				  <option value="">--Select--</option>
				  <option value="1" <?php if($efield_type == '1') { echo 'selected=selected'; } ?>>Yes</option>
				  <option value="0" <?php if($efield_type == '0') { echo 'selected=selected'; } ?>>No</option>
				  </select>
				  
			   </div>
			   </div>
				<div class="new_input_field">
				  <label for="evening_charge" generated="true" style="display:none;" class="errorvalid"><?php echo __('entertheevening_charge'); ?></label>	
				  <?php if(isset($errors) && array_key_exists('evening_charge',$errors)){ echo "<span class='error'>".ucfirst($errors['evening_charge'])."</span>";}?>
				  </div>
			   </td>   	
		   </tr>
       </table>
       
       <div id="evening_charge_det" <?php if($efield_type==1){ ?> style="display:block;" <?php }else if($efield_type==0){ ?> style="display:none;padding-left:5px;" <?php } ?>>
			<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tr>
			   <td valign="top" width="20%"><label><?php echo __('evening_timing_from'); ?></label><span class="star">*</span></td>        
			   <td>
			   <div class="new_input_field_charge">
				  
				  <input type="text" title="<?php echo __('entertheevening_timing_from'); ?>"  readonly class="required" name="evening_timing_from" id="evening_timing_from" value="<?php echo isset($model_details['evening_timing_from']) &&!array_key_exists('evening_timing_from',$postvalue)? trim($model_details['evening_timing_from']):$postvalue['evening_timing_from']; ?>"  minlength="7" maxlength="30"  />
				  <?php if(isset($errors) && array_key_exists('evening_timing_from',$errors)){ echo "<span class='error'>".ucfirst($errors['evening_timing_from'])."</span>";}?>
			   </div>
			   </td>   	
			   </tr>            
				<tr>
			   <td></td>        
			   <td id="evening_valid_from" style="display:none">
					<div class="new_input_field_charge errorvalid">
					<!--Kindly select the time greater than or equal to <?php //echo EVENING_FROM;?> -->
					Kindly select the time between <?php echo EVENING_FROM;?> and <?php echo EVENING_TO;?>
				   </div>
				   </td>
			   </tr>
			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('evening_timing_to'); ?></label><span class="star">*</span></td>        
			   <td>
			   <div class="new_input_field_charge">
				  <input type="text" readonly title="<?php echo __('entertheevening_timing_to'); ?>" class="required" name="evening_timing_to" id="evening_timing_to" value="<?php echo isset($model_details['evening_timing_to']) &&!array_key_exists('evening_timing_to',$postvalue)? trim($model_details['evening_timing_to']):$postvalue['evening_timing_to']; ?>"  minlength="7" maxlength="30"  />
				  <?php if(isset($errors) && array_key_exists('evening_timing_to',$errors)){ echo "<span class='error'>".ucfirst($errors['evening_timing_to'])."</span>";}?>
			   </div>
			   </td>   	
			   </tr> 
			   
			   <tr>
			   <td></td>        
			  <td id="evening_valid_to" style="display:none">
					<div class="new_input_field_charge errorvalid">
					<!--Kindly select the time less than or equal to <?php //echo EVENING_TO;?> -->
					Kindly select the time between <?php echo EVENING_FROM;?> and <?php echo EVENING_TO;?>
				   </div>
				   </td>
				   
				   <td id="evening_valid_to_greater" style="display:none">
					<div class="new_input_field_charge errorvalid">
					"Evening timing to" should be greater than "Evening timing from".
				   </div>
				   </td>
			   </tr>
			   
			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('evening_fare'); ?></label><span class="star">*</span></td>        
			   <td>
			   <div class="new_input_field_charge">
				  <input type="text" title="<?php echo __('entertheevening_fare'); ?>" class="required " name="evening_fare" id="evening_fare" value="<?php echo isset($model_details['evening_fare']) &&!array_key_exists('evening_fare',$postvalue)? trim($model_details['evening_fare']):$postvalue['evening_fare']; ?>"  minlength="1" maxlength="30"  />
				  <?php if(isset($errors) && array_key_exists('evening_fare',$errors)){ echo "<span class='error'>".ucfirst($errors['evening_fare'])."</span>";}?>
			   </div>
			   </td>   	
			   </tr>
				 <!--Fare Details end-->



				 
				 
				 
				 
				 
		   </table>
	   </div>
       <!-- evening fare details end -->
	  
	<table>
	<tr>
	<td>&nbsp;</td>
	<td colspan="" class="star">*<?php echo __('required_label'); ?></td>
	</tr>                         
                    <tr>
			<td>&nbsp;</td>
                        <td colspan="">
                            <br />
                    
                            <div class="button blackB">     <input type="button" value="<?php echo __('button_back'); ?>" onclick="window.history.go(-1)" /></div>
                            <div class="button dredB">   <input type="reset" value="<?php echo __('button_reset'); ?>" title="<?php echo __('button_reset'); ?>" /></div>
                            <div class="button greenB">  <input type="submit" value="<?php echo __('submit' );?>" name="submit_editmodel" title="<?php echo __('submit' );?>" /></div>
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
	$('#mod_fare_list').hide();
	toggle(13);
	$("#night_timing_from, #evening_timing_from").timepicker( {
		showTimepicker:true,
		showSecond: true,
		timeFormat: 'hh:mm:ss',
		stepHour: 1,
		stepMinute: 1,
		minDateTime : new Date("<?php echo date('H:i:s'); ?>"),
		stepSecond: 1
	} );
	
	$("#night_timing_to, #evening_timing_to").timepicker( {
		showTimepicker:true,
		showSecond: true,
		timeFormat: 'hh:mm:ss',
		stepHour: 1,
		stepMinute: 1,
		minDateTime : new Date("<?php echo date('H:i:s'); ?>"),
		stepSecond: 1
	} );

	//to allow numbers only
	$("#model_size" ).keyup(function() {
		this.value = this.value.replace(/[`~!@#$%^&*()\s_|+\-=?;:'",.<>\{\}\[\]\\\/A-Z]/gi, '');
	});
	
	$("#night_charge").change(function() {
		var night_charge = $("#night_charge").val(); 
		if(night_charge==1) {
			$("#charge_det").css('display','block');
			$("#night_timing_from").val("");
			$("#night_timing_to").val("");				
			$("#night_fare").val("");
		} else if(night_charge==0) {
			$("#charge_det").css('display','none');
			$("#night_timing_from").val("00:00:00");
			$("#night_timing_to").val("00:00:00");				
			$("#night_fare").val("0");
			/*$("#night_timing_from").removeClass("required hasDatepicker").addClass("hasDatepicker");				
			$("#night_timing_to").removeClass("required hasDatepicker").addClass("hasDatepicker");				
			$("#night_fare").removeClass("required numbersdots");*/
		} else if(night_charge=="") {
			$("#charge_det").css('display','none');
			$("#night_timing_from").val("");
			$("#night_timing_to").val("");				
			$("#night_fare").val("");
		}
    });
    
    $('#night_timing_from').change(function(){
        //var st = parseInt($('#night_timing_from').val().replace(':', ''), 10); 
        //var et = parseInt($('#night_timing_to').val().replace(':', ''), 10);
        var st = $('#night_timing_from').val();
        var et = $('#night_timing_to').val();
        
        var base = "Wed, 09 Aug 1995 ";
		var pickuptime_d = Date.parse(base+st.substr(0, 5)+":00"+st.substr(5));
		var currentTime_d = Date.parse(base+et.substr(0, 5)+":00"+et.substr(5));
		if ((st >= '<?php echo NIGHT_FROM;?>') ) {
			$("#valid_from").css('display','none');			
               return true;
		} else {
			 $("#valid_from").css('display','block');
			 $("#night_timing_from").val("");
               return false;
		}
    });
    
    $('#night_timing_to').change(function(){
        //var st = parseInt($('#night_timing_from').val().replace(':', ''), 10); 
        //var et = parseInt($('#night_timing_to').val().replace(':', ''), 10);
        var st = $('#night_timing_from').val();
        var et = $('#night_timing_to').val();
        var base = "Wed, 09 Aug 1995 ";
		var pickuptime_d = Date.parse(base+st.substr(0, 5)+":00"+st.substr(5));
		var currentTime_d = Date.parse(base+et.substr(0, 5)+":00"+et.substr(5));
		if ((et <= '<?php echo NIGHT_TO;?>') || (et >= '22:00:00')) {
			$("#valid_to").css('display','none');
               return true;
		} else {
			 $("#valid_to").css('display','block');
			 $("#night_timing_to").val("");
            return false;
		}
    });
    
    $('#evening_timing_from').change(function(){
        var st = $('#evening_timing_from').val();
        var et = $('#evening_timing_to').val();
        var base = "Wed, 09 Aug 1995 ";
		var pickuptime_d = Date.parse(base+st.substr(0, 5)+":00"+st.substr(5));
		var currentTime_d = Date.parse(base+et.substr(0, 5)+":00"+et.substr(5));
		if ((st >= '<?php echo EVENING_FROM;?>') && (st <= '<?php echo EVENING_TO;?>')) {
			$("#evening_valid_from").css('display','none');			
               return true;
		} else {
			 $("#evening_valid_from").css('display','block');
			 $("#evening_timing_from").val("");
               return false;
		}
    });
    
     $('#evening_timing_to').change(function(){
        var st = $('#evening_timing_from').val();
        var et = $('#evening_timing_to').val();
        var base = "Wed, 09 Aug 1995 ";
		var pickuptime_d = Date.parse(base+st.substr(0, 5)+":00"+st.substr(5));
		var currentTime_d = Date.parse(base+et.substr(0, 5)+":00"+et.substr(5));
		if ((et >= '<?php echo EVENING_FROM;?>') && (et <= '<?php echo EVENING_TO;?>') && et >= st) {
			$("#evening_valid_to").css('display','none');
               return true;
		} else {
			 if(et < st) {
				$("#evening_valid_to").css('display','none');
				$("#evening_valid_to_greater").css('display','block');
			} else {
				$("#evening_valid_to").css('display','block');
				$("#evening_valid_to_greater").css('display','none');
			}
			$("#evening_timing_to").val("");
            return false;
		}
    });
    
	$("#evening_charge").change(function() {
		var evening_charge = $("#evening_charge").val();
		if(evening_charge==1) {
			$("#evening_charge_det").css('display','block');
			$("#evening_timing_from").val("");
			$("#evening_timing_to").val("");				
			$("#evening_fare").val("");
		} else if(evening_charge==0) {
			$("#evening_charge_det").css('display','none');
			$("#evening_timing_from").val("00:00:00");
			$("#evening_timing_to").val("00:00:00");				
			$("#evening_fare").val("0");
		} else {
			$("#evening_charge_det").css('display','none');
			$("#evening_timing_from").val("");
			$("#evening_timing_to").val("");				
			$("#evening_fare").val("");
		}
    });
    jQuery("#editmotor_form").validate();
	
	var time = $("#time").val();
	$(".minrange").text(time);
	$("#time").change(function() {
		$(".minrange").text($(this).val());
	});

	var per_min_time = $("#per_min_time").val();
	$(".per_minrange").text(per_min_time);
	$("#per_min_time").change(function() {
		$(".per_minrange").text($(this).val());
	});
});

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

function isNumberic(e) {
  var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;
  var value = Number(e.target.value + e.key) || 0;
  

  if ((keyCode >= 37 && keyCode <= 40) || (keyCode != 47) || (keyCode == 8 || keyCode == 9 || keyCode == 13) || (keyCode >= 45 && keyCode <= 57)) {
    return isValidNumber(value);
  }
  return false;
}

function isValidNumber (number) {
  return (-100 <= number && number <= 10000 )
}
</script>
