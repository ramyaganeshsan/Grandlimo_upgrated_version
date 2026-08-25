<?php defined('SYSPATH') OR die("No direct access allowed."); 
echo html::script('public/ckeditor/ckeditor.js');
?>
<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle">    
         <form name="edit_sms_template" id="edit_sms_template" class="form" action="" method="post" enctype="multipart/form-data">
			<table border="0" cellpadding="5" cellspacing="0" width="100%">
				<tr>
					<td valign="top" width="20%"><label><?php echo __('email_title'); ?></label><span class="star">*</span></td>
					<td>
						<div class="new_input_field2">
						<label><?php echo $email_title; ?></label>
						</div>
					</td>
				</tr>
				<tr>	 
	   <td valign="top" width="20%"><label><?php echo __('content'); ?></label></td>        
	   <td>
		   <div class="new_input_field1">	
              <textarea name="english_content" style="width:50%;" id="english_content" class="ckeditor required" title="<?php echo __('enterarabiccontent'); ?>" rows="7" cols="35"><?php echo isset($english_email_template) || !array_key_exists('english_content',$postvalue)? $english_email_template :$postvalue['english_content'];  ?></textarea>
             
		   </div>
	   </td>   	
           </tr> 
				<tr>	 
	   <td valign="top" width="20%"><label><?php echo __('arabic_content'); ?></label></td>        
	   <td>
		   <div class="new_input_field1">	
              <textarea name="arabic_content" style="width:50%;" id="arabic_content" class="ckeditor required" title="<?php echo __('enterarabiccontent'); ?>" rows="7" cols="35"><?php echo isset($arabic_email_template) || !array_key_exists('arabic_content',$postvalue)? trim($arabic_email_template):$postvalue['arabic_content'];  ?></textarea>
             
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
						<div class="button dredB"><input type="button" value="<?php echo __('button_reset'); ?>" title="<?php echo __('button_reset'); ?>" onclick="resetvalues();" /></div>
						<div class="button greenB"><input type="submit" value="<?php echo __('submit' );?>" name="submit_edit_template" title="<?php echo __('submit' );?>" /></div>
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
 toggle(3);
 
 
 CKEDITOR.instances.content.setData("");
});   
</script>