<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
		<?php
			
				foreach($adminscripts as $file) { echo HTML::script($file, NULL, TRUE)."\n"; }
			 
				foreach($adminstyles as $file => $type) { 
						echo HTML::style($file, ['media' => $type])."\n";
				}
			/* */
		?>
        <title><?php echo $page_title;?></title>
		<link rel="shortcut icon" href="<?php echo URL_BASE;?>public/images/favicon.png" />
		
		
		<?php /*
			<link rel="shortcut icon" href="<?php echo ADMINIMGPATH;?>favicon.ico" type="image/x-icon" />
			*/ ?>    
</head>
<body>
<div class="container_outer fl clr">
  <?php  echo new View("admin/header"); ?>
    <div class="con_out fl clr">
       <div class="con_in"> 
           <div class="con_bdy fl">
			   
               <?php  if($action != 'login' && $action !='forgotpassword'): ?>
		       <?php  echo new View("admin/admin_menu"); ?>
		      
		           <div class="cont_rgt fl">
    		                <div class="container_rgt_head fl clr">
									<h1>    					
										<?php 
												$title = explode("|",$page_title); 
												echo isset($title[1])?$title[1]:'';
										 ?>
									</h1>
      		                </div>                                                 
							<div class="container_content fl clr"><?php endif; ?>

								  <?php 
											//For Notice Messages
											$class ="";
											if($action == 'login'){ $class="padding_150";}else{ $class="";}
											$sucessful_message=Message::display();
											
											if($sucessful_message)
											{
												?>
												<div id="messagedisplay" class="<?php echo $class;?>">
													 <div class="notice_message">
														<?php echo $sucessful_message; ?>
													 </div>
												</div>
												<?php 
											}
									?>
									
									<?php if($action != 'login' && $action != 'forgotpassword'){?> <?php }?>
									<?php echo $content;?>		
							</div>
                  </div>
              </div>               
          </div>
      </div>  
   <?php  echo new View("admin/footer"); ?>   
</div> 

    
    <script type="text/javascript">
$(document).ready(function(){
$('.menu_rgt ').click(function(){
    alert('text');
$('.menu_container ul li ul').css('display','none');
$(this).next('ul').css('display','block');
$('a.menu_rgt ').removeClass('select');
$(this).addClass('select');
});
});
</script>
       <script type="text/javascript">
		//function toggle(ids){
                    //    $(".toggleul_"+ids).slideToggle();
                    //    var imgSrc= $("#left_menubutton_"+ids).attr("src");
                   //     imgSrc = imgSrc.split("/");
                   //     var len=imgSrc.length;
                   //     var toggle_image="<?php echo ADMINIMGPATH;?>plus_but.png";
                  //        if(imgSrc[len-1] == "minus_but.png")
                     //   var toggle_image="<?php echo ADMINIMGPATH;?>minus_but.png";
                    //    $("#left_menubutton_"+ids).attr("src",toggle_image);
                //}
                
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
</script>   
</body>
</html>
