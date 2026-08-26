<?php 
	defined('SYSPATH') OR die('No direct access allowed.'); 
	foreach($dashstyles as $file => $type)
	{ 
	   echo HTML::style($file, ['media' => $type]); 
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
	<div id="content" class="span10">	
	<!-- content starts -->	
		<div class="bread_crumb_holder">
			<ul class="breadcrumb">
				<li>
					<a href="<?php echo URL_BASE; ?>"><?php echo __('Home'); ?></a> <span class="divider">/</span>
				</li>
				<li>
					<a href="<?php echo URL_BASE;?>driver/dashboard"><?php echo __('dashboard'); ?></a> <span class="divider">/</span>
				</li>
				<li>
					<a href="#"><?php echo __('completed_trip'); ?></a>
				</li>
			</ul>
		</div>
	</div>
	
	<div id="comments_ratings">
		<div class="row-fluid sortable">
			<div class="box span12">
				<div class="box-header well" data-original-title>
					<h2><i class="icon icon-blue icon-home "></i><?php echo " ".__('completed_trip'); ?></h2>

					<div class="box-icon">						
						<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
					</div>
				</div>
				<div class="box-content">
					<?php if(count($driver_logs_completed_transaction) > 0){ ?><table class="table table-hover table-bordered">
							<tr>
								<td>#</td>
								<td><b><?php echo __('Current_Location'); ?></b></td>
								<td><b><?php echo __('Drop_Location'); ?></b></td>
								<td><b><?php echo __('pictup_date');?></b></td>
								<td><b><?php echo __('pictup_time');?></b></td>
								<td><b><?php echo __('distance_km');?></b></td>		
								<td><b><?php echo str_replace('%currency%',CURRENCY,__('taxi_fare_km'));?></b></td>		
								<td><b><?php echo __('trip_total_fare').'('.CURRENCY.')';?></b></td>	
								<td><b><?php echo __('comments');?></b></td>		
							</tr>
							<?php
							$i = $offset+1;
							$total_fare = "";
							foreach($driver_logs_completed_transaction as $values)
							{
								$distance = round($values->actual_distance,2);
								$current_fare = round($values->fare,2);
								$fare_km = 0;
								if(isset($values->fare) && ($current_fare > 0) && ($distance > 0) )
								{
									$fare_km = $current_fare/$distance;
								}
								$total_fare = $current_fare+$total_fare;
							?>
							<tr>			
								<td><?php echo $i;?></td>
								<td><?php echo wordwrap($values->current_location,30,'<br/>',1);?></td>
								<td><?php echo ($values->drop_location)==""?'-':wordwrap($values->drop_location,30,'<br/>',1); ?></td>
								<?php /*<td><?php echo ($values->no_passengers)=="0"?'-':$values->no_passengers;?></td> */ ?>
								<td><?php echo date('d/m/Y',strtotime($values->pickup_time));?></td>
								<td><?php echo date('h:i:s a', strtotime($values->pickup_time));?></td>
								<td><?php echo $distance;?></td>
								<td><?php echo round($fare_km);?></td>
								<td><?php echo $current_fare;?></td>
								<td><?php $comments = htmlentities($values->comments);?>
								 <input type="button" class="btn btn-inverse" value="<?php echo __('comments');?>" title="<?php echo __('comments');?>" onclick="showdriverratingpopup('<?php echo $values->rating;?>','<?php echo ($comments== null)?'No Comments':$comments;?>');" /></td>
							</tr>
							<?php $i=$i+1;
						}
							?>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td colspan="2">Total(<?php echo CURRENCY;?>)</td>
								<td><?php echo $total_fare;?></td>
								<td></td>
							</tr>
						</table>
						<?php } else { echo __('no_data');} ?>
				</div>
				<!-- Pagination start -->
				<div class="clr">&nbsp;</div>
				<div class="pagination1">
					<?php if(count($get_driver_total_logs_completed_transaction) > 0): ?>
					 <p><?php echo $pag_data->render(); ?></p>  
					<?php endif; ?> 
				</div>
				<div class="clr">&nbsp;</div>
				<!-- Pagination end -->
			</div>
		</div>
	</div>
</div>
<!-- View Details -->
<div id="details_pop">
	<h2><?php echo __('comments');?></h2>               
	<div class="login_total">                                               
		<div class="login_form">
			<ul>
				<li><span><?php echo __('rating_points');?>:</span>
					<div id="outer">
						<div id="inner">
						<?php

						?>		
						</div>
					</div>
				</li>
				<li><span><?php echo __('comments');?>:</span><span id="v_comments" /></span></li>				
			</ul>                      
		</div>
	</div>
	<a id="close_x" class="close sprited" href="#"><?php echo __('close');?></a>
</div>
