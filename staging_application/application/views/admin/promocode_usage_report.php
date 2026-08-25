<?php defined("SYSPATH") or die("No direct access allowed.");

$form_action = URL_BASE . "manage/promocode_usage_report";
$back_action = URL_BASE . "manage/promocode_usage_report";
?>

<div class="container_content fl clr">
	<div class="cont_container mt15 mt10">
		<div class="content_middle">
			<form method="get" class="form" name="manage_model" id="manage_model" action="<?php $form_action; ?>">
					<table class="list_table1" border="0" width="100%" cellpadding="5" cellspacing="0">
					 	<tr>
	                        <td width="20%" >
	                        	<label><?php echo __("promocode"); ?></label>
	                            <div class="new_input_field">
	                                <input type="text" name="promocode"  maxlength="256" style="width:94%;" id="promocode" value="<?php echo isset(
                                     $srch["promocode"]
                                 )
                                     ? trim($srch["promocode"])
                                     : ""; ?>" />
	                            </div>
	                        </td>
							<td>
								<div>
									<label>&nbsp;</label>
								</div>
								<div class="button brownB">
									<input type="submit" value="<?php echo __("button_search"); ?>" name="search_user" title="<?php echo __("button_search"); ?>" />
								</div>
								<div class="button blueB">
									<input type="button" value="<?php echo __("button_cancel"); ?>" title="<?php echo __("button_cancel"); ?>" onclick="location.href = '<?php echo $back_action; ?>'" />
								</div>
							</td>
                    	</tr>
                	</table>
			<br />

			<?php if(is_array($promocodeDetails) && count($promocodeDetails) > 0) { ?>
				<div>
					<p>Promocode : <b><?php echo isset($promocodeDetails['promocode']) ? $promocodeDetails['promocode'] : "-" ?></b></p>	
					<p>Promo Limit : <b><?php echo isset($promocodeDetails['promo_limit']) ? $promocodeDetails['promo_limit'] : "-" ?></b></p>	
					<p>Total used : <b><?php echo isset($totalTrips) ? $totalTrips : "-" ?></b></p>	
				</div>
				<br />
			<?php } ?>
     		<div class="widget">
			<div class="title">
				<img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" />
				<h6><?php echo $page_title; ?></h6>
			</div>
			<?php if ($totalTrips > 0) { ?>
				<div class= "overflow-block">
			<?php } ?>
				<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">
			<?php if ($totalTrips > 0 && is_array($tripDetails)) { ?>
					<thead>
					    <tr >
							<td align="left" width="5%"><?php echo __("sno_label"); ?></td>
							<td align="left" width="5%"><?php echo __("trip_id"); ?></td>
							<td align="left" width="5%"><?php echo __("passenger_name"); ?></td>
							<td align="left" width="5%"><?php echo __("passenger_phone"); ?></td>

						</tr>
					</thead>
			        <tbody>
					<?php
					  $sno = $Offset;

					  foreach ($tripDetails as $tripDetail) {
					      $sno++;
					      $trcolor = $sno % 2 == 0 ? "oddtr" : "eventr";
					      $tripId = $tripDetail['_id'];
					      $passengerName = $tripDetail['passenger_name'];
					      $passengerPhone = $tripDetail['passenger_phone'];
				    ?>

					<tr class="<?php echo $trcolor; ?>">
						<td align="center"><?php echo $sno; ?></td>
						<td align="center"><a target="_blank" href="<?php echo URL_BASE.'transaction/transaction_details/'.$tripId; ?>"><?php echo $tripId; ?></td>
						<td align="center"><?php echo $passengerName; ?></td>
						<td align="center"><?php echo $passengerPhone; ?></td>
					</tr>
					<?php
			  }
			} else { ?>
			   	<tr>
			    	<td class="nodata"><?php echo __("no_data"); ?></td>
			    </tr>
			<?php } ?>
					</tbody>	
				</table>
			</div>
			<?php if ($totalTrips > 0) { ?>
			</div>
			<?php } ?>
		</form>
	</div>
</div>

<div class="clr">&nbsp;</div>
<div class="pagination">
	<?php if ($totalTrips > 0): ?>
	 <p><?php echo $pag_data->render(); ?></p>  
	<?php endif; ?> 
</div>