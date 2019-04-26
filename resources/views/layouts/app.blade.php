<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <script src="{{ asset('js/jquery.min.js') }}"  ></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/adminlte.min.js') }}"></script>





    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/css/AdminLTE.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/css/skins/skin-blue.min.css') }}" rel="stylesheet">








    <!-- Ionicons -->
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->

    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper" id="app">
        <nav class="navbar navbar-expand-md navbar-dark  bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}


                </a>



                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon">


                    </span>
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
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item dropdown">
                          <!-- Menu toggle button -->
                          <a href="#" class="nav-link dropdown-togglem" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                          </a>
                          <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                              <!-- Inner Menu: contains the notifications -->
                              <ul class="menu">
                                <li><!-- start notification -->
                                  <a href="#">
                                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                  </a>
                                </li>
                                <!-- end notification -->
                              </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                          </ul>
                        </li>

                        <li class="nav-item dropdown">
                          <!-- Menu toggle button -->
                          <a href="#" class="nav-link dropdown-togglem" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                          </a>
                          <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                              <!-- inner menu: contains the messages -->
                              <ul class="menu">
                                <li><!-- start message -->
                                  <a href="#">
                                    <div class="pull-left">
                                      <!-- User Image -->
                                      <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                    </div>
                                    <!-- Message title and timestamp -->
                                    <h4>
                                      Support Team
                                      <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                    </h4>
                                    <!-- The message -->
                                    <p>Why not buy a new awesome theme?</p>
                                  </a>
                                </li>
                                <!-- end message -->
                              </ul>
                              <!-- /.menu -->
                            </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                          </ul>
                        </li>
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

            @yield('content')







  </div>
</body>
</html>
