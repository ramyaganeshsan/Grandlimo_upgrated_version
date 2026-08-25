<?php defined('SYSPATH') OR die("No direct access allowed.");

?>

<div class="container_content fl clr">
	<div class="cont_container mt15 mt10">
		<div class="content_middle"> 
<form method="post" class="form" name="managerating_form" id="managerating_form" action="contacts_search">
       		<div class="widget">
		<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" /><h6><?php echo $page_title; ?></h6>
		<div style="width:auto; float:right; margin: 4px 3px;">
		<div class="button greyishB"></div>
		</div>
		</div>

<div class= "overflow-block">
<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">
<thead>
	<tr>
		<td align="left" width="5%"><?php echo __('sno_label'); ?></td>
		<td align="left" width="20%"><?php echo __('name_label'); ?></td>		
		<td align="left" width="10%"><?php echo __('action_label'); ?></td>
	</tr>
</thead>
<tbody>		
		
		<?php if(count($website_certificates)) { 

			foreach($website_certificates as $key=>$certificates) { ?>

				<tr>

					<td align="center"><?php echo $key+1; ?></td>
					<td align="center"><?php echo $certificates['certificate_name']; ?></td>			
					<td align="center"><a href="<?php echo URL_BASE.'manage/edit_website_certificates/'.$certificates['_id'];?>" class="editicon" title="Edit"></td>

				</tr>

		<?php } }else{ ?>
        
				<tr>
					<td align="center"></td>
					<td align="center">No Record found</td>
					<td align="center"></td>
				</tr>

		<?php } ?>
	</tbody>
</table>

</div>

</form>
</div>
</div>
</div>
<div class="clr">&nbsp;</div>

</div>
