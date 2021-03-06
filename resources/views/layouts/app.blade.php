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
  </head>
  <body>
    
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
    <!-- END nav -->
    
    <section class="hero-wrap" style="background-image: url({{ url('front/images/bg_1.jpg') }});" data-stellar-background-ratio="0.3">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
          <div class="col-md-10 col-lg-7 ftco-animate d-flex align-items-end">
          	<div class="text">
	            <h1 class="mb-4">Pondok <span>Daarud Dakwah</span> </h1>
	            <p style="font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
	            <!-- <div class="d-flex meta">
		            <div class=""><p class="mb-0"><a href="#" class="btn btn-primary py-3 px-2 px-md-4">Explore Projects</a></p></div>
		            <a href="#" class="d-flex align-items-center button-link">
		            	<div class="button-video d-flex align-items-center justify-content-center">
			            	<span class="fa fa-play"></span>
			            </div>
			            <span>Watch our video</span>
		            </a>
		          </div> -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="ftco-section ftco-no-pb ftco-no-pt bg-primary">
      <div class="container">
        <div class="row d-flex no-gutters">
          <div class="col-md-3 d-flex align-items-stretch ftco-animate">
            <div class="media block-6 services services-bg d-block text-center px-4 py-5">
            	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-system"></span></div>
              <div class="media-body py-md-4">
                <h3>Design Process</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-items-stretch ftco-animate">
            <div class="media block-6 services services-bg services-darken d-block text-center px-4 py-5">
            	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-supervised"></span></div>
              <div class="media-body py-md-4">
                <h3>Supervision</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-items-stretch ftco-animate">
            <div class="media block-6 services services-bg services-lighten d-block text-center px-4 py-5">
            	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-accounting"></span></div>
              <div class="media-body py-md-4">
                <h3>Budget Planning</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-items-stretch ftco-animate">
            <div class="media block-6 services services-bg d-block text-center px-4 py-5">
            	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-blueprint"></span></div>
              <div class="media-body py-md-4">
                <h3>Build a Home For You</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section> -->

    <section class="ftco-section ftco-portfolio">

    	<div class="container">
    		<div class="row no-gutters">
	  			<div class="col-md-12 portfolio-wrap">
	  				<div class="row no-gutters align-items-center">
	  					<div class="col-md-5 img js-fullheight" style="background-image: url({{ url('front/images/work-1.jpg') }});">
	  						
	  					</div>
	  					<div class="col-md-7">
	  						<div class="text pt-5 pl-0 pl-lg-5 pl-md-4 ftco-animate">
	  							<div class="px-4 px-lg-4">
	  								<div class="desc">
		  								<div class="top">
			  								<span class="subheading">Exterior {12/07/2020}</span>
				  							<h2 class="mb-4"><a href="work.html">Geometric Building</a></h2>
			  							</div>
			  							<div class="absolute">
				  							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
				  							<p><a href="#" class="custom-btn">View Portfolio</a></p>
			  							</div>
		  							</div>
	  							</div>
	  						</div>
	  					</div>
	  				</div>
	  			</div>

	  		</div>
    	</div>
    </section>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-3">Happy Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                  	<span class="fa fa-quote-left"></span>
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                  	<span class="fa fa-quote-left"></span>
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                  	<span class="fa fa-quote-left"></span>
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                  	<span class="fa fa-quote-left"></span>
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                  	<span class="fa fa-quote-left"></span>
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Pricing</span>
            <h2>Price &amp; Plans</h2>
          </div>
        </div>
        <div class="row">
    			<div class="col-md-4 ftco-animate">
	          <div class="block-7">
	          	<div class="img" style="background-image: url({{ url('front/images/work-1.jpg') }});"></div>
	            <div class="p-4">
		            <ul class="pricing-text mb-2">
		              <li><span class="fa fa-check-circle mr-2"></span>Planning Solution</li>
		              <li><span class="fa fa-check-circle mr-2"></span>10 Construction Drawings</li>
		              <li><span class="fa fa-check-circle mr-2"></span>Selection Materials</li>
		              <li><span class="fa fa-check-circle mr-2"></span>Unlimited Revision</li>
		            </ul>
		          </div>
		          <div class="d-lg-flex align-items-center w-100 bg-light py-2 px-4">
								<span class="price"><sup>$</sup> <span class="number">78</span> <sub>/mos</sub></span>
								<p class="w-100 mb-0">
			            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
			          </p>
			        </div>
            </div>
	        </div>
	        <div class="col-md-4 ftco-animate">
	          <div class="block-7">
	          	<div class="img" style="background-image: url({{ url('front/images/work-2.jpg') }});"></div>
	            <div class="p-4">
		            <ul class="pricing-text mb-2">
		              <li><span class="fa fa-check-circle mr-2"></span>Planning Solution</li>
		              <li><span class="fa fa-check-circle mr-2"></span>10 Construction Drawings</li>
		              <li><span class="fa fa-check-circle mr-2"></span>Selection Materials</li>
		              <li><span class="fa fa-check-circle mr-2"></span>Unlimited Revision</li>
		            </ul>
		          </div>
		          <div class="d-lg-flex align-items-center w-100 bg-light py-2 px-4">
								<span class="price"><sup>$</sup> <span class="number">88</span> <sub>/mos</sub></span>
								<p class="w-100 mb-0">
			            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
			          </p>
			        </div>
            </div>
	        </div>
	        <div class="col-md-4 ftco-animate">
	          <div class="block-7">
	          	<div class="img" style="background-image: url({{ url('front/images/work-3.jpg') }});"></div>
	            <div class="p-4">
		            <ul class="pricing-text mb-2">
		              <li><span class="fa fa-check-circle mr-2"></span>Planning Solution</li>
		              <li><span class="fa fa-check-circle mr-2"></span>10 Construction Drawings</li>
		              <li><span class="fa fa-check-circle mr-2"></span>Selection Materials</li>
		              <li><span class="fa fa-check-circle mr-2"></span>Unlimited Revision</li>
		            </ul>
		          </div>
		          <div class="d-lg-flex align-items-center w-100 bg-light py-2 px-4">
								<span class="price"><sup>$</sup> <span class="number">98</span> <sub>/mos</sub></span>
								<p class="w-100 mb-0">
			            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
			          </p>
			        </div>
	          </div>
	        </div>
	      </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Blog</span>
            <h2>Kabar Terkini</h2>
          </div>
        </div>
        <div class="row d-flex">
          @foreach($newsNews as $news)
          <div class="col-md-3 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <div class="text">
                <a href="{{ $news->slug }}" class="block-20 img" style="background-image: url({{ url('berita/'.$news->thumbnail) }});">
	              </a>
	              <div class="meta mb-3">
                  <div><a href="{{ $news->slug }}">{{ $news->updated_at->formatLocalized('%A %d %B %Y') }}</a></div>
                  <br>
                  <div><a href="{{ $news->slug }}">by: {{ $news->user->name }}</a></div>
                  <!-- <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div> -->
                </div>
	              <h3 class="heading"><a href="{{ $news->slug }}">{{ $news->title }}</a></h3>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>		

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
    
  </body>
</html>