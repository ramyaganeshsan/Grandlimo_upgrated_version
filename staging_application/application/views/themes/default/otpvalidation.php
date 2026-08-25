<?php defined('SYSPATH') OR die('No direct access allowed.'); 
?>
	<div class="span2 main-menu-span">
				
			</div>
			<div id="content" class="span10">
			 <?php
//For Notice Messages
								//===================
								$sucessful_message=Message::display();
//echo $sucessful_message;		
//$Message->message;
		    if($sucessful_message) { ?>

				<div id="messagedisplay">
					<div class="alert alert-success">
                        <div class="success_float_tt">
							<button type="button" class="close" data-dismiss="alert">×</button>
		                    <label style="float: left; margin: 4px 0 0 6px;"><?php echo $sucessful_message; ?></label>
                        </div>
                    </div>
			    </div>
								<?php } ?>    	
			<!-- content starts -->			
			<h3><?php echo __('otp_title'); ?></h3>
			 <form method="POST" name="frmlogin" id="frmlogin">
        
        
            <div class="registration">
			
			<div class="contact_txt_over forgot_cent">
										<label><?php echo  __('otp_label'); ?><span class="star">*</span></label>
										<div class="first_name_sel">
										<div class="first_txt_lft"></div>
										<div class="first_txt_mid">
											<input type="text" name="potp" value="" class="login_txt" id="potp" maxlength="10" />
										</div>
										<div class="first_txt_rft"></div>
										</div>
			</div>
			
                           <label class="errors" id="errors" style="margin:5px 0 0 0; width:100%;"></label>
             <div class="reg_text">
                    
					<?php 
				//	foreach($passengerdetails as $values)
				//	{
						$email = $passengerdetails['email'];
						$phone = $passengerdetails['phone'];
				//	}
					?>
					
					<div class="send_but forgot_cent">
											<div class="signup_left"></div>
											<div class="signup_middle1_contact">
												<input type="hidden" name="customer_pemail" id="customer_pemail" value="<?php echo $email;?>">
												<input type="hidden" name="phone" id="phone" value="<?php echo $phone;?>">
												<input type="hidden" name="key" id="key" value="<?php echo $_GET['key'];?>">
												<span id="otp_btn"></span>
													<input name="submit_forgot_password" class="btn btn-inverse" id="submit_otp" type="button" title="<?php echo __('btn_submit');?>" value="<?php echo __('btn_submit');?>" onclick="checkpotp()" />													
													<input name="submit_forgot_password" class="btn btn-inverse" id="resend_otp" type="button" title="<?php echo __('btn_resend');?>" value="<?php echo __('btn_resend');?>" onclick="resendpotp()" />													
											</div>
											<div class="signup_right"></div>
					</div>
					
                       

                      </div>              
                           
                
                 </div>


         
        </form>
			</div>

<script language="javascript" type="text/javascript">
$(document).ready(function() {

$("#email").focus();

var innerH = window.innerHeight;
if(isNaN(innerH)){
innerH = document.documentElement.clientHeight;
}
document.getElementById("content").style.minHeight = innerH-256+'px';

});
</script>			
