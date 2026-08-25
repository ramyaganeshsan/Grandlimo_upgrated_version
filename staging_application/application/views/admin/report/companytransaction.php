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
$company_val = isset($srch["filter_company"]) ? $srch["filter_company"] :''; 
$startdate = isset($srch["startdate"]) ? $srch["startdate"] :date('Y-m-01 00:00:00'); 	
$manager_id = isset($srch["manager_id"]) ? $srch["manager_id"] :'';
$passengerid = isset($srch["passengerid"]) ? $srch["passengerid"] :'';
$enddate = isset($srch["enddate"]) ? $srch["enddate"] :date('Y-m-d H:i:s'); 	
$taxiid = isset($srch["taxiid"]) ? $srch["taxiid"] :'';
$driver_id = isset($srch["driver_id"]) ? $srch["driver_id"] :'';
$payment_type = isset($srch["payment_type"]) ? $srch["payment_type"] :'';
$transaction_id = isset($srch["transaction_id"]) ? $srch["transaction_id"] :''; 
//$fare=array();
$form_action = '';
$usertype = $_SESSION['user_type'];
if($usertype =='A')
{
	$split = explode('/',$_SERVER['REQUEST_URI']);
	$get_companyid = explode('?',$split[3]);
	$company_id = $get_companyid[0];
	$form_action = URL_BASE.'transaction/companytransaction_list/'.$company_id.'/';
	$back_action = URL_BASE.'transaction/companytransaction/'.$company_id.'/';
}
else
{
	$form_action = URL_BASE.'transaction/companytransaction_list/'.$list.'/';
	$back_action = URL_BASE.'transaction/companytransaction/'.$list.'/';
}

//For CSS class deefine in the table if the data's available
//===========================================================
$total_transaction=$ListCount;

$table_css=$export_excel_button=$export_pdf_button="";
if($total_transaction>0)
{ 
	$table_css='class="table_border"'; 
	$startdate_export = isset($srch["startdate"]) ? $srch["startdate"] :date('Y-m-01 00:00:00');
	$enddate_export = isset($srch["enddate"]) ? $srch["enddate"] :date('Y-m-d H:i:s');
	$export_excel_button='<input type="button"  title="'.__('button_export').'" class="button" value="'.__('button_export').'" onclick="location.href=\''.URL_BASE.'transaction/export/'.$list.'/?filter_company='.$_SESSION['company_id'].'&startdate='.$startdate_export.'&enddate='.$enddate_export.'&taxiid='.$taxiid.'&driver_id='.$driver_id.'&manager_id='.$manager_id.'&passengerid='.$passengerid.'&transaction_id='.$transaction_id.'&payment_type='.$payment_type.'\'" />';
	$export_pdf_button='<input type="button"  title="'.__('button_pdf').'" class="button" value="'.__('button_pdf').'" style="margin-left:20px;" onclick="location.href=\''.URL_BASE.'transaction/exportpdf/'.$list.'/?filter_company='.$_SESSION['company_id'].'&startdate='.$startdate_export.'&enddate='.$enddate_export.'&taxiid='.$taxiid.'&driver_id='.$driver_id.'&manager_id='.$manager_id.'&passengerid='.$passengerid.'&transaction_id='.$transaction_id.'&payment_type='.$payment_type.'\'" />'; 
 }?>

<div class="container_content fl clr">
	<div class="cont_container mt15 mt10">
		<div class="content_middle"> 
        <form method="get" class="form" name="managedriver" id="managedriver" action="<?php echo $form_action; ?>" onsubmit="return validatetranaction_form();">
		<table class="list_table1" border="0" width="100%" cellpadding="5" cellspacing="0">
				<tr>
				
				<td valign="middlle"><label><?php echo __('manager_name'); ?></label></td>
				<td id="manager_list">
					<div class="selector" id="uniform-user_type">
						<select name="manager_id" id="manager_id" onchange="managertaxi(this.value),managerdriver(this.value)">
							<?php if(count($managerlist) > 0) { ?>
							<option value="All"><?php echo __('all_label');?></option>
							<?php
							foreach($managerlist as $values) {
								$mid = isset($values["id"])?$values["id"]:$values["_id"];
								$managername = $values["name"].' '.$values["lastname"];
								$selected_status = ($manager_id == $mid) ? ' selected="selected" ' : " ";
								echo '<option value="'.$mid.'"'.$selected_status.'>'.ucfirst($managername).'</option>';
								}
							} else { 
								echo '<option value="">'.__('select_label').'</option>';
							}?>
						</select>
					</div>
				</td>
								
				<td valign="top"><label><?php echo __('taxi'); ?></label></td>
				<td id="taxi_list">
					<div class="selector" id="uniform-user_type">
						<select name="taxiid" id="taxiid" class="select2">
						<?php if(count($taxilist) > 0) { ?>
						<option value="All"><?php echo __('all_label');?></option>
							<?php
								foreach($taxilist as $key=>$values) {
									$tx_id = isset($values["taxi_id"])?$values["taxi_id"]:$values["_id"];
									$selected_status = ($taxiid == $tx_id) ? ' selected="selected" ' : " ";
									
									echo '<option value="'.$tx_id.'"'.$selected_status.'>'.$values["taxi_no"].'</option>';
								}
							} else { 
									echo '<option value="">'.__('select_label').'</option>';
							}?>
						</select>
					</div>
				</td>
				<td valign="top"><label><?php echo __('driver_name'); ?></label></td>
				<td id="driver_list">
					<div class="selector" id="uniform-user_type">
						<select name="driver_id" id="driver_id">
							<?php if(count($driverlist) > 0) { ?>
							<option value="All"><?php echo __('all_label');?></option>
							<?php
								foreach($driverlist as $key=>$values) { 
								$drivername = $values["name"].' '.$values["lastname"];
								$did = isset($values["id"])?$values["id"]:$values["_id"];
								$selected_status = ($driver_id == $did) ? ' selected="selected" ' : " ";
								echo '<option value="'.$did.'"'.$selected_status.'>'.ucfirst($drivername).'</option>';
								}
							} else { 
								echo '<option value="">'.__('select_label').'</option>';
							}?>
						</select>
					</div>
				</td>
				</tr>
				<tr>
				<td valign="middlle"><label><?php echo __('passenger_name'); ?></label></td>
						<td id="taxi_list">
							<div class="selector" id="uniform-user_type">
								<?php  //print_r($passengerlist);?>
								<select name="passengerid" id="passengerid" class="select2">
								<?php
								if(count($passengerlist) > 0) { ?>
								<option value="All"><?php echo __('all_label');?></option>
								<?php
								foreach($passengerlist as $key=>$values) { 
									$passengername = ucfirst($values["name"][0]).'-'.ucfirst($values["company_name"]);
									$selected_status = ($passengerid == $values['id']) ? ' selected="selected" ' : " ";
								echo '<option value="'.$values["id"].'"'.$selected_status.'>'.$passengername.'</option>';
								 } } else { 
											  echo '<option value="">'.__('select_label').'</option>';
										  }?>
								</select>
							</div>
						</td>  
				
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
			<td valign="middle"><label><?php echo __('transactionid_label'); ?></label></td>
                        <td valign="top">
						<div class="new_input_field_transaction">
								  <input type="text"  title="<?php echo __('enter_the_transaction_id'); ?>" id="transaction_id" name="transaction_id" value="<?php echo $transaction_id;?>"  />
						 <span id="startdate_error" class="error"></span>		 
						 </div>
						
                        </td>   
			 <?php }
			else
			{ ?>
			  <input type="hidden"  title="<?php echo __('enter_the_transaction_id'); ?>" id="transaction_id" name="transaction_id" value=""  />
			<?php } ?>

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
									}
								} else { 
										echo '<option value="">'.__('select_label').'</option>';
								}?>
							</select>
						</div>
					</td> 
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
			//echo '<pre>';print_r($grpahdata);exit;
			//$amt = 0;
			//$i =0;
			foreach($grpahdata as $gdata)
			{
				//$amt += $gdata['amount'];
				
				//$fare[$amt] = $i;
				$fare[] = $gdata['amount'];
				//$mth = "'".date( "d",strtotime($gdata['createdate']))." ".date( "M",strtotime($gdata['createdate']))."'";
				$month[] = "'".date( "d",strtotime($gdata['createdate']))." ".date( "M",strtotime($gdata['createdate']))."'";;
				//$month[$mth] =$i;
				//$i++;
			}
			//$fare = array_flip($fare);
			//$month = array_flip($month);
			
			if($fare){
				$fare = implode(",",$fare);
			}
			if($month){
				$month = implode(",",$month);
			}
			//echo '<pre>';print_r($fare);print_r($month);exit;
		?>
		 <div class="chart" id="transaction_chart"></div>
			</div>
<?php } else { echo "<div class='nodata'  style='padding:0px 10px 8px 0;'>".__('no_data')."</div></div>"; } ?>
        </div>
		<?php } ?>
                		<div class="widget">
		<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" /><h6><?php echo $page_title; ?></h6>
		<div style="width:auto; float:right; margin: -5px 3px;">
		<div class="button greyishB"> <?php echo $export_excel_button; ?></div>                       
		<div class="button greyishB"> <?php echo $export_pdf_button; ?></div>                       
		</div>
		</div>
<?php if($total_transaction > 0){ ?>
<div class= "overflow-block">
<?php } ?>		
<table cellspacing="1" cellpadding="15" width="150%" align="center" class="sTable responsive">
<?php if($total_transaction > 0){ ?>
<thead>
	<tr>
		<td align="left" width="5%"><?php echo __('sno_label'); ?></td>
		<?php if($list != 'rejected') { ?>
		<td align="left" width="15%"><?php echo __('cctransaction_id'); ?></td>
		<td align="left" width="10%"><?php echo __('payment_type'); ?></td>
		<td align="left" width="10%"><?php echo __('trip_id'); ?></td>
		<?php } ?>
		<td align="left" width="10%"><?php echo __('passenger_name'); ?></td>
		<td align="left" width="10%"><?php echo ucfirst(__('driver_name')); ?></td>
		<td align="left" width="10%"><?php echo __('journey_date'); ?></td>
		<td align="left" width="10%"><?php echo __('pickuploc_droploc'); ?></td>
		<?php /*<td align="left" width="10%"><?php echo __('Drop_Location'); ?></td>
		<td align="left" width="10%"><?php echo __('No_Passengers'); ?></td>
		<td align="left" width="10%"><?php echo __('admin_commision'); ?></td>
		<td align="left" width="10%"><?php echo __('company_commision'); ?></td>
		<td align="left" width="10%"><?php echo __('package_type'); ?></td>*/ ?>
		<?php if($list != 'rejected') { ?>
		<?php if($list != 'cancelled') { ?>
		<td align="left" width="10%"><?php echo __('distance'); ?></td>
		<td align="left" width="10%"><?php echo __('nightfare'); ?></td>
		<td align="left" width="10%"><?php echo __('eveningfare'); ?></td>
		<?php } ?>
		<td align="left" width="10%"><?php echo __('wallet_amount'); ?></td>
		<td align="left" width="10%"><?php if($list == 'cancelled') { echo __('cancel_fare'); } else { echo __('trip_total_fare'); }?></td>
		<td align="left" width="10%"><?php echo __('equivalent_to_usd').CURRENCY_FORMAT; ?></td>
		<?php if($list != 'success') { ?>
		<td align="left" width="10%"><?php echo __('travel_status'); ?></td>
		<?php } ?>
		<?php /*<td align="left" width="10%"><?php echo __('rating_points');?></td>
		<td align="left" width="10%"><?php echo __('comments');?></td> */ ?>
		<?php } 
		else {	?>
		<td align="left" width="5%"><?php echo __('travel_status');?></td>
		<td align="left" width="5%"><?php echo __('reason');?></td>
		<?php } ?>

	</tr>
</thead>
<tbody>	
		<?php
		/* For Serial No */
		$sno=$Offset; 
		$totalfare="";
		
		//echo '<pre>';print_r($all_transaction_list);exit;
		 foreach($all_transaction_list as $key=>$listings) {
		 //S.No Increment
		 //==============
		 $sno++;        
         //For Odd / Even Rows
         //===================
         $trcolor=($sno%2==0) ? 'oddtr' : 'eventr';
         $company_currency = $listings['company_id'];
		 $ccur = findcompany_currency($company_currency);
		 $transaction_id = isset($listings['transaction_id'])?$listings['transaction_id']:'';
		$passengers_log_id = isset($listings['passengers_log_id'])?$listings['passengers_log_id']:'';
		$payment_type = isset($listings['payment_type'])?$listings['payment_type']:'';
		$passenger_name = isset($listings['passenger_name'][0])?$listings['passenger_name'][0]:'';
		$nightfare = isset($listings['nightfare'])?$listings['nightfare']:0;
		$eveningfare = isset($listings['eveningfare'])?$listings['eveningfare']:0;
		$fare = isset($listings['fare'])?$listings['fare']:0;
		$admin_amount = isset($listings['admin_amount'])?$listings['admin_amount']:0;
		$company_amount = isset($listings['company_amount'])?$listings['company_amount']:0;
		$distance_unit = isset($listings['distance_unit'])?$listings['distance_unit']:'';
        ?>     
		<tr class="<?php echo $trcolor; ?>">
			<td><?php echo $sno; ?></td>
			<?php if($list != 'rejected') { ?>
			<td><?php if( $transaction_id!= "")
				{?>
				<a href="<?php echo URL_BASE.'transaction/transaction_details/'.$passengers_log_id;?>"><?php echo $transaction_id; ?></a>
				<?php } else { ?>
				- <?php } ?></td>
			<td><?php if($payment_type == 2) { echo __('credit_card_paypal'); } else if($payment_type == 4) { echo __('account'); } else if($payment_type == 3){ echo __('new_credit_card'); } else { echo __('cash'); } ?></td>
			<td><a href="<?php echo URL_BASE.'transaction/transaction_details/'.$passengers_log_id;?>"><?php echo $passengers_log_id; ?></a></td>
			<?php } ?>

			
			<td><?php echo ucfirst($passenger_name); ?></td>
			<td><a href="<?php echo URL_BASE.'manage/driverinfo/'.$listings['driver_id'];?>"><?php echo wordwrap(ucfirst($listings['driver_name']),30,'<br/>',1); ?></a></td>
			<td><?php echo $listings['createdate'];?></td>
			<?php 
			$pic_loc = $listings['current_location'];
			$drop_loc = $listings['drop_location'];
			?>
			<td><b>Pickup</b><br/><?php echo ($pic_loc != 'No address found')?(substr($pic_loc,0,25).'...'):(substr($pic_loc,0,25));?><br/><b>Drop</b><br/><?php echo ($drop_loc != 'No address found')?(substr($drop_loc,0,25).'...'):(substr($drop_loc,0,25));?></td>
			<?php /*<td><?php //echo $listings['drop_location'];?></td>
			<td><?php //echo $listings['no_passengers'];?></td>
			<td><?php //echo $listings['admin_amount'];?></td>
			<td><?php //echo $listings['company_amount'];?></td>
			<td><?php //if($listings['trans_packtype'] == 'T' ) { echo __('transaction_based_commission'); } else if($listings['trans_packtype'] == 'P' ) { echo __('package_based_commission'); } else if($listings['trans_packtype'] == 'N' ) { echo __('package_based_no_commission'); } ?> </td>*/ ?>
			<?php if($list != 'rejected') { ?>
			<?php if($list != 'cancelled') { ?>
			<td><?php if($listings['distance'] == 0) { echo '-'; } else { echo round($listings['distance'],2).' '.$distance_unit;}?></td>			
			<td><?php if($nightfare == 0) { echo '-'; } else { echo $ccur.round($nightfare,2);}?></td>
			<td><?php if($eveningfare == 0) { echo '-'; } else { echo $ccur.round($eveningfare,2);}?></td>
			<?php } ?>
			
			
			<td><?php 
			if($listings['used_wallet_amount'] == 0) { echo '-'; } else { echo $ccur.round($listings['used_wallet_amount'],2);}?></td>
			<td><?php 
			if($fare == 0) { echo '-'; } else { echo $ccur.round($fare,2);}?></td>
			<td><?php if($fare == 0) { echo '-'; $convet_amt = 0; } else {
				$ccur_for = findcompany_currencyformat($company_currency);
			$convet_amt = currency_conversion($ccur_for,$fare);
			echo round($convet_amt,2);}?></td>

			<?php if($list != 'success') { ?>
			<td><?php if($listings['travel_status'] == 0) { echo __('not_completed'); } else if($listings['travel_status'] == 1) { echo __('completed'); } else if($listings['travel_status'] == 2) { echo __('inprogress'); } else if($listings['travel_status'] == 3) { echo __('start_to_pickup'); } else if($listings['travel_status'] == 4) { echo __('cancel_by_passenger'); } ?> </td>
			<?php } ?>

			<!--<td><?php //if($listings['rating'] == 0) { echo '-'; } else { echo $listings['rating']; }?></td>
			<td><?php //echo $listings['comments']; ?></td>-->
			<?php }
			else { ?>
			<td><?php if($listings['driver_reply'] == 'C') { echo __('cancelled_by_driver'); } else { echo __('rejected_by_driver'); }?></td>
			<td><?php if($listings['driver_comments'] == '') { echo '-'; } else { echo $listings['driver_comments']; }?></td>	
			<?php } ?>
		</tr>
		<?php
			if($list != 'rejected') { 
				$totalfare +=$convet_amt;
			}
			}?>

		<?php if($list != 'rejected') { ?>
		<tr>
			<?php if($list != 'cancelled') { ?>
			<td></td>
			<?php } ?>
			<td></td><td></td><td></td>
			<td></td><td></td><td></td><?php /*<td></td><td></td><td></td>*/ ?>
			<?php if($list != 'success') { ?>
			<td></td>
			<?php } ?>
			<?php if($list == 'success') { ?><?php }?><?php if($list != 'cancelled') { ?><td></td><?php } ?><td></td><td></td><td><?php echo __('total').'('.CURRENCY.')';?></td><td><?php echo $totalfare; ?></td><td></td>
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
<div class="clr">&nbsp;</div>
<div class="pagination">
		<?php if($total_transaction > 0): ?>
		 <p><?php echo $pag_data->render(); ?></p>  
		<?php endif; ?> 
  </div>
  <div class="clr">&nbsp;</div>

</div>
</div>

<script type="text/javascript" language="javascript">

//For Delete the users
//=====================
function frmdel_user(userid)
{
   var answer = confirm("<?php echo __('delete_alert2');?>");
    
	if (answer){
        window.location="<?php echo URL_BASE;?>admin/delete/"+userid;
    }
    
    return false;  
}  
function frmblk_user(userid,status)
{   
    window.location="<?php echo URL_BASE;?>admin/blkunblk/"+userid+"/"+status;    
    return false;  
}  


$(document).ready(function(){
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
onSelect: function (selected) {
		var dt = new Date(selected);
		dt.setDate(dt.getDate() - 1);
		$("#enddate").datepicker("option", "minDate", dt);
	}
} );

$("#enddate").datetimepicker( {
showTimepicker:true,
showSecond: true,
timeFormat: 'hh:mm:ss',
dateFormat: 'yy-mm-dd',
stepHour: 1,
stepMinute: 1,
maxDateTime : new Date("<?php echo date('Y m d,H:i:s'); ?>"),
stepSecond: 1,
onSelect: function (selected) {
		var dt = new Date(selected);
		dt.setDate(dt.getDate() - 1);
		$("#startdate").datepicker("option", "maxDate", dt);
	}
} );
} );
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
$milliseconds = strtotime($startdate) * 1000;
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
	
	if($list != 'rejected') { ?>
<script type="text/javascript">
	var startdate = $('#startdate').val();
	if(startdate !='')
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
				text: 'Amount (<?php echo COMPANY_CURRENCY; ?>)'
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
			name: 'Transaction',
			data: [<?php echo $fare;?>]
		}]
	});
	
    });
</script>
	<?php
	
	}
} ?>
<script src="<?php echo SCRIPTPATH; ?>highcharts.js"></script>
