@extends('layouts.main')

@section('content')

@if($message = Session::get('success'))
<div class="alert alert-success">
	{{ $message }}
</div>
@endif

<!-- div class="container">
    <div class="row justify-content-center">
        <div class="row">
            <div class="card">
                <div class="card-header"><b>Student Data</b></div>

                <div class="card-body">

 -->
 <div class="container">
<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>PRODUCT DATA</b></div>
			<div class="col col-md-6">
				<a href="{{ route('products.create') }}" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Image</th>
				<th>Product Name</th>
				<th>Product Desc</th>
				<th>Stock</th>
				<th>Buy Price</th>
				<th>Sell Price</th>
				<th>Action</th>
            </tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
						<td><img src="{{ asset('img/product/' . $row->product_image) }}" width="75" class="img-thumbnail rounded" /></td>
						<td>{{ $row->product_name }}</td>
						<td>{{ $row->product_desc }}</td>
						<td>{{ $row->product_stock }}</td>
						<td>{{ $row->product_buy_price }}</td>
						<td>{{ $row->product_sell_price }}</td>
						<td>
							<form method="post" action="{{ route('products.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('products.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
								<a href="{{ route('products.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
								<input type="submit" class="btn btn-danger btn-sm" value="Delete" />
							</form>
							
						</td>
					</tr>

				@endforeach

			@else
				<tr>
					<td colspan="7" class="text-center">No Data Found</td>
				</tr>
			@endif
		</table>
		{!! $data->links() !!}
	</div>
</div>	
<!-- </div> -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
