<?php defined('SYSPATH') OR die('No direct access allowed.');
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
					<a href="#" title="<?php echo __('trans_log'); ?>"><?php echo __('manage_fav'); ?></a>
				</li>
			</ul>
		</div>

<div id="" class="">		
<div class="row-fluid sortable">
			<div class="box span12">
				<div class="box-header well" data-original-title>
					<h2><i class="icon icon-blue icon-home "></i><?php echo " ".__('manage_fav'); ?></h2>

					<div class="box-icon">						
						<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
					</div>
				</div>
				
					<div class="box-content">
						<?php 
						//echo '<pre>'; print_r($favourite_list);echo '</pre>';exit;
						if(count($favourite_list) > 0){ 
							
							
							?>
						<table class="table table-hover table-bordered">
						
						<tr>
							<td>#</td>
							<td><b><?php echo __('p_favourite_place'); ?></b></td>
							<td><b><?php echo __('fav_loction_type'); ?></b></td>
							
	
	
						</tr>
						<?php 
						$i=$offset;
						
						foreach($favourite_list as $values) 
						{ 
							$i++;
						?>
						<tr>			
							<td><?php echo $i;?></td>
							<td>
							  <?php if(file_exists(DOCROOT.'public/images/'.ucfirst($values['fav_icon']).'.png')) { ?>
								 <?php $fav_icon_image = URL_BASE.'public/images/'.ucfirst($values['fav_icon']).'.png'; ?>
							  <?php } else { ?>
								 <?php $fav_icon_image = URL_BASE.'public/images/Others.png'; ?>
							  <?php } ?>
							  <img class="<?php echo $values['fav_icon']; ?>" src="<?php echo $fav_icon_image; ?>">&nbsp;&nbsp;<?php 
							if($values['p_favourite_place'] != '' && $values['d_favourite_place'] != '') {
								echo $values['p_favourite_place']. ' <b> To</b> '.$values['d_favourite_place'];
								}else{
							echo ($values['p_favourite_place'])?$values['p_favourite_place']:$values['d_favourite_place'];}?></td>
							<td><?php echo $values['fav_loction_type'];?></td>
						
							</tr>
						<?php  } }?>
						
						</table>
						  <?php
						 if(count($favourite_list)<1){
							echo __('no_data');
						 }
						 ?>
					</div>
					
					 <!-- Pagination start -->
               
                <div class="pagination2">
                    <?php if ($favourite_list > 0): ?>
                        <p><?php echo $pag_data->render(); ?></p>  
                    <?php endif; ?> 
                </div>
    
                
                <!-- Pagination end -->
                
			 
				</div>
				
			</div>
		</div>
		
		</div>
	</div>


