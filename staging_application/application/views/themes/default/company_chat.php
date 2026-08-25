<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/jquery-ui.js"></script>
<script type="text/javascript">
/* Live chat offline script */




/* Livechat offline script */

function check_valid_common1(){
		var email = document.chat.email.value.trim();
		var names= document.chat.name.value.trim();
		var category=document.chat.subject.value.trim();
		var desc=document.chat.message.value.trim();
		//var budget=document.chat.budget.value.trim();
		var tele=document.chat.phone.value.trim();
		var captch= document.chat.security_code.value;
		var captch_ong= document.chat.org_captcha.value;
		var  a=b=c=d=e=f=g=s=x=0;
		      
        var atpos=email.indexOf("@");
        var dotpos=email.lastIndexOf(".");
        var iChars = "!#$%^&*()+=-[]\\\';,/{}|\":<>?";
                       
        for (var i = 0; i < document.chat.email.value.length; i++) {
            if (iChars.indexOf(document.chat.email.value.charAt(i)) != -1) {
                $('#email_err').html('Please remove special characters');
                return false;
            }
        }

					 
        if(captch =='')
        {
            $("#captca_err").html("Enter the security code");			
        }
        else if(captch+1 != captch_ong+1)
        { 				 
            $("#captca_err").html("Code does not match");							  
        } 
        else{
            $("#captca_err").html("");
            c=3;
        }


        if(desc == ''){
            $("#desc_err").html("Message must not be empty");			
        } 		
        else{
            $("#desc_err").html(""); d=4;
        }


        if(category == ''){
            $("#category_err").html("Subject must not be empty");			
        } 		
        else{
            $("#category_err").html(""); e=5;
        }
	
		     
        if(email==''){
            $("#email_err").html("Email must not be empty");                     
        } 
        else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
        {
            $('#email_err').html('Invalid email');			
        }
        else{
            $("#email_err").html(""); a=6;
        }

		
        if(names == ''){
            $("#name_err").html("Name must not be empty");			
        } 		
        else{
            $("#name_err").html(""); b=2;
        } 

        if(tele == ''){ 
			$("#tell_err").html("Enter your phone number");
		}else{
			var phoneno =  /^[0-9-+()\s]{5,16}$/;
			if (phoneno.test(tele)) {    
				$("#tell_err").html("");g=1;
			} else {
				$("#tell_err").html("Enter valid phone number");
			} 
		}
		/*
		if(budget == ''){
            $("#budget_err").html("Choose your budget");			
        } 		
        else{
            $("#budget_err").html(""); x=2;
        }
        */


        if(a == 6 && b ==2 && c==3 && d ==4 && e ==5 && g==1 ){
            document.chat.submit();
            return true;
        }else{
            return false;
        }
	
} 
  
/* Livechat offline script */

</script>
 <style type="text/css">
#slidediv {display:none;}
</style>

 <div id="contentdiv" class="company_chat">

<?php $captchalive = '';
		for ($i = 0; $i < 5; $i++) {
			$captchalive .= chr(rand(97, 122));
		} ?>


<a class="company_chat_title" id="slideright" title="Get A Free Quote">&nbsp;</a>

<div id="slidediv" class="company_chat_form">
    <form name="chat"  action="<?php echo URL_BASE;?>livechat.html" method="POST" onsubmit="return check_valid_common1();" >    
        <a class="company_chat_title" id="sliderinn" title="Get A Free Quote">&nbsp;</a>        
        <div class="company_chat_form_right">
            <div class="company_chatform_title">Receive a Free Custom Quote! Submit details</div>
        <ul class="companychat_form_content">
          <li>
              <div class="chat_inbx">
                  <span class="chat_icon chat_icon1">&nbsp;</span>
                  <input type="text" name="name" placeholder="Name" />
              </div>
              <em style="color:red" id="name_err"></em>
          </li>
		  <li>
              <div class="chat_inbx">
                  <span class="chat_icon chat_icon2">&nbsp;</span>
                  <input type="text" name="email" placeholder="Email" />
              </div>
              <em style="color:red" id="email_err"></em>
          </li> 
		  <li>
                <div class="chat_inbx">
                    <span class="chat_icon chat_icon3">&nbsp;</span>
                     <input type="text" name="phone" placeholder="Phone" />
               </div>
                <em id="tell_err" style="color:red"></em>
            </li> 
			<li>
              <div class="chat_inbx">                  
                  <input type="text" name="subject" placeholder="Subject" style="width:96%" />
              </div>
              <em style="color:red" id="category_err"></em>
          </li> 
								          	           
        </ul>
        <ul class="companychat_form_content companychat_form_content_bottom">
        <?php /*
	  	   <li>
                <div class="chat_inbx">
                   <select name="budget">
						<option value="">Choose budget</option>
						<option value="Less than $10,000">Less than $10,000</option>
						<option value="$10,001 to $15,000">$10,001 to $15,000</option>
						<option value="$15,001 to $20,000">$15,001 to $20,000</option>
						<option value="$20,001 to $25,000">$20,001 to $25,000</option>
						<option value="More than $25,001">More than $25,001</option>
					</select>
                </div>
                <em style="color:red" id="budget_err"></em>
            </li>
            */ ?>
			<li>
                <div class="chat_inbx">
                    <textarea name="message" placeholder="Message" rows="1" cols="1"></textarea>
                </div>
                <em style="color:red" id="desc_err"></em>
            </li> 
            
            <li class="chat_captcha_sec">
                <p id="chgcapcha" style="font:normal 30px/30px 'rugged_typeregular';color:#999;letter-spacing:5px;"><?php echo $captchalive; ?></p>				
            </li>
            <li class="chat_captcha_inbx ">
                <div class="chat_inbx">
                    <input type="text" name="security_code"  placeholder="Security Code" />                        
                </div>
                <em style="color:red" id="captca_err"></em>   
            </li>
            <?php /*<li>                  
                <input type="hidden" name="org_captcha" value="<?php echo $captchalive; ?>" />
                <input type="hidden" name="category" value="5" />
                <input class="chat_submit" type="submit" value="Leave a message" />                 
            </li> */ ?>
        </ul> 
		<div class="chat_req" > 
			<input type="hidden" name="org_captcha" value="<?php echo $captchalive; ?>" />	
			<input type="hidden" name="category" value="5" />
			<input class="chat_submit" type="submit" value="Leave a message" />  
		</div>		
        </div>
    </form> 
</div>
</div>

