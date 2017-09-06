 <!DOCTYPE html>
<html lang="en">

<head>
    <title>De-Bridge</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="Description" content="An E-commerce site where users can meet socially and as well carry out businesses">
    <meta name="Keywords" content="social media, business, friends, buy, sell, contacts">
    
    <!-- fav icon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/logo/debridge-logo.png') }}"/>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}"/>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset ('plugins/mdb/css/bootstrap.css') }}"/>
 
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{ asset('plugins/mdb/css/mdb.min.css') }}">
    <link rel="stylesheet" href="{{asset ('css/toastr.min.css') }}"/>
   

    <!-- font styles -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Nunito">

    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body data-page="login">
     <!-- main section begins here-->
    <div class="container">

        <div class="card box m-t-80 m-b-40">
            <div class="card-block">

                <h3 class="title text-center">LOG IN</h3>

                <form action="{{ route('login') }}" method="POST">
                    <div class="input{{ $errors->has('email') ? ' has-error' : '' }}">
                        <p>{{ csrf_field() }}</p>
                        <label for="email">Email</label>
                        <input type="text" name="email" id="usrname" class="form-control bd-3 h-40 input-alternate border-box" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="input{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="usrpassword" class="form-control bd-3 h-40 input-alternate border-box" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="row">
                        <div class="col-md-6 offset-md-3 col-sm-6 offset-sm-3 col-12 m-t-40 m-b-20">
                           <button type="submit" class="btn btn-block btn-outline-default waves-effect m-0">Sign In</button>

                        </div>
                    </div>

                    <p class="text-center"><a href="#" class="c-brand pass-forgot">Forgot your password?</a></p>
                </form>

            </div>
        </div>
        <div class="card overbox scale-overbox">

            <div class="material-button alt-2 btn-shadow hoverable waves-effect waves-light" data-toggle="tooltip" title="Register"><span class="fa fa-plus"></span></div>
            <div class="card-block">

               <h3 class="title text-center c-white">REGISTER</h3>
               <p class="sub-title text-center">Create a FREE account and enjoy the best socio-commerce experience ever.</p>
                 
                <form action="{{ route('registered') }}" method="POST">
                    <div class="row">
                        <p>{{ csrf_field() }}</p>
                        <div class="col-md-6 col-sm-6 col-12 form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name">First Name</label>

                            <input type="text" name="first_name" id="usr-fname" class="form-control bd-3 h-40 input-alternate border-box" required value="{{ old('first_name') }}">

                            @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                             
                        </div>

                        <div class="col-md-6 col-sm-6 col-12 form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" id="usr-lname" class="form-control bd-3 h-40 input-alternate border-box" required value="{{ old('last_name') }}">

                            @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                       
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="usr-email" class="form-control bd-3 h-40 input-alternate border-box" required value="{{ old('email') }}">

                             @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-12 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" data-error="wrong" data-success="right">Password</label>
                            <input type="password" name="password" id="usr-password" class="form-control bd-3 h-40 validate input-alternate border-box" required>
                        </div>

                        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif

                        <div class="col-md-6 col-sm-6 col-12 form-group">
                            <label for="password_confirmation" data-error="wrong" data-success="right">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="usr-password-conf" class="form-control bd-3 h-40 validate input-alternate border-box" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-12 form-group">
                            <label for="gender">Gender</label>
                            <select name="gender" id="usr-gender" class="form-control bd-3 h-40 validate input-alternate border-box input-shadow" required value = "{{ old('gender') }}">
                                <option value="" disabled selected>Choose gender...</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>

                        </div>

                        <div class="col-md-6 col-sm-6 col-12 form-group{{ $errors->has('date_of_birth') ? ' has-error' : '' }}">
                            <label for="date_of_birth" data-error="wrong" data-success="right">Date of Birth</label>
                            <input type="date" name="date_of_birth" id="usr-dob" class="form-control bd-3 h-40 validate input-alternate border-box" required value="{{ old('date_of_birth') }}">

                             @if ($errors->has('date_of_birth'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date_of_birth') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="row">
                        <!-- <div class="col-md-6 col-sm-6 col-12 form-group">
                            <label for="state" data-error="wrong" data-success="right">State</label>
                            <input type="text" name="state" id="usr-state" class="form-control bd-3 h-40 validate input-alternate border-box" list="States" placeholder="Choose State" required value="{{ old('state') }}">
                            <datalist id="States">
                                @foreach($states as $state)
                                    <option>{{ $state->name }}</option>
                                @endforeach
                                
                            </datalist>
                        </div> -->

                        <div class="col-md-12 col-sm-6 col-12 form-group">
                            <label for="trade_community">Trade Community</label>
                            <select name="user_trade_community" id="usr-trade_community" class="form-control bd-3 h-40 validate input-alternate border-box input-shadow" required value = "{{ old('trade_community') }}">
                                <option disabled selected>Choose Community...</option>
                                @foreach($trade_communities as $trade_community)
                                <option value="{{$trade_community->id}}" >{{ $trade_community->name }}</option>
                                @endforeach
                              
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12 form-group acc_type_wrapper">
                            <label for="account_type">Account Type</label>
                            <select name="account_type" id="account_type" class="form-control bd-3 h-40 validate input-alternate border-box input-shadow" required value = "{{ old('account_type') }}">
                                <option disabled selected>Choose...</option>
                                {{-- <option required> Individual User</option> --}}
                                @foreach($roles as $role)
                                <option value="{{$role->id}}">{{ $role->name }}</option>
                                @endforeach                                
                                
                            </select>
                        </div>

                        <div class="col-md-12 col-sm-12 col-12 form-group trade_interest_wrapper dis-none">
                            <label for="trade_interest">Trade Interest</label>
                            <select name="trade_interest" id="trade_interest" class="form-control bd-3 h-40 validate input-alternate border-box input-shadow" required value = "{{ old('trade_interest') }}">
                                <option disabled selected>Choose...</option>
                                {{-- <option required>User Category</option> --}}
                                @foreach($trade_interests as $trade_interest)
                                <option value="{{$trade_interest->id}}" >{{ $trade_interest->name }}</option>
                                @endforeach                                
                                
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 offset-md-3 col-sm-6 offset-sm-3 col-12 m-b-20">
                            <button type="submit" class="btn btn-block btn-outline-white waves-effect m-0">Get Started</button>
                        </div>
                    </div>
                </form>

               <!--  <div class="divider clearfix">
                    <hr class="f-left"><span class="dis-inline-b m-t-3 m-l-5">or</span><hr class="f-right">
                </div>

                <div class="row dis-flex">
                    <div class="col-md-6 col-sm-6 col-12 m-t-20">
                        <button type="button" class="btn btn-block bg-facebook waves-effect waves-light m-0"><i class="fa fa-facebook left m-b-m10"></i><span class="m-t-5"> Sign up with Facebook</span></button>
                    </div>
                    <div class="col-md-6 col-sm-6 col-12 m-t-20">
                        <button type="button" class="btn btn-block bg-linkedin waves-effect waves-light m-0"><i class="fa fa-linkedin left m-b-m10"></i><span class="m-t-5"> Sign up with LinkedIn</span></button>
                    </div>
                </div> -->

            </div>

        </div>
    </div>
    <!-- main section ends here-->
    
    <!--
        <footer></footer>
    -->

    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="{{ asset('plugins/mdb/js/jquery-3.1.1.min.js') }}"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('plugins/mdb/js/tether.min.js') }}"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('plugins/mdb/js/bootstrap.min.js') }}"></script>

    <!-- MDL core JavaScript -->
    <script type="text/javascript" src="{{ asset('plugins/mdb/js/mdb.min.js') }}"></script>

    <!-- Main JS -->
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <script src="{{asset('js/toastr.min.js')}}"></script>
    <script>
        document.onreadystatechange = function() {
            if (document.readyState === "complete") {
                app.loginToggler();
                $('[data-toggle="tooltip"]').tooltip();

                toastr.options.preventDuplicates = true;
                // toastr.success("ola");
                @if (session('middleware'))
                toastr.error("{{session('middleware')}}");
                @endif

                @if (session('welcome_back'))
                toastr.success("{{session('welcome_back')}}");
                @endif

                @if (session('welcome'))
                toastr.success("{{session('welcome')}}");
                @endif

                @if (session('delete_message'))
                toastr.error("{{session('delete_message')}}");
                @endif

                @if (session('success'))
                toastr.success("{{session('success')}}");
                @endif

                @if (session('info'))
                toastr.info("{{session('info')}}");
                @endif

                @if (session('success_image'))
                toastr.success("{{session('success_image')}}");
                @endif

                @if (session('delete'))
                toastr.error("{{session('error_image')}}");
                @endif

                @if ($errors->has('image_reference')) 
                toastr.error("{{$errors->first('image_reference')}}");
                @endif

                $('#account_type').on('change', function(e){
                    // console.log(e);
                    if (
                            e.target.selectedOptions[0].index === 2
                            &&
                            $('.trade_interest_wrapper').hasClass('dis-none')
                        ) {
                        // console.log('Yay!');
                        $('.trade_interest_wrapper').removeClass('dis-none');
                    }
                    else if (
                            e.target.selectedOptions[0].index === 1
                            &&
                            (!$('.trade_interest_wrapper').hasClass('dis-none'))
                        ) {
                        // console.log('Nay!');
                        $('.trade_interest_wrapper').addClass('dis-none');
                    }
                })
            }
        }
    </script>
</body>

</html>
