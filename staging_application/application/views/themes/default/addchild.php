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
					<a href="#" title="<?php echo __('add_child_details'); ?>"><?php echo __('add_child_details'); ?></a>
				</li>
			</ul>
		</div>
	<div class="profile_total1">		
		<div class="profile_rgt">	
		
		<form class="form-horizontal" id="add_card_details" name="add_child_details" method="post" action="<?php echo URL_BASE; ?>passengers/addchild" enctype="multipart/form-data" > 
		  <fieldset>
			<legend><?php echo __('add_child_details'); ?></legend>
						
			<div class="control-group">
			  <label class="control-label" for="name"><?php echo __('account_type'); ?> * </label>
			  <div class="controls">
				 <select name="account_type" id="account_type">
					<option value=""><?php echo __('please_select_account_type'); ?></option>
					<?php foreach($account_types as $acc) { ?>
					<option value="<?php echo $acc['_id']; ?>" <?php if(isset($data['account_type']) && $data['account_type'] == $acc['_id']) { echo 'selected="selected"'; } ?>><?php echo $acc['account_type']; ?></option>
					<?php } ?>
					<?php  ?>
					</select>
				 <br><span style="color:red;" class="signup_error" id="creditcard_cvv_error"><?php echo array_key_exists("account_type",$errors)?$errors["account_type"]:"";?>
			  </div>
			</div>

			<div class="control-group">
			  <label class="control-label" for="name"><?php echo __('name'); ?> * </label>
			  <div class="controls">				
				<input type="text" name="name" id="name" maxlength="30" value="<?php if(isset($data['name'])) { echo $data['name']; } ?>" />
				<br><span style="color:red;" class="signup_error" id="creditcard_cvv_error"><?php echo array_key_exists("name",$errors)?$errors["name"]:"";?>
			  </div>
			</div>

			<div class="control-group">
			  <label class="control-label" for="name"><?php echo __('phone'); ?> * </label>
			  <div class="controls">
				<input type="text" name="phone" id="phone" maxlength="20" value="<?php if(isset($data['phone'])) { echo $data['phone']; } ?>"/>
				<br><span style="color:red;" class="signup_error" id="creditcard_cvv_error"><?php echo array_key_exists("phone",$errors)?$errors["phone"]:"";?>
			  </div>
			</div>


			<div class="control-group">
			  <label class="control-label" for="name"><?php echo __('email'); ?> * </label>
			  <div class="controls">
				<input type="text" name="email" id="email" maxlength="50" value="<?php if(isset($data['email'])) { echo $data['email']; } ?>" />
				<br><span style="color:red;" class="signup_error" id="creditcard_cvv_error"><?php echo array_key_exists("email",$errors)?$errors["email"]:"";?>
			  </div>
			</div>
			
			<div class="control-group">
			  <label class="control-label" for="name"><?php echo __('allow_creditcard'); ?>  </label>
			  <div class="controls">
				<input type="radio" name="allow_creditcard" id="allow_creditcard" value="1" <?php if(isset($data['allow_creditcard']) && $data['allow_creditcard'] == 1) { echo 'checked="checked"'; } ?>/><?php echo __('Yes'); ?>
				<input type="radio" name="allow_creditcard" id="allow_creditcard" value="0" <?php if(isset($data['allow_creditcard']) && $data['allow_creditcard'] == 0) { echo 'checked="checked"'; } ?>/><?php echo __('No'); ?>
				</div>
			</div>
			
			<div class="control-group">
			  <label class="control-label" for="name"><?php echo __('trip_alert'); ?>  </label>
			  <div class="controls">
				<input type="radio" name="trip_alert" id="trip_alert" value="1" <?php if(isset($data['trip_alert']) && $data['trip_alert'] == 1) { echo 'checked="checked"'; } ?>/><?php echo __('Yes'); ?>
				<input type="radio" name="trip_alert" id="trip_alert" value="0" <?php if(isset($data['trip_alert']) && $data['trip_alert'] == 0) { echo 'checked="checked"'; } ?>/><?php echo __('No'); ?>				
			  </div>
			</div>


		
			
			<div class="control-group">
			  <label class="control-label" for="fileInput"></label>
			  <div class="controls">
				 <input type="hidden" name="parent_id" value="<?php echo $usrid; ?>" />
				 <input type="submit" class="btn btn-inverse" name="submit_child_details" id="submit_child_details" value="<?php echo __('button_send_request'); ?>" title="<?php echo __('button_send_request'); ?>" />
			  </div>
			</div>    
			     
			
		  </fieldset>
		</form>
		
		</div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function(){

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
