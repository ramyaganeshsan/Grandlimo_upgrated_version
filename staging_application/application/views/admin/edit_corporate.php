<?php defined('SYSPATH') OR die("No direct access allowed.");?>
<link rel="stylesheet" href="<?php echo URL_BASE;?>public/js/datetimepicker/jquery-ui.css" />
<script src="<?php echo URL_BASE;?>public/js/datetimepicker/jquery-1.9.1.js"></script>
<script src="<?php echo URL_BASE;?>public/js/datetimepicker/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery.validate.js"></script>
<script src="http://maps.google.com/maps/api/js?key=<?php echo GOOGLE_MAP_API_KEY; ?>&libraries=places,geometry" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/gmaps.js"></script>
<script>

  function initialize(){
	
	var pickupplace = document.getElementById("address");
	var options = {componentRestrictions: {country: ''}};//Restrictions based country wise
	var pickupplace_autocomplete=new google.maps.places.Autocomplete(pickupplace);//pickupplace
	google.maps.event.addListener(pickupplace_autocomplete, 'place_changed', function () {
		var pickupplace_place = pickupplace_autocomplete.getPlace();//Get a place lat&long
	   /***************Get a pickupplace Latitude and Longitude  ***********/
		document.getElementById('latitude').value = pickupplace_place.geometry.location.lat();//initialized latitude
		document.getElementById('longitude').value = pickupplace_place.geometry.location.lng();//initialized longitude
			/***************End of Get a pickupplace Latitude and Longitude ***********/
		});
		//pickupplace based autocomplete
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	/*********End of Google map and autocomplete part*************/
	
	</script>
<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle">   
       <form name="editpackage_form" id="editpackage_form" class="form" action="" method="post" enctype="multipart/form-data">
       <table border="0" cellpadding="5" cellspacing="0" width="100%">            

	<tr>
	<td><b><?php echo ucfirst(__('personalinform')); ?></b></td>
	<td></td>	          
	</tr>	

	<tr>
	<td valign="top" width="20%"><label><?php echo __('firstname'); ?></label><span class="star">*</span></td>        
	<td>
	<div class="new_input_field">
              <input type="text"  maxlength="30" minlength="4"  title="<?php echo __('enterfirstname'); ?>" id="firstname" name="firstname" value="<?php echo isset($company_details[0]['name']) &&!array_key_exists('firstname',$postvalue)? trim($company_details[0]['name']):$postvalue['firstname']; ?>" />
              <?php if(isset($errors) && array_key_exists('firstname',$errors)){ echo "<span class='error'>".ucfirst($errors['firstname'])."</span>";}?>
	</div>
	</td>   	
	</tr>
	
	<tr>
	<td valign="top" width="20%"><label><?php echo __('lastname'); ?></label><span class="star">*</span></td>        
	<td>
	<div class="new_input_field">
              <input type="text"  maxlength="30" minlength="1" title="<?php echo __('enterlastname'); ?>" id="lastname" name="lastname" value="<?php echo isset($company_details[0]['lastname']) &&!array_key_exists('lastname',$postvalue)? trim($company_details[0]['lastname']):$postvalue['lastname']; ?>" />
              <?php if(isset($errors) && array_key_exists('lastname',$errors)){ echo "<span class='error'>".ucfirst($errors['lastname'])."</span>";}?>
	</div>
	</td>   	
	</tr>
	
	<tr>
	<td valign="top" width="20%"><label><?php echo __('email'); ?></label><span class="star">*</span></td>        
	<td>
	<div class="new_input_field">
              <input type="text"  title="<?php echo __('enteremailaddress'); ?>" id="email" name="email" value="<?php echo isset($company_details[0]['email']) &&!array_key_exists('email',$postvalue)? trim($company_details[0]['email']):$postvalue['email']; ?>" maxlength="100" /><br>
              <?php if(isset($errors) && array_key_exists('email',$errors)){ echo "<span class='error'>".ucfirst($errors['email'])."</span>";}?>
	</div>
	</td>   	
	</tr>
	    <tr>
	   <td valign="top" width="20%"><label><?php echo __('password'); ?></label><span class="star">*</span></td>        
	<td>
	   <div class="new_input_field">
		  <input type="password" title="<?php echo __('enterpassword'); ?>" name="password" id="password" value="<?php echo isset($company_details[0]['org_password']) &&!array_key_exists('password',$postvalue)? trim($company_details[0]['org_password']):""; ?>"  minlength="4" maxlength="20" />
		  <?php if(isset($errors) && array_key_exists('password',$errors)){ echo "<span class='error'>".ucfirst($errors['password'])."</span>";} ?>
	   </div>
	</td>
	</tr>

	<tr>
	   <td valign="top" width="20%"><label><?php echo __('confirm_password_label'); ?></label><span class="star">*</span></td>        
   <td>
		<div class="new_input_field">
		  <input type="password" title="<?php echo __('entertheconfirmpassword'); ?>" name="repassword" id="repassword" value="<?php echo isset($company_details[0]['org_password']) &&!array_key_exists('repassword',$postvalue)? trim($company_details[0]['org_password']):$postvalue['password']; ?>"  minlength="2" maxlength="30" />
		  <?php if(isset($errors) && array_key_exists('repassword',$errors)){ echo "<span class='error'>".ucfirst($errors['repassword'])."</span>";}?>
	   </div>
	</td>   	
   </tr>


	           		
	<tr>
	<td valign="top" width="20%"><label><?php echo __('mobile'); ?></label><span class="star">*</span></td>        
	<td>
	<div class="new_input_field">
              <input type="text" title="<?php echo __('entermobileno'); ?>" id="phone" name="phone" value="<?php echo isset($company_details[0]['phone']) &&!array_key_exists('phone',$postvalue)? trim($company_details[0]['phone']):$postvalue['phone']; ?>" minlength="7" maxlength="16" />
              <?php if(isset($errors) && array_key_exists('phone',$errors)){ echo "<span class='error'>".ucfirst($errors['phone'])."</span>";}?>
	</div>
	</td>	
	</tr>

	
	
	<?php if($_SESSION['user_type'] !='M')
	{ ?>
		<?php /*
<tr>
	<?php $field_type =''; $field_type =  isset($company_details[0]['login_country']) &&!array_key_exists('country',$postvalue)? trim($company_details[0]['login_country']):""; ?>
	<td valign="top" width="20%"><label><?php echo __('country_label'); ?></label><span class="star">*</span></td>        
	<td>
	<div class="formRight">
	<div class="selector" id="uniform-user_type">
	<span><?php echo __('select_label'); ?></span>
             <select  <?php if($_SESSION['user_type']== 'C' || $_SESSION['user_type']== 'M' ) { ?> name="countrys" disabled <?php }else{ ?> name="country" id="country" <?php } ?>>
              <option value="">--Select--</option>
              <?php foreach($country_details as $country_list) { ?>
              <option value="<?php echo $country_list['_id']; ?>" <?php if($field_type == $country_list['_id']) { echo 'selected=selected'; } ?>><?php echo ucfirst($country_list['country_name']); ?></option>
              <?php } ?>
              </select>
		<?php if($_SESSION['user_type']== 'C' || $_SESSION['user_type']== 'M' ) { ?> <input type="hidden" name="country" id="country" value="<?php echo $field_type; ?>"> <?php } ?>
        </div>
	</div>
              <?php if(isset($errors) && array_key_exists('country',$errors)){ echo "<span class='error'>".ucfirst($errors['country'])."</span>";}?>

	</td>   	
	</tr>


	<tr>
	<?php $field_type =''; $field_type =  isset($company_details[0]['login_state']) &&!array_key_exists('state',$postvalue)? trim($company_details[0]['login_state']):""; ?>
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
		<option value="<?php echo $state_list['state_id']; ?>" <?php if($field_type == $state_list['state_id']) { echo 'selected=selected'; } ?> ><?php echo ucfirst($state_list["state_name"]); ?></option>
		<?php	} ?>
		</select>
	</div>
		</div></div>
              <?php if(isset($errors) && array_key_exists('state',$errors)){ echo "<span class='error'>".ucfirst($errors['state'])."</span>"; } ?>
        </td>
	</tr> 

	<tr>
	<?php $field_type =''; $field_type =  isset($company_details[0]['login_city']) && !array_key_exists('city',$postvalue) ? trim($company_details[0]['login_city']):"";    ?>
	<td valign="top" width="20%"><label><?php echo __('city_label'); ?></label><span class="star">*</span></td>
	<td>
		<div class="formRight">
		<div class="selector" id="uniform-user_type">
		<span><?php echo __('select_label'); ?></span>
		<div id="city_list">
			<select name="city" id="city" --onchange="change_company();">
			<option value="">--Select--</option>
			<?php 
			foreach($city_details as $city_list) {   ?>
			<option value="<?php echo $city_list['city_id']; ?>" <?php if($field_type == $city_list['city_id']) { echo 'selected=selected'; } ?> ><?php echo ucfirst($city_list["city_name"]); ?></option>
			<?php	} ?>
			</select>
		</div>	
		</div>


		</div>
		 <?php if(isset($errors) && array_key_exists('city',$errors)){ echo "<span class='error'>".ucfirst($errors['city'])."</span>"; }?>
	</td>   	
	</tr>*/ ?>
	<?php } 
	else { ?>
		<input type="hidden" name="country" id="country" value="<?php echo $_SESSION['country_id']; ?>">
		<input type="hidden" name="state" id="state" value="<?php echo $_SESSION['state_id']; ?>">
		<input type="hidden" name="city" id="city" value="<?php echo $_SESSION['city_id']; ?>">
	
	<?php } 
	?>

	
	<tr>
	<td valign="top" width="20%"><label><?php echo __('address'); ?></label><span class="star">*</span></td>        
	<td>
	<div class="new_input_field">
		
		<input type="text" name="address" id="address"  class="required" value="<?php echo isset($company_details[0]['address']) &&!array_key_exists('address',$postvalue)? trim($company_details[0]['address']):$postvalue['address']; ?>"  title="<?php echo __('enteraddress'); ?>" />
		 <?php if(isset($errors) && array_key_exists('address',$errors)){ echo "<span class='error'>".ucfirst($errors['address'])."</span>";}?>

          
	</div>
	</td>   	
	</tr>
	<tr>
		<td><label><?php echo __('profile_picture'); ?></label></td>
		<td>
			<?php if(!empty($company_details[0]['profile_picture']) && file_exists(DOCROOT.'public/uploads/driver_image/'.$company_details[0]['profile_picture'])){ ?>
					<img src="<?php echo URL_BASE.'public/uploads/driver_image/'.$company_details[0]['profile_picture'];?>" height="140px" width="140px" class="img-polaroid">
				<?php }else{ ?>
					<img height="140px" width="140px" src="<?php echo URL_BASE;?>public/uploads/driver_image/no-image.jpg" class="img-polaroid">
			<?php } ?>
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
		<input type="file" name="profile_picture"  class="required imageonly" id="profile_picture" value="<?php echo $company_details[0]['profile_picture'];?>"/>
			  <br><span style="color:red;" class="signup_error" id="profile_picture_error"><?php echo array_key_exists("profile_picture",$errors)?(str_replace($errors["profile_picture"],'errors.profile_picture.Upload::type','image format must be .jpeg, .jpg, .gif, .png')):"";?></span>
			  <input type="hidden" name="id" value="<?php echo $company_details[0]['id'] ?>" />
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
                            <div class="button dredB">   <input type="reset" onclick="change_state('<?php echo isset($company_details[0]['login_country']) ? $company_details[0]['login_country'] : ''; ?>','<?php echo isset($company_details[0]['login_state']) ? $company_details[0]['login_state'] : ''; ?>');change_city('<?php echo isset($company_details[0]['login_country']) ? $company_details[0]['login_country'] : ''; ?>','<?php echo isset($company_details[0]['login_state']) ? $company_details[0]['login_state'] : ''; ?>','<?php echo isset($company_details[0]['login_city']) ? $company_details[0]['login_city'] : ''; ?>')" value="<?php echo __('button_reset'); ?>" title="<?php echo __('button_reset'); ?>" /></div>
                            <div class="button greenB">  <input type="submit" value="<?php echo __('submit' );?>" name="submit_corporate" title="<?php echo __('submit' );?>" /></div>
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

var field_val = $("#firstname").val();
$("#firstname").focus().val("").val(field_val);
	
//$("#dob").datepicker({maxDate:new Date(1997, 11,31)});
$("#dob").datepicker({dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true,
        maxDate: "-8Y",
        minDate: "-100Y",
        yearRange: "-46:-8"});
$('#driver_license_expire_date,#driver_pco_license_expire_date,#driver_insurance_expire_date,#driver_national_insurance_expire_date').datepicker({changeMonth: true, changeYear: true, yearRange: new Date().getFullYear()+':+100',minDate: 0,maxDate: new Date(2100, 1,18) });
toggle(7);
//change_state('','');	
//change_city('','','');
//phone number validation
$("#phone" ).keyup(function() {
	//to allow left and right arrow key move
	if(event.which>=37 && event.which<=40)
	{
		return false;

	}
	//this.value = this.value.replace(/[`~!@#$%^&*()\s_|+\-=?;:'",.<>\{\}\[\]\\\/A-Z]/gi, '');
	this.value = this.value.replace(/[`~!@#$%^&*\s_|\=?;:'",.<>\{\}\[\]\\\/A-Z]/gi, '');
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
			change_driverinfo();
			change_taxiinfo();
			},
			error:function(data)
			{
				//alert(cid);
			}
		});	
    } 

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
  
function check_param(args) {
	if (typeof(args) != 'undefined' && args != null)
	{
		return true;
	}
	return false;
}  

function change_city(country_id,state_id,city_id)
{

      	var stateid= $("#state").val();
		var countryid= $("#country").val();
		var cityid= $("#city").val();		
		if(check_param(country_id) && check_param(state_id) && check_param(city_id) ) {
			//countryid = country_id;
			//stateid = state_id;
			//cityid = city_id;
		}
		
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

function change_company()
{

      		var countryid= $("#country").val();
      		var stateid= $("#state").val();
      		var city_id= $("#city").val();
      		var company_name = $("#company_name").val();

		  $.ajax({
			url:"<?php echo URL_BASE;?>add/getcompanylist",
			type:"get",
			data:"country_id="+countryid+"&state_id="+stateid+"&city_id="+city_id+"&company_name="+company_name,
			success:function(data){

			$('#taxicompany_list').html();
			$('#taxicompany_list').html(data);
			},
			error:function(data)
			{
				//alert(cid);
			}	
    		});
}
    $.validator.addMethod( "imageonly", function(value,element){
var pathLength = value.length; var lastDot = value.lastIndexOf( "."); var fileType = value.substring(lastDot,pathLength).toLowerCase(); return this.optional(element) || fileType.match(/(?:.jpg|.jpeg|.png)$/) }, "Please upload image file only");
    
</script>

