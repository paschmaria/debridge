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
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="bridger.html">Friends</a></li>
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="tradeline.html">Tradeline</a></li>
                        <li class="nav-item m-r-10"><a class="nav-link hover-underline text-uppercase" href="#">Shopline</a></li>
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
    <!-- main section begins here -->
    <section class="main">
    	<div class="container">
    		<div class="wrapper m-b-50">
	    		<div class="row">
	    			<div class="col-md-2 col-sm-2 h-200">
	    			</div>
	    			<div class="col-md-7 col-sm-7 m-t-180">
	    				<div class="row">
	    					<div class="col-md-4 col-sm-4">
                                <div class="card">
                                    <div class="profile-img-holder bd-all width-185 h-261 m-r-40">
                                        <div class="photo_wrapper h-200 p-l-5 p-t-5">
                                            <img src="#" id="post">
                                        </div>
                                       <div class="pos-rel">
                                            <button type="submit" class="btn btn-brand m-l-18">
                                            <i class="fa fa-plus-circle"></i>
                                            Upload</button>
                                           <input type="file" class="pos-abs l-30 width-125 h-40 t-8 hide z-10" id="upload">
                                       </div>
                                       
                                       
                                        
                                    </div>
                                </div>
                                    
	    						
	    					</div>
	    					<div class="col-md-8 col-sm-8">
	    						<div class="card c-dark">
                                    <div class="card-block">
                                        <div class="account-details">
                                            <form>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 m-b-30">
                                                    <span class="c-brand fa fa-cog fa-2x">&nbsp; &nbsp;</span>
                                                        <h3 class="dis-inline">  ACCOUNT SETTINGS</h3>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-12 form-group">
                                                        <label for="usr-fname" class="c-dark f-14">First Name</label>
                                                         <input type="text" name="usr-fname" id="usr-fname" class="form-control bd-3 h-40 input-alternate border-box bg-white f-14">
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-12 form-group">
                                                        <label for="usr-lname" class="f-16 c-dark">Last Name</label>
                                                        <input type="text" name="usr-lname" id="usr-lname" class="form-control bd-3 h-40 input-alternate border-box bg-white f-14">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-12 form-group">
                                                        <label for="usr-email" class="c-dark f-16">Email Address or Phone Number</label>
                                                        <input type="email" name="usr-email" id="usr-email" class="form-control bd-3 h-40 input-alternate border-box bg-white f-14">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-12 form-group">
                                                        <label for="usr-password" data-error="wrong" data-success="right" class="f-16 c-dark">Password</label>
                                                        <input type="password" name="usr-password" id="usr-password" class="form-control bd-3 h-40 validate input-alternate border-box bg-white f-14">
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-12 form-group">
                                                        <label for="usr-password-conf" data-error="wrong" data-success="right" class="f-16 c-dark">Confirm Password</label>
                                                        <input type="password" name="usr-password-conf" id="usr-password-conf" class="form-control bd-3 h-40 validate input-alternate border-box bg-white f-14">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-12 form-group">
                                                        <label for="usr-gender" class="f-16 c-dark">Gender</label>
                                                        <select name="usr-gender" id="usr-gender" class="form-control bd-3 h-40 validate input-alternate border-box input-shadow bg-white">
                                                            <option value="" disabled selected>Choose gender...</option>
                                                            <option value="1">Male</option>
                                                            <option value="2">Female</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-12 form-group">
                                                        <label for="usr-dob" data-error="wrong" data-success="right" class="f-16">Date of Birth</label>
                                                        <input type="date" name="usr-dob" id="usr-dob" class="form-control bd-3 h-40 validate input-alternate border-box bg-white f-14">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-12 form-group">
                                                        <label class="f-16 c-dark">Are you a ?</label>
                                                        <input type="text"  class="form-control bd-3 h-40 input-alternate border-box f-14 bg-white">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-12 form-group">
                                                        <label class="f-16 c-brand">STORE INFORMATION</label>
                                                        <input type="text" class="form-control bd-3 h-40 input-alternate border-box bg-white f-14">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-12 form-group">
                                                        <label class="f-16 c-dark">Store Address</label>
                                                        <input type="text" class="form-control bd-3 h-40 input-alternate border-box bg-white f-14">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-12 form-group">
                                                        <label class="f-16 c-dark">Brief Description </label>
                                                        <textarea type="text" name="usrname" class="form-control bd-3 h-150 input-alternate border-box md-textarea bg-white f-14"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-6 dis-flex">
                                                        <button class="btn-outline-brand width-110 f-right h-40 m-t-20">POST</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>                     
                                </div>
	    					</div>
	    				</div>
	    				
	    			</div>
	    			<div class="col-md-3 col-sm-3 h-200"></div>
	    		</div>
	    	</div>
    	</div>
    	
    </section>
    <!-- / main section ends here -->
@endsection('content')