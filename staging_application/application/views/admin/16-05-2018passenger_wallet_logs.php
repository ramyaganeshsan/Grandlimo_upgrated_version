<?php defined('SYSPATH') OR die("No direct access allowed.");?>
<style>
.alert-message {
    font-family: sans-serif;
    margin: 20px;
    font-weight: bold;
    
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    
    padding: 1px;
    position: relative;
    font-size: 12px;
    width:570px;
}

.alert-message .close {
    color: #745050;
    text-decoration: none;
    float: right;
    margin: 7px 7px 0 0;
    font-weight: bold;
    font-size: 16px;
}

.alert-message p {
    display: block;
    margin: 0;
    padding: 8px 20px 7px 10px;
    
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
}

.error {
    background-color: #d29191;
    
    -webkit-box-shadow: 0px 0px 6px rgba(244,187,187,0.7);
    -moz-box-shadow: 0px 0px 6px rgba(244,187,187,0.7);
    box-shadow: 0px 0px 6px rgba(244,187,187,0.7);
}

.error p {
    background-color: #f4baba;
    
    background-image: -webkit-gradient(linear, left top, left bottom, from(#f4baba), to(#db7f7f));
    background-image: -webkit-linear-gradient(top, #f4baba, #db7f7f);
    background-image: -moz-linear-gradient(top, #f4baba, #db7f7f);
    background-image: -ms-linear-gradient(top, #f4baba, #db7f7f);
    background-image: -o-linear-gradient(top, #f4baba, #db7f7f);
    background-image: linear-gradient(top, #f4baba, #db7f7f);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorStr='#f4baba', EndColorStr='#db7f7f');
    
    -webkit-box-shadow: inset 0px 1px 0px #f7d0d0;
    -moz-box-shadow: inset 0px 1px wa0px #f7d0d0;
    box-shadow: inset 0px 1px 0px #f7d0d0;
    
    color: #745050;
    text-shadow: 1px 1px 0px #eaadad;
    font-size:13px;
}
</style>
<?php

//For search values
//=================
$user_type_val = isset($srch["user_type"]) ? $srch["user_type"] :''; 
$company_val = isset($srch["filter_company"]) ? $srch["filter_company"] :''; 
$status_val = isset($srch["status"]) ? $srch["status"] :''; 							
$keyword = isset($srch["keyword"]) ? $srch["keyword"] :''; 

//For CSS class deefine in the table if the data's available
//===========================================================
$total_company=count($all_company_list);

$table_css=$export_excel_button="";
if($total_company>0)
{ 
	$table_css='class="table_border"'; 

	$export_excel_button='
        				<input type="button"  title="'.__('button_export').'" class="button" value="'.__('button_export').'" 
        				onclick="location.href=\''.URL_BASE.'manage/export?keyword='.$keyword.'&status='.$status_val.'&type='.$user_type_val.'\'" />
    				';
}?>

<script type="text/javascript">
	$(function(){
		$(".wmd-view-topscroll").scroll(function(){
			$(".wmd-view")
				.scrollLeft($(".wmd-view-topscroll").scrollLeft());
		});
		$(".wmd-view").scroll(function(){
			$(".wmd-view-topscroll")
				.scrollLeft($(".wmd-view").scrollLeft());
		});
	});
</script>

<div class="container_content fl clr">
	<div class="cont_container mt15 mt10">
		<div class="content_middle">
		<?php
		/*if($availabilitycount < 0)
		{?>
		<div class="error alert-message">
		    <a  class="close">!!</a>
		    <?php if($_SESSION['user_type'] =='C')
		    { ?>
			<p><?php echo __('kindly_deactivate_any').substr($availabilitycount,1).__('driver_from_list'); ?> </p>
		    <?php }
		    else
		    {  
		    	if($total_company > 0) { ?>
		    	<p><?php echo __('kindly_deactivate_any').substr($availabilitycount,1).__('driver_from_list').__('or_contact_company_owner'); ?> </p>
		    	<?php }
		    	else { ?>
		    	<p><?php echo __('kindly_contact_company_owner'); ?> </p>
		    	<?php } ?>
		 <?php } ?>
		</div>
		<?php	
		} */
		?>		 
        <form method="get" class="form" name="managedriver" id="managedriver" action="<?php echo URL_BASE; ?>/manage/wallet_logs">
<table class="list_table1" border="0" width="65%" cellpadding="5" cellspacing="0">
 <tr>
                        <td valign="top"><label><?php echo __('keyword_label'); ?></label></td>
                        <td >
                            <div class="new_input_field">
                                <input type="text" name="keyword"  maxlength="256" id="keyword" value="<?php echo isset($srch['keyword']) ? trim($srch['keyword']) : ''; ?>" />
                            </div>
                            <span class="search_info_label"><?php echo __('search_by_name_phone_email'); ?></span>
                        </td>
                        <input type="hidden" name="status"  maxlength="256" id="keyword" value="1" />
                       <?php /* <td valign="top"><label><?php echo __('status_label'); ?></label></td>
                        <td valign="top">
			<div class="selector" id="uniform-user_type">
                            <select class="select2" name="status" id="status" onchange="this.form.submit()">
                                <option value=""><?php echo __('select_label'); ?></option>    
                                <?php
                                foreach ($status as $status_key => $allstatus) {

                                    $selected_status = ($status_val == $status_key) ? ' selected="selected" ' : " ";
                                    ?>  
                                    <option value="<?php echo $status_key; ?>"  <?php echo $selected_status; ?> ><?php echo ucfirst($allstatus); ?></option>
                                <?php }  ?>
                            </select>
                            </div>
                        </td>
                         <?php /*if($_SESSION['user_type'] == 'A') { ?>
                        <td valign="top"><label><?php echo __('company'); ?></label></td>
                        <td valign="top">
			<div class="selector" id="uniform-user_type">
                            <select class="select2" name="filter_company" id="filter_company" onchange="this.form.submit()">
                                <option value=""><?php echo __('select_label'); ?></option>    
                                <?php 
                                foreach ($get_allcompany as $comapany_list) {

                                    $selected_status = ($company_val == $comapany_list['cid']) ? ' selected="selected" ' : " ";
                                    ?>  
                                    <option value="<?php echo $comapany_list['cid']; ?>"  <?php echo $selected_status; ?> ><?php echo ucfirst($comapany_list['company_name']); ?></option>
                                <?php }  ?>
                            </select>
                            </div>
                        </td>     
                        <?php }*/ ?>  
                                                
					</tr>
					<tr>
                        <td valign="top"><label>&nbsp;</label></td>
                        <td>
                            <!--[if IE]>
                            <input type="text" style="display: none;" disabled="disabled" size="1" />
                            <![endif]-->
                            <div class="button brownB">
                                <input type="submit" value="<?php echo __('button_search'); ?>" name="search_user" title="<?php echo __('button_search'); ?>" />
                            </div>
                            <div class="button blueB">
                                <input type="button" value="<?php echo __('button_cancel'); ?>" title="<?php echo __('button_cancel'); ?>" onclick="location.href = '<?php echo URL_BASE; ?>manage/wallet_logs'" />
                            </div>
                        </td>
                    </tr>
                </table>
				<div id="response"></div>
                		<div class="widget">
		<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" /><h6><?php echo $page_title; ?></h6>
		<div style="width:auto; float:right; margin: 4px 3px;">
		<div class="button greyishB"> <?php //echo $export_excel_button; ?></div>                       

		</div>
		</div>
<?php if($total_company > 0){ ?>
	<div class= "overflow-block">
<?php } ?>		
<table cellspacing="1" cellpadding="1" width="100%" style="border-top:1px solid #cdcdcd;" align="center" class="sTable responsive">
<?php if($total_company > 0){ ?>
<thead>
	<tr>
		<td align="left" width="1%"><?php echo __('sno_label'); ?></td>
		<td align="left" style="text-align:left;" width="3%"><?php echo ucfirst(__('passenger_name')); ?></td>
		<!-- <td align="left" style="text-align:left;" width="3%"><?php echo __('passenger_email_label'); ?></td> -->
    <td align="left" style="text-align:left;" width="3%"><?php echo __('passenger_phone'); ?></td>
    <td align="left" style="text-align:left;" width="1%"><?php echo __('current_wallet_amt'); ?></td>
        <td align="left" style="text-align:left;" width="1%"><?php echo __('amount_credit_debit'); ?></td>
        <td align="left" style="text-align:left;" width="1%"><?php echo __('recharge_type'); ?></td>
		<td align="left" style="text-align:left;" width="1%"><?php echo __('transaction_id'); ?></td>
    <td align="left" style="text-align:left;" width="2%"><?php echo __('created_date'); ?></td>
	</tr>
</thead>
<tbody>	
		<?php
		/* For Serial No */
		$sno=$Offset; 
		
		 foreach($all_company_list as $listings) {
		 //S.No Increment
		 //==============
		 $sno++;
        
         //For Odd / Even Rows
         //===================
         $trcolor=($sno%2==0) ? 'oddtr' : 'eventr';  
		 
        ?>     
			<td align="center"><?php echo $sno; ?></td>
			<td align="left"><a title="<?php echo ucfirst($listings['passenger_name']); ?>" href="<?php echo URL_BASE.'manage/passengerinfo/'.$listings['id'];?>"><?php echo wordwrap($listings['passenger_name'],30,'<br/>',1); ?></a></td>
     <!--  <td><?php echo isset($listings['passenger_email']) ? wordwrap($listings['passenger_email'],25,'<br />',1) : '-'; ?></td> -->
			<td><?php echo isset($listings['passenger_phone']) ? $listings['passenger_phone'] : '-'; ?></td>
      <td><?php echo CURRENCY.$listings['wallet_amount']; ?>
            <td><?php
            if($listings['change_amount'] < 0)
            {
             echo CURRENCY.'<span class="negative">'.$listings['change_amount'].'</span>';
            }
            else
            {
               echo CURRENCY.$listings['change_amount']; 
            } 
            ?></td>
            <td><?php switch($listings['recharge_type'])
            {
                case 1:
                $recharge_type = __('manual_pay'); 
                break;
                case 2:
                $recharge_type = __('credit_pay');
                break;
                case 3:
                $recharge_type = __('pending_pay');
                break;
                case 4:
                $recharge_type = __('trip_payment');
                break;
                case 5:
                $recharge_type = __('trip_pending_payment');
                break; 
                case 6:
                $recharge_type = __('pending_repayment');
                break;
                case 7:
                $recharge_type = __('dispatcher_alteration');
                break;
                case 8:
                $recharge_type = __('knet_payment');
                break;
                default:
                $recharge_type = __('manual_pay'); 
                break;
            }
            echo $recharge_type;
             ?></td>
            <td><?php 
            if($listings['recharge_type'] == 4 || $listings['recharge_type'] == 5)
            {
                $trip_id = isset($listings['trip_id'])?$listings['trip_id']:'';
                if($trip_id != '')
                {
             ?>
            <a title="<?php echo $trip_id; ?>" href="<?php echo URL_BASE.'transaction/transaction_details/'.$trip_id;?>"><?php echo $trip_id; ?></a>
            <?php }
                  else
                  {
                    echo "-";
                  }
                }
            else
            {
            $transaction_id= isset($listings['transaction_id'])?$listings['transaction_id']:'-';
            echo $transaction_id;
            }
              ?></td>
			<td><?php echo Commonfunction::convertphpdate('Y-m-d h:i:s A',$listings['created_date']) ?></td>


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
<?php if ($total_company > 0) { ?>
</div>
</div>
</div>
<?php } ?>
</form>
</div>
</div>
<div class="clr">&nbsp;</div>
<div class="pagination">
		<?php if($total_company > 0): ?>
		 <p><?php echo $pag_data->render(); ?></p>  
		<?php endif; ?> 
  </div>
  <div class="clr">&nbsp;</div>

<!--** Multiple select starts Here ** -->
<?php /*if(count($all_company_list) > 0)
       { ?>
          <div class="select_all">
                <b><a href="javascript:selectToggle(true, 'managedriver');"><?php echo __('all_label');?></a></b><span class="pr2 pl2">|</span><b><a href="javascript:selectToggle(false, 'managedriver');"><?php echo __('select_none');?></a></b>

                <span style="padding-left:10px;">
                    <select name="more_action" id="more_action">
                        <option value=""><?php echo __('Change Status'); ?></option>
                     
                        
                         <option value="active_driver_request" ><?php echo __('Active'); ?></option>
                        <?php if(COMPANY_CID!=1 || SUBDOMAIN!='demo') { ?> 
						<option value="block_driver_request" ><?php echo __('Block'); ?></option>
                        <option value="trash_driver_request" ><?php echo __('Trash'); ?></option> 
                        <!--<option value="mute_driver_request" ><?php //echo __('Mute'); ?></option>-->
                        <?php } ?>
                    </select>
                 </span>
	        </div>
        <?php
        }*/ ?>
<!--** Multiple select ends Here ** -->


</div>
</div>

<div class="modal fade wallet_popup" id="mywallet" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" onclick="clearWalletForm();">&times;</button>
          <h3 class="modal-title">Add wallet</h3>
        </div>
        <div class="modal-body displ">
      
      <?php /*<form action="" method="post" class="form" id="add-wallet" name="add-wallet"  enctype="multipart/form-data">      

      <div class="control-group">       

              <div class="form-group">
                <div class="col-sm-3"><label>Passenger name</label></div>               
                <div class="new_input_field"><input class="form-control " name="user_name" id="passenger_name" autofocus type="text" value="" maxlength="100">
                <input class="form-control " name="passenger" id="passenger_id" type="hidden" value="">
                <span id="passenger_error" class="error" ></span>
                </div>              
              </div>

              <div class="form-group ">
                <div class="col-sm-3"><label>Negative</label></div>               
                <div class="new_input_field"><input class="form-control " name="negative" id="negative"  type="checkbox" value="1" maxlength="5" >
                </div>                 
              </div>              

              <div class="form-group">
                <div class="col-sm-3"><label>Amount</label></div>               
                <div class="new_input_field"><input class="form-control " name="amount" id="amount" autofocus type="text" value="" maxlength="5" onkeypress="return isNumberOnly(event,this,1)">
                <span id="amount_error" class="error" ></span>
                </div>                 
              </div>             
              
              <div class="form-group ">                
                <div class="col-sm-3">
                <button type="button" id="submit_btn" class="btn btn-primary" onclick="ValidateWallet();">Submit</button>                               
                 <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="clearWalletForm();">Cancel</button>
                 </div>
              </div>             
                            
      </div>
       </form>  */ ?>
       <form  id="add-wallet" class="form-horizontal" role="form">
            <div class="form-group" style="margin-bottom:10px">
                <div class="col-sm-3"><label>Passenger </label></div>
                <div class="col-sm-4">
                    Search By
                <label class="checkbox"><input class="form-control " name="search_by" id="search_by"  type="radio" value="1" checked="checked" maxlength="5" ></label>
                Name
                <label class="checkbox"><input class="form-control " name="search_by" id="search_by"  type="radio" value="2" maxlength="5" ></label>
                Email
                <label class="checkbox"><input class="form-control " name="search_by" id="search_by"  type="radio" value="3" maxlength="5" ></label>
                Phone
                </div>               
                <div class="easy-autocomplete eac-round"><input style="width:80%"  class="form-control " name="passenger" id="passenger_name" autofocus type="text" value="" maxlength="100">
                <input class="form-control " name="passenger" id="passenger_id" type="hidden" value="">
                <span id="passenger_error" class="error" ></span>
                </div>              
              </div>

                <div class="form-group " style="margin-bottom:10px">
                <div class="col-sm-3"><label><b>Current Wallet Amount</b></label>:  <span ><b id="wallet_amount">KWD 0.00</b></span>
                </div>                 
              </div>  

              <div class="form-group " style="margin-bottom:10px">
                <div class="col-sm-3"><label>Negative</label></div>               
                <div class="col-sm-8"><input class="form-control " name="negative" id="negative"  type="checkbox" value="1" maxlength="5" >
                </div>                 
              </div>              

              <div class="form-group" style="margin-bottom:10px">
                <div class="col-sm-3"><label>Amount</label></div>               
                <div class="easy-autocomplete eac-round"><input style="width:68%" class="form-control " name="amount" id="amount" autofocus type="text" value="" maxlength="5" onkeypress="return isNumberOnly(event,this,1)">
                <span id="amount_error" class="error" ></span>
                </div>                 
              </div>             
              
              <div class="form-group ">                
                <div class="col-sm-3">
                <button type="button" id="submit_btn" class="btn btn-primary" onclick="ValidateWallet();">Add Wallet</button>                               
                 <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="clearWalletForm();">Cancel</button>
                 </div>
              </div>
    </form>
    </div>
      </div>
      
    </div>
  </div> 

<script type="text/javascript" language="javascript">
$(document).ready(function(){
 $("#keyword").focus(); 
	toggle(7);
});
//For Delete the users
//=====================
function frmdel_user(userid)
{
   var answer = confirm("<?php echo __('delete_alert2');?>");
    
	if (answer){
        window.location="<?php echo URL_BASE;?>admin/delete/"+userid;
    }
    
    return false;  
}  
function frmblk_user(userid,status)
{   
    window.location="<?php echo URL_BASE;?>admin/blkunblk/"+userid+"/"+status;    
    return false;  
}  

</script>



<script type="text/javascript">

	function selectToggle(toggle, form) {
		var myForm = document.forms[form];
		for( var i=0; i < myForm.length; i++ ) { 
		    if(toggle) {
		        myForm.elements[i].checked = "checked";
		    } 
		    else
		    { myForm.elements[i].checked = ""; }
		}
	}
	
	//for More action Drop Down
	//=========================
	$('#more_action').change(function() {

		//select drop down option value
		//======================================
		var selected_val= $('#more_action').val();
		
			//perform more action reject withdraw
			//===================================		
			switch (selected_val){


					//	Current Action "reject"//block 
					//===================================

					case "block_driver_request":
					var confirm_msg =  "<?php echo __('Are you sure want to block Request(s)?');?>";
	
					//Find checkbox whether selected or not and do more action
					//============================================================
					if($('input[type="checkbox"]').is(':checked'))
					{
				   		 var ans = confirm(confirm_msg)
				   		 if(ans){
							 document.managedriver.action="<?php echo URL_BASE;?>manage/block_driver_request/index";
							 document.managedriver.submit();
						 }else{
						 	$('#more_action').val('');
						 }
	
					}
					else{
					        //alert for no record select
					        //=============================
						    alert("<?php echo __('Please select atleast one or more Record(s) to do this action');?>")	
						    $('#more_action').val('');
					}					
					break;



					//	Current Action "approve"
					//=========================

					case "active_driver_request":
					var confirm_msg =  "<?php echo __('Are you sure want to Activate Request(s)?');?>";


						//Find checkbox whether selected or not and do more action
						//============================================================
						if($('input[type="checkbox"]').is(':checked'))
						{
					   		 var ans = confirm(confirm_msg)
					   		 if(ans){
								 document.managedriver.action="<?php echo URL_BASE;?>manage/active_driver_request/index";
								 document.managedriver.submit();
							 }else{
							 	$('#more_action').val('');
							 }		
						}
						else{
						        //alert for no record select
						        //=============================
							    alert("<?php echo __('Please select atleast one or more Record(s) to do this action');?>")	
							    $('#more_action').val('');
						}						

					break;


                	//	Current Action "trash"
					//==========================

					case "trash_driver_request":
					var confirm_msg =  "<?php echo __('Are you sure want to move Request(s) to Trash ?');?>";


						//Find checkbox whether selected or not and do more action
						//============================================================
						if($('input[type="checkbox"]').is(':checked'))
						{
					   		 var ans = confirm(confirm_msg)
					   		 if(ans){
								 document.managedriver.action="<?php echo URL_BASE;?>manage/trash_driver_request/index";
								 document.managedriver.submit();
							 }else{
							 	$('#more_action').val('');
							 }		
						}
						else{
						        //alert for no record select
						        //=============================
							    alert("<?php echo __('Please select atleast one or more Record(s) to do this action');?>")	
							    $('#more_action').val('');
						}						

					break;
					
					case "mute_driver_request":
					var confirm_msg =  "<?php echo __('Are you sure want to Mute the Driver(s) ?');?>";


						//Find checkbox whether selected or not and do more action
						//============================================================
						if($('input[type="checkbox"]').is(':checked'))
						{
					   		 var ans = confirm(confirm_msg)
					   		 if(ans){
								 document.managedriver.action="<?php echo URL_BASE;?>manage/mute_driver_request/index";
								 document.managedriver.submit();
							 }else{
							 	$('#more_action').val('');
							 }		
						}
						else{
						        //alert for no record select
						        //=============================
							    alert("<?php echo __('Please select atleast one or more Record(s) to do this action');?>")	
							    $('#more_action').val('');
						}						

					break;
				}		
			return false;  
	});

        //function open_popup()
        //{
        //}; 

         var options = {
                url: function(keyword) { 
                  if (keyword !== "") {
                     var search_by = $("input[name='search_by']:checked").val()

                  return "<?php echo URL_BASE;?>/manage/firstname_load_new?query="+keyword+"&search_by="+search_by;
                  }
                },
                getValue: function(element) {
                  return element.name;
                },
                list: {
                    onSelectItemEvent: function() {
                        var selectedItemValue = $("#passenger_name").getSelectedItemData().id;
                        var wallet_amount = $("#passenger_name").getSelectedItemData().wallet_amount;

                        $("#passenger_id").val(selectedItemValue).trigger("change");
                        $("#wallet_amount").html(wallet_amount).trigger("change");
                    },
                  //   onHideListEvent: function() {
                  //     $("#passenger_id").val("").trigger("change");
                  // }
                },

                requestDelay: 300,

                theme: "round"
            };
          $("#passenger_name").easyAutocomplete(options);


        var ValidateWallet  = function()
        {
            var formData = $( "#add-wallet" ).serialize();
            $('#submit_btn').attr("disabled", "disabled");
            var url_path = "<?php echo URL_BASE;?>manage/update_passenger_wallet";
             $.ajax({
                type: "POST",
                url:url_path,
                data: formData, 
                async: true,
                success:function(response){
                  console.log(response);
                  var response = JSON.parse(response);
                  console.log(response);

                  if(response.status == 1)
                  {
                    $('#submit_btn').removeAttr("disabled");

                    // alertify.alert(response.message, function(){
                    //   alertify.message('OK');
                    //   $('#mywallet').modal('hide');
                    var negative = $("#negative:checked").val();
                      location.href = '<?php echo URL_BASE; ?>/manage/wallet_log_success?negative='+negative;
                    //});
                  } 
                  else
                  {
                    $('#submit_btn').removeAttr("disabled");
                    $.each(response.errors, function( i, v ) {
                      $('#'+i+'_error').html(v);
                    });
                    /*alertify.alert(response.message, function(){
                      alertify.message('OK');
                    });*/
                  }
                } 
            });

        };

</script>
<style type="text/css">
    .modal-body .form-horizontal .col-sm-2,
.modal-body .form-horizontal .col-sm-10 {
    width: 100%
}

.modal-body .form-horizontal .control-label {
    text-align: left;
}
.modal-body .form-horizontal .col-sm-offset-2 {
    margin-left: 15px;
}

.negative
{
    color : red;
}

</style>