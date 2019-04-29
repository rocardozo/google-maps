<h2 class="text-center col-md-12">Vehículos Activos</h2>
<p class="text-center col-md-12">
  Este mapa muestra todos los autos activos.<br>
  <small>Al hacer click en el marcador se proporciona información de cada auto</small>
</p>
	<!--creo un div para dibujar el mapa-->
  <div class="col-md-8 offset-md-2 mb-5" id="map" style="height: 100%;">      
  </div>

<!--llamo al script que me crea el mapa en el div-->
<script>
  	function initMap() {
  		var salta = {lat: -24.788903, lng: -65.409581}
  		//creo el mapa
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 1,
            center: salta
        });

        //defino mi array de objetos
        <?php
        	if (count($resultado)>0) { ?>

        		var marcadores = [

        		<?php
	        		$j = 1;
	        		foreach ($resultado as $r){ 
	        				echo "{
	        						coordenada: {lat: ".$r->latitud.", lng: ".$r->longitud."},
								  },";			 
	                }
                ?>
                ];	
                console.log(marcadores);
                //grafico los marcadores
		        var markers = marcadores.map(function(location, i) {
		            console.log(marcadores[i].coordenada);	
		            return new google.maps.Marker({
		            	position: marcadores[i].coordenada,
		            	icon: marcadores[i].icono
		            });
		        });
		        
        <?php
        	} 
        ?>
        

        var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
}
</script>