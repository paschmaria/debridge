<!DOCTYPE html>
<html lang="en">
<head>
    <title>De-Bridge Follow Brands</title>
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

    <!-- Bootstrap core CSS -->
    <link href="{{  asset('plugins/mdb/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
   <link rel="stylesheet" href="{{ asset('plugins/mdb/css/mdb.min.css') }}">

    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/follow_btn.css') }}">
</head>

<body>
    <div class="main width-100p" style="height:100%;">
        <div class="page_wrapper"style="background:#f0fff0;">
            <div class="container">
                <div class="overall-card-wrapper" style="padding-top:120px; padding-bottom:5px;">
                    <div class="header text-center p-b-30" style="color:#212121;">

                        <h3 class="f-24">Follow at least 10 Brands</h3>
                        <p class="f-12">You are almost done with your sign up process, just follow a few stores of interest.</p>
                    </div>
                    <!-- select -->
                    <div class="row p-b-30">
                        <div class="col-md-2">
                             <div class="state_wrapper dis-inline" style="width:173px; color:#526173;">
                                <div class="option_header dis-inline">
                                    <h4 class="f-14">State</h4>
                                </div>
                                <div class="option_body">
                                    <select class="bd-3 bg-white h-40" style="border:1px solid #526173; width:173px;">
                                        <option>Abia</option>
                                        <option>Ananmbra</option>
                                        <option>Enugu</option>
                                        <option>Lagos</option>
                                        <option>PortHarcourt</option>
                                        <option>Abuja</option>
                                        <option>Kano</option>
                                        <option>Kaduna</option>
                                        <option>Edo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="Trade_wrapper dis-inline">
                                <div class="option_header dis-inline">
                                    <h4 class="f-14">Trade of Interest</h4>
                                </div>
                                <div class="option_body">
                                    <select class="bd-3 h-40 bg-white" style="width:173px;"><option></option></select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ select -->
                    <div class="profiles_wrapper">
                        <div class="row">
                            @foreach($users as $user)

                                <div class="col-md-3 p-b-30">
                                    <!--first card -->
                                    <div class="card h-310">
                                        <!-- card image -->
                                        <div class="view overlay hm-white-slight">
                                            <img src="{{ asset('img/pphoto-25.jpeg') }}">
                                            {{-- @if($user->image_id == null)
                                                <img src="{{ asset('img/icons/profiled.png') }}">
                                            @else
                                                <img src="{{ route('image', [$user->profile_picture->image_reference, '']) }}">
                                            @endif --}}
                                            <a href="#">
                                                <div class="mask waves-effect waves-light"></div>
                                            </a>
                                        </div>
                                        <!--/ card image -->
                                        <!-- black circle -->
                                            <div class="follow_div z-100">
                                            @if(!in_array($user->id, $following_ids))
                                                <form method="post" action="{{ route('follow', $user->email) }}">
                                                    <button class="follow_btn" id="follow"></button>
                                                </form>
                                            @else
                                                <form method="post" action="{{ route('unfollow', $user->email) }}">
                                                    <button class="unfollow_btn" id="follow"><i class="fa fa-check unfollow_i"></i></button>
                                                </form>
                                            @endif 
                                               {{--  <input class="" name="checkbox{{ $counter }}" type="checkbox" id="checkbox{{ $counter }}" value="{{ $user->id }}">
                                                <label for="checkbox{{ $counter }}"></label> --}}
                                        </div>
                                        <!--/ black circle -->
                                        <!-- card content block-->
                                        <div class="card-block">
                                            <div class="card-content pos-abs m-t-m20">
                                                <h4 class="f-14" style="color:#212121;">{{ $user->full_name() }}</h4>
                                                <p class="f-12" style="color:#526173;">{{ $user->community->community_address() }}</p>
                                            </div>
                                           
                                        </div>
                                        <!--/ card block -->
                                    </div>
                                    <!-- first card -->
                                </div>
                            @endforeach   
                        <!--/ second card row -->
                        <div class="button_wrapper width-300 m-auto m-t-40 m-b-40">
                            @if (count(auth()->user()->following->where('role_id', 2)) >= 5)
                                <a href="{{ route('index') }}"><button class="btn f-20 c-white  width-300 p-t-10 p-b-10 bg-brand-lite btn-outline-brand" style="width:256px; height:50px;">Continue</button></a>
                            @else
                                <button class="btn f-20 c-white disabled width-300 p-t-10 p-b-10 bg-brand-lite btn-outline-brand" style="width:256px; height:50px;">Continue</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    

    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="{{ asset('plugins/mdb/js/jquery-3.1.1.min.js') }}"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('plugins/mdb/js/tether.min.js') }}"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('plugins/mdb/js/bootstrap.min.js') }}"></script>

    <!-- MDL core JavaScript -->
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
        });
    </script>


</body>

</html>
