@extends('layouts.master')

@section('content')

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
                            <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-user fa-2x p-r-40"></i><span class="p-l-40">VIEW PROFILE</span></a>
                            <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-users fa-2x p-r-40"></i><span class="p-l-40">TRADE GROUPS</span></a>
                            <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-globe fa-2x p-r-40"></i><span class="p-l-40">TRADE COMMUNITY</span></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col">
                                <div class="card m-t-20">
                                    <!--Card image-->
                                    <div class="view overlay hm-black-light p-5 hm-zoom">
                                        <img src="{{ asset('img/products/leftside-ad-3.png') }}" class="img-fluid width-100p" alt="">
                                        <a class="white-text mask flex-center" data-toggle="modal" data-target="#product-modal">
                                            <div class="text-center">
                                                <h2 class="m-b-20 w-700">Product Name</h2>
                                                <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                                <p class="f-20">Click to view more</p>
                                            </div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->
                                    <!--Card content-->
                                    <div class="card-block p-5">
                                        <div class="btn-group bd-dark-light p-5" role="group" aria-label="Ad Action Buttons">
                                            <button type="button" class="btn bg-white c-brand m-r-3 f-14" data-toggle="modal" data-target="#delete-modal">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14 m-r-3 like">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14" data-toggle="modal" data-target="#share-modal">
                                                <i class="fa fa-share-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/.Card content-->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col">
                                <div class="card m-t-20">
                                    <!--Card image-->
                                    <div class="view overlay hm-black-light p-5 hm-zoom">
                                        <img src="{{ asset('img/products/leftside-ad-3.png') }}" class="img-fluid width-100p" alt="">
                                        <a class="white-text mask flex-center" data-toggle="modal" data-target="#product-modal">
                                            <div class="text-center">
                                                <h2 class="m-b-20 w-700">Product Name</h2>
                                                <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                                <p class="f-20">Click to view more</p>
                                            </div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->
                                    <!--Card content-->
                                    <div class="card-block p-5">
                                        <div class="btn-group bd-dark-light p-5" role="group" aria-label="Ad Action Buttons">
                                            <button type="button" class="btn bg-white c-brand m-r-3 f-14" data-toggle="modal" data-target="#delete-modal">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14 m-r-3 like">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14" data-toggle="modal" data-target="#share-modal">
                                                <i class="fa fa-share-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/.Card content-->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col">
                                <div class="card m-t-20">
                                    <!--Card image-->
                                    <div class="view overlay hm-black-light p-5 hm-zoom">
                                        <img src="{{ asset('img/products/leftside-ad-3.png') }}" class="img-fluid width-100p" alt="">
                                        <a class="white-text mask flex-center" data-toggle="modal" data-target="#product-modal">
                                            <div class="text-center">
                                                <h2 class="m-b-20 w-700">Product Name</h2>
                                                <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                                <p class="f-20">Click to view more</p>
                                            </div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->
                                    <!--Card content-->
                                    <div class="card-block p-5">
                                        <div class="btn-group bd-dark-light p-5" role="group" aria-label="Ad Action Buttons">
                                            <button type="button" class="btn bg-white c-brand m-r-3 f-14" data-toggle="modal" data-target="#delete-modal">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14 m-r-3 like">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14" data-toggle="modal" data-target="#share-modal">
                                                <i class="fa fa-share-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/.Card content-->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col">
                                <div class="card m-t-20">
                                    <!--Card image-->
                                    <div class="view overlay hm-black-light p-5 hm-zoom">
                                        <img src="{{ asset('img/products/leftside-ad-3.png') }}" class="img-fluid width-100p" alt="">
                                        <a class="white-text mask flex-center" data-toggle="modal" data-target="#product-modal">
                                            <div class="text-center">
                                                <h2 class="m-b-20 w-700">Product Name</h2>
                                                <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                                <p class="f-20">Click to view more</p>
                                            </div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->
                                    <!--Card content-->
                                    <div class="card-block p-5">
                                        <div class="btn-group bd-dark-light p-5" role="group" aria-label="Ad Action Buttons">
                                            <button type="button" class="btn bg-white c-brand m-r-3 f-14" data-toggle="modal" data-target="#delete-modal">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14 m-r-3 like">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14" data-toggle="modal" data-target="#share-modal">
                                                <i class="fa fa-share-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/.Card content-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col">
                                <div class="card m-t-20">
                                    <!--Card image-->
                                    <div class="view overlay hm-black-light p-5 hm-zoom">
                                        <img src="{{ asset('img/products/leftside-ad-3.png') }}" class="img-fluid width-100p" alt="">
                                        <a class="white-text mask flex-center" data-toggle="modal" data-target="#product-modal">
                                            <div class="text-center">
                                                <h2 class="m-b-20 w-700">Product Name</h2>
                                                <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                                <p class="f-20">Click to view more</p>
                                            </div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->
                                    <!--Card content-->
                                    <div class="card-block p-5">
                                        <div class="btn-group bd-dark-light p-5" role="group" aria-label="Ad Action Buttons">
                                            <button type="button" class="btn bg-white c-brand m-r-3 f-14" data-toggle="modal" data-target="#delete-modal">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14 m-r-3 like">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14" data-toggle="modal" data-target="#share-modal">
                                                <i class="fa fa-share-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/.Card content-->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col">
                                <div class="card m-t-20">
                                    <!--Card image-->
                                    <div class="view overlay hm-black-light p-5 hm-zoom">
                                        <img src="{{ asset('img/products/leftside-ad-3.png') }}" class="img-fluid width-100p" alt="">
                                        <a class="white-text mask flex-center" data-toggle="modal" data-target="#product-modal">
                                            <div class="text-center">
                                                <h2 class="m-b-20 w-700">Product Name</h2>
                                                <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                                <p class="f-20">Click to view more</p>
                                            </div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->
                                    <!--Card content-->
                                    <div class="card-block p-5">
                                        <div class="btn-group bd-dark-light p-5" role="group" aria-label="Ad Action Buttons">
                                            <button type="button" class="btn bg-white c-brand m-r-3 f-14" data-toggle="modal" data-target="#delete-modal">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14 m-r-3 like">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14" data-toggle="modal" data-target="#share-modal">
                                                <i class="fa fa-share-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/.Card content-->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col">
                                <div class="card m-t-20">
                                    <!--Card image-->
                                    <div class="view overlay hm-black-light p-5 hm-zoom">
                                        <img src="{{ asset('img/products/leftside-ad-3.png') }}" class="img-fluid width-100p" alt="">
                                        <a class="white-text mask flex-center" data-toggle="modal" data-target="#product-modal">
                                            <div class="text-center">
                                                <h2 class="m-b-20 w-700">Product Name</h2>
                                                <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                                <p class="f-20">Click to view more</p>
                                            </div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->
                                    <!--Card content-->
                                    <div class="card-block p-5">
                                        <div class="btn-group bd-dark-light p-5" role="group" aria-label="Ad Action Buttons">
                                            <button type="button" class="btn bg-white c-brand m-r-3 f-14" data-toggle="modal" data-target="#delete-modal">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14 m-r-3 like">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14" data-toggle="modal" data-target="#share-modal">
                                                <i class="fa fa-share-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/.Card content-->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col">
                                <div class="card m-t-20">
                                    <!--Card image-->
                                    <div class="view overlay hm-black-light p-5 hm-zoom">
                                        <img src="{{ asset('img/products/leftside-ad-3.png') }}" class="img-fluid width-100p" alt="">
                                        <a class="white-text mask flex-center" data-toggle="modal" data-target="#product-modal">
                                            <div class="text-center">
                                                <h2 class="m-b-20 w-700">Product Name</h2>
                                                <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                                <p class="f-20">Click to view more</p>
                                            </div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->
                                    <!--Card content-->
                                    <div class="card-block p-5">
                                        <div class="btn-group bd-dark-light p-5" role="group" aria-label="Ad Action Buttons">
                                            <button type="button" class="btn bg-white c-brand m-r-3 f-14" data-toggle="modal" data-target="#delete-modal">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14 m-r-3 like">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14" data-toggle="modal" data-target="#share-modal">
                                                <i class="fa fa-share-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/.Card content-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col">
                                <div class="card m-t-20">
                                    <!--Card image-->
                                    <div class="view overlay hm-black-light p-5 hm-zoom">
                                        <img src="{{ asset('img/products/leftside-ad-3.png') }}" class="img-fluid width-100p" alt="">
                                        <a class="white-text mask flex-center" data-toggle="modal" data-target="#product-modal">
                                            <div class="text-center">
                                                <h2 class="m-b-20 w-700">Product Name</h2>
                                                <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                                <p class="f-20">Click to view more</p>
                                            </div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->
                                    <!--Card content-->
                                    <div class="card-block p-5">
                                        <div class="btn-group bd-dark-light p-5" role="group" aria-label="Ad Action Buttons">
                                            <button type="button" class="btn bg-white c-brand m-r-3 f-14" data-toggle="modal" data-target="#delete-modal">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14 m-r-3 like">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14" data-toggle="modal" data-target="#share-modal">
                                                <i class="fa fa-share-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/.Card content-->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col">
                                <div class="card m-t-20">
                                    <!--Card image-->
                                    <div class="view overlay hm-black-light p-5 hm-zoom">
                                        <img src="{{ asset('img/products/leftside-ad-3.png') }}" class="img-fluid width-100p" alt="">
                                        <a class="white-text mask flex-center" data-toggle="modal" data-target="#product-modal">
                                            <div class="text-center">
                                                <h2 class="m-b-20 w-700">Product Name</h2>
                                                <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                                <p class="f-20">Click to view more</p>
                                            </div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->
                                    <!--Card content-->
                                    <div class="card-block p-5">
                                        <div class="btn-group bd-dark-light p-5" role="group" aria-label="Ad Action Buttons">
                                            <button type="button" class="btn bg-white c-brand m-r-3 f-14" data-toggle="modal" data-target="#delete-modal">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14 m-r-3 like">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14" data-toggle="modal" data-target="#share-modal">
                                                <i class="fa fa-share-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/.Card content-->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col">
                                <div class="card m-t-20">
                                    <!--Card image-->
                                    <div class="view overlay hm-black-light p-5 hm-zoom">
                                        <img src="{{ asset('img/products/leftside-ad-3.png') }}" class="img-fluid width-100p" alt="">
                                        <a class="white-text mask flex-center" data-toggle="modal" data-target="#product-modal">
                                            <div class="text-center">
                                                <h2 class="m-b-20 w-700">Product Name</h2>
                                                <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                                <p class="f-20">Click to view more</p>
                                            </div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->
                                    <!--Card content-->
                                    <div class="card-block p-5">
                                        <div class="btn-group bd-dark-light p-5" role="group" aria-label="Ad Action Buttons">
                                            <button type="button" class="btn bg-white c-brand m-r-3 f-14" data-toggle="modal" data-target="#delete-modal">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14 m-r-3 like">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14" data-toggle="modal" data-target="#share-modal">
                                                <i class="fa fa-share-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/.Card content-->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col">
                                <div class="card m-t-20">
                                    <!--Card image-->
                                    <div class="view overlay hm-black-light p-5 hm-zoom">
                                        <img src="{{ asset('img/products/leftside-ad-3.png') }}" class="img-fluid width-100p" alt="">
                                        <a class="white-text mask flex-center" data-toggle="modal" data-target="#product-modal">
                                            <div class="text-center">
                                                <h2 class="m-b-20 w-700">Product Name</h2>
                                                <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                                <p class="f-20">Click to view more</p>
                                            </div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->
                                    <!--Card content-->
                                    <div class="card-block p-5">
                                        <div class="btn-group bd-dark-light p-5" role="group" aria-label="Ad Action Buttons">
                                            <button type="button" class="btn bg-white c-brand m-r-3 f-14" data-toggle="modal" data-target="#delete-modal">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14 m-r-3 like">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14" data-toggle="modal" data-target="#share-modal">
                                                <i class="fa fa-share-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/.Card content-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col">
                                <div class="card m-t-20">
                                    <!--Card image-->
                                    <div class="view overlay hm-black-light p-5 hm-zoom">
                                        <img src="{{ asset('img/products/leftside-ad-3.png') }}" class="img-fluid width-100p" alt="">
                                        <a class="white-text mask flex-center" data-toggle="modal" data-target="#product-modal">
                                            <div class="text-center">
                                                <h2 class="m-b-20 w-700">Product Name</h2>
                                                <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                                <p class="f-20">Click to view more</p>
                                            </div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->
                                    <!--Card content-->
                                    <div class="card-block p-5">
                                        <div class="btn-group bd-dark-light p-5" role="group" aria-label="Ad Action Buttons">
                                            <button type="button" class="btn bg-white c-brand m-r-3 f-14" data-toggle="modal" data-target="#delete-modal">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14 m-r-3 like">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14" data-toggle="modal" data-target="#share-modal">
                                                <i class="fa fa-share-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/.Card content-->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col">
                                <div class="card m-t-20">
                                    <!--Card image-->
                                    <div class="view overlay hm-black-light p-5 hm-zoom">
                                        <img src="{{ asset('img/products/leftside-ad-3.png') }}" class="img-fluid width-100p" alt="">
                                        <a class="white-text mask flex-center" data-toggle="modal" data-target="#product-modal">
                                            <div class="text-center">
                                                <h2 class="m-b-20 w-700">Product Name</h2>
                                                <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                                <p class="f-20">Click to view more</p>
                                            </div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->
                                    <!--Card content-->
                                    <div class="card-block p-5">
                                        <div class="btn-group bd-dark-light p-5" role="group" aria-label="Ad Action Buttons">
                                            <button type="button" class="btn bg-white c-brand m-r-3 f-14" data-toggle="modal" data-target="#delete-modal">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14 m-r-3 like">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14" data-toggle="modal" data-target="#share-modal">
                                                <i class="fa fa-share-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/.Card content-->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col">
                                <div class="card m-t-20">
                                    <!--Card image-->
                                    <div class="view overlay hm-black-light p-5 hm-zoom">
                                        <img src="{{ asset('img/products/leftside-ad-3.png') }}" class="img-fluid width-100p" alt="">
                                        <a class="white-text mask flex-center" data-toggle="modal" data-target="#product-modal">
                                            <div class="text-center">
                                                <h2 class="m-b-20 w-700">Product Name</h2>
                                                <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                                <p class="f-20">Click to view more</p>
                                            </div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->
                                    <!--Card content-->
                                    <div class="card-block p-5">
                                        <div class="btn-group bd-dark-light p-5" role="group" aria-label="Ad Action Buttons">
                                            <button type="button" class="btn bg-white c-brand m-r-3 f-14" data-toggle="modal" data-target="#delete-modal">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14 m-r-3 like">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14" data-toggle="modal" data-target="#share-modal">
                                                <i class="fa fa-share-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/.Card content-->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col">
                                <div class="card m-t-20">
                                    <!--Card image-->
                                    <div class="view overlay hm-black-light p-5 hm-zoom">
                                        <img src="{{ asset('img/products/leftside-ad-3.png') }}" class="img-fluid width-100p" alt="">
                                        <a class="white-text mask flex-center" data-toggle="modal" data-target="#product-modal">
                                            <div class="text-center">
                                                <h2 class="m-b-20 w-700">Product Name</h2>
                                                <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                                <p class="f-20">Click to view more</p>
                                            </div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->
                                    <!--Card content-->
                                    <div class="card-block p-5">
                                        <div class="btn-group bd-dark-light p-5" role="group" aria-label="Ad Action Buttons">
                                            <button type="button" class="btn bg-white c-brand m-r-3 f-14" data-toggle="modal" data-target="#delete-modal">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14 m-r-3 like">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14" data-toggle="modal" data-target="#share-modal">
                                                <i class="fa fa-share-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/.Card content-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col">
                                <div class="card m-t-20">
                                    <!--Card image-->
                                    <div class="view overlay hm-black-light p-5 hm-zoom">
                                        <img src="{{ asset('img/products/leftside-ad-3.png') }}" class="img-fluid width-100p" alt="">
                                        <a class="white-text mask flex-center" data-toggle="modal" data-target="#product-modal">
                                            <div class="text-center">
                                                <h2 class="m-b-20 w-700">Product Name</h2>
                                                <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                                <p class="f-20">Click to view more</p>
                                            </div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->
                                    <!--Card content-->
                                    <div class="card-block p-5">
                                        <div class="btn-group bd-dark-light p-5" role="group" aria-label="Ad Action Buttons">
                                            <button type="button" class="btn bg-white c-brand m-r-3 f-14" data-toggle="modal" data-target="#delete-modal">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14 m-r-3 like">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14" data-toggle="modal" data-target="#share-modal">
                                                <i class="fa fa-share-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/.Card content-->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col">
                                <div class="card m-t-20">
                                    <!--Card image-->
                                    <div class="view overlay hm-black-light p-5 hm-zoom">
                                        <img src="{{ asset('img/products/leftside-ad-3.png') }}" class="img-fluid width-100p" alt="">
                                        <a class="white-text mask flex-center" data-toggle="modal" data-target="#product-modal">
                                            <div class="text-center">
                                                <h2 class="m-b-20 w-700">Product Name</h2>
                                                <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                                <p class="f-20">Click to view more</p>
                                            </div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->
                                    <!--Card content-->
                                    <div class="card-block p-5">
                                        <div class="btn-group bd-dark-light p-5" role="group" aria-label="Ad Action Buttons">
                                            <button type="button" class="btn bg-white c-brand m-r-3 f-14" data-toggle="modal" data-target="#delete-modal">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14 m-r-3 like">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14" data-toggle="modal" data-target="#share-modal">
                                                <i class="fa fa-share-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/.Card content-->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col">
                                <div class="card m-t-20">
                                    <!--Card image-->
                                    <div class="view overlay hm-black-light p-5 hm-zoom">
                                        <img src="{{ asset('img/products/leftside-ad-3.png') }}" class="img-fluid width-100p" alt="">
                                        <a class="white-text mask flex-center" data-toggle="modal" data-target="#product-modal">
                                            <div class="text-center">
                                                <h2 class="m-b-20 w-700">Product Name</h2>
                                                <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                                <p class="f-20">Click to view more</p>
                                            </div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->
                                    <!--Card content-->
                                    <div class="card-block p-5">
                                        <div class="btn-group bd-dark-light p-5" role="group" aria-label="Ad Action Buttons">
                                            <button type="button" class="btn bg-white c-brand m-r-3 f-14" data-toggle="modal" data-target="#delete-modal">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14 m-r-3 like">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14" data-toggle="modal" data-target="#share-modal">
                                                <i class="fa fa-share-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/.Card content-->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col">
                                <div class="card m-t-20">
                                    <!--Card image-->
                                    <div class="view overlay hm-black-light p-5 hm-zoom">
                                        <img src="{{ asset('img/products/leftside-ad-3.png') }}" class="img-fluid width-100p" alt="">
                                        <a class="white-text mask flex-center" data-toggle="modal" data-target="#product-modal">
                                            <div class="text-center">
                                                <h2 class="m-b-20 w-700">Product Name</h2>
                                                <p class="m-b-20 f-24"><span>&#8358; 8,000</span> <del><span>&#8358; 12,500</span></del></p>
                                                <p class="f-20">Click to view more</p>
                                            </div>
                                        </a>
                                    </div>
                                    <!--/.Card image-->
                                    <!--Card content-->
                                    <div class="card-block p-5">
                                        <div class="btn-group bd-dark-light p-5" role="group" aria-label="Ad Action Buttons">
                                            <button type="button" class="btn bg-white c-brand m-r-3 f-14" data-toggle="modal" data-target="#delete-modal">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14 m-r-3 like">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                            <button type="button" class="btn bg-white c-brand m-l-3 f-14" data-toggle="modal" data-target="#share-modal">
                                                <i class="fa fa-share-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!--/.Card content-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <nav class="dis-flex m-t-20 m-b-20">
                  <ul class="pagination footer m-0">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                      </a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                      </a>
                    </li>
                  </ul>
                </nav>

            </div>
            <!-- Modal Share-->
            <div class="modal fade" id="share-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <!--Content-->
                    <div class="modal-content">
                        <!--Header-->
                        <div class="modal-header bg-brand">
                            <h6 class="modal-title w-100" id="myModalLabel">Share on your tradeline</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" class="c-white">&times;</span>
                            </button>
                        </div>
                        <!--Body-->
                        <div class="modal-body bg-brand-lite">
                            <form action="" method="POST">
                                <div class="media m-b-15">
                                    <div class="media-body">
                                        <textarea name="" id="" class="md-textarea input-alternate p-10 h-5 border-box bg-white" placeholder="Write a message..."></textarea>
                                    </div>
                                </div>
                                <div class="media m-b-40">
                                    <a class="pull-left" href="#">
                                        <img class="media-object p-r-10" src="{{ asset('img/acc-img-2.png') }}" alt="Image">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading w-700 m-b-5 f-12 c-brand">Cindy Fashion House</h6>
                                        <p class="m-b-5 f-12 c-dark">New arrivals are everywhere. Get Quality 2017 dresses which never goes out of style. Call us: 08073404890 or Visit jhuds.com/clothing</p>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <figure class="col-md-6">
                                                <img src="{{ asset('img/cart/rectangle-7.png') }}" class="m-l-90">
                                            </figure>
                                            <figure class="col-md-6">
                                                <img src="{{ asset('img/cart/rectangle-7.png') }}">
                                            </figure>
                                            <figure class="col-md-6">
                                                <img src="{{ asset('img/cart/rectangle-7.png') }}" class="m-l-90">
                                            </figure>
                                            <figure class="col-md-6">
                                                <img src="{{ asset('img/cart/rectangle-7.png') }}">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <!--Footer-->
                                <div class="modal-footer justify-content-center">
                                    <button type="button" class="btn-md btn-flat c-gray" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-md btn-outline-brand">Post</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--/.Content-->
                </div>
            </div>
            <!-- Modal -->
            <!-- Modal Share-->
            <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <!--Content-->
                    <div class="modal-content">
                        <!--Header-->
                        <div class="modal-header bg-brand text-right">
                            <button type="button" class="close c-white" data-dismiss="modal">&times;</button>
                        </div>
                        <!--Body-->
                        <div class="modal-body bg-brand-lite c-dark dis-flex">
                            <p class="text-responsive w-700 m-0">Are you sure you want to delete this product?</p>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer bg-brand-lite justify-content-center">
                            <button type="submit" class="btn btn-md btn-outline-brand">Yes</button>
                            <button type="button" class="btn btn-md btn-outline-brand" data-dismiss="modal">No</button>
                        </div>
                    </div>
                    <!--/.Content-->
                </div>
            </div>
            <!-- Modal -->
            <!-- Modal Share-->
            <div class="modal fade" id="product-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <!--Content-->
                    <div class="modal-content">
                        <!--Header-->
                        <div class="modal-header bg-brand">
                            <h6 class="modal-title w-100" id="myModalLabel">Product details</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" class="c-white">&times;</span>
                            </button>
                        </div>
                        <!--Body-->
                        <div class="modal-body bg-brand-lite">
                            <form action="">
                                <div class="media m-b-40">
                                    <a class="pull-left" href="#">
                                        <img class="media-object p-r-10" src="{{ asset('img/acc-img-2.png') }}" alt="Image">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading w-700 m-b-5 f-12 c-brand">Cindy Fashion House</h6>
                                        <p class="m-b-5 f-12 c-dark">New arrivals are everywhere. Get Quality 2017 dresses which never goes out of style. Call us: 08073404890 or Visit jhuds.com/clothing</p>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <figure class="col-md-6">
                                                <img src="{{ asset('img/cart/rectangle-7.png') }}" class="m-l-90">
                                            </figure>
                                            <figure class="col-md-6">
                                                <img src="{{ asset('img/cart/rectangle-7.png') }}">
                                            </figure>
                                            <figure class="col-md-6">
                                                <img src="{{ asset('img/cart/rectangle-7.png') }}" class="m-l-90">
                                            </figure>
                                            <figure class="col-md-6">
                                                <img src="{{ asset('img/cart/rectangle-7.png') }}">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="button" class="btn-md btn-flat c-gray" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-md btn-outline-brand">Post</button>
                                </div>
                            </form>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer bg-brand-lite">
                            
                        </div>
                    </div>
                    <!--/.Content-->
                </div>
            </div>
            <!-- Modal -->
        </section>
        <!-- main section ends here-->
@endsection('content')