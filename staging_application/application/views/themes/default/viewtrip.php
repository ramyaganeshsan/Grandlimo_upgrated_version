<?php defined('SYSPATH') OR die('No direct access allowed.'); 
foreach($dashstyles as $file => $type)
	{ 
	   echo HTML::style($file, ['media' => $type]); 
	}    
	foreach($dashscripts as $file => $type)
	{ 
	   echo HTML::script($type); 
	}  
 
?>
<link rel="stylesheet" href="<?php echo URL_BASE;?>public/css/select2.css"/>
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
				
				   <a href="#" title="<?php echo __('view_trip'); ?>"><?php echo __('view_trip'); ?></a>
					
				</li>
			</ul>
		</div>
<div class="profile_total1">		
		<div class="profile_rgt">	
		  <fieldset>
			<legend><?php echo __('view_trip'); ?></legend>
			<?php foreach($trip_array as $trip){
					$pickup_date = Commonfunction::convertphpdate('d/m/Y',$trip['pickup_time']);
							$pickup_time = Commonfunction::convertphpdate('h:i:s a',$trip['pickup_time']);
							$airport_pickup = $trip['airport_pickup'];
				?>
				<div class="form-horizontal margtop">
			<div class="control-group">
				<label class="control-label" for="name"><?php echo __('Current_Location'); ?>&nbsp;:</label>
				<div class="controls">
					<label><?php echo $trip['current_location'];?> </label>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="name"><?php echo __('Drop_Location'); ?>&nbsp;:</label>
				<div class="controls">
					<label><?php echo (isset($trip['drop_location'])=="")?'-':$trip['drop_location'];?> </label>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="name"><?php echo __('pictup_date'); ?>&nbsp;:</label>
				<div class="controls">
					<label> <?php echo $pickup_date;?> </label>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="name"><?php echo __('pictup_time'); ?>&nbsp;:</label>
				<div class="controls">
					<label> <?php echo $pickup_time;?></label>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="name"><?php echo __('booking_type'); ?>&nbsp;:</label>
				<div class="controls">
					<label> <?php echo $trip['book_type'];?></label>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="name"><?php echo __('model_name'); ?>&nbsp;:</label>
				<div class="controls">
					<label><?php echo $trip['model_name'];?></label>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="name"><?php echo __('payment_type'); ?>&nbsp;:</label>
				<div class="controls">
					<label><?php echo ($trip['payment_type'] == 1)?'Cash':(($trip['payment_type'] == 2)?'Credit Card':'Knet');?></label>
				</div>
			</div>
			<?php if($airport_pickup == 1){?>
			<div class="control-group">
				<label class="control-label" for="name"><?php echo __('airport_flight_number'); ?>&nbsp;:</label>
				<div class="controls">
					<label> <?php echo $trip['airport_flight_number'];?></label>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="name"><?php echo __('airport_flight_time'); ?>&nbsp;:</label>
				<div class="controls">
					<label> <?php echo $trip['airport_flight_time'];?></label>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="name"><?php echo __('airport_notes'); ?>&nbsp;:</label>
				<div class="controls">
					<label> <?php echo $trip['airport_notes'];?> </label>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="name"><?php echo __('no_passengers'); ?>&nbsp;:</label>
				<div class="controls">
					<label><?php echo $trip['no_passengers'];?></label>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="name"><?php echo __('max_luggage'); ?>&nbsp;:</label>
				<div class="controls">
					<label> <?php echo $trip['max_luggage'];?></label>
				</div>
			</div>
			 <?php } ?>
             
			
			</div>
			<?php } ?>
			</div>
			</fieldset>
		</div>
	</div>
	<div id="reports"></div>
</div>