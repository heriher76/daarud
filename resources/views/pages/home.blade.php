@extends('layouts.app')

@section('header')
	@include('partials._header-home')
@endsection

@section('banner')
<section class="hero-wrap" style="background-image: url({{ url('front/images/bg_1.jpg') }});" data-stellar-background-ratio="0.3">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center">
      <div class="col-md-10 col-lg-7 ftco-animate d-flex align-items-end">
        <div class="text">
            <h1 class="mb-4">Pondok <span>Daarud Dakwah</span> </h1>
            @if($overview != null)
            <h4>{{ $overview->title }}</h4>
            <p style="font-size: 18px;">{!! $overview->description !!}</p>
            @endif
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('content')
<section class="ftco-portfolio">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12 portfolio-wrap">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-5 img js-fullheight" style="background-image: url(
                        @if($welcome != null)
                            {{ url('ucapan/'.$welcome->image) }}
                        @endif
                    );">
                        
                    </div>
                    <div class="col-md-7">
                        <div class="text pt-5 pl-0 pl-lg-5 pl-md-4 ftco-animate">
                            <div class="px-4 px-lg-4">
                                <div class="desc">
                                    <div class="top">
                                        <span class="subheading">Tentang</span>
                                        <h2 class="mb-4"><a href="work.html">Pimpinan Pondok</a></h2>
                                    </div>
                                    <div class="absolute">
                                        @if($welcome != null)
                                            <p>{!! $welcome->description !!}</p>
                                            <h4>{{ $welcome->name }}</h4>
                                            <h5> {{ $welcome->title }}</h5>
                                        @endif
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

<section>
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Galeri</span>
        <h2>Foto Terbaru</h2>
      </div>
    </div>
    <div class="row">
        @foreach($galleries as $gallery)
        <div class="col-md-4 ftco-animate">
          <div class="block-7">
            <div class="img" style="background-image: url({{ url('galeri/'.$gallery->name) }});"></div>
            <div class="p-4">
                <h4>{{ $gallery->title }}</h4>
                <p>{!! str_limit(strip_tags($gallery->desc), $limit = 90, $end = '...') !!}</p>
            </div>
          </div>
        </div>
        @endforeach
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
@endsection

@section('script')
<script id="dsq-count-scr" src="//forkom-puspajabar.disqus.com/count.js" async></script>
@endsection