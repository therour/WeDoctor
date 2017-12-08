@extends('template.utama')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleFindJadwal.css')}}">
@endsection

@section('content')
<!-- Find Jadwal -->
<section class="container-fluid find-jadwal">
  <div class="row find-jadwal-row">
    <div class="col-sm-12 find-jadwal-colom">
      <h1 class="text-center">Find Jadwal</h1>
      <p>Cari jadwal doktor di hari yang anda inginkan</p>
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="date" placeholder="Search" aria-label="Search">
        <button type="submit" class="btn btn-light my-2 my-sm-0">Search</button>
      </form>
    </div>
  </div>

  <!-- Hasil pencarian -->
  <!-- <div class="row find-jadwal justify-content-lg-center">
    <div class="col-sm-3 doctor-colom">
      <div class="card border-card">
        <div class="background-profile">

          <div class="fotoprofile">
            <img class="rounded-circle" src="../img/booking/doctor/doctor.png" alt="Error load image">
          </div>
        </div>

        <div class="card-body spesialisasi-background">
          <h4 class="card-title">Nama Doctor</h4>
          <table>
            <tr>
              <td width="100px">Spesialisasi</td>
              <td width="20px">: </td>
              <td>abcdefghij</td>
            </tr>
            <tr>
              <td>Rating</td>
              <td>: </td>
              <td>Bintang 5</td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td>: </td>
              <td>abcdefghij</td>
            </tr>
            <tr>
              <td>Pengalaman</td>
              <td>: </td>
              <td>abcdefghij</td>
            </tr>
            <tr>
              <td valign="top">Sertifikat</td>
              <td valign="top">: </td>
              <td><img class="img-thumbnail sertifikat" src="../img/booking/doctor/sertifikat.jpg" alt=""></td>
            </tr>
          </table>
          <button type="button" class="btn btn-outline-info float-right">Booking</button>
        </div>
      </div>
    </div> 
  </div>-->
</section>
@endsection