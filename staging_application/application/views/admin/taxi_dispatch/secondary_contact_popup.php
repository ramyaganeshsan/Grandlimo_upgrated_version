<?php defined('SYSPATH') or die('No direct access allowed.'); ?>
<style>
.passenger-phone-icon,
.sec-phone-icon {
    margin-right: 5px;
    cursor: pointer;
    vertical-align: middle;
    display: inline-block;
}
.passenger-phone-icon svg,
.sec-phone-icon svg {
    display: block;
}
.sec-phone-text {
    display: block !important;
    font-size: 11px;
    color: #555;
    line-height: 14px;
    margin-top: 3px;
    white-space: normal;
}
</style>
<div id="secContactOverlay" style="display:none;width:100%;background-color:rgba(0,0,0,0.6);height:100%;z-index:999999;position:fixed;left:0;top:0;justify-content:center;align-items:center;">
    <div style="min-width:300px;background-color:white;padding:16px 16px;border-radius:8px;">
        <div>
            <h2 id="secContactTitle" style="margin:0px;font-size:18px;letter-spacing:1px;font-weight:bold;">Add Secondary Number</h2>
        </div>
        <div style="display:flex;flex-direction:column;padding:16px 0px;">
            <label>Secondary name <span style="color:red">*</span></label>
            <div style="display:flex;align-items:center;gap:8px;">
                <span style="display:inline-block;vertical-align:middle;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="red"><path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8V22h19.2v-2.8c0-3.2-6.4-4.8-9.6-4.8z"/></svg>
                </span>
                <input id="sec_name" maxlength="80" placeholder="Enter secondary name" style="flex:1;padding:8px 12px" />
            </div>
            <label style="margin-top:12px;">Phone Number <span style="color:red">*</span></label>
            <div style="display:flex;align-items:center;gap:8px;">
                <span id="sec_phone_icon" style="display:inline-block;vertical-align:middle;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 24 24" fill="red"><path d="M17 1.01L7 1c-1.1 0-2 .9-2 2v18c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V3c0-1.1-.9-1.99-2-1.99zM17 19H7V5h10v14z"/></svg>
                </span>
                <input id="sec_phone" maxlength="20" placeholder="Enter secondary phone number" style="flex:1;padding:8px 12px" />
            </div>
            <input type="hidden" id="sec_trip_id" value="" />
            <input type="hidden" id="sec_mode" value="edit" />
            <label id="secContactErr" style="color:tomato;letter-spacing:1px;padding-top:8px;font-size:12px;"></label>
        </div>
        <div id="secContactEditActions" style="display:flex;gap:4px;justify-content:space-between;">
            <button type="button" id="secBtnSave" onclick="saveSecondaryContact()" style="width:48%;background-color:black;border-radius:6px;border:none;color:white;outline:none;padding:10px 0px;">Save</button>
            <button type="button" id="secBtnCancel" onclick="closeSecondaryContact()" style="width:48%;background-color:tomato;border-radius:6px;color:white;border:none;outline:none;padding:10px 0px;">Cancel</button>
        </div>
        <div id="secContactViewActions" style="display:none;">
            <button type="button" id="secBtnClose" onclick="closeSecondaryContact()" style="width:100%;background-color:tomato;border-radius:6px;color:white;border:none;outline:none;padding:10px 0px;">Close</button>
        </div>
    </div>
</div>
<script type="text/javascript">
var savedSecondaryContacts = {};

function escapeSecondaryHtml(str) {
    return $('<div/>').text(str || '').html();
}

function setSecondaryPhonePopupIcon(hasNumber) {
    var iconFill = document.querySelector('#sec_phone_icon svg');
    if (iconFill) {
        iconFill.setAttribute('fill', hasNumber ? '#0a7c2f' : 'red');
    }
}

function secondaryContactLines(phone, name) {
    var lines = [];
    if (phone) { lines.push('S : ' + escapeSecondaryHtml(phone)); }
    if (name) { lines.push('N : ' + escapeSecondaryHtml(name)); }
    return lines.join('<br/>');
}

function addPassengerPhoneIcons() {
    window.renderSecondaryContacts();
}
function renderSecondaryContacts() {
    $('.passenger-phone-icon, .sec-phone-icon').each(function () {
        var $icon = $(this);
        var tripId = String($icon.attr('data-trip-id') || '');
        var phone = $icon.attr('data-sec-phone') || $icon.attr('data-secondary-phone') || '';
        var name = $icon.attr('data-sec-name') || '';
        if (savedSecondaryContacts[tripId]) {
            if (savedSecondaryContacts[tripId].phone) { phone = savedSecondaryContacts[tripId].phone; }
            if (savedSecondaryContacts[tripId].name) { name = savedSecondaryContacts[tripId].name; }
            $icon.attr('data-sec-phone', phone);
            $icon.attr('data-secondary-phone', phone);
            $icon.attr('data-sec-name', name);
        }
        $icon.find('svg').attr('fill', phone ? '#0a7c2f' : 'red');
        var $td = $icon.closest('td');
        $td.find('.sec-phone-text, .secondary-phone-text').remove();
        if (phone || name) {
            $td.append('<div class="sec-phone-text secondary-phone-text">' + secondaryContactLines(phone, name) + '</div>');
        }
    });
}

function openSecondaryContact(el) {
    var $el = $(el);
    var mode = $el.attr('data-mode') || 'edit';
    var tripId = $el.attr('data-trip-id') || '';
    var phone = $el.attr('data-sec-phone') || $el.attr('data-secondary-phone') || '';
    var name = $el.attr('data-sec-name') || '';
    if (savedSecondaryContacts[tripId]) {
        if (savedSecondaryContacts[tripId].phone) { phone = savedSecondaryContacts[tripId].phone; }
        if (savedSecondaryContacts[tripId].name) { name = savedSecondaryContacts[tripId].name; }
    }
    $('#sec_trip_id').val(tripId);
    $('#sec_mode').val(mode);
    $('#sec_phone').val(phone);
    $('#sec_name').val(name);
    $('#secContactErr').css('color', 'tomato').text('');
    setSecondaryPhonePopupIcon(!!phone);
    if (mode === 'view') {
        $('#secContactTitle').text('Secondary contact');
        $('#sec_phone, #sec_name').prop('readonly', true);
        $('#secContactEditActions').hide();
        $('#secContactViewActions').show();
    } else {
        $('#secContactTitle').text('Add Secondary Number');
        $('#sec_phone, #sec_name').prop('readonly', false);
        $('#secContactEditActions').show();
        $('#secContactViewActions').hide();
    }
    var element = document.getElementById('secContactOverlay');
    if (element) { element.style.display = 'flex'; }
}

function closeSecondaryContact() {
    var element = document.getElementById('secContactOverlay');
    $('#secContactErr').css('color', 'tomato').text('');
    setSecondaryPhonePopupIcon(false);
    if (element) { element.style.display = 'none'; }
}

function saveSecondaryContact() {
    var tripId = $.trim($('#sec_trip_id').val());
    var phone = $.trim($('#sec_phone').val());
    var name = $.trim($('#sec_name').val());
    var $error = $('#secContactErr');
    var saveButton = document.getElementById('secBtnSave');
    if (name === '' || phone === '') {
        $error.css('color', 'tomato').text('Name and phone are required');
        return;
    }
    if (tripId === '' || tripId === '0') {
        $error.css('color', 'tomato').text('Trip id missing. Refresh and try again.');
        return;
    }
    $error.text('');
    if (saveButton) {
        saveButton.disabled = true;
        saveButton.innerHTML = 'Please wait...';
    }
    $.ajax({
        type: 'POST',
        url: '<?php echo URL_BASE; ?>taxidispatch/save_secondary_phone',
        data: { trip_id: tripId, secondary_phone: phone, secondary_name: name },
        dataType: 'text',
        success: function (raw) {
            if (saveButton) {
                saveButton.disabled = false;
                saveButton.innerHTML = 'Save';
            }
            var res = null;
            try { res = $.parseJSON(raw); } catch (e) { res = null; }
            if (res && (res.status == 1 || res.status === true)) {
                savedSecondaryContacts[tripId] = {
                    phone: res.secondary_phone || phone,
                    name: res.secondary_name || name
                };
                addPassengerPhoneIcons();
                closeSecondaryContact();
            } else {
                $error.css('color', 'tomato').text((res && res.message) ? res.message : 'Failed to save.');
            }
        },
        error: function (xhr) {
            if (saveButton) {
                saveButton.disabled = false;
                saveButton.innerHTML = 'Save';
            }
            var msg = 'Failed to save.';
            if (xhr && xhr.responseText && xhr.responseText.indexOf('Cannot redeclare') !== -1) {
                msg = 'Duplicate action_save_secondary_phone in controller. Keep only one.';
            }
            $error.css('color', 'tomato').text(msg);
        }
    });
}

function handleOpenSecondaryPhonePopup(tripId, existingPhone) {
    var $fake = $('<span/>').attr({
        'data-trip-id': tripId,
        'data-secondary-phone': existingPhone || '',
        'data-sec-phone': existingPhone || '',
        'data-mode': 'edit'
    });
    openSecondaryContact($fake);
}
function handleCloseSecondaryPhonePopup() { closeSecondaryContact(); }
function handleSaveSecondaryPhone() { saveSecondaryContact(); }

$(document).off('click', '.passenger-phone-icon');
$(document).off('click.secContact');
$(document).on('click.secContact', '.passenger-phone-icon, .sec-phone-icon', function (e) {
    e.preventDefault();
    e.stopImmediatePropagation();
    e.stopPropagation();
    openSecondaryContact(this);
    return false;
});
</script>
