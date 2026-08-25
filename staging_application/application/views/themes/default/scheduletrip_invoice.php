<?php
defined('SYSPATH') OR die('No direct access allowed.');
foreach ($dashstyles as $file => $type) {
    echo HTML::style($file, array('media' => $type));
}
foreach ($dashscripts as $file => $type) {
    echo HTML::script($type);
}
//echo $offset;
?>
<!-- Navigation Start -->
<div class="span2 main-menu-span">
    <div class="well nav-collapse sidebar-nav">
        <?php echo new View(USERVIEW . "/passenger_sidebar"); ?>
    </div><!--/.well -->
</div><!--/span-->
<!-- Navigation End -->

<div id="content" class="span10">
    <?php
//For Notice Messages
    //===================
    $sucessful_message = Message::display();
//echo $sucessful_message;		
//$Message->message;
    if ($sucessful_message) {
        ?>

        <div id="messagedisplay">
            <div class="alert alert-success">
                <div class="success_float_tt">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <label style="float: left; margin: 4px 0 0 6px;"><?php echo $sucessful_message; ?></label>
                </div>
            </div>
        </div>
    <?php } ?>    
    <!-- content starts -->	
    <div class="bread_crumb_holder">
        <ul class="breadcrumb">
            <li>
                <a href="<?php echo URL_BASE; ?>"><?php echo __('home'); ?></a> <span class="divider">/</span>
            </li>
            <li>
                <a href="<?php echo URL_BASE; ?>passengers/dashboard"><?php echo __('dashboard'); ?></a> <span class="divider">/</span>
            </li>
            <li>
                <a href="#"><?php echo __('book_recurrent'); ?></a>
            </li>
        </ul>
    </div>

    <div  id="comments_ratings">
        <div class="row-fluid sortable">
            <div class="box span12">
                <div class="box-header well" data-original-title>
                    <h2><i class="icon icon-blue icon-home "></i><?php echo " " . __('book_recurrent'); ?></h2>

                    <div class="box-icon">						
                        <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                    </div>
                </div>

                <div class="box-content">
                    <?php if (count($inv_details) > 0) {
                        ?>
                        <table class="table table-hover table-bordered">

                            <tr>
                                <td>#</td>
                                <td><b><?php echo __('track_id'); ?></b></td>
                                <td><b><?php echo __('paymentstatus_label'); ?></b></td>
<!--                                <td><b><?php echo __('send_mail'); ?></b></td>-->
                                <td><b><?php echo __('bill')." ".__('booking_date'); ?></b></td>	
                                <td><b><?php echo __('amount') . '(' . CURRENCY . ')'; ?></b></td>	
                                <td><b><?php echo __('travel_period'); ?></b></td>
                                <td><b><?php echo __('file'); ?></b></td>
                                <td><b><?php echo __('action_label'); ?></b></td>
                            </tr>
                            <?php
                            $i = 1;
                            foreach ($inv_details as $values) {
                                $created_date = Commonfunction::convertphpdate('d/m/Y', $values['created_date']);
                                $id = $values['_id'];
                                if($values['pay_status'] == __('success'))
                                    $class = 'style="color: green"';
//                                else if($values['pay_status'] == __('pending'))
//                                    $class = 'style="color: brown"';
//                                else if($values['pay_status'] == __('failed'))
//                                    $class = 'style="color: red"';
                                else
                                    $class = '';
                                ?>
                                <tr <?php echo $class ?> >			
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $values['invoice']; ?></td>
                                    <td><?php echo $values['pay_status']; ?></td>
<!--                                    <td><?php echo ($values['mail_status'] == 1)?__('button_send'):'MAIL NOT SEND'; ?></td>-->
                                    <td><?php echo $created_date; ?></td>
                                    <td><?php echo $values['amount']; ?></td>
                                    <td><?php echo $values['period']; ?></td>
                                    <td> <a href="<?php echo URL_BASE.$values['file']; ?>" target="_blank" title="Download Invoice"><li class="icon-download-alt"></li></a></td>
                                    <td>
                                        <?php if($values['pay_status'] == __('success')) 
                                        {
                                            ?><i class="icon-ok" title="Payment Completed"></i><?php 
                                        } 
                                        else 
                                        { 
                                            ?><a id='pay_inv_pass' href="?_id=<?php echo $id;?>"><?php echo __('pay') ?></a><?php 
                                        } ?></td>
                                </tr>
                                <?php
                                $i = $i + 1;
                            }
                            ?>
                        </table>
                        <?php
                    } else {
                        echo __('no_data');
                    }
                    ?>
                </div>
                <!-- Pagination start -->
                <div class="pagination2">
                    <?php
                    //echo count($passengers_all_compl_trans);
                    if (count($inv_details) > 0):
                        ?>
                        <p><?php //echo $pag_data->render(); ?></p>  
                        <?php endif; ?> 
                </div>
               <!-- Pagination end -->
            </div>
        </div>
    </div>
</div>
<style>
    .paid{background-color: lightgreen;}
    .unpaid{background-color: Highlight;}
    #pay_inv_pass {
        background-color: yellow;
        border: 1px solid green;
        border-radius: 10px;
        color: #000;
        font-weight: bold;
        padding: 4px 10px;
    }
</style>
<script>
    function popup_close(popup_block) {
        $('#' + popup_block).hide();
        $('.lb_overlay').hide();
        $('div#fade').remove();
    }
</script>
