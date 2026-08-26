<?php
	$current_year=date ('Y');
	if(isset($post_values)){
		$sdate=$post_values['startdate'];
		$edate=$post_values['enddate'];
		$for_date=$sdate." to ".$edate;
		$companydata = isset($post_values['company']) ? $post_values['company'] : 1;
		if($companydata ==''){
			$company_name="All";
		}else{
			$company_name="";
			
			if(isset($get_company_details) && count($get_company_details) > 0){				
			foreach($get_company_details as $gcd){
				if($gcd['cid']==$companydata){
					$company_name=ucfirst($gcd['company_name']);
				}
			} 
		}
		}
	}else{
		$for_date=$current_year;
	}
	
	if($get_transaction){
		
		$fare = [];
		$month = [];
		$trips = [];
		
		foreach($get_transaction as $vl)
		{
			if($vl['fare'] != NULL){
				$trips[] = $vl['trips'];
				$fare[] = $vl['fare'];
				$dateObj   = DateTime::createFromFormat('!m', $vl['_id']['month']);
				$month[] = "'".$vl['_id']['date']." ".$dateObj->format('F')."'";
			}
		}
		
		if($trips != NULL){
			$trips = implode(",",$trips);
		}
		if($fare != NULL){
			$fare = implode(",",$fare);
		}
		if($month != NULL){
			$month = implode(",",$month);
		}
		$display ="display:block;";
	}else{
		$fare = [];
		$month = [];
		$trips = [];
		$display ="display:none;";
	}
?>
<?php if($display == 'display:none;'){ echo "<div class='no_data'>".__('no_data')."</div>"; } else{ ?> 
<div id="total_trips_details" style="min-width: 400px; height: 400px; margin: 0 auto<?php echo $display;?>">
	<script>
	<?php if(count($month) > 0) { ?>
		$('#total_trips_details').highcharts({			
			chart: {
				shortMonths:true,
				zoomType: 'xy'
			},
			title: {
					text: 'Total Trip Details [<?php echo $company_name; ?>]'
				},
				subtitle: {
					text: "<?php echo __('for_label') . ' ' . $for_date; ?>",
				},
				xAxis: [{
					shortMonths:true,
					categories: [<?php echo $month; ?>]
				}],
				yAxis: [{ // Primary yAxis
					labels: {
						format: '{value} Trips',
						style: {
							color: Highcharts.getOptions().colors[2]
						}
					},
					title: {
						text: 'Trip Counts',
						style: {
							color: Highcharts.getOptions().colors[2]
						}
					},
					opposite: true

				}, { // Secondary yAxis
					gridLineWidth: 0,
					title: {
						text: 'Trip Revenues',
						style: {
							color: Highcharts.getOptions().colors[0]
						}
					},
					labels: {
						format: '{value} <?php echo CURRENCY; ?>',
						style: {
							color: Highcharts.getOptions().colors[0]
						}
					}

				}, ],
				tooltip: {
					shared: true
				},
				legend: {
					layout: 'vertical',
					align: 'left',
					x: 120,
					verticalAlign: 'top',
					y: 80,
					floating: true,
					backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
				},
				series: [{
					name: 'Trip Revenues',
					type: 'column',
					yAxis: 1,
					data : [<?php echo $fare;?>],
					tooltip: {
						valueSuffix: ' <?php echo CURRENCY; ?>'
					}

				},
				 {
					name: 'Trip Counts',
					type: 'spline',
					data : [<?php echo $trips;?>],
					tooltip: {
						valueSuffix: ' Trips'
					}
				}]
		});
	<?php } ?>
	</script>
</div>
<?php } ?>
