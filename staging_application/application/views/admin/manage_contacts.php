<?php defined('SYSPATH') OR die("No direct access allowed.");

$status_val = isset($srch["status"]) ? $srch["status"] :''; 
$keyword = isset($srch["keyword"]) ? $srch["keyword"] :''; 

$total_contacts=$ListCount;

if(isset($all_contacts_list)){
$table_css=$export_excel_button="";
if($total_contacts >0)
{ 
	$table_css='class="table_border"'; 

	$export_excel_button='<input type="button"  title="'.__('button_export').'" class="button" value="'.__('button_export').'" onclick="location.href=\''.URL_BASE.'manage/export?keyword='.$keyword.'\'" />';
}?>
<div class="container_content fl clr">
	<div class="cont_container mt15 mt10">
		<div class="content_middle"> 
			
<form method="get" class="form" name="managerating_form" id="managerating_form" action="contacts_search">
<?php /* <table class="list_table1" border="0" width="65%" cellpadding="5" cellspacing="0">
 <tr>
                        <td valign="top"><label><?php echo __('keyword_label'); ?></label></td>
                        <td >
                            <div class="new_input_field">
                                <input type="text" name="keyword"  maxlength="256" id="keyword" value="<?php echo isset($srch['keyword']) ? trim($srch['keyword']) : ''; ?>" />
                            </div>
                            <span class="search_info_label"><?php echo __('search_by_fb'); ?></span>
                        </td>
                        </tr>
                        <tr>
                        <td valign="top"><label>&nbsp;</label></td>
                        <td>
                            <!--[if IE]>
                            <input type="text" style="display: none;" disabled="disabled" size="1" />
                            <![endif]-->
                            <div class="button brownB">
                                <input type="submit" value="<?php echo __('button_search'); ?>" name="search_user" title="<?php echo __('button_search'); ?>" />
                            </div>
                            <div class="button blueB">
                                <input type="button" value="<?php echo __('button_cancel'); ?>" title="<?php echo __('button_cancel'); ?>" onclick="location.href = '<?php echo URL_BASE; ?>manage/contacts'" />
                            </div>
                        </td>
                    </tr>
                </table> */?>

       		<div class="widget">
		<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" /><h6><?php echo $page_title; ?></h6>
		<div style="width:auto; float:right; margin: 4px 3px;">
		<div class="button greyishB"> <?php //echo $export_excel_button; ?></div>                       

		</div>
		</div>
<?php if($total_contacts > 0){ ?>
<div class= "overflow-block">
<?php } ?>
<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">
<?php if($total_contacts > 0){ ?>
<thead>
	<tr>
		<td align="left" width="5%"><?php echo __('sno_label'); ?></td>
		<td align="left" style="text-align:left;" width="15%"><?php echo __('driver'); ?></td>
		<td align="left" width="15%"><?php echo __('taxi'); ?></td>
		<td align="left" width="50%"><?php echo __('feedback'); ?></td>
		<td align="left" style="text-align:left;" width="50%"><?php echo __('taxi_model'); ?></td>

		
		<?php /*<td align="left" style="text-align:left;" width="15%"><?php echo __('name_label'); ?></td>
		<td align="left" width="15%"><?php echo __('email'); ?></td>
		<td align="left" width="10%"><?php echo __('subject'); ?></td>
		<td align="left" style="text-align:left;" width="10%"><?php echo __('message'); ?></td>
		<td align="left" style="text-align:left;" width="15%"><?php echo __('sent_date'); ?></td> 
		<td align="left" width="10%"><?php echo __('action_label'); ?></td>*/ ?>
	</tr>
</thead>
<tbody>		
		<?php

         $sno=$Offset; /* For Serial No */

		 foreach($all_contacts_list as $listings) {
		 //S.No Increment
		 $sno++;
         //For Odd / Even Rows
         //===================
         $trcolor=($sno%2==0) ? 'oddtr' : 'eventr';  
		 
        ?>     

        <tr class="<?php echo $trcolor; ?>">

			<td align="center"><?php echo $sno; ?></td>
			
			<td align="left"><a title="<?php echo ucfirst($listings['name']); ?>" href="<?php echo URL_BASE.'manage/driverinfo/'.$listings['driver_id'];?>"><?php echo wordwrap(ucfirst($listings['name']),30,'<br/>',1); ?></a></td>
			<td align="left"><a title="<?php echo ucfirst($listings['taxi_no']); ?>" href="<?php echo URL_BASE.'manage/taxiinfo/'.$listings['taxi_id'];?>"><?php echo wordwrap($listings['taxi_no'],25,'<br/>',1); ?></a></td>
			<td align="left"><?php echo $listings['feedback'];?></td>
			<td align="left"><?php echo wordwrap($listings['model_type'],25,'<br />',1); ?></td>
			
			
			<?php /*
			<td align="left"><a href="mailto:<?php echo $listings['email'];?>" title="mailto" target="_blank"><?php echo wordwrap(ucfirst($listings['name'])); ?></a></td>
			<td align="center"><?php echo wordwrap($listings['email']); ?></td>
			<td align="center"><?php echo wordwrap($listings['subject']); ?></td>
			<td align="left"><?php if(strlen($listings['message']) > 100) { echo substr(wordwrap($listings['message']),0,100).'...';}else{ echo substr(wordwrap($listings['message']),0,50);} ?></td>
			<td align="left"><?php echo date("Y-m-d H:i:s", strtotime($listings['sent_date'])); ?></td> 
			<td align="center"><a href="<?php echo URL_BASE.'manage/contact_view/'.$listings['_id'];?>" class="viewicon" title="View details"></a><?php echo '<a onclick="delete_contacts('.$listings["_id"].');" title ="Delete" class="deleteicon"></a>' ; ?></td>*/?>

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
<?php if ($total_contacts > 0) { ?>
</div>
<?php } ?>
</form>
</div>
</div>
</div>
<div class="clr">&nbsp;</div>
<div class="pagination">
		<?php if(($action != 'contacts_search') && $total_contacts > 0): ?>
		 <p><?php echo $pag_data->render(); ?></p>  
		<?php endif; ?> 
  </div>
  <div class="clr">&nbsp;</div>

</div>
<?php } ?>
<script type="text/javascript">
 $(document).ready(function(){
  $("#keyword").focus(); 
	toggle(22);
});
var confirm_msg =  "<?php echo __('do_you_delete_contacts');?>";
function delete_contacts(id){
	var ans = confirm(confirm_msg);
	if(ans){
		window.location='<?php echo URL_BASE ;?>manage/delete_contacts/'+id;
	}
}
</script>
