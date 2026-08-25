<?php defined('SYSPATH') OR die("No direct access allowed."); ?>
<div class="container_content fl clr">
   <div class="cont_container mt15 mt10">
      <div class="content_middle">
         <table border="0" cellpadding="5" cellspacing="0" width="100%">
            <tr>
               <td class="titlebold"><?php echo ucfirst(__('corporate_group')); ?></td>
               <td></td>
            </tr>
            <tr>
               <td valign="top" width="20%"><label><?php echo __('group_name'); ?></label>:</td>
               <td>
                  <div class="new_input_field">
                     <?php echo isset($groupInfo['group_name']) ? $groupInfo['group_name'] : "-" ?>
                  </div>
               </td>
            </tr>
            <tr style="display:none">
               <td valign="top" width="20%"><label><?php echo __('minimum_wallet_balance'); ?></label>:</td>
               <td>
                  <div class="new_input_field">
                     <?php echo isset($groupInfo['minimum_wallet_balance']) ? $groupInfo['minimum_wallet_balance'] : 0 ?>
                  </div>
               </td>
            </tr>
            <tr>
               <td valign="top" width="20%"><label><?php echo __('surge_price'); ?></label>:</td>
               <td>
                  <div class="new_input_field">
                     <?php 
                        echo isset($groupInfo['surge_price']) ? 
                        ($groupInfo['surge_price'] == 1) ? "Active" : "Inactive" :
                        "-" 
                     ?>
                  </div>
               </td>
            </tr>
            <tr>
               <td valign="top" width="20%"><label><?php echo __('restrict_wallet_amount'); ?></label>:</td>
               <td>
                  <div class="new_input_field">
                     <?php 
                        echo isset($groupInfo['restrict_wallet_amount']) ? 
                        ($groupInfo['restrict_wallet_amount'] == 1) ? "Active" : "Inactive" :
                        "-" 
                     ?>
                  </div>
               </td>
            </tr>
            <tr style="display:none">
               <td valign="top" width="20%"><label><?php echo __('discount_wallet_label'); ?></label>:</td>
               <td>
                  <div class="new_input_field">
                     <?php 
                        echo isset($groupInfo['discount_wallet']) ? 
                        ($groupInfo['discount_wallet'] == 1) ? "Active" : "Inactive" :
                        "-" 
                     ?>
                  </div>
               </td>
            </tr>
            <tr>
               <td valign="top" width="20%"><label><?php echo __('discount_status'); ?></label>:</td>
               <td>
                  <div class="new_input_field">
                     <?php 
                        echo isset($groupInfo['corporate_trip_discount']) ? 
                        ($groupInfo['corporate_trip_discount'] == 1) ? "Active" : "Inactive" :
                        "-" 
                     ?>
                  </div>
               </td>
            </tr>
            <tr>
               <td valign="top" width="20%"><label><?php echo __('apply_to_airport'); ?></label>:</td>
               <td>
                  <div class="new_input_field">
                     <?php 
                        echo isset($groupInfo['apply_to_airport']) ? 
                        ($groupInfo['apply_to_airport'] == 1) ? "Active" : "Inactive" :
                        "-" 
                     ?>
                  </div>
               </td>
            </tr>
            <tr>
               <td valign="top" width="20%"><label><?php echo __('discount (in percentage)'); ?></label>:</td>
               <td>
                  <div class="new_input_field">
                     <?php 
                        echo isset($groupInfo['corporate_discount']) ? $groupInfo['corporate_discount'] : "-";
                     ?>
                  </div>
               </td>
            </tr>
         </table>
         <?php if(isset($groupInfo['members']) && count($groupInfo['members']))  { ?>
         <h3><?php echo __('passengers'); ?></h3>
         <table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">
            <thead>
               <tr class="rowhead">
                  <td align="left" width="150" style="min-width: 22px !important;" >
                     <?php echo __('name'); ?>   
                  </td>
                  <td align="left" width="150">
                     <?php echo __('email'); ?>   
                  </td>
                  <td align="left" width="150">
                     <?php echo __('phone'); ?>   
                  </td>
               </tr>
            </thead>
            <tbody>
                  <?php foreach($groupInfo['members'] as $listings) {  ?>
                  <tr style="text-align : center;">
                     <td>
                        <?php echo isset($listings['name']) ? $listings['name'] : "" ?>
                     </td>
                     <td>
                        <?php echo isset($listings['email']) ? $listings['email'] : "" ?>
                     </td>
                     <td>
                        <?php echo isset($listings['phone']) ? $listings['phone'] : "" ?>
                     </td>
                  </tr>
                  <?php } ?>
            </tbody>
         </table>
      <?php } ?>
      </div>
   </div>
</div>
