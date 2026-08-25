<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=<?php echo GOOGLE_MAP_API_KEY; ?>&sensor=true"></script>
<?php defined('SYSPATH') OR die("No direct access allowed."); 
if($_SESSION['user_type'] =='C')
{
		$company_currency = findcompany_currency($_SESSION['company_id']);
}
else
{
		$company_currency = CURRENCY;
}

        $payment_type  = (!empty($transaction_details[0]['payment_type'])) ? $transaction_details[0]['payment_type']: '';
        $advance_payment  = (!empty($transaction_details[0]['advance_payment'])) ? $transaction_details[0]['advance_payment']: 0;
        $pending_amt  = (!empty($transaction_details[0]['pending_amt'])) ? $transaction_details[0]['pending_amt']: 0;
        $wallet_amount_used  = (!empty($transaction_details[0]['wallet_amount_used'])) ? $transaction_details[0]['wallet_amount_used']: 0;
        $paid_amt  = (!empty($transaction_details[0]['actual_paid_amt'])) ? $transaction_details[0]['actual_paid_amt']: 0;
        $driver_edit_status  = (!empty($transaction_details[0]['driver_edit_status'])) ? $transaction_details[0]['driver_edit_status']: '';
        $fare_calculation_type  = (!empty($transaction_details[0]['fare_calculation_type'])) ? $transaction_details[0]['fare_calculation_type']: 2;
        $distance_fare  = (!empty($transaction_details[0]['distance_fare'])) ? $transaction_details[0]['distance_fare']: 0;
        $total_waiting_time  = (!empty($transaction_details[0]['total_waiting_time'])) ? $transaction_details[0]['total_waiting_time']: 0;
        $start_waiting_time  = (!empty($transaction_details[0]['start_waiting_time'])) ? $transaction_details[0]['start_waiting_time']: 0;
        $arrival_waiting_time  = $total_waiting_time - $start_waiting_time;

        $driver_edit_status_msg = '';
        if($driver_edit_status == 1)
        {
        	$driver_edit_status_msg = __('driver_edit_fare');
        }

        $payment_type_msg = '';

        switch($payment_type)
        {
            case 1:

            $payment_type_msg = __('cash_label');
            if($wallet_amount_used > 0)
            $payment_type_msg = __('wallet_cash_label');

            break;

            case 2:

            $payment_type_msg = __('card_label');
            if($wallet_amount_used > 0)
            $payment_type_msg = __('wallet_card_label');

            if($pending_amt > 0)
            $payment_type_msg = __('pending_cash_label');

            break;

            case 3:

            $payment_type_msg = __('knet_label');
            if($wallet_amount_used > 0)
            $payment_type_msg = __('wallet_knet_label');

            if($pending_amt > 0)
            $payment_type_msg = __('pending_knet_label');

            case 6:

            $payment_type_msg = __('wallet_label');
            if($advance_payment > 0)
            $payment_type_msg = __('advance_label');

            break;

        }

        if($pending_amt == 0)
        {
            $pending_amt = '';
        }
        ?>

<?php $split = explode('/',$_SERVER['REQUEST_URI']);
$list = $split[3]; ?>
<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle">
		   <?php if($transaction_details[0]['payment_type'] !='3') { ?>
			<table border="0" cellpadding="5" cellspacing="0" width="100%">
			<tr>
			<td class="titlebold"><?php echo ucfirst(__('transaction_details')); ?></td>
			<td></td>	          
			</tr>
			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('transactionid_label'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if(isset($transaction_details[0]['transaction_id']) && $transaction_details[0]['transaction_id'] != '') { echo $transaction_details[0]['transaction_id']; } else { echo '-'; } ?>
				   </div>
			   </td>   	
			   </tr> 	

			<?php /*   <tr>
			   <td valign="top" width="20%"><label><?php echo __('correlation_id'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if(isset($transaction_details[0]['correlation_id'])) { echo $transaction_details[0]['correlation_id']; } else { echo ''; } ?>
				   </div>
			   </td>   	
			   </tr> 	*/ ?>
						   
			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('amount'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if(isset($transaction_details[0]['tripfare'])) { echo $company_currency.$transaction_details[0]['tripfare']; } else { echo '-'; } ?>
				   </div>
			   </td>   	
			   </tr>
			   
			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('distance'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if(isset($transaction_details[0]['distance'])) { echo $transaction_details[0]['distance'].' '.UNIT_NAME; } else { echo '-'; } ?>
				   </div>
			   </td>   	
			   </tr>
			   
			   <?php /* ?>	
			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('paymentstatus_label'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if(isset($transaction_details[0]['payment_status']) && $transaction_details[0]['payment_status'] != '') { echo $transaction_details[0]['payment_status']; } else { echo '-'; } ?>
				   </div>
			   </td>   	
			   </tr> 	
				<?php */ ?>
		</table>
		
			<?php } ?>

			<table border="0" cellpadding="5" cellspacing="0" width="100%" style="margin-top:20px;">
			<tr>
			<td class="titlebold"><?php echo ucfirst(__('trip_details')); ?></td>
			<td></td>	          
			</tr>
			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('passenger_name'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php echo $transaction_details[0]['passenger_name']; ?>
				   </div>
			   </td>   	
			   </tr> 	

			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('driver_name'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php echo $transaction_details[0]['driver_name']; ?>
				   </div>
			   </td>   	
			   </tr> 	
				<?php /* ?>			   
			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('companyname'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php echo $transaction_details[0]['company_name']; ?>
				   </div>
			   </td>   	
			   </tr>
			   <?php */ ?>

			  <?php /* <tr>
			   <td valign="top" width="20%"><label><?php echo __('journey_date'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php echo $transaction_details[0]['createdate']; ?>
				   </div>
			   </td>   	
			   </tr> 	*/ ?>
			   
			   
			    <tr>
			   <td valign="top" width="20%"><label><?php echo __('pickup_time'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
					<?php
						$pickup_time=$transaction_details[0]['actual_pickup_time'];
						if($pickup_time !="0000-00-00 00:00:00"){
							$pickup_time=isset($pickup_time) ? Commonfunction::convertphpdate('Y-m-d H:i:s', $pickup_time) : '';
						}else{
							$pickup_time="---";
						}
					?>
				   <?php echo $pickup_time; ?>
				   </div>
			   </td>   	
			   </tr>
			    	
			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('drop_time'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php
						$drop_time=$transaction_details[0]['drop_time'];
						if($drop_time !="0000-00-00 00:00:00"){
							$drop_time=isset($drop_time) ? Commonfunction::convertphpdate('Y-m-d H:i:s', $drop_time) : '';
						}else{
							$drop_time="---";
						}
					?>
				   <?php echo $drop_time; ?>
				   </div>
			   </td>   	
			   </tr> 
				
				<tr>
				   <td valign="top" width="20%"><label><?php echo __('total_time'); ?></label>:</td>        
				   <td>
					   <div class="new_input_field">
					   <?php
							if($pickup_time != "---" && $drop_time != "---") {
								
								echo commonfunction::dateDiff($drop_time,$pickup_time);
							} else {
								echo "---";
							}
						?>
					   </div>
				   </td>   	
			   </tr> 

			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('Current_Location'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php echo $transaction_details[0]['current_location']; ?>
				   </div>
			   </td>   	
			   </tr> 

			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('Drop_Location'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php $drop_location="";
					($transaction_details[0]['drop_location']!="")?
					$drop_location = $transaction_details[0]['drop_location']: 
					$drop_location = commonfunction::getaddress($transaction_details[0]['drop_latitude'],$transaction_details[0]['drop_longitude']); ?>
				   <?php echo $drop_location; ?>
				   </div>
			   </td>   	
			   </tr> 

			  <?php /* <tr>
			   <td valign="top" width="20%"><label><?php echo __('No_Passengers'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php echo $transaction_details[0]['no_passengers']; ?>
				   </div>
			   </td>   	
			   </tr> */ ?>

			  <?php /*  <tr>
			   <td valign="top" width="20%"><label><?php echo __('distance'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if($transaction_details[0]['distance'] == 0) { echo '-'; } else { echo $transaction_details[0]['distance'].' '.$transaction_details[0]['distance_unit']; } ?>
				   </div>
			   </td>   	
			   </tr>
			   
			  <tr>
			   <td valign="top" width="20%"><label><?php echo __('fare_per_minute'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if($transaction_details[0]['tripfare'] == 0) { echo '-'; } else { echo $company_currency.round(($transaction_details[0]['tripfare']-$transaction_details[0]['minutes_fare']),2); } ?>
				   </div>
			   </td>   	
			   </tr>
			   
			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('trip_minutes').'('.$transaction_details[0]['trip_minutes'].__('minutes').')'; ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if($transaction_details[0]['minutes_fare'] == 0) { echo '-'; } else { echo $company_currency.round($transaction_details[0]['minutes_fare'],2); } ?>
				   </div>
			   </td>   	
			   </tr> */ ?>
			   
			 <?php /*   <tr>
			   <td valign="top" width="20%"><label><?php echo __('trip_time'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php 
					 //$passenger_discount = $transaction_details[0]['passenger_discount'];
					 //$account_discount = $transaction_details[0]['account_discount'];
					 //echo $transaction_details[0]['fare'];
				   if($transaction_details[0]['tripfare'] == 0) { echo '-'; } else {
					    
				   		
						/*if($passenger_discount > 0)
						{
							$fare = round($transaction_details[0]['fare']+$passenger_discount,3);
							//echo $fare;
						}
						elseif($account_discount > 0)
						{
							$fare = round($transaction_details[0]['fare']+$account_discount,3);
							////echo $fare;
						} 

					//$fare = $transaction_details[0]['tripfare']-$transaction_details[0]['taxi_waiting_cost'];//$fare-$transaction_details[0]['company_tax'];
					$fare = $transaction_details[0]['tripfare'];
					echo $company_currency.round($fare,2);
					
					}
					?>
				   </div>
			   </td>   	
			   </tr>  */ ?>
			   
			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('waiting_time_hours'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if($transaction_details[0]['taxi_waiting_time'] == 0) { echo '-'; } else { 
					echo str_replace('%20',' ',$transaction_details[0]['taxi_waiting_time']); } ?>
				   </div>
			   </td>   	
			   </tr>

			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('waiting_time_arrival'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
						<?php echo secs_to_format($arrival_waiting_time); ?>
				   </div>
			   </td>   	
			   </tr>

			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('waiting_time_start'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   	<?php echo secs_to_format($start_waiting_time); ?>
				   </div>
			   </td>   	
			   </tr>

			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('waiting_time_cost'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if($transaction_details[0]['taxi_waiting_cost'] == 0) { echo '-'; } else { echo $company_currency.round($transaction_details[0]['taxi_waiting_cost'],2); } ?>
				   </div>
			   </td>   	
			   </tr>
			   
			   <?php if($fare_calculation_type == 2)
			   { ?>
			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('minutes_fare'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if($transaction_details[0]['minutes_fare'] == 0) { echo '-'; } else { echo $company_currency.round($transaction_details[0]['minutes_fare'],2); } ?>
				   </div>
			   </td>   	
			   </tr>
			   <?php }
			   else
			   { ?>
			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('distance_fare'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if($transaction_details[0]['distance_fare'] == 0) { echo '-'; } else { echo $company_currency.round($transaction_details[0]['distance_fare'],2); } ?>
				   </div>
			   </td>   	
			   </tr>
			   <?php } ?>
			   
			   <?php if($transaction_details[0]['nightfare_applicable'] == 1) {  ?>
			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('nightfare'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if($transaction_details[0]['nightfare'] == 0) { echo '-'; } else { echo $company_currency.round($transaction_details[0]['nightfare'],2); } ?>
				   </div>
			   </td>   	
			   </tr>
			   <?php } ?>
			   
			   <?php if($transaction_details[0]['eveningfare_applicable'] == 1) {  ?>
			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('eveningfare'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if($transaction_details[0]['eveningfare'] == 0) { echo '-'; } else { echo $company_currency.round($transaction_details[0]['eveningfare'],2); } ?>
				   </div>
			   </td>   	
			   </tr>
			   <?php } ?>
			  
			   
			  <?php /*    <tr>
			   <td valign="top" width="20%"><label><?php echo __('tax').'('.$transaction_details[0]['org_tax'].'%)'; ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php if($transaction_details[0]['company_tax'] == 0) { echo '-'; } else { echo $company_currency.round($transaction_details[0]['company_tax'],2); } ?>
				   </div>
			   </td>   	
			   </tr> */ ?>
			   
			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('Sub Total'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php 
						/*if($passenger_discount > 0)
						{
							$subtotal = round($transaction_details[0]['tripfare']+$transaction_details[0]['company_tax']+$transaction_details[0]['minutes_fare'],3);
							echo $company_currency.round($subtotal,2);
						}
						elseif($account_discount > 0)
						{
							$subtotal = round($transaction_details[0]['tripfare']+$transaction_details[0]['company_tax']+$transaction_details[0]['minutes_fare'],3);
							echo $company_currency.round($subtotal,2);
						} */
							//$subtotal = round($transaction_details[0]['tripfare']+$transaction_details[0]['company_tax'],3);
							$subtotal = round($transaction_details[0]['subtotal']/*+$transaction_details[0]['used_wallet_amount'],3*/);
							//$subtotal = round($transaction_details[0]['fare'],3);
							echo $company_currency.round($subtotal,2);

						
				   ?>
				   </div>
			   </td>   	
			   </tr>
			   
			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('wallet_amount_paid'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
					   <?php echo $company_currency.round($transaction_details[0]['wallet_amount_used'],2); ?>
					</div>
			   </td>   	
			   </tr>

			   <?php if($driver_edit_status_msg != '')
			   { ?>

			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('driver_edit_status'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
					   <?php echo $driver_edit_status_msg; ?>
					</div>
			   </td>   	
			   </tr>

			   <?php } ?>


			   <?php if($pending_amt > 0)
			   { ?>

			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('pending_amt'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
					   <?php echo $company_currency.round($pending_amt,2); ?>
					</div>
			   </td>   	
			   </tr>

			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('paid_amt'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
					   <?php echo $company_currency.round($paid_amt,2); ?>
					</div>
			   </td>   	
			   </tr>

			   <?php } ?>
			   
			   <?php /* <tr>
			   <td valign="top" width="20%"><label><?php echo __('Discount'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php 
						$passenger_discount = $transaction_details[0]['passenger_discount'];
						$account_discount = $transaction_details[0]['account_discount'];
						if($passenger_discount > 0)
						{
							echo $company_currency.round($passenger_discount,2);
						}
						elseif($account_discount > 0)
						{
							echo $company_currency.round($account_discount,2);
						}
				    ?>
				   </div>
			   </td>   	
			   </tr>   */ ?>
			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('trip_time'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php 
						/*if($passenger_discount > 0)
						{
							$fare = $subtotal - $passenger_discount;
							echo $company_currency.round($fare);
						}
						elseif($account_discount > 0)
						{
							$fare = $subtotal - $account_discount;
							echo $company_currency.round($fare);
						}*/
						//$fare = round($transaction_details[0]['tripfare']+$transaction_details[0]['company_tax'],3);
						$fare = round($transaction_details[0]['fare'],3);
							echo $company_currency.round($fare,2);
				    ?>
				   </div>
			   </td>   	
			   </tr>

			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('travel_status'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				  <?php if($transaction_details[0]['travel_status'] == 0) { echo __('not_completed'); } else if($transaction_details[0]['travel_status'] == 1) { echo __('completed'); } else if($transaction_details[0]['travel_status'] == 2) { echo __('inprogress'); } else if($transaction_details[0]['travel_status'] == 3) { echo __('start_to_pickup'); } else if($transaction_details[0]['travel_status'] == 4) { echo __('cancel_by_passenger'); } ?>

				   </div>
			   </td>   	
			   </tr> 

			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('payment_type'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   		<?php echo $payment_type_msg; ?>
				   </div>
			   </td>   	
			   </tr> 
			<?php if(isset($transaction_details[0]['driver_comments']) && $transaction_details[0]['driver_comments'] !='') { ?>
			   <tr>
			   <td valign="top" width="20%"><label><?php echo __('reason'); ?></label>:</td>        
			   <td>
				   <div class="new_input_field">
				   <?php echo $transaction_details[0]['driver_comments'];  ?>
				   </div>
			   </td>   	
			   </tr>
			   <?php } ?> 

		</table>
        </div>
        <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt"></div></div>
    </div>
</div>  

<?php 

//$driver_tracking  = $driver_trackings;
if(SHOW_MAP !=1) {
		if(count($driver_tracking) > 0) { 
				/*$driver_latlo = "[".$driver_tracking[0]['active_record'].']';
				$driver_latlog=str_replace(',,',',',$driver_latlo);*/
				$json_arr = json_encode($driver_tracking[0]['active_record']['coordinates']);
				$driver_latlog = $json_arr;
				$driver_default = explode(',',$driver_latlog);
				$count =  count($driver_default);
				$driver_centerlat = str_replace('[','',$driver_default[0]);
				$driver_centerlng = str_replace(']','',$driver_default[1]);
				$last_value=$driver_default[$count-1];
				if($last_value==""){
						$driver_endlat = str_replace('[','',$driver_default[$count-3]);
						$driver_endlng = str_replace(']','',$driver_default[$count-2]);
				}else{
						$driver_endlat = str_replace('[','',$driver_default[$count-2]);
						$driver_endlng = str_replace(']','',$driver_default[$count-1]);
				}
			
				
				$driver_route_start  = '[['.$driver_centerlng.','.$driver_centerlat.'],';
				$limit = $count-3;
				$driver_route_lng='';
				//exit;
				for($i=2;$i<=$limit;$i++){
					$even = $i % 2;
					if($even == 0){
					$driver_route_lng = str_replace('[','',$driver_default[$i]);	
					}else{
						$driver_route_lat = str_replace(']','',$driver_default[$i]);
						$driver_route_start .= '['.$driver_route_lat.','.$driver_route_lng.'],';
					}
					
				}
				
				 $driver_route_start .= '['.$driver_endlng.','.$driver_endlat.']]';//exit;
				//echo $driver_latlog.'='.$driver_centerlat.'='.$driver_centerlng.'='.$driver_endlat.'='.$driver_endlng.'<br>';exit;

?>			
		<div class="widget margin-bottom" >
			<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" /><h6><?php echo __('trip_route_map'); ?></h6>
				<div style="width:auto; float:right; margin: 4px 3px;">		
				<div class="button greyish"></div>
				</div>
			</div>
			<div id="on_going_trip_map" >
				<div id="map"></div>
			</div>
		</div>
  <script type="text/javascript">
    var map;
    $(document).ready(function(){

    toggle(25);

      map = new GMaps({
        el: '#map',
        lat: <?php echo $driver_centerlng; ?>,
        lng: <?php echo $driver_centerlat; ?>,
        click: function(e){
          console.log(e);
        }
      });

      map.addMarker({
        lat: <?php echo $driver_centerlng; ?>,
        lng: <?php echo $driver_centerlat; ?>,
        title: 'Start Point',
        details: {
          database_id: 42,
          author: 'HPNeo'
        },
       /* click: function(e){
          if(console.log)
            console.log(e);
          alert('You clicked in this marker');
        },
        mouseover: function(e){
          if(console.log)
            console.log(e);
        }*/
      });
      map.addMarker({
        lat: <?php echo $driver_endlng; ?>,
        lng: <?php echo $driver_endlat; ?>,
        title: 'End Point',
        /*infoWindow: {
          content: '<p>HTML Content</p>'
        }*/
      });


	path = <?php echo $driver_route_start; ?>;

      map.drawPolyline({
        path: path,
        strokeColor: 'green',
        strokeOpacity: 0.6,
        strokeWeight: 6
      });
    });
</script>

<?php } ?>
<style>
#map{
  display: block;
  width: 100%;
  height: 500px;
  margin-top:20px;	
  margin: 0 auto;
  -moz-box-shadow: 0px 5px 20px #ccc;
  -webkit-box-shadow: 0px 5px 20px #ccc;
  box-shadow: 0px 5px 20px #ccc;
}
#map.large{
  height:500px;
}
</style>
<?php 
}
?>
<?php 

function secs_to_format($convertSeconds)
{
	$convertSeconds = floor($convertSeconds/1000);
    $converthours   = floor($convertSeconds / 3600);
    $convertmins    = floor(($convertSeconds - ($converthours * 3600)) / 60);
    $convertsecs    = floor($convertSeconds % 60);
    $waitH          = ($converthours < 10) ? '0' . $converthours : $converthours;
    $waitM          = ($convertmins < 10) ? '0' . $convertmins : $convertmins;
    $waitS          = ($convertsecs < 10) ? '0' . $convertsecs : $convertsecs;
    $waitingTime    =  $waitH . ':' . $waitM . ':' . $waitS;

    return $waitingTime;
}