@extends('template.utamaadmin')

@section('cssadmin')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleHome1.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleHomeAdmin.css')}}">
@endsection

@section('contentadmin')
<!-- Home Admin -->
<section class="container-fluid" style="padding:0">
  <div class="row">
    <div class="col-sm-12">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Selamat datang <strong>{{ Auth::user()->nama }}</strong>. Anda sukses login sebagai Admin.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>

  <div class="home col-md-12">
    <!-- Import gambar background lewat css -->
  </div>

</section>
@endsection