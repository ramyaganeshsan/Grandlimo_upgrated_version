	<?php
		$tabselect = '';
		if($action == 'childlist' || $action == 'addchild' || $action == 'memberstrip') {
			$tabselect = 'tab-select';	
		}					
    ?>
	
	<ul class="nav nav-tabs nav-stacked main-menu">
			<li><a class="ajax-link" href="<?php echo URL_BASE;?>passengers/dashboard"><i class="icon-home"></i><span class="hidden-tablet"> <?php echo __('button_home'); ?></span></a></li>
			<li><a class="ajax-link" href="<?php echo URL_BASE;?>passengers/booking"><i class="icon-book"></i><span class="hidden-tablet"> <?php echo __('button_booking'); ?></span></a></li>
			<?php /*<li><a class="ajax-link" href="<?php echo URL_BASE;?>passengers/booking?type=child"><i class="icon-book"></i><span class="hidden-tablet"> <?php echo __('button_cbooking'); ?></span></a></li>
			<li><a class="ajax-link" href="<?php echo URL_BASE;?>passengers/airport_pickup"><i class="icon-book"></i><span class="hidden-tablet"> <?php echo __('button_abooking'); ?></span></a></li>
			 <li><a class="ajax-link" href="#"><i class="icon-user"></i><span class="hidden-tablet" onclick=teltofriendpopup('')> <?php echo __('tell_to_friend'); ?></span></a></li> */ ?>
			<li><a class="ajax-link" href="<?php echo URL_BASE;?>passengers/editprofile"><i class="icon-edit"></i><span class="hidden-tablet"> <?php echo __('editprofile_label'); ?></span></a></li>
			<li><a class="ajax-link" href="<?php echo URL_BASE;?>passengers/changepassword"><i class="icon-wrench"></i><span class="hidden-tablet"> <?php echo __('change_password_label'); ?></span></a></li>
			<!--<li>
				<a class="ajax-link drop_togle" href="javascript:;"><i class="icon-user"></i><span class="hidden-tablet"> <?php echo __('member_trip'); ?> </span><span class="caret pull-right"></span></a>
				<ul class="dropdow_menu <?php echo $tabselect; ?>">
					<li><a href="<?php echo URL_BASE;?>passengers/addchild"><i class="icn icn_mem"></i><span><?php echo __('add_child_details'); ?></span></a></li>
					<li><a href="<?php echo URL_BASE;?>passengers/childlist"><i class="icn icn_mem1"></i><span><?php echo __('child_member_list'); ?></span></a></li>
					<?php if($get_child_count > 0 ) { ?>
						<li><a class="ajax-link" href="<?php echo URL_BASE;?>passengers/memberstrip"><i class="icn icn_mem2"></i><span><?php echo __('memberstrip'); ?></span></a></li>
					<?php } ?>
				</ul>			
			</li>-->
			<li><a class="ajax-link" href="<?php echo URL_BASE;?>passengers/completedjourney"><i class="icon-ok"></i><span class="hidden-tablet"> <?php echo __('completed_trip'); ?> </span></a></li>
			<li><a class="ajax-link" href="<?php echo URL_BASE;?>passengers/paymentoption"><i class="icon-book"></i><span class="hidden-tablet"> <?php echo __('payment_option'); ?> </span></a></li>
			<?php /* <li><a class="ajax-link" href="<?php //echo URL_BASE;?>passengers/favourite_trip"><i class="icon-asterisk"></i><span class="hidden-tablet"> <?php echo __('favourite_trip'); ?></span></a></li> */ ?>
			<li><a class="ajax-link" href="<?php echo URL_BASE;?>passengers/transactionlog"><i class="icon-remove"></i><span class="hidden-tablet"> <?php echo __('cancelledtrip_logs'); ?></span></a></li>
			<li><a class="ajax-link" href="<?php echo URL_BASE;?>passengers/get_favourite_list"><i class="icon-heart"></i><span class="hidden-tablet"> <?php echo __('favourites'); ?></span></a></li>
			<li><a class="ajax-link" href="<?php echo URL_BASE;?>passengers/memberstrip?type=passenger"><i class="icon-user"></i><span class="hidden-tablet"> <?php echo __('mymemberstrip'); ?></span></a></li>
			<li><a class="ajax-link" href="<?php echo URL_BASE;?>passengers/invoice"><i class="icon-user"></i><span class="hidden-tablet"> <?php echo __('my_invoice'); ?></span></a></li>
			<li><a class="ajax-link" href="<?php echo URL_BASE;?>passengers/logout"><i class="icon-lock"></i><span class="hidden-tablet"> <?php echo __('logout_label'); ?></span></a></li>
	</ul>

	<!-- <label id="for-is-ajax" class="hidden-tablet" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>-->
<script>
	$(document).ready(function(){
		$('.drop_togle').click(function(){
			$('.dropdow_menu').toggle();
		});
	
	});
</script>


