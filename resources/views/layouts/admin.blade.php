<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Findgum Admin') }}</title>


    {{-- Google Places --}}
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjSPmkrniKZGHw0QXtGB31cDL36OBkmas&libraries=places">
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="wrapper admin" id="app">
        <!-- Sidebar  -->
        <nav class="shadow" id="sidebar">
            <div class="sidebar-header py-3">
                <h3>
                    <a class="navbar-brand w-100 text-center p-0" href="{{ url('/admin') }}">
                        <img class="mx-auto align-self-center" alt="{{ config('app.name', 'Home') }}"
                            src="{{ asset('images/findgum_logo.png') }}">
                    </a>
                </h3>
                <strong>
                    <a class="navbar-brand w-100 text-center p-0" href="{{ url('/admin') }}">
                        <img class="mx-auto align-self-center" alt="{{ config('app.name', 'Home') }}"
                            src="{{ asset('images/logo-no-text-2.png') }}">
                    </a>
                </strong>
            </div>

            <ul class="list-group components" id="list-tab">
                <li class="list-group-item lig-i p-0 {{ $admin_dashboard_active ?? ''}}">
                    <a class="sidebar-btn btn btn-outline w-100 px-4 {{ $admin_dashboard_active ?? ''}}" href="{{ route('admin') }}">
                        <i class="mdi mdi-monitor-dashboard"></i>
                        Dashboard
                    </a>
                </li>
                <li class="list-group-item lig-i p-0 {{ $admin_posts_active ?? ''}}">
                    <a class="sidebar-btn dropdown-toggle btn btn-outline px-4 w-100 {{ $admin_posts_active ?? ''}}" href="#posts-submenu" data-toggle="collapse"
                        aria-expanded="false">
                        <i class="mdi mdi-post"></i>
                        Posts
                    </a>
                    <ul class="collapse list-group submenu-list {{ $admin_posts_show ?? ''}}" id="posts-submenu" data-parent='#list-tab' role="tablist">
                        <li class="list-group-item py-0">
                            <a class="list-group-item btn btn-light {{ $all_posts_active ?? '' }}" href="{{ route('admin-posts', 'all') }}">All Posts</a>
                        </li>
                        <li class="list-group-item py-0">
                            <a class="list-group-item btn btn-light {{ $active_posts_active ?? '' }}" href="{{ route('admin-posts', 'active') }}">Active</a>
                        </li>
                        <li class="list-group-item py-0">
                            <a class="list-group-item btn btn-light {{ $expired_posts_active ?? '' }}" href="{{ route('admin-posts', 'expired') }}">Expired</a>
                        </li>
                        <li class="list-group-item py-0">
                            <a class="list-group-item btn btn-light {{ $pending_posts_active ?? '' }}" href="{{ route('admin-posts', 'pending') }}">Pending Approval</a>
                        </li>
                        <li class="list-group-item py-0">
                            <a class="list-group-item btn btn-light {{ $reported_posts_active ?? '' }}" href="{{ route('admin-posts', 'reported') }}">Reported Posts</a>
                        </li>
                        <li class="list-group-item py-0">
                            <a class="list-group-item btn btn-light {{ $drafts_posts_active ?? '' }}" href="{{ route('admin-posts', 'drafts') }}">All Drafts</a>
                        </li>
                        <li class="list-group-item py-0">
                            <a class="list-group-item btn btn-light {{ $deleted_posts_active ?? '' }}" href="{{ route('admin-posts', 'deleted') }}">Deleted Posts</a>
                        </li>
                    </ul>
                </li>
                <li class="list-group-item lig-i p-0 {{ $admin_posting_options_active ?? '' }}">
                    <a class="sidebar-btn dropdown-toggle btn btn-outline px-4 w-100 {{ $admin_posting_options_active ?? '' }}" href="#posting-options-submenu"
                        data-toggle="collapse" aria-expanded="false">
                        <i class="mdi mdi-mailbox"></i>
                        Posting Options
                    </a>

                    <ul class="collapse list-group submenu-list {{ $admin_posting_options_show ?? ''}}" id="posting-options-submenu"
                        data-parent='#list-tab'>
                        <li class="list-group-item py-0">
                            <a class="list-group-item btn btn-light {{ $admin_posting_options_categ_active ?? '' }}" href="{{ route('admin-posting-options-categories') }}">Categories</a>
                        </li>
                        <li class="list-group-item py-0">
                            <a class="list-group-item btn btn-light {{ $admin_posting_options_subcateg_active ?? '' }}" href="{{ route('admin-posting-options-sub-categories') }}">Sub-Categories</a>
                        </li>
                    </ul>
                </li>
                <li class="list-group-item lig-i p-0">
                    <a class="sidebar-btn dropdown-toggle btn btn-outline px-4 w-100" href="#users-submenu" data-toggle="collapse"
                        aria-expanded="false">
                        <i class="mdi mdi-account-multiple"></i>
                        User Maintenance
                    </a>
                    <ul class="collapse list-unstyled submenu-list" id="users-submenu" data-parent='#list-tab'>
                        <li class="list-group-item py-0">
                            <a class="btn btn-light" href="#">Buyers/Sellers</a>
                        </li>
                        <li class="list-group-item py-0">
                            <a class="btn btn-light" href="#">Reported Users</a>
                        </li>
                        <li class="list-group-item py-0">
                            <a class="btn btn-light" href="#">Subscribers</a>
                        </li>
                        <li class="list-group-item py-0">
                            <a class="btn btn-light" href="#">Admin Users</a>
                        </li>
                    </ul>
                </li>
                <li class="list-group-item p-0">
                    <a class="sidebar-btn btn btn-outline px-4 w-100" href="#">
                        <i class="mdi mdi-shield-account"></i>
                        Admin User Profile
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a class="sidebar-btn btn btn-outline px-4 w-100" href="{{ route('profile') }}">
                        <i class="mdi mdi-account-convert"></i>
                        Your Buyer/Seller Profile
                    </a>
                </li>
            </ul>
        </nav>

        {{-- Main Content --}}
        <div class="py-3" id="content">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-light border shadow-sm">
                        <i class="mdi mdi-menu"> Toggle Sidebar</i>
                    </button>

                    @guest
                    <a class="nav-link login" href="{{ route('login') }}">
                        <span>{{ __('Login') }}</span>
                        <i class="mdi mdi-login-variant"></i>
                    </a>
                    @else

                    <button class="btn profile dropdown-toggle d-inline-flex  shadow" href="#" id="navbarDropdownProfile"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <span>{{{ Auth::user()->fname }}}</span>
                        <i class="mdi mdi-account-box"></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-right animate slideIn profile-menu-drop shadow"
                        aria-labelledby="navbarDropdownProfile">
                        <a class="dropdown-item border-bottom" href="{{ route('home') }}"><i
                            class="mdi mdi-keyboard-return"></i> Back to Shop</a>
                        <a class="dropdown-item border-bottom" href="{{ route('settings') }}"><i
                                class="mdi mdi-cog"></i> Profile Settings</a>

                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            <i class="mdi mdi-logout"></i> {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                    @endguest
                </div>
            </nav>

            @guest

            @else
                @yield('content')
            @endguest

        </div>
    </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        {{-- <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script> --}}
</body>

</html>
