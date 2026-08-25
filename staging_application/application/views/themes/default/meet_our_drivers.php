<?php  defined('SYSPATH') OR die("No direct access allowed."); ?>
<div class="inner_page_container">
	<section class="more_drivers_container">
		<div class="container">
			<div class="col-md-12">
				<div class="page_title">
					<h2><a href="<?php echo URL_BASE; ?>" class="back_btn" title="Back"></a>Meet our Drivers</h2>
				</div>
			</div>
			<?php if(count($drivers_list)){

				$i=1;
				$i = ($page*$limit)-$limit+$i;

				foreach ($drivers_list as $key => $driver) { 

					 if(!empty($driver['web_image_name']) && file_exists(DOCROOT.'public/uploads/driver_image/website/'.$driver['web_image_name'])){

					 	$image_url = URL_BASE.'public/uploads/driver_image/website/'.$driver['web_image_name'];
					 }else{
					 	$image_url = URL_BASE.'public/images/driver1.png';
					 }

					 $description = $driver['driver_description'];

					 if($description){
					 	$description=$description;
					 }else{
					 	$description = __('driver_description_data');
					 }

				 ?>

				 	<div class="col-md-12">
						<div class="driver_blks">
							<div class="drv_img">
								<img src="<?php echo $image_url; ?>" alt="">
							</div>
							<div class="drv_cont">
								<h3><?php echo ucfirst($driver['name']); ?></h3>
								<p><?php echo $description; ?> </p>
								<ul class="drv_soclinks">
									<?php if($driver['facebook_account']){ ?>
										<li><a href="<?php echo $driver['facebook_account']; ?>" title="Facebook" class="drv_fb" target="_blank"></a></li>
									<?php } ?>
									<?php if($driver['instagram_account']){ ?>
										<li><a href="<?php echo $driver['instagram_account']; ?>" title="Instagram" class="drv_insta" target="_blank"></a></li>
									<?php } ?>
									<?php if($driver['twitter_account']){ ?>
										<li><a href="<?php echo $driver['twitter_account']; ?>" title="Twitter" class="drv_twitter" target="_blank"></a></li>
									<?php } ?>	
								</ul>
							</div>
						</div>
					</div>

					
			<?php	}
			} ?>

			<?php /*
			<div class="col-md-12">
				<div class="driver_blks">
					<div class="drv_img">
						<img src="public/images/driver1.png" alt="">
					</div>
					<div class="drv_cont">
						<h3>Deepak</h3>
						<p>It is a long established fact that a reader will There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
						<p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.be distracted by the readable content of a page when looking at its layout.</p>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. </p>
						<ul class="drv_soclinks">
							<li><a href="" title="Facebook" class="drv_fb"></a></li>
							<li><a href="" title="Instagram" class="drv_insta"></a></li>
							<li><a href="" title="Twitter" class="drv_twitter"></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="driver_blks">
					<div class="drv_img">
						<img src="public/images/driver2.png" alt="">
					</div>
					<div class="drv_cont">
						<h3>Deepak</h3>
						<p>It is a long established fact that a reader will There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
						<p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.be distracted by the readable content of a page when looking at its layout.</p>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. </p>
						<ul class="drv_soclinks">
							<li><a href="javascript:;" title="Facebook" class="drv_fb"></a></li>
							<li><a href="javascript:;" title="Instagram" class="drv_insta"></a></li>
							<li><a href="javascript:;" title="Twitter" class="drv_twitter"></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="driver_blks">
					<div class="drv_img">
						<img src="public/images/driver3.png" alt="">
					</div>
					<div class="drv_cont">
						<h3>Deepak</h3>
						<p>It is a long established fact that a reader will There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
						<p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.be distracted by the readable content of a page when looking at its layout.</p>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. </p>
						<ul class="drv_soclinks">
							<li><a href="javascript:;" title="Facebook" class="drv_fb"></a></li>
							<li><a href="javascript:;" title="Instagram" class="drv_insta"></a></li>
							<li><a href="javascript:;" title="Twitter" class="drv_twitter"></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="driver_blks">
					<div class="drv_img">
						<img src="public/images/driver2.png" alt="">
					</div>
					<div class="drv_cont">
						<h3>Deepak</h3>
						<p>It is a long established fact that a reader will There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
						<p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.be distracted by the readable content of a page when looking at its layout.</p>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. </p>
						<ul class="drv_soclinks">
							<li><a href="javascript:;" title="Facebook" class="drv_fb"></a></li>
							<li><a href="javascript:;" title="Instagram" class="drv_insta"></a></li>
							<li><a href="javascript:;" title="Twitter" class="drv_twitter"></a></li>
						</ul>
					</div>
				</div>
			</div> */?>
			<div class="col-md-12">
			<ul class="pagination">

			<?php
			$total_pages = ceil($drivers_count / $limit); 

			$curPage = $page;
			$totalPage = $total_pages;
			$startPage = ($curPage < 5)? 1 : $curPage - 4;
			$endPage = 8 + $startPage;
			$endPage = ($totalPage < $endPage) ? $totalPage : $endPage;
			$diff = $startPage - $endPage + 8;
			$startPage -= ($startPage - $diff > 0) ? $diff : 0;

			if ($startPage > 1) echo '<li><a href="'.URL_BASE.'meet_our_drivers.html?page=1"><< '.__('first').'</a></li>';
			for($i=$startPage; $i<=$endPage; $i++) echo '<li><a href="'.URL_BASE.'meet_our_drivers.html?page='.$i.'">'.$i.'</a></li>';//" {$i} ";
			if ($endPage < $totalPage) echo '<li><a href="'.URL_BASE.'meet_our_drivers.html?page='.$total_pages.'">'.__('last').' >></a></li>';

?>
		<?php /*
			$total_pages = ceil($drivers_count / $limit);  
			//$pagLink = '<ul class="pagination">';  
			for ($i=1; $i<=$total_pages; $i++) {
						if($page==$i){ ?>
						<li class='active'><a href='<?php echo URL_BASE; ?>meet_our_drivers.html?page=<?php echo $i; ?>'><?php echo $i; ?></a></li>
						<?php	//$pagLink .= "<li class='active'><a href='".URL_BASE."'/meet_our_drivers.html?page=".$i."'>".$i."</a></li>";
						}else{ ?>
							<li><a href='<?php echo URL_BASE; ?>meet_our_drivers.html?page=<?php echo $i; ?>'><?php echo $i; ?></a></li>
						<?php	//$pagLink .= "<li><a href='".URL_BASE."'/meet_our_drivers.html?page=".$i."'>".$i."</a></li>";
						}  
			             //$pagLink .= "<li><a href='/export/view-records.php?page=".$i."'>".$i."</a></li>";  
			};  
			//echo $pagLink . "</ul>";  */

		?>
		</ul>
		</div>
		</div>
			<?php /*</div>
			<div class="col-md-12">
				<ul class="pagination">
					<li><a href="#"><< Prev</a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<?php if($lang == "ar"){?>
					<li><a href="#">Next <<</a></li>
					<?php } else { ?>
					<li><a href="#">Next >></a></li>
					<?php } ?>
				</ul>
			</div>
		</div>*/ ?>
	</section>
</div>