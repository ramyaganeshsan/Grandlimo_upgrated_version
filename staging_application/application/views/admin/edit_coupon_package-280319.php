<?php defined('SYSPATH') OR die("No direct access allowed."); ?>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery-1.6.3.min.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery.validate.js"></script>

<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle">   
       <form name="editcoupon_package_form" id="editcoupon_package_form" class="form" action="" method="post" enctype="multipart/form-data" onsubmit="form_validation();">
       <table border="0" cellpadding="5" cellspacing="0" width="100%">            
	<tr>
	<td><?php echo ucfirst(__('coupon_package_information')); ?></td>
	<td></td>	          
	</tr>
	
	<tr>
	<td valign="top" width="20%"><label><?php echo __('coupon_package_name'); ?></label><span class="star">*</span></td>        
	<td>
	<div class="new_input_field">
              <input type="text" title="<?php echo __('enter_coupon_package_name'); ?>" class="required" name="coupon_package_name" id="coupon_package_name" value="<?php echo isset($company_details['coupon_package_name']) &&!array_key_exists('coupon_package_name',$postvalue)? trim($company_details['coupon_package_name']):$postvalue['coupon_package_name']; ?>"  maxlength="100" />
              <?php if(isset($errors) && array_key_exists('coupon_package_name',$errors)){ echo "<span class='error'>".ucfirst($errors['coupon_package_name'])."</span>";}?>
	</div>
	</td>   	
	</tr> 

	<tr>
	<td valign="top" width="20%"><label><?php echo __('coupon_package_description'); ?></label><span class="star">*</span></td>        
	<td>
	<div class="new_input_field">
              <textarea name="coupon_package_description" id="coupon_package_description" class="required" title="<?php echo __('enter_coupon_package_desc'); ?>" rows="7" cols="35"><?php echo isset($company_details['coupon_package_description']) &&!array_key_exists('coupon_package_description',$postvalue)? trim($company_details['coupon_package_description']):$postvalue['coupon_package_description']; ?></textarea>
              <?php if(isset($errors) && array_key_exists('coupon_package_description',$errors)){ echo "<span class='error'>".ucfirst($errors['coupon_package_description'])."</span>";}?>
	</div>
	</td>   	
	</tr> 
	
	<tr>
	<td valign="top" width="20%"><label><?php echo __('corporate_commission_ratio'); ?></label><span class="star">*</span></td>        
	<td>
	<div class="new_input_field">
	              <input type="text" title="<?php echo __('corporate_commission'); ?>" class="number required" name="corporate_commission" id="corporate_commission" value="<?php echo isset($company_details['corporate_commission']) &&!array_key_exists('corporate_commission',$postvalue)? trim($company_details['corporate_commission']):$postvalue['corporate_commission']; ?>"  maxlength="2" oncopy="return false;" onpaste="return false;" oncut="return false;"/>
              <?php if(isset($errors) && array_key_exists('corporate_commission',$errors)){ echo "<span class='error'>".ucfirst($errors['corporate_commission'])."</span>";}?>
	</div>
	</td>   	
	</tr> 

	<tr>
	<td valign="top" width="20%"><label><?php echo __('passenger_commission_ratio'); ?></label><span class="star">*</span></td>        
	<td>
	<div class="new_input_field">
	              <input type="text" title="<?php echo __('passenger_commission'); ?>" class="number required" name="passenger_commission" id="passenger_commission" value="<?php echo isset($company_details['passenger_commission']) &&!array_key_exists('passenger_commission',$postvalue)? trim($company_details['passenger_commission']):$postvalue['passenger_commission']; ?>"  maxlength="2" oncopy="return false;" onpaste="return false;" oncut="return false;"/>
              <?php if(isset($errors) && array_key_exists('passenger_commission',$errors)){ echo "<span class='error'>".ucfirst($errors['passenger_commission'])."</span>";}?>
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
                            <div class="button dredB">   <input type="reset" value="<?php echo __('button_reset'); ?>" title="<?php echo __('button_reset'); ?>" /></div>
                            <div class="button greenB">  <input type="submit" value="<?php echo __('submit' );?>" name="submit_editcoupon_package" title="<?php echo __('submit' );?>" /></div>
                            <div class="clr">&nbsp;</div>
                        </td>
                    </tr> 

                </table>
        </form>
        </div>
        <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt"></div></div>
    </div>
</div>  

