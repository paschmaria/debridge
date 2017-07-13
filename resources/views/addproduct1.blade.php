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
                            <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="#">New Arrival</a></li>
                            <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="#">ABOUT US</a></li>
                            <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="#">MESSAGES</a></li>
                            <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="#">FOLLOWERS</a></li>
                            <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="#">FOLLOWING</a></li>
                            <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="#">TAKE A TOUR</a></li>
                            <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="#">TRADELINE</a></li>
                            <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="#">TRADE CALENDER</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
            <!-- navigations/links ends here -->
        </header>
        <!-- header ends here -->

         <!-- main section begins here-->
        <section class="main">
          <div class="container bd-dark-light m-t-60 width-900 h-900">
                <h6 class="m-t-80 text-center">INVENTORY</h6>
            <form class="m-t-10 m-l-60" action="{{ route('addProduct') }}" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                        <div class="">
                            {{ csrf_field() }}
                            <label for="product_name">Product name</label>
                            <input type="text" name="product_name" id="usrname" class="form-control bd-3 h-40 input-alternate border-box bg-white">
                        </div>
                    </div>
                </div>
                <div class="row">
                   <div class="col-md-4 sm-6">
                        <div class="">
                            <label for="product_description">Description</label>
                            <textarea type="text" name="product_description" class="form-control bd-3 h-150 input-alternate border-box md-textarea bg-white"></textarea> 
                        </div>
                    </div>
                </div>
                <div class="row">
                   <div class="col-md-4 sm-6">
                        <div class="">
                            <label for="product_price">Price</label>
                            <input type="number" name="product_price" class="form-control bd-3 h-40 input-alternate border-box bg-white">
                        </div>
                    </div>
                </div>

                <div class="row">
                   <div class="col-md-4 sm-6">
                        <div class="">
                            <label for="category">Category</label>
                            <select name="category" class="form-control bd-3 h-40 input-alternate border-box bg-white">
                            @foreach($product_categories as $category)
                                <option>{{ $category->name }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <!-- add images for products -->
                <div class="row">
                    <div class="col-md-9">
                        <div class="c-gray m-t-10">
                        <p class="m-b-0">photo</p>
                        <h6>Ads with photo get 5x more clients. Accepted formats are .jpg, .gif and .png.</h6>
                        </div>
                        <div class="dis-flex flex-row justify-content-between">
                           <div class="">
                              <div class="card h-200 width-150">
                                <img src="{{ asset('img/icons/ic-perm-identity.png') }}" alt="" class="h-200 width-150">
                                <input type="file" name="img1"  value="" class="call" multiple>
                                <button type="button"  id="" class="btn btn-sm call_1 h-20">
                                <i class="fa fa-plus-circle">&nbsp;Add photo</i>
                              </div>
                           </div>
                           <div class="">
                            <div class="card h-200 width-150">
                                <img src="{{ asset('img/icons/ic-perm-identity.png') }}" alt="" class="h-200 width-150">
                                <input type="file" name="img2"  value="" class="call" multiple>
                                <button type="button"  id="" class="btn btn-sm call_1 h-20">
                                <i class="fa fa-plus-circle">&nbsp;Add photo</i>
                              </div>
                           </div>
                           <div class="">
                            <div class="card h-200 width-150">
                                <img src="{{ asset('img/icons/ic-perm-identity.png') }}" alt="" class="h-200 width-150">
                                <input type="file" name="img3"  value="" class="call" multiple>
                                <button type="button"  id="" class="btn btn-sm call_1 h-20">
                                <i class="fa fa-plus-circle">&nbsp;Add photo</i>
                              </div>
                           </div>
                           <div class="">
                            <div class="card h-200 width-150">
                                <img src="{{ asset('img/icons/ic-perm-identity.png') }}" alt="" class="h-200 width-150">
                                <input type="file" name="img4"  value="" class="call" multiple>
                                <button type="button"  id="" class="btn btn-sm call_1 h-20">
                                <i class="fa fa-plus-circle">&nbsp;Add photo</i>
                              </div>
                           </div>
                           <div class="">
                              <div class="card h-200 width-150">
                                <img src="{{ asset('img/icons/ic-perm-identity.png') }}" alt="" class="h-200 width-150">
                                <input type="file" name="img5"  value="" class="call" multiple>
                                <button type="button"  id="" class="btn btn-sm call_1 h-20">
                                <i class="fa fa-plus-circle">&nbsp;Add photo</i>
                              </div>
                           </div>
                        </div>
                        <div class="dis-flex pull-left">
                         <button type="submit" class="btn btn-lg btn-outline-brand m-t-20 h-40 width-100 fa fa-plus"></button>
                        </div>
                    </div>
                </div> 
                <!-- /. add images for products -->
            </form>
          </div>
        </section>
 @endsection('content')
