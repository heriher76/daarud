@extends('layouts.app')

@section('header')
	@include('partials._header-home')
@endsection

@section('style')
  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection

@section('banner')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{ url('front/images/bg_2.jpg') }});" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Profil <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-3 bread">Struktur Organisasi</h1>
      </div>
    </div>
  </div>
</section>
@endsection

@section('content')
<section class="contact-section" style="padding-top: 50px;">
  <div class="container">
    <div class="row">
      <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
              <thead>
                  <tr>
                      <th> </th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Jabatan</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($structures as $structure)
                  <tr>
                      <td><img src="{{ url('structureorganization/'.$structure->image) }}" alt="" style="width: 100px;"></td>
                      <td>{{ $structure->name }}</td>
                      <td>{{ $structure->email }}</td>
                      <td>{{ $structure->title }}</td>
                      <td>
                          <a href="{{ url('structure-organization/'.$structure->id) }}" class="btn btn-success btn-xs waves-effect">Lihat</a>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
    </div>
  </div>
</section>
@endsection

@section('script')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

<script>
  $(document).ready(function() {
      $('.dataTable').DataTable();
  });
</script>
@endsection