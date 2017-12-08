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
    @for ($i = 0; $i < 1; $i++)
    
    <!-- @if ($i % 3 == 0)  Untuk mengulang 3 kali -->
    <!-- <div class="row booking-row justify-content-md-center"> LIMIT 3 --> 
    <!-- @endif -->

    <div class="col-sm-6 col-md-4">
      <div class="card border-card">
        <h4 class="card-header spesialisasi-background-title">Spesialisasi</h4>
        <div class="card-body spesialisasi-background">
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro officiis corrupti aliquam voluptates. Autem hic voluptas impedit distinctio aut et quod magnam commodi amet rem.</p>
          <a href='/spesialisasi/doctor'><button type="button" class="btn btn-outline-info float-right">Find Doctor's</button></a>
        </div>
      </div>
    </div>
    
    <!-- @if ($i % 3 == 2) untuk enter sebanyak 3 -->
    <!-- </div> -->
    <!-- @endif -->

    @endfor
  </div>
</section>
@endsection






