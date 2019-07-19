<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="userid" content="{{ Auth::check() ? Auth::user()->id :''}}">


    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
    rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" 
    crossorigin="anonymous">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                    <div>
                           <a href="{{ url('/posts') }}">Posts</a>
                    </div>
                   
                    
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
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>

                        @else
                       
                        <li><a href="#"></i></a></li> 

               

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" 
                            data-toggle="dropdown"  aria-expanded="false" aria-haspopup="true"  v-pre >

                            <i class="fa fa-bell"></i>
                            @if(auth()->user()->comment->count())
                        <span class="badge badge-light">{{auth()->user()->comment->count()}}</span>
                             @endif
                            </a>

                        </li>

                        {{--<li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" 
                            data-toggle="dropdown"  aria-expanded="false" aria-haspopup="true"  v-pre >

                            <i class="fa fa-bell"></i>
                            @if(auth()->user()->unreadnotifications->count())
                        <span class="badge badge-light">{{auth()->user()->unreadnotifications->count()}}</span>
                             @endif
                            </a>

                            <ul class="dropdown-menu">
                            <li><a style="color: green" href="{{route('markRead')}}">Mark all as Read></a></li>
                                @foreach(auth()->user()->unreadnotifications as $notification)
                                
                                <li style="background-color: blue"><a href="#">{{$notification->data['data']}}}</a></li>
                                @endforeach

                                @foreach(auth()->user()->readnotifications as $notification)
                                
                                <li><a href="#">{{$notification->data['data']}}}</a></li>
                                @endforeach
                            </ul>

                        </li>--}}
                        
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
                <main class="py-4">
                    @yield('content')
                </main>
        </div>
    </div>
</body>
</html>
