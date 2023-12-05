@php
  $site_name = get_setting_value('_site_name');
  $jumbotron = get_section_data('JUMBOTRON');
  $about = get_section_data('ABOUT');
  $berita1 = get_blog_data('MAIN');
  $berita2 = get_blog2_data('');
  $card = get_card_data();
@endphp

@extends('user.layout.app')

@section('content')

<!-- Hero Start -->
<section class="hero-section">
    <div class="row">
      <div class="col-lg-6">
        <div class="line-custom">
          <img src="assets/img/Line 2.svg" alt="" />
        </div>
        <h1 class="h1-custom">{{ $jumbotron->title }}</h1>
        <h1 class="h1-custom-2">{{ $site_name }}</h1>
        <p class="p-dark">
          {!! strip_tags($jumbotron->content) !!}
        </p>
        <a href="about.html"><button class="btn-dark-custom mt-3">TENTANG KAMI</button></a>
      </div>
      <div class="col-lg-6">
        <img src="{{ Storage::url($jumbotron->thumbnail) }}" alt="" class="img-hero" />
      </div>
    </div>
</section>
<!-- Hero End -->

<!-- About Start -->
<section class="about-section">
  <div class="row">
    <h2>{{ $about->title }}</h2>
    <p>{!! strip_tags($about->content) !!}</p>
    <div class="line-custom">
      <img src="assets/img/Line 2.svg" alt="" />
    </div>
  </div>
</section>
<!-- About End -->

<!-- Card Start -->
<section class="card-food">
  <div class="container">
    @php
      $i=1;
    @endphp
    @foreach ($card as $item)
    <div class="card">
      <img src="{{ Storage::url($item->thumbnail) }}" class="card-img-top" alt="..." />
      <div class="card-body">
        <h5 class="card-title">{{ $item->title }}</h5>
        <p class="card-text">{!! strip_tags($item->content) !!}</p>
      </div>
    </div>
    @php
      $i++;
    @endphp    
    @endforeach
  </div>
</section>
<!-- Card End -->

<!-- News start -->
<section class="news-card">
  <h2>BERITA KAMI</h2>
  <div class="container">
    <div class="card featured">
      <img src="{{ Storage::url($berita1->thumbnail) }}" class="card-img-top" alt="..." />
      <div class="card-body">
        <h5 class="card-title">{{ $berita1->title }}</h5>
        <p class="card-text">{!! strip_tags($berita1->content) !!}</p>
        <a href="{{ $berita1->link }}">Baca selengkapnya</a>
      </div>
    </div>
    @php
      $i=1;
    @endphp
    @foreach ($berita2 as $item)
    <div class="card">
      <img src="{{ Storage::url($item->thumbnail) }}" class="card-img-top" alt="..." />
      <div class="card-body">
        <h5 class="card-title">{{ $item->title }}</h5>
        <p class="card-text">{!! strip_tags($item->content) !!}</p>
        <a href="{{ $item->link }}">Baca selengkapnya</a>
      </div>
    </div>
    @php
      $i++;
    @endphp    
    @endforeach
  </div>
</section>
<!-- News End -->

<!-- Galeri Start -->
<section class="galeri-image">
  <div class="container">
    <h2>GALERI KAMI</h2>
    <div class="row">
      <div class="col-lg-4 col-sm-6">
        <div class="thumbnail">
          <div class="img-container">
            <img src="assets/img/brooke-lark-oaz0raysASk-unsplash.jpg" alt="" class="image" />
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="thumbnail">
          <div class="img-container">
            <img src="assets/img/ella-olsson-mmnKI8kMxpc-unsplash.jpg" alt="" class="image" />
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="thumbnail">
          <div class="img-container">
            <img src="assets/img/eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg" alt="" class="image" />
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="thumbnail">
          <div class="img-container">
            <img src="assets/img/jonathan-borba-Gkc_xM3VY34-unsplash.jpg" alt="" class="image" />
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="thumbnail">
          <div class="img-container">
            <img src="assets/img/mariana-medvedeva-iNwCO9ycBlc-unsplash.jpg" alt="" class="image" />
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="thumbnail">
          <div class="img-container">
            <img src="assets/img/monika-grabkowska-P1aohbiT-EY-unsplash.jpg" alt="" class="image" />
          </div>
        </div>
      </div>
    </div>
    <a href="galeri.html"><button class="btn-dark-custom mt-3">LIHAT LEBIH BANYAK</button></a>
  </div>
</section>
<!-- Galeri End -->

@endsection