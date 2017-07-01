@extends('layouts.master')
@section('content')

        <!-- main section begins here-->
        <section class="main">

            <div class="container-fluid">

                <div class="row m-t-20">
                    <div class="hidden-xs-down col-sm-3 col-md-3">
                        <div class="list-group m-b-20">
                            <a href="bridger.html" class="list-group-item list-group-item-action">BRIDGER</a>
                            <a href="tradeRequest.html" class="list-group-item list-group-item-action">TRADE REQUEST</a>
                            <a href="#" class="list-group-item list-group-item-action">TRADE COMMUNITY</a>
                            <a href="#" class="list-group-item list-group-item-action">BRIDGE POINT</a>
                            <a href="#" class="list-group-item list-group-item-action">BRIDGE CODE</a>
                        </div>
                        <a href="#" class="btn btn-outline-brand btn-block waves-effect">B - ANALYTOR</a>
                    </div>
                    @include('layouts.partials.map')
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
                            <div class="col-md-4 col-sm-12 col">
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
                            <h2 class="text-left h2-responsive f-32">THE PORTHARCOUT MARKET</h2>
                            <p class="text-right text-fluid f-24">...The Center of Excellence</p>
                        </div>
                    </div>
                </div>

                <div class="row m-t-20">
                    <div class="hidden-xs-down col-sm-3 col-md-3">
                        <!--Card-->
                        <div class="card m-b-16 wow fadeInUp">
                            <!--Card image-->
                            <div class="view overlay hm-black-light hm-zoom">
                                <img src="{{ asset('img/background/rectangle.png') }}" class="img-fluid width-100p" alt="">
                                <div class="white-text mask flex-center">
                                <div class="text-center">
                                    <h2 class="m-b-20 w-700">Product Name</h2>
                                    <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                    <p class="m-b-20">25% Off</p>
                                    <a href="8.html" class="btn btn-md btn-outline-white waves-effect waves-light">Visit Store</a>
                                    <a href="" class="btn btn-md btn-outline-white waves-effect waves-light">Add item</a>
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
                                <img src="{{ asset('img/background/carousels/rectangle-copy.png') }}" class="img-fluid width-100p" alt="">
                                <div class="white-text mask flex-center">
                                <div class="text-center">
                                    <h2 class="m-b-20 w-700">Product Name</h2>
                                    <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                    <p class="m-b-20">25% Off</p>
                                    <a href="8.html" class="btn btn-md btn-outline-white waves-effect waves-light">Visit Store</a>
                                    <a href="" class="btn btn-md btn-outline-white waves-effect waves-light">Add item</a>
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
                                <img src="{{ asset('img/background/rectangle-copy-2.png') }}" class="img-fluid width-100p" alt="">
                                <div class="white-text mask flex-center">
                                <div class="text-center">
                                    <h2 class="m-b-20 w-700">Product Name</h2>
                                    <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                    <p class="m-b-20">25% Off</p>
                                    <a href="8.html" class="btn btn-md btn-outline-white waves-effect waves-light">Visit Store</a>
                                    <a href="" class="btn btn-md btn-outline-white waves-effect waves-light">Add item</a>
                                </div>
                            </div>
                            </div>
                            <!--/.Card image-->
                        </div>
                        <!--/.Card-->
                        <!-- Card -->
                        <div class="card m-b-16 wow fadeInUp">
                            <!-- Card image -->
                            <div class="view overlay hm-black-light hm-zoom">
                                <img src="{{ asset('img/background/rectangle-copy-3.png') }}" class="img-fluid width-100p" alt="">
                                <div class="white-text mask flex-center">
                                <div class="text-center">
                                    <h2 class="m-b-20 w-700">Product Name</h2>
                                    <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                    <p class="m-b-20">25% Off</p>
                                    <a href="8.html" class="btn btn-md btn-outline-white waves-effect waves-light">Visit Store</a>
                                    <a href="" class="btn btn-md btn-outline-white waves-effect waves-light">Add item</a>
                                </div>
                            </div>
                            </div>
                            <!--/.Card image-->
                        </div>
                         <!--Card-->
                        <div class="card m-b-16 wow fadeInUp">
                            <!--Card image-->
                            <div class="view overlay hm-black-light hm-zoom">
                                <img src="{{ asset('img/background/rectangle-copy-4.png') }}" class="img-fluid width-100p" alt="">
                                <div class="white-text mask flex-center">
                                <div class="text-center">
                                    <h2 class="m-b-20 w-700">Product Name</h2>
                                    <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                    <p class="m-b-20">25% Off</p>
                                    <a href="8.html" class="btn btn-md btn-outline-white waves-effect waves-light">Visit Store</a>
                                    <a href="" class="btn btn-md btn-outline-white waves-effect waves-light">Add item</a>
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
                                <div class="card-block p-0">
                                    <form action="" id="product-upload-form">
                                        <div class="md-form m-0">
                                            <textarea type="text" id="status_update" class="md-textarea input-alternate p-10 h-100 border-box" placeholder="What's on your mind?"></textarea>
                                        </div>
                                        <div id="product-img-wrapper" class="dis-flex flex-row">
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
                                </div>

                                <!-- first post wrapper -->
                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img src="{{ asset('img/background/rectangle-60.png') }}" class="media-object p-r-10" alt="Image">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading c-brand w-500">Jhud's Fashion House</h6>
                                        <p>New arrivals are everywhere. Get Quality 2017 dresses which never goes out of style. Call Us: 08073404890 or visit jhuds.com/clothing</p>
                                    </div>
                                </div>
                                <div class="card-group">
                                    <div class="card m-5">
                                        <!-- card Image -->
                                        <div class="view overlay hm-white-slight">
                                            <img src="{{ asset('img/background/carousels/rectangle-4.png') }}" class="img-fluid width-100p" alt="">
                                            <a href="#">
                                                <div class="mask waves-effect waves-light"></div>
                                            </a>
                                        </div>
                                        <!-- / card Image -->
                                    </div>
                                    <div class="card m-5">
                                        <!-- card Image -->
                                        <div class="view overlay hm-white-slight">
                                            <img src="{{ asset('img/background/rectangle-3-copy-2a.png') }}">
                                            <a href="#">
                                                <div class="mask waves-effect waves-light"></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-t-10 m-b-50">
                                    <div class="btn-group bd-dark-light p-5 p-l-10 p-r-10" role="group" aria-label="Ad Action Buttons">
                                        <button type="button" class="btn bg-white m-r-3 f-14">
                                            <span class="f-left">Add Item&nbsp;</span><span class="f-right"><i class="fa fa-shopping-cart"></i></span>
                                        </button>
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
                                <!--/.first post wrapper -->
                                <!-- comment section-->
                            <div class="media m-b-15">
                                <a class="pull-left" href="#">
                                <img class="media-object p-r-10" src="{{ asset('img/acc-img-1.png') }}" alt="Image">
                                </a>
                                <div class="media-body">
                                    <textarea name="" id="" class="md-textarea input-alternate p-10 h-58 border-box comment_box" placeholder="Press enter to send..."></textarea>
                                </div>
                            </div>
                            <div class="media m-b-40 flex-column comment">
                                <div class="media">
                                    <div class="pull-left p-r-10">
                                        <img class="media-object " src="{{ asset('img/acc-img-2.png') }}" alt="Image">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="media-heading w-700 m-b-5 f-12">Cindy Fashion House </h6>
                                        <p m-b- f-12>New arrivals are everywhere. Get Quality 2017 dresses which never goes out of style. Call us: 08073404890 or Visit jhuds.com/clothing</p>
                                        <ul class="m-b-0 f-12">
                                            <li class="c-brand dis-inline-b p-r-10"><a href="#"><span><i class="fa fa-heart-o"></i></span> Like</a></li>
                                        <li class="c-brand dis-inline-b p-l-10 p-r-10"><a href="#">Reply</a></li>
                                        <li class="c-brand dis-inline-b p-l-10">31 May 2017</li>
                                        </ul>
                                        <div class="media m-t-5">
                                            <div class="pull-left p-r-10">
                                                <img src="{{ asset('img/acc-img-1.png') }}" class="media-object">
                                            </div>
                                            <div class="media-body">
                                                <textarea name="" class="md-textarea input-alternate p-10 h-58 border-box" placeholder="Write a reply..."></textarea>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <!--/. comment section--> 
                                
                                <!-- second post wrapper -->
                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img src="{{ asset('img/background/carousels/rectangle-60.png') }}" class="media-object p-r-10" alt="Image">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading c-barnd w-500">Jhud's Fashion House</h6>
                                        <p>New arrivals are everywhere. Get Quality 2017 dresses which never goes out of style. Call Us: 08073404890 or visit jhuds.com/clothing</p>
                                    </div>
                                </div>
                                <div class="card-group">
                                    <div class="card m-5">
                                        <!-- card Image -->
                                        <div class="view overlay hm-white-slight">
                                            <img src="{{ asset('img/background/carousels/rectangle-3.png') }}">
                                            <a href="#">
                                                <div class="mask waves-effect waves-light"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card m-5">
                                        <!-- card Image -->
                                        <div class="view overlay hm-white-slight">
                                            <img src="{{ asset('img/background/rectangle-3-copy-2b.png') }}">
                                            <a href="#">
                                                <div class="mask waves-effect waves-light"></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-t-10 m-b-50">
                                    <div class="btn-group bd-dark-light p-5 p-l-10 p-r-10" role="group" aria-label="Ad Action Buttons">
                                        <button type="button" class="btn bg-white m-r-3 f-14">
                                            <span class="f-left">Add Item&nbsp;</span><span class="f-right"><i class="fa fa-shopping-cart"></i></span>
                                        </button>
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
                                <!--/.second post wrapper -->
                                <!-- comment section-->
                            <div class="media m-b-15">
                                <a class="pull-left" href="#">
                                <img class="media-object p-r-10" src="{{ asset('img/acc-img-1.png" alt="Image') }}">
                                </a>
                                <div class="media-body">
                                    <textarea name="" id="" class="md-textarea input-alternate p-10 h-58 border-box" placeholder="Press enter to send..."></textarea>
                                </div>
                            </div>
                            <div class="media m-b-40">
                                <div class="media">
                                    <div class="pull-left p-r-10">
                                        <img class="media-object " src="{{ asset('img/acc-img-2.png') }}" alt="Image">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="media-heading w-700 m-b-5 f-12">Cindy Fashion House </h6>
                                        <p m-b- f-12>New arrivals are everywhere. Get Quality 2017 dresses which never goes out of style. Call us: 08073404890 or Visit jhuds.com/clothing</p>
                                        <ul class="m-b-0 f-12">
                                            <li class="c-brand dis-inline-b p-r-10"><a href="#"><span><i class="fa fa-heart-o"></i></span> Like</a></li>
                                        <li class="c-brand dis-inline-b p-l-10 p-r-10"><a href="#">Reply</a></li>
                                        <li class="c-brand dis-inline-b p-l-10">31 May 2017</li>
                                        </ul>
                                        <div class="media m-t-5">
                                            <div class="pull-left p-r-10">
                                                <img src="{{ asset('img/acc-img-1.png') }}" class="media-object">
                                            </div>
                                            <div class="media-body">
                                                <textarea name="" class="md-textarea input-alternate p-10 h-58 border-box" placeholder="Write a reply..."></textarea>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div> 
                            <!--/. comment section--> 
                        </div>
                    </div> 
                </div>

                <div class="hidden-xs-down col-sm-3 col-md-3">
                    <!--Card-->
                    <!--/.Card-->
                </div>
            </div>

        </section>
        <!-- main section ends here-->
        
@endsection('content')