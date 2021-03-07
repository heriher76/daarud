<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Daarud Dakwah</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ url('front/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ url('front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('front/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url('front/css/magnific-popup.css') }}">
    
    <link rel="stylesheet" href="{{ url('front/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url('front/css/style.css') }}">
    @yield('style')
  </head>
  <body>
    
	  @yield('header')

    @yield('banner')

    @yield('content')

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Daarud Dakwah.</h2>
              <p>Far far away, behind the word mountains, far from the countries.</p>
              <ul class="ftco-footer-social list-unstyled mt-5">
                <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Profil Kami</h2>
              <ul class="list-unstyled">
                <li><a href="{{ url('/structure-organization') }}"><span class="fa fa-chevron-right mr-2"></span>Struktur Organisasi</a></li>
                <li><a href="{{ url('/visi-misi') }}"><span class="fa fa-chevron-right mr-2"></span>Visi dan Misi</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="{{ url('/') }}"><span class="fa fa-chevron-right mr-2"></span>Beranda</a></li>
                <li><a href="{{ url('/visi-misi') }}"><span class="fa fa-chevron-right mr-2"></span>Visi dan Misi</a></li>
                <li><a href="{{ url('/structure-organization') }}"><span class="fa fa-chevron-right mr-2"></span>Struktur Organisasi</a></li>
                <li><a href="{{ url('/gallery-photo') }}"><span class="fa fa-chevron-right mr-2"></span>Galeri</a></li>
                <li><a href="{{ url('/news') }}"><span class="fa fa-chevron-right mr-2"></span>Berita</a></li>
                <li><a href="{{ url('/work-program') }}"><span class="fa fa-chevron-right mr-2"></span>Program Kerja</a></li>
                <li><a href="{{ url('/services') }}"><span class="fa fa-chevron-right mr-2"></span>Layanan</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Company</h2>
              <ul class="list-unstyled">
                <li><span class="icon fa fa-map"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                <li><a href="#"><span class="icon fa fa-envelope pr-4"></span><span class="text">info@daarud-dakwah.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
	
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with love by <a href="https://heriher76.github.io" target="_blank">NalarC0de</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ url('front/js/jquery.min.js') }}"></script>
  <script src="{{ url('front/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ url('front/js/popper.min.js') }}"></script>
  <script src="{{ url('front/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('front/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ url('front/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ url('front/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ url('front/js/owl.carousel.min.js') }}"></script>
  <script src="{{ url('front/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ url('front/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ url('front/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ url('front/js/google-map.js') }}"></script>
  <script src="{{ url('front/js/main.js') }}"></script>
  @yield('script')
  </body>
</html>