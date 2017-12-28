@extends('template.utama')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleAbout.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleProfile.css')}}">
@endsection

@section('content')
<!-- About -->
<section class="container-fluid about">
  <div class="row about-row">
    <div class="col-sm-12 about-colom">
      <h1>Profil</h1>

      <div class="card text-center">
        <div class="card-header spesialisasi-background-title">
          <b>Data Diri User</b>
        </div>

        <form class="form-edit" action="/profile/{{Auth::user()->id}}" method="POST">
        {{ csrf_field() }}

          <div class="card-body text-left spesialisasi-background">

            <!-- Username -->
            <div class="form-group row">
              <label for="username" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-10">
                <input name="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" value="{{Auth::user()->username}}">

                @if($errors->has('username'))
                  <div class="invalid-feedback">
                    @foreach($errors->get('username') as $message)
                      {{$message}}
                    @endforeach
                  </div>
                @endif
              </div>
            </div>

            <!-- Nama -->
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input name="nama" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" value="{{Auth::user()->nama}}">

                @if($errors->has('nama'))
                  <div class="invalid-feedback">
                    @foreach($errors->get('nama') as $message)
                      {{$message}}
                    @endforeach
                  </div>
                @endif
              </div>
            </div>

            <!-- NIK -->
            <div class="form-group row">
              <label for="nik" class="col-sm-2 col-form-label">NIK</label>
              <div class="col-sm-10">
                <input name="nik" type="number" class="form-control{{ $errors->has('nik') ? ' is-invalid' : '' }}" value="{{Auth::user()->nik}}">

                @if($errors->has('nik'))
                  <div class="invalid-feedback">
                    @foreach($errors->get('nik') as $message)
                      {{$message}}
                    @endforeach
                  </div>
                @endif
              </div>
            </div>

            <!-- Email -->
            <div class="form-group row">
              <label for="email" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input name="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" value="{{Auth::user()->email}}">

                @if($errors->has('email'))
                  <div class="invalid-feedback">
                    @foreach($errors->get('email') as $message)
                      {{$message}}
                    @endforeach
                  </div>
                @endif
              </div>
            </div>

            <!-- Alamat -->
            <div class="form-group row">
              <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-10">
                <textarea name="alamat" type="text" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" id="alamat">{{Auth::user()->alamat}}</textarea>

                @if($errors->has('alamat'))
                  <div class="invalid-feedback">
                    @foreach($errors->get('alamat') as $message)
                      {{$message}}
                    @endforeach
                  </div>
                @endif
              </div>
            </div>
          </div>

          <div class="card-footer spesialisasi-background-title">

            <button type="submit" class="btn btn-outline-info btn-md"><b>EDIT</b></button>

          </div>
          <input type="hidden" name="_method" value="PUT">
        </form>
      </div>
    </div>
  </div>
</section>
@endsection

@section('js')
<script>
  $('.form-edit').submit(function (e)
  {
    var form = this;
    e.preventDefault();
    swal
    ({
      title: 'Apa anda yakin?',
      text: "Ini akan mengubah data yang ada di database",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yakin',
      cancelButtonText: 'Tidak'
    }, 
    function (result) 
    {
      if (result) 
      {
        form.submit();
      }
    });
  });
</script>
@endsection