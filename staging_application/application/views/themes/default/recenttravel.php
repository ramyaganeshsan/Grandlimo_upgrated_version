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
		<!-- content starts -->	
		<div class="bread_crumb_holder">
			<ul class="breadcrumb">
				<li>
					<a href="<?php echo URL_BASE; ?>"><?php echo __('Home'); ?></a> <span class="divider">/</span>
				</li>
				<li>
					<a href="<?php echo URL_BASE;?>passengers/dashboard"><?php echo __('dashboard'); ?></a> <span class="divider">/</span>
				</li>
				<li>
					<a href="#"><?php echo __('recentjourney'); ?></a>
				</li>
			</ul>
		</div>
			
		<div class="" id="comments_ratings">
		
		<!-- Starting Map -->
		
			<div class="box span6" style="margin:5px 0 5px 100px;width:75%;float:left;display:none;" id="map-container">
				<div class="box-header well" data-original-title>
					<h2><i class="icon icon-blue icon-lightbulb "></i><?php echo " ".__('current_driver_loca'); ?></h2>
					<div class="box-icon">						
						<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
					</div>
				</div>
				<div id="tools">			
					<input type="hidden" name="start" id="start" value="Palakad, Kerala"/>	
					<input type="hidden" name="end" id="end" value="Ganapathy, Coimbatore"/>			
				</div>
				<div id="map-canvas" style="width:100%;height:300px;display:none;"></div>
			</div>	
		
		<!-- Ending Map -->
		
		
		<div class="row-fluid sortable">
			<div class="box span12">
				<div class="box-header well" data-original-title>
					<h2><i class="icon icon-blue icon-home "></i><?php echo " ".__('recentjourney'); ?></h2>

					<div class="box-icon">						
						<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
					</div>
				</div>
				
					<div class="box-content">
						<?php if(count($passengers_all_compl) > 0){ ?>
						<table class="table table-hover table-bordered">
						
						<tr>
							<td>#</td>
							<td><b><?php echo __('Current_Location'); ?></b></td>
							<td><b><?php echo __('Drop_Location'); ?></b></td>
							<td><b><?php echo __('pictup_date');?></b></td>
							<td><b><?php echo __('pictup_time');?></b></td>
							<td><b><?php echo __('driver_name');?></b></td>	
							<td><b><?php echo __('distance_km');?></b></td>		
							<td><b><?php echo str_replace('%currency%',CURRENCY,__('taxi_fare_km'));?></b></td>		
							<td><b><?php echo __('trip_total_fare').'('.CURRENCY.')';?></b></td>	
							<td><b><?php echo __('comments');?></b></td>		
						</tr>
						<?php 
						$offset = $offset+1;
						$i=$offset;
						$total_fare = "";
						foreach($passengers_all_compl as $values)
						{
							$distance = round($values['distance'],2);
							$current_fare = round($values['fare'],2);
							$fare_km = 0;
							if(isset($values['fare']) && ($current_fare > 0) && ($distance > 0))
							{
								$fare_km = $current_fare/$distance;
							}
							$total_fare = $current_fare+$total_fare;
						?>
						<tr>			
							<td><?php echo $i;?></td>
							<td><?php echo $values['current_location'];?></td>
							<td><?php echo $values['drop_location'];?></td>
							<td><?php echo date('d/m/Y',strtotime($values['pickup_time']));?></td>
							<td><?php echo date('h:i:s a', strtotime($values['pickup_time']));?></td>
							<td><?php
							echo $values['drivername'];
							$comments = htmlentities($values['comments']);?></td>
							<td><?php echo $distance;?></td>
							<td><?php echo round($fare_km);?></td>
							<td><?php echo $current_fare;?></td>
							<td><?php if($values['payment_type'] == 2) { $pay_mode = 'Credit Card Using Paypal'; } else { $pay_mode = 'Cash'; } ?>
                                <?php echo $pay_mode;?></td>
							<td>
								<?php if ($comments != "" && $values['rating'] != 0) { ?>
								<input type="button" class="btn btn-inverse view_icon" value="<?php echo __('view_label');?>" title="<?php echo __('view_label');?>" onclick="commentsdetailspopup('<?php echo $values['drivername'];?>','<?php echo $values['driver_id'];?>','<?php echo $values['passengers_log_id'];?>','<?php echo $comments?>');" />
								<?php }else {?>
								<input type="button" class="btn btn-inverse comment_icon" value="<?php echo __('comments');?>" title="<?php echo __('comments');?>" onclick="showcommentspopup('<?php echo $values['drivername'];?>','<?php echo $values['driver_id'];?>','<?php echo $values['passengers_log_id'];?>','<?php echo $comments?>');" />
								<?php } ?>
								<br /> <br />
								<?php if($values['payment_type'] == 2) { ?>
								<input type="button" class="btn btn-inverse pay_icon" value="<?php echo __('pay_det'); ?>"   title="<?php echo __('pay_det');?>" onclick="transactiondetailspopup_card('<?php echo $values['transaction_id']; ?>','<?php echo $values['correlation_id'];?>','<?php echo CURRENCY;?><?php echo $values['amt'];?>','<?php echo CURRENCY; ?><?php echo $values['passenger_discount'];?>','<?php echo $values['payment_status']; ?>','<?php echo $pay_mode; ?>');" />
								<?php  } else { ?> 
								<input type="button" class="btn btn-inverse pay_icon" value="<?php echo __('pay_det'); ?>"   title="<?php echo __('pay_det');?>" onclick="transactiondetailspopup('<?php echo $values['transaction_id']; ?>','<?php echo $values['correlation_id'];?>','<?php echo CURRENCY;?><?php echo $values['fare'];?>','<?php echo CURRENCY; ?><?php echo $values['passenger_discount'];?>','<?php echo $values['payment_status']; ?>','<?php echo $pay_mode; ?>');" />
								<?php
								}
								?>
								</td>
							</tr>
						<?php $i=$i+1;} ?>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td colspan="2"><?php echo __('total'); ?>(<?php echo CURRENCY;?>)</td>
								<td><?php echo $total_fare;?></td>
								<td></td>
								<td></td>
							</tr>
						</table>
						<?php } else { echo __('no_data');} ?>
					</div>
					<!-- Pagination start -->
				<div class="clr">&nbsp;</div>
				<div class="pagination2">
					<?php if($passengers_all_compl > 0): ?>
					 <p><?php echo $pag_data->render(); ?></p>  
					<?php endif; ?> 
				</div>
				<div class="clr">&nbsp;</div>
				<!-- Pagination end -->
				</div>
				
			</div>
			
		</div>
		
	</div>	
	
</div>

<!-- Rating -->
		<div id="rating_pop">
               <h2><?php echo __('comments');?></h2>               
               <div class="login_total">                                               
                        <div class="login_form">
                            <ul>
				<li><span><?php echo __('rate_driver');?>:</span>
				<div id="outer">
					<div id="inner">
							
					</div>
				</div>
				</li>
                                <li><span><?php echo __('comments');?>:</span><textarea name="comments" id="comments" /></textarea></li>
                                <li><span><?php echo __('driver_name');?>:</span><span id="driver_name"></span>
</li>
				  <span id="c_result"></span>
				  <li><span></span>
				<input name="submit_rating" class="btn btn-inverse" type="button" title="<?php echo __('submit');?>" value="<?php echo __('submit');?>" onclick="savecomments()" /></li>
                            </ul>                      
		       </div>
        </div>
		<a id="close_x" class="close sprited left_rtg" href="#"><?php echo __('close');?></a>

</div>
	<!-- View Details -->
	<div id="details_pop">
				   <h2><?php echo __('comments');?></h2>               
				   <div class="login_total">                                               
							<div class="login_form">
								<ul>
					<li><span><?php echo __('rating_points');?>:</span>
					<div id="outer">
						<div id="v_inner">
								
						</div>
						<input type="hidden" name="rval" id="rval" value="" />
					</div>
					</li>
									<li><span><?php echo __('comments');?>:</span><span id="v_comments" /></span></li>
									<li><span><?php echo __('driver_name');?>:</span><span id="v_driver_name"></span>
									<?php //print_r($data); ?>
					  <li><span></span>	
					  <?php 
					  $login_from = $user_det[0]['login_from'];
					  if($login_from=='3')
					  {
					  ?> 
					 <li><a id="fb_id" href="http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $meta_title; ?>&amp;p[comments]=summary&amp;p[url]=<?php echo URL_BASE; ?>" target="_blank" title="Share on Facebook">
						<img src="<?php echo URL_BASE; ?>public/admin/images/facebook_share.png" alt="Facebook Share" />
						</a>
					</li>	
					<?php
				}
				?>	
								</ul>                      
				   </div>
					  </div>
	<a id="close_x" class="close sprited left_rtg" href="#"><?php echo __('close');?></a>

	</div>
	
	<!--Transaction View Details -->
	<div id="transaction_details_pop">
				   <h2><?php echo __('transactiondet');?></h2>               
				   <div class="login_total">                                               
							<div class="login_form">
								<ul>
									
									<li><span><?php echo __('trans_amt');?>:</span><span id="trans_amt"></span>
									<li><span><?php echo __('pay_mode');?>:</span><span id="pay_mode"></span>
									
									<?php //print_r($data); ?>
					  <li><span></span>	
					  <?php 
					  $login_from = $user_det[0]['login_from'];
					  if($login_from=='3')
					  {
					  ?> 
					 <li><a id="fb_id" href="http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $meta_title; ?>&amp;p[comments]=summary&amp;p[url]=<?php echo URL_BASE; ?>" target="_blank" title="Share on Facebook">
						<img src="<?php echo URL_BASE; ?>public/admin/images/facebook_share.png" alt="Facebook Share" />
						</a>
					</li>	
					<?php
				}
				?>	
								</ul>                      
				   </div>
					  </div>
	<a id="close_x" class="close sprited left_rtg" href="#"><?php echo __('close');?></a>

	</div>
	
	
		<!--Transaction View Details -->
	<div id="transaction_details_pop_card">
				   <h2><?php echo __('transactiondet');?></h2>               
				   <div class="login_total">                                               
							<div class="login_form">
								<ul>
									<li><span><?php echo __('trans_id');?>:</span><span id="transaction_id" /></span></li>
									<li><span><?php echo __('correlationid');?>:</span><span id="correlation_id"></span>
									<li><span><?php echo __('trans_amt');?>:</span><span id="trans_amt"></span>
									<li><span><?php echo __('pay_mode');?>:</span><span id="pay_mode"></span>
									<li><span><?php echo __('trans_payment_status');?>:</span><span id="trans_payment_status"></span>
									<?php //print_r($data); ?>
					  <li><span></span>	
					  <?php 
					  $login_from = $user_det[0]['login_from'];
					  if($login_from=='3')
					  {
					  ?> 
					 <li><a id="fb_id" href="http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $meta_title; ?>&amp;p[comments]=summary&amp;p[url]=<?php echo URL_BASE; ?>" target="_blank" title="Share on Facebook">
						<img src="<?php echo URL_BASE; ?>public/admin/images/facebook_share.png" alt="Facebook Share" />
						</a>
					</li>	
					<?php
				}
				?>	
								</ul>                      
				   </div>
					  </div>
	<a id="close_x" class="close sprited left_rtg" href="#"><?php echo __('close');?></a>

	</div>
