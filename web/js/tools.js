function initialize() {
  var latlng = new google.maps.LatLng(-36.796085,-73.085719);
  var myOptions = {
    zoom: 15,
    center: latlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

  var marker = new google.maps.Marker({map: map, position: map.getCenter()});

  var infowindow = new google.maps.InfoWindow();
  infowindow.setContent('<p><b>Miel y Canela</b></p><p>Los conquistadores sur #42, Hualp&eacute;n</p><p>+56 41 <strong>2783885</strong></p>');
  google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map, marker);
  });
}
$(document).ready(function(){
  initialize();
});