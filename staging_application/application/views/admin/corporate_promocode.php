<?php defined('SYSPATH') OR die("No direct access allowed.");
   echo html::script('public/ckeditor/ckeditor.js');
   
   $user_type_val = isset($srch["user_type"]) ? $srch["user_type"] :'';
   $company_val = isset($srch["filter_company"]) ? $srch["filter_company"] :'';
   $status_val = isset($srch["status"]) ? $srch["status"] :'';
   $keyword = isset($srch["keyword"]) ? $srch["keyword"] :'';
   
   $total_users = count($all_user_list);
   $table_css = $export_excel_button="";
   
   if($total_users>0)
   {
   	$table_css='class="table_border"';
   	$export_excel_button='<input type="button"  title="'.__('button_export').'" class="button" value="'.__('button_export').'" onclick="location.href=\''.URL_BASE.'manageusers/export?keyword='.$keyword.'&status='.$status_val.'&type='.$user_type_val.'\'" />';
   }
?>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery-1.6.3.min.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery.validate.js"></script>
<!-- time picker start-->
<link rel="stylesheet" href="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/css/ui-lightness/jquery-ui-1.8.11.custom.css" />
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/js/jquery-1.5.1.min.js"></script>
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-1.8.11.custom/js/jquery-ui-1.8.11.custom.min.js"></script>
<script src="<?php echo URL_BASE;?>public/js/datetimehrspicker/jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery.validate.js"></script>
<div class="container_content fl clr">
   <div class="cont_container mt15 mt10">
      <div class="content_middle">
         <form method="POST" class="form" name="frmusers" id="frmusers" action="sendpromocodecorporate">
            <table border="0" cellpadding="5" cellspacing="0" width="100%">
               <?php if($_SESSION['user_type'] !='O' ) { ?>
               <tr>
                  <td valign="top" width="20%"><label><?php echo __('usertype_label'); ?></label><span class="star">*</span></td>
                  <td>
                     <?php //print_r($errors);?>
                     <div class="new_input_field">
                        <select name="mail_type" id="mail_type" onchange="get_users(this.value);" style="width:200px;" class="required">
                           <option selected="selected" value="1"><?php echo __('all_label'); ?></option>
                           <?php /* <option value="1" selected><?php echo __('all_passenger');?></option> */?>                                    		
                           <option value="2"><?php echo __('corporate_account');?></option>
                        </select>
                        <?php /* if(isset($errors) && array_key_exists('country_name',$errors)){ echo "<span class='error'>".ucfirst($errors['country_name'])."</span>";} */?>
                     </div>
                  </td>
               </tr>
               <tr class='corp'>
                  <td valign="top" width="20%"><label><?php echo __('select_corporate'); ?></label><span class="star">*</span></td>
                  <td id="user_dd">
                     <?php echo __('select_corporate'); ?>
                     <input type="hidden" name="to_user[]" value="">
                     <div class="new_input_field">					   
                        <?php //if(isset($errors) && array_key_exists('iso_country_code',$errors)){ echo "<span class='error'>".ucfirst($errors['iso_country_code'])."</span>";}?>
                     </div>
                  </td>
                  <input type="hidden" name="avail_passengers" id="avail_passengers" value="" >
               </tr>
               <?php } else {  
                  $id         = $_SESSION['userid'];
                  $email      = $_SESSION['email'];
                  $pname      = $_SESSION['pname'];
                  $res =  $id . '~' . $email . '~' . $pname;
                  ?>
               <input type="hidden" name="to_user[]" id="to_user" value="<?php echo $res;?>" />
               <!--			  <input type="hidden" name="mail_type" id="mail_type" value="2" />-->
               <?php } ?>
               <tr>
                  <td valign="top" width="20%"><label><?php echo __('coupon_packages'); ?></label><span class="star">*</span></td>
                  <td>
                     <div class="new_input_field">
                        <select name="package" id="package" class="required" style="width:200px;" onchange="show_fixed_fare();">
                           <option value=""><?php echo __('select'); ?></option>
                           <?php foreach($avail_package as $package){ 
                              $fixed_fare_apply = isset($package['fixed_fare_apply'])?$package['fixed_fare_apply']:0;
                              ?>
                           <option data-fixed="<?php echo $fixed_fare_apply; ?>" value="<?php echo $package['_id'];?>"><?php echo ucfirst($package['coupon_package_name']);?></option>
                           <?php } ?>
                        </select>
                        <br /><span id="unameavilable" class="validerror"> </span>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td valign="top" width="20%"><label><?php echo __('promocode'); ?></label><span class="star">*</span></td>
                  <td>
                     <div class="new_input_field">
                        <input type="text" class="required" title="<?php echo __('enterthepromocode'); ?>" maxlength="6" name="promo_code" id="promo_code" onblur="checkpromocode(this.value)" value="<?php echo (isset($promocode))?$promocode:""; ?>"   />
                        <?php //if(isset($errors) && array_key_exists('telephone_code',$errors)){ echo "<span class='error'>".ucfirst($errors['telephone_code'])."</span>";} maxlength="10" minlength="4" ?>
                        <br /><span id="unameavilable" class="validerror"> </span>
                     </div>
                  </td>
               </tr>
               <!-- Send Promocode to multiple user phone numbers / email  -->
               <tr class='corp'>
                  <td valign="top" width="20%"><label><?php echo __('contact_details'); ?></label><span class="star">*</span></td>
                  <td>
                     <div class="new_input_field passen_out">
                        <div class="passen_promo corp">
                           <input type="text" class="req phoneno" maxlength="10" placeholder="<?php echo __('enter_phone_number_wo_code'); ?>" title="<?php echo __('enter_phone_number'); ?>" name="cphone1" id="cphone1" value=""   />
                           <input type="text" class="req" placeholder="<?php echo __('enter_email'); ?>" title="<?php echo __('enter_email'); ?>" name="cemail1" id="cemail1" value="" />
                           <div class="forms_anch"><a class="btns1" id="add_moreimage" href="#"><?php echo __('add_more');?></a></div>
                        </div>
                        <div id="sub_add"></div>
                        <span id="unameavilable" class="validerror"> </span>
                        <input type="hidden" name="user_cnt" id="user_cnt" value="1" />
                     </div>
                  </td>
               </tr>
               <!-- Send Promocode to multiple user phone numbers / email  -->
               <tr id="fixed_fare_tr" style="display:none;">
                  <td valign="top" width="20%">
                     <label>
                        <?php echo __('fixed_fare_amount'); ?><span class="star">*</span>
                  </td>
                  <td>
                  <div class="new_input_field">
                  <input type="text" class="" title="<?php echo __('Enter the fixed fare'); ?>" maxlength="6" name="fixed_fare_amt" id="fixed_fare_amt" value="<?php echo (isset($fixed_fare_amt))?$fixed_fare_amt:""; ?>" onkeypress="return isNumberOnly(event,this)" />
                  <?php //if(isset($errors) && array_key_exists('telephone_code',$errors)){ echo "<span class='error'>".ucfirst($errors['telephone_code'])."</span>";} maxlength="10" minlength="4" ?>
                  <label>This promo applied any trip then fixed amount (Ex: Trip amt 15 fixed fare amount 3 means its convert to trip fare 3)</label>		      
                  </div>
                  </td>   	
               </tr>
               <tr>
                  <td valign="top" width="20%"><label><?php echo __('start_date'); ?></label><span class="star">*</span></td>
                  <td>
                     <div class="new_input_field">
                        <input type="text" class="required end_exp_valid" title="" name="start_date" id="start_date" readonly="readonly" value=""  />
                        <?php //if(isset($errors) && array_key_exists('telephone_code',$errors)){ echo "<span class='error'>".ucfirst($errors['telephone_code'])."</span>";}?>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td valign="top" width="20%"><label><?php echo __('expire_date'); ?></label><span class="star">*</span></td>
                  <td>
                     <div class="new_input_field">
                        <input type="text" class="required start_exp_valid" title="" name="expire_date" readonly="readonly" id="expire_date" value="" />
                        <?php //if(isset($errors) && array_key_exists('telephone_code',$errors)){ echo "<span class='error'>".ucfirst($errors['telephone_code'])."</span>";}?>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td valign="top" width="20%"><label><?php echo __('limit'); ?></label><span class="star">*</span></td>
                  <td>
                     <div class="new_input_field">
                        <input type="text" class="required onlynumbers" title="" name="limit" id="limit" min="1" value="" maxlength="5"  />
                        <?php //if(isset($errors) && array_key_exists('telephone_code',$errors)){ echo "<span class='error'>".ucfirst($errors['telephone_code'])."</span>";}?>
                     </div>
                  </td>
               </tr>    
               <tr class="corp">
                  <td valign="top" width="20%"><label><?php echo __('subject'); ?></label><span class="star">*</span></td>
                  <td>
                     <div class="new_input_field corp">
                        <input type="text" class="req" title="<?php echo __('subject'); ?>" name="subject" id="subject" value=""  maxlength="256" />
                        <?php //if(isset($errors) && array_key_exists('currency_code',$errors)){ echo "<span class='error'>".ucfirst($errors['currency_code'])."</span>";}?>
                     </div>
                  </td>
               </tr>
               <tr class="corp">
                  <td valign="top" width="20%"><label><?php echo __('content'); ?></label></td>
                  <td>
                     <div class="new_input_field1 corp">
                        <textarea name="content" id="content" class="ckeditor" class="req" title="<?php echo __('entercontent'); ?>" rows="7" cols="35"><?php //if(isset($postvalue) && array_key_exists('content',$postvalue)){ echo $postvalue['content']; }?></textarea>
                        <?php //if(isset($errors) && array_key_exists('content',$errors)){ echo "<span class='error'>".ucfirst($errors['content'])."</span>";}?>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td>&nbsp;</td>
                  <td colspan="" class="star">*<?php echo __('required_label'); ?></td>
               </tr>
               <tr>
                  <td>&nbsp;</td>
                  <td colspan="">
                     <br />
                     <div class="button blackB">     <input type="button" value="<?php echo __('button_back'); ?>" onclick="window.history.go(-1)" /></div>
                     <div class="button dredB">   <input type="reset" value="<?php echo __('button_reset'); ?>" title="<?php echo __('button_reset'); ?>" /></div>
                     <div class="button greenB">  <input type="submit" value="<?php echo __('submit' );?>" name="submit_addcountry" id="send_promocode" title="<?php echo __('submit' );?>" /></div>
                     <div class="clr">&nbsp;</div>
                  </td>
               </tr>
            </table>
         </form>
      </div>
      <div class="clr">&nbsp;</div>
      <div class="clr">&nbsp;</div>
   </div>
</div>
<style type="text/css">
   #ui-datepicker-div { z-index: 1041 !important}
</style>
<script type="text/javascript" language="javascript">
   $('.corp').hide();	
   
   function show_fixed_fare(val){
   
   	var package = $('#package').val();
   
       if(package!=''){
   
           var package_type = $('select#package').find(':selected').data('fixed');       
   
           if(package_type==1){
   
           	$('#fixed_fare_tr').show();
           	$('#fixed_fare_amt').addClass('required');
           }else{
           	$('#fixed_fare_tr').hide();
           	$('#fixed_fare_amt').removeClass('required');
           }
       }
   }
   
   function isNumberOnly(evt,e) {
      
      if(e.value!=''){
          evt = (evt) ? evt : window.event;
          var charCode = (evt.which) ? evt.which : evt.keyCode; //alert(charCode+'ghgfhgf'+e.value);
          if (charCode > 31 && (charCode < 48 || charCode > 57)) {
              return false;
          }
          return true;
      }else{
         evt = (evt) ? evt : window.event;
          var charCode = (evt.which) ? evt.which : evt.keyCode; //alert(charCode+'first'+e.value);
          if (charCode > 31 && (charCode <= 48 || charCode > 57)) { //alert('falseee');
              evt.preventDefault();
          }
          return true;
      }
   }
   
   function get_users(mailtype)
   {
   	
   		if(mailtype == 2)
   		{
   			var company_id;
                           $('.corp').show();
                           $('.req').addClass('required');
                           $('.cemail1').addClass('emailCustom');
   			// alert();
   			<?php if($company_id == 0) { ?>
   				company_id = $("#company").val();
   			<?php } else { ?>
   				company_id = '<?php echo $company_id; ?>';
   			<?php } ?>
   			  $.ajax({
   				url:"<?php echo URL_BASE;?>manageusers/getuserslist?company_id="+company_id,
   				type:"get",
   				success:function(data){
   					//alert(data);return false;
   						$("#user_dd").html(data);	
   				},
   				error:function(data)
   				{
   					alert('error');
   				}
   			});	
   		}
   		else
   		{
   			$('.corp').hide();
                           $('.req').removeClass('required');
                           $('.cemail1').removeClass('emailCustom');
                           $("#user_dd").html('<?php echo __('all_passenger'); ?>');
   			$("#mail_type").val(mailtype);
   		}
       
   }
   
   /** get promocode with company prefix **/
   function get_company_promo(company_id)
   {
   	 $.ajax({
   			url:"<?php echo URL_BASE;?>manageusers/getcompanypromo?company_id="+company_id,
   			type:"get",
   			success:function(data){
   				//alert(data);return false;
   					$("#promo_code").val(data.trim());	
   			},
   			error:function(data)
   			{
   				alert('error');
   			}
   		});	
   }
    $.validator.setDefaults({ ignore: [] });
    $.validator.addMethod("end_exp_valid", function(value, element) {
   	 
   	 $( "label" ).remove( ".errorvalid" );
   	 
   	 
   	 //alert( value); 
   	var expire_date=$('#expire_date').val();	
   	var startdatevalue = $('#start_date').val();	
   	
   	if(start_date!=''&&value!='')
   	{
   		 //Check the expire date from the start date
   		   if(Date.parse(expire_date) <= Date.parse(startdatevalue))
   		   {			   
   			   return false;
   		   }
   		   else
   		   {
   			   return true;			   
   		   }
   	}
   	else
   	{		
   		return false;		
   	} 
   	 
   
    },"Expire date should be greater than start date"); 
    
    
    
    $.validator.addMethod("start_exp_valid", function(value, element) {
   	 
   	$( "label" ).remove( ".errorvalid" );	 
   	
   	var expire_date=$('#expire_date').val();	
   	var startdatevalue = $('#start_date').val();	
   	
   	if(start_date!=''&&value!='')
   	{
   		 //Check the expire date from the start date
   		   if(Date.parse(expire_date) <= Date.parse(startdatevalue))
   		   {			   
   			   return false;
   		   }
   		   else
   		   {
   			   return true;			   
   		   }
   	}
   	else
   	{		
   		return false;		
   	} 
   		
   	
   	
   	/* if(start_date!=''&&value!='')
   	{
   		var start_data=start_date.split(' ');
   		var st_date=start_data[0].split('-');
   		var st_time=start_data[1].split(':');
   		
   		var expire_data=value.split(' ');
   		var ex_date=expire_data[0].split('-');
   		var ex_time=expire_data[1].split(':');		
   		
   		var d1 = new Date(st_date.pop(), st_date.pop() - 1, st_date.pop(),st_time.pop(),st_time.pop(),st_time.pop());
   		
   		var d2 = new Date(ex_date.pop(), ex_date.pop() - 1, ex_date.pop(),ex_time.pop(),ex_time.pop(),ex_time.pop());
   		
   	
   	//alert(d2);
   		
   		if(d1.getTime() > d2.getTime())
   		{
   			return false;
   		}
   		else
   		{
   			return true;
   		}
   	}
   	else
   	{
   		return true;
   	} */
   		 
    },"Expire date should be greater than start date");
   	
   //For Delete the users
   //=====================
   function frmdel_user(userid)
   {
      var answer = confirm("<?php echo __('delete_alert2');?>");
       
   	if (answer){
           window.location="<?php echo URL_BASE;?>admin/delete_passenger/"+userid;
       }
       
       return false;  
   }  
   function frmblk_user(userid,status)
   {   
       window.location="<?php echo URL_BASE;?>admin/blkunblk_passenger/"+userid+"/"+status;    
       return false;  
   }  
   
</script>
<script type="text/javascript">
   jQuery.validator.addMethod("phoneno", function(phone_number, element) {
       	    phone_number = phone_number.replace(/\s+/g, "");
       	    return this.optional(element) || phone_number.length >= 8 && phone_number.length <= 10 && 
       	    phone_number.match(/^((\([^0+()][0-9]{2,3}\)[ \-]*)|([^0+()][0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/) ;
       	}, "<br />Please specify a valid phone number");
   jQuery.validator.addMethod("emailCustom", function (value, element) {
   var re = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;
   return re.test(value);
   }, "Please enter a valid email address.");
    $(document).ready(function(){
    jQuery("#frmusers").validate();
   /* jQuery("#frmusers").validate({
               rules:
               {
                   "cphone1":
                   {
                       required:true,
                       phoneno:true
                   }
               }
   });*/
   	toggle(1);
   	//$("input[type='text']:first", document.forms[0]).focus();
   	
   			$("#start_date").datetimepicker( {
   			showTimepicker:true,
   			showSecond: true,
   			timeFormat: 'hh:mm:ss',
   			dateFormat: 'yy-mm-dd',
   			stepHour: 1,
   			stepMinute: 1,
   			minDateTime : new Date(),
   			stepSecond: 1,
   			onClose: function( selectedDate ) {
   				//alert(selectedDate);
   				//$( "#expire_date" ).datepicker( "option", "minDateTime", selectedDate );
   			}
   			} );
   
   			$("#expire_date").datetimepicker( {
   			showTimepicker:true,
   			showSecond: true,
   			timeFormat: 'hh:mm:ss',
   			dateFormat: 'yy-mm-dd',
   			stepHour: 1,
   			stepMinute: 1,
   			minDateTime : new Date(), 
   			stepSecond: 1,
   			onClose: function( selectedDate ) {
   				//$( "#start_date" ).datepicker( "option", "minDateTime", selectedDate );
   			}			
   			} );	
   	//to show all type character in uppercase only 	
   	$("#promo_code").bind('keyup', function (e) {
   		if (e.which >= 97 && e.which <= 122) {
   			var newKey = e.which - 32;
   			// I have tried setting those
   			e.keyCode = newKey;
   			e.charCode = newKey;
   		}
   		this.value = this.value.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '');
   		$("#promo_code").val(($("#promo_code").val()).toUpperCase());
   	});
   	
   });
   $( function() {
    $('#promo_discount').keyup(function(){
      if($(this).val().indexOf('.')!=-1){         
          if($(this).val().split(".")[1].length > 3){                
              if( isNaN( parseFloat( this.value ) ) ) return;
              this.value = parseFloat(this.value).toFixed(2);
          }  
       }            
       return this; //for chaining
    });
    
    
    //validation when there is no passengers
    $.validator.addMethod("promo_send_user", function(value, element) {
   	 var toUser = $('#to_user').val();
   	 if(toUser == '') {
   		 return false;
   	 } else {
   		 return true;
   	 }
   },"There is no user to send promocode");
    
    /*$("#send_promocode").click(function(){
   	 var flag;
   	 var company_id;
   	 
   	<?php if($company_id == 0) { ?>
   		company_id = $("#company").val();
   	<?php } else { ?>
   		company_id = '<?php echo $company_id; ?>';
   	<?php } ?>
   	  $.ajax({
   			url:"<?php echo URL_BASE;?>manageusers/getpassengerscount?company_id="+company_id,
   			type:"get",
   			success:function(data){
   				if(data == 0) {
   					flag = false;
   				} else {
   					flag = true;
   				}
   			},
   			error:function(data)
   			{
   				alert('error');
   			}
   		});	
   		return flag;
    }); */
    
   });
   
   function checkpromocode(promocode) {
   	if(promocode == '') 
   		promocode = $("#promo_code").val();
   	var company_id;
   	<?php if($company_id == 0) { ?>
   		company_id = $("#company").val();
   	<?php } else { ?>
   		company_id = '<?php echo $company_id; ?>';
   	<?php } ?>
     if(trim(promocode).length!=0) 
     loadurl("<?php echo URL_BASE;?>manageusers/checkpromocode_corporate?promo="+promocode+"&company_id="+company_id,"unameavilable");
   }
</script>
<script type="text/javascript">

   function selectToggle(toggle, form) {
   	var myForm = document.forms[form];
   	for( var i=0; i < myForm.length; i++ ) { 
   	    if(toggle) {
   	        myForm.elements[i].checked = "checked";
   	    } 
   	    else
   	    { myForm.elements[i].checked = ""; }
   	}
   }

   $(function(){
      $('#add_moreimage').click(function(){  
   		var newRow = parseInt($('#user_cnt').val())+parseInt(1); 
   		$("#sub_add").append('<tr id="row_'+newRow+'"><td class="passes_in"><div class="passen_promo"><input type="text" style="margin-bottom:5px;" name="cphone'+newRow+'" id="cphone'+newRow+'"  class="required phoneno" title="Enter phone number" placeholder="Phone number"><input type="text" style="margin-bottom:5px;" name="cemail'+newRow+'" id="cemail'+newRow+'"  class="required emailCustom" title="Enter email" placeholder="Email"><div class="forms_anch"><a href="javascript:;" class="btns2" onClick="return removetr_contact('+newRow+');">Delete</a></div><br><span id="error'+newRow+'" style="display:none;color:red;font-size:11px;">*Phone number and email are required</span></div></td></tr>');
   		$('#user_cnt').val(newRow);
   		return false;
      });
   });  
   
   function removetr_contact(rowid) {
      var newRowCnt = parseInt($('#user_cnt').val());
      var r1 = "row_"+newRowCnt;
      $("#sub_add tr").each(function () {    
   	   if(r1==$(this).attr('id')) {
            $(this).remove();
         }   
      });
      $('#user_cnt').val(newRowCnt-1);
      return false;
   }
</script>