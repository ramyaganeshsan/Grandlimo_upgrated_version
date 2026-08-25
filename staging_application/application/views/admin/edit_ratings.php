<?php defined('SYSPATH') OR die("No direct access allowed.");
//echo "<pre>"; print_r($manager_details); exit;
?>
<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle">
            <form name="editratings_form" id="editratings_form" class="form" action="" method="post" enctype="multipart/form-data">
         		<table border="0" cellpadding="5" cellspacing="0" width="100%">
	         		<tr>
	         			<?php $field_type =''; 
							if(isset($ratings_details['ratings_no']) && !array_key_exists('ratings_no',$postvalue))
							{
							  $field_type =  $ratings_details['ratings_no']; 
							}elseif(isset($postvalue['ratings_no'])){
								$field_type = $postvalue['ratings_no'];
							} 
						?>

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
						<?php $ratings_title =''; 
							if(isset($ratings_details['ratings_title']) && !array_key_exists('ratings_no',$postvalue))
							{
							  $ratings_title =  $ratings_details['ratings_title']; 
							}elseif(isset($postvalue['ratings_title'])){
								$ratings_title = $postvalue['ratings_title'];
							} 
						?>
						<td valign="top" width="20%"><label><?php echo __('ratings_title'); ?></label><span class="star">*</span></td>        
						<td>
						<div class="new_input_field">
					        <input type="text" title="<?php echo __('enter_ratings_title'); ?>" class="required" id="ratings_title" name="ratings_title" value="<?php echo $ratings_title;?>" />
					        <?php if(isset($errors) && array_key_exists('ratings_title',$errors)){ echo "<span class='error'>".ucfirst($errors['ratings_title'])."</span>";}?>
						</div>
						</td>   	
					</tr>

					<tr>
					<?php $ratings_tags =''; 
							if(isset($ratings_details['ratings_tags']) && !array_key_exists('ratings_tags',$postvalue))
							{
							  $ratings_tags =  $ratings_details['ratings_tags'][0]; 
							}elseif(isset($postvalue['ratings_tags'])){
								$ratings_tags = isset($postvalue['ratings_tags'][0])?$postvalue['ratings_tags'][0]:'';
							} 
						?>

						<td valign="top" width="20%"><label><?php echo __('ratings_tags'); ?></label><span class="star">*</span></td>   
						<td style="width: 20%;">
							<div class="new_input_field">
								<input type="text"  class="required " name="ratings_tags[]" id="ratings_tags" title="<?php echo __('enter_ratings_tags'); ?>" value="<?php echo $ratings_tags; ?>">
								
							</div>
							<?php if(isset($errors) && array_key_exists('ratings_tags',$errors)){ echo "<span class='error'>".ucfirst($errors['ratings_tags'])."</span>";}?>
						</td>
						<td><a id="add_moretags" href="#">Add More Tags</a>&nbsp;&nbsp;
								<span id="error_tags" style="display:none;color:red;font-size:11px;">* cannot add more than 6 tags</span></td>

					</tr>
					<?php
					

					 $ratings_moretags =''; 
							
							if(isset($ratings_details['ratings_tags']) && !array_key_exists('ratings_tags',$postvalue) && count($ratings_details['ratings_tags'])>1 )
							{
				       	 		$ratings_moretags = array_slice($ratings_details['ratings_tags'],1);

							}elseif(isset($postvalue['ratings_tags'])  && count($postvalue['ratings_tags'])>1){
			       	 			$ratings_moretags = array_slice($postvalue['ratings_tags'],1);

								$ratings_moretags = $postvalue['ratings_tags'];
							} 
							//echo "<pre>";print_r($ratings_moretags);exit();
					?>


				    <table border="0" cellpadding="5" cellspacing="0"  class="form" id="sub_add" width="100%">
				      
				       	<?php //echo "<pre>";print_r($ratings_moretags);exit();
				       	 if($ratings_moretags!='' && count($ratings_moretags)>0){

				       	$newrow = 1;
					       	foreach ($ratings_moretags as $key => $value) {
					       

					  		?>

								<tr id="row_<?php echo $newrow;?>">
									<td width="20%"><label style="color:#fff"><?php echo __('ratings_tags'); ?></label></td>
									<td width="20%">
									<div class="new_input_field">
								
							
										<input type="text" style="margin-bottom:5px;"  class = "moretags required" name="ratings_tags[]" id="cpicture<?php echo $newrow;?>"  title="Enter the Ratings Tags" value = "<?php echo $value;?>"><br>
										<span id="error<?php echo $newrow;?>" style="display:none;color:red;font-size:11px;">*must not be 	empty</span>
										</div>
										</td>
										<td><a style="margin-left:18px;" href="javascript:;" onClick="return removetr_contact(<?php echo $newrow;?>);">Delete</a></td>
								</tr>
					  		<?php     	
					  		$newrow++;	
					       	}

				       	}?>  
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
								<div class="button greenB">  <input type="submit" value="<?php echo __('submit' );?>" name="submit_editratings" id="submit_editratings" title="<?php echo __('submit' );?>" /></div>
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

 $("#submit_editratings").click(function(){

		var tflag = 1;
		var Fflag = 0;
			
		$(".moretags").each(function(){
			var fld=$(this).val();
			var get_id= $(this).attr('id').replace('cpicture','');
			//console.log(fld);return false;
			if(fld!=''){
					$("#error"+get_id).hide();
					tflag=1;
			}else{
				$("#error"+get_id).show();
				//console.log('show');
				Fflag = 2;
			}

		});
		if(tflag == 1 && Fflag == 0){
			return true;
		}else{
			return false;
		}
       
	});


});

 $(function(){
	$('#add_moretags').click(function(){  
			var newRow = $("#sub_add tr").length; 
			//console.log(newRow);
			if(newRow <= 5){
			$("#sub_add").append('<tr id="row_'+newRow+'"><td width="20%"><label style="color:#fff"><?php echo __('ratings_tags'); ?></label></td><td width="20%"><div class="new_input_field"><input type="text" style="margin-bottom:5px;" class = "moretags required" name="ratings_tags[]" id="cpicture'+newRow+'"   title="Enter the Ratings Tags"><br><span id="error'+newRow+'" style="display:none;color:red;font-size:11px;">*must not be empty</span></div></td><td><a style="margin-left:18px;" href="javascript:;" onClick="return removetr_contact('+newRow+');">Delete</a></td></tr>');
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

