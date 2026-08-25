<?php defined('SYSPATH') OR die("No direct access allowed."); 

$fare = 0;
?>
<div class="con_out">
  <div class="navbar" style="margin:0;min-height: 0px;">
  
  </div>
  <div class="container_content fl clr">
      <div class="cont_container mt15 mt10">
         <div class="content_middle">   
            <form name="trip_zone_form" id="trip_zone_form" class="form" action="" method="post" enctype="multipart/form-data" data-form="server-form">
              <table border="0" cellpadding="5" cellspacing="0" width="100%">            
           
        <td valign="top" width="20%"><label><?php echo __('zone');  ?></label><span class="star">*</span></td>
	       <td>
		   <div class="new_input_field">
			   <?php echo isset($zone_fare_details['zone_name']) ? trim($zone_fare_details['zone_name']):""; ?>
		   </div>
           </td>
           </tr>
			<input type="hidden" id="zone_id" name="zone_id" value="<?php echo  $zone_fare_details['zone_id']; ?>"/>
      <tr>
           <td valign="top" width="20%"><label><?php echo __('zone_fixed_fare'); ?>(<?php echo $company_currency; ?>)</label><span class="star">*</span></td>        
	       <td>			   
		   <div class="new_input_field">
              <input type="text" title="<?php echo __('zone_fixed_fare'); ?>" class="required numbersdots" name="zone_fixed_fare" id="zone_fixed_fare" value="<?php echo isset($zone_fare_details['zone_fixed_fare']) &&!array_key_exists('zone_fixed_fare',$postvalue)? trim($zone_fare_details['zone_fixed_fare']):((isset($postvalue['zone_fixed_fare']))?$postvalue['zone_fixed_fare']:""); ?>"  minlength="1" maxlength="7" onkeypress="return onlyDotsAndNumbers(this,event)" />
              <?php if(isset($errors) && array_key_exists('base_fare',$errors)){ echo "<span class='error'>".ucfirst($errors['zone_fixed_fare'])."</span>";}?>
		   </div>
           </td>   	
           </tr>                    
                      <tr>
              <td>&nbsp;</td>
                          <td colspan="">
                              <input type="text" name="submit_editzone" value="form" style="display:none;"/>
                              
                              <div class="button blackB">     <input type="button" value="<?php echo __('button_back'); ?>" onclick="window.history.go(-1)" /></div>
                            <div class="button dredB">   <input type="reset" value="<?php echo __('button_reset'); ?>" title="<?php echo __('button_reset'); ?>" /></div>
                            <div class="button greenB">  <input type="submit" value="<?php echo __('submit' );?>" name="submit_editzone" title="<?php echo __('submit' );?>" /></div>
                          </td>
                      </tr> 
                  </table>
            </form>
          </div>
          <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt"></div></div>
      </div>
  </div>  
</div>  
<script type="text/javascript" src="<?php echo URL_BASE;?>public/common/js/spectrum.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE;?>public/common/css/spectrum.css">
