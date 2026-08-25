<?php defined('SYSPATH') OR die('No direct access allowed.');
$captchastring = ''; for ($i = 0; $i < 5; $i++) { $captchastring .= chr(rand(97, 122)); } ?>
<link rel="stylesheet" href="<?php echo URL_BASE;?>public/css/select2.css"/>
<div class="inner_page_container">
	<section class="cms_banner_container">
		<div class="innerpage_banner">
			<img src="public/images/cms_banner.png" alt="Pricing" class="img-responsive">			
		</div>
	</section>
	<section class="cms_container">
		<div class="container">
			<div class="col-md-12">
				<ul class="nav nav-pills">
				    <li><a data-toggle="pill" href="#about" title="About Us" >About Us</a></li>
				    <li><a data-toggle="pill" href="#careers" title="Careers">Careers</a></li>
				    <li class="active"><a data-toggle="pill" href="#support" title="Support">Support</a></li>
				    <li><a data-toggle="pill" href="#blog" title="Blog">Blog</a></li>
				    <li><a data-toggle="pill" href="#termscondotions" title="Terms &amp; Conditions" class="picklater">Terms &amp; Conditions</a></li>
				</ul>
			</div>
			<div class="tab-content">
				<div id="about" class="tab-pane fade">
					<div class="col-md-12">
						<h2 class="cms_page_title">About Us</h2>
					</div>
					<div class="col-md-12">
						<p>The official Grand Limo App in Kuwait. Book your ride with ease.</p>
						<div class="abt_appbar">
							<h4>Available on Ios &amp; Android</h4>
							<ul>
					            <li><a href="javascript:;" title="" class="footer_app_icon footer_iapp_icon"></a></li>
					            <li><a href="javascript:;" title="" class="footer_app_icon footer_gapp_icon"></a></li>
					        </ul>
						</div>
						<p>We’re offering our clients a continentally rich and unique experience. You will experience a superior commute experience with our fleet of chauffeur driven saloon vehicles. Peace of mind is an integral part of the package where you are guaranteed convenience and reliability.</p>
						<ul>
							<li>Grand Limo App is free to download and it costs you nothing to register</li>
							<li>Book a car within a few simple taps and experience exclusive priority service throughout Kuwait.</li>
							<li>You can place the booking directly on our map</li>
							<li>No waiting outside flagging down a taxi. Track your car as it arrives on your map, or call them when they are nearby. No more guessing where your car may be.</li>
							<li>You can pre-arrange your trip schedule via the app allowing you to set aside your transportation needs.</li>
							<li>If necessary, cancel your booking at any time.</li>
							<li>Grand Limo is the most exclusive and most technologically advanced private car hire company in Kuwait.</li>
							<li>Our drivers are uniformed and all of our vehicles use the latest GPS technology.</li>
							<li>Our vehicles are stylish and are unmarked making this a private experience for our clients.</li>
							<li>Entertainment will be provided by our onboard Wi-Fi and Ipads. Watch your favorite series on Netflix or play a game.</li>
							<li>Safety and security is our highest priority to provide our clients with added peace of mind.</li>
							<li>Your privacy is respected and your information is confidential.</li>
							<li>Payment will be made simple by storing your credit card details. You may choose as a master account holder to share your stored credit card payment option with your family members. Be informed within the App of your family’s trip progress.</li>
							<li>Your car will be equipped with an onboard camera system that with allow you as a parent to monitor your children’s ride.</li>
							<li>Payment terminals will be available on board your vehicle for Credit Card or Knet transactions if you choose not to pay by cash or utilize your stored Credit Card on our App.</li>
						</ul>
						<p>It’s so easy and quick to use. Download the App and register. You are ready to book your first ride.</p>
						<p>When you make your bookings, we’ll notify you of your car and driver’s details and it will be dispatched immediately. We’ll also notify you when your car is near and when it arrives.</p>
						<p>We value your feedback and take all reviews seriously. So please leave us your feedback about your experience. This will help us to continually improve our services.</p>
					</div>
				</div>
				<div id="careers" class="tab-pane fade">
					<form method="POST" name="careers" onsubmit="">
						<div class="col-md-12">
							<h2 class="cms_page_title">Careers</h2>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<i class="cname_ico"></i>									
								<input placeholder="Enter Name" type="text" name="name" id="name" title="<?php echo __('enter_name');?>" value="" class="form-control" maxlength="100" />
								<label class="control-group err"> <span style="cursor:text;" id="name_error"> <?php if(isset($errors)){ echo array_key_exists("name",$errors)?$errors["name"]:""; } ?></span></label>								
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">								
								<i class="cemail_ico"></i>									
								<input placeholder="Email" type="text" name="email" title="<?php echo __('enteremailaddress');?>" value="" class="form-control" maxlength="100" />
								<label class="control-group err"> <span style="cursor:text;" id="email_error"> <?php if(isset($errors)){ echo array_key_exists("email",$errors)?$errors["email"]:""; } ?></span></label>								
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">								
								<i class="cphone_ico"></i>									
								<input placeholder="Phone Number" type="text" name="phone" title="<?php echo __('phone_label');?>" value="" class="form-control" maxlength="20" />
								<label class="control-group err"><span style="cursor:text;" id="tell_error"> <?php if(isset($errors)){ echo array_key_exists("phone",$errors)?$errors["phone"]:""; } ?></span></label>								
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<i class="cfile_ico"></i>									
								<div class="upload_file" >
									<input type="file" name="licence_file" id="file-7" class="inputfile inputfile-6" data-multiple-caption="{count} files selected" multiple="">
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
				</div>
				<div id="support" class="tab-pane fade in active">
					<form method="POST" name="frmlogin" id="frmlogin" onsubmit="return contact_validation();">
						<div class="col-md-12">
							<h2 class="cms_page_title">Contact Us</h2>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<i class="cname_ico"></i>									
								<input placeholder="Enter Name" type="text" name="name" id="name" title="<?php echo __('enter_name');?>" value="<?php echo isset($validator['name'])?$validator['name']:'';?>" class="login_txt form-control" maxlength="100" />
								<label class="control-group err"> <span style="cursor:text;" id="name_error"> <?php if(isset($errors)){ echo array_key_exists("name",$errors)?$errors["name"]:""; } ?></span></label>								
							</div>
							<div class="form-group">								
								<i class="cemail_ico"></i>									
								<input placeholder="Email" type="text" name="email" title="<?php echo __('enteremailaddress');?>" value="<?php echo isset($validator['email'])?$validator['email']:'';?>" class="login_txt form-control" maxlength="100" />
								<label class="control-group err"> <span style="cursor:text;" id="email_error"> <?php if(isset($errors)){ echo array_key_exists("email",$errors)?$errors["email"]:""; } ?></span></label>								
							</div>
							<div class="form-group cphone">								
								<i class="cphone_ico"></i>									
								<input placeholder="Phone Number" type="text" name="phone" title="<?php echo __('phone_label');?>" value="<?php echo isset($validator['phone'])?$validator['phone']:'';?>" class="login_txt form-control" maxlength="20" />
								<label class="control-group err"><span style="cursor:text;" id="tell_error"> <?php if(isset($errors)){ echo array_key_exists("phone",$errors)?$errors["phone"]:""; } ?></span></label>
								<input type="hidden" name="services"  value=""/>								
							</div>
						</div>
						<div class="col-md-6 cont-ar">
							<div class="form-group">								
								<i class="csubj_ico"></i>									
								<input placeholder="Subject" type="text" name="subject" title="<?php echo __('enter_subject');?>" value="<?php echo isset($validator['subject'])?$validator['subject']:'';?>" class="login_txt form-control" />
								<label class="control-group err"><span style="cursor:text;" id="category_error"> <?php if(isset($errors)){ echo array_key_exists("subject",$errors)?$errors["subject"]:""; } ?></span></label>								
							</div>
							<div class="form-group">								
								<i class="cmsg_ico"></i>									
								<textarea placeholder="Message" type="text" name="message" title="<?php echo __('enter_message');?>" value="<?php echo isset($validator['message'])?$validator['message']:'';?>" class="login_txt form-control"><?php if(isset($postvalue['message'])){echo $postvalue['message'];}?></textarea>
								<label class="control-group err"><span style="cursor:text;" id="desc_error"> <?php if(isset($errors)){ echo array_key_exists("message",$errors)?$errors["message"]:""; } ?></span></label>								
							</div>
							<!-- <div class="form-group" id="code">								
								<div class="chgcapchafont">
									<p id="chgcapcha" style="text-transform:lowercase;" ><?php echo $captchastring; ?>
										</p>
									<img src="<?php echo URL_BASE;?>public/images/reload.png" width="28px" height="28px" alt="Reload" id="refresh" onclick="javascript:change_captchasad('<?php echo URL_BASE;?>')" />
								</div>
								<input placeholder="Security Code *" type="text" class="form-control sec-code" title="Enter the security code" name="security_code" />
								<label class="control-group err"> <span style="cursor:text;" id="captca_error"> <?php if(isset($errors)){ echo array_key_exists("security_code",$errors)?$errors["security_code"]:""; } ?></span></label>
								<input type="hidden" name="org_captcha" value="<?php echo $captchastring; ?>" />								
							</div> -->
							<div class="form-group captcha_blk">	
								<div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
	                            <!-- <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha"> -->
	                            <div class="help-block with-errors"></div>
	                        </div>
							<div class="form-group confirm">
								<div id="submit_loader"></div>
								<div id="submits" class="pull-right">
									<input name="reset_company" class="btn btn-inverse" type="reset" title="<?php echo __('button_reset');?>" value="<?php echo __('button_reset');?>" />
									<input name="submit_company" class="btn btn-primary" type="submit" title="<?php echo __('post_label');?>" value="<?php echo __('Submit');?>" />
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
				</div>
				<div id="blog" class="tab-pane fade">
					<div class="col-md-9 ">
						<div class="blog_posts_container br1">
							<h2 class="cms_page_title">Terms &amp; Conditions</h2>
							<div class="blog_posts_blocks">
								<img src="public/images/blog_img1.png" alt="" class="img-responsive">
								<h2 class="blog_title">Update to Our Safety and Security Procedures in Kuwait. </h2>
								<div class="blog_det">
									<div class="blog_thumb">
										<img src="public/images/blog_thumb1.png"  alt="user thumbnail">
									</div>
									<div class="det_desc">
										<h4 class="blog_uname">Shuhaib</h4>
										<small class="blog_date">17 Apr 2018</small>
									</div>
								</div>
								<div class="blog_content">
									<p>We’re offering our clients a continentally rich and unique experience. You will experience a superior commute experience with our fleet of chauffeur driven saloon vehicles. Peace of mind is an integral part of the package where you are guaranteed convenience and reliability.</p>
									<ul>
										<li>Grand Limo App is free to download and it costs you nothing to register</li>
										<li>Book a car within a few simple taps and experience exclusive priority service throughout Kuwait.</li>
										<li>You can place the booking directly on our map</li>
										<li>No waiting outside flagging down a taxi. Track your car as it arrives on your map, or call them when they are nearby. No more guessing where your car may be.</li>
										<li>You can pre-arrange your trip schedule via the app allowing you to set aside your transportation needs.</li>
										<li>If necessary, cancel your booking at any time.</li>
										<li>Grand Limo is the most exclusive and most technologically advanced private car hire company in Kuwait.</li>
										<li>Our drivers are uniformed and all of our vehicles use the latest GPS technology.</li>
									</ul>
								</div>
							</div>
							<div class="blog_posts_blocks">
								<img src="public/images/blog_img2.png" alt="" class="img-responsive">
								<h2 class="blog_title">Update to Our Safety and Security Procedures in Kuwait. </h2>
								<div class="blog_det">
									<div class="blog_thumb">
										<img src="public/images/blog_thumb1.png" alt="user thumbnail">
									</div>
									<div class="det_desc">
										<h4 class="blog_uname">Shuhaib</h4>
										<small class="blog_date">17 Apr 2018</small>
									</div>
								</div>
								<div class="blog_content">
									<p>We’re offering our clients a continentally rich and unique experience. You will experience a superior commute experience with our fleet of chauffeur driven saloon vehicles. Peace of mind is an integral part of the package where you are guaranteed convenience and reliability.</p>
									<ul>
										<li>Grand Limo App is free to download and it costs you nothing to register</li>
										<li>Book a car within a few simple taps and experience exclusive priority service throughout Kuwait.</li>
										<li>You can place the booking directly on our map</li>
										<li>No waiting outside flagging down a taxi. Track your car as it arrives on your map, or call them when they are nearby. No more guessing where your car may be.</li>
										<li>You can pre-arrange your trip schedule via the app allowing you to set aside your transportation needs.</li>
										<li>If necessary, cancel your booking at any time.</li>
										<li>Grand Limo is the most exclusive and most technologically advanced private car hire company in Kuwait.</li>
										<li>Our drivers are uniformed and all of our vehicles use the latest GPS technology.</li>
									</ul>
								</div>
							</div>							
						</div>
					</div>
					<div class="col-md-3">
						<div class="blog_sidebar">
							<div class="recent_post">
								<h4>Recent Post</h4>
								<ul>
									<li><a href="javascript:;" title="">Top 7 Genuine Captcha Entry Job Sites | Online Typing Jobs</a></li>
									<li><a href="javascript:;" title="">Make money through Digitize India Platform | Data Entry Jobs</a></li>
									<li><a href="javascript:;" title="">10 best legitimate Micro Jobs sites to Make Money Online</a></li>
									<li><a href="javascript:;" title="">5 best legit alternatives to Microworkers (with payment proofs)</a></li>
									<li><a href="javascript:;" title="">Microworkers - Fake or Genuine ? Review with Payment Proof</a></li>
									<li><a href="javascript:;" title="">Top 10 ways to make money online without investment</a></li>
									<li><a href="javascript:;" title="">Top 10 survey sites to make money online in India</a></li>
									<li><a href="javascript:;" title="">How to Buy and Sell Shares using Sharekhan</a></li>
								</ul>
							</div>
							<div class="archives_list">
								<h4>Archives</h4>
								<ul>
									<li><a href="javascript:;" title="April 2018">April 2018</a></li>
									<li><a href="javascript:;" title="February 2018">March 2018</a></li>
									<li><a href="javascript:;" title="February 2018">February 2018</a></li>
									<li><a href="javascript:;" title="January 2018">January 2018</a></li>
									<li><a href="javascript:;" title="December 2017">December 2017</a></li>
									<li><a href="javascript:;" title="November 2017">November 2017</a></li>
									<li><a href="javascript:;" title="October 2017">October 2017</a></li>
									<li><a href="javascript:;" title="September 2017">September 2017</a></li>
									<li><a href="javascript:;" title="August 2017">August 2017</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div id="termscondotions" class="tab-pane fade">
					<div class="col-md-12">
						<h2 class="cms_page_title">Terms &amp; Conditions</h2>
					</div>
					<div class="col-md-12">
						<p>Effective: December 11, 2017</p>	 
						<h4>Contractual Relationship</h4>
						<p>These Terms of Use ("Terms") govern your access or use, from within the State of Kuwait, of the application and its services. Kind read the terms carefully as they constitute a legal agreement between you and Grand Limo. In these Terms, the words "including" and "include" mean "including, but not limited to."</p>
						 
						<p>By accessing or using the Services, you confirm your agreement to be bound by these Terms. If you do not agree to these Terms, you may not access or use the Services. These Terms expressly supersede prior agreements or arrangements with you. Grand Limo may immediately terminate these Terms or any Services with respect to you, or generally cease offering or deny access to the Services or any portion thereof, at any time for any reason.</p>
						 
						<p>Right to the provision of services may be rescinded for the following violations (a) eating or drinking in the vehicle, (b) smoking or vaping within the vehicle, (c) use of bad language or behavior while communicating with the driver or Grand Limo team, (d) transporting or use of illegal substances within the vehicles, (e) indecent acts within the vehicle as applicable by Kuwait public law, (f) reckless behavior within the vehicle, (g) damage to the property of Grand Limo, (h) refusal to pay the complete fare as indicated within the application.</p>
						 
						<p class="imp"><span>IMPORTANT:</span> PLEASE REVIEW THE ARBITRATION AGREEMENT SET FORTH BELOW CAREFULLY, AS IT WILL REQUIRE YOU TO RESOLVE DISPUTES WITH GRAND LIMO ON AN INDIVIDUAL BASIS THROUGH FINAL AND BINDING ARBITRATION. BY ENTERING THIS AGREEMENT, YOU EXPRESSLY ACKNOWLEDGE THAT YOU HAVE READ AND UNDERSTAND ALL OF THE TERMS OF THIS AGREEMENT AND HAVE TAKEN TIME TO CONSIDER THE CONSEQUENCES OF THIS IMPORTANT DECISION.</p>
						 
						<p>Supplemental terms may apply to certain Services, such as policies for a particular event, program, activity or promotion, and such supplemental terms will be disclosed to you in separate disclosures or in connection with the applicable Service(s). Supplemental terms are in addition to, and shall be deemed a part of, the Terms for the purposes of the applicable Service(s). Supplemental terms shall prevail over these Terms in the event of a conflict with respect to the applicable Services.</p>
						 
						<p>Grand Limo may amend the Terms from time to time. Amendments will be effective upon Grand Limo posting of such updated Terms at this location or in the amended policies or supplemental terms on the applicable Service(s). Your continued access or use of the Services after such posting confirms your consent to be bound by the Terms, as amended. If Grand Limo changes these Terms after the date you first agreed to the Terms (or to any subsequent changes to these Terms), you may reject any such change by providing Grand Limo written notice of such rejection within 30 days of the date such change became effective, as indicated in the "Effective" date above. This written notice must be provided either (a) by mail or hand delivery to our registered agent for service of process, c/o Grand Limo Renting Car and Leasing Co. (Ardhiya, Kuwait), or (b) by email from the email address associated with your Account to: info@q8grandlimo.com. In order to be effective, the notice must include your full name and clearly indicate your intent to reject changes to these Terms. By rejecting changes, you are agreeing that you will continue to be bound by the provisions of these Terms as of the date you first agreed to the Terms (or to any subsequent changes to these Terms).</p>
						 
						<p>Grand Limo’s collection and use of personal information in connection with the Services is described in Grand Limo’s Privacy Statements located at www.q8grandlimo.com/legal/privacy.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<!-- POPUP START -->
    <div class="partnership_popup_outer clearfix" id="info1" style="display:none">

    <div class="partnership_popup_inner">
        <div class="partner_popup_close">
              <a title="Close" onclick="partnerDivHide()" style="cursor:pointer;">&nbsp;</a>
         </div>
        <div class="partner_ship_form_title">
         <h3>Become A Partner</h3>
        </div>
<form name="partner_form" id="partner" action="<?php echo URL_BASE;?>livechat.html"  method="post" onsubmit="return check_partner();" >
        <ul class="partner_ship_form">
                <li>
                         <div class="partnership_column">
                        <input type="text" placeholder="Name *" name="name" /><em class="err" id="pname_error"></em>
                    </div>
                    <div class="partnership_column">
                        <input type="text" title="Email ID" name="email" placeholder="Mail Id *" /><em class="err" id="pemail_error"></em>
                    </div>
                </li>
                <li>
                    <div class="partnership_column">
                        <input type="text" title="Phone" name="phone"  placeholder="Phone *" /><em class="err" id="ptell_error"></em>
                    </div>
                    <div class="partnership_column">
                        <input type="text" name="agency" placeholder="Agency Name" />
                    </div>
                </li>
                <li>
                    <div class="partnership_column">
                        <input type="text" placeholder="Website" name="website"/>
                    </div>
                    <div class="partnership_column">
                        <input type="text" placeholder="Service offering" name="service" />
                    </div>
                </li>
                <li>
                    <div class="partnership_column full_width">
                        <textarea placeholder="Message *" name="feedback1"  ></textarea><em class="err" id="pdesc_error"></em>
                    </div>
                </li>
                <li>
                    <div class="partnership_column partnership_captcha">
                        <label>Security Code <span>*</span></label>
                    </div>
                    <div class="partnership_column chgcapchafont">
                        <p id="partnerchgcapcha"><?php echo $captchastring; ?></p>
                        <input class="partnership_captcha_input"  name="captcha_code" type="text" /><em class="err" id="pcaptca_error"></em>
			<input type="hidden" name="org_captcha" value="<?php echo $captchastring; ?>" />
			<input type="hidden" name="message" id="feed" />
			<input type="hidden" name="subject" value="Partner" />
                    </div>
                </li>
                <li><input class="popup_button_bg" type="submit" value="Partner With Us" /></li>
             </ul>
         </form>
    </div>
</div>
<!-- POPUP START -->
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
	if(captch =='')	{
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
					var label	 = input.nextElementSibling,
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