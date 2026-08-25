<?php defined('SYSPATH') OR die("No direct access allowed."); ?>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery-1.6.3.min.js"></script>
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/js/jquery-ui-1.8.11.custom.min.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery.validate.js"></script>
<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle">
            <form name="addratings_form" id="addratings_form" class="form" action="" method="post" enctype="multipart/form-data">
         		<table border="0" cellpadding="5" cellspacing="0" width="100%">
	         		<tr>
						<?php $field_type =''; if(isset($postvalue) && array_key_exists('ratings_no',$postvalue)){ $field_type =  $postvalue['ratings_no']; } ?>
							
							<td valign="top" width="20%"><label><?php echo __('ratings_no'); ?></label><span class="star">*</span></td>        
							<td>
								<div class="formRight">
								<div class="selector" id="uniform-user_type">
								<span><?php echo __('select_label'); ?></span>
								<div>
								      <select name="ratings_no" id="ratings_no" class="required" title="<?php echo __('select_the_ratings_no'); ?>">
								      <option value="">--Select--</option>
								      
								      <option value="1" <?php if($field_type == 1) { echo 'selected=selected'; } ?>>
								      1</option>
								      <option value="2" <?php if($field_type == 2) { echo 'selected=selected'; } ?>>
								      2</option>
								      <option value="3" <?php if($field_type == 3) { echo 'selected=selected'; } ?>>
								      3</option>
								      <option value="4" <?php if($field_type == 4) { echo 'selected=selected'; } ?>>
								      4</option>
								      <option value="5" <?php if($field_type == 5) { echo 'selected=selected'; } ?>>
								      5</option>
								      
								      </select>
								      
								</div>      
								
								</div>
								</div>
								<label for="ratings_no" generated="true" style="display:none" class="errorvalid"><?php echo __('select_the_ratings_no'); ?></label>
								<?php if(isset($errors) && array_key_exists('ratings_no',$errors)){ echo "<span class='error'>".ucfirst($errors['ratings_no'])."</span>";}?>
							</td>   	
					</tr>
	
					<tr>
						<td valign="top" width="20%"><label><?php echo __('ratings_title'); ?></label><span class="star">*</span></td>        
						<td>
						<div class="new_input_field">
					        <input type="text" title="<?php echo __('enter_ratings_title'); ?>" class="required" id="ratings_title" name="ratings_title" value="<?php if(isset($postvalue) && array_key_exists('ratings_title',$postvalue)){ echo $postvalue['ratings_title']; }?>" />
					        <?php if(isset($errors) && array_key_exists('ratings_title',$errors)){ echo "<span class='error'>".ucfirst($errors['ratings_title'])."</span>";}?>
						</div>
						</td>   	
					</tr>

					<tr>
						<td valign="top" width="20%"><label><?php echo __('ratings_tags'); ?></label><span class="star">*</span></td>   
						<td style="width: 20%;">
							<div class="new_input_field">
								<input type="text"  class="required " name="ratings_tags[]" id="ratings_tags" title="<?php echo __('enter_ratings_tags'); ?>" value="<?php if(isset($postvalue) && array_key_exists('ratings_tags',$postvalue)){ echo $postvalue['ratings_tags'][0]; }?>">
								
							</div>
							<?php if(isset($errors) && array_key_exists('ratings_tags',$errors)){ echo "<span class='error'>".ucfirst($errors['ratings_tags'])."</span>";}?>
						</td>
							<td><a id="add_moretags" href="#">Add More Tags</a>&nbsp;&nbsp;
								<span id="error_tags" style="display:none;color:red;font-size:11px;">* cannot add more than 6 tags</span></td>

					</tr>
					 
				    <table border="0" cellpadding="5" cellspacing="0"  class="form" id="sub_add" width="100%">
				       
				       	 	<?php if(isset($postvalue) && !empty($postvalue['ratings_tags'])!='' && count($postvalue['ratings_tags'])>1)
				       	 	{
				       	 		$moretags = array_slice($postvalue['ratings_tags'],1);
					       		$newrow = 1;
						       	foreach ($moretags as $key => $value) {

						  		?>

									<tr id="row_<?php echo $newrow;?>">
										<td width="20%"><label style="color:#fff"><?php echo __('ratings_tags'); ?></label></td>
										<td width="20%">
										<div class="new_input_field"> 
											<input type="text" style="margin-bottom:5px;"  class = "moretags" name="ratings_tags[]" id="cpicture<?php echo $newrow;?>"  class="required" title="Enter the Ratings Tags" value = "<?php echo $value;?>"><br>
											</div>
											<span id="error<?php echo $newrow;?>" style="display:none;color:red;font-size:11px;">*must not be 	empty</span><td><a style="margin-left:18px;" href="javascript:;" onClick="return removetr_contact(<?php echo $newrow;?>);">Delete</a></td>
									</tr>
						  		<?php     	
						  		$newrow++;	
						       	}
							}
					       	?>  

							   
				    </table>
				       
				    <table border="0" cellpadding="0" cellspacing="0" width="100%">		
						<tr>
							<td>&nbsp;</td>
							<td  class="star">*<?php echo __('required_label'); ?></td>
						</tr> 
						<tr>
							<td style="width:20%;">&nbsp;</td>
							<td colspan="2">
								<br />
								
								<div class="button blackB">     <input type="button" value="<?php echo __('button_back'); ?>" onclick="window.history.go(-1)" /></div>
								<div class="button dredB">   <input type="reset" value="<?php echo __('button_reset'); ?>" title="<?php echo __('button_reset'); ?>" /></div>
								<div class="button greenB">  <input type="submit" value="<?php echo __('submit' );?>" name="submit_addratings" id="submit_addratings" title="<?php echo __('submit' );?>" /></div>
								<div class="clr">&nbsp;</div>
							</td>
						</tr> 
					</table>	                         
				</table>	                         
        	</form>
        </div>
        
        <div class="content_bottom">
	        <div class="bot_left"></div>
	        <div class="bot_center"></div>
	        <div class="bot_rgt"></div>
        </div>
    </div>
</div> 
<script type="text/javascript">
$(document).ready(function(){
	$("#ratings_no").focus();
	toggle(6);
	
	$("#submit_addratings").click(function(){
		var tflag = 1;
		var Fflag = 0;
		//var validator=jQuery("#addratings_form").valid({});
	/*	if($(".moretags").val() == undefined){
			alert('pls enter ratings tags');
			return false;
		}else{*/
			$(".moretags").each(function(){
				var fld=$(this).val();
				var get_id= $(this).attr('id').replace('cpicture','');
				
				if(fld!=''){
						$("#error"+get_id).hide();
						tflag=1;
				}else{
					$("#error"+get_id).show();

					Fflag = 2;
				}

			});
			if(tflag == 1 && Fflag == 0){
				return true;
			}else{
				return false;
			}
		//}
		
       
	});


});

$(function(){
	$('#add_moretags').click(function(){  
			var newRow = $("#sub_add tr").length; 
			console.log(newRow);
			if(newRow <= 5){
			$("#sub_add").append('<tr id="row_'+newRow+'"><td width="20%"><label style="color:#fff"><?php echo __('ratings_tags'); ?></label></td><td width="20%"><div class="new_input_field"><input class = "moretags required" type="text" style="margin-bottom:5px;" name="ratings_tags[]" id="cpicture'+newRow+'"   title="Enter the Ratings Tags"><br></div><span id="error'+newRow+'" style="display:none;color:red;font-size:11px;">*must not be empty</span><td><a  style="margin-left:18px;" href="javascript:;" onClick="return removetr_contact('+newRow+');">Delete</a></td></tr>');
			return false;	
		}else
		{
			$("#error_tags").show();
    		return false;
		}
	});
});  

function removetr_contact(rowid) {
   var r1 = "row_"+rowid;
   $("#sub_add tr").each(function () {    
		if(r1==$(this).attr('id')) {
			$(this).remove();
		}   
   });
   return false;
}
 
</script>
