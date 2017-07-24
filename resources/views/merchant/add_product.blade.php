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
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset ('plugins/mdb/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
   <link rel="stylesheet" href="{{ asset('plugins/mdb/css/mdb.min.css') }}">

    <!-- font styles -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Nunito">

    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>


<body>

<div class="container">

    <div class="card box m-t-80 m-b-40">
        <div class="card-block">

<h3 class="title text-center">ADD PRODUCT</h3>
               <p class="sub-title text-center">Add a product here</p>
                 
                <form action="{{ route('addProduct') }}" enctype="multipart/form-data" method="POST">
                    <div class="row">
                        <p>{{ csrf_field() }}</p>
                        <div class="col-md-6 col-sm-6 col-12 form-group{{ $errors->has('product_name') ? ' has-error' : '' }}">
                            <label for="first_name">Product Name</label>

                            <input type="text" name="product_name" id="usr-fname" class="form-control bd-3 h-40 input-alternate border-box" required value="{{ old('first_name') }}">

                            @if ($errors->has('product_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_name') }}</strong>
                                    </span>
                                @endif
                             
                        </div>

                        <div class="col-md-6 col-sm-6 col-12 form-group{{ $errors->has('product_price') ? ' has-error' : '' }}">
                            <label for="last_name">Product Price</label>
                            <input type="number" name="product_price" id="usr-lname" class="form-control bd-3 h-40 input-alternate border-box" required value="{{ old('product_price') }}">

                            @if ($errors->has('product_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_price') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                       
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12 form-group{{ $errors->has('decription') ? ' has-error' : '' }}">
                            <label for="email">Decription</label>
                            <!-- <input type="text" name="email" id="usr-email" class="form-control bd-3 h-40 input-alternate border-box" required value="{{ old('email') }}"> -->

                            <textarea name="description" class="form-control" rows="30" required></textarea>

                             @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>

                  

                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-12 form-group">
                            <label for="category">Category</label>
                            <select name="category" id="usr-gender" class="form-control bd-3 h-40 validate input-alternate border-box input-shadow" required value = "{{ old('category') }}">
                                <option value="" disabled selected>Choose category...</option>
                                @foreach($product_categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                                
                            </select>

                        </div>

                        <div class="col-md-6 col-sm-6 col-12 form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
                            <label for="quantity" data-error="wrong" data-success="right">Quantity</label>
                            <input type="number" name="quantity" id="usr-dob" class="form-control bd-3 h-40 validate input-alternate border-box" required value="{{ old('quantity') }}">

                             @if ($errors->has('quantity'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('quantity') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-12 form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
                        <label for="file" data-error="wrong" data-success="right">File</label>
                        <input multiple type="file" name="file[]" id="" class="form-control bd-3 h-40 validate input-alternate border-box" required value="{{ old('quantity') }}">

                         @if ($errors->has('quantity'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('quantity') }}</strong>
                                </span>
                            @endif
                    </div>

                    <div class="row">
                        <div class="col-md-6 offset-md-3 col-sm-6 offset-md-4 col-12 m-b-20">
                            <button type="submit" class="btn btn-success  waves-effect m-0">Add Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('plugins/mdb/js/jquery-3.1.1.min.js') }}"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('plugins/mdb/js/tether.min.js') }}"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('plugins/mdb/js/bootstrap.min.js') }}"></script>

    <!-- MDL core JavaScript -->
    <script type="text/javascript" src="{{ asset('plugins/mdb/js/mdb.min.js') }}"></script>

    <!-- Main JS -->
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <script>
        document.onreadystatechange = function() {
            if (document.readyState === "complete") {
                app.loginToggler();
                $('[data-toggle="tooltip"]').tooltip();
            }
        }
    </script>


</body>

</html>