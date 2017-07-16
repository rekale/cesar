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
    <template id="info">
        <img src="" class="img" style="max-height: 50px;max-width: 100px">
        <h4 class="title"></h3>
        <div class="abstract" style="margin: 1em"></div>
    </template>

    <script>

        var currentLocation = null;

        function initMap() {
            //default location
            var jakarta = {lat: -6.229728, lng: 106.6894306};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 8,
                center: jakarta,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            var directionsDisplay = new google.maps.DirectionsRenderer({
              map: map
            });
            var directionsService = new google.maps.DirectionsService;
            var dest = {!! $destination ?? 'null' !!};
            getCurrentLocation(map, dest);

            var infowindow = new google.maps.InfoWindow({
                content: 'none'
            });

            if(dest != null) {
                var marker = new google.maps.Marker({
                  position: {"lat": dest.lat, "lng": dest.lng},
                  map: map,
                  title: dest.title
                });
                map.panTo({
                    lat: dest.lat,
                    lng: dest.lng
                });
                map.setZoom(10);

                marker.addListener('click', function(){
                    //create template
                    var template = document.querySelector('#info').content;
                    template.querySelector('.img').src = dest.thumbnail_image;
                    template.querySelector('.title').innerHTML = dest.title;
                    template.querySelector('.abstract').innerHTML = dest.abstract;
                    var clone = document.importNode(template, true);
                    //show it
                    infowindow.open(map, this);
                    infowindow.setContent(clone);

                    map.panTo({
                        lat: this.position.lat(),
                        lng: this.position.lng()
                    });

                    calculateAndDisplayRoute(directionsService, directionsDisplay, currentLocation, this)

                });
            } else {
                $.getJSON('/destinations').done(function (destinations) {

                    destinations.forEach(function(destination){

                        var marker = new google.maps.Marker({
                          position: {"lat": destination.lat, "lng": destination.lng},
                          map: map,
                          title: destination.title
                        });

                        marker.addListener('click', function(){
                            //create template
                            var template = document.querySelector('#info').content;
                            template.querySelector('.img').src = destination.thumbnail_image;
                            template.querySelector('.title').innerHTML = destination.title;
                            template.querySelector('.abstract').innerHTML = destination.abstract;
                            var clone = document.importNode(template, true);

                            //show it
                            infowindow.open(map, this);
                            infowindow.setContent(clone);

                            map.panTo({
                                lat: this.position.lat(),
                                lng: this.position.lng(),
                            });


                            calculateAndDisplayRoute(directionsService, directionsDisplay, currentLocation, this)

                        });

                    });
                });
            }


        }

        function getCurrentLocation(map, dest) {
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

                    if(dest == null) {
                        myLocationWindow.open(map);
                        map.panTo(pos);
                    }

                    marker = new google.maps.Marker({
                        position: {"lat": pos.lat, "lng": pos.lng},
                        map: map,
                        title: "my location"
                    });

                    marker.addListener('click', function(){

                        myLocationWindow.open(map, this);

                    });

                    currentLocation = marker;

                }, function() {
                    handleLocationError(true, myLocationWindow, map.getCenter());
                });

            } else {
                  // Browser doesn't support Geolocation
                  handleLocationError(false, myLocationWindow, map.getCenter());
            }
        }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB) {
        directionsService.route({
          origin: pointA.position,
          destination: pointB.position,
          travelMode: google.maps.TravelMode.DRIVING
        }, function(response, status) {
          if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgqbs48bxB-5cM3OhIEtQKya0AXpcRx8w&callback=initMap&region=ID&language=ID">
    </script>

@endsection
