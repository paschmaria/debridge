@extends('layouts.master')

@section('content')

         <!-- main section begins here-->
        <section class="main">
          <div class="container bd-dark-light m-t-60 width-800 h-800">
                <h6 class="m-t-30 m-l-2">MY CART</h6>
                @forelse($items as $item)
                <div class="row">
                    <div class="col-md-7">
                        <div class="row">
                           <div class="col-md-4">
                                <img src="{{ asset('img/cart/rectangle-9.png') }}" class="bd-dark-light p-5">
                            </div>
                            <div class="col-md-8">
                                <div class="m-l-10 m-t-10">
                                <h6>{{ $item->name }}</h6>
                                 <h6>12, Olu-Akerele street, Allen ikeja</h6>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row m-t-20">
                            <div class="col-md-6">
                                <div class="m-l-60 m-t-20">
                                    <a type="button" class="btn btn-sm bg-brand" href="{{ route('removeItem', $item->id) }}"><span>&times;&nbsp;&nbsp;</span>Remove</a>
                                </div>
                            </div>
                            <div class="col-md-6">
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
                        <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-3">
                            <h6 class="">Total</h6>
                        </div>
                        <div class="col-md-3">
                            <h6 class=" c-brand">&#8358; {{ $items->pluck('price')->sum() }}</h6>
                            <a class="btn btn-sm bg-brand" href="{{ route('clearCart') }}">Clear</a>

                        </div>
                    </div>
                    @else
                        @forelse($products as $product)

                                <div class="row">
                                <div class="col-md-7">
                                    <div class="row">
                                       <div class="col-md-4">
                                            <img src="{{ asset('img/cart/rectangle-9.png') }}" class="bd-dark-light p-5">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="m-l-10 m-t-10">
                                            <a>{{ $product->name }}</a>
                                             <h6>12, Olu-Akerele street, Allen ikeja</h6>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="row m-t-20">
                                        <div class="col-md-6">
                                            <div class="m-l-60 m-t-20">
                                                <a type="button" class="btn btn-sm bg-brand fa fa-shopping-cart" href="{{ route('addToCart', $product->id) }}"><span>&nbsp;&nbsp;</span>ADD TO CART</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="m-l-78 m-t-10">
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
        
@endsection('content')