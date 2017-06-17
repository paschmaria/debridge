@extends('layouts.master')

@section('content')
    
    <div class="container">

        <a href="{{ route('addProduct') }}"><button class="btn btn-success">Add Product</button></a>
	        <a href="{{ route('allProduct') }}"><button class="btn btn-success">All Product</button></a>
        <a href="{{ route('view_product_of_week') }}"><button class="btn btn-success">View Product Of the Week</button></a>
        

    </div>


@endsection('content')