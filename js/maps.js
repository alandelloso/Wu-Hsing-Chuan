$(document).on('ready', myMaps);

function myMaps() {

google.maps.event.addDomListener(window, 'load', initialize);

}

function initialize(condition) {

  var laPlata = new google.maps.LatLng(-34.917748,-57.943246);

  var myOptions1 = {
    zoom: 16,
    center: laPlata,
    scrollwheel: false,
    draggable: false
  }

  var map1 = new google.maps.Map(document.getElementById("contacto__direccion__mapa"), myOptions1);

  var marker1 = new google.maps.Marker({
    position: laPlata,
    map: map1,
    title: "Sede Central"
  });


  if($(window).width() >= 1065) {
    map1.set('draggable', true);
  }

}