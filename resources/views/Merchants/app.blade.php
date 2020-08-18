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
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="page-container" style="position: relative;
    min-height: 100vh;">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <span style="font-size:20px;color:blue"> Cephas group </span>
                 </a>
                <a class="navbar-brand" href="/merchant">
                   <span style="font-size:20px;color:blue;"> Merchant Page </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @if(Auth::guard('signup')->check())
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               
                                <span class="caret" style="font-size:20px;color:blue;"> {{ Auth::guard('signup')->user()->name }} </span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/merchlogout" style="font-size:20px;color:blue;">
                                    {{ __('Logout') }}
                                </a>
                                <a class="dropdown-item" href="/signup" style="font-size:20px;color:blue;">
                                    {{ __('Dashboard') }}
                                </a>

                                <form id="logout-form" action="" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @else
                        <li class="nav-item" >
                            <a class="nav-link" href="/merchlogin/create"style="font-size:20px;color:blue;">{{ __('Login') }}</a>
                          </li>
                
                                <li class="nav-item" >
                                    <a class="nav-link" href="/signup/create"style="font-size:20px;color:blue;">{{ __('SignUp') }}</a>
                                </li>
                            @endif
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            <div id="content-wrap" style="padding-bottom: 2.5rem;">
            @yield('content')
            </div>
        </main>
    </div>
</div>
</body>
</html>
