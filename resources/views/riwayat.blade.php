@extends('template.utama')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleAbout.css')}}">
@endsection

@section('content')
<!-- Riwayat -->
<section class="container-fluid about">
  <div class="container">
    <div class="row-center">
      <div class="col-md-12 about-colom text-left">
        <h1 style="margin-bottom: 0;">Riwayat</h1>
      </div>
    </div>
  </div>

  <div class="ukuran-tabel" style="width:98%;margin: auto;">
    <table class="table table-hover table-striped table-bordered table-condensed">
      <thead>
        <tr>
          <th width="20px">No.</th>
          <th width="200px">Nama Pasien</th>
          <th width="160px">Tanggal Lahir</th>
          <th width="130px">Jenis Kelamin</th>
          <th width="180px">Alamat</th>
          <th width="200px">Riwayat Sakit</th>
          <th width="160px">Tanggal Berobat</th>
          <th>Dokter</th>
        </tr>
      </thead>
      <tbody>
        @foreach($riwayats as $riwayat)
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $riwayat->nama_pasien }}</td>
            <td>{{ $riwayat->tanggal_lahir_pasien->format('d F Y') }}</td>
            <td>{{ $riwayat->jenis_kelamin_pasien }}</td>
            <td>{{ $riwayat->alamat_pasien }}</td>
            <td>{{ $riwayat->riwayat_sakit }}</td>
            <td>{{ $riwayat->tanggal_berobat->format('d F Y') }}</td>
            <td>{{ $riwayat->jadwal->doctors->nama_doctor }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</section>
@endsection