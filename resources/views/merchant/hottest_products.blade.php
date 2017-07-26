
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
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('following', auth()->user()->reference) }}">Following</a></li>
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('followers', auth()->user()->reference) }}">Followers</a></li>
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('tradeline', auth()->user()->reference) }}">Tradeline</a></li>
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
                <div class="row">
                    <div class="hidden-xs-down col-sm-3 col-md-3 text-center m-t-20">
                        @if($user->profile_picture != null)
                            <img src="{{ route('image', [$user->profile_picture->image_reference, '']) }}" class="image-responsive bd-dark-light  p-5 width-200 h-200">
                        @else
                            <img src="{{ asset('img/icons/profiled.png') }}" class="image-responsive bd-dark-light p-5 h-300">
                        @endif
                        @if(auth()->user()->id != $user->id)
                            @if(in_array($user, auth()->user()->following->toArray()))
                            <a href="{{ route('follow', $user->reference) }}">
                                <button class="btn btn-sm btn-outline-brand follow" data-email="{{ $user->reference }}">follow></button>
                            </a>
                            @else
                                <button class="btn btn-sm btn-brand unfollow" data-email="{{ $user->reference }}"> unfollow </button>
                            @endif
                        @endif
                    </div>
                    <div class="col-sm-6 col-md-6 text-center m-t-20">
                        <h1 class="h1-responsive f-48 text-center m-t-40 m-b-5 c-brand w-500">{{ $user->full_name() }}</h1>
                        <h4 class="h4-responsive c-brand text-center">{{ strtoupper($merchant->store_name) }}</h4>
                        @if($user->community)
                            <p class="text-center">{{ $user->community_address() }}<small class="c-gray"> (Trade Community)</small></p>
                        @endif
                        @if($merchant->address != null)
                            <p class="text-center">{{ ucwords($merchant->address->address) }}
                            @if($merchant->address->state != null)
                                <span>, {{ ucwords($merchant->address->state->name) }}.</span>
                            @endif
                            </p>
                        @endif
                    </div>
                    <div class="col-sm-3 col-md-3 m-t-20 text-center">
                        <div class="list-group m-b-20">
                            <a href="{{ route('view_profile', $user->reference) }}" class="list-group-item list-group-item-action p-10 p-l-20"><i class="fa fa-user fa-2x p-r-40"></i><span class="p-l-40">VIEW PROFILE</span></a>
                            <a href="#" class="list-group-item list-group-item-action p-10 p-l-20"><i class="fa fa-users fa-2x p-r-40"></i><span class="p-l-40">TRADE PARTNERS</span></a>
                            <a href="#" class="list-group-item list-group-item-action p-10 p-l-20"><i class="fa fa-globe fa-2x p-r-40"></i><span class="p-l-40">TRADE COMMUNITY</span></a>
                            @if(auth()->user()->ownsShop($user->id))
                                <a href="{{ route('addProduct') }}" class="list-group-item list-group-item-action p-10 p-l-20"><i class="fa fa-plus fa-2x p-r-40"></i><span class="p-l-40">ADD PRODUCT</span></a>
                            @endif
                            <a href="{{ route('view_inventory', $user->reference) }}" class="list-group-item list-group-item-action p-10 p-l-20"><i class="fa fa-archive fa-2x p-r-40"></i><span class="p-l-40">INVENTORY</span></a>
                        </div>
                    </div>
                </div>

                <div class="text-center"><strong class="c-brand f-20">HOTTEST PRODUCTS</strong></div>
                <hr>

                <div class="row">
               
                @foreach($products as $product)
                    <div class="col-md-3 col-sm-6 col">
                        <div class="card m-t-20">
                            <!--Card image-->
                            <div class="view overlay hm-black-light p-5 hm-zoom">
                                @if($product->pictures != null && $product->pictures->images[0] != null )
                                    <img src="{{ route('image', [$product->pictures->images[0]->image_reference, '']) }}" class="img-fluid width-100p h-350" alt="">
                                @else
                                    <img src="{{ asset('img/products/leftside-ad-3.png') }}" class="img-fluid width-100p h-350" alt="">
                                @endif
                                <a class="white-text mask flex-center" href="{{ route('product_details', $product->reference) }}">
                                    <div class="text-center">
                                        <h2 class="m-b-20 w-700">{{ $product->name }}</h2>
                                        @if(isset($product->promo_price))
                                        <p class="m-b-20 f-24"><span>&#8358; {{ $product->promo_price }}</span> 
                                        <del><span>&#8358; {{ $product->price }}</span></del></p>
                                        <p class="f-20">Click to view more</p>
                                        @else
                                        <p class="m-b-20 f-24"><span>&#8358; {{ $product->price }}</span></p>
                                        <p class="f-20">Click to view more</p>
                                        @endif
                                    </div>
                                </a>
                            </div>
                            <!--/.Card image-->
                            <!--Card content-->
                            <div class="card-block p-5">
                                <div class="btn-group bd-dark-light p-5" role="group" aria-label="Ad Action Buttons">
                                    @if(auth()->user()->ownsShop($user->id))
                                        <button type="button" class="btn bg-white c-brand m-r-3 f-14" data-toggle="modal" data-target="#delete-modal{{ $product->id }}">
                                            <i class="fa fa-trash-o"></i>
                                        </button>
                                        <a href="{{ route('del_hottest', $product->reference) }}"><button class="btn bg-white c-brand m-l-3 f-14 m-r-3 like">
                                            <i class="fa fa-times"></i></button>
                                        </a>
                                    @else
                                        <a href="{{ route('addToCart', $product->reference) }}"><button type="button" class="btn bg-white c-brand m-r-3 f-14" data-toggle="modal">
                                                    <i class="fa fa-shopping-cart"></i>
                                        </button></a>
                                        <a href="{{ route('product_admire', $product->id) }}"><button class="btn bg-white c-brand m-l-3 f-14 m-r-3 like">
                                            <i class="fa fa-heart-o"></i></button>
                                        </a>
                                    @endif
                                    <button type="button" class="btn bg-white c-brand m-l-3 f-14" data-toggle="modal" data-target="#share-modal{{ $product->id }}">
                                        <i class="fa fa-share-alt"></i>
                                    </button>
                                </div>
                            </div>
                            <!--/.Card content-->
                        </div>
                    </div>

                    <!-- Modal Share-->
                    <div class="modal fade m-t-120" id="share-modal{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <!--Content-->
                            <div class="modal-content">
                                <!--Header-->
                                <div class="modal-header bg-brand">
                                    <h6 class="modal-title w-100" id="myModalLabel">Share on your timeline</h6>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true" class="c-white">&times;</span>
                                    </button>
                                </div>
                                <!--Body-->
                                <div class="modal-body bg-brand-lite">
                                    <form action="{{ route('product_hype', $product->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{-- <div class="media m-b-10">
                                            <div class="media-body">
                                                <textarea name="body" id="" class="md-textarea input-alternate p-10 h-5 border-box bg-white" placeholder="Write a message..."></textarea>
                                            </div>
                                        </div> --}}
                                        <div class="media m-b-20">
                                            <a class="pull-left" href="#">
                                                <img class="media-object p-r-10" src="{{ asset('img/acc-img-2.png') }}" alt="Image">
                                            </a>
                                            <div class="media-body">
                                                <h6 class="media-heading w-700 m-b-5 f-12 c-brand">{{ auth()->user()->first_name }}</h6>
                                                <input type="hidden" class="m-b-5 f-12 c-dark" name ='title' value="{{ $product->name }} at &#8358 {{ $product->price }}">

                                                <p class="m-b-5 f-12 c-dark" name ='title'>{{ $product->name }} at &#8358 {{ $product->price }} 
                                                    @if($merchant->store_name != null)
                                                        @ {{ $merchant->store_name }}
                                                    @endif
                                                </p>

                                            </div>
                                        </div> 
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card-group">
                                                    @if($product->pictures != null)
                                                        @forelse($product->pictures->images as $image)
                                                            <div class="card m-5">
                                                                <img src="{{ route('image', [$image->image_reference, '']) }}" class="image-responsive col-md-12">
                                                            </div>
                                                        @empty
                                                            <h3 class="h3-responsive c-gray">Product has no image</h3>
                                                        @endforelse
                                                    @else
                                                        <h3 class="h3-responsive c-gray">Product has no image</h3>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <!--Footer-->
                                        <div class="modal-footer justify-content-center">
                                            <button type="button" class="btn-md btn-flat c-gray" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-md btn-outline-brand">Post</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--/.Content-->
                        </div>
                    </div>
                    <!--/ Modal Share-->
                    <!-- Modal delete -->
                    <div class="modal fade m-t-180" id="delete-modal{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <!--Content-->
                            <div class="modal-content">
                                <!--Header-->
                                <div class="modal-header bg-brand text-right">
                                    <button type="button" class="close c-white" data-dismiss="modal">&times;</button>
                                </div>
                                <!--Body-->
                                <div class="modal-body bg-brand-lite c-dark dis-flex">
                                    <p class="text-responsive w-700 m-0">Are you sure you want to delete this product?</p>
                                </div>
                                <!--Footer-->
                                <div class="modal-footer bg-brand-lite justify-content-center">
                                    <a class="btn btn-md btn-outline-brand" href="{{ route('delete', $product->reference) }}">Yes</a>
                                    <button type="button" class="btn btn-md btn-outline-brand" data-dismiss="modal">No</button>
                                </div>
                            </div>
                            <!--/.Content-->
                        </div>
                    </div>
                    <!-- Modal -->
                
                @endforeach

                       
                </div>

                <div class="m-t-20">
                {{ $products->links() }}
                </div>

                {{-- <nav class="dis-flex m-t-20 m-b-20">
                  <ul class="pagination footer m-0">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                      </a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                      </a>
                    </li>
                  </ul>
                </nav> --}}

            </div>

                        <!--Footer-->
                        <div class="modal-footer bg-brand-lite">
                            
                        </div>
                    </div>
                    <!--/.Content-->
                </div>
            </div>
            <!-- Modal -->
        </section>
        <!-- main section ends here-->
@endsection('content')
