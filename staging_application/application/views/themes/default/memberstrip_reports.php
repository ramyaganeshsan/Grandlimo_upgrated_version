<!-- Report Section Starts Here -->
<?php //if($upcoming_array != 0 ) { ?>
<?php //print "<pre>"; print_r($upcoming_array); exit; ?>
<div id="" class="">		
<div class="row-fluid sortable">
			<div class="box span12">
				<div class="box-header well" data-original-title>
					<h2><i class="icon icon-blue icon-home "></i><?php echo " ".__('upcoming_trip'); ?></h2>
					<div class="box-icon">						
						<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
					</div>
				</div>
				
					<div class="box-content">
						<div class="box-content <?php if(count($upcoming_array) > 0) { ?> box-content1 <?php }?>">
	
				<?php if(count($upcoming_array) > 0) { ?>
						<table class="table table-hover table-bordered">
						<tr>
							<td>#</td>
							<td><b><?php echo __('Current_Location'); ?></b></td>
							<td><b><?php echo __('Drop_Location'); ?></b></td>
							<td><b><?php echo __('pictup_date');?></b></td>
							<td><b><?php echo __('pictup_time');?></b></td>						
							<?php /* <td><b><?php echo __('driver_name');?></b></td> */?>	
							<td><?php echo __('booking_type');?></td>
							<td><?php echo __('model_name');?></td>
							<td><?php echo __('payment_type');?></td>
							<td><?php echo __('view');?></td>
							
							<td><b><?php echo __('status_label');?></b></td>		
													
						</tr>
						<?php 
						$i=1;
						foreach($upcoming_array as $values)
						{
							$pickup_date = Commonfunction::convertphpdate('d/m/Y',$values['pickup_time']);
							$pickup_time = Commonfunction::convertphpdate('h:i:s a',$values['pickup_time']);
							$travel_status = $values['travel_status'];
							?>
							<tr>			
								<td><?php echo $i;?></td>
								<td><?php echo $values['current_location'];?></td>
								<td><?php echo (isset($values['drop_location'])=="")?'-':$values['drop_location']; ?></td>
								<td><?php echo $pickup_date;?></td>
								<td><?php echo $pickup_time;?></td>
								<td><?php echo $values['book_type'];?> </td>
								<td><?php echo $values['model_name'];?> </td>
								<td><?php echo ($values['payment_type'] == 1)?'Cash':(($values['payment_type'] == 2)?'Credit Card':'Knet');?> </td>
								<td><div class="btn btn-small btn-inverse" ><a href="<?php echo URL_BASE;?>passengers/viewtrip/<?php echo $values['_id']; ?>"><?php echo __('view'); ?></a><i class="icon-chevron-right icon-white"></i></td>
								 						
								<?php /* <td><?php echo ($values['travel_status'] != 0)?$values['drivername']:'Driver is Not Assinged';?></td>*/?>		
								<td class="cancel_journey" id="<?php echo $values['_id'];?>"><?php if($travel_status == 0 || $travel_status == 9 || $travel_status == 3){ 
									echo '<div class="btn btn-small btn-inverse" onclick=canceltrip('.$values['_id'].')>'.__('cancel_trip_by_passenger').'</div>';
									 }?> </td>
							</tr>
						<?php $i=$i+1;} ?>
						</table>
						<?php }  else { 	echo __('no_data'); }?>
			</div></div>
				
			</div>
		</div>	
		</div>	
		</div>	
		<?php //} ?>
	 
	<?php //if($ongoing_array != 0 ) { ?>	
	<div id="" class="">		
<div class="row-fluid sortable">
			<div class="box span12">
				<div class="box-header well" data-original-title>
					<h2><i class="icon icon-blue icon-home "></i><?php echo " ".__('ongoing_trip'); ?></h2>

					<div class="box-icon">						
						<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
					</div>
				</div>
				
					<div class="box-content">
<div class="box-content <?php if(count($ongoing_array) >0 ) { ?> box-content1 <?php }?>">
	
				<?php if(count($ongoing_array) >0 ) { ?>
						<table class="table table-hover table-bordered">
						<tr>
							<td>#</td>
							<td><b><?php echo __('Current_Location'); ?></b></td>
							<td><b><?php echo __('Drop_Location'); ?></b></td>
							<td><b><?php echo __('pictup_date');?></b></td>
							<td><b><?php echo __('pictup_time');?></b></td>			
							<td><?php echo __('booking_type');?></td>
							<td><?php echo __('model_name');?></td>
							<td><?php echo __('payment_type');?></td>
							<td><?php echo __('view');?></td>
							
							<?php /*<td><b><?php echo __('driver_name');?></b></td>		*/?>								
						</tr>
						<?php 
						$i=1;
						foreach($ongoing_array as $values)
						{
							$pickup_date = Commonfunction::convertphpdate('d/m/Y',$values['pickup_time']);
							$pickup_time = Commonfunction::convertphpdate('h:i:s a',$values['pickup_time']);
							?>
							<tr>			
								<td><?php echo $i;?></td>
								<td><?php echo $values['current_location'];?></td>
								<td><?php echo (isset($values['drop_location'])=="")?'-':$values['drop_location']; ?></td>
								<td><?php echo $pickup_date;?></td>
								<td><?php echo $pickup_time;?></td>
								<td><?php echo $values['book_type'];?> </td>
								<td><?php echo $values['model_name'];?> </td>
								<td><?php echo ($values['payment_type'] == 1)?'Cash':(($values['payment_type'] == 2)?'Credit Card':'Knet');?> </td>
								<td><div class="btn btn-small btn-inverse" ><a href="<?php echo URL_BASE;?>passengers/viewtrip/<?php echo $values['_id']; ?>"><?php echo __('view'); ?></a><i class="icon-chevron-right icon-white"></i></td>
								 						
								<?php /*<td><?php echo $values['drivername'];?></td>*/?>		
							</tr>
						<?php $i=$i+1;} ?>
						</table>
						<?php }  else { 	echo __('no_data'); }?>
				</div></div>
				
			</div>
		</div>	
		</div>	
		</div>	
		<?php //} ?>
		
		<?php  // if($past_array != 0 ) { ?>
	<div id="" class="">		
<div class="row-fluid sortable">
			<div class="box span12">
				<div class="box-header well" data-original-title>
					<h2><i class="icon icon-blue icon-home "></i><?php echo " ".__('past_trip'); ?></h2>

					<div class="box-icon">						
						<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
					</div>
				</div>
				
					<div class="box-content">

	
				<div class="box-content<?php if(count($past_array)> 0 ) { ?> box-content1 <?php  } ?>">
					<?php if(count($past_array)> 0 ) { ?>
						<table class="table table-hover table-bordered">
						<tr>
							<td>#</td>
							<td><b><?php echo __('Current_Location'); ?></b></td>
							<td><b><?php echo __('Drop_Location'); ?></b></td>
							<td><b><?php echo __('pictup_date');?></b></td>
							<td><b><?php echo __('pictup_time');?></b></td>			
							<td><?php echo __('booking_type');?></td>
							<td><?php echo __('model_name');?></td>
							<td><?php echo __('payment_type');?></td>
							<td><?php echo __('view');?></td>
							
							<?php /*<td><b><?php echo __('driver_name');?></b></td>	*/?>								
							<td><b><?php echo __('trip_total_fare').'('.CURRENCY.')';?></b></td>						
						</tr>
						<?php 
						$i=1;
						foreach($past_array as $values)
						{
							$pickup_date = Commonfunction::convertphpdate('d/m/Y',$values['pickup_time']);
							$pickup_time = Commonfunction::convertphpdate('h:i:s a',$values['pickup_time']);
							 $current_fare = round($values['fare'][0], 2);
							?>
							<tr>			
								<td><?php echo $i;?></td>
								<td><?php echo $values['current_location'];?></td>
								<td><?php echo (isset($values['drop_location'])=="")?'-':$values['drop_location']; ?></td>
								<td><?php echo $pickup_date;?></td>
								<td><?php echo $pickup_time;?></td>
								<td><?php echo $values['book_type'];?> </td>
								<td><?php echo $values['model_name'];?> </td>
								<td><?php echo ($values['payment_type'] == 1)?'Cash':(($values['payment_type'] == 2)?'Credit Card':'Knet');?> </td>
								<td><div class="btn btn-small btn-inverse" ><a href="<?php echo URL_BASE;?>passengers/viewtrip/<?php echo $values['_id']; ?>"><?php echo __('view'); ?></a><i class="icon-chevron-right icon-white"></i></td>
								 						
								<?php /*<td><?php echo $values['drivername'];?></td> */?>	
								<td><?php echo $current_fare;?></td>
							</tr>
						<?php $i=$i+1;} ?>
						</table>
						<?php }  else { 	echo __('no_data'); }?>
				
	</div></div>
				
			</div>
		</div>	
		</div>	
		</div>	
		<?php // } ?>

	<!-- Report Section Starts Here -->
