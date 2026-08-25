<?php defined('SYSPATH') OR die("No direct access allowed."); ?>
<!-- <script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery-1.6.3.min.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery.validate.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<style type="text/css">
	.new_input_field{
		width: 650px;
	}
	.number_input{
		margin-top: 10px;
	}
	.time_input{
		margin-top: 10px;
	}
	a {
		padding-left: 10px;
	}

</style>

<?php 
	$max_package_filed = 20;
	$max_time_intervals = 20;
	$minutes_interval = 60;
	$hours = 24;
	$minutes = 60;
	$loop_count = $hours*($minutes/$minutes_interval);
	$dateTime = "00:00:00";
	$start = date('h:i A', strtotime($dateTime));
	//$start = date('h:i A');
?>

<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle">   
       <form name="editcoupon_package_form" id="editcoupon_package_form" class="form" action="" method="post" enctype="multipart/form-data">
       <table border="0" cellpadding="5" cellspacing="0" width="100%">            
	
	<tr>
	<td valign="top" width="20%"><label><?php echo __('taxi_model'); ?></label><span class="star">*</span></td>        
	<td>
	<div class="new_input_field">
			<label><?php echo $company_details['model_name']; ?></label>              
	</div>
	</td>   	
	</tr> 

	<tr>
	<td valign="top" width="20%"><label><?php echo __('package'); ?></label><span class="star">*</span></td>      
	<?php if(isset($company_details['surge_pricing_interval'][0]) && !empty($company_details['surge_pricing_interval'][0])) { ?>  
		<td>
		<div class="new_package_field" id="myDIV">
		<?php 
			
			foreach($company_details['surge_pricing_interval'][0] as $key => $value) { 
				
			?>
			<input type="hidden" name="id" value="<?php echo $id ?>" id= "id">
			<div class="new_input_field">
				  <label><?php echo "If ";?></label>
				  <input type="text" name="package[<?php echo $key; ?>][from]" readonly style="width: 30px;border: none;" value="<?php echo $value['from']."% "; ?>" />	
				  <label>of drivers are available => &nbsp;&nbsp;&nbsp;</label>
				  <input class="number_input" style="width: 60px;" onkeypress="return isNumbers(event)" type="number" title="<?php echo __('fare'); ?>" class="number required" name="package[<?php echo $key; ?>][fare]" id="fare" value="<?php echo isset($value['fare']) &&!array_key_exists('fare',$postvalue)? trim($value['fare']):$postvalue['fare']; ?>"  maxlength="5" oncopy="return false;" onpaste="return false;" oncut="return false;" />
				  <label>%</label>
				  <label><?php echo " display text => ";?></label>
				  <input class="number_input" style="width: 60px;" type="text" title="Display Text" class="number required" name="package[<?php echo $key; ?>][display_fare]" value="<?php echo isset($value['display_fare']) &&!array_key_exists('display_fare',$postvalue)? trim($value['display_fare']):$postvalue['display_fare']; ?>"  maxlength="5" oncopy="return false;" onpaste="return false;" oncut="return false;" />
			</div>
		<?php  } ?>
		</div>
		</td>
	<?php } ?>	
	</tr>

	<!--26 feb 2021-->
        <tr>
           <td valign="top" width="20%"><label>Book Later Interval for Surge Price (Minutes) </label><span class="star">*</span></td>        
		   <td>
			   <div class="new_input_field">
	              <input type="text" title="<?php echo __('Enter book later interval time'); ?>" class="required" name="book_later_time_interval" id="book_later_time_interval" required value="<?php echo isset($company_details['book_later_time_interval']) &&!array_key_exists('book_later_time_interval',$postvalue)? $company_details['book_later_time_interval']:$postvalue['book_later_time_interval']; ?>" maxlength="5"  onkeypress="return isNumber(event)" style="width: 274px;" />
	              <?php if(isset($errors) && array_key_exists('book_later_time_interval',$errors)){ echo "<span class='error'>".ucfirst($errors['book_later_time_interval'])."</span>";}?>
			   </div>
           </td>   	
        </tr>

        <tr>
           <td valign="top" width="20%"><label>Book Later Fare for Surge Price</label><span class="star">*</span></td>        
		   <td>
			   <div class="new_input_field">
	              <input type="number" title="<?php echo __('Enter book later fare'); ?>" required class="required" name="book_later_fare" id="book_later_fare" value="<?php echo isset($company_details['book_later_fare']) &&!array_key_exists('book_later_fare',$postvalue)? $company_details['book_later_fare']:$postvalue['book_later_fare']; ?>" min="-100" max="10000" maxlength="5"  onkeypress="return isNumberic(event)" style="width: 272px;border: 1px solid #ccc;" />
	              <?php if(isset($errors) && array_key_exists('book_later_fare',$errors)){ echo "<span class='error'>".ucfirst($errors['book_later_fare'])."</span>";}?>
			   </div>
           </td>   	
        </tr>

        <tr>
           <td valign="top" width="20%"><label>Book Later Display Fare for Surge Price</label><span class="star">*</span></td>        
		   <td>
			   <div class="new_input_field">
	              <input type="text" title="<?php echo __('Enter book later display fare'); ?>" class="required" required name="book_later_display_fare" id="book_later_display_fare" value="<?php echo isset($company_details['book_later_display_fare']) &&!array_key_exists('book_later_display_fare',$postvalue)? $company_details['book_later_display_fare']:$postvalue['book_later_display_fare']; ?>" maxlength="10" style="width: 274px;"" />
	              <?php if(isset($errors) && array_key_exists('book_later_display_fare',$errors)){ echo "<span class='error'>".ucfirst($errors['book_later_display_fare'])."</span>";}?>
			   </div>
           </td>   	
        </tr>
        <!--26 feb 2021-->

	<tr>
	<td valign="top" width="20%"><label><?php echo __('Status'); ?></label><span class="star">*</span></td>        
	<td>
	<div class="new_input_field">
        <input type="radio" name="surge_pricing_status" value="A" <?php echo ($company_details['surge_pricing_status'][0] == 'A') ? 'checked="checked"' : ""; ?> >Enable                        
        <input type="radio" name="surge_pricing_status" value="D" <?php echo ($company_details['surge_pricing_status'][0] == 'D') ? 'checked="checked"' : ""; ?>>
        Disable                        
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
<script type="text/javascript">
$(document).ready(function(){
    
});

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

function isNumbers(e) {
  var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;
  var value = Number(e.target.value + e.key) || 0;
  

  if ((keyCode >= 37 && keyCode <= 40) || (keyCode != 47) || (keyCode == 8 || keyCode == 9 || keyCode == 13) || (keyCode >= 45 && keyCode <= 57)) {
    return isValidNumber(value);
  }
  return false;
}

function isNumberic(e) {
  var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;
  var value = Number(e.target.value + e.key) || 0;
  

  if ((keyCode >= 37 && keyCode <= 40) || (keyCode != 47) || (keyCode == 8 || keyCode == 9 || keyCode == 13) || (keyCode >= 45 && keyCode <= 57)) {
    return isValidNumber(value);
  }
  return false;
}

function isValidNumber (number) {
  return (-100 <= number && number <= 10000 )
}


</script>
