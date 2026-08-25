<?php  defined('SYSPATH') OR die("No direct access allowed."); 

$lang=isset($_SESSION['lang'])?$_SESSION['lang']:"en";
if($lang=='ar'){           
    $address_one = ADDRESS_ONE_ARABIC;
    $address_two = ADDRESS_TWO_ARABIC;
    $country = WEB_COUNTRY_ARABIC;
}else{           
    $address_one = ADDRESS_ONE;
    $address_two = ADDRESS_TWO;
    $country = WEB_COUNTRY;
}

//$how_its_work_pages = isset($how_its_work_page[0])?$how_its_work_page[0]:array();URL_BASEpublic/images/booked_car.png
?>
<style>
/*booking success*/
.booking_succbanner{ float: left;width: 100%;height:345px; background: #efefef}
.booking_succinner {float: left;width: 100%;flex: 1;height: 345px;display: flex;align-items: center;}
.booking_succlft{ float: left;width:50%; position: relative;}
.booking_succlft img{max-width: 90%;}
.booking_succrft{ float: left;width:50%;}
.booking_succrft h2{ font-size: 30px;font-family: 'Roboto-Light'; color: #333;margin-bottom: 17px;float: left;width:100%; }
.booking_succrft p{ font-size: 15px;font-family: 'Roboto-Regular'; color: #666666;margin-bottom: 17px;float: left;width:100%;  }
.booking_succrft span{ font-size: 18px;font-family: 'Roboto-Regular'; color: #108ddb;float: left;width:100%;  }
.booking_succrft .btn-primary{color: #ffffff;background-color: #1da1f3;border: 1px solid #1da1f3;padding: 8px 20px;
    font-size: 16px; margin-top: 21px;font-family: 'Roboto-Regular'; font-weight: 300;}
.booking_succrft .btn-primary:hover{background: #000000;color: #ffffff;border: 1px solid #000000;}
.confirmed_txt{position: absolute;top:50%; left: 50%;background:  url(../images/booked_confirm.png) no-repeat;width: 262px;height:122px; margin-left: -131px; margin-top:-61px;}
.hphone_ico_txt{position: absolute;left: 30px;top: 13px;font-size: 16px;color: #dddddd; font-style: normal;}
.banner .with_phone_code .form-control{padding-left: 125px;}
.drop_checkbox{position: absolute;right: 0;top:13px;font-size: 16px;color: #dddddd}
</style>
<div class="inner_page_container">
<div class="booking_succbanner">
	<div class="container">
		<div class="booking_succinner">
			<div class="booking_succlft">
				<img src="<?php echo $booking_image; ?>">
				<span class="confirmed_txt"></span>
			</div>
			<div class="booking_succrft">
				<h2><?php echo $booking_confirm_content['confirm_title']; ?></h2>
				<?php if(!empty($booking_id)){
				?>
				<h2>Trip ID : <?php echo $booking_id; ?></h2>
				<?php
				} ?>
				
				<p><?php echo $booking_confirm_content['confirm_description']; ?></p>
				<span><?php echo $booking_confirm_content['confirm_contact_us']; ?></span>
				<a href="<?php echo URL_BASE;?>" class="btn btn-primary" title="<?php echo __('back_to_home'); ?>"><?php echo __('back_to_home'); ?></a>
			</div>
		</div>
	</div>
</div>
</div>
