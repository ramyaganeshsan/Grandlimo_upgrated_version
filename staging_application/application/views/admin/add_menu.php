<?php
defined('SYSPATH') OR die("No direct access allowed.");
?>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery-1.6.3.min.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/permalink.js"></script>
<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle"> 
            <form method="POST" enctype="multipart/form-data" class="form" action="" >
			<table class="0" cellpadding="5" cellspacing="0">
				<tr>
					<td>
						<label><?php echo __('menu_name_label'); ?>:<span class="star">*</span></label> 
						<div class="new_input_field">
						<input type="text" class="required" title="<?php echo __('enter_menu_name_label'); ?>" name="menu_name" id="menu_name" value="<?php if(isset($postvalue) && array_key_exists('menu_name',$postvalue)){ echo $postvalue['menu_name']; }?>" >					
						<?php if(isset($errors) && array_key_exists('menu_name',$errors)){ echo "<span class='error'>".ucfirst($errors['menu_name'])."</span>";}?>
						</div>

					</td>					
				</tr>
				<tr>
					<td>
						<label><?php echo __('arabic_menu_name_label'); ?>:<span class="star"></span></label> 
						<div class="new_input_field">
						<input type="text" class="required" title="<?php echo __('enter_arabic_menu_name_label'); ?>" name="arabic_menu_name" id="arabic_menu_name" value="<?php if(isset($postvalue) && array_key_exists('arabic_menu_name',$postvalue)){ echo $postvalue['arabic_menu_name']; }?>" >					
						</div>

					</td>					
				</tr>
				<tr>
				<td>
						<label><?php echo __('permalink'); ?>:<span class="star">*</span></label> 
						<div class="new_input_field">
						<input type="text"  title="<?php echo __('enter_menu_name_label'); ?>" name="slug" id="slug" value="<?php if(isset($postvalue) && array_key_exists('slug',$postvalue)){ echo $postvalue['slug']; }?>" class="slug">			
						<?php if(isset($errors) && array_key_exists('slug',$errors)){ echo "<span class='error'>".ucfirst($errors['slug'])."</span>";}?>			
						</div>				
				</td>
				</tr>

			
			<tr>
				<td>
				<label><?php echo __('publish_status_label'); ?>:<span class="star">*</span></label> 
				<div>
					<input type="radio" name="status_posts" checked id="status_post" value="Publish">Publish
					<input type="radio" name="status_posts" id="status_post" value="Unpublish">Unpublish
				</div>			
				</td>
			<tr>

				
			<tr>
                        <td>
                            <div class="button dredB"> <input type="reset" name="reset_menu" title="<?php echo __('button_reset'); ?>" value="<?php echo __('button_reset'); ?>"></div>
                            <div class="button greenB">  <input type="submit" name="submit_menu" title ="<?php echo __('submit'); ?>" value="<?php echo __('submit'); ?>"></div>

                        </td></tr>

			</table>
            </form>

        </div>

        <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt" ></div></div>
    </div>

</div>

<script type="text/javascript">
 $(document).ready(function(){
  $("#menu_name").focus(); 
	toggle(24);
	$("#menu_name").keyup(function() {
		//this.value = this.value.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/0-9]/gi, '');
		this.value = this.value.replace(/[`~!@#$%^&*_+\-=?;:",.<>\{\}\[\]\\\/0-9]/gi, '');
	})
	$("#menu_name").slug();
	
});

</script>
