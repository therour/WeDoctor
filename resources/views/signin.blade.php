@extends('template.utama')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleSignin.css')}}">
@endsection

@section('content')
<!-- Sign In -->
<section class="container-fluid signin">
  <div class="row signin-row justify-content-md-center align-items-center">
    <div class="signin-colom">
      <h1 class="text-center">Sign In</h1>
      <hr>
      <form action="" method="post">
        <div class="form-group form-margin-atas">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" placeholder="Nama User Anda">
        </div>
        <div class="form-group form-margin-bawah">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="username" placeholder="Password Anda">
        </div>
        <div class="form-group button-margin text-right">
          <button type="clear" class="btn btn-light">Clear</button>
          <button type="button" class="btn btn-light">Submit</button>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection