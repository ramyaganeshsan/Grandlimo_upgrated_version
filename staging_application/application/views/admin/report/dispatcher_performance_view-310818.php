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
        <form method="get" class="form" name="managedriver" id="managedriver" action="<?php echo URL_BASE; ?>manage/dispatcher_performance">
<table class="list_table1" border="0" width="65%" cellpadding="5" cellspacing="0" style="display:none;">
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
                                <input type="button" value="<?php echo __('button_cancel'); ?>" title="<?php echo __('button_cancel'); ?>" onclick="location.href = '<?php echo URL_BASE; ?>transaction/dispatcher_performance'" />
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
                <td width="20%"><b>Name</b></td>               
                <td width="20%"><b>Late</b></td>                
                <td width="10%"><b>Too Late</b></td>
                <td width="10%"><b>Ontime</b></td>
                <td width="10%"><b>Missed</b></td>
                <td width="10%"><b>Cancel</b></td>                                        
                </tr>
               
                <?php } ?>
<!-- <table cellspacing="1" cellpadding="1" width="100%" style="border-top:1px solid #cdcdcd;" align="center" class="sTable responsive"> -->
<?php if($total_company > 0){
$i = 1;//$Offset;
//$sno=$Offset;
// function searchForId($id, $array) {
//     //print_r($array);exit;
//    foreach ($array as $key => $val) {
//        if ($val['_id'] === $id) {
//            return $key;
//        }
//    }
//    return null;
// }

$dispatcher_name = isset($all_company_list[0]['dispatcher_name'])?$all_company_list[0]['dispatcher_name']:'';
// $total_late = isset($all_company_list[0]['total_late'])?$all_company_list[0]['total_late']:0;
// $total_too_late = isset($all_company_list[0]['total_too_late'])?$all_company_list[0]['total_too_late']:0;
// $total_on_time = isset($all_company_list[0]['total_on_time'])?$all_company_list[0]['total_on_time']:0;
// $total_missed = isset($all_company_list[0]['total_missed'])?$all_company_list[0]['total_missed']:0;
// $total_cancel = isset($all_company_list[0]['total_cancel'])?$all_company_list[0]['total_cancel']:0;

$total_late_key = Commonfunction::searchForId(1, $all_company_list);
$total_too_late_key = Commonfunction::searchForId(2, $all_company_list);
$total_on_time_key = Commonfunction::searchForId(3, $all_company_list);
$total_missed_key = Commonfunction::searchForId(4, $all_company_list);
$total_cancel_key = Commonfunction::searchForId(5, $all_company_list);

$total_late = isset($all_company_list[$total_late_key]['total_late'])?$all_company_list[$total_late_key]['total_late']:0;
$total_too_late = isset($all_company_list[$total_too_late_key]['total_too_late'])?$all_company_list[$total_too_late_key]['total_too_late']:0;
$total_on_time = isset($all_company_list[$total_on_time_key]['total_on_time'])?$all_company_list[$total_on_time_key]['total_on_time']:0;
$total_missed = isset($all_company_list[$total_missed_key]['total_missed'])?$all_company_list[$total_missed_key]['total_missed']:0;
$total_cancel = isset($all_company_list[$total_cancel_key]['total_cancel'])?$all_company_list[$total_cancel_key]['total_cancel']:0;

//echo $total_missed_key.'------';exit;

?>

    <tr>
        <td><?php echo $i; ?></td>        
        <td><?php echo ucfirst($dispatcher_name); ?></td>
        <td data-toggle="tab" href="#menu" class="table_cursor"><?php echo $total_late; ?></td>
        <td data-toggle="tab" href="#menu1" class="table_cursor"><?php echo $total_too_late; ?></td>
        <td data-toggle="tab" href="#menu2" class="table_cursor"><?php echo $total_on_time; ?></td>
        <td data-toggle="tab" href="#menu3" class="table_cursor"><?php echo $total_missed; ?></td>
        <td data-toggle="tab" href="#menu4" class="table_cursor"><?php echo $total_cancel; ?></td>           
    </tr> 


<?php
/*

foreach($all_company_list as $k=>$dispatch){

    $i++; 

   $dispatcher_name = isset($dispatch['dispatcher_name'])?$dispatch['dispatcher_name']:'';

   $total_late = isset($dispatch['total_late'])?$dispatch['total_late']:'';
   $total_too_late = isset($dispatch['total_too_late'])?$dispatch['total_too_late']:'';
   $total_on_time = isset($dispatch['total_on_time'])?$dispatch['total_on_time']:'';
   $total_missed = isset($dispatch['total_missed'])?$dispatch['total_missed']:'';
   $total_cancel = isset($dispatch['total_cancel'])?$dispatch['total_cancel']:'';

?>   
    <tr>
        <td><?php echo $i; ?></td>        
        <td><?php echo ucfirst($dispatcher_name); ?></td>
        <td><?php echo $total_late; ?></td>
        <td><?php echo $total_too_late; ?></td>
        <td><?php echo $total_on_time; ?></td>
        <td><?php echo $total_missed; ?></td>
        <td><?php echo $total_cancel; ?></td>

       <td align="center" colspan='3' >
           <a href="<?php echo URL_BASE; ?>manage/view_dispatcher_perform?id=<?php echo $dispatch['dispatcher_id'].'&from='.$startdate.'&to='.$enddate; ?>" title ='Edit' class='viewicon'></a>
       </td>      
    </tr> 
<?php
} */
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
<div class="tab-content">
    <div id="menu" class="tab-pane fade in active"> 
      <h3>Late trips</h3>
      <!--  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
      <table cellspacing="1" cellpadding="1" width="100%" style="border-top:1px solid #cdcdcd;" align="center" class="sTable responsive">
                <tr>
                    <td width="2%"><?php echo __('sno'); ?></td>                
                    <td width="10%"><b>Trip ID</b></td>               
                    <td width="10%"><b>Date</b></td>                
                    <td width="10%"><b>Passenger name</b></td>
                    <td width="10%"><b>Phone</b></td>
                    <td width="10%"><b>Pickup</b></td>
                    <td width="10%"><b>Drop</b></td>                                        
                </tr>
                <?php if( isset($all_company_list[$total_late_key]['trip_details']) && count($all_company_list[$total_late_key]['trip_details']) ){ 

                        $trip_details = $all_company_list[$total_late_key]['trip_details'];

                        $i =0;
                        foreach($trip_details as $tot_late){ 

                            $i++; 
                            $pickup_date = isset($tot_late['actual_pickup_time'])? Commonfunction::convertphpdate('Y-m-d',$tot_late['actual_pickup_time']):'';

                            ?>

                        <tr>
                            <td><?php echo $i; ?></td>        
                            <td><?php echo $tot_late['trip_id']; ?></td>
                            <td><?php echo $pickup_date; ?></td>
                            <td><?php echo ucfirst($tot_late['pass_name']); ?></td>
                            <td><?php echo $tot_late['pass_phone']; ?></td>
                            <td><?php echo $tot_late['pickup']; ?></td>
                            <td><?php echo $tot_late['drop_location']; ?></td>
                        </tr>

                <?php }

                }else{ ?>
                 <tr>
                    <td colspan="7"><center>No Data Found</center></td>
                </tr>
                <?php } ?>
        </table>

    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Too Late trips</h3>  
      <table cellspacing="1" cellpadding="1" width="100%" style="border-top:1px solid #cdcdcd;" align="center" class="sTable responsive">
                <tr>
                    <td width="2%"><?php echo __('sno'); ?></td>                
                    <td width="10%"><b>Trip ID</b></td>               
                    <td width="10%"><b>Date</b></td>                
                    <td width="10%"><b>Passenger name</b></td>
                    <td width="10%"><b>Phone</b></td>
                    <td width="10%"><b>Pickup</b></td>
                    <td width="10%"><b>Drop</b></td>                                        
                </tr>
                <?php if( isset($all_company_list[$total_too_late_key]['trip_details']) && count($all_company_list[$total_too_late_key]['trip_details']) ){ 

                        $trip_details = $all_company_list[$total_too_late_key]['trip_details'];

                        $i =0;
                        foreach($trip_details as $tot_late){ 

                            $i++; 
                            $pickup_date = isset($tot_late['actual_pickup_time'])? Commonfunction::convertphpdate('Y-m-d',$tot_late['actual_pickup_time']):'';

                            ?>

                        <tr>
                            <td><?php echo $i; ?></td>        
                            <td><?php echo $tot_late['trip_id']; ?></td>
                            <td><?php echo $pickup_date; ?></td>
                            <td><?php echo ucfirst($tot_late['pass_name']); ?></td>
                            <td><?php echo $tot_late['pass_phone']; ?></td>
                            <td><?php echo $tot_late['pickup']; ?></td>
                            <td><?php echo $tot_late['drop_location']; ?></td>
                        </tr>

                <?php }

                }else{ ?>
                 <tr>
                    <td colspan="7"><center>No Data Found</center></td>
                </tr>
                <?php } ?>
        </table>   
    </div>
    <div id="menu2" class="tab-pane fade">
     <h3>Ontime trips</h3>
       <table cellspacing="1" cellpadding="1" width="100%" style="border-top:1px solid #cdcdcd;" align="center" class="sTable responsive">
                <tr>
                    <td width="2%"><?php echo __('sno'); ?></td>                
                    <td width="10%"><b>Trip ID</b></td>               
                    <td width="10%"><b>Date</b></td>                
                    <td width="10%"><b>Passenger name</b></td>
                    <td width="10%"><b>Phone</b></td>
                    <td width="10%"><b>Pickup</b></td>
                    <td width="10%"><b>Drop</b></td>                                        
                </tr>
                <?php if( isset($all_company_list[$total_on_time_key]['trip_details']) && count($all_company_list[$total_on_time_key]['trip_details']) ){ 

                        $trip_details = $all_company_list[$total_on_time_key]['trip_details'];

                        $i =0;
                        foreach($trip_details as $tot_late){ 

                            $i++; 
                            $pickup_date = isset($tot_late['actual_pickup_time'])? Commonfunction::convertphpdate('Y-m-d',$tot_late['actual_pickup_time']):'';

                            ?>

                        <tr>
                            <td><?php echo $i; ?></td>        
                            <td><?php echo $tot_late['trip_id']; ?></td>
                            <td><?php echo $pickup_date; ?></td>
                            <td><?php echo ucfirst($tot_late['pass_name']); ?></td>
                            <td><?php echo $tot_late['pass_phone']; ?></td>
                            <td><?php echo $tot_late['pickup']; ?></td>
                            <td><?php echo $tot_late['drop_location']; ?></td>
                        </tr>

                <?php }

                }else{ ?>
                <tr>
                    <td colspan="7"><center>No Data Found</center></td>
                </tr>
                <?php } ?>
        </table>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Missed trips</h3>
      <table cellspacing="1" cellpadding="1" width="100%" style="border-top:1px solid #cdcdcd;" align="center" class="sTable responsive">
                <tr>
                    <td width="2%"><?php echo __('sno'); ?></td>                
                    <td width="10%"><b>Trip ID</b></td>               
                    <td width="10%"><b>Date</b></td>                
                    <td width="10%"><b>Passenger name</b></td>
                    <td width="10%"><b>Phone</b></td>
                    <td width="10%"><b>Pickup</b></td>
                    <td width="10%"><b>Drop</b></td>                                        
                </tr>
                <?php if( isset($all_company_list[$total_missed_key]['trip_details']) && count($all_company_list[$total_missed_key]['trip_details']) ){ 

                        $trip_details = $all_company_list[$total_missed_key]['trip_details'];

                        $i =0;
                        foreach($trip_details as $tot_late){ 

                            $i++; 
                            $pickup_date = isset($tot_late['actual_pickup_time'])? Commonfunction::convertphpdate('Y-m-d',$tot_late['actual_pickup_time']):'';

                            ?>

                        <tr>
                            <td><?php echo $i; ?></td>        
                            <td><?php echo $tot_late['trip_id']; ?></td>
                            <td><?php echo $pickup_date; ?></td>
                            <td><?php echo ucfirst($tot_late['pass_name']); ?></td>
                            <td><?php echo $tot_late['pass_phone']; ?></td>
                            <td><?php echo $tot_late['pickup']; ?></td>
                            <td><?php echo $tot_late['drop_location']; ?></td>
                        </tr>

                <?php }

                }else{ ?>
                <tr>
                    <td colspan="7"><center>No Data Found</center></td>
                </tr>
                <?php } ?>
        </table>
    </div>
    <div id="menu4" class="tab-pane fade">
      <h3>Cancel trips</h3>
      <table cellspacing="1" cellpadding="1" width="100%" style="border-top:1px solid #cdcdcd;" align="center" class="sTable responsive">
                <tr>
                    <td width="2%"><?php echo __('sno'); ?></td>                
                    <td width="10%"><b>Trip ID</b></td>               
                    <td width="10%"><b>Date</b></td>                
                    <td width="10%"><b>Passenger name</b></td>
                    <td width="10%"><b>Phone</b></td>
                    <td width="10%"><b>Pickup</b></td>
                    <td width="10%"><b>Drop</b></td>                                        
                </tr>
                <?php if( isset($all_company_list[$total_cancel_key]['trip_details']) && count($all_company_list[$total_cancel_key]['trip_details']) ){ 

                        $trip_details = $all_company_list[$total_cancel_key]['trip_details'];

                        $i =0;
                        foreach($trip_details as $tot_late){ 

                            $i++; 
                            $pickup_date = isset($tot_late['actual_pickup_time'])? Commonfunction::convertphpdate('Y-m-d',$tot_late['actual_pickup_time']):'';

                            ?>

                        <tr>
                            <td><?php echo $i; ?></td>        
                            <td><?php echo $tot_late['trip_id']; ?></td>
                            <td><?php echo $pickup_date; ?></td>
                            <td><?php echo ucfirst($tot_late['pass_name']); ?></td>
                            <td><?php echo $tot_late['pass_phone']; ?></td>
                            <td><?php echo $tot_late['pickup']; ?></td>
                            <td><?php echo $tot_late['drop_location']; ?></td>
                        </tr>

                <?php }

                }else{ ?>
                <tr>
                    <td colspan="7"><center>No Data Found</center></td>
                </tr>
                <?php } ?>
        </table>
    </div>
  </div>
</form>
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
