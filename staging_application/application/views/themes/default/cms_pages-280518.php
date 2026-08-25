<?php  defined('SYSPATH') OR die("No direct access allowed."); 
$content = count($cmscontent);
$page_url = str_replace('/','',$_SERVER['REQUEST_URI']);
if($content>0) {
if($lang == 'ar') {
  $pagecontent = $cmscontent['arabic_content'];
} else {
  $pagecontent = $cmscontent['content'];
} 




?>

<div class="inner_page_container">
  <section class="cms_banner_container">
    <div class="innerpage_banner">
      <?php if ($page_url == 'careers.html') {  ?>
      <img src="public/images/careers_banner.png" alt="Careers" class="img-responsive"> 
          <div class="innerpage_banner_cont">
            <p> Grandlimo is the best place to work. Explore opportunities to take your career to the next level. </p>
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
            <li <?php if($page_url == 'about-us.html'){ echo 'class="active"';} ?>><a href="about-us.html" title="About Us" >About Us</a></li>
            <li <?php if($page_url == 'careers.html'){ echo 'class="active"';} ?>><a href="careers.html" title="Careers">Careers</a></li>
            <li <?php if($page_url == 'support.html'){ echo 'class="active"';} ?>><a href="support.html" title="Support">Support</a></li>
            <li <?php if($page_url == 'blog.html'){ echo 'class="active"';} ?>><a href="blog.html" title="Blog">Blog</a></li>
            <li <?php if($page_url == 'terms-and-conditions.html'){ echo 'class="active"';} ?>><a href="terms-and-conditions.html" title="Terms &amp; Conditions" class="picklater">Terms &amp; Conditions</a></li>
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
            echo View::factory(USERVIEW.'careers');
          
          }elseif ($page_url == 'support.html') {
             echo View::factory(USERVIEW.'support');
          }else{
           echo $pagecontent; 
          }
          ?>
        
        
      </div>
    </div>
  </section>
</div>
<script src='https://www.google.com/recaptcha/api.js'></script>
 <script type="text/javascript">
  (function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);


      'use strict';

      ;( function ( document, window, index )
      {
        var inputs = document.querySelectorAll( '.inputfile' );
        Array.prototype.forEach.call( inputs, function( input )
        {
          var label  = input.nextElementSibling,
            labelVal = label.innerHTML;

          input.addEventListener( 'change', function( e )
          {
            var fileName = '';
            if( this.files && this.files.length > 1 )
              fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
            else
              fileName = e.target.value.split( '\\' ).pop();

            if( fileName )
              label.querySelector( 'span' ).innerHTML = fileName;
            else
              label.innerHTML = labelVal;
          });

          // Firefox bug fix
          input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
          input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
        });
      }( document, window, 0 ));
 </script>
<?php } ?>