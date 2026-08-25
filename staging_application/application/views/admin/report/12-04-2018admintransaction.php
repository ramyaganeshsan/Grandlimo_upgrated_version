<?php defined('SYSPATH') OR die("No direct access allowed.");
$find_url = explode('/',$_SERVER['REQUEST_URI']);
$split = explode('?',$find_url[3]);  	
$list = $split[0];
?>
<link rel="stylesheet" href="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/css/ui-lightness/jquery-ui-1.8.11.custom.css" />
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/js/jquery-1.5.1.min.js"></script>
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/js/jquery-ui-1.8.11.custom.min.js"></script>
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-timepicker-addon.js"></script>
<script src="<?php echo URL_BASE;?>public/js/transaction.js"></script>
<?php
//For search values
//=================
$user_type_val = isset($srch["user_type"]) ? $srch["user_type"] :''; 
//$company_val = isset($srch["filter_company"]) ? $srch["filter_company"] :''; 
$company_val = COMPANY_CID;
$startdate = isset($srch["startdate"]) ? $srch["startdate"] :date('Y-m-01 00:00:00'); 	
$enddate = isset($srch["enddate"]) ? $srch["enddate"] :date('Y-m-d 23:59:59'); 	
$taxiid = isset($srch["taxiid"]) ? $srch["taxiid"] :'';
$passengerid = isset($srch["passengerid"]) ? $srch["passengerid"] :'';
$driver_id = isset($srch["driver_id"]) ? $srch["driver_id"] :'';
$manager_id = isset($srch["manager_id"]) ? $srch["manager_id"] :'';
$status_val = isset($srch["status"]) ? $srch["status"] :'';
$keyword = isset($srch["keyword"]) ? $srch["keyword"] :''; 
$s_date = isset($srch["startdate"]) ? 2:1; 	
$e_date = isset($srch["enddate"]) ? 2:1; 
$payment_type = isset($srch["payment_type"]) ? $srch["payment_type"] :''; 
//$transaction_id = isset($srch["transaction_id"]) ? $srch["transaction_id"] :''; 
$form_action = '';
$form_action = URL_BASE.'transaction/admintransaction_list/'.$list.'/';
$back_action = URL_BASE.'transaction/admintransaction/'.$list.'/';
$chart_currency=findcompany_currency($company_val);
//For CSS class deefine in the table if the data's available
//===========================================================
$total_transaction=$ListCount;
$table_css=$export_excel_button=$export_pdf_button="";
if($total_transaction>0)
{ 
	$table_css='class="table_border"'; 
	$startdate_export = isset($srch["startdate"]) ? $srch["startdate"] :date('Y-m-01 00:00:00');
	$enddate_export = isset($srch["enddate"]) ? $srch["enddate"] :date('Y-m-d 23:59:59');
	$export_excel_button='<input type="button"  title="'.__('button_export').'" class="button" value="'.__('button_export').'" onclick="location.href=\''.URL_BASE.'transaction/export/'.$list.'/?filter_company='.$company_val.'&startdate='.$startdate_export.'&enddate='.$enddate_export.'&taxiid='.$taxiid.'&driver_id='.$driver_id.'&manager_id='.$manager_id.'&passengerid='.$passengerid./*'&transaction_id='.$transaction_id.*/'&payment_type='.$payment_type.'\'" />';
	$export_pdf_button='<input type="button"  title="'.__('button_pdf').'" class="button" value="'.__('button_pdf').'" style="margin-left:20px;" onclick="location.href=\''.URL_BASE.'transaction/exportpdf/'.$list.'/?filter_company='.$company_val.'&startdate='.$startdate_export.'&enddate='.$enddate_export.'&taxiid='.$taxiid.'&driver_id='.$driver_id.'&manager_id='.$manager_id.'&passengerid='.$passengerid./*'&transaction_id='.$transaction_id.*/'&payment_type='.$payment_type.'\'" />';
}
?>
</script>
<div class="container_content fl clr">
	<div class="cont_container mt15 mt10">
		<div class="content_middle"> 
        <form method="get" class="form" name="managedriver" id="managedriver" action="<?php echo $form_action; ?>" onsubmit="return validatetranaction_form();">
		<table class="list_table1" border="0" width="100%" cellspacing="0" cellpadding="5" >
				<tr>				
					<?php /* <td valign="middlle"><label><?php echo __('company'); ?></label></td> <td valign="top">*/ ?>
					
						<div class="selector" id="uniform-user_type" style="display:none;">
							<select class="select2" name="filter_company" id="filter_company" onchange="getcompanymanager(this.value),getcompanytaxi(this.value),getcompanydriver(this.value),getcompanypassengers(this.value)">
								
									<option value="All"><?php echo __('all_label'); ?></option>    
								<?php 
									foreach ($get_allcompany as $comapany_list) {
									$selected_status = ($company_val == $comapany_list['_id']) ? ' selected="selected" ' : " ";
								?>  
									<option value="<?php echo $comapany_list['_id']; ?>"  <?php echo $selected_status; ?> ><?php echo ucfirst($comapany_list['companydetails']['company_name']); ?></option>
									<?php }?>
							</select>
						</div>
						<div id="filter_company_error" class="error"></div>
					<?php /* </td>   */ ?>
					
				<td valign="middlle"><label><?php echo __('manager_name'); ?></label></td>
				<td id="manager_list">
					<div class="selector" id="uniform-user_type">
						<select name="manager_id" id="manager_id" onchange="getmanagertaxi(this.value),getmanagerdriver(this.value),getcompanypassengers(filter_company.value)">
							<?php if(count($managerlist) > 0) { ?>
							<option value="All"><?php echo __('all_label');?></option>
							<?php
							foreach($managerlist as $values) { 
								$managername = $values["name"].' '.$values["lastname"];
								$selected_status = ($manager_id == $values['id']) ? ' selected="selected" ' : " ";
							echo '<option value="'.$values["id"].'"'.$selected_status.'>'.ucfirst($managername).'</option>';
						 } } else { 
									  echo '<option value="">'.__('select_label').'</option>';
								  }?>
						</select>
					</div>
				</td>
										   
				<td valign="middlle"><label><?php echo __('taxi'); ?></label></td>
				<td id="taxi_list">
					<div class="selector" id="uniform-user_type">
						<select name="taxiid" id="taxiid" class="select2">
						<?php if(count($taxilist) > 0) { ?>
						<option value="All"><?php echo __('all_label');?></option>
						<?php
						foreach($taxilist as $values) { 
							$selected_status = ($taxiid == $values['taxi_id']) ? ' selected="selected" ' : " ";
						echo '<option value="'.$values["taxi_id"].'"'.$selected_status.'>'.$values["taxi_no"].'</option>';
						 } } else { 
									  echo '<option value="">'.__('select_label').'</option>';
								  }?>
						</select>
					</div>
				</td>
				</tr>
				<tr>
				<td valign="middlle"><label><?php echo __('driver_name'); ?></label></td>
				<td id="driver_list">
					<div class="selector" id="uniform-user_type">
						<select name="driver_id" id="driver_id">
							<?php if(count($driverlist) > 0) { ?>
							<option value="All"><?php echo __('all_label');?></option>
							<?php
							foreach($driverlist as $values) { 
								$drivername = $values["name"].' '.$values["lastname"];
								$selected_status = ($driver_id == $values['id']) ? ' selected="selected" ' : " ";
							echo '<option value="'.$values["id"].'"'.$selected_status.'>'.ucfirst($drivername).'</option>';
						 } } else { 
									  echo '<option value="">'.__('select_label').'</option>';
								  }?>
						</select>
					</div>
				</td>
				 
					<td valign="middlle"><label><?php echo __('passenger_name'); ?></label></td>
					<td id="passenger_list">
						<div class="selector" id="uniform-user_type">
							<select name="passengerid" id="passengerid" class="select2">
							<?php if(count($passengerlist) > 0) { ?>
							<option value="All"><?php echo __('all_label');?></option>
							<?php //print "<pre>"; print_r($passengerlist);exit;
							foreach($passengerlist as $values) { 
								if(is_null($values["company_name"]))
								{
									$cname='';
								}
								else
								{
									$cname='-'.ucfirst($values["company_name"]);
								}
								$passengername = ucfirst($values["name"]);
								$selected_status = ($passengerid == $values['id']) ? ' selected="selected" ' : " ";
							echo '<option value="'.$values["id"].'"'.$selected_status.'>'.$passengername.'</option>';
							 } } else { 
										  echo '<option value="">'.__('select_label').'</option>';
									  }?>
							</select>
						</div>
					</td>
						
					</tr>  
				<tr>  
					<td valign="middle"><label><?php echo __('from_date'); ?></label></td>
                        <td valign="top">
						<div class="new_input_field_transaction">
								  <input type="text"  readonly title="<?php echo __('select_datetime'); ?>" id="startdate" name="startdate" value="<?php echo $startdate;?>"  />
						 <span id="startdate_error" class="error"></span>		 
						 </div>
						
                        </td>       

                        <td valign="middle"><label><?php echo __('end_date'); ?></label></td>
                        <td valign="top">
						<div class="new_input_field_transaction">
								  <input type="text"  readonly title="<?php echo __('select_datetime'); ?>" id="enddate" name="enddate" value="<?php echo $enddate;?>"  />
						<span id="enddate_error" class="error"></span>								

						</div>
                        </td>   
                        </tr>
                        <tr>
                 <?php if($list !='rejected' ) { ?>
				
					<td valign="middlle"><label><?php echo __('payment_type'); ?></label></td>
					<td id="payment_list">
						<div class="selector" id="uniform-user_type">
							<select name="payment_type" id="payment_type" class="select2">
							<?php if(count($gateway_details) > 0) { ?>
							<option value="All"><?php echo __('all_label');?></option>
							<?php
							foreach($gateway_details as $values) { 
								$pay_mod_name = $values["pay_mod_name"];
								$selected_status = ($payment_type == $values['_id']) ? ' selected="selected" ' : " ";
							echo '<option value="'.$values["_id"].'"'.$selected_status.'>'.ucfirst($pay_mod_name).'</option>';
							 } } else { 
										  echo '<option value="">'.__('select_label').'</option>';
									  }?>
							</select>
						</div>
					</td>  

                        <td>&nbsp;</td>
                        <td>&nbsp;</td>  
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                 
				<?php }else { ?>
						<input type="hidden" name="payment_type" value="" />
					<?php } ?>
				</tr>
                 <tr>
                        <td valign="top"><label>&nbsp;</label></td>
                        <td>
                            <div class="button brownB">
                                <input type="submit" value="<?php echo __('button_search'); ?>" name="search_user" title="<?php echo __('button_search'); ?>" />
                            </div>
                            <div class="button blueB">
                                <input type="button" value="<?php echo __('button_cancel'); ?>" title="<?php echo __('button_cancel'); ?>" onclick="location.href = '<?php echo $back_action; ?>'" />
                            </div>
                        </td>
                 </tr>
                </table>
		<?php if($list !='rejected' ) { ?>		
                <div class="widget chartWrapper">
            <div class="title"><img src="<?php echo IMGPATH; ?>/icons/dark/stats.png" alt="" class="titleIcon" /><h6><?php echo __('chart'); ?></h6></div>
            <div class="body">
		<?php
		
		if(count($grpahdata)>0)
		{
			
			foreach($grpahdata as $gdata){
			foreach($gdata as $gdata1)
			{
				$farenew[] = $gdata1['amount'];
				//echo date( "d",strtotime($gdata['createdate']))."<br>";
				//$month[] = $gdata['_id']['day'].''.$gdata['_id']['month'];
				 //$form_date ='0'.$gdata['_id']['day'].'-'. '0'.$gdata['_id']['month'].'-'.$gdata['_id']['year'];//exit;
				//$month[] = "'".date( "d",strtotime($startdate))." ".date( "M",strtotime($startdate))."'";
			}
		}
				//echo $month;
				/*if($fare){
					$farenew = implode(",",$fare);
				}*/
				
			if($month){
					$month = implode(",",$month);//exit;
			}
			if(!empty($farenew)) {
				$farenew = implode(",",$farenew);
			} else {
				$farenew = '';
			}
			//echo '<pre>';
			//print_r($month);	
			//print_r($farenew);	exit;
		?>
		
		 <div class="chart" id="transaction_chart"></div>
			</div>
<?php } else { echo "<div class='nodata' style='padding:0px 10px 8px 0;'>".__('no_data')."</div></div>"; } ?>
		
        </div>
		<?php } ?>
                		<div class="widget">
		<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" /><h6><?php echo $page_title; ?></h6>
		 <div style="width:auto; float:right; margin: -5px 3px;">
                <?php  if($total_transaction > 0){ $export_table_count=$total_transaction;
                	include_once(APPPATH.'views/admin/export_menu.php'); }?>
        </div>
		<!-- <div style="width:auto; float:right; margin: -5px 3px;">
		<div class="button greyishB"> <?php echo $export_excel_button; ?></div>  
		<div class="button greyishB"> <?php echo $export_pdf_button; ?></div>                       
		</div>
		 -->		
		</div>


<?php if($total_transaction > 0){ ?>
<div class= "overflow-block">
<?php } ?>		
<table cellspacing="1" cellpadding="11" width="100%" align="center" class="sTable responsive">
<?php if($total_transaction > 0){ ?>
<thead>
	<tr>
		<td align="left" width="5%"><?php echo __('sno_label'); ?></td>
		
		<?php if($list != 'rejected') { 
			/*<td align="left" width="15%"><?php echo __('cctransaction_id'); ?></td>*/?>
			<td align="left" width="10%"><?php echo __('payment_type'); ?></td>
			<td align="left" width="10%"><?php echo __('trip_id'); ?></td>
		<?php } ?>
		
		<td align="left" width="10%"><?php echo __('passenger_name'); ?></td>
		<td align="left" width="10%"><?php echo __('passenger_phone'); ?></td>
		
		<?php //if(isset($listings['driver_id'])) { ?>
		<td align="left" width="10%"><?php echo ucfirst(__('driver_name')); ?></td>
		<?php //} ?>
		
		<?php /* <td align="left" width="10%"><?php echo __('companyname'); ?></td> */ ?>
		<td align="left" width="10%"><?php echo __('dispatch_time'); ?></td>
		<td align="left" width="10%"><?php echo __('journey_date'); ?></td>
		<td align="left" width="70%"><?php echo __('pickuploc_droploc'); ?></td>
		
		<?php /* if($list != 'rejected') { ?>
		<td align="left" width="10%"><?php echo __('admin_commision'); ?></td>
		<td align="left" width="10%"><?php echo __('company_commision'); ?></td>
		<?php /* <td align="left" width="10%"><?php echo __('package_type'); ?></td> */ ?>
		<?php  /* } */ ?>
		
		<?php if($list != 'rejected') { ?>
		
			<?php if($list != 'cancelled') { ?>
			<td align="left" width="10%"><?php echo __('distance'); ?></td>
			<td align="left" width="10%"><?php echo __('nightfare'); ?></td>
			<td align="left" width="10%"><?php echo __('eveningfare'); ?></td>
			<td align="left" width="10%"><?php echo __('promocode'); ?></td>
			<td align="left" width="10%"><?php echo __('promo_discount'); ?></td>
			<?php } ?>
			<?php /* ?>
			<td align="left" width="10%"><?php echo __('wallet_amount'); ?></td>
			<?php */ ?>
			<?php /* ?>
			<?php if($list != 'cancelled') { ?>
				<td align="left" width="10%"><?php echo __('trip_total_fare'); ?></td>
			<?php } ?>
			<?php */ ?>
			<td align="left" width="10%"><?php if($list == 'cancelled') { echo __('cancel_fare'); } else { echo __('trip_total_fare'); }?></td>
			<?php if($list == 'cancelled'){
			?>
		         <td align="left" width="10%"><?php echo __('cancel_reason'); ?></td>		
			<?php
		    }
			?>
			<?php if($list == 'all' || $list == 'success') { ?>
		
			<td align="left" width="10%"><?php echo __('trip_edited_fare'); ?></td>
			<td align="left" width="10%"><?php echo __('wallet_fare'); ?></td>
			<td align="left" width="10%"><?php echo __('cash_fare'); ?></td>
			<td align="left" width="10%"><?php echo __('card_fare'); ?></td>
			<td align="left" width="10%"><?php echo __('online-knet_fare'); ?></td>
			<td align="left" width="10%"><?php echo __('additional_fare'); ?></td>
			<td align="left" width="10%"><?php echo __('fare_note'); ?></td>


			<?php } if($list != 'success') { 
				if($list == 'all'){
			?>
			<td align="left" width="10%"><?php echo __('cancel_reason'); ?></td>
			<?php }?>
			<td align="left" width="10%"><?php echo __('travel_status'); ?></td>
			<?php } /*?>
			<td align="left" width="10%"><?php echo __('rating_points');?></td>
			<td align="left" width="10%"><?php echo __('comments');?></td>
		<?php */ 
		} 
		
		else {	?>
			<td align="left" width="10%"><?php echo __('travel_status');?></td>
			<td align="left" width="10%"><?php echo __('reason');?></td>
		<?php } ?>

	</tr>
</thead>
<tbody>	
		<?php
		/* For Serial No */
		$sno=$Offset; 
		$totalfare="";
		//print "<pre>";
		//print_r($all_transaction_list); exit;
		 foreach($all_transaction_list as $listings) { 
			 
			//S.No Increment
		 //==============
		 $sno++;        
         //For Odd / Even Rows
         //===================
        $trcolor=($sno%2==0) ? 'oddtr' : 'eventr';
		$company_currency = $listings['company_id'];
		$ccur = findcompany_currency($company_currency);
		//$transaction_id = isset($listings['transaction_id'][0])?$listings['transaction_id'][0]:'';
		$passengers_log_id = isset($listings['id'])?$listings['id']:'';
		$payment_type = isset($listings['payment_type'][0])?$listings['payment_type'][0]:'';
		$passenger_name = isset($listings['passenger_name'])?$listings['passenger_name']:'';
		$passenger_phone = isset($listings['passenger_phone'])?$listings['passenger_phone']:'-';
		$nightfare = isset($listings['nightfare'][0])?$listings['nightfare'][0]:0;
		$eveningfare = isset($listings['eveningfare'][0])?$listings['eveningfare'][0]:0;
		$passenger_discount = isset($listings['passenger_discount'][0])?$listings['passenger_discount'][0]:0;
		$promocode = isset($listings['promocode'])?$listings['promocode']:'-';
		$fare = isset($listings['fare'][0])?$listings['fare'][0]:0;
		$editedfare = isset($listings['total_fare_detail'])?$listings['total_fare_detail']:0;
		$faredetail = isset($listings['fare_detail'])?$listings['fare_detail']:array();
		$cancel_reason = isset($listings['cancel_reason'])?$listings['cancel_reason']:'-';
		$admin_amount = isset($listings['admin_amount'][0])?$listings['admin_amount'][0]:0;
		$company_amount = isset($listings['company_amount'][0])?$listings['company_amount'][0]:0;
		$distance_unit = isset($listings['distance_unit'][0])?$listings['distance_unit'][0]:'';
        $listings['distance'] = isset($listings['distance'])?$listings['distance']:0;
        $listings['wallet_amount_used'] = isset($listings['wallet_amount_used'][0])?$listings['wallet_amount_used'][0]:'-';
        $dispatch_time = (isset($listings['dispatch_time']) ) ? Commonfunction::convertphpdate('Y-m-d h:i:s A',$listings['dispatch_time']) : '-';
        $cash_fare = '-';$card_fare = '-'; $online_knet = '-';$additional_fare = '-';$fare_note = '-';
        if(!empty($faredetail)){
				foreach ($faredetail as $fkey => $fvalue) {
					if($fvalue['key'] == 1){

					    $cash_fare = $fvalue['value'];
						
					}elseif($fvalue['key'] == 6){
						$online_knet = $fvalue['value'];
						

					}elseif($fvalue['key'] == 3){
						$card_fare = $fvalue['value'];
						
					}elseif($fvalue['key'] == 'fare_note'){
						$fare_note = $fvalue['value'];
						
					}else{
						$additional_fare = $fvalue['value'];
						

					}
					# code...
				}
			}

		?>
		<tr class="<?php echo $trcolor; ?>">
			<td><?php echo $sno; ?></td>
			<?php if($list != 'rejected') { 
				/*
			<td>
			<?php
				 if($transaction_id != "")
				{
					?>
				<a title="<?php echo $transaction_id; ?>" href="<?php echo URL_BASE.'transaction/transaction_details/'.$passengers_log_id;?>"><?php echo $transaction_id; ?></a>
				<?php } else { echo '--'; } ?></td>*/ 
			?>
			<td><?php if($payment_type == 1) { echo __('cash'); } else if($payment_type == 2) { echo __('credit_card_paypal'); } else if($payment_type == 4) { echo __('account'); } else if($payment_type == 3){ echo __('Online-KNET'); }else if($payment_type == 6){ echo __('card'); } else { echo '-'; } ?></td>
			<td><a title="<?php echo $passengers_log_id; ?>" href="<?php echo URL_BASE.'transaction/transaction_details/'.$passengers_log_id;?>"><?php echo $passengers_log_id; ?></a></td>			<?php } ?>
			<td><?php echo ucfirst($passenger_name); ?></td>
			<td><?php echo ucfirst($passenger_phone); ?></td>
			<?php if(isset($listings['driver_id'][0])) { ?>
	<td><a title="<?php echo (isset($listings['driver_name'][0]))?ucfirst($listings['driver_name'][0]):""; ?>" href="<?php echo URL_BASE.'manage/driverinfo/'.$listings['driver_id'][0];?>"><?php echo (isset($listings['driver_name'][0]))?wordwrap(ucfirst($listings['driver_name'][0]),30,'<br/>',1):""; ?></a></td>
			<?php }  else {?>
				<td>-</td>
			<?php } ?>
		<?php /*<td>
				<a title="<?php echo (isset($listings['company_name']))?ucfirst($listings['company_name']):""; ?>" href="<?php echo URL_BASE.'manage/companydetails/'.$listings['userid'];?>">
								
			<?php echo (isset($listings['company_name']))?ucfirst($listings['company_name']):""; ?></a></td> */?>
			<td><?php echo $dispatch_time;?></td>
			<td><?php echo $listings['pickup_time'];?></td>
			<?php 
			$pic_loc = $listings['current_location'];
			$drop_loc = $listings['drop_location'];
			?>
			<td><b>Pickup</b><br/><?php echo ($pic_loc != 'No address found')?(substr($pic_loc,0,25).'...'):(substr($pic_loc,0,25));?><br/><b>Drop</b><br/><?php echo ($drop_loc != 'No address found')?(substr($drop_loc,0,25).'...'):(substr($drop_loc,0,25));?></td>
			<?php if($list != 'rejected') { ?>		
			<?php /* <td><?php echo $admin_amount;?></td>
			<td><?php echo $company_amount;?></td> */ ?>
			<?php /*
			<td><?php if($listings['trans_packtype'] == 'T' ) { echo __('transaction_based_commission'); } else if($listings['trans_packtype'] == 'P' ) { echo __('package_based_commission'); } else if($listings['trans_packtype'] == 'N' ) { echo __('package_based_no_commission'); } ?> </td>
			*/ ?>
			<?php } ?>
			<?php if($list != 'rejected') { ?>
				
				<?php if($list != 'cancelled') { ?>
				<td><?php if($listings['distance'] == 0) { echo '-'; } else { echo round($listings['distance'],2).' '.$distance_unit;}?></td>
				<td><?php if(isset($listings['nightfare']) == 0) { echo '-'; } else { echo $ccur.round($nightfare,2);}?></td>
				<td><?php if(isset($listings['eveningfare']) == 0) { echo '-'; } else { echo $ccur.round($eveningfare,2);}?></td>
				<td><?php echo $promocode;?></td>
				<td><?php if(isset($listings['passenger_discount']) == 0) { echo '-'; } else { echo $ccur.round($passenger_discount,2);}?></td>
				<?php } ?>

			<?php /* ?>
			if($listings['used_wallet_amount'] == 0) { echo '-'; } else { echo $ccur.round($listings['used_wallet_amount'],2);}?>
			<?php */ ?>
			
			<td><?php 
			    if($fare != 0) {
			        echo round($fare,2);  
				    $ccur_for = findcompany_currencyformat($company_currency);
					$convet_amt = currency_conversion($ccur_for,$fare);
				} else {
				    echo '-'; 
				    $convet_amt = 0;
				}?>
					
				</td>
				<?php if($list == 'cancelled'){
			?>
			<td><?php if(strlen($cancel_reason)>25){echo (substr($cancel_reason,0,25).'...');}else{ echo $cancel_reason; }?></td>
			<?php
		}
			?>

			<?php if($list == 'all' || $list == 'success'){
			?>
			<td><?php /*if($fare != 0) {
					$ccur_for = findcompany_currencyformat($company_currency);
					$convet_amt = currency_conversion($ccur_for,$fare);
					/*echo round($convet_amt,2);
				} else { echo '-'; $convet_amt = 0;	}*/?>
					<?php if($editedfare != 0) { echo round($editedfare,2); } else { echo '-'; }?>

			</td>
		<td><?php echo $listings['wallet_amount_used'];?></td>
		<td><?php echo $cash_fare;?></td>
		<td><?php echo $card_fare;?></td>
		<td><?php echo $online_knet;?></td>
		<td><?php echo $additional_fare;?></td>
		<td><?php if(strlen($fare_note)>25){echo (substr($fare_note,0,25).'...');}else{ echo $fare_note; }?></td>

			<?php }?>
			<?php if($list != 'success') { 
				if($list == 'all'){?>
					<td><?php if(strlen($cancel_reason)>25){echo (substr($cancel_reason,0,25).'...');}else{ echo $cancel_reason; }?></td>
				<?php } ?>
				<td><?php if($listings['travel_status'] == 0) {
					echo __('to_be_dispatched');
					} else if($listings['travel_status'] == 1) {
						echo __('completed');
					} else if($listings['travel_status'] == 2) {
						echo __('inprogress');
					} else if($listings['travel_status'] == 3) {
						echo __('start_to_pickup');
					} else if($listings['travel_status'] == 4) {
						echo __('cancel_by_passenger');
					} else if($listings['travel_status'] == 5) {
						echo __('waiting_for_payment');
					} else if($listings['travel_status'] == 6) {
						echo __('missed');
					} else if($listings['travel_status'] == 7) {
						echo __('dispatched');
					} else if($listings['travel_status'] == 8) {
						echo __('cancelledd');
					} else if($listings['travel_status'] == 9) {
						echo __('confirmed');
					} else if($listings['travel_status'] == 10) {
						echo __('reassign');
					} ?> 
				</td>
			<?php } ?>

			<?php /*<td><?php if($listings['rating'] == 0) { echo '-'; } else { echo $listings['rating']; }?></td>
			<td><?php echo $listings['comments']; ?></td>*/ ?>
			<?php }
			else { ?>
			<td><?php if($listings['driver_reply'] == 'C') { 
				   echo __('cancelled_by_driver');
				 }elseif($listings['travel_status'] == 4) { 
				   echo __('cancelled_by_passenger');
				 }elseif($listings['travel_status'] == 8){
				 	echo __('cancelled_by_dispatcher');
				 }else { echo __('rejected_by_driver'); }?></td>
			<td><?php if($listings['driver_comments'] == '') { echo '-'; } else { echo $listings['driver_comments']; }?></td>	
			<?php } ?>
		</tr>
		<?php
			if($list != 'rejected') { 
				$totalfare +=$convet_amt;

			}
		} 
		
		?>
		<?php if($list != 'rejected' && $totalfare>0) { ?>
		<tr>
			<?php if($list != 'cancelled') { ?>	
			<td></td>
			<?php } ?>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			
			<?php if($list != 'success') { ?>
			<td></td>
			<?php } ?>

			<?php if($list == 'success') { ?>
			<td></td>
			<?php } ?>

			<?php if($list != 'all' || $list != 'success') { ?><td></td><?php } ?><td></td>
			<?php if($list != 'cancelled') { ?>
			<td><?php echo __('total').'('.CURRENCY.')';?></td>
			<td><?php echo $totalfare; ?></td>
			<?php } ?>
			<?php if($list != 'cancelled') { ?>	<td></td><?php } ?>
			<?php if($list == 'all') { ?>	<td></td><?php } ?>
		</tr>
		<?php } 
 		 } 
		 
		//For No Records
		//==============
	     else{ ?>
       	<tr>
        	<td class="nodata"><?php echo __('no_data'); ?></td>
        </tr>
		<?php } ?>
		</tbody>
</table>
<?php if ($total_transaction > 0) { ?>
</div>
<?php } ?>
</form>
</div>
</div>
<div class="clr">&nbsp;
</div>
<?php if ($total_transaction > 0) { ?>

<div style="padding-left: 10px;">
	<span><b>Grand Total Fare : </b><?php echo $total_fare;?></span>
</div>
<?php } ?>
<div class="pagination">
		<?php if($total_transaction > 0): ?>
			
		 <p><?php echo $pag_data->render(); ?></p>  
		<?php endif; ?> 
  </div>
  <div class="clr">&nbsp;</div>

</div>
</div>       
<script type="text/javascript" language="javascript">
$(document).ready(function(){

	$('#filter_company').hide();
		<?php if(isset($_GET)){}else{ ?>
		getcompanymanager(1);
	getcompanytaxi(1);
	getcompanydriver(1);
	getcompanypassengers(1); <?php } ?>
	toggle(25);
	
	$("#startdate").datetimepicker( {
		showTimepicker:true,
		showSecond: true,
		timeFormat: 'hh:mm:ss',
		dateFormat: 'yy-mm-dd',
		stepHour: 1,
		stepMinute: 1,
		maxDateTime : new Date("<?php echo date('Y m d,H:i:s'); ?>"),
		stepSecond: 1,
		/*onSelect: function (selected) {
			var dt = new Date(selected);
			dt.setDate(dt.getDate() + 1);
			$("#enddate").datepicker("option", "minDate", dt);
		}*/
	});
	
	$("#enddate").datetimepicker( {
		showTimepicker:true,
		showSecond: true,
		timeFormat: 'hh:mm:ss',
		dateFormat: 'yy-mm-dd',
		stepHour: 1,
		stepMinute: 1,
		maxDateTime : new Date("<?php echo date('Y m d').",23:59:59"; ?>"),
		stepSecond: 1,
		/*onSelect: function (selected) {
			var dt = new Date(selected);
			dt.setDate(dt.getDate() - 1);
			$("#startdate").datepicker("option", "maxDate", dt);
		}*/
	});
});
function validatetranaction_form()
{
	valid = true;
	var filter_company = $('#filter_company').val();
	var startdate = $('#startdate').val();
	var enddate = $('#enddate').val();
	if(filter_company =="")
	{
		$('#filter_company_error').html("<?php echo __('select_company');?>");
		$('#filter_company').focus();
		return false;		
	}	
	else if(startdate =="")
	{
		$('#filter_company_error').html('');
		$('#startdate_error').html("<?php echo __('select_datetime');?>");
		$('#startdate').focus();
		return false;		
	}	
	else if(enddate =="")
	{
		$('#startdate_error').html('');
		$('#enddate_error').html("<?php echo __('select_datetime');?>");
		$('#enddate').focus();
		return false;		
	}
		return true;	
}
</script>
<?php 
//echo $fare;
$milliseconds = strtotime($startdate) * 1000;
//echo $startdate;
if(isset($_GET['startdate']) && isset($_GET['startdate'])){

	if($_GET['startdate'] !='' && $_GET['startdate'] !='')
	{
		$text = __('transactions').' '.__('from').' '.$startdate.' '.__('to').' '.$enddate;
	}
	else
	{
		$text = __('transactions');	
	}

}else{
	$text = __('transactions').' '.__('from').' '.$startdate.' '.__('to').' '.$enddate;
}
if(count($grpahdata)>0)
{
	if($list != 'rejected') {
	
		 ?>
<script type="text/javascript">
	var startdate = $('#startdate').val();
	if(startdate != '')
	{
	var temp = new Array();
	temp = startdate.split("-");
	var year = temp[0];
	var month = temp[1];
	var dates = temp[2].substring(0,2);
	var month = month-1;
	}

$(function () {
        $('#transaction_chart').highcharts({
		title: {
			text: '<?php echo $text;?>',
			x: -20 //center
		},
		subtitle: {
			text: '',
			x: -20 //center
		},
		xAxis: {
			categories: [<?php echo $month;?>]
		},
		yAxis: {
			title: {
				text: 'Amount (<?php echo $chart_currency; ?>)'
			},
			plotLines: [{
				value: 0,
				width: 1,
				color: '#808080'
			}]
		},
		tooltip: {
			valueSuffix: ''
		},
		legend: {
			layout: 'vertical',
			align: 'right',
			verticalAlign: 'middle',
			borderWidth: 0
		},
		series: [{
			name: 'Amount',
			data: [<?php echo $farenew;?>]
		}]
	});
	
    });
</script>
<?php }
} ?>
<script src="<?php echo SCRIPTPATH; ?>highcharts.js"></script>
