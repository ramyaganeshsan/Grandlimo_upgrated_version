<?php defined('SYSPATH') OR die("No direct access allowed.");
if($_SESSION['user_type'] !='M' && $_SESSION['user_type'] !='S')
{
	if($_SESSION['user_type'] =='C')
	{
		$company_currency = findcompany_currency($_SESSION['company_id']);
	}
	else
	{
		$company_currency = CURRENCY;
	}
} //echo $company_currency;exit;
?>
<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle"> 
			<table border="0" cellpadding="5" cellspacing="0" width="100%"> 
			<tr>
			<td valign="top" width="20%"><label><?php echo __('model_name'); ?></label></td>        
			<td>
				<?php
				if($_SESSION['user_type'] == 'C')
				{
					echo $model_name['model_name'];
				}
				else
				{
					echo isset($model_details['model_name'])? trim($model_details['model_name']):''; 
				}
				
		?>
			</td>   	
			</tr>
		
			<!--Fare Details start-->
			  <tr>
			   <td><?php 
			  
			   echo ucfirst(__('fare_details')); ?></td>
			   <td></td>	          
				   </tr>
				   
				  <?php /*  <tr>
				   <td valign="top" width="20%"><label><?php echo __('base_fare'); ?>(<?php echo $company_currency; ?>)</label></td>        
				   <td>	
				   <?php echo isset($model_details['base_fare'])? trim($model_details['base_fare']):''; ?>		   
		
				   </td>   	
				   </tr>
				   
				   <tr>
				   <td valign="top" width="20%"><label><?php echo __('taxi_min_km'); ?></label></td>        
				   <td>	
				   <?php echo isset($model_details['min_km'])? trim($model_details['min_km']):''; ?>		   
		
				   </td>   	
				   </tr>   
				   
					<tr>
				   <td valign="top" width="20%"><label><?php echo __('min_fare'); ?>(<?php echo $company_currency; ?>)</label></td>        
				   <td>
					   <?php echo isset($model_details['min_fare']) ? trim($model_details['min_fare']):''; ?>
				  
				   </td>   	
				   </tr>  
				   
				   
				   <tr>
				   <td valign="top" width="20%"><label><?php echo __('cancellation_fare'); ?>(<?php echo $company_currency; ?>)</label></td>        
				   <td>
					   <?php echo isset($model_details['cancellation_fare'])? trim($model_details['cancellation_fare']):''; ?>
		
				   </td>   	
				   </tr>
				   
				   <tr>
				   <td valign="top" width="20%"><label><?php echo __('below_and_above_km'); ?></label></td>        
				   <td>
					   <?php echo isset($model_details['below_above_km'])? trim($model_details['below_above_km']):''; ?>
		
				   </td>   	
				   </tr>
				   
				   <tr><?php isset($model_details['below_above_km'])?$adv_blow_km=$model_details['below_above_km']:$adv_blow_km=" ";
				$below=str_replace("%s",$adv_blow_km,__('below_km'));
				$above=str_replace("%s",$adv_blow_km,__('above_km'));
				 ?>
				   <td valign="top" width="20%"><label><?php echo $below; ?></label></td>        
				   <td>
					   <?php echo isset($model_details['below_km'])? trim($model_details['below_km']):''; ?>
				   
				   </td>   	
				   </tr>   
				   
				   <tr>
				   <td valign="top" width="20%"><label><?php echo $above; ?></label></td>        
				   <td>
					   <?php echo isset($model_details['above_km'])? trim($model_details['above_km']):''; ?>
				 
				   </td>   	
				   </tr>  */?>
				   
				   <tr>
				   <td valign="top" width="20%"><label><?php echo __('waiting_charge_ph'); ?>(<?php echo $company_currency; ?>)</label></td>        
			   <td>
				   <?php echo isset($model_details['waiting_time'])? trim($model_details['waiting_time']):''; ?>
			   </td>   	
				   </tr>  
				   	<tr>
				   <td valign="top" width="20%"><label><?php echo __('waiting_free'); ?></label></td>        
				   <td>
					   <?php echo isset($model_details['waiting_free'])? trim($model_details['waiting_free']):''; ?>
				   </td>   	
				</tr> 
				<tr>
				   <td valign="top" width="20%"><label><?php echo __('fare_per_minute'); ?>(<?php echo $company_currency; ?>)</label></td>        
				   <td>
					   <?php echo isset($model_details['minutes_fare'])? trim($model_details['minutes_fare']):''; ?>
				   </td>   	
				</tr> 
				<tr>
				   <td valign="top" width="20%"><label><?php echo __('maximum_luggage'); ?></label></td>        
				   <td>
					   <?php echo isset($model_details['max_luggage'])? trim($model_details['max_luggage']):''; ?>
				   </td>   	
				</tr> 
				<?php /* <tr>
				   <td valign="top" width="20%"><label><?php echo __('taxi_min_speed'); ?></label></td>        
				   <td>
					   <?php echo isset($model_details['taxi_min_speed'])? trim($model_details['taxi_min_speed']):''; ?>
				   </td>   	
				</tr> */?>
					<?php
					//print_r($model_details);exit;
					$nc = $model_details['night_charge']; 
				   if($nc==1){ ?>
				   <tr>
				   <td valign="top" width="20%"><label><?php echo __('night_charge'); ?></label></td>        
				   <td>
					   <?php $nfield_type =''; $nfield_type =  isset($model_details['night_charge']) ? trim($model_details['night_charge']):''; ?>
					<?php if($nfield_type == '1') { echo 'Yes'; } ?>
					<?php if($nfield_type == '0') { echo 'No'; } ?>
		
				   </td>   	
				   </tr> 
				  
				   <tr>
					   <td valign="top" width="20%"><label><?php echo __('night_timing_from'); ?></label></td>        
					   <td>
							<?php echo isset($model_details['night_timing_from'])? trim($model_details['night_timing_from']):''; ?>
					   </td>   	
				   </tr>
				   
				   <tr>
					   <td valign="top" width="20%"><label><?php echo __('night_timing_to'); ?></label></td>        
					   <td>
							<?php echo isset($model_details['night_timing_to'])? trim($model_details['night_timing_to']):''; ?>
					   </td>   	
				   </tr>
				   
				   <tr>
					   <td valign="top" width="20%"><label><?php echo __('night_fare'); ?></label></td>        
					   <td>
							<?php echo isset($model_details['night_fare'])? trim($model_details['night_fare']):''; ?>
					   </td>   	
				   </tr>
				   <?php } ?>
				   <?php 
					$ec = $model_details['evening_charge']; 
				   if($ec==1){ ?>
					<tr>
				   <td valign="top" width="20%"><label><?php echo __('evening_charge'); ?></label></td>        
				   <td>
					   <?php $efield_type =''; $efield_type =  isset($model_details['evening_charge']) ? trim($model_details['evening_charge']):''; ?>
					<?php if($efield_type == '1') { echo 'Yes'; } ?>
					<?php if($efield_type == '0') { echo 'No'; } ?>
		
				   </td>   	
				   </tr> 
				   
				   <tr>
					   <td valign="top" width="20%"><label><?php echo __('evening_timing_from'); ?></label></td>        
					   <td>
							<?php echo isset($model_details['evening_timing_from'])? trim($model_details['evening_timing_from']):''; ?>
					   </td>   	
				   </tr>
				   
				   <tr>
					   <td valign="top" width="20%"><label><?php echo __('evening_timing_to'); ?></label></td>        
					   <td>
							<?php echo isset($model_details['evening_timing_to'])? trim($model_details['evening_timing_to']):''; ?>
					   </td>   	
				   </tr>
				   
				   <tr>
					   <td valign="top" width="20%"><label><?php echo __('evening_fare'); ?></label></td>        
					   <td>
							<?php echo isset($model_details['evening_fare'])? trim($model_details['evening_fare']):''; ?>
					   </td>   	
				   </tr>
           <?php } ?>           
				<!--Fare Details end-->
            </table>
        </div>
        <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt"></div></div>
    </div>
</div>
<?php
$url = $_SERVER['REQUEST_URI'];
$spliturl = explode('/',$url);
$toggleurl = $spliturl[2];
if($toggleurl == 'fareinfo') {
?>
<script type="text/javascript">
$(document).ready(function(){
 $("#companyname").focus(); 
	toggle(33);
});
</script>
<?php } else { ?>
<script type="text/javascript">
$(document).ready(function(){
 $("#companyname").focus(); 
	toggle(13);
});
</script>
<?php } ?>
