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
                            <li class="nav-item"><a class="nav-link hover-underline" href="{{ route('follow_page') }}">FRIENDS</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline" href="tradeline.html">TRADELINE</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline" href="{{ route('timeline', auth()->user()->reference) }}">TIMELINE</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline" href="#">BUSINESS INVITATION</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline" href="#">MODELS</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline" href="#">MARKET VALUE</a></li> 
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
            @if($user->role->name !== "Merchant")
                <div class="">
                    <h1 class="h1-responsive f-48 text-center m-t-20 m-b-25 c-brand w-500">{{ strtoupper($user->full_name()) }}</h1>
                </div>
            @else
                <div class="">
                    <h1 class="h1-responsive f-48 text-center m-t-20 m-b-25 c-brand w-500">{{ strtoupper($user->full_name()) }}</h1>
                </div>
            @endif

            <div class="row">
                <div class="hidden-xs-down col-sm-3 col-md-3 m-t-20">
                    <div class="list-group m-b-20">
                        <a href="bridger.html" class="list-group-item list-group-item-action">BRIDGER</a>
                        <a href="tradeRequest.html" class="list-group-item list-group-item-action">TRADE REQUEST</a>
                        <a href="#" class="list-group-item list-group-item-action">TRADE COMMUNITY</a>
                        <a href="#" class="list-group-item list-group-item-action">BRIDGE POINT</a>
                        <a href="#" class="list-group-item list-group-item-action">BRIDGE CODE</a>
                    </div>
                    
                    <div class="btn-group-vertical width-100p" role="group" aria-label="Profile Navigation Links">
                        <a href="#" class="btn btn-outline-default btn-block waves-effect">B - ANALYTOR</a>
                        <a href="#" class="btn btn-outline-default btn-block waves-effect">CATEGORIES</a>
                    </div>

                    <!--Card-->
                    <div class="card m-b-16 m-t-20">
                        <!-- Card header -->
                        <div class="card-header transparent">
                            <p class="m-0 text-center w-500 c-brand">MOST SEARCHED PRODUCT IN LAGOS</p>
                        </div>

                        <!--Card image-->
                        <div class="view overlay hm-black-light hm-zoom">
                            <img src="{{ asset('img/products/rectangle.png') }}" class="img-fluid width-100p" alt="">
                            <div class="white-text mask flex-center">
                                <div class="text-center">
                                    <h2 class="m-b-20 w-700">Product Name</h2>
                                    <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                    <p class="m-b-20">25% Off</p>
                                    <a href="8.html" class="btn btn-md btn-outline-white waves-effect waves-light">Visit Store</a>
                                    <a href="" class="btn btn-md btn-outline-white waves-effect waves-light">Add Item</a>
                                </div>
                            </div>
                        </div>
                        <!--/.Card image-->
                        <!--Card image-->
                        <div class="view overlay hm-black-light hm-zoom">
                            <img src="{{ asset('img/products/rectangle2.png') }}" class="img-fluid width-100p" alt="">
                            <div class="white-text mask flex-center">
                                <div class="text-center">
                                    <h2 class="m-b-20 w-700">Product Name</h2>
                                    <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                    <p class="m-b-20">25% Off</p>
                                    <a href="8.html" class="btn btn-md btn-outline-white waves-effect waves-light">Visit Store</a>
                                    <a href="" class="btn btn-md btn-outline-white waves-effect waves-light">Add Item</a>
                                </div>
                            </div>
                        </div>
                        <!--/.Card image-->
                        <!--Card image-->
                        <div class="view overlay hm-black-light hm-zoom">
                            <img src="{{ asset('img/products/rectangle.png') }}" class="img-fluid width-100p" alt="">
                            <div class="white-text mask flex-center">
                                <div class="text-center">
                                    <h2 class="m-b-20 w-700">Product Name</h2>
                                    <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                    <p class="m-b-20">25% Off</p>
                                    <a href="8.html" class="btn btn-md btn-outline-white waves-effect waves-light">Visit Store</a>
                                    <a href="" class="btn btn-md btn-outline-white waves-effect waves-light">Add Item</a>
                                </div>
                            </div>
                        </div>
                        <!--/.Card image-->
                        <!--Card image-->
                        <div class="view overlay hm-black-light hm-zoom">
                            <img src="{{ asset('img/products/rectangle-3.png') }}" class="img-fluid width-100p" alt="">
                            <div class="white-text mask flex-center">
                                <div class="text-center">
                                    <h2 class="m-b-20 w-700">Product Name</h2>
                                    <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                    <p class="m-b-20">25% Off</p>
                                    <a href="8.html" class="btn btn-md btn-outline-white waves-effect waves-light">Visit Store</a>
                                    <a href="" class="btn btn-md btn-outline-white waves-effect waves-light">Add Item</a>
                                </div>
                            </div>
                        </div>
                        <!--/.Card image-->
                        <!--Card image-->
                        <div class="view overlay hm-black-light hm-zoom">
                            <img src="{{ asset('img/products/rectangle-3.png') }}" class="img-fluid width-100p" alt="">
                            <div class="white-text mask flex-center">
                                <div class="text-center">
                                    <h2 class="m-b-20 w-700">Product Name</h2>
                                    <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                    <p class="m-b-20">25% Off</p>
                                    <a href="8.html" class="btn btn-md btn-outline-white waves-effect waves-light">Visit Store</a>
                                    <a href="" class="btn btn-md btn-outline-white waves-effect waves-light">Add Item</a>
                                </div>
                            </div>
                        </div>
                        <!--/.Card image-->

                    </div>
                    <!--/.Card-->
                </div>
                <div class="col col-sm-6 col-md-6">
                    <div class="card m-t-20 p-18">
                         
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
                    @forelse ($posts as $post)
                        <div class="card m-t-20 p-18">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object p-r-10" src="{{ asset('img/acc-img-1.png') }}" alt="Image">
                                        {{-- correct one --}}
                                        {{-- @if ($post->user->image_id == null)
                                            <img src="{{ asset('img/icons/profiled.png') }}" class="media-object p-r-10" alt="">
                                        @else
                                            <img src="{{ route('image', [$post->user->profile_picture->image_reference, '']) }}" class="media-object p-r-10" alt="">
                                        @endif --}}
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading c-brand w-500">
                                            <a href="{{ route('timeline', $post->user->reference) }}" class="c-brand">{{ $post->user->full_name() }}</a>
                                            <span class="pull-right" style="color:grey">{{$post->updated_at->diffForHumans()}}</span>
                                        </h6>
                                        <p>{{ $post->title }}</p> {{-- <a href="#" class="c-brand">View Product</a></p> --}}
                                    </div>
                                </div>

                                <div class="card-group">
                                    <div class="card m-5">
                                        <!--Card image-->
                                        <div class="view overlay hm-white-slight">
                                            <img src="{{ asset('img/products/timeline-product-1.png') }}" class="img-fluid width-100p" alt="">
                                            <a href="#">
                                                <div class="mask waves-effect waves-light"></div>
                                            </a>
                                        </div>
                                        <!--/.Card image-->
                                    </div>
                                    <div class="card m-5">
                                        <!--Card image-->
                                        <div class="view overlay hm-white-slight">
                                            <img src="{{ asset('img/products/timeline-product-2.png') }}" class="img-fluid width-100p" alt="">
                                            <a href="#">
                                                <div class="mask waves-effect waves-light"></div>
                                            </a>
                                        </div>
                                        <!--/.Card image-->
                                    </div>
                                </div>
                                <div class="col-sm-12 m-t-10"><p>{{ $post->content }}</p></div>

                                <div class="m-b-20">
                                    <div class="btn-group bd-dark-light p-5 p-l-10 p-r-10 col-sm-12" role="group" aria-label="Ad Action Buttons">
                                        @if(!in_array($post->id, $admired))
                                            <a href="{{ route('admire', $post->id) }}"><button type="button" class="btn bg-white m-l-3 f-14 m-r-3 f-14 width-200">
                                                <span class="">Admire&nbsp;</span><span class=""><i class="fa fa-heart-o"></i></span>
                                            </button></a>
                                        @else
                                            <a href="{{ route('unadmire', $post->id) }}"><button type="button" class="btn bg-white m-l-3 f-14 m-r-3 f-14 width-200">
                                                <span class="">Unadmire&nbsp;</span><span class=""><i class="fa fa-heart"></i></span>
                                            </button></a>
                                        @endif
                                        <button type="button" class="btn bg-white m-l-3 f-14 m-r-3 f-14 width-200">
                                            <span class="">Comment&nbsp;</span><span class=""><i class="fa fa-comment"></i></span>
                                        </button>
                                        @if (!in_array($post->id, $hyped))
                                            <a href="{{ route('hype', $post->id) }}"><button type="button" class="btn bg-white m-l-3 f-14 width-200">
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
                                        <img class="media-object p-r-10" src="{{ asset('img/acc-img-1.png') }}" alt="Image">
                                        {{-- @if ($comment->user->image_id == null)
                                            <img src="{{ asset('img/icons/profiled.png') }}" class="media-object p-r-10" alt="Image">
                                        @else
                                            <img src="{{ route('image', [auth()->user()->profile_picture->image_reference, '']) }}" class="img-fluid width-100p" alt="">
                                        @endif --}}
                                    </a>
                                    <div class="media-body">
                                        <form method="post" action="{{ route('create_comment', $post->id) }}">
                                            {{ csrf_field() }}
                                            <textarea name="content" id="" class="md-textarea input-alternate p-10 h-58 border-box" placeholder="Press enter to send..."></textarea>
                                            <button type="submit" class="btn btn-brand btn-sm pull-right">comment</button>
                                        </form>
                                    </div>
                                </div>
                                @forelse($post->comments as $comment)
                                    <div class="media m-b-40">
                                        <div class="media">
                                            <div class="pull-left p-r-10">
                                                <img class="media-object " src="{{ asset('img/acc-img-2.png') }}" alt="Image">
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading w-700 m-b-5 f-12">{{ $comment->user->full_name() }}</h6>
                                                <p m-b- f-12>{{ $comment->content }}</p>
                                                <ul class="m-b-0 f-12">
                                                    <li class="c-brand dis-inline-b p-r-10"><a href="#"><span><i class="fa fa-heart-o"></i></span> Like</a></li>
                                                <li class="c-brand dis-inline-b p-l-10 p-r-10"><a href="#">Reply</a></li>
                                                <li class="c-brand dis-inline-b p-l-10">{{ $comment->updated_at->diffForHumans() }}</li>
                                                </ul>
                                                <div class="media m-t-5">
                                                    <div class="pull-left p-r-10">
                                                        <img src="{{ asset('img/acc-img-1.png') }}" class="media-object">
                                                        {{-- @if ($comment->user->image_id == null)
                                                            <img src="{{ asset('img/icons/profiled.png') }}" class="media-object" alt="Image">
                                                        @else
                                                            <img src="{{ route('image', [auth()->user()->profile_picture->image_reference, '']) }}" class="media-object" alt="">
                                                        @endif --}}
                                                    </div>
                                                    <div class="media-body">
                                                        <form method="post" action="{{ route('create_comment', $post->reference) }}">
                                                            {{ csrf_field() }}
                                                            <textarea name="" class="md-textarea input-alternate p-10 h-58 border-box" placeholder="Write a reply..."></textarea>
                                                        </form>
                                                    </div>
                                                </div> 
                                            </div>
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
                <div class="col-sm-3 col-md-3 m-t-20">
                    @include('layouts.partials.map_no_div')
                </div>
            </div>

          </div>
        </section>
        <!-- main section ends here-->
 @endsection()  

 @section('scripts') 
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
                              breakpoint: 1024,
                              settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3,
                                infinite: true
                              }
                            },
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
                    app.productImageUpload(4);
                    app.commentHandler();
                }
            }
        </script>
 @endsection()    
        <!--
            <footer></footer>
        -->

        <!-- SCRIPTS -->

        <!-- JQuery -->
        {{-- <script type="text/javascript" src="assets/plugins/mdb/js/jquery-3.1.1.min.js"></script>

        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="assets/plugins/mdb/js/tether.min.js"></script>

        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="assets/plugins/mdb/js/bootstrap.min.js"></script>

        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="assets/plugins/mdb/js/mdb.min.js"></script>

        <!-- slick carousel -->
        <script type="text/javascript" src="assets/plugins/slick/slick.min.js"></script>

        <!-- Main JS -->
        <script type="text/javascript" src="assets/js/main.js"></script>
 --}}        
        <script>
        </script>
    
    </body>

</html>