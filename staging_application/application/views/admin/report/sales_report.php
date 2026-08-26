<?php defined('SYSPATH') OR die("No direct access allowed.");?>
<link rel="stylesheet" href="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/css/ui-lightness/jquery-ui-1.8.11.custom.css" />
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/js/jquery-1.5.1.min.js"></script>
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/js/jquery-ui-1.8.11.custom.min.js"></script>
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-timepicker-addon.js"></script>
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
$search_date = isset($srch["search_date"]) ? $srch["search_date"] :date('Y-m-d');   
$startdate = isset($srch["start_date"]) ? $srch["start_date"] :date('Y-m-d 00:00:00');   
$enddate = isset($srch["end_date"]) ? $srch["end_date"] :date('Y-m-d 23:59:59');  

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
        <form method="get" class="form" name="managedriver" id="managedriver" action="<?php echo URL_BASE; ?>transaction/sales_report">
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
                        </tr>  
                        <tr> 
                       <?php /* <td valign="middle"><label><?php echo __('search_date'); ?></label></td>
                        <td valign="top">
                        <div class="new_input_field_transaction">
                                  <input type="text"  readonly title="<?php echo __('select_datetime'); ?>" id="search_date" name="search_date" value="<?php echo $search_date;?>"  />
                         <span id="startdate_error" class="error"></span>        
                         </div>
                        
                        </td> */ ?>   
                    <td valign="middle"><label><?php echo __('from_date'); ?></label></td>
                        <td valign="top">
                        <div class="new_input_field_transaction">
                                  <input type="text"  readonly title="<?php echo __('select_datetime'); ?>" id="start_date" name="start_date" value="<?php echo $startdate;?>"  />
                         <span id="startdate_error" class="error"></span>        
                         </div>
                        
                        </td>       

                        <td valign="middle"><label><?php echo __('end_date'); ?></label></td>
                        <td valign="top">
                        <div class="new_input_field_transaction">
                                  <input type="text"  readonly title="<?php echo __('select_datetime'); ?>" id="end_date" name="end_date" value="<?php echo $enddate;?>"  />
                        <span id="enddate_error" class="error"></span>                              

                        </div>
                        </td>  
                        </tr>
                        <tr>
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
                                <input type="button" value="<?php echo __('button_cancel'); ?>" title="<?php echo __('button_cancel'); ?>" onclick="location.href = '<?php echo URL_BASE; ?>transaction/sales_report'" />
                            </div>
                        </td>
                    </tr>
                </table>
                <div id="response"></div>
                        <div class="widget">
        <div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" /><h6><?php echo $page_title; ?></h6>
       <div style="width:auto; float:right;margin: -5px 3px;">
        <div ><?php  if($total_company > 0){ $export_table_count=$total_company;
                    include_once(APPPATH.'views/admin/export_menu_sales.php'); 
            }?></div>                       

        </div>
        </div>
<?php if($total_company > 0){ ?>
    <div class= "overflow-block">
    
<div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <table cellspacing="1" cellpadding="1" width="100%" style="border-top:1px solid #cdcdcd;" align="center" class="sTable responsive">
                <tr>
                <td width="2%"><?php echo __('sno'); ?></td>
                <td width="20%"><b><?php echo __('payment_type'); ?></b></td>
                <td width="20%"><b><?php echo __('payment Gateway'); ?></b></td>
                <td width="20%"><b><?php echo __('trip_id'); ?></b></td>
                <td width="20%"><b><?php echo __('passenger_name'); ?></b></td>
                <td width="20%"><b><?php echo __('passenger_phone'); ?></b></td>
                <td width="20%"><b><?php echo __('vechile_no'); ?></b></td>
                <td width="20%"><b><?php echo __('driver_name'); ?></b></td>
                <td width="20%"><b><?php echo __('gross_sales'); ?></b></td>
                <td width="20%"><b><?php echo __('promocode'); ?></b></td>
                <td width="10%"><b><?php echo __('promocode_discount_amt'); ?></b></td>

                <!-- Sasidharan Nov 28 2022 -->
                <td width="10%"><b><?php echo __('corporate_group'); ?></b></td>

                <td width="10%"><b><?php echo __('total_sales'); ?></b></td>
                <td width="15%"><b><?php echo __('cash_reciept'); ?></b></td>
                <td width="15%"><b><?php echo __('card_reciept'); ?></b></td>
                <td width="15%"><b><?php echo __('online_reciept'); ?></b></td>
                <td width="10%"><b><?php echo __('wallet_reciept'); ?></b></td>
                <td width="10%"><b><?php echo __('discount_wallet_label'); ?></b></td>

                <!-- Sasidharan Nov 28 2022 -->
                                <td width="10%"><b><?php echo __('Tap Wallet'); ?></b></td>

                <td width="10%"><b><?php echo __('corporate_amount'); ?></b></td>
                
                <td width="10%"><b><?php echo __('Previous Pending'); ?></b></td>
                <td width="10%"><b><?php echo __('Current Trip Pending'); ?></b></td>
                <td width="10%"><b><?php echo __('balance_recievable'); ?></b></td>
                <td width="10%"><b><?php echo __('remark'); ?></b></td>       
                </tr>
               
                <?php } ?>
<!-- <table cellspacing="1" cellpadding="1" width="100%" style="border-top:1px solid #cdcdcd;" align="center" class="sTable responsive"> -->
<?php if($total_company > 0){
$i =$Offset;
//$sno=$Offset;
foreach($all_company_list as $key=>$val)
{
    $i++;    


    $driver_name = isset($val['driver_name'])?$val['driver_name']:'';
    $pass_names = isset($val['pass_name'])?$val['pass_name']:'';
    $pass_lastnames = isset($val['pass_lastname'])?$val['pass_lastname']:'';
    $pickup = isset($val['pickup'])?$val['pickup']:'';
    $fare = isset($val['fare'])?$val['fare']:0;
    $trip_cost = isset($val['trip_cost'])?$val['trip_cost']:0;
    $add_amt = isset($val['add_amt'])?$val['add_amt']:0;
    $wallet_amount_used = isset($val['wallet_amount_used'][$key])?$val['wallet_amount_used']:0;
    $advance_payment = isset($val['advance_payment'])?$val['advance_payment']:0;
    $pending_amt = isset($val['pending_amt'])?$val['pending_amt']:0;
    $payment_type = isset($val['payment_type'])?$val['payment_type']:'';
     /*Ramya sep 30 2024 */
    $tapAutoPayment = isset($val['tapAutoPayment']) ? $val['tapAutoPayment'] : '';

    $tapAutoPayment = ($tapAutoPayment == 1) ? 'tap' : '-';  
        $deductedAmountFromTap = isset($val['deductedAmountFromTap'])?$val['deductedAmountFromTap']:'';



    $driver_edit_status = isset($val['driver_edit_status'])?$val['driver_edit_status']:'';
    $actual_paid_amt = isset($val['actual_paid_amt'])?$val['actual_paid_amt']:0;
    $pass_id = isset($val['pass_id'])?$val['pass_id']:'';
    $phone = isset($val['phone'])?$val['phone']:'';
    $trip_id = isset($val['trip_id'])?$val['trip_id']:'';
    $edit_status = isset($val['edit_status'])?$val['edit_status']:'';
    $passenger_pending_amt = isset($val['passenger_pending_amt'])?$val['passenger_pending_amt']:'';
    $promocode = isset($val['promocode'])?$val['promocode']:'';
    $passenger_discount = isset($val['passenger_discount'])?$val['passenger_discount']:'';
    $trip_id = isset($val['trip_id'])?$val['trip_id']:'';
    $trans_fare = isset($val['trans_fare'])?$val['trans_fare']:0;

    $passenger_phone = isset($val['phone'])?$val['phone']:'';

    $taxi_no = isset($val['taxi_no'])?$val['taxi_no']:'';

    /* June 8 2023 */
    $discount_wallet_amount_used = isset($val['discount_wallet_amount_used'])?$val['discount_wallet_amount_used']:0;

    /* Sasidharan Nov 28 2022 */
    $corporate_name = isset($val['corporate_name'])?$val['corporate_name']:'-';
    $dispatcher_altered = isset($val['dispatcher_altered'])?$val['dispatcher_altered']:0;
    $corporate_amount = isset($val['corporate_amount'])?$val['corporate_amount']:0;
    // $corporate_amount = 0;
    // if($dispatcher_altered) {
    // }   

    /*if($fare==0){
        $fare = $trans_fare;
    }
    $total_sales = $fare - $passenger_discount;*/    

    $pickup_time = isset($val['pickup_time'])? Commonfunction::convertphpdate('Y-m-d h:i:s A',$val['pickup_time']):'';
    $payment_msg= commonfunction::get_payment_message($payment_type,$wallet_amount_used,$pending_amt,$advance_payment,$driver_edit_status,$add_amt) ;

    $payment_msg= commonfunction::get_payment_message($payment_type,$wallet_amount_used,$pending_amt,$advance_payment,$driver_edit_status,$add_amt) ;

    $fare_detail = isset($val['fare_details'])?$val['fare_details']:[];

    /* This fare was static keys based on complete trip API, If any change regarding this one update mandatory */
    $cash_fare = isset($fare_detail[0]['value'])?$fare_detail[0]['value']:0;
    $card_fare = isset($fare_detail[1]['value'])?$fare_detail[1]['value']:0;
    $knet_fare = isset($fare_detail[2]['value'])?$fare_detail[2]['value']:0;
    $additional_fare = isset($fare_detail[3]['value'])?$fare_detail[3]['value']:0;
    $wallet_fare = isset($fare_detail[4]['value'])?$fare_detail[4]['value']:0;
    $pending_fare = isset($fare_detail[5]['value'])?$fare_detail[5]['value']:0;
    $remarks = (isset($fare_detail[6]['value']) && $fare_detail[6]['value']!='')?$fare_detail[6]['value']:'-';


    $current_pending_amt = isset($val['current_pending_amt'])?$val['current_pending_amt']:0;
    $pass_wallet_amt = isset($val['pass_wallet_amt'])?$val['pass_wallet_amt']:0;

    if($driver_edit_status == 4)
    {
         $fare = $cash_fare+$card_fare+$knet_fare+$current_pending_amt+$wallet_fare+$passenger_discount;
    }
    else if($current_pending_amt < 0)
    {
        $fare = $cash_fare+$card_fare+$knet_fare+$additional_fare+$wallet_fare+$passenger_discount;
    }
    else
    {
         $fare = $cash_fare+$card_fare+$knet_fare+$additional_fare+$current_pending_amt+$wallet_fare+$passenger_discount;
    }


    if($driver_edit_status != 4) {
        //$fare = $fare - $current_pending_amt;
    }
    $total_sales = $fare - $passenger_discount;

    /* Sasidharan Nov 28 2022 */
    $total_sales += $corporate_amount;

    //print_r($fare_detail);exit;
    $payment_type_msg = '';
    if($cash_fare && $wallet_fare){

        $payment_type_msg = 'Cash & Wallet';
    }else if($cash_fare){
        $payment_type_msg = 'Cash';

    }else if($knet_fare){        
        $payment_type_msg = 'Online';

    }else if($card_fare){
        $payment_type_msg = 'Card';

    }else if($wallet_fare){
        $payment_type_msg = 'Wallet';
    }else if($passenger_discount){

        $payment_type_msg = 'Promocode';
    }

    if($current_pending_amt && $payment_type_msg){
        $payment_type_msg = $payment_type_msg.' & Pending';
    }else if($current_pending_amt){
        $payment_type_msg = 'Pending';
    }


    $passenger_discount_disp = $total_sales_disp = $cash_fare_disp = $card_fare_disp = $knet_fare_disp = $wallet_fare_disp = $pending_amt_disp = '-';
    if($passenger_discount){
        $passenger_discount_disp = number_format($passenger_discount, 3, '.', '');
    }

    if($total_sales){
        $total_sales_disp = number_format($total_sales, 3, '.', '');
    }

    if($cash_fare){
        $cash_fare_disp = number_format($cash_fare, 3, '.', '');
    }

    if($card_fare){
        $card_fare_disp = number_format($card_fare, 3, '.', '');
    }

    if($knet_fare){
        $knet_fare_disp = number_format($knet_fare, 3, '.', '');
    }

    if($wallet_fare){
        $wallet_fare_disp = number_format($wallet_fare, 3, '.', '');
    }

    if($pass_wallet_amt < 0){
        //$calc_pending_amt = $pending_fare + $passenger_pending_amt;
        //$pending_amt_disp = number_format($calc_pending_amt, 3, '.', '');
        $pending_amt_disp = number_format($pass_wallet_amt, 3, '.', '');
    }


    ?>

    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $payment_type_msg; ?></td>
        <td><?php echo $tapAutoPayment; ?></td>
        <td><?php echo $trip_id; ?></td>
        <td><?php echo $pass_names; ?></td>
        <td><?php echo $passenger_phone; ?></td>
        <td><?php echo $taxi_no; ?></td>
        <td><?php echo $driver_name; ?></td>
        <td><?php echo number_format($fare, 3, '.', ''); ?></td>
        <td><?php echo $promocode; ?></td>
        <td><?php echo $passenger_discount_disp; ?></td>

        <!-- Sasidharan Nov 28 2022 -->
        
        <td><?php echo $corporate_name; ?></td>

        <td><?php echo $total_sales_disp; ?></td>
        <td><?php echo $cash_fare_disp; ?></td>
        <td><?php echo $card_fare_disp; ?></td>
        <td><?php echo $knet_fare_disp; ?></td>
        <td><?php echo $wallet_fare_disp; ?></td>
        <td><?php echo $discount_wallet_amount_used; ?></td> 
        

        <!-- Sasidharan Nov 28 2022 -->
                <td><?php echo $deductedAmountFromTap; ?></td>

        <td><?php echo $corporate_amount; ?></td>

        <td><?php echo $passenger_pending_amt; ?></td>
        <td><?php echo $current_pending_amt; ?></td>

        <td><?php echo $pending_amt_disp; ?></td>
        <td><?php echo $remarks; ?></td>        
    </tr> 

    <?php
}
?>

 </table>
</div>
</div>
<?php

}
else
{

?>
<table cellspacing="1" cellpadding="1" width="100%" style="border-top:1px solid #cdcdcd;" align="center" class="sTable responsive">
    <tr>
        <td colspan="8"><center>No Data Found</center></td>
    </tr>
</table>

<?php
   
}
 ?> 
<?php //if ($total_company > 0) { ?>
</div>
</div>
</div>
<?php //} ?>
</form>
<div class="clr">&nbsp;</div>
<div class="pagination">
        <?php if($total_company > 0): ?>
         <p><?php echo $pag_data->render(); ?></p>  
        <?php endif; ?> 
  </div>
  <div class="clr">&nbsp;</div>
    </div>
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
<div class="content_middle">
<div class="widget">
        <div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" /><h6><?php echo "Passenger Unused Wallet" ?></h6>
       <div style="width:auto; float:right;margin: -5px 3px;">
        <div ></div>                       
        </div>
        </div>
<div class= "overflow-block">
    
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">

        <?php 
        if(count($passengers_unused_wallet_list) > 0) {
            ?>
            <table cellspacing="1" cellpadding="1" width="100%" style="border-top:1px solid #cdcdcd;margin-bottom:5px" align="center" class="sTable responsive">
                    <tr>
                    <td width="2%"><?php echo __('sno'); ?></td>
                    <td width="20%"><b><?php echo __('passenger_name'); ?></b></td>
                    <td width="20%"><b><?php echo __('passenger_phone'); ?></b></td>
                    <td width="20%"><b><?php echo __('recharge_amount'); ?></b></td>
                    <td width="20%"><b><?php echo __('recharge_date'); ?></b></td>

                    </tr>
    <!-- <table cellspacing="1" cellpadding="1" width="100%" style="border-top:1px solid #cdcdcd;" align="center" class="sTable responsive"> -->
    <?php
    $i =$Offset;
    //$sno=$Offset;
    foreach($passengers_unused_wallet_list as $key=>$val)
    {
        $i++;    

        $pass_names = isset($val['pass_name'])?$val['pass_name']:'';
        $passenger_phone = isset($val['pass_phone'])?$val['pass_phone']:'';
        $recharge_date = isset($val['recharge_date'])? Commonfunction::convertphpdate('Y-m-d h:i:s A',$val['recharge_date']):'';
        $recharge_amount = isset($val['recharge_amount'])? $val['recharge_amount']:0;

        ?>
    
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $pass_names; ?></td>
            <td><?php echo $passenger_phone; ?></td>  
            <td><?php echo $recharge_amount; ?></td>     
            <td><?php echo $recharge_date; ?></td>     
   
        </tr> 
    
        <?php
    }
    ?>
    
     </table>
     <?php }  else {?>
        <table cellspacing="1" cellpadding="1" width="100%" style="border-top:1px solid #cdcdcd;margin-bottom:5px"  align="center" class="sTable responsive">
    <tr>
        <td colspan="8"><center>No Data Found</center></td>
    </tr>
</table>
    <?php } ?>
    </div>
    </div>
    </div>
    <div class="clr">&nbsp;</div>
<div class="pagination">
        <?php if(count($passengers_unused_wallet_list) > 0): ?>
         <p><?php echo $pag_data_2->render(); ?></p>  
        <?php endif; ?> 
  </div>
  <div class="clr">&nbsp;</div>
    </div>
    </div>

</div>
</div>

<script type="text/javascript" language="javascript">
$(document).ready(function(){
 $("#keyword").focus(); 
    toggle(7);
    $( ".table-head" ).click(function() {
           var id = this.id;
           alert(this.id);
           $("#table-body-"+id).slideToggle();
           $("#table-tbody-"+id).slideToggle();
        });
     $("#search_date").datetimepicker( {
        showTimepicker:false,
        showSecond: true,
        //timeFormat: 'hh:mm:ss',
        dateFormat: 'yy-mm-dd',
       // stepHour: 1,
        //stepMinute: 1,
        maxDateTime : new Date("<?php echo date('Y m d'); ?>"),
        //stepSecond: 1,

    });

    $("#start_date").datetimepicker( {
        showTimepicker:true,
        showSecond: true,
        timeFormat: 'hh:mm:ss',
        dateFormat: 'yy-mm-dd',
        stepHour: 1,
        stepMinute: 1,
        maxDateTime : new Date("<?php echo date('Y m d,H:i:s'); ?>"),
        stepSecond: 1,
        /*onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() + 1);
            $("#enddate").datepicker("option", "minDate", dt);
        }*/
    });
    
    $("#end_date").datetimepicker( {
        showTimepicker:true,
        showSecond: true,
        timeFormat: 'hh:mm:ss',
        dateFormat: 'yy-mm-dd',
        stepHour: 1,
        stepMinute: 1,
        maxDateTime : new Date("<?php echo date('Y m d').",23:59:59"; ?>"),
        stepSecond: 1,
        /*onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() - 1);
            $("#startdate").datepicker("option", "maxDate", dt);
        }*/
    });
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


                    //  Current Action "reject"//block 
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



                    //  Current Action "approve"
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


                    //  Current Action "trash"
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

         // var options = {
         //        url: function(keyword) { 
         //          if (keyword !== "") {
         //             var search_by = $("input[name='search_by']:checked").val()

         //          return "<?php echo URL_BASE;?>/manage/firstname_load_new?query="+keyword+"&search_by="+search_by;
         //          }
         //        },
         //        getValue: function(element) {
         //          return element.name;
         //        },
         //        list: {
         //            onSelectItemEvent: function() {
         //                var selectedItemValue = $("#passenger_name").getSelectedItemData().id;
         //                var wallet_amount = $("#passenger_name").getSelectedItemData().wallet_amount;

         //                $("#passenger_id").val(selectedItemValue).trigger("change");
         //                $("#wallet_amount").html(wallet_amount).trigger("change");
         //            },
         //          //   onHideListEvent: function() {
         //          //     $("#passenger_id").val("").trigger("change");
         //          // }
         //        },

         //        requestDelay: 300,

         //        theme: "round"
         //    };
          //$("#passenger_name").easyAutocomplete(options);


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