<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">


</head>

<body>
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="index.html"><span>IK</span>Fotografia</a></h1>
      
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="/sobre">Sobre</a></li>
          <li><a class="nav-link scrollto" href="/servico">Servicos</a></li>
          <li class="dropdown"><a href="#"><span>Galeria</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/casamento">Casamento</a></li>
              <li><a href="/estudio">Estudio</a></li>
              <li><a href="/shoots">Shoots</a></li>
            </ul>
          </li>
          
          @auth
          <li><a class="nav-link scrollto" href="/contacto">Contacto</a></li>
          <li><a class="nav-link scrollto" href="#">  {{ Auth::user()->name }}</a></li>
          <li class="dropdown"><a href="#"><i class="bi bi-person-circle"></i></a>
                <ul>
                  <li><a class="nav-link scrollto" href="/perfil">Meu perfil</a></li>
                  <li class="nav-item">
                    <form action="/logout" method="POST">
                      @csrf
                      <a href="/logout" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                    </form>
                  </li>
                </ul>
          </li>
          @endauth
          @guest
          <li class="dropdown"><a href="#"><i class="bi bi-person-circle"></i></a>
                <ul>
                  @if (Route::has('login'))
                  <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                      @auth
                          <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                      @else
                          <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
  
                          @if (Route::has('register'))
                              <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                          @endif
                      @endauth
                  </div>
              @else
                  {{-- <li>  <a href="/login">Login</a></li>
                  <li><a href="/register">Cadastrar-se</a></li> --}}

                  <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
                </ul> 
          </li>
          
          @endguest

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main>
    <div class="container-fluid">
      <div class="row">
        @if(session('msg'))
          <p class="msg">{{session('msg')}}</p>
        @endif
        @yield('content')
      </div>
    </div>
  </main>
  
  <footer>
    <div class="footer-area-bottom">
        <div class="container">
            <div class="row">
            <div class="single-icon">
                
                <p>
                <strong>Tel: </strong>+258 845 000 111<br>
                <span>Segunda-feira 
                    à
                    sexta-feira (9am-5pm)</span>
                </p>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="copyright text-center">
                <p>
                    &copy; Copyright <strong> DAW 2022  </strong>.
                </p>
                </div>
                <div class="credits">
                
                </div>
            </div>
            </div>
        </div>
    </div>
  </footer>
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>