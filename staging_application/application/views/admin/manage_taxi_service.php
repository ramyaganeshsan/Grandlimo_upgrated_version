<?php defined('SYSPATH') OR die("No direct access allowed.");
//For search values
//=================
$user_type_val = isset($srch["user_type"]) ? $srch["user_type"] :''; 
//$company_val = isset($srch["filter_company"]) ? $srch["filter_company"] :''; 
$company_val = COMPANY_CID;
$status_val = isset($srch["status"]) ? $srch["status"] :''; 							
$keyword = isset($srch["keyword"]) ? $srch["keyword"] :''; 

//For CSS class deefine in the table if the data's available
//===========================================================
$total_count=$ListCount;

$table_css=$export_excel_button="";
if($total_count>0)
{ 
$table_css='class="table_border"'; 
$export_excel_button='<input type="button"  title="'.__('button_export').'" class="button" value="'.__('button_export').'" onclick="location.href=\''.URL_BASE.'manage/export?keyword='.$keyword.'&status='.$status_val.'&type='.$user_type_val.'\'" />';
}
?>
<style>
.alert-message {
    font-family: sans-serif;
    margin: 20px;
    font-weight: bold;
    
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    
    padding: 1px;
    position: relative;
    font-size: 12px;
    width:570px;
}

.alert-message .close {
    color: #745050;
    text-decoration: none;
    float: right;
    margin: 7px 7px 0 0;
    font-weight: bold;
    font-size: 16px;
}

.alert-message p {
    display: block;
    margin: 0;
    padding: 8px 20px 7px 10px;
    
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
}

.error {
    background-color: #d29191;
    
    -webkit-box-shadow: 0px 0px 6px rgba(244,187,187,0.7);
    -moz-box-shadow: 0px 0px 6px rgba(244,187,187,0.7);
    box-shadow: 0px 0px 6px rgba(244,187,187,0.7);
}

.error p {
    background-color: #f4baba;
    
    background-image: -webkit-gradient(linear, left top, left bottom, from(#f4baba), to(#db7f7f));
    background-image: -webkit-linear-gradient(top, #f4baba, #db7f7f);
    background-image: -moz-linear-gradient(top, #f4baba, #db7f7f);
    background-image: -ms-linear-gradient(top, #f4baba, #db7f7f);
    background-image: -o-linear-gradient(top, #f4baba, #db7f7f);
    background-image: linear-gradient(top, #f4baba, #db7f7f);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorStr='#f4baba', EndColorStr='#db7f7f');
    
    -webkit-box-shadow: inset 0px 1px 0px #f7d0d0;
    -moz-box-shadow: inset 0px 1px 0px #f7d0d0;
    box-shadow: inset 0px 1px 0px #f7d0d0;
    
    color: #745050;
    text-shadow: 1px 1px 0px #eaadad;
    font-size:13px;
}
</style>
<div class="container_content fl clr">
	<div class="cont_container mt15 mt10">
		<div class="content_middle">
		<form method="get" class="form" name="managetaxi" id="managetaxi" action="taxi_service">
			<table class="list_table1" border="0" width="65%" cellpadding="5" cellspacing="0">
				<tr>
                        <td valign="top"><label><?php echo __('keyword_label'); ?></label></td>
                        <td >
                            <div class="new_input_field">
                                <input type="text" name="keyword"  maxlength="256" id="keyword" value="<?php echo isset($srch['keyword']) ? trim($srch['keyword']) : ''; ?>" />
                            </div>
                            <span class="search_info_label"><?php echo __('search_by_taxi_driver'); ?></span>
                        </td>
                        <td valign="top"><label><?php echo __('status_label'); ?></label></td>
                        <td valign="top">
			<div class="selector" id="uniform-user_type">
                            <select class="select2" name="status" id="status" onchange="this.form.submit()">
                                <option value=""><?php echo __('status_label'); ?></option>    
                                <option value="A" <?php echo ($status_val == "A") ? ' selected="selected" ' : " ";?>><?php echo __('service_done'); ?></option>    
                                <option value="D" <?php echo ($status_val == "D") ? ' selected="selected" ' : " ";?>><?php echo __('service_not_done'); ?></option>                                    
                            </select>
                            </div>
                        </td>
                         <?php if($_SESSION['user_type'] == 'A') { ?>
							  <div class="selector" id="uniform-user_type" style="display:none;">
                       <?php /*  <td valign="top"><label><?php echo __('company'); ?></label></td> */ ?>
                        <td valign="top">
                            <select class="select2" name="filter_company" id="filter_company" onchange="this.form.submit()">
                                <option value=""><?php echo __('select_label'); ?></option>    
                                <?php 
                                foreach ($all_companies as $comapany_list) {

                                    $selected_status = ($company_val == $comapany_list['cid']) ? ' selected="selected" ' : " ";
                                    ?>  
                                    <option value="<?php echo $comapany_list['cid']; ?>"  <?php echo $selected_status; ?> ><?php echo ucfirst($comapany_list['company_name']); ?></option>
                                <?php }  ?>
                            </select>
                          
                        </td>     
                          </div>
                        <?php } ?>  
                        </tr>
                        <tr>
                        <td valign="top"><label>&nbsp;</label></td>
                        <td>
                            <div class="button brownB">
                                <input type="submit" value="<?php echo __('button_search'); ?>" name="search_user" title="<?php echo __('button_search'); ?>" />
                            </div>
                            <div class="button blueB">
                                <input type="button" value="<?php echo __('button_cancel'); ?>" title="<?php echo __('button_cancel'); ?>" onclick="location.href = '<?php echo URL_BASE; ?>manage/taxi_service'" />
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
<?php if($total_count > 0){ ?>
<div class= "overflow-block">
<?php } ?>
<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">
<?php if($total_count > 0){ ?>
<thead>
	<tr class="rowhead">
		<td align="left" width="50"><?php echo __('Select'); ?></td>
		<td align="left" width="50"><?php echo __('sno_label'); ?></td>		
		<td align="left" width="100" style="min-width: 22px !important;" ><?php echo __('status_label'); ?></td>
		<td align="left" width="150"><?php echo __('taxi_no'); ?></td>		
		<td align="left" width="100"><?php echo __('taxi_model'); ?></td>
		<td align="left" width="10%"><?php echo __('taxi_current_km'); ?></td> 
		<td align="left" width="10%"><?php echo __('driver'); ?></td> 
		<td align="left" width="10%"><?php echo __('start_km'); ?></td> 
		<td align="left" width="10%"><?php echo __('end_km'); ?></td> 
		<td align="left" width="100"><?php echo __('milestone_label'); ?></td> 
		<td align="left" width="100"><?php echo __('reached_milestone_km'); ?></td> 				
		<td align="left" width="100"><?php echo __('create_date'); ?></td> 				
	</tr>
	</thead>
	<tbody>	
		<?php
         $sno=$Offset; /* For Serial No */
		 foreach($all_taxi_service_list as $listings) {		 
		 //S.No Increment
		 //==============
		 $sno++;        
         //For Odd / Even Rows
         //===================
         $trcolor=($sno%2==0) ? 'oddtr' : 'eventr';  
        ?>     
        <tr class="<?php echo $trcolor; ?>">
                    <td align="center" style="width:5%;"><input type="checkbox" name="uniqueId[]" id="trxn_chk<?php echo $listings['service_id'];?>" value="<?php echo $listings['service_id'];?>" /></td>
					<td align="center" style="width:5%;"><?php echo $sno; ?></td>
                    <td align="center" style="width:5%;"> 
						<?php 
							if($listings['service_status']=='A') {
								$txt = __('service_done'); $class ="unsuspendicon";
							} else{
								$txt = __('service_not_done'); $class ="blockicon";
							}
							
							echo '<a  title ="'.$txt.'" class='.$class.'></a>';  ?>  
                    </td> 
			
			<td align="center" style="width:5%;"><a title="<?php echo ucfirst($listings['taxi_no']); ?>" href="<?php echo URL_BASE.'manage/taxiinfo/'.$listings['taxi_id'];?>"><?php echo wordwrap($listings['taxi_no'],25,'<br/>',1); ?></a></td>			
			
			<td align="center" style="width:5%;"><?php echo wordwrap($listings['model_name'],25,'<br />',1); ?></td>
			<td align="center" style="width:5%;"><?php echo $listings['current_km']; ?></td>
			<td align="center" style="width:5%;"><?php echo $listings['driver_name']; ?></td> 
			<td align="center" style="width:5%;"><?php echo $listings['start_km']; ?></td> 
			<td align="center" style="width:5%;"><?php echo $listings['end_km']; ?></td> 
			<td align="center" style="width:5%;"><?php echo $listings['service_label']; ?></td>
			<td align="center" style="width:5%;"><?php echo $listings['service_km']; ?></td>			
			<td align="center" style="width:10%;"><?php echo commonfunction::convertphpdate('Y-m-d',$listings['createdate']); ?></td>			
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
<?php if ($total_count > 0) { ?>
</div>
<?php } ?>
</form>
</div>
</div>
<div class="clr">&nbsp;</div>
<div class="pagination">
		<?php if($total_count > 0): ?>
		 <p><?php echo $pag_data->render(); ?></p>  
		<?php endif; ?> 
  </div>
  <div class="clr">&nbsp;</div>

<!--** Multiple select starts Here ** -->
<?php if($total_count > 0)
       { ?>
          <div class="select_all">
                <b><a href="javascript:selectToggle(true, 'managetaxi');"><?php echo __('all_label');?></a></b><span class="pr2 pl2">|</span><b><a href="javascript:selectToggle(false, 'managetaxi');"><?php echo __('select_none');?></a></b>

                <span style="padding-left:10px;">
                    <select name="more_action" id="more_action">
                        <option value=""><?php echo __('Change Status'); ?></option>                       
                        <option value="active_taxi_service_request" ><?php echo __('service_done'); ?></option>
                        <?php if(COMPANY_CID!=1 || SUBDOMAIN!='demo') { ?> 
						<option value="block_taxi_service_request" ><?php echo __('service_not_done'); ?></option>                         
                        <?php } ?>
                    </select>
                 </span>
	        </div>
        <?php
        } ?>

<!--** Multiple select ends Here ** -->
</div>
</div>

<script type="text/javascript" language="javascript">
$(document).ready(function(){
			$('#filter_company').hide();
 $("#keyword").focus(); 
	toggle(6);
});
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

		case "block_taxi_service_request":
			var confirm_msg =  "<?php echo __('Are you sure want to block Request(s)?');?>";
			//Find checkbox whether selected or not and do more action
			//============================================================
			if($('input[type="checkbox"]').is(':checked')) {
				 var ans = confirm(confirm_msg)
				 if(ans){
					 document.managetaxi.action="<?php echo URL_BASE;?>manage/block_taxi_service_request/";
					 document.managetaxi.submit();
				 }else{
					$('#more_action').val('');
				 }
			} else {
					//alert for no record select
					//=============================
					alert("<?php echo __('Please select atleast one or more Record(s) to do this action');?>");	
					$('#more_action').val('');
			}
		break;
		//	Current Action "approve"
		//=========================
		case "active_taxi_service_request":
			var confirm_msg =  "<?php echo __('Are you sure want to Activate Request(s)?');?>";
			//Find checkbox whether selected or not and do more action
			//============================================================
			if($('input[type="checkbox"]').is(':checked')) {
				 var ans = confirm(confirm_msg)
				 if(ans){
					 document.managetaxi.action="<?php echo URL_BASE;?>manage/active_taxi_service_request/";
					 document.managetaxi.submit();
				 }else{
					$('#more_action').val('');
				 }		
			} else {
					//alert for no record select
					//=============================
					alert("<?php echo __('Please select atleast one or more Record(s) to do this action');?>");
					$('#more_action').val('');
			}
		break;		
	}
	return false;  
});
</script>
