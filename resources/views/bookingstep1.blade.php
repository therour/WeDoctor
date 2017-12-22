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
      <form class="padding-booking" action="/bookingstep2" method="POST">
        {{ csrf_field() }}
        <div class="bungkus-form">
          <input type="hidden" name="jadwal_doctor" value="{{ $jadwal->id }}">
          <!-- Nama -->
          <div class="form-group">
            <label class="label-font-size" for="nama">Nama Pasien</label>
            <input name="nama_pasien" type="text" class="form-control input-size" id="inputEmail4" placeholder="Nama Pasien">
          </div>
          <!-- Tanggal Lahir -->
          <div class="form-group">
            <label class="label-font-size" for="tanggalLahir">Tanggal Lahir</label>
            <input name="tanggal_lahir_pasien" type="date" class="form-control input-size" id="tanggalLahir">
          </div>
          <!-- Jenis Kelamin -->
          <div class="form-row">
            <div class="form-group col-sm-6">
              <label class="label-font-size" for="jenis_kelamin_pasien">Jenis Kelamin</label>
              <div class="input-group">
                <span class="input-group-addon input-size">
                  <input type="radio" aria-label="Radio button for following text input" name="jenis_kelamin_pasien" value="Laki-laki" checked>
                </span>
                <input type="text" class="form-control input-size" aria-label="Text input with radio button" value="Laki-laki" readonly>
              </div>
            </div>
            <div class="form-group col-sm-6">
              <div class="input-group j-k-margin">
                <span class="input-group-addon input-size">
                  <input type="radio" aria-label="Radio button for following text input" name="jenis_kelamin_pasien" value="Laki-laki">
                </span>
                <input type="text" class="form-control input-size" aria-label="Text input with radio button" value="Perempuan" readonly>
              </div>
            </div>
          </div>
          <!-- Alamat -->
          <div class="form-group">
            <label class="label-font-size" for="alamat_pasien">Alamat</label>
            <input name="alamat_pasien" type="text" class="form-control input-size" id="alamat" placeholder="Alamat pasien">
          </div>
          <!-- Riwayat Penyakit -->
          <div class="form-group">
            <label class="label-font-size" for="riwayat_sakit">Riwayat Penyakit</label>
            <textarea name="riwayat_sakit" class="form-control input-size" id="riwayatPenyakit" rows="3"></textarea>
          </div>
        </div>
        
        <!-- Button -->
        <div class="form-group button-margin text-right">
          <button type="clear" class="btn btn-light">Clear</button>
          <button type="submit" class="btn btn-light">Submit</button></a>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection