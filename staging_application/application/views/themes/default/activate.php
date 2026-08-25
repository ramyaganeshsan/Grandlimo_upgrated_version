<?php defined('SYSPATH') OR die('No direct access allowed.'); 
?>
	<div class="span2 main-menu-span">
				
			</div>
			<div id="content" class="span10">
				
			<!-- content starts -->			
			<h3><?php echo __('otp_title'); ?></h3>
			 <form method="POST" name="frmlogin" id="frmlogin">
        
        
            <div class="registration">
			
			<div class="contact_txt_over forgot_cent">
										<label><?php echo  __('otp_label'); ?><span class="star">*</span></label>
										<div class="first_name_sel">
										<div class="first_txt_lft"></div>
										<div class="first_txt_mid">
											<input type="text" name="otp" value="<?php if(isset($postvalue) && array_key_exists('otp',$postvalue)){ echo $postvalue['otp']; }?>" class="login_txt" id="otp" maxlength="10" />
											<?php if(isset($errors) && array_key_exists('otp',$errors)){ echo "<span class='error'>".ucfirst($errors['otp'])."</span>";}?>
										</div>
										<label><?php echo  __('email'); ?><span class="star">*</span></label>
										<div class="first_name_sel">
										<div class="first_txt_lft"></div>
										<div class="first_txt_mid">
											<input type="text" name="email" value="<?php if(isset($postvalue) && array_key_exists('email',$postvalue)){ echo $postvalue['email']; }?>" class="login_email" id="email" maxlength="50" />
											<?php if(isset($errors) && array_key_exists('email',$errors)){ echo "<span class='error'>".ucfirst($errors['email'])."</span>";}?>
										</div>
										<div class="first_txt_rft"></div>
										</div>
			</div>
			
                           <label class="errors" id="errors" style="margin:5px 0 0 0; width:100%;"></label>
             <div class="reg_text">
                    
					<div class="send_but forgot_cent">
											<div class="signup_left"></div>
											<div class="signup_middle1_contact">
												
												<input type="hidden" name="phone" id="phone" value="<?php echo $phone;?>">
												<input type="hidden" name="potp" id="potp" value="<?php echo $potp;?>">
												<span id="otp_btn"></span>
													<input name="submit" class="btn btn-inverse" id="submit_otp" type="submit" title="<?php echo __('btn_submit');?>" value="<?php echo __('btn_submit');?>"  />																																					
											</div>
											<div class="signup_right"></div>
					</div>
					
                       

                      </div>              
                           
                
                 </div>


         
        </form>
			</div>

<script language="javascript" type="text/javascript">
$(document).ready(function() {

$("#potp").focus();

var innerH = window.innerHeight;
if(isNaN(innerH)){
innerH = document.documentElement.clientHeight;
}
document.getElementById("content").style.minHeight = innerH-256+'px';

});
</script>			
