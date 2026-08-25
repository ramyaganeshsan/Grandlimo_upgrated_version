<?php defined('SYSPATH') OR die("No direct access allowed.");

?>




<div class="container_content fl clr">
	<div class="cont_container mt15 mt10">
		<div class="content_middle">
			<form method="get" class="form" name="manage_notification" id="manage_notification" action="">


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
				<td align="left" width="5%"><?php echo __('Select'); ?></td>
				<td align="left" width="5%"><?php echo __('sno_label'); ?></td>
				<td align="left" width="10%"><?php echo ucfirst(__('title')); ?></td>
				<td align="left" width="10%"><?php echo ucfirst(__('Sub Title')); ?></td>
				<td align="left" width="35%"><?php echo ucfirst(__('Content')); ?></td>
				<td align="left" width="10%"><?php echo __('start_date'); ?></td>
				<td align="left" width="10%"><?php echo __('expire_date'); ?></td>
				<td align="left" width="10%"><?php echo __('created_date'); ?></td>				
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
					<td align="center"><input type="checkbox" name="uniqueId[]" id="trxn_chk<?php echo $push_val['_id'];?>" value="<?php echo $push_val['_id'];?>" />					<td align="center"><?php echo $sno; ?></td>
					<td align="center"><?php echo isset($push_val['title'])?$push_val['title']:''; ?></td>
					<td align="center"><?php echo isset($push_val['sub_title'])?$push_val['sub_title']:''; ?></td>
					<td align="center"><?php echo isset($push_val['message'])?$push_val['message']:''; ?></td>					
					<td align="center"><?php echo Commonfunction::convertphpdate('Y-m-d h:i:s A',$push_val['start_date']); ?></td>
					<td align="center"><?php echo Commonfunction::convertphpdate('Y-m-d h:i:s A',$push_val['expire_date']); ?></td>
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
  <?php if($total_users > 0)
       { ?>
          <div class="select_all">
                <b><a href="javascript:selectToggle(true, 'manage_notification');"><?php echo __('all_label');?></a></b><span class="pr2 pl2">|</span><b><a href="javascript:selectToggle(false, 'managecorporate');"><?php echo __('select_none');?></a></b>

                <span style="padding-left:10px;">
                    <select name="more_action" id="more_action">
                        <option value=""><?php echo __('Change Status'); ?></option>
                        <option value="trash_notification" ><?php echo __('Trash'); ?></option> 
                    </select>
                 </span>
	        </div>
        <?php
        } ?>




</div>
</div>
<script type="text/javascript">
	function SentNotifications(id){
		//alert(id);
		if(confirm('Are you sure to sent Notification')){
			window.location = "<?php echo URL_BASE; ?>manageusers/notification_status?id="+id;
		}
	}

	function selectToggle(toggle, form) {
		var myForm = document.forms[form];
		for( var i=0; i < myForm.length; i++ ) { 
		    if(toggle) {
		        myForm.elements[i].checked = "checked";
		    } 
		    else
		    { myForm.elements[i].checked = ""; }
		}
	}
	
	//for More action Drop Down
	//=========================
	$('#more_action').change(function() {

		//select drop down option value
		//======================================
		var selected_val= $('#more_action').val();
		
			//perform more action reject withdraw
			//===================================		
			switch (selected_val){

					case "trash_notification":
					var confirm_msg =  "<?php echo __('Are you sure want to move Request(s) to Trash ?');?>";


						//Find checkbox whether selected or not and do more action
						//============================================================
						if($('input[type="checkbox"]').is(':checked'))
						{
					   		 var ans = confirm(confirm_msg)
					   		 if(ans){
								 document.manage_notification.action="<?php echo URL_BASE;?>manage/trash_notification_request/index";
								 document.manage_notification.submit();
							 }else{
							 	$('#more_action').val('');
							 }		
						}
						else{
						        //alert for no record select
						        //=============================
							    alert("<?php echo __('Please select atleast one or more Record(s) to do this action');?>")	
							    $('#more_action').val('');
						}						

					break;
			}
							
			return false;  
	});
</script>


