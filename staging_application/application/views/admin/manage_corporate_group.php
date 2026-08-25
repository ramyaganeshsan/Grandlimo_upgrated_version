<?php defined('SYSPATH') OR die("No direct access allowed."); 

$srch = $_REQUEST;
//For search values
//=================
$user_type_val = isset($srch["user_type"]) ? $srch["user_type"] :'';  							
$status_val = isset($srch["status"]) ? $srch["status"] :''; 							
$keyword = isset($srch["keyword"]) ? $srch["keyword"] :''; 

//For CSS class deefine in the table if the data's available
//===========================================================
$total_zone=count($corporate_group_details);

$table_css=$export_excel_button="";
if($total_zone>0)
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
		<form method="get" class="form" name="manage_zone" id="manage_zone" action="manage">
		<table class="list_table1" border="0" width="100%" cellpadding="5" cellspacing="0">
 <tr>
                        <td valign="top"><label><?php echo __('keyword_label'); ?></label></td>
                        <td >
                            <div class="new_input_field">
                                <input type="text" name="keyword"  maxlength="75" id="keyword" value="<?php echo isset($srch['keyword']) ? trim($srch['keyword']) : ''; ?>" />
                            </div>
                            <span class="search_info_label"><?php echo __('corporate_group_name'); ?></span>
                        </td>
                        <td valign="top"><label><?php echo __('status_label'); ?></label></td>
                        <td valign="top">
			<div class="selector new_input_field" id="uniform-user_type">
                            <select class="" name="status" id="status" onchange="this.form.submit()">
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
                        
                        <tr>
                        <td valign="top"><label>&nbsp;</label></td>
                        <td>
                            <div class="button brownB">
                                <input type="submit" value="<?php echo __('button_search'); ?>" name="search_user" title="<?php echo __('button_search'); ?>" />
                            </div>
                            <div class="button blueB">
                                <input type="button" value="<?php echo __('button_cancel'); ?>" title="<?php echo __('button_cancel'); ?>" onclick="location.href = '<?php echo URL_BASE; ?>manage/zone'" />
                            </div>
                        </td>
                    </tr>
                </table>
                     <div class="over_all">
			<?php if($total_zone > 0) { ?>
			<div class="widget">
				<div class="title"><h6><?php echo $page_title; ?></h6>
					<div class="exp_menu_right">
					
				</div>
			</div>
			<?php } ?>
<?php if($total_zone > 0){ ?>
		

<div class= "overflow-block">
<?php } ?>
<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">
<?php if($total_zone > 0){ ?>
<thead>
	<tr>
		<td align="left" width="5%"><?php echo __('select'); ?></td>
		<td align="left" width="5%" style="min-width: 22px !important;" ><?php echo __('status_label'); ?></td>
		<td align="left" width="5%"><?php echo __('sno_label'); ?></td>
		<td align="left" width="5%"><?php echo __('corporate_group_name'); ?></td>
		<td align="left" width="5%"><?php echo __('wallet_positive_limit'); ?></td>
		<td align="left" width="5%"><?php echo __('wallet_max_limit_check'); ?></td>
		<td align="left" width="5%"><?php echo __('surge_pricing'); ?></td>
		<td align="center" width="15%" ><?php echo __('action_label'); ?></td>
	</tr>
</thead>
<tbody>
	
		<?php

         $sno=$Offset; /* For Serial No */
		 foreach($corporate_group_details as $listings ) { 
		 //S.No Increment
		 //==============
		 $sno++;
         //For Odd / Even Rows
         //===================
       //  echo '<pre>'; print_r($listings); exit();
         $trcolor=($sno%2==0) ? 'eventr' : 'oddtr';
        /* if($listings['status'] != 'T' || $status_val == "T")
         {*/ 
		 
		// $group_name= (isset($listings['group_name'])) ? implode(' , ',$listings['group_name'])  : '-';
        ?>     

        <tr class="<?php echo $trcolor; ?>" >

                    <td align="center">  
							<input type="checkbox" name="uniqueId[]" id="trxn_chk<?php echo $listings['_id'];?>" value="<?php echo $listings['_id'];?>" />	
                    </td>

                    <td align="center"> 
                         <?php 
                             if($listings['status']=='A')
                             {  $txt = "Active"; $class ="unsuspendicon";    }
				elseif($listings['status']=='T')
				{$txt = "Trash"; $class ="trashicon";}
                             else{  $txt = "Deactive"; $class ="blockicon";      }


                             echo '<a  title ='.$txt.' class='.$class.'></a>' ;  
                         ?>  

                    </td> 
	
		<td align="center"><?php echo $sno; ?></td>
        <td align="left"><?php echo wordwrap(ucfirst($listings['corporate_group_name']),30,'<br/>',1); ?></td>     
		<td align="left"><?php echo $listings['wallet_positive_limit']; ?></td>     
		<td align="left"><?php echo (isset($listings['wallet_max_limit_check']) && $listings['wallet_max_limit_check'] == 1)?'Enabled':'Disabled'; ?></td>     
		<td align="left"><?php echo (isset($listings['surge_pricing']) && $listings['surge_pricing'] == 1)?'Enabled':'Disabled'; ?></td>     
		<td align="center" width="20" colspan='3' ><?php echo '<a href='.URL_BASE.'corporategroup/edit/'.$listings['_id'].' " title ="'.__("edit").'" class="editicon"></a>' ; ?></td>


		</tr>
		<?php  }
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
            <?php if ($total_zone > 0) { ?>
                </div>
               
                    <?php } ?>
                     </div>
</form>
</div>
</div>
  <div class="bottom_contenttot">



<div class="pagination">
		<?php if($total_zone > 0): ?>
		 <?php echo $pag_data->render(); ?>
		<?php endif; ?> 
</div>
<div class="clr">&nbsp;</div>
<!--** Multiple select starts Here ** -->
<?php if(count($corporate_group_details) > 0)
       { ?>
          <div class="select_all"  style="padding-left:10px;margin-top:0px;margin-bottom: 10px;">
			
					<b>
						<a href="javascript:selectToggle(true, 'manage_zone');"><?php echo __('all_label');?></a>
					</b>
					<span class="pr2 pl2">|</span>
					<b>
						<a href="javascript:selectToggle(false, 'manage_zone');"><?php echo __('select_none');?></a>
					</b>
				<span style="padding-left:10px;">
                    <select name="more_action" id="more_action">
                        <option value=""><?php echo __('change_status'); ?></option>
                        <option value="block_zone_request" ><?php echo __('Block'); ?></option>
                        <option value="active_zone_request" ><?php echo __('Active'); ?></option>
                        <option value="trash_zone_request" ><?php echo __('Trash'); ?></option>
                    </select>
                 </span>
	        </div>
        <?php
        } ?>
<!--** Multiple select ends Here ** -->
  
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

</script>
<script type="text/javascript">
$(document).ready(function(){
 $("#keyword").focus(); 
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

					case "block_zone_request":
					var confirm_msg =  "<?php echo __('are_you_surewanttoblock_zone');?>";
	
					//Find checkbox whether selected or not and do more action
					//============================================================
					if($('input[type="checkbox"]').is(':checked'))
					{
				   		 var ans = confirm(confirm_msg)
				   		 if(ans){
							 document.manage_zone.action="<?php echo URL_BASE;?>corporategroup/block_corporate_group_request";
							 document.manage_zone.submit();
						 }else{
						 	$('#more_action').val('');
						 }
	
					}
					else{
					        //alert for no record select
					        //=============================
						    alert("<?php echo __('please_select_atleast_oneormore_record_todo_thisaction');?>")	
						    $('#more_action').val('');
					}					
					break;



					//	Current Action "approve"
					//=========================

					case "active_zone_request":
					var confirm_msg =  "<?php echo __('areyousure_wantto_activate_request');?>";


						//Find checkbox whether selected or not and do more action
						//============================================================
						if($('input[type="checkbox"]').is(':checked'))
						{
					   		 var ans = confirm(confirm_msg)
					   		 if(ans){
								 document.manage_zone.action="<?php echo URL_BASE;?>corporategroup/active_corporate_group_request";
								 document.manage_zone.submit();
							 }else{
							 	$('#more_action').val('');
							 }		
						}
						else{
						        //alert for no record select
						        //=============================
							    alert("<?php echo __('please_select_atleast_oneormore_record_todo_thisaction');?>")	
							    $('#more_action').val('');
						}						

					break;


                	//	Current Action "trash"
					//==========================

					case "trash_zone_request":
					var confirm_msg =  "<?php echo __('are_yousure_wanttomove_request_to_trash');?>";


						//Find checkbox whether selected or not and do more action
						//============================================================
						if($('input[type="checkbox"]').is(':checked'))
						{
					   		 var ans = confirm(confirm_msg)
					   		 if(ans){
								 document.manage_zone.action="<?php echo URL_BASE;?>corporategroup/trash_corporate_group_request";
								 document.manage_zone.submit();
							 }else{
							 	$('#more_action').val('');
							 }		
						}
						else{
						        //alert for no record select
						        //=============================
							    alert("<?php echo __('please_select_atleast_oneormore_record_todo_thisaction');?>")	
							    $('#more_action').val('');
						}						

					break;
				}		
			return false;  
	});
 
</script>
