@extends('front.layouts.app')

@section('page-title')
    WISATA ALAM BEBAS DI PULAU JAWA
@endsection

@section('content')

    <!-- Banner -->
    <section class="tm-banner">
        <!-- Flexslider -->
        <div class="flexslider flexslider-banner">
          <ul class="slides">
            <li>
                <div class="tm-banner-inner">
                    <h1 class="tm-banner-title">Find <span class="tm-yellow-text">The Best</span> Place</h1>
                    <p class="tm-banner-subtitle">For Your Holidays</p>
                    <a href="#more" class="tm-banner-link">Learn More</a>
                </div>
                <img src="img/banner-gunung.jpg" alt="Image" />
            </li>
            <li>
                <div class="tm-banner-inner">
                    <h1 class="tm-banner-title">Find <span class="tm-yellow-text">The Best</span> Place</h1>
                    <p class="tm-banner-subtitle">Wonderful Destinations</p>
                    <a href="#more" class="tm-banner-link">Learn More</a>
                </div>
              <img src="img/banner-panjat.jpg" alt="Image" />
            </li>
            <li>
                <div class="tm-banner-inner">
                    <h1 class="tm-banner-title">find <span class="tm-yellow-text">The Best</span> Place</h1>
                    <p class="tm-banner-subtitle">Great Place</p>
                    <a href="#more" class="tm-banner-link">Learn More</a>
                </div>
              <img src="img/banner-arjer.jpg" alt="Image" />
            </li>
            <li>
                <div class="tm-banner-inner">
                    <h1 class="tm-banner-title">find <span class="tm-yellow-text">The Best</span> Place</h1>
                    <p class="tm-banner-subtitle">Quiet</p>
                    <a href="#more" class="tm-banner-link">Learn More</a>
                </div>
              <img src="img/banner-goa.jpg" alt="Image" />
            </li>
          </ul>
        </div>
    </section>

    <!-- bg abu-abu -->
    <section class="container tm-home-section-1" id="more">
        <div class="section-margin-top">
            <div class="row">
                <div class="tm-section-header">
                    <div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
                    <div class="col-lg-6 col-md-6 col-sm-6"><h2 class="tm-section-title">KATEGORI WISATA ALAM BEBAS</h2></div>
                    <div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
                </div>
            </div>
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
                        <div class="tm-home-box-2">
                            <img src="{{ $category->image }}" alt="image" class="img-responsive">
                            <h3>{{ $category->detail_name }}</h3>
                            <div class="tm-home-box-2-container">
                                <i class="fa fa-paw tm-home-box-2-icon border-right"></i>
                                <a href="{{ route('front.destination.category-list', ['category' => str_slug($category->name)]) }}" class="tm-home-box-2-link">
                                    <span class="tm-home-box-2-description">LIHAT</span>
                                </a>
                                <i class="fa fa-paw tm-home-box-2-icon border-left"></i>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="home-description">Dapatkan perjalanan terbaik anda dengan mencari referensi wisata alam bebas dengan informasi yang sangat lengkap serta dilengkapi dengan informasi rute wisata yang diinginkan untuk mempermudah perjalanan anda.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- bg putih -->
    <section class="tm-white-bg section-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="tm-section-header section-margin-top">
                    <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
                    <div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">WISATA ALAM BEBAS TERPOPULER</h2></div>
                    <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
                </div>
                @foreach($destinations as $destination)
                    <div class="col-lg-6">
                        <div class="tm-home-box-3">
                            <div class="tm-home-box-3-img-container">
                                <img src="{{ $destination->thumbnail_image }}" alt="image" class="img-responsive">
                            </div>
                            <div class="tm-home-box-3-info">
                                <p class="tm-home-box-3-description">{{ $destination->abstract }}</p>
                                <div class="tm-home-box-2-container">
                                <a href="#" class="tm-home-box-2-link">
                                    <i class="fa fa-map-marker tm-home-box-2-icon border-right"></i>
                                </a>
                                <a href="{{ route('front.destination.show', ['title' => str_slug($destination->title)]) }}" class="tm-home-box-2-link">
                                    <span class="tm-home-box-2-description box-3">LIHAT</span>
                                </a>
                                <a href="login.html" class="tm-home-box-2-link">
                                    <i class="fa fa-ticket tm-home-box-2-icon border-left"></i>
                                </a>
                            </div>
                            </div>
                        </div>
                     </div>
                 @endforeach
            </div>
        </div>
    </section>
@endsection
