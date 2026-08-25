<?php defined('SYSPATH') OR die("No direct access allowed."); 


//For search values
//=================
$user_type_val = isset($srch["user_type"]) ? $srch["user_type"] :''; 
$status_val = isset($srch["status"]) ? $srch["status"] :''; 							
$keyword = isset($srch["keyword"]) ? $srch["keyword"] :''; 

//For CSS class deefine in the table if the data's available
//===========================================================
$total_company=count($all_company_list);

$total_companylist=count($CompanyList);


$table_css=$export_excel_button="";
if($total_company>0)
{ 
	$table_css='class="table_border"'; 

	$export_excel_button='
      				<input type="button"  title="'.__('button_export').'" class="button" value="'.__('button_export').'" 
        				onclick="location.href=\''.URL_BASE.'manage/export?keyword='.$keyword.'&status='.$status_val.'&type='.$user_type_val.'\'" />
    				';
}?>
<script type="text/javascript">
	$(function(){
		$(".wmd-view-topscroll").scroll(function(){
			$(".wmd-view")
				.scrollLeft($(".wmd-view-topscroll").scrollLeft());
		});
		$(".wmd-view").scroll(function(){
			$(".wmd-view-topscroll")
				.scrollLeft($(".wmd-view").scrollLeft());
		});
	});
</script>
<div class="container_content fl clr">
	<div class="cont_container mt15 mt10">
		<div class="content_middle"> 
<form method="get" class="form" name="managecoupon_package_form" id="managecoupon_package_form" action="coupon_packagesearch">
			  <?php if($_SESSION['user_type'] !='O' ) { ?>  

<table class="list_table1" border="0" width="65%" cellpadding="5" cellspacing="0">
 <tr>
                      <td valign="top"><label><?php echo __('keyword_label'); ?></label></td>
                        <td >
                            <div class="new_input_field">
                                <input type="text" name="keyword"  maxlength="256" id="keyword" value="<?php echo isset($srch['keyword']) ? trim($srch['keyword']) : ''; ?>" />
                            </div>
                            <span class="search_info_label"><?php echo __('search_by_coupon_package_name'); ?></span>
                        </td>
                      
                        <td valign="top"><label><?php echo __('status_label'); ?></label></td>
                        <td valign="top">
			<div class="selector" id="uniform-user_type">
                            <select class="select2" name="status" id="status" onchange="this.form.submit()">
                                <option value=""><?php echo __('status_label'); ?></option>    
                                <?php
                                foreach ($status as $status_key => $allstatus) {

                                    $selected_status = ($status_val == $status_key) ? ' selected="selected" ' : " ";
                                    ?>  
                                    <option value="<?php echo $status_key; ?>"  <?php echo $selected_status; ?> ><?php echo ucfirst($allstatus); ?></option>
                                <?php }  ?>
                            </select>
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
                                <input type="button" value="<?php echo __('button_cancel'); ?>" title="<?php echo __('button_cancel'); ?>" onclick="location.href = '<?php echo URL_BASE; ?>manage/coupon_package'" />
                            </div>
                        </td>
                    </tr>
                    
                </table>
   <?php } ?>
       		<div class="widget">
		<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" /><h6><?php echo $page_title; ?></h6>
		<div style="width:auto; float:right; margin: 4px 3px;">
		<div class="button greyishB"> <?php //echo $export_excel_button; ?></div>                       

		</div>
		</div>
<?php if($total_company > 0){ ?>
		<div class="wmd-view-topscroll">
    <div class="scroll-div1">
    </div>
</div>
<div class="wmd-view">
    <div class="scroll-div2">
<div class= "overflow-block">
<?php } ?>
<table cellspacing="1" cellpadding="10" width="100%" align="center" style="border-top:1px solid #cdcdcd;" class="sTable responsive">		
<?php if($total_company > 0){ ?>
<thead>
	<tr>
		 <?php if($_SESSION['user_type'] !='O' ) { ?><td align="left" width="5%"><?php echo __('Select'); ?></td>
		<td align="left" width="5%" style="min-width: 22px !important;" ><?php echo 'Status'; ?></td> <?php } ?>
		<td align="left" width="5%"><?php echo __('sno_label'); ?></td>
		<td align="left" style="text-align:left;" width="12%"><?php echo __('coupon_package_name'); ?></td>
		<td align="left" width="18%" style="text-align:left;" width="25%"><?php echo __('coupon_package_description'); ?></td>
		<td align="left" width="10%"><?php echo __('corporate_commission').'(%)'; ?></td>
		<td align="left" width="10%"><?php echo __('passenger_commission').'(%)'; ?></td>
	
		 <?php if($_SESSION['user_type'] !='O' ) { ?><td align="left" width="10%"><?php echo __('action_label'); ?></td> <?php } ?>
	</tr>
</thead>
<tbody>		
		<?php

         $sno=$Offset; /* For Serial No */

		 foreach($all_company_list as $listings) {
		 
		 //S.No Increment
		 //==============
		 $sno++;
        
         //For Odd / Even Rows
         //===================
         $trcolor=($sno%2==0) ? 'oddtr' : 'eventr';  
		 
        ?>     

        <tr class="<?php echo $trcolor; ?>">
            <?php if($_SESSION['user_type'] !='O' ) { ?> <td align="center"><input type="checkbox" name="uniqueId[]" id="trxn_chk<?php echo $listings['_id'];?>" value="<?php echo $listings['_id'];?>" /></td>
                    <td align="center"> 
                         <?php 
                             if($listings['coupon_package_status']=='A')
                             {  $txt = "Active"; $class ="unsuspendicon";    }
				elseif($listings['coupon_package_status']=='T')
				{$txt = "Trash"; $class ="trashicon";}
                             else{  $txt = "Deactive"; $class ="blockicon";      }


                             echo '<a  title ='.$txt.' class='.$class.'></a>' ;  
                         ?>  

                    </td>  <?php }?>
			<td align="center"><?php echo $sno; ?></td>
			<td><?php echo wordwrap(ucfirst($listings['coupon_package_name']),30,'<br/>',1); ?></td>
			<td><?php echo wordwrap($listings['coupon_package_description'],25,1); ?></td>
			<td align="center"><?php echo wordwrap($listings['corporate_commission'],25,'<br />',1); ?></td>
			<td align="center"><?php echo wordwrap($listings['passenger_commission'],25,'<br />',1); ?></td>
	 <?php if($_SESSION['user_type'] !='O' ) { ?>	<td align="center" width="20" colspan='3'><?php echo '<a href='.URL_BASE.'edit/coupon_package/'.$listings['_id'].' " title ="Edit" class="editicon"></a>' ; ?></td><?php  }?>


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
<?php if ($total_company > 0) { ?>
</div>
</div>
</div>
<?php } ?>

<input type="hidden" name="change_value" id="change_value" value="">
</form>
</div>
</div>
</div>
<div class="clr">&nbsp;</div>
<div class="pagination">
		<?php if($total_company > 0): ?>
		 <p><?php echo $pag_data->render(); ?></p>  
		<?php endif; ?> 
  </div>
  <div class="clr">&nbsp;</div>

<!--** Multiple select starts Here ** -->
 <?php if($_SESSION['user_type'] !='O' ) { ?>
<?php if(count($all_company_list) > 0)
       { ?>
          <div class="select_all">
                <b><a href="javascript:selectToggle(true, 'managecoupon_package_form');"><?php echo __('all_label');?></a></b><span class="pr2 pl2">|</span><b><a href="javascript:selectToggle(false, 'managecoupon_package_form');"><?php echo __('select_none');?></a></b>

                <span style="padding-left:10px;">

                    <select name="more_action" id="more_action">
                        <option value=""><?php echo __('Change Status'); ?></option>
                        <option value="block_coupon_package_request" ><?php echo __('Block'); ?></option>
                        <option value="active_coupon_package_request" ><?php echo __('Active'); ?></option>
                        <option value="trash_coupon_package_request" ><?php echo __('Trash'); ?></option>
                    </select>
                 </span>
	        </div>
        <?php
        } } ?>
        
<!--** Multiple select ends Here ** -->

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

</script>
<script type="text/javascript">
$(document).ready(function(){
 $("#keyword").focus(); 
	toggle(9);
});
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

function change_order(val)
{
	$('#change_value').val(val);
	document.managecoupon_package_form.action="<?php echo URL_BASE;?>manage/order_field_request/index";
	document.managecoupon_package_form.submit();
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

					case "block_coupon_package_request":
					var confirm_msg =  "<?php echo __('Are you sure want to block Request(s)?');?>";
	
					//Find checkbox whether selected or not and do more action
					//============================================================
					if($('input[type="checkbox"]').is(':checked'))
					{
				   		 var ans = confirm(confirm_msg)
				   		 if(ans){
							 document.managecoupon_package_form.action="<?php echo URL_BASE;?>manage/block_coupon_package_request/index";
							 document.managecoupon_package_form.submit();
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

					case "active_coupon_package_request":
					var confirm_msg =  "<?php echo __('Are you sure want to Activate Request(s)?');?>";


						//Find checkbox whether selected or not and do more action
						//============================================================
						if($('input[type="checkbox"]').is(':checked'))
						{
					   		 var ans = confirm(confirm_msg)
					   		 if(ans){
								 document.managecoupon_package_form.action="<?php echo URL_BASE;?>manage/active_coupon_package_request/index";
								 document.managecoupon_package_form.submit();
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

					case "trash_coupon_package_request":
					var confirm_msg =  "<?php echo __('Are you sure want to move Request(s) to Trash ?');?>";


						//Find checkbox whether selected or not and do more action
						//============================================================
						if($('input[type="checkbox"]').is(':checked'))
						{
					   		 var ans = confirm(confirm_msg)
					   		 if(ans){
								 document.managecoupon_package_form.action="<?php echo URL_BASE;?>manage/trash_coupon_package_request/index";
								 document.managecoupon_package_form.submit();
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
</script>
