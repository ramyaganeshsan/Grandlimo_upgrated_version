<?php defined('SYSPATH') OR die('No direct access allowed.'); 
foreach($dashstyles as $file => $type)
	{ 
	   echo HTML::style($file, array('media' => $type)); 
	}    
	foreach($dashscripts as $file => $type)
	{ 
	   echo HTML::script($type); 
	}  
 
?>

<link rel="stylesheet" href="<?php echo URL_BASE;?>public/css/select2.css"/>
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
					<?php if($my_id != 1 ) { ?>
					<a href="#" title="<?php echo __('memberstrip'); ?>"><?php echo __('memberstrip'); ?></a>
					<?php } else  { ?>
				   <a href="#" title="<?php echo __('mymemberstrip'); ?>"><?php echo __('mymemberstrip'); ?></a>
						<?php } ?>
				</li>
			</ul>
		</div>
	<div class="profile_total1">		
		<div class="profile_rgt">	
		  <fieldset>
			<legend><?php if($my_id != 1 ) { ?><?php echo __('memberstrip'); ?><?php } else { ?> <?php echo __('mymemberstrip'); ?><?php } ?></legend>
			<?php if($my_id != 1 ) { ?><div class="control-group">
			 <div class="controls">
				 <select name="member_type" id="member_type" onchange='change_member_type(this.value);'>
					  <option value=''><?echo __('choose_member_type')?></option>
					  <?php foreach($member_type as $member) { ?>
						   <option value="<?php echo $member['_id'];?>"><?php echo $member['account_type'];?></option>
						  <?php } ?>
				 </select>	  
				</div>
			</div>
			<?php } ?>
			<div class="control-group member_list_div_outer"  style="display:none;">
				<div class="member_list_div"></div>
			</div>
			<input type="hidden" name="passenger_id" id="passenger_id" value="<?php echo $userid;?>" />
			</fieldset>
		</div>
	</div>
	<div id="reports"></div>
</div>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/select2.js"></script>
<script>
<?php if($my_id == 1 ) { ?>
	set_passenger($('#passenger_id').val());
	<?php } ?>
function change_member_type(val){
	url = '<?php echo URL_BASE;?>/passengers/get_members_list';
	var posting = $.post( url, { passenger_id: $('#passenger_id').val(), account_type: val } );
	posting.done(function( data ) {
		if(data != 0){
		$('.member_list_div').html( data );$('.member_list_div_outer').show();} else{ alert("<?php echo __('no_child'); ?>");$('#reports').html('');
			$('.member_list_div_outer').hide();}
		}); 
	} 
	function set_passenger(childid){
		var dataS = "passenger_id="+childid;
		var response;
		$.ajax
				({ 			
					type: "POST",
					url: SrcPath+"passengers/memberstrip_report", 
					data: dataS, 
					cache: false, 
					dataType: 'html',
					success: function(response) 
					{ 		
						$('#reports').html(response);
					} 
					 
				});	
	}
	$("#member_type").select2();
	function canceltrip(log_id){
		//alert(log_id);
		var canceltrip = confirm('Are you sure to cancel trip?');   
			if (canceltrip) 
			{
				$('.cancel_journey #'+log_id).html('<img width="16px" height="11px" alt="ajax-loading" src="'+SrcPath+'/public/css/img/ajax-loaders/ajax-loader-1.gif" />');	
				var dataS = "value="+log_id;
				var response;
				$.ajax
				({ 			
					type: "POST",
					url: SrcPath+"passengers/cancel_upcoming_trips", 
					data: dataS, 
					cache: false, 
					dataType: 'html',
					success: function(response) 
					{ 			
							$('#'+log_id).html(response);
					} 
					 
				});	
			 }
         }
</script>
