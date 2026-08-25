<?php defined('SYSPATH') OR die("No direct access allowed."); 
?>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery-1.6.3.min.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery.validate.js"></script>

<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle"> 
         <form name="passenger_coupon_code" id="passenger_coupon_code" class="form" action="" method="post">
       <table border="0" cellpadding="5" cellspacing="0" width="100%">                               
	<tr>
	<td class="titlebold"><?php echo __('Passenger Coupon Code'); ?></td>
	<td></td>	          
	</tr>
	
	<tr>
	<td valign="top" width="20%"><label><?php echo __('Customer Phone Number'); ?></label><span class="star">*</span></td>        
	<td>
	<div class="new_input_field">
	<input type="text" title="<?php echo __('enter_coupon_package_name'); ?>" class="required" name="phone" id="phone" value="<?php if(isset($postvalue) && array_key_exists('phone',$postvalue)){ echo $postvalue['phone']; }?>"  maxlength="100" />
	<?php if(isset($errors) && array_key_exists('phone',$errors)){ echo "<span class='error'>".ucfirst($errors['phone'])."</span>";}?>
	</div>
	</td>   	
	</tr> 

	<tr>
	<td valign="top" width="20%"><label><?php echo __('Customer Coupon Code'); ?></label><span class="star">*</span></td>        
	<td>
	<div class="new_input_field">
	<input type="text" title="<?php echo __('enter_coupon_package_name'); ?>" class="required" name="coupon_code" id="coupon_code" value="<?php if(isset($postvalue) && array_key_exists('coupon_code',$postvalue)){ echo $postvalue['coupon_code']; }?>"  maxlength="100" />
	<?php if(isset($errors) && array_key_exists('coupon_code',$errors)){ echo "<span class='error'>".ucfirst($errors['coupon_code'])."</span>";}?>
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
			<div class="button greenB">  <input type="submit" value="<?php echo __('submit' );?>" name="passenger_coupon_code" title="<?php echo __('submit' );?>" /></div>
			<div class="clr">&nbsp;</div>
		</td>
	</tr> 
    </table>
        </form>
        </div>
        <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt"></div></div>
    </div>
</div>  

