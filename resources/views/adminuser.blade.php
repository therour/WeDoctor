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
      <div class="col-sm-12 about-colom text-left clearfix">
        <h1>User</h1>

        <table class="table table-hover table-striped table-bordered table-condensed">
          <thead>
            <tr>
              <th width="50px">No.</th>
              <th>Nama User</th>
              <th>Username</th>
              <th>Email</th>
              <th>Tanggal Lahir</th>
              <th>Jenis Kelamin</th>
              <th>NIK</th>
              <th width="45px"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $user->nama }}</td>
              <td>{{ $user->username }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->tanggal_lahir }}</td>
              <td>{{ $user->jenis_kelamin }}</td>
              <td>{{ $user->nik }}</td>
              <td>

                <form id="delete-form" action="/admin/user/delete/{{ $user->id }}" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus {{ $user->nama }} dari database?');">
                  {{csrf_field()}}
                  <button type="submit" class="btn btn-outline-info float-right clearfix"><img src="{{asset('/img/icon/delete.png')}}" alt="Error load image"></button>
                  <input type="hidden" name="_method" value="DELETE">
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
@endsection