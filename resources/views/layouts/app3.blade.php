<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('Abrazo Peludo','Abrazo Peludo') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- Additional Stylesheets -->
    <link href="/favicon.ico" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="import/lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="import/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="import/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="{{ asset('import/css/style.css') }}" rel="stylesheet">
    <link href="import/css/stylemessage.css" rel="stylesheet">
</head>
<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row py-3 px-lg-5">
            <div class="col-lg-4">
            <a href="" class="navbar-brand d-none d-lg-block text-center mx-auto">
                <h1 class="m-0 display-5 text-capitalize"><span class="text-primary">Admin </span>dashboard</h1>
            </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Abrazo</span>Peludo</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
            <div class="navbar-nav mr-auto py-0">
                <a href="/" class="nav-item nav-link">Ingresar como Usuario</a>
            </div>
            <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
    <div id="app">
        @yield('content')
    </div>
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5 justify-content-center">
            <div class="col-lg-4 col-md-12 mb-5 text-center">
                <h1 class="mb-3 display-5 text-capitalize text-white"><span class="text-primary">Abrazo</span>Peludo</h1>
                <p class="m-0">
                    &copy; <a class="text-white font-weight-bold" href="#">Abrazo Peludo</a>. Todos los derechos reservados. Designed by Tecsup 2023
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="import/lib/easing/easing.min.js"></script>
    <script src="import/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="import/lib/tempusdominus/js/moment.min.js"></script>
    <script src="import/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="import/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Contact Javascript File -->
    <script src="import/mail/jqBootstrapValidation.min.js"></script>
    <script src="import/mail/contact.js"></script>
    <!-- Template Javascript -->
    <script src="import/js/main.js"></script>
</body>
</html>
