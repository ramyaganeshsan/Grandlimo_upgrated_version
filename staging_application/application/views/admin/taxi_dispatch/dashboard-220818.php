<?php defined('SYSPATH') OR die('No direct access allowed.');
//$company_currency = findcompany_currency($_SESSION['company_id']);
$class = "";
$payment_class ="";
$edit_book_tab = "";
if($_SESSION['user_type']=="O"){
    $class = "corp_add_booking";
    $payment_class = "row";
    $edit_book_tab = "edit_book_tab";
}

?>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/bootstrap-3.2.0/vendor/bootstrap/js/jquery.min.js"></script>
 <script type="text/javascript" src="<?php echo URL_BASE;?>public/bootstrap-3.2.0/vendor/bootstrap/js/bootstrap.min.js"></script>
<div class="container taxi_dispatcher">
    <div class="row">
        <!-- form: -->
        <div class="lft_outer">
            <div id="submit_form_pay" class="payment_info" style="display:none;">

                         <form id = "pay_submit_form" method="post" action="" enctype="multipart/form-data">
                            <input type="hidden" name="edit_pass_logid" id = "edit_pass_logid1" value="">
                            <!--<input type="hidden" name="travel_status" id = "travel_status">-->
                                    <div>
                                            <div class="payment_info_inner">
                                               <h4 class="payment_info_title"> <?php echo __('payment_information'); ?>
                                                <a href="javascript:;" title="close" class="popup_close_button close_side_bar">&nbsp;</a></h4>
                                                <ul class="payment_inner">
                                                    
                                                    <li>
                                                    <label><?php echo __('fare'); ?>:&nbsp;</label><label id="edit_min_fare1" class=""><?php echo '0'; ?></label><label><?php echo $company_currency; ?></label>
                                                </li>

                                                </ul>
                                               
                                            </div>
                                            <div class="payment_info_content">
                                            <table>
                                            <tr><td>
                                            <label><?php echo __('cash'); ?>:&nbsp;</label></td><td><input class="form-control pay" type="text" name="cash_pay" id = "cash_pay" value = 0></td></tr>
                                            <tr><td><label><?php echo __('card'); ?>:&nbsp;</label></td><td><input class="form-control pay" type="text" name="card_pay" id = "card_pay"  value = 0></td></tr>
                                            <tr><td><label><?php echo __('online_knet'); ?>:&nbsp;</label></td><td><input readonly="readonly" class="form-control pay" type="text" name="knet_pay_show_show" id = 'knet_pay'  value = 0></td></tr>
                                            <tr><td><label><?php echo __('wallet_label'); ?>:&nbsp;</label></td><td><input readonly="readonly" class="form-control pay" type="text" name="wallet_pay_show" id = 'wallet_pay'  value = 0></td></tr>
                                            <tr><td><label><?php echo __('pending_payment_label'); ?>:&nbsp;</label></td><td><input class="form-control pay" type="text" name="pending_pay" id = 'pending_pay'  value = 0></td></tr>
                                            <input type="hidden" id="cash_pay_show" value=""/>
                                            <input type="hidden" id="card_pay_show" value=""/>
                                            <input type="hidden" id="knet_pay" value=""/>
                                            <input type="hidden" id="wallet_pay" value=""/>
                                            <input type="hidden" id="disp_edit_pass_id" value=""/>
                                            <input type="hidden" id="disp_edit_trip_id" value=""/>
                                            <input type="hidden" id="prev_pending_pay" value=""/>
                                           <?php /* <input type="hidden" id="pending_pay" value=""/> */ ?>
                                           <tr><td> <label><?php echo __('additional_amount'); ?>:&nbsp;</label></td><td><input class="form-control pay" type="text" name="add_amt" id = "add_amt" value = '' ></td></tr>
                                           <tr><td><label><?php echo __('fare_note'); ?>:&nbsp;</label></td><td><textarea rows='2' cols='20' name='fare_note' id='fare_note'></textarea></td></tr>

                                         
                                           </table>
                                           
                                            <div >
                                              <tr><span id = "add_err" style = "color:red;"></span></tr>
                                            <button type="submit" style = 'float:right;background: #f9c213;border: none;color: #000;' class="btn btn-primary" id="pay_submit" name="pay_submit" value="<?php echo __('pay_submit'); ?>" ><?php echo __('submit'); ?></button>
                                            </div>
                                            </div>
                                    </div>
                        </form>
                                      
                       
                        <div class="map_addbooking_outer" --class="col-lg-5 col-lg-5_map">
                            <div id="map_editbooking"></div>
                        </div>
                    </div> 
            <div class="col-md-4 col-md-4-inner <?php echo $class;?>">
                
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li id="ab_tab" class="active"><a href="#add_booking" style="cursor:pointer;" id="add_booking_tab" role="tab" data-toggle="tab">Add booking</a></li>
                        <li id="eb_tab"><a href="#edit_booking" role="tab" id="edit_booking_tab" data-toggle="tab">Edit Booking</a></li>

                        <?php if($_SESSION['user_type']=="A"){ ?> 
                        <li>
                            <select  style="cursor:pointer;" name="select_company" id="select_company" onchange="all_booking_manage_list();driver_list_with_status();">
                                <option value="0">All Company</option>
                                <?php foreach($get_active_company_details as $company){ ?>
                                        <option value="<?php echo $company['cid']; ?>" <?php if($company['cid'] == COMPANY_CID){echo "selected";} ?>><?php echo ucfirst($company['company_name']); ?></option>
                                <?php } ?>
                            </select>
                        </li>
                       
                        <li>
                            <select  style="cursor:pointer;" name="select_taxi_model" id="select_taxi_model" onchange="driver_list_with_status();">
                                <option value="">All Vehicle</option>
                                <?php foreach($model_details as $model){ ?>
                                        <option value="<?php echo $model['model_id']; ?>"><?php echo ucfirst($model['model_name']); ?></option>
                                <?php } ?>
                            </select>
                            <select  style="cursor:pointer;" name="select_trip_type" id="select_trip_type" onchange="all_booking_manage_list();">
                                                            <option selected="selected" value="">All Trips</option>
                                <option value="<?php echo __('book_now'); ?>"><?php echo __('book_now'); ?></option>
                                <option value="<?php echo __('book_later'); ?>"><?php echo __('book_later'); ?></option>
                                <option value="<?php echo __('airport'); ?>"><?php echo __('airport'); ?></option>
                                <option value="<?php echo __('book_recurrent'); ?>"><?php echo __('book_recurrent'); ?></option>
                            </select>
                        </li>
                         <?php }else{ ?>
                           
                            <input name="select_company" id="select_company" type="hidden" value="<?php echo $_SESSION['company_id']; ?>" >  
                            <li>
                            <select  style="cursor:pointer;" name="select_taxi_model" id="select_taxi_model" onchange="driver_list_with_status();">
                                <option value="">All Vehicle</option>
                                <?php foreach($model_details as $model){ ?>
                                        <option value="<?php echo $model['model_id']; ?>"><?php echo ucfirst($model['model_name']); ?></option>
                                <?php } ?>
                            </select>
                            </li>                      
                        <?php } ?>
                    <li    style="top: 30px;    position: absolute;margin:5px"> 
                    
                    </li> 
                                                               
                    </ul>

                    <!-- Tab panes -->
                                        
                                                  <!--div class="hover_tool_tip">
                                                        <ul>
                                                            <li><a title="City List" href="#">City List</a></li>
                                                            <li><a title="City List" href="#">City List</a></li>
                                                            <li><a title="City List" href="#">City List</a></li>
                                                            <li><a title="City List" href="#">City List</a></li>
                                                            <li><a title="City List" href="#">City List</a></li>
                                                        </ul>
                                                       <span>&nbsp;</span>
                                                   </div-->
                       
                     
                        <?php
                        if($_SESSION['user_type']=="O"){
                        ?>
                        <div class="add_book_tab">
                        <?php
                        }else{
                        ?>
                            <div id="add_book_tab" class="">
                            <a href="javascript:;" title="close" id="close_button" class="popup_close_button close_side_bar">&nbsp;</a>
                        <?php
                            }
                        ?>

                        <form id="defaultForm" method="post" class="form-horizontal" action="<?php echo URL_BASE; ?>taxidispatch/dashboard" enctype="multipart/form-data" --onSubmit="check_passengerexit()">
                                        <div class="row">
                                            <h4><?php echo strtoupper(__('passengers_information')); ?></h4>
                                            <div class="form-group">                                                             
                                                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="<?php echo __('name_label'); ?>"  autocomplete="off" />                              
                                            </div>
                                            <input name="passenger_id" id="passenger_id" type="hidden" >                        
                                            <div class="form-group">                                                            
                                                <input type="text" class="form-control" name="email" id="email" placeholder="<?php echo __('email_id'); ?>" autocomplete="off" />                                 
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control country_code_plus" name="country_code" id="country_code"  maxlength="8" placeholder="<?php echo __('+1'); ?>" autocomplete="off" />                                         
                                                <input type="text" class="form-control" name="phone" id="phone"  maxlength="15" placeholder="<?php echo __('mobile'); ?>" autocomplete="off" />                               
                                            </div> 
                                            <?php if($_SESSION['user_type'] == 'O'){
                                            ?>
                                            </div>  
                                            <div class="row">     
                                            <?php
                                            }
                                            ?>                                    
                                             <?php /** booking details **/ ?>
                                            <h4><?php echo strtoupper(__('booking_details')); ?></h4>
                                            <div class="form-group col-lg-5_taxi_dispatcher">
                                                <div class="col-lg-12">
                                                    <input type="text" class="form-control" id="current_location" name="current_location" autocomplete="off"  placeholder="<?php echo __('enter_currentlocation'); ?>" />
                                                </div>
                                                <div class="col-lg-12" style="margin-right: 0;">
                                                    <input type="text" class="form-control" id="drop_location" name="drop_location" autocomplete="off" placeholder="<?php echo __('enter_droplocation'); ?>" />
                                                </div>
                                                <div class="col-lg-12">
                                                    <input type="text" class="form-control" id="notes" maxlength="256" name="notes" autocomplete="off"  placeholder="<?php echo __('note_driver'); ?>"  />
                                                </div>
                                                <div class="col-lg-12">
                                                    <input class="form-control"  data-format="yyyy-mm-dd hh:mm" type="text" readonly name="pickup_date" id="pickup_date" autocomplete="off" placeholder="<?php echo __('pickup_time'); ?>"></input>
                                                </div>
                                                    <input type="hidden" id="dispatch_id" name="dispatch" value="" />
                                                    <input type="hidden" id="create_id" name="create" value="" />
                                                <div class="col-lg-12">
                                                    <?php $field_type =''; if(isset($postvalue) && array_key_exists('taxi_model',$postvalue)){ $field_type =  $postvalue['taxi_model']; } ?>
                                                    <select style="padding:0;" name="taxi_model" id="taxi_model" class="form-control" title="<?php echo __('select_the_taximodel'); ?>" OnChange="change_minfare(this.value,'');">
                                                        <option value=""><?php echo __('select_vehicle_label'); ?></option>
                                                        <?php 
                                                            foreach($model_details as $list) { ?>
                                                        <option value="<?php echo $list['model_id']; ?>" <?php if($field_type == $list['model_id']) { echo 'selected=selected'; } ?>><?php echo ucfirst($list['model_name']); ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-lg-12">
                                                     <select style="padding:0;" name="promo_code" id="promo_code" class="form-control" title="<?php echo __('select_the_promocode'); ?>" OnChange="validate_promocode(this.value);">
                                                        <option value=""><?php echo __('select_the_promocode'); ?></option>                                                    
                                                    </select>
                                                </div>                                               
                                                
                                                <?php /*
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" name="luggage" id="luggage" autocomplete="off"  placeholder="<?php echo __('luggage'); ?>"   />
                                                </div>
                                                <div class="col-lg-5" style="margin-right: 0;">
                                                    <input type="text" class="form-control" name="no_passengers" id="no_passengers" autocomplete="off" placeholder="<?php echo __('passengers'); ?>"  />
                                                </div>
                                                */ ?>
                                            </div>
                                                                                    
                                        </div>
                                        <div class="row">    
                                            <!--div class="row" style="width:100%; padding-left: 0;"-->                                            
                                                <!--h4><?php echo strtoupper(__('vehicle')); ?></h4-->
                                                
                                            <?php /**  VEHICLE details **/ ?>

                                            <?php /*
                                            <!-- Booking type-->
                                            <div class="col-lg-5" style="margin-right:0px;">
                                                <h4><?php echo strtoupper(__('booking_type')); ?></h4>
                                                <div class="form-group">
                                                    <div class="col-lg-12">
                                                        <input type="radio" name="recurrent" value="1" <?php if(isset($postvalue) && array_key_exists('recurrent',$postvalue)) {  if($postvalue['recurrent'] == 1) { echo 'checked'; } } else { echo 'checked'; } ?> /> <?php echo __('single'); ?>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <input type="radio" name="recurrent" value="2" /> <?php echo __('recurrent'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            * * */ ?>
                                        <!--/div-->
                                        <?php /**  Payment **/

                                       
                                        ?>
                                        <div class="<?php echo $payment_class;?> row_payment" style="width:100%; padding-left: 0px;">                                            
                                            <div class="col-lg-5">
                                                <h4><?php echo strtoupper(__('payment')); ?></h4>
                                                <ul class="payment_inner">
                                                    <li>
                                                        <label><?php echo __('journey'); ?>:&nbsp;</label><span id="find_duration"><?php echo __('zero_mins'); ?></span>
                                                    </li>
                                                    <li>
                                                        <label><?php echo __('distance'); ?>:&nbsp;</label><span id="find_km"><?php //echo __('zero_distance'); ?></span>
                                                    </li>
                                                    
                                                  <?php /*  <li>
                                                        <label><?php echo __('tax'); ?>:&nbsp;</label><span id="vat_tax"><?php echo $company_tax; ?></span><span>%</span>
                                                    </li> */?>
                                                    <li>
                                                        <label><?php echo __('approx_fare'); ?>:&nbsp;</label><span id="min_fare" class=""><?php echo '0'; ?></span><span><?php echo $company_currency; ?></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="map_addbooking_outer" --class="col-lg-5 col-lg-5_map" style="padding-top: 10px;">
                                           <div id="map_addbooking">
                                                

                                            </div>
                                        </div>
                                        </div>
                                        <?php /** booking details **/ ?>
                                        <?php /**  VEHICLE details **/ ?>                                        
                                        <!-- Booking type-->
                                      
                                        <div class="form-group">
                                            <!--div id="directions"></div-->
                                            <?php /** hidden fields **/ ?>
                                            <div style="display:none;">
                                                <table>
                                                    <tr>
                                                        <td>Start altitude:</td>
                                                        <td id="start"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>End altitude:</td>
                                                        <td id="end"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Maximum latitude:</td>
                                                        <td id="max"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Minimum latitude:</td>
                                                        <td id="min"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Distance:</td>
                                                        <td id="distance"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Total ascent:</td>
                                                        <td id="ascent"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Total descent:</td>
                                                        <td id="descent"></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>                                       
                                        <ul id="acc" style="display:none;">
                                            <li><label><?php echo __('description'); ?> :</label><span id="desc">Rate Kilometer</span></li>
                                            <li><label><?php echo __('value'); ?> :</label><span><?php echo $company_currency; ?></span><span id="min_value"></span></li>
                                            <li><label><?php echo __('subtotal'); ?> :</label><span><?php echo $company_currency; ?></span><span id="sub_total"></span></li>
                                        </ul>
                                        <input type="hidden" name="payment_type" value=""/>
                                        <input type="hidden" name="fixedprice" value=""/>
                                        <input type="hidden" name="pickup_time" value="23"/>
                                        <input type="hidden" name="pickup_lat" id="pickup_lat" value="">
                                        <input type="hidden" name="pickup_lng" id="pickup_lng" value="">
                                        <input type="hidden" name="drop_lat" id="drop_lat" value="">
                                        <input type="hidden" name="drop_lng" id="drop_lng" value="">
                                        <input type="hidden" name="info" id="info" value="">
                                        <input type="hidden" name="model_minfare" id="model_minfare" value="0" >
                                        <input type="hidden" name="distance_km" id="distance_km" value="0" >
                                        <input type="hidden" name="total_fare" id="total_fare" value="0" >
                                        <input type="hidden" name="total_duration" id="total_duration" value="0" >
                                        <input type="hidden" name="total_duration_secs" id="total_duration_secs" value="0" >
                                        <input type="hidden" name="city_id" id="city_id" value="" >
                                        <input type="hidden" name="cityname" id="cityname" value="" >
                                        <input type="hidden" name="payment_sec" id="payment_sec" value="" >
                                        <input type="hidden" name="company_tax" id="company_tax" value="<?php echo $company_tax; ?>" >
                                        <input type="hidden" name="default_company_unit" id="default_company_unit" value="<?php echo UNIT_NAME; ?>" >
                                        <input type="hidden" name="recurrent" value="1"/>
                                        <input type="hidden" name="luggage" value=""/>
                                        <input type="hidden" name="no_passengers" value=""/>
                                        <input type="hidden" name="driver_id" id="driver_id" value=""/>
                                        <input type="hidden" name="admin_company_id" id="admin_company_id" value=""/>
                                        
                                        <?php /*  <div class="form-group">
                                            <div class="col-lg-9 col-lg-offset-3">
                                            <div id="errors"></div>
                                            </div>
                                            </div> */ ?>
                                        <div class="form-group">
                                            <?php /*
                                                <div class="col-lg-9">
                                                    <button type="submit" class="btn btn-primary" name="signup" value="Add Booking">Add Booking</button>
                                                </div>
                                                */ ?>
                                            <div class="col-lg-9">
                                                <button type="submit" class="btn btn-primary" name="create" id="create" value="<?php echo __('create'); ?>" ><?php echo __('create'); ?></button>
                                            </div>
                                            <?php
                                            if($_SESSION['user_type']!='O'){

                                            ?>
                                             <div class="col-lg-9">
                                                <button type="submit" class="btn btn-primary" name="dispatch" id="dispatch" value="<?php echo __('dispatch'); ?>" ><?php echo __('dispatch'); ?></button>
                                            </div>
                                            <?php
                                                }
                                            ?>
                                       
                                            <div class="col-lg-9">
                                                <button type="button" class="btn btn-primary" name="reset" id="reset" value="<?php echo __('button_reset'); ?>" ><?php echo __('button_reset'); ?></button>
                                            </div>
                                        </div>
                                    </form>
                    </div>

                    <div id="edit_book_tab" class="<?php echo $edit_book_tab; ?>">
                    <?php
                    if($_SESSION['user_type']!='O'){
                        ?>

                        <a href="javascript:;" title="close" class="popup_close_button close_side_bar">&nbsp;</a>
                    <?php
                    }
                    ?>
                        <form id="defaultForm_edit" method="post" class="form-horizontal" action="<?php echo URL_BASE; ?>taxidispatch/dashboard" enctype="multipart/form-data"  --onSubmit="change_email_phone_exit()" >
                                    <div class="row">
                                        <h4><?php echo strtoupper(__('passengers_information')); ?></h4>
                                        <div class="form-group">                                                             
                                            <input type="text" class="form-control" name="edit_firstname" id="edit_firstname" placeholder="<?php echo __('name_label'); ?>"  autocomplete="off" />                              
                                        </div>
                                        <input name="edit_passenger_id" id="edit_passenger_id" type="hidden" >                        
                                        <div class="form-group">                                                            
                                            <input type="text" class="form-control" name="edit_email" id="edit_email" placeholder="<?php echo __('email_id'); ?>" autocomplete="off" />                                 
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="edit_country_code" id="edit_country_code"  maxlength="8" placeholder="<?php echo __('+1'); ?>" autocomplete="off" />                                             
                                            <input type="text" class="form-control" name="edit_phone" id="edit_phone" maxlength="15" placeholder="<?php echo __('mobile'); ?>" />                               
                                        </div>
                                        <?php if($_SESSION['user_type'] == 'O'){
                                        ?>
                                         </div>
                                        <div class="row">
                                        <?php 
                                        }
                                        ?>
                                   
                                        <?php /** booking details **/ ?>
                                        <h4><?php echo strtoupper(__('booking_details')); ?></h4>
                                        <div class="form-group col-lg-5_taxi_dispatcher">
                                            <div class="col-lg-12">
                                                <input type="text" class="form-control" id="edit_current_location" name="edit_current_location" autocomplete="off"  placeholder="<?php echo __('enter_currentlocation'); ?>" />
                                            </div>
                                            <div class="col-lg-12" style="margin-right: 0;">
                                                <input type="text" class="form-control" id="edit_drop_location" name="edit_drop_location" autocomplete="off" placeholder="<?php echo __('enter_droplocation'); ?>" />
                                            </div>
                                            <div class="col-lg-12">
                                                <input type="text" class="form-control" name="edit_notes" id="edit_notes" maxlength="256" autocomplete="off"  placeholder="<?php echo __('note_driver'); ?>"  />
                                            </div>
                                            <div class="col-lg-12">
                                                <input class="form-control"  data-format="yyyy-mm-dd hh:mm:ss" type="text" readonly name="edit_pickup_date" id="edit_pickup_date" autocomplete="off" placeholder="<?php echo __('pickup_time'); ?>"></input>
                                            </div>                                            

                                            <input type="hidden" id="update_dispatch_id" name="update_dispatch" value="" />

                                            <div class="col-lg-12">
                                                <?php $field_type =''; if(isset($postvalue) && array_key_exists('taxi_model',$postvalue)){ $field_type =  $postvalue['taxi_model']; } ?>
                                                <select style="padding:0;" name="edit_taxi_model" id="edit_taxi_model" class="form-control" title="<?php echo __('select_the_taximodel'); ?>" OnChange="change_minfare(this.value,'edit');">
                                                    <option value=""><?php echo __('select_vehicle_label'); ?></option>
                                                    <?php 
                                                        foreach($model_details as $list) { ?>
                                                    <option value="<?php echo $list['model_id']; ?>" <?php if($field_type == $list['model_id']) { echo 'selected=selected'; } ?>><?php echo ucfirst($list['model_name']); ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="col-lg-12">
                                                 <select style="padding:0;" name="edit_promo_code" id="edit_promo_code" class="form-control" title="<?php echo __('select_the_promocode'); ?>" OnChange="validate_promocode(this.value,1);">
                                                    <option value=""><?php echo __('select_the_promocode'); ?></option>   
                                                    <?php if(count($promo_res_edit)){

                                                        foreach($promo_res_edit as $val){ ?>

                                                           <option value="<?php echo $val['promocode']; ?>"><?php echo $val['promocode']; ?> (<?php echo $val['passenger_commission']; ?>%)</option>';
                                                     <?php   }
                                                    } ?>                                               
                                                </select>
                                            </div> 

                                            <div class="col-lg-12">
                                                <input type="checkbox" name="fare_type" id="fare_type" value="1">Existing model fare apply
                                            </div>

                                            <?php /*
                                            <div class="col-lg-5">
                                                <input type="text" class="form-control" name="edit_luggage" id="edit_luggage" autocomplete="off"  placeholder="<?php echo __('luggage'); ?>"   />
                                            </div>
                                            <div class="col-lg-5" style="margin-right: 0;">
                                                <input type="text" class="form-control" name="edit_no_passengers" id="edit_no_passengers" autocomplete="off" placeholder="<?php echo __('passengers'); ?>"  />
                                            </div>
                                            */ ?>
                                        </div>                                                                                
                                    </div>
                                    <div class="row">
                                           <?php /*
                                        <div class="row" style="width:100%; padding-left: 0px;">
                                         
                                            <h4><?php echo strtoupper(__('vehicle')); ?></h4>
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <?php $field_type =''; if(isset($postvalue) && array_key_exists('taxi_model',$postvalue)){ $field_type =  $postvalue['taxi_model']; } ?>
                                                    <select style="padding:0;" name="edit_taxi_model" id="edit_taxi_model" class="form-control" title="<?php echo __('select_the_taximodel'); ?>" OnChange="change_minfare(this.value,'edit');">
                                                        <option value=""><?php echo __('select_label'); ?></option>
                                                        <?php 
                                                            foreach($model_details as $list) { ?>
                                                        <option value="<?php echo $list['model_id']; ?>" <?php if($field_type == $list['model_id']) { echo 'selected=selected'; } ?>><?php echo ucfirst($list['model_name']); ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            */ ?>                                    
                                        <?php /*
                                        <!--Booking type-->
                                        <div class="col-lg-5" style="margin-right:0px;">
                                            <h4><?php echo strtoupper(__('booking_type')); ?></h4>
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <input type="radio" name="edit_recurrent" value="1" <?php if(isset($postvalue) && array_key_exists('recurrent',$postvalue)) {  if($postvalue['recurrent'] == 1) { echo 'checked'; } } else { echo 'checked'; } ?> /> <?php echo __('single'); ?>
                                                </div>
                                                <div class="col-lg-12">
                                                    <input type="radio" name="edit_recurrent" value="2" /> <?php echo __('recurrent'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        * 
                                    </div>
                                    */ ?>
                                    <div class="row row_payment"  style="width:100%; padding-left: 0px;">
                                        <div class="col-lg-5">
                                            <h4><?php echo strtoupper(__('payment')); ?></h4>
                                            <ul class="payment_inner">
                                                <li>
                                                    <label><?php echo __('journey'); ?>:&nbsp;</label><span id="edit_find_duration"><?php echo __('zero_mins'); ?></span>
                                                </li>
                                                <li>
                                                    <label><?php echo __('distance'); ?>:&nbsp;</label><span id="edit_find_km"></span>
                                                </li>
                                                <?php /* <li>
                                                    <label><?php echo __('tax'); ?>:&nbsp;</label><span id="edit_vat_tax"><?php echo $company_tax; ?></span><span>%</span>
                                                </li> */ ?>
                                                <li>
                                                    <label><?php echo __('approx_fare'); ?>:&nbsp;</label><span id="edit_min_fare" class=""><?php echo '0'; ?></span><span><?php echo $company_currency; ?></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="map_addbooking_outer" --class="col-lg-5 col-lg-5_map">
                                            <div id="map_editbooking"></div>
                                        </div>
                                    </div>                                                                
                                    </div>
                                    <?php /** booking details **/ ?>
                                    <?php /**  VEHICLE details **/ ?>                                   
                                    <!--Booking type-->
                                    
                                    <?php /**  Payment **/ ?>
                                    <div class="form-group">
                                        <!--div id="directions"></div-->
                                        <?php /** hidden fields **/ ?>
                                        <div style="display:none;">
                                            <table>
                                                <tr>
                                                    <td>Start altitude:</td>
                                                    <td id="start"></td>
                                                </tr>
                                                <tr>
                                                    <td>End altitude:</td>
                                                    <td id="end"></td>
                                                </tr>
                                                <tr>
                                                    <td>Maximum latitude:</td>
                                                    <td id="max"></td>
                                                </tr>
                                                <tr>
                                                    <td>Minimum latitude:</td>
                                                    <td id="min"></td>
                                                </tr>
                                                <tr>
                                                    <td>Distance:</td>
                                                    <td id="distance"></td>
                                                </tr>
                                                <tr>
                                                    <td>Total ascent:</td>
                                                    <td id="ascent"></td>
                                                </tr>
                                                <tr>
                                                    <td>Total descent:</td>
                                                    <td id="descent"></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <ul id="acc" style="display:none;">
                                        <li><label><?php echo __('description'); ?> :</label><span id="desc">Rate Kilometer</span></li>
                                        <li><label><?php echo __('value'); ?> :</label><span><?php echo $company_currency; ?></span><span id="edit_min_value"></span></li>
                                        <li><label><?php echo __('subtotal'); ?> :</label><span><?php echo $company_currency; ?></span><span id="edit_sub_total"></span></li>
                                    </ul>
                                    <input type="hidden" name="edit_payment_type" value=""/>
                                    <input type="hidden" name="edit_fixedprice" value=""/>
                                    <input type="hidden" name="edit_pickup_time" value=""/>
                                    <input type="hidden" name="edit_pickup_lat" id="edit_pickup_lat" value="">
                                    <input type="hidden" name="edit_pickup_lng" id="edit_pickup_lng" value="">
                                    <input type="hidden" name="edit_drop_lat" id="edit_drop_lat" value="">
                                    <input type="hidden" name="edit_drop_lng" id="edit_drop_lng" value="">
                                    <input type="hidden" name="edit_info" id="info" value="">
                                    <input type="hidden" name="edit_model_minfare" id="edit_model_minfare" value="" >
                                    <input type="hidden" name="edit_distance_km" id="edit_distance_km" value="" >
                                    <input type="hidden" name="edit_total_fare" id="edit_total_fare" value="" >
                                    <input type="hidden" name="edit_total_duration" id="edit_total_duration" value="" >
                                    <input type="hidden" name="edit_total_duration_secs" id="edit_total_duration_secs" value="" >
                                    <input type="hidden" name="edit_city_id" id="edit_city_id" value="" >
                                    <input type="hidden" name="edit_cityname" id="edit_cityname" value="" >
                                    <input type="hidden" name="edit_payment_sec" id="edit_payment_sec" value="" >
                                    <input type="hidden" name="edit_company_tax" id="edit_company_tax" value="<?php echo $company_tax; ?>" >
                                    <input type="hidden" name="edit_default_company_unit" id="edit_default_company_unit" value="<?php echo UNIT_NAME; ?>" >
                                    <input type="hidden" name="old_model_id" id="old_model_id" value="">

                                    <input type="hidden" name="edit_recurrent" value="1"/>
                                    <input type="hidden" name="edit_luggage" value=""/>
                                    <input type="hidden" name="edit_no_passengers" value=""/>
                                    <input type="hidden" name="edit_pass_logid" id="edit_pass_logid" value=""/>
                                    <input type="hidden" name="edit_driver_id" id="edit_driver_id" value=""/>
                                    <input type="hidden" name="edit_admin_company_id" id="edit_admin_company_id" value=""/>
                                    <input type="hidden" name="travel_status" id="travel_status" value="">
                                    
                                <?php /*  <div class="form-group">
                                        <div class="col-lg-9 col-lg-offset-3">
                                        <div id="errors"></div>
                                        </div>
                                        </div> */ ?>
                                    <div class="form-group">
                                        <?php /*
                                            <div class="col-lg-9">
                                                <button type="submit" class="btn btn-primary" name="signup" value="Add Booking">Add Booking</button>
                                            </div>
                                            */ ?>
                                        <div class="col-lg-9">
                                            <button type="submit" class="btn btn-primary disable" id="update_submit" name="update" value="<?php echo __('button_update'); ?>"  ><?php echo __('button_update'); ?></button>
                                        </div>
                                        <div class="col-lg-9">
                                            <button type="submit" class="btn btn-primary disable" name=" update_dispatch"  id="update_dispatch" value="<?php echo __('dispatch'); ?>"   ><?php echo __('dispatch'); ?></button>
                                        </div>
                                        <div class="col-lg-9">
                                            <button type="button" class="btn btn-primary disable" name="cancel_button" id="cancel_button" value="<?php echo __('cancel'); ?>" ><?php echo __('cancel'); ?></button>
                                        </div>
                                        <div class="col-lg-9">
                                            <button type="button" class="btn btn-primary edit_reset_btn disable" name="reset" id = "update_reset" value="<?php echo __('button_reset'); ?>" ><?php echo __('button_reset'); ?></button>
                                        </div>
                                    </div>
                                    </form>
                                   
                    </div>
                     
                    
                    <?php /*
                    <div class="tab-content" id="tab-content_scroll">
                        <!--div class="tab-pane" id="add_booking"-->
                        <div class="tab-pane" id="add_booking">
                            
                        </div>
                        <div class="tab-pane" id="edit_booking">
                            
                        </div>
                    </div>

                    */ ?>
                <?php /*
                <div class="panel-group" id="steps">
                        <!-- Step 1 -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#steps" href="#add_booking">Add Booking #1</a></h4>
                            </div>
                            <div id="add_booking" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    
                                </div>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#steps" href="#edit_booking">Edit Booking #1</a></h4>
                            </div>
                            <div id="edit_booking" class="panel-collapse collapse">
                                <div class="panel-body">
                                    
                                </div>
                            </div>
                        </div>

                        
            </div>
            */ ?>
            </div>
            <!-- /.panel -->
                    
            <div id="map-section" class="col-md-8 col-md-8_scroll map_manage_booking driver_status_height_outer_top">
                <div class="widget margin-bottom">
                  <input type="hidden" name="select_driver_status" id="select_driver_status" value="">
                    <div id="on_going_trip_map" >
                        <div class="ongoing">
                            <div id="on_going_trip"></div>
                            <div id="on_going_place"></div>
                        </div>
                        <?php if(SHOW_MAP !=1) { ?>
                        <div id="map-canvas" style="width:100%;height:100%;margin:0;"></div>
                        <?php } ?>
                    </div>
                </div>
            </div>
             <div id="taxi_scroll_one" class="driver_status driver_status_height">
                <!-- Nav tabs
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#free_in_driver" id="free_in_driver_tab" role="tab" data-toggle="tab">Free IN</a></li>
                    <li><a href="#free_out_driver" role="tab" id="free_out_driver_tab" data-toggle="tab">Free OUT</a></li>
                    <li><a href="#active_driver" role="tab" id="active_driver_tab" data-toggle="tab">Active</a></li>
                </ul> -->
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="all_drivers">                        
                    </div>
                    <div class="tab-pane" id="free_in_driver">
                        <!--ul>
                            <li>
                                <span>Driver Name</span>
                                <span>Status</span>
                            </li>
                            <li>
                                <span>Abu</span>
                                <span>Free</span>
                            </li>                                
                            </ul-->
                    </div>
                    <div class="tab-pane" id="free_out_driver"></div>
                    <div class="tab-pane" id="active_driver"></div>
                    
                    
                </div>
            </div>
            <div class="total-earnings-outer">
            <div class="tab-content">
                <div class="tab-pane" id="total-earnings" style="display:block;visibility:visible;">
                    <?php
                        $month_name = date("F");
                     ?>
                    <h4 class="earning-title"><?php echo ucfirst($month_name); ?> Earnings</h4>
                    <ul>
                        <?php
                         $total_amt = isset($total_sum[0]['total_sum'])?$total_sum[0]['total_sum']:0;
                         $total_pending_amt = isset($total_sum[0]['total_pending'])?$total_sum[0]['total_pending']:0;
                         ?>
                        <li style="font-size:18;font-weight: 500"><b><span><?php echo CURRENCY.$total_amt; ?></span><span class='pending_payment_class'>(<?php echo CURRENCY.$total_pending_amt; ?>)</span></b></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="manage_booking_bottom_outer" id="booking_list">
 
            <div class="manage_booking_bottom manage_booking_bottom_scroll">
            <button  id="open_list" type="button" class="btn btn-default btn-sm  toggle_btn">
                    <span class="glyphicon glyphicon-chevron-up"></span></button>
                <div class="taxi_scroll_one_top">
                <table cellspacing="0" cellpadding="0" width="100%" align="center" class="dispatch_icons">
                                    <tr>
                                         <?php 
                                    if($_SESSION['user_type'] == 'O'){
                                    ?>
                                    <td>
                                        <div class="heading_icon_one"><input type="checkbox" name="status_color" checked value="0, 6, 7, 10" onchange="all_booking_manage_list()"></div>
                                            <label>Waiting for Dispatcher</label>
                                    </td>
                                    <?php
                                    }else{

                                    ?>
                                      <td>
                                            <div class="heading_icon_one"><input type="checkbox" name="status_color" checked value="0" onchange="all_booking_manage_list()"></div>
                                            <label>Assign</label>
                                        </td>
                                        <td>
                                            <div class="heading_icon_two"><input type="checkbox" name="status_color" checked value="6, 7, 10" onchange="all_booking_manage_list()"></div>
                                            <label>Reassign</label>
                                        </td>
                                        <?php /*
                                        <td>
                                            <div class="heading_icon_three"><input type="checkbox" name="status_color" value="7" onchange="all_booking_manage_list()"></div>
                                            <label>Waiting for response</label>
                                        </td>
                                        */ ?>


                                    <?php
                                    }
                                    ?>
                                        
                                        <td>
                                            <div class="heading_icon_four"><input type="checkbox" name="status_color" checked value="9" onchange="all_booking_manage_list()"></div>
                                            <label>Trip Confirmed</label>
                                        </td>
                                        <td>
                                            <div class="heading_icon_five"><input type="checkbox" name="status_color" checked value="3" onchange="all_booking_manage_list()"></div>
                                            <label>Start To Pickup</label>
                                        </td>
                                        <td>
                                            <div class="heading_icon_six"><input type="checkbox" name="status_color" checked value="2" onchange="all_booking_manage_list()"></div>
                                            <label>In Progress</label>
                                        </td>
                                        <td>
                                            <div class="heading_icon_sevan"><input type="checkbox" name="status_color" checked value="1" onchange="all_booking_manage_list()"></div>
                                            <label>Trip Completed</label>
                                        </td>
                                        <td>
                                            <div class="heading_icon_eight"><input type="checkbox" name="status_color" checked value="5" onchange="all_booking_manage_list()"></div>
                                            <label>Waiting for Payment</label>
                                        </td>
                                        <td>
                                            <input type="hidden" name="status_color_cancel" id="status_color_cancel" value="8">
                                            <div class="heading_icon_nine"><input type="checkbox" checked name="status_cancel" id="status_cancel" value="C,R" onchange="all_booking_manage_list()"></div>
                                            <label>Trip Cancelled</label>
                                        </td>
                                    </tr>
                                </table>
            </div>
          
            <div class="manage_booking_outer col-md-12 map_manage_booking" id="map_manage_booking">
                <div class="form-control_bott">
                    <div id="change_result">
                        <div class="widget">
                            <?php /*<div class="title">
                                <div style="width:auto; float:right; margin: 4px 3px;">
                                    <div class="button greyishB"></div>
                                </div>
                                </div>         */ ?>                    
                            <div class="overflow-block overflow-block_outer">                                
                                <table cellspacing="0" cellpadding="0" class="scroll" width="100%" align="center" id="changetr">
                                    <thead id="list_thead">
                                        <tr>
                                            <td align="center"><?php echo __('booking_time'); ?></td>
                                            <td align="center"><?php echo __('pickup_time'); ?></td>
                                            <td align="center"><?php echo __('trip_id'); ?></td>
                                            <td align="center"><?php echo __('passenger'); ?></td>
                                            <?php /*if($_SESSION['user_type']=="A"){ ?>
                                            <td align="center"><?php echo __('company_name'); ?></td>
                                            <?php } */ ?>
                                            <td align="center"><?php echo __('driver'); ?></td>
                                            <td align="center"><?php echo __('vehicle'); ?></td>
                                            <td align="center"><?php echo __('passenger_phone'); ?></td>
                                            <td align="center"><?php echo __('Current_Location'); ?></td>
                                            <td align="center"><?php echo __('Drop_Location'); ?></td>
                                            <td align="center"><?php echo __('time'); ?></td>
                                            <td align="center"><?php echo __('payment_type'); ?></td>
                                            <td align="center"><?php echo __('fare').'('.$company_currency.')'; ?></td>
<!--                                             <td align="center"><?php echo __('pending_amt'); ?></td>
 -->                                            <td align="center"><?php echo __('created_by'); ?></td>
                                            <td align="center"><?php echo __('status'); ?></td>
                                            <td align="center"><?php echo __('book_type'); ?></td>
                                            <td align="center"><?php echo __('notes'); ?></td>
                                            <td align="center" colspan="2" align="center"><?php echo __('action_label'); ?></td>
                                            <!--<td align="center" ></td>-->
                                        </tr>
                                    </thead>
                                    <tbody class="all_booking_manage_scroll" id="all_booking_manage_list">
                    <!---Manage Booking datas append here-->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
                    <!--Manage Tab-->

        <!--Manage Tab-->
            </div>
            <!--Manage Booking-->
        <?php /* <div class="rgt_outer">           
            <div class="friends-blog driver_status_bottom">
                <div class="recent_activity">
                    <h4>Recent Activity</h4>
                    <ul class="driver_status_height driver_status_height_re_act" id="recent_activity_content">
                        <!--Recent Activity Content Load Here-->
                        <!--li><span>Test</span></li-->
                    </ul>
                </div>
            </div>
        </div> */?>
        </div>
        </div>
    </div>
    <!-- :form -->
</div>

<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/tdispatch_addbooking_new.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/script.js"></script>

<script>
$(document).ready(function () {
    
    if(localStorage.getItem('upcoming_trips') == undefined || localStorage.getItem('upcoming_trips') == NaN || localStorage.getItem('upcoming_trips') == null)
    {
        var tinterval = <?php echo DISPATCHER_NOTIFICATION_TIME;?>;
        var timeinterval = tinterval*60000;

        $('#myUpcoming').modal('hide');
        trip_details_new();
        localStorage.setItem('upcoming_trips','1');
        console.log('initial'+timeinterval);

    }
    else
   {
        $('#myUpcoming').modal('hide');
    }
   
    $("#select_company").hide(); 
    <?php if(isset($show_popup['trip_id'])) 
    { 
    ?>

    edit_booking_from_manage('<?php echo $show_popup['trip_id']; ?>');
    <?php 
    } 
    if($_SESSION['user_type'] == 'O') { ?>
        
        $('#taxi_scroll_one').css('display', 'none');
        
    
    <?php } ?>
    /*$( "#taxi_scroll_manage" ).scroll(function() {
        //$(this).addClass( "sample" );
        if ($(this).scrollTop() > 1){    
            $('.fixed_header').addClass("sticky");
        } else{
            $('.fixed_header').removeClass("sticky");
        }
    }); */
    /*For load initial functions start*/
    //map_recur();
    //driver_status_dets();
    //recent_activity()
    //driver_list_with_status();
    all_booking_manage_list();
    /*For load initial functions end*/
    //to prevent enter 
    $(window).keydown(function(event) {
        if (event.keyCode == 13) {
            return false;
            //event.preventDefault();
        }
    }); 
        
    $('#myModal').modal('show');
  jQuery.validator.addMethod("country_code_plus", function(value, element) {
      var regex = new RegExp("^[\w+][0-9]+$");
        var key = value;

        if (!regex.test(key)) {
           return false;
        }
        return true;
}, " Country code must be start with +");


    $('#defaultForm').validate({ // initialize the plugin
    //alert('as');
       rules: {
           firstname: {
               required: true,
               minlength: 3
           },
           email: {
               //required: true,
               email: true
           },
           phone: {
               required: true,
           },
           country_code: {
               country_code_plus: true,
               required:true,
           },
           current_location: {
               required: true,
           },
           taxi_model: {
               required: true,
           },
           pickup_date: {
               required: true,
           },
       },
       messages: {
           firstname: {
               required: "The name cannot empty",
               minlength: jQuery.validator.format("At least {0} characters required!")
           },
           email: {
               //required: "The email cannot empty",
               //email: "Your email address must be in the format of name@domain.com"
               email: "Please enter valid email"
           },
           country_code: {
               required: "The country code cannot empty",
           },
           phone: {
               required: "The mobile number cannot empty",
           },
           current_location: {
               required: "Enter the pickup location",
           },
           taxi_model: {
               required: "Select the vehicle",
           },
           pickup_date: {
               required: "Select the pickup date",
           },
       }
   });
       
    $('#defaultForm_edit').validate({ // initialize the plugin
        rules: {
            edit_firstname: {
                required: true,
                minlength: 3
            },
            edit_email: {
                //required: true,
                email: true
            },
            edit_country_code: {
                required: true,
            },
            edit_phone: {
                required: true,
            },
            edit_current_location: {
                required: true,
            },
            edit_taxi_model: {
                required: true,
            },
            edit_pickup_date: {
                required: true,
            },
        },
        messages: {
            edit_firstname: {
                required: "The name cannot empty",
                minlength: jQuery.validator.format("At least {0} characters required!")
            },
            edit_email: {
                //required: "The email cannot empty",
                //email: "Your email address must be in the format of name@domain.com"
                email: "Please enter valid email"
            },
            edit_country_code: {
                required: "The country code cannot empty",
            },
            edit_phone: {
                required: "The mobile number cannot empty",
            },
            edit_current_location: {
                required: "Enter the pickup location",
            },
            edit_taxi_model: {
                required: "Select the vehicle",
            },
            edit_pickup_date: {
                required: "Select the pickup date",
            },
        }
    });
    
    $("#pay_submit").on('click',function(e)
     {
         e.preventDefault();
        // alert("hi");
        var flag = 0;
      	
         $("input.pay").each(function() {
            var id = $(this).attr('id');
        if(id!='add_amt' && id!='pending_pay'){
        var val = $(this).val();
               if(val < 0)
               {
                   $("#add_err").html("*Invalid values");
                   flag = 1;
               }
	   }
        });
	
           if(flag == 1){
            return false;
           }
        var card = $("#card_pay").val();
        var cash = $("#cash_pay").val();
        var knet = $("#knet_pay").val();
        var add_amt = $("#add_amt").val();
        var pending_pay = $("#pending_pay").val();
        var wallet_pay = $("#wallet_pay").val();
        var fare_note = $("#fare_note").val();
        var disp_edit_pass_id = $("#disp_edit_pass_id").val();
        var disp_edit_trip_id = $("#disp_edit_trip_id").val();
        var prev_pending_pay = $("#prev_pending_pay").val();
        var tot = $("#edit_min_fare1").text().split("(");
        var fare = tot[0];

	 if(card != '0' && cash != '0')
        {
            $("#add_err").html("Both Cash and Cash Values cannot be edited");
            return false; 
        }

	if(knet != 0 && (card != '0' || cash != '0'))
        {
            $("#add_err").html("Cash and Card amount cannot be altered for Knet payment");
            return false; 
        }
        
        var cash_tot = parseFloat(card)+parseFloat(cash)+parseFloat(knet)+parseFloat(pending_pay)+parseFloat(wallet_pay);
        //alert(card+" " +cash+" "+knet+" "+add_amt+" "+tot+" "+cash_tot);
        if(isNaN(add_amt) || isNaN(cash) || isNaN(knet) || isNaN(card))
        {
            $("#add_err").html("*Only numeric values are allowed");
        }
        else
        {
            $("#add_err").html("");

            //isNaN(cash_tot) ||
            if( add_amt == '' || fare_note == ''){
                $("#add_err").html("*Field must not be empty");
            }else{
                // if(fare == cash_tot)
                // {
                // $("#add_err").html("");
                // }
                // else
                // {
                //    //alert(cash_tot);
                //     $("#add_err").html("*Total amount doesn't match fare amount");
                // }  

                if((parseFloat(tot)+parseFloat(add_amt)) < 0 )
                {
                   $("#add_err").html("*Total amount doesn't be less than zeros");
 
                }  
            }
            
        }
        
        if($("#add_err").text()== "")
        {
            var findid = $('#edit_pass_logid1').val();
            var data = "add_amt="+add_amt+"&cash_pay="+cash+"&card_pay="+card+"&knet_pay="+knet+"&fare_note="+fare_note+"&edit_pass_logid="+findid+"&pending_pay="+pending_pay+"&wallet_pay="+wallet_pay+"&pass_id="+disp_edit_pass_id+"&trip_id="+disp_edit_trip_id+"&prev_pending_pay="+prev_pending_pay;
            var url_path = "<?php echo URL_BASE;?>taxidispatch/pay_details";
             $.ajax({
                type: "POST",
                url:url_path,
                data: data, 
                async: true,
                success:function(response){
                    if(response == 1){
			all_booking_manage_list();
                       $("#submit_form_pay").hide();
                       $("#cash_pay #card_pay #knet_pay #add_amt").val(0);
                       $("#fare_note").value('');
                        alert("Payment updated Successfully");    

                    }else{
                        alert("Payment not updated");    
                    }
                
                } 
            });
        }


     });  
       
    $("#close_button,#reset").on('click',function(){
        //to reset the form fields
        $("#firstname").val("");
        $("#email").val("");
        $("#country_code").val("");
        $("#phone").val("");
        $("#current_location").val("");
        $("#drop_location").val("");
        $("#notes").val("");
        $("#promo_code").val("");
        var today = new Date();
        var Y = today.getFullYear(),
            month = today.getMonth()+1,
            dateVal = today.getDate(),
            h = today.getHours(),
            m = today.getMinutes(),
            s = today.getSeconds();
            month = (month < 10) ? "0" + month : month;
            dateVal = (dateVal < 10) ? "0" + dateVal : dateVal;
            h = (h < 10) ? "0" + h : h;
            m = (m < 10) ? "0" + m : m;
            s = (s < 10) ? "0" + s : s;
        var pickupTime = Y + "-" + month + "-" + dateVal + " " + h + ":" + m + ":" + s;
        $("#pickup_date").val(pickupTime);
        $("#taxi_model").val("");
         $("#email").removeAttr("readonly");
         $("#firstname").removeAttr("readonly");
         $("#phone").removeAttr("readonly");
         $("#country_code").removeAttr("readonly");
        //to reset the distance and fare texts
        $("#find_duration").html("<?php echo __('zero_mins'); ?>");
        $("#find_km").html("<?php echo __('zero_distance'); ?>");
        $("#min_fare").html("0");
        //to hide the error messages
        $("label.error").html("");
        initialize();
    });
        
    $(".edit_reset_btn").on('click',function(){
        var findid = $('#edit_pass_logid').val();
        var default_unit = $('#edit_default_company_unit').val();
        var dataS = "passenger_logid="+trim(findid);        
        $.ajax({
            type: "GET",
            url: "<?php echo URL_BASE;?>taxidispatch/edit_booking", 
            data: dataS, 
            cache: false, 
            async: true,
            contentType: "application/json; charset=utf-8",
            dataType: "json",           
            success: function(response) 
            {
                var data=response;
                var details=data[0];
                //console.log(details);
                $("#add_booking").removeClass("in");
                $("#edit_booking").addClass("in");
                //to add id for reset button in edit
                $('#edit_passenger_id').val(details.passengers_id);
                $('#edit_pass_logid').val(details.pass_logid);
                $('#edit_driver_id').val(details.driver_id);
                $('#edit_total_fare').val(details.approx_fare);
                $('#edit_distance_km').val(details.approx_distance);
                
                $('#edit_firstname').val(details.passenger_name);
                $('#edit_email').val(details.passenger_email);
                $('#edit_phone').val(details.passenger_phone);
                $('#edit_country_code').val(details.country_code);

                $('#edit_current_location').val(details.current_location);
                $('#edit_pickup_lat').val(details.pickup_latitude);
                $('#edit_pickup_lng').val(details.pickup_longitude);
                
                $('#edit_drop_location').val(details.drop_location);
                $('#edit_drop_lat').val(details.drop_latitude);
                $('#edit_drop_lng').val(details.drop_longitude);
                $('#edit_pickup_date').val(details.pickup_time);
                $('#edit_luggage').val(details.luggage);
                $('#edit_no_passengers').val(details.no_passengers);
                $('#edit_notes').val(details.notes_driver);
                $('#edit_taxi_model').val(details.taxi_modelid);

                $('#edit_city_id').val(details.search_city);
                $('#edit_total_duration').val(details.approx_duration);
                $('#edit_find_duration').html(details.approx_duration);
                $('#edit_find_km').html(details.approx_distance+" "+default_unit);
                $('#edit_min_fare').html(details.approx_fare);
            } 
        });
    });
        
    /* //script to hide dispatch button if future time is selected as pickuptime
    $("#pickup_date").on('change',function(){
        var pickupDate = $(this).val();//datetime is in yyyy-mm-dd hh:ii:ss format
        var dateString = pickupDate,
        dateParts = dateString.split(' '),
        timeParts = dateParts[1].split(':'),
        date;
        dateParts = dateParts[0].split('-');

        date = new Date(dateParts[0], parseInt(dateParts[1], 10) - 1, dateParts[2], timeParts[0], timeParts[1], timeParts[2]);
        var today = new Date();
        if(date.getTime() > today.getTime()){
            $('#dispatch').attr('disabled','disabled');
        } else {
            $('#dispatch').removeAttr('disabled');
        }
    }); */

    $("#dispatch").on('click',function(){           
        var addValid = $("#defaultForm").valid({});
        if(addValid) {
            $('#dispatch').attr('disabled','disabled');
            $('#dispatch_id').val("Dispatch");
            document.getElementById('defaultForm').submit();
        }
        return addValid;
    });
    $("#update_dispatch").on('click',function(){
        var editValid = $("#defaultForm_edit").valid({});
        if(editValid) {
            $('#update_dispatch').attr('disabled','disabled');
            $('#update_dispatch_id').val("Dispatch");
            document.getElementById('defaultForm_edit').submit();
        }
        return editValid;
    });
    
        $('#current_location, #drop_location').blur(function(){
            var id = this.id;
            var p_loc = $('#'+id).val();
            var pic = (p_loc != '')?p_loc.split('-'):[];
            if(pic.length == 2)
            {
                var l = (id == 'current_location')?'pickup':'drop';
                $('#'+l+'_lat').val(pic[0]);
                $('#'+l+'_lng').val(pic[1]);
                geocodeLatLng(pic[0],pic[1],id);
            }
            (id == 'current_location')?$('#drop_location').focus():$('#notes').focus();
        });
    $("#create").on('click',function(){
            var addValid = $("#defaultForm").valid({});
        /*if(!addValid) {
            if($("#defaultForm label[for='country_code']").css("display") == "block"){
                $("#defaultForm label[for='phone']").css('display','none');
            }
        } */

            if(addValid) {
                $('#create').attr('disabled','disabled');
                $('#dispatch').attr('disabled','disabled');
                $('#create_id').val("Dispatch");
                document.getElementById('defaultForm').submit();
            }
            return addValid;
    });
    
    /* //script to hide dispatch button if future time is selected as pickuptime
    $("#edit_pickup_date").on('change',function(){
        var pickupDate = $(this).val();//datetime is in yyyy-mm-dd hh:ii:ss format
        var dateString = pickupDate,
        dateParts = dateString.split(' '),
        timeParts = dateParts[1].split(':'),
        date;
        dateParts = dateParts[0].split('-');

        date = new Date(dateParts[0], parseInt(dateParts[1], 10) - 1, dateParts[2], timeParts[0], timeParts[1], timeParts[2]);
        var today = new Date();
        if(date.getTime() > today.getTime()){
            $('#update_dispatch').attr('disabled','disabled');
        } else {
            $('#update_dispatch').removeAttr('disabled');
        }
    });*/
});
    var locations = {}; //A repository for markers (and the data from which they were contructed).

    $('#drop_location').on('change', function() {
        var a=$('#drop_location').val();
        if(a == ""){
            $('#drop_lat').val('');
            $('#drop_lng').val('');
            $('#distance_km').val('0');
            $('#total_fare').val('0');
            $('#min_fare').html('0');
            $('#find_km').html('0');
            $('#find_duration').html('0');
        }
    });

    $('#edit_drop_location').on('change', function() {
        var a=$('#edit_drop_location').val();
        if(a == ""){
            $('#edit_drop_lat').val('');
            $('#edit_drop_lng').val('');
            $('#edit_distance_km').val('0');
            $('#edit_total_fare').val('0');
            $('#edit_min_fare').html('0');
            $('#edit_find_km').html('0');
            $('#edit_find_duration').html('0');
            $('#edit_total_duration').val('0');
        }
    });

    $('#taxi_model').on('change', function() {
        var a=$('#taxi_model').val();
        if(a == ""){
            $('#total_fare').val('0');
            $('#min_fare').html('0');
        }
    });

    $('#edit_taxi_model').on('change', function() {
        var a=$('#edit_taxi_model').val();
        if(a == ""){
            $('#edit_total_fare').val('0');
            $('#edit_min_fare').html('0');
        }
    });
    
    
    $('#select_taxi_model').on('change', function() {
        var taxi_model=$(this).val();
        //to get the filtered model in taxi model dropdown
        $("#taxi_model").val(taxi_model);
        $("#edit_taxi_model").val(taxi_model);
    });

    //initial dataset for markers
    var locs = {
    <?php   $b=1; 
        $a=count($all_company_map_list);
        if($a > 0) { 
            for($i=0;$i<$a;$i++){ ?>
                <?php echo $b; ?>: {
                    <?php
                    $book_now="";
                    if($all_company_map_list[$i]['driver_status']=="F" && $all_company_map_list[$i]['shift_status']=="IN"){
                        $driver_info='<span style="color:green">'.__('free_in').'</span>';
                        //$book_now='<button type="button" class="btn btn-outline btn-primary btn-xs" name="bookingnow" onclick="bookingnow_click(this.id);" id="driverid_'.$all_company_map_list[$i]['driver_id'].'" >'.__('booknow').'</button>';
                    }elseif($all_company_map_list[$i]['driver_status']=="F" && $all_company_map_list[$i]['shift_status']=="OUT"){
                        $driver_info='<span style="color:blue">'.__('free_out').'</span>';
                    }elseif($all_company_map_list[$i]['driver_status']=="B"){
                        $driver_info='<span style="color:#07841E">'.__('trip_assigned').'</span>';
                    }elseif($all_company_map_list[$i]['driver_status']=="A"){
                        $driver_info='<span style="color:red">'.__('hired').'</span>';
                    }
                    $update_date=date('Y-m-d H:i:s',$all_company_map_list[$i]['update_date']->sec);
                    $drv_info='<span class="info-content">'.ucfirst($all_company_map_list[$i]['name']).'</span>';
                    $drv_info.='</br>';
                    $drv_info.='<span class="info-content">'.$driver_info.'</span>';
                    $drv_info.='</br>';
                    $drv_info.='<span class="info-content">'.$update_date.'</span>';
                    if($book_now !=""){
                        $drv_info.='</br>';
                        //$drv_info.='<span class="info-content">'.$book_now.'</span>';
                    }
                    ?>
                    //info: '<?php echo $all_company_map_list[$i]['name'] ; ?>',
                    info: '<?php echo $drv_info; ?>',
                    lat: <?php echo $all_company_map_list[$i]['loc'][1] ; ?>,
                    lng: <?php echo $all_company_map_list[$i]['loc'][0] ; ?>,
                    status: '<?php echo $all_company_map_list[$i]['driver_status'] ; ?>',
                    shift_status: '<?php echo $all_company_map_list[$i]['shift_status'] ; ?>'
                },
            <?php $b++;
            }
        } ?>
    };
    
    <?php
    if($_SESSION['user_type'] == 'O'){

    ?>
    <?php
    }else{
    ?>
    initmap();
    var mainMap;
      function initmap(){
        mainMap = new google.maps.Map(document.getElementById('map-canvas'), {
        zoom: 9,
        maxZoom: 17,
        minZoom: 1,
        streetViewControl: false,
        center: new google.maps.LatLng(<?php echo $current_latitude;?>,<?php echo $current_longitude;?>),
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        styles:[
          {elementType: 'geometry', stylers: [{color: '#ebe3cd'}]},
          {elementType: 'labels.text.fill', stylers: [{color: '#523735'}]},
          {elementType: 'labels.text.stroke', stylers: [{color: '#f5f1e6'}]},
          {
            featureType: 'administrative',
            elementType: 'geometry.stroke',
            stylers: [{color: '#c9b2a6'}]
          },
          {
            featureType: 'administrative.land_parcel',
            elementType: 'geometry.stroke',
            stylers: [{color: '#dcd2be'}]
          },
          {
            featureType: 'administrative.land_parcel',
            elementType: 'labels.text.fill',
            stylers: [{color: '#ae9e90'}]
          },
          {
            featureType: 'landscape.natural',
            elementType: 'geometry',
            stylers: [{color: '#dfd2ae'}]
          },
          {
            featureType: 'poi',
            elementType: 'geometry',
            stylers: [{color: '#dfd2ae'}]
          },
          {
            featureType: 'poi',
            elementType: 'labels.text.fill',
            stylers: [{color: '#93817c'}]
          },
          {
            featureType: 'poi.park',
            elementType: 'geometry.fill',
            stylers: [{color: '#a5b076'}]
          },
          {
            featureType: 'poi.park',
            elementType: 'labels.text.fill',
            stylers: [{color: '#447530'}]
          },
          {
            featureType: 'road',
            elementType: 'geometry',
            stylers: [{color: '#f5f1e6'}]
          },
          {
            featureType: 'road.arterial',
            elementType: 'geometry',
            stylers: [{color: '#fdfcf8'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry',
            stylers: [{color: '#f8c967'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry.stroke',
            stylers: [{color: '#e9bc62'}]
          },
          {
            featureType: 'road.highway.controlled_access',
            elementType: 'geometry',
            stylers: [{color: '#e98d58'}]
          },
          {
            featureType: 'road.highway.controlled_access',
            elementType: 'geometry.stroke',
            stylers: [{color: '#db8555'}]
          },
          {
            featureType: 'road.local',
            elementType: 'labels.text.fill',
            stylers: [{color: '#806b63'}]
          },
          {
            featureType: 'transit.line',
            elementType: 'geometry',
            stylers: [{color: '#dfd2ae'}]
          },
          {
            featureType: 'transit.line',
            elementType: 'labels.text.fill',
            stylers: [{color: '#8f7d77'}]
          },
          {
            featureType: 'transit.line',
            elementType: 'labels.text.stroke',
            stylers: [{color: '#ebe3cd'}]
          },
          {
            featureType: 'transit.station',
            elementType: 'geometry',
            stylers: [{color: '#dfd2ae'}]
          },
          {
            featureType: 'water',
            elementType: 'geometry.fill',
            stylers: [{color: '#b9d3c2'}]
          },
          {
            featureType: 'water',
            elementType: 'labels.text.fill',
            stylers: [{color: '#92998d'}]
          }
        ]
    });


} 
 
    
    function change_email_phone_exit()
    {
        
        //alert("sdf");
        event.preventDefault();
        /*alert("asddf");return false;
        var dataS = "pass_email="+pass_email+"&pass_phone="+pass_phone+"&pass_id="+pass_id;
        var url_path = "<?php echo URL_BASE; ?>taxidispatch/check_pass_phone_email_exist";
        $.ajax({
            type: "GET",
            url:url_path,
            data: dataS, 
            async: true,
            success:function(data){
                alert(data);return false;
                if(data != 0){
                    alert("Email/Phone already exist");
                    return false;
                }
            },
            error:function() {
                //alert('failed'); 
            }
        }); */
        
        
    
    }

    var infowindow = new google.maps.InfoWindow();
    
    setMarkers(locs,1); // 1 as-Deafult Search Drivers
    
    function map_recur()
    {
        //alert('map_recur');
        var status = $("#select_driver_status").val();
        if(status !=""){
            var driver_status=$("#select_driver_status").val();
        }else{
            var driver_status="";
        }

        var model = $("#select_taxi_model").val();
        if(model !=""){
            var taxi_model=$("#select_taxi_model").val();
        }else{
            var taxi_model="";
        }

        var company = $("#select_company").val();
        if(company !=""){
            var taxi_company=$("#select_company").val();
        }else{
            var taxi_company="";
        }

        //driver_status_dets();
        //all_booking_manage_list();
        
        $('#admin_company_id').val(taxi_company);
        $('#edit_admin_company_id').val(taxi_company);

        if(driver_status!='')
        {
            //$('#map-canvas').html('<img src="'+SrcPath+'/public/css/img/ajax-loaders/ajax-loader-1.gif" >');
            var Path = "<?php echo URL_BASE; ?>";
            
            if(driver_status!=""){
                var dataS = "driver_status="+driver_status+"&taxi_company="+taxi_company;
                var url_path = Path+"taxidispatch/driver_status_details_search_new";
            }
            
            var markers=new Array();
            $.ajax({
                type: "GET",
                url:url_path,
                data: dataS, 
                async: true,
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success:function(data){
                    //For remove old markers
                    removeMarkers(locations);
                    setMarkers(data); // 2-As Driver status Search
                    if(data != "")
                    {
                        $('#on_going_trip').html('');   
                    }
                    else
                    {
                        $('#on_going_trip').html('No driver found');    
                    }
                },
                error:function() {
                    //alert('failed'); 
                }
            });
        }else{
            //alert('map_recur else');
            var Path = "<?php echo URL_BASE; ?>";
            var url_path = Path+"taxidispatch/view_all_driverss";
            var dataS = "taxi_model="+taxi_model+"&taxi_company="+taxi_company;
            var markers;
            
            $.ajax({
                url:url_path,
                type: "GET",
                data: dataS, 
                async: true,
                contentType: "application/json; charset=utf-8",
                dataType: "json",           
                success:function(response){
                    //For remove old markers
                    removeMarkers(locations);
                    setMarkers(response); // 2-As Driver status Search
                    if(response != "")
                    {
                        $('#on_going_trip').html('');   
                    }
                    else
                    {
                        //$('#on_going_trip').html('<?php echo __('no_login_drivers'); ?>');    
                        $('#on_going_trip').html('');   
                    }
                },
                error:function() { //alert('failed'); 
                },
            });
        }
    }

    function driver_status_dets()
    {
        var company = $("#select_company").val();
        if(company !=""){
            var taxi_company=$("#select_company").val();
        }else{
            var taxi_company="";
        }
        
        var taxi_model = $("#select_taxi_model").val();
        
        var Path = "<?php echo URL_BASE; ?>";
        var all_drivers = "";
        var dataS = "driver_status="+all_drivers+"&taxi_company="+taxi_company+"&taxi_model="+taxi_model;
        var url_path = Path+"taxidispatch/driver_status_search_details";
        $.ajax({
            type: "GET",
            url:url_path,
            data: dataS, 
            async: true,
            success:function(data){
                
                if(data != ""){
                    var response = data.split("#");
                    $('#all_drivers').html(response[0]);    
                    $('#driver_dets_count').html(response[1]);  
                }
            },
            error:function() {
                //alert('failed'); 
            }
        });
    }
    
    function driver_list_with_status()
    {
        var taxi_company=$("#select_company").val();
        var taxi_model = $("#select_taxi_model").val();
        var driver_status = $("#select_driver_status").val();
        
        var Path = "<?php echo URL_BASE; ?>";
        
        var dataS = "driver_status="+driver_status+"&taxi_company="+taxi_company+"&taxi_model="+taxi_model;
        var url_path = Path+"taxidispatch/driver_list_with_status";
        $.ajax({
            type: "GET",
            url:url_path,
            data: dataS, 
            async: false,
            success:function(data){
                //console.log(data);return false;
               // all_booking_manage_list();
                if(data != ""){
                    var response = data.split("#");
                    $('#all_drivers').html(response[1]);    
                    $('#driver_dets_count').html(response[2]);  
                    var locations_val = $.parseJSON(response[0]);
                    //For remove old markers
                    removeMarkers(locations);
                    setMarkers(locations_val); // 2-As Driver status Search
                    if(locations_val != "")
                    {
                        $('#on_going_trip').html('');   
                    }
                    else
                    {
                        //$('#on_going_trip').html('<?php echo __('no_login_drivers'); ?>');    
                        $('#on_going_trip').html('');
                    }
                }
            },
            error:function() {
                //alert('failed'); 
            }
        });
    }

    function recent_activity()
    {
        var Path = "<?php echo URL_BASE; ?>";
        var dataS = "";
        var url_path = Path+"taxidispatch/get_recent_activity";
        var response;
        $.ajax({
            type: "GET",
            url: url_path, 
            data: dataS, 
            cache: false, 
            dataType: 'html',
            success: function(response){
                $('#recent_activity_content').html(response);
            }        
        }); 
    }
<?php
    }//end of else alert
    ?>
 
 
    
    function all_booking_manage_list()
    {
        var taxi_company = $("#select_company").val();
        //console.log(taxi_company);    
        var favorite = [];
        var bk_type = '';
        <?php if($_SESSION['user_type'] != 'O'){
        ?>
        var bk_type = $('#select_trip_type').val();
        <?php
        }?>
        
        $.each($("input[name='status_color']:checked"), function(){            
            favorite.push($(this).val());
        });
        
        var status_color_cancel = $('#status_color_cancel').val();
                var status_cancel = [];
        $.each($("input[name='status_cancel']:checked"), function(){            
            status_cancel.push($(this).val());
                        favorite.push(status_color_cancel);
                        favorite.push('4');
        });     
        var status_color=favorite.join(", ");
        //console.log(status_cancel);
        var Path = "<?php echo URL_BASE; ?>";
        var dataS = "travel_status="+status_color+"&status_cancel="+status_cancel+"&taxi_company="+taxi_company+"&bk_t="+bk_type;
        var url_path = Path+"taxidispatch/all_booking_list_manage";
        var response;
        $.ajax({
            type: "GET",
            url: url_path, 
            data: dataS, 
            cache: false, 
            dataType: 'html',
            success: function(response){
<?php 
                if($_SESSION['user_type'] !='O'){
                    ?>
                driver_list_with_status();    
                <?php
                }
                ?>
                
                var data = response.split("@");
                if(data[0] == 0) {
                    $("#list_thead").hide();
                } else {
                    $("#list_thead").show();
                }
                $('#all_booking_manage_list').html(data[1]);
                //edit booking in dashboard
                $('.oddtr').bind('click', function(){
                    console.log("oddtrk");
                    var isrdata = this.id;
                    var findid = isrdata.split('_').pop();
                    //alert(findid);
                    var find = isrdata.split('_');
                    var findname= find[0];
                    var default_unit = $('#edit_default_company_unit').val();
                    var editbook=$("#edit_book_tab").attr("class");
                   // alert(editbook);
                    if(findname == 'addtrfare')
                    {
                        //alert("sumit oay");
                        $("#submit_form_pay").show();
                                $("#cash_pay").val(0);
                                    $("#card_pay").val(0);
                                    $("#knet_pay").val(0);
                                    $("#add_amt").val(0);
                        $("#edit_book_tab").hide();
                        $("#add_book_tab").hide();
                    }
                    else{
                    if(editbook=="edit_book_active"){
                        $("#edit_book_tab").removeClass('edit_book_active');
                        $("#edit_book_tab").removeClass('edit_booking_'+findid);
                        $("#edit_book_tab").hide();
                        $("#submit_form_pay").hide();
                        $("#eb_tab").removeClass('active');
                        $("#add_booking_tab").html('Add Booking');
                        <?php

                        if($_SESSION['user_type'] == 'O'){
                         ?>
                         $(".add_book_tab").show();                                
                        <?php
                        }
                        ?>
                    }else{
                         <?php

                        if($_SESSION['user_type'] == 'O'){
                         ?>
                         $(".add_book_tab").hide();                                
                        <?php
                        }else{
                            ?>
                            $("#add_book_tab").hide();       
                            <?php
                        }
                        ?>
                        $("#eb_tab").addClass('active');
                        $("#submit_form_pay").hide();
                        $("#edit_book_tab").addClass('edit_book_active');
                        $("#edit_book_tab").addClass('edit_booking_'+findid);
                        $("#edit_book_tab").show();
                        $("#ab_tab").removeClass('active');
                        $("#ab_tab").css('display','none');
                        $("#eb_tab").css('display','block');
                        //
                        $("#add_booking_tab").html('Edit Booking');
                    } //$("#edit_book_tab").hide();
                }
                    //get_promocode_list('','',1);
                    var dataS = "passenger_logid="+trim(findid);                    
                    $.ajax({
                        type: "GET",
                        url: "<?php echo URL_BASE;?>taxidispatch/edit_booking", 
                        data: dataS, 
                        cache: false, 
                        async: true,
                        contentType: "application/json; charset=utf-8",
                        dataType: "json",
                        success: function(response) 
                        {
                            var data=response;
                            var details=data[0];
                            //alert(details.travel_status);
                            //$("#edit_book_tab").hide();
                            //$("#submit_form_pay").hide();
                            if(details.travel_status == 1)
                            {
                                //$("#add_booking_tab").html('Enter pay');
                                //$("#submit_form_pay").show();
                               // $('.disable').prop('disabled', true);
                                 $("#travel_status").val(details.travel_status);
                                /*if(details.faretype == 1){$(cash_pay).val(details.approx_fare);}
                                 if(details.faretype == 6){$(card_pay).val(details.approx_fare);}
                                  if(details.faretype == 3){$(knet_pay).val(details.approx_fare);}
                            if(details.card_pay != ''){ $(card_pay).val(details.card_pay);}
                            if(details.cash_pay != ''){ $(cash_pay).val(details.cash_pay);}
                            if(details.knet_pay != ''){ $(knet_pay).val(details.knet_pay);}
                            if(details.additional_amount != ''){ $(add_amt).val(details.additional_amount);}*/
                            //$('.readonly').prop('readonly', true);
                           /* if(details.approx_duration != '') {
                                $('#edit_find_duration1').html(details.approx_duration);
                            } else {
                                $('#edit_find_duration1').html('0');
                            }
                            
                            if(details.approx_distance != '') {
                                $('#edit_find_km1').html(details.approx_distance+" "+default_unit);
                            } else {
                                $('#edit_find_km1').html("0 "+default_unit);
                            }*/
                            var fare = $("#fare_"+findid).text().split("(");
                            $('#edit_min_fare1').html(fare[0]);

                            //$('#travel_status1').val(details.travel_status);
                            $('#edit_pass_logid1').val(details.pass_logid);
                            //alert(fare);
                                if( typeof details.pay == "undefined")
                                {

                                 if(details.faretype == 1){$("#cash_pay").val(fare);$("#cash_pay_show").val(fare);}
                                 else{$("#cash_pay").val(0);$("#cash_pay_show").val(0);}
                                 if(details.faretype == 6){$("#card_pay").val(fare);$("#card_pay_show").val(fare);}
                                 else{$("#card_pay").val(0);$("#card_pay_show").val(0);}
                                  if(details.faretype == 3){$("#knet_pay").val(fare);$("#knet_pay_show").val(fare);} 
                                  else{$("#knet_pay").val(0);$("#knet_pay_show").val(0);}
                                  $("#add_amt").val(0);
                                  $("#fare_note").val("");                    
                                }
                                else
                                {
                                    $("#cash_pay").val(details.pay[0]);
                                    $("#cash_pay_show").val(details.pay[0]);
                                    $("#card_pay").val(details.pay[1]);
                                    $("#card_pay_show").val(details.pay[1]);
                                    $("#knet_pay").val(details.pay[2]);
                                    $("#knet_pay_show").val(details.pay[2]);
                                    $("#add_amt").val(details.pay[3]);
                                    $("#wallet_pay").val(details.pay[4]);                             
                                    $("#wallet_pay_show").val(details.pay[4]);                             
                                    $("#pending_pay").val(details.pay[5]);                             
                                    $("#prev_pending_pay").val(details.pay[5]);                             
                                    $("#pending_pay_show").val(details.pay[5]);                             
                                    $("#fare_note").val(details.pay[6]);                             
                                    $("#disp_edit_pass_id").val(details.passengers_id);                             
                                    $("#disp_edit_trip_id").val(details.pass_logid);                             
                                }
                                 /*if(details.faretype == 1){$(cash_pay).val(details.approx_fare);}
                                 if(details.faretype == 6){$(card_pay).val(details.approx_fare);}
                                  if(details.faretype == 3){$(knet_pay).val(details.approx_fare);}
                                 alert(details.pay[0]);
                                 if(details.pay[0] != ""){$("#cash_pay").val(details.pay[0])} ;
                                  else
                                  {
                                    $("#cash_pay").val("");
                                  }
                                 $("#card_pay").val(details.pay[1]);
                                 $("#knet_pay").val(details.pay[2]);
                                 $("#add_amt").val(details.pay[3]);*/
                                  

                            /*$('#edit_email').prop('readonly', true);
                            $('#edit_phone').prop('readonly', true);
                            $('#edit_country_code').prop('readonly', true);
                            $('#edit_current_location').prop('readonly', true);
                            $('#edit_drop_location').prop('readonly', true);
                            $('#edit_notes').prop('readonly', true);
                            $('#edit_taxi_model').prop('disabled', true);*/

                            }
                            else{
                                //$('.disable').prop('disabled', false);
                                 /*$('#update_submit').prop('disabled', false);
                                  $('#cancel_button').prop('disabled', false);
                                 $('#update_reset').prop('disabled', false);*/
                               //  $('#').prop('readonly', false);
                           // $('.readonly').prop('readonly', false);
                            /*$('#edit_phone').prop('readonly', false);
                            $('#edit_country_code').prop('readonly', false);
                            $('#edit_current_location').prop('readonly', false);
                            $('#edit_drop_location').prop('readonly', false);
                            $('#edit_notes').prop('readonly', false);
                            $('#edit_taxi_model').prop('disabled', false);*/
                            
                    //else{
                        //alert("Not Completed");
                        $("#edit_book_tab").show();
                       
                       //get_promocode_list(details.passengers_id,details.passenger_phone,1);
                        //$("#submit_form_pay").hide();
                            $("#add_booking").removeClass("in");
                            $("#edit_booking").addClass("in");
                            //to add id for reset button in edit
                            $(".edit_reset_btn").attr('id','reset_'+findid);
                            $('#edit_passenger_id').val(details.passengers_id);
                            $('#edit_pass_logid').val(details.pass_logid);
                            $('#edit_total_fare').val(details.approx_fare);
                            $('#edit_distance_km').val(details.approx_distance);
                            
                            $('#edit_promo_code').val(details.promocode);

                            $('#edit_firstname').val(details.passenger_name);
                            $('#edit_email').val(details.passenger_email);
                            $('#edit_phone').val(details.passenger_phone);
                                                        var code = (details.country_code == '')?'+965':details.country_code;
                                                        $('#edit_country_code').val(code);
                            $('#edit_country_code').val(details.country_code);

                            $('#edit_current_location').val(details.current_location);
                            $('#edit_pickup_lat').val(details.pickup_latitude);
                            $('#edit_pickup_lng').val(details.pickup_longitude);
                            
                            $('#edit_drop_location').val(details.drop_location);
                            $('#edit_drop_lat').val(details.drop_latitude);
                            $('#edit_drop_lng').val(details.drop_longitude);
                            $('#edit_pickup_date').val(details.pickup_time);
                            $('#edit_luggage').val(details.luggage);
                            $('#edit_no_passengers').val(details.no_passengers);
                            $('#edit_notes').val(details.notes_driver);
                            $('#edit_taxi_model').val(details.taxi_modelid);
                            $("#taxi_model_edit").val(details.taxi_modelid);
                            $('#edit_city_id').val(details.search_city);
                            $('#edit_total_duration').val(details.approx_duration);
                            if(details.approx_duration != '') {
                                $('#edit_find_duration').html(details.approx_duration);
                            } else {
                                $('#edit_find_duration').html('0');
                            }

                            $("#old_model_id").val(details.taxi_modelid);
                            if(details.taxi_edit_modelid != '') {
                                $('#edit_taxi_model').val(details.taxi_edit_modelid);
                                $('#fare_type').attr('checked', true);
                            }
                            
                            if(details.approx_distance != '') {
                                $('#edit_find_km').html(details.approx_distance+" "+default_unit);
                            } else {
                                $('#edit_find_km').html("0 "+default_unit);
                            }
                            
                            $('#edit_min_fare').html(details.approx_fare);
                            $('#travel_status').val(details.travel_status);
                            //to get the company value as selected in company drop down
                            if(details.company_id != 0) {
                                $("#select_company").val(details.company_id);
                                /*map_recur();
                                driver_status_dets();*/
                                //driver_list_with_status();
                                all_booking_manage_list();
                            }}

                            var travel_status=details.travel_status;
                            //alert(travel_status);
                            if(travel_status == 0 || travel_status == 7 || travel_status == 10){
                                //$("#cancel_button").hide();
                                //$("#submit_form_pay").hide();
                                /*$('#update_dispatch').prop('disabled', false);
                                 $('#update_submit').prop('disabled', false);
                                $('#update_dispatch').removeAttr('disabled');*/
                                var dateString = details.pickup_time,
                                dateParts = dateString.split(' '),
                                timeParts = dateParts[1].split(':'),
                                date;
                                dateParts = dateParts[0].split('-');

                                /* //script to hide dispatch button if future time is selected as pickuptime
                                date = new Date(dateParts[0], parseInt(dateParts[1], 10) - 1, dateParts[2], timeParts[0], timeParts[1], timeParts[2]);
                                var today = new Date();
                                if(date.getTime() > today.getTime()){
                                    $('#update_dispatch').attr('disabled','disabled');
                                } else {
                                    $('#update_dispatch').removeAttr('disabled');
                                } */
                            }
                            //to hide the dispatch button if pickup time is future
                        } 
                    });
                    
                });
                //edit booking in dashboard - end
                //dispatch button click function
                $('.update_dispatch').click(function() {
                    var thisid = this.id;
                    //var pass_logid = thisid.split('_').pop();
                    var logid = thisid.split('_');
                    var data = "company_id="+logid[3];
                    var url_path = "<?php echo URL_BASE;?>taxidispatch/checkdispatchsettings";
                    $.ajax({
                        type: "POST",
                        url:url_path,
                        data: data, 
                        async: true,
                        success:function(res){
                            var setArr = res.split(',');
                            if(setArr.length > 1) {
                                $("#dispatchSetting").modal({show:true});
                                $(".dispatch_sel").on('click',function(){
                                    var seleVal = $(this).val();
                                    window.location.href="<?php echo URL_BASE;?>taxidispatch/dashboard?splid="+logid[2]+"&taxi_company="+logid[3]+"&dispatch_type="+seleVal;
                                });
                                //
                            } else {
                                window.location.href="<?php echo URL_BASE;?>taxidispatch/dashboard?splid="+logid[2]+"&taxi_company="+logid[3]+"&dispatch_type="+setArr[0];
                            }
                            //console.log(setArr.length);return false;
                        },
                        error:function() {
                            //alert('failed'); 
                        }
                    });
                });

                // $(".viewNotes").on('click',function(){
                //         var cancelArr = $(this).attr('id').split("_");
                //         var pass_logid = cancelArr[1];
                //         $('#passenger_admin_notes').modal('show');
                // });

                //cancel trip
                $(".cancelBtn").on('click',function(){
                  
                    var cancel_Submit = confirm('<?php echo __('sure_want_cancel'); ?>');
                    if(cancel_Submit == true)
                    {
                        var cancelArr = $(this).attr('id').split("_");
                        var pass_logid = cancelArr[1];
                        var driver_id = cancelArr[2];
                        $('#cancelmodal').modal('show');
                        $('#log_id').val(pass_logid);
                        $('#cancel_driver_id').val(driver_id);
                      /*  var url= URL_BASE+"taxidispatch/cancel_booking/?pass_logid="+pass_logid;
                        $.post(url, {
                        }, function(response){
                        document.location.href=URL_BASE+"taxidispatch/dashboard";
                        });*/
                    } else {
                        <?php if($_SESSION['user_type'] == 'A') { ?>
                        //to deselect the selected company
                        $("#select_company").val("0");
                        //to get the default data - start
                        //driver_list_with_status();
                        all_booking_manage_list();
                        <?php } ?>
                        $("#edit_book_tab").removeClass('edit_book_active');
                        $("#eb_tab").removeClass('active');
                        //to get the default data - end
                        $("#edit_book_tab").hide();
                        $("#add_booking_tab").html('Add Booking');
                        return false;
                    }
                });
                  $("#cancel_reason_submit").unbind('click').click(function(e){
                 // alert("hai");
                    e.preventDefault();
                    var cancel_reason = $("#cancelmodal #cancel_reason").val();
                    var pass_logid = $("#cancelmodal #log_id").val();
                    var driver_id = $("#cancel_driver_id").val();
                    $("#cancelmodal").removeClass('in');

                    $('#cancelmodal').modal('hide');
                    if(cancel_reason!=''){
                        var url_path= URL_BASE+"taxidispatch/cancel_booking/?pass_logid="+pass_logid+"&reason="+cancel_reason;
                        $.post(url_path,function(response){					
                            socket.emit('dispatcher_cancel',driver_id)								
                            document.location.href=URL_BASE+"taxidispatch/dashboard";
                        });
                     
                    }else{
                        alert("please enter the reason for cancel ");

                        $("#cancelmodal").addClass('in');
                        $('#cancelmodal').css('display','block');
                        $('.modal-backdrop.in ').css('opacity',0);
                       $('#cancelmodal').modal('show');

                    }
                });

                 $(".confirmBtn").on('click',function(){
                   
                     var confirm_Submit = confirm('<?php echo __('sure_want_confirm'); ?>');
                    if(confirm_Submit == true)
                    {
                        var confirmArr = $(this).attr('id').split("_");
                        var pass_logid = confirmArr[1];
                        var url= URL_BASE+"taxidispatch/confirm_booking/?pass_logid="+pass_logid;
                        $.post(url, {
                        }, function(response){
                           //console.log("sdf"+response);return false;
                        document.location.href=URL_BASE+"taxidispatch/dashboard";
                        });
                    }
                    else{
                        <?php if($_SESSION['user_type'] == 'A') { ?>
                            $("#select_company").val("0");
                            all_booking_manage_list();
                        <?php } ?>
                       
                        return false;
                    }

                });
                
                var $table = $('table.scroll'),
                $bodyCells = $table.find('tbody tr:first').children(),
                colWidth;

             // Get the tbody columns width array
                colWidth = $bodyCells.map(function() {
                    return $(this).width();
                }).get();
                
                // Set the width of thead columns
                $table.find('thead tr').children().each(function(i, v) {
                    $(v).width(colWidth[i]);
                }); 
            }        
        }); 
    }
    
    function setMarkers(locObj) {
        $.each(locObj, function (key, loc) {
        //console.log(loc);
            if (!locations[key] && loc.lat !== undefined && loc.lng !== undefined) {
                //Marker has not yet been made (and there's enough data to create one).
                
                //Driver Status icon change when(Active,Free,Busy)
                if(loc.status=="A"){
                    var status_icon="<?php echo BOOTSTRAP_IMGPATH.'/orange.png'; ?>"; //RED
                    //var status_icon="<?php echo BOOTSTRAP_IMGPATH.'/red_car.png'; ?>"; //RED
                }else if(loc.status=="F" && loc.shift_status == 'OUT'){
                    var status_icon="<?php echo BOOTSTRAP_IMGPATH.'/blue.png'; ?>"; //BLUE
                    //var status_icon="<?php echo BOOTSTRAP_IMGPATH.'/blu_car.png'; ?>"; //BLUE
                }else if(loc.status=="B"){
                    var status_icon="<?php echo BOOTSTRAP_IMGPATH.'/red.png'; ?>"; // GREEN
                    //var status_icon="<?php echo BOOTSTRAP_IMGPATH.'/green_car.png'; ?>"; // GREEN
                }else if(loc.status=="F" && loc.shift_status == 'IN'){
                    var status_icon="<?php echo BOOTSTRAP_IMGPATH.'/green.png'; ?>"; // YELLOW
                    //var status_icon="<?php echo BOOTSTRAP_IMGPATH.'/orange_car.png'; ?>"; // YELLOW
                }else{
                    var status_icon="<?php echo BOOTSTRAP_IMGPATH.'/orange.png'; ?>"; // YELLOW
                    //var status_icon="<?php echo BOOTSTRAP_IMGPATH.'/orange_car.png'; ?>"; // YELLOW
                }

                var image = {
                url: status_icon,
                // This marker is 20 pixels wide by 32 pixels high.
                size: new google.maps.Size(20, 32),
                // The origin for this image is (0, 0).
                origin: new google.maps.Point(0, 0),
                // The anchor for this image is the base of the flagpole at (0, 32).
                anchor: new google.maps.Point(0, 32)
                };
                
                //Create marker 
                loc.marker = new google.maps.Marker({
                    //zoom: 11,
                    position: new google.maps.LatLng(loc.lat, loc.lng),
                    map: mainMap,
                    icon: image,
                }); 
                
                //Attach click listener to marker
                google.maps.event.addListener(loc.marker, 'mouseover', (function (key) {
                    return function () {
                        infowindow.setContent(locations[key].info);
                        infowindow.open(mainMap, locations[key].marker);
                    }
                })(key));
                //Remember loc in the `locations` so its info can be displayed and so its marker can be deleted.
                locations[key] = loc;
            } else if (locations[key] && loc.remove) {
                //Remove marker from map
                if (locations[key].marker) {
                    locations[key].marker.setMap(null);
                }
                //Remove element from `locations`
                delete locations[key];
            } else if (locations[key]) {
                //Update the previous data object with the latest data.
                $.extend(locations[key], loc);
                if (loc.lat !== undefined && loc.lng !== undefined) {
                    //Update marker position (maybe not necessary but doesn't hurt).
                    locations[key].marker.setPosition(
                    new google.maps.LatLng(loc.lat, loc.lng));
                }
                if(loc.status !== undefined) {
                    //Driver Status icon change when(Active,Free,Busy)
                    if(loc.status=="A"){
                        var status_icon="<?php echo BOOTSTRAP_IMGPATH.'/red.png'; ?>"; //RED
                        //var status_icon="<?php echo BOOTSTRAP_IMGPATH.'/red_car.png'; ?>"; //RED
                    }else if(loc.status=="F" && loc.shift_status == 'OUT'){
                        var status_icon="<?php echo BOOTSTRAP_IMGPATH.'/blue.png'; ?>"; //BLUE
                        //var status_icon="<?php echo BOOTSTRAP_IMGPATH.'/blu_car.png'; ?>"; //BLUE
                    }else if(loc.status=="B"){
                        var status_icon="<?php echo BOOTSTRAP_IMGPATH.'/green.png'; ?>"; // GREEN
                        //var status_icon="<?php echo BOOTSTRAP_IMGPATH.'/green_car.png'; ?>"; // GREEN
                    }else if(loc.status=="F" && loc.shift_status == 'IN'){
                        var status_icon="<?php echo BOOTSTRAP_IMGPATH.'/orange.png'; ?>"; // YELLOW
                        //var status_icon="<?php echo BOOTSTRAP_IMGPATH.'/orange_car.png'; ?>"; // YELLOW
                    }else{
                        var status_icon="<?php echo BOOTSTRAP_IMGPATH.'/orange.png'; ?>"; // YELLOW
                        //var status_icon="<?php echo BOOTSTRAP_IMGPATH.'/orange_car.png'; ?>"; // YELLOW
                    }
                    locations[key].marker.setIcon(status_icon);
                }
                //locations[key].info looks after itself.
            }
        });
    }
    function removeMarkers(locObj)
    {
        $.each(locObj, function (key, loc) {
            if (locations[key].marker) {
                locations[key].marker.setMap(null);
            }
            //Remove element from `locations`
            delete locations[key];
        });
    }
    function bookingnow_click(drv_id)
    {
        var driver_id = drv_id.split('_').pop();
        $('#driver_id').val(driver_id);
        
        var addbook=$("#add_book_tab").attr("class");
        if(addbook=="add_book_active"){
            $("#add_book_tab").removeClass('add_book_active');
            $("#add_book_tab").hide();
            $("#ab_tab").removeClass('active');
        }else{
            $("#edit_book_tab").hide();
            $("#edit_book_tab").removeClass('edit_book_active');                                
            $("#add_book_tab").addClass('add_book_active');
            $("#add_book_tab").show();
            $("#ab_tab").addClass('active');
        }
    }
    
    $('#cancel_button').click(function() {
                    var cancel_Submit = confirm('<?php echo __('sure_want_cancel'); ?>');
                    if(cancel_Submit == true)
                    {
                        var pass_logid = $('#edit_pass_logid').val();
                        var driver_id = $('#edit_driver_id').val();
                        $('#cancelmodal').modal('show');
                        $('#log_id').val(pass_logid);
                        $('#cancel_driver_id').val(driver_id);

                        
                    } else {

                         <?php if($_SESSION['user_type'] == 'A') { ?>
                            //to deselect the selected company
                            $("#select_company").val("0");
                            //to get the default data - start
                            //driver_list_with_status();
                            all_booking_manage_list();
                            <?php }else{
                                ?>
                                $(".add_book_tab").show();    
                                <?php
                            } ?>
                            $("#edit_book_tab").removeClass('edit_book_active');
                            $("#eb_tab").removeClass('active');
                            //to get the default data - end
                            $("#edit_book_tab").hide();
                            $("#add_booking_tab").html('Add Booking');

                            return false;

                    }
                });
    
    google.maps.event.addListener(mainMap, "click", function(event) 
    {
        //alert('ok');
        var lat = event.latLng.lat();
        var lng = event.latLng.lng();
        $('#current_location').blur();
        codeLatLng(lat,lng,'current_location'); 
        
        //set_hidden(lat,lng);
    });
    google.maps.event.addListener(mainMap, "rightclick", function(event) 
    {
        var lat = event.latLng.lat();
        var lng = event.latLng.lng();    
        $('#drop_location').blur();
        codeLatLng(lat,lng,'drop_location');
        clearMarkers(); 
            
    });

    function codeLatLng(lat,lng,id) 
    {    
         var latlng = new google.maps.LatLng(lat, lng);
          geocoder.geocode({'latLng': latlng}, function(results, status) {
              console.log(results);
            if (status == google.maps.GeocoderStatus.OK) {
                //alert(google.maps.GeocoderStatus);
              if (results[1]) 
              {       
                 $('#'+id).val(results[1].formatted_address); 
                 pickup_drop_location_marker(results[1].formatted_address,id,latlng)
                 $('#'+id+'_lat').val(lat); 
                 $('#'+id+'_lng').val(lng); 
                            
              } else {
                alert('<?php echo __("no_result_found"); ?>');
              }
              attempts = 0;
            }
            else if (status === google.maps.GeocoderStatus.OVER_QUERY_LIMIT) {
                  setTimeout(function() {
                        codeLatLng(lat,lng,id);
                  }, 200); 
            }
             else {
              alert('<?php echo __("gecoder_failed"); ?>' + status);
              attempts = 0;
            }
          });
    }
    function pickup_drop_location_marker(place, id, latlng) {
        var iconBase = '<?php echo PUBLIC_IMGPATH.' / ' ; ?>';
        if (id == 'drop_location') {
            end = latlng;
        }
        if (id == 'current_location') {
            start = latlng;
        }
        // First, remove any existing markers from the map.
        for (var i = 0; i < markerArray.length; i++) {
            markerArray[i].setMap(null);
        }
        markerArray = [];
        var request = {
            origin: start,
            destination: end,
            travelMode: google.maps.TravelMode.DRIVING
        };
        clearMarkers();
        directionsService.route(request, function(response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                //var warnings = document.getElementById('warnings_panel');
                //warnings.innerHTML = '<b>' + response.routes[0].warnings + '</b>';
                directionsDisplay.setDirections(response);
                showSteps(response);
            }
        });
    }

    function showSteps(directionResult) {
      markerArray = [];
      var myRoute = directionResult.routes[0].legs[0];
      for (var i = 0; i < myRoute.steps.length; i++) {
        var marker = new google.maps.Marker({
          position: myRoute.steps[i].start_location,
          map: mainMap
        });
        clearMarkers();
        attachInstructionText(marker, myRoute.steps[i].instructions);
        markerArray[i] = marker;
      }
    }

    function attachInstructionText(marker, text) {
      google.maps.event.addListener(marker, 'click', function() {
        // Open an info window when the marker is clicked on,
        // containing the text of the step.
        stepDisplay.setContent(text);
        stepDisplay.open(mainMap, marker);
      });
    }
    
 
   if(localStorage.getItem('time_interval') == undefined || localStorage.getItem('time_interval') == NaN || localStorage.getItem('time_interval') == null)
        {
             var tinterval = <?php echo DISPATCHER_NOTIFICATION_TIME;?>;
             var timeinterval = tinterval*60000;
        
            console.log("if"+timeinterval);
        }else{

            var timeinterval = localStorage.getItem("time_interval");
            console.log("else"+timeinterval);

        }
        // For 10 seconds interval for without refresh
        setInterval(function()
        {
            trip_details_new();
            console.log("setinterval"+timeinterval);
        },timeinterval);

        function triptime_function(flag){
            localStorage.setItem("time_interval", flag*60000);
            var timeinterval = localStorage.getItem("time_interval");
            console.log('onclick time_interval',localStorage.getItem("time_interval"));
             $('#myUpcoming').modal('hide');

        }
        
       
        
        setInterval(function()
        {
            
            //map_recur(),
            //driver_status_dets(),
            //recent_activity(),
           // driver_list_with_status()
            all_booking_manage_list()
        },15000); // For 5 seconds interval   */
       
        window.timer_resize = setInterval(function()
        {
            refresh_map();
        },2000);
        function refresh_map()
        {
            var resize_map = google.maps.event.trigger(mainMap, 'resize');
            //console.log('resize_map');
            clearInterval(window.timer_resize);
        }
    //function to get edit booking tab open while edit booking from manage booking page
    
    function edit_booking_from_manage(findid)
    {  
        var default_unit = $('#edit_default_company_unit').val();
        var dataS = "passenger_logid="+trim(findid);
        $("#eb_tab").addClass('active');
        $("#add_booking_tab").html('Edit Booking'); 
        $.ajax({
            type: "GET",
            url: "<?php echo URL_BASE;?>taxidispatch/edit_booking", 
            data: dataS, 
            cache: false, 
            async: true,
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function(response) 
            {
                if(response == '') {
                    //redirect to dashboard if unknown trip id passed through url
                    window.location.href = 'dashboard';
                }
                $("#edit_book_tab").show();
                var data=response;
                var details=data[0];
               // console.log(details);
                $("#add_booking").removeClass("in");
                $("#edit_booking").addClass("in");
                
                $('#edit_passenger_id').val(details.passengers_id);
                $('#edit_pass_logid').val(details.pass_logid);
                $('#edit_driver_id').val(details.driver_id);
                $('#edit_total_fare').val(details.approx_fare);
                $('#edit_distance_km').val(details.approx_distance);
                
                $('#edit_firstname').val(details.passenger_name);
                $('#edit_email').val(details.passenger_email);
                $('#edit_phone').val(details.passenger_phone);
                $('#edit_country_code').val(details.country_code);
                $('#edit_current_location').val(details.current_location);
                $('#edit_pickup_lat').val(details.pickup_latitude);
                $('#edit_pickup_lng').val(details.pickup_longitude);
                
                $('#edit_drop_location').val(details.drop_location);
                $('#edit_drop_lat').val(details.drop_latitude);
                $('#edit_drop_lng').val(details.drop_longitude);
                $('#edit_pickup_date').val(details.pickup_time);
                $('#edit_luggage').val(details.luggage);
                $('#edit_no_passengers').val(details.no_passengers);
                $('#edit_notes').val(details.notes_driver);
                $('#edit_taxi_model').val(details.taxi_modelid);
                $('#edit_city_id').val(details.search_city);
                $('#edit_total_duration').val(details.approx_duration);
                if(details.approx_duration != '') {
                    $('#edit_find_duration').html(details.approx_duration);
                } else {
                    $('#edit_find_duration').html(0);
                }

                $("#old_model_id").val(details.taxi_modelid);
                if(details.taxi_edit_modelid != '') {
                    $('#edit_taxi_model').val(details.taxi_edit_modelid);
                    $('#fare_type').attr('checked', true);
                }
                
                if(details.approx_distance != '') {
                    $('#edit_find_km').html(details.approx_distance+" "+default_unit);
                } else {
                    $('#edit_find_km').html("0 "+default_unit);
                }
                $('#edit_min_fare').html(details.approx_fare);
                
                //to get the company value as selected in company drop down
                if(details.company_id != 0) {
                    $("#select_company").val(details.company_id);
                    map_recur();
                }
                
                var travel_status=details.travel_status;
                if(travel_status == 0 || travel_status == 7 || travel_status == 10){
                    //$("#cancel_button").hide();
                    $('#update_dispatch').removeAttr('disabled');
                }else{
                    /*if(travel_status == 9) {
                        $("#cancel_button").show();
                    } */
                    $('#update_dispatch').attr('disabled','disabled');
                }
                
                //to hide the dispatch button if pickup time is future
                var dateString = details.pickup_time,
                dateParts = dateString.split(' '),
                timeParts = dateParts[1].split(':'),
                date;
                dateParts = dateParts[0].split('-');
                /* //script to hide dispatch button if future time is selected as pickuptime
                date = new Date(dateParts[0], parseInt(dateParts[1], 10) - 1, dateParts[2], timeParts[0], timeParts[1], timeParts[2]);
                var today = new Date();
                if(date.getTime() > today.getTime()){
                    $('#update_dispatch').attr('disabled','disabled');
                } else {
                    $('#update_dispatch').removeAttr('disabled');
                } */
            } 
        });
    }   
</script>
<div class="modal fade" id="cancelmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&nbsp;</span></button>
                    <h2 class="modal-title" id="myModalLabel">Enter the Reason for Cancel</h2>
                  </div>
                   <div class="modal-body">
                       <textarea class="form-control" style="height: 100px;min-width: 100%;padding: 10px;resize: none;" name="cancel_reason" id="cancel_reason" maxlength="200"></textarea>
                       <input type="hidden" name="log_id" id = "log_id">
                       <input type="hidden" name="cancel_driver_id" id = "cancel_driver_id">
                    </div>
                  <div class="modal-footer">
                    <input type="submit" name="cancel_reason_submit" class="btn btn-primary" id='cancel_reason_submit' value="Submit" style="background: #f9c213;border: none;color: #000;"/>
                    <button  style="margin-right: 15px; background: #f9c213;border: none;color: #000;" type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
</div>

<!---Popup on Driver Search -->
<div class="modal fade" id="dispatchSetting" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" ><?php echo __('tdispatch_setting'); ?></h4>
      </div>
      <div class="modal-body">
          <input type="radio" name="dispatch_setting" class="dispatch_sel" value="1"> Auto
          <input type="radio" name="dispatch_setting" class="dispatch_sel" value="2"> Manual
          
      </div>
      <div class="modal-footer">
       <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
      </div>
    </div>
  </div>
</div>
<?php //echo $show_popup['show_pass_logid'];exit;
if(isset($show_popup['show_pass_logid'])) { ?>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo __('choose_driver_from_list'); ?></h4>
      </div>
      <div class="modal-body">
            <div class="controls">
                <div class="new_input_field">
                  <span class="add-on"></span>
                  <input type="text" name="search_driver" id="search_driver" value="" onKeyUp="driver_details_new()">
                </div>
                <input type="hidden" name="passenger_log_id" id="passenger_log_id" value="<?php echo $show_popup['show_pass_logid']; ?>">
            </div>
            <div id="show_process">
            <div id="driver_details"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">    
    $(document).ready(function(){
        driver_details_new();
 
    });    
 </script>
<?php }
if(isset($show_popup['splid'])) { ?>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" id="model_close_one" --data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo __('choose_driver_from_list'); ?></h4>
      </div>
      <div class="modal-body">
            <div class="controls">
                <div class="new_input_field">
                  <span class="add-on"></span>
                  <input type="text" name="search_driver" id="search_driver" value="" onKeyUp="driver_details_new()">
                </div>
                <input type="hidden" name="passenger_log_id" id="passenger_log_id" value="<?php echo $show_popup['splid']; ?>">
                <input type="hidden" name="admin_companyid" id="admin_companyid" value="<?php echo $show_popup['taxi_company']; ?>">
                   <input type="hidden" name="dispatch_type" id="dispatch_type" value="<?php echo $show_popup['dispatch_type']; ?>">
            </div>
            <div id="show_process">
            <div id="driver_details"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default"  id="model_close_two" --data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">    
    
$(document).ready(function(){
    driver_details_new();
   
});   
/*Search Driver when the dispatcher going to select the driver */

$('#driver_details p').click(function() {
    
    var detailsid = this.id;
    var findimg = detailsid.split('_');
    var pass_logid = $('#passenger_log_id').val();
    var dataS = "pass_logid="+pass_logid+"&driver_id="+findimg[0]+"&taxi_id="+findimg[1]+"&driver_away_in_km="+findimg[2];
    $("#show_process").html('<img src="<?php echo IMGPATH; ?>loader.gif">');
    $.ajax({
        type: "GET",
        url: "<?php echo URL_BASE;?>taxidispatch/updatebooking", 
        data: dataS, 
        cache: false, 
        dataType: 'html',
        success: function(response) 
        {
            $("#show_process").html('');
            //console.log(response);
            //document.location.href="<?php echo URL_BASE;?>tdispatch/managebooking/#stuff";
             window.location="<?php echo URL_BASE;?>taxidispatch/dashboard";
        } 
         
    }); 
});   
</script> 
<?php } 

?>
<!-- Modal -->

<div class="modal fade" id="myUpcoming" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="display:none" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" id="model_close_one" --data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo __('upcoming_dispatch_trip_list'); ?></h4>
      </div>
      <div class="modal-body">
            <div class="controls">
                <div class="new_input_field">
                  <span class="add-on"></span>
                </div>
               
            </div>
            <div id="show_process">
            <div id="trip_details"></div>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default"  id="model_close_tw"  onclick = "triptime_function(10)">Snooze it for 10 minutes</button>
        <button type="button" class="btn btn-default"  id="model_close_tw"  onclick = "triptime_function(<?php echo DISPATCHER_NOTIFICATION_TIME;?>)">Close</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript"> 
$(document).ready(function(){
  
      $('#open_list').click(function(){
      
     // alert("here");
        if($("#booking_list").hasClass('listing_long') === false)
            {
              $("#booking_list").addClass('listing_long');
              $("#map_manage_booking").addClass('listing_long_sub');
              $("#all_booking_manage_list").addClass('listing_long_sub2');
               $("#open_list span").removeClass('glyphicon-chevron-up');
               $("#open_list span").addClass('glyphicon-chevron-down');
              $("#taxi_scroll_one").hide();
            }
               else
            {
                $("#booking_list").removeClass('listing_long');
                $("#map_manage_booking").removeClass('listing_long_sub');
                $("#all_booking_manage_list").removeClass('listing_long_sub2');
               $("#open_list span").removeClass('glyphicon-chevron-down');
               $("#open_list span").addClass('glyphicon-chevron-up');
                $("#taxi_scroll_one").delay(3000).show();
            }
        });
          
             });

function validate_promocode(val,type=0){

    if(val){
        var pass_id = $('#passenger_id').val();
        var dataS = "promo_code="+trim(val)+'&passenger_id='+pass_id;
        $.ajax({
            type: "GET",
            url: "<?php echo URL_BASE;?>taxidispatch/validate_promocode", 
            data: dataS, 
            cache: false, 
            async: true,
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function(response) 
            {
                //console.log(response);
                if(response.status==1){

                }else{
                    alert(response.message);
                    if(type==0){
                        $('#promo_code').val('');
                    }else{
                        $('#edit_promo_code').val('');
                    }
                    
                }
            }

        });

    }

}

function get_promocode_list(id,phone,$type=0){
    var url= SrcPath+"taxidispatch/get_promocodes/?id="+id+"&phone="+phone;
    $.get(url, {}, function(response){  
        
        if($type==0){
            $('#promo_code').html(response);
        }else{
            $('#edit_promo_code').html(response);
        }
        //console.log(response);
        
    });
}
</script>

