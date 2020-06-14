<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white border-bottom">
            <div class="container mx-1 mw-100">
                <a class="navbar-brand p-0" href="{{ url('/') }}">
                    <img alt="{{ config('app.name', 'Home') }}" src="./images/findgum_logo.png">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav search-bar mx-auto">
                        <li class="mx-auto">
                            <!-- Search form -->
                            <input class="form-control mx-auto mt-1" id="search" type="text" placeholder="Search"
                                aria-label="Search">
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            {{-- <a class="nav-link login" href="{{ route('login') }}"> --}}
                                <a class="nav-link login" href="#">
                                <span>{{ __('Login') }}</span>
                                <svg viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M10 17v-3H3v-4h7V7l5 5-5 5m0-15h9a2 2 0 012 2v16a2 2 0 01-2 2h-9a2 2 0 01-2-2v-2h2v2h9V4h-9v2H8V4a2 2 0 012-2z" />
                                </svg>
                            </a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            {{-- <a class="nav-link register" href="{{ route('register') }}"> --}}
                                <a class="nav-link register" href="#">

                                <span>{{ __('Register') }}</span>
                            </a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a class="profile nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <span>Hello </span>
                                <svg viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M12 4a4 4 0 014 4 4 4 0 01-4 4 4 4 0 01-4-4 4 4 0 014-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4m-5 8h2v2H7v-2m4 0h2v2h-2v-2m4 0h2v2h-2v-2z" />
                                </svg>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right animate slideIn"
                                aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                        <li class="nav-item">
                            <div class="sell-btn-container mx-2">
                                <a href="#" type="button" class="nav-link btn btn-danger sell-item">Sell</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        {{-- MegaMenu --}}
        @include('sections.megamenu')

        {{-- Main Content --}}
        <main class="py-4">
            @yield('content')
        </main>

        <div class="container footer mx-auto">
            <footer class="pt-4 my-md-5 pt-md-5 border-top">
                <div class="row">
                    <div class="col-12 col-md logo-nc">
                        <img class="mb-2" src="./images/logo-no-text.png" alt="Findgum Logo">
                        <small class="d-block mb-3 text-muted copyright"> © 2020 Findgum</small>
                    </div>
                    <div class="col-6 col-md">
                        <a href="#">Terms & Condition</a>
                        {{-- <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Cool stuff</a></li>
                            <li><a class="text-muted" href="#">Random feature</a></li>
                            <li><a class="text-muted" href="#">Team feature</a></li>
                            <li><a class="text-muted" href="#">Stuff for developers</a></li>
                            <li><a class="text-muted" href="#">Another one</a></li>
                            <li><a class="text-muted" href="#">Last time</a></li>
                        </ul> --}}
                    </div>
                    <div class="col-6 col-md">
                        <a href="#">Privacy Policy</a>
                    </div>
                    <div class="col-6 col-md">
                        <a href="#">About</a>
                    </div>

                    <div class="col-6 col-md social-media-links">
                        <ul class="list-unstyled text-small">
                            <li><a href="#" class="facebook"><i class="mdi mdi-facebook"
                                        aria-hidden="true"></i><span></span></a></li>
                            <li><a href="#" class="ig"><i class="mdi mdi-instagram"
                                        aria-hidden="true"></i><span></span></a></li>
                            <li><a href="#" class="twitter"><i class="mdi mdi-twitter"
                                        aria-hidden="true"></i><span></span></a></li>
                            <li><a href="#" class="youtube"><i class="mdi mdi-youtube"
                                        aria-hidden="true"></i><span></span></a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>
