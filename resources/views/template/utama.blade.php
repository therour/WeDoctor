<!doctype html>
<html lang="en">
  <head>

    <title>We Doct</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- Bootstrap CSS offline-->
    <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/styleNavigasi.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/styleFooterCopyright.css')}}">
    @yield('css')

  </head>
  <body>
    @include('template.navbar')    
    
    @yield('content')

    <section class="container-fluid footer-copyright">
      <div class="row">
        <div class="col-sm-12 text-center copyright-footer">
          <h3>Copyright &copy; : Symphony Companny, 2017. INDONESIA</h3>
        </div>
      </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS offline-->
    <script type="text/javascript" src="{{asset('/js/jquery-3.2.1.min.js')}}"></script>
    @yield('js')
    <script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
    
  </body>
</html>