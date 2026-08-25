<?php defined('SYSPATH') OR die("No direct access allowed.");?>
<div class="container_content fl clr">
   <div class="cont_container mt15 mt10">
      <div class="content_middle">
         <div class="widget">
            <div class="title">
               <img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" />
               <h6><?php echo $page_title; ?></h6>
               <div style="width:auto; float:right; margin: 4px 3px;">
                  <div class="button blueB">
                     <input type="button" value="<?php echo __('button_add'); ?>" title="<?php echo __('button_add'); ?>" onclick="location.href = '<?php echo URL_BASE; ?>corporate/add_group'" />
                  </div>
               </div>
            </div>
            <?php if($total_count > 0){ ?>
            <div class= "overflow-block">
               <?php } ?>
               <table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">
                  <?php if($total_count > 0){ ?>
                  <thead>
                     <tr class="rowhead">
                        <td align="left" width="20"><?php echo __('sno_label'); ?></td>
                        <td align="left" width="150" style="min-width: 22px !important;" >
                           <?php echo __('name'); ?>   
                        </td>
                        <td align="left" width="50" >
                           <?php echo __('action_label'); ?>
                        </td>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                        $sno=$Offset; /* For Serial No */
                        foreach($groups as $listings) {
                           $sno++;        
                           $trcolor=($sno%2==0) ? 'oddtr' : 'eventr';  
                        ?>     
                        <tr class="<?php echo $trcolor; ?>">
                           <td align="center"><?php echo $sno; ?></td>
                           <td align="center">
                              <?php echo isset($listings['group_name']) ? $listings['group_name'] : "-" ?>
                           </td>
                           <td align="center" colspan='3'>
                              <?php echo '<a href='.URL_BASE.'corporate/group_edit/'.$listings['_id'].' " title ="Edit" class="editicon"></a>' ; ?>
                           </td>
                     </tr>
                     <?php } 
                        } 
                        
                        //For No Records
                        //==============
                          else{ ?>
                     <tr>
                        <td class="nodata"><?php echo __('no_data'); ?></td>
                     </tr>
                     <?php } ?>
                  </tbody>
               </table>
               <?php if ($total_count > 0) { ?>
            </div>
            <?php } ?>
         </div>
      </div>
      <div class="clr">&nbsp;</div>
      <div class="pagination">
         <?php if($total_count > 0): ?>
         <p><?php echo $pag_data->render(); ?></p>
         <?php endif; ?> 
      </div>
      <div class="clr">&nbsp;</div>
   </div>
</div>
