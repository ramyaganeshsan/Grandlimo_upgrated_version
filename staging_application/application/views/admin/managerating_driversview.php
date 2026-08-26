<?php defined('SYSPATH') OR die("No direct access allowed.");
$status_val = isset($srch["status"]) ? $srch["status"] :''; 
$keyword = isset($srch["keyword"]) ? $srch["keyword"] :'';
$total_drivers = $ListCount;
$driver_name = isset($driver_profile['name'])?$driver_profile['name']:'';
$table_css=$export_excel_button="";
if($total_drivers >0)
{ 
	$table_css='class="table_border"'; 

	$export_excel_button='<input type="button"  title="'.__('').'" class="button" value="'.__('button_export').'" onclick="location.href=\''.URL_BASE.'manage/export?keyword='.$keyword.'\'" />';
}?>
<div class="container_content fl clr">
	<div class="cont_container mt15 mt10">
		<div class="content_middle"> 
			<form method="get" class="form" name="managerating_form" id="managerating_form" action="/manage/managerating_driversview_search">
				<div class="widget">
					<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" />
						<h6><?php echo $page_title." - ".ucfirst($driver_name); ?></h6>
					</div>
			<?php
			if($ListCount>0){
				
				foreach($all_rating_drivers as $res){
				   if(isset($res['rating'])!= 0) {
					   
					$comments = isset($res['comments']) ? $res['comments'] : '-';
					$title = isset($res['ratings_title']) ? $res['ratings_title'] : '-';
					$tripid = isset($res['id']) ? $res['id'] : '';

					$driver_tags = isset($res['driver_tags']) ? $res['driver_tags'] : [];
					$tags = implode(" , ",$driver_tags);
					$passengers_log_id = $res['id'];
				   //echo "<pre>";print_r($res);echo "</pre>";
				   if(isset($res['profile_image'][0]) && !empty($res['profile_image'][0]))
				   {
					   $img1 = 'thumb_'.$res['profile_image'][0];
					   $img = URL_BASE.'public/uploads/passenger/'.$img1;
					   
				   }else{
					   $img1 = URL_BASE."/public/images/noimages.jpg"; // thumb
					   $img = URL_BASE."/public/images/noimages.jpg";//Big
				   }
				   $star_css = '';
				   switch($res['rating']){
					   case 1: $star = "one";
					   		   $star_css =" style='
											    width: inherit;
											    padding: -1px;
											    padding-left: 8%;
											'";
							   break;
					   case 2: $star = "two";
							   break;
					   case 3: $star = "three";
							   break;
					   case 4: $star = "four";
							   break;
					   case 5: $star = "five";
							   break;
					   default: $star = "";
							   break;
				   }
					?>
			   <div class="review" style="float:left;width:100%"/>
				   <div class="review-head">
					   <div style="float:left;" class="review-title"><?php echo (isset($res['name'][0]) && !empty($res['name'][0]))?ucfirst($res['name']):"-";?></div>
					   <div style="float:right;"><?php echo commonfunction::convertphpdate("d-M-Y",$res['createdate']);?></div>
				   </div>
				   <div class="review-text">
					   <div class="reviewerprofile" style="float:left;">
						   <div id="revimg">
							   <?php if (file_exists(DOCROOT.'public/uploads/passenger/'.$img1)){ ?>
							   <img src="<?php echo $img;?>" width="50" height="50" />
							   <?php } 
							   else{
							   $no_img = URL_BASE.'public/images/noimages.jpg';
								?>
							   <img src="<?php echo $no_img; ?>" width="50" height="50"/>
							   <?php } ?>
						   </div>
						   <div id="reviewer">
							   <span class="review-owner" style="text-align:center;"><?php //echo $res['name'];?></span>
						   </div>
						   <div id="revdate"></div>
					   </div>					
					   <div style="float:right;width:92%;"> 
					   <?php if($comments){ ?> 
					   <div style="float:right;"><a title="<?php echo __('del_comment'); ?>" href="<?php echo URL_BASE.'manage/update_comments/'.$passengers_log_id; ?>" class="deleteicon"></a></div>
					   <?php } 
					    echo $title;
					    ?>
					   <p class="rating <?php echo $star;?>" <?php echo $star_css;?>></p>
					   <p><?php echo "Trip ID: ".$tripid;?></p>
					   <p><?php echo $tags;?></p>
						<p style="padding:10px;">   <?php echo isset($res['comments'])?wordwrap(ucfirst($res['comments']),150,'<br/>',1):__('no_comments');?>
						</p>
					   </div>
				   </div>
			   </div>
			<?php }
			}
			}else{
				echo "<div class='nodata'>".__('no_data')."</div>";
			}
			 ?>
		</div>
</form>
</div>
</div>
</div>
<div class="clr">&nbsp;</div>
<div class="pagination">
		<?php if(($action != 'packagesearch') && $total_drivers > 0): ?>
		 <p><?php echo $pag_data->render(); ?></p>  
		<?php endif; ?> 
  </div>
  <div class="clr">&nbsp;</div>
</div>

<script type="text/javascript">
 $(document).ready(function(){
	toggle(111);
});
var confirm_msg =  "<?php echo __('Do you want to delete this ratings');?>";
function deleterating_drivers(id){
	var ans = confirm(confirm_msg);
	if(ans){
		window.location='<?php echo URL_BASE ;?>manage/delete_ratingdrivers/'+id;
	}
}
function delete_comments(passengers_log_id)
{
	alert(passengers_log_id);
	 var url= '/manage/update_comments/?passengers_log_id='+passengers_log_id;
    $.post(url,function(check){	
		alert(check);exit;	
	   // location.reload(true);
    });
}
</script>
