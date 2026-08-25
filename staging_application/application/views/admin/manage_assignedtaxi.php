<?php defined('SYSPATH') OR die("No direct access allowed.");?>
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
<?php

//For search values
//=================
$user_type_val = isset($srch["user_type"]) ? $srch["user_type"] :''; 
$company_val = isset($srch["filter_company"]) ? $srch["filter_company"] :''; 
$status_val = isset($srch["status"]) ? $srch["status"] :''; 							
$keyword = isset($srch["keyword"]) ? $srch["keyword"] :''; 

//For CSS class deefine in the table if the data's available
//===========================================================
$total_company=count($all_company_list);

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
		
<?php if($total_company > 0){ ?>
		<div class="wmd-view-topscroll">
    <div class="scroll-div1">
    </div>
</div>
<div class="wmd-view">
    <div class="scroll-div2">
<div class= "overflow-block">
<?php } ?>		
<table cellspacing="1" cellpadding="10" width="100%" style="border-top:1px solid #cdcdcd;" align="center" class="sTable responsive">
<?php if($total_company > 0){ ?>
<thead>
	<tr>
		
		<!--<td align="left" width="5%" style="min-width: 22px !important;" ><?php echo __('availability_status_label'); ?></td> -->
		
		<td align="left" width="5%"><?php echo __('sno_label'); ?></td>
		<td align="left" style="text-align:left;" width="10%"><?php echo ucfirst(__('name')); ?></td>
		<td align="left" style="text-align:left;" width="8%"><?php echo __('taxi_no'); ?></td>
		<?php /*<td align="left" width="10%"><?php echo __('mark_unavailable'); ?></td> */ ?>
		<td align="left" style="text-align:left;" width="5%"><?php echo __('email_label'); ?></td>
		<td align="left" style="text-align:left;" width="20%"><?php echo __('address'); ?></td>
		<?php  /* if($usertype != 'C') { ?>
		 <td align="left" width="10%"><?php echo __('companyname'); ?></td> 
		<?php }  */ ?>
		<td align="left" width="10%"><?php echo __('phone_label'); ?></td>
		<td align="left" style="text-align:left;" width="12%"><?php echo __('driver_license_id'); ?></td>
		<td align="left" width="10%"><?php echo __('photo_label'); ?></td>
		<td align="left" width="10%"><?php echo __('driver_status'); ?></td>
		<td align="left" width="10%"><?php echo __('logout'); ?></td>
		
		<?php /* <td align="left" width="15%"><?php echo __('created_by'); ?></td> 
		<td align="left" width="10%"><?php echo __('country_label'); ?></td>
		<td align="left" width="10%"><?php echo __('state_label'); ?></td>
		<td align="left" width="10%"><?php echo __('city_label'); ?></td>
		<td align="left" width="7%" ><?php echo __('action_label'); ?></td>*/ ?>
	</tr>
</thead>
<tbody>	
		<?php
		/* For Serial No */
		$sno=$Offset; 
		//echo '<pre>'; 
		//print_r($all_company_list);
		//exit;
		 foreach($all_company_list as $listings) {
		 //S.No Increment
		 //==============
		 $sno++;
        
         //For Odd / Even Rows
         //===================
         $trcolor=($sno%2==0) ? 'oddtr' : 'eventr';  
		 
        ?>     

        <tr class="<?php echo $trcolor; ?>">
                 
                   <!-- <td> 
                         <?php 
                             if(isset($listings['availability_status']) && $listings['availability_status']=='A')
                             {  $txt = "Active"; $class ="unsuspendicon";    }
                             else{  $txt = "Deactive"; $class ="blockicon";      }
                             echo '<a  title ='.$txt.' class='.$class.'></a>' ;  
                         ?>  
                    </td>    -->
                                        
                  
			<td align="center"><?php echo $sno; ?></td>
			<td align="left"><a title="<?php echo ucfirst($listings['name']); ?>" href="<?php echo URL_BASE.'manage/driverinfo/'.$listings['id'];?>"><?php echo wordwrap($listings['name'],30,'<br/>',1); ?></a></td>
			<td><a id="assign_taxino<?php echo $listings['id'];?>"  title="<?php echo $listings['taxi_no']; ?>" href="<?php echo URL_BASE;?>manage/taxiinfo/<?php echo $listings['taxi_id'];?>"><?php echo wordwrap($listings['taxi_no'],30,'<br/>',1); ?></a></td>
			<input type="hidden" name="assign_model" id="assign_model<?php echo $listings['id'];?>" value="<?php echo $listings['model_id']; ?>" />
			
			<?php /*<td><a href="<?php echo URL_BASE.'manage/driver_unavailable/'.$listings['id'];?>"><?php echo __('mark_unavailable'); ?></a></td>*/ ?>
			<td><?php echo wordwrap($listings['email'],25,'<br />',1); ?></td>
			<td><?php echo $listings['address']; ?>
			<?php /* ?>
			<br/><?php echo __('city_label'); ?> : <?php echo $listings['city_name']; ?>
			<br/><?php echo __('state_label'); ?> : <?php echo $listings['state_name']; ?>
			<br/><?php echo __('country_label'); ?> : <?php echo $listings['country_name']; ?></td>
			<?php */ ?>
			<?php /* if($usertype != 'C') { ?>
			<td><a title="<?php echo ucfirst($listings['company_name']); ?>" href="<?php echo URL_BASE.'manage/companydetails/'.$listings['cid'];?>">
				<?php  /*if(file_exists($_SERVER["DOCUMENT_ROOT"].'/public/uploads/company/'.$listings['cid'].'.png')){  ?> 
					<img width="32" height="32" src="<?php echo URL_BASE.COMPANY_IMG_IMGPATH.$listings['cid'].'.png';?>"/>
				<?php }else{ ?>
					<img width="32" height="32"  src="<?php echo URL_BASE;?>public/images/company_noimage.png"/>
				<?php } */						
			/* echo wordwrap(ucfirst($listings['company_name']),25,'<br />',1); ?></a></td> 
			 <?php } */ ?>
			<td align="center"><?php echo $listings['phone']; ?></td>
			<td><?php echo $listings['driver_license_id']; ?></td>
			<td align="center"><a href="<?php echo URL_BASE.'manage/driverinfo/'.$listings['id'];?>">
	
			<?php  if(file_exists($_SERVER["DOCUMENT_ROOT"].'/public/uploads/driver_image/'.$listings['photo']) &&($listings['photo'] != "")){  ?> 
					<img width="75" height="75" src="<?php echo URL_BASE.SITE_DRIVER_IMGPATH.$listings['photo'];?>?q=<?php echo time();?>"/>
				<?php }else{ ?>
					<img width="75" height="75"  src="<?php echo URL_BASE;?>public/images/noimages.jpg?q="<?php echo time();?>/>
				<?php } ?>					
			</a></td>
			<td align="center"><?php echo isset($listings['shift_status'])?$listings['shift_status']:""; ?></td>
			<td align="center"><?php 
			/* LOGOUT BUTTON ENABLE */
			/*$add_model        = Model::factory('add');
			$api    = Model::factory('mobileapi115');
			// Check Passenger id is avail or not
			$check_driver_avail = $add_model->driver_id_isValid($listings['id']);                
			if ($listings['id'] != null && $check_driver_avail == 1) {
				$check_driver_login_status = $api->logged_user_status($listings['id'],COMPANY_CID);
				if ($check_driver_login_status == 1) {
					$updatetime_difference = (isset($listings['updatetime_difference'])?$listings['updatetime_difference']:'');
							$updatetime_difference = $updatetime_difference /1000;
				            //Exclude the drivers who has not logged in and not update the status last specified seconds
				            if ($updatetime_difference <= 1800) { //1800 - 30 Mins
				                
				            }else{
							echo "<a class='logout_driver' data-value='".$listings['id']."' >Logout</a>";	
								
							}
					
				}else{
					echo "<a href='#'>-</a>";
				}		
			}
			*/
			
			/* LOGOUT BUTTON ENABLE */
			
			
			
			 ?>
			 <a class='logout_driver' title="Logout" data-value="<?php echo $listings['id']; ?>">Logout</a>
			 </td>
			
			
			<?php /* <td><?php echo $listings['created_by']; ?></td> 
			<td><?php echo $listings['country_name']; ?></td>
			<td><?php echo $listings['state_name']; ?></td>
			<td><?php echo $listings['city_name']; ?></td>
			<td align="center" colspan='3' ><?php echo '<a href='.URL_BASE.'edit/driver/'.$listings['id'].' " title ="Edit" class="editicon"></a>' ; ?></td>*/ ?>


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
</form>
</div>
</div>
<div class="clr">&nbsp;</div>
<div class="pagination">
		<?php if($total_company > 0): ?>
		 <p><?php echo $pag_data->render(); ?></p>  
		<?php endif; ?> 
  </div>
  <div class="clr">&nbsp;</div>




</div>
</div>

<script type="text/javascript" language="javascript">
$(document).ready(function(){
	/* LOGOUT DRIVER */	

$('.logout_driver').click(function() {
var driver_id =$(this).attr('data-value');	
var model_type =$('#assign_model'+driver_id).val();	
var taxi_number =$('#assign_taxino'+driver_id).attr('title');	
var parameter = JSON.stringify({ "driver_id":driver_id,"model_type":model_type,"taxi_number":taxi_number,"shiftupdate_id":'',"feedback":'good','end_km':"0"});
			//  alert("not airposr")
		 // alert(parameter);
 url = '<?php echo URL_BASE.MOB_API_URL;?>/?type=user_logout';
  var posting = $.post( url,parameter );

     posting.done(function( data ) {
		  var obj = $.parseJSON(data);
			if(obj.status== 1){
				 alert("Driver has been logged out successfully!");	
				 socket.emit('driver_logout_admin',driver_id);
				 window.location.href = "<?php echo URL_BASE; ?>manage/assigntaxi";
			 }else {
				alert(obj.message);	 
			}
			
		}); 
	
});
/* LOGOUT DRIVER */	
 $("#keyword").focus(); 
	toggle(7);
});
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

					case "block_driver_request":
					var confirm_msg =  "<?php echo __('Are you sure want to block Request(s)?');?>";
	
					//Find checkbox whether selected or not and do more action
					//============================================================
					if($('input[type="checkbox"]').is(':checked'))
					{
				   		 var ans = confirm(confirm_msg)
				   		 if(ans){
							 document.managedriver.action="<?php echo URL_BASE;?>manage/block_driver_request/index";
							 document.managedriver.submit();
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

					case "active_driver_request":
					var confirm_msg =  "<?php echo __('Are you sure want to Activate Request(s)?');?>";


						//Find checkbox whether selected or not and do more action
						//============================================================
						if($('input[type="checkbox"]').is(':checked'))
						{
					   		 var ans = confirm(confirm_msg)
					   		 if(ans){
								 document.managedriver.action="<?php echo URL_BASE;?>manage/active_driver_request/index";
								 document.managedriver.submit();
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

					case "trash_driver_request":
					var confirm_msg =  "<?php echo __('Are you sure want to move Request(s) to Trash ?');?>";


						//Find checkbox whether selected or not and do more action
						//============================================================
						if($('input[type="checkbox"]').is(':checked'))
						{
					   		 var ans = confirm(confirm_msg)
					   		 if(ans){
								 document.managedriver.action="<?php echo URL_BASE;?>manage/trash_driver_request/index";
								 document.managedriver.submit();
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
					
					case "mute_driver_request":
					var confirm_msg =  "<?php echo __('Are you sure want to Mute the Driver(s) ?');?>";


						//Find checkbox whether selected or not and do more action
						//============================================================
						if($('input[type="checkbox"]').is(':checked'))
						{
					   		 var ans = confirm(confirm_msg)
					   		 if(ans){
								 document.managedriver.action="<?php echo URL_BASE;?>manage/mute_driver_request/index";
								 document.managedriver.submit();
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
