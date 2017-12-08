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
          <div class="card-kanan float-left">
            <h4 class="margin-top-card-title">Nama Dokter</h4>
            <table class="card-text">
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

            <!-- Jadwal -->
            <h4 class="card-title">Jadwal Dokter</h4>
            <div class="custom-controls-stacked">
              <label class="custom-control custom-radio">
                <input id="jadwalDoctor" name="jadwalDoctor" type="radio" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description custom-control-description-font">Senin : 16.00-18.00 (Rs Panti Rapuh)</span>
              </label>
              <label class="custom-control custom-radio">
                <input id="jadwalDoctor" name="jadwalDoctor" type="radio" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description custom-control-description-font">Rabu : 18.30-20.00 (Puskesmas Condong)</span>
              </label>
              <label class="custom-control custom-radio">
                <input id="jadwalDoctor" name="jadwalDoctor" type="radio" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description custom-control-description-font">Sabtu : 16.30-19.00 (Home klinik Kita)</span>
              </label>
            </div>

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
          <!-- Modal Button -->
          <button type="button" class="btn btn-outline-info float-right" data-toggle="modal" data-target="#login">Booking</button>

          <!-- Modal -->
          <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">You must Login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!-- Form Login -->
                  <form action="" method="post">
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" class="form-control" id="username" placeholder="Nama User Anda">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="username" placeholder="Password Anda">
                    </div>
                  </form>
                  <!-- Registrasi -->
                  <p>Tidak mempunyai akun? Daftar <a href='/signup'>disini</a></p>
                </div>
                <!-- Button login -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <a href='/booking-step-1'><button type="button" class="btn btn-primary">Log In</button></a>
                </div>
              </div>
            </div>
          </div>

          @else
          <a href="/booking-step-1"><button type="button" class="btn btn-outline-info float-right">Booking</button></a>
          @endguest

        </div>
      </div>
    </div>
  </div>
</section>
@endsection