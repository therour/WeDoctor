@extends('template.utama')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/css/scroll.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleAbout.css')}}">
@endsection

@section('content')
<!-- Riwayat -->
<section class="container-fluid about">
  <div class="container">
    <div class="row-center">
      <div class="col-sm-12 about-colom text-left">
        <h1>Riwayat</h1>

        <nav class="scroll">
          <table class="table table-hover table-striped table-bordered table-condensed">
            <thead>
              <tr>
                <th width="50px">No.</th>
                <th>Nama Pasien</th>
                <th>Dokter</th>
              </tr>
            </thead>
            <tbody>
              @foreach($riwayats as $riwayat)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $riwayat->nama_pasien }}</td>
                  <td>{{ $riwayat->jadwal->doctors->nama_doctor }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </nav>
      </div>
    </div>
  </div>
</section>
@endsection