@extends('template.utama')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleBookingStep1.css')}}">
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
      <p class="form-pasien-p">Isikan data diri pasien yang di daftarkan</p>
      <hr class="garis-content">
      <form class="padding-booking" action="" method="post">
        <div class="bungkus-form">
          <!-- Nama -->
          <div class="form-row">
            <div class="form-group col-sm-6">
              <label class="label-font-size" for="namaDepan">Nama Depan</label>
              <input type="text" class="form-control input-size" id="inputEmail4" placeholder="Nama Depan">
            </div>
            <div class="form-group col-sm-6">
              <label class="label-font-size" for="namaBelakang">Nama Belakang</label>
              <input type="text" class="form-control input-size" id="inputPassword4" placeholder="Nama Belakang">
            </div>
          </div>
          <!-- Tanggal Lahir -->
          <div class="form-group">
            <label class="label-font-size" for="tanggalLahir">Tanggal Lahir</label>
            <input type="date" class="form-control input-size" id="tanggalLahir">
          </div>
          <!-- Jenis Kelamin -->
          <div class="form-row">
            <div class="form-group col-sm-6">
              <label class="label-font-size" for="jenisKelamin">Jenis Kelamin</label>
              <div class="input-group">
                <span class="input-group-addon input-size">
                  <input type="radio" aria-label="Radio button for following text input" name="jenisKelamin">
                </span>
                <input type="text" class="form-control input-size" aria-label="Text input with radio button" value="Laki-laki" readonly>
              </div>
            </div>
            <div class="form-group col-sm-6">
              <div class="input-group j-k-margin">
                <span class="input-group-addon input-size">
                  <input type="radio" aria-label="Radio button for following text input" name="jenisKelamin">
                </span>
                <input type="text" class="form-control input-size" aria-label="Text input with radio button" value="Perempuan" readonly>
              </div>
            </div>
          </div>
          <!-- Alamat -->
          <div class="form-group">
            <label class="label-font-size" for="alamat">Alamat</label>
            <input type="text" class="form-control input-size" id="alamat" placeholder="Alamat pasien">
          </div>
          <!-- Riwayat Penyakit -->
          <div class="form-group">
            <label class="label-font-size" for="riwayatPenyakit">Riwayat Penyakit</label>
            <textarea class="form-control input-size" id="riwayatPenyakit" rows="3"></textarea>
          </div>
        </div>
        
        <!-- Button -->
        <div class="form-group button-margin text-right">
          <button type="clear" class="btn btn-light">Clear</button>
          <a href='/bookingstep2'><button type="button" class="btn btn-light">Submit</button></a>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection