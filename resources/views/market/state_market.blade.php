@extends('layouts.master')
@section('header')
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
                    @if(auth()->check())
                        @if(auth()->user()->checkRole())
                            <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('view_friends', auth()->user()->reference) }}">Friends</a></li>
                        @else
                            <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('view_partners', auth()->user()->reference) }}">Trade Partners</a></li>
                        @endif
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('following', auth()->user()->reference) }}">Following</a></li>
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('followers', auth()->user()->reference) }}">Followers</a></li>
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('timeline', auth()->user()->reference) }}">Tradeline</a></li>
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('community', auth()->user()->reference) }}">Trade Community</a></li>
                    @else
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" data-toggle="modal" data-target="#basicExample">Following</a></li>
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" data-toggle="modal" data-target="#basicExample">Followers</a></li>
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" data-toggle="modal" data-target="#basicExample">Tradeline</a></li>
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" data-toggle="modal" data-target="#basicExample">Trade Community</a></li>
                    @endif
                    <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('bridge_shops') }}">Bridger Shops</a></li>
                    <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('araha_market') }}">Araha Market</a></li>
                    <li class="nav-item"><a class="nav-link hover-underline text-uppercase" href="{{ route('exhibition') }}">Exhibition Stand</a></li>
                    <li class="nav-item"><a class="nav-link hover-underline text-uppercase" href="{{ route('hiring') }}">Hiring</a></li>
                </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
    <!-- navigations/links ends here -->
@endsection
            
@section('content')
         <!-- main section begins here-->
        <section class="main">
          <div class="container-fluid">

            <div class="row m-t-20">
                <div class="hidden-xs-down col-sm-3 col-md-3">
                    <div class="list-group m-b-20">
                        <a href="{{ route('view_users') }}" class="list-group-item list-group-item-action">BRIDGER</a>
                        @if(auth()->check() && strtolower(auth()->user()->role->name) === 'merchant')
                            <a href="{{ route('view_trade_request') }}" class="list-group-item list-group-item-action">TRADE REQUEST</a>
                        @endif
                        @if(auth()->check())
                            <a href="{{ route('community', auth()->user()->reference) }}" class="list-group-item list-group-item-action">TRADE COMMUNITY</a>
                        @else
                            <a data-toggle="modal" data-target="#basicExample" class="list-group-item list-group-item-action">TRADE COMMUNITY</a>
                        @endif
                        <a href="#" class="list-group-item list-group-item-action">BRIDGE POINT</a>
                        @if(Auth::check() && isset(auth()->user()->bridgeCode))
                            <a href="" class="list-group-item list-group-item-action" disable>
                                BRIDGE CODE: ({{ auth()->user()->bridgeCode->code }})
                            </a>
                        @endif
                    </div>
                    
                    <div class="btn-group-vertical width-100p" role="group" aria-label="Profile Navigation Links">
                        <a href="#" class="btn btn-outline-default btn-block waves-effect">B - ANALYTOR</a>
                        <a href="#" class="btn btn-outline-default btn-block waves-effect">CATEGORIES</a>
                    </div>
                </div>
                <div class="col-sm-3 push-sm-6 col-md-3">
                    @include('layouts.partials.map_no_div')
                </div>
                <div class="col-sm-6 pull-sm-3 col-md-6">
                    <div class="row no-gutters">
                        <div class="col-md-8 col-sm-12 col">
                            <div class="carousel_big">
                                <figure class="pos-rel m-0">
                                    <div class="c-white text-center carousel-ad-overlay bg-opacity-40 animated fadeInDown hidden-sm-down hidden-xs-down">
                                        <p class="m-b-10">GET DISCOUNT ON FEMALE CLOTHING</p>
                                        <p class="m-0">25% OFF</p>
                                    </div>
                                    <img src="{{ asset('img/background/carousels/carousel_img-1.png') }}" alt="" class="img-fluid">
                                </figure>
                              
                                <figure class="pos-rel m-0">
                                    <div class="c-white text-center carousel-ad-overlay bg-opacity-40 animated fadeInDown hidden-sm-down hidden-xs-down">
                                        <p class="m-b-10">GET DISCOUNT ON FEMALE CLOTHING</p>
                                        <p class="m-0">25% OFF</p>
                                    </div>
                                    <img src="{{ asset('img/background/carousels/carousel_img-2.png') }}" alt="" class="img-fluid">
                                </figure>
                                <figure class="pos-rel m-0">
                                    <div class="c-white text-center carousel-ad-overlay bg-opacity-40 animated fadeInDown hidden-sm-down hidden-xs-down">
                                        <p class="m-b-10">GET DISCOUNT ON FEMALE CLOTHING</p>
                                        <p class="m-0">25% OFF</p>
                                    </div>
                                    <img src="{{ asset('img/background/carousels/carousel_img-3.png') }}" alt="" class="img-fluid">
                                </figure>
                                <figure class="pos-rel m-0">
                                    <div class="c-white text-center carousel-ad-overlay bg-opacity-40 animated fadeInDown hidden-sm-down hidden-xs-down">
                                        <p class="m-b-10">GET DISCOUNT ON FEMALE CLOTHING</p>
                                        <p class="m-0">25% OFF</p>
                                    </div>
                                    <img src="{{ asset('img/background/carousels/carousel_img-4.png') }}" alt="" class="img-fluid">
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-4 hidden-sm-down hidden-xs-down">
                            <div class="carousel_small">
                                <figure class="m-0">
                                    <img src="{{ asset('img/background/carousels/carousel_img-1.png') }}" alt="" class="img-fluid">
                                </figure>
                                <figure class="m-0">
                                    <img src="{{ asset('img/background/carousels/carousel_img-2.png') }}" alt="" class="img-fluid">
                                </figure>
                                <figure class="m-0">
                                    <img src="{{ asset('img/background/carousels/carousel_img-3.png') }}" alt="" class="img-fluid">
                                </figure>
                                <figure class="m-0">
                                    <img src="{{ asset('img/background/carousels/carousel_img-4.png') }}" alt="" class="img-fluid">
                                </figure>
                            </div>
                        </div>  
                    </div>
                    <div class="c-brand p-5">
                        <h2 class="text-left h2-responsive f-32">THE {{ strtoupper($state->name) }} MARKET</h2>
                        <p class="text-right text-fluid f-20">...{{ ucfirst($state->slogan) }}</p>
                    </div>
                </div>                
            </div>
            <div class="row">
                <div class="hidden-xs-down col-sm-3 col-md-3">
                    <div class="card-header transparent">
                        <p class="m-0 text-center w-500 c-brand"><i class="fa fa-star f-20"></i> &nbsp MOST VIEWED PRODUCTS</p>
                    </div>
                    <!--Card-->
                        @foreach($products->splice(0,3) as $product)
                            <div class="card m-b-16 wow fadeInUp">

                                <!--Card image-->
                                    <div class="view overlay hm-black-light hm-zoom">
                                        <a href="{{ route('product_details', $product->reference) }}" class="waves-effect waves-light">
                                            @if($product->pictures != null && $product->pictures->images[0] != null)
                                                <img src="{{ route('image', [$product->pictures->images[0]->image_reference, '']) }}" class="img-fluid width-100p h-300" >
                                            @else
                                                <img src="{{ asset('img/products/rectangle.png') }}" class="img-fluid width-100p h-300" >
                                            @endif
                                        </a>
                                        <div class="white-text mask flex-center">
                                            <div class="text-center">
                                                <h2 class="m-b-20 w-700">{{ $product->name }}</h2>
                                                @if($product->promo_price == null)
                                                    <p class="m-b-20 f-24">&#8358;{{  $product->price }}</p>
                                                @else
                                                    <p class="m-b-20 f-24"><span>&#8358; {{ $product->promo_price }}</span> <del><span>&#8358; {{ $product->price }}</span></del></p>
                                                @endif
                                                <a href="{{ route('view_inventory', $product->user->reference) }}"><button class="btn btn-md btn-outline-white waves-effect waves-light">Visit Store</button></a>
                                                @if (auth()->check())
                                                    <a href="{{ route('addToCart', $product->reference) }}"><button class="btn btn-md btn-outline-white waves-effect waves-light">Add to cart</button></a>
                                                @endif
                                                <a href="{{ route('product_details', $product->reference) }}" class="waves-effect waves-light">click here to view product</a>
                                            </div>
                                        </div>
                                    </div>
                                <!--/.Card image-->
                            </div>
                        @endforeach
                    <!--/.Card-->
                </div>
                <div class="col col-sm-6 col-md-6" id="timeline">
                    
                    @if(auth()->check()) 
                        <div class="card m-t-10 p-18 m-b-20">    
                            <div class="card-block p-0">
                                
                                <form enctype="multipart/form-data" method="POST" action="{{ route('create_post') }}" 
                                    @if(auth()->user()->community && (auth()->user()->community->state_id == $state->id))
                                        data-status="1" 
                                    @else 
                                        data-status="0" 
                                    @endif  id="product-upload-form" >
                                    {{ csrf_field() }}
                                    <div class="md-form m-0 m-b-5">
                                        <input class="input-alternate border-box" type="text" id="post_title" placeholder="Post title (optional)" name="title">
                                    </div>
                                    <div class="md-form m-0">
                                        <textarea type="text" name="content" id="status_update" class="md-textarea input-alternate p-10 h-100 border-box" placeholder="What's on your mind?" required></textarea>
                                    </div>
                                    <div id="product-img-wrapper" class="dis-none flex-row">
                                        <ul id="product-imgs" class=""></ul>
                                        <span class="add-img pos-rel">
                                            <span class=""><input type="file" id="post_image" name="file[]" class="product-img-input" multiple></span>
                                            <button type="button" class="btn-upload btn-product-img"><i class="fa fa-plus fa-3x"></i></button>
                                        </span>
                                    </div>
                                    <div id="">
                                        <button type="button" class="btn-flat btn-product-img"><i class="fa fa-image"></i> upload</button>
                                        <input type="file" class="product-img-input" name="file[]" multiple>
                                        <button type="submit" class="btn btn-brand waves-effect">post</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endif
                    <nav class="navbar user-type-navbar no-shadow">
                        <ul class="nav user-type-nav text-center">
                            <li class="nav-item"><a class="nav-link hover-underline @if(strtolower($filter == ''))active @endif" href="{{ route('state_market', $reference) }}">ALL</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline @if($filter == 'merchant')active @endif" href="{{ route('state_market', [$reference, 'merchant']) }}">MERCHANT</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline @if($filter == 'user')active @endif" href="{{ route('state_market', [$reference, 'user']) }}">INDIVIDUALS</a></li>
                        </ul>
                    </nav>
                    
                    <input type="hidden" name="timestamp" id="timestamp" value="{{ $timestamp }}">

                    @include('market.partials.timeline')
                    
                </div>
                <div class="hidden-xs-down col-sm-3 col-md-3">
                    <div class="card-header transparent">
                        <p class="m-0 text-center w-500 c-brand"><i class="fa fa-star f-20"></i> &nbsp MOST VIEWED PRODUCTS</p>
                    </div>
                    <!--Card-->
                        @foreach($products->splice(3,6) as $product)
                            <div class="card m-b-16 wow fadeInUp">

                                <!--Card image-->
                                    <div class="view overlay hm-black-light hm-zoom">
                                        <a href="{{ route('product_details', $product->reference) }}" class="waves-effect waves-light">
                                            @if($product->pictures != null && $product->pictures->images[0] != null)
                                                <img src="{{ route('image', [$product->pictures->images[0]->image_reference, '']) }}" class="img-fluid width-100p h-300" >
                                            @else
                                                <img src="{{ asset('img/products/rectangle.png') }}" class="img-fluid width-100p h-300" >
                                            @endif
                                        </a>
                                        <div class="white-text mask flex-center">
                                            <div class="text-center">
                                                <h2 class="m-b-20 w-700">{{ $product->name }}</h2>
                                                @if($product->promo_price == null)
                                                    <p class="m-b-20 f-24">&#8358;{{  $product->price }}</p>
                                                @else
                                                    <p class="m-b-20 f-24"><span>&#8358; {{ $product->promo_price }}</span> <del><span>&#8358; {{ $product->price }}</span></del></p>
                                                @endif
                                                <a href="{{ route('view_inventory', $product->user->reference) }}"><button class="btn btn-md btn-outline-white waves-effect waves-light">Visit Store</button></a>
                                                @if (auth()->check())
                                                    <a href="{{ route('addToCart', $product->reference) }}"><button class="btn btn-md btn-outline-white waves-effect waves-light">Add to cart</button></a>
                                                @endif
                                                <a href="{{ route('product_details', $product->reference) }}" class="waves-effect waves-light">click here to view product</a>
                                            </div>
                                        </div>
                                    </div>
                                <!--/.Card image-->
                            </div>
                        @endforeach
                    <!--/.Card-->
                </div>
            </div>

          </div>
          <!--modal-->
                <div class="modal fade width-100p m-t-180" id="basicExample" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <!--Content-->
                        <div class="modal-content bg-brand-lite">
                            <!--Header-->
                            <div class="modal-header bg-brand">
                                <h4 class="modal-title w-100 m-auto c-white text-center" id="myModalLabel">Join Debridge </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" class="c-white">&times;</span>
                                </button>
                            </div>
                            <!--Body-->
                            <div class="modal-body">
                                <p class="text-center f-20 m-t-20 m-b-10 c-dark">Please sign up or log in to continue</p>
                                <div class="modal-signup text-center m-b-10">
                                    <a href="{{ route('register') }}">
                                        <button class="btn btn-md bg-brand text-center f-16">Log in/Register</button>
                                    </a>
                                </div>
                            </div>
                            <!--Footer-->
                            {{-- <div class="modal-footer border-top">
                                <div class="m-auto">
                                    <p class="text-center c-dark f-16">Have an account? <a href="#" class="c-brand">Log in</a></p>
                                </div>
                                
                            </div> --}}
                        </div>
                        <!--/.Content-->
                    </div>
                </div>
                            <!--/modal-->
        </section>
        <!-- main section ends here-->
 @endsection  

 @section('scripts') 
  {{--   <script>
        // document.onreadystatechange = function() {
        //     if (document.readyState === "complete") {
        //         app.productImageUpload(4);
        //     }
        // }
    </script> --}}
    <script>
        $(document).ready(function () {
            var page = 2;
            $(window).scroll(function(){
                var timestamp = $('#timestamp').val();
                var scroll_height = $(window).scrollTop() + $(window).height();
                var doc_height = $(document).height() - 10;
                if ( scroll_height >= doc_height ) {
                    $.ajax({
                        url: document.URL,
                        type:'GET',
                        data:{'page': page, 'timestamp': timestamp},
                        success:function(data){
                            $('#timeline').append(data) ;
                        },
                        error: function (data) {
                            
                        }
                    });
                    page += 1;
                }
            });
        }); 
    </script>
 @endsection   
