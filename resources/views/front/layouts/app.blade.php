<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <script src="https://use.fontawesome.com/dda69024cd.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link href="{{ asset('css/bootstrap.min.css') }}"" rel="stylesheet">
  <link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}"" rel="stylesheet">
  <link href="{{ asset('css/flexslider.css') }}"" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}"" rel="stylesheet">
  <style type="text/css">
    #flash {
      position: fixed;
      top: 40em;
      right: 2em;
      width: 18em;
      z-index: 1000;
    }
    .tm-home-box-3-img-container img {
      width: 250px;
      height: 225px;
    }
    .tm-tours-box-1 img {
      width: 530px;
      height: 238px;
    }
    .tm-tours-box-1-info {
      height: 10em;
    }

    .navbar-inverse{
        height: 5em;
        border-radius: 0px;
        text-transform: capitalize;
    }
    .navbar-brand, .navbar-nav>li>a {
        padding-top: 25px;
        padding-bottom: 25px;
        font-weight: bold;
    }
    .nav a:hover{
        background: #FCDD44 !important;
        color: #000 !important;
    }
    .open a:hover {
        color: #9d9d9d !important;
    }
    .active {
        color: #000 !important;
        background: #FCDD44;
    }

  </style>
  @yield('styles')
  </head>
  <body class="tm-gray-bg">
    @include('front.partials.navbar')
    <div class="container-fluid">
      @include('flash::message')
      @yield('content')
    </div>

    <footer class="tm-black-bg">
        <div class="container">
            <div class="row">
                <p class="tm-copyright-text">Aplikasi Wisata Alam Bebas Di Pulau Jawa</p>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>              <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('js/moment.js') }}"></script>                         <!-- moment.js -->
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>                  <!-- bootstrap js -->
    <script type="text/javascript" src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.flexslider-min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/templatemo-script.js"') }}"></script>
    <script>
        // HTML document is loaded. DOM is ready.
        $(function() {
            $('div.alert').not('.alert-important').delay(3000).fadeOut(350);

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

            $('.flexslider').flexslider({
                controlNav: false
            });


        });
    </script>
    @yield('scripts')
 </body>
 </html>
