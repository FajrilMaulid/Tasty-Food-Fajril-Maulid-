@php
  $site_header4 = get_setting_value('_site_header4');
@endphp

@extends('user.layout.apps')

@section('contents')
  <h1 class="main-logo">{{ $site_header4 }}</h1>
  </header>
  <!-- Navbar End -->
  
    <!-- Contact Us Start -->
    <section class="contact-us">
        <div class="contact-in">
          <div class="contact-form">
            <h2>KONTAK KAMI</h2>
            <form>
              <div class="contact-grid">
                <div class="contact-left">
                  <input type="text" placeholder="Subject" class="contact-form-txt" />
                  <input type="text" placeholder="Name" class="contact-form-txt" />
                  <input type="text" placeholder="Email" class="contact-form-txt" />
                </div>
                <div class="contact-right">
                  <textarea placeholder="Message" class="contact-form-textarea"></textarea>
                </div>
              </div>
              <div class="contact-btn">
                <input type="submit" name="Submit" class="contact-form-btn" />
              </div>
            </form>
          </div>
          <div class="contact-logo">
            <div class="container">
              <div class="box">
                <img src="assets/img/Group 66.png" alt="" />
                <h3>EMAIL</h3>
                <p><a href="mailto:tastyfood@gmail.com">tastyfood@gmail.com</a></p>
              </div>
              <div class="box">
                <img src="assets/img/Group 67.png" alt="" />
                <h3>PHONE</h3>
                <p><a href="tel:+6281234567890">+62 812 3456 7890</a></p>
              </div>
              <div class="box">
                <img src="assets/img/Group 68.png" alt="" />
                <h3>LOCATION</h3>
                <p>Kota Bandung, Jawa Barat</p>
              </div>
            </div>
          </div>
          <div class="contact-map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.558806840512!2d107.66141237493612!3d-6.943211393056867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7c381e3c323%3A0x5f5160f6c9796e4b!2sCYBERLABS%20-%20Jasa%20Digital%20Marketing%20%7C%20Jasa%20Pembuatan%20Website%20%7C%20Jasa%20Pembuatan%20Aplikasi!5e0!3m2!1sid!2sid!4v1698198876505!5m2!1sid!2sid"
              width="100%"
              height="600"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </section>
      <!-- Contact Us End -->
@endsection