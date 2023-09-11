<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BISU-TTG') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('welcome_assets/fonts/font-awesome.min.css')}}">

    <!-- Import Styles  -->
    <link rel="stylesheet" href="{{asset('welcome_assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('welcome_assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('welcome_assets/css/Animated-CSS-Waves-Background-SVG.css')}}">
    <link rel="stylesheet" href="{{asset('welcome_assets/css/Contact-Form-Clean.css')}}">
    <link rel="stylesheet" href="{{asset('welcome_assets/css/dash.css')}}">
    <link rel="stylesheet" href="{{asset('welcome_assets/css/Data-Table-1.css')}}">
    <link rel="stylesheet" href="{{asset('welcome_assets/css/Data-Table.css')}}">
    <link rel="stylesheet" href="{{asset('welcome_assets/css/Features-Blue.css')}}">
    <link rel="stylesheet" href="{{asset('welcome_assets/css/Highlight-Phone.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="{{asset('welcome_assets/css/Login-Form-Clean.css')}}">
    <link rel="stylesheet" href="{{asset('welcome_assets/css/media.css')}}">
    <link rel="stylesheet" href="{{asset('welcome_assets/css/Modal-Login-form.css')}}">
    <link rel="stylesheet" href="{{asset('welcome_assets/css/modal.css')}}">
    <link rel="stylesheet" href="{{asset('welcome_assets/css/Navigation-Clean.css')}}">
    <link rel="stylesheet" href="{{asset('welcome_assets/css/Navigation-with-Button.css')}}">
    <link rel="stylesheet" href="{{asset('welcome_assets/css/Newsletter-Subscription-Form.css')}}">
    <link rel="stylesheet" href="{{asset('welcome_assets/css/styles.css')}}">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>
<body>
    <div id="app">

            <nav class="navbar navbar-light navbar-expand-md navigation-clean">
                <div class="container"><a href="{{ url('/') }}"><img class="d-xl-flex justify-content-xl-center align-items-xl-center" src="{{asset('welcome_assets/img/screen-content-phone.png')}}" style="width: 3em;height: 3em;margin-right: 10px;text-align: center;"></a>
                <a class="navbar-brand nav-title" href="{{ url('/') }}">BISU BALILIHAN<span class="navbar-brand-span">&nbsp;TIME TABLE GENERATOR</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse d-xl-flex d-xxl-flex justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center" id="navcol-1">
                        <ul class="navbar-nav d-xxl-flex ms-auto justify-content-xxl-center align-items-xxl-center">
                        @guest
                                    @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('dashboard') }}">
                                            <button class="btn btn-primary border-white shadow buttons button-top" data-bss-hover-animate="pulse" type="button">Log in</button>
                                        </a>
                                    </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color: var(--bs-light);" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
                    </div>
                </div>
            </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
    <!-- <script src="{{asset('welcome_assets/bootstrap/js/bootstrap.min.js')}}"></script> -->
    <!-- <script src="{{asset('welcome_assets/js/bs-init.js')}}"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="{{asset('welcome_assets/js/bs-init.js')}}"></script>
    <script src="{{asset('welcome_assets/js/mainview.js')}}"></script>
    <script src="{{asset('welcome_assets/js/modal.js')}}"></script>
</body>
</html>
