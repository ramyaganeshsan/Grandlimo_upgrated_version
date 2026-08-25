<?php defined('SYSPATH') OR die("No direct access allowed."); 
//echo html::script('public/ckeditor/ckeditor.js'); 
?>
<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle">    
         <form name="edit_sms_template" id="edit_sms_template" class="form" action="" method="post" enctype="multipart/form-data">
			<table border="0" cellpadding="5" cellspacing="0" width="100%">
				
				<tr>
					<td valign="top" width="20%"><label><?php echo __('admin_push_message'); ?></label><span class="star">*</span> <?php echo $total_passengers; ?>  <?php echo $remaining_total_passengers; ?></td>
					<td>
	
						<div class="new_input_field2">
						<textarea rows="7" cols="35" style="width: 50% !important;" placeholder="Please enter text within 200 characters" maxlength="200" required name="admin_push_message" id="admin_push_message" title="<?php echo __('sms_message'); ?>" rows="7" cols="35"></textarea>
						<?php if(isset($errors) && array_key_exists('admin_push_message',$errors)){ echo "<span class='error'>".ucfirst($errors['admin_push_message'])."</span>";}?>
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
						<div class="button blackB"><input type="button" value="<?php echo __('button_back'); ?>" onclick="window.history.go(-1)" /></div>
						<div class="button dredB"><input type="reset" value="<?php echo __('button_reset'); ?>" title="<?php echo __('button_reset'); ?>" /></div>
						<div class="button greenB"><input  type="submit" value="<?php echo __('submit' );?>" name="submit_admin_pnotification" title="<?php echo __('submit' );?>" /></div>
						<div class="clr">&nbsp;</div>
					</td>
				</tr>
				<tr>
					<td id="realtime_update_loader"></td>
					<td id="realtime_update"></td>
					<td id="cancel_push" style="display:none"><div class="button dredB"><input type="reset" value="<?php echo __('button_reset'); ?>" title="<?php echo __('button_reset'); ?>" /></div></td>
				</tr>
            </table>
        </form>
        </div>
        <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt"></div></div>
    </div>
</div>
<script>
window.skip = 0 ;
	function submit_push()
	{
		var msg = $("#admin_push_message").val();

		if(msg != '')
		{
		    window.timer_resize = setInterval(function()
		    {	    	
		    	send_push_notification();
				var skip = window.skip++ ;		
		    },20000);
		}
		else
		{
			alert("Push message must not be empty");
		}
	}

    function clear()
    {
    	$('#realtime_update_loader').html('');
    	$('#realtime_update').html('');
    	$('#cancel_push').hide();

        clearInterval(window.timer_resize);
    }
function send_push_notification(){
	var skip = window.skip;	
	var total_passengers = $("#total_passengers").val();


	var current  = skip*100;

	if(current > total_passengers)
	{
		clear();
	}	

	$.ajax({
		url:"<?php echo URL_BASE;?>manageuser/send_pushnotification_limit",
		type:"get",
		data:"limit=100"+"&skip="+skip,
		success:function(data){
			$('#realtime_update').html(100*skip+" out of "+total_passengers);
			$('#realtime_update_loader').html('<img src="<?php echo URL_BASE; ?>/public/images/prettyPhoto/default/loader.gif" />');
			$('#cancel_push').show();
		},
		error:function(data)
		{
			//alert(cid);
		}
	});
} 

</script>





