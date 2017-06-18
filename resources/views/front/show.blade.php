@extends('front.layouts.app')

@section('page-title')
    DETAIL {{ $destination->title }}
@endsection

@section('content')
        <!-- Banner -->
    <section class="tm-banner">
        <!-- Flexslider -->
        <div class="flexslider flexslider-banner">
          <ul class="slides">
            @foreach($destination->images as $image)
                <li>
                    <div class="tm-banner-inner"></div>
                    <img src="{{ $image->link }}" class="banner" alt="Image" />
                </li>
            @endforeach
          </ul>
        </div>
    </section>

    <!-- gray bg -->
    <section class="container tm-home-section-1" id="more">
        <div class="row">
            <!-- slider -->
            <div class="flexslider effect2 effect2-detail tm-detail-box-1">
                <ul class="slides">
                    <li>
                        <img src="{{ $destination->thumbnail_image }}" alt="image" class="detail-image" />
                        <div class="detail-text">
                            <h2 class="slider-title">{{ $destination->title }}</h2>
                            <h3 class="slider-subtitle">Informasi Umum</h3>
                            <p class="slider-description">{!! $destination->description !!}</p>

                            <div class="slider-social">
                                <a href="../login.html" class="tm-social-icon"><i class="fa fa-ticket"></i></a>
                                <a href="#" class="tm-social-icon"><i class="fa fa-map-marker"></i></a>

                                <!-- <a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="tm-social-icon"><i class="fa fa-pinterest"></i></a>
                                <a href="#" class="tm-social-icon"><i class="fa fa-google-plus"></i></a> -->
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
