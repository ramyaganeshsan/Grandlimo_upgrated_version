<?php defined('SYSPATH') OR die("No direct access allowed."); 
?>
<!-- <script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery-1.6.3.min.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery.validate.js"></script> -->

<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle"> 
         <form name="promotional_push_notification" id="promotional_push_notification" class="form" action="" method="post">
       <table border="0" cellpadding="5" cellspacing="0" width="100%">                               
	<tr>
	<td class="titlebold"><?php echo "Send promotional push notification."; ?></td>
	<td></td>	          
	</tr>
	
	<tr>
	<td valign="top" width="20%"><label><?php echo __('title'); ?></label><span class="star">*</span></td>        
	<td>
	<div class="new_input_field">
	<input placeholder="Push notification title" type="text" title="<?php echo "Push notification title"; ?>" class="required" required="" name="title" id="title" value="<?php if(isset($postvalue) && array_key_exists('title',$postvalue)){ echo $postvalue['title']; }?>"  maxlength="100" />
	<?php if(isset($errors) && array_key_exists('title',$errors)){ echo "<span class='error'>".ucfirst($errors['title'])."</span>";}?>
	</div>
	</td>   	
	</tr> 

	<tr>
	<td valign="top" width="20%"><label><?php echo __('description'); ?></label><span class="star">*</span></td>        
	<td>
	<div class="new_input_field">
	<textarea 
		rows=7 
		cols=35 
		style="width: 100%;" 
		placeholder="Please enter text within 250 characters" 
		maxlength="250" 
		required="" 
		name="description" 
		id="description" 
		title="Push notification description"
	><?php if(isset($postvalue) && array_key_exists('description',$postvalue)){ echo $postvalue['description']; }?></textarea>
	<?php if(isset($errors) && array_key_exists('description',$errors)){ echo "<span class='error'>".ucfirst($errors['description'])."</span>";}?>
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
			<div class="button greenB">  <input type="submit" value="<?php echo __('submit' );?>" name="promotional_push_notification" title="<?php echo __('submit' );?>" /></div>
			<div class="clr">&nbsp;</div>
		</td>
	</tr> 
    </table>
        </form>
        </div>
        <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt"></div></div>
    </div>
</div>  

