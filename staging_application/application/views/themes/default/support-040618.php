         <?php $sucessful_message=Message::get();

              if(isset($sucessful_message->message) && $sucessful_message->message) { ?>

            <div class="col-md-12">
             <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> <?php echo $sucessful_message->message; ?>
              </div>
            </div>

            <?php Session::instance()->delete('flash_message');
            } ?>


          <form method="POST" name="contactfrm" id="contactfrm">
            <div class="col-md-12">
              <h2 class="cms_page_title">Contact Us</h2>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <i class="input_ico cname_ico"></i>                 
                <input placeholder="Enter Name" type="text" name="name" id="support_name" title="<?php echo __('enter_name');?>" value="" class="cname login_txt form-control" maxlength="100" />
                <label class="control-group err"> <span style="cursor:text;" class="support_err" id="name_error"> </span></label>               
              </div>
              <div class="form-group">                
                <i class="input_ico cemail_ico"></i>                  
                <input placeholder="Email" type="text" name="email" id="support_email" title="<?php echo __('enteremailaddress');?>" value="" class="cemail login_txt form-control" maxlength="100" />
                <label class="control-group err"> <span style="cursor:text;" class="support_err" id="email_error"> </span></label>                
              </div>
              <div class="form-group cphone">               
                <i class="input_ico cphone_ico"></i>                  
                <input placeholder="Phone Number" type="text" name="phone" id="support_phone" title="<?php echo __('phone_label');?>" value="" class="cphone login_txt form-control" maxlength="20" onkeypress="return isNumber();"/>
                <label class="control-group err"><span style="cursor:text;" class="support_err" id="phone_error"> </span></label>
                <input type="hidden" name="services"  value=""/>                
              </div>
            </div>
            <div class="col-md-6 cont-ar">
              <div class="form-group">                
                <i class="input_ico csubj_ico"></i>                 
                <input placeholder="Subject" type="text" name="subject" id="support_subject" title="<?php echo __('enter_subject');?>" value="" class="csubj login_txt form-control" />
                <label class="control-group err"><span style="cursor:text;" class="support_err" id="subject_error"> </span></label>                
              </div>
              <div class="form-group">                
                <i class="input_ico cmsg_ico"></i>                  
                <textarea placeholder="Message" type="text" name="message" id="support_message" title="<?php echo __('enter_message');?>" value="" class="cmsg login_txt form-control"></textarea>
                <label class="control-group err"><span style="cursor:text;" class="support_err" id="message_error"></span></label>                
              </div>
              
              <div class="form-group captcha_blk">  
                <div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                              <!-- <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha"> -->
                              <div class="help-block with-errors"></div>
                          </div>
              <div class="form-group confirm">
                <div id="submit_loader"></div>
                <div id="submits" class="pull-right">
                  <input name="reset_company" class="btn btn-inverse" type="reset" title="<?php echo __('button_reset');?>" value="<?php echo __('button_reset');?>" />
                  <input name="submit_company" class="btn btn-primary" type="button" title="<?php echo __('post_label');?>" value="<?php echo __('Submit');?>" onclick="ValidateSupportForm();"/>
                </div>
              </div>
            </div>
          </form>
          <div class="find_us_container">
            <div class="col-md-12">
              <h3>Find us on</h3>
              <img src="public/images/map.png" alt="Map" class="img-responsive">
            </div>
          </div>

<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/select2.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("#name").focus();
  $("#info1").hide();
  $("#login").click(function(){
    $("#info1").show();
    $('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
    $('#fade').css({'filter' : 'alpha(opacity=100)'}).fadeIn();
    $('#fade').css({'visibility' : 'visible'});
  });
  $("#country").select2();
});

//to avoid copying the captcha codes
var elem = document.getElementById("partnerchgcapcha");
elem.unselectable = "on"; // For IE and Opera

function partnerDivHide()
{
  $('#info1').hide();
  $('div#fade').remove();
}

function hide_req()
{
  $('#info1').hide();
  $('div#fade').remove();
}

function ValidateSupportForm(){

  $('.support_err').text('');
  var name = $('#support_name').val();
  var email = $('#support_email').val();
  var phone = $('#support_phone').val();
  var subject = $('#support_subject').val();
  var message = $('#support_message').val();

  var error = 1;

  if(name == '' || name.length < 3){
    error = 0;
    $('#name_error').text("<?php echo __('enter_your_name');?>");
  }
  if(email == '' || !validateEmail(email) ){
    error = 0;      
    $('#email_error').text("<?php echo __('enter_valid_email');?>");
  }
  if(phone == '' || phone.length < 6 ){
    error = 0;      
    $('#phone_error').text("<?php echo __('enter_phone');?>");
  }
  if(subject == '' || subject.length < 3){
    error = 0;
    $('#subject_error').text("<?php echo __('enter_subject');?>");
  }
  if(message == '' || message.length < 3){
    error = 0;
    $('#message_error').text("<?php echo __('enter_message');?>");
  }

  if(error==0){
    return false;
  }else{

        $('.loader').show();
          var form = $('#contactfrm')[0];
          var data = new FormData(form);
          $.ajax({
            url:"<?php echo URL_BASE;?>page/contactus_request",            
            enctype: 'multipart/form-data',
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            data: data,
            dataType:'json',
            success:function(data){ 
                //console.log(data);return false;
                $('.loader').hide();
                if(data.status==200){
                  //alert('Resume submit successfully');
                  location.reload();
                }else if(data.status==401){
                  //alert('Some data are missing');

                  $.each(data.error,function(k,v){
                    //console.log('#'+k+'_error');
                    $('#'+k+'_error').text(v);
                  });
                  $('.loader').hide();
                  return false;
                }
            },
            error:function(data)
            {
              $('.loader').hide();
              alert("failed");
            }

          }); 
  }

}

function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}


function change_captchasad(path){
  var url=path+"users/contactuscaptch";
  var x, c = '#';
  var i = 3;
  while (i--) {
    x = (Math.random()*256|0).toString(16).toUpperCase();
    c += (x.length < 2? '0' : '') + x;
  }
  $.post(url, {}, function(response){$('#code').html(response);$('#chgcapcha').css("color",c);
  });
}
function contact_validation()
{
  var email = document.frmlogin.email.value.trim();
  var names= document.frmlogin.name.value.trim();
  var category=document.frmlogin.subject.value.trim();
  var desc=document.frmlogin.message.value.trim();
  var tele=document.frmlogin.phone.value.trim();
  var country=document.frmlogin.country.value.trim();
  //var service=document.frmlogin.services.value.trim();
  var captch= document.frmlogin.security_code.value;
  var captch_ong= document.frmlogin.org_captcha.value;
  var  a=b=c=d=e=f=g=s=0;

  var atpos=email.indexOf("@");
  var dotpos=email.lastIndexOf(".");
  var iChars = "!#$%^&*()+=-[]\\\';,/{}|\":<>?";

  for (var i = 0; i < document.frmlogin.email.value.length; i++) {
    if (iChars.indexOf(document.frmlogin.email.value.charAt(i)) != -1) {
      $('#email_error').html('Please remove special characters');
      return false;
    }
  }
  if(captch =='') {
    $("#captca_error").html("Enter the security code");
  } else if(captch+1 != captch_ong+1)
  {
    $("#captca_error").html("Code does not match");
  } else{
    $("#captca_error").html("");
    c=3;
  }

  if(desc == ''){
    $("#desc_error").html("Message must not be empty");
  } else{
    $("#desc_error").html(""); d=4;
  }


  if(category == ''){
    $("#category_error").html("Subject must not be empty");
  } else{
    $("#category_error").html(""); e=5;
  }
  
    /*  if(service == ''){
    $("#service_error").html("Select Product");
  } else{
    $("#service_error").html(""); s=5;
  } */

  if(email==''){
    $("#email_error").html("Email must not be empty");
  } else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
  {
    $('#email_error').html('Invalid email');
  } else{
    $("#email_error").html(""); a=6;
  }


  if(names == ''){
    $("#name_error").html("Name must not be empty");
  } else{
    $("#name_error").html(""); b=2;
  }

  if(tele == ''){
    $("#tell_error").html("Enter your phone number");
  } else{
    var phoneno =  /^[0-9-+()\s]{7,20}$/;
    if (phoneno.test(tele)) {
      $("#tell_error").html("");g=1;
    } else {
      $("#tell_error").html("Enter valid phone number");
    }
  }

  if(country == ''){
    $("#country_error").html("Select your country");
  } else{
    $("#country_error").html(""); b=2;
  }
  
  if(a == 6 && b ==2 && c==3 && d ==4 && e ==5 && g==1 ){
  $('#submit_loader').html('<img alt="ajax-loading" width="16px" height="11px" src="'+SrcPath+'/public/css/img/ajax-loaders/ajax-loader-1.gif"/>');
  $('#submits').css("display","none");
  document.frmlogin.submit();
      return true;
  }else{
    return false;
  }
}

/* partner validation */
function check_partner(){
  var email = document.partner_form.email.value.trim();
  var names= document.partner_form.name.value.trim();
  var captch= document.partner_form.captcha_code.value.trim();
  var tele=document.partner_form.phone.value.trim();
  var captch_ong= document.partner_form.org_captcha.value.trim();
  var desc= document.partner_form.feedback1.value.trim();
  var agn= document.partner_form.agency.value.trim();
  var web= document.partner_form.website.value.trim();
  var ser= document.partner_form.service.value.trim();
  
  var feedback= "Agency - "+agn+",Website - "+web+ ", Service - "+ser+", Message - "+desc;
  var  a=b=c=d=e=f=g=0;

  var atpos=email.indexOf("@");
  var dotpos=email.lastIndexOf(".");
  var iChars = "!#$%^&*()+=-[]\\\';,/{}|\":<>?";

  for (var i = 0; i < document.partner_form.email.value.length; i++) {
    if (iChars.indexOf(document.partner_form.email.value.charAt(i)) != -1) {
      $('#pemail_error').html('Remove Special Characters');
      return false;
    }
  }

  if(captch ==''){
    $("#pcaptca_error").html("Enter Security Code");
  } else if(captch != captch_ong) {
    $("#pcaptca_error").html("Code Does Not Match");
  } else{
    $("#pcaptca_error").html("");
    c=3;
  }

  if(email==''){
    $("#pemail_error").html("Enter your email");
  } else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
    $('#pemail_error').html('Invalid Email');
  } else{
    $("#pemail_error").html("");
    a=6;
  }

  if(names == ''){
    $("#pname_error").html("Enter your name");
  } else{
    $("#pname_error").html("");
    b=2;
  }

  if(desc == ''){
    $("#pdesc_error").html("Enter your message");
  } else {
    $("#pdesc_error").html("");
    d=5;
  }

  if(tele == ''){
    $("#ptell_error").html("Enter your phone number");
  }else{
    var phoneno =  /^[0-9-+()\s]+$/;
    if (phoneno.test(tele)) {
      $("#ptell_error").html("");g=1;
    } else{
      $("#ptell_error").html("Enter valid phone number");
    }
  }
  if(a == 6 && b ==2 && c==3 && d==5 && g==1){
    $("#feed").val(feedback);
    document.partner_form.submit();
    return true;
  }else{
    return false;
  }
}
/* partner validation */
</script>
 <script src='https://www.google.com/recaptcha/api.js'></script>
 <script type="text/javascript">
  (function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);


      'use strict';

      ;( function ( document, window, index )
      {
        var inputs = document.querySelectorAll( '.inputfile' );
        Array.prototype.forEach.call( inputs, function( input )
        {
          var label  = input.nextElementSibling,
            labelVal = label.innerHTML;

          input.addEventListener( 'change', function( e )
          {
            var fileName = '';
            if( this.files && this.files.length > 1 )
              fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
            else
              fileName = e.target.value.split( '\\' ).pop();

            if( fileName )
              label.querySelector( 'span' ).innerHTML = fileName;
            else
              label.innerHTML = labelVal;
          });

          // Firefox bug fix
          input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
          input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
        });
      }( document, window, 0 ));
 </script>
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

    $(".csubj").focus(function(){
     $('.input_ico').removeClass("active");
     $('.input_ico.csubj_ico').addClass("active");

    }).blur(function(){
         $('.input_ico').removeClass("active");
    })

    $(".cmsg").focus(function(){
     $('.input_ico').removeClass("active");
     $('.input_ico.cmsg_ico').addClass("active");

    }).blur(function(){
         $('.input_ico').removeClass("active");
    })
  });    
</script>