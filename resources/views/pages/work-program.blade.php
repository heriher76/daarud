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
        <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Beranda <i class="fa fa-chevron-right"></i></a></span> <span>Program Kerja <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-3 bread">Program Kerja</h1>
      </div>
    </div>
  </div>
</section>
@endsection

@section('content')
<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 wrap-about py-md-5 ftco-animate">
              <div class="heading-section pr-md-5">
                <ul>
                    <div class="accordion" id="accordionExample">
                        @foreach($workPrograms as $key => $workProgram)
                        <button class="btn btn-default" type="button" data-toggle="collapse" data-target="{{ '#collapse'.$key }}" aria-expanded="true" aria-controls="{{ 'collapse'.$key }}" style="font-size: 20px;">
                            <li><span class="">{{ $key+1 }}. {{ $workProgram->name }} <i class="fa fa-chevron-down"></i></span></li>
                        </button>
                        <div id="{{ 'collapse'.$key }}" class="collapse @if($key == 0) show @endif" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">{!! $workProgram->description !!}</div>
                        </div>
                        <br>
                        @endforeach
                    </div>
                </ul>
              </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Mitra</span>
        <h2>Mitra Kerja Sama</h2>
      </div>
    </div>
    <div class="row">
        @foreach($cooperations as $cooperation)
        <div class="col-md-4 ftco-animate">
            <div class="block-7">
                <div class="img" style="background-image: url({{ url('/kerja-sama/'.$cooperation->thumbnail) }});"></div>
                  <div class="d-lg-flex align-items-center w-100 bg-light py-2 px-4">
                    <h4>{{ $cooperation->name }}</h4>
                    <h5>{{ $cooperation->date }}</h5>
                  </div>
                  <div class="d-lg-flex align-items-center w-100 bg-light py-2 px-4">
                    <p style="font-family: 'Calibri';">{!! $cooperation->description !!}</p>
                  </div>
            </div>
        </div>
        @endforeach
      </div>
  </div>
</section>
@endsection