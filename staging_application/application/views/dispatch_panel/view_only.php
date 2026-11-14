<?php defined('SYSPATH') or die('No direct access allowed.'); ?>
<script type="text/javascript" src="<?php echo URL_BASE; ?>public/bootstrap-3.2.0/vendor/bootstrap/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE; ?>public/bootstrap-3.2.0/vendor/bootstrap/js/bootstrap.min.js"></script>

<div class="container taxi_dispatcher view_only_dispatch">
    <div class="row">
        <div class="col-md-4 col-md-4-inner">
            <ul class="nav nav-tabs" role="tablist">
                <input name="select_company" id="select_company" type="hidden" value="<?php echo $_SESSION['company_id']; ?>">
                <li>
                    <select style="cursor:pointer;" name="select_taxi_model" id="select_taxi_model" onchange="driver_list_with_status();">
                        <option value="">All Vehicle</option>
                        <?php foreach ($model_details as $model) { ?>
                            <option value="<?php echo $model['model_id']; ?>"><?php echo ucfirst($model['model_name']); ?></option>
                        <?php } ?>
                    </select>
                </li>
                <li>
                    <select style="cursor:pointer;" name="select_trip_type" id="select_trip_type" onchange="all_booking_manage_list();">
                        <option selected="selected" value="">All Trips</option>
                        <option value="<?php echo __('book_now'); ?>"><?php echo __('book_now'); ?></option>
                        <option value="<?php echo __('book_later'); ?>"><?php echo __('book_later'); ?></option>
                        <option value="<?php echo __('airport'); ?>"><?php echo __('airport'); ?></option>
                        <option value="<?php echo __('zone'); ?>"><?php echo __('zone'); ?></option>
                        <option value="<?php echo __('book_recurrent'); ?>"><?php echo __('book_recurrent'); ?></option>
                    </select>
                </li>
            </ul>
        </div>

        <div id="map-section" class="col-md-8 col-md-8_scroll map_manage_booking driver_status_height_outer_top">
            <div class="widget margin-bottom">
                <input type="hidden" name="select_driver_status" id="select_driver_status" value="">
                <div id="on_going_trip_map">
                    <div class="ongoing">
                        <div id="on_going_trip"></div>
                        <div id="on_going_place"></div>
                    </div>
                    <div id="map-canvas" style="width:100%;height:500px;"></div>
                </div>
            </div>
        </div>

        <div id="taxi_scroll_one" class="driver_status driver_status_height">
            <div class="tab-content">
                <div class="tab-pane active" id="all_drivers"></div>
            </div>
        </div>

        <div class="total-earnings-outer">
            <div class="tab-content">
                <div class="tab-pane" id="total-earnings" style="display:block;visibility:visible;">
                    <?php $month_name = date("M"); ?>
                    <h4 class="earning-title">Earnings(<?php echo ucfirst($month_name); ?>)</h4>
                    <ul>
                        <?php
                        $total_amt = isset($total_sum[0]['total_sum']) ? round($total_sum[0]['total_sum'], 3) : 0;
                        $total_pending_amt = isset($total_sum[0]['total_pending']) ? round($total_sum[0]['total_pending'], 3) : 0;
                        ?>
                        <li style="font-size:18;font-weight: 500"><b><span class="currency_amt"><?php echo CURRENCY . ' ' . $total_amt; ?></span><span class='pending_payment_class'>(<?php echo CURRENCY . $total_pending_amt; ?>)</span></b></li>
                    </ul>
                </div>
            </div>
            <div class="tab-content" style="border-left:2px solid green;">
                <div class="tab-pane" id="total-earnings-day" style="display:block;visibility:visible;">
                    <?php
                    $day_number = date("d");
                    $ends = ['th', 'st', 'nd', 'rd', 'th', 'th', 'th', 'th', 'th', 'th'];
                    if (($day_number % 100) >= 11 && ($day_number % 100) <= 13) {
                        $day_abbreviation = $day_number . 'th';
                    } else {
                        $day_abbreviation = $day_number . $ends[$day_number % 10];
                    }
                    $day_name = $day_abbreviation . ' - ' . date("l");
                    ?>
                    <h4 class="earning-title"><?php echo $day_name; ?></h4>
                    <ul>
                        <?php
                        $total_amt_day = isset($total_sum_day[0]['total_sum']) ? $total_sum_day[0]['total_sum'] : 0;
                        ?>
                        <li style="font-size:18;font-weight: 500"><b><span><?php echo CURRENCY . ' ' . $total_amt_day; ?></span></b></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="manage_booking_bottom_outer" id="booking_list">
            <div class="manage_booking_bottom manage_booking_bottom_scroll">
                <button id="open_list" type="button" class="btn btn-default btn-sm toggle_btn">
                    <span class="glyphicon glyphicon-chevron-up"></span>
                </button>
                <div class="taxi_scroll_one_top">
                    <table cellspacing="0" cellpadding="0" width="100%" align="center" class="dispatch_icons">
                        <tr>
                            <td>
                                <div class="heading_icon_one"><input type="checkbox" name="status_color" checked value="0" onchange="all_booking_manage_list()"></div>
                                <label>Assign</label>
                            </td>
                            <td>
                                <div class="heading_icon_two"><input type="checkbox" name="status_color" checked value="6, 7, 10" onchange="all_booking_manage_list()"></div>
                                <label>Reassign</label>
                            </td>
                            <td>
                                <div class="heading_icon_four"><input type="checkbox" name="status_color" checked value="9" onchange="all_booking_manage_list()"></div>
                                <label>Trip Confirmed</label>
                            </td>
                            <td>
                                <div class="heading_icon_five"><input type="checkbox" name="status_color" checked value="3" onchange="all_booking_manage_list()"></div>
                                <label>Start To Pickup</label>
                            </td>
                            <td>
                                <div class="heading_icon_six"><input type="checkbox" name="status_color" checked value="2" onchange="all_booking_manage_list()"></div>
                                <label>In Progress</label>
                            </td>
                            <td>
                                <div class="heading_icon_sevan"><input type="checkbox" name="status_color" checked value="1" onchange="all_booking_manage_list()"></div>
                                <label>Trip Completed</label>
                            </td>
                            <td>
                                <div class="heading_icon_eight"><input type="checkbox" name="status_color" checked value="5" onchange="all_booking_manage_list()"></div>
                                <label>Waiting for Payment</label>
                            </td>
                            <td>
                                <input type="hidden" name="status_color_cancel" id="status_color_cancel" value="8">
                                <div class="heading_icon_nine"><input type="checkbox" checked name="status_cancel" id="status_cancel" value="C,R" onchange="all_booking_manage_list()"></div>
                                <label>Trip Cancelled</label>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="manage_booking_outer col-md-12 map_manage_booking" id="map_manage_booking">
                    <div class="form-control_bott">
                        <div id="change_result">
                            <div class="widget">
                                <div class="overflow-block overflow-block_outer">
                                    <table cellspacing="0" cellpadding="0" class="scroll" width="100%" align="center" id="changetr">
                                        <thead id="list_thead">
                                            <tr>
                                                <td align="center"><?php echo __('booking_time'); ?></td>
                                                <td align="center"><?php echo __('pickup_time'); ?></td>
                                                <td align="center"><?php echo __('trip_id'); ?></td>
                                                <td align="center"><?php echo __('passenger'); ?></td>
                                                <td align="center"><?php echo __('driver'); ?></td>
                                                <td align="center"><?php echo __('vehicle'); ?></td>
                                                <td align="center"><?php echo __('passenger_phone'); ?></td>
                                                <td align="center"><?php echo __('Current_Location'); ?></td>
                                                <td align="center"><?php echo __('Drop_Location'); ?></td>
                                                <td align="center"><?php echo __('time'); ?></td>
                                                <td align="center"><?php echo __('payment_type'); ?></td>
                                                <td align="center"><?php echo __('fare') . '(' . $company_currency . ')'; ?></td>
                                                <td align="center"><?php echo __('created_by'); ?></td>
                                                <td align="center"><?php echo __('status'); ?></td>
                                                <td align="center"><?php echo __('book_type'); ?></td>
                                                <td align="center"><?php echo __('notes'); ?></td>
                                                <td align="center" colspan="2"><?php echo __('action_label'); ?></td>
                                            </tr>
                                        </thead>
                                        <tbody class="all_booking_manage_scroll" id="all_booking_manage_list">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var locations = {};
    var infowindow = new google.maps.InfoWindow();
    var mainMap;
    var locs = {};

    initmap();

    function initmap() {
        mainMap = new google.maps.Map(document.getElementById('map-canvas'), {
            zoom: 9,
            maxZoom: 17,
            minZoom: 1,
            streetViewControl: false,
            center: new google.maps.LatLng(<?php echo $current_latitude; ?>, <?php echo $current_longitude; ?>),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: [
                { elementType: 'geometry', stylers: [{ color: '#ebe3cd' }] },
                { elementType: 'labels.text.fill', stylers: [{ color: '#523735' }] },
                { elementType: 'labels.text.stroke', stylers: [{ color: '#f5f1e6' }] },
                { featureType: 'administrative', elementType: 'geometry.stroke', stylers: [{ color: '#c9b2a6' }] },
                { featureType: 'landscape.natural', elementType: 'geometry', stylers: [{ color: '#dfd2ae' }] },
                { featureType: 'poi', elementType: 'geometry', stylers: [{ color: '#dfd2ae' }] },
                { featureType: 'road', elementType: 'geometry', stylers: [{ color: '#f5f1e6' }] },
                { featureType: 'road.highway', elementType: 'geometry', stylers: [{ color: '#f8c967' }] },
                { featureType: 'water', elementType: 'geometry.fill', stylers: [{ color: '#b9d3c2' }] }
            ]
        });
    }

    function setMarkers(locObj) {
        $.each(locObj, function(key, loc) {
            if (!locations[key] && loc.lat !== undefined && loc.lng !== undefined) {
                if (loc.status == "A") {
                    var status_icon = "<?php echo BOOTSTRAP_IMGPATH . '/orange.png'; ?>";
                } else if (loc.status == "F" && loc.shift_status == 'OUT') {
                    var status_icon = "<?php echo BOOTSTRAP_IMGPATH . '/blue.png'; ?>";
                } else if (loc.status == "B") {
                    var status_icon = "<?php echo BOOTSTRAP_IMGPATH . '/red.png'; ?>";
                } else if (loc.status == "F" && loc.shift_status == 'IN') {
                    var status_icon = "<?php echo BOOTSTRAP_IMGPATH . '/green.png'; ?>";
                } else {
                    var status_icon = "<?php echo BOOTSTRAP_IMGPATH . '/orange.png'; ?>";
                }
                loc.marker = new google.maps.Marker({
                    position: new google.maps.LatLng(loc.lat, loc.lng),
                    map: mainMap,
                    icon: status_icon
                });
                google.maps.event.addListener(loc.marker, 'mouseover', (function(key) {
                    return function() {
                        infowindow.setContent(locations[key].info);
                        infowindow.open(mainMap, locations[key].marker);
                    }
                })(key));
                locations[key] = loc;
            } else if (locations[key] && loc.remove) {
                if (locations[key].marker) {
                    locations[key].marker.setMap(null);
                }
                delete locations[key];
            } else if (locations[key]) {
                $.extend(locations[key], loc);
                if (loc.lat !== undefined && loc.lng !== undefined && locations[key].marker) {
                    locations[key].marker.setPosition(new google.maps.LatLng(loc.lat, loc.lng));
                }
                if (loc.status !== undefined && locations[key].marker) {
                    if (loc.status == "A") {
                        var status_icon = "<?php echo BOOTSTRAP_IMGPATH . '/red.png'; ?>";
                    } else if (loc.status == "F" && loc.shift_status == 'OUT') {
                        var status_icon = "<?php echo BOOTSTRAP_IMGPATH . '/blue.png'; ?>";
                    } else if (loc.status == "B") {
                        var status_icon = "<?php echo BOOTSTRAP_IMGPATH . '/green.png'; ?>";
                    } else if (loc.status == "F" && loc.shift_status == 'IN') {
                        var status_icon = "<?php echo BOOTSTRAP_IMGPATH . '/orange.png'; ?>";
                    } else {
                        var status_icon = "<?php echo BOOTSTRAP_IMGPATH . '/orange.png'; ?>";
                    }
                    locations[key].marker.setIcon(status_icon);
                }
            }
        });
    }

    function removeMarkers(locObj) {
        $.each(locObj, function(key, loc) {
            if (locations[key] && locations[key].marker) {
                locations[key].marker.setMap(null);
            }
            delete locations[key];
        });
    }

    function driver_list_with_status() {
        var taxi_company = $("#select_company").val();
        var taxi_model = $("#select_taxi_model").val();
        var driver_status = $("#select_driver_status").val();
        var Path = "<?php echo URL_BASE; ?>";
        var dataS = "driver_status=" + driver_status + "&taxi_company=" + taxi_company + "&taxi_model=" + taxi_model;
        var url_path = Path + "dispatch-panel/driver_list_with_status";
        $.ajax({
            type: "GET",
            url: url_path,
            data: dataS,
            async: false,
            success: function(data) {
                if (data != "") {
                    var response = data.split("#");
                    $('#all_drivers').html(response[1]);
                    $('#driver_dets_count').html(response[2]);
                    var locations_val = $.parseJSON(response[0]);
                    removeMarkers(locations);
                    setMarkers(locations_val);
                    if (locations_val != "") {
                        $('#on_going_trip').html('');
                    }
                }
            }
        });
    }

    function syncTableHeadWidths() {
        var $table = $('table.scroll'),
            $bodyCells = $table.find('tbody tr:first').children(),
            colWidth;
        colWidth = $bodyCells.map(function() {
            return $(this).width();
        }).get();
        $table.find('thead tr').children().each(function(i, v) {
            $(v).width(colWidth[i]);
        });
    }

    function all_booking_manage_list() {
        var taxi_company = $("#select_company").val();
        var favorite = [];
        var bk_type = $('#select_trip_type').val();
        $.each($("input[name='status_color']:checked"), function() {
            favorite.push($(this).val());
        });
        var status_color_cancel = $('#status_color_cancel').val();
        var status_cancel = [];
        $.each($("input[name='status_cancel']:checked"), function() {
            status_cancel.push($(this).val());
            favorite.push(status_color_cancel);
            favorite.push('4');
        });
        var status_color = favorite.join(", ");
        var Path = "<?php echo URL_BASE; ?>";
        var dataS = "travel_status=" + status_color + "&status_cancel=" + status_cancel + "&taxi_company=" + taxi_company + "&bk_t=" + bk_type;
        var url_path = Path + "dispatch-panel/all_booking_list_manage";
        $.ajax({
            type: "GET",
            url: url_path,
            data: dataS,
            cache: false,
            dataType: 'html',
            success: function(response) {
                driver_list_with_status();
                var data = response.split("@");
                if (data[0] == 0) {
                    $("#list_thead").hide();
                } else {
                    $("#list_thead").show();
                }
                $('#all_booking_manage_list').html(data[1]);
                syncTableHeadWidths();
            }
        });
    }

    $(document).ready(function() {
        all_booking_manage_list();
        $('#open_list').click(function() {
            if ($("#booking_list").hasClass('listing_long') === false) {
                $("#booking_list").addClass('listing_long');
                $("#map_manage_booking").addClass('listing_long_sub');
                $("#all_booking_manage_list").addClass('listing_long_sub2');
                $("#open_list span").removeClass('glyphicon-chevron-up');
                $("#open_list span").addClass('glyphicon-chevron-down');
                $("#taxi_scroll_one").hide();
            } else {
                $("#booking_list").removeClass('listing_long');
                $("#map_manage_booking").removeClass('listing_long_sub');
                $("#all_booking_manage_list").removeClass('listing_long_sub2');
                $("#open_list span").removeClass('glyphicon-chevron-down');
                $("#open_list span").addClass('glyphicon-chevron-up');
                $("#taxi_scroll_one").delay(3000).show();
            }
        });
    });

    setInterval(function() {
        all_booking_manage_list();
    }, 15000);

    window.timer_resize = setInterval(function() {
        google.maps.event.trigger(mainMap, 'resize');
        clearInterval(window.timer_resize);
    }, 2000);
</script>
