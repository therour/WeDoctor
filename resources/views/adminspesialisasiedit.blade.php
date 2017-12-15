@extends('template.utamaadmin')

@section('cssadmin')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleAbout.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleSpesialisasi.css')}}">
@endsection

@section('contentadmin')
<!-- Admin Spesialisasi -->
<section class="container-fluid about">
  <div class="container-fluid">
    <div class="row-center">
      <div class="col-sm-12 about-colom text-left">
        <h1>Edit Spesialisasi</h1>

        <form action="/admin/spesialisasi/edit/{{ $dataSpesialisasi->id }}" method="POST">
          {{ csrf_field() }}
            <!-- Nama Spesialisasi -->
            <div class="form-group row">
              <label for="nama_spesialisasi" class="col-sm-2 col-form-label"><b>Nama Spesialisasi</b></label>
              <div class="col-sm-10">
                <input name="nama_spesialisasi" type="text" class="form-control" id="nama_spesialisasi" value="{{ $dataSpesialisasi->nama_spesialisasi }}">
              </div>
            </div>
            <!-- Deskripsi Spesialisasi -->
            <div class="form-group row">
              <label for="deskripsi_spesialisasi" class="col-sm-2 col-form-label"><b>Deskripsi Spesialisasi</b></label>
              <div class="col-sm-10">
                <textarea name="deskripsi_spesialisasi" class="form-control" id="deskripsi_spesialisasi" rows="5">{{ $dataSpesialisasi->deskripsi_spesialisasi }}</textarea>
              </div>
            </div>

          <button type="submit" class="btn btn-outline-info float-right">Edit</button>

          <input type="hidden" name="_method" value="PUT">
        </form>

      </div>
    </div>
  </div>
</section>
@endsection