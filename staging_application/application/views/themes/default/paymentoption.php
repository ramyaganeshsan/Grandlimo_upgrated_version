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
					<a href="#" title="<?php echo __('payment_option'); ?>"><?php echo __('payment_option'); ?></a>
				</li>
			</ul>
		</div>
		
        <div class="row-fluid sortable">
            <div class="box span12">
                <div class="box-header well" data-original-title>
                    <h2><i class="icon icon-blue icon-home "></i><?php echo " " . __('card_details'); ?></h2>
					 
                    <div class="box-icon">		
                    <a href="<?php echo URL_BASE;?>passengers/addcard"><i class="icon icon-add"></i></a>				                                         
                    </div>
                     
                </div>

                <div class="box-content">
<?php if (count($carddetails) > 0) { ?>
<form method="post" name="paymentoption" id="paymentoption" action="paymentoption">
                        <table class="table table-hover table-bordered">

                            <tr>
                                <td>#</td>
                                <td width="40%"><b><?php echo __('card_no'); ?></b></td>
                                <td width="20%"><b><?php echo __('card_verification_no'); ?></b></td>
                                <td width="30%"><b><?php echo __('expiration_date'); ?></b></td>
                                <td width="40%"><b><?php echo __('edit'); ?></b></td>
                                <td width="40%"><b><?php echo __('delete'); ?></b></td>
                                <td width="40%"><b><?php echo __('default_card'); ?></b></td>				
                            </tr>
    <?php
    $offset = $offset + 1;
    $i = $offset;
    $m = 1;
    $total_fare = "";
   //echo '<pre>'; print_r($carddetails);exit;
foreach ($carddetails as $values)
{ ?>
<tr>			
<td><?php echo $m; ?></td>
<td><?php
$cardno = encrypt_decrypt('decrypt',$values['creditcard_no']);
echo $ccNumber = repeatx($cardno,'X',4); 
?></td>
<td><?php
if(isset($values['creditcard_cvv'])){
$get_length = strlen($values['creditcard_cvv']);$get_cvv='';for($i=1;$i<=$get_length;$i++){$get_cvv = $get_cvv.'X'; }
echo $get_cvv;

}else{ echo '';} ?></td>
<td><?php echo $values['expdatemonth'].'-'.$values['expdateyear']; ?></td>
<td>
<div class="btn btn-small btn-inverse" ><a href="<?php echo URL_BASE;?>passengers/editcard/<?php echo $values['passenger_cardid']; ?>"><?php echo __('edit'); ?></a><i class="icon-chevron-right icon-white"></i>
</td>
<td>
	 <?php if($values['default_card'] == 1){?><?php } else { ?>
<div class="btn btn-small btn-inverse" ><a href="<?php echo URL_BASE;?>passengers/deletecard/<?php echo $values['passenger_cardid']; ?>"><?php echo __('delete'); ?></a><i class="icon-chevron-right icon-white"></i>
<?php } ?>
</td>

<td><input type="radio" name="default_card" <?php if($values['default_card'] == 1){?>checked = "checked"<?php }?> value="<?php echo $values['passenger_cardid']; ?>"/></td>
</tr>
<?php $i = $i + 1;
 $m = $m + 1;
} ?>
		<tr>
				<td colspan="6"></td>
				<td><div class="controls"><input type="submit" class="btn btn-inverse" name="update" title="<?php echo __('Update');?>" value="<?php echo __('button_update');?>" /></div></td>
			</tr> 
                        </table>
                        </form>
                        <?php } else {
                            echo __('no_data');
                        } ?>
                </div>
                <!-- Pagination start -->
               
                <div class="pagination2">
                    <?php if ($carddetails > 0): ?>
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
});
</script>
