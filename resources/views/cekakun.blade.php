@extends('template.utama')

@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('/css/styleCekAkun.css')}}">
@endsection

@section('content')
	<section class="container-fluid about">
	  <div class="row about-row">
	    <div class="col-sm-12 text-left about-colom">
	      	<h1>Anda Belum Login</h1>

	      	<div class="card bg-light mb-3 text-center">
					  <div class="card-header">Untuk mengakses halaman booking, anda harus login terlebih dahulu</div>
					  <div class="card-body text-left">
					    <!-- Form Login -->
              <form action="{{ route('login.booking') }}" method="post">
        				{{ csrf_field() }}
                <div class="form-group">
                  <label for="username">Username</label>
                  <input name="username" type="text" class="form-control" id="username" placeholder="Nama User Anda">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input name="password" type="password" class="form-control" id="username" placeholder="Password Anda">
                </div>
								<div class="form-group">
              		<button type="submit" class="btn btn-primary float-right">Log In</button>
                </div>
              </form>
					  </div>
					  <div class="card-footer">
					    <p>Tidak mempunyai akun? Daftar <a href='/signup'>disini</a></p>
					  </div>
					</div>
				</div>
	    </div>
	  </div>
	</section>
@endsection