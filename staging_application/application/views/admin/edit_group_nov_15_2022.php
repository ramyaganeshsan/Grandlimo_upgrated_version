<?php defined('SYSPATH') OR die("No direct access allowed."); 
   
   $group_name = (isset($groupInfo) && isset($groupInfo['group_name'])) ? $groupInfo['group_name'] : ""; 
   if(isset($postvalue) && isset($postvalue['group_name'])) {
      $group_name = $postvalue['group_name'];
   } 

   /* Sasi */
   $corporate_discount = (isset($groupInfo) && isset($groupInfo['corporate_discount'])) ? $groupInfo['corporate_discount'] : ""; 
   if(isset($postvalue) && isset($postvalue['corporate_discount'])) {
      $corporate_discount = $postvalue['corporate_discount'];
   }

   $corporate_trip_discount = (isset($groupInfo) && isset($groupInfo['corporate_trip_discount'])) ? $groupInfo['corporate_trip_discount'] : ""; 
   if(isset($corporate_trip_discount) && isset($postvalue['corporate_trip_discount'])) {
      $corporate_trip_discount = $postvalue['corporate_trip_discount'];
   } 

   $apply_to_airport = (isset($groupInfo) && isset($groupInfo['apply_to_airport'])) ? $groupInfo['apply_to_airport'] : ""; 
   if(isset($apply_to_airport) && isset($postvalue['apply_to_airport'])) {
      $apply_to_airport = $postvalue['apply_to_airport'];
   } 

   $minimum_wallet_balance = (isset($groupInfo) && isset($groupInfo['minimum_wallet_balance'])) ? $groupInfo['minimum_wallet_balance'] : ""; 
   if(isset($postvalue) && isset($postvalue['minimum_wallet_balance'])) {
      $minimum_wallet_balance = $postvalue['minimum_wallet_balance'];
   } 

   $surge_price = (isset($groupInfo) && isset($groupInfo['surge_price'])) ? $groupInfo['surge_price'] : "";
   if(isset($postvalue) && isset($postvalue['surge_price'])) {
      $surge_price = $postvalue['surge_price'];
   }

   $discount_wallet = (isset($groupInfo) && isset($groupInfo['discount_wallet'])) ? $groupInfo['discount_wallet'] : "";
   if(isset($postvalue) && isset($postvalue['discount_wallet'])) {
      $discount_wallet = $postvalue['discount_wallet'];
   } 

   $restrict_wallet_amount = (isset($groupInfo) && isset($groupInfo['restrict_wallet_amount'])) ? $groupInfo['restrict_wallet_amount'] : "";
   if(isset($postvalue) && isset($postvalue['restrict_wallet_amount'])) {
      $restrict_wallet_amount = $postvalue['restrict_wallet_amount'];
   }

   $members = array();

   if(!isset($postvalue['members'])) {
      foreach ($groupInfo['members'] as $key => $value) {
         $name = isset($value['name']) ? $value['name'] : "";
         $phone = isset($value['phone']) ? $value['phone'] : "";
         $newUsers = array(
            "id" => $value['_id']."--".$name."--".$phone,
            "text" => $name."-".$phone,
         );
         array_push($members,$newUsers);
      }
   } else {
      $members = isset($postvalue['members']) ? $postvalue['members'] : array();
   }
   
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<link 
   rel="stylesheet" 
   href="<?php echo URL_BASE;?>public/css/select2.css"
/>

<div class="container_content fl clr">
   <div class="cont_container mt15 mt10">
      <div class="content_middle">
         <form name="addtaxi_form" id="addtaxi_form" class="form" action="" method="post" enctype="multipart/form-data">
            <table border="0" cellpadding="5" cellspacing="0" width="100%">
               <tr>
                  <td><b><?php echo ucfirst(__('corporate_group'));?></b></td>
                  <td></td>
               </tr>
               <tr>
                  <td valign="top" width="20%">
                     <label>
                        <?php echo __('group_name'); ?>      
                     </label><span class="star">*</span>
                  </td>
                  <td>
                     <div style="min-width : 325px" class="new_input_field">
                        <input type="text" title="<?php echo __('group_name'); ?>" id="group_name" class="required" name="group_name" value="<?php echo $group_name; ?>" minlength="4" maxlength="30" />
                        <?php if(isset($errors) && array_key_exists('group_name',$errors)){ echo "<span class='error'>".ucfirst($errors['group_name'])."</span>";}?>
                     </div>
                  </td>
               </tr>
               <tr style="display: none;">
                  <td valign="top" width="20%">
                     <label>
                        <?php echo __('minimum_wallet_balance'); ?>      
                     </label><span class="star">*</span>
                  </td>
                  <td>
                     <div style="min-width : 325px" class="new_input_field">
                        <input type="text" title="<?php echo __('minimum_wallet_balance'); ?>" id="minimum_wallet_balance" class="required" name="minimum_wallet_balance" value="<?php echo $minimum_wallet_balance; ?>" maxlength="30" />
                        <?php if(isset($errors) && array_key_exists('minimum_wallet_balance',$errors)){ echo "<span class='error'>".ucfirst($errors['minimum_wallet_balance'])."</span>";}?>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td valign="top" width="20%">
                     <label>
                        <?php echo __('members'); ?>      
                     </label><span class="star">*</span>
                  </td>
                  <td>
                     <div style="min-width : 325px" class="new_input_field">
                        <select style="min-width : 340px" id="member" name="members[]" multiple="multiple">

                        </select>
                        <?php if(isset($errors) && array_key_exists('members',$errors)){ echo "<span class='error'>".ucfirst($errors['members'])."</span>";}?>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td valign="top" width="20%">
                     <label><?php echo __('surge_price_apply'); ?></label><span class="star">*</span>
                  </td>        
                  <td>
                     <div class="new_input_field">
                       <input type="radio"  title="<?php echo __('surge_price'); ?>" name="surge_price" value="1" <?php echo ($surge_price == 1) ? "checked" : "checked" ?> />
                       <?php echo __('yes'); ?>
                       <input type="radio" <?php echo ($surge_price == "0") ? "checked" : "" ?> title="<?php echo __('surge_price'); ?>" name="surge_price" value="0" />
                       <?php echo __('no'); ?>
                       <?php if(isset($errors) && array_key_exists('surge_price',$errors)){ echo "<span class='error'>".ucfirst($errors['surge_price'])."</span>";}?>
                     </div>
                  </td>    
               </tr>
               <br />
               <tr>
                  <td valign="top" width="20%">
                     <label><?php echo __('restrict_wallet_amount'); ?></label><span class="star">*</span>
                  </td>        
                  <td>
                     <div class="new_input_field">
                        <input 
                           type="radio"  
                           title="<?php echo __('restrict_wallet_amount'); ?>" 
                           name="restrict_wallet_amount" 
                           value="1" 
                           <?php echo ($restrict_wallet_amount == "1") ? "checked" : "checked" ?> />
                           <?php echo __('yes'); ?>
                        <input 
                           type="radio" 
                           <?php echo ($restrict_wallet_amount == "0") ? "checked" : "" ?> 
                           title="<?php echo __('restrict_wallet_amount'); ?>" 
                           name="restrict_wallet_amount" 
                           value="0" />
                           <?php echo __('no'); ?>
                       <?php if(isset($errors) && array_key_exists('restrict_wallet_amount',$errors)){ echo "<span class='error'>".ucfirst($errors['restrict_wallet_amount'])."</span>";}?>
                     </div>
                  </td>    
               </tr>
               <br />
               <tr style="display:none">
                  <td valign="top" width="20%">
                     <label><?php echo __('discount_wallet_label'); ?></label><span class="star">*</span>
                  </td>        
                  <td>
                     <div class="new_input_field">
                        <input 
                           type="radio"  
                           title="<?php echo __('discount_wallet_label'); ?>" 
                           name="discount_wallet" 
                           value="1" 
                           <?php echo ($discount_wallet == "1") ? "checked" : "checked" ?> />
                           <?php echo __('yes'); ?>
                        <input 
                           type="radio" 
                           <?php echo ($discount_wallet == "0") ? "checked" : "" ?> 
                           title="<?php echo __('discount_wallet_label'); ?>" 
                           name="discount_wallet" 
                           value="0" />
                           <?php echo __('no'); ?>
                       <?php if(isset($errors) && array_key_exists('discount_wallet',$errors)){ echo "<span class='error'>".ucfirst($errors['discount_wallet'])."</span>";}?>
                     </div>
                  </td>    
               </tr>
               <tr>
                  <td valign="top" width="20%">
                     <label><?php echo __('discount_status'); ?></label><span class="star">*</span>
                  </td>        
                  <td>
                     <div class="new_input_field">
                       <input type="radio"  title="<?php echo __('discount_status'); ?>" name="corporate_trip_discount" value="1" <?php echo $corporate_trip_discount == 1 ? "checked" : "checked" ?> /><?php echo __('yes'); ?>
                       <input type="radio" <?php echo $corporate_trip_discount == 0 ? "checked" : "" ?> title="<?php echo __('discount_status'); ?>" name="corporate_trip_discount" value="0" /><?php echo __('no'); ?>
                       <?php if(isset($errors) && array_key_exists('corporate_trip_discount',$errors)){ echo "<span class='error'>".ucfirst($errors['corporate_trip_discount'])."</span>";}?>
                     </div>
                  </td>    
               </tr>
               <tr>
                  <td valign="top" width="20%">
                     <label><?php echo __('discount (in percentage)'); ?></label><span class="star">*</span>
                  </td>        
                  <td>
                     <div style="min-width : 325px" class="new_input_field">
                       <input type="text" title="<?php echo __('discount (in percentage)'); ?>" id="corporate_discount" class="required" name="corporate_discount" value="<?php echo $corporate_discount; ?>" />
                       <?php if(isset($errors) && array_key_exists('corporate_discount',$errors)){ echo "<span class='error'>".ucfirst($errors['corporate_discount'])."</span>";}?>
                     </div>
                  </td>    
               </tr>
               <tr>
                  <td valign="top" width="20%">
                     <label><?php echo __('apply_to_airport'); ?></label><span class="star">*</span>
                  </td>        
                  <td>
                     <div class="new_input_field">
                       <input type="radio"  title="<?php echo __('apply_to_airport'); ?>" name="apply_to_airport" value="1" <?php echo $apply_to_airport == 1 ? "checked" : "checked" ?> /><?php echo __('yes'); ?>
                       <input type="radio" <?php echo $apply_to_airport == 0 ? "checked" : "" ?> title="<?php echo __('apply_to_airport'); ?>" name="apply_to_airport" value="0" /><?php echo __('no'); ?>
                       <?php if(isset($errors) && array_key_exists('apply_to_airport',$errors)){ echo "<span class='error'>".ucfirst($errors['apply_to_airport'])."</span>";}?>
                     </div>
                  </td>    
               </tr>
               <table border="0" cellpadding="0" cellspacing="0" width="100%">
                  <tr>
                     <td>&nbsp;</td>
                     <td  class="star">*<?php echo __('required_label'); ?></td>
                  </tr>
                  <tr>
                     <td style="width:20%;">&nbsp;</td>
                     <td colspan="2">
                        <br />
                        <div class="button blackB">
                           <input 
                              type="button" 
                              value="<?php echo __('button_back'); ?>" 
                              onclick="window.history.go(-1)" />
                        </div>
                        <div class="button dredB">
                           <input 
                              type="reset" 
                              value="<?php echo __('button_reset'); ?>" 
                              title="<?php echo __('button_reset'); ?>" />
                        </div>
                        <div class="button greenB">
                           <input 
                              type="submit" 
                              value="<?php echo __('submit' );?>" 
                              name="submit_addgroup" 
                              id="submit_addgroup" title="<?php echo __('submit' );?>" />
                        </div>
                        <div class="clr">&nbsp;</div>
                     </td>
                  </tr>
               </table>
            </table>
            </table>
         </form>
         <?php if(isset($postvalue['passenger_groups']) && count($postvalue['passenger_groups']) > 0) {  ?>
            <!-- Existing groups -->
            <h3>Customers corporate group's</h3>
            <table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">
               <thead>
                  <tr class="rowhead">
                     <td align="left" width="150" style="min-width: 22px !important;" >
                        <?php echo __('name'); ?>   
                     </td>
                     <td align="left" width="150">
                        <?php echo __('group_name'); ?>   
                     </td>
                  </tr>
               </thead>
               <tbody>
                     <?php foreach($postvalue['passenger_groups'] as $listings) {  ?>
                     <tr>
                        <td>
                           <?php echo isset($listings['passenger']) ? $listings['passenger'] : "" ?>
                        </td>
                        <td>
                           <?php echo isset($listings['group_name']) ? $listings['group_name'] : "" ?>
                        </td>
                     </tr>
                     <?php } ?>
               </tbody>
            </table>
         <?php } ?>
      </div>
      <div class="content_bottom">
         <div class="bot_left"></div>
         <div class="bot_center"></div>
         <div class="bot_rgt"></div>
      </div>
   </div>
</div>
<script type="text/javascript">
   $(document).ready(function(){

      var members = '<?php echo (isset($members) && !empty($members)) ? json_encode($members) : "" ?>';
      try {
         members = JSON.parse(members);
      } catch(err) {
         members = [];
      }

      if(members.length > 0) {
         let values = [];
         members.forEach( (member) => {
            if ($('#member').find("option[value='" + member.id + "']").length) {
                $('#member').val(member.id).trigger('change');
            } else { 
               var newOption = new Option(member.text, member.id, false, false);
               $('#member').append(newOption).trigger('change');
               values.push(member.id);
            }
         });
         if(values.length > 0) {
            $('#member').val(values);
            $('#member').trigger('change');
         }
      }
      $('#member').select2({
        ajax: {
            url: '<?php echo URL_BASE. "corporate/get_passengers" ?>',
            processResults: function (data, params) {
               data = JSON.parse(data);
               params.page = params.page || 1;
               return {
                  results: data.results,
                  pagination: {
                     more: (params.page * 30) < data.count_filtered
                  }
               };
            },
            data: function (params) {
               var query = {
                 search: params.term,
                 page: params.page || 1,
                 type: 'public',
               }
               return query;
            }
         }
      });
   });

</script>
