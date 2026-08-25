<?php defined('SYSPATH') OR die("No direct access allowed."); ?>
<!-- <script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery-1.6.3.min.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery.validate.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<style type="text/css">
	.new_input_field{
		width: 300px;
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
	<?php if(isset($company_details['surge_pricing_fare']) && !empty($company_details['surge_pricing_fare'])) { ?>  
		<td>
		<div class="new_package_field" id="myDIV">
		<?php 
			$first = true;
			foreach($company_details['surge_pricing_fare'] as $key => $value) { 
				if($first){ $first = false; 
			?>
			<input type="hidden" name="id" value="<?php echo $id ?>" id= "id">
			<div class="new_input_field">
				  <input class="number_input" onkeypress="return isNumbers(event)" type="text" title="<?php echo __('fare'); ?>" class="number required" name="fare[]" id="fare" value="<?php echo isset($value['fare']) &&!array_key_exists('fare',$postvalue)? trim($value['fare']):$postvalue['fare']; ?>"  maxlength="5" oncopy="return false;" onpaste="return false;" oncut="return false;" style="width:70%;"/><span>&nbsp;&nbsp;&nbsp;x</span>
				  <a href="javascript:void(0);" class="add_button_package" title="Add field">
					<img src="<?php echo URL_BASE; ?>/public/img/add-icon.png" width="20" height="20"/>
				</a>
			</div>
		<?php } else { ?>
			<div class="new_input_field">
				  <input class="number_input" onkeypress="return isNumbers(event)" type="text" title="<?php echo __('fare'); ?>" class="number required" name="fare[]" id="fare" value="<?php echo isset($value['fare']) &&!array_key_exists('fare',$postvalue)? trim($value['fare']):$postvalue['fare']; ?>"  maxlength="5" oncopy="return false;" onpaste="return false;" oncut="return false;" style="width:70%;"/><span>&nbsp;&nbsp;&nbsp;x</span>
				  <a href="javascript:void(0);" class="remove_button_package" title="Add field"><img src="<?php echo URL_BASE; ?>/public/img/remove-icon.png" width="20" height="20"/></a>
			</div>
		<?php } } ?>
		</div>
		</td>
	<?php } ?>	
	</tr>
	
	<tr>
	<td valign="top" width="20%"><label><?php echo __('time_interval'); ?></label><span class="star">*</span></td>      
	<?php if(isset($company_details['surge_pricing_manual_interval']) && !empty($company_details['surge_pricing_manual_interval'])) { ?>  
		<td>
		<div class="new_time_interval_field" id="myDIV2">
		<?php 
		$first = true;
		foreach($company_details['surge_pricing_manual_interval'] as $key => $value) { 
			if($first) { $first = false;
		?>	
			<div class="new_input_field time_input">
				  <select name = "time_interval_from[]" style="width: 112px;">
				  	<option>Select the interval</option>
				  	<?php for($i=0; $i<$loop_count; $i++) { ?>

					<?php $end = strtotime("+$minutes_interval minutes", strtotime($start)); $added_time = date('h:i A', $end);?>

					<option <?php 
						$time_from = gmdate("H:i:A", $value['from']);
						$time_from = explode(":", $time_from);
						if($time_from[0] >12){
							$time_from[0] = $time_from[0] - 12;
							$time_from[0] = $time_from[0] < 10 ? $time_from[0] = "0".$time_from[0] : $time_from[0];
						}
						$time_from = implode(":", $time_from);
						if(isset($value['from']) && $time_from == date('h:i:A', strtotime($added_time))) { 
								echo "selected"; 
						} ?> 
						value="<?php echo  date('h:i:A', strtotime($added_time));?>"><?php echo  $added_time;?></option>

					<?php $start = $added_time; ?>
					<?php } ?>
				  </select>

				  <span> to 
				  	<select name = "time_interval_to[]" style="width: 112px;">
				  	<option>Select the interval</option>
				  	<?php for($i=0; $i<$loop_count; $i++) { ?>
					<?php $end = strtotime("+$minutes_interval minutes", strtotime($start)); $added_time = date('h:i A', $end);?>
					<option <?php 
						$time_to = gmdate("H:i:A", $value['to']);
						$time_to = explode(":", $time_to);
						if($time_to[0] >12){
							$time_to[0] = $time_to[0] - 12;
							$time_to[0] = $time_to[0] < 10 ? $time_to[0] = "0".$time_to[0] : $time_to[0];
						}
						$time_to = implode(":", $time_to);
					if(isset($value['to']) && $time_to == date('h:i:A', strtotime($added_time))) { echo "selected"; } ?> value="<?php echo  date('h:i:A', strtotime($added_time));?>"><?php echo  $added_time;?></option>
					<?php $start = $added_time; ?>
					<?php } ?>
				  </select>
				  <input type="hidden" name="default[]" value="<?php echo 1; ?>">
				  </span>
				  <a href="javascript:void(0);" class="add_button_time_interval" title="Add field">
					<img src="<?php echo URL_BASE; ?>/public/img/add-icon.png" width="20" height="20"/>
				</a>
			</div>
			   	
		<?php } else { ?>
				<div class="new_input_field time_input">
				  <select name = "time_interval_from[]" style="width: 112px;">
				  	<option>Select the interval</option>
				  	<?php for($i=0; $i<$loop_count; $i++) { ?>
					<?php $end = strtotime("+$minutes_interval minutes", strtotime($start)); $added_time = date('h:i A', $end);?>
					<option <?php 
						$time_from = gmdate("H:i:A", $value['from']);
						$time_from = explode(":", $time_from);
						if($time_from[0] >12){
							$time_from[0] = $time_from[0] - 12;
							$time_from[0] = $time_from[0] < 10 ? $time_from[0] = "0".$time_from[0] : $time_from[0];
						}
						$time_from = implode(":", $time_from);
					if(isset($value['from']) && $time_from == date('h:i:A', strtotime($added_time))) { echo "selected"; } ?> value="<?php echo  date('h:i:A', strtotime($added_time));?>"><?php echo  $added_time;?></option>
					<?php $start = $added_time; ?>
					<?php } ?>
				  </select>
				  <span> to 
				  	<select name = "time_interval_to[]" style="width: 112px;">
				  	<option>Select the interval</option>
				  	<?php for($i=0; $i<$loop_count; $i++) { ?>
					<?php $end = strtotime("+$minutes_interval minutes", strtotime($start)); $added_time = date('h:i A', $end);?>
					<option <?php 
						$time_to = gmdate("H:i:A", $value['to']);
						$time_to = explode(":", $time_to);
						if($time_to[0] >12){
							$time_to[0] = $time_to[0] - 12;
							$time_to[0] = $time_to[0] < 10 ? $time_to[0] = "0".$time_to[0] : $time_to[0];
						}
						$time_to = implode(":", $time_to);

						if(isset($value['to']) && $time_to == date('h:i:A', strtotime($added_time))) { echo "selected"; 
						} ?> value="<?php echo  date('h:i:A', strtotime($added_time));?>"><?php echo  $added_time;?></option>

					<?php $start = $added_time; ?>
					<?php } ?>
				  </select>
				  <input type="hidden" name="default[]" value="<?php echo $value['default'] ?>">
				  </span>
				   <a href="javascript:void(0);" class="remove_button_time_interval" title="Add field"><img src="<?php echo URL_BASE; ?>/public/img/remove-icon.png" width="20" height="20"/></a>
				</div>
		<?php } } ?>
		</td>
	<?php } ?>	
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
                            <div class="button greenB">  <input onclick="validate(event);" type="submit" value="<?php echo __('submit' );?>" name="submit_editcoupon_package" title="<?php echo __('submit' );?>" /></div>
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
    var maxField = <?php echo $max_package_filed ?>;
    var addButton = $('.add_button_package');
    var wrapper = $('.new_package_field');
    var x = document.getElementById("myDIV").childElementCount - 1;
    var fields = '<div class="new_input_field"><input class="number_input" onkeypress="return isNumbers(event)" type="text" title="<?php echo __('fare'); ?>" class="number required" name="fare[]" id="fare" value=""  maxlength="5" oncopy="return false;" onpaste="return false;" oncut="return false;" style="width:70%;"/><span>&nbsp;&nbsp;&nbsp;x</span><?php if(isset($errors) && array_key_exists('fare',$errors)){ echo "<span class='error'>".ucfirst($errors['fare'])."</span>";}?>&nbsp;<a href="javascript:void(0);" class="remove_button_package" title="Add field"><img src="<?php echo URL_BASE; ?>/public/img/remove-icon.png" width="20" height="20"/></a></div>'
    
    
    $(addButton).click(function(){
        if(x < maxField){ 
            x++;
            $(wrapper).append(fields);
        }
    });
    $(wrapper).on('click', '.remove_button_package', function(e){
		e.stopPropagation();
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    });

    var maxField2 = <?php echo $max_time_intervals ?>;
    var addButton2 = $('.add_button_time_interval');
    var wrapper2 = $('.new_time_interval_field');
    var fields2 = '<div class="new_input_field time_input"><select name = "time_interval_from[]" style="width: 112px;"><option>Select the interval</option><?php for($i=0; $i<$loop_count; $i++) {  ?><?php $end = strtotime("+$minutes_interval minutes", strtotime($start)); $added_time = date('h:i A', $end);?><option value="<?php echo  date('h:i:A', strtotime($added_time));?>"><?php echo  $added_time;?></option><?php $start = $added_time; ?><?php } ?></select><span> to <select name = "time_interval_to[]" style="width: 112px;"><option>Select the interval</option><?php for($i=0; $i<$loop_count; $i++) { ?><?php $end = strtotime("+$minutes_interval minutes", strtotime($start)); $added_time = date('h:i A', $end);?><option value="<?php echo  date('h:i:A', strtotime($added_time));?>"><?php echo  $added_time;?></option><?php $start = $added_time; ?><?php } ?></select><input type="hidden" name="default[]" value="<?php echo 0; ?>"></span> <a href="javascript:void(0);" class="remove_button_time_interval" title="Add field"><img src="<?php echo URL_BASE; ?>/public/img/remove-icon.png" width="20" height="20"/></a>'

    var y = document.getElementById("myDIV2").childElementCount;
    
    $(addButton2).click(function(){
        if(y < maxField2){ 
        	//alert(y , maxField2);
            y++;
            $(wrapper2).append(fields2);
        }
    });
    $(wrapper2).on('click', '.remove_button_time_interval', function(e){
		e.stopPropagation();
        e.preventDefault();
        $(this).parent('div').remove();
        y--;
    });
});

function validate(e)
   {
   	e.preventDefault();
    var time_from = $("select[name='time_interval_from[]']").map(function(){return $(this).val();}).get();

    var time_to = $("select[name='time_interval_to[]']").map(function(){return $(this).val();}).get();

    var package = $("input[name='fare[]']").map(function(){return $(this).val();}).get();

    var def = $("input[name='default[]']").map(function(){return $(this).val();}).get();

    var id = $("input[name='id']").val();

     $.ajax({

        'url' : '<?php echo URL_BASE; ?>edit/time_interval',
        'type' : 'POST',
        'data' : {
            'monday_from' : time_from,
            'monday_to' : time_to,
            'package' : package,
            'id' : id,
            'default':def
        },
        beforeSend: function() {
          $('.error').empty();
          $("#hour_settings_submit").attr("disabled", true);
          $("#hour_settings_submit").attr("value", 'loading');
          $( "p" ).empty();
        },
        'success' : function(data) {
            
            $("#submit_editcoupon_package").attr("disabled", false);
            $("#submit_editcoupon_package").attr("value", 'submit');  
            //console.log(data);          
            var datas=JSON.parse(data);
            //console.log(datas);
            if(datas!="success")
            {
            	if(datas[1].length > 0){
            		for (var i = datas[1].length - 1; i >= 0; i--) {
            			let index = 0;
            			$('#myDIV').find('div a').each(function(){
            				if(datas[1][i].id == index){
            					$( "<p"+' style="color :red "'+">"+datas[1][i].message+"</p>" ).insertAfter(this);
            				}
							index++;
						});
            		}
            	}
            	//console.log(datas[0]);
            	if(datas[0].length > 0){
            		for (var i = datas[0].length - 1; i >= 0; i--) {
            			let index = 0;
            			$('#myDIV2').find('div a').each(function(){
            				if(datas[0][i].id == index){
            					$( "<p"+' style="color :red "'+">"+datas[0][i].message+"</p>" ).insertAfter(this);
            				}
							index++;
						});
            		}
            	}
            }
            else
            {	
                window.location="<?php echo URL_BASE; ?>manage/surge_pricing";
            }
        },
        'error' : function(request,error)
        {
            $("#submit_editcoupon_package").attr("disabled", false);
            $("#submit_editcoupon_package").attr("value", 'submit');             
            //alert("Request: "+JSON.stringify(request));
        }
    });

   }

	function isNumbers(e) {
	  var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;
	  var value = Number(e.target.value + e.key) || 0;
	  

	  if ((keyCode >= 37 && keyCode <= 40) || (keyCode != 47) || (keyCode == 8 || keyCode == 9 || keyCode == 13) || (keyCode >= 45 && keyCode <= 57)) {
	    return isValidNumber(value);
	  }
	  return false;
	}

	function isValidNumber (number) {
	  return (-100 <= number && number <= 100 )
	}


</script>
