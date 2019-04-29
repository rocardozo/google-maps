    <div id="map" style="height: 100%"></div>
    <script>
      // This example requires the Drawing library. Include the libraries=drawing
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=drawing">

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -24.784098, lng: -65.421594},
          zoom: 15
        });

        var drawingManager = new google.maps.drawing.DrawingManager({
          //drawingMode indica que quiero que comience a dibujar polygon, circle, marker, etc
          drawingMode: google.maps.drawing.OverlayType.POLYGON,
          //drawingCpontrol indica si quiero que me muestre todas las opciones de dibujo
          drawingControl: true,
          //drawingControlOptions define propiedades para la barra de dibujo
          drawingControlOptions: {
            //posicion de la barra de dibujo
            position: google.maps.ControlPosition.TOP_CENTER,
            //defino los elementos a dibujar
            drawingModes: ['marker', 'circle', 'polygon', 'polyline', 'rectangle']
          },
          //defino propiedades del marcador
          markerOptions: {icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'},
          //defino propiedades del circulo
          circleOptions: {
            fillColor: '#ffff00',
            fillOpacity: 1,
            strokeWeight: 5,
            clickable: false,
            editable: true,
            zIndex: 1
          },
          //defino propiedades del poligono
          polygonOptions: {
            editable:true
          }
        });

        //defino evento para cuando se termina de dibujar una superposicion
        //overlaycomplete donde overlay representa circle, polygon, etc 
        google.maps.event.addListener(drawingManager, 'overlaycomplete', function(event) {
          if (event.type == 'polygon') {
            var poligono = event.overlay.getPath();

            //obtengo las coordenadas de un poligo de la matriz de objetos
            var vertices = event.overlay.getPath();
            for (var i =0; i < vertices.getLength(); i++) {
              var xy = vertices.getAt(i);
              console.log(  '<br>' + 'Coordinate ' + i + ':<br>' + xy.lat() + ',' + xy.lng() );
            }
          }
          if (event.type == 'circle') {
            var radius = event.overlay.getRadius();
            console.log(radius);
          }
        });

        //dibujo en el mapa la herramienta de dibujo con todas las opciones configuradas
        drawingManager.setMap(map);
      }
    </script>
    
    <!--se agrega la libería de dibujo drawing-->