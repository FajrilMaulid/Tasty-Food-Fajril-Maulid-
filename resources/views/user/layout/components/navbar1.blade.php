@php
  $site_name = get_setting_value('_site_name');
@endphp

<!-- Navbar Start -->
<header>
    <nav class="nav-custom-1">
      <h2 class="logo">{{ $site_name }}</h2>
      <div class="nav-links-custom">
        <ul class="nav-menu">
          <li class="nav-menu-item"><a href="index.html" class="nav-menu-link">Home</a></li>
          <li class="nav-menu-item"><a href="about.html" class="nav-menu-link">Tentang</a></li>
          <li class="nav-menu-item"><a href="blog.html" class="nav-menu-link">Berita</a></li>
          <li class="nav-menu-item"><a href="galeri.html" class="nav-menu-link">Galeri</a></li>
          <li class="nav-menu-item"><a href="kontak.html" class="nav-menu-link">Kontak</a></li>
        </ul>
      </div>
      <div class="menu-toggle bx bxs-grid-alt"></div>
    </nav>
