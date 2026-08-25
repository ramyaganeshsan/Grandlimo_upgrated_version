<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery.validate.js"></script>
<?php defined('SYSPATH') OR die('No direct access allowed.'); 
$menu_count = count($menuorder);
$cat_url = $_SERVER['REQUEST_URI'];
$home = '';
$manage_cms = '';
$manage_contactus = '';
$manage_company_registration = '';
$manage_advancesearch = '';
$manage_search = '';
$manage_features='';
$manage_pricing='';
$manage_demo = '';
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
else
{
$home = 'active';
}
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

<?php $i = 0; foreach($country_details as $country_list) { $city_avil = 0; $j = $i%4; ?>
	
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
}
?>
    </div>
</div>


<div class="header_outer_cont">
            <div class="header_outer_inner clearfix">
                <div class="logo">                
                    <h1><span id="current_time" style="display:none;"></span>                  	
                        <?php if(COMPANY_CID==0) { ?>               	
                        <a href="<?php echo URL_BASE; ?>" title="TagMyTaxi" ><img src="<?php echo URL_BASE.'public/admin/images/logo.png'; ?>" ></a>
                        <?php } else { 
							   if(trim(COMPANY_LOGO_NAME)!=""&&file_exists(COMPANY_LOGO_FILE_PATH)) {
							?>
                        <a href="<?php echo URL_BASE; ?>" title="<?php echo COMPANY_APP_NAME; ?>" ><img src="<?php echo COMPANY_LOGO_URL_PATH; ?>" ></a>
                        <?php } else { ?>
                        <a href="<?php echo URL_BASE; ?>" title="TagMyTaxi" ><img src="<?php echo URL_BASE.'public/admin/images/logo.png'; ?>" ></a>
                        <?php } } ?>
                    </h1>
                </div>
                <div class="header_select_city_menu">
                    <span class="header_select_city" id="select_city"><?php if(isset($_SESSION['search_city'])) { if($_SESSION['search_city'] != '-'){echo $_SESSION['search_city'];}else{ /*echo LOCATION_ADDR;*/}  } else  { /*echo __('select_city');*/ } ?></span>
                </div> 
                <div class="header_left_menu">
                    <!--<span class="header_menu">Menu</span>-->
                    <div class="header_menu_left_inner">
                        <div class="header_menus_common">
                        <ul>
                            <li> <a <?php if($home) { ?> style="color:#ffc000;" <?php } ?> href="<?php echo URL_BASE; ?>"  title="<?php echo __('home'); ?>"><?php echo __('home'); ?></a></li>
			  <!-- <li><a <?php //if($manage_features) //{ ?> style="color:#ffc000;" <?php //} ?> href="<?php //echo URL_BASE; ?>features.html" title="<?php //echo __('features');?>"><?php echo __('features');?></a></li> -->
			     <?php /* <li><a <?php if($manage_cms) { ?> style="color:#ffc000;" <?php } ?> href="<?php echo URL_BASE; ?>about-us.html" title="<?php echo __('aboutus');?>"><?php echo __('aboutus');?></a></li> */ ?>
				<!-- <li><a <?php //if($manage_demo) { ?> style="color:#ffc000;" <?php //} ?> href="<?php //echo URL_BASE; ?>demo.html" title="<?php //echo __('demos');?>" target="_blank"><?php //echo __('demos');?></a></li> -->
<?php 
$usertype = isset($_SESSION['usertype'])?$_SESSION['usertype']:'';
if($usertype =='' || $usertype =='passengers' )
{ ?>
	 <!---<li><a  title="<?php //echo __('GET TAXI');?>" <?php //if(isset($_SESSION['search_country'])) { ?> href="<?php //echo URL_BASE; ?>advance-search.html" <?php } else { ?> href="javascript:;" onclick="showcitylist('')" <?php //} ?> ><?php //echo __('GET TAXI');?></a></li> 
<?php } ?>                                     
                            <?php if($menu_count > 0){
								if(isset($menuorder)){
									foreach($menuorder as $menulist){ ?>
										<!--<li><a href="<?php //echo $menulist['menu_link'];?>" title="<?php //echo ucfirst($menulist['menu_name']);?>"><?php //echo $menulist['menu_name'];?></a></li> -->
									<?php }
								}
							}
							?>
							   
				
                           <!-- <li class=""><a  class="user_taxt " href="javascript:;" title="Customer" onclick=showpopup('','0')>Customer</a></li>-->
                             
                           
                           <?php /* 

				<li><a <?php if($manage_cms) { ?> style="color:#ffc000;" <?php } ?> href="<?php echo URL_BASE; ?>about-us.html" title="<?php echo __('aboutus');?>"><?php echo __('aboutus');?></a></li>
				<li><a href="#" title="Blog"> Blog</a></li> 
                            <!--<li><a <?php if($manage_company_registration) { ?> style="color:#ffc000;" <?php } ?> href="<?php echo URL_BASE; ?>company-registration.html" title="<?php echo __('sign_up_comapny'); ?>"><?php echo __('sign_up_comapny'); ?></a></li>-->
                            <li><a  title="<?php echo __('GET TAXI');?>" <?php if(isset($_SESSION['search_country'])) { ?> href="<?php echo URL_BASE; ?>advance-search.html" <?php } else { ?> href="javascript:;" onclick="showcitylist('')" <?php } ?> ><?php echo __('GET TAXI');?></a></li>        */ ?>  
                            <?php /* <li><a href="#" title="Packages"> Packages</a></li> */ ?>
                                     
                            <li><a  <?php if($manage_contactus) { ?> style="color:#ffc000;" <?php } ?> href="<?php echo URL_BASE;?>contact-us.html" title="<?php echo __('contactus_label');?>"><?php echo __('contactus_label');?></a></li>	
                             <!--<li><a class="fshare_icon" href="javascript:;" onclick="facebookconnect();" title="Facebook">Facebook</a></li>
                            <li><a href="javascript:;"  onclick=showpopup_signup('','0') title="Sign Up">Sign Up</a></li>  
                             <li><a id="login_link" href="javascript:;" onclick=showpopup_signin('','0')  title="Log in">Log In</a></li>
                             <li>|</li>
                           <li><a class="user_taxt1" href="#" title="Driver" onclick=showdriverpopup('')>Driver</a></li> -->
                                                                                   
                        </ul>
                        

			<?php  /*if($home ) { ?>
                      <div class="get_taxi_model">
                           <div class="get_taxi_model_top_bar">
                               <div class="yello_left"> </div>
                               <div class="yello_mid">
                                   <a href="<?php echo URL_BASE.'find/search'; ?>" title="Get Taxi">Get Taxi</a>
                               </div>
                               <div class="yello_right"> </div>

                           </div>
                       </div> 
                       
                       <?php }   */?>

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
                             
                   <div class="right_side_login">                   
                    
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
                    <?php } else { ?>                    
                    <div class="menu_inners">
                        <ul>
                           
                            <!--<li><a class="fshare_icon" href="javascript:;" onclick="facebookconnect();" title="Facebook">&nbsp;</a></li>
                            <li>|</li>
                            <li><a href="javascript:;"  onclick=showpopup_signup('','0') title="Sign Up">Sign Up</a></li>  
                            <li>|</li>
                             <li><a id="login_link" href="javascript:;" onclick=showpopup_signin('','0')  title="Log in">Log In</a></li>
                             <li>|</li>
                           <li><a class="user_taxt1" href="#" title="Driver" onclick=showdriverpopup('')>Driver</a></li>-->
                           
                           <!--<li><a class="user_taxt1" href="#" title="Get Free Trial" onclick=gettrialpopup('')>Get Free Trial</a></li>-->
                           
                           


			   	

				
                        </ul>   
                    </div> <?php }  ?>
                                    </div>                   
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
                       
                <?php /* <div class="right_side_login">                   
                    
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

                    <!-- <div class="menu_inners_login">
                        <ul>
                            <li><a href="#" title="Login">Driver Login</a></li>    
                        </ul>
                    </div>-->
                    <?php } else { ?>
                    
                    <div class="menu_inners">
                        <ul>
                           <!-- <li class=""><a  class="user_taxt " href="javascript:;" title="Customer" onclick=showpopup('','0')>Customer</a></li>-->
                            <li><a class="fshare_icon" href="javascript:;" onclick="facebookconnect();" title="Facebook">&nbsp;</a></li>
                            <li>|</li>
                            <li><a id="login_link" href="javascript:;" onclick=showpopup_signin('','0')  title="Log in">Log In</a></li>
                            <li>|</li>
                             <li><a href="javascript:;"  onclick=showpopup_signup('','0') title="Sign Up">Sign Up</a></li>                             
                            <?php /*
                            <!--<li><a class="user_taxt1" href="#" title="Driver" onclick=showdriverpopup('')>Driver</a></li>
                            <li><a  class="user_taxt2" href="<?php //echo 'demo.tagmytaxi.com/company-registration.html'; ?>" title="<?php //echo __('Company'); ?>"><?php //echo __('Company'); ?></a></li>-->
<!--                            <li class="hovernone"><a href="<?php// echo $footer_contents[0]['facebook_share']; ?>" title="<?php //echo __('facebook_share'); ?>"><img src="<?php //echo URL_BASE; ?>public/images/facebook.png" alt="<?php //echo __('facebook_share'); ?>" /></a></li>  
                            <li class="hovernone"><a href="<?php //echo $footer_contents[0]['twitter_share']; ?>" title="<?php //echo __('twitter_share'); ?>"><img src="<?php //echo URL_BASE; ?>public/images/twitter.png" alt="<?php //echo __('twitter_share'); ?>" /></a></li>-->
			    <?php /*	
                            <li class="hovernone"><a href="#" title="Facebook"><img src="public/images/facebook_icon.png" /></a></li>
                            <li class="hovernone"><a href="#" title="Twitter"><img src="public/images/twitter_icon.png" /></a></a></li>
				
                        </ul>   
                    </div>
                    <?php }  ?>
                </div> */ ?>
               <!-- menus-start-->
                <div class="common_menus_midl">
                    
                </div>
                <!-- menus-end-->
            </div>
            
        </div>
        
        <?php
//For Notice Messages
								//===================
								$sucessful_message=Message::display();
//echo $sucessful_message;		
//$Message->message;
								if($sucessful_message) { ?>

									<div id="messagedisplay">
										 <div class="alert alert-success">
                                                                                     	 <div class="success_float_tt">
										 <button type="button" class="close" data-dismiss="alert">×</button>
                                                                                 <label style="float: left; margin: 4px 0 0 6px;"><?php echo $sucessful_message; ?></label>
                                                                                         </div>
                                                                                         </div>
									</div>
								<?php } ?>    

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
							<option value=""><?php echo __('select_label'); ?></option>
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
								<option value=""><?php echo __('select_label'); ?></option>
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


<!-- City End Here -->       
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
	if (ww < 780) {
		$(".toggleMenu").css("display", "inline-block");
		if (!$(".toggleMenu").hasClass("active")) {
			$(".hnav").hide();
		} else {
			$(".hnav").show();                        
		}
		$(".hnav li").unbind('mouseenter mouseleave');
		$(".hnav li a.parent").unbind('click').bind('click', function(e) {
			// must be attached to anchor element to prevent bubbling
			e.preventDefault();
			$(this).parent("li").toggleClass("hover");                                                
		});
	} 
	else if (ww >= 780) {
		$(".toggleMenu").css("display", "none");
		$(".hnav").show();
		$(".hnav li").removeClass("hover");
		$(".hnav li a").unbind('click');
		$(".hnav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
		 	// must be attached to li so that mouseleave is not triggered when hover over submenu
		 	$(this).toggleClass('hover');
		});
	}
}
</script>


