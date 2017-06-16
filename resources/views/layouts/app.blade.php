<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}" rel="stylesheet" />

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/') }}">Home</a>

                                        <a class="dropdown-item waves-effect waves-light" href="{{ url('friends') }}">My friends</a>
                                        <a href="{{ url('follow') }}">Followers</a>
                                        <a href="{{ url('friend_requests') }}">Friend requestions</a>
                                        <a href="{{ url('upload') }}">Albums</a>
                                        <a href="{{ url('notifications') }}">Notifications</a>
                                        <a href="{{ url('users') }}">De-bridge users</a>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
      <script src="{{asset('js/toastr.min.js')}}"></script>
    <script src="{{asset('js/social_network.js')}}"></script>

     <script type="text/javascript">
        toastr.options.preventDuplicates = true;
        // toastr.success("ola");
        @if (session('middleware'))
          toastr.error("{{session('middleware')}}");
        @endif

        @if (session('welcome_back'))
          toastr.success("{{session('welcome_back')}}");
        @endif

        @if (session('welcome'))
          toastr.success("{{session('welcome')}}");
        @endif

        @if (session('delete_message'))
          toastr.error("{{session('delete_message')}}");
        @endif

        @if (session('success'))
          toastr.success("{{session('success')}}");
        @endif

        @if (session('info'))
          toastr.info("{{session('info')}}");
        @endif

        @if (session('success_image'))
          toastr.success("{{session('success_image')}}");
        @endif

        @if (session('delete'))
          toastr.error("{{session('error_image')}}");
        @endif

        @if ($errors->has('image_reference')) 
          toastr.error("{{$errors->first('image_reference')}}");
        @endif
      </script>

</body>
</html>
