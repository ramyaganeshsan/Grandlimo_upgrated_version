<?php defined('SYSPATH') OR die("No direct access allowed.");

$total_slots = isset($all_busy_slot_list) ? count($all_busy_slot_list) : 0;
if (!isset($Offset)) {
    $Offset = 0;
}
?>
<div class="container_content fl clr">
	<div class="cont_container mt15 mt10">
		<div class="content_middle">
		<div class="widget">
		<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" /><h6><?php echo isset($page_title) ? $page_title : __('manage_busy_slot'); ?></h6>
		</div>
<?php if($total_slots > 0){ ?>
<div class= "overflow-block">
<?php } ?>
<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">
<?php if($total_slots > 0){ ?>
<thead>
	<tr>
		<td align="left" width="5%"><?php echo __('sno_label'); ?></td>
		<td align="left" width="25%">Date</td>
		<td align="left" width="20%">From</td>
		<td align="left" width="20%">To</td>
		<td align="left" width="15%"><?php echo __('action_label'); ?></td>
	</tr>
</thead>
<tbody>
		<?php
         $sno=$Offset;
		 foreach($all_busy_slot_list as $listings) {
		 $sno++;
         $trcolor=($sno%2==0) ? 'oddtr' : 'eventr';
         $slot_date = !empty($listings['busy_slot_from']) ? trim(commonfunction::convertphpdate('d F, Y', $listings['busy_slot_from'])) : '';
         $from_label = !empty($listings['busy_slot_from']) ? trim(commonfunction::convertphpdate('g:i A', $listings['busy_slot_from'])) : '';
         $to_label = !empty($listings['busy_slot_to']) ? trim(commonfunction::convertphpdate('g:i A', $listings['busy_slot_to'])) : '';
        ?>
        <tr class="<?php echo $trcolor; ?>">
			<td align="center"><?php echo $sno; ?></td>
			<td align="center"><?php echo htmlspecialchars($slot_date); ?></td>
			<td align="center"><?php echo htmlspecialchars($from_label); ?></td>
			<td align="center"><?php echo htmlspecialchars($to_label); ?></td>
			<td align="center">
				<a href="<?php echo URL_BASE.'edit/busy_slot/'.$listings['_id'];?>" class="editicon" title="Edit"></a>
				<a onclick="delete_busy_slot('<?php echo $listings['_id']; ?>');" title="Delete" class="deleteicon"></a>
			</td>
		</tr>
		<?php }
 		 }
	     else{ ?>
       	<tr>
        	<td class="nodata"><?php echo __('no_data'); ?></td>
        </tr>
		<?php } ?>
	</tbody>
</table>
<?php if ($total_slots > 0) { ?>
</div>
<?php } ?>
</div>
</div>
</div>
<div class="clr">&nbsp;</div>
<div class="pagination">
		<?php if($total_slots > 0 && isset($pag_data)): ?>
		 <p><?php echo $pag_data->render(); ?></p>
		<?php endif; ?>
  </div>
  <div class="clr">&nbsp;</div>
</div>
<script type="text/javascript">
 $(document).ready(function(){
	toggle(3);
});
var confirm_msg =  "<?php echo __('busy_slot_delete_confirm');?>";
function delete_busy_slot(id){
	var ans = confirm(confirm_msg);
	if(ans){
		window.location='<?php echo URL_BASE ;?>manage/delete_busy_slot/'+id;
	}
}
</script>
