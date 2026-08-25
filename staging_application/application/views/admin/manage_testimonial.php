<?php defined('SYSPATH') OR die("No direct access allowed.");

//print_r($_GET['keyword']);exit;
//$status_val = isset($srch["status"]) ? $srch["status"] :''; 
$keyword = isset($_GET["keyword"]) ? $_GET["keyword"] :''; 
//echo $keyword;exit;
$total_contacts=$ListCount;

if(isset($all_testimonial)){
?>
<div class="container_content fl clr">
	<div class="cont_container mt15 mt10">
		<div class="content_middle"> 
<form method="get" class="form" name="managerating_form" id="managerating_form" action="">
<table class="list_table1" border="0" width="65%" cellpadding="5" cellspacing="0">
 <tr>
                        <td valign="top"><label><?php echo __('keyword_label'); ?></label></td>
                        <td >
                            <div class="new_input_field">
                                <input type="text" name="keyword"  maxlength="256" id="keyword" value="<?php echo $keyword; ?>" />
                            </div>
                            <span class="search_info_label">Search by name</span>
                        </td>
                        </tr>
                        <tr>
                        <td valign="top"><label>&nbsp;</label></td>
                        <td>
                           
                            <div class="button brownB">
                                <input type="submit" value="<?php echo __('button_search'); ?>" name="search_user" title="<?php echo __('button_search'); ?>" />
                            </div>
                            <div class="button blueB">
                                <input type="button" value="<?php echo __('button_cancel'); ?>" title="<?php echo __('button_cancel'); ?>" onclick="location.href = '<?php echo URL_BASE; ?>manage/ratings'" />
                            </div>
                        </td>
                    </tr>
                </table>

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
				<td align="left" style="text-align:left;" width="15%">Name</td>
				<td align="left" width="15%">Skype or Email</td>
				<td align="left" width="10%">Description</td>
				<td align="left" width="10%">Status</td>
				<td align="left" width="10%"><?php echo __('action_label'); ?></td>
			</tr>
		</thead>
		<tbody>		
			<?php

	         $sno=$Offset; /* For Serial No */

			 foreach($all_testimonial as $listings) { 
				 //S.No Increment
			 	$sno++;	
		         //For Odd / Even Rows
		         //===================
		         $trcolor=($sno%2==0) ? 'oddtr' : 'eventr';

		        if($listings['status']==1){
		        	$status = 'Active';
		        }else{
		        	$status = 'Inactive';
		        }
		        
		        

		        ?>     

		        <tr class="<?php echo $trcolor; ?>">

					<td align="center"><?php echo $sno; ?></td>
					<td align="left"><?php echo $listings['name']; ?></td>
					<td align="left"><?php echo $listings['skype']; ?></td>
					<td align="center"><?php echo wordwrap($listings['description']); ?></td>
					<td align="center"><?php echo $status; ?></td>
					
					<td align="center"><a href="<?php echo URL_BASE.'edit/testimonial/'.$listings['_id'];?>" class="editicon" title="Edit details"></a><?php echo '<a onclick="delete_testimonial('.$listings["_id"].');" title ="Delete" class="deleteicon"></a>' ; ?></td>
				</tr>

				<?php
			} 
		 	}		 
			//For No Records
			else
			{
			?>
			    <tr>
			       	<td class="nodata"><?php echo __('no_data'); ?></td>
			    </tr>
			<?php 
			} ?>
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
var confirm_msg =  "Sure to delete";
function delete_testimonial(id){
	var ans = confirm(confirm_msg);
	if(ans){
		//document.form.submit();
	window.location='<?php echo URL_BASE ;?>manage/delete_testimonial/'+id;
	}
}
</script>

