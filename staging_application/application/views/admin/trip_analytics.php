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
$startdate = isset($srch["start_date"]) ? $srch["start_date"] :date('Y-m-d');   
$enddate = isset($srch["end_date"]) ? $srch["end_date"] :date('Y-m-d 23:59:59');  
$year = isset($srch["year"]) ? $srch["year"] :date('Y');  
$month = isset($srch["month"]) ? $srch["month"] :date('n');  

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
            
        <form method="get" class="form" name="managedriver" id="managedriver" action="<?php echo URL_BASE; ?>transaction/trips_analytics">
<table class="list_table1" border="0" width="65%" cellpadding="5" cellspacing="0">
 <tr>
                       
                        <tr>  
                    <td valign="middle"><label><?php echo __('Date'); ?></label></td>
                        <td valign="top">
                        <div class="new_input_field_transaction">
                                  <input type="text"  readonly title="<?php echo __('select_datetime'); ?>" id="start_date" name="start_date" value="<?php echo $startdate;?>"  />
                         <span id="startdate_error" class="error"></span>        
                         </div>
                        
                        </td>                        
                                          
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
                                <input type="button" value="<?php echo __('button_cancel'); ?>" title="<?php echo __('button_cancel'); ?>" onclick="location.href = '<?php echo URL_BASE; ?>manage/trips_analytics'" />
                            </div>
                        </td>
                    </tr>
                </table>
                <div id="response"></div>
                        <div class="widget">
        <div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" /><h6><?php echo $page_title.' on '.$startdate; ?></h6>
        <div style="width:auto; float:right;margin: -5px 3px;">
        <div ><?php  //if($total_company > 0){ $export_table_count=$total_company;
                    //include_once(APPPATH.'views/admin/export_menu.php'); }
                    ?>
                    </div>                       

        </div>
        </div>
<?php if($total_company > 0){ ?>
    <div class= "overflow-block">
<?php } ?>      
<table cellspacing="1" cellpadding="1" width="100%" style="border-top:1px solid #cdcdcd;" align="center" class="sTable responsive">
<thead>
    <tr>
    <td align="center" width="1%">Shift interval</td>
    <td align="center" style="text-align:center;" width="3%">Total trips booked</td>
    <td align="center" style="text-align:center;" width="3%">Completed trips</td>
    <td align="center" style="text-align:center;" width="3%">Cancelled trips</td>
    <td align="center" style="text-align:center;" width="3%">Available drivers</td>
    </tr>
</thead>
<tbody> 
        <tr> 
            <td align="center">00 to 3</td>
            <td align="center"><?php echo isset($trip_list['1_3']['trips'])?count($trip_list['1_3']['trips']):0; ?></td>
            <td align="center"><?php echo isset($trip_list['1_3']['completed'])?count($trip_list['1_3']['completed']):0; ?></td>
            <td align="center"><?php echo isset($trip_list['1_3']['cancelled'])?count($trip_list['1_3']['cancelled']):0; ?></td>
            <td align="center"><?php echo isset($driver_list['1_3'])?count(array_unique($driver_list['1_3'])):0; ?></td>
        </tr>
        <tr> 
            <td align="center">03 to 06</td>
            <td align="center"><?php echo isset($trip_list['3_6']['trips'])?count($trip_list['3_6']['trips']):0; ?></td>
            <td align="center"><?php echo isset($trip_list['3_6']['completed'])?count($trip_list['3_6']['completed']):0; ?></td>
            <td align="center"><?php echo isset($trip_list['3_6']['cancelled'])?count($trip_list['3_6']['cancelled']):0; ?></td>
            <td align="center"><?php echo isset($driver_list['3_6'])?count(array_unique($driver_list['3_6'])):0; ?></td>
        </tr><tr> 
            <td align="center">06 to 09</td>
            <td align="center"><?php echo isset($trip_list['6_9']['trips'])?count($trip_list['6_9']['trips']):0; ?></td>
            <td align="center"><?php echo isset($trip_list['6_9']['completed'])?count($trip_list['6_9']['completed']):0; ?></td>
            <td align="center"><?php echo isset($trip_list['6_9']['cancelled'])?count($trip_list['6_9']['cancelled']):0; ?></td>
            <td align="center"><?php echo isset($driver_list['6_9'])?count(array_unique($driver_list['6_9'])):0; ?></td>
        </tr><tr> 
            <td align="center">09 to 12</td>
            <td align="center"><?php echo isset($trip_list['9_12']['trips'])?count($trip_list['9_12']['trips']):0; ?></td>
            <td align="center"><?php echo isset($trip_list['9_12']['completed'])?count($trip_list['9_12']['completed']):0; ?></td>
            <td align="center"><?php echo isset($trip_list['9_12']['cancelled'])?count($trip_list['9_12']['cancelled']):0; ?></td>
            <td align="center"><?php echo isset($driver_list['9_12'])?count(array_unique($driver_list['9_12'])):0; ?></td>
        </tr><tr> 
            <td align="center">12 to 15</td>
            <td align="center"><?php echo isset($trip_list['12_15']['trips'])?count($trip_list['12_15']['trips']):0; ?></td>
            <td align="center"><?php echo isset($trip_list['12_15']['completed'])?count($trip_list['12_15']['completed']):0; ?></td>
            <td align="center"><?php echo isset($trip_list['12_15']['cancelled'])?count($trip_list['12_15']['cancelled']):0; ?></td>
            <td align="center"><?php echo isset($driver_list['12_15'])?count(array_unique($driver_list['12_15'])):0; ?></td>
        </tr><tr> 
            <td align="center">15 to 18</td>
            <td align="center"><?php echo isset($trip_list['15_18']['trips'])?count($trip_list['15_18']['trips']):0; ?></td>
            <td align="center"><?php echo isset($trip_list['15_18']['completed'])?count($trip_list['15_18']['completed']):0; ?></td>
            <td align="center"><?php echo isset($trip_list['15_18']['cancelled'])?count($trip_list['15_18']['cancelled']):0; ?></td>
            <td align="center"><?php echo isset($driver_list['15_18'])?count(array_unique($driver_list['15_18'])):0; ?></td>
        </tr><tr> 
            <td align="center">18 to 21</td>
            <td align="center"><?php echo isset($trip_list['18_21']['trips'])?count($trip_list['18_21']['trips']):0; ?></td>
            <td align="center"><?php echo isset($trip_list['18_21']['completed'])?count($trip_list['18_21']['completed']):0; ?></td>
            <td align="center"><?php echo isset($trip_list['18_21']['cancelled'])?count($trip_list['18_21']['cancelled']):0; ?></td>
            <td align="center"><?php echo isset($driver_list['18_21'])?count(array_unique($driver_list['18_21'])):0; ?></td>
        </tr><tr> 
            <td align="center">21 to 24</td>
            <td align="center"><?php echo isset($trip_list['21_24']['trips'])?count($trip_list['21_24']['trips']):0; ?></td>
            <td align="center"><?php echo isset($trip_list['21_24']['completed'])?count($trip_list['21_24']['completed']):0; ?></td>
            <td align="center"><?php echo isset($trip_list['21_24']['cancelled'])?count($trip_list['21_24']['cancelled']):0; ?></td>
            <td align="center"><?php echo isset($driver_list['21_24'])?count(array_unique($driver_list['21_24'])):0; ?></td>
        </tr>
     
        </tbody>
</table>
</div>
</div>
</div>
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

</div>
</div>


<script type="text/javascript" language="javascript">
$(document).ready(function(){
 $("#keyword").focus(); 
    toggle(7);
    change_month('<?php echo $month; ?>');


    $("#start_date").datetimepicker( {
        showTimepicker:false,
       // showSecond: true,
        //timeFormat: 'hh:mm:ss',
        dateFormat: 'yy-mm-dd',
        //stepHour: 1,
        //stepMinute: 1,
        maxDateTime : new Date("<?php echo date('Y m d,H:i:s'); ?>"),
        //stepSecond: 1,
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

    $('#dpMonths').datepicker();


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
         // $("#passenger_name").easyAutocomplete(options);


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

    function change_month() {
    var year= $("#year").val();
    var month= $("#month").val();
    $.ajax({
        url:"<?php echo URL_BASE;?>manage/monthlist",
        type:"get",
        data:"year="+year+'&month='+month,
        success:function(data){
            $('#month_list').html();
            $('#month_list').html(data);
        },
        error:function(data)
        {
            //alert(cid);
        }
    }); 
    }

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
