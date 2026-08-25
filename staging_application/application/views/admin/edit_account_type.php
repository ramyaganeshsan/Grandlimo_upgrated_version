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
						<label><?php echo __('account_type_label'); ?>:<span class="star">*</span></label> 
						<div class="new_input_field">
						<input type="text" class="required" title="<?php echo __('enter_account_type_label'); ?>" name="account_type" id="account_type" value="<?php echo isset($model_details[0]['account_type']) &&!array_key_exists('account_type',$postvalue)? trim($model_details[0]['account_type']):(isset($postvalue['account_type'])?$postvalue['account_type']:""); ?>" >					
						<?php if(isset($errors) && array_key_exists('account_type',$errors)){ echo "<span class='error'>".ucfirst($errors['account_type'])."</span>";}?>
						</div>
					</td>					
				</tr>
				
				<tr>
					<td>
						<label><?php echo __('arabic_account_type_label'); ?>:<span class="star">*</span></label> 
						<div class="new_input_field">
						<input type="text" class="required" title="<?php echo __('enter_account_type_label'); ?>" name="account_type_arabic" id="account_type_arabic" value="<?php echo isset($model_details[0]['account_type_arabic']) &&!array_key_exists('account_type_arabic',$postvalue)? trim($model_details[0]['account_type_arabic']):(isset($postvalue['account_type_arabic'])?$postvalue['account_type_arabic']:""); ?>" >					
						<?php if(isset($errors) && array_key_exists('account_type_arabic',$errors)){ echo "<span class='error'>".ucfirst($errors['account_type_arabic'])."</span>";}?>
						</div>
					</td>					
				</tr>
				<?php /* ?>			
				<tr>
					<td>
					<label><?php echo __('publish_status_label'); ?>:<span class="star">*</span></label> 
					<div>
						<input type="radio" name="status_posts" <?php if($model_details[0]['status'] == 'A') echo 'checked'; ?> id="status_post" value="Publish">Publish
						<input type="radio" <?php if($model_details[0]['status'] == 'D') echo 'checked'; ?> name="status_posts" id="status_post" value="Unpublish">Unpublish
					</div>			
					</td>
				<tr>
				<?php */ ?>
			
				<tr>	
							<td>
								<div class="button dredB"> <input type="reset" name="reset_editaccount_type" title="<?php echo __('button_reset'); ?>" value="<?php echo __('button_reset'); ?>"></div>
								<div class="button greenB">  <input type="submit" name="submit_editaccount_type" title ="<?php echo __('submit'); ?>" value="<?php echo __('submit'); ?>"></div>
	
							</td>
				</tr>

			</table>
            </form>

        </div>

        <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt" ></div></div>
    </div>

</div>
