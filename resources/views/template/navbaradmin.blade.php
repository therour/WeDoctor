<!-- Navigasi Atas -->
<nav class="navbar navbar-default nav-atas" id="upPage">
  <div class="container-fluid container-navigasi">
    <div class="navbar-header">
      <a class="navbar-brand" href='/admin'>
        <img src="{{asset('img/navigasi/logo.png')}}" alt="Error load image">
      </a>
    </div>
    <div class="akun justify-content-end">
      <ul class="akun nav">
        <li class="nav-item">
          <a class="nav-link">
            <img src="{{asset('img/navigasi/akun.png')}}" alt="Error load image" width="80">
          </a>
          <ul>
            <!-- LOGOUT -->
            <li class="text-center"><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><img src="{{asset('/img/icon/logout.png')}}" alt="Error load image"> Log Out</a></li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Navigasi Bawah -->
<nav class="navbar navbar-expand-md navbar-light bg-light nav-bawah">
  <!-- Tombol responsive -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Navigasi -->
  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link{{ Request::is('admin') ? ' active aktif' : ''}}" href='/admin'>Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link{{ Request::is('admin/spesialisasi') || Request::is('admin/spesialisasi/edit') || Request::is('admin/spesialisasi/tambah') ? ' active aktif' : ''}}" href='/admin/spesialisasi'>Spesialisasi's</a>
      </li>
      <li class="nav-item">
        <a class="nav-link{{ Request::is('admin/doctor') || Request::is('admin/doctor/edit') || Request::is('admin/doctor/tambah') ? ' active aktif' : ''}}" href='/admin/doctor'>Doctor's</a>
      </li>
      <li class="nav-item">
        <a class="nav-link{{ Request::is('admin/user') ? ' active aktif' : ''}}" href='/admin/user'>User's</a>
      </li>
    </ul>
  </div>
</nav>