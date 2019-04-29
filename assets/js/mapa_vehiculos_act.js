function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -24.717053, lng: -64.195735}, 
    zoom: 8
  });
         
  /*MAPA CON MARCADOR*/
  // declaro una variable que contiene la posicion del marcador
  var lajitas = {lat: -24.717053, lng: -64.195735};
  // centro el mapa en el punto que yo quiera en este caso lo centro en el mismo lugar que el marcador
  var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 8,
        center: lajitas
      });
    
  // grafico el marcador 
  var marker = new google.maps.Marker({
        position: lajitas, 
        map: map,
        title: 'Texto opcional'
  });
}