function initMap() {
        /*MAPA CON MARCADOR*/
        // declaro una variable que contiene la posicion del marcador
        var lajitas = {lat: -24.717053, lng: -64.195735};
        // centro el mapa en el punto que yo quiera en este caso lo centro en el mismo lugar que el marcador
        var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 7,
              center: lajitas
            });   

        //defino mi array de objetos
        var marcadores = [
		                	{
		                		coordenada: {lat: -24.717053, lng: -64.195735},
		                		icono:'../assets/img/marcador_azul.png',
		                		titulo: 'Cliente activo',
		                		mensaje:'Necesito asistencia tecnica'
		                	},
		                    {
		                    	coordenada: {lat: -24.279, lng: -65.326848},
		                    	icono:'../assets/img/marcador_gris.png'
		                    },
		                    {
		                    	coordenada: {lat: -24.585496, lng: -64.933306},
		                    	icono:'../assets/img/marcador_morado.png'
		                    },
		                    {
		                    	coordenada: {lat: -25.243444, lng: -64.040312},
		                    	icono:'../assets/img/marcador_rojo.png'
		                    },
		                    {
		                    	coordenada: {lat: -25.204480, lng: -64.931844},
		                    	icono:'../assets/img/marcador_azul.png'
		                    },
		                    {
		                    	coordenada: {lat: -24.121877, lng: -63.621145},
		                    	icono:'../assets/img/marcador_gris.png'
		                    },
		                    {
		                    	coordenada: {lat: -24.208124, lng: -63.229959},
		                    	icono:'../assets/img/marcador_morado.png'
		                    },
		                    {
		                    	coordenada: {lat: -24.897073, lng: -65.499568},
		                    	icono:'../assets/img/marcador_rojo.png'
		                    },
		                    {
		                    	coordenada: {lat: -25.049163, lng: -68.187363},
		                    	icono:'../assets/img/marcador_azul.png'
		                    },
		                    {
		                    	coordenada: {lat: -24.454219, lng: -68.036385},
		                    	icono:'../assets/img/marcador_gris.png'
		                    },
		                    {
		                    	coordenada: {lat: -25.050881, lng: -67.520631},
		                    	icono:'../assets/img/marcador_morado.png'
		                    },
		                    {
		                    	coordenada: {lat: -24.438154, lng: -67.096496},
		                    	icono:'../assets/img/marcador_rojo.png'
		                    },
		                    {
		                    	coordenada: {lat: -23.963813, lng: -66.289314},
		                    	icono:'../assets/img/marcador_azul.png'
		                    },
		                    {
		                    	coordenada: {lat: -26.267377, lng: -64.951120},
		                    	icono:'../assets/img/marcador_gris.png'
		                    },
		                    {
		                    	coordenada: {lat: -25.803581, lng: -64.629736},
		                    	icono:'../assets/img/marcador_morado.png'
		                    },
		                    {
		                    	coordenada: {lat: -25.453395, lng: -64.140814},
		                    	icono:'../assets/img/marcador_rojo.png'
		                    },
		                    {
		                    	coordenada: {lat: -24.830098, lng: -64.570226},
		                    	icono:'../assets/img/marcador_azul.png'
		                    },
		                    {
		                    	coordenada: {lat: -25.332879, lng: -63.547300},
		                    	icono:'../assets/img/marcador_gris.png'
		                    },
		                    {
		                    	coordenada: {lat: -24.551895, lng: -64.246965},
		                    	icono:'../assets/img/marcador_morado.png'
		                    },
		                    {
		                    	coordenada: {lat: -23.154335, lng: -63.838837},
		                    	icono:'../assets/img/marcador_rojo.png'
		                    },
		                    {
		                    	coordenada: {lat: -24.606201, lng: -63.162985},
		                    	icono:'../assets/img/marcador_azul.png'
		                    },
		                    {
		                    	coordenada: {lat: -25.485661, lng: -63.881681},
		                    	icono:'../assets/img/marcador_gris.png'
		                    },
		                    {
		                    	coordenada: {lat: -24.285426, lng: -63.021329},
		                    	icono:'../assets/img/marcador_morado.png'		                    	
		                    }

                   		];

		function agregarMarcador(Obj_Coordenada){
			var marker = new google.maps.Marker({
				position: Obj_Coordenada.coordenada,
				map: map,
				icon: Obj_Coordenada.icono,
				title: Obj_Coordenada.titulo
			});

			/*evento que al hacer click sobre el marcador me muestra un mensaje*/
			var infoWindow = new google.maps.InfoWindow({
		          content:Obj_Coordenada.mensaje
		        });

		        marker.addListener('click', function(){
		          infoWindow.open(map, marker);
		        });

		}

		for (var i = 0; i < marcadores.length; i++) {
			agregarMarcador(marcadores[i]);
		}
}