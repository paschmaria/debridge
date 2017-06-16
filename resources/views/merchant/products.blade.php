@extends('layouts.master')
@section('content')	
	<div class="container">
		<h1 class="text-center">All Product</h1>
		<div class = 'row'>
		@if(isset($products))
			@foreach($products as $product)
				<div class="col-md-3 thumbnail jumbotron" >
					<p>name : {{ $product->name }}</p>
					<p>{{ $product->price }}</p>
					<a class="btn btn-success" href="{{ route('edit_product', $product->id) }}">edit</a>
					<a class="btn btn-danger" href="{{ route('delete', $product->id) }}">delete</a>
				</div>
			@endforeach
		@else
		<p>No products in inventory</p>
		@endif
		</div>
	</div>
@endsection('content')