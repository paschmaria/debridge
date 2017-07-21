<!DOCTYPE html>
<html lang="en">
    <head>
        <title>De-Bridge</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <meta name="Description" content="An E-commerce site where users can meet socially and as well carry out businesses"/>
        <meta name="Keywords" content="social media, business, friends, buy, sell, contacts"/>
        
        <!-- fav icon -->
        <link rel="shortcut icon" type="image/png" href="{{ asset('img/logo/debridge-logo.png')}}"/>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css')}}"/>

        <!-- slick carousel -->
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/slick/slick.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/slick/slick-theme.css')}}"/>
        <link rel="stylesheet" href="{{asset ('css/toastr.min.css') }}" rel="stylesheet" />

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('plugins/mdb/css/bootstrap.css')}}" rel="stylesheet">

        <!-- Material Design Bootstrap -->
        <link rel="stylesheet" href="{{ asset('plugins/mdb/css/mdb.min.css')}}">

        <!-- Your custom styles (optional) -->
        <link rel="stylesheet" href="{{ asset('css/main.css')}}">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Nunito">
    
        @yield('extra_styles')
    </head>

    <body data-page="index">
        <!-- header begins here-->
        <header>
            <div class="container-fluid bg-brand z-2500">
                <div class="row p-t-35 p-b-10">
                    <div class="col col-sm-3 col-md-3">
                        <div class="dis-flex">
                            <figure class="m-0">
                                <a href="/">
                                    <img src="{{ asset('img/logo/debridge-logo.png')}}" class="img-fluid m-auto">
                                </a>
                                @if(auth()->check())
                                    <figcaption class="motto f-12 m-0 m-t-5">
                                        <a href="{{ route('view_profile', auth()->user()->reference) }}" class="c-white">MY PROFILE</a> |  <a href="{{ url('/') }}" class="c-white">NIGERIAN MARKET</a>
                                    </figcaption>
                                @endif
                            </figure>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6">
                        <div class="page_heading text-center">
                            <form class="" action="" method="GET">
                                <div class="input-group input-shadow">
                                    <input type="search" id="querySelector" class="form-control input-alternate bd-dark-lite" placeholder="e.g. Phones in Lagos, bags in Abuja..." autocomplete="off">
                                        
                                    <span class="input-group-btn">
                                        {{-- <button type="submit" class="btn btn-brand-lite btn-lg waves-effect waves-light m-0 no-shadow"><i class="fa fa-search f-17 c-dark"></i></button> --}}
                                    </span> <br> <br>
                                </div>
                                {{-- <div class="update search_dropdown" style=" background-color:white; position: relative; z-index: 20000;">

                                </div> --}}
                                <div class="dropdown">

                                    <!--Trigger-->
                                    <!--Menu-->
                                    <div class="dropdown-menu dropdown-dark animated fadeIn" style="width: 100%; max-height: 150px; overflow-y: scroll; padding-left: 10px">
                                        
                                    </div>
                                </div>
        <!--Dropdown dark-->


                            </form>
                            
                        </div>
                    </div>
                    <div class="col col-sm-3 col-md-3">
                        <div class="row">
                        @if(!auth()->check())
                            <div class="col-md-12 col-sm-12 col-12 text-center">
                                <ul class="list-style-none user-conversion">
                                    <li class="dis-inline-b">
                                        <a href="{{ route('register') }}" class="btn-outline-white btn waves-effect">Log In / Register</a>
                                    </li>
                                        
                                </ul>
                            </div>
                        @else
                            <div class="col-md-12 col-sm-12 col-12">
                                <ul class="navbar-nav dis-flex flex-row">
                                    <li class="nav-item animated bounceIn list-inline-item dis-block">

                                        @if (auth()->user()->profile_picture != null)
                                            <img src="{{ route('image', [auth()->user()->profile_picture->image_reference,'']) }}" class="img img-circle bd-50p" width="50" height="50" id="profile_picture_main">
                                        @else
                                            <img src="{{ asset('/img/icons/profiled.png') }}" class="bd-50p" width="50" height="50" id="profile_picture_main">
                                        @endif
                                    </li>
                                    <li class="nav-item animated bounceIn list-inline-item dis-block z-1000">
                                        <div class="dropdown">
                                            <!-- <a class="dropdown-toggle white-text" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ auth()->user()->first_name }}
                                            </a> -->
                                            <a class="dropdown-toggle white-text" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ auth()->user()->first_name }}
                                            </a>
                                            <div class="dropdown-menu animated bounceIn" aria-labelledby="dropdownMenu3">

                                                <a class="dropdown-item waves-effect waves-light" href="{{ route('followers', auth()->user()->reference) }}">Followers</a>
                                                <a class="dropdown-item waves-effect waves-light" href="{{ route('following', auth()->user()->reference) }}">Following</a>
                                                <a class="dropdown-item waves-effect waves-light" href="{{ route('view_profile', auth()->user()->reference) }}">View Profile</a>
                                                <a class="dropdown-item waves-effect waves-light" href="{{ route('edit_profile') }}">Edit Profile</a>
                                                @if(strtolower(auth()->user()->role->name) === 'merchant')
                                                    <a class="dropdown-item waves-effect waves-light" href="{{ url('friend_requests') }}">Trade Requests</a>
                                                    <a class="dropdown-item waves-effect waves-light" href="{{ route('view_inventory', auth()->user()->reference) }}">Inventory</a>
                                                    <a class="dropdown-item waves-effect waves-light" href="{{ route('trade_partners') }}">Trade Partners</a>

                                                @endif
                                                <a class="dropdown-item waves-effect waves-light" href="{{ route('timeline', auth()->user()->reference) }}">Timeline</a>
                                                <a class="dropdown-item waves-effect waves-light" href="{{ route('logout') }}">Logout</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-12 col-sm-12 col-12 m-t-10">
                                <ul class="navbar-nav dis-flex flex-row">
                                    <li class="animated bounceIn"> 
                                        <a href="{{ route('viewCart') }}" class="p-l-10 p-r-10">
                                            <span class="pos-rel">
                                                <i class="fa fa-shopping-cart fa-lg c-white" aria-hidden="true"></i>
                                                <span class="cart-count">{{ $item_count }}</span>
                                            </span>
                                        </a>
                                    </li>
                                   {{--  <li class="animated bounceIn"> 
                                        <a href="#" class="p-l-10 p-r-10">
                                            <span class="pos-rel">
                                                <i class="fa fa-envelope fa-lg c-white" aria-hidden="true"></i>
                                                <span class="cart-count">3</span>
                                            </span>
                                        </a>
                                    </li> --}}
                                    <li class="animated bounceIn">
                                        <div class="dropdown">
                                            <a class="p-l-10 p-r-10 dropdown white-text" id="dropdownNotify" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="pos-rel">
                                                    <i class="fa fa-bell fa-lg c-white" aria-hidden="true"></i>
                                                    <span class="cart-count count_notify">{{ count(auth()->user()->socialNotification) }}</span>
                                                </span>
                                            </a>
                                            <div class="dropdown-menu notify-dropdown animated bounceIn f-12" aria-labelledby="dropdownNotify">
                                                  <h6 class="notify-header border-bottom">
                                                    Notifications
                                                  </h6>
                                                 <div class="notify">
                                                    <ul>
                                                    <img src="{{asset('img/loader.gif')}}" id="bridge_loader" style="display: none;" style="position: absolute;" alt="gg">
                                                        @forelse (auth()->user()->socialNotification as $notification)
                                                            <li class="dropdown-item notify_id{{ $notification->id }} waves-effect waves-light p-l-10 border-bottom">
                                                                <p>
                                                                    <a href="{{ route('view_profile', $notification->foreigner->reference) }}">
                                                                        @if ($notification->foreigner->profile_picture != null)
                                                                            <img src="{{ route('image', [$notification->foreigner->profile_picture->image_reference,'']) }}" class="h-40 width-40 m-r-5 bd-50p">
                                                                        @else
                                                                            <img src="{{ asset('img/icons/profiled.png') }}" class="h-40 width-40 m-r-5 bd-50p">
                                                                        @endif
                                                                    </a>
                                                                    <span>{{ $notification->message }}
                                                                    <br>
                                                                    <a class="del" data-payload="{{$notification->id}}">
                                                                        <i class="fa fa-trash text-danger pull-right"></i></a></span>
                                                                </p>
                                                                
                                                            </li>
                                                        @empty
                                                            <li class="dropdown-item waves-effect waves-light" href="" disabled>
                                                                <span id="emptied_noification">Hi {{ auth()->user()->first_name }}, you have no notification</span>
                                                            </li>
                                                        @endforelse
                                                        <center>
                                                            <span style="display: none" id="emptied_noification" class="text-center" >Hi {{ auth()->user()->first_name }}, you have no notification yet!</span>
                                                        </center>

                                                    </ul>
                                                 </div>
                                               {{--  <a class="dropdown-item waves-effect waves-light p-l-10 border-bottom" href="#">
                                                <img src="{{ asset('img/p-photo-6.jpeg') }}" class="h-40 width-40 m-r-5 bd-50p">
                                                <span>Ejike Jhud started following you</span>
                                                </a>
                                                <a class="dropdown-item waves-effect waves-light p-l-10 border-bottom" href="#"><img src="{{ asset('img/pphoto-4.jpg') }}" class="h-40 width-40 m-r-5 bd-50p">
                                                <span>Ejike Jhud Admired an item in your store</span></a>
                                                <a class="dropdown-item waves-effect waves-light p-l-10" href="#"><img src="{{ asset('img/pphoto-301.jpeg') }}" class="h-40 width-40 m-r-5 bd-50p"><span>Ejike Jhud shared a post</span>
                                                </a> --}}
                                            </div>
                                        </div>
                                        
                                             
                                            
                                    </li>
                                </ul>
                            </div>
                        @endif

                        </div>
                    </div>
                </div>               
            </div>
            @yield('header')
        </header>
        <!-- header ends here -->

@yield('content')
        
        

        <!-- JQuery -->
        <script type="text/javascript" src="{{ asset('plugins/mdb/js/jquery-3.1.1.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/social_network.js')}}"></script>
        <script src="{{asset('js/toastr.min.js')}}"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="{{ asset('plugins/mdb/js/tether.min.js')}}"></script>

        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="{{ asset('plugins/mdb/js/bootstrap.min.js')}}"></script>

        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="{{ asset('plugins/mdb/js/mdb.min.js')}}"></script>

        <!-- slick carousel -->
        <script type="text/javascript" src="{{ asset('plugins/slick/slick.min.js')}}"></script>

        <!-- Main JS -->
        <script type="text/javascript" src="{{ asset('js/main.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/social_onscroll.js')}}"></script>
        {{-- <script type="text/javascript" src="{{ asset('js/moment.js')}}"></script> --}}

        <!-- slimscroll JavaScript -->
        <script type="text/javascript" src="{{ asset('plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

        {{-- <script src="{{asset('js/social_network.js')}}"></script>
        <script src="{{asset('js/toastr.min.js')}}"></script> --}}
        <!-- SCRIPTS -->
        <script>
            document.onreadystatechange = () => {
                if (document.readyState === "complete") {
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
                    app.likeToggler();
                    app.commentHandler();
                    app.stickyHeader();
                    app.productImageUpload(4);

                    $('.notify').slimScroll({
                        height: '300px'
                    });

                    $('.search_dropdown').slimScroll({
                        // position:'absolute'
                        // position: 'relative',
                        height: '0px',
                    });

                }
            };
        </script> 

        @yield('scripts')
        
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
