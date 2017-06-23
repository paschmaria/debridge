@extends('layouts.master')

@section('content')

         <!-- main section begins here-->
        <section class="main">
          <div class="container bd-dark-light m-t-60 width-800 h-800">
                <h6 class="m-t-30 m-l-2">MY CART</h6>
                <div class="row">
                    <div class="col-md-7">
                        <div class="row">
                           <div class="col-md-4">
                                <img src="{{ asset('img/cart/rectangle-9.png') }}" class="bd-dark-light p-5">
                            </div>
                            <div class="col-md-8">
                                <div class="m-l-10 m-t-10">
                                <h6>Products name</h6>
                                 <h6>12, Olu-Akerele street, Allen ikeja</h6>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row m-t-20">
                            <div class="col-md-6">
                                <div class="m-l-60 m-t-20">
                                    <button type="button" class="btn btn-sm bg-brand"><span>&times;&nbsp;&nbsp;</span>Remove</button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="m-l-78 m-t-10">
                                <h6>Price</h6>
                                <h6 class="c-brand">&#8358;6000</h6>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="row m-t-20">
                    <div class="col-md-7">
                        <div class="row">
                           <div class="col-md-4">
                                <img src="{{ asset('img/cart/rectangle-7.png') }}" class="bd-dark-light p-5">
                            </div>
                            <div class="col-md-8">
                                <div class="m-l-10 m-t-10">
                                <h6>Products name</h6>
                                 <h6>12, Olu-Akerele street, Allen ikeja</h6>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="m-l-60 m-t-20">
                                    <button type="button" class="btn btn-sm bg-brand"><span>&times;&nbsp;&nbsp;</span>Remove</button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="m-l-78 m-t-10">
                                <h6>Price</h6>
                                <h6 class="c-brand">&#8358;6000</h6>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="row m-t-20">
                    <div class="col-md-7">
                        <div class="row">
                           <div class="col-md-4">
                                <img src="{{ asset('img/cart/rectangle-8.png') }}" class="bd-dark-light p-5">
                            </div>
                            <div class="col-md-8">
                                <div class="m-l-10 m-t-10">
                                <h6>Products name</h6>
                                 <h6>12, Olu-Akerele street, Allen ikeja</h6>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="m-l-60 m-t-20">
                                    <button type="button" class="btn btn-sm bg-brand"><span>&times;&nbsp;&nbsp;</span>Remove</button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="m-l-78 m-t-10">
                                <h6>Price</h6>
                                <h6 class="c-brand">&#8358;6000</h6>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="container m-t-20">
                        <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-3">
                            <h6 class="">Total</h6>
                        </div>
                        <div class="col-md-3">
                            <h6 class=" c-brand">&#8358;18,000</h6>
                        </div>
                    </div>
                    </div>
                </div>
          </div>
        </section>
        <!-- main section ends here-->
        
@endsection('content')