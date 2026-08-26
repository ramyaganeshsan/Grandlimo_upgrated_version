<?php 
	defined('SYSPATH') OR die('No direct access allowed.'); 
	foreach($dashstyles as $file => $type)
	{ 
	   echo HTML::style($file, ['media' => $type]); 
	}    
	foreach($dashscripts as $file => $type)
	{ 
	   echo HTML::script($type); 
	}   
 ?>
	<!-- Navigation Start -->
	<div class="span2 main-menu-span">
		<div class="well nav-collapse sidebar-nav">
			  <?php echo new View(USERVIEW."/passenger_sidebar"); ?>
		</div><!--/.well -->
	</div><!--/span-->
	<!-- Navigation End -->
			
<div id="content" class="span10">
	 <?php
//For Notice Messages
								//===================
								$sucessful_message=Message::display();
//echo $sucessful_message;		
//$Message->message;
		    if($sucessful_message) { ?>

				<div id="messagedisplay">
					<div class="alert alert-success">
                        <div class="success_float_tt">
							<button type="button" class="close" data-dismiss="alert">×</button>
		                    <label style="float: left; margin: 4px 0 0 6px;"><?php echo $sucessful_message; ?></label>
                        </div>
                    </div>
			    </div>
								<?php } ?>    
	<div class="bread_crumb_holder">
			<ul class="breadcrumb">
				<li>
					<a href="<?php echo URL_BASE; ?>"><?php echo __('home'); ?></a> <span class="divider">/</span>
				</li>
				
				<li>
					<a href="#" title="<?php echo __('edit_profile'); ?>"><?php echo __('edit_profile'); ?></a>
				</li>
			</ul>
		</div>
	<div class="profile_total1">		
		<div class="profile_rgt">	
		
		<form class="form-horizontal" id="edit_profile" name="edit_profile" method="post" action="<?php echo URL_BASE; ?>passengers/editprofile" enctype="multipart/form-data" > 
		  <fieldset>
			<legend><?php echo __('user_editprofile_title'); ?></legend>
			<input type="hidden"  readonly name="phone" id="phone" value="<?php echo isset($user['phone']) &&!array_key_exists('phone',$data)? trim($user['phone']):$data['phone'];  ?> " />			
			<div class="control-group">
			  <label class="control-label" for="name"><?php echo __('name_label'); ?> * </label>
			  <div class="controls">
				<input type="text" name="name" id="name" value="<?php echo isset($user['name']) &&!array_key_exists('name',$data)? trim($user['name']):$data['name'];  ?>" />
				<br><span style="color:red;" class="signup_error" id="name_error"><?php echo array_key_exists("name",$errors)?$errors["name"]:"";?>
			  </div>
			</div>
			
			<div class="control-group">
			  <label class="control-label" for="phone"><?php echo __('phone'); ?> * </label>
			  <div class="controls">
				<label style='margin-top:5px;padding-top:0px;'><?php echo isset($user['phone']) &&!array_key_exists('phone',$data)? trim($user['phone']):$data['phone'];  ?></label>
			  </div>
			</div>
			
			<?php /*?><div class="control-group">
			  <label class="control-label" for="civilid"><?php echo __('civilid'); ?> * </label>
			  <div class="controls">
				<input type="text" name="civilid" id="civilid" value="<?php echo isset($user['civilid']) &&!array_key_exists('civilid',$data)? trim($user['civilid']):$data['civilid'];  ?>" />
				<br><span style="color:red;" class="signup_error" id="address_error"><?php echo array_key_exists("civilid",$errors)?$errors["civilid"]:"";?></span>
			  </div>
			</div>
			
			<div class="control-group">
			  <label class="control-label" for="address"><?php echo __('address_label'); ?> * </label>
			  <div class="controls">
				<textarea name="address" id="address" /><?php echo ((!array_key_exists('address',$data)))? trim($user['address']):$data['address'];  ?></textarea>				
			  <br><span style="color:red;" class="signup_error" id="address_error"><?php echo array_key_exists("address",$errors)?$errors["address"]:"";?></span>
			  </div>
			</div> <?php */ ?>
			<?php /*
			<div class="control-group">
			  <label class="control-label" for="name"><?php echo __('credit_card_no'); ?> * </label>
			  <div class="controls">
				  <?php
				  $creditcard_no = encrypt_decrypt('decrypt',$user['creditcard_no']);
				  $ccNumber = repeatx($creditcard_no,'X',4); 
				  ?>
				<input type="text" name="org_creditcard_no" id="org_creditcard_no" value="<?php echo $ccNumber;?>" maxlength="16" />
				<input type="hidden" name="creditcard_no" id="creditcard_no" value="<?php echo $creditcard_no;?>" maxlength="16" />
				<br><span style="color:red;" class="signup_error" id="creditcard_no_error"><?php if($creditcard_valid !="") { echo $creditcard_valid;} ?><?php echo array_key_exists("creditcard_no",$errors)?$errors["creditcard_no"]:"";?>
			  </div>
			</div>

			<div class="control-group">
			  <label class="control-label" for="name"><?php echo __('credit_card_cvv'); ?> * </label>
			  <div class="controls">
				   <?php
				  $creditcard_cvv = $user['creditcard_cvv'];
				  $cvvNumber = str_repeat("x", (strlen($creditcard_cvv))); 		
				  ?>
				<input type="text" name="org_creditcard_cvv" id="org_creditcard_cvv" value="<?php echo $cvvNumber;?>" maxlength="4" />
				<input type="hidden" name="creditcard_cvv" id="creditcard_cvv" value="<?php echo $creditcard_cvv;?>" />
				

				<br><span style="color:red;" class="signup_error" id="creditcard_cvv_error"><?php echo array_key_exists("creditcard_cvv",$errors)?$errors["creditcard_cvv"]:"";?>
			  </div>
			</div>


			<div class="control-group">
			  <label class="control-label" for="name"><?php echo __('credit_card_expirydate'); ?> * </label>
			  <div class="controls">
				<?php  $now = date('Y'); ?>
			<?php 
				$expdatemonth =  isset($user['expdatemonth']) &&!array_key_exists('expdatemonth',$data)? trim($user['expdatemonth']):$data['expdatemonth'];
			?>
			<select style="width:100px;"  name="expdatemonth" id="customer_expDateMonth" class="credit_card fl">
					<option value=""><?php echo __('month'); ?></option>	
        			<?php for($i=1;$i<=12;$i++) { ?>
					<option value="<?php echo strlen($i) < 2 ? '0'.$i : $i; ?>" <?php if($i == $expdatemonth) { echo 'selected=selected'; } ?> ><?php echo strlen($i) < 2 ? '0'.$i : $i; ?></option>


				<?php } ?>
			</select>
			<?php 
				 $expdateyear =  isset($user['expdateyear']) &&!array_key_exists('expdateyear',$data)? trim($user['expdateyear']):$data['expdateyear'];
			?>
			<select style="width:100px;margin-left:15px;" name="expdateyear" id="customer_expDateYear" class="credit_card fl ml10">
					<option value=""><?php echo __('year'); ?></option>	
				<?php $now = date('Y'); for($i=$now;$i<=$now+20;$i++) { ?>
					<option value="<?php echo $i; ?>" <?php if($i == $expdateyear) { echo 'selected=selected'; } ?> ><?php echo $i; ?> </option>
				<?php } ?>	
			</select>
			

				<br><span style="color:red;" class="signup_error" id="expirydate_error"><?php if($date_invalid !="") { echo $date_invalid;} ?><?php echo array_key_exists("expdatemonth",$errors)?$errors["expdatemonth"]:"";?>
				<span style="color:red;" class="signup_error" id="expiryyear_error"><?php echo array_key_exists("expdateyear",$errors)?$errors["expdateyear"]:"";?>
			  </div>
			</div>
			*/?>

			<div class="control-group">
			  <label class="control-label" for="fileInput"><?php echo __('profile_picture');?></label>
			  <div class="controls">
				<input type="file" name="profile_picture" id="profile_picture" title="<?php echo __('upload_image_only'); ?>" onchange="return Checkfiles('profile_picture');" value="<?php echo $user['profile_image'];?>"/>
				<br><span style="color:red;" class="signup_error" id="profile_picture_error"><?php echo array_key_exists("profile_image",$errors)?$errors["profile_image"]:"";?></span>
				<div class="site_logo">
					<?php if(!empty($user['profile_image'])){ 
						if(file_exists(DOCROOT.PASS_IMG_IMGPATH.$user['profile_image']))
						{							
						?>
						<img src="<?php echo URL_BASE.PASS_IMG_IMGPATH.'thumb_'.$user['profile_image'];?>" class="img-polaroid">
					<?php }else{ ?>
						<img src="<?php echo URL_BASE;?>public/images/noimages.jpg" class="img-polaroid">
					<?php } } else { ?>
					<img src="<?php echo URL_BASE;?>public/images/noimages.jpg" class="img-polaroid">
					<?php } ?>
				</div>
			  </div>
			</div>   
			
			<?php /** CIVIL IDS ** / ?>
			<div class="control-group">
			  <label class="control-label" for="fileInput"><?php echo __('civilid_front');?></label>
			  <div class="controls">
				<input type="file" name="civilid_front" id="civilid_front" title="<?php echo __('upload_image_only'); ?>" onchange="return Checkfiles('civilid_front');" value="<?php echo $user['civilid_front'];?>"/>
				<br><span style="color:red;" class="signup_error" id="civilid_front_error"><?php echo array_key_exists("civilid_front",$errors)?$errors["civilid_front"]:"";?></span>
				<div class="site_logo">
					<?php if(!empty($user['civilid_front'])){ 
						if(file_exists(DOCROOT.PASS_CIVIL_IMGPATH.$user['civilid_front']))
						{							
						?>
						<img src="<?php echo URL_BASE.PASS_CIVIL_IMGPATH.$user['civilid_front'];?>" class="img-polaroid">
					<?php }else{ ?>
						<img src="<?php echo URL_BASE;?>public/images/civil_front.jpg" class="img-polaroid">
					<?php } } else { ?>
					<img src="<?php echo URL_BASE;?>public/images/civil_front.jpg" class="img-polaroid">
					<?php } ?>
				</div>
			  </div>
			</div>   
			<div class="control-group">
			  <label class="control-label" for="fileInput"><?php echo __('civilid_back');?></label>
			  <div class="controls">
				<input type="file" name="civilid_back" id="civilid_back" title="<?php echo __('upload_image_only'); ?>" onchange="return Checkfiles('civilid_back');" value="<?php echo $user['civilid_back'];?>"/>
				<br><span style="color:red;" class="signup_error" id="civilid_back_error"><?php echo array_key_exists("civilid_back",$errors)?$errors["civilid_back"]:"";?></span>
				<div class="site_logo">
					<?php if(!empty($user['civilid_back'])){ 
						if(file_exists(DOCROOT.PASS_CIVIL_IMGPATH.$user['civilid_back']))
						{							
						?>
						<img src="<?php echo URL_BASE.PASS_CIVIL_IMGPATH.$user['civilid_back'];?>" class="img-polaroid">
					<?php }else{ ?>
						<img src="<?php echo URL_BASE;?>public/images/civil_bck.jpg" class="img-polaroid">
					<?php } } else { ?>
					<img src="<?php echo URL_BASE;?>public/images/civil_bck.jpg" class="img-polaroid">
					<?php } ?>
				</div>
			  </div>
			</div>   
			
			
			
			
			
			<?php /** CIVIL IDS **/ ?>
			
			
			
			
			
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
</div>
<script type="text/javascript">
$(document).ready(function(){

var field_val = $("#name").val();
$("#name").focus().val("").val(field_val);
});

function Checkfiles(val)
{	
var fup = document.getElementById(val);
var fileName = fup.value;
var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" || ext == "png" || ext == "PNG")
{
return true;
} 
else
{
alert("Upload Gif,Jpg,Png images only");
fup.focus();
return false;
}
}


$('#org_creditcard_no').focus(function(){
    document.getElementById("org_creditcard_no").value="";
    document.getElementById("creditcard_no").value="";
});

$('#org_creditcard_cvv').focus(function(){
    document.getElementById("org_creditcard_cvv").value="";
    document.getElementById("creditcard_cvv").value="";
});

$('#org_creditcard_no').blur(function(){
    var org_creditcard_no =  $('#org_creditcard_no').val();
    document.getElementById("creditcard_no").value = org_creditcard_no;
});

$('#org_creditcard_cvv').blur(function(){
    var org_creditcard_cvv =  $('#org_creditcard_cvv').val();
    document.getElementById("creditcard_cvv").value = org_creditcard_cvv;

});
</script>
