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
<style type="text/css">
.busy-slot-date-wrap input[type="text"]#busy_slot_date {
    width: 220px !important;
    height: 32px !important;
    display: inline-block !important;
    vertical-align: middle;
    box-sizing: border-box;
    padding: 4px 8px;
}
.busy-slot-date-wrap #busy_slot_clear {
    margin-left: 10px;
    vertical-align: middle;
}
.busy-slot-times {
    border-collapse: collapse;
    border: 0;
}
.busy-slot-times td {
    border: none !important;
    background: transparent !important;
    padding: 0 16px 0 0 !important;
    vertical-align: top;
}
.busy-slot-times .busy-slot-colon {
    padding: 24px 12px 0 0 !important;
    font-size: 18px;
    font-weight: bold;
    color: #555;
    line-height: 32px;
}
.busy-slot-sublabel {
    display: block;
    margin: 0 0 6px 0;
    color: #666;
    font-size: 12px;
    font-weight: normal;
}
.busy-slot-times select,
.busy-slot-times .new_input_field select {
    display: inline-block !important;
    float: none !important;
    width: 170px !important;
    max-width: 170px !important;
    height: 32px !important;
    padding: 4px 8px !important;
    box-sizing: border-box;
    margin: 0 !important;
}
.busy-slot-hint {
    margin-top: 10px;
    color: #777;
    font-size: 12px;
    line-height: 1.45;
    max-width: 380px;
}
</style>
<tr>
    <td valign="middle" width="20%"><label>Select date</label><span class="star">*</span></td>
    <td>
        <div class="busy-slot-date-wrap">
            <input type="hidden" id="busy_slot_from" name="busy_slot_from" value="<?php echo htmlspecialchars($busy_slot_from_val, ENT_QUOTES); ?>" />
            <input type="hidden" id="busy_slot_to" name="busy_slot_to" value="<?php echo htmlspecialchars($busy_slot_to_val, ENT_QUOTES); ?>" />
            <input type="text" maxlength="30" title="Select date" id="busy_slot_date" value="<?php echo htmlspecialchars($busy_slot_date, ENT_QUOTES); ?>" placeholder="YYYY-MM-DD" readonly="readonly" />
            <input type="button" id="busy_slot_clear" value="Clear" class="button" title="Clear date and time" />
        </div>
    </td>
</tr>
<tr>
    <td valign="top" width="20%"><label>From</label><span class="star">*</span></td>
    <td>
        <table class="busy-slot-times" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td>
                    <span class="busy-slot-sublabel">Hour</span>
                    <select id="busy_slot_from_hour" title="Hour">
                        <option value="">Select</option>
                        <?php foreach ($busy_hour_labels as $hour_val => $hour_label) { ?>
                        <option value="<?php echo $hour_val; ?>" <?php if ((string)$busy_slot_from_hour !== '' && (string)$busy_slot_from_hour === (string)$hour_val) { echo 'selected="selected"'; } ?>><?php echo $hour_label; ?></option>
                        <?php } ?>
                    </select>
                </td>
                <td class="busy-slot-colon">:</td>
                <td>
                    <span class="busy-slot-sublabel">Minutes</span>
                    <select id="busy_slot_from_min" title="Minutes">
                        <option value="">Select</option>
                        <?php for ($m = 0; $m < 60; $m++) {
                            $min_val = str_pad((string)$m, 2, '0', STR_PAD_LEFT);
                        ?>
                        <option value="<?php echo $min_val; ?>" <?php if ($busy_slot_from_min !== '' && $busy_slot_from_min === $min_val) { echo 'selected="selected"'; } ?>><?php echo $min_val; ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td valign="top" width="20%"><label>To</label><span class="star">*</span></td>
    <td>
        <table class="busy-slot-times" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td>
                    <span class="busy-slot-sublabel">Hour</span>
                    <select id="busy_slot_to_hour" title="Hour">
                        <option value="">Select</option>
                        <?php foreach ($busy_hour_labels as $hour_val => $hour_label) { ?>
                        <option value="<?php echo $hour_val; ?>" <?php if ((string)$busy_slot_to_hour !== '' && (string)$busy_slot_to_hour === (string)$hour_val) { echo 'selected="selected"'; } ?>><?php echo $hour_label; ?></option>
                        <?php } ?>
                    </select>
                </td>
                <td class="busy-slot-colon">:</td>
                <td>
                    <span class="busy-slot-sublabel">Minutes</span>
                    <select id="busy_slot_to_min" title="Minutes">
                        <option value="">Select</option>
                        <?php for ($m = 0; $m < 60; $m++) {
                            $min_val = str_pad((string)$m, 2, '0', STR_PAD_LEFT);
                        ?>
                        <option value="<?php echo $min_val; ?>" <?php if ($busy_slot_to_min !== '' && $busy_slot_to_min === $min_val) { echo 'selected="selected"'; } ?>><?php echo $min_val; ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
        </table>
        <div class="busy-slot-hint">To time must be after From time. Example: 1:00 AM to 2:20 AM.</div>
        <span id="busy_slot_error" class="error" style="<?php echo (isset($errors['busy_slot_to']) || isset($errors['busy_slot_from'])) ? '' : 'display:none;'; ?>"><?php
            if (isset($errors['busy_slot_to'])) {
                echo htmlspecialchars($errors['busy_slot_to']);
            } else if (isset($errors['busy_slot_from'])) {
                echo htmlspecialchars($errors['busy_slot_from']);
            }
        ?></span>
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
		if (isNaN(n) || n < 0) { return ''; }
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
		var fromH = pad2(t.fromH);
		var fromM = pad2(t.fromM);
		var toH = pad2(t.toH);
		var toM = pad2(t.toM);
		if (d !== '' && fromH !== '' && fromM !== '') {
			$('#busy_slot_from').val(d + ' ' + fromH + ':' + fromM + ':00');
		} else {
			$('#busy_slot_from').val('');
		}
		if (d !== '' && toH !== '' && toM !== '') {
			$('#busy_slot_to').val(d + ' ' + toH + ':' + toM + ':00');
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
		if ($('#busy_slot_to_hour option:selected').is(':disabled')) {
			$('#busy_slot_to_hour').val('');
			t.toH = '';
			toTotal = null;
		}
		if ($('#busy_slot_to_min option:selected').is(':disabled')) {
			$('#busy_slot_to_min').val('');
			t.toM = '';
			toTotal = null;
		}
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
