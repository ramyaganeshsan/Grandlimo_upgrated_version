<?php defined('SYSPATH') OR die("No direct access allowed."); 
?>
<div class="container_content fl clr">
	<div class="cont_container mt15 mt10">
		<div class="content_top">
			<div class="top_left"></div>
			<div class="top_center"></div>
			<div class="top_rgt"></div>
		</div>
		<div class="content_middle">
			<div class="widget">
				<div class="title">
					<img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" />
					<h6><?php echo $page_title; ?></h6>
				</div>
					<?php
					if(count($contacts_list) > 0){
					//foreach($ContactsList as $contacts_list) { ?>
					<?php if($usertype!='C'){ ?>
					<p><?php echo __('companyname'); ?> : <?php echo !empty($contacts_list['company_name'])?$contacts_list['company_name']:'Admin';?></p>
					<?php } ?>
					<p><?php echo __('name_label'); ?> : <?php echo $contacts_list['name'];?></p>
					<p><?php echo __('email_label'); ?> : <a href="mailto:<?php echo $contacts_list['email'];?>" title="mailto" target="_blank"><?php echo $contacts_list['email'];?></a></p>
					<p><?php echo __('subject'); ?> : <?php echo $contacts_list['subject'];?></p>
					<p><?php echo __('message'); ?> : <?php echo $contacts_list['message'];?></p>
					<?php if($contacts_list['phone'] != '') { ?>
					<p><?php echo __('phone_label'); ?> : <?php echo $contacts_list['phone'];?></p>
					<?php } ?>
					<p><?php echo __('sent_date'); ?> : <?php echo commonfunction::convertphpdate('Y-m-d h:i:s',$contacts_list['sent_date']);?></p>
					
					<?php  //} 
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
<script type="text/javascript">
 $(document).ready(function(){
	toggle(22);
});
</script>
