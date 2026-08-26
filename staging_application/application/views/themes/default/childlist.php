<?php 
	defined('SYSPATH') OR die('No direct access allowed.'); 
	foreach($dashstyles as $file => $type)
	{ 
	   echo HTML::style($file, ['media' => $type]); 
	}    
	foreach($dashscripts as $file => $type)
	{ 
	   echo HTML::script($type); 
	}   
 ?>
	<!-- Navigation Start -->
	<div class="span2 main-menu-span">
		<div class="well nav-collapse sidebar-nav">
			  <?php echo new View(USERVIEW."/passenger_sidebar"); ?>
		</div><!--/.well -->
	</div><!--/span-->
	<!-- Navigation End -->
			
<div id="content" class="span10">
	 <?php
//For Notice Messages
								//===================
								$sucessful_message=Message::display();
//echo $sucessful_message;		
//$Message->message;
		    if($sucessful_message) { ?>

				<div id="messagedisplay">
					<div class="alert alert-success">
                        <div class="success_float_tt">
							<button type="button" class="close" data-dismiss="alert">×</button>
		                    <label style="float: left; margin: 4px 0 0 6px;"><?php echo $sucessful_message; ?></label>
                        </div>
                    </div>
			    </div>
								<?php } ?>    
	<div class="bread_crumb_holder">
			<ul class="breadcrumb">
				<li>
					<a href="<?php echo URL_BASE; ?>"><?php echo __('home'); ?></a> <span class="divider">/</span>
				</li>
				
				<li>
					<a href="#" title="<?php echo __('child_member_list'); ?>"><?php echo __('child_member_list'); ?></a>
				</li>
			</ul>
		</div>
		
        <div class="row-fluid sortable">
            <div class="box span12">
                <div class="box-header well" data-original-title>
                    <h2><i class="icon icon-blue icon-home "></i><?php echo " " . __('child_member_list'); ?></h2>
					 
                    <div class="box-icon">		
                    <a href="<?php echo URL_BASE;?>passengers/addchild"><i class="icon icon-add"></i></a>				                                         
                    </div>
                     
                </div>

                <div class="box-content">
					
<?php if (count($childlist) > 0) { ?>
<form method="post" name="paymentoption" id="paymentoption" action="paymentoption">
                        <table class="table table-hover table-bordered">

                            <tr>
                                <td>#</td>
                                <td width="40%"><b><?php echo __('name'); ?></b></td>
                                <td width="20%"><b><?php echo __('phone'); ?></b></td>
                                <td width="30%"><b><?php echo __('email'); ?></b></td>
                                <td width="40%"><b><?php echo __('account_type'); ?></b></td>
                                <td width="40%"><b><?php echo __('profile_image'); ?></b></td>	
                                <td width="40%"><b><?php echo __('delete_child'); ?></b></td>
                                <td width="40%"><b><?php echo __('allow_creditcard'); ?></b></td>
			
                            </tr>
							<?php
							$offset = $offset + 1;
							$i = 1;
							
						   //echo '<pre>'; print_r($childlist);exit;
						foreach ($childlist as $values)
						{
						?>
						<tr>			
						<td><?php echo $i; ?></td>
						<td><?php echo $values['name'];?></td>
						<td><?php echo $values['phone'];?></td>
						<td><?php echo $values['email']; ?></td>
						<td><?php echo $values['account_type_name']; ?></td>
						<?php
							if($values['profile_image'] != '') { 
								$img = 'thumb_'.$values['profile_image'];
								$profile = URL_BASE.'public/uploads/passenger/'.$img;
							} else {
								$profile = URL_BASE.'public/images/no_image.png';
							}
							if(file_exists($profile)) {
								$profile = $profile;
							} else {
								$profile = $profile;
							}
							
						 ?>
						<td><img src="<?php echo $profile; ?>" /></td>
						
						<td><input type="checkbox" name="delete_child[]" id="<?php echo $values['_id']?>" value="<?php echo $values['_id']?>" class="check"/>
						<input type="hidden" name="delete_child_flag" class="delete_child_flag" value="1"/></td>
						
						<td><input type="checkbox" name="allow_child[]" id="<?php echo $values['_id']?>" value="<?php echo $values['_id']?>" class="check_allow" <?php if($values['allow_creditcard'] == 1){?>checked = "checked"<?php }?> />
						<input type="hidden" name="allow_child_flag" class="allow_child_flag" value="2"/>
						<input type="hidden" name="request_id" id="request_id_<?php echo $values['_id']?>" value="<?php echo $values['request_id']?>"/>
						</td>
						
						</tr>
						<?php $i = $i + 1;
						} ?>

                        </table>
                        </form>
                        <?php } else {
                            echo __('no_data');
                        } ?>
                </div>
                <!-- Pagination start -->
               
                <div class="pagination2">
                    <?php if ($childlist > 0): ?>
                        <p><?php echo $pag_data->render(); ?></p>  
                    <?php endif; ?> 
                </div>
    
			</div>
		
     </div>

</div>


<script language="javascript" type="text/javascript">
$(document).ready(function() {
     //for sign in menu  
     $(".setting").addClass("active");
     
     // remove child
     
		$(".check").click(function(e){
		
		var child_id = $(this).attr('id');
		var flag = $(".delete_child_flag").val(); 
		var checkflag = $(this).prop('checked');
		var request_id = $("#request_id_"+child_id).val();
		
		var checkstr =  confirm('Are you sure you want to remove this child?');
	
	if(checkstr == true){
		
			if(checkflag == true){
				
			   checkflag = 1;
						
			   url = '<?php echo URL_BASE.MOB_API_URL;?>/?type=child_members_list_operations';
			   var parameter = JSON.stringify({ "child_id":child_id,"flag":flag,"checkflag":checkflag,"request_id":request_id});	
			   
			  
				 var posting = $.post( url,parameter );

					  posting.done(function( data ) {
						 var obj = $.parseJSON(data);
							if(obj.status== 1){
								alert(obj.message);	 
								window.location.href = "<?php echo URL_BASE; ?>passengers/childlist";
							}else {
								alert(obj.message.checkflag);	
								window.location.href = "<?php echo URL_BASE; ?>passengers/childlist"; 
							}
							
						}); 
			   
				
			}
		} else{
			
			return false;
			
		}	
		


		});
		
		// allow credit card
		
		$(".check_allow").click(function(e){
		
		var child_id = $(this).attr('id');
		var flag = $(".allow_child_flag").val(); 
		var checkflag = $(this).prop('checked');
		var request_id = $("#request_id_"+child_id).val();
		var checkstr =  confirm('Are you sure?');
			
		if(checkstr == true){
				
			   if(checkflag==true)	
			   checkflag = 1;
			   else
			   checkflag = 0;
			   
			   url = '<?php echo URL_BASE.MOB_API_URL;?>/?type=child_members_list_operations';
			   var parameter = JSON.stringify({ "child_id":child_id,"flag":flag,"checkflag":checkflag,"request_id":request_id});	
			   
			  
				 var posting = $.post( url,parameter );

					  posting.done(function( data ) {
						 var obj = $.parseJSON(data);
							if(obj.status== 1){
								alert(obj.message);	 
								window.location.href = "<?php echo URL_BASE; ?>passengers/childlist";
							}else {
								alert(obj.message);	 
							}
							
						}); 
			   
		
		} else{
			
			return false;
			
		}	
		


		});
  
     
});
</script>
