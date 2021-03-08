  <title>@yield('title')</title>
  <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow">
    <!-- Brand/logo -->
    <div class="container">
    <a class="navbar-brand" href="{{url('/')}}"></a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <!-- Links -->
      <ul class="navbar-nav ml-auto" style="font-family: Arial, Helvetica, sans-serif; font-size: larger; color:white;">
        <li class="nav-item">
          <a class="nav-link active" href="{{url('/')}}">
            Beranda
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/login')}}">
            Masuk
          </a>
        </li>
      </ul>
    </div>
  </div>
  </nav>
  <body>
  <div>
  @yield('content')
  </div>
  </body>

  <footer id="footer" class="py-4 bg-dark text-white-50" style="width: 100%;position: absolute;bottom: 0px;">
    <div class="footer-copyright text-center py-3">© 2021 Copyright:
    <a href="https://github.com/BosToken"> Layanan Masyarakat</a>
  </div>
    </footer>

  <!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap"></script>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
          $('ul li a').click(function(){
            $('li a').removeClass("active");
            $(this).addClass("active");
        });
    });
</script>