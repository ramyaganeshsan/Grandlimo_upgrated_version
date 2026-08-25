<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<!-- Top fixed navigation -->
<div class="topNav">
    <div class="wrapper">
        <div class="userNav">
            <ul>
                <?php /*<li><a href="<?php echo URL_BASE; ?>" title=""><img src="<?php echo IMGPATH; ?>icons/topnav/mainWebsite.png" alt="" /><span>Main website</span></a></li>
                <li><a href="<?php echo URL_BASE; ?>contact-us.html" target="_blank" title=""><img src="<?php echo IMGPATH; ?>icons/topnav/profile.png" alt="" /><span>Contact admin</span></a></li> */ ?>
                <li><a href="http://www.ndottech.com" target="_blank" title=""><img src="<?php echo IMGPATH; ?>icons/topnav/messages.png" alt="" /><span>Support</span></a></li>
                <li id="login_top_lang_select"></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>

  <?php  if(($action != 'login' && $action != 'forgot_password') ) { ?>
<div class="head_in">
    <div class="header">  

        <div class="fr head_rgt">
            <div class="fr clr">
<?php if ($action != 'login'): ?>
                    <p class="fl"> <?php echo __("welcome_label"); ?></p><p class="fl"> <?php echo $_SESSION['name'] . ' | '; ?>  </p>
                    <p class="fl"><a href = "<?php echo URL_BASE; ?>admin/edifprofile/<?php echo $adminid; ?>" class='fl'><?php echo __("menu_myinfo") . ' | '; ?></a></p>
                    <p class="fl"><a href = "<?php echo URL_BASE; ?>admin/changepassword" class='fl'><?php echo __("menu_change_password") . ' | '; ?></a></p>
                    <p class="fl"><a href ="<?php echo URL_BASE; ?>admin/logout" class='fl' title="<?php echo __('logout_label') ?>"> <?php echo __('logout_label') ?></a></p>
<?php endif; ?>		
            </div>
            <div style="float:right;clear:both;" class="mt10">

            </div>


        </div>			
    </div>
 <?php } ?>   
</div>

