@extends('layouts.master')
@section('content')	
	<div class="container">
		<h1 class="text-center">All Product</h1>
		<div class = 'row'>
			@forelse($products as $product)
				<div class="col-md-3 thumbnail jumbotron" >
				<p>name :{{ $product->name }}</p>
				<p>{{ $product->price }}</p>
				</div>
			@empty
			<p>no new product for now</p>
			@endforelse
		</div>
	</div>