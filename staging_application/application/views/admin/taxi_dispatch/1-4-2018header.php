
<?php /*
<!--All in one CSS File [Below mentioned files are combined]-->
<link rel="stylesheet" href="<?php echo URL_BASE;?>public/bootstrap-3.2.0/vendor/bootstrap/css/main_base.css"/>
*/ ?>
<link rel="stylesheet" href="<?php echo URL_BASE;?>public/bootstrap-3.2.0/vendor/bootstrap/css/bootstrap.css"/>
<link rel="stylesheet" href="<?php echo URL_BASE;?>public/bootstrap-3.2.0/vendor/bootstrap/css/style.css"/>
<link rel="stylesheet" href="<?php echo URL_BASE;?>public/bootstrap-3.2.0/vendor/bootstrap/css/simple-sidebar.css"/>
<link rel="stylesheet" href="<?php echo URL_BASE;?>public/bootstrap-3.2.0/dist/css/formValidation.css"/>
<link rel="stylesheet" href="<?php echo URL_BASE;?>public/bootstrap-3.2.0/vendor/bootstrap/css/bootstrap-datetimepicker.css"/>
<link rel="stylesheet" href="<?php echo URL_BASE;?>public/bootstrap-3.2.0/vendor/bootstrap/css/media_style.css"/>
<div class="loader">
	<div class="loader_inner">
		<div class="clearfix load_logo" style="margin-left: 35px; margin-bottom: 15px;">
			<?php if(COMPANY_CID > 1)
		{ 
			$company_logo = $_SERVER['DOCUMENT_ROOT'].'/'.SITE_LOGO_IMGPATH.SUBDOMAIN.'.png';
			if(file_exists($company_logo))
			{?>
			<img src="<?php echo URL_BASE.SITE_LOGO_IMGPATH.SUBDOMAIN.'.png'; ?>" alt="Logo">
			<?php 
			} else { ?>
			<img src="<?php echo URL_BASE; ?>public/uploads/site_logo/logo.png" alt="Logo">
			<?php } 
		} else { ?>
		<img src="<?php echo URL_BASE; ?>public/uploads/site_logo/logo.png" alt="Logo">
		<?php }
		?>
			</div>		
		<div class="clearfix"><img src='<?php echo URL_BASE; ?>public/css/img/ajax-loaders/294.gif' /></div>
	</div>
</div>
<div class="taxi_dispatcher_inner">
    <div class="row"> 
        <div class="col-lg-5">
<div id="wrapper" class="toggled">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a class="sidebar_menu" href="javascript:;">
                        Menu
                        <span class="close_side_bar">&nbsp;</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo URL_BASE; ?>taxidispatch/dashboard">Dashboard</a>
                </li>
                <li>
                    <a href="<?php echo URL_BASE; ?>taxidispatch/manage_booking"><?php echo __('manage_booking'); ?></a>
                </li>
				<li>
                    <a href="<?php echo URL_BASE; ?>taxidispatch/recurrent_booking"><?php echo __('recurrent_booking'); ?></a>
                </li>
               <?php /* <li>
                    <a href="<?php echo URL_BASE;?>tdispatch/recurrentbooking/"><?php echo __('recurrent_booking'); ?></a>
                </li>
                <li>
                    <a href="<?php echo URL_BASE;?>tdispatch/frequent_location/"><?php echo __('frequent_location'); ?></a>
                </li>
                <li>
                    <a href="<?php echo URL_BASE;?>tdispatch/frequent_journey/"><?php echo __('frequent_journey'); ?></a>
                </li> */ ?>
                <?php if($_SESSION['user_type'] =='C' || $_SESSION['user_type'] =='A') { ?>
                <li>
                    <a href="<?php echo URL_BASE;?>tdispatch/tdispatch_settings/"><?php echo __('tdispatch_setting'); ?></a>
                </li>
                <?php } ?>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">                       
                        <a href="#menu-toggle" id="menu-toggle">Menu</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
     </div>
        <div class="col-md-6">
            <a href="<?php echo URL_BASE; ?>taxidispatch/dashboard" title="logo">
            <?php if(COMPANY_CID > 1)
			{ 
				$company_logo = $_SERVER['DOCUMENT_ROOT'].'/'.SITE_LOGO_IMGPATH.SUBDOMAIN.'.png';
				if(file_exists($company_logo))
				{?>
				<img src="<?php echo URL_BASE.SITE_LOGO_IMGPATH.SUBDOMAIN.'.png'; ?>" alt="Logo">
				<?php 
				} else { ?>
				<img src="<?php echo URL_BASE; ?>public/uploads/site_logo/logo.png" alt="Logo">
				<?php } 
			} else { ?>
			<img src="<?php echo URL_BASE; ?>public/uploads/site_logo/logo.png" alt="Logo">
			<?php }
			?>
            </a>
        </div>
        <div class="col-lg-5 rgt_menu">            
            <ul>
				<?php if($_SESSION['user_type']=="A") { ?>
					<li><a href="<?php echo URL_BASE; ?>admin/dashboard" title="Go to">Goto Admin</a></li>
					<li><a href="<?php echo URL_BASE; ?>admin/logout" title="Logout">Logout</a></li>
				<?php } else if($_SESSION['user_type']=="C") { ?>
					<li><a href="<?php echo URL_BASE; ?>company/dashboard" title="Go to">Goto Company</a></li>
					<li><a href="<?php echo URL_BASE; ?>company/logout" title="Logout">Logout</a></li>
				<?php }	else if($_SESSION['user_type']=="M") { ?>
					<li><a href="<?php echo URL_BASE; ?>manager/dashboard" title="Go to">Goto Dispatcher</a></li>
					<li><a href="<?php echo URL_BASE; ?>manager/logout" title="Logout">Logout</a></li>
				<?php }  ?>
            </ul>
        </div>
    </div>
</div>
   
