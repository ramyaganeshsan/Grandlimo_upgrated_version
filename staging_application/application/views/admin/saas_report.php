<?php defined('SYSPATH') OR die("No direct access allowed."); ?>
<?php $find_url = explode('/',$_SERVER['REQUEST_URI']);
$split = explode('?',$find_url[2]);  	
$list = $split[0];
$totalfare = "";
$adminfare = "";
$companyfare = "";
?> 
<link rel="stylesheet" href="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/css/ui-lightness/jquery-ui-1.8.11.custom.css" />
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/js/jquery-1.5.1.min.js"></script>
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/js/jquery-ui-1.8.11.custom.min.js"></script>
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-timepicker-addon.js"></script>
<script src="<?php echo URL_BASE;?>public/js/transaction.js"></script>
<?php
//For search values
//=================

$startdate = isset($srch["startdate"]) ? $srch["startdate"] :""; 	
$enddate = isset($srch["enddate"]) ? $srch["enddate"] :"";
$pack= 	isset($srch["company_package"]) ? $srch["company_package"] :"";
$form_action = '';
$form_action = URL_BASE.'admin/saas_report_list/';
$back_action = URL_BASE.'admin/saas_report/';



//For CSS class deefine in the table if the data's available
//===========================================================
$total_transaction=count($all_company_list);
//print_r($all_company_list);exit;

$total_company=count($all_company_list);

$table_css=$export_excel_button="";

$export_excel_button='
        				<input type="button"  title="'.__('button_export').'" class="button" value="'.__('button_export').'" 
        				onclick="location.href=\''.URL_BASE.'admin/saas_excel_report/?startdate='.$startdate.'&enddate='.$enddate.'&company_package='.$pack.'\'" />'

?>
 
	<div class="cont_container mt15 mt10" style="margin-bottom: 15px;">
		<div class="content_middle"> 
        <form method="get" class="form" name="srch" id="managedriver" action="<?php echo $form_action; ?>">
		<table class="list_table1" border="0" width="100%" cellspacing="0" cellpadding="5" >
					
			<tr>
			<td valign="middle"><label><?php echo __('package'); ?></label></td>
                        <td valign="top">
						<div class="new_input_field_transaction">
							<select name="company_package">
							<option value=""> Select Package Type </option>
							<option value="1" <?php if(isset($pack)){ if($pack==1){echo "selected";}} ?>> Trial Package </option>
							<option value="2" <?php if(isset($pack)){ if($pack==2){echo "selected";}} ?>> Paid Package </option>
							</select>
									  

						 </div>	
                        </td> <td valign="middle">&nbsp;</td>   <td valign="top">&nbsp;</td>   <td valign="middle">&nbsp;</td>  <td valign="top">&nbsp;</td>    
			<?php /* <td valign="middle"><label><?php echo __('from_date'); ?></label></td>
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
                        </td>   */ ?>
			
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
		
</div>
			</div>

        
<div class="widget">
		<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" /><h6><?php echo $page_title; ?></h6>
		<?php   if(count($all_company_list) > 0){ ?>
		<div style="width:auto; float:right; margin: -5px 3px;">
		<div class="button greyishB"> <?php echo $export_excel_button; ?></div>  
		</div>
		<?php } ?>		
		</div>
              		
<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">
<?php   if(count($all_company_list) > 0){ ?>

 <thead>
	<tr style="border-top: 1px solid #ccc;">
		<td align="left" width="5%"><?php echo __('sno_label'); ?></td>
		<td align="left" style="text-align:left;" width="10%"><?php echo __('company_name'); ?></td>
		<td align="left" style="text-align:left;" width="10%"><?php echo __('company_domain'); ?></td>
		<td align="left" style="text-align:left;" width="10%"><?php echo __('email'); ?></td>
		<td align="left" style="text-align:left;" width="10%"><?php echo __('password'); ?></td>
		<td align="left" style="text-align:left;" width="15%"><?php echo __('upgrade_date'); ?></td>
		<td align="left" style="text-align:left;" width="15%"><?php echo __('upgrade_expirydate'); ?></td>
		<td align="left" width="5%"><?php echo __('action_label'); ?></td>
		<?php /* <td align="left" width="10%"><?php echo __('company_created_date'); ?></td>	*/ ?>	
	</tr>
</thead> 
<tbody>	
		<?php
		/* For Serial No */
		$sno=$Offset; 
		
		$dt = new DateTime();
		$current_date=$dt->format('Y-m-d H:i:s'); 

		//print_r($all_company_list);exit;
		 foreach($all_company_list as $listings) {

		 //S.No Increment
		 //==============
		 $sno++;
        
         //For Odd / Even Rows
         //===================
         $trcolor=($sno%2==0) ? 'oddtr' : 'eventr';  
		 
        ?>     
<?php //print_r($listings);exit; ?>
<?php  $d1 = strtotime($current_date);
$d2 = strtotime($listings['upgrade_expirydate']);
$diff = $d2 - $d1; ?>
        <tr  class="<?php echo $trcolor;?>" <?php if($diff<0){?>  style="background-color:#ddd;" <?php } ?>>
                   
			<td><?php echo $sno; ?></td>
			<td><?php echo wordwrap(ucfirst($listings['company_name']),25,'<br />',1); ?></td>
			<td><a href="<?php echo 'http://'.$listings['companydomain']; ?>" target="_blank" title="<?php echo $listings['companydomain']; ?>"><?php echo wordwrap($listings['companydomain'],25,'<br />',1); ?></a></td>
			<td><?php echo wordwrap($listings['email'],25,'<br />',1); ?></td>
			<td><?php echo wordwrap($listings['password'],25,'<br />',1); ?></td>
			<td><?php echo $listings['upgrade_date']; ?></td>
			<td><?php echo $listings['upgrade_expirydate']; ?></td>
			<td style="text-align:center;" colspan='3' ><?php echo '<a href='.URL_BASE.'edit/upgrade_company_package/?cid='.$listings['company_cid'].' " title ="Upgrade" ><span class="icon-upload"></span></a>' ; ?></td>
			<?php /* <td><?php echo $listings['company_created_date']; ?></td> */ ?>
		</tr>
		<?php } }else{ ?>
       	<tr>
        	<td class="nodata"><?php echo __('no_data'); ?></td>
        </tr>
		
		<?php }   ?>
</tbody>
</table>	
</form>
</div>
<div class="pagination">
		<?php if(count($all_company_list)>0): ?>
		 <p><?php echo $pag_data->render(); ?></p>  
		<?php endif; ?> 
  </div>
  <div class="clr">&nbsp;</div>
</div>

       <script type="text/javascript" language="javascript">
$(document).ready(function(){
toggle(29);

$("#startdate").datetimepicker( {
showTimepicker:true,
showSecond: true,
timeFormat: 'hh:mm:ss',
dateFormat: 'yy-mm-dd',
stepHour: 1,
stepMinute: 1,
maxDateTime : new Date("<?php echo date('Y m d,H:i:s'); ?>"),
stepSecond: 1
} );

$("#enddate").datetimepicker( {
showTimepicker:true,
showSecond: true,
timeFormat: 'hh:mm:ss',
dateFormat: 'yy-mm-dd',
stepHour: 1,
stepMinute: 1,
maxDateTime : new Date("<?php echo date('Y m d,H:i:s'); ?>"),
stepSecond: 1
} );
} );
function validatetranaction_form()
{
	valid = true;

	var startdate = $('#startdate').val();
	var enddate = $('#enddate').val();
	if(startdate =="")
	{
		$('#filter_company_error').html('');
		$('#startdate_error').html("<?php echo __('select_company');?>");
		$('#startdate').focus();
		return false;		
	}	
	else if(enddate =="")
	{
		$('#startdate_error').html('');
		$('#enddate_error').html("<?php echo __('select_company');?>");
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
	$text = __('transactions');
}
?>

