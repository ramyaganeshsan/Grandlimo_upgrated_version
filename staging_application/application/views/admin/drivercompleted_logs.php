<?php if(count($driver_logs_completed_transaction)>0) { ?>
<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">
	<thead>
		<tr>
			<td>#</td>
			<td><?php echo __('trip_id'); ?></td>
			<td><?php echo __('passenger_name'); ?></td>
			<td><b><?php echo __('pickuploc_droploc'); ?></b></td>
			<td><b><?php echo __('pictup_date');?></b></td>
			<td><b><?php echo __('distance');?></b></td>
			<td><b><?php echo str_replace('%currency%',CURRENCY,__('fare'));?></b></td>
			<td><b><?php echo __('tax');?></b></td>
			<td><b><?php echo __('trip_total_fare').'('.CURRENCY.')';?></b></td>
			<td><b><?php echo __('equivalent_to_usd').CURRENCY_FORMAT; ?></b></td>
		</tr>
		</tr>
	</thead>
	<?php 
		$i=1;
		($i%2 == 1)?$class="eventr":$class="oddtr";
		foreach($driver_logs_completed_transaction as $values)
		{
			$distance = round($values['distance'],2).' '.$values['distance_unit'];
			$current_fare = round($values['fare'],2);
			$company_tax = $values['company_tax'];
			$percentvalue = ($company_tax/100)*$current_fare;
			$currtotal = $current_fare - $percentvalue;
			$travel_status = $values['travel_status'];
		if($_SESSION['company_id'] != 0){
			$company_currency = findcompany_currency($_SESSION['company_id']);
		}else{
			$company_currency = findcompany_currency($values['company_id']);
		}
			$company_currency_format = findcompany_currencyformat($values['company_id']);
			$convet_amt = currency_conversion($company_currency_format,$current_fare);
			$convet_amt = round($convet_amt,2);
		if($travel_status == 0) { $status = __('critical'); $row_solor = 'style="color:#00FF00;"';  } elseif($travel_status == 1) { $status = __('completed'); $row_solor = 'style="color:#00FF00;"'; }  elseif($travel_status == 2) { $status = __('inprogress'); $row_solor = 'style="color:#0000FF;"'; }  if($travel_status == 3) { $status = __('start_to_pickup'); $row_solor = 'style="color:#FFFF00;"'; } elseif($travel_status == 4) { $status = __('cancel_by_passenger'); $row_solor = 'style="color:#990066;"';} elseif($travel_status== 5) { $status = __('waiting_payment'); $row_solor = 'style="color:#00FFFF;"';} elseif($travel_status == 6) { $status = __('missed'); $row_solor = 'style="color:#FF6633;"';} elseif($travel_status == 7) { $status = __('dispatched'); $row_solor = 'style="color:#003333;"'; }  elseif($travel_status == 8) { $status = __('cancelled'); $row_solor = 'style="color:#990000;"';} 		//echo $row_solor;
	?>
	<tr class="<?php echo $class; ?>">
		<td><?php echo $i;?></td>
		<td><?php echo $values['_id']; ?></td>
		<td><?php echo (isset($values['name'][0]))?ucfirst($values['name'][0]):""; ?></td>
		<td>
			<p <?php echo $row_solor;?>><?php echo $values['current_location']; ?></p>
			<p><?php echo $values['drop_location']; ?></p>
		</td>
		<td><?php echo date('d/m/Y',strtotime($values['pickup_time'])).' '.__('at').'<br>'.date('h:i:s A', strtotime($values['pickup_time']));?></td>
		<td><?php echo $distance;?></td>
		<td><?php echo $currtotal;?></td>
		<td><?php echo $company_tax;?></td>
		<td><?php echo $current_fare;?></td>
		<td><?php echo $convet_amt; ?></td>
	</tr>
	<?php $i++;
		}
	?>
</table>
<div align="left" class="button blackB"> 
	<input type="button" name="gen_pdf" id="gen_pdf" value="<?php echo __('gen_pdf');?>" title="<?php echo __('gen_pdf');?>" onclick="gen_pdf()">
</div>
<?php }else {
	echo "<div class='no_data'>".__('no_data')."</div>"; 							
	}
?>