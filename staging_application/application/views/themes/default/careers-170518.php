
          <form method="POST" name="careers" onsubmit="">
            <div class="col-md-12">
              <h2 class="cms_page_title">Careers</h2>
            </div>
            <div class="col-md-12">
              <div class="career_lists no-border">
                <h4>Drivers</h4>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <i class="input_ico cname_ico"></i>                 
                <input placeholder="Enter Name" type="text" name="name" id="name" title="<?php echo __('enter_name');?>" value="" class="cname form-control" maxlength="100" />
                <label class="control-group err"> <span style="cursor:text;" id="name_error"> <?php if(isset($errors)){ echo array_key_exists("name",$errors)?$errors["name"]:""; } ?></span></label>               
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">                
                <i class="input_ico cemail_ico"></i>                  
                <input placeholder="Email" type="text" name="email" title="<?php echo __('enteremailaddress');?>" value="" class="cemail form-control" maxlength="100" />
                <label class="control-group err"> <span style="cursor:text;" id="email_error"> <?php if(isset($errors)){ echo array_key_exists("email",$errors)?$errors["email"]:""; } ?></span></label>                
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">                
                <i class="input_ico cphone_ico"></i>                  
                <input placeholder="Phone Number" type="text" name="phone" title="<?php echo __('phone_label');?>" value="" class="cphone form-control" maxlength="20" />
                <label class="control-group err"><span style="cursor:text;" id="tell_error"> <?php if(isset($errors)){ echo array_key_exists("phone",$errors)?$errors["phone"]:""; } ?></span></label>                
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <i class="input_ico cfile_ico"></i>                 
                <div class="upload_file" >
                  <input type="file" name="licence_file" id="file-7" class="cfile inputfile inputfile-6" data-multiple-caption="{count} files selected" multiple="">
                  <label for="file-7" ><strong >Browse</strong><span>Upload CV</span>
                  <span class="ctooltip" ><i class="ctooltiptext" id="license_img_tooltip"></i></span>
                  </label>
                </div>
              </div>
              <!-- <div class="form-group">               
                <i class="ccv_ico"></i>                 
                <input placeholder="Upload CV" type="file" name="phone" title="<?php echo __('phone_label');?>" value="" class="form-control" maxlength="20" />
                <label class="control-group err"><span style="cursor:text;" id="tell_error"> <?php if(isset($errors)){ echo array_key_exists("phone",$errors)?$errors["phone"]:""; } ?></span></label>                
              </div> -->
            </div>
            <div class="clearfix"></div>
            <div class="col-md-6">
              <div class="form-group captcha_blk">  
                <div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                              <div class="help-block with-errors"></div>
                          </div>
            </div>
            <div class="col-md-6">
              <div class="pull-right pt25">
                <input name="submit_company" class="btn btn-primary" type="submit" title="Apply" value="Apply" />
              </div>
            </div>
          </form>
          <div class="col-md-12">
            <div class="career_lists">
              <h4>Dispatcher</h4>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary. Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
              <div id="submits" class="pull-right">
                <input name="submit_company" class="btn btn-primary" type="submit" title="Apply" value="Apply" />
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="career_lists">
              <h4>Developers</h4>
              <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
              <div id="submits" class="pull-right">
                <input name="submit_company" class="btn btn-primary" type="submit" title="Apply" value="Apply" />
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="blk_title text-center mt20">
              <h2>Job Opportunities at Grand Limo</h2>
              <small>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</small>
            </div>
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="career_widgets">
              <img src="public/images/career_wimg1.png" alt="" class="img-responsive">
            </div>
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="career_widgets">
              <img src="public/images/career_wimg2.png" alt="" class="img-responsive">
            </div>
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="career_widgets">
              <img src="public/images/career_wimg3.png" alt="" class="img-responsive">
            </div>
          </div>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".cname").focus(function(){
     $('.input_ico').removeClass("active");
     $('.input_ico.cname_ico').addClass("active");

    }).blur(function(){
         $('.input_ico').removeClass("active");
    })

    $(".cemail").focus(function(){
     $('.input_ico').removeClass("active");
     $('.input_ico.cemail_ico').addClass("active");

    }).blur(function(){
         $('.input_ico').removeClass("active");
    })

    $(".cphone").focus(function(){
     $('.input_ico').removeClass("active");
     $('.input_ico.cphone_ico').addClass("active");

    }).blur(function(){
         $('.input_ico').removeClass("active");
    })

    $(".cfile").focus(function(){
     $('.input_ico').removeClass("active");
     $('.input_ico.cfile_ico').addClass("active");

    }).blur(function(){
         $('.input_ico').removeClass("active");
    })
  });    
</script>