@extends('layouts.master')

@section('extra_styles')
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Nunito">
    <style>
        .width-800 {
                width: 850px !important;
            }
        .m-l-2{
            margin-left: 2px ! important;
        }
    </style>
@endsection 

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
                            <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('timeline', auth()->user()->reference) }}">Tradeline</a></li>
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
          <div class="container bd-dark-light m-t-60 width-800">
                <h6 class="m-t-30 m-l-2">MY CART</h6>
                @forelse($items as $item)
                <div class="row">
                    <div class="col-md-7">
                        <div class="row">
                           <div class="col-md-4">
                                <img src="{{ asset('img/cart/rectangle-9.png') }}" class="img-responsive width-150 bd-dark-light p-5 h-150">
                            </div>
                            <div class="col-md-8">
                                <div class="m-l-10 m-t-40">
                                <a class="c-brand" href="{{ route('product_details', $item->reference) }}"><h6>{{ $item->name }}</h6></a>
                                 <h6>12, Olu-Akerele street, Allen ikeja</h6>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row m-t-20">
                            <div class="col-md-5">
                                <div class="m-l-50 m-t-20">
                                    <a href="{{ route('removeItem', $item->reference) }}">
                                        <button type="button" class="btn btn-sm bg-brand"><span>&times;&nbsp;&nbsp;</span>Remove</button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="m-l-78 m-t-10">
                                <h6>Price</h6>
                                <h6 class="c-brand">&#8358;{{ $item->price }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
                @empty
                <p>No Items in Cart</p>
                <hr>
                <h3>Suggestion</h3>

                @endforelse
            
                    @if($items->count() > 0)
                        <div class="container m-t-20">
                            <hr class="c-brand width-100p">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="{{ route('clearCart') }}"><button  class="btn btn-sm bg-red">Clear cart</button></a>
                                </div>
                                <div class="col-md-3">
                                    <h6 class="pull-right">Total</h6>
                                </div>
                                <div class="col-md-3">
                                    <h6 class=" c-red pull-right m-r-20">&#8358;{{ $items->pluck('price')->sum() }}</h6>
                                </div>
                            </div>
                        </div>
                    @else
                        @forelse($products as $product)
                            <div class="row m-b-20">
                                <div class="col-md-7">
                                    <div class="row">
                                       <div class="col-md-4">
                                            <img src="{{ asset('img/cart/rectangle-9.png') }}" class="img-responsive width-150 bd-dark-light p-5 h-150">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="m-l-10 m-t-40">
                                                <a class="c-brand" href="{{ route('product_details', $product->reference) }}"><h6>{{ $product->name }}</h6></a>
                                                <h6>12, Olu-Akerele street, Allen ikeja</h6>
                                            </div>
                                        </div> 
                                     </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="row m-t-20">
                                        <div class="col-md-6">
                                            <div class="m-t-20">
                                                <a href="{{ route('addToCart', $product->reference) }}">
                                                    <button type="button" class="btn btn-sm bg-brand"><span>&times;&nbsp;&nbsp;</span>Add to cart</button>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="m-l-50 m-t-10">
                                            <h6>Price</h6>
                                            <h6 class="c-brand">&#8358;{{ $product->price }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                        <p>Retry</p>
                        @endforelse
                        @endif
                    </div>
                </div>
          </div>
        </section>
        <!-- main section ends here-->
        
@endsection
