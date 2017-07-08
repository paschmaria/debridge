@extends('layouts.master')

@section('content')
   
         <!-- main section begins here-->
        <section class="main">
            <!-- carousel -->
            <div class="carousel">
                <div id="carousel-1" class="carousel slide carousel-fade" data-ride="carousel">
                    <!-- carousel indicator -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-2" data-slide-to="1"></li>
                        <li data-target="#carousel-2" data-slide-to="2"></li>
                        <li data-target="#carousel-2" data-slide-to="3"></li>
                    </ol>
                    <!--/ carousel indicator -->
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="view">
                                <img src="{{ asset('img/background/carousels/rectangle-43.png') }}" class="img-fluid" alt="Hiring Ad">
                            </div>
                            <div class="carousel-caption">
                                <p class="m-b-0">ARAHA</p>
                                <p class="m-l-78">MARKET</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="view">
                                <img src="{{ asset('img/background/carousels/rectangle-43.png') }}" class="img-fluid" alt="Hiring Ad">
                            </div>
                            <div class="carousel-caption">
                                <p class="m-b-0">ARAHA</p>
                                <p class="m-l-78">MARKET</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="view">
                                <img src="{{ asset('img/background/carousels/rectangle-43.png') }}" class="img-fluid" alt="Hiring Ad">
                            </div>
                            <div class="carousel-caption">
                                <p class="m-b-0">ARAHA</p>
                                <p class="m-l-78">MARKET</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="view">
                                <img src="{{ asset('img/background/carousels/rectangle-43.png') }}" class="img-fluid" alt="Hiring Ad">
                            </div>
                            <div class="carousel-caption">
                                <p class="m-b-0">ARAHA</p>
                                <p class="m-l-78">MARKET</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="next">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                
                </div>
            </div>
            <!-- carousel end here -->
            <!-- main section starts here -->
            <main class="section">
                <div class="container-fluid">
                    <!-- navigation -->
                    <nav class="navbar">
                        <ul class="nav">
                            <li class="nav-item"><a href="#" class="nav-link c-brand">VISIT OTHER STATES</a></li>
                            <li class="nav-item"><a href="#" class="nav-link c-brand">VISIT OTHER STATES</a></li>
                        </ul>
                    </nav>
                    <!--/ navigation -->
                
                <div class="section-row">
                    <div class="row">
                        <div class="col-sm-3 col-md-3">
                            <div class="list-group m-t-40">
                                <li class="list-group-item">TRENDING CATEGORIES AT THE ARENA</li>
                                <a href="#" class="list-group-item list-group-item-action">ELECTRONICS</a>
                                <a href="#" class="list-group-item list-group-item-action">HOTELS</a>
                                <a href="#" class="list-group-item list-group-item-action">CARS</a>
                                <a href="#" class="list-group-item list-group-item-action">CANNOPIES</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <!-- navigation tabs -->

                            <div class="tabs-wrapper m-t-40">
                                <div class="card">
                                     <ul class="nav nav-pills md-pills pills-default m-auto m-t-20" role="tablsit">
                                        <li class="nav-item bd-dark-light h-70 width-310">
                                            <a href="#tab1" class="nav-link p-t-10 f-20 text-center" data-toggle="tab" role="tab">BUSINESS DISPLAY</a>
                                        </li>
                                        <li class="nav-item bd-dark-light h-70 width-310">
                                            <a href="#tab2" class="nav-link p-t-10 f-20 text-center" data-toggle="tab" role="tab">INDIVIDUAL DISPLAY</a>
                                        </li>
                                    </ul>
                                    <!-- tab header -pills -->
                                    <!-- tab content -->
                                    <div class="tab-content vertical">
                                        <!-- tab panels -->
                                        <!-- tab 1 -->
                                        <div class="tab-pane active" id="tab1" role="tab-panel">
                                            <br>
                                            <div class="card-group bd-dark-light m-16">
                                                <!-- CARD content -->
                                                <div class="card m-8">
                                                    <!-- card Image -->
                                                    <div class="view overlay hm-white-slight">
                                                        <img src="{{ asset('img/background/rectangleSS-52.png') }}" class="img-fluid width-100p" alt="">
                                                        <a href="#">
                                                            <div class="mask waves-effect waves-light"></div>
                                                        </a>
                                                        
                                                        <div class="card-caption pos-rel">
                                                            <div class="pos-abs bg-brand c-white f-20 width-110 b-0 r-0 p-l-10 p-b-0">
                                                                <p>&#8358;12,500</p>
                                                            </div>
                                                        </div>
                                                
                                                    </div>
                                                    <!-- / card Image -->
                                                    <!-- card caption -->
                                                    
                                                </div>
                                                <!-- /card content -->
                                                <!-- card content -->
                                                 <div class="card m-8">
                                                    <!-- card Image -->
                                                    <div class="text-center m-auto">
                                                        <h3 class="h3-responsive f-20 m-b-30">CHIBROS NIG LTD</h3>
                                                        <p class="f-17 m-b-50">42, Montgomery street, sabo <br>Lagos</p>
                                                        <h3 class="f-17">HIRING DETAILS</h3>
                                                        <ul class="f-14 list-inline">
                                                            <li class="list-inline-item"><a href="#" class="p-r-3 c-dark">Contact owner</a></li>
                                                            <li class="list-inline-item"><a href="#" class="bd-l-dark1 p-l-5 c-dark">visit store</a></li>
                                                            <li class="list-inline-item"><a href="#" class="bd-l-dark1 p-l-5 c-dark">Follow</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- first card group end -->
                                            <div class="m-t-10 m-b-50">
                                                <div class="btn-group bd-dark-light p-5 p-l-10 p-r-10 m-16" role="group" aria-label="Ad Action Buttons">
                                                    <button type="button" class="btn bg-white m-l-3 f-14 m-r-3 f-14 width-200">
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
                                            <div class="media m-b-15 m-16">
                                                <a class="pull-left" href="#">
                                                <img class="media-object p-r-10" src="{{ asset('img/acc-img-1.png') }}" alt="Image">
                                                </a>
                                                <div class="media-body">
                                                    <textarea name="" id="" class="md-textarea input-alternate p-10 h-58 border-box" placeholder="Press enter to send..."></textarea>
                                                </div>
                                            </div>
                                            <div class="media m-b-40">
                                                <div class="media m-16">
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
                                                                <img src="{{  asset('img/acc-img-1.png') }}" class="media-object">
                                                            </div>
                                                            <div class="media-body">
                                                                <textarea name="" class="md-textarea input-alternate p-10 h-58 border-box" placeholder="Write a reply..."></textarea>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div> 
                            <!-- /.comment section -->
                                            <!-- second card group starts here -->
                                            <div class="card-group bd-dark-light m-16">
                                                <!-- CARD content -->
                                                <div class="card m-8">
                                                    <!-- card Image -->
                                                    <div class="view overlay hm-white-slight">
                                                        <img src="{{  asset('img/background/rectangle-52.png') }}" class="img-fluid width-100p" alt="">
                                                        <a href="#">
                                                            <div class="mask waves-effect waves-light"></div>
                                                        </a>
                                                        
                                                        <div class="price_caption pos-rel">
                                                            <div class="pos-abs bg-brand c-white f-20 width-110 b-0 r-0">
                                                                <p>&#8358;12,500</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- / card Image -->
                                                    <!-- card caption -->
                                                    
                                                </div>
                                                <!-- /card content -->
                                                <!-- card content -->
                                                 <div class="card m-8">
                                                    <!-- card Image -->
                                                    <div class="text-center m-auto">
                                                        <h3 class="h3-responsive f-20 m-b-30">CHIBROS NIG LTD</h3>
                                                        <p class="f-17 m-b-50">42, Montgomery street, sabo <br>Lagos</p>
                                                        <h3 class="f-17">HIRING DETAILS</h3>
                                                        <ul class="f-14 list-inline">
                                                            <li class="list-inline-item"><a href="#" class="p-r-3 c-dark">Contact owner</a></li>
                                                            <li class="list-inline-item"><a href="#" class="bd-l-dark1 p-l-5 c-dark">visit store</a></li>
                                                            <li class="list-inline-item"><a href="#" class="bd-l-dark1 p-l-5 c-dark">Follow</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- social buttons -->
                                            <div class="m-t-10 m-b-50">
                                                <div class="btn-group bd-dark-light p-5 p-l-10 p-r-10 m-16" role="group" aria-label="Ad Action Buttons">
                                                    <button type="button" class="btn bg-white m-l-3 f-14 m-r-3 f-14 width-200">
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
                                            <div class="media m-b-15 m-16">
                                                <a class="pull-left" href="#">
                                                <img class="media-object p-r-10" src="{{  asset('img/acc-img-1.png') }}" alt="Image">
                                                </a>
                                                <div class="media-body">
                                                    <textarea name="" id="" class="md-textarea input-alternate p-10 h-58 border-box" placeholder="Press enter to send..."></textarea>
                                                </div>
                                            </div>
                                            <div class="media m-b-40">
                                                <div class="media m-16">
                                                    <div class="pull-left p-r-10">
                                                        <img class="media-object " src="{{  asset('img/acc-img-2.png') }}" alt="Image">
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
                                                                <img src="{{  asset('img/acc-img-1.png') }}" class="media-object">
                                                            </div>
                                                            <div class="media-body">
                                                                <textarea name="" class="md-textarea input-alternate p-10 h-58 border-box" placeholder="Write a reply..."></textarea>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div> 
                                            <!-- /.comment section -->
                                        </div>
                                        <!-- end tab panel for stores display -->
                                        <!-- tab content for individual stores for tab 2 -->
                                        <div class="tab-pane" id="tab2" role="tab-panel">
                                            <br>
                                            <!-- fisrt tab for individual stors -->
                                            <div class="card-group bd-dark-light m-16">
                                                <!-- CARD content -->
                                                <div class="card m-8">
                                                    <!-- card Image -->
                                                    <div class="view overlay hm-white-slight">
                                                        <img src="{{  asset('img/background/rectangle-52.png') }}" class="img-fluid width-100p" alt="">
                                                        <a href="#">
                                                            <div class="mask waves-effect waves-light"></div>
                                                        </a>
                                                    </div>
                                                    <!-- / card Image -->
                                                    <!-- card caption -->
                                                    <div class="card-caption pos-rel">
                                                        <div class="pos-abs c-white text-center bg-brand p-l-10 p-r-10 p-t-10 b-0 r-0 hidden-sm-down hidden-xs-down">
                                                            <p class="m-b-10 f-20">&#8358;12,500</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /card content -->
                                                <!-- card content -->
                                                 <div class="card m-8">
                                                    <!-- card Image -->
                                                    <div class="text-center m-auto">
                                                        <h3 class="h3-responsive f-20 m-b-30">CHIBROS NIG LTD</h3>
                                                        <p class="f-17 m-b-50">42, Montgomery street, sabo <br>Lagos</p>
                                                        <h3 class="f-17">HIRING DETAILS</h3>
                                                        <ul class="f-14 list-inline">
                                                            <li class="list-inline-item"><a href="#" class="p-r-3 c-dark">Contact owner</a></li>
                                                            <li class="list-inline-item"><a href="#" class="bd-l-dark1 p-l-5 c-dark">visit store</a></li>
                                                            <li class="list-inline-item"><a href="#" class="bd-l-dark1 p-l-5 c-dark">Follow</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card group end -->

                                            <div class="m-t-10 m-b-50">
                                                <div class="btn-group bd-dark-light p-5 p-l-10 p-r-10 m-16" role="group" aria-label="Ad Action Buttons">
                                                    <button type="button" class="btn bg-white m-l-3 f-14 m-r-3 f-14 width-200">
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
                                            <div class="media m-b-15 m-16">
                                                <a class="pull-left" href="#">
                                                <img class="media-object p-r-10" src="{{  asset('img/acc-img-1.png') }}" alt="Image">
                                                </a>
                                                <div class="media-body">
                                                    <textarea name="" id="" class="md-textarea input-alternate p-10 h-58 border-box" placeholder="Press enter to send..."></textarea>
                                                </div>
                                            </div>
                                            <div class="media m-b-40">
                                                <div class="media m-16">
                                                    <div class="pull-left p-r-10">
                                                        <img class="media-object " src="{{  asset('img/acc-img-2.png') }}" alt="Image">
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
                                                                <img src="{{  asset('img/acc-img-1.png') }}" class="media-object">
                                                            </div>
                                                            <div class="media-body">
                                                                <textarea name="" class="md-textarea input-alternate p-10 h-58 border-box" placeholder="Write a reply..."></textarea>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div> 
                                            <!-- /.comment section -->
                                            <!-- / first tab for individual stores-->
                                            <!-- second tab for individual stores -->
                                            <div class="card-group bd-dark-light m-16">
                                                <!-- CARD content -->
                                                <div class="card m-8">
                                                    <!-- card Image -->
                                                    <div class="view overlay hm-white-slight">
                                                        <img src="{{  asset('img/background/rectangle-52.png') }}" class="img-fluid width-100p" alt="">
                                                        <a href="#">
                                                            <div class="mask waves-effect waves-light"></div>
                                                        </a>
                                                    </div>
                                                    <!-- / card Image -->
                                                    <!-- card caption -->
                                                    <div class="card-caption pos-rel">
                                                        <div class="pos-abs width-110 f-right c-white text-center bg-brand p-l-10 p-r-10 p-t-10 b-0 r-0 hidden-sm-down hidden-xs-down">
                                                            <p class="m-b-10 f-20">&#8358;12,500</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /card content -->
                                                <!-- card content -->
                                                 <div class="card m-8">
                                                    <!-- card Image -->
                                                    <div class="text-center m-auto">
                                                        <h3 class="h3-responsive f-20 m-b-30">CHIBROS NIG LTD</h3>
                                                        <p class="f-17 m-b-50">42, Montgomery street, sabo <br>Lagos</p>
                                                        <h3 class="f-17">HIRING DETAILS</h3>
                                                        <ul class="f-14 list-inline">
                                                            <li class="list-inline-item"><a href="#" class="p-r-3 c-dark">Contact owner</a></li>
                                                            <li class="list-inline-item"><a href="#" class="bd-l-dark1 p-l-5 c-dark">visit store</a></li>
                                                            <li class="list-inline-item"><a href="#" class="bd-l-dark1 p-l-5 c-dark">Follow</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card group end -->
                                            <div class="m-t-10 m-b-50">
                                                <div class="btn-group bd-dark-light p-5 p-l-10 p-r-10 m-16" role="group" aria-label="Ad Action Buttons">
                                                    <button type="button" class="btn bg-white m-l-3 f-14 m-r-3 f-14 width-200">
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
                                            <!-- comment section -->
                                            <div class="media m-b-15 m-16">
                                                <a class="pull-left" href="#">
                                                <img class="media-object p-r-10" src="{{  asset('img/acc-img-1.png') }}" alt="Image">
                                                </a>
                                                <div class="media-body">
                                                    <textarea name="" id="" class="md-textarea input-alternate p-10 h-58 border-box" placeholder="Press enter to send..."></textarea>
                                                </div>
                                            </div>
                                            <div class="media m-b-40">
                                                <div class="media m-16">
                                                    <div class="pull-left p-r-10">
                                                        <img class="media-object " src="{{  asset('img/acc-img-2.png') }}" alt="Image">
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
                                                                <img src="{{  asset('img/acc-img-1.png') }}" class="media-object">
                                                            </div>
                                                            <div class="media-body">
                                                                <textarea name="" class="md-textarea input-alternate p-10 h-58 border-box" placeholder="Write a reply..."></textarea>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.comment section -->
                                        </div>
                                    </div>
                                    <!--/ tab content -->
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-3"></div>
                    </div>
                </div>
            </div>
        </main>
            <!-- main section ends here -->
                                     
        </section>
        <!-- main section ends here-->
        
@endsection('content')