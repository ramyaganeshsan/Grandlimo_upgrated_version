<?php defined('SYSPATH') OR die("No direct access allowed.");

?>




<div class="container_content fl clr">
	<div class="cont_container mt15 mt10">
		<div class="content_middle">
			<form method="get" class="form" name="manage_model" id="manage_model" action="">


     		<div class="widget">
		<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" /><h6><?php echo $page_title; ?></h6>
		<div style="width:auto; float:right; margin: 4px 3px;">
		<div class="button greyishB"> <?php //echo $export_excel_button; ?></div>                       
		</div>
		</div>       
		
		
	
<?php if($total_users > 0 ){ ?>
	<div class= "overflow-block">
<?php } ?>
	<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">
<?php if ($total_users >0 && is_array($push_list)) { ?>
		<thead>
		    <tr>
				<td align="left" width="5%"><?php echo __('sno_label'); ?></td>
				<td align="left" width="20%"><?php echo ucfirst(__('push_message')); ?></td>
				<td align="left" width="10%"><?php echo __('created_date'); ?></td>
		    </tr>
		</thead>
        <tbody>               
          	<?php
				$sno=$Offset; /* For Serial No */
				//echo "<pre>";print_r($push_list);exit();
				foreach($push_list as $push_val) {

					//S.No Increment
					//==============
					$sno++;        
				    //For Odd / Even Rows
				    //===================
				    $trcolor=($sno%2==0) ? 'oddtr' : 'eventr'; 
				  
				?>
				<tr class="<?php echo $trcolor; ?>">
					<td align="center"><?php echo $sno; ?></td>
					<td align="center"><?php echo $push_val['message']; ?></td>
					<td align="center"><?php echo Commonfunction::convertphpdate('Y-m-d h:i:s A',$push_val['created_date']); ?></td>
				</tr>
			<?php 		
			} 
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
	</div>

<?php if ($total_users > 0) { ?>
</div>
<?php } ?>
</form>
</div>
</div>
<div class="clr">&nbsp;</div>
<div class="pagination">
		<?php if($total_users > 0): ?>
		 <p><?php echo $pag_data->render(); ?></p>  
		<?php endif; ?> 
  </div>
  <div class="clr">&nbsp;</div>




</div>
</div>



