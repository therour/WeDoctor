@extends('template.utama')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleDoctorSchedule.css')}}">
@endsection

@section('content')
<!-- Booking Doctor -->
<section class="container-fluid doctor-schedule">
  <div class="row doctor-schedule-row">
    <div class="col-sm-12 header-doctor-schedule">
      <h1>Doctor's Schedule</h1>
    </div>
  </div>

  <div class="row doctor-schedule-row justify-content-lg-center">
    <div class="col-sm-12 card-padding">
      <div class="card">
        <h4 class="card-header card-header-font">Profil Doctor</h4>
        <div class="card-body">
          <div class="card-kiri float-left text-center">
            <!-- Import background -->
            <img src="{{asset('/img/booking/doctor/doctor.png')}}" alt="Error load image" class="rounded-circle pict-doctor">
          </div>
          @foreach($doctors as $doctor)
          <div class="card-kanan float-left">
            <h4 class="margin-top-card-title">{{ $doctor->nama_doctor }}</h4>
            <table class="card-text">
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
            @endforeach

            <!-- Jadwal -->
            <h4 class="card-title">Jadwal Dokter</h4>
            @foreach($jadwals as $jadwal)
            <div class="custom-controls-stacked">
              <label class="custom-control custom-radio">
                <input id="jadwalDoctor" name="jadwalDoctor" type="radio" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description custom-control-description-font">{{ $jadwal->hari }} : {{ $jadwal->waktu_mulai }} - {{ $jadwal->waktu_akhir }} ({{ $jadwal->tempat_id }})</span>
              </label>
            </div>
            @endforeach

          <!-- Sertifikat -->
          </div>
          <div class="container-sertifikat clearfix float-right">
            <h4 class="text-center sertifikat-font">Sertifikat</h4>
            <img class="img-thumbnail sertifikat" src="{{asset('/img/booking/doctor/sertifikat.jpg')}}" alt=""></td>
          </div>
          <div class="pemanis clearfix">
            <!-- untuk clear -->
          </div>
          
          @guest
            <!-- Button -->
            <a href="/cekakun"><button type="button" class="btn btn-outline-info float-right">Booking</button></a>
          @else
            <a href="/bookingstep1"><button type="button" class="btn btn-outline-info float-right">Booking</button></a>
          @endguest

        </div>
      </div>
    </div>
  </div>
</section>
@endsection