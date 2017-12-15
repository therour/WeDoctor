@extends('template.utama')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleSpesialisasi.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleUpPage.css')}}">
@endsection

@section('content')
<section class="container-fluid booking">
  <div class="row">
    <div class="col-sm-12 header-booking">
      <h1>Booking</h1>
    </div>
  </div>

  <div class="row">
    
    @foreach ($dataSpesialisasi as $spesialisasi)
    <div class="col-sm-6 col-md-4">
      <div class="card border-card">
        <h4 class="card-header spesialisasi-background-title">{{ $spesialisasi->nama_spesialisasi }}</h4>
        <div class="card-body spesialisasi-background">
          <p class="card-text">{{ $spesialisasi->deskripsi_spesialisasi }}</p>
          <a href='/spesialisasi/{{$spesialisasi->id}}''><button type="button" class="btn btn-outline-info float-right">Find Doctor's</button></a>
        </div>
      </div>
    </div>
    @endforeach

  </div>
</section>
@endsection






