<?php defined('SYSPATH') OR die('No direct access allowed.');?>
<!--login start-->
<div class="loginWrapper">
    <div class="loginWrapper_inner">
    <div class="loginLogo">	
    <?php if(COMPANY_CID > 1)
    { ?>
		<?php 
		$company_logo = $_SERVER['DOCUMENT_ROOT'].'/'.'public/uploads/site_logo/'.SUBDOMAIN.'.png';
		if(file_exists($company_logo)){?>
    	<a href="<?php echo URL_BASE; ?>" target = "_blank"><img src="<?php echo URL_BASE; ?>public/uploads/site_logo/<?php echo SUBDOMAIN; ?>.png" border="0" title="" /></a>
    	<?php } else {  ?>
    	<a href="<?php echo URL_BASE; ?>" target = "_blank"><img src="<?php echo URL_BASE; ?>public/uploads/site_logo/logo.png" border="0" title="" /></a>
    	<?php } ?>    	
    <?php
    }else
    { ?>
     <a href="<?php echo URL_BASE; ?>" target = "_blank"><img src="<?php echo URL_BASE; ?>public/uploads/site_logo/logo.png" border="0" title="" /></a>
	<?php }
    ?>
    </div>   
    <?php if($controller == 'company') { ?>
     <div style="width:200px;margin-left:65px;" align="center">
        <div style="float:left"><a href="<?php echo URL_BASE; ?>company/login" target = "_self">Company Log In</a></div>
        <div style="float:right"><a href="<?php echo URL_BASE; ?>manager/login" target = "_self">Dispatcher Log In</a> </div>
     </div>
	<?php } ?>

	    <div class="widget" style="float: left; margin-top:27px;">
        <div class="title"><img class="titleIcon" alt="" src="<?php echo IMGPATH; ?>/icons/dark/files.png"><h6>
        <?php if($controller == 'company') { echo __('companyad_login'); } elseif($controller == 'manager') { echo __('managerad_login');   } if($controller == 'admin') { echo __('page_login_title'); }
        	?>
        </h6>
        </div>
        <?php
        //For Notice Messages
        //===================
        //echo $message->message;exit;
        $sucessful_message = Message::display();
        if ($sucessful_message) {
            ?>
            <div id="messagedisplay" class="padding_150">
                <div class="notice_message">
            <?php echo $sucessful_message; ?>
                </div>
            </div>
<?php } ?> 
<?php if (isset($error_login)) { ?><span class="login_error"><?php echo $error_login; ?></span><?php } ?>
        <form class="form" method="post" name="frmlogin" id="frmlogin">
            <fieldset>
                <div class="formRow">
                    <label for="login"><?php echo __('email_label'); ?>:</label>
                    <div class="loginInput">
						<?php if(SUBDOMAIN == 'demo'){?>
					<!--- STATIC EMAIL---->
						<input type="text" id="email" name="email" value="company@taximobility.com"  readonly maxlength="50" />
						<?php } else { ?>
						<input type="text" id="email" name="email" value="<?php if (isset($_POST['email'])) {
                           echo $_POST['email'];
                        }?>"  maxlength="50" />
                        <?php }?>
<?php if(isset($errors) && array_key_exists('email',$errors)){ echo "<span class='error'>".__('please_provide_email')."</span>";}?>
</div>
                    <div class="clear"></div>
                </div>
                <div class="formRow">
                    <label for="pass"><?php echo __('password_label'); ?></label>
                    <div class="loginInput">
						<?php if(SUBDOMAIN == 'demo'){?>
						<!--- STATIC PASSWORD---->
						<input type="password" name="password" value="company" readonly maxlength="15" />
						<?php } else { ?>
						<input type="password" name="password" maxlength="15" />
						<?php }?>
<?php if(isset($errors) && array_key_exists('password',$errors)){ echo "<span class='error'>".ucfirst($errors['password'])."</span>";}?>
</div>
                    <div class="clear"></div>
                </div>
                <div class="loginControl">
					<?php if(SUBDOMAIN != 'demo'){ ?>
                    <div class="rememberMe"><a href="<?php echo URL_BASE; ?>company/forgot_password" class="frgtpsd"><?php echo __('forgot_password'); ?></a></div>
					<?php } ?>
                    <input type="submit" class="dredB logMeIn" value="Log me in"  name="admin_login" title="<?php echo __('admin_login'); ?>" />
                    <div class="clear"></div>
                </div>
            </fieldset>
        </form>
    </div>
   </div>
 </div>   
<!--login_end-->
