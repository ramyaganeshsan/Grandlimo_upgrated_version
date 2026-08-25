<?php 
    defined('SYSPATH') OR die("No direct access allowed.");

    $corporate = isset($srch["corporate"]) ? $srch["corporate"] :'';
    $startdate = isset($srch["start_date"]) ? $srch["start_date"] : date('Y-m-01 00:00:00');   
    $enddate = isset($srch["end_date"]) ? $srch["end_date"] : date('Y-m-t 23:59:59');

    $total_corporate_trips = count($corporateTrips);

    $table_css=$export_excel_button="";
    if($total_corporate_trips > 0) {
    	$table_css='class="table_border"'; 
    	$export_excel_button='<input type="button"  title="'.__('button_export').'" class="button" value="'.__('button_export').'"onclick="location.href=\''.URL_BASE.'manage/export" />';
    }
?>
<div class="container_content fl clr">
	<div class="cont_container mt15 mt10">
		<div class="content_middle">		 
            <form method="get" class="form" name="managecorporateform" id="managecorporateform" action="<?php echo URL_BASE; ?>/manage/corporate_trips">
                <table class="list_table1" border="0" width="65%" cellpadding="5" cellspacing="0">
                    <tr>
                        <td valign="top"><label><?php echo __('corporate_group'); ?></label></td>
                        <td valign="top">
                            <div class="selector" id="uniform-user_type">
                            <select class="select2" name="corporate" id="recharge_type" onchange="this.form.submit()">
                                <option value=""><?php echo __('select_label'); ?></option>    
                                <?php
                                foreach ($corporateGroups as $corporateGroup) {

                                    $selected_status = ($corporate == $corporateGroup['_id']) ? ' selected="selected" ' : " ";
                                    ?>  
                                    <option value="<?php echo $corporateGroup['_id']; ?>"  <?php echo $selected_status; ?> ><?php echo ucfirst($corporateGroup['group_name']); ?></option>
                                <?php }  ?>
                            </select>
                            </div>
                        </td>                    
					</tr>
                    <tr>
                          <td valign="middle"><label><?php echo __('from_date'); ?></label></td>
                        <td valign="top">
                        <div class="new_input_field_transaction">
                                  <input type="text"  readonly title="<?php echo __('select_datetime'); ?>" id="start_date" name="start_date" value="<?php echo $startdate;?>"  />
                         <span id="startdate_error" class="error"></span>        
                         </div>
                        
                        </td>       

                        <td valign="middle"><label><?php echo __('end_date'); ?></label></td>
                        <td valign="top">
                        <div class="new_input_field_transaction">
                                  <input type="text"  readonly title="<?php echo __('select_datetime'); ?>" id="end_date" name="end_date" value="<?php echo $enddate;?>"  />
                        <span id="enddate_error" class="error"></span>                              

                        </div>
                        </td>  
                        </tr>
					<tr>
                        <td valign="top"><label>&nbsp;</label></td>
                        <td>
                            <div class="button brownB">
                                <input type="submit" value="<?php echo __('button_search'); ?>" name="search_user" title="<?php echo __('button_search'); ?>" />
                            </div>
                            <div class="button blueB">
                                <input type="button" value="<?php echo __('button_cancel'); ?>" title="<?php echo __('button_cancel'); ?>" onclick="location.href = '<?php echo URL_BASE; ?>manage/corporate_trips'" />
                            </div>
                        </td>
                    </tr>
                </table>
                <div class="title">
                    <img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" />
                    <h6><?php echo $page_title; ?></h6>
                    <div style="width:auto; float:right; margin: -5px 3px;">
                        <?php  
                            if($total_corporate_trips > 0) { 
                                $export_table_count = $total_corporate_trips;
                                include_once(APPPATH.'views/admin/export_menu.php'); 
                            }
                        ?>
                    </div>
                </div>
                <?php if($total_corporate_trips > 0) { ?><div class= "overflow-block"><?php } ?>
                <table cellspacing="1" cellpadding="1" width="100%" style="border-top:1px solid #cdcdcd;" align="center" class="sTable responsive">
                    <?php if($total_corporate_trips > 0){ ?>
                        <thead>
                            <tr>
                                <td align="left" width="1%">
                                    <?php echo __('sno_label'); ?>
                                </td>
                                <td align="left" width="3%">
                                    <?php echo ucfirst(__('passenger_name')); ?>
                                </td>
                                <td align="left" width="3%">
                                    <?php echo __('passenger_phone'); ?>
                                </td>
                                <td align="left" width="1%">
                                    <?php echo __('promocode'); ?>
                                </td>
                                <td align="left" width="1%">
                                    <?php echo __('trip_id'); ?>
                                </td>
                                <td align="left" width="1%">
                                    <?php echo __('actual_pickup_time'); ?>
                                </td>
                                <td align="left" width="1%">
                                    <?php echo __('promo_discount'); ?>
                                </td>
                                <td align="left" width="1%">
                                    <?php echo __('trip_total_fare'); ?>
                                </td>
                                <!-- <td align="left" width="1%">
                                    <?php echo __('airport'); ?>
                                </td> -->
                                <td align="left" width="1%">
                                    <?php echo __('status'); ?>
                                </td>
                                <td align="left" width="1%">
                                    <?php echo __('actual_paid_amount'); ?>
                                </td>
                                <td align="left" width="2%">
                                    <?php echo __('created_date'); ?>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sno=$Offset; 
                                foreach($corporateTrips as $listings) { 
                                    $sno++;
                                    $trcolor=($sno%2==0) ? 'oddtr' : 'eventr';

                                    $listings['paid_status'] = isset($listings['paid_status']) ? $listings['paid_status'] : 0;
                                    $listings['airport_trip'] = isset($listings['airport_trip']) ? $listings['airport_trip'] : 0;
                                    $listings['total_fare_backup'] = isset($listings['total_fare_backup']) ? $listings['total_fare_backup'] : 0;
                                    $listings['actual_paid_amount'] = isset($listings['actual_paid_amount']) ? $listings['actual_paid_amount'] : 0;

                            ?>
                                <tr class="<?php echo $trcolor; ?>">
                                    <td align="center"><?php echo $sno; ?></td>
                                    <td align="center"><?php echo $listings['passenger_name']; ?></td>
                                    <td align="center"><?php echo $listings['country_code']." ".$listings['phone']; ?></td>
                                    <td align="center"><?php echo $listings['promocode']; ?></td>
                                    <td align="center"><?php echo $listings['tripId']; ?></td>
                                    <td align="center"><?php echo Commonfunction::convertphpdate('Y-m-d h:i:s A',$listings['actual_pickup_time']) ?></td>
                                    <td align="center"><?php echo CURRENCY.round($listings['discount'],3); ?></td>
                                    <td align="center"><?php echo CURRENCY.round($listings['trip_amount'],3); ?></td>
                                    <!-- <td align="center"> -->
                                        <!-- <?php echo $listings['airport_trip'] == 1 ? $listings['total_fare_backup'] != 0 ? "Airport (Free)" : "Airport" : "-"; ?> -->
                                    <!-- </td> -->
                                    <td align="center" style="color : <?php echo $listings['paid_status'] == 1 ? "green" : "tomato"; ?>">
                                        <?php echo $listings['paid_status'] == 1 ? "Paid" : "Unpaid"; ?>
                                    </td>
                                    <td align="center"><?php echo $listings['paid_status'] == 1 ? CURRENCY.round($listings['actual_paid_amount'],3) : "-"; ?></td>
                                    <td align="center"><?php echo Commonfunction::convertphpdate('Y-m-d h:i:s A',$listings['createdAt']) ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    <?php } else { ?>
                        <tr>
                            <td class="nodata"><?php echo __('no_data'); ?></td>
                        </tr>
                    <?php } ?>
                    <?php if ($total_corporate_trips > 0) { ?></div><?php } ?>
                </table>
			</form>
            <div class="clr">&nbsp;</div>
            <div class="pagination">
                <?php if($total_corporate_trips > 0): ?>
                    <p><?php echo $pag_data->render(); ?></p>  
                <?php endif; ?> 
            </div>
        </div>
    </div>
</div>
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/js/jquery-ui-1.8.11.custom.min.js"></script>
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-timepicker-addon.js"></script>

<script type="text/javascript" language="javascript">
    $(document).ready(function(){
        $("#start_date").datetimepicker({
            showTimepicker:true,
            showSecond: true,
            timeFormat: 'hh:mm:ss',
            dateFormat: 'yy-mm-dd',
            stepHour: 1,
            stepMinute: 1,
            maxDateTime : new Date("<?php echo date('Y m d,H:i:s'); ?>"),
            stepSecond: 1,
        });
        $("#end_date").datetimepicker( {
            showTimepicker:true,
            showSecond: true,
            timeFormat: 'hh:mm:ss',
            dateFormat: 'yy-mm-dd',
            stepHour: 1,
            stepMinute: 1,
            maxDateTime : new Date("<?php echo date('Y m d').",23:59:59"; ?>"),
            stepSecond: 1,
        });
    });
</script>
