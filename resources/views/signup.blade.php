@extends('template.utama')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleSignup.css')}}">
@endsection

@section('content')

@if (count($errors) > 0)
  @foreach ($errors->all() as $error)  
  <h3>{{ $error }}</h3>
  @endforeach
@endif
<!-- Sign Up -->
<section class="container-fluid signup">
  <div class="row signup-row justify-content-md-center align-items-center">
    <div class="signup-colom">
      <h1 class="text-center">Sign Up</h1>
      <hr>

      <form action="{{ route('register') }}" method="POST">
        {{ csrf_field() }}

        <div class="bungkus-form">
          <!-- Username -->
          <div class="form-group form-margin-atas">
            <label for="username">Username</label>
            <input name="username" type="text" class="form-control" id="username" aria-describedby="userHelp" placeholder="Nama User Anda">
            <small id="userHelp" class="form-text text-muted">Username wajib di isi untuk keperluan Log In anda</small>
          </div>
          <!-- Password -->
          <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control" id="username" placeholder="Password Anda">
          </div>
          <!-- Nama -->
          <div class="form-row">
            <label for="nama">Nama</label>
            <input name="nama" type="text" class="form-control" id="inputEmail4" placeholder="Nama Lengkap Anda">
          </div>
          <!-- Jenis Kelamin -->
          <div class="form-row">
            <div class="form-group col-sm-6">
              <label for="jenisKelamin">Jenis Kelamin</label>
              <div class="input-group">
                <span class="input-group-addon">
                  <input type="radio" aria-label="Radio button for following text input" name="jenisKelamin" value="Laki-laki">
                </span>
                <input type="text" class="form-control" aria-label="Text input with radio button" value="Laki-laki" readonly>
              </div>
            </div>
            <div class="form-group col-sm-6">
              <div class="input-group j-k-margin">
                <span class="input-group-addon">
                  <input type="radio" aria-label="Radio button for following text input" name="jenisKelamin" value="Perempuan">
                </span>
                <input type="text" class="form-control" aria-label="Text input with radio button" value="Perempuan" readonly>
              </div>
            </div>
          </div>
          <!-- NIK -->
          <div class="form-group">
            <label for="nik">Nomor Induk Kependudukan</label>
            <input name="nik" type="number" class="form-control" id="nik" aria-describedby="nikHelp" placeholder="NIK yang ada di KTP anda">
            <small id="nikHelp" class="form-text text-muted">Pastikan nomor yang anda cantumkan sudah sesuai dengan KTP anda</small>
          </div>
          <!-- Email -->
          <div class="form-group">
            <label for="email">Email address</label>
            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email Anda">
            <small id="emailHelp" class="form-text text-muted">Email yang dicantumkan adalah email aktif anda</small>
          </div>
          <!-- Alamat -->
          <div class="form-group">
            <label for="alamat">Alamat KTP</label>
            <input name="alamat" type="text" class="form-control" id="alamat" placeholder="Alamat sesuai KTP">
          </div>
        </div>
        
        <!-- Button -->
        <div class="form-group button-margin text-right">
          <button type="clear" class="btn btn-light">Clear</button>
          <button type="submit" class="btn btn-light">Submit</button>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection