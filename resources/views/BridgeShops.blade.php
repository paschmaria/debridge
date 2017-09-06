@extends('layouts.master')

@section('content')

     <!-- main section begins here-->
    <section class="main">
        <div class="container">
            <div id="navbarNav1 m-t-40">
                <h3 class="h3-responsive c-gray text-center f-32 m-t-30">BRIDGE SHOPS</h3>
            </div>
        </div>
        <div class="container-fluid">

            <div class="row m-t-60">
                <div class="hidden-xs-down col-sm-3 col-md-3">
                    <div class="list-group m-b-20">
                        <a href="#" class="list-group-item list-group-item-action">TRENDING CATEGORIES</a>
                        <a href="#" class="list-group-item list-group-item-action">ELECTRONICS</a>
                        <a href="#" class="list-group-item list-group-item-action">HOTELS</a>
                        <a href="#" class="list-group-item list-group-item-action">CARS</a>
                        <a href="#" class="list-group-item list-group-item-action">CANNOPIES</a>
                    </div>
                </div>
             
                <div class="col col-sm-6 col-md-6">
                        <div class="card p-18">
                            <div class="card-block p-0"></div>
                            <!-- first post wrapper -->
                            
                            <div class="row">
                                    <!-- carousel Images -->
                                <div class="col-md-12 col-sm-12 col-xs-12">
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
                                                <div class="view hm-white-slight">
                                                    <img src="{{ asset('img/background/carousels/rectangle-52.png') }}">
                                                </div>
                                                <div class="carousel-caption pos-abs">
                                                    <div class="pos-rel c-white text-center bg-brand p-t-10 bd-3 width-110 r-0 p-b-5 r-0 l-13p p-r-10 p-l-10 f-right hidden-sm-down hidden-xs-down">
                                                        <p class="m-b-10">&#8358;12,500</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="carousel-item">
                                                <div class="view hm-white-slight">
                                                    <img src="{{ asset('img/background/carousels/rectangle-52.png') }}">
                                                </div>
                                                <div class="carousel-caption pos-abs">
                                                    <div class="pos-rel c-white text-center bg-brand p-t-10 bd-3 width-110 r-0 p-b-5 r-0 l-13p p-r-10 p-l-10 f-right hidden-sm-down hidden-xs-down">
                                                        <p class="m-b-10">&#8358;12,500</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="view hm-white-slight">
                                                    <img src="{{ asset('img/background/carousels/rectangle-52.png') }}">
                                                </div>
                                                <div class="carousel-caption pos-abs">
                                                    <div class="pos-rel c-white text-center bg-brand p-t-10 bd-3 width-110 r-0 p-b-5 r-0 l-13p p-r-10 p-l-10 f-right hidden-sm-down hidden-xs-down">
                                                        <p class="m-b-10">&#8358;12,500</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="view hm-white-slight">
                                                    <img src="{{ asset('img/background/carousels/rectangle-52.png') }}">
                                                </div>
                                                <div class="carousel-caption pos-abs">
                                                    <div class="pos-rel c-white text-center bg-brand p-t-10 bd-3 width-110 r-0 p-b-5 r-0 l-13p p-l-10 l-r-10 f-right hidden-sm-down hidden-xs-down">
                                                        <p class="m-b-10">&#8358;12,500</p>
                                                    </div>
                                                </div>                                    
                                           </div>
                                        </div>
                                    </div>
                                    <!--/ carousel  -->
                                </div>
                                <div class="m-t-10 m-b-50">
                                    <div class="btn-group bd-dark-light p-5 p-l-10 p-r-10 m-l-20" role="group" aria-label="Ad Action Buttons">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <button type="button" class="btn bg-white m-r-3 f-14 mf-11 width-150 mwidth-100 mm-t-5 p-l-15">
                                                    <span class="f-left">Order&nbsp;</span><span class="f-right"><i class="fa fa-shopping-cart"></i></span>
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
                            <!-- second card group starts here -->
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="tab-pane active" id="tab1" role="tab-panel">
                                        <br>
                                        <div class="card-group m-16">
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
                                        <div class="m-t-10 m-b-50">
                                            <div class="btn-group bd-dark-light p-5 p-l-10 p-r-10 m-l-20" role="group" aria-label="Ad Action Buttons">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-3">
                                                        <button type="button" class="btn bg-white m-r-3 f-14 mf-11 width-150 mwidth-100 mm-t-5 p-l-15">
                                                            <span class="f-left">Order&nbsp;</span><span class="f-right"><i class="fa fa-shopping-cart"></i></span>
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
                            </div>    
                        </div> 
                </div>
            </div>
        </div>
    </section>
    <!-- main section ends here-->
    
@endsection('section')