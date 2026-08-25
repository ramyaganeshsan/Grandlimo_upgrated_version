<?php defined('SYSPATH') OR die('No direct access allowed.'); 
?>
<!-- About page-->
<div class="about_outer">
	<div class="about_baner">
		<img src="<?php echo URL_BASE;?>public/images/about_bg.png" alt="images"/>
	</div>
	<div class="about_inner">
		<div class="about_common">
		<div class="custemor_tabs">
                        <ul>
                            <li class="active" id="show_customercontent">
                                <a href="javascript:;" title="<?php echo __('customers'); ?>"><?php echo __('customers'); ?></a>
                            </li>
                            <li class="active" id="show_drivercontent">
                                <a href="javascript:;" title="<?php echo __('drivers'); ?>"><?php echo __('drivers'); ?></a>
                            </li> 
                            <li class="active" id="show_companycontent">
                                <a href="javascript:;" title="<?php echo __('company'); ?>"><?php echo __('company'); ?></a>
                            </li>
                        </ul>
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
							<div id="customer_content">
							<?php if(isset($customer_content[0]['content'])) { echo $customer_content[0]['content']; } ?>
							</div>
							<div id="driver_content">
							<?php if(isset($driver_content[0]['content'])) { echo $driver_content[0]['content']; } ?>
							</div>
							<div id="company_content">
							<?php if(isset($company_content[0]['content'])) { echo $company_content[0]['content']; } ?>
							</div>
						</div>
						
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
$( document ).ready(function(){
	$('#show_drivercontent').removeClass('active');
	$('#show_companycontent').removeClass('active');
	$('#customer_content').show();
	$('#driver_content').hide();
	$('#company_content').hide();
});

$('#show_customercontent').click(function() {
	$('#show_customercontent').addClass('active');
	$('#show_drivercontent').removeClass('active');
	$('#show_companycontent').removeClass('active');
	$('#customer_content').show();
	$('#driver_content').hide();
	$('#company_content').hide();
});

$('#show_drivercontent').click(function() {
	$('#show_customercontent').removeClass('active');
	$('#show_drivercontent').addClass('active');
	$('#show_companycontent').removeClass('active');
	$('#customer_content').hide();
	$('#driver_content').show();
	$('#company_content').hide();
});

$('#show_companycontent').click(function() {
	$('#show_customercontent').removeClass('active');
	$('#show_drivercontent').removeClass('active');
	$('#show_companycontent').addClass('active');
	$('#customer_content').hide();
	$('#driver_content').hide();
	$('#company_content').show();
});

$('#redirect_demo').click(function() {
document.location.href='http://demo.taximobility.com/company-registration.html';
});
</script>
