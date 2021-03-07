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
        <h1 class="mb-3 bread">Visi & Misi</h1>
      </div>
    </div>
  </div>
</section>
@endsection

@section('content')
<section class="contact-section" style="padding-top: 50px;">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Daarud Dakwah</span>
          </div>
        </div>
        <center><h3><u>Visi</u></h3></center>
        <p>@if($visiMisi != null) {!! $visiMisi->visi !!} @endif</p>
        <br>
        <center><h3><u>Misi</u></h3></center>
        <p>@if($visiMisi != null) {!! $visiMisi->misi !!} @endif</p>
        <br>
      </div>
    </div>
  </div>
</section>
@endsection