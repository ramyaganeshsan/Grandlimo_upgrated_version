<section class="cms-section text-center">
    <div class="center">
        <div class="cms-section-outer-shadow">
            <div class="cms-section-inner login-signup signup-form">
                <form name="signup" method="post" action="<?php echo URL_BASE; ?>passengers/signup">
                    <div class="form-group-title">
                        <h2><?php echo __('button_signup'); ?></h2>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <select name="salutation" id="salutation" class="form-control pl-none">
                                <option value=""><?php echo __('select_salutation'); ?></option>    
                                <option value="Mr">Mr</option>
                                <option value="Mrs">Mrs</option>
                            </select>
                            <span class="signup_error" id="salutation_error"></span>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="name" placeholder="<?php echo __('firstname_label'); ?>" id="name" value="" />
                            <span class="signup_error" id="name_error"></span>
                            <span class="input-icon name">&nbsp;</span>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="lname" placeholder="<?php echo __('lastname_label'); ?>" id="lname" value="" />
                            <span class="input-icon name">&nbsp;</span>
                            <span style="color:red;" class="signup_error" id="lname_error"></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="<?php echo __('emaillabel'); ?>" id="email" value="" />
                            <span class="input-icon email">&nbsp;</span>
                            <span class="signup_error" id="email_error"></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" id="phone" value="" placeholder="<?php echo __('phone_number'); ?>" />
                            <span class="input-icon phone">&nbsp;</span>
                            <span class="signup_error" id="phone_error"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" id="address" value="" placeholder="<?php echo __('address_label'); ?>" />
                            <span class="input-icon address">&nbsp;</span>
                            <span class="signup_error" id="address_error"></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="creditcard_no" id="creditcard_no" value="" placeholder="<?php echo __('credit_card_no'); ?>" maxlength="16" />
                            <span class="input-icon cr-card">&nbsp;</span>
                            <span class="signup_error" id="creditcard_no_error"></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="creditcard_cvv" id="creditcard_cvv" value="" placeholder="<?php echo __('credit_card_cvv'); ?>" maxlength="4" />
                            <span class="input-icon cvv">&nbsp;</span>
                            <span class="signup_error" id="creditcard_cvv_error"></span>
                        </div>
                        <div class="form-group">
                            <?php  $now = date('Y'); ?>
                            <div class="col-md-5">
                                <select name="expdatemonth" id="expDateMonth" class="credit_card form-control pl-none">
                                    <option value=""><?php echo __('month'); ?></option>
                                    <?php for($i=1;$i<=12;$i++) { ?>
                                    <option value="<?php echo strlen($i) < 2 ? '0'.$i : $i; ?>" ><?php echo strlen($i) < 2 ? '0'.$i : $i; ?></option>
                                    <?php } ?>
                                </select>                        
                            </div>
                            <div class="col-md-5 pull-right">
                                <select name="expdateyear" id="expDateYear" class="credit_card form-control pl-none">
                                        <option value=""><?php echo __('year'); ?></option> 
                                    <?php for($i=$now;$i<=$now+10;$i++) { ?>
                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php } ?>  
                                </select>                                              
                            </div>
                            <span id="expirydate_error" class="signup_error"></span>
                        </div>
                        <div class="form-group">
                            <input type="button" name="signup" class="btn btn-primary" id="signup" value="<?php echo __('button_signup'); ?>" title="<?php echo __('button_signup'); ?>" onclick="return validate_signup();" />
                            <p id="customer_error mt-sm" style="display:none"><img alt="ajax-loading" width="16px" height="11px" src="<?php echo URL_BASE; ?>public/css/img/ajax-loaders/ajax-loader-1.gif" /> <?php echo __('please_wait_we_are_verifing_your_details'); ?></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
