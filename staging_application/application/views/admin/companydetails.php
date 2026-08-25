<?php defined('SYSPATH') OR die("No direct access allowed."); //print_r($user_details); ?>

<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle">    
          <table border="0" cellpadding="5" cellspacing="0" width="100%">
	<tr>
	<?php /*
	<td class="titlebold" colspan="2" style="text-transform:uppercase;" ><?php echo ucfirst($user_details['company_name']).'  '.ucfirst(__(' companyinformation')); ?></td>
	*/ ?>
	<td></td>	          
	</tr>
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
	</table>
	<hr>
	<table border="0" cellpadding="5" cellspacing="0" width="100%">
       <?php if($user_details['user_type'] != 'N') { ?>   
                  
	   <tr>
		<td class="titlebold"><?php echo ucfirst(__('companyinformation')); ?></td>
		<td></td>	          
	   </tr>       
       <?php //print_r($user_details); ?>
       
 
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
	
	<?php /*<tr>
	<td valign="top" width="20%"><label><?php echo __('company_bal_label'); ?></label></td>        
	<td>
		   <div class="new_input_field">
		   <?php echo $company_info['company_currency']; ?><?php if(isset($user_details['account_balance'])) { echo $user_details['account_balance']; } ?>				
		   </div>
	</td>   	
	</tr> */ ?>

	<?php if(!empty($company_info))
	{
		?>

	<tr>
	<td valign="top" width="20%"><label><?php echo __('company_domain'); ?></label></td>        
	<td>
		   <div class="new_input_field">
		   <?php if(isset($company_info['company_domain'])) { echo $company_info['company_domain']; } ?><?php echo '.'.DOMAIN_NAME; ?>				
		   </div>
	</td>   	
	</tr>
<?php /*
	<tr>
	<td valign="top" width="20%"><label><?php echo __('company_api_key'); ?></label></td>        
	<td>
		   <div class="new_input_field">
		   <?php if(isset($company_info['company_api_key'])) { echo $company_info['company_api_key']; } ?>			
		   </div>
	</td>   	
	</tr>

	<tr>
	<td valign="top" width="20%"><label><?php echo __('customer_app_url'); ?></label></td>        
	<td>
		   <div class="new_input_field">
		   <?php if(isset($company_info['customer_app_url'])) { echo $company_info['customer_app_url']; } ?>			
		   </div>
	</td>   	
	</tr>
	
	<tr>
	<td valign="top" width="20%"><label><?php echo __('driver_app_url'); ?></label></td>        
	<td>
		   <div class="new_input_field">
		   <?php if(isset($company_info['driver_app_url'])) { echo $company_info['driver_app_url']; } ?>			
		   </div>
	</td>   	
	</tr>


		
	<tr>
	<td valign="top" width="20%"><label><?php echo __('app_name_label'); ?></label></td>        
	<td>
		   <div class="new_input_field">
		   <?php if(isset($company_info['company_app_name'])) { echo $company_info['company_app_name']; } ?>			
		   </div>
	</td>   	
	</tr>

	<tr>
	<td valign="top" width="20%"><label><?php echo __('app_description_label'); ?></label></td>        
	<td>
		   <div class="new_input_field">
		   <?php if(isset($company_info['company_app_description'])) { echo $company_info['company_app_description']; } ?>			
		   </div>
	</td>   	
	</tr>
	
	<tr>
	<td valign="top" width="20%"><label><?php echo __('comapany_tag_line'); ?></label></td>        
	<td>
		   <div class="new_input_field">
		   <?php if(isset($company_info['company_tagline'])) { echo $company_info['company_tagline']; } ?>			
		   </div>
	</td>   	
	</tr>
	
	<tr>
	<td valign="top" width="20%"><label><?php echo __('contact_email_label'); ?></label></td>        
	<td>
		   <div class="new_input_field">
		   <?php if(isset($company_info['company_email_id'])) { echo $company_info['company_email_id']; } ?>			
		   </div>
	</td>   	
	</tr>

	<tr>
	<td valign="top" width="20%"><label><?php echo __('contact_phone_label'); ?></label></td>        
	<td>
		   <div class="new_input_field">
		   <?php if(isset($company_info['company_phone_number'])) { echo $company_info['company_phone_number']; } ?>			
		   </div>
	</td>   	
	</tr>
	
	<?php /*
	<tr>
		<td valign="top" width="20%"><label><?php echo __('notification_settings_label'); ?></label></td>        
		<td>
			   <div class="new_input_field">
			   <?php if(isset($company_info['company_notification_settings'])) { echo $company_info['company_notification_settings']; } ?>			
			   </div>
		</td>   	
	</tr>	
		

	<tr>
	<td valign="top" width="20%"><label><?php echo __('meta_key_label'); ?></label></td>        
	<td>
		   <div class="new_input_field">
		   <?php if(isset($company_info['company_meta_keyword'])) { echo $company_info['company_meta_keyword']; } ?>			
		   </div>
	</td>   	
	</tr>	

	<tr>
	<td valign="top" width="20%"><label><?php echo __('meta_desc_label'); ?></label></td>        
	<td>
		   <div class="new_input_field">
		   <?php if(isset($company_info['company_meta_description'])) { echo $company_info['company_meta_description']; } ?>			
		   </div>
	</td>   	
	</tr>	
				



	<tr>
	<td valign="top" width="20%"><label><?php echo __('sms_enable'); ?></label></td>        
	<td>
		   <div class="new_input_field">
			   
			   <?php $sms_chk=$company_info['company_sms_enable']; ?>
		   <?php if($sms_chk == '1') { echo __('yes'); } if($sms_chk == '0') { echo __('no'); } ?>			
		   </div>
	</td>   	
	</tr>	*/ ?>

	<tr>
	<td valign="top" width="20%"><label><?php echo __('company_currency'); ?></label></td>        
	<td>
		   <div class="new_input_field">
		   <?php if(isset($company_info[0]['company_currency'])) { echo $company_info[0]['company_currency']; } ?>			
		   </div>
	</td>   	
	</tr>	

	<tr>
	<?php /*<td valign="top" width="20%"><label><?php echo __('site_copyrights_label'); ?></label></td>        
	<td>
		   <div class="new_input_field">
		   <?php if(isset($company_info['company_copyrights'])) { echo $company_info['company_copyrights']; } ?>			
		   </div>
	</td>   	
	</tr>

	<tr>
	<td valign="top" width="20%"><label><?php echo __('company_logo_label'); ?></label></td>        
	<td>

		   	   <?php if(!empty($company_info['company_logo'])&&file_exists(DOCROOT.SITE_LOGO_IMGPATH.$company_info['company_logo'])){ ?>
				<div class="site_logo" style="width:160px;">
				<img src="<?php echo URL_BASE.SITE_LOGO_IMGPATH.'/'.$company_info['company_logo'];?>" width="160">
				</div>
				<?php } ?>		

	</td>   	
	</tr>	
	

	<tr>
	<td valign="top" width="20%"><label><?php echo __('company_favicon_label'); ?></label></td>        
	<td>

		   		<?php if(!empty($company_info['company_favicon'])&&file_exists(DOCROOT.SITE_FAVICON_IMGPATH.$company_info['company_favicon'])){ ?>
				<div class="site_logo" style="width:220px;"> 
				<img src="<?php echo URL_BASE.SITE_FAVICON_IMGPATH.$company_info['company_favicon'];?>">
				</div>
				<?php } ?>	

	</td>   	
	</tr>			

	<tr>
	<td valign="top" width="20%"><label><?php echo __('facebook_key'); ?></label></td>        
	<td>
		   <div class="new_input_field">
		   <?php if(isset($company_info['company_facebook_key'])) { echo $company_info['company_facebook_key']; } ?>			
		   </div>
	</td>   	
	</tr>

	<tr>
	<td valign="top" width="20%"><label><?php echo __('facebook_secretkey'); ?></label></td>        
	<td>
		   <div class="new_input_field">
		   <?php if(isset($company_info['company_facebook_secretkey'])) { echo $company_info['company_facebook_secretkey']; } ?>			
		   </div>
	</td>   	
	</tr>

	<tr>
	<td valign="top" width="20%"><label><?php echo __('facebook_share'); ?></label></td>        
	<td>
		   <div class="new_input_field">
		   <?php if(isset($company_info['company_facebook_share'])) { echo $company_info['company_facebook_share']; } ?>			
		   </div>
	</td>   	
	</tr>
	
	<tr>
	<td valign="top" width="20%"><label><?php echo __('twitter_share'); ?></label></td>        
	<td>
		   <div class="new_input_field">
		   <?php if(isset($company_info['company_twitter_share'])) { echo $company_info['company_twitter_share']; } ?>			
		   </div>
	</td>   	
	</tr>	
	
	<tr>
	<td valign="top" width="20%"><label><?php echo __('google_share'); ?></label></td>        
	<td>
		   <div class="new_input_field">
		   <?php if(isset($company_info['company_google_share'])) { echo $company_info['company_google_share']; } ?>			
		   </div>
	</td>   	
	</tr>	
	
	<tr>
	<td valign="top" width="20%"><label><?php echo __('linkedin_share'); ?></label></td>        
	<td>
		   <div class="new_input_field">
		   <?php if(isset($company_info['company_linkedin_share'])) { echo $company_info['company_linkedin_share']; } ?>			
		   </div>
	</td>   	
	</tr>	*/ ?>
	<?php } ?>							
	 <!--Package Details start-->
	   <?php /* if(count($package_details) > 0) { ?>
		<tr>
		<td class="titlebold"><?php echo ucfirst(__('current_package_detail')); ?></td>
		<td></td>	          
	   </tr>
	   
		<tr>
		<td valign="top" width="20%"><label><?php echo __('package_name'); ?></label></td>        
		<td>
			   <div class="new_input_field">
			   <?php if(isset($package_details['package_name'])) { echo $package_details['package_name']; } ?>				
			   </div>
		</td>   	
		</tr>

		<tr>
		<td valign="top" width="20%"><label><?php echo __('package_type'); ?></label></td>        
		<td>
			   <div class="new_input_field">
				<?php if($package_details['package_type'] == 'T' ) { echo __('transaction_based_commission'); } else if($package_details['package_type'] == 'P' ) { echo __('package_based_commission'); } else if($package_details['package_type'] == 'N' ) { echo __('package_based_no_commission'); } ?>

			   </div>
		</td>   	
		</tr>
		
		<tr>
		<td valign="top" width="20%"><label><?php echo __('no_of_taxi'); ?></label></td>        
		<td>
			   <div class="new_input_field">
			   <?php if(isset($package_details['total_taxi'])) { echo $package_details['total_taxi']; } ?>				
			   </div>
		</td>   	
		</tr>
		
		<tr>
		<td valign="top" width="20%"><label><?php echo __('no_of_driver'); ?></label></td>        
		<td>
			   <div class="new_input_field">
			   <?php if(isset($package_details['total_driver'])) { echo $package_details['total_driver']; } ?>				
			   </div>
		</td>   	
		</tr>
		
		<tr>
		<td valign="top" width="20%"><label><?php echo __('expiry_date'); ?></label></td>        
		<td>
			   <div class="new_input_field">
			   <?php if(isset($package_details['upgrade_expirydate'])) { echo date("Y-m-d h:i:s A",strtotime($package_details['upgrade_expirydate'])); } ?>				
			   </div>
		</td>   	
		</tr>

	  <?php }	 
		/*else
		{ ?>
		<tr>
     
		<td>
			   <div class="new_input_field">
			   <?php echo __('no_package_available');  ?>				
			   </div>
		</td>   	
		</tr>
	<?php }  */ ?>	

	  <!--Package Details end-->
	
	<?php } ?>
	
         </table>

        </div>
        <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt"></div></div>
    </div>
</div>  
<input type="hidden" name="company_id" id="company_id" value="<?php echo (isset($user_details['company_id']))?$user_details['company_id']:0; ?>">
<!-- Company Manager -->
<div id="company_manager"></div>
<!-- Company Manager -->
<!-- Company Driver -->
<div id="company_driver"></div>
<!-- Company Driver -->
<!-- Company Taxi -->
<div id="company_taxi"></div>
<!-- Company Taxi -->
<!-- Transaction Details -->
<div id="trans_details"></div>
<!-- Transaction Details -->

<script>
$(document).ready(function(){
	var user_type = "<?php echo $_SESSION['user_type']; ?>";
	if(user_type == 'A') {
		toggle(5);
	} else if(user_type =='C') {
		toggle(14);
	} else if(user_type =='M') {
		toggle(6);
	}
	change_managerinfo();
	change_driverinfo();
	change_taxiinfo();
	//change_transinfo();
});

function change_managerinfo()
{
	var company_id = $("#company_id").val();
	var page_no = '1';
	  $.ajax({
		url:"<?php echo URL_BASE;?>manage/getcompanymanagerlist",
		type:"get",
		data:"company_id="+company_id+"&page="+page_no,
		success:function(data){
			$('#company_manager').html();
			$('#company_manager').html(data);
		},
		error:function(data)
		{
			//alert(cid);
		}
	});
}

function pagin_managerinfo(page_no)
{
	var company_id = $("#company_id").val();
	$.ajax({
	  url:"<?php echo URL_BASE;?>manage/getcompanymanagerlist",
	  type:"get",
	  data:"company_id="+company_id+"&page="+page_no,
	  success:function(data){
		$('#company_manager').html();
		$('#company_manager').html(data);
	  },
	  error:function(data)
	  {
		  //alert(cid);
	  }
  });
}

function change_driverinfo()
{
    var company_id = $("#company_id").val();
	var page_no = '1';
	$.ajax({
	  url:"<?php echo URL_BASE;?>manage/getcompanydriverlist",
	  type:"get",
	  data:"company_id="+company_id+"&page="+page_no,
	  success:function(data){
		$('#company_driver').html();
		$('#company_driver').html(data);
	  },
	  error:function(data)
	  {
		  //alert(cid);
	  }
  });
}

function pagin_driverinfo(page_no)
{
	var company_id = $("#company_id").val();
	$.ajax({
	  url:"<?php echo URL_BASE;?>manage/getcompanydriverlist",
	  type:"get",
	  data:"company_id="+company_id+"&page="+page_no,
	  success:function(data){
		$('#company_driver').html();
		$('#company_driver').html(data);
	  },
	  error:function(data)
	  {
		  //alert(cid);
	  }
  });
}

function change_taxiinfo()
{
    var company_id = $("#company_id").val();
	var page_no = '1';
	$.ajax({
	  url:"<?php echo URL_BASE;?>manage/getcompanytaxilist",
	  type:"get",
	  data:"company_id="+company_id+"&page="+page_no,
	  success:function(data){
		$('#company_taxi').html();
		$('#company_taxi').html(data);
	  },
	  error:function(data)
	  {
		  //alert(cid);
	  }
  });
}

function pagin_taxiinfo(page_no)
{
	var company_id = $("#company_id").val();
	$.ajax({
	  url:"<?php echo URL_BASE;?>manage/getcompanytaxilist",
	  type:"get",
	  data:"company_id="+company_id+"&page="+page_no,
	  success:function(data){
		$('#company_taxi').html();
		$('#company_taxi').html(data);
	  },
	  error:function(data)
	  {
		  //alert(cid);
	  }
  });
}

function change_transinfo()
{
    var company_id = $("#company_id").val();
	var page_no = '1';
	$.ajax({
	  url:"<?php echo URL_BASE;?>manage/get_translist",
	  type:"get",
	  data:"company_id="+company_id+"&page="+page_no,
	  success:function(data){
		$('#trans_details').html();
		$('#trans_details').html(data);
	  },
	  error:function(data)
	  {
		  //alert(cid);
	  }
  });
}

function pagin_transinfo(page_no)
{
	var company_id = $("#company_id").val();
	$.ajax({
		url:"<?php echo URL_BASE;?>manage/get_translist",
		type:"get",
		data:"company_id="+company_id+"&page="+page_no,
		success:function(data){
			$('#trans_details').html();
			$('#trans_details').html(data);
		},
		error:function(data)
		{
			//alert(cid);
		}
	});
}
</script>