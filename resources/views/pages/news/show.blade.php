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
        <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Profil <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-3 bread">{{ $news->title }}</h1>
      </div>
    </div>
  </div>
</section>
@endsection

@section('content')
<section class="ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 ftco-animate">
        <p>
          <center>
            <img src="{{ url('berita/'.$news->thumbnail) }}" alt="" class="img-fluid">
          </center>
        </p>
        <h2 class="mb-3">{{ $news->title }}</h2>
        <p>{!! $news->description !!}</p>
        <div class="tag-widget post-tag-container mb-5 mt-5">
          <div class="tagcloud">
            <a href="#" class="tag-cloud-link">{{ $news->user->name }}</a>
            <a href="#" class="tag-cloud-link">{{ $news->updated_at->formatLocalized('%A %d %B %Y') }}</a>
          </div>
        </div>
        <br>
        <div id="disqus_thread"></div>
      </div> <!-- .col-md-8 -->
      <div class="col-md-4 sidebar ftco-animate">
        <div class="sidebar-box">
          <form action="#" class="search-form">
            <div class="form-group">
              <span class="icon fa fa-search"></span>
              <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
            </div>
          </form>
        </div>

        <div class="sidebar-box ftco-animate">
          <h3>Berita Terbaru</h3>
          @foreach($latestNews as $itemNews)
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url({{ url('berita/'.$itemNews->thumbnail) }});"></a>
            <div class="text">
              <h3 class="heading"><a href="{{ url('/'.$itemNews->slug) }}">{{ $itemNews->title }}</a></h3>
              <div class="meta">
                <div><a href="{{ url('/'.$itemNews->slug) }}"><span class="icon-calendar"></span> {{ $itemNews->updated_at->formatLocalized('%A %d %B %Y') }}</a></div>
                <div><a href="{{ url('/'.$itemNews->slug) }}"><span class="icon-person"></span> {{ $itemNews->user->name }}</a></div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>

    </div>
  </div>
</section> <!-- .section -->
@endsection

@section('script')
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://daarud-dakwah.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endsection