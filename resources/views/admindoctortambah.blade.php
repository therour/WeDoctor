@extends('template.utamaadmin')

@section('cssadmin')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleAbout.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleSpesialisasi.css')}}">
@endsection

@section('contentadmin')
<!-- Admin Spesialisasi -->
<section class="container-fluid about">
    <div class="row-center">
      <div class="col-sm-12 about-colom text-left">
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
              <select name="spesialisasi_doctor" class="selectpicker" data-live-search="true">
                @foreach($spesialisasi_nama as $nama)
                  <option data-tokens="#" value="{{$nama->id}}">{{ $nama->nama_spesialisasi }}</option>
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
          
          


          <button type="submit" class="btn btn-outline-info float-right">Tambah</button>
        </form>
      </div>
    </div>
</section>
@endsection