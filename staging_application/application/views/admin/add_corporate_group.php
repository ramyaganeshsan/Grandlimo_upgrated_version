<?php defined('SYSPATH') or die("No direct access allowed.");

$fare = 0;
$source_name = $source_lat = $source_lng = '';
$destination_name = $destination_lat = $destination_lng = '';
$source_polygon = $destination_polygon = '';
?>
<script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<style>
.select2-container--default .select2-search--dropdown .select2-search__field {
    border: 1px solid #aaa;
    line-height: 44px;
    height: 27px !important;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
    background-color: transparent;
    border: none;
    border-right: 1px solid #aaa;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
    color: #999;
    cursor: pointer;
    font-size: 1em;
    font-weight: bold;
    padding: 4px;
    position: absolute;
    left: 0;
    top: 0;
}
</style>
<div class="con_out">
  <div class="navbar" style="margin:0;min-height: 0px;">

  </div>
  <div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
      <div class="content_middle">
        <form name="corporate_group_name_form" id="corporate_group_name_form" class="form" action="" method="post" enctype="multipart/form-data" data-form="server-form">
          <table border="0" cellpadding="5" cellspacing="0" width="100%">

            <tr class="zone_details1">
              <td valign="top" width="20%"><label><?php echo __('corporate_group_name'); ?></label><span class="star">*</span></td>
              <td>
                <div class="new_input_field">
                  <input type="text" title="<?php echo __('corporate_group_name'); ?>" name="corporate_group_name" id="corporate_group_name" value="<?php if (isset($postvalue) && array_key_exists('corporate_group_name', $postvalue)) {
                                                                                                                                                      echo $postvalue['corporate_group_name'];
                                                                                                                                                    } ?>" minlength="2" maxlength="30" />
                  <?php if (isset($errors) && array_key_exists('corporate_group_name', $errors)) {
                    echo "<span class='error'>" . ucfirst($errors['corporate_group_name']) . "</span>";
                  } ?>

                  <span class="error" id="err_corporate_group_name"></span>
                </div>
              </td>
            </tr>
            <tr class="zone_details1">
              <td valign="top" width="20%"><label><?php echo __('wallet_positive_limit'); ?></label><span class="star">*</span></td>
              <td>
                <div class="new_input_field">
                  <input type="text" title="<?php echo __('wallet_positive_limit'); ?>" minlength="1" maxlength="7" onkeypress="return onlyDotsAndNumbers(this,event)"  name="wallet_positive_limit" id="wallet_positive_limit" value="<?php if (isset($postvalue) && array_key_exists('wallet_positive_limit', $postvalue)) {
                                                                                                                                                          echo $postvalue['wallet_positive_limit'];
                                                                                                                                                        } ?>" minlength="2" maxlength="30" />
                  <?php if (isset($errors) && array_key_exists('wallet_positive_limit', $errors)) {
                    echo "<span class='error'>" . ucfirst($errors['wallet_positive_limit']) . "</span>";
                  } ?>

                  <span class="error" id="err_wallet_positive_limit"></span>
                </div>
              </td>
            </tr>
            <tr>
              <td valign="top" width="20%"><label><?php echo __('surge_pricing'); ?></label><span class="star">*</span></td>
              <td>
                <div class="new_input_field">
                  <?php $checked = isset($postvalue['surge_pricing']) ? $postvalue['surge_pricing'] : "1";
                  //echo $checked;
                  ?>
                  <input type="radio" name="surge_pricing" id="surge_pricing" title="<?php echo __('surge_pricing'); ?>" value="1" <?php if ($checked == '1') {
                                                                                                                                      echo 'checked=checked';
                                                                                                                                    } ?>><?php echo 'Enable'; ?>

                  <input type="radio" name="surge_pricing" id="surge_pricing" title="<?php echo __('surge_pricing'); ?>" value="0" <?php if ($checked == '0') {
                                                                                                                                      echo 'checked=checked';
                                                                                                                                    } ?>><?php echo 'Disable'; ?>
                </div>
                <?php if (isset($errors) && array_key_exists('surge_pricing', $errors)) {
                  echo "<span class='error'>" . ucfirst($errors['surge_pricing']) . "</span>";
                } ?>
              </td>
            </tr>
            <tr>
              <td valign="top" width="20%"><label><?php echo __('wallet_max_limit_check'); ?></label><span class="star">*</span></td>
              <td>
                <div class="new_input_field">
                  <?php $checked = isset($postvalue['wallet_max_limit_check']) ? $postvalue['wallet_max_limit_check'] : "1";
                  //echo $checked;
                  ?>
                  <input type="radio" name="wallet_max_limit_check" id="wallet_max_limit_check" title="<?php echo __('wallet_max_limit_check'); ?>" value="1" <?php if ($checked == '1') {
                                                                                                                                      echo 'checked=checked';
                                                                                                                                    } ?>><?php echo 'Enable'; ?>

                  <input type="radio" name="wallet_max_limit_check" id="wallet_max_limit_check" title="<?php echo __('surge_pricing'); ?>" value="0" <?php if ($checked == '0') {
                                                                                                                                      echo 'checked=checked';
                                                                                                                                    } ?>><?php echo 'Disable'; ?>
                </div>
                <?php if (isset($errors) && array_key_exists('wallet_max_limit_check', $errors)) {
                  echo "<span class='error'>" . ucfirst($errors['wallet_max_limit_check']) . "</span>";
                } ?>
              </td>
            </tr>

            <tr>
              <td valign="top" width="20%"><label><?php echo __('passenger_list'); ?></label><span class="star">*</span></td>
              <td>
                <div class="new_input_field">
              <select style="width: 300%" id="corporate_passenger_list" class="js-example-basic-single js-states form-control" multiple="multiple" name="corporate_passengers_list[]">
              </select>
                </div>
                <?php if (isset($errors) && array_key_exists('passenger_list', $errors)) {
                  echo "<span class='error'>" . ucfirst($errors['passenger_list']) . "</span>";
                } ?>
              </td>
            </tr>

            <tr>
              <td>&nbsp;</td>
              <td colspan="">
                <input type="text" name="submit_zone" value="form" style="display:none;" />
                <div class="button blackB"> <input type="button" value="<?php echo __('button_back'); ?>" onclick="window.history.go(-1)" /></div>
                <div class="button dredB"> <input type="reset" value="<?php echo __('button_reset'); ?>" title="<?php echo __('button_reset'); ?>" /></div>
                <div class="button greenB"> <input type="submit" value="<?php echo __('submit'); ?>" name="submit_zone" title="<?php echo __('submit'); ?>" /></div>
              </td>
            </tr>
          </table>
        </form>
      </div>
      <div class="content_bottom">
        <div class="bot_left"></div>
        <div class="bot_center"></div>
        <div class="bot_rgt"></div>
      </div>
    </div>
  </div>
</div>
<script>

$(document).ready(function() {
  $('#corporate_passenger_list').select2({
  maximumSelectionLength: 1000,
  multiple:true,
  ajax: {
    url: '<?php echo URL_BASE; ?>/corporategroup/passengers_list',
    dataType: 'json',
    data: function (params) {
      var query = {
        keyword: params.term,
      }
      // Query parameters will be ?search=[term]&page=[page]
      return query;
    },
    processResults: function (data) {
    return {
      results: data
    };
    },
    templateSelection: function(data){
      console.log(data);
      return data.id;
    }
  }
});
});
</script>