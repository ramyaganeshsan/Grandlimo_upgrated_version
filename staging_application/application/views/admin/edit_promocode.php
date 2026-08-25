<?php defined('SYSPATH') OR die("No direct access allowed."); 

// echo "<pre>";
// print_r($promocode_details);
// exit;

if(TIMEZONE)
{
	$current_time = convert_timezone('now',TIMEZONE);
	$current_date = explode(' ',$current_time);
	$start_time = $current_date[0].' 00:00:01';
	$end_time = $current_date[0].' 23:59:59';
	$date = $current_date[0].' %';
}
else
{
	$current_time =	date('Y-m-d H:i:s');
	$start_time = date('Y-m-d').' 00:00:01';
	$end_time = date('Y-m-d').' 23:59:59';
	$date = date('Y-m-d %');
}	

/* Sasidharan */
$corporate_promocode = 0;
if($postvalue && array_key_exists('corporate_promocode',$postvalue)) {
	$corporate_promocode = !empty($postvalue['corporate_promocode']) ? $postvalue['corporate_promocode'] : 0;
} else if(isset($promocode_details['corporate_promocode']) && !empty($promocode_details['corporate_promocode'])) {
	$corporate_promocode = $promocode_details['corporate_promocode'];
} 

/* Sasidharan Nov 15 2022 */
$corporate_group_status = $corporate_promocode == 1 ? false : true;

/* Sasidharan july 16 2022 */
$apply_user_limit = 0;
if($postvalue && array_key_exists('apply_user_limit',$postvalue)) {
	$apply_user_limit = !empty($postvalue['apply_user_limit']) ? $postvalue['apply_user_limit'] : 0;
} else if(isset($promocode_details['apply_user_limit']) && !empty($promocode_details['apply_user_limit'])) {
	$apply_user_limit = $promocode_details['apply_user_limit'];
}
$disable_status = $apply_user_limit == 1 ? false : true; 

/* Sasidharan Nov 15 2022 */
$corporate_group = "";
if($postvalue && array_key_exists('corporate_group',$postvalue)) {
	$corporate_group = !empty($postvalue['corporate_group']) ? $postvalue['corporate_group'] : 0;
} else if(isset($promocode_details['corporate_group']) && !empty($promocode_details['corporate_group'])) {
	$corporate_group = $promocode_details['corporate_group'];
} 

/* Sasidharan june 20 - 2022 */
$register_promocode = 0;
if($postvalue && array_key_exists('register_promocode',$postvalue)) {
	$register_promocode = !empty($postvalue['register_promocode']) ? $postvalue['register_promocode'] : 0;
} else if(isset($promocode_details['register_promocode']) && !empty($promocode_details['register_promocode'])) {
	$register_promocode = $promocode_details['register_promocode'];
} 

/* Sasidharan june 12 2024 */
$skipCard = 0;
if($postvalue && array_key_exists('skipCard',$postvalue)) {
	$skipCard = !empty($postvalue['skipCard']) ? $postvalue['skipCard'] : 0;
} else if(isset($promocode_details['skipCard']) && !empty($promocode_details['skipCard'])) {
	$skipCard = $promocode_details['skipCard'];
} 

?>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery-1.6.3.min.js"></script>

<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery.validate.js"></script>
<!-- time picker start-->
<link rel="stylesheet" href="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/css/ui-lightness/jquery-ui-1.8.11.custom.css" />
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/js/jquery-1.5.1.min.js"></script>
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/js/jquery-ui-1.8.11.custom.min.js"></script>
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery.validate.js"></script>
<!-- time picker start-->

 <div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle"> 

         <form name="addmotor_form" id="addmotor_form" class="form" action="" method="post" enctype="multipart/form-data">
	<table border="0" cellpadding="5" cellspacing="0" width="100%">                                                  

	

           
           <tr>
           <td valign="top" width="20%"><label><?php echo __('promocode'); ?></label></td>        
	       <td>
		   <div class="new_input_field">
              <input type="text" title="<?php echo __('enter_promocode'); ?>" readonly name="promocode" id="promocode" value="<?php echo isset($promocode_details['promocode']) &&!array_key_exists('promocode',$postvalue)? trim($promocode_details['promocode']):$postvalue['promocode']; ?>"  />
              <?php if(isset($errors) && array_key_exists('promocode',$errors)){ echo "<span class='error'>".ucfirst($errors['promocode'])."</span>";}?>
		   </div>
           </td>   	
           </tr>
           
           <?php /* <tr>
           <td valign="top" width="20%"><label><?php echo __('promo_discount'); ?></label></td>        
	       <td>
		   <div class="new_input_field">
              <input type="text" title="<?php echo __('enter_promo_discount'); ?>" readonly class="required numbersdots" name="promo_discount" id="promo_discount" value="<?php echo isset($promocode_details['promo_discount']) &&!array_key_exists('promo_discount',$postvalue)? trim($promocode_details['promo_discount']):$postvalue['promo_discount']; ?>" minlength="1" maxlength="8"  />
              <?php if(isset($errors) && array_key_exists('min_km',$errors)){ echo "<span class='error'>".ucfirst($errors['promo_discount'])."</span>";}?>
		   </div>
           </td>   	
           </tr>   */?>
           
            <tr>
           <td valign="top" width="20%"><label><?php echo __('start_date'); ?></label></td>        
	       <td>
		   <div class="new_input_field">
              <input type="text"   name="start_date" id="start_date" value="<?php echo isset($promocode_details['start_date']) &&!array_key_exists('start_date',$postvalue)? trim(Commonfunction::convertphpdate('Y-m-d h:i:s',$promocode_details['start_date'])):$postvalue['start_date']; ?>"    />
		   </div>
           </td>   	
           </tr>  
             <tr>
           <td valign="top" width="20%"><label><?php echo __('expire_date'); ?></label></td>        
	       <td>
		   <div class="new_input_field">
              <input type="text" class="start_exp_valid start_exp_timevalid" name="expire_date" id="expire_date" value="<?php echo isset($promocode_details['expire_date']) &&!array_key_exists('expire_date',$postvalue)? trim(Commonfunction::convertphpdate('Y-m-d h:i:s',$promocode_details['expire_date'])):$postvalue['expire_date']; ?>"  />
              <?php if(isset($errors) && array_key_exists('expire_date',$errors)){ echo "<span class='error'>".ucfirst($errors['expire_date'])."</span>";}?>
		   </div>
           </td>   	
           </tr> 
           <tr>
           <td valign="top" width="20%"><label><?php echo __('promo_limit'); ?></label></td>        
	       <td>
		   <div class="new_input_field">
              <input type="text"  class="required onlynumbers"  name="promo_limit" id="promo_limit" value="<?php echo isset($promocode_details['promo_limit']) &&!array_key_exists('promo_limit',$postvalue)? trim($promocode_details['promo_limit']):$postvalue['promo_limit']; ?>"  minlength="1" maxlength="4"  />
              <?php if(isset($errors) && array_key_exists('promo_limit',$errors)){ echo "<span class='error'>".ucfirst($errors['promo_limit'])."</span>";}?>
              <span class='error' id="limit_error"></span>
		   </div>
           </td>   	
           </tr>

           <!-- Sasidharan apr- 15- 2022 -->
           <tr>
           		<td valign="top" width="20%"><label><?php echo __('total_airport_trips'); ?></label></td>    
			       	<td>
								<div class="new_input_field">
									<input type="text"  class="required onlynumbers"  name="total_airport_trips" id="total_airport_trips" value="<?php echo isset($promocode_details['total_airport_trips']) &&!array_key_exists('total_airport_trips',$postvalue)? trim($promocode_details['total_airport_trips']):$postvalue['total_airport_trips']; ?>"  minlength="1" maxlength="4"  />
									<?php if(isset($errors) && array_key_exists('total_airport_trips',$errors)){ echo "<span class='error'>".ucfirst($errors['total_airport_trips'])."</span>";}?>
									<span class='error' id="limit_error"></span>
								</div>
		           </td>   	
           </tr> 

			<tr>
				<td></td>
			<td>
              <label><input type="checkbox" name="resend" id="resend"  />		<?php echo __('resend_promocode'); ?></label> 
           </td> 
       
           </tr> 


       <!-- Sasidharan apr 15 2022 -->
       <tr>
				<td></td>
				<td>
	          <label><input <?php echo $corporate_promocode == 1 ? "checked" : "" ?> value="1" type="checkbox" name="corporate_promocode" id="corporate_promocode"  />
	          	<?php echo __('corporate_promocode'); ?>
	          </label> 
	       </td> 
	     </tr> 

	     <!-- Sasidharan june 20 - 2022 -->
	     <tr>
				<td></td>
				<td>
	          <label><input <?php echo $register_promocode == 1 ? "checked" : "" ?> value="1" type="checkbox" name="register_promocode" id="register_promocode"  />
	          	<?php echo __('register_promocode'); ?>
	          </label> 
	       </td> 
	     </tr>

		 <!-- Sasidharan June 12 2024 -->
		 <tr>
				<td></td>
				<td>
	          <label><input <?php echo $skipCard == 1 ? "checked" : "" ?> value="1" type="checkbox" name="skipCard" id="skipCard"  />
	          	<?php echo __('Skip Card'); ?>
	          </label> 
	       </td> 
	     </tr>

	     <!-- Sasidharan july 16 2022 -->
       <tr>
				<td></td>
				<td>
          <label><input value="1" <?php echo $apply_user_limit == 1 ? "checked" : "" ?> type="checkbox" name="apply_user_limit" id="apply_user_limit"  />
            	<?php echo __('apply_user_limit'); ?>
          </label> 
         </td> 
       </tr>
       <tr>
       		<td valign="top" width="20%">
       		<label><?php echo __('maximum_allowed_limit'); ?></label>
       		<span class="star">*</span></td>        
	   	<td>
		   	<div class="new_input_field">
		   		<input <?php echo $disable_status ? "disabled" : "" ?> type="text" class="required onlynumbers" title="" name="maximum_allowed_limit" id="maximum_allowed_limit" min="0" value="<?php echo isset($promocode_details['maximum_allowed_limit']) &&!array_key_exists('maximum_allowed_limit',$postvalue)? trim($promocode_details['maximum_allowed_limit']):$postvalue['maximum_allowed_limit']; ?>" maxlength="5"  />
		      	<br /><span style="color: red;" id="user_limit_error"></span>
		   	</div>
       		</td>   	
       </tr>

       <!-- Sasidharan Nov 15 2022 -->
       <!-- Corporate group -->
       <tr>
       		<td valign="top" width="20%">
       			<label><?php echo __('corporate_group'); ?></label>
	   	<td>
		   	<div class="new_select_field">
	           <select <?php echo $corporate_group_status ? "disabled" : "" ?> id="corporate_group" name="corporate_group">
		           	<option value="">Corporate Group</option>
		           	<?php foreach($corporateGroups as $value) { ?>
		           		<option <?php echo $corporate_group == $value['_id'] ? "selected" : "" ?> value="<?php echo $value['_id'] ?>"><?php echo $value['group_name'] ?></option>
		           	<?php } ?>
	           </select>
	           	<br />
		   		<span style="color: red;" id="corporate_group_error"></span>
		   	</div>
       		</td>   	
       </tr>

	</tr>                         
                    <tr>
			<td width="20%">&nbsp;</td>
                        <td colspan="">
                            <br />
                    
                            <div class="button blackB">     <input type="button" value="<?php echo __('button_back'); ?>" onclick="window.history.go(-1)" /></div>
                            <div class="button dredB">   <input type="reset" value="<?php echo __('button_reset'); ?>" title="<?php echo __('button_reset'); ?>" /></div>
                            <div class="button greenB">  <input type="submit" value="<?php echo __('submit' );?>" name="submit_addmodel" onclick = "return check_limit(); " title="<?php echo __('submit' );?>" /></div>
                            <div class="clr">&nbsp;</div>
                        </td>
                    </tr>            

           

		</table>



           

	   </div>

        </form>
        </div>
        <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt"></div></div>
    </div>
</div>
<style type="text/css">
    #ui-datepicker-div { z-index: 1041 !important}
</style>  
<script type="text/javascript">
$(document).ready(function(){

	/* Sasidharan july 16 2022 */
	$('#apply_user_limit').change(function () {
		let applyStatus = $('#apply_user_limit').is(':checked');
		if(applyStatus) {
	    	$("#maximum_allowed_limit").attr('disabled',false);
		} else {
	    	$("#maximum_allowed_limit").attr('disabled',true);
		}
	});

	/* Sasidharan Nov 15 2022 */
	$('#corporate_promocode').change(function () {
		let applyStatus = $('#corporate_promocode').is(':checked');
		if(applyStatus) {
	    	$("#corporate_group").attr('disabled',false);
		} else {
	    	$("#corporate_group").attr('disabled',true);
		}
	});

	$("#send_promocode").click( (event) => {
		$("#user_limit_error").html("");
		let applyStatus = $('#apply_user_limit').is(':checked');
		let userLimit = $("#maximum_allowed_limit").val();
		let promoLimit = $("#promo_limit").val();
		let submitStatus = true;

		if(applyStatus && userLimit != "" && promoLimit != "") {
			if(Number(promoLimit) < Number(userLimit)) {
				submitStatus = false;
				$("#user_limit_error").html("User limit must be less then or equal to promocode limit");
			}
		}

		/* Sasidharan nov 15 2022 */
		let corporatePromocode = $("#corporate_promocode").is(":checked");
		let corporateGroup = $("#corporate_group").val();
		if(corporatePromocode && corporateGroup == "") {
			submitStatus = false;
			$("#corporate_group_error").html("Field must not be empty");
		}

		var promo_discount = jQuery("#promo_limit").val();
		var current_discount = <?php echo isset($promocode_details['promo_limit'])?$promocode_details['promo_limit']:'0'; ?>;
		if(promo_discount < current_discount) {
			jQuery("#limit_error").html("<?php echo __('promo_limit_msg'); ?>");
			submitStatus = false;
		}

		if(submitStatus) {
			$("#frmusers").submit();
		} else {
			event.preventDefault();
		}
	});
	/* End Sasidharan july 16 2022 */

 $("#addmotor_form").validate();
$("#credits").focus();	

toggle(27);

//jQuery("#addmotor_form").validate();	 
});


function check_limit()
{
	var expire_date = jQuery("#expire_date").val();
	var promo_discount = jQuery("#promo_limit").val();
	var current_discount = <?php echo isset($promocode_details['promo_limit'])?$promocode_details['promo_limit']:'0'; ?>;
	if(promo_discount < current_discount)
	{
		jQuery("#limit_error").html("<?php echo __('promo_limit_msg'); ?>");
		return false;
	}
	else
	{
		return true;
	}
	
	
}



	$( "#start_date" ).datetimepicker({
	minDate:0,
	showTimepicker:true,
	showSecond: true,
	timeFormat: 'hh:mm:ss',
	dateFormat: 'yy-mm-dd',
	stepHour: 1,
	stepMinute: 1,
	minDateTime : new Date(), 
	stepSecond: 1,
      onClose: function( selectedDate ) {
        $( "#end_date" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#expire_date" ).datetimepicker({
		showTimepicker:true,
		showSecond: true,
		timeFormat: 'hh:mm:ss',
		dateFormat: 'yy-mm-dd',
		stepHour: 1,
		stepMinute: 1,
		minDateTime : new Date(),
		stepSecond: 1,
      onClose: function( selectedDate ) {
        $( "#start_date" ).datepicker( "option", "maxDate", selectedDate );
      }
    });	
    
  jQuery.validator.addMethod("start_exp_valid", function(value, element) {
	 
	var start_date = $('#start_date').val();
	//alert(start_date);
	//alert(value);
	if(start_date!=''&&value!='')
	{
		var match_start = start_date.match(/^(\d+)-(\d+)-(\d+) (\d+)\:(\d+)\:(\d+)$/);
		var d1 = new Date(match_start[1], match_start[2] - 1, match_start[3], match_start[4], match_start[5], match_start[6]);
		var match_end = value.match(/^(\d+)-(\d+)-(\d+) (\d+)\:(\d+)\:(\d+)$/);
		var d2 = new Date(match_end[1], match_end[2] - 1, match_end[3], match_end[4], match_end[5], match_end[6]);
		//console.log(date.getTime() / 1000);
		/*var start_data=start_date.split(' ');
		var st_date=start_data[0].split('-');
		var st_time=start_data[1].split(':');
		alert(start_data[0]);
		var expire_data=value.split(' ');
		var ex_date=expire_data[0].split('-');
		var ex_time=expire_data[1].split(':');		
		
		var d1 = new Date(st_date.pop(), st_date.pop() - 1, st_date.pop(),st_time.pop(),st_time.pop(),st_time.pop());
		alert(d1);
		var d2 = new Date(ex_date.pop(), ex_date.pop() - 1, ex_date.pop(),ex_time.pop(),ex_time.pop(),ex_time.pop());
		alert(d2); */
		
		if(d1.getTime() > d2.getTime())
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	else
	{
		return true;
	}
		 
 },"Expire date and time should be greater than start date");
 
</script>
