@extends('layouts.app')

@section('header')
	@include('partials._header-home')
@endsection

@section('banner')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{ url('front/images/bg_2.jpg') }});" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Berita <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-3 bread">Hasil Pencarian Berita</h1>
      </div>
    </div>
  </div>
</section>
@endsection

@section('content')
<section class="ftco-section">
  <div class="container">
    <form action="{{ url('/news') }}" method="GET">
       <div class="form-group">
          <div class="input-group mb-3">
             <input type="text" name="search" placeholder='Cari Berita'
                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cari Berita'">
             <div class="input-group-append">
                <button class="btn" type="button"><i class="ti-search"></i></button>
             </div>
          </div>
       </div>
       <button class="btn btn-primary" type="submit">Cari</button>
    </form>
    <br>
    <div class="row d-flex">
      @foreach($news as $berita)
      <div class="col-md-3 d-flex ftco-animate">
        <div class="blog-entry justify-content-end">
          <div class="text">
            <a href="blog-single.html" class="block-20 img" style="background-image: url({{ url('berita/'.$berita->thumbnail) }});">
              </a>
              <div class="meta mb-3">
              <div><a href="#">{{ $berita->created_at->formatLocalized('%A %d %B %Y') }}</a></div>
              <div><a href="#">{{ $berita->user->name }}</a></div>
              <div><a href="{{ url('/'.$berita->slug) }}#disqus_thread" class="meta-chat disqus-comment-count"><span class="fa fa-comment"></span></a></div>
            </div>
              <h3 class="heading"><a href="#">{{ $berita->title }}</a></h3>
              <p>{!! str_limit(strip_tags($berita->description), $limit = 90, $end = '...') !!}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          {{ $news->links() }}
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('script')
<script id="dsq-count-scr" src="//forkom-puspajabar.disqus.com/count.js" async></script>
@endsection