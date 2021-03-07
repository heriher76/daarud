<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">Daarud Dakwah.</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Beranda</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Profil
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('/visi-misi') }}">Visi dan Misi</a>
                <a class="dropdown-item" href="{{ url('/structure-organization') }}">Struktur Organisasi</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Galeri
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('/gallery-photo') }}">Foto Dokumentasi</a>
                <a class="dropdown-item" href="{{ url('/gallery-video') }}">Video</a>
            </div>
          </li>
          <li class="nav-item"><a href="{{ url('/news') }}" class="nav-link">Berita</a></li>
          <li class="nav-item"><a href="{{ url('/work-program') }}" class="nav-link">Program Kerja</a></li>
          <li class="nav-item"><a href="{{ url('/services') }}" class="nav-link">Layanan</a></li>
          <!-- <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li> -->
        </ul>
      </div>
    </div>
</nav>