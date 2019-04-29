    <div id="map" style="height: 100%; margin-top: -10%;"></div>
    <script>

      // This example creates a simple polygon representing the Bermuda Triangle.

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: {lat: -24.781511, lng: -65.425538},
          mapTypeId: 'terrain'
        });

        // Define the LatLng coordinates for the polygon's path.
        var triangleCoords = [
          {lat: -24.781511, lng: -65.425538},
          {lat: -24.781601, lng: -65.424170},
          {lat: -24.782766, lng: -65.424298},
          {lat: -24.782673, lng: -65.425637}
        ];

        // Construct the polygon.
        var zonaExclusion = new google.maps.Polygon({
          paths: triangleCoords,
          strokeColor: '#FF0000',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: '#FF0000',
          fillOpacity: 0.35
        });
        zonaExclusion.setMap(map);
        //obtengo las coordenadas de un poligo de la matriz de objetos
        var vertices = zonaExclusion.getPath();
        for (var i =0; i < vertices.getLength(); i++) {
          var xy = vertices.getAt(i);
          console.log(  '<br>' + 'Coordinate ' + i + ':<br>' + xy.lat() + ',' + xy.lng() );
        }
      }
    </script>