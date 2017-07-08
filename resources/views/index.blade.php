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
                            <li class="nav-item"><a class="nav-link hover-underline text-uppercase" href="#">Black Market</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline text-uppercase" href="hiring.html">Hiring Arena</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline text-uppercase" href="{{ route('araha_market') }}">Araha Market</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline text-uppercase" href="BridgeShops.html">Bridge Shops</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline text-uppercase" href="#">Invest Hub</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline text-uppercase" href="#">Consultancyc Unit</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline text-uppercase" href="exhibitionStand.html">Exhibition Stand</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline text-uppercase" href="#">B - Mentor</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline text-uppercase" href="#">Window Shopping</a></li>
                            @if(auth()->check())
                                <li class="nav-item"><a class="nav-link c-brand w-700 text-uppercase" href="#">Apply for Bridge Code</a></li>
                            @endif
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
                        <a href="#" class="list-group-item list-group-item-action">BRIDGER</a>
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
                    <a href="#" class="btn btn-outline-brand btn-block waves-effect">B - ANALYTOR</a>
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
                    <div class="c-brand">
                        <h1 class="text-left h1-responsive">THE NIGERIAN MARKET</h1>
                        <p class="text-right">...The Largest Black Market in the Globe</p>
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
                    <nav class="navbar user-type-navbar no-shadow">
                        <ul class="nav user-type-nav text-center">
                            <li class="nav-item"><a class="nav-link hover-underline active" href="#">MANUFACTURERS</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline" href="#">WHOLESALERS</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline" href="#">RETAILERS</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline" href="#">FARMERS</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline" href="#">PROFESSIONALS</a></li>
                        </ul>
                    </nav>
                    <div class="card m-t-20 p-18">
                         
                        <div class="card-header m-b-16 bd-dark-light transparent">
                            <h4 class="h4-responsive text-center m-0">MOST SEARCHED PRODUCT IN NIGERIA</h4>
                        </div>

                        <div class="view overlay hm-white-slight p-5 bd-dark-light">
                            <img src="{{ asset('img/products/productside-1.png') }}" class="img-fluid width-100p" alt="">
                            <a href="#">
                                <div class="mask waves-effect waves-light"></div>
                            </a>
                        </div>

                        <div class="m-t-10 m-b-50">
                            <div class="btn-group bd-dark-light p-5 p-l-10 p-r-10" role="group" aria-label="Ad Action Buttons">
                                <button type="button" class="btn bg-white m-r-3 f-14" data-toggle="modal" data-target="#basicExample">
                                    <span class="f-left">Add Item&nbsp;</span><span class="f-right"><i class="fa fa-shopping-cart"></i></span>
                                </button>
                                <button type="button" class="btn bg-white m-l-3 f-14 m-r-3 f-14" data-toggle="modal" data-target="#basicExample">
                                    <span class="f-left">Admire&nbsp;</span><span class="f-right"><i class="fa fa-heart"></i></span>
                                </button>
                                <button type="button" class="btn bg-white m-l-3 f-14 m-r-3 f-14" data-toggle="modal" data-target="#basicExample">
                                    <span class="f-left">Comment&nbsp;</span><span class="f-right"><i class="fa fa-envelope"></i></span>
                                </button>
                                <button type="button" class="btn bg-white m-l-3 f-14" data-toggle="modal" data-target="#basicExample">
                                    <span class="f-left">Hype&nbsp;</span><span class="f-right"><i class="fa fa-share-alt"></i></span>
                                </button>
                                <!-- modal start -->
                                <div class="modal fade width-100p" id="basicExample" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <!--Content-->
                                        <div class="modal-content bg-brand-lite">
                                            <!--Header-->
                                            <div class="modal-header bg-brand">
                                                <h4 class="modal-title w-100 m-auto c-white text-center" id="myModalLabel">Sign up for Debridge </h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true" class="c-white">&times;</span>
                                                </button>
                                            </div>
                                            <!--Body-->
                                            <div class="modal-body">
                                                <div class="text-center f-32 c-gray-light"><span class="fa fa-shopping-cart"></span></div>
                                                <p class="text-center f-20 m-t-20 m-b-10 c-dark">When you Join Debridge, You will be able to order any item</p>
                                                <div class="modal-signup text-center m-b-10">
                                                    <button class="btn btn-md bg-brand text-center f-16">Sign Up</button>
                                                </div>
                                            </div>
                                            <!--Footer-->
                                            <div class="modal-footer border-top">
                                                <div class="m-auto">
                                                    <p class="text-center c-dark f-16">Have an account? <a href="#" class="c-brand">Log in</a></p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!--/.Content-->
                                    </div>
                                </div>                                <!-- / modal ends here -->
                            </div>
                        </div>

                        <div class="view overlay hm-white-slight p-5 bd-dark-light">
                            <img src="{{ asset('img/products/productside-2.png') }}" class="img-fluid width-100p" alt="">
                            <a href="#">
                                <div class="mask waves-effect waves-light"></div>
                            </a>
                        </div>

                        <div class="m-t-10 m-b-50">
                                <div class="btn-group bd-dark-light p-5 p-l-10 p-r-10" role="group" aria-label="Ad Action Buttons">
                                    <button type="button" class="btn bg-white m-r-3 f-14" data-toggle="modal" data-target="#basicExample">
                                        <span class="f-left">Add Item&nbsp;</span><span class="f-right"><i class="fa fa-shopping-cart"></i></span>
                                    </button>
                                    <button type="button" class="btn bg-white m-l-3 f-14 m-r-3 f-14" data-toggle="modal" data-target="#basicExample">
                                        <span class="f-left">Admire&nbsp;</span><span class="f-right"><i class="fa fa-heart"></i></span>
                                    </button>
                                    <button type="button" class="btn bg-white m-l-3 f-14 m-r-3 f-14" data-toggle="modal" data-target="#basicExample">
                                        <span class="f-left">Comment&nbsp;</span><span class="f-right"><i class="fa fa-envelope"></i></span>
                                    </button>
                                    <button type="button" class="btn bg-white m-l-3 f-14" data-toggle="modal" data-target="#basicExample">
                                        <span class="f-left">Hype&nbsp;</span><span class="f-right"><i class="fa fa-share-alt"></i></span>
                                    </button>
                                </div>
                                <!-- modal -->
                                
                                <!-- / modal -->
                            </div>
                     </div> 
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
        </section>
        <!-- main section ends here-->
    @endsection('content')    
