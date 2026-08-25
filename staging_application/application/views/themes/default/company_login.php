<?php defined('SYSPATH') OR die('No direct access allowed.'); 
//print_r($errors);
//print_r($postvalue);
?>
<style ="text/css">
.error{color:red;font:normal 12px arial;}
</style>
  <!--container start-->
<div class="content">
	<div class="landing-inner clearfix">
		<div class="request-block login-block clearfix">
			<div class="full_container_top"></div>
		<div class="full_container_mid clearfix">

          <!--left side-->
			<div class="full_con_left">
			  <?php  //echo new View(USERVIEW."left_sidebar"); ?>
			</div>

          <!--left side end-->
          <!--right side-->
          <div class="full_con_right">
      <h1><?php echo __('company_login_label'); ?></h1>
      <div class="form" style="padding:0 0 15px;">
        <form method="POST" name="frmlogin" id="frmlogin">
         <div class="registration mt30">
                <ul class="reg_form">
			<li>
				<div class="name2">
					<b><?php echo __('logininform');?></b>
				</div>
			</li>
			<li>
			    <div class="name2"><b><?php echo __('email_label');?><span class="greenstar">*</span></b></div>
				<div class="fl">
				    <div class="reg_text1">                  
						<input type="text" name="company_email" value="<?php echo isset($validator['company_email'])?$validator['company_email']:'';?>" class="login_txt" />
				    </div>
					<label class="error" > <?php if(isset($errors['company_email'])){echo array_key_exists("company_email",$errors)?$errors["company_email"]:"";}else{ if(isset($email_not_exists)){ echo __('email_not_exists');}}?></label>
				</div>
			</li>
			<li>
				<div class="name2">
					<b><?php echo __('password_label');?><span class="greenstar">*</span></b>
				</div>
				<div class="fl">
					<div class="reg_text1">
						<input type="password" name="company_password" value="<?php echo isset($validator['company_password'])?$validator['company_password']:'';?>" class="login_txt" />
					</div>
						<label class="error"><?php if(isset($errors['company_password'])){ echo array_key_exists("company_password",$errors)?$errors["company_password"]:"";}?></label>
				</div>
			</li>
			<li>
				<div class="name2">
					<b></b>
				</div>
				<div class="fl">
					<label class="error"> <?php if(isset($email_pass_notexists)){ echo __('email_pass_notexists');}?></label>
				</div>
			</li>
			<li>
				<div class="name2">
					<b>*<?php echo __('required_label'); ?></b>
				</div>
			</li>
                  
                  <li>
                    <div class="name2">&nbsp;</div>
                  
                      <div class="confirm">
				<input  name="submit_companylogin" type="submit" title="<?php echo __('button_login');?>" value="<?php echo __('button_login');?>" />
				<input  name="reset_companylogin" type="reset" title="<?php echo __('button_reset');?>" value="<?php echo __('button_reset');?>" />
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
