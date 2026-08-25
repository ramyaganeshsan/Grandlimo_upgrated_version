<?php defined('SYSPATH') OR die('No direct access allowed.'); 
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
		<?php echo new View(USERVIEW."/driver/driver_sidebar"); ?>
	</div><!--/.well -->
</div><!--/span-->
<!-- Navigation End -->
<div id="content" class="span10">
<!-- content starts -->			
	<div class="bread_crumb_holder">
		<ul class="breadcrumb">
			<li>
				<a href="#"><?php echo __('home'); ?></a> <span class="divider">/</span>
			</li>
			<li>
				<a href="<?php echo URL_BASE . 'driver/dashboard'?>"><?php echo __('dashboard'); ?></a> <span class="divider">/</span>
			</li>
			<li>
				<a href="#"><?php echo __('transactionlog_label'); ?></a>
			</li>
		</ul>
	</div>
	<!--<form>
		<table>
			<tr>
				<td><label>From Date:</label><input type="text" id="startdate" name="startdate" /></td><td><label>To Date:</label><input type="text" id="enddate" name="enddate" /></td>
			</tr>
			<tr>
				<td><div class="button brownB"><input type="submit" value="Submit"></div></td>
			</tr>
		</table>
	</form>-->
	<div  id="comments_ratings">
		<div class="row-fluid sortable">
			<div class="box span12">
				<div class="box-header well" data-original-title>
					<h2><?php echo __('transactionlog_label'); ?></h2>
					<div class="box-icon">
						<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
					</div>
				</div>
				<div class="box-content">
					<?php if(count($all_transaction_list)>0) { ?>
					<table class="table table-hover">
						<tr>
							<th><?php echo __('sno_label'); ?></th>
							<th><?php echo __('passenger_name'); ?></th>
							<th><?php echo __('journey_date'); ?></th>
							<th><?php echo __('Current_Location'); ?></th>
							<th><?php echo __('Drop_Location'); ?></th>
							<th><?php echo __('No_Passengers'); ?></th>
							<th><?php echo __('trip_total_fare').'('.CURRENCY.')'; ?></th>
						</tr>
						<?php
						$j = 0;
						$tot_fare="";
						foreach($all_transaction_list as $res){
						//echo "<pre>";	print_r($res);echo "</pre>";
						$j++;
						?>
						<tr>
							<td><?php echo $j; ?></td>
							<td><?php echo ucfirst($res['passenger_name']); ?></td>
							<td><?php echo $res['createdate']; ?></td>
							<td><?php echo $res['current_location']; ?></td>
							<td><?php echo ($res['drop_location'])==""?'-':$res['drop_location']; ?></td>
							<td><?php echo ($res['no_passengers'])=="0"?'-':$res['no_passengers'];?></td>
							<td><?php echo $res['fare']; ?></td>
						</tr>
						<?php
						$tot_fare += $res['fare'];
						}
						?>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>Total(<?php echo CURRENCY;?>)</td>
							<td><?php echo $tot_fare; ?></td>
						</tr>
					</table>
					<?php }else {
							echo __('no_data');
						}?>
				</div>
			</div>
		</div>
	</div>
</div>

