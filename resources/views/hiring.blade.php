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
                                <p class="m-b-0 f-32 mf-11">HIRING</p>
                                <p class="m-l-78 f-32 mf-11">ARENA</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="view">
                                <img src="{{ asset('img/background/carousels/rectangle-43.png') }}" class="img-fluid" alt="Hiring Ad">
                            </div>
                            <div class="carousel-caption">
                                <p class="m-b-0 f-32 mf-11">HIRING</p>
                                <p class="m-l-78 f-32 mf-11">ARENA</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="view">
                                <img src="{{ asset('img/background/carousels/rectangle-43.png') }}" class="img-fluid" alt="Hiring Ad">
                            </div>
                            <div class="carousel-caption">
                                <p class="m-b-0 f-32 mf-11">HIRING</p>
                                <p class="m-l-78 f-32 mf-11">ARENA</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="view">
                                <img src="{{ asset('img/background/carousels/rectangle-43.png') }}" class="img-fluid" alt="Hiring Ad">
                            </div>
                            <div class="carousel-caption">
                                <p class="m-b-0 f-32 mf-11">HIRING</p>
                                <p class="m-l-78 f-32 mf-11">ARENA</p>
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
                <nav class="width-50p f-20 m-auto">
                    <ul class="nav text-center m-t-30">
                        <li class="nav-item width-300"><a href="#" class="nav-link c-brand">VISIT OTHER STATES</a></li>
                        <li class="nav-item width-300"><a href="#" class="nav-link c-brand">JOIN THE ARENA</a></li>
                    </ul>
                </nav>
                <!--/ navigation -->
            
            <div class="section-row">
                <div class="row">
                    <div class="col-sm-3 col-md-3">
                        <div class="list-group m-t-40">
                            <li class="list-group-item">TRENDING CATEGORIES AT THE ARENA</li>
                            <a href="#" class="list-group-item list-group-item-action">EVENT</a>
                            <a href="#" class="list-group-item list-group-item-action">WEDDING GOWNS</a>
                            <a href="#" class="list-group-item list-group-item-action">SOUND SYSTEMS</a>
                            <a href="#" class="list-group-item list-group-item-action">CANOPIES</a>
                            <a href="#" class="list-group-item list-group-item-action">LIGHTINGS</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <!-- navigation tabs -->

                        <div class="tabs-wrapper m-t-40">
                            <div class="card">
                                 <ul class="nav md-pills pills-default m-auto m-t-20 bd-all mwidth-290" role="tablist">
                                    <li class="nav-item bd-all width-300 text-center">
                                        <a href="#tab1" class="nav-link active f-20 p-t-10 c-gray mf-11" data-toggle="tab" role="tab">STORES DISPLAY</a>
                                    </li>
                                    <li class="nav-item bd-all width-300">
                                        <a href="#tab2" class="nav-link f-20 p-t-10 c-gray mf-11" data-toggle="tab" role="tab">
                                            INDIVIDUAL DISPLAY</a>
                                    </li>
                                </ul>
                                <!-- tab header -pills -->
                                <!-- tab content -->
                                <div class="tab-content vertical">
                                    <!-- tab panels -->
                                    <!-- tab 1 -->
                                    <div class="tab-pane active" id="tab1" role="tab-panel">
                                        <br>
                                        <div class="card-group m-auto">
                                            <!-- CARD content -->
                                            <div class="card m-l-20 m-r-5">
                                                <!-- card Image -->
                                                <div class="view overlay hm-white-slight">
                                                    <img src="{{ asset('img/background/rectangle-52.png') }}" class="img-fluid width-100p" alt="">
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
                                             <div class="card m-r-20 m-l-5">
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
                                            <div class="btn-group bd-dark-light p-5 p-l-10 p-r-10 m-l-20" role="group" aria-label="Ad Action Buttons">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-3">
                                                        <button type="button" class="btn bg-white m-r-3 f-14 mf-11 width-150 mwidth-100 mm-t-5 p-l-15">
                                                            <span class="f-left">Add Item&nbsp;</span><span class="f-right"><i class="fa fa-shopping-cart"></i></span>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3">
                                                        <button type="button" class="btn bg-white m-l-3 f-14 m-r-3 f-14 mf-11 width-150 mwidth-100 mm-t-5 p-l-15">
                                                            <span class="f-left">Admire&nbsp;</span><span class="f-right"><i class="fa fa-heart"></i></span>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3">
                                                        <button type="button" class="btn bg-white m-l-3 f-14 m-r-3 f-14 mf-11 width-150 mwidth-100 mm-t-5 p-l-15">
                                                            <span class="f-left">Comment&nbsp;</span><span class="f-right"><i class="fa fa-comment"></i></span>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3">
                                                        <button type="button" class="btn bg-white m-l-3 f-14 mf-11 width-120 mwidth-100 mm-t-5 p-l-15">
                                                            <span class="f-left">Hype&nbsp;</span><span class="f-right"><i class="fa fa-share-alt"></i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- second card group starts here -->
                                        <div class="card-group">
                                            <!-- CARD content -->
                                            <div class="card m-l-20 m-r-5">
                                                <!-- card Image -->
                                                <div class="view overlay hm-white-slight">
                                                    <img src="{{ asset('img/background/rectangle-52.png') }}" class="img-fluid width-100p" alt="">
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
                                             <div class="card m-r-20 m-l-5">
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
                                            <div class="btn-group bd-dark-light p-5 p-l-10 p-r-10 m-l-20" role="group" aria-label="Ad Action Buttons">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-3">
                                                        <button type="button" class="btn bg-white m-r-3 f-14 mf-11 width-150 mwidth-100 mm-t-5 p-l-15">
                                                            <span class="f-left">Add Item&nbsp;</span><span class="f-right"><i class="fa fa-shopping-cart"></i></span>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3">
                                                        <button type="button" class="btn bg-white m-l-3 f-14 m-r-3 f-14 mf-11 width-150 mwidth-100 mm-t-5 p-l-15">
                                                            <span class="f-left">Admire&nbsp;</span><span class="f-right"><i class="fa fa-heart"></i></span>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3">
                                                        <button type="button" class="btn bg-white m-l-3 f-14 m-r-3 f-14 mf-11 width-150 mwidth-100 mm-t-5 p-l-15">
                                                            <span class="f-left">Comment&nbsp;</span><span class="f-right"><i class="fa fa-comment"></i></span>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3">
                                                        <button type="button" class="btn bg-white m-l-3 f-14 mf-11 width-120 mwidth-100 mm-t-5 p-l-15">
                                                            <span class="f-left">Hype&nbsp;</span><span class="f-right"><i class="fa fa-share-alt"></i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- end tab panel for stores display -->
                                    <!-- tab content for individual stores for tab 2 -->
                                    <div class="tab-pane fade in show" id="tab2" role="tab-panel">
                                        <br>
                                        <!-- fisrt tab for individual stors -->
                                        <div class="card-group">
                                            <!-- CARD content -->
                                            <div class="card m-l-20 m-r-5">
                                                <!-- card Image -->
                                                <div class="view overlay hm-white-slight">
                                                    <img src="{{ asset('img/background/rectangle-52.png') }}" class="img-fluid width-100p" alt="">
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
                                             <div class="card m-r-20 m-l-5">
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
                                            <div class="btn-group bd-dark-light p-5 p-l-10 p-r-10 m-l-20" role="group" aria-label="Ad Action Buttons">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-3">
                                                        <button type="button" class="btn bg-white m-r-3 f-14 mf-11 width-150 mwidth-100 mm-t-5 p-l-15">
                                                            <span class="f-left">Add Item&nbsp;</span><span class="f-right"><i class="fa fa-shopping-cart"></i></span>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3">
                                                        <button type="button" class="btn bg-white m-l-3 f-14 m-r-3 f-14 mf-11 width-150 mwidth-100 mm-t-5 p-l-15">
                                                            <span class="f-left">Admire&nbsp;</span><span class="f-right"><i class="fa fa-heart"></i></span>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3">
                                                        <button type="button" class="btn bg-white m-l-3 f-14 m-r-3 f-14 mf-11 width-150 mwidth-100 mm-t-5 p-l-15">
                                                            <span class="f-left">Comment&nbsp;</span><span class="f-right"><i class="fa fa-comment"></i></span>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3">
                                                        <button type="button" class="btn bg-white m-l-3 f-14 mf-11 width-120 mwidth-100 mm-t-5 p-l-15">
                                                            <span class="f-left">Hype&nbsp;</span><span class="f-right"><i class="fa fa-share-alt"></i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- / first tab for individual stores-->
                                        <!-- second tab for individual stores -->
                                        <div class="card-group">
                                            <!-- CARD content -->
                                            <div class="card m-l-20 m-r-5">
                                                <!-- card Image -->
                                                <div class="view overlay hm-white-slight">
                                                    <img src="{{ asset('img/background/rectangle-52.png') }}" class="img-fluid width-100p" alt="">
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
                                             <div class="card m-r-20 m-l-5">
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
                                            <div class="btn-group bd-dark-light p-5 p-l-10 p-r-10 m-l-20" role="group" aria-label="Ad Action Buttons">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-3">
                                                        <button type="button" class="btn bg-white m-r-3 f-14 mf-11 width-150 mwidth-100 mm-t-5 p-l-15">
                                                            <span class="f-left">Add Item&nbsp;</span><span class="f-right"><i class="fa fa-shopping-cart"></i></span>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3">
                                                        <button type="button" class="btn bg-white m-l-3 f-14 m-r-3 f-14 mf-11 width-150 mwidth-100 mm-t-5 p-l-15">
                                                            <span class="f-left">Admire&nbsp;</span><span class="f-right"><i class="fa fa-heart"></i></span>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3">
                                                        <button type="button" class="btn bg-white m-l-3 f-14 m-r-3 f-14 mf-11 width-150 mwidth-100 mm-t-5 p-l-15">
                                                            <span class="f-left">Comment&nbsp;</span><span class="f-right"><i class="fa fa-comment"></i></span>
                                                        </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3">
                                                        <button type="button" class="btn bg-white m-l-3 f-14 mf-11 width-120 mwidth-100 mm-t-5 p-l-15">
                                                            <span class="f-left">Hype&nbsp;</span><span class="f-right"><i class="fa fa-share-alt"></i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
