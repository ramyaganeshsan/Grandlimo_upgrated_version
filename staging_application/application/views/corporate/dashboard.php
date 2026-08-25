<?php defined('SYSPATH') OR die("No direct access allowed.");?>
<?php
$startdate = date('Y-m-d 00:00:00'); 	
$enddate = date('Y-m-d H:i:s'); 	
?>
<link rel="stylesheet" href="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/css/ui-lightness/jquery-ui-1.8.11.custom.css" />
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/js/jquery-ui-1.8.11.custom.min.js"></script>
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery.validate.js"></script>

<?php
$startdate = date('Y-m-d 00:00:00'); 	
$enddate = date('Y-m-d H:i:s');
$not_setting = "ON";

?>


<!-- action tabs -->
 <div class="actions-wrapper">
				    <div class="actions">


				    	<div id="quick-actions">
				    		<ul class="statistics">
				    		
				    			<li>
									<div class="green_bg">
				    				<div class="top-info">
					    				<a href="<?php echo URL_BASE?>manage/coupon_package" title="<?php echo __(strtoupper('total_coupon_packages'));?>" class="green-square"></a>
					    				<strong><?php echo $admin_dashboard_data["package"]; ?></strong>
					    			</div>
									<div class="progress progress-micro"><div class="bar" style="width: 70%;"></div></div>
									</div>
									<span class="rapid_title"><?php echo __(strtoupper('total_coupon_packages'));?></span>
				    			</li>
				    			<li>
									<div class="orange_bg">
				    				<div class="top-info">
					    				<a href="<?php echo URL_BASE?>manage/promocode" title="<?php echo __(strtoupper('total_promo'));?>" class="sea-square"></a>
					    				<strong><?php echo $admin_dashboard_data["promo"]; ?></strong>
					    			</div>
									<div class="progress progress-micro"><div class="bar" style="width: 50%;"></div></div>
									</div>
									<span class="rapid_title"><?php echo __(strtoupper('total_promo'));?></span>
				    			</li>
				    		</ul>
				    	</div>
				    		<div class="widget chartWrapper">	<div class="title"><img src="<?php echo IMGPATH; ?>/icons/dark/stats.png" alt="" class="titleIcon" />
					<h6><?php echo __('total_company_details'); ?></h6></div><div class="body" id="company_total_user_counts"><div id="total_user_counts" style="min-width: 400px; height: 400px; margin: 0 auto"></div></div></div>

<?php 
$pack_name = '';
if(count($promocode_list) > 0 ){ 
foreach($promocode_list as $key => $promocode_list) {
$promodetails = $promocode_list['promodetails'];
$res[$key] = $promodetails['package_name'];

}
$final = array_count_values($res);	
}
$coupon_package_list = '';
$coupon_cnt_list = '';
//echo '<pre>'; 
//print_r($package_list);
//exit;
foreach($package_list as $pack){
	$coupon_cnt_list .= (isset($final[$pack['coupon_package_name']])?$final[$pack['coupon_package_name']]:0).',';
	$coupon_package_list .= "'".$pack['coupon_package_name']."'".',';
}
//print_r($coupon_package_list);
//print_r($coupon_cnt_list);
//exit;
trim($coupon_package_list,','); 
trim($coupon_cnt_list,','); 
?>
<script src="<?php echo SCRIPTPATH; ?>highcharts.js"></script>					
<script>
		
		

$(function () {
    $('#total_user_counts').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Package Vs Coupons'
        },
       
        xAxis: {
            categories: [<?php echo $coupon_package_list;?>],
            title: {
                text: null
            }
        },
        yAxis: {
            allowDecimals: false,
			min: 0,
            title: {
                text: 'Count',
                align: 'high'
            }
           
        },
       
       plotOptions: {
            bar: {
                dataLabels: {
                    enabled: false
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Coupons',
            data: [<?php echo $coupon_cnt_list;?>]
        }
       
      ]
    });
});


</script>
