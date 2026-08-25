<?php defined('SYSPATH') OR die('No direct access allowed.'); 
?>
			<!-- Navigation Start -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					  <?php echo new View(USERVIEW."/driver/driver_sidebar"); ?>
				</div><!--/.well -->
			</div><!--/span-->
			<!-- Navigation End -->
			<div id="content" class="span10">
			<!-- content starts -->			
				<div class="bread_crumb_holder">
					<ul class="breadcrumb">
						<li>
							<a href="<?php echo URL_BASE ?>"><?php echo __('home'); ?></a> <span class="divider">/</span>
						</li>
						<li>
							<a href="<?php echo URL_BASE . 'driver/dashboard'?>"><?php echo __('dashboard'); ?></a> <span class="divider">/</span>
						</li>
						<li>
							<a href="#">Change Password</a>
						</li>
					</ul>
				</div>
			<div class="profile_rgt">
			
				<form class="form-horizontal" method="POST" name="frmlogin" id="frmlogin">
							   <fieldset>
			<legend><?php echo __('change_password_label'); ?></legend>
			<div class="login_form">
				
				<div class="control-group">
				  <label class="control-label" for="name"><?php echo __('oldpassword_label'); ?> * </label>
				  <div class="controls">
					 <input type="password" name="old_password" value="<?php echo isset($validator['old_password'])?$validator['old_password']:'';?>" class="login_txt" maxlength="100" />                 					
                     <span style="color:red;" class="error1" > <?php echo isset($oldpass_error)?$oldpass_error:'';?><?php echo array_key_exists("old_password",$errors)?$errors["old_password"]:"";?></span>		
				  </div>
				</div>
				
				<div class="control-group">
				  <label class="control-label" for="name"><?php echo __('newpassword_label'); ?> * </label>
				  <div class="controls">
					   <input type="password" name="new_password" value="<?php echo isset($validator['new_password'])?$validator['new_password']:'';?>" class="login_txt" maxlength="100" />
					  <span style="color:red;" class="error1"> <?php echo array_key_exists("new_password",$errors)?$errors["new_password"]:"";?><?php echo $same_pw;?></span>			
				  </div>
				</div>
				
				<div class="control-group">
				  <label class="control-label" for="name"><?php echo __('confirm_password_label'); ?> * </label>
				  <div class="controls">
					   <input type="password" name="confirm_password" value="<?php echo isset($validator['confirm_password'])?$validator['confirm_password']:'';?>" class="login_txt" maxlength="100" />
					  <span style="color:red;" class="error1" > <?php echo array_key_exists("confirm_password",$errors)?$errors["confirm_password"]:"";?></span>	
				  </div>
				</div>
				
				<div class="control-group">
				  <label class="control-label" for="name"></label>
				  <div class="controls">
					   <input  name="submit_change_pass" type="submit" class="btn btn-inverse" title="<?php echo __('change_password_label');?>" value="<?php echo __('change_password_label');?>" />
				  </div>
				</div>
			
               
			</div>
			  </fieldset>
				</form>
			</div>
		</div>
	

 

<script language="javascript" type="text/javascript">
$(document).ready(function() {
     //for sign in menu  
     $(".setting").addClass("active");
});
</script>
