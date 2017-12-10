@auth
<div class="alert alert-success" role="alert">
  <div class="text-center">
    Ini adalah halaman admin, Selamat datang {{ Auth::user()->nama }}
  </div>
</div>
@endauth