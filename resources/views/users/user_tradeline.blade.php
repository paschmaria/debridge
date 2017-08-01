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
            @if($user->checkRole())
                <div class="row m-t-10">
                    <div class="col-sm-9">
                        <h1 class="h1-responsive f-48 text-center m-t-20 m-b-5 c-brand w-500">{{ strtoupper($user->full_name()) }}</h1>
                        <div class="m-b-0 text-center">
                            @if(auth()->user()->id != $user->id)
                                @if(!in_array($user->id, auth()->user()->following->pluck('id')->toArray()))
                                <a href="{{ route('follow', $user->reference) }}">
                                    <button class="btn btn-sm btn-outline-brand follow" data-email="{{ $user->reference }}">follow</button>
                                </a>
                                @else
                                    <button class="btn btn-sm btn-brand unfollow" data-email="{{ $user->reference }}"> unfollow </button>
                                @endif
                                @if(auth()->user()->checkRole())
                                    @if(in_array($user->id, auth()->user()->friends->pluck('id')->toArray()))
                                        <button class="btn btn-sm waves-light waves-effect btn-outline-brand" data-toggle="modal" data-target="#cancel-modal{{ $user->id }}">
                                        cancel friendship <i class="fa fa-times c-red"></i>
                                        </button>
                                    @else
                                        @if(!in_array($user->id, auth()->user()->sent_requests->pluck('id')->toArray()))
                                            <a href="{{ route('send_friend_request', $user->reference) }}">
                                            <button class="btn btn-sm waves-light waves-effect btn-outline-brand ">Send Friend Request</button></a>
                                        @else
                                            <button class="btn btn-sm waves-light waves-effect btn-brand" data-toggle="modal" data-target="#cancel-request-modal{{ $user->id }}">Cancel Friend Request</button>
                                        @endif
                                    
                                    @endif
                                    <!-- Modal cancel_partnership -->
                                        <div class="modal fade m-t-180" id="cancel-modal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <!--Content-->
                                                <div class="modal-content">
                                                    <!--Header-->
                                                    <div class="modal-header bg-brand text-right">
                                                        <button type="button" class="close c-white" data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <!--Body-->
                                                    <div class="modal-body bg-brand-lite c-dark dis-flex">
                                                        <p class="text-responsive w-700 m-0">Are you sure you want to cancel this friendship?</p>
                                                    </div>
                                                    <!--Footer-->
                                                    <div class="modal-footer bg-brand-lite justify-content-center">
                                                        <a class="btn btn-md btn-outline-brand" href="{{ route('unfriend', $user->reference) }}">Yes</a>
                                                        <button type="button" class="btn btn-md btn-outline-brand" data-dismiss="modal">No</button>
                                                    </div>
                                                </div>
                                                <!--/.Content-->
                                            </div>
                                        </div>
                                    <!-- Modal -->
                                    <!-- Modal cancel_request -->
                                        <div class="modal fade m-t-180" id="cancel-request-modal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <!--Content-->
                                                <div class="modal-content">
                                                    <!--Header-->
                                                    <div class="modal-header bg-brand text-right">
                                                        <button type="button" class="close c-white" data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <!--Body-->
                                                    <div class="modal-body bg-brand-lite c-dark dis-flex">
                                                        <p class="text-responsive w-700 m-0">Are you sure you want to cancel this friend request?</p>
                                                    </div>
                                                    <!--Footer-->
                                                    <div class="modal-footer bg-brand-lite justify-content-center">
                                                        <a class="btn btn-md btn-outline-brand" href="{{ route('cancel_friend_request', $user->reference) }}">Yes</a>
                                                        <button type="button" class="btn btn-md btn-outline-brand" data-dismiss="modal">No</button>
                                                    </div>
                                                </div>
                                                <!--/.Content-->
                                            </div>
                                        </div>
                                    <!-- Modal -->
                                @endif
                            @endif
                        </div>
                        @if($user->community)
                            <p class="text-center">{{ $user->community_address() }}<small class="c-gray"> (Trade Community)</small></p>
                        @endif
                    </div>
                    <div class="col-sm-3  m-t-10">
                        <div class="list-group m-b-20">
                            <a href="{{ route('view_profile', $user->reference) }}" class="list-group-item list-group-item-action">
                                <i class="fa fa-user f-20"></i><span class="p-l-20">VIEW PROFILE</span>
                            </a>
                            <a href="{{ route('community', $user->reference) }}" class="list-group-item list-group-item-action">
                                <i class="fa fa-globe f-20"></i><span class="p-l-20">TRADE COMMUNITY</span>
                            </a>
                        </div>
                    </div>
                </div>
            @else
                <div class="row m-t-10">
                    <div class="col-sm-9 m-t-10">
                        <h1 class="h1-responsive f-48 text-center m-t-10 m-b-0 c-brand w-500">{{ $user->full_name() }} 
                        </h1>
                        <div class="m-b-0 text-center">
                            @if(auth()->check() && auth()->user()->id != $user->id)
                                @if(!in_array($user->id, auth()->user()->following->pluck('id')->toArray()))
                                <a href="{{ route('follow', $user->reference) }}">
                                    <button class="btn btn-sm btn-outline-brand follow" data-email="{{ $user->reference }}">follow</button>
                                </a>
                                @else
                                    <button class="btn btn-sm btn-brand unfollow" data-email="{{ $user->reference }}"> unfollow </button>
                                @endif
                                @if(!auth()->user()->checkRole())
                                    @if(in_array($user->id, auth()->user()->trade_partners->pluck('id')->toArray()))
                                        <button class="btn btn-sm btn-brand" data-toggle="modal" data-target="#cancel-modal{{ $user->id }}">
                                        cancel partnership <i class="fa fa-times c-red"></i>
                                        </button>
                                    @else
                                        @if(!in_array($user->id, auth()->user()->sent_trade_requests->pluck('id')->toArray()))
                                            <a href="{{ route('send_trade_request', $user->reference) }}">
                                            <button class="btn btn-sm btn-outline-brand">Send Trade Request</button></a>

                                        @else
                                            <button class="btn btn-sm btn-brand" data-toggle="modal" data-target="#cancel-request-modal{{ $user->id }}">Cancel Trade Request</button>
                                        @endif
                                    @endif
                                @endif

                                <!-- Modal cancel_partnership -->
                                    <div class="modal fade m-t-180" id="cancel-modal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <!--Content-->
                                            <div class="modal-content">
                                                <!--Header-->
                                                <div class="modal-header bg-brand text-right">
                                                    <button type="button" class="close c-white" data-dismiss="modal">&times;</button>
                                                </div>
                                                <!--Body-->
                                                <div class="modal-body bg-brand-lite c-dark dis-flex">
                                                    <p class="text-responsive w-700 m-0">Are you sure you want to cancel this partnership?</p>
                                                </div>
                                                <!--Footer-->
                                                <div class="modal-footer bg-brand-lite justify-content-center">
                                                    <a class="btn btn-md btn-outline-brand" href="{{ route('cancel_patrnership', $user->reference) }}">Yes</a>
                                                    <button type="button" class="btn btn-md btn-outline-brand" data-dismiss="modal">No</button>
                                                </div>
                                            </div>
                                            <!--/.Content-->
                                        </div>
                                    </div>
                                <!-- Modal -->

                                <!-- Modal cancel_request -->
                                    <div class="modal fade m-t-180" id="cancel-request-modal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <!--Content-->
                                            <div class="modal-content">
                                                <!--Header-->
                                                <div class="modal-header bg-brand text-right">
                                                    <button type="button" class="close c-white" data-dismiss="modal">&times;</button>
                                                </div>
                                                <!--Body-->
                                                <div class="modal-body bg-brand-lite c-dark dis-flex">
                                                    <p class="text-responsive w-700 m-0">Are you sure you want to cancel this trade request?</p>
                                                </div>
                                                <!--Footer-->
                                                <div class="modal-footer bg-brand-lite justify-content-center">
                                                    <a class="btn btn-md btn-outline-brand" href="{{ route('undo_trade_request', $user->reference) }}">Yes</a>
                                                    <button type="button" class="btn btn-md btn-outline-brand" data-dismiss="modal">No</button>
                                                </div>
                                            </div>
                                            <!--/.Content-->
                                        </div>
                                    </div>
                                <!-- Modal -->
                            @endif
                        </div>
                        <h4 class="h4-responsive c-brand text-center">{{ strtoupper($merchant->store_name) }}</h4>
                        @if($user->community)
                            <p class="text-center m-b-0">{{ $user->community_address() }}<small class="c-gray"> (Trade Community)</small></p>
                        @endif
                        @if($merchant->address != null)
                            <p class="text-center">{{ ucwords($merchant->address->address) }}
                            @if($merchant->address->state != null)
                                <span>, {{ ucwords($merchant->address->state->name) }}.</span>
                            @endif
                            </p>
                        @endif
                    </div>
                    <div class="col-sm-3">
                        <div class="list-group m-b-20">
                            <a href="{{ route('view_profile', $user->reference) }}" class="list-group-item list-group-item-action">
                                <i class="fa fa-user f-20"></i><span class="p-l-20">VIEW PROFILE</span>
                            </a>
                            <a href="{{ route('community', $user->reference) }}" class="list-group-item list-group-item-action">
                                <i class="fa fa-globe f-20"></i><span class="p-l-20">TRADE COMMUNITY</span>
                            </a>
                            {{-- <a href="#" class="list-group-item list-group-item-action">
                                <i class="fa fa-users f-20"></i><span class="p-l-20">TRADE PARTNERS</span>
                            </a> --}}
                            <a href="{{ route('view_inventory', $user->reference) }}" class="list-group-item list-group-item-action">
                                <i class="fa fa-archive f-20"></i><span class="p-l-20">INVENTORY</span>
                            </a>
                            <a href="{{ route('hottest_products', $user->reference) }}" class="list-group-item list-group-item-action">
                                <i class="fa fa-star f-20"></i><span class="p-l-20">HOTTEST DEALS</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endif

            <div class="row">
                <div class="hidden-xs-down col-sm-3 col-md-3 m-t-10">
                    <div class="list-group m-b-20">
                        <a href="{{ route('view_users') }}" class="list-group-item list-group-item-action">BRIDGER</a>
                        <a href="{{ route('view_partners', $user->reference) }}" class="list-group-item list-group-item-action">TRADE PARTNERS</a>
                        <a href="{{ route('community', $user->reference) }}" class="list-group-item list-group-item-action">TRADE COMMUNITY</a>
                        {{-- <a href="#" class="list-group-item list-group-item-action">BRIDGE POINT</a> --}}
                        @if($user->bridgeCode)
                            <a class="list-group-item list-group-item-action">BRIDGE CODE: {{ $user->bridgeCode->code }}</a>
                        @endif
                    </div>
                    
                    <div class="btn-group-vertical width-100p" role="group" aria-label="Profile Navigation Links">
                        <a href="#" class="btn btn-outline-default btn-block waves-effect">B - ANALYTOR</a>
                        <a href="#" class="btn btn-outline-default btn-block waves-effect">CATEGORIES</a>
                    </div>

                    <!--Card-->
                    <div class="card m-b-16 m-t-20">
                        <!-- Card header -->
                        @if(!$user->checkRole())
                            <a href="{{ route('hottest_products', $user->reference) }}">
                                <div class="card-header transparent">
                                    <p class="m-0 text-center w-500 c-brand"><i class="fa fa-star f-20"></i> &nbsp HOTTEST DEALS</p>
                                </div>
                            </a>

                            @if($merchant != null && $merchant->hottest_product != null)

                                @forelse($merchant->hottest_product->products as $product)
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
                                                <a href="{{ route('view_inventory', $user->reference) }}"><button class="btn btn-md btn-outline-white waves-effect waves-light">Visit Store</button></a>
                                                @if (auth()->check())
                                                    <a href="{{ route('addToCart', $product->reference) }}"><button class="btn btn-md btn-outline-white waves-effect waves-light">Add to cart</button></a>
                                                @endif
                                                <a href="{{ route('product_details', $product->reference) }}" class="waves-effect waves-light">click here to view product</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.Card image-->
                                @empty
                                    <h5 class="h5-responsive p-20 c-gray text-center">Hottest deals not available</h5>
                                @endforelse
                            @else
                                <h5 class="h5-responsive p-20 c-gray text-center">Hottest deals not available</h5>
                            @endif
                        @endif

                    </div>
                    <!--/.Card-->
                </div>
                <div class="col col-sm-6 col-md-6" id="timeline">
                    <div class="card m-t-10 p-18">
                         
                        <div class="card-block p-0">
                            
                            <form enctype="multipart/form-data" method="POST" action="{{ route('create_post') }}" 
                            @if(auth()->user()->id == $user->id) 
                                data-status="1"
                            @else 
                                data-status="0"
                            @endif  id="product-upload-form" >
                                {{ csrf_field() }}
                                <div class="md-form m-0 m-b-5">
                                    <input class="input-alternate border-box" type="text" placeholder="Post title (optional)" id="post_title" name="title">
                                </div>
                                <div class="md-form m-0">
                                    <textarea type="text" name="content" id="status_update" class="md-textarea input-alternate p-10 h-100 border-box" placeholder="What's on your mind?" required></textarea>
                                </div>
                                <div id="product-img-wrapper" class="dis-none flex-row">
                                    <ul id="product-imgs" class=""></ul>
                                    <span class="add-img pos-rel">
                                        <span class=""><input type="file" name="file[]" id="post_image" class="product-img-input" multiple></span>
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

                    <nav class="navbar user-type-navbar no-shadow">
                        <ul class="nav user-type-nav text-center">
                            <li class="nav-item"><a class="nav-link hover-underline @if(strtolower($filter == ''))active @endif" href="{{ route('timeline', $user->reference) }}">ALL</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline @if($filter == 'merchant')active @endif" href="{{ route('timeline', [$user->reference, 'merchant']) }}">MERCHANT</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline @if($filter == 'user')active @endif" href="{{ route('timeline', [$user->reference, 'user']) }}">INDIVIDUALS</a></li>
                        </ul>
                    </nav>
                    
                    <input type="hidden" name="timestamp" id="timestamp" value="{{ $timestamp }}">

                    @include('market.partials.timeline')
                    
                </div>
                <div class="col-sm-3 col-md-3 m-t-10">
                    @include('layouts.partials.map_no_div')

                    <div class="card m-b-16 m-t-20"></div>
                    <div class="card m-b-16 m-t-50">
                        <!-- Card header -->
                        @if(!$user->checkRole())
                            <a href="{{ route('hottest_products', $user->reference) }}">
                                <div class="card-header transparent">
                                    <p class="m-0 text-center w-500 c-brand"><i class="fa fa-star f-20 c-red"></i> &nbsp PRODUCT OF THE WEEK</p>
                                </div>
                            </a>

                            @if($merchant != null && $merchant->potw != null && $merchant->potw->product != null)
                                <!--Card image-->
                                    <div class="view overlay hm-black-light hm-zoom">
                                        <a href="{{ route('product_details', $merchant->potw->product->reference) }}" class="waves-effect waves-light">
                                            @if($merchant->potw->product->pictures != null && $merchant->potw->product->pictures->images[0] != null)
                                                <img src="{{ route('image', [$merchant->potw->product->pictures->images[0]->image_reference, '']) }}" class="img-fluid width-100p h-300" >
                                            @else
                                                <img src="{{ asset('img/products/rectangle.png') }}" class="img-fluid width-100p h-300" >
                                            @endif
                                        </a>
                                        <div class="white-text mask flex-center">
                                            <div class="text-center">
                                                <h2 class="m-b-20 w-700">{{ $merchant->potw->product->name }}</h2>
                                                @if($merchant->potw->product->promo_price == null)
                                                    <p class="m-b-20 f-24">&#8358;{{  $merchant->potw->product->price }}</p>
                                                @else
                                                    <p class="m-b-20 f-24"><span>&#8358; {{ $merchant->potw->product->promo_price }}</span> <del><span>&#8358; {{ $merchant->potw->product->price }}</span></del></p>
                                                @endif
                                                <a href="{{ route('view_inventory', $user->reference) }}"><button class="btn btn-md btn-outline-white waves-effect waves-light">Visit Store</button></a>
                                                @if (auth()->check())
                                                    <a href="{{ route('addToCart', $product->reference) }}"><button class="btn btn-md btn-outline-white waves-effect waves-light">Add to cart</button></a>
                                                @endif
                                                <a href="{{ route('product_details', $merchant->potw->product->reference) }}" class="waves-effect waves-light">click here to view product</a>
                                            </div>
                                        </div>
                                    </div>
                                <!--/.Card image-->
                            @else
                                <h5 class="h5-responsive p-20 c-gray text-center">No Product of the week</h5>
                            @endif
                        @endif
                    </div>
                </div>

            </div>

          </div>
        </section>
        <!-- main section ends here-->
 @endsection  


 @section('scripts') 
    <script>
        document.onreadystatechange = function() {
            if (document.readyState === "complete") {
                app.productImageUpload(4);
            }
        }
    </script>   

    <script>
        $(document).ready(function () {
            var page = 2;
            $(window).scroll(function(){
                var timestamp = $('#timestamp').val();
                var scroll_height = $(window).scrollTop() + $(window).height() -10;
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

