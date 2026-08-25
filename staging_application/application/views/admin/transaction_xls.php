<table border='1' cellspacing='0' cellpadding='5'>
<?php if ($list != 'rejected') { ?>
    <th><?php echo __('sno'); ?></th>
    <th><?php echo __('cctransaction_id'); ?></th>
    <th><?php echo __('payment_type'); ?></th>
    <th><?php echo __('trip_id'); ?></th>
<?php } ?>
    <th><?php echo __('passenger_name'); ?></th>
    <th><?php echo ucfirst(__('driver_name')); ?></th>
    <th><?php echo __('journey_date'); ?></th>
    <th><?php echo __('passenger_email'); ?></th>
    <th><?php echo __('Current_Location'); ?></th>
    <th><?php echo __('Drop_Location'); ?></th>
    <th><?php echo __('companyname'); ?></th>

<?php if ($list != 'rejected' && $list != 'cancelled') { ?>
    <th><?php echo __('waiting_time_with_format'); ?></th>
    <th><?php echo __('distance_km'); ?></th>
    <th><?php echo __('trip_total_fare'); ?></th>
    <th><?php echo __('equivalent_to_usd') . CURRENCY_FORMAT;?></th>
    <th><?php echo __('nightfare'); ?></th>
    <th><?php echo __('eveningfare'); ?></th>
<?php } elseif ($list == 'cancelled') { ?>
    <th><?php echo __('cancel_fare') . '(' . CURRENCY . ')';?></th>
<?php } else { ?>
    <th><?php echo __('travel_status'); ?></th>
    <th><?php echo __('reason'); ?></th>
<?php }
$sno        = 0;
$total_fare = 0;

foreach ($results as $result) {
    $company_currency = $result['company_id'];
    //function to get company currency
    $ccur             = findcompany_currencyformat($company_currency);
    //function to convert currency
    $fare = $tripfare     = isset($result['fare'])?round($result['fare'], 2):0;
    $convet_amt = currency_conversion($ccur, $fare);
    $con_amt    = round($convet_amt, 2);
    $nightfare   = (!empty($result['nightfare'])) ? $ccur . ' ' . $result['nightfare'] : '--';
    $eveningfare = (!empty($result['nightfare'])) ? $ccur . ' ' . $result['eveningfare'] : '--';
    if ($list != 'rejected') {
        if ($result['distance'] != 0) {
            $distance = round($result['distance'], 2);
        } else {
            $distance = '--';
        }
        if (isset($result['fare']) && $result['fare'] != 0) {
            $fare = round($result['fare'], 2);
        } else {
            $fare = '--';
        }
        if (isset($result['comments']) != '') {
            $comments = $result['comments'];
        } else {
            $comments = 'No Comments';
        }
	$transaction_id = isset($result['transaction_id'])?ucfirst($result['transaction_id']):'';
        $payment_type = isset($result['payment_type'])?$result['payment_type']:'';
        $passengers_log_id = isset($result['passengers_log_id'])?$result['passengers_log_id']:$result['id'];

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
    if (isset($result['company_amount'])) {
        if ($result['company_amount'] <= 0) {
            $company_amount = '0';
        } else {
            $company_amount = round($result['distance'], 2);
        }
    }
    if ($result['rating'] == 0) {
        $ratings = '-';
    } else {
        $ratings = $result['rating'];
    }
?>
    <tr>
    <?php if ($list != 'rejected') { ?>
        <td><?php echo ++$sno; ?></td>
        <td><?php echo $transaction_id; ?></td>
        <?php if ($payment_type == 2) { ?>
            <td>Credit Card Using Paypal</td>
        <?php } else { ?>
            <td>Cash</td>
        <?php } ?>
        <td><?php echo $passengers_log_id; ?></td>
    <?php } ?>
        <td><?php echo isset($result['passenger_name'])?ucfirst($result['passenger_name']):''; ?></td>
        <td><?php echo wordwrap(ucfirst($result['driver_name']), 30, '<br/>', 1); ?></td>
        <td><?php echo $result['createdate'] ; ?></td>
        <td><?php echo isset($result['email'])?wordwrap($result['email'], 25, '<br />', 1):''; ?></td>
        <td><?php echo strip_tags(htmlentities($result['current_location'])); ?></td>
        <td><?php echo strip_tags(htmlentities($result['drop_location'])); ?></td>
        <td><?php echo wordwrap($result['company_name'], 25, '<br />', 1); ?></td>
    
    <?php 
    if ($list != 'rejected' && $list != 'cancelled') {
        //$waitingTime = (!empty($result['waitingtime'])) ? $result['waitingtime'].' Mins': '--';
        $waitingTime = '--';
        if (!empty($result['waiting_time'])) {
            $waitingTimeArr    = explode(" ", $result['waiting_time']);
            $waitingTimeFormat = explode(":", $waitingTimeArr[0]);
            $waitingTime       = (!isset($waitingTimeFormat[2])) ? '00:' . $waitingTimeArr[0] : $waitingTimeArr[0];
        } ?>
        <td><?php echo $waitingTime ; ?></td>
        <td><?php echo $distance ; ?></td>
        <td><?php echo $ccur . ' ' . $fare ; ?></td>        
        <td><?php echo $con_amt ; ?></td>
        
        <td><?php echo $nightfare ; ?></td>
        <td><?php echo $eveningfare ; ?></td>
    <?php } elseif ($list == 'cancelled') {?>
        <td><?php echo $ccur . ' ' . $fare ; ?></td>
    <?php } else { ?>
        <td><?php echo $driver_reply ; ?></td>
        <td><?php echo $driver_comments ; ?></td>
    <?php } ?>
    </tr>
    <?php if ($list != 'rejected') { 
        $total_fare += $convet_amt;
    }
}
if ($list != 'rejected' && count($results) > 0) { 
    $colspan = ($list == 'cancelled') ? '13' : '16'; ?>
    <tr><td colspan='$colspan' align='right'><?php echo __('trip_total_fare'); ?></td><td><?php echo CURRENCY_FORMAT.$total_fare ?></td></tr>
<?php } ?>
</table>
