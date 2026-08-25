<?php defined('SYSPATH') OR die("No direct access allowed."); 

$srch = $_REQUEST;
//For search values
//=================
$user_type_val = isset($srch["user_type"]) ? $srch["user_type"] :'';  							
$status_val = isset($srch["status"]) ? $srch["status"] :''; 							
$keyword = isset($srch["keyword"]) ? $srch["keyword"] :''; 

//For CSS class deefine in the table if the data's available
//===========================================================
$total_zone=count($promotionPushNotificationDetails);

$table_css=$export_excel_button="";
if($total_zone>0)
{ 
	$table_css='class="table_border"'; 

	$export_excel_button='
        				<input type="button"  title="'.__('button_export').'" class="button" value="'.__('button_export').'" 
        				onclick="location.href=\''.URL_BASE.'manage/export?keyword='.$keyword.'&status='.$status_val.'&type='.$user_type_val.'\'" />
    				';
}?>

<script type="text/javascript">
	$(function(){
		$(".wmd-view-topscroll").scroll(function(){
			$(".wmd-view")
				.scrollLeft($(".wmd-view-topscroll").scrollLeft());
		});
		$(".wmd-view").scroll(function(){
			$(".wmd-view-topscroll")
				.scrollLeft($(".wmd-view").scrollLeft());
		});
	});
</script>
  	

<div class="container_content fl clr">
<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">
<?php if($total_zone > 0){ ?>
<thead>
	<tr>
		
		<td align="left" width="5%"><?php echo __('sno_label'); ?></td>
		<td align="left" width="5%"><?php echo __('title'); ?></td>
		<td align="left" width="5%"><?php echo __('description'); ?></td>
		<td align="left" width="5%"><?php echo __('status'); ?></td>

	</tr>
</thead>
<tbody>
	
		<?php

         $sno=$Offset; /* For Serial No */
		 foreach($promotionPushNotificationDetails as $listings ) { 
		 //S.No Increment
		 //==============
		 $sno++;
         //For Odd / Even Rows
         //===================
       //  echo '<pre>'; print_r($listings); exit();
         $trcolor=($sno%2==0) ? 'eventr' : 'oddtr';
        /* if($listings['status'] != 'T' || $status_val == "T")
         {*/ 
		 
		// $group_name= (isset($listings['group_name'])) ? implode(' , ',$listings['group_name'])  : '-';
        ?>     

        <tr class="<?php echo $trcolor; ?>" >
			<td align="center"><?php echo $sno; ?></td>
			<td align="center"><?php echo $listings['title']; ?></td>
			<td align="center"><?php echo $listings['message']; ?></td>
			<td align="center"><?php echo $listings['sent_status'] == 1 ? "Sent" : "Sending"; ?></td>
		</tr>
		<?php  }
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
            <?php if ($total_zone > 0) { ?>
                </div>
               
                    <?php } ?>
                     </div>
</form>
</div>
</div>

<div class="pagination">
	<?php if($total_zone > 0): ?>
		<?php echo $pag_data->render(); ?>
	<?php endif; ?> 
</div>
