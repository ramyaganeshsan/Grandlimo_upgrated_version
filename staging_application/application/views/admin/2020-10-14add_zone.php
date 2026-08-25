<?php defined('SYSPATH') OR die("No direct access allowed."); 

$fare = 0;
$source_name = $source_lat = $source_lng = '';
$destination_name = $destination_lat = $destination_lng = '';
$source_polygon = $destination_polygon = '';
?>

<div class="con_out">
  <div class="navbar" style="margin:0;min-height: 0px;">
  
  </div>
  <div class="container_content fl clr">
      <div class="cont_container mt15 mt10">
         <div class="content_middle">   
            <form name="trip_zone_form" id="trip_zone_form" class="form" action="" method="post" enctype="multipart/form-data" data-form="server-form">
              <table border="0" cellpadding="5" cellspacing="0" width="100%">            
           

            
            <tr class="zone_details1">
              <td valign="top" width="20%"><label><?php echo __('zone_name'); ?></label><span class="star">*</span></td>  
              <td>
                <div class="new_input_field">
                  <input type="text" title="<?php echo __('zone_name'); ?>" name="zone_name" id="zone_name" value="<?php if(isset($postvalue) && array_key_exists('zone_name',$postvalue)){ echo $postvalue['zone_name']; }?>"  minlength ="2" maxlength="30"/>
                    <?php if(isset($errors) && array_key_exists('zone_name',$errors)){ echo "<span class='error'>".ucfirst($errors['zone_name'])."</span>";}?>

                  <span class="error" id="err_zone_name"></span>
                </div>
              </td>   
            </tr>  

            <tr>
                <td valign="top" width="20%"><label><?php echo __('location_search'); ?></label></td>
                <td>
                  <div class="new_input_field new_input_field_source_location" >
                      <input id="pac-input" name="source_location" id="source_location" class="controls" type="text" placeholder="Search Box">
                      <input type="hidden" name="source_lat" id="source_lat">
                      <input type="hidden" name="source_lng" id="source_lng">
                      <input type="hidden" name="zone_color_code" id="zone_color_code" value="#33E9FF">
                </td>
            </tr>
            <tr>
                <td valign="top" width="20%"><label><?php echo __('is_airport'); ?></label></td>
                <td>
                  <div class="new_input_field new_input_field_source_location" >
                      <input id="is_airport" name="is_airport" class="controls" type="checkbox" />                      
                </td>
            </tr>
            <tr style="padding-bottom: 20px;">

                <td colspan="2">                  
                  <input type="hidden" name="source_polygon" id="source_polygon">
                  <input type="hidden" name="source_polygon_drawn" id="source_polygon_drawn">
                  <div id="floating-panel">
                  <input class="button blackB1" name= "delete-button" id="remove_source_polygon" type=button value="Remove">
                </div>
                      <div id="map_canvas" style="width: 100%; height: 500px !important; position: relative; overflow: hidden;"></div> 
                      <?php if(isset($errors) && array_key_exists('source_polygon',$errors)){ echo "<span class='error'>".__('geofence_must_not_be_empty')."</span>";}?>
                  </div>

                </td>
            </tr>
                       
                      <tr>
              <td>&nbsp;</td>
                          <td colspan="">
                <input type="text" name="submit_zone" value="form" style="display:none;"/>
                             <div class="button blackB">     <input type="button" value="<?php echo __('button_back'); ?>" onclick="window.history.go(-1)" /></div>
                            <div class="button dredB">   <input type="reset" value="<?php echo __('button_reset'); ?>" title="<?php echo __('button_reset'); ?>" /></div>
                            <div class="button greenB">  <input type="submit" value="<?php echo __('submit' );?>" name="submit_zone" title="<?php echo __('submit' );?>" /></div>
                          </td>
                      </tr> 
                  </table>
            </form>
          </div>
          <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt"></div></div>
      </div>
  </div>  
</div>  
<script type="text/javascript">
var selectedShape;
function initAutocomplete() {
      //~ var map = new google.maps.Map(document.getElementById('map_canvas'), {
            //~ center: {lat: 23.8859, lng: 45.0792},
            //~ zoom: 13,
            //~ mapTypeId: 'roadmap'
      //~ });
      var search_location = document.getElementById('pac-input');
      autocomplete_search = new google.maps.places.Autocomplete(search_location);
      manual_polygon();
      $(document.body).on('change', '#pac-input' ,function(){ 
          google.maps.event.addListener(autocomplete_search, "place_changed", function (){
            var a = autocomplete_search.getPlace();
            $('#source_lat').val(a.geometry.location.lat());      
            $('#source_lng').val(a.geometry.location.lng());
            var address = a.formatted_address;
				manual_polygon();
            });
      });
      google.maps.event.addDomListener(document.getElementById('remove_source_polygon'), 'click', function() {  
        deleteSelectedShape('source');
      });
}

function manual_polygon()
{
  var source_lat = $("#source_lat").val();
  var source_lng = $("#source_lng").val();
  
  if(source_lat == "" && source_lng == "")
  {
    var map = new google.maps.Map(document.getElementById('map_canvas'), {
            center: {lat: 29.3761014, lng: 47.9643142},
            zoom: 13,
            mapTypeId: 'roadmap'
        });
  }
  else
  {
    var source_Latlng =  new google.maps.LatLng(source_lat, source_lng);
    var map = new google.maps.Map(document.getElementById('map_canvas'), {
            center: source_Latlng,
            zoom: 15,
            mapTypeId: 'roadmap'
        });
  }
  
  drawingManager = new google.maps.drawing.DrawingManager({
                  drawingMode: google.maps.drawing.OverlayType.POLYGON,
                  drawingControlOptions:{
                    drawingModes: [
                      google.maps.drawing.OverlayType.POLYGON
                    ]
                  },
                  polygonOptions: polyOptions,
                  map: map
              });
  var polyOptions = {
            strokeWeight: 0,
            fillOpacity: 0.45,
            editable: true,
            draggable:true,
            fillColor:'f6f0a6'
          };

  google.maps.event.addListener(drawingManager, 'overlaycomplete', function(e) {
      overlaycompleteFn(e);
  });
}


function overlaycompleteFn(e){
        var vertices = e.overlay.getPath().getArray();
        console.log('ver',vertices);
        $('#source_polygon_drawn').val(vertices);
        drawingManager.setDrawingMode(null);
        drawingManager.setOptions({
          drawingControl: false
        });
        var newShape = e.overlay;
        newShape.type = e.type;
        console.log("newShape",newShape)
        setSelection(newShape);       
}

function setSelection(shape) {
      clearSelection();
      selectedShape = shape;
      shape.setEditable(true);
}

function clearSelection() {
      if (selectedShape) {
        selectedShape.setEditable(false);
        selectedShape = null;
      }
}

function deleteSelectedShape() {
      if (selectedShape) {
        selectedShape.setMap(null);
        drawingManager.setOptions({
          drawingControl: true
        });
      }
      console.log("drawingManager",drawingManager)
      drawingManager.setDrawingMode(google.maps.drawing.OverlayType.POLYGON);
      $('#source_polygon_drawn').val("");
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo GOOGLE_MAP_API_KEY;?>&libraries=drawing,places&callback=initAutocomplete" async defer>
</script>
