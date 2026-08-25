<?php defined('SYSPATH') OR die('No direct access allowed.'); 
?>
<title><?php echo __('page_login_title'); ?></title>
<div class="login_inner">
<div class="login_container">
  <div class="login_top fl"></div>
  <div class="login_mid fl clr">
    <?php if($error_msg!=""):?>
    <div id="messagedisplay" style="padding:10px 0 0 100px;">
      <div class="notice_message"> <?php echo $error_msg; ?> </div>
    </div>
    <?php endif;?>
    <div class="login_form">
      <h1><?php echo "Admin Login"; ?></h1>
      <?php if(isset($error_login)){ ?>
      <span class="login_error"><?php echo $error_login; ?></span>
      <?php } ?>
      <div class="form" style="padding:0 0 15px;">
        <form method="post" name="frmlogin" id="frmlogin">
          <div class="login_row1 fl clr">
            <div class="colm1_width fl">
              <p style="line-height:30px; width:85px; margin:0px;font-weight:bold; color:#fff;"><?php echo  __('email_label'); ?></p>
            </div>
            <div class="colm2_width fl">
              <div>
              
                <div class="center">
                  <input type="text" name="email" value="<?php echo isset($form_values['email'])?$form_values['email']:"";?>" class="login_txt" maxlength="50" />
                </div>
              </div>
               <?php if(isset($error['email'])){ ?>
              <label class="errore_msg fl clr">
             
              <span class="error" style="text-align: left; margin:5px 0 0 0; width:100%;"><?php echo ucfirst($error['email']); ?></span>
              
              </label><?php } ?>
            </div>
          </div>
          <div class="login_row1 fl clr mt20">
            <div class="colm1_width fl">
              <p  style="line-height:30px; width:85px; margin:0px;font-weight:bold;color:#fff;"><?php echo __('password_label'); ?></p>
            </div>
            <div class="colm2_width fl">
              <div>
              
                <div class="center">
                  <input type="password" name="password" class="login_txt" maxlength="15" />
                </div>
              </div>
               <?php if(isset($error['password'])){ ?>
              <label class="errore_msg fl clr">
             
              <span class="error" style="margin:5px 0 0 0;width:100%;"><?php echo ucfirst($error['password']); ?></span>
             
              </br>
              </label> <?php } ?>
            </div>
          </div>
          <div class="login_row1 fl clr">
            <div class="colm1_width fl"><b class="fl" style="width:87px;">&nbsp;</b></div>
            <div class="colm2_width fl">
              <div class="remember_me fl">
                <!--<a href="<?php echo URL_BASE;?>admin/forgot_password" class="frgtpsd" title="<?php echo __('forgot_password');?>" alt="<?php echo __('forgot_password');?>"><?php echo __('forgot_password');?></a>-->
              </div>
            </div>
          </div>
          <div class="login_row1 fl clr  mb20">
            <div class="colm1_width fl"><b class="fl" style="width:88px;">&nbsp;</b></div>
            <div class="colm2_width fl">
              <input type="submit" class="login_text ml5" value=""  name="admin_login" title="<?php echo __('admin_login');?>" />
              
				 <div style="margin:7px 0 0 80px; " class=""><a href="<?php echo URL_BASE;?>admin/forgotpassword" title="Forgot Password" style="font-size:12px;color:#fff;">Forgot Password?</a></div>
            </div>
          </div>
         
        </form>
      </div>
      <div class="login_vertical"></div>
    </div>
  </div>
    <div class="login_bottom fl clr"></div>
  </div>

</div>
