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
        <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Layanan <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-3 bread">Layanan</h1>
      </div>
    </div>
  </div>
</section>
@endsection

@section('content')
<section class="ftco-section">
    <div class="container">
        <div class="row">
        @foreach($services as $service)
          <div class="col-md-3 d-flex align-items-stretch ftco-animate">
            <div class="media block-6 services d-block text-center px-3 pb-4">
                <div class="icon d-flex justify-content-center align-items-center"><span class="single_feature_icon" style="width: 100px; height: 100px;"><img style="height: 100px; width: 100px;" src="{{ url('/icon/'.$service->icon) }}" alt=""></span></div>
              <div class="media-body py-md-4">
                <h3>{{ $service->title }}</h3>
                <p>{!! $service->description !!}</p>
              </div>
            </div>      
          </div>
        @endforeach
        </div>
    </div>
</section>
@endsection