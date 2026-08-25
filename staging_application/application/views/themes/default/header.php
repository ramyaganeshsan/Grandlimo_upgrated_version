<?php //echo "Hello demo ";exit;
defined('SYSPATH') OR die('No direct access allowed.');
$menu_count = count($menuorder);
$cat_url = $_SERVER['REQUEST_URI'];
$page = explode('?', $cat_url);
$cat_url=(isset($page[0]))?$page[0]:"";
$home = '';
$manage_cms = '';
$manage_contactus = '';
$manage_company_registration = '';
$manage_advancesearch = '';
$manage_search = '';
$manage_features='';
$manage_cash='';
$manage_portfolio='';
$manage_release_notes='';
$manage_product='';
$manage_solution='';
$manage_pricing='';
$manage_demo = '';
$manage_how_it_works = '';
$manage_terms = '';
$manage_blog = '';
$manage_careers = '';
$manage_pricing = '';
$manage_how_it_works = '';

$siteusers = Model::factory('siteusers');
$Commonmodel = Model::factory('Commonmodel');			

$country_details = $siteusers->country_details();
$city_details = $siteusers->city_details();
$state_details = $siteusers->state_details();

$driver_shift_status = '';
if(isset($_SESSION['usertype']))
{
	if($_SESSION['usertype'] !='passengers')	
	{	
		$driver_id =$_SESSION['id'];
		$driver_shift_status = $Commonmodel->get_driver_current_shift_status($driver_id);		
	}	
}

if($cat_url == '/about-us.html')
{
        $manage_cms = 'active';
}
else if($cat_url == '/portfolios.html')
{
        $manage_portfolio = 'active';
}
else if($cat_url == '/case-studies.html' || $cat_url=='/case-study-details.html')
{
        $manage_cash = 'active';
}
else if($cat_url == '/contact-us.html')
{
        $manage_contactus = 'active';
}
else if($cat_url == '/demo.html')
{
        $manage_demo = 'active';
}
else if($cat_url == '/features.html')
{
        $manage_features = 'active';
}
else if($cat_url == '/pricing.html')
{
        $manage_pricing = 'active';
}
else if($cat_url == '/solutions.html')
{
        $manage_solution = 'active';
}
else if($cat_url == '/careers.html')
{
        $manage_careers = 'active';
}
else if($cat_url == '/blog.html')
{
        $manage_blog = 'active';
}
else if($cat_url == '/how_it_works.html')
{
        $manage_how_it_works = 'active';
}
else if($cat_url == '/pricing.html')
{
        $manage_pricing = 'active';
}

else if($cat_url == '/release-notes.html')
{
        $manage_release_notes = 'active';
}
else if($cat_url == '/taxi-booking-and-dispatching.html' || $cat_url == '/home-assistance.html' || $cat_url == '/vehicle-assistance.html' || $cat_url == '/medical-assistance.html' || $cat_url == '/delivery-assistance.html')
{
	$manage_product = 'active';
}
else if($cat_url == '/company-registration.html')
{
        $manage_company_registration = 'active';
}
else if($cat_url == '/advance-search.html' || $cat_url == '/find/advancesearch')
{
        $manage_advancesearch = 'active';
}
else if($cat_url == '/search.html' || $cat_url == '/find/search')
{
        $manage_search = 'active';
}
else if($cat_url == '/terms-and-conditions.html')
{
        $manage_terms = 'active';
}
else
{
$home = 'active';
}
//echo '<pre>'; print_r($_SESSION);exit;
//print_r($menuorder);
//print_r($miles);
//echo sizeof($miles);

?>
<div id="advance_form_search1" style="display:none">

<form action="<?php echo URL_BASE;?>advance-search.html" method="post" id="form_advance_id">
  <input type="text" name="search_country" value="" id="advance_search_country" />
  <input type="text" name="search_city" value="" id="advance_search_city" />
</form>

</div>

<script type="text/javascript">
function citySelect(URL,country_id,city_id,city_name)
{
/*
$('#advance_form_search1').html('<form action="<?php echo URL_BASE;?>advance-search.html" method="post" id="form_advance_id">' +
  '<input type="text" name="search_country" value="' + country_id + '" />' +
  '<input type="text" name="search_city" value="' + city_name + '" />' +
  '</form>');
  
var form = $('<form action="<?php echo URL_BASE;?>advance-search.html" method="post">' +
  '<input type="text" name="search_country" value="' + country_id + '" />' +
  '<input type="text" name="search_city" value="' + city_name + '" />' +
  '</form>');
*/
$('#advance_search_country').val(country_id);
$('#advance_search_city').val(city_name);
$('#form_advance_id').submit();


}
</script>

  <script>
$(document).ready(function(){
		
$( ".header_select_city" ).click(function() {
$( "#city_part_outer_div" ).slideToggle( "slow" );
$(this).toggleClass("active");           
$(".header_select_city").removeClass("active"); 
});
 });
</script>



<div class="city_part_outer" id="city_part_outer_div">
    <div class="city_liting_inner">

<?php /*$i = 0; foreach($country_details as $country_list) { $city_avil = 0; $j = $i%4; ?>
	
    <div class="city_listing" <?php if($j == 0) { echo 'style=border:none;padding-left:0;'; } ?>>
        <h2><?php echo $country_list['country_name']; ?> </h2>
        <ul>
<?php		
	foreach($city_details as $city_list){
		
		if($city_list['city_countryid'] == $country_list['country_id'])
		{  $city_avil = 1;  ?>
	            <li><a href="javascript:;" <?php if(isset($_SESSION['search_cityid'])) { if($_SESSION['search_cityid'] == $city_list['city_id'])  { ?> style="color:#ffc000;" <?php } } ?>  onclick="citySelect('<?php echo URL_BASE; ?>users/setsessioncity','<?php echo $country_list['country_id']; ?>','<?php echo $city_list['city_id']; ?>','<?php echo $city_list['city_name']; ?>')"  title="<?php echo $city_list['city_name']; ?>"><?php echo $city_list['city_name']; ?></a></li>
	     <?php }
	}		
	if($city_avil == 0) { ?>
		<li><a title="<?php echo __('no_city_avialable'); ?>"><?php echo __('no_city_avialable'); ?></a></li>
	<?php } 
?>
	</ul>
	</div>
<?php
$i++;
} */
?>
    </div>
</div>
<header id="header">
  <div class="header_top">
    <div class="container">
      <div class="header_toprgt">        
        <ul>
          <li <?php if($manage_cms) { ?> class="active" <?php } ?>>
            <a href="<?php echo URL_BASE; ?>about-us.html" title="<?php echo __('about_us');?>"><?php echo __('about_us');?></a></li>
          <li <?php if($manage_careers) { ?> class="active" <?php } ?>><a href="<?php echo URL_BASE; ?>careers.html" title="<?php echo __('careers');?>"><?php echo __('careers');?></a></li>
          <li <?php if($manage_blog) { ?> class="active" <?php } ?>><a href="<?php echo URL_BASE; ?>blog.html" title="<?php echo __('blog');?>"><?php echo __('blog');?></a></li>
          <li <?php if($manage_terms) { ?> class="active" <?php } ?>><a href="<?php echo URL_BASE; ?>terms-and-conditions.html" title="<?php echo __('terms_conditions');?>"><?php echo __('terms_conditions');?></a></li>
          <li>
            <div class="dropdown">             
                      
            
             <?php $lang="en";$lang=isset($_SESSION['lang'])?$_SESSION['lang']:"en";
                  $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                  $values = parse_url($actual_link);
                  $get_path = trim($values['path'], '/');?>  
              
              <?php if($lang == 'ar') { ?>
                    <a href="Javascript:;" class="dropdown-toggle" data-toggle="dropdown" title="<?php echo __('arabic');?>"><span class="flag_ico flag_ar_ico"></span><?php echo __('arabic');?></a>
               <?php }else{ ?>                
                    <a href="Javascript:;" class="dropdown-toggle" data-toggle="dropdown" title="<?php echo __('arabic');?>"><span class="flag_ico flag_eng_ico"></span><?php echo __('english');?></a>
                <?php } ?>
                  <ul class="dropdown-menu">
                     <?php if($lang == 'ar') { ?>
                        <li><a href="javascript:;" title="Arabic" onclick="ChangeLanguage('en');"><span class="flag_ico flag_eng_small_ico"></span><?php echo __('english');?></a> </li>
                         <?php }else{ ?>                
                         <li><a href="javascript:;" title="Arabic" onclick="ChangeLanguage('ar');"><span class="flag_ico flag_ar_small_ico"></span><?php echo __('arabic');?></a> </li>
                    <?php } ?>
                  </ul>              
                  </div>

                <form name="lang_formm" id="lang_formm" action="<?php echo URL_BASE;?>users/change_language" >
                 <input type="hidden"  id="langg" name="lang" value="" />
                  <input type="hidden"  id="current_pagee" name="current_page" value="<?php echo $get_path;?>" />
                </form>


        </ul>

        <div class="responsive_menu_block">
          <a href="javascript:;" title="Menu" class="responsive_menu"></a>
          <ul class="responsive_menubar">
            <li <?php  if($home) { ?> class="active" <?php } ?> > <a  href="<?php echo URL_BASE; ?>"  title="<?php echo __('home'); ?>"><?php echo __('home'); ?></a></li>
            <li <?php if($manage_features) { ?> class="active" <?php } ?>><a href="<?php echo URL_BASE; ?>features.html" title="<?php echo __('features');?>"><?php echo __('features');?></a></li>              
            <li <?php if($manage_how_it_works) { ?> class="active" <?php } ?>><a href="how_it_works.html" title="How it Works">How it Works</a></li>
            <li <?php if($manage_pricing) { ?> class="active" <?php } ?>><a href="pricing.html" title="Pricing">Pricing</a></li>
            <li class="more_menu_list"><a href="javascript:;" title="More" class="more_menu">More</a>
              <ul class="more_menu_blk">
                <li><a href="<?php echo URL_BASE; ?>about-us.html" title="<?php echo __('about_us');?>"><?php echo __('about_us');?></a></li>
                <li><a href="<?php echo URL_BASE; ?>careers.html" title="<?php echo __('careers');?>"><?php echo __('careers');?></a></li>
                <li><a href="<?php echo URL_BASE; ?>blog.html" title="<?php echo __('blog');?>"><?php echo __('blog');?></a></li>
                <li><a href="<?php echo URL_BASE; ?>terms-and-conditions.html" title="<?php echo __('terms_conditions');?>"><?php echo __('terms_conditions');?></a></li>
              </ul>
            </li>

          <?php if($lang == 'ar') { ?>
          <li class="lang_block"><a href="javascript:;" title="English" onclick="ChangeLanguage('en');"><i class="lang_flag lang_eng"></i><?php echo __('english');?></a>
          </li>
          <?php }else{ ?>                
          <li class="lang_block"><a href="javascript:;" title="Arabic" onclick="ChangeLanguage('ar');"><i class="lang_flag lang_ar"></i><?php echo __('arabic');?></a>
          </li>                   
          <?php } ?>


          </ul>          
        </div>



      </div>
    </div>
  </div>
  <div class="header_btm" id="header_btm">
    <div class="container">      
      <div class="logo">                
        <span id="current_time" style="display:none;"></span>                   
        <?php if(COMPANY_CID==1) { ?>                 
        <a href="<?php echo URL_BASE; ?>" title="<?php echo COMPANY_NAME; ?>" ><img src="<?php echo URL_BASE.SITE_LOGO_IMGPATH.'logo.png'; ?>" alt="<?php echo COMPANY_NAME; ?>" ></a>
        <?php } else { 
         if(trim(COMPANY_LOGO_NAME)!=""&&file_exists(COMPANY_LOGO_FILE_PATH)) {?>
        <a href="<?php echo URL_BASE; ?>" title="<?php echo COMPANY_APP_NAME; ?>" ><img src="<?php echo COMPANY_LOGO_URL_PATH; ?>" alt="<?php echo COMPANY_NAME; ?>"></a>
        <?php } else { ?>
        <a href="<?php echo URL_BASE; ?>" title="GrandLimo" ><img src="<?php echo URL_BASE.SITE_LOGO_IMGPATH.'logo.png'; ?>" <?php echo COMPANY_NAME; ?> ></a>
        <?php } } ?>      
      </div>
      <div class="header_btmrgt">
        <ul>
          <li <?php  if($home) { ?> class="active" <?php } ?> > <a  href="<?php echo URL_BASE; ?>"  title="<?php echo __('home'); ?>"><?php echo __('home'); ?></a></li>
          <li <?php if($manage_features) { ?> class="active" <?php } ?>><a href="<?php echo URL_BASE; ?>features.html" title="<?php echo __('features');?>"><?php echo __('features');?></a></li>              
          <li <?php if($manage_how_it_works) { ?> class="active" <?php } ?>><a href="how_it_works.html" title="<?php echo __('how_it_works'); ?>"><?php echo __('how_it_works'); ?></a></li>
          <li <?php if($manage_pricing) { ?> class="active" <?php } ?>><a href="pricing.html" title="<?php echo __('pricing'); ?>"><?php echo __('pricing'); ?></a></li>
        </ul>
      </div>
    </div>
  </div>

<div class="header_outer_cont wow fadeInDown" style="display: none;">  
  <div class="header_outer_inner clearfix">
    
    <?php 
    if(!isset($usrid)){ ?>
    <div class="root_header_left_menu">
      <div class="header_menu_left_inner">
        <div class="header_menus_common">
			    <a href="#" title="Menu" class="toggleMenu" style="display:none;">&nbsp;</a>                            
			
                        <ul class="hnav">
                           
  				
                           
                            <!-- <li class="header_demo"><a href="javascript:;" onclick="gettrialpopup()" title="<?php echo __('Try it Free');?>"><?php echo __('Try it Free');?></a></li> -->
							         
                        </ul>
                        
	
                         <?php   if($home ) { ?>
                            <div class="get_taxi_model" style="display: none;">
                           <div class="home_page_common_contr" id="box_common">
                               <div class="home_page_common_contr_inner">
                                   <div class="close_ican_div">
                                       <span id="boxclose" title="Close" onClick="document.getElementById('box_common').style.display='none';"> </span>
                                   </div>
                                   <div class="advance_searchi_content_comm">
                                    
                                           <div id="panel" class="panel_right">
                                               <div class="advance_search_common">
                                                   <form id="place_search" method="post" name="place_search" action="<?php echo URL_BASE.'search.html'?>">
                                          					<dl class="dl-horizontal_common">
                                          					   <dt>
                                          							<label for="current_location"><?php echo __('Current_Location'); ?></label>
                                          						</dt>
                                          						<dd>
                                          							<input id="current_location" class="input-xxlarge3" type="text" value="" name="current_location" autocomplete="off">
                                          						</dd>
                                          						<dt>
                                          							<label for="drop_location"><?php echo __('Drop_Location'); ?></label>
                                          						</dt>
                                          						<dd>
                                          							<input id="drop_location" class="input-xxlarge3" type="text" value="" name="drop_location" autocomplete="off">
                                          						</dd>
                                          						<dt>
                                          							<label for="no_passengers"><?php echo __('No_Passengers'); ?></label>
                                          						</dt>
                                          						<dd>
                                          							<input id="no_passengers" type="number" value="" size="2" name="no_passengers" max="10" min="1">
                                          						</dd>
                                          						<dt>
                                          							<label for="pick_up_time"><?php echo __('pick_up_time');?></label>
                                          						</dt>
                                          						<dd>
                                          							<div class="input-append bootstrap-timepicker">
                                          								<input id="timepicker1" name="pick_up_time" type="text" class="input-small">
                                          								<span class="add-on"><i class="icon-time"></i></span>
                                          							</div>
                                          							<span id="pickuptime_error" style="color:red"></span>
                                          						</dd>
                                          						<dt>
                                          							<label for="no_passengers"><?php echo __('no_miles'); ?></label>
                                          						</dt>
                                          						<dd>
                                          							<select id="miles" name="miles">
                                          							<?php
                                          							if(count($miles) > 0)
                                          							foreach($miles as $mile){
                                          								echo "<option value=".$mile.">".$mile." ".__('miles')."</option>";
                                          							}
                                          							?>
                                          							</select>
                                          						</dd>
                                          						<dd>
                                          						<dt><label for="no_passengers"></label>
                                          							<input type="hidden" name="lat" id="lat" value=""><input type="hidden" name="lng" id="lng" value="">
                                          						</dt>
                                          						<dt>		
                                          							<button id="search_btn" class="btn btn-inverse" type="button"><?php echo __('button_search'); ?></button>
                                          						</dt>
                                          						</dd>
                                          					</dl> 
                                                   </form>
												                          </div>
                                           </div>
                                   </div>
                               </div>
                           </div>
                            <div class="get_taxi_model_top_bar" >
                                <div class="yello_left"> </div>
                                <div class="yello_mid">
                                    <a <?php if(isset($_SESSION['search_country'])) { ?> href="<?php echo URL_BASE; ?>advance-search.html" <?php } else { ?> onclick=showcitylist('') <?php } ?>  title="<?php echo __('GET TAXI');?>"><?php echo __('GET TAXI');?></a>
                                </div>
                                <div class="yello_right"> </div>

                            </div>
                        </div> 
                        
                        <?php }  ?>

                        
                    </div>
                    </div>
                </div>
                             <?php } ?>
                      <?php /* <div class="right_side_login">                   
                    
					<?php if(isset($usrid)){ ?>
					    <div class="menu_inners_profile">
							<div class="btn-group pull-right">
                                <div class="right_total_common">
                                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#" title="<?php echo ucfirst($name);?>">
										<i class="icon-user_tree"></i> <?php echo __('hi'); ?> <?php echo ucfirst($name);
										//print_r($usr_details);?>
										<span class="caret3"></span>
											  </a>
											  <ul class="dropdown-menu">
												<li>
													<a href="<?php echo URL_BASE;?><?php echo $usertype;?>/dashboard" title="<?php echo __('dashboard'); ?>"> <?php echo __('dashboard'); ?></a>
												</li>
											   <li><a href="<?php echo URL_BASE;?><?php echo $usertype;?>/editprofile" title="<?php echo __('editprofile_label'); ?>"> <?php echo __('editprofile_label'); ?>  </a></li>
											<?php if($usertype =='passengers')
											{ ?>	
											  <li><a href="<?php echo URL_BASE;?><?php echo $usertype;?>/logout" title="<?php echo __('logout_label'); ?>"> <?php echo __('logout_label'); ?> </a></li>	
											<?php } 
											else { ?>	
											   <li><a href="javascript:;" onclick="driver_logout()" title="<?php echo __('logout_label'); ?>"> <?php echo __('logout_label'); ?> </a></li>
											<?php } ?>


											  </ul>
                                            </div>
                                                                                            
								
											</div>
										</div>

                    <!-- <div class="menu_inners_login">
                        <ul>
                            <li><a href="#" title="Login">Driver Login</a></li>    
                        </ul>
                    </div>-->
                    <?php } /*  //else { ?>                    
                    <div class="menu_inners">
                        <ul>
                           
                            <li><a class="fshare_icon" href="javascript:;" onclick="facebookconnect();" title="Facebook">&nbsp;</a></li>
                            <li>|</li>
                            <li><a href="javascript:;"  onclick=showpopup_signup('','0') title="Sign Up">Sign Up</a></li>  
                            <li>|</li>
                             <li><a id="login_link" href="javascript:;" onclick=showpopup_signin('','0')  title="Log in">Log In</a></li>
                             <li>|</li>
                           <li><a class="user_taxt1" href="#" title="Driver" onclick=showdriverpopup('')>Driver</a></li>
                           
                           


			   	

				
                        </ul>   
                    </div> <?php } */ ?>
                                   <?php /*     </div>        */ ?>            
                        <?php if($controller =='find' ) { ?>
                       <div class="get_taxi_model">
                            <div class="get_taxi_model_top_bar">
                                <div class="yello_left"> </div>
                                <div class="yello_mid">
                                    <a href="#" title="<?php echo __('GET TAXI');?>"><?php echo __('GET TAXI');?></a>
                                </div>
                                <div class="yello_right"> </div>

                            </div>
                        </div> 
                        
                        <?php } ?>
                  
            <div class="right_side_login">                   
                    
					<?php if(isset($usrid)){ ?>
					    <div class="menu_inners_profile">
							<div class="btn-group pull-right">
                                <!--<div class="driver_ip">
 	                                <ul>
                                        <li>
                                            <a class="tax_left_ican " href="#" title=" Munirajthammapan">  Munirajthammapan</a>
                                                <div class="drop_custome_left">
                                                    <ul>
                                                        <li>  <a href="#" title=" Munirajthammapan">  Muniraj</a></li>
                                                        <li>  <a href="#" title=" Munirajthammapan">  Muniraj</a></li>
                                                        <li>  <a  href="#" title=" Munirajthammapan">  Muniraj</a></li>
                                                    </ul> 
                                                </div>
                                        </li>
                                    </ul>
                                </div>-->
                                <div class="right_total_common">
                                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#" title="<?php echo ucfirst($name);?>">
										<i class="icon-user_tree"></i> <?php echo __('hi'); ?> <?php echo ucfirst($name);
												//print_r($usr_details);?>
												<span class="caret3"></span>
											  </a>
											  <ul class="dropdown-menu">
												<li>
													<a href="<?php echo URL_BASE;?><?php echo $usertype;?>/dashboard" title="<?php echo __('dashboard'); ?>"> <?php echo __('dashboard'); ?></a>
												</li>
											   <li><a href="<?php echo URL_BASE;?><?php echo $usertype;?>/editprofile" title="<?php echo __('editprofile_label'); ?>"> <?php echo __('editprofile_label'); ?>  </a></li>
											   <li><a href="<?php echo URL_BASE;?><?php echo $usertype;?>/logout" title="<?php echo __('logout_label'); ?>"> <?php echo __('logout_label'); ?> </a></li>
											  </ul>
                                                                                            </div>
                                                                                            
								 <!-- <a class="btn dropdown-toggle" data-toggle="dropdown" href="#" title="<?php echo ucfirst($name);?>">
												<i class="icon-user"></i> <?php echo __('hi'); ?> <?php echo ucfirst($name);
												//print_r($usr_details);?>
												<span class="caret"></span>
											  </a>
											  <ul class="dropdown-menu">
											   	<li>
													<a href="<?php echo URL_BASE;?><?php echo $usertype;?>/dashboard" title="<?php echo __('dashboard'); ?>"> <?php echo __('dashboard'); ?></a>
												</li>
											   <li><a href="<?php echo URL_BASE;?><?php echo $usertype;?>/editprofile" title="<?php echo __('editprofile_label'); ?>"> <?php echo __('editprofile_label'); ?>  </a></li>
											   <li><a href="<?php echo URL_BASE;?><?php echo $usertype;?>/logout" title="<?php echo __('logout_label'); ?>"> <?php echo __('logout_label'); ?> </a></li>
											  </ul>-->
											</div>
										</div>
						
						<!-- Language and alert -->
						  <div class="right_total_common">
                       <div id="notiifcation_alert_outer">
                        <a class="btn dropdown-toggle" id="notiifcation_alert"  href="#" ><?php echo __('alert'); ?><span id="alert_count"></span></a>
						<input type="hidden" name="alert_flg" id="alert_flg" value="0" />
						<ul class="alert_block">
							 <?php /* <li>
						    	<h3 class="alrt_heading">Your Child account Member Booked Trip</h3>
						    	<div class="alrt_usr_img_block">
						    		<img class="alrt_usr_img" alt="name" src="<?php echo URL_BASE.'public/images/alert_user_img.png'; ?>">
						    	</div>
						    	<div  class="alrt_usr_desc_block">
						    		<span class="alrt_name">Syed Razzak</span>
						    		<span class="alrt_phone">+965 1875548900</span>
						    		<span class="alrt_time"><img alt="time" src="<?php echo URL_BASE.'public/images/time_icon.png';?>"/>05-Feb-2016 06:55:00  PM</span>
						    	</div>    	
						    </li>
						    <li>
						    	<h3 class="alrt_heading">Your Child account Member Booked Trip</h3>
						    	<div class="alrt_usr_img_block">
						    		<img class="alrt_usr_img" alt="name" src="<?php echo URL_BASE.'public/images/alert_user_img.png'; ?>">
						    	</div>
						    	<div  class="alrt_usr_desc_block">
						    		<span class="alrt_name">Syed Razzak</span>
						    		<span class="alrt_phone">+965 1875548900</span>
						    		<button title="Accept" class="alert_decline" type="button"></button>
						    		<button title="Decline" class="alert_accept" type="button"></button>

						    	</div>    	
						    </li> */?>
						</ul>	
                       </div>
                       </div>									
						<!-- Language and alert -->
						
						
						
						
                    <!-- <div class="menu_inners_login">
                        <ul>
                            <li><a href="#" title="Login">Driver Login</a></li>    
                        </ul>
                    </div>-->
                    <?php } else { ?>
                    
                    <div class="menu_inners">
                        <ul>
                            <li>
                                    <?php $lang="en";$lang=isset($_SESSION['lang'])?$_SESSION['lang']:"en";
                                    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                    $values = parse_url($actual_link);
                                    $get_path = trim($values['path'], '/');?>                                   
                                    <form name="lang_form" id="lang_form" action="<?php echo URL_BASE;?>users/change_language"  >
                                        <ul class="lang_action">
                                        <?php 
                                        $check_lang =  (isset($_SESSION['lang']))?(($_SESSION['lang'] == 'en')?'English':'العربية'):'English';?>
                                        <li <?php if($check_lang == "English"){ ?> id="" <?php } else  { ?> id=""<?php } ?>><?php echo $check_lang; ?>
                                        
                                        <ul><li id="en" <?php if($lang == "en"){ ?> class="active" <?php  } ?>>English</li>
                                        <li id="ar" <?php if($lang == "ar"){ ?> class="active" <?php  } ?>>العربية</li>
                                        <input type="hidden"  id="lang" name="lang" value="" />
                                        <input type="hidden"  id="current_page" name="current_page" value="<?php echo $get_path;?>" />
                                        </ul></li>
                                        </ul>
                                    </form>
                                <!--Language Config-->
                            </li>
<!--
                            <li><a id="login_link" href="javascript:;" onclick="showpopup_signin('','0')"  title="<?php echo __('log_in'); ?>"  class="login_top"><?php echo __('log_in'); ?></a></li>                         
                             <li><a href="javascript:;"  onclick="showpopup_signup('','0')" title="<?php echo __('sign_up'); ?>"  class="signup_top"><?php echo __('sign_up'); ?></a></li>
-->
                             
                              <li><a id="login_link" href="<?php echo URL_BASE.'login.html'; ?>" title="<?php echo __('log_in'); ?>"  class="login_top"><?php echo __('log_in'); ?></a></li>                         
                             <li><a href="<?php echo URL_BASE.'signup.html'; ?>"  title="<?php echo __('sign_up'); ?>"  class="signup_top"><?php echo __('sign_up'); ?></a></li>
                        </ul>
                    </div>
                    <?php }  ?>
                </div> 
               <!-- menus-start-->
                <div class="common_menus_midl">
                    
                </div>
                <!-- menus-end-->
            </div>
            
        </div>
		
		</header>
        
       

  <?php  /* if($home ) { ?>
  <?php  /* if($home ) { ?>
 <!--End : Driver Details in Tabular Column -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
<script type="text/javascript">	
$(document).ready(function(){

	<?php if(empty($pickup_time)){?>
	//$('div.slider_common').hide();
	<?php } ?>

	$('.get_taxi_model_top_bar1').click(function(){
		$('div.home_page_common_contr1 ').slideToggle(1050);


		$(this).find('.yello_mid a').toggleClass('active');
	});
	
	$("#current_location").blur(function(){
		var cur_loc = $("#current_location").val();
		if(cur_loc==""){
			$("#current_location").css("border","1px solid red");
		}else{
			$("#current_location").css("border","");
		}
	});
	$("#drop_location").blur(function(){
		var drop_loc = $("#drop_location").val();
		if(drop_loc==""){
			$("#drop_location").css("border","1px solid red");
		}else{
			$("#drop_location").css("border","");
		}
	});
	$("#no_passengers").blur(function(){
		var no_pass = $("#no_passengers").val();
		if(no_pass==""){
			$("#no_passengers").css("border","1px solid red");
		}else{
			$("#no_passengers").css("border","");
		}
	});
	
	$('#search_btn').click(function(){
				
		var Timeobject = new Date()
		var hours = Timeobject.getHours()
		var minutes = Timeobject.getMinutes()
		var seconds  = Timeobject.getSeconds()	
		var currentTime = '<?php echo date('h:i:s a');?>';//hours+':'+(minutes<10?'0':'') + minutes+':'+seconds;
		//alert(currentTime);
		
		var cur_loc = $("#current_location").val();
		var drop_loc = $("#drop_location").val();
		var pickuptime = $("#timepicker1").val();
		
		var no_pass = $("#no_passengers").val();
		if(cur_loc==""){
			$("#current_location").css("border","1px solid red");
			return false;
		}else{
			if(cur_loc=='Left Click on the Map to get the Pick Up Location'){
				$("#current_location").css("border","1px solid red");
				return false;
			}else{
				$("#current_location").css("border","");
			}
		}
		
		if(drop_loc==""){			
			$("#drop_location").css("border","1px solid red");
			return false;
		}else{
			if(drop_loc=='Right Click on the Map to get the Drop Location'){
				$("#drop_location").css("border","1px solid red");
				return false;
			}else{
				$("#drop_location").css("border","");
			}
		}
		
		if(no_pass==""){
			$("#no_passengers").css("border","1px solid red");
			return false;
		}else{
			$("#no_passengers").css("border","");
		}
		
		
		//alert(cur_loc);
		if(cur_loc != "" && drop_loc != "" && no_pass != "")
		{
			 document.getElementById("place_search").submit();
		}
	});
});

function initialize() {
	var input = (document.getElementById('current_location'));
	var input2 = (document.getElementById('drop_location'));
	var autocomplete = new google.maps.places.Autocomplete(input);
	var autocomplete1 = new google.maps.places.Autocomplete(input2);

	google.maps.event.addListener(autocomplete, 'place_changed', function() {		
		var place = autocomplete.getPlace();
		if (!place.geometry) {
		  // Inform the user that the place was not found and return.
		  input.className = 'notfound';
		  return;
		}
		
		//Assinging the Locations While Auto Suggestions			
		var lat = place.geometry.location.lat();
		var lng = place.geometry.location.lng();
		
		set_hidden(lat,lng);
		
	});

}

	function set_hidden(lat,lng)
	{		
		$('#lat').val(lat);
		$('#lng').val(lng);
	}
google.maps.event.addDomListener(window, 'load', initialize);

</script>
<?php } */?>

<script>

var ww = document.body.clientWidth;

$(document).ready(function() {
	$(".hnav li a").each(function() {
		if ($(this).next().length > 0) {
			$(this).addClass("parent");
		}
	});
	
	$(".toggleMenu").click(function(e) {
		e.preventDefault();
		$(this).toggleClass("active");
		$(".hnav").slideToggle("medium");
	});
	adjustMenu();
})

$(window).bind('resize orientationchange', function() {
	ww = document.body.clientWidth;
	adjustMenu();
});

var adjustMenu = function() {
	if (ww < 1150) {	 
		jQuery(".toggleMenu").css("display", "inline-block");
		if (!jQuery(".toggleMenu").hasClass("active")) {
			jQuery(".hnav").css("display", "none");
		} else {
			jQuery(".nav").show();
		}
		jQuery(".hnav li").unbind('mouseenter mouseleave');
		jQuery(".hnav li a.parent").unbind('click').bind('click', function(e) {
			// must be attached to anchor element to prevent bubbling
			//e.preventDefault();
			jQuery(this).parent("li").toggleClass("hover");
		});
	} 
	else if (ww >= 1150) {
		jQuery(".toggleMenu").css("display", "none");
		jQuery(".hnav").css("display", "inline-block");
		jQuery(".hnav li").removeClass("hover");
		jQuery(".hnav li a").unbind('click');
		jQuery(".hnav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
		 	// must be attached to li so that mouseleave is not triggered when hover over submenu
		 	jQuery(this).toggleClass('hover');
		});
	}
}

</script>

 <script type="text/javascript">
   $(document).ready(function(){
           $('.tax_left_ican').click(function(){
               $('div.drop_custome_left').css('display','none');
               $(this).next('div.tax_left_ican').css('display','block');            
               $('a').removeClass('select');
               $(this).addClass('select');  
	   });            
    });
	
		</script>	


<?php /*
<!-- City Start Here -->
	<div id="citylist_popup">
                <h2><?php echo __('select_your_city');?></h2>                

				<div class="login_total">                                               
                        <div class="selectcity_form">
                           <form name="search_citylist"  id="search_citylist" method="post" action="<?php echo URL_BASE.'advance-search.html'; ?>">
                            <ul>
                                <li>
					<span><?php echo __('country_label'); ?></span>
					<div class="controls">
							<div class="input-prepend">
							  <span class="add-on"><i class="country_icon"></i></span>
							<select name="search_country" id="search_country" class="required" title="<?php echo __('select_the_country'); ?>">
							<option value="">--Select--</option>
							<?php foreach($country_details as $country_list) { ?>
							<option value="<?php echo $country_list['country_id']; ?>" <?php if(isset($_SESSION['search_country']) == $country_list['country_id'] ) { echo 'selected'; } ?> ><?php echo $country_list['country_name']; ?></option>
							<?php } ?>
							</select>


							</div>
					</div>  
					<span id="country_error" class="signup_error"  style="margin-right:95px;"></span>
				</li>

                                <li>
					<span><?php echo __('city_label'); ?></span>
					<div class="controls">
							<div class="input-prepend">
							  <span class="add-on"><i class="city_icon"></i></span>
							<div id="country_citylist">
								<select name="search_city" id="search_city" class="required" title="<?php echo __('select_the_city'); ?>">
								<option value="">--Select--</option>
								<?php
								foreach($city_details as $city_list) {  ?>
								<option value="<?php echo $city_list['city_name']; ?>" <?php if(isset($_SESSION['search_city']) == $city_list['city_name'] ) { echo 'selected'; } ?> ><?php echo $city_list["city_name"]; ?></option>
								<?php	} ?>
								</select>
							</div>	


							</div>
					</div>      
					<span id="city_error" class="signup_error" style="margin-right:120px;"></span>                          
				</li>
								
                                <li><span></span>
                                        <input type="button" id="submit_citysearch" value="<?php echo 'Submit'; ?>" class="btn btn-inverse" title="<?php echo __('btn_submit');?>"  />                                        
                                  </li>
                               
                                     </ul>                      
						  </form> 
						 </div>
                  </div>
                  <a id="close_x" class="close sprited" href="#"></a>
</div>


	<div id="current_shiftstatus">			
	
		<?php if($driver_shift_status == 'IN'){?>
		<span class='btn btn-mini btn-success' style="display:none;" onclick="drivershift('0')"><?php echo __('shift_out');?></span>
		<input name='driver_current_status' id='driver_current_status' type='hidden' value='IN'>
		<?php } else { ?>
		<span class='btn btn-mini btn-danger' style="display:none;" onclick="drivershift('1')"><?php echo __('shift_in');?></span>
		<input name='driver_current_status' id='driver_current_status' type='hidden' value='OUT'>
		<?php } ?>
	</div>


<!-- City End Here -->      */?> 
<script>

$('#submit_citysearch').click(function(){

    var country = document.search_citylist.search_country.value;    
    var city = document.search_citylist.search_city.value;

    if(country =='' || city == '')
    {
       valid = true;

        if(country == '')
        {
            $('#country_error').html("Please Select the Country");
            return false;
        }

        if(city == '')
        {
            $('#country_error').html('');
            $('#city_error').html("Please Select the City");
            return false;
        }
    }
    else{

             $('#country_error').html('');
             $('#city_error').html('');

	document.getElementById("search_citylist").submit();
   }
});


   function showcitylist()
   {
			$("#citylist_popup").lightbox_me({centered: true, onLoad: function() {
			}});					
			event.preventDefault();

   }	

    $("#search_country").change(function() {

      		var countryid= $("#search_country").val();

		  $.ajax({
			url:"<?php echo URL_BASE;?>users/country_citylist",
			type:"get",
			data:"country_id="+countryid,
			success:function(data){

			$('#country_citylist').html();
			$('#country_citylist').html(data);
			},
			error:function(data)
			{
				//alert(cid);
			}
		});	
    });
</script>

<script type="text/javascript">
$(document).ready(function() {
$('a[href*=#]:not([href=#])').click(function() {
if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
var target = $(this.hash);
target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
if (target.length) {
$('html,body').animate({
scrollTop: target.offset().top-0
}, 1000);
return false;
}
}
});
<?php if(isset($usrid)){ ?>
alert_count_upadate();
<?php } ?>




});



/* Send the data using post with element id name and name2*/
<?php if(isset($usrid)){ ?>
setInterval("alert_count_upadate()", 300000);
$('#notiifcation_alert').click(function(e){
 	
 /*
 if ($('#alert_flg').val() == 0) {
    $('.alert_block').show();
 } else {
	$('.alert_block').hide();
 }*/
 url = '<?php echo URL_BASE.MOB_API_URL;?>/?type=get_child_request_status';
 var parameter = JSON.stringify({ "_id":"<?php echo $usrid;?>","lang":"<?php echo $lang; ?>"});

 var posting = $.post( url,parameter );

 posting.done(function( data ) {
	  alert_count_upadate();
	  var obj = $.parseJSON(data);
	    var i = 1;
		if(obj.status== 1){
			$('.alert_block').html('');
			//if($('#alert_flg').val() == 0) {
				$.each(obj.details, function (key, item) {			
							var html = '<li><h3 class="alrt_heading"></h3><div class="alrt_usr_img_block"><img class="alrt_usr_img" alt="image" src="'+item.profile_image+'"></div><div  class="alrt_usr_desc_block"><span id="'+item._id+'" class="alrt_name">'+item.name+' '+item.lastname+'</span><span class="alrt_phone">'+item.phone+'</span><span class="alrt_msg">'+item.notification_type+' '+item.message+'</span>';
							if (item.type == 1) {
								html += '<button id="'+item.request_id+'-1" class="alert_accept" title="Accept" onclick="alert_accept(this)"  ></button><button  onclick="alert_decline(this)" class="alert_decline" id="'+item.request_id+'-0"></button>';
							}
							
							html += '<div  class="alert_parent" ><input type="hidden" name="parent_id" id="parent_id'+item.request_id+'" value="'+item.id+'" /></div></div></li>';
							$('.alert_block').append(html);
							
							i++;
				});
				//$('#alert_flg').val(1);
	
			//} else{
				//$('#alert_flg').val(0);
				//$('.alert_block').html('');
			//}
		}else {
			$('.alert_block').html('<p class="alert_trigger">'+obj.message+'</p>');	 
            //$(".alert_block").toggleClass("alert_show");            
		}		
});
	$('.alert_block').show();
	e.stopPropagation();
});

$(".alert_block").click(function(e){
    e.stopPropagation();
});

$(document).click(function(){
    $(".alert_block").hide();
});
/*var request_id = $(this).attr('id');
	var str_array = request_id.split('-');
	var my_par = $('#parent_id'+str_array[0]).val();
	url = '<?php echo URL_BASE.MOB_API_URL;?>/?type=child_request_status';
 var parameter = JSON.stringify({"parent_id":my_par,"passenger_id":"<?php echo $usrid;?>","status":str_array[1],"request_id":request_id});

 var posting = $.post( url,parameter );

 posting.done(function( data ) {
	  var obj = $.parseJSON(data);
		if(obj.status== 1){
			alert(obj.message);	 
		 }else {
			alert(obj.message);	 
		}
		
});

*/
function alert_accept(val){

	var request_id = $('.alert_accept').attr('id');
	var str_array = request_id.split('-');
	
	var my_par = $('#parent_id'+str_array[0]).val();
	
	url = '<?php echo URL_BASE.MOB_API_URL;?>/?type=child_request_status';
 var parameter = JSON.stringify({"parent_id":my_par,"passenger_id":"<?php echo $usrid;?>","status":str_array[1],"request_id":request_id});

 var posting = $.post( url,parameter );

 posting.done(function( data ) {
	  var obj = $.parseJSON(data);
		if(obj.status== 1){
			alert_count_upadate();
			$('#alert_flg').val(0);
			$('.alert_block').html('');
			
			//alert(obj.message);	 
		 }else {
			
			alert(obj.message);	 
		}
		
});
	
}
function alert_decline(val){
var request_id = $('.alert_decline').attr('id');
	var str_array = request_id.split('-');
	var my_par = $('#parent_id'+str_array[0]).val();
	url = '<?php echo URL_BASE.MOB_API_URL;?>/?type=child_request_status';
 var parameter = JSON.stringify({"parent_id":my_par,"passenger_id":"<?php echo $usrid;?>","status":"2","request_id":request_id});

 var posting = $.post( url,parameter );

 posting.done(function( data ) {
	  var obj = $.parseJSON(data);
		if(obj.status== 1){
			alert_count_upadate();
			$('#alert_flg').val(0);
			$('.alert_block').html('');
			//alert(obj.message);	 
		 }else {
			alert(obj.message);	 
		}
		
});
}


function alert_count_upadate(){ 
 url = '<?php echo URL_BASE.MOB_API_URL;?>/?type=get_notification_count';
 var parameter = JSON.stringify({ "_id":"<?php echo $usrid;?>"});
 var posting = $.post( url,parameter );
 posting.done(function( data ) {
		var obj = $.parseJSON(data);
		if(obj.status== 1){
			$('#alert_count').show();
			$('#alert_count').text(obj.details);
		}else {
			$('#alert_count').css('background', 'none');
		}
}); 

}

<?php } ?>






</script>

<script>

  function ChangeLanguage(lang){

    $('#langg').val(lang);
    $('#lang_formm').submit();
  }

  $('.lang_action li ul li').click(function()
  {
    $('#lang').val($(this).attr('id'));
    //if($(this).attr('id') == 'en'){
      $('#lang_form').submit();
    //}
  });
/*sticky header*/
  window.onscroll = function() {myFunction()};
  var navbar = document.getElementById("header");
  function myFunction() {
    if (window.pageYOffset > 0) {
      navbar.classList.add("sticky")
    } else {
      navbar.classList.remove("sticky");
    }
  }
  $(document).ready(function(){
    $('.responsive_menu').click(function(){
      $(this).toggleClass('active');
      $('.responsive_menubar').toggleClass('active');
    });
    $('.more_menu').click(function(){
      $(this).toggleClass('active');
      $('.more_menu_blk').toggleClass('active');
    });
  });
</script>
