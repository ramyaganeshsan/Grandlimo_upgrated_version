<?php
defined('SYSPATH') OR die("No direct access allowed.");

$busy_slot_date = isset($busy_slot_date) ? $busy_slot_date : '';
$busy_slot_from_hour = isset($busy_slot_from_hour) ? $busy_slot_from_hour : '';
$busy_slot_to_hour = isset($busy_slot_to_hour) ? $busy_slot_to_hour : '';
$busy_slot_from_min = isset($busy_slot_from_min) ? $busy_slot_from_min : '';
$busy_slot_to_min = isset($busy_slot_to_min) ? $busy_slot_to_min : '';
$busy_slot_from_val = isset($busy_slot_from_val) ? $busy_slot_from_val : '';
$busy_slot_to_val = isset($busy_slot_to_val) ? $busy_slot_to_val : '';
$submit_name = isset($submit_name) ? $submit_name : 'submit_add_busy_slot';

if ($busy_slot_from_hour !== '' && $busy_slot_from_min === '') {
    $busy_slot_from_min = '00';
}
if ($busy_slot_to_hour !== '' && $busy_slot_to_min === '') {
    $busy_slot_to_min = '00';
}
$busy_slot_from_min = ($busy_slot_from_min === '') ? '' : str_pad((string)((int)$busy_slot_from_min), 2, '0', STR_PAD_LEFT);
$busy_slot_to_min = ($busy_slot_to_min === '') ? '' : str_pad((string)((int)$busy_slot_to_min), 2, '0', STR_PAD_LEFT);

$busy_hour_labels = [
    0 => '12 AM', 1 => '1 AM', 2 => '2 AM', 3 => '3 AM', 4 => '4 AM', 5 => '5 AM',
    6 => '6 AM', 7 => '7 AM', 8 => '8 AM', 9 => '9 AM', 10 => '10 AM', 11 => '11 AM',
    12 => '12 PM', 13 => '1 PM', 14 => '2 PM', 15 => '3 PM', 16 => '4 PM', 17 => '5 PM',
    18 => '6 PM', 19 => '7 PM', 20 => '8 PM', 21 => '9 PM', 22 => '10 PM', 23 => '11 PM'
];
?>
<tr>
    <td valign="top" width="20%"><label>Select date</label><span class="star">*</span></td>
    <td>
        <div class="new_input_field" style="width:520px;">
            <input type="hidden" id="busy_slot_from" name="busy_slot_from" value="<?php echo htmlspecialchars($busy_slot_from_val, ENT_QUOTES); ?>" />
            <input type="hidden" id="busy_slot_to" name="busy_slot_to" value="<?php echo htmlspecialchars($busy_slot_to_val, ENT_QUOTES); ?>" />
            <input type="text" maxlength="30" title="Car Busy Slot date" id="busy_slot_date" value="<?php echo htmlspecialchars($busy_slot_date, ENT_QUOTES); ?>" placeholder="YYYY-MM-DD" readonly="readonly" style="width:220px;" />
            <input type="button" id="busy_slot_clear" value="Clear" class="button" title="Clear date and time" style="margin-left:8px;padding:4px 12px;cursor:pointer;" />
        </div>
    </td>
</tr>
<tr>
    <td valign="top" width="20%"><label>From</label><span class="star">*</span></td>
    <td>
        <div class="new_input_field">
            <select id="busy_slot_from_hour" title="Busy slot from hour" style="width:140px;">
                <option value="">Hour</option>
                <?php foreach ($busy_hour_labels as $hour_val => $hour_label) { ?>
                <option value="<?php echo $hour_val; ?>" <?php if ((string)$busy_slot_from_hour !== '' && (string)$busy_slot_from_hour === (string)$hour_val) { echo 'selected="selected"'; } ?>><?php echo $hour_label; ?></option>
                <?php } ?>
            </select>
            <select id="busy_slot_from_min" title="Busy slot from minutes" style="width:80px;margin-left:8px;">
                <option value="">Min</option>
                <?php for ($m = 0; $m < 60; $m++) {
                    $min_val = str_pad((string)$m, 2, '0', STR_PAD_LEFT);
                ?>
                <option value="<?php echo $min_val; ?>" <?php if ($busy_slot_from_min !== '' && $busy_slot_from_min === $min_val) { echo 'selected="selected"'; } ?>><?php echo $min_val; ?></option>
                <?php } ?>
            </select>
        </div>
    </td>
</tr>
<tr>
    <td valign="top" width="20%"><label>To</label><span class="star">*</span></td>
    <td>
        <div class="new_input_field">
            <select id="busy_slot_to_hour" title="Busy slot to hour" style="width:140px;">
                <option value="">Hour</option>
                <?php foreach ($busy_hour_labels as $hour_val => $hour_label) { ?>
                <option value="<?php echo $hour_val; ?>" <?php if ((string)$busy_slot_to_hour !== '' && (string)$busy_slot_to_hour === (string)$hour_val) { echo 'selected="selected"'; } ?>><?php echo $hour_label; ?></option>
                <?php } ?>
            </select>
            <select id="busy_slot_to_min" title="Busy slot to minutes" style="width:80px;margin-left:8px;">
                <option value="">Min</option>
                <?php for ($m = 0; $m < 60; $m++) {
                    $min_val = str_pad((string)$m, 2, '0', STR_PAD_LEFT);
                ?>
                <option value="<?php echo $min_val; ?>" <?php if ($busy_slot_to_min !== '' && $busy_slot_to_min === $min_val) { echo 'selected="selected"'; } ?>><?php echo $min_val; ?></option>
                <?php } ?>
            </select>
            <div style="margin-top:6px;color:#666;font-size:12px;">Pick exact start and end times. Example: 1:00 AM to 2:20 AM, or 3:00 PM to 4:50 PM. To must be after From.</div>
            <span id="busy_slot_error" class="error" style="<?php echo (isset($errors['busy_slot_to']) || isset($errors['busy_slot_from'])) ? '' : 'display:none;'; ?>"><?php
                if (isset($errors['busy_slot_to'])) {
                    echo htmlspecialchars($errors['busy_slot_to']);
                } else if (isset($errors['busy_slot_from'])) {
                    echo htmlspecialchars($errors['busy_slot_from']);
                }
            ?></span>
        </div>
    </td>
</tr>
<tr>
    <td></td>
    <td>
        <div class="button dredB"> <input type="reset" name="reset_busy_slot" title="<?php echo __('button_reset'); ?>" value="<?php echo __('button_reset'); ?>"></div>
        <div class="button greenB">  <input type="submit" name="<?php echo htmlspecialchars($submit_name); ?>" title="<?php echo __('submit'); ?>" value="<?php echo __('submit'); ?>"></div>
    </td>
</tr>
<script type="text/javascript">
$(document).ready(function() {
	function pad2(n) {
		n = parseInt(n, 10);
		return (n < 10) ? ('0' + n) : String(n);
	}
	function busySlotParts() {
		return {
			fromH: $('#busy_slot_from_hour').val(),
			fromM: $('#busy_slot_from_min').val(),
			toH: $('#busy_slot_to_hour').val(),
			toM: $('#busy_slot_to_min').val()
		};
	}
	function busySlotTotalMin(hour, min) {
		if (hour === '' || min === '') { return null; }
		return (parseInt(hour, 10) * 60) + parseInt(min, 10);
	}
	function syncBusySlotDatetimes() {
		var d = $.trim($('#busy_slot_date').val());
		var t = busySlotParts();
		if (d !== '' && t.fromH !== '' && t.fromM !== '') {
			$('#busy_slot_from').val(d + ' ' + pad2(t.fromH) + ':' + pad2(t.fromM) + ':00');
		} else {
			$('#busy_slot_from').val('');
		}
		if (d !== '' && t.toH !== '' && t.toM !== '') {
			$('#busy_slot_to').val(d + ' ' + pad2(t.toH) + ':' + pad2(t.toM) + ':00');
		} else {
			$('#busy_slot_to').val('');
		}
	}
	function showBusySlotError(msg) {
		var $err = $('#busy_slot_error');
		if (!$err.length) { return; }
		if (msg) {
			$err.text(msg).show();
		} else {
			$err.text('').hide();
		}
	}
	function filterBusySlotToTimes() {
		var t = busySlotParts();
		var fromTotal = busySlotTotalMin(t.fromH, t.fromM);
		var toTotal = busySlotTotalMin(t.toH, t.toM);
		$('#busy_slot_to_hour option').each(function () {
			var v = $(this).val();
			if (v === '' || t.fromH === '') {
				$(this).removeAttr('disabled');
				return;
			}
			if (parseInt(v, 10) < parseInt(t.fromH, 10)) {
				$(this).attr('disabled', 'disabled');
			} else {
				$(this).removeAttr('disabled');
			}
		});
		$('#busy_slot_to_min option').each(function () {
			var v = $(this).val();
			if (v === '' || t.fromH === '' || t.fromM === '' || t.toH === '' || parseInt(t.toH, 10) !== parseInt(t.fromH, 10)) {
				$(this).removeAttr('disabled');
				return;
			}
			if (parseInt(v, 10) <= parseInt(t.fromM, 10)) {
				$(this).attr('disabled', 'disabled');
			} else {
				$(this).removeAttr('disabled');
			}
		});
		if (fromTotal !== null && toTotal !== null && toTotal <= fromTotal) {
			showBusySlotError('To time must be after From time');
		} else {
			showBusySlotError('');
		}
	}
	$('#busy_slot_date').datetimepicker({
		showTimepicker: false,
		dateFormat: 'yy-mm-dd',
		onSelect: function () {
			filterBusySlotToTimes();
			syncBusySlotDatetimes();
		}
	});
	function clearBusySlot() {
		$('#busy_slot_date').val('');
		try { $('#busy_slot_date').datepicker('setDate', null); } catch (e) {}
		$('#busy_slot_from_hour').val('');
		$('#busy_slot_from_min').val('');
		$('#busy_slot_to_hour').val('');
		$('#busy_slot_to_min').val('');
		$('#busy_slot_from').val('');
		$('#busy_slot_to').val('');
		showBusySlotError('');
		syncBusySlotDatetimes();
	}
	$('#busy_slot_clear').click(function (e) {
		e.preventDefault();
		clearBusySlot();
	});
	$('#busy_slot_from_hour, #busy_slot_from_min, #busy_slot_to_hour, #busy_slot_to_min, #busy_slot_date').change(function () {
		filterBusySlotToTimes();
		syncBusySlotDatetimes();
	});
	$('form.form').submit(function () {
		filterBusySlotToTimes();
		syncBusySlotDatetimes();
		var d = $.trim($('#busy_slot_date').val());
		var t = busySlotParts();
		var fromTotal = busySlotTotalMin(t.fromH, t.fromM);
		var toTotal = busySlotTotalMin(t.toH, t.toM);
		if (d === '' || t.fromH === '' || t.fromM === '' || t.toH === '' || t.toM === '') {
			showBusySlotError('Select date and exact From / To times (hour and minutes)');
			alert('Select date and exact From / To times (hour and minutes)');
			return false;
		}
		if (toTotal <= fromTotal) {
			showBusySlotError('To time must be after From time');
			alert('To time must be after From time');
			return false;
		}
		return true;
	});
	filterBusySlotToTimes();
	syncBusySlotDatetimes();
});
</script>
