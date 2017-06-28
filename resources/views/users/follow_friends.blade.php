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

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('plugins/mdb/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
   <link rel="stylesheet" href="{{ asset('plugins/mdb/css/mdb.min.css') }}">

    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <style type="text/css">
       .checkbox{
            width:40px;
            height:40px;
            background-color:#f0fff0;
            position: relative;
            border-radius: 50%;
            top:-24px;
            left:5px;
        }   
        .checkbox input[type="checkbox"]{
            visibility: hidden;
        }
        .checkbox label{
            width:38px;
            height: 38px;
            position: absolute;
            top: 1px;
            left: 1px;
            background: #f0fff0;
            border-radius: 50%;

        }
        .checkbox label:before{
            content:'';
            width: 15px;
            height: 10px;
            border: 3px solid #fff;
            position: absolute;
            border-top:none;
            border-right:none;
            transform:rotate(-45deg);
            top:12px;
            left:12px;
            opacity: 0;
        }
        .checkbox input[type="checkbox"]:checked + label:before {
            opacity: 1;
        }
        .checkbox input[type="checkbox"]:checked + label {
            background-color:#008751;
        }

    </style>  

</head>

<body>
    <section class="main">
        <div class="page_wrapper width-100p" style="background:#f0fff0;">
            <div class="container">
                <div class="overall_card_wrapper" style="padding-top:50px;padding-bottom:5px;">
                    <div class="header text-center p-b-30" style="color:#212121;">
                        <h3 class="f-24">FOLLOW A FEW FRIENDS</h3>
                        <p class="f-12">Thank you. Just a click away follow a few friends</p>
                    </div>
                    <div class="profiles_wrapper">
                    <form action="/user/follow/friends" method="post" class="follow_form">
                        <div class="row">
                        <input type="hidden" name="{{ $counter = 0 }}">
                            <!-- fisrt card row-->
                            
                                @foreach($users as $user)

                                <input type="hidden" value="{{ $counter++ }}">
                                

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
                                                <div class="checkbox z-100">
                                                    <input class="" name="checkbox{{ $counter }}" type="checkbox" id="checkbox{{ $counter }}" value="{{ $user->id }}">
                                                    <label for="checkbox{{ $counter }}"></label>
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
                        </div>
                        <button type="submit" class="btn btn-brand">submit</button>
                    </form>
                        <!-- / first card row -->
                        {{ $users->links() }}
                        
                    <footer>
                        <div class="button_wrapper m-t-40 m-b-40 text-center">
                            <button class="btn f-20 width-300 p-b-10 bg-brand-lite btn-outline-brand h-58">Add more friends</button>

                            <button class="f-20 btn-flat width-200 h-40 p-b-43 p-t-10"><a href="registered-users.html" class="c-gray">Continue</a>
                            </button>
                        </div>                 
                    </footer>

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
   
    <script type="text/javascript">
        $("#check").click(function (){
            $(":checkbox").show();
        })
    </script>
    <script type="text/javascript">
        $('.user_ids').click(function (e){
            e.preventDefault();
            var formData = $('#follow_form').serialize();
            // alert(formData);
            $.ajax({

                url:'/user/follow/friends',
                type:'POST',
                data:formData,
                success:function(data){
                    // toastr.options.preventDuplicates = true;
                    alert(alert);
                    // toastr.success("Post achieved successfully!");
                    
                    // location.reload(true);
                },
                error: function (data) {
                    // toastr.options.preventDuplicates = true;
                    // toastr.error("An error occured... please refresh this page!");
                    alert('failed');
                    e.preventDefault();
                    // console.log(data.responseText);
                    // var obj = jQuery.parseJSON( data.responseText );
                }
            });
        })
    </script>


</body>

</html>
