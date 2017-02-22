<!DOCTYPE html>
<html lang="en">
  <head>
        <title>Using MySQL and PHP with Google Maps</title>
        <meta name="description" content="">
        <meta name="author" content="">
    	
	<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
		width: 100%
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>

  <body>
    <?php include_once("header.php");?>
  
   <div id="map"></div>

    <script>
/*      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };*/

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(26, -106),
          zoom: 5
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('call_maps.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var Name = 'Station: ' + markerElem.getAttribute('Name');
              var SID = 'ID: ' + markerElem.getAttribute('SID');
              var Sequence = 'Sequence: ' + markerElem.getAttribute('Sequence');
//              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = Name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = Sequence
              infowincontent.appendChild(text);
//              infowincontent.appendChild(document.createElement('br'));
//              var text = document.createElement('text');
//              text.textContent = Sequence
//              infowincontent.appendChild(text);

//              var icon = customLabel[type] || {};
              var icon = {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyOQwiYAJYm13tmVKHzRJxyQa-BOMIt_o &callback=initMap">
    </script>
  <!-- /.container -->

  </body>
</html>
