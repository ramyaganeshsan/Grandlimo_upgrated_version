<?php defined('SYSPATH') OR die('No direct access allowed.');?>    
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/script.js"></script> 
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/plugins/bootstrap.min.js"></script>
<?php 
	if($_SESSION['user_type'] !='M'&& $_SESSION['user_type'] == 'A')
	{
		$get_accountbalance = commonfunction::get_account_balance($_SESSION['user_type']);
	}
	if($_SESSION['user_type'] !='M' && $_SESSION['user_type'] == 'C')
	{
		$get_accountbalance1 = commonfunction::get_account_balance($_SESSION['user_type'],$_SESSION['company_id']);
	}
	
?>
<?php if ($action != 'login'): 
	if($_SESSION['user_type'] == 'A' || $_SESSION['user_type'] == 'S') { 
		$url = "admin/editprofile/";
	}else if($_SESSION['user_type'] == 'C') {
		$url = "company/editprofile/";
	}
	else if($_SESSION['user_type'] == 'M') {
		 $url = "manager/editprofile/";
	}
	
	if($_SESSION['user_type'] !='M' && $_SESSION['user_type'] !='S')
	{
		if($_SESSION['user_type'] =='C')
		{
			$company_currency = findcompany_currency($_SESSION['company_id']);
		}
		else
		{
			$company_currency = CURRENCY;
		}
	} ?>
        
<?php if($_SESSION['user_type'] == 'A' || $_SESSION['user_type'] == 'S') {  ?>
                    
<!-- Fixed top -->
<div id="top">
	<div class="fixed">
		<a href="<?php echo URL_BASE;?>" target = "_blank" title="" class="logo"><img src="<?php echo URL_BASE.SITE_LOGO_IMGPATH.'logo.png'; ?>" alt="" /></a>
		<ul class="top-menu">
			<?php 
			
			 if($_SESSION['user_type'] == 'O') { ?>
			 <li><a class="all_balance"><?php 
			if($_SESSION['user_type'] != 'S'){ echo __('total_amount').' ';} else {echo "";} 
			if($_SESSION['user_type'] !='M' && $_SESSION['user_type'] == 'A')
			{
				echo CURRENCY.' '.round($get_accountbalance,3);
			}
			if($_SESSION['user_type'] !='M' && $_SESSION['user_type'] == 'C')
			{
				$company_currency = findcompany_currency($_SESSION['company_id']);
				echo $company_currency.' '.round($get_accountbalance1,3);
			}
			?></a></li> <?php } ?>
				
			<?php if ($action =='dashboard')
			{
				echo '<li><a class="showmenu"></a></li>'; 
			}?>
			<li class="dropdown">
				<a class="user-menu" data-toggle="dropdown">
					<?php 
						if ((isset($user_data) && isset($user_data[0]['photo']) ) && $user_data[0]['photo'] != '' && file_exists(DOCROOT.USER_IMGPATH_HEADER_THUMB.$user_data[0]['photo'])) { 
							$user_path_img = URL_BASE.USER_IMGPATH_HEADER_THUMB.$user_data[0]['photo'];
						}
						else
						{
							$user_path_img = IMGPATH . 'icons/userPic.png';
						}
					?>
					<img src="<?php echo $user_path_img; ?>" alt="" /><span><?php echo 'Welcome'.' '.$_SESSION['name']; ?><b class="caret"></b></span></a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo URL_BASE; ?>admin/editprofile/<?php echo $adminid; ?>" title=""><i class="icon-user"></i><?php echo __('profile');?></a></li>
					<?php if(COMPANY_CID > 1 )
					{ ?>
					<li><a href="<?php echo URL_BASE; ?>admin/changepassword/" title=""><i class="icon-cog"></i><?php echo __("menu_change_password"); ?></a></li>
					<?php } ?>
					<li><a href="<?php echo URL_BASE; ?>admin/logout/" title=""><i class="icon-remove"></i><?php echo __("logout_label"); ?></a></li>
				</ul>
			</li>
		</ul>
	</div>
</div>
<!-- /fixed top -->
<?php  } 
else if($_SESSION['user_type'] == 'C') { ?>	
                    
  <!-- Fixed top -->
<div id="top">
	<div class="fixed">
		<?php if(COMPANY_CID > 1)
		{ 
			$company_logo = $_SERVER['DOCUMENT_ROOT'].'/'.SITE_LOGO_IMGPATH.SUBDOMAIN.'.png';
			if(file_exists($company_logo))
			{?>		
				<a href="<?php echo URL_BASE;?>" target = "_blank" title="" class="logo"><img src="<?php echo URL_BASE.SITE_LOGO_IMGPATH.SUBDOMAIN.'.png'; ?>" alt="" /></a>
			<?php 
			} else { ?>
			<a href="<?php echo URL_BASE; ?>" target = "_blank"><img src="<?php echo URL_BASE; ?>public/uploads/site_logo/logo.png" border="0" title="" /></a>
			<?php } 
		} else { ?>
		<a href="<?php echo URL_BASE;?>" target = "_blank" title="" class="logo"><img src="<?php echo URL_BASE.SITE_LOGO_IMGPATH.'logo.png'; ?>" alt="" /></a>
		<?php }
		?>
		<ul class="top-menu">
		
			<?php /* <li><a class="all_balance"><?php echo __('total_amount').' '; 
			if($_SESSION['user_type'] !='M' && $_SESSION['user_type'] == 'A')
			{
				echo CURRENCY.round($get_accountbalance,3);
			}
			if($_SESSION['user_type'] !='M' && $_SESSION['user_type'] == 'C')
			{
				$company_currency = findcompany_currency($_SESSION['company_id']);
				echo $company_currency.' '.round($get_accountbalance1,3);
			} 
			?></a></li> */?>
			
			<?php /* <li><a class="fullview"></a></li> */?>
			<?php if ($action =='dashboard')
			{
				echo '<li><a class="showmenu"></a></li>'; 
			}?>
			<li class="dropdown">
				<a class="user-menu" data-toggle="dropdown">
					<?php 
						if ((isset($user_data) && isset($user_data[0]['photo']) ) && $user_data[0]['photo'] != '' && file_exists(DOCROOT.USER_IMGPATH_HEADER_THUMB.$user_data[0]['photo'])) { 
							$user_path_img = URL_BASE.USER_IMGPATH_HEADER_THUMB.$user_data[0]['photo'];
						}
						else
						{
							$user_path_img = IMGPATH . 'icons/userPic.png';
						}
					?>
					<img src="<?php echo $user_path_img; ?>" alt="" /><span><?php echo 'Welcome'.' '.$_SESSION['name']; ?><b class="caret"></b></span></a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo URL_BASE; ?>company/editprofile/<?php echo $adminid; ?>" title=""><i class="icon-user"></i><?php echo __('profile');?></a></li>
					<?php if(COMPANY_CID > 1)
					{ ?>
					<li><a href="<?php echo URL_BASE; ?>company/changepassword/" title=""><i class="icon-cog"></i><?php echo __("menu_change_password"); ?></a></li>
					<?php } ?>
					<li><a href="<?php echo URL_BASE; ?>company/logout/" title=""><i class="icon-remove"></i><?php echo __("logout_label"); ?></a></li>
				</ul>
			</li>
		</ul>
	</div>
</div>
<!-- /fixed top -->
<?php } else if($_SESSION['user_type'] == 'M' ) { ?>	
<!-- Fixed top -->
<div id="top">
<div class="fixed">
		<?php if(COMPANY_CID > 1)
		{ 
			$company_logo = $_SERVER['DOCUMENT_ROOT'].'/'.SITE_LOGO_IMGPATH.SUBDOMAIN.'.png';
			if(file_exists($company_logo))
			{?>		
				<a href="<?php echo URL_BASE;?>" target = "_blank" title="" class="logo"><img src="<?php echo URL_BASE.SITE_LOGO_IMGPATH.SUBDOMAIN.'.png'; ?>" alt="" /></a>
			<?php 
			} else { ?>
			<a href="<?php echo URL_BASE; ?>" target = "_blank"><img src="<?php echo URL_BASE; ?>public/uploads/site_logo/logo.png" border="0" title="" /></a>
			<?php } 
		} else { ?>
		<a href="<?php echo URL_BASE;?>" target = "_blank" title="" class="logo"><img src="<?php echo URL_BASE.SITE_LOGO_IMGPATH.'logo.png'; ?>" alt="" /></a>
		<?php }
		?>
		<ul class="top-menu">
		<?php /* <li><a class="fullview"></a></li> */?>
		<?php if ($action =='dashboard')
		{
			echo '<li><a class="showmenu"></a></li>'; 
		}?>
		<li class="dropdown">
			<a class="user-menu" data-toggle="dropdown">
				<?php 
					if ((isset($user_data) && isset($user_data[0]['photo']) ) && $user_data[0]['photo'] != '' && file_exists(DOCROOT.USER_IMGPATH_HEADER_THUMB.$user_data[0]['photo'])) { 
						$user_path_img = URL_BASE.USER_IMGPATH_HEADER_THUMB.$user_data[0]['photo'];
					}
					else
					{
						$user_path_img = IMGPATH . 'icons/userPic.png';
					}
				?>
				<img src="<?php echo $user_path_img; ?>" alt="" /><span><?php echo 'Welcome'.' '.$_SESSION['name']; ?><b class="caret"></b></span></a>
			<ul class="dropdown-menu">
				<li><a href="<?php echo URL_BASE; ?>manager/editprofile/<?php echo $adminid; ?>" title=""><i class="icon-user"></i><?php echo __('profile');?></a></li>
				<?php if(COMPANY_CID == 1)
				{ ?>
				<li><a href="<?php echo URL_BASE; ?>manager/changepassword/" title=""><i class="icon-cog"></i><?php echo __("menu_change_password"); ?></a></li>
				<?php } ?>
				<li><a href="<?php echo URL_BASE; ?>manager/logout/" title=""><i class="icon-remove"></i><?php echo __("logout_label"); ?></a></li>
			</ul>
		</li>
	</ul>
</div>
</div>
<!-- /fixed top -->
<?php }  else if($_SESSION['user_type'] == 'O' ) { ?>	
<!-- Fixed top -->
<div id="top">
<div class="fixed">
		<?php if(COMPANY_CID > 1)
		{ 
			$company_logo = $_SERVER['DOCUMENT_ROOT'].'/'.SITE_LOGO_IMGPATH.SUBDOMAIN.'.png';
			if(file_exists($company_logo))
			{?>		
				<a href="<?php echo URL_BASE;?>" target = "_blank" title="" class="logo"><img src="<?php echo URL_BASE.SITE_LOGO_IMGPATH.SUBDOMAIN.'.png'; ?>" alt="" /></a>
			<?php 
			} else { ?>
			<a href="<?php echo URL_BASE; ?>" target = "_blank"><img src="<?php echo URL_BASE; ?>public/uploads/site_logo/logo.png" border="0" title="" /></a>
			<?php } 
		} else { ?>
		<a href="<?php echo URL_BASE;?>" target = "_blank" title="" class="logo"><img src="<?php echo URL_BASE.SITE_LOGO_IMGPATH.'logo.png'; ?>" alt="" /></a>
		<?php }
		?>
		<ul class="top-menu">
			<?php 
			//print_r($_SESSION);exit;
			if($_SESSION['user_type'] == 'O')
			{
				$get_accountbalance = commonfunction::get_account_balance($_SESSION['user_type'],$_SESSION['userid']);
			}
	
			 if($_SESSION['user_type'] == 'O') { ?>
			 <li><a class="all_balance"><?php 
			 echo CURRENCY.' '.round($get_accountbalance,3);
			
			?></a></li> <?php } ?>
		<?php /* <li><a class="fullview"></a></li> */?>
		<?php if ($action =='dashboard')
		{
			echo '<li><a class="showmenu"></a></li>'; 
		}?>
		<li class="dropdown">
			<a class="user-menu" data-toggle="dropdown">
				<?php 
					if ((isset($user_data) && isset($user_data[0]['photo']) ) && $user_data[0]['photo'] != '' && file_exists(DOCROOT.USER_IMGPATH_HEADER_THUMB.$user_data[0]['photo'])) { 
						$user_path_img = URL_BASE.USER_IMGPATH_HEADER_THUMB.$user_data[0]['photo'];
					}
					else
					{
						$user_path_img = IMGPATH . 'icons/userPic.png';
					}
				?>
				<img src="<?php echo $user_path_img; ?>" alt="" /><span><?php echo 'Welcome'.' '.$_SESSION['name']; ?><b class="caret"></b></span></a>
			<ul class="dropdown-menu">
				<li><a href="<?php echo URL_BASE; ?>corporate/editprofile/<?php echo $adminid; ?>" title=""><i class="icon-user"></i><?php echo __('profile');?></a></li>
				<?php if(COMPANY_CID == 1)
				{ ?>
				<li><a href="<?php echo URL_BASE; ?>corporate/changepassword/" title=""><i class="icon-cog"></i><?php echo __("menu_change_password"); ?></a></li>
				<?php } ?>
				<li><a href="<?php echo URL_BASE; ?>corporate/logout/" title=""><i class="icon-remove"></i><?php echo __("logout_label"); ?></a></li>
			</ul>
		</li>
	</ul>
</div>
</div>
<!-- /fixed top -->
<?php } ?>
<?php  endif;  ?>
