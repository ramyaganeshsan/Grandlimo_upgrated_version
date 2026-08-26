<?php defined('SYSPATH') OR die("No direct access allowed.");
//For search values
//=================
$user_type_val = isset($srch["user_type"]) ? $srch["user_type"] :''; 
//$company_val = isset($srch["filter_company"]) ? $srch["filter_company"] :''; 
$company_val = COMPANY_CID;
$status_val = isset($srch["status"]) ? $srch["status"] :''; 
$keyword = isset($srch["keyword"]) ? $srch["keyword"] :''; 
$customer_type = isset($srch["customer_type"]) ? $srch["customer_type"] :''; 

$status = ['A' => 'Active','I' => 'Block','T' => 'Trash','PB'=>'Permanent Block' ];

//For CSS class deefine in the table if the data's available
//===========================================================
$total_users = $ListCount;
$table_css = $export_excel_button="";
if($total_users>0)
{
	$table_css='class="table_border"';
	$export_excel_button='<input type="button"  title="'.__('button_export').'" class="button" value="'.__('button_export').'" onclick="location.href=\''.URL_BASE.'manageusers/export?keyword='.$keyword.'&status='.$status_val.'&type='.$user_type_val.'\'" />';
}?>



<div class="container_content fl clr">
	<div class="cont_container mt15 mt10">
		<div class="content_middle">
		<form method="get" class="form" name="frmusers" id="frmusers" action="passenger_search">
			<table class="list_table1" border="0" width="65%" cellpadding="5" cellspacing="0">
                    <tr>
                        <td valign="top"><label><?php echo __('keyword_label'); ?></label></td>
                        <td >
                            <div class="new_input_field">
                                <input type="text" name="keyword"  maxlength="256" id="keyword" value="<?php echo isset($srch['keyword']) ? trim($srch['keyword']) : ''; ?>" />
                            </div>
                            <span class="search_info_label"><?php echo __('srch_info_passenger_phone_keyword'); ?></span>
                        </td>
                        <td valign="top"><label><?php echo __('status_label'); ?></label></td>
                        <td valign="top">
			<div class="selector" id="uniform-user_type">
                            <select class="select2" name="status" id="status" onchange="this.form.submit()">
                            <option value=""><?php echo __('select_label'); ?></option> 
                                <?php
                                foreach ($status as $status_key => $allstatus) {

                                    $selected_status = ($status_val == $status_key) ? ' selected="selected" ' : " ";
                                    ?>  
                                    <option value="<?php echo $status_key; ?>"  <?php echo $selected_status; ?> ><?php echo ucfirst($allstatus); ?></option>
                                <?php }  ?>
                            </select>
                            </div>
                        </td>
                        <td valign="top"><label><?php echo __('customer_type'); ?></label></td>
                        <td valign="top">
			<div class="selector" id="uniform-user_type">
                            <select class="select2" name="customer_type" id="customer_type" onchange="this.form.submit()">
                            <option <?php if($customer_type === ''){echo "selected";} ?> value="">All</option> 
                            <option <?php if($customer_type == '1'){echo "selected";} ?>  value="1">VIP</option>
                            <option <?php if($customer_type == '0'){ echo "selected";} ?> value="0">Normal</option>
                            </select>
                            </div>
                        </td>
                        <input type="hidden" name="filter_company" id="filter_company"  value="0" />
                        <?php /*if($_SESSION['user_type'] == 'A') { ?>
							<div class="selector" id="uniform-user_type" style="display:none;">
                       <?php /* <td valign="top"><label><?php echo __('company'); ?></label></td> */ /*?>
                        <td valign="top">
		
				
                            <select class="select2" name="filter_company" id="filter_company" onchange="this.form.submit()">
                                <option value=""><?php echo __('select_label'); ?></option>    
                                <option value="All" <?php echo ($company_val == 'All') ? ' selected="selected" ' : " "?>><?php echo __('all_company_not_specific'); ?></option>
                                <?php 
                                foreach ($all_companies as $comapany_list) {

                                    $selected_status = ($company_val == $comapany_list['cid']) ? ' selected="selected" ' : " ";
                                    ?>  
                                    <option value="<?php echo $comapany_list['cid']; ?>"  <?php echo $selected_status; ?> ><?php echo ucfirst($comapany_list['company_name']); ?></option>
                                <?php }  ?>
                            </select>
                           
                        </td>     
                         </div>
                        <?php }*/?>  
                        </tr>
                        <tr>
                        <td valign="top"><label>&nbsp;</label></td>
                        <td>
                            <div class="button brownB">
                                <input type="submit" value="<?php echo __('button_search'); ?>" name="search_user" title="<?php echo __('button_search'); ?>" />
                            </div>
                            <div class="button blueB">
                                <input type="button" value="<?php echo __('button_cancel'); ?>" title="<?php echo __('button_cancel'); ?>" onclick="location.href = '<?php echo URL_BASE; ?>manageusers/passengers'" />
                            </div>
                        </td>
                    </tr>
                </table>
                  <div class="widget">
                        <div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" /><h6><?php echo $page_title; ?></h6>
                           <?php /* <div style="width:auto; float:right; margin: 4px 3px;">
                                <div class="button greyishB"> <?php echo $export_excel_button; ?></div>                       
                                
                            </div>*/ ?>
                        </div>
                        
<?php if($total_users > 0){ ?>


	<div class= "overflow-block">
<?php } ?>
	<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">
<?php if ($total_users > 0) { ?>
		<thead>
		    <tr>
				<td align="left" width="5%"></td>
				<td align="left" width="5%"><?php echo __('sno_label'); ?></td>
				<td align="left" width="10%"><?php echo __('status_label'); ?></td>
				<td align="left" style="text-align:left;" width="10%"><?php echo ucfirst(__('name')); ?></td>
				<td align="left" style="text-align:left;" width="10%"><?php echo __('email_label'); ?></td>
				<td align="left" width="10%"><?php echo __('phone'); ?></td>
				<?php /* ?><td align="left" style="text-align:left;" width="20%"><?php echo __('address'); ?></td>
				
				<td align="left" style="text-align:left;" width="20%"><?php echo __('referral_code'); ?></td>
				<td align="left" style="text-align:left;" width="20%"><?php echo __('wallet_amount'); ?></td>
				<?php */ ?>
				<td align="left" style="text-align:left;" width="25%"><?php echo __('created_date'); ?></td>
				<td align="left" width="15%"><?php echo __('account_type'); ?></td>
				<td align="left" width="15%"><?php echo __('customer_type'); ?></td>
				<td align="left" width="15%"><?php echo __('wallet_amount'); ?></td>
				<td align="left" width="10%" ><?php echo __('action_label'); ?></td>
		    </tr>
		</thead>
        <tbody>          
		<?php
		$sno=$Offset; /* For Serial No */
		//print_r($all_user_list);
		 foreach($all_user_list as $listings) {
			 
		$created_date = (isset($listings['created_date']) ) ? Commonfunction::convertphpdate('Y-m-d h:i:s A',$listings['created_date']) : '-';

		if($created_date == '')
		$created_date = (isset($listings['created_date']) ) ? Date('Y-m-d h:i:s A',strtotime($listings['created_date'])) : '-';

		 //S.No Increment
		 //==============
		 $sno++;        
         //For Odd / Even Rows
         //===================
         $trcolor=($sno%2==0) ? 'oddtr' : 'eventr';  
         $country_code = (!empty($listings['country_code'])) ? $listings['country_code'].'-' : '';
         $phoneNum = isset($listings['phone'])?wordwrap($country_code.$listings['phone'],25,'<br />',1):'';
         if(!empty($listings['profile_image'])) {
			 $cusIdArr = explode(".",$listings['profile_image']);
			 if($cusIdArr[0] == $listings['phone']) {
				 $phoneNum = '-';
			 }
		 }
        ?>     

	<tr class="<?php echo $trcolor; ?>">

		<td align="center"><input type="checkbox" name="uniqueId[]" id="trxn_chk<?php echo $listings['_id'];?>" value="<?php echo $listings['_id'];?>" /></td>
		<td align="center"><?php echo $sno; ?></td>
		<td align="center"> 
		<?php if(isset($listings['user_status'])){
			if($listings['user_status']=='A'){
				$txt = __('active'); $class ="unsuspendicon";
			} elseif($listings['user_status']=='T') {
				$txt = "Trash"; $class ="trashicon";
			}elseif($listings['user_status']=='PB') {
				$txt = "Trash"; $class ="deactivate_user";
			} else{
				$txt = __('blocked'); $class ="blockicon";
			}
			echo '<a href="javascript:void(0);" title ='.$txt.' class='.$class.'></a>' ;
		} else {
			echo "-";
		}
		?>
		</td>
		<td><a title="<?php echo isset($listings['name'])?ucfirst(urldecode($listings['name'])):"-"; ?>" href="<?php echo URL_BASE.'manage/passengerinfo/'.$listings['_id'];?>"><?php echo isset($listings['name'])?wordwrap(urldecode($listings['name']),30,'<br/>',1):"-"; ?></a></td>
		<td><?php echo isset($listings['email'])?wordwrap($listings['email'],25,'<br />',1):"-"; ?></td>
		<td align="center"><?php echo $phoneNum; ?></td>
		<?php /* ?><td><?php echo isset($listings['address'])?wordwrap($listings['address'],25,'<br />',1):"-"; ?></td>
		
		<td><?php echo isset($listings['referral_code'])?$listings['referral_code']:""; ?></td>
		<td><?php echo isset($listings['wallet_amount'])?$listings['wallet_amount']:"-"; ?></td>
		<?php */ ?>
		<td><?php echo $created_date; ?></td>
		<td align="center"><?php if(isset($listings['parent_id']) && $listings['parent_id'] != 0){
		if(!empty($listings['account_type_name'])){
			$child = $listings['account_type_name'];
		echo "Child Account Type - ". $child[0];}
		}else { echo "Primary Account";}?></td>
		<td align="center">
			<?php $vip_user = isset($listings['vip_user'])?$listings['vip_user']:0;
			 if($vip_user == 1)
			 {
			 	echo __('vip_label');
			 }
			 else
			 {
			 	echo __('normal_label');
			 }
			 ?>

		</td>
		<td align="center"><?php echo isset($listings['wallet_amount'])?$listings['wallet_amount']:'-'; ?></td>
		<td align="center" colspan='3' ><?php echo '<a href='.URL_BASE.'admin/editpassenger/'.$listings['_id'].' " title ="Edit" class="editicon"></a>' ; 
			$otp = isset($listings['otp'])?$listings['otp']:'-';
			 echo '<a href='.URL_BASE.' " title =" OTP - '.$otp.'" class="transactionicon"></a>' ; ?>
		</td>
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
<?php if($total_users > 0)
       { ?>
          <div class="select_all">
                <b><a href="javascript:selectToggle(true, 'frmusers');"><?php echo __('all_label');?></a></b><span class="pr2 pl2">|</span><b><a href="javascript:selectToggle(false, 'frmusers');"><?php echo __('select_none');?></a></b>

                <span style="padding-left:10px;">
                    <select name="more_action" id="more_action">
                        <option value=""><?php echo __('Change Status'); ?></option>
                        <option value="block_passenger_request" ><?php echo __('Block'); ?></option>
                        <option value="active_passenger_request" ><?php echo __('Active'); ?></option>
                        <option value="trash_passenger_request" ><?php echo __('Trash'); ?></option>
                        <option value="p_block_passenger_request" ><?php echo __('Permenant Block'); ?></option>
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
	toggle(1);
	$("input[type='text']:first", document.forms[0]).focus();
});
function selectToggle(toggle, form) {
	var myForm = document.forms[form];
	for( var i=0; i < myForm.length; i++ ) {
		if(toggle) {
			myForm.elements[i].checked = "checked";
		} else {
			myForm.elements[i].checked = "";
		}
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
			if($('input[type="checkbox"]').is(':checked')) {
				 var ans = confirm(confirm_msg)
				 if(ans){
					 document.frmusers.action="<?php echo URL_BASE;?>manageusers/block_passenger_request/";
					 document.frmusers.submit();
				 }else{
					$('#more_action').val('');
				 }
			} else{
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
			if($('input[type="checkbox"]').is(':checked')) {
				 var ans = confirm(confirm_msg)
				 if(ans){
					 document.frmusers.action="<?php echo URL_BASE;?>manageusers/active_passenger_request/";
					 document.frmusers.submit();
				 }else{
					$('#more_action').val('');
				 }		
			} else{
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
			if($('input[type="checkbox"]').is(':checked')) {
				 var ans = confirm(confirm_msg)
				 if(ans){
					 document.frmusers.action="<?php echo URL_BASE;?>manageusers/trash_passenger_request/";
					 document.frmusers.submit();
				 }else{
					$('#more_action').val('');
				 }		
			} else{
				//alert for no record select
				//=============================
				alert("<?php echo __('Please select atleast one or more Record(s) to do this action');?>")	
				$('#more_action').val('');
			}

			case "p_block_passenger_request":
			var confirm_msg =  "<?php echo __('Are you sure want to move Request(s) to Permenant Block ?');?>";
			//Find checkbox whether selected or not and do more action
			//============================================================
			if($('input[type="checkbox"]').is(':checked')) {
				 var ans = confirm(confirm_msg)
				 if(ans){
					 document.frmusers.action="<?php echo URL_BASE;?>manageusers/p_block_passenger_request/";
					 document.frmusers.submit();
				 }else{
					$('#more_action').val('');
				 }		
			} else{
				//alert for no record select
				//=============================
				alert("<?php echo __('Please select atleast one or more Record(s) to do this action');?>")	
				$('#more_action').val('');
			}
		break;
	}
	return false;  
});
</script>
