@extends('layouts.main')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Product Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('products.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Product Name</b></label>
			<div class="col-sm-10">
				{{ $product->product_name }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Product Description</b></label>
			<div class="col-sm-10">
				{{ $product->product_desc }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Product Stock</b></label>
			<div class="col-sm-10">
				{{ $product->product_stock }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Product Buy Price</b></label>
			<div class="col-sm-10">
				{{ $product->product_buy_price }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Product Sell Price</b></label>
			<div class="col-sm-10">
				{{ $product->product_sell_price }}
			</div>
		</div>

		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Product Image</b></label>
			<div class="col-sm-10">
				<img src="{{ asset('img/product/' .  $product->product_image) }}" width="200" class="img-thumbnail" />
			</div>
		</div>
		<div class="text-center">
			<a href="{{ route('products.index') }}" class="btn btn-info">Back</a>
		</div>

	</div>
</div>

@endsection('content')