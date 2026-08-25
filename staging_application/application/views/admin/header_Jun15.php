<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>


<div class="head_out fl clr">
  <div class="head_in">
    <div class="header fl clr">  
	<div class="logo fl  ml50">


	<a href="<?php echo URL_BASE;?>"><img src="<?php echo ADMINIMGPATH;?>logo2.jpg" width="212" height="60" title="<?php echo $app_name;?>" target="_blank" border="0" /></a>
	<?php /*    */ ?>

	</div>
     <div class="fr head_rgt">
     <div class="fr clr">
     <div class="fr clr">
			<?php  if($action != 'login' && $action!='forgotpassword'): ?>
			<a href ="<?php echo URL_BASE;?>admin/editprofile/<?php echo $adminid;?>" class='fl' style="padding:0 0 0 10px;" title="<?php echo __('editprofile_label') ?>"><?php echo __('editprofile_label') ?></a>
		     <a href ="<?php echo URL_BASE;?>admin/changepassword" class='fl' style="padding:0 0 0 10px;" title="<?php echo __('changepassword_label') ?>" ><?php echo __('changepassword_label') ?></a>
		     <a href ="<?php echo URL_BASE;?>admin/logout" class='fl' style="padding:0 0 0 10px;" title="<?php echo __('logout_label') ?>" ><?php echo __('logout_label') ?></a>
			     </p>
		    
            </div>
            <p style="text-align:right; padding:10px 0 0 0; clear:both;"> <?php echo __('welcome_label')." ".ucfirst($username);?></p>		
            </div>
            <?php endif; ?>
		<div style="float:right;clear:both;" class="mt10">
			
			</form>
		 </div>
      </div>			
    </div>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$("#search_click").click(function(){
		if($("#keyword_search").val()=="")
		{
			alert("Please enter any keyword");
			return false;
		}
	});
});
</script>
