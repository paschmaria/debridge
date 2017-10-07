<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, 
    initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
    {{--  <link href="{{ asset('css/main2.css') }}" rel="stylesheet" />  --}}
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('sass/modules/_typography.scss') }}" rel="stylesheet" />

    
    
</head>
<body>
    <header class="container">
        <nav class="navbar header navbar-inverse container-fluid navbar-fixed-top">
            <div class="row m-t-5">
                <div class="col-sm-2 col-xs-1 col-md-2">
                        <div style="margin-bottom: 10px;" class="m-b-10" > <p class="m-b-10" ><a class="navbar-brand" href="/"><img src="img/logo2.png" id="logox" title="DeBrige Logo" width="30" height="30" /> </a></p><span class="m-t-20 visible-md visible-lg">DeBridge</span></div>
                </div>
                <div class="col-md-4 hidden-sm hidden-xs visible-md visible-lg">
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group-sm">
                            <div class="input-group">
                                <input type="text" class="form-control m-t-10" id="searchx2" placeholder="Search (e.g: Phones, Laptops, shops etc.)">
                                <!--<span class="input-group-btn">
                                    <button class="btn btn-success btn-sm">Go!</button>
                                </span>-->
                            </div>
                        </div>
            
                    </form>
                </div>
                <div  class="col-md-4 col-sm-10 col-xs-10  iconxBox p-l-20">
                    <!-- <a href="#"> <span class="glyphicon glyphicon-search  iconx"> </span></a>   -->
                    <a href="#"> <span class="glyphicon glyphicon-search  iconx"> </span></a>                             
                                               
                    <a href="#"><span class="glyphicon glyphicon-globe  iconx"> </span></a> 
                    <a href="#"> <span class="glyphicon glyphicon-bell  iconx"> </span></a> 
                    <a href="#"><span class="glyphicon glyphicon-shopping-cart  iconx"> </span></a> 
                    <!--<span class="iconx visible-sm visible-xs hidden-md hidden-lg"><a href="#"><img   src="img/login.png" width="30" height="30" /> </a></span>-->
                </div>
                <div  class="nav navbar-nav p-r-10 navbar-right m-t-10 m-r-5 hidden-xs hidden-sm visible-md visible-lg col-md-1 pull-right">
                        
                        <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <a href="{{ url ('/register')}}"><button role="button" value="" name="" style="border-radius: 5px; padding: 5px; font-family: sans-serif; font-weight: bolder;"> Login/Register</button></a>
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
                                        <a href="{{ url('friend_requests') }}">Friend requests</a>
                                        <a href="{{ url('upload') }}">Albums</a>
                                        <a href="{{ url('notifications') }}">Notifications</a>
                                        <a href="{{ url('users') }}">De-bridge users</a>
                                        <a href="{{ route('logout') }}">
                                        Logout
                                        </a>

                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                        
                    </div>
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header col-sm-1 col-xs-1">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar" style="color:white"></span>
                        <span class="icon-bar" style="color:white"></span>
                        <span class="icon-bar" style="color:white"></span>
                    </button>
                    
                </div>
               
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <!--<ul class="nav navbar-nav">
                        <li class="active"><a href="Home.html">
                        <span class="glyphicon glyphicon-home"></span> 
                        Home</a></li>
                        <li><a href="#">
                        <span class="glyphicon glyphicon-king"></span>  
                        About</a></li>
     
                    </ul>-->
                    
                   <!-- <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon 
                        glyphicon-log-in"></span> Login</a></li>
                        <li><a href="#"><span class="glyphicon 
                        glyphicon-user"></span> Register</a></li>
     
                    </ul>-->
                    <div class="slideOut bg-white biz-leftside-bar-collapse pull-right visible-sm visible-xs hidden-md hidden-lg" >
                            <ul>
                                <li><a href="">Login/Register</a></li>
                                <li><a href="" id="nig-anchor" style="padding: 5px 10px 5px 10px; margin-left: -10px; border-radius: 3px solid white; background-color: #28b1a1; border-radius: 3px;}">The Nigerian Market</a></li>
                                <li><a href="">Categories</a></li>
                                <li><a href="">Tradline</a></li>
                                <li><a href="">Bridge Code</a></li>
                                <li><a href="">Bridgers</a></li>
                                
                                <li><a href="" style="margin-left: -15px; color: #28b1a1; font-weight: bolder;">MARKETS</a></li>
                                <li><a href="">State Market</a></li>
                                <li><a href="">Black Market</a></li>
                                <li><a href="">Araha Market</a></li>
                                <li><a href="">Hiring Arena</a></li>
                                <li><a href="">Bridge Shopline</a></li>
                                <li><a href="" style="margin-left: -15px; color: #28b1a1; font-weight: bolder;">FAVOURITES</a></li>
                                <li><a href="">Exhibition Stand</a></li>
                                <li><a href="">Invest Hub</a></li>
                                <li><a href="">Messages</a></li>
                                <li><a href="">Photos</a></li>
                                <li><a href="">Followers</a></li>
                                <li><a href="">Following</a></li>
                                <li><a href="">Create Groups</a></li>
                                <li><a href="">Windowshop</a></li>
                                <li><a href="">B-analytor</a></li>
                                <li><a href="" style="margin-left: -15px; color: #28b1a1; font-weight: bolder;">UNION</a></li>
                                <li><a href="">Create Union</a></li>
                                <li><a href="">Trade Commnunity</a></li>
                        
                            </ul>
                        </div>
                    
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>
 @yield('content')
    <footer class="container">
       <!-- <h2>Footer</h2>-->
    </footer>
    <script src="{{ asset('js/jquery-1.9.1.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <!-- SCRIPTS -->

        <!-- JQuery -->
        {{--  <script type="text/javascript" src="{{ asset('plugins/mdb/js/jquery-3.1.1.min.js') }}"></script>  --}}
        
                <!-- Bootstrap tooltips -->
               <!-- <script type="text/javascript" src="{{ asset('plugins/mdb/js/tether.min.js')}}"></script> -->
        
                <!-- Bootstrap core JavaScript 
                <script type="text/javascript" src="{{ asset('plugins/mdb/js/bootstrap.min.js')}}"></script> -->
        
                <!-- MDB core JavaScript 
                <script type="text/javascript" src="{{ asset('plugins/mdb/js/mdb.min.js')}}"></script> -->
        
                <!-- slick carousel -->
                <script type="text/javascript" src="{{ asset('plugins/slick/slick.min.js')}}"></script>
        
                <!-- Main JS -->
                <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
                <script>
                    $(document).ready(function(){
                        $('.carousel_big').slick({
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            dots: true,
                            arrows: false,
                            fade: true,
                            autoplay: true,
                            asNavFor: '.carousel_small'
                        });
                        $('.carousel_small').slick({
                            infinite: true,
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            arrows: false,
                            asNavFor: '.carousel_big',
                            focusOnSelect: true,
                            autoplay: true,
                            autoplaySpeed: 2000,
                            vertical: true,
                            centerPadding: '0px',
                            responsive: [
                                // {
                                //   breakpoint: 1024,
                                //   settings: {
                                //     slidesToShow: 3,
                                //     slidesToScroll: 3,
                                //     infinite: true
                                //   }
                                // },
                                {
                                  breakpoint: 600,
                                  settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 2,
                                    infinite: true
                                  }
                                },
                                {
                                  breakpoint: 480,
                                  settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1,
                                    infinite: true
                                  }
                                }
                            ]
                        });
        
                        new WOW().init();
                        $('[data-toggle="tooltip"]').tooltip();
                    });
                </script>
                <script>
                    app.commentHandler();
                </script>
        
</body>
</html>