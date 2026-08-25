<?php defined('SYSPATH') OR die("No direct access allowed.");?>
<link rel="stylesheet" href="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/css/ui-lightness/jquery-ui-1.8.11.custom.css" />
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/js/jquery-ui-1.8.11.custom.min.js"></script>
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery.validate.js"></script>
<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle">
          <table border="0" cellpadding="5" cellspacing="0" width="100%">
	<tr>
	<td class="titlebold"><?php echo ucfirst(__('personalinform')); ?></td>
	<td></td>	          
	</tr>
	<tr>
		<?php
		  $userid = isset($user_details[0]['id'])?$user_details[0]['id']:''; ?>

         <td valign="top" width="20%"></td>
	   <td align="right">
		   <div class="new_input_field">
		  <div class="button blackB"><input type="button" value="Edit" onclick="window.location.assign(' <?php echo URL_BASE; ?>admin/editpassenger/<?php echo $userid; ?>')"  /></a></div>
		   </div>
	   </td>   	
           </tr> 

           <tr>
           <td valign="top" width="20%"><label><?php echo ucfirst(__('name')); ?></label>:</td>
	   <td>
		   <div class="new_input_field">
		   <?php if(isset($user_details[0]['name'])) { echo $user_details[0]['name']; } else { echo ''; } ?>
		   </div>
	   </td>   	
           </tr> 	

           <tr>
           <td valign="top" width="20%"><label><?php echo __('email'); ?></label>:</td>        
	   <td>
		   <div class="new_input_field">	
		   <?php if(isset($user_details[0]['email'])) { echo $user_details[0]['email']; } ?>
		   </div>
	   </td>   	
           </tr> 
           
           <tr>
           <td valign="top" width="20%"><label><?php echo __('mobile'); ?></label>:</td>        
	   <td>
		   <div class="new_input_field">
		   <?php if(isset($user_details[0]['phone'])) { echo $user_details[0]['phone']; } ?>
		   </div>
	   </td>   	
           </tr>

        <tr>
           <td valign="top" width="20%"><label><?php echo __('otp'); ?></label>:</td>        
	   <td>
		   <div class="new_input_field">
		   <?php if(isset($user_details[0]['otp'])) { echo $user_details[0]['otp']; } ?>
		   </div>
	   </td>   	
           </tr>                       		   
		   
           <tr>
           <td valign="top" width="20%"><label><?php echo __('address'); ?></label>:</td>        
	   <td>
		   <div class="new_input_field">
		   <?php if(isset($user_details[0]['address'])) { echo $user_details[0]['address']; } ?>
		   </div>
	   </td>   	
           </tr>
		   <!--<tr>
           <td valign="top" width="20%"><label><?php echo __('civilid'); ?></label>:</td>        
	   <td>
		   <div class="new_input_field">
		   <?php if(isset($user_details[0]['civil_id']) && $user_details[0]['civil_id']!= '') { echo $user_details[0]['civil_id']; } else { echo '---'; } ?>
		   </div>
	   </td>   	
           </tr>-->
		<?php if(isset($user_details[0]['civilid_front']) && $user_details[0]['civilid_front'] != '') { ?>   
		   <tr>
			<td valign="top" width="20%"><label><?php echo __('civilid_front'); ?></label>:</td>        
			<td>
				<div class="new_input_field">
				
					 <img src="<?php echo URL_BASE.PASS_CIVIL_IMGPATH.$user_details[0]['civilid_front']; ?>" />
				
				</div>
			</td>   	
           </tr>
		<?php } ?>
		<?php if(isset($user_details[0]['id_image']) && $user_details[0]['id_image'] != '') { ?>   
		   <tr>
            <td valign="top" width="20%"><label><?php echo __('id_image'); ?></label>:</td>        
			<td>
				<div class="new_input_field">
				
					 <img src="<?php echo URL_BASE.PASS_IMG_IMGPATH.'/id_image/'.$user_details[0]['id_image']; ?>" />
				
				</div>
			</td>  
			<td>
				
			</td> 	
           </tr>
		<?php } ?>
           <?php /* ?>
            <tr>
           <td valign="top" width="20%"><label><?php echo __('referral_code'); ?></label>:</td>        
	   <td>
		   <div class="new_input_field">
		   <?php if(isset($user_details[0]['referral_code'])) { echo $user_details[0]['referral_code']; } else { echo '-';} ?>
		   </div>
	   </td>   	
           </tr>
           
            <tr>
           <td valign="top" width="20%"><label><?php echo __('referral_amount'); ?></label>:</td>        
	   <td>
		   <div class="new_input_field">
		   <?php if(isset($user_details[0]['referral_code_amount']) && $user_details[0]['referral_code_amount'] != 0) { echo $user_details[0]['referral_code_amount']; } else { echo '-';} ?>
		   </div>
	   </td>   	
           </tr>
           
            
           
           <tr>
           <td valign="top" width="20%"><label><?php echo __('referred_person'); ?></label>:</td>        
	   <td>
		   <div class="new_input_field">
		   <?php if(isset($user_details[0]['referred_by'])) { echo $user_details[0]['referred_by']; } else { echo '-';} ?>
		   </div>
	   </td>   	
	    </tr>
	    <?php */ ?>

	    <tr>
           <td valign="top" width="20%"><label><?php echo __('wallet_amount'); ?></label>:</td>        
	   <td>
		   <div class="new_input_field">
		   <?php if(isset($user_details[0]['wallet_amount']) && $user_details[0]['wallet_amount'] != 0) { echo $user_details[0]['wallet_amount']; } else { echo '-';} ?>
		   </div>
	   </td>   	
           </tr>
	    <!-- Primary / Child Account Type -->
	   <tr>
           <td valign="top" width="20%"><label> <?php if($user_details[0]['account_type_name'] != '') { ?><?php echo __('child_account_type'); ?><?php } else { ?><?php echo __('account_type'); ?><?php } ?></label>:</td>        
	   <td>
		   <div class="new_input_field">
		   <?php if($user_details[0]['account_type_name'] != '') { echo $user_details[0]['account_type_name']; } else { echo 'Primary Account';} ?>
		   </div>
	   </td>   	
	    
	   </tr>

	   <tr>
           <td valign="top" width="20%"><label><?php echo __('lateral_start_date'); ?></label>:</td>        
	   <td>
		   <div class="new_input_field">
		   <?php if(isset($user_details[0]['lateral_start_date']) && $user_details[0]['lateral_start_date'] != 0) { echo $user_details[0]['lateral_start_date']; } else { echo '-';} ?>
		   </div>
	   </td>   	
       </tr>

	    <tr>
           <td valign="top" width="20%"><label><?php echo __('lateral_end_date'); ?></label>:</td>        
	   <td>
		   <div class="new_input_field">
		   <?php if(isset($user_details[0]['lateral_end_date']) && $user_details[0]['lateral_end_date'] != 0) { echo $user_details[0]['lateral_end_date']; } else { echo '-';} ?>
		   </div>
	   </td>   	
       </tr>


	   <?php if($user_details[0]['account_type_name'] != '') { ?>
		    <tr>
           <td valign="top" width="20%"><label><?php echo __('primary_account'); ?></label>:</td>        
	   <td>
		   <div class="new_input_field"><a href="<?php echo URL_BASE.'manage/passengerinfo/'.$user_details[0]['parent_id'];?>"><?php echo "Go to view Primary number info"; ?></a>
		   
		   </div>
	   </td>   	
	    
	   </tr>
	   <?php } ?>
	   
	   <!-- Primary / Child Account Type -->
	   
	<!--  <tr>
           <td valign="top" width="20%"><label><?php //echo __('discounts_passenger'); ?></label>:</td>        
	   <td>
		   <div class="new_input_field">
		   <?php //if(isset($user_details[0]['discount'])) { echo $user_details[0]['discount']; } ?>
		   </div>
	   </td>   	
           </tr> -->
	<tr>
	<td class="titlebold"><?php echo ucfirst(__('favourites')); ?></td>
	<td></td>	          
	</tr>
	<table class="fav-block">
	<tr>
		<th><b>Favourite Type</b></th>
		<th><b>From Location</b></th>
		<th><b>To Location</b></th>
	</tr>
	
		
	<?php if(count($get_favourites) > 0) { ?>
		<?php foreach($get_favourites as $fav) { ?>
				<?php
					$label = $fav['fav_loction_type'];
					$from = $fav['p_favourite_place'];
					$to = $fav['d_favourite_place'];
				?>
				<tr>
					<?php if(file_exists(DOCROOT.'public/images/'.ucfirst($fav['fav_icon']).'.png')) { ?>
						<?php $fav_icon_image = URL_BASE.'public/images/'.ucfirst($fav['fav_icon']).'.png'; ?>
					 <?php } else { ?>
						<?php $fav_icon_image = URL_BASE.'public/images/Others.png'; ?>
					 <?php } ?>
					<td><p class="favicons"><img class="" src="<?php echo $fav_icon_image; ?>"><span><?php echo $label; ?></span></p></td>
					<?php // if($from != '') { ?>
						<td class="startIcon"><?php echo ($from!='')?$from:'--'; ?></td>
						
					<?php //} ?> 
					<?php // if($to != '') { ?>				
						<td class="endIcon"><?php echo ($to!='')?$to:'--'; ?></td>
					<?php //} ?>
				</tr>
		<?php } ?>
	<?php } else { ?>
			<tr>
				<td colspan="3">No Data Found!</td>
			</tr>
	<?php } ?>
	</table>
         </table>
     <?php /*if($_SESSION['user_type'] == 'C') { ?>
         <!-- Groups --> 
			<div class="widget">
				<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" /><h6><?php echo __('groups'); ?></h6>
				 
			</div>    
<div class= "overflow-block">			
<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive" id="changetr">
<?php if(count($user_group_details) > 0){ ?>
<thead>	
<tr>
	<td align="center" ><?php echo __('sno_label'); ?></td>
	<td align="center" ><?php echo __('group_name'); ?></td>
	<td align="center" ><?php echo __('limit'); ?></td>
</tr>
</thead>
<tbody>
           <?php $i=1; 
		 foreach($user_group_details as $groupresult) { 
		$trcolor=($i%2==0) ? 'oddtr' : 'eventr';  			 
			 ?>	
				<tr class="<?php echo $trcolor; ?>" id="addtr_<?php echo $groupresult['aid']; ?>">
					<td align="center"><?php echo $i; ?></td>
					<td align="center"><?php echo $groupresult['department']; ?></td>
					<td align="center"><?php echo $groupresult['limit']; ?></td>
				</tr>
	<?php $i++; } ?>

	<?php }else { ?>
			<tr>
				<td colspan="3" align="center"><?php echo __('no_data');?></td>
			</tr>
	<?php } ?>
</tbody>	
</table>	
        </div>
        </div>
<!-- Groups -->
<!-- Account -->
			<div class="widget">
				<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" /><h6><?php echo __('Acounts'); ?></h6>
				 
			</div>    
<div class= "overflow-block">			
<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive" id="changetr">
<?php if(count($user_account_details) > 0){ ?>
<thead>	
<tr>
	<td align="center" ><?php echo __('sno_label'); ?></td>
	<td align="center" ><?php echo __('account_name'); ?></td>
	<td align="center" ><?php echo __('limit'); ?></td>
</tr>
</thead>
<tbody>
           <?php $i=1; 
		 foreach($user_account_details as $groupresult) { 
		$trcolor=($i%2==0) ? 'oddtr' : 'eventr';  			 
			 ?>	
				<tr class="<?php echo $trcolor; ?>" id="addtr_<?php echo $groupresult['aid']; ?>">
					<td align="center"><?php echo $i; ?></td>
					<td align="center"><?php echo $groupresult['account_name']; ?></td>
					<td align="center"><?php echo $groupresult['limit']; ?></td>
				</tr>
	<?php $i++; } ?>

	<?php }else { ?>
			<tr>
				<td colspan="3" align="center"><?php echo __('no_data');?></td>
			</tr>
	<?php } ?>
</tbody>	
</table>	
        </div>
	</div>
<!-- Account -->
<?php } */ ?>
<!-- Completed  Journey -->
		<div class="widget margin-bottom" >
			<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" />
			<h6><?php echo __('completed_journey'); ?></h6>
			 <form  action="<?php echo URL_BASE;?>manage/genpdf" method="post" name="drivermgmt" id="drivermgmt" >
			 <div class="title" align="right">
				<?php echo __('startdate');?>
				<input type="hidden" name="user_id" id="user_id" value="<?php echo $user_details[0]['id']; ?>">
				<input type="hidden" name="user_name" id="user_name" value="<?php echo $user_details[0]['name']; ?>">
				  <input type="hidden" name="user_type" id="user_type" value="P">
				<input type="text"  readonly title="<?php echo __('select_datetime'); ?>"  id="userstartdate" name="userstartdate" value=""  />
				<span id="startdate_error" class="errors" style="display:none;"></span>
				<?php echo __('enddate');?>
				<input type="text"  readonly title="<?php echo __('select_datetime'); ?>"  id="userenddate" name="userenddate" value=""  />
				<span id="enddate_error" class="errors" style="display:none;"></span>
				<div class="button blackB"> 
					<input type="hidden" name="type_export" id="type_export" value="">
					<input type="button" name="change_usercompany" id="change_usercompany" value="GO" title="Go" >
				</div>
			</div>
			</form>
        	<?php /*?><div style="width:auto; float:right; margin: 0px 0px;">		
				<?php if($count_driver_logs_completed_transaction > REC_PER_PAGE) {  ?>
					<?php if($_SESSION['user_type'] == 'A') { ?> 
					<div class="button greyish">
					<a href="<?php echo URL_BASE ?>transaction/admintransaction_list?filter_company=All&taxiid=All&startdate=&enddate=&passengerid=All&driver_id=<?php echo $user_details1[0]['id']; ?>"><?php echo __('view_all'); ?></a>
					</div>
					<?php } 
					else if($_SESSION['user_type'] == 'C')
					{ ?>
					<div class="button greyish">
					<a href="<?php echo URL_BASE ?>transaction/companytransaction_list?taxiid=All&startdate=&enddate=&passengerid=All&driver_id=<?php echo $user_details1[0]['id']; ?>"><?php echo __('view_all'); ?></a>
					</div>
					<?php }
					else if($_SESSION['user_type'] == 'M')
					{ 
					?>
					<div class="button greyish"><a href="<?php echo URL_BASE; ?>transaction/managertransaction_list?taxiid=All&startdate=&enddate=&passengerid=All&driver_id=<?php echo $user_details1[0]['id']; ?>"><?php echo __('view_all'); ?></a></div>
					<?php }
				}
				else
				{ ?>            
				<div class="button greyish"></div>
				<?php } ?>
				</div> <?php */ ?>
			</div>
			
			<div id="drivercompleted_logs">
				<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">
					<?php if(count($passenger_logs_completed_transaction)>0) { ?>
					
						
						<thead>
						<tr>
							<td>#</td>
							<td><?php echo __('passenger_name'); ?></td>
							<td><b><?php echo __('pickuploc_droploc'); ?></b></td>
							<td><b><?php echo __('pictup_date');?></b></td>
							<td><b><?php echo __('distance_km');?></b></td>									
							<td><b><?php echo __('trip_total_fare');?></b></td>
							<td><b><?php echo __('equivalent_to_usd').CURRENCY_FORMAT; ?></b></td>
							
							</tr>
						</tr>
						</thead>					
						
						<?php 
						$i=1;
						
						($i%2 == 1)?$class="eventr":$class="oddtr";
							foreach($passenger_logs_completed_transaction as $values)
							{
								$distance = round($values['distance'],2);
								$current_fare = round($values['fare'] ,2);
								$company_tax = $values['Taxamt'];
								//$percentvalue = ($company_tax/100)*$current_fare;
								//$currtotal = $current_fare - $company_tax;
								$travel_status = $values['travel_status'];
								
								if($_SESSION['company_id'] != 0)
								{
									$company_currency = findcompany_currency($_SESSION['company_id']);
								}
								else
								{
									$company_currency = findcompany_currency($values['company_id']);
								}
								
								$company_currency_format = findcompany_currencyformat($values['company_id']);
								$convet_amt = currency_conversion($company_currency_format,$current_fare);
								$convet_amt = round($convet_amt,2);
								
							if($travel_status == 0) { $status = __('critical'); $row_solor = 'style="color:#00FF00;"';  } elseif($travel_status == 1) { $status = __('completed'); $row_solor = 'style="color:#00FF00;"'; }  elseif($travel_status == 2) { $status = __('inprogress'); $row_solor = 'style="color:#0000FF;"'; }  if($travel_status == 3) { $status = __('start_to_pickup'); $row_solor = 'style="color:#FFFF00;"'; } elseif($travel_status == 4) { $status = __('cancel_by_passenger'); $row_solor = 'style="color:#990066;"';} elseif($travel_status== 5) { $status = __('waiting_payment'); $row_solor = 'style="color:#00FFFF;"';} elseif($travel_status == 6) { $status = __('missed'); $row_solor = 'style="color:#FF6633;"';} elseif($travel_status == 7) { $status = __('dispatched'); $row_solor = 'style="color:#003333;"'; }  elseif($travel_status == 8) { $status = __('cancelled'); $row_solor = 'style="color:#990000;"';} 		//echo $row_solor;
								?>
								<tr class="<?php echo $class; ?>">	
								<td><?php echo $i;?></td>
								<td><?php echo (isset($values['name'][0]))?ucfirst($values['name']):""; ?></td>
								<td><p <?php echo $row_solor;?>><?php echo $values['current_location']; ?></p>
								<p><?php echo $values['drop_location'];?></p></td>
								<td><?php echo commonfunction::convertphpdate('d/m/Y h:i:s A',$values['pickup_time']);?></td>
								<td><?php echo $distance;?></td>																
								<td><?php echo $company_currency.$current_fare;?></td>
								<td><?php echo $convet_amt;?></td>
								</tr>								
								<?php $i++;
							}
						 ?>
					<?php }else { ?>
							<tr>
								<td colspan="3" align="center"><?php echo __('no_data');?></td>
							</tr> 							
						<?php }?>									
				</table>
				<?php if(count($passenger_logs_completed_transaction)>0) { ?>
			    <div align="left" class="button blackB"> 
					<input type="button" name="gen_pdf" id="gen_pdf" value="<?php echo __('gen_pdf');?>" title="<?php echo __('gen_pdf');?>" onclick="gen_pdf()">
			    </div>
			    <?php } ?>
				</div>
 
			
 
 
		</div>
	
	<!--Cancel Trip-->
	<div class="widget margin-bottom" >
			<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" />
			<h6><?php echo __('cancelled_journey'); ?></h6>
			 <form  action="<?php echo URL_BASE;?>manage/genpdf" method="post" name="drivermgmt" id="drivermgmt" >
			 <div class="title" align="right">
				<?php echo __('startdate');?>
				<input type="hidden" name="user_id" id="user_id" value="<?php echo $user_details[0]['id']; ?>">
				<input type="hidden" name="user_name" id="user_name" value="<?php echo $user_details[0]['name']; ?>">
				  <input type="hidden" name="user_type" id="user_type" value="P">
				<input type="text"  readonly title="<?php echo __('select_datetime'); ?>"  id="userstartdate" name="userstartdate" value=""  />
				<span id="startdate_error" class="errors" style="display:none;"></span>
				<?php echo __('enddate');?>
				<input type="text"  readonly title="<?php echo __('select_datetime'); ?>"  id="userenddate" name="userenddate" value=""  />
				<span id="enddate_error" class="errors" style="display:none;"></span>
				<div class="button blackB"> 
					<input type="hidden" name="type_export" id="type_export" value="">
					<input type="button" name="change_usercompany" id="change_usercompany" value="GO" title="Go" >
				</div>
			</div>
			</form>
        	
			</div>
			
			<div id="drivercompleted_logs">
				<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">
					<?php if(count($passenger_logs_cancelled_transaction)>0) { ?>
					
						
						<thead>
						<tr>
							<td>#</td>
							<td><?php echo __('passenger_name'); ?></td>
							<td><b><?php echo __('pickuploc_droploc'); ?></b></td>
							<td><b><?php echo __('pictup_date');?></b></td>
							<td><b><?php echo __('distance_km');?></b></td>									
							<td><b><?php echo __('trip_total_fare');?></b></td>
							<td><b><?php echo __('equivalent_to_usd').CURRENCY_FORMAT; ?></b></td>
							
							</tr>
						</tr>
						</thead>					
						
						<?php 
						$i=1;
						
						($i%2 == 1)?$class="eventr":$class="oddtr";
							foreach($passenger_logs_cancelled_transaction as $values)
							{
								$values['distance'] = isset($values['distance'])?$values['distance']:0;
								$distance = round($values['distance'],2);
								$current_fare = round($values['approx_fare'] ,2);
								//$company_tax = $values['Taxamt'];
								//$percentvalue = ($company_tax/100)*$current_fare;
								//$currtotal = $current_fare - $company_tax;
								$travel_status = $values['travel_status'];
								
								if($_SESSION['company_id'] != 0)
								{
									$company_currency = findcompany_currency($_SESSION['company_id']);
								}
								else
								{
									$company_currency = findcompany_currency($values['company_id']);
								}
								
								$company_currency_format = findcompany_currencyformat($values['company_id']);
								$convet_amt = currency_conversion($company_currency_format,$current_fare);
								$convet_amt = round($convet_amt,2);
								
							if($travel_status == 0) { $status = __('critical'); $row_solor = 'style="color:#00FF00;"';  } elseif($travel_status == 1) { $status = __('completed'); $row_solor = 'style="color:#00FF00;"'; }  elseif($travel_status == 2) { $status = __('inprogress'); $row_solor = 'style="color:#0000FF;"'; }  if($travel_status == 3) { $status = __('start_to_pickup'); $row_solor = 'style="color:#FFFF00;"'; } elseif($travel_status == 4) { $status = __('cancel_by_passenger'); $row_solor = 'style="color:#990066;"';} elseif($travel_status== 5) { $status = __('waiting_payment'); $row_solor = 'style="color:#00FFFF;"';} elseif($travel_status == 6) { $status = __('missed'); $row_solor = 'style="color:#FF6633;"';} elseif($travel_status == 7) { $status = __('dispatched'); $row_solor = 'style="color:#003333;"'; }  elseif($travel_status == 8) { $status = __('cancelled'); $row_solor = 'style="color:#990000;"';} 		//echo $row_solor;
								?>
								<tr class="<?php echo $class; ?>">	
								<td><?php echo $i;?></td>
								<td><?php echo (isset($values['passenger_name']))?ucfirst($values['passenger_name']):""; ?></td>
								<td><p <?php echo $row_solor;?>><?php echo $values['current_location']; ?></p>
								<p><?php echo $values['droplocation'];?></p></td>
								<td><?php echo commonfunction::convertphpdate('d/m/Y h:i:s A',$values['pickup_time']);?></td>
								<td><?php echo $distance;?></td>								
								<td><?php echo $company_currency.$current_fare;?></td>
								<td><?php echo $convet_amt;?></td>
								</tr>								
								<?php $i++;
							}
						 ?>
					<?php }else { ?>
							<tr>
								<td colspan="3" align="center"><?php echo __('no_data');?></td>
							</tr> 							
						<?php }?>									
				</table>
				<?php if(count($passenger_logs_completed_transaction)>0) { ?>
			    <div align="left" class="button blackB"> 
					<input type="button" name="gen_pdf" id="gen_pdf" value="<?php echo __('gen_pdf');?>" title="<?php echo __('gen_pdf');?>" onclick="gen_pdf()">
			    </div>
			    <?php } ?>
				</div>
 
			
 
 
		</div>
	<!--Cancel Trip-->
				<!-- Child Information Start Here -->
		<div class="widget margin-bottom" >
			<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" />
			<h6><?php echo __('child_account_details'); ?></h6></div>
				<div>
					<?php if(count($get_child_details)>0) { ?>
					<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">
						
						<thead>
						<tr>
							<td>#</td>
							<td><?php echo __('name'); ?></td>							
							<td><b><?php echo __('email_label');?></b></td>
							<td><b><?php echo __('phone');?></b></td>
							<td><b><?php echo __('address');?></b></td>
							<td><b><?php echo __('account_type');?></b></td>
							</tr>
						</tr>
						</thead>					
						
						<?php 
						$i=1;
						($i%2 == 1)?$class="eventr":$class="oddtr";
							foreach($get_child_details as $values)
							{ ?>
								<tr class="<?php echo $class; ?>">	
								<td><?php echo $i;?></td>
								<td><a title="<?php echo isset($values['name'])?ucfirst($values['name']):"-"; ?>" href="<?php echo URL_BASE.'manage/passengerinfo/'.$values['_id'];?>"><?php echo isset($values['name'])?wordwrap(ucfirst($values['name']),30,'<br/>',1):"-"; ?></a></td>
								<td><?php echo isset($values['email'])?wordwrap($values['email'],25,'<br />',1):"-"; ?></td>
								<td align="center"><?php
								$country_code = (!empty($values['country_code'])) ? $values['country_code'].'-' : '';
								$phoneNum = isset($values['phone'])?wordwrap($country_code.$values['phone'],25,'<br />',1):'';
								 echo $phoneNum; ?></td>
								<td><?php echo isset($values['address'])?wordwrap($values['address'],25,'<br />',1):"-"; ?></td>
								<td align="center"><?php echo isset($values['account_type_name'])?$values['account_type_name']:'';?></td>

								
								</tr>
								
								<?php $i++;
							} 
						 ?>
						</table>
					<?php }else {
							echo "<div class='no_data'>".__('no_data')."</div>"; 
							
						}?>		
					
						</div>
						</div>
				<!-- Child Information Ends Here -->
        </div>
        <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt"></div></div>
    </div>
</div>  

<input type="hidden" name="user_id" id="user_id" value="<?php echo $user_details[0]['id']; ?>">
<!-- Company Manager -->
<div id="user_ratings"></div>

<script type="text/javascript" language="javascript">
/* $(document).ready(function() {
toggle(1);
change_user_rating();
});*/
function change_user_rating()
{
      		var user_id = $("#user_id").val();

		var page_no = '1';
		  $.ajax({
			url:"<?php echo URL_BASE;?>manage/getuserratinglist",
			type:"get",
			data:"user_id="+user_id+"&page="+page_no,
			success:function(data){
			$('#user_ratings').html();
			$('#user_ratings').html(data);
			},
			error:function(data)
			{
				//alert(cid);
			}
		});	
    
}

function pagin_user_rating(page_no)
{
		var user_id = $("#user_id").val();

		  $.ajax({
			url:"<?php echo URL_BASE;?>manage/getuserratinglist",
			type:"get",
			data:"user_id="+user_id+"&page="+page_no,
			success:function(data){
			$('#user_ratings').html();
			$('#user_ratings').html(data);
			},
			error:function(data)
			{
				//alert(cid);
			}
		});	
    
}

$(document).ready(function () {
//alert();
$("#userstartdate").datetimepicker( {
showTimepicker:true,
showSecond: true,
timeFormat: 'hh:mm:ss',
dateFormat: 'yy-mm-dd',
stepHour: 1,
stepMinute: 1,
maxDateTime : new Date(),
stepSecond: 1
} );

$("#userenddate").datetimepicker( {
showTimepicker:true,
showSecond: true,
timeFormat: 'hh:mm:ss',
dateFormat: 'yy-mm-dd',
stepHour: 1,
stepMinute: 1,
maxDateTime : new Date(), 
stepSecond: 1
} );

toggle(1);
});


 $("#change_usercompany").click(function(){
 	var startdate = $("#userstartdate").val();
	var enddate = $("#userenddate").val();
	var passenger_id = $("#user_id").val();
	if(startdate =='')
	{
		$("#startdate_error").html("<?php echo __('select_startdate'); ?>");
		$("#startdate_error").show();
	}
	else
	{
		$("#startdate_error").html("");
		$("#startdate_error").hide();
	}
	if(enddate =='')
	{
		$("#enddate_error").html("<?php echo __('select_enddate'); ?>");
		$("#enddate_error").show();
	}
	else
	{
		$("#enddate_error").hide("");
		$("#enddate_error").hide();
	}
	if(startdate !='' && enddate!='')
	{
		$('#drivercompleted_logs').html('<img alt="ajax-loading" src="'+SrcPath+'/public/css/img/ajax-loaders/ajax-loader-1.gif" />');
		if(startdate > enddate)
		{
			$("#startdate_error").html("<?php echo __('startdate_greater'); ?>");
			$("#startdate_error").show();
		}
		else
		{
			$("#startdate_error").html("");
			$("#startdate_error").hide();
		var dataS = "startdate="+startdate+"&enddate="+enddate+"&passenger_id="+passenger_id;
		$.ajax
		({ 			
			type: "POST",
			url: SrcPath+"manage/passenger_completed_logs", 
			data: dataS, 
			cache: false, 
			dataType: 'html',
			success: function(response) 
			{ 	
				$('#drivercompleted_logs').html(response);			
			} 
			 
		});	
			
		}
	}
	 
 });
 

function gen_pdf(type)
{
	//alert(type);
 	var startdate = $("#userstartdate").val();
	var enddate = $("#userenddate").val();
	var user_id = $("#user_id").val();
	var driver_name = $('#driver_name').val();	
	$('#type_export').val(type);
	if(startdate =='')
	{
		$("#startdate_error").html("<?php echo __('select_startdate'); ?>");
		$("#startdate_error").show();
	}
	else
	{
		$("#startdate_error").html("");
		$("#startdate_error").hide();
	}
	if(enddate =='')
	{
		$("#enddate_error").html("<?php echo __('select_enddate'); ?>");
		$("#enddate_error").show();
	}
	else
	{
		$("#enddate_error").hide("");
		$("#enddate_error").hide();
	}
	if(startdate !='' && enddate!='')
	{
		if(startdate > enddate)
		{
			$("#startdate_error").html("<?php echo __('startdate_greater'); ?>");
			$("#startdate_error").show();
		}
		else
		{
			//alert();
			$("#startdate_error").html("");
			$("#startdate_error").hide();
			document.forms['drivermgmt'].submit();
		}
	}
	 
 }
</script>
