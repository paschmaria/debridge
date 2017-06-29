@extends('layouts.app')

@section('content')
    
    <div class="container">

        <p>{{ $product->name }}</p>
        <p>{{ $product->price }}</p>
        <p>{{ $product->description }}</p>

    </div>


@endsection('content')