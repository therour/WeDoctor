@extends('template.utama')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleBookingStep2.css')}}">
@endsection

@section('content')
<!-- Booking Step 1 -->
<section class="container-fluid final-booking">
  <div class="row">
    <div class="col-sm-12 header-booking-final">
      <h1 class="text-center">Booking</h1>
    </div>
  </div>
  <div class="row final-booking-row justify-content-center align-items-center">
    <div class="pertama rounded-circle float-left">
      <h3 class="text-center angka">1</h3>
    </div>
    <div class="garis-booking1 float-left"> </div>
    <div class="kedua rounded-circle float-left">
      <h3 class="text-center angka">2</h3>
    </div>
    <div class="garis-booking2 float-left"> </div>
    <div class="ketiga rounded-circle float-left">
      <h3 class="text-center angka">3</h3>
    </div>
  </div>

  <!-- Content -->
  <div class="row final-booking-row-content justify-content-center align-items-center">
    <div class="col-sm-12">
      <h1 class="form-pasien">Data Diri Pasien</h1>
      <p class="form-pasien-p">Silahkan tekan tombol "Kirim" untuk mengirimkan data di bawah ini ke email anda.</p>
      <hr class="garis-content">
      
      <!-- Print data -->
      <div class="padding-booking">
        <h4 class="title-output">Data Pasien</h4>
        <table class="font-form">
          <tr>
            <td width=280px>Nama</td>
            <td width=15px>:</td>
            <td></td>
          </tr>
          <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td></td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>:</td>
            <td></td>
          </tr>
          <tr>
            <td>Riwayat Penyakit</td>
            <td>:</td>
            <td></td>
          </tr>
        </table>

        <h4 class="title-output">Data Doctor dan Berobat</h4>
        <table>
          <tr>
            <td width=280px>Nomor Urut</td>
            <td width=15px>:</td>
            <td></td>
          </tr>
          <tr>
            <td>Tanggal Berobat</td>
            <td>:</td>
            <td></td>
          </tr>
          <tr>
            <td>Lokasi Berobat</td>
            <td>:</td>
            <td></td>
          </tr>
          <tr>
            <td>Ruangan</td>
            <td>:</td>
            <td></td>
          </tr>
          <tr>
            <td>Doctor Tujuan</td>
            <td>:</td>
            <td></td>
          </tr>
          <tr>
            <td>Waktu Masuk Ruangan</td>
            <td>:</td>
            <td></td>
          </tr><tr>
            <td>Waktu Aman Sudah Harus di Lokasi</td>
            <td>:</td>
            <td></td>
          </tr>
        </table>
      </div>
      
      <!-- Button -->
      <div class="form-group button-margin text-right">
        <button type="button" class="btn btn-light">Send</button>
        <a href='/booking-step-3'><button type="button" class="btn btn-light">Next</button></a>
      </div>
    </div>
  </div>
</section>
@endsection