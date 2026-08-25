<?php defined('SYSPATH') OR die("No direct access allowed."); ?>
<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle">    
          <table border="0" cellpadding="5" cellspacing="0" width="100%">
	<tr>
	<td class="titlebold"><?php echo ucfirst(__('personalinform')); ?></td>
	<td></td>	          
	</tr>
           <tr>
           <td valign="top" width="20%"><label><?php echo __('firstname'); ?></label>:</td>        
	   <td>
		   <div class="new_input_field">
		   <?php if(isset($user_details['name'])) { echo $user_details['name']; } else { echo ''; } ?>
		   </div>
	   </td>   	
           </tr> 	
				   
           <tr>
           <td valign="top" width="20%"><label><?php echo __('lastname'); ?></label>:</td>        
	   <td>
		   <div class="new_input_field">
		   <?php if(isset($user_details['lastname'])) { echo $user_details['lastname']; } ?>
		   </div>
	   </td>   	
           </tr> 
           
           <tr>
           <td valign="top" width="20%"><label><?php echo __('email'); ?></label>:</td>        
	   <td>
		   <div class="new_input_field">	
		   <?php if(isset($user_details['email'])) { echo $user_details['email']; } ?>
		   </div>
	   </td>   	
           </tr> 
           
           <tr>
           <td valign="top" width="20%"><label><?php echo __('mobile'); ?></label>:</td>        
	   <td>
		   <div class="new_input_field">
		   <?php if(isset($user_details['phone'])) { echo $user_details['phone']; } ?>
		   </div>
	   </td>   	
           </tr>
           <tr>
           <td valign="top" width="20%"><label><?php echo __('address'); ?></label>:</td>        
	   <td>
		   <div class="new_input_field">
		   <?php if(isset($user_details['address'])) { echo $user_details['address']; } ?>
		   </div>
	   </td>   	
           </tr>
       <?php if($user_details['user_type'] != 'N' && $user_details['user_type'] != 'S') { ?>        
           <tr>
           <td valign="top" width="20%"><label><?php echo __('date_of_birth'); ?></label>:</td>        
	   <td>
		   <div class="new_input_field">
		   <?php if(isset($user_details['dob'])) { echo $user_details['dob']; } ?>
		   </div>
	   </td>   	
	</tr> 
	<?php } ?>
       <?php if($user_details['user_type'] != 'N' && $user_details['user_type'] != 'S') { ?>   
                  
	   <tr>
		<td><b><?php echo ucfirst(__('taxiinformation')); ?></b></td>
		<td></td>	          
	   </tr> 
         	    
            <tr>
           <td valign="top" width="20%"><label><?php echo __('model_name'); ?></label>:</td>        
	   <td>
		   <div class="new_input_field">
		   <?php 
		   if(!empty($user_details['modelname'])){
			$child = $user_details['modelname'];
			
		echo $child[0];}
		?>
		
		   </div>
	   </td>   	
           </tr>  
            <tr>
           <td valign="top" width="20%"><label><?php echo __('taxi_number'); ?></label>:</td>        
	   <td>
		   <div class="new_input_field">
		   <?php if(isset($user_details['taxi_number'])) { echo $user_details['taxi_number']; } ?>
		   </div>
	   </td>   	
           </tr>  
            <tr>
           <td valign="top" width="20%"><label><?php echo __('start_km'); ?></label>:</td>        
	   <td>
		   <div class="new_input_field">
		   <?php if(isset($user_details['start_km'])) { echo $user_details['start_km']; } ?>
		   </div>
	   </td>   	
           </tr>        
	<?php } ?>
<?php /*
	<tr>

	<td valign="top" width="20%"><label><?php echo __('country_label'); ?></label>:</td>        
	<td>
		   <div class="new_input_field">
		   <?php echo (isset($user_details['country_name'])) ? $user_details['country_name'] : "--";
		  
		   ?>
		   </div>
	</td>   	
	</tr>

	<?php if($user_details['user_type'] != 'S') { ?>
	<tr>
	<td valign="top" width="20%"><label><?php echo __('state_label'); ?></label>:</td>
	<td>
		   <div class="new_input_field">
		   <?php echo isset($user_details['state_name']) ? $user_details['state_name'] : "--"; ?>
		   </div>
	</td>      
	</tr>
	
	<tr>
	<td valign="top" width="20%"><label><?php echo __('city_label'); ?></label>:</td>        
	<td>
		   <div class="new_input_field">
		   <?php echo (isset($user_details['city_name'])) ? $user_details['city_name'] : "--"; ?>
		   </div>
	</td>   	
	</tr>

	<?php } */?> 

         </table>

        </div>
        <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt"></div></div>
    </div>
</div>  
<script type="text/javascript">
$(document).ready(function(){
	toggle(1);
});
</script>
