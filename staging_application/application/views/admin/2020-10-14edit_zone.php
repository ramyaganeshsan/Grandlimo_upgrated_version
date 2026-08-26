<?php defined('SYSPATH') OR die("No direct access allowed."); 

$fare = 0;
$source_name = $source_lat = $source_lng = '';
$destination_name = $destination_lat = $destination_lng = '';
$source_polygon = $destination_polygon = '';
$source_polygon = $destination_polygon = '';

$source_polygon_array = isset($zone_detail['loc']['coordinates'][0])?$zone_detail['loc']['coordinates'][0]:[];
$source_polygon_coor = '';

if(!empty($source_polygon_array)){
  foreach ($source_polygon_array as $key => $value) {
    $source_polygon_coor .= $value[1].":".$value[0].",";
  } 
}
if(isset($postvalue) && array_key_exists('source_polygon',$postvalue)){ 
  $source_polygon = $postvalue['source_polygon'];
}

$source_lat = isset($zone_detail['source_latlng']['coordinates'][1])?($zone_detail['source_latlng']['coordinates'][1]):'';
if(isset($postvalue) && array_key_exists('source_lat',$postvalue) && $postvalue['source_lat']!=''){ 
  $source_lat =  ($postvalue['source_lat']); 
}

$source_lng = isset($zone_detail['source_latlng']['coordinates'][1])?($zone_detail['source_latlng']['coordinates'][0]):'';
if(isset($postvalue) && array_key_exists('source_lng',$postvalue) && $postvalue['source_lng']!=''){ 
  $source_lng =  ($postvalue['source_lng']); 
}

$zone_color_code = isset($zone_detail['zone_color_code'])?($zone_detail['zone_color_code']):'';
if(isset($postvalue) && array_key_exists('zone_color_code',$postvalue) && $postvalue['zone_color_code']!=''){ 
  $zone_color_code =  ($postvalue['zone_color_code']); 
}


$is_airport = 0;
if(isset($postvalue) && !empty($postvalue)){
	if(array_key_exists('is_airport',$postvalue)) {
		$is_airport =  1; 	
	} else {
		$is_airport =  0; 
	} 
} else {  
  $is_airport = isset($zone_detail['is_airport'])?($zone_detail['is_airport']):0;
}

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
              <td valign="top" width="20%"><label><?php echo __('zone_name'); ?></label><span class="star">*</span></td>  <?php if(isset($postvalue['zone_name']) && array_key_exists('zone_name',$postvalue))
                      {
                        $zone_name = $postvalue['zone_name'];
                      }
                      else if(isset($zone_detail['zone_name']) && !empty($zone_detail['zone_name']))
                      {
                        $zone_name = $zone_detail['zone_name'];
                      }
                ?>
              <td>
                <div class="new_input_field">
                  <input type="text" title="<?php echo __('zone_label'); ?>" name="zone_name" id="zone_name" value="<?php echo $zone_name; ?>"  minlength ="2" maxlength="30" />
                    <?php if(isset($errors) && array_key_exists('zone_name',$errors)){ echo "<span class='error'>".ucfirst($errors['zone_name'])."</span>";}?>

                  <span class="error" id="err_zone_name"></span>
                </div>
              </td>   
            </tr>  
			<input type="hidden" id="zone_id" name="zone_id" value="<?php echo  $zone_detail['_id']; ?>"/>

            
            <tr>
                <td valign="top" width="20%"><label><?php echo __('location_search'); ?></label></td>
                <?php if(isset($postvalue['source_location']) && array_key_exists('source_location',$postvalue))
                      {
                        $source_location = $postvalue['source_location'];
                      }
                      else if(isset($zone_detail['source_location']) && !empty($zone_detail['source_location']))
                      {
                        $source_location = $zone_detail['source_location'];
                      }
                      else
                      {
                        $source_location = '';
                      }
                ?> 
                <td>
                  <div class="new_input_field new_input_field_source_location" >
                      <input id="pac-input" name="source_location" id="source_location" class="controls" type="text" placeholder="Search Box" value="<?php echo $source_location; ?>">
                      <input type="hidden" name="source_lat" id="source_lat" value="<?php echo isset($source_lat) ? $source_lat : ''; ?>">
                      <input type="hidden" name="source_lng" id="source_lng" value="<?php echo isset($source_lng) ? $source_lng : ''; ?>"><br/>
                <?php if(isset($errors) && array_key_exists('source_location',$errors)){ echo "<span class='error'>".ucfirst($errors['source_location'])."</span>";}?>    
                </td>
            </tr>
            
            <tr>
                <td valign="top" width="20%"><label><?php echo __('is_airport'); ?></label></td>
                
                <td>
                  <div class="new_input_field new_input_field_source_location" >
                      <input id="is_airport" name="is_airport" class="controls" type="checkbox"  <?php echo ($is_airport == 1) ? "checked='checked'" : ""; ?>/>                         
                </td>
            </tr>
            
            <tr>

                <td colspan="2">
                  
                  <input type="hidden" name="source_polygon" id="source_polygon" value="<?php echo $source_polygon_coor; ?>">
                  <input type="hidden" name="source_polygon1" id="source_polygon1" value="">
                  <input type="hidden" name="source_polygon_drawn" id="source_polygon_drawn" value="">
                  <div id="floating-panel">
                  <input class="button blackB1" name= "delete-button" id="remove_source_polygon" type=button value="Remove">
                </div>
                      <div id="map" style="width: 100%; height: 500px; position: relative; overflow: hidden; background-color: rgb(229, 227, 223);"></div>
                  </div>

                </td>
            </tr>
           <!--  <tr>
              <td  class="empt_cel">&nbsp;</td>
              <td colspan="" class="star">*<?php echo __('required_label'); ?></td>
            </tr> -->                         
                      <tr>
              <td>&nbsp;</td>
                          <td colspan="">
                              <input type="text" name="submit_editzone" value="form" style="display:none;"/>
                              
                              <div class="button blackB">     <input type="button" value="<?php echo __('button_back'); ?>" onclick="window.history.go(-1)" /></div>
                            <div class="button dredB">   <input type="reset" value="<?php echo __('button_reset'); ?>" title="<?php echo __('button_reset'); ?>" /></div>
                            <div class="button greenB">  <input type="submit" value="<?php echo __('submit' );?>" name="submit_editzone" title="<?php echo __('submit' );?>" /></div>
                          </td>
                      </tr> 
                  </table>
            </form>
          </div>
          <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt"></div></div>
      </div>
  </div>  
</div>  
<script type="text/javascript" src="<?php echo URL_BASE;?>public/common/js/spectrum.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE;?>public/common/css/spectrum.css">
<script type="text/javascript">
var selectedShape;
var colors = ['#1E90FF', '#FF1493', '#32CD32', '#FF8C00', '#4B0082'];
var selectedColor;
var colorButtons = {};
var polygonArray = [];
var boundaryPolygon,drawingManager;
var boundarydata = new Array();
var destination_drawingManager;

function clearSelection() {
  if (selectedShape) {
    selectedShape.setEditable(false);
    selectedShape = null;
  }
}

function setSelection(shape) {
  clearSelection();
  selectedShape = shape;
  shape.setEditable(true);
}

function deleteSelectedShape() {
  
  if (selectedShape) {
    selectedShape.setMap(null);
    $("#remove_source_polygon").val("");
  }
  drawingManager.setDrawingMode(google.maps.drawing.OverlayType.POLYGON);
  $('#source_polygon_drawn').val("");
}

function get_polygon_cordinates(polygon,map,markers,flag){
  
  var removeid = "remove_source_polygon";
  var polygonid = "source_polygon";
  var final_polygon_vertices = '';
  //destination
  if(flag==2 || flag=='2'){
    var removeid = "remove_destination_polygon";
    var polygonid = "destination_polygon";
  }
  for (var i = 0; i < polygon.getPath().getLength(); i++) 
    {       
      var text_value = polygon.getPath().getAt(i).toUrlValue(14);
      text_value = text_value.replace(',', ':');

      var latlongs = text_value.split(":");
      var lat = latlongs[0].trim();
      var lng = latlongs[1].trim();
      boundarydata[i] = new google.maps.LatLng(lat,lng);
      final_polygon_vertices += text_value + ",";
     
    }
    $("#"+polygonid).val(final_polygon_vertices);
    draw_polygon(boundarydata,map,markers,removeid);
}


function initAutocomplete() {
  //start of source and destination to set marker
    var markers = [];

    var source_location = $("#source_location").val();
    var source_lat = $("#source_lat").val();
    var source_lng = $("#source_lng").val();
    
     //start drawing polygon
    if(source_lat == "" && source_lng == "")
    {
      var source_polygon = $("#source_polygon").val();
      var exploded_source_poly = source_polygon.split(",");
      var mid_index = Math.round((exploded_source_poly.length)/2);
      var mid_source = exploded_source_poly[mid_index];
      var exploded_mid_source = [];
      var bounds = new google.maps.LatLngBounds();

      for(var i=0; i<exploded_source_poly.length-1;i++)
      { 
        exploded_mid_source[i] = exploded_source_poly[i].split(":");
      }
      var map = new google.maps.Map(document.getElementById('map'), {
              center: source_Latlng,
              zoom: 13,
              mapTypeId: 'roadmap'
          });

      for (i = 0; i < exploded_mid_source.length; i++) {
           var myLatLng = new google.maps.LatLng(exploded_mid_source[i][0], exploded_mid_source[i][1]);
           bounds.extend(myLatLng);
      }
      
      map.fitBounds(bounds);
      var center = bounds.getCenter();
      markers.push(new google.maps.Marker({
            map: map,
            title: source_location,
            position: center
        }));
    }
    else
    {
      var source_Latlng =  new google.maps.LatLng(source_lat, source_lng);
      var map = new google.maps.Map(document.getElementById('map'), {
            center: source_Latlng,
            zoom: 13,
            mapTypeId: 'roadmap'
        });
    } 
     
    if(source_lat !='' && source_lng != ''){
    var source_Latlng = new google.maps.LatLng(source_lat,source_lng);
        //Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              title: source_location,
              position: source_Latlng
            }));

    }
       
    markers.forEach(function(marker) {
      marker.setMap(map);
    });

    //start of polygon set in map

    var polyOptions = {
            strokeWeight: 0,
            fillOpacity: 0.45,
            editable: true,
            draggable:true,
            fillColor:'f6f0a6'
          };
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

     google.maps.event.addListener(drawingManager, 'overlaycomplete', function(e) {
        overlaycompleteFn(e);
     });
    
    //start of source polygon
    if(source_polygon!=''){
      var exploded_source_poly = source_polygon.split(",");
      var source_polygon_coordinate = [];
      for (var i = 0; i <= exploded_source_poly.length-1; i++) {
      if(exploded_source_poly[i] !=''){
        var inner_poly = exploded_source_poly[i].split(":");
            var temp = { 
                lat : parseFloat(inner_poly[0]),
                lng : parseFloat(inner_poly[1])
            }
        source_polygon_coordinate.push(temp);

      }    
      }
  console.log("source_polygon_coordinate",source_polygon_coordinate)

        var sourceTriangle = new google.maps.Polygon({
        paths: source_polygon_coordinate,
        strokeWeight: 0,
            fillOpacity: 0.45,
            editable: true,
            draggable:true,
            fillColor:'<?php echo $zone_color_code; ?>'
      });
      sourceTriangle.setMap(map);
    }
    
    google.maps.event.addListener(drawingManager, 'overlaycomplete', function(e) {
    overlaycompleteFn(e);
  });
    google.maps.event.addListener(drawingManager, 'polygoncomplete', function (polygon) 
    {
      polygoncompleteFn(polygon,map,markers,1);
    });

    google.maps.event.addListener(sourceTriangle.getPath(), 'insert_at', function(){
    console.log("sourceTriangle insert_at")
    get_polygon_cordinates(sourceTriangle,map,markers,1);
  });

  google.maps.event.addListener(sourceTriangle.getPath(), 'remove_at', function(){
     get_polygon_cordinates(sourceTriangle,map,markers,1);
  });

  google.maps.event.addListener(sourceTriangle.getPath(), 'set_at', function(){
      get_polygon_cordinates(sourceTriangle,map,markers,1);
  });
  google.maps.event.addListener(sourceTriangle, 'dragend', function(){
       get_polygon_cordinates(sourceTriangle,map,markers,1);
    });
  
  drawingManager.setDrawingMode(null);
  drawingManager.setOptions({
          drawingControl: false
  });

  google.maps.event.addDomListener(document.getElementById('remove_source_polygon'), 'click', function() {
    if (selectedShape) {
      selectedShape.setMap(null);
      drawingManager.setOptions({
          drawingControl: true
      });
      drawingManager.setDrawingMode(google.maps.drawing.OverlayType.POLYGON);
    } 
    else
    {
      sourceTriangle.setMap(null);  
      // selectedShape.setMap(null);
      drawingManager.setOptions({
          drawingControl: true
      });
      drawingManager.setDrawingMode(google.maps.drawing.OverlayType.POLYGON);
      console.log("remove_source_polygon533");
    }
  });
  
    //end of source polygon

    //end of polygon set in map

  // Create the search box and link it to the UI element.
    var input = document.getElementById('pac-input');
    var destination_input = document.getElementById('pac-input-destination');
    var searchBox = new google.maps.places.SearchBox(input);
    //var searchBox_destination = new google.maps.places.SearchBox(destination_input);
  //  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  // Bias the SearchBox results towards current map's viewport.
  map.addListener('bounds_changed', function() {
    searchBox.setBounds(map.getBounds());
  });

        var search_location = document.getElementById('pac-input');
        autocomplete_search = new google.maps.places.Autocomplete(search_location);

        $(document.body).on('change', '#pac-input' ,function(){ 
          google.maps.event.addListener(autocomplete_search, "place_changed", function (){
            var a = autocomplete_search.getPlace();
            $('#source_lat').val(a.geometry.location.lat());      
            $('#source_lng').val(a.geometry.location.lng());
            var address = a.formatted_address;
            manual_polygon();

           });
        });

      }

function manual_polygon()
{
    var source_lat = $("#source_lat").val();
    var source_lng = $("#source_lng").val();

    if(source_lat == "" && source_lng == "")
    {
      var source_polygon = $("#source_polygon").val();
      var exploded_source_poly = source_polygon.split(",");
      var mid_index = Math.round((exploded_source_poly.length)/2);
      var mid_source = exploded_source_poly[mid_index];
      var exploded_mid_source = mid_source.split(":");
      var source_Latlng =  new google.maps.LatLng(exploded_mid_source[0], exploded_mid_source[1]);

      var map = new google.maps.Map(document.getElementById('map'), {
              center: source_Latlng,
              zoom: 13,
              mapTypeId: 'roadmap'
          });
    }
    else
    {
      var source_Latlng =  new google.maps.LatLng(source_lat, source_lng);
      var map = new google.maps.Map(document.getElementById('map'), {
            center: source_Latlng,
            zoom: 13,
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

      function draw_polygon(boundarydata,map,markers,removeid){
          var boundaryPolygon = new google.maps.Polygon({
                path: boundarydata,
                strokeColor: '<?php echo $zone_color_code; ?>',
                strokeOpacity: 0.8,
                strokeWeight: 2,
                fillColor: '<?php echo $zone_color_code; ?>',
                fillOpacity: 0.4

            });
        //  boundaryPolygon.setMap(map);
          checkMarkerInPolygon(markers,boundaryPolygon,removeid);

      }
      function checkMarkerInPolygon(markers,boundaryPolygon,removeid){
        console.log("checkMarkerInPolygon")
        if(google.maps.geometry.poly.containsLocation(markers[0].getPosition(), boundaryPolygon) == true) {
         
        }else{
          console.log("checkMarkerInPolygon trigger click")
         // $("#"+removeid).trigger("click");
        }
      }

      function overlaycompleteFn(e){
        var vertices = e.overlay.getPath().getArray();
        $('#source_polygon').val(vertices);
        drawingManager.setDrawingMode(null);
        drawingManager.setOptions({
          drawingControl: false
        });
        var newShape = e.overlay;
        newShape.type = e.type;
        console.log("newShape",newShape)
        setSelection(newShape);
        
      }
   
      function polygoncompleteFn(polygon,map,markers,flag){
         console.log("polygoncompletefn"+flag)
     // Switch back to non-drawing mode after drawing a shape.
     if(flag == 1){
        drawingManager.setDrawingMode(null);
        // To hide:
        drawingManager.setOptions({
          drawingControl: false
        });
    }

         get_polygon_cordinates(polygon,map,markers,flag);

         polygon.getPaths().forEach(function(path, index){

          google.maps.event.addListener(path, 'insert_at', function(){
            console.log("insert_at")
            // New point
            get_polygon_cordinates(polygon,map,markers,flag);
          });

          google.maps.event.addListener(path, 'remove_at', function(){
            console.log("remove_at")
            // Point was removed

            get_polygon_cordinates(polygon,map,markers,flag);
          });

          google.maps.event.addListener(path, 'set_at', function(){
            console.log("set_at")
            // Point was moved

              get_polygon_cordinates(polygon,map,markers,flag);
          });

        });

        google.maps.event.addListener(polygon, 'dragend', function(){
          console.log("dragend")
         get_polygon_cordinates(polygon,map,markers,flag);
        });
      }
        google.maps.event.addListener(path, 'set_at', function(){
            console.log("set_at")
            // Point was moved

              get_polygon_cordinates(polygon,map,markers,flag);
          });
          
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo GOOGLE_MAP_API_KEY;?>&libraries=drawing,places&callback=initAutocomplete" async defer>
</script>

