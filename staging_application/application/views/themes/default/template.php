<!DOCTYPE html>
<?php defined('SYSPATH') OR die('No direct access allowed.'); 
$controller = Request::initial()->controller();
$action = Request::initial()->action(); ?>
<html xmlns="http://www.w3.org/1999/xhtml" class="no-js">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google-translate-customization" content="feed34954c7baaab-fdb5bbdf0de37539-g631f301c9f5697df-15"></meta>
<meta name="title" content="<?php echo $meta_title; ?>" />
<meta name="keywords" content="<?php echo $meta_keywords; ?>" />
<meta name="description" content="<?php echo $meta_description; ?>" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Thu, 01 Oct 2015 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />
<!-- language tags starts here -->
<link rel="alternate" href="www.q8grandlimo.com" hreflang="x-default" />
<link rel="alternate" href="www.q8grandlimo.com" hreflang="en-us" />
<link rel="alternate" href="www.q8grandlimo.com" hreflang="en-gb" />


<!-- language tags ends here -->
    <?php if(COMPANY_CID==0) { ?>  
    
	<link rel="shortcut icon" href="<?php echo URL_BASE.SITE_FAVICON_IMGPATH;?><?php echo $footer_contents['site_favicon'];?>" type="image/x-icon" />
	<?php } else { 
		   if(trim(COMPANY_FAV_NAME)!=""&&file_exists(COMPANY_FAV_FILE_PATH)) {
		?>	
	<link rel="shortcut icon" href="<?php echo COMPANY_FAV_URL_PATH;?>" type="image/x-icon" />
	<?php } else { ?>	
	<link rel="shortcut icon" href="<?php echo URL_BASE.SITE_FAVICON_IMGPATH;?><?php echo $footer_contents['site_favicon'];?>" type="image/x-icon" />
	<?php } } ?>	
	<link rel="stylesheet" media="screen" type="text/css" href="<?php echo URL_BASE;?>public/css/bootstrap3.7.min.css"  />
	<?php 
	$lang="en";$lang=isset($_SESSION['lang'])?$_SESSION['lang']:"en";
	if(COMPANY_CID == 1 ) { 
		
		if($lang == 'en'){
	?>	
	<link rel="stylesheet" media="screen" type="text/css" href="<?php echo URL_BASE;?>public/css/style_211118new.css" />
	<link rel="stylesheet" media="screen" type="text/css" href="<?php echo URL_BASE;?>public/css/media_style_211118new.css" />  
	<?php } else { ?>
	<link rel="stylesheet" media="screen" type="text/css" href="<?php echo URL_BASE;?>public/css/style_arabic_211118new.css" />
	<link rel="stylesheet" media="screen" type="text/css" href="<?php echo URL_BASE;?>public/css/media_style_arabic_211118new.css" />  
	<?php }  }
	else { if($lang == 'en'){ ?>
	<meta name="robots" content="noindex">
	<link rel="stylesheet" media="screen" type="text/css" href="<?php echo URL_BASE;?>public/css/style_211118new.css" />
	<?php } else { ?>
	<link rel="stylesheet" media="screen" type="text/css" href="<?php echo URL_BASE;?>public/css/style_arabic_211118new.css" />
	<?php } ?>
	<link rel="stylesheet" media="screen" type="text/css" href="<?php echo URL_BASE;?>public/css/company_style.css" /> 
	<?php  } ?> 	
      
       
	<!-- menu script start -->
	<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/jquery3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/script.js"></script>  

	<!-- <script type="text/javascript" src="<?php echo URL_BASE;?>public/js/jquery.fadethis.js"></script> -->
<!--
	<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/smoothscroll.js"></script>        
-->
	<!-- <script type="text/javascript" src="<?php echo URL_BASE;?>public/js/wow.min.js"></script> -->

	<!-- <script src="/public/js/jquery.prettyPhoto.js"></script> -->
	<!-- menu script end -->
	<?php //if($controller !="users" && $action!="index")
   //{ ?>   	
	<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/bootstrap3.7.min.js"></script>	
	<!-- <script type="text/javascript" src="<?php echo URL_BASE;?>public/js/bootstrap-timepicker.min.js"></script>	

    <script type="text/javascript" src="<?php echo URL_BASE;?>public/js/viewportchecker.js"></script>	


	<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/swiper.min.js"></script>

-->	
	<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/owl.carousel.js"></script> 
<!--
	<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/jquery.isotope.min.js"></script>
-->
	<?php //} ?>

	<!-- <script type="text/javascript" src="<?php echo URL_BASE;?>public/js/jquery.lightbox_me.js"></script> -->

	<title><?php if($meta_title == '') { echo SITENAME;  } else {  echo $meta_title; } ?></title>   
		<!-- jQuery library -->
			<?php 
			if($action=="dashboard" || $action=="booking" || $action=="airport_pickup"){ ?>
				<script src="http://maps.google.com/maps/api/js?key=<?php echo GOOGLE_MAP_API_KEY; ?>&libraries=places,geometry" type="text/javascript"></script>
				<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/gmaps.js"></script>
			<?php }  ?>
<!-- jQuery library -->     



<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/simpledatetimepicker/jquery.simple-dtpicker.js"></script>
<link type="text/css" href="<?php echo URL_BASE;?>public/js/simpledatetimepicker/jquery.simple-dtpicker.css" rel="stylesheet" />



<script type="text/javascript">
	 var language = <?php echo $js_language; ?>
	
</script>
<?php if(COMPANY_CID==0) { ?>  
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43899653-3', 'q8grandlimo.com');
  ga('send', 'pageview');

</script>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PJ8Q6M"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PJ8Q6M');</script>
<?php } ?>
<!-- End Google Tag Manager -->
<script>
   //new WOW().init();
</script>
 
<script>
 
$(function(){
 
	$(document).on( 'scroll', function(){
 
		if ($(window).scrollTop() > 100) {
			$('.scroll-top-wrapper').addClass('show');
		} else {
			$('.scroll-top-wrapper').removeClass('show');
		}
	});
	
	$("#messagedisplay") && ($("#messagedisplay").animate({
        opacity: 1
    }, 5e3), $("#messagedisplay").fadeOut("slow")), $("#error_messagedisplay") && ($("#error_messagedisplay").animate({
        opacity: 1
    }, 5e3), $("#error_messagedisplay").fadeOut("slow"))
	   
	$('.scroll-top-wrapper').on('click', scrollToTop);
	<?php if($action=="features")  { ?>
	$("body").addClass("features_banner");
	<?php } else { ?>
	$("body").removeClass("features_banner");
	<?php } ?>
});
 
function scrollToTop() {
	verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
	element = $('body');
	offset = element.offset();
	offsetTop = offset.top;
	$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
}
</script>

<script>
var $ = jQuery.noConflict();
jQuery.browser={};(function(){jQuery.browser.msie=false;
jQuery.browser.version=0;if(navigator.userAgent.match(/MSIE ([0-9]+)\./)){
jQuery.browser.msie=true;jQuery.browser.version=RegExp.$1;}})();
</script>
<?php if(COMPANY_CID==0 && $action=="thankyou")  { ?>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '1721176304785228');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1721176304785228&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<?php } ?>
<script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit"></script>
</head>

<?php 
//print_r($user_det);exit;


  //echo "session:";print_r($_SESSION['usertype']); echo "<br />"; echo "usertype:".print_r($usertype); echo "<br /> phone:";print_r($user_det[0]['phone']); echo "<br /> fb user id:"; print_r($user_det[0]['fb_user_id']); ?>
<body <?php /* if(isset($_SESSION['usertype'])) { $usertype = $_SESSION['usertype']; if(isset($_SESSION['id']) && ($usertype == 'passengers')) { ?> onload="return phone_popup();" <?php  } }*/ ?> <?php if($_SERVER['REQUEST_URI'] !='/')  { ?>  class="body_non_bg" <?php } ?> > 
<div class="loader" style="display: none;">
	<svg xmlns:svg="http://www.w3.org/2000/svg"  class="icon_64" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" viewBox="0 0 128 16" xml:space="preserve"><path fill="#e2cba7" fill-opacity="0.42" d="M6.4,4.8A3.2,3.2,0,1,1,3.2,8,3.2,3.2,0,0,1,6.4,4.8Zm12.8,0A3.2,3.2,0,1,1,16,8,3.2,3.2,0,0,1,19.2,4.8ZM32,4.8A3.2,3.2,0,1,1,28.8,8,3.2,3.2,0,0,1,32,4.8Zm12.8,0A3.2,3.2,0,1,1,41.6,8,3.2,3.2,0,0,1,44.8,4.8Zm12.8,0A3.2,3.2,0,1,1,54.4,8,3.2,3.2,0,0,1,57.6,4.8Zm12.8,0A3.2,3.2,0,1,1,67.2,8,3.2,3.2,0,0,1,70.4,4.8Zm12.8,0A3.2,3.2,0,1,1,80,8,3.2,3.2,0,0,1,83.2,4.8ZM96,4.8A3.2,3.2,0,1,1,92.8,8,3.2,3.2,0,0,1,96,4.8Zm12.8,0A3.2,3.2,0,1,1,105.6,8,3.2,3.2,0,0,1,108.8,4.8Zm12.8,0A3.2,3.2,0,1,1,118.4,8,3.2,3.2,0,0,1,121.6,4.8Z"/><g><path fill="#bb822e" fill-opacity="1" d="M-42.7,3.84A4.16,4.16,0,0,1-38.54,8a4.16,4.16,0,0,1-4.16,4.16A4.16,4.16,0,0,1-46.86,8,4.16,4.16,0,0,1-42.7,3.84Zm12.8-.64A4.8,4.8,0,0,1-25.1,8a4.8,4.8,0,0,1-4.8,4.8A4.8,4.8,0,0,1-34.7,8,4.8,4.8,0,0,1-29.9,3.2Zm12.8-.64A5.44,5.44,0,0,1-11.66,8a5.44,5.44,0,0,1-5.44,5.44A5.44,5.44,0,0,1-22.54,8,5.44,5.44,0,0,1-17.1,2.56Z"/><animateTransform attributeName="transform" type="translate" values="23 0;36 0;49 0;62 0;74.5 0;87.5 0;100 0;113 0;125.5 0;138.5 0;151.5 0;164.5 0;178 0" calcMode="discrete" dur="1170ms" repeatCount="indefinite"/></g>
</div>
<input type="hidden" name="baseurl" id="baseurl" value="<?php echo URL_BASE;?>">
<noscript>Your browser does not support JavaScript!</noscript>	


	<?php 
	//echo COMPANY_CID ;exit;
	//echo SUBDOMAIN;
	//exit;
	
	if(COMPANY_CID == 1) { echo new View(USERVIEW."header"); } else if(SUBDOMAIN == 'demo') { echo new View(USERVIEW."header-company"); } else {  echo new View(USERVIEW."header-company"); }?>
	<div id="min-content">
	   <?php echo $content;?>
	</div>
	<?php if(COMPANY_CID == 1) { echo new View(USERVIEW."footer"); } else if(SUBDOMAIN == 'demo') { echo new View(USERVIEW."company_footer"); } else {  echo new View(USERVIEW."company_footer"); }?>
	<?php //echo new View(USERVIEW."footer"); ?> 
	
<?php /* if(COMPANY_CID == 1 ){ ?>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	<script type="text/javascript">
var __lc = {};
__lc.license = 5324991; 
(function() {
	var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
	lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();
</script>   
<?php /* <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/561e4bc9b90059c03c3ad732/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script--> */ ?>
<?php /* } */ ?>
<?php
if(($controller=="users" && $action=="index") || ($controller=="page" && $action=="aboutus") || ($controller=="page" && $action=="features")  || ($controller=="users" && $action=="contactus")|| ($controller=="page" && $action=="demo") || ($controller=="page" && $action=="pricing") || ($controller=="page" && $action=="solutions" ) || ($controller=="page" && $action=="package") || ($controller=="page" && $action=="license") || ($controller=="page" && $action=="home_service") || ($controller=="page" && $action=="health_service") || ($controller=="page" && $action=="delivery_service") || ($controller=="page" && $action=="taxi_service") || ($controller=="page" && $action=="vehicle_service") || ($controller=="page" && $action=="case_studies") || ($controller=="page" && $action=="case_study_details") || ($controller=="page" && $action=="Portfolios"))
{
	/*
if(COMPANY_CID == 1 ){ if(LIVECHATSTATUS==0) { echo new View("themes/default/company_chat"); }else{
 ?>
<?php
} } */ }
?>
</body>
</html>
