<!DOCTYPE html>
<html>
  <head>
    <style>
      #map {
        width: 500px;
        height: 400px;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
		 <script>
              function initMap(){
			    var mapDiv = document.getElementById('map')
			    var map = new google.maps.Map(mapDiv, {
                   center: {lat: 19.1071382, lng: 72.8348634}				
		           zoom:8		
				});
	            }		  
		 </script>
		<script src="https://www.google.co.in/maps/place/Dwarkadas+J.+Sanghvi+College+of+Engineering/@19.1071382,72.8348634,17z/data=!4m6!1m3!3m2!1s0x3be7c9c676018b43:0x75f29a4205098f99!2sDwarkadas+J.+Sanghvi+College+of+Engineering!3m1!1s0x3be7c9c676018b43:0x75f29a4205098f99?hl=en"async defer></script>
	</body>
</html>	