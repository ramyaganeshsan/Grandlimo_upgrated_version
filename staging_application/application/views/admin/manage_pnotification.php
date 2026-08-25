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
				<td align="left" width="20%"><?php echo ucfirst(__('title')); ?></td>
				<td align="left" width="20%"><?php echo ucfirst(__('message')); ?></td>
				<td align="left" width="20%"><?php echo ucfirst(__('image')); ?></td>
				<td align="left" width="10%"><?php echo __('created_date'); ?></td>
				<td align="left" width="10%"><?php echo __('status'); ?></td>
		    </tr>
		</thead>
        <tbody>               
          	<?php
				$sno=$Offset; /* For Serial No */
				//echo "<pre>";print_r($push_list);exit();
				foreach($push_list as $push_val) { //echo $_SERVER["DOCUMENT_ROOT"].'/'.NOTIFY_IMG_IMGPATH.'/'.$push_val['image'];exit;

					//S.No Increment
					//==============
					$sno++;        
				    //For Odd / Even Rows
				    //===================
				    $trcolor=($sno%2==0) ? 'oddtr' : 'eventr'; 

				    if(isset($push_val['image']) && file_exists($_SERVER["DOCUMENT_ROOT"].'/'.NOTIFY_IMG_IMGPATH.'/'.$push_val['image']) && !empty($push_val['image'])) 
                    {
                        $image = URL_BASE.NOTIFY_IMG_IMGPATH.'/'.$push_val['image'];
                    }else{
                        $image = URL_BASE.'public/uploads/driver_image/no-image.jpg';
                    }             	

				  
				?>
				<tr class="<?php echo $trcolor; ?>">
					<td align="center"><?php echo $sno; ?></td>
					<td align="center"><?php echo isset($push_val['title'])?$push_val['title']:''; ?></td>
					<td align="center"><?php echo isset($push_val['message'])?$push_val['message']:''; ?></td>
					<td align="center"><img src="<?php echo $image;?>" height="140px" width="140px" class="img-polaroid"></td>
					<td align="center"><?php echo Commonfunction::convertphpdate('Y-m-d h:i:s A',$push_val['created_date']); ?></td>
					<td align="center"><?php if(isset($push_val['sent_status']) && $push_val['sent_status'] ==1 ){ echo 'Sented'; }
					elseif(isset($push_val['sent_status']) && $push_val['sent_status'] ==2 ){
						echo "Waiting";
					}else
					{ ?>
						<a href="javascript:;" class="push_button" title="Sent" onclick="SentNotifications(<?php echo $push_val['_id']; ?>);">Sent</a>
					<?php } ?></td>
					
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
<script type="text/javascript">
	function SentNotifications(id){
		//alert(id);
		if(confirm('Are you sure to sent Notification')){
			window.location = "<?php echo URL_BASE; ?>manageusers/notification_status?id="+id;
		}
	}
</script>


