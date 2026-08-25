<?php
defined('SYSPATH') OR die('No direct access allowed.');
foreach ($dashstyles as $file => $type) {
    echo HTML::style($file, array('media' => $type));
}
foreach ($dashscripts as $file => $type) {
    echo HTML::script($type);
}
//echo $offset;
?>
<!-- Navigation Start -->
<div class="span2 main-menu-span">
    <div class="well nav-collapse sidebar-nav">
<?php echo new View(USERVIEW . "/passenger_sidebar"); ?>
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
                <a href="<?php echo URL_BASE; ?>"><?php echo __('home'); ?></a> <span class="divider">/</span>
            </li>
            <li>
				<a href="<?php echo URL_BASE;?>passengers/dashboard"><?php echo __('dashboard'); ?></a> <span class="divider">/</span>
			</li>
            <li>
                <a href="#"><?php echo __('favourite_trip'); ?></a>
            </li>
        </ul>
    </div>

    <div  id="comments_ratings">

        <!-- Starting Map -->

        <div class="box span6" style="margin:5px 0 5px 100px;width:75%;float:left;display:none;" id="map-container">
            <div class="box-header well" data-original-title>
                <h2><i class="icon icon-blue icon-lightbulb "></i><?php echo " " . __('current_driver_loca'); ?></h2>
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
                    <h2><i class="icon icon-blue icon-home "></i><?php echo " " . __('favourite_trip'); ?></h2>

                    <div class="box-icon">						
                        <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                    </div>
                </div>

                <div class="box-content">
<?php if (count($passengers_all_compl_trans) > 0) { ?>
                        <table class="table table-hover table-bordered">

                            <tr>
                                <td>#</td>
                                <td width="40%"><b><?php echo __('Current_Location'); ?></b></td>
                                <td width="40%"><b><?php echo __('Drop_Location'); ?></b></td>
                                <td width="20%"><b><?php echo __('action'); ?></b></td>		
                            </tr>
    <?php
    $offset = $offset + 1;
    $i = $offset;
    $total_fare = "";
    foreach ($passengers_all_compl_trans as $values) {
        $distance = round($values['distance'], 2);
        $current_fare = round($values['fare'], 2);
        $fare_km = 0;
        if (isset($values['fare']) && ($current_fare > 0) && ($distance > 0) ) {
            $fare_km = $current_fare / $distance;
        }
        $total_fare = $current_fare+$total_fare;
        ?>
                                <tr>			
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $values['current_location']; ?></td>
                                    <td><?php echo $values['drop_location']; ?></td>
				   <td><div class="btn btn-small btn-inverse" onclick="gettaxi('<?php echo $values['passengers_log_id']; ?>','No')"><?php echo __('get_taxi'); ?><i class="icon-chevron-right icon-white"></i></div>
								 <br /><br/>
								<?php if($values['favourite_trip'] == 'N') { ?>
								<input type="button" class="btn btn-inverse unsave_icon" value="<?php echo __('mark_favourite'); ?>"   title="<?php echo __('mark_favourite');?>" onclick="markfavourite('<?php echo $values['passengers_log_id']; ?>','S');" />
								<?php  } else { ?>
								<input type="button" class="btn btn-inverse save_icon" value="<?php echo __('mark_unfavourite'); ?>"   title="<?php echo __('mark_unfavourite');?>" onclick="markfavourite('<?php echo $values['passengers_log_id']; ?>','N');" />
								<?php
								} ?>
</td>
	
                                    </td>
                                </tr>
                                        <?php $i = $i + 1;
                                    } ?>

                        </table>
                        <?php } else {
                            echo __('no_data');
                        } ?>
                </div>
                <!-- Pagination start -->
               
                <div class="pagination2">
                    <?php if ($passengers_all_compl_trans > 0): ?>
                        <p><?php echo $pag_data->render(); ?></p>  
                    <?php endif; ?> 
                </div>
    
                
                <!-- Pagination end -->
            </div>

        </div>

    </div>

</div>	

</div>

<!-- Rating -->
<div id="rating_pop">
    <h2><?php echo __('comments'); ?></h2>               
    <div class="login_total">                                               
        <div class="login_form">
            <ul>
                <li><span><?php echo __('rate_driver'); ?>:</span>
                    <div id="outer">
                        <div id="inner">

                        </div>
                    </div>
                </li>
                <li><span><?php echo __('comments'); ?>:</span><textarea name="comments" id="comments" /></textarea></li>
                <li><span><?php echo __('driver_name'); ?>:</span><span id="driver_name"></span></li>
                <span id="c_result"></span>
                <li><span></span>
                    <input name="submit_rating" class="btn btn-inverse" type="button" title="<?php echo __('submit'); ?>" value="<?php echo __('submit'); ?>" onclick="savecomments()" /></li>
            </ul>                      
        </div>
    </div>
    <a id="close_x" class="close sprited left_rtg" href="#"><?php echo __('close'); ?></a>

</div>
<!--rating end-->
<!-- View Details -->
<div id="details_pop">
    <h2><?php echo __('comments'); ?></h2>               
    <div class="login_total">                                               
        <div class="login_form">
            <ul>
                <li><span><?php echo __('rating_points'); ?>:</span>
                    <div id="outer">
                        <div id="v_inner">

                        </div>
                    </div>
                </li>
                <li><span><?php echo __('comments'); ?>:</span><span id="v_comments" /></span></li>
                <li><span><?php echo __('driver_name'); ?>:</span><span id="v_driver_name"></span></li>
                <li><span></span></li>			
            </ul>                      
        </div>
    </div>
    <a id="close_x" class="close sprited left_rtg" href="#"><?php echo __('close'); ?></a>
</div>
<!-- view details end-->


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
									<li><span><?php echo __('trans_amt');?>:</span><span id="trans_amt1"></span>
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

	<script>
	  function gettaxi(log_id,restrict){
		//alert(log_id);
		var dataS = "value="+log_id+"&restrict="+restrict;
		var response;
		$.ajax
		({ 			
			type: "POST",
			url: SrcPath+"passengers/gettaxi", 
			data: dataS, 
			cache: false, 
			dataType: 'html',
			success: function(response) 
			{ 		
				document.location.href='<?php echo URL_BASE;?>advance-search.html';
			} 
			 
		});	
            }
    </script>	
