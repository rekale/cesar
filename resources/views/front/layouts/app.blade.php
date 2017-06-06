<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
  <link href="css/flexslider.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  </head>
  <body class="tm-gray-bg">
    <!-- Header -->
    <div class="tm-header">
                    <nav class="tm-nav">
                        <ul>
                            <li><a href="login.html">masuk/daftar</a></li>
                            <li><a href="contact.html">peta</a></li>
                            <li><a href="tours.html">bantuan</a></li>
                            <li><a href="about.html">tentang</a></li>
                            <li><a href="index.html" class="active">beranda</a></li></ul>
                            <p>WISATA ALAM BEBAS DI PULAU JAWA</p>
                    </nav>
    </div>

    @yield('content')

    <footer class="tm-black-bg">
        <div class="container">
            <div class="row">
                <p class="tm-copyright-text">Aplikasi Wisata Alam Bebas Di Pulau Jawa</p>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>              <!-- jQuery -->
    <script type="text/javascript" src="js/moment.js"></script>                         <!-- moment.js -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>                  <!-- bootstrap js -->
    <script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>   <!-- bootstrap date time picker js, http://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<!--
    <script src="js/froogaloop.js"></script>
    <script src="js/jquery.fitvid.js"></script>
-->
    <script type="text/javascript" src="js/templatemo-script.js"></script>              <!-- Templatemo Script -->
    <script>
        // HTML document is loaded. DOM is ready.
        $(function() {

            $('#hotelCarTabs a').click(function (e) {
              e.preventDefault()
              $(this).tab('show')
            })

            $('.date').datetimepicker({
                format: 'MM/DD/YYYY'
            });
            $('.date-time').datetimepicker();

            // https://css-tricks.com/snippets/jquery/smooth-scrolling/
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                  var target = $(this.hash);
                  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                  if (target.length) {
                    $('html,body').animate({
                      scrollTop: target.offset().top
                    }, 1000);
                    return false;
                  }
                }
            });
        });

        // Load Flexslider when everything is loaded.
        $(window).load(function() {
            // Vimeo API nonsense

/*
              var player = document.getElementById('player_1');
              $f(player).addEvent('ready', ready);

              function addEvent(element, eventName, callback) {
                if (element.addEventListener) {
                  element.addEventListener(eventName, callback, false)
                } else {
                  element.attachEvent(eventName, callback, false);
                }
              }

              function ready(player_id) {
                var froogaloop = $f(player_id);
                froogaloop.addEvent('play', function(data) {
                  $('.flexslider').flexslider("pause");
                });
                froogaloop.addEvent('pause', function(data) {
                  $('.flexslider').flexslider("play");
                });
              }
*/



              // Call fitVid before FlexSlider initializes, so the proper initial height can be retrieved.
/*

              $(".flexslider")
                .fitVids()
                .flexslider({
                  animation: "slide",
                  useCSS: false,
                  animationLoop: false,
                  smoothHeight: true,
                  controlNav: false,
                  before: function(slider){
                    $f(player).api('pause');
                  }
              });
*/




//  For images only
            $('.flexslider').flexslider({
                controlNav: false
            });


        });
    </script>
 </body>
 </html>
