<?php
 $headlable = __('report_head');
if ($startdate != "") {
    $headlable = __('report_head') . ' ' . __('from') . ' ' . $startdate . ' ' . __('to') . ' ' . $enddate;
} else {
    $headlable = __('report_head');
}
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
        <td style='text-align:center;'><?php echo $headlable;?></td>
    </tr>
     <tr>
        <td class="head_border"><?php echo date("F j, Y");?></td>
    </tr>
 </table>
 <table border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td class="head_border"><?php echo __('sno_label');?></td>
        <?php if ($list != 'rejected') { ?>
        <td class="head_border"><?php echo __('cctransaction_id');?></td>
        <td class="head_border"><?php echo __('payment_type');?></td>
        <?php } ?>
        <td class="head_border"><?php echo __('passenger_name');?></td>
        <td class="head_border"><?php echo ucfirst(__('driver_name'));?></td>
        <td class="head_border"><?php echo __('journey_date');?></td>
        <td class="head_border"><?php echo __('Current_Location');?></td>
        <td class="head_border"><?php echo __('Drop_Location');?></td>
        <?php if ($list != 'rejected' && $list != 'cancelled') { ?>
        <td class="head_border"><?php echo __('distance_km');?></td>
        <td class="head_border"><?php echo __('fare');?></td>
        
        <td class="head_border"><?php echo __('trip_total_fare');?></td>
        <td class="head_border"><?php echo __('equivalent_to_usd').CURRENCY_FORMAT;?></td>
        <?php } elseif ($list == 'cancelled') { ?>
        <td class="head_border"><?php echo __('fare');?></td>
        
        <td class="head_border"><?php echo __('cancel_fare').CURRENCY;?></td>
        <td class="head_border"><?php echo __('equivalent_to_usd').CURRENCY_FORMAT;?></td>
        <?php } else { ?>
        <td class="head_border"><?php echo __('travel_status');?></td>
        <td class="head_border"><?php echo __('reason');?></td>
        <?php } ?>
    </tr>
<?php
$total_fare = $tax_total = $percenttotal = $subtotal = "";
$sno=0;

foreach ($list1 as $result) {
    $sno++;
    $transaction_id = isset($result['transaction_id'])?$result['transaction_id']:'';
    $payment_type = isset($result['payment_type'])?$result['payment_type']:'';
    $passenger_name = isset($result['passenger_name'])?$result['passenger_name']:'';
    $nightfare = isset($result['nightfare'])?$result['nightfare']:0;
    $eveningfare = isset($result['eveningfare'])?$result['eveningfare']:0;
    $fare = isset($result['fare'])?$result['fare']:0;
    $admin_amount = isset($result['admin_amount'])?$result['admin_amount']:0;
    $company_amount = isset($result['company_amount'])?$result['company_amount']:0;
    $distance_unit = isset($result['distance_unit'])?$result['distance_unit']:'';
    $tripfare     = isset($result['fare'])?round($result['fare'], 2):0;
    if ($list != 'rejected') {
        if ($result['distance'] == 0) {
            $distance = '-';
        } else {
            $distance = round($result['distance'], 2);
        }
        if ($fare == 0) {
            $fare = '-';
        } else {
            $fare = round($fare, 2);
        }
        if (isset($result['comments']) == '') {
            $comments = 'No Comments';
        } else {
            $comments = $result['comments'];
        }
    } else {
        if ($result['driver_reply'] == 'C') {
            $driver_reply = __('cancelled_by_driver');
        } else {
            $driver_reply = __('rejected_by_driver');
        }
        if ($result['driver_comments'] == '') {
            $driver_comments = '';
        } else {
            $driver_comments = $result['driver_comments'];
        }
    }
    if ($result['rating'] == 0) {
        $ratings = '-';
    } else {
        $ratings = $result['rating'];
    }
    if ($list != 'rejected') {
        if ($transaction_id == "") {
            $trans_id = '-';
        } else {
            $trans_id = $transaction_id;
        }
    }
    
?>
    <tr>
        <td class="head_border"><?php echo $sno;?></td>
<?php if ($list != 'rejected') { ?>
        <td class="head_border"><?php echo $trans_id;?></td>
    <?php if ($payment_type == 2) { ?>
        <td class="head_border">Credit Card Using Paypal</td>
    <?php } else { ?>
        <td class="head_border">Cash</td>
    <?php } 
    }
    if ($list != 'rejected') {
        $tripfare     = round($fare, 2);
        $company_tax  = round($result['company_tax'], 2);
        $percentvalue = ($company_tax / 100) * $tripfare;
        //$fare         = round($tripfare - $percentvalue, 2);
        $fare         = $tripfare;
    } ?>
        <td class="head_border"><?php echo ucfirst($passenger_name);?></td>
        <td class="head_border"><?php echo wordwrap(ucfirst($result['driver_name']), 30, '<br/>', 1);?></td>
        <td class="head_border"><?php echo $result['createdate'];?></td>
        <td class="head_border"><?php echo strip_tags(htmlentities($result['current_location']));?></td>
        <td class="head_border"><?php echo strip_tags(htmlentities($result['drop_location']));?></td>
        
<?php
$company_currency = $result['company_id'];
$ccur = findcompany_currencyformat($company_currency);
$convet_amt = currency_conversion($ccur, $tripfare);
if ($list != 'rejected' && $list != 'cancelled') { ?>
        <td class="head_border"><?php echo $distance;?></td>
        <td class="head_border"><?php echo $fare;?></td>
        
        <td class="head_border"><?php echo $ccur.$tripfare;?></td>
        <td class="head_border"><?php echo $convet_amt;?></td>
    <?php } elseif ($list == 'cancelled') { ?>
        <td class="head_border"><?php echo $fare;?></td>
        
        <td class="head_border"><?php echo $ccur.$tripfare;?></td>
        <td class="head_border"><?php echo round($convet_amt, 2);?></td>
    <?php } else { ?>
        <td class="head_border"><?php echo $driver_reply;?></td>
        <td class="head_border"><?php echo $driver_comments;?></td>
    <?php } ?>
    </tr>
<?php if ($list != 'rejected') {
        $total_fare += $convet_amt;
        $tax_total += $company_tax;
        $percenttotal += $percentvalue;
        $subtotal += $convet_amt;
    }
} ?>
</table>

<table border="0" cellpadding="1" cellspacing="1">
    <tr>
        <?php if ($list != 'rejected') { ?>
            <td></td>
            <td></td>
        <?php } ?>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <?php if ($list != 'rejected' && $list != 'cancelled') { ?>
            <td></td>
            <td></td>
        <?php } elseif ($list == 'cancelled') { ?>
            <td></td>
            <td></td>
        <?php } else { ?>
            <td></td>
            <td></td>
        <?php } ?>
    </tr>
</table>
<table border="0" cellpadding="1" cellspacing="1">
    <tr>
    <?php if ($list != 'rejected') { ?>
        <td></td>
        <td></td>
    <?php } ?>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <?php if ($list != 'rejected' && $list != 'cancelled') { ?>
        <td><?php echo __('trip_total_fare');?></td>
        <td><?php echo CURRENCY_FORMAT.round($total_fare, 2);?></td>
        <?php } elseif ($list == 'cancelled') { ?>
            <td><?php echo __('trip_total_fare');?></td>
            <td><?php echo CURRENCY_FORMAT.round($total_fare, 2);?></td>
        <?php } else { ?>
            <td></td>
            <td></td>
        <?php } ?>
    </tr>
</table>
