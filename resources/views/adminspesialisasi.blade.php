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
        <h1>Spesialisasi</h1>

        <table class="table table-hover table-striped table-bordered table-condensed">
          <thead>
            <tr>
              <th width="50px">No.</th>
              <th width="250px">Nama Spesialisasi</th>
              <th>Deskripsi Spesialisasi</th>
              <th colspan="2" width="90px" align="center"><a href='/admin/spesialisasi/tambah'><button type="button" class="btn btn-outline-info clearfix" style="width:120px;">Tambah</button></a></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($dataSpesialisasi as $spesialisasi)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $spesialisasi->nama_spesialisasi }}</td>
              <td>{{ $spesialisasi->deskripsi_spesialisasi }}</td>
              <td>

                <a href="/admin/spesialisasi/edit/{{ $spesialisasi->id }}"><button type="button" class="btn btn-outline-info float-right clearfix"><img src="{{asset('/img/icon/edit.png')}}" alt="Error load image"></button></a>

              </td>
              <td>

                <form class="form-delete" action="/admin/spesialisasi/delete/{{ $spesialisasi->id }}" method="POST">
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