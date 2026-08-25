<?php defined('SYSPATH') OR die("No direct access allowed."); 

$fare = 0;
$source_name = $source_lat = $source_lng = '';
$destination_name = $destination_lat = $destination_lng = '';
$source_polygon = $destination_polygon = '';
?>

<div class="con_out">
  <div class="navbar" style="margin:0;min-height: 0px;">
  
  </div>
  <div class="container_content fl clr">
      <div class="cont_container mt15 mt10">
         <div class="content_middle">   
            <form name="trip_zone_form" id="trip_zone_form" class="form" action="" method="post" enctype="multipart/form-data" data-form="server-form">
              <table border="0" cellpadding="5" cellspacing="0" width="100%">            
              <tr>
            <td valign="top" width="20%"><label><?php echo __('zone'); ?></label><span class="star">*</span></td>        
            <td>
            <?php $field_type =''; if(isset($postvalue) && array_key_exists('zone_id',$postvalue)){ $field_type =  $postvalue['zone_id']; } ?>
            <div class="formRight">
            <div class="selector" id="uniform-user_type">
            <span><?php echo __('select_label'); ?></span>
                        <select name="zone_id" id="zone_id" class="required" title="<?php echo __('select_model_name'); ?>">
                        <option value="">--Select--</option>
                        <?php foreach($zone_details as $zone) { ?>
                        <option value="<?php echo $zone['_id']; ?>"  <?php if($field_type == $zone['_id']) { echo 'selected=selected'; } ?> ><?php echo ucfirst($zone['zone_name']); ?></option>
                        <?php } ?>
                        </select>
                  </div>
                  <label for="zone_id" generated="true" style="display:none;" class="errorvalid"><?php echo __('select_model_name'); ?></label>
            </div>
            <span id="model_exist" class="errorvalid" style="padding:0;"></span>
                        <?php if(isset($errors) && array_key_exists('zone_id',$errors)){ echo "<span class='error'>".ucfirst($errors['zone_id'])."</span>";}?> 
            </td>    	
            </tr>
<!-- 
            <tr>
                <td valign="top" width="20%"><label><?php //echo __('is_pickup'); ?></label></td>
                <td>
                  <div class="new_input_field new_input_field_source_location" >
                      <input id="is_pickup" name="is_pickup" class="controls" value="1" type="checkbox" />                      
                </td>
            </tr>

            <tr>
                <td valign="top" width="20%"><label><?php //echo __('is_drop'); ?></label></td>
                <td>
                  <div class="new_input_field new_input_field_source_location" >
                      <input id="is_drop" name="is_drop" class="controls" value="1" type="checkbox" />                      
                </td>
            </tr> -->

            <tr>
            <td valign="top" width="20%"><label><?php echo __('model_name'); ?></label><span class="star">*</span></td>        
            <td>
            <?php $field_type =''; if(isset($postvalue) && array_key_exists('model_id',$postvalue)){ $field_type =  $postvalue['model_id']; } ?>
            <div class="formRight">
            <div class="selector" id="uniform-user_type">
            <span><?php echo __('select_label'); ?></span>
                        <select name="model_id" id="model_id" class="required" title="<?php echo __('select_model_name'); ?>">
                        <option value="">--Select--</option>
                        <?php foreach($model_details as $model) { ?>
                        <option value="<?php echo $model['_id']; ?>"  <?php if($field_type == $model['_id']) { echo 'selected=selected'; } ?> ><?php echo ucfirst($model['model_name']); ?></option>
                        <?php } ?>
                        </select>
                  </div>
                  <label for="model_id" generated="true" style="display:none;" class="errorvalid"><?php echo __('select_model_name'); ?></label>
            </div>
            <span id="model_exist" class="errorvalid" style="padding:0;"></span>
                        <?php if(isset($errors) && array_key_exists('model_id',$errors)){ echo "<span class='error'>".ucfirst($errors['model_id'])."</span>";}?> 
            </td>   	
            </tr>
            
            <tr class="zone_details1">
              <td valign="top" width="20%"><label><?php echo __('zone_fixed_fare'); ?></label><span class="star">*</span></td>  
              <td>
                <div class="new_input_field">
                  <input type="text" title="<?php echo __('zone_fixed_fare'); ?>" name="zone_fixed_fare" id="zone_fixed_fare" value="<?php if(isset($postvalue) && array_key_exists('zone_fixed_fare',$postvalue)){ echo $postvalue['zone_fixed_fare']; }?>"  minlength ="2" maxlength="30"/>
                    <?php if(isset($errors) && array_key_exists('zone_fixed_fare',$errors)){ echo "<span class='error'>".ucfirst($errors['zone_fixed_fare'])."</span>";}?>

                  <span class="error" id="err_zone_fixed_fare"></span>
                </div>
              </td>   
            </tr>  

                       
                      <tr>
              <td>&nbsp;</td>
                          <td colspan="">
                <input type="text" name="submit_zone" value="form" style="display:none;"/>
                             <div class="button blackB">     <input type="button" value="<?php echo __('button_back'); ?>" onclick="window.history.go(-1)" /></div>
                            <div class="button dredB">   <input type="reset" value="<?php echo __('button_reset'); ?>" title="<?php echo __('button_reset'); ?>" /></div>
                            <div class="button greenB">  <input type="submit" value="<?php echo __('submit' );?>" name="submit_zone" title="<?php echo __('submit' );?>" /></div>
                          </td>
                      </tr> 
                  </table>
            </form>
          </div>
          <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt"></div></div>
      </div>
  </div>  
</div>  
