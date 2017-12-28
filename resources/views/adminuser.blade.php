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
              <td valign="middle">{{ $no++ }}</td>
              <td valign="middle">{{ $user->nama }}</td>
              <td valign="middle">{{ $user->username }}</td>
              <td valign="middle">{{ $user->email }}</td>
              <td valign="middle">{{ $user->tanggal_lahir }}</td>
              <td valign="middle">{{ $user->jenis_kelamin }}</td>
              <td valign="middle">{{ $user->nik }}</td>
              <td valign="middle">

                <form class="form-delete" action="/admin/user/delete/{{ $user->id }}" method="POST">
                  {{csrf_field()}}
                  <button type="submit" class="btn btn-outline-info clearfix" style="margin-top: 0;"><img src="{{asset('/img/icon/delete.png')}}" alt="Error load image"></button>
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

@section('jsadmin')
<script>
  $('.form-delete').submit(function (e)
  {
    var form = this;
    e.preventDefault();
    swal
    ({
      title: 'Apa anda yakin?',
      text: "Ini akan menghapus secara permanent",
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