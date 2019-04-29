  <h1 style="text-align: center;">La hacer click me dibuja un tringul si el punto esta dentro de la cuadra del trabajo, de lo contrario un circulo y muestra mensaje por consola</h1>
  <div id="map" style="height: 100%;"></div>
    
    <script>
      // This example requires the Geometry library. Include the libraries=geometry
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=geometry">

      function initMap() {
          var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -24.782118, lng: -65.424809},
            zoom: 18,
          });

          //Defino las coordenadas del poligono
          var poligonoCoords = [
            {lat: -24.781511, lng: -65.425538},
            {lat: -24.781601, lng: -65.424170},
            {lat: -24.782766, lng: -65.424298},
            {lat: -24.782673, lng: -65.425637}
          ];

          //defino el poligono en este caso un triangulo
          var zonaExclusion = new google.maps.Polygon({paths: poligonoCoords});

          //este evento detecta el click en el mapa
          google.maps.event.addListener(map, 'click', function(e) {

              
              //pregunto si el punto esta dentro del triangulo si es verdadera resultColor = blue, de lo contrario resultColor = red
              var resultColor =
                  google.maps.geometry.poly.containsLocation(e.latLng, zonaExclusion) ?
                  'green' :
                  'red';

              //pregunto de el punto esta dentro del triangulo resultPath = triangulo, de lo contrario resultPath = circulo
              var resultPath =
                  google.maps.geometry.poly.containsLocation(e.latLng, zonaExclusion) ?
                  // A triangle.
                  "m 0 -1 l 1 2 -2 0 z" :
                  google.maps.SymbolPath.CIRCLE;

              //pregunto si el punto esta dentro del poligono muestro por consola si pertenece o no
              var pertenece = google.maps.geometry.poly.containsLocation(e.latLng, zonaExclusion) ?
                'pertenece':
                'no pertenece';
              console.log(pertenece);
              //puedo pasar las coordenadas directamente pasandole los puntos a un constructor
              /*myLatLng = new google.maps.LatLng ({lat: -24.782157, lng: -65.425383}); 
              var pertenece = google.maps.geometry.poly.containsLocation(myLatLng, zonaExclusion) ?
                'pertenece':
                'no pertenece';
                console.log(pertenece);*/


              //dibujo el marcador al hacer click pasando por parametro si es circulo o tringulo y si es azul o rojo    
              new google.maps.Marker({
                  position: e.latLng,
                  map: map,
                  icon: {
                      path: resultPath,
                      fillColor: resultColor,
                      fillOpacity: .2,
                      strokeColor: 'white',
                      strokeWeight: .5,
                      scale: 10
                  }
              });
          });         

      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABzPMNK54oH-kxGUaJSVIhfTpZAq3aFVk&libraries=geometry&callback=initMap"
         async defer></script>

</body>
</html>