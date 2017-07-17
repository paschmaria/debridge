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
                            <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('following', auth()->user()->reference) }}">Following</a></li>
                            <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('followers', auth()->user()->reference) }}">Followers</a></li>
                            <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('timeline', auth()->user()->reference) }}">Tradeline</a></li>
                        @else
                            <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" data-toggle="modal" data-target="#basicExample">Following</a></li>
                            <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" data-toggle="modal" data-target="#basicExample">Followers</a></li>
                            <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" data-toggle="modal" data-target="#basicExample">Tradeline</a></li>
                        @endif
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="#">Business Invitation</a></li>
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="#">Models</a></li>
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="#">Market Value</a></li>
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

                        <a href="{{ route('trade_request') }}" class="list-group-item list-group-item-action">TRADE REQUEST</a>
                        @endif
                        <a href="#" class="list-group-item list-group-item-action">TRADE COMMUNITY</a>
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
            <div class="row m-t-20">
                <div class="hidden-xs-down col-sm-3 col-md-3">
                    <!--Card-->
                    <div class="card m-b-16 wow fadeInUp">

                        <!--Card image-->
                        <div class="view overlay hm-black-light hm-zoom">
                            <img src="{{ asset('img/products/leftside-ad-1.png') }}" class="img-fluid width-100p" alt="">
                            <div class="white-text mask flex-center">
                                <div class="text-center">
                                    <h2 class="m-b-20 w-700">Product Name</h2>
                                    <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                    <p class="m-b-20">25% Off</p>
                                    <a href="8.html" class="btn btn-md btn-outline-white waves-effect waves-light">Visit Store</a>
                                    <a href="" class="btn btn-md btn-outline-white waves-effect waves-light">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <!--/.Card image-->

                    </div>
                    <!--/.Card-->
                    <!--Card-->
                    <div class="card m-b-16 wow fadeInUp">

                        <!--Card image-->
                        <div class="view overlay hm-black-light hm-zoom">
                            <img src="{{ asset('img/products/leftside-ad-2.png') }}" class="img-fluid width-100p" alt="">
                            <div class="white-text mask flex-center">
                                <div class="text-center">
                                    <h2 class="m-b-20 w-700">Product Name</h2>
                                    <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                    <p class="m-b-20">25% Off</p>
                                    <a href="8.html" class="btn btn-md btn-outline-white waves-effect waves-light">Visit Store</a>
                                    <a href="" class="btn btn-md btn-outline-white waves-effect waves-light">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <!--/.Card image-->

                    </div>
                    <!--/.Card-->
                    <!--Card-->
                    <div class="card m-b-16 wow fadeInUp">

                        <!--Card image-->
                        <div class="view overlay hm-black-light hm-zoom">
                            <img src="{{ asset('img/products/leftside-ad-3.png') }}" class="img-fluid width-100p" alt="">
                            <div class="white-text mask flex-center">
                                <div class="text-center">
                                    <h2 class="m-b-20 w-700">Product Name</h2>
                                    <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                    <p class="m-b-20">25% Off</p>
                                    <a href="8.html" class="btn btn-md btn-outline-white waves-effect waves-light">Visit Store</a>
                                    <a href="" class="btn btn-md btn-outline-white waves-effect waves-light">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <!--/.Card image-->
                    </div>
                    <!--/.Card-->
                </div>
                <div class="col col-sm-6 col-md-6">
                    
                    @if(auth()->check()) 
                        <div class="card m-t-10 p-18 m-b-20">    
                            <div class="card-block p-0">
                                
                                <form enctype="multipart/form-data" method="POST" action="{{ route('create_post') }}" id="product-upload-form">
                                    {{ csrf_field() }}
                                    <div class="md-form m-0 m-b-5">
                                        <input class="input-alternate border-box" type="text" placeholder="Post title (optional)" name="title">
                                    </div>
                                    <div class="md-form m-0">
                                        <textarea type="text" name="content" id="status_update" class="md-textarea input-alternate p-10 h-100 border-box" placeholder="What's on your mind?" required></textarea>
                                    </div>
                                    <div id="product-img-wrapper" class="dis-none flex-row">
                                        <ul id="product-imgs" class=""></ul>
                                        <span class="add-img pos-rel">
                                            <span class=""><input type="file" name="file[]" class="product-img-input" multiple></span>
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
                            <li class="nav-item"><a class="nav-link hover-underline active" href="{{ route('state_market', $reference) }}">ALL</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline" href="{{ route('state_market', [$reference, 'merchant']) }}">MERCHANT</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline" href="{{ route('state_market', [$reference, 'user']) }}">INDIVIDUALS</a></li>
                        </ul>
                    </nav>
                    @forelse ($posts as $post)
                        <div class="card m-t-20 p-18">
                            <div class="media">
                                <a class="pull-left" href="{{ route('view_profile', $post->user->reference) }}">
                                    @if ($post->user->profile_picture == null)
                                        <img src="{{ asset('img/icons/profiled.png') }}" class="card media-object img-responsive h-50 width-50 m-r-10" alt="">
                                    @else
                                        <img src="{{ route('image', [$post->user->profile_picture->image_reference, '']) }}" class="card media-object img-responsive h-50 width-50 m-r-10" alt="">
                                    @endif
                                </a>
                                <div class="media-body">
                                    <h6 class="media-heading c-brand w-500">

                                        <!-- <a href="{{ route('tradeline', $post->user->id) }}" class="c-brand">{{ $post->user->full_name() }}</a> -->

                                        <a href="{{ route('timeline', $post->user->reference) }}" class="c-brand">{{ $post->user->full_name() }}</a>

                                        <span class="pull-right" style="color:grey">{{$post->updated_at->diffForHumans()}}</span>
                                    </h6>
                                    <p>{{ $post->title }}
                                        @if ($post->product !== null)
                                            <a href="{{ route('product_details', $post->product->reference) }}">
                                                <span class="c-brand pull-right m-r-20">View Product</span>
                                            </a>
                                        @endif
                                    </p> {{-- <a href="#" class="c-brand">View Product</a></p> --}}
                                </div>
                            </div>
                            @if($post->pictures != null)
                                <div class="m-t-10">
                                    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                                        <!--Indicators-->
                                        <ol class="carousel-indicators">
                                            @for ($i = 0; $i < count($post->pictures->images); $i++)
                                                <li data-target="#myCarousel" data-slide-to="{{ $i }}" @if($i === 0 )class="active"@endif></li>
                                            @endfor
                                        </ol>
                                        <!--/.Indicators-->

                                        <!--Slides-->
                                        <div class="carousel-inner" role="listbox" {{ $counter=0 }}>
                                            @foreach ($post->pictures->images as $image)
                                                <div class="carousel-item @if($counter == 0) active @endif">
                                                    <img src="{{ route('image', [$image->image_reference, '']) }}" class="img-fluid width-100p h-350" alt="First slide" {{ $counter++ }}>
                                                </div>
                                            @endforeach()
                                        </div>
                                        <!--/.Slides-->

                                        <!--Controls-->
                                        <a class="left carousel-control pos-abs l-15 t-40" href="#myCarousel" role="button" data-slide="prev">
                                            <span class="fa fa-chevron-left f-24 c-dark" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control pos-abs r-15 t-40" href="#myCarousel" role="button" data-slide="next">
                                            <span class="fa fa-chevron-right c-dark f-24" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                        <!--/.Controls-->
                                    </div>
                                    <!--/.Carousel Wrapper-->
                                </div>
                            @endif
                            <div class="m-t-10 p-5"><p>{{ $post->content }}</p></div>
                            @if(auth()->check())
                                <div class="m-b-20">
                                    <div class="btn-group bd-dark-light p-5 p-l-10 p-r-10 col-sm-12" role="group" aria-label="Ad Action Buttons">
                                        @if(!in_array($post->id, $admired))
                                            <a href="{{ route('admire', $post->reference) }}"><button type="button" class="btn bg-white m-l-3 f-14 m-r-3 f-14 width-200">
                                                <span class="">Admire&nbsp;</span><span class=""><i class="fa fa-heart-o"><small class="c-gray f-12"> {{ $post->admires->count() }}</small></i></span>
                                            </button></a>
                                        @else
                                            <a href="{{ route('unadmire', $post->reference) }}"><button type="button" class="btn bg-white m-l-3 f-14 m-r-3 f-14 width-200">
                                                <span class="">Unadmire&nbsp;</span><span class=""><i class="fa fa-heart"><small class="c-gray f-12"> {{ $post->admires->count() }}</small></i></span>
                                            </button></a>
                                        @endif
                                        <button type="button" class="btn bg-white m-l-3 f-14 m-r-3 f-14 width-200">
                                            <span class="">Comment&nbsp;</span><span class=""><i class="fa fa-comment"></i></span>
                                        </button>
                                        @if (!in_array($post->id, $hyped))
                                            <a href="{{ route('hype', $post->reference) }}"><button type="button" class="btn bg-white m-l-3 f-14 width-200">
                                                <span class="">Hype&nbsp;</span><span class=""><i class="fa fa-share-alt"></i></span>
                                            </button></a>
                                        @else
                                            <button type="button" class="btn m-l-3 f-14 width-200">
                                                <span class="">Hyped&nbsp;</span><span class=""><i class="fa fa-share-alt"></i></span>
                                            </button>
                                        @endif
                                    </div>
                                </div>
                                <!-- comment section-->
                                <div class="media m-b-15">
                                    <a class="pull-left" href="#">
                                        @if (auth()->user()->profile_picture == null)
                                            <img src="{{ asset('img/icons/profiled.png') }}" class="card media-object img-responsive h-50 width-50 m-r-10" alt="">
                                        @else
                                            <img src="{{ route('image', [auth()->user()->profile_picture->image_reference, '']) }}" class="card media-object img-responsive h-50 width-50 m-r-10" alt="">
                                        @endif
                                    </a>
                                    <div class="media-body">
                                        <form method="post" action="{{ route('create_comment', $post->reference) }}">
                                            {{ csrf_field() }}
                                            <textarea name="content" id="" class="md-textarea input-alternate p-10 h-58 border-box" placeholder="Press enter to send..."></textarea>
                                            <button type="submit" class="btn btn-brand btn-sm pull-right">comment</button>
                                        </form>
                                    </div>
                                </div>
                            @else
                                <div class="m-b-20">
                                    <div class="btn-group bd-dark-light p-5 p-l-10 p-r-10 col-sm-12" role="group" aria-label="Ad Action Buttons">
                                        <button type="button" class="btn bg-white m-l-3 f-14 m-r-3 f-14 width-200" data-toggle="modal" data-target="#basicExample" >
                                            <span class="">Admire&nbsp;</span><span class=""><i class="fa fa-heart-o"></i><small class="c-gray f-12"> {{ $post->admires->count() }}</small></span>
                                        </button>
                                        
                                        <button type="button" class="btn bg-white m-l-3 f-14 m-r-3 f-14 width-200" data-toggle="modal" data-target="#basicExample">
                                            <span class="">Comment&nbsp;</span><span class=""><i class="fa fa-comment"></i></span>
                                        </button>
                                        <button type="button" class="btn bg-white m-l-3 f-14 width-200" data-toggle="modal" data-target="#basicExample">
                                            <span class="">Hype&nbsp;</span><span class=""><i class="fa fa-share-alt"></i></span>
                                        </button>
                                    </div>
                                </div>
                            @endif
                            @forelse($post->comments as $comment)
                                <div class="media m-b-20">
                                    <div class="pull-left p-r-10">
                                        <a href="{{ route('view_profile', $comment->user->reference) }}">
                                            @if ($comment->user->image_id == null)
                                                <img src="{{ asset('img/icons/profiled.png') }}" class="card media-object img-responsive h-50 width-50 m-r-10" alt="">

                                            @else
                                                <img src="{{ route('image', [$comment->user->profile_picture->image_reference, '']) }}" class="card media-object img-responsive h-50 width-50 m-r-10" alt="">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="{{ route('view_profile', $comment->user->reference) }}"><h6 class="media-heading w-700 m-b-5 f-12 c-brand">{{ $comment->user->full_name() }}</h6></a>
                                        <p m-b- f-12>{{ $comment->content }}</p>
                                        <ul class="m-b-0 f-12">
                                            <li class="c-brand dis-inline-b p-r-10"><a href="#"><span><i class="fa fa-heart-o"></i></span> Like</a></li>
                                            <li class="c-brand dis-inline-b p-l-10 p-r-10"><a href="#">Reply</a></li>
                                            <li class="c-brand dis-inline-b p-l-10">{{ $comment->updated_at->diffForHumans() }}</li>
                                        </ul>
                                        @if(auth()->check())
                                            <div class="media m-t-5">
                                                <div class="pull-left p-r-10">
                                                    @if (auth()->user()->profile_picture == null)
                                                        <img src="{{ asset('img/icons/profiled.png') }}" class="media-object p-r-10" alt="">
                                                    @else
                                                        <img src="{{ route('image', [auth()->user()->profile_picture->image_reference, '']) }}" class="card media-object img-responsive h-50 width-50 m-r-10" alt="">
                                                    @endif
                                                </div>
                                                <div class="media-body">
                                                    <form method="post" action="{{ route('create_comment', $post->reference) }}">
                                                        {{ csrf_field() }}
                                                        <textarea name="" class="md-textarea input-alternate p-10 h-58 border-box" placeholder="Write a reply..."></textarea>
                                                    </form>
                                                </div>
                                            </div> 
                                        @endif
                                    </div>
                                </div>
                            @empty
                                {{-- empty expr --}}
                            @endforelse  
                            <!--/. comment section-->
                        </div>
                    @empty
                        {{-- empty expr --}}
                    @endforelse
                </div>
                <div class="hidden-xs-down col-sm-3 col-md-3">
                    <!--Card-->
                    <div class="card m-b-16 wow fadeInUp">

                        <!--Card image-->
                        <div class="view overlay hm-black-light hm-zoom">
                            <img src="{{ asset('img/products/rightside-ad-1.png') }}" class="img-fluid width-100p" alt="">
                            <div class="white-text mask flex-center">
                                <div class="text-center">
                                    <h2 class="m-b-20 w-700">Product Name</h2>
                                    <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                    <p class="m-b-20">25% Off</p>
                                    <a href="8.html" class="btn btn-md btn-outline-white waves-effect waves-light">Visit Store</a>
                                    <a href="" class="btn btn-md btn-outline-white waves-effect waves-light">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <!--/.Card image-->

                    </div>
                    <!--/.Card-->
                    <!--Card-->
                    <div class="card m-b-16 wow fadeInUp">

                        <!--Card image-->
                        <div class="view overlay hm-black-light hm-zoom">
                            <img src="{{ asset('img/products/rightside-ad-2.png') }}" class="img-fluid width-100p" alt="">
                            <div class="white-text mask flex-center">
                                <div class="text-center">
                                    <h2 class="m-b-20 w-700">Product Name</h2>
                                    <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                    <p class="m-b-20">25% Off</p>
                                    <a href="8.html" class="btn btn-md btn-outline-white waves-effect waves-light">Visit Store</a>
                                    <a href="" class="btn btn-md btn-outline-white waves-effect waves-light">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <!--/.Card image-->

                    </div>
                    <!--/.Card-->
                    <!--Card-->
                    <div class="card m-b-16 wow fadeInUp">

                        <!--Card image-->
                        <div class="view overlay hm-black-light hm-zoom">
                            <img src="{{ asset('img/products/rightside-ad-3.png') }}" class="img-fluid width-100p" alt="">
                            <div class="white-text mask flex-center">
                                <div class="text-center">
                                    <h2 class="m-b-20 w-700">Product Name</h2>
                                    <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                    <p class="m-b-20">25% Off</p>
                                    <a href="8.html" class="btn btn-md btn-outline-white waves-effect waves-light">Visit Store</a>
                                    <a href="" class="btn btn-md btn-outline-white waves-effect waves-light">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <!--/.Card image-->
                    </div>
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
        // document.onreadystatechange = () => {
        //     if (document.readyState === "complete") {
        //         app.productImageUpload(4);
        //     }
        // }
    </script> --}}
 @endsection   
