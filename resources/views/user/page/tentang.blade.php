@php
  $site_name = get_setting_value('_site_name');
  $site_header1 = get_setting_value('_site_header1');
  $about = get_section_data('ABOUT');
  $sub_about = get_section_data('SUBABOUT');
  $visi = get_section_data('VISI');
  $sub_visi = get_section_data('SUBVISI');
  $misi = get_section_data('MISI');
@endphp

@extends('user.layout.apps')

@section('contents')
  <h1 class="main-logo">{{ $site_header1 }}</h1>
  </header>
  <!-- Navbar End -->
  
    <!-- Main Section Start -->
    <section class="main-about">
        <div class="main-paragraf">
          <h2><b>{{ $site_name }}</b></h2>
          <p><b>{!! strip_tags($about->content) !!}</b></p>
          <p>{!! strip_tags($sub_about->content) !!}</p>
        </div>
        <div class="main-paragraf-img">
          <img src="{{ Storage::url($about->thumbnail) }}" alt="" class="about-img-1" />
          <img src="{{ Storage::url($sub_about->thumbnail) }}" alt="" class="about-img-2" />
        </div>
      </section>
      <!-- Main SEction End -->
  
      <!-- Visi-Misi Section Start -->
      <section class="main-visi">
        <div class="visi-img">
          <img src="{{ Storage::url($visi->thumbnail) }}" alt="" class="sub-img-1" />
          <img src="{{ Storage::url($sub_visi->thumbnail) }}" alt="" class="sub-img-2" />
        </div>
        <div class="visi-paragraf">
          <h2>{{ $visi->title }}</h2>
          <p>
            {!! strip_tags($visi->content) !!}
          </p>
        </div>
      </section>
  
      <section class="main-misi">
        <div class="misi-paragraf">
          <h2>{{ $misi->title }}</h2>
          <p>
            {!! strip_tags($misi->content) !!}
          </p>
        </div>
        <img src="{{ Storage::url($misi->thumbnail) }}" alt="" class="misi-img" />
      </section>
      <!-- VIsi-Misi Section End -->
@endsection