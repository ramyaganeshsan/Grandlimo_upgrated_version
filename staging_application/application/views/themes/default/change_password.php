<?php defined('SYSPATH') OR die('No direct access allowed.'); 
?>

  <!--container start-->
<div class="content">
  <div class="landing-inner clearfix">
    <div class="request-block login-block clearfix">
      <div class="full_container_top"></div>
      <div class="full_container_mid clearfix">

          <!--left side-->
			<div class="full_con_left">
			  <?php  echo new View(USERVIEW."left_sidebar"); ?>
			</div>

          <!--left side end-->
          <!--right side-->
          <div class="full_con_right">
      <h1><?php echo __('change_password_label'); ?></h1>
      <div class="form" style="padding:0 0 15px;">
        <form method="POST" name="frmlogin" id="frmlogin">
         <div class="registration mt30">
                <ul class="reg_form">
                  <li>
                    <div class="name2"><b><?php echo __('oldpassword_label');?><span class="greenstar">*</span></b></div>
					<div class="fl">
                    <div class="reg_text1">                  
                     <input type="password" name="old_password" id="old_password" value="<?php echo isset($validator['old_password'])?$validator['old_password']:'';?>" class="login_txt" maxlength="100" />
                    </div>
					
                     <label class="error" > <?php echo isset($oldpass_error)?$oldpass_error:'';?><?php echo array_key_exists("old_password",$errors)?$errors["old_password"]:"";?></label>
					</div>
                    </li>
                    <li>
                    <div class="name2"><b><?php echo __('newpassword_label');?><span class="greenstar">*</span></b></div>
					<div class="fl">
                    <div class="reg_text1">
                     
                  <input type="password" name="new_password" value="<?php echo isset($validator['new_password'])?$validator['new_password']:'';?>" class="login_txt" maxlength="100" />
                  
                    
                    </div>
					  <label class="error"> <?php echo array_key_exists("new_password",$errors)?$errors["new_password"]:"";?><?php echo $same_pw;?></label>
					  </div>
                    </li>
                    <li>
                    <div class="name2"><b><?php echo __('confirm_password_label');?><span class="greenstar">*</span></b></div>
					<div class="fl">
                    <div class="reg_text1">
                     
                        <input type="password" name="confirm_password" value="<?php echo isset($validator['confirm_password'])?$validator['confirm_password']:'';?>" class="login_txt" maxlength="100" />
                      
                    
                    </div>
					  <label class="error" > <?php echo array_key_exists("confirm_password",$errors)?$errors["confirm_password"]:"";?></label>
					  </div>
                  </li>
                  
                  <li>
                    <div class="name2">&nbsp;</div>
                  
                      <div class="confirm">
                     <input  name="submit_change_pass" type="submit" title="<?php echo __('change_password_label');?>" value="<?php echo __('change_password_label');?>" />
                      </div>

                     
                  </li>
                </ul>
            

         </div>
        </form>
      </div>

        </div>
      </div>
      <div class="full_container_bot"></div>
    </div>
</div>
  <!--container end-->
</div>
<script language="javascript" type="text/javascript">
$(document).ready(function() {
var field_val = $("#old_password").val();
$("#old_password").focus().val("").val(field_val);	
     //for sign in menu  
     $(".setting").addClass("active");
});
</script>
