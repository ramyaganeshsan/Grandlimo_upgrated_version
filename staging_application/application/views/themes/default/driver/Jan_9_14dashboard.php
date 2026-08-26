 <?php 

  if($get_transaction){
	  $fare = [];
	  $month = [];
	foreach($get_transaction as $vl)
	{
		if($vl['fare'] != NULL){
			$fare[] = $vl['fare'];
			$month[] = "'".$vl['date']." ".$vl['month']."'";
		}
	}
	if($fare != NULL){
		$fare = implode(",",$fare);
	}
	if($month != NULL){
		$month = implode(",",$month);
	}
	$display ="display:block;";
}else{
	$fare = [];
	$fare = sizeof($fare);	
	$month = [];
	$display ="display:none;";
}

       foreach($dashstyles as $file => $type)
       { 
       echo HTML::style($file, ['media' => $type]); 
	   }    
       foreach($dashscripts as $file => $type)
       { 
       echo HTML::script($type); 
	   } 
	   //echo $month;  
 ?>  <br>
 <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&v=3.25"></script>
<!--
<script>	
// Enable the visual refresh
google.maps.visualRefresh = true;

var map;
function initialize() {
  var mapOptions = {
    zoom: 8,
    center: new google.maps.LatLng(11, 76.776),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
}
    </script>-->
<script type="text/javascript">
function showPosition(lat,lng)
{
	geocoder = new google.maps.Geocoder();
   
    
	var latlng = new google.maps.LatLng(lat,lng);
	
	geocoder.geocode({'latLng': latlng}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        if (results[1]) {         
          $('#current_place').html("My Current Location : "+results[1].formatted_address);
         }
      }       
      else if (status === google.maps.GeocoderStatus.OVER_QUERY_LIMIT) {
				  setTimeout(function() {
						showPosition(lat,lng);
				  }, 200); 
	  }
	  else {
			  alert('Geocoder failed due to: ' + status);
			  attempts = 0;
	   }
   });
}


    </script>
    
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />    
    <script type="text/javascript">

        var dmap = null;
		var map = null;
		var pan = null;
		

 function DMap() {
     this.K = "";
     this.P = "";
     this.aP = 0;
     this.as = 0;
     this.ao = 0;
     this.al = 0;
     this.aT = "";
     this.aE = 0;
     this.O = 2;
     this.av = false;
     this.Q = 1000;
     this.U = 20;
     this.I = 15;
     this.C = null;
     this.bi = new google.maps.DirectionsService();
     this.bV = [];
     this.bK = null;
     this.bS = null;
     this.bT = null;
     this.ae = null;
     this.ah = null;
     this.ac = null;
     this.aj = null;
     this.ad = null;
     this.ai = null;
     this.g = null;
     this.M = null;
     this.G = -1;
     this.D = 0;
     this.H = 0;
     this.t = [];
     this.aF;
     this.B = false;
     this.am = false;
     this.L = 0;
     this.J = 0;
 };

 function loadPage() {
     initGeoUtils();
     dmap = new DMap();
     dmap.bG();
     dmap.bJ();
     dmap.bB();
     dmap.aH();
     dmap.bF();
     dmap.bI();
     if (dmap.K && dmap.P && dmap.O > 0) {
         setMode(dmap.O);
         dmap.aQ();
         dmap.aG();
     } else {
         setMode(0);
     }
 };

 function unloadPage() {};

 function resizePage() {
     if (typeof ("GMap2") == "undefined") {
         return;
     }
    dmap.ax();
    dmap.aC();
 };

 function setMode(a) {
     if (a != dmap.G) {
         dmap.G = a;
         dmap.aC();
         
         
         if (a == 0 || a == 1) {
             pauseAnimation();
             dmap.aD(false);
         }
         if (a == 2) {
             if (!pan) {
                 dmap.bD();
             }
             dmap.aD(true);
         }
     }
 };

 function resetDirections() {
     dmap.B = false;
     dmap.aD(false);
     if (dmap.C) {
         dmap.C.setMap(null);
     }
     setMode(0);
     dmap.aH();
 };

 function pauseAnimation() {	
     if (dmap.am && dmap.B) {
         playAnimation();
     }
 };

 function playAnimation() {
	 
     if (!dmap.am) {
         eid("playButton").value = "Start Waiting Time";
         setMode(2);
	
         dmap.bC();
     } else {
         dmap.B = !dmap.B;
         eid("playButton").value = dmap.B ? "Start Waiting Time" : "Restart Journey";
         if (dmap.B) {
             if (map) {
                 map.setCenter(dmap.g);
                 if (dmap.D == 0) {
                     map.setZoom(dmap.I);
                 }
                 setMode(2);
             }
         }
     }
 };

 function restartAnimation() {
     playAnimation();
 };

 function RouteLeg(pt1, pt2) {
     this.start = pt1;
     this.end = pt2;
     this.distance = Point2PointDistance(pt1, pt2);
     this.bearing = Point2PointBearing(pt1, pt2);
     var x = (pt1.lng() + pt2.lng()) / 2;
     var y = (pt1.lat() + pt2.lat()) / 2;
     this.aO = new google.maps.LatLng(y, x);
 };
 DMap.prototype.bE = function () {
     this.t = [];
     for (var i = 0; i < this.T.length - 1; i++) {
         var pt1 = this.T[i];
         var pt2 = this.T[i + 1];
         var ay = new RouteLeg(pt1, pt2);
         this.t.push(ay);
     }
 };
 DMap.prototype.bC = function () {
     this.am = true;
     this.g = this.T[0];
     map.setCenter(this.g);
     map.setZoom(this.I);
     this.aF = this.T[0].pt;
     this.B = true;
     setTimeout("animationCycle()", 1);
 };

 function animationCycle() {
     if (dmap.B) {
         var bu = dmap.U;
         dmap.H += bu;
         var f = dmap.t[dmap.D];
         while (f && dmap.H >= f.distance) {
             dmap.H -= f.distance;
             dmap.D++;
             if (dmap.D < dmap.t.length) {
                 f = dmap.t[dmap.D];
             } else {
                 f = dmap.t[dmap.t.length - 1];
                 dmap.g = f.end;
                 map.setCenter(f.end);
                 if (pan) {
                     pan.setPosition(dmap.g);
                     pan.setPov({
                         heading: f.bearing,
                         pitch: 0,
                         zoom: 0
                     });
                     dmap.aa(dmap.g, f.bearing);
                 }
                 eid("playButton").value = "Journey Completed";
                 console.log("Journey Completed");
                 journey_completed();
                 dmap.B = false;
                 dmap.D = 0;
                 dmap.H = 0;
                 f = null;
             }
         }
         if (f) {
             var at = dmap.H / f.distance;
             var y = f.end.lat() * at + f.start.lat() * (1 - at);
             var x = f.end.lng() * at + f.start.lng() * (1 - at);
             var pt = new google.maps.LatLng(y, x);
             var pts = [dmap.aF, pt];
             dmap.aF = pt;
             dmap.g = pt;
             map.setCenter(dmap.g);
             if (pan) {
                 pan.setPosition(dmap.g);
                 pan.setPov({
                     heading: f.bearing,
                     pitch: 0,
                     zoom: 0
                 });
                 dmap.aa(pt, f.bearing);
             }
         }
     }
     setTimeout("animationCycle()", dmap.Q);
 };
 DMap.prototype.v = function (q, n) {
     var r = "";
     if (q && q.length > 0 && n && n.length) {
         var p = n + "=";
         var b = q.indexOf(p);
         if (b != -1) {
             b += p.length;
             var e = q.indexOf("&", b);
             if (e == -1) e = n.length;
             r = unescape(q.substring(b, e));
         }
     }
     return r;
 };
 DMap.prototype.bG = function () {
     var o = document.location.search.substring(1) + "&";
     var aU = this.v(o, "to");
     if (aU) {
         this.P = aU;
     }
     var bf = this.v(o, "from");
     if (bf) {
         this.K = bf;
     }
     var aW = this.v(o, "maptype");
     if (aW) {
         this.aP = parseInt(aW);
     }
     var bd = this.v(o, "mode");
     if (bd) {
         this.as = parseInt(bd);
     }
     var aR = this.v(o, "ah");
     if (aR) {
         this.ao = parseInt(aR);
     }
     var aS = this.v(o, "at");
     if (aS) {
         this.al = parseInt(aS);
     }
     var ba = this.v(o, "region");
     if (ba) {
         this.aT = ba;
     }
     var aY = this.v(o, "units");
     if (aY) {
         this.aE = parseInt(aY);
     }
     var bg = this.v(o, "initial");
     if (bg) {
         this.O = parseInt(bg);
     }
     var bh = this.v(o, "fi");
     if (bh) {
         this.Q = parseInt(bh);
     }
     var aZ = this.v(o, "fs");
     if (aZ) {
         this.U = parseInt(aZ);
     }
     var aX = this.v(o, "z");
     if (aX) {
         this.I = parseInt(aX);
     }
     var bj = this.v(o, "draggable");
     if (bj) {
         var d = parseInt(bj);
         if (d == 0) {
             this.av = false;
         } else {
             this.av = true;
         }
     }
 };
 var travelModes = [google.maps.DirectionsTravelMode.DRIVING, google.maps.DirectionsTravelMode.WALKING, google.maps.DirectionsTravelMode.BICYCLING];
 var unitSystems = [null, google.maps.DirectionsUnitSystem.METRIC, google.maps.DirectionsUnitSystem.IMPERIAL];

 function getDirections() {
     dmap.K = eid("fromText").value;
     dmap.P = eid("toText").value;
     if (!dmap.K) {
         alert("Please enter a 'From' address");
         return;
     }
     dmap.U = parseInt(eid("stepText").value);
     dmap.Q = parseInt(eid("intervalText").value);
     dmap.I = parseInt(eid("zoomText").value);
     if (dmap.U > 0 && dmap.U < 100000000) {} else {
         dmap.U = 20;
     } if (dmap.Q >= 100 && dmap.Q < 60000) {} else {
         dmap.Q = 1000;
     } if (dmap.I >= 1 && dmap.I < 22) {} else {
         dmap.I = 15;
     }
   //  dmap.bO("Getting Directions ...");
     setMode(3);
     if (!map) {
         dmap.aQ();
     }
     dmap.aG();
 };
 
 DMap.prototype.bI = function () {
     this.ad.innerHTML = "<div id='directionsDiv'></div>";
 };
 DMap.prototype.aG = function () {
     this.K = eid("fromText").value;
     this.P = eid("toText").value;
     if (!this.C) {
         this.C = new google.maps.DirectionsRenderer({
             map: map,
             draggable: true,
             polylineOptions: {
                 clickable: this.av,
                 strokeColor: "#FF0000",
                 strokeOpacity: 0.8,
                 strokeWeight: 3
             }
         });
     }
     this.C.setPanel(eid("directionsDiv"));
     google.maps.event.addListener(this.C, 'directions_changed', function (a) {
         dmap.bK = dmap.C.getDirections();
         if (dmap.bi) {
             var bm = dmap.g;
             var bx = dmap.C.getDirections();
             dmap.aK(bx, false);
             dmap.C.setMap(map);
             if (dmap.am) {
                 dmap.au(bm, true);
             }
         }
     });
     
    
     var bc = {
         origin: this.K,
         destination: this.P,
         travelMode: travelModes[this.as],
         avoidHighways: this.ao ? true : false,
         avoidTolls: this.al ? true : false,
         region: this.aT
     };
     if (this.aE > 0) {
         bc.unitSystem = unitSystems[this.aE];
     }
     dmap.bi.route(bc, function (aN, aM) {
         if (aM == google.maps.DirectionsStatus.OK) {
             if (dmap.O == 0) {
                 dmap.O = 2;
             }
             setMode(dmap.O);
             dmap.C.setDirections(aN);
             dmap.aK(aN, true);
             if (dmap.O == 2) {}
         } else {
             setMode(0);
             alert("Get Directions Error " + aM);
         }
     });
 };
 DMap.prototype.aK = function (bq, bo) {
     var aB = bq.routes;
     var ap = aB[0].legs;
     dmap.g = ap[0].start_location;
     dmap.T = [];
     dmap.T.push(dmap.g);
     var aq = null;
     for (var r in aB) {
         var bL = aB[r];
         var ap = bL.legs;
         for (var i in ap) {
             var ay = ap[i];
             var aV = ay.steps;
             for (var j in aV) {
                 var bR = aV[j];
                 var be = bR.path;
                 for (var k in be) {
                     var pt = be[k];
                     if (aq == null) {
                         aq = pt;
                     } else {
                         if (Point2PointDistance(aq, pt) > 1) {
                             dmap.T.push(pt);
                             aq = pt;
                         }
                     }
                 }
             }
         }
     }
     this.D = 0;
     this.H = 0;
     this.bE();
     if (bo) {
         this.aa(dmap.g, dmap.t[0].bearing);
     }
     if (this.G == 2 && pan) {
         var f = this.t[0];
         pan.setPosition(this.g);
         pan.setPov({
             heading: f.bearing,
             pitch: 0,
             zoom: 0
         });
         dmap.aa(this.g, f.bearing);
     }
 };

 function swapDirections() {
     var bz = eid("fromText").value;
     var bQ = eid("toText").value;
     eid("fromText").value = bQ;
     eid("toText").value = bz;
 };
 DMap.prototype.bF = function () {
     this.ai.innerHTML = "<table cellspacing=0 cellpadding=8 style='width:100%;height:100%;'><tr valign='top'><td style='width:100%'>" + "<div id='waitDiv'></div>" + "</td></tr></table>";
 };
 DMap.prototype.bO = function (bk) {
     eid("waitDiv").innerHTML = bk;
 };
 DMap.prototype.bJ = function () {
     this.ax();
     var V = "";
     V += "<div id='startPanel' style='display:none'></div>";
     V += "<div id='headerPanel' style='display:none'></div>";
     V += "<div id='directionsPanel' style='display:none;overflow:auto'></div>";
     V += "<div id='mapPanel' style='display:none'></div>";
   //  V += "<div id='streetViewPanel' style='display:none'></div>";
     V += "<div id='waitPanel' style='position:absolute;display:none'></div>";
     eid("mainDiv").innerHTML = V;
     this.ae = eid("startPanel");
     this.aj = eid("headerPanel");
     this.ah = eid("mapPanel");
    // this.ac = eid("streetViewPanel");
     this.ad = eid("directionsPanel");
     this.ai = eid("waitPanel");
     this.aC();
 };
 DMap.prototype.l = function (ab, bn, x, y, aL, aJ) {
     if (ab) {
         ab.style.display = bn ? "block" : "none";
         ab.style.left = x + "px";
       //  ab.style.top = y + "px";
         if (aL >= 0) {
            // ab.style.width = aL + "px";
         }
         if (aJ >= 0) {
             ab.style.height = aJ + "px";
         }
     }
 };
 DMap.prototype.aC = function (a) {
     this.ax();
     var F = 30;
     if (this.G == 0) {
         var ht = this.J;
         var ht1 = parseInt((this.J - F + 1) / 2);
         var wd = this.L;
         this.l(this.ae, true, 0, 0, wd, ht);
         this.l(this.ah, false, 0, ht1, wd, ht1);
         this.l(this.aj, false, 0, 0, wd, F);
         this.l(this.ac, false, 0, 0, wd, ht1);
         this.l(this.ad, false, 0, 0, 0, wd, ht1);
         this.l(this.ai, false, 0, 0, wd, ht1);
     } else if (this.G == 3) {
         var ht = this.J;
         var ht1 = parseInt((this.J - F + 1) / 2);
         var wd = this.L;
         this.l(this.ai, true, 0, 0, wd, ht);
         this.l(this.ae, false, 0, 0, wd, ht);
         this.l(this.ah, false, 0, ht1, wd, ht1);
         this.l(this.aj, false, 0, 0, wd, F);
         this.l(this.ac, false, 0, 0, wd, ht1);
         this.l(this.ad, false, 0, 0, 0, wd, ht1);
     } else {
         var ht = parseInt((this.J - F + 1) / 2);
         var wd = this.L;
         var y1 = F;
         var y2 = F + ht;
         var y3 = this.J - F;
         this.l(this.ae, false, 0, 0, wd, ht);
         this.l(this.aj, true, 0, 0, wd, F);
         this.l(this.ad, this.G == 1, 0, y1, wd, ht);
         this.l(this.ac, this.G == 2, 0, y1, wd, ht);
         this.l(this.ah, true, 0, y2, wd, ht);
         this.l(this.ai, false, 0, 0, wd, ht1);
     } if (eid("directionsDiv") && (this.L > 0)) {
         eid("directionsDiv").style.width = (this.L - 30) + "px";
     }
     if (map) {
         google.maps.event.trigger(map, "resize");
     }
     if (pan) {
         google.maps.event.trigger(pan, "resize");
     }
 };
 DMap.prototype.ax = function () {
     var isIE = true;
     if (typeof (window.innerHeight) == "number") {
         isIE = false;
     }
     if (isIE) {
         this.L = parseInt(document.body.offsetWidth);
         this.J = parseInt(document.body.offsetHeight);
     } else {
         this.L = parseInt(window.innerWidth);
         this.J = parseInt(window.innerHeight);
     }
 };
 DMap.prototype.aH = function () {
     this.aj.innerHTML = "<div id='on_going_trip_btn'></div><table cellspacing=0 cellpadding=2 style='width:100%;height:100%;' ><tr><td><input  class='btn btn-mini btn-primary' id='playButton1' type='button' onclick=playAnimation();show_id('playButton');hide_id('playButton1'); value='Start the Journey' style='height:20px;'  /> " + "<input  class='btn btn-mini btn-primary' id='playButton' type='button' onclick='playAnimation();Example1.Timer.toggle();' value='Start Waiting Time'  style='height:20px;' /> " + "<input class='btn btn-mini btn-info' id='resetButton' type='button' onclick='resetDirections();journey_completed();' value='Completed' style='height:20px;'  />" + "</td><td align='right'>" + "</td></tr></table>";
 };
 var mapTypes = [google.maps.MapTypeId.ROADMAP, google.maps.MapTypeId.SATELLITE, google.maps.MapTypeId.HYBRID, google.maps.MapTypeId.TERRAIN];
 DMap.prototype.aQ = function () {
     var bl = {
         zoom: 2,
         center: new google.maps.LatLng(0, 0),
         mapTypeId: mapTypes[this.aP],
         navigationControlOptions: {
             style: google.maps.NavigationControlStyle.SMALL
         }
     };
     map = new google.maps.Map(this.ah, bl);
     google.maps.event.addListener(map, "click", function (a) {
         dmap.au(a.latLng, true);
     });
 };
 var pandas = [];
 DMap.prototype.aD = function (a) {
     if (this.M) {
         this.M.setVisible(a);
     }
 };
 DMap.prototype.aa = function (pt, bt) {
     if (!pandas.length) {
         for (var i = 0; i < 16; i++) {
             pandas[i] = new google.maps.MarkerImage("<?php echo PUBLIC_IMGPATH.'/' ; ?>pegman.png", new google.maps.Size(49, 52), new google.maps.Point(0, i * 52), new google.maps.Point(25, 36));
         }
     }
     if (!this.M) {
         var bv = new google.maps.MarkerImage("<?php echo PUBLIC_IMGPATH.'/' ; ?>pegman.png", new google.maps.Size(49, 52), new google.maps.Point(0, 0), new google.maps.Point(25, 36));
         var ar = new google.maps.Marker({
             position: pt,
             icon: bv,
             map: map,
             draggable: false,
             zIndex: 10000
         });
         google.maps.event.addListener(ar, "dragstart", function (a) {
             if (dmap.B) {
                 pauseAnimation();
             }
         });
         google.maps.event.addListener(ar, "drag", function (a) {
             dmap.au(a.latLng, false);
         });
         google.maps.event.addListener(ar, "dragend", function (a) {
             dmap.au(a.latLng, true);
         });
         this.M = ar;
     } else {
         this.M.setPosition(pt);
     }
     this.M.setVisible(this.G == 2 ? true : false);
     var n = Math.round(bt / 22.5) % 16;
     this.M.setIcon(pandas[n]);
 };
 DMap.prototype.au = function (pt, bs) {
     var aA = 0;
     var ak = -1;
     for (var i in this.t) {
         var bP = this.t[i].aO;
         var ag = Point2PointDistance(pt, bP);
         if (!aA || ag < aA) {
             aA = ag;
             ak = i;
         }
     }
     var A = this.t[ak];
     var an = A.aO;
     if (A) {
         var an = this.bH(ak, pt);
         this.g = an;
         this.D = ak;
         this.H = A.distance / 2;
         this.aa(an, A.bearing);
         if (bs && pan) {
             pan.setPosition(an);
             pan.setPov({
                 heading: A.bearing,
                 pitch: 0,
                 zoom: 0
             });
         }
     }
 };
 DMap.prototype.bH = function (aI, pt) {
     var A = this.t[aI];
     var pt1 = A.start;
     var pt2 = A.end;
     var bX = pt1 + " to " + pt2;
     var ag = Point2PointDistance(pt1, pt2);
     var by = 0;
     while (ag > 1) {
         var mx = (pt1.lng() + pt2.lng()) / 2;
         var my = (pt1.lat() + pt2.lat()) / 2;
         var pt0 = new google.maps.LatLng(my, mx);
         var bM = Point2PointDistance(pt1, pt);
         var bN = Point2PointDistance(pt2, pt);
         if (bM < bN) {
             pt2 = pt0;
         } else {
             pt1 = pt0;
         }
         ag = Point2PointDistance(pt1, pt2);
         by++;
     }
     var bw = Point2PointDistance(A.start, A.end);
     var bb = Point2PointDistance(A.start, pt1);
     var bU = bb * 100 / bw;
     this.D = aI;
     this.bW = A;
     this.H = bb;
     return pt1;
 };
 DMap.prototype.bB = function () {
     this.ae.innerHTML = "<div class='errors'><?php echo __('dont_reload');?></div><table cellspacing=0 cellpadding=2 style='text-align:center; width:100%; font-size:14px' ><tr><td style='width:100%'>" + "</td></tr></table>" + "<table cellspacing=0 cellpadding=4 style='width:100%; font-size:12px' ><tr>"+ "<input id='fromText' type='hidden' style='width:100%' value='Ganapathy, Coimbatore' />" + "</td></tr><tr><td>" + "<input id='toText' type='hidden' style='width:100%' value='Textool, Coimbatore' />" + "</td></tr><tr><td colspan='1' width='2%'>" + "<input type='button' value='Pick up the Passenger' class='btn btn-primary' onclick='getDirections();'>" + "</td><td colspan='1' width='25%'>" + "<input type='button' value='Cancel the Trip' class='btn btn-danger' onclick='cancelTrip();'>" + "</td></tr></table>" + "<table cellspacing=0 cellpadding=4 style='width:100%; font-size:11px; color:gray'><tr><td colspan=2>" + "<b></b>" + "</td></tr><tr><td><input id='stepText' type='hidden' style='width:80px' />" + "</td></tr><tr><td><input id='intervalText' type='hidden' style='width:80px' />" + "</td></tr><tr><td><input id='zoomText' type='hidden' style='width:80px' />" + "</td></tr></table>" + "<p>" + "</p>" + "";
     eid("fromText").value = $('#fromText1').val();
     eid("toText").value = $('#toText1').val();
     
     /*eid("fromText").value = $('#fromText').val();
     eid("toText").value = $('#toText').val();;*/
     console.log(eid("fromText").value);
     eid("stepText").value = this.U;
     eid("intervalText").value = this.Q;
     eid("zoomText").value = this.I;
 };
 DMap.prototype.bD = function () {
     var bp = {
         addressControl: false,
         linksControl: false,
         navigationControl: true
     };
     pan = new google.maps.StreetViewPanorama(this.ac, bp);
     pan.setPosition(this.g);
     pan.setPov({
         heading: 135,
         pitch: 0,
         zoom: 1
     });
     google.maps.event.addListener(pan, "pov_changed", function (a) {
         if (!dmap.B) {
             var bA = pan.getPov();
             var af = bA.heading;
             while (af < 0) {
                 af += 360;
             }
             while (af > 360) {
                 af -= 360;
             }
             dmap.aa(dmap.g, af);
         }
     });
 };

 function eid(id) {
     return document.getElementById(id);
 };

 function formatFloat(n, d) {
     var m = Math.pow(10, d);
     return parseInt(n * m, 10) / m;
 };

 function glog(a) {
     if (typeof (console) != "undefined" && console && console.log) {
         console.log(a);
     }
 };

 function initRandom() {
     var seed = new Date().getTime();
     var x = Math.random(seed);
 };

 function getRandomInt(aw) {
     var az = Math.floor(Math.random() * aw);
     return az;
 };

 function getRandomFloat(aw) {
     var az = Math.random() * aw;
     return az;
 };

 function initGeoUtils() {
     if (typeof (String.prototype.toRad) === "undefined") {
         Number.prototype.toRad = function () {
             return this * Math.PI / 180;
         }
     }
     if (typeof (String.prototype.toDeg) === "undefined") {
         Number.prototype.toDeg = function () {
             return this * 180 / Math.PI;
         }
     }
 };

 function Point2PointDistance(pt1, pt2) {
     var lat1 = pt1.lat();
     var lat2 = pt2.lat();
     var lon1 = pt1.lng();
     var lon2 = pt2.lng();
     var R = 6371000;
     var dLat = (lat2 - lat1).toRad();
     var dLon = (lon2 - lon1).toRad();
     var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) + Math.cos(lat1.toRad()) * Math.cos(lat2.toRad()) * Math.sin(dLon / 2) * Math.sin(dLon / 2);
     var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
     var d = R * c;
     return d;
 };

 function Point2PointBearing(pt1, pt2) {
     var angle = 0;
     if (pt1 != null && pt2 != null && !pt1.equals(pt2)) {
         var y1 = pt1.lat().toRad();
         var x1 = pt1.lng().toRad();
         var y2 = pt2.lat().toRad();
         var x2 = pt2.lng().toRad();
         var a = Math.sin(x1 - x2) * Math.cos(y2);
         var b = Math.cos(y1) * Math.sin(y2) - Math.sin(y1) * Math.cos(y2) * Math.cos(x1 - x2);
         angle = -(Math.atan2(a, b));
         if (angle < 0.0) {
             angle += Math.PI * 2.0;
         }
         angle = parseInt(angle * 180.0 / Math.PI);
     }
     return angle;
 }
        
        window.onunload=unloadPage;
        window.onresize=resizePage;
        
							
    </script>
    
			<?php //print_r($driver_logs);?>
			<?php 

				//Dashboard Values
				$ratings= 0;$today_ratings=0;$trip_total_with_rate=$trip_today_with_rate =0;
				foreach($get_driver_logs_completed as $values)
				{
						$ratings += $values->rating;						
						
						if (strpos($values->createdate,date('Y-m-d')) !== false) {
							$today_ratings += $values->rating;
							if($values->rating != 0)
								$trip_today_with_rate++;
						}						
						if($values->rating != 0)
							$trip_total_with_rate++;
				}
				if($trip_today_with_rate != 0)
					$today_ratings /= $trip_today_with_rate;
				if(count($get_driver_logs_completed)>0)
				{
					$totalcompletedtrips = count($get_driver_logs_completed);
					if($trip_total_with_rate!=0 && $ratings!=0){
						$totalrating = $ratings/$trip_total_with_rate;
					}else{
						$totalrating = 0;
					}
					//echo $trip_total_with_rate;
					$total_round = round($totalrating,2);
				}
				else
				{
					$total_round = 0;
				}
				//Today Comments
				$today_comments=0;$total_comments=0;
				//print_r($driver_comments);
				foreach($driver_comments as $values)
				{
						$total_comments++;
						if (strpos($values->createdate,date('Y-m-d')) !== false) {
							if($values->comments != "")
								$today_comments++;
						}						

				}
				
			?>
			
			
			<!-- Navigation Start -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					  <?php echo new View(USERVIEW."/driver/driver_sidebar"); ?>
				</div><!--/.well -->
			</div><!--/span-->
			<!-- Navigation End -->
			
			
			
			<div id="content" class="span10">
				
					
			
			<!-- content starts -->			
				<div class="bread_crumb_holder">
					<ul class="breadcrumb">
						<li>
							<a href="<?php echo URL_BASE;?>"><?php echo __('home'); ?></a> <span class="divider">/</span>
						</li>
						<li>
							<a href="<?php echo URL_BASE;?>driver/dashboard"><?php echo __('dashboard'); ?></a>
						</li>
					</ul>
				</div>
				
				<div class="btn-group" style="margin-bottom:10px;">
					<button class="btn btn-info dropdown-toggle" data-toggle="dropdown"><?php echo __('QuickLinks'); ?> <span class="caret"></span></button>
					<ul class="dropdown-menu">
					  <li><a href="javascript:scrollIntoView('driver_logs_upcoming')"><?php echo __('Upcoming Journey'); ?></a></li>
					  <li><a href="javascript:scrollIntoView('ongoing_trip')"><?php echo __('Ongoing Journey'); ?></a></li>
					  <li><a href="javascript:scrollIntoView('completed_trip')"><?php echo __('completed_trip'); ?></a></li>
					  <li class="divider"></li>
					  <li><a href="javascript:scrollIntoView('assigned')"><?php echo __('assigned_taxi'); ?></a></li>
					</ul>
				</div>						
			
				<!-- Notification area Start -->
				<div class="sortable row-fluid">
					<a data-rel="tooltip" title="<?php echo count($get_driver_logs_completed)==0?'0':count($get_driver_logs_completed) .' '. __('total_trips'); ?> " class="well span3 top-block" href="javascript:scrollIntoView('completed_trip')">
						<span class="icon32 icon-green icon-book"></span>
						<div><?php echo __('total_trips'); ?></div>
						<div><?php //print_r($driver_logs_unread);
						echo count($get_driver_logs_completed)==0?'0':count($get_driver_logs_completed); ?></div>
						<?php //print_r($today_driver_logs_completed);?>
						<span class="notification"><?php echo count($today_driver_logs_completed)==0?'0':count($today_driver_logs_completed); ?></span>
					</a>

					<a data-rel="tooltip" title=" <?php echo $total_round; ?>" class="well span3 top-block" href="#">
						<span class="icon32 icon-red icon-star-on"></span>
						<div><?php echo __('current_rating'); ?></div>
						<div><?php echo $total_round; ?></div>
						<span class="notification green"><?php echo $today_ratings; ?></span>
					</a>

				<a data-rel="tooltip" title="<?php echo count($assignedtaxi_list).' '. __('assigned_taxi'); ?>." class="well span3 top-block" href="javascript:scrollIntoView('assigned')">
					<span class="icon32 icon-orange icon-cart"></span>
					<div><?php echo __('assigned_taxi'); ?></div>
					<div><?php echo count($assignedtaxi_list);?></div>
					<span class="notification yellow"><?php echo count($assignedtaxi_list);?></span>
				</a>
				
				
				<a data-rel="tooltip" title="<?php echo isset($total_comments)?$total_comments:0;echo ' '.__('comments');?>" class="well span3 top-block" href="#">
					<span class="icon32 icon-color icon-messages"></span>
					<div><?php echo __('comments');?></div>
					<div><?php echo $total_comments;?></div>
					<span class="notification red"><?php echo isset($today_comments)?$today_comments:0;?></span>
				</a>
			</div>
				<!-- Notification area End -->
			<input type="hidden" id="driver_logs" name="driver_logs" value="<?php echo count($driver_logs_new); ?>">
			
			
			
			<div class="row-fluid sortable" id="travel_completed">
				<div class="box span12" >
					<div class="box-header well" data-original-title>
						<h2><i class="icon-list-alt"></i> <?php echo __('travel_completed_status');?></h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					
					<div class="box-content" id="result_status_div">
										
					</div>
				</div>
			</div>
			
			<!-- Ongoing journey -->
<div class="row-fluid sortable">
				<div class="box span12" id="ongoing_trip">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-list-alt"></i><?php echo __(' Ongoing Trip'); ?></h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<!-- <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>-->
						</div>
					</div>
					<div class="box-content">
					<?php if(count($driver_logs_progress)>0) { ?>
					<table class="table table-hover table-bordered">
						
						<tr>
							<td>#</td>
							<th><?php echo __('passenger_name'); ?></th>
							<td><b><?php echo __('Current_Location'); ?></b></td>
							<td><b><?php echo __('Drop_Location'); ?></b></td>
							<td><b><?php echo __('No_Passengers'); ?></b></td>
							<td><b><?php echo __('pictup_date');?></b></td>
							<td><b><?php echo __('pictup_time');?></b></td>							
							<!-- <td><b><?php //echo __('Status');?></b></td> -->
							</tr>
						<?php 
						$i=1;
						///print_r($driver_logs);
						
							foreach($driver_logs_progress as $values)
							{
								//print_r($values);
							?>
							<tr>			
								<td><?php echo $i;?></td>
								<td><?php echo ucfirst($values->name); ?></td>
								<td><?php echo $values->current_location;?></td>
								<td><?php echo ($values->drop_location)==""?'-':$values->drop_location; ?></td>
								<td><?php echo ($values->no_passengers)=="0"?'-':$values->no_passengers;?></td>
								<td><?php echo date('d/m/Y',strtotime($values->pickup_time));?></td>
								<td><?php echo date('h:i:s a', strtotime($values->pickup_time));?></td>
								<!-- <td><?php //echo "<a href=javascript:show_progress_driver('$values->driver_id')>Status</a>"?></td> -->
							
							</tr>
							<?php $i=$i+1;
							}
						 ?>
						</table>
					<?php }else {
							echo __('no_data');
						}?>
			</div>
			</div>			
						
			<!--<div class="row-fluid sortable">
				<div class="box span12" id="ongoing_journey">
					<div class="box-header well" data-original-title> 
						<h2><i class="icon-list-alt"></i> <?php //echo __('Ongoing Journey');?></h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content" >
						<div id="counter">
							Waiting Time <span id="stopwatch">00:00:00</span>
						</div>
							<div id="mainDiv"></div>						
					</div>
				</div>
			</div> -->
			<!-- Current journey -->	
			
			<!-- driver_logs_upcoming journey -->
						
			<div class="row-fluid sortable">
				<div class="box span12" id="driver_logs_upcoming">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-list-alt"></i> <?php echo __('Upcoming Journey');?></h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content" >
						
						<?php if(count($driver_logs_upcoming)>0) { ?>
					<table class="table table-hover table-bordered">
						
						<tr>
							<td>#</td>
							<th><?php echo __('passenger_name'); ?></th>
							<td><b><?php echo __('Current_Location'); ?></b></td>
							<td><b><?php echo __('Drop_Location'); ?></b></td>
							<td><b><?php echo __('No_Passengers'); ?></b></td>
							<td><b><?php echo __('pictup_date');?></b></td>
							<td><b><?php echo __('pictup_time');?></b></td>
							
							</tr>
						<?php 
						$i=1;
						///print_r($driver_logs);
						
							foreach($driver_logs_upcoming as $values)
							{
								//print_r($values);
							?>
							<tr class="success">			
								<td><?php echo $i;?></td>
								<td><?php echo ucfirst($values->name); ?></td>
								<td><?php echo $values->current_location;?></td>
								<td><?php echo ($values->drop_location)==""?'-':$values->drop_location; ?></td>
								<td><?php echo ($values->no_passengers)=="0"?'-':$values->no_passengers;?></td>
								<td><?php echo date('d/m/Y',strtotime($values->pickup_time));?></td>
								<td><?php echo date('h:i:s a', strtotime($values->pickup_time));?></td>
								
							
							</tr>
							<?php $i=$i+1;
							}
						 ?>
						</table>
					<?php }else {
							echo __('no_data');
						}?>
						
						
					</div>
				</div>
			</div>
			<!-- driver_logs_upcoming journey -->
			
			
			<!-- <div class="row-fluid sortable" id="driver_response">
				<div class="box span12" id="notification_id">
					<div class="box-header well" data-original-title>
						<h2><i class="icon icon-blue icon-home "></i><?php //echo " ".__('Response Status'); ?></h2>

						<div class="box-icon">						
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					
						<div class="box-content">
							<div id="notify_alert">					
								<?php //echo __('no_data');?>
							</div>
						</div>
				</div>
			</div> -->
				<!-- Box start -->
				<div class="row-fluid sortable">
				<div class="box span4">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-list"></i> <?php echo __('Statistics'); ?></h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<ul class="dashboard-list">
							<li>
								<a href="#">
									<i class="icon-tasks"></i>                               
									<span class="green"><?php echo count($driver_logs_new); ?></span>
									<?php echo __('new_trips'); ?>                                  
								</a>
							</li>
						  <li>
							<a href="#">
							  <i class="icon-star"></i>
							  <span class="red"><?php echo $today_ratings; ?></span>
							  <?php echo __('today_rating'); ?>
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-home"></i>
							  <span class="blue"><?php echo count($get_driver_logs_completed); ?></span>
							 <?php echo __('total_trips'); ?>                                            
							</a>
						  </li>

						  <li>
							<a href="#">
							  <i class="icon-arrow-up"></i>                               
							  <span class="green"><?php echo count($driver_logs_rejected);?></span>
							  <?php echo __('rejected_trips');?>                                    
							</a>
						  </li>
						  
						  <li>
							<a href="#">
							  <i class="icon-certificate"></i>                               
							  <span class="green"><?php if($driver_earnings[0]['total_amount'] > 0)
							  { 
								  echo CURRENCY.$driver_earnings[0]['total_amount'];
							 }else{
								 echo CURRENCY.'0';
								 }?></span>
							  <?php echo __('total_earnings');?>                                    
							</a>
						  </li>
						</ul>
					</div>
				</div><!--/span-->
				<div class="box span4">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-list"></i> Driver Status</h2>
						<div class="box-icon">
							
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<div id="shiftstatus">			
						
							<?php if($driver_shift_status == 'IN'){?>
							<span class='btn btn-mini btn-success' onclick="drivershift('0')"><?php echo __('shift_out');?></span>
							<input name='shift_current_status' id='shift_current_status' type='hidden' value='IN'>
							<script type="text/javascript">
									//push_notification1(<?php echo $id;?>);
								</script>							
							<?php } else { ?>
							<span class='btn btn-mini btn-danger' onclick="drivershift('1')"><?php echo __('shift_in');?></span>
							<input name='shift_current_status' id='shift_current_status' type='hidden' value='OUT'>
							<?php } ?>
						</div><br>
						<div id="on_going_trip"></div>										
						<div id='on_going_trip_btn'></div>	
						<div id='current_place'></div>
								
						<?php /*
						<div id="on_going_trip_map">
							<div id="map-canvas" style="width:285px;height:150px;"></div>
						</div
						*/ ?>
						
					</div>
				</div><!--/span-->				<div class="box span4">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> <?php echo __('comments');?></h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<div class="box-content">
							<ul class="dashboard-list" style="max-height:250px;overflow-y:auto;">
								<?php
									if(count($driver_comments) > 0) {

									 foreach($driver_comments as $values)
									  {
										  switch($values->rating){
											case 1: $star = "one";
													break;
											case 2: $star = "two";
													break;
											case 3: $star = "three";
													break;
											case 4: $star = "four";
													break;
											case 5: $star = "five";
													break;
											default: $star = "";
													break;
										}

										if(!empty($values->profile_image) && (file_exists($_SERVER['DOCUMENT_ROOT'].'/public/uploads/passengers'.$values->profile_image)))
										{
											$img1 = 'thumb_'.$values->profile_image;
											$img = URL_BASE.'public/uploads/passenger/'.$img1;
										}else{
											$img = URL_BASE."/public/images/noimages.jpg";
										}
										?>
								<li class="comments_area">
									<div class="comment_area_img"><a --href="#"><img class="dashboard-avatar" alt="" src="<?php echo $img;?>"></a></div>
									<div class="comment_area_right"><p class="ratings <?php echo $star;?>"></p>
									<strong><?php echo __('name_label');?>:</strong> <a --href="#"><?php echo ucfirst($values->name);?></a><br>		
									<strong><?php echo __('comment');?>:</strong> <span><?php if($values->comments){ echo substr($values->comments,0,29).'...';}else{ echo __('no_data'); }?></span>   </div>
								</li>
							<?php } 
									}
									else
									{ ?>								
<strong><?php echo __('no_comments'); ?></span>
									<?php } ?>
							</ul>
						</div>
					</div>
				</div><!--/span-->
		<div  id="assigned">
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-list-alt"></i> <?php echo __('transactions');?></h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<?php
						if(count($driver_logs_completed_transaction)>0)
						{													
							if(sizeof($fare)>0)
							{								
							?>						
						<div id="container" style="min-width: 900px; height: 300px; margin: 0 auto"></div>	
						<?php
					}
					else { echo __('no_data');}
					} else { echo __('no_data');}
					?>
					</div>
				</div><!--/span-->
			</div>
		</div>
				</div>
				
				<!-- Box End -->
				
				

				<!-- Assigned Taxi List Start -->
		<div  id="assigned">
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><?php echo __('assigned_taxi'); ?></h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
					<table class="table table-hover table-bordered">
						<?php if(count($assignedtaxi_list)>0) {?>
						<tr>
							<td>#</td>
							<th><?php echo __('taxi_no'); ?></th>
							<th><?php echo __('city_label'); ?></th>
							<th><?php echo __('from_date'); ?></th>
							<th><?php echo __('end_date'); ?></th>
							</tr>
						<?php 
						$i=1;
						///print_r($driver_logs);
						if(count($assignedtaxi_list)>0)
						{
							foreach($assignedtaxi_list as $values)
							{
							?>
							<tr>			
								<td><?php echo $i;?></td>
								<td><?php echo ucfirst($values['taxi_no']); ?></td>
								<td><?php echo ucfirst($values['city_name']); ?></td>
								<td><?php echo ucfirst($values['mapping_startdate']); ?></td>
								<td><?php echo ucfirst($values['mapping_enddate']); ?></td>
							</tr>
							<?php $i=$i+1;
							}
						} 
						}
						else
							echo "No Data Found";
						
						 ?>
						
						</table>
			</div>
			</div>
			</div><!--/span-->
			<div id="comment_ratings_ajax">
				
			</div>
		  <input type="hidden" id="current_count" name="current_count" value="<?php //echo $i-1; ?>">
		  <input type="hidden" id="rec_per_page" name="rec_per_page" value="<?php echo REC_PER_PAGE; ?>">
          <input type="hidden" id="comment_count" name="comment_count" value="<?php //echo $overall_count; ?>">
          
        </div>
				<!-- Assigned Taxi List End -->
		
		
			
			
				
				<!-- Completed Trips Start -->
		<div  id="comments_ratings">
			<div class="row-fluid sortable">
				<div class="box span12" id="completed_trip">
					<div class="box-header well" data-original-title>
						<h2><?php echo __('completed_trip'); ?></h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							    <!--<div id="datetimepicker" class="input-append date">
								  <input type="text" class="span6"></input>
								  <span class="add-on">
									<i class="icon-calendar"></i>
								  </span>
								  
								</div>
								<div class="btn btn-inverse">Go</div> -->
								<!-- <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>-->
						</div>
					</div>
					<div class="box-content">
					<table class="table table-hover table-bordered">
						<?php
						//print_r($driver_logs_completed_transaction);
						if(count($driver_logs_completed_transaction)>0)
						{
							?>
						<tr>
							<td>#</td>
							<th><?php echo __('passenger_name'); ?></th>
							<td><b><?php echo __('Current_Location'); ?></b></td>
							<td><b><?php echo __('Drop_Location'); ?></b></td>
							<!--<td><b><?php echo __('No_Passengers'); ?></b></td>-->
							<td><b><?php echo __('pictup_date');?></b></td>
							<td><b><?php echo __('pictup_time');?></b></td>
							<td><b><?php echo __('distance_km');?></b></td>		
							<td><b><?php echo str_replace('%currency%',CURRENCY,__('taxi_fare_km'));?></b></td>		
							<td><b><?php echo __('trip_total_fare').'('.CURRENCY.')';?></b></td>	
							<td><b><?php echo __('comments');?></b></td>	
							</tr>
						<?php 
						$i=1;
						//print_r($driver_logs_completed_transaction);
						$total_fare = "";
							foreach($driver_logs_completed_transaction as $values)
							{
								$distance = round($values->actual_distance,2);
								$current_fare = round($values->fare,2);
								$fare_km = 0;
								if(isset($values->fare) && ($distance > 0) && ($current_fare > 0))
								{
									$fare_km = $current_fare/$distance;
								}
								$total_fare = $current_fare+$total_fare;
							?>
							<tr>			
								<td><?php echo $i;?></td>
								<td><?php echo ucfirst($values->name); ?></td>
								<td><?php echo $values->current_location;?></td>
								<td><?php echo ($values->drop_location)==""?'-':$values->drop_location; ?></td>
								<!-- <td><?php echo ($values->no_passengers)=="0"?'-':$values->no_passengers;?></td>-->
								<td><?php echo date('d/m/Y',strtotime($values->pickup_time));?></td>
								<td><?php echo date('h:i:s a', strtotime($values->pickup_time));?></td>
								<td><?php echo $distance;?></td>
								<td><?php echo round($fare_km);?></td>
								<td><?php echo $current_fare;?></td>
								<td><?php $comments = htmlentities($values->comments);?><input type="button" class="btn btn-inverse view_icon" value="<?php echo __('comments');?>" title="<?php echo __('comments');?>" onclick="showdriverratingpopup('<?php echo $values->rating;?>','<?php echo ($comments== null)?'No Comments':$comments;?>');" /></td>
							</tr>
							
							<?php $i=$i+1;
							}
							?>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td colspan="2">Total(<?php echo CURRENCY;?>)</td>
								<td><?php echo $total_fare;?></td>
								<td></td>
							</tr>
							<?php
						}else {
							echo __('no_data');
						}?>
						</table>
						<?php
						//echo count($driver_logs_completed_transaction);
						if(count($driver_logs_completed_transaction)>=REC_PER_PAGE){
							?>
						<div class="view_more_completed_journey" ><a href="<?php echo URL_BASE ?>driver/completedtrips" class="imgclass">View More</a></div>
						<?php
					}
						 ?>
			</div>
			</div>
			</div><!--/span-->
			<div id="comment_ratings_ajax">
				
			</div>
		  <input type="hidden" id="current_count" name="current_count" value="<?php //echo $i-1; ?>">
		  <input type="hidden" id="rec_per_page" name="rec_per_page" value="<?php echo REC_PER_PAGE; ?>">
          <input type="hidden" id="comment_count" name="comment_count" value="<?php //echo $overall_count; ?>">
          
        </div>
				<!-- Completed Trips End -->
			</div>
</div><!-- Content End -->
						

<!--Change 	Status of the Journey-->
	<div id="change_status">
		<h3><?php echo __('Change Status of Journey');?></h3>               
			<div class="login_total">                                               
				<div id="change_status_div">
										                     
				</div>
				
			</div>
			<a id="close_x" class="close sprited" href="#"><?php echo __('close');?></a>
	</div>
<!-- End of Status of Journey-->

<!-- View Details -->
<div id="details_pop">
	<h2><?php echo __('comments');?></h2>               
	<div class="login_total">                                               
		<div class="login_form">
			<ul>
				<li><span><?php echo __('rating_points');?>:</span>
					<div id="outer">
						<div id="inner">
						<?php

						?>		
						</div>
					</div>
				</li>
				<li><span><?php echo __('comments');?>:</span><span id="v_comments" /></span></li>				
			</ul>                      
		</div>
	</div>
	<a id="close_x" class="close sprited" href="#"><?php echo __('close');?></a>
</div>


<script type="text/javascript">
	
	  $(function() {
    $('#datetimepicker').datepicker({
      pickTime: false
    });
  });
  
//Function used for the Push notifications


//push_notification1(<?php echo $id; ?>);
var shiftstatus = $('#shift_current_status').val();
//alert(shiftstatus);
				if(shiftstatus == 'IN')
				{
					push_notification1(<?php echo $id;?>);
					setInterval(function() 
					{
						if ($("#notify_alert").length > 0)
						{
							//console.log('<?php echo $id; ?>');	
							//push_notification(<?php echo $id;?>);
						}   
					}, 30000);		
			    } 
			    
							function push_notification1(driver_id)
								{
										/*var now = new Date(); 
										var months = (now.getMonth()+1);
										var dates = now.getDate(); 
										var hours = now.getHours();
										var mins = now.getMinutes();
										var secs = now.getSeconds();
										if(months < 10)
										{
											months = '0'+months;
										}	
										if(dates < 10)
										{
											dates = '0'+dates;
										}			
										if(hours < 10)
										{
											hours = '0'+hours;
										}		
										if(mins < 10)
										{
											mins = '0'+mins;
										}
										if(secs < 10)
										{
											secs = '0'+secs;
										}		
										var datetime = String(now.getFullYear()+'-'+months+'-'+dates+' '+hours+':'+mins+':'+secs);
										*/
										var datetime = "<?php echo convert_timezone('now',TIMEZONE);?>";


									var dataS = "driver_id="+driver_id+"&datetime="+datetime;

									var response;
									$.ajax
									({ 			
										type: "POST",
										url: '<?php echo URL_BASE;?>'+"driver/push_notification", 
										data: dataS, 
										cache: false, 
										dataType: 'html',
										success: function(response) 
										{ 	
											var test_str = response;
											var start_pos = test_str.indexOf('|') + 1;
											var end_pos = test_str.indexOf('|',start_pos);
											var text_to_get = test_str.substring(start_pos,end_pos)
											
											if(text_to_get.length > 1){
												$('#ongoing_journey').show();
												$('#current_place').hide();
												$('#driver_logs_upcoming').hide();
												response = response.substr(text_to_get.length+4);
												$('#on_going_trip_btn').html(text_to_get);
												loadPage();
												//console.log(text_to_get);
											}
										
											$('#on_going_trip').html(response);
											var lat = $('#latitude').val();
											var lng = $('#longitude').val();
											
											showPosition(lat,lng);
										} 
										 
									});	
								}

//Driver Shift 
function drivershift(shiftstatus,driver_shift_insert_id)
{
	var msg;
	if(shiftstatus == 1)
	{
		msg = '<?php echo __('shift_in_alert');?>';
	}
	else
	{
		msg = '<?php echo __('shift_out_alert');?>';
	}
	if (confirm(msg)) 
	{
		///alert($('#ongoing_trip').length);
			var dataS = "shiftstatus="+shiftstatus+"&driver_shift_insert_id="+driver_shift_insert_id;
			//alert(shiftstatus);
			var response;
			$.ajax
			({ 			
				type: "POST",
				url: SrcPath+"driver/update_shift_status", 
				data: dataS, 
				cache: false, 
				dataType: 'html',
				success: function(response) 
				{ 	
					$('#shiftstatus').html(response);		
					if(shiftstatus == 1)
					{
						push_notification1(<?php echo $id;?>);
						setInterval(function() 
						{
							if ($("#notify_alert").length > 0)
							{
								//console.log('<?php echo $id; ?>');	
								push_notification(<?php echo $id;?>);
							}   
						}, 30000);		
					} 
					else
					{
						$('#on_going_trip,#on_going_trip_btn,#current_place').hide();
					}
				 }		 
			});	
		
	}
		 return false;
}

function do_driver_logout()
{
	var shiftstatus = $('#shift_current_status').val();
	//alert(shiftstatus);
	if(shiftstatus == 'IN')
	{
		if (confirm('<?php echo __('shift_out_alert');?>')) 
		{
			window.location= SrcPath+'driver/logout';
		}
		return false;
	}
	else
	{
		window.location= SrcPath+'driver/logout';
	}
	//<?php echo URL_BASE;?>driver/logout
}


</script>

<script>
	<?php
	if(sizeof($fare)>0)
	{
		?>
		$(function () {
        $('#container').highcharts({
            title: {
                text: 'My Transactions in Current Week',
                x: -20 //center
            },           
            xAxis: {
                categories: [<?php echo $month;?>]
            },
            yAxis: {
                title: {
                    text: 'Amount (<?php echo "₹"; ?>)'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: '<?php echo "₹"; ?>'
            },
            legend: {
                layout: 'vertical',               
                verticalAlign: 'middle',
                borderWidth: 0
            },
            series: [{
                name: 'Total Amount (<?php echo "₹"; ?>)',
                data: [<?php echo $fare;?>]
            }]
        });
    });
    
    <?php } ?>
    
    var Example1 = new (function() {
    var $stopwatch, // Stopwatch element on the page
        incrementTime = 70, // Timer speed in milliseconds
        currentTime = 0, // Current time in hundredths of a second
        updateTimer = function() 
        {			
            $stopwatch.html(formatTime(currentTime));
            currentTime += incrementTime / 10;
        },
        init = function() {
            $stopwatch = $('#stopwatch');
            Example1.Timer = $.timer(updateTimer, incrementTime, false);
        };
    this.resetStopwatch = function() {
        currentTime = 0;
        this.Timer.stop().once();
    };
    $(init);
});




</script>
