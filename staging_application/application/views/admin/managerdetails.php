<?php defined('SYSPATH') OR die("No direct access allowed.");?>

<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle">    
          <table border="0" cellpadding="5" cellspacing="0" width="100%">
	<tr>
	<td class="titlebold"><?php echo ucfirst(__('personalinform')); ?></td>
	<td></td>	          
	</tr>
           <tr>
           <td valign="top" width="20%"><label><?php echo __('firstname'); ?></label></td>        
	   <td>
		   <div class="new_input_field">
		   <?php if(isset($user_details['name'])) { echo $user_details['name']; } else { echo ''; } ?>
		   </div>
	   </td>   	
           </tr> 	
				   
           <tr>
           <td valign="top" width="20%"><label><?php echo __('lastname'); ?></label></td>        
	   <td>
		   <div class="new_input_field">
		   <?php if(isset($user_details['lastname'])) { echo $user_details['lastname']; } ?>	
		   </div>
	   </td>   	
           </tr> 
           
           <tr>
           <td valign="top" width="20%"><label><?php echo __('email'); ?></label></td>        
	   <td>
		   <div class="new_input_field">	
		   <?php if(isset($user_details['email'])) { echo $user_details['email']; } ?>	
		   </div>
	   </td>   	
           </tr> 
           
           <tr>
           <td valign="top" width="20%"><label><?php echo __('mobile'); ?></label></td>        
	   <td>
		   <div class="new_input_field">
		   <?php if(isset($user_details['phone'])) { echo $user_details['phone']; } ?>	
		   </div>
	   </td>   	
           </tr>                       		   
		   
           <tr>
           <td valign="top" width="20%"><label><?php echo __('address'); ?></label></td>        
	   <td>
		   <div class="new_input_field">
		   <?php if(isset($user_details['address'])) { echo $user_details['address']; } ?>		
		   </div>
	   </td>   	
           </tr>  

       <?php if($user_details['user_type'] != 'N') { ?>   
                  
	   <tr>
		<td class="titlebold"><?php echo ucfirst(__('companyinformation')); ?></td>
		<td></td>	          
	   </tr>       
       
       
 
           <tr>
           <td valign="top" width="20%"><label><?php echo __('companyname'); ?></label></td>        
	   <td>
		   <div class="new_input_field">
		   <?php if(isset($user_details['company_name'])) { echo $user_details['company_name']; } ?>			
		   </div>
	   </td>   	
           </tr>  
                      		   
           <tr>
           <td valign="top" width="20%"><label><?php echo __('companyaddress'); ?></label></td>        
	   <td>
		   <div class="new_input_field">
		   <?php if(isset($user_details['company_address'])) { echo $user_details['company_address']; } ?>				
		   </div>
	   </td>   	
           </tr>  	          

	<tr>

	<td valign="top" width="20%"><label><?php echo __('country_label'); ?></label></td>        
	<td>
		   <div class="new_input_field">
		   <?php if(isset($user_details['country_name'])) { echo $user_details['country_name']; } ?>				
		   </div>
	</td>   	
	</tr>

	<tr>
	<td valign="top" width="20%"><label><?php echo __('state_label'); ?></label></td>
	<td>
		   <div class="new_input_field">
		   <?php if(isset($user_details['state_name'])) { echo $user_details['state_name']; } ?>				
		   </div>
	</td>      
	</tr>
	
	<tr>
	<td valign="top" width="20%"><label><?php echo __('city_label'); ?></label></td>        
	<td>
		   <div class="new_input_field">
		   <?php if(isset($user_details['city_name'])) { echo $user_details['city_name']; } ?>				
		   </div>
	</td>   	
	</tr>
	<?php } ?>
	
         </table>

        </div>
        <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt"></div></div>
    </div>
</div>  
<input type="hidden" name="manager_id" id="manager_id" value="<?php echo $id; ?>">

<!-- Manager Driver -->
<div id="manager_driver"></div>
<!-- Manager Driver -->
<!-- Manager Taxi -->
<div id="manager_taxi"></div>
<!-- Manager Taxi -->

<script>
$(document).ready(function(){
	toggle(14);
	change_driverinfo();
	change_taxiinfo();
});
function change_driverinfo()
{
    var company_id = $("#manager_id").val();
	var page_no = '1';
	$.ajax({
		url:"<?php echo URL_BASE;?>manage/getmanagerdriverlist",
		type:"get",
		data:"manager_id="+company_id+"&page="+page_no,
		success:function(data){
			$('#manager_driver').html();
			$('#manager_driver').html(data);
		},
		error:function(data)
		{
			//alert(cid);
		}
	});
}

function pagin_driverinfo(page_no)
{
	var company_id = $("#manager_id").val();

	$.ajax({
		url:"<?php echo URL_BASE;?>manage/getmanagerdriverlist",
		type:"get",
		data:"manager_id="+company_id+"&page="+page_no,
		success:function(data){
			$('#manager_driver').html();
			$('#manager_driver').html(data);
		},
		error:function(data)
		{
			//alert(cid);
		}
	});	
}

function change_taxiinfo()
{
    var company_id = $("#manager_id").val();
	var page_no = '1';
	$.ajax({
		url:"<?php echo URL_BASE;?>manage/getmanagertaxilist",
		type:"get",
		data:"manager_id="+company_id+"&page="+page_no,
		success:function(data){
			$('#manager_taxi').html();
			$('#manager_taxi').html(data);
		},
		error:function(data)
		{
			//alert(cid);
		}
	});
}

function pagin_taxiinfo(page_no)
{
	var company_id = $("#manager_id").val();
	$.ajax({
		url:"<?php echo URL_BASE;?>manage/getmanagertaxilist",
		type:"get",
		data:"manager_id="+company_id+"&page="+page_no,
		success:function(data){
			$('#manager_taxi').html();
			$('#manager_taxi').html(data);
		},
		error:function(data)
		{
			//alert(cid);
		}
	});
}
</script>