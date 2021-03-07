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
        <h1 class="mb-3 bread">Profil Personal</h1>
      </div>
    </div>
  </div>
</section>
@endsection

@section('content')
<section class="contact-section" style="padding-top: 50px;">
  <div class="container">
    <center>
    	<img class="img-responsive" style="max-width: 250px;" src="{{ url('structureorganization/'.$profile->image) }}" alt="">
    	<br><br>
    	<b><h2>{{ $profile->name }}</h2></b>
    	<h3>{{ $profile->title }}</h3>
    	<h4 style="color: grey">{{ $profile->email }}</h4>
    </center>
	<br>
	<h5>Tempat / Tanggal Lahir : {{ $profile->ttl }}</h5>
	<h5>Agama : {{ $profile->religion }}</h5>
  	<hr>
  	<h5>Riwayat Pendidikan</h5>
  	{!! $profile->schools !!}
  	<hr>
  	<h5>Riwayat Pekerjaan</h5>
  	{!! $profile->jobs !!}
  	<hr>
  	<h5>Riwayat Organisasi</h5>
  	{!! $profile->organizations !!}
  	<hr>
  	<h5>Prestasi / Penghargaan</h5>
  	{!! $profile->achievements !!}
  	<hr>
  	<h5>Tentang</h5>
  	{!! $profile->description !!}
  	<hr>
  </div>
</section>
@endsection
