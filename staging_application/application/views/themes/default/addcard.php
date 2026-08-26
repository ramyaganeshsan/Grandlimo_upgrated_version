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
					<a href="<?php echo URL_BASE; ?>"><?php echo __('Home'); ?></a> <span class="divider">/</span>
				</li>
				
				<li>
					<a href="#" title="<?php echo __('add_card_details'); ?>"><?php echo __('add_card_details'); ?></a>
				</li>
			</ul>
		</div>
	<div class="profile_total1">		
		<div class="profile_rgt">	
		
		<form class="form-horizontal" id="add_card_details" name="add_card_details" method="post" action="<?php echo URL_BASE; ?>passengers/addcard" enctype="multipart/form-data" > 
		  <fieldset>
			<legend><?php echo __('add_card_details'); ?></legend>
						
			<div class="control-group">
			  <label class="control-label" for="name"><?php echo __('card_type'); ?> * </label>
			  <div class="controls">
				 <select name="card_type" id="card_type">
				  <option value="P"><?php echo __('personal'); ?></option>
				  <option value="B"><?php echo __('business'); ?></option>
				  </select>
			  </div>
			</div>

			<div class="control-group">
			  <label class="control-label" for="name"><?php echo __('credit_card_no'); ?> * </label>
			  <div class="controls">				
				<input type="text" name="org_creditcard_no" id="org_creditcard_no" maxlength="16" />
				<br><span style="color:red;" class="signup_error" id="creditcard_no_error"><?php if($creditcard_valid !="") { echo $creditcard_valid;} ?><?php echo array_key_exists("org_creditcard_no",$errors)?$errors["org_creditcard_no"]:"";?>
			  </div>
			</div>

			<div class="control-group">
			  <label class="control-label" for="name"><?php echo __('credit_card_cvv'); ?> * </label>
			  <div class="controls">
				<input type="text" name="org_creditcard_cvv" id="org_creditcard_cvv" maxlength="4" />
				

				<br><span style="color:red;" class="signup_error" id="creditcard_cvv_error"><?php echo array_key_exists("org_creditcard_cvv",$errors)?$errors["org_creditcard_cvv"]:"";?>
			  </div>
			</div>


			<div class="control-group">
			  <label class="control-label" for="name"><?php echo __('credit_card_expirydate'); ?> * </label>
			  <div class="controls">
				<?php  $now = date('Y'); ?>
			<?php 
				$expdatemonth =  (isset($user[0]['expdatemonth']) && !array_key_exists('expdatemonth',$data) )? trim($user[0]['expdatemonth']):(isset($data['expdatemonth']))?$data['expdatemonth']:'';
			?>
			<select style="width:100px;"  name="expdatemonth" id="customer_expDateMonth" class="credit_card fl">
					<option value=""><?php echo __('month'); ?></option>	
        			<?php for($i=1;$i<=12;$i++) { ?>
					<option value="<?php echo strlen($i) < 2 ? '0'.$i : $i; ?>" <?php if($i == $expdatemonth) { echo 'selected=selected'; } ?> ><?php echo strlen($i) < 2 ? '0'.$i : $i; ?></option>


				<?php } ?>
			</select>
			<?php 
				 $expdateyear =  isset($user[0]['expdateyear']) &&!array_key_exists('expdateyear',$data)? trim($user[0]['expdateyear']):(isset($data['expdatemonth']))?$data['expdatemonth']:'';
			?>
			<select style="width:100px;margin-left:15px;" name="expdateyear" id="customer_expDateYear" class="credit_card fl ml10">
					<option value=""><?php echo __('year'); ?></option>	
				<?php $now = date('Y'); for($i=$now;$i<=$now+10;$i++) { ?>
					<option value="<?php echo $i; ?>" <?php if($i == $expdateyear) { echo 'selected=selected'; } ?> ><?php echo $i; ?> </option>
				<?php } ?>	
			</select>


				<br><span style="color:red;" class="signup_error" id="expirydate_error"><?php if($date_invalid !="") { echo $date_invalid;} ?><?php echo array_key_exists("expdatemonth",$errors)?$errors["expdatemonth"]:"";?>
				<span style="color:red;" class="signup_error" id="expiryyear_error"><?php echo array_key_exists("expdateyear",$errors)?$errors["expdateyear"]:"";?>
			  </div>
			</div>


		
			
			<div class="control-group">
			  <label class="control-label" for="fileInput"></label>
			  <div class="controls">
				 <input type="submit" class="btn btn-inverse" name="submit_card_details" id="submit_card_details" value="<?php echo __('button_save'); ?>" title="<?php echo __('button_save'); ?>" />
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
