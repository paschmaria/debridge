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
                    <div class="header follow_count_nav text-center p-t-20 p-b-10 bg-brand">
                        <h3 class="f-24">FOLLOW AT LEAST 5 MERCHANTS</h3>                             
                            <button disabled class="unfollow_btn c_unfollow c-white" id="follow"><i class="followers_counter m_count c-white" ></i></button>
                        <p class="f-16">You are almost done with your sign up process, just follow a few stores of interest.</p>
                    </div>
        <div class="page_wrapper"style="background:#f0fff0;">
            <div class="container">
                <div class="overall-card-wrapper m-t-40" style="padding-top:120px; padding-bottom:5px;">
                    <!-- select -->
                    <div class="row p-b-10">
                        <div class="col-md-4">
                             <div class="state_wrapper dis-inline" style="width:173px; color:#526173;">
                                <div class="option_body">
                                    <select name="state" class="form-control bd-3 h-40 validate input-alternate border-box input-shadow f-14 p-l-10">
                                        <option selected disabled>Filter by state...</option>
                                        @foreach($states as $state)
                                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                                        @endforeach
                                    </select>
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
                                            @if($user->image_id == null)
                                                <img class="card width-100p h-200" src="{{ asset('img/icons/profiled.png') }}">
                                            @else
                                                <img class="card width-100p h-200" src="{{ route('image', [$user->profile_picture->image_reference, '']) }}">
                                            @endif
                                            <a href="">
                                                <div class="mask waves-effect waves-light"></div>
                                            </a>
                                        </div>
                                        <!--/ card image -->
                                        <!-- black circle -->
                                            <div class="follow_div z-100">
                                            @if(!in_array($user->id, $following_ids))
                                                <button class="follow_btn c_follow " data-email="{{$user->reference}}" data-fname="{{$user->full_name()}}" data-id="{{$user->id}}" id="follow"></button>
                                            @else
                                                <button class="unfollow_btn c_unfollow" data-email="{{$user->reference}}" data-fname="{{$user->full_name()}}" data-id="{{$user->id}}" id="follow"><i id=""  class="fa fa-check unfollow_i"></i></button>
                                            @endif 
                                               {{--  <input class="" name="checkbox{{ $counter }}" type="checkbox" id="checkbox{{ $counter }}" value="{{ $user->id }}">
                                                <label for="checkbox{{ $counter }}"></label> --}}
                                        </div>
                                        <!--/ black circle -->
                                        <!-- card content block-->
                                        <div class="card-block">
                                            <div class="card-content pos-abs m-t-m20">
                                                <h4 class="f-14 c-brand">{{ $user->full_name() }}</h4>
                                                <p class="f-12">{{ $user->community->community_address() }}</p>
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
                                <form method="post" action="{{ route('follow_merchants') }}">
                                    {{ csrf_field() }}
                                    <button class="btn f-20 c-white  width-300 p-t-10 p-b-10 bg-brand-lite btn-outline-brand" style="width:256px; height:50px;">Continue</button>
                                </form>
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

    <script type="text/javascript" src="{{ asset('js/social_network.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <script>
        
    </script>


</body>

</html>
