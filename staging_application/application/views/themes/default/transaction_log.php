<?php 
	defined('SYSPATH') OR die('No direct access allowed.'); 
	foreach($dashstyles as $file => $type)
	{ 
	   echo HTML::style($file, array('media' => $type)); 
	}    
	foreach($dashscripts as $file => $type)
	{ 
	   echo HTML::script($type); 
	}  
 
 ?>
	<!-- Navigation Start -->
	<div class="span2 main-menu-span">
		<div class="well nav-collapse sidebar-nav">
			  <?php echo new View(USERVIEW."/passenger_sidebar"); ?>
		</div><!--/.well -->
	</div><!--/span-->
	<!-- Navigation End -->
			
<div id="content" class="span10">
	 <?php
//For Notice Messages
								//===================
								$sucessful_message=Message::display();
//echo $sucessful_message;		
//$Message->message;
		    if($sucessful_message) { ?>

				<div id="messagedisplay">
					<div class="alert alert-success">
                        <div class="success_float_tt">
							<button type="button" class="close" data-dismiss="alert">×</button>
		                    <label style="float: left; margin: 4px 0 0 6px;"><?php echo $sucessful_message; ?></label>
                        </div>
                    </div>
			    </div>
								<?php } ?>    
	<div class="bread_crumb_holder">
			<ul class="breadcrumb">
				<li>
					<a href="<?php echo URL_BASE; ?>"><?php echo __('home'); ?></a> <span class="divider">/</span>
				</li>
				
				<li>
					<a href="#" title="<?php echo __('trans_log'); ?>"><?php echo __('trans_log'); ?></a>
				</li>
			</ul>
		</div>

<div id="content" class="">		
<div class="row-fluid sortable">
			<div class="box span12">
				<div class="box-header well" data-original-title>
					<h2><i class="icon icon-blue icon-home "></i><?php echo " ".__('cancel_journey'); ?></h2>

					<div class="box-icon">						
						<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
					</div>
				</div>
				
					<div class="box-content">
						<?php if(count($all_transaction_list) > 0){ ?>
						<table class="table table-hover table-bordered">
						
						<tr>
							<td>#</td>
							<td><b><?php echo __('Current_Location'); ?></b></td>
							<td><b><?php echo __('Drop_Location'); ?></b></td>
							<td><b><?php echo __('pic_date_time');?></b></td>
							<!--<td><b><?php //echo __('pictup_time');?></b></td>
							<td><b><?php echo __('driver_name');?></b></td>	-->
							<!--<td><b><?php //echo __('distance_km');?></b></td>
							<td><b><?php echo __('No_Passengers');?></b></td>	-->			
						<?php /* 	<td><b><?php echo __('cancel_fare').'('.CURRENCY.')';?></b></td>	 */ ?>
	
	
						</tr>
						<?php 
						$i=1;
						//$total_fare = "";
						$tot="";
						
						foreach($all_transaction_list as $values) 
						{ 
							$pickup_date = Commonfunction::convertphpdate('d/m/Y',$values['pickup_time']);
							$pickup_time = Commonfunction::convertphpdate('h:i:s a',$values['pickup_time']);
							
							$distance = round($values['approx_distance'],2);
							//$current_fare = round($values['fare'],2);
						//	$fare_km = 0;
							//if(isset($values['fare']) && ($current_fare > 0) && ($distance > 0) )
							//{
								//$fare_km = $current_fare/$distance;
							//}
						//	$total_fare = $current_fare+$total_fare;
							//$track_id = $values['id'];
						?>
						<tr>			
							<td><?php echo $i;?></td>
							<td><?php echo $values['current_location'];?></td>
						<td><?php echo (isset($values['droplocation'])=="")?'-':$values['droplocation']; ?></td>
							<!--<td><?php //echo $values['no_passengers'];?></td>-->
							 <td><?php echo $pickup_date; ?><br /><?php echo 
                                    $pickup_time ?></td>
							<!--<td><?php //echo date('h:i:s a', strtotime($values['pickup_time']));?></td>
							<td><?php
							//echo $values['driver_name'];
							//$comments = htmlentities($values['comments']);?></td>
							<!--<td><?php //echo $distance;?></td>
							<td><?php echo $values['no_passengers'];?></td>-->
							<?php /* <td><?php 
							$cancel_fare = $values['fare'];							
							if($cancel_fare != "")
							{
								echo $cancel_fare;
							}
							else
							{
								echo 0;
							}?></td> */ ?>
							
							</tr>
						<?php //$tot += $values['fare']; 
						$i=$i+1;} ?>
					<?php /*	<tr>			
							<td></td>
							<td></td>
							<td></td>							
							<td></td>
							<td></td>
							 <td><?php echo __('total'); ?>
(<?php echo CURRENCY;?>)</td>
							<td><?php echo $tot; ?></td> 
							
							</tr>*/?>
							<?php } ?>
						</table>
						  <?php
						 if(count($all_transaction_list)<1){
							echo __('no_data');
						 }
						 ?>
					</div>
					
					 <!-- Pagination start -->
               
                <div class="pagination2">
                    <?php if ($all_transaction_list > 0): ?>
                        <p><?php echo $pag_data->render(); ?></p>  
                    <?php endif; ?> 
                </div>
    
                
                <!-- Pagination end -->
                
				</div>
				
			</div>
		</div>
		
		</div>
	</div>

<script type="text/javascript">
$(document).ready(function(){

var field_val = $("#name").val();
$("#name").focus().val("").val(field_val);
});

function Checkfiles()
{
var fup = document.getElementById('profile_picture');
var fileName = fup.value;
var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" || ext == "png" || ext == "PNG" || ext == "bmp" || ext == "BMP")
{
return true;
} 
else
{
alert("Upload Gif,Jpg,Png,Bmp images only");
fup.focus();
return false;
}
}
</script>
