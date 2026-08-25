	<ul class="nav nav-tabs nav-stacked main-menu">
			<li class="nav-header hidden-tablet"><?php echo __('button_home'); ?></li> 
			<li><a class="ajax-link" href="<?php echo URL_BASE;?>driver/dashboard"><i class="icon-home"></i><span class="hidden-tablet"><?php echo __('button_home'); ?></span></a></li>
			<li><a class="ajax-link" href="<?php echo URL_BASE;?>driver/editprofile"><i class="icon-edit"></i><span class="hidden-tablet"><?php echo __('editprofile_label'); ?></span></a></li>
			<li><a class="ajax-link" href="<?php echo URL_BASE;?>driver/changepassword"><i class="icon-wrench"></i><span class="hidden-tablet"><?php echo __('change_password_label'); ?></span></a></li>
			<li><a class="ajax-link" href="<?php echo URL_BASE;?>driver/transactionlog"><i class="icon-lock"></i><span class="hidden-tablet"><?php echo __('transactionlog_label');  ?></span></a></li>

			<li><a class="ajax-link" href="javascript:;" onclick="driver_logout()" ><i class="icon-lock"></i><span class="hidden-tablet"><?php echo __('logout_label'); ?></span></a></li>

			<!-- <li><a class="ajax-link" href="<?php echo URL_BASE;?>driver/logout"><i class="icon-lock"></i><span class="hidden-tablet"> Logout </span></a></li> -->

	</ul>
	<!-- <label id="for-is-ajax" class="hidden-tablet" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>-->

