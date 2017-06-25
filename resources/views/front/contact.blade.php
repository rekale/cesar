@extends('front.layouts.app')

@section('page-title')
    WISATA ALAM BEBAS DI PULAU JAWA
@endsection

@section('content')
    <section class="tm-banner">
            <div class="row">
                <br>
                <!-- contact form -->
                    <div class="col-lg-12 col-md-12" id="map" style="height: 45em"></div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>

        function initMap() {
            //default location
            var jakarta = {lat: -6.229728, lng: 106.6894306};

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 8,
                center: jakarta,
            });

            getCurrentLocation(map);

            $.getJSON('/destinations').done(function (destinations) {
                destinations.forEach(function(destination){

                    var marker = new google.maps.Marker({
                      position: {"lat": destination.lat, "lng": destination.lng},
                      map: map,
                      title: destination.title
                    });

                    marker.addListener('click', function(){

                        var infowindow = new google.maps.InfoWindow({
                            content: destination.abstract
                        });

                        infowindow.open(map, this);
                    });

                });
            });

        }

        function getCurrentLocation(map) {
            var myLocationWindow = new google.maps.InfoWindow;

            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                      lat: position.coords.latitude,
                      lng: position.coords.longitude
                    };
                    myLocationWindow.setPosition(pos);
                    myLocationWindow.setContent('My Location.');
                    myLocationWindow.open(map);
                    map.setCenter(pos);

                    var marker = new google.maps.Marker({
                        position: {"lat": pos.lat, "lng": pos.lng},
                        map: map,
                        title: "my location"
                    });

                    marker.addListener('click', function(){

                        myLocationWindow.open(map, this);

                    });

                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                  // Browser doesn't support Geolocation
                  handleLocationError(false, infoWindow, map.getCenter());
            }
        }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgqbs48bxB-5cM3OhIEtQKya0AXpcRx8w&callback=initMap&region=ID&language=ID">
    </script>

@endsection
