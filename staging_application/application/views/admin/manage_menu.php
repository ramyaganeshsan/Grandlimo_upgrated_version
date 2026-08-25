<?php defined('SYSPATH') OR die("No direct access allowed.");

$total_menu=count($all_menu_list);

if(isset($all_menu_list)){
$table_css=$export_excel_button="";
?>

<div class="container_content fl clr">
	<div class="cont_container mt15 mt10">
		<div class="content_middle"> 
<form method="post" class="form" name="managerating_form" id="managerating_form" action="contacts_search">
       		<div class="widget">
		<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" /><h6><?php echo $page_title; ?></h6>
		<div style="width:auto; float:right; margin: 4px 3px;">
		<div class="button greyishB"> <?php //echo $export_excel_button; ?></div>                       

		</div>
		</div>
<?php if($total_menu > 0){ 

?>
<div class= "overflow-block">
<?php } ?>
<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">
<?php if($total_menu > 0){ ?>
<thead>
	<tr>
		<td align="left" width="5%"><?php echo __('sno_label'); ?></td>
		<td align="left" width="20%"><?php echo __('name_label'); ?></td>
		<td align="left" width="20%"><?php echo __('menu_status'); ?></td>
		<td align="left" width="10%"><?php echo __('action_label'); ?></td>
	</tr>
</thead>
<tbody>		
		<?php

         $sno=$Offset; /* For Serial No */

		 foreach($all_menu_list as $listings) {
		 //S.No Increment
		 $sno++;
         //For Odd / Even Rows
         //===================
         $trcolor=($sno%2==0) ? 'oddtr' : 'eventr';  
		if($listings['status_post'] == 'P')
		{
			$status_post = __('status_published');
		} else {
			$status_post = __('status_unpublished');;
		}
			 
        ?>     

        <tr class="<?php echo $trcolor; ?>">

			<td align="center"><?php echo $sno; ?></td>
			<td align="center"><?php echo ucfirst($listings['menu_name']); ?></td>
			<td align="center"><?php echo $status_post; ?></td>
			<td align="center"><a href="<?php echo URL_BASE.'edit/menu/'.$listings['menu_id'];?>" class="editicon" title="View details"></a><?php echo '<a onclick="delete_menu('.$listings["menu_id"].');" title ="Delete" class="deleteicon"></a>' ; ?></td>

		</tr>
		<?php } 
 		 } 
		 
		//For No Records
	     else{ ?>
       	<tr>
        	<td class="nodata"><?php echo __('no_data'); ?></td>
        </tr>
		<?php } ?>
	</tbody>
</table>
<?php if ($total_menu > 0) { ?>
</div>
<?php } ?>
</form>
</div>
</div>
</div>
<div class="clr">&nbsp;</div>
<div class="pagination">
		<?php if(($action != 'menu_search') && $total_menu > 0): ?>
		 <p><?php echo $pag_data->render(); ?></p>  
		<?php endif; ?> 
  </div>
  <div class="clr">&nbsp;</div>

</div>
<?php } ?>
<script type="text/javascript">
 $(document).ready(function(){
	toggle(24);
});
var confirm_msg =  "<?php echo __('menu_delete_confirm');?>";
function delete_menu(id){
	var ans = confirm(confirm_msg);
	if(ans){
		window.location='<?php echo URL_BASE ;?>manage/delete_menu/'+id;
	}
}
</script>
