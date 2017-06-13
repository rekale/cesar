@extends('front.layouts.app')

@section('page-title')
    DAFTAR WISATA
@endsection

@section('content')
   <section class="container tm-home-section-1" id="more">
        <div class="section-margin-top">
            <div class="row">
                <div class="tm-section-header">
                    <div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
                    <div class="col-lg-6 col-md-6 col-sm-6"><h2 class="tm-section-title">Our Tours</h2></div>
                    <div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
                </div>
            </div>
            <div class="row">
                @if(! $destinations->isEmpty())
                    @foreach($destinations as $destination)
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="tm-tours-box-1">
                                <img src="{{ $destination->thumbnail_image }}" alt="image" class="img-responsive">
                                <div class="tm-tours-box-1-info">
                                    <div class="tm-tours-box-1-info-left">
                                        <p class="text-uppercase margin-bottom-20">{{ $destination->title }}</p>
                                        <p class="gray-text">{{ $destination->location }}</p>
                                    </div>
                                    <div class="tm-tours-box-1-info-right">
                                        <p class="gray-text tours-1-description">{{ $destination->abstract }}</p>
                                    </div>
                                </div>
                                <div class="tm-tours-box-1-link">
                                    <div class="tm-tours-box-1-link-left">
                                        {{ $category->name }}
                                    </div>
                                    <a href="{{ route('front.destination.show', ['title' => str_slug($destination->title)]) }}" class="tm-tours-box-1-link-right">
                                        LIHAT
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{ $destinations->links() }}
                @else
                    <center><p class="text-muted">Tidak ada destinasi di kategori ini.</p></center>
                @endif
            </div>
        </div>
    </section>
@endsection
