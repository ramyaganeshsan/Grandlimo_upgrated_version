<?php defined('SYSPATH') OR die('No direct access allowed.'); 
?>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery-1.6.3.min.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery.validate.js"></script>
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
				<a href="#"><?php echo __('home'); ?></a> <span class="divider">/</span>
			</li>
			<li>
				<a href="<?php echo URL_BASE . 'driver/dashboard'?>"><?php echo __('dashboard'); ?></a> <span class="divider">/</span>
			</li>
			<li>
				<a href="#"><?php echo __('editprofile_label'); ?></a>
			</li>
		</ul>
	</div>
<div class="profile_rgt">
	<form class="form-horizontal" name="edit_profile" id="edit_profile" method="post" action="<?php echo URL_BASE; ?>driver/editprofile" enctype="multipart/form-data">
			<fieldset>
			<legend><?php echo __('user_editprofile_title'); ?></legend>
						
			<div class="control-group">
			  <label class="control-label" for="name"><?php echo __('name_label'); ?> * </label>
			  <div class="controls">
				<input type="text" name="name" id="name" value="<?php echo $user[0]['name'];?>" />
				<br><span style="color:red;" class="signup_error" id="name_error"><?php echo array_key_exists("name",$errors)?$errors["name"]:"";?>
			  </div>
			</div>
			
			<div class="control-group">
			  <label class="control-label" for="phone"><?php echo __('phone_number'); ?> * </label>
			  <div class="controls">
				<input type="text"  name="phone" id="phone" readonly value="<?php echo $user[0]['phone'];?>" />
				<br><span style="color:red;" class="signup_error" id="phone_error">
					<?php if($phone_exist!=""){ echo $phone_exist;}?><?php echo array_key_exists("phone",$errors)?$errors["phone"]:"";?></span>
			  </div>
			</div>
			
			<div class="control-group">
			  <label class="control-label" for="address"><?php echo __('address_label'); ?> * </label>
			  <div class="controls">
				<textarea name="address" id="address" /><?php echo $user[0]['address'];?></textarea>				
			  <br><span style="color:red;" class="signup_error" id="address_error"><?php echo array_key_exists("address",$errors)?$errors["address"]:"";?></span>
			  </div>
			</div>
			
			<div class="control-group">
			  <label class="control-label" for="address"><?php echo __('profile_picture'); ?></label>
			  <div class="controls">
				<input type="file" name="profile_picture" id="profile_picture" class="imageonly" --onchange="return Checkfiles();" value="<?php echo $user[0]['profile_picture'];?>"/>
<label for="profile_picture" generated="true" class="signup_error" style="display:none">Please upload image(jpg,jpeg,png) files only</label>
			  <br><span style="color:red;" class="signup_error" id="profile_picture_error"><?php echo array_key_exists("profile_picture",$errors)?$errors["profile_picture"]:"";?></span>
				<div class="site_logo">
					<?php if(!empty($user[0]['profile_picture'])){ ?>
						<img src="<?php echo URL_BASE.SITE_DRIVER_IMGPATH.$user[0]['profile_picture'];?>" class="img-polaroid">
					<?php }else{ ?>
						<img src="<?php echo URL_BASE;?>public/images/noimages.jpg" class="img-polaroid">
					<?php } ?>
				</div>
			  </div>
			</div>
			
			<div class="control-group">
			  <label class="control-label" for="fileInput"></label>
			  <div class="controls">
				 <input type="submit" class="btn btn-inverse" name="signup" id="signup" value="<?php echo __('button_save'); ?>" title="<?php echo __('button_save'); ?>" />
			  </div>
			</div>
			</fieldset>
		</form>
	</div>
</div>
<script type="text/javascript">

 $(document).ready(function(){

  	
	 jQuery("#edit_profile").validate();
	 
	$.validator.addMethod( "imageonly", function(value,element){
var pathLength = value.length; var lastDot = value.lastIndexOf( "."); var fileType = value.substring(lastDot,pathLength).toLowerCase(); return this.optional(element) || fileType.match(/(?:.jpg|.jpeg|.png)$/) }, "Please upload image(jpg,jpeg,png) files only");

});   



function Checkfiles()
{
var fup = document.getElementById('profile_picture');
var fileName = fup.value;
var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" || ext == "png" || ext == "PNG" || ext == "bmp" || ext == "BMP")
{
return true;
} 
else
{
alert("Upload Gif,Jpg,Png,Bmp images only");
fup.focus();
return false;
}
}
</script>
