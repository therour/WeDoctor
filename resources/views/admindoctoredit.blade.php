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
        <h1>Edit Doctor</h1>

        <!-- Nama Doctor -->
        <div class="form-group row">
          <label for="nama_doctor" class="col-sm-2 col-form-label"><b>Nama Doctor</b></label>
          <div class="col-sm-10">
            <input name="nama_doctor" type="text" class="form-control" id="nama_doctor">
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

        <a href='/admin/doctor'><button type="button" class="btn btn-outline-info float-right">Edit</button></a>

      </div>
  </div>
</section>
@endsection