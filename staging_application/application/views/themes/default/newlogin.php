<section class="cms-section text-center">
    <div class="center">
        <div class="cms-section-outer-shadow box-shadow-none">
            <div class="cms-section-inner login-signup">
                <form name="login" method="post" action="<?php echo URL_BASE; ?>passengers/login">
                    <div class="form-group-title">
                        <h2><?php echo __('button_signin'); ?></h2>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input class="form-control" type="text" name="lphone" id="lphone" placeholder="<?php echo __('phone_label'); ?>" value="<?php if (isset($_COOKIE['passenger_phone'])) { echo $_COOKIE['passenger_phone']; } ?>" >
                            <input type="hidden" name="isbooking" id="isbooking" value="">
                            <input type="hidden" name="d_id" id="d_id" value="">
                            <span style="color:red;" id="lphone_error" class="phone_custom_error"></span>
                            <span class="input-icon phone">&nbsp;</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input class="form-control" type="password" name="password" id="pwd" placeholder="<?php echo __('password_label'); ?>" value="<?php if (isset($_COOKIE['passenger_password'])) { echo $_COOKIE['passenger_password']; } ?>" />
                            <span style="color:red;float:right;width:235px;" id="pwd_error" class="login_custom_error"></span>
                            <span class="input-icon pass">&nbsp;</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <input type="checkbox" name="remember" id="remember" />
                            <label><?php echo __('remember_me'); ?></label>
                        </div>
                        <div class="col-md-6">
                            <a class="pull-right" href="<?php echo URL_BASE; ?>passengers/forgotpassword" title="<?php echo __('forgot_password'); ?>?"><?php echo __('forgot_password'); ?>?</a>
                        </div>
                    </div>
                    <div class="form-group mt-sm">
                        <div class="col-md-12">
                            <input type="button" value="<?php echo __('button_login'); ?>" class="btn btn-primary" title="<?php echo __('button_login'); ?>" onclick="return validatelogin();" />
                            <span id="p_error"></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
