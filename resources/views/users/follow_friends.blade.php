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
    <link rel="stylesheet" href="{{ asset('css/follow_btn.css') }}">
</head>

<body>
<style type="text/css">
    .follow_count_nav {
      overflow: hidden;
      /*background-color: whitesmoke;*/
       background: rgba(54, 25, 25, .5);
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
    }
    .profiles_wrapper {
        margin-top: 100px; /* Add a top margin to avoid content overlay */
    }

</style>
    <section class="main">
        <div class="page_wrapper width-100p" style="background:#f0fff0;">
            <div class="container">
                <div class="overall_card_wrapper" style="padding-top:50px;padding-bottom:5px;">
                    <div class="header follow_count_nav text-center p-b-30" style="color:#fff;">
                        <h3 class="f-24">FOLLOW A FEW FRIENDS</h3> <button disabled class="unfollow_btn c_unfollow"   id="follow"><i style="color: #fff;" class="followers_counter count" ></i></button>
                        <p class="f-12">Thank you. Please follow atleat 10 friends to proceed.</p>
                    </div>
                    <div class="profiles_wrapper">
                        <div class="row">
                            <!-- fisrt card row-->
                            
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
                                                    <h4 class="f-14" style="color:#212121;">{{ $user->full_name() }}</h4>
                                                    <p class="f-12" style="color:#526173;">{{ $user->community_address() }}</p>
                                                </div>
                                               
                                            </div>
                                            <!--/ card block -->
                                        </div>
                                        <!-- first card -->
                                    </div>
                                @endforeach
                        </div>
                        
                        <!-- / first card row -->
                        <div class="button_wrapper text-center">{{ $users->links() }}</div>
                        
                    <footer>
                        <div class="button_wrapper m-t-40 m-b-40 text-center">
                            {{-- <button class="btn f-20 width-300 p-b-10 bg-brand-lite btn-outline-brand h-58">Add more friends</button> --}}
                            {{-- @if (count(auth()->user()->following->where('role_id', 1)) >= 10) --}}
                                {{-- <form method="post" action="{{ route('follow_friends') }}"> --}}
                                    {{-- {{ csrf_field() }} --}}
                                    <a  href="{{route('follow_merchants')}}" id="continue_follow" class=" disabled f-20 btn btn-brand width-200 h-40 p-b-43 p-t-43">Continue</a>
                                {{-- </form> --}}
                            {{-- @else --}}
                                {{-- <button id="continue_follow" class="f-20 btn btn-brand width-200 h-40 p-b-43 p-t-43 disabled">Continue</button> --}}
                            {{-- @endif --}}
                        </div>                 
                    </footer>

    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="{{ asset('plugins/mdb/js/jquery-3.1.1.min.js') }}"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('plugins/mdb/js/tether.min.js') }}"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('plugins/mdb/js/bootstrap.min.js') }}"></script>
    <script src="{{asset('js/toastr.min.js')}}"></script>


    <!-- MDL core JavaScript -->
    <script type="text/javascript" src="{{ asset('plugins/mdb/js/mdb.min.js') }}"></script>

    <!-- slick carousel -->
    <script type="text/javascript" src="{{ asset('plugins/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/social_network.js') }}"></script>
   
    <script type="text/javascript">
        $("#check").click(function (){
            // $(":checkbox").show();
        })
    </script>

</body>

</html>
