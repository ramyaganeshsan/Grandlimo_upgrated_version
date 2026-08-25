<?php  defined('SYSPATH') OR die("No direct access allowed."); 
$content = count($cmscontent);
$page_url = $_SERVER['REQUEST_URI'];
if($content>0){
?>

<!-- About page-->
        <div class="about_outer">
            <?php /*<div class="about_baner">
                <img src="<?php echo URL_BASE;?>public/images/about_bg.png" alt="images"/>
            </div> */?>
            <div class="about_inner">
                <div class="about_common">
                    <div class="about_left">
                        <h1><?php if(isset($cmscontent[0]['title'])){echo $cmscontent[0]['title'];}?></h1>
                    </div> 
                     <div class="about_right">
                       
                    </div> 
                        
                </div>
            </div>
        </div> 
     <!-- About page end-->
     <div class="about_bottom_outer">
           <div class="about_bottom_inner">
                 <div class="about_bottom_common">
                    <?php if(isset($cmscontent[0]['content'])){ echo $cmscontent[0]['content']; }?>
                 </div>  
           </div>  
     </div>
<?php	}
 else{ ?>
	<div class="about_outer">
           <?php /* <div class="about_baner">
                <img src="<?php echo URL_BASE;?>public/images/about_bg.png" alt="images"/>
            </div> */?>
            <div class="about_inner">
                <div class="about_common">
					
                    <div class="about_left">
						<?php if($page_url == 'termsconditions.html'){?>
                        <h2><?php echo __('default_terms_condition'); ?></h2>
                        <?php } elseif($page_url == 'privacypolicy.html') { ?>
                        <h2><?php echo __('no_data'); ?></h2>
                        <?php } else { ?>
                        <h2><?php echo __('no_data'); ?></h2>
                        <?php } ?>
                    </div>  
                        
                </div>
            </div>
        </div> 
<?php }
  ?>

