<?php defined('SYSPATH') OR die("No direct access allowed."); 
   $group_name = (isset($groupInfo) && isset($groupInfo['group_name'])) ? $groupInfo['group_name'] : ""; 
   if(isset($postvalue) && isset($postvalue['group_name'])) {
      $group_name = $postvalue['group_name'];
   }
?>

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
      </div>
      <div class="content_bottom">
         <div class="bot_left"></div>
         <div class="bot_center"></div>
         <div class="bot_rgt"></div>
      </div>
   </div>
</div>
