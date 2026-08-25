<?php  defined('SYSPATH') OR die("No direct access allowed."); 

$page_url = str_replace('/','',$_SERVER['REQUEST_URI']);

// print_r($page_content);
// exit;

/*$content = count($cmscontent);
if($content>0) {
if($lang == 'ar') {
  $pagecontent = $cmscontent['arabic_content'];
} else {
  $pagecontent = $cmscontent['content'];
} */



?>

<div class="inner_page_container">
  <section class="cms_banner_container">
    <div class="innerpage_banner">
      <?php if ($page_url == 'careers.html') {

      $careers_page_contents = isset($careers_page_content[0])?$careers_page_content[0]:array();

      ?>
      <img src="public/images/careers_banner.png" alt="Careers" class="img-responsive"> 
          <div class="innerpage_banner_cont">
            <p> <?php echo $careers_page_contents['banner_content']; ?></p>
          </div>
      <?php } else {?>
      <img src="public/images/cms_banner.png" alt="Pricing" class="img-responsive">     
      <?php } ?>
    </div>
  </section>
  <section class="cms_container">
    <div class="container">
      <div class="col-md-12">
        <ul class="nav nav-pills">
            <li <?php if($page_url == 'about-us.html'){ echo 'class="active"';} ?>><a href="about-us.html" title="<?php echo __('about_us');?>" ><?php echo __('about_us');?></a></li>
            <li <?php if($page_url == 'careers.html'){ echo 'class="active"';} ?>><a href="careers.html" title="<?php echo __('careers');?>"><?php echo __('careers');?></a></li>
            <li <?php if($page_url == 'support.html'){ echo 'class="active"';} ?>><a href="support.html" title="<?php echo __('support');?>"><?php echo __('support');?></a></li>
            <li <?php if($page_url == 'blog.html'){ echo 'class="active"';} ?>><a href="blog.html" title="php echo __('blog');?>"><?php echo __('blog');?></a></li>
            <li <?php if($page_url == 'terms-and-conditions.html'){ echo 'class="active"';} ?>><a href="terms-and-conditions.html" title="<?php echo __('terms_conditions');?>" class="picklater"><?php echo __('terms_conditions');?></a></li>
        </ul>
      </div>
      <div class="tab-content">    
        <div <?php 


        if($page_url == 'about-us.html')
          { 
            echo 'id="about"';
          } 
          elseif ($page_url == 'careers.html') {
            echo 'id="careers"';}
          elseif ($page_url == 'support.html') {
            echo 'id="support"';}
          elseif ($page_url == 'blog.html') {
            echo 'id="blog"';}
          else {
            echo 'id="termsconditions"';}


          ?>  class="tab-pane fade active in">
          <?php 

          if ($page_url == 'careers.html') {
            echo View::factory(USERVIEW.'careers')->bind('jobs_list', $jobs_list)->bind('careers_page_contents',$careers_page_contents);
          
          }elseif ($page_url == 'support.html') {
             echo View::factory(USERVIEW.'support');
          }elseif ($page_url == 'blog.html') {
             echo '<iframe src="https://rajasekar54423159.wordpress.com/blog/" style="width:110%;height:1000px">
                    <p>Your browser does not support iframes.</p>
                  </iframe>';
          }elseif($page_url == 'terms-and-conditions.html' || $page_url == 'about-us.html' || $page_url == 'privacy-policy.html'){
             echo isset($page_content['content'])?$page_content['content']:'';
          }else{
           echo ''; 
          }
          ?>
        
        
      </div>
    </div>
  </section>
</div>
<script src='https://www.google.com/recaptcha/api.js'></script>


<?php //} ?>