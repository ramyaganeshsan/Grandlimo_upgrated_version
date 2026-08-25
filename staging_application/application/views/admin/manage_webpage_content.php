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
		

        <tr>

			<td align="center">1</td>
			<td align="center">Home Page</td>			
			<td align="center"><a href="<?php echo URL_BASE.'manage/website_home_content';?>" class="editicon" title="Edit"></td>

		</tr>

		<tr>

			<td align="center">2</td>
			<td align="center">Features Page</td>			
			<td align="center"><a href="<?php echo URL_BASE.'manage/website_features_content';?>" class="editicon" title="Edit"></td>

		</tr>

		<tr>

			<td align="center">3</td>
			<td align="center">How its work Page</td>			
			<td align="center"><a href="<?php echo URL_BASE.'manage/website_how_works_content';?>" class="editicon" title="Edit"></td>

		</tr>

		<tr>
			<td align="center">4</td>
			<td align="center">Pricing Page</td>			
			<td align="center"><a href="<?php echo URL_BASE.'manage/website_pricing_content';?>" class="editicon" title="Edit"></td>
		</tr>

		<tr>
			<td align="center">5</td>
			<td align="center">Careers Page</td>			
			<td align="center"><a href="<?php echo URL_BASE.'manage/website_careers_content';?>" class="editicon" title="Edit"></td>
		</tr>

		<tr>
			<td align="center">6</td>
			<td align="center">About us</td>			
			<td align="center"><a href="<?php echo URL_BASE.'manage/manage_website_cms_content?type=about_us_page';?>" class="editicon" title="Edit"></td>
		</tr>

		<tr>
			<td align="center">7</td>
			<td align="center">Terms and conditions</td>			
			<td align="center"><a href="<?php echo URL_BASE.'manage/manage_website_cms_content?type=terms_and_conditions_page';?>" class="editicon" title="Edit"></td>
		</tr>
		
	</tbody>
</table>

</div>

</form>
</div>
</div>
</div>
<div class="clr">&nbsp;</div>

</div>
