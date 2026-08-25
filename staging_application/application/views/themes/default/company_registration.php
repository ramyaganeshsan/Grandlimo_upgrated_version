<?php defined('SYSPATH') OR die('No direct access allowed.'); 

$select_pack_id ='';
//print_r(isset($postvalues));
?>
<!-- About page-->
<div class="about_outer">
	<div class="about_baner">
		<img src="<?php echo URL_BASE;?>public/images/about_bg.png" alt="images"/>
	</div>
	<div class="about_inner">
		<div class="about_common">
			<div class="about_left">
				<h1><?php echo __('company_registration_label'); ?></h1>
				
			</div> 
			 <div class="about_right">
			</div> 
		</div>
	</div>
	
</div> 

		
<!-- About page end-->
<div class="about_bottom_outer">
	<div class="about_bottom_inner">
		<div class="about_bottom_common1">
			<div class="full_con_right">
			<?php if(isset($registration_content[0]['content'])) { echo $registration_content[0]['content']; } ?>
					<form method="POST" name="frmlogin" id="frmlogin">
						<div class="registration mt30 company_registration">
							<div class="reg_form" style="width:100%;">
								<div class="title_name" style="padding-top:10px;">
										<b>*<?php echo __('required_label'); ?></b><a href="<?php echo URL_BASE .'company/login'?>"><b  style="float:right;"><?php echo __('already_registered'); ?></a></b>
								</div><br>
								<div class="title_name">
										<b><?php echo __('personalinform');?></b>
								</div><br>
								<div class="reg_form_left">
									<div class="name2">
										<b><?php echo __('firstname_label');?><span class="greenstar">*</span></b>
									</div>
									<div class="fl">
											<input type="text" name="firstname" id="firstname" value="<?php echo isset($validator['firstname'])?$validator['firstname']:'';?>" class="login_txt" maxlength="100" />
											<label class="control-group err"> <span class=""> <?php if(isset($errors)){ echo array_key_exists("firstname",$errors)?$errors["firstname"]:""; } ?></span></label>
									</div>
									<div class="name2">
										<b><?php echo __('lastname_label');?><span class="greenstar">*</span></b>
									</div>
									<div class="fl">
											<input type="text" name="lastname" value="<?php echo isset($validator['lastname'])?$validator['lastname']:'';?>" class="login_txt" maxlength="100" />
											<label class="control-group err"> <span class=""> <?php if(isset($errors)){ echo array_key_exists("lastname",$errors)?$errors["lastname"]:""; } ?></span></label>
									</div>
									<div class="name2">
										<b><?php echo __('email_label');?><span class="greenstar">*</span></b>
									</div>
									<div class="fl">
											<input type="text" name="email" value="" class="login_txt" value="<?php echo isset($postvalue['email'])?$postvalue['email']:'';?>" />
											<label class="control-group err"> <span class=""> <?php if(isset($errors)){ echo array_key_exists("email",$errors)?$errors["email"]:""; } ?></span></label>
									</div>
									<div class="name2">
										<b><?php echo __('mobile_label');?><span class="greenstar">*</span></b>
									</div>
									<div class="fl">
											<input type="text" name="mobile" value="<?php echo isset($validator['mobile'])?$validator['mobile']:'';?>" class="login_txt" maxlength="36" />
											<label class="control-group err"> <span class=""><?php if(isset($errors)){ echo array_key_exists("mobile",$errors)?$errors["mobile"]:""; } ?></span></label>
									</div>
								</div>
								<div class="reg_form_left">
									<div class="name2">
										<b><?php echo __('password_label');?><span class="greenstar">*</span></b>
									</div>
									<div class="fl">
											<input type="password" name="password" value="<?php echo isset($validator['password'])?$validator['password']:'';?>" class="login_txt" maxlength="100" />
											<label class="control-group err"> <span class=""><?php if(isset($errors)){ echo array_key_exists("password",$errors)?$errors["password"]:""; } ?></span></label>
									</div>
									<div class="name2">
										<b><?php echo __('confirm_password_label');?><span class="greenstar">*</span></b>
									</div>
									<div class="fl">
											<input type="password" name="confirm_password" value="<?php echo isset($validator['confirm_password'])?$validator['confirm_password']:'';?>" class="login_txt" maxlength="100" />
											<label class="control-group err"> <span class=""><?php if(isset($errors)){echo array_key_exists("confirm_password",$errors)?$errors["confirm_password"]:""; } ?></span></label>
									</div>
									
									<div class="name2">
										<b><?php echo __('address_label');?><span class="greenstar">*</span></b>
									</div>
									<div class="fl">
											<textarea type="text" name="address" value="<?php echo isset($validator['address'])?$validator['address']:'';?>" class="login_txt" style="resize:none;"><?php if(isset($postvalue['address'])){echo $postvalue['address'];}?></textarea>
											<label class="control-group err"> <span class=""> <?php if(isset($errors)){ echo array_key_exists("address",$errors)?$errors["address"]:""; } ?></span></label>
									</div>
									<div class="name2">
										<b><?php echo __('paypalaccount');?><span class="greenstar">*</span></b>
									</div>
									<div class="fl">
											<input type="text" name="paypal_account" value="<?php echo isset($validator['paypal_account'])?$validator['paypal_account']:'';?>" title="<?php echo __('enterpaypalaccount'); ?>" class="login_txt" maxlength="150" />
											<label class="control-group err"> <span class=""><?php if(isset($errors)){echo array_key_exists("paypal_account",$errors)?$errors["paypal_account"]:""; } ?></span></label>
									</div>
								</div>
							</div>
							<div  class="reg_form" style="width:100%;">
								<div class="title_name">
									<b><?php echo __('companyinformation');?></b>
								</div><br>
								<div class="reg_form_left">
									<div class="name2">
										<b><?php echo __('companyname');?><span class="greenstar">*</span></b>
									</div>
									<div class="fl">
											<input type="text" name="companyname" value="<?php echo isset($validator['companyname'])?$validator['companyname']:'';?>" class="login_txt" maxlength="100" />
											<label class="control-group err"> <span class=""> <?php if(isset($errors)){ echo array_key_exists("companyname",$errors)?$errors["companyname"]:""; } ?></span></label>
									</div>
									

									<div class="name2">
										<b><?php echo __('company_domain');?><span class="greenstar">*</span></b>
									</div>
									<div class="fl">
											<input type="text" name="domain_name" value="<?php echo isset($validator['domain_name'])?$validator['domain_name']:'';?>" class="login_txt" onblur="checkdomainname(this.value)" maxlength="100" />
											<span class="help_txt"><?php echo SUB_DOMAIN_NAME; ?></span>
											<br /><span id="unameavilable" class="validerror" style="margin-left:135px;"> </span>
											<label class="control-group err"> <span class=""> <?php if(isset($errors)){ echo array_key_exists("domain_name",$errors)?$errors["domain_name"]:""; } ?></span></label>
									</div>
									
									<div class="name2">
										<b><?php echo __('address_label');?><span class="greenstar">*</span></b>
									</div>
									<div class="fl">
											<textarea name="companyaddress" value="<?php echo isset($validator['companyaddress'])?$validator['companyaddress']:'';?>" class="login_txt" style="resize:none;"><?php if(isset($postvalue['companyaddress'])){echo $postvalue['companyaddress'];}?></textarea>
											<label class="control-group err"> <span class=""> <?php if(isset($errors)){ echo array_key_exists("companyaddress",$errors)?$errors["companyaddress"]:""; } ?></span></label>
									</div>
									<?php /*<div class="name2">
										<b><?php echo __('package_upgrade');?><span class="greenstar"></span></b>
									</div>
									<div class="fl">
										<div class="reg_text1">
											<div class="new_input_field">
												<input type="radio" name="upgrade_package" id="upgrade_package1" title="<?php echo __('enter_payment_method'); ?>"  value="D" checked><?php echo __('Yes'); ?>
												<input type="radio" name="upgrade_package" id="upgrade_package2" title="<?php echo __('enter_payment_method'); ?>"  value="N"><?php echo __('No'); ?>
											</div>
										</div>
											<?php if(isset($errors) && array_key_exists('upgrade_package',$errors)){ echo "<span class='error'>".ucfirst($errors['upgrade_package'])."</span>";}?>
									</div> */ ?>
								</div>
								<div class="reg_form_left">
									<?php $field_type =''; if(isset($postvalue) && array_key_exists('country',$postvalue)){ $field_type =  $postvalue['country']; } ?>
									<div class="name2">
										<b><?php echo __('country_label');?><span class="greenstar">*</span></b>
									</div>
									<div class="fl">
										<div id="country_list">
											<select name="country" id="country">
												<option value="">-- select --</option>
												 <?php foreach($country_details as $country_list) { ?>
												<option value="<?php echo $country_list['country_id']; ?>" <?php if($field_type == $country_list['country_id']) { echo 'selected=selected'; } ?>><?php echo $country_list['country_name']; ?></option>
												<?php } ?>
											</select>
										</div>
											<label class="control-group err"> <span class=""> <?php if(isset($errors)){ echo array_key_exists("country",$errors)?$errors["country"]:""; } ?></span></label>
									</div>
									<?php $field_type =''; if(isset($postvalue) && array_key_exists('state',$postvalue)){ $field_type =  $postvalue['state']; } ?>
									<div class="name2">
										<b><?php echo __('state_label');?><span class="greenstar">*</span></b>
									</div>
									<div class="fl">
											<div id="state_list">
												<select name="state" id="state" class="span2" onchange="change_city();">
													<option value="">-- select --</option>
													<?php
													foreach($state_details as $state_list) {  ?>
														<option value="<?php echo $state_list['state_id']; ?>" <?php if($field_type == $state_list['state_id']) { echo 'selected=selected'; } ?> ><?php echo $state_list["state_name"]; ?></option>
													<?php	} ?>
												</select>
											</div>
											<label class="control-group err"> <span class=""> <?php if(isset($errors)){ echo array_key_exists("state",$errors)?$errors["state"]:""; }?></span></label>
									</div>
									<?php $field_type =''; if(isset($postvalue) && array_key_exists('city',$postvalue)){ $field_type =  $postvalue['city']; } ?>
									<div class="name2">
										<b><?php echo __('city_label');?><span class="greenstar">*</span></b>
									</div>
									<div class="fl">
											<div id="city_list">
												<select name="city" id="city" class="span2">
													<option value="">-- select --</option>
													<?php
													foreach($city_details as $city_list) {  ?>
														<option value="<?php echo $city_list['city_id']; ?>" <?php if($field_type == $city_list['city_id']) { echo 'selected=selected'; } ?> ><?php echo $city_list["city_name"]; ?></option>
													<?php	} ?>
												</select>
											</div>
											<label class="control-group err"> <span class=""><?php if(isset($errors)){ echo array_key_exists("city",$errors)?$errors["city"]:""; }?></span></label>
									</div>





					<?php $field_type =''; if(isset($postvalue) && array_key_exists('time_zone',$postvalue)){ $field_type =  $postvalue['time_zone']; } ?>
					<div class="name2">
					<b><?php echo __('time_zone');?><span class="greenstar">*</span></b>
					</div>
					<div class="fl">
					<div id="timezone_list">
					<select name="time_zone" id="time_zone" class="span2">
					<option value=""><?php echo __('select_label'); ?></option>

					<?php

					$timezone = unserialize(SELECT_TIMEZONE);

					foreach($timezone as $key => $value) {  ?>
					<option value="<?php echo $value; ?>" <?php if($field_type == $value) { echo 'selected=selected'; } ?> ><?php echo ucfirst($value); ?></option>
					<?php	} ?>
					</select>

					</div>
					<label class="control-group err"> <span class=""><?php if(isset($errors)){ echo array_key_exists("time_zone",$errors)?$errors["time_zone"]:""; }?></span></label>
					</div>
					</div>



								<?php /*
								<div  class="reg_form" style="width:100%;">
									<div id="show_package" style="width:100%;"> 
									<div class="name2" style="float:left;width:20%;">
										<b><?php echo __('select_package'); ?></b>
									</div>
									<div style="float:right;width:80%;">
									<?php 
									$i = 1;
									foreach($package_details as $package_list) { ?>
										<p>
											<input type="radio" name="pack" id="pack_<?php echo $package_list['package_id']; ?>" value="<?php echo $package_list['package_id']; ?>" <?php if($select_pack_id){ echo 'CHECKED'; } elseif ($i == 1) { echo 'CHECKED'; }?>/>
											<strong><?php echo wordwrap(ucfirst($package_list['package_name']),30,'<br/>',1); ?></strong>
											<a href="javascript:;" id="view_<?php echo $package_list['package_id']; ?>" onclick="show_detail(<?php echo $package_list['package_id']; ?>)" title="<?php echo __('details'); ?>"><?php echo '('.__('details').')'; ?></a>
										</p>
										<div class="fl clr mt10" id="pack_det_<?php echo $package_list['package_id']; ?>" style="display:none;">
											<table border="0" cellpadding="5" cellspacing="0" width="100%">      
												<tr>
													<td width="30%" valign="top">
														<?php echo '<h1 style="font-size:normal !important;">'.__('package_name').'</h1>'; ?></td>
													<td> : </td>
													<td><?php echo wordwrap(ucfirst($package_list['package_name']),30,'<br/>',1); ?></td>
												</tr>
												<tr>
													<td width="30%" valign="top">
														<?php echo '<h1 style="font-size:normal !important;">'.__('package_description').'</h1>'; ?></td>
													<td> : </td>
													<td><?php echo wordwrap(ucfirst($package_list['package_description']),30,'<br/>',1); ?></td>
												</tr>
												<tr>
													<td width="30%" valign="top">
														<?php echo '<h1 style="font-size:normal !important;">'.__('package_price').'</h1>'; ?></td>
													<td> : </td>
													<td><?php echo $package_list["package_price"];?></td>
												</tr>
												<tr>
													<td width="30%" valign="top">
														<?php echo '<h1 style="font-size:normal !important;">'.__('no_of_days_expire').'</h1>'; ?></td>
													<td> : </td>
													<td><?php echo $package_list["days_expire"];?></td>
												</tr>
											</table>
										</div>
									<?php 
									$i++;
									} ?> 
									</div>
								</div>
								*/ ?>
								<div  class="reg_form" style="width:100%;">
								<div class="name2">&nbsp;</div>
								<div class="confirm">
									<input  name="submit_company"  class="btn btn-primary" type="submit" title="<?php echo __('register_label');?>" value="<?php echo __('register_label');?>" />
									<input  name="reset_company" class="btn btn-inverse" type="reset" title="<?php echo __('button_reset');?>" value="<?php echo __('button_reset');?>" />
								</div>    
								</div>                 
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
 $(document).ready(function(){
 
    $("#firstname").focus(); 
    
	change_state();	
	change_city();
});

$("#country").change(function() {

      		var countryid= $("#country").val();
      		var stateid= $("#state").val();

		  $.ajax({
			url:"<?php echo URL_BASE;?>users/getlist_state",
			type:"get",
			data:"country_id="+countryid+"&state_id="+stateid,
			success:function(data){

			$('#state_list').html();
			$('#state_list').html(data);
			},
			error:function(data)
			{
				alert(cid);
			}
		});	
    });

function change_state()
{
     		var countryid= $("#country").val();
     		var stateid= $("#state").val();

		$.ajax({
			url:"<?php echo URL_BASE;?>users/getlist_state",
			type:"get",
			data:"country_id="+countryid+"&state_id="+stateid,
			success:function(data){

			$('#state_list').html();
			$('#state_list').html(data);
			},
			error:function(data)
			{
				alert(cid);
			}
		});
}

function change_city()
{

		var stateid= $("#state").val();
		var countryid= $("#country").val();
		var cityid= $("#city").val();
		
		  $.ajax({
			url:"<?php echo URL_BASE;?>users/getcitylist",
			type:"get",
			data:"country_id="+countryid+"&state_id="+stateid+"&city_id="+cityid,
			success:function(data){

			$('#city_list').html();
			$('#city_list').html(data);
			},
			error:function(data)
			{
				alert(cid);
			}
		});	
    
}
function show_detail(id)
{
        $("#pack_det_"+id).slideToggle("show");
} 

$('#upgrade_package1').click(function(){
	$('#show_package').show();
});
$('#upgrade_package2').click(function(){
	$('#show_package').hide();
});
</script>
