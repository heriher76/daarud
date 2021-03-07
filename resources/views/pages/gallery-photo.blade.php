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
        <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Galeri <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-3 bread">Galeri Foto</h1>
      </div>
    </div>
  </div>
</section>
@endsection

@section('content')
<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Dokumentasi</span>
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
    <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          {{ $galleries->links() }}
        </div>
      </div>
    </div>
  </div>
</section>
@endsection