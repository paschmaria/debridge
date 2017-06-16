<!DOCTYPE html>
<html lang="en">

    <head>
        <title>De-Bridge</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="Description" content="An E-commerce site where users can meet socially and as well carry out businesses">
        <meta name="Keywords" content="social media, business, friends, buy, sell, contacts">
        
        <!-- fav icon -->
        <link rel="shortcut icon" type="image/png" href="{{ asset('img/logo/debridge-logo.png') }}"/>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">

        <!-- slick carousel -->
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/slick/slick.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/slick/slick-theme.css') }}"/>
        <link rel="stylesheet" href="{{asset ('css/toastr.min.css') }}" rel="stylesheet" />

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('plugins/mdb/css/bootstrap.css') }}" rel="stylesheet">

        <!-- Material Design Bootstrap -->
       <link rel="stylesheet" href="{{ asset('plugins/mdb/css/mdb.min.css') }}">

        <!-- Your custom styles (optional) -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    </head>

    <body data-page="index">
        <!-- header begins here-->
        <header>
            <div class="container-fluid bg-brand">
                <div class="row p-t-35 p-b-10">
                    <div class="col col-sm-3 col-md-3">
                        <div class="dis-flex">
                            <figure class="m-0">
                                <a href="/">
                                    <img src="{{ asset('img/logo/debridge-logo.png') }}" class="img-fluid m-auto">
                                </a>
                                <figcaption class="motto f-12 m-0 m-t-5">HOME | THE MARKET</figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6">
                        <div class="page_heading text-center">
                            <form class="" action="" method="GET">
                                <div class="input-group input-shadow">
                                    <input type="search" class="form-control input-alternate bd-dark-lite" placeholder="e.g. Phones in Lagos, bags in Abuja...">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-brand-lite btn-lg waves-effect waves-light m-0 no-shadow"><i class="fa fa-search f-17 c-dark"></i></button>
                                    </span>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                    <div class="col col-sm-3 col-md-3">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-12 text-center">

                                <ul class="list-style-none user-conversion">
                                @if(Auth::check())

                                    <li class="dis-inline-b">
                                        <a href="{{ url('/users/logout') }}" class="btn-outline-white btn waves-effect">Logout</a>
                                    </li>
                                @else
                                    <li class="dis-inline-b">
                                        <a href="{{ route('register') }}" class="btn-outline-white btn waves-effect">Log In / Register</a>
                                    </li>
                                @endif

                                    <li class="dis-inline-b pos-rel">
                                        <a href="#" class="p-l-10 p-r-10"><span><i class="fa fa-shopping-cart fa-lg c-white" aria-hidden="true"></i></span></a>
                                        <span class="cart-count">3</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>               
            </div>
            <!-- navigations/links right here -->
            <nav class="navbar navbar-toggleable-sm navbar-light transparent p-t-15 p-b-15 no-shadow border-top border-bottom" role="navigation">
    			<div class="container-fluid">
    				<!-- Brand and toggle get grouped for better mobile display -->
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    		
    				<!-- Collect the nav links, forms, and other content for toggling -->
    				<div id="navbarNav1" class="collapse navbar-collapse">
    					<ul class="nav navbar-nav">
    						<li class="nav-item"><a class="nav-link hover-underline text-uppercase" href="#">Black Market</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline text-uppercase" href="hiring.html">Hiring Arena</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline text-uppercase" href="arahamarket.html">Araha Market</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline text-uppercase" href="BridgeShops.html">Bridge Shops</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline text-uppercase" href="#">Invest Hub</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline text-uppercase" href="#">Consultancy Unit</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline text-uppercase" href="exhibitionStand.html">Exhibition Stand</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline text-uppercase" href="#">B - Mentor</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline text-uppercase" href="#">Window Shopping</a></li>
                            <li class="nav-item"><a class="nav-link c-brand w-700 text-uppercase" href="#">Apply for Bridge Code</a></li>
    					</ul>
    				</div><!-- /.navbar-collapse -->
    			</div>
    		</nav>
            <!-- navigations/links ends here -->
        </header>
        <!-- header ends here -->

@yield('content')
        <!--
            <footer></footer>
        -->

        <!-- SCRIPTS -->

        <!-- JQuery -->
        <script type="text/javascript" src="{{ asset('plugins/mdb/js/jquery-3.1.1.min.js') }}"></script>

        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="{{ asset('plugins/mdb/js/tether.min.js') }}"></script>

        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="{{ asset('plugins/mdb/js/bootstrap.min.js') }}"></script>

        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="{{ asset('plugins/mdb/js/mdb.min.js') }}"></script>

        <!-- slick carousel -->
        <script type="text/javascript" src="{{ asset('plugins/slick/slick.min.js') }}"></script>
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

        <script src="{{asset('js/social_network.js')}}"></script>
        <script src="{{asset('js/toastr.min.js')}}"></script>

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
