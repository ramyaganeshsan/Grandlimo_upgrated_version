<?php defined('SYSPATH') OR die('No direct access allowed.');
$server_url = $_SERVER['REQUEST_URI'];
if(COMPANY_CID == 194) {
$websitename = "http://ezcarboston.com/";
}
else
{
$websitename = URL_BASE;
}

?>
<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE;?>public/css/media_style_company.css" />
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/jquery.jcarousel.pack.js"></script>
<script type="text/javascript">
	$(document).ready(function () {		
		//jCarousel Plugin
	    $('#carousel').jcarousel({
			horizontal: true,
			scroll: 1,
			auto: 2,
			wrap: 'last',
			initCallback: mycarousel_initCallback
	   	});
	//Front page Carousel - Initial Setup
   	$('div#slideshow-carousel a img').css({'opacity': '100'});
   	$('div#slideshow-carousel a img:first').css({'opacity': '100'});
   	$('div#slideshow-carousel li a:first').append('<span class="arrow"></span>')  
  	//Combine jCarousel with Image Display
    $('div#slideshow-carousel li a').hover(
       	function () {        		
       		if (!$(this).has('span').length) {
        		$('div#slideshow-carousel li a img').stop(true, true).css({'opacity': '100'});
   	    		$(this).stop(true, true).children('img').css({'opacity': '100'});
       		}		
       	},
       	function () {        		
       		$('div#slideshow-carousel li a img').stop(true, true).css({'opacity': '100'});
       		$('div#slideshow-carousel li a').each(function () {
       			if ($(this).has('span').length) $(this).children('img').css({'opacity': '100'});
       		});        		
       	}
	).click(function () {

	      	$('span.arrow').remove();        
		$(this).append('<span class="arrow"></span>');
       	$('div#slideshow-main li').removeClass('active');        
       	$('div#slideshow-main li.' + $(this).attr('rel')).addClass('active');	        	
       	return false;
	});
	});
//Carousel Tweaking
function mycarousel_initCallback(carousel) {	
	// Pause autoscrolling if the user moves with the cursor over the clip.
	carousel.clip.hover(function() {
		carousel.stopAuto();
	}, function() {
		carousel.startAuto();
	});
}	
	</script>
<?php
defined('SYSPATH') OR die('No direct access allowed.');
$footer_count = count($footer_contents);
$open = 0;
$company_model = Model::factory('company');
$country_det = $company_model->get_country();
//print_r($footer_contents);exit;
//$server_url = $_SERVER['HTTP_HOST'];
//echo 'as'.$server_url;
//exit;
?>

<?php /** captcha key **/
		$captchastring = '';
		for ($i = 0; $i < 5; $i++) {
			$captchastring .= chr(rand(97, 122));
		}
?>
<!-- footer start-->

<div class="footer_outer">
    <div class="footer_outer_inner">
        <div class="footer clearfix">
            <div class="clearfix">
				
                   
				<div class="footer_products footer_rgt">
						 
						<ul>
							<?php if(COMPANY_CID==0 || SUBDOMAIN=='demo') { ?>
							<li><a class="facebook2" href="<?php echo FB_SHARE; ?>" title="Facebook" target="_blank"></a></li>
							<li><a class="twitter" href="<?php echo TW_SHARE; ?>" title="Twitter" target="_blank"></a></li>                                
							<li><a class="google" href="<?php echo GOOGLE_SHARE; ?>" title="Pinterest" target="_blank"></a></li> 
							<li><a class="linked_in" href="<?php echo LINKEDIN_SHARE; ?>" title="Rss" target="_blank"></a></li>
							<?php } else{  ?>
							 <li><a class="facebook2" href="<?php echo COMPANY_FACEBOOK_LINK; ?>" title="Facebook" target="_blank"></a></li>
							<li><a class="twitter" href="<?php echo COMPANY_TWITTER_LINK; ?>" title="Twitter" target="_blank"></a></li>                                
							<li><a class="google" href="<?php echo COMPANY_GOOGLE_LINK; ?>" title="Pinterest" target="_blank"></a></li> 
							<li><a class="linked_in" href="<?php echo COMPANY_LINKED_LINK; ?>" title="Rss" target="_blank"></a></li>                               
							<?php } ?>
						</ul>
				</div>       
			</div>
        </div>
    </div>
</div>

<div class="footer_outer_copy_rights">
    <div class="footer_products footer_products_company">
					 
					<ul>
						<?php 
							$sty="";
							$company_menu_cont="";
							foreach($company_content as $cc)
							{
								$sty=(isset($cmscontent[0])&&$cmscontent[0]['page_url']==$cc['page_url'])?"color:#FFFFFF;":''; 
								if($cc['page_url'] == 'privacypolicy' || $cc['page_url'] == 'termsconditions')
								{
									$company_menu_cont.=" <li><a  href='".$websitename.$cc['page_url'].'.html'."' style='".$sty."' title='".$cc['menu_name']."'>".$cc['menu_name']."</a></li>";
								}
								
							}
							echo ucfirst($company_menu_cont);
						 ?>                         
					</ul>
        	<p class="copy_r">
		<?php 
			if(COMPANY_CID != 0) {
				echo (COMPANY_COPYRIGHT == "")? $footer_contents[0]['site_copyrights'] : COMPANY_COPYRIGHT;
			} else {
				echo $footer_contents[0]['site_copyrights'];
			}
		?> 
	</p>
				</div>

</div>
<!-- footer end-->
<!-- Login & Register Start Here -->

<div id="sign_up">
    <div class="sign_up_top">

    </div>
    <div class="sign_up_mid">
        <div class="login_title_top">
            <div class="login_ttle">
                <span class="log_image"></span>
                <b><?php echo __('admin_login') ?></b>
            </div>
            <div class="sign_up_ttle">
                <span class="sign_image"></span>
                <b><?php echo __('button_signup'); ?></b>
            </div>

        </div>

        <div class="login_total">
            <div class="login_lft">
                <h2></h2>		

                <div class="login_form" id="login_form">
                    <form name="login" method="post" action="<?php echo URL_BASE; ?>passengers/login">
                        <ul>

                            <li>
                                                        
                                <div class="controls">
                                    <div class="input-prepend">
                                        
                                        <input type="text" name="lphone" id="lphone" placeholder="<?php echo __('phone_label'); ?>" value="<?php if (isset($_COOKIE['passenger_phone'])) {
    echo $_COOKIE['passenger_phone'];
} ?>" ><span class="sing-phone"></span>
                                    </div>
                                    <input type="hidden" name="isbooking" id="isbooking" value="">
                                    <input type="hidden" name="d_id" id="d_id" value="">
                                </div>                    
                                <span style="color:red;float:right;width:235px;" id="lphone_error" class="phone_custom_error"></span>
                            </li>

                            <li>
                                <span></span>
                                <div class="controls">
                                    <div class="input-prepend">
                                       
                                        <input type="password" name="password" id="pwd" placeholder="<?php echo __('password_label'); ?>" value="<?php if (isset($_COOKIE['passenger_password'])) {
    echo $_COOKIE['passenger_password'];
} ?>" /> <span class="sing_pasword"></span>
                                    </div>
                                </div>                             
                                <span style="color:red;float:right;width:235px;" id="pwd_error" class="login_custom_error"></span>
                            </li>


                            <li>
                                <div class="remenber">
                                <input type="checkbox" name="remember" id="remember" />
                                <label><?php echo __('remember_me'); ?></label>
                                </div>
                            </li>
                            <li>
                             
                                <input type="button" value="<?php echo __('button_login'); ?>" class="btn btn-inverse" title="<?php echo __('button_login'); ?>" onclick="return validatelogin();" />

                           
                            <span id="p_error"></span>
                            <span class="login_link"><a href="<?php echo URL_BASE; ?>passengers/forgotpassword" title="<?php echo __('forgot_password'); ?>?"><?php echo __('forgot_password'); ?>?</a></span>                                                
                        </ul>                            
                </div>                        
                </form>
            </div>

            <div class="login_rgt">
                <h2></h2>

                <div class="login_form" >
                    <form name="signup" method="post" action="<?php echo URL_BASE; ?>passengers/signup">
                        <ul>
                           <li>                              
                                <div class="controls">
									<select style="width:310px;margin-left:23px;"  name="salutation" id="salutation" >
										<option value=""><?php echo __('select_salutation'); ?></option>	
										<option value="Mr">Mr</option>
										<option value="Mrs">Mrs</option>
									</select>                                        
                                        <span class="sing_name"></span>
                                    </div>
                                <span style="color:red;margin-right:32px;" class="signup_error" id="salutation_error"></span>
                            </li>
                            <li>
                              
                                <div class="controls">
                                    <div class="input-prepend">
                                        
                                        <input type="text" name="name" placeholder="<?php echo __('firstname_label'); ?>" id="name" value="" />
                                        <span class="sing_name"></span>
                                    </div>
                                </div> 							     
                                <span style="color:red;" class="signup_error" id="name_error"></span>
                            </li>

                            <li>
                              
                                <div class="controls">
                                    <div class="input-prepend">
                                        
                                        <input type="text" name="lname" placeholder="<?php echo __('lastname_label'); ?>" id="lname" value="" />
                                        <span class="sing_name"></span>
                                    </div>
                                </div> 							     
                                <span style="color:red;" class="signup_error" id="lname_error"></span>
                            </li>

                            <li>
                                                           
                                <div class="controls">
                                    <div class="input-prepend">
                                       
                                        <input type="text"  name="email" placeholder="<?php echo __('emaillabel'); ?>" id="email" value="" />
                                         <span class="sing-mail"></span>
                                    </div>
                                </div>	    
                                <span style="color:red;" class="signup_error" id="email_error"></span>
                            </li>

                            <li>
                               
                                <div class="controls">
                                    <div class="input-prepend">
                                       
                                        <input type="text"  name="phone" id="phone" value="" placeholder="<?php echo __('phone_number'); ?>" />
                                         <span class="sing-phone"></span>
                                    </div>
                                </div>
                                <span style="color:red;" class="signup_error" id="phone_error"></span>
                            </li>

                            <li>
                              
                                <textarea name="address" id="address" placeholder="<?php echo __('address_label'); ?>" /></textarea>
                                <span style="color:red;" class="signup_error" id="address_error"></span>
                            </li>

                            <li>
                                <div class="controls">
                                    <div class="input-prepend">
                                        <input type="text"  name="creditcard_no" id="creditcard_no" value="" placeholder="<?php echo __('credit_card_no'); ?>" maxlength="16" />
                                         <span class="sing_pasword"></span>
                                    </div>
				    	
                                </div>
                                <span style="color:red;" class="signup_error" id="creditcard_no_error"></span>
                            </li>

                            <li>
                                <div class="controls">
                                    <div class="input-prepend">
                                        <input type="text"  name="creditcard_cvv" id="creditcard_cvv" value="" placeholder="<?php echo __('credit_card_cvv'); ?>" maxlength="4" />
                                         <span class="sing_pasword"></span>
                                    </div>
                                </div>
                                <span style="color:red;" class="signup_error" id="creditcard_cvv_error"></span>
                            </li>


                                <li>
				<div class="controls">
				<?php  $now = date('Y'); ?>

			<select style="width:120px;margin-left:24px"  name="expdatemonth" id="expDateMonth" class="credit_card fl">
					<option value=""><?php echo __('month'); ?></option>	

        			<?php for($i=1;$i<=12;$i++) { ?>
					<option value="<?php echo strlen($i) < 2 ? '0'.$i : $i; ?>" ><?php echo strlen($i) < 2 ? '0'.$i : $i; ?></option>
				<?php } ?>
			</select>
			<select style="width:120px;margin-left:20px;" name="expdateyear" id="expDateYear" class="credit_card fl ml10">
					<option value=""><?php echo __('year'); ?></option>	
				<?php for($i=$now;$i<=$now+10;$i++) { ?>
					<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
				<?php } ?>	
			</select>

					</div>  
				<span style="color:red;" id="expirydate_error" class="signup_error"></span>                                                        
				</li>


                            <li>
                                <input type="button" name="signup" class="btn btn-inverse" id="signup" value="<?php echo __('button_signup'); ?>" title="<?php echo __('button_signup'); ?>" onclick="return validate_signup();" />
                            </li>
								<p id="customer_error" style="display:none"><img width="16px" height="11px" src="<?php echo URL_BASE; ?>/public/css/img/ajax-loaders/ajax-loader-1.gif" /> <?php echo __('please_wait_we_are_verifing_your_details'); ?></p>
                            </li></ul>
                    </form>
                </div>

            </div>
        </div>
        <a id="close_x" class="close sprited" href="javascript:;"  onclick="hide_req2()"title="Close"></a>
    </div>
    <div class="sign_up_bot"></div>
</div>

<!-- Tell to friend form start here-->
<div id="tell_to_friend">
    <div class="login_pop_top"></div>
    <div class="login_pop_mid">
    
              
 <div class="login_title_top">
            <div class="login_ttle">
                <span class="log_image"></span>
                <b><?php echo __('tell_to_friend') ?></b>
            </div>
           

        </div>

    <div class="login_total">      
        <h2></h2>
        <div class="login_form">
            <form name="tell_to_friend" method="post" action="<?php echo URL_BASE; ?>passengers/tell_to_friend">
                <ul>
                    <li>
                        
                        <div class="controls">
                            <div class="input-prepend">                                
                                <input type="text" name="dphone" placeholder="<?php echo __('email_label'); ?>" id="temail"><span class="sing-mail"></span>
                                <span style="clear:both;font: normal 12px arial;width:300px;color:#666;margin-bottom:4px;"><?php echo __('invitation_comma_seperator'); ?></span>
                            </div>
                        </div>                                
                        <span id="temail_error" class="signup_error" style="float:left;"></span>
                    </li>
                    <li>
                                <textarea name="friend_message" id="friend_message" placeholder="<?php echo __('message'); ?>" readonly /><?php 
                                $referral_code = "";
                                if(isset($_SESSION['id']))
                                {
									$referral_code = get_tell_to_friend_referral_code($_SESSION['id']);
								}
							$ref_message = TELL_TO_FRIEND_MESSAGE;//.''.$referral_code;
							$ref_discount = REFERRAL_DISCOUNT;
							$telltofriend_message = str_replace("#REFDIS#",$ref_discount,$ref_message); 
                                echo $telltofriend_message; 
                               
                                ?>
                                </textarea>
                                <span style="color:red;" class="signup_error" id="friend_message_error"></span>
                            </li>
                    <li>
						<div id="sub_button">
                        <input type="button" style="margin:0;" value="<?php echo __('btn_submit'); ?>" class="btn btn-inverse" title="<?php echo __('btn_submit'); ?>" onclick="return validate_tell_to_friend();" />
                        </div>   
                        <span id="ajax_load"></span>
                    </li>
                </ul>                      
            </form> 
        </div>
    </div>
    <a id="close_x" class="close sprited" href="javascript:;" onclick="hide_req_op('tell_to_friend')" ></a>
    </div>
    <div class="login_pop_bot"></div>
</div>
<!-- Tell to friend end here -->
<!-- Login & Register End Here -->
<div id="driver_sign_in">
    <div class="login_pop_top"></div>
    <div class="login_pop_mid">
    
              
 <div class="login_title_top">
            <div class="login_ttle">
                <span class="log_image"></span>
                <b><?php echo __('admin_login') ?></b>
            </div>
           

        </div>

    <div class="login_total">      
        <h2></h2>
        <div class="login_form">
            <form name="driverlogin" method="post" onsubmit = "return validatedriverlogin()" action="">
                <ul>
                    <li>
                        
                        <div class="controls">
                            <div class="input-prepend">
                                
                                <input type="text" name="dphone" placeholder="<?php echo __('phone_label'); ?>" id="dphone" value="<?php if (isset($_COOKIE['driver_phone'])) {
    echo $_COOKIE['driver_phone'];
} ?>"><span class="sing-phone"></span>
                            </div>
                        </div>                                
                        <span style="color:red;float:right;width:235px;text-transform:none!important;" id="dphone_error" class="signup_error"></span>
                    </li>

                    <li>
                        
                        <div class="controls">
                            <div class="input-prepend">
                               
                                <input type="password" name="password" id="password" placeholder="<?php echo __('password_label'); ?>" value="<?php if (isset($_COOKIE['driver_password'])) {
    echo $_COOKIE['driver_password'];
} ?>" /> <span class="sing_pasword"></span>
                            </div>
                        </div>								
                        <span style="color:red;width:235px;text-transform:none!important;" id="dpwd_error" class="signup_error"></span>
                    </li>

                    <li>
                        <div class="remenber" style="margin:0;">
                                 <input type="checkbox" name="dremember" id="dremember" />
                                <label><?php echo __('remember_me'); ?></label>
                                </div>                       
                     </li>
                    <li>
                        
                        <input type="button" style="margin:0;" value="<?php echo __('button_login'); ?>" class="btn btn-inverse" title="<?php echo __('button_login'); ?>" onclick="return validatedriverlogin();" />                                        

                           
                            <span id="d_error"></span>
                           
                            
                            
                       
                 
                   
                    <span class="login_link"><a href="<?php echo URL_BASE; ?>driver/forgotpassword" title="<?php echo __('forgot_password'); ?>?"><?php echo __('forgot_password'); ?>?</a></span>
                    </li>

                </ul>                      
            </form> 
        </div>
    </div>
    <a id="close_x" class="close sprited" href="javascript:;"></a>
    </div>
    <div class="login_pop_bot"></div>
</div>
<!-- Customer Login Form -->
<div id="customer_sign_in">
    <div class="login_pop_top"></div>
    <div class="login_pop_mid">
    
              
 <div class="login_title_top">
            <div class="login_ttle">
                <span class="log_image"></span>
                <b><?php echo __('admin_login') ?></b>
            </div>
           

        </div>

    <div class="login_total">      
        <h2></h2>
        <div class="login_form">
                    <form name="customerlogin" id="customerlogin" method="post" onsubmit="return customer_validatelogin();" >
                        <ul>

                            <li>
                                                        
                                <div class="controls">
                                    <div class="input-prepend">
                                        
                                        <input type="text" name="lphone" id="customer_lphone" placeholder="<?php echo __('phone_label'); ?>" value="<?php if (isset($_COOKIE['passenger_phone'])) {
    echo $_COOKIE['passenger_phone'];
} ?>" ><span class="sing-phone"></span>
                                    </div>
                                    <input type="hidden" name="isbooking" id="customer_isbooking" value="">
                                    <input type="hidden" name="d_id" id="customer_d_id" value="">
                                </div>                    
                                <span style="color:red;float:left;width:235px;" id="customer_lphone_error" class="login_custom_error"></span>
                            </li>

                            <li>
                                <span></span>
                                <div class="controls">
                                    <div class="input-prepend">
                                       
                                        <input type="password" name="password" id="customer_pwd" placeholder="<?php echo __('password_label'); ?>" value="<?php if (isset($_COOKIE['passenger_password'])) {
    echo $_COOKIE['passenger_password'];
} ?>" /> <span class="sing_pasword"></span>
                                    </div>
                                </div>                             
                                <span style="color:red;float:left;width:235px;" id="customer_pwd_error" class="login_custom_error"></span>
				<span style="color:red;float:left;width:235px;" id="customer_p_error"></span>
                            </li>


                            <li>
                                <div class="remenber">
                                <input type="checkbox" name="remember" id="customer_remember" />
                                <label><?php echo __('remember_me'); ?></label>
                                </div>
                            </li>
                            <li>
                             
                                <input id="btn_login" type="button" value="<?php echo __('button_login'); ?>" class="btn btn-inverse" title="<?php echo __('button_login'); ?>" onclick="return customer_validatelogin();" />

                           
                            
                            <span class="login_link"><a href="<?php echo URL_BASE; ?>passengers/forgotpassword" title="<?php echo __('forgot_password'); ?>?"><?php echo __('forgot_password'); ?>?</a></span>                                                
                        </ul>                            
                    
                </form>
        </div>
    </div>
    <a id="close_x" class="close sprited" href="javascript:;"></a>
    </div>
    <div class="login_pop_bot"></div>
</div>
<!-- Customer Login Form End -->



<!-- Phone Number Popup Form -->
<div id="phone_number" style="display:none;">
    <div class="login_phone_pop_top"></div>
    <div class="login_pop_mid">
    
              
 <div class="login_title_top">
            <!--<div class="login_ttle">
                <span class="log_image"></span>
                <b><?php //echo __('admin_login') ?></b>
            </div>-->
           

        </div>

    <div class="login_total">      
        <h2></h2>
        <div class="login_form">
                    <form name="phone_no" id="phone_no" method="post" action="<?php echo URL_BASE; ?>passengers/phonenumber" onsubmit="return phone_validatelogin();">
                        <ul>

			<?php if(isset($_SESSION['usertype']) &&  ($_SESSION['usertype'] == 'passengers') ) {
			if($_SESSION['user_det'][0]['login_from'] == '3') { ?>
                            <li>
                   
                                <div class="controls">
                                    <div class="input-prepend">
                                        
                                        <input type="text" name="lphone" id="popup_lphone" placeholder="<?php echo __('phone_label'); ?>" value="<?php if (isset($_COOKIE['passenger_phone'])) {
    echo $_COOKIE['passenger_phone'];
} ?>" ><span class="sing-phone"></span>
                                    </div>
                                    
                                </div>                    
                                <span style="color:red;float:left;width:235px;" id="popup_lphone_error" class="login_custom_error"></span>
                            </li>
			<?php }
			     else
			     {	 ?>
			<input type='hidden' name='lphone' id='popup_lphone' value="<?php echo $user_det[0]['phone']; ?>">				
                           <?php }} else { ?>
<input type='hidden' name='lphone' id='popup_lphone' value="">				
                           <?php } ?>                           
                            <li>
                                <div class="controls">
                                    <div class="input-prepend">
                                        <input type="text"  name="popup_creditcard_no" id="popup_creditcard_number" value="" placeholder="<?php echo __('credit_card_no'); ?>" maxlength="16" />
                                         <span class="sing-phone"></span>
                                    </div>
				    	
                                </div>
                                <span style="color:red;" class="signup_error" id="popup_creditcard_number_error"><?php $creditcard_invalid=""; if($creditcard_invalid){ echo "Invalid Credit card number"; } ?></span>
                            </li>

							 <li>
                                <div class="controls">
                                    <div class="input-prepend">
                                        <input style="width:255px;" type="text"  name="popup_creditcard_cvv" id="popup_creditcard_cvv" value="" placeholder="<?php echo __('credit_card_cvv'); ?>" maxlength="4" />
                                         <span class="sing-phone"></span>
                                    </div>
				    	
                                </div>
                                <span style="color:red;" class="signup_error" id="popup_customer_creditcard_cvv_error"></span>
                            </li>
                            
                            <li>
					<div class="controls">


				<?php  $now = date('Y'); ?>

			<select style="width:120px;"  name="expdatemonth" id="expdatemonth" class="credit_card fl">
					<option value=""><?php echo __('month'); ?></option>	
        			<?php for($i=1;$i<=12;$i++) { ?>
					<option value="<?php echo strlen($i) < 2 ? '0'.$i : $i; ?>" ><?php echo strlen($i) < 2 ? '0'.$i : $i; ?></option>
				<?php } ?>
			</select>
			<select style="width:120px;margin-left:10px;" name="expdateyear" id="expdateyear" class="credit_card fl ml10">
					<option value=""><?php echo __('year'); ?></option>	
				<?php for($i=$now;$i<=$now+20;$i++) { ?>
					<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
				<?php } ?>	
			</select>

					</div>  
				<span style="color:red;" id="popup_customer_expirydate_error" class="signup_error"></span>                                                        
				</li>

                            <li>
                             
                                <input type="button" value="<?php echo __('btn_submit'); ?>" class="btn btn-inverse" title="<?php echo __('btn_submit'); ?>" onclick="return phone_validatelogin();" />
                             </ul>                            
							<p id="customer_error_phone" style="display:none"><img width="16px" height="11px" src="<?php echo URL_BASE; ?>/public/css/img/ajax-loaders/ajax-loader-1.gif" /> <?php echo __('please_wait_we_are_verifing_your_details'); ?></p>
                </form>
        </div>
    </div>
    <!--<a id="close_x" class="close sprited" href="#"></a>-->
    </div>
    <div class="login_pop_bot"></div>
</div>
<!-- Phone number popup Form End -->



<!-- Customer Signup Form -->
<div id="customer_sign_up">
    <div class="login_pop_top"></div>
    <div class="login_pop_mid">
    

              
 <div class="login_title_top">
            <div class="sign_up_ttle">

                <span class="sign_image"></span>
                <b><?php echo __('button_signup') ?></b>
            </div>

        </div>

    <div class="login_total">      

        <h2></h2>
        <div class="login_form">
                    <form name="customersignup" id="customersignup" method="get" action="<?php echo URL_BASE; ?>passengers/signup">
                        <ul>

                            <li>
                              
                                <div class="controls">

					<select style="width:310px;" name="salutation" id="customer_salutation" >
						<option value=""><?php echo __('select_salutation'); ?></option>	
						<option value="Mr">Mr.</option>
						<option value="Ms">Ms.</option>
						<option value="Mrs">Mrs.</option>
					</select>
                                        
                                        <span class="sing_name"></span>
                                    </div>
                                <span style="color:red;margin-right:32px;" class="signup_error" id="customer_salutation_error"></span>
                            </li>


                            <li>
                              
                                <div class="controls">
                                    <div class="input-prepend">
                                        
                                        <input type="text" name="name" placeholder="<?php echo __('firstname_label'); ?>" id="customer_name" value="" />
                                        <span class="sing_name"></span>
                                    </div>
                                </div> 							     
                                <span style="color:red;" class="signup_error" id="customer_name_error"></span>
                            </li>

                            <li>
                              
                                <div class="controls">
                                    <div class="input-prepend">
                                        
                                        <input type="text" name="lname" placeholder="<?php echo __('lastname_label'); ?>" id="customer_lname" value="" />
                                        <span class="sing_name"></span>
                                    </div>
                                </div> 							     
                                <span style="color:red;" class="signup_error" id="customer_lname_error"></span>
                            </li>

                            <li>
                                                           
                                <div class="controls">
                                    <div class="input-prepend">
                                       
                                        <input type="text"  name="email" placeholder="<?php echo __('emaillabel'); ?>" id="customer_email" value="" />
                                         <span class="sing-mail"></span>
                                    </div>
                                </div>	    
                                <span style="color:red;" class="signup_error" id="customer_email_error"></span>
                            </li>

                            <li>
                                <div class="controls">
				    <span style="font: normal 12px arial;width:300px;color:#666;margin-bottom:4px;"><?php echo __('phone_no_signup'); ?></span>	
                                    <div class="input-prepend">
                                        <input type="text"  name="phone" id="customer_phone" value="" placeholder="<?php echo __('phone_number'); ?>" />
                                         <span class="sing-phone"></span>
                                    </div>
				    	
                                </div>
                                <span style="color:red;" class="signup_error" id="customer_phone_error"></span>
                            </li>
							<?php /*<li>
                                <div class="controls">				    
                                    <div class="input-prepend">
                                        <input type="text"  name="referral_code" id="referral_code" value="" placeholder="<?php echo __('referral_code'); ?>" />
                                         <span class="sing_name"></span>
                                    </div>
				    	
                                </div>
                                <span style="color:red;" class="signup_error" id="customer_referral_error"></span>
                            </li> 
                            <li>
                                <textarea name="address" id="customer_address" placeholder="<?php echo __('address_label'); ?>" /></textarea>
                                <span style="color:red;" class="signup_error" id="customer_address_error"></span>
                            </li>
							*/ ?>
                            <li>
                                <div class="controls">
                                    <div class="input-prepend">
                                        <input type="text"  name="creditcard_no" id="customer_creditcard_no" value="" placeholder="<?php echo __('credit_card_no'); ?>" maxlength="16" />
                                         <span class="sing_pasword"></span>
                                    </div>
				    	
                                </div>
                                <span style="color:red;" class="signup_error" id="customer_creditcard_no_error"></span>
                            </li>

                            <li>
                                <div class="controls">
                                    <div class="input-prepend">
                                        <input style="width:150px;" type="text"  name="creditcard_cvv" id="customer_creditcard_cvv" value="" placeholder="<?php echo __('credit_card_cvv'); ?>" maxlength="4" />
                                         <span class="sing_pasword"></span>
                                    </div>
				    	
                                </div>
                                <span style="color:red;" class="signup_error" id="customer_creditcard_cvv_error"></span>
                            </li>



                                <li>
					<div class="controls">


				<?php  $now = date('Y'); ?>

			<select style="width:120px;"  name="expdatemonth" id="customer_expDateMonth" class="credit_card fl">
					<option value=""><?php echo __('month'); ?></option>	
        			<?php for($i=1;$i<=12;$i++) { ?>
					<option value="<?php echo strlen($i) < 2 ? '0'.$i : $i; ?>" ><?php echo strlen($i) < 2 ? '0'.$i : $i; ?></option>
				<?php } ?>
			</select>
			<select style="width:120px;margin-left:10px;" name="expdateyear" id="customer_expDateYear" class="credit_card fl ml10">
					<option value=""><?php echo __('year'); ?></option>	
				<?php for($i=$now;$i<=$now+20;$i++) { ?>
					<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
				<?php } ?>	
			</select>

					</div>  
				<span style="color:red;" id="customer_expirydate_error" class="signup_error"></span>                                                        
				</li>


                            <li>
                                <input type="button" name="signup" class="btn btn-inverse "  style="margin-left:100px;" id="signup" value="<?php echo __('button_signup'); ?>" title="<?php echo __('button_signup'); ?>" onclick="return validate_customersignup();" />
                                
                            </li>
                            <p id="customer_error1" style="display:none"><img width="16px" height="11px" src="<?php echo URL_BASE; ?>/public/css/img/ajax-loaders/ajax-loader-1.gif" /> <?php echo __('please_wait_we_are_verifing_your_details'); ?></p>
                            </li></ul>
            </form> 
        </div>
    </div>
    <a id="close_x" class="close sprited" href="javascript:;" onclick="hide_req2()" ></a>
    </div>
    <div class="login_pop_bot"></div>
</div>
<!-- Customer Signup Form End -->

<!-- Book Now Section -->
<div id="booknow">
    <h2><?php echo __('book_now'); ?></h2>
    <div class="login_total">                                               
        <div class="login_form">
            <form name="bookinglogin" method="post" action="">
                <ul>
                    <li><span><?php echo __('Current_Location'); ?>:</span><span id="c_location"></span></li>
                    <li><span><?php echo __('Drop_Location'); ?>:</span><span id="d_location"></span></li>
                    <li><span><?php echo __('driver_name'); ?></span><span id="driver_name"></span></li>
                    <li><span><?php echo __('No_Passengers'); ?></span><span id="n_passengers"></span></li>
                    <li><span><?php echo __('pick_up_time'); ?></span>
                        <span id="pickuptime"></span>
                        <input type="hidden" name="driver_id" id="driver_id" value="">
                        <input type="hidden" name="driver_away_in_km" id="driver_away_in_km" value="">
                        <span style="color:red;" class="signup_error" id="timepicker1_error"></span>
                    </li>
                    <li><span><?php echo __('pickup_drop'); ?></span><input type="checkbox" name="pickupdrops" id="pickupdrops" onclick="chk()" />
                        <input type="hidden" name="pickupdrop_val" id="pickupdrop_val" value="0">
                        <input type="hidden" name="taxi_id" id="taxi_id" value="" >

                    </li>
                    <?php /*
                     <li><span><?php echo __('note_driver'); ?></span> 
                     
                     <textarea id="notes" name="notes" title="<?php echo __('note_driver'); ?>"  rows="4" cols="35"></textarea>
					 </li>
					 */ ?>
                     <!--<li><span><?php //echo __('waiting_time'); ?></span>
                     <select name="waitingtime">
                                                             <option>-- Select --</option>
<?php
/* foreach($waitingtime as $key=>$waittime)
  {
  echo "<option value=".$key.">".$waittime."</option>";
  } */
?>	
                     </select> -->
                    <!-- <div class="input-append bootstrap-timepicker">
                            <input id="waitingtime" type="text" class="input-small">
                            <span class="add-on"><i class="icon-time"></i></span>
                    </div> -->

                    <span style="color:red;" class="signup_error" id="timepicker1_error"></span>
                    </li>
                    <li><span></span>
                        <input type="button" class="btn btn-inverse" value="<?php echo __('confirm'); ?>" title="<?php echo __('confirm'); ?>" onclick="return validatebooking();" />                                        
                    </li>

                </ul> 
            </form>
        </div>

        <span id="book_result"></span>  
    </div>
    <a id="close_x" class="close sprited" href="javascript:;">close</a>
</div>
<!-- GET FREE TRAIL POPUP -->
<div id="get_free_trial" class="demo_contact_popup_outer">    
    <a id="close_x" class="close sprited demo_contact_popup_close" href="javascript:;"></a>   
    <div class="demo_contact_popup">      
        <h3 class="demo_frm_title"><?php echo __('get_trial_form_heading'); ?></h3>
        <div class="login_form">
            <form name="gettrialform" id="gettrialform" method="post" action="">
                <div class="demo_popup_frm">
                    <div class="demo_popup_frm_left">
                        <div class="demo_popup_row">      
                            <div class="popup_label"><p><?php echo __('name'); ?>*</p></div>
                            <div class="popup_txtbox">                                                                            
                                <input type="text" name="g_name" placeholder="<?php echo __('name'); ?>" id="g_name" value="" />
                                 <span class="sing_name"></span>                                                                    							     
                                <span style="color:red;" class="signup_error" id="g_name_error"></span>
                            </div>
                        </div>
                        <div class="demo_popup_row">
                            <div class="popup_label"><p><?php echo __('email_label'); ?>*</p></div>
                              <div class="popup_txtbox">  


                                      <input type="text" name="g_email" placeholder="<?php echo __('email_label'); ?>" id="g_email" value="" />
                                      <span class="sing-mail"></span>
                                  <span style="color:red;" class="signup_error" id="g_email_error"></span>
                              </div> 							     

                          </div>
                        <div class="demo_popup_row">
                            <div class="popup_label"><p><?php echo __('phone_number'); ?>*</p></div>                          
                           <div class="popup_txtbox">  

                                   <input type="text"  name="g_phone" id="g_phone" value="" placeholder="<?php echo __('phone_number'); ?>" />
                                    <span class="sing-phone"></span>

                           <span style="color:red;" class="signup_error" id="g_phone_error"></span>    	
                           </div>

                       </div>
                        <div class="demo_popup_row">
                            <div class="popup_label"><p><?php echo __('companyname'); ?>*</p></div>
                              <div class="popup_txtbox">


                                      <input type="text" name="company_name" placeholder="<?php echo __('companyname'); ?>" id="company_name" value="" />
                                      <span class="error"></span>
                                  <span style="color:red;" class="signup_error" id="company_name_error"></span>
                              </div> 							     
                      </div>
                        <div class="demo_popup_row">
                            <div class="popup_label"><p><?php echo __('no_of_taxi'); ?>*</p></div>
                            <div class="popup_txtbox">

                                    <input type="text"  name="no_of_taxi" id="no_of_taxi" value="" placeholder="<?php echo __('no_of_taxi'); ?>" maxlength="16" />

                            <span style="color:red;" class="signup_error" id="no_of_taxi_error"></span>    	
                            </div>

                        </div>
                        <div class="demo_popup_row">
                            <div class="popup_label"><p><?php echo __('country_name'); ?>*</p></div>
                            <div class="popup_txtbox">                                    
                                                                             <!--<select id="g_country"  name="g_country" onchange="change_city()" style="color:rgb(163, 159, 159) ! important;">
                                                                                     <option value=''>Select Country</option>
                                                                            <?php //foreach ($country_det as $c)
                                                                            //{ 
                                                                            //echo "<option value=".$c['country_id'].">".$c['country_name']."</option>";
                                                                             //} ?>

                                    </select>--->
                                     <input type="text" name="g_country" id="g_country" placeholder="<?php echo __('country_name'); ?>" />

                            <span style="color:red;" class="signup_error" id="g_country_error"></span>    	
                            </div>

                        </div>											
                    </div>
                    <div class="demo_popup_frm_left">											
                        <div class="demo_popup_row">
                            <div class="popup_label"><p><?php echo __('city_name'); ?>*</p></div>
                            <div class="popup_txtbox">
                                <div class="" id="city_list" >
                                    <!--<select name="g_city" id="g_city" style="color:rgb(163, 159, 159) ! important;">
                                                                                    <option value=''>Select City</option>
                                    </select>-->
                                    <input type="text" name="g_city" id="g_city"  placeholder="<?php echo __('city_name'); ?>" />
                                </div>
                                <span style="color:red;" class="signup_error" id="g_city_error"></span>    	
                            </div>                                    
                        </div>  
						<div class="demo_popup_row">
                            <div class="popup_label"><p>Budget*</p></div>
                            <div class="popup_txtbox">                                    
								<select name="budget" id="budget" class="company_budget">
									<option value="">Choose budget</option>
									<option value="Less than $10,000">Less than $10,000</option>
									<option value="$10,001 to $15,000">$10,001 to $15,000</option>
									<option value="$15,001 to $20,000">$15,001 to $20,000</option>
									<option value="$20,001 to $25,000">$20,001 to $25,000</option>
									<option value="More than $25,001">More than $25,001</option>
								</select>
                            <span style="color:red;" class="signup_error" id="budget_error"></span>    	
                            </div>
                        </div>						
                        <div class="demo_popup_row">
                            <div class="popup_label"><p><?php echo __('message'); ?>*</p></div>
                            <div class="popup_txtbox">
                                <textarea name="message" id="message" placeholder="<?php echo __('message'); ?>" /></textarea>
                                <span style="color:red;" class="error" id="message_error"></span>
                            </div>
                        </div>                                
                        <div class="demo_popup_row">
                            <div class="popup_label"><p><?php echo __('Security Code'); ?>*</p></div>
                            <div class="popup_txtbox shownn_label">
                                <div id="code">
                                    <div class="fl">
                                        <div class="name2">
                                            <b>&nbsp;</b>
                                        </div>
                                        <div class="chgcapchafont"><p id="chgcapcha" style="text-transform:lowercase;" ><?php echo $captchastring; ?>
                                            </p><img src="<?php echo URL_BASE; ?>public/images/reload.png"  width="28px" height="28px" alt="" id="refresh" 
                                                     onclick="javascript:change_captchasad('<?php echo URL_BASE; ?>')" />
                                        </div>
                                        <input type="text"  title="Enter the security code" placeholder="<?php echo __('Security Code'); ?>" name="security_code" />
                                        <label class="control-group err"> <span style="cursor:text;" id="security_code_error"> <?php if (isset($errors)) {
											echo array_key_exists("security_code", $errors) ? $errors["security_code"] : "";
										} ?></span></label>
                                        <input type="hidden" name="org_captcha" id="org_captcha" value="<?php echo $captchastring; ?>" />									
                                    </div>
                                </div>
                            </div>
                        </div>                                                                                    
                    </div>
					<div class="popup_submit_block">
						<div class="demo_popup_row">                            
                            <div class="popup_txtbox">
                                <input type="button" name="get_trial" class="yellow_but"   id="get_trial" value="<?php echo __('Start Free Trial'); ?>" title="<?php echo __('Start Free Trial'); ?>" onclick="validate_gettrial()" />
                            </div>
                        </div>
                        <div class="demo_popup_row">

                            <p id="customer_error1" class="customer_error1" style="display:none"><img width="16px" height="11px" src="<?php echo URL_BASE; ?>/public/css/img/ajax-loaders/ajax-loader-1.gif" /> <?php echo __('please_wait_we_are_verifing_your_details'); ?></p>
                        </div>
					</div>
                </div>
            </form> 
        </div>
    </div>    
</div>

<?php
$current_time = convert_timezone('now',TIMEZONE); 
$currentDate = strtotime($current_time);
$futureDate = $currentDate+(60*5);
$formatDate = date("h:i A", $futureDate);
?>

<!-- Book Now End -->
<script type="text/javascript">

    $(function () {
<?php if (isset($pickup_time) && ($pickup_time != '')) { ?> $("#current_time").html(<?php echo $pickup_time; ?>);  <?php } else {
    ?> 


			/*var todayDate = new Date();
			var hours = todayDate.getHours();
			var mins = todayDate.getMinutes()+5;
			var secs = todayDate.getSeconds();
			*/
			/*
                            if(hours >= 12)
                            {
                                hours = hours - 12;
                                var stas = ' PM';
                            }
                            else
                            {
                                var stas = ' AM';
                            }
                            if(hours < 10)
                            {
                                hours = '0'+hours;
                            }		
                            if(mins < 10)
                            {
                                mins = '0'+mins;
                            }
                            if(secs < 10)
                            {
                                secs = '0'+secs;
                            }		
                            var current_time = hours+':'+mins+':'+secs+stas;
                            $("#current_time").html(current_time);

			*/

			/*if(mins >= 60)
			{
			mins = mins - 60;
			if(hours < 24)
			{
			hours = hours + 1;
			} 
			else
			{
			hours =  1;
			}
			}
			var amPM = hours > 11 ? "PM" : "AM";
			hours = hours % 12;
			hours = hours ? hours : 12; // zero = 12				
			mins = mins > 9 ? mins : "0" + mins;
			secs = secs > 9 ? secs : "0" + secs;
			hours = hours > 9 ? hours: "0" + hours;	

			var current_time = hours + ":" + mins + ":" + secs + " " + amPM;
			*/
	 			
                        $("#current_time").html('<?php echo $formatDate; ?>'); 

<?php } ?>
		
                        $("#country_id").selectbox();
                        $("#country_id2").selectbox();
                
                    <?php  if($controller !="users" && $action!="index")
                    { ?>
					$('#timepicker1').timepicker({
                            showMeridian:true,
                            showSeconds: false,
                            minuteStep:5,
                            secondStep:30,
                            showInputs:false,
                            defaultTime: $('#current_time').html(),
                        });
					<?php } ?>	

		                
                    });
    
    
                    <!-- Login & Register Box -->
                    function showpopup(driver_id,isbooking,driver_name,taxi_id)
                    {			
                        console.log(isbooking);
                        $('#isbooking').val(isbooking);
                        $('#d_id').val(driver_id);
                        $('#driver_name').text(driver_name);
                        $("#taxi_id").val(taxi_id);
                        $("#sign_up").lightbox_me({centered: true, onLoad: function() {
                                $("#sign_up").find("input:first").focus();
                            }});					
                        event.preventDefault();
                    }
                    $("#phone").keypress(function(event) { return checkisNumber(event) });

		    function showpopup_signin(driver_id,isbooking,driver_name,taxi_id)
		    {
                        console.log(isbooking);
                        $('#isbooking').val(isbooking);
                        $('#d_id').val(driver_id);
                        $('#driver_name').text(driver_name);
                        $("#taxi_id").val(taxi_id);
                        $("#customer_sign_in").lightbox_me({centered: true, onLoad: function() {
                                $("#customer_sign_in").find("input:first").focus();
                            }});	
                        //document.forms['customerlogin'].submit();				
                        event.preventDefault();
   		    } 	
   		    
   		        function showpopup_signup(driver_id,isbooking,driver_name,taxi_id)
		    {
                        console.log(isbooking)   ;
                        $('#isbooking').val(isbooking);
                        $('#d_id').val(driver_id);
                        $('#driver_name').text(driver_name);
                        $("#taxi_id").val(taxi_id);
                        $("#customer_sign_up").lightbox_me({centered: true, onLoad: function() {
                                $("#customer_sign_up").find("input:first").focus();
                            }});					
                        event.preventDefault();
   		    } 	
   		    
   		    /* function showpopup_signin(driver_id,isbooking,driver_name,taxi_id)
		    {
                        console.log(isbooking);
                        $('#isbooking').val(isbooking);
                        $('#d_id').val(driver_id);
                        $('#driver_name').text(driver_name);
                        $("#taxi_id").val(taxi_id);
                        $("#customer_sign_in").lightbox_me({centered: true, onLoad: function() {
                                $("#customer_sign_in").find("input:first").focus();
                            }});					
                        event.preventDefault();
   		    } */	

		    function  phone_popup()
		    {
                        $("#phone_number").css('display','block');
                        $("#phone_number").lightbox_me({centered: true,closeClick: false,closeEsc: false, onLoad: function() {
							 
                               // $("#customer_sign_up").find("input:first").focus();
                            }});					
                        event.preventDefault();
   		    } 	

                    function showdriverpopup()
                    {
                        $("#driver_sign_in").lightbox_me({centered: true, onLoad: function() {
                                $("#driver_sign_in").find("input:first").focus();
                            }});					
                        event.preventDefault();
                    }
                    
                    function teltofriendpopup()
                    {
                        $("#tell_to_friend").lightbox_me({centered: true, onLoad: function() {
                                $("#tell_to_friend").find("input:first").focus();
                            }});					
                        event.preventDefault();
                    }
                    
                     function gettrialpopup()
                    {
                        $("#get_free_trial").lightbox_me({centered: true,onLoad: function() {
                                $("#get_free_trial").find("input:first").focus();
                            }});					
                        event.preventDefault();
                    }

                    function booknow(driver_id,driver_name,taxi_id,driver_away_in_km)
                    {
						//alert('as');
                        $('#book_result').html('');
                        var div_id = '#driver_'+driver_id;
                        var current_location = $('#current_location').val();
                        var drop_location = $('#drop_location').val();
                        var no_passengers = $('#no_passengers').val();
                        var pickuptime = $('#timepicker1').val();

                        if(current_location == '' || drop_location == '')
                        {
                            valid = true;
                            if(current_location == ''){
								$('#current_location_error').html(language.enter_current_location);
                                $('#current_location').focus();
                                return false;
                            }
                            else if(drop_location == '')
                            {
                                $('#current_location_error').hide();
                                $('#drop_location_error').html(language.enter_drop_location);
                                $('#drop_location').focus();
                                return false;
                            }		
                            /*else if(no_passengers == '')
                            {
                                $('#drop_location_error').hide();
                                $('#no_passengers_error').html("Please enter the number of passengers");
                                $('#no_passengers').focus();
                                return false;
                            }*/
                        }
                        else
                        {
                            $('#no_passengers_error').hide();
                            $("#c_location").text(current_location);
                            $("#d_location").text(drop_location);
                            $("#n_passengers").text(no_passengers);
                            $("#driver_id").val(driver_id);
                            $("#taxi_id").val(taxi_id);
                            $("#driver_away_in_km").val(driver_away_in_km);
                            $('#pickuptime').text(pickuptime);
                            $('#driver_name').text(driver_name);
                            $("#booknow").lightbox_me({centered: true, onLoad: function() {
                                    $("#booknow").find("input:first").focus();
                                }});					
                            event.preventDefault();		
                        }	   
                    }

		   
                    /***********Book Now************/

                    <?php if($action !="index") {?>
                    $('#waitingtime').timepicker({
                        showMeridian:false,
                        showSeconds: true,
                        showInputs:false,
                        defaultTime:'00:00:00',
                        //defaultTime:false,
                    });
                    <?php } ?>
                    function validatebooking()
                    {
                        var c_location = $("#c_location").text();
                        var d_location = $("#d_location").text();
                        var n_passengers = $("#n_passengers").text();		
                        var timepicker1 = $("#timepicker1").val();		   
                        var waitingtime =  $('select[name="waitingtime"]').val();
                        var driver_id = $('#driver_id').val();
                        var taxi_id = $('#taxi_id').val();
                        var pickupdrop = $("#pickupdrop_val").val();
                        var pass_logid = $("#pass_logid").val();
                        var driver_away_in_km = $("#driver_away_in_km").val();
                        var notes = $("#notes").val();
                        console.log(notes);
                        //alert(driver_away_in_km);
                        if(timepicker1 == '')
                        {
                            valid = true;
                            if(timepicker1 == '')
                            {
								$('#timepicker1_error').html(language.enter_time);
                                $('#timepicker1').focus();
                                return false;
                            }
                        }
                        else
                        {
                            $('#timepicker1_error').hide();
                            $('#book_result').html('<img src="'+SrcPath+'/public/images/process.gif" />');					
                            //alert(pickupdrop);
                            var url= '/passengers/savebooking/?c_location='+c_location+'&d_location='+d_location+'&n_passengers='+n_passengers+'&timepicker1='+timepicker1+'&driver_id='+driver_id+'&pickupdrop='+pickupdrop+'&waitingtime='+waitingtime+'&taxi_id='+taxi_id+'&pass_logid='+pass_logid+'&driver_away_in_km='+driver_away_in_km+'&notes='+notes;
                            $.post(url,function(check){				
                                $('#book_result').html(check);
                                //$('#current_location').val('');
                                //$('#drop_location').val('');
                                //$('#no_passengers').val('');
                                //setTimeout("location.reload(true);",2000);
                                //location.reload(true);
                            });
                        }
                    }
                    function chk()
                    {
                        var pickupdrop;
                        if($('#pickupdrops').is(':checked')){ 
                            pickupdrop = $("#pickupdrop_val").val('1');
                        }else{pickupdrop = $("#pickupdrop_val").val('0');}
                    }
                    /***********************************************************/
                    //Numeric Function
                    function checkisNumber(evt) {
						//alert();
                        evt = (evt) ? evt : window.event;
                        var charCode = (evt.which) ? evt.which : evt.keyCode;
                        //alert(charCode);
                        if (charCode > 31 && (charCode < 48 || charCode > 57) && (charCode != 46)) {
                            return false;
                        }
                        return true;
                    } 
                    <!-- Login & Register Box End -->

</script>
<script type="text/javascript" src="<?php echo URL_BASE; ?>public/js/jquery.selectbox-0.2.js"></script>
<script type="text/javascript">
    /*$(document).ready(function() {
                           $("#booknow").lightbox_me({centered: true, onLoad: function() {
                           $("#booknow").find("input:first").focus();
                           }});					
                                event.preventDefault();	
                        });*/


function driver_logout()
{

		var dataS = '';

			var response;
			$.ajax
			({ 			
				type: "POST",
				url: SrcPath+"driver/get_current_driverstatus", 
				data: dataS, 
				cache: false, 
				dataType: 'html',
				success: function(response) 
				{ 	
					var reval = response.replace(/\s/g, "");
					
					if(reval == 'IN')
					{	
						window.location= SrcPath+'driver/logout';
						//alert("<?php echo __('shiftout_sesssion'); ?>");
						//window.location= SrcPath+'driver/dashboard';
						//return false;
					}
					else
					{
						
						window.location= SrcPath+'driver/logout';
					}
	
				 }		 
			});	
		

}


$('#customerlogin').submit(function() {
customer_validatelogin
});

 function change_captchasad(path){
        var url=path+"users/get_trialcaptch";
        var x, c = '#';
        var i = 3;
        while (i--) {
            x = (Math.random()*256|0).toString(16).toUpperCase();
            c += (x.length < 2? '0' : '') + x;
        }
        $.post(url, {}, function(response){$('#code').html(response);$('#chgcapcha').css("color",c);
        });
		
   }

function change_company_captcha(path){
        var url=path+"users/change_company_captcha";
        var x, c = '#';
        var i = 3;
        while (i--) {
            x = (Math.random()*256|0).toString(16).toUpperCase();
            c += (x.length < 2? '0' : '') + x;
        }
        $.post(url, {}, function(response){$('#code').html(response);$('#chgcapcha').css("color",c);
        });
		
   }
     
   
   function validate_gettrial()
{
	//var form_values = $('#gettrialform').serialize();alert(form_values);
    if($('#gettrialform').valid()) {
	$('.customer_error1').show();
	   var form_values = $('#gettrialform').serialize();
		  $.ajax({
			url:"<?php echo URL_BASE;?>company/getfreetrial",
			type:"POST",
			async: true,
			data:form_values,
			success:function(data){
				if(data == 1) {
					$('.customer_error1').hide();				
					window.location.href = '/free-trial-thank-you.html';
					//location.reload();
				}
			}
		});
	}
}
/*$.validator.addMethod("phonevalidation", function(phone_number, element) {
    phone_number = phone_number.replace(/\s+/g, ""); 
	return this.optional(element) || (phone_number.length > 5) &&
		phone_number.match(/^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);
}, $.validator.format('my message'));
*/
$("#gettrialform").validate({
	   errorPlacement: function ($error, $element) {
        var name = $element.attr("name");
        $('#'+name+'_error').append($error);
    },
    errorClass:'error',
		rules: {
				g_name:{
					required:true,
				},
				company_name:{
					required:true,
				},
				g_email:{
					required:true,
					email:true
				},
				g_country:{
					required:true,
				},
				g_city:{
					required:true,
				},
				budget:{
					required:true,
				},
				g_phone:{
					required:true,
					//phonevalidation:true,
					number:true,
					minlength:5,
					maxlength:15,
				},
				no_of_taxi: {
				required:true,
				number:true,
				},
				security_code: {
				required:true,
				equalTo:"#org_captcha",
				},
				message: {
				required:true,
				},
                 
		},
		messages: {	
			    g_name:{
					required:"<?php echo __('name_req'); ?>",
				},					
				company_name:{
					required:"<?php echo __('company_req'); ?>",
				},
				g_email:{
					required:"<?php echo __('email_req'); ?>",
					email:"<?php echo __('valid_email'); ?>"
				},
				budget:{
					required:"<?php echo __('Choose your budget'); ?>",
				},
				g_phone:{
					required:"<?php echo __('mobile_req'); ?>",
					number:"<?php echo __('mobile_must_be_number'); ?>",
					//phonevalidation:"<?php echo __('valid_number'); ?>",
					minlength:"<?php echo __('valid_number'); ?>",
					maxlength:"<?php echo __('valid_number'); ?>",
				},
				no_of_taxi: {
				required:"<?php echo __('number_of_taxi_req'); ?>",
				number:"<?php echo __('valid_number_of_taxi'); ?>",
				},
				security_code: {
				required:"<?php echo __('enter_captcha'); ?>",
				 equalTo:"<?php echo __('captcha_mismatch'); ?>",
				},
				message: {
				required:"<?php echo __('message_req'); ?>",
				},
				g_country:{
					required:"<?php echo __('country_req'); ?>",
				},
				g_city:{
					required:"<?php echo __('city_req'); ?>",
				},
	},
});	

function change_city()
{
		var countryid= $("#country").val();
		
		  $.ajax({
			url:"<?php echo URL_BASE;?>company/getcitylist",
			type:"get",
			data:"country_id="+countryid,
			success:function(data){
			$('#city_list').html();
			$('#city_list').html(data);
			},
			error:function(data)
			{
				//alert("failed");
			}
		});	
    
}
$(".close").click(function(){
	$(".lb_overlay").hide();
	$(".demo_contact_popup_outer").hide();
	$("#customer_sign_up").hide();
	$("#customer_sign_in").hide();
	$("#driver_sign_in").hide();
	$("#booknow").hide();
	$("#citylist_popup").hide();
	$("#sign_up").hide();
});
function hide_req2()
{
	//$('#c_info').hide();
	$('div#fade').remove();
}

function hide_req_op(gm)
{ 
    $('#'+gm).hide();    
    $('div#fade').remove();
}


/*menu left*/

(function($) {
				$(document).ready(function() {
					//$.slidebars();
				});
			}) (jQuery);


/*** Header Animation ***/
$(window).scroll(function() {

    if ($(this).scrollTop() > 1){ 
	 
        $('.header_outer_cont').addClass("sticky");
    }
    else{
        $('.header_outer_cont').removeClass("sticky");
    }
});
/** animation End ***/


$(document).ready(function() {
	$('.key_list,.key_block_right,.home_subtitle,.support_info,.gsteps_btm_block,.fc_image,.fc_info,.feature_artical_inner,.service_icon,.faq_block,.list,.about_text,.about_title,.global_locations ').addClass("").viewportChecker({
	    classToAdd: 'visible animated fadeInDown', // Class to add to the elements when they are visible
	    offset: 100    
	   }); 
                      
 $('.header_outer_cont').removeClass("sticky");	   
});

</script>

