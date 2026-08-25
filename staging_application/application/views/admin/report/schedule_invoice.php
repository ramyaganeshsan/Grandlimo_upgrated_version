<?php defined('SYSPATH') OR die("No direct access allowed.");
/*$find_url = explode('/',$_SERVER['REQUEST_URI']);
$split = explode('?',$find_url[3]);  	
$list = $split[0];*/
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
$enddate = isset($srch["enddate"]) ? $srch["enddate"] :date('Y-m-d H:i:s'); 	
$taxiid = isset($srch["taxiid"]) ? $srch["taxiid"] :'';
$passengerid = isset($srch["passengerid"]) ? $srch["passengerid"] :'';
$driver_id = isset($srch["driver_id"]) ? $srch["driver_id"] :'';
$manager_id = isset($srch["manager_id"]) ? $srch["manager_id"] :'';
$status_val = isset($srch["status"]) ? $srch["status"] :'';
$keyword = isset($srch["keyword"]) ? $srch["keyword"] :''; 
$s_date = isset($srch["startdate"]) ? 2:1; 	
$e_date = isset($srch["enddate"]) ? 2:1; 
$payment_type = isset($srch["payment_type"]) ? $srch["payment_type"] :''; 
$transaction_id = isset($srch["transaction_id"]) ? $srch["transaction_id"] :''; 
$form_action = '';
$form_action = URL_BASE.'transaction/invoice';
$back_action = URL_BASE.'transaction/invoice';
$chart_currency=findcompany_currency($company_val);
//For CSS class deefine in the table if the data's available
//===========================================================
$total_transaction=count($invoice_list);
$table_css="";
if($total_transaction>0)
{ 
	$table_css='class="table_border"'; 
	$startdate_export = isset($srch["startdate"]) ? $srch["startdate"] :date('Y-m-01 00:00:00');
	$enddate_export = isset($srch["enddate"]) ? $srch["enddate"] :date('Y-m-d H:i:s');
}
?>
</script>
<div class="container_content fl clr">
	<div class="cont_container mt15 mt10">
		<div class="content_middle"> 
        <form method="get" class="form" name="schedule_trip_invoice" id="schedule_trip_invoice" action="<?php echo $form_action; ?>">
		<table class="list_table1" border="0" width="100%" cellspacing="0" cellpadding="5" >
				<tr>				
					<?php /* <td valign="middlle"><label><?php echo __('company'); ?></label></td> <td valign="top">* / ?>
					
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
					<?php / * </td>   */ ?>
					
				<?php ?><td valign="middlle"><label><?php echo __('passengers'); ?></label></td>
				<td id="manager_list">
					<div class="selector" id="uniform-user_type">
						<select name="passenger" id="passenger" onchange="">
							<?php if(count($passenger_list) > 0) { ?>
							<option value="All"><?php echo __('all_label');?></option>
							<?php
                                                        $passenger = isset($_GET['passenger'])?$_GET['passenger']:0;
                                                        $pay_s = isset($_GET['pay_status'])?$_GET['pay_status']:' ';
							foreach($passenger_list as $values) { 
								$name = $values["name"];
								$selected_status = ($passenger == $values['id']) ? ' selected="selected" ' : " ";
							echo '<option value="'.$values["id"].'"'.$selected_status.'>'.ucfirst($name).'</option>';
						 } } else { 
									  echo '<option value="">'.__('select_label').'</option>';
								  }?>
						</select>
					</div>
				</td>
										   
				<td valign="middlle"><label><?php echo __('paymentstatus'); ?></label></td>
				<td id="taxi_list">
					<div class="selector" id="uniform-user_type">
						<select name="pay_status" id="pay_status" class="select2">
						<option <?php echo ($pay_s == __('success')) ? ' selected="selected" ' : " "; ?>value="<?php echo __('success');?>"><?php echo __('success');?></option>
						<option <?php echo ($pay_s == __('pending')) ? ' selected="selected" ' : " "; ?>value="<?php echo __('pending');?>"><?php echo __('pending');?></option>
						<option <?php echo ($pay_s == __('failed')) ? ' selected="selected" ' : " "; ?>value="<?php echo __('failed');?>"><?php echo __('failed');?></option>
						</select>
					</div>
				</td>
				</tr>
				<tr>
				<?php /*?><td valign="middlle"><label><?php echo __('driver_name'); ?></label></td>
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
					</td><?php */?>
						 
						
					</tr>  
				<?php /*?><tr>  
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
				</tr><?php */?>
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
		
                		<div class="widget">
		


<?php if($total_transaction > 0){ ?>
<div class= "overflow-block">
<?php } ?>		
<table cellspacing="1" cellpadding="11" width="100%" align="center" class="sTable responsive">
<?php if($total_transaction > 0){ ?>
<thead>
	<tr>
		<td align="left" width="5%"><?php echo __('sno_label'); ?></td>
		<td align="left" width="10%"><?php echo __('invoice'); ?></td>
		<td align="left" width="10%"><?php echo __('passenger_name'); ?></td>
		<td align="left" width="10%"><?php echo __('created_date'); ?></td>
		<td align="left" width="10%"><?php echo __('amount'); ?></td>
		<td align="left" width="10%"><?php echo __('paymentstatus'); ?></td>
		<td align="left" width="30%"><?php echo __('duration'); ?></td>
		<td align="left" width="5%"><?php echo __('file'); ?></td>
	</tr>
</thead>
<tbody>	
		<?php
		/* For Serial No */
		$sno=$Offset; 
		$totalfare="";
		//print "<pre>";
		//print_r($invoice_list); exit;
		 foreach($invoice_list as $listings) { 
			 
			//S.No Increment
		 //==============
		 $sno++;        
         //For Odd / Even Rows
         //===================
                $trcolor=($sno%2==0) ? 'oddtr' : 'eventr';
		$invoice = isset($listings['invoice'])?$listings['invoice']:'-';
		$name = isset($listings['name'])?$listings['name']:'-';
		$created_date = isset($listings['created_date'])?$listings['created_date']:'-';
		$amount = isset($listings['amt'])?$listings['amt']:'-';
		$pay_status = isset($listings['pay_status'])?$listings['pay_status']:'-';
		$period = isset($listings['period'])?$listings['period']:'-';
		$pdffile = isset($listings['file'])?$listings['file']:'';
		?>
		<tr class="<?php echo $trcolor; ?>">
                    <td><?php echo $sno; ?></td>
                    <td><?php echo $invoice; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo Commonfunction::convertphpdate('d-M-Y', $created_date); ?></td>
                    <td><?php echo $amount; ?></td>
                    <td><?php echo "<strong>".$pay_status."</strong>"; ?></td>
                    <td><?php echo $period; ?></td>
                    <td> <a href="<?php echo URL_BASE.$pdffile; ?>" target="_blank" title="Download Invoice"><li class="icon-download-alt"></li></a></td>
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
		onSelect: function (selected) {
			var dt = new Date(selected);
			dt.setDate(dt.getDate() + 1);
			$("#enddate").datepicker("option", "minDate", dt);
		}
	});
	
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