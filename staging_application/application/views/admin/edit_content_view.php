<?php defined('SYSPATH') OR die("No direct access allowed."); 
echo html::script('public/ckeditor/ckeditor.js'); 
?>

<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle">    
         <form name="registration_form" id="registration_form" class="form" action="" method="post" enctype="multipart/form-data">
          <table border="0" cellpadding="5" cellspacing="0" width="100%">
          
          
	<tr>
	<td class="titlebold"><?php echo ucfirst(__('edit_content_view')); ?></td>
	<td></td>	          
	</tr>
	
	<tr>
		<td valign="top" width="20%"><label><?php echo __('menu_label'); ?></label><span class="star">*</span></td>        
		<td>
		<?php $field_type = $company_details[0]['menu_id'];?>
		<div class="formRight">
		<?php /*<div class="selector" id="uniform-user_type">
		<span><?php echo __('select_label'); ?></span>
		      <select name="menu_name" id="menu_name">
		      <option value="">--Select--</option>
		      <?php foreach($menu_details as $listings) { ?>
		      <option value="<?php echo $listings['menu_id']; ?>" <?php if($field_type == $listings['menu_id']) { echo 'selected=selected'; } ?>><?php echo ucfirst($listings['menu_name']); ?></option>
		      <?php } ?>
		      </select>
		</div>
		
		<?php if(isset($errors) && array_key_exists('menu_name',$errors)){ echo "<span class='error'>".ucfirst($errors['menu_name'])."</span>";}?>*/ ?>
		<?php foreach($menu_details as $listings) { if($field_type == $listings['menu_id']) { echo $listings['menu_name'];  } } ?>   
		<input type="hidden" name="menu_name" value="<?php echo $field_type ?>">
		</div>  		

		</td>   	
	   </tr>  
	   
           <tr>
           <td valign="top" width="20%"><label><?php echo __('meta_title_label'); ?></label><span class="star">*</span></td>        
	   <td>
		<div class="new_input_field2">
			<textarea name="meta_title" style="width:50%;" id="meta_title" title="<?php echo __('enter_meta_title'); ?>" rows="7" cols="35"><?php echo isset($company_details[0]['meta_title']) || !array_key_exists('meta_title',$postvalue)? trim($company_details[0]['meta_title']):$postvalue['meta_title'];  ?></textarea>
			<?php if(isset($errors) && array_key_exists('meta_title',$errors)){ echo "<span class='error'>".ucfirst($errors['meta_title'])."</span>";}?>
		   </div>
           </td>
           </tr>
           	   
           <tr>
           <td valign="top" width="20%"><label><?php echo __('meta_key_label'); ?></label><span class="star">*</span></td>        
	   <td>
		<div class="new_input_field2">
			<textarea name="meta_keyword" style="width:50%;" id="meta_keyword" title="<?php echo __('enter_meta_keywords'); ?>" rows="7" cols="35"><?php echo isset($company_details[0]['meta_keyword']) || !array_key_exists('meta_keyword',$postvalue)? trim($company_details[0]['meta_keyword']):$postvalue['meta_keyword'];  ?></textarea>
			<?php if(isset($errors) && array_key_exists('meta_keyword',$errors)){ echo "<span class='error'>".ucfirst($errors['meta_keyword'])."</span>";}?>
		   </div>
           </td>
           </tr> 

           <tr>
           <td valign="top" width="20%"><label><?php echo __('meta_desc_label'); ?></label><span class="star">*</span></td>        
	   <td>
		<div class="new_input_field2">
			<textarea name="meta_description" style="width:50%;" id="meta_description" title="<?php echo __('enter_meta_description'); ?>" rows="7" cols="35"><?php echo isset($company_details[0]['meta_description']) || !array_key_exists('meta_description',$postvalue)? trim($company_details[0]['meta_description']):$postvalue['meta_description'];  ?></textarea>
			<?php if(isset($errors) && array_key_exists('meta_description',$errors)){ echo "<span class='error'>".ucfirst($errors['meta_description'])."</span>";}?>
		   </div>
           </td>
           </tr> 
	<tr>	 
	   <td valign="top" width="20%"><label><?php echo __('content'); ?></label></td>        
	   <td>
		   <div class="new_input_field1">	
              <textarea name="content" style="width:50%;" id="content" class="ckeditor required" title="<?php echo __('entercontent'); ?>" rows="7" cols="35"><?php echo isset($company_details[0]['content']) || !array_key_exists('content',$postvalue)? trim($company_details[0]['content']):$postvalue['content'];  ?></textarea>
              <?php if(isset($errors) && array_key_exists('content',$errors)){ echo "<span class='error'>".$errors['content']."</span>";}?>
		   </div>
	   </td>   	
           </tr>
	<tr>	 
	   <td valign="top" width="20%"><label><?php echo __('arabic_content'); ?></label></td>        
	   <td>
		   <div class="new_input_field1">	
              <textarea name="arabic_content" style="width:50%;" id="arabic_content" class="ckeditor required" title="<?php echo __('enterarabiccontent'); ?>" rows="7" cols="35"><?php echo isset($company_details[0]['arabic_content']) || !array_key_exists('arabic_content',$postvalue)? trim($company_details[0]['arabic_content']):$postvalue['arabic_content'];  ?></textarea>
             
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
                            <div class="button dredB">   <input type="button" value="<?php echo __('button_reset'); ?>" title="<?php echo __('button_reset'); ?>" onclick="resetvalues()" /></div>
                            <div class="button greenB">  <input type="submit" value="<?php echo __('submit' );?>" name="submit_addcompany" title="<?php echo __('submit' );?>" /></div>
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
function resetvalues()
{
	$('#menu_name').val('');
	$('#meta_title').val('');
	$('#meta_keyword').val('');
	$('#meta_description').val('');
	//CKEDITOR.instances.content.setData("");
}
 $(document).ready(function(){
  $("#menu_name").focus(); 
	toggle(24);	
});   
CKEDITOR.replace( 'arabic_content', {
    contentsLangDirection: 'rtl'
} );
</script>

