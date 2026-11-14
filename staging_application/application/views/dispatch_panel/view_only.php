<?php defined('SYSPATH') or die('No direct access allowed.'); ?>
<!-- VO-LAYOUT-V5-STATUS-COLORS KUWAIT 29.3117,47.4818 -->
<div id="vo-app">
    <input name="select_company" id="select_company" type="hidden" value="<?php echo isset($company_id) ? htmlspecialchars((string) $company_id) : ''; ?>">
    <input type="hidden" name="select_driver_status" id="select_driver_status" value="">

    <div class="vo-main">
        <div class="vo-map-wrap">
            <div class="vo-vehicle-bar">
                <select name="select_taxi_model" id="select_taxi_model" onchange="driver_list_with_status();">
                    <option value="">All Vehicle</option>
                    <?php foreach ($model_details as $model) { ?>
                        <option value="<?php echo $model['model_id']; ?>"><?php echo ucfirst($model['model_name']); ?></option>
                    <?php } ?>
                </select>
                <select name="select_trip_type" id="select_trip_type" onchange="all_booking_manage_list();">
                    <option selected="selected" value="">All Trips</option>
                    <option value="<?php echo __('book_now'); ?>"><?php echo __('book_now'); ?></option>
                    <option value="<?php echo __('book_later'); ?>"><?php echo __('book_later'); ?></option>
                    <option value="<?php echo __('airport'); ?>"><?php echo __('airport'); ?></option>
                    <option value="<?php echo __('zone'); ?>"><?php echo __('zone'); ?></option>
                    <option value="<?php echo __('book_recurrent'); ?>"><?php echo __('book_recurrent'); ?></option>
                </select>
            </div>
            <div id="map-canvas"></div>
        </div>
        <div class="vo-right">
            <div id="all_drivers"></div>
            <div class="vo-earn">
                <div>
                    <?php $month_name = date("M"); ?>
                    <h4>Earnings(<?php echo ucfirst($month_name); ?>)</h4>
                    <?php
                    $total_amt = isset($total_sum[0]['total_sum']) ? round($total_sum[0]['total_sum'], 3) : 0;
                    $total_pending_amt = isset($total_sum[0]['total_pending']) ? round($total_sum[0]['total_pending'], 3) : 0;
                    ?>
                    <ul><li><b><?php echo CURRENCY . ' ' . $total_amt; ?></b> <span>(<?php echo CURRENCY . $total_pending_amt; ?>)</span></li></ul>
                </div>
                <div>
                    <?php
                    $day_number = date("d");
                    $ends = ['th', 'st', 'nd', 'rd', 'th', 'th', 'th', 'th', 'th', 'th'];
                    if (($day_number % 100) >= 11 && ($day_number % 100) <= 13) {
                        $day_abbreviation = $day_number . 'th';
                    } else {
                        $day_abbreviation = $day_number . $ends[$day_number % 10];
                    }
                    ?>
                    <h4><?php echo $day_abbreviation . ' - ' . date("l"); ?></h4>
                    <?php $total_amt_day = isset($total_sum_day[0]['total_sum']) ? $total_sum_day[0]['total_sum'] : 0; ?>
                    <ul><li><b><?php echo CURRENCY . ' ' . $total_amt_day; ?></b></li></ul>
                </div>
            </div>
        </div>
    </div>

    <div class="vo-bottom">
        <div class="vo-filters">
            <label>
                <span class="heading_icon_one"><input type="checkbox" name="status_color" checked value="0" onchange="all_booking_manage_list()"></span>
                Assign
            </label>
            <label>
                <span class="heading_icon_two"><input type="checkbox" name="status_color" checked value="6, 7, 10" onchange="all_booking_manage_list()"></span>
                Reassign
            </label>
            <label>
                <span class="heading_icon_four"><input type="checkbox" name="status_color" checked value="9" onchange="all_booking_manage_list()"></span>
                Trip Confirmed
            </label>
            <label>
                <span class="heading_icon_five"><input type="checkbox" name="status_color" checked value="3" onchange="all_booking_manage_list()"></span>
                Start To Pickup
            </label>
            <label>
                <span class="heading_icon_six"><input type="checkbox" name="status_color" checked value="2" onchange="all_booking_manage_list()"></span>
                In Progress
            </label>
            <label>
                <span class="heading_icon_sevan"><input type="checkbox" name="status_color" checked value="1" onchange="all_booking_manage_list()"></span>
                Trip Completed
            </label>
            <label>
                <span class="heading_icon_eight"><input type="checkbox" name="status_color" checked value="5" onchange="all_booking_manage_list()"></span>
                Waiting for Payment
            </label>
            <label>
                <input type="hidden" name="status_color_cancel" id="status_color_cancel" value="8">
                <span class="heading_icon_nine"><input type="checkbox" checked name="status_cancel" id="status_cancel" value="C,R" onchange="all_booking_manage_list()"></span>
                Trip Cancelled
            </label>
        </div>
        <div class="vo-table-wrap">
            <table class="vo-trips" id="changetr">
                <thead id="list_thead">
                    <tr>
                        <th style="width:9%">Booking Time</th>
                        <th style="width:9%">Pickup Time</th>
                        <th style="width:7%">Trip ID</th>
                        <th style="width:8%">Passenger</th>
                        <th style="width:9%">Driver</th>
                        <th style="width:6%">Vehicle</th>
                        <th style="width:8%">Passenger Phone</th>
                        <th style="width:11%">Pick up Location</th>
                        <th style="width:11%">Drop Location</th>
                        <th style="width:5%">Time</th>
                        <th style="width:6%">Payment Type</th>
                        <th style="width:6%">Fare(<?php echo defined('CURRENCY') ? CURRENCY : 'KWD'; ?>)</th>
                        <th style="width:6%">Created by</th>
                        <th style="width:6%">Status</th>
                        <th style="width:6%">Booking Type</th>
                        <th style="width:4%">Notes</th>
                    </tr>
                </thead>
                <tbody id="all_booking_manage_list"></tbody>
            </table>
        </div>
    </div>
</div>

<script>
    var locations = {};
    var infowindow = new google.maps.InfoWindow();
    var mainMap;
    /* Hard Kuwait center used by live /taxidispatch/dashboard — not LOCATION_LATI (Los Angeles). */
    var KUWAIT_LAT = 29.3117;
    var KUWAIT_LNG = 47.4818;

    function initmap() {
        mainMap = new google.maps.Map(document.getElementById('map-canvas'), {
            zoom: 9,
            maxZoom: 17,
            minZoom: 1,
            streetViewControl: false,
            mapTypeControl: false,
            fullscreenControl: false,
            center: new google.maps.LatLng(KUWAIT_LAT, KUWAIT_LNG),
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
                var status_icon;
                if (loc.status == "A") {
                    status_icon = "<?php echo BOOTSTRAP_IMGPATH . '/orange.png'; ?>";
                } else if (loc.status == "F" && loc.shift_status == 'OUT') {
                    status_icon = "<?php echo BOOTSTRAP_IMGPATH . '/blue.png'; ?>";
                } else if (loc.status == "B") {
                    status_icon = "<?php echo BOOTSTRAP_IMGPATH . '/red.png'; ?>";
                } else if (loc.status == "F" && loc.shift_status == 'IN') {
                    status_icon = "<?php echo BOOTSTRAP_IMGPATH . '/green.png'; ?>";
                } else {
                    status_icon = "<?php echo BOOTSTRAP_IMGPATH . '/orange.png'; ?>";
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
                if (locations[key].marker) { locations[key].marker.setMap(null); }
                delete locations[key];
            } else if (locations[key]) {
                $.extend(locations[key], loc);
                if (loc.lat !== undefined && loc.lng !== undefined && locations[key].marker) {
                    locations[key].marker.setPosition(new google.maps.LatLng(loc.lat, loc.lng));
                }
            }
        });
    }

    function removeMarkers(locObj) {
        $.each(locObj, function(key, loc) {
            if (locations[key] && locations[key].marker) { locations[key].marker.setMap(null); }
            delete locations[key];
        });
    }

    function driver_list_with_status() {
        var taxi_company = $("#select_company").val();
        var taxi_model = $("#select_taxi_model").val();
        var driver_status = $("#select_driver_status").val();
        $.ajax({
            type: "GET",
            url: "<?php echo URL_BASE; ?>dispatch-panel/driver_list_with_status",
            data: "driver_status=" + driver_status + "&taxi_company=" + taxi_company + "&taxi_model=" + taxi_model,
            async: false,
            success: function(data) {
                if (data != "") {
                    var response = data.split("#");
                    $('#all_drivers').html(response[1]);
                    $('#driver_dets_count').html(response[2]);
                    var locations_val = $.parseJSON(response[0]);
                    removeMarkers(locations);
                    setMarkers(locations_val);
                }
            }
        });
    }

    function all_booking_manage_list() {
        var taxi_company = $("#select_company").val();
        var favorite = [];
        var bk_type = $('#select_trip_type').val();
        $.each($("input[name='status_color']:checked"), function() { favorite.push($(this).val()); });
        var status_color_cancel = $('#status_color_cancel').val();
        var status_cancel = [];
        $.each($("input[name='status_cancel']:checked"), function() {
            status_cancel.push($(this).val());
            favorite.push(status_color_cancel);
            favorite.push('4');
        });
        $.ajax({
            type: "GET",
            url: "<?php echo URL_BASE; ?>dispatch-panel/all_booking_list_manage",
            data: "travel_status=" + favorite.join(", ") + "&status_cancel=" + status_cancel + "&taxi_company=" + taxi_company + "&bk_t=" + bk_type,
            cache: false,
            dataType: 'html',
            success: function(response) {
                driver_list_with_status();
                var html = String(response);
                var parts = html.split('|||VO|||');
                $('#all_booking_manage_list').html(parts.length > 1 ? parts[1] : '');
            }
        });
    }

    $(document).ready(function() {
        initmap();
        all_booking_manage_list();
        setTimeout(function() { google.maps.event.trigger(mainMap, 'resize'); mainMap.setCenter(new google.maps.LatLng(KUWAIT_LAT, KUWAIT_LNG)); }, 400);
    });
    setInterval(function() { all_booking_manage_list(); }, 15000);
</script>
