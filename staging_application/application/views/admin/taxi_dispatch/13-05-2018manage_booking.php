<?php defined('SYSPATH') OR die("No direct access allowed."); ?>

<?php /*<link rel="stylesheet" href="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/css/ui-lightness/jquery-ui-1.8.11.custom.css" />
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/js/jquery-1.5.1.min.js"></script>
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/js/jquery-ui-1.8.11.custom.min.js"></script>
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-timepicker-addon.js"></script>*/?>
<script>
// Change the selector if needed
var $table = $('table.scroll_manage'),
    $bodyCells = $table.find('tbody tr:first').children(),
    colWidth;

 
    
// Adjust the width of thead cells when window resizes
$(window).resize(function() {
    // Get the tbody columns width array
    colWidth = $bodyCells.map(function() {
        return $(this).width();
    }).get();
    
    // Set the width of thead columns
    $table.find('thead tr').children().each(function(i, v) {
        $(v).width(colWidth[i]);
    });    
}).resize(); // Trigger resize handler 

</script>
    <script type="text/javascript">
        google.maps.event.addDomListener(window, 'load', function () {
            var places = new google.maps.places.Autocomplete(document.getElementById('search_location'));
            google.maps.event.addListener(places, 'place_changed', function () {
                var place = places.getPlace();
                var address = place.formatted_address;
                var latitude = place.geometry.location.lat();
                var longitude = place.geometry.location.lng();
               /* var mesg = "Address: " + address;
                mesg += "\nLatitude: " + latitude;
                mesg += "\nLongitude: " + longitude;*/
            });
        });
    </script>
<div class="container taxi_dispatcher">
    <div class="row">
        <!-- form: -->
        <div class="lft_outer">
<div id="submit_form_pay" class="payment_info" style="display:none;">

                         <form id = "pay_submit_form" method="post" action="" enctype="multipart/form-data">
                            <input type="hidden" name="edit_pass_logid" id = "edit_pass_logid1" value="">
                            <!--<input type="hidden" name="travel_status" id = "travel_status">-->
                                    <div>
                                            <div class="payment_info_inner">
                                               <h4 class="payment_info_title"> <?php echo __('payment_information'); ?>
                                                <a href="javascript:;" title="close" class="popup_close_button close_side_bar">&nbsp;</a></h4>
                                                <ul class="payment_inner">
                                                    
                                                    <li>
                                                    <label><?php echo __('fare'); ?>:&nbsp;</label><label id="edit_min_fare1" class=""><?php echo '0'; ?></label><label><?php echo $company_currency; ?></label>
                                                </li>

                                                </ul>
                                               
                                            </div>
                                            <div class="payment_info_content">
                                            <table>
                                            <tr><td>
                                            <label><?php echo __('cash'); ?>:&nbsp;</label></td><td><input readonly="readonly" class="form-control pay" type="text" name="cash_pay" id = "cash_pay_show" value = 0></td></tr>
                                            <tr><td><label><?php echo __('card'); ?>:&nbsp;</label></td><td><input readonly="readonly" class="form-control pay" type="text" name="card_pay" id = "card_pay_show"  value = 0></td></tr>
                                            <tr><td><label><?php echo __('online_knet'); ?>:&nbsp;</label></td><td><input readonly="readonly" class="form-control pay" type="text" name="knet_pay_show_show" id = 'knet_pay'  value = 0></td></tr>
                                            <tr><td><label><?php echo __('wallet_label'); ?>:&nbsp;</label></td><td><input readonly="readonly" class="form-control pay" type="text" name="wallet_pay_show" id = 'wallet_pay'  value = 0></td></tr>
                                            <tr><td><label><?php echo __('pending_payment_label'); ?>:&nbsp;</label></td><td><input class="form-control pay" type="text" name="pending_pay" id = 'pending_pay'  value = 0></td></tr>
                                            <input type="hidden" id="cash_pay" value=""/>
                                            <input type="hidden" id="card_pay" value=""/>
                                            <input type="hidden" id="knet_pay" value=""/>
                                            <input type="hidden" id="wallet_pay" value=""/>
                                            <input type="hidden" id="disp_edit_pass_id" value=""/>
                                            <input type="hidden" id="disp_edit_trip_id" value=""/>
                                            <input type="hidden" id="prev_pending_pay" value=""/>
                                           <?php /* <input type="hidden" id="pending_pay" value=""/> */ ?>
                                           <tr><td> <label><?php echo __('additional_amount'); ?>:&nbsp;</label></td><td><input class="form-control pay" type="text" name="add_amt" id = "add_amt" value = '' ></td></tr>
                                           <tr><td><label><?php echo __('fare_note'); ?>:&nbsp;</label></td><td><textarea rows='2' cols='20' name='fare_note' id='fare_note'></textarea></td></tr>

                                         
                                           </table>
                                           
                                            <div >
                                              <tr><span id = "add_err" style = "color:red;"></span></tr>
                                            <button type="submit" style = 'float:right;background: #f9c213;border: none;color: #000;' class="btn btn-primary" id="pay_submit" name="pay_submit" value="<?php echo __('pay_submit'); ?>" ><?php echo __('submit'); ?></button>
                                            </div>
                                            </div>
                                    </div>
                        </form>
                                      
                       
                        <div class="map_addbooking_outer" --class="col-lg-5 col-lg-5_map">
                            <div id="map_editbooking"></div>
                        </div>
                    </div> 
	
	<form method="get" class="form form_manage_booking" name="frmcompany" style="overflow: hidden; overflow-x: auto;margin-top:15px;" id="frmcompany" action="companysearch">
		<table class="list_table1 list_table1_manage_booking" border="0" width="100%" cellpadding="6" cellspacing="0">
			<tr>
				<td width="15%">
					<div class="new_input_field">
					   <input type="text" name="search_txt" maxlength="150" id="search_txt" value="" title="<?php echo __('search_manage_booking'); ?>" placeholder="<?php echo __('search_manage_booking'); ?>"  --onKeyUp="all_booking_manage_list_all()"/>
					  <?php /* <p class="manage_booking_search"><?php echo __('search_manage_booking'); ?></p> */ ?>
					</div>
				</td>
				<td width="15%">
					<div class="new_input_field">
					   <input type="text" name="search_location" maxlength="150" id="search_location" value="" title="<?php echo __('location_label'); ?>" placeholder="<?php echo __('location_label'); ?>"  --onKeyUp="all_booking_manage_list_all()"/>
					  <?php /* <p class="manage_booking_search"><?php echo __('search_manage_booking'); ?></p> */ ?>
					</div>
				</td>
				
				<td width="20%">
					<!--<div class="new_input_field">
						<label><?php //echo __('from_date'); ?></label>
						<input type="text" name="filter_date" id="filter_date" readonly value="" --onChange="all_booking_manage_list_all()"/>
						<span class="add-on"><i class="icon-remove"></i></span>
					</div> -->
					<div class="input-append date reset-part">
						<label><?php echo __('from_date'); ?></label>
						<input type="text" name="filter_date" id="filter_date" readonly value="" --onChange="all_booking_manage_list_all()"/>
						<span class="add-on"><i class="glyphicon glyphicon-remove" id="clearFromDate"></i></span>
					</div>
				</td>
				<td width="20%">
					<div class="input-append date to-reset-part">
						<label><?php echo __('to_date'); ?></label>
						<input type="text" name="to_date" id="to_date" readonly value="" --onChange="all_booking_manage_list_all()"/>
						<span class="add-on"><i class="glyphicon glyphicon-remove" id="clearToDate"></i></span>
					</div>
				</td>
				<td width="20%">
					<div class="new_input_field">
						<input type="button" name="submit_filter" id="submit_filter" onclick="all_booking_manage_list_all()" value="Submit" style="width:100px;" />
						<input type="button" name="reset_date" id="reset_date" value="Reset" style="width:100px;" />
					</div>
				</td>
			<tr/>
			<?php /*<tr><td colspan='5'><p style="font:normal 15px 'nunitobold';"><?php echo __('search_manage_booking'); ?></p></td></tr> */ ?>
		</table>
	</form>

	<div class="taxi_scroll_one_top taxi_scroll_one_top_manage_booking">
		<table cellspacing="0" cellpadding="0" width="100%" align="center" class="dispatch_icons">
			<tr>
				<td>
					<div class="heading_icon_one"><input type="checkbox" name="status_color" value="0" onchange="all_booking_manage_list_all()"></div>
					<label>Assign</label>
				</td>
				<td>
					<div class="heading_icon_two"><input type="checkbox" name="status_color" value="6, 7, 10" onchange="all_booking_manage_list_all()"></div>
					<label>Reassign</label>
				</td>
				<?php /*
				<td>
					<div class="heading_icon_three"><input type="checkbox" name="status_color" value="7" onchange="all_booking_manage_list_all()"></div>
					<label>Waiting for response</label>
				</td>
				*/ ?>
				<td>
					<div class="heading_icon_four"><input type="checkbox" name="status_color" value="9" onchange="all_booking_manage_list_all()"></div>
					<label>Trip Confirmed</label>
				</td>
				<td>
					<div class="heading_icon_five"><input type="checkbox" name="status_color" value="3" onchange="all_booking_manage_list_all()"></div>
					<label>Start To Pickup</label>
				</td>
				<td>
					<div class="heading_icon_six"><input type="checkbox" name="status_color" value="2" onchange="all_booking_manage_list_all()"></div>
					<label>InProgress</label>
				</td>
				<td>
					<div class="heading_icon_sevan"><input type="checkbox" name="status_color" value="1" onchange="all_booking_manage_list_all()"></div>
					<label>Trip Completed</label>
				</td>
				<td>
					<div class="heading_icon_eight"><input type="checkbox" name="status_color" value="5" onchange="all_booking_manage_list_all()"></div>
					<label>Waiting for Payment</label>
				</td>
				<td>
					<input type="hidden" name="status_color_cancel" id="status_color_cancel" value="8">
					<div class="heading_icon_nine"><input type="checkbox" name="status_cancel" id="status_cancel" value="C,R" onchange="all_booking_manage_list_all()"></div>
					<label>Trip Cancelled</label>
				</td>
			</tr>
		</table>
	</div>
	
	<div class="manage_booking_outer col-md-12 map_manage_booking map_manage_booking_scroll">
		<div class="form-control_bott">
			<div id="change_result">
				<div class="widget">                  
					<div class="overflow-block overflow-block_outer">                                
						<table cellspacing="0" cellpadding="0" class="scroll_manage" width="100%" align="center" id="changetr">
							<thead id="list_thead">
								<tr>
									<td align="center"><?php echo __('booking_time'); ?></td>
									<td align="center"><?php echo __('pickup_time'); ?></td>
									<td align="center"><?php echo __('trip_id'); ?></td>
									<td align="center"><?php echo __('passenger'); ?></td>
									<?php /*if($_SESSION['user_type']=="A"){ ?>
									<td align="center"><?php echo __('company_name'); ?></td>
									<?php } */ ?>
									<td align="center"><?php echo __('driver'); ?></td>
									<td align="center"><?php echo __('vehicle'); ?></td>
									<td align="center"><?php echo __('passenger_phone'); ?></td>
									<td align="center"><?php echo __('Current_Location'); ?></td>
									<td align="center"><?php echo __('Drop_Location'); ?></td>
									<td align="center"><?php echo __('distance'); ?></td>
									<td align="center"><?php echo __('payment_type'); ?></td>
									<td align="center"><?php echo __('fare').'('.$company_currency.')'; ?></td>
									<!-- <td align="center"><?php echo __('pending_amt'); ?></td>
 -->                                <td align="center"><?php echo __('created_by'); ?></td>
									<td align="center"><?php echo __('status'); ?></td>
									<td align="center"><?php echo __('book_type'); ?></td>
									<td align="center"><?php echo __('notes'); ?></td>
									<td align="center" colspan="2"><?php echo __('action_label'); ?></td>
								</tr>
							</thead>
							<tbody class="all_booking_manage_scroll_all" id="all_booking_manage_list_all">
			<!---Manage Booking datas append here-->
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

	</div>

	<script>
		$(document).ready(function () {
			
			$("#reset_date").click(function(){
				$("#search_txt").val("");
				$("#search_location").val("");
				$("#filter_date").val("");
				$("#to_date").val("");
				all_booking_manage_list_all()
			});
			
			$("#clearFromDate").on('click',function(){
				$("#filter_date").val("");
				all_booking_manage_list_all()
				
			});
			
			$("#clearToDate").on('click',function(){
				$("#to_date").val("");
				all_booking_manage_list_all()
				
			});
			
			$("#sidebar-wrapper").hide();
		$("#page-content-wrapper").click(function() {
			$("#sidebar-wrapper").show();
			$("#menu-toggle").hide();
		});
			
			$(".close_side_bar").click(function() {
				$("#menu-toggle").show();
				$("#sidebar-wrapper").hide();
				$("#wrapper").addClass("toggled");
			});
			
			$(':checkbox').each(function() {
				this.checked = true;
			});
			all_booking_manage_list_all();//For intial load
			
			$("#filter_date").datetimepicker( {
				autoclose:true,
				showTimepicker:true,
				showSecond: true,
				timeFormat: 'hh:mm:ss',
				dateFormat: 'yy-mm-dd',
				stepHour: 1,
				stepMinute: 1,
				//minDateTime : new Date(),
				stepSecond: 1
			} );
			
			var startDate = $("#filter_date").val();
			
			$("#to_date").datetimepicker( {
				autoclose:true,
				showTimepicker:true,
				showSecond: true,
				timeFormat: 'hh:mm:ss',
				dateFormat: 'yy-mm-dd',
				stepHour: 1,
				stepMinute: 1,
				//minDateTime : new Date(),
				stepSecond: 1
			} );
			
		});

		var blog_height = $(window).height() - 170;
		$("#taxi_scroll_new").css({
				'height': blog_height,
				'overflow-y': 'auto'
		})
		
		function all_booking_manage_list_all()
		{
			//alert('ok');
			var favorite = [];
			$.each($("input[name='status_color']:checked"), function(){            
				favorite.push($(this).val());
			});
			var status_color_cancel = $('#status_color_cancel').val();
			favorite.push(status_color_cancel);
			var status_color=favorite.join(", ");

			var status_cancel = [];
			$.each($("input[name='status_cancel']:checked"), function(){            
				status_cancel.push($(this).val());
			});

			
			var search_txt = $('#search_txt').val();
			var search_location = $('#search_location').val();
			var filter_date = $('#filter_date').val();
			var to_date = $('#to_date').val();
			var booking_filter = $('#booking_filter').val();
			
			//alert(booking_filter);
			var manage_status=1;
			var Path = "<?php echo URL_BASE; ?>";
			var book_key = '';
			var type     = '';
			<?php if(isset($booking_key) && !empty($booking_key)) { ?>
				book_key = "<?php echo $booking_key; ?>";
			<?php } ?>
			<?php if(isset($type) && !empty($type)) { ?>
				type     = "<?php echo $type; ?>";
			<?php } ?>
			
			var dataS = "travel_status="+status_color+"&status_cancel="+status_cancel+"&manage_status="+manage_status+"&search_txt="+search_txt+"&search_location="+search_location+"&filter_date="+filter_date+"&to_date="+to_date+"&booking_filter="+booking_filter+"&booking_key="+book_key+"&type="+type;
			//var dataS = "travel_status="+status_color+"&status_cancel="+status_cancel+"&manage_status="+manage_status;
			var url_path = Path+"taxidispatch/all_booking_list_manage_all";
			var response;
			$.ajax({
				type: "GET",
				url: url_path, 
				data: dataS, 
				cache: false, 
				dataType: 'html',
				success: function(response){
					$('#all_booking_manage_list_all').html(response);
					
					var $table = $('table.scroll_manage'),
					$bodyCells = $table.find('tbody tr:first').children(),
					colWidth;

				 // Get the tbody columns width array
					colWidth = $bodyCells.map(function() {
						return $(this).width();
					}).get();
					
					// Set the width of thead columns
					$table.find('thead tr').children().each(function(i, v) {
						$(v).width(colWidth[i]);
					}); 
					//edit button click function
					$('.oddtr').on('click', function(){
						var isrdata = this.id;
						var findid = isrdata.split('_').pop();
						window.location.href="<?php echo URL_BASE;?>taxidispatch/dashboard?trip_id="+findid;
						
					});
					//update button click function
					$('.update_dispatch').click(function() {
						var thisid = this.id;
						var logid = thisid.split('_');
						//window.location.href="<?php echo URL_BASE;?>taxidispatch/dashboard?splid="+logid[2]+"&taxi_company="+logid[3];
						var data = "company_id="+logid[3];
					var url_path = "<?php echo URL_BASE;?>taxidispatch/checkdispatchsettings";
					$.ajax({
						type: "POST",
						url:url_path,
						data: data, 
						async: true,
						success:function(res){
							var setArr = res.split(',');
							if(setArr.length > 1) {
								$("#dispatchSetting").modal({show:true});
								$(".dispatch_sel").on('click',function(){
									var seleVal = $(this).val();
									window.location.href="<?php echo URL_BASE;?>taxidispatch/dashboard?splid="+logid[2]+"&taxi_company="+logid[3]+"&dispatch_type="+seleVal;
								});
								//
							} else {
								window.location.href="<?php echo URL_BASE;?>taxidispatch/dashboard?splid="+logid[2]+"&taxi_company="+logid[3]+"&dispatch_type="+setArr[0];
							}
							//console.log(setArr.length);return false;
						},
						error:function() {
							//alert('failed'); 
						}
					});
					});
				}		 
			});	
		}
		
		// For 10 seconds interval for without refresh
		/*setInterval(function()
		{
			all_booking_manage_list_all()  
		},60000); // For 60 seconds interval */
	</script>
<div class="modal fade" id="dispatchSetting" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" ><?php echo __('tdispatch_setting'); ?></h4>
      </div>
      <div class="modal-body">
		  <input type="radio" name="dispatch_setting" class="dispatch_sel" value="1"> Auto
		  <input type="radio" name="dispatch_setting" class="dispatch_sel" value="2"> Manual
		  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
