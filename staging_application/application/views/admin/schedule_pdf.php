<?php
$headlable = ($startdate != "")?' '.__('from') . ' ' . $startdate . ' ' . __('to') . ' ' . $enddate:'';
?>
<style>
h1 {color: navy;font-family: times;font-size: 24pt;}
td {font-weight:bold;font:bold 12pt arial; color:#000000;}
.tr_border{border-bottom:1px solid #2c2c2c;}
.invoice_head{text-align: center;color:#000000;}
.head_border{border-bottom:1px solid #2c2c2c;margin-top:5px;}
.totalstyle{font-weight:bold; font:bold 12pt arial; color:#ffffff; background-color:#2c2c2c; text-align:right;  }
</style>
<table border="0" cellpadding="1" cellspacing="1">
    <tr>
        <td><?php echo __('report_head').": ";?></td><td><?php echo $headlable;?></td>
    </tr>
     <tr>
         <td>Passenger :</td><td><?php echo $list1['_id']['passenger_name']?></td>
    </tr>
     <tr>
         <td>Report Generated on :</td><td><?php echo date("F j, Y");?></td>
    </tr>
 </table>
 <table border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td class="head_border"><?php echo __('sno_label');?></td>
        <td class="head_border"><?php echo ucfirst(__('trip_id'));?></td>
        <td class="head_border"><?php echo ucfirst(__('driver_name'));?></td>
        <td class="head_border"><?php echo __('journey_date');?></td>
        <td class="head_border"><?php echo __('Current_Location');?></td>
        <td class="head_border"><?php echo __('Drop_Location');?></td>
        <td class="head_border"><?php echo __('distance_km');?></td>
        <!--<td class="head_border"><?php echo __('fare');?></td>-->
        <td class="head_border"><?php echo __('trip_total_fare');?></td>
    </tr>
    <?php
    $total_fare = $tax_total = $percenttotal = $subtotal = "";
    $sno = 0;
    //echo "<pre>";print_r($list1); die();
    foreach ($list1['trip_details'] as $result)  
    {
        $sno++;
        $driver_name = (isset($result['driver_name'])) ? wordwrap(ucfirst($result['driver_name']), 30, '<br/>', 1) : '';
        $trip_id = isset($result['_id']) ? $result['_id'] : '111';
        $currentloc = isset($result['current_location']) ? $result['current_location'] : '';
        $createdate = isset($result['createdate']) ? date('Y-m-d H:i:s', $result['createdate']->sec) : date('Y-m-d H:i:s');
        $droploc = isset($result['drop_location']) ? $result['drop_location'] : '';

        $distance_unit = isset($result['distance_unit'])?$result['distance_unit']:'';
        $tripfare     = isset($result['trip_fare'])?round($result['trip_fare'], 2):0.00;
        $fare     = isset($result['fare'])?round($result['fare'], 2):0.00;
        if(!isset($result['distance'])) {
            $distance = '-';
        } else {
            $distance = round($result['distance'], 2);
        }
        /*if (!isset($result['comments'])) {
            $comments = 'No Comments';
        } else {
            $comments = $result['comments'];
        }
        if (isset($result['rating']) && $result['rating'] != 0) {
            $ratings = $result['rating'];
        } else {
            $ratings = '-';
        }*/
        $total_fare += $fare;
        ?>
        <tr>
            <td class="head_border"><?php echo $sno;?></td>
            <td class="head_border"><?php echo $trip_id;?></td>
            <td class="head_border"><?php echo $driver_name;?></td>
            <td class="head_border"><?php echo $createdate;?></td>
            <td class="head_border"><?php echo strip_tags(htmlentities($currentloc));?></td>
            <td class="head_border"><?php echo strip_tags(htmlentities($droploc));?></td>
            <td class="head_border"><?php echo $distance." ".$distance_unit;?></td>
            <!--<td class="head_border"><?php echo $tripfare;?></td>-->
            <td class="head_border"><?php echo CURRENCY.$fare;?></td>
            <?php /* 
            <td class="head_border"><?php echo $driver_reply;?></td>
            <td class="head_border"><?php echo $driver_comments;?></td>
            */ ?>
        </tr>
        <?php } ?>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <!--<td></td>-->
            <td colspan="2" style="text-align: right"><?php echo __('trip_total_fare')?>&nbsp;</td>
            <td><?php echo " ".CURRENCY." ".$total_fare?></td>
            <?php /* 
            <td class="head_border"><?php echo $driver_reply;?></td>
            <td class="head_border"><?php echo $driver_comments;?></td>
            */ ?>
        </tr>
</table>
