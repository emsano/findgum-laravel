<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Findgum') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer ></script>

    {{-- Geo Data --}}
    {{-- <script src="//geodata.solutions/includes/statecity.js" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        {{-- Navigation and Search --}}
        <div class="stick-together w-100">
            {{-- Top Bar --}}
            <nav class="navbar navbar-expand-sm top-bar navbar-light bg-white border-bottom">
                <div class="container mx-auto px-0">
                    <a class="navbar-brand p-0" href="{{ url('/') }}">
                        <img alt="{{ config('app.name', 'Home') }}" src="{{ asset('images/findgum_logo.png') }}">
                        <img src="{{ asset('./images/flag.jpg') }}" class="img-fluid" width="50" height="40">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav search-bar mx-auto mt-1">
                            <li class="mx-auto">
                                <form action="#" method="post">
                                <div class="input-group">
                                    <!-- Search form -->
                                    <input class="form-control mx-auto rounded-left" id="search" type="text" placeholder="Search" aria-label="Search">
                                    <div class="input-group-append p-0 border-0 bg-white">
                                        <button class="btn btn-secondary rounded-right border-0" type="submit" id="search-button"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                                </form>
                            </li>
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav right-nav d-inline-flex flex-row list-inline">
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item list-inline-item">
                                <a class="nav-link login pr-0" href="{{ route('login') }}">
                                    <span>{{ __('Login') }}</span>
                                    <i class="mdi mdi-login-variant"></i>
                                </a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item list-inline-item">
                                <a class="nav-link register pl-0" href="{{ route('register') }}">
                                    <span>{{ __('Register') }}</span>
                                    <i class="mdi mdi-book-plus"></i>
                                </a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown list-inline-item">
                                <a class="profile nav-link dropdown-toggle px-0 py-0" href="#" id="navbarDropdownProfile" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="mdi mdi-account-box"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right animate slideIn profile-menu-drop shadow"
                                    aria-labelledby="navbarDropdownProfile">
                                    @if (Auth::user()->is_super == 1)
                                        <a class="dropdown-item border-bottom" href="{{ route('admin') }}"><i class="mdi mdi-monitor-dashboard"></i> Admin Dashboard</a>
                                    @endif

                                    <a class="dropdown-item border-bottom" href="{{ route('profile', Auth::user()->id) }}"><i class="mdi mdi-store-outline"></i> Your Shop</a>

                                    <a class="dropdown-item border-bottom" href="{{ route('settings') }}"><i class="mdi mdi-cog"></i> Profile Settings</a>

                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        <i class="mdi mdi-logout"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown list-inline-item">
                                <a class="nav-link dropdown-toggle px-0 py-0 d-none d-md-block d-lg-block" href="#" id="dropdownFav" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="mdi mdi-heart-multiple text-danger"></i>
                                </a>

                                <a class="nav-link dropdown-toggle px-0 py-0 d-inline-flex d-md-none d-lg-none" href="{{ route('favorites') }}">
                                    <i class="mdi mdi-heart-multiple text-danger"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right animate slideIn shadow"
                                    aria-labelledby="navbarDropdownProfile">
                                    <p class="align-self-center text-center py-2 bg-danger text-light">
                                        Favorites
                                        <a class="btn btn-light text-center" href="/favorites">
                                            View All
                                        </a>
                                    </p>
                                    <a class="dropdown-item border-bottom" href="/favorites">
                                        <div class="row">
                                            <div class="col pl-0 d-flex flex-row align-items-center">
                                                <div class="sender-meta d-inline text-truncate" id="sender-2">
                                                    <p class="name mb-0">Matt Reees</p>
                                                    <p class="posted-item mb-0 font-weight-bolder">Vanguard Power</p>
                                                    <p class="preview m-0 text-truncate">Elit pellentesque habitant morbi tristique.</p>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <small class="text-muted when">05/20</small>
                                                <img class="rounded product-img mb-2 d-block m-auto" src="{{ asset('images/2p9VXAn.jpg') }}"  width="50" height="50">
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item border-bottom" href="/favorites">
                                        <div class="row">
                                            <div class="col pl-0 d-flex flex-row align-items-center">
                                                <div class="sender-meta d-inline text-truncate" id="sender-2">
                                                    <p class="name mb-0">Matt Reees</p>
                                                    <p class="posted-item mb-0 font-weight-bolder">Vanguard Power</p>
                                                    <p class="preview m-0 text-truncate">Elit pellentesque habitant morbi tristique.</p>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <small class="text-muted when">05/20</small>
                                                <img class="rounded product-img mb-2 d-block m-auto" src="{{ asset('images/2p9VXAn.jpg') }}"  width="50" height="50">
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item border-bottom" href="/favorites">
                                        <div class="row">
                                            <div class="col pl-0 d-flex flex-row align-items-center">
                                                <div class="sender-meta d-inline text-truncate" id="sender-2">
                                                    <p class="name mb-0">Matt Reees</p>
                                                    <p class="posted-item mb-0 font-weight-bolder">Vanguard Power</p>
                                                    <p class="preview m-0 text-truncate">Elit pellentesque habitant morbi tristique.</p>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <small class="text-muted when">05/20</small>
                                                <img class="rounded product-img mb-2 d-block m-auto" src="{{ asset('images/2p9VXAn.jpg') }}"  width="50" height="50">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown list-inline-item">
                                <a class="nav-link dropdown-toggle pl-0  py-0 d-none d-md-block d-lg-block" href="#" id="dropdownMsg" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="mdi mdi-message text-info"></i>
                                </a>

                                <a class="nav-link dropdown-toggle pl-0 py-0 d-inline-flex d-md-none d-lg-none" href="{{ route('messages') }}">
                                    <i class="mdi mdi-message text-info"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right animate slideIn shadow"
                                    aria-labelledby="navbarDropdownMsg">
                                    <p class="align-self-center text-center py-2 bg-info text-light">
                                        Messages
                                        <a class="btn btn-secondary text-center" href="{{ route('messages') }}">
                                            View All
                                        </a>
                                    </p>
                                    <a class="dropdown-item border-bottom" href="{{ route('messages') }}">
                                        <div class="wrap row">
                                            <div class="col-auto px-2">
                                                <img class="rounded-circle profile-img mb-2 d-block m-auto" src="{{ asset('images/prof1.jpg') }}"  width="40" height="40">
                                            </div>
                                            <div class="col pl-0 d-flex flex-row align-items-center">
                                                <div class="sender-meta d-inline text-truncate" id="sender-1">
                                                    <p class="name mb-0">Louis Litt</p>
                                                    <p class="posted-item mb-0 font-weight-bolder">Vans Sk8-Hi MTE Shoes</p>
                                                    <p class="preview m-0 text-truncate">Quis viverra nibh cras pulvinar mattis nunc sed.</p>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <small class="text-muted when">06/20</small>
                                                <img class="rounded product-img mb-2 d-block m-auto" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png"  width="50" height="50">
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item border-bottom" href="{{ route('messages') }}">
                                        <div class="wrap row">
                                            <div class="col-auto px-2">
                                                <img class="rounded-circle profile-img mb-2 d-block m-auto" src="{{ asset('images/prof2.jpg') }}"  width="40" height="40">
                                            </div>
                                            <div class="col pl-0 d-flex flex-row align-items-center">
                                                <div class="sender-meta d-inline text-truncate" id="sender-2">
                                                    <p class="name mb-0">Matt Reees</p>
                                                    <p class="posted-item mb-0 font-weight-bolder">Vanguard Power</p>
                                                    <p class="preview m-0 text-truncate">Elit pellentesque habitant morbi tristique.</p>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <small class="text-muted when">05/20</small>
                                                <img class="rounded product-img mb-2 d-block m-auto" src="{{ asset('images/2p9VXAn.jpg') }}"  width="50" height="50">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            @endguest
                            <li class="nav-item list-inline-item align-self-center">
                                <div class="sell-btn-container align-self-center">
                                    <a href="{{ route('post-free-ads') }}" type="button" class="nav-link btn btn-danger sell-item px-2">Post Free Ad</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav d-sm-block d-md-none d-lg-none d-xl-none mt-3">
                            <li class="nav-item">
                                {{-- MegaMenu Mobile--}}
                                @include('sections.megamenu-mobile')
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            {{-- MegaMenu Bar--}}
            @include('sections.megamenu')
        </div>
        {{-- Main Content --}}
        <main class="py-3 flex-fill">
            @yield('content')
        </main>


    </div>
    {{-- Footer --}}
        <footer class="footer w-100">
            <div class="row pt-2">
                <div class="col logo-nc all-align">
                    <div class="mx-auto">
                        <img class="mb-2" src="{{ asset('images/logo-no-text-2.png') }}" alt="Findgum Logo">
                        <small class="d-block mb-3 text-muted copyright"> © 2020 Findgum</small>
                    </div>
                </div>
                <div class="col all-align">
                    <a href="{{ route('policies') }}">Terms & Condition</a>
                </div>
                <div class="col all-align">
                    <a href="{{ route('policies') }}">Privacy Policy</a>
                </div>

                <div class="col social-media-links all-align">
                    <ul class="list-unstyled text-small align-self-center mx-auto">
                        <li><a href="https://www.facebook.com/findgum/" class="facebook" target="_blank">
                            <i class="mdi mdi-facebook"
                                    aria-hidden="true"></i><span></span></a>
                        </li>
                        <li><a href="https://www.instagram.com/findgum/" class="ig" target="_blank">
                            <i class="mdi mdi-instagram"
                                    aria-hidden="true"></i><span></span></a>
                        </li>
                        <li><a href="https://twitter.com/findgum" class="twitter" target="_blank">
                            <i class="mdi mdi-twitter"
                                    aria-hidden="true"></i><span></span></a>
                        </li>
                        <li><a href="https://www.youtube.com/channel/UC8jQBDpc965sIz1xblB0esw" class="youtube" target="_blank">
                            <i class="mdi mdi-youtube"
                                    aria-hidden="true"></i><span></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
</body>

</html>
