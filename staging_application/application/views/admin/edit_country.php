<?php defined('SYSPATH') OR die("No direct access allowed."); ?>
<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle"> 
         <form name="editcountry_form" class="form" id="editcountry_form" action="" method="post" enctype="multipart/form-data">
         <table border="0" cellpadding="5" cellspacing="0" width="100%">
			<tr>
			<td valign="top" width="20%"><label><?php echo __('country_label'); ?></label><span class="star">*</span></td>        
			<td>
			<div class="new_input_field">
					  <input type="text"  maxlength="30" minlength="2"  title="<?php echo __('enterthecountryname'); ?>" id="country_name" name="country_name" value="<?php echo isset($company_details['country_name']) &&!array_key_exists('country_name',$postvalue)? trim($company_details['country_name']):$postvalue['country_name']; ?>" />
					  <?php if(isset($errors) && array_key_exists('country_name',$errors)){ echo "<span class='error'>".ucfirst($errors['country_name'])."</span>";}?>
			</div>
			</td>   	
			</tr>
			<tr>
			<td valign="top" width="20%"><label><?php echo __('iso_code'); ?></label><span class="star">*</span></td>        
			<td>
			<div class="new_input_field">
					  <input type="text"  maxlength="5" minlength="2"  title="<?php echo __('entertheisocountrycode'); ?>" id="iso_country_code" name="iso_country_code" value="<?php echo isset($company_details['iso_country_code']) &&!array_key_exists('iso_country_code',$postvalue)? trim($company_details['iso_country_code']):$postvalue['iso_country_code']; ?>" />
					  <?php if(isset($errors) && array_key_exists('iso_country_code',$errors)){ echo "<span class='error'>".ucfirst($errors['iso_country_code'])."</span>";}?>
			</div>
			</td>   	
			</tr>
			<tr>
			<td valign="top" width="20%"><label><?php echo __('telephone_code'); ?></label><span class="star">*</span></td>        
			<td>
			<div class="new_input_field">
					  <input type="text"  maxlength="15" minlength="2"  title="<?php echo __('enterthetelecode'); ?>" id="telephone_code" name="telephone_code" value="<?php echo isset($company_details['telephone_code']) &&!array_key_exists('telephone_code',$postvalue)? trim($company_details['telephone_code']):$postvalue['telephone_code']; ?>" />
					  <?php if(isset($errors) && array_key_exists('telephone_code',$errors)){ echo "<span class='error'>".ucfirst($errors['telephone_code'])."</span>";}?>
			</div>
			</td>   	
			</tr>
			<tr>
			<td valign="top" width="20%"><label><?php echo __('currency_code'); ?></label><span class="star">*</span></td>        
			<td>
			<div class="new_input_field">
					  <input type="text"  maxlength="5" minlength="2"  title="<?php echo __('enter_currency_code'); ?>" id="currency_code" name="currency_code" value="<?php echo isset($company_details['currency_code']) &&!array_key_exists('currency_code',$postvalue)? trim($company_details['currency_code']):$postvalue['currency_code']; ?>" />
					  <?php if(isset($errors) && array_key_exists('currency_code',$errors)){ echo "<span class='error'>".ucfirst($errors['currency_code'])."</span>";}?>
			</div>
			</td>   	
			</tr>
			
			<tr>
			<td valign="top" width="20%"><label><?php echo __('currency_symbol'); ?></label><span class="star">*</span></td>        
			<td>
			<div class="new_input_field">
					  <input type="text"  maxlength="5"  title="<?php echo __('enter_currency_symbol'); ?>" id="currency_symbol" name="currency_symbol" value="<?php echo isset($company_details['currency_symbol']) &&!array_key_exists('currency_symbol',$postvalue)? trim($company_details['currency_symbol']):$postvalue['currency_symbol']; ?>" />
					  <?php if(isset($errors) && array_key_exists('currency_symbol',$errors)){ echo "<span class='error'>".ucfirst($errors['currency_symbol'])."</span>";}?>
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
					<div class="button greenB"><input type="submit" value="<?php echo __('submit' );?>" name="submit_editcountry" title="<?php echo __('submit' );?>" /></div>
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

var field_val = $("#country_name").val();
$("#country_name").focus().val("").val(field_val); 
	toggle(10);
});
</script>
