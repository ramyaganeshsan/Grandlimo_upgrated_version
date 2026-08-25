<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="title" content="<?php echo $meta_title; ?>" />
<meta name="keywords" content="<?php echo $meta_keywords; ?>" />
<meta name="description" content="<?php echo $meta_description; ?>" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<?php /* Google Web Master Tool Code */ ?>
<meta name="google-site-verification" content="21fvh7_QDOghOf9mK9ZSOe1dVVjM-CDFfa48z7mzH7o" />

<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/jquery-1.4.3.min.js"></script> 


	<!-- <link rel="shortcut icon" href="<?php echo URL_BASE;?>public/images/favicon.png" />
        <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE;?>public/css/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE;?>public/css/media_style.css" /> -->
     
	    <title><?php  echo $page_title;?></title>

<?php /* Google Analytics Code */ ?>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43899653-3', 'taximobility.com');
  ga('send', 'pageview');

</script>

</head>
<body>

  <?php //echo new View(USERVIEW."header"); ?>

	<?php  echo $content;?>    		       
   <?php  //echo new View(USERVIEW."footer"); ?>   
<!-- <script src="<?php echo URL_BASE;?>public/js/jquery.flexslider.js" type="text/javascript"></script>
<script type="text/javascript">
           
           /* $(window).load(function(){
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider){
                        $('body').removeClass('loading');
                    }
                });
            });*/
            
jQuery(document).ready(function () 
{
    if(jQuery('#messagedisplay').length)
    {
	    jQuery('#messagedisplay').animate({opacity: 1.0}, 5000);
	    jQuery('#messagedisplay').fadeOut('slow');
    }
    //error message
    if(jQuery('#error_messagedisplay'))
    {
	    jQuery('#error_messagedisplay').animate({opacity: 1.0}, 5000);
	    jQuery('#error_messagedisplay').fadeOut('slow');
    }
});


</script>  -->

</body>
</html>

<style>
#messagedisplay {  
   
    position:relative;
    width:100%;  
    text-align:center;
 }
</style>
