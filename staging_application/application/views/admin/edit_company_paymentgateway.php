<?php
defined('SYSPATH') OR die("No direct access allowed.");
?>
<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle"> 
            <form method="POST" enctype="multipart/form-data" class="form" action="" >
              <table class="0" cellpadding="5" cellspacing="0" width="100%">
                    <tr>
                        <td valign="top" width="20%"><label><?php echo __('payment_gatway_name'); ?></label></td>   
                        <td><div class="new_input_field"><label><?php echo isset($payment_settings['payment_gatway'])? $payment_settings['payment_gatway'] : ""; ?></label></div>
                   </td>
                    </tr>
                    <tr>
                        <td valign="top" width="20%"><label><?php echo __('payment_description'); ?></label><span class="star">*</span></td>   
                        <td><div class="new_input_field"><input type="text" name="description" id="description1" title="<?php echo __('enter_payment_description'); ?>" maxlength="250" value="<?php if(isset($postvalue['description'])){ echo $postvalue['description'];}else{ echo $payment_settings['description']; }?>" > </div>
                            <?php if(isset($errors) && array_key_exists('description',$errors)){ echo "<span class='error'>".ucfirst($errors['description'])."</span>";}?></td>
                        </td>

                    </tr>                               
                     <tr>
                        <td valign="top" width="20%"><label><?php echo __('currency_code'); ?></label><span class="star">*</span></td>   
                        <td>
				<div class="formRight">
				<div class="selector" id="uniform-user_type">
				<span><?php echo __('select_label'); ?></span>
				<select name="currency_code" id="currency_code" title="<?php echo __('enter_currency_code'); ?>" >
				<option value="">-- Select Currency Code--</option>
				<?php foreach($currency_code as $key=>$currencycode){ ?>
				<option value='<?php echo $currencycode;?>' <?php if($payment_settings['currency_code'] == $currencycode) { echo 'selected=selected'; } ?> ><?php echo $currencycode;?></option>
				<?php } ?>                        
                            <?php echo isset($payment_settings) && (!array_key_exists('currency_code', $errors)) ? $payment_settings['currency_code'] : $validator['currency_code']; ?></select>
                            </div>
                            </div>
                            <span class="error"><?php echo isset($errors['currency_code']) ? $errors['currency_code'] : ''; ?></span>
                            </td>
                    </tr>

                    <tr>
                        <td valign="top" width="20%"><label><?php echo __('currency_symbol'); ?></label><span class="star">*</span></td>   
                        <td>
			<div class="formRight">
			<div class="selector" id="uniform-user_type">
			<span><?php echo __('select_label'); ?></span>

				<select name="currency_symbol" id="currency_symbol" title="<?php echo __('enter_currency_symbol'); ?>" >
				<option value="">-- Select Currency Symbol--</option>
				<?php foreach($currency_symbol as $key=>$currencysymbol){ ?>
				<option value='<?php echo $currencysymbol;?>' <?php if($payment_settings['currency_symbol'] == $currencysymbol) { echo 'selected=selected'; } ?> ><?php echo $currencysymbol;?></option>
				<?php } ?>
				<?php echo isset($payment_settings) && (!array_key_exists('currency_symbol', $errors)) ? $payment_settings['currency_symbol'] : $validator['currency_symbol']; ?>
				</select>
			</div>
			</div>      
                        <span class="error"><?php echo isset($errors['currency_symbol']) ? $errors['currency_symbol'] : ''; ?></span>
                        </td>
                    </tr> 
                    <tr>
			<tr>
                        <td valign="top" width="20%"><label><?php echo __('payment_method'); ?></label><span class="star">*</span></td>   
                        <td><div class="new_input_field">
                        
                        <input type="radio" name="payment_method" id="payment_method" title="<?php echo __('enter_payment_method'); ?>"  value="T" <?php if(isset($postvalue['payment_method'])){ if($postvalue['payment_method']=='T'){ echo 'checked=checked';} }else{ if($payment_settings['payment_method']=='T'){ echo 'checked=checked';} }?> ><?php echo 'Test Mode'; ?>
                        
                        <input type="radio" name="payment_method" id="payment_method" title="<?php echo __('enter_payment_method'); ?>"  value="L" <?php if(isset($postvalue['payment_method'])){ if($postvalue['payment_method']=='L'){ echo 'checked=checked';} }else{ if($payment_settings['payment_method']=='L'){ echo 'checked=checked';} }?>><?php  echo 'Live Mode'; ?>
                        </div>
                    <?php if(isset($errors) && array_key_exists('payment_method',$errors)){ echo "<span class='error'>".ucfirst($errors['payment_method'])."</span>";}?></td>
                    </tr>
				<?php /*  ?>
				<tr>
                        <td valign="top" width="20%"><label><?php echo __('knet_response_url'); ?></label><span class="star">*</span></td>   
                        <td><div class="new_input_field"><input type="text" name="knet_response_url" id="knet_response_url" title="<?php echo __('knet_response_url'); ?>" maxlength="250" value="<?php if(isset($postvalue['knet_response_url'])){ echo $postvalue['knet_response_url'];}else{ echo $payment_settings['knet_response_url']; }?>" > </div>
                            <?php if(isset($errors) && array_key_exists('knet_response_url',$errors)){ echo "<span class='error'>".ucfirst($errors['knet_response_url'])."</span>"; }  ?></td>
                        </td>

                    </tr> 
                    <tr>
                        <td valign="top" width="20%"><label><?php echo __('knet_error_url'); ?></label><span class="star">*</span></td>   
                        <td><div class="new_input_field"><input type="text" name="knet_error_url" id="paypal_api_username" title="<?php echo __('knet_error_url'); ?>" maxlength="250" value="<?php if(isset($postvalue['knet_error_url'])){ echo $postvalue['knet_error_url'];}else{ echo $payment_settings['knet_error_url']; }?>" > </div>
                            <?php if(isset($errors) && array_key_exists('knet_error_url',$errors)){ echo "<span class='error'>".ucfirst($errors['knet_error_url'])."</span>"; }  ?></td>
                        </td>

                    </tr> 
                    <tr>
                        <td valign="top" width="20%"><label><?php echo __('knet_resource_path'); ?></label><span class="star">*</span></td>   
                        <td><div class="new_input_field"><input type="text" name="knet_resource_path" id="knet_resource_path" title="<?php echo __('knet_resource_path'); ?>" maxlength="250" value="<?php if(isset($postvalue['knet_resource_path'])){ echo $postvalue['knet_resource_path'];}else{ echo $payment_settings['knet_resource_path']; }?>" > </div>
                            <?php if(isset($errors) && array_key_exists('knet_resource_path',$errors)){ echo "<span class='error'>".ucfirst($errors['knet_resource_path'])."</span>"; }  ?></td>
                        </td>

                    </tr>
                    <?php */  ?>
                    <tr>
                        <td valign="top" width="20%"><label><?php echo __('knet_alias'); ?></label><span class="star">*</span></td>   
                        <td><div class="new_input_field"><input type="text" name="knet_alias" id="knet_alias" title="<?php echo __('knet_alias'); ?>" maxlength="250" value="<?php if(isset($postvalue['knet_alias'])){ echo $postvalue['knet_alias'];}else{ echo $payment_settings['knet_alias']; }?>" > </div>
                            <?php if(isset($errors) && array_key_exists('knet_alias',$errors)){ echo "<span class='error'>".ucfirst($errors['knet_alias'])."</span>"; }  ?></td>
                        </td>

                    </tr> 
				
                  <?php /*  <tr>
                        <td valign="top" width="20%"><label><?php echo __('paypal_api_username'); ?></label><span class="star">*</span></td>   
                        <td><div class="new_input_field"><input type="text" name="paypal_api_username" id="paypal_api_username" title="<?php echo __('enter_paypal_api_username'); ?>" maxlength="250" value="<?php if(isset($postvalue['paypal_api_username'])){ echo $postvalue['paypal_api_username'];}else{ echo $payment_settings['paypal_api_username']; }?>" > </div>
                            <?php if(isset($errors) && array_key_exists('paypal_api_username',$errors)){ echo "<span class='error'>".ucfirst($errors['paypal_api_username'])."</span>"; }  ?></td>
                        </td>

                    </tr> 
                    <tr>
                        <td valign="top" width="20%"><label><?php echo __('paypal_api_password'); ?></label><span class="star">*</span></td>   
                        <td><div class="new_input_field"><input type="text" name="paypal_api_password" id="paypal_api_password" title="<?php echo __('enter_paypal_api_password'); ?>" maxlength="250" value="<?php if(isset($postvalue['paypal_api_signature'])){ echo $postvalue['paypal_api_password'];}else{ echo $payment_settings['paypal_api_password']; }?>"></div>
                            <?php if(isset($errors) && array_key_exists('paypal_api_password',$errors)){ echo "<span class='error'>".ucfirst($errors['paypal_api_password'])."</span>";} /* <?php echo isset($payment_settings) && (!array_key_exists('paypal_api_password', $errors)) ? $payment_settings['paypal_api_password'] : $validator['paypal_api_password']; ?>  ?></td>
                    </tr>

                    <tr>
                        <td valign="top" width="20%"><label><?php echo __('paypal_api_signature'); ?></label><span class="star">*</span></td>   
                        <td><div class="new_input_field"><input type="text" name="paypal_api_signature" id="paypal_api_signature"  title="<?php echo __('enter_paypal_api_signature'); ?>" maxlength="250" value="<?php if(isset($postvalue['paypal_api_signature'])){ echo $postvalue['paypal_api_signature'];}else{ echo $payment_settings['paypal_api_signature']; }?>"></div>
                            <?php if(isset($errors) && array_key_exists('paypal_api_signature',$errors)){ echo "<span class='error'>".ucfirst($errors['paypal_api_signature'])."</span>";}?></td>
                    </tr> */?>
		<tr><td>&nbsp;</td></tr>
		<tr><td>&nbsp;</td></tr>	
		<tr>
		<tr>
                        <td valign="top">&nbsp;</td>
                        <td style="padding-left:0px;">
                            <div class="button dredB"> <input type="reset" name="submit_editpayment" title="<?php echo __('button_reset'); ?>" value="<?php echo __('button_reset'); ?>"></div>
                            <div class="button greenB">  <input type="submit" name="submit_editpayment" title ="<?php echo __('button_update'); ?>" value="<?php echo __('button_update'); ?>"></div>

                        </td>
		</tr>

 		</table> 
            </form>
        </div>

        <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt" ></div></div>
    </div>

</div>
<script language="javascript" type="text/javascript">

$(document).ready(function(){

	toggle(3);
	var field_val = $("#payment_gatway_name").val();
	$("#payment_gatway_name").focus().val("").val(field_val);

});

</script>
