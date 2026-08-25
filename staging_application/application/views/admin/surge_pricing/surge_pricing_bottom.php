<script type="text/javascript">
var formSession = 0; 
</script>
<!--new popup-->
<!-- Modal -->
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
<div class="modal fade surge_price_modal" id="surge_price_pop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="true" data-backdrop="static">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close close_popup_btn"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel"><?php echo __('surge_price'); ?></h4>
         </div>
         <div class="modal-body">
            <div class="panel-group surg_price_list_outer" id="accordion1">
               <form name="surge_price_form" id="surge_price_form">
                  <?php foreach($surge_price_model_details as $key => $value) { ?>
                  <div class="panel surg_price_list">
                     <?php $tick_class = ($value['surge_pricing_status'] == 'A') ? 'with_tick' : ''; ?> 
                     <div data-id="<?php echo $value['_id']; ?>" class="surg_price_list_top <?php echo $tick_class; ?> <?php echo "tick".$value['_id']; ?>">
                        <a class="accordion-toggle1">
                           <div class="surg_car_model"><img src="<?php echo URL_BASE; ?>public/uploads/model_image/<?php echo strtolower($value['model_name']); ?>.png">
                           </div>
                           <div class="surg_car_type rotate_normal">
                              <span><?php echo strtoupper($value['model_name']); ?></span>
                           </div>
                        </a>
                     </div>
                     <div class="accordion-content1 <?php echo "surge_details".$value['_id'] ?>">
                        
                     </div>
                  
                  </div>
                  <?php } ?>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
		$(".style").slideUp();
		var show_btn=$('.surge_price_popup');
		show_btn.click(function(){
			$("#surge_price_pop").modal('show');
		})
      
		console.log('formSession',formSession);		   
		//~ $('.surprice_added_plus').click(function(event){
		   //~ event.stopPropagation();
			//~ $(".surprice_added_dropdown").toggle();
		//~ });
		//~ $(".surprice_added_dropdown").on("click", function (event) {
		   //~ event.stopPropagation();
		//~ });			   			
		$(".close_popup_btn").on("click", function (event) {
			console.log('close formSession-',formSession);
			if(formSession == 1) {
				let data = confirm('<?php echo __('aware_of_the_form_session'); ?>');
				if(data){
					formSession = 1; 
					console.log('form showing formSession-',formSession);
				} else {
					formSession = 0;
					$('.surge_price_modal').modal('hide');
				}
				
			} else {
				$('.surge_price_modal').modal('hide');
			}
		});
	});
	$(document).on("click", function () {
		   $(".surprice_added_dropdown").hide();		   
	});        
</script>
<!--surge price popup accordation-->
<script>
   $('#accordion1').find('.surg_price_list_top').click(function(){	   
		var model_id = $(this).attr('data-id');
		var formData = {'model_id':model_id};
		
		//Expand or collapse this panel
		$(this).next().slideToggle('fast');

		//changes arrow 
		if( $(this).find('.surg_car_type').hasClass('arrowUp')){
			console.log('Up');
			$(this).find('.surg_car_type').removeClass('arrowUp').addClass('arrowDown');
		} else {
			console.log('Down');
			$.ajax({
				 url : "/taxidispatchnode/get_surge_price_model_item", 
				 type : "POST",
				 data : formData,
				 beforeSend : function(data) {
					$("#submit"+model_id).attr("disabled", true);
					$("#submit"+model_id).html('Loading...');
					$("#spinner"+model_id).addClass("active_loading");
				 },
				 success : function(data) {
					//console.log('data',data);
					$(".surge_details"+model_id).html(data);
					$("#submit"+model_id).attr("disabled", false);
					$("#submit"+model_id).html('SAVE CHANGES');
					setTimeout(function(){ $("#slide"+model_id).html('').slideUp(); }, 3000);
					$("#spinner"+model_id).removeClass("active_loading");
				 }
			});
			$('#accordion1').find('.surg_car_type').removeClass('arrowUp').addClass('arrowDown');
			$(this).find('.surg_car_type').removeClass('arrowDown').addClass('arrowUp');
		}
		//Hide the other panels
		$(".accordion-content1").not($(this).next()).slideUp('fast');         
   });
</script>

