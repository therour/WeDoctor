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
  @foreach($doctors as $doctor)
    <div class="col-sm-6 col-md-4">
      <div class="card border-card">
        <div class="background-profile">
          <!-- Import background -->
          <div class="fotoprofile">
            <img class="rounded-circle" src="{{asset('/img/booking/doctor/doctor.png')}}" alt="Error load image">
          </div>
        </div>

        <div class="card-body spesialisasi-background">
          <h4 class="card-title">{{ $doctor->nama_doctor }}</h4>
          <table>
            <tr>
              <td width="100px">Spesialisasi</td>
              <td width="20px">: </td>
              <td>{{ $doctor->spesialisasi->nama_spesialisasi }}</td>
            </tr>
            <tr>
              <td>Rating</td>
              <td>: </td>
              <td>Bintang 5</td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td>: </td>
              <td>{{ $doctor->alamat_doctor }}</td>
            </tr>
            <tr>
              <td>Pengalaman</td>
              <td>: </td>
              <td>{{ $doctor->pengalaman_doctor }}</td>
            </tr>
          </table>
          <a href='/spesialisasi/doctor/doctorschedule/{{$doctor->id}}'><button type="button" class="btn btn-outline-info float-right">View Profil Doctor and Schedule</button></a>
        </div>
      </div>
    </div>
  @endforeach
  </div>
</section>
@endsection