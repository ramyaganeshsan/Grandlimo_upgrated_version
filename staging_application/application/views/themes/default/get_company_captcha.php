<?php 
$captchastring="";
for ($i = 0; $i < 5; $i++) {
			$captchastring .= chr(rand(97, 122));
			
		}	?>
	<div class="name2">
		<b><?php echo __('Security Code');?><span class="greenstar">*</span></b>
	</div>  
        <div class="input_bx">
		<input type="text"  title="Enter the security code" placeholder="<?php echo __('Security Code');?>" name="security_code" />
		<label class="control-group err"> <span style="cursor:text;" id="captca_error"> <?php if(isset($errors)){ echo array_key_exists("security_code",$errors)?$errors["security_code"]:""; } ?></span></label>
		<input type="hidden" name="org_captcha" id="org_captcha" value="<?php echo $captchastring; ?>" />
	</div>
	<div class="chgcapchafont"><p id="chgcapcha" style="text-transform:lowercase;" ><?php echo $captchastring; ?>
		</p><img src="<?php echo URL_BASE;?>public/images/reload.png" width="28px" height="28px" alt="Reload" id="refresh" 
		onclick="javascript:change_company_captcha('<?php echo URL_BASE;?>')" />
	</div>
	<div class="name2">
		<b>&nbsp;</b>
	</div>
	

							
