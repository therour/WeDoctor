@extends('template.utamaadmin')

@section('cssadmin')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleAbout.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleSpesialisasi.css')}}">
@endsection

@section('contentadmin')
<!-- Admin Spesialisasi -->
<section class="container-fluid about">
    <div class="row-center">
      <div class="col-sm-12 about-colom text-left clearfix">
        <h1>Tambah Doctor</h1>

        <form action="/admin/doctor/tambah" method="POST">
          {{ csrf_field() }}
          <!-- Nama Doctor -->
          <div class="form-group row">
            <label for="nama_doctor" class="col-sm-2 col-form-label"><b>Nama Doctor</b></label>
            <div class="col-sm-10">
              <input name="nama_doctor" type="text" class="form-control" id="nama_doctor">
            </div>
          </div>
          <!-- Spesialisasi -->
          <div class="form-group row">
            <label for="pengalaman_doctor" class="col-sm-2 col-form-label"><b>Spesialisasi Doctor</b></label>
            <div class="col-sm-10">
              <select name="spesialisasi_doctor" class="form-control">
                <option value="NULL">-- Silahkan Pilih Spesialisasi --</option>
                @foreach($spesialisasi_nama as $nama)
                  <option value="{{$nama->id}}">{{ $nama->nama_spesialisasi }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <!-- Alamat Doctor -->
          <div class="form-group row">
            <label for="alamat_doctor" class="col-sm-2 col-form-label"><b>Alamat Doctor</b></label>
            <div class="col-sm-10">
              <textarea name="alamat_doctor" class="form-control" id="alamat_doctor" rows="3"></textarea>
            </div>
          </div>
          <!-- Pengalaman -->
          <div class="form-group row">
            <label for="pengalaman_doctor" class="col-sm-2 col-form-label"><b>Pengalaman Doctor</b></label>
            <div class="col-sm-10">
              <textarea name="pengalaman_doctor" class="form-control" id="pengalaman_doctor" rows="3"></textarea>
            </div>
          </div>
          <!-- Jadwal 1 -->
          <div class="form-group row">
            <label for="jadwal_doctor" class="col-sm-2 col-form-label"><b>Jadwal Doctor</b></label>
            <div class="col-sm-3">
              <select name="hari" class="form-control">
                <option value="NULL">-- Silahkan Pilih Hari --</option>
                <option value="Senin">Senin</option>
                <option value="Selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
                <option value="Jumat">Jumat</option>
                <option value="Sabtu">Sabtu</option>
                <option value="Minggu">Minggu</option>
              </select>
            </div>
            <div class="col-sm-2">
              <input name="waktu_mulai" type="time" class="form-control" id="waktu_mulai" data-toggle="tooltip" data-placement="bottom" title="Waktu Mulai">
            </div>
            <div class="col-sm-2">
              <input name="waktu_akhir" type="time" class="form-control" id="waktu_akhir" data-toggle="tooltip" data-placement="bottom" title="Waktu Berakhir">
            </div>
            <div class="col-sm-3">
              <select name="tempat" class="form-control">
                <option value="NULL">-- Silahkan Pilih Tempat Praktik --</option>
                @foreach($tempat as $tempate)
                  <option value="{{$tempate->id}}">{{ $tempate->tempat }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <!-- Jadwal 2 -->
          <div class="form-group row">
            <label for="jadwal_doctor" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-3">
              <select name="hari" class="form-control">
                <option value="NULL">-- Silahkan Pilih Hari --</option>
                <option value="Senin">Senin</option>
                <option value="Selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
                <option value="Jumat">Jumat</option>
                <option value="Sabtu">Sabtu</option>
                <option value="Minggu">Minggu</option>
              </select>
            </div>
            <div class="col-sm-2">
              <input name="waktu_mulai" type="time" class="form-control" id="waktu_mulai" data-toggle="tooltip" data-placement="bottom" title="Waktu Mulai">
            </div>
            <div class="col-sm-2">
              <input name="waktu_akhir" type="time" class="form-control" id="waktu_akhir" data-toggle="tooltip" data-placement="bottom" title="Waktu Berakhir">
            </div>
            <div class="col-sm-3">
              <select name="tempat" class="form-control">
                <option value="NULL">-- Silahkan Pilih Tempat Praktik --</option>
                @foreach($tempat as $tempate)
                  <option value="{{$tempate->id}}">{{ $tempate->tempat }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <!-- Jadwal 3 -->
          <div class="form-group row">
            <label for="jadwal_doctor" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-3">
              <select name="hari" class="form-control">
                <option value="NULL">-- Silahkan Pilih Hari --</option>
                <option value="Senin">Senin</option>
                <option value="Selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
                <option value="Jumat">Jumat</option>
                <option value="Sabtu">Sabtu</option>
                <option value="Minggu">Minggu</option>
              </select>
            </div>
            <div class="col-sm-2">
              <input name="waktu_mulai" type="time" class="form-control" id="waktu_mulai" data-toggle="tooltip" data-placement="bottom" title="Waktu Mulai">
            </div>
            <div class="col-sm-2">
              <input name="waktu_akhir" type="time" class="form-control" id="waktu_akhir" data-toggle="tooltip" data-placement="bottom" title="Waktu Berakhir">
            </div>
            <div class="col-sm-3">
              <select name="tempat" class="form-control">
                <option value="NULL">-- Silahkan Pilih Tempat Praktik --</option>
                @foreach($tempat as $tempate)
                  <option value="{{$tempate->id}}">{{ $tempate->tempat }}</option>
                @endforeach
              </select>
            </div>
          </div>

          <button type="submit" class="btn btn-outline-info float-right">Tambah</button>
        </form>
      </div>
    </div>
</section>
@endsection