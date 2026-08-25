<?php defined('SYSPATH') OR die("No direct access allowed."); ?>

<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle">    
	 <form method="post" enctype="multipart/form-data" class="form" name="editprofile" id="editprofile" action ="">
	 <table border="0" cellpadding="5" cellspacing="0" width="100%">
	<tr>
	<td><b><?php echo ucfirst(__('personalinform')); ?></b></td>
	<td></td>	          
	</tr>
     	
           <tr>
           <td valign="top" width="20%"><label><?php echo ucfirst(__('name')); ?></label><span class="star">*</span></td>        
	   <td>
		   <div class="new_input_field">
              <input type="text" title="<?php echo __('enter_name'); ?>" name="name" id="name" value="<?php echo isset($login_detail['name']) &&!array_key_exists('name',$postvalue)? trim($login_detail['name']):$postvalue['name']; ?>"  minlength="4" maxlength="30" />
              <?php if(isset($errors) && array_key_exists('name',$errors)){ echo "<span class='error'>".ucfirst($errors['name'])."</span>";}?>
		   </div>
           </td>   	
           </tr>
                      	
	<tr>
	<td valign="top" width="20%"><label><?php echo __('email'); ?></label><span class="star">*</span></td>        
	   <td>
		   <div class="new_input_field">	
              <input type="text"  maxlength="30" minlength="3"  title="<?php echo __('enterfirstname'); ?>" id="email" name="email" value="<?php echo isset($login_detail['email']) &&!array_key_exists('email',$postvalue)? trim($login_detail['email']):$postvalue['email']; ?>" />
              <?php if(isset($errors) && array_key_exists('email',$errors)){ echo "<span class='error'>".ucfirst($errors['email'])."</span>";}?>
		   </div>
	   </td>   	
       </tr> 	
       
<?php
$country_code = (!empty($login_detail['country_code'])) ? $login_detail['country_code'].'-' : '';
?>
	<tr>
	<td valign="top" width="20%"><label><?php echo __('mobile'); ?></label><span class="star">*</span></td>        
	   <td>
		   <div class="new_input_field">	
              <input type="text"  maxlength="20" minlength="7"  title="<?php echo __('entermobileno'); ?>" id="phone" name="phone" value="<?php echo isset($login_detail['phone']) &&!array_key_exists('phone',$postvalue)? trim($country_code.$login_detail['phone']):$postvalue['phone']; ?>" />
              <?php if(isset($errors) && array_key_exists('phone',$errors)){ echo "<span class='error'>".ucfirst($errors['phone'])."</span>";}?>
		   </div>
	   </td>   	
       </tr>
	<tr>
	<td valign="top" width="20%"><label><?php echo __('pay_by'); ?></label><span class="star">*</span></td>        
	   <td>
							<div class="formRight">
					<div class="selector" id="uniform-user_type">
						<select name="pay_by" id="pay_by" title="<?php echo __('select_pay_by'); ?>" >
							<?php foreach($pay_by as $pay) { ?>
								<option value="<?php echo $pay['_id']; ?>" <?php if($login_detail['pay_by'] == $pay['_id']) { echo 'selected=selected'; } ?> ><?php echo ucfirst($pay['type']); ?></option>
							<?php } ?>
						</select>
                                                <input type="hidden"  id="pby_e" name="pby_e" value="<?php echo $login_detail['pay_by']; ?>" />
                				</div>
						<span class="error"><?php echo isset($errors['pay_by']) ? $errors['pay_by'] : ''; ?></span>
					</div>
                        </td>   	
       </tr> 
       <?php
       $hiden = isset($login_detail['pay_by'])?(($login_detail['pay_by'] == 3)?'hide':''):'hide'; 
       ?>
       <tr class="bkglimit <?php echo $hiden; ?>">
	<td valign="top" width="20%"><label><?php echo __('booking_limit'); ?></label><span class="star">*</span></td>        
	   <td>
		   <div class="new_input_field">	
                       <input type="text" maxlength="6" minlength="1"  title="<?php echo __('enter_booking_limit'); ?>" placeholder="<?php echo CURRENCY ?>" id="trip_amt_limit" name="trip_amt_limit" value="<?php echo isset($login_detail['trip_amt_limit']) &&!array_key_exists('trip_amt_limit',$postvalue)? trim($login_detail['trip_amt_limit']):''; ?>" />
              <?php if(isset($errors) && array_key_exists('trip_amt_limit',$errors)){ echo "<span class='error'>".ucfirst($errors['trip_amt_limit'])."</span>";}?>
		   </div>
	   </td>   	
       </tr>      
       <tr class="tripamt <?php echo $hiden; ?>">
	<td valign="top" width="20%"><label><?php echo __('amount')." Used"; ?></label><span class="star">*</span></td>        
	   <td>
            <div class="new_input_field">
                <input type="hidden"  id="trip_amt_made" name="trip_amt_made" value="<?php echo $mat; ?>" /><?php echo CURRENCY ?>
                <?php echo $mat; ?>
            </div>
	   </td>   	
       </tr>      
		<!-- <tr>
           <td valign="top" width="20%"><label><?php //echo __('discounts_passenger'); ?></label></td>        
	   <td>
		   <div class="new_input_field">
              <input type="text" title="<?php //echo __('enter_discounts_passenger'); ?>" class="required numbersdots numbersonly" name="discount" id="discount" value="<?php //echo isset($login_detail['discount']) &&!array_key_exists('discount',$postvalue)? trim($login_detail['discount']):$postvalue['discount']; ?>" maxlength="4"  />
              <?php //if(isset($errors) && array_key_exists('discount',$errors)){ echo "<span class='error'>".ucfirst($errors['discount'])."</span>";}?>
		   </div>
           </td>   	
           </tr> 	-->

		<td>&nbsp;</td>
		<td colspan="" class="star">*<?php echo __('required_label'); ?></td>
		</tr>                         
                    <tr>
			<td>&nbsp;</td>
                        <td colspan="">
                            <br />
                    
                            <div class="button blackB">     <input type="button" value="<?php echo __('button_back'); ?>" onclick="window.history.go(-1)" /></div>
                            <div class="button dredB">   <input type="reset" value="<?php echo __('button_reset'); ?>" title="<?php echo __('button_reset'); ?>" /></div>
                            <div class="button greenB">  <input type="submit" value="<?php echo __('submit' );?>" name="submit_editprofile" title="<?php echo __('submit' );?>" /></div>
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
	 
	$("#phone" ).keyup(function(event) {
		//to allow left and right arrow key move
		if(event.which>=37 && event.which<=40)
		{
			return false;

		}
		this.value = this.value.replace(/[`~!@#$%^&*\s_|\=?;:'",.<>\{\}\[\]\\\/A-Z]/gi, '');
	});
	 
	toggle(30);
	 var field_val = $("#name").val();
	$("#name").focus().val("").val(field_val);
	change_state();	
	change_city();	
        $('#pay_by').on('change keypress keyup',function(event){
            pay_by = $("#pay_by option:selected").val();
            pay_by_e = $("#pby_e").val();
            if(pay_by != 3)
            {
                $('.bkglimit, .tripamt').show();
            }
            else
            {
                t_amt = $('#trip_amt_made').val();
                if(t_amt != 0)
                {
                    alert('Oops !, An amount of '+t_amt+' is pending for payment in the current cycle');
                    //$("#pay_by option[value="+pay_by_e+"]").prop('selected',true);
                    return false;
                }
                $('.bkglimit, .tripamt').hide();
            }
        });
        $("#trip_amt_limit").on("keypress keyup", function(event) {
            var num = $(this).val();
            /*if (($(this).attr('id') == 'Rec-PrdId') || ($(this).attr('id') == 'Rec-RNo')) {

                $(this).val(num.replace(/[^\d].+/, ""));
                if (event.keyCode != 32 && event.keyCode != 9 && event.keyCode != 8 && event.which < 48 || event.which > 57) {
                    event.preventDefault();
                }

            }*/
            $(this).val(num.replace(/[^0-9\.]/g, ''));

            if (event.keyCode != 9 && event.keyCode != 8 && (event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
                      
                
                
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
			},
			error:function(data)
			{
				//alert(cid);
			}
		});	
    });

function change_state()
{

     		var countryid= $("#country").val();
     		var stateid= $("#state").val();
     		

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
    

function change_city()
{

      		var stateid= $("#state").val();
		var countryid= $("#country").val();
		var cityid= $("#city").val();
		
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


</script>


