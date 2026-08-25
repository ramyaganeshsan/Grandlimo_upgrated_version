<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<?php $sucessful_message=Message::display();
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
<section class="cms-section text-center">
    <div class="center">
        <div class="cms-section-outer-shadow box-shadow-none">
            <div class="cms-section-inner login-signup">
                <form method="POST" name="frmlogin" id="frmlogin">
                    <div class="form-group-title">
                        <h2><?php echo __('forgot_password_title'); ?></h2>
                    </div>
                    <div class="form-group">
                    	<input placeholder="Enter your email *" class="form-control login_txt" type="text" name="email" value="<?php echo isset($validator['email'])?$validator['email']:'';?>" id="email" maxlength="100" />
                        <label class="errors"><?php echo $email_error;?> <?php echo array_key_exists("email",$errors)?$errors["email"]:"";?></label>
                        <span class="input-icon email">&nbsp;</span>
                    </div>
                    <div class="form-group mt-sm">
                        <input name="submit_forgot_password" class="btn btn-primary" type="submit" title="<?php echo __('forgot_password_title');?>" value="<?php echo __('forgot_password_title');?>" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</section> 

<script language="javascript" type="text/javascript">
	$(document).ready(function() {
		$("#email").focus();
	});
</script>