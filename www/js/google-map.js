window.onload = function () {
  cleaningLocations();
}

function cleaningLocations() {

  // Find the container for this map
  var mapContainer = document.getElementById('cleaning-location');

  // Options for the map
  var mapOptions = {
    center: new google.maps.LatLng( -41.172768, 174.893247),
    zoom: 10,
    scrollwheel: false,
    mapTypeControl:false,
    streetViewControl:false
  }

  // Create the map
  var theMap = new google.maps.Map( mapContainer, mapOptions );

  // Collection of location data for Islands around Wellington
  var locations = [
    ['Wellington Cleaning Location', -41.288784, 174.777223],
    ['Petone Cleaning Location', -41.225289, 174.871759],
    ['Whitby Cleaning Location', -41.116965, 174.893242]
  ];

  // Loop through each of the locations in the collection and display a marker
  for( var i=0; i<locations.length; i++ ) {

    // Grab the array containing info about an cleaning location
    var cleaning = locations[i];

    // Place the marker
    var marker = new google.maps.Marker( {
      position: new google.maps.LatLng( cleaning[1], cleaning[2] ),
      map: theMap,
      icon: 'img/cleaning-location-marker.png'
    } );

  }
};







