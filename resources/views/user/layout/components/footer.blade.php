@php
  $site_name = get_setting_value('_site_name');
  $location = get_setting_value('_location');
  $site_description = get_setting_value('_site_description');
  $email = get_setting_value('_email');
  $number = get_setting_value('_number');

  $facebook = get_setting_value('_facebook');
  $twitter = get_setting_value('_twitter');
@endphp

<!-- Footer Start -->
<footer class="footer">
    <div class="container">
      <div class="sec aboutus">
        <h2>{{ $site_name }}</h2>
        <p>
          {!! strip_tags($site_description) !!}
        </p>
        <ul class="sci">
          <li>
            @if ($facebook)
            <a href="{{ $facebook }}" target="blank"><img src="assets/img/001-facebook.png" alt="" class="img-1" /></a>
            @endif
          </li>
          <li>
            @if ($twitter)  
            <a href="{{ $twitter }}" target="blank"><img src="assets/img/002-twitter.png" alt="" class="img-2" /></a>
            @endif
          </li>
        </ul>
      </div>
      <div class="sec quicklinks">
        <h3>Useful links</h3>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Berita</a></li>
          <li><a href="#">Galeri</a></li>
        </ul>
      </div>
      <div class="sec quicklinks">
        <h3>Privacy</h3>
        <ul>
          <li><a href="#">Karir</a></li>
          <li><a href="#">Tentang Kami</a></li>
          <li><a href="#">Kontak Kami</a></li>
          <li><a href="#">Servis</a></li>
        </ul>
      </div>
      <div class="sec contact">
        <h3>Contact Info</h3>
        <ul class="info">
          <li>
            <span><img src="assets/img/ic_markunread_24px.png" alt="" /></span>
            <p><a href="mailto:{{ $email }}">{{ $email }}</a></p>
          </li>
          <li>
            <span><img src="assets/img/ic_call_24px.png" alt="" /></span>
            <p><a href="tel:{{ $number }}">{{ $number }}</a></p>
          </li>
          <li>
            <span><img src="assets/img/ic_place_24px.png" alt="" /></span>
            <span>{{ $location }}</span>
          </li>
        </ul>
      </div>
    </div>
  </footer>
  <div class="copyrightText">
    <p>Copyright ©2023 All rights reserved</p>
  </div>
  <!-- Footer End -->