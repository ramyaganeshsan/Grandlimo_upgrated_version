<?php defined('SYSPATH') OR die("No direct access allowed."); 
?>
<div class="container_content fl clr">
	<div class="cont_container mt15 mt10">
		<div class="content_top">
			<div class="top_left"></div>
			<div class="top_center"></div>
			<div class="top_rgt"></div>
		</div>
		<div class="content_middle content_middle_alignment">
			<div class="widget">
				<div class="title">
					<img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" />
					<h6><?php echo $page_title; ?></h6>
				</div>
				<div class="widget_dis">
					<?php
					if(count($ContactsList) > 0){
					foreach($ContactsList as $contacts_list) {
						 ?>
					<p><?php echo __('title_label'); ?> : <?php echo $contacts_list['menu_name'];?></p>
					<p><?php echo __('content'); ?> : <?php echo $contacts_list['content'];?></p>
					<p><?php echo __('link'); ?> : <?php echo $contacts_list['menu_link'];?></p>
					
					<?php } 
					} 
					else 
					{ ?>
					<p><?php echo __('no_data'); ?></p>
					<?php 
					} ?>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
 $(document).ready(function(){
	toggle(24);
});
</script>
