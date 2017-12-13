@extends('template.utama')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleAbout.css')}}">
@endsection

@section('content')
<!-- About -->
<section class="container-fluid about">
  <div class="row about-row">
    <div class="col-sm-12 about-colom">
      <h1>Profil</h1>

      <div class="card text-center">
        <div class="card-header">
          <b>Data Diri User</b>
        </div>
        <div class="card-body text-left">
          <!-- Username -->
          <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              <input name="username" type="text" class="form-control" id="username" value="{{Auth::user()->username}}">
            </div>
          </div>
          <!-- Nama -->
          <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
              <input name="nama" type="text" class="form-control" id="nama" value="{{Auth::user()->nama}}">
            </div>
          </div>
          <!-- Jenis Kelamin -->
          
          <!-- NIK -->
          <div class="form-group row">
            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
            <div class="col-sm-10">
              <input name="nik" type="number" class="form-control" id="nik" value="{{Auth::user()->nik}}">
            </div>
          </div>
          <!-- Email -->
          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input name="email" type="email" class="form-control" id="email" value="{{Auth::user()->email}}">
            </div>
          </div>
          <!-- Alamat -->
          <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <input name="alamat" type="text" class="form-control" id="alamat" value="{{Auth::user()->alamat}}">
            </div>
          </div>
        </div>
        <div class="card-footer text-muted">
          <button type="button" class="btn btn-light btn-md"><b>EDIT</b></button>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection