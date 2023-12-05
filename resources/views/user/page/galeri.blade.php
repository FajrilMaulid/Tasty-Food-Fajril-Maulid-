@php
  $site_header3 = get_setting_value('_site_header3');
  $slider = get_slider_data('MAIN');
@endphp

@extends('user.layout.apps')

@section('contents')
  <h1 class="main-logo">{{ $site_header3 }}</h1>
  </header>
  <!-- Navbar End -->
  
    <!-- Slider Start -->
    <section class="slider-section">
        <div class="container">
          <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ Storage::url($slider[0]->thumbnail) }}" class="d-block w-100" alt="..." />
              </div>
              @foreach ($slider as $item)
              <div class="carousel-item">
                <img src="{{ Storage::url($item->thumbnail) }}" class="d-block w-100" alt="..." />
              </div>
              @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </section>
      <!-- Slider End -->
  
      <!-- Galeri Start -->
      <section class="galeri-image-2">
        <div class="container">
          <div class="thumbnail">
            <div class="img-container">
              <img src="assets/img/anh-nguyen-kcA-c3f_3FE-unsplash.jpg" alt="" class="image" />
            </div>
          </div>
          <div class="thumbnail">
            <div class="img-container">
              <img src="assets/img/anna-pelzer-IGfIGP5ONV0-unsplash.jpg" alt="" class="image" />
            </div>
          </div>
          <div class="thumbnail">
            <div class="img-container">
              <img src="assets/img/brooke-lark-1Rm9GLHV0UA-unsplash.jpg" alt="" class="image" />
            </div>
          </div>
          <div class="thumbnail">
            <div class="img-container">
              <img src="assets/img/brooke-lark-nBtmglfY0HU-unsplash.jpg" alt="" class="image" />
            </div>
          </div>
          <div class="thumbnail">
            <div class="img-container">
              <img src="assets/img/brooke-lark-oaz0raysASk-unsplash.jpg" alt="" class="image" />
            </div>
          </div>
          <div class="thumbnail">
            <div class="img-container">
              <img src="assets/img/eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg" alt="" class="image" />
            </div>
          </div>
          <div class="thumbnail">
            <div class="img-container">
              <img src="assets/img/fathul-abrar-T-qI_MI2EMA-unsplash.jpg" alt="" class="image" />
            </div>
          </div>
          <div class="thumbnail">
            <div class="img-container">
              <img src="assets/img/jimmy-dean-Jvw3pxgeiZw-unsplash.jpg" alt="" class="image" />
            </div>
          </div>
          <div class="thumbnail">
            <div class="img-container">
              <img src="assets/img/luisa-brimble-HvXEbkcXjSk-unsplash.jpg" alt="" class="image" />
            </div>
          </div>
          <div class="thumbnail">
            <div class="img-container">
              <img src="assets/img/sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg" alt="" class="image" />
            </div>
          </div>
          <div class="thumbnail">
            <div class="img-container">
              <img src="assets/img/sanket-shah-SVA7TyHxojY-unsplash.jpg" alt="" class="image" />
            </div>
          </div>
          <div class="thumbnail">
            <div class="img-container">
              <img src="assets/img/monika-grabkowska-P1aohbiT-EY-unsplash.jpg" alt="" class="image" />
            </div>
          </div>
        </div>
      </section>
      <!-- Galeri End -->
@endsection