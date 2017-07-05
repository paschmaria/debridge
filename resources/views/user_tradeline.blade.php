@extends('layouts.master')

@section('content')
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
        </header>
        <!-- header ends here -->

         <!-- main section begins here-->
        <section class="main">
          <div class="container-fluid">

            <div class="">
                <h1 class="h1-responsive f-48 text-center m-t-20 m-b-25 c-brand w-500">{{ auth()->user()->first_name }}</h1>
            </div>

            <div class="row">
                <div class="hidden-xs-down col-sm-3 col-md-3 m-t-20">
                    <div class="list-group m-b-20">
                        <a href="{{ route('view_users') }}" class="list-group-item list-group-item-action">BRIDGER</a>
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
                            <img src="assets/img/products/rectangle.png" class="img-fluid width-100p" alt="">
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
                            <img src="assets/img/products/rectangle2.png" class="img-fluid width-100p" alt="">
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
                            <img src="assets/img/products/rectangle.png" class="img-fluid width-100p" alt="">
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
                            <img src="assets/img/products/rectangle-3.png" class="img-fluid width-100p" alt="">
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
                            <img src="assets/img/products/rectangle-3.png" class="img-fluid width-100p" alt="">
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
                            
                            <form action="" id="product-upload-form">
                                <div class="md-form m-0">
                                    <textarea type="text" id="status_update" class="md-textarea input-alternate p-10 h-100 border-box" placeholder="What's on your mind?"></textarea>
                                </div>
                                <div id="product-img-wrapper" class="dis-none flex-row">
                                    <ul id="product-imgs" class=""></ul>
                                    <span class="add-img pos-rel">
                                        <span class=""><input type="file" class="product-img-input" multiple></span>
                                        <button type="button" class="btn-upload btn-product-img"><i class="fa fa-plus fa-3x"></i></button>
                                    </span>
                                </div>
                                <div id="">
                                    <button type="button" class="btn-flat btn-product-img"><i class="fa fa-image"></i> upload</button>
                                    <input type="file" class="product-img-input" multiple>
                                    <button type="submit" class="btn btn-brand waves-effect">post</button>
                                </div>
                            </form>

                            <div class="timeline"></div>
                            @foreach($products as $product)
                            
                               

                      
                            
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object p-r-10" src="{{ asset('img/acc-img-1.png') }}" alt="Image">
                                </a>
                                <div class="media-body">
                                    <h6 class="media-heading c-brand w-500">Jhud Fashion House</h6>
                                    <p>New arrivals are everywhere. Get Quality 2017 dresses which never goes out of style. Call us: 08073404890 or Visit jhuds.com/clothing <a href="#" class="c-brand">View Product</a></p>
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

                            <div class="m-t-10 m-b-50">
                                <div class="btn-group bd-dark-light p-5 p-l-10 p-r-10" role="group" aria-label="Ad Action Buttons">
                                     <a type="button" class="btn bg-white m-r-3 f-14" href="{{ route('addToCart', $product->id) }}">
                                        <span class="f-left">Add Item&nbsp;</span><span class="f-right"> <i class="fa fa-shopping-cart"></i> </span>
                                    </a>
                                    <button type="button" class="btn bg-white m-l-3 f-14 m-r-3 f-14">
                                        <span class="f-left">Admire&nbsp;</span><span class="f-right"><i class="fa fa-heart"></i></span>
                                    </button>
                                    <button type="button" class="btn bg-white m-l-3 f-14 m-r-3 f-14">
                                        <span class="f-left">Comment&nbsp;</span><span class="f-right"><i class="fa fa-comment"></i></span>
                                    </button>
                                    <button type="button" class="btn bg-white m-l-3 f-14">
                                        <span class="f-left">Hype&nbsp;</span><span class="f-right"><i class="fa fa-share-alt"></i></span>
                                    </button>
                                </div>
                            </div>
                            <!-- coomment section -->
                            <div class="media m-b-15">
                                <a class="pull-left" href="#">
                                <img class="media-object p-r-10" src="{{ asset('img/acc-img-1.png') }}" alt="Image">
                                </a>
                                <div class="media-body">
                                    <textarea name="" id="" class="md-textarea input-alternate p-10 h-58 border-box comment_box" placeholder="Press enter to send..."></textarea>
                                </div>
                            </div>
                            @endforeach
                            <div class="media m-b-40 comment flex-column"></div> 

                         
          
                        
                  
                           
                        </div>
                    </div> 
                </div>

            </div>

          </div>
        </section>
        <!-- main section ends here-->
        
@endsection('content')