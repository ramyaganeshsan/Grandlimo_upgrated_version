<?php defined('SYSPATH') OR die('No direct access allowed.'); 
?>
<div class="banner_part">            
	<div class="banner_inner">
		<div class="profile_total">
			<div class="profile_lft">
				  <ul class="nav nav-list">             
						<li ><a href="<?php echo URL_BASE;?>passengers/editprofile" title="Edit Profile"> Edit Profile  </a></li>
						<li><a href="<?php echo URL_BASE;?>passengers/changepassword" title="Change Password"> Change Password  </a></li>
						<li class="active"><a href="<?php echo URL_BASE;?>passengers/passengerlog" title="<?php echo __('passenger_log'); ?>"> <?php echo __('passenger_log'); ?> </a></li>
						<li><a href="<?php echo URL_BASE;?>passengers/logout" title="Logout"> Logout </a></li>              
					  </ul>

    </div>
	<div class="profile_rgt">
		 <h1><?php echo __('passenger_log'); ?></h1>
		<table class="table table-hover">
		<tr>
			<td>#</td>
			<td><b><?php echo __('Current_Location'); ?></b></td>
			<td><b><?php echo __('Drop_Location'); ?></b></td>
			<td><b><?php echo __('No_Passengers'); ?></b></td>
			<td><b><?php echo __('pictup_time');?></b></td>
			<td><b><?php echo __('waiting_time');?></b></td>	
			<td><b><?php echo __('driver_name');?></b></td>	
			<td><b><?php echo __('comments');?></b></td>		
		</tr>
		<?php 
		$i=1;
		foreach($passengerslogs as $values)
		{
		?>
		<tr>			
			<td><?php echo $i;?></td>
			<td><?php echo $values['current_location'];?></td>
			<td><?php echo $values['drop_location'];?></td>
			<td><?php echo $values['no_passengers'];?></td>
			<td><?php echo date('h:m:s', $values['pickup_time']);?></td>
			<td><?php echo date('h:m:s', $values['waitingtime']);?></td>
			<td><?php //$name = $this->get_driver_name($values['driver_id']);
			echo $values['drivername'];
			$comments = htmlentities($values['comments']);?></td>
			<td>
				<?php if($comments !="" &&  $values['driver_id'] != 0){?>
				<input type="button" class="btn btn-inverse" value="<?php echo __('view_label');?>" title="<?php echo __('view_label');?>" onclick="commentsdetailspopup('<?php echo $values['drivername'];?>','<?php echo $values['driver_id'];?>','<?php echo $values['passengers_log_id'];?>','<?php echo $comments?>');" />
				<?php }else {?>
				<input type="button" class="btn btn-inverse" value="<?php echo __('comments');?>" title="<?php echo __('comments');?>" onclick="showcommentspopup('<?php echo $values['drivername'];?>','<?php echo $values['driver_id'];?>','<?php echo $values['passengers_log_id'];?>','<?php echo $comments?>');" />
				<?php } ?>
				</td>
			</tr>
		<?php $i=$i+1;} ?>
		</table>
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
                                <input type="hidden" name="driver_id" id="driver_id" value="">
                                <input type="hidden" name="log_id" id="log_id" value=""></li>
				  <span id="c_result"></span>
				  <li><span></span>
				<input name="submit_rating" class="btn btn-inverse" type="button" title="<?php echo __('submit');?>" value="<?php echo __('submit');?>" onclick="savecomments()" /></li>
                            </ul>                      
		       </div>
                  </div>
<a id="close_x" class="close sprited" href="#"><?php echo __('close');?></a>
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
				</div>
				</li>
                                <li><span><?php echo __('comments');?>:</span><span id="v_comments" /></span></li>
                                <li><span><?php echo __('driver_name');?>:</span><span id="v_driver_name"></span>
				  <li><span></span>				
                            </ul>                      
		       </div>
                  </div>
<a id="close_x" class="close sprited" href="#"><?php echo __('close');?></a>
</div>

