<!-- Navigasi Atas -->
<nav class="navbar navbar-default nav-atas" id="upPage">
  <div class="container-fluid container-navigasi">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img src="{{asset('img/navigasi/logo.png')}}" alt="Error load image">
      </a>
    </div>
    <div class="akun justify-content-end">
      <ul class="akun nav">
        <li class="nav-item">
          <a class="nav-link" href="">
            <img src="{{asset('img/navigasi/akun.png')}}" alt="Error load image" width="80">
          </a>

          @guest <!-- Untuk Tamu -->
          <ul>
            <li class="text-center"><a href='/signin'><img src="{{asset('/img/icon/signin.png')}}" alt="Error load image"> Sign In</a></li>
            <li class="text-center"><a href='/signup'><img src="{{asset('/img/icon/signup.png')}}" alt="Error load image"> Sign Up</a></li>
          </ul>
          @else <!-- Untuk user yang udah login -->
          <ul>
            <li class="text-center"><a href='/profil'><img src="{{asset('/img/icon/profile.png')}}" alt="Error load image"> Profil</a></li>

            <!-- LOGOUT -->
            <li class="text-center"><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><img src="{{asset('/img/icon/logout.png')}}" alt="Error load image"> Log Out</a></li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>

          </ul>
          @endguest

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
      @guest
      <li class="nav-item">
        <a class="nav-link{{ Request::is('/') ? ' active aktif' : ''}}" href='/'>Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link{{ Request::is('spesialisasi') || Request::is('spesialisasi/doctor') || Request::is('spesialisasi/doctor/doctorschedule') ? ' active aktif' : ''}}" href='/spesialisasi'>Booking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link{{ Request::is('howtobooking') ? ' active aktif' : ''}}" href='/howtobooking'>How to Booking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link{{ Request::is('about') ? ' active aktif' : ''}}" href='/about'>About</a>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link{{ Request::is('/') ? ' active aktif' : ''}}" href='/'>Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link{{ Request::is('spesialisasi') ? ' active aktif' : ''}}" href='/spesialisasi'>Booking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link{{ Request::is('howtobooking') ? ' active aktif' : ''}}" href='/howtobooking'>How to Booking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link{{ Request::is('about') ? ' active aktif' : ''}}" href='/about'>About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link{{ Request::is('riwayat') ? ' active aktif' : ''}}" href='/riwayat'>Riwayat</a>
      </li>
      @endguest
    </ul>
  </div>
</nav>