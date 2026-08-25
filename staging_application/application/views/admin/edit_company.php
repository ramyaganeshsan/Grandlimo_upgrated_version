<?php defined('SYSPATH') OR die("No direct access allowed.");
$user_type  = $_SESSION['user_type'];
?>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery.validate.js"></script>
<!-- time picker start-->

<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle">    
         <form name="editcompany_form" id="editcompany_form" class="form" action="" method="post" enctype="multipart/form-data">
          <table border="0" cellpadding="5" cellspacing="0" width="100%">
	<tr>
	<td class="titlebold"><?php echo ucfirst(__('personalinform')); ?></td>
	<td></td>	          
	</tr>
           <tr>
			   <input type="hidden" name="company_id" value="<?php echo $company_details[0]['company_id']; ?>"/>
           <td valign="top" width="20%"><label><?php echo __('firstname'); ?></label><span class="star">*</span></td>        
	   <td>
		   <div class="new_input_field">	
              <input type="text"  maxlength="30" minlength="4"  class="required" title="<?php echo __('enterfirstname_msg'); ?>" id="firstname" name="firstname" value="<?php echo isset($company_details[0]['name']) &&!array_key_exists('firstname',$postvalue)? trim($company_details[0]['name']):$postvalue['firstname']; ?>" />
              <?php if(isset($errors) && array_key_exists('firstname',$errors)){ echo "<span class='error'>".ucfirst($errors['firstname'])."</span>";}?>
		   </div>
	   </td>   	
           </tr> 	
				   
           <tr>
           <td valign="top" width="20%"><label><?php echo __('lastname'); ?></label><span class="star">*</span></td>        
	   <td>
		   <div class="new_input_field">	
              <input type="text"  maxlength="30" minlength="1" class="required" title="<?php echo __('enterlastname_msg'); ?>" id="lastname" name="lastname" value="<?php echo isset($company_details[0]['lastname']) &&!array_key_exists('lastname',$postvalue)? trim($company_details[0]['lastname']):$postvalue['lastname']; ?>" />
              <?php if(isset($errors) && array_key_exists('lastname',$errors)){ echo "<span class='error'>".ucfirst($errors['lastname'])."</span>";}?>
		   </div>
	   </td>   	
           </tr> 
           
           <tr>
           <td valign="top" width="20%"><label><?php echo __('email'); ?></label><span class="star">*</span></td>        
	   <td>
		   <div class="new_input_field">	
              <input type="text"  title="<?php echo __('enteremailaddress'); ?>" class="required" id="email" name="email" value="<?php echo isset($company_details[0]['email']) &&!array_key_exists('email',$postvalue)? trim($company_details[0]['email']):$postvalue['email']; ?>" maxlength="50" /><br>
              <?php if(isset($errors) && array_key_exists('email',$errors)){ echo "<span class='error'>".ucfirst($errors['email'])."</span>";}?>
		   </div>
	   </td>   	
           </tr> 
           
           <tr>
           <td valign="top" width="20%"><label><?php echo __('mobile'); ?></label><span class="star">*</span></td>        
	   <td>
		   <div class="new_input_field">	
              <input type="text" title="<?php echo __('entermobileno'); ?>" id="phone" name="phone" value="<?php echo isset($company_details[0]['phone']) &&!array_key_exists('phone',$postvalue)? trim($company_details[0]['phone']):$postvalue['phone']; ?>"
              minlength="7" maxlength="20" />
              <?php if(isset($errors) && array_key_exists('phone',$errors)){ echo "<span class='error'>".ucfirst($errors['phone'])."</span>";}?>
		   </div>
	   </td>   	
           </tr>                       		   

        <?php /*   <tr>
           <td valign="top" width="20%"><label><?php echo __('paypal_api_username'); ?></label><span class="star">*</span></td>        
	   <td>
		   <div class="new_input_field">
              <input type="text" title="<?php echo __('enter_paypal_api_username'); ?>" name="paypal_api_username" id="paypal_api_username" class="required" value="<?php echo isset($company_details[0]['company_paypal_username']) &&!array_key_exists('paypal_api_username',$postvalue)? trim($company_details[0]['company_paypal_username']):$postvalue['paypal_api_username']; ?>" maxlength="150" />
              <?php if(isset($errors) && array_key_exists('paypal_api_username',$errors)){ echo "<span class='error'>".ucfirst($errors['paypal_api_username'])."</span>";}?>
		   </div>
           </td>   	
           </tr> 
           
           <tr>
           <td valign="top" width="20%"><label><?php echo __('paypal_api_password'); ?></label><span class="star">*</span></td>        
	   <td>
		   <div class="new_input_field">
              <input type="text" title="<?php echo __('enter_paypal_api_password'); ?>" name="paypal_api_password" id="paypal_api_password" class="required" value="<?php echo isset($company_details[0]['company_paypal_password']) &&!array_key_exists('paypal_api_password',$postvalue)? trim($company_details[0]['company_paypal_password']):$postvalue['paypal_api_password']; ?>" maxlength="150" />
              <?php if(isset($errors) && array_key_exists('paypal_api_password',$errors)){ echo "<span class='error'>".ucfirst($errors['paypal_api_password'])."</span>";}?>
		   </div>
           </td>   	
           </tr> 
           
            <tr>
           <td valign="top" width="20%"><label><?php echo __('paypal_api_signature'); ?></label><span class="star">*</span></td>        
	   <td>
		   <div class="new_input_field">
              <input type="text" title="<?php echo __('enter_paypal_api_signature'); ?>" name="paypal_api_signature" id="paypal_api_signature" class="required" value="<?php echo isset($company_details[0]['company_paypal_signature']) &&!array_key_exists('paypal_api_signature',$postvalue)? trim($company_details[0]['company_paypal_signature']):$postvalue['paypal_api_signature']; ?>" maxlength="150" />

              <?php if(isset($errors) && array_key_exists('paypal_api_signature',$errors)){ echo "<span class='error'>".ucfirst($errors['paypal_api_signature'])."</span>";}?>
		   </div>
           </td>   	
           </tr>

			<tr>
				<td valign="top" width="20%"><label><?php echo __('payment_method'); ?></label><span class="star">*</span></td>   
				<td><div class="new_input_field">
				
				<input type="radio" name="payment_method" id="payment_method" title="<?php echo __('enter_payment_method'); ?>"  value="T" <?php if($company_details[0]['payment_method']=='T'){ echo 'checked=checked';}?> ><?php echo 'Test Mode'; ?>
				
				<input type="radio" name="payment_method" id="payment_method" title="<?php echo __('enter_payment_method'); ?>"  value="L" <?php if($company_details[0]['payment_method']=='L'){ echo 'checked=checked';}?>><?php  echo 'Live Mode'; ?>
				</div>
				<?php if(isset($errors) && array_key_exists('payment_method',$errors)){ echo "<span class='error'>".ucfirst($errors['payment_method'])."</span>";}?></td>
			</tr>
		   
           <tr> */ ?>
           <td valign="top" width="20%"><label><?php echo __('address'); ?></label><span class="star">*</span></td>        
	   <td>
		   <div class="new_input_field">	
              <textarea name="address" id="address" class="required" title="<?php echo __('enteraddress'); ?>" rows="7" cols="35"><?php echo isset($company_details[0]['address']) &&!array_key_exists('address',$postvalue)? trim($company_details[0]['address']):$postvalue['address']; ?></textarea>
              <?php if(isset($errors) && array_key_exists('address',$errors)){ echo "<span class='error'>".$errors['address']."</span>";}?>
		   </div>
	   </td>   	
           </tr>  
           
	   <tr>
		<td><?php echo ucfirst(__('companyinformation')); ?></td>
		<td></td>	          
	   </tr>       
       
           
           <tr>
           <td valign="top" width="20%"><label><?php echo __('companyname'); ?></label><span class="star">*</span></td>        
	   <td>
		   <div class="new_input_field">	
              <input type="text"  maxlength="30" minlength="4"  class="required" title="<?php echo __('enterthecompanyname_msg'); ?>" id="company_name" name="company_name" value="<?php echo isset($company_details[0]['company_name'][0]) &&!array_key_exists('company_name',$postvalue)? ($company_details[0]['company_name'][0]):$postvalue['company_name']; ?>" />
              <?php if(isset($errors) && array_key_exists('company_name',$errors)){ echo "<span class='error'>".ucfirst($errors['company_name'])."</span>";}?>
		   </div>
	   </td>   	
           </tr>  
           </tr>   

           <td valign="top" width="20%"><label><?php echo __('company_domain'); ?></label><span class="star">*</span></td>        
	   <td>
		   <div class="new_input_field">
              <input type="text" title="<?php echo __('enter_company_domain'); ?>"  name="domain_name" id="domain_name" value="<?php if(isset($company_details[0]['company_domain'][0])){ echo $company_details[0]['company_domain'][0]; }?>"  minlength="4" maxlength="15"  style="display:inline" readonly="readonly"/><span><?php echo SUB_DOMAIN_NAME; ?></span>
              <?php if(isset($errors) && array_key_exists('domain_name',$errors)){ echo "<span class='error'>".ucfirst($errors['domain_name'])."</span>";}?>
		   </div>
           </td>   	
           </tr>                        		   
           <tr>
           <td valign="top" width="20%"><label><?php echo __('companyaddress'); ?></label><span class="star">*</span></td>        
	   <td>
		   <div class="new_input_field">	
              <textarea name="company_address" id="company_address"  class="required" title="<?php echo __('enterthecompanyaddress'); ?>" rows="7" cols="35"><?php echo isset($company_details[0]['company_address'][0]) &&!array_key_exists('company_address',$postvalue)? ($company_details[0]['company_address'][0]):$postvalue['company_address']; ?></textarea>
              <?php if(isset($errors) && array_key_exists('company_address',$errors)){ echo "<span class='error'>".ucfirst($errors['company_address'])."</span>";}?>
		   </div>
	   </td>   	
           </tr>  	          
 
<tr>
	<?php
		$country_field =  isset($company_details[0]['company_country'][0]) &&!array_key_exists('country',$postvalue)? ($company_details[0]['company_country'][0]):$postvalue['country'];
	?>
	<td valign="top" width="20%"><label><?php echo __('country_label'); ?></label><span class="star">*</span></td>        
	<td>
	<div class="formRight">
	<div class="selector" id="uniform-user_type">
	<span><?php echo __('select_label'); ?></span>
               <select  title="<?php echo __('select_the_country'); ?>" class="required" <?php if($_SESSION['user_type']== 'C' || $_SESSION['user_type']== 'M' ) { ?> name="countrys" disabled <?php }else{ ?> name="country" id="country" <?php } ?>>
              <option value=""><?php echo __('select_label'); ?></option>
              <?php foreach($country_details as $country_list) { ?>
              <option value="<?php echo $country_list['_id']; ?>" <?php if($country_field == $country_list['_id']) { echo 'selected=selected'; } ?>><?php echo ucfirst($country_list['country_name']); ?></option>
              <?php } ?>
              </select>
			<?php if($_SESSION['user_type']== 'C' || $_SESSION['user_type']== 'M' ) { ?> <input type="hidden" name="country" id="country" value="<?php echo $country_field; ?>"> <?php } ?>
        </div>
	</div>
		<label for="country" generated="true" style="display:none" class="errorvalid"><?php echo __('select_the_country'); ?></label>	
              <?php if(isset($errors) && array_key_exists('country',$errors)){ echo "<span class='error'>".ucfirst($errors['country'])."</span>";}?>

	</td>   	
	</tr>

	<tr>
	<?php
	$state_field =  isset($company_details[0]['company_state'][0]) &&!array_key_exists('state',$postvalue)? ($company_details[0]['company_state'][0]):$postvalue['state'];
	?>

	<td valign="top" width="20%"><label><?php echo __('state_label'); ?></label><span class="star">*</span></td>
	<td>
	<div class="formRight">
	<div class="selector" id="uniform-user_type">
	<span><?php echo __('select_label'); ?></span>
	<div id="state_list">
		<select name="state" id="state" onchange="change_city_drop();" class="required" title="<?php echo __('select_the_state'); ?>">
		<option value=""><?php echo __('select_label'); ?></option>
		<?php
		foreach($state_details as $state_list) {  ?>
		<option value="<?php echo $state_list['state_id']; ?>" <?php if($state_field == $state_list['state_id']) { echo 'selected=selected'; } ?> ><?php echo ucfirst($state_list["state_name"]); ?></option>
		<?php	} ?>
		</select>
	</div>	
		</div></div>
		<label for="state" generated="true" style="display:none" class="errorvalid"><?php echo __('select_the_state'); ?></label>	
              <?php if(isset($errors) && array_key_exists('state',$errors)){ echo "<span class='error'>".ucfirst($errors['state'])."</span>"; }?>
        </td>      
	</tr>
	
	<tr>
	<?php
	$city_field ='';
	$city_field =  isset($company_details[0]['company_city'][0]) &&!array_key_exists('city',$postvalue)? ($company_details[0]['company_city'][0]):$postvalue['city']; ?>
	<td valign="top" width="20%"><label><?php echo __('city_label'); ?></label><span class="star">*</span></td>        
	<td>
		<div class="formRight">
		<div class="selector" id="uniform-user_type">
		<span><?php echo __('select_label'); ?></span>
		<div id="city_list">
			<select name="city" id="city"  class="required" title="<?php echo __('select_the_city'); ?>">
			<option value=""><?php echo __('select_label'); ?></option>
			<?php
			foreach($city_details as $city_list) {  ?>
			<option value="<?php echo $city_list['city_id']; ?>" <?php if($city_field == $city_list['city_id']) { echo 'selected=selected'; } ?> ><?php echo ucfirst($city_list["city_name"]); ?></option>
			<?php	} ?>
			</select>
		</div>	
		</div>
		</div>
		<label for="city" generated="true" style="display:none" class="errorvalid"><?php echo __('select_the_city'); ?></label>	
		 <?php if(isset($errors) && array_key_exists('city',$errors)){ echo "<span class='error'>".ucfirst($errors['city'])."</span>"; }?>
	</td>   	
	</tr>
		<input type="hidden" name="currency_symbol" id="currency_symbol" value="<?php echo CURRENCY; ?>"/>
		<input type="hidden" name="currency_code" id="currency_code" value="<?php echo CURRENCY_FORMAT; ?>"/>
		<tr>
		<?php $time_zone ='';
		$time_zone =  isset($company_details[0]['time_zone'][0]) &&!array_key_exists('time_zone',$postvalue)? ($company_details[0]['time_zone'][0]):$postvalue['time_zone'];
		?>

		<td valign="top" width="20%"><label><?php echo __('time_zone'); ?></label><span class="star">*</span></td>
		<td>
		<div class="formRight">
		<div class="" >
		
		<div id="timezone_list">
			<select style="width:200px" title="<?php echo __('select_time_zone'); ?>"  <?php if($_SESSION['user_type']== 'C' || $_SESSION['user_type']== 'M' ) { ?> disabled name="time_zones" id="time_zone" <?php }else{?> name="time_zone" id="time_zone" class="form-control js-example-basic-single required" <?php } ?>>
			<option value=""><?php echo __('select_label'); ?></option>
			<?php

			$timezone = unserialize(SELECT_TIMEZONE);

			foreach($timezone as $key => $value) {  ?>
			<option value="<?php echo $value; ?>" <?php if($time_zone == $value) { echo 'selected=selected'; } ?> ><?php echo ucfirst($value); ?></option>
			<?php	} ?>
			</select>
			<?php if($_SESSION['user_type']== 'C' || $_SESSION['user_type']== 'M' ) { ?> <input type="hidden" name="time_zone" id="time_zone" value="<?php echo $time_zone; ?>">  <?php } ?> 
		</div>	
			</div></div>
			<label for="time_zone" generated="true" style="display:none" class="errorvalid"><?php echo __('select_time_zone'); ?></label>	
		      <?php if(isset($errors) && array_key_exists('time_zone',$errors)){ echo "<span class='error'>".ucfirst($errors['time_zone'])."</span>"; }?>
		  </td>    
		</tr>
 
		<tr>
			<td valign="top" width="20%"><label><?php echo __('company_image_label'); ?> </label></td>   			
			<td> 
				<div class="new_input_field">
					<input type="file" class="imageonly" name="taxi_image" id="taxi_image" title="<?php echo __('select_taxi_image'); ?>" value="">	
				</div>
				<div class="site_logo" >
					<?php  if(file_exists($_SERVER["DOCUMENT_ROOT"].'/public/uploads/company/'.$company_details[0]['userid'][0].'.png')){  ?> 
						<img width="75" height="75" src="<?php echo URL_BASE.COMPANY_IMG_IMGPATH.$company_details[0]['userid'][0].'.png?q='.time();?>"/>
					<?php }else{ ?>
						<img width="75" height="75"  src="<?php echo URL_BASE;?>public/images/no_image.png?q="<?php time();?>/>
					<?php } ?>
				</div><br />
				<?php if(isset($errors) && array_key_exists('taxi_image',$errors)){ echo "<span class='error'>".ucfirst($errors['taxi_image'])."</span>";}?>
			</td>
		</tr>
	<?php if($_SESSION['user_type']=="A"){ ?>
	<!-----Company Payment settings----->
		<table class="0 sTable responsive" cellpadding="5" cellspacing="0" style="border:none;" width="85%">
			<tr>
				<td style="border:none;" valign="top" width="20%"><label><b><?php echo __('payment_module_settings'); ?><span class="star">*</span></b></label></td>   
			</tr>
		</table>
		<?php if(count($get_company_payment_settings)>0){ ?>
			<table class="0 sTable responsive" style="border-top:1px solid #cdcdcd;" cellpadding="5" cellspacing="0" width="100%">
				<tr>
					<td align="center" valign="top" width="10%"><label><?php echo __('payment_module_status'); ?></label></td>
					<td align="center" valign="top" width="10%"><label><?php echo __('payment_module_name'); ?></label></td>
					<td align="center" valign="top" width="10%"><?php echo __('default_gateway'); ?></td>
				</tr>				
				<?php $i=0;
				foreach($get_company_payment_settings as $resultset) { ?>
				<tr>
					<td align="center"><input class="pay_mod"  type="checkbox" name="paymodstatus[]" value="<?php echo $resultset['pay_mod_id']; ?>" <?php if($resultset['pay_active']==1){echo 'checked="checked"'; }  ?> /></td> 
					<td align="center"><img src="<?php echo URL_BASE;?>public/images/<?php echo $resultset['pay_mod_image'] ?>"><div class="new_input_field"><label><?php echo $resultset['pay_mod_name'];?></label></div></td>
					<td align="center"><input type="radio" name="default[]" value="<?php echo $resultset['pay_mod_id'];?>" <?php if($resultset['pay_mod_default']==1){echo 'checked="checked"'; }  ?>  <?php if($i=='0'){ echo 'checked="checked"'; } ?> /></td>
					<input type="hidden" name="payid[]" value="<?php echo $resultset['pay_mod_id'];?>"  />
				</tr>
				<?php $i++; } ?>				
				<tr>
					<td colspan="3"><b><a href="javascript:selectToggle(true, 'editcompany_form');"><?php echo __('all_label');?></a></b><span class="pr2 pl2">|</span><b><a href="javascript:selectToggle(false, 'editcompany_form');"><?php echo __('select_none');?></a></b></td>
				</td>
				<tr>					
					<td colspan="3"><?php if(isset($errors) && array_key_exists('paymodstatus',$errors)){ echo "<span class='error'>".ucfirst($errors['paymodstatus'])."</span>";}?></td>
				</tr>
			</table>			
		<?php } else { ?>
    
			<table  class="0" cellpadding="5" cellspacing="0" width="85%">
				<tr>
					<td valign="top" width="20%"><label><b><?php echo __('payment_module_settings'); ?><span class="star">*</span></b></label></td>   
				</tr>
				<tr>
					<td valign="top" width="10%" ><label><?php echo __('payment_module_status'); ?></label></td><td valign="top" width="10%" ><label><?php echo __('payment_module_name'); ?></label></td><td valigin="top" width="10%"><?php echo __('default_gateway'); ?></td></tr>	

						<?php
						$i=0;
						foreach($payment_modules as $resultset) { ?>
							<tr>
							<td><input class="pay_mod"  type="checkbox" name="paymodstatus[]" value="<?php echo $resultset['_id']; ?>"/></td> <?php if(!array_key_exists('paymodstatus',$errors) && isset($post_values['paymodstatus'])){ if($post_values['paymodstatus'][$i]==$resultset['_id']){echo 'checked="checked"'; }  }  ?>
							<td><img src="<?php echo URL_BASE;?>public/images/<?php echo $resultset['pay_mod_image'] ?>"><div class="new_input_field"><label><?php echo $resultset['pay_mod_name'];?></label></div></td>
							<td><input type="radio" name="default[]" value="<?php echo $resultset['_id'];?>"  <?php if($i=='0'){ echo 'checked="checked"'; } ?> /></td>
							<input type="hidden" name="payid_add[]" value="<?php echo $resultset['_id'];?>"  />
							<input type="hidden" name="paymodname[]" value="<?php echo $resultset['pay_mod_name'];?>"  />
							<input type="hidden" name="paymodimage[]" value="<?php echo $resultset['pay_mod_image'];?>"  />
							</tr>
						<?php $i++; } ?>
						<tr>
						<td><b><a href="javascript:selectToggle(true, 'addcompany_form');"><?php echo __('all_label');?></a></b><span class="pr2 pl2">|</span><b><a href="javascript:selectToggle(false, 'addcompany_form');"><?php echo __('select_none');?></a></b></td>
						</td>
					<tr>
					<td>&nbsp;</td>
					<td><?php if(isset($errors) && array_key_exists('paymodstatus',$errors)){ echo "<span class='error'>".ucfirst($errors['paymodstatus'])."</span>";}?></td>
				</tr>
			</table>
		<?php } ?>
    <!-----Company Payment settings----->
    <?php } ?>
		<td>&nbsp;</td>	
		<table cellpadding="0" cellspacing="0" width="100%">
			<tr>		
			<td class="star">*<?php echo __('required_label'); ?></td>
			</tr>                         
			<tr>				 
				<td>					
					<div class="button blackB"><input type="button" value="<?php echo __('button_back'); ?>" onclick="window.history.go(-1)" /></div>
					<?php $country_id = isset($company_details[0]['company_country'][0]) ? $company_details[0]['company_country'][0] : '';
					$state_id =  isset($company_details[0]['company_state'][0]) ? $company_details[0]['company_state'][0] : '';
					$city_id =  isset($company_details[0]['company_city'][0]) ? $company_details[0]['company_city'][0] : '';
					?>
					<div class="button dredB"><input type="reset" onclick="change_state('<?php echo $country_id;?>','<?php echo $state_id;?>');change_city_drop('<?php echo $country_id;?>','<?php echo $state_id;?>','<?php echo $city_id;?>')" value="<?php echo __('button_reset'); ?>" title="<?php echo __('button_reset'); ?>" /></div>
					<div class="button greenB"><input type="submit" value="<?php echo __('submit' );?>" name="submit_addcompany" title="<?php echo __('submit' );?>" /></div>                            
				</td>
			</tr> 
		</table>
		<td>&nbsp;</td>
                </table>

        </form>
        </div>
        <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt"></div></div>
    </div>
</div>  
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/select2.js"></script>
<link rel="stylesheet" href="<?php echo URL_BASE;?>public/css/select2.css"/>
<script type="text/javascript">
$(document).ready(function(){
	$("#time_zone").select2();
	$("#phone" ).keyup(function() {
		//to allow left and right arrow key move
		if(event.which>=37 && event.which<=40) {
			return false;
		}
		this.value = this.value.replace(/[`~!@#$%^&*\s_|\=?;:'",.<>\{\}\[\]\\\/A-Z]/gi, '');
	});
	
	var field_val = $("#firstname").val();
	$("#firstname").focus().val("").val(field_val);
	var user_type = "<?php echo $user_type; ?>";
	if(user_type =='A') {
		toggle(5);
	}
	
	$("#editcompany_form").valid();
	$.validator.addMethod( "imageonly", function(value,element){
		var pathLength = value.length;
		var lastDot = value.lastIndexOf( ".");
		var fileType = value.substring(lastDot,pathLength).toLowerCase();
		return this.optional(element) || fileType.match(/(?:.jpg|.jpeg|.png)$/)
	}, "Please upload image(jpg,jpeg,png) files only");

	change_state('','');
	change_city_drop('','','');
	$("#company_name" ).keyup(function() {
		this.value = this.value.replace(/[`~!@#$%^*_|\=?;:+",.<>\{\}\[\]\\\/]/gi, '');
	});
});
$("#country").change(function() {
	var countryid= $("#country").val();
	var stateid= $("#state").val();
	$.ajax({
		url:"<?php echo URL_BASE;?>add/getlist_state",
		type:"get",
		data:"country_id="+countryid+"&state_id="+stateid,
		success:function(data){
			$('#state_list').html();
			$('#state_list').html(data);
		change_city_drop();
		},
		error:function(data)
		{
			//alert(cid);
		}
	});	
});

function change_state(country_id,state_id)
{
	var countryid= $("#country").val();
	var stateid= $("#state").val();
	if(country_id != '' && state_id != '') {
		countryid = country_id;
		stateid= state_id;
	}

	$.ajax({
		url:"<?php echo URL_BASE;?>add/getlist_state",
		type:"get",
		data:"country_id="+countryid+"&state_id="+stateid,
		success:function(data){

		$('#state_list').html();
		$('#state_list').html(data);
		},
		error:function(data)
		{
			//alert(cid);
		}
	});
}
    
function change_city_drop(country_id,state_id,city_id){
	var countryid= $("#country").val();
	var stateid= $("#state").val();
	var cityid= $("#city").val();
	if(country_id != '' && state_id != '' && city_id != '') {
		countryid = country_id;
		stateid = state_id;
		cityid = city_id;
	}
	$.ajax({
		url:"<?php echo URL_BASE;?>add/getassigntaxilist",
		type:"get",
		data:"country_id="+countryid+"&state_id="+stateid+"&city_id="+cityid,
		success:function(data){
			$('#city_list').html();
			$('#city_list').html(data);
		},
		error:function(data)
		{
			//alert(cid);
		}
	});	
}
function change_city()
{
	var stateid= $("#state").val();
	var countryid= $("#country").val();
	var cityid= $("#city").val();
	
	$.ajax({
		url:"<?php echo URL_BASE;?>add/getcitylist",
		type:"get",
		data:"country_id="+countryid+"&state_id="+stateid+"&city_id="+cityid,
		success:function(data){
			$('#city_list').html();
			$('#city_list').html(data);
		},
		error:function(data)
		{
			//alert(cid);
		}
	});	    
}
function selectToggle(toggle, form) {
	var myForm = document.forms[form];
	if(toggle) {
		 $('.pay_mod').each(function() { //loop through each checkbox
			this.checked = true;  //select all checkboxes with class "checkbox1"              
			});
	} else {
		$('.pay_mod').each(function() { //loop through each checkbox
			this.checked = false;  //select all checkboxes with class "checkbox1"              
		}); 
	}
}
</script>