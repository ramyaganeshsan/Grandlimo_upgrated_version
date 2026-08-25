<?php defined('SYSPATH') OR die("No direct access allowed."); ?>

<button type="button" class="export_me_menu greyishB">Export</button>

<?php  if($export_table_count > 200){ $row_create= round(($export_table_count / 200)+0.4); }else{$row_create=1;}?>
<?php  if($export_table_count > 20000){ $row_create_2= round(($export_table_count / 20000)+0.4); }else{$row_create_2=1;}?>
<div class="export_me_menu_div"> <a class="export_me_menu_div_close"></a>
    <ul>
        <li>
            <label>Type</label>
            <b>:</b>
            <div class="input_box">
                <select class='records_from_select1'>
                    <option value="1">CSV</option>                
                </select>
            </div>
        </li>
       
        <li>
            <label>&nbsp;</label>
            <b>&nbsp;</b>
            <div class="input_box">
                <button type="button" class="export_me_menu_download">DOWNLOAD</button>
            </div>
        </li>
    </ul>


</div>
<script type="text/javascript">
	$(document).ready(function(){
		$( ".export_me_menu" ).live( "click", function() {
			$('.export_me_menu').hide();
			$('.export_me_menu_div').show();
		});
		$( ".export_me_menu_div_close" ).live( "click", function() {
			$('.export_me_menu').show();
			$('.export_me_menu_div').hide();
		});
		
		$( ".export_me_menu_download" ).live( "click", function() {

			if($('.records_type1').is(':checked')) { 
				var send=$('.records_from_select1').val()+'-2';
			}else{
				var send=$('.records_from_select2').val()+'-1';
			}
			$.ajax({
    			url:"<?php echo URL_BASE;?>manage/set_ajax_session?set=shift",
    			success:function(data){
    			$('.export_me_menu').show(); $('.export_me_menu_div').hide();
    				<?php if(isset($_GET['search_user'])) {?>
    				location.reload();
    				<?php }else{?>
    				$('form').submit();
    				<?php }?>
    			},
    			error:function(data)
    			{
    			   alert('Retry again');
    			}
    		});	
			
		});
     });
</script>
