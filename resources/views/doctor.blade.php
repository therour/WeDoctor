@extends('template.utama')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleDoctor.css')}}">
@endsection

@section('content')
<section class="container-fluid doctor">
  <div class="row docktor-row">
    <div class="col-sm-12 header-doctor">
      <h1>Doctor's</h1>
    </div>
  </div>

  <div class="row">
  @for ($i = 0; $i < 1; $i++)
    <div class="col-sm-6 col-md-4">
      <div class="card border-card">
        <div class="background-profile">
          <!-- Import background -->
          <div class="fotoprofile">
            <img class="rounded-circle" src="{{asset('/img/booking/doctor/doctor.png')}}" alt="Error load image">
          </div>
        </div>

        <div class="card-body spesialisasi-background">
          <h4 class="card-title">Nama Doctor</h4>
          <table>
            <tr>
              <td width="100px">Spesialisasi</td>
              <td width="20px">: </td>
              <td>abcdefghij</td>
            </tr>
            <tr>
              <td>Rating</td>
              <td>: </td>
              <td>Bintang 5</td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td>: </td>
              <td>abcdefghij</td>
            </tr>
            <tr>
              <td>Pengalaman</td>
              <td>: </td>
              <td>abcdefghij</td>
            </tr>
          </table>
          <a href='/spesialisasi/doctor/doctorschedule'><button type="button" class="btn btn-outline-info float-right">View Profil Doctor and Schedule</button></a>
        </div>
      </div>
    </div>
  @endfor
  </div>
</section>
@endsection