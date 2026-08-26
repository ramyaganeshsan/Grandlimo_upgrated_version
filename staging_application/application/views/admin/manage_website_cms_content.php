<?php defined('SYSPATH') OR die("No direct access allowed."); 
echo html::script('public/ckeditor/ckeditor.js'); 

if(isset($_GET['type']) && $_GET['type'] == 'terms_and_conditions_page'){
	$cms_page = isset($website_content['terms_and_conditions_page'])?$website_content['terms_and_conditions_page']:[];
	$type = 'terms_and_conditions_page';
}elseif ((isset($_GET['type']) && $_GET['type'] == 'about_us_page') ) {
	$cms_page = isset($website_content['about_us_page'])?$website_content['about_us_page']:[];
	$type = 'about_us_page';
}

?>

<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle">    
         <form name="registration_form" id="registration_form" class="form" action="" method="post" enctype="multipart/form-data">
          <table border="0" cellpadding="5" cellspacing="0" width="100%">          
          
	
	<tr>	 
	   <td valign="top" width="20%"><label><?php echo __('content'); ?></label></td>        
	   <td>
		   <div class="new_input_field1">	
              <textarea name="content" style="width:50%;" id="content" class="ckeditor required" title="<?php echo __('entercontent'); ?>" rows="7" cols="35"><?php echo isset($cms_page['content']) || !array_key_exists('content',$postvalue)? trim($cms_page['content']):$postvalue['content'];  ?></textarea>
              <?php if(isset($errors) && array_key_exists('content',$errors)){ echo "<span class='error'>".$errors['content']."</span>";}?>
              <input type="hidden" name="type" id="type" value="<?php echo $type; ?>">
		   </div>
	   </td>   	
           </tr>
	<tr>	 
	   <td valign="top" width="20%"><label><?php echo __('arabic_content'); ?></label></td>        
	   <td>
		   <div class="new_input_field1">	
              <textarea name="content_arabic" style="width:50%;" id="content_arabic" class="ckeditor required" title="<?php echo __('enterarabiccontent'); ?>" rows="7" cols="35"><?php echo isset($cms_page['content_arabic']) || !array_key_exists('content_arabic',$postvalue)? trim($cms_page['content_arabic']):$postvalue['content_arabic'];  ?></textarea>
              <?php if(isset($errors) && array_key_exists('content_arabic',$errors)){ echo "<span class='error'>".$errors['content_arabic']."</span>";}?>
             
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
                            <div class="button greenB">  <input type="submit" value="<?php echo __('button_update' );?>" name="editsettings_submit" title="<?php echo __('submit' );?>" /></div>
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

