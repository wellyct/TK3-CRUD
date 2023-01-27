@extends('layouts.main')

@section('content')

<div class="card">
	<div class="card-header">Edit Data Product</div>
	<div class="card-body">
		<form method="post" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Product Name</label>
				<div class="col-sm-10">
					<input type="text" name="product_name" class="form-control" value="{{ $product->product_name }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Product Description</label>
				<div class="col-sm-10">
					<input type="text" name="product_desc" class="form-control" value="{{ $product->product_desc }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Product Stock</label>
				<div class="col-sm-10">
					<input type="number" name="product_stock" class="form-control" value="{{ $product->product_stock }}" />
				</div>
			</div>

			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Product Buy Price</label>
				<div class="col-sm-10">
					<input type="number" name="product_buy_price" class="form-control" value="{{ $product->product_buy_price }}" />
				</div>
			</div>

            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Product Sell Price</label>
				<div class="col-sm-10">
					<input type="number" name="product_sell_price" class="form-control" value="{{ $product->product_sell_price }}" />
				</div>
			</div>
			
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Product Image</label>
				<div class="col-sm-10">
					<input type="file" name="product_image" />
					<br />
					<img src="{{ asset('img/product/' . $product->product_image) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_product_image" value="{{ $product->product_image }}" />
				</div>
			</div>

			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $product->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
                <a href="{{ route('products.index') }}" class="btn btn-warning">Cancel</a>
			</div>	

		</form>
	</div>
</div>


@endsection('content')
