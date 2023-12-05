@php
  $site_header2 = get_setting_value('_site_header2');
@endphp

@extends('user.layout.apps')

@section('contents')
<h1 class="main-logo">{{ $site_header2 }}</h1>
</header>
<!-- Navbar End -->

<!-- Main Blog Start -->
<section class="main-blog">
    <div class="blog-berita">
      <img src="" alt="" class="img-berita" />
      <div class="blog-paragraf">
        <h2></h2>
        <p>
          
        </p>
        <a href=""><button class="btn-dark-custom mt-3">BACA SELENGKAPNYA</button></a>
      </div>
    </div>
  </section>
  <!-- Main Blog End -->

  <!-- Sub Blog Start -->
  <section class="sub-blog">
    <h2>BERITA LAINNYA</h2>
    <div class="container">
      <div class="card">
        <img src="assets/img/sanket-shah-SVA7TyHxojY-unsplash.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#">Baca selengkapnya</a>
        </div>
      </div>
      <div class="card">
        <img src="assets/img/sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#">Baca selengkapnya</a>
        </div>
      </div>
      <div class="card">
        <img src="assets/img/jimmy-dean-Jvw3pxgeiZw-unsplash.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#">Baca selengkapnya</a>
        </div>
      </div>
      <div class="card">
        <img src="assets/img/luisa-brimble-HvXEbkcXjSk-unsplash.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#">Baca selengkapnya</a>
        </div>
      </div>
      <div class="card">
        <img src="assets/img/sanket-shah-SVA7TyHxojY-unsplash.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#">Baca selengkapnya</a>
        </div>
      </div>
      <div class="card">
        <img src="assets/img/sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#">Baca selengkapnya</a>
        </div>
      </div>
      <div class="card">
        <img src="assets/img/jimmy-dean-Jvw3pxgeiZw-unsplash.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#">Baca selengkapnya</a>
        </div>
      </div>
      <div class="card">
        <img src="assets/img/luisa-brimble-HvXEbkcXjSk-unsplash.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#">Baca selengkapnya</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Sub Blog End -->
@endsection