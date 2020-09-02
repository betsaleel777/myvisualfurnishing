<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="babideco">
    <title>Babideco Administration</title>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('web/assets/img/brand/favicon.png')}}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href=" {{asset('web/assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
    <link rel="stylesheet" href=" {{asset('web/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href=" {{asset('web/assets/css/argon.css?v=1.2.0')}}" type="text/css">
</head>

<body class="bg-default">
<!-- Navbar -->
<nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="{{route('acceuil')}}">
            <img src="{{asset('web/assets/img/brand/white.png')}}">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="dashboard.html">
                            <img src=" {{asset('web/assets/img/brand/blue.png')}}">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="register.html" class="nav-link">
                        <span class="nav-link-inner--text">créer compte</span>
                    </a>
                </li>
            </ul>
            <hr class="d-lg-none"/>

        </div>
    </div>
</nav>
<!-- Main content -->
<div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                        <h1 class="text-white">Espace d'administration babideco!</h1>
                        <p class="text-lead text-white"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary border-0 mb-0">
                    {{--            <div class="card-header bg-transparent pb-5">--}}
                    {{--              <div class="text-muted text-center mt-2 mb-3"><small>Sign in with</small></div>--}}
                    {{--              <div class="btn-wrapper text-center">--}}
                    {{--                <a href="#" class="btn btn-neutral btn-icon">--}}
                    {{--                  <span class="btn-inner--icon"><img src="{{asset('web/assets/img/icons/common/github.svg')}}"></span>--}}
                    {{--                  <span class="btn-inner--text">Github</span>--}}
                    {{--                </a>--}}
                    {{--                <a href="#" class="btn btn-neutral btn-icon">--}}
                    {{--                  <span class="btn-inner--icon"><img src="{{asset('web/assets/img/icons/common/google.svg')}}"></span>--}}
                    {{--                  <span class="btn-inner--text">Google</span>--}}
                    {{--                </a>--}}
                    {{--              </div>--}}
                    {{--            </div>--}}
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <small>renseignez votre E-mail et mot de passe</small>
                        </div>
                        <form role="form" method="POST" action="{{route('login')}}">
                            @csrf
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" type="email" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" type="password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="custom-control custom-control-alternative custom-checkbox">
                                <input class="custom-control-input" name="remember" {{ old('remember') ? 'checked' : '' }} id=" customCheckLogin" type="checkbox">
                                <label class="custom-control-label" for=" customCheckLogin">
                                    <span class="text-muted">Se souvenir de moi</span>
                                </label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">Soumettre</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-light"><small>Mot de passe oublié ?</small></a>
                        @endif
                    </div>
                    <div class="col-6 text-right">
                        <a href="{{route('register')}}" class="text-light"><small>Créer un compte</small></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<footer class="py-5" id="footer-main">
    <div class="container">
        <div class="row align-items-center justify-content-xl-between">
            <div class="col-xl-6">
                <div class="copyright text-center text-xl-left text-muted">
                    &copy; 2020 <a href="{{route('acceuil')}}" class="font-weight-bold ml-1" target="_blank">babideco</a>
                </div>
            </div>
            {{--        <div class="col-xl-6">--}}
            {{--          <ul class="nav nav-footer justify-content-center justify-content-xl-end">--}}
            {{--            <li class="nav-item">--}}
            {{--              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>--}}
            {{--            </li>--}}
            {{--            <li class="nav-item">--}}
            {{--              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>--}}
            {{--            </li>--}}
            {{--            <li class="nav-item">--}}
            {{--              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>--}}
            {{--            </li>--}}
            {{--            <li class="nav-item">--}}
            {{--              <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>--}}
            {{--            </li>--}}
            {{--          </ul>--}}
            {{--        </div>--}}
        </div>
    </div>
</footer>
<!-- Argon Scripts -->
<!-- Core -->
<script src=" {{asset('web/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src=" {{asset('web/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src=" {{asset('web/assets/vendor/js-cookie/js.cookie.js')}}"></script>
<script src=" {{asset('web/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
<script src=" {{asset('web/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
<!-- Argon JS -->
<script src=" {{asset('web/assets/js/argon.js?v=1.2.0')}}"></script>
</body>

</html>
