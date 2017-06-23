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
        <link rel="shortcut icon" type="image/png" href="{{ asset('img/logo/debridge-logo.png')}}"/>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css')}}">

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

    </head>

    <body data-page="index">
        <!-- header begins here-->
        <header>
            <div class="container-fluid bg-brand">
                <div class="row p-t-35 p-b-10">
                    <div class="col col-sm-3 col-md-3">
                        <div class="dis-flex">
                            <figure class="m-0 m-b-10">
                                <a href="/">
                                    <img src="{{ asset('img/logo/debridge-logo.png')}}" class="img-fluid m-auto">
                                </a>
                                @if(auth()->check())
                                    <figcaption class="motto f-12 m-0 m-t-5">
                                        <a href="" class="c-white">MY PROFILE</a> |  <a href="registered-users.html" class="c-white">NIGERIAN MARKET</a>
                                    </figcaption>
                                @endif
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
                        @if(!auth()->check())
                            <div class="col-md-12 col-sm-12 col-12 text-center">
                                <ul class="list-style-none user-conversion">
                                    <li class="dis-inline-b">
                                        <a href="{{ route('register') }}" class="btn-outline-white btn waves-effect">Log In / Register</a>
                                    </li>
                                    <li class="dis-inline-b pos-rel">
                                        <a href="#" class="p-l-10 p-r-10"><span><i class="fa fa-shopping-cart fa-lg c-white" aria-hidden="true"></i></span></a>
                                        <span class="cart-count">3</span>
                                    </li>
                                </ul>
                            </div>
                        @else
                            <div class="col-md-12 col-sm-12 col-12">
                                <ul class="navbar-nav dis-flex flex-row z-10000">
                                    <li class="nav-item animated bounceIn list-inline-item dis-block">
                                        <img src="{{ asset('img/oval-6.png') }}" class="" width="50" height="50">
                                    </li>
                                    <li class="nav-item animated bounceIn list-inline-item dis-block">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle white-text" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Oladele
                                            </a>
                                            <div class="dropdown-menu animated bounceIn" aria-labelledby="dropdownMenu3">
                                                <a class="dropdown-item waves-effect waves-light" href="#">Edit Profile</a>
                                                <a class="dropdown-item waves-effect waves-light" href="#">Inventory</a>
                                                <a class="dropdown-item waves-effect waves-light" href="#">Something here</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-12 col-sm-12 col-12 m-t-10">
                                <ul class="navbar-nav dis-flex flex-row">
                                    <li class="animated bounceIn"> 
                                        <a href="mycart.html" class="p-l-10 p-r-10">
                                            <span class="pos-rel z-5000">
                                                <i class="fa fa-shopping-cart fa-lg c-white" aria-hidden="true"></i>
                                                <span class="cart-count">3</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="animated bounceIn"> 
                                        <a href="#" class="p-l-10 p-r-10">
                                            <span class="pos-rel z-5000">
                                                <i class="fa fa-envelope fa-lg c-white" aria-hidden="true"></i>
                                                <span class="cart-count">3</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="animated bounceIn">
                                        <div class="dropdown">
                                            <a class="p-l-10 p-r-10 dropdown white-text" id="dropdownNotify" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="pos-rel z-5000">
                                                    <i class="fa fa-bell fa-lg c-white" aria-hidden="true"></i>
                                                    <span class="cart-count">3</span>
                                                </span>
                                            </a>
                                            <div class="dropdown-menu notify-dropdown animated bounceIn f-12" aria-labelledby="dropdownNotify">
                                                <a class="dropdown-item waves-effect waves-light p-l-10 border-bottom" href="#">
                                                <img src="{{ asset('img/p-photo-6.jpeg') }}" class="h-40 width-40 m-r-5 bd-50p">
                                                <span>Ejike Jhud started following you</span>
                                                </a>
                                                <a class="dropdown-item waves-effect waves-light p-l-10 border-bottom" href="#"><img src="{{ asset('img/p-photo-4.jpeg') }}" class="h-40 width-40 m-r-5 bd-50p">
                                                <span>Ejike Jhud Admired an item in your store</span></a>
                                                <a class="dropdown-item waves-effect waves-light p-l-10" href="#"><img src="{{ asset('img/p-photo-301.jpeg') }}" class="h-40 width-40 m-r-5 bd-50p"><span>Ejike Jhud shared a post</span>
                                                </a>
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
        <script type="text/javascript" src="{{ asset('js/jquery-3.1.1.min.js')}}"></script>
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
        {{-- <script src="{{asset('js/social_network.js')}}"></script>
        <script src="{{asset('js/toastr.min.js')}}"></script> --}}
        <!-- SCRIPTS -->
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

           <script type="text/javascript">
       var app = {
    
    imageHandler:function (){
        $('#upload').on('change', function(){
            //alert("alert");
            readUrl();
        });
        function readUrl(argument) {
            var file = $("#upload")[0].files[0];
            //console.log(file);
            var reader = new FileReader();
            reader.onloadend = function () {
                //console.log(reader.result);
                $('#post').attr('src', reader.result);
            }
            if(file){
                reader.readAsDataURL(file);
            }
        }
    }

}
app.imageHandler();
   </script>


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