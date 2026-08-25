<?php defined('SYSPATH') OR die('No direct access allowed.'); 
?>
<!-- About page-->
<div class="about_outer">
	<div class="about_baner">
		<img src="<?php echo URL_BASE;?>public/images/about_bg.png" alt="images"/>
	</div>
	<div class="about_inner">
		<div class="about_common">
			<div class="about_left">
				<h1><?php echo __('how_it_works'); ?></h1>
			</div> 
			 <div class="about_right">
			   
			</div> 
				
		</div>
	</div>
</div> 
<style>
.link_label{font-size: 14px;font-weight: normal;}
.text_label{font-size: 12px;font-weight: normal;}
</style>
<!-- About page end-->
<div class="about_bottom_outer">
	<div class="about_bottom_inner">
		<div class="about_bottom_common1">
			<div class="full_con_right">
				<form method="POST" name="frmlogin" id="frmlogin">
					<div class="registration mt30"  style="width:100%;">
						<div class="title_name" style="padding:10px 0px;">
						</div>
						<div class="reg_form_left">
						<?php if(isset($content[0]['content'])) { echo $content[0]['content']; } ?>
						</div>
						<div class="reg_form_right">
							<?php if(isset($left_content[0]['content'])) { echo $left_content[0]['content']; } ?>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
