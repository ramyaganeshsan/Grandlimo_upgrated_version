<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>

<div class="content">
  <div class="landing-inner clearfix">
    <div class="login-block clearfix">
      <div class="login-tl">
        <div class="login-tr">
          <div class="login-tm"> </div>
        </div>
      </div>
      <div class="login-mid clearfix">
        <div class="login-left">
          <form method="POST" name="frmlogin" id="frmlogin" >
            <h3><?php echo __('button_login'); ?></h3>
            <div class="text-block clearfix">
              <label><?php echo __('email_label'); ?></label>
              <div class="input text">
                 <input type="text" name="email" class="email" tabindex="1" value="<?php echo isset($validator['email'])?$validator['email']:'Enter your Email';?>" placeholder="Enter your Email" maxlength="100"  />

              </div>
               <?php if(isset($errors['email'])){ ?>
              <label class="error" style="margin:5px 0 0 0; width:100%;"> <?php echo isset($errors['email'])?$errors['email']:"";?></label>
              <?php }?>
            </div>
            <div class="text-block clearfix">
              <label><?php echo __('password_label'); ?></label>
              <a href="<?php echo URL_BASE;?>users/forgotpassword" title="<?php echo __('forgot_password'); ?>" class="forgot"><?php echo __('forgot_password'); ?>?</a>
              <div class="input password">
                <input name="password" id="password_field" tabindex="2" value="Password"   autocomplete="off" />
                <?php //echo isset($validator['password'])?$validator['password']:'Password';?>
              </div>
                <?php                 
                	$user_errors = (isset($user_error) && strlen($user_error) > 1 )?$user_error:'';
					$ppl_nt_exists = (isset($ppl_nt_exist) && strlen($ppl_nt_exist) > 1)?$ppl_nt_exist:'';                
                ?>
                 <label class="error" style="margin:5px 0 0 0;width:100%;"> <?php if(isset($errors['password'])){ ?>
              <?php echo isset($errors['password'])?$errors["password"]:"";?>
              <?php }?><?php echo __($user_errors); echo __($ppl_nt_exists);?></label>
            </div>
            <div class="submit-block clearfix">
              <div class="login">
               <input name="submit_login" type="submit" title="<?php echo __('login_title');?>" value="<?php echo __('login_title');?>"  />
              </div>
              <p>Or <a href="<?php echo URL_BASE;?>users/signup" title="<?php echo __('signup_title'); ?>"><?php echo __('signup_title'); ?></a></p>
            </div>
          </form>
        </div>
        <div class="login-left login-right">
          <h3>OR</h3>
          <ul class="icon-list">

            <li class="face"><a href="<?php echo URL_BASE;?>socialnetwork/fconnect/" target="_blank" title="<?php echo __('facebook'); ?>"></a></li>
            <li class="twitter"><a href="<?php echo URL_BASE;?>socialnetwork/twitterlogin/" target="_blank" title="<?php echo __('twitter'); ?>"></a></li>
            <li class="gplus"><a href="<?php echo URL_BASE;?>googleplus/index/" target="_blank" title="<?php echo __('google_plus'); ?>"></a></li>

 <?php /*  */ ?>
            <?php /* 
            <li class="link"><a href="<?php echo URL_BASE;?>users/linkdinconnect/" target="_blank" title="LinkedIn"></a></li>
            <li class="foursqr"><a href="<?php echo $authorize_url;?>" target="_blank" title="Foursquare"></a></li>  */ ?>
          </ul>
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
<script language="javascript" type="text/javascript">
$(document).ready(function() {
     //for sign in menu  
     $("#signup_menu").addClass("active");
});


	$('[placeholder]').focus(function() {
	  var input = $(this);
	  if (input.val() == input.attr('placeholder')) {
		input.val('');
		input.removeClass('placeholder');
	  }
	}).blur(function() {
	  var input = $(this);
	  if (input.val() == '' || input.val() == input.attr('placeholder')) {
		input.addClass('placeholder');
		input.val(input.attr('placeholder'));
	  }
	}).blur().parents('form').submit(function() {
	  $(this).find('[placeholder]').each(function() {
		var input = $(this);
		if (input.val() == input.attr('placeholder')) {
		  input.val('');
		}
	  })
	});
	
	$(function(){
	
	
	//Password input field 
	
	// onfocus
	$('#password_field').focus(function(e){
		var getPass = $('#password_field').val();		
		if(getPass=='Password'){
			$(this).val('');
			this.type = 'password';
		}	
	});
	
	//onblur
	$('#password_field').blur(function(){
		var getPass = $('#password_field').val();
		if(getPass==''){
			this.type = 'text';
			$(this).val('Password');
		}
		else{
			$('#password_field').val(getPass);
		}	
	});
	
});
 </script>

