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
                <th>Nama Penyakit</th>
                <th>Dokter</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Mail</td>
                <td>Panu</td>
                <td>Sulaiman</td>
              </tr>
            </tbody>
          </table>
        </nav>
      </div>
    </div>
  </div>
</section>
@endsection