@extends('template.utamaadmin')

@section('cssadmin')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleAbout.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleSpesialisasi.css')}}">
@endsection

@section('contentadmin')
<!-- Admin Spesialisasi -->
<section class="container-fluid about">
  <div class="row-center">
    <div class="col-sm-12 about-colom text-left clearfix">
      <h1>Doctor</h1>

      <table class="table table-hover table-striped table-bordered table-condensed">
        <thead>
          <tr>
            <th width="50px">No.</th>
            <th width="350px">Nama Doctor</th>
            <th>Alamat Doctor</th>
            <th>Pengalaman Doctor</th>
            <th>Spesialisasi Doctor</th>
            <th width="45px"></th>
            <th width="45px"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($dataDoctor as $doctor)
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $doctor->nama_doctor }}</td>
            <td>{{ $doctor->alamat_doctor }}</td>
            <td>{{ $doctor->pengalaman_doctor }}</td>
            <td>{{ $doctor->spesialisasi->nama_spesialisasi }}</td>
            <td>

              <a href="/admin/doctor/edit/{{ $doctor->id }}"><button type="button" class="btn btn-outline-info float-right clearfix"><img src="{{asset('/img/icon/edit.png')}}" alt="Error load image"></button></a>

            </td>
            <td>
              <form action="/admin/doctor/delete/{{ $doctor->id }}" method="POST">
                {{csrf_field()}}
                <button type="submit" class="btn btn-outline-info float-right clearfix""><img src="{{asset('/img/icon/delete.png')}}" alt="Error load image"></button>

                <input type="hidden" name="_method" value="DELETE">
              </form>
            </td>
          </tr>
          @endforeach
          <tr>
            <a href='/admin/doctor/tambah'><button type="button" class="btn btn-outline-info float-right clearfix">Tambah</button></a>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>
@endsection