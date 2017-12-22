@extends('template.utama')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleDoctor.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleFindJadwal.css')}}">
@endsection

@section('content')
<!-- Find Jadwal -->
<section class="container-fluid find-jadwal">
  <div class="row find-jadwal-row">
    <div class="col-sm-12 find-jadwal-colom">
      <h1 class="text-center">Find Jadwal</h1>
      <p>Cari jadwal doktor di hari yang anda inginkan</p>
      <form action="" class="form-inline" method="GET">
        <select name="hari" class="form-control">
          <option value="NULL">-- Silahkan Pilih Hari --</option>
          <option value="Senin">Senin</option>
          <option value="Selasa">Selasa</option>
          <option value="Rabu">Rabu</option>
          <option value="Kamis">Kamis</option>
          <option value="Jumat">Jumat</option>
          <option value="Sabtu">Sabtu</option>
        </select>
        <button type="submit" class="btn btn-light my-2 my-sm-0" style="margin-left: 10px;">Search</button>
      </form>
    </div>
  </div>
</section>


  <!-- Hasil pencarian -->
<section class="container-fluid doctor" style="padding: 30px;">
  <div class="row">
  @foreach ($jadwals as $jadwal)
    <div class="col-sm-6 col-md-4">
      <div class="card border-card">
        <div class="background-profile">
          <!-- Import background -->
          <div class="fotoprofile">
            <img class="rounded-circle" src="{{asset('/img/booking/doctor/doctor.png')}}" alt="Error load image">
          </div>
        </div>

        <div class="card-body spesialisasi-background">
          <h4 class="card-title">{{ $jadwal->doctors->nama_doctor }}</h4>
          <table>
            <tr>
              <td width="100px">Spesialisasi</td>
              <td width="20px">: </td>
              <td>{{ $jadwal->doctors->spesialisasi->nama_spesialisasi }}</td>
            </tr>
            <tr>
              <td>Rating</td>
              <td>: </td>
              <td>{{ $jadwal->doctors->rating }}/5</td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td>: </td>
              <td>{{ $jadwal->doctors->alamat_doctor }}</td>
            </tr>
            <tr>
              <td>Pengalaman</td>
              <td>: </td>
              <td>{{ $jadwal->doctors->pengalaman_doctor }}</td>
            </tr>
            <tr>
              <td>Hari</td>
              <td>: </td>
              <td>{{ $jadwal->hari }}</td>
            </tr>
            <tr>
              <td>Waktu</td>
              <td>: </td>
              <td>{{ $jadwal->waktu_mulai }} - {{ $jadwal->waktu_akhir }}</td>
            </tr>
          </table>
          <a href='/spesialisasi/doctor/doctorschedule/{{$jadwal->doctors->id}}'><button type="button" class="btn btn-outline-info float-right">View Profil Doctor and Schedule</button></a>
        </div>
      </div>
    </div>
  @endforeach
  </div>
</section>

@endsection