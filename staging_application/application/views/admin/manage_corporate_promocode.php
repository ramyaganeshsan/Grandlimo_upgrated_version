<?php defined('SYSPATH') OR die("No direct access allowed.");
$user_type_val = isset($srch["user_type"]) ? $srch["user_type"] :''; 
$startdate = isset($srch["startdate"]) ? $srch["startdate"] :''; 	
$enddate = isset($srch["enddate"]) ? $srch["enddate"] :''; 	
$form_action = URL_BASE.'manage/promocode/';
$back_action = URL_BASE.'manage/promocode/';
?>
<link rel="stylesheet" href="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/css/ui-lightness/jquery-ui-1.8.11.custom.css" />
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/js/jquery-1.5.1.min.js"></script>
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/js/jquery-ui-1.8.11.custom.min.js"></script>
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-timepicker-addon.js"></script>
<!-- Promocode Image Download -->
<script src="<?php echo URL_BASE;?>public/js/html2canvas.js"></script>
<!-- Promocode Image Download -->



<div class="container_content fl clr">
	<div class="cont_container mt15 mt10">
		<div class="content_middle">
			<form method="get" class="form" name="manage_model" id="manage_model" action="<?php $form_action ?>">
<table class="list_table1" border="0" width="100%" cellpadding="5" cellspacing="0">
 <tr>
						<td valign="middle"><label><?php echo __('promocode'); ?></label></td>
                        <td width="20%" >
                            <div class="new_input_field">
                                <input type="text" name="keyword"  maxlength="256" style="width:94%;" id="keyword" value="<?php echo isset($srch['keyword']) ? trim($srch['keyword']) : ''; ?>" />
                            </div>
                        </td>
                         <td valign="middle" width="8%"><label><?php echo __('start_date'); ?></label></td>
                        <td valign="middle" width="8%"><label><?php echo __('from_date'); ?></label></td>
                        <td >
						<div class="new_input_field">
								  <input type="text" readonly  title="<?php echo __('select_datetime'); ?>" id="startdate" name="startdate" value="<?php echo isset($srch['startdate']) ? trim($srch['startdate']) : ''; ?>"  />
						 <span id="startdate_error" class="error"></span>		 
						 </div>
						
                        </td>       
                        <td valign="middle" width="8%"><label><?php echo __('end_date'); ?></label></td>
                        <td>
						<div class="new_input_field">
								  <input type="text"  readonly  title="<?php echo __('select_datetime'); ?>" id="enddate" name="enddate" value="<?php echo isset($srch['enddate']) ? trim($srch['enddate']) : ''; ?>"  />
						<span id="enddate_error" class="error"></span>							
						</div>
                        </td>   
			</tr>
			<tr> <td></td><td></td>
				<?php /* if($_SESSION['user_type'] =='A') { ?>
					<td valign="middle"><label><?php echo __('company'); ?></label></td>
                        <td width="20%" >
                            <div class="new_input_field">
                                <select name="company" id="company" style="width:190px;" class="required">
									<option value=""><?php echo __('All'); ?></option>
									<?php 
									$field_type =''; if(isset($srch['company'])){ $field_type =  $srch['company']; } 
									if(count($taxicompany_details) > 0) { ?>
										<?php foreach($taxicompany_details as $company_list) { ?>
										<option value="<?php echo $company_list['cid']; ?>" <?php if($field_type == $company_list['cid']) { echo 'selected=selected'; } ?> ><?php echo ucfirst($company_list["company_name"]); ?></option>
										<?php } ?>
									<?php } ?>
								 </select>
                            </div>
                        </td>
                   <?php } else { ?>
                   <td></td><td></td>
                   <?php } */?>
					<td valign="middle" width="8%"><label><?php echo __('expire_date'); ?></label></td>
					<td valign="middle" width="8%"><label><?php echo __('from_date'); ?></label></td>
					<td >
					<div class="new_input_field">
							  <input type="text" readonly  title="<?php echo __('select_datetime'); ?>" id="e_startdate" name="e_startdate" value="<?php echo isset($srch['e_startdate']) ? trim($srch['e_startdate']) : ''; ?>"  />
					 <span id="startdate_error" class="error"></span>		 
					 </div>
					
					</td>       
					<td valign="middle" width="8%"><label><?php echo __('end_date'); ?></label></td>
					<td>
					<div class="new_input_field">
							<input type="text" readonly  title="<?php echo __('select_datetime'); ?>" id="e_enddate" name="e_enddate" value="<?php echo isset($srch['e_enddate']) ? trim($srch['e_enddate']) : ''; ?>"  />
							<span id="enddate_error" class="error"></span>								

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
							<input type="button" value="<?php echo __('button_cancel'); ?>" title="<?php echo __('button_cancel'); ?>" onclick="location.href = '<?php echo $back_action; ?>'" />
						</div>
					</td>
                 </tr>
                </table>

     		<div class="widget">
		<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" /><h6><?php echo $page_title; ?></h6>
		<div style="width:auto; float:right; margin: 4px 3px;">
		<div class="button greyishB"> <?php //echo $export_excel_button; ?></div>                       
		</div>
		</div>       
		
		
	
<?php if($total_users > 0 ){ ?>
	<div class= "overflow-block">
<?php } ?>
	<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">
<?php if ($total_users >0 && is_array($promocode_list)) { ?>
		<thead>
		    <tr >
		<!--<td align="left" width="5%"></td>-->
		<td align="left" width="5%"><?php echo __('sno_label'); ?></td>
		<td align="left" width="15%"><?php echo ucfirst(__('promocode')); ?></td>
		<td align="left" width="15%"><?php echo __('coupon_packages'); ?></td>
		
		<td align="left" style="text-align:left;" width="15%"><?php echo __('start_date'); ?></td>
		<td align="left" style="text-align:left;" width="15%"><?php echo __('expiry_date'); ?></td>
		<td align="left" width="13%"><?php echo __('promo_limit'); ?></td>
		<td align="left" width="13%"><?php echo __('passengers_count'); ?></td>
		<td align="left" width="13%"><?php echo __('fixed_type_amt'); ?></td>
		<td align="left" width="50%"><?php echo __('action_label'); ?></td>
		<td align="left" width="50%"><?php echo __('preview'); ?></td>
		<td align="left" width="50%"><?php echo __('download'); ?></td>
		    </tr>
		</thead>
                  <tbody>               
               
   
  
		<?php

		$sno=$Offset; /* For Serial No */
		
		 foreach($promocode_list as $promocode_list) {
			 
		 //S.No Increment
		 //==============
		 $sno++;        
         //For Odd / Even Rows
         //===================
         $trcolor=($sno%2==0) ? 'oddtr' : 'eventr'; 
        $promodetails = $promocode_list['promodetails'];

        if(isset($promodetails['fixed_fare_apply']) && $promodetails['fixed_fare_apply']==1 ){

        	$promodetails['package_name'] = $promodetails['package_name'].' ( Fixed fare package ) ';

        	$fixed_fare_amt = 'KD '.$fixed_fare_amt = isset($promodetails['fixed_fare_amt'])?$promodetails['fixed_fare_amt']:1;
        }else{
        	$fixed_fare_amt = '-';
        }
   ?>

	<tr class="<?php echo $trcolor; ?>">
		
		<!--<td><input type="checkbox" name="uniqueId[]" id="trxn_chk<?php echo $promodetails['passenger_promoid'];?>" value="<?php echo $promodetails['passenger_promoid']; ?>" /></td>-->
		<td align="center"><?php echo $sno; ?></td>
		<td align="center"><?php echo $promodetails['promocode']; ?></td>
		<td align="center"><?php echo $promodetails['package_name']; ?></td>
	
		<td style="text-align:left;" align="center"><?php echo Commonfunction::convertphpdate('Y-m-d h:i:s A',$promodetails['start_date']); ?></td>
		<td style="text-align:left;" align="center"><?php echo Commonfunction::convertphpdate('Y-m-d h:i:s A',$promodetails['expire_date']); ?></td>
		<td align="center"><?php echo $promodetails['promo_limit']; ?></td>
		<td align="center"><?php echo $promocode_list['count']; ?></td>
		<td align="center"><?php echo $fixed_fare_amt; ?></td>
		<td align="center" width="20" colspan='0' ><?php echo '<a href='.URL_BASE.'edit/corporate_promocode/'.$promodetails['passenger_promoid'].' " title ="Edit" class="editicon"></a>' ; ?> 
		<?php echo '<a href='.URL_BASE.'manage/delete_corporate_promocode/'.$promodetails['passenger_promoid'].' " title ="Delete" class="deleteicon" onclick="return confirm(`Are you sure to delete?`)"></a>' ; ?>
			
		</td>
	<td> <div id="main_div<?php echo $promodetails['passenger_promoid'];?>" class="html-content-holder" style="background-color: #F0F0F1; color: #00cc65; width: 500px;padding-left: 25px; padding-top: 10px;">
        <strong><?php echo SITE_NAME ;?></strong><hr/>
        <h3 style="color: #3e4b51;">
         <?php echo __('promocode').' : '.$promodetails['promocode'];echo '<br />';?>
         <?php echo __('coupon_packages').' : '.$promodetails['package_name'];?>
        </h3>
        <p style="color: #3e4b51;">
             Use promo code and get discount on your Ride!</p>
      
    </div></td>
	<td>

		
		
		 <a onclick="Html2Image(<?php echo $promodetails['passenger_promoid'];?>);" data-coupon="<?php echo $promodetails['promocode']; ?>"  id="btn-Convert-Html2Image<?php echo $promodetails['passenger_promoid'];?>"><?php echo __('download');?></a></td>
	
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
	</div>

<?php if ($total_users > 0) { ?>
</div>
<?php } ?>
</form>
</div>
</div>
<div class="clr">&nbsp;</div>
<div class="pagination">
		<?php if($total_users > 0): ?>
		 <p><?php echo $pag_data->render(); ?></p>  
		<?php endif; ?> 
  </div>
  <div class="clr">&nbsp;</div>

<!--** Multiple select starts Here ** -->
<?php if(count($promocode_list) > 0)
       { ?>
          <!--<div class="select_all">
                <b><a href="javascript:selectToggle(true, 'frmusers');"><?php echo __('all_label');?></a></b><span class="pr2 pl2">|</span><b><a href="javascript:selectToggle(false, 'frmusers');"><?php echo __('select_none');?></a></b>

                <span style="padding-left:10px;">
                    <select name="more_action" id="more_action">
                        <option value=""><?php echo __('Change Status'); ?></option>
                        <option value="block_passenger_request" ><?php echo __('Block'); ?></option>
                        <option value="active_passenger_request" ><?php echo __('Active'); ?></option>
                        <option value="trash_passenger_request" ><?php echo __('Trash'); ?></option>
                    </select>
                 </span>
	        </div>
        <?php
        } ?>
<!--** Multiple select ends Here ** -->



</div>
</div>
		<script>
	/*function Html2Image(val){

	var divnew = $('main_div'+val);	
	
	html2canvas(divnew, {
      onrendered: function(canvas) {
        $('.test').html(canvas);
      }
    });
   } */
		</script>
<script type="text/javascript" language="javascript">

	
//For Delete the users
//=====================

function frmdel_user(userid)
{
   var answer = confirm("<?php echo __('delete_alert2');?>");
    
	if (answer){
        window.location="<?php echo URL_BASE;?>admin/delete_passenger/"+userid;
    }
    
    return false;  
}  
function frmblk_user(userid,status)
{   
    window.location="<?php echo URL_BASE;?>admin/blkunblk_passenger/"+userid+"/"+status;    
    return false;  
}  

</script>
<script type="text/javascript">
 /*$(document).ready(function(){
	toggle(1);
	$("input[type='text']:first", document.forms[0]).focus();
	<?php for($i=1; $i<=count($promocode_list); $i++) { ?>
		Html2Image(<?php echo $i;?>);
	<?php } ?>
	
});*/
</script>


<script type="text/javascript">

	function selectToggle(toggle, form) {
		var myForm = document.forms[form];
		for( var i=0; i < myForm.length; i++ ) { 
		    if(toggle) {
		        myForm.elements[i].checked = "checked";
		    } 
		    else
		    { myForm.elements[i].checked = ""; }
		}
	}

	
	//for More action Drop Down
	//=========================
	$('#more_action').change(function() {

		//select drop down option value
		//======================================
		var selected_val= $('#more_action').val();
		
			//perform more action reject withdraw
			//===================================		
			switch (selected_val){


					//	Current Action "reject"//block 
					//===================================

					case "block_passenger_request":
					var confirm_msg =  "<?php echo __('Are you sure want to block Request(s)?');?>";
	
					//Find checkbox whether selected or not and do more action
					//============================================================
					if($('input[type="checkbox"]').is(':checked'))
					{
				   		 var ans = confirm(confirm_msg)
				   		 if(ans){
							 document.frmusers.action="<?php echo URL_BASE;?>manageusers/block_passenger_request/index";
							 document.frmusers.submit();
						 }else{
						 	$('#more_action').val('');
						 }
	
					}
					else{
					        //alert for no record select
					        //=============================
						    alert("<?php echo __('Please select atleast one or more Record(s) to do this action');?>")	
						    $('#more_action').val('');
					}					
					break;



					//	Current Action "approve"
					//=========================

					case "active_passenger_request":
					var confirm_msg =  "<?php echo __('Are you sure want to Activate Request(s)?');?>";


						//Find checkbox whether selected or not and do more action
						//============================================================
						if($('input[type="checkbox"]').is(':checked'))
						{
					   		 var ans = confirm(confirm_msg)
					   		 if(ans){
								 document.frmusers.action="<?php echo URL_BASE;?>manageusers/active_passenger_request/index";
								 document.frmusers.submit();
							 }else{
							 	$('#more_action').val('');
							 }		
						}
						else{
						        //alert for no record select
						        //=============================
							    alert("<?php echo __('Please select atleast one or more Record(s) to do this action');?>")	
							    $('#more_action').val('');
						}						

					break;


                	//	Current Action "trash"
					//==========================

					case "trash_passenger_request":
					var confirm_msg =  "<?php echo __('Are you sure want to move Request(s) to Trash ?');?>";


						//Find checkbox whether selected or not and do more action
						//============================================================
						if($('input[type="checkbox"]').is(':checked'))
						{
					   		 var ans = confirm(confirm_msg)
					   		 if(ans){
								 document.frmusers.action="<?php echo URL_BASE;?>manageusers/trash_passenger_request/index";
								 document.frmusers.submit();
							 }else{
							 	$('#more_action').val('');
							 }		
						}
						else{
						        //alert for no record select
						        //=============================
							    alert("<?php echo __('Please select atleast one or more Record(s) to do this action');?>")	
							    $('#more_action').val('');
						}						

					break;
				}		
			return false;  
	});
	
$(document).ready(function(){
toggle(25);
$("input[type='text']:first", document.forms[0]).focus();
$("#startdate").datetimepicker( {
showTimepicker:true,
showSecond: true,
timeFormat: 'hh:mm:ss',
dateFormat: 'yy-mm-dd',
stepHour: 1,
stepMinute: 1,
stepSecond: 1,
 onSelect: function (selected) {
	/*var dt = new Date(selected);
	console.log(dt);
	dt.setDate(dt.getDate() + 1);
	$("#enddate").datepicker("option", "minDate", dt);*/
	var timev = new Date($(this).datetimepicker('getDate').getTime());
	//$('#enddate').datetimepicker('setDate',timev);
    $( "#enddate" ).datetimepicker( "option", "minDateTime", timev );
}
} );

$("#enddate").datetimepicker( {
showTimepicker:true,
showSecond: true,
timeFormat: 'hh:mm:ss',
dateFormat: 'yy-mm-dd',
stepHour: 1,
stepMinute: 1,
stepSecond: 1,
onSelect: function (selected) {
		/*var edt = new Date(selected);
		edt.setDate(edt.getDate() - 1);
		$("#startdate").datepicker("option", "maxDate", edt);*/
		var timev = new Date($(this).datetimepicker('getDate').getTime());
		//$('#startdate').datetimepicker('setDate',timev);
		$( "#startdate" ).datetimepicker( "option", "maxDate", timev );
	}
} );

$("#e_startdate").datetimepicker( {
showTimepicker:true,
showSecond: true,
timeFormat: 'hh:mm:ss',
dateFormat: 'yy-mm-dd',
stepHour: 1,
stepMinute: 1,
stepSecond: 1,
onSelect: function (selected) {
		var dt = new Date(selected);
		dt.setDate(dt.getDate() + 1);
		$("#e_enddate").datepicker("option", "minDate", dt);
	}
} );

$("#e_enddate").datetimepicker( {
showTimepicker:true,
showSecond: true,
timeFormat: 'hh:mm:ss',
dateFormat: 'yy-mm-dd',
stepHour: 1,
stepMinute: 1,
stepSecond: 1,
onSelect: function (selected) {
		var edt = new Date(selected);
		edt.setDate(edt.getDate() - 1);
		$("#e_startdate").datepicker("option", "maxDate", edt);
	}
} );
} );


function Html2Image(val){
var element = $('#main_div'+val);	
var data_coupon = $("#btn-Convert-Html2Image"+val).attr('data-coupon');//alert(data_coupon);
//var element = $("#html-content-holder"); // global variable
var getCanvas; // global variable
html2canvas(element, {
onrendered: function (canvas) {
getCanvas = canvas;
}
});
$("#btn-Convert-Html2Image"+val).click(function(){
//$("#btn-Convert-Html2Image"+val).on('click', function () {
var imgageData = getCanvas.toDataURL("image/png");
var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
$("#btn-Convert-Html2Image"+val).attr("download", "coupon_"+data_coupon+".png").attr("href", newData);
});
}


</script>
<?php
for($i=1; $i<=count($promocode_list); $i++) { 
    echo '<script type="text/javascript">', 'Html2Image($i);','</script>';
}
?>
