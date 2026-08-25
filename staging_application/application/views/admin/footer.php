<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
	<?php if(isset($_SESSION['userid'] )) { $tdispatch="";
	if($action == 'addbooking' || $action == 'managebooking' || $action == 'recurrentbooking' || $action == 'frequent_location' || $action == 'frequent_journey' || $action == 'accounts' || $action == 'tdispatch_settings' || $action == 'edit_recurrent_booking' || $action == 'edit_frequentlocation' || $action == 'add_frequentlocation' || $action == 'add_frequentjourney' || $action == 'edit_frequentjourney' || $action == 'add_accounts' || $action == 'edit_accounts' || $action == 'add_groups' || $action == 'edit_groups' || $action == 'add_users' || $action == 'edit_users'){ $tdispatch = 'active'; } ?>
	<?php if((($_SESSION['user_type'] == 'C')||($_SESSION['user_type'] == 'M')) && $tdispatch=="active") { ?>
	<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/jquery.age.js"></script>
	<script type="text/javascript">
	load_logcontent()
	//setInterval(function(){load_logcontent() }, 10000);					 
	function load_logcontent()
	{
				var dataS = '';
				var SrcPath = $('#baseurl').val();
				var response;
				$.ajax
				({ 			
					type: "POST",
					url: SrcPath+"tdispatch/get_log_content", 
					data: dataS, 
					cache: false, 
					dataType: 'html',
					success: function(response){ $('#log_content').html(response); }		 
				});	
	}

		$(document).ready(function(){
		var current_path = $(location).attr('hash');
		$('.age').age();
		//onloading page remain in min state
		$("#jsrp_related").animate( { height:"40px" });
		var max_image = "<?php echo IMGPATH;?>maximize.png";
		$("#close_btn").attr({src:max_image});
		$("#jsrp_related").toggle(
			function(){
				var imgSrc= $("#close_btn").attr("src");
				var findimg = imgSrc.split('/').pop();
				//For Replacing the Menu Images
				//==============================
				/*var toggle_image="<?php echo IMGPATH;?>minus.png";
				if(findimg == "minus.png")
				var toggle_image="<?php echo IMGPATH;?>maximize.png";
				$("#close_btn").attr({src:toggle_image});
				$("#jsrp_related").animate( { height:"40px" }, { queue:false, duration:500 });*/
				var toggle_image="<?php echo IMGPATH;?>minus.png";
				if(findimg == "minus.png")
				var toggle_image="<?php echo IMGPATH;?>maximize.png";
				$("#close_btn").attr({src:toggle_image});
		   		$("#jsrp_related").animate( { height:"300px" }, { queue:false, duration:500 });
		},
		function(){
				var imgSrc= $("#close_btn").attr("src");
				var findimg = imgSrc.split('/').pop();
				//For Replacing the Menu Images
				//==============================
				/*var toggle_image="<?php echo IMGPATH;?>minus.png";
				if(findimg == "minus.png")
				var toggle_image="<?php echo IMGPATH;?>maximize.png";
				$("#close_btn").attr({src:toggle_image});
		   		$("#jsrp_related").animate( { height:"300px" }, { queue:false, duration:500 });*/
		   		var toggle_image="<?php echo IMGPATH;?>minus.png";
				if(findimg == "minus.png")
				var toggle_image="<?php echo IMGPATH;?>maximize.png";
				$("#close_btn").attr({src:toggle_image});
				$("#jsrp_related").animate( { height:"40px" }, { queue:false, duration:500 });
		});
		});
	</script>
	<?php } } ?>
<!-- Footer -->
<?php if(isset($_SESSION['userid'] )) { ?>
	<div id="footer">
		<div class="copyrights">
			<?php if(COMPANY_CID==0){ echo $footer_contents['site_copyrights']; }else{ echo COMPANY_COPYRIGHT; } ?>
		</div>
	</div>
<?php } ?>
<!-- /footer -->

