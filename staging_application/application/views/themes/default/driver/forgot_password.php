<?php defined('SYSPATH') OR die('No direct access allowed.'); 
?>

  <!--container start-->
  
   <div class="span2 main-menu-span">	</div>	
   <div class="about_outer">
       <div class="about_baner">
<img alt="images" src="<?php echo URL_BASE;?>public/images/about_bg.png">
</div>
   </div>
   <div class="about_bottom_outer">
       <div class="about_bottom_inner">
           <div class="about_bottom_common">
              <div id="content" class="span10">
  <div class="landing-inner clearfix">
    <div class="login-block clearfix">
      <div class="login-tl">
        <div class="login-tr">
          <div class="login-tm"> </div>
        </div>
      </div>
    <?php if($action != "forgotpassword"): ?>
        <?php /*  <!--left side-->
		<div class="full_con_left">
		  <?php  echo new View(USERVIEW."left_sidebar"); ?>
		</div> */ ?>
	<?php endif;?>
          <!--left side end-->
          <!--right side-->
          <div class="login-mid login-mid1 clearfix">
        <div class="login-left login-left1">
		
		<div class="creat_form_desc">
								<h2><?php echo __('forgot_password_title'); ?></h2>
		</div>
		
      <?php /*<h3><?php echo __('forgot_password_title'); ?></h3>*/?>

      <div class="form" style="padding:0 0 15px;">
        <form method="POST" name="frmlogin" id="frmlogin">
        
        
            <div class="registration">
			
			<div class="contact_txt_over forgot_cent">
										<label><?php echo  __('email_label'); ?><span class="star">*</span></label>
										<div class="first_name_sel">
										<div class="first_txt_lft"></div>
										<div class="first_txt_mid">
											<input type="text" name="email" value="<?php echo isset($validator['email'])?$validator['email']:'';?>" id="email" class="login_txt" maxlength="100" />
										</div>
										<div class="first_txt_rft"></div>
										</div>
			</div>
			
    <?php /*<div class="text-block clearfix">
              <label><?php echo  __('email_label'); ?><span class="greenstar">*</span></label>
              <div class="input text">
                   <input type="text" name="email" value="<?php echo isset($validator['email'])?$validator['email']:'';?>" class="login_txt" maxlength="100" />

              </div>
    </div>*/?>
                           <label class="error" style="margin:5px 0 0 0; width:100%;"><?php echo $email_error;?> <?php echo array_key_exists("email",$errors)?$errors["email"]:"";?></label>
             <div class="reg_text">
                    
					
					
					<div class="send_but forgot_cent">
											<div class="signup_left"></div>
											<div class="signup_middle1_contact">
												<input name="submit_forgot_password" type="submit" class="btn btn-inverse" title="<?php echo __('forgot_password_title');?>" value="<?php echo __('forgot_password_title');?>" />
											</div>
											<div class="signup_right"></div>
					</div>
					
					
                       <?php /* <div class="login signup forgot">
                            <input name="submit_forgot_password" type="submit" title="<?php echo __('forgot_password_title');?>" value="<?php echo __('forgot_password_title');?>" />
                        </div> */ ?>
                       

                      </div>              
                           
                
                 </div>


         
        </form>
      </div>

        </div>
      </div>
      <div class="login-bl">
        <div class="login-br">
          <div class="login-bm"> </div>
        </div>
      </div>
    </div>
	</div>
	</div> 
           </div>
       </div>
   </div>
		


  <!--container end-->
<script language="javascript" type="text/javascript">
$(document).ready(function() {

$("#email").focus();

   	$("#login").click(function(){
	//alert('dasdasd');
		$("#login_form").slideToggle("slow");
	});
	

var innerH = window.innerHeight;
if(isNaN(innerH)){
innerH = document.documentElement.clientHeight;
}
document.getElementById("content").style.minHeight = innerH-256+'px';

});
</script>
