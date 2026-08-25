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

		
		<div class="new_input_field" id="">
		      <input type="text" name="menu_name" id="menu_name" value="<?php 
                        echo isset($postvalue['menu_name'])?(Arr::get($postvalue,'menu_name')):trim($company_details[0]['menu_name']); ?>" style="width:400px;" />
		</div>
		
		      <?php if(isset($errors) && array_key_exists('menu_name',$errors)){ echo "<span class='error'>".ucfirst($errors['menu_name'])."</span>";}?>

		</td>   	
	   </tr> 

	<tr>
		<td valign="top" width="20%"><label><?php echo __('page_title'); ?></label><span class="star">*</span></td>        
		<td>

		
		<div class="new_input_field" id="">
		      <input type="text" name="page_title" id="page_title" value="<?php 
                        echo isset($postvalue['page_title'])?(Arr::get($postvalue,'page_title')):trim($company_details[0]['title']); ?>" style="width:400px;" />
		</div>
		
		      <?php if(isset($errors) && array_key_exists('page_title',$errors)){ echo "<span class='error'>".ucfirst($errors['page_title'])."</span>";}?>

		</td>   	
	   </tr>  

	<tr>
		<td valign="top" width="20%"><label><?php echo __('page_url'); ?></label><span class="star">*</span></td>        
		<td>

		
		<div class="new_input_field" id="">
		      <input type="text" name="page_url" id="page_url" readonly value="<?php 
                        echo isset($postvalue['page_url'])?(Arr::get($postvalue,'page_url')):trim($company_details[0]['page_url']); ?>" style="width:400px;" />
		</div>
		
		      <?php if(isset($errors) && array_key_exists('page_url',$errors)){ echo "<span class='error'>".ucfirst($errors['page_url'])."</span>";}?>

		</td>   	
	   </tr>  	   
           <tr>
           <td valign="top" width="20%"><label><?php echo __('meta_title_label'); ?></label></td>        
	   <td>
		<div class="new_input_field2">
			<textarea name="meta_title" id="meta_title" title="<?php echo __('enter_meta_title'); ?>" rows="7" cols="35"><?php 
                        echo isset($postvalue['meta_title'])?(Arr::get($postvalue,'meta_title')):trim($company_details[0]['meta_title']); ?></textarea>
			<?php if(isset($errors) && array_key_exists('meta_title',$errors)){ echo "<span class='error'>".ucfirst($errors['meta_title'])."</span>";}?>
		   </div>
           </td>
           </tr>
           	   
           <tr>
           <td valign="top" width="20%"><label><?php echo __('meta_key_label'); ?></label></td>        
	   <td>
		<div class="new_input_field2">
			<textarea name="meta_keyword" id="meta_keyword" title="<?php echo __('enter_meta_keywords'); ?>" rows="7" cols="35"><?php 
                        echo isset($postvalue['meta_keyword'])?(Arr::get($postvalue,'meta_keyword')):trim($company_details[0]['meta_keyword']); ?></textarea>
			<?php if(isset($errors) && array_key_exists('meta_keyword',$errors)){ echo "<span class='error'>".ucfirst($errors['meta_keyword'])."</span>";}?>
		   </div>
           </td>
           </tr> 

           <tr>
           <td valign="top" width="20%"><label><?php echo __('meta_desc_label'); ?></label></td>        
	   <td>
		<div class="new_input_field2">
			<textarea name="meta_description" id="meta_description" title="<?php echo __('enter_meta_description'); ?>" rows="7" cols="35"><?php 
                        echo isset($postvalue['meta_description'])?(Arr::get($postvalue,'meta_description')):trim($company_details[0]['meta_description']); ?></textarea>
			<?php if(isset($errors) && array_key_exists('meta_description',$errors)){ echo "<span class='error'>".ucfirst($errors['meta_description'])."</span>";}?>
		   </div>
           </td>
           </tr> 
	<tr>	

	   <td valign="top" width="20%"><label><?php echo __('content'); ?></label></td>        
	   <td>
		   <div class="new_input_field1">	
              <textarea name="content" id="content" class="ckeditor required" title="<?php echo __('entercontent'); ?>" rows="7" cols="35"><?php 
                        echo isset($postvalue['content'])?(Arr::get($postvalue,'content')):trim($company_details[0]['content']); ?></textarea>
              <?php if(isset($errors) && array_key_exists('content',$errors)){ echo "<span class='error'>".$errors['content']."</span>";}?>
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
	$('#page_name').val('');
	$('#meta_title').val('');
	$('#meta_keyword').val('');
	$('#meta_description').val('');
	CKEDITOR.instances.content.setData("");
}
 $(document).ready(function(){
  $("#page_title").focus(); 
	toggle(24);
	
});   
</script>

