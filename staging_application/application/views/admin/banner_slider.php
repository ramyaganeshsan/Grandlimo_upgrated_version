<?php defined('SYSPATH') OR die("No direct access allowed.");
//$tagcount = count($site_info_settings);

$no_image=URL_BASE.'public/images/no-image.png';
?>

<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery-1.6.3.min.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/validation/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo URL_BASE;?>public/js/datetimepicker/jquery-ui.js"></script>
<style>
        ul.cvf_uploaded_files {list-style-type: none; margin: 20px 0 0 0; padding: 0;}
        ul.cvf_uploaded_files li {background-color: #fff; border: 2px solid #ccc; float: left; margin: 20px 20px 0 0; padding: 6px; width: 150px; height: 150px; line-height: 150px; position: relative;}
        ul.cvf_uploaded_files li img.img-thumb {width: 150px; height: 150px;}
        ul.cvf_uploaded_files .ui-selected {background: red;}
        ul.cvf_uploaded_files .highlight {border: 1px dashed #000; width: 150px; background-color: #ccc; border-radius: 5px;}
        ul.cvf_uploaded_files .delete-btn {width: 24px; border: 0; position: absolute; top: -14px; right: -19px;}
        .bg-success {padding: 7px;}
    </style>
<style ="text/css">
.inputfields .form input[type="text"]
{
width:350px;
}
</style>

<div class="container_content fl clr">
	<div class="cont_container mt15 mt10">
		<div class="content_middle"> 
			<form method="post" enctype="multipart/form-data" class="form" name="managerating_form" id="managerating_form" action="" >
   
				<div class="widget">
					<div class="title"><img src="<?php echo IMGPATH; ?>icons/dark/frames.png" alt="" class="titleIcon" />
						<h6><?php echo $slider_title; ?></h6>
					</div>
					<table border="0" cellpadding="5" cellspacing="0" width="100%">
					<tr>
						<td></td>
					</tr>	
					<tr>
						<td valign="top" width="20%">
							<label><?php echo __('slider_interval_sec'); ?></label><span class="star">*</span>
						</td>  
						<td>
							<div class="new_input_field">
								<input type="text" name="slider_interval" id="slider_interval" title="<?php echo __('slider_interval'); ?>" maxlength="2" value="<?php if(count($site_settings) >0){ echo isset($site_settings) &&!array_key_exists('slider_interval',$postvalue)? trim($site_settings[0]['slider_interval']):$postvalue['slider_interval'];} ?>">
								<span class="error" id="slider_interval_err"><?php echo isset($errors['slider_interval']) ? $errors['slider_interval'] : ''; ?></span>
							</div>
						</td>
					</tr>
					<tr>
					
                		<td valign="top" width="20%">
							<label><?php echo __('select_images_en'); ?></label><span class="star">*</span>
						</td>
						<td>
						<div class = "form-group">
                			<input type = "file" name = "image_en[]" id="image_1" multiple = "multiple" class = "form-control user_picked_files" />
                			<span class="error" id = "err_1"><?php echo isset($errors['image_name_ban_en']) ? $errors['image_name_ban_en'] : ''; ?></span>
                			</div>                                
              				   
                		</td>               
            			<td>
            			<input type = "hidden" class = "form-control cvf_hidden_field" id="hidden_1" value = "" disabled = "disabled" />   </td>
            		</tr>
            		<tr>
						<td></td>
						<td>
							<ul class = "cvf_uploaded_files" id="upload_1">
							<?php 
							if(!isset($errors['image_name_ban_en']) && !empty($site_settings[0]['image_en']))
								{
									$i = 0; 
									foreach ($site_settings[0]['image_en'] as $key => $value) { ?>
										<li class='image_link' file = "<?php echo $value ;?>" item = "<?php echo $i++ ;?>" >
											<input type="hidden" name="image_name_ban_en[]" value="<?php echo $value ;?>" id = 'img_1'>
		                                    <img class = 'img-thumb' src = "<?php echo URL_BASE.HOME_SLIDER_IMGPATH.'thumb_'.$value ;?>"/>
		                                    <a href = '#' class = 'cvf_delete_image' title = 'Cancel'><img class = 'delete-btn' src = '/public/admin/images/close.png' /></a>
		                                </li>
							<?php }}
								?>
							</ul>
						</td>
					</tr>
					<tr>
					
                		<td valign="top" width="20%">
							<label><?php echo __('select_images_ar'); ?></label><span class="star">*</span>
						</td>
						<td>
						<div class = "form-group">
                			<input type = "file" name = "image_ar[]" id="image_2" multiple = "multiple" class = "form-control user_picked_files" />
                			<span class="error" id = "err_2"><?php echo isset($errors['image_name_ban_ar']) ? $errors['image_name_ban_ar'] : ''; ?></span>
                			</div>                                
              				   
                		</td>               
            			<td>
            			<input type = "hidden" class = "form-control cvf_hidden_field" id="hidden_2" value = "" disabled = "disabled" />   </td>
            		</tr>
            		<tr>
						<td></td>
						<td>
							<ul class = "cvf_uploaded_files" id="upload_2">
								<?php 
								if(!isset($errors['image_name_ban_ar']) && !empty($site_settings[0]['image_ar']))
								{
									$i = 0; 
									foreach ($site_settings[0]['image_ar'] as $key => $value) {?>
									<li class='image_link' file = "<?php echo $value ;?>" item = "<?php echo $i++ ;?>">
									<input type="hidden" name="image_name_ban_ar[]" value="<?php echo $value ;?>" id = 'img_2'>
	                                    <img class = 'img-thumb' src = "<?php echo URL_BASE.HOME_SLIDER_IMGPATH.'thumb_'.$value ;?>"/>
	                                    <a href = '#' class = 'cvf_delete_image' title = 'Cancel'><img class = 'delete-btn' src = '/public/admin/images/close.png' /></a>
	                                </li>
							<?php }}
								?>
							</ul>
						</td>
					</tr>
					<tr>
					
                		<td valign="top" width="20%">
							<label><?php echo __('select_mob_images_en'); ?></label><span class="star">*</span>
						</td>
						<td>
						<div class = "form-group">
                			<input type = "file" name = "mob_image_en[]" id="image_3" multiple = "multiple" class = "form-control user_picked_files" />
                			<span class="error" id = "err_3"><?php echo isset($errors['image_name_en']) ? $errors['image_name_en'] : ''; ?></span>
                			</div>                                
              				   
                		</td>               
            			<td>
            			<input type = "hidden" class = "form-control cvf_hidden_field" id="hidden_3" value = "" disabled = "disabled" />   </td>
            		</tr>
            		<tr>
						<td></td>
						<td>
							<ul class = "cvf_uploaded_files" id="upload_3">
								<?php 
								if(!isset($errors['image_name_en']) && !empty($site_settings[0]['mob_image_en']))
								{
								$i = 0; 
								foreach ($site_settings[0]['mob_image_en'] as $key => $value) {?>
								<li class='image_link' file = "<?php echo $value ;?>" item = "<?php echo $i++ ;?>">
								<input type="hidden" name="image_name_en[]" value="<?php echo $value ;?>" id = 'img_3'>
                                    <img class = 'img-thumb' src = "<?php echo URL_BASE.MOBILE_SLIDER_IMGPATH.'thumb_'.$value ;?>"/>
                                    <a href = '#' class = 'cvf_delete_image' title = 'Cancel'><img class = 'delete-btn' src = '/public/admin/images/close.png' /></a> 
                                </li>
								<?php }}
								?>
							</ul>
						</td>
					</tr>
					<tr>
					
                		<td valign="top" width="20%">
							<label><?php echo __('select_mob_images_ar'); ?></label><span class="star">*</span>
						</td>
						<td>
						<div class = "form-group">
                			<input type = "file" name = "mob_image_ar[]" id="image_4" multiple = "multiple" class = "form-control user_picked_files" />
                			<span class="error" id = "err_4"><?php echo isset($errors['image_name_ar']) ? $errors['image_name_ar'] : ''; ?></span>
                			</div>                                
              				   
                		</td>               
            			<td>
            			<input type = "hidden" class = "form-control cvf_hidden_field" id="hidden_4" value = "" disabled = "disabled" />   </td>
            		</tr>
            		<tr>
						<td></td>
						<td>
							<ul class = "cvf_uploaded_files" id="upload_4">
								<?php
								if(!isset($errors['image_name_ar']) && !empty($site_settings[0]['mob_image_ar']))
								{
									 $i = 0; foreach ($site_settings[0]['mob_image_ar'] as $key => $value) { ?>
									<li class='image_link' file = "<?php echo $value ;?>" item = "<?php echo $i++ ;?>">
									<input type="hidden" name="image_name_ar[]" value="<?php echo $value ;?>" id = 'img_4'>
	                                    <img class = 'img-thumb' src = "<?php echo URL_BASE.MOBILE_SLIDER_IMGPATH.'thumb_'.$value ;?>"/>
	                                    <a href = '#' class = 'cvf_delete_image' title = 'Cancel'><img class = 'delete-btn' src = '/public/admin/images/close.png' /></a>
	                                </li>
							<?php }}
								?>
							</ul>
						</td>
					</tr>
					<tr>
						<td valign="top" width="20%">
							<label>&nbsp;</label>
						</td> 
						<td style="padding-bottom:15px;">
							<div class="button dredB">   <input type="reset" value="<?php echo __('button_reset'); ?>" title="<?php echo __('button_reset'); ?>" /></div>
							<div class="button greenB">  <input type="submit" value="<?php echo __('submit' );?>" name="submit_modules" title="<?php echo __('submit' );?>" /></div>
						</td>
					</tr>
					<input type="hidden" name="sort_array" id="sort_array">
					</table>
					<div id="inputfields" class="new_input_field"></div>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
        jQuery(document).ready(function() {         
            
            var storedFiles = []; 
            var sort_array = [];     
            //$('.cvf_order').hide();
            
            // Apply sort function  
            function cvf_reload_order() {
				var i = 1;
            	$.each($(".cvf_uploaded_files"), function(){            
			      var order = $(this).sortable('toArray', {attribute: 'item'});
               	  $('#hidden_'+i).val(order);
                	i++;
			    });
            }
            
            function cvf_add_order(id) {
				
                $('#upload_'+id+' li').each(function(n) { console.log(n);
                    $(this).attr('item', n);
                });
                console.log('test');
            }
            
        $('.image_link').attr("href","javascript:void(0);");
        $('.image_link').css("cursor","move");
            $(function() {
                $('.cvf_uploaded_files').sortable({
                    cursor: 'move',
                    placeholder: 'highlight',
                    start: function (event, ui) {
						ui.item.toggleClass('highlight');
                    },
                    stop: function (event, ui) {
						ui.item.toggleClass('highlight');                        
                    },
                    update: function () {
                        //cvf_reload_order();
                    },
                    create:function(){
						var list = this;
                        resize = function(){
                            $(list).css('height','auto');
                            $(list).height($(list).height());
                        };
                        $(list).height($(list).height());
                        $(list).find('img').load(resize).error(resize);
                    }
                });
                $('.cvf_uploaded_files').disableSelection();
            });
                    
            $('body').on('change', '.user_picked_files', function() {
                
                var files = this.files;
                var i = 0;
                  var id = $(this).attr('id');  
                 var num = id.split("_");   
                 var id = num[1];   
                 var name = "";
                 $(".class_"+id).remove();
                 $("#err_"+id).html("");
                 if(id == 1)  name = "image_name_ban_en";  
                 else if(id == 2)  name = "image_name_ban_ar";  
                 else if(id == 3)  name = "image_name_en";  
                 else if(id == 4)  name = "image_name_ar";  
                for (i = 0; i < files.length; i++) {
                    var readImg = new FileReader();
                    var file = files[i];
                    
                    if (file.type.match('image.*')){
                        storedFiles.push(file);
                        readImg.onload = (function(file) {
                            return function(e) {
                                $('#upload_'+id).append(
                                "<li class='image_link class_"+id+"' file = '" + file.name + "'>" +                                 
                                    "<input type='hidden' name='"+name+"[]' value='" + file.name + "'><img class = 'img-thumb' src = '" + e.target.result + "' />" + 
                                    "<a href = '#' class = 'cvf_delete_image' title = 'Cancel'><img class = 'delete-btn' src = '/public/admin/images/close.png' /></a>" + 
                                "</li>"
                                );      
                            };
                        })(file);
                        readImg.readAsDataURL(file);
                        
                    } else {
                       $("#upload_"+id).empty();
                       $("#err_"+id).html("Select only jpeg,png,gif.. Try again");
                    }
                    
                    if(files.length === (i+1)){
                        setTimeout(function(){
                            cvf_add_order(id);
                        }, 1000);
                    }
                }
            });
            
            // Delete Image from Queue
            $('body').on('click','a.cvf_delete_image',function(e){
                e.preventDefault();
                $(this).parent().remove('');        
                
                var file = $(this).parent().attr('file');
                for(var i = 0; i < storedFiles.length; i++) {
                    if(storedFiles[i].name == file) {
                        storedFiles.splice(i, 1);
                        break;
                    }
                }
                
                //cvf_reload_order();
                
            });
                    
            // AJAX Upload
            $('.greenB').on('click' , function(e){var count = 0;
                e.preventDefault();
                cvf_reload_order();
                var sort_array = [];
                var data = new FormData();
                
                var items_array = $('#hidden_1').val();
                var items = items_array.split(',');
                items_array = items.join(":");
                sort_array.push(items_array);
                items_array = $('#hidden_2').val();
                items = items_array.split(',');
                items_array = items.join(":");
                sort_array.push(items_array);
                items_array = $('#hidden_3').val();
                items = items_array.split(',');
                items_array = items.join(":");
                sort_array.push(items_array);
                items_array = $('#hidden_4').val();
                items = items_array.split(',');
                items_array = items.join(":");
                sort_array.push(items_array);
                sort_array = JSON.stringify(sort_array);
                var sort_array = JSON.parse(sort_array);
                console.log(sort_array);
                $("#sort_array").val(sort_array);//return false;

                var arr;
                for (var i = 1; i <= 4; i++) {
                	arr = $("#hidden_"+i).val(); 
                	if (arr == "") { 
					    $("#err_"+i).html('Select image');
					    $("#upload_"+id).empty();
					    count++;//alert(count);
					    
					}
					if( i == 4 && count == 0)
				    {
				    	if($("#slider_interval").val() != "")
				    	{
				    		$("#slider_interval_err").html('');
				    		document.managerating_form.submit();
				    	}
				    	else
				    	{
				    		$("#slider_interval_err").html('Please enter slider interval');
				    	}
				    }
                }

               
            });         

        });
    </script>
