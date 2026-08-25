<?php defined('SYSPATH') OR die("No direct access allowed."); ?>
<div class="container_content fl clr">
    <div class="cont_container mt15 mt10">
       <div class="content_middle">  
			<div class="widget">
				<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" /><h6><?php echo __('sms_template'); ?></h6>
				<div style="width:auto; float:right; margin: 4px 3px;">
				<div class="button greyishB"> <?php //echo $export_excel_button; ?></div>                       

			</div>   
			</div>    
<div class= "overflow-block">			
<table cellspacing="1" cellpadding="10" width="100%" align="center" class="sTable responsive">
<thead>	
<tr>
	<td align="center" ><?php echo __('sno_label'); ?></td>
	<td align="center" ><?php echo __('SMS_TEMPLETE_TITLE'); ?></td>
</tr>
</thead>
<tbody>
           <?php $i=1; 
		 foreach($sms_template as $result) { 
		$trcolor=($i%2==0) ? 'oddtr' : 'eventr';  			 
			 ?>	
				<tr class="<?php echo $trcolor; ?>">
					<td align="center"><?php echo $i; ?></td>
					<td align="center"><a href="<?php echo URL_BASE.'edit/sms_templates/'.$result['_id'].'/'; ?> "><?php echo ucwords(str_replace('_',' ',$result['sms_title'])); ?></a></td>	
				</tr>
	<?php $i++; } ?>
</tbody>	
</table>	
        </div>
	</div>
</div>
</div>
</div>

<script language="javascript" type="text/javascript">

 $(document).ready(function(){
	toggle(3);
});
</script>
