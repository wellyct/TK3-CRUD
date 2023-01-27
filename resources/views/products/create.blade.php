
@extends('layouts.main')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif
<div class="container">
<div class="card">
	<div class="card-header">Add Data Product</div>
	<div class="card-body">
		<form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Product Name</label>
				<div class="col-sm-10">
					<input type="text" name="product_name" class="form-control" autofocus required value="{{ old('product_name') }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Product Description</label>
				<div class="col-sm-10">
					<input type="text" name="product_desc" class="form-control" required value="{{ old('product_desc') }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Product Stock</label>
				<div class="col-sm-10">
					<input type="number" name="product_stock" class="form-control" min="1" max="999999" required value="{{ old('product_stock') }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Product Buy Price</label>
				<div class="col-sm-10">
					<input type="number" name="product_buy_price" class="form-control" min="1" max="99999999" required value="{{ old('product_buy_price') }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Product Sell Price</label>
				<div class="col-sm-10">
					<input type="number" name="product_sell_price" class="form-control" min="1" max="99999999" required value="{{ old('product_sell_price') }}" />
				</div>
			</div>
	
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Product Image</label>
				<div class="col-sm-10">
					<input type="file" name="product_image" />
				</div>
			</div>

			<div class="btn-group text-center" role="group">
				<input type="submit" class="btn btn-primary" value="Add" />
				<a href="/students" class="btn btn-warning"> Cancel </a>
			</div>

			<div class="text-center">
			</div>	
		</form>
	</div>
</div>
</div>
@endsection('content')