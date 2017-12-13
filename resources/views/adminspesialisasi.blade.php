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
        <h1>Spesialisasi</h1>

        <table class="table table-hover table-striped table-bordered table-condensed">
          <thead>
            <tr>
              <th width="50px">No.</th>
              <th width="350px">Nama Spesialisasi</th>
              <th>Deskripsi Spesialisasi</th>
              <th width="45px"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($dataSpesialisasi as $spesialisasi)
            <tr>
              <td>{{ $spesialisasi->id }}</td>
              <td>{{ $spesialisasi->nama_spesialisasi }}</td>
              <td>{{ $spesialisasi->deskripsi_spesialisasi }}</td>
              <td>
                <label class="custom-control custom-radio" style="margin:auto;">
                  <input name="pilih" type="radio" class="custom-control-input">
                  <span class="custom-control-indicator" style="border:2px solid black;width:24px;height:24px;"></span>
                </label>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>

        <a href='/admin/spesialisasi/edit'><button type="button" class="btn btn-outline-info float-right" style="margin-left:20px;">Edit</button></a>

        <a href='/admin/spesialisasi/tambah'><button type="button" class="btn btn-outline-info float-right">Tambah</button></a>

      </div>
    </div>
  </div>
</section>
@endsection