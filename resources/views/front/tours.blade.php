@extends('front.layouts.app')

@section('page-title')
    TOURS
@endsection

@section('content')
    <!-- Banner -->
    <section class="tm-banner">
        <!-- Flexslider -->
        <div class="flexslider flexslider-banner">
          <ul class="slides">
            <li>
                <div class="tm-banner-inner">
                    <h1 class="tm-banner-title"><span class="tm-yellow-text">Tour</span> Packages</h1>
                    <p class="tm-banner-subtitle">For Your Vacations</p>
                    <a href="#more" class="tm-banner-link">Learn More</a>
                </div>
              <img src="img/banner-gunung1.jpg" />
            </li>
            <li>
                <div class="tm-banner-inner">
                    <h1 class="tm-banner-title">Lorem <span class="tm-yellow-text">Ipsum</span> Dolor</h1>
                    <p class="tm-banner-subtitle">Wonderful Destinations</p>
                    <a href="#more" class="tm-banner-link">Learn More</a>
                </div>
              <img src="img/banner-panjat1.jpg" />
            </li>
            <li>
                <div class="tm-banner-inner">
                    <h1 class="tm-banner-title">Proin <span class="tm-yellow-text">Gravida</span> Nibhvell</h1>
                    <p class="tm-banner-subtitle">Velit Auctor</p>
                    <a href="#more" class="tm-banner-link">Learn More</a>
                </div>
              <img src="img/banner-arjer1.jpg" />
            </li>
            <li>
                <div class="tm-banner-inner">
                    <h1 class="tm-banner-title">Proin <span class="tm-yellow-text">Gravida</span> Nibhvell</h1>
                    <p class="tm-banner-subtitle">Velit Auctor</p>
                    <a href="#more" class="tm-banner-link">Learn More</a>
                </div>
              <img src="img/banner-goa1.jpg" />
            </li>
          </ul>
        </div>
    </section>

    <!-- bg abu-abu -->
    <section class="container tm-home-section-1" id="more">
        <div class="row">
            <!-- slider -->
            <div class="flexslider flexslider-about effect2">
              <ul class="slides">
                <li>
                  <img src="img/about-1.jpg" alt="image" />
                  <div class="flex-caption">
                    <h2 class="slider-title">Welcome To Holiday</h2>
                    <h3 class="slider-subtitle">Gravida nibh vel velit auctor aliquet enean sollicitudin lorem quis auctor</h3>
                    <p class="slider-description">Holiday is free Bootstrap v3.3.5 responsive template for tour and travel websites. You can download and use this layout for any purpose. You do not need to provide a credit link to us. If you have any question, feel free to <a href="http://www.facebook.com/templatemo" target="_parent">contact us</a>. <br><br>
                    Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum.</p>
                    <!-- <div class="slider-social">
                        <a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="tm-social-icon"><i class="fa fa-pinterest"></i></a>
                        <a href="#" class="tm-social-icon"><i class="fa fa-google-plus"></i></a>
                    </div> -->
                  </div>
                </li>
                <li>
                  <img src="img/about-1.jpg" alt="image" />
                  <div class="flex-caption">
                    <h2 class="slider-title">Thank you for choosing us!</h2>
                    <h3 class="slider-subtitle">Gravida nibh vel velit auctor aliquet enean sollicitudin lorem quis auctor, nisi elit consequat ipsum</h3>
                    <p class="slider-description">Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br><br>
                    Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris gestas quam, ut aliquam massa nisi.</p>
                    <!-- <div class="slider-social">
                        <a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="tm-social-icon"><i class="fa fa-pinterest"></i></a>
                        <a href="#" class="tm-social-icon"><i class="fa fa-google-plus"></i></a>
                    </div> -->
                  </div>
                </li>
                <li>
                  <img src="img/about-1.jpg" alt="image" />
                  <div class="flex-caption">
                    <h2 class="slider-title">More Programs to come</h2>
                    <h3 class="slider-subtitle">Gravida nibh vel velit auctor aliquet enean sollicitudin lorem quis auctor, nisi elit consequat ipsum</h3>
                    <p class="slider-description">Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris gestas quam, ut aliquam massa nisi.</p>
                    <!-- <div class="slider-social">
                        <a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="tm-social-icon"><i class="fa fa-pinterest"></i></a>
                        <a href="#" class="tm-social-icon"><i class="fa fa-google-plus"></i></a>
                    </div> -->
                  </div>
                </li>
                <li>
                  <img src="img/about-1.jpg" alt="image" />
                  <div class="flex-caption">
                    <h2 class="slider-title">Tour and Travel</h2>
                    <h3 class="slider-subtitle">Gravida nibh vel velit auctor aliquet enean sollicitudin lorem quis auctor, nisi elit consequat ipsum</h3>
                    <p class="slider-description">Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris gestas quam, ut aliquam massa nisi.</p>
                    <!-- <div class="slider-social">
                        <a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="tm-social-icon"><i class="fa fa-pinterest"></i></a>
                        <a href="#" class="tm-social-icon"><i class="fa fa-google-plus"></i></a>
                    </div> -->
                  </div>
                </li>
                <li>
                  <img src="img/about-1.jpg" alt="image" />
                  <div class="flex-caption">
                    <h2 class="slider-title">Welcome To Holiday</h2>
                    <h3 class="slider-subtitle">Gravida nibh vel velit auctor aliquet enean sollicitudin lorem quis auctor</h3>
                    <p class="slider-description">Holiday is free Bootstrap v3.3.5 responsive template for tour and travel websites. You can download and use this layout for any purpose. You do not need to provide a credit link to us. If you have any question, feel free to <a href="http://www.facebook.com/templatemo" target="_parent">contact us</a>. <br><br>
                    Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum.</p>
                    <!-- <div class="slider-social">
                        <a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="tm-social-icon"><i class="fa fa-pinterest"></i></a>
                        <a href="#" class="tm-social-icon"><i class="fa fa-google-plus"></i></a>
                    </div> -->
                  </div>
                </li>
              </ul>
            </div>
        </div>

        <div class="section-margin-top about-section">
            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tm-about-box-1">
                        <a href="#"><img src="img/c1.jpg" alt="img" class="tm-about-box-1-img"></a>
                        <h3 class="tm-about-box-1-title">Czar_Naja<br><span>( Developer )</span></h3>
                        <p class="margin-bottom-15 gray-text">Aplikasi Wisata Alam Bebas Di Pulau Jawa</p>
                        <div class="gray-text">
                            <a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="tm-social-icon"><i class="fa fa-pinterest"></i></a>
                            <a href="#" class="tm-social-icon"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
