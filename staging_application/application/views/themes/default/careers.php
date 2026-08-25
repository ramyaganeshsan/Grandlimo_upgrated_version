
          
            <div class="col-md-12">
              <h2 class="cms_page_title"><?php echo __('careers'); ?></h2>
            </div>

            <?php $sucessful_message=Message::get();

              if(isset($sucessful_message->message) && $sucessful_message->message) { //print_r($sucessful_message->message);exit;?>

            <div class="col-md-12">
             <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> <?php echo $sucessful_message->message; ?>
              </div>
            </div>

            <?php Session::instance()->delete('flash_message');
            } ?>

          <?php /*  <div class="alert alert-danger mt20">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Success!</strong> message
                    </div> */ ?>

          <?php /*<form name="careers">

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
                <input placeholder="Phone Number" type="text" name="phone" title="<?php echo __('phone_label');?>" value="" class="cphone form-control" maxlength="20" onkeypress="return isNumber();" />
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
            <div class="clearfix"></div>          
          </form> */?>

          <?php if(count($jobs_list)) {

                  foreach ($jobs_list as $key => $value) { ?>

                    <div class="col-md-12">
                      <div class="career_lists">
                      <h4><?php echo $value['title'];?></h4>
                        <p><?php echo $value['description'];?></p>
                        
                  <form id="job_form_<?php echo $value['id']; ?>" action="users/job" enctype="multipart/form-data"> 
                    <input type="hidden" name="job_id" value="<?php echo $value['id']; ?>"/>

                    <div id="job_form_div_<?php echo $value['id']; ?>" class="jobclass" style="display:none;">
                      
                        <div class="col-md-6">
                          <div class="form-group">
                            <i class="input_ico cname_ico"></i>                 
                            <input placeholder="Enter Name" type="text" name="name" title="<?php echo __('enter_name');?>" value="" class="cname form-control" maxlength="100" />
                            <label class="control-group err"><span style="cursor:text;" class="careers_err" id="name_error_<?php echo $value['id']; ?>"></span></label>               
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">                
                            <i class="input_ico cemail_ico"></i>                  
                            <input placeholder="Email" type="text" name="email" title="<?php echo __('enteremailaddress');?>" value="" class="cemail form-control" maxlength="100" />
                            <label class="control-group err"> <span style="cursor:text;" class="careers_err" id="email_error_<?php echo $value['id']; ?>"></span></label>                
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">                
                            <i class="input_ico cphone_ico"></i>                  
                            <input placeholder="Phone Number" type="text" name="phone" title="<?php echo __('phone_label');?>" value="" class="cphone form-control" maxlength="20" onkeypress="return isNumber();"/>
                            <label class="control-group err"><span style="cursor:text;" class="careers_err" id="phone_error_<?php echo $value['id']; ?>"></span></label>                
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <i class="input_ico cfile_ico"></i>                 
                            <div class="upload_file" >
                            <input name="resume_file" type="file" id="resume_file_<?php echo $value["id"];?>" class="cfile inputfile inputfile_<?php echo $value["id"];?> inputfile-6">
                              <?php /*<input type="file" name="licence_file" id="resume_file_<?php echo $value["id"];?>" class="cfile inputfile inputfile-6">*/?>
                              <label for="file-7" ><strong>Browse</strong><span id="resume_disp_<?php echo $value["id"];?>">Upload CV</span>
                              </label>
                              <label class="control-group err"><span style="cursor:text;" class="careers_err" id="resume_error_<?php echo $value['id']; ?>"></span></label>  
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
                            <input name="submit_company" class="btn btn-primary" type="button" title="submit" onclick="validateCareerForm('<?php echo $value["id"];?>');" value="Submit" />
                          </div>
                        </div>
                     
                    </div>


                    <div id="submits" class="pull-right apply_div">
                      <input name="submit_company" onclick="OpenJobForm('<?php echo $value["id"]; ?>',this);" class="btn btn-primary" type="button" title="<?php echo __('apply'); ?>" value="<?php echo __('apply'); ?>" />
                    </div>
                    <div class="clearfix"></div>                  
                    
                  </form>

                      </div>
                    </div>

                   
                                
          <?php } } ?>

          <?php /*
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
          </div> */?>
          <div class="col-md-12">
            <div class="blk_title text-center mt20">
              <h2><?php echo $careers_page_contents['career']; ?></h2>
              <small><?php echo $careers_page_contents['career_description']; ?></small>
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

  function validateCareerForm(id){

    var name = $('#job_form_div_'+id).find('input[name="name"]').val();
    var email = $('#job_form_div_'+id).find('input[name="email"]').val();    
    var phone = $('#job_form_div_'+id).find('input[name="phone"]').val();

    //$("#myform input[name=first_name]").val()
    $('.careers_err').text('');
    var error = 1;
    if(name == '' || name.length < 3){
      error = 0;
      $('#name_error_'+id).text("<?php echo __('enter_your_name');?>");
    }
    if(email == '' || !validateEmail(email) ){
      error = 0;      
      $('#email_error_'+id).text("<?php echo __('enter_valid_email');?>");
    }
    if(phone == '' || phone.length < 6 ){
      error = 0;      
      $('#phone_error_'+id).text("<?php echo __('enter_phone');?>");
    }

    /*var ext = $('#resume_file_'+id).val().split('.').pop().toLowerCase();
    if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
        alert('invalid extension!');
        $('#resume_error_'+id).text("<?php echo __('upload_valid_file');?>");
    }*/

    var _validFileExtensions = [".pdf", ".doc", ".docx"]; 
    var sFileName = $('#resume_file_'+id).val();
    if (sFileName.length > 0) {
        var blnValid = false;
        for (var j = 0; j < _validFileExtensions.length; j++) {
            var sCurExtension = _validFileExtensions[j];
            if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                blnValid = true;
                break;
            }
        }
        
        if (!blnValid) {
            error = 0;
             $('#resume_file_'+id).val('');
             $('#resume_disp_'+id).text('Upload CV');
             $('#resume_error_'+id).text("<?php echo __('invalid_file_format');?>");
            //alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
            return false;
        }

        var file_size = parseFloat($('#resume_file_'+id)[0].files[0].size / 1024).toFixed(2);
        if(file_size>2048){
              error = 0;
              $('#resume_file_'+id).val('');
              $('#resume_disp_'+id).text('Upload CV');
              //alert("Sorry," + sFileName + " 2 MB only allowed ");
              $('#resume_error_'+id).text("<?php echo __('file_size_exceed');?>");
              return false;
        }


    }else{
      //alert(sFileName.length);
      error = 0;      
      $('#resume_error_'+id).text("<?php echo __('pls_select_resume');?>");

    }   
    //console.log(sFileName.length,'length of file');

    //alert(size + " KB.");

    if(error==0){
      return false;
      //alert('error');
    }else{
      //$('#job_form_'+id).submit();
        //alert('success');
          $('.loader').show();
          var form = $('#job_form_'+id)[0];
          var data = new FormData(form);
          $.ajax({
            url:"<?php echo URL_BASE;?>page/send_resume",            
            enctype: 'multipart/form-data',
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            data: data,
            success:function(data){
                $('.loader').hide();
                if(data==1){
                  //alert('Resume submit successfully');
                  location.reload();
                }else if(data==-1){
                  alert("<?php echo __('file_size_exceed');?>");
                }else{
                  alert('Some data are missing');
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

  function isNumber(evt) {
      evt = (evt) ? evt : window.event;
      var charCode = (evt.which) ? evt.which : evt.keyCode;
      if (charCode > 31 && (charCode < 48 || charCode > 57)) {
          return false;
      }
      return true;
  }

  function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  }


function OpenJobForm(id,e){

  $('.careers_err').text('');
  $('.jobclass').hide();
  $('#job_form_div_'+id).show();
  $('.jobclass').removeClass('active');
  $('#job_form_div_'+id).addClass('active');
}

   
function ValidateResume(oForm,id) { alert(888);

  /*var _validFileExtensions = [".pdf", ".doc", ".docx"]; 
    var arrInputs = $('#resume_file_'+id).val();
    for (var i = 0; i < arrInputs.length; i++) {
        var oInput = arrInputs[i];
        if (oInput.type == "file") {
            var sFileName = oInput.value;
            if (sFileName.length > 0) {
                var blnValid = false;
                for (var j = 0; j < _validFileExtensions.length; j++) {
                    var sCurExtension = _validFileExtensions[j];
                    if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                        blnValid = true;
                        break;
                    }
                }
                
                if (!blnValid) {
                    alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
                    return false;
                }
            }
        }
    }*/

  
    //return true;
}   
</script>
 <script type="text/javascript">
  (function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);
      'use strict';

      ;( function ( document, window, index )
      {
        var inputs = document.querySelectorAll('.inputfile');
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
          //input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
          //input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
        });
      }( document, window, 0 ));
 </script>