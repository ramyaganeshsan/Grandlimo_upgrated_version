<script type="text/javascript">
var formSession = 0; 
</script>
<?php  
   $minutes_interval = 60;
   $hours = 24;
   $minutes = 60;
   $max_custom_time_interval_limit = 5;
   $loop_count = $hours*($minutes/$minutes_interval);
   //$start = date('h:i A');
   $dateTime = "00:00:00";
   $start = date('h:i A', strtotime($dateTime));
   //print "<pre>"; print_r($timearray); //exit;
?>

<?php foreach($surge_price_model_details as $key => $value) { ?>		  
			 	<div class="panel-body">
				   <div class="surg_pan_body_inner">
					  <div class="surg_model_size">
						 <?php foreach($value['surge_pricing_fare'] as $k => $v) { ?> 
						 <?php $checked = ''; $checked = ($v['default'] == 1) ? 'checked="checked"' : ''; ?>	
						 <label class="surg_radio"><?php echo $v['fare']; ?> X
						 <input type="radio" <?php echo $checked; ?> class="input_surge_pricing_fare" name="surge_pricing_fare[<?php echo $value['_id']; ?>]" value="<?php echo $v['fare']; ?>" />
						 <span class="checkmark_radio"></span>
						 </label>											  											  
						 <?php } ?>
						
					  </div>
					  <div class="surg_model_time_right">
						 <div class="surg_model_time">
							<?php foreach($value['surge_pricing_manual_interval'] as $kk => $vv) { ?> 
							<?php $from = $to = ""; ?>
							<?php 
							   $from = $vv['from']; 
							   $to = $vv['to']; ?>
							<?php 	
								if(!empty($value['surge_pricing_custom_interval'])) {
									$checked = '';
								} else {									
									if($vv['default'] == 1) {
										$checked = 'checked';
									} else {
										$checked = '';
									}		
								}								
							?>
							<label class="surg_check"><?php echo Commonfunction::convert_seconds_to_hours($from); ?> to <?php echo Commonfunction::convert_seconds_to_hours($to); ?>
							<input type="checkbox" <?php //echo $disabled; ?> <?php echo $checked; ?> name="surge_pricing_manual_interval[<?php echo $value['_id']; ?>][<?php echo $kk; ?>]" class="surge_pricing_manual_interval" value="<?php echo $from.'-'.$to; ?>"/>
							<span class="checkmark_check"></span>
							</label>											 											 
							<?php } ?>
						 </div>
						 <div class="add_timeout">
							<div class="left_datepick">
							   <div class="left_datepick_inner">
								  <div class="input-group date" id="datetimepicker1">
									 <span class="input-group-addon">
									 <span class="glyphicon glyphicon-calendar"></span>
									 </span>
									 <input class="form-control"  data-format="yyyy-mm-dd hh:mm" type="text" readonly name="surg_date" id="surg_date" autocomplete="off" placeholder="Surge Time" value="<?php echo date("d/m/Y"); ?>"></input>
								  </div>
							   </div>
							</div>
							<a href="#" class="add_more_time" data-id="<?php echo $value['_id']; ?>" title="Add"></a>
						 </div>
						 <div class="more_timesec add_time_div_<?php echo $value['_id']; ?>" style="display:none;">
							<select name="from_time" id="<?php echo "from_time".$value['_id']; ?>" class="custom_interval">
							   <?php for($i=0; $i<$loop_count; $i++) { ?> 
							   <?php $end = strtotime("+$minutes_interval minutes", strtotime($start)); $added_time = date('h:i A', $end);?>
							   <option value="<?php echo  date('h:i:A', strtotime($added_time));?>"><?php echo  $added_time;?></option>
							   <?php $start = $added_time; ?>
							   <?php } ?>												
							</select>
							<select name="to_time" id="<?php echo "to_time".$value['_id']; ?>" class="custom_interval">
							   <?php for($i=0; $i<$loop_count; $i++) { ?> 
							   <?php $end = strtotime("+$minutes_interval minutes", strtotime($start)); $added_time = date('h:i A', $end);?>
							   <option value="<?php echo  date('h:i:A', strtotime($added_time));?>"><?php echo  $added_time;?></option>
							   <?php $start = $added_time; ?>
							   <?php } ?>
							</select>
							<input type="submit" class="time_ok_btn ok" data-id="<?php echo $value['_id']; ?>" data-model-id="<?php echo $value['_id']; ?>" value="OK">
							<p style="color: red;" id="<?php echo "error".$value['_id']; ?>"></p>
						 </div>
						 <div class='<?php echo "selected_model_time".$value['_id']; ?>' id='<?php echo "selected_model_time".$value['_id']; ?>'>
							<?php foreach($value['surge_pricing_custom_interval'] as $kkk => $vvv) { ?> 
							<?php $from = $to = ""; ?>
							<?php $from = $vvv['from']; $to = $vvv['to']; ?>
							<?php $checked = ($vvv['default'] == 1) ? 'checked' : ''; ?>	
							<div class="selected_model_time_lis_out">
							   <div class="selected_model_time_list">
								  <label class="surg_check"><?php echo Commonfunction::convert_seconds_to_hours($from); ?> to <?php echo Commonfunction::convert_seconds_to_hours($to); ?>
								  <input type="checkbox" <?php echo $checked; ?> class="surge_pricing_custom_interval" name="surge_pricing_custom_interval[<?php echo $value['_id']; ?>][<?php echo $kkk; ?>]" value="<?php echo $from.'-'.$to; ?>" />
								  <span class="checkmark_check"></span>
								  <input type="hidden" name="surge_pricing_manual_interval_backup[]" value="<?php echo $value['_id'].'-'.$from.'-'.$to; ?>">
								  </label>
							   </div>
							   <a href="#" class="remove_more_time" data-model-id="<?php echo $value['_id']; ?>" data-id="<?php echo $kkk; ?>" title="Remove"></a>
							</div>
							<?php } ?>											 
						 </div>
					  </div>

					  <div id="<?php echo "spinner".$value['_id']; ?>" class="static_loading"></div>
				   </div>


				</div>

				<div class="<?php echo "silde".$value['_id']; ?> style" id="<?php echo "slide".$value['_id']; ?>" style="display:none;"></div>

				<button type="submit" name="save_model" data-id="<?php echo $value['_id']; ?>" id='<?php echo "submit".$value['_id'] ?>' class="save_changes_button save_surge_price" value="<?php echo $value['_id']; ?>">save changes</button>			   
<?php } ?>

<script type="text/javascript">
   $(document).ready(function(){
	   
              
    $(".save_surge_price").on("click", function (event) {
		console.log('Save triggered');
		 formSession = 0;  
		 console.log('formSession',formSession);	
		 var formData = $('#surge_price_form').serializeArray();
		 var model_id = $(this).attr('data-id');
	   
		 formData.push({name:'model_id',value:model_id});
		 var time_intervals = $("input[name='surge_pricing_manual_interval_backup[]']").map(function(){return $(this).val();}).get();

		 formData.push({name:'time_interval',value:time_intervals});

		 
		 $.ajax({
		 url : "/taxidispatchnode/surge_price", 
		 type : "POST",
		 data : formData,
		 beforeSend : function(data) {
			$("#submit"+model_id).attr("disabled", true);
			$("#submit"+model_id).html('Loading...');
			$("#spinner"+model_id).addClass("active_loading");
		 },
		 success : function(data) {
			if(data){
			  $("#slide"+model_id).html("Successfully Updated").removeClass('failure').addClass("success").slideDown();
			} else {
			  $("#slide"+model_id).html("Error To Update Your Details").removeClass('success').addClass("failure").slideDown();
			}
			$("#submit"+model_id).attr("disabled", false);
			$("#submit"+model_id).html('SAVE CHANGES');
			$("#spinner"+model_id).removeClass("active_loading");
			setTimeout(function(){ $("#slide"+model_id).html('').slideUp(); }, 3000);
			}
		 });    
    });
    
    $(".input_surge_pricing_fare").on("click", function (event) {
		formSession = 1;
	});
	
	$(".surge_pricing_manual_interval").on("click", function (event) {
		formSession = 1;
	});
	
	$(".surge_pricing_custom_interval").on("click", function (event) {
		formSession = 1;
	});
	
    $(".add_more_time").on("click", function (event) {
	  formSession = 1;	
	  console.log('formSession',formSession);
      var data_id = $(this).attr('data-id');

      var x = document.getElementById("selected_model_time"+data_id).childElementCount;
      let max_limit = '<?php echo $max_custom_time_interval_limit; ?>';
      if(x < max_limit){
        $(".add_time_div_"+data_id).show();
      }
    });
     
    $(".remove_more_time").on("click", function (event) {
	  formSession = 1;	
	  var data_model = $(this).attr('data-model-id');
	  var count = $("#selected_model_time"+data_model).children('.selected_model_time_lis_out').length;
	  console.log('formSession',formSession);
	  console.log('data_model',data_model);
	  console.log('data_model count',count);
      event.preventDefault();
      let data = confirm('<?php echo __('delete_message'); ?>');
      if(data){
        $(this).parent('.selected_model_time_lis_out').remove();
      }
      if(count == 1) {
		  $('.surge_details'+data_model+' .surge_pricing_manual_interval').each(function(key){
                $(this).attr("checked",true);
          });
	  }
    });
   });
   $(document).on("click", function () {
       $(".surprice_added_dropdown").hide();
       
   });
   
    /*surge price dropdown end*/    
</script>

<script>      
   $( ".ok" ).click(function(e) {
	   formSession = 1;
	   console.log('formSession',formSession);
		var model_id = $(this).attr('data-model-id');
		var time_intervals = $("input[name='surge_pricing_manual_interval_backup[]']").map(function(){return $(this).val();}).get();

  		let time_interval = new Array();
  			for(let items of time_intervals){
  				let temp = items.split("-");
  				if(temp[0] == model_id){
  			   	let item = new Array();
  			   	item[0] = temp[1];
  			   	item[1] = temp[2];
  			   	time_interval.push(item);
  			}
  		}

	   	let from_time = convertSecondstoTime(convertHoursToTime($("#from_time"+model_id).val()));
	   	let to_time = convertSecondstoTime(convertHoursToTime($("#to_time"+model_id).val()));

      // let on = $('#togBtn').val();
      // alert(on);

      let from_str = from_time.split(":");
      let to_str = to_time.split(":");
      if(parseInt(from_str[0]) > 12){
        from_str[0] = from_str[0] - 12;
        from_str[2] = "PM";
      } else {
          if(parseInt(from_str[0]) == 12){
            from_str[2] = "PM";
          } else {
            from_str[2] = "AM";
          }
      }
      from_str = from_str.join(":");
      if(parseInt(to_str[0]) > 12){
        to_str[0] = to_str[0] - 12;
        to_str[2] = "PM";
      } else {
          if(parseInt(to_str[0]) == 12){
            to_str[2] = "PM";
          } else {
            to_str[2] = "AM";
          }
      }
      to_str = to_str.join(":");

	   	let from_in_sec = convertHoursToTime($("#from_time"+model_id).val());
	   	let to_in_sec = convertHoursToTime($("#to_time"+model_id).val());

      var x = document.getElementById("selected_model_time"+model_id).childElementCount;

      let max_limit = '<?php echo $max_custom_time_interval_limit ?>';

	   	let element = '<div class="selected_model_time_lis_out"><div class="selected_model_time_list"><label class="surg_check">'+from_str+' to '+to_str +'<input type="checkbox" checked class="surge_pricing_custom_interval" name="surge_pricing_custom_interval['+ model_id +']['+x+']" value="'+ from_in_sec +"-"+ to_in_sec +'" /><span class="checkmark_check"></span><input type="hidden" name="surge_pricing_manual_interval_backup[]" value="'+ model_id +"-"+from_in_sec+"-"+ to_in_sec +'"></label></div><a href="#" class="remove_more_time" data-model-id="'+model_id+'" data-id="'+x+'" title="Remove"></a></div>';

	   	let id = "slide"+model_id;

	   	$("#"+id).slideUp().html("");
      var wrapper = $('.selected_model_time'+model_id);
      let bool = true;

	   	if(from_in_sec != to_in_sec && to_in_sec > from_in_sec){
	   		if(time_interval.length > 0){
			   	for(let i = 0; i < time_interval.length; i++){
			   		let start = convertSecondstoTime(time_interval[i][0]);
			   		let end = convertSecondstoTime(time_interval[i][1]);

			   		if(start==from_time&&end==to_time||start==from_time||end==to_time||start==to_time||end==from_time || from_time < start && to_time > end || from_time < start && to_time > start && to_time < end || from_time > start && to_time < end && from_time < start && to_time > end || from_time > start && from_time < end){
			   				$("#"+id).html("<?php echo __('time_interval_collide') ?>").removeClass('success').addClass("failure").slideDown();
                bool = false;
			   		}
			   	}
          if(bool){
            $(wrapper).append(element);
            $(".add_time_div_"+model_id).hide();
            $('.surge_details'+model_id+' .surge_pricing_manual_interval').each(function(key){
                $(this).removeAttr("checked");
            });
          }
	   		} else {
          $(wrapper).append(element);
	   			$(".add_time_div_"+model_id).hide();
          $('.surge_details'+model_id+' .surge_pricing_manual_interval').each(function(key){
                $(this).removeAttr("checked");
            });
          $('.tick'+model_id+' .surge_pricing_manual_interval').removeAttr('checked');
	   		}
        $(".remove_more_time").on("click", function (event) {
          event.preventDefault();
          let data = confirm('<?php echo __('delete_message'); ?>');
          if(data){
            $(this).parent('.selected_model_time_lis_out').remove();
          }
        });
	   	} else {
	   		if(from_time == to_time) $("#"+id).html('<?php echo __('two_time_limit_same') ?>').removeClass('success').addClass("failure").slideDown();
	   		else $("#"+id).html("<?php echo __('time_interval_greater') ?>").removeClass('success').addClass("failure").slideDown();
	   	}
      e.preventDefault();
   });
   
   function convertSecondstoTime(given_seconds) { 
        dateObj = new Date(given_seconds * 1000); 
        hours = dateObj.getUTCHours(); 
        minutes = dateObj.getUTCMinutes(); 
        timeString = hours.toString().padStart(2, '0') 
            + ':' + minutes.toString().padStart(2, '0'); 
        return timeString;
   	} 

   	function convertHoursToTime(time){
  		var a = time.split(':');
  		if(a[2] == "PM" && time != "12:00:PM"){
  			a[0] = parseInt(a[0])+12;
  		} else if(time == "12:00:AM"){
  			a[0] = "00";
  			a[1] = "00";
  		}
  		var seconds = (+a[0]) * 60 * 60 + (+a[1]) * 60; 
  		return seconds;
   	}

</script>
<style>
   .custom_interval {
   width: 38%;
   background: #f2f2f2;
   border: none;
   padding: 7px 0px 7px 0px;
   border-radius: 3px;
   text-align: center;
   cursor: pointer;
   margin-right: 4px;
   font-size: 13px;
   }
   .custom_interval:hover{
   background: #f2f2f2;
   color: #111;	
   }
   /*.save_changes_button {
   float: left;
   width: 100%;
   background: #1fbcb6;
   border: none;
   padding: 5px;
   text-align: center;
   text-transform: uppercase;
   color: #fff;
   }*/
   .surge_price_on_off {
   padding: 4px;
   border: none;
   text-align: center;
   width: 60%;
   float: left;
   background: #ccc;
   cursor: pointer;
   color: #111;
   border-radius: 3px;
   }
   .off_class {
   background : #ccc !important;
   color : #111;
   }
   .on_class {
   background : #1fbcb6 !important;
   color : #fff;
   }
   .style{
      text-align: center;
      padding: 10px;
      background-color: #C1C1C1;
      margin-bottom: 10px;
   }
   .success {
      color: green;
   }
   .failure {
      color: red;
   }
</style>
