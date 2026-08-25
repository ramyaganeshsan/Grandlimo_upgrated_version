<?php defined("SYSPATH") or die("No direct access allowed.");

$dropLat =
    isset($details[0]["drop_latitude"]) & !empty($details[0]["drop_latitude"])
        ? $details[0]["drop_latitude"]
        : "";
$dropLag =
    isset($details[0]["pickup_longitude"]) &
    !empty($details[0]["drop_latitude"])
        ? $details[0]["pickup_longitude"]
        : "";
$pickupLat =
    isset($details[0]["pickup_latitude"]) & !empty($details[0]["drop_latitude"])
        ? $details[0]["pickup_latitude"]
        : "";
$pickupLag =
    isset($details[0]["pickup_longitude"]) &
    !empty($details[0]["drop_latitude"])
        ? $details[0]["pickup_longitude"]
        : "";
$driverId = ( isset($details[0]['driver_id'])& !empty($details[0]['driver_id']) ) ? $details[0]['driver_id'] : "";
$trip_id = ( isset($details[0]['_id'])& !empty($details[0]['_id']) ) ? $details[0]['_id'] : "";

?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css" integrity="sha512-hwwdtOTYkQwW2sedIsbuP1h0mWeJe/hFOfsvNKpRB3CkRxq8EW7QMheec1Sgd8prYxGm1OM9OZcGW7/GUud5Fw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
   body {
   	background : white;
   }
   .container {
   	width : auto;
  	padding : 0px 8px;
  	margin-bottom: 8px;
  }
  .nav {
    padding: 8px 6px;
  }
  .navbar-brand img {
    display: block;
    margin: 0 auto;
  }
  #map {
    height: 400px;
    width: 100%;
  }
  .container p {
    font-family: 'Arial', sans-serif;
    font-size: 16px;
    margin-bottom: 10px;
  }
  .container span {
    font-weight: bold;
    margin-right: 8px;
  }
  #viewDetailsBtn {
    margin-top: 6px;
  }
        
    
</style>
    <main>
        <nav class="nav navbar navbar-expand-lg navbar-light bg-light">
            <span class="navbar-brand" href="#">
                <img src="http://34.28.184.113/public/uploads/site_logo/logo.png" alt="logo">
            </span>
        </nav>
    </main>

    <div class="container">
    
        <?php if (!empty($details) && isset($details[0])) {
            $details = $details[0]; ?> 
          <p><?php echo "<span>Passenger name:</span> " .
              (isset($details["passenger_name"])
                  ? $details["passenger_name"]
                  : "N/A"); ?></p>
          <p><?php echo "<span>Passenger phone number:</span> " .
              (isset($details["passenger_phone"])
                  ? $details["passenger_phone"]
                  : "N/A"); ?></p>
        <button class="btn btn-primary" id="viewDetailsBtn">View More Details</button>
         
        <?php
        } else {
            echo "<p class='no-details'>No details found</p>";
        } ?>

    </div>
<script>
$(document).ready(function() {
$('#viewDetailsBtn').click(function() {
 Swal.fire({
  titleText : "Trip info",
  html: `
    <style>
            .popup-container {
                font-family: 'Arial', sans-serif;
                font-size: 16px;
                 margin-bottom: 4px;
            }
            .swal2-close {
              padding : 16px 0px;
            }
            .popup-container p {
                display: grid;
                grid-template-columns: 40% 60%;
                margin-left: 8px ;
                margin-bottom: 4px;
            }
            
            .popup-container span {
	    text-align: left;
	    
           }
            .popup-container strong {
                font-weight: bold;
                text-align: left;
            }
                </style>
                    <div class="popup-container">

    <p><?php echo "<strong>Passenger current location<span>:</span></strong> " .
        (isset($details["current_location"])
            ? "<span>" . $details["current_location"] . "</span>"
            : "<span>" . "N/A" . "</span>"); ?></p>


                <p><?php echo "<strong>Passenger's drop location<span>:</span></strong> " .
                    (isset($details["drop_location"])
                        ? "<span>" . $details["drop_location"] . "</span>"
                        : "<span>" . "N/A" . "</span>"); ?></p>
                <p><?php echo "<strong>Friend's & family name<span>:</span></strong> " .
                    (isset($details["bookforsomeone_name"])
                        ? "<span>" . $details["bookforsomeone_name"] . "</span>"
                        : "<span>" . "N/A" . "</span>"); ?></p>
                <p><?php echo "<strong>Phone number<span>:</span></strong> " .
                    (isset($details["bookforsomeone_phone"])
                        ? "<span>" .
                            $details["bookforsomeone_phone"] .
                            "</span>"
                        : "<span>" . "N/A" . "</span>"); ?></p>
                <p><?php echo "<strong>Driver name<span>:</span></strong> " .
                    (isset($details["driver_name"])
                        ? "<span>" . $details["driver_name"] . "</span>"
                        : "<span>" . "N/A" . "</span>"); ?></p>
                <p><?php echo "<strong>Driver phone no<span>:</span></strong> " .
                    (isset($details["driver_phone"])
                        ? "<span>" . $details["driver_phone"] . "</span>"
                        : "<span>" . "N/A" . "</span>"); ?></p>
                </div>
            `,
  showCloseButton: true,
  showConfirmButton : false,
  focusConfirm: false,
  // confirmButtonText: `
  //    Close
  // `,
  // confirmButtonAriaLabel: "close",
 

})
});
 });
</script>
<div id="map"></div>

<script>
	
	
  let map;
  let directionsService;
  let directionsRenderer;
  let intervalId;
  let sourceMarker;
  let destinationMarker;
  let currentLocationMarker;
  let destination = { lat: Number("<?php echo $dropLat; ?>"), lng: Number("<?php echo $dropLag; ?>") };
  let source = { lat: Number("<?php echo $pickupLat; ?>"), lng: Number("<?php echo $pickupLag; ?>") };
  let userLocation = source;
  let driverid = "<?php echo $driverId; ?>";
  let tripid = "<?php echo $trip_id; ?>";

  


  function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
      center: { lat: 37.7749, lng: -122.4194 }, 
      zoom: 13,
    });

    directionsService = new google.maps.DirectionsService();
    directionsRenderer = new google.maps.DirectionsRenderer({
      map: map,
    });

    updateLocation();

    intervalId = setInterval(updateLocation, 7000);
  }

  function updateLocation() {
 
        
var url_path = "<?php echo URL_BASE; ?>share/get_location";
$.ajax({
    type: "POST",
    url: url_path,
    data: {
        driver_id: driverid,
        trip_id: tripid
    },
    success: function(response) {
        var data = JSON.parse(response);

        if (data.status === 1) {
            const origin = {
                lat: data.lat,
                lng: data.lng
            };

            if (currentLocationMarker) currentLocationMarker.setMap(null);

            currentLocationMarker = new google.maps.Marker({
              position: origin,
              map: map,
              title: 'Current Location',
              icon: 'https://maps.google.com/mapfiles/ms/icons/blue-dot.png',
            });
        } else if((data.status === 2)){
          clearInterval(intervalId);
          if (confirm("Trip has been succesfully completed.") == true) {
            window.location.reload();
          } else {
            window.location.reload();
          }
        }
        else {
            alert("Unable to get location");
        }
    },
    error: function(xhr, status, error) {


    }
});


          
          
          const origin = userLocation;

          if (sourceMarker) sourceMarker.setMap(null);
          if (destinationMarker) destinationMarker.setMap(null);

          sourceMarker = new google.maps.Marker({
            position: source,
            map: map,
            title: 'Start',
            icon: 'https://maps.google.com/mapfiles/ms/icons/red-dot.png',
          });

          destinationMarker = new google.maps.Marker({
            position: destination,
            map: map,
            title: 'End',
            icon: 'https://maps.google.com/mapfiles/ms/icons/green-dot.png',
          });

          calculateAndDisplayRoute(origin, destination);
      
  }

  function calculateAndDisplayRoute(origin, destination) {
    directionsService.route(
      {
        origin: origin,
        destination: destination,
        travelMode: google.maps.TravelMode.DRIVING,
      },
      (response, status) => {
        if (status === "OK") {
          directionsRenderer.setDirections(response);
        } else {
          alert("Directions request failed due to " + status);
        }
      }
    );
  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxP4UEHJFGCbF-1inY3w79p1Kj95swe8Y&callback=initMap" 
        async defer></script>

</html>
</body>
