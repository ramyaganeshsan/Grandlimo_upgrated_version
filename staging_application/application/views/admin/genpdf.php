<?php defined('SYSPATH') or die('No direct script access.');
 if (count($driver_logs_completed_transaction) > 0) { ?>
<style>
	h1 {
		color: navy;
		font-family: times;
		font-size: 24pt;
	}
	p.first {
		color: #003300;
		font-family: helvetica;
		font-size: 12pt;
	}
	p.first span {
		color: #006600;
		font-style: italic;
	}
	p#second {
		color: rgb(00,63,127);
		font-family: times;
		font-size: 12pt;
		text-align: justify;
	}
	
	p#second > span {
		
	}
	table.first {
		color: #003300;
		font-family: helvetica;
		font-size: 8pt;
		background-color:#FFF; 
		border:10px solid #236B8D;
		
		
	}
	td {
		font-weight:bold;
		font:bold 12pt arial; color:#000000;
		
	}
	.invoice_head{text-align: right;color:#000000;}
	.head_border{border-bottom:1px solid #2c2c2c;}
	.totalstyle{font-weight:bold; font:bold 12pt arial; color:#ffffff; background-color:#2c2c2c; text-align:left; width:auto}
	.taxstyle{font-weight:bold; font:bold 12pt arial; color:#000000;  text-align:left;}
	</style>
<table border="0" cellpadding="1" cellspacing="1">
<tr>
   <td></td>
   <td><div class="invoice_head"><?php echo date("F j, Y"); ?><h1>INVOICE</h1></div></td>
</tr>
<tr>
    <?php if ($request_page != 'passengerinfo') { ?>
        <td align="left"><?php echo $user_details1['company_name']; ?></td>
		<td align="right"><?php echo $user_details1['name']; ?></td>
    <?php } else { ?>
        <td align="left"></td>
		<td align="right"><?php echo $passengers_details['passengerdetails'][0]['name']; ?></td>
    <?php } ?>
</tr>
<?php if ($request_page != 'passengerinfo') { ?>
<tr>
	<td align="left" height="20" valign="middle">Tax Number</td>
	<td></td>
</tr>
<?php } ?>
</table>

<table border="0" cellpadding="1" cellspacing="1" width="700">
	<thead>
		<tr>
			<td class="head_border" width=10>#</td>
			<td class="head_border" width=130><b><?php echo __('trip_id'); ?></b></td>
			<td class="head_border" width=130><b><?php echo __('passenger_name'); ?></b></td>
			<td class="head_border" width=350><b><?php echo __('pickuploc_droploc'); ?></b></td>
			<td class="head_border" width=130><b><?php echo __('pictup_date'); ?></b></td>
			<td class="head_border" width=30><b><?php echo __('distance_km'); ?></b></td>		
			<td class="head_border" width=30><b><?php echo __('fare'); ?></b></td>	
			<td class="head_border" width=10><b><?php echo __('tax'); ?></b></td>	
			<td class="head_border" width=10><b><?php echo __('trip_total_fare'); ?></b></td>								
		</tr>
	</thead>
	<?php $i = 1;
        ($i % 2 == 1) ? $class = "eventr" : $class = "oddtr";
        $rowdatas   = "";
        $tax_total  = "";
        $fare_total = "";
        foreach ($driver_logs_completed_transaction as $values) {
            $distance         = round($values['actual_distance'], 2);
            $current_fare     = round($values['fare'], 2);
            $company_tax      = $values['Taxamt'];
            //$percentvalue = ($company_tax/100)*$current_fare;
            $currtotal        = ($current_fare == 0) ? 0 : $current_fare - $company_tax;
            $travel_status    = $values['travel_status'];
            $current_location = $values['current_location'];
            $drop_location    = $values['drop_location'];
            $passenger_name   = (isset($values['name'][0]))?ucfirst($values['name'][0]):"";
            $trip_id          = $values['_id'];
            $pickup_time      = date('d/m/Y', strtotime($values['pickup_time'])) . ' ' .  __('at') . '<br>' . date('h:i:s A', strtotime($values['pickup_time']));
            if ($companyid != 0) {
                $company_currency = findcompany_currencyformat($companyid);
            } else {
                $company_currency = findcompany_currencyformat($values['company_id']);
            }
			
			if ($travel_status == 0) {
                $status    = __('critical');
                $row_solor = 'style="color:#00FF00;"';
            } elseif ($travel_status == 1) {
                $status    = __('completed');
                $row_solor = 'style="color:#00FF00;"';
            } elseif ($travel_status == 2) {
                $status    = __('inprogress');
                $row_solor = 'style="color:#0000FF;"';
            }
            if ($travel_status == 3) {
                $status    = __('start_to_pickup');
                $row_solor = 'style="color:#FFFF00;"';
            } elseif ($travel_status == 4) {
                $status    = __('cancel_by_passenger');
                $row_solor = 'style="color:#990066;"';
            } elseif ($travel_status == 5) {
                $status    = __('waiting_payment');
                $row_solor = 'style="color:#00FFFF;"';
            } elseif ($travel_status == 6) {
                $status    = __('missed');
                $row_solor = 'style="color:#FF6633;"';
            } elseif ($travel_status == 7) {
                $status    = __('dispatched');
                $row_solor = 'style="color:#003333;"';
            } elseif ($travel_status == 8) {
                $status    = __('cancelled');
                $row_solor = 'style="color:#990000;"';
            }
	?>
		<tr>	
			<td width=10><?php echo $i; ?></td>
			<td width=130><?php echo $trip_id; ?></td>
			<td width=130><?php echo $passenger_name; ?></td>
			<td width=350><?php echo $current_location . '<br>' . $drop_location; ?></td>
			<td width=130><?php echo $pickup_time; ?></td>
			<td width=30><?php echo $distance; ?></td>
			<td width=30><?php echo $currtotal; ?></td>
			<td width=10><?php echo $company_currency . ' ' . $company_tax; ?></td>
			<td width=10><?php echo $company_currency . ' ' . $current_fare; ?></td>
		</tr>
	<?php
		$fare_total += $current_fare;
        $tax_total += $company_tax;
		$i++;
		}
	?>
</table>
<table border="0" cellpadding="1" cellspacing="1" width="700"><tr>	
	<td width=10></td>
	<td width=130></td>
	<td width=350></td>
	<td width=130></td>
	<td width=30></td>
	<td width=30>Total</td>
	<td width=10 class="taxstyle" height="25"><?php echo $tax_total; ?></td>
	<td width=10 class="totalstyle" height="25"><?php echo $company_currency . ' ' . $fare_total; ?></td>															
	</tr>
</table>
<?php } else { ?>
    <div class='no_data'><?php echo __('no_data'); ?></div>
<?php } ?>