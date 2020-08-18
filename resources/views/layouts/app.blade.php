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
                   <span style="font-size:20px;color:blue"> Cephas Group </span>
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"
                            style="font-size:20px;color:blue">
                              Available services
                            </a>
                            <div class="dropdown-menu">
                                @if(count($service)>0)
                                @foreach($service as $services)
                                <a class="dropdown-item" href="/userpage/{{$services->merchant_id}}">
                                <span style="font-size:20px;color:blue">{{$services->pagename}}</span></a>
                                @endforeach
                                @else
                                <a class="dropdown-item" href="#"><span style="font-size:20px;color:blue">
                                    No service yet</span></a>
                                    @endif
                            </div>
                          </li>
                        @guest
                        <li class="nav-item" >
                            <a class="nav-link" href="{{ route('login') }}"style="font-size:20px;color:blue">{{ __('Login') }}</a>
                          </li>
                
                            @if (Route::has('register'))
                                <li class="nav-item" >
                                    <a class="nav-link" href="{{ route('register') }}"style="font-size:20px;color:blue">
                                        {{ __('SignUp') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle"style="font-size:20px;color:blue"
                                 href="#" role="button" data-toggle="dropdown" aria-haspopup="true" 
                                 aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret" 
                                    style="font-size:20px;color:blue"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                                     style="font-size:20px;color:blue">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="/cart" style="font-size:20px">Cart 
                                <span> 
                                    {{Cart::count()}} 
                        
                                </span>
                            </a> 
                          </li>
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
