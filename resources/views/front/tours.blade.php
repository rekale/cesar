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
                    <h2 class="slider-title">APLIKASI WISATA ALAM BEBAS DI PULAU JAWA</h2>
                                        <p class="slider-description">
                                            Aplikasi Wisata Alam Bebas Di Pulau Jawa” hanya membahas tentang wisata alam Pendakian Gunung, Panjat Tebing, Arung Jeram, dan Susur Goa. Di tujukan kepada para penggiat alam bebas yang ingin melakukan petualangan di pulau jawa.
                                        </p>
                                        <p>
                                            Menurut penggunaannya, aplikasi ini memiliki  menu fungsi :
                                        </p>
                                        <p>
                                            <ol>
                                                <li><b>Menu "Kategori Wisata":</b> Adalah menu yang digunakan untuk membedakan daftar wisata sesuai dengan kategorinya ( Pendakian Gunung, Panjat Tebing, Arung Jeram, dan Susur Goa ).</li>
                                                <li><b>Menu “Daftar Wisata”:</b> Adalah menu yang digunakan untuk memilih daftar wisata yang diinginkan sesuai dengan kategori yang dipilih pada menu “Kategori Wisata”.</li>
                                                <li><b>Menu “Detail Wisata”:</b> Adalah menu yang digunakan untuk melihat informasi wisata secara detail. Dalam menu ini dapat dilakukan pemesanan tiket dan melihat lokasi wisata alam bebas dengan menekan tombol icon “Tiket” dan “peta”.</li>
                                                <li><b>Menu “Icon Tiket”:</b> Adalah menu yang terdapat dalam menu “Detail Wisata” yang berfungsi sebagai menu pemesanan tiket wisata yang diinginkan.</li>
                                                <li><b>Menu “Icon Peta”:</b> Adalah menu yang terdapat dalam menu “Detail Wisata” yang berfungsi sebagai menu yang dapat menampilkan lokasi wisata yang dipilih.</li>
                                            </ol>
                                        </p>
                                        <br>
                                        <p>
                                            Semoga aplikasi ini bermanfaat bagi para pengguna yang ingin melakukan petualangan alam bebas di pulau jawa
                                        </p>
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
