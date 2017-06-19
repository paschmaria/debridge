@extends('layouts.master')

@section('content')
    
    <div class="container">

        <a href="{{ route('addProduct') }}"><button class="btn btn-success">Add Product</button></a>

        <a href="{{ route('allProduct') }}"><button class="btn btn-success">All Product</button></a>

        <a href="{{ route('whats_new') }}"><button class="btn btn-success">New Products</button></a>
        

    </div>


@endsection('content')