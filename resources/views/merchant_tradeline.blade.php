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
                            <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="#">New Arrivals</a></li>
                            <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="#">About Us</a></li>
                            <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="#">Messages</a></li>
                            <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="#">Followers</a></li>
                            <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="bridger.html">Following</a></li>
                            <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="#">Take a Tour</a></li>
                            <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="{{ route('tradeline', auth()->user()->reference) }}">Trade Line</a></li>
                            <li class="nav-item"><a class="nav-link hover-underline text-uppercase" href="#">Trade Calendar</a></li>
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

            <div class="row">
                <div class="hidden-xs-down col-sm-3 col-md-3 text-center m-t-60">
                    <img src="{{ asset('img/icons/playstation.png') }}" alt="User-pic" class="img-fluid dis-inline-b">
                </div>
                <div class="col-sm-6 col-md-6 text-center m-t-20">
                    <h1 class="h1-responsive f-42 w-500">PLAYSTATION</h1>
                    <h3 class="h3-responsive w-500">LG17002</h3>
                    <address>42, Montgomerry Road, Sabo</address>
                    <p>jude.ejike@switch.ng</p>
                    <p>08073404890</p>
                </div>
                <div class="col-sm-3 col-md-3 m-t-20 text-center">
                    <div class="list-group m-b-20">
                        <a href="9.html" class="list-group-item list-group-item-action"><i class="fa fa-user fa-2x p-r-40"></i><span class="p-l-40">VIEW PROFILE</span></a>
                        <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-users fa-2x p-r-40"></i><span class="p-l-40">TRADE GROUPS</span></a>
                        <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-globe fa-2x p-r-40"></i><span class="p-l-40">TRADE COMMUNITY</span</a>
                        <a href="{{ route('user_store', $user->reference) }}" class="list-group-item list-group-item-action"><i class="fa fa-archive fa-2x p-r-40"></i><span class="p-l-40">INVENTORY</span></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="hidden-xs-down col-sm-3 col-md-3 m-t-20">
                    <!--Card-->
                    <div class="card m-b-16">
                        <!-- Card header -->
                        <div class="card-header transparent">
                            <p class="m-0 text-center w-500 c-brand">PRODUCT OF THE WEEK</p>
                        </div>
                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="{{ asset('img/products/week_product.png') }}" class="img-fluid width-100p" alt="">
                            <a href="#">
                                <div class="mask waves-effect waves-light"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                    </div>
                    <!--/.Card-->
                    <!--Card-->
                    <div class="card m-b-16">
                        <!-- Card header -->
                        <div class="card-header transparent">
                            <p class="m-0 text-center w-500 c-brand">HOTTEST DEALS</p>
                        </div>

                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="{{ asset('img/products/rectangle.png') }}" class="img-fluid width-100p" alt="">
                            <a href="#">
                                <div class="mask waves-effect waves-light"></div>
                            </a>
                        </div>
                        <!--/.Card image-->
                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="{{ asset('img/products/rectangle2.png') }}" class="img-fluid width-100p" alt="">
                            <a href="#">
                                <div class="mask waves-effect waves-light"></div>
                            </a>
                        </div>
                        <!--/.Card image-->
                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="{{ asset('img/products/rectangle.png') }}" class="img-fluid width-100p" alt="">
                            <a href="#">
                                <div class="mask waves-effect waves-light"></div>
                            </a>
                        </div>
                        <!--/.Card image-->
                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="{{ asset('img/products/rectangle-3.png') }}" class="img-fluid width-100p" alt="">
                            <a href="#">
                                <div class="mask waves-effect waves-light"></div>
                            </a>
                        </div>
                        <!--/.Card image-->
                        <!--Card image-->
                        <div class="view overlay hm-white-slight">
                            <img src="{{ asset('img/products/rectangle-3.png') }}" class="img-fluid width-100p" alt="">
                            <a href="#">
                                <div class="mask waves-effect waves-light"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                    </div>
                    <!--/.Card-->
                </div>
                <div class="col col-sm-6 col-md-6">
                    <div class="card m-t-20 p-18">
                         
                        <div class="card-block p-0">
                           <div class="md-form m-0">
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
                               <!-- <textarea type="text" id="status_update" class="md-textarea input-alternate p-10 h-100 border-box" placeholder="What's on your mind?"></textarea>
                                </div>
                               <div class="text-right m-b-20">
                                   <button type="button" class="btn btn-brand waves-effect">upload</button>
                                   <button type="submit" class="btn btn-brand waves-effect">post</button> -->
                           </div>
                        @forelse($posts as $post)
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object p-r-10" src="{{ asset('img/acc-img-1.png') }}" alt="Image">
                                </a>
                                <div class="media-body">
                                    <a href="{{ route('timeline', $post->user->reference) }}"><h6 class="media-heading c-brand w-500">{{ $post->user->full_name() }}</h6></a>
                                    <p>New arrivals are everywhere. Get Quality 2017 dresses which never goes out of style. Call us: 08073404890 or Visit jhuds.com/clothing</p>
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
                                <div class="btn-group bd-dark-light p-5 p-l-10 p-r-10 m-l-5" role="group" aria-label="Ad Action Buttons">
                                    <button type="button" class="btn bg-white m-l-3 f-14 m-r-3 f-14 width-200 like">
                                        <span class="">Admire&nbsp;</span><span class=""><i class="fa fa-heart"></i></span>
                                    </button>
                                    <button type="button" class="btn bg-white m-l-3 f-14 m-r-3 f-14">
                                        <span class="f-left">Comment&nbsp;</span><span class="f-right"><i class="fa fa-comment"></i></span>
                                    </button>
                                    <button type="button" class="btn bg-white m-l-3 f-14 width-200">
                                        <span class="">Hype&nbsp;</span><span class=""><i class="fa fa-share-alt"></i></span>
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
                @empty
                            <p>hhhh</p>
                        </div>
                @endforelse
                        <p>kkkk</p>
                    </div> 
                    <p>llll</p>
                </div>

                <div class="hidden-xs-down col-sm-3 col-md-3 m-t-20">
                    <p class="text-center w-500 c-brand">MOST VISITED PRODUCT IN MY STORE</p>
                    <!--Carousel Wrapper-->
                    <div id="my-product-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#my-product-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#my-product-carousel" data-slide-to="1"></li>
                            <li data-target="#my-product-carousel" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <!--First slide-->
                            <div class="carousel-item active">
                                <!--Mask color-->
                                <div class="view hm-black-light">
                                    <img src="{{ asset('img/products/timeline-product-2.png') }}" class="img-fluid" alt="">
                                    <div class="full-bg-img">
                                    </div>
                                </div>
                            </div>
                            <!--/First slide-->

                            <!--Second slide-->
                            <div class="carousel-item">
                                <!--Mask color-->
                                <div class="view hm-black-strong">
                                    <img src="{{ asset('img/products/timeline-product-2.png') }}" class="img-fluid" alt="">
                                    <div class="full-bg-img">
                                    </div>
                                </div>
                            </div>
                            <!--/Second slide-->

                            <!--Third slide-->
                            <div class="carousel-item">
                                <!--Mask color-->
                                <div class="view hm-black-slight">
                                    <img src="{{ asset('img/products/timeline-product-2.png') }}" class="img-fluid" alt="">
                                    <div class="full-bg-img">
                                    </div>
                                </div>
                            </div>
                            <!--/Third slide-->
                        </div>
                        <!--/.Slides-->

                        <!--Controls-->
                        <a class="left carousel-control" href="#carousel-example-2" role="button" data-slide="prev">
                            <span class="icon-prev" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-2" role="button" data-slide="next">
                            <span class="icon-next" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--/.Controls-->
                    </div>
                    <!--/.Carousel Wrapper-->
                </div>
            </div>

          </div>
        </section>
        <!-- main section ends here-->
    @endsection('content')
        
