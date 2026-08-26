<?php defined('SYSPATH') OR die("No direct access allowed."); ?>

<link rel="stylesheet" href="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/css/ui-lightness/jquery-ui-1.8.11.custom.css" />
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/js/jquery-1.5.1.min.js"></script>
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/js/jquery-ui-1.8.11.custom.min.js"></script>
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-timepicker-addon.js"></script>
<script src="<?php echo URL_BASE;?>public/js/transaction.js"></script>

<?php
$startdate = isset($srch["startdate"]) ? $srch["startdate"] :date('Y-m-d 00:00:00'); 	
$enddate = isset($srch["enddate"]) ? $srch["enddate"] :date('Y-m-d H:i:s'); 	
$sort = isset($_GET["order"]) ? $_GET["order"] :"";
$shift_history = [];
?>


<form method="get" class="form" name="driverlogs" id="driverlogs" action="/manage/drivershifthistory/<?php echo $driver_id; ?>">
	<table class="list_table1" border="0" width="65%" cellpadding="5" cellspacing="0">
		<tr>
		<td valign="middle"><label><?php echo __('Sort'); ?></label></td>
		<td valign="top">
		<div class="new_input_field_transaction">
		<select name="order">
			<option value="desc" <?php echo ($sort == 'desc') ?  'selected="selected"' : ""; ?>>Desc</option>
			<option value="asc" <?php echo ($sort == 'asc') ? 'selected="selected"' : ""; ?>>Asc</option>			
		</select>
		<span id="startdate_error" class="error"></span>		 
		</div>

		</td>       
		    
		</tr>
		<tr>
			<td valign="top"><label>&nbsp;</label></td>
			<td>                            
				<div class="button brownB">
				<input type="submit" value="<?php echo __('button_search'); ?>" name="search_user" title="<?php echo __('button_search'); ?>" />
				</div>
				<div class="button blueB">
				<input type="button" value="<?php echo __('button_cancel'); ?>" title="<?php echo __('button_cancel'); ?>" onclick="location.href = '<?php echo URL_BASE; ?>/manage/drivershifthistory/<?php echo $driver_id; ?>'?order=asc" />
				</div>
			</td>
		</tr>
	</table>
</form>
                


<!-- Service Time  Journey -->
<div class="widget margin-bottom" >
	<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" />
	<h6><?php echo __('shift_history'); ?></h6>
		<div style="width:auto; float:right; margin: 4px 3px;">		
		<div class="button greyish"></div>
		</div>
	</div>
	<div>
		
			<?php $tdvalue = []; if(count($driver_shift_logs)>0) { ?>
			<?php 
			$temp=""; $i = 0; $j = 1;
			foreach($driver_shift_logs as $key => $values) { ?>
				<?php 
					$shift_start_date = date('Y-m-d', $values['shift_start']->sec);
					$shift_start_time = date('h:i:s A', $values['shift_start']->sec);
					$shift_end_date = $shift_end_time = "--";
					$shift_end_date = ($values['shift_end']!= "") ? date('Y-m-d', $values['shift_end']->sec) : "--";
					$shift_end_time = ($values['shift_end']!= "") ? date('H:i:s', $values['shift_end']->sec) : "--";
					if($shift_start_date != $temp)  {         
						$temp = $shift_start_date;
						$j = 1;
						$shift_history[$temp] = $j;												
					} else {
						$shift_history[$temp] = $j+1;
						//$j = $j+1;
						$j++;
					}										
				?>
			<?php } //print "<pre>"; print_r($shift_history); ?>		
			<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">
						
						<thead>
						<tr>
							<td>#</td>
<!--
							<td><?php //echo __('Date'); ?></td>
-->
							<td><?php echo __('taxi_no'); ?></td>
							<!--<td><b><?php //echo __('status');?></b></td><td><b><?php //echo __('time');?></b></td>-->
							<td><b><?php echo __('shift_startdate');?></b></td>
							<td><b><?php echo __('shift_endtime');?></b></td>
							<td><b><?php echo __('shift_time');?></b></td>
<!--
							<td><b><?php //echo __('Total Hours');?></b></td>
-->
							<!--
							<td><b><?php //echo __('start_km');?></b></td>
							<td><b><?php //echo __('end_km');?></b></td>
							<td><b><?php //echo __('run_km');?></b></td>							
							-->
						</tr>
						</thead>					
						
						<?php 
						$i=1;
						($i%2 == 1)?$class="eventr":$class="oddtr"; $tempT= $tempD =""; 
							$day = $hour = $minute = $second = $totalday = $totalhour = $totalminute = $totalsecond = $total_hr_min_sec = 0;
							foreach($driver_shift_logs as $values)
							{	
								$shift_start_date = date('Y-m-d', $values['shift_start']->sec);
						?>
								<tr class="<?php echo $class; ?>">	
								<td><?php echo $i;?></td>
								<?php //if($shift_start_date != $tempT){
									 //$tempT = $shift_start_date;
								?>
<!--
									<td rowspan="<?php //echo $shift_history[$shift_start_date]; ?>"><?php echo $i;?></td>
									<td rowspan="<?php //echo $shift_history[$shift_start_date]; ?>"><?php echo $shift_start_date;?></td>
-->
								<?php //$i++; 
								//} 
								?>
								<td>
									<a href="<?php echo URL_BASE.'manage/taxiinfo/'.$values['taxi_id'];?>">
								<?php echo ucfirst($values['taxi_no']); ?></a>
								</td>
								<!--
								<td><?php //echo isset($values['shift_status']) ? $values['shift_status'] : '-'; ?></td>
								<td>
									<?php 
										//if($values['shift_status'] == "Login / Shift IN" || $values['shift_status'] == "Shift IN" ) {
											//echo date('h:i:s A', $values['shift_start']->sec);
										//} else {
											//echo ($values['shift_end']!= "") ? date('h:i:s A', $values['shift_end']->sec) : '--';
										//}
									 ?>
								</td>
								-->			
								<td><?php echo date('Y-m-d h:i:s A', $values['shift_start']->sec);?></td>
								<td><?php  echo ($values['shift_end']!= "") ? date('Y-m-d h:i:s A', $values['shift_end']->sec) : '--';?></td>
								<td>
								<?php 
								$to_time=strtotime(date('Y-m-d H:i:s', $values['shift_start']->sec));
								$from_time= ($values['shift_end'] != "") ? strtotime(date('Y-m-d H:i:s', $values['shift_end']->sec)) : 0;
									if($from_time > $to_time)
									{
										$seconds = $from_time - $to_time;
										$day     = floor($seconds / 86400);
										echo $days    = floor($seconds / 86400). " Day ";
										$hour    = floor(($seconds - ($days * 86400)) / 3600);
										echo $hours   = floor(($seconds - ($days * 86400)) / 3600)." Hr ";
										$minute  = floor(($seconds - ($days * 86400) - ($hours * 3600))/60);
										echo $minutes = floor(($seconds - ($days * 86400) - ($hours * 3600))/60)." Min ";
										$second  = floor(($seconds - ($days * 86400) - ($hours * 3600) - ($minutes*60)));		
										echo $tdseconds = floor(($seconds - ($days * 86400) - ($hours * 3600) - ($minutes*60)))." Sec ";		
									}else {
										 echo __('shift_in');  $day = $hour = $minute = $second =  0;
									}	
								 ?>	
								</td>
								
								<?php /* if($shift_start_date != $tempD)  { $tempD = $shift_start_date; $k = $shift_history[$shift_start_date];?>
									<?php $totalday = $day; $totalhour = $hour; $totalminute = $minute; $totalsecond = $second; ?>
									<?php	$totalhours = $totalday. " Day ".$totalhour. " Hr ".$totalminute. " Min ".$totalsecond. " Sec "; ?>
									<td id="tddata-<?php echo $shift_start_date; ?>" rowspan="<?php echo $shift_history[$shift_start_date]; ?>">				
									</td>
									<?php if($shift_history[$shift_start_date] == 1) { ?>
										<?php $tdvalue[$shift_start_date] = $totalhours; ?>
									<?php } ?>
								<?php } else { ?>
									<?php $totalday += $day; $totalhour += $hour; $totalminute += $minute; $totalsecond += $second; ?>
										<?php $totalhours = $totalday. " Day ".$totalhour. " Hr ".$totalminute. " Min ".$totalsecond. " Sec "; ?>				
									<?php if($k == 1) { ?>
										<?php $tdvalue[$shift_start_date] = $totalhours; ?>	
									<?php } ?>
								<?php } */?>								
								<!--
								<td><?php //echo $values['start_km']; ?></td>
								<td><?php //echo ($values['end_km'] != 0) ? $values['end_km'] : '--'; ?></td>
								<td><?php //echo ($values['end_km'] != 0) ? $values['end_km'] - $values['start_km'] : '--'; ?></td>
								-->
								</tr>								
								<?php //$k--; ?><?php $i++; } ?>								
						</table>
			<?php }else {
					echo "<div class='no_data'>".__('no_data')."</div>"; 					
				}?>							
		</div>
</div>
<!-- Service Time Journey -->

<div class="clr">&nbsp;</div>
<div class="pagination">
		<?php if(count($driver_shift_logs)>0): ?>
		 <p><?php echo $pag_data->render(); ?></p>  
		<?php endif; ?> 
  </div>
  <div class="clr">&nbsp;</div>
<script type="text/javascript">
	$(document).ready(function() {
		<?php foreach($tdvalue as $key => $value) { ?>
			var tddata = "#tddata-<?php echo $key; ?>";			
			$("#tddata-<?php echo $key; ?>").append('<?php echo $value; ?>');	
		<?php } ?>
	});
</script>
