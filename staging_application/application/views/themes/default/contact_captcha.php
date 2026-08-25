<?php 
$captchastring="";
for ($i = 0; $i < 5; $i++) {
$captchastring .= chr(rand(97, 122));
} ?>
<div class="form-group">
	<div class="col-md-12">
		<div class="chgcapchafont">
			<p id="chgcapcha" style="text-transform:lowercase;"><?php echo $captchastring; ?></p>
			<img src="<?php echo URL_BASE;?>public/images/reload.png" height="28px" alt="Reload" id="refresh" onclick="javascript:change_captchasad('<?php echo URL_BASE;?>')" />
		</div>
		<input type="text" placeholder="Security Code *" class="form-control sec-code" title="Enter the security code" name="security_code" />
		<label class="control-group err"> <span style="cursor:text;" id="captca_error"> <?php if(isset($errors)){ echo array_key_exists("security_code",$errors)?$errors["security_code"]:""; } ?></span></label>
		<input type="hidden" name="org_captcha" value="<?php echo $captchastring; ?>" />
</div>