<?php defined('SYSPATH') OR die("No direct access allowed.");
//echo "<pre>"; print_r($manager_details); exit;
?>
<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle">    
         <form name="editmanager_form" class="form" id="editmanager_form" action="" method="post" enctype="multipart/form-data">
         <table border="0" cellpadding="5" cellspacing="0" width="100%">
	   <tr>
	   <td class="titlebold"><?php echo __('personalinform'); ?></td>
	   <td></td>	
	   </tr>
           <tr>
           <td valign="top" width="20%"><label><?php echo __('firstname'); ?></label><span class="star">*</span></td>        
	<td>
		
		<div class="new_input_field">
			<?php
				$firstname = "";
				if(isset($manager_details['name']) && !array_key_exists('firstname',$postvalue)){
					$firstname = trim($manager_details['name']); 	
				}elseif(isset($postvalue['firstname'])){
					$firstname = $postvalue['firstname'];
				}
			?>
            <input type="text" title="<?php echo __('enterfirstname'); ?>" name="firstname" id="firstname" value="<?php echo $firstname; ?>"  minlength="4" maxlength="30" />
            <?php if(isset($errors) && array_key_exists('firstname',$errors)){ echo "<span class='error'>".ucfirst($errors['firstname'])."</span>";}?>
		</div>
    </td>
        </tr>        

           <tr>
           <td valign="top" width="20%"><label><?php echo __('lastname'); ?></label><span class="star">*</span></td>
	   <td>
		   <div class="new_input_field">
			<?php
				$lastname = "";
				if(isset($manager_details['lastname']) && !array_key_exists('lastname',$postvalue)){
					$lastname = trim($manager_details['lastname']); 	
				}elseif(isset($postvalue['lastname'])){
					$lastname = $postvalue['lastname'];
				}
			?>
              <input type="text" title="<?php echo __('enterlastname'); ?>" name="lastname" id="lastname" value="<?php echo $lastname; ?>" minlength="1"  maxlength="30" />
              <?php if(isset($errors) && array_key_exists('lastname',$errors)){ echo "<span class='error'>".ucfirst($errors['lastname'])."</span>";}?>
		   </div>
           </td>
           </tr>
           
           <tr>
           <td valign="top" width="20%"><label><?php echo __('email'); ?></label><span class="star">*</span></td>
	   <td>
		   <div class="new_input_field">
			<?php
				$email = "";
				if(isset($manager_details['email']) && !array_key_exists('email',$postvalue)){
					$email = trim($manager_details['email']); 	
				}elseif(isset($postvalue['email'])){
					$email = $postvalue['email'];
				}
			?>
              <input type="text" title="<?php echo __('enteremailaddress'); ?>" name="email" id="email" value="<?php echo $email; ?>"  maxlength="50" />
              <?php if(isset($errors) && array_key_exists('email',$errors)){ echo "<span class='error'>".ucfirst($errors['email'])."</span>";}?>
		   </div>
           </td>   	
           </tr>  
                      
           <tr>
           <td valign="top" width="20%"><label><?php echo __('mobile'); ?></label><span class="star">*</span></td>        
	   <td>
		   <div class="new_input_field">
			<?php
				$phone = "";
				if(isset($manager_details['phone']) && !array_key_exists('phone',$postvalue)){
					$phone = trim($manager_details['phone']); 	
				}elseif(isset($postvalue['phone'])){
					$phone = $postvalue['phone'];
				}
			?>
              <input type="text" title="<?php echo __('entermobileno'); ?>" name="phone" id="phone" value="<?php echo $phone; ?>" minlength="7" maxlength="20" />
              <?php if(isset($errors) && array_key_exists('phone',$errors)){ echo "<span class='error'>".ucfirst($errors['phone'])."</span>";}?>
		   </div>
           </td>   	
           </tr>  
           
           <tr>
           <td valign="top" width="20%"><label><?php echo __('address'); ?></label><span class="star">*</span></td>        
	   <td>
		   <div class="new_input_field">
			<?php
				$address = "";
				if(isset($manager_details['address']) && !array_key_exists('address',$postvalue)){
					$address = trim($manager_details['address']); 	
				}elseif(isset($postvalue['address'])){
					$address = $postvalue['address'];
				}
			?>
		<textarea name="address" id="address"  title="<?php echo __('enteraddress'); ?>" rows="7" cols="35"><?php echo $address; ?></textarea>

              <?php if(isset($errors) && array_key_exists('address',$errors)){ echo "<span class='error'>".ucfirst($errors['address'])."</span>";}?>
		   </div>
           </td>   	
           </tr>             
        <?php /*   <tr>
	   <td><?php echo ucfirst(__('companyinformation')); ?></td>
	   <td></td>	          
           </tr>
           */ ?>
    <?php  if($_SESSION['user_type'] =='A')
	{
		$cid = isset($postvalue['company_name'])?$postvalue['company_name']:"";
		?>	
	<tr>
	<?php $field_type =''; $field_type =  isset($manager_details['company_id']) &&!array_key_exists('company_name',$postvalue)? trim($manager_details['company_id']):$cid; ?>
	<?php /* <td valign="top" width="20%"><label><?php echo __('taxicompany'); ?></label><span class="star">*</span></td><td>
	<div class="formRight">
	<div class="selector" id="uniform-user_type">
	<span><?php echo __('select_label'); ?></span>
	<div id="taxicompany_list">
		<select name="company_name" id="company_name" onchange="getcountry(this.value,'','')">
		<option value="">--Select--</option>
		<?php
		foreach($all_companies_list as $company_list) {  ?>
		<option value="<?php echo $company_list['_id']; ?>" <?php if($field_type == $company_list['_id']) { echo 'selected=selected'; } ?> ><?php echo ucfirst($company_list['companydetails']["company_name"]); ?></option>
		<?php	} ?>
		</select>
	</div>	
		</div></div>
              <?php if(isset($errors) && array_key_exists('company_name',$errors)){ echo "<span class='error'>".ucfirst($errors['company_name'])."</span>"; } ?>
        </td>      
	</tr> */?>
	<tr>
	<td valign="top" width="20%"></td>
	<td>
	<div class="new_input_field">	
	<?php
		foreach($all_companies_list as $company_list) {  ?>
	<input type="hidden" name="company_name" id="company_name" value="<?php echo $company_list['_id']; ?>"><?php	} ?>
	<?php if(isset($errors) && array_key_exists('company_name',$errors)){ echo "<span class='error'>".ucfirst($errors['company_name'])."</span>"; } ?>
	</div>
	</td>
	</tr>	
	<?php } 
	else { ?> 
	<tr>
	<td valign="top" width="20%"></td>
	<td>
	<div class="new_input_field">
	<input type="hidden" name="company_name" id="company_name" value="<?php echo $_SESSION['company_id']; ?>">
	<?php if(isset($errors) && array_key_exists('company_name',$errors)){ echo "<span class='error'>".ucfirst($errors['company_name'])."</span>"; } ?>
	 </div>
	 </td>
	</tr>	
	<?php } 
	?>
<?php /*	<tr>
	<?php
		$country_field_type = "";
		if(isset($manager_details['login_country']) && !array_key_exists('country',$postvalue)){
			$country_field_type = trim($manager_details['login_country']); 	
		}elseif(isset($postvalue['country'])){
			$country_field_type = $postvalue['country'];
		}
		
	?>
	<td valign="top" width="20%"><label><?php echo __('country_label'); ?></label><span class="star">*</span></td>        
	<td>
	<div class="formRight">
	<div class="selector" id="uniform-user_type">
		<input type="hidden" name="country" value = "<?php echo $country_field_type; ?>" />
	<span><?php echo __('select_label'); ?></span>
               <select  <?php if($_SESSION['user_type']== 'C' || $_SESSION['user_type']== 'M' ) { ?> name="countrys" disabled <?php }else{ ?> name="country" id="country" <?php } ?>>
              <option value="">--Select--</option>
              <?php foreach($country_details as $country_list) { ?>
              <option value="<?php echo $country_list['_id']; ?>" <?php if($country_field_type == $country_list['_id']) { echo 'selected=selected'; } ?>><?php echo ucfirst($country_list['country_name']); ?></option>
              <?php } ?>
              </select>
		<?php if($_SESSION['user_type']== 'C' || $_SESSION['user_type']== 'M' ) { ?> <input type="hidden" name="country" id="country" value="<?php echo $country_field_type; ?>"> <?php } ?> 
        </div>
	</div>
              <?php if(isset($errors) && array_key_exists('country',$errors)){ echo "<span class='error'>".ucfirst($errors['country'])."</span>";}?>

	</td>   	
	</tr>
	<tr>
	<?php $state_field_type =''; $state_field_type =  isset($manager_details['login_state']) && !array_key_exists('state',$postvalue)? trim($manager_details['login_state']):(isset($postvalue['state'])?$postvalue['state']:""); ?>
	<td valign="top" width="20%"><label><?php echo __('state_label'); ?></label><span class="star">*</span></td>
	<td>
	<div class="formRight">
	<div class="selector" id="uniform-user_type">
	<span><?php echo __('select_label'); ?></span>
	<div id="state_list">
		<select name="state" id="state" onchange="change_city_drop();">
		<option value="">--Select--</option>
		<?php
		foreach($state_details as $state_list) {  ?>
		<option value="<?php echo $state_list['state_id']; ?>" <?php if($state_field_type == $state_list['state_id']) { echo 'selected=selected'; } ?> ><?php echo ucfirst($state_list["state_name"]); ?></option>
		<?php	} ?>
		</select>
	</div>	
		</div></div>
              <?php if(isset($errors) && array_key_exists('state',$errors)){ echo "<span class='error'>".ucfirst($errors['state'])."</span>"; }?>
        </td>
	</tr> 
	<tr>
	<?php $city_field_type =''; $city_field_type =  isset($manager_details['login_city']) &&!array_key_exists('city',$postvalue)? trim($manager_details['login_city']):(isset($postvalue['city'])?$postvalue['city']:""); ?>
	<td valign="top" width="20%"><label><?php echo __('city_label'); ?></label><span class="star">*</span></td>
	<td>
	<div class="formRight">
	<div class="selector" id="uniform-user_type">
	<span><?php echo __('select_label'); ?></span>
	<div id="city_list">
		<select name="city" id="city">
		<option value="">--Select--</option>
		<?php
		foreach($city_details as $city_list) {  ?>
		<option value="<?php echo $city_list['city_id']; ?>" <?php if($city_field_type == $city_list['city_id']) { echo 'selected=selected'; } ?> ><?php echo ucfirst($city_list["city_name"]); ?></option>
		<?php	} ?>
		</select>
	</div>	
		</div></div>
              <?php if(isset($errors) && array_key_exists('city',$errors)){ echo "<span class='error'>".ucfirst($errors['city'])."</span>"; }?>
        </td>      
	</tr>*/ ?>
	<tr>
	<td>&nbsp;</td>
	<td colspan="" class="star">*<?php echo __('required_label'); ?></td>
	</tr>                         
	<tr>
		<td>&nbsp;</td>
		<td colspan="">
			<div class="button blackB"><input type="button" value="<?php echo __('button_back'); ?>" onclick="window.history.go(-1)" /></div>
			<div class="button dredB"><input type="reset" onclick="change_state('<?php echo isset($manager_details['login_country']) ? $manager_details['login_country'] : ''; ?>','<?php echo isset($manager_details['login_state']) ? $manager_details['login_state'] : ''; ?>');change_city('<?php echo isset($manager_details['login_country']) ? $manager_details['login_country'] : ''; ?>','<?php echo isset($manager_details['login_state']) ? $manager_details['login_state'] : ''; ?>','<?php echo isset($manager_details['login_city']) ? $manager_details['login_city'] : ''; ?>')" value="<?php echo __('button_reset'); ?>" title="<?php echo __('button_reset'); ?>" /></div>
                            <div class="button greenB">  <input type="submit" value="<?php echo __('submit' );?>" name="submit_editmanager" title="<?php echo __('submit' );?>" /></div>
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
<?php if(isset($manager_details['company_id'])) { ?>	
		//getcountry('<?php echo $manager_details['company_id']; ?>','<?php echo $manager_details['login_state']; ?>','<?php echo $manager_details['login_city']; ?>');
<?php } ?>	
	$("#phone" ).keyup(function() {
		//to allow left and right arrow key move
		if(event.which>=37 && event.which<=40) {
			return false;
		}
		this.value = this.value.replace(/[`~!@#$%^&*\s_|\=?;:'",.<>\{\}\[\]\\\/A-Z]/gi, '');
	});
		
	var field_val = $("#firstname").val();
	$("#firstname").focus().val("").val(field_val);
	toggle(14);
	//change_state('','');
	//change_city('','','');
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
   
function change_city_drop(){
	var countryid= $("#country").val();
	var stateid= $("#state").val();
	var cityid= $("#city").val();
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
function change_city(country_id,state_id,city_id)
{
	var countryid= $("#country").val();
	var stateid= $("#state").val();
	var cityid= $("#city").val();
	if(country_id != '' && state_id != '' && city_id != '') {
		//countryid = country_id;
		//stateid = state_id;
		//cityid = city_id;
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

function getcountry(company_id,stateid,cityid)
{
	$.ajax({
		url:"<?php echo URL_BASE;?>add/getcountry",
		type:"get",
		data:"company_id="+company_id,
		success:function(data){
			var res = data.split("~");
			$('#country').html(res[0]);
			if(stateid != '' && cityid != '') {
				change_country(stateid,cityid);
			} else {
				change_country(res[1],res[2]);
			}
		},
		error:function(data)
		{
			//alert(cid);
		}
	});	
}

function change_country(state_id,city_id)
{
	var countryid= $("#country").val();
	$.ajax({
		url:"<?php echo URL_BASE;?>add/getlist_state",
		type:"get",
		data:"country_id="+countryid+"&state_id="+state_id,
		success:function(data){
			$('#state_list').html(data);
			change_city(countryid,state_id,city_id);
		},
		error:function(data)
		{
			//alert(cid);
		}
	});
}
</script>
